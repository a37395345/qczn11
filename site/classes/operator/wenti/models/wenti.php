<?php
class ModelWenti extends Model
{
	function __construct()
	{
		parent::__construct();
	}
	function delete($aid)
	{
		$sql = "DELETE FROM `wenti_image` WHERE `wenti_id`='{$aid}'";
		return $this->_db->query($sql);
	}
	function delete_a($aid)
	{
		$sql = "DELETE FROM `wenti` WHERE `id`='{$aid}'";
		return $this->_db->query($sql);
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
	function store($data,$table=''){
		if(!$this->_db->insertObject($table,$data)){
			return false;
		}else{
			return $this->_db->insertid();
		}
	}
	function update($data,$id,$table='',$sql=''){
		if (empty($sql)){
			return $this->_db->updateObject($table,$data,$id);
		}else{
			return $this->_db->query($sql);
		}
	}
	function getEmpName($u_id){
    	$list = null;

		$sql = "SELECT `emp_name` FROM `emp` AS a INNER JOIN `admin_users` AS b ON a.emp_id=b.user_id WHERE b.`admin_user_id` ='{$u_id}'";

		if(($result = $this->_db->query($sql)))
		{
			if(($row = $this->_db->fetchrow($result)))
			{
				$list = $row["emp_name"];
			}
		}

		$this->_db->freeresult($result);
		return $list;
    }

	
}
?>