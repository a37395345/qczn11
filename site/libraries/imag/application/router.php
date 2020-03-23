<?php
// Check to ensure this file is within the rest of the framework
defined('PATH_BASE') or die();

/**
 * Class to create and parse routes
 * @package		Imag.Framework
 * @subpackage	Application
 * @author gary wang (wangbaogang123@hotmail.com)
 *
 * 方法一：指定类包、脚本(task为可选参数，默认为空)
 * $router = new Router(array("package"=>"","script"=>"","task"=>""));
 * 方法二：指定规则
 * $router = new Router(array("rule"=>0));
 * 方法三：用默认规则
 * $router = new Router();
 * $router->run();
 * 
 */

class Router extends Object
{
	/**
	 * An array of rules
	 *
	 * @access protected
	 * @var array
	 */
	private $_rules = array(// package|script/task
		"package|script/task"
	);
	/**
	 * Rule index
	 */
	private $_rule  = 0;
	
	/**
	 * package
	 */
	private $_package  = '';
	
	/**
	 * script
	 */
	private $_script  = '';
	
	/**
	 * task
	 */
	private $_task    = '';

	/**
	 * Class constructor
	 * @access public
	 */
	public function __construct($options = array())
	{
		if ( array_key_exists( 'package', $options ) ) {
			$this->_package = $options['package'];
		}
		
		if ( array_key_exists( 'script', $options ) ) {
			$this->_script = $options['script'];
		}

		if ( array_key_exists( 'task', $options ) ) {
			$this->_task = $options['task'];
		}

		if ( array_key_exists( 'rule', $options ) ) {
			$this->_rule = $options['rule'];
		}

		$this->_init();
	}

	/**
	 * init
	 * @return	void
	 */
	private function _init(){

		$url = Request::getVar('PHP_SELF','server');
		$parts = parse_url($url);

		if ( array_key_exists( 'path', $parts ) ) {
			switch($this->_rules[$this->_rule]){
				case "package|script/task":
					$this->_folderFile($parts["path"]);
					break;
				default:
					$this->_folderFile($parts["path"]);
					break;
			}
		}
		
	}

	/**
	 * run
	 * @return	void
	 */
	public function run(){
		
		$class = ucfirst($this->_script).'Controller';
		
		if (!class_exists($class))
		{	
			$path = "";
			if(empty($this->_package)){
				$path = $this->_script;
			}else{
				$path = $this->_package.".".$class;
			}
			
			

			import(strtolower($path));
			//$controller	= new $class();

		}

		$task = Request::getCmd('task');
		if(empty($task)){
			$task = $this->_task;
		}
		$controller	= new $class();
		$controller->execute($task);
		unset($controller);


	}
	
	/**
	 * rule: package|script/task
	 * @return	void
	 */
	private function _folderFile($path){
		
		$paths = explode("/",$path);

		for($i=count($paths)-1;$i>=0;$i--){

			if(empty($paths[$i])){
				continue;
			}

			if(strpos($paths[$i],".")!=FALSE){
				$files = explode(".",$paths[$i]);
				if(empty($this->_task)){
					$this->_task = $files[0];
				}
			}else{
				if(empty($this->_package)){
					$this->_package = $paths[$i];
				}
				if(empty($this->_script)){
					$this->_script = $paths[$i];
				}
				break;
			}
		}

	}

	
}
