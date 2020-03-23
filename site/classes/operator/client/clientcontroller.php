<?php
import('operator.navi.admincontroller');
import('publicFunction.CommonFunction');
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('imag.utilities.pagestyle_a');
import('imag.image.uploader');
import('operator.navi.privilegehelper');
import('imag.fusecookie');
import('imag.filesystem.fusefile');
import('imag.filesystem.filesystem');
import('imag.utilities.tool');
class clientController extends AdminController
{
	private $package="site/operator/client";
	function __construct($config = array())
	{
		parent::__construct($config);
		$this->registerTask( 'index','index');
		$this->registerTask( 'add','add');
		$this->registerTask( 'insert','insert');
		$this->registerTask( 'edit','edit');
		$this->registerTask( 'update','update');
		$this->registerTask( 'delete','delete');
		$this->registerTask( 'add_lianxi','add_lianxi');
		$this->registerTask( 'insert_lianxi','insert_lianxi');
		$this->registerTask( 'edit_lianxi','edit_lianxi');
		$this->registerTask( 'update_lianxi','update_lianxi');
		$this->registerTask( 'delete_lianxi','delete_lianxi');
		$this->registerTask( 'xiangxi','xiangxi');
		$this->registerTask( 'getemp','getemp');
	}
	//获取总员工
	function getemp(){
		$client_shopid=Request::getVar('client_shopid','post');
		$CommonFunction=new CommonFunction();
		$sql="select * from emp where emp_stutas!=-1 and emp_shopid={$client_shopid}";
		$list=$CommonFunction->getList($sql);
		 echo json_encode($list);
	}
	function index(){
		//print_r(strtotime("2020-06-21 23:59:00"));exit;
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/index");
		$base_url = "index.php?a=1";
		//页数
		$p = Request::getVar('p','get');
		if(empty($p)){
            $p=1;
        }
        $where="WHERE a.client_recycle!=1";
        //公司名称
        $client_name=Request::getVar('client_name','get');
        if(!empty($client_name)){
            $where.=" and a.client_name like '%{$client_name}%'";
            $base_url.="&client_name={$client_name}";
        }
        //联系人
        $client_Mlinker=Request::getVar('client_Mlinker','get');
        if(!empty($client_Mlinker)){
            $where.=" and d.name like '%{$client_Mlinker}%'";
            $base_url.="&client_Mlinker={$client_Mlinker}";
        }
        //联系电话
        $client_Mphone=Request::getVar('client_Mphone','get');
        if(!empty($client_Mphone)){
            $where.=" and  d.phone like '%{$client_Mphone}%' ";
            $base_url.="&client_Mphone={$client_Mphone}";
        }
        //业务员
        $client_salesman=Request::getVar('client_salesman','get');
        if(!empty($client_salesman)){
            $where.=" and a.client_salesman={$client_salesman}";
            $base_url.="&client_salesman={$client_salesman}";
        }


        $per_page = 20;
        $style = new PageStyle_a();
        $start = ($p-1)*$per_page;
		
		$sql="SELECT distinct a.*,b.emp_name,c.shop_name FROM `client` AS a 
		Left Join emp AS b ON a.client_salesman=b.emp_id 
		Left Join shop as c ON a.client_shopid=c.shop_id 
		Left Join client_lianxi as d ON a.client_id=d.client_id 
		Left Join sales_contract as e ON a.client_id=e.contract_clientid 
		{$where} ORDER BY a.client_id desc LIMIT $start,$per_page";

		$list=$CommonFunction->getList($sql);
		for($i=0;$i<count($list);$i++){
			$sql_lianxi="Select * from client_lianxi where client_id={$list[$i]['client_id']} order by zhu desc";
			$list[$i]['client_lianxi']=$CommonFunction->getList($sql_lianxi);
			$sql_hetong="SELECT `contract_id`,`contract_number` FROM `sales_contract` WHERE `contract_recycle`!=1 AND `contract_clientid`={$list[$i]["client_id"]} ORDER BY contract_startdate";
			$list[$i]['hetong']=$CommonFunction->getList($sql_hetong);
		}
		$sql="SELECT distinct a.*,b.emp_name,c.shop_name FROM `client` AS a 
		Left Join emp AS b ON a.client_salesman=b.emp_id 
		Left Join shop as c ON a.client_shopid=c.shop_id 
		Left Join client_lianxi as d ON a.client_id=d.client_id 
		Left Join sales_contract as e ON a.client_id=e.contract_clientid 
		{$where}";

		$count=$CommonFunction->getList($sql);
        $total_item=count($count);

   
        $options = array(
            "baseurl"    => $base_url,
            "totalitems" => $total_item,
            "perpage"    => $per_page,
            "page"       => $p,
            "maxpage"    => 20,
            "pagestyle"  => $style,
            "showtotal"  => false
        );
        $emp_sql="Select distinct a.client_salesman,b.emp_name from client as a 
        Left Join emp AS b ON a.client_salesman=b.emp_id
        ";
        $emp_list=$CommonFunction->getList($emp_sql);


        $pagination = new Pagination($options);
        $p = $pagination->getPage();
		$object = new stdClass();
		$object->list=$list;
		$object->emp_list=$emp_list;
		$object->p=$p;
		$object->total=$total_item;

		$object->PAGINATION=$pagination->fetch();

		$view  = $this->createView("operator/client/index.html");
		$object->add=$CommonFunction->panduan_rule($this->package."/add");
		$object->edit=$CommonFunction->panduan_rule($this->package."/edit");
		$object->delete=$CommonFunction->panduan_rule($this->package."/delete");
		$object->xiangxi=$CommonFunction->panduan_rule($this->package."/xiangxi");
		
		$view->assign($object);
		$view->display();
	}
	function add(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/add");
		$sql="select * from shop where stutas=0";
		$shop_list=$CommonFunction->getList($sql);
		$object = new stdClass();
		$object->shop_list=$shop_list;
		$view  = $this->createView("operator/client/add.html");
		$view->assign($object);
		$view->display();

	}
	function insert(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/add");
		$object = new stdClass();
		$object->client_name=Request::getVar('client_name','post');
		$object->client_license=Request::getVar('client_license','post');
		$object->client_bank=Request::getVar('client_bank','post');
		$object->client_account=Request::getVar('client_account','post');
		$object->client_tel=Request::getVar('client_tel','post');
		$object->client_mail=Request::getVar('client_mail','post');
		$object->client_fax=Request::getVar('client_fax','post');
		$object->client_add=Request::getVar('client_add','post');
		$object->client_shopid=Request::getVar('client_shopid','post');
		$object->client_salesman=Request::getVar('client_salesman','post');
		if($CommonFunction->instert($object,"client")){
		 	$re=true;
		}else{
		 	$re=false;
		}
		if($re){
			$CommonFunction->setAction("添加了职位-".$object->client_name);
		}
		$object = new stdClass();
        $object->result = $re ? "添加成功！":"添加失败，返回重试！";
        $view  = $this->createView("operator/client/result.html");
        $view->assign($object);
        $view->display();
	}

	function edit(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/edit");
		$client_id=Request::getVar('client_id','get');
		$sql="Select * from client where client_id={$client_id}";
		$data=$CommonFunction->getdata($sql);
		$sql="select * from shop where stutas=0";
		$shop_list=$CommonFunction->getList($sql);
		$sql="select * from emp where emp_shopid={$data['client_shopid']} and emp_stutas=1";
		$emp_list=$CommonFunction->getList($sql);
		$object = new stdClass();
		$object->shop_list =$shop_list;
		$object->emp_list =$emp_list;
		//print_r($emp_list);exit;
		$object->data =$data;
		$view  = $this->createView("operator/client/edit.html");
		$view->assign($object);
		$view->display();
	}

	function update(){
		$CommonFunction=new CommonFunction();
		$object = new stdClass();
		$client_id=Request::getVar('client_id','post');
		$object->client_id=$client_id;
		$client_name=Request::getVar('client_name','post');
		if($client_name){
			$object->client_name=$client_name;
		}
		$client_license=Request::getVar('client_license','post');
		if($client_license){
			$object->client_license=$client_license;
		}
		
		$client_bank=Request::getVar('client_bank','post');
		if($client_bank){
			$object->client_bank=$client_bank;
		}
		$client_account=Request::getVar('client_account','post');
		if($client_account){
			$object->client_account=$client_account;
		}
		$client_tel=Request::getVar('client_tel','post');
		if($client_tel){
			$object->client_tel=$client_tel;
		}
		$client_mail=Request::getVar('client_mail','post');
		if($client_mail){
			$object->client_mail=$client_mail;
		}
		$client_fax=Request::getVar('client_fax','post');
		if($client_fax){
			$object->client_fax=$client_fax;
		}

		$client_add=Request::getVar('client_add','post');
		if($client_add){
			$object->client_add=$client_add;
		}
		$object->client_shopid=Request::getVar('client_shopid','post');
		
		$object->client_salesman=Request::getVar('client_salesman','post');

		if($CommonFunction->update_a($object,"client_id","client","")){
		 	$re=true;
		 	$CommonFunction->setAction("修改了客户id为-".$object->client_id."的资料");
		}else{
		 	$re=false;
		}
		$object = new stdClass();
        $object->result = $re ? "修改成功！":"修改失败，返回重试！";
        $view  = $this->createView("operator/client/result.html");
        $view->assign($object);
        $view->display();
		
	}

	function delete(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/delete");
		$client_id=Request::getVar('client_id','get');
		if($CommonFunction->dalete_sql("client","client_id",$client_id)){
			$CommonFunction->setAction("删除了id为".$client_id."的客户");
			$this->redirect("index.php","删除成功！");
		}else{
			$this->redirect("index.php","删除失败！");
		}	

	}
	function add_lianxi(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/add");
		$client_id=Request::getVar('client_id','get');
		$object = new stdClass();
		$object->client_id =$client_id;
		$view  = $this->createView("operator/client/add_lianxi.html");
		$view->assign($object);
		$view->display();
		
	}
	function insert_lianxi(){
		$CommonFunction=new CommonFunction();
		$object = new stdClass();
		$client_id=Request::getVar('client_id','post');
		$object->client_id=$client_id;
		$object->name=Request::getVar('name','post');
		$object->phone=Request::getVar('phone','post');
		$object->zhiwei=Request::getVar('zhiwei','post');
		$object->beizhu=Request::getVar('beizhu','post');
		$object->dizhi_a=Request::getVar('dizhi_a','post');
		$object->dizhi_b=Request::getVar('dizhi_b','post');
		$zhu=Request::getVar('zhu','post');
		$object->zhu=$zhu;
		$sql="select * from client_lianxi where client_id={$client_id}";
		$lista=$CommonFunction->getList($sql);
		if($zhu==1&&count($lista)>0){
			$CommonFunction->update_b("update client_lianxi set zhu=0 where client_id={$client_id}");
		}


		if($CommonFunction->instert($object,"client_lianxi")){
		 	$re=true;
		}else{
		 	$re=false;
		}
		if($re){
			$CommonFunction->setAction("添加了其他联系方式-".$object->name);
		}
		$object = new stdClass();
        $object->result = $re ? "添加成功！":"添加失败，返回重试！";
        $view  = $this->createView("operator/client/result.html");
        $view->assign($object);
        $view->display();
	}
	function edit_lianxi(){
		$CommonFunction=new CommonFunction();
		$id=Request::getVar('id','get');
		$sql="Select * from client_lianxi where id={$id}";
		$object = new stdClass();
		$object->data =$CommonFunction->getdata($sql);
		$view  = $this->createView("operator/client/edit_lianxi.html");
		$view->assign($object);
		$view->display();
	}
	function update_lianxi(){
		$CommonFunction=new CommonFunction();
		$object = new stdClass();
		$id=Request::getVar('id','post');
		$object->id=$id;

		$name=Request::getVar('name','post');
		if($name){
			$object->name=$name;
		}

		$phone=Request::getVar('phone','post');
		if($phone){
			$object->phone=$phone;
		}
		
		$zhiwei=Request::getVar('zhiwei','post');
		if($zhiwei){
			$object->zhiwei=$zhiwei;
		}
		
		$beizhu=Request::getVar('beizhu','post');
		if($beizhu){
			$object->beizhu=$beizhu;
		}
		$dizhi_a=Request::getVar('dizhi_a','post');
		if($dizhi_a){
			$object->dizhi_a=$dizhi_a;
		}
		$dizhi_b=Request::getVar('dizhi_b','post');
		if($dizhi_b){
			$object->dizhi_b=$dizhi_b;
		}
		$zhu=Request::getVar('zhu','post');
		$object->zhu=$zhu;
		
		
		if($zhu==1){
			$sql="select client_id from client_lianxi where id={$id}";
			$client_id=$CommonFunction->getDataY($sql,'client_id');
			$CommonFunction->update_b("update client_lianxi set zhu=0 where client_id={$client_id}");
		}

		if($CommonFunction->update_a($object,"id","client_lianxi","")){
		 	$re=true;
		 	$CommonFunction->setAction("修改了id为-".$id."的联系资料");
		}else{
		 	$re=false;
		}
		$object = new stdClass();
        $object->result = $re ? "修改成功！":"修改失败，返回重试！";
        $view  = $this->createView("operator/client/result.html");
        $view->assign($object);
        $view->display();
	}
	
	function delete_lianxi(){
		$CommonFunction=new CommonFunction();
		$id=Request::getVar('id','get');
		$re=true;
		if($CommonFunction->dalete_sql("client_lianxi","id",$id)){
			$CommonFunction->setAction("删除了id为".$id."的联系方式");
			$re=true;
		}else{
			$re=false;
		}
		$object = new stdClass();
        $object->result = $re ? "删除成功！":"删除失败，返回重试！";
        $view  = $this->createView("operator/client/result.html");
        $view->assign($object);
        $view->display();	
	}

	function xiangxi(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/xiangxi");
		$client_id=Request::getVar('client_id','get');
		//客户信息
		$sql="select a.*,b.shop_name,c.emp_name from client as a left join shop as b on a.client_shopid=b.shop_id left join emp as c on a.client_salesman=c.emp_id where client_id={$client_id}";
		$client=$CommonFunction->getdata($sql);
		//长期自驾合同
		$sql="select a.*,b.car_num from paiche as a left join car as b on a.paicheCar=b.car_id where a.paicheCom={$client_id} and a.paiche_type=3";
		$paiche_list=$CommonFunction->getList($sql);
		for($i=0;$i<count($paiche_list);$i++){
			 $paiche_list[$i]['paiche_startDate'] = $paiche_list[$i]['paiche_startDate']>0 ? date("Y-m-d H:i:s",$paiche_list[$i]['paiche_startDate']) :"-";
			 $paiche_list[$i]['paiche_endDate'] = $paiche_list[$i]['paiche_endDate']>0 ? date("Y-m-d H:i:s",$paiche_list[$i]['paiche_endDate']) : "—";
		}
		//其他联系人方式
		$sql="select * from client_lianxi where client_id={$client_id}";
		$lianxi_list=$CommonFunction->getList($sql);
		//企业违章
		$sql="select b.paiche_id from client as a left join paiche as b on a.client_id=b.paicheCom where a.client_id={$client_id} and b.paiche_id>0";
		//print_r($sql);exit;
		$paicheid_list=$CommonFunction->getList($sql);
		$weizhang_list=null;
		if(count($paicheid_list)>0){
			for($i=0;$i<count($paicheid_list);$i++){
				//print_r($paicheid_list[$i]['paiche_id']);exit;
				$sql="select a.*,b.car_num from breakrules as a left join car as b on a.breakrules_CarId=b.car_id where a.breakrulesPaicheId={$paicheid_list[$i]['paiche_id']}";
				$breakrules=$CommonFunction->getList($sql);
				if(count($breakrules)>0){
					for($j=0;$j<count($breakrules);$j++){
						$breakrules[$j]['breakrules_date']=date("Y-m-d H:i:s",$breakrules[$j]['breakrules_date']);
            			$breakrules[$j]['breakrules_times']=date("Y-m-d H:i:s",$breakrules[$j]['breakrules_times']);
            			$breakrules[$j]['breakrules_endtimes']=$breakrules[$j]['breakrules_endtimes']==0?"" : date("Y-m-d H:i:s",$breakrules[$j]['breakrules_endtimes']);
						$weizhang_list[]=$breakrules[$j];
					}
				}
			}
		}
		//print_r($weizhang_list);exit;
		$object = new stdClass();
		$object->client=$client;
		$object->lianxi_list=$lianxi_list;
		$object->paiche_list=$paiche_list;
		$object->weizhang_list=$weizhang_list;
		$view  = $this->createView("operator/client/xiangxi.html");
        $view->assign($object);
        $view->display();
	}
	
	










	

}
