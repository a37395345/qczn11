<?php
import('imag.database.database');
import('imag.component.model');
import('operator.navi.privilegehelper');

/**
 * 
 * Show privileges by a_uid in cookie. 
 * 
 * @package		classes
 * @subpackage	operator
 * @author gary wang (wangbaogang123@hotmail.com)
 * 
 */
class LeftScript
{
	/**
	 * Get privileges from database and translate js, then show.
	 */
	static function script(){

		$phelper = new PrivilegeHelper();
		
		$uid = Request::getVar("a_uid","cookie");
		$privilege = explode(",",$phelper->getPrivilege($uid));
		
		$config = new Config();
		$privilegeConfig = $config->getConfig("privilege");
		$globalConfig = $config->getConfig("global");
		
		$privilegeList = $privilegeConfig->privilege();
		$script = <<<END
			<script>
			var title = "{$globalConfig->title}";
			var folders = new Array();
END;
		foreach($privilegeList as $i=>$item){
			if(in_array($i,$privilege)||$i==(count($privilegeList)-1)){
				$script .= self::_getScriptItem($privilegeList[$i]);
			}
		}
		$script .= "</script>";
		
		return $script;
	}
	
	/**
	 * private method
	 */
	static function _getScriptItem($item){
	
		$script = "\nfolders.push(new Array(\n";
		$links = array();
		array_push($links,"\"".$item['title']."\"");
		for($a = 0;$a<count($item['link']);$a++){
			array_push($links, "[\"".$item['link'][$a]['title']."\",\"".$item['link'][$a]['link']."\",\"".$item['link'][$a]['target']."\"]");
		}
		$script .= implode(",\n", $links);
		$script .= "\n));\n";
		return $script;
		
	}
}
?>