<?php
// no direct access
defined( 'PATH_BASE' ) or die( 'Restricted access' );

 /**
 * Mysql class.
 *
 * @package		Imag.Framework
 * @subpackage	Database
 * @author      gary wang (wangbaogang123@hotmail.com)
 *
 */

class Mysql extends Database
{

	/**
	 * Mysql link id
	 */
	public $db_connect_id;
	
	/**
	 * Query result
	 */
	private $query_result;
	
	/**
	 * Row Array 
	 */
	private $row = array();
	
	/**
	 * Row Array set
	 */
	private $rowset = array();
	
	/**
	 * 查询了多少次
	 */
	private $num_queries = 0;
	
	/**
	 * 是否应用事物
	 */
	private $in_transaction = FALSE;
	
	/**
	 * Db Server host
	 */
	private $server      = null;
	
	/**
	 * Db user name
	 */
	private $user        = null;
	
	/**
	 * Db password
	 */
	private $password    = null;
	
	/**
	 * Db name
	 */
	protected $dbname      = null;
	
	/**
	 * 是否持久连接
	 */
	private $persistency = false;

	/**
	 * The database driver name
	 *
	 * @var string
	 */
	private $name			= 'mysql';

	/**
	 *  The null/zero date string
	 *
	 * @var string
	 */
	private $_nullDate		= '0000-00-00 00:00:00';
	
	protected $_nameQuote = '`';

	/**
	 * Quote for named objects
	 *
	 * @var string
	 */
	//private $_nameQuote		= '`';


	/**
	* Database object constructor
	*
	* @access	public
	* @param	$sqlserver		db server
	* @param	$sqluser		db user
	* @param	$sqlpassword	db passwd	
	* @param	$database		db name
	* @param	$persistency	是否持续
	* @return	boolean
	*/
	public function __construct($options)
	{
		//print_r($options);
		$this->server		= array_key_exists('host', $options)		? $options['host']			: 'localhost';
		$this->user		    = array_key_exists('user', $options)		? $options['user']			: '';
		$this->password	    = array_key_exists('password',$options)		? $options['password']		: '';
		$this->dbname	    = array_key_exists('database',$options)		? $options['database']		: '';
		$this->persistency	= array_key_exists('persistency', $options)	? $options['persistency']	: false;

		$this->db_connect_id = ($this->persistency) ? mysql_pconnect($this->server, $this->user, $this->password) : 
		mysql_connect($this->server, $this->user, $this->password,true);

		if( $this->db_connect_id )
		{
			if( $this->dbname != "" )
			{
				$dbselect = mysql_select_db($this->dbname);

				if( !$dbselect )
				{
					mysql_close($this->db_connect_id);
					$this->db_connect_id = $dbselect;
				}
			}
			// finalize initialization
			if( $this->db_connect_id ){
				parent::__construct($options);
			}
		}
	}

	/**
	* close connect
	*
	* @return	boolean
	*/
	public function close()
	{
		if( $this->db_connect_id )
		{
			//
			// Commit any remaining transactions
			//
			if( $this->in_transaction )
			{
				mysql_query("COMMIT", $this->db_connect_id);
			}

			return mysql_close($this->db_connect_id);
		}
		else
		{
			return false;
		}
	}


	/**
	 * transaction ִ 是否应用事务
	 *
	 * @access	public
	 * @return	boolean
	*/

	public function transaction(){
		if(!$this->in_transaction){
			$si = $this->getVersion();
			preg_match_all( "/(\d+)\.(\d+)\.(\d+)/i", $si, $m );
			if ($m[1] >= 4) {
				$sql = 'START TRANSACTION';
			} else if ($m[2] >= 23 && $m[3] >= 19) {
				$sql = 'BEGIN WORK';
			} else if ($m[2] >= 23 && $m[3] >= 17) {
				$sql = 'BEGIN';
			}
			$result = mysql_query($sql, $this->db_connect_id);
			
			if(!$result)
			{
				return false;
			}
			
			$this->in_transaction = true;
		}
	}

	/**
	 * Execute the query
	 *
	 * @access	public
	 * @return	boolean
	*/
	public function query($query = "")
	{
		//
		// Remove any pre-existing queries
		//
		unset($this->query_result);

		if( $query != "" )
		{
			$this->num_queries++;
			//print_r($query);exit;
			$this->query_result = mysql_query($query, $this->db_connect_id);
		}

		if( $this->query_result )
		{
			unset($this->row[$this->query_result]);
			unset($this->rowset[$this->query_result]);

			if($this->in_transaction ){

				$this->in_transaction = false;

				if (!mysql_query("COMMIT", $this->db_connect_id) )
				{
					mysql_query("ROLLBACK", $this->db_connect_id);
					return false;
				}
			}
			return $this->query_result;
		}else{
			if(defined("DEBUG")){
				if(DEBUG){
					var_dump($query);
					var_dump($this->getErrorMsg());
				}
			}
			if( $this->in_transaction ){
				mysql_query("ROLLBACK", $this->db_connect_id);
				$this->in_transaction = false;
			}
			return false;
		}
	}

	/**
	 * get numrows
	 *
	 * @access	public
	 * @return	number or boolean
	*/
	public function numrows($query_id = 0){
		if( !$query_id )
		{
			$query_id = $this->query_result;
		}

		return ( $query_id ) ? mysql_num_rows($query_id) : false;
	}

	/**
	 * get affected rows 取得前一次 MySQL 操作所影响的记录行数
	 *
	 * @access	public
	 * @return	number or boolean
	*/
	public function affectedrows()
	{
		return ( $this->db_connect_id ) ? mysql_affected_rows($this->db_connect_id) : false;
	}

	/**
	 * get num fields  取得结果集中字段的数目
	 *
	 * @access	public
	 * @return	number or boolean
	*/
	public function numfields($query_id = 0)
	{
		if( !$query_id )
		{
			$query_id = $this->query_result;
		}

		return ( $query_id ) ? mysql_num_fields($query_id) : false;
	}

	/**
	 * get num fields  取得结果集中字段的名称
	 *
	 * @access	public
	 * @return	number or boolean
	*/
	public function fieldname($offset, $query_id = 0)
	{
		if( !$query_id )
		{
			$query_id = $this->query_result;
		}

		return ( $query_id ) ? mysql_field_name($query_id, $offset) : false;
	}

	/**
	 * get field type  取得结果集中指定字段的类型
	 *
	 * @access	public
	 * @return	number or boolean
	*/
	public function fieldtype($offset, $query_id = 0)
	{
		if( !$query_id )
		{
			$query_id = $this->query_result;
		}

		return ( $query_id ) ? mysql_field_type($query_id, $offset) : false;
	}
	
	/**
	 * 取得结果数组
	 *
	 * @access	public
	 * @return	array or boolean
	*/
	public function fetchrow($query_id = 0)
	{
		//echo $query_id;
		if( !$query_id )
		{
			$query_id = $this->query_result;
		}

		if( $query_id )
		{
			//echo "000k!!!!";
			$this->row[(int)$query_id] = mysql_fetch_assoc($query_id);

			return $this->row[(int)$query_id];
		}
		else
		{
			return false;
		}
	}

	/**
	 * 取得结果集
	 *
	 * @access	public
	 * @return	array list or boolean
	*/
	public function fetchrowset($query_id = 0)
	{
		if( !$query_id )
		{
			$query_id = $this->query_result;
		}

		if( $query_id )
		{
			unset($this->rowset[(int)$query_id]);
			unset($this->row[(int)$query_id]);

			while($this->rowset[(int)$query_id] = mysql_fetch_assoc($query_id))
			{
				$result[] = $this->rowset[(int)$query_id];
			}

			return $result;
		}
		else
		{
			return false;
		}
	}

	/**
	* This global function loads the first row of a query into an object
	*
	* @access	public
	* @return 	object
	*/
	public function fetchobject($query_id)
	{

		if( !$query_id )
		{
			$query_id = $this->query_result;
		}

		if( $query_id )
		{
			$this->row[(int)$query_id] = mysql_fetch_object($query_id);

			return $this->row[(int)$query_id];
		}
		else
		{
			return false;
		}

	}
	/**
	* Load a list of database objects
	*
	* If <var>key</var> is not empty then the returned array is indexed by the value
	* the database key.  Returns <var>null</var> if the query fails.
	*
	* @access	public
	* @param string The field name of a primary key
	* @return array If <var>key</var> is empty as sequential list of returned records.
	*/
	public function fetchobjectset($query_id)
	{

		if( !$query_id )
		{
			$query_id = $this->query_result;
		}

		if( $query_id )
		{
			unset($this->rowset[(int)$query_id]);
			unset($this->row[(int)$query_id]);

			while($this->rowset[(int)$query_id] = mysql_fetch_object($query_id))
			{
				$result[] = $this->rowset[(int)$query_id];
			}

			return $result;
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
	public function insertObject( $table, $object, $keyName = NULL )
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
        //exit;
		if (!$this->query($sql)) {
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
	public function updateObject( $table, $object, $keyName, $updateNulls=true )
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
		//echo $sql;
		//exit();

		return $this->query($sql);
	}

	public function fetch_field($query_id = 0,$rownum = 0)
	{
		if( !$query_id )
		{
			$query_id = $this->query_result;
		}
		return mysql_fetch_field($query_id, $rownum);
	}
	
	/**
	 * 取得结果集单列
	 *
	 * @access	public
	 * @return	array list or boolean
	*/
	public function fetchfield($field, $rownum = -1, $query_id = 0)
	{
		if( !$query_id )
		{
			$query_id = $this->query_result;
		}

		if( $query_id )
		{
			if( $rownum > -1 )
			{
				$result = mysql_result($query_id, $rownum, $field);
			}
			else
			{
				if( empty($this->row[(int)$query_id]) && empty($this->rowset[(int)$query_id]) )
				{
					if( $this->fetchrow() )
					{
						$result = $this->row[(int)$query_id][$field];
					}
				}
				else
				{
					if( $this->rowset[(int)$query_id] )
					{
						$result = $this->rowset[(int)$query_id][0][$field];
					}
					else if( $this->row[(int)$query_id] )
					{
						$result = $this->row[(int)$query_id][$field];
					}
				}
			}

			return $result;
		}
		else
		{
			return false;
		}
	}

	/**
	 * 取得结果集单行
	 *
	 * @access	public
	 * @return	array list or boolean
	*/
	public function rowseek($rownum, $query_id = 0)
	{
		if( !$query_id )
		{
			$query_id = $this->query_result;
		}

		return ( $query_id ) ? mysql_data_seek($query_id, $rownum) : false;
	}

	/**
	 * get next id
	 *
	 * @access	public
	 * @return	array list or boolean
	*/
	public function insertid()
	{
		return ( $this->db_connect_id ) ? mysql_insert_id($this->db_connect_id) : false;
	}

	/**
	 * free recordset
	 *
	 * @access	public
	 * @return	array list or boolean
	*/
	public function freeresult($query_id = 0)
	{
		if( !$query_id )
		{
			$query_id = $this->query_result;
		}

		if ( $query_id )
		{
			unset($this->row[(int)$query_id]);
			unset($this->rowset[(int)$query_id]);

			mysql_free_result($query_id);

			return true;
		}
		else
		{
			return false;
		}
	}


	/**
	 * Description
	 *
	 * @access public
	 */
	public function getVersion()
	{
		return mysql_get_server_info( $this->db_connect_id );
	}

	/**
	 * Determines UTF support
	 *
	 * @access	public
	 * @return boolean True - UTF is supported
	 */
	public function hasUTF()
	{
		$verParts = explode( '.', $this->getVersion() );
		return ($verParts[0] == 5 || ($verParts[0] == 4 && $verParts[1] == 1 && (int)$verParts[2] >= 2));
	}

	/**
	 * Custom settings for UTF support
	 *
	 * @access	public
	 */
	public function setUTF()
	{
		mysql_query( "SET NAMES 'utf8'", $this->db_connect_id );
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
	public function getEscaped( $text, $extra = false )
	{
		$result = mysql_real_escape_string( $text, $this->db_connect_id );
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
	public function getErrorMsg()
	{
		$result['message'] = mysql_error($this->db_connect_id);
		$result['code'] = mysql_errno($this->db_connect_id);

		return $result;
	}

}
?>
