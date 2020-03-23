<?php
// Check to ensure this file is within the rest of the framework
defined('PATH_BASE') or die();

/**
 * @version		$Id: cache.php 2010-08-11 gary wang(msn:wangbaogang123@hotmail.com)$
 * @abstract
 * @package		IMAG.Framework
 * @subpackage	Cache
 * 
 */
class Cache extends Object
{

	/**
	 * Constructor
	 *
	 * @access	protected
	 * @param	array	$options	options
	 */
	public function __construct($options)
	{
		
	}

	/**
	 * Returns a reference to a cache adapter object, always creating it
	 *
	 * @static
	 * @param	string	$type	The cache object type to instantiate
	 * @return	object	A Cache object
	 */
	public static function &getInstance($options = array())
	{
		
		static $instances;

		if (!isset( $instances )) {
			$instances = array();
		}

		$signature = serialize( $options );

		if (empty($instances[$signature]))
		{
			if(empty($options)){
				$config = Config::getConfig("cache");
				$options = $config->getArray();
			}
			$type   = array_key_exists('type', $options) ? $options['type']	: 'memcached';
			$type = preg_replace('/[^A-Z0-9_\.-]/i', '', $type);
			$path	= dirname(__FILE__).DS.'storage'.DS.$type.'.php';
						
			if (file_exists($path)) {
				require_once($path);
			} else {
				$error = new stdClass();
				$error->code = 500;
				$error->msg = 'Unable to load Cache Class:'.$type;
				return $error;
			}

			$adapter	= "Cache".ucfirst($type);
			$instance	= new $adapter($options);

			if (!$instance)
			{
				return new Exception('Unable to new Cache Class'.$adapter);
			}

			$instances[$signature] = & $instance;
		}

		return $instances[$signature];
		
	}
	
	/**
	 * Get cached data by key
	 *
	 * @abstract
	 * @access	public
	 * @param	string	$id			The cache data id
	 * @return	mixed	Boolean false on failure or a cached data string
	 * 
	 */
	public function get($key)
	{
		return;
	}

	/**
	 * Store the data to cache by id and group
	 *
	 * @abstract
	 * @access	public
	 * @param	string	$key     The cache data id
	 * @param	string	$value	 The value to store in cache
	 * @param	int  	$expire	 The value of expire second
	 * @return	boolean	True on success, false otherwise
	 * 
	 */
	public function store($key, $value,$expire=0)
	{
		return true;
	}

	/**
	 * Remove a cached data entry by key
	 *
	 * @abstract
	 * @access	public
	 * @param	string	$key    The cache data id
	 * @return	boolean	True on success, false otherwise
	 * 
	 */
	public function remove($key)
	{
		return true;
	}

	/**
	 * Garbage collect expired cache data
	 *
	 * @abstract
	 * @access public
	 * @return boolean  True on success, false otherwise.
	 */
	public function gc()
	{
		return true;
	}

	/**
	 * Test to see if the storage handler is available.
	 *
	 * @abstract
	 * @static
	 * @access public
	 * @return boolean  True on success, false otherwise.
	 */
	public function test()
	{
		return true;
	}
	
	/**
	 * Replace the data to cache by id and group
	 *
	 * @access	public
	 * @param	string	$key     The cache data id
	 * @param	string	$value	 The value to store in cache
	 * @param	int  	$expire	 The value of expire second
	 * @return	boolean	True on success, false otherwise
	 * 
	 */
	public function replace($key, $value,$expire=0)
	{
		return true;
	}	
	
	/**
	 * Cache flush. 
	 */
	public function flush(){
		return true;
	}
	
	/**
	 * Cache close. 
	 */
	public function close(){
		return true;
	}

}
