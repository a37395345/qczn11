<?php
/**
 * Base Config
 * @package		includes
 * @author gary wang (wangbaogang123@hotmail.com)
*/

class Config{

	/**
	 * cookie path
	 */
	public static $cookiepath = '/';
	
	public static $cookiekey = "apllpsdsmmwqewqewqwennhyr!!@@#";
	
	public static $cookiesecure = false;
	
	/**
	 * is open php debug mode
	 */
	public static $debug = false; 
	
	/**
	 * is open sql debug mode
	 */
	public static $sqldebug = TRUE; 
	
	/**
	 * is use utf-8 charset connect database
	 */
	public static $dbutf8 = true;
	
	/**
	 * current domain
	 */
	public static function domain(){
		return $_SERVER['HTTP_HOST'];
	}

	/**
	 * cookie domain if open sub domain cookie mode please modify
	 */
	public static function cookieDomain(){
		return self::domain();
	}

	/**
	 * Current script scope directory root
	 */
	public static function basedir(){
		if(defined('BASEDIR')){
			return BASEDIR;
		}
		return dirname(dirname(__FILE__));
		
	}
	
	/**
	 * Current script scope web root
	 */
	public static function baseurl(){
		return "http://".self::domain()."/site/";
	}

	/**
	 * Root directory of this site
	 */
	public static function homedir(){
		if(defined('HOMEDIR')){
			return HOMEDIR;
		}
		return dirname(dirname(dirname(dirname(__FILE__))));
	}

	/**
	 * Root web root of this site
	 */
	public static function homeurl(){
		return "http://".self::domain();
	}

	/**
	 * tmp directory
	 */
	public static function tmp_path(){
		return dirname(self::basedir()).DS."site".DS."tmp";
	}
	
	/**
	 * log directory
	 */
	public static function log_path(){
		return dirname(self::basedir()).DS."site".DS."log";
	}
	
	/**
	 * log directory
	 */
	public static function lang_path(){
		return dirname(self::basedir()).DS."site".DS."language";
	}
	
	/**
	 * Load config from system include path
	 */
	public static function getConfig($adpter){
		
		$class = ucfirst($adpter).'Config';
		
		if (!class_exists($class)){
			import('config.'.strtolower($class));
		}
		return new $class();
		
	}
	
	/**
	 * Load table from system include path
	 */
	public static function getTable($table){
		$table = ucfirst($table);
		if (!class_exists($table)){
			import('tables.'.strtolower($table));
		}
		$config = self::getConfig("db");
		return new $table(Database::getInstance($config->getOption()));
	}
	
	/**
	 * Check table exists.
	 */
	public static function checkTable($table){
		return file_exists(self::basedir().DS."includes".DS."tables".DS.$table.".php");
	}
}

?>
