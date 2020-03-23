<?php
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('operator.navi.admincontroller');
import('operator.navi.privilegehelper');
import('imag.fusecookie');


error_reporting(E_ERROR);
class CarefulController extends AdminController
{
	function __construct($config = array())
	{
		parent::__construct($config);
		
		$this->registerTask( 'create','create');
		$this->registerTask( 'insert','insert');
		$this->registerTask( 'modify','modify');
		$this->registerTask( 'update','update');
		$this->registerTask( 'delete','delete');
		$this->registerTask( 'first','first');
		$this->registerTask( 'list','plist');
		$this->registerTask( 'bao','bao');
		$this->registerTask( 'bao_accept','bao_accept');
	}
	function display(){
		echo "display";
	}
	function first(){
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$where="`car_recycle`!=1 ";
		$sql="Select Sum(nCount1) as nCount1,Sum(nCount2) as nCount2,Sum(nCount3) as nCount3,Sum(nCount4) as nCount4,Sum(nCount1+nCount2+nCount3+nCount4) as nCount From (
		Select count(*) as nCount1,0 as nCount2,0 as nCount3,0 as nCount4 From car Where {$where} and (car_status=0 or car_status=1) 
				Union All 
				Select 0 as nCount1,count(*) as nCount2,0 as nCount3,0 as nCount4 From car Where {$where} and car_status=2
				Union All 
				Select 0 as nCount1,0 as nCount2,count(*) as nCount3,0 as nCount4 From car Where {$where} and car_status=3 and car_changeDate=0
				Union All 
				Select 0 as nCount1,0 as nCount2,0 as nCount3,count(*) as nCount4 From car Where {$where} and car_status=3 and car_changeDate<>0) aa";

		$first = $model->getListBySql(0,100, $sql);
		$view  = $this->createView("operator/yearcareful/first.html");
		
		$object = new stdClass();
		$object->first = $first;
		$view->assign($object);
		$view->display();
	}


	function plist()
	{

		$op=Request::getVar('op','get');
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$base_url = "list.php";
		$per_page = 10;
		$where="`car_recycle`!=1 ";
		$car_num=Request::getVar('car_num','get');
		$car_cartDate=Request::getVar('car_cartDate','get');
		$car_status=Request::getVar('car_status','get');
		
		if(!empty($car_num)){$where.=" AND car_num like '%".$car_num."%'";$base_url.="&car_num={$car_num}";}
		if(!empty($car_cartDate)){$where.=" AND car_cartDate='".strtotime($car_cartDate)."'";$base_url.="&car_cartDate={$car_cartDate}";}
	 	
		if ($car_status=="4"){
	 		$where.=" AND car_status = 3 AND car_changeDate<>0";
	 		$base_url.="&car_status={$car_status}";
	 	}else if ($car_status=="3"){
	 		$where.=" AND car_status = {$car_status} AND car_changeDate=0";
	 		$base_url.="&car_status={$car_status}";
	 	}else{
	 		$where.=" AND car_status != 3";
	 	}
	 	
		$model = $this->createModel("machine",dirname( __FILE__ ));
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;		
		
		$sql="SELECT car_xiaotime,car_xiaodate,car_id,car_num,car_brand,car_cartDate,car_lastcarefulDate,car_lastcarefulKilo,car_nextcarefulDate FROM `car` WHERE {$where} ORDER BY `car_id` DESC";
		$List = $model->getListBySql2($start,$per_page, $sql);

		for($i=0;$i<count($List);$i++){
			if (isset($List[$i]['car_xiaotime'])){
            		$List[$i]['car_xiaotime']= ($List[$i]['car_xiaotime']>0?date("Y-m-d",$List[$i]['car_xiaotime']):"");
            	}
            	if (isset($List[$i]['car_xiaodate'])){
            		$List[$i]['car_xiaodate']= ($List[$i]['car_xiaodate']>0?date("Y-m-d",$List[$i]['car_xiaodate']):"");
            	}
		}
		$sql="SELECT COUNT(*) AS total FROM `car` WHERE {$where} ";
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
		$view  = $this->createView("operator/yearcareful/list.html");
		
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();		
		$object->list = $List;
		$object->total = $total_item;
		$object->op=$op;
		$object->car_status=$car_status;
		$view->assign($object);
		$view->display();
	}
	function create()
	{
		$Info = array();
		$Info['careful_km']=0;
		$Info['careful_money']=0;
		$model = $this->createModel("machine",dirname( __FILE__ ));
		
		$object = new stdClass();
		$object->list = $Info;
		$object->task = "insert";
                
        $view  = $this->createView("operator/yearcareful/create.html");
		$view->assign($object);
		$view->display();
	}

	function insert()
	{			
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "list.php";
		}
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$re=true;
		$carid=Request::getVar('paicheCar2','post');
		$careful_date=Request::getVar('careful_date','post');
		$nextDate=Request::getVar('careful_nextdate','post');
		
		$object = new stdClass();
	  	$object->car_id=$carid;
	  	$object->careful_date=strtotime($careful_date);
	  	$type=Request::getVar('type','post');
	  	$object->type=$type;

	  	$object->careful_nextdate=strtotime($nextDate);
	  	$object->careful_km=Request::getVar('careful_km','post');
	  	$object->careful_money=Request::getVar('careful_money','post');
	  	$object->careful_remark=Request::getVar('careful_remark','post');
	  	
	  	$recid=$model->store($object,"car_yearcareful");
	  	if ($recid>0){
		  		$object1 = new stdClass();
		  		$object1->car_id=$carid;
		  		
		  		$object1->car_lastcarefulKilo=Request::getVar('careful_km','post');
		  		if($type==0){
		  			$object1->car_nextcarefulDate=strtotime($nextDate);
		  			$object1->car_lastcarefulDate=strtotime($careful_date);
		  		}else{
		  			$object1->car_xiaodate=strtotime($nextDate);
		  			$object1->car_xiaotime=strtotime($careful_date);
		  		}
			  	
			  	if ($model->update($object1,'car_id')){}
				else{
					$re=false;
				}
	  	}else{
	  		$re=false;
	  	}
	  	  
		if ($re)
		{
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
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$sql = "SELECT a.*,b.car_num,b.car_cartDate FROM `car_yearcareful` AS a LEFT JOIN `car` AS b ON a.car_id=b.car_id WHERE a.`careful_id`='{$uid}'";
		$Info = $model->getInfoBySql($sql);
		

		$object = new stdClass();
		$object->list = $Info;
		$object->task = "update";
        
        $view  = $this->createView("operator/yearcareful/create.html");
		$view->assign($object);
		$view->display();
	}
	function update()
	{	
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "list.php";
		}
		$uid = Request::getVar('uid','post');	
		if(empty($uid))
		{
			Response::redirect($forward,"Need id!");
		}
		
		$model = $this->createModel("machine",dirname( __FILE__ ));
		$re=true;
		$carid=Request::getVar('paicheCar2','post');
		$careful_date=Request::getVar('careful_date','post');
		$nextDate=Request::getVar('careful_nextdate','post');
		
		$object = new stdClass();
		$type=Request::getVar('type','post');
		$object->type=$type;
		$object->careful_id = $uid;
	  	$object->car_id=$carid;
	  	$object->careful_date=strtotime($careful_date);
	  	$object->careful_nextdate=strtotime($nextDate);
	  	$object->careful_km=Request::getVar('careful_km','post');
	  	$object->careful_money=Request::getVar('careful_money','post');
	  	$object->careful_remark=Request::getVar('careful_remark','post');
		
		if ($model->update($object,'careful_id','car_yearcareful')){
		  		$object1 = new stdClass();
		  		$object1->car_id=$carid;
		  		if($type==0){
		  			$object1->car_nextcarefulDate=strtotime($nextDate);
		  			$object1->car_lastcarefulDate=strtotime($careful_date);
		  		}else{
		  			$object1->car_xiaodate=strtotime($nextDate);
		  			$object1->car_xiaotime=strtotime($careful_date);
		  		}
		  		$object1->car_lastcarefulKilo=Request::getVar('careful_km','post');
			  
			  	if ($model->update($object1,'car_id')){
			  	}else{
			  		$re=false;
			  	}
		  	
	  	}else{
	  		$re=false;
	  	}

		if ($re)
		{
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
		if(empty($forward))
		{
            $forward = "list.php";
		}
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("machine",dirname( __FILE__ ));
		
		if ($model->delete2($uid,"car_yearcareful","careful_id")){
			Components::save_admin_log("删除了ID为".$uid."的年审记录");
			$this->redirect($forward,"删除成功");
		}
	}
}
?>