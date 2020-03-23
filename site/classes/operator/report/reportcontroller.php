<?php
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('operator.navi.admincontroller');
import('operator.navi.privilegehelper');
import('imag.fusecookie');


error_reporting(E_ERROR);


class ReportController extends AdminController
{
	var $arr_class = array("61"=>"刷卡费","62"=>"保险理赔及退保","63"=>"税金","64"=>"其他","65"=>"卖车及报废收入","66"=>"备用金归还","67"=>"违章手续费","68"=>"违章扣分费","69"=>"一嗨多收费用");
	
	var $arr_type_action=array("1"=>"zijia_list","2"=>"guangbao","3"=>"changqi_zijia","4"=>"changqi_daijia","5"=>"changqi_dake");
	function __construct($config = array())
	{
		parent::__construct($config);
		
		$this->registerTask( 'accountlist','accountlist');
		$this->registerTask( 'accountdetail','accountdetail');
		$this->registerTask( 'accountchangelist','accountchangelist');
		
		$this->registerTask( 'companylist','companylist');
		$this->registerTask( 'companymodify','companymodify');
		$this->registerTask( 'companyupdate','companyupdate');
		$this->registerTask( 'export','export');
		$this->registerTask( 'outcarlist','outcarlist');
		$this->registerTask( 'exportoutcar','exportoutcar');
		$this->registerTask( 'monthlist','monthlist');
		$this->registerTask( 'monthoutcarlist','monthoutcarlist');
		$this->registerTask( 'carincomelist','carincomelist');
		$this->registerTask( 'incomelist','incomelist');
		$this->registerTask( 'incomedetail','incomedetail');
		$this->registerTask( 'otherdetail','otherdetail');
		$this->registerTask( 'baoxiaolist','baoxiaolist');
		$this->registerTask( 'baoxiaodetail','baoxiaodetail');
		$this->registerTask( 'CounterManlist','CounterManlist');
		$this->registerTask( 'CounterMandetail','CounterMandetail');
		$this->registerTask( 'achievelist','achievelist');
		$this->registerTask( 'achievedetail','achievedetail');
		$this->registerTask( 'fuelconsump','fuelconsump');
		$this->registerTask( 'depositlist','depositlist');
		$this->registerTask( 'marginlist','marginlist');
		$this->registerTask( 'incomelist_a','incomelist_a');
		
	}
	
	
	function display(){
		echo "display";

	}
	

	function accountlist()
	{
		
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$base_url = "list.php";
		$per_page = 100;
		
		$model = $this->createModel("report",dirname( __FILE__ ));
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		$sql="SELECT a.bank_id,b.bank_name,b.bank_no,a.money,b.bank_id as bankid FROM `banks` AS b LEFT JOIN (SELECT `bank_id`,SUM(money) AS money FROM `account_log` GROUP BY `bank_id`) AS a ON a.bank_id=b.bank_id Where b.bank_recycle=0 AND b.bank_id<>17 AND b.bank_id<>6 AND b.bank_id<>8 Order by bank_order";
		$List = $model->getListBySql($start,$per_page, $sql);
		$sql="SELECT COUNT(*) AS total FROM (SELECT `bank_id`,SUM(money) AS money FROM `account_log` Where bank_id<>17 GROUP BY `bank_id`) AS a";
		$total_item = count($List);//$model->getTotal($sql);

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
		$view  = $this->createView("operator/report/accountlist.html");
		
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();		
		$object->list = $List;
		$object->total = $total_item;
		$object->all_money=0;
		$view->assign($object);
		$view->display();
	}
	
	function accountchangelist()
	{
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$base_url = "changelist.php";
		$per_page = 10;
		
		$model = $this->createModel("report",dirname( __FILE__ ));
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		$sql="SELECT a.id,d.payment_name as payment_from_name,b.bank_name AS bank_from_name,e.payment_name as payment_to_name,c.bank_name AS bank_to_name,a.money,a.name,a.add_time,a.input_man,a.change_type FROM `account_change_log` AS a 
			  LEFT JOIN `banks` AS b ON a.bank_from_id=b.bank_id
			  LEFT JOIN `payments` AS d ON a.payments_from_id=d.payment_id
			  LEFT JOIN `banks` AS c ON a.bank_to_id=c.bank_id
			  LEFT JOIN `payments` AS e ON a.payments_to_id=e.payment_id Order by a.add_time Desc";
		$List = $model->getListBySql($start,$per_page, $sql);
		
		$total_item = $model->getTotal("SELECT count(*) AS total FROM `account_change_log`");

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
		$view  = $this->createView("operator/report/accountchangelist.html");
		
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();		
		$object->list = $List;
		$object->total = $total_item;
		$view->assign($object);
		$view->display();
	}
	


	function accountdetail()
	{
		
		//print_r(strtotime("2017-02-08 00:00:00")) ;exit;
        //print_r(strtotime("2017-02-28 23:59:59")) ;exit;
		
		$bid = Request::getVar('bankid','get');
		$op_flag=Request::getVar('op_flag','get');//
		
		$model = $this->createModel("report",dirname( __FILE__ ));
		$object = new stdClass();
		$object->bankid = $bid;
		$object->op_flag = $op_flag;
		
		if ($op_flag=="detail"){
			$sdate=Request::getVar('startdate','get');
			$edate=Request::getVar('enddate','get');
			$startdate=empty($sdate)? strtotime("-7 day"):strtotime($sdate);
			$enddate=empty($edate)? time():strtotime($edate." 23:59:59");
			$name=Request::getVar('name','get');
			//计算此前余额
			$sql="SELECT SUM(a.money) AS total FROM `account_log` AS a LEFT JOIN client AS c ON a.client_id=c.client_id WHERE a.`bank_id`='{$bid}' AND a.`add_time` <'{$startdate}' ".(empty($name)?"":" AND c.client_name like '%{$name}%'");
			$object->beforetotal = $model->getTotal($sql);
			



			$sql_1="SELECT a.`id`,a.`add_time`,a.`name`,a.`money`,b.`paiche_contractNum`,b.paiche_linker,b.paiche_type,c.client_name,g.`item_name`,a.`paiche_id`,d.emp_name,f.client_name as paiche_client_name,e.emp_name AS siji,a.bill_id,a.bill_type,h.baoxiao_code,j.car_num,k.change_code,a.bill_code,m.bro_name ".
				 "FROM `account_log` AS a LEFT JOIN `paiche` AS b ON a.`paiche_id`=b.`paiche_id` LEFT JOIN client AS f ON b.paicheCom=f.client_id LEFT JOIN emp AS e ON b.paicheDriver=e.emp_id LEFT JOIN car AS j ON b.paicheCar=j.car_id ".
				 "LEFT JOIN item AS g ON b.paiche_type=g.item_paicheType ".
				 "LEFT JOIN client AS c ON a.client_id=c.client_id ".
				 "LEFT JOIN emp AS d ON a.user_id=d.emp_id ".
				 "LEFT JOIN baoxiao AS h ON a.bill_id=h.baoxiao_id ".
				 "LEFT JOIN account_change_log AS k ON a.bill_id=k.id ".
				 "LEFT JOIN brothers AS m ON a.brother_id=m.bro_id ".
				 "WHERE a.`money` <>0 AND a.`bank_id`='{$bid}' AND a.`add_time`>='{$startdate}' AND a.`add_time`<='{$enddate}'".(empty($name)?"":" AND (a.name like '%{$name}%' OR c.client_name like '%{$name}%' OR f.client_name like '%{$name}%' OR m.bro_name like '%{$name}%')");

			$sql_2="SELECT 0 as id,add_time,name,money,'' as paiche_contractNum,'' as paiche_linker,'' as paiche_type,'' as client_name,'' as item_name,0 as paiche_id,'' as emp_name,'' as paiche_client_name,'' AS siji,0 as bill_id,99 as bill_type,'' as baoxiao_code,'' as car_num,'' as change_code,'' as bill_code,'' as bro_name ".
				 "FROM banks_daily WHERE bank_id={$bid} AND add_time>={$startdate} AND add_time<={$enddate}";
			
			$sql="Select kk.* From ({$sql_1} Union All {$sql_2}) as kk ORDER BY add_time";

			$object->startdate = date("Y-m-d",$startdate);
			$object->enddate = date("Y-m-d",$enddate);
		}
		if ($op_flag=="daily"){
			$ddate=Request::getVar('date','get');
			$date=empty($ddate)? date("Y-m-d",time()):$ddate;
			$object->date = $date;
			//计算此前余额
			$sql="SELECT SUM(money) AS total FROM `account_log` WHERE `bank_id`='{$bid}' AND FROM_UNIXTIME(`add_time`,'%Y-%m-%d')<'{$date}' ";
			$object->beforetotal = $model->getTotal($sql);
			
			$sql="SELECT a.`id`,a.`add_time`,a.`name`,a.`money`,b.`paiche_contractNum`,b.paiche_linker,b.paiche_type,c.client_name,g.`item_name`,a.`paiche_id`,d.emp_name,f.client_name as paiche_client_name,e.emp_name AS siji,a.bill_id,a.bill_type,h.baoxiao_code,k.change_code,a.bill_code ".
				 "FROM `account_log` AS a LEFT JOIN `paiche` AS b ON a.`paiche_id`=b.`paiche_id` LEFT JOIN client AS f ON b.paicheCom=f.client_id LEFT JOIN emp AS e ON b.paicheDriver=e.emp_id ".
				 "LEFT JOIN item AS g ON b.paiche_type=g.item_paicheType ".
				 "LEFT JOIN client AS c ON a.client_id=c.client_id ".
				 "LEFT JOIN emp AS d ON a.user_id=d.emp_id ".
				 "LEFT JOIN baoxiao AS h ON a.bill_id=h.baoxiao_id ".
				 "LEFT JOIN account_change_log AS k ON a.bill_id=k.id ".
				 "WHERE a.`money` <>0 AND a.`bank_id`='{$bid}' AND FROM_UNIXTIME(a.`add_time`,'%Y-%m-%d')='{$date}' ORDER BY a.`add_time`";
			
			
		}
		
		$List = $model->getListBySql(0,10000, $sql);
		$object->list = $List;
		$object->startdate=date("Y-m-d",$startdate);
		$object->enddate=date("Y-m-d",$enddate);
		
		$view  = $this->createView("operator/report/accountdetail.html");
		$view->assign($object);
		$view->display();
	}
	



	function companylist()
	{
		$sdate=Request::getVar('startdate','get');
		$edate=Request::getVar('enddate','get');
		$companyid=Request::getVar('company','get');
		$search_input=Request::getVar('search_input','get');
		
		$startdate=empty($sdate)? strtotime("-30 day"):strtotime($sdate);
		$enddate=empty($edate)? time():strtotime($edate." 23:59:59");
		
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$per_page = 10;
		$start = ($p-1)*$per_page;
		
		$base_url = "list.php?startdate=".date("Y-m-d",$startdate)."&enddate=".date("Y-m-d",$enddate);
		
		
		$model = $this->createModel("report",dirname( __FILE__ ));		
		$style = new PageStyle();		
		
		$where="a.`paiche_status`>=1 AND a.`paiche_personal`=0 AND a.paiche_type=2 ".
			   " AND a.paiche_startDate>='{$startdate}' AND a.paiche_endDate<='{$enddate}'";
		
		if (!empty($companyid)){
			$base_url.="&company={$companyid}";
			$where.=" AND a.`paicheCom`={$companyid}";
		}
		if ($search_input=="self"){
        	$base_url.="&search_input={$search_input}";
        	$where .=" AND a.paiche_Man='".$_SESSION['truename']."'";
        }
		
		$sql="SELECT a.*,b.settle_startKm,b.settle_endKm,b.settle_waitTime,b.settle_waitTimeMoney,b.settle_overTime,b.settle_overKmMoney,b.settle_overKmMoney_have,b.settle_overTimeMoney,b.settle_overTimeMoney_have,d.emp_name AS siji,e.car_num,e.car_type,f.money ".
			 "FROM `paiche` AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId ".
			 "LEFT JOIN emp AS d ON a.paicheDriver=d.emp_id ".
			 "LEFT JOIN car AS e ON a.paicheCar=e.car_id ".
			 "LEFT JOIN (SELECT x.`paiche_id`,SUM(x.have_in_money) AS money FROM `paiche_charges` AS x INNER JOIN `charges` AS y ON x.`charge_id`=y.`charge_id` WHERE y.`charge_isback`=0 GROUP BY x.`paiche_id`) AS f ON a.paiche_id=f.paiche_id ".
			 "WHERE {$where}";

		$List = $model->getListBySql($start,$per_page, $sql);
		$sql = "SELECT COUNT(*) AS total FROM `paiche` AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId WHERE {$where}";
		$total_item = $model->getTotal($sql);

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
		$view  = $this->createView("operator/report/comuselist.html");
		
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();
		$object->list = $List;
		$object->total = $total_item;
		$object->companyid =$companyid;
		$object->companylist =$model->getListBySql(0,1000, "SELECT `client_id`,`client_name` FROM `client` WHERE `client_recycle`!=1");
		//$object->companyname = $model->getTotal("SELECT `client_name` AS total FROM `client` WHERE `client_id`=".$companyid);
		$object->startdate = date("Y-m-d",$startdate);
		$object->enddate = date("Y-m-d",$enddate);
		$view->assign($object);
		$view->display();
	}
	function companymodify(){
		$pid = Request::getVar('pid','get');
		$sql="SELECT a.*,b.settle_startKm,b.settle_endKm,b.settle_waitTime,b.settle_waitTimeMoney,b.settle_overTime,b.settle_overKmMoney,b.settle_overKmMoney_have,b.settle_overTimeMoney,b.settle_overTimeMoney_have,d.emp_name AS siji,e.car_num,e.car_type,f.money ".
			 "FROM `paiche` AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId ".
			 "LEFT JOIN emp AS d ON a.paicheDriver=d.emp_id ".
			 "LEFT JOIN car AS e ON a.paicheCar=e.car_id ".
			 "LEFT JOIN (SELECT x.`paiche_id`,SUM(x.have_in_money) AS money FROM `paiche_charges` AS x INNER JOIN `charges` AS y ON x.`charge_id`=y.`charge_id` WHERE y.`charge_isback`=0 GROUP BY x.`paiche_id`) AS f ON a.paiche_id=f.paiche_id ".
			 "WHERE a.paiche_id={$pid}";
		$model = $this->createModel("report",dirname( __FILE__ ));
		$List = $model->getInfo($sql);
		$view  = $this->createView("operator/report/comuseedit.html");
		$object = new stdClass();
		$object->list = $List;
		$object->pid = $pid;
		$view->assign($object);
		$view->display();
	}
	function companyupdate(){
		$pid = Request::getVar('pid','post');
		$model = $this->createModel("report",dirname( __FILE__ ));
		$object = new Object();
		$object->settlePaicheId = $pid;
		$object->settle_startKm=Request::getVar('settle_startKm','post');
	  	$object->settle_endKm=Request::getVar('settle_endKm','post');
	  	$object->settle_totalKm=Request::getVar('settle_totalKm','post');
	  	$settle_overTime=Request::getVar('settle_overTime','post');
	  	$object->settle_overTime=empty($settle_overTime)?0:$settle_overTime;
	  	$overKmMoney=Request::getVar('overKmMoney','post');
	  	$object->settle_overKmMoney=empty($overKmMoney)?0:$overKmMoney;
	  	$overTimeMoney=Request::getVar('overTimeMoney','post');
	  	$object->settle_overTimeMoney=empty($overTimeMoney)?0:$overTimeMoney;
	  	$settle_waitTime=Request::getVar('settle_waitTime','post');
	  	$object->settle_waitTime=empty($settle_waitTime)?0:$settle_waitTime;
	  	$waitTimeMoney=Request::getVar('waitTimeMoney','post');
	  	$object->settle_waitTimeMoney=empty($waitTimeMoney)?0:$waitTimeMoney;	  	
	  	$favor=Request::getVar('settle_favor','post');
	  	$object->settle_favor=empty($favor)?0:$favor; //优惠金额
		
		$object1 = new Object();
		$object1->paiche_id = $pid;
		$object1->paiche_route=Request::getVar('paiche_route','post');
		$object1->paiche_scope=Request::getVar('paiche_scope','post');
		$paiche_overKm=Request::getVar('paiche_overKm','post');
		$paiche_overTime=Request::getVar('paiche_overTime','post');
		$paiche_waitTime=Request::getVar('paiche_waitTime','post');//待时价格
		if (!empty($paiche_overKm)){
			$object1->paiche_overKm=$paiche_overKm;
		}
		if (!empty($paiche_overTime)){
			$object1->paiche_overTime=$paiche_overTime;
		}
  		if (!empty($paiche_waitTime)){
			$object1->paiche_waitTime=$paiche_waitTime;
		}
		if ($model->update($object,'settlePaicheId','settle') && $model->update($object1,'paiche_id','paiche')){
			$re=true;
		}else{
			$re=false;
		}
		$object = new stdClass();
		$object->result = $re ? "修改成功！":"修改失败，返回重试！";
		$view  = $this->createView("operator/report/result.html");
		$view->assign($object);
		$view->display();
		
	}
	function outcarlist(){
		$p = Request::getVar('p','get');
		$driveid=Request::getVar('paicheDriver2','get');
		
		$sdate=Request::getVar('startdate','get');
		$edate=Request::getVar('enddate','get');
		$startdate=empty($sdate)? strtotime("-30 day"):strtotime($sdate);
		$enddate=empty($edate)? time():strtotime($edate." 23:59:59");
		
		if(empty($p)){$p=1;}
		$base_url = "list.php?paicheDriver2={$driveid}&startdate=".date("Y-m-d",$startdate)."&enddate=".date("Y-m-d",$enddate);
		$per_page = 10;
		
		$model = $this->createModel("report",dirname( __FILE__ ));		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		if (empty($driveid)){
			$driveid=0;
			$where="b.driveDriver=-1";
		}else{
			$where="b.driveDriver={$driveid}";
		}
		$where.=" AND b.drive_date>='{$startdate}' AND b.drive_date<='{$enddate}'";
		$sql="SELECT b.*,a.paiche_line, d.emp_name AS siji,e.car_num ".
			 "FROM `paiche_drive` AS b LEFT JOIN `paiche` AS a ON b.drivePaicheId=a.paiche_id ".
			 "LEFT JOIN emp AS d ON b.driveDriver=d.emp_id ".
			 "LEFT JOIN car AS e ON a.paicheCar=e.car_id ".
			 "WHERE {$where}";

		$List = $model->getListBySql($start,$per_page, $sql);
		$sql = "SELECT COUNT(*) AS total FROM `paiche_drive` AS b LEFT JOIN paiche AS a ON a.paiche_id=b.drivePaicheId WHERE {$where}";
		$total_item = $model->getTotal($sql);

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
		$view  = $this->createView("operator/report/outcarlist.html");
		
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();
		$object->list = $List;
		$object->total = $total_item;
		$object->driveid =$driveid;		
		$object->drivename = $model->getTotal("SELECT `emp_name` AS total FROM `emp` WHERE `emp_id`=".$driveid);
		$object->startdate = date("Y-m-d",$startdate);
		$object->enddate = date("Y-m-d",$enddate);
		$view->assign($object);
		$view->display();
	}
	
	function export()
	{
        $search_input=Request::getVar('search_input','get');
        $companyid=Request::getVar('company','get');
		$sdate=Request::getVar('startdate','get');
		$edate=Request::getVar('enddate','get');
		$startdate=empty($sdate)? strtotime("-30 day"):strtotime($sdate);
		$enddate=empty($edate)? time():strtotime($edate." 23:59:59");
		
        $model = $this->createModel("report",dirname( __FILE__ ));
                
        $where="a.`paiche_status`>=0 AND a.`paiche_personal`=0 AND a.paiche_type=2 ".
			   "AND a.paiche_startDate>='{$startdate}' AND a.paiche_endDate<='{$enddate}'";
		if (!empty($companyid)){
			$where.=" AND a.`paicheCom`={$companyid}";
		}
		if ($search_input=="self"){
        	$where .=" AND a.paiche_Man='".$_SESSION['truename']."'";
        }
        if ($companyid==12){
        $sql="SELECT a.*,b.settle_startKm,b.settle_endKm,b.settle_waitTime,b.settle_waitTimeMoney,b.settle_overTime,b.settle_overKmMoney,b.settle_overKmMoney_have,b.settle_overTimeMoney,b.settle_overTimeMoney_have,d.emp_name AS siji,e.car_num,e.car_type,f.money ".
			 "FROM `paiche` AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId ".
			 "LEFT JOIN emp AS d ON a.paicheDriver=d.emp_id ".
			 "LEFT JOIN car AS e ON a.paicheCar=e.car_id ".
			 "LEFT JOIN (SELECT `paiche_id`,SUM(conv_money) AS money FROM `paiche_charges` WHERE `charge_id`=2 OR `charge_id`=5 GROUP BY `paiche_id`) AS f ON a.paiche_id=f.paiche_id ".
			 "WHERE {$where}";
        }else{
        	$sql="SELECT a.*,b.settle_totalcalKm,b.settle_waitTime,b.settle_waitTimeMoney,b.settle_overTime,b.settle_overKmMoney,b.settle_overKmMoney_have,b.settle_overTimeMoney,b.settle_overTimeMoney_have,d.emp_name AS siji,e.car_num,e.car_type,f.rent_money,g.other_money ".
			 "FROM `paiche` AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId ".
			 "LEFT JOIN emp AS d ON a.paicheDriver=d.emp_id ".
			 "LEFT JOIN car AS e ON a.paicheCar=e.car_id ".
			 "LEFT JOIN (SELECT `paiche_id`,SUM(conv_money) AS rent_money FROM `paiche_charges` WHERE `charge_id`=2 GROUP BY `paiche_id`) AS f ON a.paiche_id=f.paiche_id ".
        	 "LEFT JOIN (SELECT `paiche_id`,SUM(conv_money) AS other_money FROM `paiche_charges` WHERE `charge_id`<>2 AND `charge_id`<>1 GROUP BY `paiche_id`) AS g ON a.paiche_id=g.paiche_id ".
			 "WHERE {$where}";
        }

		$List = $model->getListBySql(0,1000, $sql);
		
		header ( "Content-type:application/vnd.ms-excel" );
		header ( "Content-Disposition:filename=企业临时用车情况.xls" );
		echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
		<html xmlns='http://www.w3.org/1999/xhtml'>
		<head>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		<title></title>
		</head>
		<body>
		<table width='100%' border='1'>
		  <tr>
		    <td colspan='15'>企业临时用车情况</td>
		  </tr>";
		if ($companyid==12){
		echo "  <tr>
		    <td>用车日期</td>
		    <td>路线</td>
		    <td>公里数</td>
		    <td>路程</td>
		    <td>内外</td>
			<td>车型</td>
		    <td>单价</td>
		    <td>费用</td>
		    <td>待时</td>
		    <td>等待单价</td>
		    <td>等待费用</td>
		    <td>合计费用</td>
		    <td>车辆</td>
		    <td>司机</td>
		</tr>";
		}else{
		echo "  <tr>
		    <td>用车日期</td>
		    <td>路线</td>
		    <td>车型</td>
		    <td>公里数</td>
		    <td>租金</td>
		    <td>超公里费</td>
		    <td>超时费</td>
		    <td>其他费用</td>
		    <td>合计费用</td>
		    <td>车辆</td>
		    <td>司机</td>
		</tr>";	
		}
		        
        if(is_array($List)){
            foreach($List as $item)
            {
            	if ($companyid==12){
            	echo "<tr>
            	<td>".$item["paiche_startDate"]."</td>
			  	<td>".$item["paiche_line"]."</td>
				<td>".($item["settle_endKm"]-$item["settle_startKm"])."</td>
				<td>".$item["paiche_route"]."</td>
				<td>".$item["paiche_scope"]."</td>
				<td>".$item["car_type"]."</td>
				<td>".$item["paiche_overKm"]."</td>
			  	<td>".($item["money"]+$item["settle_overKmMoney"])."</td>
			    <td>".$item["settle_overTime"]."</td>
			    <td>".$item["paiche_overTime"]."</td>
			    <td>".$item["settle_overTimeMoney"]."</td>
				<td>".($item["money"]+$item["settle_overKmMoney"]+$item["settle_overTimeMoney"])."</td>
				<td>苏D".$item["car_num"]."</td>
				<td>".$item["siji"]."</td>
				</tr>";
            	}else{
            	echo "<tr>
            	<td>".$item["paiche_startDate"]."</td>
			  	<td>".$item["paiche_line"]."</td>
			  	<td>".($item["paiche_shunt"]==1?"调车":$item["car_type"])."</td>
				<td>".$item["settle_totalcalKm"]."</td>
				<td>".$item["rent_money"]."</td>
			  	<td>".$item["settle_overKmMoney"]."</td>
			    <td>".$item["settle_overTimeMoney"]."</td>
			    <td>".$item["other_money"]."</td>
				<td>".($item["rent_money"]+$item["settle_overKmMoney"]+$item["settle_overTimeMoney"]+$item["other_money"])."</td>
				<td>".($item["paiche_shunt"]==1?"调车":"苏D".$item["car_num"])."</td>
				<td>".($item["paiche_shunt"]==1?"调车":$item["siji"])."</td>
				</tr>";	
            	}
            }
        }
        echo "
		</table>
		</body>
		</html>";
    }

    function exportoutcar()
    {
    	require_once("Excel/Writer.php");
    	$driveid=Request::getVar('paicheDriver2','get');
		if (empty($driveid)){
			echo "请先选择司机！";
			exit();
		}
		$sdate=Request::getVar('startdate','get');
		$edate=Request::getVar('enddate','get');
		$startdate=empty($sdate)? strtotime("-30 day"):strtotime($sdate);
		$enddate=empty($edate)? time():strtotime($edate." 23:59:59");
		
        $model = $this->createModel("report",dirname( __FILE__ ));
        $drivename = $model->getTotal("SELECT `emp_name` AS total FROM `emp` WHERE `emp_id`=".$driveid);
        
        $where="b.driveDriver={$driveid} AND b.drive_date>='{$startdate}' AND b.drive_date<='{$enddate}'";
		$sql="SELECT b.*,a.paiche_line, d.emp_name AS siji,e.car_num ".
			 "FROM `paiche_drive` AS b LEFT JOIN `paiche` AS a ON b.drivePaicheId=a.paiche_id ".
			 "LEFT JOIN emp AS d ON b.driveDriver=d.emp_id ".
			 "LEFT JOIN car AS e ON a.paicheCar=e.car_id ".
			 "WHERE {$where}";

		$List = $model->getListBySql(0,1000, $sql);
		
        $workbook = new Spreadsheet_Excel_Writer();
        $workbook->send($drivename."_出车清单.xls");
        $worksheet = $workbook->addWorksheet(date("Y-m",$startdate));
        
        $worksheet->write(0, 0, "".iconv("UTF-8","GBK//IGNORE","出车日期")."");
        $worksheet->write(0, 1, "".iconv("UTF-8","GBK//IGNORE","车号")."");
        $worksheet->write(0, 2, "".iconv("UTF-8","GBK//IGNORE","开始时间")."");
		$worksheet->write(0, 3, "".iconv("UTF-8","GBK//IGNORE","路线")."");
		$worksheet->write(0, 4, "".iconv("UTF-8","GBK//IGNORE","结束时间")."");
		$worksheet->write(0, 5, "".iconv("UTF-8","GBK//IGNORE","起始公里")."");
		$worksheet->write(0, 6, "".iconv("UTF-8","GBK//IGNORE","结束公里")."");
		$worksheet->write(0, 7, "".iconv("UTF-8","GBK//IGNORE","共行驶里程")."");
		$worksheet->write(0, 8, "".iconv("UTF-8","GBK//IGNORE","过路费")."");
		$worksheet->write(0, 9, "".iconv("UTF-8","GBK//IGNORE","油卡加油")."");
		$worksheet->write(0, 10, "".iconv("UTF-8","GBK//IGNORE","现金加油")."");
		
        $r=1;
        if(is_array($List)){
            foreach($List as $item)
            {
            	$worksheet->writeString($r, 0, iconv("UTF-8","GBK//IGNORE",$item["drive_date"]));
			  	$worksheet->writeString($r, 1, iconv("UTF-8","GBK//IGNORE","苏D".$item["car_num"]));
			  	$worksheet->writeString($r, 2, iconv("UTF-8","GBK//IGNORE",$item["drive_startTime"]));	  	
				$worksheet->writeString($r, 3, iconv("UTF-8","GBK//IGNORE",$item["paiche_line"]));
			    $worksheet->writeString($r, 4, iconv("UTF-8","GBK//IGNORE",$item["drive_endTime"]));
			    $worksheet->writeString($r, 5, iconv("UTF-8","GBK//IGNORE",$item["drive_startKilo"]));
				$worksheet->writeString($r, 6, iconv("UTF-8","GBK//IGNORE",$item["drive_endKilo"]));
				$worksheet->writeString($r, 7, iconv("UTF-8","GBK//IGNORE",$item["drive_endKilo"]-$item["drive_startKilo"]));

                $r++;
            }
        }
        $workbook->close();
    }

	function monthlist()
	{
		$p = Request::getVar('p','get');
		$companyid=Request::getVar('company','get');		
		$sdate=Request::getVar('startdate','get');
		$edate=Request::getVar('enddate','get');
		
		if(empty($p)){$p=1;}
		$base_url = "list.php?";
		$per_page = 10;		
		$model = $this->createModel("report",dirname( __FILE__ ));		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		
		$where="";
		if (! empty($companyid)){
			$base_url.="&company={$companyid}";
			$where.=" AND b.`paicheCom`={$companyid}";
		}
		if (!empty($sdate)){
			$base_url.="&startdate={$sdate}";
			$where.=" AND (a.month_year>".date("Y",strtotime($sdate))." OR (a.month_year=".date("Y",strtotime($sdate))." AND a.month_month>=".date("m",strtotime($sdate))."))";
		}
		if (!empty($edate)){
			$base_url.="&enddate={$edate}";
			$where.=" AND (a.month_year<".date("Y",strtotime($edate))." OR (a.month_year=".date("Y",strtotime($edate))." AND a.month_month<=".date("m",strtotime($edate))."))";
		}
		
		$sql="SELECT a.*,c.client_name FROM `paiche_month` AS a ".
			 "LEFT JOIN `paiche` AS b ON a.monthPaicheId=b.paiche_id ".
			 "LEFT JOIN `client` AS c ON b.paicheCom=c.client_id ".
			 "WHERE 1 {$where}";

		$List = $model->getListBySql($start,$per_page, $sql);
		$sql = "SELECT COUNT(*) AS total FROM `paiche_month` AS a LEFT JOIN `paiche` AS b ON a.monthPaicheId=b.paiche_id LEFT JOIN `client` AS c ON b.paicheCom=c.client_id WHERE 1 {$where}";
		$total_item = $model->getTotal($sql);

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
		$view  = $this->createView("operator/report/monthlist.html");
		
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();
		$object->list = $List;
		$object->total = $total_item;
		$object->companyid =$companyid;
		$object->companylist =$model->getListBySql(0,1000, "SELECT `client_id`,`client_name` FROM `client` WHERE `client_recycle`!=1");
		//$object->companyname = $model->getTotal("SELECT `client_name` AS total FROM `client` WHERE `client_id`=".$companyid);
		$object->startdate = $sdate;
		$object->enddate = $edate;
		$view->assign($object);
		$view->display();
	}
	
	function monthoutcarlist()
	{
		$monthid=Request::getVar('mid','get');
		$model = $this->createModel("report",dirname( __FILE__ ));
		
		$tmplist=$model->getListBySql(0,1,"SELECT `monthPaicheId`,`month_year`,`month_month` FROM `paiche_month` WHERE `month_id`='{$monthid}' ");
		if (!empty($tmplist)){
			$pid=$tmplist[0]['monthPaicheId'];
			$year=$tmplist[0]['month_year'];
			$month=$tmplist[0]['month_month'];
		}else{
			
		}
		$sdate=$year."-".$month."-01";
		if ($month==12){
			$edate=intval($year+1)."-01-01";
		}else{
			$edate=$year."-".intval($month+1)."-01";
		}
		$startdate=strtotime($sdate);
		$enddate=strtotime($edate);
		
		$model = $this->createModel("list",dirname(dirname( __FILE__ ))."\business");
		$out_list=$model->getEmpList("*"," AND `drive_date`>={$startdate} AND `drive_date`<{$enddate} AND `drivePaicheId`={$pid}","paiche_drive",""," `drive_date`");
		$busiInfo = $model->getBusinessInfo($pid);
		
		$object = new stdClass();
		$object->busi = $busiInfo;
        $object->outlist = $out_list;
        $object->month = $year."-".$month;
        
        $view  = $this->createView("operator/report/monthoutcarlist.html");
		$view->assign($object);
		$view->display();
	}

	function carincomelist()
	{
		//print_r("expression");exit;
		$sdate=Request::getVar('startdate','get');
		$edate=Request::getVar('enddate','get');
		$startdate=empty($sdate)? strtotime(date('Y-m-01', strtotime(date("Y-m-d")))):strtotime($sdate);
		$enddate=empty($edate)? time():strtotime($edate." 23:59:59");
						
		$model = $this->createModel("report",dirname( __FILE__ ));
				
		$where="AND c.paiche_endDate>={$startdate} AND c.paiche_endDate<={$enddate} AND c.paiche_status>0 AND e.settle_totalKm>0 AND c.paicheCar>0 AND c.paiche_shunt=0 ";
		$sql_0="SELECT a.paiche_id,SUM(a.conv_money) AS conv_money,SUM(a.have_in_money) AS total_money FROM `paiche_charges` AS a INNER JOIN `charges` AS b ON a.`charge_id`=b.`charge_id` WHERE b.`charge_isback`=0 GROUP BY a.paiche_id";
		
		$sql_01="SELECT a.paiche_id,SUM(a.money) AS total_money FROM `account_log` AS a 
				 WHERE a.`bill_type`=0 AND a.paiche_id>0 AND a.name in ('收租金','租车结账收款','收续租金') 
				 AND a.add_time>={$startdate} AND a.add_time<={$enddate} GROUP BY a.paiche_id";
		//临时自驾
		$sql_1="Select c.paicheCar,SUM(IF(h.shunt_type=1,0,d.total_money)-IFNULL(h.shunt_rent,0)) AS total_money1,0 AS total_money2,0 AS total_money22,0 AS total_money3,0 AS total_money4,0 AS total_money5 ".
			 "FROM `paiche` AS c INNER JOIN ({$sql_01}) d ON c.paiche_id=d.paiche_id  ".
			 "LEFT JOIN shunt AS h ON c.paiche_id=h.shuntPaicheId ".
			 "Where c.paiche_type=1 AND c.paiche_status>0 AND c.paicheCar>0 AND c.paiche_shunt=0 GROUP BY paicheCar";
		//临时代驾--现结
		$sql_21="Select c.paicheCar,0 AS total_money1,d.total_money AS total_money2,0 AS total_money22,0 AS total_money3,0 AS total_money4,0 AS total_money5 ".
			 "FROM `paiche` AS c INNER JOIN settle AS e ON c.paiche_id=e.settlePaicheId ".
			 "INNER JOIN ({$sql_01}) d ON c.paiche_id=d.paiche_id  ".
			 "Where c.paiche_type=2 AND c.paiche_status>0 AND c.paicheCar>0 AND c.paiche_shunt=0 AND e.settle_lossescode='' GROUP BY paicheCar";
		//临时代驾--批结
		$aa="'1111'";
		$ss="SELECT bill_code FROM `account_log` AS a WHERE a.`bill_type`=5 AND a.paiche_id=0 AND a.name ='临时用车批量结账' AND a.add_time>={$startdate} AND a.add_time<={$enddate}";
		$tmplist=$model->getListBySql(0,2000, $ss);
		foreach($tmplist as $key=>$val){
			$aa.=",'".$val['bill_code']."'";
		}
		$sql_22="Select c.paicheCar,0 AS total_money1,0 AS total_money2,SUM(IF(h.shunt_type=1,0,d.conv_money)+e.settle_overKmMoney_have+e.settle_overTimeMoney_have-e.settle_favor-IFNULL(h.shunt_rent,0)-IFNULL(h.shunt_other,0)) AS total_money22,0 AS total_money3,0 AS total_money4,0 AS total_money5 ".
			 "FROM `paiche` AS c INNER JOIN settle AS e ON c.paiche_id=e.settlePaicheId ".
			 "LEFT JOIN shunt AS h ON c.paiche_id=h.shuntPaicheId ".
			 "LEFT JOIN ({$sql_0}) d ON c.paiche_id=d.paiche_id ".
			 "Where c.paiche_type=2 AND c.paiche_status>0 AND c.paicheCar>0 AND c.paiche_shunt=0 AND e.settle_lossescode IN ({$aa}) GROUP BY paicheCar";
		//长期
		$where="AND e.month_accounttime>={$startdate} AND e.month_accounttime<={$enddate}";
		$sql_3="Select c.paicheCar,0 AS total_money1,0 AS total_money2,0 AS total_money22,SUM(e.settle_billMoney_have) AS total_money3,0 AS total_money4,0 AS total_money5 ".
			 "FROM `paiche` AS c INNER JOIN `paiche_month` AS e ON c.paiche_id=e.monthPaicheId ".
			 "Where c.paiche_type=3 AND e.month_account=1 {$where} GROUP BY paicheCar";
		$sql_4="Select c.paicheCar,0 AS total_money1,0 AS total_money2,0 AS total_money22,0 AS total_money3,SUM(e.settle_billMoney_have) AS total_money4,0 AS total_money5 ".
			 "FROM `paiche` AS c INNER JOIN `paiche_month` AS e ON c.paiche_id=e.monthPaicheId ".
			 "Where c.paiche_type=4 AND e.month_account=1 {$where} GROUP BY paicheCar";
		$sql_5="Select c.paicheCar,0 AS total_money1,0 AS total_money2,0 AS total_money22,0 AS total_money3,0 AS total_money4,SUM(e.settle_billMoney_have) AS total_money5 ".
			 "FROM `paiche` AS c INNER JOIN `paiche_month` AS e ON c.paiche_id=e.monthPaicheId ".
			 "Where c.paiche_type=5 AND e.month_account=1 {$where} GROUP BY paicheCar";
		
		$sql_6="Select kk.paicheCar,Sum(total_money1) as total_money1,Sum(total_money2+total_money22) as total_money2,Sum(total_money3) as total_money3,".
			   "Sum(total_money4) as total_money4,Sum(total_money5) as total_money5,".
			   "Sum(total_money1+total_money2+total_money3+total_money4+total_money5) as total_money From ({$sql_1} Union All {$sql_21} Union All {$sql_22} Union All {$sql_3} Union All {$sql_4} Union All {$sql_5}) kk Group by kk.paicheCar";
		
		$sql="SELECT a.car_num,c.total_money1,c.total_money2,c.total_money3,c.total_money4,c.total_money5,c.total_money ".
			 "FROM `car` AS a Left JOIN ({$sql_6}) AS c ON a.car_id=c.paicheCar Where car_recycle<>'1'";
		//echo $sql;
				
		$List = $model->getListBySql(0,200, $sql);
		
		$view  = $this->createView("operator/report/carincomelist.html");
		
		$object = new stdClass();
		$object->list = $List;
		$object->startdate = date("Y-m-d",$startdate);
		$object->enddate = date("Y-m-d",$enddate);
		$object->all_km =array();
		$object->all_money =array();
		
		$view->assign($object);
		$view->display();
	}





	//收支统计
	function incomelist()
	{
		
		$sdate=Request::getVar('startdate','get');//开始的时间
		
		$edate=Request::getVar('enddate','get');//结束时间
		$search_shop=Request::getVar('search_shop','get');//门店
		$startdate=empty($sdate)? strtotime(date('Y-m-01', strtotime(date("Y-m-d")))):strtotime($sdate);
		$enddate=empty($edate)? time():strtotime($edate." 23:59:59");
		//print_r($startdate);exit;

		$where  =empty($search_shop)?"" : " AND c.paicheCounterShop={$search_shop}";
		$where3 =empty($search_shop)?"" : " AND e.month_CounterShop={$search_shop}";
		$where2 =empty($search_shop)?"" : " AND shop_id={$search_shop}";
	
		$model = $this->createModel("report",dirname( __FILE__ ));

		//print_r(date("Y-m-d H:i:s",$startdate));
		//print_r(date("Y-m-d H:i:s",$enddate));exit;
		$sql_00="SELECT a.paiche_id,Count(*) AS total_count FROM `account_log` AS a 
				 WHERE a.`bill_type`=0 AND a.paiche_id>0 AND a.money<0 AND a.name in ('收租金','租车结账收款','收续租金','租车违约收违约金','租车违约退租金') 
				 AND a.add_time>={$startdate} AND a.add_time<={$enddate} GROUP BY a.paiche_id";
		//print_r($sql_00);exit;
		$sql_01="SELECT a.paiche_id,SUM(a.money) AS total_money FROM `account_log` AS a 
				 WHERE a.`bill_type`=0 AND a.paiche_id>0 AND a.name in ('收租金','租车结账收款','收续租金','租车违约收违约金','租车违约退租金') 
				 AND a.add_time>={$startdate} AND a.add_time<={$enddate} GROUP BY a.paiche_id";
		
		//临时自驾收入
		$sql_1="Select SUM(f.total_count) AS total_count1,SUM(IF(h.shunt_type=1,0,d.total_money)-IFNULL(h.shunt_rent,0)) AS total_money1,0 AS total_count2,0 AS total_money2,0 AS total_count22,0 AS total_money22,0 AS total_count21,0 AS total_money21,0 AS total_count3,0 AS total_money3,0 AS total_count4,0 AS total_money4,0 AS total_count5,0 AS total_money5,0 AS total_money6,0 AS deposit_money,0 AS depositback_money ".
			 "FROM `paiche` AS c INNER JOIN ({$sql_01}) d ON c.paiche_id=d.paiche_id ".
			 "LEFT JOIN ({$sql_00}) f ON c.paiche_id=f.paiche_id ".
			 "LEFT JOIN shunt AS h ON c.paiche_id=h.shuntPaicheId ".
			 "Where c.paiche_type=1 AND (c.paiche_status>=0 OR c.paiche_status=-1){$where}";
		
		//临时代驾--现结
		$sql_2="Select 0 AS total_count1,0 AS total_money1,SUM(f.total_count) AS total_count2,Sum(d.total_money) AS total_money2,0 AS total_count22,0 AS total_money22,0 AS total_count21,0 AS total_money21,0 AS total_count3,0 AS total_money3,0 AS total_count4,0 AS total_money4,0 AS total_count5,0 AS total_money5,0 AS total_money6,0 AS deposit_money,0 AS depositback_money ".
			 "FROM `paiche` AS c INNER JOIN settle AS e ON c.paiche_id=e.settlePaicheId ".
			 "INNER JOIN ({$sql_01}) d ON c.paiche_id=d.paiche_id ".
			 "LEFT JOIN ({$sql_00}) f ON c.paiche_id=f.paiche_id ".
			 "Where c.paiche_type=2 AND (c.paiche_status>=0 OR c.paiche_status=-1){$where} ";// AND e.settle_lossescode='' --考虑到长期单位现结的情况
			 //print_r($sql_2);exit;
		//临时代驾--批结
		$sql_22="SELECT 0 AS total_count1,0 AS total_money1,0 AS total_count2,0 AS total_money2,0 AS total_count22,SUM(a.money) AS total_money22,0 AS total_count21,0 AS total_money21,0 AS total_count3,0 AS total_money3,0 AS total_count4,0 AS total_money4,0 AS total_count5,0 AS total_money5,0 AS total_money6,0 AS deposit_money,0 AS depositback_money 
				 FROM `account_log` AS a Left Join paiche_month b ON a.bill_code = b.month_code
				 WHERE a.`bill_type`=5 AND a.name ='临时用车批量结账' AND a.add_time>={$startdate} AND a.add_time<={$enddate}".(empty($search_shop)?"" : " AND b.month_ShopID={$search_shop}");
		$sql_221="SELECT 0 AS total_count1,0 AS total_money1,0 AS total_count2,0 AS total_money2,Count(*) AS total_count22,0 AS total_money22,0 AS total_count21,0 AS total_money21,0 AS total_count3,0 AS total_money3,0 AS total_count4,0 AS total_money4,0 AS total_count5,0 AS total_money5,0 AS total_money6,0 AS deposit_money,0 AS depositback_money 
				 FROM `account_log` AS a Left Join paiche_month b ON a.bill_code = b.month_code
				 WHERE a.`bill_type`=5 AND a.name ='临时用车批量结账' AND a.money<0 AND a.add_time>={$startdate} AND a.add_time<={$enddate}".(empty($search_shop)?"" : " AND b.month_ShopID={$search_shop}");
		
		//调车结算
		$sql_21="SELECT 0 AS total_count1,0 AS total_money1,0 AS total_count2,0 AS total_money2,0 AS total_count22,0 AS total_money22,0 AS total_count21,SUM(a.money) AS total_money21,0 AS total_count3,0 AS total_money3,0 AS total_count4,0 AS total_money4,0 AS total_count5,0 AS total_money5,0 AS total_money6,0 AS deposit_money,0 AS depositback_money FROM `account_log` AS a 
				 WHERE a.`bill_type`=6 AND a.brother_id<>0 AND a.name ='调车结账' AND a.add_time>={$startdate} AND a.add_time<={$enddate}".(empty($search_shop)?"":" AND 9={$search_shop}");
		$sql_211="SELECT 0 AS total_count1,0 AS total_money1,0 AS total_count2,0 AS total_money2,0 AS total_count22,0 AS total_money22,Count(*) AS total_count21,0 AS total_money21,0 AS total_count3,0 AS total_money3,0 AS total_count4,0 AS total_money4,0 AS total_count5,0 AS total_money5,0 AS total_money6,0 AS deposit_money,0 AS depositback_money FROM `account_log` AS a 
				 WHERE a.`bill_type`=6 AND a.brother_id<>0 AND a.name ='调车结账' AND a.money<0 AND a.add_time>={$startdate} AND a.add_time<={$enddate}".(empty($search_shop)?"":" AND 9={$search_shop}");
			








		//长期
		$sql_102="SELECT a.paiche_id,sum(a.money) AS total_money FROM `account_log` AS a 
				 WHERE a.`bill_type`=0 AND a.paiche_id>0 AND (a.name ='长期用车月结' OR a.name ='租车违约收违约金' OR a.name ='收续租金' OR a.name ='收租金') 
				 AND a.add_time>={$startdate} AND a.add_time<={$enddate} GROUP BY a.paiche_id";

		
				 
		$sql_112="SELECT a.paiche_id,Count(*) AS total_count FROM `account_log` AS a 
				 WHERE a.`bill_type`=0 AND a.paiche_id>0 AND (a.name ='长期用车月结' OR a.name ='租车违约收违约金' OR a.name ='收续租金' OR a.name ='收租金') 
				 AND a.add_time>={$startdate} AND a.money<0 AND a.add_time<={$enddate} GROUP BY a.paiche_id";



		//长期
		$sql_02="SELECT a.paiche_id,sum(a.money) AS total_money FROM `account_log` AS a 
				 WHERE a.`bill_type`=0 AND a.paiche_id>0 AND (a.name ='长期用车月结' OR a.name ='租车违约收违约金') 
				 AND a.add_time>={$startdate} AND a.add_time<={$enddate} GROUP BY a.paiche_id";

		
				 
		$sql_12="SELECT a.paiche_id,Count(*) AS total_count FROM `account_log` AS a 
				 WHERE a.`bill_type`=0 AND a.paiche_id>0 AND (a.name ='长期用车月结' OR a.name ='租车违约收违约金') 
				 AND a.add_time>={$startdate} AND a.money<0 AND a.add_time<={$enddate} GROUP BY a.paiche_id";
		
		$sql_3="Select 0 AS total_count1,
		0 AS total_money1,0 AS total_count2,
		0 AS total_money2,0 AS total_count22,
		0 AS total_money22,0 AS total_count21,
		0 AS total_money21,
		SUM(f.total_count) AS total_count3,
		SUM(d.total_money) AS total_money3,
		0 AS total_count4,
		0 AS total_money4,
		0 AS total_count5,
		0 AS total_money5,
		0 AS total_money6,
		0 AS deposit_money,
		0 AS depositback_money ".
			 "FROM `paiche` AS c 
			 INNER JOIN ({$sql_102}) d ON c.paiche_id=d.paiche_id 
			 ".
			 "LEFT JOIN ({$sql_112}) f ON c.paiche_id=f.paiche_id ".
			 "Where c.paiche_type=3 AND (c.paiche_status>=0 OR c.paiche_status=-1){$where3}";


		$sql_4="Select 0 AS total_count1,0 AS total_money1,0 AS total_count2,0 AS total_money2,0 AS total_count22,0 AS total_money22,0 AS total_count21,0 AS total_money21,0 AS total_count3,0 AS total_money3,SUM(f.total_count) AS total_count4,SUM(d.total_money) AS total_money4,0 AS total_count5,0 AS total_money5,0 AS total_money6,0 AS deposit_money,0 AS depositback_money ".
			 "FROM `paiche` AS c INNER JOIN ({$sql_02}) d ON c.paiche_id=d.paiche_id Inner Join paiche_month e ON c.paiche_id=e.monthPaicheId ".
			 "LEFT JOIN ({$sql_12}) f ON c.paiche_id=f.paiche_id ".
			 "Where c.paiche_type=4 AND (c.paiche_status>=0 OR c.paiche_status=-1){$where3}";



		//print_r($sql_4);exit;
		$sql_5="Select 0 AS total_count1,0 AS total_money1,0 AS total_count2,0 AS total_money2,0 AS total_count22,0 AS total_money22,0 AS total_count21,0 AS total_money21,0 AS total_count3,0 AS total_money3,0 AS total_count4,0 AS total_money4,SUM(f.total_count) AS total_count5,SUM(d.total_money) AS total_money5,0 AS total_money6,0 AS deposit_money,0 AS depositback_money ".
			 "FROM `paiche` AS c INNER JOIN ({$sql_02}) d ON c.paiche_id=d.paiche_id Inner Join paiche_month e ON c.paiche_id=e.monthPaicheId ".
			 "LEFT JOIN ({$sql_12}) f ON c.paiche_id=f.paiche_id ".
			 "Where c.paiche_type=5 AND (c.paiche_status>=0 OR c.paiche_status=-1){$where3}";
		



		//其他收入
		$sql_6="Select 0 AS total_count1,0 AS total_money1,0 AS total_count2,0 AS total_money2,0 AS total_count22,0 AS total_money22,0 AS total_count21,0 AS total_money21,0 AS total_count3,0 AS total_money3,0 AS total_count4,0 AS total_money4,0 AS total_count5,0 AS total_money5,SUM(a.money) AS total_money6,0 AS deposit_money,0 AS depositback_money FROM `account_log` AS a 
				 WHERE a.`bill_type`=3 AND a.add_time>={$startdate} AND a.add_time<={$enddate}{$where2}";
		//押金收入
		$sql_7="Select 0 AS total_count1,0 AS total_money1,0 AS total_count2,0 AS total_money2,0 AS total_count22,0 AS total_money22,0 AS total_count21,0 AS total_money21,0 AS total_count3,0 AS total_money3,0 AS total_count4,0 AS total_money4,0 AS total_count5,0 AS total_money5,0 AS total_money6,SUM(a.money) AS deposit_money,0 AS depositback_money FROM `account_log` AS a 
				Left Join paiche as c ON a.paiche_id=c.paiche_id WHERE a.`bill_type`=0 AND a.paiche_id>0 AND a.name ='收押金' AND a.add_time>={$startdate} AND a.add_time<={$enddate}{$where}";
		//押金支出
		$sql_8="Select 0 AS total_count1,0 AS total_money1,0 AS total_count2,0 AS total_money2,0 AS total_count22,0 AS total_money22,0 AS total_count21,0 AS total_money21,0 AS total_count3,0 AS total_money3,0 AS total_count4,0 AS total_money4,0 AS total_count5,0 AS total_money5,0 AS total_money6,0 AS deposit_money,-1*SUM(a.money) AS depositback_money FROM `account_log` AS a 
				Left Join paiche as c ON a.paiche_id=c.paiche_id WHERE a.`bill_type`=0 AND a.paiche_id>0 AND a.name like '%退押金%' AND a.add_time>={$startdate} AND a.add_time<={$enddate}{$where}";
		
		$sql="Select Sum(total_count1) as total_count1,Sum(total_money1) as total_money1,Sum(total_count2) as total_count2,Sum(total_money2) as total_money2,Sum(total_count22) as total_count22,Sum(total_money22) as total_money22,Sum(total_count21) as total_count21,Sum(total_money21) as total_money21,".
			   "Sum(total_count3) as total_count3,Sum(total_money3) as total_money3,Sum(total_count4) as total_count4,Sum(total_money4) as total_money4,Sum(total_count5) as total_count5,Sum(total_money5) as total_money5,Sum(total_money6) as total_money6,".
			   "Sum(deposit_money) AS deposit_money,Sum(depositback_money) AS depositback_money ".
			   "From ({$sql_1} Union All {$sql_2} Union All {$sql_22} Union All {$sql_221} Union All {$sql_211} Union All {$sql_21} Union All {$sql_3} Union All {$sql_4} Union All {$sql_5} Union All {$sql_6} Union All {$sql_7} Union All {$sql_8}) kk ";
		
		$income = $model->getInfo($sql);


















		//备用金
		$sql_90="SELECT Sum(baoxiao_money) as baoxiao_money,0 AS other_money,0 AS now_money From baoxiao Where baoxiao_isOver=1 AND baoxiao_type ='打款备用金'";
		$sql_91="SELECT 0 AS baoxiao_money,SUM(money) AS other_money,0 AS now_money FROM account_log WHERE bill_type=3 AND account_type='备用金归还'";
		$sql_92="SELECT 0 AS baoxiao_money,0 AS other_money,SUM(money) AS now_money FROM account_log Where bank_id=17";
		
		$sql="Select SUM(baoxiao_money-other_money) as total_money,SUM(baoxiao_money-other_money+now_money) as now_money From ({$sql_90} Union All {$sql_91} Union All {$sql_92}) kk";
		$beiyong = $model->getInfo($sql);
		
		//违章款
		/*
		$sql_80="SELECT SUM(breakrules_money) AS total,0 AS total1,0 AS total2 FROM breakrules WHERE breakrules_end=0".(empty($search_shop)?"" : " AND 1={$search_shop}");
		$sql_81="SELECT 0 AS total,SUM(breakrules_money) AS total1,0 AS total2 FROM breakrules WHERE breakrules_times>={$startdate} AND breakrules_times<={$enddate}".(empty($search_shop)?"" : " AND 1={$search_shop}");
		$sql_82="SELECT 0 AS total,0 AS total1,SUM(breakrules_money) AS total2 FROM breakrules WHERE breakrules_end=1 AND breakrules_endtimes>={$startdate} AND breakrules_endtimes<={$enddate}".(empty($search_shop)?"" : " AND 1={$search_shop}");
		$sql="Select Sum(total) as total,Sum(total1) as total1,Sum(total2) as total2 ".
			   "From ({$sql_80} Union All {$sql_81} Union All {$sql_82}) kk ";
		$breaks = $model->getInfo($sql);
		*/
		//其他收入
		$sql_61="SELECT SUM(a.money) AS total_money61,0 AS total_money62,0 AS total_money63,0 AS total_money64,0 AS total_money65,0 AS total_money66,0 AS total_money67,0 AS total_money68,0 AS total_money69 FROM `account_log` AS a 
				 WHERE a.`bill_type`=3 AND account_type='刷卡费' AND a.add_time>={$startdate} AND a.add_time<={$enddate}{$where2}";
		$sql_62="SELECT 0 AS total_money61,SUM(a.money) AS total_money62,0 AS total_money63,0 AS total_money64,0 AS total_money65,0 AS total_money66,0 AS total_money67,0 AS total_money68,0 AS total_money69 FROM `account_log` AS a 
				 WHERE a.`bill_type`=3 AND account_type='保险理赔及退保' AND a.add_time>={$startdate} AND a.add_time<={$enddate}{$where2}";
		$sql_63="SELECT 0 AS total_money61,0 AS total_money62,SUM(a.money) AS total_money63,0 AS total_money64,0 AS total_money65,0 AS total_money66,0 AS total_money67,0 AS total_money68,0 AS total_money69 FROM `account_log` AS a 
				 WHERE a.`bill_type`=3 AND account_type='税金' AND a.add_time>={$startdate} AND a.add_time<={$enddate}{$where2}";
		$sql_64="SELECT 0 AS total_money61,0 AS total_money62,0 AS total_money63,SUM(a.money) AS total_money64,0 AS total_money65,0 AS total_money66,0 AS total_money67,0 AS total_money68,0 AS total_money69 FROM `account_log` AS a 
				 WHERE a.`bill_type`=3 AND account_type='其他' AND a.add_time>={$startdate} AND a.add_time<={$enddate}{$where2}";
		$sql_65="SELECT 0 AS total_money61,0 AS total_money62,0 AS total_money63,0 AS total_money64,SUM(a.money) AS total_money65,0 AS total_money66,0 AS total_money67,0 AS total_money68,0 AS total_money69 FROM `account_log` AS a 
				 WHERE a.`bill_type`=3 AND account_type='卖车及报废收入' AND a.add_time>={$startdate} AND a.add_time<={$enddate}{$where2}";
		$sql_66="SELECT 0 AS total_money61,0 AS total_money62,0 AS total_money63,0 AS total_money64,0 AS total_money65,SUM(a.money) AS total_money66,0 AS total_money67,0 AS total_money68,0 AS total_money69 FROM `account_log` AS a 
				 WHERE a.`bill_type`=3 AND account_type='备用金归还' AND a.add_time>={$startdate} AND a.add_time<={$enddate}{$where2}";
		$sql_67="SELECT 0 AS total_money61,0 AS total_money62,0 AS total_money63,0 AS total_money64,0 AS total_money65,0 AS total_money66,SUM(a.money) AS total_money67,0 AS total_money68,0 AS total_money69 FROM `account_log` AS a 
				 WHERE a.`bill_type`=3 AND account_type='违章手续费' AND a.add_time>={$startdate} AND a.add_time<={$enddate}{$where2}";
		$sql_68="SELECT 0 AS total_money61,0 AS total_money62,0 AS total_money63,0 AS total_money64,0 AS total_money65,0 AS total_money66,0 AS total_money67,SUM(a.money) AS total_money68,0 AS total_money69 FROM `account_log` AS a 
				 WHERE a.`bill_type`=3 AND account_type='违章扣分费' AND a.add_time>={$startdate} AND a.add_time<={$enddate}{$where2}";
		$sql_69="SELECT 0 AS total_money61,0 AS total_money62,0 AS total_money63,0 AS total_money64,0 AS total_money65,0 AS total_money66,0 AS total_money67,0 AS total_money68,SUM(a.money) AS total_money69 FROM `account_log` AS a 
				 WHERE a.`bill_type`=3 AND account_type='一嗨多收费用' AND a.add_time>={$startdate} AND a.add_time<={$enddate}{$where2}";
		
		
		$sql="Select Sum(total_money61) as total_money61,Sum(total_money62) as total_money62,Sum(total_money63) as total_money63,Sum(total_money64) as total_money64,Sum(total_money65) as total_money65,Sum(total_money66) as total_money66,Sum(total_money67) as total_money67,Sum(total_money68) as total_money68,Sum(total_money69) as total_money69 ".
			   "From ({$sql_61} Union All {$sql_62} Union All {$sql_63} Union All {$sql_64} Union All {$sql_65} Union All {$sql_66} Union All {$sql_67} Union All {$sql_68} Union All {$sql_69}) kk ";
				
		$other = $model->getInfo($sql);
		
		//其他收入负的个数
		$sql_61="SELECT COUNT(*) AS total_count61,0 AS total_count62,0 AS total_count63,0 AS total_count64,0 AS total_count65,0 AS total_count66,0 AS total_count67,0 AS total_count68,0 AS total_count69 FROM `account_log` AS a 
				 WHERE a.money<0 AND a.`bill_type`=3 AND account_type='刷卡费' AND a.add_time>={$startdate} AND a.add_time<={$enddate}{$where2}";
		$sql_62="SELECT 0 AS total_count61,COUNT(*) AS total_count62,0 AS total_count63,0 AS total_count64,0 AS total_count65,0 AS total_count66,0 AS total_count67,0 AS total_count68,0 AS total_count69 FROM `account_log` AS a 
				 WHERE a.money<0 AND a.`bill_type`=3 AND account_type='保险理赔及退保' AND a.add_time>={$startdate} AND a.add_time<={$enddate}{$where2}";
		$sql_63="SELECT 0 AS total_count61,0 AS total_count62,COUNT(*) AS total_count63,0 AS total_count64,0 AS total_count65,0 AS total_count66,0 AS total_count67,0 AS total_count68,0 AS total_count69 FROM `account_log` AS a 
				 WHERE a.money<0 AND a.`bill_type`=3 AND account_type='税金' AND a.add_time>={$startdate} AND a.add_time<={$enddate}{$where2}";
		$sql_64="SELECT 0 AS total_count61,0 AS total_count62,0 AS total_count63,COUNT(*) AS total_count64,0 AS total_count65,0 AS total_count66,0 AS total_count67,0 AS total_count68,0 AS total_count69 FROM `account_log` AS a 
				 WHERE a.money<0 AND a.`bill_type`=3 AND account_type='其他' AND a.add_time>={$startdate} AND a.add_time<={$enddate}{$where2}";
		$sql_65="SELECT 0 AS total_count61,0 AS total_count62,0 AS total_count63,0 AS total_count64,COUNT(*) AS total_count65,0 AS total_count66,0 AS total_count67,0 AS total_count68,0 AS total_count69 FROM `account_log` AS a 
				 WHERE a.money<0 AND a.`bill_type`=3 AND account_type='卖车及报废收入' AND a.add_time>={$startdate} AND a.add_time<={$enddate}{$where2}";
		$sql_66="SELECT 0 AS total_count61,0 AS total_count62,0 AS total_count63,0 AS total_count64,0 AS total_count65,COUNT(*) AS total_count66,0 AS total_count67,0 AS total_count68,0 AS total_count69 FROM `account_log` AS a 
				 WHERE a.money<0 AND a.`bill_type`=3 AND account_type='备用金归还' AND a.add_time>={$startdate} AND a.add_time<={$enddate}{$where2}";
		$sql_67="SELECT 0 AS total_count61,0 AS total_count62,0 AS total_count63,0 AS total_count64,0 AS total_count65,0 AS total_count66,COUNT(*) AS total_count67,0 AS total_count68,0 AS total_count69 FROM `account_log` AS a 
				 WHERE a.money<0 AND a.`bill_type`=3 AND account_type='违章手续费' AND a.add_time>={$startdate} AND a.add_time<={$enddate}{$where2}";
		$sql_68="SELECT 0 AS total_count61,0 AS total_count62,0 AS total_count63,0 AS total_count64,0 AS total_count65,0 AS total_count66,0 AS total_count67,COUNT(*) AS total_count68,0 AS total_count69 FROM `account_log` AS a 
				 WHERE a.money<0 AND a.`bill_type`=3 AND account_type='违章扣分费' AND a.add_time>={$startdate} AND a.add_time<={$enddate}{$where2}";
		$sql_69="SELECT 0 AS total_count61,0 AS total_count62,0 AS total_count63,0 AS total_count64,0 AS total_count65,0 AS total_count66,0 AS total_count67,0 AS total_count68,COUNT(*) AS total_count69 FROM `account_log` AS a 
				 WHERE a.money<0 AND a.`bill_type`=3 AND account_type='一嗨多收费用' AND a.add_time>={$startdate} AND a.add_time<={$enddate}{$where2}";
		
		$sql="Select Sum(total_count61) as total_count61,Sum(total_count62) as total_count62,Sum(total_count63) as total_count63,Sum(total_count64) as total_count64,Sum(total_count65) as total_count65,Sum(total_count66) as total_count66,Sum(total_count67) as total_count67,Sum(total_count68) as total_count68,Sum(total_count69) as total_count69 ".
			   "From ({$sql_61} Union All {$sql_62} Union All {$sql_63} Union All {$sql_64} Union All {$sql_65} Union All {$sql_66} Union All {$sql_67} Union All {$sql_68} Union All {$sql_69}) kk ";
		
		$other_count = $model->getInfo($sql);
		
		//报销支出
		/*baoxiao_isOver 已经报销过的 
			baoxiao_roadQiao 过桥，锅路
			baoxiao_oil 加油费
			baoxiao_room 住宿费
			baoxiao_meal 餐费
			baoxiao_stopCar 停车费
			baoxiao_money 其他报销

		*/
		$sql="Select Sum(baoxiao_roadQiao+baoxiao_oil+baoxiao_room+baoxiao_meal+baoxiao_stopCar+baoxiao_money) as total_money7 From baoxiao Where baoxiao_isOver=1 AND baoxiao_isOverTime>={$startdate} AND baoxiao_isOverTime<={$enddate} and baoxiao_type not in('打款蒋政'){$where2}";
		$baoxiao = $model->getInfo($sql);
		//print_r($baoxiao);exit;
		$sql_10="Select Sum(baoxiao_roadQiao) as total_money11,Sum(baoxiao_oil) as total_money12,Sum(baoxiao_room) as total_money13,Sum(baoxiao_meal) as total_money14,Sum(baoxiao_stopCar) as total_money15,0 as total_money3 From baoxiao Where baoxiao_item=1 AND baoxiao_isOver=1 AND baoxiao_isOverTime>={$startdate} AND baoxiao_isOverTime<={$enddate}{$where2}";
		$baoxiao_1 = $model->getInfo($sql_10);
		$sql_20="Select a.typeid,a.typename,a.typeclass,b.total_money20 From baoxiao_type as a Left Join (Select baoxiao_type,Sum(baoxiao_money) as total_money20 From baoxiao Where baoxiao_item=2 AND baoxiao_isOver=1 AND baoxiao_isOverTime>={$startdate} AND baoxiao_isOverTime<={$enddate}{$where2} Group by baoxiao_type) as b ON a.typename=b.baoxiao_type";
		$baoxiao_2 = $model->getListBySql(0,200, $sql_20);

		$view  = $this->createView("operator/report/incomelist.html");
		
		$object = new stdClass();
		$object->income = $income;
		$object->beiyong=$beiyong;
		//$object->breaks=$breaks;
		$object->other = $other;
		$object->other_count = $other_count;
		$object->baoxiao=$baoxiao;
		$object->baoxiao_1=$baoxiao_1;
		$object->baoxiao_2=$baoxiao_2;
		$object->startdate = date("Y-m-d",$startdate);
		$object->enddate = date("Y-m-d",$enddate);
		$object->search_shop=$search_shop;
		$object->flag="";
		$object->url="list.php";
		$object->shoplist=$model->getListBySql(0,10,"Select shop_id,shop_name From shop Order by shop_order");
		
		$view->assign($object);
		$view->display();
	}










































	














































	function incomedetail()
	{
		//print_r("expression");exit;
		$sdate=Request::getVar('startdate','get');
		$edate=Request::getVar('enddate','get');
		$search_shop=Request::getVar('search_shop','get');
		$startdate=strtotime(Request::getVar('startdate','get'));
		$enddate=strtotime(Request::getVar('enddate','get')." 23:59:59");
		$where  =empty($search_shop)?"" : " AND c.paicheCounterShop={$search_shop}";
		$where3 =empty($search_shop)?"" : " AND e.month_CounterShop={$search_shop}";
		$where2 =empty($search_shop)?"" : " AND a.shop_id={$search_shop}";
		
		$model = $this->createModel("report",dirname( __FILE__ ));
		
		$sql_0="SELECT a.paiche_id,SUM(a.conv_money) AS conv_money,SUM(a.have_in_money) AS total_money FROM `paiche_charges` AS a INNER JOIN `charges` AS b ON a.`charge_id`=b.`charge_id` WHERE b.`charge_isback`=0 GROUP BY a.paiche_id";
		
		$sql_01="SELECT a.paiche_id,a.money FROM `account_log` AS a 
				 WHERE a.money<>0 AND a.`bill_type`=0 AND a.paiche_id>0 AND a.name in ('收租金','租车结账收款','收续租金','租车违约收违约金','租车违约退租金') 
				 AND a.add_time>={$startdate} AND a.add_time<={$enddate} ";
		//自驾
		
		$sql="SELECT a.id,a.paiche_id,a.money,a.name,a.add_time,c.paiche_contractNum,c.paiche_startDate,c.paiche_endDate,c.paiche_linker,e.shop_name 
				FROM `account_log` AS a Inner Join paiche As c On a.paiche_id=c.paiche_id 
				Left Join shop as e ON c.paiche_shopid=e.shop_id 
				WHERE a.money<>0 AND a.`bill_type`=0 AND a.paiche_id>0 AND a.name in ('收租金','租车结账收款','收续租金','租车违约收违约金','租车违约退租金') 
				AND a.add_time>={$startdate} AND a.add_time<={$enddate} AND c.paiche_type=1 AND (c.paiche_status>=0 OR c.paiche_status=-1){$where} Order by a.add_time";
		$List1=$model->getListBySql(0,20000, $sql);
		
		//临时代驾--现结
		
		$sql="SELECT a.id,a.paiche_id,a.money,a.name,a.add_time,c.paiche_contractNum,c.paiche_startDate,c.paiche_endDate,c.paiche_linker,ee.shop_name 
				FROM `account_log` AS a Inner Join paiche As c On a.paiche_id=c.paiche_id INNER JOIN settle AS e ON c.paiche_id=e.settlePaicheId 
				Left Join shop as ee ON c.paiche_shopid=ee.shop_id 
				WHERE a.money<>0 AND a.`bill_type`=0 AND a.paiche_id>0 AND a.name in ('收租金','租车结账收款','收续租金','租车违约收违约金','租车违约退租金') 
				AND a.add_time>={$startdate} AND a.add_time<={$enddate} AND c.paiche_type=2 AND (c.paiche_status>=0 OR c.paiche_status=-1){$where} ";// AND e.settle_lossescode=''
		$List2=$model->getListBySql(0,20000, $sql);
		
		//临时代驾--批结
		$sql="SELECT a.add_time,a.money,a.bill_code,c.client_name,bb.payment_name,d.bank_name 
				FROM `account_log` AS a Left Join paiche_month b ON a.bill_code = b.month_code Left Join client as c On a.client_id=c.client_id Left Join payments as bb ON a.payments_id=bb.payment_id Left Join banks as d on a.bank_id=d.bank_id 
				WHERE a.`bill_type`=5 AND a.name ='临时用车批量结账' AND a.add_time>={$startdate} AND a.add_time<={$enddate}".(empty($search_shop)?"" : " AND b.month_ShopID={$search_shop}")." Order by a.add_time";
		$List22=$model->getListBySql(0,20000, $sql);
		
		//调车结算
		$sql="SELECT a.add_time,a.money,a.bill_code,c.bro_name,b.payment_name,d.bank_name  
				 FROM `account_log` AS a Left Join brothers as c On a.brother_id=c.bro_id Left Join payments as b ON a.payments_id=b.payment_id Left Join banks as d on a.bank_id=d.bank_id 
				 WHERE a.`bill_type`=6 AND a.name ='调车结账' AND a.add_time>={$startdate} AND a.add_time<={$enddate}".(empty($search_shop)?"":" AND 9={$search_shop}")." Order by a.add_time";
		$List21=$model->getListBySql(0,20000, $sql);
		



		//长期
		$sql="SELECT a.id,a.paiche_id,a.money,a.name,a.add_time,c.paiche_contractNum,c.paiche_startDate,c.paiche_endDate,d.client_name 
				FROM `account_log` AS a Inner Join paiche As c On a.paiche_id=c.paiche_id Left Join client as d On c.paicheCom=d.client_id 
				WHERE a.money<>0 AND a.`bill_type`=0 AND (a.name ='长期用车月结' OR a.name ='租车违约收违约金' OR a.name ='收续租金' OR a.name ='收租金')
				AND a.add_time>={$startdate} AND a.add_time<={$enddate} AND c.paiche_type=3 AND (c.paiche_status>=0 OR c.paiche_status=-1){$where3} Order by a.add_time";
		
		$List3=$model->getListBySql(0,20000, $sql);
		




		
		$sql="SELECT a.id,a.paiche_id,a.money,a.name,a.add_time,c.paiche_contractNum,c.paiche_startDate,c.paiche_endDate,d.client_name 
				FROM `account_log` AS a Inner Join paiche As c On a.paiche_id=c.paiche_id Left Join client as d On a.client_id=d.client_id Inner Join paiche_month e ON c.paiche_id=e.monthPaicheId 
				WHERE a.money<>0 AND a.`bill_type`=0 AND (a.name ='长期用车月结' OR a.name ='租车违约收违约金')
				AND a.add_time>={$startdate} AND a.add_time<={$enddate} AND c.paiche_type=4 AND (c.paiche_status>=0 OR c.paiche_status=-1){$where3} Order by a.add_time";
		$List4=$model->getListBySql(0,20000, $sql);
		
		
		$sql="SELECT a.id,a.paiche_id,a.money,a.name,a.add_time,c.paiche_contractNum,c.paiche_startDate,c.paiche_endDate,d.client_name 
				FROM `account_log` AS a Inner Join paiche As c On a.paiche_id=c.paiche_id Left Join client as d On a.client_id=d.client_id Inner Join paiche_month e ON c.paiche_id=e.monthPaicheId 
				WHERE a.money<>0 AND a.`bill_type`=0 AND (a.name ='长期用车月结' OR a.name ='租车违约收违约金')
				AND a.add_time>={$startdate} AND a.add_time<={$enddate} AND c.paiche_type=5 AND (c.paiche_status>=0 OR c.paiche_status=-1){$where3} Order by a.add_time";

		$List5=$model->getListBySql(0,20000, $sql);
		
		//其他收入
		$sql="SELECT a.add_time,a.money,k.change_code as bill_code,k.bill_id as break_id,a.name,a.bill_id,b.payment_name,d.bank_name,a.account_type,e.shop_name 
				FROM `account_log` AS a LEFT JOIN account_change_log AS k ON a.bill_id=k.id Left Join payments as b ON a.payments_id=b.payment_id 
				Left Join banks as d on a.bank_id=d.bank_id Left Join shop as e ON a.shop_id=e.shop_id 
				WHERE a.`bill_type`=3 AND a.add_time>={$startdate} AND a.add_time<={$enddate}{$where2} Order by a.add_time";
		$List6=$model->getListBySql(0,20000, $sql);
		
		//押金收入
		$sql="SELECT a.id,a.paiche_id,a.money,a.name,a.add_time,c.paiche_contractNum,c.paiche_startDate,c.paiche_endDate,c.paiche_linker 
				 FROM `account_log` AS a Inner Join paiche As c On a.paiche_id=c.paiche_id
				 WHERE a.`bill_type`=0 AND a.paiche_id>0 AND a.name ='收押金' AND a.add_time>={$startdate} AND a.add_time<={$enddate}{$where}";
		$List7=$model->getListBySql(0,20000, $sql);
		//押金支出
		$sql="SELECT a.id,a.paiche_id,a.money,a.name,a.add_time,c.paiche_contractNum,c.paiche_startDate,c.paiche_endDate,c.paiche_linker 
				 FROM `account_log` AS a Inner Join paiche As c On a.paiche_id=c.paiche_id
				 WHERE a.`bill_type`=0 AND a.paiche_id>0 AND a.name like '%退押金%' AND a.add_time>={$startdate} AND a.add_time<={$enddate}{$where}";
		$List8=$model->getListBySql(0,20000, $sql);
		
		//备用金
		$sql_90="SELECT baoxiao_id as bill_id,baoxiao_code as bill_code,baoxiao_isOverTime as add_time,baoxiao_type as name,baoxiao_money as in_money,0 as out_money,baoxiao_remarks as remark From baoxiao Where baoxiao_isOver=1 AND baoxiao_type ='打款备用金'";
		$sql_91="SELECT a.bill_id,k.change_code as bill_code,a.add_time,a.name,0 as in_money,a.money as out_money,a.remark FROM account_log a LEFT JOIN account_change_log AS k ON a.bill_id=k.id WHERE a.bill_type=3 AND a.account_type='备用金归还'";
		$sql="SELECT * FROM ({$sql_90} Union All {$sql_91}) kk Order by add_time";
		$List9=$model->getListBySql(0,20000, $sql);
		
		//备用金借还
		$sql="SELECT a.id,a.money,a.name,a.add_time,k.borrow_code as bill_code,a.bill_id,c.emp_name,a.remark FROM account_log a LEFT JOIN borrow AS k ON a.bill_id=k.borrow_id LEFT JOIN `emp` AS c ON k.borrow_emp=c.emp_id WHERE bill_type=0 AND a.bank_id=17 AND a.name in ('员工借款出账','员工还款入帐')";
		$List10=$model->getListBySql(0,20000, $sql);
		
		$view  = $this->createView("operator/report/incomedetail.html");
		
		$object = new stdClass();
		$object->list1 = $List1;
		$object->list2 = $List2;
		$object->list22 = $List22;
		$object->list21 = $List21;
		$object->list3 = $List3;
		$object->list4 = $List4;
		$object->list5 = $List5;
		$object->list6 = $List6;
		$object->list7 = $List7;
		$object->list8 = $List8;
		$object->list9 = $List9;
		$object->list10 = $List10;
		$object->all_money =0;
		$object->b_type=Request::getVar('b_type','get');
		$object->sdate=$sdate;
		$object->edate=$edate;
		$view->assign($object);
		$view->display();
	}
	
	//业务员业绩统计
	function CounterManlist()
	{
		$search_user=Request::getVar('paicheCounterMan2','get');
		$sdate=Request::getVar('startdate','get');
		$edate=Request::getVar('enddate','get');
		$startdate=empty($sdate)? strtotime(date('Y-m-01', strtotime(date("Y-m-d")))):strtotime($sdate);
		$enddate=empty($edate)? time():strtotime($edate." 23:59:59");

		$model = $this->createModel("report",dirname( __FILE__ ));
		
		$sql_01="SELECT a.paiche_id,SUM(a.money) AS total_money FROM `account_log` AS a 
				 WHERE a.`bill_type`=0 AND a.paiche_id>0 AND a.name in ('收租金','租车结账收款','收续租金','租车违约收违约金','租车违约退租金') 
				 AND a.add_time>={$startdate} AND a.add_time<={$enddate} GROUP BY a.paiche_id";
		
		//临时自驾
		$sql_1="Select c.paicheCounterMan,SUM(d.total_money) AS total_money1,0 AS total_money2,0 AS total_money21,0 AS total_money22,0 AS total_money3,0 AS total_money4,0 AS total_money5 ".
			 "FROM `paiche` AS c INNER JOIN ({$sql_01}) d ON c.paiche_id=d.paiche_id ".
			 "Where c.paiche_type=1 AND (c.paiche_status>=0 OR c.paiche_status=-1) ".(empty($search_user)?"":"AND c.paicheCounterMan={$search_user}")." GROUP BY paicheCounterMan";
		//临时代驾--现结
		$sql_2="Select c.paicheCounterMan,0 AS total_money1,SUM(d.total_money) AS total_money2,0 AS total_money21,0 AS total_money22,0 AS total_money3,0 AS total_money4,0 AS total_money5 ".
			 "FROM `paiche` AS c INNER JOIN settle AS e ON c.paiche_id=e.settlePaicheId INNER JOIN ({$sql_01}) d ON c.paiche_id=d.paiche_id ".
			 "Where c.paiche_type=2 AND (c.paiche_status>=0 OR c.paiche_status=-1) ".(empty($search_user)?"":"AND c.paicheCounterMan={$search_user}")." GROUP BY paicheCounterMan";// AND e.settle_lossescode=''
				
		//调车结账
		$sql_21="Select b.month_CounterMan as paicheCounterMan,0 AS total_money1,0 AS total_money2,SUM(a.money) AS total_money21,0 AS total_money22,0 AS total_money3,0 AS total_money4,0 AS total_money5 
				From account_log a LEFT JOIN paiche_month b ON a.bill_code = b.month_code 
				Where a.bill_type=6 AND a.name='调车结账' AND b.month_brotherid>0 AND a.add_time>={$startdate} AND a.add_time<={$enddate} ".(empty($search_user)?"":"AND b.month_CounterMan={$search_user}")." GROUP BY b.month_CounterMan";
		//临时带驾--批量结账
		$sql_22="Select b.month_CounterMan as paicheCounterMan,0 AS total_money1,0 AS total_money2,0 AS total_money21,SUM(a.money) AS total_money22,0 AS total_money3,0 AS total_money4,0 AS total_money5 
				From account_log a LEFT JOIN paiche_month b ON a.bill_code = b.month_code 
				Where a.bill_type=5 AND a.name='临时用车批量结账' AND b.month_clientid>0 AND a.add_time>={$startdate} AND a.add_time<={$enddate} ".(empty($search_user)?"":"AND b.month_CounterMan={$search_user}")." GROUP BY b.month_CounterMan";
			
		//长期
		$where="AND c.paiche_status>=0 ".(empty($search_user)?"":"AND e.month_CounterMan={$search_user}");
		$sql_02="SELECT a.paiche_id,SUM(a.money) AS total_money FROM `account_log` AS a 
				 WHERE a.`bill_type`=0 AND a.paiche_id>0 AND a.name ='长期用车月结' 
				 AND a.add_time>={$startdate} AND a.add_time<={$enddate} GROUP BY a.paiche_id";
		
		$sql_3="Select e.month_CounterMan as paicheCounterMan,0 AS total_money1,0 AS total_money2,0 AS total_money21,0 AS total_money22,SUM(d.total_money) AS total_money3,0 AS total_money4,0 AS total_money5 ".
			 "FROM `paiche` AS c INNER JOIN ({$sql_02}) d ON c.paiche_id=d.paiche_id Inner Join paiche_month e ON c.paiche_id=e.monthPaicheId ".
			 "Where c.paiche_type=3 {$where} GROUP BY paicheCounterMan";
		$sql_4="Select e.month_CounterMan as paicheCounterMan,0 AS total_money1,0 AS total_money2,0 AS total_money21,0 AS total_money22,0 AS total_money3,SUM(d.total_money) AS total_money4,0 AS total_money5 ".
			 "FROM `paiche` AS c INNER JOIN ({$sql_02}) d ON c.paiche_id=d.paiche_id Inner Join paiche_month e ON c.paiche_id=e.monthPaicheId ".
			 "Where c.paiche_type=4 {$where} GROUP BY paicheCounterMan";
		$sql_5="Select e.month_CounterMan as paicheCounterMan,0 AS total_money1,0 AS total_money2,0 AS total_money21,0 AS total_money22,0 AS total_money3,0 AS total_money4,SUM(d.total_money) AS total_money5 ".
			 "FROM `paiche` AS c INNER JOIN ({$sql_02}) d ON c.paiche_id=d.paiche_id Inner Join paiche_month e ON c.paiche_id=e.monthPaicheId ".
			 "Where c.paiche_type=5 {$where} GROUP BY paicheCounterMan";
		
		$sql_6="Select kk.paicheCounterMan,Sum(total_money1) as total_money1,Sum(total_money2+total_money22) as total_money2,Sum(total_money21) as total_money21,Sum(total_money3) as total_money3,".
			   "Sum(total_money4) as total_money4,Sum(total_money5) as total_money5,".
			   "Sum(total_money1+total_money2+total_money22+total_money21+total_money3+total_money4+total_money5) as total_money From ({$sql_1} Union All {$sql_2} Union All {$sql_22} Union All {$sql_21} Union All {$sql_3} Union All {$sql_4} Union All {$sql_5}) kk Group by kk.paicheCounterMan";
		
		$sql="SELECT a.emp_id,a.emp_name,c.total_money1,c.total_money2,c.total_money21,c.total_money3,c.total_money4,c.total_money5,c.total_money ".
			 "FROM ({$sql_6}) AS c Left Join emp as a ON c.paicheCounterMan=a.emp_id Where c.total_money<>0 Order by a.emp_id,a.emp_name";
		
		$List = $model->getListBySql(0,200, $sql);
		
		$view  = $this->createView("operator/report/countermanlist.html");
		
		$object = new stdClass();
		$object->list = $List;
		$object->startdate = date("Y-m-d",$startdate);
		$object->enddate = date("Y-m-d",$enddate);
		$object->all_money =array();
		$object->search_user=$search_user;
		$view->assign($object);
		$view->display();
	}


	function CounterMandetail()
	{
		//print_r("expression");exit;
		$search_user=Request::getVar('emp_id','get');
		$sdate=Request::getVar('startdate','get');
		$edate=Request::getVar('enddate','get');
		$startdate=strtotime(Request::getVar('startdate','get'));
		$enddate=strtotime(Request::getVar('enddate','get')." 23:59:59");
		
		$model = $this->createModel("report",dirname( __FILE__ ));
		$emp = $model->getInfo("Select emp_name From emp Where emp_id={$search_user}");
				
		$sql_01="SELECT a.paiche_id,a.money FROM `account_log` AS a 
				 WHERE a.money<>0 AND a.`bill_type`=0 AND a.paiche_id>0 AND a.name in ('收租金','租车结账收款','收续租金','租车违约收违约金','租车违约退租金') 
				 AND a.add_time>={$startdate} AND a.add_time<={$enddate} ";
		
		//自驾
		
		if($this->checkPrivilege($this->arr_type_action['1'])){
		$sql="SELECT a.id,a.paiche_id,a.money,a.name,a.add_time,c.paiche_contractNum,c.paiche_startDate,c.paiche_endDate,c.paiche_linker 
				FROM `account_log` AS a Inner Join paiche As c On a.paiche_id=c.paiche_id
				WHERE a.money<>0 AND a.`bill_type`=0 AND a.paiche_id>0 AND a.name in ('收租金','租车结账收款','收续租金','租车违约收违约金','租车违约退租金') 
				AND a.add_time>={$startdate} AND a.add_time<={$enddate} AND c.paiche_type=1 AND (c.paiche_status>=0 OR c.paiche_status=-1) AND c.paicheCounterMan={$search_user} Order by a.add_time";
		$List1=$model->getListBySql(0,20000, $sql);
		}
		//带驾现结
		if($this->checkPrivilege($this->arr_type_action['2'])){
		$sql="SELECT a.id,a.paiche_id,a.money,a.name,a.add_time,c.paiche_contractNum,c.paiche_startDate,c.paiche_endDate,c.paiche_linker 
				FROM `account_log` AS a Inner Join paiche As c On a.paiche_id=c.paiche_id INNER JOIN settle AS e ON c.paiche_id=e.settlePaicheId
				WHERE a.money<>0 AND a.`bill_type`=0 AND a.paiche_id>0 AND a.name in ('收租金','租车结账收款','收续租金','租车违约收违约金','租车违约退租金') 
				AND a.add_time>={$startdate} AND a.add_time<={$enddate} AND c.paiche_type=2 AND (c.paiche_status>=0 OR c.paiche_status=-1) AND c.paicheCounterMan={$search_user} Order by a.add_time";// AND e.settle_lossescode=''
		$List2=$model->getListBySql(0,20000, $sql);
		//代驾批结
		$sql="Select a.id,a.paiche_id,a.money,a.name,a.add_time,a.bill_code,c.client_name 
			  From account_log a LEFT JOIN paiche_month b ON a.bill_code = b.month_code Left Join client as c On a.client_id=c.client_id
			  Where a.money<>0 AND a.bill_type=5 AND a.name='临时用车批量结账' AND a.add_time>={$startdate} AND a.add_time<={$enddate} AND b.month_clientid>0 AND b.month_CounterMan={$search_user} Order by a.add_time";
		$List22=$model->getListBySql(0,20000, $sql);
		
		//调车结算
		$sql="Select a.id,a.paiche_id,a.money,a.name,a.add_time,a.bill_code,c.bro_name 
			  From account_log a LEFT JOIN paiche_month b ON a.bill_code = b.month_code Left Join brothers as c On a.brother_id=c.bro_id
			  Where a.money<>0 AND a.bill_type=6 AND a.name='调车结账' AND a.add_time>={$startdate} AND a.add_time<={$enddate} AND b.month_brotherid>0 AND b.month_CounterMan={$search_user} Order by a.add_time";
		$List21=$model->getListBySql(0,20000, $sql);
		}
		//长期
		$where="AND a.money<>0 AND a.`bill_type`=0 AND a.name ='长期用车月结' AND a.add_time>={$startdate} AND a.add_time<={$enddate} AND e.month_CounterMan={$search_user}";
		if($this->checkPrivilege($this->arr_type_action['3'])){
		$sql="SELECT a.id,a.paiche_id,a.money,a.name,a.add_time,c.paiche_contractNum,c.paiche_startDate,c.paiche_endDate,c.paiche_linker 
				FROM `account_log` AS a Inner Join paiche As c On a.paiche_id=c.paiche_id Inner Join paiche_month e ON c.paiche_id=e.monthPaicheId 
				WHERE c.paiche_type=3 {$where} Order by a.add_time";
		$List3=$model->getListBySql(0,20000, $sql);
		}
		if($this->checkPrivilege($this->arr_type_action['4'])){
		$sql="SELECT a.id,a.paiche_id,a.money,a.name,a.add_time,c.paiche_contractNum,c.paiche_startDate,c.paiche_endDate,c.paiche_linker 
				FROM `account_log` AS a Inner Join paiche As c On a.paiche_id=c.paiche_id Inner Join paiche_month e ON c.paiche_id=e.monthPaicheId 
				WHERE c.paiche_type=4 {$where} Order by a.add_time";
		$List4=$model->getListBySql(0,20000, $sql);
		}
		if($this->checkPrivilege($this->arr_type_action['5'])){
		$sql="SELECT a.id,a.paiche_id,a.money,a.name,a.add_time,c.paiche_contractNum,c.paiche_startDate,c.paiche_endDate,c.paiche_linker 
				FROM `account_log` AS a Inner Join paiche As c On a.paiche_id=c.paiche_id Inner Join paiche_month e ON c.paiche_id=e.monthPaicheId 
				WHERE c.paiche_type=5 {$where} Order by a.add_time";
		$List5=$model->getListBySql(0,20000, $sql);
		}
		$view  = $this->createView("operator/report/achievedetail.html");
		
		$object = new stdClass();
		$object->list1 = $List1;
		$object->list2 = $List2;
		$object->list21 = $List21;
		$object->list22 = $List22;
		$object->list3 = $List3;
		$object->list4 = $List4;
		$object->list5 = $List5;
		$object->all_money =0;
		$object->search_name=$emp['emp_name'];
		$object->sdate=$sdate;
		$object->edate=$edate;
		$view->assign($object);
		$view->display();
	}
	


	//门店业绩统计
	function achievelist()
	{
		
		$search_shop=Request::getVar('search_shop','get');
		
		$sdate=Request::getVar('startdate','get');
		$edate=Request::getVar('enddate','get');
		$startdate=empty($sdate)? strtotime(date('Y-m-01', strtotime(date("Y-m-d")))):strtotime($sdate);
		$enddate=empty($edate)? time():strtotime($edate." 23:59:59");

		$model = $this->createModel("report",dirname( __FILE__ ));
		
		$sql_01="SELECT a.paiche_id,SUM(a.money) AS total_money FROM `account_log` AS a 
				 WHERE a.`bill_type`=0 AND a.paiche_id>0 AND a.name in ('收租金','租车结账收款','收续租金','租车违约收违约金','租车违约退租金') 
				 AND a.add_time>={$startdate} AND a.add_time<={$enddate} GROUP BY a.paiche_id";
		
		//临时自驾
		$sql_1="Select c.paicheCounterShop,SUM(d.total_money) AS total_money1,0 as total_money11,0 AS total_money2,0 AS total_money21,0 AS total_money22,0 AS total_money3,0 AS total_money4,0 AS total_money5 ".
			 "FROM `paiche` AS c INNER JOIN ({$sql_01}) d ON c.paiche_id=d.paiche_id ".
			 "Where c.paiche_type=1 AND (c.paiche_status>=0 OR c.paiche_status=-1) ".(empty($search_shop)?"":"AND c.paicheCounterShop={$search_shop}")." GROUP BY paicheCounterShop";

		//自驾优惠金额
		$sql_11="Select shop_id as paicheCounterShop,0 AS total_money1,Sum(baoxiao_money) as total_money11,0 AS total_money2,0 AS total_money21,0 AS total_money22,0 AS total_money3,0 AS total_money4,0 AS total_money5 ".
			 "From baoxiao Where baoxiao_item=2 AND baoxiao_type='微信活动返现' AND baoxiao_isOver=1 AND baoxiao_isOverTime>={$startdate} AND baoxiao_isOverTime<={$enddate}".(empty($search_shop)?"":" AND shop_id={$search_shop}")." GROUP BY shop_id";
		
		//临时代驾--现结
		$sql_2="Select c.paicheCounterShop,0 AS total_money1,0 as total_money11,SUM(d.total_money) AS total_money2,0 AS total_money21,0 AS total_money22,0 AS total_money3,0 AS total_money4,0 AS total_money5 ".
			 "FROM `paiche` AS c INNER JOIN settle AS e ON c.paiche_id=e.settlePaicheId INNER JOIN ({$sql_01}) d ON c.paiche_id=d.paiche_id ".
			 "Where c.paiche_type=2 AND (c.paiche_status>=0 OR c.paiche_status=-1) ".(empty($search_shop)?"":" AND c.paicheCounterShop={$search_shop}")." GROUP BY paicheCounterShop";// AND e.settle_lossescode=''
		//调车结账
		$sql_21="Select 9 as paicheCounterShop,0 AS total_money1,0 as total_money11,0 AS total_money2,SUM(a.money) AS total_money21,0 AS total_money22,0 AS total_money3,0 AS total_money4,0 AS total_money5 
				From account_log a LEFT JOIN paiche_month b ON a.bill_code = b.month_code 
				Where a.bill_type=6 AND a.name='调车结账' AND b.month_brotherid>0 AND a.add_time>={$startdate} AND a.add_time<={$enddate} ".(empty($search_shop)?"":" AND 9={$search_shop}")." ";
		//临时带驾--批量结账 按服务门店
		$sql_22="Select b.month_ShopID as paicheCounterShop,0 AS total_money1,0 as total_money11,0 AS total_money2,0 AS total_money21,SUM(a.money) AS total_money22,0 AS total_money3,0 AS total_money4,0 AS total_money5 
				From account_log a LEFT JOIN paiche_month b ON a.bill_code = b.month_code 
				Where a.bill_type=5 AND a.name='临时用车批量结账' AND b.month_clientid>0 AND a.add_time>={$startdate} AND a.add_time<={$enddate} ".(empty($search_shop)?"":" AND b.month_ShopID={$search_shop}")." GROUP BY b.month_ShopID";
		//长期
		$where="AND c.paiche_status>=0 ".(empty($search_shop)?"":"AND e.month_CounterShop={$search_shop}");
		$sql_02="SELECT a.paiche_id,SUM(a.money) AS total_money FROM `account_log` AS a 
				 WHERE a.`bill_type`=0 AND a.paiche_id>0 AND a.name ='长期用车月结' 
				 AND a.add_time>={$startdate} AND a.add_time<={$enddate} GROUP BY a.paiche_id";
		
		$sql_3="Select e.month_CounterShop as paicheCounterShop,0 AS total_money1,0 as total_money11,0 AS total_money2,0 AS total_money21,0 AS total_money22,SUM(d.total_money) AS total_money3,0 AS total_money4,0 AS total_money5 ".
			 "FROM `paiche` AS c INNER JOIN ({$sql_02}) d ON c.paiche_id=d.paiche_id Inner Join paiche_month e ON c.paiche_id=e.monthPaicheId ".
			 "Where c.paiche_type=3 {$where} GROUP BY e.month_CounterShop";
		$sql_4="Select e.month_CounterShop as paicheCounterShop,0 AS total_money1,0 as total_money11,0 AS total_money2,0 AS total_money21,0 AS total_money22,0 AS total_money3,SUM(d.total_money) AS total_money4,0 AS total_money5 ".
			 "FROM `paiche` AS c INNER JOIN ({$sql_02}) d ON c.paiche_id=d.paiche_id Inner Join paiche_month e ON c.paiche_id=e.monthPaicheId ".
			 "Where c.paiche_type=4 {$where} GROUP BY e.month_CounterShop";
		$sql_5="Select e.month_CounterShop as paicheCounterShop,0 AS total_money1,0 as total_money11,0 AS total_money2,0 AS total_money21,0 AS total_money22,0 AS total_money3,0 AS total_money4,SUM(d.total_money) AS total_money5 ".
			 "FROM `paiche` AS c INNER JOIN ({$sql_02}) d ON c.paiche_id=d.paiche_id Inner Join paiche_month e ON c.paiche_id=e.monthPaicheId ".
			 "Where c.paiche_type=5 {$where} GROUP BY e.month_CounterShop";
		
		$sql_6="Select kk.paicheCounterShop,Sum(total_money1) as total_money1,Sum(total_money11) as total_money11,Sum(total_money2) as total_money2,Sum(total_money21) as total_money21,Sum(total_money22) as total_money22,Sum(total_money3) as total_money3,".
			   "Sum(total_money4) as total_money4,Sum(total_money5) as total_money5,".
			   "Sum(total_money1-total_money11+total_money2+total_money22+total_money21+total_money3+total_money4+total_money5) as total_money From ({$sql_1} Union All {$sql_11} Union All {$sql_2} Union All {$sql_22} Union All {$sql_21} Union All {$sql_3} Union All {$sql_4} Union All {$sql_5}) kk Group by kk.paicheCounterShop";
		

		$sql="SELECT a.shop_id,a.shop_name,c.total_money1,c.total_money11,c.total_money2,c.total_money21,c.total_money22,c.total_money3,c.total_money4,c.total_money5,c.total_money ".
			 "FROM shop as a Left Join ({$sql_6}) AS c ON c.paicheCounterShop=a.shop_id  Order by a.shop_order";
		
		$List = $model->getListBySql(0,200, $sql);
		
		$view  = $this->createView("operator/report/achievelist.html");
		
		$object = new stdClass();
		$object->list = $List;
		$object->shoplist=$model->getListBySql(0,200, "Select shop_id,shop_name From shop");
		$object->startdate = date("Y-m-d",$startdate);
		$object->enddate = date("Y-m-d",$enddate);
		$object->all_money =array();
		$object->search_shop=$search_shop;
		$view->assign($object);
		$view->display();
	}
	function achievedetail()
	{
		$search_shop=Request::getVar('shop_id','get');
		$sdate=Request::getVar('startdate','get');
		$edate=Request::getVar('enddate','get');
		$startdate=strtotime(Request::getVar('startdate','get'));
		$enddate=strtotime(Request::getVar('enddate','get')." 23:59:59");
		
		$model = $this->createModel("report",dirname( __FILE__ ));
		$emp = $model->getInfo("Select shop_name From shop Where shop_id={$search_shop}");
				
		$sql_01="SELECT a.paiche_id,a.money FROM `account_log` AS a 
				 WHERE a.money<>0 AND a.`bill_type`=0 AND a.paiche_id>0 AND a.name in ('收租金','租车结账收款','收续租金','租车违约收违约金','租车违约退租金') 
				 AND a.add_time>={$startdate} AND a.add_time<={$enddate} ";
		
		//自驾
		if($this->checkPrivilege($this->arr_type_action['1'])){
		$sql="SELECT a.id,a.paiche_id,a.money,a.name,a.add_time,c.paiche_contractNum,c.paiche_startDate,c.paiche_endDate,c.paiche_linker 
				FROM `account_log` AS a Inner Join paiche As c On a.paiche_id=c.paiche_id
				WHERE a.money<>0 AND a.`bill_type`=0 AND a.paiche_id>0 AND a.name in ('收租金','租车结账收款','收续租金','租车违约收违约金','租车违约退租金') 
				AND a.add_time>={$startdate} AND a.add_time<={$enddate} AND c.paiche_type=1 AND (c.paiche_status>=0 OR c.paiche_status=-1) AND c.paicheCounterShop={$search_shop} Order by a.add_time";
		$List1=$model->getListBySql(0,20000, $sql);
		}
		//优惠券
		$sql="SELECT a.*,c.emp_name,kk.payment_name,kk.bank_name 
			  From baoxiao as a LEFT JOIN `emp` AS c ON a.baoxiao_emp=c.emp_id
			  Inner Join (Select a.bill_id,d.payment_name,b.bank_name From account_log as a LEFT JOIN `banks` AS b ON a.bank_id=b.bank_id 
			  LEFT JOIN `payments` AS d ON a.payments_id=d.payment_id Where bill_type=1) as kk ON a.baoxiao_id=kk.bill_id 
			  Where baoxiao_type='微信活动返现' AND baoxiao_isOver=1 AND baoxiao_isOverTime>={$startdate} AND baoxiao_isOverTime<={$enddate} AND a.shop_id={$search_shop} Order by baoxiao_isOverTime";
		$List11=$model->getListBySql(0,20000, $sql);
		//带驾现结
		if($this->checkPrivilege($this->arr_type_action['2'])){
		$sql="SELECT a.id,a.paiche_id,a.money,a.name,a.add_time,c.paiche_contractNum,c.paiche_startDate,c.paiche_endDate,c.paiche_linker 
				FROM `account_log` AS a Inner Join paiche As c On a.paiche_id=c.paiche_id INNER JOIN settle AS e ON c.paiche_id=e.settlePaicheId
				WHERE a.money<>0 AND a.`bill_type`=0 AND a.paiche_id>0 AND a.name in ('收租金','租车结账收款','收续租金','租车违约收违约金','租车违约退租金') 
				AND a.add_time>={$startdate} AND a.add_time<={$enddate} AND c.paiche_type=2 AND (c.paiche_status>=0 OR c.paiche_status=-1) AND c.paicheCounterShop={$search_shop} Order by a.add_time";// AND e.settle_lossescode=''
		$List2=$model->getListBySql(0,20000, $sql);
		//代驾批结
		$sql="Select a.id,a.paiche_id,a.money,a.name,a.add_time,a.bill_code,c.client_name 
			  From account_log a LEFT JOIN paiche_month b ON a.bill_code = b.month_code Left Join client as c On a.client_id=c.client_id
			  Where a.money<>0 AND a.bill_type=5 AND a.name='临时用车批量结账' AND a.add_time>={$startdate} AND a.add_time<={$enddate} AND b.month_clientid>0 AND b.month_ShopID={$search_shop} Order by a.add_time";
		$List22=$model->getListBySql(0,20000, $sql);
		
		//调车结算
		$sql="Select a.id,a.paiche_id,a.money,a.name,a.add_time,a.bill_code,c.bro_name 
			  From account_log a LEFT JOIN paiche_month b ON a.bill_code = b.month_code Left Join brothers as c On a.brother_id=c.bro_id
			  Where a.money<>0 AND a.bill_type=6 AND a.name='调车结账' AND a.add_time>={$startdate} AND a.add_time<={$enddate} AND b.month_brotherid>0 AND 9={$search_shop} Order by a.add_time";
		$List21=$model->getListBySql(0,20000, $sql);
		}
		//长期
		$where="AND a.money<>0 AND a.`bill_type`=0 AND a.name ='长期用车月结' AND a.add_time>={$startdate} AND a.add_time<={$enddate} AND e.month_CounterShop={$search_shop}";
		if($this->checkPrivilege($this->arr_type_action['3'])){
		$sql="SELECT a.id,a.paiche_id,a.money,a.name,a.add_time,c.paiche_contractNum,c.paiche_startDate,c.paiche_endDate,c.paiche_linker,cc.client_name 
				FROM `account_log` AS a Inner Join paiche As c On a.paiche_id=c.paiche_id Inner Join paiche_month e ON c.paiche_id=e.monthPaicheId 
				Left Join client as cc On a.client_id=cc.client_id
				WHERE c.paiche_type=3 {$where} Order by a.add_time";
		$List3=$model->getListBySql(0,20000, $sql);
		}
		if($this->checkPrivilege($this->arr_type_action['4'])){
		$sql="SELECT a.id,a.paiche_id,a.money,a.name,a.add_time,c.paiche_contractNum,c.paiche_startDate,c.paiche_endDate,c.paiche_linker,cc.client_name 
				FROM `account_log` AS a Inner Join paiche As c On a.paiche_id=c.paiche_id Inner Join paiche_month e ON c.paiche_id=e.monthPaicheId 
				Left Join client as cc On a.client_id=cc.client_id
				WHERE c.paiche_type=4 {$where} Order by a.add_time";
		$List4=$model->getListBySql(0,20000, $sql);
		}
		if($this->checkPrivilege($this->arr_type_action['5'])){
		$sql="SELECT a.id,a.paiche_id,a.money,a.name,a.add_time,c.paiche_contractNum,c.paiche_startDate,c.paiche_endDate,c.paiche_linker,cc.client_name 
				FROM `account_log` AS a Inner Join paiche As c On a.paiche_id=c.paiche_id Inner Join paiche_month e ON c.paiche_id=e.monthPaicheId 
				Left Join client as cc On a.client_id=cc.client_id
				WHERE c.paiche_type=5 {$where} Order by a.add_time";
		$List5=$model->getListBySql(0,20000, $sql);
		}
		$view  = $this->createView("operator/report/achievedetail.html");
		
		$object = new stdClass();
		$object->list1 = $List1;
		$object->list11 = $List11;
		$object->list2 = $List2;
		$object->list21 = $List21;
		$object->list22 = $List22;
		$object->list3 = $List3;
		$object->list4 = $List4;
		$object->list5 = $List5;
		$object->all_money =0;
		$object->search_name=$emp['shop_name'];
		$object->sdate=$sdate;
		$object->edate=$edate;
		$view->assign($object);
		$view->display();
	}
	//油耗统计
	function fuelconsump()
	{
		$sdate=Request::getVar('startdate','get');
		$edate=Request::getVar('enddate','get');
		$title=Request::getVar('title','get');
		$startdate=empty($sdate)? strtotime(date('Y-m-01', strtotime(date("Y-m-d")))):strtotime($sdate);
		$enddate=empty($edate)? time():strtotime($edate." 23:59:59");
		
		$model = $this->createModel("report",dirname( __FILE__ ));
		//总公里数_临时
		//$sql_1="Select c.paicheCar AS car_id,SUM(settle_totalKm) AS all_km,0 AS total_km,0 AS gps_km,0 AS refuel_number1,0 AS refuel_sum1,0 AS refuel_number2,0 as refuel_sum2 
		//		FROM paiche AS c INNER JOIN settle AS e ON c.paiche_id=e.settlePaicheId 
		//		Where paiche_status=1 AND c.paiche_type in (1,2) and settle_totalKm>0 and settle_endDate>={$startdate} AND settle_endDate<={$enddate} GROUP BY c.paicheCar";
		
		$sql_1="Select c.paicheCar AS car_id, MIN(settle_startKm) AS settle_startKm, MAX(settle_endKm) AS settle_endKm
				FROM paiche AS c INNER JOIN settle AS e ON c.paiche_id=e.settlePaicheId 
				Where paiche_status=1 AND c.paiche_type in (1,2) and settle_totalKm>0 and settle_endDate>={$startdate} AND settle_endDate<={$enddate} 
				GROUP BY c.paicheCar ";
		
		//总公里数_长期
		//$sql_2="Select c.paicheCar AS car_id,SUM(m.settle_totalKm) AS all_km,0 AS total_km,0 AS gps_km,0 AS refuel_number1,0 AS refuel_sum1,0 AS refuel_number2,0 as refuel_sum2 
		//		FROM `paiche` AS c INNER JOIN settle AS e ON c.paiche_id=e.settlePaicheId INNER JOIN `paiche_month` AS m ON c.paiche_id=m.monthPaicheId 
		//		Where c.paiche_type in (3,4,5) AND c.paiche_status>0 AND m.settle_totalKm>0 AND e.settle_endDate>={$startdate} AND e.settle_endDate<={$enddate} GROUP BY c.paicheCar";
		$sql_2="Select c.paicheCar AS car_id,MIN(e.settle_startKm) AS settle_startKm, MAX(e.settle_endKm) AS settle_endKm 
				FROM `paiche` AS c INNER JOIN settle AS e ON c.paiche_id=e.settlePaicheId INNER JOIN `paiche_month` AS m ON c.paiche_id=m.monthPaicheId 
				Left Join paiche_drive as k On c.paiche_id=k.drivePaicheId
				Where c.paiche_type in (3,4,5) AND c.paiche_status>0 AND m.settle_totalKm>0 AND e.settle_endDate>={$startdate} AND e.settle_endDate<={$enddate} 
				GROUP BY c.paicheCar ";
		$sql_0="Select car_id, MAX(settle_endKm)-MIN(settle_startKm) AS all_km,0 AS total_1_km,0 AS total_2_km,0 AS gps_km,0 AS refuel_number1,0 AS refuel_sum1,0 AS refuel_number2,0 as refuel_sum2  From ({$sql_1} Union All {$sql_2}) as kk Group by car_id HAVING MIN( settle_startKm ) <>0 AND MAX( settle_endKm ) <>0";
				
		//自驾公里数_临时
		$sql_3="Select c.paicheCar AS car_id,0 AS all_km,SUM(settle_totalKm) AS total_1_km,0 AS total_2_km,0 AS gps_km,0 AS refuel_number1,0 AS refuel_sum1,0 AS refuel_number2,0 as refuel_sum2 
				FROM paiche AS c INNER JOIN settle AS e ON c.paiche_id=e.settlePaicheId 
				Where paiche_status=1 AND c.paiche_type =1 and settle_totalKm>0 and settle_endDate>={$startdate} AND settle_endDate<={$enddate} GROUP BY c.paicheCar";
		
		//自驾公里数_长期
		$sql_4="Select c.paicheCar AS car_id,0 AS all_km,SUM(m.settle_totalKm) AS total_1_km,0 AS total_2_km,0 AS gps_km,0 AS refuel_number1,0 AS refuel_sum1,0 AS refuel_number2,0 as refuel_sum2 
				FROM `paiche` AS c INNER JOIN settle AS e ON c.paiche_id=e.settlePaicheId INNER JOIN `paiche_month` AS m ON c.paiche_id=m.monthPaicheId 
				Where c.paiche_type =3 AND c.paiche_status>0 AND m.settle_totalKm>0 AND e.settle_endDate>={$startdate} AND e.settle_endDate<={$enddate} GROUP BY c.paicheCar";
		
		//带驾公里数_临时
		$sql_3="Select c.paicheCar AS car_id,0 AS all_km,0 AS total_1_km,SUM(settle_totalKm) AS total_2_km,0 AS gps_km,0 AS refuel_number1,0 AS refuel_sum1,0 AS refuel_number2,0 as refuel_sum2 
				FROM paiche AS c INNER JOIN settle AS e ON c.paiche_id=e.settlePaicheId 
				Where paiche_status=1 AND c.paiche_type =2 and settle_totalKm>0 and settle_endDate>={$startdate} AND settle_endDate<={$enddate} GROUP BY c.paicheCar";
		
		//带驾公里数_长期
		$sql_4="Select c.paicheCar AS car_id,0 AS all_km,0 AS total_1_km,SUM(m.settle_totalKm) AS total_2_km,0 AS gps_km,0 AS refuel_number1,0 AS refuel_sum1,0 AS refuel_number2,0 as refuel_sum2 
				FROM `paiche` AS c INNER JOIN settle AS e ON c.paiche_id=e.settlePaicheId INNER JOIN `paiche_month` AS m ON c.paiche_id=m.monthPaicheId 
				Where c.paiche_type in (4,5) AND c.paiche_status>0 AND m.settle_totalKm>0 AND e.settle_endDate>={$startdate} AND e.settle_endDate<={$enddate} GROUP BY c.paicheCar";
		
		
		//油卡加油
		$sql_5="SELECT car_id,0 AS all_km,0 AS total_1_km,0 AS total_2_km,SUM(refuel_km) AS gps_km,SUM(refuel_number) AS refuel_number1,SUM(refuel_money) AS refuel_sum1,0 AS refuel_number2,0 as refuel_sum2 FROM refuel WHERE refuel_date>={$startdate} AND refuel_date<={$enddate} GROUP BY car_id";
		//现金加油
		$sql_6="SELECT b.paicheCar AS car_id,0 AS all_km,0 AS total_1_km,0 AS total_2_km,0 AS gps_km,0 AS refuel_number1,0 AS refuel_sum1,SUM(a.baoxiao_oil_number) AS refuel_number2,SUM(a.baoxiao_oil) AS refuel_sum2 FROM baoxiao AS a INNER JOIN paiche AS b ON a.baoxiaoPaicheId=b.paiche_id 
				WHERE a.baoxiao_item=1 AND a.baoxiao_oil_number>0 AND a.baoxiao_isAgree=1 AND a.baoxiao_oil_date>={$startdate} AND a.baoxiao_oil_date<={$enddate} GROUP BY b.paicheCar";
		
		$sql_7="Select kk.car_id,Sum(all_km) as all_km,Sum(total_1_km) as total_1_km,Sum(total_2_km) as total_2_km,SUM(gps_km) AS gps_km,Sum(refuel_number1) as refuel_number1,Sum(refuel_sum1) as refuel_sum1,".
			   "Sum(refuel_number2) as refuel_number2,Sum(refuel_sum2) as refuel_sum2 ".
			   "From ({$sql_0} Union All {$sql_3} Union All {$sql_4} Union All {$sql_5} Union All {$sql_6}) kk Group by kk.car_id";
		
		$sql="SELECT a.car_num,d.all_km,d.total_1_km,d.total_2_km,d.gps_km,d.refuel_number1,d.refuel_sum1,d.refuel_number2,d.refuel_sum2 
				FROM `car` AS a LEFT JOIN ({$sql_7}) AS d ON a.car_id=d.car_id 
				WHERE a.car_recycle!=1 AND a.car_oilcard=1 AND a.car_num like '%{$title}%'";
		
		$List = $model->getListBySql(0,200, $sql);
		$view  = $this->createView("operator/report/fuellist.html");
		
		$object = new stdClass();
		
		$object->list = $List;
		$object->startdate = date("Y-m-d",$startdate);
		$object->enddate = date("Y-m-d",$enddate);
		$object->total1 =0;
		$object->total2 =0;
		$object->total3 =0;
		$object->total4 =0;
		$object->total5 =0;
		$object->total6 =0;
		$object->total7 =0;
		$view->assign($object);
		$view->display();
		
	}

	function depositlist()
	{
		$firstop = Request::getVar('firstop','get');
        $search_startDate=Request::getVar('search_startDate','get');
		$search_endDate=Request::getVar('search_endDate','get');
		$paiche_linker=Request::getVar('paiche_linker','get');
        $paiche_contractNum=Request::getVar('paiche_contractNum','get');
        $busi_id = Request::getVar('b_id','get');
		if (empty($busi_id)) $busi_id = 0;
        
		$model = $this->createModel("report",dirname( __FILE__ ));
		
		$base_url = "depositlist.php?";
        $where = " a.paiche_recycle!=1 AND a.paiche_status>=0 AND ".($busi_id>0? " a.paiche_type = {$busi_id} ": " a.paiche_type in (1,3,4,5) ");
		if(!empty($search_startDate)){
			$base_url.="&search_startDate={$search_startDate}";
            $where .=" AND a.paiche_startDate>='".strtotime($search_startDate)."'";
        }
		if(!empty($search_endDate)){
			$base_url.="&search_endDate={$search_endDate}";
            $where .=" AND a.paiche_startDate<".(strtotime($search_endDate." 23:59:59"));
        }
        if ($paiche_linker!=""){
        	$base_url.="&paiche_linker={$paiche_linker}";
        	$where .=" AND (a.paiche_linker like '%{$paiche_linker}%' OR f.client_name like '%{$paiche_linker}%')";
        }
        if ($paiche_contractNum!=""){
        	$base_url.="&paiche_contractNum={$paiche_contractNum}";
        	$where .=" AND a.paiche_contractNum like '%{$paiche_contractNum}%'";
        }
        $sql_0="SELECT paiche_id,Sum(have_in_money) as have_in_money,Sum(have_back_money) as have_back_money,Sum(have_in_money-have_back_money-have_freeze_money) as depositmoney,Sum(have_freeze_money) as have_freeze_money FROM `paiche_charges` WHERE charge_id=1 AND back_money>0 AND have_in_money>0 AND have_in_money<>(have_back_money+break_money) Group by paiche_id";

        $sql="SELECT a.*,kk.have_in_money,kk.have_back_money,kk.depositmoney,kk.have_freeze_money,c.emp_name AS yewuyuan,e.car_num,f.client_name,g.item_name ".
			 "FROM `paiche` AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId ".
        	 "Inner Join ({$sql_0}) as kk On a.paiche_id=kk.paiche_id ".
			 "LEFT JOIN emp AS c ON a.paicheCounterMan=c.emp_id ".
			 "LEFT JOIN car AS e ON a.paicheCar=e.car_id ".
			 "LEFT JOIN client AS f ON a.paicheCom=f.client_id ".
        	 "LEFT JOIN item AS g ON a.paiche_type=g.item_paicheType ".
			 "WHERE {$where} ORDER BY `paiche_startDate` DESC ";
        $busiList=null;
        $total_item=0;
        if(!empty($firstop)){
		$busiList = $model->getListBySql(0,1000,$sql);
		$sql="Select count(*) as total From `paiche` AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId ".
        	 "Inner Join ({$sql_0}) as kk On a.paiche_id=kk.paiche_id ".
			 "LEFT JOIN client AS f ON a.paicheCom=f.client_id ".
			 "WHERE {$where} ";
		$total_item = $model->getTotal($sql);
		$sql="Select Sum(depositmoney) as depositmoney,Sum(have_in_money) as have_in_money,Sum(have_back_money) as have_back_money,Sum(have_freeze_money) as have_freeze_money From `paiche` AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId ".
        	 "Inner Join ({$sql_0}) as kk On a.paiche_id=kk.paiche_id ".
			 "LEFT JOIN client AS f ON a.paicheCom=f.client_id ".
			 "WHERE {$where} ";
		$totalinfo= $model->getInfo($sql);
		
        }
		
		$view  = $this->createView("operator/report/depositlist.html");

		$object = new stdClass();
		$object->busiList = $busiList;
		$object->total = $total_item;
		$object->totalinfo = $totalinfo;
		$object->firstop =$firstop;
		$object->category = $model->getListBySql(0,1000,"Select item_paicheType,item_name FROM item Where item_name <> '临时带驾'");
		$view->assign($object);
		$view->display();
	}
	function marginlist(){
				                
        $search_startDate=Request::getVar('search_startDate','get');
		$search_endDate=Request::getVar('search_endDate','get');
		$paiche_linker=Request::getVar('paiche_linker','get');
        $paiche_contractNum=Request::getVar('paiche_contractNum','get');
        
		$model = $this->createModel("report",dirname( __FILE__ ));
		
		$base_url = "marginlist.php?";
        $where = " a.paiche_recycle!=1 AND a.paiche_status>=0 AND b.settle_totalKm>0 AND b.settle_losses=2 AND (a.paiche_type =1 OR a.paiche_type =3)";
		if(!empty($search_startDate)){
			$base_url.="&search_startDate={$search_startDate}";
            $where .=" AND a.paiche_startDate>='".strtotime($search_startDate)."'";
        }
		if(!empty($search_endDate)){
			$base_url.="&search_endDate={$search_endDate}";
            $where .=" AND a.paiche_startDate<".(strtotime($search_endDate." 23:59:59"));
        }
        if ($paiche_linker!=""){
        	$base_url.="&paiche_linker={$paiche_linker}";
        	$where .=" AND (a.paiche_linker like '%{$paiche_linker}%' OR f.client_name like '%{$paiche_linker}%')";
        }
        if ($paiche_contractNum!=""){
        	$base_url.="&paiche_contractNum={$paiche_contractNum}";
        	$where .=" AND a.paiche_contractNum like '%{$paiche_contractNum}%'";
        }
        
        $sql_0="SELECT paiche_id,have_in_money,have_in_money-have_back_money-break_money as left_money FROM `paiche_charges` WHERE charge_id=1 AND back_money>0 AND have_in_money>0 AND have_back_money>0 AND have_back_money+break_money < have_in_money ";

        $sql="SELECT a.*,b.settle_endDate,kk.have_in_money,kk.left_money,c.emp_name AS yewuyuan,e.car_num,f.client_name ".
			 "FROM `paiche` AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId ".
        	 "Inner Join ({$sql_0}) as kk On a.paiche_id=kk.paiche_id ".
			 "LEFT JOIN emp AS c ON a.paicheCounterMan=c.emp_id ".
			 "LEFT JOIN car AS e ON a.paicheCar=e.car_id ".
			 "LEFT JOIN client AS f ON a.paicheCom=f.client_id ".
			 "WHERE {$where} ORDER BY `settle_endDate` ";

		$busiList = $model->getListBySql(0,5000,$sql);
		$sql="Select count(*) as total From `paiche` AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId ".
        	 "Inner Join ({$sql_0}) as kk On a.paiche_id=kk.paiche_id LEFT JOIN client AS f ON a.paicheCom=f.client_id ".
			 "WHERE {$where} ";

		$total_item = $model->getTotal($sql);
		$sql="Select Sum(left_money) as total From `paiche` AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId ".
        	 "Inner Join ({$sql_0}) as kk On a.paiche_id=kk.paiche_id LEFT JOIN client AS f ON a.paicheCom=f.client_id ".
			 "WHERE {$where} ";
		$sum= $model->getTotal($sql);

		
		$view  = $this->createView("operator/report/marginlist.html");

		$object = new stdClass();
		$object->busiList = $busiList;
		$object->total = $total_item;
		$object->sum = $sum;
		$view->assign($object);
		$view->display();
	}

	//费用报销统计
	function baoxiaolist(){
		$sdate=Request::getVar('startdate','get');
		$edate=Request::getVar('enddate','get');
		$startdate=empty($sdate)? strtotime(date('Y-m-01', strtotime(date("Y-m-d")))):strtotime($sdate);
		$enddate=empty($edate)? time():strtotime($edate." 23:59:59");

		$model = $this->createModel("report",dirname( __FILE__ ));

		$sql_10="Select Sum(baoxiao_roadQiao) as total_money11,Sum(baoxiao_oil) as total_money12,Sum(baoxiao_room) as total_money13,Sum(baoxiao_meal) as total_money14,Sum(baoxiao_stopCar) as total_money15,0 as total_money3 From baoxiao Where baoxiao_item=1 AND baoxiao_isOver=1 AND baoxiao_isOverTime>={$startdate} AND baoxiao_isOverTime<={$enddate}";
		$sql_20="Select a.typename,b.total_money20 From baoxiao_type as a Left Join (Select baoxiao_type,Sum(baoxiao_money) as total_money20 From baoxiao Where baoxiao_item=2 AND baoxiao_isOver=1 AND baoxiao_isOverTime>={$startdate} AND baoxiao_isOverTime<={$enddate} Group by baoxiao_type) as b ON a.typename=b.baoxiao_type";
		/*
		$sql_21="Select 0 as total_money11,0 as total_money12,0 as total_money13,0 as total_money14,0 as total_money15,Sum(baoxiao_money) as total_money21,0 as total_money22,0 as total_money23,0 as total_money24,0 as total_money25,0 as total_money3 From baoxiao Where baoxiao_item=2 AND baoxiao_isOver=1 AND baoxiao_type='办公用品' AND baoxiao_date>={$startdate} AND baoxiao_date<={$enddate}";
		$sql_22="Select 0 as total_money11,0 as total_money12,0 as total_money13,0 as total_money14,0 as total_money15,0 as total_money21,Sum(baoxiao_money) as total_money22,0 as total_money23,0 as total_money24,0 as total_money25,0 as total_money3 From baoxiao Where baoxiao_item=2 AND baoxiao_isOver=1 AND baoxiao_type='快递费' AND baoxiao_date>={$startdate} AND baoxiao_date<={$enddate}";
		$sql_23="Select 0 as total_money11,0 as total_money12,0 as total_money13,0 as total_money14,0 as total_money15,0 as total_money21,0 as total_money22,Sum(baoxiao_money) as total_money23,0 as total_money24,0 as total_money25,0 as total_money3 From baoxiao Where baoxiao_item=2 AND baoxiao_isOver=1 AND baoxiao_type='广告费' AND baoxiao_date>={$startdate} AND baoxiao_date<={$enddate}";
		$sql_24="Select 0 as total_money11,0 as total_money12,0 as total_money13,0 as total_money14,0 as total_money15,0 as total_money21,0 as total_money22,0 as total_money23,Sum(baoxiao_money) as total_money24,0 as total_money25,0 as total_money3 From baoxiao Where baoxiao_item=2 AND baoxiao_isOver=1 AND baoxiao_type='税金' AND baoxiao_date>={$startdate} AND baoxiao_date<={$enddate}";
		$sql_25="Select 0 as total_money11,0 as total_money12,0 as total_money13,0 as total_money14,0 as total_money15,0 as total_money21,0 as total_money22,0 as total_money23,0 as total_money24,Sum(baoxiao_money) as total_money25,0 as total_money3 From baoxiao Where baoxiao_item=2 AND baoxiao_isOver=1 AND baoxiao_type='打款蒋政' AND baoxiao_date>={$startdate} AND baoxiao_date<={$enddate}";
		
		$sql_30="";
		
		$sql="Select Sum(total_money11) as total_money11,Sum(total_money12) as total_money12,Sum(total_money13) as total_money13,Sum(total_money14) as total_money14,".
			   "Sum(total_money15) as total_money15,Sum(total_money21) as total_money21,Sum(total_money22) as total_money22,Sum(total_money23) as total_money23,".
			   "Sum(total_money24) as total_money24,Sum(total_money25) as total_money25,Sum(total_money3) as total_money3 ".
			   "From ({$sql_10} Union All {$sql_21} Union All {$sql_22} Union All {$sql_23} Union All {$sql_24} Union All {$sql_25}) kk ";
		$List = $model->getListBySql(0,200, $sql_10);
		*/
		
		$view  = $this->createView("operator/report/baoxiaolist.html");
		
		$object = new stdClass();
		$object->list = $model->getInfo($sql_10);
		$object->list2 = $model->getListBySql(0,200, $sql_20);
		$object->startdate = date("Y-m-d",$startdate);
		$object->enddate = date("Y-m-d",$enddate);
		$object->total_money2=0;
		
		$view->assign($object);
		$view->display();
	}


	function baoxiaodetail(){
		$b_type=Request::getVar('b_type','get');
		$search_shop=Request::getVar('search_shop','get');
		$sdate=Request::getVar('startdate','get');
		$edate=Request::getVar('enddate','get');
		$startdate=strtotime(Request::getVar('startdate','get'));
		$enddate=strtotime(Request::getVar('enddate','get')." 23:59:59");
		$where2 =empty($search_shop)?"" : " AND a.shop_id={$search_shop}";
		
		$model = $this->createModel("report",dirname( __FILE__ ));
		
		$sql="SELECT a.*,c.emp_name From baoxiao as a LEFT JOIN `emp` AS c ON a.baoxiao_emp=c.emp_id Where baoxiao_item=1 AND baoxiao_isOver=1 AND baoxiao_isOverTime>={$startdate} AND baoxiao_isOverTime<={$enddate}{$where2}";
		$List1=$model->getListBySql(0,20000, $sql);

		//print_r($List1[0]);exit;
		
		$sql_10="Select Sum(baoxiao_roadQiao) as total_money11,Sum(baoxiao_oil) as total_money12,Sum(baoxiao_room) as total_money13,Sum(baoxiao_meal) as total_money14,Sum(baoxiao_stopCar) as total_money15 From baoxiao as a Where baoxiao_item=1 AND baoxiao_isOver=1 AND baoxiao_isOverTime>={$startdate} AND baoxiao_isOverTime<={$enddate}{$where2}";
		$List10 = $model->getListBySql(0,200, $sql_10);
		
		$sql="SELECT a.*,c.emp_name,b.typeid,kk.payment_name,kk.bank_name,e.shop_name 
			  From baoxiao as a left join baoxiao_type as b on b.typename=a.baoxiao_type LEFT JOIN `emp` AS c ON a.baoxiao_emp=c.emp_id
			  Inner Join (Select a.bill_id,d.payment_name,b.bank_name From account_log as a LEFT JOIN `banks` AS b ON a.bank_id=b.bank_id 
			  LEFT JOIN `payments` AS d ON a.payments_id=d.payment_id Where bill_type=1) as kk ON a.baoxiao_id=kk.bill_id 
			  Left Join shop as e ON a.shop_id=e.shop_id 
			  Where baoxiao_item=2 AND baoxiao_type<>'' AND baoxiao_isOver=1 AND baoxiao_isOverTime>={$startdate} AND baoxiao_isOverTime<={$enddate}{$where2}";
		$List2=$model->getListBySql(0,20000, $sql);
		
		$view  = $this->createView("operator/report/baoxiaodetail.html");
		
		$object = new stdClass();
		$object->list1 = $List1;
		$object->list10 = $List10;
		$object->list2 = $List2;
		$object->b_type=$b_type;
		$object->all_money =0;
		$object->sdate=$sdate;
		$object->edate=$edate;
		$object->count =0;
		$view->assign($object);
		$view->display();
	}
	//其他收费明细
	function otherdetail(){
		$b_type=Request::getVar('b_type','get');
		$sdate=Request::getVar('startdate','get');
		$edate=Request::getVar('enddate','get');
		$startdate=strtotime(Request::getVar('startdate','get'));
		$enddate=strtotime(Request::getVar('enddate','get')." 23:59:59");
		
		
		$model = $this->createModel("report",dirname( __FILE__ ));

		$sql="SELECT a.add_time,a.money,k.change_code as bill_code,k.bill_id as break_id,a.name,a.bill_id,b.payment_name,d.bank_name,e.shop_name 
				FROM `account_log` AS a LEFT JOIN account_change_log AS k ON a.bill_id=k.id 
				Left Join payments as b ON a.payments_id=b.payment_id Left Join banks as d on a.bank_id=d.bank_id 
				Left Join shop as e ON a.shop_id=e.shop_id 
				WHERE a.`bill_type`=3 AND account_type='".$this->arr_class[$b_type]."' AND a.add_time>={$startdate} AND a.add_time<={$enddate} Order by a.add_time";
		$List6=$model->getListBySql(0,20000, $sql);
		
		
		$view  = $this->createView("operator/report/otherdetail.html");
		
		$object = new stdClass();
		$object->list6 = $List6;
		$object->all_money =0;
		$object->b_type=$this->arr_class[$b_type];
		$object->sdate=$sdate;
		$object->edate=$edate;
		$view->assign($object);
		$view->display();
	}
}
?>