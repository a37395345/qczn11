<?php
import('operator.navi.admincontroller');
import('publicFunction.CommonFunction');
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('imag.image.uploader');
import('operator.navi.privilegehelper');
import('imag.fusecookie');
import('imag.filesystem.fusefile');
import('imag.filesystem.filesystem');
import('imag.utilities.tool');



class RenshiController extends AdminController
{



	function __construct($config = array())
	{

		parent::__construct($config);
		$this->registerTask( 'index','index');
		$this->registerTask( 'zhiwei_index','zhiwei_index');
		$this->registerTask( 'getZhiweiList','getZhiweiList');
		$this->registerTask( 'tianjia','tianjia');
		$this->registerTask( 'add','add');
		$this->registerTask( 'gongzhi_type','gongzhi_type');
		$this->registerTask( 'add_gongzhi_type','add_gongzhi_type');
		$this->registerTask( 'insert_gongzhi_type','insert_gongzhi_type');
		$this->registerTask( 'delete_gongzhi_type','delete_gongzhi_type');
		$this->registerTask( 'xiangxi','xiangxi');
		$this->registerTask( 'delete','delete');
		$this->registerTask( 'qingjia_index','qingjia_index');
		$this->registerTask( 'qingjia_add','qingjia_add');
		$this->registerTask( 'qingjia_insert','qingjia_insert');
		$this->registerTask( 'qingjia_delete','qingjia_delete');
		$this->registerTask( 'zemp_add','zemp_add');
		$this->registerTask( 'zemp_index','zemp_index');
		$this->registerTask( 'zemp_insert','zemp_insert');
		$this->registerTask( 'zemp_xiangxi','zemp_xiangxi');

		$this->registerTask( 'zemp_qingjia_index','zemp_qingjia_index');
		$this->registerTask( 'zemp_qingjia_add','zemp_qingjia_add');
		$this->registerTask( 'zemp_qingjia_insert','zemp_qingjia_insert');
		$this->registerTask( 'zemp_qingjia_shenhe','zemp_qingjia_shenhe');
		$this->registerTask( 'zemp_lizhi','zemp_lizhi');
		$this->registerTask( 'zemp_delete','zemp_delete');
		$this->registerTask( 'list','list_a');
		$this->registerTask( 'zemp_yilan','zemp_yilan');
		$this->registerTask( 'export','export');
		
		
	}
	//员工一览表
	function zemp_yilan(){
		$emp_name=Request::getVar('emp_name','post');
		$emp_shopid=Request::getVar('emp_shopid','post');
		$object=new Object();
		$model = $this->createModel("renshi",dirname( __FILE__ ));
		$object->shop_list=$this->getshop_list();
		$where="where a.emp_stutas=1 and emp_post in (3,4,5)";
		if(!empty($emp_name)){
			$where.=" and emp_name like '%".$emp_name."%'";
			$object->emp_name=$emp_name;
		}
		if(!empty($emp_shopid)){
			$where.=" and emp_shopid = {$emp_shopid}";
			$object->emp_shopid=$emp_shopid;
		}

		$sql="select a.*,b.shop_id,b.shop_name,c.title from emp as a left join shop as b on a.emp_shopid=b.shop_id left join employee_level as c on a.emp_post=c.id {$where}";
		$list=$model->getListBySql($sql);
		//print_r($list);exit;
		$object->list=$list;
		$object->total=count($list);
		$view  = $this->createView("operator/renshi/zemp_yilan.html");
		$view->assign($object);
		$view->display();
	}
	function getshop_list(){
		$object=new Object();
		$model = $this->createModel("renshi",dirname( __FILE__ ));
		$sql="select * from shop where shop_id!=5";
		$list=$model->getListBySql($sql);
		return $list;
	}
	//获取总员工
	function getemp(){
		$object=new Object();
		$model = $this->createModel("renshi",dirname( __FILE__ ));
		$sql="select * from emp";
		$list=$model->getListBySql($sql);
		return $list;
	}
	//获取在职员工（包含临时）
	function getemp_zaizhi(){
		$object=new Object();
		$model = $this->createModel("renshi",dirname( __FILE__ ));
		$sql="select * from emp where emp_stutas=1";
		$list=$model->getListBySql($sql);
		return $list;
	}
	//获取在职员工（临时）
	function getemp_linshi(){
		$object=new Object();
		$model = $this->createModel("renshi",dirname( __FILE__ ));
		$day=time();
		$sql="select a.*,b.zhiwei_shiyongqi from emp as a left join zemp_zhiwei as b on a.emp_zhiweiid=b.id where a.emp_stutas=1 order by emp_pactEndDate asc";
		$list=$model->getListBySql($sql);
		$list_a=array();
		for($i=0;$i<count($list);$i++){
			//开始时间的时间戳
			$dt=$list[$i]['emp_pactStartDate'];
			//试用期的时间戳+合同开始时间
			$month="+".$list[$i]['zhiwei_shiyongqi']."month";
			if(strtotime($month,$dt)>time()){
				//试用期剩余天数，（合同开始时间+试用期）-当前时间
				$list[$i]['tianshu']=(int)((strtotime($month,$dt)-time())/86400);

				$list[$i]['emp_pactStartDate']=date("Y-m-d",$list[$i]['emp_pactStartDate']);
				$list[$i]['emp_pactEndDate']=date("Y-m-d",$list[$i]['emp_pactEndDate']);
				$list_a[]=$list[$i];
			}
			
		}
		return $list_a;
	}




	function list_a(){
		
		$object=new Object();
		$count_zong=count($this->getemp());
		$count_zaizhi=count($this->getemp_zaizhi());
		$count_lishi=count($this->getemp_linshi());
		$object->count_zong=$count_zong;
		$object->count_zaizhi=$count_zaizhi;
		$object->count_zhenshi=$count_zaizhi-$count_lishi;
		$object->count_lishi=$count_lishi;
		$object->count_lizhi=$count_zong-$count_zaizhi;
		$view  = $this->createView("operator/renshi/list.html");
		$view->assign($object);
		$view->display();
	}
	



	function index(){
		$day=time();
		$object=new Object();
		$model = $this->createModel("renshi",dirname( __FILE__ ));
		$sql="select * from emp where emp_stutas=1 order by emp_pactEndDate asc  LIMIT 0,30";
		$list=$model->getListBySql($sql);
		for($i=0;$i<count($list);$i++){
				//合同剩余天数 合同结束日期-当前时间
				$list[$i]['tianshu']=(int)(($list[$i]['emp_pactEndDate']-$day)/86400);
				$list[$i]['emp_pactStartDate']=date("Y-m-d",$list[$i]['emp_pactStartDate']);
				$list[$i]['emp_pactEndDate']=date("Y-m-d",$list[$i]['emp_pactEndDate']);
		}
		$sql_a="select a.*,b.zhiwei_shiyongqi from emp as a left join zemp_zhiwei as b on a.emp_zhiweiid=b.id where a.emp_stutas=1 order by emp_pactEndDate asc ";
		$list_a=$model->getListBySql($sql_a);
		$list_linshi=array();
		for($i=0;$i<count($list_a);$i++){
			//开始时间的时间戳
			$dt=$list_a[$i]['emp_pactStartDate'];
			//试用期的时间戳+合同开始时间
			$month="+".$list_a[$i]['zhiwei_shiyongqi']."month";
			if(strtotime($month,$dt)>time()){
				//试用期剩余天数，（合同开始时间+试用期）-当前时间
				$list_a[$i]['tianshu']=(int)((strtotime($month,$dt)-time())/86400);

				$list_a[$i]['emp_pactStartDate']=date("Y-m-d",$list_a[$i]['emp_pactStartDate']);
				$list_a[$i]['emp_pactEndDate']=date("Y-m-d",$list_a[$i]['emp_pactEndDate']);
				$list_linshi[]=$list_a[$i];
			}
			
		}

		$count_zong=count($this->getemp());
		$count_zaizhi=count($this->getemp_zaizhi());
		$count_lishi=count($this->getemp_linshi());

		
		$object->count_zong=$count_zong;
		$object->count_zaizhi=$count_zaizhi;
		$object->count_zhenshi=$count_zaizhi-$count_lishi;
		$object->count_lishi=$count_lishi;
		$object->count_lizhi=$count_zong-$count_zaizhi;

		$object->list_linshi=$list_linshi;
		$object->list=$list;
		//print_r($list);exit;
		$view  = $this->createView("operator/renshi/index.html");
		$view->assign($object);
		$view->display();
	}


	
	//添加员工
		function zemp_add(){
			$id=Request::getVar('id','get');
			$op=Request::getVar('op','get');
			$object=new Object();
			$model = $this->createModel("renshi",dirname( __FILE__ ));
			if($op=="update"&&!empty($id)){
				$sql_a="select * from emp where emp_id={$id}";
				$employee=$model->getListBySql($sql_a);
				$employee=$employee[0];
				$employee['emp_pactStartDate']=date("Y-m-d",$employee['emp_pactStartDate']);
				$employee['emp_pactEndDate']=date("Y-m-d",$employee['emp_pactEndDate']);
				$object->employee=$employee;
				$object->op=$op;
			}else{
				$object->op='add';
			}
			//门店
			$sql="select shop_id,shop_name from shop";
			$list_shop=$model->getListBySql($sql);
			//职位
			$sql_2="select id,title from employee_level";
			$list_level=$model->getListBySql($sql_2);
			//工资结构
			$sql1="select id,zhiwei_name from zemp_zhiwei";
			$list_zhiwei=$model->getListBySql($sql1);
			//print_r($list_zhiwei);exit;
			$object->list_shop=$list_shop;
			$object->list_level=$list_level;
			$object->list_zhiwei=$list_zhiwei;
			$view  = $this->createView("operator/renshi/zemp_add.html");
			$view->assign($object);
			$view->display();

		}
		function zemp_insert(){
			$upload_root = Config::homedir()."/thumb/";
			$id= Request::getVar('id','post');
			$op= Request::getVar('op','post');
			$emp_name= Request::getVar('emp_name','post');
			$zemp_butie= Request::getVar('zemp_butie','post');
			$emp_zhiweiid= Request::getVar('emp_zhiweiid','post');
			$zemp_anquan=Request::getVar('zemp_anquan','post');
			$emp_sex= Request::getVar('emp_sex','post');
			$emp_num= Request::getVar('emp_num','post');
			$emp_phone= Request::getVar('emp_phone','post');
			$emp_homeTel= Request::getVar('emp_homeTel','post');
			$emp_homeAdd= Request::getVar('emp_homeAdd','post');
			$emp_post= Request::getVar('emp_post','post');
			$emp_shopid= Request::getVar('emp_shopid','post');
			$emp_driverlicense= Request::getVar('emp_driverlicense','post');
			$emp_pactStartDate= strtotime(Request::getVar('emp_pactStartDate','post'));
			$emp_introduce= Request::getVar('emp_introduce','post');
			$emp_pactEndDate= strtotime(Request::getVar('emp_pactEndDate','post'));

			$emp_quitTime= strtotime(Request::getVar('emp_quitTime','post'));
			$emp_workTel=Request::getVar('emp_workTel','post');
			$oldimages=Request::getVar('oldimages','post');
			$emp_stutas=1;
			//图片
			$emp_image="";
			if(array_key_exists('images',$_FILES) && $_FILES["images"]["error"] == UPLOAD_ERR_OK){
	            $uploader = new Uploader($_FILES['images'],$upload_root);
	            $uploader->toUpload();            
	            $emp_image = $uploader->getFolderFile();
		    }

			$object=new Object();
			$object->emp_workTel=$emp_workTel;
			$object->zemp_butie=$zemp_butie;
			$object->emp_id=$id;
			$object->zemp_anquan=$zemp_anquan;
			$object->emp_stutas=$emp_stutas;
			$object->emp_name=$emp_name;
			$object->emp_sex=$emp_sex;
			$object->emp_num=$emp_num;
			$object->emp_zhiweiid=$emp_zhiweiid;
			$object->emp_phone=$emp_phone;
			$object->emp_homeTel=$emp_homeTel;
			$object->emp_homeAdd=$emp_homeAdd;
			$object->emp_post=$emp_post;
			$object->emp_shopid=$emp_shopid;
			$object->emp_driverlicense=$emp_driverlicense;
			$object->emp_pactStartDate=$emp_pactStartDate;
			$object->emp_introduce=$emp_introduce;
			$object->emp_pactEndDate=$emp_pactEndDate;
			$object->emp_quitTime=$emp_quitTime;
			
			if(!empty($emp_image)){
				$object->emp_image=$emp_image;
			}else{
				$object->emp_image=$oldimages;
			}
			$model = $this->createModel("renshi",dirname( __FILE__ ));
			//print_r($emp_image);exit;
			if(!empty($id)){
				
				$req=$model->update($object,'emp_id',"emp",'');
				
				if(!empty($req)){
				$this->redirect("zemp_index.php","修改成功");
				}else{
				$this->redirect("zemp_index.php","修改失败");
				}
			}else{
				$req=$model->instert($object,"emp");
				//print_r($req);exit;
				if(!empty($req)){
					$this->redirect("zemp_index.php","添加成功");
				}else{
					$this->redirect("zemp_index.php","添加失败");
				}
			}

			
			
		}
		//员工基础资料页面
		function zemp_index(){
			$where="where 1=1 ";
			$base_url = "zemp_index.php?";

			$phone = Request::getVar('phone','get');
			$emp_post = Request::getVar('emp_post','get');
			$emp_zhiweiid = Request::getVar('emp_zhiweiid','get');
			
			$realname = Request::getVar('realname','get');
			
			$emp_shopid = Request::getVar('emp_shopid','get');
			$emp_zhuangtai = Request::getVar('emp_zhuangtai','get');
			
			if(!empty($phone)){
				$where=$where." and emp_workTel={$phone} ";
				$base_url=$base_url."&emp_workTel={$phone}";
			}
			if(!empty($realname)){
				$where=$where." and emp_name like '%".$realname."%' ";
				$base_url=$base_url."&realname={$realname}";
			}
			if(!empty($emp_post)){
				$where=$where." and emp_post={$emp_post} ";
				$base_url=$base_url."&emp_post={$emp_post}";
			}

			if(!empty($emp_shopid)){
				$where=$where." and emp_shopid={$emp_shopid} ";
				$base_url=$base_url."&emp_shopid={$emp_shopid}";
			}
			if(!empty($emp_zhiweiid)){
				$where=$where." and emp_zhiweiid={$emp_zhiweiid} ";
				$base_url=$base_url."&emp_zhiweiid={$emp_zhiweiid}";
			}

			if(empty($emp_zhuangtai)){
				$emp_zhuangtai=2;
			}
			/*
			if($emp_zhuangtai==2){
				$where=$where." and emp_stutas=1";
				$base_url=$base_url."&emp_zhuangtai=2";
			}else if($emp_zhuangtai==3){
				$where=$where." and emp_stutas=1 and";
				$base_url=$base_url."&emp_zhuangtai=3";
			}*/
			

			$p = Request::getVar('p','get');
			if(empty($p)){$p=1;}
			
			$per_page = 20;
			$style = new PageStyle();
			$start = ($p-1)*$per_page;

			$object=new Object();
			$model = $this->createModel("renshi",dirname( __FILE__ ));
			$sql="select a.*,b.shop_name,c.zhiwei_shiyongqi,c.zhiwei_name,d.title from emp as a LEFT JOIN shop as b on a.emp_shopid=b.shop_id LEFT JOIN zemp_zhiwei as c on a.emp_zhiweiid=c.id left join employee_level as d on a.emp_post=d.id ".$where;
			$list=$model->getListBySql($sql);
			
			for($i=0;$i<count($list);$i++){
				if($list[$i]['emp_stutas']==1){
					$dt=$list[$i]['emp_pactStartDate'];
					$month="+".$list[$i]['zhiwei_shiyongqi']."month";
					if(strtotime($month,$dt)<time()){
						$list[$i]['zhuangtai']='正式期';
					}else{
						$list[$i]['zhuangtai']='试用期';
					}
				}else{
					$list[$i]['zhuangtai']='离职';
				}

				$list[$i]['emp_pactStartDate']=date("Y-m-d",$list[$i]['emp_pactStartDate']);
				$list[$i]['emp_pactEndDate']=date("Y-m-d",$list[$i]['emp_pactEndDate']);
				if(!empty($list[$i]['emp_quitTime'])){
					$list[$i]['emp_quitTime']=date("Y-m-d",$list[$i]['emp_quitTime']);
				}
				
			}
			$list_a=null;
			//print_r(count($list));exit;
			if($emp_zhuangtai==2){
				$base_url=$base_url."&emp_zhuangtai=2";
				for($i=0;$i<count($list);$i++){
					if($list[$i]['zhuangtai']=='正式期'||$list[$i]['zhuangtai']=='试用期'){
						$list_a[]=$list[$i];
					}
				}
			}else if($emp_zhuangtai==3){
				$base_url=$base_url."&emp_zhuangtai=3";
				for($i=0;$i<count($list);$i++){
					if($list[$i]['zhuangtai']=='正式期'){
						$list_a[]=$list[$i];
					}
				}
			}else if($emp_zhuangtai==4){
				$base_url=$base_url."&emp_zhuangtai=4";
				for($i=0;$i<count($list);$i++){
					if($list[$i]['zhuangtai']=='试用期'){
						$list_a[]=$list[$i];
					}
				}
			}else if($emp_zhuangtai==5){
				$base_url=$base_url."&emp_zhuangtai=5";
				for($i=0;$i<count($list);$i++){
					if($list[$i]['zhuangtai']=='离职'){
						$list_a[]=$list[$i];
					}
				}
			}else{
				$base_url=$base_url."&emp_zhuangtai=1";
				$list_a=$list;
			}
			$total_item=count($list_a);
			//分页
			$list_b=null;
			for($i=($p-1)*$per_page;$i<$p*$per_page;$i++){
				if($i<count($list_a)){
					$list_b[]=$list_a[$i];
				}
				
			}
			$options = array(
				"baseurl"	 => $base_url,
				"totalitems" => $total_item,
				"perpage"	 => $per_page,
				"page"	     => $p,
				"maxpage"	 => 15,
				"pagestyle"  => $style,
				"showtotal"  => false
			);
			$pagination = new Pagination($options);
			$p = $pagination->getPage();
			//部门
			$sql="select shop_id,shop_name from shop";
			$list_shop=$model->getListBySql($sql);
			//工资职位
			$sql1="select id,zhiwei_name from zemp_zhiwei";
			$list_zhiwei=$model->getListBySql($sql1);
			//职位
			$sql_2="select id,title from employee_level";
			$list_title=$model->getListBySql($sql_2);

			$object->uid=$_SESSION['a_uid'];;

			$object->list_title=$list_title;
			$object->list_shop=$list_shop;
			$object->list_zhiwei=$list_zhiwei;
			$object->list=$list_b;
			$object->PAGINATION = $pagination->fetch();
			$object->total = $total_item;
			$view  = $this->createView("operator/renshi/zemp_index.html");
			$view->assign($object);
			$view->display();
		}
	function zemp_xiangxi(){
		$id=Request::getVar('id','get');
		$object=new Object();
		$model = $this->createModel("renshi",dirname( __FILE__ ));
		$sql=$sql="select a.*,b.shop_name,c.id as zhiwei_id,c.zhiwei_shiyongqi,c.zhiwei_name,d.title from emp as a LEFT JOIN shop as b on a.emp_shopid=shop_id LEFT JOIN zemp_zhiwei as c on a.emp_zhiweiid=c.id left join employee_level as d on a.emp_post=d.id where a.emp_id={$id}";
		$list=$model->getListBySql($sql);
		$list=$list[0];
		if($list['emp_stutas']==1){
			$dt=$list['emp_pactStartDate'];
			$month="+".$list['zhiwei_shiyongqi']."month";
			if(strtotime($month,$dt)<time()){
				$list['zhuangtai']='正式期';
			}else{
				$list['zhuangtai']='试用期';
			}
		}else{
			$list['zhuangtai']='离职';
		}
		$object->list=$list;
		$view  = $this->createView("operator/renshi/zemp_xiangxi.html");
		$view->assign($object);
		$view->display();
	}
	//离职
	function zemp_lizhi(){
		$model = $this->createModel("renshi",dirname( __FILE__ ));
		$id=Request::getVar('id','get');
		$object=new Object();
		$object->emp_quitTime=time();
		$object->emp_id=$id;
		$object->emp_stutas=-1;
		$req=$model->update($object,'emp_id',"emp",'');
		if(!empty($req)){
			$this->redirect("zemp_index.php","离职成功");
		}else{
			$this->redirect("zemp_index.php","离职失败");
		}
	}
	function zemp_delete(){

		$model = $this->createModel("renshi",dirname( __FILE__ ));
		$id=Request::getVar('id','get');
		$sql="delete from emp where emp_id={$id}";
		$req=$model->delete($sql);
		if(!empty($req)){
			$this->redirect("zemp_index.php","删除成功");
		}else{
			$this->redirect("zemp_index.php","删除失败");
		}
	}
     

	//职位页面
	function zhiwei_index(){
		$model = $this->createModel("renshi",dirname( __FILE__ ));
		$sql="select * from zemp_zhiwei";
		$list=$model->getListBySql($sql);
		for($i=0;$i<count($list);$i++){
			$list[$i]['zhiwei_shiyong']=unserialize($list[$i]['zhiwei_shiyong']);
			$list[$i]['zhiwei_shiyong_money']=unserialize($list[$i]['zhiwei_shiyong_money']);
			$list[$i]['zhiwei_zhengshi']=unserialize($list[$i]['zhiwei_zhengshi']);
			$list[$i]['zhiwei_zhengshi_money']=unserialize($list[$i]['zhiwei_zhengshi_money']);
		}
		//print_r($list);exit;
		$object=new Object();
		$object->list=$list;
		$view  = $this->createView("operator/renshi/zhiwei_index.html");
		$view->assign($object);
		$view->display();
		
	}
	
	function tianjia(){
		$id=Request::getVar('id','get');
		$op=Request::getVar('op','get');
		$object= new Object();
		$model = $this->createModel("renshi",dirname( __FILE__ ));
		$sql="select * from zemp_gongzhi_type";
		$gongzhi_typelist=$model->getListBySql($sql);
		if($op=="update"&&!empty($id)){
			$sql="select * from zemp_zhiwei where id=".$id;
			$list=$model->getListBySql($sql);
			$list=$list[0];
			$list['zhiwei_shiyong']=unserialize($list['zhiwei_shiyong']);
			$list['zhiwei_shiyong_money']=unserialize($list['zhiwei_shiyong_money']);
			$list['zhiwei_zhengshi']=unserialize($list['zhiwei_zhengshi']);
			$list['zhiwei_zhengshi_money']=unserialize($list['zhiwei_zhengshi_money']);
			$object->list=$list;

			$object->op=$op;
			for($i=0;$i<count($gongzhi_typelist);$i++){
				for($j=0;$j<count($list['zhiwei_shiyong']);$j++){
					if($gongzhi_typelist[$i]['id']==$list['zhiwei_shiyong'][$j]){
						$gongzhi_typelist[$i]['type']=1;
						$gongzhi_typelist[$i]['money']=$list['zhiwei_shiyong_money'][$j];
					}
				}
				for($j=0;$j<count($list['zhiwei_zhengshi']);$j++){
					if($gongzhi_typelist[$i]['id']==$list['zhiwei_zhengshi'][$j]){
						$gongzhi_typelist[$i]['type_1']=1;
						$gongzhi_typelist[$i]['money_1']=$list['zhiwei_zhengshi_money'][$j];
					}
				}
			}

		}else{
			$object->op='add';
		}
		$object->gongzhi_typelist=$gongzhi_typelist;
		$view  = $this->createView("operator/renshi/tianjia.html");
		$view->assign($object);
		$view->display();
	}

	function add(){
		$id=Request::getVar('id','post');

		$zhiwei_name=Request::getVar('zhiwei_name','post');//名称
		$zhiwei_shiyongqi=Request::getVar('zhiwei_shiyongqi','post');//试用期
		$zhiwei_shiyong_dixin=Request::getVar('zhiwei_shiyong_dixin','post');//试用期底薪
		$zhiwei_zhengshi_dixin=Request::getVar('zhiwei_zhengshi_dixin','post');//正式期底薪
		$zhiwei_xiuxi=Request::getVar('zhiwei_xiuxi','post');//休息类型
		$gongzhi_type=Request::getVar('gongzhi_type','post');//试用期工资项目名称
		$moeny=Request::getVar('moeny','post');//试用期工资项目金额
		$gongzhi_type_1=Request::getVar('gongzhi_type_1','post');//正式期工资项目名称
		$moeny_1=Request::getVar('moeny_1','post');//正式期工资项目金额

		$model = $this->createModel("renshi",dirname( __FILE__ ));//实例化数据库连接
		$object=new Object();
		$object->zhiwei_shiyong=serialize($gongzhi_type);//序列化试用期工资项目名称
		$object->zhiwei_zhengshi_dixin=$zhiwei_zhengshi_dixin;
		$object->zhiwei_shiyong_dixin=$zhiwei_shiyong_dixin;
		$object->zhiwei_zhengshi=serialize($gongzhi_type_1);//序列化正式期工资项目名称
		$object->zhiwei_shiyong_money=serialize($moeny);//序列化试用期工资项目金额
		$object->zhiwei_zhengshi_money=serialize($moeny_1);//序列化正式期工资项目金娥
		$object->zhiwei_xiuxi=$zhiwei_xiuxi;
		$object->zhiwei_name=$zhiwei_name;
		
		$object->id=$id;
		$object->zhiwei_shiyongqi=$zhiwei_shiyongqi;
		//如果id不存在就是添加，如果有则为修改
		if(!empty($id)){
			$req=$model->update($object,'id',"zemp_zhiwei",'');
			
			if(!empty($req)){
			$this->redirect("zhiwei_index.php","修改成功");
			}else{
			$this->redirect("zhiwei_index.php","修改失败");
			}
		}else{
			$req=$model->instert($object,"zemp_zhiwei");
			if(!empty($req)){
				$this->redirect("zhiwei_index.php","添加成功");
			}else{
				$this->redirect("zhiwei_index.php","添加失败");
			}
		}
		


		
	}
	//删除职位
	function delete(){
		$id=Request::getVar('id','get');
		$model = $this->createModel("renshi",dirname( __FILE__ ));
		$sql="delete from zemp_zhiwei where id={$id}";
		$req=$model->delete($sql);
		
		if(!empty($req)){
			$this->redirect("zhiwei_index.php","删除成功");
		}else{
			$this->redirect("zhiwei_index.php","删除失败");
		}
	}

	//$lsi_id=Request::getVar('lsi_id','get');
	//$object= new Object();
	//$model = $this->createModel("wenti",dirname( __FILE__ ));
	//$view  = $this->createView("operator/wenti/list.html");
	//$view->assign($object);
		//print_r($object->wenti);exit;
		//$view->display();

	//工资项目
	function gongzhi_type(){
		$model = $this->createModel("renshi",dirname( __FILE__ ));
		$sql="select * from zemp_gongzhi_type";
		$list=$model->getListBySql($sql);
		$object=new Object();
		$object->list=$list;
		$view  = $this->createView("operator/renshi/gongzhi_type.html");
		$view->assign($object);
		$view->display();
		
	}

	//详细
	function xiangxi(){
		$emp_id=Request::getVar('emp_id','get');
		$id=Request::getVar('id','get');
		$model = $this->createModel("renshi",dirname( __FILE__ ));

		$sql="select * from zemp_zhiwei where id={$id}";
		$list=$model->getListBySql($sql);
		$list=$list[0];
		$list_s=null;

		$list['zhiwei_shiyong']=$this->getGongzhitype($list['zhiwei_shiyong']);
		$list['zhiwei_shiyong_money']=unserialize($list['zhiwei_shiyong_money']);
		for($i=0;$i<count($list['zhiwei_shiyong']);$i++){
			$sql_a="select * from zemp_gongzhi_type where type_name='".
			$list['zhiwei_shiyong'][$i]."'";
			$list_a=$model->getListBySql($sql_a);
			$list_s[$i]['type_name']=$list['zhiwei_shiyong'][$i];
			$list_s[$i]['zhiwei_shiyong_money']=$list['zhiwei_shiyong_money'][$i];
			$list_s[$i]['type_danwei']=$list_a[0]['type_danwei'];
			$list_s[$i]['type_jisuan']=$list_a[0]['type_jisuan'];
			$list_s[$i]['type_jishu']=$list_a[0]['type_jishu'];
			$list_s[$i]['type_shuliang']=$list_a[0]['type_shuliang'];
			$list_s[$i]['type_guize']=$list_a[0]['type_guize'];
		}
		
		

		$list_z=null;
		$list['zhiwei_zhengshi']=$this->getGongzhitype($list['zhiwei_zhengshi']);
		$list['zhiwei_zhengshi_money']=unserialize($list['zhiwei_zhengshi_money']);

		for($i=0;$i<count($list['zhiwei_zhengshi']);$i++){
			$sql_a="select * from zemp_gongzhi_type where type_name='".
			$list['zhiwei_zhengshi'][$i]."'";
			$list_a=$model->getListBySql($sql_a);
			
			$list_z[$i]['type_name']=$list['zhiwei_zhengshi'][$i];
			$list_z[$i]['zhiwei_zhengshi_money']=$list['zhiwei_zhengshi_money'][$i];
			$list_z[$i]['type_danwei']=$list_a[0]['type_danwei'];
			$list_z[$i]['type_jisuan']=$list_a[0]['type_jisuan'];
			$list_z[$i]['type_jishu']=$list_a[0]['type_jishu'];
			$list_z[$i]['type_shuliang']=$list_a[0]['type_shuliang'];
			$list_z[$i]['type_guize']=$list_a[0]['type_guize'];
		}

		$object=new Object();
		//员工固定项工资
		if(!empty($emp_id)){
			$sql_e="select emp_name,zemp_anquan,emp_pactStartDate,zemp_butie from emp where emp_id={$emp_id}";
			$emp=$model->getListBySql($sql_e);
			$emp=$emp[0];
			
			if($emp['zemp_anquan']=='1'){
				if(strtotime("+2year",$emp['emp_pactStartDate'])<time()){
					$emp['nianxian']=3;
				}else if(strtotime("+1year",$emp['emp_pactStartDate'])<time()){
					$emp['nianxian']=2;
				}else{
					$emp['nianxian']=1;
				}
				
			}
			$object->emp=$emp;
			
		}
		$object->list_s=$list_s;
		$object->list_z=$list_z;
		$object->list=$list;
		$view  = $this->createView("operator/renshi/xiangxi.html");
		$view->assign($object);
		$view->display();
	}



	//添加项目页面
	function add_gongzhi_type(){
		$op=Request::getVar('op','get');
		$id=Request::getVar('id','get');
		
		$object= new Object();
		if($op=="update"&&!empty($id)){
			$model = $this->createModel("renshi",dirname( __FILE__ ));
			$sql="select * from zemp_gongzhi_type where id=".$id;
			$list=$model->getListBySql($sql);
			$object->list=$list[0];
		}
		if(!empty($op)){
			$object->op=$op;
		}else{
			$object->op='add';
		}
		
		$view  = $this->createView("operator/renshi/add_gongzhi_type.html");
		$view->assign($object);
		$view->display();
	}
	//添加项目
	function insert_gongzhi_type(){
		$id=Request::getVar('id','post');
		$type_name=Request::getVar('type_name','post');
		$type_danwei=Request::getVar('type_danwei','post');
		$type_jisuan=Request::getVar('type_jisuan','post');
		$type_shuliang=Request::getVar('type_shuliang','post');
		$type_jishu=Request::getVar('type_jishu','post');
		$type_guize=Request::getVar('type_guize','post');
		
		$model = $this->createModel("renshi",dirname( __FILE__ ));
		$object= new Object();
		$object->type_shuliang=$type_shuliang;
		$object->type_jishu=$type_jishu;
		$object->type_guize=$type_guize;
		$object->type_name=$type_name;
		$object->type_danwei=$type_danwei;
		$object->type_jisuan=$type_jisuan;
		$object->id=$id;
		
		if(!empty($id)){
			$req=$model->update($object,'id',"zemp_gongzhi_type",'');
			if(!empty($req)){
			$this->redirect("gongzhi_type.php","修改成功");
			}else{
			$this->redirect("gongzhi_type.php","修改失败");
			}
		}else{
			$req=$model->instert($object,"zemp_gongzhi_type");
			if(!empty($req)){
			$this->redirect("gongzhi_type.php","添加成功");
			}else{
			$this->redirect("gongzhi_type.php","添加失败");
			}
		}
		

		
	}
	//删除项目
	function delete_gongzhi_type(){
		$id=Request::getVar('id','get');
		$model = $this->createModel("renshi",dirname( __FILE__ ));
		$sql="delete from zemp_gongzhi_type where id={$id}";
		$req=$model->delete($sql);
		
		if(!empty($req)){
			$this->redirect("gongzhi_type.php","删除成功");
		}else{
			$this->redirect("gongzhi_type.php","删除失败");
		}
	}
	//将序列化解析，查询出项目名称
	function getGongzhitype($data){
		$list=null;
		$model = $this->createModel("renshi",dirname( __FILE__ ));
		$sql="select * from zemp_gongzhi_type";
		$list_1=$model->getListBySql($sql);
		$data=unserialize($data);
		for($i=0;$i<count($data);$i++){
			for($j=0;$j<count($list_1);$j++){
				if($data[$i]==$list_1[$j]['id']){
					$list[]=$list_1[$j]['type_name'];
				}
			}
		}
		return $list;
	}

	//导出
	function export(){
		$model = $this->createModel("renshi",dirname( __FILE__ ));
		$sql="select a.*,b.shop_name,c.zhiwei_shiyongqi,c.zhiwei_name,d.title from emp as a LEFT JOIN shop as b on a.emp_shopid=b.shop_id LEFT JOIN zemp_zhiwei as c on a.emp_zhiweiid=c.id left join employee_level as d on a.emp_post=d.id ";
			$list=$model->getListBySql($sql);
			
			for($i=0;$i<count($list);$i++){
				if($list[$i]['emp_stutas']==1){
					$dt=$list[$i]['emp_pactStartDate'];
					$month="+".$list[$i]['zhiwei_shiyongqi']."month";
					if(strtotime($month,$dt)<time()){
						$list[$i]['zhuangtai']='正式期';
					}else{
						$list[$i]['zhuangtai']='试用期';
					}
				}else{
					$list[$i]['zhuangtai']='离职';
				}

				$list[$i]['emp_pactStartDate']=date("Y-m-d",$list[$i]['emp_pactStartDate']);
				$list[$i]['emp_pactEndDate']=date("Y-m-d",$list[$i]['emp_pactEndDate']);
				if(!empty($list[$i]['emp_quitTime'])){
					$list[$i]['emp_quitTime']=date("Y-m-d",$list[$i]['emp_quitTime']);
				}
				
			}
			$list_a=null;

			
			for($i=0;$i<count($list);$i++){
				if($list[$i]['zhuangtai']=='正式期'||$list[$i]['zhuangtai']=='试用期'){
					$list_a[]=$list[$i];
				}
			}
			
		     
		header ( "Content-type:application/vnd.ms-excel" );
		header ( "Content-Disposition:filename=员工清单.xls" );
		echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
		<html xmlns='http://www.w3.org/1999/xhtml'>
		<head>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		<title></title>
		</head>
		<body>
		<table width='100%' border='1'>
		  <tr>
		    <td colspan='11'>员工清单</td>
		  </tr>
		  <tr>
		    <td>姓名</td>
		    <td>职位</td>
		    <td>驾照类型</td>
		    <td>手机号</td>
		    <td>部门</td>
		    <td>身份证号码</td>
		    <td>家庭地址</td>
			<td>公司电话</td>
			<td>合同开始日期</td>
		    <td>合同结束日期</td>
		    <td>状态</td>
		  </tr>";
		if(is_array($list_a)){
			foreach($list_a as $item)
	        {
			echo "
			  <tr>
			    <td>".$item["emp_name"]."</td>
			    <td>".$item["title"]."</td>
				<td>".$item["emp_driverlicense"]."</td>
				<td>".$item["emp_phone"]."</td>
				<td>".$item["shop_name"]."</td>
				<td>".$item["emp_num"]."</td>
				<td>".$item["emp_homeAdd"]."-".$item["emp_pactEndDate"]."</td>
				<td>'".$item["emp_workTel"]."</td>
			    <td>".$item["emp_pactStartDate"]."</td>
			    <td>".$item["emp_pactEndDate"]."</td>
			    <td>".$item["zhuangtai"]."</td>
			    </tr>";
	        }
		}
		
		echo "
		</table>
		</body>
		</html>";
	}



}
