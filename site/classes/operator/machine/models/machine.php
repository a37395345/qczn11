<?php
class ModelMachine extends Model
{

	var $table = array("name"=>"car","key"=>"car_id");
	//根据sql语句查询

	

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
	function __construct()
	{
		parent::__construct();
	}
	function update_shuoming($sql){
		return $this->_db->query($sql);
	}
			
	function delete($aid,$table='')
	{        
        $sql = "UPDATE `{$table}` SET `car_recycle`=1 WHERE `car_id`='{$aid}'";
		return $this->_db->query($sql);
	}
	function delete2($aid,$table='',$key='')
	{
		$sql = "DELETE FROM `{$table}` WHERE `{$key}`='{$aid}'";
		return $this->_db->query($sql);
	}
	
	function store($data,$table=''){
		if(!$this->_db->insertObject(empty($table)?$this->table["name"]:$table,$data)){
			return false;
		}else{
			return $this->_db->insertid();
		}
	}

//修改（数据，ID，表名，sql语句）

	function update_a($sql){

		return $this->_db->query($sql);

		

	}
	function update($data,$id,$table='',$sql=''){
		return $this->_db->updateObject(empty($table)?$this->table["name"]:$table,$data,$id);

	}
	function getInfo($uid,$table='',$key='')
	{
		$list = null;
		
		$sql = "SELECT a.*,b.card_no FROM {$table} as a Left Join car_oilcard as b On a.car_id=b.car_id WHERE a.{$key}='{$uid}'";
		
		if(($result = $this->_db->query($sql)))
		{
			if(($row = $this->_db->fetchrow($result)))
			{
				if ($row['car_saleDate']>0){
					$row['car_saleDate']= date("Y-m-d",$row['car_saleDate']);
				}
				if ($row['car_cartDate']>0){
					$row['car_cartDate']= date('Y-m-d',$row['car_cartDate']);
				}
				if ($row['car_positionDate']>0){
					$row['car_positionDate']= date("Y-m-d",$row['car_positionDate']);
				}
				if (isset($row['start_Date'])){
            		$row['start_Date']= ($row['start_Date']>0?date("Y-m-d",$row['start_Date']):"");
            	}
				if (isset($row['end_Date'])){
            		$row['end_Date']= ($row['end_Date']>0?date("Y-m-d",$row['end_Date']):"");
            	}
				if (isset($row['car_cancelDate'])){
            		$row['car_cancelDate']= ($row['car_cancelDate']>0?date("Y-m-d",$row['car_cancelDate']):"");
            	}
				if (isset($row['car_changeDate'])){
            		$row['car_changeDate']= ($row['car_changeDate']>0?date("Y-m-d",$row['car_changeDate']):"");
            	}
				if ($table=='car'){
				$row['car_imglist']=$this->getCarImages($row['car_id']);
				}
				$list = $row;
			}
		}
		
		$this->_db->freeresult($result);
		return $list;
	}
	function getCarImages($uid){
		$list1 = null;

		$sql = "SELECT * FROM `car_images` WHERE `car_id`={$uid} ";
		
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
	function getCarPrice($uid){
		$list1 = null;

		$sql = "SELECT * FROM `car_price` WHERE `car_id`={$uid} Order by plan_day";
		
		if( ($result = $this->_db->query($sql)) )
		{
			while ( ($row1 = $this->_db->fetchrow($result)) )
			{
				$row1['start_Date']= ($row1['start_Date']>0?date("Y-m-d",$row1['start_Date']):"不限");
				$row1['end_Date']= ($row1['end_Date']>0?date("Y-m-d",$row1['end_Date']):"不限");
                $list1[] = $row1;
			}
		}
		$this->_db->freeresult($result);
		return $list1;
	}
	function getInfoBySql($sql)
	{
		$list = null;		
		if(($result = $this->_db->query($sql)))
		{
			if(($row = $this->_db->fetchrow($result)))
			{
				if (isset($row['insurance_start'])){
            		$row['insurance_start']= ($row['insurance_start']>0?date("Y-m-d",$row['insurance_start']):"");
            	}
				if (isset($row['insurance_end'])){
            		$row['insurance_end']= ($row['insurance_end']>0?date("Y-m-d",$row['insurance_end']):"");
            	}
				if (isset($row['maintenance_date'])){
            		$row['maintenance_date']= ($row['maintenance_date']>0?date("Y-m-d",$row['maintenance_date']):"");
            	}
				if (isset($row['maintenance_nextdate'])){
            		$row['maintenance_nextdate']= ($row['maintenance_nextdate']>0?date("Y-m-d",$row['maintenance_nextdate']):"");
            	}
				if (isset($row['careful_date'])){
            		$row['careful_date']= ($row['careful_date']>0?date("Y-m-d",$row['careful_date']):"");
            	}
				if (isset($row['careful_nextdate'])){
            		$row['careful_nextdate']= ($row['careful_nextdate']>0?date("Y-m-d",$row['careful_nextdate']):"");
            	}	
				$row['car_num']= "苏D".$row['car_num'];
				if (isset($row['maintenance_id'])){
            		$row['fitting_list']=$this->getList("SELECT * FROM `car_maint_fitting` WHERE `fitting_maintid`=".$row['maintenance_id']);
            	}
				if (isset($row['gps_installDate'])){
            		$row['gps_installDate']= ($row['gps_installDate']>0?date("Y-m-d",$row['gps_installDate']):"");
            	}
				if (isset($row['gps_start'])){
            		$row['gps_start']= ($row['gps_start']>0?date("Y-m-d",$row['gps_start']):"");
            	}
            	if(isset($row['gps_end'])){
            		$row['gps_end'] = ($row['gps_end']>0?date("Y-m-d",$row['gps_end']):"");
            	}
				if (isset($row['car_cartDate'])){
            		$row['car_cartDate']= ($row['car_cartDate']>0?date("Y-m-d",$row['car_cartDate']):"");
            	}
				if (isset($row['breakrules_date'])){
            		$row['breakrules_date']= ($row['breakrules_date']>0?date("Y-m-d H:i:s",$row['breakrules_date']):"");
            	}
            	if (isset($row['breakrules_times'])){
            		$row['breakrules_times']= ($row['breakrules_times']>0?date("Y-m-d H:i:s",$row['breakrules_times']):"");
            	}
				if (isset($row['breakrules_endtimes'])){
            		$row['breakrules_endtimes']= ($row['breakrules_endtimes']>0?date("Y-m-d H:i:s",$row['breakrules_endtimes']):"");
            	}
            	
				$list = $row;
			}
		}
		
		$this->_db->freeresult($result);
		return $list;
	}
	function getBreakInfo($uid,$table='',$key='')
	{
		$list = null;

		$sql="SELECT a.*,b.car_num,c.paiche_id,c.paiche_linker,c.paiche_startDate,c.paiche_endDate,d.client_name,e.emp_name AS siji ".
			 "FROM `breakrules` AS a LEFT JOIN `car` AS b ON a.`breakrules_CarId`=b.`car_id` ".
			 "LEFT JOIN `paiche` AS c ON a.breakrulesPaicheId=c.paiche_id ".
			 "LEFT JOIN `emp` AS e ON a.breakrules_DriverID=e.emp_id ".
			 "LEFT JOIN `client` AS d on c.`paicheCom`=d.`client_id` WHERE `{$key}`='{$uid}'";
		
		if(($result = $this->_db->query($sql)))
		{
			if(($row = $this->_db->fetchrow($result)))
			{
				$row['breakrules_date']= date("Y-m-d",$row['breakrules_date']);
            	$row['paiche_startDate']=date("Y-m-d H:i:s",$row['paiche_startDate']);
            	$row['paiche_endDate']=date("Y-m-d H:i:s",$row['paiche_endDate']);
				$list = $row;
			}
		}
		
		$this->_db->freeresult($result);
		return $list;
	}
	
	function getListBySql($start,$per_page,$sql='',$paiche_startDate=0,$paiche_endDate=0,$searchstatus=9)
	{

		$list = null;
		if(($result = $this->_db->query($sql." LIMIT $start,$per_page")))
        {
        	$carid=0;
            while ( ($row = $this->_db->fetchrow($result)) )
            {
            	if (isset($row['car_cartDate'])){
            		$row['car_cartDate']= ($row['car_cartDate']>0?date("Y-m-d",$row['car_cartDate']):"");
            	}
            	if(isset($row['car_saleDate'])){
            		$row['car_saleDate'] = ($row['car_saleDate']>0?date("Y-m-d",$row['car_saleDate']):"");
            	}
            	if(isset($row['car_cancelDate'])){
            		$row['car_cancelDate'] = ($row['car_cancelDate']>0?date("Y-m-d",$row['car_cancelDate']):"");
            	}
            	
            	if (isset($row['breakrules_date'])){
            		$row['breakrules_date']= ($row['breakrules_date']>0?date("Y-m-d H:i:s",$row['breakrules_date']):"");
            	}
            	if (isset($row['breakrules_times'])){
            		$row['breakrules_times']= ($row['breakrules_times']>0?date("Y-m-d H:i:s",$row['breakrules_times']):"");
            	}
            	if (isset($row['breakrules_endtimes'])){
            		$row['breakrules_endtimes']= ($row['breakrules_endtimes']>0?date("Y-m-d H:i:s",$row['breakrules_endtimes']):"");
            	}
            	if (isset($row['car_nextmaintDate'])){
            		$row['car_nextmaintDate']= ($row['car_nextmaintDate']>0?date("Y-m-d",$row['car_nextmaintDate']):"");
            	}
            	if (isset($row['car_lastmaintDate'])){
            		$row['car_lastmaintDate']= ($row['car_lastmaintDate']>0?date("Y-m-d",$row['car_lastmaintDate']):"");
            	}
            	if (isset($row['next_date'])){
            		$row['next_date']= ($row['next_date']>0?date("Y-m-d",$row['next_date']):"");
            	}
            	if (isset($row['car_lastmaintDate']) && isset($row['car_id'])){
            		$row['car_maintList']=$this->getList("SELECT * FROM `car_maintenance` WHERE `car_id`=".$row['car_id']." ORDER BY maintenance_date Desc");
            	}

            	
            	
            	if (isset($row['car_lastcarefulDate'])){
            		$row['car_lastcarefulDate']= ($row['car_lastcarefulDate']>0?date("Y-m-d",$row['car_lastcarefulDate']):"");
            	}
            	if (isset($row['car_nextcarefulDate'])){
            		$row['car_nextcarefulDate']= ($row['car_nextcarefulDate']>0?date("Y-m-d",$row['car_nextcarefulDate']):"");
            	}
            	if (isset($row['car_changebattery'])){
            		$row['car_changebattery']= ($row['car_changebattery']>0?date("Y-m-d",$row['car_changebattery']):"");
            	}
            	if (isset($row['car_changeantifreeze'])){
            		$row['car_changeantifreeze']= ($row['car_changeantifreeze']>0?date("Y-m-d",$row['car_changeantifreeze']):"");
            	}
            	if (isset($row['car_changebrakefluid'])){
            		$row['car_changebrakefluid']= ($row['car_changebrakefluid']>0?date("Y-m-d",$row['car_changebrakefluid']):"");
            	}
            	if (isset($row['insurance_start'])){
            		$row['insurance_start']= ($row['insurance_start']>0?date("Y-m-d",$row['insurance_start']):"");
            	}
            	if (isset($row['insurance_end'])){
            		$row['insurance_end']= ($row['insurance_end']>0?date("Y-m-d",$row['insurance_end']):"");
            	}
            	if (isset($row['car_changeDate'])){
            		$row['car_changeDate']= ($row['car_changeDate']>0?date("Y-m-d",$row['car_changeDate']):"");
            	}
            	if (isset($row['car_position'])){
            		$row['car_position']=($row['car_position']==0?"无":"有");
            	}
            	if (isset($row['car_nav'])){
            		$row['car_nav']=($row['car_nav']==0?"无":"有");
            	}
            	if (isset($row['car_status'])){
            		if ($row['car_status']==2){
            			$row['car_status_code']=2;
            			$row['car_status']="维修";
            		}elseif ($row['car_status']==3){
            			$row['car_status_code']=3;
            			$row['car_status']="报废";
            		}else{
            			$row['car_status_code']=empty($row['car_status_code'])?0:$row['car_status_code'];
            			$row['car_status']=$row['car_status_code']==1?"租用":"空闲";
            		}
            	}
            	if (isset($row['breakrules_end'])){
            		if ($row['breakrules_end']==1){
            			$row['breakrules_endname']="已结算";
            		}else{
            			$row['breakrules_endname']=($row['breakrulesPaicheId']==0?"未冻结":"已冻结");
            		}
            	}
            	if (isset($row['car_id']) && isset($row['car_status'])){
            		$row['car_status']=$this->getCarStatus($row['car_id']);
            		$row['paiche_list']=$this->getPaicheList($row['car_id']);
            	}
            	if (isset($row['car_id']) && isset($row['car_insuranceDate'])){
            		$row['car_insuranceDate']= ($row['car_insuranceDate']>0?date("Y-m-d",$row['car_insuranceDate']):"");
            		$row['car_insuranceList']=$this->getList("SELECT * FROM `car_insurance` WHERE `car_id`=".$row['car_id']." ORDER BY insurance_type Desc,insurance_start Desc");
            	}
            	if (isset($row['car_id']) && isset($row['car_positionDate'])){
            		$row['car_positionDate'] = ($row['car_positionDate']>0? date("Y-m-d",$row['car_positionDate']):"");
            		$row['car_gpsList']=$this->getList("SELECT * FROM `car_gps` WHERE `car_id`=".$row['car_id']." ORDER BY gps_serial");
            	}
            	if (isset($row['sim_id'])){
            		$row['sim_inmoneyList']=$this->getList("SELECT * FROM `car_gps_sim_inmoney` WHERE `sim_id`=".$row['sim_id']." ORDER BY buy_date");
            	}
            	if (isset($row['gps_start'])){
            		$row['gps_start']= ($row['gps_start']>0?date("Y-m-d",$row['gps_start']):"");
            	}
            	if (isset($row['car_id']) && $paiche_startDate>0){
            		$datelist="";
					$sql1="SELECT paiche_startDate,paiche_endDate FROM `paiche` where paicheCar=".$row["car_id"]." AND ((paiche_startDate<=$paiche_startDate and paiche_endDate>=$paiche_startDate and paiche_endDate<=$paiche_endDate) or (paiche_startDate<=$paiche_startDate and paiche_endDate>=$paiche_endDate) or (paiche_startDate>=$paiche_startDate and paiche_startDate<=$paiche_endDate and paiche_endDate>=$paiche_endDate) or (paiche_startDate>=$paiche_startDate and paiche_startDate<=$paiche_endDate and paiche_endDate>=$paiche_startDate and paiche_endDate<=$paiche_endDate)) and (paiche_status=0 or paiche_status=1) and paiche_recycle=0";
					if (($result1 = $this->_db->query($sql1)))
					{
						while ( ($row1 = $this->_db->fetchrow($result1)) )
						{
							$s=strtotime(date("Y-m-d",$row1["paiche_startDate"]));
							$e=strtotime(date("Y-m-d",$row1["paiche_endDate"]));
							if ($s<$paiche_startDate) $s=$paiche_startDate;
							if ($e>$paiche_endDate) $e=$paiche_endDate;
							$diff=($e-$s)/86400;
							for ($j=0;$j<=$diff;$j++){
								$datelist.=date("m-d",$s+$j*24*3600).",";
							}
						}
					}
					$this->_db->freeresult($result1);
					$row["datelist"]=$datelist;
            	}
            	if (isset($row['car_id']) && isset($row['car_price'])){
            		//取汽车照片
            		$sql1="SELECT `images` FROM `car_images` WHERE car_id=".$row["car_id"];
            		if (($result1 = $this->_db->query($sql1)))
					{
						if(($row1 = $this->_db->fetchrow($result1)))
						{
							$row['car_photo'] = $row1['images'];
						}
					}
					$this->_db->freeresult($result1);
					//取当前司机
            		if ($row['car_status_code']==1){
            			$sql1="SELECT c.`emp_name`,a.`paicheDriver` FROM `paiche` AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId LEFT JOIN `emp` AS c ON a.`paicheDriver`=c.`emp_id` WHERE a.paicheCar=".$row["car_id"]." AND a.paiche_status=1 AND b.settle_totalKm<=0 AND a.paiche_recycle=0";
            			if (($result1 = $this->_db->query($sql1)))
						{
							if(($row1 = $this->_db->fetchrow($result1)))
							{
								$row['car_status_code']=1;
								$row['siji'] = $row1['emp_name'];
								$row['drive'] = $row1['paicheDriver'];
							}
						}
						$this->_db->freeresult($result1);
						if ($row['car_status_code']==1 && $row['drive']>0){//有出车而且有驾驶员  取驾驶员照片
							$sql1="SELECT `images` FROM `emp_images` WHERE emp_id=".$row["drive"];
		            		if (($result1 = $this->_db->query($sql1)))
							{
								if(($row1 = $this->_db->fetchrow($result1)))
								{
									$row['drive_photo'] = $row1['images'];
								}
							}
							$this->_db->freeresult($result1);
						}
            		}
            	}
            	if ($searchstatus==9 || $searchstatus==$row['car_status_code']){
            		if (isset($row['car_id'])){
            			if ($carid!=$row['car_id']){//过滤重复记录
            				$list[] = $row;
            				$carid=$row['car_id'];
            			}
            		}else{
            			$list[] = $row;
            		}
              		
            	}
            	
            }
        }
		$this->_db->freeresult($result);
		
		return $list;
	}
	
	function getListBySql2($start,$per_page,$sql='')
	{
		$list = null;
		if(($result = $this->_db->query($sql." LIMIT $start,$per_page")))
        {
        	$carid=0;
            while ( ($row11 = $this->_db->fetchrow($result)) )
            {
            	if(isset($row11['car_saleDate'])){
            		$row11['car_saleDate'] = ($row11['car_saleDate']>0?date("Y-m-d",$row11['car_saleDate']):"");
            	}
            	if (isset($row11['car_cartDate'])){
            		$row11['car_cartDate']= ($row11['car_cartDate']>0?date("Y-m-d",$row11['car_cartDate']):"");
            	}
            	if (isset($row11['car_lastmaintDate'])){
            		$row11['car_lastmaintDate']= ($row11['car_lastmaintDate']>0?date("Y-m-d",$row11['car_lastmaintDate']):"");
            		
            		$sql="Select c.option_name,a.maintenance_date FROM `car_maintenance` as a Inner Join car_maint_item as b On a.maintenance_id=b.fitting_maintid Inner Join zn_options as c ON b.item_id=c.option_id WHERE a.car_id=".$row11['car_id']." ORDER BY maintenance_date";
	            	$row11['car_maintItemList']=$this->getList($sql);
	            	
	            	$sql="Select * FROM `car_maintenance` WHERE car_id=".$row11['car_id']." ORDER BY maintenance_date Desc";
	            	$row11['car_maintList']=$this->getList($sql);
            	}
            	if (isset($row11['car_lastcarefulDate'])){
            		$row11['car_lastcarefulDate']= ($row11['car_lastcarefulDate']>0?date("Y-m-d",$row11['car_lastcarefulDate']):"");
            		
            		$sql="Select * FROM `car_yearcareful` WHERE car_id=".$row11['car_id']." ORDER BY careful_date Desc";
	            	$row11['car_carefulList']=$this->getList($sql);
            	}
            	if (isset($row11['car_nextcarefulDate'])){
            		$row11['car_nextcarefulDate']= ($row11['car_nextcarefulDate']>0?date("Y-m-d",$row11['car_nextcarefulDate']):"");
            		
            	}
            	
            	$list[] = $row11;
            }
        }
		$this->_db->freeresult($result);
		return $list;
	}
	
	function getCarList($start,$per_page,$sql='',$searchstatus=9){
		//print_r($sql)exit;;
		$list = null;
		
		if(($result = $this->_db->query($sql." LIMIT $start,$per_page")))
        {
        	$carid=0;
            while ( ($row = $this->_db->fetchrow($result)) )
            {
            	if ($row['car_status']==2){
            		$row['car_status_code']=2;
            		$row['car_status']="维修";
            	}else{
            		$row['car_status_code']=empty($row['car_status_code'])?0:$row['car_status_code'];
            		$row['car_status']=$row['car_status_code']==1?"租用":"空闲";
            	}
            	//取当前司机
            	if ($row['car_status_code']==1){
            			
            			$sql1="SELECT c.emp_name,aa.paicheDriver,c.emp_image FROM `paiche` as aa Inner Join settle as bb on aa.paiche_id =bb.settlePaicheId LEFT JOIN `emp` AS c ON aa.`paicheDriver`=c.`emp_id` where aa.paiche_recycle!=1 AND IFNULL( aa.paiche_aaa,'')<>'补单' AND aa.paicheCar =".$row["car_id"]." AND (aa.paiche_status=0 or aa.paiche_status=1) AND aa.paiche_type IN (4,5) AND aa.paiche_startDate<=".time(). " AND aa.paiche_endDate>=".time().
			   					" Union All ".
			   					"SELECT c.emp_name,aa.paicheDriver,c.emp_image FROM `paiche` as aa Inner Join settle as bb on aa.paiche_id =bb.settlePaicheId LEFT JOIN `emp` AS c ON aa.`paicheDriver`=c.`emp_id` where aa.paiche_recycle!=1 AND IFNULL( aa.paiche_aaa,'')<>'补单' AND aa.paicheCar =".$row["car_id"]." AND (aa.paiche_status=0 or aa.paiche_status=1) AND aa.paiche_type=2 AND aa.paiche_startDate<=".time(). " AND bb.settle_totalKm<=0";
		
            			if (($result1 = $this->_db->query($sql1)))
						{
							if(($row1 = $this->_db->fetchrow($result1)))
							{
								$row['car_status_code']=1;
								$row['siji'] = $row1['emp_name'];
								$row['drive'] = $row1['paicheDriver'];
								$row['drive_photo'] = $row1['emp_image'];
							}
						}
						$this->_db->freeresult($result1);
            	}
            	if ($searchstatus==9 || $searchstatus==$row['car_status_code']){
            		if (isset($row['car_id'])){
            			if ($carid!=$row['car_id']){//过滤重复记录
            				$list[] = $row;
            				$carid=$row['car_id'];
            			}
            		}else{
            			$list[] = $row;
            		}
            	}
            }
        }
		$this->_db->freeresult($result);
		//print_r($list);exit;
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
	
    function updatebreak($sql){
    	return $this->_db->query($sql);
    }

	function getPaicheList($c_id,$e_id=0,$subwhere='0')
	{
		$list2 = null;
		if (empty($c_id)){
			$w="a.paicheDriver={$e_id}";
		}else{
			$w="(a.paicheCar={$c_id} OR a.paiche_id in (Select distinct changecarPaicheId From changecar Where changecar_carA={$c_id} OR changecar_carB={$c_id}))";
		}
		$sql="SELECT a.paiche_id,a.paiche_contractNum,a.paiche_startDate,a.paiche_endDate,a.paiche_linker,a.paiche_linkerPhone,a.paiche_personal,a.paiche_status,a.paiche_type,b.settle_totalKm,b.settle_endDate,b.settle_losses,f.client_name,g.item_name ".
			 "FROM `paiche` AS a LEFT JOIN `settle` AS b ON a.paiche_id=b.settlePaicheId 
			 LEFT JOIN `client` AS f ON a.paicheCom=f.client_id 
			 LEFT JOIN item AS g ON a.paiche_type=g.item_paicheType 
			 WHERE a.paiche_recycle!=1 AND a.paiche_status>=0 AND {$w} AND a.paiche_type in ({$subwhere}) ORDER BY a.paiche_startDate DESC LIMIT 0,50";

		if (($result2 = $this->_db->query($sql)))
		{
			while ( ($row2 = $this->_db->fetchrow($result2)) )
			{
				$row2['paiche_startDate']=date("Y-m-d H:i:s",$row2['paiche_startDate']);
				$row2['paiche_endDate']=($row2['settle_totalKm']>0?date("Y-m-d H:i:s",$row2['settle_endDate']) : date("Y-m-d H:i:s",$row2['paiche_endDate']));
				if ($row2['paiche_status']==0){//预约未开始
						$row2["paiche_status_name"]="预约";
					}else if($row['paiche_status']==-1){//违约
						$row2["paiche_status_name"]="违约";
					}else if($row['paiche_status']==-2){//取消
						$row2["paiche_status_name"]="取消";
					}else{//已经运行
						if ($row2['paiche_type']==1 || $row2['paiche_type']==2){//临时
							if ($row2['settle_totalKm']==0){//未还车
								$row2["paiche_status_name"]="未还车";
							}else{//已还车
								if ($row2['settle_losses']==2){
									$row2["paiche_status_name"]="已结";
								}else{
									$row2["paiche_status_name"]="未结账";
								}
							}
						}else{//长期
							if ($row2['settle_losses']==1){
								$row2["paiche_status_name"]="未结账";
							}else if ($row2['settle_losses']==2){
								$row2["paiche_status_name"]="已结";
							}else{//未还车
								$row2["paiche_status_name"]="未还车";
							}
						}
					}
				$list2[] = $row2;
			}
		}
		
		$this->_db->freeresult($result2);
		return $list2;
	}

	function getCarStatus($c_id)
	{
		$re = null;		
		//判断当前时间内是否有预约或者派车记录
		$sql="SELECT paicheCar FROM `paiche` WHERE paicheCar={$c_id} AND paiche_startDate<=".time()." AND paiche_endDate>=".time()." AND (paiche_status=0 or paiche_status=1) AND paiche_recycle=0";
		if(($result = $this->_db->query($sql)))
		{
			if(($row = $this->_db->fetchrow($result))){
				$re=1;
			}else{
				$re=0;
			}
		}
		
		$this->_db->freeresult($result);
		return $re;
	}
	
	function getList($sql='')
	{
		$list = null;
		if( ($result = $this->_db->query($sql)) )
		{
			while ( ($row22 = $this->_db->fetchrow($result)) )
			{
				if (isset($row22['car_cartDate'])){
            		$row22['car_cartDate']= ($row22['car_cartDate']>0?date("Y-m-d",$row22['car_cartDate']):"");
            	}
            	if(isset($row22['car_saleDate'])){
            		$row22['car_saleDate'] = ($row22['car_saleDate']>0?date("Y-m-d",$row22['car_saleDate']):"");
            	}
				if (isset($row22['insurance_start'])){
            		$row22['insurance_start']= ($row22['insurance_start']>0?date("Y-m-d",$row22['insurance_start']):"");
            	}
            	if(isset($row22['insurance_end'])){
            		if (!empty($row22['insurance_end'])&&$row22['insurance_end']<strtotime(date("Y-m-d"))){//已过期
            			$row22['insurance_over']=1;
            		}else{
            			$row22['insurance_over']=0;
            		}
            		$row22['insurance_end'] = ($row22['insurance_end']>0?date("Y-m-d",$row22['insurance_end']):"");
            	}
				if (isset($row22['gps_installDate'])){
            		$row22['gps_installDate']= ($row22['gps_installDate']>0?date("Y-m-d",$row22['gps_installDate']):"");
            	}
				if (isset($row22['gps_start'])){
            		$row22['gps_start']= ($row22['gps_start']>0?date("Y-m-d",$row22['gps_start']):"");
            	}
            	if(isset($row22['gps_end'])){
            		$row22['gps_end'] = ($row22['gps_end']>0?date("Y-m-d",$row22['gps_end']):"终身");
            	}
            	if (isset($row22['maintenance_date'])){
            		$row22['maintenance_date']= ($row22['maintenance_date']>0?date("Y-m-d",$row22['maintenance_date']):"");
            	}
				if (isset($row22['maintenance_id']) && isset($row22['maintenance_date'])){
            		
            		$row22['fitting_list']=$this->getList("SELECT * FROM `car_maint_fitting` WHERE `fitting_maintid`=".$row22['maintenance_id']);
            		$sql="Select a.option_id,b.item_id from zn_options as a Left Join (Select * From car_maint_item Where fitting_maintid=".$row22['maintenance_id'].") b On a.option_id=b.item_id Order by option_order";
            		$row22['item_list']=$this->getList($sql);
            	}
				if (isset($row22['next_date'])){
            		$row22['next_date']= ($row22['next_date']>0?date("Y-m-d",$row22['next_date']):"");
            	}
            	if (isset($row22['car_id']) && isset($row22['car_num'])){
            		$row22['car_name']="苏D".$row22['car_num']."-".$row22['car_color']."-".$row22['car_brand']."-".$row22['car_type'];
            	}
				if (isset($row22['careful_date'])){
            		$row22['careful_date']= ($row22['careful_date']>0?date("Y-m-d",$row22['careful_date']):"");
            	}
            	$list[] = $row22;
			}
		}
		
		$this->_db->freeresult($result);
		return $list;
	}
}
?>