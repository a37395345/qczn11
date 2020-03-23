<?php
import('imag.component.model');

class CommonModel extends Model{
	function __construct()
	{
		parent::__construct();
	}
	//删除（sql语句）
	function delete($sql)
	{
		return $this->_db->query($sql);
	}
	//查询（sql语句）
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
	function update($sql){
		return $this->_db->query($sql);
		
	}
	
	function update_a($data,$id,$table='',$sql=''){
		if (empty($sql)){
			return $this->_db->updateObject(empty($table)?$this->table["name"]:$table,$data,$id);
		}else{
			return $this->_db->query($sql);
		}
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

            	if ($table=="car"){
            		$row['car_name']="苏D".$row['car_num']."-".$row['car_color']."-".$row['car_brand']."-".$row['car_type'];
            	}

            	
            	if ($table=="paiche"){
            		//合同约定
					$row['paiche_itemlist']=$this->getItemList($row['paiche_id']);
            	}
            	if ($table=="paiche_drive"){
            		//$row['drive_date']=date("Y-m-d",$row['drive_date']);
		            if ($row['drive_hol']=="节假日"){
		        		$row['bgcolor']="#fff000";
		        	}elseif($row['drive_hol']=="周末"){
		        		$row['bgcolor']="#fffeab";
		        	}else{
		        		$row['bgcolor']="#ffffff";
		        	}
            		$row['drive_startHour']=date("H",$row['drive_startTime']);
					$row['drive_startMinute']=date("i",$row['drive_startTime']);
					$row['drive_endHour']=date("H",$row['drive_endTime']);
					$row['drive_endMinute']=date("i",$row['drive_endTime']);
            	}
            	if (isset($row['paiche_startDate'])){
            		$row['paiche_startDate']=date("Y-m-d H:i:s",$row['paiche_startDate']);
            	}
            	if (isset($row['paiche_endDate'])){
            		$row['paiche_endDate']=date("Y-m-d H:i:s",$row['paiche_endDate']);
            	}
            	if (isset($row['drive_date'])){
            		$row['drive_date'] = date("Y-m-d",$row['drive_date']);
            	}
            	if (isset($row['drive_startTime'])){
            		$row['drive_startTime_O'] = $row['drive_startTime'];
            		$row['drive_startTime'] = date("H:i",$row['drive_startTime']);
            	}
            	if (isset($row['drive_endTime'])){
            		$row['drive_endTime_O'] = $row['drive_endTime'];
            		$row['drive_endTime'] = date("H:i",$row['drive_endTime']);
            	}
            	if (isset($row['drive_account'])){
            		$row['drive_account'] = $row['drive_account']==1?"已结账":"未结账";
            	}
            	if (isset($row['month_accounttime'])){
            		$row['month_accounttime'] =$row['month_accounttime']>0? date("Y-m-d",$row['month_accounttime']) : "";
            	}
            	if (isset($row['revisit_Date'])){
            		$row['revisit_Date']=date("Y-m-d",$row['revisit_Date']);
            	}
            	if (isset($row['baoxiao_date'])){
            		$row['baoxiao_date'] = date("Y-m-d",$row['baoxiao_date']);
            	}
            	if (isset($row['baoxiao_isAgreeTime'])){
            		$row['baoxiao_isAgreeTime'] = date("Y-m-d H:i:s",$row['baoxiao_isAgreeTime']);
            	}
            	
                $list[] = $row;
            }
        }

		
		$this->_db->freeresult($result);
		return $list;
	
	}




}
