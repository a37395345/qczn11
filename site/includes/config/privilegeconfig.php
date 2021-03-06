<?php
 /**
 * Privilege Config for operator
 * Created on 2010-6-24
 * @package		imag
 * @author gary wang (wangbaogang123@hotmail.com)
*/
 
 class PrivilegeConfig {
 	
 	var $title = "网站管理系统";
 	
	var $ADMIN_PRIVILEGE = "0";
 	var $LOGOUT          = "1";
 
 	function privilege(){
 	
		return array(
			
			$this->ADMIN_PRIVILEGE => array(
					"title"=>"权限管理",
					"p" => '0',
					"link"=>array(
						array(
							"title"=>"管理员列表",
							"link"=>"privilege/list.php",
							"target"=>"mainFrame"
						),
						array(
							"title"=>"添加管理员",
							"link"=>"privilege/create.php",
							"target"=>"mainFrame"
						)
					)
				),
			
			$this->LOGOUT => array(
					"title"=>"退出",
					"p" => '0',
					"link"=>array(
						array(
							"title"=>"退出",
							"link"=>"/site/operator/navi/logout.php?forward=/site/operator",
							"target"=>"_top"
						)
					)
				)
			
		);
 	}
}
?>
