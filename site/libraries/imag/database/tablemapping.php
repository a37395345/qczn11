<?php
// no direct access
defined( 'PATH_BASE' ) or die( 'Restricted access' );

 /**
 * TableMapping class
 *
 * @package		Imag.Framework
 * @subpackage	Database
 * @author   gary wang (wangbaogang123@hotmail.com)
 *
 */
import('imag.filesystem.filesystem');
include_once(""."imag/registry/format.php");

class TableMapping extends Object
{
	protected $_db   = null;
	protected $_path = "";
	
	/**
	 * Object constructor to set table and key field
	 *
	 * Can be overloaded/supplemented by the child class
	 *
	 * @access protected
	 * @param object $db JDatabase object
	 */
	public function __construct( $db, $path )
	{
		if(empty($db)||empty($path)){
			exit("TableMapping params error!");
		}
		$this->_db		=  $db;
		$this->_path    = $path;
	}
	
	
	/**
	 * generate table mapping
	 */
	public function generate(){
		
		$query = 'SHOW TABLES';
		if(!$result = $this->_db->query($query)){
			$this->setError( $this->_db->getErrorMsg() );
			return false;
		}
		$itemlist = array();
		while ($row = $this->_db->fetchrow($result)) {
			$itemlist[] = $row;
		}
		$this->_db->freeresult();
		
		$databse = array();
		for($i=0;$i<count($itemlist);$i++){
			$this->save($itemlist[$i]["Tables_in_".$this->_db->getDbName()]);
			$databse[] = $itemlist[$i]["Tables_in_".$this->_db->getDbName()];
		}
		
		$object = new StdClass();
		$object->tables = $databse;
		$table =  RegistryFormat::getInstance("php");
		$content = $table->objectToString($object,array("class"=>"TableMap"));
		
		FileSystem::write( $this->_path.DS."tablemap.php",$content);
		
	}
	
	/**
	 * Save table to local
	 */
	public function save($tbl){
		
		$query = 'SELECT * FROM '.$tbl.' WHERE 1 LIMIT 0,1';
		if(!$result = $this->_db->query($query)){
			$this->setError( $this->_db->getErrorMsg() );
			return false;
		}
		
		$object = new StdClass();
		
		$_columns = array();
		$i = 0;
		
		while ($i < $this->_db->numfields($result)) {
			
   			$meta = $this->_db->fetch_field($result,$i);
   			if (!$meta) {
   				continue;
   			}
   			$prop = $meta->name;
   			if($meta->primary_key)
   			{
   				$object->_key = $prop;
   			}
   			else{
   				$object->$prop = null;
   			}
   			
   			$_columns[$prop] = $prop;
   			
   			$i++;
   			
  		}
		
  		$object->_columns  = $_columns;
  		$object->_name     = $tbl;
  		$object->_function = array('
					function __construct( $db )
					{
						parent::__construct( $db );
					}
				');
	
		$table =  RegistryFormat::getInstance("php");
		$content = $table->objectToString($object,array("class"=>ucfirst($tbl)." extends Table"));
		
		FileSystem::write($this->_path.DS.$tbl.".php",$content);
		
	}
}
?>
