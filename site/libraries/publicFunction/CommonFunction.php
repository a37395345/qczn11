<?php
import('publicFunction.CommonModel');
import('model.Xinxi');
import('model.Emp');
/*
	经常用的方法的集合
*/

class CommonFunction{
	//根据派车单ID查询派车单
	function getPaiche($uid){
		$sql="select * from paiche where paiche_id={$uid}";
		$modela=new CommonModel();
		$list=$modela->getListBySql($sql);
		return $list[0];
	}
	//根据派车单ID查询派车单附表
	function getSettle($uid){
		$sql="select * from settle where settlePaicheId='{$uid}'";
		$modela=new CommonModel();
		$list=$modela->getListBySql($sql);
		return $list[0];
	}
	//根据派车单ID找到车辆
	function getCar($car_id){
		$list=null;
		$sql="select * from car where car_id={$car_id}";
		$modela=new CommonModel();
		$list=$modela->getListBySql($sql);
		return $list[0];
	}
	//根据ID查询长期用户
	function getClient($client_id){
		$list=null;
		$sql="select * from client where client_id={$client_id}";
		$modela=new CommonModel();
		$list=$modela->getListBySql($sql);
		return $list[0];
	}
	//根据派车单查询调车信息
	function getShunt($shuntPaicheId){
		$list=null;
		$sql="select * from shunt where shuntPaicheId={$shuntPaicheId}";
		$modela=new CommonModel();
		$list=$modela->getListBySql($sql);
		return $list[0];
	}
	//根据ID查询车队信息
	function getBrothers($bro_id){
		$list=null;
		$sql="select * from brothers where bro_id={$bro_id}";
		$modela=new CommonModel();
		$list=$modela->getListBySql($sql);
		return $list[0];
	}
	function getbrotherslist(){
		$list=null;
		$sql="select bro_id,bro_name from brothers";
		$modela=new CommonModel();
		$list=$modela->getListBySql($sql);
		return $list;
	}
	//
	function getSumPaiche_charges($paiche_id){
		$list=null;
		$sql="SELECT SUM(a.conv_money) AS total_conv_money,SUM(a.have_in_money) AS total_in_money FROM `paiche_charges` AS a INNER JOIN `charges` AS b ON a.`charge_id`=b.`charge_id` WHERE b.`charge_isback`=0 and paiche_id={$paiche_id}";
		$modela=new CommonModel();
		$list=$modela->getListBySql($sql);
		return $list[0];
	}
	//
	function getSumHave_in_money($paiche_id){
		$list=null;
		$sql="SELECT SUM(have_in_money) AS total_in_money2 FROM `paiche_items` where paiche_id={$paiche_id}";

		$modela=new CommonModel();
		$list=$modela->getListBySql($sql);
		return $list[0]['total_in_money2'];
	}
	//
	function getTotal_month_money($monthPaicheId){
		$list=null;
		$sql="SELECT monthPaicheId,SUM(settle_infact-settle_billFavor) AS total_month_money FROM `paiche_month` where monthPaicheId={$monthPaicheId} GROUP by monthPaicheId ";

		$modela=new CommonModel();
		$list=$modela->getListBySql($sql);
		return $list[0]['total_month_money'];

	}
	//合并派车主表和附表
	function sumPaiche($uid,$single=0){
		$paiche=$this->getPaiche($uid);
		$settle=$this->getSettle($uid);
		if(!empty($paiche)&&!empty($settle)){
			$sum_paiche=array_merge($paiche,$settle);
		}
		
		//业务员名称
		$sum_paiche['yewuyuan']=$this->getEmpname($sum_paiche['paicheCounterMan']);
		//业务员电话
		$sum_paiche['yewuyuan_phone']=$this->getEmpPhone($sum_paiche['paicheCounterMan']);
		//司机
		$sum_paiche['siji']=$this->getEmpname($sum_paiche['paicheDriver']);
		//司机电话
		$sum_paiche['emp_phone']=$this->getEmpPhone($sum_paiche['paicheDriver']);
		//车辆信息
		
		if(!empty($sum_paiche['paicheCar'])){
			$car=$this->getCar($sum_paiche['paicheCar']);
			//将车辆信息合并
			$sum_paiche=array_merge($sum_paiche,$car);
		}
		
		//确认的车辆车牌号码
		$sum_paiche['car_num2']=$this->getCar($sum_paiche['paicheCar2']);
		$sum_paiche['car_num2']=$sum_paiche['car_num2']['car_num'];
		//客户信息
		if(!empty($sum_paiche['paicheCom'])){
			$client=$this->getClient($sum_paiche['paicheCom']);
			$sum_paiche=array_merge($sum_paiche,$client);

		}
		//调车信息


		$shout=$this->getShunt($sum_paiche['paiche_id']);
		$sum_paiche['shunt_endcode']=$shout['shunt_endcode'];
		if(!empty($shout)){
			$sum_paiche=array_merge($sum_paiche,$shout);
		}
		
		//车队信息
		$sum_paiche['bro_name']=$this->getBrothers($sum_paiche['paiche_brother']);
		$sum_paiche['bro_name']=$sum_paiche['bro_name']['bro_name'];
		$sum_paiche['bro_id']=$this->getBrothers($sum_paiche['paiche_brother']);
		$sum_paiche['bro_id']=$sum_paiche['bro_id']['bro_id'];
		//所属门店
		$sum_paiche['shop_name']=$this->getShop($sum_paiche['paiche_shopid']);
		//接待员
		$sum_paiche['jiedaiyuan']=$this->getEmpname($sum_paiche['paicheServerMan']);

		$SumPaiche_charges=$this->getSumPaiche_charges($sum_paiche['paiche_id']);
		$sum_paiche['total_conv_money']=$SumPaiche_charges['total_conv_money'];
		$sum_paiche['total_in_money']=$SumPaiche_charges['total_in_money'];
		$sum_paiche['total_in_money2']=$this->getSumHave_in_money($sum_paiche['paiche_id']);
		$sum_paiche['total_month_money']=$this->getTotal_month_money($sum_paiche['paiche_id']);

		if ($sum_paiche['paiche_startDate']>0){
			$sum_paiche['paiche_startHour']=date("H",$sum_paiche['paiche_startDate']);
			$sum_paiche['paiche_startMinute']=date("i",$sum_paiche['paiche_startDate']);
			$sum_paiche['paiche_startDate_format']=date("Y-m-d",$sum_paiche['paiche_startDate']);
			$sum_paiche['paiche_startDate_All']=date("Y-m-d H:i:s",$sum_paiche['paiche_startDate']);
		}
		if ($sum_paiche['paiche_endDate']>0){
			$sum_paiche['paiche_endHour']=date("H",$sum_paiche['paiche_endDate']);
			$sum_paiche['paiche_endMinute']=date("i",$sum_paiche['paiche_endDate']);
			$sum_paiche['paiche_endDate_format']=date("Y-m-d",$sum_paiche['paiche_endDate']);
			$sum_paiche['paiche_endDate_All']=date("Y-m-d H:i:s",$sum_paiche['paiche_endDate']);
		}
		if ($sum_paiche['paiche_startDate']>0 && $sum_paiche['paiche_endDate']>0){
			$sum_paiche['paiche_day']=round(($sum_paiche['paiche_endDate']-$sum_paiche['paiche_startDate'])/86400);
		}else{
			$sum_paiche['paiche_day']=0;
		}
		if ($sum_paiche['paiche_checkTimes']>0){
			$sum_paiche['paiche_checkTimes']=date("Y-m-d H:i:s",$sum_paiche['paiche_checkTimes']);
		}

		$sum_paiche['settle_endDate']=$sum_paiche['settle_endDate']>0? date("Y-m-d H:i:s",$sum_paiche['settle_endDate']):'';
		//调车情况
		if ($sum_paiche['paiche_shunt']==1 || $sum_paiche['paiche_brother']>0){//调车情况
				$sum_paiche['paiche_shuntline']=$this->getShuntLine($sum_paiche['paiche_id']);
			}

		$aa=0;
		
		$sum_paiche['paiche_income']=$aa;
		//光宝用车
		if ($sum_paiche['paiche_type']==2 && ($sum_paiche['paicheCom']==11 || $sum_paiche['paicheCom']==12)){
			//$sum_paiche['paiche_clientprice']=$this->getEmpList("*"," AND `client_id` like '%".$sum_paiche['paicheCom']."%'","client_price");
		}
		$linkerPhone_hid=$sum_paiche['paiche_linkerPhone'];
		$linker_hid=$sum_paiche['paiche_linker'];
		$linkerNum_hid=$sum_paiche['paiche_linkerNum'];
		$sum_paiche['paiche_linkerPhone_hid']=$linkerPhone_hid;
		$sum_paiche['paiche_linker_hid']=$linker_hid;
		$sum_paiche['paiche_linkerNum_hid']=$linkerNum_hid;
				
		if ($sum_paiche['paiche_status']==0){//预约未开始
			$sum_paiche['paiche_linkerPhone_hid']=$sum_paiche['paiche_linkerPhone'];
			$sum_paiche['paiche_linker_hid']=$sum_paiche['paiche_linker'];
			$sum_paiche['paiche_linkerNum_hid']=$sum_paiche['paiche_linkerNum'];
		}else{//已经运行
			if ($sum_paiche['paiche_type']==1 || $sum_paiche['paiche_type']==2){//临时
				if ($sum_paiche['settle_totalKm']==0){//未还车
					$sum_paiche['paiche_linkerPhone_hid']=$sum_paiche['paiche_linkerPhone'];
					$sum_paiche['paiche_linker_hid']=$sum_paiche['paiche_linker'];
					$sum_paiche['paiche_linkerNum_hid']=$sum_paiche['paiche_linkerNum'];
				}
			}else{//长期
				if ($sum_paiche['settle_losses']==1){//挂账
				}else if ($sum_paiche['settle_losses']==2){//已结账
				}else{//未还车
					$sum_paiche['paiche_linkerPhone_hid']=$sum_paiche['paiche_linkerPhone'];
					$sum_paiche['paiche_linker_hid']=$sum_paiche['paiche_linker'];
					$sum_paiche['paiche_linkerNum_hid']=$sum_paiche['paiche_linkerNum'];
				}
			}
		}
		if ($_SESSION['shopid']!=$sum_paiche['paiche_shopid']){
			$sum_paiche['paiche_linkerPhone_hid']=$linkerPhone_hid;
			$sum_paiche['paiche_linker_hid']=$linker_hid;
			$sum_paiche['paiche_linkerNum_hid']=$linkerNum_hid;					
		}

		if (strstr($_SESSION['a_permissions'],'searchphonecode')){
			$sum_paiche['paiche_linkerPhone_hid']=$sum_paiche['paiche_linkerPhone'];
			$sum_paiche['paiche_linker_hid']=$sum_paiche['paiche_linker'];
			$sum_paiche['paiche_linkerNum_hid']=$sum_paiche['paiche_linkerNum'];
		}
		









		//print_r(strstr($_SESSION['a_permissions'],'searchphonecode'));exit;
		
		
		
		
		
		return $sum_paiche;
		
		
	}
	function getShuntLine($pid){
		$list = null;
		$sql = "SELECT a.*,b.`bro_name` FROM `shunt` AS a INNER JOIN `brothers` AS b ON a.`shuntCom`=b.`bro_id`  WHERE a.shuntPaicheId={$pid}";
		$modela=new CommonModel();
		$list=$modela->getListBySql($sql);
		//print_r($list);exit;
		return $list[0];
	}
	

	//根据人员ID查询电话号码
	function getEmpPhone($emp_id){
		$list=null;
		$sql="select emp_phone from emp where emp_id={$emp_id}";
		$modela=new CommonModel();
		$list=$modela->getListBySql($sql);
		return $list[0]['emp_phone'];
	}
	//根据门店ID查询门店名称
	function getShop($shop_id){
		$list=null;
		$sql="select shop_name from shop where shop_id={$shop_id}";
		$modela=new CommonModel();
		$list=$modela->getListBySql($sql);
		return $list[0]['shop_name'];
	}
	//根据单号查询派车单的ID
	function getPaicheId($num){
		$modela=new CommonModel();
		$sql="select paiche_id from paiche where paiche_contractNum={$num}";
		$list=$modela->getListBySql($sql);
		return $list[0]['paiche_id'];
	}

	//根据派车单ID获取收费项目
	function getChargeList($uid){
		$list=null;
		$sql="select * from paiche_charges where paiche_id={$uid}";
		$modela=new CommonModel();
		$list = $modela->getListBySql($sql);
		for($i=0;$i<count($list);$i++){
			//开始时间格式转换
			if($list[$i]['continuerent_start']>0){
				$list[$i]['continuerent_start']=date("Y-m-d H:i",$list[$i]['continuerent_start']);
			}else{
				$list[$i]['continuerent_start']='';
			}
			//结束时间格式转换
			if($list[$i]['continuerent_end']>0){
				$list[$i]['continuerent_end']=date("Y-m-d H:i",$list[$i]['continuerent_end']);
			}else{
				$list[$i]['continuerent_end']='';
			}
			$list[$i]['charge_name']=$this->getChargesName($list[$i]['charge_id']);
			$list[$i]['paiche_contractNum']=$this->getChargesName($list[$i]['paiche_id']);
		}
		return $list;
	}
	//根据收费项目ID去查询收费收费项目名称
	function getChargesName($charge_id){
		$list=null;
		$sql="select charge_name from charges where charge_id={$charge_id}";
		$modela=new CommonModel();
		$list = $modela->getListBySql($sql);
		return $list[0]['charge_name'];
	}
	//根据派车单ID查询派车单号
	function getPaiche_contractNum($paiche_id){
		$list=null;
		$sql="select paiche_contractNum from paiche where paiche_id={$paiche_id}";
		$modela=new CommonModel();
		$list = $modela->getListBySql($sql);
		return $list[0]['paiche_contractNum'];
	}
	//根据派车单ID查询报销记录
	function getBaoxiao($uid){
		$list=null;
		$sql="select * from baoxiao where baoxiao_recycle!=1 AND baoxiao_item=1 AND baoxiaoPaicheId={$uid}";
		$modela=new CommonModel();
		$list = $modela->getListBySql($sql);
		//时间格式转换
		for($i=0;$i<count($list);$i++){
			if($list[$i]['baoxiao_date']>0){
				$list[$i]['baoxiao_date']=date("Y-m-d",$list[$i]['baoxiao_date']);
			}
			if($list[$i]['baoxiao_isAgreeTime']>0){
				$list[$i]['baoxiao_isAgreeTime']=date("Y-m-d",$list[$i]['baoxiao_isAgreeTime']);
			}
			//查询报销人名字
			$list[$i]['emp_name']=$this->getEmpname($list[$i]['baoxiao_emp']);
			
		}
		return $list;
	}
	//根据姓名ID查询姓名
	function getEmpname($emp_id){

		$list=null;
		$sql="select emp_name from emp where emp_id={$emp_id}";
		$modela=new CommonModel();
		$list = $modela->getListBySql($sql);

		return $list[0]['emp_name'];
	}
	//根据派车单的ID查询租赁金额
	function getitemslist(){
		$list=null;
		$sql="select item_id,item_name from items";
		$modela=new CommonModel();
		$list = $modela->getListBySql($sql);
		return $list;
	}
	function getPaiche_items($uid){
		$list=null;
		$sql="select id,item_id,conv_result,conv_money,have_in_money from paiche_items where paiche_id={$uid}";
		$modela=new CommonModel();
		$list = $modela->getListBySql($sql);
		for($i=0;$i<count($list);$i++){
			$items=$this->getItems($list[$i]['item_id']);
			$list[$i]['item_name']=$items['item_name'];
			$list[$i]['item_costname']=$items['item_costname'];
		}
		return $list;
	}

	//根据费用ID查询费用
	function getItems($item_id){
		
		$list=null;
		$sql="select item_name,item_costname from items where item_id={$item_id}";
		$modela=new CommonModel();
		$list = $modela->getListBySql($sql);

		return $list[0];

	}
	
	


	//根据派车单ID查询改变行程记录
	function getChangeroute($uid){
		$sql="Select * From `changeroute` Where changeroutePaicheId={$uid}";
		$list=null;
		$modela=new CommonModel();
		$list = $modela->getListBySql($sql);
		for($i=0;$i<count($list);$i++){
			$list[$i]['changeroute_times']=date("Y-m-d H:i:s",$list[$i]['changeroute_times']);
			
		}
		return $list;
	}


	function getListBySql($sql){
		$modela=new CommonModel();
		$account_list = $modela->getListBySql($sql);
		for($i=0;$i<count($account_list);$i++){
			$account_list[$i]['add_time']=date("Y-m-d H:i:s",$account_list[$i]['add_time']);
		}
		

		return $account_list;
	}

	function getEmpList($fields,$where,$table,$leftjoin="",$order=""){
		$modela=new CommonModel();
		$continue_list = $modela->getEmpList($fields,$where,$table,$leftjoin,$order);
		return $continue_list;
	}


	//根据派车单ID获取换车记录
	function getChangecar($uid){
		$list=null;
		$sql="select * from changecar where changecarPaicheId={$uid}";
		$modela=new CommonModel();
		$list = $modela->getListBySql($sql);
		for($i=0;$i<count($list);$i++){
			
			$list[$i]['changecar_times_all']=date("Y-m-d",$list[$i]['changecar_times']);
			$list[$i]['changecar_times']=date("Y-m-d",$list[$i]['changecar_times']);
			
			//查询车牌号码
			$list[$i]['carA']=$this->getCarNum($list[$i]['changecar_carA']);
			$list[$i]['carB']=$this->getCarNum($list[$i]['changecar_carB']);
			
			
		}
		return $list;
	}
	
	//根据车子ID，查询车牌号码
	function getCarNum($car_id){
		$list=null;
		$sql="select car_num from car where car_id={$car_id}";
		$modela=new CommonModel();
		$list = $modela->getListBySql($sql);
		return $list[0]['car_num'];
	}

	
	//根据派车单ID查询违章记录
	function getBreakrules($uid){
		$list=null;
		$sql="select * from breakrules where breakrulesPaicheId={$uid} ORDER BY breakrules_date";
		$modela=new CommonModel();
		$list = $modela->getListBySql($sql);
		for($i=0;$i<count($list);$i++){
			$list[$i]['car_num']=$this->getCarNum($list[$i]['breakrules_CarId']);
			$list[$i]['breakrules_enda']=($list[$i]['breakrules_end']==0?"未处理":"已处理");
			$list[$i]['breakrules_times']=date("Y-m-d H:i:s",$list[$i]['breakrules_times']);
			$list[$i]['breakrules_endtimes']=date("Y-m-d H:i:s",$list[$i]['breakrules_endtimes']);
			$list[$i]['breakrules_date']=date("Y-m-d H:i:s",$list[$i]['breakrules_date']);

		}
		return $list;

	}

	
	//根据派车方式ID查询派车方式名称
	function getItem($busi_id){
		$list=array();
		$sql="select item_name from item WHERE item_paicheType ={$busi_id}";
		$modela=new CommonModel();
		$list = $modela->getListBySql($sql);
		return $list[0]['item_name'];
	}

	//根据派车单ID查询续租记录
	function getContinuerent($uid){
		$list=null;
		$sql="select * from continuerent where continuerentPaicheId={$uid}";
		$modela=new CommonModel();
		$list=$modela->getListBySql($sql);
		//将时间戳转换为时间格式
		for($i=0;$i<count($list);$i++){
			$list[$i]['continuerent_times']=date("Y-m-d H:i",$list[$i]['continuerent_times']);
			if($list[$i]['continuerent_start']>0){
				$list[$i]['continuerent_start']=date("Y-m-d H:i",$list[$i]['continuerent_start']);
			}else{
				$list[$i]['continuerent_start']="-";
			}
			if($list[$i]['continuerent_end']>0){
				$list[$i]['continuerent_end']=date("Y-m-d H:i",$list[$i]['continuerent_end']);
			}else{
				$list[$i]['continuerent_end']="-";
			}

			
		}
		return $list;
	}
	function getchargeslist(){
		$list=array();
		$sql="select charge_name,charge_id from charges";
		$modela=new CommonModel();
		$list = $modela->getListBySql($sql);
		return $list;
	}



	//出车记录
	function getPaiche_drive($uid){
		$list=array();
		$sql="select * from paiche_drive WHERE drivePaicheId={$uid}";
		$modela=new CommonModel();
		$list = $modela->getListBySql($sql);
		for($i=0;$i<count($list);$i++){
			$list[$i]['emp_name']=$this->getEmpname($list[$i]['driveDriver']);
			$list[$i]['drive_date']=date("Y-m-d H:i",$list[$i]['drive_date']);
			$list[$i]['drive_startTime']=date("Y-m-d H:i",$list[$i]['drive_startTime']);
			$list[$i]['drive_endTime']=date("Y-m-d H:i",$list[$i]['drive_endTime']);
			
		}
		return $list;
	}
	//修改方法
	function update($table,$name,$uid,$val){
		$modela=new CommonModel();
		$id="paiche_id";
		if($table=="paiche"){
			$id="paiche_id";
		}else if($table=="settle"){
			$id='settlePaicheId';
		}else if($table=='changeroute'){
			$id='changeroute_id';

		}else if($table=='paiche_items'){
			$id='id';

		}else if($table=='paiche_charges'){
			$id='id';
		}
		else if($table=='account_log'){
			$id='id';

		}else if($table=='continuerent'){
			$id='continuerent_id';

		}else if($table=='baoxiao'){
			$id='baoxiao_id';

		}
		else if($table=='changecar'){
			$id='changecar_id';

		}else if($table=='changeroute'){
			$id='changeroute_id';

		}else if($table=='breakrules'){
			$id='breakrules_id';

		}else if($table=='paiche_month'){
			$id='month_id';

		}else if($table=='paiche_drive'){
			$id='drive_id';

		}else if($table=='shunt'){
			$id='shunt_id';

		}

		
		$sql="UPDATE {$table} SET {$name} = '{$val}' WHERE {$id} = {$uid} ";
		
		$req=$modela->update($sql);
		return $req;
	}


	//获取emp
	function getEmp(){
		$list=array();
		$modela=new CommonModel();
		$sql="select emp_id,emp_name from emp";
		$list=$modela->getListBySql($sql);
		return $list;
	}
	function getpaymentslist(){
		$list=array();
		$sql="select payment_name,payment_id from payments";
		$modela=new CommonModel();
		$list = $modela->getListBySql($sql);
		return $list;
	}
	function getbankslist(){
		$list=array();
		$sql="select bank_name,bank_id from banks";
		$modela=new CommonModel();
		$list = $modela->getListBySql($sql);
		return $list;
	}
	function getcarlist(){
		$list=array();
		$sql="select car_id,car_num from car";
		$modela=new CommonModel();
		$list = $modela->getListBySql($sql);
		return $list;
	}
	function getpaiche_a($num){
		$list=array();
		$sql="select * from paiche where paiche_contractNum = ".$num;
		$modela=new CommonModel();
		$list = $modela->getListBySql($sql);
		return $list[0];
	}
	//长期单位
	function getclientlist(){
		$list=array();
		$sql="select client_id,client_name from client";
		$modela=new CommonModel();
		$list = $modela->getListBySql($sql);
		return $list;
	}

	function delete($table,$uid){
		
		$sql=array();
		$modela=new CommonModel();
		if($table=="paiche"){
			$sql[]="DELETE FROM paiche WHERE paiche_id = ".$uid;//派车主表
			$sql[]="DELETE FROM settle WHERE settlePaicheId = ".$uid;//派车附表
			$sql[]="DELETE FROM paiche_charges WHERE paiche_id = ".$uid;//费用表		
		}
		$index=0;
		for($i=0;$i<count($sql);$i++){
			$req_a= $modela->delete($sql[$i]);
			if(!empty($req_a)){
				$index=$index+1;
			}

		}
		
		if($index==count($sql)){
			return 1;
		}else{
			return 0;
		}
		
	}
	//根据单号查询其他收入
	function getShouru($num){
		$list=array();
		$sql="select a.id as aid,a.add_time,a.name,a.money,a.change_code,a.payments_to_id,bank_to_id,a.change_class,a.shop_id,b.id as bid,b.client_id from account_change_log as a left join account_log as b on a.id=b.bill_id where b.bill_type='3' and a.change_code= ".$num;
		$modela=new CommonModel();
		$list = $modela->getListBySql($sql);
		return $list[0];
	}
	//获取部门
	function getshoplist(){
		$list=array();
		$sql="select shop_id,shop_name from shop order by shop_order asc";
		
		$modela=new CommonModel();
		$list = $modela->getListBySql($sql);
		return $list;
	}
	//删除方法（数据，ID名称，表名，sql语句）
	function update_a($data,$id,$table='',$sql=''){
		$modela=new CommonModel();
		$req = $modela->update_a($data,$id,$table,$sql);
		return $req;
	}
	//删除其他收入
	function delete_shouru($aid,$bid){
		$modela=new CommonModel();
		$sql="DELETE FROM account_change_log WHERE id = ".$aid;
		$sql1="DELETE FROM account_log WHERE id = ".$bid;
		$req=$modela->delete($sql);
		$req1=$modela->delete($sql1);
		if(!empty($req)&&!empty($req1)){
			return 1;
		}else{
			return 0;
		}
	}
	//根据单号查询报销单
	function getBaoxiao_a($num){
		$list=array();
		$sql="select * from baoxiao  where baoxiao_code=".$num;
		
		$modela=new CommonModel();
		$list = $modela->getListBySql($sql);
		return $list[0];
	}

	function getemplist_a(){
		$list=array();
		$sql="select emp_id,emp_name from emp ";
		
		$modela=new CommonModel();
		$list = $modela->getListBySql($sql);
		return $list;
	}
	function getbaoxiaotypelist(){
		$list=array();
		$sql="select typeid,typename from baoxiao_type ";
		$modela=new CommonModel();
		$list = $modela->getListBySql($sql);
		return $list;
	}
	function dalete_baoxiao($baoxiao_id){
		$modela=new CommonModel();
		$sql="DELETE FROM baoxiao WHERE baoxiao_id = ".$baoxiao_id;
		$req=$modela->delete($sql);
		return $req;
		
	}


   

	//发送系统信息的方法
	function fasong_xinxi($uid_list,$text){
		$modela=new CommonModel();
		$object = new stdClass();
		$fasong_id=$_SESSION['a_uid'];//发送信息人的empid
		$addtime=time();//发送的时间
		$type=0;//信息的状态
		$object->fasong_id=$fasong_id;
		$object->addtime=$addtime;
		$object->type=$type;
		$object->statur=0;
		$object->text=$text;
		$index=0;
		for($i=0;$i<count($uid_list);$i++){
			$jieshou_id=$uid_list[$i];//接受人员的empid
			$object->jieshou_id=$jieshou_id;
			$req=$modela->instert($object,'xinxi');
			if(!empty($req)){
				$index=$index+1;
			}
		}
		if($index==count($uid_list)){
			return 1;
		}else{
			return 0;
		}

	}

	//获取第一条信息的类容
	function get_xinxi_a(){
		$req=null;
		$modela=new CommonModel();
		$jieshou_id=$_SESSION['a_uid'];
		$sql="select text FROM xinxi WHERE statur=0 and type=0 and jieshou_id = ".$jieshou_id." order by addtime desc";
		$req=$modela->getListBySql($sql);
		return $req[0]['text'];

	}
	//获取状态为0，未读取的信息
	function get_xinxi(){
		$list=null;
		$modela=new CommonModel();
		$jieshou_id=$_SESSION['a_uid'];
		$sql="select count(*) as num FROM xinxi WHERE statur=0 and type=0 and jieshou_id = ".$jieshou_id;
		$req=$modela->getListBySql($sql);
		$list['num']=$req[0]['num'];
		$list['text']=$this->get_xinxi_a();
		return $list;

	}

	function delete_xinxi($id){
		$req=null;
		$modela=new CommonModel();
		$sql="update xinxi set statur=1 WHERE id=".$id;
		$req=$modela->update($sql);
		return $req;
	}
	function getUsername($uid){
		$list=array();
		$sql="select username from admin_users where admin_user_id= ".$uid;
		$modela=new CommonModel();
		$list = $modela->getListBySql($sql);
		return $list[0]['username'];
	}
	//根据用户id查询职位id
	function get_zhiweiid($uid){
		$list=array();
		$modela=new CommonModel();
		$sql="select zhiwei_id from admin_users where admin_user_id={$uid}";
		$list=$modela->getListBySql($sql);
		return $list[0]['zhiwei_id'];
	}
	//根据权限名称判断用户是否有权限
	function panduan_rule($name){
		$_SESSION['index_a']=0;
		$req=0;
		if($_SESSION['a_uid']==70){
			$req=1;
		}else{
			$modela=new CommonModel();
			$zhiwei_id=$this->get_zhiweiid($_SESSION['a_uid']);
			$rule_list=$this->getRules($_SESSION['zhiwei_id'],$_SESSION['department_id']);
			$sql="select id from admin_rule where status=0 and name='{$name}'";
			$list=$modela->getListBySql($sql);
			if($list>0){
				$rule_id=$list[0]['id'];
				//print_r($rule_list);exit;
				$index=0;
				for($i=0;$i<count($rule_list);$i++){
					if($rule_list[$i]==$rule_id){
						$index=1;
						break;
					}
				}
				if($index>0){
					$req=1;
				}else{
					$req=0;
				}
			}else{
				$req=0;
			}
			
		}
		return $req;
	}
	//根据职位id查询部门id
	function get_department($uid){
		$list=array();
		$modela=new CommonModel();
		$sql="select department_id from zemp_zhiwei where id={$uid}";
		$list=$modela->getListBySql($sql);
		return $list[0]['department_id'];
	}

	//根据部门id和职位id查询当前权限
	function getRules($zhiwei_id,$department_id){
		//print_r($zhiwei_id);exit;
		$modela=new CommonModel();
		$sql="select rules from zemp_zhiwei where id={$zhiwei_id}";
		$zhiwei_rules=$this->getDataY($sql,"rules");
		$zhiwei_rules=explode(",",$zhiwei_rules);

		$sql1="select rules from department where id={$department_id}";
		$department_rules=$this->getDataY($sql1,"rules");
		$department_rules=explode(",",$department_rules);
		$list=null;
		for($i=0;$i<count($zhiwei_rules);$i++){
			for($j=0;$j<count($department_rules);$j++){
				if($zhiwei_rules[$i]==$department_rules[$j]){
					$list[]=$zhiwei_rules[$i];
				}
			}
		}
		return $list;
	}
	//查询所有菜单,并且是需要权限的
	function biduiRule(){
		$modela=new CommonModel();
		$sql_menu="select * from admin_menu where status=0 order by menu_order";
		$menu_list=$modela->getListBySql($sql_menu);
		$req_list=null;
		for($i=0;$i<count($menu_list);$i++){
			$sql="SELECT id from admin_rule where name='".$menu_list[$i]['action']."'";
			$list=$modela->getListBySql($sql);
			if($list){
				$rule_id=$list[0]['id'];
				$menu_list[$i]['rule_id']=$rule_id;
				$req_list[]=$menu_list[$i];
			}

		}
		return $req_list;
	}
	//验证有权限的菜单
	function yanzhengRule($rules,$menu_list){
		//print_r($menu_list);exit;
		$list=null;
		$rules_list= $rules;
		for($i=0;$i<count($menu_list);$i++){
			if(count($rules_list)>0){
				if(in_array($menu_list[$i]['rule_id'], $rules_list)){
					$list[]=$menu_list[$i];
				}
			}
			
		}
		return $list;
	}
	//无限极排序菜单
	function getMenuXiaji($array,$pId=0){
		$list = array();
		if(count($array)>0){
			foreach($array as $key => $val){
				if(isset($val['parent_menu_id']) && ($val['parent_menu_id'] == $pId)) {
					$tmp = $array[$key];
					unset($array[$key]);
					if(count($this->getMenuXiaji($array,$val['admin_menu_id'])) > 0){
						$tmp['son'] = $this->getMenuXiaji($array,$val['admin_menu_id']);
					}
					$list[] = $tmp;
				}
			}
		}
		
		return $list;
	}

	//获取正常使用的部门并排序
	function getDepartment(){
		$list=array();
		$modela=new CommonModel();
		$sql="select * from department where status=0 order by department_order asc";
		$list=$modela->getListBySql($sql);
		
		$list=$this->paixuDepartment($list,0);
		
		return $list;
	}
	//对部门进行排序
	function paixuDepartment($array,$pId=0){

		$list = array();
		if(count($array)>0){
			foreach($array as $key => $val){
				if(isset($val['pid']) && ($val['pid'] == $pId)) {
					$tmp = $array[$key];
					unset($array[$key]);
					if(count($this->paixuDepartment($array,$val['id'])) > 0){
						$tmp['son'] = $this->paixuDepartment($array,$val['id']);
					}
					$list[] = $tmp;
				}
			}
		}
		
		
		return $list;
	}
	//返回1条数据
	function getData($sql){
		$data=null;
		$modela=new CommonModel();
		$list=$modela->getListBySql($sql);
		return $list[0];
	}
	//返回1条数据中的某一个值
	function getDataY($sql,$name){
		$data=null;
		$modela=new CommonModel();
		$list=$modela->getListBySql($sql);
		if(count($list)>0){
			return $list[0][$name];
			
			
		}
		return $data;
	}
	//返回数据数组
	function getList($sql){
		$data=null;
		$modela=new CommonModel();
		$list=$modela->getListBySql($sql);
		return $list;
	}
	//添加
	function instert($data,$sql_name){
		$modela=new CommonModel();
		if($modela->instert($data,$sql_name)){
			return true;
		}else{
			return false;
		}
		
	} 
	//根据条件删除记录
	function dalete_sql($sql_name,$id_name,$id){
		$modela=new CommonModel();
		$sql="DELETE FROM ".$sql_name." WHERE ".$id_name." = ".$id;
		$req=$modela->delete($sql);
		return $req;
		
	}
	//权限排序
	function getRoleXiaji($array,$pId=0){
		$list = array();
		if(count($array)>0){
			foreach($array as $key => $val){
				if(isset($val['pid']) && ($val['pid'] == $pId)) {
					$tmp = $array[$key];
					unset($array[$key]);
					if(count($this->getRoleXiaji($array,$val['id'])) > 0){
						$tmp['son'] = $this->getRoleXiaji($array,$val['id']);
					}
					$list[] = $tmp;
				}
			}
		}
		
		return $list;
	}
	//检查权限id组
	function getQuanxian($rule_name){
		$uid= $_SESSION['a_uid'];
		if($uid!=70){
			$sql="SELECT id from admin_rule where name='{$rule_name}'";
			$modela=new CommonModel();
			$list=$modela->getListBySql($sql);
			$rule=null;
			if(count($list)<=0){
				print_r("没有为这个操作设置权限！");exit;
			}else{
				$rule=$list[0]['id'];
				$zhiwei_id=$this->get_zhiweiid($uid);
				$rules=$this->getRules($_SESSION['zhiwei_id'],$_SESSION['department_id']);
				if(!in_array($rule,$rules)){
					print_r("没有这个权限！");exit;
				}
			}
		}
	}


	//根据职位id查询职位名称
	function getZhiweiname($zhiwei_id){
		$list=null;
		$modela=new CommonModel();
		$sql="SELECT zhiwei_name from zemp_zhiwei where id={$zhiwei_id}";
		$list=$modela->getListBySql($sql);
		return $list[0]['zhiwei_name'];
	}
	//查询职位
	function getZhiwei(){
		$list=null;
		$modela=new CommonModel();
		$sql="SELECT * from zemp_zhiwei where status=0 order by zhiwei_order asc";
		$list=$modela->getListBySql($sql);
		return $list;
	}
	
	//根据职位id查询部门名称
	function getDepartmentname($department_id){
		$modela=new CommonModel();
		$sql="SELECT name from department where id={$department_id}";
		$name=$this->getDataY($sql,'name');
		return $name;
	}
	//储存系统操作记录
	function setAction($title){
		//print_r($_SESSION['a_uid']);exit;
		$modela=new CommonModel();
		$object = new stdClass();
		$object->title=$_SESSION['truename'].$title;
		$object->admin_user_id=$_SESSION['a_uid'];
		$object->time = date('Y-m-d H:i:s');
		$object->ip=$this->getRealIp();
		$this->instert($object,"admin_users_action");

	}

	//获取ip地址
	function getRealIp(){
		if(isset($_SERVER['REMOTE_ADDR']) && $this->is_ip($_SERVER['REMOTE_ADDR'])) return $_SERVER['REMOTE_ADDR'];
		if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			if(strpos($ip, ',') !== false) {
				$tmp = explode(',', $ip);
				$ip = trim(end($tmp));
			}
			if($this->is_ip($ip)) return $ip;
		}
		//if(!DT_WIN && isset($_SERVER['REMOTE_ADDR']) && $this->is_ip($_SERVER['REMOTE_ADDR'])) return $_SERVER['REMOTE_ADDR'];
		if(isset($_SERVER['HTTP_CLIENT_IP']) && $this->is_ip($_SERVER['HTTP_CLIENT_IP'])) return $_SERVER['HTTP_CLIENT_IP'];
		return 'unknown';
	}
	function is_ip($ip) {
		return preg_match("/^([0-9]{1,3}\.){3}[0-9]{1,3}$/", $ip);
	}

	//根据员工id查询员工图片
	function getEmp_image(){
		$image="";
		$sql="SELECT emp_image from emp where emp_id={$_SESSION['user_id']}";
		$image=$this->getDataY($sql,"emp_image");
		return $image;
	}
	//对所有下级的等级重置
	function setZhiweiDdengji($array,$pId){
		$req=true;
		if(count($array)>0){
			for($i=0;$i<count($array);$i++){
				if($array[$i]['pid']==$pId){
					$sql="select dengji from zemp_zhiwei where id={$pId}";
					$dengji=$this->getDataY($sql,"dengji");
					$object = new stdClass();
					$object->id=$array[$i]['id'];
					$object->dengji=$dengji+1;
					if($this->update_a($object,"id","zemp_zhiwei","")){
						$req=true;
					}else{
						$req=false;
						break;
					}
					$this->setZhiweiDdengji($array,$array[$i]['id']);
				}
			}
		}
		return $req;
		
	}

	//对下级部门的权限重置
	function setDepartmentRule($array,$pId){

		$req=true;
		if(count($array)>0){
			for($i=0;$i<count($array);$i++){
				if($array[$i]['pid']==$pId){
					$sql="select rules from department where id={$pId}";
					$rulesa=$this->getDataY($sql,"rules");
					$rules_lista=explode(",",$rulesa);
					$sql1="select rules from department where id={$array[$i]['id']}";
					$rulesb=$this->getDataY($sql1,"rules");
					$rules_listb=explode(",",$rulesb);

					$department_ruleslist="";
					for($j=0;$j<count($rules_listb);$j++){
						if(in_array($rules_listb[$j], $rules_lista)){
							if(!$department_ruleslist){
								$department_ruleslist.=$rules_listb[$j];
							}else{
								$department_ruleslist.=",".$rules_listb[$j];
							}
						}
					}
					$object = new stdClass();
					$object->id=$array[$i]['id'];
					$object->rules=$department_ruleslist;
					if($this->update_a($object,"id","department","")&&$this->setDepartmentRule($array,$array[$i]['id'])){
						$req=true;
					}else{
						$req=false;
						break;
					}
					$this->setZhiweiDdengji($array,$array[$i]['id']);
				}
			}
		}
		return $req;
		
	}

	function getChargeList_a($pid,$where='',$pids='')
	{
		
		$list = null;
		$sql = "SELECT a.*,b.charge_name,c.paiche_contractNum,d.emp_name FROM `paiche_charges` AS a INNER JOIN `charges` AS b ON a.`charge_id`=b.`charge_id` LEFT JOIN `paiche` AS c ON a.`paiche_id`=c.`paiche_id` left join emp as d on a.addemp=d.emp_id WHERE a.`paiche_id`={$pid} ORDER BY a.`charge_id`,a.id";
		
		$list=$this->getList($sql);
		for($i=0;$i<count($list);$i++){
			$list[$i]["addtime"]=date('Y-m-d H:i:s', $list[$i]["addtime"]);
			if($list[$i]["continuerent_start"]){
				$list[$i]["continuerent_start"]=date('Y-m-d H:i:s', $list[$i]["continuerent_start"]);
			}else{
				$list[$i]["continuerent_start"]=0;
			}
			if($list[$i]["continuerent_end"]){
				$list[$i]["continuerent_end"]=date('Y-m-d H:i:s', $list[$i]["continuerent_end"]);
			}else{
				$list[$i]["continuerent_end"]=0;
			}
			
			
		}
		return $list;
	}
	//对部门中职位的权限重置
	function setZhiweiRule($department_id){
		$req=true;
		$sql="select rules from department where id={$department_id}";
		$rulesa=$this->getDataY($sql,"rules");
		$rules_lista=explode(",",$rulesa);
		$sql="select * from zemp_zhiwei where department_id={$department_id}";
		$zhiwei_list=$this->getList($sql);
		if($zhiwei_list){
			for($i=0;$i<count($zhiwei_list);$i++){
				$rules_listb=explode(",",$zhiwei_list[$i]["rules"]);
				$zgiwei_ruleslist="";
				for($j=0;$j<count($rules_listb);$j++){
					if(in_array($rules_listb[$j], $rules_lista)){
						if(!$zgiwei_ruleslist){
							$zgiwei_ruleslist.=$rules_listb[$j];
						}else{
							$zgiwei_ruleslist.=",".$rules_listb[$j];
						}
					}
				}
				$object = new stdClass();
				$object->rules=$zgiwei_ruleslist;
				$object->id=$zhiwei_list[$i]['id'];
				if($this->update_a($object,"id","zemp_zhiwei","")){
					$req=true;
				}else{
					$req=false;
					break;
				}
				
			}

		}
		
		return $req;
		
	}


    function update_b($sql){
    	$modela=new CommonModel();
    	return $modela->update($sql);
    }

    /**
     * 发送待办事项
     * @param int|array $uid_list 接收人emp_id
     * @param string $text 通知内容
     * @param int $rel_type 关联类型
     * @param int $rel_id 关联类型id
     * @return bool
     */
    static function sendMessage($uid_list, $text, $rel_type, $rel_id){
	    if(!is_array($uid_list)){
	        $uid_list = [$uid_list];
        }

	    foreach ($uid_list as $value){
            $date = [
                'fasong_id' => $_SESSION['user_id'],
                'jieshou_id' => $value,
                'addtime' => time(),
                'text' => $text,
                'type' => Xinxi::TASK,
                'stats' => 0,
                'rel_type' => $rel_type,
                'rel_id' => $rel_id,
            ];
            $result = Xinxi::add($date);
            if($result == false){
                return false;
            }
        }
	    return true;
    }

    /**
     * 二位数组取某一下标
     * @param array $list 数组
     * @param string $element 要取得下标
     * @return array
     */
    static function array_column($list, $element)
    {
        if(!isset($list) || !is_array($list) || empty($list)) {
            return array();
        }
        if(!isset($element) || empty($element)) {
            return array();
        }
        $j = 0;
        $result = array();
        for($i = 0; $i < count($list); $i++) {
            if(isset($list [$i] [$element])) {
                $result [$j] = $list [$i] [$element];
                $j++;
            } else {
                return array();
            }
        }
        return $result;
    }

    /**
     * 发送通知
     * @param int|array $uid_list 接收人emp_id
     * @param string $text 通知内容
     * @param int $rel_type 关联类型
     * @param int $rel_id 关联类型id
     * @return bool
     */
    static function sendTongZhi($uid_list, $text, $rel_type, $rel_id){
        if(!is_array($uid_list)){
            $uid_list = [$uid_list];
        }

        foreach ($uid_list as $value){
            $date = [
                'fasong_id' => $_SESSION['user_id'],
                'jieshou_id' => $value,
                'addtime' => time(),
                'text' => $text,
                'type' => Xinxi::TONGZHI,
                'stats' => 1,
                'rel_type' => $rel_type,
                'rel_id' => $rel_id,
            ];
            $result = Xinxi::add($date);
            if($result == false){
                return false;
            }
        }
        return true;
    }

    /**
     * 获取毫秒级时间戳
     * @return float
     */
    public static function getMicrotime()
    {
        list($s1, $s2) = explode(' ', microtime());
        return (float)sprintf('%.0f', (floatval($s1) + floatval($s2)) * 1000);
    }
    
}