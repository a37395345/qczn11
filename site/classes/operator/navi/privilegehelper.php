<?php
import('operator.navi.models.modelprivilege');

/**
 * 
 * Privilege helper
 *
 * @package		classes
 * @subpackage	operator.navi
 * @author gary wang (wangbaogang123@hotmail.com)
 * 
 */


class PrivilegeHelper
{
	/**
	
	 * Check catalog privilege
	 */
	function checkPrivilege($f){
		$model = new ModelPrivilege();
		$gid = $_SESSION['a_gid'];
		$privilege = $model->getPrivilege($gid);
		
		return in_array($f,$privilege);
	}
	
	/**
	 * Get user privileges
	 * return string
	 */
	function getPrivilege($gid=0){
		if(empty($gid)){
			$gid = $_SESSION['a_gid'];
		}
		$model = new ModelPrivilege();
		return $model->getPrivilege($gid);	
	}
	
	function getNaviList($privilege=''){
		$model = new ModelPrivilege();	
		return $model->getNaviList($privilege);
	}

}

?>