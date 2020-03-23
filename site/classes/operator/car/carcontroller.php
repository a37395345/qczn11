<?php
import('operator.navi.admincontroller');
import('publicFunction.CommonFunction');
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('imag.image.uploader');
import('operator.navi.privilegehelper');
import('imag.fusecookie');
import('imag.filesystem.fusefile');
import('imag.filesystem.filesystem');
import('imag.utilities.tool');
import('imag.utilities.pagestyle_a');

class carController extends AdminController
{
	private $package="site/operator/car";
	function __construct($config = array())
	{
		parent::__construct($config);
		$this->registerTask( 'yilan','yilan');
		$this->registerTask( 'carrun','carrun');
		$this->registerTask( 'price','price');
		$this->registerTask( 'qiehuan','qiehuan');
		$this->registerTask( 'update_qiehuan','update_qiehuan');
		$this->registerTask( 'xiangxi_a','xiangxi_a');
		$this->registerTask( 'siji_xiangxi','siji_xiangxi');
		$this->registerTask( 'picture','picture');
		$this->registerTask( 'timeYilan','timeYilan');
		$this->registerTask( 'mobile_car','mobile_car');
		$this->registerTask( 'getCartime','getCartime');
		$this->registerTask( 'shichang_car','shichang_car');
		$this->registerTask( 'set_zhuanyong','set_zhuanyong');
		$this->registerTask( 'set_zhuanyongAction','set_zhuanyongAction');
		$this->registerTask( 'update_price','update_price');
		$this->registerTask( 'price_updateAcc','price_updateAcc');

		$this->registerTask( 'update_image','update_image');
		$this->registerTask( 'update_imageAction','update_imageAction');
		
		
		
		
	}
	//图片集合
	function picture(){
		$car_id = Request::getVar('car_id','get');
		//print_r($car_id);exit;
		$nowserial=Request::getVar('nowserial','get');
		$CommonFunction=new CommonFunction();
		$sql="SELECT * FROM `car_images` WHERE `car_id`={$car_id}";
		$imagelist=$CommonFunction->getList($sql);
		$total=count($imagelist);
		$object = new stdClass();
		$object->imagelist = $imagelist;
		$object->nowserial = $nowserial;
		$object->total= $total;
        $view  = $this->createView("operator/car/picture.html");
		$view->assign($object);
		$view->display();
	}


	function xiangxi_a(){
		$CommonFunction=new CommonFunction();
		$car_id = Request::getVar('car_id','get');
		$sql="SELECT * from car where car_id={$car_id}";
		$car=$CommonFunction->getData($sql);
		$car['car_cartDate']=date("Y-m-d",$car['car_cartDate']);
		$sql="SELECT * FROM `car_images` WHERE `car_id`={$car_id}";
		$images=$CommonFunction->getList($sql);
		$object = new stdClass();
		$object->images = $images;
		$object->car = $car;
		//print_r($car['car_types']);exit;
		$view  = $this->createView("operator/car/xiangxi_a.html");
		$view->assign($object);
		$view->display();
	}


	function siji_xiangxi(){
		$CommonFunction=new CommonFunction();
		$u_id = Request::getVar('u_id','get');
		$sql="SELECT * from emp where emp_id={$u_id}";
		$emp=$CommonFunction->getData($sql);
		$emp['emp_jiazhaotime']=date("Y-m-d",$emp['emp_jiazhaotime']);
		//print_r($emp);exit;
		$object = new stdClass();
		$object->emp = $emp;
		$view  = $this->createView("operator/car/siji_xiangxi.html");
		$view->assign($object);
		$view->display();

	}

	function yilan(){
		$CommonFunction=new CommonFunction();
		$view  = $this->createView("operator/car/yilan.html");
		$object = new stdClass();
		$object->car = $this->getNumCar(1,'');
		$view->assign($object);
		$view->display();
	}
	//切换车辆状态
	
	function update_qiehuan(){
		$CommonFunction=new CommonFunction();
		$car_id = Request::getVar('car_id','post');
		$car_nowSite = Request::getVar('car_nowSite','post');
		$weixiu = Request::getVar('weixiu','post');
		$object = new stdClass();

		if($weixiu==0){
			$object->car_status=0;
			$object->car_maintreason=0;
		}else if($weixiu==1){
			$object->car_status=2;
			$object->car_maintreason=0;
		}else if($weixiu==2){
			$object->car_status=2;
			$object->car_maintreason=1;
		}else if($weixiu==3){
			$object->car_status=2;
			$object->car_maintreason=2;
		}
		$object->car_id = $car_id;
		$object->car_nowSite = $car_nowSite;
		//print_r($object);exit;
		$req=true;
		if($CommonFunction->update_a($object,"car_id","car","")){
			$req=true;
		}else{
			$req=false;
		}
		if($req){
			$CommonFunction->setAction("切换车辆存放状态-".$car_id);
		}
		$object = new stdClass();
        $object->result = $req ? "修改成功！":"修改失败，返回重试！";
        $view  = $this->createView("operator/car/result.html");
        $view->assign($object);
        $view->display();

	}

	//切换车辆状态
	function qiehuan(){
		$CommonFunction=new CommonFunction();
		$car_id = Request::getVar('car_id','get');
		$sql="SELECT car_id,car_status,car_nowSite,car_maintreason from car where car_id={$car_id}";
		$car=$CommonFunction->getData($sql);
		$shop_list=$CommonFunction->getList("select shop_id,shop_name from  shop where stutas=0 order by shop_order asc");
		$object = new stdClass();
		$object->shop_list = $shop_list;
		$object->car = $car;

		$view  = $this->createView("operator/car/qiehuan.html");
		$view->assign($object);
		$view->display();
	}

	//报价方案
	function price(){
		$CommonFunction=new CommonFunction();
		$car_id = Request::getVar('car_id','get');
		$sql="SELECT * from car_price where car_id={$car_id} and plan_day=1";
		$pricelist = $CommonFunction->getList($sql);
		$sql_a="SELECT * from car where car_id={$car_id}";
		$car=$CommonFunction->getList($sql_a);
		$object = new stdClass();
		$object->pricelist = $pricelist[0];
		$object->car = $car[0];
		$object->car_id = $car_id;
		//print_r($car[0]);exit;
        $view  = $this->createView("operator/car/price.html");
		$view->assign($object);
		$view->display();

	}





	function carrun(){
		
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/yilan");
		$shop_list=$CommonFunction->getList('select shop_id,shop_name from shop where stutas=0');
		$d_zujin = Request::getVar('d_zujin','');
		$status = Request::getVar('status','');
		$search_shop = Request::getVar('search_shop','');
		$car_num = Request::getVar('car_num','');
		$g_zujin = Request::getVar('g_zujin','');
		$car_nowSite=Request::getVar('car_nowSite','');
		$car_model=Request::getVar('car_model','');
		$zhuanyong=Request::getVar('zhuanyong','');
		
		//print_r($maint);exit;
		$car_types=Request::getVar('car_types','');
		$where=" and 1=1";
		if(!empty($car_num)){
			$where.=" and a.car_num like '%{$car_num}%'";
		}
		if(!empty($zhuanyong)){
			$where.=" and a.zhuanyong={$zhuanyong}";
		}
		if(!empty($g_zujin)){
			$where.=" and b.plan_rentamount<={$g_zujin}";
		}
		if(!empty($d_zujin)){
			$where.=" and b.plan_rentamount>={$d_zujin}";
		}
		if(!empty($car_nowSite)){
			$where.=" and a.car_nowSite={$car_nowSite}";
		}
		if(!empty($car_model)){
			$where.=" and a.car_model like '%{$car_model}%'";
		}
		if(!empty($car_types)){
			if($car_types==99){
				$car_types=0;
			}
			$where.=" and a.car_types ={$car_types}";
		}
		//print_r($car_types);exit;

		if (!isset($status)) $status=9;
		$data=$this->getNumCar(2,$where);
		
		$list=array();
			if ($status==1){//租用
				$list=$data['znum'];
				if (!empty($search_shop)){
					$list_a=array();
					for($i=0;$i<count($list);$i++){
						if($list[$i]['paicheCounterShop']==$search_shop){
							$list_a[]=$list[$i];	
						}
					}
					$list=$list_a;
				}
			}else if($status==0){//空闲
				$list=$data['knum'];
				if (!empty($search_shop)){
					$list_a=array();
					for($i=0;$i<count($list);$i++){
						if($list[$i]['car_nowSite']==$search_shop){
							$list_a[]=$list[$i];
						}
					}
					$list=$list_a;
				}
			}else if($status==2){//维修
				//print_r(Request::getVar('maint','get'));exit;
				
					
				
					$list=$data['wnum'];
				
			}else if($status==3){//维修
				$list=$data['ynum'];
				
			}else if($status==4){//维修
				$list=$data['dwx'];
				
			}else{
				$list=$data['tnum'];
			}


		for($i=0;$i<count($list);$i++){
			//print_r($list[$i]['plan_rentamount']."|");
			for($j=$i+1;$j<count($list);$j++){
				if($list[$i]['plan_rentamount']<$list[$j]['plan_rentamount']){
					$tem=$list[$i];
					$list[$i]=$list[$j];
					$list[$j]=$tem;
				}else if($list[$i]['plan_rentamount']==$list[$j]['plan_rentamount']){
					if($list[$i]['car_id']<$list[$j]['car_id']){
						$tem=$list[$i];
						$list[$i]=$list[$j];
						$list[$j]=$tem;
					}
				}
			}
		}

		//exit;
		//print_r($list[0]['car_price']);exit;
			////	
		$car['list']=$list;
		$car['count']=count($list);
		$zhaunyong_list=$CommonFunction->getList('select * from car_zhuanyong');
		$view  = $this->createView("operator/car/carrunlist.html");
		$object = new stdClass();
		$object->car = $car;
		$object->status = $status;
		$object->zhaunyong_list = $zhaunyong_list;
		$object->shop_list = $shop_list;
		$object->search_shop=$search_shop;
		$object->shoplist=$CommonFunction->getList("Select shop_id,shop_name From shop where stutas=0");
		$object->zijia_detail=$CommonFunction->panduan_rule("site/operator/zijia_linshi/zijia_detail");
		$object->maint=Request::getVar('maint','get');
		
		$view->assign($object);
		$view->display();
	}





	//车辆一览表
	function getNumCar($in,$where_a){
		$CommonFunction=new CommonFunction();
		$sql="SELECT c.emp_name,aa.paicheDriver,c.emp_image,aa.paiche_id,aa.paicheCar,aa.paiche_contractNum,aa.paicheCounterShop,aa.paiche_type FROM `paiche` as aa Inner Join settle as bb on aa.paiche_id =bb.settlePaicheId LEFT JOIN `emp` AS c ON aa.`paicheDriver`=c.`emp_id` where aa.paiche_recycle!=1 AND IFNULL( aa.paiche_aaa,'')<>'补单' AND aa.paicheCar >0 AND (aa.paiche_status=0 or aa.paiche_status=1) AND aa.paiche_type IN (4,5) AND aa.paiche_startDate<=".time(). " AND aa.paiche_endDate>=".time().
			   " Union All 
			   SELECT c.emp_name,aa.paicheDriver,c.emp_image,aa.paiche_id,aa.paicheCar,aa.paiche_contractNum,aa.paicheCounterShop,aa.paiche_type  FROM `paiche` as aa  LEFT JOIN `emp` AS c ON aa.`paicheDriver`=c.`emp_id` where aa.paiche_jie=1 and aa.paiche_startDate<=".time()." and paiche_type=1  
			   
			   Union All SELECT c.emp_name,aa.paicheDriver,c.emp_image,aa.paiche_id,aa.paicheCar,aa.paiche_contractNum,aa.paicheCounterShop,aa.paiche_type  FROM `paiche` as aa  LEFT JOIN `emp` AS c ON aa.`paicheDriver`=c.`emp_id` where aa.paiche_jie=1 and paiche_type=2 and aa.paiche_startDate<=".time()." 

			   Union All
			   SELECT c.emp_name,aa.paicheDriver,c.emp_image,aa.paiche_id,aa.paicheCar,aa.paiche_contractNum,aa.paicheCounterShop,aa.paiche_type  FROM `paiche` as aa  LEFT JOIN `emp` AS c ON aa.`paicheDriver`=c.`emp_id`  where  aa.paiche_type =3 and aa.paiche_jie=1 and aa.paiche_startDate<=".time();
		//获取非空闲车的信息
			   //print_r($sql);exit;
		$data=$CommonFunction->getList("Select distinct paicheCar,paicheCounterShop,emp_name,paiche_type,paicheDriver,emp_image,paiche_id From ({$sql}) km ");
		
		$sql_1="SELECT a.*,b.plan_rentamount,b.plan_deposit1,b.plan_deposit2,c.name FROM `car` as a LEFT join car_price as b on a.car_id=b.car_id left join car_zhuanyong as c on a.zhuanyong=c.id WHERE a.car_recycle!=1 and a.car_status!=3 and b.plan_day=1 {$where_a}";

		//获取门店信息
		$sql_shop="select shop_id,shop_name from shop where stutas=0 order by shop_order asc";
		$shop=$CommonFunction->getList($sql_shop);

		//所有的车
		$data_tnum= $CommonFunction->getList($sql_1);
		//待维修的车辆
		$data_dwx=array();
		$dwx=0;
		//正常维修的车辆
		$data_wnum=array();
		$wnum=0;
		//异常维修的车辆
		$data_ynum=array();
		$ynum=0;
		//空闲车辆
		$data_knum=array();
		//非空闲的车辆
		$data_znum=array();
		//所有车辆的总数
		$index=count($data_tnum);

		for($i=0;$i<$index;$i++){
			$k=0;
			//车辆图片
			$data_tnum[$i]['car_photo']=$data_tnum[$i]['car_image'];
			$data_tnum[$i]['name']=$data_tnum[$i]['name'];
			for($j=0;$j<count($data);$j++){
				//如果是非空闲车辆
				if($data_tnum[$i]['car_id']==$data[$j]['paicheCar']){
					$k=$k+1;
					//派车司机的ID
					$data_tnum[$i]['drive']=$data[$j]['paicheDriver'];
					//派车司机的名字
					$data_tnum[$i]['siji']=$data[$j]['emp_name'];
					//派车司机的图片
					$data_tnum[$i]['drive_photo']=$data[$j]['emp_image'];
					$data_tnum[$i]['paiche_type']=$data[$j]['paiche_type'];
					
					
					$data_tnum[$i]['paicheCounterShop']=$data[$j]['paicheCounterShop'];
					$data_tnum[$i]['paiche_id']=$data[$j]['paiche_id'];
					break;
				}

			}



			
			if($k==0){
				$data_tnum[$i]['paiche_type']=0;
				$data_tnum[$i]['paicheCounterShop']='';
				$data_tnum[$i]['paiche_id']=0;
			}

			for($j=0;$j<count($shop);$j++){
				//车子所属门店
				if($data_tnum[$i]['car_nowSite']==$shop[$j]['shop_id']){
					$data_tnum[$i]['shop_name']=$shop[$j]['shop_name'];
				}
				//业务门店
				if($data_tnum[$i]['paicheCounterShop']==$shop[$j]['shop_id']){
					$data_tnum[$i]['paiche_shopname']=$shop[$j]['shop_name'];
				}
			}


		}
		
		
		//print_r($data_tnum);exit;
		
		

		for($i=0;$i<$index;$i++){
			//正常维修的车辆
			if($data_tnum[$i]['car_status']==2 && $data_tnum[$i]['car_maintreason']==0){
				$data_tnum[$i]['car_status_code']=2;
				$data_wnum[$wnum]=$data_tnum[$i];
				
				$wnum=$wnum+1;
			}
			//异常维修的车辆
			if($data_tnum[$i]['car_status']==2 && $data_tnum[$i]['car_maintreason']==1){
				$data_tnum[$i]['car_status_code']=2;
				$data_ynum[$ynum]=$data_tnum[$i];
				$ynum=$ynum+1;
			}
			//待维修的车辆
			if($data_tnum[$i]['car_status']==2 && $data_tnum[$i]['car_maintreason']==2){
				$data_tnum[$i]['car_status_code']=2;
				$data_dwx[$dwx]=$data_tnum[$i];
				$dwx=$dwx+1;
			}

			$k=0;

			for($j=0;$j<count($data);$j++){
					if($data_tnum[$i]['car_id']==$data[$j]['paicheCar']){
						$k=$k+1;
					}
				
			}

			if($data_tnum[$i]['car_status']!=2){
				if($k==0){
					$data_tnum[$i]['car_status_code']=0;
					$data_knum[]=$data_tnum[$i];
				}else{
					$data_tnum[$i]['car_status_code']=1;
					$data_znum[]=$data_tnum[$i];
				}
				
			}

		}
	
		$data_zlist=array();$data_klist=array();

		$req['tnum']=$data_tnum;
		$req['wnum']=$data_wnum;
		$req['ynum']=$data_ynum;
		$req['znum']=$data_znum;
		$req['knum']=$data_knum;
		$req['dwx']=$data_dwx;

		$car['tnum']=count($data_tnum);
		$car['wnum']=count($data_wnum);
		$car['ynum']=count($data_ynum);
		$car['knum']=count($data_knum);
		$car['znum']=count($data_znum);
		$car['dwx']=count($data_dwx);
		//print_r($req['znum']);exit;

		for($i=0;$i<count($shop);$i++){
			$k=0;
			for($j=0;$j<count($data_knum);$j++){
				if($shop[$i]['shop_id']==$data_knum[$j]['car_nowSite']){
					$k=$k+1;
				}
			}
			$data_klist[$i]['total']=$k;
			$data_klist[$i]['shop_id']=$shop[$i]['shop_id'];
			$data_klist[$i]['shop_name']=$shop[$i]['shop_name'];


			$l=0;
			for($j=0;$j<count($data_znum);$j++){
				if($shop[$i]['shop_id']==$data_znum[$j]['paicheCounterShop']){
					$l=$l+1;
				}
			}
			$data_zlist[$i]['total']=$l;
			$data_zlist[$i]['shop_id']=$shop[$i]['shop_id'];
			$data_zlist[$i]['shop_name']=$shop[$i]['shop_name'];
		}

		$car['klist']=$data_klist;
		$car['zlist']=$data_zlist;

		if($in==1){
			return $car;
		}else{
			return $req;
		}
			
		
		

	}

	function timeYilan(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/timeYilan");
		$view  = $this->createView("operator/car/timeYilan.html");
        $view->display(); 
	}
	function mobile_car(){
		$CommonFunction=new CommonFunction();
		//$CommonFunction->getQuanxian($this->package."/timeYilan");
		$view  = $this->createView("operator/car/mobile_car.html");
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
        //车辆类别
        $car_types= Request::getVar('car_types','post');
        if(!empty($car_types)){
        	if($car_types==99){
        		$car_types=0;
        	}
            $where.=" and a.car_types ={$car_types}";
        }
        
        //金额排序
        $rentsort= Request::getVar('rentsort','post');
        $order=" order by b.plan_rentamount desc,a.car_id desc";
        if($rentsort==2){
             $order=" order by b.plan_rentamount asc,a.car_id desc ";
        }

        $sql="select a.car_image,a.car_status,a.car_maintreason,a.car_id,a.car_num,a.car_model,b.plan_rentamount,b.plan_deposit2,b.plan_deposit1 from car as a left join car_price as b on a.car_id=b.car_id {$where} {$order} LIMIT {$start},{$per_page}";
        
        $car_list=$CommonFunction->getList($sql);
        //print_r($car_list);exit;
        for($i=0;$i<count($car_list);$i++){
            //临时自驾派预约车单
            $sql="select a.paiche_startDate,a.paiche_endDate,b.shop_name from paiche as a left join shop as b on a.paicheCounterShop=b.shop_id where a.paicheCar2={$car_list[$i]['car_id']} and a.paiche_jie=-1 and a.paiche_type=1";
            $yuyue=$CommonFunction->getList($sql);
            for($j=0;$j<count($yuyue);$j++){
                $yuyue[$j]['paiche_startDate']=date('Y-m-d H:i:s', $yuyue[$j]['paiche_startDate']);
                $yuyue[$j]['paiche_endDate']=date('Y-m-d H:i:s', $yuyue[$j]['paiche_endDate']);
            }
            $car_list[$i]['time']['zijia_yuyue']=$yuyue;
            //临时自驾正在用的单子
            $sql="select a.paiche_startDate,a.paiche_endDate,b.shop_name from paiche as a left join shop as b on a.paicheCounterShop=b.shop_id where a.paicheCar={$car_list[$i]['car_id']} and a.paiche_jie=1 and a.paiche_type=1";
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

    //市场部车辆管理
    function shichang_car(){
    	//print_r("expression");exit;
    	$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/shichang_car");
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$base_url = "shichang_car.php?";
		$per_page = 20;
		$style = new pagestyle_a();
		$start = ($p-1)*$per_page;
		$where="where a.car_recycle!=1 and b.plan_day=1 and a.car_status!=3";
		$car_num=Request::getVar('car_num','get');
		$zhuanyong=Request::getVar('zhuanyong','get');
		
		if(!empty($car_num)){$where.=" AND a.car_num like '%".$car_num."%'";
		$base_url.="&car_num={$car_num}";}
		if(!empty($zhuanyong)){
			$where.=" AND a.zhuanyong={$zhuanyong}";
			$base_url.="&zhuanyong={$zhuanyong}";
		}
		$sql="select a.*,b.*,c.name from car as a left join car_price as b on a.car_id=b.car_id left join car_zhuanyong as c on a.zhuanyong=c.id {$where} order by b.plan_rentamount desc,a.car_id asc limit {$start},{$per_page}";
		$list=$CommonFunction->getList($sql);
		$sql="select count(*) as count from car as a left join car_price as b on a.car_id=b.car_id {$where} ";
		$total_item = $CommonFunction->getDataY($sql,"count");
		$options = array(
			"baseurl"	 => $base_url,
			"totalitems" => $total_item,
			"perpage"	 => $per_page,
			"page"	     => $p,
			"maxpage"	 => 20,
			"pagestyle"  => $style,
			"showtotal"  => false
		);
		$sql="select * from car_zhuanyong";
		$zhaunyong_list=$CommonFunction->getList($sql);
		//print_r($list);exit;
		$pagination = new Pagination($options);
		$p = $pagination->getPage();
		$view  = $this->createView("operator/car/shichang_car.html");
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();		
		$object->list = $list;
		$object->zhaunyong_list = $zhaunyong_list;
		$object->p = $p;
		$object->total = $total_item;
		$view->assign($object);
		$view->display();

    }

    //修改车辆专属页面
    function set_zhuanyong(){
    	$CommonFunction=new CommonFunction();
    	$car_id=Request::getVar('car_id','get');
    	$sql="select * from car_zhuanyong";
    	$list=$CommonFunction->getList($sql);
    	$object = new stdClass();
    	$sql="select * from car where car_id={$car_id}";
    	$car=$CommonFunction->getData($sql);
    	$object->car = $car;
    	$object->list = $list;
    	$object->car_id = $car_id;
    	$view  = $this->createView("operator/car/set_zhuanyong.html");
		$view->assign($object);
		$view->display();
    }
    function set_zhuanyongAction(){
    	$CommonFunction=new CommonFunction();
    	$car_id=Request::getVar('car_id','post');
    	$zhuanyong=Request::getVar('zhuanyong','post');
    	$car_remarks_b=Request::getVar('car_remarks_b','post');
    	
    	$object = new stdClass();
    	$object->car_id = $car_id;
    	$object->zhuanyong = $zhuanyong;
    	$object->car_remarks_b = $car_remarks_b;
    	if($CommonFunction->update_a($object,"car_id","car","")){
		 	$re=true;
		}else{
		 	$re=false;
		}
		$object = new stdClass();
        $object->result = $re ? "修改成功！":"修改失败，返回重试！";
        $view  = $this->createView("operator/car/result.html");
        $view->assign($object);
        $view->display();
    }
    //车辆报价管理
    function update_price(){
    	//print_r("expression");exit;
    	$CommonFunction=new CommonFunction();
		$id = Request::getVar('id','get');
		$sql="select * from car_price where car_id={$id} and plan_day=1";
		$car_price=$CommonFunction->getData($sql);
		$object = new stdClass();
		$object->car_price = $car_price;
        $view  = $this->createView("operator/car/update_price.html");
		$view->assign($object);
		$view->display();
	}
	function price_updateAcc(){
		$CommonFunction=new CommonFunction();
		$id = Request::getVar('id','post');

		$object = new stdClass();
		$object->id= $id;
		$object->plan_name= "租一天";
		$object->plan_day=1;
		$object->plan_rentamount=Request::getVar('plan_rentamount','post');
		$object->plan_deposit1=Request::getVar('plan_deposit1','post');
		$object->plan_deposit2=Request::getVar('plan_deposit2','post');

		$object->plan_chaoshi=Request::getVar('plan_chaoshi','post');
		$object->plan_chaokm=Request::getVar('plan_chaokm','post');
		$object->plan_chaokms=Request::getVar('plan_chaokms','post');
		$object->plan_chaokmy=Request::getVar('plan_chaokmy','post');
		$req=true;
		if($CommonFunction->update_a($object,"id","car_price","")){
			$req=true;
		}else{
			$req=false;
		}
		$object = new stdClass();
        $object->result = $req ? "修改成功！":"修改失败，返回重试！";
        $view  = $this->createView("operator/car/result.html");
        $view->assign($object);
        $view->display();
	}
	//修改图片
	function update_image(){

		$CommonFunction=new CommonFunction();
		$car_id = Request::getVar('car_id','get');
		$sql="select car_image from car where car_id={$car_id}";
		$car_image=$CommonFunction->getDataY($sql,"car_image");
		$sql="select * from car_images where car_id={$car_id}";
		$image_list=$CommonFunction->getList($sql);
		$object = new stdClass();
		$object->car_image= $car_image;
		$object->image_list= $image_list;
		$object->car_id= $car_id;
		$view  = $this->createView("operator/car/update_image.html");
		$view->assign($object);
		$view->display();
	}

	function update_imageAction(){
		$upload_root = Config::homedir()."/thumb/";	
		$CommonFunction=new CommonFunction();
		$car_id = Request::getVar('car_id','post');
		$car_image=Request::getVar('oldimages','post');
		if(array_key_exists('images',$_FILES) && $_FILES["images"]["error"] == UPLOAD_ERR_OK){
            $uploader = new Uploader($_FILES['images'],$upload_root);
            $uploader->toUpload();
            $car_image = $uploader->getFolderFile();
	    }
	    
	    $object = new stdClass();
	    $object ->car_image=$car_image;
	    $object ->car_id=$car_id;
	    $req=true;
	    if($CommonFunction->update_a($object,"car_id","car","")){

			$req=true;
		}else{
			$req=false;
		}

		$delimg[]=Request::getVar('delimg','post');
        $delimg=$delimg[0];
        //print_r($delimg);exit;
        if(count($delimg)>0){
            for($i=0;$i<count($delimg);$i++){   
                $CommonFunction->dalete_sql("car_images","id",$delimg[$i]);
            }   
        }
		$object = new stdClass();
        $object->result = $req ? "修改成功！":"修改失败，返回重试！";
        $view  = $this->createView("operator/car/result.html");
        $view->assign($object);
        $view->display();

	}

}
