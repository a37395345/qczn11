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





class JucanController extends AdminController
{
	function __construct($config = array())
	{
		parent::__construct($config);
		$this->registerTask( 'index','index');
		$this->registerTask( 'xiangmu_index','xiangmu_index');
		$this->registerTask( 'add','add');
		$this->registerTask( 'xiangmu_add','xiangmu_add');
		$this->registerTask( 'xiangmu_insert','xiangmu_insert');
		$this->registerTask( 'xiangmu_delete','xiangmu_delete');
		$this->registerTask( 'add','add');
		$this->registerTask( 'getsiji','getsiji');
		$this->registerTask( 'insert','insert');
		$this->registerTask( 'delete','delete');
		$this->registerTask( 'list','list_a');
		$this->registerTask( 'shop_list','shop_list');

		$this->registerTask( 'xiaofei_index','xiaofei_index');
		$this->registerTask( 'xiaofei_add','xiaofei_add');
		$this->registerTask( 'xiaofei_insert','xiaofei_insert');
		$this->registerTask( 'xiaofei_delete','xiaofei_delete');
		$this->registerTask( 'tongji','tongji');
		

	}
	function tongji(){
		 $model = $this->createModel("jucan",dirname( __FILE__ ));
		 $sql="select sum(money) as moneys from jucan";
		 $jucan=$model->getListBySql_a($sql);
		 $jucan=$jucan[0]['moneys'];

		 $sql="select sum(money) as moneys from jucan_xiaofei";
		 $xiaofei=$model->getListBySql_a($sql);
		 $xiaofei=$xiaofei[0]['moneys'];
		 $list["xiaofei"]=$xiaofei;
		 $list["jucan"]=$jucan;
		 //print_r($list["jucan"]);exit;
		 return $list;

	}
	//统计
	function list_a(){

		$view  = $this->createView("operator/jucan/list_abc.html");
		$object = new stdClass();
		$object->tongji=$this->tongji();
		$view->assign($object);
		$view->display();
	}
	//根据名字模糊查询员工
	 function getsiji(){
        $list=null;
        $model = $this->createModel("jucan",dirname( __FILE__ ));
        $name = Request::getVar('name','post');
        $sql_siji="select * from emp where  emp_name like '%".$name."%'";
       $list=$model->getListBySql_a($sql_siji);
       echo json_encode($list);
    }
    //按部门获取所有信息
    function shop_list(){
        $list=null;
        $model = $this->createModel("jucan",dirname( __FILE__ ));
        $sql="select * from shop where shop_id!=5 and shop_id!=10";
       	$list=$model->getListBySql_a($sql);
       	for($i=0;$i<count($list);$i++){
       		$sql_a="select sum(money) from jucan where shop_id=".$list[$i]['shop_id'];
       		$jucan_money=$model->getListBySql_a($sql_a);
       		$list[$i]['money']=$jucan_money[0]['sum(money)'];

       		$sql_b="select count(*) from emp where emp_stutas!=-1 and emp_shopid=".$list[$i]['shop_id'];
       		$emp_count=$model->getListBySql_a($sql_b);
       		$list[$i]['emp_count']=$emp_count[0]['count(*)'];

       		$sql_c="select sum(money) from jucan_xiaofei where shop_id=".$list[$i]['shop_id'];
       		$xiaofei=$model->getListBySql_a($sql_c);
       		$list[$i]['xiaofei']=$xiaofei[0]['sum(money)'];

       		$list[$i]['shenyu']=$list[$i]['money']-$list[$i]['xiaofei'];
       		if($list[$i]['shenyu']!=0){
       			$list[$i]['pinjun']=round($list[$i]['shenyu']/$list[$i]['emp_count'],2);
       		}else{
       			$list[$i]['pinjun']=0;
       		}
       		

       	}


       	echo json_encode($list);
    }
    //根据id查询项目名称
	function getxiangmu($id){
		$data=null;
		$model = $this->createModel("jucan",dirname( __FILE__ ));
		$sql="select name from jucan_xiangmu where id={$id}";
		$list=$model->getListBySql_a($sql);
		$data=$list[0]['name'];
		return $data;
	}
	//根据部门id查询部门名称
	function getshop_name($id){
		$data=null;
		$model = $this->createModel("jucan",dirname( __FILE__ ));
		$sql="select shop_name from shop where shop_id={$id}";
		$list=$model->getListBySql_a($sql);
		$data=$list[0]['shop_name'];
		return $data;
	}
	function index(){
		$model = $this->createModel("jucan",dirname( __FILE__ ));
		$where="where 1=1";

		$s_time = Request::getVar('s_time','get');
		if($s_time){
			$where.=" and addtime>=".strtotime($s_time);
		}
		$e_time = Request::getVar('e_time','get');
		if($e_time){
			$where.=" and addtime<=".strtotime($e_time." 23:59:59");
		}
		
		$sql="select * from jucan {$where}";
		$list=$model->getListBySql_a($sql);
		for($i=0;$i<count($list);$i++){
			$list[$i]['addtime'] = $list[$i]['addtime'] >0 ? date("Y-m-d H:i:s",$list[$i]['addtime']) : "—";
			$list[$i]['xiangmu_name']=$this->getxiangmu($list[$i]['xiangmu_id']);
			$list[$i]['emp_name']=$this->getEmp($list[$i]['emp_id']);
			$list[$i]['add_emp_name']=$this->getEmp($list[$i]['add_empid']);
			$list[$i]['shop_name']=$this->getshop_name($list[$i]['shop_id']);
			
		}
		$object = new stdClass();
		$object->list=$list;
		$object->tongji=$this->tongji();
		
		$view  = $this->createView("operator/jucan/index.html");
		$view->assign($object);
		$view->display();
	}
	function insert(){
		 $model = $this->createModel("jucan",dirname( __FILE__ ));
		 $object = new stdClass();
		 $id=Request::getVar('id','post');

		 $object->xiangmu_id=Request::getVar('xiangmu_id','post');
		 $object->shuoming=Request::getVar('shuoming','post');
		 $object->money=Request::getVar('money','post');
		 $object->emp_id=Request::getVar('emp_id','post');
		 $object->shop_id=$this->get_shopid($object->emp_id);
		 $object->add_empid=$_SESSION['user_id'];
		 $object->addtime=time();
		if(empty($id)){

		 	if($model->store($object,"jucan")){
		 		$this->redirect("index.php","添加成功");
		 	}else{
		 		$this->redirect("index.php","添加失败");
		 	}
		}else{
		 	$object->id=$id;
		 	if($model->update($object,"id","jucan","")){
		 		$this->redirect("index.php","修改成功");
		 	}else{
		 		$this->redirect("index.php","修改失败");
		 	}
		 	
		}
		 

	}
	function add(){
		$model = $this->createModel("jucan",dirname( __FILE__ ));
		$id=Request::getVar('id','get');
		$xiangmu_sql="select * from jucan_xiangmu where status!=1";
		$xiangmu_list=$model->getListBySql_a($xiangmu_sql);

		$emp_sql="select * from emp where emp_stutas!=-1";
		$emp_list=$model->getListBySql_a($emp_sql);

		$object = new stdClass();

		if(!empty($id)){
			$model = $this->createModel("jucan",dirname( __FILE__ ));
			$sql="select * from jucan where id={$id}";
			$list=$model->getListBySql_a($sql);
			$data=$list[0];

			$object->data=$data;

		}


		$object->xiangmu_list=$xiangmu_list;
		$object->emp_list=$emp_list;
		$view  = $this->createView("operator/jucan/add.html");
		$view->assign($object);
		$view->display();
	}
	function delete(){
		 $model = $this->createModel("jucan",dirname( __FILE__ ));
		 $object = new stdClass();
		 $id=Request::getVar('id','get');
		 $object->id=$id;
		 $object->status=1;
		 if($model->deleteitem($id,"jucan")){
		 		$this->redirect("index.php","删除成功");
		 }else{
		 		$this->redirect("index.php","删除失败");
		 }
	}
	//根据员工名称查询部门id
	function get_shopid($emp_id){
		$data=null;
		$model = $this->createModel("jucan",dirname( __FILE__ ));
		$sql="select emp_shopid from emp where emp_id={$emp_id}";
		$list=$model->getListBySql_a($sql);
		$data=$list[0]['emp_shopid'];
		return $data;
	}
	//根据员工id查询名称
	function getEmp($emp_id){
		$data=null;
		$model = $this->createModel("jucan",dirname( __FILE__ ));
		$sql="select emp_name from emp where emp_id={$emp_id}";
		$list=$model->getListBySql_a($sql);
		$data=$list[0]['emp_name'];
		return $data;
	}
	//查询部门集合
	function get_shoplist(){
		$data=null;
		$model = $this->createModel("jucan",dirname( __FILE__ ));
		$sql="select * from shop where shop_id!=5 and shop_id!=10";
		$list=$model->getListBySql_a($sql);
		return $list;
	}
	function xiangmu_index(){
		$model = $this->createModel("jucan",dirname( __FILE__ ));
		$sql="select * from jucan_xiangmu where status!=1";
		$list=$model->getListBySql_a($sql);
		for($i=0;$i<count($list);$i++){
			$list[$i]['addtime'] = $list[$i]['addtime'] >0 ? date("Y-m-d H:i:s",$list[$i]['addtime']) : "—";
			$list[$i]['emp_name']=$this->getEmp($list[$i]['emp_id']);
		}
		$object = new stdClass();
		$object->list=$list;
		$object->tongji=$this->tongji();
		$view  = $this->createView("operator/jucan/xiangmu_index.html");
		$view->assign($object);
		$view->display();
	}
	function xiangmu_add(){
		$object = new stdClass();
		$id=Request::getVar('id','get');
		if(!empty($id)){
			$model = $this->createModel("jucan",dirname( __FILE__ ));
			$sql="select * from jucan_xiangmu where status!=1";
			$list=$model->getListBySql_a($sql);
			$object->data=$list[0];
			
		}
		$view  = $this->createView("operator/jucan/xiangmu_add.html");
		
		$view->assign($object);
		$view->display();

	}
	function xiangmu_insert(){
		 $model = $this->createModel("jucan",dirname( __FILE__ ));
		 $object = new stdClass();
		 $id=Request::getVar('id','post');
		 $object->name=Request::getVar('name','post');
		 $object->emp_id=$_SESSION['user_id'];
		 $object->addtime=time();
		 if(empty($id)){

		 	if($model->store($object,"jucan_xiangmu")){
		 		$this->redirect("xiangmu_index.php","添加成功");
		 	}else{
		 		$this->redirect("xiangmu_index.php","添加失败");
		 	}
		 }else{
		 	$object->id=$id;
		 	if($model->update($object,"id","jucan_xiangmu","")){
		 		$this->redirect("xiangmu_index.php","修改成功");
		 	}else{
		 		$this->redirect("xiangmu_index.php","修改失败");
		 	}
		 	
		 }
	}
	function xiangmu_delete(){
		 $model = $this->createModel("jucan",dirname( __FILE__ ));
		 $object = new stdClass();
		 $id=Request::getVar('id','get');
		 $object->id=$id;
		 $object->status=1;
		 if($model->update($object,"id","jucan_xiangmu","")){
		 		$this->redirect("xiangmu_index.php","删除成功");
		 }else{
		 		$this->redirect("xiangmu_index.php","删除失败");
		 }

	}

	//消费
	function xiaofei_index(){
		
		$model = $this->createModel("jucan",dirname( __FILE__ ));
		$where="where 1=1";

		$s_time = Request::getVar('s_time','get');
		if($s_time){
			$where.=" and addtime>=".strtotime($s_time);
		}
		$e_time = Request::getVar('e_time','get');
		if($e_time){
			$where.=" and addtime<=".strtotime($e_time." 23:59:59");
		}
		$sql="select * from jucan_xiaofei {$where}";
		$list=$model->getListBySql_a($sql);
		for($i=0;$i<count($list);$i++){
			$list[$i]['addtime'] = $list[$i]['addtime'] >0 ? date("Y-m-d H:i:s",$list[$i]['addtime']) : "—";
			$list[$i]['emp_name']=$this->getEmp($list[$i]['emp_id']);
			$list[$i]['shop_name']=$this->getshop_name($list[$i]['shop_id']);
		}
		$object = new stdClass();
		$object->list=$list;
		$object->tongji=$this->tongji();
		$view  = $this->createView("operator/jucan/xiaofei_index.html");
		$view->assign($object);
		$view->display();
	}

	function xiaofei_add(){
		$object = new stdClass();
		$id=Request::getVar('id','get');
		if(!empty($id)){
			$model = $this->createModel("jucan",dirname( __FILE__ ));
			$sql="select * from jucan_xiaofei";
			$list=$model->getListBySql_a($sql);
			$object->data=$list[0];
			
		}
		$object->shoplist=$this->get_shoplist();
		$view  = $this->createView("operator/jucan/xiaofei_add.html");
		
		$view->assign($object);
		$view->display();
	}
	function xiaofei_insert(){
		 $model = $this->createModel("jucan",dirname( __FILE__ ));
		 $object = new stdClass();
		 $id=Request::getVar('id','post');
		 $object->shuoming=Request::getVar('shuoming','post');
		 $object->money=Request::getVar('money','post');
		 $object->emp_id=$_SESSION['user_id'];
		 $object->addtime=time();
		 if(empty($id)){

		 	if($model->store($object,"jucan_xiaofei")){
		 		$this->redirect("xiaofei_index.php","添加成功");
		 	}else{
		 		$this->redirect("xiaofei_index.php","添加失败");
		 	}
		 }else{
		 	$object->id=$id;
		 	if($model->update($object,"id","jucan_xiaofei","")){
		 		$this->redirect("xiaofei_index.php","修改成功");
		 	}else{
		 		$this->redirect("xiaofei_index.php","修改失败");
		 	}
		 	
		 }
	}
	function xiaofei_delete(){
		 $model = $this->createModel("jucan",dirname( __FILE__ ));
		 $object = new stdClass();
		 $id=Request::getVar('id','get');
		 $object->id=$id;
		 if($model->deleteitem($id,"jucan_xiaofei")){
		 		$this->redirect("xiaofei_index.php","删除成功");
		 }else{
		 		$this->redirect("xiaofei_index.php","删除失败");
		 }
	}



}
