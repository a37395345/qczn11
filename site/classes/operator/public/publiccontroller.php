<?php
import('imag.component.controller');
import('imag.component.model');
import('imag.component.view');
import('imag.component.template');
import('imag.database.database');
import('operator.navi.privilegehelper');
import('publicFunction.CommonFunction');
class publicController extends Controller
{
	function __construct($config = array())
    {
        parent::__construct($config);
        $this->registerTask( 'index','index');
        $this->registerTask( 'index_a','index_a');
        $this->registerTask( 'getCartime','getCartime');
        $this->registerTask( 'list','list_a');
        $this->registerTask( 'article','article_a');
        $this->registerTask( 'test','test_a');
        $this->registerTask( 'demo','demo');
        $this->registerTask( 'daying','daying');
        $this->registerTask( 'daying_a','daying_a');
        $this->registerTask( 'daying_b','daying_b');
        $this->registerTask( 'daying_c','daying_c');
    }
    function daying_c(){
        $stime=strtotime('2020-01-22 00:00:00');
        $etime=strtotime('2020-02-05 23:59:59');
        $CommonFunction=new CommonFunction();
        $sql="select car_id,car_num from car where car_recycle!=1 and car_status!=3 order by car_id asc";
        $list=$CommonFunction->getList($sql);
        for($i=210;$i<count($list);$i++){
            $sql="select * from paiche where paiche_startDate<{$etime} and paiche_endDate>{$stime} and (paicheCar2={$list[$i]['car_id']} or paicheCar={$list[$i]['car_id']}) and paiche_jie>=-1 and paiche_type in(1,2,3,4,5)";
            //print_r($sql);exit;
            $paiche=$CommonFunction->getList($sql);
            if(count($paiche)<=0){
                print_r($list[$i]['car_num'].";");
            }
              
        }

        
        exit;
    }
    function daying_a(){

       
        $CommonFunction=new CommonFunction();
        $sql="select a.breakrules_date,a.breakrules_item,a.breakrules_money1,a.breakrules_money3,b.car_num,d.client_name,c.paiche_id,c.paicheCom 
from breakrules as a
left join car as b ON a.breakrules_CarId=b.car_id
LEFT JOIN `paiche` AS c ON a.breakrulesPaicheId=c.paiche_id
LEFT JOIN client AS d on c.paicheCom=d.client_id
 Where a.breakrules_end=0 and a.breakrulesPaicheId!=0 and a.breakrules_isCom=1";
        $list=$CommonFunction->getList($sql);
        for($i=0;$i<count($list);$i++){
            
           
            
            $list[$i]['breakrules_date'] = $list[$i]['breakrules_date']>0 ? date("Y-m-d H:i:s",$list[$i]['breakrules_date']) :"-";
        }

        header ( "Content-type:application/vnd.ms-excel" );
        header ( "Content-Disposition:filename=员工清单.xls" );
        echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
        <html xmlns='http://www.w3.org/1999/xhtml'>
        <head>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
        <title></title>
        </head>
        <body>
        <table width='100%' border='1'>
          <tr>
            <td colspan='11'>派车清单</td>
          </tr>
          <tr>
            <td>企业名称</td>
            <td>车牌号</td>
            <td>违章时间</td>
            <td>违章项目</td>
            <td>违章款</td>
            <td> 扣分</td>
            
          </tr>";
        if(is_array($list)){
            foreach($list as $item)
            {
            echo "
              <tr>
                <td>".$item["client_name"]."</td>
                <td>".$item["car_num"]."</td>
                <td>".$item["breakrules_date"]."</td>
                <td>".$item["breakrules_item"]."</td>
                <td>".$item["breakrules_money1"]."</td>
                <td>".$item["breakrules_money3"]."</td>
                
                </tr>";
            }
        }
        
        echo "
        </table>
        </body>
        </html>";
    }
    function daying_b(){
        //$stime=time();
        $CommonFunction=new CommonFunction();
        $sql="select a.paiche_id,a.paiche_startDate,paiche_endDate,b.car_num,cc.shop_name as ywshopname,c.emp_name AS yewuyuan,m.shop_name,n.emp_name AS jiedaiyuan
        from paiche as a 
        left join car as b on a.paicheCar=b.car_id 
        left join shop as cc on a.paicheCounterShop=cc.shop_id
        LEFT JOIN emp AS c ON a.paicheCounterMan=c.emp_id 
        LEFT JOIN shop AS m ON a.paiche_shopid=m.shop_id
        LEFT JOIN emp AS n ON a.paicheServerMan=n.emp_id 
         where a.paiche_jie=1 and paiche_type=1 and paicheCar!=0  ORDER BY b.car_id";
        $list=$CommonFunction->getList($sql);
        for($i=0;$i<count($list);$i++){
            $tian=0;
            for($j=1;$j<999;$j++){
                if(($list[$i]['paiche_startDate']+($j*60*60*24))>=$list[$i]['paiche_endDate']){
                    $tian=$j;
                    break;
                }
            }
            $list[$i]['tian']=$tian;
            $list[$i]['paiche_startDate'] = $list[$i]['paiche_startDate']>0 ? date("Y-m-d H:i:s",$list[$i]['paiche_startDate']) :"-";

            $list[$i]['paiche_endDate'] = $list[$i]['paiche_endDate']>0 ? date("Y-m-d H:i:s",$list[$i]['paiche_endDate']) : "—";
            $sql="select a.*,b.charge_name from paiche_charges as a
            left join charges as b on a.charge_id=b.charge_id where a.paiche_id={$list[$i]['paiche_id']} and a.charge_id!=1";
            $zujin=$CommonFunction->getList($sql);
            $list[$i]['zujin']=$zujin;
        }
        //print_r($list);exit;
        header ( "Content-type:application/vnd.ms-excel" );
        header ( "Content-Disposition:filename=员工清单.xls" );
        echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
        <html xmlns='http://www.w3.org/1999/xhtml'>
        <head>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
        <title></title>
        </head>
        <body>
        <table width='100%' border='1'>
          <tr>
            <td colspan='11'>派车清单</td>
          </tr>
          <tr>
            <td>车牌号码</td>
            <td>开始时间-结束时间</td>
            <td>用车天数</td>
            <td>业绩门店</td>
            <td>业务员</td>
            <td>服务门店</td>
            <td>接待员</td>
            <td>金额</td>
            <td>状态</td>
          </tr>";
        if(is_array($list)){
            foreach($list as $item)
            {
            echo "
              <tr>
                <td>".$item["car_num"]."</td>
                <td>{$item["paiche_startDate"]}-{$item["paiche_endDate"]}</td>
                <td>".$item["tian"]."天</td>
                <td>".$item["ywshopname"]."</td>
                <td>".$item["yewuyuan"]."</td>
                <td>".$item["shop_name"]."</td>
                <td>".$item["jiedaiyuan"]."</td>
                <td>";
                for($i=0;$i<count($item["zujin"]);$i++){
                    echo "{$item['zujin'][$i]['charge_name']}:{$item['zujin'][$i]['conv_money']},已收{$item['zujin'][$i]['have_in_money']}";
                }

                 echo "</td>
                 <td>实时</td>
                </tr>";
            }
        }
        
        echo "
        </table>
        </body>
        </html>";
    }
    function daying(){
        $stime=strtotime('2019-07-01 00:00:00');
        $etime=strtotime('2019-12-31 23:59:59');
        $CommonFunction=new CommonFunction();
        $sql="select a.*,b.car_num,b.car_model from paiche as a left join car as b on a.paicheCar=b.car_id where a.paiche_startDate>={$stime} and a.paiche_endDate<={$etime} and a.paiche_shopid=2 and a.paiche_jie>0 and a.paiche_linkerPhone<>'88990000'";
        $list=$CommonFunction->getList($sql);
        //print_r($list);exit;
        for($i=0;$i<count($list);$i++){
            $list[$i]['paiche_startDate'] = $list[$i]['paiche_startDate']>0 ? date("Y-m-d H:i:s",$list[$i]['paiche_startDate']) :"-";

            $list[$i]['paiche_endDate'] = $list[$i]['paiche_endDate']>0 ? date("Y-m-d H:i:s",$list[$i]['paiche_endDate']) : "—";
        }
        header ( "Content-type:application/vnd.ms-excel" );
        header ( "Content-Disposition:filename=员工清单.xls" );
        echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
        <html xmlns='http://www.w3.org/1999/xhtml'>
        <head>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
        <title></title>
        </head>
        <body>
        <table width='100%' border='1'>
          <tr>
            <td colspan='11'>派车清单</td>
          </tr>
          <tr>
            <td>承租人姓名</td>
            <td>身份证号</td>
            <td>手机号</td>
            <td>租赁汽车车型</td>
            <td>车牌号</td>
            <td>开始时间</td>
            <td>结束时间</td>
          </tr>";
        if(is_array($list)){
            foreach($list as $item)
            {
            echo "
              <tr>
                <td>".$item["paiche_linker"]."</td>
                <td>'{$item["paiche_linkerNum"]}'</td>
                <td>".$item["paiche_linkerPhone"]."</td>
                <td>".$item["car_model"]."</td>
                <td>".$item["car_num"]."</td>
                <td>".$item["paiche_startDate"]."</td>
                <td>".$item["paiche_endDate"]."</td>
                
                </tr>";
            }
        }
        
        echo "
        </table>
        </body>
        </html>";
    }

    function list_a(){

        $view  = $this->createView("operator/public/list.html");
        $view->display();
    }
    function article_a(){
        $view  = $this->createView("operator/public/article.html");
        $view->display();
    }
    function test_a(){
        $view  = $this->createView("operator/public/test.html");
        $view->display();
    }
    function demo(){
        $view  = $this->createView("operator/public/demo.html");
        $view->display();
    }
    function index_a(){
        $view  = $this->createView("operator/public/index_a.html");
        $view->display(); 
    }
    function index(){
        // $CommonFunction=new CommonFunction();
        // $sql="SELECT * from car where car_status!=3 and car_recycle!=1";
        // $car_list=$CommonFunction->getList($sql);
        // $sql="SELECT c.emp_name,aa.paicheDriver,c.emp_image,aa.paiche_id,aa.paicheCar,aa.paiche_contractNum,aa.paicheCounterShop,aa.paiche_type FROM `paiche` as aa Inner Join settle as bb on aa.paiche_id =bb.settlePaicheId LEFT JOIN `emp` AS c ON aa.`paicheDriver`=c.`emp_id` where aa.paiche_recycle!=1 AND IFNULL( aa.paiche_aaa,'')<>'补单' AND aa.paicheCar >0 AND (aa.paiche_status=0 or aa.paiche_status=1) AND aa.paiche_type IN (4,5) AND aa.paiche_startDate<=".time(). " AND aa.paiche_endDate>=".time().
        //        " Union All ".
        //        "SELECT c.emp_name,aa.paicheDriver,c.emp_image,aa.paiche_id,aa.paicheCar,aa.paiche_contractNum,aa.paicheCounterShop,aa.paiche_type  FROM `paiche` as aa Inner Join settle as bb on aa.paiche_id =bb.settlePaicheId LEFT JOIN `emp` AS c ON aa.`paicheDriver`=c.`emp_id`  where  aa.paiche_type =3 and aa.paiche_jie=1";
        // $sql1="Select distinct paicheCar From ({$sql}) km";
        // $list=$CommonFunction->getList($sql1);
        // $index_a=0;
        // for($i=0;$i<count($car_list);$i++){
        //     $index=0;
        //      for($j=0;$j<count($list);$j++){
        //         if($car_list[$i]['car_id']==$list[$j]['paicheCar']){
        //             $index=$index+1;
        //             break;
        //         }
        //      }
        //      if($index==0){
        //         $index_a=$index_a+1;
                
        //      }
        // }
        // print_r($index_a);
        // exit;
$date=strtotime("-1 year");
        //print_r(MD5("1"));exit;

        print_r(date('Y-m-d H:i:s', $date));exit;
        //print_r(strtotime('2004-07-09 00:00:00'));exit;
        
        $view  = $this->createView("operator/public/index.html");
       
        $view->display(); 
    }
    function getCartime(){

        $CommonFunction=new CommonFunction();
        $p = Request::getVar('p','post');
        //此加载显示条数
        $per_page=Request::getVar('per_page','post');
        if(!$p){
            $p=1;
        }
        if(!$per_page){
            $per_page=5;
        }
        //起始页
        $start = ($p-1)*$per_page;
        //print_r($per_page);exit;

        $where=" where a.car_recycle!=1 and a.car_status!=3 and b.plan_day=1 ";
        //最低日租金
        $minrent= Request::getVar('minrent','post');
        if(!empty($minrent)){
            $where.=" and b.plan_rentamount>={$minrent}";
        }
        //最高日租金
        $maxrent= Request::getVar('maxrent','post');
        if(!empty($maxrent)){
            $where.=" and b.plan_rentamount<={$maxrent}";
        }
        //车牌号码
        $carnum= Request::getVar('carnum','post');
        if(!empty($carnum)){
            $where.=" and a.car_num like '%{$carnum}%'";
        }
        //车辆品牌
        $cartype= Request::getVar('cartype','post');
        if(!empty($cartype)){
            $where.=" and a.car_model like '%{$cartype}%'";
        }
        //金额排序
        $rentsort= Request::getVar('rentsort','post');
        $order=" order by b.plan_rentamount desc,a.car_id desc";
        if($rentsort==2){
             $order=" order by b.plan_rentamount asc,a.car_id desc ";
        }

        $sql="select a.car_id,a.car_num,a.car_model,b.plan_rentamount from car as a left join car_price as b on a.car_id=b.car_id {$where} {$order} LIMIT {$start},{$per_page}";
        
        $car_list=$CommonFunction->getList($sql);
        //print_r($car_list);exit;
        for($i=0;$i<count($car_list);$i++){
            //临时自驾派预约车单
            $sql="select paiche_startDate,paiche_endDate from paiche where paicheCar2={$car_list[$i]['car_id']} and paiche_jie=-1 and paiche_type=1";
            $yuyue=$CommonFunction->getList($sql);
            for($j=0;$j<count($yuyue);$j++){
                $yuyue[$j]['paiche_startDate']=date('Y-m-d H:i:s', $yuyue[$j]['paiche_startDate']);
                $yuyue[$j]['paiche_endDate']=date('Y-m-d H:i:s', $yuyue[$j]['paiche_endDate']);
            }
            $car_list[$i]['time']['zijia_yuyue']=$yuyue;
            //临时自驾正在用的单子
            $sql="select paiche_startDate,paiche_endDate from paiche where paicheCar={$car_list[$i]['car_id']} and paiche_jie=1 and paiche_type=1";
            $lszi_shishi=$CommonFunction->getList($sql);
            $shishi=null;
            $chaoshi=null;
            for($j=0;$j<count($lszi_shishi);$j++){
                if($lszi_shishi[$j]['paiche_endDate']<time()){
                    $lszi_shishi[$j]['paiche_startDate']=date('Y-m-d H:i:s', $lszi_shishi[$j]['paiche_startDate']);
                    $lszi_shishi[$j]['paiche_endDate']=date('Y-m-d H:i:s', $lszi_shishi[$j]['paiche_endDate']);
                    $chaoshi[]=$lszi_shishi[$j];
                }else{
                    $lszi_shishi[$j]['paiche_startDate']=date('Y-m-d H:i:s', $lszi_shishi[$j]['paiche_startDate']);
                    $lszi_shishi[$j]['paiche_endDate']=date('Y-m-d H:i:s', $lszi_shishi[$j]['paiche_endDate']);
                    $shishi[]=$lszi_shishi[$j];
                }
            }
            $car_list[$i]['time']['zijia_chaoshi']=$chaoshi;
            $car_list[$i]['time']['zijia_shishi']=$shishi;


            //长期自驾预约单
            $sql="select paiche_startDate,paiche_endDate from paiche where paicheCar={$car_list[$i]['car_id']} and paiche_jie=-1 and paiche_type=3";
            $cqzj_yuyue=$CommonFunction->getList($sql);
            for($j=0;$j<count($cqzj_yuyue);$j++){
                $cqzj_yuyue[$j]['paiche_startDate']=date('Y-m-d H:i:s', $cqzj_yuyue[$j]['paiche_startDate']);
                $cqzj_yuyue[$j]['paiche_endDate']=date('Y-m-d H:i:s', $cqzj_yuyue[$j]['paiche_endDate']);
            }
            $car_list[$i]['time']['cqzj_yuyue']=$cqzj_yuyue;

            //长期自驾实时单
            $sql="select paiche_startDate,paiche_endDate from paiche where paicheCar={$car_list[$i]['car_id']} and paiche_jie=1 and paiche_type=3";
            $cqzj_shishi_a=$CommonFunction->getList($sql);
            $cqzj_shishi=null;$cqzj_chaoshi=null;
            for($j=0;$j<count($cqzj_shishi_a);$j++){
                if($cqzj_shishi_a[$j]['paiche_endDate']<time()){
                    
                    $cqzj_shishi_a[$j]['paiche_startDate']=date('Y-m-d H:i:s', $cqzj_shishi_a[$j]['paiche_startDate']);
                    $cqzj_shishi_a[$j]['paiche_endDate']=date('Y-m-d H:i:s', $cqzj_shishi_a[$j]['paiche_endDate']);
                    $cqzj_chaoshi[]=$cqzj_shishi_a[$j];
                }else{
                    $cqzj_shishi_a[$j]['paiche_startDate']=date('Y-m-d H:i:s', $cqzj_shishi_a[$j]['paiche_startDate']);
                    $cqzj_shishi_a[$j]['paiche_endDate']=date('Y-m-d H:i:s', $cqzj_shishi_a[$j]['paiche_endDate']);
                    $cqzj_shishi[]=$cqzj_shishi_a[$j];
                }
                
            }
            $car_list[$i]['time']['cqzj_chaoshi']=$cqzj_chaoshi;
            $car_list[$i]['time']['cqzj_shishi']=$cqzj_shishi;


            //临时代驾预约
            $sql="select paiche_startDate,paiche_endDate from paiche where paicheCar2={$car_list[$i]['car_id']}  and paiche_type=2 and paiche_recycle!=1 and paiche_status=0";
            $lsdj_yuyue=$CommonFunction->getList($sql);
            for($j=0;$j<count($lsdj_yuyue);$j++){
                $lsdj_yuyue[$j]['paiche_startDate']=date('Y-m-d H:i:s', $lsdj_yuyue[$j]['paiche_startDate']);
                $lsdj_yuyue[$j]['paiche_endDate']=date('Y-m-d H:i:s', $lsdj_yuyue[$j]['paiche_endDate']);
            }
            $car_list[$i]['time']['lsdj_yuyue']=$lsdj_yuyue;


            //临时代驾实时单
            $sql="select a.paiche_startDate,a.paiche_endDate from paiche as a left join settle as b on a.paiche_id=b.settlePaicheId where a.paicheCar={$car_list[$i]['car_id']}  and a.paiche_type=2 and a.paiche_recycle!=1 and a.paiche_status=1 AND b.settle_totalKm<=0";
            $lsdj_shishi_a=$CommonFunction->getList($sql);
            $lsdj_shishi=null;$lsdj_chaoshi=null;
            for($j=0;$j<count($lsdj_shishi_a);$j++){
                if($lsdj_shishi_a[$j]['paiche_endDate']<time()){
                    
                    $lsdj_shishi_a[$j]['paiche_startDate']=date('Y-m-d H:i:s', $lsdj_shishi_a[$j]['paiche_startDate']);
                    $lsdj_shishi_a[$j]['paiche_endDate']=date('Y-m-d H:i:s', $lsdj_shishi_a[$j]['paiche_endDate']);
                    $lsdj_chaoshi[]=$lsdj_shishi_a[$j];
                }else{
                    $lsdj_shishi_a[$j]['paiche_startDate']=date('Y-m-d H:i:s', $lsdj_shishi_a[$j]['paiche_startDate']);
                    $lsdj_shishi_a[$j]['paiche_endDate']=date('Y-m-d H:i:s', $lsdj_shishi_a[$j]['paiche_endDate']);
                    $lsdj_shishi[]=$lsdj_shishi_a[$j];
                }
                
            }
            $car_list[$i]['time']['lsdj_chaoshi']=$lsdj_chaoshi;
            $car_list[$i]['time']['lsdj_shishi']=$lsdj_shishi;



             //长期代驾预约
            $sql="select paiche_startDate,paiche_endDate from paiche where paicheCar2={$car_list[$i]['car_id']}  and paiche_type=4 and paiche_recycle!=1 and paiche_status=0";
            $cqdj_yuyue=$CommonFunction->getList($sql);
            for($j=0;$j<count($cqdj_yuyue);$j++){
                $cqdj_yuyue[$j]['paiche_startDate']=date('Y-m-d H:i:s', $cqdj_yuyue[$j]['paiche_startDate']);
                $cqdj_yuyue[$j]['paiche_endDate']=date('Y-m-d H:i:s', $cqdj_yuyue[$j]['paiche_endDate']);
            }
            $car_list[$i]['time']['cqdj_yuyue']=$cqdj_yuyue;

            //长期代驾实时单
            $sql="select a.paiche_startDate,a.paiche_endDate from paiche  as a left join settle as b on a.paiche_id=b.settlePaicheId where a.paicheCar={$car_list[$i]['car_id']}  and a.paiche_type=4 and a.paiche_recycle!=1 and a.paiche_status=1 AND b.settle_totalKm<=0 ";
            $cqdj_shishi_a=$CommonFunction->getList($sql);
            $cqdj_shishi=null;$cqdj_chaoshi=null;
            for($j=0;$j<count($cqdj_shishi_a);$j++){
                if($cqdj_shishi_a[$j]['paiche_endDate']<time()){
                   
                    $cqdj_shishi_a[$j]['paiche_startDate']=date('Y-m-d H:i:s', $cqdj_shishi_a[$j]['paiche_startDate']);
                    $cqdj_shishi_a[$j]['paiche_endDate']=date('Y-m-d H:i:s', $cqdj_shishi_a[$j]['paiche_endDate']);
                    $cqdj_chaoshi[]=$cqdj_shishi_a[$j];
                }else{
                    $cqdj_shishi_a[$j]['paiche_startDate']=date('Y-m-d H:i:s', $cqdj_shishi_a[$j]['paiche_startDate']);
                    $cqdj_shishi_a[$j]['paiche_endDate']=date('Y-m-d H:i:s', $cqdj_shishi_a[$j]['paiche_endDate']);
                    $cqdj_shishi[]=$cqdj_shishi_a[$j];
                }
                
            }
            $car_list[$i]['time']['cqdj_chaoshi']=$cqdj_chaoshi;
            $car_list[$i]['time']['cqdj_shishi']=$cqdj_shishi;




             //长期大客预约
            $sql="select paiche_startDate,paiche_endDate from paiche where paicheCar2={$car_list[$i]['car_id']}  and paiche_type=5 and paiche_recycle!=1 and paiche_status=0";
            $dk_yuyue=$CommonFunction->getList($sql);
            for($j=0;$j<count($dk_yuyue);$j++){
                $dk_yuyue[$j]['paiche_startDate']=date('Y-m-d H:i:s', $dk_yuyue[$j]['paiche_startDate']);
                $dk_yuyue[$j]['paiche_endDate']=date('Y-m-d H:i:s', $dk_yuyue[$j]['paiche_endDate']);
            }
            $car_list[$i]['time']['dk_yuyue']=$dk_yuyue;

            //长期大客实时单
            $sql="select a.paiche_startDate,a.paiche_endDate from paiche as a left join settle as b on a.paiche_id=b.settlePaicheId where a.paicheCar={$car_list[$i]['car_id']}  and a.paiche_type=5 and a.paiche_recycle!=1 and a.paiche_status=1 AND b.settle_totalKm<=0";
            $dk_shishi_a=$CommonFunction->getList($sql);
            $dk_shishi=null;$dk_chaoshi=null;
            for($j=0;$j<count($dk_shishi_a);$j++){
                if($dk_shishi_a[$j]['paiche_endDate']<time()){
                    
                    $dk_shishi_a[$j]['paiche_startDate']=date('Y-m-d H:i:s', $dk_shishi_a[$j]['paiche_startDate']);
                    $dk_shishi_a[$j]['paiche_endDate']=date('Y-m-d H:i:s', $dk_shishi_a[$j]['paiche_endDate']);
                    $dk_chaoshi[]=$dk_shishi_a[$j];
                }else{
                    $dk_shishi_a[$j]['paiche_startDate']=date('Y-m-d H:i:s', $dk_shishi_a[$j]['paiche_startDate']);
                    $dk_shishi_a[$j]['paiche_endDate']=date('Y-m-d H:i:s', $dk_shishi_a[$j]['paiche_endDate']);
                    $dk_shishi[]=$dk_shishi_a[$j];
                }
                
            }
            $car_list[$i]['time']['dk_chaoshi']=$dk_chaoshi;
            $car_list[$i]['time']['dk_shishi']=$dk_shishi;
        }
        $sql="select count(*) as count from car as a left join car_price as b on a.car_id=b.car_id {$where} {$order}";
        $count=$CommonFunction->getDataY($sql,"count");
        $req_list['count']=$count;
        $req_list['car_list']=$car_list;
        echo json_encode($req_list);
        //print_r($car_list);exit;
        
    }
    /*
    function index(){
        
        //print_r(strtotime("2018-12-31 23:59:59"));exit;

        $CommonFunction=new CommonFunction();
        $stime=strtotime(date('Y-m-d'));
        $etime=$stime+60*60*24*10;
        $sql="SELECT * FROM `car`  WHERE car_recycle!=1 and car_status!=3";
        $list=$CommonFunction->getList($sql);
        for($i=0;$i<count($list);$i++){
            $sql="select paiche_startDate,paiche_endDate from paiche where paiche_type=1  and paiche_startDate<{$etime} and paiche_endDate>$stime and ((paiche_jie=-1 and paicheCar2={$list[$i]['car_id']}) or (paiche_jie=1 and paicheCar={$list[$i]['car_id']}))";
            $list[$i]['paiche']=$CommonFunction->getList($sql);
            
            
        }
        $list_a=null;
        for($i=0;$i<25;$i++){
            $list_a[]=$i;
        }
        $date_time=null;
        for($i=0;$i<10;$i++){
            $time['riqi']=date('Y-m-d',$stime+60*60*24*$i);
            $time['xingqi']=date("N",$stime+60*60*24*$i);
            if($time['xingqi']==1){
                $time['xingqi']='星期一';
            }else if($time['xingqi']==2){
                $time['xingqi']='星期二';
            }else if($time['xingqi']==3){
                $time['xingqi']='星期三';
            }else if($time['xingqi']==4){
                $time['xingqi']='星期四';
            }else if($time['xingqi']==5){
                $time['xingqi']='星期五';
            }else if($time['xingqi']==6){
                $time['xingqi']='星期六';
            }else{
                $time['xingqi']='星期日';
            }

            $date_time[]=$time;
            
        }
        
        $object = new stdClass();
        $object->list = $list;
        $object->date_time = $date_time;
        $object->list_a = $list_a;
       
        $object->stime = $stime;

        //print_r($object->date_time);exit;
        $view  = $this->createView("operator/public/index.html");
        $view->assign($object);
        $view->display();
    }*/
    // function index_a(){
    // 	$startdate=strtotime(date('Y-m-01'));
    // 	$startdate_a=strtotime(date('Y-01-01'));
    //     $enddate= time();
    //     $list_a=$this->getList($startdate_a,$enddate);
    //     //print_r($list_a);exit;
    //     $list=$this->getList($startdate,$enddate);
    //     $view  = $this->createView("operator/public/index.html");
    //     $object = new stdClass();
    //     $object->list = $list;
    //     $object->list_a = $list_a;
    //     $view->assign($object);
    //     $view->display();
        
    // }

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

		return $shop_list;
	}
	
	

}
