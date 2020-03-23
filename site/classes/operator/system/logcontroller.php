<?php
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('operator.navi.admincontroller');
import('operator.navi.privilegehelper');
import('imag.fusecookie');

class LogController extends AdminController
{
	/**
	 * Constructor
	 *
	 * @params	array	Controller configuration array
	 */
	
	function __construct($config = array())
	{
		parent::__construct($config);
		
		//if(!($this->checkPrivilege("system"))){
			//$this->redirect("/admincp/empty.php","您没有权限访问该页面！");
		//}
		
		$this->registerTask( 'list','logList');
		$this->registerTask( 'delete','delete');
		$this->registerTask( 'search','searchList');
       
	}
	function display(){
		echo "display";
	}
	

	function searchList()
	{
		$p = Request::getVar('p','get');
        
		$model = $this->createModel("log",dirname( __FILE__ ));
		
		$admin_user_id = Request::getVar('uid','post');
	
		if(empty($p)){$p=1;}
		$base_url = "list.php";
		$per_page = 20;
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		
		$where = 1;
		if(!empty($admin_user_id)){
			$where .=" AND `admin_user_id` = '".$admin_user_id."'";
		}
			
		$logList = $model->getLogList($start,$per_page,$where);
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
		$view  = $this->createView("operator/system/log/list.html");
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();
		$object->logList = $logList;
		$object->total = $total_item;		
		$view->assign($object);
		$view->display();
	}


	function logList()
	{		
		$p = Request::getVar('p','get');
        
		$model = $this->createModel("log",dirname( __FILE__ ));
		
		if(empty($p)){$p=1;}
		$base_url = "list.php";
		$per_page = 20;
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		$logList = $model->getLogList($start,$per_page);
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
		$view  = $this->createView("operator/system/log/list.html");
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();
		$object->logList = $logList;
		$object->total = $total_item;		
		$view->assign($object);
		$view->display();
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
				$this->redirect($forward,"此日志不能被删除！");
			}
		}	
		
		if(empty($uid)){
			$uid = Request::getVar('uid','post');
		}		

		$uidlist = explode(",",$uid);

		$model = $this->createModel("log",dirname( __FILE__ ));
		foreach($uidlist as $uid){
			if($uid!=1&&!empty($uid)){
				$model->delete($uid);
				$nickname = $_SESSION['a_username'];
				$admin_user_id = $_SESSION['a_uid'];		
				$title = $nickname."删除了ID为".$uid."的日志";			   
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

