<?php
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('imag.utilities.pagestyle_a');
import('operator.navi.admincontroller');
import('operator.navi.privilegehelper');
import('imag.fusecookie');
import('imag.filesystem.fusefile');
import('imag.filesystem.filesystem');
import('imag.image.uploader');
import('imag.utilities.tool');
import('duanxin.auth');
import('publicFunction.CommonFunction');
class zijia_linshiController extends AdminController
{   
    

    private $package="site/operator/zijia_linshi";
    /**
     * Constructor
     * @params  array   Controller configuration array
     */
    function __construct($config = array())
    {
        parent::__construct($config);
        //集合
        $this->registerTask( 'zijia_list','zijia_list');
        //增加，修改页面
        $this->registerTask( 'zijia_create','zijia_create');
        //增加，修改
        $this->registerTask( 'zijia_insert','zijia_insert');
        //刷身份证，保存图片，返回客户信息
        $this->registerTask( 'generatepicutrea','generatepicutrea');
        //获取车子信息
        $this->registerTask( 'get_car','get_car');
        //根据部门id获取该部门下的业务员
        $this->registerTask( 'get_emp_shop','get_emp_shop');
        //详细页面
        $this->registerTask( 'zijia_detail','zijia_detail');
        //换车
        $this->registerTask( 'zijia_changecar','zijia_changecar');
        $this->registerTask( 'zijiaChangecar_accept','zijiaChangecar_accept');
        $this->registerTask( 'selectemp','selectemp');
        //打印
        $this->registerTask( 'print','busiprint');
        //删除订单
        $this->registerTask( 'zijia_cancel','zijia_cancel');
        //违约
        $this->registerTask( 'zijia_vio','zijia_vio');
        $this->registerTask( 'zijiaVio_accept','zijiaVio_accept');
        //续租
        $this->registerTask( 'zijia_continuecar','zijia_continuecar');
        $this->registerTask( 'zijiaContinue_accept','zijiaContinue_accept');
        //还车
        $this->registerTask( 'zijia_returncar','zijia_returncar');
        $this->registerTask( 'returncar_accept','returncar_accept');
        $this->registerTask( 'getphone','getphone');
        $this->registerTask( 'getYzm','getYzm');
        $this->registerTask( 'getRenlian','getRenlian');
        //其他费用
        $this->registerTask( 'zijia_qita','zijia_qita');
        $this->registerTask( 'zijia_qitaaccept','zijia_qitaaccept');

        $this->registerTask( 'zijia_youhui','zijia_youhui');
        $this->registerTask( 'zijia_youhuiaccept','zijia_youhuiaccept');

         $this->registerTask( 'setBeizhu','setBeizhu');
         $this->registerTask( 'xiaofei','xiaofei');
         $this->registerTask( 'zijia_shouce','zijia_shouce');
         $this->registerTask( 'test','test');
         $this->registerTask( 'generatepicutrea_a','generatepicutrea_a');
        $this->registerTask( 'getdiaoche','getdiaoche');
        $this->registerTask( 'generatepicutrea_b','generatepicutrea_b');
        $this->registerTask( 'test1','test1');
        $this->registerTask( 'gethuodong_a','gethuodong_a');
        $this->registerTask( 'zijia_yeji','zijia_yeji');
        $this->registerTask( 'daijia_yeji','daijia_yeji');
        $this->registerTask( 'zijia_shenghe','zijia_shenghe');
         $this->registerTask( 'zijia_shengheAction','zijia_shengheAction');
         $this->registerTask( 'get_gongchang','get_gongchang');
         $this->registerTask( 'yanzheng_shenfen','yanzheng_shenfen');
          $this->registerTask( 'quxiao','quxiao');
        $this->registerTask( 'quxiao_action','quxiao_action');
           
    } 

    function display(){
        echo "display";
    }

    function zijia_list(){
        //print_r(strtotime("2019-10-29 23:59:00"));exit;
        $CommonFunction=new CommonFunction();
        $CommonFunction->getQuanxian($this->package."/zijia_list");
        $subwhere=$this->getBusiTypePrivilege();
        $model = $this->createModel("zijia_linshi",dirname( __FILE__ ));
        $where = " paiche_type = 1 ";
        $p = Request::getVar('p','get');
        if(empty($p)){
            $p=1;
        }
        $base_url = "zijia_list.php?a=1";
        //门店id
        $shop_id=$_SESSION['shopid'];
        //页数
        //print_r($base_url);exit;
        //合同号
        $paiche_contractNum= Request::getVar('paiche_contractNum','get');
        if(!empty($paiche_contractNum)){
            $where.=" and a.paiche_contractNum like '%{$paiche_contractNum}%'";
            $base_url.="&paiche_contractNum={$paiche_contractNum}";
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
        
        //平台单号
        $paiche_pintainum= Request::getVar('paiche_pintainum','get');
        if(!empty($paiche_pintainum)){
            $where.=" and a.paiche_pintainum ={$paiche_pintainum}";
            $base_url.="&paiche_pintainum={$paiche_pintainum}";
        }
        //业绩门店
        $paicheCounterShop= Request::getVar('paicheCounterShop','get');
        if(!empty($paicheCounterShop)){
            $where.=" and a.paicheCounterShop ={$paicheCounterShop}";
            $base_url.="&paicheCounterShop={$paicheCounterShop}";
        }

        $paiche_startDate=Request::getVar('paiche_startDate','get');
         if(!empty($paiche_startDate)){
            $base_url.="&paiche_startDate={$paiche_startDate}";
            $where .=" AND a.paiche_endDate>=".strtotime($paiche_startDate);
        }

        $paiche_stype=Request::getVar('paiche_stype','get');
        
         if(!empty($paiche_stype)){
            $base_url.="&paiche_stype={$paiche_stype}";
            $where .=" AND a.paiche_stype=".($paiche_stype-1);
        }
        //print_r($where);exit;
        //结束时间
        $paiche_endDate=Request::getVar('paiche_endDate','get');
        //print_r($search_endDate);exit;
        if(!empty($paiche_endDate)){
            $base_url.="&paiche_endDate={$paiche_endDate}";
            $where .=" AND a.paiche_startDate<=".(strtotime($paiche_endDate." 23:59:59"));
        }
        $paiche_kehu=Request::getVar('paiche_kehu','get');
        if(!empty($paiche_kehu)){
            $base_url.="&paiche_kehu={$paiche_kehu}";
            $where .=" AND a.paiche_kehu={$paiche_kehu}";
        }
         //平台id
        $paiche_pintaiid=Request::getVar('paiche_pintaiid','get');
            
        if(!empty($paiche_pintaiid)){
            $base_url.="&paiche_pintaiid={$paiche_pintaiid}";
            $where .=" AND a.paiche_pintaiid={$paiche_pintaiid}";
        }


        //联系人/单位
        $paiche_linker=Request::getVar('paiche_linker','get');
        if(!empty($paiche_linker)){
            $where.=" and a.paiche_linker like '%".$paiche_linker."%'";
            $base_url.="&paiche_linker={$paiche_linker}";
        }

        $paiche_linkerNum=Request::getVar('paiche_linkerNum','get');

        if(!empty($paiche_linkerNum)){
            $where.=" and a.paiche_linkerNum like '%".$paiche_linkerNum."%'";
            $base_url.="&paiche_linkerNum={$paiche_linkerNum}";
        }

        //联系电话
        $paiche_linkerPhone=Request::getVar('paiche_linkerPhone','get');
        if(!empty($paiche_linkerPhone)){
            $where.=" and a.paiche_linkerPhone={$paiche_linkerPhone}";
            $base_url.="&paiche_linkerPhone={$paiche_linkerPhone}";
        }
        //车牌号
        $paiche_car=Request::getVar('paiche_car','get');
        if(!empty($paiche_car)){
            $where.=" and (e.car_num like '%".$paiche_car."%' or ee.car_num like '%".$paiche_car."%') ";
            $base_url.="&paiche_car={$paiche_car}";
        }

        //店铺
        $paiche_shopid=Request::getVar('paiche_shopid','get');

        if(!empty($paiche_shopid)){
            $where.=" and a.paiche_shopid={$paiche_shopid}";
            $base_url.="&paiche_shopid={$paiche_shopid}";
        }

        //状态
        $search_status=Request::getVar('search_status','get');
        $search_status_a=Request::getVar('search_status_a','get');
        if(!empty($search_status_a)){
           $search_status=$search_status_a; 
        }
        
        if (empty($search_status)) $search_status = "ss";
        //print_r($search_status);exit;
        $order="`paiche_dispatchTimes` DESC,`paiche_id` DESC";

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
            } else if ($search_status=="yj"){
                $where .=" AND a.paiche_jie=3";
            }else if($search_status=="wy"){
                $where .=" AND a.paiche_jie=-2";
            }else if($search_status=="qx"){
                $where .=" AND a.paiche_jie=-3";
            }else if($search_status=="cswh"){
                $where .=" AND a.paiche_jie=1 and a.paiche_endDate <".(time()-60*60*4);
                //print_r($where);exit;
            }else if($search_status=='zjyy'){
                $shijian=strtotime(date('Y-m-d'));
                $shijian_a=strtotime(date('Y-m-d',strtotime('+3 day')));
                $where.=" and a.paiche_jie=-1 and a.paiche_startDate>{$shijian} and a.paiche_startDate<{$shijian_a}";
                $order="`paiche_startDate` asc";
            }else{
                $where.=" AND a.paiche_jie !=0 ";
            }

         
        //每页数量
         //print_r($where);exit;
         //print_r($base_url);exit;
        $per_page = 10;
        $style = new PageStyle_a();
        $start = ($p-1)*$per_page;

        //总数
        $sql="select count(*) from paiche as a left join settle as b on a.paiche_id=b.settlePaicheId left join car as e on a.paicheCar=e.car_id left join car as ee on a.paicheCar2=ee.car_id where {$where} ORDER BY {$order}";
        $count=$model->getListBySql_a($sql);
        $total_item=$count[0]['count(*)'];

        if($total_item/$per_page==$p-1){
            if($p>1){
                $p=$p-1;
            }
             
        }
        $start = ($p-1)*$per_page;

        $sql="select a.*,b.*,e.car_num,ee.car_num as car_num2 from paiche as a left join settle as b on a.paiche_id=b.settlePaicheId left join car as e on a.paicheCar=e.car_id left join car as ee on a.paicheCar2=ee.car_id where {$where} ORDER BY {$order} LIMIT $start,$per_page";
        //print_r($sql);exit;

        $paiche=$model->getListBySql_a($sql);
        
        //print_r($list_paiche);exit;
        //print_r($list_paiche[0]['settle_favor']);exit;
        //$paiche=null;
        //分页显示
        /*for($i=($p-1)*$per_page;$i<$p*$per_page;$i++){
            if($i<count($list_paiche)){
                $paiche[]=$list_paiche[$i];
            }
            
        }*/


        $paiche_cara=Request::getVar('paiche_cara','get');
        //将需另外的参数查出来
        for($i=0;$i<count($paiche);$i++){
            if ($paiche[$i]['paiche_jie']==-3){//预约未开始
                $paiche[$i]['zhuangtai']="取消单";
            }else if($paiche[$i]['paiche_jie']==-2){//违约
                $paiche[$i]['zhuangtai']="违约单";
            }else if($paiche[$i]['paiche_jie']==-1){//取消
                $paiche[$i]['zhuangtai']="预约单";
            }else if($paiche[$i]['paiche_jie']==1){//预约
                if($paiche[$i]['paiche_endDate'] >=time()){
                    $paiche[$i]['zhuangtai']="调车未还";
                }else{
                    if($paiche[$i]['paiche_endDate']+60*60*4 >=time()){
                        $paiche[$i]['zhuangtai']="超时4小时以内未还";
                    }else{
                        $paiche[$i]['zhuangtai']="超时4小时以上未还";
                    } 
                }  
            }else if($paiche[$i]['paiche_jie']==2){//调车未还
                $paiche[$i]['zhuangtai']="已还车未结账";
            }else if($paiche[$i]['paiche_jie']==3){//取消
                 $paiche[$i]['zhuangtai']="已结账";
            }else if($paiche[$i]['paiche_jie']==4){//取消
               $paiche[$i]['zhuangtai']="完结";
            }
            $paiche[$i]['paiche_startDate'] = $paiche[$i]['paiche_startDate']>0 ? date("Y-m-d H:i:s",$paiche[$i]['paiche_startDate']) :"-";

            $paiche[$i]['paiche_endDate'] = $paiche[$i]['paiche_endDate']>0 ? date("Y-m-d H:i:s",$paiche[$i]['paiche_endDate']) : "—";

            $zijia_xianshi=$CommonFunction->panduan_rule("zijia_xianshi");
            //不分部门查看身份证
            $bufen_shenfen=$CommonFunction->panduan_rule("bufen_shenfen");
            if($paiche[$i]['paiche_jie']==3){
                if($zijia_xianshi!=1){
                    $paiche[$i]['paiche_linkerPhone']=$model->hidchar($paiche[$i]['paiche_linkerPhone'],'','');
                    $paiche[$i]['paiche_linker']=$model->hidchar('',$paiche[$i]['paiche_linker'],'');
                    
                }
                if($bufen_shenfen!=1){
                    $paiche[$i]['paiche_linkerNum']=$model->hidchar('','',$paiche[$i]['paiche_linkerNum']);
                }
            }else{
                if ($_SESSION['shopid']!=$paiche[$i]['paiche_shopid']&&$paiche[$i]['paicheCounterShop']!=$_SESSION['shopid']&&$zijia_xianshi!=1){
                $paiche[$i]['paiche_linkerPhone']=$model->hidchar($paiche[$i]['paiche_linkerPhone'],'','');
                $paiche[$i]['paiche_linker']=$model->hidchar('',$paiche[$i]['paiche_linker'],'');
                
                        
                }
                if ($_SESSION['shopid']!=$paiche[$i]['paiche_shopid']&&$paiche[$i]['paicheCounterShop']!=$_SESSION['shopid']&&$bufen_shenfen!=1){
                    $paiche[$i]['paiche_linkerNum']=$model->hidchar('','',$paiche[$i]['paiche_linkerNum']);
                }

            }
            $paiche[$i]['yewuyuan']=$model->getEmp_name($paiche[$i]['paicheCounterMan']);
            $paiche[$i]['jiedaiyuan']=$model->getEmp_name($paiche[$i]['paicheServerMan']);
            $paiche[$i]['ywshopname']=$model->getShop_name($paiche[$i]['paicheCounterShop']);
            $paiche[$i]['shop_name']=$model->getShop_name($paiche[$i]['paiche_shopid']);
            $paiche[$i]['paiche_pintainame']=$model->getpingtai($paiche[$i]['paiche_pintaiid']);
            $paiche[$i]['paiche_chargelist']=$model->getChargeList($paiche[$i]['paiche_id']);
            $paiche[$i]['paiche_changelist']=$model->getChangList($paiche[$i]['paiche_id']);
            $paiche[$i]['paiche_youhuilist']=$model->getYouhui($paiche[$i]['paiche_id']);
        }

        //$busiList = $model->getList($start,$per_page, $where,$order);

        

        //print_r($total_item);exit;
        //$total_item = $model->getTotal($where);
       
        $options = array(
            "baseurl"    => $base_url,
            "totalitems" => $total_item,
            "perpage"    => $per_page,
            "page"       => $p,
            "maxpage"    => 10,
            "pagestyle"  => $style,
            "showtotal"  => false
        );
        //print_r($order);exit;
        $pagination = new Pagination($options);
        $p = $pagination->getPage();

        $object = new stdClass();
        //增加，修改，调车
        $object->zijia_create=$CommonFunction->panduan_rule($this->package."/zijia_create");
        //明细
        $object->zijia_detail=$CommonFunction->panduan_rule($this->package."/zijia_detail");
        //明细
        $object->quxiao=$CommonFunction->panduan_rule($this->package."/quxiao");
        //换车
        $object->zijia_changecar=$CommonFunction->panduan_rule($this->package."/zijia_changecar");
        //打印
        $object->print=$CommonFunction->panduan_rule($this->package."/print");
        //续住
        $object->zijia_continuecar=$CommonFunction->panduan_rule($this->package."/zijia_continuecar");
        //续住
        $object->zijia_cancel=$CommonFunction->panduan_rule($this->package."/zijia_cancel");
        //还车
        $object->zijia_returncar=$CommonFunction->panduan_rule($this->package."/zijia_returncar");
        //增加其他费用
        $object->zijia_qita=$CommonFunction->panduan_rule($this->package."/zijia_qita");
        //优惠
        $object->zijia_youhui=$CommonFunction->panduan_rule($this->package."/zijia_youhui");
        
         //订单的审核
        $object->zijia_shenghe=$CommonFunction->panduan_rule($this->package."/zijia_shenghe");
         //打印其他费用
        $object->xiaofei=$CommonFunction->panduan_rule($this->package."/xiaofei");
        $object->bufen_xiangxi=$CommonFunction->panduan_rule("bufen_xiangxi");
        $object->bufen_quxiao=$CommonFunction->panduan_rule("bufen_quxiao");
        $object->bufen_quanbu=$CommonFunction->panduan_rule("bufen_quanbu");

        $object->PAGINATION = $pagination->fetch();
        //用车平台
        $sql_pintai="select * from pintai";
        $object->pintai_list=$model->getListBySql_a($sql_pintai);
        
        $object->shoplist=$model->getEmpList("shop_id,shop_name","","shop","","shop_order");
        $view  = $this->createView("operator/zijia_linshi/zijia_list.html");
        $object->nowuserid=$_SESSION['a_uid'];
        $object->p=$p;
        $object->paicheCounterShop=$paicheCounterShop;
        $object->nowshopid=$_SESSION['shopid'];
        //print_r( $object->nowshopid);exit;
        $object->a_permissions = $_SESSION['a_permissions'];
        //print_r($_SESSION['a_permissions']);exit;
        $object->total = $total_item;
        $object->busiList = $paiche;
        $object->chaoshiweihuan=$model->get_chaoshiweihuan_a();
        $object->chaoshiweihuan_b=$model->get_chaoshiweihuan_b($_SESSION['shopid']);
        $object->getyhwj=$model->getyhwj();
        $object->getyhwj_b=$model->getyhwj_b($_SESSION['shopid']);
        
        $object->getzuijinyueyue=$model->getzuijinyueyue();
        $object->getzuijinyueyue_b=$model->getzuijinyueyue_b($_SESSION['shopid']);

        $object->search_status=$search_status;
      

        $view->assign($object);
        $view->display();
    }
    function zijia_create(){
        $CommonFunction=new CommonFunction();
        $CommonFunction->getQuanxian($this->package."/zijia_create");
        //$time=date('Y-m-d H:i:s', 1563811200+24*60*60*1);
        //print_r($time);exit;
        //类型（增加或修改或调车）
        $paidan_type_a="add";

        //类型（实时或预约）
        $paidan_type_b="y";

        $paidan_type_ab=Request::getVar('paidan_type_a','get');
        if(!empty($paidan_type_ab)){
            $paidan_type_a=$paidan_type_ab;
        }
        //s为实时单，y为预约单
        $paidan_type_bb=Request::getVar('paidan_type_b','get');

        if(!empty($paidan_type_bb)){
            $paidan_type_b=$paidan_type_bb;
        }
        $model = $this->createModel("zijia_linshi",dirname( __FILE__ ));
        $view  = $this->createView("operator/zijia_linshi/zijia_create.html");
        $object = new stdClass();
        //门店数组
        $shop_sql="select shop_name,shop_id from shop";
        $shop_list=$model->getListBySql_a($shop_sql);
        //当前门店
        $shop_sql_1="select shop_name,shop_id from shop where shop_id={$_SESSION['shopid']}";
        $shop=$model->getListBySql_a($shop_sql_1);
        $shop=$shop[0];
        //当前业务员姓名
        $emp_sql_1="select emp_id,emp_name from emp where emp_id={$_SESSION['user_id']}";
        $emp=$model->getListBySql_a($emp_sql_1);
        $emp=$emp[0];
        //如果有id，那么就是修改
        $p_id=Request::getVar('p_id','get');
        if(!empty($p_id)){
            $sql="select a.*,b.*,c.*,d.emp_name from paiche as a left join car as b on a.paicheCar2=b.car_id left join car_price as c on b.car_id=c.car_id left join emp as d on a.paicheCounterMan=d.emp_id where a.paiche_id={$p_id}";
            $paiche=$model->getListBySql_a($sql);
            $paiche=$paiche[0];


            $sql="select * from paiche where paiche_jie=1 and paicheCar={$paiche['car_id']} and paiche_type=3";
            $changqi_zijia=$model->getListBySql_a($sql);
            $sql="select * from paiche where paiche_recycle!=1 AND (paiche_status=0 or paiche_status=1) AND paiche_type IN (4,5) AND paicheCar={$paiche['car_id']} and paiche_startDate<=".time(). " AND paiche_endDate>=".time();
            $changqi=$model->getListBySql_a($sql);
            if(count($changqi_zijia)+count($changqi)>0){
                $paiche['car_gongchang']=1;
            }else{
                $paiche['car_gongchang']=0;
            }

            $paiche['car_types_a']="小轿车";
            if($paiche['car_types']==1){
                $car_types_a="普通跑车";
            }else if($paiche['car_types']==2){
                $car_types_a="超级跑车";
            }else if($paiche['car_types']==3){
                $car_types_a="越野车";
            }else if($paiche['car_types']==4){
                $car_types_a="商务车";
            }else if($paiche['car_types']==5){
                $car_types_a="中型客车";
            }else if($paiche['car_types']==6){
                $car_types_a="大型客车";
            }



             //已收费用
            $sql_account_log="select * from account_log where paiche_id={$p_id}";
            $account_log=$model->getListBySql_a($sql_account_log);
            $paiche['yishou']=0;
            if(count($account_log)>0){
               for($i=0;$i<count($account_log);$i++){

                    $paiche['yishou']=$paiche['yishou']+$account_log[$i]['money'];
                } 
            }
            

            $car=0;
            if(!empty($paiche['paicheCar'])){
                $car=$paiche['paicheCar'];
            }else{
                $car=$paiche['paicheCar2'];
            }




            //车辆信息
            $sql_car_price="select * from car_price where car_id={$car} and plan_day=1";
            $car_price=$model->getListBySql_a($sql_car_price);
            $car_price=$car_price[0];
            $paiche['plan_chaoshi']=$car_price['plan_chaoshi'];
            $paiche['plan_chaokm']=$car_price['plan_chaokm'];
            $paiche['plan_chaokms']=$car_price['plan_chaokms'];
            $paiche['plan_chaokmy']=$car_price['plan_chaokmy'];

            //print_r($car_price['plan_chaoshi']);exit;
             //天
            $timediff = $paiche['paiche_endDate']-$paiche['paiche_startDate'];
            $paiche['tian_a'] = intval($timediff/86400);
            //小时
            $shi = $timediff%86400;

            $paiche['shi'] = intval($shi/3600);
            //分钟
            $paiche['fen'] = $shi%3600;
             
             $paiche['fen'] = intval($paiche['fen']/60);


            $paiche['paiche_startDate']=date('Y-m-d H:i:s', $paiche['paiche_startDate']);

            $paiche['paiche_endDate']=date('Y-m-d H:i:s', $paiche['paiche_endDate']);


            
            $sql_paiche_chargesy="select * from paiche_charges where paiche_id={$p_id}";
            //租金
            $paiche_chargesy=$model->getListBySql_a($sql_paiche_chargesy);
            $paiche_chargesy=$paiche_chargesy;
           
            for($i=0;$i<count($paiche_chargesy);$i++){
                if($paiche_chargesy[$i]['charge_id']==1){
                    $paiche['paiche_deposit']=$paiche_chargesy[$i]['conv_money'];
                }
                if($paiche_chargesy[$i]['charge_id']==2){
                    $paiche['paiche_rent']=$paiche_chargesy[$i]['conv_money'];
                }

               

                 if($paiche_chargesy[$i]['charge_id']==10){
                    $paiche['qita']=$paiche_chargesy[$i]['conv_money'];
                }

                 if($paiche_chargesy[$i]['charge_id']==17){
                    $paiche['shuaka']=$paiche_chargesy[$i]['conv_money'];
                }
                if($paiche_chargesy[$i]['charge_id']==18){
                    $paiche['songche']=$paiche_chargesy[$i]['conv_money'];
                }
                if($paiche_chargesy[$i]['charge_id']==19){
                    $paiche['suijin']=$paiche_chargesy[$i]['conv_money'];
                }
                if($paiche_chargesy[$i]['charge_id']==24){
                    $paiche['jieri']=$paiche_chargesy[$i]['conv_money'];
                }
            }





            

            //查询客户以往订单
            if(!empty($paiche['paiche_linkerNum'])){
                $sql_num="Select paiche_id,paiche_contractNum  From paiche Where paiche_recycle!=1 and paiche_linkerNum='{$paiche['paiche_linkerNum']}'";
                $num_list=$model->getListBySql_a($sql_num);
               
                
                //分析身份证为外地还是本地

                $substr=substr($paiche['paiche_linkerNum'],4);
                if($substr=="3201"||$substr=="3202"||$substr=="3204"||$substr=="3205"||substr($paiche['paiche_linkerNum'],2)=="31"){
                    $paiche['kuhu_type']="本地";
                }else{
                    $paiche['kuhu_type']="外地";
                }
                if(count($num_list)>0){
                     $object->num_list=$num_list;
                    $paiche['kuhu_mew']="老客户";
                }else{
                      $paiche['kuhu_mew']="新客户";
                }

            }
           
            
            
            $object->paiche=$paiche;
            $object->p_id=$p_id;
            //print_r($object->paiche_chargesy);exit;
        }

        $sql_huodong="select * from huodong where stutas=1 and addtime<".time()." and endtime>".time();
        $huodong_list=null;
        $huodong=$model->getListBySql_a($sql_huodong);
        for($i=0;$i<count($huodong);$i++){
            $huodong[$i]['shops']=explode(",",$huodong[$i]['shops']);
            if(in_array($_SESSION['shopid'],$huodong[$i]['shops'])){
                $huodong_list[]=$huodong[$i];
            }
        }
        $object->huodong_list=$huodong_list;

        $object->paidan_type_a=$paidan_type_a;
        $object->paidan_type_b=$paidan_type_b;
        $object->emp=$emp;
        //平台企业名单
        $pintai_sql="select * from pintai ";
        $pintai_list=$model->getListBySql_a($pintai_sql);
        $object->pintai_list=$pintai_list;
        $object->shop_list=$shop_list;
        $object->type='add';
        $object->nowuserid=$_SESSION['a_uid'];

        //当前时间
        $object->d_time=date('Y-m-d H:i:s', time());
        //当前时间加15分钟
        $object->time=date('Y-m-d H:i:s', strtotime('+15minute'));
        $object->shop=$shop;
        $view->assign($object);
        $view->display();
    }




    function zijia_insert(){
        
        
        $model = $this->createModel("zijia_linshi",dirname( __FILE__ ));
        $object = new stdClass();
        //平台id
        $paiche_pintaiid=Request::getVar('pintai','post');
        if(!empty($paiche_pintaiid)){
            $object->paiche_pintaiid=$paiche_pintaiid;
        }
        $paiche_kehu=Request::getVar('paiche_kehu','post');
        if(!empty($paiche_kehu)){
            $object->paiche_kehu=$paiche_kehu;
        }
        //临时自驾类型
        $object->paiche_type=1;
        //录单人
        $object->paiche_userid=$_SESSION['a_uid'];
        //验证承租人身份的方式
        $object->paiche_stype=Request::getVar('paiche_stype','post');
        //录单人姓名
        $object->paiche_Man=$model->getEmpName($_SESSION['a_uid']);
       
        //业务归属门店
        $paicheCounterShop=Request::getVar('paicheCounterShop','post');
        if(!empty($paicheCounterShop)){
            $object->paicheCounterShop=$paicheCounterShop;
        }

        $paicheCounterMan=Request::getVar('paicheCounterMan','post');
        if(!empty($paicheCounterMan)){
            //业务员id
            $object->paicheCounterMan=$paicheCounterMan;
        }
        if($paiche_kehu==4){
            $object->paicheCounterShop=$_SESSION['shopid'];
            $object->paicheCounterMan=$_SESSION['user_id'];
        }
        $paiche_pintainum=Request::getVar('paiche_pintainum','post');
        //print_r($paiche_pintainum);exit;
        if(!empty($paiche_pintainum)){
             $object->paiche_pintainum=$paiche_pintainum;
        }
       
        //派车单所属门店id
        $object->paiche_shopid=Request::getVar('shop_id','post');
        //接待员
        $object->paiche_personal=1;
        $object->paicheServerMan=Request::getVar('paicheServerMan','post');
        //客户类型
        $paiche_busitype=Request::getVar('paiche_busitype','post');

        //print_r(Request::getVar('shop_id','post'));exit;
        //是否为老客户用车
        $paiche_busitype==1;
        //公司用车公司id
        $object->paicheCom=0;
        
        //租车人图片
        $object->paiche_tupian=Request::getVar('paiche_tupian','post');
        //租车人姓名
        $object->paiche_linker=Request::getVar('paiche_linker','post');
        //租车人电话号码
        $object->paiche_linkerPhone=Request::getVar('paiche_linkerPhone','post');
        //租车人身份证号码
        $paiche_linkerNum=Request::getVar('paiche_linkerNum','post');
        $object->paiche_linkerNum=$paiche_linkerNum;
        //租车人地址
        $object->paiche_linkerAdd=Request::getVar('paiche_linkerAdd','post');
        //租车人照片
        $object->paiche_linkerPicture=Request::getVar('paiche_linkerPicture','post');
        //担保人姓名
        $object->paiche_promier=Request::getVar('paiche_promier','post');
        //担保人电话
        $object->paiche_promierPhone=Request::getVar('paiche_promierPhone','post');
        //担保人身份证号码
        $object->paiche_promierNum=Request::getVar('paiche_promierNum','post');
        //担保人地址
        $object->paiche_promierAdd=Request::getVar('paiche_promierAdd','post');
        //担保人照片
        $object->paiche_promierPicture=Request::getVar('paiche_promierPicture','post');
        //合同开始时间
        $object->paiche_startDate=strtotime(Request::getVar('paiche_startDate','post'));
        //合同结束时间
        $object->paiche_endDate=strtotime(Request::getVar('paiche_endDate','post'));
        //结账截止日期为合同开始日期的前一天
        $object->paiche_AccountendDate=strtotime(Request::getVar('paiche_startDate','post'))-86400;

        $object->paiche_lastTotalDate=Request::getVar('paiche_startDate','post');//上一次统计超公里日期为合同开始日期的前一天
        
        //开车路线
        $object->paiche_line=Request::getVar('paiche_line','post');
        //是否需要开票
        $object->paiche_needtax=Request::getVar('paiche_needtax','post');
        //预约车辆
        $paicheCar=Request::getVar('paicheCar','post');
        $object->paicheCar2=empty($paicheCar)? 0 : $paicheCar;
        //预约车辆类型
        $object->paicheCar2s=Request::getVar('paicheCars','post');
        //优惠券
        //备注
        $object->paiche_specialRemarks=Request::getVar('paiche_specialRemarks','post');
        //$object->paiche_coupons=Request::getVar('paiche_coupons','post');
        $object->paiche_status=0; 
        $paidan_type_b=Request::getVar('paidan_type_b','post');
        $paidan_type_a= Request::getVar('paidan_type_a','post');
        $object->paiche_times=time();
        $object->paiche_jie=-1;

         $tiao_url="zijia_list.php?search_status=qb";
        //实时单
        if($paidan_type_b=="s"||$paidan_type_a=="diaoche"){
           
            $object->paiche_jie=1;
            $paicheCar=Request::getVar('paicheCar','post');
            //调度车辆
            $object->paicheCar=empty($paicheCar)? 0 : $paicheCar;
            //状态改为调度
            $object->paiche_status=1;
            //当前调度人
            $object->paicheDispatchMan=$model->getEmpName($_SESSION['a_uid']);
            //调度此车的时间为当前时间
            $object->paiche_dispatchTimes=time();
            //更新接待人为当前调度人
            $object->paicheServerMan=$_SESSION['user_id'];
            //派车单所属门店id为调度门店id
            $object->paiche_shopid=$_SESSION['shopid'];
        }
        if($paiche_kehu==4){
            $object->paiche_jie=3;
        }
        $p_id=Request::getVar('p_id','post');

        //如果有p_id就是修改，没有就是添加
        $paiche_contractNum=date('YmdHis',time());
        $rec_id=0;

        if(!empty($p_id)){
            $object->paiche_id=$p_id;
            $sql_paiche_contractNum="select paiche_contractNum from paiche where paiche_id={$p_id}";
            $list_paiche_contractNum=$model->getListBySql_a($sql_paiche_contractNum);
            $paiche_contractNum=$list_paiche_contractNum[0]['paiche_contractNum'];
            
            if($model->update($object,'paiche_id','paiche','')){
                $rec_id=$p_id;
            }
        }else{
            //派车单号
            $object->paiche_contractNum=$paiche_contractNum;
            //print_r($object);exit;
            $rec_id=$model->store($object);
        }


        $CommonFunction=new CommonFunction();
        if ($rec_id>0)
        {
            //活动
            $huodong_id=Request::getVar('huodong_id','post');
            $huodong_youhui=Request::getVar('huodong_youhui','post');
            if($huodong_id&&$huodong_id!=99999){
                $object50 = new Object();
                $object50->paiche_id = $rec_id;
                $object50->huodong_id = $huodong_id;
                $object50->paiche_linkerNum = $paiche_linkerNum;
                $CommonFunction->instert($object50,"paiche_huodong");

                $huodong_name=$CommonFunction->getDataY("select name from huodong where id={$huodong_id}","name");
                //优惠
                if($huodong_youhui){
                    $object60 = new Object();
                    $object60->paiche_id = $rec_id;
                    $object60->youhui_name = "活动优惠";
                    $object60->youhui_mone = $huodong_youhui;
                    $object60->youhui_addtime = time();
                    $object60->youhui_liyou = "参加租车活动-".$huodong_name;
                    $object60->youhui_empid = $_SESSION['user_id'];
                    $CommonFunction->instert($object60,"paiche_youhui");
                }
            }
            



            $re=true;
            //租金
            $paiche_rent=Request::getVar('paiche_rent','post');     
            $object = new Object();
            $object->paiche_id = $rec_id;
            $object->charge_id = 2;
            $object->conv_money = $paiche_rent;
            $object->back_money =0;
            $object->addtime =time();
            $object->addemp=$_SESSION['user_id'];
            $object->continuerent_start=strtotime(Request::getVar('paiche_startDate','post'));
            $object->continuerent_end=strtotime(Request::getVar('paiche_endDate','post'));
            $this->setShouru($object,$rec_id,2);
            //押金
            $paiche_deposit=Request::getVar('paiche_deposit','post');
            $paiche_deposit_back=Request::getVar('paiche_deposit_back','post');
            $object2 = new Object();
            $object2->paiche_id = $rec_id;
            $object2->charge_id = 1;
            $object2->addtime =time();
            $object2->addemp=$_SESSION['user_id'];
            $object2->conv_money = empty($paiche_deposit)? 0 : $paiche_deposit;
            $object2->back_money =empty($paiche_deposit)? 0 : $paiche_deposit;

            $this->setShouru($object2,$rec_id,1);
            
            //其他费用
            $qita=Request::getVar('qita','post');
            if(!empty($qita)){
                $object4 = new Object();
                $object4->paiche_id = $rec_id;
                $object4->charge_id = 10;
                $object4->conv_money=$qita;
                $object4->addtime =time();
                $object4->addemp=$_SESSION['user_id'];
                $this->setShouru($object4,$rec_id,10);
            }else{
                $model->delete_a("DELETE FROM paiche_charges where charge_id=10 and paiche_id={$rec_id}");
            }


            //其他费用
            $shuaka=Request::getVar('shuaka','post');
            if(!empty($shuaka)){
                $object5 = new Object();
                $object5->paiche_id = $rec_id;
                $object5->charge_id = 17;
                $object5->addtime =time();
                $object5->conv_money=$shuaka;
                $object5->addemp=$_SESSION['user_id'];
                $this->setShouru($object5,$rec_id,17);
            }else{
                $model->delete_a("DELETE FROM paiche_charges where charge_id=17 and paiche_id={$rec_id}");
            }

            //收车费用
            $songche=Request::getVar('songche','post');
            if(!empty($songche)){
                $object6 = new Object();
                $object6->paiche_id = $rec_id;
                $object6->charge_id = 18;
                $object6->addtime =time();
                $object6->conv_money=$songche;
                $object6->addemp=$_SESSION['user_id'];
                $this->setShouru($object6,$rec_id,18);
            }else{
                $model->delete_a("DELETE FROM paiche_charges where charge_id=18 and paiche_id={$rec_id}");
            }
            //其他费用
            $suijin=Request::getVar('suijin','post');
            if($suijin>0){
                $object7 = new Object();
                $object7->paiche_id = $rec_id;
                $object7->charge_id = 19;
                $object7->conv_money=$suijin;
                $object7->addtime =time();
                $object7->addemp=$_SESSION['user_id'];
                $this->setShouru($object7,$rec_id,19);
            }else{
                $model->delete_a("DELETE FROM paiche_charges where charge_id=19 and paiche_id={$rec_id}");
            }
            //节日费用
            $jieri=Request::getVar('jieri','post');
            if($jieri>0){
                $object7 = new Object();
                $object7->paiche_id = $rec_id;
                $object7->charge_id = 24;
                $object7->conv_money=$jieri;
                $object7->addtime =time();
                $object7->addemp=$_SESSION['user_id'];
                $this->setShouru($object7,$rec_id,24);
            }else{
                $model->delete_a("DELETE FROM paiche_charges where charge_id=24 and paiche_id={$rec_id}");
            }
            //print_r("expression");exit;
            $CommonFunction->setAction("添加了临时自驾派车单-".$rec_id);
            $this->redirect($tiao_url."&paiche_contractNum=".$paiche_contractNum,"添加成功");
        }
        else
        {
            $this->redirect($tiao_url,"添加失败");
        }
            
            
    }
    function setShouru($object,$pid,$charge_id){
        $model = $this->createModel("zijia_linshi",dirname( __FILE__ ));
        $sql="select id from paiche_charges where paiche_id={$pid} and charge_id={$charge_id}";
        $paiche_chargesa=$model->getListBySql_a($sql);
        $object->id=$paiche_chargesa[0]['id'];
            if(!empty($object->id)){
                $model->update($object,"id","paiche_charges","");
            }else{
                $model->store($object,"paiche_charges");
        } 

    }
   

    function generatepicutrea(){
       
        $IDcard=Request::getVar('IDcard','post');
        $base64=Request::getVar('Base64Code','post');
        $model = $this->createModel("zijia_linshi",dirname( __FILE__ ));
        $sql="Select paiche_id,paiche_contractNum  From paiche Where paiche_recycle!=1 and paiche_linkerNum='{$IDcard}'";
        $count=$model->getListBySql_a($sql);
        
        if(!empty($base64)){
            $img = base64_decode($base64);
            $a = file_put_contents('../../../thumb/upload/idpicture/'.$IDcard.'.jpg', $img);
        }
        
       
        header("Content-type: application/json");
        echo json_encode($count);
        exit();
    }

    function generatepicutrea_a(){
        $IDcard=Request::getVar('IDcard','post');
        $base64=Request::getVar('Base64Code','post');
        $time=time();
           if(!empty($base64)){
            $img = base64_decode($base64);
            $a = file_put_contents('../../../thumb/upload/idpicture/'.$time.'.jpg', $img);
        }
        header("Content-type: application/json");
        echo json_encode($time);
        exit();
    }
    //人脸识别
    function generatepicutrea_b(){
        $IDcard=Request::getVar('IDcard','post');
        $base64=Request::getVar('Base64Code','post');
        $time=time();
           if(!empty($base64)){
            $img = base64_decode($base64);
            $a = file_put_contents('../../../thumb/upload/idpicture/'.$time.'.jpg', $img);
        }
        header("Content-type: application/json");
        echo json_encode($time);
        exit();
    }



    function get_car(){
        //判断新老客户
        $kh_a=Request::getVar('kh_a','get');
        
        $key=Request::getVar('key','get');
        $model  = $this->createModel("zijia_linshi",dirname( __FILE__ ));
        $object = new stdClass();
        $sql="select a.*,b.* from car as a left join car_price as b on b.car_id=a.car_id where a.car_recycle=0 AND a.car_status!=2 AND a.car_status!=3 and b.plan_day=1";
        if (!empty($key)){
            $sql .=" AND (`car_num` like '%{$key}%')";
        }
        //print_r($sql);exit;
        $car_list = $model->getListBySql_a($sql);
        //print_r($object->car_list);exit;
        for($i=0;$i<count($car_list);$i++){
            //押金
            if($kh_a==1){
                $car_list[$i]['plan_deposit']=$car_list[$i]['plan_deposit1'];
            }else{
                 $car_list[$i]['plan_deposit']=$car_list[$i]['plan_deposit2'];
            }
            if($car_list[$i]['plan_chaokm']=='y'){
                $car_list[$i]['xianzhikm']="每天限".$car_list[$i]['plan_chaokms']."公里    "."超出每公里".$car_list[$i]['plan_chaokmy']."元";
                $car_list[$i]['plan_chaokm_a']="N";
            }else{
                 $car_list[$i]['xianzhikm']="不限公里数";
                 $car_list[$i]['plan_chaokm_a']="Y";
            } 
        }
        $object->car_list=$car_list;
        $view  = $this->createView("operator/zijia_linshi/get_car.html");
        $view->assign($object);
        $view->display();

    }
    //判断车辆是否为工厂车辆
    function get_gongchang(){
        $model  = $this->createModel("zijia_linshi",dirname( __FILE__ ));
        $car_id=Request::getVar('car_id','post');
        $car_gongchang=0;
        $sql="select * from paiche where paiche_jie=1 and paicheCar={$car_id} and paiche_type=3";
            $changqi_zijia=$model->getListBySql_a($sql);
            $sql="select * from paiche where paiche_recycle!=1 AND (paiche_status=0 or paiche_status=1) AND paicheCar={$car_id}  AND paiche_type IN (4,5) AND paiche_startDate<=".time(). " AND paiche_endDate>=".time();
            $changqi=$model->getListBySql_a($sql);
            if(count($changqi_zijia)+count($changqi)>0){
                $car_gongchang=1;
            }else{
                $car_gongchang=0;
            }
        echo json_encode($car_gongchang);
    }
    //根据部门id,取业务员
    function get_emp_shop(){
        $list=null;
        $shop_id = Request::getVar('shop_id','post');
        $model = $this->createModel("zijia_linshi",dirname( __FILE__ ));
        $sql="select emp_id,emp_name from emp where emp_shopid={$shop_id} and emp_post in(3,4) AND emp_stutas=1";
        $list=$model->getListBySql_a($sql);
        echo json_encode($list);  
    }
    //修改派车备注
    function setBeizhu(){
        $model = $this->createModel("zijia_linshi",dirname( __FILE__ ));
        $pid = Request::getVar('pid','post');
        $paiche_specialRemarks = Request::getVar('paiche_specialRemarks','post');

        $object = new Object();
        $object->paiche_id=$pid;
        $object->paiche_specialRemarks=$paiche_specialRemarks;
        if($model->update($object,'paiche_id','paiche')){
            echo 1;
        }else{
            echo 2;
        }
        


    }
 

    //详细
    function zijia_detail()
    {
        $CommonFunction=new CommonFunction();
        $CommonFunction->getQuanxian($this->package."/zijia_detail");
        $zijia_xianshi=$CommonFunction->panduan_rule("zijia_xianshi");
        //不分部门查看身份证
        $bufen_shenfen=$CommonFunction->panduan_rule("bufen_shenfen");
        $uid = Request::getVar('uid','get');
        $search_startDate=Request::getVar('search_startDate','get');
        $search_endDate=Request::getVar('search_endDate','get');
        $model = $this->createModel("zijia_linshi",dirname( __FILE__ ));
        $busiInfo = $model->getBusinessInfo($uid,1);
        if($busiInfo['paiche_kehu']==2){
            $busiInfo['paiche_pintainame']=$CommonFunction->getDataY("select name from pintai where id={$busiInfo['paiche_pintaiid']}","name");
        }

        $busiInfo['paiche_dispatchTimes'] = $busiInfo['paiche_dispatchTimes']>0 ? date("Y-m-d H:i:s",$busiInfo['paiche_dispatchTimes']) : 0;

        if($busiInfo['paiche_jie']==3){
            if($zijia_xianshi!=1){
                $busiInfo['paiche_linkerPhone']=$model->hidchar($busiInfo['paiche_linkerPhone'],'','');
                $busiInfo['paiche_linker']=$model->hidchar('',$busiInfo['paiche_linker'],'');
               
            }
            if($zijia_xianshi!=1){
                 $busiInfo['paiche_linkerNum']=$model->hidchar('','',$busiInfo['paiche_linkerNum']);
            }
        }else{
            if ($_SESSION['shopid']!=$busiInfo['paiche_shopid']&&$busiInfo['paicheCounterShop']!=$_SESSION['shopid']&&$zijia_xianshi!=1){
                $busiInfo['paiche_linkerPhone']=$model->hidchar($busiInfo['paiche_linkerPhone'],'','');
                $busiInfo['paiche_linker']=$model->hidchar('',$busiInfo['paiche_linker'],'');
      
            }
            if($zijia_xianshi!=1){
                 $busiInfo['paiche_linkerNum']=$model->hidchar('','',$busiInfo['paiche_linkerNum']);
            }
        }
        

        $zhuangtai='';
        if($busiInfo['paiche_status']>0&&$busiInfo['settle_totalKm']<=0){
             $zhuangtai='ss';
        }else if($busiInfo['paiche_status']==0){
            $zhuangtai='yy';
        }else if($busiInfo['paiche_status']>0&&$busiInfo['settle_totalKm']>0){
            $zhuangtai='yh';
        }

        $busi_id =$busiInfo['paiche_type'];

        

        
        $charge_list=$model->getChargeList($uid);

        $item_list=$model->getItemList($uid);
        
        //收款记录
        $sql="Select a.*,b.bank_name,c.payment_name From `account_log` as a ".
             "Left Join `banks` as b On a.bank_id=b.bank_id ".
             "Left Join `payments` as c ON a.payments_id=c.payment_id ".
             "Where a.bill_type<>4 and a.bill_type<>1";


        
        $sql.=" and a.paiche_id={$uid}";
        
        $sql.=" Order by a.add_time";
        
        $account_list = $model->getListBySql($sql);
        $heji=0;
        for($i=0;$i<count($account_list);$i++){
            $heji=$heji+$account_list[$i]['money'];
        }
        //续租记录
        $fields="*";
        $continue_list=$model->getEmpList($fields," AND `continuerentPaicheId`={$uid}","continuerent");
         $k=0;
         $yj=0;
        for($i=0;$i<count($charge_list);$i++){
           if($charge_list[$i]['charge_name']=='押金'){
                $yj=$charge_list[$i]['conv_money'];
           } 
        }
        //换车记录
        $fields=" a.*,b.car_num as carA,c.car_num as carB";
        $leftjoin=" `changecar` AS a LEFT JOIN `car` AS b ON a.changecar_carA=b.car_id LEFT JOIN `car` AS c ON a.changecar_carB=c.car_id";
        //$change_list=$model->getEmpList($fields," AND a.changecarPaicheId='{$uid}'","",$leftjoin);
        $change_list=$model->getChangList($uid,"","ASC");
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
        //优惠记录
         $youhui_list=$model->getYouhui($uid);

        //回访记录
        $revisit_list=$model->getEmpList("*"," AND paiche_id='{$uid}'","paiche_revisit","");
        //报销记录
        $fields="a.*, c.emp_name";
        $leftjoin=" `baoxiao` AS a LEFT JOIN `emp` AS c ON a.baoxiao_emp=c.emp_id";
        $baoxiao_list=$model->getEmpList($fields," AND baoxiao_recycle!=1 AND baoxiao_item=1 AND baoxiaoPaicheId='{$uid}'","",$leftjoin);
        
        $object = new stdClass();
        $object->print=$CommonFunction->panduan_rule($this->package."/print");
         //订单的审核
        $object->zijia_shenghe=$CommonFunction->panduan_rule($this->package."/zijia_shenghe");
        $object->list = $busiInfo;

        //print_r($object->list['paiche_jie']);exit;
         $object->heji = $heji;
         $object->zhuangtai = $zhuangtai;
         $object->yj = $yj;
        
        $object->youhui_list = $youhui_list;
        $object->busitype = $busi_id;
        $object->chargelist = $charge_list;
        $object->itemlist = $item_list;
        $object->accountlist = $account_list;
        $object->continuelist = $continue_list;
        $object->changelist = $change_list;
        $object->routelist = $route_list;
        if(!empty($settlement_list)){
            $object->settlement_list = $settlement_list;
        }
        
        $object->month_list = $month_list;
        $object->outcarlist = $outcar_list;
        $object->breaklist = $break_list;
        $object->revisit_list = $revisit_list;
        $object->baoxiao_list = $baoxiao_list;
        $object->PAGETITLE=$model->getPageTitle($busi_id);
        $object->search_startDate=$search_startDate;
        $object->search_endDate=$search_endDate;
        
        $view  = $this->createView("operator/zijia_linshi/zijia_detail_a.html");
        $view->assign($object);
        $view->display();
    }


    //换车前验证身份
    function yanzheng_shenfen(){
        $CommonFunction=new CommonFunction();
        $CommonFunction->getQuanxian($this->package."/zijia_changecar");
        $pid = Request::getVar('pid','get');
        $sql="select * from paiche where paiche_id={$pid}";
        $data=$CommonFunction->getData($sql);
        $object = new stdClass();
        $object->data = $data;
        $object->pid = $pid;
        $view  = $this->createView("operator/zijia_linshi/yanzheng_shenfen.html");
        $view->assign($object);
        $view->display();
    }
     //临时自驾换车
    function zijia_changecar()
    {   
        $CommonFunction=new CommonFunction();
        $CommonFunction->getQuanxian($this->package."/zijia_changecar");

        $pid = Request::getVar('pid','get');

        
        $model = $this->createModel("zijia_linshi",dirname( __FILE__ ));
        $sql="select a.*,b.* from paiche as a left join car as b on a.paicheCar=b.car_id where a.paiche_id={$pid}";

        $paiche=$model->getListBySql_a($sql);
        $paiche=$paiche[0];
        //押金
        $sql_d="select * from paiche_charges where charge_id=1 and paiche_id={$pid}";
        $yajin=$model->getListBySql_a($sql_d);
        $paiche['yajin']=$yajin[0]['conv_money'];

        //租金
        $sql_e="select * from paiche_charges where charge_id=2 and paiche_id={$pid}";
        $zujin=$model->getListBySql_a($sql_e);
        $paiche['zujin']=$zujin[0]['conv_money'];



        $paiche['paiche_startDate']=date("Y-m-d H:i:s",$paiche['paiche_startDate']);
        $paiche['paiche_endDate']=date("Y-m-d H:i:s",$paiche['paiche_endDate']);
        $sql_a="select * from car_price where car_id={$paiche['paicheCar']} and plan_day=1";
        $car_price=$model->getListBySql_a($sql_a);



        $paiche['plan_rentamount']=$car_price[0]['plan_rentamount'];
        $paiche['plan_chaoshi']=$car_price[0]['plan_chaoshi'];
        $paiche['plan_chaokm']=$car_price[0]['plan_chaokm'];
        $paiche['plan_chaokms']=$car_price[0]['plan_chaokms'];
        $paiche['plan_chaokmy']=$car_price[0]['plan_chaokmy'];

        $sql_c="select * from changecar where changecarPaicheId=".$pid." order by changecar_times desc";
        
        $changecar=$model->getListBySql_a($sql_c);
        $paiche['stime']=$paiche['paiche_startDate'];
        if(!empty($changecar)){
            $paiche['stime']=date("Y-m-d H:i:s",$changecar[0]['changecar_times']);
        }


        
     
        $busiInfo = $model->getBusinessInfo($pid);
        
        $object = new stdClass();
        $object->paiche = $paiche;
          
        $object->pid = $pid;
        $object->busitype=$busiInfo["paiche_type"];
        $object->list = $busiInfo;
        $object->startdate=date("Y-m-d");
        $object->addtime=date("Y-m-d H:i:s");
        
        $view  = $this->createView("operator/zijia_linshi/zijia_changecar_a.html");
        $view->assign($object);
        $view->display();
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
        $view  = $this->createView("operator/zijia_linshi/quxiao.html");
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
        $object->paiche_jie=-3;
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
        $view  = $this->createView("operator/zijia_linshi/result.html");
        $view->assign($object);
        $view->display();
    }



    //临时自驾换车
    function zijiaChangecar_accept()
    {
        $pid = Request::getVar('pid','post');
        $model = $this->createModel("zijia_linshi",dirname( __FILE__ ));
        $empname=$model->getEmpName($_SESSION['a_uid']);
       

        $re=true;
        //换车时间
        $addtime = Request::getVar('etime','post');
        
        if ($re){
            $object = new Object();
            $object->paiche_id = $pid;
            $paicheCar=Request::getVar('car_ida','post');
            //换完的车子id
            $object->paicheCar=empty($paicheCar)? 0 : $paicheCar;
            
            $object4 = new Object();
            //派车id
            $object4->changecarPaicheId=$pid;
            //被换车辆
            $object4->changecar_carA=Request::getVar('car_id','post');
            //被换车辆起始公里数
            $object4->changecar_carAStartKilo=Request::getVar('skm','post');
            //结束公里数
            $object4->changecar_carAEndKilo=Request::getVar('ekm','post');
            //还完的车子
            $object4->changecar_carB=Request::getVar('car_ida','post');
            //目标车辆当前公里数
            $changecar_kiloBNow=Request::getVar('changecar_kiloBNow','post');
            $object4->changecar_kiloBNow=empty($changecar_kiloBNow)?0:$changecar_kiloBNow;
            //备注
            $object4->changecar_rentRemarks=Request::getVar('beizu','post');

            $object4->changecar_rentA=0;
            $object4->changecar_rentB=0;
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
            $object1->car_id=Request::getVar('car_id','post');
            $object1->car_nowKilo=Request::getVar('ekm','post');
            if ($model->update($object1,'car_id','car')){
                $re=true;
            }else{
                $re=false;
            }
        }
       
        
        //租金差价
        $zujin_a=Request::getVar('zujin_a','post');
        
        //如果小于0，做优惠，大于0做租金补差价
        if (!empty($zujin_a)){
                $object20 = new stdClass();
                $object20->conv_money=$zujin_a;
                $object20->charge_id=20;
                $object20->addtime =time();
                $object20->addemp=$_SESSION['user_id'];
                $object20->paiche_id=$pid;
                if ($model->store($object20,"paiche_charges")){
                    $re=true;
                }else{
                    $re=false;
                }
            
        }

        //税金
        $suijin=Request::getVar('suijin','post');
        
        if (!empty($suijin)){
                $object19 = new stdClass();
                $object19->conv_money=$suijin;
                $object19->charge_id=19;
                $object19->paiche_id=$pid;
                $object19->addtime =time();
                $object19->addemp=$_SESSION['user_id'];
                if ($model->store($object19,"paiche_charges")){
                    $re=true;
                }else{
                    $re=false;
                }
            
        }
        //押金
        $yajin_a=Request::getVar('yajin_a','post');
        if (!empty($yajin_a)){
            $sql15="update paiche_charges set conv_money={$yajin_a},back_money={$yajin_a} where paiche_id={$pid} and charge_id=1";
            if ($model->update_a($sql15)){
               
                $re=true;
            }else{
                $re=false;
            }
        }
       if($re){
            $CommonFunction=new CommonFunction();
            $CommonFunction->setAction("进行了换车，id为-".$pid);
       }
        
        $object = new stdClass();
        $object->result = $re ? "换车成功！":"换车失败，返回重试！";
        $view  = $this->createView("operator/zijia_linshi/result.html");
        $view->assign($object);
        $view->display(); 

       
    }
    //换车选车
    function selectemp()
    {
        //车牌
        $key=Request::getVar('key','get');
        //被换车辆
        $car_id=Request::getVar('car_id','get');
        
        $model  = $this->createModel("zijia_linshi",dirname( __FILE__ ));
        //上一辆车的数据
        $sql="select * from car_price where car_id={$car_id} and plan_day=1";
        $bcar=$model->getListBySql_a($sql);
        $bcar=$bcar[0];
       

        //目标车辆信息
        $sql_a="select * from car where  car_recycle=0 AND car_status!=2 AND car_status!=3 and car_id!={$car_id}";
        if (!empty($key)){
                $sql_a .=" AND (`car_num` like '%{$key}%' OR car_brand like '%{$key}%' OR car_type like '%{$key}%')";
            }
        $car=$model->getListBySql_a($sql_a);

        for($i=0;$i<count($car);$i++){
            $sql_b="select * from car_price where car_id={$car[$i]['car_id']} and plan_day=1";
            $car_b=$model->getListBySql_a($sql_b);
            $car_b=$car_b[0];
            $car[$i]["plan_chaokm"]=$car_b['plan_chaokm'];
            $car[$i]["plan_chaokms"]=$car_b['plan_chaokms'];
            $car[$i]["plan_chaokmy"]=$car_b['plan_chaokmy'];
            $car[$i]["plan_chaoshi"]=$car_b['plan_chaoshi'];
            $car[$i]["plan_rentamount"]=$car_b['plan_rentamount'];
            $car[$i]["plan_deposit1"]=$car_b['plan_deposit1'];

        }

        $car_list=null;
        for($i=0;$i<count($car);$i++){
            if($car[$i]['plan_chaokm']==$bcar['plan_chaokm']&&$car[$i]['plan_rentamount']>=$bcar['plan_rentamount']){
                $car[$i]['car_name']="苏D".$car[$i]['car_num']."-".$car[$i]['car_color']."-".$car[$i]['car_brand']."-".$car[$i]['car_type'];
                $car_list[]=$car[$i];
            }

        }
        
        $object = new stdClass();
        $object->empList=$car_list;
        $view  = $this->createView("operator/zijia_linshi/selectemp.html");
        $view->assign($object);
        $view->display();
    }

    //打印
    function busiprint()
    {
        $CommonFunction=new CommonFunction();
        $CommonFunction->getQuanxian($this->package."/print");
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
                $templatename="operator/zijia_linshi/printpact_a.html";
                $object->paiche_id = $uid;
                $object->paiche_pact = 1;
                break;
            case "outCar":
                $templatename="operator/zijia_linshi/printoutcar.html";
                $object->paiche_id = $uid;
                $object->paiche_outCar = 1;
                break;
            case "changecar":
                $templatename="operator/zijia_linshi/printchangecar_a.html";
                $object->changecar_id = $cid;
                $object->changecar_print = 1;
                break;
        }
        $model = $this->createModel("zijia_linshi",dirname( __FILE__ ));
        if (($className=='changecar' && $model->update($object,'changecar_id','changecar')) || ($className!='changecar' && $model->update($object,'paiche_id'))){ 
        }



        else
        {
            echo "打印处理出错！";
            exit();
        }
        $busiInfo = $model->getBusinessInfo($uid);
         //print_r($busiInfo['car_types']);exit;
        $sql_car="select * from car_price where car_id={$busiInfo['paicheCar']} and plan_day=1";
        $car_price=$model->getListBySql_a($sql_car);
        $car_price=$car_price[0];
        
        $busiInfo['plan_chaoshi']=$car_price['plan_chaoshi'];
        $busiInfo['plan_chaokm']=$car_price['plan_chaokm'];
        $busiInfo['plan_chaokms']=$car_price['plan_chaokms'];
        $busiInfo['plan_chaokmy']=$car_price['plan_chaokmy'];

        $sql_youhui="select * from paiche_youhui where paiche_id={$uid}";
        $youhui_list=$model->getListBySql_a($sql_youhui);
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
           
            
            
            //print_r($changeinfo);exit;
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

        $object->youhui_list = $youhui_list;
        
        
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
        //print_r($object->list["plan_chaokms"]);exit;
        $view  = $this->createView($templatename);
        $view->assign($object);
        $view->display();
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



    //临时自驾删除派车
    function zijia_cancel()
    {
        $forward = Request::getVar("forward");
        if(empty($forward))
        {
            $forward = "zijia_list.php=";
        }
        $uid = Request::getVar('uid','get');
        $model = $this->createModel("zijia_linshi",dirname( __FILE__ ));
        $re=true;
        $object2 = new Object();
        $object2->paiche_id = $uid;
        $object2->paiche_status = -2;
        $object2->paiche_jie = -3;
        if ($model->update($object2,"paiche_id","paiche")){
            //Components::save_admin_log("取消了ID为".$uid."的".$model->getPageTitle($busi_id));

             $this->redirect("zijia_list.php","取消派车单成功");
        }
    }

    //临时自驾违约
    function zijia_vio(){

        $pid = Request::getVar('pid','get');
        $model = $this->createModel("zijia_linshi",dirname( __FILE__ ));
        
        $charge_list=$model->getChargeList($pid," AND a.`have_in_money`>0");
        
        $paiche_rented =0;
        foreach($charge_list as $key=>$val)
        {
            if ($val['charge_name']=="租金" || $val['charge_name']=="续租金"||$val['charge_name']=="租金差价"){
                $paiche_rented += $val["have_in_money"];//已收租金
            }
        }
        //print_r($paiche_rented);exit;
        $object = new stdClass();
        $object->chargelist = $charge_list;
        $object->paiche_rented = $paiche_rented*0.8;//已收租金
        $object->pid = $pid;
        $busiInfo = $model->getBusinessInfo($pid);
        $object->list = $busiInfo;
        $object->nowtime = date("Y-m-d H:i:s");
        $view  = $this->createView("operator/zijia_linshi/zijia_vio_a.html");
        $view->assign($object);
        $view->display();
    }

    function zijiaVio_accept(){
       
        $pid = Request::getVar('pid','post');
        $model = $this->createModel("zijia_linshi",dirname( __FILE__ ));
        
        $re=true;
        $factendtime=Request::getVar('return_endDate','post');//实际还车时间
        $settle_vio=Request::getVar('settle_vio','post');//违约金

        $object = new Object();
        $object->paiche_id = $pid;//派车单的id
        $object->paiche_status=-1;//改变订单状态
        $object->paiche_jie=-2;
        $object2 = new Object();
        $object2->settlePaicheId = $pid;
        //违约金
        $object2->settle_vio = empty($settle_vio)? 0 : $settle_vio;
        //违约原因
        $object2->settle_vioreason =Request::getVar('settle_vioreason','post');
        //还车的时间
        $object2->settle_endDate=empty($factendtime)? time():strtotime($factendtime);
        
        if ($model->update($object,'paiche_id') && $model->update($object2,'settlePaicheId','settle')){

            
             $this->redirect("zijia_detail.php?uid={$pid}","订单违约处理成功！");
        }else{
             $this->redirect("zijia_detail.php?uid={$pid}","订单违约处理失败，返回重试！");
        }
        
        
    }







    //临时自驾续租
     function zijia_continuecar()
    {
        $CommonFunction=new CommonFunction();
        $CommonFunction->getQuanxian($this->package."/zijia_continuecar");
        $pid = Request::getVar('pid','get');
        $model = $this->createModel("zijia_linshi",dirname( __FILE__ ));
        $sql="select a.*,b.*,c.* from paiche as a left join car_price as b on a.paicheCar=b.car_id left join car as c on a.paicheCar=c.car_id where b.plan_day=1 and a.paiche_id={$pid}";
        $busiInfo = $model->getListBySql_a($sql);
        $busiInfo=$busiInfo[0];
        $busiInfo['ytianshu']=($busiInfo['paiche_endDate'] - $busiInfo['paiche_startDate']) / 86400;
        $busiInfo['paiche_startDate']=date("Y-m-d H:i:s",$busiInfo['paiche_startDate']);
        $busiInfo['paiche_endDate']=date("Y-m-d H:i:s",$busiInfo['paiche_endDate']);

        $car_gongchang=0;
        $sql="select * from paiche where paiche_jie=1 and paicheCar={$busiInfo['car_id']} and paiche_type=3";
        $changqi_zijia=$model->getListBySql_a($sql);
        $sql="select * from paiche where paiche_recycle!=1 AND (paiche_status=0 or paiche_status=1) AND paicheCar={$busiInfo['car_id']}  AND paiche_type IN (4,5) AND paiche_startDate<=".time(). " AND paiche_endDate>=".time();
        $changqi=$model->getListBySql_a($sql);
        if(count($changqi_zijia)+count($changqi)>0){
            $car_gongchang=1;
        }else{
            $car_gongchang=0;
        }
        $busiInfo['car_gongchang']=$car_gongchang;

        $object = new stdClass();
        $object->pid = $pid;
        $object->list = $busiInfo;

        $view  = $this->createView("operator/zijia_linshi/zijia_continuecar_a.html");
        $view->assign($object);
        $view->display();
    }


    function zijiaContinue_accept()
    {   
        //派车单的id
        $pid = Request::getVar('pid','post');
        $model = $this->createModel("zijia_linshi",dirname( __FILE__ ));
        $empname=$model->getEmpName($_SESSION['a_uid']);
        //续租前结束时间
        $paiche_endDate = Request::getVar('paiche_endDate','post');
        //续租后结束时间
        $paiche_endDate_a = Request::getVar('paiche_endDate_a','post');
        //续租费用
        $money = Request::getVar('money','post');
        //备注
        $beizhu = Request::getVar('beizhu','post');

        $re=true;
        
        $object = new Object();
        $object->paiche_endDate=strtotime($paiche_endDate_a);
        $object->paiche_id = $pid;
        if ($model->update($object,'paiche_id')){
        }else{
            $re=false;
        }

        //续租费用
        if($re){
            $object1 = new Object();
            $object1->paiche_id = $pid;
            $object1->charge_id = 5;
            $object1->addtime =time();
            $object1->addemp=$_SESSION['user_id'];
            $object1->conv_money=$money;
            $object1->continuerent_start=strtotime($paiche_endDate);
            $object1->continuerent_end=strtotime($paiche_endDate_a);
            if ($model->store($object1,"paiche_charges")){                           
            }else{
                $re=false;
            }
        }

        //税金
        $suijin = Request::getVar('suijin','post');
        if($re){
            if(!empty($suijin)){
                $object19 = new Object();
                $object19->addtime =time();
                $object19->paiche_id = $pid;
                $object19->charge_id = 19;
                $object19->addemp=$_SESSION['user_id'];
                $object19->conv_money=$suijin;
                if ($model->store($object19,"paiche_charges")){                           
                }else{
                    $re=false;
                }
            }
           
        }
        //税金
        $jieri = Request::getVar('jieri','post');
        if($re){
            if(!empty($jieri)){
                $object19 = new Object();
                $object19->addtime =time();
                $object19->paiche_id = $pid;
                $object19->charge_id = 24;
                $object19->addemp=$_SESSION['user_id'];
                $object19->conv_money=$jieri;
                if ($model->store($object19,"paiche_charges")){                           
                }else{
                    $re=false;
                }
            }
           
        }
        //续租记录
        if($re){
            $object4 = new Object();
            $object4->continuerentPaicheId=$pid;
           
            //$object4->continuerent_days=$xtianshu;
            $object4->continuerent_start=strtotime($paiche_endDate);
            $object4->continuerent_end=strtotime($paiche_endDate_a);
            
            $object4->continuerent_rentRemarks=$beizhu;
            //操作人
            $object4->continuerentDispatchMan=$empname;
            $object4->continuerent_times=time();
            if ($model->store($object4,"continuerent")){                           
            }else{
                $re=false;
            }
        }
        if($re){
             $CommonFunction=new CommonFunction();
             $CommonFunction->setAction("续租了派车单，id为-".$pid);
        }

        $object = new stdClass();
        $object->result = $re ? "续租成功！":"续租失败，返回重试！";
        $view  = $this->createView("operator/zijia_linshi/result.html");
        $view->assign($object);
        $view->display(); 

    }
    //还车
    function zijia_returncar()
    {
        $CommonFunction=new CommonFunction();
        $CommonFunction->getQuanxian($this->package."/zijia_returncar");
        $pid = Request::getVar('pid','get');
        $sql_den="select paiche_endDate from paiche where paiche_id={$pid}";
        $paiche_endDate=$CommonFunction->getDataY($sql_den,"paiche_endDate");
       
        if($paiche_endDate+60*60*24<time()){
            print_r("当前车辆超时已超过24小时，请先续租！");exit;
        }
        
        $model = $this->createModel("zijia_linshi",dirname( __FILE__ ));
        $sql="select a.*,b.*,c.*,d.* from paiche as a left join settle as b on a.paiche_id=b.settlePaicheId left join car as c on a.paicheCar=c.car_id left join car_price as d on a.paicheCar=d.car_id where a.paiche_id={$pid} and d.plan_day=1";
        $busiInfo=$model->getListBySql_a($sql);
        $busiInfo=$busiInfo[0];
        $busiInfo['paiche_startDate_All']=date("Y-m-d H:i:s",$busiInfo['paiche_startDate']);
        $busiInfo['paiche_endDate_All']=date("Y-m-d H:i:s",$busiInfo['paiche_endDate']);
        //print_r($busiInfo);exit;
        //$busiInfo = $model->getBusinessInfo($pid);
        //费用详细
        $charge_list=$model->getChargeList($pid," AND a.charge_id<>1 AND (a.`conv_money`<>0 or a.have_in_money <>0)");
        //优惠
        $youhui_list=$model->getYouhui($pid);
        $item_list=$model->getItemList($pid);
        //换车记录
        $fields="changecar_carAStartKilo,changecar_times,changecar_carAEndKilo,changecar_kiloBNow";
        $Changecar_list=$model->getEmpList($fields," AND changecarPaicheId='{$pid}'","changecar");

        //换车行驶公里
        $totalChangeCarKilo=0;

        $changecar_times=$busiInfo['paiche_startDate'];
        //换车公里数相加
        if ($Changecar_list){
            foreach($Changecar_list as $key=>$value){
                $totalChangeCarKilo+=($Changecar_list[$key]["changecar_carAEndKilo"]-$Changecar_list[$key]["changecar_carAStartKilo"]);
                $changecar_times=$Changecar_list[$key]["changecar_times"];
               
            }
        }

        //使用时间
        $shiyong_time=$this->timediff($busiInfo['paiche_endDate'],$busiInfo['paiche_startDate']);
        //实际使用天数
        $shiyong_day=$shiyong_time['day'];
        $chaogongli_text=$shiyong_day."天，";
        //当前车辆限制公里总数

        $xianzhikms=0;
        if($busiInfo['plan_chaokm']=='y'){
            $xianzhikms=$shiyong_day*$busiInfo['plan_chaokms'];
            $chaogongli_text.="限".$busiInfo['plan_chaokms']."公里/天，共".$xianzhikms."公里，".$busiInfo['plan_chaokmy']."元/公里";
        }else{
            $chaogongli_text.="车辆不限公里数";
        }
        //超时
        $chaoshi=0;
        $chaoshi_xiaoshi=0;
        $chaoshi_text="还车时间未超半小时，不收超时费！";
        if(time()>($busiInfo['paiche_endDate']+30*60)){
            $chaoshi=$this->timediff(time(),$busiInfo['paiche_endDate']+30*60);

            $chaoshi_xiaoshi=$chaoshi['day']*24+$chaoshi['hour'];
            if($chaoshi['min']>30){
                $chaoshi_xiaoshi+=1;
            }else{
                $chaoshi_xiaoshi+=0.5;
            }
            //print_r($chaoshi_xiaoshi);exit;
            $chaoshi_text="超时超过".$chaoshi_xiaoshi."小时,每小时".$busiInfo['plan_chaoshi']."元";
        }

        
        

        $chaoshi_danjia=$busiInfo['plan_chaoshi'];
        
        //超时费用
        $chaoshi_feiyong=$chaoshi_xiaoshi*$busiInfo['plan_chaoshi'];
        if($chaoshi_feiyong>$busiInfo['plan_rentamount']){
            $chaoshi_feiyong=$busiInfo['plan_rentamount'];
        }
        

        $object = new stdClass();
        
        $object->youhui_list = $youhui_list;
        $object->list = $busiInfo;
        
        
        $object->changecar_times = date("Y-m-d H:i:s",$changecar_times);

        $object->chargelist = $charge_list;

        $object->chaoshi_text = $chaoshi_text;
        $object->chaoshi_feiyong = $chaoshi_feiyong;
        $object->chaogongli_text = $chaogongli_text;
        $object->shiyong_day = $shiyong_day;
        
        //$object->backlist = $back_list;
        $object->itemlist = $item_list;
        $object->totalChangeCarKilo = $totalChangeCarKilo;
        $object->pid = $pid;
        $object->shoplist=$model->getEmpList("`shop_id`,`shop_name`","","shop");
        //还车时间（当前时间）
        $object->nowtime = date("Y-m-d H:i:s");
        $object->nowtime2 = time();
        //超时时间两个时间戳相减获得天，时间
        $object->overtime = $this->timediff(time(),$busiInfo['paiche_endDate']);
        
       
        $view  = $this->createView("operator/zijia_linshi/zijia_returncar_a.html");

        $view->assign($object);
        $view->display();

        
    }



    function returncar_accept()
    {
        //派车id
        $pid = Request::getVar('pid','post');
        $model = $this->createModel("zijia_linshi",dirname( __FILE__ )); 
        //操作人名字       
        $empname=$model->getEmpName($_SESSION['a_uid']);
        $re=true;
        //实际还车时间
        $factendtime=Request::getVar('return_endDate','post');
        
        $object = new Object();

        $object->settlePaicheId = $pid;
        //车辆开始公里数
        $object->settle_startKm=Request::getVar('skm','post');
         //车辆结束公里数
        $object->settle_endKm=Request::getVar('ekm','post');
        //共计行驶多少公里
        $object->settle_totalKm=Request::getVar('sum_km','post');
        //结算公里数
        $object->settle_totalcalKm=Request::getVar('sum_kma','post');

        /*超时
        $settle_overTime=Request::getVar('settle_overTime','post');
        
        $object->settle_overTime=empty($settle_overTime)?0:$settle_overTime;
        //超公里费用
        $overKmMoney=Request::getVar('overKmMoney','post');
        $object->settle_overKmMoney=empty($overKmMoney)?0:$overKmMoney;
        //超时费用
        $overTimeMoney=Request::getVar('overTimeMoney','post');
        $object->settle_overTimeMoney=empty($overTimeMoney)?0:$overTimeMoney;

        */
        

        //实际还车时间
        $object->settle_endDate=empty($factendtime)? time():strtotime($factendtime);
        
        if ($model->update($object,'settlePaicheId','settle')){
        }else{
            $re=false;
        }
       
        $object_paiche = new Object();
        $object_paiche->paiche_jie=2;
        $object_paiche->paiche_id=$pid;
        if ($model->update($object_paiche,'paiche_id','paiche')){
        }else{
            $re=false;
        }

        //更新车辆最新公里数
        if ($re){
            $object1 = new stdClass();
            $object1->car_id=Request::getVar('paicheCar','post');
            $object1->car_nowKilo=Request::getVar('ekm','post');
            if ($model->update($object1,'car_id','car')){
            }
            else{
                $re=false;
            }
        }



        if ($re){
            //新增收费项目
            $chaoshi_feiyong=Request::getVar('chaoshi_feiyong','post');
            //print_r($chaoshi_feiyong);exit;
            if(!empty($chaoshi_feiyong)){
                $object4 = new Object();
                $object4->paiche_id = $pid;
                $object4->charge_id = 4;
                $object4->addtime =time();
                $object4->addemp=$_SESSION['user_id'];
                $object4->conv_money=$chaoshi_feiyong;
                if ($model->store($object4,"paiche_charges")){                           
                }else{
                    $re=false;
                }
            }

             $suijin=Request::getVar('suijin','post');
            //print_r($chaoshi_feiyong);exit;
            if(!empty($suijin)){
                $object19 = new Object();
                $object19->paiche_id = $pid;
                $object19->charge_id = 19;
                $object19->conv_money=$suijin;
                $object19->addtime =time();
                $object19->addemp=$_SESSION['user_id'];
                if ($model->store($object19,"paiche_charges")){                           
                }else{
                    $re=false;
                }
            }
            $chao_money=Request::getVar('chao_money','post');
            if(!empty($chao_money)){
                $object15 = new Object();
                $object15->paiche_id = $pid;
                $object15->charge_id = 15;
                $object15->addtime =time();
                $object15->addemp=$_SESSION['user_id'];
                $object15->conv_money=$chao_money;
                if ($model->store($object15,"paiche_charges")){                           
                }else{
                    $re=false;
                }
            }    
        }
        if($re){
             $CommonFunction=new CommonFunction();
             $CommonFunction->setAction("还车了派车单，id为-".$pid);
        }

        $object = new stdClass();
        $object->result = $re ? "还车成功！":"还车失败，返回重试！";
        $view  = $this->createView("operator/zijia_linshi/result.html");
        $view->assign($object);
        $view->display(); 
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
    //根据身份证验证是否刷过身份证，返回手机号码




    function getphone(){
        $list=null;
        $paiche_linkerNum = Request::getVar('paiche_linkerNum','post');
        $paiche_linker = Request::getVar('paiche_linker','post');
        $model = $this->createModel("zijia_linshi",dirname( __FILE__ ));
        $sql="select * from paiche where paiche_linkerNum='{$paiche_linkerNum}' and paiche_linker='{$paiche_linker}'";
        $list_a=$model->getListBySql_a($sql);
        if(count($list_a)>0){
            $index=0;
            for($i=count($list_a)-1;$i>=0;$i--){
                if(!empty($list_a[$i]['paiche_linkerPicture'])){
                    $list['paiche_linkerPhone']=$list_a[$i]['paiche_linkerPhone'];
                    $list['paiche_linkerPicture']=$list_a[$i]['paiche_linkerPicture'];
                    $list['paiche_linkerAdd']=$list_a[$i]['paiche_linkerAdd'];
                    $list['paiche_linker']=$list_a[$i]['paiche_linker'];
                    $list['paiche_linkerNum']=$list_a[$i]['paiche_linkerNum'];
                    $index=$index+1;
                    break;
                }
            }

            if($index>0){
                $list['req']=1;
                for($i=0;$i<count($list_a);$i++){
                    $list['dianhua'][]=$list_a[$i]['paiche_linkerPhone'];
                }
                $list['dianhua']=array_unique($list['dianhua']);
                $list['dianhua'] = array_values($list['dianhua']);
            }else{
                $list['req']=0;
            }
        }else{
            $list['req']=0;
        }
        echo json_encode($list);
    }

    //发送验证码
    function getYzm(){
        $list=null;
        $mobile = Request::getVar('mobile','post');
        $rdm=rand(100000, 999999);

        $content = $this->test($mobile,$rdm); //请求发送短信
        if($content){
            $list['req']=0;
            $list['rdm']=$rdm;
            
        }else{
            //返回内容异常，以下可根据业务逻辑自行修改
             $list['req']=1;
        }
        echo json_encode($list);

    }
    

    function test($mobile,$rdm){
        $ak = "7c83e75d03384b1496de992ec2fc9a03";  // AccessKeyId
        $sk = "a58e732c9aa548b3bdbee672faf6d009";  // SecretAccessKey
        $method = "POST";
        $host = "sms.bj.baidubce.com";
        $uri = "/bce/v2/message";
        $params = array();
        date_default_timezone_set('UTC');
        $timestamp = new DateTime();
        $expirationInSeconds = 60;
        $authorization = generateAuthorization($ak, $sk, $method, $host, $uri, $params, $timestamp, $expirationInSeconds);
        // 第二步：构造HTTP请求的header、body等信息
        $url = "http://{$host}{$uri}";
        $timeStr = $timestamp->format("Y-m-d\TH:i:s\Z");
        $head =  array(
        "Content-Type: application/json",
        "Authorization:{$authorization}",
        "x-bce-date:{$timeStr}",
        );

        $body = array(
                    "invokeId" => "bJC8WbBm-unDL-i7q2",//签名ID
                    "phoneNumber" => "{$mobile}",   //电话号码
                    "templateCode" => "smsTpl:767fa37d-8de2-4885-b77e-7633a50b9b95",//模板ID
                    "contentVar" => array (
                        "code" => "{$rdm}"
                    )
                            
        );

        $bodyStr = json_encode($body);
        // 第三步：发送HTTP请求，并输出响应信息。
        $curlp = curl_init();
        //curl_setopt($curlp, CURLOPT_POST, 1);
        curl_setopt($curlp, CURLOPT_URL, $url);
        curl_setopt($curlp, CURLOPT_HTTPHEADER, $head);
        curl_setopt($curlp, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curlp, CURLOPT_POSTFIELDS, $bodyStr);
        curl_setopt($curlp, CURLINFO_HEADER_OUT, 1);
        curl_setopt($curlp, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($curlp);
        $request = curl_getinfo($curlp, CURLINFO_HEADER_OUT);
        $status = curl_getinfo($curlp, CURLINFO_HTTP_CODE);
        curl_close($curlp);

        $response=json_decode($response);
        if($response->code==1000){
            return true;
        }else{
            return false;
        }
        
        
    }



    function getRenlian(){
        $url = 'https://aip.baidubce.com/oauth/2.0/token';
        $post_data['grant_type']       = 'client_credentials';
        $post_data['client_id']      = 'dg6K2lFIA2TkyGqhiG8nOXkP';
        $post_data['client_secret'] = 'Gve28EP945xfqD9wPX5PKzTscVleI5ej';
        $o = "";
        foreach ( $post_data as $k => $v ) 
        {
            $o.= "$k=" . urlencode( $v ). "&" ;
        }
        $post_data = substr($o,0,-1);
        $res = $this->request_post($url, $post_data);
       
        
      
        $idcard = Request::getVar('idcard','post');
        $realname = Request::getVar('realname','post');
        $image = Request::getVar('image','post');
         
       
        $token = $res->access_token;
      
        $url1 = 'https://aip.baidubce.com/rest/2.0/face/v3/person/verify?access_token=' . $token;
        $bodys = array(
            'image' => $image,
            'image_type' => 'BASE64',
            'id_card_number' => $idcard,
            'name' => $realname
        );
        $bodyStr = json_encode($bodys);
        $res_a = $this->request_post($url1, $bodyStr);
        echo json_encode($res_a->result->score);
    }
    
    function juhecurl($url,$params=false,$ispost=0){
        $httpInfo = array();
        $ch = curl_init();
        
        curl_setopt( $ch, CURLOPT_HTTP_VERSION , CURL_HTTP_VERSION_1_1 );
        curl_setopt( $ch, CURLOPT_USERAGENT , 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.22 (KHTML, like Gecko) Chrome/25.0.1364.172 Safari/537.22' );
        curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT , 30 );
        curl_setopt( $ch, CURLOPT_TIMEOUT , 30);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER , true );
        if( $ispost )
        {
            curl_setopt( $ch , CURLOPT_POST , true );
            curl_setopt( $ch , CURLOPT_POSTFIELDS , $params );
            curl_setopt( $ch , CURLOPT_URL , $url );
        }
        else
        {
            if($params){
                curl_setopt( $ch , CURLOPT_URL , $url.'?'.$params );
            }else{
                curl_setopt( $ch , CURLOPT_URL , $url);
            }
        }
        $response = curl_exec( $ch );
        if ($response === FALSE) {
            //echo "cURL Error: " . curl_error($ch);
            return false;
        }
        $httpCode = curl_getinfo( $ch , CURLINFO_HTTP_CODE );
        $httpInfo = array_merge( $httpInfo , curl_getinfo( $ch ) );
        curl_close( $ch );
        return $response;
    }



    //增加其他费用
    function zijia_qita(){
        $CommonFunction=new CommonFunction();
        $CommonFunction->getQuanxian($this->package."/zijia_qita");
        //派车id
        $pid = Request::getVar('pid','get');
        $model = $this->createModel("zijia_linshi",dirname( __FILE__ ));
        $sql="select * from paiche where paiche_id={$pid}";
        $paiche=$model->getListBySql_a($sql);

        $object = new stdClass();
        $object->pid=$pid;
        $object->paiche=$paiche[0];
        $view  = $this->createView("operator/zijia_linshi/zijia_qita.html");
        $view->assign($object);
        $view->display(); 
       
    }
    
    function zijia_qitaaccept(){
        $model = $this->createModel("zijia_linshi",dirname( __FILE__ ));

        $pid = Request::getVar('pid','post');

        $re=true;
        $qingxi=Request::getVar('qingxi','post');
        if($qingxi>0){
            $object6 = new Object();
            $object6->paiche_id = $pid;
            $object6->charge_id = 6;
            $object6->addtime =time();
            $object6->addemp=$_SESSION['user_id'];
            $object6->conv_money=$qingxi;
            if ($model->store($object6,"paiche_charges")){                           
            }else{
                $re=false;
            }
        }    

        $weixiu=Request::getVar('weixiu','post');
        if($weixiu>0){
            $object7 = new Object();
            $object7->paiche_id = $pid;
            $object7->charge_id = 7;
            $object7->addtime =time();
            $object7->addemp=$_SESSION['user_id'];
            $object7->conv_money=$weixiu;
            if ($model->store($object7,"paiche_charges")){                           
            }else{
                $re=false;
            }
        }

        $xingshi=Request::getVar('xingshi','post');
        if($xingshi>0){
            $object23 = new Object();
            $object23->paiche_id = $pid;
            $object23->charge_id = 23;
            $object23->addtime =time();
            $object23->addemp=$_SESSION['user_id'];
            $object23->conv_money=$xingshi;
            if ($model->store($object23,"paiche_charges")){                           
            }else{
                $re=false;
            }
        }




        $fuwu=Request::getVar('fuwu','post');
        
        if($fuwu>0){
            $object22 = new Object();
            $object22->paiche_id = $pid;
            $object22->charge_id = 22;
            $object22->addtime =time();
            $object22->addemp=$_SESSION['user_id'];
            $object22->conv_money=$fuwu;
            if ($model->store($object22,"paiche_charges")){                           
            }else{
                $re=false;
            }
        }

       

        $suijin=Request::getVar('suijin','post');
        if($suijin>0){
            $object19 = new Object();
            $object19->paiche_id = $pid;
            $object19->charge_id = 19;
            $object19->addtime =time();
            $object19->addemp=$_SESSION['user_id'];
            $object19->conv_money=$suijin;
            if ($model->store($object19,"paiche_charges")){                           
            }else{
                $re=false;
            }
        } 

        $yaoshi=Request::getVar('yaoshi','post');
        if($yaoshi>0){
            $object21 = new Object();
            $object21->paiche_id = $pid;
            $object21->charge_id = 21;
            $object21->addtime =time();
            $object21->addemp=$_SESSION['user_id'];
            $object21->conv_money=$yaoshi;
            if ($model->store($object21,"paiche_charges")){                           
            }else{
                $re=false;
            }
        } 

        $qita=Request::getVar('qita','post');
        if($qita>0){
            $object10 = new Object();
            $object10->paiche_id = $pid;
            $object10->charge_id = 10;
            $object10->addtime =time();
            $object10->addemp=$_SESSION['user_id'];
            $object10->conv_money=$qita;
            if ($model->store($object10,"paiche_charges")){                           
            }else{
                $re=false;
            }
        }   

        $shouche=Request::getVar('shouche','post');
        if($shouche>0){
            $object11 = new Object();
            $object11->paiche_id = $pid;
            $object11->charge_id = 11;
            $object11->conv_money=$shouche;
            $object11->addtime =time();
            $object11->addemp=$_SESSION['user_id'];
            if ($model->store($object11,"paiche_charges")){                           
            }else{
                $re=false;
            }
        }    

        

        $shuaka=Request::getVar('shuaka','post');
        if($shuaka>0){
            $object17 = new Object();
            $object17->paiche_id = $pid;
            $object17->charge_id = 17;
            $object17->addtime =time();
            $object17->addemp=$_SESSION['user_id'];
            $object17->conv_money=$shuaka;
            if ($model->store($object17,"paiche_charges")){                           
            }else{
                $re=false;
            }
        } 
        if($re){
            $CommonFunction=new CommonFunction();
            $CommonFunction->setAction("添加了其他费用id为-".$pid);
        }
        $object = new stdClass();
        $object->result = $re ? "增加费用成功！":"增加费用失败，返回重试！";
        $view  = $this->createView("operator/zijia_linshi/result.html");
        $view->assign($object);
        $view->display();     


    }
    //优惠
    function zijia_youhui(){
         //派车id

        $CommonFunction=new CommonFunction();
        $CommonFunction->getQuanxian($this->package."/zijia_youhui");

        $pid = Request::getVar('pid','get');
        $model = $this->createModel("zijia_linshi",dirname( __FILE__ ));
        //$sql_paiche="select * from paiche where paiche_id={$pid}";
        //$paiche=$model->getListBySql_a($sql_paiche);

        $sql="select * from paiche_charges where paiche_id={$pid} and charge_id!=1";

        $paiche_charges=$model->getListBySql_a($sql);

        $yinshou=0;$yishou=0;

        for($i=0;$i<count($paiche_charges);$i++){
            $yinshou=$yinshou+$paiche_charges[$i]['conv_money'];
        }


        $sql_a="select * from paiche_youhui where paiche_id={$pid}";

        $paiche_youhui=$model->getListBySql_a($sql_a);

        $yinyouhui=0;

        for($i=0;$i<count($paiche_youhui);$i++){
            $yinyouhui=$yinyouhui+$paiche_youhui[$i]['youhui_mone'];
        }
        //能够优惠多少
        $nengyouhui=($yinshou-$yinyouhui);
        
        $object = new stdClass();
        $object->pid=$pid;
        //$object->paiche=$paiche[0];
        $object->nengyouhui=$nengyouhui;
        $view  = $this->createView("operator/zijia_linshi/zijia_youhui.html");
        $view->assign($object);
        $view->display(); 
    }

    function zijia_youhuiaccept(){
        $model = $this->createModel("zijia_linshi",dirname( __FILE__ ));
        $pid = Request::getVar('pid','post');
        $youhui_mone = Request::getVar('youhui_mone','post');
        $youhui_liyou = Request::getVar('youhui_liyou','post');
        $object = new Object();
        $object->paiche_id=$pid;
        $object->youhui_mone=$youhui_mone;
        $object->youhui_liyou=$youhui_liyou;
        $object->youhui_name="租车优惠";
        $object->youhui_addtime=time();
        $object->youhui_empid=$_SESSION['user_id'];
        $re=true;
        if ($model->store($object,"paiche_youhui")){ 
            $re=true;
             //$this->redirect("zijia_detail.php?uid={$pid}","添加成功");                          
        }else{
            $re=false;
            //$this->redirect("zijia_detail.php?uid={$pid}","添加失败"); 
        }
        if($re){
            $CommonFunction=new CommonFunction();
            $CommonFunction->setAction("租车优惠id为-".$pid);
        }

        $object = new stdClass();
        $object->result = $re ? "优惠成功！":"优惠失败，返回重试！";
        $view  = $this->createView("operator/zijia_linshi/result.html");
        $view->assign($object);
        $view->display();

    }
    function xiaofei(){
        $CommonFunction=new CommonFunction();
        $CommonFunction->getQuanxian($this->package."/xiaofei");
        //print_r("expression");exit;
        $model = $this->createModel("zijia_linshi",dirname( __FILE__ ));

        $pid = Request::getVar('pid','get');
         $sql="select * from paiche where paiche_id={$pid}";
        $paiche=$model->getListBySql_a($sql);

        $sql_a="select a.*,b.charge_name from paiche_charges as a left join charges as b on a.charge_id=b.charge_id where a.paiche_id={$pid}";
        $feiyong=$model->getListBySql_a($sql_a);
        $sql_b="select * from paiche_youhui where paiche_id={$pid}";
        $youhui=$model->getListBySql_a($sql_b);

        $object = new stdClass();
        $object->feiyong=$feiyong;
        $object->paiche=$paiche[0];
        $object->youhui=$youhui;
        $view  = $this->createView("operator/zijia_linshi/xiaofei.html");
        $view->assign($object);
        $view->display(); 

    }
    function zijia_shouce(){
        $view  = $this->createView("operator/zijia_linshi/zijia_shouce.html");
        $view->display(); 
    }
    function getdiaoche(){
        $shopid=$_SESSION['shopid'];
        $model = $this->createModel("zijia_linshi",dirname( __FILE__ ));
        $sql="select a.paiche_id,a.paiche_contractNum,a.paiche_linker,a.paiche_startDate,a.paiche_endDate,b.car_num,c.shop_name  from paiche as a left join car as b on a.paicheCar2=b.car_id left join shop as c on a.paiche_shopid=c.shop_id where (a.paiche_shopid={$shopid} or a.paicheCounterShop={$shopid}) and paiche_type=1 and paiche_jie=-1 and a.paiche_startDate>".time()." order by a.paiche_startDate asc LIMIT 0,10";
        $list=$model->getListBySql_a($sql);
        
        for($i=0;$i<count($list);$i++){
            $list[$i]['paiche_startDate']=date('Y-m-d H:i:s', $list[$i]['paiche_startDate']);

            $list[$i]['paiche_endDate']=date('Y-m-d H:i:s', $list[$i]['paiche_endDate']);
        }
        $total=count($total);
        echo json_encode(array('status'=>0,'totalRecords'=>$total, 'data'=>$list));
    }

    
    function test1(){
        $url = 'http://aip.baidubce.com/oauth/2.0/token';
        $post_data['grant_type']       = 'client_credentials';
        $post_data['client_id']      = 'dg6K2lFIA2TkyGqhiG8nOXkP';
        $post_data['client_secret'] = 'Gve28EP945xfqD9wPX5PKzTscVleI5ej';
        $o = "";
        foreach ( $post_data as $k => $v ) 
        {
            $o.= "$k=" . urlencode( $v ). "&" ;
        }
        $post_data = substr($o,0,-1);
        $res = $this->request_post($url, $post_data);
        var_dump($res->access_token);
       
    }



    function request_post($url = '', $param = '') {
        if (empty($url) || empty($param)) {
            return false;
        }
        $postUrl = $url;
        $curlPost = $param;
        $curl = curl_init();//初始化curl
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
       
        curl_setopt($curl, CURLOPT_URL,$postUrl);//抓取指定网页
        curl_setopt($curl, CURLOPT_HEADER, 0);//设置header
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_POST, 1);//post提交方式
        curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPost);
        $data = curl_exec($curl);//运行curl
        curl_close($curl);
        $data=json_decode($data);
        return $data;
    }

    //根据身份证号码，活动id，查询客户是否可以使用该活动
    function gethuodong_a(){

        $model = $this->createModel("zijia_linshi",dirname( __FILE__ ));
        $paiche_linkerNum = Request::getVar('paiche_linkerNum','post');
        $huodong_id = Request::getVar('huodong_id','post');
        $addtime = strtotime(Request::getVar('paiche_startDate','post'));
        $endtime = strtotime(Request::getVar('paiche_endDate','post'));

        //$paiche_linkerNum = "32128119871206619X";
        //$huodong_id = "2";
        //$addtime = strtotime("2019-10-18 12:00:00");
        //$endtime = strtotime("2019-10-20 12:00:00");


        $req['re']=1;
        $sql="select * from huodong where id={$huodong_id}";
        $huodong=$model->getListBySql_a($sql);
        $huodong=$huodong[0];

        if($addtime<$huodong["addtime"]||$addtime>$huodong["endtime"]){
            $req['re']=3;
        }
        $day=0;
        for($i=0;$i<=$huodong['tianshu'];$i++){
            if(($addtime+$i*60*60*24)<$huodong['endtime']){
                $day=$i;
            }
        }
        $huodong['tianshu']=$day;

        $sql="select * from paiche_huodong where huodong_id={$huodong_id} and paiche_linkerNum='{$paiche_linkerNum}'";
        $list_a=$model->getListBySql_a($sql);
        if(count($list_a)>0){
            $req['re']=2;
        }
        $h_id=explode(",",$huodong['h_id']);
        $h_id[]=$huodong_id;
        $req['huodong']=$huodong;
            for($i=0;$i<count($h_id);$i++){
                if($h_id[$i]>0){
                   $sql="select * from paiche_huodong where huodong_id={$h_id[$i]} and paiche_linkerNum='{$paiche_linkerNum}'";
                    $list=$model->getListBySql_a($sql);
                    if(count($list)>0){
                        $req['re']=2;
                        break;
                    } 
                }
                
            }
        //print_r($req);exit;
        echo json_encode($req);
    }
    //临时代驾业绩表
    function daijia_yeji(){

        $CommonFunction=new CommonFunction();
        $CommonFunction->getQuanxian($this->package."/daijia_yeji");

        
        $startdate = strtotime(Request::getVar('paiche_startDate','post'));
        $enddate = strtotime(Request::getVar('paiche_endDate','post'));
        if(!$startdate){
            $startdate=strtotime(date('Y-m-01'));
        }
        //print_r($startdate);exit;
        if(!$enddate){
            $enddate=time();
        }
        
        $startdate_a=strtotime(date('Y-01-01'));
       
        //$list_a=$this->getList($startdate_a,$enddate);
        
        //$list=$this->getList($startdate,$enddate);
        //临时代驾--现结
        $sql="SELECT sum(a.money) as money from account_log as a LEFT JOIN paiche as b on a.paiche_id=b.paiche_id where add_time>={$startdate} 
            AND add_time<={$enddate} and a.name in ('收租金','租车结账收款','收续租金','租车违约收违约金','租车违约退租金') and b.paiche_type=2" ;
        $yue['xianjie_list']=$CommonFunction->getDataY($sql,'money');
        //临时用车批量结账
        $sql_1="SELECT  sum(money) as money from account_log where name='临时用车批量结账' AND add_time>={$startdate} AND add_time<={$enddate}";    
        $yue['biliang_money']=$CommonFunction->getDataY($sql_1,"money");
        //调车结算
        $sql_2="SELECT sum(money) as money  from account_log where name='调车结账' AND add_time>={$startdate} AND add_time<={$enddate}";    
        $yue['diaoche_money']=$CommonFunction->getDataY($sql_2,"money");
        //长期自驾
        $sql_3="SELECT sum(a.money) AS money FROM `account_log` AS a 
                left join paiche as b on a.paiche_id=b.paiche_id
                 WHERE a.`bill_type`=0 AND a.paiche_id>0 AND (a.name ='长期用车月结' OR a.name ='租车违约收违约金' OR a.name ='收续租金' OR a.name ='收租金') 
                 AND a.add_time>={$startdate} AND a.add_time<={$enddate} and b.paiche_type=3";    
        $yue['zijia_money']=$CommonFunction->getDataY($sql_3,"money");
         //长期代驾
        $sql_4="SELECT sum(a.money) AS money FROM `account_log` AS a 
                left join paiche as b on a.paiche_id=b.paiche_id
                 WHERE a.`bill_type`=0 AND a.paiche_id>0 AND (a.name ='长期用车月结' OR a.name ='租车违约收违约金') 
                 AND a.add_time>={$startdate} AND a.add_time<={$enddate} and b.paiche_type=4";    
        $yue['daijia_money']=$CommonFunction->getDataY($sql_4,"money");
         //长期大可
        $sql_5="SELECT sum(a.money) AS money FROM `account_log` AS a 
                left join paiche as b on a.paiche_id=b.paiche_id
                 WHERE a.`bill_type`=0 AND a.paiche_id>0 AND (a.name ='长期用车月结' OR a.name ='租车违约收违约金') 
                 AND a.add_time>={$startdate} AND a.add_time<={$enddate} and b.paiche_type=5";    
        $yue['dake_money']=$CommonFunction->getDataY($sql_5,"money");





        //临时代驾--现结
       $sql="SELECT sum(a.money) as money from account_log as a LEFT JOIN paiche as b on a.paiche_id=b.paiche_id where add_time>={$startdate_a} 
            AND add_time<={$enddate} and a.name in ('收租金','租车结账收款','收续租金','租车违约收违约金','租车违约退租金') and b.paiche_type=2" ;
        $nian['xianjie_list']=$CommonFunction->getDataY($sql,'money');
        //临时用车批量结账
        $sql_1="SELECT  sum(money) as money from account_log where name='临时用车批量结账' AND add_time>={$startdate_a} AND add_time<={$enddate}";    
        $nian['biliang_money']=$CommonFunction->getDataY($sql_1,"money");
        //调车结算
        $sql_2="SELECT sum(money) as money  from account_log where name='调车结账' AND add_time>={$startdate_a} AND add_time<={$enddate}";    
        $nian['diaoche_money']=$CommonFunction->getDataY($sql_2,"money");
        //长期自驾
        $sql_3="SELECT sum(a.money) AS money FROM `account_log` AS a 
                left join paiche as b on a.paiche_id=b.paiche_id
                 WHERE a.`bill_type`=0 AND a.paiche_id>0 AND (a.name ='长期用车月结' OR a.name ='租车违约收违约金' OR a.name ='收续租金' OR a.name ='收租金') 
                 AND a.add_time>={$startdate_a} AND a.add_time<={$enddate} and b.paiche_type=3";    
        $nian['zijia_money']=$CommonFunction->getDataY($sql_3,"money");
         //长期代驾
        $sql_4="SELECT sum(a.money) AS money FROM `account_log` AS a 
                left join paiche as b on a.paiche_id=b.paiche_id
                 WHERE a.`bill_type`=0 AND a.paiche_id>0 AND (a.name ='长期用车月结' OR a.name ='租车违约收违约金') 
                 AND a.add_time>={$startdate_a} AND a.add_time<={$enddate} and b.paiche_type=4";    
        $nian['daijia_money']=$CommonFunction->getDataY($sql_4,"money");
         //长期大可
        $sql_5="SELECT sum(a.money) AS money FROM `account_log` AS a 
                left join paiche as b on a.paiche_id=b.paiche_id
                 WHERE a.`bill_type`=0 AND a.paiche_id>0 AND (a.name ='长期用车月结' OR a.name ='租车违约收违约金') 
                 AND a.add_time>={$startdate_a} AND a.add_time<={$enddate} and b.paiche_type=5";    
        $nian['dake_money']=$CommonFunction->getDataY($sql_5,"money");


       
        

        $view  = $this->createView("operator/zijia_linshi/daijia_yeji.html");
        $object = new stdClass();
        
        $object->yue = $yue;
        $object->nian = $nian;
        $view->assign($object);
        $view->display();
    }
    //临时自驾业绩表
    function zijia_yeji(){
        $CommonFunction=new CommonFunction();
        $CommonFunction->getQuanxian($this->package."/zijia_yeji");
        $startdate = strtotime(Request::getVar('paiche_startDate','post'));
        $enddate = strtotime(Request::getVar('paiche_endDate','post'));
        if(!$startdate){
            $startdate=strtotime(date('Y-m-01'));
        }
        //print_r($startdate);exit;
        if(!$enddate){
            $enddate=time();
        }
        
        $startdate_a=strtotime(date('Y-01-01'));
        
        $list_emp=$this->getLlist($startdate,$enddate);
        $list_a=$this->getList($startdate_a,time());
        
        $list=$this->getList($startdate,$enddate);

        $view  = $this->createView("operator/zijia_linshi/zijia_yeji.html");
        $object = new stdClass();
        $object->list_emp = $list_emp;
        $object->emp_youhui = $this->getYouhuiEmp($startdate,$enddate);
         $object->shop_youhui = $this->getYouhuiShop($startdate,$enddate);
        $object->list = $list;
        $object->list_a = $list_a;
        $view->assign($object);
        $view->display();
    }
    //部门当月优惠排行
    function getYouhuiShop($startdate,$enddate){
        $CommonFunction=new CommonFunction();
        $sql="SELECT a.shop_name,b.money from shop as a LEFT JOIN
(SELECT a.paiche_id,sum(a.youhui_mone) as money,b.paicheCounterMan,b.paicheCounterShop 
from paiche_youhui as a 
LEFT JOIN paiche as b 
on a.paiche_id=b.paiche_id
where  a.youhui_name='租车优惠' 
and a.youhui_liyou<>'冻结违章' 
and a.youhui_addtime>={$startdate} 
and a.youhui_addtime<={$enddate}
and b.paiche_type=1 
GROUP BY paicheCounterShop) as b 
on a.shop_id=b.paicheCounterShop 
where a.stutas=0 ORDER BY money asc";
 $shop_youhui= $CommonFunction->getList($sql);
        //print_r($shop_youhui);exit;
    return $shop_youhui;
    }
    
    //部门当月优惠排行
    function getYouhuiEmp($startdate,$enddate){
        $CommonFunction=new CommonFunction();
        $sql="SELECT a.emp_name,b.money,c.shop_name from emp as a LEFT JOIN
(SELECT a.paiche_id,sum(a.youhui_mone) as money,b.paicheCounterMan,b.paicheCounterShop 
from paiche_youhui as a 
LEFT JOIN paiche as b 
on a.paiche_id=b.paiche_id
where  a.youhui_name='租车优惠' 
and a.youhui_liyou<>'冻结违章'
and b.paiche_type=1 
and a.youhui_addtime>={$startdate} 
and a.youhui_addtime<={$enddate}
GROUP BY paicheCounterMan) as b 
on a.emp_id=b.paicheCounterMan
left join shop as c on a.emp_shopid=c.shop_id 
where a.emp_stutas=1 and a.department_id=1 ORDER BY money asc";

        $emp_youhui= $CommonFunction->getList($sql);
        //print_r($sql);exit;
        return $emp_youhui;
    }
    function getLlist($startdate,$enddate){
        $CommonFunction=new CommonFunction();
        $emp_sql="select a.emp_id,a.emp_name,b.shop_name  from emp as a left join shop as b on a.emp_shopid=b.shop_id where a.emp_stutas=1 and a.department_id=1";
        $emp_list=$CommonFunction->getList($emp_sql);
       
        for($i=0;$i<count($emp_list);$i++){
            $sql="SELECT sum(a.money) as money from account_log as a LEFT JOIN paiche as b on a.paiche_id=b.paiche_id where add_time>={$startdate} AND add_time<={$enddate} and a.name in ('收租金','租车结账收款','收续租金','租车违约收违约金','租车违约退租金') and b.paicheCounterMan={$emp_list[$i]['emp_id']} and b.paiche_type=1" ;
            $emp_list[$i]['money']=$CommonFunction->getDataY($sql,'money');
           
        }

        for($i=0;$i<count($emp_list)-1;$i++){
            for($j=$i+1;$j<count($emp_list);$j++){
                if($emp_list[$j]['money']>$emp_list[$i]['money']){
                    $aa=$emp_list[$i];
                    $emp_list[$i]=$emp_list[$j];
                   
                    $emp_list[$j]=$aa;
                }
            }
        }
        return $emp_list;
    }
    function getList($startdate,$enddate){
        $CommonFunction=new CommonFunction();
        //门店
        $sql_shop="SELECT shop_id,shop_name from shop where stutas=0";
        $shop_list=$CommonFunction->getList($sql_shop);
        //临时自驾
        $sql="SELECT a.name,a.money,b.paicheCounterShop,b.paiche_type from account_log as a LEFT JOIN paiche as b on a.paiche_id=b.paiche_id where add_time>={$startdate} 
            AND add_time<={$enddate} and a.name in ('收租金','租车结账收款','收续租金','租车违约收违约金','租车违约退租金')";
        $list=$CommonFunction->getList($sql);
        //临时用车批量结账
        $sql_1="SELECT  sum(money) as money from account_log where name='临时用车批量结账' AND add_time>={$startdate} AND add_time<={$enddate}";    
        $biliang_money=$CommonFunction->getDataY($sql_1,"money");

        //调车结算
        $sql_2="SELECT sum(money) as money  from account_log where name='调车结账' AND add_time>={$startdate} AND add_time<={$enddate}";    
        $diaoche_money=$CommonFunction->getDataY($sql_2,"money");

           //微信活动返现
        $sql_3="SELECT baoxiao_money,shop_id  from baoxiao where baoxiao_type='微信活动返现' and baoxiao_isOverTime>={$startdate} AND baoxiao_isOverTime<={$enddate}";    

        $weixin_list=$CommonFunction->getList($sql_3);
            $z_money=0;$z_weixin_money=0;$z_shiji=0;
            for($j=0;$j<count($shop_list);$j++){
                $model=0;
                $model_a=0;

                for($i=0;$i<count($list);$i++){
                    if($list[$i]['paicheCounterShop']==$shop_list[$j]['shop_id'])
                    {       
                        if($list[$i]['paiche_type']==1){
                            $model=$model+$list[$i]['money'];
                        }else if($list[$i]['paiche_type']==2){
                            $model_a=$model_a+$list[$i]['money'];
                        }
                    }
                }
                if($shop_list[$j]['shop_id']==9){
                    $shop_list[$j]['biliang_money']=$biliang_money;
                    $shop_list[$j]['diaoche_money']=$diaoche_money;
                }else{
                    $shop_list[$j]['biliang_money']=0;
                    $shop_list[$j]['diaoche_money']=0;
                }
                
                $weixin_money=0;
                for($i=0;$i<count($weixin_list);$i++){
                    if($weixin_list[$i]['shop_id']==$shop_list[$j]['shop_id'])
                    {
                            $weixin_money=$weixin_money+$weixin_list[$i]['baoxiao_money'];
                    }
                }
            $z_money=$z_money+$model;
            $z_weixin_money=$z_weixin_money+$weixin_money;
            $z_shiji=$z_shiji+$model-$weixin_money;
                $shop_list[$j]['model']=number_format($model,2);
                $shop_list[$j]['model_a']=number_format($model_a,2);
                $shop_list[$j]['weixin_money']=number_format($weixin_money,2);
                $shop_list[$j]['shiji']=number_format($model-$weixin_money,2);
                $shop_list[$j]['shiji_b']=$model-$weixin_money;
                $shop_list[$j]['shiji_a']=number_format($model_a+$biliang_money+$diaoche_money,2);
                
            }
            
            for($i=0;$i<count($shop_list)-1;$i++){
                for($j=$i+1;$j<count($shop_list);$j++){
                     if($shop_list[$j]['shiji_b']>$shop_list[$i]['shiji_b']){
                       
                        $test=$shop_list[$i];
                        $shop_list[$i]=$shop_list[$j];
                        $shop_list[$j]=$test;
                     }
                
                }   
                
            }

           

        $z_money=number_format($z_money,2);
        $z_shiji=number_format($z_shiji,2);
        $z_weixin_money=number_format($z_weixin_money,2);
        

        $req_list['shop_list']= $shop_list;
        $req_list['z_money']= $z_money;
        $req_list['z_weixin_money']= $z_weixin_money;
        $req_list['z_shiji']= $z_shiji;
        return $req_list;
    }

    //订单的审核
    function zijia_shenghe(){

        $CommonFunction=new CommonFunction();
        $CommonFunction->getQuanxian($this->package."/zijia_shenghe");
        $pid = Request::getVar('pid','get');
        $object = new stdClass();
        $object->pid=$pid;
        $view  = $this->createView("operator/zijia_linshi/zijia_shenghe.html");
        $view->assign($object);
        $view->display();
    }
    
    
    function zijia_shengheAction(){
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
            $CommonFunction=new CommonFunction();
            $CommonFunction->setAction("审核了订单,id为-".$pid);
        }
        $object = new stdClass();
        $object->result = $re ? "审核成功！":"审核失败，返回重试！";
        $view  = $this->createView("operator/zijia_linshi/result.html");
        $view->assign($object);
        $view->display(); 

    }

    

}