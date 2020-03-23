<?php
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('operator.navi.admincontroller');
import('operator.navi.privilegehelper');
import('imag.fusecookie');

error_reporting(E_ERROR);

class BorrowController extends AdminController
{
	function __construct($config = array())
	{
		parent::__construct($config);
		
		$this->registerTask( 'first','getFirst');
		$this->registerTask( 'list','getList');
		$this->registerTask( 'create','create');
		$this->registerTask( 'insert','insert');
		$this->registerTask( 'modify','modify');
		$this->registerTask( 'update','update');
		$this->registerTask( 'delete','delete');
		$this->registerTask( 'detail','detail');
		$this->registerTask( 'check','check');
		$this->registerTask( 'check_accept','check_accept');
		$this->registerTask( 'bao','bao');
		$this->registerTask( 'bao_accept','bao_accept');
		$this->registerTask( 'ret','ret');
		$this->registerTask( 'ret_accept','ret_accept');
	}
	function display(){
		echo "display";
	}
	

	function getFirst(){
		//print_r("expression");exit;
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$sql_90="SELECT Sum(baoxiao_money) as baoxiao_money,0 AS other_money,0 AS now_money From baoxiao Where baoxiao_isOver=1 AND baoxiao_type ='打款备用金'";
		$sql_91="SELECT 0 AS baoxiao_money,SUM(money) AS other_money,0 AS now_money FROM account_log WHERE bill_type=3 AND account_type='备用金归还'";

		$sql_92="SELECT 0 AS baoxiao_money,0 AS other_money,SUM(money) AS now_money FROM account_log Where bank_id=17";
		
		$sql="Select SUM(baoxiao_money-other_money) as total_money,SUM(baoxiao_money-other_money+now_money) as now_money From ({$sql_90} Union All {$sql_91} Union All {$sql_92}) kk";
		
		//print_r($sql);exit;
		$beiyong = $model->getInfo(0,$sql);
		
		$sql="Select c.emp_name,a.* From emp as c Inner Join (Select borrow_emp,Sum(borrow_money) as borrow_money,Sum(borrow_Returnmoney) as borrow_Returnmoney From borrow Where borrow_isAccount=1 and borrow_money<>borrow_Returnmoney Group by borrow_emp Having Sum(borrow_money) <> Sum(borrow_Returnmoney)) as a ON a.borrow_emp=c.emp_id";
		$List = $model->getListBySql(0,10000, $sql);
		
		$object = new stdClass();
		$object->beiyong = $beiyong;
        $object->list = $List;
        $object->all_money1 =0;
        $object->all_money2 =0;
        
        $view  = $this->createView("operator/finance/borrow/first.html");
		$view->assign($object);
		$view->display();
		
	}
	function getList()
	{
		//print_r("expression");exit;
		$op=Request::getVar('op','get');
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$search_startDate=Request::getVar('search_startDate','get');
		$search_endDate=Request::getVar('search_endDate','get');
		$search_emp=Request::getVar('search_emp','get');
		$search_empname=Request::getVar('search_empname','get');
		$search_item=Request::getVar('search_item','get');
		
		$base_url = "list.php?op={$op}";
		$per_page = 10;
		
		$model = $this->createModel("finance",dirname( __FILE__ ));
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		
		$where="a.`borrow_recycle`!=1";
		if(!empty($search_startDate)){
			$base_url.="&search_startDate={$search_startDate}";
            $where .=" AND a.borrow_date>='".strtotime($search_startDate)."'";
        }
		if(!empty($search_endDate)){
			$base_url.="&search_endDate={$search_endDate}";
            $where .=" AND a.borrow_date<='".strtotime($search_endDate)."'";
        }
		if(!empty($search_emp)){
			$base_url.="&search_emp={$search_emp}";
            $where .=" AND a.borrow_isAgree=1 AND a.borrow_emp={$search_emp}";
        }
		if(!empty($search_empname)){
			$base_url.="&search_empname={$search_empname}";
            $where .=" AND c.emp_name like '%{$search_empname}%'";
        }
		if(!empty($search_item)){
			$base_url.="&search_item={$search_item}";
			if ($search_item==1)
				$where .=" AND a.borrow_Returnmoney=0";
			elseif ($search_item==2)
				$where .=" AND a.borrow_Returnmoney<>0 and a.borrow_Returnmoney<>borrow_money";
			else
				$where .=" AND a.borrow_Returnmoney<>0 and a.borrow_Returnmoney=borrow_money";
        }
        if ($op=="check"){
        	$where .=" AND a.borrow_isAgree=0 ";
        }
        if ($op=="bao"){
        	$where .=" AND a.borrow_isAgree=1 AND a.borrow_isAccount=0 ";
        }
		if ($op=="return"){
        	$where .=" AND a.borrow_isAccount=1 AND a.borrow_Returnmoney<a.borrow_money ";
        }
		
		$sql="SELECT a.*,c.emp_name FROM `borrow` AS a ".
			 "LEFT JOIN `emp` AS c ON a.borrow_emp=c.emp_id WHERE {$where} ORDER BY a.borrow_times DESC";
		$List = $model->getListBySql($start,$per_page, $sql);
		$sql="SELECT COUNT(*) AS total FROM `borrow` AS a LEFT JOIN `emp` AS c ON a.borrow_emp=c.emp_id WHERE {$where}";
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
		$view  = $this->createView("operator/finance/borrow/list.html");
		
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();		
		$object->list = $List;
		$object->total = $total_item;
		$object->op=$op;
		$object->search_emp=$search_emp;
		$object->search_empname=$search_empname;
		$object->search_item=$search_item;
		$view->assign($object);
		$view->display();
	}
	function create()
	{	
		$item=Request::getVar('item','get');
		if (empty($item)) $item=1;
        
		$object = new stdClass();
		$object->task = "insert";
		$object->item = $item;
        
        $view  = $this->createView("operator/finance/borrow/create.html");
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
		
		$object = new stdClass();
		$object->borrow_code = date('YmdHis',time());
		$object->borrow_emp = Request::getVar('paicheDriver2','post');
		$object->borrow_date = strtotime(Request::getVar('borrow_date','post'));
		$object->borrow_money = Request::getVar('borrow_money','post');
		$object->borrow_remarks = Request::getVar('borrow_remarks','post');
		$object->borrow_man = $empname;
		$object->borrow_times = time();
		
		if ($model->store($object,"borrow")){
			Components::save_admin_log("添加了借款单");
			$this->redirect($forward,"添加成功");
		}else{
			$this->redirect($forward,"添加失败");
		}
	}
	function modify()
	{
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$sql="SELECT a.*,c.emp_name FROM `borrow` AS a ".
			 "LEFT JOIN `emp` AS c ON a.borrow_emp=c.emp_id WHERE a.`borrow_id`={$uid}";
		$Info = $model->getInfo(0,$sql);
        
		$object = new stdClass();
		$object->list = $Info;
		$object->task = "update";
        
        $view  = $this->createView("operator/finance/borrow/create.html");
		$view->assign($object);
		$view->display();
	}
	function detail()
	{
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$sql="SELECT a.*,c.emp_name FROM `borrow` AS a ".
			 "LEFT JOIN `emp` AS c ON a.borrow_emp=c.emp_id WHERE a.`borrow_id`={$uid}";
		$Info = $model->getInfo(0,$sql);
        
		$object = new stdClass();
		$object->list = $Info;
        
        $view  = $this->createView("operator/finance/borrow/detail.html");
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
		
		$object = new stdClass();
		$object->borrow_id = $uid;
		$object->borrow_emp = Request::getVar('paicheDriver2','post');
		$object->borrow_date = strtotime(Request::getVar('borrow_date','post'));
		$object->borrow_money = Request::getVar('borrow_money','post');
		$object->borrow_remarks = Request::getVar('borrow_remarks','post');
		
		if ($model->update($object,'borrow_id',"borrow"))
		{
			Components::save_admin_log("修改了借款单,id={$uid}");
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
		$object->borrow_id = $uid;
		$object->borrow_recycle = 1;
		$object->borrow_recycleTime = time();
		
		if ($model->update($object,'borrow_id',"borrow"))
		{
			Components::save_admin_log("删除了借款单,id={$uid}");
			$this->redirect($forward,"删除成功");
		}else{
			$this->redirect($forward,"删除失败");
		}
	}
	function check()
	{
		$uid = Request::getVar('uid','get');

		$model = $this->createModel("finance",dirname( __FILE__ ));
		$sql="SELECT a.*,c.emp_name FROM `borrow` AS a ".
			 "LEFT JOIN `emp` AS c ON a.borrow_emp=c.emp_id WHERE a.`borrow_id`={$uid}";
		$Info = $model->getInfo(0,$sql);
		
		$object = new stdClass();
		$object->list = $Info;
		$object->task = "check_accept";
        
        $view  = $this->createView("operator/finance/borrow/create.html");
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
		$object->borrow_id = $uid;
		$object->borrow_isAgree = Request::getVar('borrow_isAgree','post');
		$object->borrow_isAgreeTime = time();
		$object->borrow_isAgreeMan = $empname;
		$object->borrow_isAgreeRemarks = Request::getVar('borrow_isAgreeRemarks','post');
		
		if ($model->update($object,'borrow_id',"borrow"))
		{
			$re="审核成功";
		}else{
			$re="审核失败，返回重试！";
		}
		$object = new stdClass();
		$object->result = $re;
		$view  = $this->createView("operator/business/result.html");
		$view->assign($object);
		$view->display();
	}
	function bao()
	{
		$uid = Request::getVar('uid','get');

		$model = $this->createModel("list",dirname(dirname( __FILE__ ))."\business");		
		$fields="`payment_id`,`payment_name`,`payment_fee`";
		$payments_list=$model->getEmpList($fields," AND payment_recycle!=1","payments");
		$fields="`bank_id`,`bank_name`";
		$bank_list=$model->getEmpList($fields," AND bank_id=17","banks");
		
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$sql="SELECT a.*,c.emp_name FROM `borrow` AS a ".
			 "LEFT JOIN `emp` AS c ON a.borrow_emp=c.emp_id WHERE a.`borrow_id`={$uid}";
		$Info = $model->getInfo(0,$sql);
		
		$object = new stdClass();
		$object->list = $Info;
		$object->task = "bao_accept";
		$object->paymentslist = $payments_list;
		$object->banklist = $bank_list;
        
        $view  = $this->createView("operator/finance/borrow/create.html");
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
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$empname=$model->getEmpName($_SESSION['a_uid']);
		
		$object = new stdClass();
		$object->borrow_id = $uid;
		$object->borrow_isAccount = 1;
		$object->borrow_AccountTime = time();
		$object->borrow_AccountMan = $empname;
		
		$money=Request::getVar('borrow_money','post');
		$payments=Request::getVar('payments','post');
		$bank=Request::getVar('bank','post');

		$object2 = new Object();
    	$object2->paiche_id = 0;
	    $object2->payments_id = $payments;
	    $object2->bank_id = $bank;
	    $object2->money = -1*$money;
	    $object2->add_time = time();
	    $object2->name = "员工借款出账";
	    $object2->bill_id = $uid;
		$re=true;
		if ($model->update($object,'borrow_id',"borrow") && $model->store($object2,"account_log"))
		{
		}else{
			$re=false;
		}
		
		$object = new stdClass();
		$object->result = $re ? "借款账务处理成功！":"借款账务处理失败，返回重试！";
		$view  = $this->createView("operator/business/result.html");
		$view->assign($object);
		$view->display();
	}
	function ret()
	{
		$uid = Request::getVar('uid','get');

		$model = $this->createModel("list",dirname(dirname( __FILE__ ))."\business");		
		$fields="`payment_id`,`payment_name`,`payment_fee`";
		$payments_list=$model->getEmpList($fields," AND payment_recycle!=1","payments");
		$fields="`bank_id`,`bank_name`";
		$bank_list=$model->getEmpList($fields," AND bank_id=17","banks");
		
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$sql="SELECT a.*,c.emp_name FROM `borrow` AS a ".
			 "LEFT JOIN `emp` AS c ON a.borrow_emp=c.emp_id WHERE a.`borrow_id`={$uid}";
		$Info = $model->getInfo(0,$sql);

		$object = new stdClass();
		$object->list = $Info;
		$object->task = "ret_accept";
		$object->paymentslist = $payments_list;
		$object->banklist = $bank_list;
		$object->btotal = 0;
        $object->rtotal = 0;
        $view  = $this->createView("operator/finance/borrow/create.html");
		$view->assign($object);
		$view->display();
	}
	function ret_accept()
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
		$object->borrow_id = $uid;
		$object->borrow_isReturn = 1;
		$object->borrow_Returnmoney = Request::getVar('borrow_haveReturnmoney','post')+Request::getVar('borrow_Returnmoney','post');
		$object->borrow_ReturnTime = time();
		$object->borrow_ReturnMan = $empname;
		
		$money=Request::getVar('borrow_Returnmoney','post');
		$payments=Request::getVar('payments','post');
		$bank=Request::getVar('bank','post');

		$object2 = new Object();
    	$object2->paiche_id = 0;
	    $object2->payments_id = $payments;
	    $object2->bank_id = $bank;
	    $object2->money = $money;
	    $object2->add_time = time();
	    $object2->name = "员工还款入帐";
	    $object2->bill_id = $uid;
		$re=true;
		if ($model->update($object,'borrow_id',"borrow") && $model->store($object2,"account_log"))
		{
		}else{
			$re=false;
		}
		
		$object = new stdClass();
		$object->result = $re ? "借款归还处理成功！":"借款归还处理失败，返回重试！";
		$view  = $this->createView("operator/business/result.html");
		$view->assign($object);
		$view->display();
	}
}
?>