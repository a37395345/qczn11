<?php
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('operator.navi.admincontroller');
import('operator.navi.privilegehelper');
import('imag.fusecookie');
import('imag.filesystem.fusefile');
import('imag.filesystem.filesystem');
import('imag.image.uploader');
import('imag.utilities.tool');


class BusiaccController extends AdminController
{
	/**
	 * Constructor
	 *
	 * @params	array	Controller configuration array
	 */
	function __construct($config = array())
	{
		parent::__construct($config);
		
		//if(!($this->checkPrivilege("system"))){
			//$this->redirect("/admincp/empty.php","您没有权限访问该页面！");
		//}
		$this->registerTask('depositlist','depositlist');
		$this->registerTask('depositdetail','depositdetail');
		$this->registerTask('accountlist0','accountlist0');
		$this->registerTask('accountconlist','accountconlist');
		$this->registerTask('backdepositlist','backdepositlist');
		$this->registerTask('accountlist1','accountlist1');
		$this->registerTask('accountlist2','accountlist2');
		$this->registerTask('accountlist3','accountlist3');
		$this->registerTask('backmoneylist','backmoneylist');
		$this->registerTask( 'account','account');
		$this->registerTask( 'accept','accept');
	}
	function display(){
		echo "display";
	}

	//收押金
	function depositlist(){
		$firstop = Request::getVar('firstop','get');
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$per_page = 10;
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		
        $busi_id = Request::getVar('b_id','get');
		if (empty($busi_id)) $busi_id = 0;
                
        $search_startDate=Request::getVar('search_startDate','get');
		$search_endDate=Request::getVar('search_endDate','get');
		$companyid=Request::getVar('company','get');
		$paiche_linker=Request::getVar('paiche_linker','get');
        $paiche_contractNum=Request::getVar('paiche_contractNum','get');
        $search_status=Request::getVar('search_status','get');
        if (empty($search_status)) $search_status = "d";
        $paiche_car=Request::getVar('paiche_car','get');
        
		$model = $this->createModel("list",dirname( __FILE__ ));
		
		if(empty($search_startDate)){
			$search_startDate=date("Y-m-d",strtotime('-180 day'));
		}
		$base_url = "depositlist.php?firstop={$firstop}&search_startDate={$search_startDate}&search_status=$search_status";
        
        $where = " a.paiche_recycle!=1 AND a.paiche_startDate>=".strtotime($search_startDate)." AND a.paiche_status>=0".($busi_id>0? " AND a.paiche_type = {$busi_id} ": "");

		if(!empty($search_endDate)){
			$base_url.="&search_endDate={$search_endDate}";
            $where .=" AND a.paiche_startDate<".(strtotime($search_endDate." 23:59:59"));
        }
        if ($paiche_linker!=""){
        	$base_url.="&paiche_linker={$paiche_linker}";
        	$where .=" AND (a.paiche_linker like '%{$paiche_linker}%' OR f.client_name like '%{$paiche_linker}%')";
        }
        if ($paiche_contractNum!=""){
        	$base_url.="&paiche_contractNum={$paiche_contractNum}";
        	$where .=" AND a.paiche_contractNum like '%{$paiche_contractNum}%'";
        }
        if (!empty($companyid)){
        	$base_url.="&company={$companyid}";
        	$where.=" AND a.paicheCom={$companyid} ";
        }
		if ($paiche_car!=""){
        	$base_url.="&paiche_car={$paiche_car}";
        	$where .=" AND e.car_num like '%{$paiche_car}%'";
        }
        
        $where .=" AND a.paiche_type in (1,3,4,5) ";
        $sql_0="SELECT DISTINCT paiche_id FROM paiche_charges WHERE charge_id=1 AND conv_money>0 ";
		if ($search_status=="d"){
        	$sql_0 .=" AND (have_in_money=0 OR have_back_money<have_in_money) ";
        }
        if ($search_status=="y"){//已结清
        	$sql_0 .=" AND have_in_money>0 AND have_back_money>=have_in_money ";
        }
		if ($search_status=="v"){//多
        	$sql_0 .=" AND have_in_money>0 AND have_back_money>have_in_money ";
        }

        $sql="SELECT a.*,b.settle_totalKm,c.emp_name AS yewuyuan,d.emp_name AS siji,e.car_num,f.client_name,g.item_name,j.bro_name,m.shop_name,n.emp_name AS jiedaiyuan ".
			 "FROM `paiche` AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId ".
        	 "INNER JOIN ({$sql_0}) as kk ON a.paiche_id=kk.paiche_id ".
			 "LEFT JOIN emp AS c ON a.paicheCounterMan=c.emp_id ".
        	 "LEFT JOIN emp AS d ON a.paicheDriver=d.emp_id ".
			 "LEFT JOIN car AS e ON a.paicheCar=e.car_id ".
			 "LEFT JOIN client AS f ON a.paicheCom=f.client_id ".
			 "LEFT JOIN item AS g ON a.paiche_type=g.item_paicheType ".
			 "LEFT JOIN shunt AS h ON a.paiche_id=h.shuntPaicheId ".
			 "LEFT JOIN brothers AS j ON a.paiche_brother=j.bro_id ".
			 "LEFT JOIN shop AS m ON a.paiche_shopid=m.shop_id ".
			 "LEFT JOIN emp AS n ON a.paicheServerMan=n.emp_id ".
			 "WHERE {$where}  ORDER BY `paiche_id` DESC LIMIT $start,$per_page";
        $busiList=null;
        $total_item=0;
        if(!empty($firstop)){
		$busiList = $model->getListBySql($sql," AND a.charge_id=1 AND conv_money>0 ");
		$total_item = $model->getTotal_2($where,$sql_0);
        }
		

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
		$view  = $this->createView("operator/busiaccount/depositlist.html");

		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();
		$object->PAGETITLE="押金管理";
		$object->busiList = $busiList;
		$object->total = $total_item;
		$object->companyid = $companyid;
		$object->companylist=$model->getEmpList("`client_id`,`client_name`"," AND client_recycle!=1","client");
        $object->category = $model->getcategory("Where item_name <> '临时带驾'");
        $object->op = "deposit";
        $object->url="depositlist.php";
        $object->search_startDate = $search_startDate;
        $object->search_status=$search_status;
        $object->paiche_car=$paiche_car;
        $object->firstop =$firstop;
        $object->iscomplete =0;
		$view->assign($object);
		$view->display();
	}
	function depositdetail()
	{
		//print_r("expression");exit;
		$pid = Request::getVar('pid','get');
		$model = $this->createModel("list",dirname( __FILE__ ));
		$sql="Select a.*,b.payment_name,c.bank_name From account_log as a 
			Left Join payments as b ON a.payments_id=b.payment_id Left Join banks as c on a.bank_id=c.bank_id 
			Where a.paiche_id={$pid} and (a.name like '%押金' or a.name like '%违章保证金') Order by a.add_time";
		$List = $model->getListBySql($sql);
		
		$view  = $this->createView("operator/busiaccount/depositdetail.html");
		
		$object = new stdClass();
		$object->List = $List;
		$object->all_money1=0;
		$object->all_money2=0;
		$view->assign($object);
		$view->display();
	}
	function accountlist0()
	{
		$firstop = Request::getVar('firstop','get');
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$per_page = 10;
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		
        $busi_id = Request::getVar('b_id','get');
		if (empty($busi_id)) $busi_id = 0;
                
        $search_startDate=Request::getVar('search_startDate','get');
		$search_endDate=Request::getVar('search_endDate','get');
		$companyid=Request::getVar('company','get');
		$paiche_linker=Request::getVar('paiche_linker','get');
        $paiche_contractNum=Request::getVar('paiche_contractNum','get');
        
		$model = $this->createModel("list",dirname( __FILE__ ));
		
		$base_url = "accountlist0.php?firstop={$firstop}&b_id={$busi_id}";
        
        $where = " a.paiche_recycle!=1 AND a.paiche_status>=0".($busi_id>0? " AND a.paiche_type = {$busi_id} ": "");
		if(!empty($search_startDate)){
			$base_url.="&search_startDate={$search_startDate}";
            $where .=" AND a.paiche_startDate>='".strtotime($search_startDate)."'";
        }
		if(!empty($search_endDate)){
			$base_url.="&search_endDate={$search_endDate}";
            $where .=" AND a.paiche_startDate<".(strtotime($search_endDate." 23:59:59"));
        }
        if ($paiche_linker!=""){
        	$base_url.="&paiche_linker={$paiche_linker}";
        	$where .=" AND (a.paiche_linker like '%{$paiche_linker}%' OR f.client_name like '%{$paiche_linker}%')";
        }
        if ($paiche_contractNum!=""){
        	$base_url.="&paiche_contractNum={$paiche_contractNum}";
        	$where .=" AND a.paiche_contractNum like '%{$paiche_contractNum}%'";
        }
        if (!empty($companyid)){
        	$base_url.="&company={$companyid}";
        	$where.=" AND a.paicheCom={$companyid} ";
        }
        $busiList=null;
        $total_item=0;
        if(!empty($firstop)){
        $where .=" AND a.paiche_type in (1,2) AND b.settle_losses=0 ";
        $sql_0="SELECT DISTINCT paiche_id FROM `paiche_charges` WHERE charge_id=2 AND `conv_money`>0 AND `have_in_money`<`conv_money`";

        $sql="SELECT a.*,b.settle_totalKm,c.emp_name AS yewuyuan,d.emp_name AS siji,e.car_num,f.client_name,g.item_name,h.shunt_rent,h.shunt_rented,h.shunt_balance,h.shunt_money,h.shunt_endtimes,j.bro_name,m.shop_name,n.emp_name AS jiedaiyuan ".
			 "FROM `paiche` AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId ".
        	 "Inner Join ({$sql_0}) as kk On a.paiche_id=kk.paiche_id ".
			 "LEFT JOIN emp AS c ON a.paicheCounterMan=c.emp_id ".
        	 "LEFT JOIN emp AS d ON a.paicheDriver=d.emp_id ".
			 "LEFT JOIN car AS e ON a.paicheCar=e.car_id ".
			 "LEFT JOIN client AS f ON a.paicheCom=f.client_id ".
			 "LEFT JOIN item AS g ON a.paiche_type=g.item_paicheType ".
			 "LEFT JOIN shunt AS h ON a.paiche_id=h.shuntPaicheId ".
			 "LEFT JOIN brothers AS j ON a.paiche_brother=j.bro_id ".
			 "LEFT JOIN shop AS m ON a.paiche_shopid=m.shop_id ".
			 "LEFT JOIN emp AS n ON a.paicheServerMan=n.emp_id ".
			 "WHERE {$where}  ORDER BY `paiche_id` DESC LIMIT $start,$per_page";
		
		$busiList = $model->getListBySql($sql," AND a.charge_id=2 AND `have_in_money`<`conv_money`");
		$total_item = $model->getTotal_2($where,$sql_0);
        }

		$options = array(
			"baseurl"	 => $base_url,
			"totalitems" => $total_item,
			"perpage"	 => $per_page,
			"page"	     => $p,
			"maxpage"	 => 20,
			"pagestyle"  => $style,
			"showtotal"  => false
		);
		$pagination = new Pagination($options);
		$p = $pagination->getPage();
		$view  = $this->createView("operator/busiaccount/list.html");

		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();
		$object->PAGETITLE="订单收款";
		$object->busiList = $busiList;
		$object->total = $total_item;
		$object->companyid = $companyid;
		$object->companylist=$model->getEmpList("`client_id`,`client_name`"," AND client_recycle!=1","client");
        $object->category = $model->getcategory();
        $object->op = "account0";
        $object->url="accountlist0.php";
        $object->b_id=$busi_id;
        $object->firstop =$firstop;
		$view->assign($object);
		$view->display();
	}

	




	function accountconlist(){
		//print_r("expression");exit;
		$firstop = Request::getVar('firstop','get');
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$per_page = 10;
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		
        $busi_id = Request::getVar('b_id','get');
		if (empty($busi_id)) $busi_id = 0;
                
        $search_startDate=Request::getVar('search_startDate','get');
		$search_endDate=Request::getVar('search_endDate','get');
		$companyid=Request::getVar('company','get');
		$paiche_linker=Request::getVar('paiche_linker','get');
        $paiche_contractNum=Request::getVar('paiche_contractNum','get');
        
		$model = $this->createModel("list",dirname( __FILE__ ));
		
		$base_url = "accountconlist.php?firstop={$firstop}&b_id={$busi_id}";
		
        
        $where = " a.paiche_recycle!=1 AND a.paiche_status>=0".($busi_id>0? " AND a.paiche_type = {$busi_id} ": "");
        //开始时间
		if(!empty($search_startDate)){
			$base_url.="&search_startDate={$search_startDate}";
            $where .=" AND a.paiche_startDate>='".strtotime($search_startDate)."'";
        }
        //结束时间
		if(!empty($search_endDate)){
			$base_url.="&search_endDate={$search_endDate}";
            $where .=" AND a.paiche_startDate<".(strtotime($search_endDate." 23:59:59"));
        }
        //承租人
        if ($paiche_linker!=""){
        	$base_url.="&paiche_linker={$paiche_linker}";
        	$where .=" AND (a.paiche_linker like '%{$paiche_linker}%' OR f.client_name like '%{$paiche_linker}%')";
        }
        //合同号
        if ($paiche_contractNum!=""){
        	$base_url.="&paiche_contractNum={$paiche_contractNum}";
        	$where .=" AND a.paiche_contractNum like '%{$paiche_contractNum}%'";
        }
        if (!empty($companyid)){
        	$base_url.="&company={$companyid}";
        	$where.=" AND a.paicheCom={$companyid} ";
        }
        $busiList=null;
        $total_item=0;
        //if(!empty($firstop)){
        $where .=" AND a.paiche_type in (1,2) AND b.settle_losses<1 ";
        $sql_0="SELECT id,paiche_id,GROUP_CONCAT(DISTINCT paiche_id) FROM paiche_charges WHERE (charge_id in (2,3,4,5,6,7,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23) )  GROUP BY paiche_id";

        

        $sql="SELECT a.*,b.*,c.emp_name AS yewuyuan,f.client_name,g.item_name,j.bro_name,m.shop_name,n.emp_name AS jiedaiyuan ".
			 "FROM `paiche` AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId ".
        	 "Inner Join ({$sql_0}) as kk On a.paiche_id=kk.paiche_id ".
			 "LEFT JOIN emp AS c ON a.paicheCounterMan=c.emp_id ".
			 "LEFT JOIN client AS f ON a.paicheCom=f.client_id ".
			 "LEFT JOIN item AS g ON a.paiche_type=g.item_paicheType ".
			 "LEFT JOIN shunt AS h ON a.paiche_id=h.shuntPaicheId ".
			 "LEFT JOIN brothers AS j ON a.paiche_brother=j.bro_id ".
			 "LEFT JOIN shop AS m ON a.paiche_shopid=m.shop_id ".
			 "LEFT JOIN emp AS n ON a.paicheServerMan=n.emp_id ".
			 "WHERE {$where}  ORDER BY kk.id DESC LIMIT $start,$per_page";
		

		$busiList = $model->getListBySql($sql," AND a.charge_id in (2,3,4,5,6,7,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23) 
 ");
		//print_r($busiList);exit;
		$total_item = $model->getTotal_2($where,$sql_0);
        //}

		$options = array(
			"baseurl"	 => $base_url,
			"totalitems" => $total_item,
			"perpage"	 => $per_page,
			"page"	     => $p,
			"maxpage"	 => 20,
			"pagestyle"  => $style,
			"showtotal"  => false

		);
		$pagination = new Pagination($options);
		$p = $pagination->getPage();
		$view  = $this->createView("operator/busiaccount/list.html");

		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();
		$object->PAGETITLE="订单收续租金";
		$object->busiList = $busiList;
		$object->total = $total_item;
		$object->companyid = $companyid;
		$object->companylist=$model->getEmpList("`client_id`,`client_name`"," AND client_recycle!=1","client");
        $object->category = $model->getcategory();
        $object->op = "accountcon";
        $object->url="accountconlist.php";
        $object->firstop =$firstop;
		$view->assign($object);
		$view->display();
	}

	function backdepositlist(){
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$per_page = 10;
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		
        $busi_id = Request::getVar('b_id','get');
		if (empty($busi_id)) $busi_id = 0;
                
        $search_startDate=Request::getVar('search_startDate','get');
		$search_endDate=Request::getVar('search_endDate','get');
		$companyid=Request::getVar('company','get');
		$paiche_linker=Request::getVar('paiche_linker','get');
        $paiche_contractNum=Request::getVar('paiche_contractNum','get');
        
		$model = $this->createModel("list",dirname( __FILE__ ));
		
		$base_url = "backdepositlist.php?";
		
        
        $where = " a.paiche_recycle!=1 AND a.paiche_status>=0".($busi_id>0? " AND a.paiche_type = {$busi_id} ": "");
		if(!empty($search_startDate)){
			$base_url.="&search_startDate={$search_startDate}";
            $where .=" AND a.paiche_startDate>='".strtotime($search_startDate)."'";
        }
		if(!empty($search_endDate)){
			$base_url.="&search_endDate={$search_endDate}";
            $where .=" AND a.paiche_startDate<".(strtotime($search_endDate." 23:59:59"));
        }
        if ($paiche_linker!=""){
        	$base_url.="&paiche_linker={$paiche_linker}";
        	$where .=" AND (a.paiche_linker like '%{$paiche_linker}%' OR f.client_name like '%{$paiche_linker}%')";
        }
        if ($paiche_contractNum!=""){
        	$base_url.="&paiche_contractNum={$paiche_contractNum}";
        	$where .=" AND a.paiche_contractNum like '%{$paiche_contractNum}%'";
        }
        if (!empty($companyid)){
        	$base_url.="&company={$companyid}";
        	$where.=" AND a.paicheCom={$companyid} ";
        }
        $where .=" AND (a.paiche_type =1 OR a.paiche_type =3) AND b.settle_totalKm>0 AND b.settle_losses<2 ";
		$sql_0="SELECT DISTINCT paiche_id FROM `paiche_charges` WHERE charge_id=1 AND back_money>0 AND have_in_money>0 AND have_back_money<have_in_money";
        
		$sql="SELECT a.*,c.emp_name AS yewuyuan,f.client_name,g.item_name,j.bro_name ".
			 "FROM `paiche` AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId ".
        	 "Inner Join ({$sql_0}) as kk On a.paiche_id=kk.paiche_id ".
			 "LEFT JOIN emp AS c ON a.paicheCounterMan=c.emp_id ".
			 "LEFT JOIN client AS f ON a.paicheCom=f.client_id ".
			 "LEFT JOIN item AS g ON a.paiche_type=g.item_paicheType ".
			 "LEFT JOIN shunt AS h ON a.paiche_id=h.shuntPaicheId ".
			 "LEFT JOIN brothers AS j ON a.paiche_brother=j.bro_id ".
			 "WHERE {$where}  ORDER BY `paiche_id` DESC LIMIT $start,$per_page";

		$busiList = $model->getListBySql($sql," AND a.charge_id=1 AND back_money>0 AND have_in_money>0 AND have_back_money<have_in_money");
		$total_item = $model->getTotal_2($where,$sql_0);

		$options = array(
			"baseurl"	 => $base_url,
			"totalitems" => $total_item,
			"perpage"	 => $per_page,
			"page"	     => $p,
			"maxpage"	 => 20,
			"pagestyle"  => $style,
			"showtotal"  => false
		);
		$pagination = new Pagination($options);
		$p = $pagination->getPage();
		$view  = $this->createView("operator/busiaccount/list.html");

		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();
		$object->PAGETITLE="结账退押金";
		$object->busiList = $busiList;
		$object->total = $total_item;
		$object->companyid = $companyid;
		$object->companylist=$model->getEmpList("`client_id`,`client_name`"," AND client_recycle!=1","client");
        $object->category = $model->getcategory();
        $object->op = "backdeposit";
        $object->url="backdepositlist.php";
		$view->assign($object);
		$view->display();
	}







	//结账
	function accountlist1(){
		$firstop = Request::getVar('firstop','get');
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$per_page = 10;
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		
        $busi_id = Request::getVar('b_id','get');
		if (empty($busi_id)) $busi_id = 0;
                
        $search_startDate=Request::getVar('search_startDate','get');
		$search_endDate=Request::getVar('search_endDate','get');
		$companyid=Request::getVar('company','get');
		$paiche_linker=Request::getVar('paiche_linker','get');
        $paiche_contractNum=Request::getVar('paiche_contractNum','get');
        
		$model = $this->createModel("list",dirname( __FILE__ ));
		
		$base_url = "accountlist1.php?firstop={$firstop}&b_id={$busi_id}";
		
        
        $where = " a.paiche_recycle!=1 AND a.paiche_status>=0";
		if (!empty($busi_id)){
			if ($busi_id==21){
				$where .=" AND a.paiche_type=2 AND a.paiche_personal=1";
			}else if ($busi_id==20){
				$where .=" AND a.paiche_type=2 AND a.paiche_personal=0";
			}else{
				$where .=" AND a.paiche_type={$busi_id}";
			}
		}
        if(!empty($search_startDate)){
			$base_url.="&search_startDate={$search_startDate}";
            $where .=" AND a.paiche_startDate>='".strtotime($search_startDate)."'";
        }
		if(!empty($search_endDate)){
			$base_url.="&search_endDate={$search_endDate}";
            $where .=" AND a.paiche_startDate<".(strtotime($search_endDate." 23:59:59"));
        }
        if ($paiche_linker!=""){
        	$base_url.="&paiche_linker={$paiche_linker}";
        	$where .=" AND (a.paiche_linker like '%{$paiche_linker}%' OR f.client_name like '%{$paiche_linker}%')";
        }
        if ($paiche_contractNum!=""){
        	$base_url.="&paiche_contractNum={$paiche_contractNum}";
        	$where .=" AND a.paiche_contractNum like '%{$paiche_contractNum}%'";
        }
        if (!empty($companyid)){
        	$base_url.="&company={$companyid}";
        	$where.=" AND a.paicheCom={$companyid} ";
        }
        

        $where .=" AND a.paiche_type in (1,2) AND b.settle_totalKm>0 AND (b.settle_losses=0 OR (b.settle_losses=1 AND a.paiche_personal=1)) ";

        $sql="SELECT a.*,b.settle_totalKm,b.settle_losses,b.settle_overKmMoney,b.settle_overKmMoney_have,b.settle_overTimeMoney,b.settle_overTimeMoney_have,b.settle_favor,b.settle_waitTimeMoney,b.settle_waitTimeMoney_have,c.emp_name AS yewuyuan,d.emp_name AS siji,e.car_num,f.client_name,g.item_name,h.shunt_rent,h.shunt_rented,h.shunt_balance,h.shunt_money,h.shunt_endtimes,j.bro_name,m.shop_name,n.emp_name AS jiedaiyuan ".
			 "FROM `paiche` AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId ".
			 "LEFT JOIN emp AS c ON a.paicheCounterMan=c.emp_id ".
        	 "LEFT JOIN emp AS d ON a.paicheDriver=d.emp_id ".
			 "LEFT JOIN car AS e ON a.paicheCar=e.car_id ".
			 "LEFT JOIN client AS f ON a.paicheCom=f.client_id ".
			 "LEFT JOIN item AS g ON a.paiche_type=g.item_paicheType ".
			 "LEFT JOIN shunt AS h ON a.paiche_id=h.shuntPaicheId ".
			 "LEFT JOIN brothers AS j ON a.paiche_brother=j.bro_id ".
			 "LEFT JOIN shop AS m ON a.paiche_shopid=m.shop_id ".
			 "LEFT JOIN emp AS n ON a.paicheServerMan=n.emp_id ".
			 "WHERE {$where}  ORDER BY `paiche_id` DESC LIMIT $start,$per_page";
		
		$busiList = $model->getListBySql($sql);
		$total_item = $model->getTotal($where);
        

		$options = array(
			"baseurl"	 => $base_url,
			"totalitems" => $total_item,
			"perpage"	 => $per_page,
			"page"	     => $p,
			"maxpage"	 => 20,
			"pagestyle"  => $style,
			"showtotal"  => false
		);
		$pagination = new Pagination($options);
		$p = $pagination->getPage();
		$view  = $this->createView("operator/busiaccount/list.html");

		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();
		$object->PAGETITLE="订单结账";
		$object->busiList = $busiList;
		$object->total = $total_item;
		$object->companyid = $companyid;
		$object->companylist=$model->getEmpList("`client_id`,`client_name`"," AND client_recycle!=1","client");
        $object->category = $model->getcategory();
        $object->op = "account1";
        $object->url="accountlist1.php";
        $object->b_id=$busi_id;
        $object->firstop =$firstop;
		$view->assign($object);
		$view->display();
	}
	
	function accountlist2(){
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$per_page = 10;
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		
        $busi_id = Request::getVar('b_id','get');
		if (empty($busi_id)) $busi_id = 0;
                
        $search_startDate=Request::getVar('search_startDate','get');
		$search_endDate=Request::getVar('search_endDate','get');
		$companyid=Request::getVar('company','get');
		$paiche_linker=Request::getVar('paiche_linker','get');
        $paiche_contractNum=Request::getVar('paiche_contractNum','get');
        
		$model = $this->createModel("list",dirname( __FILE__ ));
		
		$base_url = "accountlist2.php?b_id={$busi_id}";
		
        
        $where = " a.paiche_recycle!=1 AND a.paiche_status>=0".($busi_id>0? " AND a.paiche_type = {$busi_id} ": "");
		if(!empty($search_startDate)){
			$base_url.="&search_startDate={$search_startDate}";
            $where .=" AND a.paiche_startDate>='".strtotime($search_startDate)."'";
        }
		if(!empty($search_endDate)){
			$base_url.="&search_endDate={$search_endDate}";
            $where .=" AND a.paiche_startDate<".(strtotime($search_endDate." 23:59:59"));
        }
        if ($paiche_linker!=""){
        	$base_url.="&paiche_linker={$paiche_linker}";
        	$where .=" AND (a.paiche_linker like '%{$paiche_linker}%' OR f.client_name like '%{$paiche_linker}%')";
        }
        if ($paiche_contractNum!=""){
        	$base_url.="&paiche_contractNum={$paiche_contractNum}";
        	$where .=" AND a.paiche_contractNum like '%{$paiche_contractNum}%'";
        }
        if (!empty($companyid)){
        	$base_url.="&company={$companyid}";
        	$where.=" AND a.paicheCom={$companyid} ";
        }
        $where .=" AND a.paiche_shunt=0 AND a.paiche_type in (1,2) AND b.settle_totalKm>0 AND b.settle_losses=2 ";
        $sql_0="SELECT DISTINCT paiche_id FROM `paiche_charges` WHERE charge_id<>1 AND `conv_money`>0 AND `have_in_money`<`conv_money`";

        $sql="SELECT a.*,b.settle_overKmMoney,b.settle_overKmMoney_have,b.settle_overTimeMoney,b.settle_overTimeMoney_have,b.settle_favor,c.emp_name AS yewuyuan,f.client_name,g.item_name,h.shunt_rent,h.shunt_rented,h.shunt_balance,h.shunt_money,h.shunt_endtimes,j.bro_name ".
			 "FROM `paiche` AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId ".
        	 "Inner Join ({$sql_0}) as kk On a.paiche_id=kk.paiche_id ".
			 "LEFT JOIN emp AS c ON a.paicheCounterMan=c.emp_id ".
			 "LEFT JOIN client AS f ON a.paicheCom=f.client_id ".
			 "LEFT JOIN item AS g ON a.paiche_type=g.item_paicheType ".
			 "LEFT JOIN shunt AS h ON a.paiche_id=h.shuntPaicheId ".
			 "LEFT JOIN brothers AS j ON a.paiche_brother=j.bro_id ".
			 "WHERE {$where}  ORDER BY `paiche_id` DESC LIMIT $start,$per_page";
		
		$busiList = $model->getListBySql($sql);
		$total_item = $model->getTotal_2($where,$sql_0);

		$options = array(
			"baseurl"	 => $base_url,
			"totalitems" => $total_item,
			"perpage"	 => $per_page,
			"page"	     => $p,
			"maxpage"	 => 20,
			"pagestyle"  => $style,
			"showtotal"  => false
		);
		$pagination = new Pagination($options);
		$p = $pagination->getPage();
		$view  = $this->createView("operator/busiaccount/list.html");

		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();
		$object->PAGETITLE="订单收余款";
		$object->busiList = $busiList;
		$object->total = $total_item;
		$object->companyid = $companyid;
		$object->companylist=$model->getEmpList("`client_id`,`client_name`"," AND client_recycle!=1","client");
        $object->category = $model->getcategory();
        $object->op = "account2";
        $object->url="accountlist2.php";
		$view->assign($object);
		$view->display();
	}
	function accountlist3(){//违约结算
		$firstop = Request::getVar('firstop','get');
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$per_page = 10;
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		
        $busi_id = Request::getVar('b_id','get');
		if (empty($busi_id)) $busi_id = 0;
                
        $search_startDate=Request::getVar('search_startDate','get');
		$search_endDate=Request::getVar('search_endDate','get');
		$companyid=Request::getVar('company','get');
		$paiche_linker=Request::getVar('paiche_linker','get');
        $paiche_contractNum=Request::getVar('paiche_contractNum','get');
        
		$model = $this->createModel("list",dirname( __FILE__ ));
		
		$base_url = "accountlist3.php?firstop={$firstop}&b_id={$busi_id}";
		
        
        $where = " a.paiche_recycle!=1 AND a.paiche_status=-1".($busi_id>0? " AND a.paiche_type = {$busi_id} ": "");
		if(!empty($search_startDate)){
			$base_url.="&search_startDate={$search_startDate}";
            $where .=" AND a.paiche_startDate>='".strtotime($search_startDate)."'";
        }
		if(!empty($search_endDate)){
			$base_url.="&search_endDate={$search_endDate}";
            $where .=" AND a.paiche_startDate<".(strtotime($search_endDate." 23:59:59"));
        }
        if ($paiche_linker!=""){
        	$base_url.="&paiche_linker={$paiche_linker}";
        	$where .=" AND (a.paiche_linker like '%{$paiche_linker}%' OR f.client_name like '%{$paiche_linker}%')";
        }
        if ($paiche_contractNum!=""){
        	$base_url.="&paiche_contractNum={$paiche_contractNum}";
        	$where .=" AND a.paiche_contractNum like '%{$paiche_contractNum}%'";
        }
        if (!empty($companyid)){
        	$base_url.="&company={$companyid}";
        	$where.=" AND a.paicheCom={$companyid} ";
        }
        $busiList=null;
        $total_item=0;
        if(!empty($firstop)){
        $where .=" AND b.settle_vioaccount=0 ";

        $sql="SELECT a.*,b.settle_overKmMoney,b.settle_overKmMoney_have,b.settle_overTimeMoney,b.settle_overTimeMoney_have,b.settle_vio,c.emp_name AS yewuyuan,f.client_name,g.item_name,h.shunt_rent,h.shunt_balance,h.shunt_money,h.shunt_endtimes,j.bro_name,m.shop_name,n.emp_name AS jiedaiyuan ".
			 "FROM `paiche` AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId ".
			 "LEFT JOIN emp AS c ON a.paicheCounterMan=c.emp_id ".
			 "LEFT JOIN client AS f ON a.paicheCom=f.client_id ".
			 "LEFT JOIN item AS g ON a.paiche_type=g.item_paicheType ".
			 "LEFT JOIN shunt AS h ON a.paiche_id=h.shuntPaicheId ".
			 "LEFT JOIN brothers AS j ON a.paiche_brother=j.bro_id ".
			 "LEFT JOIN shop AS m ON a.paiche_shopid=m.shop_id ".
			 "LEFT JOIN emp AS n ON a.paicheServerMan=n.emp_id ".
			 "WHERE {$where}  ORDER BY `paiche_id` DESC LIMIT $start,$per_page";
		
		$busiList = $model->getListBySql($sql);
		$total_item = $model->getTotal($where);
        }

		$options = array(
			"baseurl"	 => $base_url,
			"totalitems" => $total_item,
			"perpage"	 => $per_page,
			"page"	     => $p,
			"maxpage"	 => 20,
			"pagestyle"  => $style,
			"showtotal"  => false
		);
		$pagination = new Pagination($options);
		$p = $pagination->getPage();
		$view  = $this->createView("operator/busiaccount/list.html");

		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();
		$object->PAGETITLE="违约结算";
		$object->busiList = $busiList;
		$object->total = $total_item;
		$object->companyid = $companyid;
		$object->companylist=$model->getEmpList("`client_id`,`client_name`"," AND client_recycle!=1","client");
        $object->category = $model->getcategory();
        $object->op = "accvio";
        $object->url="accountlist3.php";
        $object->firstop =$firstop;
		$view->assign($object);
		$view->display();
	}
	function backmoneylist(){
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$per_page = 10;
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		
        $busi_id = Request::getVar('b_id','get');
		if (empty($busi_id)) $busi_id = 0;
                
        $search_startDate=Request::getVar('search_startDate','get');
		$search_endDate=Request::getVar('search_endDate','get');
		$companyid=Request::getVar('company','get');
		$paiche_linker=Request::getVar('paiche_linker','get');
        $paiche_contractNum=Request::getVar('paiche_contractNum','get');
        
		$model = $this->createModel("list",dirname( __FILE__ ));
		
		$base_url = "backmoneylist.php?";
		
        
        $where = " a.paiche_recycle!=1 AND a.paiche_status>=0".($busi_id>0? " AND a.paiche_type = {$busi_id} ": "");
		if(!empty($search_startDate)){
			$base_url.="&search_startDate={$search_startDate}";
            $where .=" AND a.paiche_startDate>='".strtotime($search_startDate)."'";
        }
		if(!empty($search_endDate)){
			$base_url.="&search_endDate={$search_endDate}";
            $where .=" AND a.paiche_startDate<".(strtotime($search_endDate." 23:59:59"));
        }
        if ($paiche_linker!=""){
        	$base_url.="&paiche_linker={$paiche_linker}";
        	$where .=" AND (a.paiche_linker like '%{$paiche_linker}%' OR f.client_name like '%{$paiche_linker}%')";
        }
        if ($paiche_contractNum!=""){
        	$base_url.="&paiche_contractNum={$paiche_contractNum}";
        	$where .=" AND a.paiche_contractNum like '%{$paiche_contractNum}%'";
        }
        if (!empty($companyid)){
        	$base_url.="&company={$companyid}";
        	$where.=" AND a.paicheCom={$companyid} ";
        }
        $where .=" AND (a.paiche_type =1 OR a.paiche_type =3) AND b.settle_totalKm>0 AND b.settle_losses=2 ";
        $sql_0="SELECT DISTINCT paiche_id FROM `paiche_charges` WHERE charge_id=1 AND back_money>0 AND have_in_money>0 AND have_back_money+break_money<have_in_money";

        $sql="SELECT a.*,c.emp_name AS yewuyuan,f.client_name,g.item_name,j.bro_name ".
			 "FROM `paiche` AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId ".
        	 "Inner Join ({$sql_0}) as kk On a.paiche_id=kk.paiche_id ".
			 "LEFT JOIN emp AS c ON a.paicheCounterMan=c.emp_id ".
			 "LEFT JOIN client AS f ON a.paicheCom=f.client_id ".
			 "LEFT JOIN item AS g ON a.paiche_type=g.item_paicheType ".
			 "LEFT JOIN shunt AS h ON a.paiche_id=h.shuntPaicheId ".
			 "LEFT JOIN brothers AS j ON a.paiche_brother=j.bro_id ".
			 "WHERE {$where}  ORDER BY `paiche_id` DESC LIMIT $start,$per_page";
		
		$busiList = $model->getListBySql($sql," AND a.charge_id=1 AND back_money>0 AND have_in_money>0 AND have_back_money+break_money<have_in_money");
		$total_item = $model->getTotal_2($where,$sql_0);

		$options = array(
			"baseurl"	 => $base_url,
			"totalitems" => $total_item,
			"perpage"	 => $per_page,
			"page"	     => $p,
			"maxpage"	 => 20,
			"pagestyle"  => $style,
			"showtotal"  => false
		);
		$pagination = new Pagination($options);
		$p = $pagination->getPage();
		$view  = $this->createView("operator/busiaccount/list.html");

		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();
		$object->PAGETITLE="退违章保证金";
		$object->busiList = $busiList;
		$object->total = $total_item;
		$object->companyid = $companyid;
		$object->companylist=$model->getEmpList("`client_id`,`client_name`"," AND client_recycle!=1","client");
        $object->category = $model->getcategory();
        $object->op = "backmoney";
        $object->url="backmoneylist.php";
		$view->assign($object);
		$view->display();
	}





	function account(){
		//print_r("bb");exit;
		$pid = Request::getVar('pid','get');
		$account_flag=Request::getVar('op','get');
		//print_r($account_flag);exit;
		$charge_list=null;
		$youhui_list=null;
		$default_payments=$default_bank=$default_bank2=0;
		$model = $this->createModel("list",dirname( __FILE__ ));
		if ($account_flag=="deposit"){//收押金
			$charge_list=$model->getChargeList($pid," AND a.charge_id=1 AND `conv_money`>0 ");
			$default_payments=1;
			$default_bank=8;
		}
		
		if ($account_flag=="account0"){//收款
			$charge_list=$model->getChargeList($pid," AND a.charge_id=2 AND `conv_money`>0 AND a.`have_in_money`<a.`conv_money`");
			$default_payments=1;
			$default_bank=1;
		}

		if ($account_flag=="accountcon"){//收续租金
			$charge_list=$model->getChargeList($pid," AND (((a.charge_id in (2,4,5,6,7,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23) OR a.continuerent_flag=1) 
AND `conv_money`>0 AND a.`have_in_money`<a.`conv_money`) or(a.charge_id=3 and (`conv_money`>0 or a.`have_in_money`>0)))");

			$youhui_list=$model->getYouhui($pid);
			
			$default_payments=1;
			$default_bank=1;
		}
		
		if ($account_flag=="freezedeposit"){//冻结押金
			$charge_list=$model->getChargeList($pid," AND a.charge_id=1 AND back_money>0 AND have_in_money>0");
			
		}


		if ($account_flag=="backdeposit"){//退押金
			
			$charge_list=$model->getChargeList($pid," AND a.charge_id=1 AND back_money>0 AND have_in_money>0");
			if ($charge_list){
				foreach($charge_list as $key=>$val)
		        {
		        	$default_payments=$val['payments_id']==0?1:$val['payments_id'];
					$default_bank=$val['bank_id']==0?8:$val['bank_id'];
		        }
	        }
	        
		}

		if ($account_flag=="account1" || $account_flag=="account2"){//结账 //收余款
			$charge_list=$model->getChargeList($pid," AND a.charge_id<>1 AND `conv_money`>0 AND a.`have_in_money`<a.`conv_money`");
			$default_payments=1;
			$default_bank=1;
			$youhui_list=$model->getYouhui($pid);



		}
		if ($account_flag=="backmoney"){//退违章保证金
			$charge_list=$model->getChargeList($pid," AND a.charge_id=1 AND back_money>0 AND have_in_money>0 AND have_back_money<have_in_money");
			if ($charge_list){
				foreach($charge_list as $key=>$val)
		        {
		        	$default_payments=$val['payments_id']==0?1:$val['payments_id'];
					$default_bank=$val['bank_id']==0?8:$val['bank_id'];
		        }
	        }
	        $fields="SUM(`breakrules_money`) AS breakrules_money";
			$back= $model->getEmpList($fields," AND breakrulesPaicheId={$pid}","breakrules");
			$break_money= empty($back[0]['breakrules_money'])? 0 : $back[0]['breakrules_money'];
	        
		}
		if ($account_flag=="accvio"){//违约结算
			$charge_list=$model->getChargeList($pid," AND a.`have_in_money`>0");
			$default_payments=1;
			$default_bank=1;
			$default_bank2=8;
		}
		
		$fields="`payment_id`,`payment_name`,`payment_fee`";
		$payments_list=$model->getEmpList($fields," AND payment_recycle!=1","payments");
		$fields="`bank_id`,`bank_name`";
		$bank_list=$model->getEmpList($fields," AND bank_recycle!=1","banks","","bank_order");
		
		$object = new stdClass();
		
		$object->youhui_list = $youhui_list;
		
		
		$object->chargelist = $charge_list;
		$object->paymentslist = $payments_list;
		$object->banklist = $bank_list;
		$object->pid = $pid;
		$object->op = "account";
		$object->account_flag = $account_flag;
		if ($account_flag=="account1" || $account_flag=="account2" || $account_flag=="accvio" || $account_flag=="freezedeposit" || $account_flag=="backdeposit"){//结账 //收余款 //违约
			$busiInfo = $model->getBusinessInfo($pid);
			$object->list = $busiInfo;
			if ($account_flag=="freezedeposit"){//冻结押金，取违章记录
				//$w="breakrules_CarId={$c_id} OR breakrules_CarId in (Select distinct changecar_carA From changecar Where changecarPaicheId={$pid}) AND changecar_startdate";
				//$sql="Select a.*,b.car_num From breakrules as a Left Join car as b on a.breakrules_CarId=b.car_id Where breakrules_DriverID=0 AND breakrulesPaicheId=0 AND ({$w}) AND breakrules_date>={$sdate} AND breakrules_date<={$edate} Order by breakrules_date";

				$object->breaklist = $model->findBreakListbyPid($pid,$busiInfo);
			}
		}
		

		if ($account_flag=="backmoney" || $account_flag=="freezedeposit" || $account_flag=="backdeposit"){
		//$object->breakmoney = $break_money;
		$object->leftmoney=0;
		}
		$object->default_payments = $default_payments;
		$object->default_bank = $default_bank;
		$object->default_bank2 = $default_bank2;
		if ($account_flag=="accvio" && $charge_list){//违约结算
			$aa=0;
			foreach($charge_list as $key=>$val)
	        {
	        	if ($val['charge_name']=="押金"){
	        		$object->paiche_deposit_have = $val["have_in_money"]-$val["have_back_money"];
	        	}else{//if ($val['charge_name']=="租金")
	        		$aa += $val["have_in_money"];
	        	}
	        }
			$object->paiche_rented =$aa;
		}
		$object->addtime = date("Y-m-d H:i:s");
		$view  = $this->createView("operator/busiaccount/account.html");
		$view->assign($object);
		$view->display();
	}




	function accept(){
		
		$pid = Request::getVar('pid','post');
		$account_flag=Request::getVar('account_flag','post');//
		$model = $this->createModel("list",dirname( __FILE__ ));
		
		$title="";
		$re=true;
		$money=Request::getVar('infact','post');//实际金额
				
		$arr_rec=Request::getVar('charge_id','post');//收费记录
		$arr_havemoney=Request::getVar('charge_havemoney','post');//已收款金额


		//优惠
		$youhui_id=Request::getVar('youhui_id','post');//优惠
		$youhui_omone=Request::getVar('youhui_omone','post');//已优惠金额
		if(count($youhui_id)>0){
			for($i=0;$i<count($youhui_id);$i++){
				$sql_youhui="SELECT youhui_omone from paiche_youhui where id={$youhui_id[$i]}";
				$youhui_omone_a=$model->getListBySql_a($sql_youhui);
				$youhui_omone_a=$youhui_omone_a[0]['youhui_omone'];
				$object_youhui = new Object();
				$object_youhui->id=$youhui_id[$i];
				$object_youhui->youhui_omone=$youhui_omone[$i]+$youhui_omone_a;
				if ($model->update($object_youhui,"id","paiche_youhui")){
				}else{
					$re=false;
				}
			}
			
		}


		$arr_money=Request::getVar('charge_money','post');
		$payments=Request::getVar('payments','post');
		$bank=Request::getVar('bank','post');
		if ($account_flag=="deposit" || $account_flag=="account0" || $account_flag=="accountcon"){//收押金 //收租金  //收续租金
			$addtime = Request::getVar('addtime','post');
			$title=$account_flag=="deposit"?"收押金":($account_flag=="account0"?"收租金":"收续租金");
			for($i=0;$i<count($arr_rec);$i++){
				$object = new Object();
	    		$object->id = $arr_rec[$i];
		        $object->have_in_money = $arr_havemoney[$i]+$arr_money[$i];
		        $object->status =1;
		        $object->payments_id = $payments;
	        	$object->bank_id = $bank;
	        	if ($account_flag=="deposit"){
	        		$object->charge_remarks = Request::getVar('charge_remarks','post');
	        	}
				if ($model->update($object,"id","paiche_charges")){
				}else{
					$re=false;
				}
			}		
			$object = new Object();
    		$object->paiche_id = $pid;
	        $object->payments_id = $payments;
	        $object->bank_id = $bank;
	        $object->money = $money;
	        $object->add_time = empty($addtime) ? time() : strtotime($addtime);
	        $object->name = $title;
			if ($account_flag=="deposit"){
	        	$object->remark = Request::getVar('charge_remarks','post');
	        }
	        
			$object2 = new Object();
			$object2->paiche_id = $pid;
			$object2->paiche_accountstatus=1;//改变已收款状态
			
			if ($model->store($object,"account_log") && $model->update($object2,'paiche_id')){
			}else{
				$re=false;
			}
			$result=$re ? "订单{$title}成功！":"订单{$title}失败，返回重试！";
			
		}
		if ($account_flag=="freezedeposit"){//冻结押金
			$title="冻结押金";
			$arr_rec=Request::getVar('back_id','post');//记录
			$arr_havemoney=Request::getVar('freeze_havemoney','post');//已冻结金额
			$arr_money=Request::getVar('freeze_money','post');//本次冻结金额
			
			for($i=0;$i<count($arr_rec);$i++){
				$object = new Object();
	    		$object->id = $arr_rec[$i];
		        $object->have_freeze_money = $arr_havemoney[$i]+$arr_money[$i];
				if ($model->update($object,"id","paiche_charges")){
				}else{
					$re=false;
				}
			}
			
			$object = new stdClass();
			$object->breakrules_id = Request::getVar('breakrules_id','post');
		  	$object->breakrulesPaicheId=$pid;
		  	$object->breakrules_times=time();
			if ($model->update($object,"breakrules_id","breakrules")){
			}else{
				$re=false;
			}
			
			$result=$re ? "冻结押金成功！":"冻结押金失败，返回重试！";
		}

		if ($account_flag=="backdeposit"){//退押金
			$title="退押金";
			$arr_rec=Request::getVar('back_id','post');//退款记录
			$arr_havemoney=Request::getVar('back_havemoney','post');//已退款金额
			$arr_money=Request::getVar('back_money','post');
			$reason = Request::getVar('backreason','post');
			
			for($i=0;$i<count($arr_rec);$i++){
				$object = new Object();
	    		$object->id = $arr_rec[$i];
		        $object->have_back_money = $arr_havemoney[$i]+$arr_money[$i];
		        $object->back_reason=$reason;
				if ($model->update($object,"id","paiche_charges")){
				}else{
					$re=false;
				}
			}
			if ($re){
				$object = new Object();
	    		$object->paiche_id = $pid;
		        $object->payments_id = $payments;
		        $object->bank_id = $bank;
		        $object->money = $money;
		        $object->add_time = time();
		        $object->name = $title;
		        $object->remark=$reason;
				if ($model->store($object,"account_log")){
				}else{
					$re=false;
				}
			}
			$result=$re ? "退押金成功！":"退押金失败，返回重试！";
		}

		if ($account_flag=="account1"){//结账
			$chkOther=Request::getVar('chkOther','post');//额外费用谁付？1-调车公司付
			$title="租车结账收款";
			for($i=0;$i<count($arr_rec);$i++){
				$object = new Object();
	    		$object->id = $arr_rec[$i];
		        $object->have_in_money = $arr_havemoney[$i]+($chkOther==1?0:$arr_money[$i]);
		        $object->status =1;
		        $object->payments_id = $payments;
	        	$object->bank_id = $bank;
				if ($model->update($object,"id","paiche_charges")){
				}else{
					$re=false;
				}
			}

			if ($re){//处理超公里费用和超时费用已收部分
				$settle_billDate=Request::getVar('settle_billDate','post');
				$object9 = new Object();
				$object9->settlePaicheId = $pid;
				$object9->settle_losses=2;//改变已结账状态
				$object9->settle_billNum=Request::getVar('settle_billNum','post');// 发票号码
				$object9->settle_billDate=empty($settle_billDate)?0:strtotime($settle_billDate);
				$overKmMoney=Request::getVar('overKmMoney','post');
				$overTimeMoney=Request::getVar('overTimeMoney','post');
				$waitTimeMoney=Request::getVar('waitTimeMoney','post');
				if ((!empty($overKmMoney) || !empty($overTimeMoney) || !empty($waitTimeMoney)) && $chkOther!=1){
				  	$object9->settle_overKmMoney_have=empty($overKmMoney)?0:$overKmMoney;		  	
				  	$object9->settle_overTimeMoney_have=empty($overTimeMoney)?0:$overTimeMoney;
				  	$object9->settle_waitTimeMoney_have=empty($waitTimeMoney)?0:$waitTimeMoney;
				}
				if ($model->update($object9,'settlePaicheId','settle')){
				}else{
					$re=false;
				}
			}

			if ($re){//处理出车记录
				$object_paiche = new Object();
				$object_paiche->paiche_id = $pid;
				$object_paiche->paiche_jie=3;//改变已结账状态
				if ($model->update($object_paiche,'paiche_id','paiche')){
				}else{
					$re=false;
				}
			}

			if ($re){//处理出车记录
				$object = new Object();
				$object->drivePaicheId = $pid;
				$object->drive_account=1;//改变已结账状态
				if ($model->update($object,'drivePaicheId','paiche_drive')){
				}else{
					$re=false;
				}
			}
			if ($re){
				$object = new Object();
	    		$object->paiche_id = $pid;
		        $object->payments_id = $payments;
		        $object->bank_id = $bank;
		        $object->money = ($chkOther==1?0:$money);
		        $object->add_time = time();
		        $object->name = $title;
				if ($model->store($object,"account_log")){
				}else{
					$re=false;
				}
			}
			if ($re && $chkOther==1){
				$other= Request::getVar('shunt_other','post');
				$object = new Object();
	    		$object->shuntPaicheId = $pid;
	    		$object->shunt_other=-1*$other;
				if ($model->update($object,"shuntPaicheId","shunt")){
				}else{
					$re=false;
				}
			}
			$result=$re ? "租车结账收款成功！":"租车结账收款失败，返回重试！";
		}
		if ($account_flag=="account2"){//收余款
			$title="结账收余款";
			for($i=0;$i<count($arr_rec);$i++){
				$object = new Object();
	    		$object->id = $arr_rec[$i];
		        $object->have_in_money = $arr_havemoney[$i]+$arr_money[$i];
		        $object->status =1;
		        $object->payments_id = $payments;
	        	$object->bank_id = $bank;
				if ($model->update($object,"id","paiche_charges")){
				}else{
					$re=false;
				}
			}
			if ($re){//处理超公里费用和超时费用已收部分
				$overKmMoney=Request::getVar('overKmMoney','post');
				$overTimeMoney=Request::getVar('overTimeMoney','post');
				if (!empty($overKmMoney) || !empty($overTimeMoney)){
				  	$object9 = new Object();
					$object9->settlePaicheId = $pid;
					if (!empty($overKmMoney)){
					$object9->settle_overKmMoney_have=Request::getVar('overKmMoneyhave','post')+ $overKmMoney;
					}
					if (!empty($overTimeMoney)){
				  	$object9->settle_overTimeMoney_have= Request::getVar('overTimeMoneyhave','post')+$overTimeMoney;
					}
					if ($model->update($object9,'settlePaicheId','settle')){
					}else{
						$re=false;
					}
				}
			}
			if ($re){
				$object = new Object();
	    		$object->paiche_id = $pid;
		        $object->payments_id = $payments;
		        $object->bank_id = $bank;
		        $object->money = $money;
		        $object->add_time = time();
		        $object->name = $title;
				if ($model->store($object,"account_log")){
				}else{
					$re=false;
				}
			}
			$result=$re ? "租车结账收余款成功！":"租车结账收余款失败，返回重试！";
		}
		if ($account_flag=="backmoney"){//退违章保证金
			$title="退违章保证金";
			$arr_rec=Request::getVar('back_id','post');//退款记录
			$arr_havemoney=Request::getVar('back_havemoney','post');//已退款金额
			$arr_breakmoney=Request::getVar('break_money','post');//违章金额
			$arr_money=Request::getVar('back_money','post');
			for($i=0;$i<count($arr_rec);$i++){
				$object = new Object();
	    		$object->id = $arr_rec[$i];
		        $object->have_back_money = $arr_havemoney[$i]+$arr_money[$i];
		        $object->break_money = $arr_breakmoney[$i];
				if ($model->update($object,"id","paiche_charges")){
				}else{
					$re=false;
				}
			}
			$object = new Object();
    		$object->paiche_id = $pid;
	        $object->payments_id = $payments;
	        $object->bank_id = $bank;
	        $object->money = $money;
	        $object->add_time = time();
	        $object->name = $title;
			if ($model->store($object,"account_log")){
			}else{
				$re=false;
			}
			$result=$re ? "退违章保证金成功！":"退违章保证金失败，返回重试！";
		}
		if ($account_flag=="accvio"){//违约结算
			$client_id=Request::getVar('client_id','post');//
			$settle_vio=Request::getVar('settle_vio','post');//违约金
			$money1=Request::getVar('money1','post');//账户1金额
			if (empty($money1)){
				$money1=0;
			}
			$money2=Request::getVar('money2','post');//账户2金额
			if (empty($money2)){
				$money2=0;
			}
			if ($money != 0 && $money != $money1+$money2+$settle_vio){
				$object = new stdClass();
				$object->result = "两个账户的金额之和不等于总金额，返回重新输入！";
				$view  = $this->createView("operator/busiaccount/result.html");
				$view->assign($object);
				$view->display();
				exit();
			}
			
			$re=true;
		
			$arr_rec=Request::getVar('charge_id','post');//退款记录
			$arr_havebackmoney=Request::getVar('charge_havebackmoney','post');
			$arr_money=Request::getVar('back_money','post');
			for($i=0;$i<count($arr_rec);$i++){
				if ($arr_money[$i]!=0){
					$object = new Object();
		    		$object->id = $arr_rec[$i];
			        $object->have_back_money = $arr_havebackmoney[$i]+$arr_money[$i];
					if ($model->update($object,"id","paiche_charges")){
					}else{
						$re=false;
					}
				}
			}
			if ($re && $money1 != 0){				
				$object = new Object();
	    		$object->paiche_id = $pid;
	    		$object->client_id = 0;
		        $object->payments_id = $payments;
		        $object->bank_id = $bank;
		        $object->money = $money1;
		        $object->add_time = time();
		        $object->name = "租车违约退租金";
				if ($model->store($object,"account_log")){
				}else{
					$re=false;
				}
			}
			if ($re && $money2!=0){
				$bank2=Request::getVar('bank2','post');
				$payments2=Request::getVar('payments2','post');
				$object = new Object();
				$object->paiche_id = $pid;
	    		$object->client_id = 0;
		        $object->payments_id = $payments2;
		        $object->bank_id = $bank2;
		        $object->money = $money2;
		        $object->add_time = time();
		        $object->name = "租车违约退押金";
				if ($model->store($object,"account_log")){
				}else{
					$re=false;
				}
			}

			if ($re && $settle_vio != 0){				
				$object = new Object();
	    		$object->paiche_id = $pid;
	    		$object->client_id = (empty($client_id)?0:$client_id);
		        $object->payments_id = $payments;
		        $object->bank_id = $bank;
		        $object->money = $settle_vio;
		        $object->add_time = time();
		        $object->name = "租车违约收违约金";
		        
				if ($model->store($object,"account_log")){
				}else{
					$re=false;
				}
			}
			$object2 = new Object();
			$object2->settlePaicheId = $pid;
			$object2->settle_vioaccount = 1;
			if ($model->update($object2,'settlePaicheId','settle')){
			}else{
				$re=false;
			}
			$result=$re ? "违约结算成功！":"违约结算失败，返回重试！";
			
		}
		
		$object = new stdClass();
		$object->result = $result;
		$view  = $this->createView("operator/busiaccount/result.html");
		$view->assign($object);
		$view->display();
	}
	
}
?>