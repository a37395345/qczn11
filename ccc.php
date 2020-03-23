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
	
		
	mysql_select_db("qczn", $conn);
	mysql_query("set names utf8;");	
	
	$minprice=0;
	$sql="Select car_id From car ";
	$result=mysql_query($sql,$conn);
	while($resultArray=mysql_fetch_row($result)){
		$car_id=$resultArray[0];
		$sql="Select min(plan_rentamount) as total from car_price where car_id={$car_id} and plan_day=1";
		$tmp=mysql_query($sql,$conn);
		$reArray=mysql_fetch_row($tmp);
		$minprice=is_null($reArray[0])?0:$reArray[0];
		$sql="Update car Set car_price={$minprice} Where car_id={$car_id}";
		mysql_query($sql,$conn);
    }
	mysql_close($conn);
	
	echo 'ok-'.date("Y-m-d H:i:s");
	
?>