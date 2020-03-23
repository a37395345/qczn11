<?php
/**
 * Privilege Modle
 * Created on 2010-6-18
 * @package		classes
 * @subpackage	operator.navi.models
 * @author gary wang (wangbaogang123@hotmail.com)
 */

 
 
class ModelPrivilege extends Model
{
	/**
	 * Admin table for operator
	 */
	//var $table = array("name"=>"admin_users_menu","key"=>"admin_user_menu_id");
	
	/**
	 * 
	 */
	function __construct($config = array())
	{
		parent::__construct($config);
		
	}

	/**
	 * get privilage
	 */
	//根据权限组id，查询用户权限
	function getPrivilege($gid){
		$result = array();	
		$sql = "SELECT * FROM `admin_group` WHERE `admin_group_id` = {$gid}";			
		$row = $this->getRow($sql);
		if(!empty($row["privilege"])){
			$result = unserialize($row["privilege"]); 
		}
		//print_r($result);exit;
		
		return $result;
	}
	

	function getNaviList($privilege){
		if (empty($privilege)){
			$where="1=1";
		}else{
			$where="1=2";
			foreach ($privilege as $key=>$val){
				$where.=" OR `action`='{$val}'";
			}
		}
		$sql = "SELECT * FROM `admin_menu` WHERE `parent_menu_id`='0' AND ({$where}) ORDER BY menu_order";

		$list = array();
		$navilist = $this->getRowSet($sql);
		for($i=0;$i<count($navilist);$i++){
			$sql = "SELECT * FROM `admin_menu` WHERE `parent_menu_id`='{$navilist[$i]['admin_menu_id']}' AND ({$where}) ORDER BY menu_order";
			$navilist[$i]["list"] = $this->getRowSet($sql);
		}		
		return $navilist;
	}

}

?>