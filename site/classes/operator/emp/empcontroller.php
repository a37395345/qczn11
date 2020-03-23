<?php
import('operator.navi.admincontroller');
import('publicFunction.CommonFunction');
import('imag.utilities.pagination');
import('imag.utilities.pagestyle_a');
import('imag.utilities.pagestyle');
import('imag.image.uploader');
import('operator.navi.privilegehelper');
import('imag.fusecookie');
import('imag.filesystem.fusefile');
import('imag.filesystem.filesystem');
import('imag.utilities.tool');
class empController extends AdminController
{
	private $package="site/operator/emp";
	function __construct($config = array())
	{
		parent::__construct($config);
		$this->registerTask( 'list','list_a');
		$this->registerTask( 'index','index');
		$this->registerTask( 'add','add');
		$this->registerTask( 'insert','insert');
		$this->registerTask( 'edit','edit');
		$this->registerTask( 'update','update');
		$this->registerTask( 'liszhi','liszhi');
		$this->registerTask( 'xiangxi','xiangxi');
		$this->registerTask( 'setStatus','setStatus');
		$this->registerTask( 'delete','delete');
		$this->registerTask( 'export','export');
		$this->registerTask( 'generatepicutrea','generatepicutrea');
		$this->registerTask( 'getRenlian','getRenlian');
		$this->registerTask( 'huangang','huangang');
		$this->registerTask( 'huangang_action','huangang_action');
		$this->registerTask( 'zemp_yilan','zemp_yilan');
		$this->registerTask( 'getShangjiZhiwei','getShangjiZhiwei');
	
	}
	//详细
	function xiangxi(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/xiangxi");
		$emp_id=Request::getVar('emp_id','get');
		$sql="select a.*,b.shop_name,c.zhiwei_shiyongqi,c.zhiwei_name,d.title,e.zhiwei_name,f.name from emp as a LEFT JOIN shop as b on a.emp_shopid=b.shop_id LEFT JOIN zemp_zhiwei as c on a.emp_zhiweiid=c.id left join employee_level as d on a.emp_post=d.id left join zemp_zhiwei as e on a.emp_zhiweiid=e.id left join department as f on a.department_id=f.id where emp_id={$emp_id}";
		$data=$CommonFunction->getData($sql);
		if($data['emp_stutas']==1){
			$dt=$data['emp_pactStartDate'];
			$month="+".$data['zhiwei_shiyongqi']."month";
			if(strtotime($month,$dt)<time()){
				$data['zhuangtai']='正式期';
			}else{
				$data['zhuangtai']='试用期';
			}
		}else{
			$data['zhuangtai']='离职';
		}

		$data['emp_addtime']=date("Y-m-d",$data['emp_addtime']);
		$data['emp_pactStartDate']=date("Y-m-d",$data['emp_pactStartDate']);
		$data['emp_pactEndDate']=date("Y-m-d",$data['emp_pactEndDate']);
		if(!empty($data['emp_quitTime'])){
			$data['emp_quitTime']=date("Y-m-d",$data['emp_quitTime']);
		}
		if(!empty($data['emp_jiazhaotime'])){
			$data['emp_jiazhaotime']=date("Y-m-d",$data['emp_jiazhaotime']);
		}

		$sql1="select a.*,b.shop_name,c.emp_name,d.zhiwei_name,e.zhiwei_name as zhiwei_nameb,f.shop_name as shop_nameb 
		from zemp_huangang as a 
		left join shop as b on a.shop_ida=b.shop_id 
		left join emp as c on a.add_empid=c.emp_id 
		left join zemp_zhiwei as d on a.zhiwei_ida=d.id 
		left join zemp_zhiwei as e on a.zhiwei_idb=e.id 
		left join shop as f on a.shop_idb=f.shop_id 
		where a.emp_id={$emp_id}";
		$huangang=$CommonFunction->getList($sql1);
		for($i=0;$i<count($huangang);$i++){
			$huangang[$i]['addtime']=date("Y-m-d H:i:s",$huangang[$i]['addtime']);
		}
		//print_r($huangang);exit;
		//print_r($huangang);exit;
		$object = new stdClass();
		$object ->huangang=$huangang;
		$object ->data=$data;
		$object->rule=$CommonFunction->panduan_rule("site/operator/zhiwei/xiangxi");
		$view  = $this->createView("operator/emp/xiangxi.html");
		$view->assign($object);
		$view->display();

	}
	function list_a(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/list");
		$sql="select a.*,b.zhiwei_shiyongqi from emp as a left join zemp_zhiwei as b on a.emp_zhiweiid=b.id";
		$list=$CommonFunction->getList($sql);
		$object = new stdClass();
		$quanbu=count($list);
		$lizhi=0;
		$zhengshi=0;
		$shiyong=0;
		for($i=0;$i<count($list);$i++){
			if($list[$i]['emp_stutas']==1){
				$dt=$list[$i]['emp_pactStartDate'];
				//试用期的时间戳+合同开始时间
				$month="+".$list[$i]['zhiwei_shiyongqi']."month";
				if(strtotime($month,$dt)>time()){
						$shiyong=$shiyong+1;
				}else{
					$zhengshi=$zhengshi+1;
				}
			}else{
				$lizhi=$lizhi+1;
			}
		}
		$object->quanbu=$quanbu;
		$object->lizhi=$lizhi;
		$object->zhengshi=$zhengshi;
		$object->shiyong=$shiyong;
		$object->zaizhi=$shiyong+$zhengshi;
		//是否有查看权限
		$object->rule_add=$CommonFunction->panduan_rule($this->package."/index");
		$view  = $this->createView("operator/emp/list.html");
		$view->assign($object);
		$view->display();
		
	}

	
	function index(){
			$CommonFunction=new CommonFunction();
			$CommonFunction->getQuanxian($this->package."/index");

			$where="where 1=1 ";
			$base_url = "index.php?";
			//员工状态
			$type=Request::getVar('type','get');
			if(empty($type)){
				$type=2;
			}

			//员工号码
			$zemp_num=Request::getVar('zemp_num','get');
			if(!empty($zemp_num)){
				$where=$where." and a.zemp_num like'%{$zemp_num}%' ";
				$base_url=$base_url."&zemp_num={$zemp_num}";
			}
			//部门
			$department_id=Request::getVar('department_id','get');
			if(!empty($department_id)){
				$where=$where." and a.department_id='{$department_id}' ";
				$base_url=$base_url."&department_id={$department_id}";
			}
			//姓名的模糊查询
			$emp_name=Request::getVar('emp_name','get');
			if(!empty($emp_name)){
				$where=$where." and a.emp_name like '%{$emp_name}%' ";
				$base_url=$base_url."&emp_name={$emp_name}";
			}
			//职位
			$emp_zhiweiid = Request::getVar('emp_zhiweiid','get');
			if(!empty($emp_zhiweiid)){
				$where=$where." and a.emp_zhiweiid ={$emp_zhiweiid} ";
				$base_url=$base_url."&emp_zhiweiid={$emp_zhiweiid}";
			}
			//身份证号码
			$emp_num=Request::getVar('emp_num','get');
			if(!empty($emp_num)){
				$where=$where." and a.emp_num like '%{$emp_num}%' ";
				$base_url=$base_url."&emp_num={$emp_num}";
			}
			//门店
			$emp_shopid = Request::getVar('emp_shopid','get');
			if(!empty($emp_shopid)){
				$where=$where." and a.emp_shopid={$emp_shopid} ";
				$base_url=$base_url."&emp_shopid={$emp_shopid}";
			}
			//公司电话
			$emp_workTel = Request::getVar('emp_workTel','get');
			if(!empty($emp_workTel)){
				$where=$where." and a.emp_workTel={$emp_workTel} ";
				$base_url=$base_url."&emp_workTel={$emp_workTel}";
			}
			//私人电话
			$emp_phone = Request::getVar('emp_phone','get');
			if(!empty($emp_phone)){
				$where=$where." and a.emp_phone={$emp_phone} ";
				$base_url=$base_url."&emp_phone={$emp_phone}";
			}
			//合同开始时间
			$emp_pactStartDate=Request::getVar('emp_pactStartDate','get');
			if($emp_pactStartDate){
				$base_url.="&emp_pactStartDate={$emp_pactStartDate}";
            	$where .=" AND a.emp_pactEndDate>=".strtotime($emp_pactStartDate);
			}

			$emp_pactEndDate=Request::getVar('emp_pactEndDate','get');
			if(!empty($emp_pactEndDate)){
	            $base_url.="&emp_pactEndDate={$emp_pactEndDate}";
	            $where .=" AND a.emp_pactStartDate<=".(strtotime($emp_pactEndDate." 23:59:59"));
        	}
			
			
			$p = Request::getVar('p','get');
			if(empty($p)){$p=1;}
			$per_page = 20;
			$style = new PageStyle_a();
			$start = ($p-1)*$per_page;

			$object=new Object();
			$model = $this->createModel("renshi",dirname( __FILE__ ));
			$sql="select a.*,b.shop_name,c.zhiwei_shiyongqi,c.zhiwei_name,d.title,e.zhiwei_name,f.name as department_name from emp as a 
			LEFT JOIN shop as b on a.emp_shopid=b.shop_id 
			LEFT JOIN zemp_zhiwei as c on a.emp_zhiweiid=c.id 
			left join employee_level as d on a.emp_post=d.id 
			left join zemp_zhiwei as e on a.emp_zhiweiid=e.id 
			left join department as f on a.department_id=f.id ".$where;
			$list=$CommonFunction->getList($sql);
			
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

				$list[$i]['emp_addtime']=date("Y-m-d",$list[$i]['emp_addtime']);
				$list[$i]['emp_pactStartDate']=date("Y-m-d",$list[$i]['emp_pactStartDate']);
				$list[$i]['emp_pactEndDate']=date("Y-m-d",$list[$i]['emp_pactEndDate']);
				if(!empty($list[$i]['emp_quitTime'])){
					$list[$i]['emp_quitTime']=date("Y-m-d",$list[$i]['emp_quitTime']);
				}
				
			}
			$list_a=null;
			//print_r(count($list));exit;
			if($type==2){
				$base_url=$base_url."&type=2";
				for($i=0;$i<count($list);$i++){
					if($list[$i]['zhuangtai']=='正式期'||$list[$i]['zhuangtai']=='试用期'){
						$list_a[]=$list[$i];
					}
				}
			}else if($type==3){
				$base_url=$base_url."&type=3";
				for($i=0;$i<count($list);$i++){
					if($list[$i]['zhuangtai']=='正式期'){
						$list_a[]=$list[$i];
					}
				}
			}else if($type==4){
				$base_url=$base_url."&type=4";
				for($i=0;$i<count($list);$i++){
					if($list[$i]['zhuangtai']=='试用期'){
						$list_a[]=$list[$i];
					}
				}
			}else if($type==5){
				$base_url=$base_url."&type=5";
				for($i=0;$i<count($list);$i++){
					if($list[$i]['zhuangtai']=='离职'){
						$list_a[]=$list[$i];
					}
				}
			}else{
				$base_url=$base_url."&type=1";
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

			for($i=0;$i<count($list_b);$i++){
				$sql1="select status from admin_users where user_id={$list_b[$i]['emp_id']}";
				$status=$CommonFunction->getDataY($sql1,"status");
				if(count($status)>0){
					
					if($status==0){
						$list_b[$i]['status']="1";
					}else{
						$list_b[$i]['status']="2";
					}
				}else{
					$list_b[$i]['status']="3";
				}
			}
			$options = array(
				"baseurl"	 => $base_url,
				"totalitems" => $total_item,
				"perpage"	 => $per_page,
				"page"	     => $p,
				"maxpage"	 => 10,
				"pagestyle"  => $style,
				"showtotal"  => false
			);
			$pagination = new Pagination($options);
			$p = $pagination->getPage();
			//门店
			$sql="select shop_id,shop_name from shop";
			$list_shop=$CommonFunction->getList($sql);
			//职位
			$sql1="select id,zhiwei_name from zemp_zhiwei where status=0 order by zhiwei_order asc";
			$list_zhiwei=$CommonFunction->getList($sql1);
			//部门
			$sql_2="select * from department where status=0 order by department_order asc";
			$list_department=$CommonFunction->getList($sql_2);

			$list_department=$CommonFunction->paixuDepartment($list_department,0);
			$object->emp_add=$CommonFunction->panduan_rule($this->package."/add");
			$object->emp_edit=$CommonFunction->panduan_rule($this->package."/edit");
			$object->emp_lizhi=$CommonFunction->panduan_rule($this->package."/lizhi");
			$object->emp_delete=$CommonFunction->panduan_rule($this->package."/delete");
			$object->emp_export=$CommonFunction->panduan_rule($this->package."/export");
			$object->emp_xiangxi=$CommonFunction->panduan_rule($this->package."/xiangxi");
			$object->emp_huangang=$CommonFunction->panduan_rule($this->package."/huangang");
			$object->emp_setStatus=$CommonFunction->panduan_rule($this->package."/setStatus");
			
			$object->uid=$_SESSION['a_uid'];;
			$object->p=$p;
			$object->type=$type;
			$object->list_department=$list_department;
			$object->list_shop=$list_shop;
			$object->list_zhiwei=$list_zhiwei;
			$object->list=$list_b;
			$object->PAGINATION = $pagination->fetch();
			$object->total = $total_item;
			$view  = $this->createView("operator/emp/index.html");
			$view->assign($object);
			$view->display();


		/*
		$quanbu=count($CommonFunction->getList($sql));
		$object = new stdClass();
		$sql="select a.*,b.name from zemp_zhiwei as a left join department as b on a.department_id=b.id  order by a.zhiwei_order asc";
		$list=$CommonFunction->getList($sql);
		$object->list=$list;

		$object->rule_add=$CommonFunction->panduan_rule($this->package."/add");
		$object->rule_edit=$CommonFunction->panduan_rule($this->package."/edit");
		$object->rule_setStatus=$CommonFunction->panduan_rule($this->package."/setStatus");
		$object->rule_setRule=$CommonFunction->panduan_rule($this->package."/setRule");
		$object->rule_delete=$CommonFunction->panduan_rule($this->package."/delete");

		$view  = $this->createView("operator/emp/index.html");
		$view->assign($object);
		$view->display();*/
	}

	function setStatus(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/setStatus");
		$user_id= Request::getVar('id','get');
		$sql="select * from admin_users where user_id={$user_id}";
		$data=$CommonFunction->getData($sql);
		$status=0;
		if($data['status']==0){
			$status=-1;
		}
		$text="切换成功！";
		$object = new stdClass();
		$object->status=$status;
		$object->user_id=$user_id;
		$re=true;
		if($CommonFunction->update_a($object,"user_id","admin_users","")){
			 $re=true;
		}else{
			 $re=false;
				$text="切换失败！";
		}
		if($re){
			$CommonFunction->setAction("切换了id为".$user_id."的账号启用");
		}
		$this->redirect("index.php",$text);
	}
	
	function add(){

		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/add");
		//职位
		$sql1="select id,zhiwei_name from zemp_zhiwei where status=0 order by zhiwei_order asc";
		$list_zhiwei=$CommonFunction->getList($sql1);
		//门店
		$sql="select shop_id,shop_name from shop";
		$list_shop=$CommonFunction->getList($sql);

		$sql_2="select id,title from employee_level";
		$list_level=$CommonFunction->getList($sql_2);

		$object = new stdClass();
		$object->list_level=$list_level;
		$object->list_zhiwei=$list_zhiwei;
		$object->list_shop=$list_shop;

		$view  = $this->createView("operator/emp/add.html");
		$view->assign($object);
		$view->display();

	}
	//储存
	function insert(){
		$CommonFunction=new CommonFunction();
		//姓名
		$emp_name= Request::getVar('emp_name','post');
		//补贴
		$zemp_butie= Request::getVar('zemp_butie','post');
		//职位id
		$emp_zhiweiid= Request::getVar('emp_zhiweiid','post');
		//安全
		$zemp_anquan=Request::getVar('zemp_anquan','post');
		//性别
		$emp_sex= Request::getVar('emp_sex','post');
		//身份证号码
		$emp_num= Request::getVar('emp_num','post');
		//私人电话号码
		$emp_phone= Request::getVar('emp_phone','post');
		//家庭住址
		$emp_homeAdd= Request::getVar('emp_homeAdd','post');
		//职位A
		$emp_post= Request::getVar('emp_post','post');
		//门店id
		$emp_shopid= Request::getVar('emp_shopid','post');
		//驾照类型
		$emp_driverlicense= Request::getVar('emp_driverlicense','post');
		//合同开始时间
		$emp_pactStartDate= strtotime(Request::getVar('emp_pactStartDate','post'));
		//备注
		$emp_introduce= Request::getVar('emp_introduce','post');
		//合同结束时间
		$emp_pactEndDate= strtotime(Request::getVar('emp_pactEndDate','post'));
		//公司电话
		$emp_workTel=Request::getVar('emp_workTel','post');
		//员工照片
		$emp_image=Request::getVar('emp_image','post');
		//员工照片
		$emp_imagea=Request::getVar('emp_imagea','post');
		//当前居住地址
		$dangqian_homeAdd=Request::getVar('dangqian_homeAdd','post');
		//紧急联系人电话
		$jinji_phone=Request::getVar('jinji_phone','post');
		//建行卡号
		$emp_kahao=Request::getVar('emp_kahao','post');
		//紧急联系人
		$jinji_name=Request::getVar('jinji_name','post');
		//入职时间
		$emp_addtime=strtotime(Request::getVar('emp_addtime','post'));
		//驾照有效日期
		$emp_jiazhaotime=strtotime(Request::getVar('emp_jiazhaotime','post'));
		//是否离职
		$emp_stutas=1;
		/*
		//图片
		$upload_root = Config::homedir()."/thumb/";
		$emp_image="";
		if(array_key_exists('images',$_FILES) && $_FILES["images"]["error"] == UPLOAD_ERR_OK){
	        $uploader = new Uploader($_FILES['images'],$upload_root);
	        $uploader->toUpload();            
	        $emp_image = $uploader->getFolderFile();
		}
		*/
		//部门
		$object=new Object();
		//获取部门
		if($emp_zhiweiid){
			$sql="select department_id from zemp_zhiwei where id={$emp_zhiweiid}";
			$department_id=$CommonFunction->getDataY($sql,'department_id');
			$object->department_id=$department_id;
		}
		$object->dangqian_homeAdd=$dangqian_homeAdd;
		$object->jinji_phone=$jinji_phone;
		$object->jinji_name=$jinji_name;
		$object->emp_kahao=$emp_kahao;
		$object->emp_jiazhaotime=$emp_jiazhaotime;
		
		$object->emp_workTel=$emp_workTel;
		$object->zemp_butie=$zemp_butie;
		$object->zemp_anquan=$zemp_anquan;
		$object->emp_stutas=$emp_stutas;
		$object->emp_name=$emp_name;
		$object->emp_sex=$emp_sex;
		$object->emp_num=$emp_num;
		$object->emp_zhiweiid=$emp_zhiweiid;
		$object->emp_phone=$emp_phone;
		$object->emp_homeAdd=$emp_homeAdd;
		$object->emp_post=$emp_post;
		$object->emp_shopid=$emp_shopid;
		$object->emp_driverlicense=$emp_driverlicense;
		$object->emp_pactStartDate=$emp_pactStartDate;
		$object->emp_addtime=$emp_addtime;
		$object->emp_introduce=$emp_introduce;
		$object->emp_pactEndDate=$emp_pactEndDate;
		$object->emp_image=$emp_image;
		$object->emp_imagea=$emp_imagea;
		$req=true;
		
		if($CommonFunction->instert($object,'emp')){
			$req=true;
		}else{
			$req=false;
			
		}
		//添加员工号码
		$emp_id=0;
		if($req){
			$sql_a="select emp_id from emp where emp_num='{$emp_num}' order by emp_id desc ";
			$emp_id=$CommonFunction->getDataY($sql_a,"emp_id");
			$zemp_num=$emp_id+10000000;
			$zemp_num="A".(substr("{$zemp_num}",1));
			$object1=new stdClass();
			$object1->emp_id=$emp_id;
			$object1->zemp_num=$zemp_num;
			if($CommonFunction->update_a($object1,"emp_id","emp","")){
				$req=true;
			}else{
				$req=false;
			}
		}

		//创建新的账户
		if($req){
			$object2 = new stdClass();
			$object2->username = $emp_name;
			$object2->password = md5("yunhe888");
			$object2->user_id =$emp_id;
			$object2->add_time =time();
			$object2->shop_id =$emp_shopid;
			$object2->zhiwei_id =$emp_zhiweiid;
			$object2->status =0;
			$object2->add_empid =$_SESSION['user_id'];
			//print_r($object2);exit;
			if($CommonFunction->instert($object2,'admin_users')){
				$req=true;
			}else{
				$req=false;
			}
		}
		//print_r("expression");exit;
		if($req){
			$CommonFunction->setAction("添加了员工-".$object->emp_name);
			
		}
		$object = new stdClass();
        $object->result = $req ? "添加成功！":"添加失败，返回重试！";
        $view  = $this->createView("operator/emp/result.html");
        $view->assign($object);
        $view->display();
	}
	function edit(){

		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/edit");
		$emp_id=Request::getVar('emp_id','get');
		$sql="select * from emp where emp_id={$emp_id}";
		$data=$CommonFunction->getData($sql);
		$data['emp_pactStartDate']=date("Y-m-d",$data['emp_pactStartDate']);
		$data['emp_pactEndDate']=date("Y-m-d",$data['emp_pactEndDate']);
		$data['emp_addtime']=date("Y-m-d",$data['emp_addtime']);
		$data['emp_jiazhaotime']=date("Y-m-d",$data['emp_jiazhaotime']);
		//职位
		//$sql1="select id,zhiwei_name from zemp_zhiwei where status=0 order by zhiwei_order asc";
		//$list_zhiwei=$CommonFunction->getList($sql1);
		//门店
		//$sql="select shop_id,shop_name from shop";
		//$list_shop=$CommonFunction->getList($sql);

		$sql_2="select id,title from employee_level";
		$list_level=$CommonFunction->getList($sql_2);

		$object = new stdClass();
		$object->list_level=$list_level;
		//$object->list_zhiwei=$list_zhiwei;
		//$object->list_shop=$list_shop;
		$object->data=$data;

		$view  = $this->createView("operator/emp/edit.html");
		$view->assign($object);
		$view->display();
	}

	function update(){
		$CommonFunction=new CommonFunction();
		$emp_id= Request::getVar('emp_id','post');
		//姓名
		$emp_name= Request::getVar('emp_name','post');
		//补贴

		$zemp_butie= Request::getVar('zemp_butie','post');
		$zemp_anquan=Request::getVar('zemp_anquan','post');
		$emp_sex= Request::getVar('emp_sex','post');
		$emp_num= Request::getVar('emp_num','post');
		$emp_phone= Request::getVar('emp_phone','post');
		$emp_homeAdd= Request::getVar('emp_homeAdd','post');
		$emp_post= Request::getVar('emp_post','post');
		$emp_driverlicense= Request::getVar('emp_driverlicense','post');
		$emp_pactStartDate= strtotime(Request::getVar('emp_pactStartDate','post'));
		$emp_introduce= Request::getVar('emp_introduce','post');
		$emp_pactEndDate= strtotime(Request::getVar('emp_pactEndDate','post'));
		$emp_workTel=Request::getVar('emp_workTel','post');

		//员工照片
		$emp_image=Request::getVar('emp_image','post');
		//员工照片
		$emp_imagea=Request::getVar('emp_imagea','post');
		//当前居住地址
		$dangqian_homeAdd=Request::getVar('dangqian_homeAdd','post');
		//紧急联系人电话
		$jinji_phone=Request::getVar('jinji_phone','post');
		//建行卡号
		$emp_kahao=Request::getVar('emp_kahao','post');
		//紧急联系人
		$jinji_name=Request::getVar('jinji_name','post');
		//入职时间
		$emp_addtime=strtotime(Request::getVar('emp_addtime','post'));
		//驾照有效日期
		$emp_jiazhaotime=strtotime(Request::getVar('emp_jiazhaotime','post'));
		$object = new stdClass();
		$object->emp_id=$emp_id;
		$object->emp_addtime=$emp_addtime;
		$object->dangqian_homeAdd=$dangqian_homeAdd;
		$object->jinji_phone=$jinji_phone;
		$object->emp_kahao=$emp_kahao;
		$object->jinji_name=$jinji_name;
		$object->emp_jiazhaotime=$emp_jiazhaotime;
		$object->emp_jiazhaotime=$emp_jiazhaotime;
		$object->emp_workTel=$emp_workTel;
		$object->zemp_butie=$zemp_butie;
		$object->zemp_anquan=$zemp_anquan;
		$object->emp_name=$emp_name;
		$object->emp_sex=$emp_sex;
		$object->emp_num=$emp_num;
		$object->emp_phone=$emp_phone;
		$object->emp_homeAdd=$emp_homeAdd;
		$object->emp_post=$emp_post;
		$object->emp_driverlicense=$emp_driverlicense;
		$object->emp_pactStartDate=$emp_pactStartDate;
		$object->emp_introduce=$emp_introduce;
		$object->emp_pactEndDate=$emp_pactEndDate;
		if(!empty($emp_image)){
			$object->emp_image=$emp_image;
		}
		if(!empty($emp_imagea)){
			$object->emp_imagea=$emp_imagea;
		}
		//print_r($object->emp_image);exit;
		$req=true;
		if($CommonFunction->update_a($object,"emp_id","emp","")){
			$req=true;
		}else{
			$req=false;
		}
		//修改账户
		if($req){
			$object2 = new stdClass();
			$object2->username = $emp_name;
			$object2->user_id =$emp_id;
			$object2->add_time =time();
			$object2->add_empid =$_SESSION['user_id'];
			if($CommonFunction->update_a($object2,'user_id','admin_users','')){
				$req=true;
			}else{
				$req=false;
			}
		}
		if($req){
			$CommonFunction->setAction("修改了员工-".$object->emp_name);
		}
		$object = new stdClass();
        $object->result = $req ? "修改成功！":"修改失败，返回重试！";
        $view  = $this->createView("operator/emp/result.html");
        $view->assign($object);
        $view->display();
	}
	//离职
	function liszhi(){
		$req=true;
		$text="离职成功";
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/lizhi");
		$emp_id= Request::getVar('emp_id','get');
		$object = new stdClass();
		$object->emp_stutas = -1;
		$object->emp_id =$emp_id;
		if($CommonFunction->update_a($object,'emp_id','emp','')){
				$req=true;
		}else{
				$req=false;
				$text="离职失败";
		}
		if($req){
			$object1 = new stdClass();
			$object1->status = -1;
			$object1->user_id =$emp_id;
			if($CommonFunction->update_a($object1,'user_id','admin_users','')){
				$req=true;
				$text="离职成功且成功删除员工账户";
			}else{
				$req=false;
				$text="离职成功，但用户账号删除失败";
			}
		}
		if($req){
			$CommonFunction->setAction("为用户ID".$emp_id."的员工离职");
		}
		$this->redirect("index.php",$text);

	}
	
	//换岗
	function huangang(){
    	$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/huangang");
		$emp_id= Request::getVar('emp_id','get');
		$sql2="select a.*,b.zhiwei_name,c.shop_name from emp as a left join zemp_zhiwei as b on a.emp_zhiweiid=b.id left join shop as c on a.emp_shopid=c.shop_id where a.emp_id={$emp_id} ";
		$data=$CommonFunction->getdata($sql2);
		//职位
		$sql1="select id,zhiwei_name from zemp_zhiwei where status=0 order by zhiwei_order asc";
		$list_zhiwei=$CommonFunction->getList($sql1);
		//门店
		$sql="select shop_id,shop_name from shop";
		$list_shop=$CommonFunction->getList($sql);

		$object = new stdClass();
		$object->data=$data;
		$object->list_zhiwei=$list_zhiwei;
		$object->list_shop=$list_shop;
        $view  = $this->createView("operator/emp/huangang.html");
        $view->assign($object);
        $view->display();
    }
    function huangang_action(){
    	
    	$CommonFunction=new CommonFunction();
    	$emp_id= Request::getVar('emp_id','post');
    	$emp_shopid= Request::getVar('emp_shopid','post');
    	$emp_zhiweiid= Request::getVar('emp_zhiweiid','post');
    	$zhiwei= Request::getVar('zhiwei','post');
    	$shop= Request::getVar('shop','post');

    	$sql="select department_id from zemp_zhiwei where id={$emp_zhiweiid}";
    	$department_id=$CommonFunction->getDataY($sql,"department_id");
    	$object = new stdClass();
    	$object->department_id=$department_id;
    	$object->emp_id=$emp_id;
    	$object->emp_zhiweiid=$emp_zhiweiid;
    	$object->emp_shopid=$emp_shopid;
    	$req=true;
    	if($CommonFunction->update_a($object,"emp_id","emp","")){
			$req=true;
		}else{
			$req=false;
		}
		if($req){
			$object1 = new stdClass();
    		$object1->user_id=$emp_id;
    		$object1->zhiwei_id=$emp_zhiweiid;
    		$object1->shop_id=$emp_shopid;
    		//print_r($object1);exit;
    		if($CommonFunction->update_a($object1,"user_id","admin_users","")){
				$req=true;
			}else{
				$req=false;
			}
		}


		if($req){
			$object2 = new stdClass();
    		$object2->emp_id=$emp_id;
    		$object2->addtime=time();
    		$object2->add_empid=$_SESSION['user_id'];
    		$object2->shop_ida=$shop;
    		$object2->shop_idb=$emp_shopid;
    		$object2->zhiwei_ida=$zhiwei;
    		$object2->zhiwei_idb=$emp_zhiweiid;
    		if($CommonFunction->instert($object2,'zemp_huangang')){
				$req=true;
			}else{
				$req=false;
			}
		}

    	
    	$object3 = new stdClass();
        $object3->result = $req ? "换岗成功！":"换岗失败，返回重试！";
        $view  = $this->createView("operator/emp/result.html");
        $view->assign($object);
        $view->display();
    }

	//清除
	function delete(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/delete");
		$emp_id= Request::getVar('emp_id','get');
		$text="删除成功";
		if($CommonFunction->dalete_sql("emp","emp_id",$emp_id)&&$CommonFunction->dalete_sql("admin_users","user_id",$emp_id)){
			$CommonFunction->setAction("删除了ID为".$emp_id."的员工");
			$text="删除成功";
		}else{
			$text="删除失败";
		}
		$this->redirect("index.php",$text);	
	}
	//导出
	function export(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/export");
		$sql="select a.*,b.shop_name,c.zhiwei_shiyongqi,c.zhiwei_name,d.title from emp as a LEFT JOIN shop as b on a.emp_shopid=b.shop_id LEFT JOIN zemp_zhiwei as c on a.emp_zhiweiid=c.id left join employee_level as d on a.emp_post=d.id ";
			$list=$CommonFunction->getList($sql);
			
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

	function generatepicutrea(){
        $base64=Request::getVar('Base64Code','post');
        $time=time();
           if(!empty($base64)){
            $img = base64_decode($base64);
            $a = file_put_contents('../../../thumb/'.$time.'.jpg', $img);
        }
        header("Content-type: application/json");
        echo json_encode($time);
        exit();
	}

    function getRenlian(){
        $list=null;
        $idcard = Request::getVar('idcard','post');
        $realname = Request::getVar('realname','post');
        $image = Request::getVar('image','post');
        

        $sendUrl = 'http://apis.juhe.cn/verifyface/verify'; //短信接口的URL
        $smsConf = array(
            'key'   => "d6924e1c001f55aa210a7208fa05343b", //您申请的APPKEY
            'idcard'    => $idcard, //身份证号码
            'realname'    => $realname, //姓名
            'image' =>$image //图片
        );


        $content = $this->juhecurl($sendUrl,$smsConf,1); //请求发送短信

        if($content){

            $result = json_decode($content,true);
            $list['result']=$result;
            $res=$result['result']['res'];
          
            $score=intval($result['result']['score']);
            if($res == 1&&$score>=70){
                $list['req']=0;
            }else{
               
               $list['req']=1;
            }
        }else{
            //返回内容异常，以下可根据业务逻辑自行修改
             $list['req']=2;
        }
        echo json_encode($list);

    }
    
    function juhecurl($url,$params=false,$ispost=0){
        $httpInfo = array();
        $ch = curl_init();
        
        curl_setopt( $ch, CURLOPT_HTTP_VERSION , CURL_HTTP_VERSION_1_1 );
        curl_setopt( $ch, CURLOPT_USERAGENT , 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.22 (KHTML, like Gecko) Chrome/25.0.1364.172 Safari/537.22' );
        curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT , 30 );
        curl_setopt( $ch, CURLOPT_TIMEOUT , 30);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER , true );
        if( $ispost )
        {
            curl_setopt( $ch , CURLOPT_POST , true );
            curl_setopt( $ch , CURLOPT_POSTFIELDS , $params );
            curl_setopt( $ch , CURLOPT_URL , $url );
        }
        else
        {
            if($params){
                curl_setopt( $ch , CURLOPT_URL , $url.'?'.$params );
            }else{
                curl_setopt( $ch , CURLOPT_URL , $url);
            }
        }
        $response = curl_exec( $ch );
        if ($response === FALSE) {
            //echo "cURL Error: " . curl_error($ch);
            return false;
        }
        $httpCode = curl_getinfo( $ch , CURLINFO_HTTP_CODE );
        $httpInfo = array_merge( $httpInfo , curl_getinfo( $ch ) );
        curl_close( $ch );
        return $response;
    }



    //员工在职一览表
    function zemp_yilan(){
    	
    	//print_r(strtotime("2019-12-17 23:59:00"));exit;
    	$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/zemp_yilan");
		$where=" where a.emp_stutas=1 ";
		$emp_name=Request::getVar('emp_name','post');
		if($emp_name){
			$where.=" and a.emp_name like '%{$emp_name}%'";
		}
		$zhiwei_id=Request::getVar('zhiwei_id','post');
		if($zhiwei_id){
			$where.=" and a.emp_zhiweiid={$zhiwei_id}";
		}
		$department_id=Request::getVar('department_id','post');
		if($department_id){
			$where.=" and a.department_id={$department_id}";
		}

		$emp_shopid=Request::getVar('emp_shopid','post');
		if($emp_shopid){
			$where.=" and a.emp_shopid={$emp_shopid}";
		}
		$sql="select a.*,b.name,b.dengji as department_dengji,b.department_order,c.zhiwei_name,c.zhize,c.xingji,c.dengji as zhiwei_dengji,c.zhiwei_order,d.shop_name from emp as a left join department as b on a.department_id=b.id left join zemp_zhiwei as c on a.emp_zhiweiid=c.id left join shop as d on a.emp_shopid=d.shop_id ".$where." and c.id!=66 and c.id!=67 order by c.xingji desc,b.department_order asc,c.zhiwei_order asc,a.zemp_num asc";

		$list=$CommonFunction->getList($sql);
		$sql1="select a.*,b.name,b.dengji as department_dengji,b.department_order,c.zhiwei_name,c.zhize,c.xingji,c.dengji as zhiwei_dengji,c.zhiwei_order,d.shop_name from emp as a left join department as b on a.department_id=b.id left join zemp_zhiwei as c on a.emp_zhiweiid=c.id left join shop as d on a.emp_shopid=d.shop_id ".$where." and c.id=66 order by xingji desc,department_order asc,zhiwei_order asc";
		
		$list1=$CommonFunction->getList($sql1);
		for ($i=0; $i <count($list1) ; $i++) { 
			$list[]=$list1[$i];
		}
		$sql2="select a.*,b.name,b.dengji as department_dengji,b.department_order,c.zhiwei_name,c.zhize,c.xingji,c.dengji as zhiwei_dengji,c.zhiwei_order,d.shop_name from emp as a left join department as b on a.department_id=b.id left join zemp_zhiwei as c on a.emp_zhiweiid=c.id left join shop as d on a.emp_shopid=d.shop_id ".$where." and c.id=67 order by xingji desc,department_order asc,zhiwei_order asc";
		
		$list2=$CommonFunction->getList($sql2);
		for ($i=0; $i <count($list2) ; $i++) { 
			$list[]=$list2[$i];
		}
		//排序
		
		

		$object= new stdClass();
		$object->list=$list;
		$object->count=count($list);
		//门店
		$sql_shop="select * from shop where stutas=0";
		$object->shop_list=$CommonFunction->getList($sql_shop);
		//部门

		$object->department_list=$CommonFunction->getDepartment();
		//职位
		$object->zhiwei_list=$CommonFunction->getZhiwei();
		$object->emp_xiangxi=$CommonFunction->panduan_rule($this->package."/xiangxi");
		$view = $this->createView("operator/emp/zemp_yilan.html");
		$view->assign($object);
		$view->display();
		//print_r($list);
    }

    //获取上级职位
	function getShangjiZhiwei(){
		$CommonFunction=new CommonFunction();
		$department_id=Request::getVar('department_id','post');
		$sql="select * from zemp_zhiwei where department_id={$department_id} order by dengji asc";
		$list=$CommonFunction->getList($sql);
		header("Content-type: application/json");
        echo json_encode($list);
        exit();

	}


	

}
