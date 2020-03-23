<?php
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('operator.navi.admincontroller');
import('operator.navi.privilegehelper');
import('imag.fusecookie');

error_reporting(E_ERROR);

class LeaveController extends AdminController
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
		$this->registerTask( 'check','check');
		$this->registerTask( 'check_accept','check_accept');
		$this->registerTask( 'recheck','recheck');
	}
	function display(){
		echo "display";
	}
	function getList()
	{
		$op=Request::getVar('op','get');
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$search_startDate=Request::getVar('search_startDate','get');
		$search_endDate=Request::getVar('search_endDate','get');
		
		$base_url = "list.php?";
		$per_page = 10;
		
		$model = $this->createModel("finance",dirname( __FILE__ ));
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		
		$where="a.`leave_recycle`!=1";
		if(!empty($search_startDate)){
			$base_url.="&search_startDate={$search_startDate}";
            $where .=" AND a.leave_date>='".strtotime($search_startDate)."'";
        }
		if(!empty($search_endDate)){
			$base_url.="&search_endDate={$search_endDate}";
            $where .=" AND a.leave_date<='".strtotime($search_endDate)."'";
        }
		if ($op=="check"){
        	$where .=" AND a.leave_isAgree=0 ";
        }
        		
		$sql="SELECT a.*,c.emp_name FROM `emp_leave` AS a ".
			 "LEFT JOIN `emp` AS c ON a.emp_id=c.emp_id WHERE {$where} ORDER BY a.leave_date DESC";
		$List = $model->getListBySql($start,$per_page, $sql);
		$sql="SELECT COUNT(*) AS total FROM `emp_leave` AS a WHERE {$where}";
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
		$view  = $this->createView("operator/finance/leave/list.html");
		
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();		
		$object->list = $List;
		$object->total = $total_item;
		$object->op=$op;
		$view->assign($object);
		$view->display();
	}
	function create()
	{	
		$item=Request::getVar('item','get');
		if (empty($item)) $item=0;
        
		$object = new stdClass();
		$object->task = "insert";
		$object->item = $item;
        
        $view  = $this->createView("operator/finance/leave/create.html");
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
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$empname=$model->getEmpName($_SESSION['a_uid']);
		$money=Request::getVar('leave_money','post');
		
		$object = new stdClass();
		$object->emp_id = Request::getVar('paicheDriver2','post');
		$object->leave_date = strtotime(Request::getVar('leave_date','post'));
		$object->leave_item = Request::getVar('leave_item','post');
		$object->leave_day = Request::getVar('leave_day','post');
		$object->leave_money = empty($money)? 0 : $money;
		$object->leave_remarks = Request::getVar('leave_remarks','post');
		$object->leave_man = $empname;
		$object->leave_times = time();
		
		if ($model->store($object,"emp_leave")){
			Components::save_admin_log("添加了员工请假记录");
			$this->redirect($forward,"添加成功");
		}else{
			$this->redirect($forward,"添加失败");
		}
	}
	function modify()
	{
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$sql="SELECT a.*,c.emp_name FROM `emp_leave` AS a ".
			 "LEFT JOIN `emp` AS c ON a.emp_id=c.emp_id WHERE a.`leave_id`={$uid}";
		$Info = $model->getInfo(0,$sql);
        
		$object = new stdClass();
		$object->list = $Info;
		$object->task = "update";
        
        $view  = $this->createView("operator/finance/leave/create.html");
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
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$money=Request::getVar('leave_money','post');
		
		$object = new stdClass();
		$object->leave_id = $uid;
		$object->emp_id = Request::getVar('paicheDriver2','post');
		$object->leave_date = strtotime(Request::getVar('leave_date','post'));
		$object->leave_item = Request::getVar('leave_item','post');
		$object->leave_day = Request::getVar('leave_day','post');
		$object->leave_money = empty($money)? 0 : $money;
		$object->leave_remarks = Request::getVar('leave_remarks','post');
		
		if ($model->update($object,'leave_id',"emp_leave"))
		{
			Components::save_admin_log("修改了请假记录,id={$uid}");
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
		$object = new stdClass();
		$object->leave_id = $uid;
		$object->leave_recycle = 1;
		$object->leave_recycleTime = time();
		
		if ($model->update($object,'leave_id',"emp_leave"))
		{
			Components::save_admin_log("删除了请假记录,id={$uid}");
			$this->redirect($forward,"删除成功");
		}else{
			$this->redirect($forward,"删除失败");
		}
	}
	function recheck()
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
		$object = new stdClass();
		$object->leave_id = $uid;
		$object->leave_isAgree = 0;
		
		if ($model->update($object,'leave_id',"emp_leave"))
		{
			$this->redirect($forward,"反审核成功");
		}else{
			$this->redirect($forward,"反审核失败");
		}
	}
	function check()
	{
		$uid = Request::getVar('uid','get');

		$model = $this->createModel("finance",dirname( __FILE__ ));
		$sql="SELECT a.*,c.emp_name FROM `emp_leave` AS a ".
			 "LEFT JOIN `emp` AS c ON a.emp_id=c.emp_id WHERE a.`leave_id`={$uid}";
		$Info = $model->getInfo(0,$sql);
		
		$object = new stdClass();
		$object->list = $Info;
		$object->task = "check_accept";
        
        $view  = $this->createView("operator/finance/leave/create.html");
		$view->assign($object);
		$view->display();
	}
	function check_accept()
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
		
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$empname=$model->getEmpName($_SESSION['a_uid']);
		
		$object = new stdClass();
		$object->leave_id = $uid;
		$object->leave_isAgree = Request::getVar('leave_isAgree','post');
		$object->leave_isAgreeTime = time();
		$object->leave_isAgreeMan = $empname;
		$object->leave_isAgreeRemarks = Request::getVar('leave_isAgreeRemarks','post');
		
		if ($model->update($object,'leave_id',"emp_leave"))
		{
			$this->redirect($forward,"审核成功");
		}else{
			$this->redirect($forward,"审核失败");
		}
	}

}
?>