<?php
class ModelJucan extends Model

{
	var $table = array("name"=>"paiche","key"=>"paiche_id");
	var $emp=array();var $shop=array();
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

	function store($data,$table=''){
		if(!$this->_db->insertObject(empty($table)?$this->table["name"]:$table,$data)){
			return false;
		}else{
			return $this->_db->insertid();
		}
	}

	
	function deletecharge($aid){
		$sql = "DELETE FROM `paiche_charges` WHERE `id`='{$aid}'";
		return $this->_db->query($sql);
	}
	function deleteitem($aid,$table='paiche_items'){
		$sql = "DELETE FROM {$table} WHERE `id`='{$aid}'";
		return $this->_db->query($sql);
	}

	function update($data,$id,$table='',$sql=''){
		if (empty($sql)){
			return $this->_db->updateObject(empty($table)?$this->table["name"]:$table,$data,$id);
		}else{
			return $this->_db->query($sql);
		}
	}


	
	function getEmp_name($emp_id){
		$data=$this->emp;
		$emp_name="";
		for($i=0;$i<count($data);$i++){
			if($data[$i]['emp_id']==$emp_id){
				$emp_name=$data[$i]['emp_name'];
				break;
			}
		}
		return $emp_name;
	}
	function getShop_name($shop_id){
		$data=$this->shop;
		$shop_name="";
		for($i=0;$i<count($data);$i++){
			if($data[$i]['shop_id']==$shop_id){
				$shop_name=$data[$i]['shop_name'];
				break;
			}
		}
		return $shop_name;
	}
	


	function getList($start,$per_page,$where='1',$order='1')
	{
		$index=0;
		$list = null;
		$sql="SELECT a.*,b.settle_totalKm,b.settle_losses,b.settle_end,b.settle_overKmMoney,b.settle_overKmMoney_have,".
			 "b.settle_overTimeMoney,b.settle_overTimeMoney_have,b.settle_waitTimeMoney,b.settle_waitTimeMoney_have,b.settle_favor,b.settle_vio,c.emp_name AS yewuyuan,cc.shop_name as ywshopname,d.emp_name AS siji,".
			 "e.car_num,ee.car_num as car_num2,f.client_name,g.item_name,h.shunt_rent,h.shunt_rented,h.shunt_end,h.shunt_balance,h.shunt_money,".
			 "h.shunt_endtimes,h.shunt_other,j.bro_name,k.settle_favor as settle_favor_m,k.settle_infact,k.settle_billMoney_have,m.shop_name,n.emp_name AS jiedaiyuan,o.name as paiche_pintainame ".
			 "FROM `{$this->table['name']}` AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId ".
			 "LEFT JOIN emp AS c ON a.paicheCounterMan=c.emp_id ".
			 "LEFT JOIN shop AS cc ON a.paicheCounterShop=cc.shop_id ".
			 "LEFT JOIN emp AS d ON a.paicheDriver=d.emp_id ".
			 "LEFT JOIN car AS e ON a.paicheCar=e.car_id ".
			 "LEFT JOIN car AS ee ON a.paicheCar2=ee.car_id ".
			 "LEFT JOIN client AS f ON a.paicheCom=f.client_id ".
			 "LEFT JOIN item AS g ON a.paiche_type=g.item_paicheType ".
			 "LEFT JOIN shunt AS h ON a.paiche_id=h.shuntPaicheId ".
			 "LEFT JOIN brothers AS j ON a.paiche_brother=j.bro_id ".
			 "LEFT JOIN paiche_month as k ON a.paiche_id=k.monthPaicheId ".
			 "LEFT JOIN shop AS m ON a.paiche_shopid=m.shop_id ".
			 "LEFT JOIN emp AS n ON a.paicheServerMan=n.emp_id ".
			 "LEFT JOIN pintai AS o ON a.paiche_pintaiid=o.id ".
			 "WHERE {$where}  ORDER BY {$order} LIMIT $start,$per_page";
		//print_r($sql);exit;
		if( ($result = $this->_db->query($sql)) )
		{
			while ( ($row = $this->_db->fetchrow($result)) )
			{
					if ($row['paiche_status']==0){//预约未开始
						$row['zhuangtai']="预约单";
					}else if($row['paiche_status']==-1){//违约
						$row['zhuangtai']="违约单";
					}else if($row['paiche_status']==-2){//取消
						$row['zhuangtai']="取消单";
					}else{//已经运行
							if ($row['settle_totalKm']==0){//未还车
								if($row['paiche_endDate']<time()){
									$row['zhuangtai']="调车超时未还车";
								}else{
									$row['zhuangtai']="调车正常未还";
								}
							}else{
								if($row['settle_losses']!=2){
									$row['zhuangtai']="已还车未结账";
								}else{
									$row['zhuangtai']="已结账";
								}
							}
						
					}
				
				
				$row['paiche_startDate'] = $row['paiche_startDate']>0 ? date("Y-m-d",$row['paiche_startDate']) :"-";
				$row['paiche_endDate'] = $row['paiche_endDate']>0 ? date("Y-m-d",$row['paiche_endDate']) : "—";

				//合同约定
				$row['paiche_itemlist']=$this->getItemList($row['paiche_id']);
				//金额明细
				$row['paiche_chargelist']=$this->getChargeList($row['paiche_id']);
				//违章情况
				$row['paiche_breaklist']=$this->getBreakList($row['paiche_id']);
				//换车情况
				$row['paiche_changelist']=$this->getChangList($row['paiche_id']);
				$list[] = $row;
			}
		}		
		$this->_db->freeresult($result);
		return $list;
	}
	function get_chaoshiweihuan(){
		$list=null;
		$sql="select a.* from paiche as a left join settle as b on a.paiche_id=b.settlePaicheId where a.paiche_status=1 and b.settle_totalKm<=0 and a.paiche_recycle!=1 AND a.paiche_type = 1  AND b.settle_losses<2 and paiche_endDate < ".time();
		if(($result = $this->_db->query($sql)))
        {
            while ( ($row = $this->_db->fetchrow($result)) )
            {
            	
				$list[] = $row;
            }
        }
		$this->_db->freeresult($result);
		return count($list);
	}
	
	function getTotal($where=1,$sql="")
	{
		$list = null;
        if (empty($sql)){
			$sql = "SELECT COUNT(*) AS total FROM `{$this->table['name']}` AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId 
					LEFT JOIN shunt AS h ON a.paiche_id=h.shuntPaicheId LEFT JOIN car AS e ON a.paicheCar=e.car_id 
					LEFT JOIN car AS ee ON a.paicheCar2=ee.car_id LEFT JOIN client AS f ON a.paicheCom=f.client_id 
					LEFT JOIN admin_users AS n ON a.paicheDispatchMan=n.username WHERE {$where}";
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
	function getTotal_2($where=1,$sql_0="")
	{
		$list = null;
        
		$sql = "SELECT COUNT(*) AS total FROM `{$this->table['name']}` AS a LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId ".
			"Inner Join ({$sql_0}) as kk On a.paiche_id=kk.paiche_id ".
			"LEFT JOIN shunt AS h ON a.paiche_id=h.shuntPaicheId LEFT JOIN car AS e ON a.paicheCar=e.car_id ".
			"LEFT JOIN client AS f ON a.paicheCom=f.client_id WHERE {$where}";
        
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
	
	
	function getBusinessInfo($uid,$single=0)
	{
		$list = null;

		$sql="SELECT a.*,b.*,".
			 "c.emp_name AS yewuyuan,c.emp_phone AS yewuyuan_phone,d.emp_name AS siji,d.emp_phone,e.car_num,e.car_color,e.car_brand,e.car_model,e.car_motor,e.car_price,ee.car_num as car_num2,f.client_name,f.client_balance,h.shunt_rent,h.shunt_rented,h.shunt_other,h.shunt_endcode,h.shunt_money,j.bro_name,".
			 "kk.total_conv_money,kk.total_in_money,mm.total_in_money2,nn.total_month_money,m.shop_name,m.shop_phone,n.emp_name AS jiedaiyuan ".
			 "FROM `{$this->table['name']}` AS a 
			 LEFT JOIN settle AS b ON a.paiche_id=b.settlePaicheId ".
			 "LEFT JOIN (SELECT paiche_id,SUM(a.conv_money) AS total_conv_money,SUM(a.have_in_money) AS total_in_money FROM `paiche_charges` AS a INNER JOIN `charges` AS b ON a.`charge_id`=b.`charge_id` WHERE b.`charge_isback`=0 Group by paiche_id) as kk ON a.paiche_id=kk.paiche_id ".
			 "LEFT JOIN (SELECT paiche_id,SUM(have_in_money) AS total_in_money2 FROM `paiche_items` GROUP by paiche_id) as mm ON a.paiche_id=mm.paiche_id ".
			 "LEFT JOIN (SELECT monthPaicheId,SUM(settle_infact-settle_billFavor) AS total_month_money FROM `paiche_month` GROUP by monthPaicheId) as nn ON a.paiche_id=nn.monthPaicheId ".
			 "LEFT JOIN emp AS c ON a.paicheCounterMan=c.emp_id ".
			 "LEFT JOIN shop AS cc ON a.paicheCounterShop=cc.shop_id ".
			 "LEFT JOIN emp AS d ON a.paicheDriver=d.emp_id ".
			 "LEFT JOIN car AS e ON a.paicheCar=e.car_id ".
			 "LEFT JOIN car AS ee ON a.paicheCar2=ee.car_id ".
			 "LEFT JOIN client AS f on a.paicheCom=f.client_id ".
			 "LEFT JOIN shunt AS h ON a.paiche_id=h.shuntPaicheId ".
			 "LEFT JOIN brothers AS j ON a.paiche_brother=j.bro_id ".
			 "LEFT JOIN shop AS m ON a.paiche_shopid=m.shop_id ".
			 "LEFT JOIN emp AS n ON a.paicheServerMan=n.emp_id ".
			 "WHERE a.paiche_id='{$uid}'";
		
		if(($result = $this->_db->query($sql)))
		{
			if(($row = $this->_db->fetchrow($result)))
			{
				
				if ($row['paiche_startDate']>0){
					$row['paiche_startHour']=date("H",$row['paiche_startDate']);
					$row['paiche_startMinute']=date("i",$row['paiche_startDate']);
					$row['paiche_startDate_format']=date("Y-m-d",$row['paiche_startDate']);
					$row['paiche_startDate_All']=date("Y-m-d H:i:s",$row['paiche_startDate']);
				}
				if ($row['paiche_endDate']>0){
					$row['paiche_endHour']=date("H",$row['paiche_endDate']);
					$row['paiche_endMinute']=date("i",$row['paiche_endDate']);
					$row['paiche_endDate_format']=date("Y-m-d",$row['paiche_endDate']);
					$row['paiche_endDate_All']=date("Y-m-d H:i:s",$row['paiche_endDate']);
				}
				if ($row['paiche_startDate']>0 && $row['paiche_endDate']>0){
					$row['paiche_day']=round(($row['paiche_endDate']-$row['paiche_startDate'])/86400);
				}else{
					$row['paiche_day']=0;
				}

				if ($row['paiche_checkTimes']>0){
					$row['paiche_checkTimes']=date("Y-m-d H:i:s",$row['paiche_checkTimes']);
				}
				$row['settle_endDate']=$row['settle_endDate']>0? date("Y-m-d H:i:s",$row['settle_endDate']):'';
				
				if ($single==1 && ($row['paiche_shunt']==1 || $row['paiche_brother']>0)){//调车情况
					$row['paiche_shuntline']=$this->getShuntLine($row['paiche_id']);
				}
				
				$aa=0;
				if ($single==1 && $row['settle_losses']==2){//已结账计算订单收入
					if ($row['paiche_type']==1 || $row['paiche_type']==2)
					{
						$bb=$row['settle_overKmMoney_have']+$row['settle_overTimeMoney_have']+$row['settle_waitTimeMoney_have'];
						if ($row['paiche_brother']>0){//调车公司用我们
							$aa=$bb-$row['shunt_rent']-$row['shunt_other'];
						}elseif($row['paiche_shunt']==1){//我们用调车公司的车
							$aa=$row['total_conv_money']-$row['shunt_rent'];
						}else{//无调车
							$aa=$row['total_in_money']+$row['total_in_money2']+$bb-$row['settle_favor'];
						}
					}else{
						$aa=$row['total_month_money'];
					}
				}
				$row['paiche_income']=$aa;
				if ($row['paiche_type']==2 && ($row['paicheCom']==11 || $row['paicheCom']==12)){
					$row['paiche_clientprice']=$this->getEmpList("*"," AND `client_id` like '%".$row['paicheCom']."%'","client_price");
				}
				$linkerPhone_hid=$this->hidchar($row['paiche_linkerPhone']);
				$linker_hid=$this->hidchar('',$row['paiche_linker'],'');
				$linkerNum_hid=$this->hidchar('','',$row['paiche_linkerNum']);
				$row['paiche_linkerPhone_hid']=$linkerPhone_hid;
				$row['paiche_linker_hid']=$linker_hid;
				$row['paiche_linkerNum_hid']=$linkerNum_hid;
				
				if ($row['paiche_status']==0){//预约未开始
					$row['paiche_linkerPhone_hid']=$row['paiche_linkerPhone'];
					$row['paiche_linker_hid']=$row['paiche_linker'];
					$row['paiche_linkerNum_hid']=$row['paiche_linkerNum'];
				}else{//已经运行
					if ($row['paiche_type']==1 || $row['paiche_type']==2){//临时
						if ($row['settle_totalKm']==0){//未还车
							$row['paiche_linkerPhone_hid']=$row['paiche_linkerPhone'];
							$row['paiche_linker_hid']=$row['paiche_linker'];
							$row['paiche_linkerNum_hid']=$row['paiche_linkerNum'];
						}
					}else{//长期
						if ($row['settle_losses']==1){//挂账
						}else if ($row['settle_losses']==2){//已结账
						}else{//未还车
							$row['paiche_linkerPhone_hid']=$row['paiche_linkerPhone'];
							$row['paiche_linker_hid']=$row['paiche_linker'];
							$row['paiche_linkerNum_hid']=$row['paiche_linkerNum'];
						}
					}
				}
				if ($_SESSION['shopid']!=$row['paiche_shopid']){
					$row['paiche_linkerPhone_hid']=$linkerPhone_hid;
					$row['paiche_linker_hid']=$linker_hid;
					$row['paiche_linkerNum_hid']=$linkerNum_hid;					
				}
				if (strstr($_SESSION['a_permissions'],'searchphonecode')){
					$row['paiche_linkerPhone_hid']=$row['paiche_linkerPhone'];
					$row['paiche_linker_hid']=$row['paiche_linker'];
					$row['paiche_linkerNum_hid']=$row['paiche_linkerNum'];
				}
				$list = $row;
			}
		}
		
		$this->_db->freeresult($result);
		return $list;
	}
	function getBusinessIncome($pid,$ptype)
	{
		$re=0;
		if ($ptype==1 || $ptype==2){
			$sql="SELECT SUM(a.have_in_money) AS total FROM `paiche_charges` AS a INNER JOIN `charges` AS b ON a.`charge_id`=b.`charge_id` WHERE a.`paiche_id`={$pid} AND b.`charge_isback`=0 ";
			if(($result = $this->_db->query($sql)))
			{
				if(($row = $this->_db->fetchrow($result)))
				{
					$re += $row['total'];
				}
			}
			$this->_db->freeresult($result);
			$sql="SELECT SUM(have_in_money) AS total FROM `paiche_items` WHERE `paiche_id`={$pid}";
			if(($result = $this->_db->query($sql)))
			{
				if(($row = $this->_db->fetchrow($result)))
				{
					$re += $row['total'];
				}
			}
			$this->_db->freeresult($result);
			
		}else{
			$sql="SELECT SUM(settle_infact) AS total FROM `paiche_month` WHERE `monthPaicheId`={$pid}  ";
			if(($result = $this->_db->query($sql)))
			{
				if(($row = $this->_db->fetchrow($result)))
				{
					$re += $row['total'];
				}
			}
			$this->_db->freeresult($result);
		}
		
		
		return $re;
	}



	function getChargeList($pid,$where='',$pids='')
	{
		
		$list = null;
		$sql = "SELECT a.`id`,a.`charge_id`,a.`conv_money`,a.`back_money`,a.`status`,b.`charge_name`,a.`have_in_money`,a.have_back_money,a.have_freeze_money,c.`paiche_contractNum`,a.payments_id,a.bank_id,a.continuerent_start,a.continuerent_end FROM `paiche_charges` AS a INNER JOIN `charges` AS b ON a.`charge_id`=b.`charge_id` LEFT JOIN `paiche` AS c ON a.`paiche_id`=c.`paiche_id` WHERE ".(empty($pids)?"a.`paiche_id`={$pid}":"a.`paiche_id` IN ({$pids})")." {$where} ORDER BY a.`charge_id`,a.id";
		//print_r($sql);exit;
		if(($result = $this->_db->query($sql)))
        {
            while ( ($row = $this->_db->fetchrow($result)) )
            {
            	$row['continuerent_start'] = $row['continuerent_start']>0 ? date("Y-m-d H:i",$row['continuerent_start']) :"";
            		$row['continuerent_end'] = $row['continuerent_end']>0 ? date("Y-m-d H:i",$row['continuerent_end']) :"";
                $list[] = $row;
            }
        }
		$this->_db->freeresult($result);
		return $list;
	}




	
	function getChangList($pid,$where='')
	{
		$list = null;
		$sql = "SELECT a.*,b.car_num as carA,c.car_num as carB FROM `changecar` AS a LEFT JOIN `car` AS b ON a.changecar_carA=b.car_id LEFT JOIN `car` AS c ON a.changecar_carB=c.car_id WHERE a.`changecarPaicheId`={$pid} {$where}";
		if(($result = $this->_db->query($sql)))
        {
            while ( ($row = $this->_db->fetchrow($result)) )
            {
            	$row['changecar_times_all']=date("Y-m-d H:i:s",$row['changecar_times']);
            	$row['changecar_times']=date("Y-m-d",$row['changecar_times']);
            	
                $list[] = $row;
            }
        }
		$this->_db->freeresult($result);
		return $list;
	}
	function getItemList($pid,$where='',$pids='')
	{
		$list = null;
		$sql = "SELECT a.`id`,a.`item_id`,a.`conv_result`,a.`item_fact`,a.`conv_money`,a.`have_in_money`,b.`item_name`,b.`item_type`,b.`item_options`,b.`item_calcu`,b.`item_caltype`,b.`item_unit`,b.`item_costname`,c.`paiche_contractNum` FROM `paiche_items` AS a INNER JOIN `items` AS b ON a.`item_id`=b.`item_id` LEFT JOIN `paiche` AS c ON a.`paiche_id`=c.`paiche_id` WHERE ".(empty($pids)?"a.`paiche_id`={$pid}":"a.`paiche_id` IN ({$pids})")." {$where} ORDER BY b.`item_order`,a.`item_id`";
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
	function getOutcarNum($pid)
	{
		$re = null;
        if (empty($sql)){
			$sql = "SELECT COUNT(*) AS total FROM `paiche_drive` WHERE `drivePaicheId`={$pid} AND `drive_account`!=1";
        }
		if(($result = $this->_db->query($sql)))
		{
			if(($row = $this->_db->fetchrow($result)))
			{
				$re = $row['total'];
			}
		}
		
		$this->_db->freeresult($result);
		return $re;
	}
	
	function findBreakListbyPid($pid,$busiInfo)//根据派车单找出符合条件的未冻结违章记录
	{
		$list = null;
		$ischange=0;
		//先判断是否有换车
		$sql="Select * From changecar Where changecarPaicheId={$pid} Order by changecar_times";
		if(($result = $this->_db->query($sql)))
        {
        	if(($row = $this->_db->fetchrow($result)))//有换车
        	{
        		$ischange=1;
        	}
        }
		$this->_db->freeresult($result);
		
		$sql="";
        if ($ischange==1){//有换车
        		$sd=$busiInfo['paiche_startDate'];
        		$result = $this->_db->query("Select * From changecar Where changecarPaicheId={$pid} Order by changecar_times");
	        	while ( ($row = $this->_db->fetchrow($result)) )
	            {
	            	$c_id=$row['changecar_carA'];
					$sdate=$sd;
					$edate=$row['changecar_times'];
					$sql_1="Select a.*,b.car_num From breakrules as a Left Join car as b on a.breakrules_CarId=b.car_id Where breakrules_DriverID=0 AND breakrulesPaicheId=0 AND breakrules_CarId={$c_id} AND breakrules_date>={$sdate} AND breakrules_date<={$edate}";
					$sql.=$sql_1." UNION All ";
					$sd=$row['changecar_times'];
	            }
	            $this->_db->freeresult($result);
	            //当前车辆
	            $c_id=$busiInfo['paicheCar'];
	            $sdate=$sd;
	            $edate=empty($busiInfo['settle_endDate'])? $busiInfo['paiche_endDate'] : strtotime($busiInfo['settle_endDate']);//取实际还车时间
	            $sql.="Select a.*,b.car_num From breakrules as a Left Join car as b on a.breakrules_CarId=b.car_id Where breakrules_DriverID=0 AND breakrulesPaicheId=0 AND breakrules_CarId={$c_id} AND breakrules_date>={$sdate} AND breakrules_date<={$edate}";
	            
        }else{//无换车,找当前车辆
        	$c_id=$busiInfo['paicheCar'];
			$sdate=$busiInfo['paiche_startDate'];
			$edate=empty($busiInfo['settle_endDate'])? $busiInfo['paiche_endDate'] : strtotime($busiInfo['settle_endDate']);//取实际还车时间
        	$sql="Select a.*,b.car_num From breakrules as a Left Join car as b on a.breakrules_CarId=b.car_id Where breakrules_DriverID=0 AND breakrulesPaicheId=0 AND breakrules_CarId={$c_id} AND breakrules_date>={$sdate} AND breakrules_date<={$edate} Order by breakrules_date";
        }
        if(($result = $this->_db->query($sql)))
        {
            while ( ($row = $this->_db->fetchrow($result)) )
            {
	            if (isset($row['breakrules_date'])){
            		$row['breakrules_date']= ($row['breakrules_date']>0?date("Y-m-d H:i:s",$row['breakrules_date']):"");
            	}
                $list[] = $row;
            }
        }
		
		return $list;
		
	}
	function getBreakList($pid,$where='')//获取派车单的违章记录-已冻结
	{
		$list = null;
		$sql = "SELECT a.*,b.car_num FROM breakrules as a Left Join car as b on a.breakrules_CarId=b.car_id WHERE breakrulesPaicheId={$pid} {$where} ORDER BY breakrules_date";
		if(($result = $this->_db->query($sql)))
        {
            while ( ($row = $this->_db->fetchrow($result)) )
            {
            	$row['breakrules_date']=date("Y-m-d H:i:s",$row['breakrules_date']);
            	$row['breakrules_end']=($row['breakrules_end']==0?"未处理":"已处理");
            	$row['breakrules_times']=date("Y-m-d H:i:s",$row['breakrules_times']);
            	$row['breakrules_endtimes']=$row['breakrules_endtimes']==0?"" : date("Y-m-d H:i:s",$row['breakrules_endtimes']);
                $list[] = $row;
            }
        }
		$this->_db->freeresult($result);
		return $list;
	}
	
	function getShuntLine($pid,$where='',$pids='')
	{
		$list = null;
		$sql = "SELECT a.*,b.`bro_name` FROM `shunt` AS a INNER JOIN `brothers` AS b ON a.`shuntCom`=b.`bro_id`  WHERE ".(empty($pids)?"a.`shuntPaicheId`={$pid}":"a.`shuntPaicheId` IN ({$pids})")." {$where} ";
		if(($result = $this->_db->query($sql)))
        {
            if ( ($row = $this->_db->fetchrow($result)) )
            {
                $list = $row;
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
            	if ($table=="car"){
            		$row['car_name']="苏D".$row['car_num']."-".$row['car_color']."-".$row['car_brand']."-".$row['car_type'];
            	}
            	if ($table=="continuerent"){
            		$row['continuerent_times']=date("Y-m-d H:i",$row['continuerent_times']);
            		$row['continuerent_start'] = $row['continuerent_start']>0 ? date("Y-m-d H:i",$row['continuerent_start']) :"-";
            		$row['continuerent_end'] = $row['continuerent_end']>0 ? date("Y-m-d H:i",$row['continuerent_end']) :"-";
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

	function delete($aid,$sql='')
	{
		if ($sql==''){
			$sql = "DELETE FROM `{$this->table['name']}` WHERE `{$this->table['key']}`='{$aid}'";
	        $result = $this->_db->query($sql);
	        $sql = "DELETE FROM `paiche_charges` WHERE `paiche_id`='{$aid}'";
	        $result = $this->_db->query($sql);
	        $sql = "DELETE FROM `paiche_items` WHERE `paiche_id`='{$aid}'";
	        $result = $this->_db->query($sql);
	        $sql = "DELETE FROM `paiche_drive` WHERE `drivePaicheId`='{$aid}'";
			return $this->_db->query($sql);
		}else{
			return $this->_db->query($sql);
		}
        
	}

	function getRow($uid,$sql='')
	{
		$list = null;
		if (empty($sql)){
		$sql = "SELECT * FROM `{$this->table['name']}` WHERE  `{$this->table['key']}` ='{$uid}'";
		}

		if(($result = $this->_db->query($sql)))
		{
			if(($row = $this->_db->fetchrow($result)))
			{
				if (isset($row['changecar_times'])){
				$row['changecar_times']=date("Y-m-d H:i:s",$row['changecar_times']);
				}
				if (isset($row['contract_startDate'])){
					$row['contract_startDate']=date("Y-m-d",$row['contract_startDate']);
					$row['contract_endDate']=date("Y-m-d",$row['contract_endDate']);
				}if (isset($row['settle_billDate'])){
					$row['settle_billDate'] = $row['settle_billDate']>0 ? date("Y-m-d",$row['settle_billDate']) : "";
				}
            	if (isset($row['changecar_startdate'])){
            		$row['changecar_startdate'] =empty($row['changecar_startdate'])?"": date("Y-m-d",$row['changecar_startdate']);
            	}
				$list = $row;
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

    function getcategory($where=''){
    	$list = null;
		$sql = "SELECT `item_paicheType`,`item_name` FROM `item` {$where}";
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
	
    function getClientList($client_name)
    {
    	$list = null;
    	$sql="select `client_id`,`client_name`,`client_Mlinker`,`client_Mphone`,`client_balance` from `client` where `client_name` like '%".$client_name."%'";
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
    
    function checkHoliday()
    {
    	
    	return 0;
    }

	function getTmpList($sql='')
	{
		$arr_result=array();
		if( ($result = $this->_db->query($sql)) )
		{
			while ( ($row = $this->_db->fetchrow($result)) )
			{	
				
				$arr_result[$row['item_id']] = $row['conv_result'];
			}
		}
		
		$this->_db->freeresult($result);
		return $arr_result;
	}
	


	
	function getListBySql($sql='',$where='')
	{
		$list = null;
		if(($result = $this->_db->query($sql)))
        {
            while ( ($row = $this->_db->fetchrow($result)) )
            {
				if (isset($row['paiche_shopid']) && isset($row['paiche_linkerPhone']) && isset($row['paiche_status'])){
					$linkerPhone_hid=$this->hidchar($row['paiche_linkerPhone'],'','');
					$linker_hid=$this->hidchar('',$row['paiche_linker'],'');
					$linkerNum_hid=$this->hidchar('','',$row['paiche_linkerNum']);
					$row['paiche_linkerPhone_hid']=$linkerPhone_hid;
					$row['paiche_linker_hid']=$linker_hid;
					$row['paiche_linkerNum_hid']=$linkerNum_hid;
					if ($row['paiche_status']==0){//预约未开始
						$row['paiche_linkerPhone_hid']=$row['paiche_linkerPhone'];
						$row['paiche_linker_hid']=$row['paiche_linker'];
						$row['paiche_linkerNum_hid']=$row['paiche_linkerNum'];
					}else{//已经运行
						if ($row['paiche_type']==1 || $row['paiche_type']==2){//临时
							if ($row['settle_totalKm']==0 && $row['paiche_shunt']==0){//未还车
								$row['paiche_linkerPhone_hid']=$row['paiche_linkerPhone'];
								$row['paiche_linker_hid']=$row['paiche_linker'];
								$row['paiche_linkerNum_hid']=$row['paiche_linkerNum'];
							}else{//已还车
							}
						}else{//长期
							if ($row['settle_losses']==1){
							}else if ($row['settle_losses']==2){
							}else{//未还车
								$row['paiche_linkerPhone_hid']=$row['paiche_linkerPhone'];
								$row['paiche_linker_hid']=$row['paiche_linker'];
								$row['paiche_linkerNum_hid']=$row['paiche_linkerNum'];
							}
						}
					}
					if ($_SESSION['shopid']!=$row['paiche_shopid']){
						$row['paiche_linkerPhone_hid']=$linkerPhone_hid;
						$row['paiche_linker_hid']=$linker_hid;
						$row['paiche_linkerNum_hid']=$linkerNum_hid;
					}
				}
            	if (isset($row['changeroute_times'])){
            		$row['changeroute_times']=date("Y-m-d H:i:s",$row['changeroute_times']);
            	}
            	if (isset($row['add_time'])){
            		$row['add_time']=date("Y-m-d H:i:s",$row['add_time']);
            	}
            	if (isset($row['contract_startDate'])){
					$row['contract_startDate']=date("Y-m-d",$row['contract_startDate']);
					$row['contract_endDate']=date("Y-m-d",$row['contract_endDate']);
					//取派车单
					//$row['contract_paiche']=$this->getList(0,20," paiche_parent=".$row['contract_id']);
				}
            	if (isset($row['paiche_startDate'])){
            		$row['paiche_startDate'] = $row['paiche_startDate']>0 ? date("Y-m-d H:i:s",$row['paiche_startDate']) :"-";
					$row['paiche_endDate'] = $row['paiche_endDate']>0 ? date("Y-m-d H:i:s",$row['paiche_endDate']) : "—";
					//合同约定
					$row['paiche_itemlist']=$this->getItemList($row['paiche_id']);
					$row['paiche_chargelist']=$this->getChargeList($row['paiche_id'],$where);
					//违章情况
					$row['paiche_breaklist']=$this->getBreakList($row['paiche_id']);
            	}
            	if (isset($row['breakrules_date'])){
            		$row['breakrules_date']= ($row['breakrules_date']>0?date("Y-m-d H:i:s",$row['breakrules_date']):"");
            	}
                $list[] = $row;
            }
        }
		$this->_db->freeresult($result);
		return $list;
	}


	function getSearchList($start,$per_page,$where='1',$order='1')
	{
		$list = null;
		
		$sql="SELECT a.*,b.settle_totalKm,b.settle_losses,b.settle_end,b.settle_overKmMoney,b.settle_overKmMoney_have,".
			 "b.settle_overTimeMoney,b.settle_overTimeMoney_have,b.settle_favor,c.emp_name AS yewuyuan,cc.shop_name as ywshopname,d.emp_name AS siji,".
			 "e.car_num,f.client_name,g.item_name,h.shunt_rent,h.shunt_rented,h.shunt_end,h.shunt_money,".
			 "h.shunt_other,j.bro_name,m.shop_name,n.emp_name AS jiedaiyuan ".
			 "FROM `{$this->table['name']}` AS a INNER JOIN settle AS b ON a.paiche_id=b.settlePaicheId ".
			 "LEFT JOIN emp AS c ON a.paicheCounterMan=c.emp_id ".
			 "LEFT JOIN shop AS cc ON a.paicheCounterShop=cc.shop_id ".
			 "LEFT JOIN emp AS d ON a.paicheDriver=d.emp_id ".
			 "LEFT JOIN car AS e ON a.paicheCar=e.car_id ".
			 "LEFT JOIN client AS f ON a.paicheCom=f.client_id ".
			 "LEFT JOIN item AS g ON a.paiche_type=g.item_paicheType ".
			 "LEFT JOIN shunt AS h ON a.paiche_id=h.shuntPaicheId ".
			 "LEFT JOIN brothers AS j ON a.paiche_brother=j.bro_id  ".
			 "LEFT JOIN shop AS m ON a.paiche_shopid=m.shop_id ".
			 "LEFT JOIN emp AS n ON a.paicheServerMan=n.emp_id ".
			 "WHERE {$where}  ORDER BY {$order} LIMIT $start,$per_page";
		//echo $sql;exit;

		if( ($result = $this->_db->query($sql)) )
		{
			while ( ($row = $this->_db->fetchrow($result)) )
			{
				//业务状态颜色
					$linkerPhone_hid=$this->hidchar($row['paiche_linkerPhone'],'','');
					$linker_hid=$this->hidchar('',$row['paiche_linker'],'');
					$linkerNum_hid=$this->hidchar('','',$row['paiche_linkerNum']);
					$row['paiche_linkerPhone_hid']=$linkerPhone_hid;
					$row['paiche_linker_hid']=$linker_hid;
					$row['paiche_linkerNum_hid']=$linkerNum_hid;
					$row["paiche_status_color"]="#FFFFFF";
					$row["paiche_font_color"]="#000000";
					$row["paiche_status_name"]="";
					if ($row['paiche_status']==0){//预约未开始
						$row["paiche_status_color"]="#0000FF";
						$row["paiche_font_color"]="#FFFFFF";
						$row["paiche_status_name"]="预约";
						$row['paiche_linkerPhone_hid']=$row['paiche_linkerPhone'];
						$row['paiche_linker_hid']=$row['paiche_linker'];
						$row['paiche_linkerNum_hid']=$row['paiche_linkerNum'];
					}else if($row['paiche_status']==-1){//违约
						$row["paiche_status_color"]="#f000f6";
						$row["paiche_font_color"]="#FFFFFF";
						$row["paiche_status_name"]="违约";
					}else if($row['paiche_status']==-2){//取消
						$row["paiche_status_color"]="#008489";
						$row["paiche_font_color"]="#FFFFFF";
						$row["paiche_status_name"]="取消";
					}else{//已经运行
						if ($row['paiche_type']==1 || $row['paiche_type']==2){//临时
							if ($row['settle_totalKm']==0 && $row['paiche_shunt']==0){//未还车
								$row["paiche_status_color"]="#30ff00";//正在运行中
								$row["paiche_font_color"]="#000000";
								$row["paiche_status_name"]="未还车";
								$row['paiche_linkerPhone_hid']=$row['paiche_linkerPhone'];
								$row['paiche_linker_hid']=$row['paiche_linker'];
								$row['paiche_linkerNum_hid']=$row['paiche_linkerNum'];
							}else{//已还车
								if ($row['settle_losses']==2){
									$row["paiche_status_color"]="#00FF8F";//已结账
									$row["paiche_font_color"]="#000000";
									$row["paiche_status_name"]="已结";
								}else{
									$row["paiche_status_color"]="#e00024";//未结账
									$row["paiche_font_color"]="#FFFFFF";
									$row["paiche_status_name"]="未结账";
								}
							}
						}else{//长期
							if ($row['settle_losses']==1){
								$row["paiche_status_color"]="#e00024";//挂账
								$row["paiche_font_color"]="#FFFFFF";
								$row["paiche_status_name"]="未结账";
							}else if ($row['settle_losses']==2){
								$row["paiche_status_color"]="#00FF8F";//已结账
								$row["paiche_font_color"]="#000000";
								$row["paiche_status_name"]="已结";
							}else{//未还车
								$row["paiche_status_color"]="#30ff00";//正在运行中
								$row["paiche_font_color"]="#000000";
								$row["paiche_status_name"]="未还车";
								$row['paiche_linkerPhone_hid']=$row['paiche_linkerPhone'];
								$row['paiche_linker_hid']=$row['paiche_linker'];
								$row['paiche_linkerNum_hid']=$row['paiche_linkerNum'];
							}
						}
					}
				if ($_SESSION['shopid']!=$row['paiche_shopid']){
					$row['paiche_linkerPhone_hid']=$linkerPhone_hid;
					$row['paiche_linker_hid']=$linker_hid;
					$row['paiche_linkerNum_hid']=$linkerNum_hid;
				}
				if (strstr($_SESSION['a_permissions'],'searchphonecode')){
					$row['paiche_linkerPhone_hid']=$row['paiche_linkerPhone'];
					$row['paiche_linker_hid']=$row['paiche_linker'];
					$row['paiche_linkerNum_hid']=$row['paiche_linkerNum'];
				}
				$row['paiche_startDate'] = $row['paiche_startDate']>0 ? date("Y-m-d H:i:s",$row['paiche_startDate']) :"-";
				$row['paiche_endDate'] = $row['paiche_endDate']>0 ? date("Y-m-d H:i:s",$row['paiche_endDate']) : "—";
				$row['paiche_dispatchTimes'] = $row['paiche_dispatchTimes']>0 ? date("Y-m-d",$row['paiche_dispatchTimes']) : "—";
								
				//合同约定
				//$row['paiche_itemlist']=$this->getItemList($row['paiche_id']);
				//金额明细

				$row['paiche_chargelist']=$this->getChargeList($row['paiche_id']);
				//违章情况
				//$row['paiche_breaklist']=$this->getBreakList($row['paiche_id']);
				//换车情况
				//$row['paiche_changelist']=$this->getChangList($row['paiche_id']);
				//改变行程情况
				//$row['paiche_routelist']=$this->getListBySql("Select * From `changeroute` Where changeroutePaicheId=".$row['paiche_id']);
				//出车记录数
				//$row['paiche_outcarnum']=$this->getOutcarNum($row['paiche_id']);
				
				//if ($row['paiche_shunt']==1){//调车情况
					//$row['paiche_shuntline']=$this->getShuntLine($row['paiche_id']);
				//}
				
				
				$list[] = $row;
			}
		}		
		//print_r($list);exit;


		$this->_db->freeresult($result);
		return $list;
	}
	function hidtel($phone)
	{
		$userid=$_SESSION['a_uid'];
		if ($userid ==24 || $userid ==26){
			return $phone;
			exit();
		}
		if (strlen($phone)==8){//无区号固定电话
			return substr($phone,0,2)."****".substr($phone,6,2);
		}else{
			$IsWhat = preg_match('/(0[0-9]{2,3}[\-]?[2-9][0-9]{6,7}[\-]?[0-9]?)/i',$phone); //固定电话
	    	if($IsWhat == 1){
	        	return preg_replace('/(0[0-9]{2,3}[\-]?[2-9])[0-9]{3,4}([0-9]{3}[\-]?[0-9]?)/i','$1****$2',$phone);
	     	}else{
	         	return preg_replace('/(1[34578]{1}[0-9])[0-9]{4}([0-9]{4})/i','$1****$2',$phone);
	     	}
		}
    	
	}
	function getPriceList($carid,$days){
		$sql="Select plan_name,plan_day,plan_rent,plan_rentamount,plan_deposit1,plan_deposit2 
			  From car_price Where car_id={$carid} AND (start_Date=0 OR start_Date<=".time().") AND (end_Date=0 OR end_Date+86400>".time().") 
			  Order by plan_day";
		$arr_result=$list=array();
		$amount=$price=0;
		if( ($result = $this->_db->query($sql)) )
		{
			while ( ($row = $this->_db->fetchrow($result)) )
			{	
				$price=$row['plan_rent'];
				if ($days>=$row['plan_day']){
					$amount=$row['plan_rentamount']+($days-$row['plan_day'])*$row['plan_rent'];
				}
				$list[] = $row;
			}
			if ($amount==0) $amount=$days*$price;
		}
		$this->_db->freeresult($result);
		$arr_result[0]=$list;
		$arr_result[1]=$amount;
		return $arr_result;
		
	}
	function hidchar($phone='',$name='',$idcard=''){
		$sre='';
		if ($phone){
			$sre=mb_substr($phone,0,4,"UTF-8").str_pad('',strlen($phone)-4,"*");
		}
		if ($idcard){
			$sre=mb_substr($idcard,0,6,"UTF-8").str_pad('',strlen($idcard)-6,"*");
		}
		if ($name){
			$sre=mb_substr($name,0,1,"UTF-8")."**";
		}
		return $sre;
	}
}
?>