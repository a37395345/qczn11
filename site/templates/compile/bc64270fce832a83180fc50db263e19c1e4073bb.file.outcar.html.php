<?php /* Smarty version Smarty-3.0.4, created on 2019-05-07 08:50:57
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/business/outcar.html" */ ?>
<?php /*%%SmartyHeaderCode:258925cd0d6715cfa51-43801695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc64270fce832a83180fc50db263e19c1e4073bb' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/business/outcar.html',
      1 => 1557190242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258925cd0d6715cfa51-43801695',
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
<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../js/check_form.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
    

<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit"><?php echo $_smarty_tpl->getVariable('PAGETITLE')->value;?>
-出车单</div>
  <form method="post" action="account.php" onsubmit="return outcar_check(this)" name="form1">
  <div class="form2">
	<dl class="lineD" >
	    <dt>租金：</dt>
	    <dd><input type="hidden" name="paiche_rent_id" value="2" />
	    <input type="text" id="paiche_rent" name="paiche_rent" value="<?php echo $_smarty_tpl->getVariable('paiche_rent')->value;?>
" size="5"/></dd>
	</dl>
	<dl class="lineD">
	    <dt>限制公里数：</dt>
	    <dd><input type="text" name="paiche_limitKm" id="paiche_limitKm" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('busi')->value['paiche_limitKm']) ? $_smarty_tpl->getVariable('busi')->value['paiche_limitKm'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('busi')->value['paiche_unlimitKm'] : null)=="Y"){?>readonly<?php }else{ ?><?php }?>/>&nbsp;
	    超公里费用：<input type="text" name="paiche_overKm" id="paiche_overKm" size="6"  value="<?php echo (isset($_smarty_tpl->getVariable('busi')->value['paiche_overKm']) ? $_smarty_tpl->getVariable('busi')->value['paiche_overKm'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('busi')->value['paiche_unlimitKm'] : null)=="Y"){?>readonly<?php }else{ ?><?php }?> />/公里&nbsp;
	    不限公里<input type="checkbox" id="paiche_unlimitKm" name="paiche_unlimitKm" onClick="unlimited(this,'paiche_limitKm','paiche_overKm')" <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('busi')->value['paiche_unlimitKm'] : null)=="Y"){?>checked<?php }else{ ?><?php }?> value="Y" />
	    </dd>
	</dl>	
	<dl class="lineD">
	    <dt>前月累计行驶：</dt>
	    <dd><input type="text" name="settle_qianMonth" id="settle_qianMonth" size="6"  value="<?php echo (isset($_smarty_tpl->getVariable('busi')->value['settle_qianMonth']) ? $_smarty_tpl->getVariable('busi')->value['settle_qianMonth'] : null);?>
" />(公里)
	    </dd>
	</dl>
  </div>
  <div class="list">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
	<?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='3'){?>
	<tr>
	<th>日期</th>
	<th>开始公里</th>
	<th>截止公里</th>
	<th>行驶公里数</th>
	<th>周末/节假日</th>
	<th>备注</th>
	</tr>
	<?php }elseif((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
	<tr>
	<th rowspan="2">日期</th>
	<th colspan="2">开始信息</th>
	<th colspan="2">截止信息</th>
	<th rowspan="2">公里<br />数</th>
	<th rowspan="2">工作<br />时间</th>
	<th rowspan="2">扣除<br />时间</th>
	<th rowspan="2">周末<br />节假日</th>
	<th rowspan="2">是否<br />出差</th>
	<th rowspan="2">带宿<br />出差</th>
	<th rowspan="2">省外<br />出差</th>
	<th rowspan="2">出差备注</th>
	<th rowspan="2">食宿费<br />过路桥</th>
	<th rowspan="2">司机</th>
	<th rowspan="2">车辆</th>
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
 $_from = $_smarty_tpl->getVariable('havelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['list']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
	<tr bgcolor="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['bgcolor']) ? $_smarty_tpl->tpl_vars['list']->value['bgcolor'] : null);?>
" id="outcar_<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_id']) ? $_smarty_tpl->tpl_vars['list']->value['drive_id'] : null);?>
<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
">
	  <td><input type="hidden" name="id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_id']) ? $_smarty_tpl->tpl_vars['list']->value['drive_id'] : null);?>
"/> <input type='text' name='drive_dateX[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_date']) ? $_smarty_tpl->tpl_vars['list']->value['drive_date'] : null);?>
" size='6' class="noborder" /></td>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='3'||(isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
	  <td><input type='text' name='drive_startKilo[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_startKilo']) ? $_smarty_tpl->tpl_vars['list']->value['drive_startKilo'] : null);?>
" size='5' /></td>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'||(isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='5'){?>
	  <td><select name='drive_startHour[]'>
	        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('hourlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	            <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['hour']) ? $_smarty_tpl->tpl_vars['rows']->value['hour'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['hour']) ? $_smarty_tpl->tpl_vars['rows']->value['hour'] : null)==(isset($_smarty_tpl->tpl_vars['list']->value['drive_startHour']) ? $_smarty_tpl->tpl_vars['list']->value['drive_startHour'] : null)){?>selected<?php }else{ ?><?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['hour']) ? $_smarty_tpl->tpl_vars['rows']->value['hour'] : null);?>
点</option>
	        <?php }} ?>
	    </select>&nbsp;<select name='drive_startMinute[]' >
	  		<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('minuelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	            <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['minute']) ? $_smarty_tpl->tpl_vars['rows']->value['minute'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['minute']) ? $_smarty_tpl->tpl_vars['rows']->value['minute'] : null)==(isset($_smarty_tpl->tpl_vars['list']->value['drive_startMinute']) ? $_smarty_tpl->tpl_vars['list']->value['drive_startMinute'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['minute']) ? $_smarty_tpl->tpl_vars['rows']->value['minute'] : null);?>
分</option>
	        <?php }} ?>
	    </select>
	  </td>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='3'||(isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
	  <td><input type='text' name='drive_endKilo[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_endKilo']) ? $_smarty_tpl->tpl_vars['list']->value['drive_endKilo'] : null);?>
" size='5' /></td>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='3'){?>
	  <td><input type='text' name='drive_totalKm[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_totalKm']) ? $_smarty_tpl->tpl_vars['list']->value['drive_totalKm'] : null);?>
" size='1' /></td>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
	  <td><select name='drive_endHour[]'>
	  		<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('hourlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	            <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['hour']) ? $_smarty_tpl->tpl_vars['rows']->value['hour'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['hour']) ? $_smarty_tpl->tpl_vars['rows']->value['hour'] : null)==(isset($_smarty_tpl->tpl_vars['list']->value['drive_endHour']) ? $_smarty_tpl->tpl_vars['list']->value['drive_endHour'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['hour']) ? $_smarty_tpl->tpl_vars['rows']->value['hour'] : null);?>
点</option>
	        <?php }} ?>
	    </select>&nbsp;
	    <select name='drive_endMinute[]'>
	  		<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('minuelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	            <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['minute']) ? $_smarty_tpl->tpl_vars['rows']->value['minute'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['minute']) ? $_smarty_tpl->tpl_vars['rows']->value['minute'] : null)==(isset($_smarty_tpl->tpl_vars['list']->value['drive_endMinute']) ? $_smarty_tpl->tpl_vars['list']->value['drive_endMinute'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['minute']) ? $_smarty_tpl->tpl_vars['rows']->value['minute'] : null);?>
分</option>
	        <?php }} ?>
	    </select>
	  </td>
	  <td><input type='text' name='drive_totalKm[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_totalKm']) ? $_smarty_tpl->tpl_vars['list']->value['drive_totalKm'] : null);?>
" size='1' /></td>
	  <td><input type='text' name='drive_totalTime[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_totalTime']) ? $_smarty_tpl->tpl_vars['list']->value['drive_totalTime'] : null);?>
" size='1' /></td>
	  <td><input type='text' name='drive_deductTime[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_deductTime']) ? $_smarty_tpl->tpl_vars['list']->value['drive_deductTime'] : null);?>
" style="width:20px;" /></td>
	  <?php }?>
	  <td>
	  <select name='drive_hol[]'>
	  <option value='工作日' <?php if ((isset($_smarty_tpl->tpl_vars['list']->value['drive_hol']) ? $_smarty_tpl->tpl_vars['list']->value['drive_hol'] : null)=='工作日'){?>selected<?php }?>>工作日</option>
	  <option value='周末' <?php if ((isset($_smarty_tpl->tpl_vars['list']->value['drive_hol']) ? $_smarty_tpl->tpl_vars['list']->value['drive_hol'] : null)=='周末'){?>selected<?php }?>>周末</option>
	  <option value='节假日' <?php if ((isset($_smarty_tpl->tpl_vars['list']->value['drive_hol']) ? $_smarty_tpl->tpl_vars['list']->value['drive_hol'] : null)=='节假日'){?>selected<?php }?>>节假日</option>
	  </select></td>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
	  <td><input type='checkbox' name='check_travel[]' value="1" <?php if ((isset($_smarty_tpl->tpl_vars['list']->value['drive_travel']) ? $_smarty_tpl->tpl_vars['list']->value['drive_travel'] : null)==1){?>checked<?php }?> size='6' />
	  <input type="hidden" name="drive_travel[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_travel']) ? $_smarty_tpl->tpl_vars['list']->value['drive_travel'] : null);?>
" /></td>
	  <td><input type='checkbox' name='check_travelRoom[]' value="1" <?php if ((isset($_smarty_tpl->tpl_vars['list']->value['drive_travelRoom']) ? $_smarty_tpl->tpl_vars['list']->value['drive_travelRoom'] : null)==1){?>checked<?php }?> size='6' />
	  <input type="hidden" name="drive_travelRoom[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_travelRoom']) ? $_smarty_tpl->tpl_vars['list']->value['drive_travelRoom'] : null);?>
" /></td>
	  <td><input type='checkbox' name='check_travelout[]' value="1" <?php if ((isset($_smarty_tpl->tpl_vars['list']->value['drive_travelout']) ? $_smarty_tpl->tpl_vars['list']->value['drive_travelout'] : null)==1){?>checked<?php }?> size='6' />
	  <input type="hidden" name="drive_travelout[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_travelout']) ? $_smarty_tpl->tpl_vars['list']->value['drive_travelout'] : null);?>
" /></td>
	  <td><textarea name='drive_travelRemarks[]' cols='10' rows='4'><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_travelRemarks']) ? $_smarty_tpl->tpl_vars['list']->value['drive_travelRemarks'] : null);?>
</textarea></td>
	  <td style="text-align:left;">食&nbsp;<select name='drive_mealsTimes[]' id='drive_mealsTimes[]'>
	  <option value='0' <?php if ((isset($_smarty_tpl->tpl_vars['list']->value['drive_mealsTimes']) ? $_smarty_tpl->tpl_vars['list']->value['drive_mealsTimes'] : null)==0){?>selected<?php }?>>0次</option>
	  <option value='1' <?php if ((isset($_smarty_tpl->tpl_vars['list']->value['drive_mealsTimes']) ? $_smarty_tpl->tpl_vars['list']->value['drive_mealsTimes'] : null)==1){?>selected<?php }?>>1次</option>
	  <option value='2' <?php if ((isset($_smarty_tpl->tpl_vars['list']->value['drive_mealsTimes']) ? $_smarty_tpl->tpl_vars['list']->value['drive_mealsTimes'] : null)==2){?>selected<?php }?>>2次</option>
	  </select><br />
	  宿&nbsp;<input type='checkbox' name='check_roomTimes[]' value="1" <?php if ((isset($_smarty_tpl->tpl_vars['list']->value['drive_roomTimes']) ? $_smarty_tpl->tpl_vars['list']->value['drive_roomTimes'] : null)==1){?>checked<?php }?> size='6' />
	  <input type="hidden" name="drive_roomTimes[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_roomTimes']) ? $_smarty_tpl->tpl_vars['list']->value['drive_roomTimes'] : null);?>
" /><br />
	  路&nbsp;<input type='text' name='drive_ioll[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_ioll']) ? $_smarty_tpl->tpl_vars['list']->value['drive_ioll'] : null);?>
" size='1' /></td>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='5'){?>
	  <td><input type='text' name='drive_travelRemarks[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_travelRemarks']) ? $_smarty_tpl->tpl_vars['list']->value['drive_travelRemarks'] : null);?>
" size='5' /></td>
	  <td><input type='text' name='drive_specialRemarks[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_specialRemarks']) ? $_smarty_tpl->tpl_vars['list']->value['drive_specialRemarks'] : null);?>
" size='17' /></td>
	  <td><input type='text' name='drive_trips[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_trips']) ? $_smarty_tpl->tpl_vars['list']->value['drive_trips'] : null);?>
" size='2' /><input type='hidden' name='drive_rent[]' value="<?php echo $_smarty_tpl->getVariable('paiche_rent')->value;?>
" /></td>
	  <td><input type='text' name='drive_money[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_money']) ? $_smarty_tpl->tpl_vars['list']->value['drive_money'] : null);?>
" size='4' /></td>
	  <td><input type='text' name='drive_startKilo[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_startKilo']) ? $_smarty_tpl->tpl_vars['list']->value['drive_startKilo'] : null);?>
" size='5' /></td>
	  <td><input type='text' name='drive_endKilo[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_endKilo']) ? $_smarty_tpl->tpl_vars['list']->value['drive_endKilo'] : null);?>
" size='5' /></td>
	  <td><input type='text' name='drive_totalKm[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_totalKm']) ? $_smarty_tpl->tpl_vars['list']->value['drive_totalKm'] : null);?>
" size='1' /></td>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'||(isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='5'){?>
	  <td><input type="text" name="driveDriver[]" id="driveDriver_<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_id']) ? $_smarty_tpl->tpl_vars['list']->value['drive_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['driveDriverName']) ? $_smarty_tpl->tpl_vars['list']->value['driveDriverName'] : null);?>
" size="2" onclick="select_driver(<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_id']) ? $_smarty_tpl->tpl_vars['list']->value['drive_id'] : null);?>
)" />
	  <input type="hidden" name="driveDriver2[]" id="driveDriver2_<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_id']) ? $_smarty_tpl->tpl_vars['list']->value['drive_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['driveDriver']) ? $_smarty_tpl->tpl_vars['list']->value['driveDriver'] : null);?>
"/></td>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
	  <td><input type="text" name="driveCar[]" id="driveCar_<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_id']) ? $_smarty_tpl->tpl_vars['list']->value['drive_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['driveCarNum']) ? $_smarty_tpl->tpl_vars['list']->value['driveCarNum'] : null);?>
" size="2" onclick="select_car(<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_id']) ? $_smarty_tpl->tpl_vars['list']->value['drive_id'] : null);?>
)" />
	  <input type="hidden" name="driveCar2[]" id="driveCar2_<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_id']) ? $_smarty_tpl->tpl_vars['list']->value['drive_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['driveCar']) ? $_smarty_tpl->tpl_vars['list']->value['driveCar'] : null);?>
"/>
	  <a href="javascript:void(0);" onclick="addnew('<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_id']) ? $_smarty_tpl->tpl_vars['list']->value['drive_id'] : null);?>
<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
')">+</a></td>
	  <?php }else{ ?>
	  <td><textarea name='drive_remarks[]' cols='10' rows='4'><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_remarks']) ? $_smarty_tpl->tpl_vars['list']->value['drive_remarks'] : null);?>
</textarea></td>
	  <?php }?>
	  
	</tr>
<?php }} ?>

<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('datelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['list']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
	<tr bgcolor="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['bgcolor']) ? $_smarty_tpl->tpl_vars['list']->value['bgcolor'] : null);?>
" id="outcar_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
">
	  <td><input type="hidden" name="id[]" value=""/><input type='text' name='drive_dateX[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['date']) ? $_smarty_tpl->tpl_vars['list']->value['date'] : null);?>
" size='6' class="noborder" /></td>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='3'||(isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
	  <td><input type='text' name='drive_startKilo[]' value="" size='5' /></td>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'||(isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='5'){?>
	  <td><select name='drive_startHour[]'>
	        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('hourlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	            <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['hour']) ? $_smarty_tpl->tpl_vars['rows']->value['hour'] : null);?>
" ><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['hour']) ? $_smarty_tpl->tpl_vars['rows']->value['hour'] : null);?>
点</option>
	        <?php }} ?>
	    </select>&nbsp;<select name='drive_startMinute[]'>
	  		<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('minuelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	            <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['minute']) ? $_smarty_tpl->tpl_vars['rows']->value['minute'] : null);?>
" ><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['minute']) ? $_smarty_tpl->tpl_vars['rows']->value['minute'] : null);?>
分</option>
	        <?php }} ?>
	    </select></td>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='3'||(isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
	  <td><input type='text' name='drive_endKilo[]' value="" size='5' /></td>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='3'){?>
	  <td><input type='text' name='drive_totalKm[]' value="" size='1' /></td>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>	  
	  <td><select name='drive_endHour[]'>
	  		<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('hourlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	            <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['hour']) ? $_smarty_tpl->tpl_vars['rows']->value['hour'] : null);?>
" ><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['hour']) ? $_smarty_tpl->tpl_vars['rows']->value['hour'] : null);?>
点</option>
	        <?php }} ?>
	    </select>&nbsp;
	    <select name='drive_endMinute[]'>
	  		<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('minuelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	            <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['minute']) ? $_smarty_tpl->tpl_vars['rows']->value['minute'] : null);?>
" ><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['minute']) ? $_smarty_tpl->tpl_vars['rows']->value['minute'] : null);?>
分</option>
	        <?php }} ?>
	    </select>
	  </td>
	  <td><input type='text' name='drive_totalKm[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_totalKm']) ? $_smarty_tpl->tpl_vars['list']->value['drive_totalKm'] : null);?>
" size='1' /></td>
	  <td><input type='text' name='drive_totalTime[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_totalTime']) ? $_smarty_tpl->tpl_vars['list']->value['drive_totalTime'] : null);?>
" size='1' /></td>
	  <td><input type='text' name='drive_deductTime[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_deductTime']) ? $_smarty_tpl->tpl_vars['list']->value['drive_deductTime'] : null);?>
" style="width:20px;" /></td>
	  <?php }?>
	  <td>
	  <select name='drive_hol[]'>
	  <option value='工作日' <?php if ((isset($_smarty_tpl->tpl_vars['list']->value['isWorkDay']) ? $_smarty_tpl->tpl_vars['list']->value['isWorkDay'] : null)==1){?>selected<?php }else{ ?><?php }?>>工作日</option>
	  <option value='周末' <?php if ((isset($_smarty_tpl->tpl_vars['list']->value['isWeekEnd']) ? $_smarty_tpl->tpl_vars['list']->value['isWeekEnd'] : null)==1){?>selected<?php }else{ ?><?php }?>>周末</option>
	  <option value='节假日' <?php if ((isset($_smarty_tpl->tpl_vars['list']->value['isHoliDay']) ? $_smarty_tpl->tpl_vars['list']->value['isHoliDay'] : null)==1){?>selected<?php }else{ ?><?php }?>>节假日</option>
	  </select></td>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
	  <td><input type='checkbox' name='check_travel[]' value="1" size='6' />
	  <input type="hidden" name="drive_travel[]" value="0" /></td>
	  <td><input type='checkbox' name='check_travelRoom[]' value="1" size='6' />
	  <input type="hidden" name="drive_travelRoom[]" value="0" /></td>
	  <td><input type='checkbox' name='check_travelout[]' value="1" size='6' />
	  <input type="hidden" name="drive_travelout[]" value="0" /></td>
	  <td><textarea name='drive_travelRemarks[]' cols='10' rows='4'></textarea></td>
	  <td style="text-align:left;">食&nbsp;<select name='drive_mealsTimes[]'>
	  <option value='0' selected>0次</option>
	  <option value='1' >1次</option>
	  <option value='2' >2次</option>
	  </select><br />
	  宿&nbsp;<input type='checkbox' name='check_roomTimes[]' value="1" size='6' />
	  <input type="hidden" name="drive_roomTimes[]" value="0" /><br />
	  路&nbsp;<input type='text' name='drive_ioll[]' value="" size='1' /></td>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='5'){?>
	  <td><input type='text' name='drive_travelRemarks[]' value="班车" size='5' /></td>
	  <td><input type='text' name='drive_specialRemarks[]' value="市区-工厂-市区" size='17' /></td>
	  <td><input type='text' name='drive_trips[]' value="" size='2' /><input type='hidden' name='drive_rent[]' value="<?php echo $_smarty_tpl->getVariable('paiche_rent')->value;?>
" />  </td>
	  <td><input type='text' name='drive_money[]' value="" size='4' /></td>
	  <td><input type='text' name='drive_startKilo[]' value="" size='5' /></td>
	  <td><input type='text' name='drive_endKilo[]' value="" size='5' /></td>
	  <td><input type='text' name='drive_totalKm[]' value="" size='1' /></td>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'||(isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='5'){?>
	  <td><input type="text" name="driveDriver[]" id="driveDriver_<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['no']) ? $_smarty_tpl->tpl_vars['list']->value['no'] : null);?>
" value="<?php echo (isset($_smarty_tpl->getVariable('busi')->value['siji']) ? $_smarty_tpl->getVariable('busi')->value['siji'] : null);?>
" size="2" onclick="select_driver(<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['no']) ? $_smarty_tpl->tpl_vars['list']->value['no'] : null);?>
)" />
	  <input type="hidden" name="driveDriver2[]" id="driveDriver2_<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['no']) ? $_smarty_tpl->tpl_vars['list']->value['no'] : null);?>
" value="<?php echo (isset($_smarty_tpl->getVariable('busi')->value['paicheDriver']) ? $_smarty_tpl->getVariable('busi')->value['paicheDriver'] : null);?>
" size="1" /></td>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
	  <td>
	  <?php $_tmp1=$_smarty_tpl->getVariable('changelist')->value;?><?php if (!empty($_tmp1)&&(isset($_smarty_tpl->tpl_vars['list']->value['date']) ? $_smarty_tpl->tpl_vars['list']->value['date'] : null)<(isset($_smarty_tpl->getVariable('changelist')->value['changecar_startdate']) ? $_smarty_tpl->getVariable('changelist')->value['changecar_startdate'] : null)){?>
	  <input type="text" name="driveCar[]" id="driveCar_<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['no']) ? $_smarty_tpl->tpl_vars['list']->value['no'] : null);?>
" value="<?php echo (isset($_smarty_tpl->getVariable('changelist')->value['carA']) ? $_smarty_tpl->getVariable('changelist')->value['carA'] : null);?>
" size="2" onclick="select_car(<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['no']) ? $_smarty_tpl->tpl_vars['list']->value['no'] : null);?>
)" />
	  <input type="hidden" name="driveCar2[]" id="driveCar2_<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['no']) ? $_smarty_tpl->tpl_vars['list']->value['no'] : null);?>
" value="<?php echo (isset($_smarty_tpl->getVariable('changelist')->value['changecar_carA']) ? $_smarty_tpl->getVariable('changelist')->value['changecar_carA'] : null);?>
"/>
	  <?php }else{ ?>
	  <input type="text" name="driveCar[]" id="driveCar_<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['no']) ? $_smarty_tpl->tpl_vars['list']->value['no'] : null);?>
" value="<?php echo (isset($_smarty_tpl->getVariable('busi')->value['car_num']) ? $_smarty_tpl->getVariable('busi')->value['car_num'] : null);?>
" size="2" onclick="select_car(<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['no']) ? $_smarty_tpl->tpl_vars['list']->value['no'] : null);?>
)" />
	  <input type="hidden" name="driveCar2[]" id="driveCar2_<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['no']) ? $_smarty_tpl->tpl_vars['list']->value['no'] : null);?>
" value="<?php echo (isset($_smarty_tpl->getVariable('busi')->value['paicheCar']) ? $_smarty_tpl->getVariable('busi')->value['paicheCar'] : null);?>
"/>
	  <?php }?>
	  <a href="javascript:void(0);" onclick="addnew('<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
')">+</a></td>
	  <?php }else{ ?>
	  <td><textarea name='drive_remarks[]' cols='10' rows='4'></textarea></td>
	  <?php }?>
	  
	</tr>
<?php }} ?>
	
	<tr>
	  <td colspan="13"><input type="submit" id="submit" value="提 交" />&nbsp;&nbsp;<input type="button" id="submit" value="返回" onclick="javascript:history.go(-1);" /></td>
	</tr>
	</table>
  </div>
  <input type="hidden" name="pid" value="<?php echo (isset($_smarty_tpl->getVariable('busi')->value['paiche_id']) ? $_smarty_tpl->getVariable('busi')->value['paiche_id'] : null);?>
" />
  <input type="hidden" name="paiche_workTime" value="<?php echo (isset($_smarty_tpl->getVariable('busi')->value['paiche_workTime']) ? $_smarty_tpl->getVariable('busi')->value['paiche_workTime'] : null);?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  <input type="hidden" name="b_id" id="b_id" value="<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
" />
  <input type="hidden" id="siji" value="<?php echo (isset($_smarty_tpl->getVariable('busi')->value['siji']) ? $_smarty_tpl->getVariable('busi')->value['siji'] : null);?>
" />
  <input type="hidden" id="paicheDriver" value="<?php echo (isset($_smarty_tpl->getVariable('busi')->value['paicheDriver']) ? $_smarty_tpl->getVariable('busi')->value['paicheDriver'] : null);?>
" />
  <input type="hidden" id="car_num" value="<?php echo (isset($_smarty_tpl->getVariable('busi')->value['car_num']) ? $_smarty_tpl->getVariable('busi')->value['car_num'] : null);?>
" />
  <input type="hidden" id="paicheCar" value="<?php echo (isset($_smarty_tpl->getVariable('busi')->value['paicheCar']) ? $_smarty_tpl->getVariable('busi')->value['paicheCar'] : null);?>
" />
  <input type="hidden" name="parentid" value="<?php echo (isset($_smarty_tpl->getVariable('busi')->value['paiche_parent']) ? $_smarty_tpl->getVariable('busi')->value['paiche_parent'] : null);?>
" />
  </form>
</div>
<!-->
<script>
var tmpSum=0;
var nIndex=0;

$(document).ready(function(){
	//根据趟数计算租金
	$("input[name=drive_trips[]]").live('input propertychange',function(){
		nIndex=$("input[name=drive_trips[]]").index(this);
		if ($('input[name=drive_rent[]]').eq(nIndex).val()!="" && $(this).val()!=""){
			tmpSum=parseFloat($('input[name=drive_rent[]]').eq(nIndex).val())*parseFloat($(this).val());
			
			$('input[name=drive_money[]]').eq(nIndex).val(tmpSum);
		}
	});
	//根据结束里程数计算当天行驶公里数
	$("input[name=drive_endKilo[]]").live('input propertychange',function(){
		nIndex=$("input[name=drive_endKilo[]]").index(this);
		if ($('input[name=drive_startKilo[]]').eq(nIndex).val()!="" && $(this).val()!=""){
			tmpSum=parseFloat($(this).val())-parseFloat($('input[name=drive_startKilo[]]').eq(nIndex).val());
			
			$('input[name=drive_totalKm[]]').eq(nIndex).val(tmpSum);
		}
		
	});
	//结束里程失去焦点
	$("input[name=drive_endKilo[]]").blur(function(){
		nIndex=$("input[name=drive_endKilo[]]").index(this);
		if ($(this).val()!="" && $('input[name=drive_startKilo[]]').eq(nIndex+1).length>0){
			if ($('input[name=drive_startKilo[]]').eq(nIndex+1).val() ==""){
				$('input[name=drive_startKilo[]]').eq(nIndex+1).val($(this).val());
			}
		}
	});
	//根据当天行驶公里数计算结束里程数
	$("input[name=drive_totalKm[]]").live('input propertychange',function(){
		nIndex=$("input[name=drive_totalKm[]]").index(this);
		if ($('input[name=drive_startKilo[]]').eq(nIndex).val()!="" && $(this).val()!=""){
			tmpSum=parseFloat($('input[name=drive_startKilo[]]').eq(nIndex).val())+parseFloat($(this).val());
			$('input[name=drive_endKilo[]]').eq(nIndex).val(tmpSum);
		}
	});
	//行驶公里数失去焦点
	$("input[name=drive_totalKm[]]").blur(function(){
		nIndex=$("input[name=drive_totalKm[]]").index(this);
		if ($(this).val()!="" && $('input[name=drive_startKilo[]]').eq(nIndex+1).length>0){
			if ($('input[name=drive_startKilo[]]').eq(nIndex+1).val() =="" && $('input[name=drive_endKilo[]]').eq(nIndex).val() !=""){
				$('input[name=drive_startKilo[]]').eq(nIndex+1).val($('input[name=drive_endKilo[]]').eq(nIndex).val());
			}
		}
	});
	//结束时间change
	$("select[name=drive_endHour[]]").live('change',function(){
		nIndex=$("select[name=drive_endHour[]]").index(this);
		calMinute(nIndex);
	});
	$("select[name=drive_endMinute[]]").live('change',function(){
		nIndex=$("select[name=drive_endMinute[]]").index(this);
		calMinute(nIndex);
	});
});

function calMinute(nIndex){
	iDate=$('input[name=drive_dateX[]]').eq(nIndex).val();
	sHour=$('select[name=drive_startHour[]]').eq(nIndex).val();
	sMinute=$('select[name=drive_startMinute[]]').eq(nIndex).val();
	eHour=$('select[name=drive_endHour[]]').eq(nIndex).val();
	eMinute=$('select[name=drive_endMinute[]]').eq(nIndex).val();
	sTime=iDate + " " + sHour + ":" + sMinute + ":00";
	eTime=iDate + " " + eHour + ":" + eMinute + ":00";
	$('input[name=drive_totalTime[]]').eq(nIndex).val(dateDiff("M",sTime,eTime));
}
function select_driver(target_id){
	demo_iframe('selectemp.php?sel_type=g&target_id='+target_id,'选择驾驶员',650,380,'login_js');
}
function select_car(target_id){
	demo_iframe('selectemp.php?sel_type=j&target_id='+target_id,'选择车辆',650,380,'login_js');
}

function dateDiff(interval, date1, date2)
{
   var objInterval = {'D':1000 * 60 * 60 * 24,'H':1000 * 60 * 60,'M':1000 * 60,'S':1000,'T':1};
   interval = interval.toUpperCase();
   var dt1 = new Date(Date.parse(date1.replace(/-/g, '/')));
   var dt2 = new Date(Date.parse(date2.replace(/-/g, '/')));
   try
   {
      //alert((dt2.getTime() - dt1.getTime()) / eval_r('objInterval.'+interval));
      return Math.round((dt2.getTime() - dt1.getTime()) / (1000 * 60));
    }
    catch (e)
    {
      return e.message;
    }
}
function addnew(nid){
	var strAdd='<tr>';
	strAdd+='<td><input type="hidden" name="id[]" value=""/><input type="text" name="drive_dateX[]" value="" size="6" class="noborder" /></td>';
	strAdd+='<td><input type="text" name="drive_startKilo[]" value="" size="5" /></td>';
	strAdd+='<td><select name="drive_startHour[]">';
	for (var i=0;i<24;i++){
		strAdd+='<option value="'+i+'" >'+i+'点</option>';
	}
	strAdd+='</select>&nbsp;<select name="drive_startMinute[]">';
	for (var j=0;j<60;j=j+5){
		strAdd+='<option value="'+j+'" >'+j+'分</option>';
	}
	strAdd+='</select></td>';
	strAdd+='<td><input type="text" name="drive_endKilo[]" value="" size="5" /></td>';
	strAdd+='<td><select name="drive_endHour[]">';
	for (var i=0;i<24;i++){
		strAdd+='<option value="'+i+'" >'+i+'点</option>';
	}
	strAdd+='</select>&nbsp;<select name="drive_endMinute[]">';
	for (var j=0;j<60;j=j+5){
		strAdd+='<option value="'+j+'" >'+j+'分</option>';
	}
	strAdd+='</select></td>';
	strAdd+='<td><input type="text" name="drive_totalKm[]" value="" size="1" /></td>';
	strAdd+='<td><input type="text" name="drive_totalTime[]" value="" size="1" /></td>';
	strAdd+='<td><select name="drive_hol[]"><option value="工作日" selected>工作日</option><option value="周末" >周末</option><option value="节假日" >节假日</option></select></td>';
	strAdd+='<td><input type="checkbox" name="check_travel[]" value="1" size="6" /><input type="hidden" name="drive_travel[]" value="0" /></td>';
	strAdd+='<td><input type="checkbox" name="check_travelRoom[]" value="1" size="6" /><input type="hidden" name="drive_travelRoom[]" value="0" /></td>';
	strAdd+='<td><input type="checkbox" name="check_travelout[]" value="1" size="6" /><input type="hidden" name="drive_travelout[]" value="0" /></td>';
	strAdd+='<td><textarea name="drive_travelRemarks[]" cols="10" rows="4"></textarea></td>';
	strAdd+='<td style="text-align:left;">食&nbsp;<select name="drive_mealsTimes[]"><option value="0" selected>0次</option><option value="1" >1次</option><option value="2" >2次</option></select><br />';
	strAdd+='  宿&nbsp;<input type="checkbox" name="check_roomTimes[]" value="1" size="6" /><input type="hidden" name="drive_roomTimes[]" value="0" /><br />';
	strAdd+='  路&nbsp;<input type="text" name="drive_ioll[]" value="" size="1" /></td>';
	strAdd+='<td><input type="text" name="driveDriver[]" id="driveDriver_100'+nid+'" value="'+$("#siji").val()+'" size="2" onclick="select_driver(100'+nid+')" /><input type="hidden" name="driveDriver2[]" id="driveDriver2_100'+nid+'" value="'+$("#siji").val()+'{$busi.paicheDriver}" size="1" /></td>';
	strAdd+='<td><input type="text" name="driveCar[]" id="driveCar_100'+nid+'" value="'+$("#car_num").val()+'" size="2" onclick="select_car(100'+nid+')" /><input type="hidden" name="driveCar2[]" id="driveCar2_100'+nid+'" value="'+$("#paicheCar").val()+'"/></td>';
	strAdd+='</tr>';	  
	$("#outcar_"+nid).after(strAdd);
}
</script>
<!-->
</body>
</html>