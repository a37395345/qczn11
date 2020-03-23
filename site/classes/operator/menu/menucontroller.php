<?php
import('operator.navi.admincontroller');
import('publicFunction.CommonFunction');
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('imag.image.uploader');
import('operator.navi.privilegehelper');
import('imag.fusecookie');
import('imag.filesystem.fusefile');
import('imag.filesystem.filesystem');
import('imag.utilities.tool');


class menuController extends AdminController
{
	private $package="site/operator/menu";
	function __construct($config = array())
	{
		parent::__construct($config);
		$this->registerTask( 'index','index');
		$this->registerTask( 'getMenu','getMenu');
		$this->registerTask( 'add','add');
		$this->registerTask( 'insert','insert');
		$this->registerTask( 'edit','edit');
		$this->registerTask( 'update','update');
		$this->registerTask( 'setStatus','setStatus');
		$this->registerTask( 'delete','delete');
	}
	function getMenuXiaji($array,$pId=0){
		$list = array();
		foreach($array as $key => $val){
			if(isset($val['parent_menu_id']) && ($val['parent_menu_id'] == $pId)) {
				$tmp = $array[$key];
				unset($array[$key]);
				if(count($this->getMenuXiaji($array,$val['admin_menu_id'])) > 0){
					$tmp['son'] = $this->getMenuXiaji($array,$val['admin_menu_id']);
				}
				$list[] = $tmp;
			}
		}
		return $list;
	}
	
	function index(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/index");
		$model = $this->createModel("menu",dirname( __FILE__ ));
		$sql="select * from admin_menu order by menu_order asc";
		$list=$model->getListBySql_a($sql);
		$list=$this->getMenuXiaji($list,0);
		//print_r($list[0]);exit;
		$object = new stdClass();
		$object->list=$list;
		$object->rule_add=$CommonFunction->panduan_rule($this->package."/add");
		$object->rule_edit=$CommonFunction->panduan_rule($this->package."/edit");
		$object->rule_setStatus=$CommonFunction->panduan_rule($this->package."/setStatus");
		$object->rule_delete=$CommonFunction->panduan_rule($this->package."/delete");
		
		$view  = $this->createView("operator/menu/index.html");
		$view->assign($object);
		$view->display();
	}
	
	function add(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/add");
		$model = $this->createModel("menu",dirname( __FILE__ ));
		$sql="select * from admin_menu where status=0 order by menu_order asc";
		$list=$model->getListBySql_a($sql);
		$list=$this->getMenuXiaji($list,0);
		$object = new stdClass();
		$object->list=$list;
		$view  = $this->createView("operator/menu/add.html");
		$view->assign($object);
		$view->display();

	}
	//储存
	function insert(){
		$object = new stdClass();
		$object->parent_menu_id=Request::getVar('parent_menu_id','post');
		$object->name=Request::getVar('name','post');
		$object->action=Request::getVar('action','post');
		$object->script=Request::getVar('script','post');
		$object->menu_order=Request::getVar('menu_order','post');
        $re=true;
        $model = $this->createModel("menu",dirname( __FILE__ ));
		if($model->store($object,"admin_menu")){
		 	$re=true;
		}else{
		 	$re=false;
		}
		$CommonFunction=new CommonFunction();
		if($re){
			$CommonFunction->setAction("添加了菜单-".$object->name);
		}
		$object = new stdClass();
        $object->result = $re ? "添加成功！":"添加失败，返回重试！";
        $view  = $this->createView("operator/menu/result.html");
        $view->assign($object);
        $view->display();
		
	}

	function edit(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/edit");
		$model = $this->createModel("menu",dirname( __FILE__ ));
		$admin_menu_id=Request::getVar('admin_menu_id','get');
		$xiaji=$this->getXiaji($admin_menu_id);
		$sql="select * from admin_menu where admin_menu_id={$admin_menu_id}";
		$menu=$model->getListBySql_a($sql);
		$menu=$menu[0];
		$name="顶级菜单";
		if(!$xiaji){
			if($menu['parent_menu_id']!=0){
				$sql_name="select name from admin_menu where admin_menu_id={$menu['parent_menu_id']}";
				$name=$model->getListBySql_a($sql_name);
				$name=$name[0]['name'];
			}
			
		}
		$sql_list="select * from admin_menu where status=0 order by menu_order asc";
		$list=$model->getListBySql_a($sql_list);
		$list=$this->getMenuXiaji($list,0);
		$object = new stdClass();
		$object->list=$list;
		$object->menu=$menu;
		$object->xiaji=$xiaji;
		$object->name=$name;

		$view  = $this->createView("operator/menu/edit.html");
        $view->assign($object);
        $view->display();
	}

	function update(){
		$re=true;
		$model = $this->createModel("menu",dirname( __FILE__ ));
		$admin_menu_id=Request::getVar('admin_menu_id','post');
		$parent_menu_id=Request::getVar('parent_menu_id','post');
		$object = new stdClass();
		$object->admin_menu_id=$admin_menu_id;
		$object->parent_menu_id=$parent_menu_id;
		$object->name=Request::getVar('name','post');
		$object->name=Request::getVar('name','post');
		$object->action=Request::getVar('action','post');
		$object->script=Request::getVar('script','post');
		$object->menu_order=Request::getVar('menu_order','post');
        
        

		if($model->update($object,"admin_menu_id","admin_menu","")){
		 	$re=true;
		}else{
		 	$re=false;
		}
		$CommonFunction=new CommonFunction();
		if($re){
			$CommonFunction->setAction("修改了菜单-".$object->name);
		}
		$object = new stdClass();
        $object->result = $re ? "修改成功！":"修改失败，返回重试！";
        $view  = $this->createView("operator/menu/result.html");
        $view->assign($object);
        $view->display();
	}
	//判断该菜单有没有下级
	function getXiaji($admin_menu_id){
		$model = $this->createModel("menu",dirname( __FILE__ ));
		$sql="select * from admin_menu";
		$req=false;
		$list=$model->getListBySql_a($sql);
		for($i=0;$i<count($list);$i++){
			if($admin_menu_id==$list[$i]['parent_menu_id']){
				$req=true;
				break;

			}
		}
		return $req;
	}
	function setStatus(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/setStatus");
		$model = $this->createModel("menu",dirname( __FILE__ ));
		$admin_menu_id=Request::getVar('admin_menu_id','get');
		$re=true;
		$text="切换成功！";
		if($this->getXiaji($admin_menu_id)){
			$re=false;
			$text="当前菜单有子菜单，不能操作！";
		}
		if($re){
			$sql="select status from admin_menu where admin_menu_id={$admin_menu_id}";
			$menu=$model->getListBySql_a($sql);
			$status=$menu[0]['status'];
			$object = new stdClass();
			if($status==0){
				$object->status=1;
			}else{
				$object->status=0;
			}
			
			$object->admin_menu_id=$admin_menu_id;
			
			if($model->update($object,"admin_menu_id","admin_menu","")){
			 	$re=true;
			}else{
			 	$re=false;
			 	$text="切换失败！";
			}
		}
		if($re){
			$CommonFunction->setAction("切换了id为".$admin_menu_id."菜单的启用");
		}
		
		$this->redirect("index.php",$text);
	}
	//清除
	function delete(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/delete");
		$model = $this->createModel("menu",dirname( __FILE__ ));
		if($model->deleteMenu()){
			$CommonFunction->setAction("清理了禁用的菜单");
			$this->redirect("index.php","清理成功！");
		}else{
			$this->redirect("index.php","清理失败！");
		}	
	}
}
