<?php
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('operator.navi.admincontroller');
import('operator.navi.privilegehelper');
import('imag.fusecookie');

error_reporting(E_ERROR);



class FinanceController extends AdminController
{
	function __construct($config = array())
	{
		parent::__construct($config);
		$this->registerTask( 'baoxiaolist','baoxiaolist');
		$this->registerTask( 'baoxiaolist1','baoxiaolist1');
		$this->registerTask( 'baoxiaolist2','baoxiaolist2');
		$this->registerTask( 'baoxiaolist3','baoxiaolist3');
		$this->registerTask( 'baoxiaolist4','baoxiaolist4');
		$this->registerTask( 'create','create');
		$this->registerTask( 'insert','insert');
		$this->registerTask( 'modify','modify');
		$this->registerTask( 'detail','detail');
		$this->registerTask( 'update','update');
		$this->registerTask( 'delete','delete');
		$this->registerTask( 'picture','picture');
		$this->registerTask( 'upload','bao_upload');
		$this->registerTask( 'check','check');
		$this->registerTask( 'check_accept','check_accept');
		$this->registerTask( 'bao','bao');
		$this->registerTask( 'bao_accept','bao_accept');
		$this->registerTask( 'break_bao_accept','break_bao_accept');
		$this->registerTask( 'leadcheck','leadcheck');
		$this->registerTask( 'lead_accept','lead_accept');
		$this->registerTask( 'lead_accept2','lead_accept2');
		$this->registerTask( 'cancel_track','cancel_track');
		$this->registerTask( 'change','change');
		$this->registerTask( 'change_accept','change_accept');
		$this->registerTask( 'other','other');
		$this->registerTask( 'other_accept','other_accept');
		$this->registerTask( 'rechargelist','rechargelist');
		$this->registerTask( 'rechargecreate','rechargecreate');
		$this->registerTask( 'rechargeinsert','rechargeinsert');
		
		
		$this->registerTask( 'monthfirstlist','monthfirstlist');
		$this->registerTask( 'monthlist','monthlist');
		$this->registerTask( 'month','month');
		$this->registerTask( 'month_accept','month_accept');
		$this->registerTask( 'batchfirstlist','batchfirstlist');
		$this->registerTask( 'batchlist','batchlist');
		$this->registerTask( 'shuntfirstlist','shuntfirstlist');
		$this->registerTask( 'shuntlist','shuntlist');
		
		$this->registerTask( 'salarylist','salarylist');
		$this->registerTask( 'salarycreate','salarycreate');
		$this->registerTask( 'salarymodify','salarymodify');
		$this->registerTask( 'salaryupdate','salaryupdate');
		$this->registerTask( 'exportsalary','exportsalary');
		$this->registerTask( 'salaryissue','salaryissue');
		
		$this->registerTask( 'posbusilist','posbusilist');
		$this->registerTask( 'posbusi','posbusi');
		$this->registerTask( 'posbusi_accept','posbusi_accept');
				
		$this->registerTask( 'export','export');
		$this->registerTask( 'baoxiaocheck','baoxiaocheck');
		$this->registerTask( 'getpaicheid','getpaicheid');
	}
	
	
	function display(){
		echo "display";
	}
	

	
	function create()
	{	

		$item=Request::getVar('item','get');

		$pid=Request::getVar('paiche_id','get');
		if (empty($item)) $item=1;
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$Info=array();
		if (!empty($pid)){
			$sql="Select paiche_id as baoxiaoPaicheId,paiche_contractNum as baoxiaoPaicheContractNum,paicheDriver as baoxiao_emp,d.emp_name From paiche as a LEFT JOIN emp AS d ON a.paicheDriver=d.emp_id  Where paiche_id={$pid}";
			$Info = $model->getInfo(0,$sql);
		}

		$Info['baoxiao_id']=rand(90000, 99999);
		$Info['baoxiao_date']=date("Y-m-d");
		$Info['paiche_startDate']=date("Y-m-d");
        $Info['baoxiao_type']="办公用品";
        $Info['baoxiao_setCheckMan']=$item==1? 26:24;
        
        
		$object = new stdClass();
		$object->task = "insert";
		$object->item = $item;
		$object->list = $Info;
		$object->shop = $model->getList('Select * from shop order by shop_order');
		$object->class =0;
		$object->baoxiaotypelist = $model->getList('Select * from baoxiao_type ');
        
        $view  = $this->createView("operator/finance/baoxiao/create.html");
		$view->assign($object);
		$view->display();
	}
	
	function insert()
	{
		$item=Request::getVar('item','post');
		if (empty($item)) $item=1;
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "list.php?item={$item}";
		}
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$empname=$model->getEmpName($_SESSION['a_uid']);
		
		$tmpid = Request::getVar('uid','post');
		$baoxiaoPaicheId=Request::getVar('baoxiaoPaicheContractId','post');
		$baoxiaoPaicheContractNum=Request::getVar('baoxiaoPaicheContractNum','post');
		$baoxiao_roadQiao=Request::getVar('baoxiao_roadQiao','post');
		$baoxiao_stopCar=Request::getVar('baoxiao_stop','post');
		$baoxiao_oil=Request::getVar('baoxiao_oil','post');
		$baoxiao_oil_number=Request::getVar('baoxiao_oil_number','post');
		$baoxiao_oil_date=Request::getVar('baoxiao_oil_date','post');
		$baoxiao_room=Request::getVar('baoxiao_room','post');
		$baoxiao_meal=Request::getVar('baoxiao_meal','post');
		$baoxiao_content=Request::getVar('baoxiao_content','post');
		$baoxiao_money=Request::getVar('baoxiao_money','post');
		$shop_id = Request::getVar('shop_id','post');
		$baoxiao_setCheckMan = Request::getVar('baoxiao_setCheckMan','post');
		
		$object = new stdClass();
		$object->baoxiao_code = date('YmdHis',time());
		$object->baoxiao_item = $item;
		$object->baoxiao_date = strtotime(Request::getVar('baoxiao_date','post'));
		$object->baoxiaoPaicheId=empty($baoxiaoPaicheId)?0:$baoxiaoPaicheId;
		$object->baoxiaoPaicheContractNum = empty($baoxiaoPaicheContractNum)?"":$baoxiaoPaicheContractNum;
		$object->baoxiao_roadQiao = empty($baoxiao_roadQiao)?0:$baoxiao_roadQiao;
		$object->baoxiao_stopCar = empty($baoxiao_stopCar)?0:$baoxiao_stopCar;
		$object->baoxiao_oil = empty($baoxiao_oil)?0:$baoxiao_oil;
		$object->baoxiao_oil_number = empty($baoxiao_oil_number)?0:$baoxiao_oil_number;
		$object->baoxiao_oil_date = empty($baoxiao_oil_date)?0:strtotime($baoxiao_oil_date);
		$object->baoxiao_room = empty($baoxiao_room)?0:$baoxiao_room;
		$object->baoxiao_meal = empty($baoxiao_meal)?0:$baoxiao_meal;
		$object->baoxiao_content = empty($baoxiao_content)?"":$baoxiao_content;
		$object->baoxiao_emp = Request::getVar('paicheDriver2','post');
		$object->baoxiao_auditor = Request::getVar('driveDriver2_9','post');
		$object->baoxiao_money = empty($baoxiao_money)?0:$baoxiao_money;
		if ($item==2){
		$object->baoxiao_type=Request::getVar('baoxiao_type','post');
		$object->shop_id=$shop_id;
		}
		if (!empty($baoxiao_setCheckMan)){
		$object->baoxiao_setCheckMan=$baoxiao_setCheckMan;
		}
		$object->baoxiao_remarks = Request::getVar('baoxiao_remarks','post');
		$object->baoxiao_man = $empname;
		$object->baoxiao_times = time();
		
		$recid=$model->store($object,"baoxiao");
		if ($recid){
			$sql="Update baoxiao_images set baoxiao_id={$recid} Where baoxiao_id={$tmpid}";
			$model->update("","","",$sql);
			//Components::save_admin_log("添加了费用报销单,".(empty($baoxiaoPaicheContractNum)?$baoxiao_content:$baoxiaoPaicheContractNum));
			$this->redirect($forward,"添加成功");
		}else{
			$this->redirect($forward,"添加失败");
		}
	}
	
	function modify()
	{
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$Info = $model->getInfo($uid);
		$item=$Info["baoxiao_item"];
        
		$object = new stdClass();
		$object->list = $Info;
		$object->task = "update";
		$object->item = $item;
		$object->shop = $model->getList('Select * from shop order by shop_order');
		$object->baoxiaotypelist = $model->getList('Select * from baoxiao_type ');
        
        $view  = $this->createView("operator/finance/baoxiao/create.html");
		$view->assign($object);
		$view->display();
	}
	
	function detail(){

		$uid = Request::getVar('uid','get');
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$Info = $model->getInfo($uid);
		$item=$Info["baoxiao_item"];
		        
		$object = new stdClass();
		$object->list = $Info;
		$object->translist = $model->getListBySql(0,10, "Select * From baoxiao_trans Where baoxiao_id = {$uid}");
		$object->task = "update";
		$object->item = $item;
        
        $view  = $this->createView("operator/finance/baoxiao/detail.html");
		$view->assign($object);
		$view->display();
	}
	function picture()
	{
		$baoxiao_id = Request::getVar('baoxiao_id','get');
		$finance_id = Request::getVar('finance_id','get');
		if ($baoxiao_id){
			$sql="Select images,uploadtime From baoxiao_images WHERE baoxiao_id={$baoxiao_id}";
		}else{
			$sql="Select images,uploadtime From finance_images WHERE finance_id={$finance_id}";
		}
		$nowserial=Request::getVar('nowserial','get');
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$imagelist = $model->getList($sql);
		$total=count($imagelist);
		
		$object = new stdClass();
		$object->imagelist = $imagelist;
		$object->nowserial = $nowserial;
		$object->total= $total;
        
        $view  = $this->createView("operator/finance/baoxiao/picture.html");
		$view->assign($object);
		$view->display();
	}
	function update()
	{
		$item=Request::getVar('item','post');
		if (empty($item)) $item=1;
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "list.php?item={$item}";
		}
		$uid = Request::getVar('uid','post');
		if(empty($uid))
		{
			Response::redirect($forward,"Need id!");
		}
		$model = $this->createModel("finance",dirname( __FILE__ ));
		
		$baoxiaoPaicheId=Request::getVar('baoxiaoPaicheContractId','post');
		$baoxiaoPaicheContractNum=Request::getVar('baoxiaoPaicheContractNum','post');
		$baoxiao_roadQiao=Request::getVar('baoxiao_roadQiao','post');
		$baoxiao_stopCar=Request::getVar('baoxiao_stop','post');
		$baoxiao_oil=Request::getVar('baoxiao_oil','post');
		$baoxiao_oil_number=Request::getVar('baoxiao_oil_number','post');
		$baoxiao_oil_date=Request::getVar('baoxiao_oil_date','post');
		$baoxiao_room=Request::getVar('baoxiao_room','post');
		$baoxiao_meal=Request::getVar('baoxiao_meal','post');
		$baoxiao_content=Request::getVar('baoxiao_content','post');
		$baoxiao_money=Request::getVar('baoxiao_money','post');
		$shop_id = Request::getVar('shop_id','post');
		$baoxiao_setCheckMan = Request::getVar('baoxiao_setCheckMan','post');
		
		$object = new stdClass();
		$object->baoxiao_id = $uid;
		$object->baoxiao_date = strtotime(Request::getVar('baoxiao_date','post'));
		$object->baoxiaoPaicheId=empty($baoxiaoPaicheId)?0:$baoxiaoPaicheId;
		$object->baoxiaoPaicheContractNum = empty($baoxiaoPaicheContractNum)?"":$baoxiaoPaicheContractNum;
		$object->baoxiao_roadQiao = empty($baoxiao_roadQiao)?0:$baoxiao_roadQiao;
		$object->baoxiao_stopCar = empty($baoxiao_stopCar)?0:$baoxiao_stopCar;
		$object->baoxiao_oil = empty($baoxiao_oil)?0:$baoxiao_oil;
		$object->baoxiao_oil_number = empty($baoxiao_oil_number)?0:$baoxiao_oil_number;
		$object->baoxiao_oil_date = empty($baoxiao_oil_date)?0:strtotime($baoxiao_oil_date);
		$object->baoxiao_room = empty($baoxiao_room)?0:$baoxiao_room;
		$object->baoxiao_meal = empty($baoxiao_meal)?0:$baoxiao_meal;
		$object->baoxiao_content = empty($baoxiao_content)?"":$baoxiao_content;
		$object->baoxiao_emp = Request::getVar('paicheDriver2','post');
		$object->baoxiao_auditor = Request::getVar('driveDriver2_9','post');
		$object->baoxiao_money = empty($baoxiao_money)?0:$baoxiao_money;
		if ($item==2){
		$object->baoxiao_type=Request::getVar('baoxiao_type','post');
		$object->shop_id=$shop_id;
		}
		if (!empty($baoxiao_setCheckMan)){
		$object->baoxiao_setCheckMan=$baoxiao_setCheckMan;
		}
		$object->baoxiao_remarks = Request::getVar('baoxiao_remarks','post');
		$object->baoxiao_isAgree = 0;//设置成待审核状态
		
		if ($model->update($object,'baoxiao_id',"baoxiao"))
		{
			//Components::save_admin_log("修改了费用报销单,id={$uid}");
			$this->redirect($forward,"修改成功");
		}else{
			$this->redirect($forward,"修改失败");
		}
	}
	
	function delete()
	{
		$item=Request::getVar('item','get');
		if (empty($item)) $item=1;
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "list.php?item={$item}";
		}
		$uid = Request::getVar('uid','get');
		if(empty($uid))
		{
			Response::redirect($forward,"Need id!");
		}
		
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$object = new stdClass();
		$object->baoxiao_id = $uid;
		$object->baoxiao_recycle = 1;
		$object->baoxiao_recycleTime = time();
		
		if ($model->update($object,'baoxiao_id',"baoxiao"))
		{
			$sql="Delete From baoxiao_images Where baoxiao_id={$uid}";
			$model->update("","","",$sql);
			Components::save_admin_log("删除了费用报销单,id={$uid}");
			$this->redirect($forward,"删除成功");
		}else{
			$this->redirect($forward,"删除失败");
		}
	}
	
	function bao_upload()
	{
		$baoxiaoid = Request::getVar('b_id','get');
		$financeid = Request::getVar('f_id','get');
		$Info=array();
		$Info['baoxiao_id']=$baoxiaoid;
		$Info['finance_id']=$financeid;
		
		$object = new stdClass();
		$object->list = $Info;
		
		$view  = $this->createView("operator/finance/baoxiao/upload.html");
		$view->assign($object);
		$view->display();
	}
	
	function check()
	{
		$uid = Request::getVar('uid','get');

		$model = $this->createModel("finance",dirname( __FILE__ ));
		$Info = $model->getInfo($uid);
		$breakid=$Info['bill_id'];
		$bill_list=array();
		if (!empty($breakid)){//取所有费用报销单和其他收入单
			$sql="select '费用报销' as bill_type,baoxiao_money as out_money,0 as in_money,baoxiao_type as change_class from baoxiao where baoxiao_item=2 and bill_id={$breakid} ".
				  " Union All ".
				  " select '其他收入' as bill_type,0 as out_money,money as in_money,change_class from account_change_log where bill_id={$breakid} ";
			$bill_list=$model->getListBySql(0,100,$sql);
		}
				
		$object = new stdClass();
		$object->list = $Info;
		$object->bill_list=$bill_list;
		$object->task = "check_accept";
        
        $view  = $this->createView("operator/finance/baoxiao/create.html");
		$view->assign($object);
		$view->display();
	}
	function check_accept()
	{
		$item=Request::getVar('item','post');
		if (empty($item)) $item=1;
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "list.php?item={$item}";
		}
		$uid = Request::getVar('uid','post');
		if(empty($uid))
		{
			Response::redirect($forward,"Need id!");
		}
		$breakrulesid=Request::getVar('breakrulesid','post');
		
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$empname=$model->getEmpName($_SESSION['a_uid']);
		if (empty($breakrulesid)){//普通报销审核
			$object = new stdClass();
			$object->baoxiao_id = $uid;
			$object->baoxiao_isAgree = Request::getVar('baoxiao_isAgree','post');
			$object->baoxiao_isAgreeTime = time();
			$object->baoxiao_isAgreeMan = $empname;
			$object->baoxiao_isAgreeRemarks = Request::getVar('baoxiao_isAgreeRemarks','post');
			$object->baoxiao_isCheck=0;//设置成待审批状态
			
			if ($model->update($object,'baoxiao_id',"baoxiao"))
			{
				$re="审核成功";
			}else{
				$re="审核失败，返回重试！";
			}
		}else{//违章批量审核
			$sql="Update baoxiao set baoxiao_isAgree=".Request::getVar('baoxiao_isAgree','post').",baoxiao_isAgreeTime=".time().",baoxiao_isAgreeMan='{$empname}',baoxiao_isAgreeRemarks='".Request::getVar('baoxiao_isAgreeRemarks','post')."',baoxiao_isCheck=0 Where bill_id={$breakrulesid}";
			if ($model->update('','','',$sql))
			{
				$re="审核成功";
			}else{
				$re="审核失败，返回重试！";
			}
		}
		$object = new stdClass();
		$object->result = $re;
		$view  = $this->createView("operator/business/result.html");
		$view->assign($object);
		$view->display();
	}
	
	function bao()
	{
		$uid = Request::getVar('uid','get');

		$model = $this->createModel("list",dirname(dirname( __FILE__ ))."\business");		
		$fields="`payment_id`,`payment_name`,`payment_fee`";
		$payments_list=$model->getEmpList($fields," AND payment_recycle!=1","payments");
		$fields="`bank_id`,`bank_name`";
		$bank_list=$model->getEmpList($fields," AND bank_recycle!=1","banks","","bank_order");
		
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$Info = $model->getInfo($uid);
		$breakid=$Info['bill_id'];
		$bao_list=$other_list=array();
		if (!empty($breakid)){//取所有费用报销单和其他收入单
			$sql="select a.*,b.emp_name from baoxiao a left join emp b on a.baoxiao_emp=b.emp_id where a.baoxiao_item=2 and a.bill_id={$breakid} ";
			$bao_list=$model->getListBySql(0,100,$sql);
			$sql="select * from account_change_log where bill_id={$breakid} ";
			$other_list=$model->getListBySql(0,100,$sql);
			
		}
		
		$object = new stdClass();
		$object->list = $Info;
		$object->bao_list=$bao_list;
		$object->other_list=$other_list;
		
		$object->paymentslist = $payments_list;
		$object->banklist = $bank_list;
		$object->item = $Info['baoxiao_item'];
		
        if (!empty($breakid)){
			$object->task = "break_bao_accept";
			$view  = $this->createView("operator/finance/baoxiao/bao.html");
		}else{
			$object->task = "bao_accept";
			$view  = $this->createView("operator/finance/baoxiao/create.html");
		}
		$view->assign($object);
		$view->display();
	}
	function bao_accept(){
		$item=Request::getVar('item','post');
		if (empty($item)) $item=1;
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "list.php?item={$item}";
		}
		$uid = Request::getVar('uid','post');
		if(empty($uid))
		{
			Response::redirect($forward,"Need id!");
		}
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$empname=$model->getEmpName($_SESSION['a_uid']);
		
		$object = new stdClass();
		$object->baoxiao_id = $uid;
		$object->baoxiao_isOver = 1;
		$object->baoxiao_isOverTime = time();
		$object->baoxiao_isOverMan = $empname;
		
		$money=Request::getVar('baoxiao_money','post');
		$payments=Request::getVar('payments','post');
		//if ($payments==1){
		//	$bank=1;
		//}else{
			$bank=Request::getVar('bank','post');
		//}
		$object2 = new Object();
    	$object2->paiche_id = Request::getVar('baoxiaoPaicheId','post');
    	$object2->user_id = Request::getVar('paicheDriver2','post');
	    $object2->payments_id = $payments;
	    $object2->bank_id = $bank;
	    $object2->money = -1*$money;
	    $object2->add_time = time();
	    $object2->name = "费用报销付款";
	    $object2->bill_id = $uid;
	    $object2->bill_type = ($item==1? 4 : 1);  //$item=1为司机跑单报销--bill_type=4，$item=2为其他费用报销 --bill_type=1
		$re=true;
		if ($model->update($object,'baoxiao_id',"baoxiao") && $model->store($object2,"account_log"))
		{
		}else{
			$re=false;
		}
		
		$object = new stdClass();
		$object->result = $re ? "费用报销成功！":"费用报销失败，返回重试！";
		$view  = $this->createView("operator/business/result.html");
		$view->assign($object);
		$view->display();
	}
	function break_bao_accept(){
		$item=Request::getVar('item','post');
		if (empty($item)) $item=1;
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "list.php?item={$item}";
		}
		$breakid = Request::getVar('breakrulesid','post');
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$empname=$model->getEmpName($_SESSION['a_uid']);
		$shop_id=$_SESSION['shopid'];
		$re=true;
		
		//处理退押金
		
		$breakinfo=$model->getInfo(0,"Select breakrulesPaicheId,breakrules_money From breakrules Where breakrules_id={$breakid}");
		$pid=$breakinfo['breakrulesPaicheId'];
		$charges=$model->getInfo(0,"Select * From paiche_charges Where charge_id=1 and paiche_id={$pid}");
	    $chargeid=$charges['id'];
	    $havefreezemoney=$charges['have_freeze_money'];
	    $havebackmoney=$charges['have_back_money'];
	    $backpayments=$charges['payments_id'];
	    $backbank=$charges['bank_id'];
	    //处理退押金
	    $money=$breakinfo['breakrules_money'];
		$object = new Object();
    	$object->id = $chargeid;
    	$object->have_freeze_money = $havefreezemoney-$money;
	    $object->have_back_money = $havebackmoney+$money;
	    $object->back_reason="违章处理退押金";
		if ($model->update($object,"id","paiche_charges")){
		}else{
			$re=false;
		}
		
		if ($re){
			$object = new Object();
    		$object->paiche_id = $pid;
	        $object->payments_id = $backpayments;
	        $object->bank_id = $backbank;
	        $object->money = -1*$money;
	        $object->add_time = time();
	        $object->name = "退押金";
	        $object->remark="违章处理退押金";
			if ($model->store($object,"account_log")){
			}else{
				$re=false;
			}
		}
		
		//其他收入
		if ($re){
			$arr_rec=Request::getVar('oid','post');//记录
			$arr_money=Request::getVar('change_money','post');//金额
			$arr_payments_to=Request::getVar('payments_to','post');
			$arr_bank_to=Request::getVar('bank_to','post');
			$arr_change_class=Request::getVar('change_class','post');
			$arr_name=Request::getVar('name','post');
			for($i=0;$i<count($arr_rec);$i++){
				$object2 = new Object();
		    	$object2->paiche_id = 0;
		    	$object2->client_id = 0;
			    $object2->payments_id = $arr_payments_to[$i];
			    $object2->bank_id = $arr_bank_to[$i];
			    $object2->money = $arr_money[$i];
			    $object2->add_time = time();
			    $object2->name = $arr_name[$i];
			    $object2->bill_type=3;
			    $object2->bill_id = $arr_rec[$i];
			    $object2->account_type=$arr_change_class[$i];
			    $object2->shop_id=$shop_id;
				if ($model->store($object2,"account_log")){
				}else{
					$re=false;
				}
			}
		}
		//费用报销
		if ($re){
			$arr_rec=Request::getVar('uid','post');//记录
			$arr_money=Request::getVar('baoxiao_money','post');//金额
			$arr_payments=Request::getVar('payments','post');
			$arr_bank=Request::getVar('bank','post');
			$arr_user=Request::getVar('paicheDriver2','post');
			for($i=0;$i<count($arr_rec);$i++){
				$object = new stdClass();
				$object->baoxiao_id = $arr_rec[$i];
				$object->baoxiao_isOver = 1;
				$object->baoxiao_isOverTime = time();
				$object->baoxiao_isOverMan = $empname;
				
				$object2 = new Object();
				$object2->user_id = $arr_user[$i];
				$object2->payments_id = $arr_payments[$i];
				$object2->bank_id = $arr_bank[$i];
				$object2->money = -1*$arr_money[$i];
				$object2->add_time = time();
				$object2->name = "费用报销付款";
				$object2->bill_id = $arr_rec[$i];
				$object2->bill_type = 1;
				$re=true;
				if ($model->update($object,'baoxiao_id',"baoxiao") && $model->store($object2,"account_log"))
				{
				}else{
					$re=false;
				}
			}
		}
		
		$object = new stdClass();
		$object->result = $re ? "费用报销成功！":"费用报销失败，返回重试！";
		$view  = $this->createView("operator/business/result.html");
		$view->assign($object);
		$view->display();
	}
	function leadcheck(){
		$uid = Request::getVar('uid','get');
		$uids = Request::getVar('uids','get');
		$search_user=Request::getVar('search_user','get');
        if ($search_user==99) $search_user=$_SESSION['a_uid'];
		$model = $this->createModel("list",dirname(dirname( __FILE__ ))."\business");		
		
		$model = $this->createModel("finance",dirname( __FILE__ ));		
		$object = new stdClass();
		if (!empty($uid)){
			$Info = $model->getInfo($uid);
			$breakid=$Info['bill_id'];
			$bill_list=array();
			if (!empty($breakid)){//取所有费用报销单和其他收入单
				$sql="select '费用报销' as bill_type,baoxiao_money as out_money,0 as in_money,baoxiao_type as change_class from baoxiao where baoxiao_item=2 and bill_id={$breakid} ".
					  " Union All ".
					  " select '其他收入' as bill_type,0 as out_money,money as in_money,change_class from account_change_log where bill_id={$breakid} ";
				$bill_list=$model->getListBySql(0,100,$sql);
			}
			$object->list = $Info;
			$object->bill_list=$bill_list;
			$object->total = $Info['baoxiao_money'];
		}
		$object->task = "lead_accept";
		
		if (!empty($uids)){
			$object->uids = $uids;
			$object->total = $model->getTotal("SELECT SUM(`baoxiao_money`) AS total FROM `baoxiao` WHERE `baoxiao_id` IN ({$uids})");
		}
        $object->nowuser=$search_user;
        $view  = $this->createView("operator/finance/baoxiao/create.html");
		$view->assign($object);
		$view->display();
	}
	function lead_accept(){
		$uid = Request::getVar('uid','post');
		$uids = Request::getVar('uids','post');
		$chktrans=Request::getVar('chktrans','post');
		$breakrulesid=Request::getVar('breakrulesid','post');
				
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$empname=$model->getEmpName($_SESSION['a_uid']);
		$baoxiao_isTracking=0;
		if (Request::getVar('chktracking','post')==1){
			$baoxiao_isTracking=1;
		}
		$re=true;
		if (!empty($uid)){
			if (empty($breakrulesid)){//普通报销审批
				$object = new stdClass();
				$object->baoxiao_id = $uid;
				if (empty($chktrans)){
					$object->baoxiao_isCheck = Request::getVar('baoxiao_isCheck','post');
					$object->baoxiao_isCheckTime = time();
					$object->baoxiao_isCheckMan = $empname;
					$object->baoxiao_checkRemarks=Request::getVar('checkNote','post');
					$object->baoxiao_isTracking=$baoxiao_isTracking;
				}else{
					$object->baoxiao_setCheckMan = $chktrans;
				}
				
				if ($model->update($object,'baoxiao_id',"baoxiao")){
				}else{
					$re=false;
				}
			}else{
				$sql="Update baoxiao set baoxiao_isCheck=".Request::getVar('baoxiao_isCheck','post').",baoxiao_isCheckTime=".time().",baoxiao_isCheckMan='{$empname}',baoxiao_checkRemarks='".Request::getVar('checkNote','post')."',baoxiao_isTracking={$baoxiao_isTracking} Where bill_id={$breakrulesid}";
				if ($model->update('','','',$sql))
				{
				}else{
					$re=false;
				}
			}
		}
		/*
		if (!empty($uids)){
			$sql="UPDATE `baoxiao` SET baoxiao_isCheck = 1,baoxiao_isCheckTime = ".time().",baoxiao_isCheckMan = '{$empname}',baoxiao_checkRemarks='".Request::getVar('checkNote','post')."' WHERE `baoxiao_id` IN ({$uids})";
			if ($model->update("","","",$sql)){
			}else{
				$re=false;
			}
		}
		*/
		
		$object = new stdClass();
		$object->result = $re ? "费用报销审批成功！":"费用报销审批失败，返回重试！";
		$view  = $this->createView("operator/business/result.html");
		$view->assign($object);
		$view->display();
		
	}
	function lead_accept2(){
		$userid=$_SESSION['a_uid'];
		$uid = Request::getVar('uid','post');
		$chktrans=Request::getVar('chktrans','post');
		if ($chktrans==24) $userid=26;
		if ($chktrans==26) $userid=24;
				
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$empname=$model->getEmpName($_SESSION['a_uid']);
		$re=true;
		if (!empty($uid)){
			$object = new stdClass();
			$object->baoxiao_id = $uid;
			$object->baoxiao_setCheckMan = $userid;			
			if ($model->update($object,'baoxiao_id',"baoxiao")){
				$info=array('result'=>1);
				$object1 = new stdClass();
				$object1->baoxiao_id = $uid;
				$object1->from_userid=$chktrans;
				$object1->to_userid=$userid;
				$object1->trans_time=date("Y-m-d H:i:s");
				$model->store($object1,"baoxiao_trans");
			}else{
				$info=array('result'=>0);
			}
		}else{
			$info=array('result'=>0);
		}
		
		echo json_encode($info);
		exit();
		
		
	}
	function cancel_track(){
		$uid = Request::getVar('uid','post');
		$model = $this->createModel("finance",dirname( __FILE__ ));
		
		if (!empty($uid)){
			$object = new stdClass();
			$object->baoxiao_id = $uid;
			$object->baoxiao_isTracking = 0;
			if ($model->update($object,'baoxiao_id',"baoxiao")){
				$info=array('result'=>1);
			}else{
				$info=array('result'=>0);
			}
		}else{
			$info=array('result'=>0);
		}
		
		echo json_encode($info);
		exit();
	}
	function baoxiaocheck(){//检查合同是否已经报销过
		$paiche_id=Request::getVar('paiche_id','post');
		$uid = Request::getVar('baoxiao_id','post');
		
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$sql="SELECT baoxiao_id FROM `baoxiao` WHERE baoxiao_recycle!=1 AND baoxiao_isAgree!=-1 AND baoxiaoPaicheId={$paiche_id}";
		if (!empty($uid)){
			$sql.=" AND baoxiao_id !={$uid}";
		}
		$list = $model->getList($sql);
		if (empty($list)){//未重复
			$info=array('result'=>0);
		}else{
			$info=array('result'=>1);
		}		
	    echo json_encode($info);
		exit();
	}
	function getpaicheid(){
		$paiche_code=Request::getVar('contractNum','post');
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$info=$model->getInfo(0,"Select paiche_id From paiche Where paiche_contractNum='{$paiche_code}'");
		if (empty($info)){
			$info=array('result'=>2);
			echo json_encode($info);
			exit();
		}else{
			$paiche_id=$info['paiche_id'];
		}
		
		$sql="SELECT baoxiao_id FROM `baoxiao` WHERE baoxiao_recycle!=1 AND baoxiao_isAgree!=-1 AND baoxiaoPaicheId={$paiche_id}";
		$list = $model->getList($sql);
		if (empty($list)){//未重复
			$info=array('result'=>0,'pid'=>$paiche_id);
		}else{
			$info=array('result'=>1);
		}		
	    echo json_encode($info);
		exit();
		
	}
	
	function change(){
		$model = $this->createModel("list",dirname(dirname( __FILE__ ))."\business");		
		$fields="`payment_id`,`payment_name`,`payment_fee`";
		$payments_list=$model->getEmpList($fields," AND payment_recycle!=1","payments");
		$fields="`bank_id`,`bank_name`";
		$bank_list=$model->getEmpList($fields," AND bank_recycle!=1","banks","","bank_order");
		
		$object = new stdClass();
		$object->task = "change_accept";
		$object->addtime = date("Y-m-d H:i:s");
		$object->paymentslist = $payments_list;
		$object->banklist = $bank_list;
        
        $view  = $this->createView("operator/finance/change/change.html");
		$view->assign($object);
		$view->display();
	}
	function change_accept()
	{
		$forward="change.php";
		$addtime=Request::getVar('add_time','post');
		$name=Request::getVar('change_name','post');
		$money=Request::getVar('change_money','post');
		$payments_from=Request::getVar('payments_from','post');
		$bank_from=Request::getVar('bank_from','post');
		$payments_to=Request::getVar('payments_to','post');
		$bank_to=Request::getVar('bank_to','post');
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$empname=$model->getEmpName($_SESSION['a_uid']);
		$code=date('YmdHis',time());
		
		$object0 = new Object();
		$object0->change_code=$code;
		$object0->money = $money;
		$object0->add_time = empty($addtime)? time() : strtotime($addtime);
		$object0->name = $name;
		$object0->input_man = $empname;
		if (!empty($payments_from)){
			$object0->payments_from_id = $payments_from;
		    $object0->bank_from_id = $bank_from;
		}
		if (!empty($payments_to)){
			$object0->payments_to_id = $payments_to;
		    $object0->bank_to_id = $bank_to;
		}
		
		$recid=$model->store($object0,"account_change_log");
		
		if (!empty($payments_from)){
			$object1 = new Object();
	    	$object1->paiche_id = 0;
		    $object1->payments_id = $payments_from;
		    $object1->bank_id = $bank_from;
		    $object1->money = -1*$money;
		    $object1->add_time = empty($addtime)? time() : strtotime($addtime);
		    $object1->name = $name;
		    $object1->bill_type=2;
		    $object1->bill_id = $recid;
		    
		}
		if (!empty($payments_to)){
			$object2 = new Object();
	    	$object2->paiche_id = 0;
		    $object2->payments_id = $payments_to;
		    $object2->bank_id = $bank_to;
		    $object2->money = $money;
		    $object2->add_time = empty($addtime)? time() : strtotime($addtime);
		    $object2->name = $name;
		    $object2->bill_type=2;
		    $object2->bill_id = $recid;
		}
		
		if (!empty($payments_from) && !empty($payments_to)){
			if ($model->store($object1,"account_log") && $model->store($object2,"account_log")){
				Components::save_admin_log("添加了资金账户变动,".$name);
				$this->redirect($forward,"保存成功");
			}else{
				$this->redirect($forward,"保存失败");
			}
		}else if(!empty($payments_from)){
			if ($model->store($object1,"account_log")){
				Components::save_admin_log("添加了资金账户变动,".$name);
				$this->redirect($forward,"保存成功");
			}else{
				$this->redirect($forward,"保存失败");
			}
		}else{
			if ($model->store($object2,"account_log")){
				Components::save_admin_log("添加了资金账户变动,".$name);
				$this->redirect($forward,"保存成功");
			}else{
				$this->redirect($forward,"保存失败");
			}
		}
		
	}
	
	
	function other(){
		$model = $this->createModel("list",dirname(dirname( __FILE__ ))."\business");		
		$fields="`payment_id`,`payment_name`,`payment_fee`";
		$payments_list=$model->getEmpList($fields," AND payment_recycle!=1","payments");
		$fields="`bank_id`,`bank_name`";
		$bank_list=$model->getEmpList($fields," AND bank_recycle!=1","banks","","bank_order");
		$model = $this->createModel("finance",dirname( __FILE__ ));
		
		$object = new stdClass();
		$object->task = "other_accept";
		$object->addtime = date("Y-m-d H:i:s");
		$object->paymentslist = $payments_list;
		$object->banklist = $bank_list;
		$object->clientlist=$model->getListBySql(0,1000,"SELECT `client_id`,`client_name` FROM `client` WHERE client_recycle!=1");
		$object->shop = $model->getListBySql(0,1000,'Select * from shop order by shop_order');
		$object->tmpid=rand(70000, 79999);
        
        $view  = $this->createView("operator/finance/change/other.html");
		$view->assign($object);
		$view->display();
	}


	
	function other_accept()
	{
		$forward="other.php";
		$tmpid = Request::getVar('uid','post');
		$addtime=Request::getVar('add_time','post');
		$name=Request::getVar('change_name','post');
		$money=Request::getVar('change_money','post');
		$payments_to=Request::getVar('payments_to','post');
		$bank_to=Request::getVar('bank_to','post');
		$clientid=Request::getVar('client','post');
		$change_class=Request::getVar('change_class','post');
		$shop_id = Request::getVar('shop_id','post');
		
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$empname=$model->getEmpName($_SESSION['a_uid']);
		$code=date('YmdHis',time());
		
		$object0 = new Object();
		$object0->change_code=$code;
		$object0->money = $money;
		$object0->add_time =time();//empty($addtime)? time() : strtotime($addtime);
		$object0->name = $name;
		$object0->input_man = $empname;
		$object0->payments_to_id = $payments_to;
		$object0->bank_to_id = $bank_to;
		$object0->change_type = 1;
		$object0->change_class=$change_class;
		$object0->shop_id=$shop_id;
		
		$recid=$model->store($object0,"account_change_log");
		
		$object2 = new Object();
    	$object2->paiche_id = 0;
    	$object2->client_id = $clientid;
	    $object2->payments_id = $payments_to;
	    $object2->bank_id = $bank_to;
	    $object2->money = $money;
	    $object2->add_time = empty($addtime)? time() : strtotime($addtime);
	    $object2->name = $name;
	    $object2->bill_type=3;
	    $object2->bill_id = $recid;
	    $object2->account_type=$change_class;
	    $object2->shop_id=$shop_id;
		    
		if ($model->store($object2,"account_log")){
			$sql="Update finance_images set finance_id={$recid} Where images_type='other' and finance_id={$tmpid}";
			$model->update("","","",$sql);
			Components::save_admin_log("添加了其他收入,".$name);
			$this->redirect($forward,"保存成功");
		}else{
			$this->redirect($forward,"保存失败");
		}		
		
	}
	

	function baoxiaolist(){//编辑

		$item=Request::getVar('item','get');
		if (empty($item)){
			$item=1;
		}
		$op=Request::getVar('op','get');
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$search_startDate=Request::getVar('search_startDate','get');
		if(empty($search_startDate)){
			$search_startDate=date("Y-m-d",strtotime('-7 day'));
		}
		$search_endDate=Request::getVar('search_endDate','get');
		$name=Request::getVar('searchname','get');
		$searchcode=Request::getVar('searchcode','get');
		
		$base_url = "list.php?item={$item}&search_startDate={$search_startDate}";
		$per_page = 10;
		
		$model = $this->createModel("finance",dirname( __FILE__ ));
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		
		$where=" a.`baoxiao_recycle`!=1 AND a.baoxiao_isAgree<>1 AND a.baoxiao_item={$item} AND a.baoxiao_date>=".strtotime($search_startDate);

		if(!empty($search_endDate)){
			$base_url.="&search_endDate={$search_endDate}";
            $where .=" AND a.baoxiao_date<='".strtotime($search_endDate)."'";
        }
		if (!empty($name)){
			$base_url .="&searchname={$name}";
			$where.=" AND c.`emp_name` like '%{$name}%'";
		}
		if (!empty($searchcode)){
			$base_url .="&searchcode={$searchcode}";
			$where.=" AND a.`baoxiao_code` like '%{$searchcode}'";
		}
		
		$sql="SELECT a.*,b.paiche_startDate,b.paiche_endDate,b.paiche_line,b.paicheDispatchMan,c.emp_name,d.shop_name ".
			"FROM `baoxiao` AS a LEFT JOIN `paiche` AS b ON a.baoxiaoPaicheContractNum=b.paiche_contractNum ".
			"LEFT JOIN `emp` AS c ON a.baoxiao_emp=c.emp_id ".
			"Left Join shop as d ON a.shop_id=d.shop_id WHERE {$where} ORDER BY a.baoxiao_times desc,a.baoxiao_id asc";
		
		$List = $model->getListBySql($start,$per_page, $sql);
		$sql="SELECT COUNT(*) AS total FROM `baoxiao` AS a LEFT JOIN `emp` AS c ON a.baoxiao_emp=c.emp_id WHERE {$where}";
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
		$view  = $this->createView("operator/finance/baoxiao/list.html");
		
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();		
		$object->list = $List;
		$object->total = $total_item;
		$object->item = $item;
		$object->op=$op;
		$object->search_startDate = $search_startDate;
		$view->assign($object);
		$view->display();
	}
	function baoxiaolist1(){
		$userid=$_SESSION['a_uid'];
		$search_shop=Request::getVar('search_shop','get');
		$search_user=Request::getVar('search_user','get');
		if (empty($search_user)) $search_user=$userid;

		$where=" baoxiao_recycle!=1 AND baoxiao_isAgree=1 AND baoxiao_isCheck=0".(empty($search_shop)?"":" AND a.shop_id={$search_shop}");
		$where5=" baoxiao_recycle!=1 AND baoxiao_isAgree=1".(empty($search_shop)?"":" AND a.shop_id={$search_shop}");
		if ($search_user==24){
			$where1=" AND ((baoxiao_roadQiao+baoxiao_oil+baoxiao_room+baoxiao_meal+baoxiao_stopCar>1000 AND baoxiao_setCheckMan=0) OR baoxiao_setCheckMan={$search_user})";
			$where2=" AND ((baoxiao_money>1000 AND baoxiao_setCheckMan=0) OR baoxiao_setCheckMan={$search_user})";
		}
		if ($search_user==26){
			$where1=" AND ((baoxiao_roadQiao+baoxiao_oil+baoxiao_room+baoxiao_meal+baoxiao_stopCar<=1000 AND baoxiao_setCheckMan=0) OR baoxiao_setCheckMan={$search_user})";
			$where2=" AND ((baoxiao_money<=1000 AND baoxiao_setCheckMan=0) OR baoxiao_setCheckMan={$search_user})";
		}
		
		$sql_1="Select count(*) as nCount1,Sum(baoxiao_roadQiao+baoxiao_oil+baoxiao_room+baoxiao_meal+baoxiao_stopCar) as nSum1,0 as nCount2,0 as nSum2,0 as nCount3,0 as nSum3,0 as nCount4,0 as nSum4,0 as nCount5 From baoxiao as a Where {$where}{$where1} AND baoxiao_item=1";
		$sql_2="Select 0 as nCount1,0 as nSum1,count(*) as nCount2,Sum(baoxiao_money) as nSum2,0 as nCount3,0 as nSum3,0 as nCount4,0 as nSum4,0 as nCount5 From baoxiao as a Inner Join baoxiao_type as b On a.baoxiao_type=b.typename Where {$where}{$where2} AND baoxiao_item=2 AND b.typeclass=0 AND b.typeid<>13";
		$sql_3="Select 0 as nCount1,0 as nSum1,0 as nCount2,0 as nSum2,count(*) as nCount3,Sum(baoxiao_money) as nSum3,0 as nCount4,0 as nSum4,0 as nCount5 From baoxiao as a Inner Join baoxiao_type as b On a.baoxiao_type=b.typename Where {$where}{$where2} AND baoxiao_item=2 AND b.typeclass=1 ";
		$sql_4="Select 0 as nCount1,0 as nSum1,0 as nCount2,0 as nSum2,0 as nCount3,0 as nSum3,count(*) as nCount4,Sum(baoxiao_money) as nSum4,0 as nCount5 From baoxiao as a Inner Join baoxiao_type as b On a.baoxiao_type=b.typename Where {$where}{$where2} AND baoxiao_item=2 AND b.typeid=13";
		$sql_5="Select 0 as nCount1,0 as nSum1,0 as nCount2,0 as nSum2,0 as nCount3,0 as nSum3,0 as nCount4,0 as nSum4,count(*) as nCount5 From baoxiao as a Where {$where5} AND baoxiao_isCheck=1 AND baoxiao_isTracking=1 ";
		
		$sql="Select Sum(nCount1) as nCount1,Sum(nSum1) as nSum1,Sum(nCount2) as nCount2,Sum(nSum2) as nSum2,Sum(nCount3) as nCount3,Sum(nSum3) as nSum3,Sum(nCount4) as nCount4,Sum(nSum4) as nSum4,Sum(nCount5) as nCount5 From ({$sql_1} Union All {$sql_2} Union All {$sql_3} Union All {$sql_4} Union All {$sql_5}) kk";
		
		$model = $this->createModel("finance",dirname( __FILE__ ));
				
		$view  = $this->createView("operator/finance/baoxiao/first.html");
		
		$object = new stdClass();
		$object->info = $model->getInfo("",$sql);
		$object->shoplist=$model->getListBySql(0,10,"Select `shop_id`,`shop_name` From shop");
		$object->search_user=$search_user;
		$object->search_shop=$search_shop;
		
		$view->assign($object);
		$view->display();
	}
	function baoxiaolist2(){//指定审核人审核//受理
		
		$op=Request::getVar('op','get');
		$search_startDate=Request::getVar('search_startDate','get');
		$search_endDate=Request::getVar('search_endDate','get');
		$name=Request::getVar('searchname','get');
		$search_status=Request::getVar('search_status','get');
		if (empty($search_status)) $search_status = "d";
		
		$base_url = "list2.php";		
		$model = $this->createModel("finance",dirname( __FILE__ ));
				
		$where=" a.`baoxiao_recycle`!=1";
		if(!empty($search_startDate)){
			$base_url.="&search_startDate={$search_startDate}";
            $where .=" AND a.baoxiao_date>='".strtotime($search_startDate)."'";
        }
		if(!empty($search_endDate)){
			$base_url.="&search_endDate={$search_endDate}";
            $where .=" AND a.baoxiao_date<='".strtotime($search_endDate)."'";
        }
		if (!empty($name)){
			$base_url .="&searchname={$name}";
			$where.=" AND c.`emp_name` like '%{$name}%'";
		}
        if ($op=="check"){
        	$where .=" AND (a.baoxiao_isAgree=0 OR (a.baoxiao_isCheck=-1 AND a.baoxiao_isAgree=1)) AND a.baoxiao_auditor=".$_SESSION['user_id'];
        }
		if ($op=="bao"){
        	$where .=" AND a.baoxiao_isAgree=1 AND a.baoxiao_isCheck=1 AND a.baoxiao_isOver=0 ";
        }
                
		$sql1="SELECT a.*,b.paiche_startDate,b.paiche_endDate,b.paiche_line,b.paicheDispatchMan,c.emp_name ".
			"FROM `baoxiao` AS a LEFT JOIN `paiche` AS b ON a.baoxiaoPaicheContractNum=b.paiche_contractNum ".
			"LEFT JOIN `emp` AS c ON a.baoxiao_emp=c.emp_id LEFT Join baoxiao_type as e On a.baoxiao_type=e.typename WHERE {$where}{$where1} AND a.baoxiao_item=1 ORDER BY a.baoxiao_times desc";
		$List1 = $model->getListBySql(0,10000, $sql1);
		
		$sql2="SELECT a.*,b.paiche_startDate,b.paiche_endDate,b.paiche_line,b.paicheDispatchMan,c.emp_name,d.shop_name ".
				"FROM `baoxiao` AS a LEFT JOIN `paiche` AS b ON a.baoxiaoPaicheContractNum=b.paiche_contractNum ".
				"LEFT Join baoxiao_type as e On a.baoxiao_type=e.typename LEFT JOIN `emp` AS c ON a.baoxiao_emp=c.emp_id ".
				"Left Join shop as d ON a.shop_id=d.shop_id WHERE {$where}{$where2} AND a.baoxiao_item=2 ORDER BY a.baoxiao_times desc";
		$List2 = $model->getListBySql(0,10000, $sql2);

		$view  = $this->createView("operator/finance/baoxiao/list2.html");
		
		$object = new stdClass();
		$object->list1 = $List1;
		$object->list2 = $List2;
		$object->op=$op;
		$object->t=$t;
		$object->search_user=$search_user;
		$object->url= $op=="leadcheck"? "list2.php" : "list.php";
		$object->search_status=$search_status;
		$view->assign($object);
		$view->display();
	}

	
	function baoxiaolist3()//领导审核
	{
		$firstop = Request::getVar('firstop','get');
		$userid=$_SESSION['a_uid'];
        $t=Request::getVar('t','get');
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$per_page = 15;
		
		$op=Request::getVar('op','get');
		$search_startDate=Request::getVar('search_startDate','get');
		$search_endDate=Request::getVar('search_endDate','get');
		$name=Request::getVar('searchname','get');
		$search_shop=Request::getVar('search_shop','get');
		$search_status=Request::getVar('search_status','get');
		if (empty($search_status)) $search_status = "d";
		$search_user=Request::getVar('search_user','get');
        if (empty($search_user)) $search_user=$userid;
		
		$base_url = "list3.php?firstop={$firstop}&op={$op}&t={$t}&search_user={$search_user}&search_status={$search_status}".(empty($search_shop)?"":"&search_shop={$search_shop}");		
		$model = $this->createModel("finance",dirname( __FILE__ ));
				
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		
		$where=" a.`baoxiao_recycle`!=1 AND a.baoxiao_isAgree=1 ".(empty($search_shop)?"":" AND a.shop_id={$search_shop}");
		$order="a.baoxiao_times desc";
		if (empty($search_startDate) && $search_status!="d"){
        	$search_startDate=date("Y-m-d",strtotime("-1 month "));
        }
		if(!empty($search_startDate)){
			$base_url.="&search_startDate={$search_startDate}";
            $where .=" AND a.baoxiao_date>='".strtotime($search_startDate)."'";
        }
		if(!empty($search_endDate)){
			$base_url.="&search_endDate={$search_endDate}";
            $where .=" AND a.baoxiao_date<='".strtotime($search_endDate)."'";
        }
		if (!empty($name)){
			$base_url .="&searchname={$name}";
			$where.=" AND c.`emp_name` like '%{$name}%'";
		}
        
        if ($search_status=="d"){
        		$where .=" AND a.baoxiao_isCheck=0 ";
        }
        if ($search_status=="y"){
        	$where .=" AND a.baoxiao_isCheck=1 ";
        	$order="a.baoxiao_isCheckTime desc";
        }
        if ($t==2) $where .=" AND e.typeclass=0 AND e.typeid<>13";
        if ($t==3) $where .=" AND e.typeclass=1";
        if ($t==4) $where .=" AND e.typeid=13";
	    if ($search_user==24){
				$where1=" AND ((baoxiao_roadQiao+baoxiao_oil+baoxiao_room+baoxiao_meal+baoxiao_stopCar>1000 AND baoxiao_setCheckMan=0) OR baoxiao_setCheckMan={$search_user})";
				$where2=" AND ((baoxiao_money>1000 AND baoxiao_setCheckMan=0) OR baoxiao_setCheckMan={$search_user})";
		}
		if ($search_user==26){
				$where1=" AND ((baoxiao_roadQiao+baoxiao_oil+baoxiao_room+baoxiao_meal+baoxiao_stopCar<=1000 AND baoxiao_setCheckMan=0) OR baoxiao_setCheckMan={$search_user})";
				$where2=" AND ((baoxiao_money<=1000 AND baoxiao_setCheckMan=0) OR baoxiao_setCheckMan={$search_user})";
		}
        $sql_0="Select a.bill_id,d.payment_name,b.bank_name From account_log as a LEFT JOIN `banks` AS b ON a.bank_id=b.bank_id 
			 	LEFT JOIN `payments` AS d ON a.payments_id=d.payment_id Where bill_type=1 Or bill_type=4";
        
        if ($t==1){
			$sql="SELECT a.*,b.paiche_startDate,b.paiche_endDate,b.paiche_line,b.paicheDispatchMan,c.emp_name,kk.payment_name,kk.bank_name ".
				"FROM `baoxiao` AS a LEFT JOIN `paiche` AS b ON a.baoxiaoPaicheContractNum=b.paiche_contractNum ".
				"LEFT JOIN `emp` AS c ON a.baoxiao_emp=c.emp_id LEFT Join baoxiao_type as e On a.baoxiao_type=e.typename ".
				"Left Join ({$sql_0}) as kk ON a.baoxiao_id=kk.bill_id ".
				"WHERE {$where}{$where1} AND a.baoxiao_item=1 ORDER BY {$order}";
			$sql_t="SELECT COUNT(*) AS total FROM `baoxiao` AS a LEFT JOIN `paiche` AS b ON a.baoxiaoPaicheContractNum=b.paiche_contractNum ".
				"LEFT JOIN `emp` AS c ON a.baoxiao_emp=c.emp_id LEFT Join baoxiao_type as e On a.baoxiao_type=e.typename WHERE {$where}{$where1} AND a.baoxiao_item=1 ";
        }else{
        	$sql="SELECT a.*,b.paiche_startDate,b.paiche_endDate,b.paiche_line,b.paicheDispatchMan,c.emp_name,d.shop_name,kk.payment_name,kk.bank_name ".
				"FROM `baoxiao` AS a LEFT JOIN `paiche` AS b ON a.baoxiaoPaicheContractNum=b.paiche_contractNum ".
				"LEFT Join baoxiao_type as e On a.baoxiao_type=e.typename LEFT JOIN `emp` AS c ON a.baoxiao_emp=c.emp_id ".
				"Left Join shop as d ON a.shop_id=d.shop_id Left Join ({$sql_0}) as kk ON a.baoxiao_id=kk.bill_id WHERE {$where}{$where2} AND a.baoxiao_item=2 ORDER BY {$order}";
        	$sql_t="SELECT COUNT(*) AS total FROM `baoxiao` AS a LEFT JOIN `paiche` AS b ON a.baoxiaoPaicheContractNum=b.paiche_contractNum ".
				"LEFT Join baoxiao_type as e On a.baoxiao_type=e.typename LEFT JOIN `emp` AS c ON a.baoxiao_emp=c.emp_id ".
				"Left Join shop as d ON a.shop_id=d.shop_id WHERE {$where}{$where2} AND a.baoxiao_item=2 ";
        }
        //print_r($sql);exit;
        $List=null;
        if(!empty($firstop)){
		$List = $model->getListBySql($start,$per_page, $sql);
        }
		$total_item = $model->getTotal($sql_t);
		
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
		
		$view  = $this->createView("operator/finance/baoxiao/list3.html");
		
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();
		$object->list = $List;
		$object->total = $total_item;
		$object->op=$op;
		$object->t=$t;
		$object->search_user=$search_user;
		$object->search_startDate=$search_startDate;
		$object->search_endDate=$search_endDate;
		$object->url= "list3.php?t={$t}&search_user={$search_user}";
		$object->search_status=$search_status;
		$object->search_shop=$search_shop;
		$object->firstop =$firstop;
		$object->shoplist=$model->getListBySql(0,10,"Select `shop_id`,`shop_name` From shop");
		$view->assign($object);
		$view->display();
	}
	function baoxiaolist4()//待跟踪
	{
				
		$op=Request::getVar('op','get');
		$search_startDate=Request::getVar('search_startDate','get');
		$search_endDate=Request::getVar('search_endDate','get');
		$name=Request::getVar('searchname','get');
		$search_shop=Request::getVar('search_shop','get');
		$search_status=Request::getVar('search_status','get');
		if (empty($search_status)) $search_status = "d";
				
		$base_url = "list4.php?search_status={$search_status}".(empty($search_shop)?"":"&search_shop={$search_shop}");		
		$model = $this->createModel("finance",dirname( __FILE__ ));
		
		$where=" a.`baoxiao_recycle`!=1 AND a.baoxiao_isTracking=1 ".(empty($search_shop)?"":" AND a.shop_id={$search_shop}");
		$order="a.baoxiao_times desc";
		if (empty($search_startDate) && $search_status!="d"){
        	$search_startDate=date("Y-m-d",strtotime("-1 month "));
        }
		if(!empty($search_startDate)){
			$base_url.="&search_startDate={$search_startDate}";
            $where .=" AND a.baoxiao_date>='".strtotime($search_startDate)."'";
        }
		if(!empty($search_endDate)){
			$base_url.="&search_endDate={$search_endDate}";
            $where .=" AND a.baoxiao_date<='".strtotime($search_endDate)."'";
        }
		if (!empty($name)){
			$base_url .="&searchname={$name}";
			$where.=" AND c.`emp_name` like '%{$name}%'";
		}
        
        $sql_0="Select a.bill_id,d.payment_name,b.bank_name From account_log as a LEFT JOIN `banks` AS b ON a.bank_id=b.bank_id 
			 	LEFT JOIN `payments` AS d ON a.payments_id=d.payment_id Where bill_type=1 Or bill_type=4";
        
        	$sql_1="SELECT a.*,b.paiche_startDate,b.paiche_endDate,b.paiche_line,b.paicheDispatchMan,c.emp_name,kk.payment_name,kk.bank_name ".
				"FROM `baoxiao` AS a LEFT JOIN `paiche` AS b ON a.baoxiaoPaicheContractNum=b.paiche_contractNum ".
				"LEFT JOIN `emp` AS c ON a.baoxiao_emp=c.emp_id ".
				"Left Join ({$sql_0}) as kk ON a.baoxiao_id=kk.bill_id ".
				"WHERE {$where} AND a.baoxiao_item=1 ORDER BY {$order}";
			
        	$sql_2="SELECT a.*,c.emp_name,d.shop_name,kk.payment_name,kk.bank_name ".
				"FROM `baoxiao` AS a LEFT Join baoxiao_type as e On a.baoxiao_type=e.typename LEFT JOIN `emp` AS c ON a.baoxiao_emp=c.emp_id ".
				"Left Join shop as d ON a.shop_id=d.shop_id Left Join ({$sql_0}) as kk ON a.baoxiao_id=kk.bill_id WHERE {$where} AND a.baoxiao_item=2 ORDER BY {$order}";
        	
        
        
		$List_1 = $model->getListBySql(0,1000, $sql_1);
        $List_2 = $model->getListBySql(0,1000, $sql_2);
				
		$view  = $this->createView("operator/finance/baoxiao/list4.html");
		
		$object = new stdClass();
		$object->list1 = $List_1;
		$object->list2 = $List_2;
		$view->assign($object);
		$view->display();
	}
	
	function rechargelist()
	{
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$search_startDate=Request::getVar('search_startDate','get');
		$search_endDate=Request::getVar('search_endDate','get');
		$clientid=Request::getVar('client','get');
		
		$base_url = "list.php";
		$per_page = 10;
		
		$model = $this->createModel("finance",dirname( __FILE__ ));
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		
		$where=" a.recharge_type=0";
		if(!empty($search_startDate)){
			$base_url.="&search_startDate={$search_startDate}";
            $where .=" AND a.recharge_remitTime>='".strtotime($search_startDate)."'";
        }
		if(!empty($search_endDate)){
			$base_url.="&search_endDate={$search_endDate}";
            $where .=" AND a.recharge_remitTime<='".strtotime($search_endDate)."'";
        }
		if (!empty($clientid)){
        	$base_url.="&client={$clientid}";
			$where.=" AND a.rechargeClientId={$clientid} ";
        }
		$sql="SELECT client_id,client_name,client_balance FROM `client` WHERE client_recycle!=1 AND client_id IN (SELECT rechargeClientId FROM `recharge` AS a WHERE {$where}) ";
		$List = $model->getListBySql($start,$per_page, $sql);
		$total_item = count($List);
		$sql="SELECT SUM(client_balance) AS total FROM `client` WHERE client_recycle!=1 AND client_id IN (SELECT rechargeClientId FROM `recharge` AS a WHERE {$where}) ";
		$sum = $model->getTotal($sql);

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
		$view  = $this->createView("operator/finance/recharge/list.html");
		
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();		
		$object->list = $List;
		$object->total = $total_item;
		$object->sum = $sum;
		$object->clientid = $clientid;
		$object->clientlist=$model->getListBySql(0,1000,"SELECT `client_id`,`client_name` FROM `client` WHERE client_recycle!=1");
		
		$view->assign($object);
		$view->display();
	}
	function rechargecreate()
	{
		$model = $this->createModel("list",dirname(dirname( __FILE__ ))."\business");		
		$fields="`payment_id`,`payment_name`,`payment_fee`";
		$payments_list=$model->getEmpList($fields," AND payment_recycle!=1","payments");
		$fields="`bank_id`,`bank_name`";
		$bank_list=$model->getEmpList($fields," AND bank_recycle!=1","banks","","bank_order");
		
		$object = new stdClass();
		$object->task = "rechargeinsert";
		$object->paymentslist = $payments_list;
		$object->banklist = $bank_list;
		$date_array = array();
		for($day=1; $day<=23; $day++){
			$date_array[$day]['hour']=$day;
		}
        $object->hourlist = $date_array;
		$date_array = array();
		for($day=1; $day<=11; $day++){
			$date_array[$day]['minute']=$day*5;
		}
		$object->minuelist = $date_array;
        
        $view  = $this->createView("operator/finance/recharge/create.html");
		$view->assign($object);
		$view->display();
	}
	
	function rechargeinsert()
	{
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "list.php";
		}
		$model = $this->createModel("finance",dirname( __FILE__ ));
		
		$clientid=Request::getVar('paiche_name2','post');
		$money=Request::getVar('recharge_money','post');
		$payments=Request::getVar('payments','post');
		//if ($payments==1){
		//	$bank=1;
		//}else{
			$bank=Request::getVar('bank','post');
		//}
		$nowMoney=$model->getTotal("SELECT `client_balance` AS total FROM `client` WHERE `client_id`={$clientid}");
		
		$object = new stdClass();		
		$object->rechargeClientId = $clientid;
		$object->recharge_mode = $payments;
		$object->recharge_remitTime = strtotime(Request::getVar('p_remitDate','post'));
		$object->recharge_bank = Request::getVar('recharge_bank','post');
		$object->recharge_money = $money;
		$object->recharge_explanation = Request::getVar('recharge_explanation','post');
		$object->recharge_time = time();
				
		$object2 = new Object();
    	$object2->paiche_id = 0;
    	$object2->client_id = $clientid;
	    $object2->payments_id = $payments;
	    $object2->bank_id = $bank;
	    $object2->money = $money;
	    $object2->add_time = time();
	    $object2->name = "客户充值";
	    
	    $object3 = new Object();
	    $object3->client_id = $clientid;
	    $object3->client_balance=$nowMoney+$money;
		
		if ($model->store($object,"recharge") && $model->store($object2,"account_log") && $model->update($object3,'client_id',"client")){
			Components::save_admin_log("添加了客户充值记录,".Request::getVar('paiche_name','post'));
			$this->redirect($forward,"添加成功");
		}else{
			$this->redirect($forward,"添加失败");
		}
	}

	function monthfirstlist()
	{
		$key=Request::getVar('key','get');
		$model = $this->createModel("finance",dirname( __FILE__ ));
		
		$sql="SELECT b.paicheCom as month_clientid,c.client_name,Count(a.monthPaicheId) as nCount,Sum(settle_infact-settle_billMoney_have) as LeftSum FROM `paiche_month` AS a ".
			 "LEFT JOIN `paiche` AS b ON a.monthPaicheId=b.paiche_id ".
			 "LEFT JOIN `client` AS c ON b.paicheCom=c.client_id ".
			 "WHERE a.monthPaicheId>0 and a.`month_account`!=1 AND c.client_name like '%{$key}%' Group by b.paicheCom,c.client_name";

		$List = $model->getListBySql(0,200, $sql);
		$view  = $this->createView("operator/finance/monthaccount/first.html");
		
		$object = new stdClass();
		$object->busiList = $List;
		$view->assign($object);
		$view->display();
	}



	function batchfirstlist()
	{
		$key=Request::getVar('key','get');
		
		$model = $this->createModel("finance",dirname( __FILE__ ));
		
		$sql="SELECT a.month_clientid,c.client_name,Count(month_clientid) as nCount,sum(settle_infact-settle_billMoney_have) as LeftSum FROM `paiche_month` AS a ".
			 "INNER JOIN `client` AS c ON a.month_clientid=c.client_id ".
			 "WHERE a.monthPaicheId=0 and a.`month_account`!=1".(empty($key)?"":" and c.client_name like '%{$key}%'")." Group by a.month_clientid,c.client_name";
			 
		$List = $model->getListBySql(0,200, $sql);
		//print_r($List);exit;
		$view  = $this->createView("operator/finance/monthaccount/first.html");
		
		$object = new stdClass();
		$object->busiList = $List;
		$view->assign($object);
		$view->display();
	}
	function shuntfirstlist(){
		//print_r("expression");exit;
		$model = $this->createModel("finance",dirname( __FILE__ ));
		
		$sql="SELECT a.month_brotherid,c.bro_name,Count(month_brotherid) as nCount,sum(settle_infact-settle_billMoney_have) as LeftSum FROM `paiche_month` AS a ".
			 "INNER JOIN `brothers` AS c ON a.month_brotherid=c.bro_id ".
			 "WHERE a.month_brotherid<>0 and a.`month_account`!=1 Group by a.month_brotherid,c.bro_name";

		$List = $model->getListBySql(0,200, $sql);
		$view  = $this->createView("operator/finance/monthaccount/first.html");
		
		$object = new stdClass();
		$object->shuntList = $List;
		$view->assign($object);
		$view->display();
	}
	function monthlist()
	{
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$companyid=Request::getVar('company','get');
		$paiche_car=Request::getVar('paiche_car','get');
		$search_startDate=Request::getVar('search_startDate','get');
		$search_endDate=Request::getVar('search_endDate','get');
		
		$base_url = "list.php";
		$per_page = 10;
		
		$model = $this->createModel("finance",dirname( __FILE__ ));
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		
		$sql="SELECT a.*,b.paiche_startDate,b.paiche_endDate,c.client_name,e.car_num,d.emp_name FROM `paiche_month` AS a ".
			 "LEFT JOIN `paiche` AS b ON a.monthPaicheId=b.paiche_id ".
			 "LEFT JOIN emp AS d ON b.paicheCounterMan=d.emp_id ".
			 "LEFT JOIN `car` AS e ON b.paicheCar=e.car_id ".
			 "LEFT JOIN `client` AS c ON b.paicheCom=c.client_id ".
			 "WHERE ";
		$where="a.monthPaicheId>0 and a.`month_account`!=1";
		if (!empty($companyid)){
        	$base_url.="?company={$companyid}";
        	$where.=" AND b.paicheCom={$companyid} ";
        }
		if ($paiche_car!=""){
        	$base_url.="&paiche_car={$paiche_car}";
        	$where .=" AND e.car_num like '%{$paiche_car}%'";
        }
		if(!empty($search_startDate)){
			$base_url.="&search_startDate={$search_startDate}";
            $where .=" AND b.paiche_endDate>=".strtotime($search_startDate);
        }
		if(!empty($search_endDate)){
			$base_url.="&search_endDate={$search_endDate}";
            $where .=" AND b.paiche_startDate<=".(strtotime($search_endDate." 23:59:59"));
        }
		
		$List = $model->getListBySql($start,$per_page, $sql.$where);
		$sql="SELECT COUNT(*) AS total FROM `paiche_month` AS a LEFT JOIN `paiche` AS b ON a.monthPaicheId=b.paiche_id LEFT JOIN `car` AS e ON b.paicheCar=e.car_id WHERE {$where}";
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
		$view  = $this->createView("operator/finance/monthaccount/list.html");
		
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();		
		$object->list = $List;
		$object->total = $total_item;
		$object->companyid = $companyid;
		$object->companylist=$model->getList("SELECT `client_id`,`client_name` FROM `client` WHERE client_recycle!=1");
		$object->flag="month";
		$object->search_startDate=$search_startDate;
		$view->assign($object);
		$view->display();
	}



	
	function batchlist(){
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$companyid=Request::getVar('company','get');
		
		$base_url = "list.php";
		$per_page = 10;
		
		$model = $this->createModel("finance",dirname( __FILE__ ));
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		
		$sql="SELECT a.*,c.client_name,d.emp_name FROM `paiche_month` AS a ".
			 "LEFT JOIN `client` AS c ON a.month_clientid=c.client_id ".
			 "LEFT JOIN `emp` AS d ON a.month_CounterMan=d.emp_id ".
			 "WHERE a.monthPaicheId=0 and a.`month_account`!=1";
		if (!empty($companyid)){
        	$base_url.="?company={$companyid}";
        	$sql.=" AND a.month_clientid={$companyid} ";
        }
		
		$List = $model->getListBySql($start,$per_page, $sql);

		$sql="SELECT COUNT(*) AS total FROM `paiche_month` AS a WHERE a.monthPaicheId=0 and a.`month_account`!=1".(empty($companyid)? "" : " AND a.month_clientid={$companyid}");
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

		$view  = $this->createView("operator/finance/monthaccount/list.html");
		
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();		
		$object->list = $List;
		$object->total = $total_item;
		$object->companyid = $companyid;
		$object->companylist=$model->getList("SELECT `client_id`,`client_name` FROM `client` WHERE client_recycle!=1");
		$object->flag="batch";
		$view->assign($object);
		$view->display();
	}
	function shuntlist(){
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$brotherid=Request::getVar('brother','get');
		
		$base_url = "list.php";
		$per_page = 10;
		
		$model = $this->createModel("finance",dirname( __FILE__ ));
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		
		$sql="SELECT a.*,c.bro_name,d.emp_name FROM `paiche_month` AS a ".
			 "LEFT JOIN `brothers` AS c ON a.month_brotherid=c.bro_id ".
			 "LEFT JOIN `emp` AS d ON a.month_CounterMan=d.emp_id ".
			 "WHERE a.month_brotherid<>0 and a.`month_account`!=1";
		if (!empty($brotherid)){
        	$base_url.="brother?={$brotherid}";
        	$sql.=" AND a.month_brotherid={$brotherid} ";
        }
		
		$List = $model->getListBySql($start,$per_page, $sql);
		$sql="SELECT COUNT(*) AS total FROM `paiche_month` AS a WHERE a.month_brotherid<>0 and a.`month_account`!=1".(empty($brotherid)? "" : " AND a.month_brotherid={$brotherid}");
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
		$view  = $this->createView("operator/finance/monthaccount/list.html");
		
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();		
		$object->list = $List;
		$object->total = $total_item;
		$object->brotherid = $brotherid;
		$object->brotherlist=$model->getList("SELECT `bro_id`,`bro_name` FROM `brothers` WHERE bro_recycle!=1");
		$object->flag="shunt";
		$view->assign($object);
		$view->display();
	}
	





	//长期结账
	function month()
	{
		//print_r("expression");exit;
		$uid = Request::getVar('uid','get');

		$model = $this->createModel("list",dirname(dirname( __FILE__ ))."\business");		
		$fields="`payment_id`,`payment_name`,`payment_fee`";
		//收钱的方式
		$payments_list=$model->getEmpList($fields," AND payment_recycle!=1","payments");
		$fields="`bank_id`,`bank_name`";
		//收钱的账户
		$bank_list=$model->getEmpList($fields," AND bank_recycle!=1","banks","","bank_order");
				
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$Info = $model->getMonthInfo($uid);
		
		$object = new stdClass();
		$object->list = $Info;
		$object->task = "month_accept";
		$object->paymentslist = $payments_list;
		$object->banklist = $bank_list;
		$object->monthtime = date("Y-m-d H:i:s");
        
        $view  = $this->createView("operator/finance/monthaccount/create.html");
		$view->assign($object);
		$view->display();
	}
	function month_accept()
	{
		$uid = Request::getVar('uid','post');
		if(empty($uid))
		{
			$object = new stdClass();
			$object->result = "参数错误，返回重试";
			$view  = $this->createView("operator/business/result.html");
			$view->assign($object);
			$view->display();
			exit();
		}
		
		$total=Request::getVar('total0','post');//总
		$have=Request::getVar('total1','post');//已
		$favor=Request::getVar('favor','post');//优惠

		if (empty($favor)) $favor=0;
		$infact = Request::getVar('total','post');//本次
		$month_accounttime = Request::getVar('month_accounttime','post');
		$balance = Request::getVar('isBalance','post'); //是否用余额支付
		if (empty($balance)) $balance=0;
		$clientid=Request::getVar('client_id','post');
		$month_clientid=Request::getVar('month_clientid','post');
		$month_brotherid=Request::getVar('month_brotherid','post');
		$month_code=Request::getVar('month_code','post');
		
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$empname=$model->getEmpName($_SESSION['a_uid']);
		
		$re=true;
		
		$object = new stdClass();
		$object->month_id = $uid;
		$object->month_account = $have+$infact+$favor>=$total? 1 : 0;
		$object->settle_billFavor = $favor;
		$object->settle_billMoney_have = $have+$infact;
		$object->month_accounttime = empty($month_accounttime) ? time() : strtotime($month_accounttime);
		$object->month_accountmode = $balance==1 ? 0 : Request::getVar('payments','post');
		$object->month_remarks = Request::getVar('Remarks','post');
		$settle_billNum=Request::getVar('settle_billNum','post');
		if (isset($settle_billNum) && !empty($settle_billNum)){
		$object->settle_billNum=$settle_billNum;
		$settle_billDate=Request::getVar('settle_billDate','post');
		$object->settle_billDate=empty($settle_billDate)?0:strtotime($settle_billDate);
		}
		
		if ($model->update($object,"month_id","paiche_month")){
		}else{
			$re=false;
		}
		
		if ($re && !empty($clientid) && floatval($have+$infact+$favor)>=floatval($total)){//已结清
			$pid=Request::getVar('pid','post');
			$object3 = new Object();
			$object3->settlePaicheId = $pid;
			$object3->settle_losses=2;//已结账
			if ($model->update($object3,'settlePaicheId','settle')){
			}else{
				$re=false;
			}
		}
		
		//账务处理
		if ($re){
			$clientid=Request::getVar('client_id','post');
			$payments=Request::getVar('payments','post');
			$bank=Request::getVar('bank','post');
			$object = new Object();
			if(!empty($month_brotherid)){
				$object->paiche_id = 0;
				$object->brother_id=$month_brotherid;
				$object->name = "调车结账";
	        	$object->bill_type=6;
	        	$object->bill_code = $month_code;
	        	$title="调车结账";
			}elseif (!empty($month_clientid) && !empty($month_code)){
				$object->paiche_id = 0;
				$object->client_id = $month_clientid;
				$object->name = "临时用车批量结账";
				$object->bill_type=5;
    			$object->bill_code = $month_code;
				$title="临时用车批量结账";
			}else{
				$object->paiche_id = Request::getVar('pid','post');
				$object->client_id = $clientid;
				$object->name = "长期用车月结";
				$title="长期用车月结";
			}
    		
	        $object->payments_id = $payments;
	        $object->bank_id = $bank;
	        $object->money = $infact;
	        $object->add_time = empty($month_accounttime) ? time() : strtotime($month_accounttime);
	        $object->remark=Request::getVar('Remarks','post');
	        
			if ($model->store($object,"account_log")){
			}else{
				$re=false;
			}
			
		}
		$object = new stdClass();
		$object->result = $re ? "结账成功！":"结账失败，返回重试！";
		$view  = $this->createView("operator/business/result.html");
		$view->assign($object);
		$view->display();
	}
		
	function salarylist()
	{
		$year=Request::getVar('searchyear','get');
		$month=Request::getVar('searchmonth','get');
		if (empty($year)){
			$year=date("Y");
		}
		if (empty($month)){
			$month=date("m");
		}
		$sdate=$year."-".$month."-01";
		if ($month==12){
			$edate=intval($year+1)."-01-01";
		}else{
			$edate=$year."-".intval($month+1)."-01";
		}
		$startdate=strtotime($sdate);
		$enddate=strtotime($edate);		
		$postid=Request::getVar('post','get');
		$name=Request::getVar('searchname','get');
		
		$base_url = "list.php?searchyear={$year}&searchmonth={$month}";
		
		
		$model = $this->createModel("finance",dirname( __FILE__ ));
		
		$where="emp_recycle<>1 and emp_EntryDate<{$enddate} and ((emp_stutas=-1 and emp_quitTime>{$startdate}) or emp_stutas<>-1)";
		if (!empty($postid)){
			$base_url .="&post={$postid}";
			$where.=" AND b.`emp_post`={$postid}";
		}
		if (!empty($name)){
			$base_url .="&searchname={$name}";
			$where.=" AND b.`emp_name` like '%{$name}%'";
		}
		$sql="SELECT b.emp_id as empid,b.emp_name,a.*,c.title FROM `emp` AS b LEFT JOIN (SELECT * FROM `emp_salary` WHERE `salary_year`={$year} AND `salary_month`={$month}) AS a ON a.emp_id=b.emp_id ".
			 "LEFT JOIN `employee_level` AS c ON b.emp_post=c.id Where {$where} ORDER BY emp_id";

		$List = $model->getListBySql(0,100, $sql);
		$total_item = count($List);
		$sql="SELECT Sum(salary_leave) as salary_leave,Sum(salary_leavemoney) as salary_leavemoney,Sum(salary_latemoney) as salary_latemoney,Sum(salary_base) as salary_base,Sum(salary_kmsubsid) as salary_kmsubsid,Sum(salary_ovkmsubsid) as salary_ovkmsubsid,Sum(salary_ovtime) as salary_ovtime,Sum(salary_allday) as salary_allday,Sum(salary_savefuel) as salary_savefuel,Sum(salary_travel) as salary_travel,Sum(salary_telsubsid) as salary_telsubsid,Sum(salary_ioll) as salary_ioll,Sum(salary_should) as salary_should,Sum(salary_borrow) as salary_borrow,Sum(salary_break) as salary_break,Sum(salary_social) as salary_social,Sum(salary_baoxiao) as salary_baoxiao,Sum(salary_other) as salary_other,Sum(salary_fact) as salary_fact,Sum(salary_tssubsid) as salary_tssubsid FROM `emp_salary` WHERE `salary_year`={$year} AND `salary_month`={$month} ";
		if (!empty($postid) || !empty($name)){
			$aa="1";
			if (!empty($postid)){
				$aa.=" AND `emp_post`={$postid}";
			}
			if (!empty($name)){
				$aa.=" AND `emp_name` like '%{$name}%'";
			}
			$sql.=" and emp_id in (Select emp_id From `emp` Where {$aa})";
		}
		$total_info= $model->getInfo(0,$sql);

		$view  = $this->createView("operator/finance/salary/list.html");
		$object = new stdClass();
		$object->list = $List;
		$object->total_info=$total_info;
		$object->total = $total_item;
		$object->year = $year;
		$object->month = $month;
		$object->postid = $postid;
		$object->postout = 0;//未发放
		$object->postlist=$model->getListBySql(0,1000,"SELECT `id`,`title` FROM `employee_level` WHERE is_active=1");
		
		$view->assign($object);
		$view->display();
	}
	function salarycreate()
	{
		$forward="list.php";
		$year=Request::getVar('searchyear','get');
		$month=Request::getVar('searchmonth','get');
		$op=Request::getVar('op','get');
		if (empty($year) || empty($month)){
			Response::redirect($forward,"请输入计算工资的月份!");
		}
		if ($op=="recreate"){//重新计算工资
			$pid=Request::getVar('pid','get');
			if (empty($pid)){
				Response::redirect($forward,"请选择需要重新计算工资的员工!");
			}
		}
		$forward.="?searchyear={$year}&searchmonth={$month}";
		$sdate=$year."-".$month."-01";
		if ($month==12){
			$edate=intval($year+1)."-01-01";
		}else{
			$edate=$year."-".intval($month+1)."-01";
		}
		$startdate=strtotime($sdate);
		$enddate=strtotime($edate);
		$eeedate=date("Y-m-d",strtotime("-1 days",$enddate));
		
		$model = $this->createModel("finance",dirname( __FILE__ ));
		if ($op=="recreateall"){//全部重新计算工资，先删除原先的
			$sql="DELETE FROM `emp_salary` WHERE `salary_year`={$year} AND `salary_month`={$month}";
			$model->update("","","",$sql);
		}
		$sql="SELECT * FROM `emp_lockpost` WHERE end_date='{$eeedate}' AND emp_EntryDate<{$enddate} AND (emp_stutas>=0 OR (emp_stutas=-1 AND emp_quitTime>={$startdate}))";
		if ($op=="recreate"){
			$sql.=" AND `emp_id` IN ({$pid})";
		}
		$emp_list=$model->getListBySql(0,500, $sql);
		if (empty($emp_list)){
			Response::redirect($forward,"该月份的人员职位尚未确定，请先到人员管理中去锁定人员职位!");
		}
		
		if ($op=="recreate"){//部分重新计算工资，先删除原先的
			$sql="DELETE FROM `emp_salary` WHERE `salary_year`={$year} AND `salary_month`={$month} AND `emp_id` IN ({$pid})";
			$model->update("","","",$sql);
		}

		foreach($emp_list as $key=>$val)
        {
        	$kmsubsid=$ovkmsubsid=$tssubsid=$ovtime=$travel=$telsubsid=$ioll=$borrow=$break=$baoxiao=$other=$leavemoney=0;
        	$base=$leaveday=$workday=$changepost=0;
        	
        	$tmpsdate=$val['emp_EntryDate']>$startdate? $val['emp_EntryDate'] : $startdate;
        	if ($val['emp_stutas']==-1){//已离职
        		if ($val['emp_quitTime']>$enddate){//离职日期大于月底日期
        			$tmpedate= $enddate;       
        		}else{
        			$tmpedate=$val['emp_quitTime'];
        		}
        	}else{
        		$tmpedate= $enddate;
        	}
        	$monthday= (int)(($enddate-$startdate)/(24*3600));
        	$workday = (int)(($tmpedate-$tmpsdate)/(24*3600));
        	//是否有转岗
        	$sql="SELECT * FROM emp_changepost WHERE change_date>={$startdate} AND change_date<{$enddate} AND emp_id=".$val['emp_id'];
        	$change_list=$model->getListBySql(0,200, $sql);
        	if ($change_list){//当月有转岗
        		$changepost=1;
        		//历史段
        		foreach($change_list as $key1=>$val1){
        			$tmpedate=$val1['change_date'];
        			$b=(int)(($tmpedate-$tmpsdate)/(24*3600));
        			$a=$val1['change_oldsalary'];
        			$base+=$a*$b/$monthday;
        			$emppost=$val1['change_oldpost'];
        			switch ($emppost){
        			case 1://临时司机
	        			$sql="Select Sum(b.settle_totalKm) as total From paiche as a Inner Join settle as b On a.paiche_id=b.settlePaicheId Where a.paiche_type=2 and a.paiche_recycle!=1 and a.paiche_status>0 and b.settle_endDate>={$tmpsdate} AND b.settle_endDate<{$tmpedate} and a.paicheDriver=".$val['emp_id'];
		        		$aa=$model->getTotal($sql);
	        			if ($aa<=8000){
	        				$kmsubsid+=$aa*$val['emp_kiloLs'];
	        			}else{
	        				$kmsubsid+=8000*$val['emp_kiloLs'];
	        				$ovkmsubsid+=($aa-8000)*$val['emp_overKmLs'];
	        			}
        				break;
        			case 2://长期司机
	        			$sql="SELECT * FROM paiche_month WHERE month_year={$year} AND month_month={$month} AND month_driver=".$val['emp_id'];
		        		$tmpinfo=$model->getInfo(0, $sql);
		        		if ($tmpinfo){
		        			$kmsubsid+=$tmpinfo['settle_totalKm']*$val['emp_kiloCq']*$b/$monthday;//按比例获取
		        			$ovkmsubsid+=$tmpinfo['settle_overKm']*$val['emp_overKmCq']*$b/$monthday;
		        			
		        			$ovtime+=$tmpinfo['settle_WorkMoney']*0.9*$b/$monthday;
		        			$travel+=$tmpinfo['settle_travelMoney']*0.9*$b/$monthday;
		        			$telsubsid+=$tmpinfo['settle_telMoney']*0.9*$b/$monthday;
		        			$ioll+=$tmpinfo['settle_advanceIoll']*$b/$monthday;
		        		}
        				break;
        			case 7://大客司机
	        			$sql="SELECT settle_trips FROM paiche_month WHERE month_year={$year} AND month_month={$month} AND month_driver=".$val['emp_id'];
		        		$tmpinfo=$model->getInfo(0, $sql);
		        		if ($tmpinfo){
	        				$tssubsid+=$tmpinfo['settle_trips']*$val['emp_tripKc'];
		        		}
        				break;
        			default:
        		
        			}
        			
        			$tmpsdate=$val1['change_date'];
        		}
        		//当前段
	        	if ($val['emp_stutas']==-1){//已离职
	        		if ($val['emp_quitTime']>$enddate){//离职日期大于月底日期
	        			$tmpedate= $enddate;
	        		}else{
	        			$tmpedate=$val['emp_quitTime'];
	        		}
	        	}else{
	        		$tmpedate= $enddate;
	        	}
        		$b=(int)(($tmpedate-$tmpsdate)/(24*3600));
        		$base+=$val['emp_basicSalary']*$b/$monthday;
        		
        		switch ($val['emp_post']){
        		case 1://临时司机
        			$sql="Select Sum(b.settle_totalKm) as total From paiche as a Inner Join settle as b On a.paiche_id=b.settlePaicheId Where a.paiche_type=2 and a.paiche_recycle!=1 and a.paiche_status>0 and b.settle_endDate>={$tmpsdate} AND b.settle_endDate<{$tmpedate} and a.paicheDriver=".$val['emp_id'];
	        		$aa=$model->getTotal($sql);
        			if ($aa<=8000){
        				$kmsubsid+=$aa*$val['emp_kiloLs'];
        			}else{
        				$kmsubsid+=8000*$val['emp_kiloLs'];
        				$ovkmsubsid+=($aa-8000)*$val['emp_overKmLs'];
        			}
        			break;
        		case 2://长期司机
	        		$sql="SELECT * FROM paiche_month WHERE month_year={$year} AND month_month={$month} AND month_driver=".$val['emp_id'];
	        		$tmpinfo=$model->getInfo(0, $sql);
	        		if ($tmpinfo){
	        			$kmsubsid+=$tmpinfo['settle_totalKm']*$val['emp_kiloCq']*$b/$monthday;
	        			$ovkmsubsid+=$tmpinfo['settle_overKm']*$val['emp_overKmCq']*$b/$monthday;
	        			$ovtime+=$tmpinfo['settle_WorkMoney']*0.9*$b/$monthday;
	        			$travel+=$tmpinfo['settle_travelMoney']*0.9*$b/$monthday;
	        			$telsubsid+=$tmpinfo['settle_telMoney']*0.9*$b/$monthday;
	        			$ioll+=$tmpinfo['settle_advanceIoll']*$b/$monthday;
	        		}
        			break;
        		case 7://大客司机
        			$sql="SELECT settle_trips FROM paiche_month WHERE month_year={$year} AND month_month={$month} AND month_driver=".$val['emp_id'];
	        		$tmpinfo=$model->getInfo(0, $sql);
	        		if ($tmpinfo){
        				$tssubsid+=$tmpinfo['settle_trips']*$val['emp_tripKc']*$b/$monthday;
	        		}
        			break;
        		default:
        		
        		}
        	}else{//当月无转岗
        		$base=$val['emp_basicSalary']*$workday/$monthday;
        		switch ($val['emp_post']){
        		case 1://临时司机
	        		//$sql="SELECT drive_startKilo,drive_endKilo FROM `paiche_drive` WHERE drive_date>={$startdate} AND drive_date<{$enddate} AND driveDriver=".$val['emp_id'];
	        		$sql="Select Sum(b.settle_totalKm) as total From paiche as a Inner Join settle as b On a.paiche_id=b.settlePaicheId Where a.paiche_type=2 and a.paiche_recycle!=1 and a.paiche_status>0 and b.settle_endDate>={$startdate} AND b.settle_endDate<{$enddate} and a.paicheDriver=".$val['emp_id'];
	        		$aa=$model->getTotal($sql);
        			if ($aa<=8000){
        				$kmsubsid=$aa*$val['emp_kiloLs'];
        				$ovkmsubsid=0;
        			}else{
        				$kmsubsid=8000*$val['emp_kiloLs'];
        				$ovkmsubsid=($aa-8000)*$val['emp_overKmLs'];
        			}
	        		
        			break;
        		case 2://长期司机
	        		$sql="SELECT * FROM paiche_month WHERE month_year={$year} AND month_month={$month} AND month_driver=".$val['emp_id'];
	        		$tmpinfo=$model->getInfo(0, $sql);
	        		if ($tmpinfo){
	        			$kmsubsid=$tmpinfo['settle_totalKm']*$val['emp_kiloCq']*$workday/$monthday;
	        			$ovkmsubsid=$tmpinfo['settle_overKm']*$val['emp_overKmCq']*$workday/$monthday;
	        			$ovtime=$tmpinfo['settle_WorkMoney']*0.9*$workday/$monthday;
	        			$travel=$tmpinfo['settle_travelMoney']*0.9*$workday/$monthday;
	        			$telsubsid=$tmpinfo['settle_telMoney']*0.9*$workday/$monthday;
	        			$ioll=$tmpinfo['settle_advanceIoll']*$workday/$monthday;
	        		}
        			break;
        		case 7://大客司机
        			$sql="SELECT settle_trips FROM paiche_month WHERE month_year={$year} AND month_month={$month} AND month_driver=".$val['emp_id'];
	        		$tmpinfo=$model->getInfo(0, $sql);
	        		if ($tmpinfo){
        				$tssubsid=$tmpinfo['settle_trips']*$val['emp_tripKc']*$workday/$monthday;
	        		}
        			break;
        		default:
        		
        		}
        	}
        	
        	//取请假天数和金额
        	$sql="SELECT SUM(leave_day) AS leave_day,SUM(leave_money) AS leave_money FROM `emp_leave` WHERE leave_isAgree=1 AND leave_date>={$startdate} AND leave_date<{$enddate} AND emp_id=".$val['emp_id'];
        	$info=$model->getInfo(0,$sql);
        	$leaveday=$info['leave_day'];
        	$leavemoney=$info['leave_money'];
        	//$other-=$info['leave_money'];
        	//取违章
        	$sql="SELECT SUM(breakrules_money) AS total FROM `breakrules` WHERE breakrules_end=1 AND breakrules_date>={$startdate} AND breakrules_date<{$enddate} AND breakrules_DriverID=".$val['emp_id'];
        	$break = $model->getTotal($sql);
        	//取借款
        	//$sql="SELECT SUM(borrow_money) AS total FROM `borrow` WHERE borrow_isAgree=1 AND borrow_isAccount=1 AND borrow_isReturn=0 AND borrow_date>={$startdate} AND borrow_date<{$enddate} AND borrow_emp=".$val['emp_id'];
			//$borrow = $model->getTotal($sql);
        	//取报销
        	//$sql="SELECT SUM(baoxiao_money) AS total FROM `baoxiao` WHERE baoxiao_item=2 AND baoxiao_isAgree=1 AND baoxiao_isOver=0 AND baoxiao_date>={$startdate} AND baoxiao_date<{$enddate} AND baoxiao_emp=".$val['emp_id'];
			//$baoxiao = $model->getTotal($sql);
			
        	$salary_should=$base+$val['emp_subsidy']+$kmsubsid+$ovkmsubsid+$tssubsid+$ovtime+$travel+$telsubsid+$ioll;
        	$object = new stdClass();		
			$object->emp_id = $val['emp_id'];
			$object->salary_year = $year;
			$object->salary_month = $month;
			$object->salary_changepost = $changepost;
			$object->salary_workday = $workday;
			$object->salary_leave = $leaveday;
			$object->salary_leavemoney=$leavemoney;//请假扣款
			$object->salary_base=$base;
			$object->salary_social = $val['emp_subsidy'];
			$object->salary_kmsubsid = $kmsubsid;//公里补贴
			$object->salary_ovkmsubsid = $ovkmsubsid;//超公里补贴
			$object->salary_tssubsid=$tssubsid;//趟数补贴
			$object->salary_ovtime = $ovtime;//加班工资
			$object->salary_travel = $travel; //差旅费
			$object->salary_telsubsid = $telsubsid; //电话费
			$object->salary_ioll = $ioll;//垫付路桥费
			$object->salary_should = $salary_should; //应发
			$object->salary_borrow = $borrow;//借款
			$object->salary_break = $break;//违章
			$object->salary_baoxiao = $baoxiao;//报销
			$object->salary_other = $other;//其他
			$object->salary_fact = $salary_should-$leavemoney-$borrow-$break+$baoxiao+$other;//实发
	        if ($model->store($object,"emp_salary")){
			}else{
				$this->redirect($forward,"添加失败");
			}
		
		
        }
        $this->redirect($forward,"工资计算成功");
	}
	function salarymodify()
	{
		$pid = Request::getVar('pid','get');
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$sql="SELECT a.*,b.emp_name,c.title FROM `emp_salary` AS a LEFT JOIN `emp` AS b ON a.emp_id=b.emp_id ".
			 "LEFT JOIN `employee_level` AS c ON b.emp_post=c.id WHERE `salary_id`={$pid}";
		$Info = $model->getInfo(0,$sql);
		        
		$object = new stdClass();
		$object->list = $Info;
		$object->task = "salaryupdate";
		        
        $view  = $this->createView("operator/finance/salary/create.html");
		$view->assign($object);
		$view->display();
	}
	function salaryupdate()
	{
		//$year=Request::getVar('salary_year','post');
		//$month=Request::getVar('salary_month','post');
		//$forward="list.php?searchyear={$year}&searchmonth={$month}";
		$uid = Request::getVar('uid','post');
		if(empty($uid))
		{
			$object = new stdClass();
			$object->result = "Need id!";
			$view  = $this->createView("operator/business/result.html");
			$view->assign($object);
			$view->display();
			exit();
		}
		$model = $this->createModel("finance",dirname( __FILE__ ));
		
		$object = new stdClass();		
		$object->salary_id = $uid;
		$object->salary_kmsubsid = Request::getVar('salary_kmsubsid','post');//公里补贴
		$object->salary_ovkmsubsid = Request::getVar('salary_ovkmsubsid','post');//超公里补贴
		$object->salary_tssubsid = Request::getVar('salary_tssubsid','post');//趟数补贴
		$object->salary_ovtime = Request::getVar('salary_ovtime','post');
		//$object->salary_allday = Request::getVar('salary_allday','post');
		//$object->salary_savefuel = Request::getVar('salary_savefuel','post');
		$object->salary_travel = Request::getVar('salary_travel','post'); //差旅费
		$object->salary_telsubsid = Request::getVar('salary_telsubsid','post'); //电话费
		$object->salary_ioll = Request::getVar('salary_ioll','post');//垫付路桥费
		$object->salary_should = Request::getVar('salary_should','post'); //应发
		$object->salary_latemoney = Request::getVar('salary_latemoney','post');//迟到扣款
		$object->salary_borrow = Request::getVar('salary_borrow','post');//借款
		$object->salary_break = Request::getVar('salary_break','post');//违章
		//$object->salary_baoxiao = Request::getVar('salary_baoxiao','post');//报销
		$object->salary_other = Request::getVar('salary_other','post');
		$object->salary_remarks = Request::getVar('salary_remarks','post');
		$object->salary_fact = Request::getVar('salary_fact','post');//实发
		if ($model->update($object,'salary_id',"emp_salary")){
			$re=true;
		}else{
			$re=false;
		}
		$object = new stdClass();
		$object->result = $re ? "保存成功！":"保存失败，返回重试！";
		$view  = $this->createView("operator/business/result.html");
		$view->assign($object);
		$view->display();
	}
	function exportsalary()
	{
		require_once("Excel/Writer.php");
		$year=Request::getVar('searchyear','get');
		$month=Request::getVar('searchmonth','get');
		$postid=Request::getVar('post','get');
		$model = $this->createModel("finance",dirname( __FILE__ ));
		
		$where="a.`salary_year`={$year} AND a.`salary_month`={$month}";
		if (!empty($postid)){
			$where.=" AND b.`emp_post`={$postid}";
		}
		$sql="SELECT a.*,b.emp_name,c.title FROM `emp_salary` AS a LEFT JOIN `emp` AS b ON a.emp_id=b.emp_id ".
			 "LEFT JOIN `employee_level` AS c ON b.emp_post=c.id WHERE {$where}";
		$List = $model->getListBySql(0,300, $sql);
		
		$workbook = new Spreadsheet_Excel_Writer();        
        $workbook->send($year."年".$month."月份工资清单.xls");
        $worksheet = $workbook->addWorksheet($year."-".$month);
        $worksheet->mergeCells(0,0,0,18);
        $worksheet->write(0, 0, "".iconv("UTF-8","GBK//IGNORE",$year."年".$month."月份工资清单")."");
        $worksheet->write(1, 0, "".iconv("UTF-8","GBK//IGNORE","姓名")."");
        $worksheet->write(1, 1, "".iconv("UTF-8","GBK//IGNORE","职位")."");
        $worksheet->write(1, 2, "".iconv("UTF-8","GBK//IGNORE","底薪")."");
		$worksheet->write(1, 3, "".iconv("UTF-8","GBK//IGNORE","公里补贴")."");
		$worksheet->write(1, 4, "".iconv("UTF-8","GBK//IGNORE","超公里补贴")."");
		$worksheet->write(1, 5, "".iconv("UTF-8","GBK//IGNORE","加班工资")."");
		$worksheet->write(1, 6, "".iconv("UTF-8","GBK//IGNORE","全勤奖")."");
		$worksheet->write(1, 7, "".iconv("UTF-8","GBK//IGNORE","节油奖")."");
		$worksheet->write(1, 8, "".iconv("UTF-8","GBK//IGNORE","差旅费")."");
		$worksheet->write(1, 9, "".iconv("UTF-8","GBK//IGNORE","电话费")."");
		$worksheet->write(1, 10, "".iconv("UTF-8","GBK//IGNORE","垫付路桥费")."");
		$worksheet->write(1, 11, "".iconv("UTF-8","GBK//IGNORE","应发工资")."");
		$worksheet->write(1, 12, "".iconv("UTF-8","GBK//IGNORE","借款")."");
		$worksheet->write(1, 13, "".iconv("UTF-8","GBK//IGNORE","违章")."");
		$worksheet->write(1, 14, "".iconv("UTF-8","GBK//IGNORE","社保补贴")."");
		$worksheet->write(1, 15, "".iconv("UTF-8","GBK//IGNORE","报销")."");
		$worksheet->write(1, 16, "".iconv("UTF-8","GBK//IGNORE","其他")."");
		$worksheet->write(1, 17, "".iconv("UTF-8","GBK//IGNORE","备注")."");
		$worksheet->write(1, 18, "".iconv("UTF-8","GBK//IGNORE","实发工资")."");

        $r=2;
        if(is_array($List)){
            foreach($List as $item)
            {
            	$worksheet->writeString($r, 0, iconv("UTF-8","GBK//IGNORE",$item["emp_name"]));
			  	$worksheet->writeString($r, 1, iconv("UTF-8","GBK//IGNORE",$item["title"]));
			  	$worksheet->writeString($r, 2, iconv("UTF-8","GBK//IGNORE",$item["salary_base"]));	  	
				$worksheet->writeString($r, 3, iconv("UTF-8","GBK//IGNORE",$item["salary_kmsubsid"]));
			    $worksheet->writeString($r, 4, iconv("UTF-8","GBK//IGNORE",$item["salary_ovkmsubsid"]));
			    $worksheet->writeString($r, 5, iconv("UTF-8","GBK//IGNORE",$item["salary_ovtime"]));
			    $worksheet->writeString($r, 6, iconv("UTF-8","GBK//IGNORE",$item["salary_allday"]));
				$worksheet->writeString($r, 7, iconv("UTF-8","GBK//IGNORE",$item["salary_savefuel"]));
				$worksheet->writeString($r, 8, iconv("UTF-8","GBK//IGNORE",$item["salary_travel"]));
				$worksheet->writeString($r, 9, iconv("UTF-8","GBK//IGNORE",$item["salary_telsubsid"]));
				$worksheet->writeString($r, 10, iconv("UTF-8","GBK//IGNORE",$item["salary_ioll"]));
				$worksheet->writeString($r, 11, iconv("UTF-8","GBK//IGNORE",$item["salary_should"]));
				$worksheet->writeString($r, 12, iconv("UTF-8","GBK//IGNORE",$item["salary_borrow"]));
				$worksheet->writeString($r, 13, iconv("UTF-8","GBK//IGNORE",$item["salary_break"]));
				$worksheet->writeString($r, 14, iconv("UTF-8","GBK//IGNORE",$item["salary_social"]));
				$worksheet->writeString($r, 15, iconv("UTF-8","GBK//IGNORE",$item["salary_baoxiao"]));
				$worksheet->writeString($r, 16, iconv("UTF-8","GBK//IGNORE",$item["salary_other"]));
				$worksheet->writeString($r, 17, iconv("UTF-8","GBK//IGNORE",$item["salary_remarks"]));
				$worksheet->writeString($r, 18, iconv("UTF-8","GBK//IGNORE",$item["salary_fact"]));
                $r++;
            }
        }        
        $workbook->close();
	}
	function salaryissue()
	{
		$forward="list.php";
		$year=Request::getVar('searchyear','get');
		$month=Request::getVar('searchmonth','get');
		if (empty($year) || empty($month)){
			Response::redirect($forward,"请输入发放工资的月份!");
		}
		$forward.="?searchyear={$year}&searchmonth={$month}";
		$sdate=$year."-".$month."-01";
		if ($month==12){
			$edate=intval($year+1)."-01-01";
		}else{
			$edate=$year."-".intval($month+1)."-01";
		}
		$startdate=strtotime($sdate);
		$enddate=strtotime($edate);
		
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$sql="SELECT a.* FROM `emp_salary` AS a WHERE a.`salary_year`={$year} AND a.`salary_month`={$month}";
		
		$List = $model->getListBySql(0,1000, $sql);
		foreach ($List as $item){
			$empid=$item['emp_id'];
			if ($item['salary_borrow']>0){//更新借款
				$sql="UPDATE `borrow` SET borrow_isReturn=1,borrow_Returnmoney=borrow_money WHERE borrow_isAgree=1 AND borrow_isAccount=1 AND borrow_isReturn=0 AND borrow_date>={$startdate} AND borrow_date<{$enddate} AND borrow_emp={$empid}";
				$model->update("","","",$sql);
			}
			if ($item['salary_baoxiao']>0){//更新报销
				$sql="UPDATE `baoxiao` SET baoxiao_isOver=1 WHERE baoxiao_item=2 AND baoxiao_isAgree=1 AND baoxiao_isOver=0 AND baoxiao_date>={$startdate} AND baoxiao_date<{$enddate} AND baoxiao_emp={$empid}";
				$model->update("","","",$sql);
			}
			
			
		}		
		//更新已发放状态
		$sql="UPDATE `emp_salary` SET salary_putout=1 WHERE `salary_year`={$year} AND `salary_month`={$month}";
		$model->update("","","",$sql);
		$this->redirect($forward,"{$year}年{$month}月份工资发放确认成功");
	}
	
	function posbusilist(){
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		
		$base_url = "list.php";
		$per_page = 10;
		
		$model = $this->createModel("finance",dirname( __FILE__ ));
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		
		$sql="SELECT a.*,b.paiche_contractNum FROM `account_log` AS a ".
			 "LEFT JOIN `paiche` AS b ON a.paiche_id=b.paiche_id ".
			 "WHERE a.`payments_id`=4 ORDER BY a.`add_time` DESC";
		
		$List = $model->getListBySql($start,$per_page, $sql);
		$sql="SELECT COUNT(*) AS total FROM `account_log` AS a WHERE a.`payments_id`=4";
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
		$view  = $this->createView("operator/finance/pos/list.html");
		
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();		
		$object->list = $List;
		$object->total = $total_item;
		$view->assign($object);
		$view->display();
	}
	function posbusi()
	{
		$uid = Request::getVar('uid','get');
				
		$model = $this->createModel("finance",dirname( __FILE__ ));
		$sql="SELECT * FROM `account_log` WHERE `id`={$uid}";
		$Info = $model->getInfo(0,$sql);
		
		$object = new stdClass();
		$object->list = $Info;
		$object->task = "posbusi_accept";
        
        $view  = $this->createView("operator/finance/pos/create.html");
		$view->assign($object);
		$view->display();
	}
	function posbusi_accept()
	{
		$uid = Request::getVar('uid','post');
		if(empty($uid))
		{
			$object = new stdClass();
			$object->result = "参数错误，返回重试";
			$view  = $this->createView("operator/business/result.html");
			$view->assign($object);
			$view->display();
			exit();
		}
				
		$model = $this->createModel("finance",dirname( __FILE__ ));
				
		$fee=Request::getVar('fee','post');
		$cost=Request::getVar('cost','post');
		
		$object = new stdClass();
		$object->id = $uid;
		$object->fee = empty($fee)? 0 : $fee;
		$object->cost = empty($cost)? 0 : $cost;
		$object->profit = (empty($fee)? 0 : $fee) - (empty($cost)? 0 : $cost);
		
		if ($model->update($object,"id","account_log")){
			$re="保存成功！";
		}else{
			$re="保存失败，返回重试！";
		}
		
		$object = new stdClass();
		$object->result = $re ;
		$view  = $this->createView("operator/business/result.html");
		$view->assign($object);
		$view->display();
	}
}
?>