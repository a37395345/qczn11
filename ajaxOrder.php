<?php
	$host="localhost";
	$user="aaa";
	$pwd="root";
	//链接数据库
	$conn = mysql_connect($host,$user,$pwd);
	//对连接进行判断
	if(!$conn){
	    echo json_encode(array('status'=>1));
	    exit();
	}
	
	$p = $_POST['page'];
	if(empty($p)){$p=1;}
	$per_page = 6;
	$start = ($p-1)*$per_page;
	$car_type=$_POST['cartype'];
	$car_price=$_POST['carprice'];

	$where="a.car_recycle!=1";
	if(!empty($car_type)){$where.=" AND car_type like '%".$car_type."%'";}
	if (!empty($car_price)){
		
	}
	
	$sql="SELECT a.car_id,a.car_num,a.car_price FROM `car` AS a ".
			 "WHERE {$where} ORDER BY a.car_id DESC LIMIT $start,$per_page";

mysql_select_db("qczn", $conn);
		$pList= null;
		$query=mysql_query($sql,$conn);
		while ($row=mysql_fetch_array($query)){
    		$pList[] = $row;
		}
		$total   = count($pList);
mysql_close($conn);


		echo json_encode(array('status'=>0,'totalRecords'=>$total,'data'=>$pList));

?>