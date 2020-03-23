<?php /* Smarty version Smarty-3.0.4, created on 2019-10-10 10:41:36
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/busilong/paichedetail.html" */ ?>
<?php /*%%SmartyHeaderCode:5448486485d9e9a60eea754-27034094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b635977628fb2910a27e83c3c01fb9f680ad51d' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/busilong/paichedetail.html',
      1 => 1569749205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5448486485d9e9a60eea754-27034094',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>管理后台</title>
<link href="../../../css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../js/check_form.js"></script>
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style>
</head>
<body>

<form action="month_accept.php" method="post" onsubmit="return month_check(this)" name="form1">
<div class="so_main">
  <div class="page_tit"><?php echo (isset($_smarty_tpl->getVariable('busi')->value['client_name']) ? $_smarty_tpl->getVariable('busi')->value['client_name'] : null);?>
<?php echo (isset($_smarty_tpl->getVariable('month')->value['month_year']) ? $_smarty_tpl->getVariable('month')->value['month_year'] : null);?>
年<?php echo (isset($_smarty_tpl->getVariable('month')->value['month_month']) ? $_smarty_tpl->getVariable('month')->value['month_month'] : null);?>
月用车结账情况</div>  
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr><td colspan="3">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
	<?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
	<tr>
	<th rowspan="2">日期</th>
	<th rowspan="2">车号</th>
	<th colspan="2">开始信息</th>
	<th colspan="2">截止信息</th>
	<th rowspan="2">公里数</th>
	<th rowspan="2">工作时间</th>
	<th rowspan="2">扣除时间</th>
	<th rowspan="2">周末<br />节假日</th>
	<th rowspan="2">是否<br />出差</th>
	<th rowspan="2">带宿<br />出差</th>
	<th rowspan="2">省外<br />出差</th>
	<th rowspan="2">出差备注</th>
	<th rowspan="2">食宿费<br />过路桥</th>
	<th rowspan="2">司机</th>
	<th rowspan="2" width="5%">备注</th>
	</tr>
	<tr>
	  <th>开始公里</th>
	  <th>开始时间</th>
	  <th>截止公里</th>
	  <th>截止时间</th>
	</tr>
	<?php }else{ ?>
	<tr>
	<th>日期</th>
	<th>车号</th>
	<th>时间</th>
	<th>周末/节假日</th>
	<th>用途</th>
	<th>起止地点</th>
	<th>趟数</th>
	<th>总费用</th>
	<th>开始公里</th>
	<th>截止公里</th>
	<th>行驶公里数</th>
	<th>司机</th>
	<th>备注</th>
	</tr>
	<?php }?>
	<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('outlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
	<?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
	<?php $_smarty_tpl->tpl_vars['totalKM'] = new Smarty_variable($_smarty_tpl->getVariable('totalKM')->value+(isset($_smarty_tpl->tpl_vars['list']->value['drive_endKilo']) ? $_smarty_tpl->tpl_vars['list']->value['drive_endKilo'] : null)-(isset($_smarty_tpl->tpl_vars['list']->value['drive_startKilo']) ? $_smarty_tpl->tpl_vars['list']->value['drive_startKilo'] : null), null, null);?>
	<?php }?>
	<?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='5'){?>
	<?php $_smarty_tpl->tpl_vars['totalTP'] = new Smarty_variable($_smarty_tpl->getVariable('totalTP')->value+(isset($_smarty_tpl->tpl_vars['list']->value['drive_trips']) ? $_smarty_tpl->tpl_vars['list']->value['drive_trips'] : null), null, null);?>
	<?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->getVariable('total')->value+(isset($_smarty_tpl->tpl_vars['list']->value['drive_money']) ? $_smarty_tpl->tpl_vars['list']->value['drive_money'] : null), null, null);?>
	<?php }?>
	<tr bgcolor="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['bgcolor']) ? $_smarty_tpl->tpl_vars['list']->value['bgcolor'] : null);?>
">
	  <td><input type="hidden" name="id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_id']) ? $_smarty_tpl->tpl_vars['list']->value['drive_id'] : null);?>
"/><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_date']) ? $_smarty_tpl->tpl_vars['list']->value['drive_date'] : null);?>
</td>
	  <td>苏D<?php if ((isset($_smarty_tpl->tpl_vars['list']->value['driveCarNum']) ? $_smarty_tpl->tpl_vars['list']->value['driveCarNum'] : null)==''){?><?php echo (isset($_smarty_tpl->getVariable('busi')->value['car_num']) ? $_smarty_tpl->getVariable('busi')->value['car_num'] : null);?>
<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['driveCarNum']) ? $_smarty_tpl->tpl_vars['list']->value['driveCarNum'] : null);?>
<?php }?></td>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_startKilo']) ? $_smarty_tpl->tpl_vars['list']->value['drive_startKilo'] : null);?>
</td>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'||(isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='5'){?>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_startHour']) ? $_smarty_tpl->tpl_vars['list']->value['drive_startHour'] : null);?>
点&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_startMinute']) ? $_smarty_tpl->tpl_vars['list']->value['drive_startMinute'] : null);?>
分</td>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_endKilo']) ? $_smarty_tpl->tpl_vars['list']->value['drive_endKilo'] : null);?>
</td>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_endHour']) ? $_smarty_tpl->tpl_vars['list']->value['drive_endHour'] : null);?>
点&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_endMinute']) ? $_smarty_tpl->tpl_vars['list']->value['drive_endMinute'] : null);?>
分</td>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_endKilo']) ? $_smarty_tpl->tpl_vars['list']->value['drive_endKilo'] : null)-(isset($_smarty_tpl->tpl_vars['list']->value['drive_startKilo']) ? $_smarty_tpl->tpl_vars['list']->value['drive_startKilo'] : null);?>
</td>
	  <td><?php echo ((isset($_smarty_tpl->tpl_vars['list']->value['drive_endTime_O']) ? $_smarty_tpl->tpl_vars['list']->value['drive_endTime_O'] : null)-(isset($_smarty_tpl->tpl_vars['list']->value['drive_startTime_O']) ? $_smarty_tpl->tpl_vars['list']->value['drive_startTime_O'] : null))/3600;?>
</td>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_deductTime']) ? $_smarty_tpl->tpl_vars['list']->value['drive_deductTime'] : null)/60;?>
</td>
	  <?php }?>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_hol']) ? $_smarty_tpl->tpl_vars['list']->value['drive_hol'] : null);?>
</td>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
	  <td><?php if ((isset($_smarty_tpl->tpl_vars['list']->value['drive_travel']) ? $_smarty_tpl->tpl_vars['list']->value['drive_travel'] : null)==1){?>是<?php }else{ ?>否<?php }?></td>
	  <td><?php if ((isset($_smarty_tpl->tpl_vars['list']->value['drive_travelRoom']) ? $_smarty_tpl->tpl_vars['list']->value['drive_travelRoom'] : null)==1){?>是<?php }else{ ?>否<?php }?></td>
	  <td><?php if ((isset($_smarty_tpl->tpl_vars['list']->value['drive_travelout']) ? $_smarty_tpl->tpl_vars['list']->value['drive_travelout'] : null)==1){?>是<?php }else{ ?>否<?php }?></td>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_travelRemarks']) ? $_smarty_tpl->tpl_vars['list']->value['drive_travelRemarks'] : null);?>
</td>
	  <td style="text-align:left;">火食:<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_mealsTimes']) ? $_smarty_tpl->tpl_vars['list']->value['drive_mealsTimes'] : null);?>
次
	  住宿:<?php if ((isset($_smarty_tpl->tpl_vars['list']->value['drive_roomTimes']) ? $_smarty_tpl->tpl_vars['list']->value['drive_roomTimes'] : null)==1){?>是<?php }else{ ?>否<?php }?>
	  路费:<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_ioll']) ? $_smarty_tpl->tpl_vars['list']->value['drive_ioll'] : null);?>
元</td>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='5'){?>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_travelRemarks']) ? $_smarty_tpl->tpl_vars['list']->value['drive_travelRemarks'] : null);?>
</td>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_specialRemarks']) ? $_smarty_tpl->tpl_vars['list']->value['drive_specialRemarks'] : null);?>
</td>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_trips']) ? $_smarty_tpl->tpl_vars['list']->value['drive_trips'] : null);?>
趟</td>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_money']) ? $_smarty_tpl->tpl_vars['list']->value['drive_money'] : null);?>
元</td>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_startKilo']) ? $_smarty_tpl->tpl_vars['list']->value['drive_startKilo'] : null);?>
</td>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_endKilo']) ? $_smarty_tpl->tpl_vars['list']->value['drive_endKilo'] : null);?>
</td>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_endKilo']) ? $_smarty_tpl->tpl_vars['list']->value['drive_endKilo'] : null)-(isset($_smarty_tpl->tpl_vars['list']->value['drive_startKilo']) ? $_smarty_tpl->tpl_vars['list']->value['drive_startKilo'] : null);?>
</td>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'||(isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='5'){?>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['driveDriverName']) ? $_smarty_tpl->tpl_vars['list']->value['driveDriverName'] : null);?>
</td>
	  <?php }?>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_remarks']) ? $_smarty_tpl->tpl_vars['list']->value['drive_remarks'] : null);?>
</td>
	</tr>
	<?php }} ?>
	</table></td></tr>
	<tr><td width="50%">
	<table width="100%" border="0" cellspacing="0" cellpadding="3" align="left">
		<tr>
			<th>条款</th><th style="text-align:right;">约定</th><th style="text-align:right;">实际</th><th style="text-align:right;">金额</th>
		</tr>
		<?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
		<tr>
			<td width="35%">本月行驶总公里数:</td><td width="15%">&nbsp;</td><td style="text-align:right;" width="25%"><?php echo (isset($_smarty_tpl->getVariable('month')->value['settle_totalKm']) ? $_smarty_tpl->getVariable('month')->value['settle_totalKm'] : null);?>
</td><td style="text-align:right;" width="25%">&nbsp;</td>
		</tr>
		<tr>
			<td>基础公里数:</td><td style="text-align:right;"><?php echo (isset($_smarty_tpl->getVariable('busi')->value['paiche_limitKm']) ? $_smarty_tpl->getVariable('busi')->value['paiche_limitKm'] : null);?>
</td><td>&nbsp;</td><td style="text-align:right;"><?php echo (isset($_smarty_tpl->getVariable('month')->value['settle_rent']) ? $_smarty_tpl->getVariable('month')->value['settle_rent'] : null);?>
</td>
		</tr>
		<?php if ((isset($_smarty_tpl->getVariable('month')->value['settle_overKm']) ? $_smarty_tpl->getVariable('month')->value['settle_overKm'] : null)>0){?>
		<tr>
			<td>超公里数:</td><td style="text-align:right;"><?php echo (isset($_smarty_tpl->getVariable('busi')->value['paiche_overKm']) ? $_smarty_tpl->getVariable('busi')->value['paiche_overKm'] : null);?>
</td><td style="text-align:right;"><?php echo (isset($_smarty_tpl->getVariable('month')->value['settle_overKm']) ? $_smarty_tpl->getVariable('month')->value['settle_overKm'] : null);?>
</td><td style="text-align:right;"><?php echo round((isset($_smarty_tpl->getVariable('month')->value['settle_overKm']) ? $_smarty_tpl->getVariable('month')->value['settle_overKm'] : null)*(isset($_smarty_tpl->getVariable('busi')->value['paiche_overKm']) ? $_smarty_tpl->getVariable('busi')->value['paiche_overKm'] : null),2);?>
</td>
		</tr>
		<?php }?>

		<?php if ((isset($_smarty_tpl->getVariable('busi')->value['youfei']) ? $_smarty_tpl->getVariable('busi')->value['youfei'] : null)!='Y'){?>
		<tr>
			<td width="35%">油费:</td>
			<td width="15%" style="text-align:right;"></td>
			<td width="25%" style="text-align:right;"></td>
			<td width="25%" style="text-align:right;"><?php echo (isset($_smarty_tpl->getVariable('busi')->value['youfei_zongji']) ? $_smarty_tpl->getVariable('busi')->value['youfei_zongji'] : null);?>
</td>
		</tr>
		<?php }?>

		<?php  $_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('itemlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row1']->key => $_smarty_tpl->tpl_vars['row1']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
		<tr>
			<?php if ((isset($_smarty_tpl->tpl_vars['row1']->value['item_caltype']) ? $_smarty_tpl->tpl_vars['row1']->value['item_caltype'] : null)==0){?>
			<?php if (is_numeric((isset($_smarty_tpl->tpl_vars['row1']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row1']->value['conv_result'] : null))){?>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['item_name']) ? $_smarty_tpl->tpl_vars['row1']->value['item_name'] : null);?>
:</td><td style="text-align:right;"><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row1']->value['conv_result'] : null);?>
</td><td style="text-align:right;">&nbsp;</td><td style="text-align:right;"><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row1']->value['conv_result'] : null);?>
</td>
			<?php }else{ ?>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['item_name']) ? $_smarty_tpl->tpl_vars['row1']->value['item_name'] : null);?>
:</td><td style="text-align:right;"><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row1']->value['conv_result'] : null);?>
</td><td>&nbsp;</td><td style="text-align:right;">&nbsp;</td>
			<?php }?>
			<?php }else{ ?>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['item_name']) ? $_smarty_tpl->tpl_vars['row1']->value['item_name'] : null);?>
:</td><td style="text-align:right;"><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row1']->value['conv_result'] : null);?>
</td><td style="text-align:right;"><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['item_fact']) ? $_smarty_tpl->tpl_vars['row1']->value['item_fact'] : null);?>
</td><td style="text-align:right;"><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row1']->value['conv_money'] : null);?>
</td>
			<?php }?>
		</tr>
		<?php }} ?>
		<?php  $_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('chargelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row1']->key => $_smarty_tpl->tpl_vars['row1']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
		<tr>
			<td><input type="hidden" name="Iid[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['charge_id']) ? $_smarty_tpl->tpl_vars['row1']->value['charge_id'] : null);?>
"/><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row1']->value['charge_name'] : null);?>
:</td><td style="text-align:right;">&nbsp;</td><td style="text-align:right;">&nbsp;</td><td style="text-align:right;"><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row1']->value['conv_money'] : null);?>
</td>
		</tr>
		<?php }} ?>
		<tr>
			<th colspan="3" style="text-align:left;">合计</th><th style="text-align:right;"><?php echo (isset($_smarty_tpl->getVariable('month')->value['settle_total']) ? $_smarty_tpl->getVariable('month')->value['settle_total'] : null);?>
</th>
		</tr>
		<?php }?>
		<?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='5'){?>
		<tr>
			<td width="35%">本月行驶总公里数:</td><td width="15%">&nbsp;</td><td style="text-align:right;" width="25%"><?php echo (isset($_smarty_tpl->getVariable('month')->value['settle_totalKm']) ? $_smarty_tpl->getVariable('month')->value['settle_totalKm'] : null);?>
</td><td style="text-align:right;" width="25%">&nbsp;</td>
		</tr>
		<tr>
			<td>总趟数:</td><td style="text-align:right;"><?php echo (isset($_smarty_tpl->getVariable('month')->value['settle_rent']) ? $_smarty_tpl->getVariable('month')->value['settle_rent'] : null);?>
</td><td style="text-align:right;"><?php echo (isset($_smarty_tpl->getVariable('month')->value['settle_trips']) ? $_smarty_tpl->getVariable('month')->value['settle_trips'] : null);?>
</td><td style="text-align:right;"><?php echo (isset($_smarty_tpl->getVariable('month')->value['settle_total']) ? $_smarty_tpl->getVariable('month')->value['settle_total'] : null);?>
</td>
		</tr>
		<?php }?>
	</table></td>
	<td width="4%">&nbsp;</td>
	<td style="text-align:left;vertical-align:middle;">
		<div id="searchTopic_div" >
		    <div class="page_tit">结算</div>
		    <div class="form2">
		        <input type="hidden" name="accountmonth" value="<?php echo $_smarty_tpl->getVariable('month')->value;?>
" />
		        <input type="hidden" name="needcaltotal" value="<?php echo $_smarty_tpl->getVariable('needcaltotal')->value;?>
" />
		        <input type="hidden" name="pid" value="<?php echo (isset($_smarty_tpl->getVariable('busi')->value['paiche_id']) ? $_smarty_tpl->getVariable('busi')->value['paiche_id'] : null);?>
" />
		            <dl class="lineD">
			            <dt>开始日期：</dt>
			            <dd><?php echo (isset($_smarty_tpl->getVariable('busi')->value['paiche_startDate_format']) ? $_smarty_tpl->getVariable('busi')->value['paiche_startDate_format'] : null);?>
</dd>
		            </dl>
		            <dl class="lineD">
			            <dt>截止日期：</dt>
			            <dd><?php echo (isset($_smarty_tpl->getVariable('busi')->value['paiche_endDate_format']) ? $_smarty_tpl->getVariable('busi')->value['paiche_endDate_format'] : null);?>
</dd>
		            </dl>
		            <?php if ((isset($_smarty_tpl->getVariable('month')->value['settle_favor']) ? $_smarty_tpl->getVariable('month')->value['settle_favor'] : null)>0){?>
		            <dl class="lineD">
			            <dt>优惠金额：</dt>
			            <dd><?php echo (isset($_smarty_tpl->getVariable('month')->value['settle_favor']) ? $_smarty_tpl->getVariable('month')->value['settle_favor'] : null);?>
</dd>
		            </dl>
		            <?php }?>
		            <dl class="lineD">
			            <dt>实际开票金额：</dt>
			            <dd><?php echo (isset($_smarty_tpl->getVariable('month')->value['settle_billMoney']) ? $_smarty_tpl->getVariable('month')->value['settle_billMoney'] : null);?>
</dd>
		            </dl>
		            <dl class="lineD">
			            <dt>发票号码：</dt>
			            <dd><?php echo (isset($_smarty_tpl->getVariable('month')->value['settle_billNum']) ? $_smarty_tpl->getVariable('month')->value['settle_billNum'] : null);?>
</dd>
		            </dl>
		            <dl class="lineD">
			            <dt>开票日期：</dt>
			            <dd><?php echo (isset($_smarty_tpl->getVariable('month')->value['settle_billDate']) ? $_smarty_tpl->getVariable('month')->value['settle_billDate'] : null);?>
</dd>
		            </dl>
		            <dl class="lineD">
			            <dt>已结算金额：</dt>
			            <dd><?php echo (isset($_smarty_tpl->getVariable('month')->value['settle_billMoney_have']) ? $_smarty_tpl->getVariable('month')->value['settle_billMoney_have'] : null);?>
</dd>
		            </dl>
		    </div>
		    <?php if ($_smarty_tpl->getVariable('accountlist')->value){?>
		    <div class="page_tit">结账</div>
		    <div class="list">
		    <table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
			<th>时间</th>
			<th>名称</th>
			<th>金额</th>
			<th>方式</th>
			<th>账户</th>
			</tr>
			
			<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('accountlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
			<tr>
			  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['add_time']) ? $_smarty_tpl->tpl_vars['row']->value['add_time'] : null);?>
</td>
				<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
</td>
				<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
</td>
				<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['payment_name']) ? $_smarty_tpl->tpl_vars['row']->value['payment_name'] : null);?>
</td>
				<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_name']) ? $_smarty_tpl->tpl_vars['row']->value['bank_name'] : null);?>
</td>
			</tr>
			<?php }} ?>
			</table>
		    </div>
		    <?php }?>
	    </div>
	</td>
	</tr>
    <?php if ($_smarty_tpl->getVariable('changelist')->value){?>
	<tr>
		<td colspan="3">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
			  	<tr>
			    <th style="width:30px;">序号	</th>
				<th>时间</th>
				<th>车辆</th>
				<th>被换车起始的公里数</th>
				<th>被换车结束的公里数</th>
				<th>更换过来的车当前公里数</th>
				<th>原租金</th>
				<th>更换后租金</th>
				<th>换车备注</th>
				<th>调度人</th>
			  </tr>
			  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('changelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
			  <tr >
			    	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>
				  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_times_all']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_times_all'] : null);?>
</td>
				  	<td>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['carA']) ? $_smarty_tpl->tpl_vars['row']->value['carA'] : null);?>
&nbsp;->&nbsp;苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['carB']) ? $_smarty_tpl->tpl_vars['row']->value['carB'] : null);?>
</td>
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_carAStartKilo']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_carAStartKilo'] : null);?>
</td>
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_carAEndKilo']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_carAEndKilo'] : null);?>
</td>
					
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_kiloBNow']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_kiloBNow'] : null);?>
</td>
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_rentA']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_rentA'] : null);?>
</td>
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_rentB']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_rentB'] : null);?>
</td>
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_rentRemarks']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_rentRemarks'] : null);?>
</td>
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecarMan']) ? $_smarty_tpl->tpl_vars['row']->value['changecarMan'] : null);?>
</td>
			 </tr>
			 <?php }} ?>
			</table>
		</td>
	</tr>
	<?php }?>
  </table>
  </div>
  <div class="Toolbar_inbox">
	<a href="exportoutcar.php?pid=<?php echo (isset($_smarty_tpl->getVariable('busi')->value['paiche_id']) ? $_smarty_tpl->getVariable('busi')->value['paiche_id'] : null);?>
" class="btn_a" ><span>导出</span></a>
  </div>
</div>
</form>
<!-->
<script>
</script>
<!-->
</body>
</html>