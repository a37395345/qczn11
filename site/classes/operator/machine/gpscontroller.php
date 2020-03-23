<?php
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('operator.navi.admincontroller');
import('operator.navi.privilegehelper');
import('imag.fusecookie');

error_reporting(E_ERROR);

class GpsController extends AdminController
{
	function __construct($config = array())
	{
		parent::__construct($config);
		
		$this->registerTask( 'create','create');
		$this->registerTask( 'insert','insert');
		$this->registerTask( 'modify','modify');
		$this->registerTask( 'update','update');
		$this->registerTask( 'delete','delete');
		$this->registerTask( 'first','first');
		$this->registerTask( 'list','plist');
	}
	function display(){
		echo "display";
	}
	function first(){
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$where="`car_recycle`!=1 ";
		$sql="Select Sum(nCount1) as nCount1,Sum(nCount2) as nCount2,Sum(nCount3) as nCount3,Sum(nCount4) as nCount4,Sum(nCount1+nCount2+nCount3+nCount4) as nCount From (
		Select count(*) as nCount1,0 as nCount2,0 as nCount3,0 as nCount4 From car Where {$where} and (car_status=0 or car_status=1) 
				Union All 
				Select 0 as nCount1,count(*) as nCount2,0 as nCount3,0 as nCount4 From car Where {$where} and car_status=2
				Union All 
				Select 0 as nCount1,0 as nCount2,count(*) as nCount3,0 as nCount4 From car Where {$where} and car_status=3 and car_changeDate=0
				Union All 
				Select 0 as nCount1,0 as nCount2,0 as nCount3,count(*) as nCount4 From car Where {$where} and car_status=3 and car_changeDate<>0) aa";

		$first = $model->getListBySql(0,100, $sql);
		$view  = $this->createView("operator/gps/first.html");
		
		$object = new stdClass();
		$object->first = $first;
		$view->assign($object);
		$view->display();
	}
	function plist()
	{
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$base_url = "list.php?";
		$per_page = 10;
		$mobile=Request::getVar('mobile','get');
		$where="`car_recycle`!=1 AND `car_id` IN (SELECT `car_id` FROM `car_gps`".(empty($mobile)?"":" Where gps_cardno like '%{$mobile}'").")";
		$car_num=Request::getVar('car_num','get');
		$car_cartDate=Request::getVar('car_cartDate','get');
		$car_status=Request::getVar('car_status','get');
		
		if(!empty($car_num)){$where.=" AND car_num like '%".$car_num."%'";$base_url.="&car_num={$car_num}";}
	if(!empty($car_cartDate)){$where.=" AND car_cartDate='".strtotime($car_cartDate)."'";$base_url.="&car_cartDate={$car_cartDate}";}
	 	
		if ($car_status=="4"){
	 		$where.=" AND car_status = 3 AND car_changeDate<>0";
	 		$base_url.="&car_status={$car_status}";
	 	}else if ($car_status=="3"){
	 		$where.=" AND car_status = {$car_status} AND car_changeDate=0";
	 		$base_url.="&car_status={$car_status}";
	 	}else{
	 		$where.=" AND car_status != 3";
	 	}
	 	
		$model = $this->createModel("machine",dirname( __FILE__ ));
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;		
		
		$sql="SELECT car_id,car_num,car_brand,car_type,car_seat,car_saleDate,car_positionDate FROM `car` WHERE {$where} ORDER BY `car_id` DESC";
		$List = $model->getListBySql($start,$per_page, $sql);
		$sql="SELECT COUNT(*) AS total FROM `car` WHERE {$where}";
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
		$view  = $this->createView("operator/gps/list.html");
		
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();		
		$object->list = $List;
		$object->total = $total_item;
		$object->car_status=$car_status;
		$view->assign($object);
		$view->display();
	}
	function create()
	{
		$object = new stdClass();
		$object->task = "insert";
                        
        $view  = $this->createView("operator/gps/create.html");
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
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$carid=Request::getVar('paicheCar2','post');
		
		$gps_installDate=Request::getVar('gps_installDate','post');
		$startDate=Request::getVar('gps_start','post');
		$endDate=Request::getVar('gps_end','post');
		$object = new stdClass();
	  	$object->car_id=$carid;
	  	$object->gps_model = Request::getVar('gps_model','post');
	  	$object->gps_serial = Request::getVar('gps_serial','post');
	  	$object->gps_installDate = strtotime($gps_installDate);
	  	$object->gps_site = Request::getVar('gps_site','post');
	  	$object->gps_start=strtotime($startDate);
	  	$object->gps_end=empty($endDate)? 0:strtotime($endDate);
	  	$object->gps_money=Request::getVar('gps_money','post');
	  	$object->gps_package=Request::getVar('gps_package','post');
	  	$object->gps_cardno=Request::getVar('gps_cardno','post');
	  	$object->gps_remark=Request::getVar('gps_remark','post');
	  	
	  	$object1 = new stdClass();
	  	$object1->car_id=$carid;
	  	$object1->car_positionDate=strtotime($gps_installDate);
	  	$object1->car_position = 1;
        
		if ($model->store($object,"car_gps") && $model->update($object1,'car_id'))
		{
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
		$sql = "SELECT a.*,b.car_num FROM `car_gps` AS a LEFT JOIN `car` AS b ON a.car_id=b.car_id WHERE a.`gps_id`='{$uid}'";
		$Info = $model->getInfoBySql($sql);
		
		$object = new stdClass();
		$object->list = $Info;
		$object->task = "update";
        
        $view  = $this->createView("operator/gps/create.html");
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
		
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$carid=Request::getVar('paicheCar2','post');
		//$carinfo=$model->$model->getInfo($carid,"car","car_id");
		$gps_installDate=Request::getVar('gps_installDate','post');
		$startDate=Request::getVar('gps_start','post');
		$endDate=Request::getVar('gps_end','post');
		$object = new stdClass();
		$object->gps_id = $uid;
	  	$object->car_id=$carid;
	  	$object->gps_model = Request::getVar('gps_model','post');
	  	$object->gps_serial = Request::getVar('gps_serial','post');
	  	$object->gps_installDate = strtotime($gps_installDate);
	  	$object->gps_site = Request::getVar('gps_site','post');
	  	$object->gps_start=strtotime($startDate);
	  	$object->gps_end=empty($endDate)? 0:strtotime($endDate);
	  	$object->gps_money=Request::getVar('gps_money','post');
	  	$object->gps_package=Request::getVar('gps_package','post');
	  	$object->gps_cardno=Request::getVar('gps_cardno','post');
	  	$object->gps_remark=Request::getVar('gps_remark','post');
	  	
	  	//$object1 = new stdClass();
	  	//$object1->car_id=$carid;
	  	//$object1->car_insuranceDate=strtotime($endDate);

		if ($model->update($object,'gps_id','car_gps'))
		{
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
		$model = $this->createModel("machine",dirname( __FILE__ ));
		
		if ($model->delete2($uid,"car_gps","gps_id")){
			Components::save_admin_log("删除了ID为".$uid."的GPS记录");
			$this->redirect($forward,"删除成功");
		}
	}
}
?>