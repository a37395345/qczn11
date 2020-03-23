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


class ruleController extends AdminController
{
	private $package="site/operator/rule";
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
			if(isset($val['pid']) && ($val['pid'] == $pId)) {
				$tmp = $array[$key];
				unset($array[$key]);
				if(count($this->getMenuXiaji($array,$val['id'])) > 0){
					$tmp['son'] = $this->getMenuXiaji($array,$val['id']);
				}
				$list[] = $tmp;
			}
		}
		return $list;
	}
	function index(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/index");
		$model = $this->createModel("rule",dirname( __FILE__ ));
		$sql="select * from admin_rule order by rule_order asc";
		$list=$model->getListBySql_a($sql);
		$list=$this->getMenuXiaji($list,0);
		//print_r($list[0]);exit;
		$object = new stdClass();
		$object->list=$list;
		$object->rule_add=$CommonFunction->panduan_rule($this->package."/add");
		$object->rule_edit=$CommonFunction->panduan_rule($this->package."/edit");
		$object->rule_setStatus=$CommonFunction->panduan_rule($this->package."/setStatus");
		$object->rule_delete=$CommonFunction->panduan_rule($this->package."/delete");
		$view  = $this->createView("operator/rule/index.html");
		$view->assign($object);
		$view->display();
	}

	function add(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/add");
		//需要检查权限
		//$this->getQuanxian("rule/add");
		$model = $this->createModel("rule",dirname( __FILE__ ));
		$sql="select * from admin_rule where status=0 order by rule_order asc";
		$list=$model->getListBySql_a($sql);
		$list=$this->getMenuXiaji($list,0);
		//print_r($list);exit;
		$object = new stdClass();
		$object->list=$list;
		$view  = $this->createView("operator/rule/add.html");
		$view->assign($object);
		$view->display();
	}
	//储存
	function insert(){
		$object = new stdClass();
		$object->pid=Request::getVar('pid','post');
		$object->name=Request::getVar('name','post');
		$object->title=Request::getVar('title','post');
		$object->rule_order=Request::getVar('rule_order','post');
        $re=true;
        $model = $this->createModel("rule",dirname( __FILE__ ));
		if($model->store($object,"admin_rule")){
		 	$re=true;
		}else{
		 	$re=false;
		}
		$CommonFunction=new CommonFunction();
		if($re){
			$CommonFunction->setAction("添加了权限-".$object->name);
		}
		$object = new stdClass();
        $object->result = $re ? "添加成功！":"添加失败，返回重试！";
        $view  = $this->createView("operator/rule/result.html");
        $view->assign($object);
        $view->display();
		
	}


	function edit(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/edit");
		$model = $this->createModel("rule",dirname( __FILE__ ));
		$id=Request::getVar('id','get');
		$xiaji=$this->getXiaji($id);
		$sql="select * from admin_rule where id={$id}";
		$rule=$model->getListBySql_a($sql);
		$rule=$rule[0];
		$title="顶级权限";
		if(!$xiaji){
			if($rule['pid']!=0){
				$sql_title="select title from admin_rule where id={$rule['pid']}";
				$title=$model->getListBySql_a($sql_title);
				$title=$title[0]['title'];
			}
			
		}
		$sql_list="select * from admin_rule order by rule_order asc";
		$list=$model->getListBySql_a($sql_list);
		$list=$this->getMenuXiaji($list,0);
		$object = new stdClass();
		$object->list=$list;
		$object->rule=$rule;
		$object->xiaji=$xiaji;
		$object->title=$title;

		$view  = $this->createView("operator/rule/edit.html");
        $view->assign($object);
        $view->display();
	}

	function update(){
		$re=true;
		$model = $this->createModel("rule",dirname( __FILE__ ));
		$id=Request::getVar('id','post');
		$pid=Request::getVar('pid','post');
		$object = new stdClass();
		$object->id=$id;
		$object->pid=$pid;
		$object->title=Request::getVar('title','post');
		$object->name=Request::getVar('name','post');
		
		$object->rule_order=Request::getVar('rule_order','post');
        
        
		if($model->update($object,"id","admin_rule","")){
		 	$re=true;
		}else{
		 	$re=false;
		}
		$CommonFunction=new CommonFunction();
		if($re){
			$CommonFunction->setAction("修改了权限-".$object->name);
		}
		$object = new stdClass();
        $object->result = $re ? "修改成功！":"修改失败，返回重试！";
        $view  = $this->createView("operator/rule/result.html");
        $view->assign($object);
        $view->display();
	}
	//判断该菜单有没有下级
	function getXiaji($id){
		$model = $this->createModel("rule",dirname( __FILE__ ));
		$sql="select * from admin_rule";
		$req=false;
		$list=$model->getListBySql_a($sql);
		for($i=0;$i<count($list);$i++){
			if($id==$list[$i]['pid']){
				$req=true;
				break;

			}
		}
		return $req;
	}
	function setStatus(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/setStatus");
		$model = $this->createModel("rule",dirname( __FILE__ ));
		$id=Request::getVar('id','get');
		$re=true;
		$text="切换成功！";
		if($this->getXiaji($id)){
			$re=false;
			$text="当前权限有子权限，不能操作！";
		}
		if($re){
			$sql="select status from admin_rule where id={$id}";
			$rule=$model->getListBySql_a($sql);
			$status=$rule[0]['status'];
			$object = new stdClass();
			if($status==0){
				$object->status=1;
			}else{
				$object->status=0;
			}
			
			$object->id=$id;
			//print_r($object);exit;
			if($model->update($object,"id","admin_rule","")){

			 	$re=true;
			}else{
			 	$re=false;
			 	$text="切换失败！";
			}
		}else{
			$text="切换失败！";
		}
		if($re){
			$CommonFunction->setAction("切换了id为".$id."权限的启用");
		}
		$this->redirect("index.php",$text);
	}
	//清除
	function delete(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/delete");
		$model = $this->createModel("rule",dirname( __FILE__ ));
		if($model->deleteRule()){
			$CommonFunction->setAction("清理了禁用的权限");
			$this->redirect("index.php","清理成功！");
		}else{
			$this->redirect("index.php","清理失败！");
		}	
	}

	
	
	
	
    

}
