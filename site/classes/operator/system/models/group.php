<?php
class ModelGroup extends Model
{
	
	var $table = array("name"=>"admin_group","key"=>"admin_group_id");
	function __construct()
	{
		parent::__construct();
	}
	
	function store($data,$table=''){
		if(!$this->_db->insertObject($this->table["name"],$data)){
			return false;
		}else{
			return $this->_db->insertid();
		}

	}

	function update($data,$id,$table=''){
		return $this->_db->updateObject($this->table["name"],$data,$id);

	}

	function getGroupList($start,$per_page)
	{
		$list = null;

		$sql = "SELECT * FROM `{$this->table['name']}` WHERE 1 LIMIT $start,$per_page";
		
		if( ($result = $this->_db->query($sql)) )
		{
			while ( ($row = $this->_db->fetchrow($result)) )
			{
				$list[] = $row;
			}
		}
		
		$this->_db->freeresult($result);
		return $list;
	}

	function getGroupPrivilege($uid)
	{
		$nid = 0;

		$sql = "SELECT * FROM `admin_users` WHERE `admin_user_id`= '{$uid}' ";
		
		if( ($result = $this->_db->query($sql)) )
		{
			while ( ($row = $this->_db->fetchrow($result)) )
			{
				$nid = $row['admin_group_id'];
			}
		}
		
		$this->_db->freeresult($result);
		
		return $nid;
	}

	function getTotal()
	{
		$list = null;
        
		$sql = "SELECT COUNT(*) AS total FROM `{$this->table['name']}` WHERE 1";
		
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
	
	function getGroupInfo($aid)
	{
		$list = null;
		
		$sql = "SELECT * FROM `{$this->table['name']}` WHERE `{$this->table['key']}`='{$aid}'";
		
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
	
    
	function delete($aid)
	{
		$sql = "DELETE FROM `{$this->table['name']}` WHERE `{$this->table['key']}`='{$aid}'";
		return $this->_db->query($sql);
	}

	function getPrivilege($aid){

		$sql = "SELECT `privilege` FROM `{$this->table['name']}` WHERE `{$this->table['key']}`='{$aid}'";

		if (!($result = $this->_db->query($sql))){
				return array();
		}
			
		if(!($row = $this->_db->fetchrow($result))){
			return array();
		}
		
		$this->_db->freeresult($result);
		return $row['privilege'];
	}
}
?>