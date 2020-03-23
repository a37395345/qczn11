<?php
import('operator.navi.admincontroller');
import('operator.navi.privilegehelper');
import('imag.fusecookie');


class ExportController extends AdminController
{
	function __construct($config = array())
	{
		parent::__construct($config);
		
		$this->registerTask( 'exportoutcar','exportoutcar');
		$this->registerTask( 'exportoutcar2','exportoutcar2');
	}
	function display(){
		echo "display";
	}
	function exportoutcar(){
		$pid = Request::getVar('pid','get');
		$model = $this->createModel("list",dirname( __FILE__ ));
		$busiInfo = $model->getBusinessInfo($pid);
		
		$fields="*";
		$out_list=$model->getEmpList($fields," AND `drive_account`!=1 AND `drivePaicheId`={$pid}","paiche_drive",""," `drive_date`");
		$lastdate=$out_list[count($out_list)-1]['drive_date'];
		$item_list=$model->getItemList($pid,"");
		$charge_list=$model->getChargeList($pid);
		if ($charge_list){
		foreach($charge_list as $key=>$val)
        {
        	if ($val['charge_name']=="租金"){
        		$paiche_rent = $val["conv_money"];
        	}
        }
        }
		$needcaltotal=0;
		if ($busiInfo['paiche_limitKmType']==0){//按月
			$needcaltotal=1;//需要计算超公里
		}else{//非按月累计的情况
			$date1 = explode("-",$lastdate);
			$date2 = explode("-",$busiInfo['paiche_lastTotalDate']);
			if ($busiInfo['paiche_limitKmType']==1){//按季
				if (abs($date1[0] - $date2[0]) * 12 + abs($date1[1] - $date2[1])==3){
					$needcaltotal=1;//需要计算超公里
				}
			}
			if ($busiInfo['paiche_limitKmType']==2){//按年
				if (abs($date1[0] - $date2[0]) * 12 + abs($date1[1] - $date2[1])==12){
					$needcaltotal=1;//需要计算超公里
				}
			}
		}
		$totalKM=$busiInfo['settle_qianMonth']+$busiInfo['settle_totalKm'];
        if ($busiInfo['settle_qianMonth']+$busiInfo['settle_totalKm']>$busiInfo['paiche_limitKm']){
        	$overKM=$busiInfo['settle_qianMonth']+$busiInfo['settle_totalKm']-$busiInfo['paiche_limitKm'];
        	$overMoney=($busiInfo['settle_qianMonth']+$busiInfo['settle_totalKm']-$busiInfo['paiche_limitKm'])*$busiInfo['paiche_overKm'];
        }else{
        	$overKM=0;
        	$overMoney=0;
        }
        $total = 0;
        $totalTP = 0;
        
		header ( "Content-type:application/vnd.ms-excel" );
		header ( "Content-Disposition:filename=".$busiInfo["client_name"].date("Y-m",strtotime($lastdate))."结算清单.xls" );
		echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
		<html xmlns='http://www.w3.org/1999/xhtml'>
		<head>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		<title></title>
		</head>
		<body>
		<table width='100%' border='1'>
		  <tr>
		    <td colspan='16'>明细</td>
		  </tr>
		  <tr>
		    <td>日期</td>
		    <td>车号</td>";
		if ($busiInfo["paiche_type"]==3){
			echo "<td>开始公里</td>
		    <td>结束公里</td>
		    <td>公里数</td>
		    <td>周末/节假日</td>
		    <td>备注</td>";
		}
		if ($busiInfo["paiche_type"]==4){
			echo "<td>开始公里</td>
			<td>开始时间</td>
		    <td>结束公里</td>
		    <td>结束时间</td>
		    <td>公里数</td>
		    <td>工作时间</td>
		    <td>周末/节假日</td>
		    <td>是否出差</td>
		    <td>带宿出差</td>
		    <td>省外出差</td>
		    <td>出差备注</td>
		    <td>食宿费路桥费</td>
		    <td>司机</td>
		    <td>备注</td>";
		}
		if ($busiInfo["paiche_type"]==5){
			echo "<td>时间</td>
		    <td>周末/节假日</td>
		    <td>用途</td>
		    <td>起止地点</td>
		    <td>趟数</td>
		    <td>费用</td>
		    <td>开始公里</td>
			<td>截止公里</td>
			<td>行驶公里数</td>
		    <td>司机</td>
		    <td>备注</td>";
		}
		echo  "</tr>";
		if(is_array($out_list)){
		foreach($out_list as $item)
        {
		echo "
		  <tr>
		    <td>".$item["drive_date"]."</td>
		    <td>苏D".$busiInfo["car_num"]."</td>";
		if ($busiInfo["paiche_type"]==3){
			echo "<td>".$item["drive_startKilo"]."</td>
			<td>".$item["drive_endKilo"]."</td>
			<td>".($item["drive_endKilo"]-$item["drive_startKilo"])."</td>
			<td>".$item["drive_hol"]."</td>
			<td>".$item["drive_remarks"]."</td>";
		}
		if ($busiInfo["paiche_type"]==4){
			echo "<td>".$item["drive_startKilo"]."</td>
		    <td>".$item["drive_startHour"].":".$item["drive_startMinute"]."</td>
		    <td>".$item["drive_endKilo"]."</td>
		    <td>".$item["drive_endHour"].":".$item["drive_endMinute"]."</td>
		    <td>".($item["drive_endKilo"]-$item["drive_startKilo"])."</td>
		    <td>".(($item["drive_endTime_O"]-$item["drive_startTime_O"])/3600)."</td>
		    <td>".$item["drive_hol"]."</td>
		    <td>".($item["drive_travel"]==1?"是":"否")."</td>
		    <td>".($item["drive_travelRoom"]==1?"是":"否")."</td>
		    <td>".($item["drive_travelout"]==1?"是":"否")."</td>
		    <td>".$item["drive_travelRemarks"]."</td>
		    <td>火食:".$item["drive_mealsTimes"]."次 住宿:".($item["drive_roomTimes"]==1?"是":"否")." 路费:".$item["drive_ioll"]."元</td>
		    <td>".$item["driveDriverName"]."</td>
		    <td>".$item["drive_remarks"]."</td>";
		}
		if ($busiInfo["paiche_type"]==5){
			echo "<td>".$item["drive_startHour"].":".$item["drive_startMinute"]."</td>
			<td>".$item["drive_hol"]."</td>
			<td>".$item["drive_travelRemarks"]."</td>
			<td>".$item["drive_specialRemarks"]."</td>
			<td>".$item["drive_trips"]."</td>
			<td>".$item["drive_money"]."</td>
			<td>".$item["drive_startKilo"]."</td>
			<td>".$item["drive_endKilo"]."</td>
			<td>".($item["drive_endKilo"]-$item["drive_startKilo"])."</td>
			<td>".$item["driveDriverName"]."</td>
			<td>".$item["drive_remarks"]."</td>";
			$totalTP+=$item["drive_trips"];
			$total+=$item["drive_money"];
		}
		echo "</tr>";
        }
		}
		echo "
		</table><br /><br />
		<table width='100%' border='1'>
		  <tr>
		    <td colspan='4'>汇总</td>
		  </tr>";
		if ($busiInfo["paiche_type"]==3 || $busiInfo["paiche_type"]==4){
		echo "
		  <tr>
			<td>总公里数</td><td>".$busiInfo["settle_totalKm"]."</td><td>&nbsp;</td><td>&nbsp;</td>
		  </tr>";
		}
		echo "
		  <tr>
			<td>基础公里数</td><td>".$busiInfo["paiche_limitKm"]."</td><td>费用</td><td>".$paiche_rent."</td>
		  </tr>";
		$total+=$paiche_rent;
		if ($busiInfo["settle_totalKm"]!="Y" && $needcaltotal==1){
		echo "
		  <tr>
			<td>超公里数</td><td>".$overKM."</td><td>费用</td><td>".$overMoney."</td>
		  </tr>";
		$total+=$overMoney;
		}
		if ($item_list){
		foreach($item_list as $key=>$val)
        {
        echo "
		  <tr>
			<td>".$val['item_name']."</td>";
        if ($val['item_caltype']==0){
        	echo "<td>&nbsp;</td><td>费用</td><td>".$val['conv_result']."</td>";
        	$total+=$val['conv_result'];
        }else{
        	echo "<td>".$val['item_fact']."</td><td>费用</td><td>".$val['conv_money']."</td>";
        	$total+=$val['conv_money'];
        }
        echo "
		  </tr>";
        }
		}
		echo "
		  <tr>
			<td>合计</td><td>&nbsp;</td><td>&nbsp;</td><td>".$total."</td>
		  </tr>";
		if ($busiInfo["paiche_type"]==5){
		echo "
		  <tr>
			<td>总趟数</td><td>".$totalTP."</td><td>总费用</td><td>".$total."</td>
		  </tr>";
		}
		echo "
		</table>
		</body>
		</html>";
	}
	function exportoutcar2(){
		$pid = Request::getVar('pid','get');
		$model = $this->createModel("list",dirname( __FILE__ ));
		$busiInfo = $model->getBusinessInfo($pid);
		
		$fields="*";
		$out_list=$model->getEmpList($fields," AND `drivePaicheId`={$pid}","paiche_drive",""," `drive_date`");
		$item_list=$model->getItemList($pid,"");
		$month=$model->getRow(0,"Select * from paiche_month Where monthPaicheId={$pid}");
		        
		header ( "Content-type:application/vnd.ms-excel" );
		header ( "Content-Disposition:filename=".$busiInfo["client_name"].$month['month_year']."年".$month['month_month']."月用车结账情况.xls" );
		echo "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
		<html xmlns='http://www.w3.org/1999/xhtml'>
		<head>
		<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
		<title></title>
		</head>
		<body>
		<table width='100%' border='1'>
		  <tr>
		    <td colspan='15'>出车明细</td>
		  </tr>
		  <tr>
		    <td>日期</td>
		    <td>车号</td>";
		if ($busiInfo["paiche_type"]==4){
			echo "<td>开始公里</td>
			<td>开始时间</td>
		    <td>结束公里</td>
		    <td>结束时间</td>
		    <td>公里数</td>
		    <td>工作时间</td>
		    <td>周末/节假日</td>
		    <td>是否出差</td>
		    <td>带宿出差</td>
		    <td>省外出差</td>
		    <td>出差备注</td>
		    <td>食宿费路桥费</td>
		    <td>司机</td>
		    <td>备注</td>";
		}
		if ($busiInfo["paiche_type"]==5){
			echo "<td>时间</td>
		    <td>周末/节假日</td>
		    <td>用途</td>
		    <td>起止地点</td>
		    <td>趟数</td>
		    <td>费用</td>
		    <td>开始公里</td>
			<td>截止公里</td>
			<td>行驶公里数</td>
		    <td>司机</td>
		    <td>备注</td>";
		}
		echo  "</tr>";
		if(is_array($out_list)){
		foreach($out_list as $item)
        {
		echo "
		  <tr>
		    <td>".$item["drive_date"]."</td>
		    <td>苏D".$busiInfo["car_num"]."</td>";
		if ($busiInfo["paiche_type"]==4){
			echo "<td>".$item["drive_startKilo"]."</td>
		    <td>".$item["drive_startHour"].":".$item["drive_startMinute"]."</td>
		    <td>".$item["drive_endKilo"]."</td>
		    <td>".$item["drive_endHour"].":".$item["drive_endMinute"]."</td>
		    <td>".($item["drive_endKilo"]-$item["drive_startKilo"])."</td>
		    <td>".(($item["drive_endTime_O"]-$item["drive_startTime_O"])/3600)."</td>
		    <td>".$item["drive_hol"]."</td>
		    <td>".($item["drive_travel"]==1?"是":"否")."</td>
		    <td>".($item["drive_travelRoom"]==1?"是":"否")."</td>
		    <td>".($item["drive_travelout"]==1?"是":"否")."</td>
		    <td>".$item["drive_travelRemarks"]."</td>
		    <td>火食:".$item["drive_mealsTimes"]."次 住宿:".($item["drive_roomTimes"]==1?"是":"否")." 路费:".$item["drive_ioll"]."元</td>
		    <td>".$item["driveDriverName"]."</td>
		    <td>".$item["drive_remarks"]."</td>";
		}
		if ($busiInfo["paiche_type"]==5){
			echo "<td>".$item["drive_startHour"].":".$item["drive_startMinute"]."</td>
			<td>".$item["drive_hol"]."</td>
			<td>".$item["drive_travelRemarks"]."</td>
			<td>".$item["drive_specialRemarks"]."</td>
			<td>".$item["drive_trips"]."</td>
			<td>".$item["drive_money"]."</td>
			<td>".$item["drive_startKilo"]."</td>
			<td>".$item["drive_endKilo"]."</td>
			<td>".($item["drive_endKilo"]-$item["drive_startKilo"])."</td>
			<td>".$item["driveDriverName"]."</td>
			<td>".$item["drive_remarks"]."</td>";
			$totalTP+=$item["drive_trips"];
			$total+=$item["drive_money"];
		}
		echo "</tr>";
        }
		}
		echo "
		</table><br /><br />
		<table width='100%' border='1'>
		  <tr>
		    <td colspan='4'>汇总</td>
		  </tr>";
		if ($busiInfo["paiche_type"]==4){
		echo "
		  <tr>
			<td>总公里数</td><td>".$month["settle_totalKm"]."</td><td>&nbsp;</td><td>&nbsp;</td>
		  </tr>";
		}
		echo "
		  <tr>
			<td>基础公里数</td><td>".$busiInfo["paiche_limitKm"]."</td><td>费用</td><td>".$month['settle_rent']."</td>
		  </tr>";
		
		if ($month['settle_overKm']>0){
		echo "
		  <tr>
			<td>超公里数</td><td>".$month['settle_overKm']."</td><td>费用</td><td>".$month['settle_overKm']*$busiInfo['paiche_overKm']."</td>
		  </tr>";
		}
		if ($item_list){
		foreach($item_list as $key=>$val)
        {
        echo "
		  <tr>
			<td>".$val['item_name']."</td>";
        if ($val['item_caltype']==0){
        	echo "<td>&nbsp;</td><td>费用</td><td>".$val['conv_result']."</td>";
        	$total+=$val['conv_result'];
        }else{
        	echo "<td>".$val['item_fact']."</td><td>费用</td><td>".$val['conv_money']."</td>";
        	$total+=$val['conv_money'];
        }
        echo "
		  </tr>";
        }
		}
		echo "
		  <tr>
			<td>合计</td><td>&nbsp;</td><td>&nbsp;</td><td>".$month['settle_total']."</td>
		  </tr>";
		if ($busiInfo["paiche_type"]==5){
		echo "
		  <tr>
			<td>总趟数</td><td>".$month['settle_trips']."</td><td>总费用</td><td>".$month['settle_total']."</td>
		  </tr>";
		}
		echo "
		</table>
		</body>
		</html>";
	}

}
?>