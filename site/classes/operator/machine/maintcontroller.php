<?php
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('operator.navi.admincontroller');
import('operator.navi.privilegehelper');
import('imag.fusecookie');

error_reporting(E_ERROR);
class MaintController extends AdminController
{
	function __construct($config = array())
	{
		parent::__construct($config);
		
		$this->registerTask( 'create','create');
		$this->registerTask( 'insert','insert');
		$this->registerTask( 'modify','modify');
		$this->registerTask( 'update','update');
		$this->registerTask( 'delete','delete');
		$this->registerTask( 'first','first');
		$this->registerTask( 'list','plist');
		$this->registerTask( 'bao','bao');
		$this->registerTask( 'bao_accept','bao_accept');
	}
	function display(){
		echo "display";
	}
	function first(){
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$where="`car_recycle`!=1 AND `car_id` IN (SELECT `car_id` FROM `car_maintenance`)";
		$sql="Select Sum(nCount1) as nCount1,Sum(nCount2) as nCount2,Sum(nCount3) as nCount3,Sum(nCount4) as nCount4,Sum(nCount1+nCount2+nCount3+nCount4) as nCount From (
		Select count(*) as nCount1,0 as nCount2,0 as nCount3,0 as nCount4 From car Where {$where} and (car_status=0 or car_status=1) 
				Union All 
				Select 0 as nCount1,count(*) as nCount2,0 as nCount3,0 as nCount4 From car Where {$where} and car_status=2
				Union All 
				Select 0 as nCount1,0 as nCount2,count(*) as nCount3,0 as nCount4 From car Where {$where} and car_status=3 and car_changeDate=0
				Union All 
				Select 0 as nCount1,0 as nCount2,0 as nCount3,count(*) as nCount4 From car Where {$where} and car_status=3 and car_changeDate<>0) aa";

		$first = $model->getListBySql(0,100, $sql);
		$view  = $this->createView("operator/maint/first.html");
		
		$object = new stdClass();
		$object->first = $first;
		$view->assign($object);
		$view->display();
	}
	function plist()
	{

		$op=Request::getVar('op','get');
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$base_url = "list.php";
		$per_page = 10;
		$where="`car_recycle`!=1 AND `car_id` IN (SELECT `car_id` FROM `car_maintenance`)";
		$car_num=Request::getVar('car_num','get');
		$car_cartDate=Request::getVar('car_cartDate','get');
		$car_status=Request::getVar('car_status','get');
		
		if(!empty($car_num)){$where.=" AND car_num like '%".$car_num."%'";$base_url.="&car_num={$car_num}";}
	if(!empty($car_cartDate)){$where.=" AND car_cartDate='".strtotime($car_cartDate)."'";$base_url.="&car_cartDate={$car_cartDate}";}
	 	
		if ($car_status=="4"){
	 		$where.=" AND car_status = 3 AND car_changeDate<>0";
	 		$base_url.="?car_status={$car_status}";
	 	}else if ($car_status=="3"){
	 		$where.=" AND car_status = {$car_status} AND car_changeDate=0";
	 		$base_url.="?car_status={$car_status}";
	 	}else{
	 		$where.=" AND car_status != 3";
	 	}
	 	//print_r($base_url);exit;
	 	//if ($op=="account"){$where.=" AND a.maintenance_isAccount !=1";}
	 	
		$model = $this->createModel("machine",dirname( __FILE__ ));
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;		
		
		$sql="SELECT car_id,car_num,car_brand,car_saleDate,car_lastmaintDate,car_lastmaintKilo FROM `car` WHERE {$where} ORDER BY `car_id` DESC";
		$List = $model->getListBySql2($start,$per_page, $sql);
		$sql="SELECT COUNT(*) AS total FROM `car` WHERE {$where} ";
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
		$view  = $this->createView("operator/maint/list.html");
		
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();		
		$object->list = $List;
		$object->total = $total_item;
		$object->op=$op;
		$object->itemlist=$model->getListBySql(0,100,"Select option_name from zn_options Order by option_order");
		$object->car_status=$car_status;
		$view->assign($object);
		$view->display();
	}
	function create()
	{
		$Info = array();
		$Info['maintenance_type']='保养';
		$Info['maintenance_workhourmoney']=0;
		$Info['maintenance_fittingsmoney']=0;
		$Info['maintenance_money']=0;
		$model = $this->createModel("machine",dirname( __FILE__ ));
		
		$itemlist=$model->getListBySql(0,100,"Select * from zn_options Order by option_order");
		$object = new stdClass();
		$object->list = $Info;
		$object->itemlist=$itemlist;
		$object->task = "insert";
		$object->total_num = 0;
		$object->total_sum = 0;
                
        $view  = $this->createView("operator/maint/create.html");
		$view->assign($object);
		$view->display();
	}
	function insert()
	{			
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "list.php";
		}
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$re=true;
		$carid=Request::getVar('paicheCar2','post');
		
		$nextDate=Request::getVar('maintenance_nextdate','post');
		$nextKilo=Request::getVar('maintenance_nextkilo','post');
		$maintenance_type=Request::getVar('maintenance_type','post');
		$maintenance_date=Request::getVar('maintenance_date','post');
		
		$object = new stdClass();
	  	$object->car_id=$carid;
	  	$object->maintenance_type=$maintenance_type;
	  	$object->maintenance_date=strtotime($maintenance_date);
	  	$object->maintenance_nextdate=empty($nextDate)? 0 :strtotime($nextDate);
	  	$object->maintenance_nextkilo=empty($nextKilo)? 0: $nextKilo;
	  	$object->maintenance_km=Request::getVar('maintenance_km','post');
	  	$object->maintenance_workhourmoney=Request::getVar('maintenance_workhourmoney','post');
	  	$object->maintenance_fittingsmoney=Request::getVar('maintenance_fittingsmoney','post');
	  	$object->maintenance_money=Request::getVar('maintenance_money','post');
	  	$object->maintenance_remark=Request::getVar('maintenance_remark','post');
	  	
	  	$recid=$model->store($object,"car_maintenance");
	  	if ($recid>0){
		  	if ($maintenance_type=="保养"){
		  		$object1 = new stdClass();
		  		$object1->car_id=$carid;
		  		$object1->car_lastmaintDate=strtotime($maintenance_date);
		  		$object1->car_lastmaintKilo=Request::getVar('maintenance_km','post');
			  	$object1->car_nextmaintDate=empty($nextDate)? 0 : strtotime($nextDate);
			  	$object1->car_nextmaintKilo=empty($nextKilo)? 0: $nextKilo;
			  	if ($model->update($object1,'car_id')){}
				else{
					$re=false;
				}
		  	}
	  	}else{
	  		$re=false;
	  	}
	  	if ($recid>0 && $re){
	  		$arr_item=Request::getVar('item','post');
	  		for($i=0;$i<count($arr_item);$i++){
	  			$itemid=$arr_item[$i];
	  			$check=Request::getVar('maintenance_check_'.$itemid,'post');
	  			if ($check==1){
	  				$nextDate=Request::getVar('maintenance_nextdate_'.$itemid,'post');
					$nextKilo=Request::getVar('maintenance_nextkilo_'.$itemid,'post');
	  				$object = new Object();
					$object->fitting_maintid = $recid;
					$object->item_id = $itemid;
					$object->next_kilo = empty($nextKilo)? 0: $nextKilo;
				  	$object->next_date = empty($nextDate)? 0 :strtotime($nextDate);
				  	$object->remark = Request::getVar('maintenance_remark_'.$itemid,'post');
					if ($model->store($object,"car_maint_item")){
					}else{
						$re=false;
					}
	  			}
	  		}
	  	}
	  	if ($recid>0 && $re){
	  		$arr_name=Request::getVar('fitting_name','post');
			$arr_brand=Request::getVar('fitting_brand','post');
			$arr_model=Request::getVar('fitting_model','post');
			$arr_num=Request::getVar('fitting_num','post');
			$arr_unit=Request::getVar('fitting_unit','post');
			$arr_price=Request::getVar('fitting_price','post');
			$arr_sum=Request::getVar('fitting_sum','post');
	  		for($i=0;$i<count($arr_name);$i++){
				if ($arr_name[$i]!=""){//有效
					$object = new Object();
					$object->fitting_maintid = $recid;
					$object->fitting_name = $arr_name[$i];
					$object->fitting_brand = $arr_brand[$i];
				  	$object->fitting_model = $arr_model[$i];
				  	$object->fitting_num = $arr_num[$i];
				  	$object->fitting_unit = $arr_unit[$i];
				  	$object->fitting_price = $arr_price[$i];
				  	$object->fitting_sum = $arr_sum[$i];
					if ($model->store($object,"car_maint_fitting")){
					}else{
						$re=false;
					}
				}
			}
	  	}
        
		if ($re)
		{
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
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$sql = "SELECT a.*,b.car_num FROM `car_maintenance` AS a LEFT JOIN `car` AS b ON a.car_id=b.car_id WHERE a.`maintenance_id`='{$uid}'";
		$Info = $model->getInfoBySql($sql);
		
		$sql="Select a.*,b.* from zn_options as a Left Join (Select * From car_maint_item Where fitting_maintid={$uid}) b On a.option_id=b.item_id Order by option_order";
		$itemlist=$model->getListBySql(0,100,$sql);
		
		$object = new stdClass();
		$object->list = $Info;
		$object->itemlist=$itemlist;
		$object->task = "update";
		$object->total_num = 0;
		$object->total_sum = 0;
        
        $view  = $this->createView("operator/maint/create.html");
		$view->assign($object);
		$view->display();
	}
	function update()
	{	
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "list.php";
		}
		$uid = Request::getVar('uid','post');	
		if(empty($uid))
		{
			Response::redirect($forward,"Need id!");
		}
		
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$re=true;
		$carid=Request::getVar('paicheCar2','post');
		//$carinfo=$model->$model->getInfo($carid,"car","car_id");
		
		$nextDate=Request::getVar('maintenance_nextdate','post');
		$nextKilo=Request::getVar('maintenance_nextkilo','post');
		$maintenance_type=Request::getVar('maintenance_type','post');
		$maintenance_date=Request::getVar('maintenance_date','post');
				
		$object = new stdClass();
		$object->maintenance_id = $uid;
	  	$object->car_id=$carid;
	  	$object->maintenance_type=$maintenance_type;
	  	$object->maintenance_date=strtotime($maintenance_date);
	  	$object->maintenance_nextdate=empty($nextDate)? 0 :strtotime($nextDate);
	  	$object->maintenance_nextkilo=empty($nextKilo)? 0: $nextKilo;
	  	$object->maintenance_km=Request::getVar('maintenance_km','post');
	  	$object->maintenance_workhourmoney=Request::getVar('maintenance_workhourmoney','post');
	  	$object->maintenance_fittingsmoney=Request::getVar('maintenance_fittingsmoney','post');
	  	$object->maintenance_money=Request::getVar('maintenance_money','post');
	  	$object->maintenance_remark=Request::getVar('maintenance_remark','post');
		if ($model->update($object,'maintenance_id','car_maintenance')){
		  	if ($maintenance_type=="保养"){
		  		$object1 = new stdClass();
		  		$object1->car_id=$carid;
		  		$object1->car_lastmaintDate=strtotime($maintenance_date);
		  		$object1->car_lastmaintKilo=Request::getVar('maintenance_km','post');
		  		$object1->car_nextmaintDate=empty($nextDate)? 0 : strtotime($nextDate);
		  		$object1->car_nextmaintKilo=empty($nextKilo)? 0: $nextKilo;
			  	if ($model->update($object1,'car_id')){
			  	}else{
			  		$re=false;
			  	}
		  	}
	  	}else{
	  		$re=false;
	  	}
	  	
	  	if ($re){
	  		$model->delete2($uid,'car_maint_item','fitting_maintid');
	  		$arr_item=Request::getVar('item','post');
	  		for($i=0;$i<count($arr_item);$i++){
	  			$itemid=$arr_item[$i];
	  			$check=Request::getVar('maintenance_check_'.$itemid,'post');
	  			if ($check==1){
	  				$nextDate=Request::getVar('maintenance_nextdate_'.$itemid,'post');
					$nextKilo=Request::getVar('maintenance_nextkilo_'.$itemid,'post');
	  				$object = new Object();
					$object->fitting_maintid = $uid;
					$object->item_id = $itemid;
					$object->next_kilo = empty($nextKilo)? 0: $nextKilo;
				  	$object->next_date = empty($nextDate)? 0 :strtotime($nextDate);
				  	$object->remark = Request::getVar('maintenance_remark_'.$itemid,'post');
					if ($model->store($object,"car_maint_item")){
					}else{
						$re=false;
					}
	  			}
	  		}
	  	}
		
	  	$old=0;
	  	$arr_id=Request::getVar('fitting_id','post');
	  	$arr_name=Request::getVar('fitting_name','post');
		$arr_brand=Request::getVar('fitting_brand','post');
		$arr_model=Request::getVar('fitting_model','post');
		$arr_num=Request::getVar('fitting_num','post');
		$arr_unit=Request::getVar('fitting_unit','post');
		$arr_price=Request::getVar('fitting_price','post');
		$arr_sum=Request::getVar('fitting_sum','post');
	  	if ($re && !empty($arr_id)){//原来有配件
	  		for($i=0;$i<count($arr_id);$i++){
				if ($arr_name[$i]!=""){//修改
					$object = new Object();
					$object->fitting_id = $arr_id[$i];
					$object->fitting_name = $arr_name[$i];
					$object->fitting_brand = $arr_brand[$i];
				  	$object->fitting_model = $arr_model[$i];
				  	$object->fitting_num = $arr_num[$i];
				  	$object->fitting_unit = $arr_unit[$i];
				  	$object->fitting_price = $arr_price[$i];
				  	$object->fitting_sum = $arr_sum[$i];
					if ($model->update($object,"fitting_id","car_maint_fitting")){
					}else{
						$re=false;
					}
				}else{//删除
					if ($model->delete2($arr_id[$i],"car_maint_fitting","fitting_id")){
					}else{
						$re=false;
					}
				}
				$old++;
			}
	  	}
	  	if ($re ){//处理新增的
	  		for($i=$old;$i<count($arr_name);$i++){
				if ($arr_name[$i]!=""){//有效
					$object = new Object();
					$object->fitting_maintid = $uid;
					$object->fitting_name = $arr_name[$i];
					$object->fitting_brand = $arr_brand[$i];
				  	$object->fitting_model = $arr_model[$i];
				  	$object->fitting_num = $arr_num[$i];
				  	$object->fitting_unit = $arr_unit[$i];
				  	$object->fitting_price = $arr_price[$i];
				  	$object->fitting_sum = $arr_sum[$i];
					if ($model->store($object,"car_maint_fitting")){
					}else{
						$re=false;
					}
				}
			}
	  	}

		if ($re)
		{
			$this->redirect($forward,"修改成功!");
		}
		else
		{
			$this->redirect($forward,"修改失败!");
		}
	}
	function delete()
	{
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
            $forward = "list.php";
		}
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("machine",dirname( __FILE__ ));
		
		if ($model->delete2($uid,"car_maintenance","maintenance_id") && $model->delete2($uid,"car_maint_fitting","fitting_maintid")){
			Components::save_admin_log("删除了ID为".$uid."的维修记录");
			$this->redirect($forward,"删除成功");
		}
	}
	function bao()
	{
		$uid = Request::getVar('uid','get');

		$model = $this->createModel("list",dirname(dirname( __FILE__ ))."\business");		
		$fields="`payment_id`,`payment_name`,`payment_fee`";
		$payments_list=$model->getEmpList($fields," AND payment_recycle!=1","payments");
		$fields="`bank_id`,`bank_name`";
		$bank_list=$model->getEmpList($fields," AND bank_recycle!=1","banks");
		
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$sql = "SELECT a.*,b.car_num FROM `car_maintenance` AS a LEFT JOIN `car` AS b ON a.car_id=b.car_id WHERE a.`maintenance_id`='{$uid}'";
		$Info = $model->getInfoBySql($sql);
		
		$object = new stdClass();
		$object->list = $Info;
		$object->task = "bao_accept";
		$object->paymentslist = $payments_list;
		$object->banklist = $bank_list;
        
        $view  = $this->createView("operator/maint/create.html");
		$view->assign($object);
		$view->display();
	}
	function bao_accept()
	{
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "list.php";
		}
		$uid = Request::getVar('uid','post');
		if(empty($uid))
		{
			Response::redirect($forward,"Need id!");
		}
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$empname=$model->getEmpName($_SESSION['a_uid']);
		$money=Request::getVar('baoxiao_money','post');
		
		$object = new stdClass();
		$object->maintenance_id = $uid;
		$object->maintenance_isAccount = 1;
		$object->maintenance_Accountmoney = $money;
		$object->maintenance_AccountTime = time();
		$object->maintenance_AccountMan = $empname;
		
		$payments=Request::getVar('payments','post');
		$bank=Request::getVar('bank','post');

		$object2 = new Object();
    	$object2->paiche_id = 0;
	    $object2->payments_id = $payments;
	    $object2->bank_id = $bank;
	    $object2->money = -1*$money;
	    $object2->add_time = time();
	    $object2->name = "车辆维修报销付款";
		$re=true;
		if ($model->update($object,'maintenance_id','car_maintenance') && $model->store($object2,"account_log"))
		{
		}else{
			$re=false;
		}
		
		$object = new stdClass();
		$object->result = $re ? "车辆维修报销成功！":"车辆维修报销失败，返回重试！";
		$view  = $this->createView("operator/business/result.html");
		$view->assign($object);
		$view->display();
	}
}