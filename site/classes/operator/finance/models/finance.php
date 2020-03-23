<?php
class ModelFinance extends Model
{
	function __construct()
	{
		parent::__construct();
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
	

	
	function getInfo($uid,$sql='')
	{
		$list = null;
		if (empty($sql)){
			$sql="SELECT a.*,b.paiche_startDate,b.paiche_endDate,b.paiche_line,b.paicheDispatchMan,c.emp_name,cc.emp_name as auditor_empname,d.shop_name,kk.payment_name,kk.bank_name 
			 FROM `baoxiao` AS a LEFT JOIN `paiche` AS b ON a.baoxiaoPaicheContractNum=b.paiche_contractNum 
			 LEFT JOIN `emp` AS c ON a.baoxiao_emp=c.emp_id Left Join shop as d ON a.shop_id=d.shop_id 
			 LEFT JOIN `emp` AS cc ON a.baoxiao_auditor=cc.emp_id 
			 Left Join (Select a.bill_id,d.payment_name,b.bank_name From account_log as a LEFT JOIN `banks` AS b ON a.bank_id=b.bank_id 
			 LEFT JOIN `payments` AS d ON a.payments_id=d.payment_id Where bill_type=1 Or bill_type=4) as kk ON a.baoxiao_id=kk.bill_id
			 WHERE a.`baoxiao_id`={$uid}";
		}
		
		if(($result = $this->_db->query($sql)))
		{
			if(($row = $this->_db->fetchrow($result)))
			{
				if (isset($row['borrow_times'])){
            		$row['borrow_times'] = date("Y-m-d H:i:s",$row['borrow_times']);
            	}
				if (isset($row['borrow_date'])){
            		$row['borrow_date'] = date("Y-m-d",$row['borrow_date']);
            	}
				if (isset($row['refuel_date'])){
            		$row['refuel_date'] = date("Y-m-d",$row['refuel_date']);
            	}
				if (isset($row['baoxiao_date'])){
            		$row['baoxiao_date'] = date("Y-m-d",$row['baoxiao_date']);
            	}
				if (isset($row['baoxiao_oil_date'])){
            		$row['baoxiao_oil_date'] = $row['baoxiao_oil_date']>0 ? date("Y-m-d",$row['baoxiao_oil_date']) : "";
            	}
				if (isset($row['leave_date'])){
            		$row['leave_date'] = date("Y-m-d",$row['leave_date']);
            	}
				if (isset($row['add_time'])){
            		$row['add_time'] = date("Y-m-d H:i:s",$row['add_time']);
            	}
				if (isset($row['paiche_startDate'])){
            		$row['paiche_startDate'] = date("Y-m-d",$row['paiche_startDate']);
            	}
            	if (isset($row['paiche_endDate'])){
            		$row['paiche_endDate'] = date("Y-m-d",$row['paiche_endDate']);
            	}
				if (isset($row['baoxiao_isAgreeTime'])){
            		$row['baoxiao_isAgreeTime'] = $row['baoxiao_isAgreeTime']>0 ? date("Y-m-d H:i:s",$row['baoxiao_isAgreeTime']) : "";
            	}
				if (isset($row['baoxiao_isOverTime'])){
            		$row['baoxiao_isOverTime'] = $row['baoxiao_isOverTime']>0 ? date("Y-m-d H:i:s",$row['baoxiao_isOverTime']) : "";
            	}
				if (isset($row['baoxiao_isCheckTime'])){
            		$row['baoxiao_isCheckTime'] = $row['baoxiao_isCheckTime']>0 ? date("Y-m-d H:i:s",$row['baoxiao_isCheckTime']) : "";
            	}
            	if (isset($row['baoxiao_id'])){
            		$sql="SELECT * FROM baoxiao_images WHERE baoxiao_id=".$row['baoxiao_id'];
            		$row['baoxiao_imglist'] =$this->getList($sql);
            	}
				if (isset($row['change_type']) && $row['change_type']==1){
            		$sql="SELECT * FROM finance_images WHERE images_type='other' and finance_id=".$row['id'];
            		$row['finance_imglist'] =$this->getList($sql);
            	}
				if ($row['bill_id']){
					$sql="SELECT a.*,b.car_num,c.paiche_contractNum,c.paiche_linker,d.client_name,e.emp_name AS siji,g.item_name ".
					 "FROM `breakrules` AS a LEFT JOIN `car` AS b ON a.`breakrules_CarId`=b.`car_id` ".
					 "LEFT JOIN `paiche` AS c ON a.breakrulesPaicheId=c.paiche_id ".
					 "LEFT JOIN `client` AS d on c.`paicheCom`=d.`client_id` ".
					 "LEFT JOIN `emp` AS e ON a.breakrules_DriverID=e.emp_id ".
					 "LEFT JOIN `item` AS g ON c.paiche_type=g.item_paicheType WHERE breakrules_id=".$row['bill_id'];
					 if(($result11 = $this->_db->query($sql)))
					{
						if(($row11 = $this->_db->fetchrow($result11)))
						{
							$row11['breakrules_date']= ($row11['breakrules_date']>0?date("Y-m-d H:i:s",$row11['breakrules_date']):"");
							$row11['breakrules_times']= ($row11['breakrules_times']>0?date("Y-m-d H:i:s",$row11['breakrules_times']):"");
							
							$row['baoxiao_breakinfo']=$row11;
						}
					}
					$this->_db->freeresult($result11);
				}
				
				$list = $row;
			}
		}
		
		$this->_db->freeresult($result);
		return $list;
	}
	
	
	function getMonthInfo($uid)
	{
		$list = null;
		$sql="SELECT a.*,c.client_id,c.client_name,c.client_balance,d.client_name as client_name2,e.bro_name FROM `paiche_month` AS a ".
			 "LEFT JOIN `paiche` AS b ON a.monthPaicheId=b.paiche_id ".
			 "LEFT JOIN `client` AS c ON b.paicheCom=c.client_id ".
			 "LEFT JOIN `client` AS d ON a.month_clientid=d.client_id ".
			 "LEFT JOIN `brothers` AS e ON a.month_brotherid=e.bro_id ".
			 "WHERE a.`month_id`={$uid}";
		if(($result = $this->_db->query($sql)))
		{
			if(($row = $this->_db->fetchrow($result)))
			{
				$row['settle_billDate']=$row['settle_billDate']>0? date("Y-m-d",$row['settle_billDate']) : "";
				$list = $row;
			}
		}
		
		$this->_db->freeresult($result);
		return $list;
	}
	
	function getListBySql($start,$per_page,$sql='')
	{
		$list = null;
		if(($result = $this->_db->query($sql." LIMIT $start,$per_page")))
        {
            while ( ($row = $this->_db->fetchrow($result)) )
            {
            	if (isset($row['baoxiao_date'])){
            		$row['baoxiao_date'] = date("Y-m-d",$row['baoxiao_date']);
            	}
            	if (isset($row['baoxiao_times'])){
            		$row['baoxiao_times'] = date("Y-m-d H:i:s",$row['baoxiao_times']);
            	}
            	if (isset($row['baoxiao_isAgreeTime'])){
            		$row['baoxiao_isAgreeTime'] = date("Y-m-d H:i:s",$row['baoxiao_isAgreeTime']);
            	}
            	if (isset($row['baoxiao_isOverTime'])){
            		$row['baoxiao_isOverTime'] = date("Y-m-d H:i:s",$row['baoxiao_isOverTime']);
            	}
            	if (isset($row['baoxiao_isCheckTime'])){
            		$row['baoxiao_isCheckTime'] = $row['baoxiao_isCheckTime']>0 ? date("Y-m-d",$row['baoxiao_isCheckTime']) : "";
            	}
            	if (isset($row['paiche_startDate'])){
            		$row['paiche_startDate_format']=date("Y-m-d",$row['paiche_startDate']);
            		$row['paiche_startDate'] = date("Y-m-d H:i:s",$row['paiche_startDate']);
            	}
            	if (isset($row['paiche_endDate'])){
            		$row['paiche_endDate_format']=date("Y-m-d",$row['paiche_endDate']);
            		$row['paiche_endDate'] = date("Y-m-d H:i:s",$row['paiche_endDate']);
            	}
            	if (isset($row['add_time'])){
            		$row['add_time'] = date("Y-m-d H:i:s",$row['add_time']);
            	}
            	if (isset($row['client_id'])){
            		$row['recharge_list'] = $this->getList("SELECT * FROM `recharge` WHERE rechargeClientId=".$row['client_id']." ORDER BY recharge_remitTime desc");
            	}
            	if (isset($row['settle_billDate'])){
            		$row['settle_billDate'] = $row['settle_billDate']>0 ? date("Y-m-d",$row['settle_billDate']) : "";
            	}
            	if (isset($row['settle_startDate'])){
            		$row['settle_startDate'] = $row['settle_startDate']>0 ? date("Y-m-d",$row['settle_startDate']) : "";
            	}
            	if (isset($row['settle_endDate'])){
            		$row['settle_endDate'] = $row['settle_endDate']>0 ? date("Y-m-d",$row['settle_endDate']) : "";
            	}
            	if (isset($row['borrow_times'])){
            		$row['borrow_times'] = date("Y-m-d H:i:s",$row['borrow_times']);
            	}
            	if (isset($row['borrow_date'])){
            		$row['borrow_date'] = date("Y-m-d",$row['borrow_date']);
            	}
            	if (isset($row['borrow_isAgreeTime'])){
            		$row['borrow_isAgreeTime'] = date("Y-m-d H:i:s",$row['borrow_isAgreeTime']);
            	}
            	if (isset($row['refuel_date'])){
            		$row['refuel_date'] = date("Y-m-d",$row['refuel_date']);
            	}
            	if (isset($row['leave_date'])){
            		$row['leave_date'] = date("Y-m-d",$row['leave_date']);
            	}
            	if (isset($row['leave_isAgreeTime'])){
            		$row['leave_isAgreeTime'] = date("Y-m-d H:i:s",$row['leave_isAgreeTime']);
            	}
            	
                $list[] = $row;
            }
        }
		$this->_db->freeresult($result);
		return $list;
	}
	function getList($sql='')
	{
		$tmp=array();
		$list = null;
		if( ($result = $this->_db->query($sql)) )
		{
			while ( ($row = $this->_db->fetchrow($result)) )
			{	
				if (isset($row['recharge_remitTime'])){
            		$row['recharge_remitTime'] = date("Y-m-d H:i:s",$row['recharge_remitTime']);
            	}
            	if (isset($row['images'])){
		            if (in_array($row['images'],$tmp)){
						
					}else{
						array_push($tmp,$row['images']);
						$list[] = $row;
					}
            	}else{
					$list[] = $row;
            	}
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