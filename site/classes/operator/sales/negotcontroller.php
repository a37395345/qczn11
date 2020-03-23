<?php
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('operator.navi.admincontroller');
import('operator.navi.privilegehelper');
import('imag.fusecookie');

error_reporting(E_ERROR);

class NegotController extends AdminController
{
	function __construct($config = array())
	{
		parent::__construct($config);
		$this->registerTask( 'create','create');
		$this->registerTask( 'insert','insert');
		$this->registerTask( 'first','first');
		$this->registerTask( 'list','getList');
		$this->registerTask( 'modify','modify');
		$this->registerTask( 'update','update');
		$this->registerTask( 'delete','delete');
	}
	function display(){
		echo "display";
	}
	function first(){
		$model = $this->createModel("sales",dirname( __FILE__ ));
		$sql="Select consult_result,count(*) nCount From consulting Where consult_recycle !=1 Group by consult_result";
		$List = $model->getList($sql);
		
		$view  = $this->createView("operator/sales/negotiate/first.html");
		
		$object = new stdClass();
		$object->first = $List;
		$object->total = 0;
		$view->assign($object);
		$view->display();
	}
	function getList()
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
		
		$List = $model->getListBySql($start,$per_page, $sql,"negotiate");
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
		$view  = $this->createView("operator/sales/negotiate/list.html");
		
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();		
		$object->list = $List;
		$object->total = $total_item;
		$object->category = $model->getListBySql(0,100,"SELECT `item_paicheType`,`item_name` FROM `item`");
		$object->search_status=$search_status;
		$view->assign($object);
		$view->display();
	}
	function create()
	{
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("sales",dirname( __FILE__ ));
		$object = new stdClass();
		$object->task = "insert";
        $object->list = $model->getInfo($uid);
        $object->search_status=Request::getVar('search_status','get');
        
        $view  = $this->createView("operator/sales/negotiate/create.html");
		$view->assign($object);
		$view->display();
	}
	function insert()
	{
		$model = $this->createModel("sales",dirname( __FILE__ ));
		$empname=$model->getEmpName($_SESSION['a_uid']);
		
		$negotiate_type=Request::getVar('negotiate_type','post');
		$negotiate_result=Request::getVar('negotiate_result','post');
		$re=true;
		$object = new stdClass();
		$object->consult_id = Request::getVar('consult_id','post');
		$object->negotiate_linker = Request::getVar('negotiate_linker','post');
		$object->negotiate_Date = strtotime(Request::getVar('negotiate_Date','post'));
		$object->negotiate_type=empty($negotiate_type)?"":$negotiate_type;
		$object->negotiate_result = empty($negotiate_result)?0:$negotiate_result;
		$object->negotiate_Remarks = Request::getVar('negotiate_Remarks','post');
		$object->negotiate_adduser = $empname;
		$object->negotiate_addtime = time();
		
		if ($model->store($object,"consulting_negotiate")){
			$object = new stdClass();
			$object->consult_id = Request::getVar('consult_id','post');
			$object->consult_result = empty($negotiate_result)?0:$negotiate_result;
			$model->update($object,'consult_id',"consulting");
			
			Components::save_admin_log("添加了业务咨询洽谈");
		}else{
			$re=false;
		}
		$object = new stdClass();
		$object->result = $re ? "保存成功！":"保存失败，返回重试！";
		$view  = $this->createView("operator/business/result.html");
		$view->assign($object);
		$view->display();
	}
	function modify()
	{
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("sales",dirname( __FILE__ ));
		$sql="SELECT * FROM `consulting_negotiate` WHERE `negotiate_id`={$uid}";
		$Info = $model->getInfo(0,$sql);
		
		$object = new stdClass();
		$object->list = $Info;
		$object->task = "update";
		$object->search_status=Request::getVar('search_status','get');
        
        $view  = $this->createView("operator/sales/negotiate/create.html");
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
		
		$negotiate_type=Request::getVar('negotiate_type','post');
		$negotiate_result=Request::getVar('negotiate_result','post');
		
		$object = new stdClass();
		$object->negotiate_id = $uid;
		$object->negotiate_linker = Request::getVar('negotiate_linker','post');
		$object->negotiate_Date = strtotime(Request::getVar('negotiate_Date','post'));
		$object->negotiate_type=empty($negotiate_type)?"":$negotiate_type;
		$object->negotiate_result = empty($negotiate_result)?0:$negotiate_result;
		$object->negotiate_Remarks = Request::getVar('negotiate_Remarks','post');		
		
		if ($model->update($object,'negotiate_id',"consulting_negotiate"))
		{
			$object = new stdClass();
			$object->consult_id = Request::getVar('consult_id','post');
			$object->consult_result = empty($negotiate_result)?0:$negotiate_result;
			$model->update($object,'consult_id',"consulting");
			
			Components::save_admin_log("修改了业务咨询洽谈,id={$uid}");
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
		$sql="DELETE FROM `consulting_negotiate` WHERE `negotiate_id`={$uid}";
		
		if ($model->update("","","",$sql))
		{
			Components::save_admin_log("删除了业务咨询洽谈记录,id={$uid}");
			$this->redirect($forward,"删除成功");
		}else{
			$this->redirect($forward,"删除失败");
		}
	}	
}
?>