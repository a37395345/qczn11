<?php
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('operator.navi.admincontroller');
import('operator.navi.privilegehelper');
import('imag.fusecookie');

error_reporting(E_ERROR);

class FittingController extends AdminController
{
	function __construct($config = array())
	{
		parent::__construct($config);
		
		$this->registerTask( 'list','plist');
		$this->registerTask( 'applist','applist');
		$this->registerTask( 'outlist','outlist');
		$this->registerTask( 'create','create');
		$this->registerTask( 'insert','insert');
		$this->registerTask( 'modify','modify');
		$this->registerTask( 'update','update');
		$this->registerTask( 'delete','delete');
		
		$this->registerTask( 'out','out');
		$this->registerTask( 'out_accept','out_accept');
		
		$this->registerTask( 'check','check');
		$this->registerTask( 'check_accept','check_accept');
		
		$this->registerTask( 'account','account');
		$this->registerTask( 'account_accept','account_accept');
	}
	
	function display(){
		echo "display";
	}
	
	function plist()
	{
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$base_url = "list.php";
		$per_page = 10;
		$search_startDate=Request::getVar('search_startDate','get');
		$search_endDate=Request::getVar('search_endDate','get');
		$title=Request::getVar('title','get');
		
		$model = $this->createModel("fitting",dirname( __FILE__ ));
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		$where=" `fitting_innum`-`fitting_outnum`>0 ";
		if(!empty($search_startDate)){
			$base_url.="&search_startDate={$search_startDate}";
            $where .=" AND fitting_indate>='".strtotime($search_startDate)."'";
        }
		if(!empty($search_endDate)){
			$base_url.="&search_endDate={$search_endDate}";
            $where .=" AND fitting_indate<='".strtotime($search_endDate." 23:59:59")."'";
        }
		if(!empty($title)){
			$base_url.="&title={$title}";
            $where .=" AND fitting_name like '%{$title}%'";
        }
		
		$sql="SELECT * FROM `fitting` WHERE {$where} ORDER BY `fitting_id` DESC";
		$List = $model->getListBySql($start,$per_page, $sql);
		$sql="SELECT COUNT(*) AS total FROM `fitting` WHERE {$where}";
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
		$view  = $this->createView("operator/fitting/list.html");
		
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();		
		$object->list = $List;
		$object->total = $total_item;
		$view->assign($object);
		$view->display();
		
	}
	function applist()
	{
		$op = Request::getVar('op','get');
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$base_url = "list.php?task=applist";
		$per_page = 10;
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		
		$model = $this->createModel("fitting",dirname( __FILE__ ));
		$where="1";
		if ($op=="check") $where.=" AND fitting_status=0";
		if ($op=="account") $where.=" AND fitting_status=1";
		$sql="SELECT * FROM `fitting_apply` WHERE {$where} ORDER BY `fitting_appid` DESC";
		$List = $model->getListBySql($start,$per_page, $sql);
		$sql="SELECT COUNT(*) AS total FROM `fitting_apply` WHERE {$where}";
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
				
		$view  = $this->createView("operator/fitting/applist.html");
		
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();
		$object->list = $List;
		$object->total = $total_item;
		$object->op = $op;
		$view->assign($object);
		$view->display();
	}
	function outlist()
	{
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$base_url = "list.php?task=outlist";
		$per_page = 10;
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		
		$model = $this->createModel("fitting",dirname( __FILE__ ));
		$where="1";
		$sql="SELECT DISTINCT `fitting_outcode`, `fitting_outdate`,`fitting_outman` FROM `fitting_out` WHERE {$where} ORDER BY `fitting_outid` DESC";
		$List = $model->getListBySql($start,$per_page, $sql);
		$total_item = count($List);
		
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
				
		$view  = $this->createView("operator/fitting/outlist.html");
		
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();
		$object->list = $List;
		$object->total = $total_item;
		$view->assign($object);
		$view->display();
	}
	function create()
	{	     
		$object = new stdClass();
		$object->task = "insert";
		$object->total_num = 0;
		$object->total_sum = 0;
        		
        $view  = $this->createView("operator/fitting/create.html");
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
		$arr_name=Request::getVar('fitting_name','post');
		$arr_brand=Request::getVar('fitting_brand','post');
		$arr_model=Request::getVar('fitting_model','post');
		$arr_num=Request::getVar('fitting_num','post');
		$arr_unit=Request::getVar('fitting_unit','post');
		$arr_price=Request::getVar('fitting_price','post');
		$arr_sum=Request::getVar('fitting_sum','post');
		$arr_remarks=Request::getVar('fitting_remark','post');
		$re=true;
		$model = $this->createModel("fitting",dirname( __FILE__ ));
		$empname=$model->getEmpName($_SESSION['a_uid']);
		
		$code="F".date('YmdHis',time());
		$object = new Object();
		$object->fitting_appcode = $code;
	  	$object->fitting_num = Request::getVar('total_num','post');
	  	$object->fitting_sum = Request::getVar('total_sum','post');
	  	$object->fitting_appman = $empname;
	  	$object->fitting_appdate = time();
	  	$rec_id=$model->store($object,"fitting_apply");
	  	
		if ($rec_id>0){
			for($i=0;$i<count($arr_name);$i++){
				if ($arr_name[$i]!=""){//有效
					$object = new Object();
					$object->fitting_appid = $rec_id;
					$object->fitting_name = $arr_name[$i];
					$object->fitting_brand = $arr_brand[$i];
				  	$object->fitting_model = $arr_model[$i];
				  	$object->fitting_innum = $arr_num[$i];
				  	$object->fitting_unit = $arr_unit[$i];
				  	$object->fitting_price = $arr_price[$i];
				  	$object->fitting_sum = $arr_sum[$i];
				  	$object->fitting_indate = time();
				  	$object->fitting_remark = $arr_remarks[$i];
					if ($model->store($object)){
					}else{
						$re=false;
					}
				}
			}
		}else{
			$re=false;
		}
		if ($re){
			Components::save_admin_log("添加了配件采购申请，ID：".$rec_id);
			$this->redirect($forward,"添加成功");
		}
		else
		{
			$this->redirect($forward,"添加失败");
		}
	}
	function modify()
	{
		$fid = Request::getVar('uid','get');
		$model = $this->createModel("fitting",dirname( __FILE__ ));
		$sql="SELECT * FROM `fitting` WHERE `fitting_appid`={$fid}";
		$List = $model->getListBySql(0,1000, $sql);
		$view  = $this->createView("operator/fitting/create.html");
		$object = new stdClass();
		$object->list = $List;
		$object->task = "update";
		$object->fid = $fid;
		$object->total_num = 0;
		$object->total_sum = 0;
		
		$view->assign($object);
		$view->display();
	}
	function update()
	{
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
            $forward = "list.php?task=applist";
		}
		$fid = Request::getVar('fid','post');
		$model = $this->createModel("fitting",dirname( __FILE__ ));
		$re=true;
		
		$object = new Object();
		$object->fitting_appid = $fid;
	  	$object->fitting_num = Request::getVar('total_num','post');
	  	$object->fitting_sum = Request::getVar('total_sum','post');
		if ($model->update($object,"fitting_appid","fitting_apply")){
		}else{
			$re=false;
		}
		if ($re){
			$arr_rec=Request::getVar('fitting_id','post');//配件记录
			$arr_name=Request::getVar('fitting_name','post');
			$arr_brand=Request::getVar('fitting_brand','post');
			$arr_model=Request::getVar('fitting_model','post');
			$arr_num=Request::getVar('fitting_num','post');
			$arr_unit=Request::getVar('fitting_unit','post');
			$arr_price=Request::getVar('fitting_price','post');
			$arr_sum=Request::getVar('fitting_sum','post');
			$arr_remarks=Request::getVar('fitting_remark','post');
			
			for($i=0;$i<count($arr_rec);$i++){
				$object = new Object();
	    		$object->fitting_id = $arr_rec[$i];
		        $object->fitting_name = $arr_name[$i];
				$object->fitting_brand = $arr_brand[$i];
			  	$object->fitting_model = $arr_model[$i];
			  	$object->fitting_innum = $arr_num[$i];
			  	$object->fitting_unit = $arr_unit[$i];
			  	$object->fitting_price = $arr_price[$i];
			  	$object->fitting_sum = $arr_sum[$i];
			  	$object->fitting_remark = $arr_remarks[$i];
		  		
				if ($model->update($object,"fitting_id","fitting")){
				}else{
					$re=false;
				}
			}
		}
		if ($re){
			Components::save_admin_log("修改了配件采购申请，ID：".$fid);
			$this->redirect($forward,"修改成功");
		}
		else
		{
			$this->redirect($forward,"修改失败");
		}
	}
	function delete()
	{
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
            $forward = "list.php?task=applist";
		}
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("fitting",dirname( __FILE__ ));
		$sql1 = "DELETE FROM `fitting_apply` WHERE `fitting_appid`='{$uid}'";
		$sql2 = "DELETE FROM `fitting` WHERE `fitting_appid`='{$uid}'";
		if ($model->update("","","",$sql1) && $model->update("","","",$sql2)){
			Components::save_admin_log("删除了ID为".$uid."的配件采购申请");
			$this->redirect($forward,"删除成功");
		}
	}

	function out()
	{
		$fid = Request::getVar('uid','get');
		$model = $this->createModel("fitting",dirname( __FILE__ ));
		
		$sql="SELECT * FROM `fitting` WHERE fitting_id IN ({$fid}) ORDER BY `fitting_id`";
		$List = $model->getListBySql(0,1000, $sql);
		$view  = $this->createView("operator/fitting/out.html");
		$object = new stdClass();
		$object->list = $List;
		$object->fid = $fid;
		
		$view->assign($object);
		$view->display();
	}
	function out_accept()
	{
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
            $forward = "list.php";
		}
		$model = $this->createModel("fitting",dirname( __FILE__ ));
		$re=true;
		$arr_rec=Request::getVar('fitting_id','post');//配件记录
		//$arr_now_num=Request::getVar('fitting_num','post');//库存数量
		$arr_num=Request::getVar('out_num','post');//领用数量
		$arr_remarks=Request::getVar('out_remark','post');
		$code="L".date('YmdHis',time());
		$empname=$model->getEmpName($_SESSION['a_uid']);
		
		for($i=0;$i<count($arr_rec);$i++){
			$tmpnum=empty($arr_num[$i])?0 : $arr_num[$i];
			if ($tmpnum>0){
				$object = new Object();
	    		$object->fitting_id = $arr_rec[$i];
		        $object->fitting_outnum = $arr_num[$i];
		        $object->fitting_outdate =time();
		        
		        $object1 = new Object();
				$object1->fitting_outcode = $code;
			  	$object1->fitting_outman = $empname;
			  	$object1->fitting_outdate = time();
			  	$object1->fitting_id = $arr_rec[$i];
			  	$object1->fitting_outnum = $arr_num[$i];
		  		$object1->fitting_remark = $arr_remarks[$i];
		  		
				if ($model->update($object,"fitting_id","fitting") && $model->store($object1,"fitting_out")){
				}else{
					$re=false;
				}
			}
		}
		if ($re){
			$this->redirect($forward,"配件领用成功");
		}else{
			$this->redirect($forward,"配件领用失败");
		}
	}

	function check()
	{
		$fid = Request::getVar('fid','get');
		
		$model = $this->createModel("fitting",dirname( __FILE__ ));
		
		$sql="SELECT * FROM `fitting` WHERE `fitting_appid` IN ({$fid}) ORDER BY `fitting_id`";
		$List = $model->getListBySql(0,1000, $sql);
		
		$object = new stdClass();
		$object->list = $List;
		$object->fid = $fid;
		$object->total = 0;
        
        $view  = $this->createView("operator/fitting/check.html");
		$view->assign($object);
		$view->display();
	}
	function check_accept()
	{
		$fid = Request::getVar('fid','post');
		
		$model = $this->createModel("fitting",dirname( __FILE__ ));
		$re=true;
		$sql="UPDATE `fitting_apply` SET `fitting_status`=1 WHERE `fitting_appid` IN ({$fid})";
		if ($model->update("","","",$sql)){
		}else{
			$re=false;
		}
		if ($re){
			$arr_rec=Request::getVar('fitting_id','post');//配件记录
			$arr_num=Request::getVar('fitting_innum','post');
			$arr_price=Request::getVar('fitting_price','post');
			
			for($i=0;$i<count($arr_rec);$i++){
				$object = new Object();
	    		$object->fitting_id = $arr_rec[$i];
		        $object->fitting_price =$arr_price[$i];
		        $object->fitting_sum = $arr_num[$i]*$arr_price[$i];
		        $object->fitting_status = 1;
		  		
				if ($model->update($object,"fitting_id","fitting")){
				}else{
					$re=false;
				}
			}
		}
		$object = new stdClass();
		$object->result = $re ? "配件采购申请审批成功！":"配件采购申请审批失败，返回重试！";
		$view  = $this->createView("operator/business/result.html");
		$view->assign($object);
		$view->display();
		
	}
	function account()
	{
		$fid = Request::getVar('fid','get');

		$model = $this->createModel("list",dirname(dirname( __FILE__ ))."\business");		
		$fields="`payment_id`,`payment_name`,`payment_fee`";
		$payments_list=$model->getEmpList($fields," AND payment_recycle!=1","payments");
		$fields="`bank_id`,`bank_name`";
		$bank_list=$model->getEmpList($fields," AND bank_recycle!=1","banks");
		
		$model = $this->createModel("fitting",dirname( __FILE__ ));
		
		$sql="SELECT * FROM `fitting` WHERE `fitting_appid` IN ({$fid}) ORDER BY `fitting_id`";
		$List = $model->getListBySql(0,1000, $sql);
		
		$object = new stdClass();
		$object->list = $List;
		$object->fid = $fid;
		$object->paymentslist = $payments_list;
		$object->banklist = $bank_list;
		$object->total = 0;
        
        $view  = $this->createView("operator/fitting/account.html");
		$view->assign($object);
		$view->display();
	}
	function account_accept()
	{
		$fid = Request::getVar('fid','post');
		$payments=Request::getVar('payments','post');
		$money=Request::getVar('total_sum','post');
		if (empty($money)) $money=0;
		
		$model = $this->createModel("fitting",dirname( __FILE__ ));
		$re=true;
		$sql="UPDATE `fitting_apply` SET `fitting_status`=2 WHERE `fitting_appid` IN ({$fid})";
		if ($model->update("","","",$sql)){
		}else{
			$re=false;
		}
		
		if ($re && !empty($payments) && $money>0){
			$bank=Request::getVar('bank','post');
					    
			$object2 = new Object();
	    	$object2->paiche_id = 0;
		    $object2->payments_id = $payments;
		    $object2->bank_id = $bank;
		    $object2->money = -1*$money;
		    $object2->add_time = time();
		    $object2->name = "配件采购审批付款";
		    
			if ($model->store($object2,"account_log")){
			}else{
				$re=false;
			}
		}
		$object = new stdClass();
		$object->result = $re ? "配件采购申请账务处理成功！":"配件采购申请账务处理失败，返回重试！";
		$view  = $this->createView("operator/business/result.html");
		$view->assign($object);
		$view->display();
	}
}
