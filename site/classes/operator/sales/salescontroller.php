<?php
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('operator.navi.admincontroller');
import('operator.navi.privilegehelper');
import('imag.fusecookie');

error_reporting(E_ERROR);

class SalesController extends AdminController
{
	function __construct($config = array())
	{
		parent::__construct($config);
		
		$this->registerTask( 'consultfirst','consultfirst');
		$this->registerTask( 'consultlist','consultlist');
		$this->registerTask( 'create','create');
		$this->registerTask( 'insert','insert');
		$this->registerTask( 'modify','modify');
		$this->registerTask( 'update','update');
		$this->registerTask( 'delete','delete');
		$this->registerTask( 'detail','detail');
		$this->registerTask( 'picture','picture');
		$this->registerTask( 'priceplan','priceplan');

	}
	function display(){
		echo "display";
	}
	
	function create()
	{	
        $model = $this->createModel("sales",dirname( __FILE__ ));
        $object = new stdClass();
        $object->consult_linker = "";
        $object->consult_linkerPhone = "";
        $object->consult_recycle =1;
        $recid=$model->store($object,"consulting");
        $Info =null;
		$Info['consult_id'] =$recid;
		$Info['consult_addtime'] =date("Y-m-d");
		$object = new stdClass();
		$object->list = $Info;
		$object->task = "insert";
		$object->search_status=Request::getVar('search_status','get');
		$object->category = $model->getListBySql(0,100,"SELECT `item_paicheType`,`item_name` FROM `item`");
        
        $view  = $this->createView("operator/sales/consult/create.html");
		$view->assign($object);
		$view->display();
	}
	function insert()
	{
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "list.php?search_status=".Request::getVar('search_status','post');
		}
		$uid = Request::getVar('uid','post');
		$model = $this->createModel("sales",dirname( __FILE__ ));
		$empname=$model->getEmpName($_SESSION['a_uid']);
		
		$consult_busitype=Request::getVar('consult_busitype','post');
		$consult_route=Request::getVar('consult_route','post');
		$consult_requestCar=Request::getVar('consult_requestCar','post');
		$consult_startDate=Request::getVar('consult_startDate','post');
		$consult_endDate=Request::getVar('consult_endDate','post');
		
		$object = new stdClass();
		$object->consult_id = $uid;
		$object->consult_linker = Request::getVar('consult_linker','post');
		$object->consult_linkerPhone = Request::getVar('consult_linkerPhone','post');
		$object->consult_linkerMan = Request::getVar('consult_linkerMan','post');
		$object->consult_busitype=empty($consult_busitype)?0:$consult_busitype;
		$object->consult_requestCar = empty($consult_requestCar)?0:$consult_requestCar;
		$object->consult_route = empty($consult_route)?"":$consult_route;
		$object->consult_line = Request::getVar('consult_line','post');
		$object->consult_times = Request::getVar('consult_times','post');
		$object->consult_startDate = empty($consult_startDate)?0:strtotime($consult_startDate);
		$object->consult_endDate = empty($consult_endDate)?0:strtotime($consult_endDate);
		$object->consult_price = Request::getVar('consult_price','post');
		$object->consult_CounterMan = Request::getVar('paicheCounterMan2','post');
		$object->consult_Remarks = Request::getVar('consult_Remarks','post');
		$object->consult_adduser = $empname;
		$object->consult_addtime = strtotime(Request::getVar('consult_addtime','post'));
		$object->consult_recycle =0;
		
		if ($model->update($object,'consult_id',"consulting")){
			Components::save_admin_log("添加了业务咨询登记");
			$this->redirect($forward,"添加成功");
		}else{
			$this->redirect($forward,"添加失败");
		}
	}
	function modify()
	{
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("sales",dirname( __FILE__ ));
		$Info = $model->getInfo($uid);
		        
		$object = new stdClass();
		$object->list = $Info;
		$object->task = "update";
		$object->category = $model->getListBySql(0,100,"SELECT `item_paicheType`,`item_name` FROM `item`");
		$object->search_status=Request::getVar('search_status','get');
        
        $view  = $this->createView("operator/sales/consult/create.html");
		$view->assign($object);
		$view->display();
	}
	function update()
	{
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "list.php?search_status=".Request::getVar('search_status','post');
		}
		$uid = Request::getVar('uid','post');	
		if(empty($uid))
		{
			Response::redirect($forward,"Need id!");
		}
		$model = $this->createModel("sales",dirname( __FILE__ ));
		
		$consult_busitype=Request::getVar('consult_busitype','post');
		$consult_route=Request::getVar('consult_route','post');
		$consult_requestCar=Request::getVar('consult_requestCar','post');
		$consult_startDate=Request::getVar('consult_startDate','post');
		$consult_endDate=Request::getVar('consult_endDate','post');
		
		$object = new stdClass();
		$object->consult_id = $uid;
		$object->consult_linker = Request::getVar('consult_linker','post');
		$object->consult_linkerPhone = Request::getVar('consult_linkerPhone','post');
		$object->consult_linkerMan = Request::getVar('consult_linkerMan','post');
		$object->consult_busitype=empty($consult_busitype)?0:$consult_busitype;
		$object->consult_requestCar = empty($consult_requestCar)?0:$consult_requestCar;
		$object->consult_route = empty($consult_route)?"":$consult_route;
		$object->consult_line = Request::getVar('consult_line','post');
		$object->consult_times = Request::getVar('consult_times','post');
		$object->consult_startDate = empty($consult_startDate)?0:strtotime($consult_startDate);
		$object->consult_endDate = empty($consult_endDate)?0:strtotime($consult_endDate);
		$object->consult_price = Request::getVar('consult_price','post');
		$object->consult_CounterMan = Request::getVar('paicheCounterMan2','post');
		$object->consult_Remarks = Request::getVar('consult_Remarks','post');
		$object->consult_addtime = strtotime(Request::getVar('consult_addtime','post'));	
		
		if ($model->update($object,'consult_id',"consulting"))
		{
			Components::save_admin_log("修改了业务咨询登记,id={$uid}");
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
			$forward = "list.php?search_status=".Request::getVar('search_status','get');
		}
		$uid = Request::getVar('uid','get');
		if(empty($uid))
		{
			Response::redirect($forward,"Need id!");
		}
		
		$model = $this->createModel("sales",dirname( __FILE__ ));
		$object = new stdClass();
		$object->consult_id = $uid;
		$object->consult_recycle = 1;
		$object->consult_recycleTime = time();
		
		if ($model->update($object,'consult_id',"consulting"))
		{
			Components::save_admin_log("删除了业务咨询登记,id={$uid}");
			$this->redirect($forward,"删除成功");
		}else{
			$this->redirect($forward,"删除失败");
		}
	}	
	function detail()
	{	
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("sales",dirname( __FILE__ ));
		$Info = $model->getInfo($uid);
		        
		$object = new stdClass();
		$object->list = $Info;
        
        $view  = $this->createView("operator/sales/consult/detail.html");
		$view->assign($object);
		$view->display();
	}
	function picture()
	{
		$consult_id = Request::getVar('consult_id','get');
		$nowserial=Request::getVar('nowserial','get');
		$model = $this->createModel("sales",dirname( __FILE__ ));
		$imagelist = $model->getCarImages('',$consult_id);
		$total=count($imagelist);
		
		$object = new stdClass();
		$object->imagelist = $imagelist;
		$object->nowserial = $nowserial;
		$object->total= $total;
        
        $view  = $this->createView("operator/sales/contract/picture.html");
		$view->assign($object);
		$view->display();
	}
	
	function consultfirst(){
		$model = $this->createModel("sales",dirname( __FILE__ ));
		$sql="Select consult_result,count(*) nCount From consulting Where consult_recycle !=1 Group by consult_result";
		$List = $model->getList($sql);
		
		$view  = $this->createView("operator/sales/consult/first.html");
		
		$object = new stdClass();
		$object->first = $List;
		$object->total = 0;
		$view->assign($object);
		$view->display();
	}
	function consultlist()
	{
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		
		$per_page = 10;
		$search_kehu=Request::getVar('search_kehu','get');
		$search_startDate=Request::getVar('search_startDate','get');
		$search_endDate=Request::getVar('search_endDate','get');
		$busi_id = Request::getVar('b_id','get');
		$search_user=Request::getVar('paicheCounterMan2','get');
		$search_status=Request::getVar('search_status','get');
		$base_url = "list.php?search_status={$search_status}";
		$where="a.`consult_recycle` !=1 AND consult_result={$search_status}";
		if (!empty($search_kehu)){
        	$base_url.="&search_kehu={$search_kehu}";
        	$where.=" AND a.consult_linker like '%{$search_kehu}%'";
        }
		if(!empty($search_startDate)){
			$base_url.="&search_startDate={$search_startDate}";
            $where .=" AND a.consult_startDate>='".strtotime($search_startDate)."'";
        }
		if(!empty($search_endDate)){
			$base_url.="&search_endDate={$search_endDate}";
            $where .=" AND a.consult_endDate<='".strtotime($search_endDate)."'";
        }
        if (!empty($busi_id)){
        	$base_url.="&b_id={$busi_id}";
        	$where.=" AND a.consult_busitype={$busi_id}";
        }
        if (!empty($search_user)){
        	$base_url.="&paicheCounterMan2={$search_user}";
        	$where.=" AND a.consult_CounterMan={$search_user}";
        }
        		
		$model = $this->createModel("sales",dirname( __FILE__ ));
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		
		$sql="SELECT a.*,c.emp_name AS yewuyuan,g.item_name FROM `consulting` AS a ".
			 "LEFT JOIN emp AS c ON a.consult_CounterMan=c.emp_id ".
			 "LEFT JOIN item AS g ON a.consult_busitype=g.item_paicheType ".
			 "WHERE {$where} ORDER BY a.`consult_addtime` DESC";
		
		$List = $model->getListBySql($start,$per_page, $sql,$op);
		$sql="SELECT COUNT(*) AS total FROM `consulting` AS a WHERE {$where}";
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
		$view  = $this->createView("operator/sales/consult/list.html");
		
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();		
		$object->list = $List;
		$object->total = $total_item;
		$object->category = $model->getListBySql(0,100,"SELECT `item_paicheType`,`item_name` FROM `item`");
		$object->search_status=$search_status;
		$view->assign($object);
		$view->display();
	}
	function priceplan(){
		$view  = $this->createView("operator/sales/priceplan.html");
		$view->display();
	}

}
?>