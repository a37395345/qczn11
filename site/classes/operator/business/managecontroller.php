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




class ManageController extends AdminController
{
	/**
	 * Constructor
	 *
	 * @params	array	Controller configuration array
	 */
	 var $arr_item = array("dayWork"=>8,"weekWork"=>14,"holWork"=>15,"travelTimes"=>12,"traveloutTimes"=>21,"travelRoomTimes"=>13,"meals"=>16,"rooms"=>9,"advanceIoll"=>17,"tel"=>10,"kmsubsidies"=>18,"olisubsidies"=>20,"cleaning"=>19);
	function __construct($config = array())
	{
		parent::__construct($config);
		
		//if(!($this->checkPrivilege("system"))){
			//$this->redirect("/admincp/empty.php","您没有权限访问该页面！");
		//}
		$this->registerTask( 'batchaccountlist','batchaccountlist');
		$this->registerTask( 'batchaccountlist2','batchaccountlist2');
		$this->registerTask( 'batchcountdetail','batchcountdetail');
		$this->registerTask( 'shuntaccountlist','shuntaccountlist');
		$this->registerTask( 'shuntcountdetail','shuntcountdetail');
		$this->registerTask( 'shuntexport','shuntexport');
		$this->registerTask( 'longtimelist','longtimelist');
		$this->registerTask( 'searchlist','searchlist');
		$this->registerTask( 'outcarinput','outcarinput');
		$this->registerTask( 'monthaccountlist','monthaccountlist');
		$this->registerTask( 'clientlist','clientlist');
		$this->registerTask( 'list','getList');//长期用车列表
		$this->registerTask( 'create','create');
		$this->registerTask( 'insert','insert');
		$this->registerTask( 'modify','modify');
		$this->registerTask( 'update','update');
		$this->registerTask( 'delete','delete');
		$this->registerTask( 'complete','complete');
		$this->registerTask( 'generate','generate');
		$this->registerTask( 'detail','detail');
		$this->registerTask( 'returncar','returncar');
        $this->registerTask( 'returncar_accept','returncar_accept');
		$this->registerTask( 'givecar','givecar');
		$this->registerTask( 'givecar_accept','givecar_accept');
        $this->registerTask( 'paichedetail','paichedetail');
        $this->registerTask( 'checkfirst','checkfirst');
        $this->registerTask( 'uppaichedate','uppaichedate');
	}
	function display(){
		echo "display";
	}
	function batchaccountlist(){
			



		$base_url="batchaccountlist.php";
		$model = $this->createModel("manage",dirname( __FILE__ ));
		$where ="a.paiche_recycle!=1 AND a.paiche_status>-1 AND b.settle_totalKm>0 AND b.settle_losses<>2 AND (a.paiche_type = 1 OR a.paiche_type = 2)";

		$sql="Select a.paicheCom,c.client_name,Count(a.paiche_id) as nCount,Sum(b.settle_overKmMoney+settle_overTimeMoney) as aa From `paiche` As a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId LEFT JOIN client AS c ON a.paicheCom=c.client_id Where a.paiche_personal=0 AND {$where} Group by a.paicheCom,c.client_name";
		
		$busiList = $model->getListBySql($sql,$where);
		
		$object = new stdClass();
		$object->busiList = $busiList;
		$object->title = "临时用车月结";
		
		$view  = $this->createView("operator/business/batchaccountlist.html");
		$view->assign($object);
		$view->display();
	}
	function batchaccountlist2(){
				
		$base_url="batchaccountlist.php";
		$model = $this->createModel("manage",dirname( __FILE__ ));
		$where ="a.paiche_recycle!=1 AND a.paiche_status>-1 AND b.settle_totalKm>0 AND b.settle_losses=1 AND (a.paiche_type = 1 OR a.paiche_type = 2)";

		$sql="Select 0 as paicheCom,a.paiche_linker as client_name,Count(a.paiche_id) as nCount,Sum(b.settle_overKmMoney+settle_overTimeMoney) as aa From `paiche` As a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId Where a.paiche_personal=1 AND {$where} Group by a.paiche_linker";
		
		$busiList = $model->getListBySql($sql,$where);

		$object = new stdClass();
		$object->busiList = $busiList;
		$object->title = "个人挂账结算";
		
		$view  = $this->createView("operator/business/batchaccountlist.html");
		$view->assign($object);
		$view->display();
	}
	function shuntaccountlist(){
		//print_r("expression");exit;
		$base_url="shuntaccountlist.php";
		
		$model = $this->createModel("manage",dirname( __FILE__ ));
		$where=" ";
		$sql="Select shuntCom,c.bro_name,Sum(shunt_rented-shunt_rent) as mMoney From `shunt` AS a inner Join `paiche` as b on a.shuntPaicheId=b.paiche_id LEFT JOIN brothers AS c ON a.shuntCom=c.bro_id Where paiche_recycle!='1' and (paiche_shunt=1 or paiche_brother>0) and paiche_status>=0 and shunt_end=0 Group by a.shuntCom,c.bro_name";
		
		$busiList = $model->getListBySql($sql,$where);

		$object = new stdClass();
		$object->busiList = $busiList;
		
		$view  = $this->createView("operator/business/shuntaccountlist.html");
		$view->assign($object);
		$view->display();
	}
	function longtimelist(){
		$busi_id = Request::getVar('b_id','get');
		$search_startDate=Request::getVar('search_startDate','get');
		$search_endDate=Request::getVar('search_endDate','get');
		$paiche_linker=Request::getVar('paiche_linker','get');
		$base_url = "longtimelist.php?b_id={$busi_id}";
		
		$model = $this->createModel("manage",dirname( __FILE__ ));
		$where ="a.paiche_recycle!=1 AND a.paiche_type = {$busi_id} AND a.paiche_status>-1 ";
		if(!empty($search_startDate)){
			$base_url.="&search_startDate={$search_startDate}";
            $where .=" AND a.paiche_startDate>='".strtotime($search_startDate)."'";
        }
		if(!empty($search_endDate)){
			$base_url.="&search_endDate={$search_endDate}";
            $where .=" AND a.paiche_startDate<".(strtotime($search_endDate." 23:59:59"));
        }
        
		$sql="Select a.paicheCom,c.client_name,Count(a.paiche_id) as nCount From `paiche` As a LEFT JOIN client AS c ON a.paicheCom=c.client_id Where a.paiche_personal=0 AND {$where} ".(empty($paiche_linker) ? "" : " AND c.client_name like '%{$paiche_linker}%'")." Group by a.paicheCom,c.client_name";
		$sql.=" Union All ";
		$sql.="Select 0 as paicheCom,a.paiche_linker as client_name,Count(a.paiche_id) as nCount From `paiche` As a Where a.paiche_personal=1 AND {$where} ".(empty($paiche_linker) ? "" : " AND a.paiche_linker like '%{$paiche_linker}%'")." Group by a.paiche_linker";
		
		$busiList = $model->getListBySql($sql,$where);

		$object = new stdClass();
		$object->PAGETITLE=$model->getPageTitle($busi_id)."派车管理";
		$object->busiList = $busiList;
		$object->b_id = $busi_id;
		
		$view  = $this->createView("operator/business/longtimelist.html");
		$view->assign($object);
		$view->display();
	}
	function batchcountdetail(){
		$bill_code=Request::getVar('pcode','get');
		$id_card=Request::getVar('id_card','get');
		$phone=Request::getVar('phone','get');
		$note='';
		$model = $this->createModel("list",dirname( __FILE__ ));
		$where = " a.paiche_recycle!=1 ";
		if (!empty($bill_code)){
			$where .= " AND b.settle_lossescode = '{$bill_code}' ";
			$title="临时用车批量结算详细";
			$sql="Select month_remarks,settle_favorreason From paiche_month Where month_code='{$bill_code}'";
			$tmpinfo=$model->getRow(0,$sql);
			$note=$tmpinfo['month_remarks'];
			$favorreason=$tmpinfo['settle_favorreason'];
		}
		if (!empty($phone)){
			$where .= " AND a.paiche_personal=1 and a.paiche_status>-2 and a.paiche_linkerPhone = '{$phone}' and paiche_type=2 ";
			$title="个人用车记录列表";
		}
		if (!empty($id_card)){
			$where .= " AND a.paiche_personal=1 and a.paiche_status>-2 and a.paiche_linkerNum = '{$id_card}' and paiche_type=1 ";
			$title="个人用车记录列表";
		}
		
		$order="`paiche_id` DESC";
		
		$busiList = $model->getList(0,200, $where,$order);

		$object = new stdClass();
		$object->busiList = $busiList;
		$object->total = count($busiList);
		$object->id_card=$id_card;
		$object->title=$title;
		$object->summoney=0;
		$object->note=$note;
		$object->favorreason=$favorreason;
		
		$view  = $this->createView("operator/business/batchaccountdetail.html");
		$view->assign($object);
		$view->display();
	}
	function shuntcountdetail(){
		$model = $this->createModel("list",dirname( __FILE__ ));
		$bill_code=Request::getVar('pcode','get');
		$id_card=Request::getVar('id_card','get');
		$where = " a.paiche_recycle!=1 ";
		if (!empty($bill_code)){
			$where .= " AND h.shunt_endcode = '{$bill_code}' ";
			$title="调车结算详细";
			$sql="Select month_remarks,settle_favorreason From paiche_month Where month_code='{$bill_code}'";
			$tmpinfo=$model->getRow(0,$sql);
			$favorreason=$tmpinfo['settle_favorreason'];
		}
		if (!empty($id_card)){
			$where .= " AND a.paiche_personal=1 and a.paiche_status>-2 and a.paiche_linkerNum = '{$id_card}' ";
			$title="个人用车记录列表";
		}
		
		$order="`paiche_id` DESC";
		
		$busiList = $model->getList(0,200, $where,$order);

		$object = new stdClass();
		$object->busiList = $busiList;
		$object->total = count($busiList);
		$object->id_card=$id_card;
		$object->title=$title;
		$object->summoney=0;
		$object->favorreason=$favorreason;
		
		$view  = $this->createView("operator/business/batchaccountdetail.html");
		$view->assign($object);
		$view->display();
	}
	function shuntexport()
	{
		$pids = Request::getVar('pids','get');
		$model = $this->createModel("list",dirname( __FILE__ ));

		$busiList = $model->getList(0,1000, " a.`paiche_id` in ({$pids}) "," `paiche_id` DESC");
		
		header ( "Content-type:application/vnd.ms-excel" );
		header ( "Content-Disposition:filename=调车清单.xls" );
		echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
		<html xmlns='http://www.w3.org/1999/xhtml'>
		<head>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		<title></title>
		</head>
		<body>
		<table width='100%' border='1'>
		  <tr>
		    <td colspan='6'>调车清单</td>
		  </tr>		
		  <tr>
		    <td>合同号</td>
		    <td>用车开始日期</td>
		    <td>用车结束日期</td>
		    <td>路线</td>
		    <td>金额明细</td>
		    <td>需结算金额</td>
		</tr>";
        if(is_array($busiList)){
            foreach($busiList as $item)
            {
            	echo "<tr>
            	<td>'".$item["paiche_contractNum"]."</td>
            	<td>".$item["paiche_startDate"]."</td>
            	<td>".$item["paiche_endDate"]."</td>
			  	<td>".$item["paiche_line"]."</td>
			  	<td>";
            	if ($item["paiche_shunt"]==1){
            		echo "调车公司收现：".$item["shunt_rented"]."元  调车公司报价：".$item["shunt_rent"]."元";
            	}
            	if ($item["paiche_brother"]>0){
            		echo "我公司收现：".(-1*$item["shunt_rented"])."元  我公司报价：".(-1*$item["shunt_rent"])."元";
            		if ($item["shunt_other"]!=0) echo "额外费用：".(-1*$item["shunt_other"])."元";
            	}
            	echo "</td>
				<td>".($item["shunt_rented"]-$item["shunt_rent"]-$item["shunt_other"])."</td>
				</tr>";
            }
        }
        echo "
		</table>
		</body>
		</html>";
	}
	







	function searchlist(){

		$firstop = Request::getVar('firstop','get');
		$shop_id=$_SESSION['shopid'];
		$p = Request::getVar('p','get');
		$busi_type=Request::getVar('b_type','get');
        $busi_id = Request::getVar('b_id','get');
        $search_startDate=Request::getVar('search_startDate','get');
		$search_endDate=Request::getVar('search_endDate','get');
		$search_status=Request::getVar('search_status','get');
		$search_shop=Request::getVar('search_shop','get');
		$companyid=Request::getVar('company','get');
		$brotherid=Request::getVar('paiche_brother','get');
		$paiche_linker=Request::getVar('paiche_linker','get');
		$paiche_linkerPhone=Request::getVar('paiche_linkerPhone','get');
		$paiche_linkerNum=Request::getVar('paiche_linkerNum','get');
		$paiche_car=Request::getVar('paiche_car','get');
		$paicheDriver=Request::getVar('paicheDriver2','get');
		$paicheCounterMan=Request::getVar('paicheCounterMan2','get');
        $paiche_contractNum=Request::getVar('paiche_contractNum','get');
        $paiche_line=Request::getVar('paiche_line','get');
        
		$model = $this->createModel("list",dirname( __FILE__ ));
		if(empty($p)){$p=1;}
		$base_url = "searchlist.php?firstop={$firstop}&b_type={$busi_type}&b_id={$busi_id}";
		$per_page = 10;
		$iswhere=0;
        
		//$subwhere=$this->getBusiTypePrivilege();
		$subwhere="Select item_paicheType From item Where item_type={$busi_type}";
		$where1="";
        $where = " a.paiche_recycle!=1 AND IFNULL( a.paiche_aaa,'')<>'补单'".($busi_id>0? " AND a.paiche_type = {$busi_id} ": "")." AND a.paiche_type in ({$subwhere})";
		if(!empty($search_startDate)){
			$base_url.="&search_startDate={$search_startDate}";
            $where .=" AND a.paiche_endDate>=".strtotime($search_startDate);
            $iswhere=1;
        }
		if(!empty($search_endDate)){
			$base_url.="&search_endDate={$search_endDate}";
            $where .=" AND a.paiche_startDate<=".(strtotime($search_endDate." 23:59:59"));
            $iswhere=1;
        }
        
        if ($paiche_linker!=""){
        	$base_url.="&paiche_linker={$paiche_linker}";
        	$where .=" AND (a.paiche_linker like '%{$paiche_linker}%' OR f.client_name like '%{$paiche_linker}%')";
        	$iswhere=1;
        }
		if ($paiche_linkerPhone!=""){
        	$base_url.="&paiche_linkerPhone={$paiche_linkerPhone}";
        	$where .=" AND a.paiche_linkerPhone like '%{$paiche_linkerPhone}%'";
        	$iswhere=1;
        }
        if ($paiche_linkerNum!=''){
        	$base_url.="&paiche_linkerNum={$paiche_linkerNum}";
        	$where .=" AND a.paiche_linkerNum = '{$paiche_linkerNum}'";
        	$iswhere=1;
        }
        
        if ($paiche_car!=""){
        	$base_url.="&paiche_car={$paiche_car}";
        	$where .=" AND (e.car_num like '%{$paiche_car}%' OR a.paiche_id in (Select changecarPaicheId From changecar as a Left Join car as ee ON a.changecar_carA=ee.car_id Where ee.car_num like '%{$paiche_car}%'))";
        	//$where .=" AND e.car_num like '%{$paiche_car}%'";
        	$iswhere=1;
        }
        
        if (!empty($paicheDriver)){
        	$base_url.="&paicheDriver2={$paicheDriver}";
        	$where .=" AND a.paicheDriver = '{$paicheDriver}'";
        	$iswhere=1;
        }
        if (!empty($paicheCounterMan)){
        	$base_url.="&paicheCounterMan2={$paicheCounterMan}";
        	$where .=" AND a.paicheCounterMan = '{$paicheCounterMan}'";
        	$iswhere=1;
        }
        if ($paiche_contractNum!=""){
        	$base_url.="&paiche_contractNum={$paiche_contractNum}";
        	$where .=" AND a.paiche_contractNum like '%{$paiche_contractNum}'";
        	$iswhere=1;
        }
		if (empty($search_shop)){
			//if ($shop_id!=1){
			//	$where .=" AND a.paiche_shopid={$shop_id}";
			//}
		}else{
        	$base_url.="&search_shop={$search_shop}";
        	$where .=" AND a.paiche_shopid = {$search_shop}";
        	$iswhere=1;
        }
        
        if (!empty($search_status))
        {
        	$base_url.="&search_status={$search_status}";
	        switch($search_status){
				 case "yy":
				 $where .=" AND a.paiche_status=0 ";
				 break;
				 case "zzyxz0":
				 $where .=" AND a.paiche_status=1 AND a.paiche_shunt=0 AND b.settle_totalKm=0 AND b.settle_losses!=2 AND a.paiche_startDate<=".time(). " AND a.paiche_endDate>".time();
				 case "zzyxz1":
				 $where .=" AND a.paiche_status=1 AND a.paiche_shunt=0 AND b.settle_totalKm=0 AND b.settle_losses!=2 AND a.paiche_startDate<=".time();
				 break;
				 case "zzyxz":
				 $where .=" AND a.paiche_status=1 AND b.settle_totalKm=0 ";
				 break;
				 case "hcwfk"://未结或者挂账
				 $where .=" AND a.paiche_status>0 AND b.settle_totalKm!=0 AND (b.settle_losses=0 or b.settle_losses=1)";
				 break;
				 case "hcgz":
				 $where .=" AND b.settle_totalKm!=0 AND b.settle_losses=1 AND a.paiche_status>0 ";
				 break;
				 case "yjz"://已结
				 $where .=" AND b.settle_totalKm!=0 AND b.settle_losses=2 AND a.paiche_status>0 ";
				 break;
				 case "wy":
				 $where .=" AND a.paiche_status=-1 ";
				 break;
				 case "qx":
				 $where .=" AND (a.paiche_status=-2 or a.paiche_recycle=1) ";
				 break;
			}
			$iswhere=1;
        }
        if (!empty($companyid)){
        	$base_url.="&company={$companyid}";
        	$where.=" AND a.paicheCom={$companyid} ";
        	$iswhere=1;
        }
		if (!empty($brotherid)){
        	$base_url.="&paiche_brother={$brotherid}";
        	$where.=" AND (a.paiche_brother={$brotherid} OR h.shuntCom={$brotherid}) ";
        	$iswhere=1;
        }
        if (!empty($paiche_line)){
        	$base_url.="&paiche_line={$paiche_line}";
        	$where.=" AND a.paiche_line like '%{$paiche_line}%' ";
        	$iswhere=1;
        }
        

        $order="paiche_startDate DESC";
        $busiList=null;
        $total_item=0;

		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		if(!empty($firstop)){
		$busiList = $model->getSearchList($start,$per_page, $where.$where1,$order);
		$total_item = $model->getTotal($where);
		}
		

		$options = array(
			"baseurl"	 => $base_url,
			"totalitems" => $total_item,
			"perpage"	 => $per_page,
			"page"	     => $p,
			"maxpage"	 => 10,
			"pagestyle"  => $style,
			"showtotal"  => false
		);
		$pagination = new Pagination($options);
		$p = $pagination->getPage();
//print_r("expression");exit;
		$view  = $this->createView("operator/business/searchlist.html");


		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();		
		$object->busiList = $busiList;
		$object->busi_id = $busi_id;
		$object->busi_type = $busi_type;
		$object->total = $total_item;
		$object->companyid = $companyid;
		$tmpWhere="";
		if(!$this->checkPrivilege("product_effect")){
			$tmpWhere=" AND client_id IN (SELECT DISTINCT paicheCom FROM paiche WHERE paiche_type IN (1,2) AND paicheCom <>0)";
		}

		$object->companylist=$model->getEmpList("`client_id`,`client_name`"," AND client_recycle!=1".$tmpWhere,"client");

		$object->brotherlist = $model->getListBySql("Select bro_id,bro_name,bro_linker,bro_phone From `brothers` Where bro_recycle=0");
		$object->shoplist=$model->getEmpList("shop_id,shop_name","","shop","","shop_order");
		
        $object->category = $model->getcategory(" Where item_type={$busi_type}");
        $object->firstop =$firstop;
        $object->search_startDate=$search_startDate;		
        $object->nowuserid=$_SESSION['a_uid'];
		$object->nowshopid=$_SESSION['shopid'];
        $object->a_permissions = $_SESSION['a_permissions'];
		$view->assign($object);
		$view->display();
	}
	function outcarinput(){
		$key=Request::getVar('key','get');		
		$model = $this->createModel("manage",dirname( __FILE__ ));
		
		$where =" a.paiche_recycle!=1 AND (a.paiche_type = 3 OR a.paiche_type = 4 OR a.paiche_type = 5) AND a.paiche_endDate>=".time()." AND a.paiche_status=1 AND c.client_name like '%{$key}%'";
		$sql="Select a.paicheCom,c.client_name,Count(a.paiche_id) as nCount From `paiche` As a LEFT JOIN client AS c ON a.paicheCom=c.client_id Where {$where} Group by a.paicheCom,c.client_name ";
		
		$busiList = $model->getListBySql($sql,$where);
		$object = new stdClass();
		$object->busiList = $busiList;
		$object->title = "长期用车出车记录";
		$object->op="dispatch";
		$object->url="outcarinput.php";
		
		$view  = $this->createView("operator/business/outcarinput.html");
		$view->assign($object);
		$view->display();
	}
	function monthaccountlist(){
		$key=Request::getVar('key','get');
		$model = $this->createModel("manage",dirname( __FILE__ ));		
		$where =" a.paiche_recycle!=1 AND (a.paiche_type = 3 OR a.paiche_type = 4 OR a.paiche_type = 5) AND a.paiche_endDate>=".time()." AND a.paiche_status=1 AND c.client_name like '%{$key}%'";
		$sql="Select a.paicheCom,c.client_name,Count(a.paiche_id) as nCount From `paiche` As a LEFT JOIN client AS c ON a.paicheCom=c.client_id Where {$where} Group by a.paicheCom,c.client_name";
		
		$busiList = $model->getListBySql($sql,$where);
		$object = new stdClass();
		$object->busiList = $busiList;
		$object->title = "长期用车月结";
		$object->op="monthaccount";
		$object->url="monthaccountlist.php";
		
		$view  = $this->createView("operator/business/outcarinput.html");
		$view->assign($object);
		$view->display();
	}
	function clientlist(){
		$t = Request::getVar('t','get');
		$t=empty($t)?1:2;
		$base_url="clientlist.php?t=$t";
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$per_page = 15;
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
	
		$where ="paiche_personal=1 and paiche_recycle!=1 and paiche_status>-2 and paiche_type={$t} ";
		if ($t==1)
		$sql="Select distinct a.paiche_linkerNum,paiche_linker,paiche_linkerPhone,paiche_linkerAdd,b.nCount From `paiche` as a Left Join (Select paiche_linkerNum,Count(paiche_linkerNum) as nCount From `paiche` Where {$where} and paiche_linkerNum <>'' Group by paiche_linkerNum) b on a.paiche_linkerNum=b.paiche_linkerNum Where {$where} and a.paiche_linkerNum <>''";
		if ($t==2)
		$sql="Select distinct a.paiche_linkerPhone,paiche_linker,paiche_linkerAdd,b.nCount From `paiche` as a Left Join (Select paiche_linkerPhone,Count(paiche_linkerPhone) as nCount From `paiche` Where {$where} and paiche_linkerPhone <>'' Group by paiche_linkerPhone) b on a.paiche_linkerPhone=b.paiche_linkerPhone Where {$where} and a.paiche_linkerPhone <>''";
		
		$model = $this->createModel("manage",dirname( __FILE__ ));
		$busiList = $model->getListBySql2($sql);
		$total_item = count($busiList);
		$busiList = $model->getListBySql2($sql." Limit {$start},{$per_page}");
		
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

		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();
		$object->busiList = $busiList;
		$object->total = $total_item;
		$object->t = $t;
		
		$view  = $this->createView("operator/business/clientlist.html");
		$view->assign($object);
		$view->display();
	}


	function getList()
	{
		//print_r("expression");exit;
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$per_page = 10;
        $busi_id = Request::getVar('b_id','get');
        $op="";
        
        $search_status=Request::getVar('search_status','get');
        if (empty($search_status)) $search_status = "d";
        $companyid=Request::getVar('company','get');
        $paiche_car=Request::getVar('paiche_car','get');
        
        $base_url = "list.php?b_id={$busi_id}&search_status=$search_status";
        $where=" a.contract_type={$busi_id}";
        if ($search_status=="d"){
        	$where.=" and a.contract_complete=0";
        }
        if ($search_status=="y"){//已结清
        	$where.=" and a.contract_complete=1";
        }
		if (!empty($companyid)){
        	$base_url.="&company={$companyid}";
        	$where.=" AND a.client_id={$companyid} ";
        }
		if ($paiche_car!=""){
        	$base_url.="&paiche_car={$paiche_car}";
        	$where .=" AND e.car_num like '%{$paiche_car}%'";
        }
        
        $sql="Select a.*,d.emp_name AS siji,e.car_num,f.client_name,aa.gCount,bb.rCount,cc.zCount,dd.lCount,ee.hCount From contract as a ".
        	 "LEFT JOIN client AS f ON a.client_id=f.client_id ".
        	 "LEFT JOIN emp AS d ON a.contract_driver=d.emp_id ".
			 "LEFT JOIN car AS e ON a.contract_car=e.car_id ".
        	 "LEFT JOIN (Select paiche_parent,Count(*) as gCount From paiche Where paiche_parent<>0 Group by paiche_parent) aa ON a.contract_id=aa.paiche_parent ".
        	 "LEFT JOIN (Select k.paiche_parent,Count(*) as rCount From paiche as k Inner Join settle as m ON k.paiche_id=m.settlePaicheId Where k.paiche_parent<>0 AND m.settle_totalKm<=0 AND m.settle_losses=0 AND k.paiche_status=1 AND k.paiche_endDate<".time()." Group by k.paiche_parent) bb ON a.contract_id=bb.paiche_parent ".
        	 "LEFT JOIN (Select k.paiche_parent,Count(*) as zCount From paiche as k Inner Join settle as m ON k.paiche_id=m.settlePaicheId Where k.paiche_parent<>0 AND m.settle_losses=1 Group by k.paiche_parent) cc ON a.contract_id=cc.paiche_parent ".
        	 "LEFT JOIN (Select k.paiche_parent,Count(*) as lCount From paiche as k Inner Join settle as m ON k.paiche_id=m.settlePaicheId Where k.paiche_parent<>0 AND k.paiche_status>=0 AND k.paiche_endDate>".time()." Group by k.paiche_parent) dd ON a.contract_id=dd.paiche_parent ".
        	 "LEFT JOIN (Select k.paiche_parent,Count(*) as hCount From paiche as k Inner Join settle as m ON k.paiche_id=m.settlePaicheId Where k.paiche_parent<>0 AND (m.settle_losses>=2 OR k.paiche_status=-1) Group by k.paiche_parent) ee ON a.contract_id=ee.paiche_parent ".
        	 "Where {$where} Order by f.client_name,a.contract_startDate";
        
        $model = $this->createModel("list",dirname( __FILE__ ));
        
        $style = new PageStyle();
		$start = ($p-1)*$per_page;
		$busiList = $model->getListBySql($sql." LIMIT {$start},{$per_page}");
		$total_item = $model->getTotal("","Select COUNT(*) AS total FROM contract as a LEFT JOIN car AS e ON a.contract_car=e.car_id Where {$where}");

		$options = array(
			"baseurl"	 => $base_url,
			"totalitems" => $total_item,
			"perpage"	 => $per_page,
			"page"	     => $p,
			"maxpage"	 => 10,
			"pagestyle"  => $style,
			"showtotal"  => false
		);

		$pagination = new Pagination($options);
		$p = $pagination->getPage();
		$view  = $this->createView("operator/busilong/list.html");
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();
		$object->PAGETITLE=$model->getPageTitle($busi_id)."用车协议管理";
		$object->busiList = $busiList;
		$object->busitype = $busi_id;
		$object->total = $total_item;
		$object->companyid = $companyid;
		$object->companylist=$model->getEmpList("`client_id`,`client_name`"," AND client_recycle!=1","client");
		$object->category = $model->getcategory();
		$object->search_status=$search_status;
		$view->assign($object);
		$view->display();
		
	}

	
	function create()
	{	
		
		$busi_id = Request::getVar('b_id','get');
        if (empty($busi_id)) $busi_id = 1;
        
		$object = new stdClass();
		$object->task = "insert";
		$object->busitype = $busi_id;
        $model = $this->createModel("list",dirname( __FILE__ ));
        $object->PAGETITLE=$model->getPageTitle($busi_id);
        
        $date_array = array();
		
		$object->clientlist=$model->getListBySql("SELECT `client_id`,`client_name`,`client_Mlinker`,`client_Mphone` FROM `client` WHERE client_recycle!=1");

		$view  = $this->createView("operator/busilong/create.html");
		$view->assign($object);
		$view->display();
	}
	function insert()
	{
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "list.php?b_id=".Request::getVar('b_id','post');
		}
		$model = $this->createModel("list",dirname( __FILE__ ));
		//$empname=$model->getEmpName($_SESSION['a_uid']);
		$busi_id = Request::getVar('b_id','post');
		$contractNum=Request::getVar('contract_num','post');
		$paicheCom=Request::getVar('paiche_name2','post');
		$sql="select contract_id from sales_contract where contract_number='{$contractNum}' and contract_clientid={$paicheCom}";
		$tmp=$model->getRow(0,$sql);
		if (empty($tmp) || empty($tmp['contract_id'])){
			$this->redirect($forward,"合同号无效");
			exit();
		}
		
		$object = new stdClass();
		$object->contract_num=$contractNum;
		$object->contract_CounterMan=Request::getVar('paicheCounterMan2','post');
		$object->contract_type=$busi_id;
	  	$object->client_id=empty($paicheCom)? 0 : $paicheCom;
	  	$object->contract_startDate=strtotime(Request::getVar('paiche_startDate','post'));
	  	$object->contract_endDate=strtotime(Request::getVar('paiche_endDate','post'));
	  	$object->paiche_endDate=strtotime("-1 day",strtotime(Request::getVar('paiche_startDate','post')));
	  	$object->contract_rent=Request::getVar('paiche_rent','post');
	  	$paiche_deposit=Request::getVar('paiche_deposit','post');
		$paiche_deposit_back=Request::getVar('paiche_deposit_back','post');
	  	$object->contract_deposit=empty($paiche_deposit) ? 0 : $paiche_deposit;
	  	$object->contract_deposit_back=empty($paiche_deposit_back) ? 0 : $paiche_deposit_back;
	  	$paiche_unlimitKm=Request::getVar('paiche_unlimitKm','post');
	  	$object->contract_unlimitKm=empty($paiche_unlimitKm)? "" : $paiche_unlimitKm;
	   	$paiche_limitKm=Request::getVar('paiche_limitKm','post');
	   	$paiche_overKm=Request::getVar('paiche_overKm','post');
	   	$paiche_limitKmType=Request::getVar('paiche_limitKmType','post');
	   	$object->contract_limitKm=empty($paiche_limitKm)? 0 : $paiche_limitKm;
	   	$object->contract_overKm=empty($paiche_overKm)? 0 : $paiche_overKm;
	   	$object->contract_limitKmType=empty($paiche_limitKmType)? 0 : $paiche_limitKmType;
	   	$object->contract_note=Request::getVar('paiche_specialRemarks','post');
	   	$paicheCar=Request::getVar('paicheCar2','post');
	  	$object->contract_car=empty($paicheCar)? 0 : $paicheCar;
	  	$paicheDriver=Request::getVar('paicheDriver2','post');
	  	$object->contract_driver=empty($paicheDriver)? 0 : $paicheDriver;
		if ($busi_id==4){
			$object->paiche_calType=Request::getVar('paiche_calType','post');
		}
	  		  		  	
	  	//$object->paiche_status=0;	  	
	  	//$object->paiche_times=time();
	  	//$object->paiche_Man=$empname;
	  	

        $rec_id=$model->store($object,'contract');
		if ($rec_id>0)
		{
			//条款约定
		  	$arr_item=Request::getVar('Iid','post');//约定条款
		  	$arr_del=Request::getVar('DVid','post');//删除标记
		  	$arr_result=Request::getVar('result','post');
			if ($arr_item){
			  	for($i=0;$i<count($arr_item);$i++){
			  		$iid=$arr_item[$i];		  		
		  			if ($arr_del[$i]==0){//没删除
			  			$object = new Object();
			    		$object->contract_id = $rec_id;
				        $object->item_id = $iid;
				        $object->conv_result = $arr_result[$i];
						$model->store($object,"contract_items");
		  			}
				}
			}
			
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
		$model = $this->createModel("list",dirname( __FILE__ ));
		$sql="Select a.*,c.emp_name AS yewuyuan,d.emp_name AS siji,e.car_num From contract as a ".
			 "LEFT JOIN emp AS c ON a.contract_CounterMan=c.emp_id ".
			 "LEFT JOIN emp AS d ON a.contract_driver=d.emp_id ".
			 "LEFT JOIN car AS e ON a.contract_car=e.car_id Where a.contract_id={$uid}";
		$busiInfo = $model->getRow(0,$sql);
		$busi_id =$busiInfo['contract_type'];
		$sql = "SELECT a.`id`,a.`item_id`,a.`conv_result`,a.`item_fact`,a.`conv_money`,a.`have_in_money`,b.`item_name`,b.`item_type`,b.`item_options`,b.`item_calcu`,b.`item_caltype`,b.`item_unit`,b.`item_costname` ".
			"FROM `contract_items` AS a INNER JOIN `items` AS b ON a.`item_id`=b.`item_id` WHERE a.`contract_id`={$uid} ORDER BY b.`item_order`,a.`item_id`";
		$item_list=$model->getListBySql($sql);
		
		$object = new stdClass();
		$object->list = $busiInfo;
		$object->itemlist = $item_list;
		$object->task = "update";
        $object->busitype = $busi_id;
        $object->PAGETITLE=$model->getPageTitle($busi_id);
        $object->clientlist=$model->getListBySql("SELECT `client_id`,`client_name`,`client_Mlinker`,`client_Mphone` FROM `client` WHERE client_recycle!=1");
        
        $view  = $this->createView("operator/busilong/create.html");
		$view->assign($object);
		$view->display();
	}
	function update()
	{	
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
            $forward = "list.php?b_id=".Request::getVar('b_id','post');
		}
		$uid = Request::getVar('uid','post');	
		if(empty($uid))
		{
			Response::redirect($forward,"Need id!");
		}
		$busi_id = Request::getVar('b_id','post');
		$model = $this->createModel("list",dirname( __FILE__ ));
		$contractNum=Request::getVar('contract_num','post');
		$paicheCom=Request::getVar('paiche_name2','post');
		$sql="select contract_id from sales_contract where contract_number='{$contractNum}' and contract_clientid={$paicheCom}";



		$tmp=$model->getRow(0,$sql);
		//print_r($tmp);exit;
		if (empty($tmp) || empty($tmp['contract_id'])){
			$this->redirect($forward,"合同号无效");
			exit();
		}
		
		$object = new stdClass();
		$object->contract_id=$uid;
	  	$object->client_id=empty($paicheCom)? 0 : $paicheCom;
	  	$object->contract_CounterMan=Request::getVar('paicheCounterMan2','post');
	  	$object->contract_startDate=strtotime(Request::getVar('paiche_startDate','post'));
	  	$object->contract_endDate=strtotime(Request::getVar('paiche_endDate','post'));
	  	$object->contract_rent=Request::getVar('paiche_rent','post');
	  	$paiche_deposit=Request::getVar('paiche_deposit','post');
		$paiche_deposit_back=Request::getVar('paiche_deposit_back','post');
	  	$object->contract_deposit=empty($paiche_deposit) ? 0 : $paiche_deposit;
	  	$object->contract_deposit_back=empty($paiche_deposit_back) ? 0 : $paiche_deposit_back;
	  	$paiche_unlimitKm=Request::getVar('paiche_unlimitKm','post');
	  	$object->contract_unlimitKm=empty($paiche_unlimitKm)? "" : $paiche_unlimitKm;
	   	$paiche_limitKm=Request::getVar('paiche_limitKm','post');
	   	$paiche_overKm=Request::getVar('paiche_overKm','post');
	   	$paiche_limitKmType=Request::getVar('paiche_limitKmType','post');
	   	$object->contract_limitKm=empty($paiche_limitKm)? 0 : $paiche_limitKm;
	   	$object->contract_overKm=empty($paiche_overKm)? 0 : $paiche_overKm;
	   	$object->contract_limitKmType=empty($paiche_limitKmType)? 0 : $paiche_limitKmType;
	   	$object->contract_note=Request::getVar('paiche_specialRemarks','post');
	   	$paicheCar=Request::getVar('paicheCar2','post');
	  	$object->contract_car=empty($paicheCar)? 0 : $paicheCar;
	  	$paicheDriver=Request::getVar('paicheDriver2','post');
	  	$object->contract_driver=empty($paicheDriver)? 0 : $paicheDriver;
		if ($busi_id==4){
			$object->paiche_calType=Request::getVar('paiche_calType','post');
		}
		
		if ($model->update($object,'contract_id','contract'))
		{
			//条款约定
		  	$arr_item=Request::getVar('Iid','post');//约定条款
		  	$arr_rec=Request::getVar('Recid','post');//原记录
		  	$arr_del=Request::getVar('DVid','post');//删除标记
		  	$arr_result=Request::getVar('result','post');
			if ($arr_item){
			  	for($i=0;$i<count($arr_item);$i++){
			  		$iid=$arr_item[$i];
			  		if (empty($arr_rec[$i])){//新增
			  			if ($arr_del[$i]==0){//没删除
				  			$object = new Object();
				    		$object->contract_id = $uid;
					        $object->item_id = $iid;
					        $object->conv_result = $arr_result[$i];
							if ($model->store($object,"contract_items")){							
							}else{
								$re=false;
							}
			  			}
			  		}else{//原来的
			  			$rid=$arr_rec[$i];
			  			if ($arr_del[$i]==1){//删除
			  				if ($model->deleteitem($rid,"contract_items")){							
							}else{
								$re=false;
							}
			  			}
			  		}
				}
			}
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
		$busi_id = Request::getVar('b_id','get');
		if(empty($forward))
		{
            $forward = "list.php?b_id=".$busi_id;
		}
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("list",dirname( __FILE__ ));			
		if ($model->delete(0,"Delete From contract Where contract_id={$uid}") && $model->delete(0,"Delete From paiche Where paiche_parent={$uid}")){
			$this->redirect($forward,"删除成功");
		}
	}
	function complete(){
		$forward = Request::getVar("forward");
		$busi_id = Request::getVar('b_id','get');
		if(empty($forward))
		{
            $forward = "list.php?b_id=".$busi_id;
		}
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("list",dirname( __FILE__ ));			
		if ($model->update('','','',"Update contract set contract_complete=1 Where contract_id={$uid}")){
			$this->redirect($forward,"操作成功");
		}
	}
	function generate(){
		$uid = Request::getVar('uid','get');
		$busi_id = Request::getVar('b_id','get');
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
            $forward = "list.php?b_id=".$busi_id;
		}
		$model = $this->createModel("list",dirname( __FILE__ ));
		$sql="Select a.*,d.emp_name AS siji,e.car_num From contract as a LEFT JOIN emp AS d ON a.contract_driver=d.emp_id LEFT JOIN car AS e ON a.contract_car=e.car_id Where a.contract_id={$uid}";
		$busiInfo = $model->getRow(0,$sql);
		$busi_id =$busiInfo['contract_type'];
		$sdate=$busiInfo['contract_startDate'];
		$edate=$busiInfo['contract_endDate'];
		$monthnum= $this->getMonthNum($sdate,$edate);
		$tmps=$sdate;
		for ($x=1; $x<=$monthnum+1; $x++){
			$tmpe=date("Y-m-d",strtotime("-1 day",strtotime("+{$x} months", strtotime($sdate))));
			$object = new stdClass();
			$object->paiche_parent=$busiInfo['contract_id'];
			$object->paiche_type=$busiInfo['contract_type'];
	  		$object->paiche_contractNum=$busiInfo['contract_num']."-".$x;
	  		$object->paicheCom=$busiInfo['client_id'];
	  		$object->paiche_personal=0;
			$object->paiche_startDate=strtotime($tmps);
	  		$object->paiche_endDate=strtotime($tmpe);
			$object->paiche_unlimitKm=$busiInfo['contract_unlimitKm'];
			$object->paiche_limitKm=$busiInfo['contract_limitKm'];
			$object->paicheCar=$busiInfo['contract_car'];
			$object->paicheDriver=$busiInfo['contract_driver'];
			if ($busiInfo['contract_car']>0){
			$object->paiche_status=1;
			}
			$rec_id=$model->store($object,"paiche");
			if ($rec_id>0 && $busiInfo['contract_rent']>0){//租金
				$object = new Object();
	    		$object->paiche_id = $rec_id;
		        $object->charge_id = 2;
		        $object->conv_money = $busiInfo['contract_rent'];
		        $object->back_money =0;
		        $model->store($object,"paiche_charges");
			}
			if ($rec_id>0 && $busiInfo['contract_deposit']>0){//押金
				$object = new Object();
	    		$object->paiche_id = $rec_id;
		        $object->charge_id = 1;
		        $object->conv_money = $busiInfo['contract_deposit'];
		        $object->back_money =$busiInfo['contract_deposit_back'];
		        $model->store($object,"paiche_charges");
			}
			$tmps=date("Y-m-d",strtotime("+1 day",strtotime($tmpe)));
		}
		$object = new stdClass();
		$object->contract_id=$uid;
		$object->contract_generate=$monthnum+1;
		if ($model->update($object,'contract_id','contract'))
		{
			$this->redirect($forward,"生成派车单成功");
		}
		else
		{
			$this->redirect($forward,"生成派车单失败");
		}
	}


	//派车明细
	function detail(){
		//print_r("expression");exit;
		$busi_id = Request::getVar('b_id','get');
		$uid = Request::getVar('uid','get');
		$where = " a.paiche_recycle!=1 AND a.paiche_parent = {$uid}";
		$order="`paiche_startDate`";
		$model = $this->createModel("list",dirname( __FILE__ ));
		$sql="Select a.*,b.client_name,d.emp_name AS siji,e.car_num From contract as a ".
			 "LEFT JOIN client AS b ON a.client_id=b.client_id ".
			 "LEFT JOIN emp AS d ON a.contract_driver=d.emp_id ".
			 "LEFT JOIN car AS e ON a.contract_car=e.car_id Where a.contract_id={$uid}";
		$contractInfo = $model->getRow(0,$sql);
		
		$busiList = $model->getList(0,200, $where,$order);
		
		$total_item = count($busiList);
		$object = new stdClass();
		
		$view  = $this->createView("operator/busilong/paichelist.html");
		$object->PAGETITLE=$model->getPageTitle($busi_id)."派车管理";
		$object->info=$contractInfo;
		$object->busiList = $busiList;
		$object->busitype = $busi_id;
		$object->total = $total_item;
        $object->category = $model->getcategory();
		$view->assign($object);
		$view->display();
	}
	
	function returncar()
	{
		$pid = Request::getVar('pid','get');
		
		$model = $this->createModel("list",dirname( __FILE__ ));
		$busiInfo = $model->getBusinessInfo($pid);
		$charge_list=$model->getChargeList($pid," AND a.charge_id<>1 AND a.`conv_money`>0 AND a.have_in_money < a.conv_money");
		//$back_list=$model->getChargeList($pid," AND a.`back_money`>0 AND a.`have_in_money`>0 AND a.`have_back_money` < a.`back_money`");
		
		$item_list=$model->getItemList($pid);
		//换车记录
		$fields="changecar_carAStartKilo,changecar_carAEndKilo,changecar_kiloBNow";
		$Changecar_list=$model->getEmpList($fields," AND changecarPaicheId='{$pid}'","changecar");
		$totalChangeCarKilo=$changecar_kiloBNow=0;
		if ($Changecar_list){
			foreach($Changecar_list as $key=>$value){
				$totalChangeCarKilo+=($Changecar_list[$key]["changecar_carAEndKilo"]-$Changecar_list[$key]["changecar_carAStartKilo"]);
				$changecar_kiloBNow=$Changecar_list[$key]["changecar_kiloBNow"];
			}
		}
		
		$object = new stdClass();
		$object->list = $busiInfo;
		$object->chargelist = $charge_list;
		//$object->backlist = $back_list;
		$object->itemlist = $item_list;
		$object->totalChangeCarKilo = $totalChangeCarKilo;
		$object->changecar_kiloBNow = $changecar_kiloBNow;
		$object->pid = $pid;
		$object->busitype=$busiInfo["paiche_type"];
		$object->op = $this->getTask();
		$object->PAGETITLE="长期自驾还车";
		$object->total = 0;
		$view  = $this->createView("operator/busilong/account.html");
		$view->assign($object);
		$view->display();
	}
	function returncar_accept()
	{
		$pid = Request::getVar('pid','post');
		$busi_id = Request::getVar('b_id','post');
		$op= Request::getVar('op','post');
		$shunt=Request::getVar('paiche_shunt','post');//是否调车
		$model = $this->createModel("list",dirname( __FILE__ ));		
		$empname=$model->getEmpName($_SESSION['a_uid']);
		$re=true;
		
		$overKM=0;
		$settle_totalKm=Request::getVar('settle_endKm','post')-Request::getVar('settle_startKm','post');//一共行驶的公里数
		$object = new Object();
		$object->settlePaicheId = $pid;
		if ($shunt==0){//未调车
			$object->settle_startKm=Request::getVar('settle_startKm','post');
		  	$object->settle_endKm=Request::getVar('settle_endKm','post');
		  	$object->settle_totalKm=$settle_totalKm;
		  	$settle_qianMonth=Request::getVar('settle_qianMonth','post');
			$object->settle_qianMonth=empty($settle_qianMonth)? 0 : $settle_qianMonth;
			$paiche_unlimitKm=Request::getVar('paiche_unlimitKm','post');
			if ($paiche_unlimitKm!="Y"){//计算超公里
				$paiche_limitKm=Request::getVar('paiche_limitKm','post');
				$paiche_overKm=Request::getVar('paiche_overKm','post');
				$settle_qianMonth=empty($settle_qianMonth)? 0 : $settle_qianMonth;
				if ($settle_totalKm+$settle_qianMonth>$paiche_limitKm){
				$overKM=$settle_totalKm+$settle_qianMonth-$paiche_limitKm;
				$object->settle_overKmMoney=$overKM*(empty($paiche_overKm)? 0 : $paiche_overKm);
				}
			}
	  	
		}else{//调车
			$object->settle_totalKm=1;
		}
		$object->settle_losses=1;//挂账
	  	$object->settle_endDate=time();
	  	
	  	if ($model->update($object,'settlePaicheId','settle')){
	  	}else{
	  		$re=false;
	  	}
		
		if ($re){
	  		//新增收费项目
		  	$arr_charge=Request::getVar('Cid','post');//收费项目
		  	$arr_del=Request::getVar('Did','post');//删除标记
		  	$arr_money=Request::getVar('money','post');
		  	//$arr_backmoney=Request::getVar('back_money','post');		  	
		  	if ($arr_charge){
			  	for($i=0;$i<count($arr_charge);$i++){
			  		$cid=$arr_charge[$i];
		  			if ($arr_del[$i]==0){//没删除
			  			$object = new Object();
			    		$object->paiche_id = $pid;
				        $object->charge_id = $cid;
				        $object->conv_money = $arr_money[$i];
				        $object->return_flag=1;
				        //$object->back_money =empty($arr_backmoney[$i])? 0:$arr_backmoney[$i];
						if ($model->store($object,"paiche_charges")){							
						}else{
							$re=false;
						}
		  			}
				}
		  	}
	  	}
	  	
	  	if ($re ){//更新驾驶员出车记录
	  		$object = new Object();
			$object->drivePaicheId = $pid;
			$object->drive_date = strtotime(Request::getVar('startdate','post'));
			$object->drive_startKilo = Request::getVar('settle_startKm','post');
			$object->drive_endKilo = Request::getVar('settle_endKm','post');
			$object->drive_totalKm = $settle_totalKm;
			$object->drive_endTime = time();
			$object->drive_end=1;
			$object->drive_account=1;
			
		  	if ($model->update($object,'drivePaicheId','paiche_drive')){
		  	}else{
		  		$re=false;
		  	}
	  	}
	  	if ($re ){//插入月结记录
	  		$enddate=Request::getVar('enddate','post');
	  		$money=Request::getVar('total','post');
	  		$settle_favor=Request::getVar('favor','post');;//优惠金额
	  		$infact=$money-(empty($settle_favor)?0:$settle_favor);
	  		$settle_rent=Request::getVar('paiche_rent','post');
	  		$object = new Object();
			$object->monthPaicheId= $pid;
			$object->month_driver = Request::getVar('paicheDriver','post');//本期主驾驶员
			$object->month_year=date("Y",strtotime($enddate));
			$object->month_month=date("m",strtotime($enddate));
			$object->settle_totalKm = $settle_totalKm;//本期一共行驶的公里数
			$object->settle_overKm =$overKM;  //本期 超公里数
			$object->settle_total = $money;
			$object->settle_favor=empty($settle_favor)?0:$settle_favor;
			$object->settle_infact=$infact;
			$object->settle_rent=$settle_rent;
			$settle_billMoney=Request::getVar('settle_billMoney','post');
			$settle_billDate=Request::getVar('settle_billDate','post');
			$object->settle_billMoney=empty($settle_billMoney)?0:$settle_billMoney;
			$object->settle_billNum=Request::getVar('settle_billNum','post');
			$object->settle_billDate=empty($settle_billDate)?0:strtotime($settle_billDate);
			$object->month_time = time();
			if ($model->store($object,'paiche_month')){
			}else{
				$re=false;
			}
	  	}
	  	
	  	if ($re && $shunt==0){//更新车辆最新公里数
	  		$object1 = new stdClass();
		  	$object1->car_id=Request::getVar('paicheCar','post');
		  	$object1->car_nowKilo=Request::getVar('settle_endKm','post');
		  	if ($model->update($object1,'car_id','car')){
			}
			else{
				$re=false;
			}
	  	}
	  	
	  	
	  	
  		$object = new stdClass();
		$object->result = $re ? "还车处理成功！":"还车处理失败，返回重试！";
		$view  = $this->createView("operator/business/result.html");
		$view->assign($object);
		$view->display();
	  	
	}
	//费用单
	function givecar(){
		
		$pid = Request::getVar('pid','get');
		$model = $this->createModel("list",dirname( __FILE__ ));
		$busiInfo = $model->getBusinessInfo($pid);
		$item_list=$model->getItemList($pid);
		
		
		$object = new stdClass();
		$object->list = $busiInfo;
		$object->itemlist = $item_list;
		$object->op = $this->getTask();
		$object->pid = $pid;
		$object->PAGETITLE="长期带驾司机费用";
		//取租金
		$charge_list=$model->getChargeList($pid);
		if ($charge_list){
		foreach($charge_list as $key=>$val)
        {
        	if ($val['charge_name']=="租金"){
        		$object->paiche_rent = $val["conv_money"];
        	}
        }
        }
		
        
        $view  = $this->createView("operator/busilong/account.html");
		$view->assign($object);
		$view->display();
	}
	function givecar_accept()
	{
		
		$pid = Request::getVar('pid','post');
		$busi_id = Request::getVar('b_id','post');
		$op= Request::getVar('op','post');
		$shunt=Request::getVar('paiche_shunt','post');//是否调车
		$model = $this->createModel("list",dirname( __FILE__ ));
		$empname=$model->getEmpName($_SESSION['a_uid']);
		//取合同约定价格
		$arr_item=$model->getTmpList("SELECT `item_id`,`conv_result` FROM paiche_items WHERE `paiche_id`={$pid}");
		
		
		$re=true;
		
		$settle_totalKm=Request::getVar('settle_totalKm','post');//一共行驶的公里数
		$settle_dayWork=0;//工作日加班
		$settle_weekWork=0;//周末加班
		$settle_holWork=0;//节假日加班
		$settle_travelTimes=0;//出差次数
		$settle_travelRoomTimes=0;//带宿出差次数
		$settle_travelOutTimes=0;//省外出差次数
		$settle_meals=0;//就餐次数
		$settle_rooms=0;//住宿次数
		$settle_advanceIoll=0;//垫付的过桥过路费
		$settle_telMoney=0;//电话费
		$settle_kmsubsidies=0;//公里补贴
		$settle_cleaning=0;//清洗费
		$settle_olisubsidies=0;//邮费补贴
		$settle_other=0;//其他费用
		
		$arr_items=Request::getVar('item_id','post');//收费项目
		$arr_calcu=Request::getVar('item_calcu','post');
		$arr_caltype=Request::getVar('item_caltype','post');
		$arr_number=Request::getVar('item_number','post');
		$arr_money=Request::getVar('item_money','post');
		for($i=0;$i<count($arr_items);$i++){
			$cid=$arr_items[$i];
			if ($arr_calcu[$i]==1 && !empty($arr_money[$i])){//需要计算的
			
				switch ($cid){
					case $this->arr_item["dayWork"]:
					$settle_dayWork=$arr_number[$i];//平时加班
					break;
					case $this->arr_item["weekWork"]:
					$settle_weekWork=$arr_number[$i];//周末加班
					break;
					case $this->arr_item["settle_holWork"]:
					$settle_holWork=$arr_number[$i];//节假日加班
					break;
					case $this->arr_item["travelTimes"]:
					$settle_travelTimes=$arr_number[$i];//出差
					break;
					case $this->arr_item["traveloutTimes"]:
					$settle_travelOutTimes=$arr_number[$i];//省外出差
					break;
					case $this->arr_item["travelRoomTimes"]:
					$settle_travelRoomTimes=$arr_number[$i];//带宿出差
					break;
					case $this->arr_item["meals"]:
					$settle_meals==$arr_number[$i];//就餐
					break;
					case $this->arr_item["rooms"]:
					$settle_rooms=$arr_number[$i];//住宿
					break;
					case $this->arr_item["advanceIoll"]:
					$settle_advanceIoll=$arr_money[$i];//垫付的过桥过路费
					break;
					case $this->arr_item["tel"]:
					$settle_telMoney=$arr_money[$i];//电话费
					break;
					case $this->arr_item["kmsubsidies"]:
					$settle_kmsubsidies=$arr_number[$i];//公里补贴
					break;
					case $this->arr_item["cleaning"]:
					$settle_cleaning=$arr_money[$i];//清洗费
					break;
					case $this->arr_item["olisubsidies"]:
					$settle_olisubsidies=$arr_number[$i];//邮费补贴
					break;
				}
				
				if ($arr_caltype[$i]==0){//固定值
					$sql="UPDATE paiche_items SET item_fact=".$arr_money[$i]." WHERE paiche_id={$pid} AND item_id={$cid}";
				}else{
					$sql="UPDATE paiche_items SET item_fact=".$arr_number[$i].",conv_money=(conv_result+0)*round(".$arr_number[$i].",2) WHERE paiche_id={$pid} AND item_id={$cid}";
				}
				if ($model->update('','','',$sql)){
				}else{
					$re=false;
				}
			}
		}
		if ($re){
	  		//新增收费项目
		  	$arr_charge=Request::getVar('Cid','post');//收费项目
		  	$arr_del=Request::getVar('Did','post');//删除标记
		  	$arr_money=Request::getVar('money','post');
		  	//$arr_backmoney=Request::getVar('back_money','post');		  	
		  	if ($arr_charge){
			  	for($i=0;$i<count($arr_charge);$i++){
			  		$cid=$arr_charge[$i];
					if ($arr_del[$i]==0){//没删除
						$settle_other+=$arr_money[$i];
			  			$object = new Object();
			    		$object->paiche_id = $pid;
				        $object->charge_id = $cid;
				        $object->conv_money = $arr_money[$i];
				        $object->return_flag=1;
				        //$object->back_money =empty($arr_backmoney[$i])? 0:$arr_backmoney[$i];
						if ($model->store($object,"paiche_charges")){							
						}else{
							$re=false;
						}
		  			}
		  			
				}
		  	}
	  	}
		if ($re){
			$object2 = new Object();
			$object2->paiche_id = $pid;
			$paiche_limitKm=Request::getVar('paiche_limitKm','post');
			$paiche_overKm=Request::getVar('paiche_overKm','post');
			$youfei_zongji=Request::getVar('youfei_zongji','post');
			$youfei_danjia=Request::getVar('youfei_danjia','post');
			$youfei_shen=Request::getVar('youfei_shen','post');


			$object2->paiche_limitKm=empty($paiche_limitKm)? 0 : $paiche_limitKm;
			//油费总计
			$object2->youfei_zongji=empty($youfei_zongji)? 0 : $youfei_zongji;
			$object2->youfei_shen=empty($youfei_shen)? 0 : $youfei_shen;
			$object2->youfei_danjia=empty($youfei_danjia)? 0 : $youfei_danjia;

			$paiche_unlimitKm=Request::getVar('paiche_unlimitKm','post');
			$object2->paiche_unlimitKm=empty($paiche_unlimitKm)? "" : $paiche_unlimitKm;
			$object2->paiche_overKm=empty($paiche_overKm)? 0 : $paiche_overKm;
			
			$object = new Object();
			$object->settlePaicheId = $pid;
			$object->settle_totalKm = $settle_totalKm;//本期一共行驶的公里数
			$object->settle_dayWork = $settle_dayWork;//本期工作日加班
			$object->settle_weekWork = $settle_weekWork;//本期周末加班
			$object->settle_holWork = $settle_holWork;//本期节假日加班
			$tmpmoney=$settle_dayWork*$arr_item[$this->arr_item["dayWork"]]+
			$settle_weekWork*$arr_item[$this->arr_item["weekWork"]]+
			$settle_holWork*$arr_item[$this->arr_item["holWork"]];
			$object->settle_WorkMoney = $tmpmoney;//本期加班费
			$tmpmoney=$settle_travelTimes*$arr_item[$this->arr_item["travelTimes"]]+
			$settle_travelOutTimes*$arr_item[$this->arr_item["traveloutTimes"]]+
			$settle_travelRoomTimes*$arr_item[$this->arr_item["travelRoomTimes"]]+
			$settle_meals*$arr_item[$this->arr_item["meals"]]+
			$settle_rooms*$arr_item[$this->arr_item["rooms"]];
			$object->settle_travelMoney = $tmpmoney;//本期差旅费
			$object->settle_telMoney = $settle_telMoney;	//本期电话费
			$object->settle_travelTimes = $settle_travelTimes;//本期出差次数
			$object->settle_travelRoomTimes = $settle_travelRoomTimes;//本期带宿出差次数
			$object->settle_traveloutTimes = $settle_travelOutTimes;//本期省外出差次数
			$object->settle_meals = $settle_meals;//本期就餐次数
			$object->settle_rooms = $settle_rooms;//本期住宿次数
			$object->settle_advanceIoll = $settle_advanceIoll;//本期垫付的过桥过路费
			//$object->=$settle_kmsubsidies;//公里补贴
			//object->=$settle_cleaning;//清洗费
			//object->=$settle_olisubsidies;//邮费补贴
			//object->=$settle_other;//其他费用
			
			$settle_qianMonth=Request::getVar('settle_qianMonth','post');
			$object->settle_qianMonth=empty($settle_qianMonth)? 0 : $settle_qianMonth;
			$object->settle_endDate = time();
			if ($paiche_unlimitKm!="Y"){//计算超公里
				$overKM=0;
				$settle_qianMonth=empty($settle_qianMonth)? 0 : $settle_qianMonth;
				if ($settle_totalKm+$settle_qianMonth>$paiche_limitKm)
				$overKM=$settle_totalKm+$settle_qianMonth-$paiche_limitKm;
				$object->settle_overKmMoney=$overKM*(empty($paiche_overKm)? 0 : $paiche_overKm);
			}

			if ($model->update($object,'settlePaicheId','settle') && $model->update($object2,'paiche_id','paiche')){
			}else{
				$re=false;
			}
		}
		$object = new stdClass();
		$object->result = $re ? "长期带驾司机费用处理成功！":"长期带驾司机费用处理失败，返回重试！";
		$view  = $this->createView("operator/business/result.html");
		$view->assign($object);
		$view->display();
	}


	//月结详细
	function paichedetail(){
		$pid = Request::getVar('uid','get');
		$model = $this->createModel("list",dirname( __FILE__ ));
		$busiInfo = $model->getBusinessInfo($pid);
		
		$fields="*";
		$out_list=$model->getEmpList($fields," AND `drivePaicheId`={$pid}","paiche_drive",""," `drive_date`");
		$item_list=$model->getItemList($pid,"");
		
		$object = new stdClass();
		$object->busi = $busiInfo;
        $object->outlist = $out_list;
        $object->itemlist = $item_list;
        $object->month=$model->getRow(0,"Select * from paiche_month Where monthPaicheId={$pid}");
        $object->accountlist=$model->getListBySql("Select a.*,b.payment_name,c.bank_name From account_log as a Left Join payments as b ON a.payments_id=b.payment_id Left Join banks as c on a.bank_id=c.bank_id Where a.paiche_id={$pid} Order by a.add_time");
		$object->changelist = $model->getChangList($pid,"");
		$object->chargelist = $model->getChargeList($pid," and a.charge_id not in (1,2)");
		
        $view  = $this->createView("operator/busilong/paichedetail.html");
		$view->assign($object);
		$view->display();
		
	}

	function checkfirst(){
		$tmpWhere="";
		$search_shop=Request::getVar('search_shop','get');
		
		$model = $this->createModel("manage",dirname( __FILE__ ));
		$where="a.paiche_recycle!=1 AND b.settle_losses=2 AND a.paicheCheckMan=''".(empty($search_shop)?"":" AND a.paiche_shopid={$search_shop}");
		//$where .=" AND a.paiche_endDate>=".strtotime("-3 month");
		
		$sql="Select bb.item_name,kk.* From item bb Left Join (Select a.paiche_type,count(*) as nCount From paiche as a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId Where {$where} Group by a.paiche_type) kk On kk.paiche_type=bb.item_paicheType";

		$view  = $this->createView("operator/busimanage/checkfirst.html");
		
		$object = new stdClass();
		$object->list = $model->getListBySql2($sql);;
		$object->shoplist=$model->getListBySql2("Select `shop_id`,`shop_name` From shop");
		$model = $this->createModel("list",dirname( __FILE__ ));
		$object->companylist=$model->getEmpList("`client_id`,`client_name`"," AND client_recycle!=1".$tmpWhere,"client");
        $object->category = $model->getcategory(" ");
		
		$object->search_shop=$search_shop;
		
		$view->assign($object);
		$view->display();
	}
	function uppaichedate(){
		$paiche_id=Request::getVar('paiche_id','get');
		$model = $this->createModel("list",dirname( __FILE__ ));
		$object = new stdClass();
		$object->paiche_id = $paiche_id;
		if (Request::getVar('startdate','get')){
			$object->paiche_startDate=strtotime(Request::getVar('startdate','get'));
		}else{
			$object->paiche_endDate=strtotime(Request::getVar('enddate','get'));
		}
		if ($model->update($object,'paiche_id')){
			$info=array('result'=>0);
		}else{
			$info=array('result'=>1);
		}
		echo json_encode($info);
		exit();
	}
	
	function getMonthNum($date1,$date2){
	    $date1_stamp=strtotime($date1);
	    $date2_stamp=strtotime($date2);
	    list($date_1['y'],$date_1['m'])=explode("-",date('Y-m',$date1_stamp));
	    list($date_2['y'],$date_2['m'])=explode("-",date('Y-m',$date2_stamp));
	    return abs($date_1['y']-$date_2['y'])*12 +$date_2['m']-$date_1['m'];
	}
}
?>