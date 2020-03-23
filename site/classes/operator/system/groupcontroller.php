<?php
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('operator.navi.admincontroller');
import('operator.navi.privilegehelper');
import('imag.fusecookie');

class GroupController extends AdminController
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
		
		$this->registerTask( 'list','groupList');
		$this->registerTask( 'create','create');
		$this->registerTask( 'insert','insert');
		$this->registerTask( 'modify','modify');
		$this->registerTask( 'update','update');
		$this->registerTask( 'delete','delete');
        
	}
	function display(){
		echo "display";
	}
	
	function groupList()
	{
		$p = Request::getVar('p','get');
        
		$model = $this->createModel("group",dirname( __FILE__ ));
		
		
		if(empty($p)){$p=1;}
		$base_url = "list.php";
		$per_page = 20;
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		$groupList = $model->getGroupList($start,$per_page);
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
		
		$view  = $this->createView("operator/system/group/list.html");
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();
		$object->groupList = $groupList;
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
		
		$model = $this->createModel("group",dirname( __FILE__ ));		
		$view  = $this->createView("operator/system/group/create.html");
		$object = new stdClass();
		$object->privilegeList = $this->_getPrivilegeList();
		$object->task = "insert";	
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
		$u = Request::getVar('title','post');
		$title = Request::getVar('title','post');	
		$privileges = Request::getVar('privileges','post');		

		$model = $this->createModel("group",dirname( __FILE__ ));

		$object = new stdClass();
		$object->title = $title;
		$object->privilege = serialize($privileges);	
		
		if ($model->store($object))
		{	
			$nickname = $_SESSION['a_username'];
			$admin_user_id = $_SESSION['a_uid'];			
			$title = $nickname."添加管理员组".$u;			   
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
		$model = $this->createModel("group",dirname( __FILE__ ));
		$groupInfo = $model->getGroupInfo($uid);
		$view  = $this->createView("operator/system/group/create.html");
		$object = new stdClass();
		$object->privilegeList = $this->_getPrivilegeList($uid);
		$object->group = $groupInfo;
		$object->task = "update";
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

		$privileges = Request::getVar('privileges','post');
		
		$aid = Request::getVar('aid','post');
		$title = Request::getVar('title','post');
		
		$object = new stdClass();
		$object->privilege = serialize($privileges);
		$object->permissions = implode(',',Request::getVar('permissions','post'));
		$object->admin_group_id = $aid;
		$object->title = $title;

		$model = $this->createModel("group",dirname( __FILE__ ));
		
		if ($model->update($object,'admin_group_id'))
		{	
			$nickname = $_SESSION['a_username'];
			$admin_user_id = $_SESSION['a_uid'];
			$name = $model->getGroupInfo($aid);
			$title = $nickname."修改管理员组".$name['title']."的权限";			   
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

		$model = $this->createModel("group",dirname( __FILE__ ));
		foreach($uidlist as $uid){
			if($uid!=1&&!empty($uid)){
				$model->delete($uid);
				$nickname = $_SESSION['a_username'];
				$admin_user_id = $_SESSION['a_uid'];	
				$title = $nickname."删除ID为".$uid."的管理员组";	   
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

}

