<?php
/**
 * Base Factory
 * @package		includes
 * @author gary wang (wangbaogang123@hotmail.com) 
*/
class Factory{
	/**
	 * Get database instance by config
	 * @access	static
	 * @param array
	 * @return database instance
	 */
	public static function getDb($option = array()){
		import("imag.database.database");
		if(empty($option)){
			$config = Config::getConfig("db");
			$option = $config->getOption();
			unset($config);
		}
		$databse = & Database::getInstance($option);
		return $databse;
	}
	
	/**
	 * Get template instance by resource
	 * @access	static
	 * @param string
	 * @return template instance
	 */
	public static function getTemplate($resource=""){
		
		$class = ucfirst($resource).'Template';
		
		if (!class_exists($class)){
			import('imag.component.'.strtolower($class));
		}
		return new $class();
		
	}
	
	/**
	 * @param string $name  : form element name
	 * @param string $value : form element value
	 * @return FCKeditor object
	 */
	public static function getFckEditor($name, $value,$width="100%",$height="500px"){
		
		include_once(Config::homedir().'/site/editor/fckeditor/fckeditor.php');
		$basePath = "/site/editor/fckeditor/"; 
		$FCKeditor = new FCKeditor($name) ;
		$FCKeditor->BasePath   = $basePath;
		$FCKeditor->Value	   = $value;
		$FCKeditor->Width      = $width;
		$FCKeditor->Height     = $height;
		//$result = $FCKeditor->Create() ;		
		return $FCKeditor;
		
	}
	
	/**
	 * @return date object
	 */
	public static function getDate(){
		import('imag.utilities.dateobject');
		return new DateObject();
	}
	
	/**
	 * @return URI object
	 */
	public static function getURI($uri='SERVER'){
		import('imag.environment.uri');
		return URI::getInstance($uri);
	}
	
	

}