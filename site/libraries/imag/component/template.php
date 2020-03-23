<?php
// no direct access
defined( 'PATH_BASE' ) or die( 'Restricted access' );

include_once(""."smarty/Smarty.class.php");
import("config.globalconfig");

 /**
 * Template entry for Smarty.
 *
 * @package		Imag.Framework
 * @subpackage	Component
 * @author      gary wang (wangbaogang123@hotmail.com)
 *
 */
class Template extends Smarty{
	/**
	 *  
	 */
	//var $smarty = null;
	public function __construct(){
		parent::__construct();
		$config = Config::getConfig("global");
		$this->template_dir	= Config::basedir().DS."templates".DS.$config->view.DS;
		$this->compile_dir  = Config::basedir().DS."templates".DS."compile".DS;
		$this->cache_dir    = Config::basedir().DS."templates".DS."cache".DS;
		$this->assign("homeurl",Config::homeurl());
		$this->assign("homedir",Config::basedir());
		//$this->assign("langdir",Config::lang_path().DS.$config->lang.DS);
		//$this->assign("lang",$config->lang);
		$this->use_sub_dirs = false;
	}
}
?>