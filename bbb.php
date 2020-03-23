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
	
	$aa=0;
	$sql="Select a.paiche_id From paiche a Inner Join settle b on a.paiche_id=b.settlePaicheId Where a.paiche_parent in (152,279) And a.paiche_status=1 And b.settle_losses=0";
	$result=mysql_query($sql,$conn);
	while($resultArray=mysql_fetch_row($result)){		
		$sql="Insert Into paiche_items(paiche_id,item_id,conv_result) Values(".$resultArray[0].",8,'15')";		
		mysql_query($sql,$conn);
		$sql="Insert Into paiche_items(paiche_id,item_id,conv_result) Values(".$resultArray[0].",14,'20')";		
		mysql_query($sql,$conn);
		$sql="Insert Into paiche_items(paiche_id,item_id,conv_result) Values(".$resultArray[0].",15,'30')";		
		mysql_query($sql,$conn);
		$sql="Insert Into paiche_items(paiche_id,item_id,conv_result) Values(".$resultArray[0].",16,'15')";		
		mysql_query($sql,$conn);
		$sql="Insert Into paiche_items(paiche_id,item_id,conv_result) Values(".$resultArray[0].",17,'')";		
		mysql_query($sql,$conn);
    }
	
	mysql_close($conn);
	
	echo 'ok-'.date("Y-m-d H:i:s");
?>