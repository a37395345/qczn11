<?php
// no direct access
defined( 'PATH_BASE' ) or die( 'Restricted access' );

 /**
 * Abstract Table class
 * Parent classes to all tables.
 *
 * @package		Imag.Framework
 * @subpackage	Database
 * @modify by   gary wang (wangbaogang123@hotmail.com)
 *
 */
class Table extends Object
{

	/**
	 * Database connector
	 *
	 * @var		Database
	 * @access	protected
	 */
	protected $_db		= null;
	
	protected $_key       = null;
	
	protected $_name      = null;
		
	protected $_columns    = null;
	
	protected $_error;

	/**
	 * Object constructor to set table and key field
	 *
	 * Can be overloaded/supplemented by the child class
	 *
	 * @access protected
	 * @param string $table name of the table in the db schema relating to child class
	 * @param string $key name of the primary key field in the table
	 * @param object $db JDatabase object
	 */
	public function __construct( $db )
	{
		$this->_db		= $db;
	}

	/**
	 * Get the internal database object
	 *
	 * @return object A Database based object
	 */
	public function getDB()
	{
		return $this->_db;
	}

	/**
	 * Set the internal database object
	 *
	 * @param	object	$db	A JDatabase based object
	 * @return	void
	 */
	public function setDB($db)
	{
		$this->_db = $db;
	}

	/**
	 * Gets the internal table name for the object
	 *
	 * @return string
	 * 
	 */
	public function getTableName()
	{
		return $this->_name;
	}

	/**
	 * Gets the internal primary key name
	 *
	 * @return string
	 * 
	 */
	public function getKeyName()
	{
		return $this->_key;
	}
	
	/**
	 * Gets table columns
	 *
	 * @return string
	 * 
	 */
	public function getColumns()
	{
		return $this->_columns;
	}

	/**
	 * Binds a named array/hash to this object
	 *
	 * Can be overloaded/supplemented by the child class
	 *
	 * @access	public
	 * @param	$from	mixed	An associative array or object
	 * @param	$ignore	mixed	An array or space separated list of fields not to bind
	 * @return	boolean
	 */
	public function bind( $from, $ignore=array() )
	{
		$fromArray	= is_array( $from );
		$fromObject	= is_object( $from );

		if (!$fromArray && !$fromObject)
		{
			$this->setError( get_class( $this ).'::bind failed. Invalid from argument' );
			return false;
		}
		if (!is_array( $ignore )) {
			$ignore = explode( ' ', $ignore );
		}
		foreach ($this->getProperties() as $k => $v)
		{
			// internal attributes of an object are ignored
			if (!in_array( $k, $ignore ))
			{
				if ($fromArray && isset( $from[$k] )) {
					$this->$k = $from[$k];
				} else if ($fromObject && isset( $from->$k )) {
					$this->$k = $from->$k;
				}
			}
		}
		return true;
	}

	/**
	 * Loads a row from the database and binds the fields to the object properties
	 *
	 * @access	public
	 * @param	mixed	Optional primary key.  If not specifed, the value of current key is used
	 * @return	boolean	True if successful
	 */
	public function load($oid = null)
	{
		$k = $this->_key;

		if ($oid !== null) {
			$this->$k = $oid;
		}

		$oid = $this->$k;

		if ($oid === null) {
			return false;
		}
		$this->reset();

		$db = $this->getDB();

		$query = 'SELECT *'
		. ' FROM '.$this->_name
		. ' WHERE '.$this->_key.' = '.$db->Quote($oid);
		
		if(!$result = $db->query($query)){
			$this->setError( $db->getErrorMsg() );
			return false;
		}
		if ($row = $db->fetchrow($result)) {
			return $this->bind($result);
		}
		else
		{
			$this->setError( $db->getErrorMsg() );
			return false;
		}
	}

	/**
	 * Inserts a new row if id is zero or updates an existing row in the database table
	 *
	 * Can be overloaded/supplemented by the child class
	 *
	 * @access public
	 * @param boolean If false, null object variables are not updated
	 * @return null|string null if successful otherwise returns and error message
	 */
	public function store( $updateNulls=false )
	{
		$k = $this->_key;

		if( $this->$k)
		{
			$ret = $this->_db->updateObject( $this->_name, $this, $this->_key, $updateNulls );
		}
		else
		{
			$ret = $this->_db->insertObject( $this->_name, $this, $this->_key );
		}
		if( !$ret )
		{
			$this->setError(get_class( $this ).'::store failed - '.$this->_db->getErrorMsg());
			return false;
		}
		else
		{
			return true;
		}
	}


	/**
	 * Default delete method
	 *
	 * can be overloaded/supplemented by the child class
	 *
	 * @access public
	 * @return true if successful otherwise returns and error message
	 */
	public function delete( $oid=null )
	{
	
		$k = $this->_key;
		if ($oid) {
			$this->$k = intval( $oid );
		}

		$query = 'DELETE FROM '.$this->_db->nameQuote( $this->_name ).
				' WHERE '.$this->_key.' = '. $this->_db->Quote($this->$k);


		if ($this->_db->query($query))
		{
			return true;
		}
		else
		{
			$this->setError($this->_db->getErrorMsg());
			return false;
		}
	}
	
	public function checkValue($key,$value){
  		$list = 0;
		$sql = "SELECT COUNT(*) AS total FROM `{$this->_name}` WHERE `{$key}` = '{$value}'";

		if( ($result = $this->_db->query($sql)) ){
			if( ($row = $this->_db->fetchrow($result)) ){
				$list = $row['total'];
			}
		}
		
		$this->_db->freeresult($result);
		return $list;  
    }

	
	/**
	 * Export item list to xml
	 *
	 * @access public
	 * @param boolean Map foreign keys to text values
	 */
	public function toXML( $mapKeysToText=false )
	{
		$xml = '<record table="' . $this->_tbl . '"';

		if ($mapKeysToText)
		{
			$xml .= ' mapkeystotext="true"';
		}
		$xml .= '>';
		foreach (get_object_vars( $this ) as $k => $v)
		{
			if (is_array($v) or is_object($v) or $v === NULL)
			{
				continue;
			}
			if ($k[0] == '_')
			{ // internal field
				continue;
			}
			$xml .= '<' . $k . '><![CDATA[' . $v . ']]></' . $k . '>';
		}
		$xml .= '</record>';

		return $xml;
	}
	
	public function setError($error){
		$this->_error = $error;
	}
	
	public function getError($i=null){
		return $this->_error;
	}

}
