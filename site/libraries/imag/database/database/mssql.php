<?php
// no direct access
defined( 'PATH_BASE' ) or die( 'Restricted access' );

/**
 * Mssql class.
 *
 * @package		Imag.Framework
 * @subpackage	Database
 * @author      gary wang (wangbaogang123@hotmail.com)
 * @creat date  2008.07.26
 *
 */

/***************************************************************************
 *
 *	You must have the following components installed on your computer:
 *  
 *  1. A supported operating system, such as: 
 *     Windows Server 2003 Service Pack 1
 *    Windows XP Service Pack 2
 *    Windows Vista
 *    Windows Server 2008
 *
 *	2. PHP 5. For information about how to download and install the latest stable binaries, visit http://php.net.
 *
 *	3. The php_sqlsrv.dll file or the php_sqlsrv_ts.dll file (the thread-safe version of the driver). One of these files must be 
 *	   in your PHP extension directory. 
 *
 *	4. A Web server. Your Web server must be configured to run PHP. For information about hosting PHP applications with Internet
 *	   Information Services (IIS) 6.0, see Using FastCGI to Host PHP Applications on IIS 6.0. For information about hosting PHP
 *	   applications with IIS 7.0, see Using FastCGI to Host PHP Applications on IIS 7.0.	
 *
 *	5. Microsoft SQL Server Native Client (sqlncli.dll). SQL Server Native Client must be installed on the same computer on which
 *	   PHP is running. To download SQL Server Native Client, visit the Microsoft SQL Server Native Client page on MSDN.
 *  6.http://www.microsoft.com/downloads/details.aspx?FamilyId=61BF87E0-D031-466B-B09A-6597C21A2E2A&displaylang=en
 ***************************************************************************/

class Mssql extends Database
{

	var $db_connect_id;
	var $query_result;
	var $row = array();
	var $rowset = array();

	//
	// Constructor
	//
	function __construct($options)
	{
		//print_r($options);
		$this->server		= array_key_exists('host', $options)		? $options['host']			: 'localhost';
		$this->user		    = array_key_exists('user', $options)		? $options['user']			: '';
		$this->password	    = array_key_exists('password',$options)		? $options['password']		: '';
		$this->dbname	    = array_key_exists('database',$options)		? $options['database']		: '';
		$this->persistency	= array_key_exists('persistency', $options)	? $options['persistency']	: false;

		$this->db_connect_id = sqlsrv_connect( $this->server, array( "Database"=>$this->dbname,"UID" => $this->user, "PWD" => $this->password));

		//if( $this->db_connect_id === false ){
			//return false;
		//}else{
		return $this->db_connect_id;
		//}
	}

	function transaction(){
	}

	//
	// Other base methods
	//
	function close()
	{
		if( $this->db_connect_id ){

			return sqlsrv_close($this->db_connect_id);
		}
		else
		{
			return false;
		}
	}

	//
	// Base query method
	//
	function query($query = ""){
		//
		// Remove any pre-existing queries
		//
		unset($this->query_result);

		if( $query != "" ){
			$this->query_result = sqlsrv_query($this->db_connect_id, $query);
		}
		else{
			$result = false;		
		}

		if( $this->query_result ){
			return $this->query_result;
		}else{
			return false;
		}
	}

	function numfields($query_id = 0)
	{
		if( !$query_id )
		{
			$query_id = $this->query_result;
		}

		return ( $query_id ) ? sqlsrv_num_fields($query_id) : false;
	}

	function affectedrows()
	{
		return false;
	}

	function fetchrow($query_id = 0)
	{
		if( !$query_id )
		{
			$query_id = $this->query_result;
		}

		if( $query_id ){
			$this->row[$query_id] = sqlsrv_fetch_array($query_id, SQLSRV_FETCH_ASSOC);
			return $this->row[$query_id];
		}
		else{
			return false;
		}
	}

	function fetchrowset($query_id = 0)
	{
		if( !$query_id )
		{
			$query_id = $this->query_result;
		}

		if( $query_id )
		{
			unset($this->rowset[$query_id]);
			unset($this->row[$query_id]);

			while($this->rowset[$query_id] = sqlsrv_fetch_array($query_id, SQLSRV_FETCH_ASSOC))
			{
				$result[] = $this->rowset[$query_id];
			}

			return $result;
		}
		else
		{
			return false;
		}
	}

	function freeresult($query_id = 0)
	{
		if( !$query_id )
		{
			$query_id = $this->query_result;
		}

		if ( $query_id )
		{
			unset($this->row[$query_id]);
			unset($this->rowset[$query_id]);

			sqlsrv_free_stmt($query_id);

			return true;
		}
		else
		{
			return false;
		}
	}

	function fieldname($offset, $query_id = 0)
	{
		return false;
	}

	function fieldtype($offset, $query_id = 0)
	{
		return false;
	}

	function fetchobject()
	{
		return false;
	}

	function fetchobjectset()
	{
		return false;
	}

	function insertObject( $table, &$object, $keyName = NULL )
	{
		return false;
	}

	function updateObject( $table, &$object, $keyName, $updateNulls=true )
	{
		return false;
	}

	function fetchfield($field, $rownum = -1, $query_id = 0)
	{
		return false;
	}

	function rowseek($rownum, $query_id = 0)
	{
		return false;
	}

	function nextid()
	{
		return false;
	}

	function getVersion()
	{
		return 0;
	}

	function hasUTF()
	{
		return false;
	}

	function setUTF()
	{
		
	}

	function error(){

		if( ($errors = sqlsrv_errors() ) != null){
         foreach( $errors as $error) {
			$result['code'] = $error[ 'code'];
			$result['message'] = $error[ 'message'];
         }
		}else{
			$result = null;
		}

		return $result;
	}

}
?>
