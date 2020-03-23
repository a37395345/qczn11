<?php
import('operator.navi.admincontroller');
import('publicFunction.CommonFunction');
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('imag.utilities.pagestyle_a');
import('imag.image.uploader');
import('operator.navi.privilegehelper');
import('imag.fusecookie');
import('imag.filesystem.fusefile');
import('imag.filesystem.filesystem');
import('imag.utilities.tool');

class huodongController extends AdminController
{
	private $package="site/operator/huodong";
	function __construct($config = array())
	{
		parent::__construct($config);
		$this->registerTask( 'index','index');
		$this->registerTask( 'add','add');
		$this->registerTask( 'insert','insert');
		$this->registerTask( 'edit','edit');
		$this->registerTask( 'update','update');
		$this->registerTask( 'setStatus','setStatus');
		$this->registerTask( 'delete','delete');
		
		
	}
	function index(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/index");
		$sql="select * from huodong";
       	$list=$CommonFunction->getList($sql);
       	$sql_shop="select * from shop where stutas=0 ";
       	$shop_list=$CommonFunction->getList($sql_shop);
       	for($i=0;$i<count($list);$i++){
       		$list[$i]['addtime']=date('Y-m-d H:i:s', $list[$i]['addtime']);
       		$list[$i]['endtime']=date('Y-m-d H:i:s', $list[$i]['endtime']);
       		$shops=explode(",",$list[$i]['shops']);
       		$list[$i]['h_id']=explode(",",$list[$i]['h_id']);
       		$list[$i]['shops_a']=$shops;
       	}
        $object = new stdClass();
        $object->rule_add=$CommonFunction->panduan_rule($this->package."/add");
		$object->rule_edit=$CommonFunction->panduan_rule($this->package."/edit");

		$object->rule_setStatus=$CommonFunction->panduan_rule($this->package."/setStatus");
		$object->rule_delete=$CommonFunction->panduan_rule($this->package."/delete");

		$object->list = $list;
		$object->shop_list = $shop_list;
		$view  = $this->createView("operator/huodong/index.html");
		$view->assign($object);
		$view->display();
		
	}

	function add(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/add");
		$sql="select * from huodong  order by id asc";
		$list=$CommonFunction->getList($sql);
		$sql_shop="select * from shop where stutas=0";
       	$shop_list=$CommonFunction->getList($sql_shop);
		$object = new stdClass();
		$object->shop_list=$shop_list;
		$object->list=$list;

		$view  = $this->createView("operator/huodong/add.html");
		$view->assign($object);
		$view->display();
	}
	//储存
	function insert(){
		$CommonFunction=new CommonFunction();
		$object = new stdClass();
		$object->name=Request::getVar('name','post');
		$object->paiche_type=Request::getVar('paiche_type','post');
		$object->type=Request::getVar('type','post');
		$object->money=Request::getVar('money','post');
		$object->addtime=strtotime(Request::getVar('addtime','post'));
		$object->endtime=strtotime(Request::getVar('endtime','post'));
		$object->tianshu=Request::getVar('tianshu','post');
		$object->cishu=Request::getVar('cishu','post');
		$object->stutas=1;
		
		$shops[]=Request::getVar('shops','post');
		$shops=$shops[0];
		$shops_a=NULL;
		for($i=0;$i<count($shops);$i++){
			if($i==0){
				$shops_a.=$shops[$i];
			}else{
				$shops_a.=",".$shops[$i];
			}		
		}
		$object->shops=$shops_a;


		$h_id[]=Request::getVar('h_id','post');
		$h_id=$h_id[0];
		$h_ida=NULL;
		for($i=0;$i<count($h_id);$i++){
			if($i==0){
				$h_ida.=$h_id[$i];
			}else{
				$h_ida.=",".$h_id[$i];
			}		
		}
		$object->h_id=$h_ida;
        $re=true;
        
		if($CommonFunction->instert($object,"huodong")){
		 	$re=true;
		}else{
		 	$re=false;
		}
		if($re){
			$CommonFunction->setAction("添加了活动-".$object->name);
		}
		$object = new stdClass();
        $object->result = $re ? "添加成功！":"添加失败，返回重试！";
        $view  = $this->createView("operator/huodong/result.html");
        $view->assign($object);
        $view->display();
		
	}
	function edit(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/edit");
		$id=Request::getVar('id','get');
		$sql="select * from huodong where id={$id}";
		$huodong=$CommonFunction->getData($sql);
		$huodong['addtime']=date('Y-m-d H:i:s', $huodong['addtime']);
       	$huodong['endtime']=date('Y-m-d H:i:s', $huodong['endtime']);
       	$huodong['shops']=explode(",",$huodong['shops']);
       	$huodong['h_id']=explode(",",$huodong['h_id']);

		$sql="select * from huodong where  id!={$id} order by id asc";
		$list=$CommonFunction->getList($sql);
		$sql_shop="select * from shop where stutas=0";
       	$shop_list=$CommonFunction->getList($sql_shop);
		$object = new stdClass();
		$object->shop_list=$shop_list;
		$object->huodong=$huodong;
		$object->list=$list;
		$view  = $this->createView("operator/huodong/edit.html");
        $view->assign($object);
        $view->display();
	}
	function update(){
		$re=true;
		$CommonFunction=new CommonFunction();
		$id=Request::getVar('id','post');

		$object = new stdClass();
		
		$object->id=$id;
		$object->name=Request::getVar('name','post');
		$object->paiche_type=Request::getVar('paiche_type','post');
		$object->type=Request::getVar('type','post');
		$object->money=Request::getVar('money','post');
		$object->addtime=strtotime(Request::getVar('addtime','post'));
		$object->endtime=strtotime(Request::getVar('endtime','post'));
		$object->tianshu=Request::getVar('tianshu','post');
		$object->cishu=Request::getVar('cishu','post');
		
		
		$shops[]=Request::getVar('shops','post');
		$shops=$shops[0];
		$shops_a=NULL;
		for($i=0;$i<count($shops);$i++){
			if($i==0){
				$shops_a.=$shops[$i];
			}else{
				$shops_a.=",".$shops[$i];
			}		
		}
		$object->shops=$shops_a;


		$h_id[]=Request::getVar('h_id','post');
		$h_id=$h_id[0];
		$h_ida=NULL;
		for($i=0;$i<count($h_id);$i++){
			if($i==0){
				$h_ida.=$h_id[$i];
			}else{
				$h_ida.=",".$h_id[$i];
			}		
		}
		$object->h_id=$h_ida;
        $re=true;
        //print_r($object);exit;
		if($CommonFunction->update_a($object,"id","huodong","")){
		 	$re=true;
		}else{
		 	$re=false;
		}
		if($re){
			$CommonFunction->setAction("修改了活动-".$object->name);
		}
		$object = new stdClass();
        $object->result = $re ? "修改成功！":"修改失败，返回重试！";
        $view  = $this->createView("operator/huodong/result.html");
        $view->assign($object);
        $view->display();
	}
	function setStatus(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/setStatus");
		$id=Request::getVar('id','get');
		$sql="select stutas from huodong where id={$id}";
		$stutas=$CommonFunction->getDataY($sql,'stutas');
		$object = new stdClass();
		$object->id=$id;
		if($stutas==1){
			$object->stutas=-1;
		}else{
			$object->stutas=1;
		}
		$re=true;
		$text="切换成功";

		if($CommonFunction->update_a($object,"id","huodong","")){
		 	$re=true;
		}else{
			$text="切换失败";
		 	$re=false;
		}
		if($re){
			$CommonFunction->setAction("切换了id为".$id."的活动启用");
		}
		$this->redirect("index.php",$text);
	}
	
	function delete(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/delete");
		if($CommonFunction->dalete_sql("huodong","stutas","-1")){
			$CommonFunction->setAction("清理了禁用的活动");
			$this->redirect("index.php","清理成功！");
		}else{
			$this->redirect("index.php","清理失败！");
		}	
	}
	


	
}
