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
import('imag.utilities.pagestyle_a');

class aotu_jiageController extends AdminController
{

	private $package="site/operator/aotu_jiage";
	function __construct($config = array())
	{
		parent::__construct($config);
		$this->registerTask( 'index','index');
	}
	
	function index(){
		print_r("expression");exit;
		$CommonFunction=new CommonFunction();
		$sql="SELECT * FROM `car_images` WHERE `car_id`={$car_id}";
		$imagelist=$CommonFunction->getList($sql);
		$total=count($imagelist);
		$object = new stdClass();
		$object->nowserial = $nowserial;
        $view  = $this->createView("operator/car/picture.html");
		$view->assign($object);
		$view->display();
	}


}
