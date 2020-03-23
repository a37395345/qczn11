<?php
class ModelRules extends Model
{
	var $table = array("name"=>"rules_info","key"=>"id");
	function __construct()
	{
		parent::__construct();
	}
	function getListBySql_a($sql='')
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
	function store($data,$table=''){
		if(!$this->_db->insertObject(empty($table)? $this->table["name"] : $table,$data)){
			return false;
		}else{
			return $this->_db->insertid();
		}

	}

	function update($data,$id,$table=''){
		return $this->_db->updateObject(empty($table)?$this->table["name"] : $table,$data,$id);
	}

	function getListBySql($sql)
	{
		$list = null;
		

		if( ($result = $this->_db->query($sql)) )
		{
			while ( ($row = $this->_db->fetchrow($result)) )
			{
				if (isset($row['emp_EntryDate'])){
					$row['emp_EntryDate']=date("Y-m-d",$row['emp_EntryDate']);
				}
				if (isset($row['emp_id']) && isset($row['startmonth']) && isset($row['endmonth'])){
					$nowyear=$row['startyear'];
					$smonth=$row['startmonth'];
					$emonth=$row['endmonth'];
					$uid=$row['emp_id'];
					$sql="select Sum(profit) as total from finance_profit_emp_detail Where emp_id={$uid} And year={$nowyear} And month>={$smonth} And month<={$emonth}";
					$row['total_profit']=$this->getTotal($sql);
				}
				$list[] = $row;
			}
		}
		
		$this->_db->freeresult($result);
		//print_r($list);exit;
		return $list;
	}
	function getInfo($sql)
	{
		$list = null;
		
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

	function getTotal($sql='')
	{
		$list = null;
        if (empty($sql)){
			$sql = "SELECT COUNT(*) AS total FROM `{$this->table['name']}` WHERE 1";
		}
		
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
	
    
	function delete($aid,$table='')
	{
		$sql = "DELETE FROM {$table} WHERE id={$aid}";
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