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

error_reporting(E_ERROR);

class ContractController extends AdminController
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
		$this->registerTask( 'detail','detail');
		$this->registerTask( 'picture','picture');
		$this->registerTask( 'getNearList','getNearList');
	}
	function display(){
		echo "display";
	}


	function getList()
	{

		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$base_url = "list.php?a=1";
		$per_page = 10;
		$search_number=Request::getVar('contract_number','get');
		$search_startDate=Request::getVar('search_startDate','get');
		$search_endDate=Request::getVar('search_endDate','get');
		$busi_id = Request::getVar('b_id','get');
		$companyid=Request::getVar('company','get');
		$search_user=Request::getVar('paicheCounterMan2','get');
		
		$where="a.`contract_recycle` !=1";
		if(!empty($search_startDate)){
			$base_url.="&search_startDate={$search_startDate}";
            $where .=" AND a.contract_startdate>='".strtotime($search_startDate)."'";
        }
		if(!empty($search_endDate)){
			$base_url.="&search_endDate={$search_endDate}";
            $where .=" AND a.contract_enddate<='".strtotime($search_endDate)."'";
        }
		if (!empty($busi_id)){
        	$base_url.="&b_id={$busi_id}";
        	$where.=" AND a.contract_busitype={$busi_id}";
        }
        if (!empty($companyid)){
        	$base_url.="&company={$companyid}";
        	$where.=" AND a.contract_clientid={$companyid}";
        }
        if (!empty($search_user)){
        	$base_url.="&paicheCounterMan2={$search_user}";
        	$where.=" AND a.contract_CounterMan={$search_user}";
        }
		if (!empty($search_number)){
        	$base_url.="&contract_number={$search_number}";
        	$where.=" AND a.contract_number like '%{$search_number}%'";
        }
        		
		$model = $this->createModel("sales",dirname( __FILE__ ));
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		
		$sql="SELECT a.*,c.emp_name AS yewuyuan,g.client_name,d.item_name FROM `sales_contract` AS a ".
			 "LEFT JOIN emp AS c ON a.contract_CounterMan=c.emp_id ".
			 "LEFT JOIN item AS d ON a.contract_busitype=d.item_paicheType ".
			 "LEFT JOIN client AS g ON a.contract_clientid=g.client_id ".
			 "WHERE {$where} ORDER BY a.`contract_addtime` ";
		
		$List = $model->getListBySql($start,$per_page, $sql);
		$sql="SELECT COUNT(*) AS total FROM `sales_contract` AS a WHERE {$where}";
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
		$view  = $this->createView("operator/sales/contract/list.html");
		
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();		
		$object->list = $List;
		$object->total = $total_item;
		$object->companyid =$companyid;
		$object->companylist =$model->getListBySql(0,1000, "SELECT `client_id`,`client_name` FROM `client` WHERE `client_recycle`!=1");
		$object->category = $model->getListBySql(0,100,"SELECT `item_paicheType`,`item_name` FROM `item`");
		$view->assign($object);
		$view->display();
	}










	function create()
	{

        $model = $this->createModel("sales",dirname( __FILE__ ));
        $object = new stdClass();
		$object->contract_number = "";
        $recid=$model->store($object,"sales_contract");
        $Info =null;
		$Info['contract_id'] =$recid;
		$object = new stdClass();
		$object->list = $Info;
		$object->task = "insert";
		$object->category = $model->getListBySql(0,1000,"SELECT `item_paicheType`,`item_name` FROM `item`");
		$object->clientlist=$model->getListBySql(0,1000,"SELECT `client_id`,`client_name`,`client_Mlinker`,`client_Mphone` FROM `client` WHERE client_recycle!=1");
        
        $view  = $this->createView("operator/sales/contract/create.html");
		$view->assign($object);
		$view->display();
	}
	function getNum(){
		$contractNum=date('YmdHis',time());
		$model = $this->createModel("sales",dirname( __FILE__ ));
		$sql="SELECT count(*) from contract where contract_num={$contractNum}";
		$index=$model->getListBySql_a($sql);
		$index=$index[0]['count(*)'];
		if($index>0){
			return $this->getNum();
		}else{
			return $contractNum;
		}
	}


	function insert()
	{
		
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "list.php";
		}
		$model = $this->createModel("sales",dirname( __FILE__ ));
		$empname=$model->getEmpName($_SESSION['a_uid']);
		$uid = Request::getVar('uid','post');
		$contract_busitype=Request::getVar('contract_busitype','post');
		$object = new stdClass();
		$object->contract_id = $uid;

		$object->contract_number = $this->getNum();

		$object->contract_clientid = Request::getVar('paiche_name2','post');
		$object->contract_busitype=empty($contract_busitype)?0:$contract_busitype;
		$object->contract_startdate = strtotime(Request::getVar('contract_startdate','post'));
		$object->contract_enddate = strtotime(Request::getVar('contract_enddate','post'));
		$object->contract_CounterMan = Request::getVar('paicheCounterMan2','post');
		$object->contract_content = Request::getVar('contract_content','post');
		$object->contract_adduser = $empname;
		$object->contract_addtime = time();
		
		if ($model->update($object,'contract_id',"sales_contract")){
			$this->redirect($forward,"添加成功");
		}else{
			$this->redirect($forward,"添加失败");
		}
	}
	function modify()
	{
		
		//print_r("expression");exit;
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("sales",dirname( __FILE__ ));
		$sql="SELECT a.*,c.emp_name AS yewuyuan,g.client_name FROM `sales_contract` AS a ".
			 "LEFT JOIN emp AS c ON a.contract_CounterMan=c.emp_id ".
			 "LEFT JOIN client AS g ON a.contract_clientid=g.client_id ".
			 "WHERE `contract_id`={$uid}";
		$Info = $model->getInfo(0,$sql);

		$object = new stdClass();
		$object->list = $Info;
		$object->task = "update";
		
		$object->category = $model->getListBySql(0,1000,"SELECT `item_paicheType`,`item_name` FROM `item`");
        $object->clientlist=$model->getListBySql(0,1000,"SELECT `client_id`,`client_name`,`client_Mlinker`,`client_Mphone` FROM `client` WHERE client_recycle!=1");
		
        $view  = $this->createView("operator/sales/contract/create.html");
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
		$model = $this->createModel("sales",dirname( __FILE__ ));
		
		$contract_busitype=Request::getVar('contract_busitype','post');
		$arrDelimg=Request::getVar('delimg','post');
		
		$object = new stdClass();
		$object->contract_id = $uid;
		//$object->contract_number = Request::getVar('contract_number','post');
		$object->contract_clientid = Request::getVar('paiche_name2','post');
		$object->contract_busitype=empty($contract_busitype)?0:$contract_busitype;
		$object->contract_startdate = strtotime(Request::getVar('contract_startdate','post'));
		$object->contract_enddate = strtotime(Request::getVar('contract_enddate','post'));
		$object->contract_CounterMan = Request::getVar('paicheCounterMan2','post');
		$object->contract_content = Request::getVar('contract_content','post');
		
		if ($model->update($object,'contract_id',"sales_contract"))
		{
			if (!empty($arrDelimg)){
				foreach($arrDelimg as $key=>$val){
					$model->delete2($val,"sales_contract_images","id");
				}
			
			}
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
		
		$model = $this->createModel("sales",dirname( __FILE__ ));
		$object = new stdClass();
		$object->contract_id = $uid;
		$object->contract_recycle = 1;
		
		if ($model->update($object,'contract_id',"sales_contract"))
		{
			Components::save_admin_log("删除了租赁合同,id={$uid}");
			$this->redirect($forward,"删除成功");
		}else{
			$this->redirect($forward,"删除失败");
		}
	}
	function detail()
	{
		$uid = Request::getVar('uid','get');
		$cnum= Request::getVar('cnum','get');
		$model = $this->createModel("sales",dirname( __FILE__ ));
		$sql="SELECT a.*,c.emp_name AS yewuyuan,g.client_name,d.item_name FROM `sales_contract` AS a ".
			 "LEFT JOIN emp AS c ON a.contract_CounterMan=c.emp_id ".
			 "LEFT JOIN item AS d ON a.contract_busitype=d.item_paicheType ".
			 "LEFT JOIN client AS g ON a.contract_clientid=g.client_id ".
			 "WHERE ".(empty($uid) ? " a.contract_number='{$cnum}' and contract_recycle !=1" : " contract_id={$uid}");
		$Info = $model->getInfo(0,$sql);
		if (empty($Info)){
			echo '未发现合同号！';
			exit();
		}
		        
		$object = new stdClass();
		$object->list = $Info;
        
        $view  = $this->createView("operator/sales/contract/detail.html");
		$view->assign($object);
		$view->display();
	}
	function picture()
	{
		$contract_id = Request::getVar('contract_id','get');
		$nowserial=Request::getVar('nowserial','get');
		$model = $this->createModel("sales",dirname( __FILE__ ));
		$imagelist = $model->getCarImages($contract_id);
		$total=count($imagelist);
		
		$object = new stdClass();
		$object->imagelist = $imagelist;
		$object->nowserial = $nowserial;
		$object->total= $total;
        
        $view  = $this->createView("operator/sales/contract/picture.html");
		$view->assign($object);
		$view->display();
	}
	function getNearList()
	{
		$pList=array();
		$model = $this->createModel("sales",dirname( __FILE__ ));
		if($this->checkPrivilege("sales_contract")){
		$sql="SELECT a.*,c.emp_name AS yewuyuan,g.client_name,d.item_name FROM `sales_contract` AS a ".
			 "LEFT JOIN emp AS c ON a.contract_CounterMan=c.emp_id ".
			 "LEFT JOIN item AS d ON a.contract_busitype=d.item_paicheType ".
			 "LEFT JOIN client AS g ON a.contract_clientid=g.client_id ".
			 "WHERE a.`contract_recycle` !=1 AND a.contract_enddate>".time()." AND a.contract_startdate<=".time()." AND a.contract_enddate<".strtotime("+3 month");
		$pList = $model->getListBySql(0,100,$sql);
		}
		$total   = count($pList);
		echo json_encode(array('status'=>0,'totalRecords'=>$total, 'data'=>$pList));
	}
}
?>