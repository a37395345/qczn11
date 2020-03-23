<?php

class ModelManage extends Model
{
	var $table = array("name"=>"paiche","key"=>"paiche_id");
	function __construct()
	{
		parent::__construct();
	}
	function getListBySql($sql='',$where='')
	{
		$list = null;
		if(($result = $this->_db->query($sql)))
        {
            while ( ($row = $this->_db->fetchrow($result)) )
            {
            	if (isset($row['paicheCom'])){
            	//$sql="Select a.paiche_id,a.paiche_contractNum,a.paiche_startDate,a.paiche_endDate,d.emp_name AS siji,e.car_num ".
            	//	 "From `paiche` As a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId ".
            	//	 "LEFT JOIN emp AS d ON a.paicheDriver=d.emp_id LEFT JOIN car AS e ON a.paicheCar=e.car_id Where {$where} AND a.paicheCom=".$row['paicheCom'];
				//$tmplist=$this->getListBySql($sql,'');

            	//$row['paichelist']=$tmplist;            	
				
            	}
            	if (isset($row['paiche_startDate'])){
            		$row['paiche_startDate'] = $row['paiche_startDate']>0 ? date("Y-m-d H:i:s",$row['paiche_startDate']) :"";
					$row['paiche_endDate'] = $row['paiche_endDate']>0 ? date("Y-m-d H:i:s",$row['paiche_endDate']) : "";
            	}
            	/*
            	if (isset($row['shuntCom'])){
            		$sql="Select a.paiche_id,a.paiche_contractNum,a.paiche_startDate,a.paiche_endDate,d.emp_name AS siji,e.car_num ".
            		 "From `paiche` As a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId ".
            		 "LEFT JOIN emp AS d ON a.paicheDriver=d.emp_id LEFT JOIN car AS e ON a.paicheCar=e.car_id Where a.paiche_type = 2 AND (a.paiche_shunt=1 OR a.paiche_brother=".$row['shuntCom'].") AND a.paiche_id in (Select shuntPaicheId From `shunt` Where shuntCom=".$row['shuntCom']." and shunt_end=0)";

            		$tmplist=$this->getListBySql2($sql);

            		$row['paichelist']=$tmplist;
            	}
            	*/
				$list[] = $row;
            }
        }
		$this->_db->freeresult($result);
		return $list;
	}
	function getListBySql2($sql2='')
	{
		$list2 = null;

		if(($result2 = $this->_db->query($sql2)))
        {
            while ( ($row2 = $this->_db->fetchrow($result2)) )
            {
            	if (isset($row2['paiche_startDate'])){
            		$row2['paiche_startDate'] = $row2['paiche_startDate']>0 ? date("Y-m-d H:i:s",$row2['paiche_startDate']) :"";
					$row2['paiche_endDate'] = $row2['paiche_endDate']>0 ? date("Y-m-d H:i:s",$row2['paiche_endDate']) : "";
            	}
				$list2[] = $row2;
            }
        }
		$this->_db->freeresult($result2);
		return $list2;
	}
	function getPageTitle($type){
        $list = null;

		$sql = "SELECT `item_name` FROM `item` WHERE `item_paicheType` ='{$type}'";

		if(($result = $this->_db->query($sql)))
		{
			if(($row = $this->_db->fetchrow($result)))
			{
				$list = $row["item_name"];
			}
		}

		$this->_db->freeresult($result);
		return $list;
    }
	function getTotal($where=1,$sql="")
	{
		$list = null;
        if (empty($sql)){
			$sql = "SELECT COUNT(*) AS total FROM `{$this->table['name']}` AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId LEFT JOIN shunt AS h ON a.paiche_id=h.shuntPaicheId LEFT JOIN car AS e ON a.paicheCar=e.car_id LEFT JOIN client AS f ON a.paicheCom=f.client_id WHERE {$where}";
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
}