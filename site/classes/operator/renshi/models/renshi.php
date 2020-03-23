<?php
class ModelRenshi extends Model
{
	function __construct()
	{
		parent::__construct();
	}
	//添加
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
	//增加并返回ID（数据，表名）
	function instert($data,$table=''){
		if(!$this->_db->insertObject($table,$data)){
			return false;
		}else{
			return $this->_db->insertid();
		}
	}
	//修改（数据，ID，表名，sql语句）
	function update($data,$id,$table='',$sql=''){
		if (empty($sql)){
			return $this->_db->updateObject(empty($table)?$this->table["name"]:$table,$data,$id);
		}else{
			return $this->_db->query($sql);
		}
	}
	//删除（sql语句）
	function delete($sql)
	{
		return $this->_db->query($sql);
	}
}