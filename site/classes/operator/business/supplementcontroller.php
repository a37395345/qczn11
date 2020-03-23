<?php
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('operator.navi.admincontroller');
import('operator.navi.privilegehelper');
import('imag.fusecookie');
import('imag.filesystem.fusefile');
import('imag.filesystem.filesystem');
import('imag.image.uploader');
import('imag.utilities.tool');

class SupplementController extends AdminController
{
	function __construct($config = array())
	{
		parent::__construct($config);
		$this->registerTask( 'supplement','supplement');
		$this->registerTask( 'insert','insert');
		$this->registerTask( 'modify','modify');
		$this->registerTask( 'update','update');
	}
	
	function supplement()
	{
		$busi_id = Request::getVar('b_id','get');
		$clientid = Request::getVar('clientid','get');
        if (empty($busi_id)) $busi_id = 1;
        $paiche_deposit = 10000;
        $paiche_rent=0;
        $busiInfo = array();
        $item_list=null;
        
        $model = $this->createModel("list",dirname( __FILE__ ));
        
        $busiInfo['paiche_busitype']=1;//默认临时客户
        $busiInfo['paiche_needtax']=0;//默认不需要开票
        
		$object = new stdClass();
		$object->task = "insert";
		$object->busitype = $busi_id;
                
        $date_array = array();
		for($day=1; $day<=23; $day++){
			$date_array[$day]['hour']=$day;
		}
        $object->hourlist = $date_array;
		$date_array = array();
		for($day=0; $day<=11; $day++){
			$date_array[$day]['minute']=$day*5;
		}
		
		$busiInfo['paiche_startHour']=date("H");
		$min=0;
		if (date("i")<5){
			$min=0;
		}elseif (date("i")>55){
			$min=55;
		}elseif (date("i")<10){
			$min=5;
		}else{
			$min=round(date("i")/10)*10;
		}
		$busiInfo['paiche_startMinute']=$min;
		$busiInfo['paicheCom']=$clientid;
		if (!empty($clientid)){//企业用车
			$busiInfo['paiche_busitype']=2;
		}
		$object->minuelist = $date_array;
		$object->list = $busiInfo;
		$object->brotherlist = $model->getListBySql("Select bro_id,bro_name,bro_linker,bro_phone From `brothers` Where bro_recycle=0");
		$object->itemlist = $item_list;
		$object->clientlist=$model->getListBySql("SELECT `client_id`,`client_name`,`client_Mlinker`,`client_Mphone` FROM `client` WHERE client_recycle!=1");
        $object->paiche_deposit = $paiche_deposit;
        $object->paiche_deposit_back = $paiche_deposit;
        $object->paiche_rent=$paiche_rent;
        $object->clientid = $clientid;
		$view  = $this->createView("operator/business/supplement.html");
		$view->assign($object);
		$view->display();
	}

	function insert()
	{			
		
		$forward = "supplement.php?b_id=".Request::getVar('b_id','post');

		$model = $this->createModel("list",dirname( __FILE__ ));
		$empname=$model->getEmpName($_SESSION['a_uid']);

		$startdate=Request::getVar('p_startDate','post');
		$contractNum=date('YmdHi',strtotime($startdate)).date('s',time());
		
		$busi_id = Request::getVar('b_id','post');
		
		$paiche_busitype=Request::getVar('paiche_busitype','post');
		
		$object = new stdClass();
		$object->paiche_type=$busi_id;
		$object->paiche_aaa="补单";
	  	$object->paiche_contractNum=$contractNum;
	  	if ($paiche_busitype==1){//临时客户
	  		$object->paiche_personal=1;
	  		$object->paicheCom=0;
	  		$object->paiche_brother=0;
	  	}elseif($paiche_busitype==2){//企业客户
	  		$object->paiche_personal=0;
	  		$paicheCom=Request::getVar('paiche_name2','post');
	  		$object->paicheCom=empty($paicheCom)? 0 : $paicheCom;
	  		$object->paiche_brother=0;
	  	}else{//调车公司
	  		$object->paiche_personal=1;
	  		$object->paicheCom=0;
	  		$paiche_brother=Request::getVar('paiche_brother','post');
	  		$object->paiche_brother=empty($paiche_brother)?0:$paiche_brother;
	  	}
	  	
	  	$object->paiche_linker=Request::getVar('paiche_linker','post');
	  	$object->paiche_linkerPhone=Request::getVar('paiche_linkerPhone','post');
	  	if ($busi_id==1 || $busi_id==3){
	  	$object->paiche_linkerNum=Request::getVar('paiche_linkerNum','post');
	  	$object->paiche_linkerAdd=Request::getVar('paiche_linkerAdd','post');
	  	$object->paiche_promier=Request::getVar('paiche_promier','post');
	  	$object->paiche_promierPhone=Request::getVar('paiche_promierPhone','post');
	  	$object->paiche_promierNum=Request::getVar('paiche_promierNum','post');
	  	$object->paiche_promierAdd=Request::getVar('paiche_promierAdd','post');
	  	}
	  	$object->paicheCounterMan=0;
	  	$object->paiche_startDate=strtotime(Request::getVar('p_startDate','post'));
	  	$object->paiche_endDate=strtotime(Request::getVar('p_endDate','post'));
	  	
	  	$object->paiche_requestCar=Request::getVar('paiche_requestCar','post');
	  	$paiche_overTime=Request::getVar('paiche_overTime','post');
	  	$object->paiche_overTime=empty($paiche_overTime) ? 0 : $paiche_overTime;
	  	$paiche_unlimitTime=Request::getVar('paiche_unlimitTime','post');
	  	$object->paiche_unlimitTime=empty($paiche_unlimitTime)? "" : $paiche_unlimitTime;
	   	$paiche_limitKm=Request::getVar('paiche_limitKm','post');
	   	$paiche_overKm=Request::getVar('paiche_overKm','post');
	  	$object->paiche_limitKm=empty($paiche_limitKm)? 0 : $paiche_limitKm;
	  	$paiche_unlimitKm=Request::getVar('paiche_unlimitKm','post');
	  	$object->paiche_unlimitKm=empty($paiche_unlimitKm)? "" : $paiche_unlimitKm;
	  	$object->paiche_overKm=empty($paiche_overKm)? 0 : $paiche_overKm;
	  	$paiche_front=Request::getVar('paiche_front','post');
	  	$object->paiche_front=empty($paiche_front)? 0 : $paiche_front;
	  	$object->paiche_line=Request::getVar('paiche_line','post');

		if($busi_id==2){
	  	$object->paiche_route=Request::getVar('paiche_route','post');
	  	$object->paiche_scope=Request::getVar('paiche_scope','post');
	  	
	  	}
	  	$object->paiche_specialRemarks=Request::getVar('paiche_specialRemarks','post');
	  	$paiche_workTime=Request::getVar('paiche_workTime','post');
		$object->paiche_workTime=empty($paiche_workTime)? 0 : $paiche_workTime;
	  		  	
	  	$object->paiche_status=1;	  	
	  	$object->paiche_times=time();
	  	$object->paiche_Man=$empname;
	  	$paicheCar=Request::getVar('paicheCar2','post');
	  	$object->paicheCar=empty($paicheCar)? 0 : $paicheCar;
	  	$paicheDriver=Request::getVar('paicheDriver2','post');
	  	$object->paicheDriver=empty($paicheDriver)? 0 : $paicheDriver;
	  	$paiche_shunt=Request::getVar('shunt','post');//是否外调别人的车	  	
	  	$object->paiche_shunt=$paiche_shunt;
		$paiche_overKm=Request::getVar('paiche_overKm','post');
		$paiche_overTime=Request::getVar('paiche_overTime','post');
		$paiche_waitTime=Request::getVar('paiche_waitTime','post');//待时价格
		if (!empty($paiche_overKm)){
			$object->paiche_overKm=$paiche_overKm;
		}
		if (!empty($paiche_overTime)){
			$object->paiche_overTime=$paiche_overTime;
		}
  		if (!empty($paiche_waitTime)){
			$object->paiche_waitTime=$paiche_waitTime;
		}

	  	//var_dump($object);
	  	//exit();

        $rec_id=$model->store($object);
		if ($rec_id>0)
		{
			$re=true;
			$object = new Object();
			$object->settlePaicheId = $rec_id;
			if ($paiche_shunt==0){//未调车
			$object->settle_startKm=Request::getVar('settle_startKm','post');
		  	$object->settle_endKm=Request::getVar('settle_endKm','post');
		  	$object->settle_totalKm=Request::getVar('settle_totalKm','post');
		  	$object->settle_totalcalKm=Request::getVar('settle_totalcalKm','post');
		  	$settle_overTime=Request::getVar('settle_overTime','post');
		  	$object->settle_overTime=empty($settle_overTime)?0:$settle_overTime;
		  	$overKmMoney=Request::getVar('overKmMoney','post');
		  	$object->settle_overKmMoney=empty($overKmMoney)?0:$overKmMoney;
		  	$object->settle_overKmMoney_have=empty($overKmMoney)?0:$overKmMoney;
		  	$overTimeMoney=Request::getVar('overTimeMoney','post');
		  	$object->settle_overTimeMoney=empty($overTimeMoney)?0:$overTimeMoney;
		  	$object->settle_overTimeMoney_have=empty($overTimeMoney)?0:$overTimeMoney;
		  	$settle_waitTime=Request::getVar('settle_waitTime','post');
		  	$object->settle_waitTime=empty($settle_waitTime)?0:$settle_waitTime;
		  	$waitTimeMoney=Request::getVar('waitTimeMoney','post');
		  	$object->settle_waitTimeMoney=empty($waitTimeMoney)?0:$waitTimeMoney;
		  	
			}else{//调车
				$object->settle_totalKm=1;
			}
		  	$object->settle_losses=2;
		  	$object->settle_endDate=time();
		  	
		  	if ($model->update($object,'settlePaicheId','settle')){
		  	}else{
		  		$re=false;
		  	}
		  	$paiche_brother_rent=Request::getVar('paiche_brother_rented','post');//本公司收现
		  	$paiche_brother_rent=empty($paiche_brother_rent)? 0 : $paiche_brother_rent;
			
			//租金
			$paiche_rent=Request::getVar('paiche_rent','post');		
			$object = new Object();
    		$object->paiche_id = $rec_id;
	        $object->charge_id = 2;
	        $object->conv_money = $paiche_rent;
	        $object->back_money =0;
	        $object->have_in_money=($paiche_busitype==3 ? $paiche_brother_rent:$paiche_rent) ;
	        
	        $object->status=2;
	        $model->store($object,"paiche_charges");
	        
	        //押金
			$paiche_deposit=Request::getVar('paiche_deposit','post');
			if (!empty($paiche_deposit) && $paiche_deposit>0 && $busi_id==1){
				$paiche_deposit_back=Request::getVar('paiche_deposit_back','post');
				$object2 = new Object();
	    		$object2->paiche_id = $rec_id;
		        $object2->charge_id = 1;
		        $object2->conv_money = $paiche_deposit;
		        $object2->have_in_money=$paiche_deposit;
		        $object2->back_money =empty($paiche_deposit_back)? $paiche_deposit:$paiche_deposit_back;
		        $object2->have_back_money=empty($paiche_deposit_back)? $paiche_deposit:$paiche_deposit_back;
				if ($model->store($object2,"paiche_charges")){
				}else{
					$re=false;
				}
			}
			
			//收费项目
		  	$arr_charge=Request::getVar('Cid','post');//收费项目
		  	$arr_del=Request::getVar('Did','post');//删除标记
		  	$arr_money=Request::getVar('money','post');
		  	$arr_backmoney=Request::getVar('back_money','post');
		  	
		  	if ($arr_charge){
			  	for($i=0;$i<count($arr_charge);$i++){
			  		$cid=$arr_charge[$i];		  		
		  			if ($arr_del[$i]==0){//没删除
			  			$object = new Object();
			    		$object->paiche_id = $rec_id;
				        $object->charge_id = $cid;
				        $object->conv_money = $arr_money[$i];
				        $object->back_money =empty($arr_backmoney[$i])? 0:$arr_backmoney[$i];
				        $object->have_in_money=$arr_money[$i];
	        			$object->status=2;
						if ($model->store($object,"paiche_charges")){
						}else{
							$re=false;
						}
		  			}
				}
		  	}
		  	//条款约定
		  	$arr_item=Request::getVar('Iid','post');//约定条款
		  	$arr_del=Request::getVar('DVid','post');//删除标记
		  	$arr_result=Request::getVar('result','post');
			if ($arr_item){
			  	for($i=0;$i<count($arr_item);$i++){
			  		$iid=$arr_item[$i];		  		
		  			if ($arr_del[$i]==0){//没删除
			  			$object = new Object();
			    		$object->paiche_id = $rec_id;
				        $object->item_id = $iid;
				        $object->conv_result = $arr_result[$i];
						if ($model->store($object,"paiche_items")){							
						}else{
							$re=false;
						}
		  			}
				}
			}
			
		  	if ($paiche_busitype==3){//调车公司用我们的车

				$object1 = new Object();
				$object1->shuntPaicheId = $rec_id;
				$object1->shuntCom = $paiche_brother;
				$object1->shunt_driver = "";
				$object1->shunt_driverPhone = "";
				$object1->shunt_rent = -1*$paiche_rent;//本公司报价（调车公司支付给我们)
				$object1->shunt_rented = -1*$paiche_brother_rent;//本公司收现
				$object1->shunt_type=1;//调车公司用我们的车
				$object1->shunt_balance = "是";
				$object1->shunt_specialRemarks = "";
				$object1->shuntDispatchMan = "";
				$object1->shunt_times=time();
				$object1->shunt_end=1;
				if ($model->store($object1,"shunt")){
				}else{
					$re=false;
				}
		  	}
			if($paiche_shunt==0 && !empty($paicheDriver)){//生成出车记录
				$object2 = new Object();
				$object2->drivePaicheId = $rec_id;
				$object2->drive_date = strtotime(date("Y-m-d",strtotime($startdate)));
				$object2->driveDriver = $paicheDriver;
				$object2->drive_startTime = strtotime($startdate);
				$object2->drive_startKilo = Request::getVar('settle_startKm','post');
				$object2->drive_endKilo = Request::getVar('settle_endKm','post');
				$object2->drive_endTime = strtotime(Request::getVar('p_endDate','post'));
				$object2->drive_end=1;
				if ($model->store($object2,"paiche_drive")){
				}else{
					$re=false;
				}
			}
			if($paiche_shunt==1){//外调车记录
				$object3 = new Object();
				$object3->shuntPaicheId = $rec_id;
				$object3->shuntCom = Request::getVar('shuntCom2','post');
				$object3->shunt_driver = Request::getVar('shunt_driver','post');
				$object3->shunt_driverPhone = Request::getVar('shunt_driverPhone','post');
				$object3->shunt_rent = Request::getVar('shunt_rent','post');//调车公司报价
				$shunt_rented=Request::getVar('shunt_rented','post');
				$object3->shunt_rented = empty($shunt_rented)?0:$shunt_rented;//调车公司收现
				$object3->shunt_type=0;//我们用调车公司的车
				$object3->shunt_specialRemarks = Request::getVar('shunt_specialRemarks','post');
				$object3->shuntDispatchMan = $empname;
				$object3->shunt_times=time();
				$object3->shunt_end=1;
				if ($model->store($object3,"shunt")){
				}else{
					$re=false;
				}
			}
		  	
			Components::save_admin_log("补录了".$model->getPageTitle($busi_id).",合同号：".$contractNum);
			$this->redirect($forward,"添加成功");
		}
		else
		{
			$this->redirect($forward,"添加失败");
		}
	}
	function modify()
	{
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("list",dirname( __FILE__ ));
		$busiInfo = $model->getBusinessInfo($uid);
		$busiInfo['paiche_busitype']=1;//默认临时客户
		$busi_id =$busiInfo['paiche_type'];
		
		$charge_list=$model->getChargeList($uid," AND (a.`charge_id`=1 OR a.`charge_id`=2)");
		if ($charge_list){
			$paiche_rent1=$paiche_rent2=$paiche_rent3=0;
			foreach($charge_list as $key=>$val)
	        {
	        	if ($val['charge_name']=="租金"){
	        		$paiche_rent1+=$val["conv_money"];
	        	}
	        	if ($val['charge_name']=="押金"){
	        		$paiche_rent2+=$val["conv_money"];
	        		$paiche_rent3+=$val["back_money"];
	        	}
	        }
	        
        }
		
		$object = new stdClass();
		$object->list = $busiInfo;
		$object->task = "update";
        $object->busitype = $busi_id;
        $object->paiche_rent = $paiche_rent1;
        $object->paiche_deposit = $paiche_rent2;
        $object->paiche_deposit_back = $paiche_rent3;
        $date_array = array();
		for($day=1; $day<=23; $day++){
			$date_array[$day]['hour']=$day;
		}
        $object->hourlist = $date_array;
		$date_array = array();
		for($day=1; $day<=11; $day++){
			$date_array[$day]['minute']=$day*5;
		}
		$object->minuelist = $date_array;
		
        $object->clientlist=$model->getListBySql("SELECT `client_id`,`client_name`,`client_Mlinker`,`client_Mphone` FROM `client` WHERE client_recycle!=1");
        
        $view  = $this->createView("operator/business/supplement.html");
		$view->assign($object);
		$view->display();
	}
	function update()
	{
		$uid = Request::getVar('uid','post');
		$forward = "detail.php?uid={$uid}";
		$model = $this->createModel("list",dirname( __FILE__ ));
		$busi_id = Request::getVar('b_id','post');
		$delflag = Request::getVar('delflag','post');
		echo $delflag;
		
		if ($delflag==1){
			if ($model->delete($uid)){
				Components::save_admin_log("删除了ID为".$uid."的补单合同");
				$this->redirect($forward,"删除成功");
			}else{
				$this->redirect($forward,"删除失败!");
			}
		}else{
			$object = new stdClass();
			$object->paiche_id = $uid;
			$object->paiche_linker=Request::getVar('paiche_linker','post');
		  	$object->paiche_linkerPhone=Request::getVar('paiche_linkerPhone','post');
		  	if ($busi_id==1 || $busi_id==3){
		  	$object->paiche_linkerNum=Request::getVar('paiche_linkerNum','post');
		  	$object->paiche_linkerAdd=Request::getVar('paiche_linkerAdd','post');
		  	$object->paiche_promier=Request::getVar('paiche_promier','post');
		  	$object->paiche_promierPhone=Request::getVar('paiche_promierPhone','post');
		  	$object->paiche_promierNum=Request::getVar('paiche_promierNum','post');	  	
		  	}
		  	
		  	$object->paiche_startDate=strtotime(Request::getVar('p_startDate','post'));
		  	$object->paiche_endDate=strtotime(Request::getVar('p_endDate','post'));
		  	if ($model->update($object,'paiche_id')){
		  		Components::save_admin_log("修改了补单,合同号：".Request::getVar('paiche_contractNum','post'));
		  		$this->redirect($forward,"修改成功!");
		  	}else{
		  		$this->redirect($forward,"修改失败!");
		  	}
		}
		
	}
}
?>