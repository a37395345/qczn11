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




class BusinessController extends AdminController
{
    
    /**
     * Constructor
     *
     * @params  array   Controller configuration array
     */
    var $badgeList;
    var $arr_title = array("account0"=>"订单收款",
                            "account1"=>"订单结账",
                            "front"=>"订单收定金",
                            "vio"=>"违约",
                            "check"=>"订单审核",
                            "batchaccount"=>"临时用车批量结账",
                            "monthaccount"=>"长期用车月结",
                            "shuntaccount"=>"调车结算",
                            "shuntlist"=>"调车结算历史记录",
                            "diaodu"=>"车辆调度",
                            "dispatch"=>"出车记录",
                            "changecar"=>"中途换车",
                            "changedriver"=>"中途换司机",
                            "returncar"=>"还车",
                            "givecar"=>"交车",
                            "backmoney"=>"退违章保证金",
                            "continue"=>"续租",
                            "changeroute"=>"改变行程",
                            "revisit"=>"用车回访",
                            "search"=>"订单业务查询");
    var $arr_item = array("dayWork"=>8,"weekWork"=>14,"holWork"=>15,"travelTimes"=>12,"traveloutTimes"=>21,"travelRoomTimes"=>13,"meals"=>16,"rooms"=>9,"advanceIoll"=>17,"tel"=>10,"kmsubsidies"=>18,"olisubsidies"=>20,"cleaning"=>19);
    
    var $arr_type_action=array("1"=>"zijia_list","2"=>"guangbao","3"=>"changqi_zijia","4"=>"changqi_daijia","5"=>"changqi_dake");
    function __construct($config = array())
    {
        parent::__construct($config);
        
        //if(!($this->checkPrivilege("product_target"))){
        //  $this->redirect("/qczn/empty.php","您没有权限访问该页面！");
        //}
        $this->registerTask( 'list','getList');
        $this->registerTask( 'create','create');
        $this->registerTask( 'insert','insert');
        $this->registerTask( 'modify','modify');
        $this->registerTask( 'update','update');
        $this->registerTask( 'delete','delete');
        $this->registerTask( 'cancel','cancel');
        $this->registerTask( 'detail','detail');
        $this->registerTask( 'selectemp','selectemp');
        $this->registerTask( 'checkname','checkname');
        $this->registerTask( 'getclientprice','getclientprice');
        $this->registerTask( 'getclientprice2','getclientprice2');
        $this->registerTask( 'getclientprice3','getclientprice3');
        $this->registerTask( 'getclientprice4','getclientprice4');
        $this->registerTask( 'getclientprice5','getclientprice5');
        $this->registerTask( 'selectcharge','selectcharge');
        $this->registerTask( 'selectitem','selectitem');
        $this->registerTask( 'print','busiprint');
        $this->registerTask( 'front','front');
        $this->registerTask( 'front_accept','front_accept');
        $this->registerTask( 'account','account');
        $this->registerTask( 'accept','accept');
        $this->registerTask( 'diaodu','diaodu');
        $this->registerTask( 'diaodu_accept','diaodu_accept');
        $this->registerTask( 'vio','vio');
        $this->registerTask( 'vio_accept','vio_accept');
        $this->registerTask( 'changecar','changecar');
        $this->registerTask( 'changecar_accept','changecar_accept');
        $this->registerTask( 'changedriver','changedriver');
        $this->registerTask( 'changedriver_accept','changedriver_accept');
        $this->registerTask( 'returncar','returncar');
        $this->registerTask( 'returncar_accept','returncar_accept');
        $this->registerTask( 'returncar_cancel','returncar_cancel');
        $this->registerTask( 'givecar','returncar');
        $this->registerTask( 'backmoney','backmoney');
        $this->registerTask( 'backmoney_accept','backmoney_accept');
        $this->registerTask( 'continue','continuecar');
        $this->registerTask( 'continue_accept','continue_accept');
        $this->registerTask( 'changeroute','changeroute');
        $this->registerTask( 'changeroute_accept','changeroute_accept');
                
        $this->registerTask( 'outcar','outcar');
        $this->registerTask( 'outcar_accept','outcar_accept');
        
        $this->registerTask( 'batchaccount','batchaccount');
        $this->registerTask( 'batch_accept','batch_accept');
        
        $this->registerTask( 'outcarlist','outcarlist');
        $this->registerTask( 'exportoutcar','exportoutcar');
        $this->registerTask( 'month_accept','month_accept');
        
        $this->registerTask( 'shuntaccount','shuntaccount');
        $this->registerTask( 'shunt_accept','shunt_accept');
        $this->registerTask( 'check','check');
        $this->registerTask( 'check_accept','check_accept');
        $this->registerTask( 'revisit','revisit');
        $this->registerTask( 'revisit_accept','revisit_accept');
        
        $this->registerTask( 'getNearList','getNearList');
        $this->registerTask( 'getpaicheid','getpaicheid');
        $this->registerTask( 'getClientList','getClientList');
        $this->registerTask( 'uppaicheremark','uppaicheremark');
        $this->registerTask( 'gettimediff','gettimediff');
        $this->registerTask( 'generatepicutre','generatepicutre');
        $this->registerTask( 'getovertime_unreturn','getovertime_unreturn');
        $this->registerTask( 'getsiji','getsiji');
    }   
    function display(){
        echo "display";
    }
    function getList()
    {

        //echo strtotime("2019-02-22 00:00:00");
        //echo '-';
        //echo strtotime("2017-06-26 23:59:59");
        //echo date("Y-m-d H:i:s",1474946187);
        $shop_id=$_SESSION['shopid'];
        $p = Request::getVar('p','get');
        $busi_id = Request::getVar('b_id','get');
        $op = Request::getVar('op','get');
        $clientid = Request::getVar('clientid','get');
        $search_status=Request::getVar('search_status','get');
        $search_overtime=Request::getVar('search_overtime','get');
        $op_flag="";
        $diaodu_status=0;
        if (empty($op)){
            if (empty($busi_id)) $busi_id = 1;
            if (empty($search_status)) $search_status = "d";
        }else{
            if (empty($busi_id)) $busi_id = 0;
        }
        $search_startDate=Request::getVar('search_startDate','get');
        $search_endDate=Request::getVar('search_endDate','get');
        //$search_diaodu=Request::getVar('search_diaodu','get');
        //$search_input=Request::getVar('search_input','get');
        //$search_status=Request::getVar('search_status','get');
        $paicheDriver=Request::getVar('paicheDriver','get');
        $companyid=Request::getVar('company','get');
        $brotherid=Request::getVar('brother','get');
        $paiche_linker=Request::getVar('paiche_linker','get');
        $paiche_linkerPhone=Request::getVar('paiche_linkerPhone','get');
        $paiche_car=Request::getVar('paiche_car','get');
        $paiche_contractNum=Request::getVar('paiche_contractNum','get');
        $search_shop=Request::getVar('search_shop','get');
        
        $model = $this->createModel("list",dirname( __FILE__ ));
        
        if(empty($p)){$p=1;}
        $base_url = "list.php?b_id={$busi_id}".(empty($op) ? "&search_status=$search_status" : "&op=$op").(empty($clientid) ? "" : "&clientid=$clientid");
        $per_page = 10;
        //$subwhere=$this->getBusiTypePrivilege();
        $subwhere="0,1,2,3,4,5";
        $where = " a.paiche_recycle!=1".($busi_id>0? " AND a.paiche_type = {$busi_id} ": "")." AND a.paiche_type in ({$subwhere})";
        if(!empty($paicheDriver)){
            $base_url.="&paicheDriver={$paicheDriver}";
            $where .=" AND a.paicheDriver='".$paicheDriver."'";
        }
        if(!empty($search_shop)){
            $base_url.="&search_shop={$search_shop}";
            $where .=" AND a.paiche_shopid={$search_shop}";
        }
        
        if ($search_overtime==1){
            $base_url.="&search_overtime={$search_overtime}";
            $where .=" AND (a.paiche_endDate<".time()." AND b.settle_totalKm=0 AND a.paiche_status=1) ";
        }
        if(!empty($search_startDate)){
            $base_url.="&search_startDate={$search_startDate}";
            $where .=" AND a.paiche_endDate>='".strtotime($search_startDate)."'";
        }
        if(!empty($search_endDate)){
            $base_url.="&search_endDate={$search_endDate}";
            $where .=" AND a.paiche_startDate<=".(strtotime($search_endDate." 23:59:59"));
        }
        if (empty($op) && ($busi_id==1 || $busi_id==2)){
            if ($search_status!="a"){
                if ($search_status=="d"){
                    $where .=" AND a.paiche_status>0 AND b.settle_totalKm<=0";
                }
                if ($search_status=="y"){
                    $where .=" AND a.paiche_status=0 ";
                }
                if ($search_status=="r"){
                    $where .=" AND a.paiche_status>0 AND b.settle_totalKm>0";
                }
                if ($search_status=="r1"){
                    $where .=" AND a.paiche_status>0 AND b.settle_totalKm>0 AND b.settle_losses=0";
                }
                if ($search_status=="r2"){
                    $where .=" AND a.paiche_status>0 AND b.settle_totalKm>0 AND b.settle_losses=1";
                }
                if ($search_status=="r3"){
                    $where .=" AND a.paiche_shunt=1 AND a.paiche_status>0 AND b.settle_totalKm=1 AND b.settle_losses=0";
                }
            }else{
                $where.=" AND a.paiche_status>-1 ";
            }
        }
        /*
        if ($search_diaodu=="self"){
            $base_url.="&search_diaodu={$search_diaodu}";
            $where .=" AND a.paicheDispatchMan='".$model->getEmpName($_SESSION['a_uid'])."'";
        }
        if ($search_input=="self"){
            $base_url.="&search_input={$search_input}";
            $where .=" AND a.paiche_Man='".$model->getEmpName($_SESSION['a_uid'])."'";
        }
        */
        if ($paiche_linker!=""){
            $base_url.="&paiche_linker={$paiche_linker}";
            $where .=" AND (a.paiche_linker like '%{$paiche_linker}%' OR f.client_name like '%{$paiche_linker}%')";
        }
        if ($paiche_linkerPhone!=""){
            $base_url.="&paiche_linkerPhone={$paiche_linkerPhone}";
            $where .=" AND a.paiche_linkerPhone like '%{$paiche_linkerPhone}%'";
        }
        if ($paiche_car!=""){
            $base_url.="&paiche_car={$paiche_car}";
            $where .=" AND (e.car_num like '%{$paiche_car}%' OR ee.car_num like '%{$paiche_car}%')";
        }
        if ($paiche_contractNum!=""){
            $base_url.="&paiche_contractNum={$paiche_contractNum}";
            $where .=" AND a.paiche_contractNum like '%{$paiche_contractNum}%'";
        }
        /*
        if (empty($search_status)){
            if ($op!="search"){
                $where.=" AND a.paiche_status>-1 ";
            }           
        }
        else{
            $base_url.="&search_status={$search_status}";
            switch($search_status){
                 case "yy":
                 $where .=" AND a.paiche_status=0 ";
                 break;
                 case "zzyxz":
                 $where .=" AND a.paiche_status=1 AND b.settle_totalKm=0 ";
                 break;
                 case "hcwfk":
                 $where .=" AND a.paiche_status>0 AND b.settle_totalKm!=0 AND b.settle_losses=0 ";
                 break;
                 case "hcgz":
                 $where .=" AND b.settle_totalKm!=0 AND b.settle_losses=1 ";
                 break;
                 case "wy":
                 $where .=" AND a.paiche_status=-1 ";
                 break;
                 case "qx":
                 $where .=" AND a.paiche_status=-2 ";
                 break;
            }
        }
        */
        if (!empty($companyid) && $op!="shuntaccount" && $op!="shuntlist"){
            $base_url.="&company={$companyid}";
            $where.=" AND a.paicheCom={$companyid} ";
        }
        
        
        if ($op=="batchaccount"){//批量结账 针对临时用车
            if (empty($companyid)){
                $companyid=0;
            }
            $per_page = 200;        
            $where .=" AND a.paiche_status>=0 AND b.settle_totalKm>0 AND b.settle_losses<>2 AND (a.paiche_type = 1 OR a.paiche_type = 2) ";
            
            if ($paiche_linker!="" || !empty($companyid)){
                if (!empty($companyid)){
                    $where .=" AND a.paiche_personal=0 AND a.paicheCom={$companyid} ";
                }
            }else{
                $where .=" AND a.paiche_personal=0 AND a.paicheCom=0 ";
            }
        }
        
        if ($op=="diaodu"){//调度
            $diaodu_status=Request::getVar('diaodu_status','get');//0-未调度；1-已调度
            if (empty($diaodu_status)) $diaodu_status=0;
            $base_url.="&diaodu_status={$diaodu_status}";
            $where .=" AND b.settle_totalKm<=0 AND a.paiche_status={$diaodu_status}";
            //$where .=" AND b.settle_totalKm<=0 AND (a.paiche_status=1 OR a.paiche_status=0)";
        }
        if ($op=="dispatch"){//出车记录
            $where .=" AND (a.paiche_type = 3 OR a.paiche_type = 4 OR a.paiche_type = 5) AND a.paiche_endDate>=".time()." AND a.paiche_status=1";
        }
        if ($op=="monthaccount"){//月结
            $where .=" AND (a.paiche_type = 3 OR a.paiche_type = 4 OR a.paiche_type = 5) AND a.paiche_endDate>=".time()." AND a.paiche_status=1";
        }        
        if ($op=="returncar"){//还车
            $where .=" AND a.paiche_type = 1 AND b.settle_totalKm<=0 AND a.paiche_status=1 ";
        }
        if ($op=="givecar"){//临时代驾交车
            $where .=" AND b.settle_totalKm<=0 AND a.paiche_status=1 "; //AND (a.paiche_shunt=0 OR (a.paiche_shunt=1 AND h.shunt_balance='否'))
        }
        
        
        if ($op=="shuntaccount"){//调车结算
            $per_page = 200;
            if (empty($brotherid)){
                $brotherid=0;
            }else{
                $base_url.="&brother={$brotherid}";
            }

            $where .=" AND a.paiche_status>=0 AND a.paiche_type = 2 AND (a.paiche_shunt=1 OR a.paiche_brother>0) AND h.shunt_end=0 AND (h.shuntCom={$brotherid} OR a.paiche_brother={$brotherid})";
        }else{
            if (!empty($brotherid)){
                $base_url.="&brother={$brotherid}";
                $where .=" AND (h.shuntCom={$brotherid} OR a.paiche_brother={$brotherid})";
            }
        }
        
        if ($op=="shuntlist"){//调车结算历史记录
            $where .=" AND a.paiche_type = 2 AND (a.paiche_shunt=1 OR a.paiche_brother>0)";
            if (!empty($brotherid)){
                $where .=" AND (h.shuntCom={$brotherid} OR a.paiche_brother={$brotherid})";
                $base_url.="&brother={$brotherid}";
            }
        }
        if ($op=="check"){//审核
            if (empty($search_status)) $search_status = "d";
            $where .=" AND b.settle_losses=2 ";
            if ($search_status=="d"){
                $where .=" AND a.paicheCheckMan='' ";
            }
            if ($search_status=="y"){
                $where .=" AND a.paicheCheckMan<>'' ";
            }
            if(empty($search_startDate)){
                $search_startDate=date('Y-m-d',strtotime("-3 month"));
                $base_url.="&search_startDate={$search_startDate}";
                $where .=" AND a.paiche_endDate>=".strtotime("-3 month");
            }
        }else{

            if ($busi_id==2 || $op=="diaodu"){
                $where .= $clientid>0 ? " AND a.paicheCom={$clientid}" : " AND a.paicheCom<>12";
            }
        }
        if ($op=="revisit"){//回访
            $where .=" AND b.settle_losses>=2";
        }
        if (empty($op) && ($busi_id==1 || $busi_id==2)){
            $where .=" AND b.settle_losses<2";// AND (a.paiche_shunt=0 OR (a.paiche_shunt=1 AND h.shunt_end=0))
        }
//echo $where;
        if (empty($op) && ($busi_id==1 || $busi_id==2)){
            $order="`paiche_dispatchTimes` DESC,`paiche_id` DESC";
        }elseif ($op=="diaodu"){
            $order="`paiche_id` DESC";
        }else{
            $order="a.paicheCom,`paiche_id` DESC";
        }
        if ($op=="dispatch"){//出车记录
            $order="a.paicheCom,`paiche_id` DESC";
        }
        //print_r($where);exit;
        $style = new PageStyle();
        $start = ($p-1)*$per_page;
        //print_r($where);exit;
        $busiList = $model->getList($start,$per_page, $where,$order);
        $total_item = $model->getTotal($where);
        $sql_siji='select emp_id,emp_name from emp where emp_recycle<>1 and (emp_post=1 OR emp_post=2 OR emp_post=6 OR emp_post=7)';
        $sijiList=$model->getListBySql_a($sql_siji);
        $options = array(
            "baseurl"    => $base_url,
            "totalitems" => $total_item,
            "perpage"    => $per_page,
            "page"       => $p,
            "maxpage"    => 10,
            "pagestyle"  => $style,
            "showtotal"  => false
        );
        $pagination = new Pagination($options);
        $p = $pagination->getPage();
        if ($op=="shuntlist"){//调车结算历史记录
            $view  = $this->createView("operator/business/shuntlist.html");
        }else{
            $view  = $this->createView("operator/business/list.html");
        }
        $object = new stdClass();
        $object->PAGINATION = $pagination->fetch();
        $object->PAGETITLE=$model->getPageTitle($busi_id).(empty($op)?"派车管理": $this->arr_title[$op.$op_flag]);
        $object->busiList = $busiList;
        $object->busitype = $busi_id;
        $object->op = $op;
         $object->sijiList = $sijiList;
        $object->op_flag = $op_flag;
        $object->diaodu_status = $diaodu_status;
        $object->total = $total_item;
        $object->clientid = $clientid;
        $object->search_status=$search_status;
        $object->search_overtime=$search_overtime;
        $object->search_shop=$search_shop;
        $object->search_startDate=$search_startDate;
        //if ($op=="batchaccount" || $op=="monthaccount" || $op=="search"){//批量结账 针对临时用车
            $object->companyid = $companyid;
            $object->companylist=$model->getEmpList("`client_id`,`client_name`"," AND client_recycle!=1","client");
        //}
        if ($op=="shuntaccount" || $op=="shuntlist"){//调车公司
            $object->brotherid = $brotherid;
            
        }
        $object->brotherlist=$model->getEmpList("bro_id,bro_name"," AND bro_recycle!=1","brothers");
        $object->shoplist=$model->getEmpList("shop_id,shop_name","","shop","","shop_order");
        $object->category = $model->getcategory();
        $object->canreturn=0;
        $object->nowuserid=$_SESSION['a_uid'];
        $object->nowshopid=$_SESSION['shopid'];
        $object->a_permissions = $_SESSION['a_permissions'];
        $view->assign($object);
        $view->display();
    }
    


    function create()
    {   

        $busi_id = Request::getVar('b_id','get');
        $clientid = Request::getVar('clientid','get');
        $parentid = Request::getVar('parentid','get');
        if (empty($busi_id)) $busi_id = 1;
        $paiche_deposit = 10000;
        $paiche_rent=0;
        $busiInfo = array();
        $item_list=null;
        
        $model = $this->createModel("list",dirname( __FILE__ ));
        
        
        $busiInfo['paiche_needtax']=0;//默认不需要开票
        

        if (!empty($parentid)){//长期用车
            $sql="Select a.*,aa.emp_name AS yewuyuan,c.client_salesman,aa.emp_shopid,b.shop_name,d.emp_name AS siji,e.car_num 
                  From contract as a LEFT JOIN emp AS d ON a.contract_driver=d.emp_id 
                  LEFT JOIN car AS e ON a.contract_car=e.car_id 
                  Inner Join client c ON a.client_id=c.client_id 
                  Left Join emp aa ON c.client_salesman=aa.emp_id 
                  Left Join shop b on aa.emp_shopid=b.shop_id 
                  Where a.contract_id={$parentid}";
            $contract=$model->getRow(0,$sql);
            $sdate=$contract['paiche_endDate'];
            $busi_id=$contract['contract_type'];
            $clientid=$contract['client_id'];
            
            $busiInfo['paiche_parent']=$parentid;
            $busiInfo['paiche_startDate_format']=date("Y-m-d",strtotime("+1 day",$sdate));
            $busiInfo['paiche_endDate_format']=date("Y-m-d",strtotime("+1 month -1 day",strtotime("+1 day",$sdate)));
            $busiInfo['paiche_limitKm']=$contract['contract_limitKm'];
            $busiInfo['paiche_unlimitKm']=$contract['contract_unlimitKm'];
            $busiInfo['paiche_overKm']=$contract['contract_overKm'];
            $busiInfo['paiche_busitype']=2;//长期企业客户
            $paiche_deposit=0;//$contract['contract_deposit'];
            $paiche_rent=$contract['contract_rent'];
            //业务归属
            $busiInfo['yewuyuan']=$contract['yewuyuan'];
            $busiInfo['paicheCounterMan']=$contract['client_salesman'];
            $busiInfo['paicheCounterShop']=$contract['emp_shopid'];
            //业务服务
            $busiInfo['jiedaiyuan']=$contract['yewuyuan'];
            $busiInfo['paicheServerMan']=$contract['client_salesman'];
            $busiInfo['paiche_shopid']=$contract['emp_shopid'];
            $busiInfo['shop_name']=$contract['shop_name'];
            
            $sql = "SELECT a.`id`,a.`item_id`,a.`conv_result`,a.`item_fact`,a.`conv_money`,a.`have_in_money`,b.`item_name`,b.`item_type`,b.`item_options`,b.`item_calcu`,b.`item_caltype`,b.`item_unit`,b.`item_costname` ".
            "FROM `contract_items` AS a INNER JOIN `items` AS b ON a.`item_id`=b.`item_id` WHERE a.`contract_id`={$parentid} ORDER BY b.`item_order`,a.`item_id`";
            $item_list=$model->getListBySql($sql);
            
            
            //$busiInfo['']=$contract[''];
                    
        }else{//临时用车     默认当前用户作为服务门店和接待
            $busiInfo['paiche_busitype']=1;//默认临时客户
            //业务服务
            $busiInfo['jiedaiyuan']=$_SESSION['truename'];
            $busiInfo['paicheServerMan']=$_SESSION['user_id'];
            $busiInfo['paiche_shopid']=$_SESSION['shopid'];
            $busiInfo['shop_name']=$_SESSION['shopname'];
        }
        
        $object = new stdClass();
        $object->task = "insert";
        $object->busitype = $busi_id;
        $object->PAGETITLE=$model->getPageTitle($busi_id);
        
        $date_array = array();
        for($day=0; $day<=23; $day++){
            $date_array[$day]['hour']=$day;
        }
        $object->hourlist = $date_array;
        $date_array = array();
        for($day=0; $day<=11; $day++){
            $date_array[$day]['minute']=$day*5;
        }
        
        $hour=date("H");
        $min=date("i")+15;
        if ($min>=60){
            $hour++;
            $min=$min-60;
        }
        $busiInfo['paiche_startHour']=$hour;
        $busiInfo['paiche_startMinute']=$min;
        if (!empty($parentid)){//长期用车
            $busiInfo['paiche_startHour']=0;
            $busiInfo['paiche_startMinute']=0;
            $busiInfo['paiche_endHour']=23;
            $busiInfo['paiche_endMinute']=59;
        }
        $busiInfo['paicheCom']=$clientid;
        if (!empty($clientid)){//企业用车
            $busiInfo['paiche_busitype']=2;
        }
        $object->minuelist = $date_array;
        $object->list = $busiInfo;
        if ($busi_id==2){
            $object->brotherlist = $model->getListBySql("Select bro_id,bro_name,bro_linker,bro_phone From `brothers` Where bro_recycle=0");
        }

        $sql="SELECT client_id,client_name,client_Mlinker,client_Mphone,c.client_salesman,a.emp_shopid,a.emp_name,c.client_shopid 
              FROM client c Left Join emp a ON c.client_salesman=a.emp_id Left Join shop b on a.emp_shopid=b.shop_id WHERE c.client_recycle!=1";
        $clientlist=$model->getListBySql($sql);
        $object->itemlist = $item_list;
        $object->clientlist=$clientlist;
        $object->shoplist=$model->getEmpList("shop_id,shop_name","","shop","","shop_order");
        $object->paiche_deposit = $paiche_deposit;
        $object->paiche_deposit_back = $paiche_deposit;
        $object->paiche_rent=$paiche_rent;
        $object->clientid = $clientid;
        $object->a_permissions = $_SESSION['a_permissions'];
        $view  = $this->createView("operator/business/create.html");
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
        $userid=$_SESSION['a_uid'];
        $empname=$model->getEmpName($_SESSION['a_uid']);
        $busi_id = Request::getVar('b_id','post');
        $contractNum=date('YmdHis',time());
        $paiche_busitype=Request::getVar('paiche_busitype','post');
        $shop_id=Request::getVar('shop_id','post');
        
        $object = new stdClass();
        $object->paiche_type=$busi_id;
        $object->paiche_contractNum=$contractNum;
        $object->paicheCounterShop=Request::getVar('paicheCounterShop','post');
        $object->paicheCounterMan=Request::getVar('paicheCounterMan2','post');
        $object->paiche_shopid=Request::getVar('shop_id','post');
        $object->paicheServerMan=Request::getVar('paicheServerMan2','post');
        if ($paiche_busitype==1){//临时客户
            $object->paiche_personal=1;
            $object->paicheCom=0;
            $object->paiche_brother=0;
        }elseif($paiche_busitype==2){//企业客户
            $object->paiche_personal=0;
            $paicheCom=Request::getVar('paiche_name2','post');
            $object->paicheCom=empty($paicheCom)? 0 : $paicheCom;
            $object->paiche_brother=0;
        }else{//调车公司
            $object->paiche_personal=1;
            $object->paicheCom=0;
            $paiche_brother=Request::getVar('paiche_brother','post');
            $object->paiche_brother=empty($paiche_brother)?0:$paiche_brother;
        }
        
        $object->paiche_linker=Request::getVar('paiche_linker','post');
        $object->paiche_linkerPhone=Request::getVar('paiche_linkerPhone','post');
        if ($busi_id==1 || $busi_id==3){
        $object->paiche_linkerNum=Request::getVar('paiche_linkerNum','post');
        $object->paiche_linkerAdd=Request::getVar('paiche_linkerAdd','post');
        $object->paiche_linkerPicture=Request::getVar('paiche_linkerPicture','post');
        $object->paiche_promier=Request::getVar('paiche_promier','post');
        $object->paiche_promierPhone=Request::getVar('paiche_promierPhone','post');
        $object->paiche_promierNum=Request::getVar('paiche_promierNum','post');
        $object->paiche_promierAdd=Request::getVar('paiche_promierAdd','post');
        $object->paiche_promierPicture=Request::getVar('paiche_promierPicture','post');
        }
        
        $object->paiche_startDate=strtotime(Request::getVar('p_startDate','post'));
        $object->paiche_endDate=strtotime(Request::getVar('p_endDate','post'));
        $object->paiche_AccountendDate=strtotime(Request::getVar('paiche_startDate','post'))-86400;//结账截止日期为合同开始日期的前一天
        $object->paiche_lastTotalDate=Request::getVar('paiche_startDate','post');//上一次统计超公里日期为合同开始日期的前一天
        $object->paiche_requestCar=Request::getVar('paiche_requestCar','post');
        $paiche_overTime=Request::getVar('paiche_overTime','post');
        $object->paiche_overTime=empty($paiche_overTime) ? 0 : $paiche_overTime;
        $paiche_unlimitTime=Request::getVar('paiche_unlimitTime','post');
        $object->paiche_unlimitTime=empty($paiche_unlimitTime)? "" : $paiche_unlimitTime;
        $paiche_limitKm=Request::getVar('paiche_limitKm','post');
        //油价
        $youfei=Request::getVar('youfei','post');
        $youfei_shen=Request::getVar('youfei_shen','post');
        $youfei_danjia=Request::getVar('youfei_danjia','post');
        $object->youfei=empty($youfei)? "" : $youfei;
        $object->youfei_shen=empty($youfei_shen)? 0 : $youfei_shen;
        $object->youfei_danjia=empty($youfei_danjia)? 0 : $youfei_danjia;

        $paiche_overKm=Request::getVar('paiche_overKm','post');
        $object->paiche_limitKm=empty($paiche_limitKm)? 0 : $paiche_limitKm;
        $paiche_unlimitKm=Request::getVar('paiche_unlimitKm','post');

        $object->paiche_unlimitKm=empty($paiche_unlimitKm)? "" : $paiche_unlimitKm;

        

        $object->paiche_overKm=empty($paiche_overKm)? 0 : $paiche_overKm;
        if($busi_id==3 || $busi_id==4){
            $paiche_limitKmType=Request::getVar('paiche_limitKmType','post');
            $object->paiche_limitKmType=empty($paiche_limitKmType)? 0 : $paiche_limitKmType;
        }
        if($busi_id==1 || $busi_id==2){
            $paiche_front=Request::getVar('paiche_front','post');
            $object->paiche_front=empty($paiche_front)? 0 : $paiche_front;
            $object->paiche_line=Request::getVar('paiche_line','post');
            $paiche_needtax=Request::getVar('paiche_needtax','post');
            $object->paiche_needtax=empty($paiche_needtax)? 0 : $paiche_needtax;
            $paicheCar2=Request::getVar('paicheCar2','post');
            $object->paicheCar2=empty($paicheCar2)? 0 : $paicheCar2;
            $object->paicheCar2s=Request::getVar('paicheCar','post');
            $object->paiche_coupons=Request::getVar('paiche_coupons','post');
        }
        if($busi_id==2){
        $object->paiche_route=Request::getVar('paiche_route','post');
        $object->paiche_scope=Request::getVar('paiche_scope','post');
        
        }
        $object->paiche_specialRemarks=Request::getVar('paiche_specialRemarks','post');
        if($busi_id==2 || $busi_id==4 || $busi_id==5){
            $object->paiche_workTime=Request::getVar('paiche_workTime','post');
        }
        if($busi_id==3 || $busi_id==4 || $busi_id==5){
            $paiche_AccountendDate=Request::getVar('paiche_AccountendDate','post');
            $paiche_lastTotalDate=Request::getVar('paiche_lastTotalDate','post');
            $paiche_parent=Request::getVar('paiche_parent','post');
            //$object->paiche_AccountendDate=empty($paiche_AccountendDate)? 0 : strtotime($paiche_AccountendDate);
            //$object->paiche_lastTotalDate=$paiche_lastTotalDate;
            $object->paiche_parent=$paiche_parent;
            $forward = "../busilong/list.php?task=detail&uid={$paiche_parent}&b_id=".Request::getVar('b_id','post');
        }
        if($busi_id==1){
            $object->paiche_aaa=Request::getVar('paiche_aaa','post');
        }
                
        $object->paiche_status=0;       
        $object->paiche_times=time();
        $object->paiche_userid=$userid;
        $object->paiche_Man=$empname;
        
        //var_dump($object);
        //exit();

        $rec_id=$model->store($object);
        if ($rec_id>0)
        {
            $re=true;
            //租金
            $paiche_rent=Request::getVar('paiche_rent','post');     
            $object = new Object();
            $object->paiche_id = $rec_id;
            $object->charge_id = 2;
            $object->conv_money = $paiche_rent;
            $object->back_money =0;
            $object->continuerent_start=strtotime(Request::getVar('p_startDate','post'));
            $object->continuerent_end=strtotime(Request::getVar('p_endDate','post'));
            //押金
            $paiche_deposit=Request::getVar('paiche_deposit','post');
            $paiche_deposit_back=Request::getVar('paiche_deposit_back','post');
            $object2 = new Object();
            $object2->paiche_id = $rec_id;
            $object2->charge_id = 1;
            $object2->conv_money = empty($paiche_deposit)? 0 : $paiche_deposit;
            $object2->back_money =empty($paiche_deposit_back)? 0:$paiche_deposit_back;
            
            if ($model->store($object,"paiche_charges") && $model->store($object2,"paiche_charges")){                           
            }else{
                $re=false;
            }
            
            //收费项目
            $arr_charge=Request::getVar('Cid','post');//收费项目
            $arr_del=Request::getVar('Did','post');//删除标记
            $arr_money=Request::getVar('money','post');
            $arr_backmoney=Request::getVar('back_money','post');
            
            if ($arr_charge){
                for($i=0;$i<count($arr_charge);$i++){
                    $cid=$arr_charge[$i];               
                    if ($arr_del[$i]==0){//没删除
                        $object = new Object();
                        $object->paiche_id = $rec_id;
                        $object->charge_id = $cid;
                        $object->conv_money = $arr_money[$i];
                        $object->back_money =empty($arr_backmoney[$i])? 0:$arr_backmoney[$i];
                        if ($model->store($object,"paiche_charges")){                           
                        }else{
                            $re=false;
                        }
                    }
                }
            }
            //条款约定
            $arr_item=Request::getVar('Iid','post');//约定条款
            $arr_del=Request::getVar('DVid','post');//删除标记
            $arr_result=Request::getVar('result','post');
            if ($arr_item){
                for($i=0;$i<count($arr_item);$i++){
                    $iid=$arr_item[$i];             
                    if ($arr_del[$i]==0){//没删除
                        $object = new Object();
                        $object->paiche_id = $rec_id;
                        $object->item_id = $iid;
                        $object->conv_result = $arr_result[$i];
                        if ($model->store($object,"paiche_items")){                         
                        }else{
                            $re=false;
                        }
                    }
                }
            }
            
            if ($paiche_busitype==3){//调车公司用我们的车
                $paiche_brother_rent=Request::getVar('paiche_brother_rented','post');//本公司收现
                $paiche_brother_rent=empty($paiche_brother_rent)? 0 : $paiche_brother_rent;

                $object1 = new Object();
                $object1->shuntPaicheId = $rec_id;
                $object1->shuntCom = $paiche_brother;
                $object1->shunt_driver = "";
                $object1->shunt_driverPhone = "";
                $object1->shunt_rent = -1*$paiche_rent;//本公司报价（调车公司支付给我们)
                $object1->shunt_rented = -1*$paiche_brother_rent;//本公司收现
                $object1->shunt_type=1;//调车公司用我们的车
                $object1->shunt_balance = "是";
                $object1->shunt_specialRemarks = "";
                $object1->shuntDispatchMan = "";
                $object1->shunt_times=time();
                if ($model->store($object1,"shunt")){
                }else{
                    $re=false;
                }
            }
            //长期用车，更新最后一次派车日期
            if($busi_id==3 || $busi_id==4 || $busi_id==5){
                $object11 = new stdClass();
                $object11->contract_id=$paiche_parent;
                $object11->paiche_endDate=strtotime(Request::getVar('paiche_endDate','post'));
                if ($model->update($object11,'contract_id','contract')){
                }else{
                    $re=false;
                }
            }
            Components::save_admin_log("添加了".$model->getPageTitle($busi_id).",合同号：".$contractNum);
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
        $busiInfo = $model->getBusinessInfo($uid);
        $busi_id =$busiInfo['paiche_type'];
        if ($busiInfo['paiche_brother']>0){//调车公司用车
            $busiInfo['paiche_busitype']=3;
            $busiInfo['paiche_shuntline']['shunt_rented']=-1*$busiInfo['paiche_shuntline']['shunt_rented'];
        }elseif ($busiInfo['paicheCom']>0){//企业用车
            $busiInfo['paiche_busitype']=2;
        }else{
            $busiInfo['paiche_busitype']=1;//临时客户
        }
                
        $charge_list=$model->getChargeList($uid," AND (a.`charge_id`=1 OR a.`charge_id`=2)");
        if ($charge_list){
            $paiche_rent1=$paiche_rent2=$paiche_rent3=0;
            foreach($charge_list as $key=>$val)
            {
                if ($val['charge_name']=="租金"){
                    $paiche_rent1+=$val["conv_money"];
                }
                if ($val['charge_name']=="押金"){
                    $paiche_rent2+=$val["conv_money"];
                    $paiche_rent3+=$val["back_money"];
                }
            }
            
        }
        $item_list=$model->getItemList($uid);
        $object = new stdClass();
        $object->list = $busiInfo;
        $object->task = "update";
        $object->busitype = $busi_id;
        //$object->chargelist = $charge_list;
        $object->itemlist = $item_list;
        $object->PAGETITLE=$model->getPageTitle($busi_id);
        $object->paiche_rent = $paiche_rent1;
        $object->paiche_deposit = $paiche_rent2;
        $object->paiche_deposit_back = $paiche_rent3;
        
        $date_array = array();
        for($day=0; $day<=23; $day++){
            $date_array[$day]['hour']=$day;
        }
        $object->hourlist = $date_array;
        $date_array = array();
        for($day=1; $day<=11; $day++){
            $date_array[$day]['minute']=$day*5;
        }
        $object->minuelist = $date_array;
        if ($busi_id==2){
            $object->brotherlist = $model->getListBySql("Select bro_id,bro_name,bro_linker,bro_phone From `brothers` Where bro_recycle=0");
        }
        $sql="SELECT client_id,client_name,client_Mlinker,client_Mphone,c.client_salesman,a.emp_shopid,a.emp_name,c.client_shopid 
              FROM client c Left Join emp a ON c.client_salesman=a.emp_id Left Join shop b on a.emp_shopid=b.shop_id WHERE c.client_recycle!=1";
        $clientlist=$model->getListBySql($sql);
        $object->clientlist=$clientlist;
        $object->shoplist=$model->getEmpList("shop_id,shop_name","","shop","","shop_order");
        $object->a_permissions = $_SESSION['a_permissions'];
        
        $view  = $this->createView("operator/business/create.html");
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
        $model = $this->createModel("list",dirname( __FILE__ ));
        $empname=$model->getEmpName($_SESSION['a_uid']);
        $busi_id = Request::getVar('b_id','post');
        if($busi_id==3 || $busi_id==4 || $busi_id==5){
            $paiche_parent=Request::getVar('paiche_parent','post');
            $forward = "../busilong/list.php?task=detail&uid={$paiche_parent}&b_id={$busi_id}";
        }
        $paiche_busitype=Request::getVar('paiche_busitype','post');
        $shop_id=Request::getVar('shop_id','post');
                
        $object = new stdClass();
        $object->paiche_id = $uid;
        $object->paicheCounterShop=Request::getVar('paicheCounterShop','post');
        $object->paicheCounterMan=Request::getVar('paicheCounterMan2','post');
        $object->paiche_shopid=Request::getVar('shop_id','post');
        $object->paicheServerMan=Request::getVar('paicheServerMan2','post');
        if ($paiche_busitype==1){//临时客户
            $object->paiche_personal=1;
            $object->paicheCom=0;
            $object->paiche_brother=0;
        }elseif($paiche_busitype==2){//企业客户
            $object->paiche_personal=0;
            $paicheCom=Request::getVar('paiche_name2','post');
            $object->paicheCom=empty($paicheCom)? 0 : $paicheCom;
            $object->paiche_brother=0;
        }else{//调车公司
            $object->paiche_personal=1;
            $object->paicheCom=0;
            $paiche_brother=Request::getVar('paiche_brother','post');
            $object->paiche_brother=empty($paiche_brother)?0:$paiche_brother;
        }
        
        $object->paiche_linker=Request::getVar('paiche_linker','post');
        $object->paiche_linkerPhone=Request::getVar('paiche_linkerPhone','post');
        if ($busi_id==1 || $busi_id==3){
        $object->paiche_linkerNum=Request::getVar('paiche_linkerNum','post');
        $object->paiche_linkerAdd=Request::getVar('paiche_linkerAdd','post');
        $object->paiche_linkerPicture=Request::getVar('paiche_linkerPicture','post');
        $object->paiche_promier=Request::getVar('paiche_promier','post');
        $object->paiche_promierPhone=Request::getVar('paiche_promierPhone','post');
        $object->paiche_promierNum=Request::getVar('paiche_promierNum','post');
        $object->paiche_promierAdd=Request::getVar('paiche_promierAdd','post');
        $object->paiche_promierPicture=Request::getVar('paiche_promierPicture','post');
        }
        $youfei=Request::getVar('youfei','post');
        $youfei_shen=Request::getVar('youfei_shen','post');
        $youfei_danjia=Request::getVar('youfei_danjia','post');
        $object->youfei=empty($youfei)? "" : $youfei;
        $object->youfei_shen=empty($youfei_shen)? 0 : $youfei_shen;
        $object->youfei_danjia=empty($youfei_danjia)? 0 : $youfei_danjia;
        $object->paiche_startDate=strtotime(Request::getVar('p_startDate','post'));
        $object->paiche_endDate=strtotime(Request::getVar('p_endDate','post'));
        $object->paiche_requestCar=Request::getVar('paiche_requestCar','post');
        $paiche_overTime=Request::getVar('paiche_overTime','post');
        $object->paiche_overTime=empty($paiche_overTime) ? 0 : $paiche_overTime;
        $paiche_unlimitTime=Request::getVar('paiche_unlimitTime','post');
        $object->paiche_unlimitTime=empty($paiche_unlimitTime)? "" : $paiche_unlimitTime;
        $paiche_limitKm=Request::getVar('paiche_limitKm','post');
        $paiche_overKm=Request::getVar('paiche_overKm','post');
        $object->paiche_limitKm=empty($paiche_limitKm)? 0 : $paiche_limitKm;
        $paiche_unlimitKm=Request::getVar('paiche_unlimitKm','post');
        $object->paiche_unlimitKm=empty($paiche_unlimitKm)? "" : $paiche_unlimitKm;
        $object->paiche_overKm=empty($paiche_overKm)? 0 : $paiche_overKm;
        if($busi_id==4 || $busi_id==3){
            $paiche_limitKmType=Request::getVar('paiche_limitKmType','post');
            $object->paiche_limitKmType=empty($paiche_limitKmType)? 0 : $paiche_limitKmType;
        }
        if($busi_id==1 || $busi_id==2){
            $paiche_front=Request::getVar('paiche_front','post');
            $object->paiche_front=empty($paiche_front)? 0 : $paiche_front;
            $object->paiche_line=Request::getVar('paiche_line','post');
            $paiche_needtax=Request::getVar('paiche_needtax','post');
            $object->paiche_needtax=empty($paiche_needtax)? 0 : $paiche_needtax;
            $paicheCar2=Request::getVar('paicheCar2','post');
            $object->paicheCar2=empty($paicheCar2)? 0 : $paicheCar2;
            $object->paicheCar2s=Request::getVar('paicheCar','post');
            $object->paiche_coupons=Request::getVar('paiche_coupons','post');
        }
        if($busi_id==2){
        $object->paiche_route=Request::getVar('paiche_route','post');
        $object->paiche_scope=Request::getVar('paiche_scope','post');
        }
        $object->paiche_specialRemarks=Request::getVar('paiche_specialRemarks','post');
        if($busi_id==2 || $busi_id==4 || $busi_id==5){
            $object->paiche_workTime=Request::getVar('paiche_workTime','post');
        }
        $object->paiche_Man=$empname;
        if($busi_id==1){
            $object->paiche_aaa=Request::getVar('paiche_aaa','post');
        }
        

        if ($model->update($object,'paiche_id'))
        {
            $re=true;
            //租金和押金
            $paiche_rent=Request::getVar('paiche_rent','post');
            $paiche_deposit=Request::getVar('paiche_deposit','post');
            $paiche_deposit_back=Request::getVar('paiche_deposit_back','post');
            
            $sql2="Update paiche_charges Set conv_money={$paiche_rent},continuerent_start=".strtotime(Request::getVar('p_startDate','post')).",continuerent_end=".strtotime(Request::getVar('p_endDate','post'))." Where paiche_id={$uid} And charge_id=2";
            $sql1="Update paiche_charges Set conv_money=".(empty($paiche_deposit)? 0 : $paiche_deposit).",back_money=".(empty($paiche_deposit_back)? 0:$paiche_deposit_back)." Where paiche_id={$uid} And charge_id=1";
            
            if ($model->update("","","",$sql1) && $model->update("","","",$sql2)){
            }else{
                $re=false;
            }
            
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
                            $object->paiche_id = $uid;
                            $object->item_id = $iid;
                            $object->conv_result = $arr_result[$i];
                            if ($model->store($object,"paiche_items")){                         
                            }else{
                                $re=false;
                            }
                        }
                    }else{//原来的
                        $rid=$arr_rec[$i];
                        if ($arr_del[$i]==1){//删除
                            if ($model->deleteitem($rid)){                          
                            }else{
                                $re=false;
                            }
                        }
                    }
                }
            }
            
            if ($paiche_busitype==3){//调车公司用我们的车
                $paiche_brother_rent=Request::getVar('paiche_brother_rented','post');
                $paiche_brother_rent=empty($paiche_brother_rent)? 0 : $paiche_brother_rent;
                $sql="Update shunt Set shunt_rent=-1*{$paiche_rent},shunt_rented=-1*{$paiche_brother_rent},shuntCom = {$paiche_brother} Where shuntPaicheId={$uid} And shuntCom={$paiche_brother}";
                
                if ($model->update("","","",$sql)){
                }else{
                    $re=false;
                }
            }       
            Components::save_admin_log("修改了".$model->getPageTitle($busi_id).",合同号：".Request::getVar('paiche_contractNum','post'));
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
        if ($model->delete($uid)){
            Components::save_admin_log("删除了ID为".$uid."的".$model->getPageTitle($busi_id));
            $this->redirect($forward,"删除成功");
        }
    }
    function cancel()
    {
        $forward = Request::getVar("forward");
        $busi_id = Request::getVar('b_id','get');
        if(empty($forward))
        {
            $forward = "list.php?b_id=".$busi_id;
        }
        $uid = Request::getVar('uid','get');
        $model = $this->createModel("list",dirname( __FILE__ ));
        $re=true;
        $object = new Object();
        $object->settlePaicheId = $uid;
        $object->settle_end = 1;
        $object2 = new Object();
        $object2->paiche_id = $uid;
        $object2->paiche_status = -2;
        if ($model->update($object,"settlePaicheId","settle") && $model->update($object2,"paiche_id","paiche")){

            Components::save_admin_log("取消了ID为".$uid."的".$model->getPageTitle($busi_id));
            $this->redirect($forward,"取消派车单成功");
        }
    }
    
    function front()
    {
        $pid = Request::getVar('pid','get');
                
        $model = $this->createModel("list",dirname( __FILE__ ));
        
        
        $fields="`payment_id`,`payment_name`,`payment_fee`";
        $payments_list=$model->getEmpList($fields," AND payment_recycle!=1","payments");
        $fields="`bank_id`,`bank_name`";
        $bank_list=$model->getEmpList($fields," AND bank_recycle!=1","banks","","bank_order");
        
        $object = new stdClass();       
        $object->paymentslist = $payments_list;
        $object->banklist = $bank_list;
        $object->pid = $pid;
        $object->op = "front";
        $object->PAGETITLE=$this->arr_title["front"];
        $busiInfo = $model->getBusinessInfo($pid);
        $object->list = $busiInfo;
        
        $view  = $this->createView("operator/business/account.html");
        $view->assign($object);
        $view->display();
    }
    function front_accept()
    {
        $pid = Request::getVar('pid','post');
        $model = $this->createModel("list",dirname( __FILE__ ));
        
        $money=Request::getVar('infact','post');//实际金额
        $payments=Request::getVar('payments','post');
        $bank=Request::getVar('bank','post');
        $fee=Request::getVar('fee','post');
        $paiche_front=Request::getVar('paiche_front','post');
        $paiche_fronted=Request::getVar('paiche_fronted','post');

        if ($money>0){
            $object2 = new Object();
            $object2->paiche_id = $pid;
            $object2->paiche_fronted=$paiche_front-$paiche_fronted;//改变已收定金
                
            $object = new Object();
            $object->paiche_id = $pid;
            $object->client_id = 0;
            $object->payments_id = $payments;
            $object->bank_id = $bank;
            $object->money = $money;
            $object->add_time = time();
            $object->name = "租车收定金";
            $object->fee = empty($fee)? 0 : $fee;
            if ($model->store($object,"account_log") && $model->update($object2,'paiche_id')){
                $re="订单收定金成功！";
            }else{
                $re="订单收定金失败，返回重试！";
            }
        }else{
            $re="收款金额无效，返回重试！";
        }
        $object = new stdClass();
        $object->result = $re;
        $view  = $this->createView("operator/business/result.html");
        $view->assign($object);
        $view->display();
    }



    function account(){
        //print_r("expression");exit;
        $pid = Request::getVar('pid','get');
        $account_flag=Request::getVar('op_flag','get');//0-收款；1-结账
        
        $model = $this->createModel("list",dirname( __FILE__ ));
        
        $charge_list=$model->getChargeList($pid," AND a.`have_in_money`<a.`conv_money`".($account_flag==1?" AND b.`charge_name` <>'押金'":""));
        $fields="`payment_id`,`payment_name`,`payment_fee`";
        $payments_list=$model->getEmpList($fields," AND payment_recycle!=1","payments");
        $fields="`bank_id`,`bank_name`";
        $bank_list=$model->getEmpList($fields," AND bank_recycle!=1","banks","","bank_order");
        
        $object = new stdClass();
        $object->chargelist = $charge_list;
        if ($account_flag==1){
            $back_list=$model->getChargeList($pid," AND a.`back_money`>0 AND a.`have_in_money`>0 AND a.`have_back_money`<a.`back_money`");
            $object->backlist = $back_list;
        }
        $object->paymentslist = $payments_list;
        $object->banklist = $bank_list;
        $object->pid = $pid;
        $object->op = "account";
        $object->account_flag = $account_flag;
        $object->PAGETITLE=$this->arr_title["account".$account_flag];
        $busiInfo = $model->getBusinessInfo($pid);
        $object->list = $busiInfo;
        $object->clientid=$busiInfo['paicheCom'];
        $object->clientname=$busiInfo['client_name'];
        $object->clientmoney=$busiInfo['client_balance'];
        if ($account_flag==1){          
            $item_list=$model->getItemList($pid," AND a.`conv_money`>0 AND a.`have_in_money`<a.`conv_money`");
            $object->itemlist = $item_list;
        }
        $view  = $this->createView("operator/business/account.html");
        $view->assign($object);
        $view->display();
    }
    function accept(){
        $pid = Request::getVar('pid','post');
        $account_flag=Request::getVar('account_flag','post');//0-收款；1-结账
        $model = $this->createModel("list",dirname( __FILE__ ));
        
        $re=true;
        $money=Request::getVar('infact','post');//实际金额
        $money1=Request::getVar('money1','post');//账户1金额
        if (empty($money1)){
            $money1=0;
        }
        $money2=Request::getVar('money2','post');//账户2金额
        if (empty($money2)){
            $money2=0;
        }
        if ($money != $money1+$money2){
            $object = new stdClass();
            $object->result = "两个账户的金额之和不等于总金额，返回重新输入！";
            $view  = $this->createView("operator/business/result.html");
            $view->assign($object);
            $view->display();
            exit();
        }
        
        $arr_rec=Request::getVar('charge_id','post');//收费记录
        $arr_havemoney=Request::getVar('charge_havemoney','post');//已收款金额
        $arr_money=Request::getVar('charge_money','post');
        for($i=0;$i<count($arr_rec);$i++){
            $object = new Object();
            $object->id = $arr_rec[$i];
            $object->have_in_money = $arr_havemoney[$i]+$arr_money[$i];
            $object->status =1;
            if ($model->update($object,"id","paiche_charges")){
            }else{
                $re=false;
            }
        }
        if ($account_flag==1){//结账
            if ($re){//处理超公里费用和超时费用已收部分
                $object9 = new Object();
                $object9->settlePaicheId = $pid;
                $object9->settle_losses=2;//改变已结账状态
                $overKmMoney=Request::getVar('overKmMoney','post');
                $overTimeMoney=Request::getVar('overTimeMoney','post');
                if (!empty($overKmMoney) || !empty($overTimeMoney)){
                    $object9->settle_overKmMoney_have=empty($overKmMoney)?0:$overKmMoney;           
                    $object9->settle_overTimeMoney_have=empty($overTimeMoney)?0:$overTimeMoney;
                }
                if ($model->update($object9,'settlePaicheId','settle')){
                }else{
                    $re=false;
                }
            }
            if ($re){
                $arr_rec=Request::getVar('back_id','post');//退款记录
                $arr_havemoney=Request::getVar('back_havemoney','post');//已退款金额
                $arr_money=Request::getVar('back_money','post');
                for($i=0;$i<count($arr_rec);$i++){
                    $object = new Object();
                    $object->id = $arr_rec[$i];
                    $object->have_back_money = $arr_havemoney[$i]+$arr_money[$i];
                    if ($model->update($object,"id","paiche_charges")){
                    }else{
                        $re=false;
                    }
                }
            }
            if ($re){
                $arr_rec=Request::getVar('item_id','post');//收费记录
                $arr_money=Request::getVar('item_money','post');//收款金额
                for($i=0;$i<count($arr_rec);$i++){
                    $object = new Object();
                    $object->id = $arr_rec[$i];
                    $object->have_in_money = $arr_money[$i];
                    $object->status =1;
                    if ($model->update($object,"id","paiche_items")){
                    }else{
                        $re=false;
                    }
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
        }else{//收款
            
            $object = new Object();
            $object->paiche_id = $pid;
            $object->paiche_accountstatus=1;//改变已收款状态
            $object->paiche_fronted=0;//回冲定金
            if ($model->update($object,'paiche_id')){
            }else{
                $re=false;
            }
        }
        if ($re ){
            $balance = Request::getVar('isBalance','post'); //是否用余额支付
            if (empty($balance)) $balance=0;
            $clientid=Request::getVar('clientid','post');
            
            if ($balance==1){//余额支付
                $sql="UPDATE `client` SET `client_balance`=`client_balance`-{$money} WHERE `client_id`={$clientid}";
                
                $object = new stdClass();       
                $object->rechargeClientId = $clientid;
                $object->recharge_mode=0;
                $object->recharge_remitTime = time();
                $object->recharge_money = $money;
                $object->recharge_type = 2;
                $object->recharge_explanation ="支付用车租金";
                $object->recharge_time = time();
                if ($model->update('','','',$sql) && $model->store($object,"recharge")){
                }else{
                    $re=false;
                }
            }else{
                $payments=Request::getVar('payments','post');
                //if ($payments==1){
                //  $bank=1;
                //}else{
                $bank=Request::getVar('bank','post');
                //}
                $fee=Request::getVar('fee','post');
                
                $object = new Object();
                $object->paiche_id = $pid;
                $object->client_id = $clientid;
                $object->payments_id = $payments;
                $object->bank_id = $bank;
                $object->money = $money1;
                $object->add_time = time();
                $object->name = $account_flag==0 ? ($bank==8?"收押金":"收租金") : "租车结账".($bank==8 ? "退押金" : "收款");
                $object->fee = empty($fee)? 0 : $fee;
                if ($model->store($object,"account_log")){
                }else{
                    $re=false;
                }
                
                if ($money2!=0){
                    $bank2=Request::getVar('bank2','post');
                    $payments2=Request::getVar('payments2','post');
                    $object = new Object();
                    $object->paiche_id = $pid;
                    $object->client_id = $clientid;
                    $object->payments_id = $payments2;
                    $object->bank_id = $bank2;
                    $object->money = $money2;
                    $object->add_time = time();
                    $object->name = $account_flag==0?($bank2==8?"收押金":"收租金"):"租车结账".($bank2==8?"退押金":"收款");
                    $object->fee = empty($fee)? 0 : $fee;
                    if ($model->store($object,"account_log")){
                    }else{
                        $re=false;
                    }
                }
            }
        }
        
        $object = new stdClass();
        $object->result = $re ? "订单收款/结账成功！":"订单收款/结账失败，返回重试！";
        $view  = $this->createView("operator/business/result.html");
        $view->assign($object);
        $view->display();
    }
    function diaodu()
    {
        $pid = Request::getVar('pid','get');
        $model = $this->createModel("list",dirname( __FILE__ ));
        $busiInfo = $model->getBusinessInfo($pid);
        $paiche_rent =0;
        if ($busiInfo['paiche_brother']>0){
            $charge_list=$model->getChargeList($pid);
            if ($charge_list){
            foreach($charge_list as $key=>$val)
            {
                if ($val['charge_name']=="租金" || $val['charge_name']=="续租金"){
                    $paiche_rent += $val["conv_money"];
                }
            }
            }
        }
        $object = new stdClass();
        $object->pid = $pid;
        $object->op = "diaodu";
        $object->PAGETITLE=$this->arr_title["diaodu"];
        $object->busitype=$busiInfo["paiche_type"];
        $object->list = $busiInfo;
        $object->paiche_rent =$paiche_rent;
        $view  = $this->createView("operator/business/account.html");
        $view->assign($object);
        $view->display();
    }
    
    function diaodu_accept(){
        $pid = Request::getVar('pid','post');
        $busi_id = Request::getVar('b_id','post');
        $paiche_busitype=Request::getVar('paiche_busitype','post');
        $model = $this->createModel("list",dirname( __FILE__ ));        
        $empname=$model->getEmpName($_SESSION['a_uid']);
        
        $object = new Object();
        $object->paiche_id = $pid;
        $paicheCar=Request::getVar('paicheCar2','post');
        $object->paicheCar=empty($paicheCar)? 0 : $paicheCar;
        $paicheDispatchMan="";
        $paiche_dispatchTimes=0;
        if($busi_id==2 || $busi_id==4 || $busi_id==5){
            $paicheDriver=Request::getVar('paicheDriver2','post');
            $object->paicheDriver=empty($paicheDriver)? 0 : $paicheDriver;
        }
        $object->paiche_status=1;
        $object->paicheDispatchMan=$empname;
        $object->paiche_dispatchTimes=time();
        //更新接待人为当前调度人
        if($busi_id==1 || ($busi_id==2 && $paiche_busitype!=0)){
            $object->paicheServerMan=$_SESSION['user_id'];
            $object->paiche_shopid=$_SESSION['shopid'];
        }
        $paiche_shunt=Request::getVar('shunt','post');//是否外调别人的车        
        $object->paiche_shunt=$paiche_shunt;

        $re=true;
        if ($model->update($object,'paiche_id')){
            $busiInfo = $model->getBusinessInfo($pid);
        }else{
            $re=false;
        }
        if ($re && ($busi_id==2 || $busi_id==5)){//生成出车记录 or 调车记录
            $mobtel=$busiInfo['emp_phone']; //驾驶员手机号
            if($paiche_shunt==0){//生成出车记录
                $object2 = new Object();
                $object2->drivePaicheId = $pid;
                $object2->drive_date = strtotime(date("Y-m-d",$busiInfo['paiche_startDate']));
                $object2->driveDriver = $paicheDriver;
                $object2->drive_startTime = $busiInfo['paiche_startDate'];
                if ($model->store($object2,"paiche_drive")){
                }else{
                    $re=false;
                }
            }
            if($paiche_shunt==1){//调车记录
                $object3 = new Object();
                $object3->shuntPaicheId = $pid;
                $object3->shuntCom = Request::getVar('shuntCom2','post');
                $object3->shunt_driver = Request::getVar('shunt_driver','post');
                $object3->shunt_driverPhone = Request::getVar('shunt_driverPhone','post');
                $object3->shunt_rent = Request::getVar('shunt_rent','post');//调车公司报价
                $shunt_rented=Request::getVar('shunt_rented','post');
                $object3->shunt_rented = empty($shunt_rented)?0:$shunt_rented;//调车公司收现
                $object3->shunt_type=0;//我们用调车公司的车
                $object3->shunt_specialRemarks = Request::getVar('shunt_specialRemarks','post');
                $object3->shuntDispatchMan = $empname;
                $object3->shunt_times=time();
                if ($model->store($object3,"shunt")){
                }else{
                    $re=false;
                }
            }
            /*
            if (!empty($mobtel) && strlen($mobtel)==11){ //生成待发短信给驾驶员
                $smscontent=$busiInfo['paiche_startDate_format'].$busiInfo['siji']."开苏D".$busiInfo['car_num'].
                        "，出发时间：".$busiInfo['paiche_startHour'].":".$busiInfo['paiche_startMinute'].
                        "，联系人：".$busiInfo['paiche_linker']."，".$busiInfo['paiche_linkerPhone']."，".(empty($busiInfo['paiche_route'])?"单程":$busiInfo['paiche_route']."程").
                        "，开车线路：".str_replace(" ",",",str_replace("—","",$busiInfo['paiche_line'])).(empty($busiInfo['paiche_specialRemarks'])?"":"，备注说明：".str_replace(" ",",",str_replace("—","",$busiInfo['paiche_specialRemarks'])));

                $object2 = new stdClass();      
                $object2->sms_tophone = $mobtel;
                $object2->sms_content = $smscontent;
                $object2->sms_priority=1;
                $object2->sms_type = 1;
                $object2->sms_state = 0;
                $object2->sms_senddate = time();
                $object2->sms_sendcount = 1;
                $object2->sms_inputuser = $empname;
                $object2->sms_inputdate = time();
                if ($model->store($object2,"sales_sms")){
                }else{
                    $re=false;
                }
            }
            */
        }
        
        $object = new stdClass();
        $object->result = $re ? "订单调度成功！":"订单调度失败，返回重试！";
        $view  = $this->createView("operator/business/result.html");
        $view->assign($object);
        $view->display();
        
    }
    function vio(){
        $pid = Request::getVar('pid','get');
        $model = $this->createModel("list",dirname( __FILE__ ));
        
        $charge_list=$model->getChargeList($pid," AND a.`have_in_money`>0");
        
        //$fields="`payment_id`,`payment_name`,`payment_fee`";
        //$payments_list=$model->getEmpList($fields," AND payment_recycle!=1","payments");
        //$fields="`bank_id`,`bank_name`";
        //$bank_list=$model->getEmpList($fields," AND bank_recycle!=1","banks");
        $paiche_rented =0;
        foreach($charge_list as $key=>$val)
        {
            if ($val['charge_name']=="租金" || $val['charge_name']=="续租金"){
                $paiche_rented += $val["have_in_money"];//已收租金
            }
        }
        
        $object = new stdClass();
        $object->chargelist = $charge_list;
        $object->paiche_rented = $paiche_rented*0.8;//已收租金
        //$object->paymentslist = $payments_list;
        //$object->banklist = $bank_list;
        $object->pid = $pid;
        $object->op = "vio";
        $object->PAGETITLE=$this->arr_title["vio"];
        $busiInfo = $model->getBusinessInfo($pid);
        $object->list = $busiInfo;
        $object->nowtime = date("Y-m-d H:i:s");

        $view  = $this->createView("operator/business/account.html");
        $view->assign($object);
        $view->display();
    }
    function vio_accept(){
        $pid = Request::getVar('pid','post');
        $model = $this->createModel("list",dirname( __FILE__ ));
        
        $re=true;
        $factendtime=Request::getVar('return_endDate','post');//实际还车时间
        $settle_vio=Request::getVar('settle_vio','post');//违约金

        $object = new Object();
        $object->paiche_id = $pid;
        $object->paiche_status=-1;//改变订单状态
        
        $object2 = new Object();
        $object2->settlePaicheId = $pid;
        $object2->settle_vio = empty($settle_vio)? 0 : $settle_vio;
        $object2->settle_vioreason =Request::getVar('settle_vioreason','post');
        $object2->settle_endDate=empty($factendtime)? time():strtotime($factendtime);
        
        if ($model->update($object,'paiche_id') && $model->update($object2,'settlePaicheId','settle')){
        }else{
            $re=false;
        }
        
        $object = new stdClass();
        $object->result = $re ? "订单违约处理成功！":"订单违约处理失败，返回重试！";
        $view  = $this->createView("operator/business/result.html");
        $view->assign($object);
        $view->display();
    }
    function changecar()
    {
        $pid = Request::getVar('pid','get');
        $step= Request::getVar('step','get');
        if ($step!=2){
            $object = new stdClass();
            $object->pid = $pid;
            $object->url = "changecar.php";
            $view  = $this->createView("operator/business/account3.html");
            $view->assign($object);
            $view->display();
            exit();
        }
        $model = $this->createModel("list",dirname( __FILE__ ));
        $busiInfo = $model->getBusinessInfo($pid);

        
        $fields=" a.*,b.car_num as carA,c.car_num as carB";
        $leftjoin=" `changecar` AS a LEFT JOIN `car` AS b ON a.changecar_carA=b.car_id LEFT JOIN `car` AS c ON a.changecar_carB=c.car_id";
        $change_list=$model->getEmpList($fields," AND a.changecarPaicheId='{$pid}'","",$leftjoin);
        
        $object = new stdClass();
        $object->pid = $pid;
        $object->op = "changecar";
        $object->PAGETITLE=$this->arr_title["changecar"];
        $object->busitype=$busiInfo["paiche_type"];
        $object->list = $busiInfo;
        
        $object->changelist=$change_list;
        $object->startdate=date("Y-m-d");
        $object->addtime=date("Y-m-d H:i:s");
        
        $view  = $this->createView("operator/business/account.html");
        $view->assign($object);
        $view->display();
    }
    function changecar_accept()
    {
        $pid = Request::getVar('pid','post');
        $busi_id = Request::getVar('b_id','post');
        $paiche_brother = Request::getVar('paiche_brother','post');
        $model = $this->createModel("list",dirname( __FILE__ ));
        $empname=$model->getEmpName($_SESSION['a_uid']);
        $a=$b=0;
        $re=true;
        $addtime = Request::getVar('addtime','post');
        
        if ($re){
            $object = new Object();
            $object->paiche_id = $pid;
            $paicheCar=Request::getVar('paicheCar2','post');
            $object->paicheCar=empty($paicheCar)? 0 : $paicheCar;
            
            $object4 = new Object();
            $object4->changecarPaicheId=$pid;
            $object4->changecar_carA=Request::getVar('changecar_carA2','post');
            $object4->changecar_carAStartKilo=Request::getVar('changecar_carAStartKilo','post');
            $object4->changecar_carAEndKilo=Request::getVar('changecar_carAEndKilo','post');
            $object4->changecar_carB=Request::getVar('paicheCar2','post');
            $changecar_kiloBNow=Request::getVar('changecar_kiloBNow','post');
            $object4->changecar_kiloBNow=empty($changecar_kiloBNow)?0:$changecar_kiloBNow;
            $object4->changecar_rentRemarks=Request::getVar('changecar_rentRemarks','post');
            $object4->changecar_rentA=$a;
            $object4->changecar_rentB=$b;
            $object4->changecarMan=$empname;
            $object4->changecar_print=0;
            $object4->changecar_times=empty($addtime) ? time() : strtotime($addtime);
            $startdate=Request::getVar('start_Date','post');
            $object4->changecar_startdate=empty($startdate)?0:strtotime($startdate);
            $rec_id=$model->store($object4,"changecar");
            if ($rec_id>0 && $model->update($object,'paiche_id')){
                $re=true;
            }else{
                $re=false;
            }
        }
        if ($re){//更新被换车辆最新公里数
            $object1 = new stdClass();
            $object1->car_id=Request::getVar('changecar_carA2','post');
            $object1->car_nowKilo=Request::getVar('changecar_carAEndKilo','post');
            if ($model->update($object1,'car_id','car')){
                $re=true;
            }else{
                $re=false;
            }
        }
        
        $object = new stdClass();
        $object->result = $re ? "订单换车成功！":"订单换车失败，返回重试！";
        $object->printchange = "yes";
        $object->pid = $pid;
        $object->cid = $rec_id;
        $view  = $this->createView("operator/business/result.html");
        $view->assign($object);
        $view->display();
    }
    function changedriver(){
        $pid = Request::getVar('pid','get');
        
        $model = $this->createModel("list",dirname( __FILE__ ));
        $busiInfo = $model->getBusinessInfo($pid);
        
        $object = new stdClass();
        $object->pid = $pid;
        $object->op = "changedriver";
        $object->PAGETITLE=$this->arr_title["changedriver"];
        $object->busitype=$busiInfo["paiche_type"];
        $object->list = $busiInfo;
        $object->startdate=date("Y-m-d");

        $view  = $this->createView("operator/business/account2.html");
        $view->assign($object);
        $view->display();
    }
    function changedriver_accept(){
        $pid = Request::getVar('pid','post');

        $model = $this->createModel("list",dirname( __FILE__ ));
        
        $object = new Object();
        $object->paiche_id = $pid;
        $object->paicheDriver=Request::getVar('paicheDriver2','post');
        
        $object4 = new Object();
        $object4->drivePaicheId=$pid;
        $object4->driveDriver=Request::getVar('paicheDriver2','post');      
        
        if ($model->update($object4,'drivePaicheId','paiche_drive') && $model->update($object,'paiche_id')){
            $re=true;
        }else{
            $re=false;
        }
        $object = new stdClass();
        $object->result = $re ? "订单换司机成功！":"订单换司机失败，返回重试！";
        $object->pid = $pid;
        $view  = $this->createView("operator/business/result.html");
        $view->assign($object);
        $view->display();
    }
    function changeroute(){
        $pid = Request::getVar('pid','get');
        
        $model = $this->createModel("list",dirname( __FILE__ ));
        $busiInfo = $model->getBusinessInfo($pid);
        $charge_list=$model->getChargeList($pid," and a.charge_id=2");

        $item_list=$model->getItemList($pid);
                
        $object = new stdClass();
        $object->list = $busiInfo;
        $object->chargelist = $charge_list;
        $object->itemlist = $item_list;
        $object->pid = $pid;
        $object->busitype=$busiInfo["paiche_type"];
        $object->op = "changeroute";
        $object->PAGETITLE=$this->arr_title["changeroute"];
        $view  = $this->createView("operator/business/account2.html");
        $view->assign($object);
        $view->display();
    }
    function changeroute_accept(){
        $pid = Request::getVar('pid','post');

        $model = $this->createModel("list",dirname( __FILE__ ));
        $empname=$model->getEmpName($_SESSION['a_uid']);
        $a=$b=0;
        $re=true;
        //改变租金
        $arr_charge=Request::getVar('charge_id','post');//收费项目
        $arr_oldmoney=Request::getVar('old_conv_money','post');
        $arr_money=Request::getVar('conv_money','post');        
        if ($arr_charge){
            for($i=0;$i<count($arr_charge);$i++){
                $a=$arr_oldmoney[$i];
                $b=$arr_money[$i];
                if ($arr_oldmoney[$i] != $arr_money[$i]){//有变化
                    $object2 = new Object();
                    $object2->id = $arr_charge[$i];
                    $object2->conv_money = $arr_money[$i];
                    if ($model->update($object2,"id","paiche_charges")){
                    }else{
                        $re=false;
                    }
                }
            }
        }
        if ($re){
            $paiche_limitKm=Request::getVar('paiche_limitKm','post');
            $paiche_overKm=Request::getVar('paiche_overKm','post');
            $paiche_unlimitKm=Request::getVar('paiche_unlimitKm','post');
            $paiche_endDate=Request::getVar('paiche_endDate','post');
            $old_endDate=Request::getVar('old_endDate','post');
        
            $object = new Object();
            $object->paiche_id = $pid;
            $object->paiche_line=Request::getVar('paiche_line','post');
            $object->paiche_limitKm=empty($paiche_limitKm)? 0 : $paiche_limitKm;
            $object->paiche_unlimitKm=empty($paiche_unlimitKm)? "" : $paiche_unlimitKm;
            $object->paiche_overKm=empty($paiche_overKm)? 0 : $paiche_overKm;
            if (!empty($paiche_endDate)){
                $object->paiche_endDate=strtotime($paiche_endDate);
            }
            
            $object4 = new Object();
            $object4->changeroutePaicheId=$pid;
            $object4->changeroute_lineA=Request::getVar('old_paiche_line','post');
            $object4->changeroute_lineB=Request::getVar('paiche_line','post');
            $object4->changeroute_rentA=$a;
            $object4->changeroute_rentB=$b;
            $object4->changeroute_limitKmA=Request::getVar('old_paiche_limitKm','post');
            $object4->changeroute_limitKmB=empty($paiche_limitKm)? 0 : $paiche_limitKm;
            $object4->changeroute_overKmA=Request::getVar('old_paiche_overKm','post');
            $object4->changeroute_overKmB=empty($paiche_overKm)? 0 : $paiche_overKm;
            $old_paiche_unlimitKm=Request::getVar('old_paiche_unlimitKm','post');
            $object4->changeroute_unlimitKmA=empty($old_paiche_unlimitKm)? "" : $old_paiche_unlimitKm;
            $object4->changeroute_unlimitKmB=empty($paiche_unlimitKm)? "" : $paiche_unlimitKm;
            $object4->changeroute_endDateA=$old_endDate;
            $object4->changeroute_endDateB=$paiche_endDate;
            $object4->changerouteMan=$empname;
            $object4->changeroute_times=time();
            $rec_id=$model->store($object4,"changeroute");
            if ($rec_id>0 && $model->update($object,'paiche_id')){
                $re=true;
            }else{
                $re=false;
            }
        }
        $paiche_shunt=Request::getVar('paiche_shunt','post');
        if ($re && $paiche_shunt==1){//如果是调车
            $object3 = new Object();
            $object3->shuntPaicheId = $pid;
            $object3->shunt_rent = Request::getVar('shunt_rent','post');
            $shunt_rented=Request::getVar('shunt_rented','post');
            $object3->shunt_rented = empty($shunt_rented)?0:$shunt_rented;
            if ($model->update($object3,"shuntPaicheId","shunt")){
            }else{
                $re=false;
            }
        }
        $paiche_brother = Request::getVar('paiche_brother','post');
        if ($re && !empty($paiche_brother)){//改变我公司报价
            $new_shunt_rent=Request::getVar('shunt_rent','post');
            
            $object = new Object();
            $object->shuntPaicheId=$pid;
            $object->shunt_rent=empty($new_shunt_rent)?0:-1*$new_shunt_rent;
            if ($model->update($object,"shuntPaicheId","shunt")){
            }else{
                $re=false;
            }
        }
        
        $object = new stdClass();
        $object->result = $re ? "改变行程处理成功！":"改变行程处理失败，返回重试！";
        $view  = $this->createView("operator/business/result.html");
        $view->assign($object);
        $view->display();
    }
    function returncar()
    {
        $pid = Request::getVar('pid','get');
        $step= Request::getVar('step','get');
        if ($step!=2){
            $object = new stdClass();
            $object->pid = $pid;
            $object->url = "returncar.php";
            $view  = $this->createView("operator/business/account3.html");
            $view->assign($object);
            $view->display();
            exit();
        }
        $model = $this->createModel("list",dirname( __FILE__ ));
        $busiInfo = $model->getBusinessInfo($pid);
        if ($busiInfo['paiche_personal']==1){//个人
            $settle_losses=0;
        }else{//公司
            $settle_losses=1;
        }
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
        $object->settle_losses=$settle_losses;
        $object->totalChangeCarKilo = $totalChangeCarKilo;
        $object->changecar_kiloBNow = $changecar_kiloBNow;
        $object->pid = $pid;
        $object->busitype=$busiInfo["paiche_type"];
        $object->op = $this->getTask();
        $object->PAGETITLE=$this->arr_title[$this->getTask()];
        $object->shoplist=$model->getEmpList("`shop_id`,`shop_name`","","shop");
        $object->nowtime = date("Y-m-d H:i:s");
        $object->nowtime2 = time();
        $object->overtime = $this->timediff(time(),$busiInfo['paiche_endDate']);
        
        $view  = $this->createView("operator/business/account.html");
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
        
        $settle_losses=Request::getVar('settle_losses','post');
        $factendtime=Request::getVar('return_endDate','post');//实际还车时间
        
        $object = new Object();
        $object->settlePaicheId = $pid;
        if ($shunt==0){//未调车
        $object->settle_startKm=Request::getVar('settle_startKm','post');
        $object->settle_endKm=Request::getVar('settle_endKm','post');
        $object->settle_totalKm=Request::getVar('settle_totalKm','post');
        $object->settle_totalcalKm=Request::getVar('settle_totalcalKm','post');
        $settle_overTime=Request::getVar('settle_overTime','post');
        $object->settle_overTime=empty($settle_overTime)?0:$settle_overTime;
        $overKmMoney=Request::getVar('overKmMoney','post');
        $object->settle_overKmMoney=empty($overKmMoney)?0:$overKmMoney;
        $overTimeMoney=Request::getVar('overTimeMoney','post');
        $object->settle_overTimeMoney=empty($overTimeMoney)?0:$overTimeMoney;
        $settle_waitTime=Request::getVar('settle_waitTime','post');
        $object->settle_waitTime=empty($settle_waitTime)?0:$settle_waitTime;
        $waitTimeMoney=Request::getVar('waitTimeMoney','post');
        $object->settle_waitTimeMoney=empty($waitTimeMoney)?0:$waitTimeMoney;
        
        }else{//调车
            $object->settle_totalKm=1;
        }
        $favor=Request::getVar('settle_favor','post');
        $object->settle_favor=empty($favor)?0:$favor; //优惠金额
        $object->settle_favorreason=Request::getVar('settle_favorreason','post');//优惠原因
        $object->settle_losses=empty($settle_losses)?0:$settle_losses;
        
        $object->settle_endDate=empty($factendtime)? time():strtotime($factendtime);
        
        if ($model->update($object,'settlePaicheId','settle')){
        }else{
            $re=false;
        }
        if ($re && $busi_id==2 && $shunt==0){//更新超公里单价
            $object = new Object();
            $object->paiche_id = $pid;
            $object->paiche_route=Request::getVar('paiche_route','post');
            $object->paiche_scope=Request::getVar('paiche_scope','post');
            $paiche_overKm=Request::getVar('paiche_overKm','post');
            $paiche_overTime=Request::getVar('paiche_overTime','post');
            $paiche_waitTime=Request::getVar('paiche_waitTime','post');//待时价格
            if (!empty($paiche_overKm)){
                $object->paiche_overKm=$paiche_overKm;
            }
            if (!empty($paiche_overTime)){
                $object->paiche_overTime=$paiche_overTime;
            }
            if (!empty($paiche_waitTime)){
                $object->paiche_waitTime=$paiche_waitTime;
            }
            
            if ($model->update($object,'paiche_id')){
            }else{
                $re=false;
            }
        }
        if ($re && $op=="givecar" && $shunt==0){//更新驾驶员出车记录
            $object = new Object();
            $object->drivePaicheId = $pid;
            $object->drive_startKilo = Request::getVar('settle_startKm','post');
            $object->drive_endKilo = Request::getVar('settle_endKm','post');
            $object->drive_endTime = empty($factendtime)? time():strtotime($factendtime);
            $object->drive_end=1;
            if ($model->update($object,'drivePaicheId','paiche_drive')){
            }else{
                $re=false;
            }
        }
        if ($re && $shunt==0){//更新车辆最新公里数
            $object1 = new stdClass();
            $object1->car_id=Request::getVar('paicheCar','post');
            $object1->car_nowKilo=Request::getVar('settle_endKm','post');
            //$object1->car_nowSite=Request::getVar('parking_shop','post');
            if ($model->update($object1,'car_id','car')){
            }
            else{
                $re=false;
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
            //更新条款约定金额
            $arr_item=Request::getVar('item_id','post');//约定条款
            $arr_result=Request::getVar('item_money','post');
            if ($arr_item){
                for($i=0;$i<count($arr_item);$i++){
                    $rid=$arr_item[$i];             
                    if ($arr_result[$i]!=0){
                        $object = new Object();
                        $object->id = $rid;
                        $object->conv_money = $arr_result[$i];
                        if ($model->update($object,"id","paiche_items")){                           
                        }else{
                            $re=false;
                        }
                    }
                }
            }
        }
        
        
        $object = new stdClass();
        $object->result = $re ? "还车处理成功！":"还车处理失败，返回重试！";
        $view  = $this->createView("operator/business/result.html");
        $view->assign($object);
        $view->display();
        
    }
    //撤销还车
    function returncar_cancel()
    {
        $pid = Request::getVar('pid','post');
        $model = $this->createModel("list",dirname( __FILE__ ));
        $re=true;
        $object = new Object();
        $object->settlePaicheId = $pid;
        $object->settle_startKm=0;
        $object->settle_endKm=0;
        $object->settle_totalKm=0;
        $object->settle_totalcalKm=0;
        $object->settle_overTime=0;
        $object->settle_overKmMoney=0;
        $object->settle_overTimeMoney=0;
        $object->settle_waitTime=0;
        $object->settle_waitTimeMoney=0;
        $object->settle_favor=0;
        $object->settle_favorreason="";
        $object->settle_losses=0;
        $object->settle_endDate=0;
        $sql="Delete From paiche_charges Where paiche_id = {$pid} and return_flag=1 and have_in_money=0"; //add 已收款的不能删除 2018-12-08
        $model->update($object,'settlePaicheId','settle');
        $model->update("","","",$sql);
            
        $object = new Object();
        $object->drivePaicheId = $pid;
        $object->drive_startKilo = 0;
        $object->drive_endKilo = 0;
        $object->drive_endTime = 0;
        $object->drive_end=0;
        $model->update($object,'drivePaicheId','paiche_drive');
                        
        echo json_encode(array('result'=>1));
        
    }
    function backmoney()
    {
        $pid = Request::getVar('pid','get');
        $model = $this->createModel("list",dirname( __FILE__ ));
        $back_list=$model->getChargeList($pid," AND a.`back_money`>0 AND a.`have_in_money`>0 AND a.`have_back_money`<a.`back_money`");
        $fields="`payment_id`,`payment_name`,`payment_fee`";
        $payments_list=$model->getEmpList($fields," AND payment_recycle!=1","payments");
        $fields="`bank_id`,`bank_name`";
        $bank_list=$model->getEmpList($fields," AND bank_recycle!=1 AND bank_id=8","banks");
        $fields="SUM(`breakrules_money`) AS breakrules_money";
        $back= $model->getEmpList($fields," AND breakrulesPaicheId={$pid}","breakrules");
        $break_money= empty($back[0]['breakrules_money'])? 0 : $back[0]['breakrules_money'];

        $object = new stdClass();           
        $object->backlist = $back_list;
        $object->paymentslist = $payments_list;
        $object->banklist = $bank_list;
        $object->pid = $pid;
        $object->op = "backmoney";
        $object->breakmoney = $break_money;
        $object->PAGETITLE=$this->arr_title["backmoney"];
        
        $view  = $this->createView("operator/business/account.html");
        $view->assign($object);
        $view->display();
    }
    function backmoney_accept()
    {
        $pid = Request::getVar('pid','post');
        $model = $this->createModel("list",dirname( __FILE__ ));
        $busiInfo = $model->getBusinessInfo($pid);
        $client_id =$busiInfo['paicheCom'];
        $arr_rec=Request::getVar('back_id','post');//退款记录
        $arr_havemoney=Request::getVar('back_havemoney','post');//已退款金额
        $arr_money=Request::getVar('back_money','post');
        $arr_note=Request::getVar('back_note','post');//是否退清
        $re=true;
        for($i=0;$i<count($arr_rec);$i++){
            $object = new Object();
            $object->id = $arr_rec[$i];
            $object->have_back_money = $arr_havemoney[$i]+$arr_money[$i];
            $object->status = $arr_note;
            if ($model->update($object,"id","paiche_charges")){
            }else{
                $re=false;
            }
        }
        if ($re){
            $money=Request::getVar('infact','post');
            $payments=Request::getVar('payments','post');
            //if ($payments==1){
            //  $bank=1;
            //}else{
                $bank=Request::getVar('bank','post');
            //}
            
            $object = new Object();
            $object->paiche_id = $pid;
            $object->client_id = $client_id;
            $object->payments_id = $payments;
            $object->bank_id = $bank;
            $object->money = $money;
            $object->add_time = time();
            $object->name = "退违章保证金";
            if ($model->store($object,"account_log")){
            }else{
                $re=false;
            }
        }
        $object = new stdClass();
        $object->result = $re ? "退押金处理成功！":"退押金处理失败，返回重试！";
        $view  = $this->createView("operator/business/result.html");
        $view->assign($object);
        $view->display();
        
    }
    function continuecar()
    {
        $pid = Request::getVar('pid','get');
        
        $model = $this->createModel("list",dirname( __FILE__ ));
        $busiInfo = $model->getBusinessInfo($pid);
        $object = new stdClass();
        $object->pid = $pid;
        $object->op = "continue";
        $object->PAGETITLE=$this->arr_title["continue"];
        $object->busitype=$busiInfo["paiche_type"];
        $object->list = $busiInfo;
        $view  = $this->createView("operator/business/account.html");
        $view->assign($object);
        $view->display();
    }
    function continue_accept()
    {
        $pid = Request::getVar('pid','post');
        $model = $this->createModel("list",dirname( __FILE__ ));
        $empname=$model->getEmpName($_SESSION['a_uid']);
        
        $continue_type=Request::getVar('continue_type','post');
        $re=true;
        if ($continue_type==1){
            $busiInfo = $model->getBusinessInfo($pid);
            $old_limitKm=$busiInfo['paiche_limitKm'];
            $endDate=$busiInfo['paiche_endDate'];
            $addday=Request::getVar('addday','post');
            $addoverKm=Request::getVar('addoverKm','post');
            
            $object = new Object();
            $object->paiche_id = $pid;
            $object->paiche_limitKm=$old_limitKm + (empty($addoverKm)? 0 : $addoverKm);
            $object->paiche_endDate=$endDate +24*60*60*$addday;
            if ($model->update($object,'paiche_id')){
            }else{
                $re=false;
            }
    
            if ($re){       //新增收费项目
                $arr_charge=Request::getVar('Cid','post');//收费项目
                $arr_money=Request::getVar('money','post');
                if ($arr_charge){
                    for($i=0;$i<count($arr_charge);$i++){
                        $cid=$arr_charge[$i];
                        if ($cid==5){
                            $object = new Object();
                            $object->paiche_id = $pid;
                            $object->charge_id = $cid;
                            $object->conv_money = $arr_money[$i];
                            $object->continuerent_start=$endDate;
                            $object->continuerent_end=$endDate +24*60*60*$addday;
                            $object->continuerent_flag=1;
                            $object->charge_remarks=Request::getVar('Remarks','post');
                            if ($model->store($object,"paiche_charges")){                           
                            }else{
                                $re=false;
                            }
                        }
                    }
                }
            }
        }
        if ($continue_type==2){
            if ($re){       //新增收费项目
                $arr_charge=Request::getVar('Cid','post');//收费项目
                $arr_del=Request::getVar('Did','post');//删除标记
                $arr_money=Request::getVar('money','post');
                if ($arr_charge){
                    for($i=0;$i<count($arr_charge);$i++){
                        $cid=$arr_charge[$i];
                        if ($arr_del[$i]==0 && $arr_money[$i]!=0 && $cid!=5){
                            $object = new Object();
                            $object->paiche_id = $pid;
                            $object->charge_id = $cid;
                            $object->conv_money = $arr_money[$i];
                            $object->continuerent_flag=1;
                            $object->charge_remarks=Request::getVar('Remarks','post');
                            if ($model->store($object,"paiche_charges")){
                            }else{
                                $re=false;
                            }
                        }
                    }
                }
            }
        }
        if ($re){       //续租记录
            $object4 = new Object();
            $object4->continuerentPaicheId=$pid;
            if ($continue_type==1){
            $object4->continuerent_days=$addday;
            $object4->continuerent_start=$endDate;
            $object4->continuerent_end=$endDate +24*60*60*$addday;
            $object4->continuerent_kilo=empty($addoverKm)? 0 : $addoverKm;
            }
            $object4->continuerent_rentRemarks=Request::getVar('Remarks','post');
            $object4->continuerentDispatchMan=$empname;
            $object4->continuerent_times=time();
            if ($model->store($object4,"continuerent")){
            }else{
                $re=false;
            }
        }
        
        $object = new stdClass();
        $object->result = $re ? "续租处理成功！":"续租处理失败，返回重试！";
        $view  = $this->createView("operator/business/result.html");
        $view->assign($object);
        $view->display();
    }



    //长期大客-出车单
    function outcar()
    {

        $uid = Request::getVar('uid','get');
        
        $model = $this->createModel("list",dirname( __FILE__ ));
        $busiInfo = $model->getBusinessInfo($uid);
        $busi_id =$busiInfo['paiche_type'];
        $BeginDate=$busiInfo['paiche_startDate_format'];  //date('Y-m-01', strtotime(date("Y-m-d")));

        $EndDate=$busiInfo['paiche_endDate_format'];  //date('Y-m-d', strtotime("$BeginDate +1 month -1 day"));
        $fields="*";
        $have_list=$model->getEmpList($fields," AND `drive_account`!=1 AND `drivePaicheId`={$uid}","paiche_drive");
        
        //换车记录
        $fields=" a.*,b.car_num as carA,c.car_num as carB";
        $leftjoin=" `changecar` AS a LEFT JOIN `car` AS b ON a.changecar_carA=b.car_id LEFT JOIN `car` AS c ON a.changecar_carB=c.car_id";
        $change_list=$model->getRow(0,"Select {$fields} From {$leftjoin} Where a.changecarPaicheId='{$uid}'");
        
        $object = new stdClass();
        $object->busi = $busiInfo;
        $object->task = "outcar_accept";
        $object->busitype = $busi_id;
        $object->havelist = $have_list;
        $object->changelist = $change_list;
        $object->PAGETITLE=$model->getPageTitle($busi_id);
        $date_array = array();
        
        //if ($busiInfo["paiche_AccountendDate"]>0){
        //  $temp=$busiInfo["paiche_AccountendDate"]+86400;
        //}else{
        //  $temp=mktime(0,0,0,date('n'),1,date('Y'));
        //}
        $temp=strtotime($BeginDate);
        $temp2=strtotime($EndDate); //strtotime(date("Y-m-d",time()));
        $e=round(($temp2-$temp)/86400)+1;
        if ($have_list){
            $aa=$have_list[count($have_list)-1]['drive_date'];
            $end_date=date('Y-m-d', strtotime("$aa +1 day"));
        }else{
            $end_date=$BeginDate;//date("Y-m-d",$busiInfo["paiche_AccountendDate"]);
        }

        for($m=1;$m<=$e;$m++){
            if (date("Y-m-d",$temp)>=$end_date){
                $date_array[$m]['no']=$m;
                $date_array[$m]['date']=date("Y-m-d",$temp);
                $date_array[$m]['isWeekEnd']=0;
                $date_array[$m]['isWorkDay']=0;
                $date_array[$m]['isHoliDay']=0;
                
                if ($model->checkHoliday()==1){
                    $date_array[$m]['bgcolor']="#fff000";
                    $date_array[$m]['isHoliDay']=1;
                }elseif(date("w",$temp)==0 or date("w",$temp)==6){
                    $date_array[$m]['bgcolor']="#fffeab";
                    $date_array[$m]['isWeekEnd']=1;
                }else{
                    $date_array[$m]['bgcolor']="#ffffff";
                    $date_array[$m]['isWorkDay']=1;
                }
            }
            $temp+=86400;
        }
        $object->datelist = $date_array;
        $date_array = array();
        for($day=0; $day<=23; $day++){
            $date_array[$day]['hour']=$day;
        }
        $object->hourlist = $date_array;
        $date_array = array();
        for($day=0; $day<=11; $day++){
            $date_array[$day]['minute']=$day*5;
        }
        $object->minuelist = $date_array;
        //取租金
        $charge_list=$model->getChargeList($uid);
        if ($charge_list){
        foreach($charge_list as $key=>$val)
        {
            if ($val['charge_name']=="租金"){
                $object->paiche_rent = $val["conv_money"];
            }
        }
        }
        
        
        $view  = $this->createView("operator/business/outcar.html");
        $view->assign($object);
        $view->display();
    }
    function outcar_accept()
    {

        $forward = Request::getVar("forward");
        
        $pid = Request::getVar('pid','post');
        $busi_id=Request::getVar('b_id','post');
        if(empty($forward))
        {
            $forward = "../busilong/list.php?task=detail&b_id={$busi_id}&uid=".Request::getVar('parentid','post');
        }
        $model = $this->createModel("list",dirname( __FILE__ ));
        //取合同约定价格
        $arr_item=$model->getTmpList("SELECT `item_id`,`conv_result` FROM paiche_items WHERE `paiche_id`={$pid}");

        $arr_rec=Request::getVar('id','post');
        $arr_date=Request::getVar('drive_dateX','post');
        $arr_hol=Request::getVar('drive_hol','post');

        if ($busi_id==3){//长期自驾
            $arr_startKilo=Request::getVar('drive_startKilo','post');
            $arr_endKilo=Request::getVar('drive_endKilo','post');
        }
        if ($busi_id==4 || $busi_id==5){//长期代驾 or 长期大客
            $arr_startHour=Request::getVar('drive_startHour','post');
            $arr_startMinute=Request::getVar('drive_startMinute','post');
            $arr_travelRemarks=Request::getVar('drive_travelRemarks','post');
            $arrDriver=Request::getVar('driveDriver','post');
            $arrDriverID=Request::getVar('driveDriver2','post');    
        }
        if ($busi_id==4){//长期代驾
            $arr_startKilo=Request::getVar('drive_startKilo','post');
            $arr_endKilo=Request::getVar('drive_endKilo','post');
            $arr_endHour=Request::getVar('drive_endHour','post');
            $arr_endMinute=Request::getVar('drive_endMinute','post');
            $arr_travel=Request::getVar('drive_travel','post');
            $arr_travelRoom=Request::getVar('drive_travelRoom','post');
            $arr_travelout=Request::getVar('drive_travelout','post');
            $arr_mealsTimes=Request::getVar('drive_mealsTimes','post');
            $arr_roomTimes=Request::getVar('drive_roomTimes','post');
            $arr_ioll=Request::getVar('drive_ioll','post');
            $arrCar=Request::getVar('driveCar','post');
            $arrCarID=Request::getVar('driveCar2','post');
            $arr_deductTime=Request::getVar('drive_deductTime','post');
        }
        if ($busi_id==5){//长期大客
            $arr_startKilo=Request::getVar('drive_startKilo','post');
            $arr_endKilo=Request::getVar('drive_endKilo','post');
            $arr_travelRemarks=Request::getVar('drive_travelRemarks','post');
            $arr_specialRemarks=Request::getVar('drive_specialRemarks','post');
            $arr_trips=Request::getVar('drive_trips','post');
            $arr_money=Request::getVar('drive_money','post');
        }
        
        $arr_remarks=Request::getVar('drive_remarks','post');

        $settle_totalKm=0;//一共行驶的公里数
        $settle_totalKm=0;//一共行驶的公里数
        $settle_dayWork=0;//工作日加班
        $settle_weekWork=0;//周末加班
        $settle_holWork=0;//节假日加班
        $settle_travelTimes=0;//出差次数
        $settle_travelRoomTimes=0;//带宿出差次数
        $settle_travelOutTimes=0;//省外出差次数
        $settle_meals=0;//就餐次数
        $settle_rooms=0;//住宿次数
        $settle_advanceIoll=0;//垫付的过桥过路费
        $settle_trips=0;//行驶的趟数
        $settle_totalMoney=0;//行驶的费用
        $paiche_workTime=Request::getVar('paiche_workTime','post');//司机每天工作时间
        
        $re=true;
        for($i=0;$i<count($arr_date);$i++){
            if ($busi_id==3){//长期自驾
            if ($arr_startKilo[$i]!=""){//有效
                $settle_totalKm+=($arr_endKilo[$i]-$arr_startKilo[$i]);//一共行驶的公里数
                $object = new Object();
                if ($arr_rec[$i]!=""){//修改
                    $object->drive_id = $arr_rec[$i];
                }
                $object->drivePaicheId = $pid;
                $object->drive_date = strtotime($arr_date[$i]);
                $object->drive_startKilo = $arr_startKilo[$i];
                $object->drive_endKilo = $arr_endKilo[$i];
                $object->drive_hol = $arr_hol[$i];
                $object->drive_remarks = $arr_remarks[$i];
                $object->drive_end = 1;
                $object->drive_totalKm = $arr_endKilo[$i]-$arr_startKilo[$i];
                //var_dump($object);
                //exit();
                if ($arr_rec[$i]!=""){//修改
                    if ($model->update($object,"drive_id","paiche_drive")){
                    }else{
                        $re=false;
                    }
                }else{
                    if ($model->store($object,"paiche_drive")){
                    }else{
                        $re=false;
                    }
                }
            }else{//无效
                if ($arr_rec[$i]!=""){//需要删除
                    $model->delete(0,'DELETE FROM `paiche_drive` WHERE `drive_id`='.$arr_rec[$i]);
                }
            }
            }

            if ($busi_id==4){//长期代驾

            //if ($arr_startKilo[$i]!="" && $arr_endKilo[$i] !=""){//有效
                $tmpstarttime=$arr_date[$i]." ".$arr_startHour[$i].":".$arr_startMinute[$i].":00";
                $tmpendtime=$arr_date[$i]." ".$arr_endHour[$i].":".$arr_endMinute[$i].":00";
                $settle_totalKm+=($arr_endKilo[$i]-$arr_startKilo[$i]);//一共行驶的公里数
                if (empty($arr_deductTime[$i])){
                    $deductTime=0;
                }else{
                    $deductTime=$arr_deductTime[$i];
                }
                if($arr_hol[$i]=="工作日"){
                    if ((strtotime($tmpendtime)-strtotime($tmpstarttime))/60 > $paiche_workTime*60){
                        $settle_dayWork+=strtotime($tmpendtime)-strtotime($tmpstarttime)-$paiche_workTime*3600;//工作日加班分钟
                    }
                }
                if($arr_hol[$i]=="周末"){
                    $settle_weekWork+=strtotime($tmpendtime)-strtotime($tmpstarttime)-$deductTime*60;//周末
                }
                if($arr_hol[$i]=="节假日"){
                    $settle_holWork+=strtotime($tmpendtime)-strtotime($tmpstarttime)-$deductTime*60;//节假日
                }
                $settle_travelTimes+=$arr_travel[$i];//出差次数
                $settle_travelRoomTimes+=$arr_travelRoom[$i];//带宿出差次数
                $settle_travelOutTimes+=$arr_travelout[$i];//省外出差次数
                $settle_meals+=$arr_mealsTimes[$i];//就餐次数
                $settle_rooms+=$arr_roomTimes[$i];//住宿次数
                $settle_advanceIoll+=$arr_ioll[$i];//垫付的过桥过路费
                
                $object = new Object();
                if ($arr_rec[$i]!=""){//修改
                    $object->drive_id = $arr_rec[$i];
                }
                $object->drivePaicheId = $pid;
                $object->drive_date = strtotime($arr_date[$i]);
                $object->drive_startKilo = $arr_startKilo[$i];
                $object->drive_endKilo = $arr_endKilo[$i];
                $object->drive_startTime = strtotime($tmpstarttime);
                $object->drive_endTime = strtotime($tmpendtime);
                $object->drive_hol = $arr_hol[$i];
                $object->drive_travel = $arr_travel[$i];
                $object->drive_travelRoom =$arr_travelRoom[$i];
                $object->drive_travelout = $arr_travelout[$i];
                $object->drive_travelRemarks = $arr_travelRemarks[$i];
                $object->drive_mealsTimes = $arr_mealsTimes[$i];
                $object->drive_roomTimes =$arr_roomTimes[$i];
                $object->drive_ioll = empty($arr_ioll[$i])?0:$arr_ioll[$i];
                $object->driveDriver = $arrDriverID[$i];
                $object->driveDriverName=$arrDriver[$i];
                $object->drive_remarks = "";//$arr_remarks[$i];
                $object->drive_end = 1;
                $object->drive_totalKm = $arr_endKilo[$i]-$arr_startKilo[$i];
                $object->drive_totalTime = round((strtotime($tmpendtime)-strtotime($tmpstarttime))/60,2);
                $object->drive_deductTime = $deductTime;
                $object->driveCarNum = $arrCar[$i];
                $object->driveCar = $arrCarID[$i];
                //var_dump($object);
                //exit();
                if ($arr_rec[$i]!=""){//修改
                    if ($model->update($object,"drive_id","paiche_drive")){
                    }else{
                        $re=false;
                    }
                }else{
                    if ($model->store($object,"paiche_drive")){
                    }else{
                        $re=false;
                    }
                }
            //}else{//无效
                //if ($arr_rec[$i]!=""){//需要删除
                    //$model->delete(0,'DELETE FROM `paiche_drive` WHERE `drive_id`='.$arr_rec[$i]);
                //}
            //}
            }

            if ($busi_id==5){//长期大客
            //if ($arr_trips[$i]!=""){//有效
                $tmpstarttime=$arr_date[$i]." ".$arr_startHour[$i].":".$arr_startMinute[$i].":00";
                $settle_trips+=$arr_trips[$i];//一共行驶的趟数
                $settle_totalMoney+=$arr_money[$i];//行驶的费用
                $settle_totalKm+=($arr_endKilo[$i]-$arr_startKilo[$i]);//一共行驶的公里数
                
                $object = new Object();
                if ($arr_rec[$i]!=""){//修改
                    $object->drive_id = $arr_rec[$i];
                }
                $object->drivePaicheId = $pid;
                $object->drive_date = strtotime($arr_date[$i]);
                $object->drive_startTime = strtotime($tmpstarttime);
                $object->drive_hol = $arr_hol[$i];
                $object->drive_trips = $arr_trips[$i];
                $object->drive_money = $arr_money[$i];
                $object->drive_travelRemarks = $arr_travelRemarks[$i];              
                $object->drive_specialRemarks = $arr_specialRemarks[$i];
                $object->driveDriver = $arrDriverID[$i];
                $object->driveDriverName=$arrDriver[$i];
                $object->drive_remarks = $arr_remarks[$i];
                $object->drive_startKilo = empty($arr_startKilo[$i])?0:$arr_startKilo[$i];
                $object->drive_endKilo = empty($arr_endKilo[$i])?0:$arr_endKilo[$i];
                if (empty($arr_startKilo[$i]) ||  empty($arr_endKilo[$i])){
                    $object->drive_totalKm = 0;
                }else{
                    $object->drive_totalKm = $arr_endKilo[$i]-$arr_startKilo[$i];
                }
                
                $object->drive_end = 1;
                //var_dump($object);
                //exit();
                if ($arr_rec[$i]!=""){//修改
                    if ($model->update($object,"drive_id","paiche_drive")){
                    }else{
                        $re=false;
                    }
                }else{
                    if ($model->store($object,"paiche_drive")){
                    }else{
                        $re=false;
                    }
                }
            //}else{//无效
               // if ($arr_rec[$i]!=""){//需要删除
                    //$model->delete(0,'DELETE FROM `paiche_drive` WHERE `drive_id`='.$arr_rec[$i]);
                //}
            //}
            }
        }
        
        $settle_dayWork=round($settle_dayWork/3600,2);
        $settle_weekWork=round($settle_weekWork/3600,2);
        $settle_holWork=round($settle_holWork/3600,2);
        if ($re){
            
            $object2 = new Object();
            $object2->paiche_id = $pid;
            $paiche_limitKm=Request::getVar('paiche_limitKm','post');
            $paiche_overKm=Request::getVar('paiche_overKm','post');
            $object2->paiche_limitKm=empty($paiche_limitKm)? 0 : $paiche_limitKm;
            $paiche_unlimitKm=Request::getVar('paiche_unlimitKm','post');
            $object2->paiche_unlimitKm=empty($paiche_unlimitKm)? "" : $paiche_unlimitKm;
            $object2->paiche_overKm=empty($paiche_overKm)? 0 : $paiche_overKm;
            
            $object = new Object();
            $object->settlePaicheId = $pid;
            $object->settle_totalKm = $settle_totalKm;//本期一共行驶的公里数
            $object->settle_dayWork = $settle_dayWork;//本期工作日加班
            $object->settle_weekWork = $settle_weekWork;//本期周末加班
            $object->settle_holWork = $settle_holWork;//本期节假日加班
            if ($busi_id==4){//长期代驾
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
            }
            if (!empty($arr_item[$this->arr_item["tel"]])){
            $object->settle_telMoney = $arr_item[$this->arr_item["tel"]];   //本期电话费
            }
            $object->settle_travelTimes = $settle_travelTimes;//本期出差次数
            $object->settle_travelRoomTimes = $settle_travelRoomTimes;//本期带宿出差次数
            $object->settle_traveloutTimes = $settle_travelOutTimes;//本期省外出差次数
            $object->settle_meals = $settle_meals;//本期就餐次数
            $object->settle_rooms = $settle_rooms;//本期住宿次数
            $object->settle_advanceIoll = $settle_advanceIoll;//本期垫付的过桥过路费
            $object->settle_trips=$settle_trips;//本期行驶的趟数
            $object->settle_totalMoney=$settle_totalMoney;//本期行驶的费用
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
        if ($re && $busi_id==4){
            $sql1="UPDATE `paiche_items` SET `item_fact`={$settle_dayWork},`conv_money`=(`conv_result`+0)*round({$settle_dayWork},2) WHERE `paiche_id`={$pid} AND `item_id`=".$this->arr_item["dayWork"];
            $sql2="UPDATE `paiche_items` SET `item_fact`={$settle_weekWork},`conv_money`=(`conv_result`+0)*round({$settle_weekWork},2) WHERE `paiche_id`={$pid} AND `item_id`=".$this->arr_item["weekWork"];
            $sql3="UPDATE `paiche_items` SET `item_fact`={$settle_holWork},`conv_money`=(`conv_result`+0)*round({$settle_holWork},2) WHERE `paiche_id`={$pid} AND `item_id`=".$this->arr_item["holWork"];
            $sql4="UPDATE `paiche_items` SET `item_fact`={$settle_travelTimes},`conv_money`=(`conv_result`+0)*round({$settle_travelTimes},2) WHERE `paiche_id`={$pid} AND `item_id`=".$this->arr_item["travelTimes"];
            $sql10="UPDATE `paiche_items` SET `item_fact`={$settle_travelOutTimes},`conv_money`=(`conv_result`+0)*round({$settle_travelOutTimes},2) WHERE `paiche_id`={$pid} AND `item_id`=".$this->arr_item["traveloutTimes"];
            $sql5="UPDATE `paiche_items` SET `item_fact`={$settle_travelRoomTimes},`conv_money`=(`conv_result`+0)*round({$settle_travelRoomTimes},2) WHERE `paiche_id`={$pid} AND `item_id`=".$this->arr_item["travelRoomTimes"];
            $sql6="UPDATE `paiche_items` SET `item_fact`={$settle_meals},`conv_money`=(`conv_result`+0)*round({$settle_meals},2) WHERE `paiche_id`={$pid} AND `item_id`=".$this->arr_item["meals"];
            $sql7="UPDATE `paiche_items` SET `item_fact`={$settle_rooms},`conv_money`=(`conv_result`+0)*round({$settle_rooms},2) WHERE `paiche_id`={$pid} AND `item_id`=".$this->arr_item["rooms"];
            $sql8="UPDATE `paiche_items` SET `conv_result`={$settle_advanceIoll},`conv_money`={$settle_advanceIoll} WHERE `paiche_id`={$pid} AND `item_id`=".$this->arr_item["advanceIoll"];
            $sql9="UPDATE `paiche_items` SET `item_fact`={$settle_totalKm},`conv_money`=(`conv_result`+0)*round({$settle_totalKm},2) WHERE `paiche_id`={$pid} AND (`item_id`=".$this->arr_item["kmsubsidies"]." OR `item_id`=".$this->arr_item["olisubsidies"].")";
            
            if ($model->update('','','',$sql1) && $model->update('','','',$sql2) &&$model->update('','','',$sql3) &&$model->update('','','',$sql4) &&$model->update('','','',$sql5) &&$model->update('','','',$sql6) &&$model->update('','','',$sql7) &&$model->update('','','',$sql8) && $model->update('','','',$sql9) && $model->update('','','',$sql10)){
            }else{
                $re=false;
            }
        }
        
        if ($re){
            $this->redirect($forward,"出车记录保存成功!");
        }else
        {
            $this->redirect($forward,"出车记录保存失败!");
        }
    }


    
    function batchaccount()
    {
        $pids = Request::getVar('pids','get');
        
        $model = $this->createModel("list",dirname( __FILE__ ));
        
        $fields="`payment_id`,`payment_name`,`payment_fee`";
        $payments_list=$model->getEmpList($fields," AND payment_recycle!=1","payments");
        $fields="`bank_id`,`bank_name`";
        $bank_list=$model->getEmpList($fields," AND bank_recycle!=1","banks","","bank_order");
        
        $object = new stdClass();
        $charge_list=$model->getChargeList(""," AND a.`have_in_money`<a.`conv_money`",$pids);
        $object->chargelist = $charge_list;     
        $back_list=$model->getChargeList(""," AND a.`back_money`>0 AND a.`have_in_money`>0 AND a.`have_back_money`<a.`back_money`",$pids);
        $object->backlist = $back_list;
        $item_list=$model->getItemList(""," AND a.`conv_money`>0 AND a.`have_in_money`<a.`conv_money`",$pids);
        $object->itemlist = $item_list;
        
        $busiList = $model->getList(0,1000, " a.`paiche_id` IN ({$pids}) ");
        $object->busiList = $busiList;
        $object->clientid=$busiList[0]['paicheCom'];
        $sql="Select client_name,client_balance,c.client_salesman,aa.emp_name AS yewuyuan,aa.emp_shopid,b.shop_name,c.client_shopid,bb.shop_name as client_shopname 
              From client c Left Join emp aa ON c.client_salesman=aa.emp_id Left Join shop b on aa.emp_shopid=b.shop_id 
              Left Join shop bb ON c.client_shopid=bb.shop_id Where client_id=".$busiList[0]['paicheCom'];
        $object->client=$model->getRow(0,$sql);
        
        $object->paymentslist = $payments_list;
        $object->banklist = $bank_list;
        $object->pids = $pids;
        $object->op = "batchaccount";
        $object->PAGETITLE=$this->arr_title["batchaccount"];
    
        $view  = $this->createView("operator/business/account.html");
        $view->assign($object);
        $view->display();
    }
    function batch_accept()
    {
        $pids = Request::getVar('pids','post');
        $model = $this->createModel("list",dirname( __FILE__ ));
        $code=date('YmdHis',time());//结算单号
        $re=true;
        $arr_rec=Request::getVar('charge_id','post');//收费记录
        $arr_havemoney=Request::getVar('charge_havemoney','post');//已收款金额
        $arr_money=Request::getVar('charge_money','post');
        for($i=0;$i<count($arr_rec);$i++){
            $object = new Object();
            $object->id = $arr_rec[$i];
            $object->have_in_money = $arr_havemoney[$i]+$arr_money[$i];
            $object->status =1;
            if ($model->update($object,"id","paiche_charges")){
            }else{
                $re=false;
            }
        }
        
        if ($re){
            $arr_rec=Request::getVar('back_id','post');//退款记录
            $arr_havemoney=Request::getVar('back_havemoney','post');//已退款金额
            $arr_money=Request::getVar('back_money','post');
            for($i=0;$i<count($arr_rec);$i++){
                $object = new Object();
                $object->id = $arr_rec[$i];
                $object->have_back_money = $arr_havemoney[$i]+$arr_money[$i];
                if ($model->update($object,"id","paiche_charges")){
                }else{
                    $re=false;
                }
            }
        }
        if ($re){
            $arr_rec=Request::getVar('item_id','post');//收费记录
            $arr_money=Request::getVar('item_money','post');//收款金额
            for($i=0;$i<count($arr_rec);$i++){
                $object = new Object();
                $object->id = $arr_rec[$i];
                $object->have_in_money = $arr_money[$i];
                $object->status =1;
                if ($model->update($object,"id","paiche_items")){
                }else{
                    $re=false;
                }
            }
        }
        
        if ($re){//处理超公里费用和超时费用已收部分
            $sql="UPDATE `settle` SET `settle_losses`=2,`settle_lossescode`='{$code}',`settle_overKmMoney_have`=`settle_overKmMoney`,`settle_overTimeMoney_have`=`settle_overTimeMoney`,settle_waitTimeMoney=settle_waitTimeMoney_have WHERE `settlePaicheId` IN ({$pids})";
            if ($model->update('','','',$sql)){
            }else{
                $re=false;
            }
        }
        if ($re){//处理出车记录
            $sql="UPDATE `paiche_drive` SET `drive_account`=1 WHERE `drivePaicheId` IN ({$pids})";
            if ($model->update('','','',$sql)){
            }else{
                $re=false;
            }
        }
        
        if ($re){
            $money=Request::getVar('infact','post');
            $favor=Request::getVar('settle_favor','post');
            $clientid=Request::getVar('clientid','post');
            
            if ($clientid>0){//生成结算记录
                $object = new Object();
                $object->monthPaicheId=0;
                $object->month_code=$code;
                $object->month_clientid = empty($clientid)?0:$clientid;
                $object->settle_total=Request::getVar('total','post');
                $object->settle_favor=empty($favor)?0:$favor; //优惠金额
                $object->settle_favorreason=Request::getVar('settle_favorreason','post');
                $object->settle_infact=$money;
                $settle_billMoney=Request::getVar('settle_billMoney','post');
                $settle_billDate=Request::getVar('settle_billDate','post');
                $settle_startDate=Request::getVar('settle_startDate','post');
                $settle_endDate=Request::getVar('settle_endDate','post');
                $object->settle_billMoney=empty($settle_billMoney)?$money:$settle_billMoney;
                $object->settle_billNum=Request::getVar('settle_billNum','post');
                $object->settle_billDate=empty($settle_billDate)?0:strtotime($settle_billDate);
                $object->settle_startDate=empty($settle_startDate)?0:strtotime($settle_startDate);
                $object->settle_endDate=empty($settle_endDate)?0:strtotime($settle_endDate);
                $object->month_remarks=Request::getVar('remarks','post');//$pids;
                $object->month_time=time();
                $object->month_CounterMan=Request::getVar('month_CounterMan','post');
                $object->month_CounterShop=Request::getVar('month_CounterShop','post');
                $object->month_ShopID=Request::getVar('month_ShopID','post');
                if ($model->store($object,"paiche_month")){
                }else{
                    $re=false;
                }
            }else{
                $payments=Request::getVar('payments','post');
                $bank=Request::getVar('bank','post');
                
                $object = new Object();
                $object->paiche_id = 0;
                $object->client_id = 0;
                $object->name = "个人挂账用车结账";
                $object->bill_type=5;
                $object->bill_code = $code;
                $object->payments_id = $payments;
                $object->bank_id = $bank;
                $object->money = $money;
                $object->add_time = time();
                if ($model->store($object,"account_log")){
                }else{
                    $re=false;
                }
            }
            
        }
        $object = new stdClass();
        $object->result = $re ? "订单批量结账成功！":"订单批量结账失败，返回重试！";
        $view  = $this->createView("operator/business/result.html");
        $view->assign($object);
        $view->display();
    }
    function shuntaccount()
    {
        $pids = Request::getVar('pids','get');
        $model = $this->createModel("list",dirname( __FILE__ ));
        
        $object = new stdClass();
        $busiList = $model->getList(0,1000, " a.`paiche_id` in ({$pids}) "," `paiche_id` DESC");
        $object->busiList = $busiList;
        
        $object->pids = $pids;
        $object->op = "shuntaccount";
        $object->PAGETITLE=$this->arr_title["shuntaccount"];
        $object->yishou = 0;
        $object->brotherid = Request::getVar('brotherid','get');
        $object->ywy_list=$model->getEmpList("emp_id,emp_name"," AND emp_stutas != -1 AND emp_post=4","emp");
    
        $view  = $this->createView("operator/business/account.html");
        $view->assign($object);
        $view->display();
        
    }
    function shunt_accept()
    {
        $pids = Request::getVar('pids','post');
        $model = $this->createModel("list",dirname( __FILE__ ));
        $code=date('YmdHis',time());//结算单号
        $re=true;
        $brotherid = Request::getVar('brotherid','post');
        $arr_rec=Request::getVar('paiche_id','post');//派车记录
        $arr_money=Request::getVar('shuntMoney','post');//结账金额
        for($i=0;$i<count($arr_rec);$i++){
            $object = new Object();
            $object->shuntPaicheId = $arr_rec[$i];
            $object->shunt_money = -1*$arr_money[$i];
            $object->shunt_end =1;
            $object->shunt_endtimes = time();
            $object->shunt_endcode=$code;
            if ($model->update($object,"shuntPaicheId","shunt")){
            }else{
                $re=false;
            }
        }
        $money=Request::getVar('infact','post');
        /*
        if ($re){
                    
            $payments=Request::getVar('payments','post');
            //if ($payments==1){
            //  $bank=1;
            //}else{
                $bank=Request::getVar('bank','post');
            //}
            $fee=Request::getVar('fee','post');
            
            $object = new Object();
            $object->paiche_id = 0;
            $object->payments_id = $payments;
            $object->bank_id = $bank;
            $object->money = $money;
            $object->add_time = time();
            $object->name = "调车结账";
            $object->bill_type=6;
            $object->bill_code = $code;
            $object->brother_id=$brotherid;
            $object->fee = empty($fee)? 0 : $fee;
            if ($model->store($object,"account_log")){
            }else{
                $re=false;
            }
        }
        */
        if ($re){//生成结算记录
            $favor=Request::getVar('settle_favor','post');
                $object = new Object();
                $object->monthPaicheId=0;
                $object->month_code=$code;
                $object->month_brotherid = empty($brotherid)?0:$brotherid;
                $object->settle_total=Request::getVar('total','post');
                $object->settle_favor=empty($favor)?0:$favor; //优惠金额
                $object->settle_favorreason=Request::getVar('settle_favorreason','post');
                $object->settle_infact=$money;
                $settle_billMoney=Request::getVar('settle_billMoney','post');
                $settle_billDate=Request::getVar('settle_billDate','post');
                $settle_startDate=Request::getVar('settle_startDate','post');
                $settle_endDate=Request::getVar('settle_endDate','post');
                $object->settle_billMoney=empty($settle_billMoney)?$money:$settle_billMoney;
                $object->settle_billNum=Request::getVar('settle_billNum','post');
                $object->settle_billDate=empty($settle_billDate)?0:strtotime($settle_billDate);
                $object->settle_startDate=empty($settle_startDate)?0:strtotime($settle_startDate);
                $object->settle_endDate=empty($settle_endDate)?0:strtotime($settle_endDate);
                $object->month_remarks=Request::getVar('remarks','post');//$pids;
                $object->month_time=time();
                $object->month_CounterMan=Request::getVar('ywy','post');
                if ($model->store($object,"paiche_month")){
                }else{
                    $re=false;
                }
        }
        $object = new stdClass();
        $object->result = $re ? "调车结算成功！":"调车结算失败，返回重试！";
        $view  = $this->createView("operator/business/result.html");
        $view->assign($object);
        $view->display();
    }

    //月结
    function outcarlist()
    {

        $pid = Request::getVar('pid','get');
        $model = $this->createModel("list",dirname( __FILE__ ));
        $busiInfo = $model->getBusinessInfo($pid);
        if ($busiInfo['paiche_type']==4444){//长期代驾，计算平时加班 --不需要了2019-01-05
            //取合同约定价格
            $arr_item=$model->getTmpList("SELECT `item_id`,`conv_result` FROM paiche_items WHERE `paiche_id`={$pid}");
            $settle_dayWork=0;//工作日加班
            $paiche_workTime=$busiInfo['paiche_workTime'];//司机每天工作时间
            $out_list=$model->getListBySql("Select drive_date,Sum(drive_totalTime-drive_deductTime) as drive_totalTime From `paiche_drive` Where `drive_account`!=1 AND `drivePaicheId`={$pid} AND `drive_hol`='工作日' Group by `drive_date`");
            if ($out_list){
                foreach($out_list as $key=>$val)
                {
                    if ($val["drive_totalTime"] > $paiche_workTime*60){
                        $settle_dayWork+=$val["drive_totalTime"]-$paiche_workTime*60;//工作日加班分钟
                    }
                }
                //更新settle表
                $settle_dayWork=round($settle_dayWork/60,2); //换算成小时
                $tmpmoney=$settle_dayWork*$arr_item[$this->arr_item["dayWork"]]+
                $busiInfo['settle_weekWork']*$arr_item[$this->arr_item["weekWork"]]+
                $busiInfo['settle_holWork']*$arr_item[$this->arr_item["holWork"]];
                
                $object = new Object();
                $object->settlePaicheId = $pid;
                $object->settle_dayWork = $settle_dayWork;//本期工作日加班
                $object->settle_WorkMoney = $tmpmoney;//本期加班费
                
                $model->update($object,'settlePaicheId','settle');
                
                $sql1="UPDATE `paiche_items` SET `item_fact`={$settle_dayWork},`conv_money`=(`conv_result`+0)*round({$settle_dayWork},2) WHERE `paiche_id`={$pid} AND `item_id`=".$this->arr_item["dayWork"];
                $model->update('','','',$sql1);
            }
        }
        $fields="*";
        $out_list=$model->getEmpList($fields," AND `drive_account`!=1 AND `drivePaicheId`={$pid}","paiche_drive",""," `drive_date`");
        if ($busiInfo['paiche_type']==4){
            $firstdate=$busiInfo['paiche_startDate_format'];
            $lastdate=$busiInfo['paiche_endDate_format'];
        }else{
            $firstdate=$out_list[0]['drive_date'];
            $lastdate=$out_list[count($out_list)-1]['drive_date'];
        }
        $item_list=$model->getItemList($pid,"");
        $charge_list=$model->getChargeList($pid);
        $object = new stdClass();
        $object->busi = $busiInfo;
        $object->outlist = $out_list;
        $object->itemlist = $item_list;
        $object->chargelist = $charge_list;
        $object->firstdate=$firstdate;
        $object->lastdate=$lastdate;
        $object->month = date("Y-m",strtotime($lastdate));
        $object->totalKM=$busiInfo['settle_qianMonth']+$busiInfo['settle_totalKm'];
        
        $object->totalTP = 0;
        $object->total = 0;
        if ($charge_list){
            $paiche_rent1=0;
            foreach($charge_list as $key=>$val)
            {
                if ($val['charge_name']=="租金"){
                    $paiche_rent1+=$val["conv_money"];
                }
            }
            $object->paiche_rent = $paiche_rent1;
        }
        $needcaltotal=0;
        if ($busiInfo['paiche_unlimitKm']=="Y"){
            $object->overKM=0;
            $object->overMoney=0;
        }else{//需要计算超公里
            $needcaltotal=1;//需要计算超公里
            if ($busiInfo['settle_qianMonth']+$busiInfo['settle_totalKm']>$busiInfo['paiche_limitKm']){
                $object->overKM=$busiInfo['settle_qianMonth']+$busiInfo['settle_totalKm']-$busiInfo['paiche_limitKm'];
                $object->overMoney=($busiInfo['settle_qianMonth']+$busiInfo['settle_totalKm']-$busiInfo['paiche_limitKm'])*$busiInfo['paiche_overKm'];
            }else{
                $object->overKM=0;
                $object->overMoney=0;
            }
        }
        $object->needcaltotal=$needcaltotal;
                
        $view  = $this->createView("operator/business/outcarlist.html");
        $view->assign($object);
        $view->display();
    }
    function exportoutcar()
    {
        require_once("Excel/Writer.php");
        $pid = Request::getVar('pid','get');
        $model = $this->createModel("list",dirname( __FILE__ ));
        $busiInfo = $model->getBusinessInfo($pid);
        
        $fields="*";
        $out_list=$model->getEmpList($fields," AND `drive_account`!=1 AND `drivePaicheId`={$pid}","paiche_drive",""," `drive_date`");
        $lastdate=$out_list[count($out_list)-1]['drive_date'];
        $item_list=$model->getItemList($pid,"");
        $charge_list=$model->getChargeList($pid);
        if ($charge_list){
        foreach($charge_list as $key=>$val)
        {
            if ($val['charge_name']=="租金"){
                $paiche_rent = $val["conv_money"];
            }
        }
        }
        $needcaltotal=0;
        if ($busiInfo['paiche_limitKmType']==0){//按月
            $needcaltotal=1;//需要计算超公里
        }else{//非按月累计的情况
            $date1 = explode("-",$lastdate);
            $date2 = explode("-",$busiInfo['paiche_lastTotalDate']);
            if ($busiInfo['paiche_limitKmType']==1){//按季
                if (abs($date1[0] - $date2[0]) * 12 + abs($date1[1] - $date2[1])==3){
                    $needcaltotal=1;//需要计算超公里
                }
            }
            if ($busiInfo['paiche_limitKmType']==2){//按年
                if (abs($date1[0] - $date2[0]) * 12 + abs($date1[1] - $date2[1])==12){
                    $needcaltotal=1;//需要计算超公里
                }
            }
        }
        $totalKM=$busiInfo['settle_qianMonth']+$busiInfo['settle_totalKm'];
        if ($busiInfo['settle_qianMonth']+$busiInfo['settle_totalKm']>$busiInfo['paiche_limitKm']){
            $overKM=$busiInfo['settle_qianMonth']+$busiInfo['settle_totalKm']-$busiInfo['paiche_limitKm'];
            $overMoney=($busiInfo['settle_qianMonth']+$busiInfo['settle_totalKm']-$busiInfo['paiche_limitKm'])*$busiInfo['paiche_overKm'];
        }else{
            $overKM=0;
            $overMoney=0;
        }
        $total = 0;
        $totalTP = 0;
        
        $workbook = new Spreadsheet_Excel_Writer();        
        $workbook->send($busiInfo["client_name"].date("Y-m",strtotime($lastdate))."结算清单.xls");
        $worksheet = $workbook->addWorksheet(date("Y-m",strtotime($lastdate)));
        $worksheet->mergeCells(0,0,0,13);
        $worksheet->write(0, 0, "".iconv("UTF-8","GBK//IGNORE","明细")."");
        
        $worksheet->write(1, 0, "".iconv("UTF-8","GBK//IGNORE","日期")."");
        $worksheet->write(1, 1, "".iconv("UTF-8","GBK//IGNORE","车号")."");
        if ($busiInfo["paiche_type"]==3){
        $worksheet->write(1, 2, "".iconv("UTF-8","GBK//IGNORE","开始公里")."");
        $worksheet->write(1, 3, "".iconv("UTF-8","GBK//IGNORE","结束公里")."");
        $worksheet->write(1, 4, "".iconv("UTF-8","GBK//IGNORE","公里数")."");
        $worksheet->write(1, 5, "".iconv("UTF-8","GBK//IGNORE","周末/节假日")."");
        $worksheet->write(1, 6, "".iconv("UTF-8","GBK//IGNORE","备注")."");
        }
        if ($busiInfo["paiche_type"]==4){
        $worksheet->write(1, 2, "".iconv("UTF-8","GBK//IGNORE","开始公里")."");
        $worksheet->write(1, 3, "".iconv("UTF-8","GBK//IGNORE","开始时间")."");
        $worksheet->write(1, 4, "".iconv("UTF-8","GBK//IGNORE","结束公里")."");
        $worksheet->write(1, 5, "".iconv("UTF-8","GBK//IGNORE","结束时间")."");
        $worksheet->write(1, 6, "".iconv("UTF-8","GBK//IGNORE","公里数")."");
        $worksheet->write(1, 7, "".iconv("UTF-8","GBK//IGNORE","周末/节假日")."");
        $worksheet->write(1, 8, "".iconv("UTF-8","GBK//IGNORE","是否出差")."");
        $worksheet->write(1, 9, "".iconv("UTF-8","GBK//IGNORE","带宿出差")."");
        $worksheet->write(1, 10, "".iconv("UTF-8","GBK//IGNORE","出差备注")."");
        $worksheet->write(1, 11, "".iconv("UTF-8","GBK//IGNORE","食宿费路桥费")."");
        $worksheet->write(1, 12, "".iconv("UTF-8","GBK//IGNORE","司机")."");
        $worksheet->write(1, 13, "".iconv("UTF-8","GBK//IGNORE","备注")."");
        }
        if ($busiInfo["paiche_type"]==5){
        $worksheet->write(1, 2, "".iconv("UTF-8","GBK//IGNORE","时间")."");
        $worksheet->write(1, 3, "".iconv("UTF-8","GBK//IGNORE","周末/节假日")."");
        $worksheet->write(1, 4, "".iconv("UTF-8","GBK//IGNORE","用途")."");
        $worksheet->write(1, 5, "".iconv("UTF-8","GBK//IGNORE","起止地点")."");
        $worksheet->write(1, 6, "".iconv("UTF-8","GBK//IGNORE","趟数")."");
        $worksheet->write(1, 7, "".iconv("UTF-8","GBK//IGNORE","费用")."");
        $worksheet->write(1, 8, "".iconv("UTF-8","GBK//IGNORE","司机")."");
        $worksheet->write(1, 9, "".iconv("UTF-8","GBK//IGNORE","备注")."");
        }
        $r=2;
        if(is_array($out_list)){
            foreach($out_list as $item)
            {
                $worksheet->writeString($r, 0, iconv("UTF-8","GBK//IGNORE",$item["drive_date"]));
                $worksheet->writeString($r, 1, iconv("UTF-8","GBK//IGNORE","苏D".$busiInfo["car_num"]));
                if ($busiInfo["paiche_type"]==3){
                    $worksheet->writeString($r, 2, iconv("UTF-8","GBK//IGNORE",$item["drive_startKilo"]));
                    $worksheet->writeString($r, 3, iconv("UTF-8","GBK//IGNORE",$item["drive_endKilo"]));
                    $worksheet->writeString($r, 4, iconv("UTF-8","GBK//IGNORE",$item["drive_endKilo"]-$item["drive_startKilo"]));
                    $worksheet->writeString($r, 5, iconv("UTF-8","GBK//IGNORE",$item["drive_hol"]));
                    $worksheet->writeString($r, 6, iconv("UTF-8","GBK//IGNORE",$item["drive_remarks"]));
                }
                if ($busiInfo["paiche_type"]==4){
                $worksheet->writeString($r, 2, iconv("UTF-8","GBK//IGNORE",$item["drive_startKilo"]));      
                $worksheet->writeString($r, 3, iconv("UTF-8","GBK//IGNORE",$item["drive_startHour"].":".$item["drive_startMinute"]));
                $worksheet->writeString($r, 4, iconv("UTF-8","GBK//IGNORE",$item["drive_endKilo"]));
                $worksheet->writeString($r, 5, iconv("UTF-8","GBK//IGNORE",$item["drive_endHour"].":".$item["drive_endMinute"]));
                $worksheet->writeString($r, 6, iconv("UTF-8","GBK//IGNORE",$item["drive_endKilo"]-$item["drive_startKilo"]));
                $worksheet->writeString($r, 7, iconv("UTF-8","GBK//IGNORE",$item["drive_hol"]));
                $worksheet->writeString($r, 8, iconv("UTF-8","GBK//IGNORE",$item["drive_travel"]==1?"是":"否"));
                $worksheet->writeString($r, 9, iconv("UTF-8","GBK//IGNORE",$item["drive_travelRoom"]==1?"是":"否"));
                $worksheet->writeString($r, 10, iconv("UTF-8","GBK//IGNORE",$item["drive_travelRemarks"]));
                $worksheet->writeString($r, 11, iconv("UTF-8","GBK//IGNORE","火食:".$item["drive_mealsTimes"]."次 住宿:".($item["drive_roomTimes"]==1?"是":"否")." 路费:".$item["drive_ioll"]."元"));
                $worksheet->writeString($r, 12, iconv("UTF-8","GBK//IGNORE",$item["driveDriverName"]));
                $worksheet->writeString($r, 13, iconv("UTF-8","GBK//IGNORE",$item["drive_remarks"]));
                }
                if ($busiInfo["paiche_type"]==5){
                $worksheet->writeString($r, 2, iconv("UTF-8","GBK//IGNORE",$item["drive_startHour"].":".$item["drive_startMinute"]));
                $worksheet->writeString($r, 3, iconv("UTF-8","GBK//IGNORE",$item["drive_hol"]));
                $worksheet->writeString($r, 4, iconv("UTF-8","GBK//IGNORE",$item["drive_travelRemarks"]));
                $worksheet->writeString($r, 5, iconv("UTF-8","GBK//IGNORE",$item["drive_specialRemarks"]));
                $worksheet->writeString($r, 6, iconv("UTF-8","GBK//IGNORE",$item["drive_trips"]));
                $worksheet->writeString($r, 7, iconv("UTF-8","GBK//IGNORE",$item["drive_money"]));
                $worksheet->writeString($r, 8, iconv("UTF-8","GBK//IGNORE",$item["driveDriverName"]));
                $worksheet->writeString($r, 9, iconv("UTF-8","GBK//IGNORE",$item["drive_remarks"]));
                $totalTP+=$item["drive_trips"];
                $total+=$item["drive_money"];
                }
                $r++;
            }
        }
        $r++;
        $worksheet->mergeCells($r,0,$r,3);
        $worksheet->write($r, 0, "".iconv("UTF-8","GBK//IGNORE","汇总")."");
        $r++;
        if ($busiInfo["paiche_type"]==3 || $busiInfo["paiche_type"]==4){
        $worksheet->write($r, 0, "".iconv("UTF-8","GBK//IGNORE","总公里数")."");
        $worksheet->writeString($r, 1, iconv("UTF-8","GBK//IGNORE",$busiInfo["settle_totalKm"]));
        $r++;
        $worksheet->write($r, 0, "".iconv("UTF-8","GBK//IGNORE","基础公里数")."");
        $worksheet->writeString($r, 1, iconv("UTF-8","GBK//IGNORE",$busiInfo["paiche_limitKm"]));
        $worksheet->write($r, 2, "".iconv("UTF-8","GBK//IGNORE","费用")."");
        $worksheet->writeString($r, 3, iconv("UTF-8","GBK//IGNORE",$paiche_rent));
        $total+=$paiche_rent;
        if ($busiInfo["settle_totalKm"]!="Y" && $needcaltotal==1){
            $r++;
            $worksheet->write($r, 0, "".iconv("UTF-8","GBK//IGNORE","超公里数")."");
            $worksheet->writeString($r, 1, iconv("UTF-8","GBK//IGNORE",$overKM));
            $worksheet->write($r, 2, "".iconv("UTF-8","GBK//IGNORE","费用")."");
            $worksheet->writeString($r, 3, iconv("UTF-8","GBK//IGNORE",$overMoney));
            $total+=$overMoney;
        }
        $r++;
        if ($item_list){
        foreach($item_list as $key=>$val)
        {
            $worksheet->writeString($r, 0, iconv("UTF-8","GBK//IGNORE",$val['item_name']));
            if ($val['item_caltype']==0){
                $worksheet->write($r, 2, "".iconv("UTF-8","GBK//IGNORE","费用")."");
                $worksheet->writeString($r, 3, iconv("UTF-8","GBK//IGNORE",$val['conv_result']));
                $total+=$val['conv_result'];
            }else{
                $worksheet->writeString($r, 1, iconv("UTF-8","GBK//IGNORE",$val['item_fact']));
                $worksheet->write($r, 2, "".iconv("UTF-8","GBK//IGNORE","费用")."");
                $worksheet->writeString($r, 3, iconv("UTF-8","GBK//IGNORE",$val['conv_money']));
                $total+=$val['conv_money'];
            }
            $r++;
        }
        }
        $worksheet->write($r, 0, "".iconv("UTF-8","GBK//IGNORE","合计")."");
        $worksheet->writeString($r, 3, iconv("UTF-8","GBK//IGNORE",$total));
        }
        if ($busiInfo["paiche_type"]==5){
        $worksheet->write($r, 0, "".iconv("UTF-8","GBK//IGNORE","总趟数")."");
        $worksheet->writeString($r, 1, iconv("UTF-8","GBK//IGNORE",$totalTP));
        $worksheet->write($r, 2, "".iconv("UTF-8","GBK//IGNORE","总费用")."");
        $worksheet->writeString($r, 3, iconv("UTF-8","GBK//IGNORE",$total));
        }
        $workbook->close();
        
        
    }
    function month_accept()
    {       
        $pid = Request::getVar('pid','post');
        $dids=null;
        if(Request::getVar('id','post')){
            $dids = implode(",",Request::getVar('id','post'));
        }
        

        $startdate= Request::getVar('startdate','post');
        $enddate= Request::getVar('enddate','post');
        $money=Request::getVar('total','post');
        $settle_favor=Request::getVar('favor','post');;//优惠金额
        $infact=$money-(empty($settle_favor)?0:$settle_favor);
        $overkm=Request::getVar('overkm','post');
        $settle_rent=Request::getVar('paiche_rent','post');
        
        $settle_qianMonth=0;
        $needcaltotal=0;
        $allday=$driverday=0;
        $model = $this->createModel("list",dirname( __FILE__ ));
        $busiInfo = $model->getBusinessInfo($pid);
        
        $forward = "../busilong/list.php?task=detail&uid=".$busiInfo["paiche_parent"]."&b_id=".$busiInfo["paiche_type"];
        
        //取出车总天数和主驾驶员出车总天数     考虑到重复的日期
        if ($busiInfo["paiche_type"]==4){
            $allday = $driverday = 0;
        }else{
        $sql="SELECT COUNT(DISTINCT drive_date) AS total FROM paiche_drive WHERE `drivePaicheId`={$pid} AND `drive_id` IN ({$dids})";
        $allday = $model->getTotal('',$sql);
        $sql="SELECT COUNT(DISTINCT drive_date) AS total FROM paiche_drive WHERE `drivePaicheId`={$pid} AND `drive_id` IN ({$dids}) AND driveDriver=".$busiInfo['paicheDriver'];
        $driverday = $model->getTotal('',$sql);
        }
        
        if ($busiInfo["paiche_type"]==3 || $busiInfo["paiche_type"]==4){
            $iids = implode(",",Request::getVar('Iid','post'));
            //$needcaltotal = Request::getVar('needcaltotal','post');
            //$accountmonth = Request::getVar('accountmonth','post')."-00";
            
        }
        
        $re=true;
        //更新出车记录
        $sql1="UPDATE `paiche_drive` SET `drive_account`=1 WHERE `drivePaicheId`={$pid}".(empty($dids)?"":" AND `drive_id` IN ({$dids})");
        
        //更新上一次月结日期 and 上一次计算累计的日期
        //$sql2="UPDATE `paiche` SET `paiche_AccountendDate`=".strtotime($enddate).($needcaltotal==1?",paiche_lastTotalDate='{$accountmonth}' ":""). " WHERE `paiche_id`={$pid}";
        
        $object3 = new Object();
        $object3->settlePaicheId = $pid;
        $object3->settle_losses=1;//挂账
        /*
        $object3->settle_totalKm = 0;//本期一共行驶的公里数
        $object3->settle_dayWork = 0;//本期工作日加班
        $object3->settle_weekWork = 0;//本期周末加班
        $object3->settle_holWork = 0;//本期节假日加班
        $object3->settle_travelTimes = 0;//本期出差次数
        $object3->settle_travelRoomTimes = 0;//本期带宿出差次数
        $object3->settle_meals = 0;//本期就餐次数
        $object3->settle_rooms = 0;//本期住宿次数
        $object3->settle_advanceIoll = 0;//本期垫付的过桥过路费
        $object3->settle_qianMonth = $settle_qianMonth;//累计公里数
        $object3->settle_trips=0;//本期行驶的趟数
        $object3->settle_WorkMoney = 0;//本期加班费
        $object3->settle_travelMoney = 0;//本期差旅费
        $object3->settle_telMoney = 0;  //本期电话费
        $object3->settle_totalMoney=0;//本期行驶的费用
        */
        
        //插入月结记录
        $object = new Object();
        $object->monthPaicheId= $pid;
        $object->month_driver = $busiInfo['paicheDriver'];//本期主驾驶员
        $object->month_totalday = $allday; //本期总出车天数
        $object->month_driverday = $driverday; //主驾驶员出车天数
        $object->month_year=date("Y",strtotime($enddate));
        $object->month_month=date("m",strtotime($enddate));
        $object->settle_totalKm = $busiInfo['settle_totalKm'];//本期一共行驶的公里数
        $object->settle_overKm =$overkm;  //本期 超公里数
        $object->settle_dayWork = $busiInfo['settle_dayWork'];//本期工作日加班
        $object->settle_weekWork = $busiInfo['settle_weekWork'];//本期周末加班
        $object->settle_holWork = $busiInfo['settle_holWork'];//本期节假日加班
        $object->settle_travelTimes = $busiInfo['settle_travelTimes'];//本期出差次数
        $object->settle_travelRoomTimes = $busiInfo['settle_travelRoomTimes'];//本期带宿出差次数
        $object->settle_meals = $busiInfo['settle_meals'];//本期就餐次数
        $object->settle_rooms = $busiInfo['settle_rooms'];//本期住宿次数
        $object->settle_advanceIoll = $busiInfo['settle_advanceIoll'];//本期垫付的过桥过路费
        $object->settle_WorkMoney = $busiInfo['settle_WorkMoney'];//本期加班费
        $object->settle_travelMoney = $busiInfo['settle_travelMoney'];//本期差旅费
        $object->settle_telMoney = $busiInfo['settle_telMoney'];    //本期电话费
        $object->settle_trips=$busiInfo['settle_trips'];//本期行驶的趟数
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
        $object->month_CounterMan=Request::getVar('month_CounterMan','post');
        $object->month_CounterShop=Request::getVar('month_CounterShop','post');
        if ($model->update('','','',$sql1) && $model->update($object3,'settlePaicheId','settle') && $model->store($object,'paiche_month')){
        }else{
            $re=false;
        }
        /*
        if ($re && ($busiInfo["paiche_type"]==3 || $busiInfo["paiche_type"]==4) && !empty($iids)){//更新收费项
            $sql3="UPDATE `paiche_items` SET `item_fact`=0,`conv_money`=0 WHERE `paiche_id`={$pid} AND `item_id` IN ({$iids})";
            if ($model->update('','','',$sql3)){
            }else{
                $re=false;
            }
        }
        */
        if ($re){
            $this->redirect($forward,"长期用车月结确认成功!");
        }else
        {
            $this->redirect($forward,"长期用车月结确认失败!");
        }
        
    }
    
    function check()
    {

        $pid = Request::getVar('pid','get');
        $model = $this->createModel("list",dirname( __FILE__ ));
        $busiInfo = $model->getBusinessInfo($pid);
        $charge_list=$model->getChargeList($pid,"");
        $item_list=$model->getItemList($pid," AND a.`conv_money`>0 ");
                
        $object = new stdClass();
        $object->list = $busiInfo;
        $object->chargelist = $charge_list;
        $object->itemlist = $item_list;
        $object->pid = $pid;
        $object->op = $this->getTask();
        $object->PAGETITLE=$this->arr_title[$this->getTask()];
        $view  = $this->createView("operator/business/account.html");
        $view->assign($object);
        $view->display();
    }

    
    function check_accept()
    {
        $pid = Request::getVar('pid','post');
        $model = $this->createModel("list",dirname( __FILE__ ));        
        $empname=$model->getEmpName($_SESSION['a_uid']);
        $object = new Object();
        
        $object->paiche_id = $pid;
        $object->paiche_checkNote=Request::getVar('checkNote','post');
        $object->paicheCheckMan=$empname;
        $object->paiche_checkTimes=time();

        $re=true;
        if ($model->update($object,'paiche_id')){
        }else{
            $re=false;
        }
        $object = new stdClass();
        $object->result = $re ? "订单审核成功！":"订单审核失败，返回重试！";
        $view  = $this->createView("operator/business/result.html");
        $view->assign($object);
        $view->display();
    }
    function revisit()
    {
        $pid = Request::getVar('pid','get');
        
        $model = $this->createModel("list",dirname( __FILE__ ));
        $busiInfo = $model->getBusinessInfo($pid);
        $charge_list=$model->getChargeList($pid,"");
        $item_list=$model->getItemList($pid," AND a.`conv_money`>0 ");
                
        $object = new stdClass();
        $object->list = $busiInfo;
        $object->chargelist = $charge_list;
        $object->itemlist = $item_list;
        $object->pid = $pid;
        $object->op = $this->getTask();
        $object->PAGETITLE=$this->arr_title[$this->getTask()];
        $view  = $this->createView("operator/business/account.html");
        $view->assign($object);
        $view->display();
    }
    function revisit_accept()
    {
        $pid = Request::getVar('pid','post');
        $model = $this->createModel("list",dirname( __FILE__ ));        
        $empname=$model->getEmpName($_SESSION['a_uid']);
        
        $object = new Object();
        $object->paiche_id = $pid;
        $object->revisit_Date=strtotime(Request::getVar('revisit_Date','post'));
        $object->revisit_reception=Request::getVar('revisit_reception','post');
        $object->revisit_clean=Request::getVar('revisit_clean','post');
        $object->revisit_ontime=Request::getVar('revisit_ontime','post');
        $object->revisit_civilization=Request::getVar('revisit_civilization','post');
        $object->revisit_charge=Request::getVar('revisit_charge','post');
        $object->revisit_Remarks=Request::getVar('revisit_Remarks','post');
        $object->revisit_adduser=$empname;
        $object->revisit_addtime=time();

        $re=true;
        if ($model->store($object,'paiche_revisit')){
        }else{
            $re=false;
        }
        $object = new stdClass();
        $object->result = $re ? "回访记录保存成功！":"回访记录保存失败，返回重试！";
        $view  = $this->createView("operator/business/result.html");
        $view->assign($object);
        $view->display();
    }
    function selectemp()
    {
        $sel_type=Request::getVar('sel_type','get');
        $key=Request::getVar('key','get');
        $model  = $this->createModel("list",dirname( __FILE__ ));
        $leftjoin="";
        if ($sel_type=="b"){//选调车企业
            $table="brothers";
            $fields="`bro_id`,`bro_name`,`bro_linker`,`bro_phone` ";
            $where="";
            if (!empty($key)){
                $where =" AND `bro_name` like '%{$key}%'";
            }
        }elseif ($sel_type=="e"){//选业务员
            $table="emp";
            $fields="a.emp_id,a.emp_name,b.shop_id";
            $leftjoin="emp as a Left Join admin_users as b ON a.emp_id=b.user_id";
            $where=" AND emp_recycle<>1 AND a.emp_stutas != -1 AND a.emp_post in (4,5)";
            if (!empty($key)){
                $where .=" AND b.shop_id = '{$key}'";
            }
        }elseif ($sel_type=="ee"){//选接待员
            $table="emp";
            $fields="a.emp_id,a.emp_name,b.shop_id";
            $leftjoin="emp as a Left Join admin_users as b ON a.emp_id=b.user_id";
            $where=" AND emp_recycle<>1 AND a.emp_stutas != -1 AND a.emp_post in (4,5)";
            if (!empty($key)){
                $where .=" AND b.shop_id = '{$key}'";
            }
        }elseif($sel_type=="d" || $sel_type=="g"){//选司机
            $table="emp";
            $fields="`emp_id`,`emp_name`";
            if (Request::getVar('item','get')==2){//选择所有员工
                $where=" AND emp_recycle<>1 AND emp_stutas != -1 ";
            }elseif (Request::getVar('item','get')==3){//选择除了驾驶员之外的员工
                $where=" AND emp_recycle<>1 AND emp_stutas != -1 AND emp_post not in (1,2,7)";
            }else{
                $where=" AND emp_recycle<>1 AND emp_stutas != -1 AND (emp_post=1 OR emp_post=2 OR emp_post=6 OR emp_post=7)";
            }
            
            if (!empty($key)){
                $where .=" AND emp_recycle<>1 AND emp_stutas != -1 AND `emp_name` like '%{$key}%'";
            }
        }elseif($sel_type=="f"){//选合同号
            $date=strtotime($key);
            $table="paiche";
            $fields=" a.paiche_id,a.paiche_contractNum,a.paicheCom,a.paiche_linker,a.paiche_startDate,a.paiche_endDate,a.paicheCar,a.paiche_line,b.client_name,c.car_num,a.paicheDriver,d.emp_name AS siji";
            $leftjoin=" `paiche` AS a LEFT JOIN `client` AS b on a.`paicheCom`=b.`client_id` LEFT JOIN `car` AS c ON a.`paicheCar`=c.`car_id` LEFT JOIN emp AS d ON a.paicheDriver=d.emp_id";
            $where=" AND a.paiche_recycle!=1 AND a.paiche_status>=0 AND (a.`paiche_startDate`<={$date} AND a.`paiche_endDate`>={$date})";
            $key1=Request::getVar('key1','get');
            $key2=Request::getVar('key2','get');
            if (!empty($key2)){
                $where.=" AND a.`paicheCar`={$key2}";
            }else{
                $where.=" AND c.`car_num` like '%{$key1}%'";
            }
        }elseif($sel_type=="h"){//选合同号
            $date=Request::getVar('sdate','get');
            $table="paiche";
            $fields=" a.paiche_id,a.paiche_contractNum,a.paicheCom,a.paiche_linker,a.paiche_startDate,a.paiche_endDate,a.paicheCar,a.paiche_line,b.client_name,c.car_num";
            $leftjoin=" `paiche` AS a LEFT JOIN `client` AS b on a.`paicheCom`=b.`client_id` LEFT JOIN `car` AS c ON a.`paicheCar`=c.`car_id`";
            $where=" AND a.paiche_recycle!=1 AND a.paiche_status>-1 AND a.`paicheDriver`={$key}";
            if (!empty($date)){
                $date1=strtotime($date." 0:0:0");
                $date2=strtotime($date." 23:59:59");
                $where.=" AND (a.`paiche_startDate`<={$date2} AND a.`paiche_endDate`>={$date1})";
            }
        }else{//选车辆c j
            $table="car";
            $fields="`car_id`,`car_num`,`car_color`,`car_brand`,`car_type`";
            $where=" AND car_recycle=0 AND car_status!=2 AND car_status!=3";
            if (!empty($key)){
                $where .=" AND (`car_num` like '%{$key}%' OR car_brand like '%{$key}%' OR car_type like '%{$key}%')";
            }
        }
        $object = new stdClass();
        $object->empList = $model->getEmpList($fields,$where,$table,$leftjoin);
        $object->sel_type = $sel_type;
        $object->target_id = Request::getVar('target_id','get');
        $view  = $this->createView("operator/business/selectemp.html");
        $view->assign($object);
        $view->display();
    }
    function selectcharge()
    {
        $busi_id=Request::getVar('busi_type','get');
        $source=Request::getVar('s','get');
        $model  = $this->createModel("list",dirname( __FILE__ ));
        $table="charges";
        $fields="`charge_id`,`charge_name`,`charge_provision`,`charge_provision_fee`,`charge_default`,`charge_isback`";
        $where=" AND `charge_recycle`=0 AND `charge_business` like '%{$busi_id}%'";
        if ($source=='continue'){
            $where.=" AND charge_id not in (1,2)";
        }
        $object = new stdClass();
        $object->chargeList = $model->getEmpList($fields,$where,$table);
        $object->sel_type = $table;
        $object->source=$source;
        $view  = $this->createView("operator/business/select.html");
        $view->assign($object);
        $view->display();
    }
    function selectitem()
    {
        $busi_id=Request::getVar('busi_type','get');
        $model  = $this->createModel("list",dirname( __FILE__ ));
        $table="items";
        $fields="`item_id`,`item_name`,`item_type`,`item_options`,`item_calcu`,`item_caltype`,`item_unit`";
        $where=" AND `item_recycle`=0 AND `item_business` like '%{$busi_id}%'";
        $object = new stdClass();
        $object->itemList = $model->getEmpList($fields,$where,$table);
        $object->sel_type = $table;
        $view  = $this->createView("operator/business/select.html");
        $view->assign($object);
        $view->display();
    }
    function checkname()
    {
        $client_name=Request::getVar('paiche_name','post');
        if(empty($client_name)){
            $info=array('status'=>1,'mes'=>'<li class="red">请输入关键字！</li>');
            echo json_encode($info);
            exit();
        }
        $model  = $this->createModel("list",dirname( __FILE__ ));
        $tmplist=$model->getClientList($client_name);
        if ($tmplist){
            $res="";
            foreach($tmplist as $key=>$value){
                $res .= "<li><a href='#' onclick=\"changeNameId('".$tmplist[$key]['client_name']."','".$tmplist[$key]['client_id']."','".$tmplist[$key]['client_Mlinker']."','".$tmplist[$key]['client_Mphone']."','".$tmplist[$key]['client_balance']."')\">".$tmplist[$key]['client_name']."</a></li>";
            }
            $info=array('status'=>1,'mes'=>$res);
            echo json_encode($info);
            exit();
        }
        else{
            $info=array('status'=>1,'mes'=>'<li class="red">亲，没有任何相关记录哦！</li>');
            echo json_encode($info);
            exit();
        }
    }
    function getclientprice()
    {
        $client_id=Request::getVar('client_id','post');
        if(empty($client_id)){
            $info=array('status'=>1,'totalRecords'=>0);
            echo json_encode($info);
            exit();
        }
        $model  = $this->createModel("list",dirname( __FILE__ ));
        $fields="*";
        $tmplist=$model->getEmpList($fields," AND `client_id` like '%{$client_id}%'","client_price");
        $total   = count($tmplist);
        echo json_encode(array('status'=>0,'totalRecords'=>$total, 'data'=>$tmplist));
        
    }
    function getclientprice2()
    {
        $client_id=Request::getVar('client_id','post');
        $car=Request::getVar('car','post');
        $route=Request::getVar('route','post');
        $scope=Request::getVar('scope','post');
        if (empty($client_id) || empty($car) || empty($route) || empty($scope)){
            $info=array('price'=>0);
            echo json_encode($info);
            exit();
        }
        $model  = $this->createModel("list",dirname( __FILE__ ));
        $price= $model->getTotal('',"SELECT price as total FROM `client_price` WHERE `client_id` like '%{$client_id}%' AND price_carmodel like'%{$car}%' AND price_line like '%{$route}%' AND price_area like '%{$scope}%'");
        $info=array('price'=>$price);
        echo json_encode($info);
        exit();
    }
    function getclientprice3(){
        $carid=Request::getVar('carid','post');
        $p_startDate=Request::getVar('p_startDate','post');
        $p_endDate=Request::getVar('p_endDate','post');
        $days = (strtotime($p_endDate) - strtotime($p_startDate)) / 86400;

        $model  = $this->createModel("list",dirname( __FILE__ ));
        
        $arrRes=$model->getPriceList($carid,$days);
        $tmplist=$arrRes[0];
        $total   = count($tmplist);
        header("Content-type: application/json");
        echo json_encode(array('status'=>0,'totalRecords'=>$total, 'data'=>$tmplist,'planAmount'=>$arrRes[1]));
    }
    function getclientprice4(){
        $clientid=Request::getVar('clientid','get');
        $pList=array();
        $model = $this->createModel("list",dirname( __FILE__ ));
        $pList=$model->getListBySql("SELECT id,destination,carmodel,scheme_price1,scheme_price2,remarks FROM client_pricescheme WHERE client_id={$clientid}");
        
        $total   = count($pList);
        echo json_encode(array('status'=>0,'totalRecords'=>$total, 'data'=>$pList));
    }
    function getclientprice5(){
        $coefficient=$priceplan1=$priceplan2=$priceplan3=0;
        $carprice=Request::getVar('carprice','get');
        if ($carprice<=30000){
            echo json_encode(array('status'=>1));
            exit();
        }elseif ($carprice<=100000){
            $coefficient=500;
        }elseif($carprice<=200000){
            $coefficient=400;
        }elseif($carprice<=300000){
            $coefficient=300;
        }elseif($carprice<=400000){
            $coefficient=200;
        }elseif($carprice<=500000){
            $coefficient=100;
        }else{
            $coefficient=0;
        }
        $priceplan1=$carprice*0.03+$coefficient;
        $priceplan2=$carprice*0.035+$coefficient;
        $priceplan3=$carprice*0.038+$coefficient;
        
        echo json_encode(array('status'=>0,'priceplan1'=>$priceplan1,'priceplan2'=>$priceplan2,'priceplan3'=>$priceplan3));
    }
    
    function busiprint()
    {
        //print_r("eee");exit;
        $uid = Request::getVar('uid','get');
        $bid = Request::getVar('bid','get');
        $cid = Request::getVar('cid','get');//换车ID
        if(empty($uid))
        {
            echo "参数错误！";
            exit();
        }
        $className=Request::getVar('className','get');
        $object = new stdClass();
        
        switch ($className){
            case "pact":
                if ($bid==1){//自驾
                    $templatename="operator/business/printpact_a.html";
                }elseif ($bid==2){//代驾
                    $templatename="operator/business/printpact2.html";
                }
                $object->paiche_id = $uid;
                $object->paiche_pact = 1;
                break;
            case "outCar":
                $templatename="operator/business/printoutcar.html";
                $object->paiche_id = $uid;
                $object->paiche_outCar = 1;
                break;
            case "changecar":
                $templatename="operator/business/printchangecar_a.html";
                $object->changecar_id = $cid;
                $object->changecar_print = 1;
                break;
        }
        $model = $this->createModel("list",dirname( __FILE__ ));
        if (($className=='changecar' && $model->update($object,'changecar_id','changecar')) || ($className!='changecar' && $model->update($object,'paiche_id'))){
            
        }
        else
        {
            echo "打印处理出错！";
            exit();
        }
        $busiInfo = $model->getBusinessInfo($uid);
        $changeinfo=$charge_list=$item_list=null;
        if ($className=='changecar'){
            $sql="select a.*,b.client_name 
            from (
             select a.*,b.paiche_type,b.paiche_contractNum,b.paiche_startDate,b.paiche_endDate,b.paicheCom,b.paiche_linker 
             from (
             select a.*,b.car_num as carB,b.car_brand,b.car_motor,b.car_frame from (
             select a.*,b.car_num as carA,b.car_brand as car_brandA,b.car_motor AS car_motorB from (
             select * from changecar where changecar_id=$cid ) a left join car b on a.changecar_carA=b.car_id
             ) a left join car b on a.changecar_carB=b.car_id
             ) a left join paiche b on a.changecarPaicheId=b.paiche_id
             ) a left join client b on a.paicheCom=b.client_id";
            $changeinfo=$model->getRow($uid,$sql);
           
            
       
            $sql_a="select emp_shopid from emp where emp_name='".$changeinfo['changecarMan']."'";
            $shopid=$model->getListBySql_a($sql_a);
           
            $shopid=$shopid[0]['emp_shopid'];
            $sql_b="select * from shop where shop_id=".$shopid;
            $shop=$model->getListBySql_a($sql_b);
            //print_r($shop);exit;
            $changeinfo['shop_name']=$shop[0]["shop_name"];
            $changeinfo['shop_phone']=$shop[0]["shop_phone"];

        }else{
            $charge_list=$model->getChargeList($uid);
            $item_list=$model->getItemList($uid);
        }
        $object = new stdClass();
        $object->list = $busiInfo;
        $object->chargelist = $charge_list;
        $object->itemlist = $item_list;
        $object->paiche_deposit =0;
        $object->paiche_rent =0;
        $object->paiche_rented =0;
        $object->paiche_front =$busiInfo['paiche_front'];
        $object->paiche_front_D = $this->ch_num(round($busiInfo['paiche_front']));
        $object->change = $changeinfo;
        if ($charge_list){
        foreach($charge_list as $key=>$val)
        {
            if ($val['charge_name']=="押金"){
                $object->paiche_deposit = $val["conv_money"];
                $object->paiche_deposit_have = $val["have_in_money"];
            }
            if ($val['charge_name']=="租金"){
                $object->paiche_rent = $val["conv_money"];
                $object->paiche_rent_D = $this->ch_num(round($val["conv_money"]));
                $object->paiche_rented = $val["have_in_money"];
                $object->paiche_rented_D = $this->ch_num(round($val["have_in_money"]));
            }
            //if ($val['charge_name']=="定金"){
            //  $object->paiche_front = $val["conv_money"];
            //  $object->paiche_front_D = $this->ch_num(round($val["conv_money"]));
            //}
        }
        }
        $view  = $this->createView($templatename);
        $view->assign($object);
        $view->display();
    }
    




    function detail()
    {
        //print_r("expression");exit;
        $uid = Request::getVar('uid','get');
        $search_startDate=Request::getVar('search_startDate','get');
        $search_endDate=Request::getVar('search_endDate','get');
        $model = $this->createModel("list",dirname( __FILE__ ));
        $busiInfo = $model->getBusinessInfo($uid,1);
        $busi_id =$busiInfo['paiche_type'];
        $settlement_list=null;
        $charge_list=$model->getChargeList($uid);
        $item_list=$model->getItemList($uid);
        
        //收款记录
        $sql="Select a.*,b.bank_name,c.payment_name From `account_log` as a ".
             "Left Join `banks` as b On a.bank_id=b.bank_id ".
             "Left Join `payments` as c ON a.payments_id=c.payment_id ".
             "Where a.bill_type<>4 and a.bill_type<>1";
        if (!empty($busiInfo['settle_lossescode'])){
            $sql.=" and (a.bill_code='".$busiInfo['settle_lossescode']."' OR a.paiche_id={$uid})";
        }elseif (!empty($busiInfo['shunt_endcode'])){
            $sql.=" and (a.bill_code='".$busiInfo['shunt_endcode']."' OR a.paiche_id={$uid})";
        }else{
            $sql.=" and a.paiche_id={$uid}";
        }
        $sql.=" Order by a.add_time";
        
        $account_list = $model->getListBySql($sql);
        //续租记录
        $fields="*";
        $continue_list=$model->getEmpList($fields," AND `continuerentPaicheId`={$uid}","continuerent");
        //换车记录
        $fields=" a.*,b.car_num as carA,c.car_num as carB";
        $leftjoin=" `changecar` AS a LEFT JOIN `car` AS b ON a.changecar_carA=b.car_id LEFT JOIN `car` AS c ON a.changecar_carB=c.car_id";
        //$change_list=$model->getEmpList($fields," AND a.changecarPaicheId='{$uid}'","",$leftjoin);
        $change_list=$model->getChangList($uid,"");
        //改变行程记录
        $route_list = $model->getListBySql("Select * From `changeroute` Where changeroutePaicheId={$uid}");
        //出车记录
        $fields="a.*, d.emp_name AS siji";
        $leftjoin=" `paiche_drive` AS a LEFT JOIN `emp` AS d ON a.driveDriver=d.emp_id";
        $where = " AND a.`drivePaicheId`={$uid}".(empty($search_startDate)? "" : " AND a.drive_date>='".strtotime($search_startDate)."'").(empty($search_endDate)? "" : " AND a.drive_date<='".strtotime($search_endDate)."'");
        $outcar_list=$model->getEmpList($fields,$where,"paiche_drive",$leftjoin);
        //违章记录
        $break_list=$model->getBreakList($uid);
        //结账记录 or 结算记录
        if (!empty($busiInfo['shunt_endcode'])){
            $tmpwhere=" AND (monthPaicheId='{$uid}' OR month_code='".$busiInfo['shunt_endcode']."')";
            $settlement_list=$model->getEmpList("*",$tmpwhere,"paiche_month","");
        }else{
            $month_list=$model->getEmpList("*"," AND monthPaicheId='{$uid}'","paiche_month","");
        }
        
        //回访记录
        $revisit_list=$model->getEmpList("*"," AND paiche_id='{$uid}'","paiche_revisit","");
        //报销记录
        $fields="a.*, c.emp_name";
        $leftjoin=" `baoxiao` AS a LEFT JOIN `emp` AS c ON a.baoxiao_emp=c.emp_id";
        $baoxiao_list=$model->getEmpList($fields," AND baoxiao_recycle!=1 AND baoxiao_item=1 AND baoxiaoPaicheId='{$uid}'","",$leftjoin);
        
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
        $object->revisit_list = $revisit_list;
        $object->baoxiao_list = $baoxiao_list;
        $object->PAGETITLE=$model->getPageTitle($busi_id);
        $object->search_startDate=$search_startDate;
        $object->search_endDate=$search_endDate;
        
        $view  = $this->createView("operator/business/detail.html");
        $view->assign($object);
        $view->display();
    }
    
    function getNearList(){
        $pList=array();
        $subwhere=$this->getBusiTypePrivilege();
        
        $model = $this->createModel("list",dirname( __FILE__ ));
        $fields=" a.paiche_id,a.paiche_contractNum,a.paiche_startDate,a.paiche_endDate,a.paiche_linker,a.paiche_personal,ee.car_num,f.client_name,g.item_name,m.shop_name ";
        $where =" AND b.settle_totalKm<=0 AND (a.paiche_type=1 or a.paiche_type=2) AND (a.paiche_status=1 OR a.paiche_status=0) AND a.paiche_startDate>=".time()." AND a.paiche_startDate<=".strtotime(date("Y-m-d",strtotime("+4 day")))." AND a.paiche_type in ({$subwhere})";
        $leftjoin=" `paiche` AS a LEFT JOIN `settle` AS b ON a.paiche_id=b.settlePaicheId 
                    LEFT JOIN car AS ee ON a.paicheCar2=ee.car_id
                    LEFT JOIN `client` AS f ON a.paicheCom=f.client_id 
                    LEFT JOIN item AS g ON a.paiche_type=g.item_paicheType 
                    LEFT JOIN shop AS m ON a.paiche_shopid=m.shop_id";
        $order=" a.paiche_startDate";
        $pList=$model->getEmpList($fields,$where,"",$leftjoin,$order);
        
        $total   = count($pList);
        echo json_encode(array('status'=>0,'totalRecords'=>$total, 'data'=>$pList));
    }
    function getClientList(){
        $pList=array();
        $model = $this->createModel("list",dirname( __FILE__ ));
        if($this->checkPrivilege("product_effect")){
            $pList=$model->getListBySql("SELECT `client_id`,`client_name` FROM `client` WHERE client_recycle!=1");
        }
        $total   = count($pList);

        $nowday=date("d");
        //if ($nowday<2){
        //  $startdate=date("Y-m-01",strtotime("-1 month "));
        //  $enddate= strtotime(date('Y-m-d',strtotime("$startdate +1 month -1 day")));
        //  $startdate=strtotime($startdate);
        //}else{
            $startdate=strtotime(date('Y-m-01'));
            $enddate= time();
        //}
        $nowmonth=date("m",$startdate);
        $nowyear=date("Y",$startdate);
        $sql_01="SELECT a.paiche_id,SUM(a.money) AS total_money FROM `account_log` AS a 
                 WHERE a.`bill_type`=0 AND a.paiche_id>0 AND a.name in ('收租金','租车结账收款','收续租金','租车违约收违约金','租车违约退租金') 
                 AND a.add_time>={$startdate} AND a.add_time<={$enddate} GROUP BY a.paiche_id";
        
        //临时自驾
        $sql_1="Select c.paicheCounterShop,SUM(d.total_money) AS total_money1,0 as total_money11,0 AS total_money2,0 AS total_money21,0 AS total_money22 ".
             "FROM `paiche` AS c INNER JOIN ({$sql_01}) d ON c.paiche_id=d.paiche_id ".
             "Where c.paiche_type=1 AND (c.paiche_status>=0 OR c.paiche_status=-1) GROUP BY paicheCounterShop";
        //自驾优惠金额
        $sql_11="Select shop_id as paicheCounterShop,0 AS total_money1,Sum(baoxiao_money) as total_money11,0 AS total_money2,0 AS total_money21,0 AS total_money22 ".
             "From baoxiao Where baoxiao_item=2 AND baoxiao_type='微信活动返现' AND baoxiao_isOver=1 AND baoxiao_isOverTime>={$startdate} AND baoxiao_isOverTime<={$enddate} GROUP BY shop_id";
        //临时代驾--现结
        $sql_2="Select c.paicheCounterShop,0 AS total_money1,0 as total_money11,SUM(d.total_money) AS total_money2,0 AS total_money21,0 AS total_money22 ".
             "FROM `paiche` AS c INNER JOIN settle AS e ON c.paiche_id=e.settlePaicheId INNER JOIN ({$sql_01}) d ON c.paiche_id=d.paiche_id ".
             "Where c.paiche_type=2 AND (c.paiche_status>=0 OR c.paiche_status=-1) GROUP BY paicheCounterShop";
        
        //调车结账
        $sql_21="Select 9 as paicheCounterShop,0 AS total_money1,0 as total_money11,0 AS total_money2,SUM(a.money) AS total_money21,0 AS total_money22 
                From account_log a LEFT JOIN paiche_month b ON a.bill_code = b.month_code 
                Left Join emp cc ON cc.emp_id=b.month_CounterMan Left Join admin_users aa ON cc.emp_id=aa.user_id 
                Where a.bill_type=6 AND a.name='调车结账' AND b.month_brotherid>0 AND a.add_time>={$startdate} AND a.add_time<={$enddate} GROUP BY IFNULL(aa.shop_id,cc.emp_shopid)";

        //临时带驾--批量结账 按服务门店
        $sql_22="Select b.month_ShopID as paicheCounterShop,0 AS total_money1,0 as total_money11,0 AS total_money2,0 AS total_money21,SUM(a.money) AS total_money22 
                From account_log a LEFT JOIN paiche_month b ON a.bill_code = b.month_code 
                Where a.bill_type=5 AND a.name='临时用车批量结账' AND b.month_clientid>0 AND a.add_time>={$startdate} AND a.add_time<={$enddate} GROUP BY b.month_ShopID";
        
        $sql_3="Select kk.paicheCounterShop,Sum(total_money1) as total_money1,Sum(total_money11) as total_money11,Sum(total_money2) as total_money2,Sum(total_money21) as total_money21,Sum(total_money22) as total_money22 
                From ({$sql_1} Union All {$sql_11} Union All {$sql_2} Union All {$sql_21} Union All {$sql_22}) kk Group by kk.paicheCounterShop";
        
        $sql="SELECT a.shop_name,IFNULL(b.total_money1,0) as total_money1,IFNULL(b.total_money11,0) as total_money11,IFNULL(b.total_money1,0)-IFNULL(b.total_money11,0) as total_money12,IFNULL(b.total_money2,0) as total_money2,IFNULL(b.total_money21,0) as total_money21,IFNULL(b.total_money22,0) as total_money22 FROM shop as a Left Join ({$sql_3}) AS b ON a.shop_id=b.paicheCounterShop where a.shop_id<>5 Order by total_money1-total_money11 Desc,a.shop_order";
        $pList_1=$model->getListBySql($sql);
        
        $startdate=strtotime(date('Y-01-01', strtotime(date("Y-m-d"))));
        $enddate= time();
        $sql_01="SELECT a.paiche_id,SUM(a.money) AS total_money FROM `account_log` AS a 
                 WHERE a.`bill_type`=0 AND a.paiche_id>0 AND a.name in ('收租金','租车结账收款','收续租金','租车违约收违约金','租车违约退租金') 
                 AND a.add_time>={$startdate} AND a.add_time<={$enddate} GROUP BY a.paiche_id";
        //临时自驾
        $sql_1="Select c.paicheCounterShop,SUM(d.total_money) AS total_money1,0 as total_money11,0 AS total_money2,0 AS total_money21,0 AS total_money22 ".
             "FROM `paiche` AS c INNER JOIN ({$sql_01}) d ON c.paiche_id=d.paiche_id ".
             "Where c.paiche_type=1 AND (c.paiche_status>=0 OR c.paiche_status=-1) GROUP BY paicheCounterShop";
        //自驾优惠金额
        $sql_11="Select shop_id as paicheCounterShop,0 AS total_money1,Sum(baoxiao_money) as total_money11,0 AS total_money2,0 AS total_money21,0 AS total_money22 ".
             "From baoxiao Where baoxiao_item=2 AND baoxiao_type='微信活动返现' AND baoxiao_isOver=1 AND baoxiao_isOverTime>={$startdate} AND baoxiao_isOverTime<={$enddate} GROUP BY shop_id";
        //临时代驾--现结
        $sql_2="Select c.paicheCounterShop,0 AS total_money1,0 as total_money11,SUM(d.total_money) AS total_money2,0 AS total_money21,0 AS total_money22 ".
             "FROM `paiche` AS c INNER JOIN settle AS e ON c.paiche_id=e.settlePaicheId INNER JOIN ({$sql_01}) d ON c.paiche_id=d.paiche_id ".
             "Where c.paiche_type=2 AND (c.paiche_status>=0 OR c.paiche_status=-1) GROUP BY paicheCounterShop";
        
        //调车结账
        $sql_21="Select 9 as paicheCounterShop,0 AS total_money1,0 as total_money11,0 AS total_money2,SUM(a.money) AS total_money21,0 AS total_money22 
                From account_log a LEFT JOIN paiche_month b ON a.bill_code = b.month_code 
                Left Join emp cc ON cc.emp_id=b.month_CounterMan Left Join admin_users aa ON cc.emp_id=aa.user_id 
                Where a.bill_type=6 AND a.name='调车结账' AND b.month_brotherid>0 AND a.add_time>={$startdate} AND a.add_time<={$enddate} GROUP BY IFNULL(aa.shop_id,cc.emp_shopid)";

        //临时带驾--批量结账 按服务门店
        $sql_22="Select b.month_ShopID as paicheCounterShop,0 AS total_money1,0 as total_money11,0 AS total_money2,0 AS total_money21,SUM(a.money) AS total_money22 
                From account_log a LEFT JOIN paiche_month b ON a.bill_code = b.month_code 
                Where a.bill_type=5 AND a.name='临时用车批量结账' AND b.month_clientid>0 AND a.add_time>={$startdate} AND a.add_time<={$enddate} GROUP BY b.month_ShopID";
        
        $sql_3="Select kk.paicheCounterShop,Sum(total_money1) as total_money1,Sum(total_money11) as total_money11,Sum(total_money2) as total_money2,Sum(total_money21) as total_money21,Sum(total_money22) as total_money22 
                From ({$sql_1} Union All {$sql_11} Union All {$sql_2} Union All {$sql_21} Union All {$sql_22}) kk Group by kk.paicheCounterShop";
        
        $sql="SELECT a.shop_name,IFNULL(b.total_money1,0) as total_money1,IFNULL(b.total_money11,0) as total_money11,IFNULL(b.total_money1,0)-IFNULL(b.total_money11,0) as total_money12,IFNULL(b.total_money2,0) as total_money2,IFNULL(b.total_money21,0) as total_money21,IFNULL(b.total_money22,0) as total_money22 FROM shop as a Left Join ({$sql_3}) AS b ON a.shop_id=b.paicheCounterShop where a.shop_id<>5 Order by total_money1-total_money11 Desc,a.shop_order";
        $pList_2=$model->getListBySql($sql);
        
        echo json_encode(array('status'=>0,'totalRecords'=>$total, 'data'=>$pList, 'totalRecords1'=>count($pList_1), 'data1'=>$pList_1, 'totalRecords2'=>count($pList_2), 'data2'=>$pList_2, 'syear'=>$nowyear, 'smonth'=>$nowmonth));
    }

    function ch_num($num,$mode=true){
        $char = array("零","壹","贰","叁","肆","伍","陆","柒","捌","玖");
        $dw = array("","拾","佰","仟","","万","亿","兆");
        $dec = "点";
        $retval = "";
        
        if($mode)
            preg_match_all("/^0*(\d*)\.?(\d*)/",$num, $ar);
        else
            preg_match_all("/(\d*)\.?(\d*)/",$num, $ar);
        
        if($ar[2][0] != "")
            $retval = $dec . $this->ch_num($ar[2][0],false); //如果有小数，先递归处理小数
        if($ar[1][0] != "") {
            $str = strrev($ar[1][0]);
            for($i=0;$i<strlen($str);$i++) {
                $out[$i] = $char[$str[$i]];
                if($mode) {
                    $out[$i] .= $str[$i] != "0"? $dw[$i%4] : "";
                    if(($i==0 && $str[$i]==0) || ($i>0 && $str[$i]+$str[$i-1] == 0))
                        $out[$i] = "";
                    if($i%4 == 0)
                        $out[$i] .= $dw[4+floor($i/4)];
                }
            }
            $retval = join("",array_reverse($out)) . $retval;
        }
        return $retval;
    }
    
    
    function getpaicheid(){
        $paiche_code=Request::getVar('contractNum','post');
        $model = $this->createModel("list",dirname( __FILE__ ));
        $info=$model->getRow(0,"Select a.paiche_id,b.settle_totalKm,a.paiche_status From paiche AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId Where a.paiche_contractNum='{$paiche_code}'");
        if (empty($info)){
            $info=array('result'=>2);
        }else{
            if ($info['settle_totalKm']>0){//已还车
                $info=array('result'=>1);
            }elseif($info['paiche_status']!=1){//未调度
                $info=array('result'=>3);
            }else{
                $paiche_id=$info['paiche_id'];
                $info=array('result'=>0,'pid'=>$paiche_id);
            }
        }
        echo json_encode($info);
        exit();
    }
    function uppaicheremark(){
        $paiche_id=Request::getVar('paiche_id','get');
        $model = $this->createModel("list",dirname( __FILE__ ));
        $object = new stdClass();
        $object->paiche_id = $paiche_id;
        $object->paiche_specialRemarks=Request::getVar('paiche_remarks','get');
        if ($model->update($object,'paiche_id')){
            $info=array('result'=>0);
        }else{
            $info=array('result'=>1);
        }
        echo json_encode($info);
        exit();
    }

    function timediff($begin_time,$end_time)
    {
      //if($begin_time < $end_time){
      //   $starttime = $begin_time;
      //   $endtime = $end_time;
      //}else{
         $starttime = $end_time;
         $endtime = $begin_time;
      //}

      //计算天数
      $timediff = $endtime-$starttime;
      $days = intval($timediff/86400);
      //计算小时数
      $remain = $timediff%86400;
      $hours = intval($remain/3600);
      //计算分钟数
      $remain = $remain%3600;
      $mins = intval($remain/60);
      //计算秒数
      $secs = $remain%60;
      $res = array("day" => $days,"hour" => $hours,"min" => $mins,"sec" => $secs);
      return $res;
}
    function gettimediff(){
        $begin_time=Request::getVar('begin_time','get');
        $end_time=Request::getVar('end_time','get');
        $Daydiff = round((strtotime(date("Y-m-d",strtotime($begin_time)))-strtotime(date("Y-m-d",strtotime($end_time))))/86400);
        $res=$this->timediff(strtotime($begin_time),strtotime($end_time));
        $res["datediff"]=$Daydiff;
        echo json_encode($res);
    }
    function getovertime_unreturn(){
        $busi_id = Request::getVar('b_id','get');
        $clientid = Request::getVar('clientid','get');
        
        $model = $this->createModel("list",dirname( __FILE__ ));
        $subwhere=$this->getBusiTypePrivilege();
        
        $where = " a.paiche_recycle!=1".($busi_id>0? " AND a.paiche_type = {$busi_id} ": "")." AND a.paiche_type in ({$subwhere}) AND b.settle_losses<2 AND (a.paiche_shunt=0 OR (a.paiche_shunt=1 AND h.shunt_end=0))";
        $where .=" AND (a.paiche_endDate<".time()." AND b.settle_totalKm=0 AND a.paiche_status=1) ";
        if ($busi_id==2){
            $where .= $clientid>0 ? " AND a.paicheCom={$clientid}" : " AND a.paicheCom<>12";
        }
        $sql="Select Count(*) AS nCount From paiche AS a 
              LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId 
              LEFT JOIN shunt AS h ON a.paiche_id=h.shuntPaicheId WHERE {$where}";
        
        $info=$model->getRow(0,$sql);
        echo json_encode(array('result'=>1,'count'=>$info['nCount']));
    }
    function generatepicutre(){
        $IDcard=Request::getVar('IDcard','post');
        $base64=Request::getVar('Base64Code','post');
        $model = $this->createModel("list",dirname( __FILE__ ));
        $sql="Select count(*) as total From paiche Where paiche_recycle!=1 and paiche_linkerNum='{$IDcard}'";
        $count=$model->getTotal(0,$sql);
        
        $img = base64_decode($base64);
        $a = file_put_contents('../../../thumb/upload/idpicture/'.$IDcard.'.jpg', $img);//返回的是字节数
        if ($a){
            $info=array('status'=>0,'havecount'=>$count);
        }else{
            $info=array('status'=>1,'havecount'=>$count);
        }
        
        header("Content-type: application/json");
        echo json_encode($info);
        exit();
    }
     function getsiji(){
        $list=null;
        $model = $this->createModel("list",dirname( __FILE__ ));
        $name = Request::getVar('name','post');
        $sql_siji="select emp_id,emp_name from emp where emp_recycle<>1 and (emp_post=1 OR emp_post=2 OR emp_post=6 OR emp_post=7) and emp_name like '%".$name."%'";
       $list=$model->getListBySql_a($sql_siji);
       echo json_encode($list);
    }
}
?>
