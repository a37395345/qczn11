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
	var $userList;
	function __construct($config = array())
	{
		parent::__construct($config);
		
		//if(!($this->checkPrivilege("system"))){
			//$this->redirect("/admincp/empty.php","您没有权限访问该页面！");
		//}
		
		$this->registerTask( 'list','userList');		
		$this->registerTask( 'modify','modify');
		$this->registerTask( 'update','update');
		$this->registerTask( 'delete','delete');
		$this->registerTask( 'search','searchList');
        
	}
	function display(){
		echo "display";
	}

	function getPrefixImage($image,$prefix)
	{
		$filelist = explode(".",$image);
		if(count($filelist)<2){
			return $image;
		}
		$index = count($filelist)-2;
		$filelist[$index] .= "_".$prefix;
		$filelist[count($filelist)-1] = "jpg";
		return implode(".",$filelist);
	}

	function searchList()
	{
		$p = Request::getVar('p','get');
        
		$model = $this->createModel("user",dirname( __FILE__ ));
		
		$user_id = Request::getVar('uid','post');
		$nickname = Request::getVar('nickname','post');
		$mobile = Request::getVar('mobile','post');
		$email = Request::getVar('email','post');
        $is_vip = Request::getVar('is_vip','post');

		if(empty($p)){$p=1;}
		$base_url = "list.php";
		$per_page = 20;
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;

		
		$where = 1;
		if(!empty($user_id)){
			$where .=" AND `user_id` = '".$user_id."'";
		}
		if(!empty($nickname)){
			$where .=" AND `nickname` LIKE '%".$nickname."%'";
		}
		if(!empty($mobile)){
			$where .=" AND `mobile` LIKE '%".$mobile."%'";
		}
		if(!empty($email)){
			$where .=" AND `email` LIKE '%".$email."%'";
		}
        
        if(!empty($is_vip)){
            if ($is_vip == 2)
                $is_vip = 0;
            $where .=" AND `is_vip`={$is_vip} ";
        }        
		//echo $where;
		$userList = $model->getUserList($start,$per_page,$where);
		$ulist=array();
        
		/*
        for($i=0;$i<count($userList);$i++){
			$ulist[]=$userList[$i];
			$head = $ulist[$i]['head'];
			$ulist[$i]['head'] = $this->getPrefixImage($head,"30");
		}
        */
        
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
		$view  = $this->createView("operator/user/user/list.html");
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();
		$object->userList = $userList;	
		$object->total = $total_item;	
		$view->assign($object);
		$view->display();
	}

	
	function userList()
	{
		$p = Request::getVar('p','get');
        
		$model = $this->createModel("user",dirname( __FILE__ ));

		$where = " 1 ORDER BY `user_id` DESC";

		$order = Request::getVar('order','get');

		if(!empty($order)){
			$where = " 1 ORDER BY `".$order."` DESC";
		}
		
		if(empty($p)){$p=1;}
		$base_url = "list.php";
		$per_page = 20;
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		$userList = $model->getUserList($start,$per_page,$where);

		//var_dump($userLists);
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
		$view  = $this->createView("operator/user/user/list.html");
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();		
		$object->userList = $userList;	
		$object->total = $total_item;
		$view->assign($object);
		$view->display();
	}
	
	function modify()
	{
		$uid = Request::getVar('uid','get');
		
		$model = $this->createModel("user",dirname( __FILE__ ));
		
		$userInfo = $model->getUserInfo($uid);

		$view  = $this->createView("operator/user/user/create.html");
		$object = new stdClass();	
		$object->user = $userInfo;
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

		$password = Request::getVar("passwd","post");
		$privileges = Request::getVar('privileges','post');
		$aid = Request::getVar('aid','post');
		$birthday = Request::getVar('birthday','post');

		$arr = explode("-",$birthday);
		
		if(!empty($password)){
			$password = md5($password);
		}
		$object = new stdClass();
		if(!empty($password)){
			$object->password = $password;
		}
	
		$object->user_id = $aid;

		$object->nickname_match = Request::getVar('nickname_match','post');
		$object->email = Request::getVar('email','post');
		$object->realname = Request::getVar('realname','post');
		$object->gender = Request::getVar('gender','post');
		$object->mobile = Request::getVar('mobile','post');
		//$object->idcard = Request::getVar('idcard','post');
		$object->birthdayyear = $arr['0'];
		$object->birthdaymonth = $arr['1'];
		$object->birthdayday = $arr['2'];

		$province = Request::getVar('s_province','post');
		if($province!="省份"){
			$object->province = $province;
		}
		
		$city = Request::getVar('s_city','post');
		if($city!="市"){
			$object->city = $city;
		}
		$object->status = Request::getVar('status','post');
		$object->idcard = Request::getVar('idcard','post');
		$object->address = Request::getVar('address','post');
		$object->zip = Request::getVar('zip','post');
		$head = Request::getVar('head','post');
		if(!empty($head)){
			$object->head = $head;
		}		

		$model = $this->createModel("user",dirname( __FILE__ ));
		
		if ($model->update($object,'user_id'))
		{	
			$nickname = $_SESSION['a_username'];
			$admin_user_id = $_SESSION['a_uid'];
			$name = $model->getUserInfo($aid);
			$title = $nickname."修改".$name['nickname']."的用户资料";			   
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

		$model = $this->createModel("user",dirname( __FILE__ ));
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

}

