<?php

import('operator.navi.admincontroller');
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('operator.navi.privilegehelper');
import('imag.fusecookie');
import('imag.filesystem.fusefile');
import('imag.filesystem.filesystem');
import('imag.image.uploader');
import('imag.utilities.tool');

error_reporting(E_ERROR);

class WapController extends AdminController
{
	function __construct($config = array())
	{
		parent::__construct($config);
		
		$this->registerTask( 'carlist','carlist');
		
	}
	
	function display(){
		echo "display";
	}
	
	function carlist(){
		$p = Request::getVar('page','get');
		if(empty($p)){$p=1;}
		$per_page = 6;
		$start = ($p-1)*$per_page;
		$car_type=Request::getVar('cartype','get');
		$car_price=Request::getVar('carprice','get');
		
		$where="a.car_recycle!=1";
		if(!empty($car_type)){$where.=" AND car_type like '%".$car_type."%'";}
		if (!empty($car_price)){
			
		}
		
		$model = $this->createModel("machine",dirname( __FILE__ ));
		
		$sql="SELECT a.car_id,a.car_num,a.car_price FROM `car` AS a ".
			 "WHERE {$where} ORDER BY a.car_id DESC";
		
		
		$tmplist= $model->getListBySql($start,$per_page, $sql,0,0,0);
		
		$sql="SELECT COUNT(*) AS total FROM `car` AS a WHERE {$where}";
		$total_item = $model->getTotal($sql);
		
		$view  = $this->createView("operator/machine/waplist.html");
		$object = new stdClass();
		$object->list = $tmplist;
		$object->status = $status;
		$object->total = count($List);
		$object->nowpage=$p;
		$object->totalpage=ceil($total_item/$per_page);
		$object->cartype = $car_type;
		$object->carprice = $car_price;
		
		$view->assign($object);
		$view->display();
		
	}
}