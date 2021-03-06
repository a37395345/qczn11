<?php
// no direct access
defined( 'PATH_BASE' ) or die( 'Restricted access' );

/**
 * sqlite 2 class.
 *
 * @package		Imag.Framework
 * @subpackage	Database
 * @author      gary wang (wangbaogang123@hotmail.com)
 *
 */
class Sqlite extends Database
{

	var $sqlite3;
	var $query_result;
	var $dbname ="";
	
	/**
	 * The database driver name
	 *
	 * @var string
	 */
	var $name			= 'sqlite';



	/**
	* Database object constructor
	*
	* @access	public
	* @param	$database		db name
	*/
	function __construct($options)
	{
		$this->dbname   = array_key_exists('database',$options) ? $options['database'] : '';
		$this->sqlite  = sqlite_open($this->dbname);
	}

	/**
	* close connect 
	*
	* @return	boolean
	*/
	function close()
	{
		if( $this->sqlite )
		{
			return $this->sqlite->close();
			
		}else
		{
			return false;
		}
	}


	/**
	 * Execute the query
	 *
	 * @access	public
	 * @return	boolean
	*/
	function query($query = "")
	{

		if(strtolower(substr($query, 0, 6))!="select"){
			return sqlite_exec($this->query_id,$query);
		}

		//
		// Remove any pre-existing queries
		//
		unset($this->query_result);

		if( $query != "" )
		{
			$this->query_result = sqlite_query($this->query_id,$query);
		}

		if( $this->query_result )
		{
			return $this->query_result;
		}else
		{
			if(defined("DEBUG")){
				if(DEBUG){
					var_dump($query);
				}
			}
			return false;
		}
	}

	/**
	 * get field type
	 *
	 * @access	public
	 * @return	array or boolean
	*/
	function fetchrow($query_id = 0)
	{
		if( !$query_id )
		{
			$query_id = $this->query_result;
		}

		if( $query_id )
		{
			$row = sqlite_fetch_array($query_id, SQLITE_ASSOC);
			return $row;
		}
		else
		{
			return false;
		}
	}

	/**
	 * Inserts a row into a table based on an objects properties
	 *
	 * @access	public
	 * @param	string	The name of the table
	 * @param	object	An object whose properties match table fields
	 * @param	string	The name of the primary key. If provided the object property is updated.
	 */
	function insertObject( $table, &$object, $keyName = NULL )
	{
		$fmtsql = 'INSERT INTO '.$this->nameQuote($table).' ( %s ) VALUES ( %s ) ';
		$fields = array();
		foreach (get_object_vars( $object ) as $k => $v) {
			if (is_array($v) or is_object($v) or $v === NULL) {
				continue;
			}
			if ($k[0] == '_') { // internal field
				continue;
			}
			$fields[] = $this->nameQuote( $k );
			$values[] = $this->isQuoted( $k ) ? $this->Quote( $v ) : (int) $v;
		}
		$sql = sprintf( $fmtsql, implode( ",", $fields ) ,  implode( ",", $values ) ) ;
		//echo $sql;
		if (!$this->query($sql)) {
			//echo "false";
			return false;
		}
		return true;
	}

	/**
	 * Description
	 *
	 * @access public
	 * @param [type] $updateNulls
	 */
	function updateObject( $table, &$object, $keyName, $updateNulls=true )
	{
		$fmtsql = 'UPDATE '.$this->nameQuote($table).' SET %s WHERE %s';
		$tmp = array();
		foreach (get_object_vars( $object ) as $k => $v)
		{
			if( is_array($v) or is_object($v) or $k[0] == '_' ) { // internal or NA field
				continue;
			}
			if( $k == $keyName ) { // PK not to be updated
				$where = $keyName . '=' . $this->Quote( $v );
				continue;
			}
			if ($v === null)
			{
				if ($updateNulls) {
					$val = 'NULL';
				} else {
					continue;
				}
			} else {
				$val = $this->isQuoted( $k ) ? $this->Quote( $v ) : (int) $v;
			}
			$tmp[] = $this->nameQuote( $k ) . '=' . $val;
		}

		$sql = sprintf( $fmtsql, implode( ",", $tmp ) , $where ) ;

		return $this->query($sql);
	}

	/**
	 * Description
	 *
	 * @access public
	 */
	function getVersion()
	{
		return $this->sqlite->version();
	}

	/**
	 * Determines UTF support
	 *
	 * @access	public
	 * @return boolean True - UTF is supported
	 */
	function hasUTF()
	{
		$verParts = explode( '.', $this->getVersion() );
		return ($verParts[0] == 5 || ($verParts[0] == 4 && $verParts[1] == 1 && (int)$verParts[2] >= 2));
	}

	/**
	 * Custom settings for UTF support
	 *
	 * @access	public
	 */
	function setUTF()
	{
		sqlite_query( "SET NAMES 'utf8'", $this->sqlite );
	}

	/**
	 * Get a database escaped string
	 *
	 * @param	string	The string to be escaped
	 * @param	boolean	Optional parameter to provide extra escaping
	 * @return	string
	 * @access	public
	 * @abstract
	 */
	function getEscaped( $text, $extra = false )
	{
		$result = sqlite_escape_string( $text, $this->sqlite );
		if ($extra) {
			$result = addcslashes( $result, '%_' );
		}
		return $result;
	}


	/**
	 * Description
	 *
	 * @access public
	 */
	function error()
	{
		echo "no error";
	}

}
?>
