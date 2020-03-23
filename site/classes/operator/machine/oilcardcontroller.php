<?php
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('operator.navi.admincontroller');
import('operator.navi.privilegehelper');
import('imag.fusecookie');

error_reporting(E_ERROR);

class OilcardController extends AdminController
{
	function __construct($config = array())
	{
		parent::__construct($config);
		
		$this->registerTask( 'create','create');
		$this->registerTask( 'insert','insert');
		$this->registerTask( 'modify','modify');
		$this->registerTask( 'update','update');
		$this->registerTask( 'delete','delete');
		$this->registerTask( 'list','plist');
		$this->registerTask( 'first','first');
		$this->registerTask( 'copy','copy');
		$this->registerTask( 'inmoney_acc','inmoney_acc');
	}
	function display(){
		echo "display";
	}
	function first(){
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$sql="SELECT card_state,COUNT(*) AS nCount FROM car_oilcard Group by card_state Order by card_state Desc";
		$List = $model->getList($sql);
		
		$view  = $this->createView("operator/oilcard/first.html");
		
		$object = new stdClass();
		$object->first = $List;
		$object->total = 0;
		$view->assign($object);
		$view->display();
	}
	function plist()
	{
		$car_num=Request::getVar('car_num','get');
		$mobile=Request::getVar('mobile','get');
		$search_status=Request::getVar('search_status','get');
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$base_url = "list.php?search_status={$search_status}";
		$per_page = 10;
		
		if ($search_status==9){
			$where="1 ";
		}else{
			$where="card_state={$search_status} ";
		}
		if(!empty($car_num)){
			$where.=" AND b.car_num like '%".$car_num."%'";
			$base_url.="&car_num={$car_num}";
		}
		if(!empty($mobile)){
			$where.=" AND a.card_no like '%{$mobile}'";
			$base_url.="&mobile={$mobile}";
		}
	 		 	
		$model = $this->createModel("machine",dirname( __FILE__ ));
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;		
		
		$sql="SELECT a.*,b.car_num FROM car_oilcard a Left Join car b on a.car_id=b.car_id WHERE {$where} ORDER BY card_no";

		$List = $model->getList($sql." LIMIT $start,$per_page");
		$sql="SELECT COUNT(*) AS total FROM car_oilcard a Left Join car b on a.car_id=b.car_id WHERE {$where}";
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
		$view  = $this->createView("operator/oilcard/list.html");
		
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();		
		$object->list = $List;
		$object->total = $total_item;
		$object->search_status=$search_status;
		$view->assign($object);
		$view->display();
	}
	function create()
	{
		$model = $this->createModel("machine",dirname( __FILE__ ));
		
		$object = new stdClass();
		$object->task = "insert";
		$object->carlist=$model->getListBySql(0,300,"SELECT car_id,car_num FROM car WHERE car_recycle !=1 AND car_status!=3 ORDER BY car_id DESC");
		
        $view  = $this->createView("operator/oilcard/create.html");
		$view->assign($object);
		$view->display();
	}
	function copy(){
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$sql = "SELECT a.* FROM `car_oilcard` AS a WHERE a.`oil_id`='{$uid}'";
		$Info = $model->getInfoBySql($sql);
		$Info['car_id']=0;
		
		
		$object = new stdClass();
		$object->list = $Info;
		$object->info = $Recinfo;
		$object->task = "insert";
		$object->carlist=$model->getListBySql(0,300,"SELECT car_id,car_num FROM car WHERE car_recycle !=1 ORDER BY car_id DESC");
		
        $view  = $this->createView("operator/oilcard/create.html");
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
		$car_id=Request::getVar('car_id','post');
		$model = $this->createModel("machine",dirname( __FILE__ ));
				
		$object = new stdClass();
		$object->car_id=$car_id;
	  	$object->card_no=Request::getVar('card_no','post');
	  	$object->card_pass=Request::getVar('card_pass','post');
	  	$object->card_oilmode = Request::getVar('card_oilmode','post');
	  	$object->card_area=Request::getVar('card_area','post');
	  	$object->card_state=Request::getVar('card_state','post');
	  	$object->add_time=date("Y-m-d H:i:s");
	  	
		if ($model->store($object,"car_oilcard"))
		{
			if (!empty($car_id)){
				$object = new stdClass();
				$object->car_id=$car_id;
				$object->car_oilcard=1;
				$model->update($object,'car_id','car');
			}
			$this->redirect($forward,"添加成功");
		}
		else
		{
			$this->redirect($forward,"添加失败");
		}
	}
	function modify()
	{
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$sql = "SELECT a.* FROM `car_oilcard` AS a WHERE a.`oil_id`='{$uid}'";
		$Info = $model->getInfoBySql($sql);
		
		$object = new stdClass();
		$object->list = $Info;
		$object->task = "update";
        $object->carlist=$model->getListBySql(0,300,"SELECT car_id,car_num FROM car WHERE car_recycle !=1 ORDER BY car_id DESC");
		
        $view  = $this->createView("operator/oilcard/create.html");
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
		$car_id=Request::getVar('car_id','post');
		$oldcarid=Request::getVar('oldcarid','post');
		$model = $this->createModel("machine",dirname( __FILE__ ));
		
		$object = new stdClass();
		$object->oil_id = $uid;
	  	$object->car_id=$car_id;
	  	$object->card_no=Request::getVar('card_no','post');
	  	$object->card_pass=Request::getVar('card_pass','post');
	  	$object->card_oilmode = Request::getVar('card_oilmode','post');
	  	$object->card_state=Request::getVar('card_state','post');
	  	$object->card_area=Request::getVar('card_area','post');

		if ($model->update($object,'oil_id','car_oilcard'))
		{
			if ($oldcarid!=$car_id){
				if (!empty($oldcarid)){
				$object = new stdClass();
				$object->car_id=$oldcarid;
				$object->car_oilcard=0;
				$model->update($object,'car_id','car');
				}
				if (!empty($car_id)){
				$object = new stdClass();
				$object->car_id=$car_id;
				$object->car_oilcard=1;
				$model->update($object,'car_id','car');
				}
			}
			$this->redirect($forward,"修改成功!");
		}
		else
		{
			$this->redirect($forward,"修改失败!");
		}
	}
	function delete()
	{
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
            $forward = "list.php";
		}
		$uid = Request::getVar('uid','get');
		$car_id=Request::getVar('car_id','get');
		$model = $this->createModel("machine",dirname( __FILE__ ));
		
		if ($model->delete2($uid,"car_oilcard","oil_id")){
			if (!empty($car_id)){
				$object = new stdClass();
				$object->car_id=$car_id;
				$object->car_oilcard=0;
				$model->update($object,'car_id','car');
			}
			Components::save_admin_log("删除了ID为".$uid."的加油卡记录");
			$this->redirect($forward,"删除成功");
		}
	}
	
}
?>