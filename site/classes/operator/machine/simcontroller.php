<?php
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('operator.navi.admincontroller');
import('operator.navi.privilegehelper');
import('imag.fusecookie');

error_reporting(E_ERROR);

class SimController extends AdminController
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
		$this->registerTask( 'inmoney','inmoney');
		$this->registerTask( 'inmoney_acc','inmoney_acc');
		$this->registerTask( 'export','export');
	}
	function display(){
		echo "display";
	}

	function plist()
	{
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$base_url = "list.php?";
		$per_page = 10;
		$mobile=Request::getVar('mobile','get');
		$car_num=Request::getVar('car_num','get');
		$buy_Date=Request::getVar('buy_Date','get');
		$where="1 ";
		if(!empty($mobile)){
			$where.=" AND card_no like '%{$mobile}'";
			$base_url.="&mobile={$mobile}";
		}
		if(!empty($car_num)){
			$where.=" AND b.car_num like '%".$car_num."%'";
			$base_url.="&car_num={$car_num}";
		}
	 	if(!empty($buy_Date)){
	 		$where.=" AND buy_date='{$buy_Date}'";
	 		$base_url.="&buy_Date={$buy_Date}";
	 	}
	 	
		$model = $this->createModel("machine",dirname( __FILE__ ));
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;		
		
		$sql="SELECT a.*,b.car_num,b.gps_start FROM car_gps_sim a Left Join (Select car_num,gps_cardno,gps_start From car_gps Inner Join car on car_gps.car_id=car.car_id) b on a.card_no=b.gps_cardno WHERE {$where} ORDER BY buy_date DESC";
		$List = $model->getListBySql($start,$per_page, $sql);
		$sql="SELECT COUNT(*) AS total FROM car_gps_sim a Left Join (Select car_num,gps_cardno,gps_start From car_gps Inner Join car on car_gps.car_id=car.car_id) b on a.card_no=b.gps_cardno WHERE {$where}";
		//print_r($sql);exit;
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
		$view  = $this->createView("operator/sim/list.html");
		
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();		
		$object->list = $List;
		$object->total = $total_item;
		$object->mobile=$mobile;
		$object->buy_Date=$buy_Date;
		
		$view->assign($object);
		$view->display();
	}
	function create()
	{
		$object = new stdClass();
		$object->task = "insert";
                        
        $view  = $this->createView("operator/sim/create.html");
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
				
		$object = new stdClass();
	  	$object->card_no=Request::getVar('card_no','post');
	  	$object->buy_money=Request::getVar('buy_money','post');
	  	$object->buy_date = Request::getVar('buy_date','post');
	  	$object->remark=Request::getVar('remark','post');
	  	
		if ($model->store($object,"car_gps_sim"))
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
		$sql = "SELECT a.* FROM `car_gps_sim` AS a WHERE a.`sim_id`='{$uid}'";
		$Info = $model->getInfoBySql($sql);
		
		$object = new stdClass();
		$object->list = $Info;
		$object->task = "update";
        
        $view  = $this->createView("operator/sim/create.html");
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
		
		$object = new stdClass();
		$object->sim_id = $uid;
	  	$object->card_no=Request::getVar('card_no','post');
	  	$object->buy_money=Request::getVar('buy_money','post');
	  	$object->buy_date = Request::getVar('buy_date','post');
	  	$object->remark=Request::getVar('remark','post');

		if ($model->update($object,'sim_id','car_gps_sim'))
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
		
		if ($model->delete2($uid,"car_gps_sim","sim_id")){
			Components::save_admin_log("删除了ID为".$uid."的手机卡记录");
			$this->redirect($forward,"删除成功");
		}
	}
	function inmoney(){
		$uid = Request::getVar('uid','get');
		$rid = Request::getVar('rid','get');
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$sql = "SELECT a.* FROM `car_gps_sim` AS a WHERE a.`sim_id`='{$uid}'";
		$Info = $model->getInfoBySql($sql);
		$Info['remark']='';
		if (!empty($rid)){
		$sql="Select * from car_gps_sim_inmoney Where id={$rid}";
		$Recinfo=$model->getInfoBySql($sql);
		}else{
			$Recinfo=null;
		}
		
		$object = new stdClass();
		$object->list = $Info;
		$object->info = $Recinfo;
		$object->task = "inmoney_acc";
                        
        $view  = $this->createView("operator/sim/create.html");
		$view->assign($object);
		$view->display();
	}
	function inmoney_acc(){
		$uid = Request::getVar('uid','post');
		$rid = Request::getVar('rid','post');
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$object = new stdClass();
		$object->sim_id = $uid;
		$object->recharge_date = Request::getVar('buy_date','post');
		
		$object2 = new stdClass();
		$object2->sim_id = $uid;
	  	$object2->buy_money=Request::getVar('buy_money','post');
	  	$object2->buy_date = Request::getVar('buy_date','post');
	  	$object2->remark=Request::getVar('remark','post');
	  	if (!empty($rid)){
	  		$object2->id = $rid;
	  		$model->update($object2,"id","car_gps_sim_inmoney");
	  	}else{
	  		$model->store($object2,"car_gps_sim_inmoney");
	  	}
		if ($model->update($object,'sim_id','car_gps_sim')){
			$re=true;
		}else{
			$re=false;
		}
		$object = new stdClass();
		$object->result = $re ? "充值处理成功！":"充值处理失败，返回重试！";
		$view  = $this->createView("operator/business/result.html");
		$view->assign($object);
		$view->display();
	}
	function export()
	{
        $mobile=Request::getVar('mobile','get');
		$buy_Date=Request::getVar('buy_Date','get');
		
        $where="1 ";
		if(!empty($mobile)){
			$where.=" AND card_no like '%{$mobile}'";
		}
	 	if(!empty($buy_Date)){
	 		$where.=" AND buy_date='{$buy_Date}'";
	 	}
	 	
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$sql="SELECT a.*,b.car_num,b.gps_start FROM car_gps_sim a Left Join (Select car_num,gps_cardno,gps_start From car_gps Inner Join car on car_gps.car_id=car.car_id) b on a.card_no=b.gps_cardno WHERE {$where} ORDER BY buy_date DESC";
		$List = $model->getListBySql(0,10000, $sql);
       

		$List = $model->getListBySql(0,1000, $sql);
		
		header ( "Content-type:application/vnd.ms-excel" );
		header ( "Content-Disposition:filename=GPS手机卡号.xls" );
		echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
		<html xmlns='http://www.w3.org/1999/xhtml'>
		<head>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		<title></title>
		</head>
		<body>
		<table width='100%' border='1'>
		  <tr>
		    <td colspan='15'>GPS手机卡号</td>
		  </tr>
		  <tr>
		    <td>卡号</td>
		    <td>购买日期</td>
		    <td>金额</td>
		    <td>启用日期</td>
		    <td>最近一次充值</td>
			<td>使用车辆</td>
		</tr>";
		        
        if(is_array($List)){
            foreach($List as $item)
            {
            	echo "<tr>
            	<td>".$item["card_no"]."</td>
			  	<td>".$item["buy_date"]."</td>
				<td>".$item["buy_money"]."元</td>
				<td>".$item["gps_start"]."</td>
				<td>".$item["recharge_date"]."</td>
				<td>".$item["car_num"]."</td>
				</tr>";
            }
        }
        echo "
		</table>
		</body>
		</html>";
    }
}
?>