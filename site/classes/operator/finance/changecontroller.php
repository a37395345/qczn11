<?php
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('operator.navi.admincontroller');
import('operator.navi.privilegehelper');
import('imag.fusecookie');

error_reporting(E_ERROR);

class ChangeController extends AdminController
{
	function __construct($config = array())
	{
		parent::__construct($config);
		
		$this->registerTask( 'detail','detail');
	}
	
	
	function display(){
		echo "display";
	}
	
	function detail(){
		
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$sql="Select a.*,b.bank_name as bank_name_from,c.payment_name as payment_name_from,d.bank_name as bank_name_to,e.payment_name as payment_name_to ".
			 "From `account_change_log` as a ".
			 "Left Join `banks` as b On a.bank_from_id=b.bank_id ".
			 "Left Join `payments` as c ON a.payments_from_id=c.payment_id ".
			 "Left Join `banks` as d On a.bank_to_id=d.bank_id ".
			 "Left Join `payments` as e ON a.payments_to_id=e.payment_id ".
			 "Where a.id={$uid}";
		$Info = $model->getInfo(0,$sql);
		$item=$Info['change_type'];
        
		$object = new stdClass();
		$object->list = $Info;
		$object->item = $item;
        
        $view  = $this->createView("operator/finance/change/detail.html");
		$view->assign($object);
		$view->display();
	}
	
}
?>