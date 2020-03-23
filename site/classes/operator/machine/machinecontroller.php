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
import('imag.utilities.pagestyle_a');

error_reporting(E_ERROR);

class MachineController extends AdminController
{
	function __construct($config = array())
	{
		parent::__construct($config);
		

		$this->registerTask( 'create','create');
		$this->registerTask( 'insert','insert');
		$this->registerTask( 'modify','modify');
		$this->registerTask( 'update','update');
		$this->registerTask( 'cancel','cancel');
		$this->registerTask( 'delete','del');
		$this->registerTask( 'change','change');
		$this->registerTask( 'changeacc','changeacc');
		$this->registerTask( 'detail','detail');

		$this->registerTask( 'basefirst','basefirst');
		$this->registerTask( 'baselist','baselist');
		$this->registerTask( 'breakfirst','breakfirst');
		$this->registerTask( 'breaklist','breaklist');
		$this->registerTask( 'breakdetail','breakdetail');
		$this->registerTask( 'carstatus','carstatus');
		$this->registerTask( 'carrunfirst','carrunfirst');
		$this->registerTask( 'carrun','carrun');
		$this->registerTask( 'carrundetail','carrundetail');
		$this->registerTask( 'planlist','planlist');
		$this->registerTask( 'breakcreate','breakcreate');
		$this->registerTask( 'breakinsert','breakinsert');
		$this->registerTask( 'breakmodify','breakmodify');
		$this->registerTask( 'breakupdate','breakupdate');
		$this->registerTask( 'breakdelete','breakdelete');
		$this->registerTask( 'breakunfreeze','breakunfreeze');
		$this->registerTask( 'getbreakinfo','getbreakinfo');
		$this->registerTask( 'upbreakremark','upbreakremark');
		$this->registerTask( 'breakitem','breakitem');
		$this->registerTask( 'breakitem_acc','breakitem_acc');
		$this->registerTask( 'breakfreeze','breakfreeze');
		$this->registerTask( 'breakfreeze_acc','breakfreeze_acc');
		$this->registerTask( 'account','account');
		$this->registerTask( 'account_accept','account_accept');
		$this->registerTask( 'getMaintList','getMaintList');
		$this->registerTask( 'getInsurList','getInsurList');
		$this->registerTask( 'getCarefulList','getCarefulList');
		$this->registerTask( 'export','export');
		$this->registerTask( 'picture','picture');
		$this->registerTask( 'price','price');
		$this->registerTask( 'price_acc','price_acc');
		$this->registerTask( 'getcarprice','getcarprice');
		$this->registerTask( 'changeshop','changeshop');
		$this->registerTask( 'getbusiness','getbusiness');
		$this->registerTask( 'updateprice','updateprice');
		$this->registerTask( 'selectcar','selectcar');
		$this->registerTask( 'changelist','changelist');
		$this->registerTask( 'changecreate','changecreate');
		$this->registerTask( 'changecreate_acc','changecreate_acc');
		$this->registerTask( 'update_shuoming','update_shuoming');
		$this->registerTask( 'view_shuoming','view_shuoming');
		$this->registerTask( 'total_list','total_list');
		//$this->registerTask( 'price_a','price_a');
		$this->registerTask( 'update_price','update_price');
		$this->registerTask( 'price_updateAcc','price_updateAcc');

		
		
		
	}
	
	function display(){
		echo "display";
	}
	//说明修改页
	function view_shuoming(){
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$shuoming=$model->getListBySql_a('select * from qczn_shuoming where id=1');
		$view  = $this->createView("operator/machine/view_shuoming.html");
		$object = new stdClass();
		$object->text = $shuoming[0]['text'];
		$view->assign($object);
		$view->display();
	}

	//修改说明，跳转basefirst.php；
	function update_shuoming(){
		$text = Request::getVar('text','post');
		//print_r($text.'lll');exit;
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "first.php";
		}
		$model = $this->createModel("machine",dirname( __FILE__ ));
		
		$recid=$model->update_shuoming("update qczn_shuoming set text='".$text."' where id=1");
		if ($recid){
			$this->redirect($forward,"修改成功");
		}else{
			$this->redirect($forward,"修改失败");
		}

	}



	function basefirst(){
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$sql="Select Sum(nCount1) as nCount1,sum(car_amount) as car_amount,sum(car_infactamount) as car_infactamount,sum(car_buytax) as car_buytax,Sum(nCount2) as nCount2,Sum(nCount3) as nCount3,Sum(nCount4) as nCount4,Sum(nCount1+nCount2+nCount3+nCount4) as nCount From (
		Select count(*) as nCount1,sum(car_amount) as car_amount,sum(car_infactamount) as car_infactamount,sum(car_buytax) as car_buytax,0 as nCount2,0 as nCount3,0 as nCount4 From car Where car_recycle!=1 and (car_status=0 or car_status=1) 
				Union All 
				Select 0 as nCount1,sum(car_amount) as car_amount,sum(car_infactamount) as car_infactamount,sum(car_buytax) as car_buytax,count(*) as nCount2,0 as nCount3,0 as nCount4 From car Where car_recycle!=1 and car_status=2 
				Union All 
				Select 0 as nCount1,0 as car_amount,0 as car_infactamount,0 as car_buytax,0 as nCount2,count(*) as nCount3,0 as nCount4 From car Where car_recycle!=1 and car_status=3 and car_changeDate=0 
				Union All 
				Select 0 as nCount1,0 as car_amount,0 as car_infactamount,0 as car_buytax,0 as nCount2,0 as nCount3,count(*) as nCount4 From car Where car_recycle!=1 and car_status=3 and car_changeDate<>0) aa";

		$first = $model->getListBySql(0,100, $sql);
		$shuoming=$model->getListBySql_a('select * from qczn_shuoming where id=1');
		//print_r($shuoming);exit;
		$view  = $this->createView("operator/machine/basefirst.html");
		$object = new stdClass();
		$object->first = $first;
		$object->shuoming = $shuoming[0]['text'];
		$view->assign($object);
		$view->display();
	}














	function baselist()
	{
		$nowuserid=$_SESSION['user_id'];
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$base_url = "list.php?";
		$per_page = 10;
		$where="`car_recycle`!=1";
		$car_num=Request::getVar('car_num','get');
		//print_r($car_num);exit;
		$car_brand=Request::getVar('car_brand','get');
		$car_model=Request::getVar('car_model','get');
		$car_motor=Request::getVar('car_motor','get');
		$car_seat=Request::getVar('car_seat','get');
		$car_cartDate=Request::getVar('car_cartDate','get');
		$car_status=Request::getVar('car_status','get');
		$zhuanyong=Request::getVar('zhuanyong','get');
		$car_types=Request::getVar('car_types','get');

		if(!empty($car_types)){
			if($car_types==99){
				$car_types=0;
			}
			$where.=" AND car_types ={$car_types}";
			$base_url.="&car_types={$car_types}";
		}
		if(!empty($zhuanyong)){$where.=" AND zhuanyong ={$zhuanyong}";
		$base_url.="&zhuanyong={$zhuanyong}";}
		if(!empty($car_num)){$where.=" AND car_num like '%".$car_num."%'";$base_url.="&car_num={$car_num}";}
		//print_r($where);exit;
	 	if(!empty($car_brand)){$where.=" AND car_brand like '%".$car_brand."%'";$base_url.="&car_brand={$car_brand}";}
		if(!empty($car_model)){$where.=" AND car_model like '%".$car_model."%'";$base_url.="&car_model={$car_model}";}
	 	if(!empty($car_motor)){$where.=" AND car_motor like '%".$car_motor."%'";$base_url.="&car_motor={$car_motor}";}
	 	if(!empty($car_seat)){$where.=" AND car_seat = '".$car_seat."'";$base_url.="&car_seat={$car_seat}";}
	 	if(!empty($car_cartDate)){$where.=" AND car_cartDate='".$car_cartDate."'";$base_url.="&car_cartDate={$car_cartDate}";}
	 	//print_r($car_status);exit;
		if ($car_status=="4"){
	 		$where.=" AND car_status = 3 AND car_changeDate<>0";
	 		$base_url.="&car_status={$car_status}";
			$order="car_changeDate DESC";
	 	}else if ($car_status=="3"){
	 		$where.=" AND car_status = {$car_status} AND car_changeDate=0";
	 		$base_url.="&car_status={$car_status}";
			$order="car_id DESC";
	 	}else{
	 		$where.=" AND car_status != 3";
			$order="car_id DESC";
	 	}
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$style = new pagestyle_a();
		$start = ($p-1)*$per_page;		
		
		$sql="SELECT * FROM `car` WHERE {$where} ORDER BY {$order}";
		$List = $model->getListBySql($start,$per_page, $sql);
		//print_r($sql);exit;
		$sql="SELECT COUNT(*) AS total FROM `car` WHERE {$where}";

		$total_item = $model->getTotal($sql);
		
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
		$view  = $this->createView("operator/machine/baselist.html");
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();		
		$object->list = $List;
		$object->zhuanyong_list =$model-> getListBySql_a("select * from car_zhuanyong");
		$object->p = $p;
		$object->total = $total_item;
		$object->car_status=$car_status;
		$object->nowuserid=$nowuserid;
		$view->assign($object);
		$view->display();
	}

	function total_list(){
		$model = $this->createModel("machine",dirname( __FILE__ ));
		//违章数量
		$count_weihznag=$model->getListBySql_a("select count(*) from breakrules Where breakrules_end=0");
		//未冻结数量
		$count_wdongjie=$model->getListBySql_a("select count(*) from breakrules where breakrules_end=0 and breakrulesPaicheId=0 and breakrules_isCom=0");
		//企业冻结数
		$count_qdongjie=$model->getListBySql_a("select count(*) from breakrules Where breakrules_end=0 and breakrulesPaicheId!=0 and breakrules_isCom=1 ");
		//冻结数量
		$count_dongjie=$model->getListBySql_a("select count(*) from breakrules Where breakrules_end=0 and breakrulesPaicheId!=0 and breakrules_isCom=0");
		$view  = $this->createView("operator/machine/total_list.html");
		
		$object = new stdClass();
		$object->count_weihznag = $count_weihznag[0]['count(*)'];
		$object->count_wdongjie = $count_wdongjie[0]['count(*)'];
		$object->count_qdongjie = $count_qdongjie[0]['count(*)'];
		$object->count_dongjie = $count_dongjie[0]['count(*)'];
		
		//print_r($object);exit;
		$view->assign($object);
		$view->display();
	}
	//车辆违章管理
	function breakfirst()
	{
		$title=Request::getVar('title','get');
		$l_id=Request::getVar('l_id','get');
		$sql_10="";
		if($l_id==1){
			$sql_10="and e.nNoCount!=0";
		}else if($l_id==2){
			$sql_10="and f.nComCount!=0";

		}else if($l_id==3){
			$sql_10="and g.nPerCount!=0";
		}
		//print_r($sql_10);exit;
		$car=Request::getVar('car','get');
		$op = Request::getVar('op','get');
		$model = $this->createModel("machine",dirname( __FILE__ ));

		/*查询字段 breakrules_CarId
		countCount(breakrules_CarId) 别名nCount 
		总数SUM(breakrules_money1) 别名 breakrules_money1 违章款
		总数 SUM(breakrules_money2) 别名 breakrules_money2 手续费
		总数 SUM(breakrules_money3) 别名 breakrules_money3 扣分
		总数 SUM(breakrules_money4) 别名 breakrules_money4 扣分抵扣金额
		总数 SUM(breakrules_money) 别名 breakrules_money 违章金额
		表 breakrules
		条件 breakrules_end=0 是否结算，0为没有，1为已结算
		breakrules_CarId 相同的集合
		*/ 
		$sql_1="Select breakrules_CarId,Count(breakrules_CarId) as nCount,SUM(breakrules_money1) AS breakrules_money1,SUM(breakrules_money2) AS breakrules_money2,
				SUM(breakrules_money3) AS breakrules_money3,SUM(breakrules_money4) AS breakrules_money4,SUM(breakrules_money) AS breakrules_money 
				FROM breakrules	Where breakrules_end=0 GROUP BY breakrules_CarId ";
		/*未冻结数：  
		查询字段 breakrules_CarId 
		Count(breakrules_CarId) 别名 nNoCount
		表 breakrules
		条件 breakrules_end=0  和 breakrulesPaicheId=0
		breakrules_CarId 相同的集合
	
		*/
		$sql_2="Select breakrules_CarId,Count(breakrules_CarId) as nNoCount 
				FROM breakrules	Where breakrulesPaicheId=0 and breakrules_end=0 GROUP BY breakrules_CarId";
		/*企业冻结：
		查询字段 breakrules_CarId 
		Count(breakrules_CarId) 别名 nNoCount
		表 breakrules
		条件 breakrules_end=0  和 breakrulesPaicheId=0 breakrules_isCom=1
		breakrules_CarId 相同的集合

		*/

		$sql_3="Select breakrules_CarId,Count(breakrules_CarId) as nComCount 
				FROM breakrules	Where breakrules_end=0 and breakrulesPaicheId!=0 and breakrules_isCom=1 GROUP BY breakrules_CarId";
		/*冻结：
		查询字段 breakrules_CarId 
		Count(breakrules_CarId) 别名 nNoCount
		表 breakrules
		条件 breakrules_end=0  和 breakrulesPaicheId！=0 breakrules_isCom=0
		breakrules_CarId 相同的集合

		*/
		$sql_4="Select breakrules_CarId,Count(breakrules_CarId) as nPerCount 
				FROM breakrules	Where breakrules_end=0 and breakrulesPaicheId!=0 and breakrules_isCom=0 GROUP BY breakrules_CarId";
		/*查询字段 car表 car_id(车ID)  car_num(车牌号码) car_model(汽车型号)
					car_nextcarefulDate(下次年审时间)
		附表sql1 nNoCount 附表sql2 nNoCount 附表sql3 nNoCount 附表sql4 nNoCount
		条件：cha表的 car_recycle!=1 车辆是否回收 0为没有 1为已回收
			cha表的 车牌模糊查询
		*/
		$sql="SELECT a.car_id,a.car_num,a.car_color,a.car_model,a.car_motor,a.car_nextcarefulDate,d.*,e.nNoCount,f.nComCount,g.nPerCount 
				FROM `car` AS a 
				LEFT JOIN ({$sql_1}) AS d ON a.car_id=d.breakrules_CarId 
				LEFT JOIN ({$sql_2}) AS e ON a.car_id=e.breakrules_CarId 
				LEFT JOIN ({$sql_3}) AS f ON a.car_id=f.breakrules_CarId 
				LEFT JOIN ({$sql_4}) AS g ON a.car_id=g.breakrules_CarId 
				WHERE a.car_recycle!=1 
				AND a.car_num like '%{$title}%'".(empty($car)?"":" AND a.car_id={$car}").$sql_10;
		$List = $model->getListBySql(0,1000, $sql);
		
		$view  = $this->createView("operator/machine/breakfirst.html");
		
		$object = new stdClass();
		$object->list = $List;
		$object->op = $op;
		$object->search_car = $title;
		//print_r(sql);exit;
		$view->assign($object);
		$view->display();
	}



	function breaklist()
	{
		//print_r("expression");exit;
		$p = Request::getVar('p','get');
		$op = Request::getVar('op','get');
		if(empty($p)){$p=1;}
		$base_url = "list.php?task=breaklist".(empty($op) ? "" : "&op=$op");;
		$search_startDate=Request::getVar('search_startDate','get');
		$search_endDate=Request::getVar('search_endDate','get');
		$car=Request::getVar('title','get');
		$type = Request::getVar('type','get');
		//$where=($op=="account"? " AND a.breakrules_end=0":"");
		if ($type=="reduce"){
			$where=" a.breakrules_end=1 AND a.breakrules_endtimes>='".strtotime($search_startDate)."' AND a.breakrules_endtimes<'".strtotime("+1 days",strtotime($search_endDate))."'";
		}elseif ($type=="add"){
			$where =" a.breakrules_times>='".strtotime($search_startDate)."' AND a.breakrules_times<'".strtotime("+1 days",strtotime($search_endDate))."'";
		}else{
			$where=" a.breakrules_end=0";
			if(!empty($search_startDate)){
	            $where .=" AND a.breakrules_date>='".strtotime($search_startDate)."'";
	        }
			if(!empty($search_endDate)){
	            $where .=" AND a.breakrules_date<'".strtotime("+1 days",strtotime($search_endDate))."'";
	        }
	        $where1="a.breakrules_end=1";
		}
		if(!empty($search_startDate)){
			$base_url.="&search_startDate={$search_startDate}";
        }
		if(!empty($search_endDate)){
			$base_url.="&search_endDate={$search_endDate}";
        }
		if(!empty($type)){
			$base_url.="&type={$type}";
        }
        if (!empty($car)){
        	$base_url.="&title={$car}";
        	$where .=" AND b.car_num like '%{$car}%'";
        	$where1 .=" AND b.car_num like '%{$car}%'";
        }
        $order=" ORDER BY a.`breakrules_date` DESC";
		$per_page = 1000;
		$model = $this->createModel("machine",dirname( __FILE__ ));
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;		
		
		$sql="SELECT a.*,b.car_num,c.paiche_linker,d.client_name,e.emp_name AS siji,g.item_name ".
			 "FROM `breakrules` AS a LEFT JOIN `car` AS b ON a.`breakrules_CarId`=b.`car_id` ".
			 "LEFT JOIN `paiche` AS c ON a.breakrulesPaicheId=c.paiche_id ".
			 "LEFT JOIN `client` AS d on c.`paicheCom`=d.`client_id` ".
			 "LEFT JOIN `emp` AS e ON a.breakrules_DriverID=e.emp_id ".
			 "LEFT JOIN `item` AS g ON c.paiche_type=g.item_paicheType WHERE ";
		//print_r($sql);exit;
		$List = $model->getListBySql($start,$per_page, $sql.$where.$order);
		$List1= $model->getListBySql($start,$per_page, $sql.$where1.$order);
		$sql="SELECT COUNT(*) AS total FROM `breakrules` AS a LEFT JOIN `car` AS b ON a.`breakrules_CarId`=b.`car_id` WHERE {$where}";

		$total_item = $model->getTotal($sql);
		
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
		$view  = $this->createView("operator/machine/breaklist.html");
		
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();		
		$object->list = $List;
		$object->list1 = $List1;
		$object->total = $total_item;
		$object->op = $op;
		$object->type = $type;
		$object->title = $car;
		$object->search_startDate=$search_startDate;
		$object->search_endDate=$search_endDate;
		$view->assign($object);
		$view->display();
		
	}
	function breakdetail(){
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("machine",dirname( __FILE__ ));
		
		$sql="SELECT a.*,b.car_num,c.paiche_contractNum,c.paiche_linker,d.client_name,e.emp_name AS siji,g.item_name ".
			 "FROM `breakrules` AS a LEFT JOIN `car` AS b ON a.`breakrules_CarId`=b.`car_id` ".
			 "LEFT JOIN `paiche` AS c ON a.breakrulesPaicheId=c.paiche_id ".
			 "LEFT JOIN `client` AS d on c.`paicheCom`=d.`client_id` ".
			 "LEFT JOIN `emp` AS e ON a.breakrules_DriverID=e.emp_id ".
			 "LEFT JOIN `item` AS g ON c.paiche_type=g.item_paicheType WHERE breakrules_id={$uid}";
		$breakInfo=$model->getInfoBySql($sql);
		$object = new stdClass();
		$object->list = $breakInfo;
		$view  = $this->createView("operator/machine/breakdetail.html");
		$view->assign($object);
		$view->display();
	}
	function changelist(){
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$base_url = "changelist.php?";
		$per_page = 20;
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$style = new PageStyle();
		$start = ($p-1)*$per_page;	
		
		$sql="Select * From car_change Order by change_time Desc";
		$list = $model->getListBySql($start,$per_page, $sql);
		
		$sql="SELECT COUNT(*) AS total FROM car_change";
		$total_item = $model->getTotal($sql);
		
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
		$view  = $this->createView("operator/machine/changelist.html");
		
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();
		$object->list = $list;
		$object->total = $total_item;
		$view->assign($object);
		$view->display();
	}
	function changecreate(){
		$change=array();
		$change['change_time']=date('Y-m-d H:i:s',time());
		$object = new stdClass();
		$object->task = "insert";
		$object->list = $change;
          
        $view  = $this->createView("operator/machine/changecreate.html");
		$view->assign($object);
		$view->display();
	}
	function changecreate_acc(){
		$title="";
		$model = $this->createModel("machine",dirname( __FILE__ ));
		
		$object = new stdClass();
		$object->change_time = Request::getVar('change_time','post');
		$object->change_remark=Request::getVar('change_remark','post');
		$object->change_number=Request::getVar('change_number','post');
		if ($model->store($object,'car_change')){
			$title="添加成功!";
		}else{
			$title="添加失败，返回重试！";
		}
		
		$object = new stdClass();
		$object->result = $title;
		$view  = $this->createView("operator/business/result.html");
		$view->assign($object);
		$view->display();
	}



	//添加
	function create(){	
		//print_r("aa");exit;
		$object = new stdClass();
		$object->task = "insert";
		//$object->zid=rand(1000,9999);
        $model = $this->createModel("machine",dirname( __FILE__ ));    
        $view  = $this->createView("operator/machine/create_a.html");
		$view->assign($object);
		$view->display();
	}


	function insert(){	
		$upload_root = Config::homedir()."/thumb/";	
		$forward = Request::getVar("forward");
		$zid = Request::getVar("zid");
		if(empty($forward))
		{
			$forward = "list.php";
		}
		$model = $this->createModel("machine",dirname( __FILE__ ));
		//车牌号码
		$car_num=Request::getVar('car_num','post');
		//车辆注册日期
		$car_cartDate=Request::getVar('car_cartDate','post');
		//$car_image="";
		//先判断车牌号是否重复
		$sql="Select car_id From car Where car_recycle!=1 and car_num='{$car_num}'";
		$tmplist=$model->getList($sql);
		if (!empty($tmplist)){
			$this->redirect($forward,"车牌号已存在");
			exit();
		}



		$object = new stdClass();
	  	$object->car_num=$car_num;
	  	$object->car_color=Request::getVar('car_color','post');
	  	$object->car_brand=Request::getVar('car_brand','post');
	  	$object->zhuanyong=1;
	  	$object->car_model=Request::getVar('car_model','post');
	  	$object->car_motor=Request::getVar('car_motor','post');
	  	$object->car_frame=Request::getVar('car_frame','post');
	  	$car_seat=Request::getVar('car_seat','post');
	  	$object->car_seat=empty($car_seat)?0:$car_seat;
	  	$object->car_saleDate=strtotime(Request::getVar('car_saleDate','post'));
	  	$car_amount=Request::getVar('car_amount','post');
	  	$object->car_amount=empty($car_amount)?0:$car_amount;
	  	$car_buytax=Request::getVar('car_buytax','post');
	  	$object->car_buytax=empty($car_buytax)?0:$car_buytax;
	  	$object->car_cartDate=strtotime($car_cartDate);
	  	$car_oilcard=Request::getVar('car_oilcard','post');
	  	$object->car_oilcard=empty($car_oilcard)?0:$car_oilcard;
	  	$object->car_remarks=Request::getVar('car_remarks','post');
	  	$object->car_remarks_a=Request::getVar('car_remarks_a','post');
	  	$object->car_infactamount=Request::getVar('car_infactamount','post');
	  	$object->car_types=Request::getVar('car_types','post');
	  	$object->car_status=Request::getVar('car_status','post');
	  	$object->car_price=Request::getVar('car_price','post');
	  	$object->car_image=$car_image;
	  	
	  	$recid=$model->store($object);
        
		if ($recid>0)
		{
			//插入一条年审记录
			$object = new stdClass();
			$object->car_id=$recid;
			$object->careful_date=strtotime($car_cartDate);
			$model->store($object,"car_yearcareful");
			//插入一条GPS记录
			$object = new stdClass();
			$object->car_id=$recid;
			$object->gps_installDate = strtotime($car_cartDate);
			$model->store($object,"car_gps");
			//插入两条保险记录
			
			$object = new stdClass();
			$object->car_id=$recid;
			$object->insurance_type ='商业险';
			//$object->insurance_start=strtotime($car_cartDate);
			//$object->insurance_end=strtotime("+1 year",strtotime($car_cartDate));
			$model->store($object,"car_insurance");
			$object = new stdClass();
			$object->car_id=$recid;
			$object->insurance_type ='交强险';
			//$object->insurance_start=strtotime($car_cartDate);
			//$object->insurance_end=strtotime("+1 year",strtotime($car_cartDate));
			$model->store($object,"car_insurance");
			
			//插入一条保养记录
			$object = new stdClass();
			$object->car_id=$recid;
			$object->maintenance_type='保养';
			$object->maintenance_date=strtotime($car_cartDate);
			$object->maintenance_remark='新车';
			$model->store($object,"car_maintenance");
			//车辆报价
			$object20 = new stdClass();
			$object20->car_id= $recid;
			$object20->plan_chaokm= 'n';
			$object20->plan_day= 1;
			
			$model->store($object20,"car_price");
			Components::save_admin_log("添加了车辆，车牌号：".$car_num);
			$this->redirect($forward,"添加成功");
		}
		else
		{
			$this->redirect($forward,"添加失败");
		}
	}



	function modify(){

		$uid = Request::getVar('uid','get');
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$machineInfo = $model->getInfo($uid,"car","car_id");
		$object = new stdClass();
		$object->list = $machineInfo;
		$object->zid = $uid;
		$object->task = "update";
        $view  = $this->createView("operator/machine/create_a.html");
		$view->assign($object);
		$view->display();
	}





	function update(){	
		$upload_root = Config::homedir()."/thumb/";
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "list.php";
		}

		$uid = Request::getVar('zid','post');	
		if(empty($uid))
		{
			Response::redirect($forward,"Need id!");
		}
		
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$car_num=Request::getVar('car_num','post');
		//$car_image=Request::getVar('oldimages','post');
		//先判断车牌号是否重复
		$sql="Select car_id From car Where car_recycle!=1 and car_id!={$uid} and car_num='{$car_num}'";
		$tmplist=$model->getList($sql);
		if (!empty($tmplist)){
			$this->redirect($forward,"车牌号已存在");
			exit();
		}
		// if(array_key_exists('images',$_FILES) && $_FILES["images"]["error"] == UPLOAD_ERR_OK){
  //           $uploader = new Uploader($_FILES['images'],$upload_root);

  //           $uploader->toUpload();
  //           $car_image = $uploader->getFolderFile();
	 //    }

		$object = new stdClass();
		$object->car_id = $uid;
		$arrDelimg=Request::getVar('delimg','post');
	  	$object->car_num=$car_num;
	  	$object->car_color=Request::getVar('car_color','post');
	  	$object->car_brand=Request::getVar('car_brand','post');
	  	$object->car_model=Request::getVar('car_model','post');
	  	$object->car_motor=Request::getVar('car_motor','post');
	  	$object->car_frame=Request::getVar('car_frame','post');
	  	$car_seat=Request::getVar('car_seat','post');
	  	$object->car_seat=empty($car_seat)?0:$car_seat;
	  	$object->car_saleDate=strtotime(Request::getVar('car_saleDate','post'));
	  	$car_amount=Request::getVar('car_amount','post');
	  	$object->car_amount=empty($car_amount)?0:$car_amount;
	  	$car_buytax=Request::getVar('car_buytax','post');
	  	$object->car_buytax=empty($car_buytax)?0:$car_buytax;
	  	$object->car_cartDate=strtotime(Request::getVar('car_cartDate','post'));
	  	$car_oilcard=Request::getVar('car_oilcard','post');
	  	$object->car_oilcard=empty($car_oilcard)?0:$car_oilcard;  
	  	
	  	$object->car_remarks=Request::getVar('car_remarks','post');
	  	$object->car_remarks_a=Request::getVar('car_remarks_a','post');
	  	$object->car_infactamount=Request::getVar('car_infactamount','post');
	  
	  	$object->car_types=Request::getVar('car_types','post');
	  	
	  	$object->car_price=Request::getVar('car_price','post');
	  	//$object->car_image=$car_image;

		if ($model->update($object,'car_id'))
		{
			
			$this->redirect($forward,"修改成功!");
		}
		else
		{
			$this->redirect($forward,"修改失败!");
		}

	}

	function cancel(){
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$machineInfo = $model->getInfo($uid,"car","car_id");
		
		$object = new stdClass();
		$object->list = $machineInfo;
		$object->task = "delete";
        
        $view  = $this->createView("operator/machine/cancel.html");
		$view->assign($object);
		$view->display();
	}
	function del(){
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
            $forward = "list.php";
		}
		$uid = Request::getVar('uid','post');
		$car_num=Request::getVar('car_num','post');
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$object = new stdClass();
		$object->car_id = $uid;
		$object->car_num=$car_num."-售";
		$object->car_status = 3;
		$object->car_cancelDate=strtotime(Request::getVar('car_cancelDate','post'));
		$object->car_cancelPrice=Request::getVar('car_cancelPrice','post');
		$object->car_canceldeal=Request::getVar('car_canceldeal','post');
		$object->car_cancelrepara=Request::getVar('car_cancelrepara','post');
		$object->car_cancelaccount=Request::getVar('car_cancelaccount','post');
		
		if ($model->update($object,'car_id')){
			Components::save_admin_log("报废了ID为".$uid."的汽车信息");
			$this->redirect($forward,"报废操作成功");
		}
	}
	function change(){
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$machineInfo = $model->getInfo($uid,"car","car_id");
		
		$object = new stdClass();
		$object->list = $machineInfo;
		$object->task = "changeacc";
        
        $view  = $this->createView("operator/machine/cancel.html");
		$view->assign($object);
		$view->display();
	}
	function changeacc(){
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
            $forward = "list.php";
		}
		$uid = Request::getVar('uid','post');
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$object = new stdClass();
		$object->car_id = $uid;
		$object->car_changeDate=strtotime(Request::getVar('car_changeDate','post'));
		if ($model->update($object,'car_id')){
			Components::save_admin_log("过户了ID为".$uid."的汽车信息");
			$this->redirect($forward,"过户操作成功");
		}
	}

	function detail(){

		$uid = Request::getVar('uid','get');
		
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$machineInfo = $model->getInfo($uid,"car","car_id");
		$zhuanyong=$model->getListBySql_a("select * from car_zhuanyong where id={$machineInfo['zhuanyong']}");
		$sql="select * from car_price where car_id={$uid} and plan_day=1";
		$price=$model->getListBySql_a($sql);

		$object = new stdClass();
		$object->list = $machineInfo;
		$object->price = $price[0];
		$object->uid = $uid;
		$object->zhuanyong = $zhuanyong[0]['name'];
        $view  = $this->createView("operator/machine/detail.html");
		$view->assign($object);
		$view->display();
	}

	//添加违章界面
	function breakcreate(){
		
		$c_id=Request::getVar('c_id','get');
		
		$breakInfo=array();
		$object = new stdClass();
		$object->task = "breakinsert";
        $model = $this->createModel("machine",dirname( __FILE__ ));
        $sql="Select * From breakrules_item";
        $itemList = $model->getListBySql(0,10000, $sql);
        $object->itemlist = $itemList;
        if (!empty($c_id)){
        $car=$model->getInfoBySql("Select car_id,car_num,car_color,car_brand,car_type From car where car_id={$c_id}");
        $breakInfo['breakrules_CarId']=$c_id;
        $breakInfo['car_num']=$car['car_num'].'-'.$car['car_color'].'-'.$car['car_brand'].'-'.$car['car_type'];
        }
        $object->list = $breakInfo;
        $object->search_car = Request::getVar('search_car','get');

        $view  = $this->createView("operator/machine/breakcreate.html");
		$view->assign($object);
		$view->display();
	}

	//添加违章
	function breakinsert(){
		//print_r("vv");exit;
		$forward = Request::getVar("forward");
		$carid=Request::getVar('paicheCar2','post');
		if(empty($forward))
		{
			$forward = "list.php?task=breakfirst&title=".Request::getVar('search_car','post');
		}
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$empname=$model->getEmpName($_SESSION['a_uid']);
		$breakrules_item=Request::getVar('breakrules_item','post');
		
		$object = new stdClass();		
	  	$object->breakrulesPaicheId=0;
	  	$object->breakrules_CarId=$carid;//车子ID cha表
	  	$object->breakrules_date=strtotime(Request::getVar('breakrules_date','post'));
	  	$object->breakrules_item=$breakrules_item;
	  	$object->breakrules_money=Request::getVar('breakrules_money','post');
	  	$aaa=Request::getVar('breakrules_money1','post');
	  	$object->breakrules_money1=empty($aaa) ? 0 : $aaa;
	  	$aaa=Request::getVar('breakrules_money2','post');
	  	$object->breakrules_money2=empty($aaa) ? 0 : $aaa;
	  	$aaa=Request::getVar('breakrules_money3','post');
	  	$object->breakrules_money3=empty($aaa) ? 0 : $aaa;
	  	$aaa=Request::getVar('breakrules_money4','post');
	  	$object->breakrules_money4=empty($aaa) ? 0 : $aaa;
	  	$drive=Request::getVar('paicheDriver2','post');
	  	$object->breakrules_DriverID=empty($drive) ? 0 : Request::getVar('paicheDriver2','post');
	  	$object->breakrules_remarks=Request::getVar('breakrules_remarks','post');
	  	$object->breakrules_man=$empname;
	  	$object->breakrules_times=time();
	  	//print_r($object);exit;
		if ($model->store($object,"breakrules"))
		{
			Components::save_admin_log("添加了车辆违章记录，车牌号：".Request::getVar('paicheCar','post'));
			$this->redirect($forward,"添加成功");
		}
		else
		{
			$this->redirect($forward,"添加失败");
		}
	}
	function breakmodify(){
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$breakInfo = $model->getBreakInfo($uid,"breakrules","breakrules_id");
		
		$object = new stdClass();
		$object->list = $breakInfo;
		$object->task = "breakupdate";
        
        $view  = $this->createView("operator/machine/breakcreate.html");
		$view->assign($object);
		$view->display();
	}
	function breakupdate(){
		$forward = Request::getVar("forward");
		if(empty($forward)){
			$forward = "list.php?task=breaklist";
		}
		$uid = Request::getVar('uid','post');	
		if(empty($uid)){
			Response::redirect($forward,"Need id!");
		}
		
		$model = $this->createModel("machine",dirname( __FILE__ ));
		
		$object = new stdClass();
		$object->breakrules_id = $uid;
	  	$object->breakrulesPaicheId=Request::getVar('paiche_id','post');
	  	$object->breakrules_date=strtotime(Request::getVar('breakrules_date','post'));
	  	$object->breakrules_money=Request::getVar('breakrules_money','post');
	  	$object->breakrules_CarId=Request::getVar('paicheCar2','post');
		$drive=Request::getVar('paicheDriver2','post');
	  	$object->breakrules_DriverID=empty($drive) ? 0 : Request::getVar('paicheDriver2','post');
	  	$object->breakrules_remarks=Request::getVar('breakrules_remarks','post');
	  	
		if ($model->update($object,'breakrules_id','breakrules'))
		{		
			Components::save_admin_log("修改了违章记录,ID=".$uid);
			$this->redirect($forward,"修改成功!");
		}
		else
		{
			$this->redirect($forward,"修改失败!");
		}
	}
	function breakdelete(){
        $forward = "list.php?task=breaklist&title=".Request::getVar("forward");
		
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("machine",dirname( __FILE__ ));
		
		if ($model->delete2($uid,"breakrules","breakrules_id")){
			Components::save_admin_log("删除了ID为".$uid."的违章记录");
			$this->redirect($forward,"删除成功");
		}
	}
	function breakunfreeze(){
		$forward = "list.php?task=breaklist&title=".Request::getVar("forward");
		
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$sql="SELECT a.* FROM breakrules AS a WHERE breakrules_id={$uid}";
		$breakInfo=$model->getInfoBySql($sql);
		if (empty($breakInfo['breakrulesPaicheId'])){
			$this->redirect($forward,"违章信息未发现，解冻失败");
			exit();
		}
		$breakrulesPaicheId=$breakInfo['breakrulesPaicheId'];
		$breakrulesTotalmoney=$breakInfo['breakrules_money'];
		$re=true;
		if ($breakInfo['breakrules_isCom']==0){//如果是个人冻结，解冻押金
			$sql="Update paiche_charges Set have_freeze_money=have_freeze_money-{$breakrulesTotalmoney} Where charge_id=1 AND paiche_id={$breakrulesPaicheId}";
			if ($model->updatebreak($sql)){
			}else{
				$re=false;
			}
		}
		if ($re){
			$object = new stdClass();
			$object->breakrules_id = $uid;
		  	$object->breakrulesPaicheId=0;
		  	$object->breakrules_times=0;
			if ($model->update($object,"breakrules_id","breakrules")){
			}else{
				$re=false;
			}
		}
		if ($re){
			Components::save_admin_log("解冻了ID为".$uid."的违章记录");
			$this->redirect($forward,"解冻成功");
		}else{
			$this->redirect($forward,"解冻失败");
		}
	}
	function breakitem(){
		$id = Request::getVar('id','get');
		$model = $this->createModel("machine",dirname( __FILE__ ));
		
		$itemlist = $model->getList("Select * From breakrules_item");
		$total=count($itemlist);
		
		$object = new stdClass();
		$object->itemlist = $itemlist;
		$object->car_id= $car_id;
		$object->total= $total;
		if (!empty($id)){
		$object->iteminfo = $model->getInfoBySql("Select * From breakrules_item Where item_id={$id}");
		}
        
        $view  = $this->createView("operator/machine/breakitem.html");
		$view->assign($object);
		$view->display();
	}
	function breakitem_acc(){
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$id = Request::getVar('id','post');
		$op=Request::getVar('op','get');
		if ($op=="delete"){
			$model->delete2($id,"breakrules_item",'item_id');
			$info=array('status'=>'ok');
			echo json_encode($info);
			exit();
		}
		
		$object = new stdClass();
		if (!empty($id)){
			$object->item_id= $id;
		}
		
		$object->item_name= Request::getVar('item_name','post');
		$object->item_money1= Request::getVar('item_money1','post');
		$object->item_money2= Request::getVar('item_money2','post');
		$aa=Request::getVar('item_scope','post');
		$object->item_scope=(empty($aa) ? 0 : $aa);
		$aa=Request::getVar('item_money4','post');
		$object->item_money4=(empty($aa) ? 0 : $aa);
		if (!empty($id)){
			$recid=$model->update($object,'item_id',"breakrules_item");
		}else{
			$recid=$model->store($object,"breakrules_item");
		}
		//if ($recid>0){
			$info=array('status'=>'ok');
		//}else{
		//	$info=array('status'=>'提交失败！');
		//}
		echo json_encode($info);
		exit();
	}
	function getbreakinfo(){
		$bid=Request::getVar('bid','get');
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$breakInfo = $model->getBreakInfo($bid,"breakrules","breakrules_id");
		echo json_encode(array('status'=>0,'data'=>$breakInfo));
	}
	function upbreakremark(){
		$breakrules_id=Request::getVar('breakrules_id','get');
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$object = new stdClass();
		$object->breakrules_id = $breakrules_id;
		$object->breakrules_remarks=Request::getVar('breakrules_remarks','get');
		if ($model->update($object,'breakrules_id','breakrules')){
			$info=array('result'=>0);
		}else{
			$info=array('result'=>1);
		}
		echo json_encode($info);
		exit();
	}
	function breakfreeze(){
		$bid = Request::getVar('bid','get');
		
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$breakInfo = $model->getBreakInfo($bid,"breakrules","breakrules_id");
		$object = new stdClass();
		$object->bid = $bid;
		$object->list = $breakInfo;
		
		$view  = $this->createView("operator/machine/breakfreeze.html");
		$view->assign($object);
		$view->display();	
	}
	function breakfreeze_acc(){
		$re=true;
		$title="";
		$bid = Request::getVar('bid','post');
		$paiche_code=Request::getVar('breakrules_paiche','post');
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$paiche=$model->getInfoBySql("Select paiche_id From paiche Where paiche_contractNum='{$paiche_code}'");
		if (empty($paiche) || empty($paiche['paiche_id'])){
			$re=false;
			$title="派车单号未发现";
		}
		$pid=$paiche['paiche_id'];
		if ($re){
			$object = new stdClass();
			$object->breakrules_id = $bid;
			$object->breakrules_isCom=1;
		  	$object->breakrulesPaicheId=$pid;
		  	$object->breakrules_times=time();
			if ($model->update($object,"breakrules_id","breakrules")){
				$title="违章冻结成功!";
			}else{
				$title="违章冻结失败，返回重试！";
			}
		}
		$object = new stdClass();
		$object->result = $title;
		$view  = $this->createView("operator/business/result.html");
		$view->assign($object);
		$view->display();
	}
	function account(){
		$bid = Request::getVar('bid','get');
		
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$breakInfo = $model->getBreakInfo($bid,"breakrules","breakrules_id");
		
		//$sql_0="SELECT breakrules_CarId,SUM(breakrules_money) AS total,SUM(breakrules_money1) AS total1,SUM(breakrules_money2) AS total2,SUM(breakrules_money4) AS total4 FROM breakrules WHERE breakrules_CarId ={$cid} and breakrules_end=0 Group by breakrules_CarId";
		//$sql="SELECT a.car_id,a.car_num,a.car_color,a.car_model,a.car_cartDate,d.* 
		//		FROM `car` AS a INNER JOIN breakrules AS d ON a.car_id=d.breakrules_CarId 
		//		WHERE d.breakrules_id ={$bid}";
		//$breakInfo = $model->getInfoBySql($sql);
		
		$model = $this->createModel("list",dirname(dirname( __FILE__ ))."\business");		
		$fields="`payment_id`,`payment_name`,`payment_fee`";
		$payments_list=$model->getEmpList($fields," AND payment_recycle!=1","payments");
		$fields="`bank_id`,`bank_name`";
		$bank_list=$model->getEmpList($fields," AND bank_recycle!=1","banks");
		
		
		$object = new stdClass();
		//$object->total = $total;
		$object->bid = $bid;
		$object->paymentslist = $payments_list;
		$object->banklist = $bank_list;
		$object->list = $breakInfo;
		$object->baoxiaotypelist = $model->getEmpList("*"," AND typeclass=1","baoxiao_type");
		
		$view  = $this->createView("operator/machine/account.html");
		$view->assign($object);
		$view->display();	
	}
	function account_accept(){
		$bid = Request::getVar('bid','post');
		$pid = Request::getVar('pid','post');
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$empname=$model->getEmpName($_SESSION['a_uid']);
		$shop_id=$_SESSION['shopid'];
		
	    $re=true;
		$havebaoxiao=0;
		
		/*
	    $charges=$model->getInfoBySql("Select * From paiche_charges Where charge_id=1 and paiche_id={$pid}");
	    $chargeid=$charges['id'];
	    $havefreezemoney=$charges['have_freeze_money'];
	    $havebackmoney=$charges['have_back_money'];
	    $backpayments=$charges['payments_id'];
	    $backbank=$charges['bank_id'];
	    //处理退押金
	    $money=Request::getVar('total','post');
		$object = new Object();
    	$object->id = $chargeid;
    	$object->have_freeze_money = $havefreezemoney-$money;
	    $object->have_back_money = $havebackmoney+$money;
	    $object->back_reason="违章处理退押金";
		if ($model->update($object,"id","paiche_charges")){
		}else{
			$re=false;
		}
		
		if ($re){
			$object = new Object();
    		$object->paiche_id = $pid;
	        $object->payments_id = $backpayments;
	        $object->bank_id = $backbank;
	        $object->money = -1*$money;
	        $object->add_time = time();
	        $object->name = "退押金";
	        $object->remark="违章处理退押金";
			if ($model->store($object,"account_log")){
			}else{
				$re=false;
			}
		}
		*/
		$tmp_money=Request::getVar('total1','post');
		$tmp_money_infact=Request::getVar('total1_infact','post');
		if ($re && $tmp_money_infact<$tmp_money){//实际违章金额小于违章金额，生成其他收入草稿
			$payments_to=Request::getVar('payments_to','post');
			$bank_to=Request::getVar('bank_to','post');
			$change_class=Request::getVar('change_class','post');
			$aaa=$tmp_money-$tmp_money_infact;
			$code=date('YmdHis',time());
			$object0 = new Object();
			$object0->change_code=$code;
			$object0->money = $aaa;
			$object0->add_time =time();
			$object0->name = "违章手续费";
			$object0->input_man = $empname;
			$object0->payments_to_id = $payments_to;
			$object0->bank_to_id = $bank_to;
			$object0->change_type = 1;
			$object0->change_class=$change_class;
			$object0->shop_id=$shop_id;
			$object0->bill_id=$bid;
			$recid=$model->store($object0,"account_change_log");
			if ($recid){
				/*
				$object2 = new Object();
		    	$object2->paiche_id = 0;
		    	$object2->client_id = 0;
			    $object2->payments_id = $payments_to;
			    $object2->bank_id = $bank_to;
			    $object2->money = $aaa;
			    $object2->add_time = time();
			    $object2->name = "违章手续费";
			    $object2->bill_type=3;
			    $object2->bill_id = $recid;
			    $object2->account_type=$change_class;
			    $object2->shop_id=$shop_id;
				if ($model->store($object2,"account_log")){
				}else{
					$re=false;
				}
				*/
			}else{
				$re=false;
			}
		}
		if ($re && $tmp_money_infact>$tmp_money){//实际违章金额大于违章金额，生成费用报销草稿
			$havebaoxiao=1;
			$payments=Request::getVar('payments','post');
			$bank=Request::getVar('bank','post');
			$baoxiao_setCheckMan = Request::getVar('baoxiao_setCheckMan','post');
			$aaa=$tmp_money_infact-$tmp_money;
			$object = new stdClass();
			$object->baoxiao_code = date('YmdHis',time());
			$object->bill_id=$bid;
			$object->baoxiaoPaicheId=0;
			$object->baoxiaoPaicheContractNum = "";
			$object->baoxiao_item = 2;
			$object->baoxiao_date = strtotime(date("Y-m-d"));
			$object->baoxiao_content = Request::getVar('baoxiao_content','post');
			$object->baoxiao_emp = Request::getVar('paicheDriver2','post');
			$object->baoxiao_auditor = Request::getVar('driveDriver2_9','post');
			$object->baoxiao_money = $aaa;
			$object->baoxiao_type=Request::getVar('baoxiao_type','post');
			$object->shop_id=$shop_id;
			$object->payments_id = $payments;
			$object->bank_id = $bank;
			
			$object->baoxiao_man = $empname;
			$object->baoxiao_times = time();
			
			$recid=$model->store($object,"baoxiao");
			if ($recid){
			}else{
				$re=false;
			}
		}
	
		//其他收入1
		$other_money=Request::getVar('total2','post');
		$payments_to=Request::getVar('payments_to','post');
		$bank_to=Request::getVar('bank_to','post');
		if ($re && !empty($other_money)){
			$code=date('YmdHis',time());
			$change_class=Request::getVar('change_class','post');
			$object0 = new Object();
			$object0->change_code=$code;
			$object0->money = $other_money;
			$object0->add_time =time();
			$object0->name = "违章手续费";
			$object0->input_man = $empname;
			$object0->payments_to_id = $payments_to;
			$object0->bank_to_id = $bank_to;
			$object0->change_type = 1;
			$object0->change_class=$change_class;
			$object0->shop_id=$shop_id;
			$object0->bill_id=$bid;
			$recid=$model->store($object0,"account_change_log");
			if ($recid){
				/*
				$object2 = new Object();
		    	$object2->paiche_id = 0;
		    	$object2->client_id = 0;
			    $object2->payments_id = $payments_to;
			    $object2->bank_id = $bank_to;
			    $object2->money = $other_money;
			    $object2->add_time = time();
			    $object2->name = "违章手续费";
			    $object2->bill_type=3;
			    $object2->bill_id = $recid;
			    $object2->account_type=$change_class;
			    $object2->shop_id=$shop_id;
				if ($model->store($object2,"account_log")){
				}else{
					$re=false;
				}
				*/
			}else{
				$re=false;
			}
		}
		//其他收入2
		$other_money=Request::getVar('total4','post');
		if ($re && !empty($other_money)){
			$code=date('YmdHis',time());
			$change_class=Request::getVar('other_class','post');
			$object0 = new Object();
			$object0->change_code=$code;
			$object0->money = $other_money;
			$object0->add_time =time();
			$object0->name = "违章扣分费";
			$object0->input_man = $empname;
			$object0->payments_to_id = $payments_to;
			$object0->bank_to_id = $bank_to;
			$object0->change_type = 1;
			$object0->change_class=$change_class;
			$object0->shop_id=$shop_id;
			$object0->bill_id=$bid;
			$recid=$model->store($object0,"account_change_log");
			if ($recid){
				/*
				$object2 = new Object();
		    	$object2->paiche_id = 0;
		    	$object2->client_id = 0;
			    $object2->payments_id = $payments_to;
			    $object2->bank_id = $bank_to;
			    $object2->money = $other_money;
			    $object2->add_time = time();
			    $object2->name = "违章扣分费";
			    $object2->bill_type=3;
			    $object2->bill_id = $recid;
			    $object2->account_type=$change_class;
			    $object2->shop_id=$shop_id;
				if ($model->store($object2,"account_log")){
				}else{
					$re=false;
				}
				*/
			}else{
				$re=false;
			}
		}
		//生成费用报销单
		$baoxiao_money=Request::getVar('total4_infact','post');
	    if ($re && ($havebaoxiao==0 || !empty($baoxiao_money))){
	    	$payments=Request::getVar('payments','post');
			$bank=Request::getVar('bank','post');
			
			$object = new stdClass();
			$object->baoxiao_code = date('YmdHis',time());
			$object->bill_id=$bid;
			$object->baoxiaoPaicheId=0;
			$object->baoxiaoPaicheContractNum = "";
			$object->baoxiao_item = 2;
			$object->baoxiao_date = strtotime(date("Y-m-d"));
			$object->baoxiao_content = Request::getVar('baoxiao_content','post');
			$object->baoxiao_emp = Request::getVar('paicheDriver2','post');
			$object->baoxiao_auditor = Request::getVar('driveDriver2_9','post');
			$object->baoxiao_money = empty($baoxiao_money)? 0: $baoxiao_money;
			$object->baoxiao_type=Request::getVar('baoxiao_type','post');
			$object->shop_id=$shop_id;
			$object->payments_id = $payments;
			$object->bank_id = $bank;
			
			$object->baoxiao_man = $empname;
			$object->baoxiao_times = time();
			$recid=$model->store($object,"baoxiao");
			if ($recid){
			}else{
				$re=false;
			}
	    }
		
		
	    
		//更新违章记录
		if ($re){
			$object3 = new stdClass();
			$object3->breakrules_id = $bid;
		  	$object3->breakrules_end=1;
		  	$object3->breakrules_endtimes=strtotime(Request::getVar('breakrules_endtimes','post'));
		  	$object3->breakrules_endman=Request::getVar('paicheDriver','post');
			$aaa=Request::getVar('total_infact','post');
			$object3->breakrules_money_infact=empty($aaa) ? 0 : $aaa;
			$aaa=Request::getVar('total1_infact','post');
			$object3->breakrules_money1_infact=empty($aaa) ? 0 : $aaa;
			$aaa=Request::getVar('total2_infact','post');
			$object3->breakrules_money2_infact=empty($aaa) ? 0 : $aaa;
			$aaa=Request::getVar('total3_infact','post');
			$object3->breakrules_money3_infact=empty($aaa) ? 0 : $aaa;
			$aaa=Request::getVar('total4_infact','post');
			$object3->breakrules_money4_infact=empty($aaa) ? 0 : $aaa;
			if ($model->update($object3,"breakrules_id","breakrules")){
			}else{
				$re=false;
			}
		}
		$object = new stdClass();
		$object->result = $re ? "车辆违章处理成功！":"车辆违章处理失败，返回重试！";
		$view  = $this->createView("operator/business/result.html");
		$view->assign($object);
		$view->display();
	}
	function carstatus(){
		$status = Request::getVar('status','post');
		if (empty($status)) $status=9;
		$title = Request::getVar('title','post');
		
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$sql="SELECT car_id,car_num,car_status FROM `car` WHERE car_recycle!=1 ".(empty($title)?"":"AND car_num like '%{$title}%' ")." ORDER BY car_id DESC";
		$List = $model->getListBySql(0,10000, $sql);
		
		$view  = $this->createView("operator/machine/carstatuslist.html");
		$object = new stdClass();
		$object->list = $List;
		$object->title=$title;
		$object->status=$status;
		$view->assign($object);
		$view->display();
	}



	//车辆一览表
	function getNumCar($in){
		$model = $this->createModel("machine",dirname( __FILE__ ));
		

		$sql="SELECT c.emp_name,aa.paicheDriver,c.emp_image,aa.paiche_id,aa.paicheCar,aa.paicheCounterShop FROM `paiche` as aa Inner Join settle as bb on aa.paiche_id =bb.settlePaicheId LEFT JOIN `emp` AS c ON aa.`paicheDriver`=c.`emp_id` where aa.paiche_recycle!=1 AND IFNULL( aa.paiche_aaa,'')<>'补单' AND aa.paicheCar >0 AND (aa.paiche_status=0 or aa.paiche_status=1) AND aa.paiche_type IN (3,4,5) AND aa.paiche_startDate<=".time(). " AND aa.paiche_endDate>=".time().
			   " Union All ".
			   "SELECT c.emp_name,aa.paicheDriver,c.emp_image,aa.paiche_id,aa.paicheCar,aa.paicheCounterShop  FROM `paiche` as aa Inner Join settle as bb on aa.paiche_id =bb.settlePaicheId LEFT JOIN `emp` AS c ON aa.`paicheDriver`=c.`emp_id` where aa.paiche_recycle!=1 AND IFNULL( aa.paiche_aaa,'')<>'补单' AND aa.paicheCar >0 AND (aa.paiche_status=0 or aa.paiche_status=1) AND aa.paiche_type =1 AND bb.settle_totalKm<=0 AND aa.paiche_startDate<=".time().
			   " Union All ".
			   "SELECT c.emp_name,aa.paicheDriver,c.emp_image,aa.paiche_id,aa.paicheCar,aa.paicheCounterShop  FROM `paiche` as aa Inner Join settle as bb on aa.paiche_id =bb.settlePaicheId LEFT JOIN `emp` AS c ON aa.`paicheDriver`=c.`emp_id`  where aa.paiche_recycle!=1 AND IFNULL( aa.paiche_aaa,'')<>'补单' AND aa.paicheCar >0 AND (aa.paiche_status=0 or aa.paiche_status=1) AND aa.paiche_type =2 AND bb.settle_totalKm<=0 AND aa.paiche_startDate<=".time()." AND aa.paiche_endDate>".time();
		//获取非空闲车的信息
			   //print_r($sql);exit;
		$data=$model->getListBySql_a("Select distinct paicheCar,paicheCounterShop,emp_name,paicheDriver,emp_image,paiche_id From ({$sql}) km ");
		
		
		$sql_1="SELECT * FROM `car` WHERE car_recycle!=1 and car_status!=3";
		//获取门店信息
		$sql_shop="select shop_id,shop_name from shop where shop_id<>5";
		$shop=$model->getListBySql_a($sql_shop);

		//所有的车
		$data_tnum= $model->getListBySql_a($sql_1);
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

					$data_tnum[$i]['paicheCounterShop']=$data[$j]['paicheCounterShop'];
					$data_tnum[$i]['paiche_id']=$data[$j]['paiche_id'];
					break;
				}

			}



			
			if($k==0){
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
			if($data_tnum[$i]['car_status']==2 && $data_tnum[$i]['car_maintreason']!=0){
				$data_tnum[$i]['car_status_code']=2;
				$data_ynum[$ynum]=$data_tnum[$i];
				$ynum=$ynum+1;
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

		$car['tnum']=count($data_tnum);
		$car['wnum']=count($data_wnum);
		$car['ynum']=count($data_ynum);
		$car['knum']=count($data_knum);
		$car['znum']=count($data_znum);

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
	function carrunfirst(){

		
		$view  = $this->createView("operator/machine/carrunfirst.html");
		$object = new stdClass();
		$object->car = $this->getNumCar(1);
				
		$view->assign($object);
		$view->display();
	}




	function carrunfirst_a(){
		
		$model = $this->createModel("machine",dirname( __FILE__ ));
		
		$sql_2="SELECT aa.paicheCar FROM `paiche` as aa Inner Join settle as bb on aa.paiche_id =bb.settlePaicheId where aa.paiche_recycle!=1 AND IFNULL( aa.paiche_aaa,'')<>'补单' AND aa.paicheCar >0 AND (aa.paiche_status=0 or aa.paiche_status=1) AND aa.paiche_type IN (3,4,5) AND aa.paiche_startDate<=".time(). " AND aa.paiche_endDate>=".time().
			   " Union All ".
			   "SELECT aa.paicheCar FROM `paiche` as aa Inner Join settle as bb on aa.paiche_id =bb.settlePaicheId where aa.paiche_recycle!=1 AND IFNULL( aa.paiche_aaa,'')<>'补单' AND aa.paicheCar >0 AND (aa.paiche_status=0 or aa.paiche_status=1) AND aa.paiche_type =1 AND bb.settle_totalKm<=0 AND aa.paiche_startDate<=".time().
			   " Union All ".
			   "SELECT aa.paicheCar FROM `paiche` as aa Inner Join settle as bb on aa.paiche_id =bb.settlePaicheId where aa.paiche_recycle!=1 AND IFNULL( aa.paiche_aaa,'')<>'补单' AND aa.paicheCar >0 AND (aa.paiche_status=0 or aa.paiche_status=1) AND aa.paiche_type =2 AND bb.settle_totalKm<=0 AND aa.paiche_startDate<=".time()." AND aa.paiche_endDate>".time();
		
		$car=array();
		//不是报废的车
		$sql="SELECT COUNT(*) AS total FROM `car` AS a WHERE a.car_recycle!=1 and car_status!=3";
		$car['tnum'] = $model->getTotal($sql);

		//维修的车
		$sql="SELECT COUNT(*) AS total FROM `car` AS a WHERE a.car_recycle!=1 and car_status=2 and car_maintreason=0";
		$car['wnum'] = $model->getTotal($sql);

		//异常维修的车
		$sql="SELECT COUNT(*) AS total FROM `car` AS a WHERE a.car_recycle!=1 and car_status=2 and car_maintreason<>0";
		$car['ynum'] = $model->getTotal($sql);

		//空闲的车
		$sql="SELECT COUNT(*) AS total FROM `car` AS a WHERE a.car_recycle!=1 and car_status!=2 and car_status!=3 and car_id not in (Select distinct paicheCar From ({$sql_2}) km)";
		$car['knum'] = $model->getTotal($sql);
		//不是空闲的车
		$sql="SELECT COUNT(*) AS total FROM `car` AS a WHERE a.car_recycle!=1 and car_status!=2 and car_status!=3 and car_id in (Select distinct paicheCar From ({$sql_2}) km)";
		$car['znum'] = $model->getTotal($sql);
		


		$sql_1="SELECT aa.paicheCar,aa.paiche_id,1 AS car_status_code,paicheCounterShop FROM `paiche` as aa Inner Join settle as bb on aa.paiche_id =bb.settlePaicheId where aa.paiche_recycle!=1 AND IFNULL( aa.paiche_aaa,'')<>'补单' AND aa.paicheCar >0 AND (aa.paiche_status=0 or aa.paiche_status=1) AND aa.paiche_type IN (3,4,5) AND aa.paiche_startDate<=".time(). " AND aa.paiche_endDate>=".time().
			   " Union All ".
			   "SELECT aa.paicheCar,aa.paiche_id,1 AS car_status_code,paicheCounterShop FROM `paiche` as aa Inner Join settle as bb on aa.paiche_id =bb.settlePaicheId where aa.paiche_recycle!=1 AND IFNULL( aa.paiche_aaa,'')<>'补单' AND aa.paicheCar >0 AND (aa.paiche_status=0 or aa.paiche_status=1) AND aa.paiche_type =1 AND bb.settle_totalKm<=0 AND aa.paiche_startDate<=".time().
			   " Union All ".
			   "SELECT aa.paicheCar,aa.paiche_id,1 AS car_status_code,paicheCounterShop FROM `paiche` as aa Inner Join settle as bb on aa.paiche_id =bb.settlePaicheId where aa.paiche_recycle!=1 AND IFNULL( aa.paiche_aaa,'')<>'补单' AND aa.paicheCar >0 AND (aa.paiche_status=0 or aa.paiche_status=1) AND aa.paiche_type =2 AND bb.settle_totalKm<=0 AND aa.paiche_startDate<=".time(). " AND aa.paiche_endDate>=".time();
				
		$sql="SELECT shop_name,shop_id,total From shop a Left Join (SELECT paicheCounterShop,COUNT( DISTINCT paicheCar ) AS total FROM ({$sql_1}) as kk Group by paicheCounterShop) mm On a.shop_id=mm.paicheCounterShop where a.shop_id<>5 Order by a.shop_order";
		$car['zlist']=$model->getCarList(0,20,$sql,$status);
		
		$sql="SELECT shop_name,shop_id,total From shop a Left Join (SELECT car_nowSite,COUNT(*) AS total FROM `car` AS a WHERE a.car_recycle!=1 and car_status<>2 and car_status!=3 and car_id not in (Select distinct paicheCar From ({$sql_2}) km) Group by car_nowSite) mm On a.shop_id=mm.car_nowSite where a.shop_id<>5 Order by a.shop_order";
		$car['klist']=$model->getCarList(0,20,$sql,$status);
		
		$view  = $this->createView("operator/machine/carrunfirst.html");
		$object = new stdClass();
		$object->car = $car;
				
		$view->assign($object);
		$view->display();
	}






	







	function carrun(){
		
		//$this->getCar();
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$shop=$model->getListBySql_a('select shop_id,shop_name from shop');

		$firstop = Request::getVar('firstop','get');
		$car_num=Request::getVar('car_num','get');
		$status = Request::getVar('status','get');
		$search_shop = Request::getVar('search_shop','get');
		if (!isset($status)) $status=9;
		$data=$this->getNumCar(2);
		
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
				if (Request::getVar('maint','get')=="reason"){
					$list=$data['ynum'];
				}else{
					$list=$data['wnum'];
				}
			}else{
				$list=$data['tnum'];
			}


		$list1=array();
		if(!empty($car_num)){
			for($i=0;$i<count($list);$i++){
				if(stripos($list[$i]["car_num"],$car_num)!==false){
					$list1[]=$list[$i];
				}
			}
			$list=$list1;
		}

		for($i=0;$i<count($list);$i++){
			for($j=$i+1;$j<count($list);$j++){
				if($list[$i]['car_price']<$list[$j]['car_price']){
					$tem=$list[$i];
					$list[$i]=$list[$j];
					$list[$j]=$tem;
				}else if($list[$i]['car_price']==$list[$j]['car_price']){
					if($list[$i]['car_id']<$list[$j]['car_id']){
						$tem=$list[$i];
						$list[$i]=$list[$j];
						$list[$j]=$tem;
					}
				}
			}
		}
		//print_r($list[0]['car_price']);exit;
			////
		
			//print_r($list);exit;
			$car['list']=$list;
			$car['count']=count($list);
		

		$view  = $this->createView("operator/machine/carrunlist.html");
		$object = new stdClass();
		$object->car = $car;
		
		$object->status = $status;
		$object->search_shop=$search_shop;
		$object->shoplist=$model->getList("Select shop_id,shop_name From shop where shop_id<>5");
		$object->firstop =$firstop;
		$object->maint=Request::getVar('maint','get');
		
		$view->assign($object);
		$view->display();
	}




	function carrun_a(){
		//$this->getCar();
		//print_r('aa');exit;
		$firstop = Request::getVar('firstop','get');
		
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$car_num=Request::getVar('car_num','get');
		$status = Request::getVar('status','get');
		$search_shop = Request::getVar('search_shop','get');
		if (!isset($status)) $status=9;
		
		$sql_1="SELECT aa.paicheCar,aa.paiche_id,1 AS car_status_code,paicheCounterShop FROM `paiche` as aa Inner Join settle as bb on aa.paiche_id =bb.settlePaicheId where aa.paiche_recycle!=1 AND IFNULL( aa.paiche_aaa,'')<>'补单' AND aa.paicheCar >0 AND (aa.paiche_status=0 or aa.paiche_status=1) AND aa.paiche_type IN (3,4,5) AND aa.paiche_startDate<=".time(). " AND aa.paiche_endDate>=".time().
			   " Union All ".
			   "SELECT aa.paicheCar,aa.paiche_id,1 AS car_status_code,paicheCounterShop FROM `paiche` as aa Inner Join settle as bb on aa.paiche_id =bb.settlePaicheId where aa.paiche_recycle!=1 AND IFNULL( aa.paiche_aaa,'')<>'补单' AND aa.paicheCar >0 AND (aa.paiche_status=0 or aa.paiche_status=1) AND aa.paiche_type =1 AND bb.settle_totalKm<=0 AND aa.paiche_startDate<=".time().
			   " Union All ".
			   "SELECT aa.paicheCar,aa.paiche_id,1 AS car_status_code,paicheCounterShop FROM `paiche` as aa Inner Join settle as bb on aa.paiche_id =bb.settlePaicheId where aa.paiche_recycle!=1 AND IFNULL( aa.paiche_aaa,'')<>'补单' AND aa.paicheCar >0 AND (aa.paiche_status=0 or aa.paiche_status=1) AND aa.paiche_type =2 AND bb.settle_totalKm<=0 AND aa.paiche_startDate<=".time()." AND aa.paiche_endDate>".time();
		
		$sql_2="SELECT aa.paicheCar FROM `paiche` as aa Inner Join settle as bb on aa.paiche_id =bb.settlePaicheId where aa.paiche_recycle!=1 AND IFNULL( aa.paiche_aaa,'')<>'补单' AND aa.paicheCar >0 AND (aa.paiche_status=0 or aa.paiche_status=1) AND aa.paiche_type IN (3,4,5) AND aa.paiche_startDate<=".time(). " AND aa.paiche_endDate>=".time().
			   " Union All ".
			   "SELECT aa.paicheCar FROM `paiche` as aa Inner Join settle as bb on aa.paiche_id =bb.settlePaicheId where aa.paiche_recycle!=1 AND IFNULL( aa.paiche_aaa,'')<>'补单' AND aa.paicheCar >0 AND (aa.paiche_status=0 or aa.paiche_status=1) AND aa.paiche_type =1 AND bb.settle_totalKm<=0 AND aa.paiche_startDate<=".time().
			   " Union All ".
			   "SELECT aa.paicheCar FROM `paiche` as aa Inner Join settle as bb on aa.paiche_id =bb.settlePaicheId where aa.paiche_recycle!=1 AND IFNULL( aa.paiche_aaa,'')<>'补单' AND aa.paicheCar >0 AND (aa.paiche_status=0 or aa.paiche_status=1) AND aa.paiche_type =2 AND bb.settle_totalKm<=0 AND aa.paiche_startDate<=".time()." AND aa.paiche_endDate>".time();
				
		



		if(!empty($firstop)){
			$where="a.car_recycle!=1 and car_status!=3 ".(empty($car_num)?"":" AND a.car_num LIKE '%{$car_num}%'");

			if ($status==1){//租用
				$where.=" and car_status!=2 AND car_id IN (Select distinct paicheCar From ({$sql_2}) km)";
				if (!empty($search_shop)){
					$where.=" AND b.paicheCounterShop={$search_shop}";
				}
			}

			if ($status==0){//空闲
				$where.=" and car_status!=2 AND car_id not IN (Select distinct paicheCar From ({$sql_2}) km)";
				if (!empty($search_shop)){
					$where.=" AND a.car_nowSite={$search_shop}";
				}
			}
			if ($status==2){//维修
				$where.=" AND car_status=2";
				if (Request::getVar('maint','get')=="reason"){//异常维修
					$where.=" AND car_maintreason<>0";
				}else{
					$where.=" AND car_maintreason=0";
				}
				if (!empty($search_shop)){
					$where.=" AND a.car_nowSite={$search_shop}";
				}
			}
			
			$sql="SELECT a.car_id,a.car_num,a.car_model,a.car_status,a.car_price,a.car_nowSite,a.car_maintreason,b.car_status_code,b.paiche_id,c.shop_name,a.car_image as car_photo,d.shop_name as paiche_shopname FROM `car` AS a ".
				 "LEFT JOIN ($sql_1) AS b ON a.car_id=b.paicheCar ".
				 "LEFT JOIN shop as c on a.car_nowSite=c.shop_id ".
				 "LEFT JOIN shop as d on b.paicheCounterShop=d.shop_id ".
				 "WHERE {$where} ORDER BY a.car_id DESC";
			$tmplist=$model->getCarList(0,1000,$sql,$status);
			$car['list']=$tmplist;
			$car['count']=count($tmplist);
		}
		$view  = $this->createView("operator/machine/carrunlist.html");
		$object = new stdClass();
		$object->car = $car;
		
		$object->status = $status;
		$object->search_shop=$search_shop;
		$object->shoplist=$model->getList("Select shop_id,shop_name From shop where shop_id<>5");
		$object->firstop =$firstop;
		$object->maint=Request::getVar('maint','get');
		
		$view->assign($object);
		$view->display();
	}















	function carrundetail(){
		$subwhere=$this->getBusiTypePrivilege();
		$car_id=Request::getVar('car_id','get');
		$emp_id=Request::getVar('emp_id','get');
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$List=$model->getPaicheList($car_id,$emp_id,$subwhere);
		
		$view  = $this->createView("operator/machine/carrundetail.html");
		$object = new stdClass();
		$object->list = $List;
		$view->assign($object);
		$view->display();
	}
	
	function planlist(){
		$title = Request::getVar('title','post');
		
		$start=date("Y-m-d",time());
		$end=date("Y-m-d",time()+30*24*3600);
		$date_array = array();
		for($day=0; $day<30; $day++){
			$date_array[$day]['day']=date("m-d",time()+$day*24*3600);
			$date_array[$day]['date']=date("Y-m-d",time()+$day*24*3600);
		}
		
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$sql="SELECT car_id,car_num FROM `car` WHERE car_recycle!=1 ".(empty($title)?"":"AND car_num like '%{$title}%' ")." ORDER BY car_id DESC";
		$List = $model->getListBySql(0,10000, $sql,strtotime($start),strtotime($end));
		
		$view  = $this->createView("operator/machine/planlist.html");
		$object = new stdClass();
		$object->list = $List;
		$object->title=$title;
		
		$object->daylist = $date_array;
		$object->start=$start;
		$object->end=$end;
		$view->assign($object);
		$view->display();
	}
	
	function getMaintList(){
		$pList=array();
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$sql_1="SELECT car_num,car_saleDate,car_nowKilo,car_lastmaintDate,car_nextmaintKilo,'整车保养' as option_name,0 as item_id 
				FROM car WHERE car_recycle!=1 AND car_nextmaintKilo>0 AND CONVERT(car_nextmaintKilo, signed) - CONVERT(car_nowKilo, signed)<1000 ";
		$sql_01="Select a.car_id,a.maintenance_date as car_lastmaintDate,b.next_kilo as car_nextmaintKilo,b.item_id From car_maintenance as a Inner Join car_maint_item as b On a.maintenance_id=b.fitting_maintid Where b.next_kilo>0";
		$sql_02="select * from ({$sql_01}) as aa where car_nextmaintKilo= (select max(bb.car_nextmaintKilo) from ({$sql_01}) as bb where aa.item_id = bb.item_id and aa.car_id=bb.car_id )";
		$sql_2="Select c.car_num,c.car_saleDate,c.car_nowKilo,aaa.car_lastmaintDate,aaa.car_nextmaintKilo,d.option_name,item_id 
				From ({$sql_02}) as aaa Inner Join car as c On aaa.car_id=c.car_id Left Join zn_options as d On aaa.item_id=d.option_id 
				Where c.car_recycle!=1 AND CONVERT(aaa.car_nextmaintKilo, signed) - CONVERT(c.car_nowKilo, signed)<1000";
		
		$sql="Select * From ({$sql_1} Union All {$sql_2}) a Order by car_num,item_id,car_nextmaintKilo Desc";

		$pList = $model->getListBySql(0,100, $sql);
		
		$total   = count($pList);
		echo json_encode(array('status'=>0,'totalRecords'=>$total, 'data'=>$pList));
	}
	function getInsurList(){
		$pList=array();
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$transdate=date("Y-m-d",strtotime("+1 month",strtotime(date('Y-m-d'))));
		$sql="SELECT a.`car_num`,a.`car_saleDate`,a.`car_nowKilo`,b.insurance_type,b.`insurance_start`,b.`insurance_end` FROM `car` AS a INNER JOIN (SELECT car_id,insurance_type,insurance_start,insurance_end FROM `car_insurance` WHERE insurance_end>=".time()." and insurance_end<=".strtotime($transdate).") AS b ON a.car_id=b.car_id WHERE a.car_recycle!=1 ";

		$pList = $model->getListBySql(0,100, $sql);
		
		$total   = count($pList);
		echo json_encode(array('status'=>0,'totalRecords'=>$total, 'data'=>$pList));
	}


	function getCarefulList(){
		$pList=array();
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$nowtime=strtotime("-50 month",strtotime(date('Y-m-d')));
		$transdate=date("Y-m-d",strtotime("+3 month",strtotime(date('Y-m-d'))));
		
		$sql_3="SELECT car_num,car_cartDate,car_nowKilo,car_lastcarefulDate,car_nextcarefulDate,car_xiaotime,car_xiaodate,TO_DAYS(FROM_UNIXTIME(car_nextcarefulDate,'%Y-%m-%d')) - TO_DAYS(NOW()) AS diffday 
				FROM car WHERE car_recycle!=1 AND car_changeDate=0 AND car_nextcarefulDate>={$nowtime} and car_nextcarefulDate<=".strtotime($transdate);

		
		$sql="Select * From ({$sql_3}) a Order by diffday,car_num";

		$pList_a = $model->getListBySql(0,100, $sql);

		$sql_4="SELECT car_num,car_cartDate,car_nowKilo,car_lastcarefulDate,car_nextcarefulDate,car_xiaotime,car_xiaodate,TO_DAYS(FROM_UNIXTIME(car_nextcarefulDate,'%Y-%m-%d')) - TO_DAYS(NOW()) AS diffday 
				FROM car WHERE car_recycle!=1 AND car_changeDate=0 AND car_xiaodate>={$nowtime} and car_xiaodate!=0 and car_xiaodate<=".strtotime($transdate);
		$sqla="Select * From ({$sql_4}) a Order by diffday,car_num";

		$pList_b = $model->getListBySql(0,100, $sqla);

		for($i=0;$i<count($pList_a);$i++){
			$pList_a[$i]['type_a']='大';
			$pList_a[$i]['stime']=$pList_a[$i]['car_lastcarefulDate'];
			$pList_a[$i]['etime']=$pList_a[$i]['car_nextcarefulDate'];
		}
		for($i=0;$i<count($pList_b);$i++){
			$pList_b[$i]['type_a']='小';
			$pList_b[$i]['stime']=$pList_b[$i]['car_xiaotime'];
			$pList_b[$i]['etime']=$pList_b[$i]['car_xiaodate'];
		}
		if(count($pList_b)>0){
			$pList = array_merge($pList_a,$pList_b);
		}else{
			$pList=$pList_a;
		}
		

		 for($i=0;$i<count($pList);$i++){
		 	for($j=$i+1;$j<count($pList)-1;$j++){
		 		if(strtotime($pList[$j]['etime'])<strtotime($pList[$i]['etime'])){
		 			$test=$pList[$i];
		 			$pList[$i]=$pList[$j];
		 			$pList[$j]=$test;
		 		}
		 	}


		 }
	    

	    
		  
		
		$total   = count($pList);
		
		echo json_encode(array('status'=>0,'totalRecords'=>$total, 'data'=>$pList));
	}





	function export(){
		$car_status=Request::getVar('car_status','get');
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$sql="SELECT * FROM `car` WHERE `car_recycle`!=1 AND car_status != 3 ORDER BY `car_id` DESC";
		$List = $model->getList($sql);
				        
		header ( "Content-type:application/vnd.ms-excel" );
		header ( "Content-Disposition:filename=车辆清单.xls" );
		echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
		<html xmlns='http://www.w3.org/1999/xhtml'>
		<head>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		<title></title>
		</head>
		<body>
		<table width='100%' border='1'>
		  <tr>
		    <td colspan='14'>车辆清单</td>
		  </tr>
		  <tr>
		    <td>车牌号</td>
			<td>颜色</td>
			<td>车型</td>
			<td>品牌</td>
			<td>品种</td>
			<td>发动机号</td>
			<td>车架号</td>
			<td>座位数</td>
			<td>入账日期</td>
			<td>购买车价</td>
			<td>购置税</td>
			<td>车辆注册日期</td>
			<td>备注</td>
		    
		  </tr>";
		if(is_array($List)){
			foreach($List as $item)
	        {
			echo "
			  <tr>
			    <td>苏D".$item["car_num"]."</td>
			    <td>".$item["car_color"]."</td>
			    <td>".$item["car_model"]."</td>
				<td>".$item["car_brand"]."</td>
				<td>".$item["car_type"]."</td>
				<td>".$item["car_motor"]."</td>
				<td>".$item["car_frame"]."</td>
				<td>".$item["car_seat"]."</td>
				<td>".$item["car_saleDate"]."</td>
			    <td>".$item["car_amount"]."</td>
			    <td>".$item["car_buytax"]."</td>
			    <td>".$item["car_cartDate"]."</td>
			    <td>".$item["car_remarks"]."</td>
			    </tr>";
	        }
		}
		
		echo "
		</table>
		</body>
		</html>";
	}




	function picture(){
		$car_id = Request::getVar('car_id','get');
		$nowserial=Request::getVar('nowserial','get');
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$imagelist = $model->getCarImages($car_id);
		$total=count($imagelist);
		
		$object = new stdClass();
		$object->imagelist = $imagelist;
		$object->nowserial = $nowserial;
		$object->total= $total;
        
        $view  = $this->createView("operator/machine/picture.html");
		$view->assign($object);
		$view->display();
	}
	//添加
	function price(){
		
		$car_id = Request::getVar('car_id','get');
		//print_r($);exit;
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$object = new stdClass();
		$object->car_id = $car_id;
        $view  = $this->createView("operator/machine/price.html");
		$view->assign($object);
		$view->display();
	}
	//添加
	function price_acc(){
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$car_id = Request::getVar('car_id','post');
		$object = new stdClass();
		$object->car_id= $car_id;
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
		if($model->store($object,"car_price")){
			$req=true;
		}else{
			$req=false;
		}
	
		$object = new stdClass();
        $object->result = $req ? "添加成功！":"添加失败，返回重试！";
        $view  = $this->createView("operator/machine/result.html");
        $view->assign($object);
        $view->display();
	}
	//修改
	function update_price(){
		//print_r("expression");exit;
		$id = Request::getVar('id','get');
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$sql="select * from car_price where id={$id}";
		$car_price=$model->getListBySql_a($sql);

		$object = new stdClass();
		$object->id = $id;
		$object->car_price = $car_price[0];
        $view  = $this->createView("operator/machine/update_price.html");
		$view->assign($object);
		$view->display();
	}
	//修改
	function price_updateAcc(){
		
		$model = $this->createModel("machine",dirname( __FILE__ ));
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
		//print_r($object);exit;
		$req=true;
		if($model->update($object,'id',"car_price")){
			$req=true;
		}else{
			$req=false;
		}
	
		$object = new stdClass();
        $object->result = $req ? "修改成功！":"修改失败，返回重试！";
        $view  = $this->createView("operator/machine/result.html");
        $view->assign($object);
        $view->display();
	}
	function getcarprice(){
    	$carid=Request::getVar('carid','get');
    	$model  = $this->createModel("machine",dirname( __FILE__ ));
		$sql="Select plan_name,plan_day,plan_rent,plan_rentamount,plan_deposit1,plan_deposit2,plan_rentRemarks From car_price Where car_id={$carid}";
		$tmplist=$model->getListBySql(0,100, $sql);
		$total   = count($tmplist);
    	echo json_encode(array('status'=>0,'totalRecords'=>$total, 'data'=>$tmplist));
    }
	function changeshop(){
		$carid=Request::getVar('carid','get');
		$shopid=Request::getVar('shopid','get');
		$carstatus=Request::getVar('carstatus','get');
		$car_maintreason=Request::getVar('car_maintreason','get');
		$object = new stdClass();
		$object->car_id = $carid;
		$object->car_nowSite = $shopid;
		$object->car_status = $carstatus;
		if ($carstatus==2){
			$object->car_maintreason = $car_maintreason;
		}else{
			$object->car_maintreason = 0;
		}
		
		$model  = $this->createModel("machine",dirname( __FILE__ ));
		if ($model->update($object,'car_id')){
			$re=0;
		}else{
			$re=1;
		}
		echo json_encode(array('status'=>$re));
	}
	function getbusiness(){
		$busi_id=Request::getVar('bid','get');
		$model  = $this->createModel("machine",dirname( __FILE__ ));
		$busi_type=$model->getTotal("Select item_type as total From item Where item_paicheType={$busi_id}");
		$where ="a.paiche_recycle!=1 AND a.paiche_type = {$busi_id} AND IFNULL( a.paiche_aaa,'')<>'补单'";
		$sql="SELECT shop_name,shop_id,IFNULL(total,0) as total From shop a Left Join (Select paiche_shopid,COUNT(paiche_contractNum) AS total From paiche AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId Where {$where} AND a.paiche_status=0 Group by a.paiche_shopid) mm On a.shop_id=mm.paiche_shopid where a.shop_id<>5 Order by a.shop_order";
		$tmplist1=$model->getListBySql(0,100, $sql);
		if ($busi_id==2){
		$sql="SELECT shop_name,shop_id,IFNULL(total,0) as total From shop a Left Join (Select paiche_shopid,COUNT(paiche_contractNum) AS total From paiche AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId Where {$where} AND a.paiche_status=1 AND a.paiche_shunt=0 AND b.settle_totalKm=0 AND b.settle_losses!=2 AND a.paiche_startDate<=".time(). " AND a.paiche_endDate>".time()." Group by a.paiche_shopid) mm On a.shop_id=mm.paiche_shopid where a.shop_id<>5 Order by a.shop_order";
		$tmplist20=$model->getListBySql(0,100, $sql);
		}else{
			$tmplist20=array();
		}
		$sql="SELECT shop_name,shop_id,IFNULL(total,0) as total From shop a Left Join (Select paiche_shopid,COUNT(paiche_contractNum) AS total From paiche AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId Where {$where} AND a.paiche_status=1 AND a.paiche_shunt=0 AND b.settle_totalKm=0 AND b.settle_losses!=2 AND a.paiche_startDate<=".time(). " Group by a.paiche_shopid) mm On a.shop_id=mm.paiche_shopid where a.shop_id<>5 Order by a.shop_order";
		$tmplist2=$model->getListBySql(0,100, $sql);
		$sql="SELECT shop_name,shop_id,IFNULL(total,0) as total From shop a Left Join (Select paiche_shopid,COUNT(paiche_contractNum) AS total From paiche AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId Where {$where} AND a.paiche_status>0 AND b.settle_totalKm!=0 AND (b.settle_losses=0 or b.settle_losses=1) Group by a.paiche_shopid) mm On a.shop_id=mm.paiche_shopid where a.shop_id<>5 Order by a.shop_order";
		$tmplist3=$model->getListBySql(0,100, $sql);
		$sql="SELECT shop_name,shop_id,IFNULL(total,0) as total From shop a Left Join (Select paiche_shopid,COUNT(paiche_contractNum) AS total From paiche AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId Where {$where} AND a.paiche_status>0 AND b.settle_totalKm!=0 AND b.settle_losses=2 Group by a.paiche_shopid) mm On a.shop_id=mm.paiche_shopid where a.shop_id<>5 Order by a.shop_order";
		$tmplist4=$model->getListBySql(0,100, $sql);
		echo json_encode(array('status'=>0,'busi_type'=>$busi_type,'totalRecords1'=>count($tmplist1), 'data1'=>$tmplist1,'totalRecords20'=>count($tmplist20), 'data20'=>$tmplist20,'totalRecords2'=>count($tmplist2), 'data2'=>$tmplist2,'totalRecords3'=>count($tmplist3), 'data3'=>$tmplist3,'totalRecords4'=>count($tmplist4), 'data4'=>$tmplist4));
	}
	function updateprice(){
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$car_id = Request::getVar('car_id','get');
		$car_infactamount = Request::getVar('car_infactamount','get');
		$car_nowKilo = Request::getVar('car_nowKilo','get');
		
		$object = new stdClass();
		$object->car_id=$car_id;
		if ($car_infactamount){
		$object->car_infactamount=empty($car_infactamount)?0:$car_infactamount;
		}
		if ($car_nowKilo){
		$object->car_nowKilo=empty($car_nowKilo)?0:$car_nowKilo;
		}

		if ($model->update($object,'car_id',"car")){
			$info=array('status'=>'ok');
		}else{
			$info=array('status'=>'error');
		}
		echo json_encode($info);
		exit();
	}

	function selectcar(){
		$key=Request::getVar('key','get');
		$model = $this->createModel("machine",dirname( __FILE__ ));
		
		$sql="Select `car_id`,`car_num`,`car_color`,`car_brand`,`car_type`,`car_cartDate` From car Where car_recycle=0 AND car_status!=3";
		if (!empty($key)){
			$sql .=" AND (`car_num` like '%{$key}%' OR car_brand like '%{$key}%' OR car_type like '%{$key}%')";
		}

		$object = new stdClass();
		$object->empList = $model->getList($sql);
		$object->sel_type = Request::getVar('sel_type','get');
		$object->target_id = Request::getVar('target_id','get');
		$view  = $this->createView("operator/business/selectemp.html");
		$view->assign($object);
		$view->display();
	}
	
	
}