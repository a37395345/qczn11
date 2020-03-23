<?php
class ModelAssets extends Model
{
	
	var $table = array("name"=>"assets","key"=>"assets_id");
	function __construct()
	{
		parent::__construct();
	}
	function store($data,$table=''){
		if(!$this->_db->insertObject(empty($table)?$this->table["name"]:$table,$data)){
			return false;
		}else{
			return $this->_db->insertid();
		}
	}
	function update($data,$id,$table='',$sql=''){
		if (empty($sql)){
			return $this->_db->updateObject(empty($table)?$this->table["name"]:$table,$data,$id);
		}else{
			return $this->_db->query($sql);
		}
	}
	function getListBySql($sql='')
	{
		$list = null;
		if(($result = $this->_db->query($sql)))
        {
            while ( ($row = $this->_db->fetchrow($result)) )
            {
            	
				$list[] = $row;
            }
        }
		$this->_db->freeresult($result);
		return $list;
	}
	function getTotal($sql)
	{
		$list = null;        

		if(($result = $this->_db->query($sql)))
		{
			if(($row = $this->_db->fetchrow($result)))
			{
				$list = $row['total'];
			}
		}
		
		$this->_db->freeresult($result);
		return $list;
	}
	function getInfo($uid,$sql='')
	{
		$list = null;
		if (!empty($uid)){
			$sql = "SELECT * FROM `{$this->table["name"]}` WHERE `{$this->table["key"]}`='{$uid}'";
		}
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
?>