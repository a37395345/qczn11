<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>
<?php
//header("Content-type:text/html;charset=utf-8");
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
	
	$nowtime=time();
	$nowdate=date("Y-m-d");
	
	mysql_select_db("qczn", $conn);
	mysql_query("set names utf8;");	
	$sql="select * from banks_daily Where add_date='{$nowdate}'";
	$tmp=mysql_query($sql,$conn);
	if (mysql_num_rows($tmp)!=0){
		mysql_close($conn);
		echo 'have';
		exit();
	}	
	$sql="INSERT INTO banks_daily(bank_id,money,add_time,name,add_date) SELECT bank_id,SUM(money) AS money,{$nowtime} as add_time,'日结账' as name,'{$nowdate}' as add_date FROM `account_log` GROUP BY `bank_id`";
	mysql_query($sql,$conn);	
	mysql_close($conn);
	
	$conn = mysql_connect($host,$user,$pwd);
	mysql_select_db("qcdy", $conn);
	mysql_query("set names utf8;");	
	$sql="select * from banks_daily Where add_date='{$nowdate}'";
	$tmp=mysql_query($sql,$conn);
	if (mysql_num_rows($tmp)!=0){
		mysql_close($conn);
		echo 'have';
		exit();
	}	
	$sql="INSERT INTO banks_daily(bank_id,money,add_time,name,add_date) SELECT bank_id,SUM(money) AS money,{$nowtime} as add_time,'日结账' as name,'{$nowdate}' as add_date FROM `account_log` GROUP BY `bank_id`";
	mysql_query($sql,$conn);
	mysql_close($conn);
	
	echo 'ok';
?>