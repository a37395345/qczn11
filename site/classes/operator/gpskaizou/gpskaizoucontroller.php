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


class gpskaizouController extends AdminController
{
	private $package="site/operator/gpskaizou";
	function __construct($config = array())
	{
		parent::__construct($config);
		$this->registerTask( 'index','index');
		$this->registerTask( 'add','add');
        $this->registerTask( 'edit','edit');
        $this->registerTask( 'edit_action','edit_action');
        $this->registerTask( 'insert','insert');
        $this->registerTask( 'discount','discount');
        $this->registerTask( 'deal_discount','deal_discount');
        $this->registerTask( 'huanche','huanche');
        $this->registerTask( 'qitamoney','qitamoney');
        $this->registerTask( 'deal_qitamoney','deal_qitamoney');
        $this->registerTask( 'delete','delete_a');
		$this->registerTask( 'get_car','get_car');
		$this->registerTask( 'generatepicutrea','generatepicutrea');
		$this->registerTask( 'generatepicutrea_a','generatepicutrea_a');
		$this->registerTask( 'getRenlian','getRenlian');	
	}

	function index(){
        //print_r($_SESSION['shopid']);exit;
		//导入数据库模型
		$CommonFunction=new CommonFunction();
		//验证是否有权限
		$CommonFunction->getQuanxian($this->package."/index");
		
        $base_url = "index.php?a=1";
        $where="where a.paiche_type=11 ";
        $p = Request::getVar('p','get');
        if(empty($p)){
            $p=1;
        }
        $per_page = 10;
        $style = new PageStyle_a();
        //当前页开始的条数
        $start = ($p-1)*$per_page;
        
        $order=" paiche_id desc ";
         //合同号
        $paiche_id= Request::getVar('paiche_id','get');
        
        if(!empty($paiche_id)){
            $where.=" and a.paiche_id={$paiche_id}";
            $base_url.="&paiche_id={$paiche_id}";
        }
        //合同号
        $paiche_contractNum= Request::getVar('paiche_contractNum','get');
        if(!empty($paiche_contractNum)){
            $where.=" and a.paiche_contractNum like '%{$paiche_contractNum}%'";
            $base_url.="&paiche_contractNum={$paiche_contractNum}";
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
        if(empty($search_status)) $search_status = "ss";
        $base_url.="&search_status={$search_status}";
        $per_page = 10;
        $style = new PageStyle_a();
        $start = ($p-1)*$per_page;
        $order="`paiche_dispatchTimes` DESC,`paiche_id` DESC";
            //运行中
            if($search_status=="ss"){
                $where .=" AND a.paiche_jie=1";
            }else if($search_status=="yh"){
                $where .=" AND a.paiche_jie=2";
            } else if ($search_status=="yj"){
                $where .=" AND a.paiche_jie=3";
            }else{}
        $sql="select a.*,c.emp_name AS yewuyuan,cc.shop_name as ywshopname,e.car_num,l.emp_name as shenhe_empname
        from paiche as a 
        LEFT JOIN emp AS c ON a.paicheCounterMan=c.emp_id 
        LEFT JOIN shop AS cc ON a.paicheCounterShop=cc.shop_id 
        LEFT JOIN car AS e ON a.paicheCar=e.car_id  
        LEFT JOIN emp AS l ON a.shenhe_empid=l.emp_id
        {$where} ORDER BY {$order} LIMIT {$start},{$per_page}
        ";
        $list=$CommonFunction->getList($sql);
       
        for($i=0;$i<count($list);$i++){
            $list[$i]['paiche_startDate']=date('Y-m-d H:i:s', $list[$i]['paiche_startDate']);
             $list[$i]['paiche_endDate']=date('Y-m-d H:i:s', $list[$i]['paiche_endDate']);
            $list[$i]['paiche_chargelist']=$CommonFunction->getChargeList_a($list[$i]['paiche_id']);
            $list[$i]['paiche_youhuilist']=$CommonFunction->getList("select * from paiche_youhui where paiche_id={$list[$i]['paiche_id']}");
            //应收的租金和已收的租金
           
            if($list[$i]['paiche_jie']==1){
                $list[$i]['zhuangtai']="运行中";
            }else if($list[$i]['paiche_jie']==2){
                $list[$i]['zhuangtai']="已接单未结账";
            }else if($list[$i]['paiche_jie']==3){
                $list[$i]['zhuangtai']="已结账";
            }
            //print_r($list[$i]['paiche_changelist']);exit;   
        }
        //总数
        $sql="select count(*) as count
        from paiche as a 
        LEFT JOIN emp AS c ON a.paicheCounterMan=c.emp_id 
        LEFT JOIN shop AS cc ON a.paicheCounterShop=cc.shop_id 
        LEFT JOIN car AS e ON a.paicheCar=e.car_id  
        LEFT JOIN emp AS l ON a.shenhe_empid=l.emp_id
         {$where} ORDER BY {$order} 
        ";
        $total_item=$CommonFunction->getDataY($sql,"count");
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
		//输出的页面的地址
		$view  = $this->createView("operator/gpskaizou/index.html");
        $object = new stdClass();
        $object->list=$list;
        $object->PAGINATION = $pagination->fetch();
        $object->p = $p;
        $object->search_status = $search_status;
        $object->total = $total_item;
		$view->assign($object);
        $view->display();
	}
    function insert(){
        $CommonFunction=new CommonFunction();
        $object = new stdClass();
        $tiao_url="index.php";
        //公司id
        $object->paicheCom=Request::getVar('paicheCom','post');
        //验证身份的方式
        $object->paiche_stype=Request::getVar('paiche_stype','post');
        //验证身份的方式
        $object->paiche_tupian=Request::getVar('paiche_tupian','post');
        //验证身份的方式
        $object->paiche_linkerPicture=Request::getVar('paiche_linkerPicture','post');

        //公司地址
        $object->paiche_linkerAdd=Request::getVar('paiche_linkerAdd','post');
        //联系人
        $object->paiche_linker=Request::getVar('paiche_linker','post');
        //联系人电话
        $object->paiche_linkerPhone=Request::getVar('paiche_linkerPhone','post');
        //业务门店
        $object->paicheCounterShop=$_SESSION['shopid'];
        //身份证号码
        $object->paiche_linkerNum=Request::getVar('paiche_linkerNum','post');
        //业务员
        $object->paicheCounterMan=$_SESSION['user_id'];
        //预约车辆
        $object->paicheCar=Request::getVar('paicheCar','post');
        //开始用车时间
        $object->paiche_startDate=strtotime(Request::getVar('paiche_startDate','post'));
        //用车结束时间
        $object->paiche_endDate=strtotime(Request::getVar('paiche_endDate','post'));
        //备注
        $object->paiche_specialRemarks=Request::getVar('paiche_specialRemarks','post');
        //状态为预约
        $object->paiche_jie=1;
        //合同单号
        $paiche_contractNum=date('YmdHis',time());
        $object->paiche_contractNum=$paiche_contractNum;
        //派车单类型为长期自驾
        $object->paiche_type=11;
        $CommonFunction->instert($object,"paiche");
        $pid=$CommonFunction->getDataY("select paiche_id from paiche where paiche_contractNum='{$object->paiche_contractNum}'","paiche_id");
        if($pid){
            $re=true;
            $CommonFunction->setAction("添加了派车单-".$pid);
            //租金
            $paiche_rent=Request::getVar('paiche_rent','post');
            $object2 = new Object();
            $object2->paiche_id = $pid;
            $object2->charge_id = 2;
            $object2->conv_money = $paiche_rent;
            $object2->back_money =0;
            $object2->addtime =time();
            $object2->addemp=$_SESSION['user_id'];
            $object2->continuerent_start=strtotime(Request::getVar('paiche_startDate','post'));
            $object2->continuerent_end=strtotime(Request::getVar('paiche_endDate','post'));
            $CommonFunction->instert($object2,"paiche_charges");
               
            //押金

            $paiche_deposit=Request::getVar('paiche_deposit','post');
            $object1 = new Object();
            $object1->paiche_id = $pid;
            $object1->charge_id = 1;
            $object1->addtime =time();
            $object1->addemp=$_SESSION['user_id'];
            $object1->conv_money = empty($paiche_deposit)? 0 : $paiche_deposit;
            $object1->back_money =0;
            $CommonFunction->instert($object1,"paiche_charges");
            $this->redirect($tiao_url."?paiche_contractNum=".$paiche_contractNum,"添加成功");
        }else{
            $re=false;
             $this->redirect($tiao_url,"添加失败");
        }   
    }
    //添加
	function add(){
		$CommonFunction=new CommonFunction();
		//$CommonFunction->getQuanxian($this->package."/index");
        $sql="select * from client";
        $client_list=$CommonFunction->getList($sql);
		$object = new stdClass();
        $object->client_list=$client_list;
        $object->time=date('Y-m-d H:i:s', time());
        $object->cid=rand(1000,9999);
		//将参数带到模板页面
        $view  = $this->createView("operator/gpskaizou/add.html");    //
		$view->assign($object);
		$view->display();
	}
    //修改
    function edit(){
        $CommonFunction=new CommonFunction();
        //$CommonFunction->getQuanxian($this->package."/edit");
        $pid=Request::getVar('pid','get');
        $sql="select * from paiche where paiche_id={$pid}";

        $paiche=$CommonFunction->getData($sql);
        $sql="select * from car where car_id={$paiche['paicheCar']}";
        $car=$CommonFunction->getData($sql);
        $sql="select * from paiche_charges where paiche_id={$pid} and charge_id=2";
        $paiche_rent=$CommonFunction->getDataY($sql,'conv_money');

        $sql="select * from paiche_charges where paiche_id={$pid} and charge_id=1";
        $paiche_deposit=$CommonFunction->getDataY($sql,'conv_money');
        $yue=0;

        $sql = "select * from paiche_youhui where paiche_id = $pid limit 1";
        $car_info = $CommonFunction->getData($sql);
        

        for($i=0;$i<1000;$i++){
            $time=strtotime("+{$i}month",$paiche['paiche_startDate']);
            if($time>=$paiche['paiche_endDate']){
                $yue=$i;
                break;
            }
        }
        $paiche['paiche_startDate']=date('Y-m-d H:i:s', $paiche['paiche_startDate']);
         $paiche['paiche_endDate']=date('Y-m-d H:i:s', $paiche['paiche_endDate']);
        //print_r($paiche['paiche_startDate']);exit;
        $object = new stdClass();
        $object->paiche=$paiche;
        $object->paiche_rent=$paiche_rent;
        $object->paiche_deposit=$paiche_deposit;
        $object->yue=$yue;
        $object->car=$car;
        $object->pid=$pid;
        $object->car_info = $car_info;
        $object->yue_money=number_format($paiche_rent/$yue,2);
        $object->min_money=number_format($paiche_deposit+$paiche_rent/$yue,2);
        $view  = $this->createView("operator/gpskaizou/edit.html");
        $view->assign($object);
        $view->display();  
    }
    function edit_action(){
        $CommonFunction=new CommonFunction();
        $paiche_rent = Request::getVar('paiche_rent','post');
        $yue_money = Request::getVar('yue_money','post');
        $paiche_deposit = Request::getVar('paiche_deposit','post');
        $min_money = Request::getVar('min_money','post');
        $paiche_specialRemarks = Request::getVar('paiche_specialRemarks','post');
        $paiche_id = Request::getVar('p_id','post');
        $object=new Object();
        $object->paiche_id=$paiche_id;
        $object->paiche_rent=$paiche_rent;
        $object->yue_money=$yue_money;
        $object->paiche_deposit=$paiche_deposit;
        $object->min_money=$min_money;
        $object->paiche_specialRemarks=$paiche_specialRemarks;
       
        if($CommonFunction->update_a($object,'paiche_id','paiche','')){
            $CommonFunction->setAction("修改业务-ID为".$paiche_id);
            $req=true;
        }else{
            $req=false;
        }
        $object = new stdClass();
        $object->result = $req ? "修改成功！":"修改失败，返回重试！";
        $view  = $this->createView("operator/gpskaizou/result.html");
        $view->assign($object);
        $view->display();
        
    }
    //优惠
    function discount(){
        $CommonFunction=new CommonFunction();
        $pid = Request::getVar('pid','get');
        $model = $this->createModel("zijia_linshi",dirname( __FILE__ ));
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
        $object->nengyouhui=$nengyouhui;
        
        $view = $this->createView("operator/gpskaizou/youhui.html");
        $view->assign($object);
        $view->display();  
    }

    function deal_discount()
    {
        $model = $this->createModel("zijia_linshi",dirname( __FILE__ ));
        $pid = Request::getVar('pid','post');

        $youhui_money = Request::getVar('youhui_money','post');
        $youhui_liyou = Request::getVar('youhui_liyou','post');

        $object = new Object();
        $object->paiche_id=$pid;
        $object->youhui_mone=$youhui_money;
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
    //还车
    function huanche(){
        $CommonFunction=new CommonFunction();
        $object = new stdClass();
        //$CommonFunction->getQuanxian($this->package."/edit");
        
        $view  = $this->createView("operator/gpskaizou/huanche.html");
        $view->assign($object);
        $view->display();  
    }
    //其他费用
    function qitamoney(){
        $CommonFunction=new CommonFunction();
        $object = new stdClass();
        //$CommonFunction->getQuanxian($this->package."/edit");
        $object->pid = Request::getVar('pid');
        $view  = $this->createView("operator/gpskaizou/qitamoney.html");
        $view->assign($object);
        $view->display();  
    }

    function deal_qitamoney()
    {
        $model = $this->createModel("zijia_linshi",dirname( __FILE__ ));

        $pid = Request::getVar('pid','post');
        $re = true;

        $yaoshi = Request::getVar('yaoshi');
        $jieri = Request::getVar('jieri');
        $songche = Request::getVar('songche');

        if($yaoshi > 0){
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

        if($jieri > 0 && $re){
            $object24 = new Object();
            $object24->paiche_id = $pid;
            $object24->charge_id = 24;
            $object24->addtime =time();
            $object24->addemp=$_SESSION['user_id'];
            $object24->conv_money=$jieri;
            if ($model->store($object24,"paiche_charges")){
            }else{
                $re=false;
            }
        }

        if($songche > 0 && $re){
            $object18 = new Object();
            $object18->paiche_id = $pid;
            $object18->charge_id = 18;
            $object18->addtime =time();
            $object18->addemp=$_SESSION['user_id'];
            $object18->conv_money=$songche;
            if ($model->store($object18,"paiche_charges")){
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
    //删除
    function delete_a(){
        $CommonFunction=new CommonFunction();
        //$CommonFunction->getQuanxian($this->package."/delete");
        $pid = Request::getVar('pid','get');
        if($CommonFunction->dalete_sql("paiche","paiche_id",$pid)){
            $CommonFunction->setAction("删除了派车单-".$pid);
            $this->redirect("index.php","清理成功！");
        }else{
            $this->redirect("index.php","清理失败！");
        }   
    }
	function get_car(){
 		$key=Request::getVar('key','get');
        $CommonFunction=new CommonFunction();
        $object = new stdClass();
        $sql="select * from car where car_recycle=0 AND car_status!=2 AND car_status!=3";
        if(!empty($key)){
        	$sql.=" and car_num like '%{$key}%'";
        }
        $car_list=$CommonFunction->getList($sql);
        $object->car_list=$car_list;
        $view  = $this->createView("operator/gpskaizou/get_car.html");
        $view->assign($object);
        $view->display();

    }
    //上传图片
    function generatepicutrea(){
        $IDcard=Request::getVar('IDcard','post');
        $base64=Request::getVar('Base64Code','post');
        $req=2;
        if(!empty($base64)){
            $img = base64_decode($base64);
            $a = file_put_contents('../../../thumb/upload/idpicture/'.$IDcard.'.jpg', $img);
            $req=1;
        }
        
       
        header("Content-type: application/json");
        echo json_encode($req);
        exit();
    }
    //人脸验证上传图片
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
    


}
