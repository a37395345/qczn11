<?php
/***************************************************************************
 *loader.php
 *功能：Loader类
 *作者：王保刚 gary wang MSN:wangbaogang123@hotmail.com
 *简介：本类修改自joomla JLoader 
 *文件导入
 */

/**
 * @author		Gary wang (wangbaogang123@hotmail.com)
 * @package		Imag.Framework
 */

 // no direct access
defined( 'PATH_BASE' ) or die( 'Restricted access' );

class Loader
{
	 /**
	 * Loads a class from specified directories.
	 *
	 * @param string $filePath	The class name to look for ( dot notation ).
	 * @return void
	 */

	public static function import( $_filePath)
	{

		static $paths;

		if (!isset($paths)) {
			$paths = array();
		}

		$classpath = explode(PATH_SEPARATOR, get_include_path());

		for($i=0;$i<count($classpath);$i++){ //如类名相同，优先使用靠前的classpath
			if($classpath[$i]=="."){
				continue;
			}
			$_filePath	  = str_replace( '.', DS, $_filePath );
			$filePath = $classpath[$i].DS.$_filePath;

			$classFile  = $filePath.".php";
			
			if(file_exists($classFile)){
				break;
			}

			$classFile  = "";

		}


		
		if(empty($classFile)){
			throw(new Exception("Class load error,class path: {$classFile}")); 
			exit();
		}

		if (!isset($paths[$filePath])){

			if (strpos($filePath, 'imag') !== false || strpos($filePath, 'classes') !== false){

				$parts = explode( DS, $_filePath );
				$classname = array_pop( $parts );
				$classname = ucfirst($classname);

				$class	= Loader::register($classname, $classFile);
				$rs		= isset($classes[strtolower($classname)]);

			}else{
				$rs   = include_once($classFile);
			}
			$paths[$filePath] = $rs;
		}

		return $paths[$filePath];

	}

	/**
	 * Add a class to autoload
	 *
	 * @param	string $classname	The class name
	 * @param	string $file		Full path to the file that holds the class
	 * @return	array|boolean  		Array of classes
	 * 
	 */
	public static function register ($class = null, $file = null)
	{
		static $classes;

		if(!isset($classes)) {
			$classes    = array();
		}

		if($class && is_file($file)){
			$class = strtolower($class); //force to lower case
			$classes[$class] = $file;
		}
		return $classes;
	}


	/**
	 * Load the file for a class
	 *
	 * @access  public
	 * @param   string  $class  The class that will be loaded
	 * @return  boolean True on success
	 */
	public static function load( $class )
	{

		$class = strtolower($class); //force to lower case

		if (class_exists($class)) {
			  return;
		}

		$classes = Loader::register();
		if(array_key_exists( $class, $classes)) {
			include_once($classes[$class]);
			return true;
		}
		return false;
	}
}


/**
 * 当实例化类 但此类文件没有include时调用
 * When calling a class that hasn't been defined, __autoload will attempt to
 * include the correct file for that class.
 *
 * This function get's called by PHP. Never call this function yourself.
 *
 * @param 	string 	$class
 * @access 	public
 * @return  boolean
 */
function __autoload($class)
{
	if(defined('SMARTY_SYSPLUGINS_DIR')){
		$_class = strtolower($class);
		if (substr($_class, 0, 16) === 'smarty_internal_' || $_class == 'smarty_security') {
			include SMARTY_SYSPLUGINS_DIR . $_class . '.php';
		}
	}

	if(Loader::load($class)) {
		return true;
	}
	return false;
}

/**
 * Global application exit.
 *
 * This function provides a single exit point for the framework.
 *
 * @param mixed Exit code or string. Defaults to zero.
 */
function jexit($message = 0) {
    exit($message);
}

/**
 * Intelligent file importer
 *
 * @access public
 * @param string $path A dot syntax path
 */
function import( $path ) {
	
	return Loader::import($path);
}
