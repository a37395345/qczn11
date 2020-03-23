<?php
 /**
 * CacheMemcached
 *
 * @abstract
 * @package		IMAG.Framework
 * @subpackage	Cache
 * @create by gary wang (wangbaogang123@hotmail.com)
 * 
 */
 class CacheMemcache extends Cache{
    
   	private $memcache;
    private $_persistent = false;
    
 	/**
	 * Constructor
	 *
	 * @access	protected
	 * @param	array	$options	options
	 */
	public function __construct($options)
	{
		if($this->memcache==null){
			$this->connect($options);
		}
	}
	
	/**
	 * return memcache connection object
	 *
	 * @return	object	memcache connection object
	 */
	private function connect($options)
	{
		$this->memcache = new Memcache();
		array_shift($options);
		foreach ($options as $server) {
			$this->memcache->addServer($server["host"], $server["port"],$this->_persistent);
		}
		//$this->memcache->connect($server["host"], $server["port"]);
	}
	
	/**
	 * Get cached data by key
	 *
	 * @access	public
	 * @param	string	$id			The cache data id
	 * @return	mixed	Boolean false on failure or a cached data string
	 * 
	 */
	public function get($key)
	{
		return $this->memcache->get($key);
	}

	/**
	 * Store the data to cache by id and group
	 *
	 * @access	public
	 * @param	string	$key     The cache data id
	 * @param	string	$value	 The value to store in cache
	 * @param	int  	$expire	 The value of expire second
	 * @return	boolean	True on success, false otherwise
	 * 
	 */
	public function store($key, $value,$expire=0)
	{
		return $this->memcache->add ($key, $value,$expire);
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
		return $this->memcache->replace($key, $value,false,$expire);
	}	

	/**
	 * Remove a cached data entry by key
	 *
	 * @access	public
	 * @param	string	$key    The cache data id
	 * @return	boolean	True on success, false otherwise
	 * 
	 */
	public function remove($key)
	{
		return $this->memcache->delete($key);
	}
	
	/**
	 * Cache flush. 
	 */
	public function flush(){
		return $this->memcache->flush();
	}
	
	/**
	 * Cache close. 
	 */
	public function close(){
		return $this->memcache->close();
	}
	
	/**
	 * return memcache.
	 */
	public function getDb(){
		return $this->memcache;
	}
	
 }
?>
