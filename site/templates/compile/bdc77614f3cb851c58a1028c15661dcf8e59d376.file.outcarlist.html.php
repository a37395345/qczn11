<?php /* Smarty version Smarty-3.0.4, created on 2019-10-07 16:27:31
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/business/outcarlist.html" */ ?>
<?php /*%%SmartyHeaderCode:18125332965d9af6f33237a0-01133374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdc77614f3cb851c58a1028c15661dcf8e59d376' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/business/outcarlist.html',
      1 => 1569749208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18125332965d9af6f33237a0-01133374',
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
<?php echo $_smarty_tpl->getVariable('month')->value;?>
月份出车记录清单</div>  
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr><td colspan="3">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
	<?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='3'){?>
	<tr>
	<th>日期</th>
	<th>车号</th>
	<th>开始公里</th>
	<th>截止公里</th>
	<th>公里数</th>
	<th>周末/节假日</th>
	<th>备注</th>
	</tr>
	<?php }elseif((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
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
	<?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='3'||(isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
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
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='3'||(isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_startKilo']) ? $_smarty_tpl->tpl_vars['list']->value['drive_startKilo'] : null);?>
</td>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'||(isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='5'){?>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_startHour']) ? $_smarty_tpl->tpl_vars['list']->value['drive_startHour'] : null);?>
点&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_startMinute']) ? $_smarty_tpl->tpl_vars['list']->value['drive_startMinute'] : null);?>
分</td>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='3'||(isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_endKilo']) ? $_smarty_tpl->tpl_vars['list']->value['drive_endKilo'] : null);?>
</td>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_endHour']) ? $_smarty_tpl->tpl_vars['list']->value['drive_endHour'] : null);?>
点&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_endMinute']) ? $_smarty_tpl->tpl_vars['list']->value['drive_endMinute'] : null);?>
分</td>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='3'||(isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_endKilo']) ? $_smarty_tpl->tpl_vars['list']->value['drive_endKilo'] : null)-(isset($_smarty_tpl->tpl_vars['list']->value['drive_startKilo']) ? $_smarty_tpl->tpl_vars['list']->value['drive_startKilo'] : null);?>
</td>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
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
		<?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='3'||(isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
		<tr>
			<td width="40%">本月行驶总公里数:</td><td width="15%">&nbsp;</td><td style="text-align:right;" width="25%"><?php echo (isset($_smarty_tpl->getVariable('busi')->value['settle_totalKm']) ? $_smarty_tpl->getVariable('busi')->value['settle_totalKm'] : null);?>
</td><td style="text-align:right;" width="25%">&nbsp;</td>
		</tr>
		<tr>
			<td>基础公里数:</td><td style="text-align:right;"><?php echo (isset($_smarty_tpl->getVariable('busi')->value['paiche_limitKm']) ? $_smarty_tpl->getVariable('busi')->value['paiche_limitKm'] : null);?>
</td><td>&nbsp;</td><td style="text-align:right;"><?php echo $_smarty_tpl->getVariable('paiche_rent')->value;?>
<?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->getVariable('total')->value+$_smarty_tpl->getVariable('paiche_rent')->value, null, null);?><input type="hidden" name="paiche_rent" value="<?php echo $_smarty_tpl->getVariable('paiche_rent')->value;?>
"/></td>
		</tr>
		<?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('busi')->value['paiche_unlimitKm'] : null)!="Y"&&$_smarty_tpl->getVariable('needcaltotal')->value==1){?>
		<tr>
			<td>超公里数:</td><td style="text-align:right;"><?php echo (isset($_smarty_tpl->getVariable('busi')->value['paiche_overKm']) ? $_smarty_tpl->getVariable('busi')->value['paiche_overKm'] : null);?>
</td><td style="text-align:right;"><?php echo $_smarty_tpl->getVariable('overKM')->value;?>
<input type="hidden" name="overkm" value="<?php echo $_smarty_tpl->getVariable('overKM')->value;?>
"/></td><td style="text-align:right;"><?php echo $_smarty_tpl->getVariable('overMoney')->value;?>
<?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->getVariable('total')->value+$_smarty_tpl->getVariable('overMoney')->value, null, null);?></td>
		</tr>
		<?php }?>

		<?php if ((isset($_smarty_tpl->getVariable('busi')->value['youfei']) ? $_smarty_tpl->getVariable('busi')->value['youfei'] : null)!="Y"){?>
		<tr>
			<td>油费:</td>
			<td style="text-align:right;"</td>
			<td style="text-align:right;"></td>
			<td style="text-align:right;"><?php echo (isset($_smarty_tpl->getVariable('busi')->value['youfei_zongji']) ? $_smarty_tpl->getVariable('busi')->value['youfei_zongji'] : null);?>
<?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->getVariable('total')->value+(isset($_smarty_tpl->getVariable('busi')->value['youfei_zongji']) ? $_smarty_tpl->getVariable('busi')->value['youfei_zongji'] : null), null, null);?></td>
		</tr>
		<?php }?>


		<?php  $_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('itemlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row1']->key => $_smarty_tpl->tpl_vars['row1']->value){
?>
		<tr>
			<?php if ((isset($_smarty_tpl->tpl_vars['row1']->value['item_caltype']) ? $_smarty_tpl->tpl_vars['row1']->value['item_caltype'] : null)==0){?>
				<?php if (is_numeric((isset($_smarty_tpl->tpl_vars['row1']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row1']->value['conv_result'] : null))){?>
				<?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->getVariable('total')->value+(isset($_smarty_tpl->tpl_vars['row1']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row1']->value['conv_result'] : null), null, null);?>
					<td><input type="hidden" name="Iid[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['item_id']) ? $_smarty_tpl->tpl_vars['row1']->value['item_id'] : null);?>
"/><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['item_name']) ? $_smarty_tpl->tpl_vars['row1']->value['item_name'] : null);?>
</td><td style="text-align:right;"><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row1']->value['conv_result'] : null);?>
</td><td style="text-align:right;">&nbsp;</td><td style="text-align:right;"><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row1']->value['conv_result'] : null);?>
</td>
					<?php }else{ ?>
					<td><input type="hidden" name="Iid[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['item_id']) ? $_smarty_tpl->tpl_vars['row1']->value['item_id'] : null);?>
"/><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['item_name']) ? $_smarty_tpl->tpl_vars['row1']->value['item_name'] : null);?>
</td><td style="text-align:right;"><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row1']->value['conv_result'] : null);?>
</td><td>&nbsp;</td><td>&nbsp;</td>
				<?php }?>
			<?php }else{ ?>


			<?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->getVariable('total')->value+(isset($_smarty_tpl->tpl_vars['row1']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row1']->value['conv_money'] : null), null, null);?>
			<td><input type="hidden" name="Iid[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['item_id']) ? $_smarty_tpl->tpl_vars['row1']->value['item_id'] : null);?>
"/><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['item_name']) ? $_smarty_tpl->tpl_vars['row1']->value['item_name'] : null);?>
</td><td style="text-align:right;"><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row1']->value['conv_result'] : null);?>
</td><td style="text-align:right;"><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['item_fact']) ? $_smarty_tpl->tpl_vars['row1']->value['item_fact'] : null);?>
</td><td style="text-align:right;"><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row1']->value['conv_money'] : null);?>
</td>
			<?php }?>

			
		</tr>

		<?php }} ?>
		<?php  $_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('chargelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row1']->key => $_smarty_tpl->tpl_vars['row1']->value){
?>
		<tr>
			<?php if ((isset($_smarty_tpl->tpl_vars['row1']->value['charge_id']) ? $_smarty_tpl->tpl_vars['row1']->value['charge_id'] : null)!=1&&(isset($_smarty_tpl->tpl_vars['row1']->value['charge_id']) ? $_smarty_tpl->tpl_vars['row1']->value['charge_id'] : null)!=2){?>
			<?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->getVariable('total')->value+(isset($_smarty_tpl->tpl_vars['row1']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row1']->value['conv_money'] : null), null, null);?>
			<td><input type="hidden" name="Iid[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['charge_id']) ? $_smarty_tpl->tpl_vars['row1']->value['charge_id'] : null);?>
"/><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row1']->value['charge_name'] : null);?>
:</td><td style="text-align:right;">&nbsp;</td><td style="text-align:right;">&nbsp;</td><td style="text-align:right;"><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row1']->value['conv_money'] : null);?>
</td>
			<?php }?>
		</tr>

		<?php }} ?>
		


		
		<tr>
			<td width="40%">路桥费:</td>
			<td width="15%"></td>
			
			<td style="text-align:right;" width="25%"><?php echo (isset($_smarty_tpl->getVariable('busi')->value['settle_advanceIoll']) ? $_smarty_tpl->getVariable('busi')->value['settle_advanceIoll'] : null);?>
</td>
			<td style="text-align:right;" width="25%"><?php echo (isset($_smarty_tpl->getVariable('busi')->value['settle_advanceIoll']) ? $_smarty_tpl->getVariable('busi')->value['settle_advanceIoll'] : null);?>
<?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->getVariable('total')->value+(isset($_smarty_tpl->getVariable('busi')->value['settle_advanceIoll']) ? $_smarty_tpl->getVariable('busi')->value['settle_advanceIoll'] : null), null, null);?></td>
		</tr>


		
		


		<tr>
			<th colspan="3" style="text-align:left;">合计</th><th style="text-align:right;"><?php echo $_smarty_tpl->getVariable('total')->value;?>
</th>
		</tr>
		<?php }?>
		<?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='5'){?>
		<tr>
			<td width="35%">本月行驶总公里数:</td><td width="15%">&nbsp;</td><td style="text-align:right;" width="25%"><?php echo (isset($_smarty_tpl->getVariable('busi')->value['settle_totalKm']) ? $_smarty_tpl->getVariable('busi')->value['settle_totalKm'] : null);?>
</td><td style="text-align:right;" width="25%">&nbsp;</td>
		</tr>
		<tr>
			<td>总趟数:</td><td style="text-align:right;"><?php echo $_smarty_tpl->getVariable('paiche_rent')->value;?>
</td><td style="text-align:right;"><?php echo $_smarty_tpl->getVariable('totalTP')->value;?>
</td><td style="text-align:right;"><?php echo $_smarty_tpl->getVariable('total')->value;?>
<input type="hidden" name="paiche_rent" value="<?php echo $_smarty_tpl->getVariable('paiche_rent')->value;?>
"/></td>
		</tr>
		<?php }?>
		
	</table></td>
	<td width="4%">&nbsp;</td>
	<td style="text-align:left;vertical-align:middle;">
		<div id="searchTopic_div" style="display:none;">
		    <div class="page_tit">
		    结算 [<a onclick="searchNews();" href="javascript:void(0);">取消</a>]
		    </div>
		    <div class="form2">
		        <input type="hidden" name="accountmonth" value="<?php echo $_smarty_tpl->getVariable('month')->value;?>
" />
		        <input type="hidden" name="needcaltotal" value="<?php echo $_smarty_tpl->getVariable('needcaltotal')->value;?>
" />
		        <input type="hidden" name="pid" value="<?php echo (isset($_smarty_tpl->getVariable('busi')->value['paiche_id']) ? $_smarty_tpl->getVariable('busi')->value['paiche_id'] : null);?>
" />
		            <dl class="lineD">
					    <dt>单位名称：</dt>
					    <dd><input type="text" name="client_name" id="client_name" size="28" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('busi')->value['client_name']) ? $_smarty_tpl->getVariable('busi')->value['client_name'] : null);?>
" />
					    <input type="hidden" name="client_id" id="client_id" value="<?php echo (isset($_smarty_tpl->getVariable('busi')->value['paicheCom']) ? $_smarty_tpl->getVariable('busi')->value['paicheCom'] : null);?>
" />
					    <input type="hidden" id="clientmoney" value="<?php echo $_smarty_tpl->getVariable('clientmoney')->value;?>
" />
					    <input type="hidden" name="month_CounterMan" value="<?php echo (isset($_smarty_tpl->getVariable('busi')->value['paicheCounterMan']) ? $_smarty_tpl->getVariable('busi')->value['paicheCounterMan'] : null);?>
">
					    <input type="hidden" name="month_CounterShop" value="<?php echo (isset($_smarty_tpl->getVariable('busi')->value['paicheCounterShop']) ? $_smarty_tpl->getVariable('busi')->value['paicheCounterShop'] : null);?>
">
					    </dd>
				    </dl>
		            <dl class="lineD">
			            <dt>开始日期：</dt>
			            <dd><input type="text" name="startdate" size="16" value="<?php echo $_smarty_tpl->getVariable('firstdate')->value;?>
" readonly="readonly" /></dd>
		            </dl>
		            <dl class="lineD">
			            <dt>截止日期：</dt>
			            <dd><input type="text" name="enddate" size="16" value="<?php echo $_smarty_tpl->getVariable('lastdate')->value;?>
" readonly="readonly" /></dd>
		            </dl>
		            <dl class="lineD">
			            <dt>合计金额：</dt>
			            <dd><input type="text" name="total" id="total" value="<?php echo $_smarty_tpl->getVariable('total')->value;?>
" size="5" readonly/></dd>
		            </dl>
		            <dl class="lineD">
			            <dt>优惠金额：</dt>
			            <dd><input type="text" name="favor" id="favor" value="0" size="5" /></dd>
		            </dl>
		            <dl class="lineD">
			            <dt>实际开票金额：</dt>
			            <dd><input type="text" name="settle_billMoney" id="settle_billMoney" value="<?php echo $_smarty_tpl->getVariable('total')->value;?>
" size="6"/></dd>
		            </dl>
		            <dl class="lineD">
			            <dt>发票号码：</dt>
			            <dd><input type="text" name="settle_billNum" size="15"/></dd>
		            </dl>
		            <dl class="lineD">
			            <dt>开票日期：</dt>
			            <dd><input type="text" name="settle_billDate" size="16" onClick="calendar.show(this);" readonly="readonly" /></dd>
		            </dl>
		            <div class="page_btm">
		            	<input class="btn_b" type="submit" value="确定">
		            </div>
		        
		    </div>
	    </div>
	</td>
	</tr>
  </table>
  </div>
  <div class="Toolbar_inbox">
	<a href="exportoutcar.php?pid=<?php echo (isset($_smarty_tpl->getVariable('busi')->value['paiche_id']) ? $_smarty_tpl->getVariable('busi')->value['paiche_id'] : null);?>
" class="btn_a" ><span>导出</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>月结确认</span></a>
  </div>
</div>
</form>
<!-->
<script>

var isSearchHidden = 1;
function searchNews() {
  if(isSearchHidden == 1) {
    $("#searchTopic_div").slideDown("fast");
    isSearchHidden = 0;
  }else {
    $("#searchTopic_div").slideUp("fast");
    isSearchHidden = 1;
  }
}
$(document).ready(function(){
    $('#favor').bind('input propertychange',function(){
		if ($("#favor").val()!=""){
		    aa=parseFloat($('#total').val())-parseFloat($('#favor').val());
		    $('#settle_billMoney').val(aa);
		}
    });
});
</script>
<!-->
</body>
</html>