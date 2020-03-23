<?php
import('publicFunction.CommonFunction');
import('operator.navi.admincontroller');
class UpdateController extends AdminController
{
	function __construct($config = array())
	{
		parent::__construct($config);
		$this->registerTask( 'index','index');
		$this->registerTask( 'update','update');
		$this->registerTask( 'update_a','update_a');
		$this->registerTask( 'update_b','update_b');
		$this->registerTask( 'delete','delete');
		$this->registerTask( 'update_shouruIndex','update_shouruIndex');
		$this->registerTask( 'update_shouru','update_shouru');
		$this->registerTask( 'update_shouru_a','update_shouru_a');
		$this->registerTask( 'delete_shouru','delete_shouru');
		$this->registerTask( 'update_baoxiaoIndex','update_baoxiaoIndex');
		$this->registerTask( 'update_baoxiao','update_baoxiao');
		$this->registerTask( 'update_baoxiao_a','update_baoxiao_a');
		$this->registerTask( 'delete_baoxiao','delete_baoxiao');
	}
	function index(){
		
		$view  = $this->createView("operator/update/index.html");
		$view->display();
	}
	function update(){
		//print_r("expression");exit;
		$num = Request::getVar('num','get');
		$_SESSION['num']=$num;
		
		$uid = Request::getVar('uid','get');
		$CommonFunction=new CommonFunction();
		$paidhe=$CommonFunction->getpaiche_a($num);
		if(empty($paidhe)){
			$this->redirect('index.php',"合同不存在！");break;
		}
		if(empty($uid)){
			$uid=$CommonFunction->getPaicheId($num);
		}
		
		//$paiche = $CommonFunction->sumPaiche($uid);


		$busiInfo=$CommonFunction->sumPaiche($uid);
		
		$busi_id =$busiInfo['paiche_type'];


		//收费项目1
		$charge_list=$CommonFunction->getChargeList($uid);
		//租赁金额1
		$item_list=$CommonFunction->getPaiche_items($uid);
		
		

		//收款记录
		$sql="Select a.*,b.bank_name,c.payment_name From `account_log` as a ".
			 "Left Join `banks` as b On a.bank_id=b.bank_id ".
			 "Left Join `payments` as c ON a.payments_id=c.payment_id ".
			 "Where a.bill_type<>4 and a.bill_type<>1";


		if (!empty($busiInfo['settle_lossescode'])){
			$sql.=" and (a.bill_code='".$busiInfo['settle_lossescode']."' OR a.paiche_id={$uid})";
		}else if (!empty($busiInfo['shunt_endcode'])){
			$sql.=" and (a.bill_code='".$busiInfo['shunt_endcode']."' OR a.paiche_id={$uid})";
		}else{
			$sql.=" and a.paiche_id={$uid}";
		}
		$sql.=" Order by a.add_time";

		$account_list = $CommonFunction->getListBySql($sql);

		

		//续租记录1
		$continue_list=$CommonFunction->getContinuerent($uid);


		//换车记录1
		$change_list=$CommonFunction->getChangecar($uid);

		//改变行程记录1
		$route_list = $CommonFunction->getChangeroute($uid);

		//出车记录

		$outcar_list=$CommonFunction->getPaiche_drive($uid);

		//违章记录1
		$break_list=$CommonFunction->getBreakrules($uid);


		//结账记录 or 结算记录
		$settlement_list=array();
		$month_list=array();
		if (!empty($busiInfo['shunt_endcode'])){
			$tmpwhere=" AND (monthPaicheId='{$uid}' OR month_code='".$busiInfo['shunt_endcode']."')";
			$settlement_list=$CommonFunction->getEmpList("*",$tmpwhere,"paiche_month","");
		}else{
			$month_list=$CommonFunction->getEmpList("*"," AND monthPaicheId='{$uid}'","paiche_month","");
		}
		
		
		//print_r($month_list);exit;
		//报销记录
		$fields="a.*, c.emp_name";
		$leftjoin=" `baoxiao` AS a LEFT JOIN `emp` AS c ON a.baoxiao_emp=c.emp_id";

		//报销记录
		$baoxiao_list=$CommonFunction->getBaoxiao($uid);


		$object = new stdClass();
		$object->list = $busiInfo;
		$object->busitype = $busi_id;
		$object->chargelist = $charge_list;
        $object->itemlist = $item_list;
        $object->accountlist = $account_list;
        $object->continuelist = $continue_list;
        $object->changelist = $change_list;
        $object->routelist = $route_list;

        $object->settlement_list = $settlement_list;
        $object->month_list = $month_list;
        $object->outcarlist = $outcar_list;
        $object->breaklist = $break_list;
        
        $object->baoxiao_list = $baoxiao_list;
        $object->PAGETITLE=$CommonFunction->getItem($busi_id);
        
		//print_r($object);exit;
		$view  = $this->createView("operator/update/update.html");
		$view->assign($object);
		$view->display();



		
		
	}
	function update_a(){
		//表名
		$table = Request::getVar('table','get');
		//字段
		$name = Request::getVar('name','get');
		//类型
		$type = Request::getVar('type','get');
		//ID
		$uid = Request::getVar('uid','get');
		//别名
		$heading = Request::getVar('heading','get');
		$val = Request::getVar('val','get');

		$CommonFunction=new CommonFunction();
		$emplist=$CommonFunction->getEmp();
		$brotherslist=$CommonFunction->getbrotherslist();
		$itemslist=$CommonFunction->getitemslist();
		$chargeslist=$CommonFunction->getchargeslist();
		$paymentslist=$CommonFunction->getpaymentslist();
		$bankslist=$CommonFunction->getbankslist();
		$carlist=$CommonFunction->getcarlist();
	
		


		$object = new stdClass();
		$object->emplist=$emplist;
		$object->carlist=$carlist;
		$object->brotherslist=$brotherslist;
		$object->bankslist=$bankslist;
		$object->paymentslist=$paymentslist;
		$object->table=$table;
		$object->chargeslist=$chargeslist;
		$object->name=$name;
		$object->itemslist=$itemslist;
		$object->type=$type;
		$object->uid=$uid;
		$object->val=$val;
		$object->heading=$heading;
		$view  = $this->createView("operator/update/update_a.html");
		$view->assign($object);
		$view->display();
	}

	function update_b(){
		//类型
		$type = Request::getVar('type','post');
		//表名
		$table = Request::getVar('table','post');
		//字段
		$name = Request::getVar('name','post');
		//ID
		$uid = Request::getVar('uid','post');
		//值
		$val = Request::getVar('val','post');


		if($type=="time"){
			$val=strtotime($val);
		}
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "update.php?num=".$_SESSION['num'];
		}
		$CommonFunction=new CommonFunction();

		$req=$CommonFunction->update($table,$name,$uid,$val);
		
		if($req){
			$this->redirect($forward,"修改成功");
		}else{
			$this->redirect($forward,"修改失败");
		}
		

		//print_r($table."  ".$name."  ".$uid."   ".$val);
	}
	function delete(){
		//print_r("expression");exit;
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "update.php?num=".$_SESSION['num'];
		}
		//表名
		$table = Request::getVar('table','get');
		$uid = Request::getVar('uid','get');
		$CommonFunction=new CommonFunction();
		$req=$CommonFunction->delete($table,$uid);
		if($req){
			$this->redirect($forward,"删除成功");
		}else{
			$this->redirect($forward,"删除失败");
		}
	}
	//收入

	function update_shouruIndex(){
		$view  = $this->createView("operator/update/update_shouruIndex.html");
		$view->display();
	}
	function update_shouru(){
		$num = Request::getVar('num','get');
		$CommonFunction=new CommonFunction();
		$data=$CommonFunction->getShouru($num);
		if(empty($data)){
			$this->redirect("update_shouruIndex.php","单号不存在！");
		}
		$shop=$CommonFunction->getshoplist();
		$paymentslist=$CommonFunction->getpaymentslist();
		$banklist=$CommonFunction->getbankslist();
		$clientlist=$CommonFunction->getclientlist();
		$object = new stdClass();
		$object->paymentslist=$paymentslist;
		$object->clientlist=$clientlist;
		$object->data=$data;
		$object->banklist=$banklist;

		$object->shop=$shop;
		$view  = $this->createView("operator/update/update_shouru.html");
		$view->assign($object);
		$view->display();
	
	}
	function update_shouru_a(){
		$name = Request::getVar('name','post');
		$money = Request::getVar('money','post');
		$change_class = Request::getVar('change_class','post');
		$shop_id = Request::getVar('shop_id','post');
		$payments_to_id = Request::getVar('payments_to_id','post');
		$bank_to_id = Request::getVar('bank_to_id','post');
		$client_id = Request::getVar('client_id','post');
		$aid = Request::getVar('aid','post');
		$bid = Request::getVar('bid','post');
		$change_code = Request::getVar('change_code','post');
		$CommonFunction=new CommonFunction();

		$object = new stdClass();
		$object->name=$name;
		$object->change_class=$change_class;
		$object->shop_id=$shop_id;
		$object->payments_to_id=$payments_to_id;
		$object->bank_to_id=$bank_to_id;
		$object->money=$money;
		$object->id=$aid;
		
		$req=$CommonFunction->update_a($object,'id','account_change_log','');
		
		$object2 = new stdClass();
    	$object2->client_id = $client_id;
	    $object2->payments_id = $payments_to_id;
	    $object2->bank_id = $bank_to_id;
	    $object2->money = $money;
	    $object2->name = $name;
	    $object2->account_type=$change_class;
	    $object2->shop_id=$shop_id;
	    $object2->id=$bid;
	    $req1=$CommonFunction->update_a($object2,'id','account_log','');
	    
	    if(!empty($req)&&!empty($req1)){
	    	$this->redirect("update_shouru.php?num={$change_code}","修改成功");
	    }else{
	    	$this->redirect("update_shouru.php?num={$change_code}","修改失败");
	    }
		
	}
	//删除其他收入
	function delete_shouru(){
		$aid = Request::getVar('aid','get');
		$bid = Request::getVar('bid','get');
		$CommonFunction=new CommonFunction();
		$req=$CommonFunction->delete_shouru($aid,$bid);
		
		if(!empty($req)){
			$this->redirect("update_shouruIndex.php","删除成功！");
		}else{
			$this->redirect("update_shouruIndex.php","删除失败！");
		}
	}
	//其他报销
	function update_baoxiaoIndex(){
		$view  = $this->createView("operator/update/update_baoxiaoIndex.html");
		$view->display();
	}



	function update_baoxiao(){
		$num = Request::getVar('num','get');
		$CommonFunction=new CommonFunction();
		$data=$CommonFunction->getBaoxiao_a($num);

		if(empty($data)){
			$this->redirect("update_baoxiaoIndex.php","单号不存在！");
		}
		$emplist=$CommonFunction->getemplist_a();
		$typeliat=$CommonFunction->getbaoxiaotypelist();
		$shoplist=$CommonFunction->getshoplist();

		$object = new stdClass();
		$object->typeliat=$typeliat;
		$object->shoplist=$shoplist;
		$object->data=$data;
		$object->emplist=$emplist;
		$view  = $this->createView("operator/update/update_baoxiao.html");
		$view->assign($object);
		$view->display();
	}
	function update_baoxiao_a(){
		$CommonFunction=new CommonFunction();
		$object = new stdClass();
		$object->baoxiao_emp = Request::getVar('baoxiao_emp','post');
		$object->baoxiao_content = Request::getVar('baoxiao_content','post');
		$object->baoxiao_auditor = Request::getVar('baoxiao_auditor','post');
		$object->baoxiao_money = Request::getVar('baoxiao_money','post');
		$object->baoxiao_type = Request::getVar('baoxiao_type','post');
		$object->shop_id = Request::getVar('shop_id','post');
		$object->baoxiao_remarks = Request::getVar('baoxiao_remarks','post');
		$object->baoxiao_id = Request::getVar('baoxiao_id','post');


		$baoxiao_code = Request::getVar('baoxiao_code','post');
		$req=$CommonFunction->update_a($object,'baoxiao_id','baoxiao','');
	    
	    if(!empty($req)){
	    	$this->redirect("update_baoxiao.php?num={$baoxiao_code}","修改成功");
	    }else{
	    	$this->redirect("update_baoxiao.php?num={$baoxiao_code}","修改失败");
	    }
		
		
	}
	//删除其他报销
	function delete_baoxiao(){
		$CommonFunction=new CommonFunction();
		$baoxiao_id = Request::getVar('baoxiao_id','get');
		
		$req=$CommonFunction->dalete_baoxiao($baoxiao_id);
		
		if(!empty($req)){
			$this->redirect("update_baoxiaoIndex.php","删除成功！");
		}else{
			$this->redirect("update_baoxiaoIndex.php","删除失败！");
		}
	}
}


