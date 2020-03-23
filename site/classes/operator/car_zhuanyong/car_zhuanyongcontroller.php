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

class car_zhuanyongController extends AdminController
{
	private $package="site/operator/car_zhuanyong";
	function __construct($config = array())
	{
		parent::__construct($config);
		$this->registerTask( 'index','index');
		$this->registerTask( 'add','add');
		$this->registerTask( 'add_action','add_action');
		$this->registerTask( 'edit','edit');
		$this->registerTask( 'edit_action','edit_action');
		$this->registerTask( 'delete','delete');
	}
	function index(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/index");
		$object = new stdClass();
		$sql="select * from car_zhuanyong order by id asc";
		$list=$CommonFunction->getList($sql);
		$object->list=$list;
		$object->add=$CommonFunction->panduan_rule($this->package."/add");
		$object->edit=$CommonFunction->panduan_rule($this->package."/edit");
		$object->delete=$CommonFunction->panduan_rule($this->package."/delete");
		$view  = $this->createView("operator/car_zhuanyong/index.html");
		$view->assign($object);
		$view->display();
	}
	function add(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/add");
		$view  = $this->createView("operator/car_zhuanyong/add.html");
		//$view->assign($object);
		$view->display();
	}
	function add_action(){
		$CommonFunction=new CommonFunction();
		$object = new stdClass();
		$object->name=Request::getVar('name','post');
		$re=true;
		if($CommonFunction->instert($object,"car_zhuanyong")){
		 	$re=true;
		}else{
		 	$re=false;
		}
		if($re){
			$CommonFunction->setAction("添加了车辆专用名称-".$object->name);
		}
		$object = new stdClass();
        $object->result = $re ? "添加成功！":"添加失败，返回重试！";
        $view  = $this->createView("operator/car_zhuanyong/result.html");
        $view->assign($object);
        $view->display();
	}
	function edit(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/edit");
		$id=Request::getVar('id','get');
		$sql="select * from car_zhuanyong where id={$id}";
		$data=$CommonFunction->getData($sql);
		$object = new stdClass();
		$object->data=$data;
		$object->id=$id;
		$view  = $this->createView("operator/car_zhuanyong/edit.html");
		$view->assign($object);
		$view->display();
	}
	function edit_action(){
		$CommonFunction=new CommonFunction();
		$id=Request::getVar('id','post');
		$name=Request::getVar('name','post');
		$object = new stdClass();
		$object->id=$id;
		$object->name=$name;
		$re=true;
		if($CommonFunction->update_a($object,"id","car_zhuanyong","")){
			$CommonFunction->setAction("修改了车辆专用名称-".$name);
		 	$re=true;
		}else{
		 	$re=false;
		}
		$object = new stdClass();
        $object->result = $re ? "修改成功！":"修改失败，返回重试！";
        $view  = $this->createView("operator/car_zhuanyong/result.html");
        $view->assign($object);
        $view->display();
	}
	function delete(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/delete");
		$id=Request::getVar('id','get');
		if($CommonFunction->dalete_sql("car_zhuanyong","id",$id)){
			$CommonFunction->setAction("删除了车辆专用名称ID为".$id);
			$this->redirect("index.php","清理成功！");
		}else{
			$this->redirect("index.php","清理失败！");
		}	
	}
	

}
