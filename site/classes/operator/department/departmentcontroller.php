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

class departmentController extends AdminController
{
	private $package="site/operator/department";
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
		$this->registerTask( 'setRule','setRule');
		$this->registerTask( 'setRuleAction','setRuleAction');
		
		
	}
	function getMenuXiaji($array,$pId=0){
		if(count($array)>0){
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
		}else{
			return null;
		}
		
	}

	function index(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/index");
		$model = $this->createModel("department",dirname( __FILE__ ));
		$sql="select * from department order by department_order asc";
		$list=$model->getListBySql_a($sql);
		$list=$this->getMenuXiaji($list,0);
		//print_r($list[0]);exit;
		$object = new stdClass();
		$object->list=$list;
		$object->department_add=$CommonFunction->panduan_rule($this->package."/add");
		$object->department_edit=$CommonFunction->panduan_rule($this->package."/edit");
		$object->department_setStatus=$CommonFunction->panduan_rule($this->package."/setStatus");
		$object->department_setRule=$CommonFunction->panduan_rule($this->package."/setRule");
		$object->department_delete=$CommonFunction->panduan_rule($this->package."/delete");
		
		$view  = $this->createView("operator/department/index.html");
		$view->assign($object);
		$view->display();
	}


	function add(){
		$CommonFunction=new CommonFunction();
        $CommonFunction->getQuanxian($this->package."/add");
		//需要检查权限
		//$this->getQuanxian("rule/add");
		$model = $this->createModel("department",dirname( __FILE__ ));
		$sql="select * from department where status=0 order by department_order asc";
		$list=$model->getListBySql_a($sql);
		$list=$this->getMenuXiaji($list,0);
		//print_r($list);exit;
		$object = new stdClass();
		$object->list=$list;
		$view  = $this->createView("operator/department/add.html");
		$view->assign($object);
		$view->display();
	}
	//储存
	function insert(){
		$CommonFunction=new CommonFunction();
		$object = new stdClass();
		$object->pid=Request::getVar('pid','post');
		$object->name=Request::getVar('name','post');
		$object->phone=Request::getVar('phone','post');
		$object->department_order=Request::getVar('department_order','post');
        $re=true;
        $model = $this->createModel("department",dirname( __FILE__ ));
		if($model->store($object,"department")){
		 	$re=true;
		}else{
		 	$re=false;
		}
		if($re){
			$CommonFunction->setAction("添加了部门-".$object->name);
		}
		$object = new stdClass();
        $object->result = $re ? "添加成功！":"添加失败，返回重试！";
        $view  = $this->createView("operator/department/result.html");
        $view->assign($object);
        $view->display();
	}


	function edit(){
		$CommonFunction=new CommonFunction();
        $CommonFunction->getQuanxian($this->package."/edit");
		$model = $this->createModel("department",dirname( __FILE__ ));
		$id=Request::getVar('id','get');

		$xiaji=$this->getXiaji($id);
		$sql="select * from department where id={$id}";
		$department=$model->getListBySql_a($sql);

		$department=$department[0];
		$name="顶级部门";
		if(!$xiaji){
			if($department['pid']!=0){
				$sql_title="select name from department where id={$department['pid']}";
				$name=$model->getListBySql_a($sql_title);
				$name=$name[0]['name'];
			}
			
		}
		$sql_list="select * from department where status=0 order by department_order asc";
		$list=$model->getListBySql_a($sql_list);
		
		$list=$this->getMenuXiaji($list,0);
		$object = new stdClass();
		$object->list=$list;
		$object->department=$department;

		$object->xiaji=$xiaji;
		$object->name=$name;

		$view  = $this->createView("operator/department/edit.html");
        $view->assign($object);
        $view->display();
	}


	function update(){
		
		$re=true;
		$model = $this->createModel("department",dirname( __FILE__ ));
		$id=Request::getVar('id','post');
		$pid=Request::getVar('pid','post');
		$object = new stdClass();
		$object->id=$id;
		$object->pid=$pid;
		$object->phone=Request::getVar('phone','post');
		$object->name=Request::getVar('name','post');
		
		$object->department_order=Request::getVar('department_order','post');
        
        
		if($model->update($object,"id","department","")){
		 	$re=true;
		}else{
		 	$re=false;
		}
		$CommonFunction=new CommonFunction();
		if($re){
			$CommonFunction->setAction("修改了部门-".$object->name);
		}
		$object = new stdClass();
        $object->result = $re ? "修改成功！":"修改失败，返回重试！";
        $view  = $this->createView("operator/department/result.html");
        $view->assign($object);
        $view->display();
	}

	//判断该菜单有没有下级
	function getXiaji($id){
		$model = $this->createModel("department",dirname( __FILE__ ));
		$sql="select * from department where status=0";
		$req=0;
		$list=$model->getListBySql_a($sql);
		for($i=0;$i<count($list);$i++){
			if($id==$list[$i]['pid']){
				$req=1;
				break;
			}
		}
		
		return $req;
	}
	function setStatus(){
		$CommonFunction=new CommonFunction();
        $CommonFunction->getQuanxian($this->package."/setStatus");
		$model = $this->createModel("department",dirname( __FILE__ ));
		$id=Request::getVar('id','get');
		$re=true;
		$text="切换成功！";
		if($this->getXiaji($id)==1){
			$re=false;
			$text="当前部门有下级部门，不能操作！";
		}
		$sql_zhiwei="select * from zemp_zhiwei where department_id={$id} and status=0";
		$list_zhiwei=$model->getListBySql_a($sql_zhiwei);
		if(count($list_zhiwei)>0){
			$re=false;
			$text="有职位属于该部门，不能操作！";
		}
		if($re){
			$sql="select status from department where id={$id}";
			$department=$model->getListBySql_a($sql);
			$status=$department[0]['status'];
			$object = new stdClass();
			if($status==0){
				$object->status=1;
			}else{
				$object->status=0;
			}
			
			$object->id=$id;
			//print_r($object);exit;
			if($model->update($object,"id","department","")){

			 	$re=true;
			}else{
			 	$re=false;
			 	$text="切换失败！";
			}
		}
		if($re){
			$CommonFunction->setAction("切换了部门id为".$id."的启用");
		}
		$this->redirect("index.php",$text);
	}
	//清除
	function delete(){
		$CommonFunction=new CommonFunction();
        $CommonFunction->getQuanxian($this->package."/delete");
		$model = $this->createModel("department",dirname( __FILE__ ));
		if($model->deleteDepartment()){
			$CommonFunction->setAction("清理了禁用的部门");
			$this->redirect("index.php","清理成功！");
		}else{
			$this->redirect("index.php","清理失败！");
		}	
	}
	function setRule(){
		$CommonFunction=new CommonFunction();
        $CommonFunction->getQuanxian($this->package."/setRule");
		$model = $this->createModel("department",dirname( __FILE__ ));
		$id=Request::getVar('id','get');
		$rule_sql="select * from admin_rule where status=0 order by rule_order asc";
		$rule_list=$model->getListBySql_a($rule_sql);

		$sql_pid="select pid from department where id={$id}";
		$pid=$CommonFunction->getDataY($sql_pid,"pid");
		if($pid){
			$sql_1="select rules from department where id={$pid}";
			$rules=$CommonFunction->getDataY($sql_1,"rules");
			$rules_lista=explode(",",$rules);
			$rules_listb=null;
			for($j=0;$j<count($rule_list);$j++){
				if(in_array($rule_list[$j]['id'], $rules_lista)){
					$rules_listb[]=$rule_list[$j];
				}
					
			}
			$rule_list=$rules_listb;
		}

		$department_sql="select rules from department where id={$id}";
		$department_list=$model->getListBySql_a($department_sql);
		$rules=$department_list[0]['rules'];
		$rules=explode(",",$rules);
		
		for($i=0;$i<count($rule_list);$i++){
			if(in_array($rule_list[$i]['id'],$rules)){
				$rule_list[$i]['rules_xuanze']=1;
			}else{
				$rule_list[$i]['rules_xuanze']=2;
			}
		}
		$rule_list=$this->getMenuXiaji($rule_list,0);
		$object = new stdClass();
		$object->rule_list=$rule_list;
		//print_r($object->rule_list);exit;
		$object->id=$id;
        $view  = $this->createView("operator/department/setRule.html");
        $view->assign($object);
        $view->display();
		

	}

	function setRuleAction(){
		$CommonFunction=new CommonFunction();
		$array=$CommonFunction->getList("select * from department");


		$model = $this->createModel("department",dirname( __FILE__ ));
		$id=Request::getVar('id','post');
		$rules[]=Request::getVar('rules','post');
		
		$rules=$rules[0];
		$rules_a=NULL;
		for($i=0;$i<count($rules);$i++){
			if($i==0){
				$rules_a.=$rules[$i];
			}else{
				$rules_a.=",".$rules[$i];
			}		
		}
		$object = new stdClass();
		$object->rules=$rules_a;
		$object->id=$id;
		
		if($model->update($object,"id","department","")){
			if($CommonFunction->setZhiweiRule($id)
				&&$CommonFunction->setDepartmentRule($array,$id))
			{
				$re=true;
			}else{
		 		$re=false;
			}
		 	
		}else{
		 	$re=false;
		}
		
		if($re){
			$CommonFunction->setAction("修改了部门id为".$id."的权限");
		}
		$object = new stdClass();
        $object->result = $re ? "添加成功！":"添加失败，返回重试！";
        $view  = $this->createView("operator/department/result.html");
        $view->assign($object);
        $view->display();
		
	}


	
	
	
	
    

}
