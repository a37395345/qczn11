<?php
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('operator.navi.admincontroller');
import('operator.navi.privilegehelper');
import('imag.fusecookie');

error_reporting(E_ERROR);

class RefuelController extends AdminController
{
	function __construct($config = array())
	{
		parent::__construct($config);
		
		$this->registerTask( 'list','getList');
		$this->registerTask( 'create','create');
		$this->registerTask( 'insert','insert');
		$this->registerTask( 'modify','modify');
		$this->registerTask( 'update','update');
		$this->registerTask( 'delete','delete');
		$this->registerTask( 'copy','copy');
		$this->registerTask( 'check','check');
		$this->registerTask( 'check_accept','check_accept');
		$this->registerTask( 'bao','bao');
		$this->registerTask( 'bao_accept','bao_accept');
		$this->registerTask( 'ret','ret');
		$this->registerTask( 'ret_accept','ret_accept');
		$this->registerTask( 'getDriverList','getDriverList');
		
	}
	function display(){
		echo "display";
	}
	function getList()
	{
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$search_startDate=Request::getVar('search_startDate','get');
		$search_endDate=Request::getVar('search_endDate','get');
		$carid=Request::getVar('paicheCar2','get');
		$man=Request::getVar('paicheDriver','get');
		
		$base_url = "list.php?";
		$per_page = 10;
		
		$model = $this->createModel("finance",dirname( __FILE__ ));
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		
		$where="a.`refuel_recycle`!=1";
		if(!empty($search_startDate)){
			$base_url.="&search_startDate={$search_startDate}";
            $where .=" AND a.refuel_date>='".strtotime($search_startDate)."'";
        }
		if(!empty($search_endDate)){
			$base_url.="&search_endDate={$search_endDate}";
            $where .=" AND a.refuel_date<='".strtotime($search_endDate)."'";
        }
        if (!empty($carid)){
        	$base_url.="&paicheCar2={$carid}";
            $where .=" AND a.car_id='{$carid}'";
        }
        if (!empty($man)){
        	$base_url.="&paicheDriver={$man}";
            $where .=" AND a.refuel_man='{$man}'";
        }
        		
		$sql="SELECT a.*,c.car_num FROM `refuel` AS a ".
			 "LEFT JOIN `car` AS c ON a.car_id=c.car_id WHERE {$where} ORDER BY a.refuel_date DESC";
		$List = $model->getListBySql($start,$per_page, $sql);
		
		$sql="SELECT count(*) as total FROM `refuel` AS a WHERE {$where}";
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
		$view  = $this->createView("operator/finance/refuel/list.html");
		
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();		
		$object->list = $List;
		$object->total = $total_item;
		$view->assign($object);
		$view->display();
	}
	function create()
	{
		$object = new stdClass();
		$object->task = "insert";
        
        $view  = $this->createView("operator/finance/refuel/create.html");
		$view->assign($object);
		$view->display();
	}
	function insert()
	{
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "copy.php";
		}
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$empname=$model->getEmpName($_SESSION['a_uid']);
		$refuel_km=Request::getVar('refuel_km','post');
		
		$object = new stdClass();
		$object->car_id = Request::getVar('paicheCar2','post');
		$object->refuel_date = strtotime(Request::getVar('refuel_date','post'));
		$object->refuel_number = Request::getVar('refuel_number','post');
		$object->refuel_money = Request::getVar('refuel_money','post');
		$object->refuel_km = empty($refuel_km)?0:$refuel_km;
		$object->refuel_man = Request::getVar('paicheDriver','post');
		$object->refuel_remarks = Request::getVar('refuel_remarks','post');
		$object->refuel_user = $empname;
		$object->refuel_times = time();
		$recid=$model->store($object,"refuel");
		if ($recid>0){
			$forward = "copy.php?uid={$recid}";
			Components::save_admin_log("添加了油卡加油记录");
			$this->redirect($forward,"添加成功");
		}else{
			$forward = "list.php";
			$this->redirect($forward,"添加失败");
		}
	}
	function copy(){
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$sql="SELECT a.*,c.car_num FROM `refuel` AS a ".
			 "LEFT JOIN `car` AS c ON a.car_id=c.car_id WHERE a.`refuel_id`={$uid}";
		$Info = $model->getInfo(0,$sql);
        $Info['refuel_id']=0;
		$object = new stdClass();
		$object->list = $Info;
		$object->task = "insert";
        
        $view  = $this->createView("operator/finance/refuel/create.html");
		$view->assign($object);
		$view->display();
	}
	function modify()
	{
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$sql="SELECT a.*,c.car_num FROM `refuel` AS a ".
			 "LEFT JOIN `car` AS c ON a.car_id=c.car_id WHERE a.`refuel_id`={$uid}";
		$Info = $model->getInfo(0,$sql);
        
		$object = new stdClass();
		$object->list = $Info;
		$object->task = "update";
        
        $view  = $this->createView("operator/finance/refuel/create.html");
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
		$refuel_km=Request::getVar('refuel_km','post');
		if(empty($uid))
		{
			Response::redirect($forward,"Need id!");
		}
		$model = $this->createModel("finance",dirname( __FILE__ ));
		
		$object = new stdClass();
		$object->refuel_id = $uid;
		$object->car_id = Request::getVar('paicheCar2','post');
		$object->refuel_date = strtotime(Request::getVar('refuel_date','post'));
		$object->refuel_number = Request::getVar('refuel_number','post');
		$object->refuel_money = Request::getVar('refuel_money','post');
		$object->refuel_km = empty($refuel_km)?0:$refuel_km;;
		$object->refuel_man = Request::getVar('paicheDriver','post');
		$object->refuel_remarks = Request::getVar('refuel_remarks','post');
		
		if ($model->update($object,'refuel_id',"refuel"))
		{
			Components::save_admin_log("修改了油卡加油记录,id={$uid}");
			$this->redirect($forward,"修改成功");
		}else{
			$this->redirect($forward,"修改失败");
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
		if(empty($uid))
		{
			Response::redirect($forward,"Need id!");
		}
		
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$empname=$model->getEmpName($_SESSION['a_uid']);
		
		
		$object = new stdClass();
		$object->refuel_id = $uid;
		$object->refuel_recycle = 1;
		$object->refuel_recycleTime = time();
		$object->refuel_recycleUser = $empname;
		
		$sql="Delete From refuel Where refuel_id = {$uid}";
		if ($model->update("","","",$sql))
		{
			Components::save_admin_log("删除了加油记录,id={$uid}");
			$this->redirect($forward,"删除成功");
		}else{
			$this->redirect($forward,"删除失败");
		}
	}

	function getDriverList(){
		$pList=array();
		$carid=Request::getVar('carid','get');
		$date=Request::getVar('ddate','get');
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$sql="SELECT a.paicheDriver,d.emp_name FROM paiche AS a LEFT JOIN emp AS d ON a.paicheDriver=d.emp_id ".
				"Where a.paicheCar={$carid} AND FROM_UNIXTIME( a.paiche_startDate,'%Y-%m-%d') <='{$date}' AND FROM_UNIXTIME(a.paiche_endDate,'%Y-%m-%d') >='{$date}' ";

		$pList=$model->getListBySql(0,200,$sql);
		
		$total   = count($pList);
    	echo json_encode(array('status'=>0,'totalRecords'=>$total, 'data'=>$pList));
	}
}
?>