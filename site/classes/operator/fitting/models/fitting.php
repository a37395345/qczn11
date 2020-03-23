<?php
class ModelFitting extends Model
{
	var $table = array("name"=>"fitting","key"=>"fitting_id");
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
	
	function getListBySql($start,$per_page,$sql='')
	{
		$list = null;
		if(($result = $this->_db->query($sql." LIMIT $start,$per_page")))
        {
            while ( ($row = $this->_db->fetchrow($result)) )
            {
            	if (isset($row['fitting_indate'])){
            		$row['fitting_indate']= ($row['fitting_indate']>0?date("Y-m-d",$row['fitting_indate']):"");
            	}
            	if (isset($row['fitting_outdate'])){
            		$row['fitting_outdate']= ($row['fitting_outdate']>0?date("Y-m-d",$row['fitting_outdate']):"");
            	}
            	if (isset($row['fitting_appdate'])){
            		$row['fitting_appdate']= ($row['fitting_appdate']>0?date("Y-m-d",$row['fitting_appdate']):"");
            	}
            	if (isset($row['fitting_outcode'])){
            		$sql="SELECT a.`fitting_outnum`,a.`fitting_remark`, b.fitting_name,b.fitting_brand,b.fitting_model,b.fitting_outnum,b.fitting_unit FROM `fitting_out` AS a LEFT JOIN `fitting` AS b ON a.fitting_id=b.fitting_id WHERE a.`fitting_outcode`='".$row['fitting_outcode']."'";
            		$row['fitting_list']=$this->getList($sql);
            	}
            	if (isset($row['fitting_appid'])){
            		$sql="SELECT * FROM `fitting` WHERE `fitting_appid`=".$row['fitting_appid'];
            		$row['fitting_list']=$this->getList($sql);
            	}
            	
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
	function getList($sql='')
	{
		$list = null;
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