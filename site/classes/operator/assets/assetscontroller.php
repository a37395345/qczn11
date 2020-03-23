<?php
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('operator.navi.admincontroller');
import('operator.navi.privilegehelper');
import('imag.utilities.pagestyle_a');
import('imag.fusecookie');
import('imag.filesystem.fusefile');
import('imag.filesystem.filesystem');
import('imag.image.uploader');
import('imag.utilities.tool');

class AssetsController extends AdminController
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
	}
	function display(){
		echo "display";
	}
	function getList()
	{
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$per_page = 10;
		$base_url = "list.php?";
		$where="assets_recycle!=1";
		$search_startDate=Request::getVar('search_startDate','get');
		$search_endDate=Request::getVar('search_endDate','get');
		$search_shop=Request::getVar('search_shop','get');
		$search_type=Request::getVar('search_type','get');
		$search_name=Request::getVar('search_name','get');
		$search_responsible=Request::getVar('search_responsible','get');
		if(!empty($search_type)){
        	$base_url.="&search_type={$search_type}";
        	$where .=" AND a.assets_type={$search_type}";
        }
        //print_r($search_shop);exit;
		if(!empty($search_shop)){
        	$base_url.="&search_shop={$search_shop}";
        	$where .=" AND a.assets_shopid={$search_shop}";
        }
		if(!empty($search_startDate)){
			$base_url.="&search_startDate={$search_startDate}";
            $where .=" AND a.assets_buydate>='{$search_startDate}'";
        }
		if(!empty($search_endDate)){
			$base_url.="&search_endDate={$search_endDate}";
            $where .=" AND a.assets_buydate<='{$search_endDate}'";
        }
		if ($search_name!=""){
        	$base_url.="&search_name={$search_name}";
        	$where .=" AND a.assets_name like '%{$search_name}%'";
        }
		if ($search_responsible!=""){
        	$base_url.="&search_responsible={$search_responsible}";
        	$where .=" AND a.assets_responsible like '%{$search_responsible}%'";
        }
		
		$model = $this->createModel("assets",dirname( __FILE__ ));
		$style = new PageStyle_a();
		$start = ($p-1)*$per_page;
		
		$sql="Select a.*,b.typename,c.shop_name From assets a Left Join assets_type b ON a.assets_type=b.typeid Left Join shop c On a.assets_shopid=c.shop_id Where {$where} Order by assets_addtime Desc";

		$list = $model->getListBySql($sql." Limit {$start},{$per_page}");
		$sql="SELECT COUNT(*) AS total FROM assets AS a Left Join assets_type b ON a.assets_type=b.typeid Left Join shop c On a.assets_shopid=c.shop_id WHERE {$where}";
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
		
		$view  = $this->createView("operator/assets/list.html");
		
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();
		$object->list = $list;
		$object->p = $p;
		$object->total = $total_item;
		$object->search_startDate=$search_startDate;
		$object->search_shop=$search_shop;
		$object->search_type=$search_type;
		
		$object->shoplist=$model->getListBySql("Select shop_id,shop_name From shop");
		$object->assetstypelist = $model->getListBySql('Select * from assets_type ');
		
		$view->assign($object);
		$view->display();
	}
	function create()
	{
		$Info=array();
		$Info['assets_buydate']=date("Y-m-d");
		$Info['assets_type']=1;
		$model = $this->createModel("assets",dirname( __FILE__ ));
		
		
		$object = new stdClass();
		$object->task = "insert";
		$object->list = $Info;
		$object->shoplist=$model->getListBySql("Select shop_id,shop_name From shop");
		$object->assetstypelist = $model->getListBySql('Select * from assets_type ');
		$object->emplist = $model->getListBySql('Select emp_id,emp_name from emp Where emp_recycle!=1 and emp_stutas!=-1 and emp_post not in (1,2,7) and emp_id!=1');
                        
        $view  = $this->createView("operator/assets/create.html");
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
		$shop_id = Request::getVar('assets_shopid','post');
		$model = $this->createModel("assets",dirname( __FILE__ ));
		$sql="Select count(assets_code) as total From assets Where assets_recycle!=1 and assets_shopid={$shop_id}";
		$max_item = $model->getTotal($sql);
		if (empty($max_item)){
			$code=substr("00".$shop_id,-2)."-001";
		}else{
			$aa=$max_item+1;
			$code=substr("00".$shop_id,-2)."-".substr("000".$aa,-3);
		}
		$object = new stdClass();
		$object->assets_code = 'YH-BM'.$code;
		$object->assets_type=Request::getVar('assets_type','post');
		$object->assets_name = Request::getVar('assets_name','post');
		$object->assets_spec = Request::getVar('assets_spec','post');
		$object->assets_buydate = Request::getVar('assets_buydate','post');
		$object->assets_buyman = Request::getVar('assets_buyman','post');
		$aaa=Request::getVar('assets_buyamount','post');
		$object->assets_buyamount = empty($aaa)?0:$aaa;
		$object->assets_responsible = Request::getVar('assets_responsible','post');
		$object->assets_shopid=$shop_id;
		$object->assets_addtime = date("Y-m-d H:i:s");
		
		$recid=$model->store($object,"assets");
		if ($recid){
			$this->redirect($forward,"添加成功");
		}else{
			$this->redirect($forward,"添加失败");
		}
	}
	function modify()
	{
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("assets",dirname( __FILE__ ));
		$Info = $model->getInfo($uid);
		
		$object = new stdClass();
		$object->task = "update";
		$object->list = $Info;
		$object->shoplist=$model->getListBySql("Select shop_id,shop_name From shop");
		$object->assetstypelist = $model->getListBySql('Select * from assets_type ');
		$object->emplist = $model->getListBySql('Select emp_id,emp_name from emp Where emp_recycle!=1 and emp_stutas!=-1 and emp_post not in (1,2,7) and emp_id!=1');
                        
        $view  = $this->createView("operator/assets/create.html");
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
		$model = $this->createModel("assets",dirname( __FILE__ ));
			
		$shop_id = Request::getVar('assets_shopid','post');
		$object = new stdClass();
		$object->assets_id = $uid;
		$object->assets_type=Request::getVar('assets_type','post');
		$object->assets_name = Request::getVar('assets_name','post');
		$object->assets_spec = Request::getVar('assets_spec','post');
		$object->assets_buydate = Request::getVar('assets_buydate','post');
		$object->assets_buyman = Request::getVar('assets_buyman','post');
		$aaa=Request::getVar('assets_buyamount','post');
		$object->assets_buyamount = empty($aaa)?0:$aaa;
		$object->assets_responsible = Request::getVar('assets_responsible','post');
		$object->assets_shopid=$shop_id;
		
		if ($model->update($object,"assets_id","assets")){
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
		$uid = Request::getVar('uid','post');
		if(empty($uid))
		{
			Response::redirect($forward,"Need id!");
		}
		$object = new stdClass();
		$object->assets_id = $uid;
		$object->assets_recycle = 1;
		$object->assets_recycleTime=time();
		if ($model->update($object,"assets_id","assets")){
			Components::save_admin_log("删除了固定资产,id={$uid}");
			$this->redirect($forward,"删除成功");
		}else{
			$this->redirect($forward,"删除失败");
		}
	}
	function detail()
	{
		$uid = Request::getVar('uid','get');
		if(empty($uid))
		{
			Response::write("Need id!");
			exit();
		}
		$model = $this->createModel("assets",dirname( __FILE__ ));
		$sql="Select a.*,b.typename,c.shop_name From assets a Left Join assets_type b ON a.assets_type=b.typeid Left Join shop c On a.assets_shopid=c.shop_id Where assets_id={$uid}";
		
		$Info = $model->getInfo('',$sql);
		
		$object = new stdClass();		
		$object->list = $Info;
		
        $view  = $this->createView("operator/assets/detail.html");
		$view->assign($object);
		$view->display();
	}
}
?>