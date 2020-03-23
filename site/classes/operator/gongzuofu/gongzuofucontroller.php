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


class gongzuofuController extends AdminController
{
	function __construct($config = array())
	{
		parent::__construct($config);
		$this->registerTask( 'index','index');
		$this->registerTask( 'add','add');
		$this->registerTask( 'insert','insert');
		$this->registerTask( 'list','list_a');
		$this->registerTask( 'delete','delete');
		$this->registerTask( 'tongji_add','tongji_add');
		$this->registerTask( 'tongji_insert','tongji_insert');
		$this->registerTask( 'tongji_list','tongji_list');
		$this->registerTask( 'getsiji','getsiji');
		$this->registerTask( 'get_smoney','get_smoney');
		$this->registerTask( 'tongji_delete','tongji_delete');
		

		
	}

	function index(){
		$model = $this->createModel("gongzuofu",dirname( __FILE__ ));
		$sql="select * from gongzuofu where status!=1";
		$list=$model->getListBySql_a($sql);
		for($i=0;$i<count($list);$i++){
			$sql_a="select * from gongzuofu_tongji where gongzuofu_id={$list[$i]['id']}";
			$tongji=$model->getListBySql_a($sql_a);
			//共计多少件
			$g_jian=0;
			//员工领取件数
			$q_jian=0;
			//仓库剩余件数
			$y_jian=0;
			//购买花费
			$h_hua=0;
			//收取的押金数
			$s_ya=0;
			//退还的押金数
			$t_ya=0;
			for($j=0;$j<count($tongji);$j++){
				$g_jian=$g_jian+$tongji[$j]['sshuliang'];
				$q_jian=$q_jian+$tongji[$j]['shuliang'];

				if($tongji[$j]['jisuan']==0){
					$h_hua=$h_hua+$tongji[$j]['emoney'];
				}else if($tongji[$j]['jisuan']==1){
					$s_ya=$s_ya+$tongji[$j]['smoney'];
					
				}else{
					$t_ya=$t_ya+$tongji[$j]['emoney'];
					$s_ya=$s_ya+$tongji[$j]['smoney'];
				}
			}
			$list[$i]['g_jian']=$g_jian;
			$list[$i]['q_jian']=$q_jian;
			$list[$i]['y_jian']=$g_jian-$q_jian;
			$list[$i]['h_hua']=$h_hua;
			$list[$i]['s_ya']=$s_ya;
			$list[$i]['t_ya']=$t_ya;
		}
		$view  = $this->createView("operator/gongzuofu/index.html");
		$object = new stdClass();
		$object->list=$list;
		$view->assign($object);
		$view->display();
	}
	//添加项目管理
	function add(){
		$model = $this->createModel("gongzuofu",dirname( __FILE__ ));
		$id=Request::getVar('id','get');
		
		$object = new stdClass();
		
		if(!empty($id)){
			$sql="select * from gongzuofu where id={$id}";
			$list=$model->getListBySql_a($sql);
			$data=$list[0];
			$object->data=$data;
		}
		$view  = $this->createView("operator/gongzuofu/add.html");
		$view->assign($object);
		$view->display();
	}
	function insert(){
		 $model = $this->createModel("gongzuofu",dirname( __FILE__ ));
		 $object = new stdClass();
		 
		 $id=Request::getVar('id','post');
		 $object->name=Request::getVar('name','post');
		 $object->jiawei=Request::getVar('jiawei','post');
		 $object->emp_id=$_SESSION['user_id'];
		 $object->addtime=time();
		if(empty($id)){
		 	if($model->store($object,"gongzuofu")){
		 		$this->redirect("list.php","添加成功");
		 	}else{
		 		$this->redirect("list.php","添加失败");
		 	}
		}else{
		 	$object->id=$id;
		 	if($model->update($object,"id","gongzuofu","")){
		 		$this->redirect("list.php","修改成功");
		 	}else{
		 		$this->redirect("list.php","修改失败");
		 	}
		 	
		}
	}
	function list_a(){
		$model = $this->createModel("gongzuofu",dirname( __FILE__ ));
		$sql="select * from gongzuofu where status!=1";
		$list=$model->getListBySql_a($sql);
		for($i=0;$i<count($list);$i++){
			$list[$i]['addtime'] = $list[$i]['addtime'] >0 ? date("Y-m-d H:i:s",$list[$i]['addtime']) : "—";
			$list[$i]['emp_name']=$this->getEmp($list[$i]['emp_id']);
		}


		$object = new stdClass();
		$object->list=$list;
		$view  = $this->createView("operator/gongzuofu/list.html");
		$view->assign($object);
		$view->display();
	}

	//根据员工id查询名称
	function getEmp($emp_id){
		$data=null;
		$model = $this->createModel("gongzuofu",dirname( __FILE__ ));
		$sql="select emp_name from emp where emp_id={$emp_id}";
		$list=$model->getListBySql_a($sql);
		$data=$list[0]['emp_name'];
		return $data;
	}
	function delete(){
		$model = $this->createModel("gongzuofu",dirname( __FILE__ ));
		 $object = new stdClass();
		 $id=Request::getVar('id','get');
		 $object->id=$id;
		 $object->status=1;
		 if($model->update($object,"id","gongzuofu","")){
		 		$this->redirect("list.php","删除成功");
		 }else{
		 		$this->redirect("list.php","删除失败");
		 }
	}


	function tongji_add(){
		$jisuan=Request::getVar('jisuan','get');
		$model = $this->createModel("gongzuofu",dirname( __FILE__ ));
		$sql="select * from gongzuofu where status!=1";
		$gongzuofu_list=$model->getListBySql_a($sql);

		for($i=0;$i<count($gongzuofu_list);$i++){
			$sql_c="select * from gongzuofu_tongji where gongzuofu_id=".$gongzuofu_list[$i]['id'];

			$c_list=$model->getListBySql_a($sql_c);
			
			$k=0;
			$s=0;
			for($j=0;$j<count($c_list);$j++){
				$k=$k+$c_list[$j]['shuliang'];
				$s=$s+$c_list[$j]['sshuliang'];
			}
			
			$gongzuofu_list[$i]['shuliang']=$k;
			$gongzuofu_list[$i]['sshuliang']=$s;
		}

		//print_r($gongzuofu_list);exit;

		$id=Request::getVar('id','get');
		$emp_sql="select * from emp where emp_stutas!=-1";
		$emp_list=$model->getListBySql_a($emp_sql);
		$object = new stdClass();
		
		if(!empty($id)){
			$sql="select * from gongzuofu_tongji where id={$id}";
			$list=$model->getListBySql_a($sql);
			$data=$list[0];
			$data['emp_name']=$this->getEmp($data["emp_id"]);
			$data['gongzuofu']=$this->get_gongzuofuName($data["gongzuofu_id"]);
			$object->data=$data;
		}
		
		$object->emp_list=$emp_list;
		$object->gongzuofu_list=$gongzuofu_list;
		$object->jisuan=$jisuan;
		$view  = $this->createView("operator/gongzuofu/tongji_add.html");
		$view->assign($object);
		$view->display();
	}

	function tongji_insert(){
		$model = $this->createModel("gongzuofu",dirname( __FILE__ ));
		 $object = new stdClass();
		 $id=Request::getVar('id','post');
		 $shuliang=Request::getVar('shuliang','post');
		$object->jisuan=Request::getVar('jisuan','post');

		 if($object->jisuan==1){
		 	 $object->emp_id=Request::getVar('emp_id','post');
		 	 $object->smoney=Request::getVar('money','post');
		 	 $object->shuliang=$shuliang;

		 }
		 if(Request::getVar('gongzuofu_id','post')){
		 	$object->gongzuofu_id=Request::getVar('gongzuofu_id','post');
		 }
		 if($object->jisuan==2||$object->jisuan==0){
		 	$object->emoney=Request::getVar('money','post');
		 	$object->sshuliang=$shuliang;
		 }

		 if($object->jisuan==2){
		 	$object->etime=time();
		 }

		 $object->shuoming=Request::getVar('shuoming','post');
		 $object->addemp_id=$_SESSION['user_id'];
		 $object->addtime=time();
		if(empty($id)){
		 	if($model->store($object,"gongzuofu_tongji")){
		 		$this->redirect("tongji_list.php","添加成功");
		 	}else{
		 		$this->redirect("tongji_list.php","添加失败");
		 	}
		}else{
		 	$object->id=$id;
		 	if($model->update($object,"id","gongzuofu_tongji","")){
		 		$this->redirect("tongji_list.php","修改成功");
		 	}else{
		 		$this->redirect("tongji_list.php","修改失败");
		 	}
		 	
		}
	}

	function tongji_delete(){
		$model = $this->createModel("gongzuofu",dirname( __FILE__ ));
		 $object = new stdClass();
		 $id=Request::getVar('id','get');
		
		 if($model->deletecharge($id)){
		 		$this->redirect("tongji_list.php","删除成功");
		 }else{
		 		$this->redirect("tongji_list.php","删除失败");
		 }
	}
	function tongji_list(){
		$where="where 1=1 ";
		$emp_id = Request::getVar('emp_id','get');
		if($emp_id){
			$where.=" and emp_id={$emp_id}";
		}
		$gongzuofu_id = Request::getVar('gongzuofu_id','get');
		if($gongzuofu_id){
			$where.=" and gongzuofu_id={$gongzuofu_id}";
		}
		$model = $this->createModel("gongzuofu",dirname( __FILE__ ));
		$sql="select * from gongzuofu_tongji {$where}";
		$list=$model->getListBySql_a($sql);
		for($i=0;$i<count($list);$i++){
			$list[$i]['addtime'] = $list[$i]['addtime'] >0 ? date("Y-m-d H:i:s",$list[$i]['addtime']) : "—";
			$list[$i]['etime'] = $list[$i]['etime'] >0 ? date("Y-m-d H:i:s",$list[$i]['etime']) : "";
			$list[$i]['addemp_name']=$this->getEmp($list[$i]['addemp_id']);
			if($list[$i]['emp_id']){
				$list[$i]['emp_name']=$this->getEmp($list[$i]['emp_id']);
			}
			$list[$i]['name']=$this->get_gongzuofuName($list[$i]['gongzuofu_id']);
		}
		$emp_sql="select * from emp where emp_stutas!=-1";
		$emp_list=$model->getListBySql_a($emp_sql);
		$sql="select * from gongzuofu where status!=1";
		$gongzuofu_list=$model->getListBySql_a($sql);
		$object = new stdClass();



		$object->gongzuofu_list=$gongzuofu_list;
		$object->list=$list;
		$object->emp_list=$emp_list;
		$view  = $this->createView("operator/gongzuofu/tongji_list.html");
		$view->assign($object);
		$view->display();
	}
	//根据部门id查询部门名称
	function getshop_name($id){
		$data=null;
		$model = $this->createModel("gongzuofu",dirname( __FILE__ ));
		$sql="select shop_name from shop where shop_id={$id}";
		$list=$model->getListBySql_a($sql);
		$data=$list[0]['shop_name'];
		return $data;
	}
	function get_gongzuofuName($id){
		$data=null;
		$model = $this->createModel("gongzuofu",dirname( __FILE__ ));
		$sql="select name from gongzuofu where id={$id}";
		$list=$model->getListBySql_a($sql);
		$data=$list[0]['name'];
		return $data;
	}
	//根据名字模糊查询员工
	 function getsiji(){
        $list=null;
        $model = $this->createModel("gongzuofu",dirname( __FILE__ ));
        $name = Request::getVar('name','post');
        $sql_siji="select * from emp where  emp_name like '%".$name."%' and emp_stutas!=-1";
       $list=$model->getListBySql_a($sql_siji);
       echo json_encode($list);
    }
    function get_smoney(){
    	$list=null;
        $model = $this->createModel("gongzuofu",dirname( __FILE__ ));
        $shuliang = Request::getVar('shuliang','post');
        $gongzuofu_id = Request::getVar('gongzuofu_id','post');
        $sql="select jiawei from gongzuofu where id={$gongzuofu_id}";
       	$list=$model->getListBySql_a($sql);
       	$data=$list[0]['jiawei']*$shuliang;
       	echo $data;
    }

}
