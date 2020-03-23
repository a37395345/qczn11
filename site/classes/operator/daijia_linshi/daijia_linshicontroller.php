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

class daijia_linshiController extends AdminController
{
	private $package="site/operator/daijia_linshi";
	function __construct($config = array())
	{
		parent::__construct($config);
		$this->registerTask( 'index','index');
		$this->registerTask( 'add','add');
        $this->registerTask( 'update','update_a');
		$this->registerTask( 'get_car','get_car');
		$this->registerTask( 'insert','insert');
		$this->registerTask( 'setBeizhu','setBeizhu');
		$this->registerTask( 'diaoche','diaoche');
		$this->registerTask( 'diaoche_action','diaoche_action');
		$this->registerTask( 'huanche','huanche');
		
		$this->registerTask( 'select_car_a','select_car_a');
		$this->registerTask( 'huanche_action','huanche_action');
		$this->registerTask( 'xuzhu','xuzhu');
		$this->registerTask( 'xuzhu_action','xuzhu_action');
		$this->registerTask( 'qita','qita');
		$this->registerTask( 'qita_action','qita_action');
		$this->registerTask( 'youhui','youhui');
		$this->registerTask( 'youhui_action','youhui_action');
		$this->registerTask( 'print','print_a');
		$this->registerTask( 'shenghe','shenghe');
		$this->registerTask( 'shenghe_action','shenghe_action');
		$this->registerTask( 'huanchea','huanchea');
		$this->registerTask( 'huanchea_action','huanchea_action');
		$this->registerTask( 'kaipiao','kaipiao');
		$this->registerTask( 'kaipiao_action','kaipiao_action');
		$this->registerTask( 'mingxi','mingxi');
		$this->registerTask( 'quxiao','quxiao');
		$this->registerTask( 'quxiao_action','quxiao_action');
        $this->registerTask( 'jiesuan','jiesuan');
        $this->registerTask( 'jiesuan_xiangxi','jiesuan_xiangxi');
        $this->registerTask( 'jiesuan_action','jiesuan_action');
        $this->registerTask( 'diaoche_jiezhang','diaoche_jiezhang');
        $this->registerTask( 'diaoche_jiezhang_xiangxi','diaoche_jiezhang_xiangxi');
        $this->registerTask( 'diaoche_jiezhang_action','diaoche_jiezhang_action');
        $this->registerTask( 'yijie_xiangxi','yijie_xiangxi');
        $this->registerTask( 'yijie_diaoche','yijie_diaoche');
        $this->registerTask( 'huansiji','huansiji');
        $this->registerTask( 'getSiji','getSiji');
        $this->registerTask( 'huansiji_action','huansiji_action');
        $this->registerTask( 'get_cara','get_cara');
        $this->registerTask( 'update_action','update_action');
        
	}
    function update_a(){
        $CommonFunction=new CommonFunction();
        $CommonFunction->getQuanxian($this->package."/update");
        $pid = Request::getVar('pid','get');
        $sql="select * from paiche where paiche_id={$pid}";
        $paiche=$CommonFunction->getData($sql);
        $timediff = $paiche['paiche_endDate']-$paiche['paiche_startDate'];
        $paiche['tian_a'] = intval($timediff/86400);
            //小时
        $shi = $timediff%86400;

        $paiche['shi'] = intval($shi/3600);
         $paiche['paiche_startDate'] = $paiche['paiche_startDate']>0 ? date("Y-m-d H:i:s",$paiche['paiche_startDate']) :"-";
            $paiche['paiche_endDate'] = $paiche['paiche_endDate']>0 ? date("Y-m-d H:i:s",$paiche['paiche_endDate']) : "—";

        $sql="select * from paiche_charges where paiche_id={$pid} and charge_id=2";
        $zujin=$CommonFunction->getData($sql);
        $sql="select * from paiche_charges where paiche_id={$pid} and charge_id=19";
        $suijin=$CommonFunction->getData($sql);
        $sql="select * from car where car_id={$paiche['paicheCar']}";
        $car=$CommonFunction->getData($sql);
        $sql="select * from client_price";
        $client_price=$CommonFunction->getList($sql);
        $object = new stdClass();
        $object->paiche = $paiche;
        $object->client_price = $client_price;
        $object->zujin = $zujin;
        $object->suijin = $suijin;
        $object->pid = $pid;
        $object->car = $car;
        $object->time = date('Y-m-d H:i:s',time());
        $view  = $this->createView("operator/daijia_linshi/update.html");
        $view->assign($object);
        $view->display();  
    }
    function update_action(){
         //print_r("expression");exit;
        $CommonFunction=new CommonFunction();
        $object = new stdClass();
        //车型及行程
        $object->paiche_line=Request::getVar('paiche_line','post');
        //联系人
        $paiche_linker=Request::getVar('paiche_linker','post');
        if($paiche_linker){
            $object->paiche_linker=$paiche_linker;
        }
        //联系电话
        $paiche_linkerPhone=Request::getVar('paiche_linkerPhone','post');
        if($paiche_linkerPhone){
            $object->paiche_linkerPhone=$paiche_linkerPhone;
        }
        //车辆
        $object->paicheCar=Request::getVar('paicheCar','post');
        //开始用车时间
        $object->paiche_startDate=strtotime(Request::getVar('paiche_startDate','post'));
        //用车结束时间
        $object->paiche_endDate=strtotime(Request::getVar('paiche_endDate','post'));
        //是否开票
        
        $object->paiche_needtax=Request::getVar('paiche_needtax','post');
        $guangbao_id=Request::getVar('client_price','post');
        if($guangbao_id){
            $object->guangbao_id=$guangbao_id;
        }
        //$guangbao_id=Request::getVar('client_price','post');
        //是否超时
        $paiche_chaoshi=Request::getVar('paiche_chaoshi','post');
        //print_r($paiche_chaoshi);exit;
        if($paiche_chaoshi>0){
            $object->paiche_unlimitTime="Y";
            $object->paiche_overTime=$paiche_chaoshi;
        }else{
            $object->paiche_unlimitTime="N";
        }
        //是否超公里
        $paiche_chaokms=Request::getVar('paiche_chaokms','post');
        $paiche_chaokmy=Request::getVar('paiche_chaokmy','post');
        if($paiche_chaokmy>0&&$paiche_chaokms>0){
            $object->paiche_unlimitKm="Y";
            $object->paiche_limitKm=$paiche_chaokms;
            $object->paiche_overKm=$paiche_chaokmy;
        }else{
            $object->paiche_unlimitKm="N";
        }
        $object->paiche_specialRemarks=Request::getVar('paiche_specialRemarks','post');
        //门店业务员
        $object->paicheCounterShop=$_SESSION['shopid'];
        $object->paicheCounterMan=$_SESSION['user_id'];
        
        //派车单类型为临时代驾
        $object->paiche_type=2;
        $pid=Request::getVar('pid','post');
        //print_r($pid);exit;
        $object->paiche_id=$pid;
        $CommonFunction->update_a($object,"paiche_id","paiche","");
        
        if($pid){
            //租金
            $paiche_rent=Request::getVar('paiche_rent','post');
            $have_freeze_money=Request::getVar('have_freeze_money','post'); 
            $dioache_money=Request::getVar('dioache_money','post'); 
            if($paiche_rent>0||$have_freeze_money>0){
                $object = new Object();
                $object->paiche_id = $pid;
                $object->charge_id = 2;
                $object->conv_money = $paiche_rent;
                $object->back_money =0;
                $object->addtime =time();
                if($have_freeze_money>0){
                    $object->have_freeze_money =$have_freeze_money;
                }
                if($dioache_money>0){
                    $object->have_in_money =$dioache_money;
                    $object->have_back_money =$dioache_money;
                }
                $object->addemp=$_SESSION['user_id'];
                $object->continuerent_start=strtotime(Request::getVar('paiche_startDate','post'));
                $object->continuerent_end=strtotime(Request::getVar('paiche_endDate','post'));
                $sql="select id from paiche_charges where charge_id=2 and paiche_id={$pid}";
                $cid=$CommonFunction->getDataY($sql,"id");
                if($cid){
                     $object->id=$cid;
                     $CommonFunction->update_a($object,"id","paiche_charges","");
                }else{
                    $CommonFunction->instert($object,"paiche_charges");
                }
                
            }else{
                $CommonFunction->dalete_sql("paiche_charges","charge_id","2");
            }
            

            $suijin=Request::getVar('suijin','post');
            if($suijin>0){
                $object = new Object();
                $object->paiche_id = $pid;
                $object->charge_id = 19;
                $object->conv_money = $suijin;
                $object->back_money =0;
                $object->addtime =time();
                $object->addemp=$_SESSION['user_id'];
                $sql="select id from paiche_charges where charge_id=19 and paiche_id={$pid}";
                $cid=$CommonFunction->getDataY($sql,"id");
                if($cid){
                     $object->id=$cid;
                     $CommonFunction->update_a($object,"id","paiche_charges","");
                }else{
                    $CommonFunction->instert($object,"paiche_charges");
                }
            }else{
                 $CommonFunction->dalete_sql("paiche_charges","charge_id","19");
            }
            $CommonFunction->setAction("添加了临时代驾派车单-".$pid);
            $this->redirect("index.php?search_status=qb&paiche_id=".$pid,"修改成功");
        }else{
            $this->redirect("index.php?search_status=qb","添加失败");
        }   
    }
	function index(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/index");
		$p = Request::getVar('p','get');
        if(empty($p)){
            $p=1;
        }
        $base_url = "index.php?a=1";
		$per_page = 10;
       
        $order="`paiche_dispatchTimes` DESC,`paiche_id` DESC";
		$where=" where a.paiche_type=2";
		 
		//合同号
        $paiche_id= Request::getVar('paiche_id','get');
        if(!empty($paiche_id)){
            $where.=" and a.paiche_id ={$paiche_id}";
            $base_url.="&paiche_id={$paiche_id}";
        }
        //业务门店
        $paicheCounterShop= Request::getVar('paicheCounterShop','get');
        if(!empty($paicheCounterShop)){
            $where.=" and a.paicheCounterShop ={$paicheCounterShop}";
            $base_url.="&paicheCounterShop={$paicheCounterShop}";
        }

		//合同号
        $paiche_contractNum= Request::getVar('paiche_contractNum','get');
        if(!empty($paiche_contractNum)){
            $where.=" and a.paiche_contractNum like '%{$paiche_contractNum}%'";
            $base_url.="&paiche_contractNum={$paiche_contractNum}";
        }
        //客户来源
        $paiche_kehu= Request::getVar('paiche_kehu','get');
        if(!empty($paiche_kehu)){
            $where.=" and a.paiche_kehu={$paiche_kehu}";
            $base_url.="&paiche_kehu={$paiche_kehu}";
        }
        //企业客户id
        $paicheCom= Request::getVar('paicheCom','get');
        if(!empty($paicheCom)){
            $where.=" and a.paicheCom={$paicheCom}";
            $base_url.="&paicheCom={$paicheCom}";
        }
        
        //调车公司类型
        $paiche_pintaiid= Request::getVar('paiche_pintaiid','get');
        if(!empty($paiche_pintaiid)){
        	$where.=" and a.paiche_pintaiid={$paiche_pintaiid}";
            $base_url.="&paiche_pintaiid={$paiche_pintaiid}";
        }
        //调车公司id
        $paiche_brothera= Request::getVar('paiche_brothera','get');
        if(!empty($paiche_brothera)){
            $where.=" and a.paiche_brothera={$paiche_brothera}";
            $base_url.="&paiche_brothera={$paiche_brothera}";
        }
        //调车公司id
        $paiche_brother= Request::getVar('paiche_brother','get');
        if(!empty($paiche_brother)){
            $where.=" and a.paiche_brother={$paiche_brother}";
            $base_url.="&paiche_brother={$paiche_brother}";
        }
        //车辆
        $paiche_car= Request::getVar('paiche_car','get');
        if(!empty($paiche_car)){
            $where.=" and a.paicheCar like '%{$paiche_car}%'";
            $base_url.="&paiche_car={$paiche_car}";
        }
        //联系人/单位
        $paiche_linker=Request::getVar('paiche_linker','get');
        if(!empty($paiche_linker)){
            $where.=" and a.paiche_linker like '%".$paiche_linker."%'";
            $base_url.="&paiche_linker={$paiche_linker}";
        }
        //联系电话
        $paiche_linkerPhone=Request::getVar('paiche_linkerPhone','get');
        if(!empty($paiche_linkerPhone)){
            $where.=" and a.paiche_linkerPhone={$paiche_linkerPhone}";
            $base_url.="&paiche_linkerPhone={$paiche_linkerPhone}";
        }
        $paiche_startDate=Request::getVar('paiche_startDate','get');
         if(!empty($paiche_startDate)){
            $base_url.="&paiche_startDate={$paiche_startDate}";
            $where .=" AND a.paiche_endDate>=".strtotime($paiche_startDate);
        }
        //结束时间
        $paiche_endDate=Request::getVar('paiche_endDate','get');
        //print_r($search_endDate);exit;
        if(!empty($paiche_endDate)){
            $base_url.="&paiche_endDate={$paiche_endDate}";
            $where .=" AND a.paiche_startDate<=".(strtotime($paiche_endDate." 23:59:59"));
        }
        //审核状态
        $zijia_shenhe= Request::getVar('zijia_shenhe','get');

        if($zijia_shenhe==1){
            $where.=" and a.paiche_checkTimes=0";
            $base_url.="&zijia_shenhe=1";
        }else if($zijia_shenhe==2){
             $where.=" and a.paiche_checkTimes>0";
            $base_url.="&zijia_shenhe=2";
        }
         //状态
        $search_status=Request::getVar('search_status','get');
        
        //$search_status=Request::getVar('search_status','get');
        $search_status_a=Request::getVar('search_status_a','get');
        if(!empty($search_status_a)){
           $search_status=$search_status_a; 
        }
        if (empty($search_status)) $search_status = "ss";
        $base_url.="&search_status={$search_status}";

		//调车未还车
        if ($search_status=="ss"){
            $where .=" AND a.paiche_jie=1";
        }
         //预约
        else if ($search_status=="yy"){
           	$where .=" AND a.paiche_jie=-1";
        }
        //还车未结账
        else if ($search_status=="yh"){
            $where .=" AND a.paiche_jie=2";
        //已结账
        } else if ($search_status=="yj"){
            $where .=" AND a.paiche_jie=3";
        //取消
        }else if($search_status=="wy"){
            $where .=" AND a.paiche_jie=-2";
        //超时4小时未还
        }else if($search_status=="cswh"){
                $where .=" AND a.paiche_jie=1 and a.paiche_endDate <".(time()-60*60*4);
        //72小时预约单
        }else if($search_status=='zjyy'){
                $shijian=strtotime(date('Y-m-d'));
                $shijian_a=strtotime(date('Y-m-d',strtotime('+3 day')));
                $where.=" and a.paiche_jie=-1 and a.paiche_startDate>{$shijian} and a.paiche_startDate<{$shijian_a}";
                $order="`paiche_startDate` asc";
        }
        $sql="select count(*) as count
        from paiche as a 
        left join client AS b ON a.paicheCom=b.client_id 
        LEFT JOIN emp AS c ON a.paicheCounterMan=c.emp_id 
        LEFT JOIN shop AS cc ON a.paicheCounterShop=cc.shop_id 
        LEFT JOIN car AS e ON a.paicheCar=e.car_id  
        LEFT JOIN shop AS m ON a.paiche_shopid=m.shop_id 
        LEFT JOIN emp AS n ON a.paicheServerMan=n.emp_id 
        LEFT JOIN settle AS o ON a.paiche_id=o.settlePaicheId 
        LEFT JOIN emp AS l ON a.shenhe_empid=l.emp_id
        LEFT JOIN client_lianxi AS z ON b.client_id=z.client_id
        LEFT JOIN shunt AS h ON a.paiche_id=h.shuntPaicheId
        LEFT JOIN brothers AS j ON a.paiche_brother=j.bro_id
        LEFT JOIN emp AS d ON a.paicheDriver=d.emp_id
         {$where}   ORDER BY {$order}";
        $style = new PageStyle_a();
        
        $total_item=$CommonFunction->getDataY($sql,'count');
        if($total_item/$per_page==$p-1){
            if($p>1){
                $p=$p-1;
            }
             
        }
        $start = ($p-1)*$per_page;

		$sql="select a.*,b.client_name,c.emp_name AS yewuyuan,cc.shop_name as ywshopname,e.car_num,m.shop_name,n.emp_name AS jiedaiyuan,l.emp_name as shenhe_empname,z.name as zemp_name,z.phone,n.emp_name,m.shop_name,h.shunt_rented,h.shunt_end,h.shunt_balance,h.shunt_money,h.shunt_endtimes,h.shunt_other,j.bro_name,j.bro_linker,j.bro_phone,d.emp_name AS siji,zz.bro_name as bro_namea,zz.bro_linker as bro_linkera,zz.bro_phone as bro_phonea 
        from paiche as a 
        left join client AS b ON a.paicheCom=b.client_id 
        LEFT JOIN emp AS c ON a.paicheCounterMan=c.emp_id 
        LEFT JOIN shop AS cc ON a.paicheCounterShop=cc.shop_id 
        LEFT JOIN car AS e ON a.paicheCar=e.car_id 
        LEFT JOIN shop AS m ON a.paiche_shopid=m.shop_id 
        LEFT JOIN emp AS n ON a.paicheServerMan=n.emp_id 
        LEFT JOIN settle AS o ON a.paiche_id=o.settlePaicheId 
        LEFT JOIN emp AS l ON a.shenhe_empid=l.emp_id
        LEFT JOIN (select * from client_lianxi where zhu=1)AS z ON b.client_id=z.client_id
        LEFT JOIN shunt AS h ON a.paiche_id=h.shuntPaicheId 
        LEFT JOIN brothers AS j ON a.paiche_brother=j.bro_id
        LEFT JOIN emp AS d ON a.paicheDriver=d.emp_id
        LEFT JOIN brothers AS zz ON a.paiche_brothera=zz.bro_id
         {$where}   ORDER BY {$order} LIMIT {$start},{$per_page}
        ";
		
		$list=$CommonFunction->getList($sql);
		//print_r($list[0]);exit;
		for($i=0;$i<count($list);$i++){
			if ($list[$i]['paiche_jie']==-3){//预约未开始
                $list[$i]['zhuangtai']="取消单";
            }else if($list[$i]['paiche_jie']==-2){//违约
                $list[$i]['zhuangtai']="取消单";
            }else if($list[$i]['paiche_jie']==-1){//预约
                $list[$i]['zhuangtai']="预约单";
            }else if($list[$i]['paiche_jie']==1){//
		        $list[$i]['zhuangtai']="调车未还";   
            }else if($list[$i]['paiche_jie']==2){//已还车未结账
                $list[$i]['zhuangtai']="已还车未结账";
            }else if($list[$i]['paiche_jie']==3){//已结账
                 $list[$i]['zhuangtai']="已结账";
            }
            else if($list[$i]['paiche_jie']==-10){//已结账
                 $list[$i]['zhuangtai']="等待取消";
            }
            $list[$i]['paiche_startDate'] = $list[$i]['paiche_startDate']>0 ? date("Y-m-d H:i:s",$list[$i]['paiche_startDate']) :"-";
            $list[$i]['paiche_endDate'] = $list[$i]['paiche_endDate']>0 ? date("Y-m-d H:i:s",$list[$i]['paiche_endDate']) : "—";
            $list[$i]['paiche_dispatchTimes'] = $list[$i]['paiche_dispatchTimes']>0 ? date("Y-m-d H:i:s",$list[$i]['paiche_dispatchTimes']) : "—";
            
            $list[$i]['paiche_youhuilist']=$CommonFunction->getList("select * from paiche_youhui where paiche_id={$list[$i]['paiche_id']}");
            //换车记录
            $list[$i]['paiche_changelist']=$CommonFunction->getList("select b.car_num from changecar as a left join car as b on a.changecar_carA=b.car_id  where changecarPaicheId={$list[$i]['paiche_id']}");
            //print_r($list[$i]['paiche_changelist']);exit;
            //费用
            $list[$i]['paiche_chargelist']=$CommonFunction->getChargeList_a($list[$i]['paiche_id']);
            
		}

		
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
        //企业客户集合
        //长期企业
		$sql="select * from client";
		$client_list=$CommonFunction->getList($sql);
		$sql="select * from brothers";
		$brothers_list=$CommonFunction->getList($sql);

        $object = new stdClass();
        //超时4小时未还
        $sql="select count(*) as count  from paiche where paiche_type=2 AND paiche_jie=1 and paiche_endDate <".(time()-60*60*4);
        $object->chaoshiweihuan=$CommonFunction->getDataY($sql,'count');
       
        //超时4小时未还门店
        $sql="select count(*) as count  from paiche where paiche_type=2 AND paiche_jie=1 and paicheCounterShop={$_SESSION['shopid']} and paiche_endDate <".(time()-60*60*4);
        $object->chaoshiweihuan_b=$CommonFunction->getDataY($sql,'count');

         //72小时预约单
        $shijian=strtotime(date('Y-m-d'));
        $shijian_a=strtotime(date('Y-m-d',strtotime('+3 day')));
        $sql="select count(*) as count  from paiche where paiche_type=2 AND paiche_jie=-1 and paiche_startDate>{$shijian} and paiche_startDate<{$shijian_a}";
        $object->getzuijinyueyue=$CommonFunction->getDataY($sql,'count');
        
         //72小时预约单门店
        $sql="select count(*) as count  from paiche where paiche_type=2 AND paiche_jie=-1 and paicheCounterShop={$_SESSION['shopid']} and paiche_startDate>{$shijian} and paiche_startDate<{$shijian_a}";
        $object->getzuijinyueyue_b=$CommonFunction->getDataY($sql,'count');
        //已还车未结账
        $sql="select count(*) as count  from paiche where paiche_type=2 AND paiche_jie=2";
        $object->getyhwj=$CommonFunction->getDataY($sql,'count');
         //已还车未结账
        $sql="select count(*) as count  from paiche where paiche_type=2 AND paiche_jie=2 and paicheCounterShop={$_SESSION['shopid']}";
        $object->getyhwj_b=$CommonFunction->getDataY($sql,'count');
        
        
        $object->PAGINATION = $pagination->fetch();
        $object->p = $p;
        $object->list = $list;
        $object->nowshopid=$_SESSION['shopid'];
        //增加，
        $object->add=$CommonFunction->panduan_rule($this->package."/add");
        $object->diaoche=$CommonFunction->panduan_rule($this->package."/diaoche");
        $object->huanche=$CommonFunction->panduan_rule($this->package."/huanche");
        $object->xuzhu=$CommonFunction->panduan_rule($this->package."/xuzhu");
        $object->qita=$CommonFunction->panduan_rule($this->package."/qita");
        $object->youhui=$CommonFunction->panduan_rule($this->package."/youhui");
        $object->print=$CommonFunction->panduan_rule($this->package."/print");
        $object->shenghe=$CommonFunction->panduan_rule($this->package."/shenghe");
        $object->huanchea=$CommonFunction->panduan_rule($this->package."/huanchea");
        $object->kaipiao=$CommonFunction->panduan_rule($this->package."/kaipiao");
        $object->mingxi=$CommonFunction->panduan_rule($this->package."/mingxi");
        $object->quxiao=$CommonFunction->panduan_rule($this->package."/quxiao");
        $object->update=$CommonFunction->panduan_rule($this->package."/update");
        $object->brothers_list = $brothers_list;
        $object->search_status = $search_status;
        $object->client_list = $client_list;
        $object->total = $total_item;
        $view  = $this->createView("operator/daijia_linshi/index.html");
        $view->assign($object);
        $view->display();
		//print_r(count($list));exit;
	}
	function add(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/add");
        $type=Request::getVar('type','get');
        //print_r($type);exit;
		 //长期企业
		$sql="select * from client where client_id!=12";
		$client_list=$CommonFunction->getList($sql);
		$sql="select * from brothers";
		$brothers_list=$CommonFunction->getList($sql);
        //光宝用车条款
        $sql="select * from client_price";
        $client_price=$CommonFunction->getList($sql);
		$object = new stdClass();
        $object->client_price = $client_price;
		$object->client_list = $client_list;
        $object->type = $type;
		$object->brothers_list = $brothers_list;
		$object->time = date('Y-m-d H:i:s',time());
		$view  = $this->createView("operator/daijia_linshi/add.html");
        $view->assign($object);
        $view->display();
	}

	function insert(){
        //print_r("expression");exit;
		$CommonFunction=new CommonFunction();
        
		$tiao_url="index.php?search_status=qb";
		$object = new stdClass();
		
        //是否为调车
        $type=Request::getVar('type','post');
        //默认预约状态
        $object->paiche_jie=-1;
        if($type=="ss"){
            $object->paiche_jie=1;
            $object->paicheDriver=Request::getVar('paicheDriver','post');
            $object->paiche_dispatchTimes=time();
            $object->paicheServerMan=$_SESSION['user_id'];
            $object->paiche_shopid=$_SESSION['shopid'];
        }
		//客户类型
		$paiche_kehu=Request::getVar('paiche_kehu','post');
		$object->paiche_kehu=$paiche_kehu;
		//企业客户id
		$object->paicheCom=Request::getVar('paicheCom','post');
		//调车公司ID
		$object->paiche_brother=Request::getVar('paiche_brother','post');
		//是否是调用车辆
		$paiche_pintaiid=Request::getVar('paiche_pintaiid','post');

		$object->paiche_pintaiid=$paiche_pintaiid;
		if($paiche_pintaiid==2){
			$object->paiche_jie=2;
		}
        
        //车型及行程
        $object->paiche_line=Request::getVar('paiche_line','post');
		//调车公司ID
		$object->paiche_brothera=Request::getVar('paiche_brothera','post');
		//联系人
		$object->paiche_linker=Request::getVar('paiche_linker','post');
		//联系电话
		$object->paiche_linkerPhone=Request::getVar('paiche_linkerPhone','post');
		//车辆
		$object->paicheCar=Request::getVar('paicheCar','post');
		//开始用车时间
		$object->paiche_startDate=strtotime(Request::getVar('paiche_startDate','post'));
		//用车结束时间
		$object->paiche_endDate=strtotime(Request::getVar('paiche_endDate','post'));
		//是否开票
		if($paiche_kehu==1){
			$object->paiche_needtax=Request::getVar('paiche_needtax','post');
		}else{
			$object->paiche_needtax=1;
		}
        $guangbao_id=Request::getVar('client_price','post');

        if($paiche_kehu==4){
            $object->paicheCom=12;
            //光宝用车方案
            
            $object->guangbao_id=$guangbao_id;
        }
		//是否超时
		$paiche_chaoshi=Request::getVar('paiche_chaoshi','post');
        //print_r($paiche_chaoshi);exit;
		if($paiche_chaoshi>0){
			$object->paiche_unlimitTime="Y";
			$object->paiche_overTime=$paiche_chaoshi;
		}else{
			$object->paiche_unlimitTime="N";
		}
		//是否超公里
		$paiche_chaokms=Request::getVar('paiche_chaokms','post');
		$paiche_chaokmy=Request::getVar('paiche_chaokmy','post');
		if($paiche_chaokmy>0&&$paiche_chaokms>0){
			$object->paiche_unlimitKm="Y";
			$object->paiche_limitKm=$paiche_chaokms;
			$object->paiche_overKm=$paiche_chaokmy;
		}else{
			$object->paiche_unlimitKm="N";
		}
		$object->paiche_specialRemarks=Request::getVar('paiche_specialRemarks','post');
        

		//合同单号
		$paiche_contractNum=date('YmdHis',time());
		$object->paiche_contractNum=$paiche_contractNum;
		//门店业务员
		$object->paicheCounterShop=$_SESSION['shopid'];
        $object->paicheCounterMan=$_SESSION['user_id'];
        if($paiche_pintaiid==2){
        	$object->paiche_shopid=$_SESSION['shopid'];
        	$object->paicheServerMan=$_SESSION['user_id'];
        }
		//派车单类型为临时代驾
		$object->paiche_type=2;
		$CommonFunction->instert($object,"paiche");
		$pid=$CommonFunction->getDataY("select paiche_id from paiche where paiche_contractNum='{$object->paiche_contractNum}'","paiche_id");
		if($pid){
			//租金
            $paiche_rent=Request::getVar('paiche_rent','post');
            $have_freeze_money=Request::getVar('have_freeze_money','post'); 
            $dioache_money=Request::getVar('dioache_money','post'); 
           

                $object = new Object();
                $object->paiche_id = $pid;
                $object->charge_id = 2;
                $object->conv_money = $paiche_rent;
                $object->back_money =0;
                $object->addtime =time();
                if($have_freeze_money>0){
                    $object->have_freeze_money =$have_freeze_money;
                }
                if($dioache_money>0){
                    $object->have_in_money =$dioache_money;
                    $object->have_back_money =$dioache_money;
                }
                $object->addemp=$_SESSION['user_id'];
                $object->continuerent_start=strtotime(Request::getVar('paiche_startDate','post'));
                $object->continuerent_end=strtotime(Request::getVar('paiche_endDate','post'));
                $CommonFunction->instert($object,"paiche_charges");
            
            

            $suijin=Request::getVar('suijin','post');
            if($suijin>0){
            	$object = new Object();
	            $object->paiche_id = $pid;
	            $object->charge_id = 19;
	            $object->conv_money = $suijin;
	            $object->back_money =0;
	            $object->addtime =time();
	            $object->addemp=$_SESSION['user_id'];
	            $CommonFunction->instert($object,"paiche_charges");
            }
            $CommonFunction->setAction("添加了临时代驾派车单-".$pid);
            $this->redirect($tiao_url."&paiche_contractNum=".$paiche_contractNum,"添加成功");
		}else{
			$this->redirect($tiao_url,"添加失败");
		}	
	}
	//车辆调度
	function diaoche(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/diaoche");
		$pid=Request::getVar('pid','get');
		$sql="select b.* from paiche as a left join car as b on a.paicheCar=b.car_id where a.paiche_id={$pid}";
		$car=$CommonFunction->getData($sql);
		
		$sql="select * from emp where emp_stutas!=-1 and (emp_zhiweiid=66 or emp_zhiweiid=67)";
		$emp_list=$CommonFunction->getList($sql);
		$object = new stdClass();
		$object->car=$car;
		$object->emp_list=$emp_list;
		$object->pid=$pid;
        $view  = $this->createView("operator/daijia_linshi/diaoche.html");
        $view->assign($object);
        $view->display();
	}
	//调车
	function diaoche_action(){

		$CommonFunction=new CommonFunction();
		$pid=Request::getVar('pid','post');
        $paiche_dispatchTimes=strtotime(Request::getVar('paiche_dispatchTimes','post'));
        //print_r($paiche_dispatchTimes);exit;
		//$settle_startKm=Request::getVar('settle_startKm','post');
		$object = new stdClass();
		$object->paicheCar=Request::getVar('paicheCar','post');
        if($paiche_dispatchTimes>0){
            $object->paiche_dispatchTimes=$paiche_dispatchTimes;
        }else{
            $object->paiche_dispatchTimes=time();
        }
		
		$emp_id=$_SESSION['user_id'];
        $object->paicheServerMan=$_SESSION['user_id'];
        $object->paiche_shopid=$_SESSION['shopid'];
		$paicheDispatchMan=$CommonFunction->getDataY("select emp_name from emp where emp_id={$emp_id}","emp_name");
		//print_r($paicheDispatchMan);exit;
		$object->paicheDispatchMan=$paicheDispatchMan;
		$object->paiche_jie=1;
		$object->paiche_id=$pid;
		$object->paicheDriver=Request::getVar('paicheDriver','post');;
		$tiao_url="index.php?search_status=qb";
		$re=true;

		if($CommonFunction->update_a($object,"paiche_id","paiche","")){
			$re=true;
			//$object1 = new stdClass();
			//$object1->settle_startKm=$settle_startKm;
			//$object1->settlePaicheId=$pid;
			//$CommonFunction->update_a($object1,"settlePaicheId","settle","");
			$CommonFunction->setAction("调度了车辆-".$pid);
		}else{
			$re=false;
			
		}
                //print_r("expression");exit;
		$object = new stdClass();
        $object->result = $re ? "调度成功！":"调度失败，返回重试！";
        $view  = $this->createView("operator/daijia_linshi/result.html");
        $view->assign($object);
        $view->display();	
	}
	//换车
	function huanche(){

		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/huanche");
		$object = new stdClass();
		$pid=Request::getVar('pid','get');
		$sql="select a.paiche_startDate,a.paiche_endDate,b.settle_startKm,c.car_id,c.car_num,car_color from paiche as a left join settle as b on a.paiche_id=b.settlePaicheId left join car as c on a.paicheCar=c.car_id where a.paiche_id={$pid}";
		$paiche=$CommonFunction->getData($sql);
		$paiche['stime']=date('Y-m-d H:i:s', $paiche['paiche_startDate']);
		$paiche['addtime']=date('Y-m-d H:i:s', time());
        $paiche['paiche_endDate']=date('Y-m-d H:i:s', $paiche['paiche_endDate']);
        
		$object->paiche=$paiche;
		$object->pid=$pid;
        $view  = $this->createView("operator/daijia_linshi/huanche.html");
        $view->assign($object);
        $view->display();
	}

	function huanche_action(){
		$CommonFunction=new CommonFunction();
		$emp_id=$_SESSION['user_id'];
		$empname=$CommonFunction->getDataY("select emp_name from emp where emp_id={$emp_id}","emp_name");
		//print_r($empname);exit;
		$pid=Request::getVar('pid','post');
		$object = new stdClass();
		$object->paiche_id=$pid;
		$object->paicheCar=Request::getVar('car_ida','post');
		$re=true;
		if($CommonFunction->update_a($object,"paiche_id","paiche","")){
			$re=true;
		}else{
			$re=false;
		}
		
		if($re){
			$object2 = new stdClass();
			//派车id
			$object2->changecarPaicheId=$pid;
			
			$object2->changecar_carA=Request::getVar('car_id','post');
			//被换车辆起始公里数
	        $object2->changecar_carAStartKilo=Request::getVar('skm','post');
	        //结束公里数
	        $object2->changecar_carAEndKilo=Request::getVar('ekm','post');
	        //还完的车子
	        $object2->changecar_carB=Request::getVar('car_ida','post');
	        //备注
	        $object2->changecar_rentRemarks=Request::getVar('beizu','post');
	        //换车时间
	        $object2->changecar_times=strtotime(Request::getVar('etime','post'));
	        $object2->changecarMan=$empname;
	        
	        if($CommonFunction->instert($object2,"changecar")){

				$re=true;
			}else{
				$re=false;
			}
			
		}

		if($re){
			$object3 = new stdClass();
            $object3->car_id=Request::getVar('car_id','post');
            $object3->car_nowKilo=Request::getVar('ekm','post');
            if ($CommonFunction->update_a($object3,"car_id","car","")){
                $re=true;
            }else{
                $re=false;
            }
            $CommonFunction->setAction("进行了换车，id为-".$pid);
       	}
        $object = new stdClass();
        $object->result = $re ? "换车成功！":"换车失败，返回重试！";
        $view  = $this->createView("operator/daijia_linshi/result.html");
        $view->assign($object);
        $view->display();
	}


	function xuzhu(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/xuzhu");
		$pid = Request::getVar('pid','get');
		//查询租金和续租金的日期
		$sql="select * from paiche where  paiche_id={$pid}";
		$paiche=$CommonFunction->getData($sql);
		$paiche['paiche_endDate']=date("Y-m-d H:i:s",$paiche['paiche_endDate']);
		$object = new Object();
		$object->paiche =$paiche;
		$object->pid =$pid;
		$view  = $this->createView("operator/daijia_linshi/xuzhu.html");
        $view->assign($object);
        $view->display();
	}

	function xuzhu_action(){
		$CommonFunction=new CommonFunction();
		$pid = Request::getVar('pid','post');
		$paiche_startDate=strtotime(Request::getVar('paiche_startDate','post'));
		$paiche_endDate=strtotime(Request::getVar('paiche_endDate','post'));
		$conv_money=Request::getVar('conv_money','post');
		$paiche_specialRemarks=Request::getVar('paiche_specialRemarks','post');
		$re=true;
		$object = new Object();
		$object->paiche_endDate=$paiche_endDate;
		$object->paiche_id=$pid;
		if ($CommonFunction->update_a($object,"paiche_id","paiche","")){
				$re=true;
        }else{
                $re=false;
        }
		
       	if($re){
                if($conv_money>0){
                    $object5 = new Object();
                    $object5->paiche_id = $pid;
                    $object5->charge_id = 5;
                    $object5->addtime =time();
                    $object5->addemp=$_SESSION['user_id'];
                    $object5->conv_money=$conv_money;
                    $object5->continuerent_start=$paiche_startDate;
                    $object5->continuerent_end=$paiche_endDate;
                    if ($CommonFunction->instert($object5,"paiche_charges")){
                         $re=true;                      
                    }else{
                        $re=false;
                    }
                }
	        	
	            $suijin=Request::getVar('suijin','post');
	            if($suijin>0){
	            	$object5 = new Object();
		            $object5->paiche_id = $pid;
		            $object5->charge_id = 19;
		            $object5->addtime =time();
		            $object5->addemp=$_SESSION['user_id'];
		            $object5->conv_money=$suijin;
		            $CommonFunction->instert($object5,"paiche_charges");
	            }
       	}
       	$CommonFunction->setAction("续租了临时代驾派车单-".$pid);
		$object = new stdClass();
        $object->result = $re ? "续租成功！":"续租失败，返回重试！";
        $view  = $this->createView("operator/changqi_zijia/result.html");
        $view->assign($object);
        $view->display();
		
	}

	function select_car_a(){
		$CommonFunction=new CommonFunction();
		$key=Request::getVar('key','get');
		$where=" where car_recycle=0 AND car_status!=2 AND car_status!=3 ";
		if($key){
			$where.=" and car_num like '%{$key}%'";
		}
		$sql="select * from car {$where}";
		$car_list=$CommonFunction->getList($sql);
		$object = new stdClass();
		$object->car_list=$car_list;
        $view  = $this->createView("operator/daijia_linshi/select_car_a.html");
        $view->assign($object);
        $view->display();
	}

	//获取车辆
	function get_car(){
		//print_r("expression");exit;
		$CommonFunction=new CommonFunction();
		$key=Request::getVar('key','get');
		$where=" where car_recycle=0 AND car_status!=2 AND car_status!=3 ";
		if($key){
			$where.=" and car_num like '%{$key}%'";
		}
		$sql="select * from car {$where}";
		//print_r($sql);exit;
		$car_list=$CommonFunction->getList($sql);
		$object = new stdClass();
		$object->car_list=$car_list;
        $view  = $this->createView("operator/daijia_linshi/get_car.html");
        $view->assign($object);
        $view->display();
	}
	 //修改派车备注
    function setBeizhu(){
        $CommonFunction=new CommonFunction();
        $pid = Request::getVar('pid','post');
        $paiche_specialRemarks = Request::getVar('paiche_specialRemarks','post');

        $object = new Object();
        $object->paiche_id=$pid;
        $object->paiche_specialRemarks=$paiche_specialRemarks;
        if($CommonFunction->update_a($object,"paiche_id","paiche","")){
            echo 1;
        }else{
            echo 2;
        }
        


    }
    //其他费用
	function qita(){
		$CommonFunction=new CommonFunction();
		//$CommonFunction->getQuanxian($this->package."/qita");
		$pid=Request::getVar('pid','get');
		$sql="select * from paiche where paiche_id={$pid}";
		$paiche=$CommonFunction->getdata($sql);
		$object = new stdClass();
		$object ->paiche=$paiche;
		$object ->pid=$pid;
		
		$view  = $this->createView("operator/daijia_linshi/qita.html");
        $view->assign($object);
        $view->display();
	}

	function qita_action(){

		$CommonFunction=new CommonFunction();
		$pid = Request::getVar('pid','post');
		$re=true;
        $dengdai=Request::getVar('dengdai','post');
        if($dengdai>0){
            $object6 = new Object();
            $object6->paiche_id = $pid;
            $object6->charge_id = 8;
            $object6->addtime =time();
            $object6->addemp=$_SESSION['user_id'];
            $object6->conv_money=$dengdai;

            if ($CommonFunction->instert($object6,"paiche_charges")){                           
            }else{
                $re=false;
            }
        }    
        
        $chaoshi=Request::getVar('chaoshi','post');
        if($chaoshi>0){
            $object25 = new Object();
            $object25->paiche_id = $pid;
            $object25->charge_id = 4;
            $object25->addtime =time();
            $object25->addemp=$_SESSION['user_id'];
            $object25->conv_money=$chaoshi;
            if ($CommonFunction->instert($object25,"paiche_charges")){                           
            }else{
                $re=false;
            }
        }
        $chaokm=Request::getVar('chaokm','post');
        if($chaokm>0){
            $object7 = new Object();
            $object7->paiche_id = $pid;
            $object7->charge_id = 15;
            $object7->addtime =time();
            $object7->addemp=$_SESSION['user_id'];
            $object7->conv_money=$chaokm;
            if ($CommonFunction->instert($object7,"paiche_charges")){                           
            }else{
                $re=false;
            }
        }

        $qita=Request::getVar('qita','post');
        $have_freeze_money=Request::getVar('have_freeze_money','post');
        if($qita>0||$have_freeze_money>0){
            $object23 = new Object();
            $object23->paiche_id = $pid;
            $object23->charge_id = 10;
            $object23->addtime =time();
            $object23->addemp=$_SESSION['user_id'];
            $object23->conv_money=$qita;
            $object23->charge_remarks=Request::getVar('charge_remarks','post');
            $object23->have_freeze_money=$have_freeze_money;
            if ($CommonFunction->instert($object23,"paiche_charges")){                           
            }else{
                $re=false;
            }
        }
        $suijin=Request::getVar('suijin','post');
	   	if($suijin>0){
	        $object5 = new Object();
		    $object5->paiche_id = $pid;
		    $object5->charge_id = 19;
		    $object5->addtime =time();
		    $object5->addemp=$_SESSION['user_id'];
		    $object5->conv_money=$suijin;
		    $CommonFunction->instert($object5,"paiche_charges");
	    }

        if($re){
            $CommonFunction=new CommonFunction();
            $CommonFunction->setAction("添加了其他费用id为-".$pid);
        }
        $object = new stdClass();
        $object->result = $re ? "增加费用成功！":"增加费用失败，返回重试！";
        $view  = $this->createView("operator/daijia_linshi/result.html");
        $view->assign($object);
        $view->display(); 
	}

	//优惠
	function youhui(){
		$CommonFunction=new CommonFunction();
        $CommonFunction->getQuanxian($this->package."/youhui");
        $pid = Request::getVar('pid','get');
       	$sql="select * from paiche where paiche_id={$pid}";
		$paiche=$CommonFunction->getdata($sql);
        //$sql_paiche="select * from paiche where paiche_id={$pid}";
        //$paiche=$model->getListBySql_a($sql_paiche);
        $sql="select * from paiche_charges where paiche_id={$pid} and charge_id!=1";
        $paiche_charges=$CommonFunction->getList($sql);
        //应收
        $yinshou=0;
        //已收
        $yishou=0;
        //报价公司报价
        $have_freeze_money=0;
        //已付报价公司
        $have_back_money=0;
        for($i=0;$i<count($paiche_charges);$i++){
            $yinshou=$yinshou+$paiche_charges[$i]['conv_money'];
            //$yishou=$yishou+$paiche_charges[$i]['have_in_money'];

            $have_freeze_money=$have_freeze_money+$paiche_charges[$i]['have_freeze_money'];
            //$have_back_money=$have_back_money+$paiche_charges[$i]['have_back_money'];
        }

        $sql_a="select * from paiche_youhui where paiche_id={$pid}";
        $paiche_youhui=$CommonFunction->getList($sql_a);
        //应该优惠
        $yinyouhui=0;
        //报价公司应该优惠
        $youhui_smoney=0;
        for($i=0;$i<count($paiche_youhui);$i++){
            $yinyouhui=$yinyouhui+$paiche_youhui[$i]['youhui_mone'];
            $youhui_smoney=$youhui_smoney+$paiche_youhui[$i]['youhui_smoney'];
        }
         //print_r($yinyouhui);exit;
        //能够优惠多少
        $nengyouhui=($yinshou-$yinyouhui);
        //调车公司最大优惠
        $nengyouhuia=($have_freeze_money-$youhui_smoney);
        //调车公司最小优惠
        $dczx_nyouhui=($yinshou-$yinyouhui)-($have_freeze_money-$youhui_smoney);
        //print_r($dczx_nyouhui);exit;
        $object = new stdClass();
        $object->pid=$pid;
        $object->nengyouhui=$nengyouhui;
        $object->dczx_nyouhui=$dczx_nyouhui;
        $object->nengyouhuia=$nengyouhuia;
        $object->paiche=$paiche;
       
        $view  = $this->createView("operator/daijia_linshi/youhui.html");
        $view->assign($object);
        $view->display(); 
	}
	function youhui_action(){
		$CommonFunction=new CommonFunction();
        $pid = Request::getVar('pid','post');
        $youhui_mone = Request::getVar('youhui_mone','post');
        $youhui_liyou = Request::getVar('youhui_liyou','post');
        $youhui_smoney = Request::getVar('youhui_smoney','post');
        $object = new Object();
        $object->paiche_id=$pid;
        $object->youhui_mone=$youhui_mone;
        $object->youhui_smoney=$youhui_smoney;
        $object->youhui_liyou=$youhui_liyou;
        $object->youhui_name="租车优惠";
        $object->youhui_addtime=time();
        $object->youhui_empid=$_SESSION['user_id'];
        $re=true;

        if ($CommonFunction->instert($object,"paiche_youhui")){ 
            $re=true;
             //$this->redirect("zijia_detail.php?uid={$pid}","添加成功");                          
        }else{
            $re=false;
            //$this->redirect("zijia_detail.php?uid={$pid}","添加失败"); 
        }
        if($re){
           
            $CommonFunction->setAction("租车优惠id为-".$pid);
        }
        $object = new stdClass();
        $object->result = $re ? "优惠成功！":"优惠失败，返回重试！";
        $view  = $this->createView("operator/daijia_linshi/result.html");
        $view->assign($object);
        $view->display();
	}
	//打印
	function print_a(){

		$CommonFunction=new CommonFunction();
        $CommonFunction->getQuanxian($this->package."/print");
        $pid=Request::getVar('pid','get');
        $paiche_kehu=Request::getVar('paiche_kehu','get');
        $piahce=null;
        //散客合同
      
            $sql="select a.*,b.emp_name,c.car_types,d.client_name,d.client_id
             from paiche as a 
            left join emp as b on a.paicheServerMan=b.emp_id 
            left join car as c on a.paicheCar=c.car_id
            left join client as d on a.paicheCom=d.client_id
            where a.paiche_id={$pid}
            ";
            $paiche=$CommonFunction->getData($sql);
        
        $paiche['paiche_startDate']=date("Y-m-d H:i:s",$paiche['paiche_startDate']);
        $paiche['paiche_endDate']=date("Y-m-d H:i:s",$paiche['paiche_endDate']);
        $sql="select conv_money from paiche_charges where paiche_id={$paiche['paiche_id']} and charge_id=2";
        $paiche['conv_money']=$CommonFunction->getDataY($sql,"conv_money");
        // if($paiche['client_id']>0){
        //     $sql="select name,phone from client_lianxi where client_id={$paiche['client_id']} and zhu=1";
        //     $client_lianxi=$CommonFunction->getData($sql);
        //     $paiche['name']=$client_lianxi['name'];
        //     $paiche['phone']=$client_lianxi['phone'];
        // }
        
        $url="operator/daijia_linshi/print_a.html";
        
        $object = new stdClass();
        $object->paiche = $paiche;
        $view  = $this->createView($url);
        $view->assign($object);
        $view->display();
		//print_r($paiche);exit;
	}
	function shenghe(){
		$CommonFunction=new CommonFunction();
        $CommonFunction->getQuanxian($this->package."/shenghe");
        $pid = Request::getVar('pid','get');
        $object = new stdClass();
        $object->pid=$pid;
        $view  = $this->createView("operator/daijia_linshi/shenghe.html");
        $view->assign($object);
        $view->display();
	}
	function shenghe_action(){
        $CommonFunction=new CommonFunction();
        $pid = Request::getVar('pid','post');
        $paiche_checkNote = Request::getVar('paiche_checkNote','post');
        $object = new Object();
        $object->paiche_id=$pid;
        $object->paiche_checkTimes=time();
        $object->paiche_checkNote=$paiche_checkNote;
        $object->shenhe_empid=$_SESSION['user_id'];
        if($CommonFunction->update_a($object,"paiche_id","paiche","")){
            $re=true;
        }else{
            $re=false;
        }
        if($re){
            
            $CommonFunction->setAction("审核了订单,id为-".$pid);
        }
        $object = new stdClass();
        $object->result = $re ? "审核成功！":"审核失败，返回重试！";
        $view  = $this->createView("operator/daijia_linshi/result.html");
        $view->assign($object);
        $view->display(); 

    }
    //还车
    function huanchea(){
    	$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/huanchea");
		$pid = Request::getVar('pid','get');
		$sql="select a.*,b.settle_startKm from paiche as a left join settle as b on a.paiche_id=b.settlePaicheId where a.paiche_id={$pid}";
		$list=$CommonFunction->getData($sql);
		$list['paiche_startDate'] = $list['paiche_startDate']>0 ? date("Y-m-d H:i:s",$list['paiche_startDate']) :"-";
        $list['paiche_endDate'] = $list['paiche_endDate']>0 ? date("Y-m-d H:i:s",$list['paiche_endDate']) : "—";

        $sql="select * from changecar where changecarPaicheId={$pid} Order by changecar_id";
        $changecar_list=$CommonFunction->getList($sql);
        $ekm=0;
        $stime=$list['paiche_startDate'];
        if(count($changecar_list)>0){
        	for($i=0;$i<count($changecar_list);$i++){
        		$ekm=$ekm+($changecar_list[$i]['changecar_carAEndKilo']-$changecar_list[$i]['changecar_carAStartKilo']);
        		$stime=date("Y-m-d H:i:s",$changecar_list[$i]['changecar_times']);
        	}
        }


		$object = new Object();
		$object->list = $list;
		$object->time = date("Y-m-d H:i:s",time());
		$object->ekm = $ekm;
		$object->pid = $pid;
		$object->stime = $stime;
		$view  = $this->createView("operator/daijia_linshi/huanchea.html");
        $view->assign($object);
        $view->display();
    }
    function huanchea_action(){
		$CommonFunction=new CommonFunction();
		$pid = Request::getVar('pid','post');
        //$paiche_kehu=Request::getVar('paiche_kehu','post');
		$re=true;
        //实际还车时间
        $factendtime=strtotime(Request::getVar('return_endDate','post'));
		$object = new Object();
		$object->settlePaicheId = $pid;
		//车辆开始公里数
        $object->settle_startKm=Request::getVar('skm','post');
		//车辆结束公里数
        $object->settle_endKm=Request::getVar('ekm','post');
        //共计行驶多少公里
        $object->settle_totalKm=$object->settle_endKm-$object->settle_startKm;
        //结算公里数
        $object->settle_totalcalKm=Request::getVar('zjkm','post');
        //实际还车时间
        $object->settle_endDate=time();

        if ($CommonFunction->update_a($object,"settlePaicheId","settle","")){
        }else{
            $re=false;
        }
        $sql="select paiche_kehu,guangbao_id,paiche_needtax from paiche where paiche_id={$pid}";
        $paiche=$CommonFunction->getData($sql);
        //超时
        $chaoshi=Request::getVar('chaoshi','post');
        //计费公里
        $paiche_ekm=Request::getVar('paiche_ekm','post');
        $object_paiche = new Object();
        if($paiche['paiche_kehu']==5){
            $object_paiche->paiche_jie=3;
        }else{
            $object_paiche->paiche_jie=2;
        }
        
        $object_paiche->paiche_id=$pid;
        $object_paiche->paiche_ekm=$paiche_ekm;
        $object_paiche->paiche_endDate=$factendtime;
       
        if($paiche['paiche_kehu']==4){
             $sql="select * from client_price where id={$paiche['guangbao_id']}";
             $client_price=$CommonFunction->getData($sql);
            if($paiche_ekm>0){
                //print_r($price);exit;
                $object = new Object();
                $object->paiche_id = $pid;
                $object->charge_id = 15;
                $object->addtime =time();
                $object->addemp=$_SESSION['user_id'];
                $object->conv_money=$paiche_ekm*$client_price['price'];
                if ($CommonFunction->instert($object,"paiche_charges")){                           
                }else{
                    $re=false;
                }
            }
            if($chaoshi>0){
                $object = new Object();
                $object->paiche_id = $pid;
                $object->charge_id = 8;
                $object->addtime =time();
                $object->addemp=$_SESSION['user_id'];
                $object->conv_money=$chaoshi*$client_price['price_wait1'];
                if ($CommonFunction->instert($object,"paiche_charges")){                           
                }else{
                    $re=false;
                }
            }
            
        //超时超公里
        }else if($paiche['paiche_kehu']==1){
            $sql="select * from paiche where paiche_id={$pid}";
            $paiche=$CommonFunction->getData($sql);
            if($paiche['paiche_unlimitKm']=='Y'&&($paiche_ekm-$paiche['paiche_limitKm'])>0){
                $object = new Object();
                $object->paiche_id = $pid;
                $object->charge_id = 15;
                $object->addtime =time();
                $object->addemp=$_SESSION['user_id'];
                $object->conv_money=($paiche_ekm-$paiche['paiche_limitKm'])*$paiche['paiche_overKm'];
                if ($CommonFunction->instert($object,"paiche_charges")){                           
                }else{
                    $re=false;
                }
                if($paiche['paiche_needtax']==1){
                    $object = new Object();
                    $object->paiche_id = $pid;
                    $object->charge_id = 19;
                    $object->addtime =time();
                    $object->addemp=$_SESSION['user_id'];
                    $object->conv_money=($paiche_ekm-$paiche['paiche_limitKm'])*$paiche['paiche_overKm']*0.1;
                    if ($CommonFunction->instert($object,"paiche_charges")){                           
                    }else{
                        $re=false;
                    }
                }
            }
            
           
            if($paiche['paiche_unlimitTime']=='Y'&&$chaoshi>0){
                $object = new Object();
                $object->paiche_id = $pid;
                $object->charge_id = 4;
                $object->addtime =time();
                $object->addemp=$_SESSION['user_id'];
                $object->conv_money=$chaoshi*$paiche['paiche_overTime'];
                if ($CommonFunction->instert($object,"paiche_charges")){                           
                }else{
                    $re=false;
                }
                 if($paiche['paiche_needtax']==1){
                    $object = new Object();
                    $object->paiche_id = $pid;
                    $object->charge_id = 19;
                    $object->addtime =time();
                    $object->addemp=$_SESSION['user_id'];
                    $object->conv_money=$chaoshi*$paiche['paiche_overTime']*0.1;
                    if ($CommonFunction->instert($object,"paiche_charges")){                           
                    }else{
                        $re=false;
                    }
                }
            }
            
        }
        if ($CommonFunction->update_a($object_paiche,"paiche_id","paiche","")){
        }else{
            $re=false;
        }
        //更新车辆最新公里数
        if ($re){
            $object1 = new stdClass();
            $object1->car_id=Request::getVar('paicheCar','post');
            $object1->car_nowKilo=Request::getVar('ekm','post');
            if ($CommonFunction->update_a($object1,"car_id","car","")){
            }else{
                $re=false;
            }
        }
        if($re){
            
             $CommonFunction->setAction("还车了派车单，id为-".$pid);
        }
        //print_r("expression");exit;
		$object = new stdClass();
        $object->result = $re ? "还车成功！":"还车失败，返回重试！";
        $view  = $this->createView("operator/daijia_linshi/result.html");
        $view->assign($object);
        $view->display(); 
	}
	//开票
	function kaipiao(){

		$CommonFunction=new CommonFunction();
        $CommonFunction->getQuanxian($this->package."/kaipiao");
        $pid = Request::getVar('pid','get');
        $sql="select * from paiche_kaipiao where paiche_id={$pid}";
        $kaipiao_list=$CommonFunction->getList($sql);
        $ykaipiao=0;
        if(count($kaipiao_list)>0){
        	for($i=0;$i<count($kaipiao_list);$i++){
        		$ykaipiao=$ykaipiao+$kaipiao_list[$i]['money'];
        	}
        	
        }
        $sql="select * from paiche_charges where charge_id!=1 and paiche_id={$pid}";
        $charges_list=$CommonFunction->getList($sql);
        $zkaipiao=0;
        if(count($charges_list)>0){
        	for($i=0;$i<count($charges_list);$i++){
        		$zkaipiao=$zkaipiao+$charges_list[$i]['conv_money'];
        	}
        	
        }
        $sql="select * from paiche_youhui where paiche_id={$pid}";
        $youhui_list=$CommonFunction->getList($sql);
        $youhui=0;
        if(count($youhui_list)>0){
        	for($i=0;$i<count($youhui_list);$i++){
        		$youhui=$youhui+$youhui_list[$i]['youhui_mone'];
        	}
        	
        }
        $object = new Object();
        $object->ykaipiao=$ykaipiao;
        $object->zkaipiao=$zkaipiao;
        $object->youhui=$youhui;
        $object->pid=$pid;
        $view  = $this->createView("operator/daijia_linshi/kaipiao.html");
        $view->assign($object);
        $view->display();
	}
	function kaipiao_action(){
		//print_r($_SESSION['user_id']);exit;
		$CommonFunction=new CommonFunction();
        $pid = Request::getVar('pid','post');
        $xuhao = Request::getVar('xuhao','post');
        $liyou=Request::getVar('liyou','post');
        $money = Request::getVar('money','post');
        //$liyou = Request::getVar('liyou','post');
        $object = new Object();
        $object->paiche_id=$pid;
        $object->liyou=$liyou;
        $object->money=$money;
        $object->xuhao=$xuhao;
        $object->addtime=time();
        $object->emp_id=$_SESSION['user_id'];
        //print_r($object);exit;
        $re=true;
        if ($CommonFunction->instert($object,"paiche_kaipiao")){ 
             $CommonFunction->setAction("为临时代驾开票，id为-".$pid);
            $re=true;                          
        }else{
            $re=false;
            
        }
        $object = new stdClass();
        $object->result = $re ? "开票成功！":"开票失败，返回重试！";
        $view  = $this->createView("operator/daijia_linshi/result.html");
        $view->assign($object);
        $view->display();

	}


	//明细

	function mingxi(){
		$CommonFunction=new CommonFunction();

        $CommonFunction->getQuanxian($this->package."/mingxi");

        $pid = Request::getVar('pid','get');
        $sql="select a.*,b.client_name,c.emp_name AS yewuyuan,cc.shop_name as ywshopname,e.car_num,ee.car_num as car_num2,m.shop_name,n.emp_name AS jiedaiyuan,o.*,z.emp_name as shenhe_empname,s.name as zemp_name,s.phone,j.bro_name,j.bro_linker,j.bro_phone,zz.bro_name as bro_namea,zz.bro_linker as bro_linkera,zz.bro_phone as bro_phonea  
        from paiche as a 
        left join client AS b ON a.paicheCom=b.client_id 
        LEFT JOIN emp AS c ON a.paicheCounterMan=c.emp_id 
        LEFT JOIN shop AS cc ON a.paicheCounterShop=cc.shop_id 
        LEFT JOIN car AS e ON a.paicheCar=e.car_id 
        LEFT JOIN car AS ee ON a.paicheCar2=ee.car_id 
        LEFT JOIN shop AS m ON a.paiche_shopid=m.shop_id 
        LEFT JOIN emp AS n ON a.paicheServerMan=n.emp_id 
        LEFT JOIN settle AS o ON a.paiche_id=o.settlePaicheId 
        LEFT JOIN emp AS z ON a.shenhe_empid=z.emp_id
        LEFT JOIN (select * from client_lianxi where zhu=1)AS s ON b.client_id=s.client_id
        LEFT JOIN brothers AS j ON a.paiche_brother=j.bro_id 
        LEFT JOIN brothers AS zz ON a.paiche_brothera=zz.bro_id
        where paiche_id={$pid}";
        $list=$CommonFunction->getData($sql);
         $list['settle_endDate'] = $list['settle_endDate']>0 ? date("Y-m-d H:i:s",$list['settle_endDate']) : date("Y-m-d H:i:s",$list['paiche_endDate']);
        $list['paiche_checkTimes'] = $list['paiche_checkTimes']>0 ? date("Y-m-d H:i:s",$list['paiche_checkTimes']) :"-";
        $list['paiche_startDate'] = $list['paiche_startDate']>0 ? date("Y-m-d H:i:s",$list['paiche_startDate']) :"-";
        $list['paiche_endDate'] = $list['paiche_endDate']>0 ? date("Y-m-d H:i:s",$list['paiche_endDate']) : "—";
        $list['paiche_dispatchTimes'] = $list['paiche_dispatchTimes']>0 ? date("Y-m-d H:i:s",$list['paiche_dispatchTimes']) : "—";

       
        //合同图片
        $sql="select * from paiche_images where paiche_id={$pid}";
        $images_list=$CommonFunction->getList($sql);
        //费用
        $chargelist=$CommonFunction->getChargeList_a($pid);
        //优惠
        $sql="select a.*,b.emp_name from paiche_youhui as a left join emp as b on a.youhui_empid=b.emp_id where paiche_id={$pid}";
        $youhui_list=$CommonFunction->getList($sql);
        if(count($youhui_list)>0){
        	for($i=0;$i<count($youhui_list);$i++){
        		$youhui_list[$i]['youhui_addtime']=date("Y-m-d H:i:s",$youhui_list[$i]['youhui_addtime']);
        		
        	}

        }
        //收款记录
        $sql="Select a.*,b.bank_name,c.payment_name From `account_log` as a ".
             "Left Join `banks` as b On a.bank_id=b.bank_id ".
             "Left Join `payments` as c ON a.payments_id=c.payment_id ".
             "Where a.bill_type<>4 and a.bill_type<>1";
        $sql.=" and a.paiche_id={$pid}";
        $sql.=" Order by a.add_time";
        $account_list = $CommonFunction->getList($sql);
        if(count($account_list)>0){
            for($i=0;$i<count($account_list);$i++){
                $account_list[$i]['add_time']=date("Y-m-d H:i:s",$account_list[$i]['add_time']);
                
            }
        }
        //print_r($account_list);exit;
        //出车记录
        $sql="SELECT a.*,b.car_num as carA,c.car_num as carB FROM `changecar` AS a LEFT JOIN `car` AS b ON a.changecar_carA=b.car_id LEFT JOIN `car` AS c ON a.changecar_carB=c.car_id WHERE a.`changecarPaicheId`={$pid}  order by changecar_times asc";
        $changelist=$CommonFunction->getList($sql);
        if(count($changelist)>0){
        	for($i=0;$i<count($changelist);$i++){
        		$changelist[$i]['changecar_times_all']=date("Y-m-d H:i:s",$changelist[$i]['changecar_times']);
        		$changelist[$i]['changecar_times']=date("Y-m-d",$changelist[$i]['changecar_times']);
        	}

        }
        //开票记录
        $sql="select a.*,b.emp_name from paiche_kaipiao as a left join emp as b on a.emp_id=b.emp_id where a.paiche_id={$pid}";
        $kaipiao_list=$CommonFunction->getList($sql);
        if(count($kaipiao_list)>0){
        	for($i=0;$i<count($kaipiao_list);$i++){
        		$kaipiao_list[$i]['addtime']=date("Y-m-d H:i:s",$kaipiao_list[$i]['addtime']);
        		
        	}

        }
       	//违章记录
        $sql="select a.*,b.car_num from breakrules as a left join car as b on a.breakrules_CarId=b.car_id where a.breakrulesPaicheId={$pid}";
        $breakrules=$CommonFunction->getList($sql);
        if(count($breakrules)>0){
            for($i=0;$i<count($breakrules);$i++){
                $breakrules[$i]['breakrules_date']=($breakrules[$i]['breakrules_date']>0?date("Y-m-d H:i:s",$breakrules[$i]['breakrules_date']):"");
                $breakrules[$i]['breakrules_times']=($breakrules[$i]['breakrules_times']>0?date("Y-m-d H:i:s",$breakrules[$i]['breakrules_times']):"");
                $breakrules[$i]['breakrules_endtimes']=($breakrules[$i]['breakrules_endtimes']>0?date("Y-m-d H:i:s",$breakrules[$i]['breakrules_endtimes']):"");
            }
        }


        $object = new Object();
        if($list['paiche_type']==4&&$list['guangbao_id']>0){
            $sql="select * from client_price where id={$list['guangbao_id']}";
            $object->client_price=$CommonFunction->getData($sql);
        }
        $object->list=$list;
        $object->images_list=$images_list;
        $object->pid=$pid;
        $object->breakrules=$breakrules;
        $object->chargelist=$chargelist;
        $object->youhui_list=$youhui_list;
        $object->account_list=$account_list;
        $object->changelist=$changelist;
        $object->kaipiao_list=$kaipiao_list;
        //合同管理
        $view  = $this->createView("operator/daijia_linshi/mingxi.html");
        $view->assign($object);
        $view->display();
	}
    //换司机
    function huansiji(){
        $CommonFunction=new CommonFunction();
        $CommonFunction->getQuanxian($this->package."/add");
        $pid = Request::getVar('pid','get');
        $object = new Object();
        $object->pid=$pid;
        $view  = $this->createView("operator/daijia_linshi/huansiji.html");
        $view->assign($object);
        $view->display();
    }
    function huansiji_action(){
         $CommonFunction=new CommonFunction();
         $pid = Request::getVar('pid','post');
         $paicheDriver = Request::getVar('paicheDriver','post');
         $re=true;
         $object = new Object();
         $object ->paiche_id=$pid;
         $object ->paicheDriver=$paicheDriver;
        if($CommonFunction->update_a($object,"paiche_id","paiche","")){
            $CommonFunction->setAction("为临时代驾还了司机，id为-".$pid);
            $re=true;
        }else{
            $re=false;
        }
        $object = new stdClass();
        $object->result = $re ? "换司机成功！":"换司机失败，返回重试！";
        $view  = $this->createView("operator/daijia_linshi/result.html");
        $view->assign($object);
        $view->display();

    }
    //根据司机类型查司机
    function getSiji(){
        $CommonFunction=new CommonFunction();
        $emp_zhiweiid = Request::getVar('emp_zhiweiid','post');
        //print_r($emp_zhiweiid);exit;
        $where=" where emp_stutas=1 ";
        if($emp_zhiweiid==1000){
            $where.="and emp_zhiweiid!=66 and emp_zhiweiid!=67";
        }else{
            $where.="and emp_zhiweiid={$emp_zhiweiid}";
        }
        $sql="select * from emp  {$where}";
        $list=$CommonFunction->getList($sql);
        //print_r(list)
        echo json_encode($list);
    }

	//取消订单
	function quxiao(){
		$CommonFunction=new CommonFunction();
        $CommonFunction->getQuanxian($this->package."/quxiao");
        $pid = Request::getVar('pid','get');
        $sql="select * from paiche where paiche_id={$pid}";
		$paiche=$CommonFunction->getdata($sql);
		$sql="select * from paiche_charges where paiche_id={$pid} and charge_id!=1";
        $paiche_charges=$CommonFunction->getList($sql);
        $sql="select * from paiche_youhui where paiche_id={$pid}";
		$paiche_youhuis=$CommonFunction->getList($sql);
        $yishou=0;$byishou=0;
        for($i=0;$i<count($paiche_charges);$i++){
        	$yishou=$yishou+$paiche_charges[$i]['have_in_money'];
        }
        for($i=0;$i<count($paiche_youhuis);$i++){
        	$yishou=$yishou-$paiche_youhuis[$i]['youhui_omone'];
        }
        $object = new Object();
        //实际收款
       	$object->yishou=$yishou;
       	$object->paiche=$paiche;
        $object->pid=$pid;
        $view  = $this->createView("operator/daijia_linshi/quxiao.html");
        $view->assign($object);
        $view->display();
	}
	function quxiao_action(){
		$CommonFunction=new CommonFunction();
		$pid = Request::getVar('pid','post');
        $conv_money=Request::getVar('conv_money','post');
        $CommonFunction->dalete_sql("paiche_charges","paiche_id",$pid);
        $CommonFunction->dalete_sql("paiche_youhui","paiche_id",$pid);

        $re=true;
        
        //改派车单为取消单
        $object = new Object();
        $object->paiche_id=$pid;
        $object->paiche_jie=-2;
        $CommonFunction->update_a($object,"paiche_id","paiche","");
        //添加违约金
        
        $object = new Object();
        $object->paiche_id = $pid;
        $object->charge_id = 26;
        $object->conv_money = $conv_money;
        $object->have_in_money = $conv_money;
        $object->addtime =time();
        $object->addemp=$_SESSION['user_id'];
        $CommonFunction->instert($object,"paiche_charges");
        
        $CommonFunction->setAction("取消了临时代驾派车单-".$pid);
        $object = new stdClass();
        $object->result = $re ? "取消成功！":"须财务进行下一步操作！";
        $view  = $this->createView("operator/daijia_linshi/result.html");
        $view->assign($object);
        $view->display();
	}
    //临时代驾结算
    function jiesuan(){
        $CommonFunction=new CommonFunction();
        $CommonFunction->getQuanxian($this->package."/jiesuan");
        $sql="select a.paicheCom,Count(a.paiche_id) as count,b.client_name from paiche as a 
            left join client as b on a.paicheCom=b.client_id where a.paiche_jie=2 and a.paiche_type=2 and
          a.paiche_personal=0 and a.paicheCom>0 Group by a.paicheCom, client_name";
        $list=$CommonFunction->getList($sql);

        $sql="select a.paicheCom,a.qiye_num,Count(a.paiche_id) as count,b.client_name
         from paiche as a 
            left join client as b on a.paicheCom=b.client_id where a.paiche_jie=2 and a.paiche_type=2 and a.qiye_num>0 and a.paiche_personal=1  Group by a.paicheCom, a.qiye_num order by a.qiye_num desc";
        $list1=$CommonFunction->getList($sql);
        for($i=0;$i<count($list1);$i++){
            $list1[$i]['qiye_num_time'] = $list1[$i]['qiye_num']>0 ? date("Y-m-d H:i:s",$list1[$i]['qiye_num']) : "—";
        }
        $object = new stdClass();
        $object->list = $list;
        $object->list1 = $list1;
        $view  = $this->createView("operator/daijia_linshi/jiesuan.html");
        $view->assign($object);
        $view->display();
        
    }
    function jiesuan_xiangxi(){
        $CommonFunction=new CommonFunction();
        $paicheCom = Request::getVar('paicheCom','get');
        //print_r($paicheCom);exit;
        $sql="select paiche_contractNum,paiche_id,paiche_line,paiche_specialRemarks,paiche_startDate,paiche_endDate from paiche where paiche_type=2 and paicheCom={$paicheCom} and paiche_jie=2 and paiche_personal=0 order by paiche_startDate desc";
        $list=$CommonFunction->getList($sql);
        for($i=0;$i<count($list);$i++){
            $list[$i]['paiche_startDate'] = $list[$i]['paiche_startDate']>0 ? date("Y-m-d H:i:s",$list[$i]['paiche_startDate']) :"-";

            $list[$i]['paiche_endDate'] = $list[$i]['paiche_endDate']>0 ? date("Y-m-d H:i:s",$list[$i]['paiche_endDate']) : "—";

            $sql="select sum(conv_money-have_in_money) as money from paiche_charges where paiche_id={$list[$i]['paiche_id']} and charge_id!=1";
            $money=$CommonFunction->getDataY($sql,"money");
            $sql="select sum(youhui_mone-youhui_omone) as money from paiche_youhui where paiche_id={$list[$i]['paiche_id']}";
            $money=$money-$CommonFunction->getDataY($sql,"money");
            $list[$i]['money']=$money;
        }
        $object = new stdClass();
        $object->list = $list;
        $view  = $this->createView("operator/daijia_linshi/jiesuan_xiangxi.html");
        $view->assign($object);
        $view->display();
        
    }

    function yijie_xiangxi(){
        $CommonFunction=new CommonFunction();
        $qiye_num = Request::getVar('qiye_num','get');

        $sql="select paiche_contractNum,qiye_num,paiche_id,paiche_line,paiche_specialRemarks,paiche_startDate,paiche_endDate from paiche where paiche_type=2 and qiye_num={$qiye_num}  order by paiche_startDate desc";
        $list=$CommonFunction->getList($sql);
        for($i=0;$i<count($list);$i++){
            $list[$i]['paiche_startDate'] = $list[$i]['paiche_startDate']>0 ? date("Y-m-d H:i:s",$list[$i]['paiche_startDate']) :"-";

            $list[$i]['paiche_endDate'] = $list[$i]['paiche_endDate']>0 ? date("Y-m-d H:i:s",$list[$i]['paiche_endDate']) : "—";

            $list[$i]['qiye_num_time'] = $list[$i]['qiye_num']>0 ? date("Y-m-d H:i:s",$list[$i]['qiye_num']) : "—";

            $sql="select sum(conv_money) as conv_money, sum(have_in_money) as have_in_money from paiche_charges where paiche_id={$list[$i]['paiche_id']} and charge_id!=1";
            $money_1=$CommonFunction->getData($sql);

            $sql="select sum(youhui_mone) as youhui_mone, sum(youhui_omone) as youhui_omone from paiche_youhui where paiche_id={$list[$i]['paiche_id']}";
            $money_2=$CommonFunction->getData($sql);
            $list[$i]['money_a']=$money_1["conv_money"]-$money_2['youhui_mone'];
            $list[$i]['money_b']=$money_1["have_in_money"]-$money_2['youhui_omone'];
            $sql="select * from paiche_kaipiao where paiche_id={$list[$i]['paiche_id']}";
            $kaipiao=$CommonFunction->getData($sql);
            $list[$i]['xuhao']=$kaipiao['xuhao'];
            $list[$i]['money']=$kaipiao['money'];
        }
        //print_r($list);exit;
        $object = new stdClass();
        $object->list = $list;
        $view  = $this->createView("operator/daijia_linshi/yijie_xiangxi.html");
        $view->assign($object);
        $view->display();
    }

    function jiesuan_action(){
         $CommonFunction=new CommonFunction();
         $xuhao=Request::getVar('xuhao','post');
         $rules[]=Request::getVar('rules','post');
         $rules=$rules[0];
         //print_r($rules);exit;
         $re=true;
         if(count($rules)>0){
            for($i=0;$i<count($rules);$i++){
                $sql="select sum(conv_money-have_in_money) as money from paiche_charges where paiche_id={$rules[$i]} and charge_id!=1";
                $money=$CommonFunction->getDataY($sql,"money");
                $sql="select sum(youhui_mone-youhui_omone) as money from paiche_youhui where paiche_id={$rules[$i]}";
                $money=$money-$CommonFunction->getDataY($sql,"money");
                if($money>0){
                    $object = new Object();
                    $object->addtime =time();
                    $object->paiche_id = $rules[$i];
                    $object->xuhao = $xuhao;
                    $object->money = $money;
                    $object->emp_id = $_SESSION['user_id'];
                    $object->liyou = "企业批结";
                    if($CommonFunction->instert($object,"paiche_kaipiao")){
                        $re=true;
                    }else{
                        $re=false;
                    }
                }
                $object = new Object();
                $object->paiche_id = $rules[$i];
                $object->paiche_personal=1;
                //结账序号
                $object->qiye_num=time();

                if($CommonFunction->update_a($object,"paiche_id","paiche","")){
                    $re=true;
                }else{
                    $re=false;
                }
            }
         }else{
            $this->redirect("index.php?task==jiesuan","请选择要结算的订单");
         }
        if($re){
            $this->redirect("index.php?task==jiesuan","操作成功");
        }else{
            $this->redirect("index.php?task==jiesuan","操作失败");
        }

    }

    //调车结算
    function diaoche_jiezhang(){
        $CommonFunction=new CommonFunction();
        $CommonFunction->getQuanxian($this->package."/jiesuan");
        //调车公司调我们的车
        $sql1="
        select a.paiche_brother,Count(a.paiche_id) as count,b.bro_name 
            from paiche as a 
            left join brothers as b on a.paiche_brother=b.bro_id 
            where a.paiche_type=2 and a.paiche_brother>0 and a.paiche_jie=2 and a.paiche_kehu=3 and a.paiche_pintainum=0
            Group by a.paiche_brother, b.bro_name
            ";
        $list=$CommonFunction->getList($sql1);
        
        //我们调别人的车
        $sql2="select a.paiche_brothera as paiche_brother ,Count(a.paiche_id) as count,b.bro_name 
            from paiche as a 
            left join brothers as b on a.paiche_brothera=b.bro_id 
            where a.paiche_type=2 and a.paiche_brothera>0 and a.paiche_jie=2 and a.paiche_pintaiid=2 and a.paiche_pintainum=0 
            Group by a.paiche_brothera, b.bro_name";
        $list1=$CommonFunction->getList($sql2);
        
        
        $list3=null;
        if(count($list)>0){
            $list3=$list1;

            for($i=0;$i<count($list);$i++){
                $index=0;
                for($j=0;$j<count($list3);$j++){
                    
                    if($list[$i]['paiche_brother']==$list3[$j]['paiche_brother']){
                        $list3[$j]['count']=$list[$i]['count']+$list3[$j]['count'];
                        $index=1;
                    }
                }
                if($index==0){
                        $list3[]=$list[$i];
                }
            }
        }else if(count($list1)>0){
             $list3=$list;
             //print_r($list1);exit;
            for($i=0;$i<count($list1);$i++){
                 $index=0;
                for($j=0;$j<count($list3);$j++){
                   
                    if($list1[$i]['paiche_brother']==$list3[$j]['paiche_brother']){
                        $list3[$j]['count']=$list1[$i]['count']+$list3[$j]['count'];
                        $index=1;
                    }
                    
                }
                if($index==0){
                        $list3[]=$list1[$i];
                }
                
            }
        }
        
        //print_r($list3);exit;
        //调车公司调我们的车
       
        $sql="select a.diaoche_num,Count(a.paiche_id) as count,b.bro_name,c.bro_name as bro_name_a
            from paiche as a 
            left join brothers as b on a.paiche_brother=b.bro_id 
            left join brothers as c on a.paiche_brothera=c.bro_id
            where  a.diaoche_num>0 and a.paiche_jie=2 and a.paiche_pintainum=1
            Group by  a.diaoche_num order by a.diaoche_num desc";
        $list_a=$CommonFunction->getList($sql);

        for($i=0;$i<count($list_a);$i++){
            $list_a[$i]['qiye_num_time'] = $list_a[$i]['diaoche_num']>0 ? date("Y-m-d H:i:s",$list_a[$i]['diaoche_num']) : "—";
        }
       
        $object = new stdClass();
        $object->list = $list3;
        $object->list_a = $list_a;
        $view  = $this->createView("operator/daijia_linshi/diaoche_jiezhang.html");
        $view->assign($object);
        $view->display();

    }
    //
    function yijie_diaoche(){
        $CommonFunction=new CommonFunction();
        $diaoche_num = Request::getVar('diaoche_num','get');

        $sql="select paiche_brothera,paiche_brother,paiche_contractNum,diaoche_num,paiche_id,paiche_line,paiche_specialRemarks,paiche_startDate,paiche_endDate from paiche where paiche_type=2 and diaoche_num={$diaoche_num} order by paiche_startDate desc";

        $list=$CommonFunction->getList($sql);
         //print_r($list);exit;
        for($i=0;$i<count($list);$i++){
            $list[$i]['paiche_startDate'] = $list[$i]['paiche_startDate']>0 ? date("Y-m-d H:i:s",$list[$i]['paiche_startDate']) :"-";

            $list[$i]['paiche_endDate'] = $list[$i]['paiche_endDate']>0 ? date("Y-m-d H:i:s",$list[$i]['paiche_endDate']) : "—";

            $list[$i]['qiye_num_time'] = $list[$i]['diaoche_num']>0 ? date("Y-m-d H:i:s",$list[$i]['diaoche_num']) : "—";

            $sql="select sum(conv_money) as conv_money, sum(have_in_money) as have_in_money,
                sum(have_freeze_money) as have_freeze_money,
                sum(have_back_money) as have_back_money

             from paiche_charges where paiche_id={$list[$i]['paiche_id']} and charge_id!=1";
            $money_1=$CommonFunction->getData($sql);

            $sql="select sum(youhui_mone) as youhui_mone, sum(youhui_omone) as youhui_omone,
                sum(youhui_smoney) as youhui_smoney, sum(youhui_emoney) as youhui_emoney from paiche_youhui where paiche_id={$list[$i]['paiche_id']}";
            $money_2=$CommonFunction->getData($sql);
            if($list[$i]['paiche_brother']>0){
                $list[$i]['money_a']=$money_1["conv_money"]-$money_2['youhui_mone'];
                $list[$i]['money_b']=$money_1["have_in_money"]-$money_2['youhui_omone'];
                $list[$i]['money_c']=0;
                $list[$i]['money_d']=0;
            }else{
                $list[$i]['money_a']=0;
                $list[$i]['money_b']=0;
                $list[$i]['money_c']=$money_1["have_freeze_money"]-$money_2['youhui_smoney'];;
                $list[$i]['money_d']=$money_1["have_back_money"]-$money_2['youhui_emoney'];;
            }
            
            $sql="select * from paiche_kaipiao where paiche_id={$list[$i]['paiche_id']}";
            $kaipiao=$CommonFunction->getData($sql);
            $list[$i]['xuhao']=$kaipiao['xuhao'];
            $list[$i]['money']=$kaipiao['money'];
        }
        
        $object = new stdClass();
        $object->list = $list;
        $view  = $this->createView("operator/daijia_linshi/yijie_diaoche.html");
        $view->assign($object);
        $view->display();
    }
    //调车结算详细
    function diaoche_jiezhang_xiangxi(){
        $CommonFunction=new CommonFunction();
        $paiche_brother = Request::getVar('paiche_brother','get');
        //print_r($paiche_brother);exit;
        $sql="select paiche_contractNum,paiche_id,paiche_line,paiche_specialRemarks,paiche_startDate,paiche_endDate,paiche_kehu from paiche where paiche_type=2 and paiche_jie=2 and (paiche_kehu=3 or paiche_pintaiid=2) and (paiche_brother={$paiche_brother} or paiche_brothera={$paiche_brother}) and paiche_pintainum=0 ";
        $list=$CommonFunction->getList($sql);
        for($i=0;$i<count($list);$i++){
            $list[$i]['paiche_startDate'] = $list[$i]['paiche_startDate']>0 ? date("Y-m-d H:i:s",$list[$i]['paiche_startDate']) :"-";
            $list[$i]['paiche_endDate'] = $list[$i]['paiche_endDate']>0 ? date("Y-m-d H:i:s",$list[$i]['paiche_endDate']) : "—";

            if($list[$i]['paiche_kehu']==3){
                $sql="select sum(conv_money-have_in_money) as money from paiche_charges where paiche_id={$list[$i]['paiche_id']} and charge_id!=1";
                $money=$CommonFunction->getDataY($sql,"money");
                //print_r($list[$i]['paiche_id']);exit;
                $sql="select sum(youhui_mone-youhui_omone) as money from paiche_youhui where paiche_id={$list[$i]['paiche_id']}";
                $money=$money-$CommonFunction->getDataY($sql,"money");
                $list[$i]['money']=$money;
                $list[$i]["type"]="调车公司调我们的车";
            }else{
                $sql="select sum(have_freeze_money-have_back_money) as money from paiche_charges where paiche_id={$list[$i]['paiche_id']} and charge_id!=1";
                $money=$CommonFunction->getDataY($sql,"money");
                //print_r($list[$i]['paiche_id']);exit;
                $sql="select sum(youhui_smoney-youhui_emoney) as money from paiche_youhui where paiche_id={$list[$i]['paiche_id']}";

                $money=$money-$CommonFunction->getDataY($sql,"money");
                $list[$i]['money']=$money*-1;
                $list[$i]["type"]="我们调调车公司的车";
            }
        }
        $object = new stdClass();
        $object->list = $list;
        $view  = $this->createView("operator/daijia_linshi/diaoche_jiezhang_xiangxi.html");
        $view->assign($object);
        $view->display();
    }
    function diaoche_jiezhang_action(){
        $CommonFunction=new CommonFunction();
        $rules[]=Request::getVar('rules','post');
        $xuhao=Request::getVar('xuhao','post');
        $kaipiao=Request::getVar('kaipiao','post');
        
        $rules=$rules[0];
        $re=true;
        if(count($rules)>0){
            for($i=0;$i<count($rules);$i++){
                $object = new stdClass();
                $object->paiche_id=$rules[$i];
                //结账序号
                $object->diaoche_num=time();
                $object->paiche_pintainum=1;
                if($CommonFunction->update_a($object,"paiche_id","paiche","")){
                    $re=true;
                }else{
                    $re=false;
                }
                if($kaipiao==1){
                    $sql="select sum(conv_money-have_in_money) as money from paiche_charges where paiche_id={$rules[$i]} and charge_id!=1";
                    $money=$CommonFunction->getDataY($sql,"money");
                        //print_r($list[$i]['paiche_id']);exit;
                    $sql="select sum(youhui_mone-youhui_omone) as money from paiche_youhui where paiche_id={$rules[$i]}";
                    $money=$money-$CommonFunction->getDataY($sql,"money");
                    $object = new Object();
                    $object->addtime =time();
                    $object->paiche_id = $rules[$i];
                    $object->xuhao = $xuhao;
                    $object->money = $money;
                    $object->emp_id = $_SESSION['user_id'];
                    $object->liyou = "调车批结";
                    if($CommonFunction->instert($object,"paiche_kaipiao")){
                        $re=true;
                    }else{
                        $re=false;
                    }
                }
                
                
            }
        }else{
            $this->redirect("index.php?task==diaoche_jiezhang","请选择要结算的订单");
        }
        if($re){
            $this->redirect("index.php?task==diaoche_jiezhang","操作成功");
        }else{
            $this->redirect("index.php?task==diaoche_jiezhang","操作失败");
        }

    }
    function get_cara(){
        //print_r("expression");exit;
        $CommonFunction=new CommonFunction();
        $key=Request::getVar('key','get');
        $where=" where car_recycle=0 AND car_status!=2 AND car_status!=3 ";
        if($key){
            $where.=" and car_num like '%{$key}%'";
        }
        $sql="select * from car {$where}";
        //print_r($sql);exit;
        $car_list=$CommonFunction->getList($sql);
        $object = new stdClass();
        $object->car_list=$car_list;
        $view  = $this->createView("operator/daijia_linshi/get_cara.html");
        $view->assign($object);
        $view->display();
    }

    

	
	
}
