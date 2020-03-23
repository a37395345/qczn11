<?php
class ModelReport extends Model
{
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
	function update($data,$id,$table='',$sql=''){
		if (empty($sql)){
			return $this->_db->updateObject(empty($table)?$this->table["name"]:$table,$data,$id);
		}else{
			return $this->_db->query($sql);
		}
	}
	function getList($start,$per_page,$fields,$where='',$table='',$leftjoin='',$groupby='')
	{
		$list = null;
		if (empty($leftjoin)){
			$sql = "SELECT {$fields} FROM `{$table}` WHERE 1 {$where}";
		}else{
			$sql = "SELECT {$fields} FROM {$leftjoin} WHERE 1 {$where}";
		}
		if (!empty($groupby)){
			$sql .= " GROUP BY {$groupby}";
		}
		$sql .= " LIMIT $start,$per_page";
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
	
	function getListBySql($start,$per_page,$sql='')
	{
		//print_r($sql);exit;
		$list = null;
		if(($result = $this->_db->query($sql." LIMIT $start,$per_page")))
        {
            while ( ($row = $this->_db->fetchrow($result)) )
            {
            	if ($row['add_time']){
            		$row['add_time']=date("Y-m-d H:i:s",$row['add_time']);
            	}
            	if($row['paiche_startDate']){
            		$row['paiche_startDate'] = date("Y-m-d H:i:s",$row['paiche_startDate']);
            	}
            	if($row['paiche_endDate']){
            		$row['paiche_endDate'] = $row['paiche_endDate']>0 ? date("Y-m-d H:i:s",$row['paiche_endDate']) : "—";
            	}
            	if($row['settle_endDate']){
            		$row['settle_endDate'] = $row['settle_endDate']>0 ? date("Y-m-d H:i:s",$row['settle_endDate']) : "—";
            	}
            	if (isset($row['drive_date'])){
            		$row['drive_date'] = date("Y-m-d",$row['drive_date']);
            	}
            	if (isset($row['drive_startTime'])){
            		$row['drive_startTime'] = date("H:i",$row['drive_startTime']);
            	}
            	if (isset($row['drive_endTime'])){
            		$row['drive_endTime'] = date("H:i",$row['drive_endTime']);
            	}
            	if (isset($row['baoxiao_date'])){
            		$row['baoxiao_date'] = date("Y-m-d",$row['baoxiao_date']);
            	}
            	if (isset($row['baoxiao_times'])){
            		$row['baoxiao_times'] = date("Y-m-d H:i:s",$row['baoxiao_times']);
            	}
				if (isset($row['baoxiao_isOverTime'])){
            		$row['baoxiao_isOverTime'] = date("Y-m-d H:i:s",$row['baoxiao_isOverTime']);
            	}
            	
                $list[] = $row;
            }
        }
		$this->_db->freeresult($result);
		return $list;
	}
	
	function getInfo($sql){
		$list22 = null;        

		if(($result = $this->_db->query($sql)))
		{
			if(($row22 = $this->_db->fetchrow($result)))
			{
				if (isset($row22['paicheCom'])){
				$row22['paiche_clientprice']=$this->getEmpList("*"," AND `client_id` like '%".$row22['paicheCom']."%'","client_price");
				}
				$list22 = $row22;
			}
		}
		
		$this->_db->freeresult($result);
		return $list22;
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
	
	function getEmpList($fields,$where='',$table='',$leftjoin='',$order='')
	{
		$list = null;
		if (empty($leftjoin)){
			$sql = "SELECT {$fields} FROM `{$table}` WHERE 1 {$where}".(empty($order)?"":" ORDER BY {$order}");
		}else{
			$sql = "SELECT {$fields} FROM {$leftjoin} WHERE 1 {$where}".(empty($order)?"":" ORDER BY {$order}");
		}

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
}
?>