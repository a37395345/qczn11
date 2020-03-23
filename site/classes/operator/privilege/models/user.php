<?php
class ModelUser extends Model
{
	
	
	var $table = array("name"=>"admin_users","key"=>"admin_user_id");
	function __construct()
	{

		parent::__construct();
	}
	
	function getListBySql($sql='')
	{
		print_r("expression");exit;
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
	function store($data,$table=''){
		if(!$this->_db->insertObject($this->table["name"],$data)){
			return false;
		}else{
			return $this->_db->insertid();
		}

	}

	function update($data,$id,$table=''){
		print_r("expression");exit;
		return $this->_db->updateObject(empty($table)?$this->table["name"]:$table,$data,$id);

	}

	function getUserList($start,$per_page)
	{
		
		$list = null;
		$sql = "SELECT a.*,b.`title`,c.`emp_name`,d.shop_name FROM `{$this->table['name']}` as a ".
			   "INNER JOIN `admin_group` as b ON b.`admin_group_id`=a.`admin_group_id` ".
			   "LEFT JOIN `emp` as c ON c.`emp_id`=a.`user_id` Left Join `shop` as d ON a.shop_id=d.shop_id WHERE 1 LIMIT $start,$per_page";
		
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

	function getAllPrivilege()
	{
		$privilege = null;

		$sql = "SELECT * FROM `admin_group` WHERE 1 ";
		
		if( ($result = $this->_db->query($sql)) )
		{
			while ( ($row = $this->_db->fetchrow($result)) )
			{
				$privilege[] = $row;
			}
		}
		
		$this->_db->freeresult($result);
		
		return $privilege;
	}
	
	function getAllEmployee($sql='')
	{
		$employee = null;
		if (empty($sql)){
		$sql = "SELECT emp_id,emp_name FROM `emp` WHERE `emp_stutas`>-1 ";
		}
		
		if( ($result = $this->_db->query($sql)) )
		{
			while ( ($row = $this->_db->fetchrow($result)) )
			{
				$employee[] = $row;
			}
		}
		
		$this->_db->freeresult($result);
		
		return $employee;
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
	
	function getUserInfo($aid)
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

		$sql = "SELECT privilege FROM `{$this->table['name']}` WHERE `{$this->table['key']}`='{$aid}'";

		if (!($result = $this->_db->query($sql))){
				return array();
		}
			
		if(!($row = $this->_db->fetchrow($result))){
			return array();
		}
		
		$this->_db->freeresult($result);
		return $row['privilege'];
	}


	function getGroupPrivilege($admin_group_id){

		$list = null;
		
		$sql = "SELECT * FROM `admin_group` WHERE `admin_group_id`='{$admin_group_id}'";
		
		if(($result = $this->_db->query($sql)))
		{
			if(($row = $this->_db->fetchrow($result)))
			{
				$list = $row['privilege'];
			}
		}
		
		$this->_db->freeresult($result);
		return $list;
	}
}
?>