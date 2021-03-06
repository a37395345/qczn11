<?php
// no direct access
defined( 'PATH_BASE' ) or die( 'Restricted access' );

include_once(""."smarty/Smarty.class.php");
//import("config.globalconfig");

 /**
 * Template use text resource entry for Smarty.
 *
 * @package		Imag.Framework
 * @subpackage	Component
 * @author      gary wang (wangbaogang123@hotmail.com)
 * 
 * $template = new TextTemplate();
 * $template->assign('foo', 'world');
 * echo $template->fetch('text:Hello {$foo}!');
 *
 */
class TextTemplate extends Smarty{
	/*
	function text_get_template($tpl_name, &$tpl_source, &$smarty_obj) {
		$tpl_source = $tpl_name;
		return true;
	}

	function text_get_timestamp($tpl_name, &$tpl_timestamp, &$smarty_obj) {
		$tpl_timestamp = time();
		return true;
	}

	function text_get_secure($tpl_name, &$smarty_obj) {
		return true;
	}

	function text_get_trusted($tpl_name, &$smarty_obj) {}
	
	*/
 	public function __construct(){

			$this->compile_dir  = Config::basedir()."/templates/compile/";
			$this->cache_dir    = Config::basedir()."/templates/cache/";
			$this->assign("homeurl",Config::homeurl());
			$this->assign("homedir",Config::basedir());
			$this->assign("langdir",Config::lang_path().DS.$config->lang.DS);
			$this->assign("lang",$config->lang);
			$this->use_sub_dirs = false;
			
	}
}
?>
