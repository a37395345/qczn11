<?php
import('imag.component.controller');
import('imag.component.model');
import('imag.component.view');
import('imag.component.template');
import('imag.environment.request');
import('imag.database.database');
import('operator.navi.privilegehelper');
import('imag.fusecookie');
import('publicFunction.CommonFunction');

/**

 * 
 * Controller for navigation
 *
 * @package		classes
 * @subpackage	operator.navi
 * @author gary wang (wangbaogang123@hotmail.com)
 * 
 */

class NaviController extends Controller
{
	/**
	 * Constructor
	 *
	 * @params	array	Controller configuration array
	 */

	function __construct($config = array())
	{
		parent::__construct($config);
        session_start();
		$this->registerTask( 'index','display');
		$this->registerTask( 'verifycode','verifycode');
		$this->registerTask( 'checksession','checksession');
	}
	/**
	 * index
	 */

	function display()
	{
		if (isset($_SESSION['a_uid']) && !empty($_SESSION['a_uid'])){
			$this->_index();
		}else{
			
			$view  = $this->createView("operator/navi/login.html");
			$object = new stdClass();
			$object->S_LOGIN_ACTION  = "site/operator/navi/login.php";
			$view->assign($object);
			$view->display();
		}
	}

	/**
	 * index
	 */
	function _index()
	{
		 $CommonFunction=new CommonFunction();
        	$uid= $_SESSION['a_uid'];
        //权限组id
        //刷新跟新用户权限信息
        //print_r($_SESSION['user_id']);exit;
        $emp_id=$_SESSION['user_id'];

        if($emp_id){
        	$sql="select * from emp where emp_id={$emp_id}";
        	$emp=$CommonFunction->getData($sql);
        	$_SESSION['zhiwei_id']=$emp['emp_zhiweiid'];
        	$_SESSION['department_id']=$emp['department_id'];
        	$sql="select shop_name from shop where shop_id={$emp['emp_shopid']}";
        	$_SESSION['shopname']=$CommonFunction->getDataY($sql,'shop_name');
        }

       
        //获取权限组
        $rules=$CommonFunction->getRules($_SESSION['zhiwei_id'],$_SESSION['department_id']);
        //获取所有菜单
        $menu_list=$CommonFunction->biduiRule();
        //如果不是管理员则验证权限
        if($uid!=70){
        	$menu_list=$CommonFunction->yanzhengRule($rules,$menu_list);
        }
        //根据职位id查询职位名称
        $zhiwei_name=$CommonFunction->getZhiweiname($_SESSION['zhiwei_id']);
        //根据部门id查询部门名称
        $department_name=$CommonFunction->getDepartmentname($_SESSION['department_id']);
        //将有权限的菜单分级排序
        $menu_list=$CommonFunction->getMenuXiaji($menu_list,0);
        //print_r($menu_list);exit;
        $gid      = $_SESSION['a_gid'];
        $nickname = $_SESSION['a_username'];
        $truename = $_SESSION['truename'];
        $shopname = $_SESSION['shopname'];
        $defalt_script=Request::getVar('defalt_script','get');
    	$phelper = new PrivilegeHelper();
		$privilege = $phelper->getPrivilege($gid);
		$object = new stdClass();
		//图片
		$object->image = $CommonFunction->getEmp_image();
		$object->zhiwei_name = $zhiwei_name;
		$object->department_name = $department_name;
		$object->menu_list = $menu_list;
		$object->uid      = $uid;
		$object->nickname = $nickname;
		$object->truename = $truename;
		$object->shopname = $shopname;
		$object->naviList = $phelper->getNaviList($privilege);
		//print_r($object->naviList);exit;
		$object->defalt_script=empty($defalt_script)? "" : str_replace("$$","&",$defalt_script);
		//var_dump($object->naviList);exit;
		$view  = $this->createView("index_a.html");
		$view->assign($object);
		$view->display();
	}

	function checksession(){
		$re=0;
		if (isset($_SESSION['a_uid']) && isset($_SESSION['code'])){
				$model = $this->createModel("user",dirname( __FILE__ ));
		        $sql="select code from admin_users_action where admin_user_id={$_SESSION['user_id']} order by time desc LIMIT 0,1";
		       
		        $code_a=$model->getInfo($sql);
		        $code_a=$code_a['code'];
		        if($code_a!=$_SESSION['code']){
		        	echo "<script>alert('您的账号在另外一个地方登录了！如果非本人操作，请及时修改登录密码');parent.location.href='/site/operator/navi/logout.php';</script>";
		        	$re=1;
		        }
		}else{
			$re=1;
		}
		/*
		if(!isset($_SESSION['index_a'])){
			$_SESSION['index_a']=0;
		}
		$_SESSION['index_a']=$_SESSION['index_a']+1;

		if($_SESSION['index_a']>15){
			$re=2;
		}*/
	    echo json_encode(array('status'=>$re));
		exit();
	}

	function verifycode()
	{
		require_once "verification/vcode.class.php";
		//构造方法
		$vcode = new Vcode(65, 25, 4);
		//将验证码放到服务器自己的空间保存一份
		$_SESSION['code'] = $vcode->getcode();
		//print_r($_SESSION['code']);exit;

		//将验证码图片输出
		$vcode->outimg();
	/*
		session_start();
		require_once("verification/VerificationCode.class.php");
	    $code=new VerificationCode();
	    $_SESSION['code']=$code->getCode();
	    $code->showCode();
	    
	   */ 
	}
}
