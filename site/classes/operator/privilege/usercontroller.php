<?php
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('operator.navi.admincontroller');
import('operator.navi.privilegehelper');
import('imag.fusecookie');

class UserController extends AdminController
{
	
	/**
	 * Constructor
	 *
	 * @params	array	Controller configuration array
	 */
	var $privilegeList;
	function __construct($config = array())
	{
		parent::__construct($config);
		
		//if(!($this->checkPrivilege("system"))){
			//$this->redirect("/admincp/empty.php","您没有权限访问该页面！");
		//}
		
		$this->registerTask( 'list','userList');
		$this->registerTask( 'create','create');
		$this->registerTask( 'insert','insert');
		$this->registerTask( 'modify','modify');
		$this->registerTask( 'update','update');
		$this->registerTask( 'delete','delete');
		$this->registerTask( 'resetps','resetps');
		$this->registerTask( 'getemp','getemp');
      

	}
	function display(){
		echo "display";
	}
	

	function userList()
	{
		$p = Request::getVar('p','get');
        
		$model = $this->createModel("user",dirname( __FILE__ ));
		
		if(empty($p)){$p=1;}
		$base_url = "list.php";
		$per_page = 20;
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		
		$userList = $model->getUserList($start,$per_page);

		$total_item = $model->getTotal();

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
		
		$view  = $this->createView("operator/adminuser/list.html");
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();
		$object->userList = $userList;
		$object->total = $total_item;
		$view->assign($object);
		$view->display();
	}

	function _getPrivilegeList($uid=0){
		
		$helper = new PrivilegeHelper();
		if(empty($uid)){
			$privilege = array();
		}else{
			$privilege = $helper->getPrivilege($uid);
		}
		$list = $helper->getNaviList();
		for($i=0;$i<count($list);$i++){
			$check = false;
			for($q=0;$q<count($list[$i]["list"]);$q++){
				if (array_search($list[$i]["list"][$q]["action"], $privilege)) {
					$list[$i]["list"][$q]["checked"] = true;
					$check = true;
				}else{
					$list[$i]["list"][$q]["checked"] = false;
				}
			}
			if($check){
				$list[$i]["checked"] = true;
			}
		}
		
		return $list;
	}
	
	function create()
	{
		
		$model = $this->createModel("user",dirname( __FILE__ ));		
		$privilege = $model->getAllPrivilege();
		$employee = $model->getAllEmployee();
		$view  = $this->createView("operator/adminuser/create.html");
		$object = new stdClass();
		//$object->privilegeList = $this->_getPrivilegeList();
		$object->task = "insert";
		$object->privilege = $privilege;
		$object->employee = $employee;
		$object->shop = $model->getAllEmployee('Select * from `shop` ');
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
		$u = Request::getVar('username','post');
		$username = Request::getVar('username','post');
		$password = Request::getVar('password','post');
		$user_id = Request::getVar('user_id','post');
		$admin_group_id = Request::getVar('admin_group_id','post');
		$shop_id = Request::getVar('shop_id','post');
		$password = md5($password);
		$model = $this->createModel("user",dirname( __FILE__ ));
		$object = new stdClass();
		$object->username = $username;
		$object->password = $password;
		$object->admin_group_id = $admin_group_id;
		$object->user_id = $user_id;
		$object->privilege = $model->getGroupPrivilege($admin_group_id);
		$object->ip   = $_SERVER['REMOTE_ADDR'];
		$object->time = gmdate('Y-m-d H:i:s');
		$object->shop_id=$shop_id;
		$object->userscope=Request::getVar('userscope','post');
		$object->userstates=Request::getVar('userstates','post');
		
		if ($model->store($object))
		{	
			$object = new stdClass();
			$object->emp_id = $user_id;
			$object->emp_shopid=$shop_id;
			$model->update_a($object,'emp_id','emp');
			
			$nickname = $_SESSION['a_username'];
			$admin_user_id = $_SESSION['a_uid'];			
			$title = $nickname."添加管理员".$u;			   
			$ip   = $_SERVER['REMOTE_ADDR'];
			$time = gmdate('Y-m-d H:i:s');
			$sql = "INSERT INTO `admin_users_action` SET `admin_user_id`= '".$admin_user_id."',`title` = '".$title."',`ip` = '".$ip."',`time` = '".$time."'";
			mysql_query($sql);
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
		
		$model = $this->createModel("user",dirname( __FILE__ ));
		
		$userInfo = $model->getUserInfo($uid);
		$privilege = $model->getAllPrivilege();
		$employee = $model->getAllEmployee();
		$view  = $this->createView("operator/adminuser/create.html");
		$object = new stdClass();
		//$object->privilegeList = $this->_getPrivilegeList($uid);
		$object->user = $userInfo;
		$object->task = "update";
		$object->privilege = $privilege;
		$object->employee = $employee;
		$object->shop = $model->getAllEmployee('Select * from `shop` ');
		//var_dump($object->privilegeList);
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
		
		$password = Request::getVar("password","post");	
		$user_id = Request::getVar("user_id","post");		
		$admin_group_id = Request::getVar('admin_group_id','post');
		$shop_id = Request::getVar('shop_id','post');
		$aid = Request::getVar('aid','post');
		
		$object = new stdClass();
		$object->username = Request::getVar("username","post");
		$object->admin_user_id = $aid;
		$object->user_id = $user_id;
		$object->admin_group_id = $admin_group_id;
		//if(!empty($password)){
		//	$object->password = md5($password);
		//}
		$object->shop_id=$shop_id;
		$object->userscope=Request::getVar('userscope','post');
		$object->userstates=Request::getVar('userstates','post');
		
		$model = $this->createModel("user",dirname( __FILE__ ));
		$object->privilege = $model->getGroupPrivilege($admin_group_id);
		if ($model->update_a($object,'admin_user_id'))
		{	
			$object = new stdClass();
			$object->emp_id = $user_id;
			$object->emp_shopid=$shop_id;
			$model->update_a($object,'emp_id','emp');
			$nickname = $_SESSION['a_username'];
			$admin_user_id = $_SESSION['a_uid'];
			$name = $model->getUserInfo($aid);
			$title = $nickname."修改管理员".$name['username']."的权限";			   
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
		if($uid==1){
			if(!empty($multi)){
				echo "0";
			}else{
				$this->redirect($forward,"此用户不能被删除！");
			}
		}
		
		if(empty($uid)){
			$uid = Request::getVar('uid','post');
		}
		
		$uidlist = explode(",",$uid);

		$model = $this->createModel("user",dirname( __FILE__ ));
		foreach($uidlist as $uid){
			if($uid!=1&&!empty($uid)){
				$model->delete($uid);
				$nickname = $_SESSION['a_username'];
				$admin_user_id = $_SESSION['a_uid'];	
				$title = $nickname."删除ID为".$uid."的管理员";	   
				$ip   = $_SERVER['REMOTE_ADDR'];
				$time = gmdate('Y-m-d H:i:s');
				$sql = "INSERT INTO `admin_users_action` SET `admin_user_id`= '".$admin_user_id."',`title` = '".$title."',`ip` = '".$ip."',`time` = '".$time."'";
				mysql_query($sql);
			}
		}
		if(!empty($multi)){
			echo "1";
		}else{
			
			$this->redirect($forward,"删除成功");
		}
	}

	function resetps(){
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "list.php";
		}
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("user",dirname( __FILE__ ));
		$object = new stdClass();
		$object->admin_user_id = $uid;
		$object->password = md5('yunhe888');
		if ($model->update_a($object,'admin_user_id'))
		{	
			Components::save_admin_log("重置了".$uid."用户的密码");
			$this->redirect($forward,"重置密码成功!");
		}
		else
		{
			$this->redirect($forward,"重置密码失败!");
		}
	}
	//ajax 员工
	function getemp(){
		$list=null;
		$name = Request::getVar('name','post');
		
		$model = $this->createModel("user",dirname( __FILE__ ));
		$sql="select emp_id,emp_name from emp where emp_name like '%".$name."%'";
		$list=$model->getListBySql($sql);
		echo json_encode($list);
	}
}

