<?php /* Smarty version Smarty-3.0.4, created on 2014-10-11 20:50:31
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/business/account.html" */ ?>
<?php /*%%SmartyHeaderCode:143315439279718efc5-74093835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd7bc9b2d480f3e97efa6300d5cd0e890062d50e' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/business/account.html',
      1 => 1413031355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143315439279718efc5-74093835',
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
<form method="post" action="account.php" name="form1" id="form1">
<input type="hidden" id="op" name="op" value="<?php echo $_smarty_tpl->getVariable('op')->value;?>
" />
<input type="hidden" name="pid" value="<?php echo $_smarty_tpl->getVariable('pid')->value;?>
" />
<input type="hidden" name="pids" value="<?php echo $_smarty_tpl->getVariable('pids')->value;?>
" />
<div class="so_main">
  <div class="page_tit_1"><?php echo $_smarty_tpl->getVariable('PAGETITLE')->value;?>
</div>
  <?php if ($_smarty_tpl->getVariable('op')->value=="returncar"||$_smarty_tpl->getVariable('op')->value=="givecar"){?>
  <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_shunt']) ? $_smarty_tpl->getVariable('list')->value['paiche_shunt'] : null)==1){?>
  <div class="page_tit_2">调车公司：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['bro_name']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['bro_name'] : null);?>
&nbsp;&nbsp;司机：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_driver']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_driver'] : null);?>
&nbsp;&nbsp;司机电话：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_driverPhone']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_driverPhone'] : null);?>
</div>
  <?php }else{ ?>
  <div class="page_tit_2">车辆：<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
-<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_color']) ? $_smarty_tpl->getVariable('list')->value['car_color'] : null);?>
-<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_brand']) ? $_smarty_tpl->getVariable('list')->value['car_brand'] : null);?>
-<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_type']) ? $_smarty_tpl->getVariable('list')->value['car_type'] : null);?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->getVariable('op')->value=="givecar"){?>驾驶员：<?php echo (isset($_smarty_tpl->getVariable('list')->value['siji']) ? $_smarty_tpl->getVariable('list')->value['siji'] : null);?>
<?php }?></div>
  <?php }?>
  <?php }?>
<?php if ($_smarty_tpl->getVariable('op')->value=="check"){?>
<input type="hidden" name="task" value="check_accept" />
<div class="list">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">序号	</th>
	<th>收费项目</th>
	<th>约定金额</th>
	<th>已收金额</th>
	<th>应退金额</th>
	<th>已退金额</th>
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
    	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['back_money']) ? $_smarty_tpl->tpl_vars['row']->value['back_money'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null);?>
</td>
  </tr>
  <?php }} ?>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('itemlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
    	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_costname']) ? $_smarty_tpl->tpl_vars['row']->value['item_costname'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
 </tr>
 <?php }} ?>
</table>
</div>
<div class="form2">
	<dl class="lineD">
	  <dt style="text-align:left;width:70px;">审核意见：</dt>
	  <dd style="margin-left:75px;"><textarea name="checkNote" id="checkNote" cols="60" rows="3"></textarea></dd>
	</dl>
</div>
<?php }?>
<?php if ($_smarty_tpl->getVariable('op')->value=="revisit"){?>
<div class="page_tit_3">&nbsp;</div>
<input type="hidden" name="task" value="revisit_accept" />
<div class="form2">
  		<dl class="lineD">
	      <dt><span class="redstar">*</span>回访日期：</dt>
	      <dd>
	        <input type="text" name="revisit_Date" id="revisit_Date" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['revisit_Date']) ? $_smarty_tpl->getVariable('list')->value['revisit_Date'] : null);?>
" onClick="calendar.show(this);" readonly="readonly" />
	      </dd>
	    </dl>
	    <dl class="lineD">
		    <dt>接待人员服务态度：</dt>
		    <dd><input type="radio" name="revisit_reception" value="满意" <?php if ((isset($_smarty_tpl->getVariable('list')->value['revisit_reception']) ? $_smarty_tpl->getVariable('list')->value['revisit_reception'] : null)=="满意"){?>checked<?php }?> />满意&nbsp;&nbsp;
		    <input type="radio" name="revisit_reception" value="一般" <?php if ((isset($_smarty_tpl->getVariable('list')->value['revisit_reception']) ? $_smarty_tpl->getVariable('list')->value['revisit_reception'] : null)=="一般"){?>checked<?php }?> />一般&nbsp;&nbsp;
		    <input type="radio" name="revisit_reception" value="不满意" <?php if ((isset($_smarty_tpl->getVariable('list')->value['revisit_reception']) ? $_smarty_tpl->getVariable('list')->value['revisit_reception'] : null)=="不满意"){?>checked<?php }?> />不满意</dd>
		</dl>
	    <dl class="lineD">
		    <dt>车辆整洁程度：</dt>
		    <dd><input type="radio" name="revisit_clean" value="满意" <?php if ((isset($_smarty_tpl->getVariable('list')->value['revisit_clean']) ? $_smarty_tpl->getVariable('list')->value['revisit_clean'] : null)=="满意"){?>checked<?php }?> />满意&nbsp;&nbsp;
		    <input type="radio" name="revisit_clean" value="一般" <?php if ((isset($_smarty_tpl->getVariable('list')->value['revisit_clean']) ? $_smarty_tpl->getVariable('list')->value['revisit_clean'] : null)=="一般"){?>checked<?php }?> />一般&nbsp;&nbsp;
		    <input type="radio" name="revisit_clean" value="不满意" <?php if ((isset($_smarty_tpl->getVariable('list')->value['revisit_clean']) ? $_smarty_tpl->getVariable('list')->value['revisit_clean'] : null)=="不满意"){?>checked<?php }?> />不满意</dd>
		</dl>
		<dl class="lineD">
		    <dt>车辆准时程度：</dt>
		    <dd><input type="radio" name="revisit_ontime" value="满意" <?php if ((isset($_smarty_tpl->getVariable('list')->value['revisit_ontime']) ? $_smarty_tpl->getVariable('list')->value['revisit_ontime'] : null)=="满意"){?>checked<?php }?> />满意&nbsp;&nbsp;
		    <input type="radio" name="revisit_ontime" value="一般" <?php if ((isset($_smarty_tpl->getVariable('list')->value['revisit_ontime']) ? $_smarty_tpl->getVariable('list')->value['revisit_ontime'] : null)=="一般"){?>checked<?php }?> />一般&nbsp;&nbsp;
		    <input type="radio" name="revisit_ontime" value="不满意" <?php if ((isset($_smarty_tpl->getVariable('list')->value['revisit_ontime']) ? $_smarty_tpl->getVariable('list')->value['revisit_ontime'] : null)=="不满意"){?>checked<?php }?> />不满意</dd>
		</dl>
		<dl class="lineD">
		    <dt>司机文明驾驶：</dt>
		    <dd><input type="radio" name="revisit_civilization" value="满意" <?php if ((isset($_smarty_tpl->getVariable('list')->value['revisit_civilization']) ? $_smarty_tpl->getVariable('list')->value['revisit_civilization'] : null)=="满意"){?>checked<?php }?> />满意&nbsp;&nbsp;
		    <input type="radio" name="revisit_civilization" value="一般" <?php if ((isset($_smarty_tpl->getVariable('list')->value['revisit_civilization']) ? $_smarty_tpl->getVariable('list')->value['revisit_civilization'] : null)=="一般"){?>checked<?php }?> />一般&nbsp;&nbsp;
		    <input type="radio" name="revisit_civilization" value="不满意" <?php if ((isset($_smarty_tpl->getVariable('list')->value['revisit_civilization']) ? $_smarty_tpl->getVariable('list')->value['revisit_civilization'] : null)=="不满意"){?>checked<?php }?> />不满意</dd>
		</dl>
		<dl class="lineD">
		    <dt>收费合理程度：</dt>
		    <dd><input type="radio" name="revisit_charge" value="满意" <?php if ((isset($_smarty_tpl->getVariable('list')->value['revisit_charge']) ? $_smarty_tpl->getVariable('list')->value['revisit_charge'] : null)=="满意"){?>checked<?php }?> />满意&nbsp;&nbsp;
		    <input type="radio" name="revisit_charge" value="一般" <?php if ((isset($_smarty_tpl->getVariable('list')->value['revisit_charge']) ? $_smarty_tpl->getVariable('list')->value['revisit_charge'] : null)=="一般"){?>checked<?php }?> />一般&nbsp;&nbsp;
		    <input type="radio" name="revisit_charge" value="不满意" <?php if ((isset($_smarty_tpl->getVariable('list')->value['revisit_charge']) ? $_smarty_tpl->getVariable('list')->value['revisit_charge'] : null)=="不满意"){?>checked<?php }?> />不满意</dd>
		</dl>
		<dl class="lineD">
		    <dt>其他说明：</dt>
		    <dd><textarea name="revisit_Remarks" cols="40" rows="5"><?php echo (isset($_smarty_tpl->getVariable('list')->value['revisit_Remarks']) ? $_smarty_tpl->getVariable('list')->value['revisit_Remarks'] : null);?>
</textarea></dd>
		</dl>
</div>
<?php }?>
<?php if ($_smarty_tpl->getVariable('op')->value=="account"){?>
<input type="hidden" name="task" value="accept" />
<input type="hidden" name="account_flag" value="<?php echo $_smarty_tpl->getVariable('account_flag')->value;?>
" />
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
		<td><input type="text" name="charge_havemoney[]" id="charge_havemoney_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
" size="10" onFocus="this.blur()"/></td>
		<td><input type="text" name="charge_money[]" id="charge_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
" size="10"/></td>
  </tr>
  <?php }} ?>
  <?php if ($_smarty_tpl->getVariable('account_flag')->value==1){?>
  <?php if ((isset($_smarty_tpl->getVariable('list')->value['settle_overKmMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overKmMoney'] : null)!=0&&(isset($_smarty_tpl->getVariable('list')->value['settle_overKmMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overKmMoney'] : null)!=(isset($_smarty_tpl->getVariable('list')->value['settle_overKmMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_overKmMoney_have'] : null)){?>
 <tr overstyle='on' id="badge_88">
    	<td>0</td>
	  	<td>超公里费</td>
		<td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overKmMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overKmMoney'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overKmMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_overKmMoney_have'] : null);?>
</td>
		<td><input type="text" name="overKmMoney" id="overKmMoney" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overKmMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overKmMoney'] : null)-(isset($_smarty_tpl->getVariable('list')->value['settle_overKmMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_overKmMoney_have'] : null);?>
" size="10"/></td>
 </tr>
 <?php }?>
 <?php if ((isset($_smarty_tpl->getVariable('list')->value['settle_overTimeMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overTimeMoney'] : null)!=0&&(isset($_smarty_tpl->getVariable('list')->value['settle_overTimeMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overTimeMoney'] : null)!=(isset($_smarty_tpl->getVariable('list')->value['settle_overTimeMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_overTimeMoney_have'] : null)){?>
 <tr overstyle='on' id="badge_88">
    	<td>0</td>
	  	<td>超时费</td>
		<td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overTimeMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overTimeMoney'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overTimeMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_overTimeMoney_have'] : null);?>
</td>
		<td><input type="text" name="overTimeMoney" id="overTimeMoney" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overTimeMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overTimeMoney'] : null)-(isset($_smarty_tpl->getVariable('list')->value['settle_overTimeMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_overTimeMoney_have'] : null);?>
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
		<td><input type="text" name="item_money[]" id="item_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
" size="10"/></td>
 </tr>
 <?php }} ?>
 <?php }?>
 </table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
 <?php if ($_smarty_tpl->getVariable('account_flag')->value==1&&$_smarty_tpl->getVariable('backlist')->value){?>
  <tr>
    <th style="width:30px;">序号	</th>
	<th>退款项目</th>
	<th>应退金额</th>
	<th>已退金额</th>
	<th>本次退款</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('backlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['back_money']) ? $_smarty_tpl->tpl_vars['row']->value['back_money'] : null);?>
</td>
		<td><input type="text" name="back_havemoney[]" id="back_havemoney_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null);?>
" size="10" onFocus="this.blur()"/></td>
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null)=="押金"){?>
		<td><input type="text" name="back_money[]" id="back_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo 0.8*((isset($_smarty_tpl->tpl_vars['row']->value['back_money']) ? $_smarty_tpl->tpl_vars['row']->value['back_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null));?>
" size="10"/></td>
		<?php }else{ ?>
		<td><input type="text" name="back_money[]" id="back_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['back_money']) ? $_smarty_tpl->tpl_vars['row']->value['back_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null);?>
" size="10"/></td>
		<?php }?>
  </tr>
  <?php }} ?>
 <?php }?>
 </table> 
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
 <input type="hidden" name="clientid" id="clientid" value="<?php echo $_smarty_tpl->getVariable('clientid')->value;?>
" />
 <?php if ($_smarty_tpl->getVariable('account_flag')->value==1&&$_smarty_tpl->getVariable('clientid')->value>0&&$_smarty_tpl->getVariable('clientmoney')->value>0){?>
 <tr>
    <th style="text-align:left;">
    	用车单位：<?php echo $_smarty_tpl->getVariable('clientname')->value;?>
&nbsp;&nbsp;客户当前余额：<?php echo $_smarty_tpl->getVariable('clientmoney')->value;?>
元&nbsp;&nbsp;<input type="checkbox" name="isBalance" id="isBalance" value="1" onclick="calTotal()" />用余额支付
    	<input type="hidden" id="clientmoney" value="<?php echo $_smarty_tpl->getVariable('clientmoney')->value;?>
" />
    </th>
</tr>
<?php }?>
 <tr>
    <th style="text-align:left;">
    	<?php if ($_smarty_tpl->getVariable('account_flag')->value==1&&(isset($_smarty_tpl->getVariable('list')->value['settle_favor']) ? $_smarty_tpl->getVariable('list')->value['settle_favor'] : null)>0){?>优惠金额：<input type="text" name="settle_favor" id="settle_favor" size="5" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_favor']) ? $_smarty_tpl->getVariable('list')->value['settle_favor'] : null);?>
"  readonly/>&nbsp;<?php }?>
    	合计金额:<input type="text" name="total" id="total" value="" size="5" readonly/>&nbsp;
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
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_name']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_name'] : null);?>
</option>
	                  <?php }} ?>
	              </select>&nbsp;
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
" ><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bank_name']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_name'] : null);?>
</option>
	                  <?php }} ?>
	              </select>&nbsp;
	           手续费:<input type="text" name="fee" id="fee" value="" size="2" />&nbsp;
    	实收:<input type="text" name="infact" id="infact" value="" size="5"/>
    	
    </th>
  </tr>
 </table>
</div>
<?php }?>
<?php if ($_smarty_tpl->getVariable('op')->value=="batchaccount"){?>
<input type="hidden" name="task" value="batch_accept" />
<div class="list">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">序号	</th>
	<th>合同号</th>
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
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_contractNum'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null);?>
</td>
		<td><input type="text" name="charge_havemoney[]" id="charge_havemoney_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
" size="10" onFocus="this.blur()"/></td>
		<td><input type="text" name="charge_money[]" id="charge_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
" size="10"/></td>
  </tr>
  <?php }} ?>
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
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_contractNum'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_costname']) ? $_smarty_tpl->tpl_vars['row']->value['item_costname'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
</td>
		<td><input type="text" name="item_money[]" id="item_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
" size="10"/></td>
 </tr>
 <?php }} ?>
 
<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('busiList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <?php if ((isset($_smarty_tpl->tpl_vars['list']->value['settle_overKmMoney']) ? $_smarty_tpl->tpl_vars['list']->value['settle_overKmMoney'] : null)!=0&&(isset($_smarty_tpl->tpl_vars['list']->value['settle_overKmMoney']) ? $_smarty_tpl->tpl_vars['list']->value['settle_overKmMoney'] : null)!=(isset($_smarty_tpl->tpl_vars['list']->value['settle_overKmMoney_have']) ? $_smarty_tpl->tpl_vars['list']->value['settle_overKmMoney_have'] : null)){?>
 <tr overstyle='on' id="badge_88">
    	<td>0</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['list']->value['paiche_contractNum'] : null);?>
</td>
	  	<td>超公里费</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['settle_overKmMoney']) ? $_smarty_tpl->tpl_vars['list']->value['settle_overKmMoney'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['settle_overKmMoney_have']) ? $_smarty_tpl->tpl_vars['list']->value['settle_overKmMoney_have'] : null);?>
</td>
		<td><input type="text" name="overKmMoney[]" id="overKmMoney_<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['list']->value['paiche_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['settle_overKmMoney']) ? $_smarty_tpl->tpl_vars['list']->value['settle_overKmMoney'] : null)-(isset($_smarty_tpl->tpl_vars['list']->value['settle_overKmMoney_have']) ? $_smarty_tpl->tpl_vars['list']->value['settle_overKmMoney_have'] : null);?>
" size="10"/></td>
 </tr>
 <?php }?>
 <?php if ((isset($_smarty_tpl->tpl_vars['list']->value['settle_overTimeMoney']) ? $_smarty_tpl->tpl_vars['list']->value['settle_overTimeMoney'] : null)!=0&&(isset($_smarty_tpl->tpl_vars['list']->value['settle_overTimeMoney']) ? $_smarty_tpl->tpl_vars['list']->value['settle_overTimeMoney'] : null)!=(isset($_smarty_tpl->tpl_vars['list']->value['settle_overTimeMoney_have']) ? $_smarty_tpl->tpl_vars['list']->value['settle_overTimeMoney_have'] : null)){?>
 <tr overstyle='on' id="badge_88">
    	<td>0</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['list']->value['paiche_contractNum'] : null);?>
</td>
	  	<td>超时费</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['settle_overTimeMoney']) ? $_smarty_tpl->tpl_vars['list']->value['settle_overTimeMoney'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['settle_overTimeMoney_have']) ? $_smarty_tpl->tpl_vars['list']->value['settle_overTimeMoney_have'] : null);?>
</td>
		<td><input type="text" name="overTimeMoney[]" id="overTimeMoney_<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['list']->value['paiche_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['settle_overTimeMoney']) ? $_smarty_tpl->tpl_vars['list']->value['settle_overTimeMoney'] : null)-(isset($_smarty_tpl->tpl_vars['list']->value['settle_overTimeMoney_have']) ? $_smarty_tpl->tpl_vars['list']->value['settle_overTimeMoney_have'] : null);?>
" size="10"/></td>
 </tr>
 <?php }?>
<?php }} ?>
 </table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
 <?php if ($_smarty_tpl->getVariable('backlist')->value){?>
  <tr>
    <th style="width:30px;">序号	</th>
	<th>合同号</th>
	<th>退款项目</th>
	<th>应退金额</th>
	<th>已退金额</th>
	<th>本次退款</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('backlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_contractNum'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['back_money']) ? $_smarty_tpl->tpl_vars['row']->value['back_money'] : null);?>
</td>
		<td><input type="text" name="back_havemoney[]" id="back_havemoney_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null);?>
" size="10" onFocus="this.blur()"/></td>
		<td><input type="text" name="back_money[]" id="back_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['back_money']) ? $_smarty_tpl->tpl_vars['row']->value['back_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null);?>
" size="10"/></td>
  </tr>
  <?php }} ?>
 <?php }?>
 </table> 
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
 <input type="hidden" name="clientid" id="clientid" value="<?php echo $_smarty_tpl->getVariable('clientid')->value;?>
" />
<?php if ($_smarty_tpl->getVariable('clientmoney')->value>0){?>
 <tr>
    <th style="text-align:left;">
    	用车单位：<?php echo $_smarty_tpl->getVariable('clientname')->value;?>
&nbsp;&nbsp;客户当前余额：<?php echo $_smarty_tpl->getVariable('clientmoney')->value;?>
元&nbsp;&nbsp;<input type="checkbox" name="isBalance" id="isBalance" value="1" onclick="calTotal()"/>用余额支付
    	<input type="hidden" id="clientmoney" value="<?php echo $_smarty_tpl->getVariable('clientmoney')->value;?>
" />
    	
    </th>
</tr>
<?php }?>
 <tr>
    <th style="text-align:left;">
    	合计金额:<input type="text" name="total" id="total" value="" size="5" readonly/>&nbsp;
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
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_name']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_name'] : null);?>
</option>
	                  <?php }} ?>
	              </select>&nbsp;
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
" ><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bank_name']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_name'] : null);?>
</option>
	                  <?php }} ?>
	              </select>&nbsp;
	           手续费:<input type="text" name="fee" id="fee" value="" size="2" />&nbsp;
    	实收:<input type="text" name="infact" id="infact" value="" size="5"/>
    	
    </th>
  </tr>
 </table>
</div>
<?php }?>
<?php if ($_smarty_tpl->getVariable('op')->value=="shuntaccount"){?>
<input type="hidden" name="task" value="shunt_accept" />
<div class="list">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">序号	</th>
	<th>合同号</th>
	<th>调车金额</th>
	<th>公司名称(个人)</th>
	<th>派车金额明细</th>
	<th>余款给司机</th>
	<th>还需支付/收取</th>
  </tr> 
<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('busiList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
<?php $_smarty_tpl->tpl_vars['yishou'] = new Smarty_variable(0, null, null);?>
 <tr overstyle='on' id="badge_88">
    	<td><input type="hidden" name="paiche_id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['list']->value['paiche_id'] : null);?>
"><input type="hidden" name="shunt_balance[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['shunt_balance']) ? $_smarty_tpl->tpl_vars['list']->value['shunt_balance'] : null);?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['list']->value['paiche_contractNum'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['shunt_rent']) ? $_smarty_tpl->tpl_vars['list']->value['shunt_rent'] : null);?>
</td>
		<td><?php if ((isset($_smarty_tpl->tpl_vars['list']->value['paiche_personal']) ? $_smarty_tpl->tpl_vars['list']->value['paiche_personal'] : null)==0){?><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['client_name']) ? $_smarty_tpl->tpl_vars['list']->value['client_name'] : null);?>
<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['paiche_linker']) ? $_smarty_tpl->tpl_vars['list']->value['paiche_linker'] : null);?>
<?php }?></td>
		<td style="text-align:left;">
	    <?php  $_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['list']->value['paiche_itemlist']) ? $_smarty_tpl->tpl_vars['list']->value['paiche_itemlist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row1']->key => $_smarty_tpl->tpl_vars['row1']->value){
?>
	    <?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['item_name']) ? $_smarty_tpl->tpl_vars['row1']->value['item_name'] : null);?>
:<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row1']->value['conv_result'] : null);?>
<?php if ((isset($_smarty_tpl->tpl_vars['row1']->value['item_calcu']) ? $_smarty_tpl->tpl_vars['row1']->value['item_calcu'] : null)==1&&(isset($_smarty_tpl->tpl_vars['row1']->value['item_caltype']) ? $_smarty_tpl->tpl_vars['row1']->value['item_caltype'] : null)==1){?>/<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['item_unit']) ? $_smarty_tpl->tpl_vars['row1']->value['item_unit'] : null);?>
<?php }?>
	    <?php if ((isset($_smarty_tpl->tpl_vars['row1']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row1']->value['conv_money'] : null)!=0){?><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['item_costname']) ? $_smarty_tpl->tpl_vars['row1']->value['item_costname'] : null);?>
:<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row1']->value['conv_money'] : null);?>
-已收:<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row1']->value['have_in_money'] : null);?>
<?php $_smarty_tpl->tpl_vars['yishou'] = new Smarty_variable($_smarty_tpl->getVariable('yishou')->value+(isset($_smarty_tpl->tpl_vars['row1']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row1']->value['conv_money'] : null)-(isset($_smarty_tpl->tpl_vars['row1']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row1']->value['have_in_money'] : null), null, null);?><?php }?><hr />
	    <?php }} ?>
	    <?php  $_smarty_tpl->tpl_vars['row2'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['list']->value['paiche_chargelist']) ? $_smarty_tpl->tpl_vars['list']->value['paiche_chargelist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row2']->key => $_smarty_tpl->tpl_vars['row2']->value){
?>
        <?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row2']->value['charge_name'] : null);?>
:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row2']->value['conv_money'] : null);?>
元-已收:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_in_money'] : null);?>
元<?php $_smarty_tpl->tpl_vars['yishou'] = new Smarty_variable($_smarty_tpl->getVariable('yishou')->value+(isset($_smarty_tpl->tpl_vars['row2']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row2']->value['conv_money'] : null)-(isset($_smarty_tpl->tpl_vars['row2']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_in_money'] : null), null, null);?>
        <?php if ((isset($_smarty_tpl->tpl_vars['row2']->value['back_money']) ? $_smarty_tpl->tpl_vars['row2']->value['back_money'] : null)!=0){?>-应退:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['back_money']) ? $_smarty_tpl->tpl_vars['row2']->value['back_money'] : null);?>
-已退:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_back_money'] : null);?>
元<?php $_smarty_tpl->tpl_vars['yishou'] = new Smarty_variable($_smarty_tpl->getVariable('yishou')->value-((isset($_smarty_tpl->tpl_vars['row2']->value['back_money']) ? $_smarty_tpl->tpl_vars['row2']->value['back_money'] : null)-(isset($_smarty_tpl->tpl_vars['row2']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_back_money'] : null)), null, null);?><?php }?><hr />
        <?php }} ?>
	    </td>
		<td><?php if ((isset($_smarty_tpl->tpl_vars['list']->value['shunt_balance']) ? $_smarty_tpl->tpl_vars['list']->value['shunt_balance'] : null)=="否"){?><?php $_smarty_tpl->tpl_vars['yishou'] = new Smarty_variable(0, null, null);?><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['shunt_balance']) ? $_smarty_tpl->tpl_vars['list']->value['shunt_balance'] : null);?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('yishou')->value;?>
<?php }?></td>
		<td><input type="text" name="shuntMoney[]" id="shuntMoney_<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['list']->value['paiche_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['shunt_rent']) ? $_smarty_tpl->tpl_vars['list']->value['shunt_rent'] : null)-$_smarty_tpl->getVariable('yishou')->value;?>
" size="10"/></td>
 </tr>
<?php }} ?>
 </table>
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
 <tr>
    <th style="text-align:left;">
    	合计金额:<input type="text" name="total" id="total" value="" size="5" readonly/>&nbsp;
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
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_name']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_name'] : null);?>
</option>
	                  <?php }} ?>
	              </select>&nbsp;
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
" ><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bank_name']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_name'] : null);?>
</option>
	                  <?php }} ?>
	              </select>&nbsp;
	           手续费:<input type="text" name="fee" id="fee" value="" size="2" />&nbsp;
    	实收:<input type="text" name="infact" id="infact" value="" size="5"/>
    	
    </th>
  </tr>
 </table>
</div>
<?php }?>
<?php if ($_smarty_tpl->getVariable('op')->value=="backmoney"){?>
<input type="hidden" name="task" value="backmoney_accept" />
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
 $_from = $_smarty_tpl->getVariable('backlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['back_money']) ? $_smarty_tpl->tpl_vars['row']->value['back_money'] : null);?>
</td>
		<td><input type="text" name="back_havemoney[]" id="back_havemoney_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null);?>
" size="10" onFocus="this.blur()"/></td>
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null)=="押金"){?>
		<td><?php echo $_smarty_tpl->getVariable('breakmoney')->value;?>
</td>
		<td><input type="text" name="back_money[]" id="back_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['back_money']) ? $_smarty_tpl->tpl_vars['row']->value['back_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null)-$_smarty_tpl->getVariable('breakmoney')->value;?>
" size="10"/></td>
		<?php }else{ ?>
		<td>&nbsp;</td>
		<td><input type="text" name="back_money[]" id="back_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['back_money']) ? $_smarty_tpl->tpl_vars['row']->value['back_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null);?>
" size="10"/></td>
		<?php }?>
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
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_name']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_name'] : null);?>
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
" ><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bank_name']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_name'] : null);?>
</option>
	                  <?php }} ?>
	              </select>&nbsp;
	           手续费:<input type="text" name="fee" id="fee" value="" size="2" />&nbsp;
    	实付:<input type="text" name="infact" id="infact" value="" size="5"/>
    	
    </th>
  </tr>
 </table>
</div>
<?php }?>
<?php if ($_smarty_tpl->getVariable('op')->value=="diaodu"){?>
<div class="page_tit_3">&nbsp;</div>
<input type="hidden" name="task" value="diaodu_accept" />
<input type="hidden" name="b_id" id="b_id" value="<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
" />
<div class="form2">
	<dl class="lineD">
      <dt>用车开始时间：</dt>
      <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate_All'] : null);?>
</dd>
    </dl>
    <dl class="lineD">
      <dt>用车结束时间：</dt>
      <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_endDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_endDate_All'] : null);?>
</dd>
    </dl>
	<?php if ($_smarty_tpl->getVariable('busitype')->value=='1'||$_smarty_tpl->getVariable('busitype')->value=='2'){?>
    <dl class="lineD">
	    <dt>开车线路：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_line']) ? $_smarty_tpl->getVariable('list')->value['paiche_line'] : null);?>
</dd>
	</dl>
	<?php }?>
	<dl class="lineD">
	    <dt>特殊说明：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_specialRemarks']) ? $_smarty_tpl->getVariable('list')->value['paiche_specialRemarks'] : null);?>
</dd>
	</dl>
	<dl class="lineD">
    	<dt>客户要求车型：</dt>
    	<dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_requestCar']) ? $_smarty_tpl->getVariable('list')->value['paiche_requestCar'] : null);?>
</dd>
  	</dl>
	<dl class="lineD" id="showCar">
	    <dt>选择汽车：</dt>
	    <dd><input type="text" name="paicheCar" id="paicheCar" size="38" onFocus="this.blur()" value="" /> 
	         <input type="button" value="清 空" onClick="clearValue('paicheCar','paicheCar2')" />&nbsp;
	         关键字：<input type="text" name="paicheCarKey" id="paicheCarKey" size="10" />
	    <input type="hidden" name="paicheCar2" id="paicheCar2" value="" />
	    <a href="javascript:select_car();"><img src="../../../css/car2.gif" height="15" class="peoplePic" /></a>
	    <?php if ($_smarty_tpl->getVariable('busitype')->value=='2'){?>
	    <a href="javascript:select_brother();"><img src="../../../css/car.gif" height="15" class="diao" /></a>
	    <?php }?>
	    <input type="hidden" name="shunt" id="shunt" value="0" />
	    </dd>
    </dl>
    <?php if ($_smarty_tpl->getVariable('busitype')->value=='2'||$_smarty_tpl->getVariable('busitype')->value=='4'||$_smarty_tpl->getVariable('busitype')->value=='5'){?>
    <dl class="lineD" id="showDrive">
	    <dt>选择司机：</dt>
	    <dd><input type="text" name="paicheDriver" id="paicheDriver" size="18" onFocus="this.blur()" value="" /> 
	         <input type="button" value="清 空" onClick="clearValue('paicheDriver','paicheDriver2')" />&nbsp;
	         关键字：<input type="text" name="paicheDriverKey" id="paicheDriverKey" size="10" />
	    <input type="hidden" name="paicheDriver2" id="paicheDriver2" value="" />
	    <a href="javascript:select_driver();"><img src="../../../css/driver.gif" height="15" class="peoplePic" /></a>
	    </dd>
    </dl>
    <dl class="lineD" id="shuntCon1" style="display:none;">
        <dt><span class="redstar">*</span>调车公司：</dt>
	    <dd>
		<input type="text" name="shuntCom" id="shuntCom" size="30" value="" />
		<input type="hidden" name="shuntCom2" id="shuntCom2" value="" />
		<ul class="sel" id="comul" onMouseOver="nameIsOut=false" onMouseOut="nameIsOut=true">
		</ul>
	    </dd>
    </dl>
    <dl class="lineD" id="shuntCon2" style="display:none;">
	    <dt><span class="redstar">*</span>司机：</dt>
	    <dd><input type="text" name="shunt_driver" id="shunt_driver" size="12" value="" /></dd>
	</dl>
	<dl class="lineD" id="shuntCon3" style="display:none;">
	    <dt>司机号码：</dt>
	    <dd><input type="text" name="shunt_driverPhone" id="shunt_driverPhone" size="16" value="" /></dd>
	</dl>
	<dl class="lineD" id="shuntCon4" style="display:none;">
	    <dt><span class="redstar">*</span>租金：</dt>
	    <dd><input type="text" name="shunt_rent" id="shunt_rent" size="8"  value=""/></dd>
	</dl>
	<dl class="lineD" id="shuntCon5" style="display:none;">
	    <dt>余额是否由客户支付：</dt>
	    <dd>
	    <input type="radio" name="shunt_balance" id="shunt_balance" value="是" checked  /> 是　
	    <input type="radio" name="shunt_balance" id="shunt_balance" value="否"  /> 否	    
		</dd>
	</dl>
	<dl class="lineD" id="shuntCon6" style="display:none;">
	    <dt>特殊说明：</dt>
	    <dd><textarea name="shunt_specialRemarks" id="shunt_specialRemarks" cols="40" rows="3"></textarea></dd>
	</dl>
    <?php }?>    
</div>
<?php }?>
<?php if ($_smarty_tpl->getVariable('op')->value=="continue"){?>
<div class="page_tit_3">&nbsp;</div>
<input type="hidden" name="task" value="continue_accept" />
<input type="hidden" name="b_id" id="b_id" value="<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
" />
<div class="form2">
	<dl class="lineD">
      <dt>用车开始时间：</dt>
      <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate_All'] : null);?>
</dd>
    </dl>
    <dl class="lineD">
      <dt>用车结束时间：</dt>
      <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_endDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_endDate_All'] : null);?>
</dd>
    </dl>
	<?php if ($_smarty_tpl->getVariable('busitype')->value=='1'||$_smarty_tpl->getVariable('busitype')->value=='2'){?>
    <dl class="lineD">
	    <dt>开车线路：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_line']) ? $_smarty_tpl->getVariable('list')->value['paiche_line'] : null);?>
</dd>
	</dl>
	<?php }?>
	<dl class="lineD">
	    <dt>续租天数：</dt>
	    <dd><input type="text" name="addday" id="addday" size="2" />天&nbsp;&nbsp;原租赁天数：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_day']) ? $_smarty_tpl->getVariable('list')->value['paiche_day'] : null);?>
天</dd>
	</dl>
	<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)!="Y"){?>
	<dl class="lineD">
		<dt>增加公里数：</dt>
		<dd><input type="text" name="addoverKm" id="addoverKm" size="2" />公里&nbsp;&nbsp;原限定公里数：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_limitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_limitKm'] : null);?>
公里
		</dd>
	</dl>
	<?php }?>
    <dl class="lineD" >
	    <dt>续租费用：</dt>
	    <dd>
	    <div id="divcharges">
	    <ul>
          <li>编号</li><li>收费项目</li><li>约定金额</li><li></li><li>删除</li>
        </ul>
	    </div><div style="padding:5px 0 0 342px;"><a href="javascript:select_charges();"><img src="../../../css/list.gif" height="15" class="peoplePic" /></a></div>
	    </dd>
	</dl>
	<dl class="lineD">
	    <dt>备注：</dt>
	    <dd><textarea name="Remarks" id="Remarks" cols="40" rows="5"></textarea></dd>
	</dl>
</div>
<?php }?>
<?php if ($_smarty_tpl->getVariable('op')->value=="changecar"){?>
<div class="list">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">序号	</th>
	<th>被换的车</th>
	<th>被换车起始的公里数</th>
	<th>被换车结束的公里数</th>
	<th>更换过来的车</th>
	<th>更换过来的车当前公里数</th>
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
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
    	<td><input type="hidden" name="id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>
	  	<td>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['carA']) ? $_smarty_tpl->tpl_vars['row']->value['carA'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_carAStartKilo']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_carAStartKilo'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_carAEndKilo']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_carAEndKilo'] : null);?>
</td>
		<td>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['carB']) ? $_smarty_tpl->tpl_vars['row']->value['carB'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_kiloBNow']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_kiloBNow'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_rentRemarks']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_rentRemarks'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecarMan']) ? $_smarty_tpl->tpl_vars['row']->value['changecarMan'] : null);?>
</td>
 </tr>
 <?php }} ?>
 </table>
</div>
<input type="hidden" name="task" value="changecar_accept" />
<input type="hidden" name="b_id" id="b_id" value="<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
" />
<div class="form2">
	<dl class="lineD">
		<dt><span class="redstar">*</span>被换车辆：</dt>
		<dd><input type="text" name="changecar_carA" id="changecar_carA" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
-<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_color']) ? $_smarty_tpl->getVariable('list')->value['car_color'] : null);?>
-<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_brand']) ? $_smarty_tpl->getVariable('list')->value['car_brand'] : null);?>
-<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_type']) ? $_smarty_tpl->getVariable('list')->value['car_type'] : null);?>
" readonly class="grey" size="38" />
		<input type="hidden" name="changecar_carA2" id="changecar_carA2" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paicheCar']) ? $_smarty_tpl->getVariable('list')->value['paicheCar'] : null);?>
" />
		</dd>
	</dl>
	<dl class="lineD">
		<dt><span class="redstar">*</span>被换车辆起始公里数：</dt>
		<dd><input type="text" name="changecar_carAStartKilo" id="changecar_carAStartKilo" />
		</dd>
	</dl>
	<dl class="lineD">
		<dt><span class="redstar">*</span>被换车辆结束公里数：</dt>
		<dd><input type="text" name="changecar_carAEndKilo" id="changecar_carAEndKilo" />
		</dd>
	</dl>
	<dl class="lineD">
		<dt><span class="redstar">*</span>目标车辆：</dt>
		<dd><input type="text" name="paicheCar" id="paicheCar" size="38" onFocus="this.blur()" /> 关键字：<input type="text" name="paicheCarKey" id="paicheCarKey" size="10" />
		<input type="hidden" name="paicheCar2" id="paicheCar2" size="16" />
		<input type="button" value="清 空" onClick="clearValue('paicheCar','paicheCar2')" />
		<a href="javascript:select_car();"><img src="../../../css/car2.gif" height="15" class="peoplePic" /></a>
		</dd>
	</dl>
	<dl class="lineD">
		<dt>目标车辆当前公里数：</dt>
		<dd><input type="text" name="changecar_kiloBNow" id="changecar_kiloBNow" value="" />
		</dd>
	</dl>
	<dl class="lineD">
		<dt>备注：</dt>
		<dd><textarea name="changecar_rentRemarks" id="changecar_rentRemarks" cols="40" rows="5"></textarea>
		</dd>
	</dl>
</div>
<?php }?>
<?php if ($_smarty_tpl->getVariable('op')->value=="returncar"||$_smarty_tpl->getVariable('op')->value=="givecar"){?>
<input type="hidden" name="task" value="returncar_accept" />
<input type="hidden" name="b_id" id="b_id" value="<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
" />
<input type="hidden" name="paicheCar" id="paicheCar" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paicheCar']) ? $_smarty_tpl->getVariable('list')->value['paicheCar'] : null);?>
" />
<input type="hidden" name="paiche_shunt" id="paiche_shunt" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shunt']) ? $_smarty_tpl->getVariable('list')->value['paiche_shunt'] : null);?>
" />
<input type="hidden" name="paiche_unlimitKm" id="paiche_unlimitKm" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null);?>
" />
<input type="hidden" name="paiche_limitKm" id="paiche_limitKm" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_limitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_limitKm'] : null);?>
" />
<input type="hidden" name="paiche_unlimitTime" id="paiche_unlimitTime" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitTime'] : null);?>
" />
<input type="hidden" name="totalChangeCarKilo" id="totalChangeCarKilo" value="<?php echo $_smarty_tpl->getVariable('totalChangeCarKilo')->value;?>
" />

<input type="hidden" name="settle_totalKm" id="settle_totalKm" value="0"/>
<div class="form2">
	<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_shunt']) ? $_smarty_tpl->getVariable('list')->value['paiche_shunt'] : null)==0){?>
	<dl class="lineD">
		<dt><span class="redstar">*</span>开始公里数：</dt>
		<dd><input type="text" name="settle_startKm" id="settle_startKm" <?php if ($_smarty_tpl->getVariable('changecar_kiloBNow')->value!=0){?> value="<?php echo $_smarty_tpl->getVariable('changecar_kiloBNow')->value;?>
" readonly class="grey" <?php }?> size="18" />公里
		</dd>
	</dl>
	<dl class="lineD">
		<dt><span class="redstar">*</span>结束公里数：</dt>
		<dd><input type="text" name="settle_endKm" id="settle_endKm" size="18" />公里<?php if ($_smarty_tpl->getVariable('changecar_kiloBNow')->value!=0){?>(注：换车一共行驶了<?php echo $_smarty_tpl->getVariable('totalChangeCarKilo')->value;?>
公里) <?php }?>
		</dd>
	</dl>
	<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)!="Y"){?>
	<dl class="lineD">
		<dt>超公里数：</dt>
		<dd><input type="text" name="overKm" id="overKm" size="18" onFocus="this.blur()" class="grey noborder" />公里×<input type="text" name="paiche_overKm" id="paiche_overKm" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_overKm'] : null);?>
" size="3" />元&nbsp;&nbsp;
		超公里费用：<input type="text" name="overKmMoney" id="overKmMoney" size="8" value="" onFocus="this.blur()" class="grey noborder" />元
		</dd>
	</dl>
	<?php }?>
	<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitTime'] : null)!="Y"){?>
	<dl class="lineD">
		<dt>超时：</dt>
		<dd><input type="text" name="settle_overTime" id="settle_overTime" size="18" />小时×<input type="text" name="paiche_overTime" id="paiche_overTime" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_overTime'] : null);?>
" size="3" />元&nbsp;&nbsp;
		超时费用：<input type="text" name="overTimeMoney" id="overTimeMoney" size="8" value="" onFocus="this.blur()" class="grey noborder" />元
		</dd>
	</dl>
	<?php }?>
	<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_type']) ? $_smarty_tpl->getVariable('list')->value['paiche_type'] : null)=='2'&&(isset($_smarty_tpl->getVariable('list')->value['paiche_clientprice']) ? $_smarty_tpl->getVariable('list')->value['paiche_clientprice'] : null)){?>
	<dl class="lineD">
		<dt>等待时间：</dt>
		<dd><input type="text" name="settle_waitTime" id="settle_waitTime" size="8" />小时×<input type="text" name="paiche_waitTime" id="paiche_waitTime" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_waitTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_waitTime'] : null);?>
" size="3" />元&nbsp;&nbsp;
		等待费用：<input type="text" name="waitTimeMoney" id="waitTimeMoney" size="8" value="" onFocus="this.blur()" class="grey noborder" />元
		</dd>
	</dl>
	<?php }?>
	<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_type']) ? $_smarty_tpl->getVariable('list')->value['paiche_type'] : null)=='2'){?>
	<dl class="lineD">
	    <dt>路程：</dt>
	    <dd><input type="radio" name="paiche_route" value="单" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_route']) ? $_smarty_tpl->getVariable('list')->value['paiche_route'] : null)=="单"){?>checked<?php }?> />单程&nbsp;&nbsp;<input type="radio" name="paiche_route" value="双" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_route']) ? $_smarty_tpl->getVariable('list')->value['paiche_route'] : null)=="双"){?>checked<?php }?> />双程
	    <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_type']) ? $_smarty_tpl->getVariable('list')->value['paiche_type'] : null)=='2'&&(isset($_smarty_tpl->getVariable('list')->value['paiche_clientprice']) ? $_smarty_tpl->getVariable('list')->value['paiche_clientprice'] : null)){?>
		&nbsp;&nbsp;<input type="button" value="价目表" id="btnPrice" />
		<div class="showprice" id="price" style="margin-left:10px;">
		<ul><li>No.</li><li>地点</li><li>车型</li><li>行程</li><li>价格</li><li>等车费</li><li>过凌晨等车费</li></ul>
		<?php  $_smarty_tpl->tpl_vars['row5'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('list')->value['paiche_clientprice']) ? $_smarty_tpl->getVariable('list')->value['paiche_clientprice'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row5']->key => $_smarty_tpl->tpl_vars['row5']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
		<ul><li><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</li><li><?php echo (isset($_smarty_tpl->tpl_vars['row5']->value['price_area']) ? $_smarty_tpl->tpl_vars['row5']->value['price_area'] : null);?>
</li><li><?php echo (isset($_smarty_tpl->tpl_vars['row5']->value['price_carmodel']) ? $_smarty_tpl->tpl_vars['row5']->value['price_carmodel'] : null);?>
</li><li><?php echo (isset($_smarty_tpl->tpl_vars['row5']->value['price_line']) ? $_smarty_tpl->tpl_vars['row5']->value['price_line'] : null);?>
</li><li><?php echo (isset($_smarty_tpl->tpl_vars['row5']->value['price']) ? $_smarty_tpl->tpl_vars['row5']->value['price'] : null);?>
</li><li><?php echo (isset($_smarty_tpl->tpl_vars['row5']->value['price_wait1']) ? $_smarty_tpl->tpl_vars['row5']->value['price_wait1'] : null);?>
</li><li><?php echo (isset($_smarty_tpl->tpl_vars['row5']->value['price_wait2']) ? $_smarty_tpl->tpl_vars['row5']->value['price_wait2'] : null);?>
</li></ul>
		<?php }} ?>
		</div>
		<?php }?>
	    </dd>
	</dl>
	<dl class="lineD">
	    <dt>内外：</dt>
	    <dd><input type="radio" name="paiche_scope" value="内" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_scope']) ? $_smarty_tpl->getVariable('list')->value['paiche_scope'] : null)=="内"){?>checked<?php }?> />内&nbsp;&nbsp;<input type="radio" name="paiche_scope" value="外" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_scope']) ? $_smarty_tpl->getVariable('list')->value['paiche_scope'] : null)=="外"){?>checked<?php }?> />外</dd>
	</dl>
	<?php }?>
	<?php }?>
	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('itemlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
	<dl class="lineD">
		<dt><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_name']) ? $_smarty_tpl->tpl_vars['row']->value['item_name'] : null);?>
：</dt>
		<dd><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row']->value['conv_result'] : null);?>

		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row']->value['conv_result'] : null)=="否"){?>&nbsp;&nbsp;<input type="hidden" name="item_id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
		<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_costname']) ? $_smarty_tpl->tpl_vars['row']->value['item_costname'] : null);?>
：<input type="text" name="item_money[]" id="item_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" size="8" value="" />元
		<?php }?>
		</dd>
	</dl>
	<?php }} ?>
	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('chargelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
	<dl class="lineD">
		<dt><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null);?>
：</dt>
		<dd><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null);?>
元，已收：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
元，<input type="hidden" name="charge_id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
		还需收：<input type="text" name="charge_money[]" id="charge_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
" size="10" onFocus="this.blur()"/>元
		</dd>
	</dl>
	<?php }} ?>
	<dl class="lineD" >
	    <dt>其他费用：</dt>
	    <dd>
	    <div id="divcharges">
	    <ul>
          <li>编号</li><li>收费项目</li><li>约定金额</li><li></li><li>删除</li>
        </ul>
        
	    </div><div style="padding:5px 0 0 342px;"><a href="javascript:select_charges();"><img src="../../../css/list.gif" height="15" class="peoplePic" /></a></div>
	    </dd>
	</dl>
	<dl class="lineD">
		<dt>优惠金额：</dt>
		<dd><input type="text" name="settle_favor" id="settle_favor" size="8" />元
		</dd>
	</dl>
	<dl class="lineD" >
		<dt>还需向客户收取：</dt>
		<dd><input type="text" name="debt" id="debt" size="8" value="" class="red noborder" onFocus="this.blur()" />元</dd>
	</dl>
</div>
<?php }?>
  <div class="Toolbar_inbox">
    <a href="javascript:void(0);" class="btn_a" onclick="ok();"><span>确定</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="closebox();"><span>关闭</span></a>   	
  </div> 
</div>
</form>
<script type="text/javascript" src="../../../js/account.js"></script>
<!-->
<script>

</script>
<!-->
</body>
</html>