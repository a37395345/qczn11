<?php
class ModelLog extends Model
{
	var $table = array("name"=>"admin_users_action","key"=>"admin_user_action_id");
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

	function getLogList($start,$per_page,$where=1)
	{
		$list = null;

		$sql = "SELECT * FROM `{$this->table['name']}` WHERE  {$where} ORDER BY `{$this->table['key']}` DESC LIMIT $start,$per_page";
	
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
	
	function getTotal($where=1)
	{
		$list = null;
        
		$sql = "SELECT COUNT(*) AS total FROM `{$this->table['name']}` WHERE {$where}";
		
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
	    
	function delete($uid)
	{
		$sql = "DELETE FROM `{$this->table['name']}` WHERE `{$this->table['key']}`='{$uid}'";	
		
		return $this->_db->query($sql);
	}
}
?>