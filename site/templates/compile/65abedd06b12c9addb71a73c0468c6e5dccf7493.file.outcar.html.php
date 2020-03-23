<?php /* Smarty version Smarty-3.0.4, created on 2014-09-14 09:46:26
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/business/outcar.html" */ ?>
<?php /*%%SmartyHeaderCode:319495414f3725285c2-22044940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65abedd06b12c9addb71a73c0468c6e5dccf7493' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/business/outcar.html',
      1 => 1410659174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '319495414f3725285c2-22044940',
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
  <div class="list">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
	<?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='3'){?>
	<tr>
	<th>日期</th>
	<th>开始公里</th>
	<th>截止公里</th>
	<th>周末/节假日</th>
	<th>备注</th>
	</tr>
	<?php }elseif((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
	<tr>
	<th rowspan="2">日期</th>
	<th colspan="2">开始信息</th>
	<th colspan="2">截止信息</th>
	<th rowspan="2">周末<br />节假日</th>
	<th rowspan="2">是否<br />出差</th>
	<th rowspan="2">带宿<br />出差</th>
	<th rowspan="2">出差备注</th>
	<th rowspan="2">食宿费<br />过路桥</th>
	<th rowspan="2">司机</th>
	<th rowspan="2">备注</th>
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
	<th>司机</th>
	<th>备注</th>
	</tr>
	<?php }?>
<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('havelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
	<tr bgcolor="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['bgcolor']) ? $_smarty_tpl->tpl_vars['list']->value['bgcolor'] : null);?>
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
" size='15' /></td>
	  <td><input type='text' name='drive_specialRemarks[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_specialRemarks']) ? $_smarty_tpl->tpl_vars['list']->value['drive_specialRemarks'] : null);?>
" size='25' /></td>
	  <td><input type='text' name='drive_trips[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_trips']) ? $_smarty_tpl->tpl_vars['list']->value['drive_trips'] : null);?>
" size='2' /><input type='hidden' name='drive_rent[]' value="<?php echo $_smarty_tpl->getVariable('paiche_rent')->value;?>
" /></td>
	  <td><input type='text' name='drive_money[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_money']) ? $_smarty_tpl->tpl_vars['list']->value['drive_money'] : null);?>
" size='5' /></td>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='3'||(isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
	  <td><input type="text" name="driveDriver[]" id="driveDriver_<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_id']) ? $_smarty_tpl->tpl_vars['list']->value['drive_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['driveDriverName']) ? $_smarty_tpl->tpl_vars['list']->value['driveDriverName'] : null);?>
" size="2" onclick="select_driver(<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_id']) ? $_smarty_tpl->tpl_vars['list']->value['drive_id'] : null);?>
)" />
	  <input type="hidden" name="driveDriver2[]" id="driveDriver2_<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_id']) ? $_smarty_tpl->tpl_vars['list']->value['drive_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['driveDriver']) ? $_smarty_tpl->tpl_vars['list']->value['driveDriver'] : null);?>
"/></td>
	  <?php }?>
	  <td><textarea name='drive_remarks[]' cols='10' rows='4'><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_remarks']) ? $_smarty_tpl->tpl_vars['list']->value['drive_remarks'] : null);?>
</textarea></td>
	</tr>
<?php }} ?>
<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('datelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
	<tr bgcolor="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['bgcolor']) ? $_smarty_tpl->tpl_vars['list']->value['bgcolor'] : null);?>
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
	    </select></td>
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
	  <td><input type='text' name='drive_travelRemarks[]' value="班车" size='15' /></td>
	  <td><input type='text' name='drive_specialRemarks[]' value="市区-工厂-市区" size='25' /></td>
	  <td><input type='text' name='drive_trips[]' value="" size='2' /><input type='hidden' name='drive_rent[]' value="<?php echo $_smarty_tpl->getVariable('paiche_rent')->value;?>
" />  </td>
	  <td><input type='text' name='drive_money[]' value="" size='5' /></td>
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
	  <td><textarea name='drive_remarks[]' cols='10' rows='4'></textarea></td>
	</tr>
<?php }} ?>
	
	<tr>
	  <td colspan="13"><input type="submit" id="submit" value="提 交" /></td>
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
  </form>
</div>
<!-->
<script>
$(document).ready(function(){
	$("input[name=drive_trips[]]").live('input propertychange',function(){
		calTotal();
	});
});
function calTotal(){
	var tmpSum=0;
	$.each($('input[name=drive_trips[]]'), function(i, n){
		if ($('input[name=drive_rent[]]').eq(i).val()!="" && $(n).val()!=""){
			tmpSum=parseFloat($('input[name=drive_rent[]]').eq(i).val())*parseFloat($(n).val());
			
			$('input[name=drive_money[]]').eq(i).val(tmpSum);
		}
	});
}
function select_driver(target_id){
	demo_iframe('selectemp.php?sel_type=g&target_id='+target_id,'选择驾驶员',650,380,'login_js');
}
</script>
<!-->
</body>
</html>