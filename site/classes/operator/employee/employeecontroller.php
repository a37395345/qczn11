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


class EmployeeController extends AdminController
{
	/**
	 * Constructor
	 *
	 * @params	array	Controller configuration array
	 */
	var $userList;
	function __construct($config = array())
	{
		parent::__construct($config);
		
		//if(!($this->checkPrivilege("system"))){
			//$this->redirect("/admincp/empty.php","您没有权限访问该页面！");
		//}
		
		$this->registerTask( 'list','userList');		
		$this->registerTask( 'city','city');		
		$this->registerTask( 'create','create');
		$this->registerTask( 'insert','insert');
		$this->registerTask( 'modify','modify');
		$this->registerTask( 'update','update');
		$this->registerTask( 'delete','delete');
		$this->registerTask( 'detail','detail');
		$this->registerTask( 'changepost','changepost');
		$this->registerTask( 'change_accept','change_accept');
		$this->registerTask( 'searchList','searchList');
        $this->registerTask( 'getCityList','getCityList');
        $this->registerTask( 'getNearList','getNearList');
        $this->registerTask( 'getNearList2','getNearList2');
        $this->registerTask( 'sijilist','sijilist');
        $this->registerTask( 'export','export');
        $this->registerTask( 'lockpost','lockpost');
	}
	function display(){
		echo "display";
	}

	function searchList()
	{
		$model = $this->createModel("home",dirname( __FILE__ ));
		$levelList= $model->get_level_list();
		
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$model = $this->createModel("employee",dirname( __FILE__ ));
		
		
		$phone = Request::getVar('phone','get');
		$realname = Request::getVar('realname','get');		
        $level_id = Request::getVar('level_id','get');
        $emp_stutas=Request::getVar('emp_stutas','get');
        if (!isset($emp_stutas)) $emp_stutas=1;

		
		$base_url = "list.php?task=searchList";
		$per_page = 20;
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		$where = " emp_recycle<>1";
		if(!empty($phone)){
			$where .=" AND `emp_phone` LIKE '%".$phone."'";
			$base_url.="&phone={$phone}";
		}
		if(!empty($realname)){
			$where .=" AND `emp_name` LIKE '%".$realname."%'";
			$base_url.="&realname={$realname}";
		}
        if(!empty($level_id) && $level_id>0){
            $where .=" AND `emp_post`={$level_id} ";
            $base_url.="&level_id={$level_id}";
        }
        if ($emp_stutas!=9){
        	$where .=" AND `emp_stutas`={$emp_stutas} ";
        	$base_url.="&emp_stutas={$emp_stutas}";
        }
		//echo $where;
		$userList = $model->getUserList($start,$per_page,$where);
		$ulist=array();
                
		$userLists = $ulist;
		$total_item = $model->getTotal($where);
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
		$view  = $this->createView("operator/employee/searchlist.html");
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();
		$object->userList = $userList;
		$object->levelList = $levelList;
		$object->total = $total_item;	
		$view->assign($object);
		$view->display();
	}

	

	
	function userList()
	{

		$homemodel = $this->createModel("home",dirname( __FILE__ ));
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$phone = Request::getVar('phone','get');
		$realname = Request::getVar('realname','get');		
        $level_id = Request::getVar('level_id','get');
        $shop_id = Request::getVar('emp_shopid','get');
        $emp_stutas=Request::getVar('emp_stutas','get');
        if (!isset($emp_stutas)) $emp_stutas=9;
        
		$model = $this->createModel("employee",dirname( __FILE__ ));

		$where = " emp_recycle<>1";
		$base_url = "list.php?";
		if(!empty($phone)){
			$where .=" AND `emp_phone` LIKE '%".$phone."'";
			$base_url.="&phone={$phone}";
		}
		if(!empty($realname)){
			$where .=" AND `emp_name` LIKE '%".$realname."%'";
			$base_url.="&realname={$realname}";
		}
        if(!empty($level_id) && $level_id>0){
            $where .=" AND `emp_post`={$level_id} ";
            $base_url.="&level_id={$level_id}";
        }
        if (!empty($shop_id) && $shop_id>0){
        	$where .=" AND `emp_shopid`={$shop_id} ";
            $base_url.="&emp_shopid={$shop_id}";
        }
        if ($emp_stutas!=9){
        	$where .=" AND `emp_stutas`={$emp_stutas} ";
        	$base_url.="&emp_stutas={$emp_stutas}";
        }

		$order = Request::getVar('order','get');

		if(!empty($order)){
			$where .= " ORDER BY `".$order."` DESC";
		}else{
			$where .= " ORDER BY `emp_id` DESC";
		}
		
		
		$per_page = 20;
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		$userList = $model->getUserList($start,$per_page,$where);

		//var_dump($userList);
		$total_item = $model->getTotal($where);
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
		$view  = $this->createView("operator/employee/list.html");
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();		
		$object->userList = $userList;
		$object->levelList = $homemodel->get_level_list();
		$object->shopList = $homemodel->get_shop_list();
		$object->total = $total_item;
		$view->assign($object);
		$view->display();
	}

	function create()
	{	
		
	    $model = $this->createModel("home",dirname( __FILE__ ));    	
		$view  = $this->createView("operator/employee/create.html");
		$object = new stdClass();
        $object->levelList = $model->get_level_list();
        $object->shopList = $model->get_shop_list();
		$object->task = "insert";
		$view->assign($object);
		$view->display();
	}
	
	function insert()
	{		
		$upload_root = Config::homedir()."/thumb/";
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "list.php";
		}
		
		$emp_name=Request::getVar('emp_name','post');
		$emp_sex=Request::getVar('emp_sex','post');
		$emp_num=Request::getVar('emp_num','post');
		$emp_phone=Request::getVar('emp_phone','post');
		$emp_homeTel=Request::getVar('emp_homeTel','post');
		$emp_homeAdd=Request::getVar('emp_homeAdd','post');
		$emp_workTel=Request::getVar('emp_workTel','post');
		$emp_workFax=Request::getVar('emp_workFax','post');
		$emp_post=Request::getVar('emp_post','post');
		$emp_introduce=Request::getVar('emp_introduce','post');
		$emp_basicSalary=Request::getVar('emp_basicSalary','post');		
		$emp_subsidy=Request::getVar('emp_subsidy','post');
		$emp_EntryDate=strtotime(Request::getVar('emp_EntryDate','post'));
		$emp_pactStartDate=strtotime(Request::getVar('emp_pactStartDate','post'));
		$emp_pactEndDate=strtotime(Request::getVar('emp_pactEndDate','post'));
		$emp_stutas=Request::getVar('emp_stutas','post');
		$emp_kiloLs=Request::getVar('emp_kiloLs','post');
		$emp_overKmLs=Request::getVar('emp_overKmLs','post');
		$emp_kiloCq=Request::getVar('emp_kiloCq','post');
		$emp_overKmCq=Request::getVar('emp_overKmCq','post');
		$emp_tripKc=Request::getVar('emp_tripKc','post');
		if ($emp_stutas!=-1){
			$emp_quitTime=0;
		}else{
			$emp_quitTime=strtotime(Request::getVar('emp_quitTime','post'));
		}
		
		$emp_image="";
		if(array_key_exists('images',$_FILES) && $_FILES["images"]["error"] == UPLOAD_ERR_OK){
            $uploader = new Uploader($_FILES['images'],$upload_root);
            $uploader->toUpload();            
            $emp_image = $uploader->getFolderFile();
	    }
				
		$model = $this->createModel("employee",dirname( __FILE__ ));		 
		
		$object = new stdClass();
		$object->emp_name = $emp_name;
		$object->emp_sex = $emp_sex;
		$object->emp_num = $emp_num;
		$object->emp_phone = $emp_phone;
		$object->emp_homeTel = $emp_homeTel;
		$object->emp_homeAdd = $emp_homeAdd;
		$object->emp_workTel = $emp_workTel;
		$object->emp_workFax = $emp_workFax;
		$object->emp_post = $emp_post;
		$object->emp_introduce = $emp_introduce;
		$object->emp_basicSalary = $emp_basicSalary;	  
		$object->emp_subsidy = empty($emp_subsidy)? 0 : $emp_subsidy;
		$object->emp_EntryDate = $emp_EntryDate;
		$object->emp_pactStartDate = $emp_pactStartDate;
		$object->emp_pactEndDate = $emp_pactEndDate;
		$object->emp_stutas = $emp_stutas;
		$object->emp_quitTime = $emp_quitTime;
		if ($emp_post==1){
			$object->emp_kiloLs = empty($emp_kiloLs)? 0 : $emp_kiloLs;
			$object->emp_overKmLs = empty($emp_overKmLs)? 0 : $emp_overKmLs;
		}
		if ($emp_post==2){
			$object->emp_kiloCq = empty($emp_kiloCq)? 0 : $emp_kiloCq;
			$object->emp_overKmCq = empty($emp_overKmCq)? 0 : $emp_overKmCq;
		}
		if ($emp_post==7){
			$object->emp_tripKc = empty($emp_tripKc)? 0 : $emp_tripKc;
		}
		$object->emp_image = $emp_image;
		$object->emp_driverlicense = Request::getVar('emp_driverlicense','post');
		$object->emp_shopid = Request::getVar('emp_shopid','post');
		
		$recid=$model->store($object);
		if ($recid>0){
			for ($i=1;$i<5;$i++){
				if(array_key_exists('images'.$i,$_FILES) && $_FILES["images".$i]["error"] == UPLOAD_ERR_OK){
		            $object = new stdClass();
					$object->emp_id=$recid;
	                $uploader = new Uploader($_FILES['images'.$i],$upload_root);
	                $uploader->toUpload();            
	                $object->images = $uploader->getFolderFile();
		           	$model->store($object,"emp_images");
		        }
			}
		}

        if ($recid>0)
		{	
		    Components::save_admin_log("添加了员工");
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
		$homemodel = $this->createModel("home",dirname( __FILE__ ));
		$model = $this->createModel("employee",dirname( __FILE__ ));
		$employee = $model->getUserInfo($uid);
		$view  = $this->createView("operator/employee/create.html");
		$object = new stdClass();	
		$object->employee = $employee;
		$object->levelList = $homemodel->get_level_list();
		$object->shopList = $homemodel->get_shop_list();
		$object->task = "update";
		$view->assign($object);
		$view->display();
	}
	function update()
	{
		$upload_root = Config::homedir()."/thumb/";
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "list.php";
		}
		$aid = Request::getVar('aid','post');
		$arrDelimg=Request::getVar('delimg','post');
		
		$emp_name=Request::getVar('emp_name','post');
		$emp_sex=Request::getVar('emp_sex','post');
		$emp_num=Request::getVar('emp_num','post');
		$emp_phone=Request::getVar('emp_phone','post');
		$emp_homeTel=Request::getVar('emp_homeTel','post');
		$emp_homeAdd=Request::getVar('emp_homeAdd','post');
		$emp_workTel=Request::getVar('emp_workTel','post');
		$emp_workFax=Request::getVar('emp_workFax','post');
		$emp_post=Request::getVar('emp_post','post');
		$emp_introduce=Request::getVar('emp_introduce','post');
		$emp_basicSalary=Request::getVar('emp_basicSalary','post');		
		$emp_subsidy=Request::getVar('emp_subsidy','post');
		$emp_EntryDate=strtotime(Request::getVar('emp_EntryDate','post'));
		$emp_pactStartDate=strtotime(Request::getVar('emp_pactStartDate','post'));
		$emp_pactEndDate=strtotime(Request::getVar('emp_pactEndDate','post'));
		$emp_stutas=Request::getVar('emp_stutas','post');
		$emp_kiloLs=Request::getVar('emp_kiloLs','post');
		$emp_overKmLs=Request::getVar('emp_overKmLs','post');
		$emp_kiloCq=Request::getVar('emp_kiloCq','post');
		$emp_overKmCq=Request::getVar('emp_overKmCq','post');
		$emp_tripKc=Request::getVar('emp_tripKc','post');
		if ($emp_stutas!=-1){
			$emp_quitTime=0;
		}else{
			$emp_quitTime=strtotime(Request::getVar('emp_quitTime','post'));
		}
		$emp_image=Request::getVar('oldimages','post');
		if(array_key_exists('images',$_FILES) && $_FILES["images"]["error"] == UPLOAD_ERR_OK){
            $uploader = new Uploader($_FILES['images'],$upload_root);
            $uploader->toUpload();            
            $emp_image = $uploader->getFolderFile();
	    }
				
		$object = new stdClass();		
    	$object->emp_id = $aid;
    	$object->emp_name = $emp_name;
		  $object->emp_sex = $emp_sex;
		  $object->emp_num = $emp_num;
		  $object->emp_phone = $emp_phone;
		  $object->emp_homeTel = $emp_homeTel;
		  $object->emp_homeAdd = $emp_homeAdd;
		  $object->emp_workTel = $emp_workTel;
		  $object->emp_workFax = $emp_workFax;
		  $object->emp_post = $emp_post;
		  $object->emp_introduce = $emp_introduce;
		  $object->emp_basicSalary = $emp_basicSalary;	  
		  $object->emp_subsidy = $emp_subsidy;
		  $object->emp_EntryDate = $emp_EntryDate;
		  $object->emp_pactStartDate = $emp_pactStartDate;
		  $object->emp_pactEndDate = $emp_pactEndDate;
		  $object->emp_stutas = $emp_stutas;
		  $object->emp_quitTime = empty($emp_quitTime)? 0 : $emp_quitTime;
		if ($emp_post==1){
			$object->emp_kiloLs = empty($emp_kiloLs)? 0 : $emp_kiloLs;
			$object->emp_overKmLs = empty($emp_overKmLs)? 0 : $emp_overKmLs;
		}
		if ($emp_post==2){
			$object->emp_kiloCq = empty($emp_kiloCq)? 0 : $emp_kiloCq;
			$object->emp_overKmCq = empty($emp_overKmCq)? 0 : $emp_overKmCq;
		}
		if ($emp_post==7){
			$object->emp_tripKc = empty($emp_tripKc)? 0 : $emp_tripKc;
		}
		$object->emp_image = $emp_image;
		$object->emp_driverlicense = Request::getVar('emp_driverlicense','post');
		$object->emp_shopid = Request::getVar('emp_shopid','post');
		
		$model = $this->createModel("employee",dirname( __FILE__ ));
		
		if ($model->update($object,'emp_id'))
		{
			if (!empty($arrDelimg)){
				foreach($arrDelimg as $key=>$val){
					$model->delete2($val,"emp_images","id");
				}
			
			}
			for ($i=1;$i<5;$i++){
				if(array_key_exists('images'.$i,$_FILES) && $_FILES["images".$i]["error"] == UPLOAD_ERR_OK){
		            $object = new stdClass();
					$object->emp_id=$aid;
	                $uploader = new Uploader($_FILES['images'.$i],$upload_root);
	                $uploader->toUpload();            
	                $object->images = $uploader->getFolderFile();
		           	$model->store($object,"emp_images");
		        }
			}
			$nickname = $_SESSION['a_username'];
			$admin_user_id = $_SESSION['a_uid'];
			$name = $model->getUserInfo($aid);
			$title = $nickname."修改".$name['emp_name']."的用户资料";			   
			$ip   = $_SERVER['REMOTE_ADDR'];
			$time = gmdate('Y-m-d H:i:s');
			$sql = "INSERT INTO `admin_users_action` SET `admin_user_id`= '".$admin_user_id."',`title` = '".$title."',`ip` = '".$ip."',`time` = '".$time."'";
			mysql_query($sql);
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
		$multi = Request::getVar('multi','get');
				
		if(empty($uid)){
			$uid = Request::getVar('uid','post');
		}
		
		$uidlist = explode(",",$uid);

		$model = $this->createModel("employee",dirname( __FILE__ ));
		foreach($uidlist as $uid){
			
				$model->delete($uid);
				$nickname = $_SESSION['a_username'];
				$admin_user_id = $_SESSION['a_uid'];			
				$title = $nickname."删除ID为".$uid."的用户";			   
				$ip   = $_SERVER['REMOTE_ADDR'];
				$time = gmdate('Y-m-d H:i:s');
				$sql = "INSERT INTO `admin_users_action` SET `admin_user_id`= '".$admin_user_id."',`title` = '".$title."',`ip` = '".$ip."',`time` = '".$time."'";
				mysql_query($sql);
			
		}
		if(!empty($multi)){
			echo "1";
		}else{
			
			$this->redirect($forward,"删除成功");
		}
	}
	function changepost()
	{
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("home",dirname( __FILE__ ));
		$levelList=$model->get_level_list();
		
		$model = $this->createModel("employee",dirname( __FILE__ ));
		$employee = $model->getUserInfo($uid);
		$view  = $this->createView("operator/employee/change.html");
		$object = new stdClass();	
		$object->employee = $employee;
		$object->levelList = $levelList;
		$object->task = "change_accept";
		$view->assign($object);
		$view->display();
	}
	function change_accept()
	{
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "list.php";
		}
		$aid = Request::getVar('aid','post');
		$model = $this->createModel("employee",dirname( __FILE__ ));
		$employee = $model->getUserInfo($aid);
		$emp_post=Request::getVar('emp_post','post');
		$emp_kiloLs=Request::getVar('emp_kiloLs','post');
		$emp_overKmLs=Request::getVar('emp_overKmLs','post');
		$emp_kiloCq=Request::getVar('emp_kiloCq','post');
		$emp_overKmCq=Request::getVar('emp_overKmCq','post');
		$emp_tripKc=Request::getVar('emp_tripKc','post');
		
		$object = new stdClass();
		$object->emp_id = $aid;
		$object->emp_post = Request::getVar('emp_post','post');
		$object->emp_basicSalary = Request::getVar('emp_basicSalary','post');
		if ($emp_post==1){
			$object->emp_kiloLs = empty($emp_kiloLs)? 0 : $emp_kiloLs;
			$object->emp_overKmLs = empty($emp_overKmLs)? 0 : $emp_overKmLs;
		}
		if ($emp_post==2){
			$object->emp_kiloCq = empty($emp_kiloCq)? 0 : $emp_kiloCq;
			$object->emp_overKmCq = empty($emp_overKmCq)? 0 : $emp_overKmCq;
		}
		if ($emp_post==7){
			$object->emp_tripKc = empty($emp_tripKc)? 0 : $emp_tripKc;
		}
		
		$object1 = new stdClass();
		$object1->emp_id = $aid;
		$object1->change_oldpost = $employee['emp_post'];
		$object1->change_newpost = Request::getVar('emp_post','post');
		$object1->change_oldsalary = $employee['emp_basicSalary'];
		$object1->change_newsalary = Request::getVar('emp_basicSalary','post');
		$object1->change_date = strtotime(Request::getVar('emp_EntryDate','post'));
		$object1->change_man = $_SESSION['a_username'];
		$object1->change_times = time();
		if ($emp_post==1){
			$object1->change_oldkiloLs=$employee['emp_kiloLs'];
			$object1->change_newkiloLs = empty($emp_kiloLs)? 0 : $emp_kiloLs;
			$object1->change_oldoverKmLs=$employee['emp_overKmLs'];
			$object1->change_newoverKmLs = empty($emp_overKmLs)? 0 : $emp_overKmLs;
		}
		if ($emp_post==2){
			$object1->change_oldkiloCq=$employee['emp_kiloCq'];
			$object1->change_newkiloCq = empty($emp_kiloCq)? 0 : $emp_kiloCq;
			$object1->change_oldoverKmCq=$employee['emp_overKmCq'];
			$object1->change_newoverKmCq = empty($emp_overKmCq)? 0 : $emp_overKmCq;
		}
		if ($emp_post==7){
			$object1->change_oldtripKc=$employee['emp_tripKc'];
			$object1->change_newtripKc = empty($emp_tripKc)? 0 : $emp_tripKc;
		}
		
		if ($model->store($object1,"emp_changepost") && $model->update($object,'emp_id')){
			$this->redirect($forward,"保存成功");
		}else{
			$this->redirect($forward,"保存失败");
		}
	}
	
	function detail()
	{
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("home",dirname( __FILE__ ));
		$levelList=$model->get_level_list();
		
		$model = $this->createModel("employee",dirname( __FILE__ ));
		$employee = $model->getUserInfo($uid);
		$view  = $this->createView("operator/employee/detail.html");
		$object = new stdClass();	
		$object->employee = $employee;
		$object->levelList = $levelList;
		$object->task = "update";
		$view->assign($object);
		$view->display();
	}
	function getNearList()
	{
		$pList=array();
		$model = $this->createModel("employee",dirname( __FILE__ ));
		
		$where=" emp_recycle<>1 AND emp_stutas<>-1 AND emp_pactStartDate>0 AND emp_pactStartDate<=".time()." AND emp_pactEndDate<".strtotime("+1 month");
		$pList = $model->getUserList(0,100,$where);
		
		$total   = count($pList);
		echo json_encode(array('status'=>0,'totalRecords'=>$total, 'data'=>$pList));
	}
	function getNearList2()
	{
		$pList=array();
		$model = $this->createModel("employee",dirname( __FILE__ ));
		if($this->checkPrivilege("sales_contract")){
		$where=" emp_recycle<>1 AND emp_stutas=0 AND emp_EntryDate>0 AND emp_pactStartDate<=".time()." AND emp_EntryDate<".strtotime("-3 month");
		$pList = $model->getUserList(0,100,$where);
		}
		$total   = count($pList);
		echo json_encode(array('status'=>0,'totalRecords'=>$total, 'data'=>$pList));
	}



	function sijilist()
	{
		
		$model = $this->createModel("employee",dirname( __FILE__ ));
		$name=Request::getVar('name','post');//驾驶员名字
		$status = Request::getVar('status','post');//驾驶员状态
		if (!isset($status)) $status=9;
		/*1.emp_recycle不等于1（没有回收）
		  2.如果状态等于-1，emp_stutas=-1,（离职）如果不等于-1 emp_stutas <>-1（没有离职）
		  3.emp_post （职位）
		  4.姓名模糊查询
		*/
		  
		$where = " emp_recycle<>1 ".($status==-1 ? " AND emp_stutas =-1":" AND emp_stutas <>-1")." AND (emp_post=1 OR emp_post=2 OR emp_post=6 OR emp_post=7)".(empty($name)?"":" AND emp_name LIKE '%{$name}%'")." ORDER BY `emp_id` DESC";
		//获取0到200条记录，条件语句，驾驶员状态
		$userList = $model->getListBySql(0,200,$where,$status);
		for($i=0;$i<count($userList);$i++){
			$sql="SELECT title from employee_level where id=".$userList[$i]['emp_post'];
			$title=$model->getListBySql_a($sql);
			$userList[$i]['title']=$title[0]['title'];
		}

		$view  = $this->createView("operator/employee/sijilist.html");
		$object = new stdClass();
		$object->count = 0;
		$object->list = $userList;
		$object->status = $status;
		$object->total = count($userList);
		//print_r();exit;
		$view->assign($object);
		$view->display();
	}




	function export(){
		$model = $this->createModel("employee",dirname( __FILE__ ));
		$where = " emp_recycle<>1 ORDER BY `emp_id` DESC";
		$userList = $model->getUserList(0,1000,$where);
		        
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
		    <td colspan='11'>员工清单</td>
		  </tr>
		  <tr>
		    <td>姓名</td>
		    <td>职位</td>
		    <td>入职日期</td>
		    <td>手机号</td>
		    <td>底薪</td>
		    <td>社保补贴</td>
		    <td>合同起止日期</td>
			<td>身份证号</td>
			<td>家庭电话</td>
		    <td>家庭地址</td>
		    <td>当前状态</td>
		  </tr>";
		if(is_array($userList)){
			foreach($userList as $item)
	        {
			echo "
			  <tr>
			    <td>".$item["emp_name"]."</td>
			    <td>".$item["level_title"]."</td>
				<td>".$item["emp_EntryDate"]."</td>
				<td>".$item["emp_phone"]."</td>
				<td>".$item["emp_basicSalary"]."</td>
				<td>".$item["emp_subsidy"]."</td>
				<td>".$item["emp_pactStartDate"]."-".$item["emp_pactEndDate"]."</td>
				<td>'".$item["emp_num"]."</td>
			    <td>".$item["emp_homeTel"]."</td>
			    <td>".$item["emp_homeAdd"]."</td>
			    <td>".$item["status_title"]."</td>
			    </tr>";
	        }
		}
		
		echo "
		</table>
		</body>
		</html>";
	}

	function lockpost()
	{
		$enddate = Request::getVar('enddate','post');
		$model = $this->createModel("employee",dirname( __FILE__ ));
		$sql0="DELETE FROM emp_lockpost WHERE end_date='{$enddate}'";
		$sql="INSERT INTO emp_lockpost (emp_id,emp_post,emp_basicSalary,emp_subsidy,emp_kiloLs,emp_overKmLs,emp_kiloCq,emp_overKmCq,emp_tripKc,emp_stutas,emp_quitTime,emp_EntryDate,end_date) 
			  SELECT emp_id,emp_post,emp_basicSalary,emp_subsidy,emp_kiloLs,emp_overKmLs,emp_kiloCq,emp_overKmCq,emp_tripKc,emp_stutas,emp_quitTime,emp_EntryDate,'{$enddate}' as end_date FROM emp Where emp_EntryDate<=".strtotime($enddate);
		if ($model->update("","","",$sql0) && $model->update("","","",$sql)){
			echo "1";
		}else{
			echo "0";
		}
		
	}
}

