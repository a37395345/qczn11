<?php
import('imag.component.controller');
import('imag.component.model');
import('imag.component.view');
import('imag.component.template');
import('imag.database.database');
import('operator.navi.privilegehelper');
import('publicFunction.CommonFunction');
/**
 * Provide usually function for operator
 * Created on 2010-8-5
 * 
 * @package		classes
 * @subpackage	operator.navi
 * @author gary wang (wangbaogang123@hotmail.com)
 */
 
class AdminController extends Controller
{	
	//print_r("expression");exit;
	var $arr_type_action=array("1"=>"zijia_list","2"=>"guangbao","3"=>"changqi_zijia","4"=>"changqi_daijia","5"=>"changqi_dake");
	function __construct($config = array())
	{
		
		session_start();
        //added by kimi 20130522 所有的模块都需要要登录授权
        include_once(Config::homedir()."/site/includes/components.php");
        $nowsite=$_SERVER['PHP_SELF'];
        if (strpos($nowsite,"wap.php")){
        }else{
        	if (isset($_SESSION['a_uid']) && isset($_SESSION['code'])){
	    		$a_uid = $_SESSION['a_uid'];
		    	if (empty($a_uid))
		        {
		            echo "<script>alert('登录超时，请重新登录');parent.location.href='/';</script>";
	            	exit;
		        }
		        
		        $model = $this->createModel("user",dirname( __FILE__ ));
		        $sql="select code from admin_users_action where admin_user_id={$_SESSION['user_id']} order by time desc LIMIT 0,1";
		       
		        $code_a=$model->getInfo($sql);
		        $code_a=$code_a['code'];
		        if($code_a!=$_SESSION['code']){
		        	echo "<script>alert('您的账号在另外一个地方登录了！如果非本人操作，请及时修改登录密码');parent.location.href='/site/operator/navi/logout.php';</script>";
		        }
        		/*if ($_SESSION['code'] !=$objmem->get($_SESSION['a_uid'])){
		        	echo "<script>alert('您的账号在另外一个地方登录了！如果非本人操作，请及时修改登录密码');parent.location.href='/site/operator/navi/logout.php';</script>";
	            	exit;
		        }*/
	    	}else{
	    		echo "<script>alert('登录超时，请重新登录');parent.location.href='/';</script>";
	            exit;
	    	}
        	Components::login_check();
        }
        
        //added end	
        
        //print_r(expression);exit;
        parent::__construct($config);
	}
	
	/**
	 * get db under no Model model
	 */
	function getDb(){
		import("config.dbconfig");
		$db = & Database::getInstance(DbConfig::getOption());
		return $db;
	}
	
	/**
	 * privilege check privilege for catalog
	 */
	function checkPrivilege($id){
		$CommonFunction=new CommonFunction();
		if($CommonFunction->panduan_rule($id)==1){
			return true;
		}else{
			return false;
		}
		//$config = Config::getConfig("privilege");
		
		//$this->privilegeList = $config->privilege();
		//array_pop($this->privilegeList);
		//$phelper = new PrivilegeHelper();
		//return $phelper->checkPrivilege($id);
	}
	
	/**
	 * get privilege used common privilege
	 */
	function getPrivilege(){
		
		$phelper = new PrivilegeHelper();
		return $phelper->getPrivilege();
	}
	


	function getBusiTypePrivilege(){
		$CommonFunction=new CommonFunction();
		//$phelper = new PrivilegeHelper();
		//$arrPrivilege=$phelper->getPrivilege();
		$aa='0';
		foreach ($this->arr_type_action as $k=>$v){
			//if (in_array($v,$arrPrivilege)){
				//$aa.=",".$k;
			//}
			if($CommonFunction->panduan_rule($v)==1){
				$aa.=",".$k;
			}
		}
		return $aa;
	}

}
?>
