<?php
class ModelEmployee extends Model
{
	var $table = array("name"=>"emp","key"=>"emp_id");
	function __construct()
	{
		parent::__construct();
	}

	
	function store($data,$table=''){
		if(!$this->_db->insertObject(empty($table)? $this->table["name"] : $table,$data)){
			return false;
		}else{
			return $this->_db->insertid();
		}

	}

	function update($data,$id,$table='',$sql='')
	{
		if (empty($sql)){
			return $this->_db->updateObject(empty($table)?$this->table["name"] : $table,$data,$id);
		}else{
			return $this->_db->query($sql);
		}

	}

	function getUserList($start,$per_page,$where=1,$searchstatus=9)
	{
		$list = null;

		$sql = "SELECT a.*,b.shop_name FROM `{$this->table['name']}` a Left Join shop b On a.emp_shopid=b.shop_id WHERE  {$where} LIMIT $start,$per_page";
		//print_r($sql);exit;
		if( ($result = $this->_db->query($sql)) )
		{
			while ( ($row = $this->_db->fetchrow($result)) )
			{
                $row['level_title'] = $this->get_title('employee_level', $row['emp_post'], 'id');
                $row['status_title'] =$this->empStatus($row['emp_stutas']);
                $row['emp_EntryDate']=date("Y-m-d",$row['emp_EntryDate']);
                $row['emp_pactStartDate']=date("Y-m-d",$row['emp_pactStartDate']);
                $row['emp_pactEndDate']=date("Y-m-d",$row['emp_pactEndDate']);
                $row['emp_photo'] = $row['emp_image'];
                
				if ($searchstatus==9 || $searchstatus==$row['emp_status']){
                	$list[] = $row;
				}
			}
		}		
		$this->_db->freeresult($result);
		return $list;
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



	function getListBySql($start,$per_page,$where=1,$searchstatus=9)
	{
		
		//人员集合
		$list = null;
		$sql = "SELECT emp_id,emp_post,emp_name,emp_driverlicense,emp_image,emp_stutas FROM `{$this->table['name']}` WHERE  {$where} LIMIT $start,$per_page";
		if(($result = $this->_db->query($sql)))
        {
            while ( ($row = $this->_db->fetchrow($result)) )
            {
            	
				$list[] = $row;
            }
        }
		$this->_db->freeresult($result);
		
		//车子，派单
		
		$list1 = null;
		$sql1="SELECT a.paiche_id,a.paicheCar,a.paicheDriver,e.car_num,e.car_image FROM `paiche` AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId LEFT JOIN car AS e ON a.paicheCar=e.car_id WHERE a.paiche_status=1 AND a.paiche_type IN (3,4,5) AND paiche_endDate>=".time()." AND a.paiche_recycle!=1 AND IFNULL( a.paiche_aaa,'')<>'补单' AND paiche_startDate<=".time();
		$sql1.=" Union all ";
				//长期派车单
		$sql1.="SELECT a.paiche_id,a.paicheCar,a.paicheDriver,e.car_num,e.car_image FROM `paiche` AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId LEFT JOIN car AS e ON a.paicheCar=e.car_id WHERE a.paiche_status=1 AND a.paiche_type IN (1,2) AND b.settle_totalKm<=0 AND a.paiche_recycle!=1 AND IFNULL( a.paiche_aaa,'')<>'补单' AND paiche_startDate<=".time();
        if(($result = $this->_db->query($sql1)))
        {
            while ( ($row = $this->_db->fetchrow($result)) )
            {
            	
				$list1[] = $row;
            }
        }
       

		$this->_db->freeresult($result); 	
		for($i=0;$i<count($list);$i++){
			$k=0;
			for($j=0;$j<count($list1);$j++){
				if($list[$i]['emp_id']==$list1[$j]['paicheDriver']){
					$list[$i]['car_id']=$list1[$j]['paicheCar'];
					$list[$i]['car_num']="苏D".$list1[$j]['car_num'];
					$list[$i]['car_photo']=$list1[$j]['car_image'];
					$list[$i]['paiche_id']=$list1[$j]['paiche_id'];
					$k=$k+1;
				}
			}
			$list[$i]['emp_photo'] = $list[$i]['emp_image'];  
		}
		$list_a=array();
		$list_b=array();
		if($searchstatus!=-1){
			for($i=0;$i<count($list);$i++){
				if(!isset($list[$i]['paiche_id'])){
					$list[$i]['emp_status']=0;
					$list_a[]=$list[$i];
				}else{
					$list[$i]['emp_status']=1;
					$list_b[]=$list[$i];
				}
				
			}
		}
		
		if($searchstatus==1){
			$list=$list_b;
		}else if($searchstatus==0){
			$list=$list_a;
		}
		
		//print_r($searchstatus);
		return $list;
				
	}


	function getDriverList($start,$per_page,$where=1,$searchstatus=9)
	{
		$list = null;
		$sql = "SELECT emp_id,emp_name,emp_driverlicense,emp_image,emp_stutas FROM `{$this->table['name']}` WHERE  {$where} LIMIT $start,$per_page";
	
	
		if( ($result = $this->_db->query($sql)) )
		{
			while ( ($row = $this->_db->fetchrow($result)) )
			{
                $row['emp_photo'] = $row['emp_image'];
                
                //取出车记录
                //临时派车单

				$sql1="SELECT a.paiche_id,a.paicheCar,e.car_num,e.car_image FROM `paiche` AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId LEFT JOIN car AS e ON a.paicheCar=e.car_id WHERE a.paicheDriver=".$row["emp_id"]." AND a.paiche_status=1 AND a.paiche_type IN (3,4,5) AND paiche_endDate>=".time()." AND a.paiche_recycle!=1 AND IFNULL( a.paiche_aaa,'')<>'补单' AND paiche_startDate<=".time();
				$sql1.=" Union all ";
				//长期派车单
				$sql1.="SELECT a.paiche_id,a.paicheCar,e.car_num,e.car_image FROM `paiche` AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId LEFT JOIN car AS e ON a.paicheCar=e.car_id WHERE a.paicheDriver=".$row["emp_id"]." AND a.paiche_status=1 AND a.paiche_type IN (1,2) AND b.settle_totalKm<=0 AND a.paiche_recycle!=1 AND IFNULL( a.paiche_aaa,'')<>'补单' AND paiche_startDate<=".time();
            	
				if (($result1 = $this->_db->query($sql1)))
				{
					if(($row1 = $this->_db->fetchrow($result1)))
					{
						$row['emp_status']=1;
						$row["car_id"]=$row1['paicheCar'];
						$row["car_num"]="苏D".$row1['car_num'];
						$row["paiche_id"]=$row1['paiche_id'];
						$row['car_photo'] = $row1['car_image'];
					}else{
						$row['emp_status']=$row['emp_stutas']==-1?-1:0;
					}
				}
				
				if ($searchstatus==9 || $searchstatus==$row['emp_status']){
                	$list[] = $row;
				}
			}
		}		

		$this->_db->freeresult($result);
			//print_r($list[0]);exit;
		return $list;
	}





	function getPaicheList($e_id)
	{
		$list2 = null;

		$sql="SELECT a.paiche_id,a.paicheCom,a.paiche_linker,a.paiche_startDate,a.paiche_endDate,b.client_name ".
			 "FROM `paiche` AS a LEFT JOIN `client` AS b ON a.paicheCom=b.client_id WHERE a.paiche_recycle!=1 AND a.paiche_status>=0 AND a.paicheDriver={$e_id} ORDER BY a.paiche_id DESC LIMIT 0,15";

		if (($result2 = $this->_db->query($sql)))
		{
			while ( ($row2 = $this->_db->fetchrow($result2)) )
			{
				$row2['paiche_startDate']=date("Y-m-d H:i:s",$row2['paiche_startDate']);
				$row2['paiche_endDate']=date("Y-m-d H:i:s",$row2['paiche_endDate']);
				$list2[] = $row2;
			}
		}
		
		$this->_db->freeresult($result2);
		return $list2;
	}
    
	function empStatus($res){//分析出数据库中的员工状态
		$Re="";
		if(!empty($res)){
			switch($res){
				case 0:
					$Re = "试用期";
					break;
				case 1:
					$Re = "在值";
					break;
				case 2:
					$Re = "出勤";
					break;
				case 3:
					$Re = "休假";
					break;
				case -1:
					$Re = "离职";
					break;
			}
		}else{
			$Re = "试用期";
		}
		return $Re;
	}
	
    function get_title($table, $level_id, $id){
        $sql = "SELECT title FROM `{$table}` WHERE {$id} = {$level_id}";
        //echo $sql;
        if(($result = $this->_db->query($sql)))
        {
            if(($row = $this->_db->fetchrow($result)))
            {
                return $row['title'];
            }
        }        
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
	
	function getBig_id($where=1)
	{
		$list = null;
        
		$sql = "SELECT * FROM `{$this->table['name']}` WHERE {$where}  order by em_id desc limit 0,1 ";
		
		if(($result = $this->_db->query($sql)))
		{
			if(($row = $this->_db->fetchrow($result)))
			{
				$list = $row['em_id'];
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
				$row['emp_EntryDate']=date("Y-m-d",$row['emp_EntryDate']);
				$row['emp_pactStartDate']=date("Y-m-d",$row['emp_pactStartDate']);
				$row['emp_pactEndDate']=date("Y-m-d",$row['emp_pactEndDate']);
				$row['emp_quitTime']=$row['emp_quitTime']>0 ? date("Y-m-d",$row['emp_quitTime']) : "";
				$row['emp_imglist']=$this->getUserImages($row['emp_id']);
				$row['level_title'] = $this->get_title('employee_level', $row['emp_post'], 'id');
				$list = $row;
			}
		}
		
		$this->_db->freeresult($result);
		return $list;
	}
	function getUserImages($uid){
		$list1 = null;

		$sql = "SELECT * FROM `emp_images` WHERE `emp_id`={$uid} ";
		
		if( ($result = $this->_db->query($sql)) )
		{
			while ( ($row1 = $this->_db->fetchrow($result)) )
			{
                $list1[] = $row1;
			}
		}
		$this->_db->freeresult($result);
		return $list1;
	}
    
	function delete($aid)
	{
		//$sql = "DELETE FROM `{$this->table['name']}` WHERE `{$this->table['key']}`='{$aid}'";
		$sql="Update {$this->table['name']} Set emp_recycle=1,emp_recycleTime=".time()." WHERE `{$this->table['key']}`='{$aid}'";
		$sql2="DELETE FROM `emp_images` WHERE `emp_id`='{$aid}'";
		return $this->_db->query($sql) && $this->_db->query($sql2);
	}
	function delete2($aid,$table='',$key='')
	{
		$sql = "DELETE FROM `{$table}` WHERE `{$key}`='{$aid}'";
		return $this->_db->query($sql);
	}
}
?>