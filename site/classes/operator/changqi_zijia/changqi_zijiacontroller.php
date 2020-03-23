<?php
import('operator.navi.admincontroller');
import('publicFunction.CommonFunction');
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('imag.utilities.pagestyle_a');
import('imag.image.uploader');
import('operator.navi.privilegehelper');
import('imag.fusecookie');
import('imag.filesystem.fusefile');
import('imag.filesystem.filesystem');
import('imag.utilities.tool');
class changqi_zijiaController extends AdminController
{
	private $package="site/operator/changqi_zijia";
	function __construct($config = array())
	{
		parent::__construct($config);
		$this->registerTask( 'index','index');
		$this->registerTask( 'add','add');
		$this->registerTask( 'insert','insert');
		$this->registerTask( 'edit','edit');
		$this->registerTask( 'update','update');
		$this->registerTask( 'delete','delete');
		$this->registerTask( 'getClient','getClient');
		$this->registerTask( 'getClient_lianxi','getClient_lianxi');
		$this->registerTask( 'select_car_a','select_car_a');
		$this->registerTask( 'diaoche','diaoche');
		$this->registerTask( 'diaoche_action','diaoche_action');
		$this->registerTask( 'huanche','huanche');
		$this->registerTask( 'huanche_action','huanche_action');
		$this->registerTask( 'qita','qita');
		$this->registerTask( 'qita_action','qita_action');
		$this->registerTask( 'youhui','youhui');
		$this->registerTask( 'youhui_action','youhui_action');
		$this->registerTask( 'kaipiao','kaipiao');
		$this->registerTask( 'kaipiao_action','kaipiao_action');
		$this->registerTask( 'mingxi','mingxi');
		$this->registerTask( 'get_car','get_car');
		$this->registerTask( 'delete','delete_a');
		$this->registerTask( 'huanche_a','huanche_a');
		$this->registerTask( 'huanche_aaction','huanche_aaction');
		$this->registerTask( 'xuzu','xuzu');
		$this->registerTask( 'xuzu_action','xuzu_action');
        $this->registerTask( 'picture','picture');
        $this->registerTask( 'zijia_shenghe','zijia_shenghe');
        $this->registerTask( 'zijia_shengheAction','zijia_shengheAction');
        $this->registerTask( 'setBeizhu','setBeizhu');
        $this->registerTask( 'hetong','hetong');
        $this->registerTask( 'update_hetong','update_hetong');
        
	}
	function index(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/index");
		$base_url = "index.php?a=1";
		//页数
		$p = Request::getVar('p','get');
		if(empty($p)){
            $p=1;
        }
         $where="where a.paiche_type=3 and z.zhu=1 ";
         //合同号
        $paiche_id= Request::getVar('paiche_id','get');
        if(!empty($paiche_id)){
            $where.=" and a.paiche_id={$paiche_id}";
            $base_url.="&paiche_id={$paiche_id}";
        }
        //合同号
        $paiche_contractNum= Request::getVar('paiche_contractNum','get');
        if(!empty($paiche_contractNum)){
            $where.=" and a.paiche_contractNum like '%{$paiche_contractNum}%'";
            $base_url.="&paiche_contractNum={$paiche_contractNum}";
        }
        $paiche_startDate=Request::getVar('paiche_startDate','get');
         if(!empty($paiche_startDate)){
            $base_url.="&paiche_startDate={$paiche_startDate}";
            $where .=" AND a.paiche_endDate>=".strtotime($paiche_startDate);
        }
        //结束时间
        $paiche_endDate=Request::getVar('paiche_endDate','get');
        //print_r($search_endDate);exit;
        if(!empty($paiche_endDate)){
            $base_url.="&paiche_endDate={$paiche_endDate}";
            $where .=" AND a.paiche_startDate<=".(strtotime($paiche_endDate." 23:59:59"));
        }
        //联系人/单位
        $name=Request::getVar('name','get');
        if(!empty($name)){
            $where.=" and z.name like '%".$name."%'";
            $base_url.="&name={$name}";
        }
        //联系电话
        $phone=Request::getVar('phone','get');
        if(!empty($phone)){
            $where.=" and z.phone={$phone}";
            $base_url.="&phone={$phone}";
        }
        //车牌号
        $paiche_car=Request::getVar('paiche_car','get');
        if(!empty($paiche_car)){
            $where.=" and (e.car_num like '%".$paiche_car."%' or ee.car_num like '%".$paiche_car."%') ";
            $base_url.="&paiche_car={$paiche_car}";
        }
        //公司
        $client_name=Request::getVar('client_name','get');
        if(!empty($client_name)){
            $where.=" and (b.client_name like '%{$client_name}%') ";
            $base_url.="&client_name={$client_name}";
        }
        //审核状态
        $zijia_shenhe= Request::getVar('zijia_shenhe','get');
        if($zijia_shenhe==1){
            $where.=" and a.paiche_checkTimes=0";
            $base_url.="&zijia_shenhe=1";
        }else if($zijia_shenhe==2){
             $where.=" and a.paiche_checkTimes>0";
            $base_url.="&zijia_shenhe=2";
        }
         //状态
        $search_status=Request::getVar('search_status','get');
        
        if (empty($search_status)) $search_status = "ss";
        $base_url.="&search_status={$search_status}";
        $per_page = 10;
                 $order="`paiche_dispatchTimes` DESC,`paiche_id` DESC";
        //调车未还车
            if ($search_status=="ss"){
                $where .=" AND a.paiche_jie=1";
            }
            //预约
            else if ($search_status=="yy"){
                $where .=" AND a.paiche_jie=-1";
            }
            //还车未结账
            else if ($search_status=="yh"){
                $where .=" AND a.paiche_jie=2";
            } else if ($search_status=="yj"){
                $where .=" AND a.paiche_jie=3";
            }else if($search_status=="wy"){
                $where .=" AND a.paiche_jie=-2";
            }else if($search_status=="qx"){
                $where .=" AND a.paiche_jie=-3";
            }else if($search_status=="daoqi_a"){
           	    $shijian=time();
               $where.=" and a.paiche_jie=1 and a.paiche_endDate<{$shijian}";
               $order="`paiche_endDate` asc";
            }else if($search_status=='zjyy'){//5天内需要调车的订单
                $shijian=strtotime(date('Y-m-d'));
                $shijian_a=strtotime(date('Y-m-d',strtotime('+3 day')));
                $where.=" and a.paiche_jie=-1 and a.paiche_startDate>{$shijian} and a.paiche_startDate<{$shijian_a}";
                $order="`paiche_startDate` asc";
            }else if($search_status=='daoqi'){//60天内到期的订单
            	$shijian=strtotime(date('Y-m-d 23:59:59'));
                $shijian_a=strtotime(date('Y-m-d',strtotime('+60 day')));
                $where.=" and a.paiche_jie=1 and a.paiche_endDate>{$shijian} and a.paiche_endDate<{$shijian_a}";
                $order="`paiche_endDate` asc";
            }else{
                $where.=" AND a.paiche_jie !=0 ";
            }

        $sql="select count(*) as count 
        from paiche as a 
        left join client AS b ON a.paicheCom=b.client_id 
        LEFT JOIN emp AS c ON a.paicheCounterMan=c.emp_id 
        LEFT JOIN shop AS cc ON a.paicheCounterShop=cc.shop_id 
        LEFT JOIN car AS e ON a.paicheCar=e.car_id 
        LEFT JOIN car AS ee ON a.paicheCar2=ee.car_id 
        LEFT JOIN shop AS m ON a.paiche_shopid=m.shop_id 
        LEFT JOIN emp AS n ON a.paicheServerMan=n.emp_id 
        LEFT JOIN settle AS o ON a.paiche_id=o.settlePaicheId 
        LEFT JOIN client_lianxi AS z ON b.client_id=z.client_id
         {$where} ORDER BY {$order}";
        $total_item=$CommonFunction->getDataY($sql,"count");
        $style = new PageStyle_a();
        if($total_item/$per_page==$p-1){
            if($p>1){
                $p=$p-1;
            }
             
        }
        $start = ($p-1)*$per_page;

        $sql="select a.*,b.client_name,c.emp_name AS yewuyuan,cc.shop_name as ywshopname,e.car_num,ee.car_num as car_num2,m.shop_name,n.emp_name AS jiedaiyuan,l.emp_name as shenhe_empname,z.name,z.phone,n.emp_name,m.shop_name
        from paiche as a 
        left join client AS b ON a.paicheCom=b.client_id 
        LEFT JOIN emp AS c ON a.paicheCounterMan=c.emp_id 
        LEFT JOIN shop AS cc ON a.paicheCounterShop=cc.shop_id 
        LEFT JOIN car AS e ON a.paicheCar=e.car_id 
        LEFT JOIN car AS ee ON a.paicheCar2=ee.car_id 
        LEFT JOIN shop AS m ON a.paiche_shopid=m.shop_id 
        LEFT JOIN emp AS n ON a.paicheServerMan=n.emp_id 
        LEFT JOIN settle AS o ON a.paiche_id=o.settlePaicheId 
        LEFT JOIN emp AS l ON a.shenhe_empid=l.emp_id
        LEFT JOIN client_lianxi AS z ON b.client_id=z.client_id
         {$where}   ORDER BY {$order} LIMIT {$start},{$per_page}
        ";

        $list=$CommonFunction->getList($sql);
        for($i=0;$i<count($list);$i++){
        	$list[$i]['paiche_chargelist']=$CommonFunction->getChargeList_a($list[$i]['paiche_id']);
            $list[$i]['paiche_youhuilist']=$CommonFunction->getList("select * from paiche_youhui where paiche_id={$list[$i]['paiche_id']}");
            $list[$i]['paiche_changelist']=$CommonFunction->getList("select b.car_num from changecar as a left join car as b on a.changecar_carA=b.car_id  where changecarPaicheId={$list[$i]['paiche_id']}");
            //应收的租金和已收的租金
            $yinshou=0;$yishou=0;
            for($j=0;$j<count($list[$i]['paiche_chargelist']);$j++){
            	if($list[$i]['paiche_chargelist'][$j]['charge_id']==2||$list[$i]['paiche_chargelist'][$j]['charge_id']==5||$list[$i]['paiche_chargelist'][$j]['charge_id']==24){
            		$yinshou=$yinshou+$list[$i]['paiche_chargelist'][$j]['conv_money'];
            		$yishou=$yishou+$list[$i]['paiche_chargelist'][$j]['have_in_money'];
                    
            	}
            }
           
            if(count($list[$i]['paiche_youhuilist'])>0){
            	for($j=0;$j<count($list[$i]['paiche_youhuilist']);$j++){
            		$yinshou=$yinshou-($list[$i]['paiche_youhuilist'][$j]['youhui_mone']);
            	}
            }
            //总共租的天数
            $tian=($list[$i]['paiche_endDate']+1-$list[$i]['paiche_startDate'])/(60*60*24);
            //已租天数
            $tian_a=(time()-$list[$i]['paiche_startDate'])/(60*60*24);
            //日租金

            $rizujin=$yinshou/$tian;
           
            
            //print_r(($tian_a-60)*$rizujin);exit;
            
            
        	if ($list[$i]['paiche_jie']==-3){//预约未开始
                $list[$i]['zhuangtai']="取消单";
            }else if($list[$i]['paiche_jie']==-2){//违约
                $list[$i]['zhuangtai']="违约单";
            }else if($list[$i]['paiche_jie']==-1){//预约
                $list[$i]['zhuangtai']="预约单";
            }else if($list[$i]['paiche_jie']==1){//
                if($list[$i]['paiche_endDate'] >=time()){
                	if(($tian_a-60)*$rizujin>$yishou){
		            	$list[$i]['zhuangtai']="60天赊账调车未还";
		            }else{
		            	$list[$i]['zhuangtai']="调车未还";
		            }
                    
                }else{
                	if(($tian_a-60)*$rizujin>$yishou){
		            	$list[$i]['zhuangtai']="60天赊账超时未还";
		            }else{
		            	 $list[$i]['zhuangtai']="超时未还";
		            }    
                }  
            }else if($list[$i]['paiche_jie']==2){//已还车未结账
                $list[$i]['zhuangtai']="已还车未结账";
            }else if($list[$i]['paiche_jie']==3){//已结账
                 $list[$i]['zhuangtai']="已结账";
            }else if($paiche[$i]['paiche_jie']==4){//取消
               $list[$i]['zhuangtai']="完结";
            }

        	$list[$i]['paiche_startDate'] = $list[$i]['paiche_startDate']>0 ? date("Y-m-d H:i:s",$list[$i]['paiche_startDate']) :"-";

            $list[$i]['paiche_endDate'] = $list[$i]['paiche_endDate']>0 ? date("Y-m-d H:i:s",$list[$i]['paiche_endDate']) : "—";
            $list[$i]['paiche_dispatchTimes'] = $list[$i]['paiche_dispatchTimes']>0 ? date("Y-m-d H:i:s",$list[$i]['paiche_dispatchTimes']) : "—";
            


           

            
            //print_r($list[$i]['paiche_changelist']);exit;
            
            
            
        }



       
        $options = array(
            "baseurl"    => $base_url,
            "totalitems" => $total_item,
            "perpage"    => $per_page,
            "page"       => $p,
            "maxpage"    => 10,
            "pagestyle"  => $style,
            "showtotal"  => false
        );
        $pagination = new Pagination($options);
        $p = $pagination->getPage();
        $object = new stdClass();
        $view  = $this->createView("operator/changqi_zijia/index.html");
        //增加，
        $object->add=$CommonFunction->panduan_rule($this->package."/add");
        //修改，
        $object->edit=$CommonFunction->panduan_rule($this->package."/edit");
        //调车
        $object->diaoche=$CommonFunction->panduan_rule($this->package."/diaoche");
        //换车
        $object->huanche=$CommonFunction->panduan_rule($this->package."/huanche");
        //其他费用
        $object->qita=$CommonFunction->panduan_rule($this->package."/qita");
        //优惠
        $object->youhui =$CommonFunction->panduan_rule($this->package."/youhui");
        //开票
        $object->kaipiao =$CommonFunction->panduan_rule($this->package."/kaipiao");
        //明细
        $object->mingxi =$CommonFunction->panduan_rule($this->package."/mingxi");
         //删除
        $object->delete =$CommonFunction->panduan_rule($this->package."/delete");
        //还车
        $object->huanche_a =$CommonFunction->panduan_rule($this->package."/huanche_a");
        //续租
         $object->xuzu =$CommonFunction->panduan_rule($this->package."/xuzu");
        //违约
         $object->weiyue =$CommonFunction->panduan_rule($this->package."/weiyue");
         //审核
         $object->zijia_shenghe =$CommonFunction->panduan_rule($this->package."/zijia_shenghe");
         
        $object->list=$list;
        $object->search_status=$search_status;
        //5天内需要调车的预约单
        $shijian=strtotime(date('Y-m-d'));
        $shijian_a=strtotime(date('Y-m-d',strtotime('+3 day')));
		$sql="select count(*) as getzuijinyueyue from paiche  where  paiche_type=3 and paiche_jie=-1 and paiche_startDate>{$shijian} and paiche_startDate<{$shijian_a}";

        $object->getzuijinyueyue=$CommonFunction->getDataY($sql,"getzuijinyueyue");
        //60天内到期的订单
        $shijian=strtotime(date('Y-m-d'));
        $shijian_a=strtotime(date('Y-m-d',strtotime('+60 day')));
		$sql="select count(*) as daoqi from paiche  where  paiche_type=3 and paiche_jie=1 and paiche_endDate>{$shijian} and paiche_endDate<{$shijian_a}";
		$object->daoqi=$CommonFunction->getDataY($sql,"daoqi");
		//订单已过期
		 //60天内到期的订单
        $shijian=time();
		$sql="select count(*) as daoqi_a from paiche  where  paiche_type=3 and paiche_jie=1 and paiche_endDate<{$shijian}";
		$object->daoqi_a=$CommonFunction->getDataY($sql,"daoqi_a");
        
        $object->PAGINATION = $pagination->fetch();
        $object->p = $p;
        $object->total = $total_item;
        $view->assign($object);
        $view->display();
        
	}
	function add(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/add");
		//长期企业
		$sql="select * from client";
		$client_list=$CommonFunction->getList($sql);
		$object = new stdClass();
		$object->client_list=$client_list;
		$object->cid=rand(1000,9999);
		//print_r($object->cid);exit;
		$view  = $this->createView("operator/changqi_zijia/add.html");
		$view->assign($object);
		$view->display();

	}

	function insert(){
		
		$CommonFunction=new CommonFunction();
		$object = new stdClass();
		$tiao_url="index.php?search_status=qb";
		//公司id
		$object->paicheCom=Request::getVar('paicheCom','post');
		//公司地址
		$object->paiche_linkerAdd=Request::getVar('paiche_linkerAdd','post');
		//联系人
		$object->paiche_linker=Request::getVar('paiche_linker','post');
		//联系人电话
		$object->paiche_linkerPhone=Request::getVar('paiche_linkerPhone','post');
		//业务门店
		$object->paicheCounterShop=Request::getVar('paicheCounterShop','post');
		//业务员
		$object->paicheCounterMan=Request::getVar('paicheCounterMan','post');
		//预约车辆
		$object->paicheCar=Request::getVar('paicheCar','post');
		//开始用车时间
		$object->paiche_startDate=strtotime(Request::getVar('paiche_startDate','post'));
		//用车结束时间
		$object->paiche_endDate=strtotime(Request::getVar('paiche_endDate','post'));
		
		//备注
		$object->paiche_specialRemarks=Request::getVar('paiche_specialRemarks','post');
		//状态为预约
		$object->paiche_jie=-1;
		//合同单号
		$paiche_contractNum=date('YmdHis',time());
		$object->paiche_contractNum=$paiche_contractNum;
		//派车单类型为长期自驾
		$object->paiche_type=3;
		$CommonFunction->instert($object,"paiche");

		$pid=$CommonFunction->getDataY("select paiche_id from paiche where paiche_contractNum='{$object->paiche_contractNum}'","paiche_id");
		//print_r($pid);exit;
		if($pid){
		 	$re=true;
		 	$CommonFunction->setAction("添加了派车单-".$pid);
		 	//租金
			$paiche_rent=Request::getVar('paiche_rent','post');
			$object2 = new Object();
	        $object2->paiche_id = $pid;
	        $object2->charge_id = 2;
	        $object2->conv_money = $paiche_rent;
	        $object2->back_money =0;
	        $object2->addtime =time();
	        $object2->addemp=$_SESSION['user_id'];
	        $object2->continuerent_start=strtotime(Request::getVar('paiche_startDate','post'));
	        $object2->continuerent_end=strtotime(Request::getVar('paiche_endDate','post'));
	        $CommonFunction->instert($object2,"paiche_charges");
	           
			//押金
			$paiche_deposit=Request::getVar('paiche_deposit','post');
			$object1 = new Object();
            $object1->paiche_id = $pid;
            $object1->charge_id = 1;
            $object1->addtime =time();
            $object1->addemp=$_SESSION['user_id'];
            $object1->conv_money = empty($paiche_deposit)? 0 : $paiche_deposit;
            $object1->back_money =0;
            $CommonFunction->instert($object1,"paiche_charges");
            //图片
			$cid=Request::getVar('cid','post');
			$sql="update paiche_images set paiche_id={$pid} where paiche_id={$cid}";
			$CommonFunction->update_b($sql);
			
			$this->redirect($tiao_url."&paiche_contractNum=".$paiche_contractNum,"添加成功");
		}else{
		 	$re=false;
		 	 $this->redirect($tiao_url,"添加失败");
		}	
	}
	function edit(){
		//print_r(strtotime("2019-04-31 00:00:00"));
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/edit");
		$paiche_id=Request::getVar('p_id','get');
		$sql="Select a.*,b.shop_name,c.emp_name,d.car_num,d.car_color,d.car_brand,d.car_type,d.car_motor,d.car_frame from paiche as a left join shop as b on a.paicheCounterShop=b.shop_id left join emp as c on a.paicheCounterMan=c.emp_id left join car as d on a.paicheCar=d.car_id where paiche_id={$paiche_id}";
		$paiche=$CommonFunction->getData($sql);
		//print_r($paiche['weiyue_money']);exit;
		//$paiche['paiche_startDate']=strtotime("2019-01-27 00:00:00");
		//$paiche['paiche_endDate']=strtotime("2019-05-23 23:59:59");
		$yue=0;
		for($i=0;$i<1000;$i++){
			$time=strtotime("+{$i}month",$paiche['paiche_startDate']);
			if($time-100>=$paiche['paiche_endDate']){
				$yue=$i;
				break;
			}
		}
		$yue=$yue-1;
		$tian=0;
		for($i=0;$i<32;$i++){
			$time=strtotime("+{$yue}month",$paiche['paiche_startDate']);
			if(($time+60*60*24*$i)>=$paiche['paiche_endDate']){
				$tian=$i;
				break;
			}
		}
		
		$paiche['paiche_startDate']=date('Y-m-d H:i:s', $paiche['paiche_startDate']);
        $paiche['paiche_endDate']=date('Y-m-d H:i:s', $paiche['paiche_endDate']);
        $sql="select * from paiche_charges where paiche_id={$paiche_id} and charge_id=2";
        $paiche_rent=$CommonFunction->getdata($sql);
        $sql="select * from paiche_charges where paiche_id={$paiche_id} and charge_id=1";
        $paiche_deposit=$CommonFunction->getdata($sql);
        $sql="select * from paiche_charges where paiche_id={$paiche_id} and charge_id=19";
        $suijin=$CommonFunction->getdata($sql);

        $sql="select * from client_lianxi where client_id={$paiche['paicheCom']}";
        $lianxi_list=$CommonFunction->getList($sql);
        $sql="select * from paiche_images where paiche_id={$paiche_id} order by id asc";
        $images_list=$CommonFunction->getList($sql);
        //print_r($lianxi_list);exit;
       	//$ChargeList=$CommonFunction->getChargeList_a($paiche_id);
       	//print_r($ChargeList);exit;
		$sql="select * from client";
		$client_list=$CommonFunction->getList($sql);
		$object = new stdClass();
		
		$object->lianxi_list =$lianxi_list;
		$object->client_list =$client_list;
		$object->paiche =$paiche;
		$object->paiche_rent =$paiche_rent;
		$object->images_list =$images_list;
		$object->cid =$paiche_id;
		
		//print_r($object->images_list);exit;
		$object->paiche_deposit =$paiche_deposit;
		$object->suijin =$suijin;
		$object->yue =$yue;
		$object->tian =$tian;
		$view  = $this->createView("operator/changqi_zijia/edit.html");
		$view->assign($object);
		$view->display();
		
	}

	function update(){
		$CommonFunction=new CommonFunction();
		$object = new stdClass();
		$tiao_url="index.php?search_status=qb";
		$paiche_id=Request::getVar('cid','post');
		$delimg[]=Request::getVar('delimg','post');
		$delimg=$delimg[0];
		if(count($delimg)>0){
			for($i=0;$i<count($delimg);$i++){	
				$CommonFunction->dalete_sql("paiche_images","id",$delimg[$i]);
			}	
		}
		$object = new stdClass();
		$tiao_url="index.php?search_status=qb";
		$object->paiche_id=$paiche_id;
		//公司id
		$object->paicheCom=Request::getVar('paicheCom','post');
		//公司地址
		$object->paiche_linkerAdd=Request::getVar('paiche_linkerAdd','post');
		//联系人
		$object->paiche_linker=Request::getVar('paiche_linker','post');
		//联系人电话
		$object->paiche_linkerPhone=Request::getVar('paiche_linkerPhone','post');
		//业务门店
		$object->paicheCounterShop=Request::getVar('paicheCounterShop','post');
		//业务员
		$object->paicheCounterMan=Request::getVar('paicheCounterMan','post');
		//预约车辆
		$object->paicheCar=Request::getVar('paicheCar','post');
		//开始用车时间
		$object->paiche_startDate=strtotime(Request::getVar('paiche_startDate','post'));
		//用车结束时间
		$object->paiche_endDate=strtotime(Request::getVar('paiche_endDate','post'));
		//是否开票
		$object->paiche_needtax=Request::getVar('paiche_needtax','post');
		//备注
		$object->paiche_specialRemarks=Request::getVar('paiche_specialRemarks','post');
		//状态为预约
		$object->paiche_jie=-1;
		$object->paiche_type=3;
		if($CommonFunction->update_a($object,"paiche_id","paiche","")){
			$CommonFunction->setAction("修改了了派车单-".$paiche_id);
		 	//租金
			$paiche_rent=Request::getVar('paiche_rent','post');
			if(!$paiche_rent){
				$paiche_rent=0;
			}
			$addemp=$_SESSION['user_id'];
			$time=time();
	        $continuerent_start=strtotime(Request::getVar('paiche_startDate','post'));
	        $continuerent_end=strtotime(Request::getVar('paiche_endDate','post'));
	        $sql="update paiche_charges set conv_money={$paiche_rent},addtime={$time},addemp={$addemp},continuerent_start={$continuerent_start},continuerent_end={$continuerent_end} where paiche_id={$paiche_id} and charge_id=2";
			$CommonFunction->update_b($sql);
	        
			//押金
			$paiche_deposit=Request::getVar('paiche_deposit','post');
			if(!$paiche_deposit){
				$paiche_deposit=0;
			}
			 $sql="update paiche_charges set conv_money={$paiche_deposit},addtime={$time},addemp={$addemp} where paiche_id={$paiche_id} and charge_id=1";
			$CommonFunction->update_b($sql);
            
			
			
           
            
            //图片
			//$cid=Request::getVar('cid','post');
			//$sql="update paiche_images set paiche_id={$pid} where paiche_id={$cid}";
			//$CommonFunction->update_b($sql);
			
			$this->redirect($tiao_url."&paiche_id=".$paiche_id,"修改成功");
		}else{
			$this->redirect($tiao_url,"修改失败");
		}


		//print_r($delimg);exit;
		
		
	}

	function delete(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/delete");
		$client_id=Request::getVar('client_id','get');
		if($CommonFunction->dalete_sql("client","client_id",$client_id)){
			$CommonFunction->setAction("删除了id为".$client_id."的客户");
			$this->redirect("index.php","删除成功！");
		}else{
			$this->redirect("index.php","删除失败！");
		}	

	}
	

	//获取长期企业客户资料
	function getClient(){
		$CommonFunction=new CommonFunction();
		$paicheCom=Request::getVar('paicheCom','post');
		$sql="select * from client_lianxi where client_id={$paicheCom} order by zhu desc";
		$list=$CommonFunction->getList($sql);
		$sql1="select a.client_add,a.client_salesman,b.emp_name,a.client_shopid,c.shop_name from client as a left join emp as b on a.client_salesman=b.emp_id left join shop as c on a.client_shopid=c.shop_id where client_id={$paicheCom}";
		$client=$CommonFunction->getdata($sql1);
		$req['list']=$list;
		$req['client']=$client;
		header("Content-type: application/json");
        echo json_encode($req);
        exit();

	}
	function getClient_lianxi(){
		$CommonFunction=new CommonFunction();
		$paicheCom=Request::getVar('paicheCom','post');
		$paiche_linker=Request::getVar('paiche_linker','post');
		$sql="select phone from client_lianxi where client_id={$paicheCom} and name='{$paiche_linker}'";
		$req=$CommonFunction->getDataY($sql,'phone');
		header("Content-type: application/json");
        echo json_encode($req);
        exit();
	}
	
	function get_car(){
		//print_r("expression");exit;
		$CommonFunction=new CommonFunction();
		$key=Request::getVar('key','get');
		$where=" where car_recycle=0 AND car_status!=2 AND car_status!=3 ";
		if($key){
			$where.=" and car_num like '%{$key}%'";
		}
		$sql="select * from car {$where}";
		//print_r($sql);exit;
		$car_list=$CommonFunction->getList($sql);
		$object = new stdClass();
		$object->car_list=$car_list;
        $view  = $this->createView("operator/changqi_zijia/get_car.html");
        $view->assign($object);
        $view->display();
	}
	function select_car_a(){
		$CommonFunction=new CommonFunction();
		$key=Request::getVar('key','get');
		$where=" where car_recycle=0 AND car_status!=2 AND car_status!=3 ";
		if($key){
			$where.=" and car_num like '%{$key}%'";
		}
		$sql="select * from car {$where}";
		$car_list=$CommonFunction->getList($sql);
		$object = new stdClass();
		$object->car_list=$car_list;
        $view  = $this->createView("operator/changqi_zijia/select_car_a.html");
        $view->assign($object);
        $view->display();
	}
	//车辆调度
	function diaoche(){

		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/diaoche");
		$pid=Request::getVar('pid','get');
		$sql="select b.* from paiche as a left join car as b on a.paicheCar=b.car_id where a.paiche_id={$pid}";
		$car=$CommonFunction->getData($sql);
		//print_r($car);exit;
		$object = new stdClass();
		$object->car=$car;
		$object->pid=$pid;

        $view  = $this->createView("operator/changqi_zijia/diaoche.html");
        $view->assign($object);
        $view->display();
		
	}
    
	//调车
	function diaoche_action(){
		//print_r("expression");exit;
		$CommonFunction=new CommonFunction();
		$pid=Request::getVar('pid','post');
		$settle_startKm=Request::getVar('settle_startKm','post');
		$object = new stdClass();
		$object->paicheCar=Request::getVar('paicheCar','post');
		$object->paiche_dispatchTimes=time();
		$emp_id=$_SESSION['user_id'];
        $object->paicheServerMan=$_SESSION['user_id'];
        $object->paiche_shopid=$_SESSION['shopid'];
		$paicheDispatchMan=$CommonFunction->getDataY("select emp_name from emp where emp_id={$emp_id}","emp_name");
		//print_r($paicheDispatchMan);exit;
		$object->paicheDispatchMan=$paicheDispatchMan;
		$object->paiche_jie=1;
		$object->paiche_id=$pid;
		$tiao_url="index.php?search_status=qb";
		$re=true;
		if($CommonFunction->update_a($object,"paiche_id","paiche","")){
			$re=true;
			$object1 = new stdClass();
			$object1->settle_startKm=$settle_startKm;
			$object1->settlePaicheId=$pid;
			$CommonFunction->update_a($object1,"settlePaicheId","settle","");
			$CommonFunction->setAction("调度了车辆-".$pid);
		}else{
			$re=false;
			
		}
		$object = new stdClass();
        $object->result = $re ? "调度成功！":"调度失败，返回重试！";
        $view  = $this->createView("operator/changqi_zijia/result.html");
        $view->assign($object);
        $view->display();	
	}

	//换车
	function huanche(){

		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/huanche");
		$object = new stdClass();
		$pid=Request::getVar('pid','get');
		$sql="select a.paiche_startDate,a.paiche_endDate,b.settle_startKm,c.car_id,c.car_num,car_color from paiche as a left join settle as b on a.paiche_id=b.settlePaicheId left join car as c on a.paicheCar=c.car_id where a.paiche_id={$pid}";
		$paiche=$CommonFunction->getData($sql);
		$paiche['stime']=date('Y-m-d H:i:s', $paiche['paiche_startDate']);
		$paiche['addtime']=date('Y-m-d H:i:s', time());
        $paiche['paiche_endDate']=date('Y-m-d H:i:s', $paiche['paiche_endDate']);
        //租金
        $paiche['zhujin']=$CommonFunction->getDataY("select conv_money from paiche_charges where paiche_id={$pid} and charge_id=2","conv_money");
        //续租金
        $paiche['xzhujin']=$CommonFunction->getDataY("select conv_money from paiche_charges where paiche_id={$pid} and charge_id=5","conv_money");
        //租金差价
        $paiche['zhujin_chajia']=$CommonFunction->getDataY("select conv_money from paiche_charges where paiche_id={$pid} and charge_id=24","conv_money");
        //图片
        $paiche['images']=$CommonFunction->getList("select * from paiche_images where paiche_id={$pid} order by id asc");
        //优惠
        $youhui=$CommonFunction->getList("select * from paiche_youhui where paiche_id={$pid}");
        $paiche['youhui']=0;
       	if(count($youhui)>0){
       		for($i=0;$i<count($youhui);$i++){
       			$paiche['youhui']=$paiche['youhui']+$youhui[$i]['youhui_mone'];
       		}
       	}
		//print_r($data);exit;
		$object->paiche=$paiche;
		$object->pid=$pid;
		$object->cid=$pid;
        $view  = $this->createView("operator/changqi_zijia/huanche.html");
        $view->assign($object);
        $view->display();
	}
	function huanche_action(){
		$CommonFunction=new CommonFunction();
		$emp_id=$_SESSION['user_id'];
		$empname=$CommonFunction->getDataY("select emp_name from emp where emp_id={$emp_id}","emp_name");
		//print_r($empname);exit;
		$pid=Request::getVar('pid','post');
		$object = new stdClass();
		$object->paiche_id=$pid;
		$object->paicheCar=Request::getVar('car_ida','post');
		$re=true;
		if($CommonFunction->update_a($object,"paiche_id","paiche","")){
			$re=true;
		}else{
			$re=false;
		}
		if($re){
			$object1 = new stdClass();
			$object1->settlePaicheId=$pid;
			$object1->settle_startKm=Request::getVar('ekm_a','post');
			if($CommonFunction->update_a($object1,"settlePaicheId","settle","")){
				$re=true;
			}else{
				$re=false;
			}
		}
		if($re){
			$object2 = new stdClass();
			//派车id
			$object2->changecarPaicheId=$pid;
			
			$object2->changecar_carA=Request::getVar('car_id','post');
			//被换车辆起始公里数
	        $object2->changecar_carAStartKilo=Request::getVar('skm','post');
	        //结束公里数
	        $object2->changecar_carAEndKilo=Request::getVar('ekm','post');
	        //还完的车子
	        $object2->changecar_carB=Request::getVar('car_ida','post');
	        //备注
	        $object2->changecar_rentRemarks=Request::getVar('beizu','post');
	        //换车时间
	        $object2->changecar_times=strtotime(Request::getVar('etime','post'));
	        $object2->changecarMan=$empname;
	        
	        if($CommonFunction->instert($object2,"changecar")){

				$re=true;
			}else{
				$re=false;
			}
			
		}

		if($re){
			$object3 = new stdClass();
            $object3->car_id=Request::getVar('car_id','post');
            $object3->car_nowKilo=Request::getVar('ekm','post');
            if ($CommonFunction->update_a($object3,"car_id","car","")){
                $re=true;
            }else{
                $re=false;
            }
            $CommonFunction->setAction("进行了换车，id为-".$pid);
       	}
       	//判断租金差距
       	if($re){
       		$zujin_a=Request::getVar('zujin_a','post');
	        $zujin=Request::getVar('zujin','post');
	        if($zujin>$zujin_a){
	        	$object24 = new Object();
	            $object24->paiche_id = $pid;
	            $object24->charge_id = 24;
	            $object24->addtime =time();
	            $object24->addemp=$_SESSION['user_id'];
	            $object24->conv_money=$zujin-$zujin_a;
	            if ($CommonFunction->instert($object24,"paiche_charges")){
	                 $re=true;                      
	            }else{
	                $re=false;
	            }
	        }else if($zujin<$zujin_a){
	        	$object = new Object();
		        $object->paiche_id=$pid;
		        $object->youhui_mone=$zujin_a-$zujin;
		        $object->youhui_liyou="换车租金下降";
		        $object->youhui_name="换车差价";
		        $object->youhui_addtime=time();
		        $object->youhui_empid=$_SESSION['user_id'];
		        if ($CommonFunction->instert($object,"paiche_youhui")){
	                 $re=true;                      
	            }else{
	                $re=false;
	            }
	        }
       	}
       	

        $object = new stdClass();
        $object->result = $re ? "换车成功！":"换车失败，返回重试！";
        $view  = $this->createView("operator/zijia_linshi/result.html");
        $view->assign($object);
        $view->display();
	}
	//其他费用
	function qita(){
		$CommonFunction=new CommonFunction();
		$pid=Request::getVar('pid','get');
		$CommonFunction->getQuanxian($this->package."/qita");
		$sql="select * from paiche where paiche_id={$pid}";
		$paiche=$CommonFunction->getdata($sql);
		$object = new stdClass();
		$object ->paiche=$paiche;
		$object ->pid=$pid;
		
		$view  = $this->createView("operator/changqi_zijia/qita.html");
        $view->assign($object);
        $view->display();
	}

	function qita_action(){
		$CommonFunction=new CommonFunction();
		$pid = Request::getVar('pid','post');
		$re=true;
        $qingxi=Request::getVar('qingxi','post');
        if($qingxi>0){
            $object6 = new Object();
            $object6->paiche_id = $pid;
            $object6->charge_id = 6;
            $object6->addtime =time();
            $object6->addemp=$_SESSION['user_id'];
            $object6->conv_money=$qingxi;

            if ($CommonFunction->instert($object6,"paiche_charges")){                           
            }else{
                $re=false;
            }
        }    
        
        $weiyue=Request::getVar('weiyue','post');
        if($weiyue>0){
            $object25 = new Object();
            $object25->paiche_id = $pid;
            $object25->charge_id = 25;
            $object25->addtime =time();
            $object25->addemp=$_SESSION['user_id'];
            $object25->conv_money=$weiyue;
            if ($CommonFunction->instert($object25,"paiche_charges")){                           
            }else{
                $re=false;
            }
        }
        $weixiu=Request::getVar('weixiu','post');
        if($weixiu>0){
            $object7 = new Object();
            $object7->paiche_id = $pid;
            $object7->charge_id = 7;
            $object7->addtime =time();
            $object7->addemp=$_SESSION['user_id'];
            $object7->conv_money=$weixiu;
            if ($CommonFunction->instert($object7,"paiche_charges")){                           
            }else{
                $re=false;
            }
        }

        $xingshi=Request::getVar('xingshi','post');
        if($xingshi>0){
            $object23 = new Object();
            $object23->paiche_id = $pid;
            $object23->charge_id = 23;
            $object23->addtime =time();
            $object23->addemp=$_SESSION['user_id'];
            $object23->conv_money=$xingshi;
            if ($CommonFunction->instert($object23,"paiche_charges")){                           
            }else{
                $re=false;
            }
        }




        

   

        $yaoshi=Request::getVar('yaoshi','post');
        if($yaoshi>0){
            $object21 = new Object();
            $object21->paiche_id = $pid;
            $object21->charge_id = 21;
            $object21->addtime =time();
            $object21->addemp=$_SESSION['user_id'];
            $object21->conv_money=$yaoshi;
            if ($CommonFunction->instert($object21,"paiche_charges")){                           
            }else{
                $re=false;
            }
        } 

        $qita=Request::getVar('qita','post');
        if($qita>0){
            $object10 = new Object();
            $object10->paiche_id = $pid;
            $object10->charge_id = 10;
            $object10->addtime =time();
            $object10->addemp=$_SESSION['user_id'];
            $object10->conv_money=$qita;
            if ($CommonFunction->instert($object10,"paiche_charges")){                           
            }else{
                $re=false;
            }
        }   

        $shouche=Request::getVar('shouche','post');
        if($shouche>0){
            $object11 = new Object();
            $object11->paiche_id = $pid;
            $object11->charge_id = 11;
            $object11->conv_money=$shouche;
            $object11->addtime =time();
            $object11->addemp=$_SESSION['user_id'];
            if ($CommonFunction->instert($object11,"paiche_charges")){                           
            }else{
                $re=false;
            }
        }    

        

      
        if($re){
            $CommonFunction=new CommonFunction();
            $CommonFunction->setAction("添加了其他费用id为-".$pid);
        }
        $object = new stdClass();
        $object->result = $re ? "增加费用成功！":"增加费用失败，返回重试！";
        $view  = $this->createView("operator/changqi_zijia/result.html");
        $view->assign($object);
        $view->display(); 
	}
	//优惠
	function youhui(){
		$CommonFunction=new CommonFunction();
        $CommonFunction->getQuanxian($this->package."/youhui");
        $pid = Request::getVar('pid','get');
        $model = $this->createModel("zijia_linshi",dirname( __FILE__ ));
        //$sql_paiche="select * from paiche where paiche_id={$pid}";
        //$paiche=$model->getListBySql_a($sql_paiche);
        $sql="select * from paiche_charges where paiche_id={$pid} and charge_id!=1";
        $paiche_charges=$CommonFunction->getList($sql);

        $yinshou=0;$yishou=0;
        for($i=0;$i<count($paiche_charges);$i++){
            $yinshou=$yinshou+$paiche_charges[$i]['conv_money'];
            $yishou=$yishou+$paiche_charges[$i]['have_in_money'];
        }

        $sql_a="select * from paiche_youhui where paiche_id={$pid}";

        $paiche_youhui=$CommonFunction->getList($sql_a);

        $yinyouhui=0;

        for($i=0;$i<count($paiche_youhui);$i++){
            $yinyouhui=$yinyouhui+$paiche_youhui[$i]['youhui_mone'];
        }
        //能够优惠多少
        $nengyouhui=($yinshou-$yishou-$yinyouhui);
        $object = new stdClass();
        $object->pid=$pid;
        $object->nengyouhui=$nengyouhui;
        $view  = $this->createView("operator/changqi_zijia/youhui.html");
        $view->assign($object);
        $view->display(); 
	}


	function youhui_action(){
		$CommonFunction=new CommonFunction();
        $pid = Request::getVar('pid','post');
        $youhui_mone = Request::getVar('youhui_mone','post');
        $youhui_liyou = Request::getVar('youhui_liyou','post');
        $object = new Object();
        $object->paiche_id=$pid;
        $object->youhui_mone=$youhui_mone;
        $object->youhui_liyou=$youhui_liyou;
        $object->youhui_name="租车优惠";
        $object->youhui_addtime=time();
        $object->youhui_empid=$_SESSION['user_id'];
        $re=true;

        if ($CommonFunction->instert($object,"paiche_youhui")){ 
            $re=true;
             //$this->redirect("zijia_detail.php?uid={$pid}","添加成功");                          
        }else{
            $re=false;
            //$this->redirect("zijia_detail.php?uid={$pid}","添加失败"); 
        }
        if($re){
           
            $CommonFunction->setAction("租车优惠id为-".$pid);
        }
        $object = new stdClass();
        $object->result = $re ? "优惠成功！":"优惠失败，返回重试！";
        $view  = $this->createView("operator/changqi_zijia/result.html");
        $view->assign($object);
        $view->display();
	}
	function kaipiao(){

		$CommonFunction=new CommonFunction();
        $CommonFunction->getQuanxian($this->package."/kaipiao");
        $pid = Request::getVar('pid','get');
        $sql="select * from paiche_kaipiao where paiche_id={$pid}";
        $kaipiao_list=$CommonFunction->getList($sql);
        $ykaipiao=0;
        if(count($kaipiao_list)>0){
        	for($i=0;$i<count($kaipiao_list);$i++){
        		$ykaipiao=$ykaipiao+$kaipiao_list[$i]['money'];
        	}
        	
        }
        $sql="select * from paiche_charges where charge_id!=1 and paiche_id={$pid}";
        $charges_list=$CommonFunction->getList($sql);
        $zkaipiao=0;
        if(count($charges_list)>0){
        	for($i=0;$i<count($charges_list);$i++){
        		$zkaipiao=$zkaipiao+$charges_list[$i]['conv_money'];
        	}
        	
        }
        $sql="select * from paiche_youhui where paiche_id={$pid}";
        $youhui_list=$CommonFunction->getList($sql);
        $youhui=0;
        if(count($youhui_list)>0){
        	for($i=0;$i<count($youhui_list);$i++){
        		$youhui=$youhui+$youhui_list[$i]['youhui_mone'];
        	}
        	
        }
        $object = new Object();
        $object->ykaipiao=$ykaipiao;
        $object->zkaipiao=$zkaipiao;
        $object->youhui=$youhui;
        $object->pid=$pid;
        $view  = $this->createView("operator/changqi_zijia/kaipiao.html");
        $view->assign($object);
        $view->display();
	}
	function kaipiao_action(){
		//print_r($_SESSION['user_id']);exit;
		$CommonFunction=new CommonFunction();
        $pid = Request::getVar('pid','post');
        $xuhao = Request::getVar('xuhao','post');

        $money = Request::getVar('money','post');
        $object = new Object();
        $object->paiche_id=$pid;
        $object->money=$money;
        $object->xuhao=$xuhao;
        $object->addtime=time();
        $object->emp_id=$_SESSION['user_id'];
        //print_r($object);exit;
        $re=true;
        if ($CommonFunction->instert($object,"paiche_kaipiao")){ 
            $re=true;                          
        }else{
            $re=false;
            
        }
        $object = new stdClass();
        $object->result = $re ? "开票成功！":"开票失败，返回重试！";
        $view  = $this->createView("operator/changqi_zijia/result.html");
        $view->assign($object);
        $view->display();

	}
	//明细

	function mingxi(){
		$CommonFunction=new CommonFunction();

        $CommonFunction->getQuanxian($this->package."/mingxi");

        $pid = Request::getVar('pid','get');
        $sql="select a.*,b.client_name,c.emp_name AS yewuyuan,cc.shop_name as ywshopname,e.car_num,ee.car_num as car_num2,m.shop_name,n.emp_name AS jiedaiyuan,o.*,z.emp_name as shenhe_empname  
        from paiche as a 
        left join client AS b ON a.paicheCom=b.client_id 
        LEFT JOIN emp AS c ON a.paicheCounterMan=c.emp_id 
        LEFT JOIN shop AS cc ON a.paicheCounterShop=cc.shop_id 
        LEFT JOIN car AS e ON a.paicheCar=e.car_id 
        LEFT JOIN car AS ee ON a.paicheCar2=ee.car_id 
        LEFT JOIN shop AS m ON a.paiche_shopid=m.shop_id 
        LEFT JOIN emp AS n ON a.paicheServerMan=n.emp_id 
        LEFT JOIN settle AS o ON a.paiche_id=o.settlePaicheId 
        LEFT JOIN emp AS z ON a.shenhe_empid=z.emp_id 
        where paiche_id={$pid}";
        $list=$CommonFunction->getData($sql);
        
        $list['paiche_checkTimes'] = $list['paiche_checkTimes']>0 ? date("Y-m-d H:i:s",$list['paiche_checkTimes']) :"-";
        $list['paiche_startDate'] = $list['paiche_startDate']>0 ? date("Y-m-d H:i:s",$list['paiche_startDate']) :"-";
        $list['paiche_endDate'] = $list['paiche_endDate']>0 ? date("Y-m-d H:i:s",$list['paiche_endDate']) : "—";
        $list['paiche_dispatchTimes'] = $list['paiche_dispatchTimes']>0 ? date("Y-m-d H:i:s",$list['paiche_dispatchTimes']) : "—";
        $list['settle_endDate'] = $list['settle_endDate']>0 ? date("Y-m-d H:i:s",$list['settle_endDate']) : "—";
        //合同图片
        $sql="select * from paiche_images where paiche_id={$pid}";
        $images_list=$CommonFunction->getList($sql);
        //费用
        $chargelist=$CommonFunction->getChargeList_a($pid);
        //优惠
        $sql="select a.*,b.emp_name from paiche_youhui as a left join emp as b on a.youhui_empid=b.emp_id where paiche_id={$pid}";
        $youhui_list=$CommonFunction->getList($sql);
        if(count($youhui_list)>0){
        	for($i=0;$i<count($youhui_list);$i++){
        		$youhui_list[$i]['youhui_addtime']=date("Y-m-d H:i:s",$youhui_list[$i]['youhui_addtime']);
        		
        	}

        }
        //收款记录
        $sql="Select a.*,b.bank_name,c.payment_name From `account_log` as a ".
             "Left Join `banks` as b On a.bank_id=b.bank_id ".
             "Left Join `payments` as c ON a.payments_id=c.payment_id ".
             "Where a.bill_type<>4 and a.bill_type<>1";
        $sql.=" and a.paiche_id={$pid}";
        $sql.=" Order by a.add_time";
        $account_list = $CommonFunction->getList($sql);
        if(count($account_list)>0){
            for($i=0;$i<count($account_list);$i++){
                $account_list[$i]['add_time']=date("Y-m-d H:i:s",$account_list[$i]['add_time']);
                
            }
        }
        //print_r($account_list);exit;
        //出车记录
        $sql="SELECT a.*,b.car_num as carA,c.car_num as carB FROM `changecar` AS a LEFT JOIN `car` AS b ON a.changecar_carA=b.car_id LEFT JOIN `car` AS c ON a.changecar_carB=c.car_id WHERE a.`changecarPaicheId`={$pid}  order by changecar_times asc";
        $changelist=$CommonFunction->getList($sql);
        if(count($changelist)>0){
        	for($i=0;$i<count($changelist);$i++){
        		$changelist[$i]['changecar_times_all']=date("Y-m-d H:i:s",$changelist[$i]['changecar_times']);
        		$changelist[$i]['changecar_times']=date("Y-m-d",$changelist[$i]['changecar_times']);
        	}

        }
        //开票记录
        $sql="select a.*,b.emp_name from paiche_kaipiao as a left join emp as b on a.emp_id=b.emp_id where a.paiche_id={$pid}";
        $kaipiao_list=$CommonFunction->getList($sql);
        if(count($kaipiao_list)>0){
        	for($i=0;$i<count($kaipiao_list);$i++){
        		$kaipiao_list[$i]['addtime']=date("Y-m-d H:i:s",$kaipiao_list[$i]['addtime']);
        		
        	}

        }
       	//违章记录
        $sql="select a.*,b.car_num from breakrules as a left join car as b on a.breakrules_CarId=b.car_id where a.breakrulesPaicheId={$pid}";
        $breakrules=$CommonFunction->getList($sql);
        if(count($breakrules)>0){
            for($i=0;$i<count($breakrules);$i++){
                $breakrules[$i]['breakrules_date']=($breakrules[$i]['breakrules_date']>0?date("Y-m-d H:i:s",$breakrules[$i]['breakrules_date']):"");
                $breakrules[$i]['breakrules_times']=($breakrules[$i]['breakrules_times']>0?date("Y-m-d H:i:s",$breakrules[$i]['breakrules_times']):"");
                $breakrules[$i]['breakrules_endtimes']=($breakrules[$i]['breakrules_endtimes']>0?date("Y-m-d H:i:s",$breakrules[$i]['breakrules_endtimes']):"");
            }
        }


        $object = new Object();
        $object->list=$list;
        $object->images_list=$images_list;
        $object->pid=$pid;
        $object->breakrules=$breakrules;
        $object->chargelist=$chargelist;
        $object->youhui_list=$youhui_list;
        $object->account_list=$account_list;
        $object->changelist=$changelist;
        $object->kaipiao_list=$kaipiao_list;
        //合同管理
        $object->hetong =$CommonFunction->panduan_rule($this->package."/hetong");

        $view  = $this->createView("operator/changqi_zijia/mingxi.html");
        $view->assign($object);
        $view->display();
	}

	//删除
	function delete_a(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/delete");
		$pid = Request::getVar('pid','get');
		if($CommonFunction->dalete_sql("paiche","paiche_id",$pid)){
			$CommonFunction->setAction("删除了派车单-".$pid);
			$this->redirect("index.php","清理成功！");
		}else{
			$this->redirect("index.php","清理失败！");
		}	
	}
	//还车
	function huanche_a(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/huanche_a");
		$pid = Request::getVar('pid','get');
		$sql="select a.*,b.settle_startKm from paiche as a left join settle as b on a.paiche_id=b.settlePaicheId where a.paiche_id={$pid}";
		$list=$CommonFunction->getData($sql);
		if($list['paiche_endDate']<time()){
			print_r("当前车辆超时，请先续租！");exit;
		}

		$list['paiche_startDate'] = $list['paiche_startDate']>0 ? date("Y-m-d H:i:s",$list['paiche_startDate']) :"-";
        $list['paiche_endDate'] = $list['paiche_endDate']>0 ? date("Y-m-d H:i:s",$list['paiche_endDate']) : "—";

        $sql="select * from changecar where changecarPaicheId={$pid} Order by changecar_id";
        $changecar_list=$CommonFunction->getList($sql);
        $ekm=0;
        $stime=$list['paiche_startDate'];
        if(count($changecar_list)>0){
        	for($i=0;$i<count($changecar_list);$i++){
        		$ekm=$ekm+($changecar_list[$i]['changecar_carAEndKilo']-$changecar_list[$i]['changecar_carAStartKilo']);
        		$stime=date("Y-m-d H:i:s",$changecar_list[$i]['changecar_times']);
        	}
        }


		$object = new Object();
		$object->list = $list;
		$object->time = date("Y-m-d H:i:s",time());
		$object->ekm = $ekm;
		$object->pid = $pid;
		$object->stime = $stime;
		$view  = $this->createView("operator/changqi_zijia/huanche_a.html");
        $view->assign($object);
        $view->display();
	}
	function huanche_aaction(){
		$CommonFunction=new CommonFunction();
		$pid = Request::getVar('pid','post');
		$re=true;
        //实际还车时间
        $factendtime=Request::getVar('return_endDate','post');
		$object = new Object();
		$object->settlePaicheId = $pid;
		//车辆开始公里数
        $object->settle_startKm=Request::getVar('skm','post');
		//车辆结束公里数
        $object->settle_endKm=Request::getVar('ekm','post');
        //共计行驶多少公里
        $object->settle_totalKm=$object->settle_endKm-$object->settle_startKm;
        //结算公里数
        $object->settle_totalcalKm=Request::getVar('zjkm','post');
        //实际还车时间
        $object->settle_endDate=empty($factendtime)? time():strtotime($factendtime);

        if ($CommonFunction->update_a($object,"settlePaicheId","settle","")){
        }else{
            $re=false;
        }
        $object_paiche = new Object();
        $object_paiche->paiche_jie=2;
        $object_paiche->paiche_id=$pid;
        if ($CommonFunction->update_a($object_paiche,"paiche_id","paiche","")){
        }else{
            $re=false;
        }
        //更新车辆最新公里数
        if ($re){
            $object1 = new stdClass();
            $object1->car_id=Request::getVar('paicheCar','post');
            $object1->car_nowKilo=Request::getVar('ekm','post');
            if ($CommonFunction->update_a($object1,"car_id","car","")){
            }else{
                $re=false;
            }
        }
        if($re){
            
             $CommonFunction->setAction("还车了派车单，id为-".$pid);
        }
		$object = new stdClass();
        $object->result = $re ? "还车成功！":"还车失败，返回重试！";
        $view  = $this->createView("operator/zijia_linshi/result.html");
        $view->assign($object);
        $view->display(); 
	}
	//续租

	function xuzu(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/xuzu");
		$pid = Request::getVar('pid','get');
		//查询租金和续租金的日期
		$sql="select paiche_endDate from paiche where  paiche_id={$pid}";
		$time=$CommonFunction->getDataY($sql,"paiche_endDate");
		$time=date("Y-m-d 00:00:00",$time+24*60*60);
		//图片
		$sql="select * from paiche_images where paiche_id={$pid} order by id asc";
		$images_list=$CommonFunction->getList($sql);
		$object = new Object();
		$object->time =$time;
		$object->pid =$pid;
		$object->cid =$pid;
		$object->images_list =$images_list;
		$view  = $this->createView("operator/changqi_zijia/xuzu.html");
        $view->assign($object);
        $view->display();
	}

	function xuzu_action(){
		$CommonFunction=new CommonFunction();
		$pid = Request::getVar('pid','post');
		$paiche_startDate=strtotime(Request::getVar('paiche_startDate','post'));
		$paiche_endDate=strtotime(Request::getVar('paiche_endDate','post'));
		$conv_money=Request::getVar('conv_money','post');
		$paiche_specialRemarks=Request::getVar('paiche_specialRemarks','post');
		$re=true;
		$object = new Object();
		$object->paiche_endDate=$paiche_endDate;
		$object->paiche_id=$pid;
		if ($CommonFunction->update_a($object,"paiche_id","paiche","")){
				$re=true;
        }else{
                $re=false;
        }
		
       	if($re){
	        	$object5 = new Object();
	            $object5->paiche_id = $pid;
	            $object5->charge_id = 5;
	            $object5->addtime =time();
	            $object5->addemp=$_SESSION['user_id'];
	            $object5->conv_money=$conv_money;
	            $object5->continuerent_start=$paiche_startDate;
	            $object5->continuerent_end=$paiche_endDate;
	            if ($CommonFunction->instert($object5,"paiche_charges")){
	                 $re=true;                      
	            }else{
	                $re=false;
	            }
       	}
       	
		$object = new stdClass();
        $object->result = $re ? "续租成功！":"续租失败，返回重试！";
        $view  = $this->createView("operator/changqi_zijia/result.html");
        $view->assign($object);
        $view->display();
		
	}
    function picture()
    {
        $pid = Request::getVar('pid','get');
        $nowserial=Request::getVar('id','get');
        $CommonFunction=new CommonFunction();
        $sql="select * from paiche_images where paiche_id={$pid}";
        $imagelist = $CommonFunction->getList($sql);
        $total=count($imagelist);
        
        $object = new stdClass();
        $object->imagelist = $imagelist;
        $object->nowserial = $nowserial;
        $object->total= $total;
        
        $view  = $this->createView("operator/changqi_zijia/picture.html");
        $view->assign($object);
        $view->display();
    }
    //订单的审核
    function zijia_shenghe(){

        $CommonFunction=new CommonFunction();
        $CommonFunction->getQuanxian($this->package."/zijia_shenghe");
        $pid = Request::getVar('pid','get');
        $object = new stdClass();
        $object->pid=$pid;
        $view  = $this->createView("operator/changqi_zijia/zijia_shenghe.html");
        $view->assign($object);
        $view->display();
    }

    function zijia_shengheAction(){
        $CommonFunction=new CommonFunction();
        $pid = Request::getVar('pid','post');
        $paiche_checkNote = Request::getVar('paiche_checkNote','post');
        $object = new Object();
        $object->paiche_id=$pid;
        $object->paiche_checkTimes=time();
        $object->paiche_checkNote=$paiche_checkNote;
        $object->shenhe_empid=$_SESSION['user_id'];
        if($CommonFunction->update_a($object,"paiche_id","paiche","")){
            $re=true;
        }else{
            $re=false;
        }
        if($re){
            
            $CommonFunction->setAction("审核了订单,id为-".$pid);
        }
        $object = new stdClass();
        $object->result = $re ? "审核成功！":"审核失败，返回重试！";
        $view  = $this->createView("operator/changqi_zijia/result.html");
        $view->assign($object);
        $view->display(); 

    }
     //修改派车备注
    function setBeizhu(){
        $CommonFunction=new CommonFunction();
        $pid = Request::getVar('pid','post');
        $paiche_specialRemarks = Request::getVar('paiche_specialRemarks','post');

        $object = new Object();
        $object->paiche_id=$pid;
        $object->paiche_specialRemarks=$paiche_specialRemarks;
        if($CommonFunction->update_a($object,"paiche_id","paiche","")){
            echo 1;
        }else{
            echo 2;
        }
        


    }
    //合同管理
    function hetong(){
        $pid = Request::getVar('pid','get');
        $CommonFunction=new CommonFunction();
        $sql="select * from paiche_images where paiche_id={$pid}";
        $date= $CommonFunction->getList($sql);
        $object = new stdClass();
        $object->date = $date;
        $object->pid = $pid;
        $view  = $this->createView("operator/changqi_zijia/hetong.html");
        $view->assign($object);
        $view->display();
    }
    function update_hetong(){
        //删除图片
        $CommonFunction=new CommonFunction();
        $delimg[]=Request::getVar('delimg','post');
        $delimg=$delimg[0];
        //print_r($delimg);exit;
        if(count($delimg)>0){
            for($i=0;$i<count($delimg);$i++){   
                $CommonFunction->dalete_sql("paiche_images","id",$delimg[$i]);
            }   
        }
        $object = new stdClass();
        $object->result = "修改成功！";
        $view  = $this->createView("operator/changqi_zijia/result.html");
        $view->assign($object);
        $view->display();   
    }
	
}
