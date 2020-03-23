<?php
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('operator.navi.admincontroller');
import('operator.navi.privilegehelper');
import('imag.fusecookie');

error_reporting(E_ERROR);

class InsurController extends AdminController
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
		$this->registerTask( 'detail','detail');
		$this->registerTask( 'baoxian_export','baoxian_export');
		
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
		$view  = $this->createView("operator/insur/first.html");
		
		$object = new stdClass();
		//print_r($frist);exit;
		$object->first = $first;
		$view->assign($object);
		$view->display();
	}
	function plist()
	{

		$p = Request::getVar('p','get');

		if(empty($p)){$p=1;}
		
		$per_page = 10;
		$transdate=date("Y-m-d",strtotime("+1 month",strtotime(date('Y-m-d'))));
		//$where="`car_recycle`!=1 AND a.`car_id` IN (SELECT `car_id` FROM `car_insurance`)";
		$where="`car_recycle`!=1";
		$car_num=Request::getVar('car_num','get');
		$car_cartDate=Request::getVar('car_cartDate','get');
		$car_status=Request::getVar('car_status','get');
		$search_status=Request::getVar('search_status','get');
		if (empty($search_status)) $search_status = "a";
		
		$base_url = "list.php?&search_status=$search_status";
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
	 	if ($search_status!="a"){
	 		if ($search_status=="y"){
	        	$where .=" AND IFNULL(c.nCount2,0)<>2 ";
	        }
	 		if ($search_status=="j"){
	        	$where .=" AND IFNULL(b.nCount1,0)>0 ";
	        }
	 	}
		$model = $this->createModel("machine",dirname( __FILE__ ));
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;		
		
		$sql="SELECT a.car_id,car_num,car_brand,car_cartDate,car_insuranceDate,b.nCount1,c.nCount2 ".
			 "FROM `car` as a ".
			 "Left Join (SELECT car_id,count(*) as nCount1 FROM `car_insurance` WHERE insurance_end>=".time()." and insurance_end<=".strtotime($transdate)." Group by car_id) as b on a.car_id=b.car_id ".
			 "Left Join (SELECT car_id,count(*) as nCount2 FROM `car_insurance` WHERE insurance_end>=".time()." Group by car_id) as c on a.car_id=c.car_id ".
			 "WHERE {$where} ORDER BY a.`car_id` DESC";

		$List = $model->getListBySql($start,$per_page, $sql);
		
		$sql="SELECT COUNT(*) AS total FROM `car` as a Left Join (SELECT car_id,count(*) as nCount1 FROM `car_insurance` WHERE insurance_end>=".time()." and insurance_end<=".strtotime($transdate)." Group by car_id) as b on a.car_id=b.car_id 
			  Left Join (SELECT car_id,count(*) as nCount2 FROM `car_insurance` WHERE insurance_end>=".time()." Group by car_id) as c on a.car_id=c.car_id WHERE {$where} ";
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
		$view  = $this->createView("operator/insur/list.html");
		
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();		
		$object->list = $List;
		$object->total = $total_item;
		$object->car_status=$car_status;
		$object->search_status=$search_status;
		$view->assign($object);
		$view->display();
	}
	function create()
	{
		$Info['insurance_type']="商业险";
		$object = new stdClass();
		$object->task = "insert";
		$object->list = $Info;
                        
        $view  = $this->createView("operator/insur/create.html");
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
		
		$endDate=Request::getVar('insurance_end','post');
		$insurance_loss=Request::getVar('insurance_loss','post');
		$insurance_respons=Request::getVar('insurance_respons','post');
		$insurance_money=Request::getVar('insurance_money','post');
		$insurance_discount=Request::getVar('insurance_discount','post');
		$insurance_return=Request::getVar('insurance_return','post');
		$insurance_mandatory=Request::getVar('insurance_mandatory','post');
		$insurance_float=Request::getVar('insurance_float','post');
		$insurance_cartax=Request::getVar('insurance_cartax','post');
		$insurance_money2=Request::getVar('insurance_money2','post');
		
		$object = new stdClass();
	  	$object->car_id=$carid;
	  	$object->insurance_type =Request::getVar('insurance_type','post');
	  	$object->insurance_start=strtotime(Request::getVar('insurance_start','post'));
	  	$object->insurance_end=strtotime($endDate);	  	
	  	$object->insurance_loss=empty($insurance_loss) ? 0 : $insurance_loss;
	  	$object->insurance_respons=empty($insurance_respons) ? 0 : $insurance_respons;
	  	$object->insurance_money=empty($insurance_money) ? 0 : $insurance_money;
	  	$object->insurance_discount=empty($insurance_discount) ? 0 : $insurance_discount;
	  	$object->insurance_return=empty($insurance_return) ? 0 : $insurance_return;
	  	if (Request::getVar('insurance_type','post')=="商业险"){
	  		$object->insurance_item=implode(",",Request::getVar('insurance_item','post'));
	  	}else{
	  		$object->insurance_item="";
	  	}  	
	  	$object->insurance_mandatory=empty($insurance_mandatory) ? 0 : $insurance_mandatory;
	  	$object->insurance_float=empty($insurance_float) ? 0 : $insurance_float;
	  	$object->insurance_cartax=empty($insurance_cartax) ? 0 : $insurance_cartax;
	  	$object->insurance_money2=empty($insurance_money2) ? 0 : $insurance_money2;
	  	$object->insurance_company =Request::getVar('insurance_company','post');
	  	$object->insurance_remark=Request::getVar('insurance_remark','post');
	  	
	  	$object1 = new stdClass();
	  	$object1->car_id=$carid;
	  	$object1->car_insuranceDate=strtotime($endDate);
        
		if ($model->store($object,"car_insurance") && $model->update($object1,'car_id'))
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
		$sql = "SELECT a.*,b.car_num FROM `car_insurance` AS a LEFT JOIN `car` AS b ON a.car_id=b.car_id WHERE a.`insurance_id`='{$uid}'";
		$Info = $model->getInfoBySql($sql);
		
		$object = new stdClass();
		$object->list = $Info;
		$object->task = "update";
        
        $view  = $this->createView("operator/insur/create.html");
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
		
		$endDate=Request::getVar('insurance_end','post');
		$insurance_loss=Request::getVar('insurance_loss','post');
		$insurance_respons=Request::getVar('insurance_respons','post');
		$insurance_money=Request::getVar('insurance_money','post');
		$insurance_discount=Request::getVar('insurance_discount','post');
		$insurance_return=Request::getVar('insurance_return','post');
		$insurance_mandatory=Request::getVar('insurance_mandatory','post');
		$insurance_float=Request::getVar('insurance_float','post');
		$insurance_cartax=Request::getVar('insurance_cartax','post');
		$insurance_money2=Request::getVar('insurance_money2','post');
		$object = new stdClass();
		$object->insurance_id = $uid;
	  	$object->car_id=$carid;
	  	//$object->insurance_type =Request::getVar('insurance_type','post');
	  	$object->insurance_start=strtotime(Request::getVar('insurance_start','post'));
	  	$object->insurance_end=strtotime($endDate);
	  	$object->insurance_loss=empty($insurance_loss) ? 0 : $insurance_loss;
	  	$object->insurance_respons=empty($insurance_respons) ? 0 : $insurance_respons;
	  	$object->insurance_money=empty($insurance_money) ? 0 : $insurance_money;
	  	$object->insurance_discount=empty($insurance_discount) ? 0 : $insurance_discount;
	  	$object->insurance_return=empty($insurance_return) ? 0 : $insurance_return;
	  	$object->insurance_item=implode(",",Request::getVar('insurance_item','post'));	  	
	  	$object->insurance_mandatory=empty($insurance_mandatory) ? 0 : $insurance_mandatory;
	  	$object->insurance_float=empty($insurance_float) ? 0 : $insurance_float;
	  	$object->insurance_cartax=empty($insurance_cartax) ? 0 : $insurance_cartax;
	  	$object->insurance_money2=empty($insurance_money2) ? 0 : $insurance_money2;
	  	$object->insurance_remark=Request::getVar('insurance_remark','post');
	  	$object->insurance_company =Request::getVar('insurance_company','post');
	  	
	  	//$object1 = new stdClass();
	  	//$object1->car_id=$carid;
	  	//$object1->car_insuranceDate=strtotime($endDate);

		if ($model->update($object,'insurance_id','car_insurance'))
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
		
		if ($model->delete2($uid,"car_insurance","insurance_id")){
			Components::save_admin_log("删除了ID为".$uid."的保险记录");
			$this->redirect($forward,"删除成功");
		}
	}
	function detail(){
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$sql = "SELECT a.*,b.car_num FROM `car_insurance` AS a LEFT JOIN `car` AS b ON a.car_id=b.car_id WHERE a.`insurance_id`='{$uid}'";
		$Info = $model->getInfoBySql($sql);
		
		$object = new stdClass();
		$object->list = $Info;
		$object->task = "update";
        
        $view  = $this->createView("operator/insur/detail.html");
		$view->assign($object);
		$view->display();
	}
	function baoxian_export(){
		$transdate=date("Y-m-d",strtotime("+1 month",strtotime(date('Y-m-d'))));
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$where="`car_recycle`!=1 AND car_status != 3";
		$sql="SELECT a.car_id,car_num,car_brand,a.car_frame,car_cartDate,car_insuranceDate,b.nCount1,c.nCount2 ".
			 "FROM `car` as a ".
			 "Left Join (SELECT car_id,count(*) as nCount1 FROM `car_insurance` WHERE insurance_end>=".time()." and insurance_end<=".strtotime($transdate)." Group by car_id) as b on a.car_id=b.car_id ".
			 "Left Join (SELECT car_id,count(*) as nCount2 FROM `car_insurance` WHERE insurance_end>=".time()." Group by car_id) as c on a.car_id=c.car_id ".
			 "WHERE {$where} ORDER BY a.`car_id` DESC";
		
		$List = $model->getListBySql(0,300, $sql);
		//print_r($List);exit;


		header ( "Content-type:application/vnd.ms-excel" );
		header ( "Content-Disposition:filename=车辆清单.xls" );
		echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
		<html xmlns='http://www.w3.org/1999/xhtml'>
		<head>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		<title></title>
		</head>
		<body>
		<table width='100%' border='1'>
		  <tr>
		    <td colspan='14'>车辆清单</td>
		  </tr>
		  <tr>
		    <td>车牌号码</td>
		    <td>车辆识别号码</td>
			
			
			<td>保险购买记录</td>
			
			
		  </tr>";
		if(is_array($List)){
			foreach($List as $item)
	        {
			echo "
			  <tr>
			    <td>苏D".$item["car_num"]."</td>
			    <td>".$item["car_frame"]."</td>
			    
				";
				if (count($item['car_insuranceList'])>0){
					for($i=0;$i<count($item['car_insuranceList']);$i++){
						echo "
						 <tr>
						    <td>".$item["car_insuranceList"][$i]['insurance_type']."</td>
						    <td>".$item["car_insuranceList"][$i]['insurance_company']."</td>
						    <td>".$item["car_insuranceList"][$i]['insurance_start']."</td>
							<td>".$item["car_insuranceList"][$i]['insurance_end']."</td>";
							if($item["car_insuranceList"][$i]['insurance_type']=="交强险"){
								echo "<td>".$item["car_insuranceList"][$i]['insurance_money2']."</td>";
							}else{
								echo "<td>".$item["car_insuranceList"][$i]['insurance_money']."</td>";
							}

							
						echo "</tr></td></tr>";

					}
				}
				



				
	        }
		}
		
		echo "
		</table>
		</body>
		</html>";
		

		
	}
}