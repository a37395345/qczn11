<?php /* Smarty version Smarty-3.0.4, created on 2019-07-29 10:46:40
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/busiaccount/account.html" */ ?>
<?php /*%%SmartyHeaderCode:244555d3e5e1000ca42-03024587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4244206e47852c5ff591a94c6a8fc58aa0af2359' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/busiaccount/account.html',
      1 => 1564368272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '244555d3e5e1000ca42-03024587',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	
	
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<link href="../../../css/style.css" rel="stylesheet" type="text/css">
<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/date_select.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>


</head>
<body>
<form method="post" action="accept.php" name="form1" id="form1">
<input type="hidden" id="op" name="op" value="<?php echo $_smarty_tpl->getVariable('op')->value;?>
" />
<input type="hidden" id="account_flag" name="account_flag" value="<?php echo $_smarty_tpl->getVariable('account_flag')->value;?>
" />
<input type="hidden" name="pid" value="<?php echo $_smarty_tpl->getVariable('pid')->value;?>
" />
<input type="hidden" name="pids" value="<?php echo $_smarty_tpl->getVariable('pids')->value;?>
" />
<div class="so_main">
<?php if ($_smarty_tpl->getVariable('account_flag')->value=="deposit"||$_smarty_tpl->getVariable('account_flag')->value=="account0"||$_smarty_tpl->getVariable('account_flag')->value=="accountcon"){?>
<div class="list">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">序号	</th>
	<th>收费项目</th>
	<th>约定金额</th>
	<th>已收金额</th>
	<th>本次收款</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('chargelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
    	<td><input type="hidden" name="charge_id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null);?>
</td>
		<td><input type="hidden" name="charge_havemoney[]" id="charge_havemoney_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
" /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
</td>
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null)=='押金'){?>
		<td><input type="text" name="charge_money[]" id="charge_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
"  size="10"/></td>
		<?php }else{ ?>
		<td><input type="text" name="charge_money[]" id="charge_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
" size="10"/></td>
		<?php }?>
  </tr>
  
  <?php }} ?>

  <?php if ($_smarty_tpl->getVariable('youhui_list')->value){?>
   <tr>
    <th style="width:30px;">序号	</th>
	<th>优惠项目</th>
	<th>优惠金额</th>
	<th>已优惠金额</th>
	<th>本次优惠</th>
  </tr>
  <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable(0, null, null);?>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('youhui_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->getVariable('index')->value+1, null, null);?>
  <tr overstyle='on' id="youhui_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
    	<td><input type="hidden" name="youhui_id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
"><?php echo $_smarty_tpl->getVariable('index')->value;?>
 </td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_name']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_mone']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_mone'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_omone']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_omone'] : null);?>
</td>
		<td><input type="text" name="youhui_omone[]" id="youhui_omone_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_mone']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_mone'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['youhui_omone']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_omone'] : null);?>
" size="10"/></td>
		
  </tr>
  
  <?php }} ?>
  <?php }?>

 </table>
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
 <tr>
    <th style="text-align:left;">
    	合计金额:<input type="text" name="total" id="total" value="" size="5" readonly/><input type="hidden" name="infact" id="infact" value="" />
    	收款方式:<select name="payments" id="payments">
	                  <option value="">请选择</option>
	                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('paymentslist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_id']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_id'] : null);?>
" rel="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_fee']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_fee'] : null);?>
" <?php if ($_smarty_tpl->getVariable('default_payments')->value==(isset($_smarty_tpl->tpl_vars['rows']->value['payment_id']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_name']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_name'] : null);?>
</option>
	                  <?php }} ?>
	              </select>
	         收款 账户:<select name="bank" id="bank">
	                  <option value="">请选择</option>
	                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('banklist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bank_id']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_id'] : null);?>
" <?php if ($_smarty_tpl->getVariable('default_bank')->value==(isset($_smarty_tpl->tpl_vars['rows']->value['bank_id']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bank_name']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_name'] : null);?>
</option>
	                  <?php }} ?>
	              </select>	          
    	<?php if ($_smarty_tpl->getVariable('account_flag')->value=="deposit"){?>收款时间：<input type="text" name="addtime" size="18" value="<?php echo $_smarty_tpl->getVariable('addtime')->value;?>
" readonly="readonly" /><br/>
    	 收款备注:<input type="text" name="charge_remarks" id="charge_remarks" value="" size="95"/><?php }?>
    </th>
  </tr>
 </table>
</div>
<?php }?>
<?php if ($_smarty_tpl->getVariable('account_flag')->value=="freezedeposit"){?>
<input type="hidden" name="paicheCar2" id="paicheCar2" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paicheCar']) ? $_smarty_tpl->getVariable('list')->value['paicheCar'] : null);?>
" />
<div class="list">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">序号	</th>
	<th>退款项目</th>
	<th>约定金额</th>
	<th>实收</th>
	<th>已冻结金额</th>
	<th>已退金额</th>
	<th>本次冻结</th>
	<th>备注</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('chargelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <?php $_smarty_tpl->tpl_vars['leftmoney'] = new Smarty_variable($_smarty_tpl->getVariable('leftmoney')->value+(isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['have_freeze_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_freeze_money'] : null), null, null);?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
    	<td><input type="hidden" name="back_id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['back_money']) ? $_smarty_tpl->tpl_vars['row']->value['back_money'] : null);?>
</td>
		<td><input type="hidden" name="left_money[]" id="left_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null)-$_smarty_tpl->getVariable('breakmoney')->value;?>
" /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
</td>
		<td><input type="hidden" name="freeze_havemoney[]" id="freeze_havemoney_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_freeze_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_freeze_money'] : null);?>
" /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_freeze_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_freeze_money'] : null);?>
</td>
		<td><input type="hidden" name="back_havemoney[]" id="back_havemoney_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null);?>
" /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null);?>
</td>
		<td><input type="text" name="freeze_money[]" id="freeze_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="" size="10" readonly/></td>
  </tr>
  <?php }} ?>
 </table> 
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
 <tr>
    <th style="text-align:left;">
    	违章记录:<select name="breaklist" id="breaklist">
	                  <option value="">请选择</option>
	                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('breaklist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['rows']->value['breakrules_id'] : null);?>
" rel="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_fee']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_fee'] : null);?>
">苏D<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['car_num']) ? $_smarty_tpl->tpl_vars['rows']->value['car_num'] : null);?>
|<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['breakrules_date']) ? $_smarty_tpl->tpl_vars['rows']->value['breakrules_date'] : null);?>
|<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['breakrules_item']) ? $_smarty_tpl->tpl_vars['rows']->value['breakrules_item'] : null);?>
</option>
	                  <?php }} ?>
	              </select>
    	<span id="showillegal" style="display:none;">违章款：<input type="text" name="backmoney_1" id="backmoney_1" value="" size="4" readonly/>
    	手续费：<input type="text" name="backmoney_2" id="backmoney_2" value="" size="4" readonly/>
    	扣分：<input type="text" name="backmoney_3" id="backmoney_3" value="" size="1" readonly/>=<input type="text" name="backmoney_4" id="backmoney_4" value="" size="4" readonly/>元</span>
    	<br/>合计金额:<input type="text" name="total" id="total" value="" size="5" readonly/><input type="hidden" name="infact" id="infact" value="" />&nbsp;
    	<input type="hidden" name="leftmoney" id="leftmoney" value="<?php echo $_smarty_tpl->getVariable('leftmoney')->value;?>
" /><input type="hidden" name="breakrules_id" id="breakrules_id" value="" />
    </th>
  </tr>
 </table>
</div>
<?php }?>
<?php if ($_smarty_tpl->getVariable('account_flag')->value=="backdeposit"){?>
<input type="hidden" name="paicheCar2" id="paicheCar2" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paicheCar']) ? $_smarty_tpl->getVariable('list')->value['paicheCar'] : null);?>
" />
<div class="list">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">序号	</th>
	<th>退款项目</th>
	<th>约定金额</th>
	<th>实收</th>
	<th>冻结金额</th>
	<th>已退金额</th>
	<th>本次退款</th>
	<th>备注</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('chargelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <?php $_smarty_tpl->tpl_vars['leftmoney'] = new Smarty_variable($_smarty_tpl->getVariable('leftmoney')->value+(isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['have_freeze_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_freeze_money'] : null), null, null);?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
    	<td><input type="hidden" name="back_id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['back_money']) ? $_smarty_tpl->tpl_vars['row']->value['back_money'] : null);?>
</td>
		<td><input type="hidden" name="left_money[]" id="left_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null)-$_smarty_tpl->getVariable('breakmoney')->value;?>
" /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
</td>
		<td><input type="hidden" name="freeze_havemoney[]" id="freeze_havemoney_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_freeze_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_freeze_money'] : null);?>
" /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_freeze_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_freeze_money'] : null);?>
</td>
		<td><input type="hidden" name="back_havemoney[]" id="back_havemoney_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null);?>
" /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null);?>
</td>
		<td><input type="text" name="back_money[]" id="back_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="" size="10"/></td>
  </tr>
  <?php }} ?>
 </table> 
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
 <tr>
    <th style="text-align:left;">
    	合计金额:<input type="text" name="total" id="total" value="" size="5" readonly/><input type="hidden" name="infact" id="infact" value="" />&nbsp;
    	付款方式:<select name="payments" id="payments">
	                  <option value="">请选择</option>
	                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('paymentslist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_id']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_id'] : null);?>
" rel="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_fee']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_fee'] : null);?>
" <?php if ($_smarty_tpl->getVariable('default_payments')->value==(isset($_smarty_tpl->tpl_vars['rows']->value['payment_id']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_name']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_name'] : null);?>
</option>
	                  <?php }} ?>
	              </select>&nbsp;
	              付款 账户:<select name="bank" id="bank">
	                  <option value="">请选择</option>
	                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('banklist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bank_id']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_id'] : null);?>
" <?php if ($_smarty_tpl->getVariable('default_bank')->value==(isset($_smarty_tpl->tpl_vars['rows']->value['bank_id']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bank_name']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_name'] : null);?>
</option>
	                  <?php }} ?>
	              </select><br/>
    	 原因:<input type="text" name="backreason" id="backreason" value="" size="45"/>
    	 <select name="backreason2" id="backreason2"><option value="">选择原因</option><option value="客户加油油费">客户加油油费</option><option value="客户续租金">客户续租金</option><option value="车辆修理费用">车辆修理费用</option><option value="其他">其他</option></select>
    	<span id="showillegal" style="display:none;">违章款：<input type="text" name="backmoney_1" id="backmoney_1" value="" size="4"/>
    	手续费：<input type="text" name="backmoney_2" id="backmoney_2" value="" size="4"/>
    	扣分：<input type="text" name="backmoney_3" id="backmoney_3" value="" size="1"/>=<input type="text" name="backmoney_4" id="backmoney_4" value="" size="4"/>元</span>
    	<input type="hidden" name="leftmoney" id="leftmoney" value="<?php echo $_smarty_tpl->getVariable('leftmoney')->value;?>
" />
    </th>
  </tr>
 </table>
</div>
<?php }?>














<!--结账-->
<?php if ($_smarty_tpl->getVariable('account_flag')->value=="account1"||$_smarty_tpl->getVariable('account_flag')->value=="account2"){?>
<input type="hidden" name="paiche_shunt" id="paiche_shunt" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shunt']) ? $_smarty_tpl->getVariable('list')->value['paiche_shunt'] : null);?>
" />
<input type="hidden" name="paiche_brother" id="paiche_brother" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_brother']) ? $_smarty_tpl->getVariable('list')->value['paiche_brother'] : null);?>
" />
<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_shunt']) ? $_smarty_tpl->getVariable('list')->value['paiche_shunt'] : null)==1){?>
<div class="form2">
	<dl class="lineD">
    	<dt>调车公司：</dt>
    	<dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['bro_name']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['bro_name'] : null);?>
</dd>
  	</dl>
  	<dl class="lineD">
	    <dt>调车公司报价：</dt>
	    <dd><input type="hidden" name="shunt_rent" id="shunt_rent" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['shunt_rent']) ? $_smarty_tpl->getVariable('list')->value['shunt_rent'] : null);?>
" /><?php echo (isset($_smarty_tpl->getVariable('list')->value['shunt_rent']) ? $_smarty_tpl->getVariable('list')->value['shunt_rent'] : null);?>
元</dd>
	</dl>
	<dl class="lineD">
	    <dt>调车公司收现：</dt>
	    <dd><input type="hidden" name="shunt_rented" id="shunt_rented" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['shunt_rented']) ? $_smarty_tpl->getVariable('list')->value['shunt_rented'] : null);?>
" /><?php echo (isset($_smarty_tpl->getVariable('list')->value['shunt_rented']) ? $_smarty_tpl->getVariable('list')->value['shunt_rented'] : null);?>
元</dd>
	</dl>
</div>
<?php }?>
<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_brother']) ? $_smarty_tpl->getVariable('list')->value['paiche_brother'] : null)!=0){?>
<div class="form2">
	<dl class="lineD">
    	<dt>调车公司：</dt>
    	<dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['bro_name']) ? $_smarty_tpl->getVariable('list')->value['bro_name'] : null);?>
</dd>
  	</dl>
	<dl class="lineD">
	    <dt>本公司报价：</dt>
	    <dd><input type="hidden" name="shunt_rent" id="shunt_rent" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['shunt_rent']) ? $_smarty_tpl->getVariable('list')->value['shunt_rent'] : null);?>
" /><?php echo -1*(isset($_smarty_tpl->getVariable('list')->value['shunt_rent']) ? $_smarty_tpl->getVariable('list')->value['shunt_rent'] : null);?>
元<input type="hidden" name="shunt_other" id="shunt_other" value="" /></dd>
	</dl>
	<dl class="lineD">
	    <dt>本公司收现：</dt>
	    <dd><input type="hidden" name="shunt_rented" id="shunt_rented" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['shunt_rented']) ? $_smarty_tpl->getVariable('list')->value['shunt_rented'] : null);?>
" /><?php echo -1*(isset($_smarty_tpl->getVariable('list')->value['shunt_rented']) ? $_smarty_tpl->getVariable('list')->value['shunt_rented'] : null);?>
元</dd>
	</dl>
</div>
<?php }?>
<div class="list">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">序号	</th>
	<th>收费项目</th>
	<th>约定金额</th>
	<th>已收金额</th>
	<th></th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('chargelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
    	<td><input type="hidden" name="charge_id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null);?>
</td>
		<td><input type="hidden" name="charge_havemoney[]" id="charge_havemoney_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
" /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
</td>
		<td>
		<?php if (((isset($_smarty_tpl->getVariable('list')->value['paiche_shunt']) ? $_smarty_tpl->getVariable('list')->value['paiche_shunt'] : null)==1||(isset($_smarty_tpl->getVariable('list')->value['paiche_brother']) ? $_smarty_tpl->getVariable('list')->value['paiche_brother'] : null)!=0)&&(isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null)=='租金'){?>
		<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_shunt']) ? $_smarty_tpl->getVariable('list')->value['paiche_shunt'] : null)==1){?>
		<input type="hidden" name="charge_money[]" id="charge_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null)-(isset($_smarty_tpl->getVariable('list')->value['shunt_rented']) ? $_smarty_tpl->getVariable('list')->value['shunt_rented'] : null);?>
" size="10"/>
		<?php }else{ ?>
		<input type="hidden" name="charge_money[]" id="charge_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo -1*(isset($_smarty_tpl->getVariable('list')->value['shunt_rented']) ? $_smarty_tpl->getVariable('list')->value['shunt_rented'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
" size="10"/>
		<?php }?>
		<?php }else{ ?>
		<input type="hidden" name="charge_money[]" id="charge_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
" size="10"/>
		<?php }?></td>
  </tr>
  <?php }} ?>
  <?php if ($_smarty_tpl->getVariable('youhui_list')->value){?>
   <tr>
    <th style="width:30px;">序号	</th>
	<th>优惠项目</th>
	<th>优惠金额</th>
	<th>已优惠金额</th>
	
  </tr>
  <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable(0, null, null);?>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('youhui_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->getVariable('index')->value+1, null, null);?>
  <tr overstyle='on' id="youhui_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
    	<td><input type="hidden" name="youhui_id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
"><?php echo $_smarty_tpl->getVariable('index')->value;?>
 </td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_name']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_mone']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_mone'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_omone']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_omone'] : null);?>
</td>
		<input type="hidden" name="youhui_omone[]" id="youhui_omone_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_mone']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_mone'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['youhui_omone']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_omone'] : null);?>
" size="10"/>
		
		
  </tr>
  
  <?php }} ?>
  <?php }?>
  <?php if ((isset($_smarty_tpl->getVariable('list')->value['settle_overKmMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overKmMoney'] : null)!=0&&(isset($_smarty_tpl->getVariable('list')->value['settle_overKmMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overKmMoney'] : null)!=(isset($_smarty_tpl->getVariable('list')->value['settle_overKmMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_overKmMoney_have'] : null)){?>
 <tr overstyle='on' id="badge_88">
    	<td>0</td>
	  	<td>超公里费</td>
		<td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overKmMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overKmMoney'] : null);?>
</td>
		<td><input type="hidden" name="overKmMoneyhave" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overKmMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_overKmMoney_have'] : null);?>
"/><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overKmMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_overKmMoney_have'] : null);?>
</td>
		<td><input type="hidden" name="overKmMoney" id="overKmMoney" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overKmMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overKmMoney'] : null)-(isset($_smarty_tpl->getVariable('list')->value['settle_overKmMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_overKmMoney_have'] : null);?>
" size="10"/></td>
 </tr>
 <?php }?>
 <?php if ((isset($_smarty_tpl->getVariable('list')->value['settle_overTimeMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overTimeMoney'] : null)!=0&&(isset($_smarty_tpl->getVariable('list')->value['settle_overTimeMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overTimeMoney'] : null)!=(isset($_smarty_tpl->getVariable('list')->value['settle_overTimeMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_overTimeMoney_have'] : null)){?>
 <tr overstyle='on' id="badge_88">
    	<td>0</td>
	  	<td>超时费</td>
		<td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overTimeMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overTimeMoney'] : null);?>
</td>
		<td><input type="hidden" name="overTimeMoneyhave" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overTimeMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_overTimeMoney_have'] : null);?>
" /><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overTimeMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_overTimeMoney_have'] : null);?>
</td>
		<td><input type="hidden" name="overTimeMoney" id="overTimeMoney" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overTimeMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overTimeMoney'] : null)-(isset($_smarty_tpl->getVariable('list')->value['settle_overTimeMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_overTimeMoney_have'] : null);?>
" size="10"/></td>
 </tr>
 <?php }?>
 <?php if ((isset($_smarty_tpl->getVariable('list')->value['settle_waitTimeMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_waitTimeMoney'] : null)!=0&&(isset($_smarty_tpl->getVariable('list')->value['settle_waitTimeMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_waitTimeMoney'] : null)!=(isset($_smarty_tpl->getVariable('list')->value['settle_waitTimeMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_waitTimeMoney_have'] : null)){?>
 <tr overstyle='on' id="badge_88">
    	<td>0</td>
	  	<td>等待费</td>
		<td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_waitTimeMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_waitTimeMoney'] : null);?>
</td>
		<td><input type="hidden" name="waitTimeMoneyhave" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_waitTimeMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_waitTimeMoney_have'] : null);?>
" /><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_waitTimeMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_waitTimeMoney_have'] : null);?>
</td>
		<td><input type="hidden" name="waitTimeMoney" id="waitTimeMoney" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_waitTimeMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_waitTimeMoney'] : null)-(isset($_smarty_tpl->getVariable('list')->value['settle_waitTimeMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_waitTimeMoney_have'] : null);?>
" size="10"/></td>
 </tr>
 <?php }?>
 <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('itemlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
    	<td><input type="hidden" name="item_id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_costname']) ? $_smarty_tpl->tpl_vars['row']->value['item_costname'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
</td>
		<td><input type="hidden" name="item_money[]" id="item_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
" size="10"/></td>
 </tr>
 <?php }} ?>
 </table>

 <table width="100%" border="0" cellspacing="0" cellpadding="0">
 <tr>
    <th style="text-align:left;">
    	<?php if ($_smarty_tpl->getVariable('account_flag')->value=="account1"&&(isset($_smarty_tpl->getVariable('list')->value['settle_favor']) ? $_smarty_tpl->getVariable('list')->value['settle_favor'] : null)>0){?>优惠金额：<input type="text" name="settle_favor" id="settle_favor" size="5" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_favor']) ? $_smarty_tpl->getVariable('list')->value['settle_favor'] : null);?>
"  readonly/>&nbsp;<?php }?>
    	合计金额:<input type="text" name="total" id="total" value="" size="5" readonly/><?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_brother']) ? $_smarty_tpl->getVariable('list')->value['paiche_brother'] : null)!=0){?><input type="checkbox" value="1" name="chkOther" id="chkOther">额外费用由调车公司支付<?php }?><br />
    	收款方式:<select name="payments" id="payments">
	                  <option value="">请选择</option>
	                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('paymentslist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_id']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_id'] : null);?>
" rel="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_fee']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_fee'] : null);?>
" <?php if ($_smarty_tpl->getVariable('default_payments')->value==(isset($_smarty_tpl->tpl_vars['rows']->value['payment_id']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_name']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_name'] : null);?>
</option>
	                  <?php }} ?>
	              </select>
	         收款 账户:<select name="bank" id="bank">
	                  <option value="">请选择</option>
	                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('banklist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bank_id']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_id'] : null);?>
" <?php if ($_smarty_tpl->getVariable('default_bank')->value==(isset($_smarty_tpl->tpl_vars['rows']->value['bank_id']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bank_name']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_name'] : null);?>
</option>
	                  <?php }} ?>
	              </select><input type="hidden" name="infact" id="infact" value=""/>
    	发票号码:<input type="text" name="settle_billNum" size="15"/>
    	开票日期:<input type="text" name="settle_billDate" size="16" onClick="calendar.show(this);" readonly="readonly" />
    </th>
  </tr>
 </table>
</div>
<?php }?>
<?php if ($_smarty_tpl->getVariable('account_flag')->value=="backmoney"){?>
<div class="list">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">序号	</th>
	<th>退款项目</th>
	<th>应退金额</th>
	<th>已退金额</th>
	<th>违章金额</th>
	<th>本次退款</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('chargelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
    	<td><input type="hidden" name="back_id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
</td>
		<td><input type="hidden" name="back_havemoney[]" id="back_havemoney_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null);?>
" /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null);?>
</td>
		<td><input type="hidden" name="break_money[]" id="break_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo $_smarty_tpl->getVariable('breakmoney')->value;?>
" /><?php echo $_smarty_tpl->getVariable('breakmoney')->value;?>
</td>
		<td><input type="text" name="back_money[]" id="back_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null)-$_smarty_tpl->getVariable('breakmoney')->value;?>
" size="10"/></td>
  </tr>
  <?php }} ?>
 </table> 
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
 <tr>
    <th style="text-align:left;">
    	合计金额:<input type="text" name="total" id="total" value="" size="5" readonly/>&nbsp;
    	付款方式:<select name="payments" id="payments">
	                  <option value="">请选择</option>
	                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('paymentslist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_id']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_id'] : null);?>
" rel="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_fee']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_fee'] : null);?>
" <?php if ($_smarty_tpl->getVariable('default_payments')->value==(isset($_smarty_tpl->tpl_vars['rows']->value['payment_id']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_name']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_name'] : null);?>
</option>
	                  <?php }} ?>
	              </select>&nbsp;
	              付款 账户:<select name="bank" id="bank">
	                  <option value="">请选择</option>
	                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('banklist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bank_id']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_id'] : null);?>
" <?php if ($_smarty_tpl->getVariable('default_bank')->value==(isset($_smarty_tpl->tpl_vars['rows']->value['bank_id']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bank_name']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_name'] : null);?>
</option>
	                  <?php }} ?>
	              </select><input type="hidden" name="infact" id="infact" value="" />
    	
    </th>
  </tr>
 </table>
</div>
<?php }?>
<?php if ($_smarty_tpl->getVariable('account_flag')->value=="accvio"){?>
<div class="list">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <?php if ($_smarty_tpl->getVariable('chargelist')->value){?>
  <tr>
    <th style="width:30px;">序号	</th>
	<th>收费项目</th>
	<th>约定金额</th>
	<th>已收金额</th>
	<th>已退金额</th>
	<th>退款金额</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('chargelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
    	<td><input type="hidden" name="charge_id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null);?>
</td>
		<td><input type="hidden" name="charge_havemoney[]" id="charge_havemoney_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
"/><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
</td>
		<td><input type="hidden" name="charge_havebackmoney[]" id="charge_havebackmoney_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null);?>
"/><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null);?>
</td>
		<td><input type="hidden" name="back_money[]" id="back_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null);?>
"/><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null);?>
</td>
  </tr>
  <?php }} ?>
  <?php }?>
 </table>
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
 <tr>
    <th style="text-align:left;">
    	违约金：<input type="text" name="settle_vio" id="settle_vio" size="5" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_vio']) ? $_smarty_tpl->getVariable('list')->value['settle_vio'] : null);?>
" readonly/>合计金额:<input type="text" name="total" id="total" value="" size="5" readonly/><br />
    	收款方式一:<select name="payments" id="payments" onFocus="this.blur()">
	                  <option value="">请选择</option>
	                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('paymentslist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_id']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_id'] : null);?>
" rel="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_fee']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_fee'] : null);?>
" <?php if ($_smarty_tpl->getVariable('default_payments')->value==(isset($_smarty_tpl->tpl_vars['rows']->value['payment_id']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_name']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_name'] : null);?>
</option>
	                  <?php }} ?>
	              </select>
	         收款 账户一:<select name="bank" id="bank" onFocus="this.blur()">
	                  <option value="">请选择</option>
	                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('banklist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bank_id']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_id'] : null);?>
" <?php if ($_smarty_tpl->getVariable('default_bank')->value==(isset($_smarty_tpl->tpl_vars['rows']->value['bank_id']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bank_name']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_name'] : null);?>
</option>
	                  <?php }} ?>
	              </select>收款金额一:<input type="text" name="money1" id="money1" value="<?php echo -1*$_smarty_tpl->getVariable('paiche_rented')->value;?>
" size="3" /><br />
	         收款方式二:<select name="payments2" id="payments2" onFocus="this.blur()">
	                  <option value="">请选择</option>
	                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('paymentslist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_id']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_id'] : null);?>
" rel="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_fee']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_fee'] : null);?>
" <?php if ($_smarty_tpl->getVariable('default_payments')->value==(isset($_smarty_tpl->tpl_vars['rows']->value['payment_id']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_name']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_name'] : null);?>
</option>
	                  <?php }} ?>
	              </select>       
	         收款账户二:<select name="bank2" id="bank2" onFocus="this.blur()">
	                  <option value="">请选择</option>
	                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('banklist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bank_id']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_id'] : null);?>
" <?php if ($_smarty_tpl->getVariable('default_bank2')->value==(isset($_smarty_tpl->tpl_vars['rows']->value['bank_id']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bank_name']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_name'] : null);?>
</option>
	                  <?php }} ?>
	              </select>收款金额二:<input type="text" name="money2" id="money2" value="<?php echo -1*$_smarty_tpl->getVariable('paiche_deposit_have')->value;?>
" size="3" /><br />    	
    	实收/实付:<input type="text" name="infact" id="infact" value="" size="5" readonly/><input type="hidden" name="client_id" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paicheCom']) ? $_smarty_tpl->getVariable('list')->value['paicheCom'] : null);?>
" />
    </th>
  </tr>
 </table>
</div>
<?php }?>


  <div class="Toolbar_inbox">
    <a href="javascript:void(0);" class="btn_a" name="btn_save" id="btn_save" onclick="ok();"><span>确定</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="closebox();"><span>关闭</span></a>   	
  </div>
</div>
</form>
<script type="text/javascript" src="../../../js/account.js?a=1.1"></script>
<!-->
<script>

</script>
<!-->
</body>
</html>