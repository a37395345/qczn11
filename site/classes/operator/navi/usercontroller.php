<?php
import('imag.component.controller');
import('imag.component.model');
import('imag.component.view');
import('imag.component.template');
import('imag.database.database');
import('imag.fusecookie');
import('publicFunction.CommonFunction');
/**
 * Login for admin operator
 * 
 * @package		classes
 * @subpackage	operator.navi
 * @author gary wang (wangbaogang123@hotmail.com)
 */

class UserController extends Controller
{
	/**
	 * Constructor
	 *
	 * @params	array	Controller configuration array
	 */
	function __construct($config = array())
	{
		session_start();
		parent::__construct($config);
		$this->registerTask( 'login','login');
		$this->registerTask( 'logout','logout');
		$this->registerTask( 'modips','modips');
		$this->registerTask( 'modips_acc','modips_acc');
	}
	/**
	 * login
	 */
	function login()
	{
		$username = Request::getVar("username","post");
		$passwd   = Request::getVar("password","post");
		//$checkcode= Request::getVar("checkcode","post");
		$checkcode=$_SESSION['code'];
		//print_r(strtolower($checkcode));
		//print_r(strtolower($_SESSION['code']));exit;

		//验证码去空
		$checkcode=str_replace(' ', '', $checkcode);
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = Request::getVar("HTTP_REFERER",'server');
		}

		if (strtolower($checkcode)!=strtolower($_SESSION['code'])){
			$this->redirect($forward,"验证码不正确！");
		}
		
		if(empty($username) || empty($passwd))
		{
			$this->redirect($forward,"登录表单填写不完整！");
		}
		if ($passwd=='123456'){
			$this->redirect($forward,"请联系管理员修改初始密码后再登录！");
		}
		//$uid = $_SESSION['a_uid'];
		if(!isset($_SESSION['a_uid']))
		{
			$_SESSION['a_uid'] = 0;
			$_SESSION['a_gid'] = 0;
			$_SESSION['a_username'] = "";
			$_SESSION['user_id'] = 0;
			$_SESSION['nickname'] = "";
			$_SESSION['truename'] = "";
			$_SESSION['shopid'] = 0;
			$_SESSION['shopname'] = "";
		}
		
		$model = $this->createModel("user",dirname( __FILE__ ));
		$row = $model->getLogin($username,md5($passwd));
		if(!count($row)>0){
			$this->redirect($forward,"请输入正确的账号跟密码！");
		}
		$rows = $model->getLogins($row["user_id"]);
		
		if(count($rows)>0){
			if($row['status']!=0){
				$this->redirect($forward,"您的账号已禁止登录！");
			}
			$login_ip   = $this->getRealIp();
			$_SESSION['code'] =$this->getRandChar(15);
			$_SESSION['a_uid'] = $row["admin_user_id"];
			$_SESSION['a_gid'] = $row["admin_group_id"];
			$_SESSION['a_permissions'] = $row["permissions"];
			$_SESSION['a_username'] = $username;
			$_SESSION['user_id'] = $row["user_id"];
			$_SESSION['department_id'] = $rows["department_id"];
			$_SESSION['nickname'] = $rows["username"];
			$_SESSION['truename'] = $rows["emp_name"];
			$_SESSION['shopid'] = $rows["shop_id"];
			$_SESSION['shopname'] = $rows["shop_name"];
			$_SESSION['zhiwei_id'] = $rows["zhiwei_id"];
			$title='';
			
			if ($row['password'] == md5("yunhe888")){
				$title="首次登录请立即修改您的初始密码！";
				$forward.="?defalt_script=site/operator/navi/modips.php";
			}
			$acttitle="账号登录:".$_SESSION['user_id'].",姓名：".$username;
			$time = date('Y-m-d H:i:s');
			$sql = "INSERT INTO `admin_users_action` SET `code`='".$_SESSION['code']."',`admin_user_id`= '".$_SESSION['user_id']."',`title` = '".$acttitle."',`ip` = '".$login_ip."',`time` = '".$time."'";
				
			mysql_query($sql);

			$this->redirect($forward,$title);
		}else{
			$this->redirect($forward,"系统没有此用户！");
		}
		
	}

	/**
	 * logout
	 */
	function logout()
	{
		
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "/";
		}
		
		if (isset($_SESSION['a_uid'])){
			$_SESSION['code'] ="";
			$_SESSION['a_uid'] = 0;
			$_SESSION['a_gid'] = 0;
			$_SESSION['a_username'] = "";
			$_SESSION['user_id'] = 0;
			$_SESSION['nickname'] = "";
			$_SESSION['truename'] = "";
			$_SESSION['shopid'] = 0;
			$_SESSION['shopname'] = "";
			$_SESSION['index_a'] = 0;
		}
		$this->redirect($forward);

	}

	function modips()
	{
		
		$truename = $_SESSION['truename'];
		$view  = $this->createView("operator/navi/modips.html");
		$object = new stdClass();
		$object->truename = $truename;
		$object->task="modips_acc";
		$view->assign($object);
		$view->display();
	}

	function modips_acc(){
		$forward="modips.php";
		$oldpasswd=Request::getVar("oldpass","post");
		$newpasswd=md5(Request::getVar("newpass","post"));
		$uid = $_SESSION['a_uid'];
		$model = $this->createModel("user",dirname( __FILE__ ));

		$rows = $model->getInfo("Select * from admin_users Where admin_user_id={$uid}");
		if ($rows['password'] != md5($oldpasswd)){
			$this->redirect($forward,"原密码不正确！");
			exit();
		}
		
		$sql="Update admin_users set password='{$newpasswd}' Where admin_user_id={$uid}";
		if ($model->update($sql)){
			FuseCookie::getInstance()->clear("a_uid");
			FuseCookie::getInstance()->clear("a_gid");
			FuseCookie::getInstance()->clear("a_username");
			FuseCookie::getInstance()->clear("user_id");
			echo "<script>alert('修改密码成功 ,请重新登录!');parent.location.href='/';</script>";
			exit();
			//$this->redirect($forward,"修改密码成功！");
		}else{
			$this->redirect($forward,"修改密码失败！");
		}
	}
	function getRealIp(){
		if(isset($_SERVER['REMOTE_ADDR']) && $this->is_ip($_SERVER['REMOTE_ADDR'])) return $_SERVER['REMOTE_ADDR'];
		if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			if(strpos($ip, ',') !== false) {
				$tmp = explode(',', $ip);
				$ip = trim(end($tmp));
			}
			if($this->is_ip($ip)) return $ip;
		}
		//if(!DT_WIN && isset($_SERVER['REMOTE_ADDR']) && $this->is_ip($_SERVER['REMOTE_ADDR'])) return $_SERVER['REMOTE_ADDR'];
		if(isset($_SERVER['HTTP_CLIENT_IP']) && $this->is_ip($_SERVER['HTTP_CLIENT_IP'])) return $_SERVER['HTTP_CLIENT_IP'];
		return 'unknown';
	}
	function is_ip($ip) {
		return preg_match("/^([0-9]{1,3}\.){3}[0-9]{1,3}$/", $ip);
	}
	function getRandChar($length){
	$str = null;
	$strPol = "0123456789abcdefghijkmnpqrstuvwxyz";
	$max = strlen($strPol)-1;
	for($i=0;$i<$length;$i++){
		$str.=$strPol[rand(0,$max)];
	}
	return $str;
}
}

