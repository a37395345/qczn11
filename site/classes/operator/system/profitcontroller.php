<?php
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('operator.navi.admincontroller');
import('operator.navi.privilegehelper');
import('imag.fusecookie');
import('publicFunction.CommonFunction');

class ProfitController extends AdminController
{


	/**
	 * Constructor
	 *
	 * @params	array	Controller configuration array
	 */
	var $privilegeList;
	function __construct($config = array())
	{
		parent::__construct($config);
		
		//if(!($this->checkPrivilege("system"))){
			//$this->redirect("/admincp/empty.php","您没有权限访问该页面！");
		//}
		
		$this->registerTask( 'list','profitList');
		$this->registerTask( 'create','create');
		$this->registerTask( 'insert','insert');
		$this->registerTask( 'modify','modify');
		$this->registerTask( 'update','update');
		$this->registerTask( 'delete','delete');
        $this->registerTask( 'detail','detail');
	}
	function display(){
		echo "display";
	}
	


	//取收入
	function getShouru($stime,$ntime){
		$CommonFunction=new CommonFunction();
		//临时自驾收入
		$sql="select sum(a.money) as money from account_log as a left join paiche as b on a.paiche_id=b.paiche_id where a.name in ('收租金','租车结账收款','收续租金','租车违约收违约金','租车违约退租金') and b.paiche_type=1 AND a.add_time>={$stime} AND a.add_time<{$ntime}";
		$lszj_money=$CommonFunction->getDataY($sql,'money');
		//临时用车批结收入
		$sql="SELECT  sum(money) as money from account_log where name='临时用车批量结账' AND add_time>={$stime} AND add_time<={$ntime}";    
        $biliang_money=$CommonFunction->getDataY($sql,'money');
        //临时代驾收入
        $sql="select sum(a.money) as money from account_log as a left join paiche as b on a.paiche_id=b.paiche_id where a.name in ('收租金','租车结账收款','收续租金','租车违约收违约金','租车违约退租金') and b.paiche_type=2 AND a.add_time>={$stime} AND a.add_time<{$ntime}";
		$lsdj_money=$CommonFunction->getDataY($sql,'money');
       
       //调车结算
        $sql="SELECT sum(money) as money  from account_log where name='调车结账' AND add_time>={$stime} AND add_time<={$ntime}";    
        $diaoche=$CommonFunction->getDataY($sql,'money');
        //长期自驾
        $sql="select sum(a.money) as money from account_log as a left join paiche as b on a.paiche_id=b.paiche_id where a.name in ('收租金','租车结账收款','收续租金','租车违约收违约金','租车违约退租金','长期用车月结') and b.paiche_type=3 AND a.add_time>={$stime} AND a.add_time<{$ntime}";
		$cqzj_money=$CommonFunction->getDataY($sql,'money');

		//长期代驾
		$sql="select sum(a.money) as money from account_log as a left join paiche as b on a.paiche_id=b.paiche_id where a.name in ('收租金','租车结账收款','收续租金','租车违约收违约金','租车违约退租金','长期用车月结') and b.paiche_type=4 AND a.add_time>={$stime} AND a.add_time<{$ntime}";
		$cqdj_money=$CommonFunction->getDataY($sql,'money');
		//长期大客
		$sql="select sum(a.money) as money from account_log as a left join paiche as b on a.paiche_id=b.paiche_id where a.name in ('收租金','租车结账收款','收续租金','租车违约收违约金','租车违约退租金','长期用车月结') and b.paiche_type=5 AND a.add_time>={$stime} AND a.add_time<{$ntime}";
		$cqdk_money=$CommonFunction->getDataY($sql,'money');
        //其他收入
        //其他收入
		$sql="Select SUM(a.money) AS money FROM `account_log` AS a 
				WHERE a.`bill_type`=3 AND a.add_time>={$stime} AND a.add_time<{$ntime}";
		$qita=$CommonFunction->getDataY($sql,'money');
		$req=$lszj_money+$biliang_money+$lsdj_money+$diaoche+$cqzj_money+$cqdj_money+$cqdk_money+$qita;



		
		
		

		//$list=$model->getListBySql_a($sql);
		//print_r($list[0]['total_money']);exit;
		return $req;

	}


	function getMaicheshouru($stime,$ntime){
		$list=null;
		$model = $this->createModel("rules",dirname( __FILE__ ));
		$sql="Select SUM(money) AS total_money FROM account_log WHERE bill_type=3 AND account_type='卖车及报废收入' AND add_time>={$stime} AND add_time<{$ntime}";
		$list=$model->getListBySql_a($sql);
		return $list[0]['total_money'];
	}

	function getZhichu($stime,$ntime){
		$list=null;
		$model = $this->createModel("rules",dirname( __FILE__ ));

		$sql="Select Sum(total_money1) as total_money1,Sum(total_money2) as total_money2 From (".
		 "Select baoxiao_roadQiao+baoxiao_oil+baoxiao_room+baoxiao_meal+baoxiao_stopCar+baoxiao_money as total_money1,0 as total_money2 From baoxiao Where baoxiao_isOver=1 AND baoxiao_isOverTime>={$stime} AND baoxiao_isOverTime<{$ntime} and baoxiao_type not in('打款蒋政') ".
		 "Union all ".
		 "Select 0 as total_money1,baoxiao_money as total_money2 From baoxiao Where baoxiao_isOver=1 AND baoxiao_isOverTime>={$stime} AND baoxiao_isOverTime<{$ntime} and baoxiao_type ='购买车辆费用') kk";
		$list=$model->getListBySql_a($sql);
		return $list[0];
	}

	function getZj($stime,$ntime){
		$list=null;
		$model = $this->createModel("rules",dirname( __FILE__ ));
		$sql="Select round(sum(car_infactamount)/60,2) as total_money From car Where car_recycle!=1 and car_saleDate<{$ntime} and (car_status in (0,1,2) or (car_status=3 and car_cancelDate>={$ntime}))";
		$list=$model->getListBySql_a($sql);
		return $list[0]['total_money'];
	}


	function profitList()
	{
		
		//print_r("expression");exit;
		$searchyear=Request::getVar("searchyear","get");
		$model = $this->createModel("rules",dirname( __FILE__ ));
		$nowyear=empty($searchyear) ? date("Y") : $searchyear;
		$nowmonth=date("m");
		if($nowyear<date("Y")){
			$nowmonth=12;
		}
		if($nowyear>date("Y")){
			$nowmonth=0;
		}

		$list=null;
		for($i=1;$i<=$nowmonth;$i++){
			$stime=strtotime($nowyear."-".$i."-01 00:00:00");
			$ntime_a=strtotime($nowyear."-".($i+1)."-01 23:59:59");
			if($i==12){
				$ntime_a=strtotime(($nowyear+1)."-01-01 23:59:59");
				
			}
			
			$ntime=strtotime("-1day",$ntime_a);
			//$sql="select sum(money) from account_log where money>0 and add_time>{$stime} and add_time<{$ntime}";
			//$num = $model->getListBySql($sql);
			//print_r($num);exit;
			$list_a['a']=$this->getShouru($stime,$ntime);
			$list_a['b']=$this->getMaicheshouru($stime,$ntime);
			$list_a['c']=$list_a['a']-$list_a['b'];
			$getZhichu=$this->getZhichu($stime,$ntime);
			$list_a['d']=$getZhichu['total_money1'];
			$list_a['e']=$getZhichu['total_money2'];
			$list_a['f']=$list_a['d']-$list_a['e'];
			$list_a['g']=$this->getZj($stime,$ntime);
			$list_a['h']=$list_a['c']-$list_a['f']-$list_a['g'];
			$list[]=$list_a;
			//print_r($list_a);
			
		}
		$sql="select * from finance_profit Where year={$nowyear} Order by month";
		$profitList = $model->getListBySql($sql);


		$sql="Select sum(car_infactamount) as total_money From car Where car_recycle!=1 and car_status in (0,1,2)";
		$tmpInfo = $model->getInfo($sql);
		$total_money=$tmpInfo['total_money'];
		
		$sql="Select val From sys_config Where obj_name='BASE_PROFIT' And obj_property='{$nowyear}'";
		$tmpInfo = $model->getInfo($sql);
		$base_profit=floatval($tmpInfo['val']);
		
		$sql="Select a.*,b.emp_name,b.emp_sex,b.emp_EntryDate,c.shop_name,d.title,round(a.percent*{$total_money}/100,2) as percent_sum 
				From finance_profit_emp a Left Join emp b On a.emp_id=b.emp_id 
				Left Join shop c On b.emp_shopid=c.shop_id 
				Left Join employee_level d On b.emp_post=d.id 
				Where startyear={$nowyear} Order by a.emp_id";
		$empList = $model->getListBySql($sql);
		


		$view  = $this->createView("operator/system/profit/list.html");
		$object = new stdClass();
		$object->list = $list;

		$object->time = $nowyear."-".($nowmonth-1);
		

		$object->nowyear = $nowyear;
		$object->nowmonth = $nowmonth;
		$object->searchyear = $searchyear;
		$object->infactyear = date("Y");
		$object->profitlist = $profitList;
		$object->emplist = $empList;
		$object->total = 0;
		$object->addtime = date("Y-m-d H:i:s",time());
		$object->base_profit=$base_profit;
		$view->assign($object);
		$view->display();


	}

	
	
	function create()
	{
		$uid=Request::getVar("uid");
		$searchyear=Request::getVar("searchyear");
		$nowyear=empty($searchyear) ? date("Y") : $searchyear;
		$empInfo=array();
		if ($uid){
			$model = $this->createModel("rules",dirname( __FILE__ ));
			$sql="Select a.*,b.emp_name From finance_profit_emp a Left Join emp b On a.emp_id=b.emp_id Where a.id={$uid}";
			$empInfo = $model->getInfo($sql);
		}else{
			$empInfo['startyear']=$nowyear;
			//$empInfo['startmonth']=date("m");
			$empInfo['endyear']=$nowyear;
		}
		$view  = $this->createView("operator/system/profit/create.html");
		$object = new stdClass();
		$object->emp = $empInfo;
		$object->task = $uid?"update":"insert";
		$view->assign($object);
		$view->display();
	}
	
	function insert()
	{
		$re=true;
		$u = Request::getVar('paicheDriver2','post');
		$model = $this->createModel("rules",dirname( __FILE__ ));

		$object = new stdClass();
		$object->emp_id = $u;
		$object->percent = Request::getVar('percent','post');
		$object->startyear = Request::getVar('startyear','post');
		$object->startmonth = Request::getVar('startmonth','post');
		$aa = Request::getVar('endyear','post');
		$object->endyear = empty($aa)?0:$aa;
		$aa = Request::getVar('endmonth','post');
		$object->endmonth = empty($aa)?0:$aa;
		if ($model->store($object,'finance_profit_emp')){	
		}
		else{
			$re=false;
		}
		$object = new stdClass();
		$object->result = $re ? "添加成功！":"添加失败，返回重试！";
		$view  = $this->createView("operator/business/result.html");
		$view->assign($object);
		$view->display();
	}
		
	function update()
	{
		$re=true;
		$model = $this->createModel("rules",dirname( __FILE__ ));
		$aid = Request::getVar('uid','post');
		$u = Request::getVar('paicheDriver2','post');
		
		$object = new stdClass();
		$object->id = $aid;
		$object->emp_id = $u;
		$object->percent = Request::getVar('percent','post');
		$object->startyear = Request::getVar('startyear','post');
		$object->startmonth = Request::getVar('startmonth','post');
		$aa = Request::getVar('endyear','post');
		$object->endyear = empty($aa)?0:$aa;
		$aa = Request::getVar('endmonth','post');
		$object->endmonth = empty($aa)?0:$aa;
		
		if ($model->update($object,'id','finance_profit_emp')){
		}
		else{
			$re=false;
		}
		$object = new stdClass();
		$object->result = $re ? "修改成功！":"修改失败，返回重试！";
		$view  = $this->createView("operator/business/result.html");
		$view->assign($object);
		$view->display();
	}
	
	function detail()
	{
		$uid=Request::getVar("uid");
		$recid=Request::getVar("recid");
		$searchyear=Request::getVar("searchyear");
		$model = $this->createModel("rules",dirname( __FILE__ ));
		
		$nowyear=empty($searchyear) ? date("Y") : $searchyear;
		$sql="Select a.* From finance_profit_emp a Where a.id={$recid}";
		$empInfo = $model->getInfo($sql);
		$smonth=$empInfo['startmonth'];
		$emonth=$empInfo['endmonth'];
		
		$sql="select * from finance_profit_emp_detail Where emp_id={$uid} And year={$nowyear} And month>={$smonth} And month<={$emonth} Order by year,month";
		$profitList = $model->getListBySql($sql);

		$view  = $this->createView("operator/system/profit/profitlist.html");
		$object = new stdClass();
		$object->nowyear = $nowyear;
		$object->profitlist = $profitList;
		$object->total = 0;
		$view->assign($object);
		$view->display();
	}
    
	function delete()
	{
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "list.php?searchyear=".Request::getVar("searchyear");
		}
		$uid = Request::getVar('uid','get');
		
		$model = $this->createModel("rules",dirname( __FILE__ ));
		if ($model->delete($uid,"finance_profit_emp")){
			Components::save_admin_log("删除了ID为".$uid."的员工占股记录");
			$this->redirect($forward,"删除成功");
		}
		
	}

}

