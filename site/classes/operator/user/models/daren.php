<?php
class ModelDaren extends Model
{
	var $table = array("name"=>"users","key"=>"user_id");
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

	function getUserList($start,$per_page,$where=1)
	{
		$list = null;

		$sql = "SELECT * FROM `{$this->table['name']}` WHERE  {$where}  LIMIT $start,$per_page";

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

	function getTotal($where)
	{
		$list = null;

		$sql = "SELECT COUNT(*) AS total FROM `{$this->table['name']}` WHERE {$where} ";

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

	function getBadgeInfo($uid, $badge_id){
		$list = null;

		$sql = "SELECT * FROM `users_badge` WHERE `user_id`='{$uid}' AND `badge_id`='{$badge_id}' ";

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

	/**
	 * 删除达人徽章
	 */
	function badgedel($uid, $badge_id){
		$sql = "DELETE FROM `users_badge` WHERE `user_id`='{$uid}' AND `badge_id`='{$badge_id}' ";
		return $this->_db->query($sql);
	}
}
?>