<?php
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('operator.navi.admincontroller');
import('operator.navi.privilegehelper');
import('imag.fusecookie');

error_reporting(E_ERROR);

class IncomeController extends AdminController
{
	var $arr_type = array("21"=>"办公用品","22"=>"快递费","23"=>"广告费","24"=>"税金","25"=>"打款蒋政");
	var $arr_class = array("61"=>"刷卡费","62"=>"保险理赔及退保","63"=>"税金","64"=>"其他","65"=>"卖车及报废收入");
	function __construct($config = array())
	{
		parent::__construct($config);
		
		$this->registerTask( 'incomelist','incomelist');
		$this->registerTask( 'incomedetail','incomedetail');
		$this->registerTask( 'otherdetail','otherdetail');
		$this->registerTask( 'baoxiaodetail','baoxiaodetail');
	}


	function incomelist()
	{
		
		//print_r("expression");exit;
		$sdate=Request::getVar('startdate','get');
		$edate=Request::getVar('enddate','get');

		$startdate=empty($sdate)? strtotime(date('Y-m-01', strtotime(date("Y-m-d")))):strtotime($sdate);
		$enddate=empty($edate)? time():strtotime($edate." 23:59:59");

		$model = $this->createModel("report",dirname( __FILE__ ));

		$sql_01="SELECT a.paiche_id,SUM(a.money) AS total_money FROM `account_log` AS a 
				 WHERE a.bank_id<>5 AND a.bank_id<>15 AND a.`bill_type`=0 AND a.paiche_id>0 AND a.name in ('收租金','租车结账收款','收续租金','租车违约收违约金','租车违约退租金') 
				 AND a.add_time>={$startdate} AND a.add_time<={$enddate} GROUP BY a.paiche_id";
		
		//临时自驾收入
		$sql_1="Select SUM(IF(h.shunt_type=1,0,d.total_money)-IFNULL(h.shunt_rent,0)) AS total_money1,0 AS total_money2,0 AS total_money22,0 AS total_money21,0 AS total_money3,0 AS total_money4,0 AS total_money5,0 AS total_money6,0 AS deposit_money,0 AS depositback_money ".
			 "FROM `paiche` AS c INNER JOIN ({$sql_01}) d ON c.paiche_id=d.paiche_id ".
			 "LEFT JOIN shunt AS h ON c.paiche_id=h.shuntPaicheId ".
			 "Where c.paiche_type=1 AND (c.paiche_status>=0 OR c.paiche_status=-1)";
		
		//临时代驾--现结
		$sql_2="Select 0 AS total_money1,Sum(d.total_money) AS total_money2,0 AS total_money22,0 AS total_money21,0 AS total_money3,0 AS total_money4,0 AS total_money5,0 AS total_money6,0 AS deposit_money,0 AS depositback_money ".
			 "FROM `paiche` AS c INNER JOIN settle AS e ON c.paiche_id=e.settlePaicheId ".
			 "INNER JOIN ({$sql_01}) d ON c.paiche_id=d.paiche_id ".
			 "Where c.paiche_type=2  AND (c.paiche_status>=0 OR c.paiche_status=-1) ";// AND e.settle_lossescode=''
		//临时代驾--批结
		$sql_22="SELECT 0 AS total_money1,0 AS total_money2,SUM(a.money) AS total_money22,0 AS total_money21,0 AS total_money3,0 AS total_money4,0 AS total_money5,0 AS total_money6,0 AS deposit_money,0 AS depositback_money FROM `account_log` AS a 
				 WHERE a.bank_id<>5 AND a.bank_id<>15 AND a.`bill_type`=5 AND a.name ='临时用车批量结账' AND a.add_time>={$startdate} AND a.add_time<={$enddate}";
		//调车结算
		$sql_21="SELECT 0 AS total_money1,0 AS total_money2,0 AS total_money22,SUM(a.money) AS total_money21,0 AS total_money3,0 AS total_money4,0 AS total_money5,0 AS total_money6,0 AS deposit_money,0 AS depositback_money FROM `account_log` AS a 
				 WHERE a.bank_id<>5 AND a.bank_id<>15 AND a.`bill_type`=6 AND a.brother_id<>0 AND a.name ='调车结账' AND a.add_time>={$startdate} AND a.add_time<={$enddate}";
				
		//长期
		$sql_02="SELECT a.paiche_id,SUM(a.money) AS total_money FROM `account_log` AS a 
				 WHERE a.bank_id<>5 AND a.bank_id<>15 AND a.`bill_type`=0 AND a.paiche_id>0 AND a.name ='长期用车月结' 
				 AND a.add_time>={$startdate} AND a.add_time<={$enddate} GROUP BY a.paiche_id";
		
		$sql_3="Select 0 AS total_money1,0 AS total_money2,0 AS total_money22,0 AS total_money21,Sum(d.total_money) AS total_money3,0 AS total_money4,0 AS total_money5,0 AS total_money6,0 AS deposit_money,0 AS depositback_money ".
			 "FROM `paiche` AS c INNER JOIN ({$sql_02}) d ON c.paiche_id=d.paiche_id ".
			 "Where c.paiche_type=3 AND c.paiche_status>=0";
		$sql_4="Select 0 AS total_money1,0 AS total_money2,0 AS total_money22,0 AS total_money21,0 AS total_money3,SUM(d.total_money) AS total_money4,0 AS total_money5,0 AS total_money6,0 AS deposit_money,0 AS depositback_money ".
			 "FROM `paiche` AS c INNER JOIN ({$sql_02}) d ON c.paiche_id=d.paiche_id ".
			 "Where c.paiche_type=4 AND c.paiche_status>=0";
		$sql_5="Select 0 AS total_money1,0 AS total_money2,0 AS total_money22,0 AS total_money21,0 AS total_money3,0 AS total_money4,SUM(d.total_money) AS total_money5,0 AS total_money6,0 AS deposit_money,0 AS depositback_money ".
			 "FROM `paiche` AS c INNER JOIN ({$sql_02}) d ON c.paiche_id=d.paiche_id ".
			 "Where c.paiche_type=5 AND c.paiche_status>=0";
		
		//其他收入
		$sql_6="SELECT 0 AS total_money1,0 AS total_money2,0 AS total_money22,0 AS total_money21,0 AS total_money3,0 AS total_money4,0 AS total_money5,SUM(a.money) AS total_money6,0 AS deposit_money,0 AS depositback_money FROM `account_log` AS a 
				 WHERE a.bank_id<>5 AND a.bank_id<>15 AND a.`bill_type`=3 AND a.add_time>={$startdate} AND a.add_time<={$enddate}";
		//押金收入
		$sql_7="SELECT 0 AS total_money1,0 AS total_money2,0 AS total_money22,0 AS total_money21,0 AS total_money3,0 AS total_money4,0 AS total_money5,0 AS total_money6,SUM(a.money) AS deposit_money,0 AS depositback_money FROM `account_log` AS a 
				 WHERE a.bank_id<>5 AND a.bank_id<>15 AND a.`bill_type`=0 AND a.paiche_id>0 AND a.name ='收押金' AND a.add_time>={$startdate} AND a.add_time<={$enddate}";
		//押金支出
		$sql_8="SELECT 0 AS total_money1,0 AS total_money2,0 AS total_money22,0 AS total_money21,0 AS total_money3,0 AS total_money4,0 AS total_money5,0 AS total_money6,0 AS deposit_money,-1*SUM(a.money) AS depositback_money FROM `account_log` AS a 
				 WHERE a.bank_id<>5 AND a.bank_id<>15 AND a.`bill_type`=0 AND a.paiche_id>0 AND a.name like '%退押金%' AND a.add_time>={$startdate} AND a.add_time<={$enddate}";
		
		$sql="Select Sum(total_money1) as total_money1,Sum(total_money2) as total_money2,Sum(total_money22) as total_money22,Sum(total_money21) as total_money21,".
			   "Sum(total_money3) as total_money3,Sum(total_money4) as total_money4,Sum(total_money5) as total_money5,Sum(total_money6) as total_money6,".
			   "Sum(deposit_money) AS deposit_money,Sum(depositback_money) AS depositback_money ".
			   "From ({$sql_1} Union All {$sql_2} Union All {$sql_22} Union All {$sql_21} Union All {$sql_3} Union All {$sql_4} Union All {$sql_5} Union All {$sql_6} Union All {$sql_7} Union All {$sql_8}) kk ";
				
		$income = $model->getInfo($sql);
		
		//其他收入
		$sql_61="SELECT SUM(a.money) AS total_money61,0 AS total_money62,0 AS total_money63,0 AS total_money64,0 AS total_money65 FROM `account_log` AS a 
				 WHERE a.bank_id<>5 AND a.bank_id<>15 AND a.`bill_type`=3 AND account_type='刷卡费' AND a.add_time>={$startdate} AND a.add_time<={$enddate}";
		$sql_62="SELECT 0 AS total_money61,SUM(a.money) AS total_money62,0 AS total_money63,0 AS total_money64,0 AS total_money65 FROM `account_log` AS a 
				 WHERE a.bank_id<>5 AND a.bank_id<>15 AND a.`bill_type`=3 AND account_type='保险理赔及退保' AND a.add_time>={$startdate} AND a.add_time<={$enddate}";
		$sql_63="SELECT 0 AS total_money61,0 AS total_money62,SUM(a.money) AS total_money63,0 AS total_money64,0 AS total_money65 FROM `account_log` AS a 
				 WHERE a.bank_id<>5 AND a.bank_id<>15 AND a.`bill_type`=3 AND account_type='税金' AND a.add_time>={$startdate} AND a.add_time<={$enddate}";
		$sql_64="SELECT 0 AS total_money61,0 AS total_money62,0 AS total_money63,SUM(a.money) AS total_money64,0 AS total_money65 FROM `account_log` AS a 
				 WHERE a.bank_id<>5 AND a.bank_id<>15 AND a.`bill_type`=3 AND account_type='其他' AND a.add_time>={$startdate} AND a.add_time<={$enddate}";
		$sql_65="SELECT 0 AS total_money61,0 AS total_money62,0 AS total_money63,0 AS total_money64,SUM(a.money) AS total_money65 FROM `account_log` AS a 
				 WHERE a.bank_id<>5 AND a.bank_id<>15 AND a.`bill_type`=3 AND account_type='卖车及报废收入' AND a.add_time>={$startdate} AND a.add_time<={$enddate}{$where2}";
		
		$sql="Select Sum(total_money61) as total_money61,Sum(total_money62) as total_money62,Sum(total_money63) as total_money63,Sum(total_money64) as total_money64,Sum(total_money65) as total_money65 ".
			   "From ({$sql_61} Union All {$sql_62} Union All {$sql_63} Union All {$sql_64} Union All {$sql_65}) kk ";
				
		$other = $model->getInfo($sql);
		
		//报销支出
		$sql_0="Select bill_id From account_log Where (bill_type=1 OR bill_type=4) and bank_id<>5 AND bank_id<>15";
		$sql="Select Sum(baoxiao_roadQiao+baoxiao_oil+baoxiao_room+baoxiao_meal+baoxiao_stopCar+baoxiao_money) as total_money7 From baoxiao a Inner Join ({$sql_0}) b On a.baoxiao_id=b.bill_id Where baoxiao_isOver=1 AND baoxiao_date>={$startdate} AND baoxiao_date<={$enddate} and baoxiao_type<>'打款蒋政'";
		$baoxiao = $model->getInfo($sql);
		
		$sql_10="Select Sum(baoxiao_roadQiao) as total_money11,Sum(baoxiao_oil) as total_money12,Sum(baoxiao_room) as total_money13,Sum(baoxiao_meal) as total_money14,Sum(baoxiao_stopCar) as total_money15,0 as total_money21,0 as total_money22,0 as total_money23,0 as total_money24,0 as total_money25,0 as total_money3 From baoxiao a Inner Join ({$sql_0}) b On a.baoxiao_id=b.bill_id Where baoxiao_item=1 AND baoxiao_isOver=1 AND baoxiao_date>={$startdate} AND baoxiao_date<={$enddate}";
		$baoxiao_1 = $model->getInfo($sql_10);
		
		$sql_20="Select a.typeid,a.typename,a.typeclass,b.total_money20 From baoxiao_type as a Left Join (Select baoxiao_type,Sum(baoxiao_money) as total_money20 From baoxiao aa Inner Join ({$sql_0}) b On aa.baoxiao_id=b.bill_id Where baoxiao_item=2 AND baoxiao_isOver=1 AND baoxiao_date>={$startdate} AND baoxiao_date<={$enddate} Group by baoxiao_type) as b ON a.typename=b.baoxiao_type";
		$baoxiao_2 = $model->getListBySql(0,200, $sql_20);
				
		
		$view  = $this->createView("operator/report/incomelist.html");
		
		$object = new stdClass();
		$object->income = $income;
		$object->other = $other;
		$object->baoxiao=$baoxiao;
		$object->baoxiao_1=$baoxiao_1;
		$object->baoxiao_2=$baoxiao_2;
		$object->startdate = date("Y-m-d",$startdate);
		$object->enddate = date("Y-m-d",$enddate);
		$object->flag="2";
		$object->url="list2.php";
		$object->shoplist=$model->getListBySql(0,10,"Select `shop_id`,`shop_name` From shop");
		$view->assign($object);
		$view->display();
	}






	function incomedetail()
	{
		
		$sdate=Request::getVar('startdate','get');
		$edate=Request::getVar('enddate','get');
		$startdate=strtotime(Request::getVar('startdate','get'));
		$enddate=strtotime(Request::getVar('enddate','get')." 23:59:59");
		
		$model = $this->createModel("report",dirname( __FILE__ ));
		
		$sql_0="SELECT a.paiche_id,SUM(a.conv_money) AS conv_money,SUM(a.have_in_money) AS total_money FROM `paiche_charges` AS a INNER JOIN `charges` AS b ON a.`charge_id`=b.`charge_id` WHERE a.bank_id<>5 AND b.`charge_isback`=0 GROUP BY a.paiche_id";
		
		$sql_01="SELECT a.paiche_id,a.money FROM `account_log` AS a 
				 WHERE a.bank_id<>5 AND a.bank_id<>15 AND a.money<>0 AND a.`bill_type`=0 AND a.paiche_id>0 AND a.name in ('收租金','租车结账收款','收续租金','租车违约收违约金','租车违约退租金') 
				 AND a.add_time>={$startdate} AND a.add_time<={$enddate} ";
		
		//自驾
		$sql="SELECT a.id,a.paiche_id,a.money,a.name,a.add_time,c.paiche_contractNum,c.paiche_startDate,c.paiche_endDate,c.paiche_linker 
				FROM `account_log` AS a Inner Join paiche As c On a.paiche_id=c.paiche_id
				WHERE a.money<>0 AND a.`bill_type`=0 AND a.paiche_id>0 AND a.name in ('收租金','租车结账收款','收续租金','租车违约收违约金','租车违约退租金') 
				AND a.add_time>={$startdate} AND a.add_time<={$enddate} AND c.paiche_type=1 AND (c.paiche_status>=0 OR c.paiche_status=-1) Order by a.add_time";
		$List1=$model->getListBySql(0,20000, $sql);
		
		//临时代驾--现结
		$sql="SELECT a.id,a.paiche_id,a.money,a.name,a.add_time,c.paiche_contractNum,c.paiche_startDate,c.paiche_endDate,c.paiche_linker 
				FROM `account_log` AS a Inner Join paiche As c On a.paiche_id=c.paiche_id INNER JOIN settle AS e ON c.paiche_id=e.settlePaicheId 
				WHERE a.bank_id<>5 AND a.bank_id<>15 AND a.money<>0 AND a.`bill_type`=0 AND a.paiche_id>0 AND a.name in ('收租金','租车结账收款','收续租金','租车违约收违约金','租车违约退租金') 
				AND a.add_time>={$startdate} AND a.add_time<={$enddate} AND c.paiche_type=2 AND (c.paiche_status>=0 OR c.paiche_status=-1) ";// AND e.settle_lossescode=''
		$List2=$model->getListBySql(0,20000, $sql);
		
		//临时代驾--批结
		$sql="SELECT a.add_time,a.money,a.bill_code,c.client_name,b.payment_name,d.bank_name 
				FROM `account_log` AS a Left Join client as c On a.client_id=c.client_id Left Join payments as b ON a.payments_id=b.payment_id Left Join banks as d on a.bank_id=d.bank_id 
				WHERE a.bank_id<>5 AND a.bank_id<>15 AND a.`bill_type`=5 AND a.name ='临时用车批量结账' AND a.add_time>={$startdate} AND a.add_time<={$enddate} Order by a.add_time";
		$List22=$model->getListBySql(0,20000, $sql);
		
		//调车结算
		$sql="SELECT a.add_time,a.money,a.bill_code,c.bro_name,b.payment_name,d.bank_name  
				 FROM `account_log` AS a Left Join brothers as c On a.brother_id=c.bro_id Left Join payments as b ON a.payments_id=b.payment_id Left Join banks as d on a.bank_id=d.bank_id 
				 WHERE a.bank_id<>5 AND a.bank_id<>15 AND a.`bill_type`=6 AND a.name ='调车结账' AND a.add_time>={$startdate} AND a.add_time<={$enddate} Order by a.add_time";
		$List21=$model->getListBySql(0,20000, $sql);
		
		//长期
		$sql="SELECT a.id,a.paiche_id,a.money,a.name,a.add_time,c.paiche_contractNum,c.paiche_startDate,c.paiche_endDate,d.client_name 
				FROM `account_log` AS a Inner Join paiche As c On a.paiche_id=c.paiche_id Left Join client as d On a.client_id=d.client_id
				WHERE a.bank_id<>5 AND a.bank_id<>15 AND a.money<>0 AND a.`bill_type`=0 AND a.name ='长期用车月结'
				AND a.add_time>={$startdate} AND a.add_time<={$enddate} AND c.paiche_type=3 AND c.paiche_status>=0 Order by a.add_time";
		$List3=$model->getListBySql(0,20000, $sql);
		
		$sql="SELECT a.id,a.paiche_id,a.money,a.name,a.add_time,c.paiche_contractNum,c.paiche_startDate,c.paiche_endDate,d.client_name 
				FROM `account_log` AS a Inner Join paiche As c On a.paiche_id=c.paiche_id Left Join client as d On a.client_id=d.client_id
				WHERE a.bank_id<>5 AND a.bank_id<>15 AND a.money<>0 AND a.`bill_type`=0 AND a.name ='长期用车月结'
				AND a.add_time>={$startdate} AND a.add_time<={$enddate} AND c.paiche_type=4 AND c.paiche_status>=0 Order by a.add_time";
		$List4=$model->getListBySql(0,20000, $sql);
		
		$sql="SELECT a.id,a.paiche_id,a.money,a.name,a.add_time,c.paiche_contractNum,c.paiche_startDate,c.paiche_endDate,d.client_name 
				FROM `account_log` AS a Inner Join paiche As c On a.paiche_id=c.paiche_id Left Join client as d On a.client_id=d.client_id
				WHERE a.bank_id<>5 AND a.bank_id<>15 AND a.money<>0 AND a.`bill_type`=0 AND a.name ='长期用车月结'
				AND a.add_time>={$startdate} AND a.add_time<={$enddate} AND c.paiche_type=5 AND c.paiche_status>=0 Order by a.add_time";
		$List5=$model->getListBySql(0,20000, $sql);
		
		//其他收入
		$sql="SELECT a.add_time,a.money,k.change_code as bill_code,a.name,a.bill_id,b.payment_name,d.bank_name 
				FROM `account_log` AS a LEFT JOIN account_change_log AS k ON a.bill_id=k.id Left Join payments as b ON a.payments_id=b.payment_id Left Join banks as d on a.bank_id=d.bank_id 
				WHERE a.bank_id<>5 AND a.bank_id<>15 AND a.`bill_type`=3 AND a.add_time>={$startdate} AND a.add_time<={$enddate} Order by a.add_time";
		$List6=$model->getListBySql(0,20000, $sql);
		
		//押金收入
		$sql="SELECT a.id,a.paiche_id,a.money,a.name,a.add_time,c.paiche_contractNum,c.paiche_startDate,c.paiche_endDate,c.paiche_linker 
				 FROM `account_log` AS a Inner Join paiche As c On a.paiche_id=c.paiche_id
				 WHERE a.bank_id<>5 AND a.bank_id<>15 AND a.`bill_type`=0 AND a.paiche_id>0 AND a.name ='收押金' AND a.add_time>={$startdate} AND a.add_time<={$enddate}";
		$List7=$model->getListBySql(0,20000, $sql);
		//押金支出
		$sql="SELECT a.id,a.paiche_id,a.money,a.name,a.add_time,c.paiche_contractNum,c.paiche_startDate,c.paiche_endDate,c.paiche_linker 
				 FROM `account_log` AS a Inner Join paiche As c On a.paiche_id=c.paiche_id
				 WHERE a.bank_id<>5 AND a.bank_id<>15 AND a.`bill_type`=0 AND a.paiche_id>0 AND a.name like '%退押金%' AND a.add_time>={$startdate} AND a.add_time<={$enddate}";
		$List8=$model->getListBySql(0,20000, $sql);
		
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
		$object->all_money =0;
		$object->b_type=Request::getVar('b_type','get');
		$object->sdate=$sdate;
		$object->edate=$edate;
		$view->assign($object);
		$view->display();
	}
	
	function baoxiaodetail(){
		$b_type=Request::getVar('b_type','get');
		
		$sdate=Request::getVar('startdate','get');
		$edate=Request::getVar('enddate','get');
		$startdate=strtotime(Request::getVar('startdate','get'));
		$enddate=strtotime(Request::getVar('enddate','get')." 23:59:59");
		
		$model = $this->createModel("report",dirname( __FILE__ ));
		
		$sql_0="Select a.bill_id,d.payment_name,b.bank_name From account_log as a LEFT JOIN `banks` AS b ON a.bank_id=b.bank_id 
			  LEFT JOIN `payments` AS d ON a.payments_id=d.payment_id Where (a.bill_type=1 OR a.bill_type=4) and a.bank_id<>5 AND a.bank_id<>15 ";
		$sql="SELECT a.*,c.emp_name From baoxiao as a Inner Join ({$sql_0}) b On a.baoxiao_id=b.bill_id LEFT JOIN `emp` AS c ON a.baoxiao_emp=c.emp_id Where baoxiao_item=1 AND baoxiao_isOver=1 AND baoxiao_date>={$startdate} AND baoxiao_date<={$enddate}";
		$List1=$model->getListBySql(0,20000, $sql);
		
		$sql_10="Select Sum(baoxiao_roadQiao) as total_money11,Sum(baoxiao_oil) as total_money12,Sum(baoxiao_room) as total_money13,Sum(baoxiao_meal) as total_money14,Sum(baoxiao_stopCar) as total_money15 From baoxiao a Inner Join ({$sql_0}) b On a.baoxiao_id=b.bill_id Where baoxiao_item=1 AND baoxiao_isOver=1 AND baoxiao_date>={$startdate} AND baoxiao_date<={$enddate}";
		$List10 = $model->getListBySql(0,200, $sql_10);
		
		$sql="SELECT a.*,c.emp_name,d.typeid,b.payment_name,b.bank_name From baoxiao as a Inner Join ({$sql_0}) b On a.baoxiao_id=b.bill_id left join baoxiao_type as d on d.typename=a.baoxiao_type LEFT JOIN `emp` AS c ON a.baoxiao_emp=c.emp_id Where baoxiao_item=2 AND baoxiao_type<>'' AND baoxiao_isOver=1 AND baoxiao_date>={$startdate} AND baoxiao_date<={$enddate}";
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
		$view->assign($object);
		$view->display();
	}

	function otherdetail(){
		$b_type=Request::getVar('b_type','get');
		$sdate=Request::getVar('startdate','get');
		$edate=Request::getVar('enddate','get');
		$startdate=strtotime(Request::getVar('startdate','get'));
		$enddate=strtotime(Request::getVar('enddate','get')." 23:59:59");
		
		$model = $this->createModel("report",dirname( __FILE__ ));

		$sql="SELECT a.add_time,a.money,k.change_code as bill_code,a.name,a.bill_id,b.payment_name,d.bank_name 
				FROM `account_log` AS a LEFT JOIN account_change_log AS k ON a.bill_id=k.id Left Join payments as b ON a.payments_id=b.payment_id Left Join banks as d on a.bank_id=d.bank_id 
				WHERE a.bank_id<>5 AND a.bank_id<>15 AND a.`bill_type`=3 AND account_type='".$this->arr_class[$b_type]."' AND a.add_time>={$startdate} AND a.add_time<={$enddate} Order by a.add_time";
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