<?php
class ModelBase extends Model
{
	var $table_del = array("client"=>"client_recycle",
							"brothers"=>"bro_recycle",
							"charges"=>"charge_recycle",
							"payments"=>"payment_recycle",
							"banks"=>"bank_recycle",
							"items"=>"item_recycle");
	var $table_key = array("client"=>"client_id",
							"brothers"=>"bro_id",
							"charges"=>"charge_id",
							"payments"=>"payment_id",
							"banks"=>"bank_id",
							"items"=>"item_id",
							"client_pricescheme"=>"id");
	var $table_busi = array("charges"=>"charge_business",
							"items"=>"item_business");
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
	function update_a($data,$table='',$id){
		return $this->_db->updateObject($table,$data,$id);

	}
	function update($data,$table=''){
		return $this->_db->updateObject($table,$data,$this->table_key[$table]);

	}
	function delete_a($sql)
	{
		
		return $this->_db->query($sql);
	}
	
	
	function delete($aid,$table='')
	{        
        $sql = "UPDATE `{$table}` SET `{$this->table_del[$table]}`=1 WHERE `{$this->table_key[$table]}`='{$aid}'";
		return $this->_db->query($sql);
	}
	function delete2($aid,$table='',$key='')
	{
		$sql = "DELETE FROM `{$table}` WHERE `{$key}`='{$aid}'";
		return $this->_db->query($sql);
	}
	function getList($start,$per_page,$where='',$order='',$table='')
	{
		$list = null;
		
		if ($table=="client"){
			$sql = "SELECT a.*,b.emp_name,c.shop_name FROM `$table` AS a Left Join emp AS b ON a.client_salesman=b.emp_id Left Join shop as c ON a.client_shopid=c.shop_id WHERE 1 {$where} ORDER BY {$order} LIMIT $start,$per_page";
		}else{
			$sql = "SELECT a.* FROM `$table` AS a WHERE 1 {$where} ORDER BY {$order} LIMIT $start,$per_page";
		}
		
		//var_dump($sql);
		if( ($result = $this->_db->query($sql)) )
		{
			while ( ($row = $this->_db->fetchrow($result)) )
			{	
				if ($table=="charges"){
					$row["charge_business"]=$this->getItemName($row["charge_business"]);
					$row["charge_provision"]=$row["charge_provision"]==1?"√" : "";
				}
				if ($table=="items"){
					$row["item_business"]=$this->getItemName($row["item_business"]);
					if ($row["item_calcu"]==1){
						$row["item_caltype"]=$row["item_caltype"]==0?"固定值" : "按计量单位";
					}else{
						$row["item_caltype"]="";
					}
					$row["item_calcu"]=$row["item_calcu"]==1?"√" : "";
				}
				if ($table=="client"){
					$row["contract_list"]=$this->getListbySql("SELECT `contract_id`,`contract_number` FROM `sales_contract` WHERE `contract_recycle`!=1 AND `contract_clientid`=".$row["client_id"]." ORDER BY contract_startdate");
					$row['lianxi_list']=$this->getListbySql("select * from client_lianxi where client_id=".$row["client_id"]);
				}
				$list[] = $row;
			}
		}		
		
		$this->_db->freeresult($result);
		return $list;
	}
	
	function getList_a($where='',$order='',$table='')
	{
		$list = null;
		
		if ($table=="client"){
			$sql = "SELECT a.*,b.emp_name,c.shop_name FROM `$table` AS a Left Join emp AS b ON a.client_salesman=b.emp_id Left Join shop as c ON a.client_shopid=c.shop_id WHERE 1 {$where} ORDER BY {$order} ";
		}else{
			$sql = "SELECT a.* FROM `$table` AS a WHERE 1 {$where} ORDER BY {$order} ";
		}
		
		//var_dump($sql);
		if( ($result = $this->_db->query($sql)) )
		{
			while ( ($row = $this->_db->fetchrow($result)) )
			{	
				if ($table=="charges"){
					$row["charge_business"]=$this->getItemName($row["charge_business"]);
					$row["charge_provision"]=$row["charge_provision"]==1?"√" : "";
				}
				if ($table=="items"){
					$row["item_business"]=$this->getItemName($row["item_business"]);
					if ($row["item_calcu"]==1){
						$row["item_caltype"]=$row["item_caltype"]==0?"固定值" : "按计量单位";
					}else{
						$row["item_caltype"]="";
					}
					$row["item_calcu"]=$row["item_calcu"]==1?"√" : "";
				}
				if ($table=="client"){
					$row["contract_list"]=$this->getListbySql("SELECT `contract_id`,`contract_number` FROM `sales_contract` WHERE `contract_recycle`!=1 AND `contract_clientid`=".$row["client_id"]." ORDER BY contract_startdate");
					$row['lianxi_list']=$this->getListbySql("select * from client_lianxi where client_id=".$row["client_id"]);
				}
				$list[] = $row;
			}
		}		
		
		$this->_db->freeresult($result);
		return $list;
	}
	
	function getTotal($where=1,$table='')
	{
		$list = null;
        
		$sql = "SELECT COUNT(*) AS total FROM `$table` AS a WHERE 1 {$where}";
		
		if(($result = $this->_db->query($sql))){
			if(($row = $this->_db->fetchrow($result))){
				$list = $row['total'];
			}
		}
		
		$this->_db->freeresult($result);
		return $list;
	}
		
	function getNewsInfo($uid,$table='')
	{
		$list = null;
		
		$sql = "SELECT * FROM `{$table}` WHERE `{$this->table_key[$table]}`='{$uid}'";
		
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
	
	function getItemList($pid=0,$table)
	{
		$list = null;
		$sql = "SELECT `item_paicheType`,`item_name` FROM `item` ";
		
		if(($result = $this->_db->query($sql)))
		{
			while ( ($row = $this->_db->fetchrow($result)) )
			{
				if (!empty($pid)){
                    $row['checked'] = $this->isChecked($pid, $row['item_paicheType'],$table);
                }
				$list[] = $row;
			}
		}
		$this->_db->freeresult($result);
		return $list;
	}
	function getListbySql($sql='')
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
	function getItemName($item)
	{
		$re="";
		$sql = "SELECT `item_name` FROM `item` WHERE `item_paicheType` in ({$item})";
		
		if(($result = $this->_db->query($sql)))
		{
			while ( ($row = $this->_db->fetchrow($result)) )
			{
				$re .= $row["item_name"].",";
			}
		}
		return $re;
	}
	
	function isChecked($pid, $cid,$table){
        
        $sql = "SELECT `{$this->table_busi[$table]}` FROM `{$table}` WHERE `{$this->table_key[$table]}` = '{$pid}' ";
        $result = $this->_db->query($sql);
        $row = $this->_db->fetchrow($result);
        if ($row){
            $ids = $row[$this->table_busi[$table]];
            $ids = ','.$ids.',';
            if (strpos($ids, ','.$cid.',') !== false){
                return 1;
            }else{
                return 0;
            }
        }

        return 0;
    }
}
?>