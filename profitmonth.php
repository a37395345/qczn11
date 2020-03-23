<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>
<?php
//header("Content-type:text/html;charset=utf-8");
ini_set('date.timezone','Asia/Shanghai');

echo 'start-'.date("Y-m-d H:i:s");
	$host="localhost";
	$user="aaa";
	$pwd="root";
	//链接数据库
	$conn = mysql_connect($host,$user,$pwd);
	//对连接进行判断
	if(!$conn){
	    echo '数据库连接失败';
	    exit();

	}
	$auto=$_REQUEST['auto'] ? $_REQUEST['auto']:0;
	$nowyear=$_REQUEST['year'] ? $_REQUEST['year']:date("Y");//年
	$nowmonth=$_REQUEST['month'] ? $_REQUEST['month']:date("m");//月
	$nowmonth=$nowmonth-1;

	$sdate=$nowyear."-".$nowmonth."-01";

	

	$edate=$nowmonth==12 ? intval($nowyear+1)."-01-01":$nowyear."-".intval($nowmonth+1)."-01";

	$lastday=date("d",strtotime("{$edate} -1 day"));
	
	$startdate=strtotime($sdate);
	$enddate=strtotime($edate);
	$nowdate=date("Y-m-d");
	
	$income=$carincome=$spending=$carout=$depreciation=0;
	
	mysql_select_db("qczn", $conn);
	mysql_query("set names utf8;");	
	
		//业务收入
		$sql_00="SELECT a.paiche_id,Count(*) AS total_count FROM `account_log` AS a 
				 WHERE a.`bill_type`=0 AND a.paiche_id>0 AND a.money<0 AND a.name in ('收租金','租车结账收款','收续租金','租车违约收违约金','租车违约退租金') 
				 AND a.add_time>={$startdate} AND a.add_time<{$enddate} GROUP BY a.paiche_id";
		$sql_01="SELECT a.paiche_id,SUM(a.money) AS total_money FROM `account_log` AS a 
				 WHERE a.`bill_type`=0 AND a.paiche_id>0 AND a.name in ('收租金','租车结账收款','收续租金','租车违约收违约金','租车违约退租金') 
				 AND a.add_time>={$startdate} AND a.add_time<{$enddate} GROUP BY a.paiche_id";
		
		//临时自驾收入
		$sql_1="Select SUM(IF(h.shunt_type=1,0,d.total_money)-IFNULL(h.shunt_rent,0)) AS total_money ".
			 "FROM `paiche` AS c INNER JOIN ({$sql_01}) d ON c.paiche_id=d.paiche_id ".
			 "LEFT JOIN ({$sql_00}) f ON c.paiche_id=f.paiche_id ".
			 "LEFT JOIN shunt AS h ON c.paiche_id=h.shuntPaicheId ".
			 "Where c.paiche_type=1 AND (c.paiche_status>=0 OR c.paiche_status=-1)";
		
		//临时代驾--现结
		$sql_2="Select Sum(d.total_money) AS total_money FROM `paiche` AS c INNER JOIN settle AS e ON c.paiche_id=e.settlePaicheId ".
			 "INNER JOIN ({$sql_01}) d ON c.paiche_id=d.paiche_id ".
			 "LEFT JOIN ({$sql_00}) f ON c.paiche_id=f.paiche_id ".
			 "Where c.paiche_type=2 AND (c.paiche_status>=0 OR c.paiche_status=-1)";// AND e.settle_lossescode='' --考虑到长期单位现结的情况

		//临时代驾--批结
		$sql_22="SELECT SUM(a.money) AS total_money FROM `account_log` AS a Left Join paiche_month b ON a.bill_code = b.month_code
				 WHERE a.`bill_type`=5 AND a.name ='临时用车批量结账' AND a.add_time>={$startdate} AND a.add_time<{$enddate}";
		
		//调车结算
		$sql_21="SELECT SUM(a.money) AS total_money FROM `account_log` AS a 
				 WHERE a.`bill_type`=6 AND a.brother_id<>0 AND a.name ='调车结账' AND a.add_time>={$startdate} AND a.add_time<{$enddate}";
			
		//长期
		$sql_02="SELECT a.paiche_id,SUM(a.money) AS total_money FROM `account_log` AS a 
				 WHERE a.`bill_type`=0 AND a.paiche_id>0 AND (a.name ='长期用车月结' OR a.name ='租车违约收违约金') 
				 AND a.add_time>={$startdate} AND a.add_time<{$enddate} GROUP BY a.paiche_id";
		$sql_12="SELECT a.paiche_id,Count(*) AS total_count FROM `account_log` AS a 
				 WHERE a.`bill_type`=0 AND a.paiche_id>0 AND (a.name ='长期用车月结' OR a.name ='租车违约收违约金') 
				 AND a.add_time>={$startdate} AND a.money<0 AND a.add_time<{$enddate} GROUP BY a.paiche_id";
		
		$sql_3="Select Sum(d.total_money) AS total_money FROM `paiche` AS c ".
			 "INNER JOIN ({$sql_02}) d ON c.paiche_id=d.paiche_id Inner Join paiche_month e ON c.paiche_id=e.monthPaicheId ".
			 "LEFT JOIN ({$sql_12}) f ON c.paiche_id=f.paiche_id ".
			 "Where c.paiche_type=3 AND (c.paiche_status>=0 OR c.paiche_status=-1)";
		$sql_4="Select SUM(d.total_money) AS total_money FROM `paiche` AS c ".
			 "INNER JOIN ({$sql_02}) d ON c.paiche_id=d.paiche_id Inner Join paiche_month e ON c.paiche_id=e.monthPaicheId ".
			 "LEFT JOIN ({$sql_12}) f ON c.paiche_id=f.paiche_id ".
			 "Where c.paiche_type=4 AND (c.paiche_status>=0 OR c.paiche_status=-1)";
		
		$sql_5="Select SUM(d.total_money) AS total_money FROM `paiche` AS c ".
			 "INNER JOIN ({$sql_02}) d ON c.paiche_id=d.paiche_id Inner Join paiche_month e ON c.paiche_id=e.monthPaicheId ".
			 "LEFT JOIN ({$sql_12}) f ON c.paiche_id=f.paiche_id ".
			 "Where c.paiche_type=5 AND (c.paiche_status>=0 OR c.paiche_status=-1)";
		//其他收入
		$sql_6="Select SUM(a.money) AS total_money FROM `account_log` AS a 
				WHERE a.`bill_type`=3 AND a.add_time>={$startdate} AND a.add_time<{$enddate}";
		$sql="Select Sum(total_money) as total_money ".
			   "From ({$sql_1} Union All {$sql_2} Union All {$sql_22} Union All {$sql_21} Union All {$sql_3} Union All {$sql_4} Union All {$sql_5} Union All {$sql_6}) kk ";
			
	$result=mysql_query($sql,$conn);
	$resultArray=mysql_fetch_row($result);
	$income=is_null($resultArray[0])?0:$resultArray[0];
	//卖车收入
	$sql="Select SUM(money) AS total_money FROM account_log WHERE bill_type=3 AND account_type='卖车及报废收入' AND add_time>={$startdate} AND add_time<{$enddate}";
	$result=mysql_query($sql,$conn);
	$resultArray=mysql_fetch_row($result);
	$carincome=is_null($resultArray[0])?0:$resultArray[0];
	//支出&买车款（不含购置税）
	$sql="Select Sum(total_money1) as total_money1,Sum(total_money2) as total_money2 From (".
		 "Select baoxiao_roadQiao+baoxiao_oil+baoxiao_room+baoxiao_meal+baoxiao_stopCar+baoxiao_money as total_money1,0 as total_money2 From baoxiao Where baoxiao_isOver=1 AND baoxiao_isOverTime>={$startdate} AND baoxiao_isOverTime<{$enddate} and baoxiao_type not in('打款蒋政') ".
		 "Union all ".
		 "Select 0 as total_money1,baoxiao_money as total_money2 From baoxiao Where baoxiao_isOver=1 AND baoxiao_isOverTime>={$startdate} AND baoxiao_isOverTime<{$enddate} and baoxiao_type ='购买车辆费用') kk";
	$result=mysql_query($sql,$conn);
	$resultArray=mysql_fetch_row($result);
	$spending=is_null($resultArray[0])?0:$resultArray[0];
	$carout=is_null($resultArray[1])?0:$resultArray[1];
	
	//车辆折旧(按60个月) 每月倒数第二天晚上计算或者最后一天实时刷新计算或者当前时间已经超过最后一天了
	if (($auto==0 && date("d")==$lastday-1) || ($auto==1) || ($auto==2 && $enddate<=time())){
		$sql="Select round(sum(car_infactamount)/60,2) as total_money From car Where car_recycle!=1 and car_saleDate<{$enddate} and (car_status in (0,1,2) or (car_status=3 and car_cancelDate>={$enddate}))";
		$result=mysql_query($sql,$conn);
		$resultArray=mysql_fetch_row($result);
		$depreciation=is_null($resultArray[0])?0:$resultArray[0];
	}
	$addtime=date("Y-m-d H:i:s");
	$sql="select * from finance_profit Where year={$nowyear} and month={$nowmonth}";
	$tmp=mysql_query($sql,$conn);
	if (mysql_num_rows($tmp)!=0){
		$sql="Update finance_profit Set income={$income},carincome={$carincome},spending={$spending},carout={$carout},depreciation={$depreciation},addtime='{$addtime}' Where year={$nowyear} and month={$nowmonth}";
	}else{
		$sql="Insert Into finance_profit(year,month,income,carincome,spending,carout,depreciation,addtime) Values({$nowyear},{$nowmonth},{$income},{$carincome},{$spending},{$carout},{$depreciation},'{$addtime}')";
	}
	mysql_query($sql,$conn);
	
	//取每月基准利润
	$sql="Select val From sys_config Where obj_name='BASE_PROFIT' And obj_property='{$nowyear}'";
	$result=mysql_query($sql,$conn);
	$resultArray=mysql_fetch_row($result);
	$base_profit=is_null($resultArray[0])?0:floatval($resultArray[0])/12;
	//计算员工收益
	$profit=0;
	if ($auto==0){//计算当月的
		$sql="Select emp_id,percent,id From finance_profit_emp Where percent>0 And startyear={$nowyear} And startmonth<={$nowmonth} endmonth>={$nowmonth}";
		$result=mysql_query($sql,$conn);
		while($resultArray=mysql_fetch_row($result)){
			$percent=$resultArray[1];
			if (date("d")==$lastday-1){//每月倒数第二天晚上计算
				$profit=$percent*($income-$carincome-$spending+$carout-$depreciation-$base_profit)/100;
			}else{
				$profit=0;
			}
			$sql="select * from finance_profit_emp_detail Where year={$nowyear} and month={$nowmonth} and emp_id=".$resultArray[0];
			$tmp=mysql_query($sql,$conn);
			if (mysql_num_rows($tmp)!=0){
				$sql="Update finance_profit_emp_detail Set percent={$percent},profit={$profit} Where year={$nowyear} and month={$nowmonth} and emp_id=".$resultArray[0];
			}else{
				$sql="Insert Into finance_profit_emp_detail(emp_id,year,month,percent,profit) Values(".$resultArray[0].",{$nowyear},{$nowmonth},{$percent},{$profit})";
			}
			mysql_query($sql,$conn);
			//$sql="Update finance_profit_emp Set profit=profit+{$profit} Where id=".$resultArray[2];
			//mysql_query($sql,$conn);
		}
	}
	if ($auto==1){//计算全部的
		//取月份利润
		$arrProfit=array();
		$sql="select month,income-carincome-spending+carout-depreciation as profit from finance_profit Where year={$nowyear} Order by month";
		$tmp=mysql_query($sql,$conn);
		while($resultArray=mysql_fetch_row($tmp)){
			$arrProfit[$resultArray[0]]=$resultArray[1]-$base_profit;
		}
		
		$sql="Select emp_id,percent,startyear,startmonth,endyear,endmonth,id From finance_profit_emp Where percent>0";
		$result=mysql_query($sql,$conn);
		while($resultArray=mysql_fetch_row($result)){
			$empid=$resultArray[0];
			$percent=$resultArray[1];
			$syear=$resultArray[2];
			$smonth=$resultArray[3];
			$eyear=$resultArray[4];
			$emonth=$resultArray[5];
			//$sql="Update finance_profit_emp Set profit=0 Where id=".$resultArray[6];
			//mysql_query($sql,$conn);
			for ($i=1; $i<=$nowmonth; $i++)
			{
				if (($syear<$nowyear || ($syear==$nowyear && $smonth<=$i)) && ($eyear==0 || $eyear>=$nowyear) && ($emonth==0 || $emonth>=$i)){
					if (date("d")==$lastday || $i<$nowmonth){
						$profit=$percent*$arrProfit[$i]/100;
					}else{
						$profit=0;
					}
					$sql="select * from finance_profit_emp_detail Where year={$nowyear} and month={$i} and emp_id={$empid}";
					$tmp=mysql_query($sql,$conn);
					if (mysql_num_rows($tmp)!=0){
						$sql="Update finance_profit_emp_detail Set percent={$percent},profit={$profit} Where year={$nowyear} and month={$i} and emp_id={$empid}";
					}else{
						$sql="Insert Into finance_profit_emp_detail(emp_id,year,month,percent,profit) Values({$empid},{$nowyear},{$i},{$percent},{$profit})";
					}
					mysql_query($sql,$conn);
					//$sql="Update finance_profit_emp Set profit=profit+{$profit} Where id=".$resultArray[6];
					//mysql_query($sql,$conn);
				}
			}
		}
	}
	mysql_close($conn);
	
	echo 'ok-'.date("Y-m-d H:i:s");
	if ($auto==1){
		echo "<script language='javascript' type='text/javascript'>";
		echo "location.href='result.html'";
		echo "</script>";
	}
?>