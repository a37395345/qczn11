<?php

import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('operator.navi.admincontroller');
import('operator.navi.privilegehelper');
import('imag.fusecookie');
import('imag.filesystem.fusefile');
import('imag.filesystem.filesystem');
import('imag.image.uploader');

error_reporting(E_ERROR);

class BaseController extends AdminController
{
	function __construct($config = array())
	{
		parent::__construct($config);
		
//		if(!($this->checkPrivilege("system"))){
//			$this->redirect("/admincp/empty.php","您没有权限访问该页面！");
//		}
				
		$this->registerTask( 'insert','insert');
		$this->registerTask( 'update','update');
		$this->registerTask( 'search','searchList');
		$this->registerTask( 'add','add');
        
        $this->registerTask( 'clientlist','clientlist');
        $this->registerTask( 'clientexport','clientexport');
        $this->registerTask( 'brolist','brolist');
        $this->registerTask( 'chargelist','chargelist');
        $this->registerTask( 'paymentlist','paymentlist');
        $this->registerTask( 'banklist','banklist');
        $this->registerTask( 'itemlist','itemlist');
        
        $this->registerTask( 'clientcreate','clientcreate');
        $this->registerTask( 'clientmodify','clientmodify');
        $this->registerTask( 'clientdelete','clientdelete');
		$this->registerTask( 'brothercreate','brothercreate');
		$this->registerTask( 'brothermodify','brothermodify');
        $this->registerTask( 'brotherdelete','brotherdelete');
        $this->registerTask( 'chargecreate','chargecreate');
        $this->registerTask( 'chargemodify','chargemodify');
        $this->registerTask( 'chargedelete','chargedelete');
        $this->registerTask( 'paymentcreate','paymentcreate');
        $this->registerTask( 'paymentmodify','paymentmodify');
        $this->registerTask( 'paymentdelete','paymentdelete');
        $this->registerTask( 'bankcreate','bankcreate');
        $this->registerTask( 'bankmodify','bankmodify');
        $this->registerTask( 'bankdelete','bankdelete');
        $this->registerTask( 'itemcreate','itemcreate');
        $this->registerTask( 'itemmodify','itemmodify');
        $this->registerTask( 'itemdelete','itemdelete');
        $this->registerTask( 'price','price');
		$this->registerTask( 'price_acc','price_acc');
		$this->registerTask( 'setywy','setywy');
		$this->registerTask( 'add_lainxi','add_lainxi');
		$this->registerTask( 'insert_lainxi','insert_lainxi');
		$this->registerTask( 'delete_lianxi','delete_lianxi');
		$this->registerTask( 'index','index');
	
		
		
	}
	
	function display(){
		echo "display";
	}
	//explode(",",$newsInfo['client_typeid']);
	function index(){
		$model = $this->createModel("base",dirname( __FILE__ ));
		$sql="Select * from client where client_recycle!=1";
		$list=$model->getListBySql($sql);
		

		$sql_a="Select * from client_type";
		$list_a=$model->getListBySql($sql_a);

		for($i=0;$i<count($list);$i++){
			$list[$i]['client_typeid']=explode(",",$list[$i]['client_typeid']);
		}

		$index_a=0;
		for($i=0;$i<5;$i++){
			$index=0;
			for($j=0;$j<count($list);$j++){
				if(in_array((int)$list_a[$i]['id'],$list[$j]['client_typeid'])){
					$index=$index+1;
					//print_r('aab');
				}
			}
			
			$list_a[$i]['index']=$index;
			
		}
		$object = new stdClass();
		$object->list=$list_a;
		$object->count=count($list);
		$view= $this->createView("operator/base/index.html");
		$view->assign($object);
		$view->display();
	}
	//删除联系人
	function delete_lianxi(){
		
		$req=2;
		$id = Request::getVar('id','post');
		$model = $this->createModel("base",dirname( __FILE__ ));
		$sql = "DELETE FROM `client_lianxi` WHERE id={$id}";
		if($model->delete_a($sql)){
			$req=1;
		}
		echo $req;
	}

	//添加联系人界面
	function add_lainxi(){
		$model = $this->createModel("base",dirname( __FILE__ ));
		$client_id= Request::getVar('client_id','get');
		$id= Request::getVar('id','get');
		$sql="Select * from client_lianxi where client_id={$client_id}";
		$list=$model->getListBySql($sql);
		$list_a=null;
		if(!empty($id)){
			for($i=0;$i<count($list);$i++){
				if($list[$i]['id']==$id){
					$list_a=$list[$i];break;
				}
			}
		}
		
		$object = new stdClass();
		$object->list=$list;
		$object->list_a=$list_a;
		$object->client_id=$client_id;
		$view= $this->createView("operator/base/add_lianxi.html");
		$view->assign($object);
		$view->display();
	}
	//添加或修改联系人
	function insert_lainxi(){
		$id = Request::getVar('id','post');
		$client_id = Request::getVar('client_id','post');
		$name = Request::getVar('name','post');
		$phone = Request::getVar('phone','post');
		$zhiwei = Request::getVar('zhiwei','post');
		$beizhu = Request::getVar('beizhu','post');

		$object = new stdClass();
		$object->id=$id;
		$object->client_id=$client_id;
		$object->name=$name;
		$object->phone=$phone;
		$object->zhiwei=$zhiwei;
		$object->beizhu=$beizhu;

		$model = $this->createModel("base",dirname( __FILE__ ));
		$req=5;
		if(!empty($id)){
			if($model->update_a($object,'client_lianxi',"id")){
				$req=1;
			}else{
				$req=2;
			}
		}else{
			if($model->store($object,'client_lianxi')){
				$req=1;
			}else{
				$req=2;
			}
		}

		
		echo $req;
	}
	
	

	function clientlist(){
	

		$this->personal_list('client');
	}
	function brolist(){
		$this->personal_list('brother');
	}
	function chargelist(){
		$this->personal_list('charge');
	}
	function paymentlist(){
		$this->personal_list('payment');
	}
	function banklist(){
		$this->personal_list('bank');
	}
	function itemlist(){
		$this->personal_list('item');
	}
	



	function personal_list($tasktype){

		$nowuserid=$_SESSION['user_id'];
		$p = Request::getVar('p','get');
		
        $title          = Request::getVar('title');
        
        $table=$this->getTableName($tasktype);
		$model = $this->createModel("base",dirname( __FILE__ ));	
		//var_dump($where);
		if(empty($p)){$p=1;}
		$base_url = "list.php?/title={$title}";
		$per_page = 20;

        switch ($tasktype)
		{
			case "client":
				$where = " AND a.client_recycle!=1";
		        if(!empty($title)){
		            $where .=" AND a.client_name LIKE '%{$title}%'";
		            $base_url.="&title={$title}";
		        }

		        
		        $client_Mlinker=Request::getVar('client_Mlinker','get');
		        if(!empty($client_Mlinker)){
		            $where .=" AND a.client_Mlinker LIKE '%{$client_Mlinker}%'";
		            $base_url.="&client_Mlinker={$client_Mlinker}";
		        }

		        $client_Mphone=Request::getVar('client_Mphone','get');
		        if(!empty($client_Mphone)){
		            $where .=" AND a.client_Mphone = '{$client_Mphone}'";
		            $base_url.="&client_Mphone={$client_Mphone}";
		        }



		        $order="a.client_id desc";
		        break;
			case "brother":
				$where = " AND a.bro_recycle!=1";
		        if(!empty($title)){
		            $where .=" AND a.bro_name LIKE '%{$title}%'";
		        }
		        $order="a.bro_id desc";
				break;
			case "charge":
				$where = " AND a.charge_recycle!=1";
		        if(!empty($title)){
		            $where .=" AND a.charge_name LIKE '%{$title}%'";
		        }
		        $order="a.charge_id desc";
				break;
			case "payment":
				$where = " AND a.payment_recycle!=1";
		        if(!empty($title)){
		            $where .=" AND a.payment_name LIKE '%{$title}%'";
		        }
		        $order="a.payment_id";
				break;
			case "bank":
				$where = " AND a.bank_recycle!=1";
		        if(!empty($title)){
		            $where .=" AND a.bank_name LIKE '%{$title}%'";
		        }
		        $order="a.bank_id";
				break;
			case "item":
				$where = " AND a.item_recycle!=1";
		        if(!empty($title)){
		            $where .=" AND a.item_name LIKE '%{$title}%'";
		        }
		        $order="a.item_id";
				break;
        }
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		$baseList = $model->getList_a($where,$order,$table);
		$client_typeid=Request::getVar('client_typeid','get');
		$list_client=null;
		if(!empty($client_typeid)){
		    if($client_typeid==100){
		        $base_url.="&client_typeid=100";
		    }else{
		        for($i=0;$i<count($baseList);$i++){
		        	$baseList[$i]['client_typeid']=explode(",",$baseList[$i]['client_typeid']);
		        	if(in_array((int)$client_typeid,$baseList[$i]['client_typeid'])){
		        		$list_client[]=$baseList[$i];
		        	}
		        }
		        $base_url.="&client_typeid={$client_typeid}";
		        $baseList=$list_client;
		     }

		            
		}

		$total_item = count($baseList);
		$list_clientb=null;
		for($i=($p-1)*$per_page;$i<$p*$per_page;$i++){
			if($i<count($baseList)){
				$list_clientb[]=$baseList[$i];
			}
		}
		$baseList=$list_clientb;


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
		$view  = $this->createView("operator/base/list.html");
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();
		$object->PAGETITLE=$this->getPageTitle($tasktype);
		$object->baseList = $baseList;
        $object->tasktype = $tasktype;
        $object->title = $title;
		$object->total = $total_item;
        if ($tasktype=="client"){
        	$object->ywy_list=$model->getListbySql("Select emp_id,emp_name From emp Where emp_stutas != -1 AND emp_post in(3,4,5)");
        	$object->nowuserid=$nowuserid;
        	$object->shop_list=$model->getListBySql("Select shop_id,shop_name From shop");
        }
		$view->assign($object);
		$view->display();
	}
	
	function searchList()
    {
        $p = Request::getVar('p','get');
        
        $model = $this->createModel("base",dirname( __FILE__ ));
        
        $title          = Request::getVar('title');
        if(empty($p)){$p=1;}
        $base_url = "list.php?title={$title}";
        $per_page = 20;
        
        $tasktype=Request::getVar('tasktype');
        $table=$this->getTableName($tasktype);
    	switch ($tasktype)
		{
			case "client":
	    		$link=Request::getVar('client_Mlinker');
	    		$phone=Request::getVar('client_Mphone');
				$where = " AND a.client_recycle!=1";
		        if(!empty($title)){
		            $where .=" AND a.client_name LIKE '%{$title}%'";
		        }
		        if (!empty($link)){
		        	$where .=" AND a.client_Mlinker LIKE '%{$link}%'";
		        	$base_url .="&client_Mlinker={$link}";
		        }
	    		if (!empty($phone)){
		        	$where .=" AND a.client_Mphone LIKE '%{$phone}%'";
		        	$base_url .="&client_Mphone={$phone}";
		        }
		        $order="a.client_id desc";
		        break;
			case "brother":
				$link=Request::getVar('client_Mlinker');
	    		$phone=Request::getVar('client_Mphone');
				$where = " AND a.bro_recycle!=1";
		        if(!empty($title)){
		            $where .=" AND a.bro_name LIKE '%{$title}%'";
		        }
		        if (!empty($link)){
		        	$where .=" AND a.bro_linker LIKE '%{$link}%'";
		        	$base_url .="&client_Mlinker={$link}";
		        }
	    		if (!empty($phone)){
		        	$where .=" AND a.bro_phone LIKE '%{$phone}%'";
		        	$base_url .="&client_Mphone={$phone}";
		        }
		        $order="a.bro_id desc";
				break;
			case "charge":
				$where = " AND a.charge_recycle!=1";
		        if(!empty($title)){
		            $where .=" AND a.charge_name LIKE '%{$title}%'";
		        }
		        $order="a.charge_id desc";
				break;
			case "payment":
				$where = " AND a.payment_recycle!=1";
		        if(!empty($title)){
		            $where .=" AND a.payment_name LIKE '%{$title}%'";
		        }
		        $order="a.payment_id";
				break;
			case "bank":
				$where = " AND a.bank_recycle!=1";
		        if(!empty($title)){
		            $where .=" AND a.bank_name LIKE '%{$title}%'";
		        }
		        $order="a.bank_id";
				break;
			case "item":
				$where = " AND a.item_recycle!=1";
		        if(!empty($title)){
		            $where .=" AND a.item_name LIKE '%{$title}%'";
		        }
		        $order="a.item_id";
				break;
        }
              
       	$style = new PageStyle();
        $start = ($p-1)*$per_page;
        $baseList = $model->getList($start,$per_page, $where,$order,$table);
        $total_item = $model->getTotal($where,$table);

        $options = array(
            "baseurl"     => $base_url,
            "totalitems" => $total_item,
            "perpage"     => $per_page,
            "page"         => $p,
            "maxpage"     => 15,
            "pagestyle"  => $style,
            "showtotal"  => false
        );
        $pagination = new Pagination($options);
        $p = $pagination->getPage();
        $view  = $this->createView("operator/base/list.html");
        $object = new stdClass();
        $object->PAGINATION = $pagination->fetch();
        $object->PAGETITLE=$this->getPageTitle($tasktype);
        $object->baseList = $baseList;        
        $object->title = $title;
        $object->total = $total_item;        
        $object->tasktype =$tasktype;
        $view->assign($object);
        $view->display();
    } 
	

	function clientcreate()
	{
		$this->create('client');
	}
	function clientmodify(){
		$this->modify('client');
	}
	function clientdelete(){
		$this->delete('client');
	}
	function brothercreate()
	{
		$this->create('brother');
	}
	function brothermodify(){
		$this->modify('brother');
	}
	function brotherdelete(){
		$this->delete('brother');
	}
	
	function chargecreate(){
		$this->create('charge');
	}
	function chargemodify(){
		$this->modify('charge');
	}
	function chargedelete(){
		$this->delete('charge');
	}
	
	function paymentcreate(){
		$this->create('payment');
	}
	function paymentmodify(){
		$this->modify('payment');
	}
	function paymentdelete(){
		$this->delete('payment');
	}
	
	function bankcreate(){
		$this->create('bank');
	}
	function bankmodify(){
		$this->modify('bank');
	}
	function bankdelete(){
		$this->delete('bank');
	}
	
	function itemcreate(){
		$this->create('item');
	}
	function itemmodify(){
		$this->modify('item');
	}
	function itemdelete(){
		$this->delete('item');
	}
	
	function create($tasktype){

		$model = $this->createModel("base",dirname( __FILE__ ));
		$object = new stdClass();
		$object->task = "insert";
		$object->tasktype = $tasktype;
		$object->PAGETITLE=$this->getPageTitle($tasktype);
		if ($tasktype=="charge" || $tasktype=="item"){
			$object->itemlist = $model->getItemList();
		}
		if ($tasktype=="client"){
        	$object->ywy_list=$model->getListbySql("Select emp_id,emp_name From emp Where emp_stutas != -1 AND emp_post in(3,4,5)");
        	$object->shop_list=$model->getListBySql("Select shop_id,shop_name From shop");
        	$object->type_list=$model->getListBySql("Select * From client_type");
        	
        }
		$view  = $this->createView("operator/base/create.html");
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
		$object = new stdClass();
		
		$tasktype=Request::getVar('tasktype','post');
		$table=$this->getTableName($tasktype);
		
		switch ($tasktype)
		{
			case "client":
				$client_typeid[]=Request::getVar('client_typeid','post');
				$client_typeid=$client_typeid[0];
				$client_typeid_a="";
				
				for($i=0;$i<count($client_typeid);$i++){
					if($i==0){
						$client_typeid_a.=$client_typeid[$i];
					}else{
						$client_typeid_a.=",".$client_typeid[$i];
					}
					
				}
				//print_r($client_typeid_a);exit;
				$object->client_typeid=$client_typeid_a;

				$object->client_name=Request::getVar('client_name','post');
				$object->client_Mlinker=Request::getVar('client_Mlinker','post');
				$object->client_Mphone=Request::getVar('client_Mphone','post');
				$object->client_Mpost=Request::getVar('client_Mpost','post');
				$object->client_Mremark=Request::getVar('client_Mremark','post');
				$object->client_linker=Request::getVar('client_linker','post');
				$object->client_phone=Request::getVar('client_phone','post');
				$object->client_post=Request::getVar('client_post','post');
				$object->client_remark=Request::getVar('client_remark','post');
				$object->client_license=Request::getVar('client_license','post');
				$object->client_tariff=Request::getVar('client_tariff','post');
				$object->client_bank=Request::getVar('client_bank','post');
				$object->client_account=Request::getVar('client_account','post');
				$object->client_tel=Request::getVar('client_tel','post');
				$object->client_fax=Request::getVar('client_fax','post');
				$object->client_mail=Request::getVar('client_mail','post');
				$object->client_add=Request::getVar('client_add','post');
				$object->client_salesman=Request::getVar('client_salesman','post');
				$object->client_shopid=Request::getVar('client_shopid','post');
				$title=Request::getVar('client_name','post');
				break;
			case "brother":
				$object->bro_name=Request::getVar('bro_name','post');
			  	$object->bro_linker=Request::getVar('bro_linker','post');
			  	$object->bro_phone=Request::getVar('bro_phone','post');
			  	$object->bro_linkerNum=Request::getVar('bro_linkerNum','post');
			  	$object->bro_post=Request::getVar('bro_post','post');
			  	$object->bro_remark=Request::getVar('bro_remark','post');
			  	$object->bro_license=Request::getVar('bro_license','post');
			  	$object->bro_orgCode=Request::getVar('bro_orgCode','post');
			  	$object->bro_tariff=Request::getVar('bro_tariff','post');
			  	$object->bro_bank=Request::getVar('bro_bank','post');
			  	$object->bro_account=Request::getVar('bro_account','post');
			  	$object->bro_tel=Request::getVar('bro_tel','post');
			 	$object->bro_fax=Request::getVar('bro_fax','post');
			  	$object->bro_mail=Request::getVar('bro_mail','post');
			  	$object->bro_add=Request::getVar('bro_add','post');
			  	$title=Request::getVar('bro_name','post');
				break;
			case "charge":
				$object->charge_name=Request::getVar('charge_name','post');
				$charge_default=Request::getVar('charge_default','post');
				$object->charge_default=empty($charge_default)?0:$charge_default;
				$object->charge_business=implode(",",Request::getVar('target_id','post'));
				$object->charge_provision=Request::getVar('charge_provision','post');
				$fee=Request::getVar('charge_provision_fee','post');
			  	$object->charge_provision_fee=empty($fee) ? 0 : floatval($fee);
			  	$title=Request::getVar('charge_name','post');
				break;
			case "payment":
				$object->payment_name=Request::getVar('payment_name','post');
				$fee=Request::getVar('payment_fee','post');
			  	$object->payment_fee=empty($fee) ? 0 : floatval($fee);
			  	$title=Request::getVar('payment_name','post');
				break;
			case "bank":
				$object->bank_name=Request::getVar('bank_name','post');
			  	$object->bank_no=Request::getVar('bank_no','post');
			  	$title=Request::getVar('bank_name','post');
				break;
			case "item":
				$object->item_name=Request::getVar('item_name','post');
				$object->item_costname=Request::getVar('item_costname','post');
				$object->item_business=implode(",",Request::getVar('target_id','post'));
				$object->item_type=Request::getVar('item_type','post');
				$object->item_options=Request::getVar('item_options','post');
				$object->item_calcu=Request::getVar('item_calcu','post');
				$object->item_caltype=Request::getVar('item_caltype','post');
				$object->item_unit=Request::getVar('item_unit','post');
				$order=Request::getVar('item_order','post');
				$object->item_order=empty($order)?0:$order;
			  	$title=Request::getVar('item_name','post');
				break;
		}

		$model = $this->createModel("base",dirname( __FILE__ ));

        if ($model->store($object,$table))
		{	
			Components::save_admin_log("添加了".$this->getPageTitle($tasktype).":".$title);
			$this->redirect($forward,"添加成功");
		}
		else
		{
			$this->redirect($forward,"添加失败");
		}
	}
	
	function modify($tasktype)
	{
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("base",dirname( __FILE__ ));
		$table=$this->getTableName($tasktype);		
		$newsInfo = $model->getNewsInfo($uid,$table);
		
		$object = new stdClass();
		
		$object->task = "update";
		$object->tasktype = $tasktype;
		$object->PAGETITLE=$this->getPageTitle($tasktype);
		if ($tasktype=="charge" || $tasktype=="item"){
			$object->itemlist = $model->getItemList($uid,$table);
		}
		
		if ($tasktype=="client"){
			$newsInfo['client_typeid']=explode(",",$newsInfo['client_typeid']);
			$type_list=$model->getListBySql("Select * From client_type");

			for($i=0;$i<count($type_list);$i++){
				
				if(in_array((int)$type_list[$i]['id'],$newsInfo['client_typeid'])){
					$type_list[$i]['checked']='checked';
				}else{
					$type_list[$i]['checked']='';
				}
			}
			
			$object->type_list=$type_list;

		}
		$object->list = $newsInfo;
		$view  = $this->createView("operator/base/create.html");
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
		$object = new stdClass();
		$tasktype=Request::getVar('tasktype','post');
		$table=$this->getTableName($tasktype);
		switch ($tasktype)
		{
			case "client":

				$client_typeid[]=Request::getVar('client_typeid','post');
				$client_typeid=$client_typeid[0];
				$client_typeid_a="";
				
				for($i=0;$i<count($client_typeid);$i++){
					if($i==0){
						$client_typeid_a.=$client_typeid[$i];
					}else{
						$client_typeid_a.=",".$client_typeid[$i];
					}
					
				}

				$object->client_id = $uid;
				$object->client_typeid=$client_typeid_a;
				$object->client_name=Request::getVar('client_name','post');
				$object->client_Mlinker=Request::getVar('client_Mlinker','post');
				$object->client_Mphone=Request::getVar('client_Mphone','post');
				$object->client_Mpost=Request::getVar('client_Mpost','post');
				$object->client_Mremark=Request::getVar('client_Mremark','post');
				$object->client_linker=Request::getVar('client_linker','post');
				$object->client_phone=Request::getVar('client_phone','post');
				$object->client_post=Request::getVar('client_post','post');
				$object->client_remark=Request::getVar('client_remark','post');
				$object->client_license=Request::getVar('client_license','post');
				$object->client_tariff=Request::getVar('client_tariff','post');
				$object->client_bank=Request::getVar('client_bank','post');
				$object->client_account=Request::getVar('client_account','post');
				$object->client_tel=Request::getVar('client_tel','post');
				$object->client_fax=Request::getVar('client_fax','post');
				$object->client_mail=Request::getVar('client_mail','post');
				$object->client_add=Request::getVar('client_add','post');
				$title=Request::getVar('client_name','post');
				break;
			case "brother":
				$object->bro_id=$uid;
				$object->bro_name=Request::getVar('bro_name','post');
			  	$object->bro_linker=Request::getVar('bro_linker','post');
			  	$object->bro_phone=Request::getVar('bro_phone','post');
			  	$object->bro_linkerNum=Request::getVar('bro_linkerNum','post');
			  	$object->bro_post=Request::getVar('bro_post','post');
			  	$object->bro_remark=Request::getVar('bro_remark','post');
			  	$object->bro_license=Request::getVar('bro_license','post');
			  	$object->bro_orgCode=Request::getVar('bro_orgCode','post');
			  	$object->bro_tariff=Request::getVar('bro_tariff','post');
			  	$object->bro_bank=Request::getVar('bro_bank','post');
			  	$object->bro_account=Request::getVar('bro_account','post');
			  	$object->bro_tel=Request::getVar('bro_tel','post');
			 	$object->bro_fax=Request::getVar('bro_fax','post');
			  	$object->bro_mail=Request::getVar('bro_mail','post');
			  	$object->bro_add=Request::getVar('bro_add','post');
			  	$title=Request::getVar('bro_name','post');
				break;
			case "charge":
				$object->charge_id=$uid;
				$object->charge_name=Request::getVar('charge_name','post');
				$object->charge_default=Request::getVar('charge_default','post');
				$object->charge_business=implode(",",Request::getVar('target_id','post'));
				$object->charge_provision=Request::getVar('charge_provision','post');
				$fee=Request::getVar('charge_provision_fee','post');
			  	$object->charge_provision_fee=empty($fee) ? 0 : floatval($fee);
			  	$title=Request::getVar('charge_name','post');
				break;
			case "payment":
				$object->payment_id=$uid;
				$object->payment_name=Request::getVar('payment_name','post');
			  	$fee=Request::getVar('payment_fee','post');
			  	$object->payment_fee=empty($fee) ? 0 : floatval($fee);
			  	$title=Request::getVar('payment_name','post');
				break;
			case "bank":
				$object->bank_id=$uid;
				$object->bank_name=Request::getVar('bank_name','post');
			  	$object->bank_no=Request::getVar('bank_no','post');
			  	$title=Request::getVar('bank_name','post');
				break;
			case "item":
				$object->item_id=$uid;
				$object->item_name=Request::getVar('item_name','post');
				$object->item_costname=Request::getVar('item_costname','post');
				$object->item_business=implode(",",Request::getVar('target_id','post'));	
				$object->item_type=Request::getVar('item_type','post');
				$object->item_options=Request::getVar('item_options','post');
				$object->item_calcu=Request::getVar('item_calcu','post');
				$object->item_caltype=Request::getVar('item_caltype','post');
				$object->item_unit=Request::getVar('item_unit','post');
				$object->item_order=Request::getVar('item_order','post');
			  	$title=Request::getVar('item_name','post');
				break;
		}

		$model = $this->createModel("base",dirname( __FILE__ ));
		        	
		if ($model->update($object,$table))
		{
			Components::save_admin_log("修改了".$this->getPageTitle($tasktype).":".$title);
			$this->redirect($forward,"保存成功!");
		}
		else
		{
			$this->redirect($forward,"保存失败!");
		}
	}
	
	function delete($tasktype)
	{
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "list.php";
		}
		$table=$this->getTableName($tasktype);
		$uid = Request::getVar('uid','get');
		$multi = Request::getVar('multi','get');
		
		if(empty($uid)){
			$uid = Request::getVar('uid','post');
		}
		
		$uidlist = explode(",",$uid);

		$model = $this->createModel("base",dirname( __FILE__ ));
		foreach($uidlist as $uid){
			$model->delete($uid,$table);
			Components::save_admin_log("删除了ID为".$uid."的".$this->getPageTitle($tasktype));			
		}
		if(!empty($multi)){
			echo "1";
		}else{
			
			$this->redirect($forward,"删除成功");
		}
	}
	
	function add(){

		$view  = $this->createView("operator/base/add.html");
		
		$view->display();
	}
	
	function getPageTitle($tasktype){
        switch($tasktype){
            case "client":
                return '企业客户资料';
            case "brother":
                return '调车企业资料';
            case "charge":
            	return '收费项目设定';
            case "payment":
            	return '收款方式设定';
            case "bank":
            	return '银行账户设定';
            case "item":
            	return '合同条款设定';
        }
    }
    
	function getTableName($tasktype){
        switch($tasktype){
            case "client":
                return 'client';
            case "brother":
                return 'brothers';
            case "charge":
            	return 'charges';
            case "payment":
            	return 'payments';
            case "bank":
            	return 'banks';
            case "item":
            	return 'items';
        }
    }
    
    function clientexport()
    {
    	$model = $this->createModel("base",dirname( __FILE__ ));
		$where = " AND a.client_recycle!=1";
		$order="a.client_id desc";
		$baseList = $model->getList(0,1000, $where,$order,"client");
		        
		header ( "Content-type:application/vnd.ms-excel" );
		header ( "Content-Disposition:filename=客户清单.xls" );
		echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
		<html xmlns='http://www.w3.org/1999/xhtml'>
		<head>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		<title></title>
		</head>
		<body>
		<table width='100%' border='1'>
		  <tr>
		    <td colspan='9'>客户清单</td>
		  </tr>
		  <tr>
		    <td>公司名称</td>
		    <td>联系人</td>
		    <td>联系人手机</td>
		    <td>营业执照</td>
		    <td>税号</td>
		    <td>开户行</td>
		    <td>账号</td>
			<td>公司电话</td>
		  </tr>";
		if(is_array($baseList)){
			foreach($baseList as $item)
	        {
			echo "
			  <tr>
			    <td>".$item["client_name"]."</td>
			    <td>".$item["client_Mlinker"]."</td>
				<td>".$item["client_Mphone"]."</td>
				<td>".$item["client_license"]."</td>
				<td>'".$item["client_tariff"]."</td>
				<td>".$item["client_bank"]."</td>
				<td>'".$item["client_account"]."</td>
				<td>".$item["client_tel"]."</td>
			    </tr>";
	        }
		}
		
		echo "
		</table>
		</body>
		</html>";
    }

	function price(){
		$client_id = Request::getVar('client_id','get');
		$id = Request::getVar('id','get');
		$model = $this->createModel("base",dirname( __FILE__ ));
		
		$pricelist = $model->getListbySql("Select * From client_pricescheme Where client_id={$client_id}");
		$total=count($pricelist);
		
		$object = new stdClass();
		$object->pricelist = $pricelist;
		$object->client_id= $client_id;
		$object->total= $total;
		if (!empty($id)){
		$object->priceinfo = $model->getNewsInfo($id,"client_pricescheme");
		}
        
        $view  = $this->createView("operator/base/price.html");
		$view->assign($object);
		$view->display();
	}
	function price_acc(){
		
		$model = $this->createModel("base",dirname( __FILE__ ));
		$id = Request::getVar('id','post');
		$op=Request::getVar('op','get');
		if ($op=="delete"){
			$model->delete2($id,"client_pricescheme",'id');
			$info=array('status'=>'ok');
			echo json_encode($info);
			exit();
		}
		
		$client_id = Request::getVar('client_id','post');
		
		$object = new stdClass();
		if (!empty($id)){
			$object->id= $id;
		}
		$object->client_id= $client_id;
		$object->destination= Request::getVar('destination','post');
		$object->carmodel= Request::getVar('carmodel','post');
		$aa=Request::getVar('scheme_price1','post');
		$object->scheme_price1=(empty($aa) ? 0 : $aa);
		$aa=Request::getVar('scheme_price2','post');
		$object->scheme_price2=(empty($aa) ? 0 : $aa);
		$object->remarks= Request::getVar('remarks','post');
		
		if (!empty($id)){
			$model->update($object,"client_pricescheme");
		}else{
			$model->store($object,"client_pricescheme");
		}
		//if ($recid>0){
			$info=array('status'=>'ok');
		//}else{
		//	$info=array('status'=>'提交失败！');
		//}
		echo json_encode($info);
		exit();
	}

	function setywy(){
		$client_id = Request::getVar('client_id','get');
		$ywy_id = Request::getVar('ywy_id','get');
		$shop_id = Request::getVar('shop_id','get');
		$model = $this->createModel("base",dirname( __FILE__ ));
		
		$object = new stdClass();
		$object->client_id = $client_id;
		if ($ywy_id){
		$object->client_salesman = $ywy_id;
		}
		if ($shop_id){
		$object->client_shopid = $shop_id;
		}
		if ($model->update($object,"client")){
			$info=array('status'=>'ok');
		}else{
			$info=array('status'=>'error');
		}
		echo json_encode($info);
		exit();
	}
}

?>