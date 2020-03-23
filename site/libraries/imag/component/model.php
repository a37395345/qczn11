<?php
// no direct access
defined( 'PATH_BASE' ) or die( 'Restricted access' );

/**
 * Base class for a Model
 *
 * @package		Imag.Framework
 * @subpackage	Component
 * @modify by gary wang (wangbaogang123@hotmail.com)
 *
 */
import("imag.database.table");

class Model extends Object
{
	/**
	 * Database Connector
	 *
	 * @var object
	 * @access	protected
	 */
	protected $_db;

	/**
	 * The model (base) name
	 *
	 * @var string
	 * @access	protected
	 */
	protected $_name;

	/**
	 * Constructor
	 *
	 *	 
	 */
	public function __construct($config = array())
	{
		//set the view name
		if (empty( $this->_name ))
		{
			if (array_key_exists('name', $config))  {
				$this->_name = $config['name'];
			} else {
				$this->_name = $this->getName();
			}
		}
		//var_dump($config);
		//set the model dbo
		if (array_key_exists('dbo', $config))  {
			$this->_db = $config['dbo'];
		} else {
			$this->_db = $this->getDB();
		}
	}

	/**
	 * Method to get Database
	 *
	 *
	 * @access	public
	 * @return	string The name of the model
	 */
	public function getDB()
	{
		$config = Config::getConfig("db");
		$options = array("host"=>$config->host,"user"=>$config->user,"password"=>$config->password,"database"=>$config->db,"driver"=>$config->dbtype);
		$databse = Database::getInstance($options);
		unset($config);
		return $databse;
	}

	/**
	 * Method to get Database is connected
	 *
	 *
	 * @access	public
	 * @return	boolean
	 */

	public function isConnected()
	{
		if($this->_db==null){
			return false;
		}
		if(!$this->_db->db_connect_id){
			return false;
		}else{
			return true;
		}

	}

	/**
	 * Method to get the model name
	 *
	 * The model name by default parsed using the classname, or it can be set
	 * by passing a $config['name] in the class constructor
	 *
	 * @access	public
	 * @return	string The name of the model
	 */
	public function getName()
	{
		$name = $this->_name;

		if (empty( $name ))
		{
			$r = null;

			if (!preg_match('/Model(.*)/i', get_class($this), $r)) {
				throw(new Exception("500,Model::getName() : Can't get or parse class name."));
				exit();
			}
			$name = strtolower( $r[1] );
		}

		return $name;
	}

	/**
	 * Create the filename for a resource
	 *
	 * @access	private
	 * @param	string 	$type  The resource type to create the filename for
	 * @param	array 	$parts An associative array of filename information
	 * @return	string The filename
	 */
	private static function _createFileName($type, $parts = array())
	{
		$filename = '';

		switch($type)
		{
			case 'model':
				$filename = strtolower($parts['name']).'.php';
				break;

		}
		return $filename;
	}

	/**
	 * Add a directory where JModel should search for models. You may
	 * either pass a string or an array of directories.
	 *
	 * @access	public
	 * @param	string	A path to search.
	 * @return	array	An array with directory elements
	 */
	public static function addIncludePath( $path='' )
	{
		static $paths;

		if (!isset($paths)) {
			$paths = array();
		}
		
		if (!empty( $path ) && !in_array( $path, $paths )) {
			import('imag.filesystem.path');
			array_unshift($paths, Path::clean( $path ));
		}
		return $paths;
	}

	/**
	 * Returns a reference to the a Model object, always creating it
	 *
	 * @param	string	The model type to instantiate
	 * @param	string	Prefix for the model class name. Optional.
	 * @param	array	Configuration array for model. Optional.
	 * @return	mixed	A model object, or false on failure
	*/
	public static function getInstance( $type, $prefix = '',$base = '',$config = array() )
	{
		$type		= preg_replace('/[^A-Z0-9_\.-]/i', '', $type);
		$modelClass	= $prefix.ucfirst($type);
		$result		= false;

		if (!class_exists( $modelClass ))
		{
			import('imag.filesystem.path');
			$path = Path::find(
				Model::addIncludePath($base.'/models'),
				Model::_createFileName( 'model', array( 'name' => $type))
			);
			//var_dump($path);
			if ($path)
			{

				require_once($path);

				if (!class_exists( $modelClass ))
				{
					throw(new Exception('Model class ' . $modelClass . ' not found in file.'));
					return $result;
				}
			}
			else return $result;
		}

		$result = new $modelClass($config);
		return $result;
	}
	
	/**
	 * Get db error
	 * @access	public
	 * @return	array	db error
	 */
	public function getError(){
		return $this->_db->getErrorMsg();
	}
	
	/**
	 * Get dbo
	 * @access	public
	 * @return	array	dbo
	 */
	public function getDbo(){
		return $this->_db;
	}
	
	/**
	 * store
	 * @param	object	object instance
	 * @param	string	table name.
	 * @return	mixed	insertid, or false on failure
	 */
	public function store($data,$table=""){
		if(!$this->_db->insertObject($table,$data)){
			return false;
		}else{
			return $this->_db->insertid();
		}
	}
	
	 /**
	 * update
	 * @param	object	object instance
	 * @param	string	update key name.
	 * @param	string	table name.
	 * @return	boolean	
	 */
	public function update($data,$id,$table=""){
		return $this->_db->updateObject($table,$data,$id);
	}
	
	 /**
	 * getRowset
	 * @param	string	sql.
	 * @return	array	row set
	 */
	public function getRowset($sql){
		
		$list = array();		
		if(($result = $this->_db->query($sql)))
		{
			while(($row = $this->_db->fetchrow($result)))
			{
				$list[] = $row;
			}
		}
		
		$this->_db->freeresult($result);
		return $list;
	}
	
	/**
	 * getRow
	 * @param	string	sql.
	 * @return	array	row
	 */
	public function getRow($sql){
		$list = array();		
		if(($result = $this->_db->query($sql)))
		{
			if(($row = $this->_db->fetchrow($result)))
			{
				$list = $row;
			}
		}
		
		$this->_db->freeresult($result);
		return $list;
	}

}