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
	$nowyear=date("Y");
	$nowmonth=date("m");
		
	mysql_select_db("qczn", $conn);
	mysql_query("set names utf8;");	
	
	//取月份利润
	$arrProfit=array();
	$sql="select month,income-carincome-spending+carout-depreciation as profit from finance_profit Where year={$nowyear} Order by month";
	$tmp=mysql_query($sql,$conn);
	while($resultArray=mysql_fetch_row($tmp)){
		$arrProfit[$resultArray[0]]=$resultArray[1];
	}
	
	//计算员工收益
	$profit=0;
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
		mysql_query($sql,$conn);
		for ($i=1; $i<=$nowmonth; $i++)
		{
			if (($syear<$nowyear || ($syear==$nowyear && $smonth<=$i)) && ($eyear==0 || $eyear>=$nowyear) && ($emonth==0 || $emonth>=$i)){
				$profit=$percent*$arrProfit[$i]/100;
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
	mysql_close($conn);
	
	echo 'ok-'.date("Y-m-d H:i:s");
	if ($auto==1){
		echo "<script language='javascript' type='text/javascript'>";
		echo "location.href='result.html'";
		echo "</script>";
	}
?>