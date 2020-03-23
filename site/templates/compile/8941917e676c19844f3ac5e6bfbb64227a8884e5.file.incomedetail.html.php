<?php /* Smarty version Smarty-3.0.4, created on 2019-07-17 16:20:28
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/report/incomedetail.html" */ ?>
<?php /*%%SmartyHeaderCode:81765d2eda4c5c9a68-07254854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8941917e676c19844f3ac5e6bfbb64227a8884e5' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/report/incomedetail.html',
      1 => 1563351415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81765d2eda4c5c9a68-07254854',
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
<link href="../../../../css/style.css" rel="stylesheet" type="text/css">
<link href="../../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<script type="text/javascript" src="../../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<script type="text/javascript" src="../../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
</head>
<body>
<div class="so_main">
  <div class="page_tit">收入明细---时间范围：<?php echo $_smarty_tpl->getVariable('sdate')->value;?>
&nbsp;&nbsp;到&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('edate')->value;?>
</div>
  <?php $_tmp1=$_smarty_tpl->getVariable('b_type')->value;?><?php if ($_smarty_tpl->getVariable('list1')->value&&($_smarty_tpl->getVariable('b_type')->value==1||empty($_tmp1))){?>
  <div class="Toolbar_inbox"><span>临时自驾</span></div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th>序号</th>
	<th>时间</th>
	<th>名称</th>
	<th>金额</th>
	<th>合同号</th>
	<th>用车时间</th>
	<th>联系人</th>
	<th>门店</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list1')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable($_smarty_tpl->getVariable('all_money')->value+(isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null), null, null);?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" <?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1)%2==0){?>style="background-color:#EAF2D3;"<?php }?>>
	  	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['add_time']) ? $_smarty_tpl->tpl_vars['row']->value['add_time'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
</td>
	    <td><a href="../../business/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="_blank"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_contractNum'] : null);?>
</a></td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_startDate'] : null);?>
&nbsp;&nbsp;到&nbsp;&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_endDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_endDate'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linker']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linker'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null);?>
</td>
 </tr>
 <?php }} ?>
 <tr style="background-color:#FE6E47;">
    <td>合计</td>
    <td colspan="2">&nbsp;</td>
    <td><?php echo $_smarty_tpl->getVariable('all_money')->value;?>
</td>
    <td colspan="4">&nbsp;</td>
  </tr>
 </table>
 </div>
 <?php }?>
 <?php $_tmp2=$_smarty_tpl->getVariable('b_type')->value;?><?php if ($_smarty_tpl->getVariable('list2')->value&&($_smarty_tpl->getVariable('b_type')->value==2||empty($_tmp2))){?>
 <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable(0, null, null);?>
 <div class="Toolbar_inbox"><span>临时带驾-现结</span></div>
 <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th>序号</th>
	<th>时间</th>
	<th>名称</th>
	<th>金额</th>
	<th>合同号</th>
	<th>用车时间</th>
	<th>联系人</th>
	<th>门店</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list2')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable($_smarty_tpl->getVariable('all_money')->value+(isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null), null, null);?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" <?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1)%2==0){?>style="background-color:#EAF2D3;"<?php }?>>
	  	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['add_time']) ? $_smarty_tpl->tpl_vars['row']->value['add_time'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
</td>
	    <td><a href="../../business/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="_blank"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_contractNum'] : null);?>
</a></td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_startDate'] : null);?>
&nbsp;&nbsp;到&nbsp;&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_endDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_endDate'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linker']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linker'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null);?>
</td>    
 </tr>
 <?php }} ?>
 <tr style="background-color:#FE6E47;">
    <td>合计</td>
    <td colspan="2">&nbsp;</td>
    <td><?php echo $_smarty_tpl->getVariable('all_money')->value;?>
</td>
    <td colspan="4">&nbsp;</td>
  </tr>
  </table>
  </div>
 <?php }?>
 <?php $_tmp3=$_smarty_tpl->getVariable('b_type')->value;?><?php if ($_smarty_tpl->getVariable('list22')->value&&($_smarty_tpl->getVariable('b_type')->value==22||empty($_tmp3))){?>
 <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable(0, null, null);?>
 <div class="Toolbar_inbox"><span>临时用车-批结</span></div>
 <div class="list">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">序号	</th>
	<th width="200">时间</th>
	<th width="400">客户名称</th>
	<th>金额</th>
	<th>方式</th>
	<th>账户</th>
	<th>单号</th>
	<th>备注说明</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list22')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable($_smarty_tpl->getVariable('all_money')->value+(isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null), null, null);?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
    	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['add_time']) ? $_smarty_tpl->tpl_vars['row']->value['add_time'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['payment_name']) ? $_smarty_tpl->tpl_vars['row']->value['payment_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_name']) ? $_smarty_tpl->tpl_vars['row']->value['bank_name'] : null);?>
</td>
		<td><a href="../../business/batchcountdetail.php?pcode=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bill_code']) ? $_smarty_tpl->tpl_vars['row']->value['bill_code'] : null);?>
" target="_blank"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bill_code']) ? $_smarty_tpl->tpl_vars['row']->value['bill_code'] : null);?>
</a></td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['remark']) ? $_smarty_tpl->tpl_vars['row']->value['remark'] : null);?>
</td>
  </tr>
  <?php }} ?>
  <tr style="background-color:#FE6E47;">
    <td colspan="3">合计	</td>
	<td><?php echo $_smarty_tpl->getVariable('all_money')->value;?>
</td>
	<td colspan="4"></td>
  </tr>
 </table>
</div>
 <?php }?>
 <?php $_tmp4=$_smarty_tpl->getVariable('b_type')->value;?><?php if ($_smarty_tpl->getVariable('list21')->value&&($_smarty_tpl->getVariable('b_type')->value==21||empty($_tmp4))){?>
 <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable(0, null, null);?>
 <div class="Toolbar_inbox"><span>调车结算收入</span></div>
 <div class="list">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">序号	</th>
	<th width="200">时间</th>
	<th width="400">调车企业名称</th>
	<th>金额</th>
	<th>方式</th>
	<th>账户</th>
	<th>单号</th>
	<th>备注说明</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list21')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable($_smarty_tpl->getVariable('all_money')->value+(isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null), null, null);?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
    	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['add_time']) ? $_smarty_tpl->tpl_vars['row']->value['add_time'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bro_name']) ? $_smarty_tpl->tpl_vars['row']->value['bro_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['payment_name']) ? $_smarty_tpl->tpl_vars['row']->value['payment_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_name']) ? $_smarty_tpl->tpl_vars['row']->value['bank_name'] : null);?>
</td>
		<td><a href="../../business/shuntcountdetail.php?pcode=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bill_code']) ? $_smarty_tpl->tpl_vars['row']->value['bill_code'] : null);?>
" target="_blank"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bill_code']) ? $_smarty_tpl->tpl_vars['row']->value['bill_code'] : null);?>
</a></td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['remark']) ? $_smarty_tpl->tpl_vars['row']->value['remark'] : null);?>
</td>
  </tr>
  <?php }} ?>
  <tr style="background-color:#FE6E47;">
    <td colspan="3">合计	</td>
	<td><?php echo $_smarty_tpl->getVariable('all_money')->value;?>
</td>
	<td colspan="4"></td>
  </tr>
 </table>
</div>
 <?php }?>
 <?php $_tmp5=$_smarty_tpl->getVariable('b_type')->value;?><?php if ($_smarty_tpl->getVariable('list3')->value&&($_smarty_tpl->getVariable('b_type')->value==3||empty($_tmp5))){?>
 <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable(0, null, null);?>
 <div class="Toolbar_inbox"><span>长期自驾</span></div>
 <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th>序号</th>
	<th>时间</th>
	<th>名称</th>
	<th>金额</th>
	<th>合同号</th>
	<th>用车时间</th>
	<th>客户名称</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list3')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable($_smarty_tpl->getVariable('all_money')->value+(isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null), null, null);?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" <?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1)%2==0){?>style="background-color:#EAF2D3;"<?php }?>>
	  	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['add_time']) ? $_smarty_tpl->tpl_vars['row']->value['add_time'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
</td>
	    <td><a href="../../business/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="_blank"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_contractNum'] : null);?>
</a></td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_startDate'] : null);?>
&nbsp;&nbsp;到&nbsp;&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_endDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_endDate'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null);?>
</td>	    
 </tr>
 <?php }} ?>
 <tr style="background-color:#FE6E47;">
    <td>合计</td>
    <td colspan="2">&nbsp;</td>
    <td><?php echo $_smarty_tpl->getVariable('all_money')->value;?>
</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  </table>
  </div>
 <?php }?>
 <?php $_tmp6=$_smarty_tpl->getVariable('b_type')->value;?><?php if ($_smarty_tpl->getVariable('list4')->value&&($_smarty_tpl->getVariable('b_type')->value==4||empty($_tmp6))){?>
 <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable(0, null, null);?>
 <div class="Toolbar_inbox"><span>长期带驾</span></div>
 <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th>序号</th>
	<th>时间</th>
	<th>名称</th>
	<th>金额</th>
	<th>合同号</th>
	<th>用车时间</th>
	<th>客户名称</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list4')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable($_smarty_tpl->getVariable('all_money')->value+(isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null), null, null);?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" <?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1)%2==0){?>style="background-color:#EAF2D3;"<?php }?>>
	  	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['add_time']) ? $_smarty_tpl->tpl_vars['row']->value['add_time'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
</td>
	    <td><a href="../../business/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="_blank"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_contractNum'] : null);?>
</a></td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_startDate'] : null);?>
&nbsp;&nbsp;到&nbsp;&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_endDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_endDate'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null);?>
</td>	    
 </tr>
 <?php }} ?>
 <tr style="background-color:#FE6E47;">
    <td>合计</td>
    <td colspan="2">&nbsp;</td>
    <td><?php echo $_smarty_tpl->getVariable('all_money')->value;?>
</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  </table>
  </div>
 <?php }?>
 <?php $_tmp7=$_smarty_tpl->getVariable('b_type')->value;?><?php if ($_smarty_tpl->getVariable('list5')->value&&($_smarty_tpl->getVariable('b_type')->value==5||empty($_tmp7))){?>
 <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable(0, null, null);?>
 <div class="Toolbar_inbox"><span>长期大客</span></div>
 <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th>序号</th>
	<th>时间</th>
	<th>名称</th>
	<th>金额</th>
	<th>合同号</th>
	<th>用车时间</th>
	<th>客户名称</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list5')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable($_smarty_tpl->getVariable('all_money')->value+(isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null), null, null);?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" <?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1)%2==0){?>style="background-color:#EAF2D3;"<?php }?>>
	  	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['add_time']) ? $_smarty_tpl->tpl_vars['row']->value['add_time'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
</td>
	    <td><a href="../../business/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="_blank"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_contractNum'] : null);?>
</a></td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_startDate'] : null);?>
&nbsp;&nbsp;到&nbsp;&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_endDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_endDate'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null);?>
</td>	    
 </tr>
 <?php }} ?>
 <tr style="background-color:#FE6E47;">
    <td>合计</td>
    <td colspan="2">&nbsp;</td>
    <td><?php echo $_smarty_tpl->getVariable('all_money')->value;?>
</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  </table>
  </div>
 <?php }?>
 <?php if ($_smarty_tpl->getVariable('list7')->value&&$_smarty_tpl->getVariable('b_type')->value==7){?>
 <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable(0, null, null);?>
 <div class="Toolbar_inbox"><span>收押金</span></div>
 <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th>序号</th>
	<th>时间</th>
	<th>名称</th>
	<th>金额</th>
	<th>合同号</th>
	<th>用车时间</th>
	<th>联系人</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list7')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable($_smarty_tpl->getVariable('all_money')->value+(isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null), null, null);?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" <?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1)%2==0){?>style="background-color:#EAF2D3;"<?php }?>>
	  	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['add_time']) ? $_smarty_tpl->tpl_vars['row']->value['add_time'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
</td>
	    <td><a href="../../business/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="_blank"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_contractNum'] : null);?>
</a></td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_startDate'] : null);?>
&nbsp;&nbsp;到&nbsp;&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_endDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_endDate'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linker']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linker'] : null);?>
</td>	    
 </tr>
 <?php }} ?>
 <tr style="background-color:#FE6E47;">
    <td>合计</td>
    <td colspan="2">&nbsp;</td>
    <td><?php echo $_smarty_tpl->getVariable('all_money')->value;?>
</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  </table>
  </div>
 <?php }?>
 <?php if ($_smarty_tpl->getVariable('list8')->value&&$_smarty_tpl->getVariable('b_type')->value==8){?>
 <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable(0, null, null);?>
 <div class="Toolbar_inbox"><span>退押金</span></div>
 <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th>序号</th>
	<th>时间</th>
	<th>名称</th>
	<th>金额</th>
	<th>合同号</th>
	<th>用车时间</th>
	<th>联系人</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list8')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable($_smarty_tpl->getVariable('all_money')->value+(isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null), null, null);?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" <?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1)%2==0){?>style="background-color:#EAF2D3;"<?php }?>>
	  	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['add_time']) ? $_smarty_tpl->tpl_vars['row']->value['add_time'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
</td>
	    <td><?php echo -1*(isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
</td>
	    <td><a href="../../business/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="_blank"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_contractNum'] : null);?>
</a></td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_startDate'] : null);?>
&nbsp;&nbsp;到&nbsp;&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_endDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_endDate'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linker']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linker'] : null);?>
</td>	    
 </tr>
 <?php }} ?>
 <tr style="background-color:#FE6E47;">
    <td>合计</td>
    <td colspan="2">&nbsp;</td>
    <td><?php echo -1*$_smarty_tpl->getVariable('all_money')->value;?>
</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  </table>
  </div>
 <?php }?>
 <?php if ($_smarty_tpl->getVariable('list6')->value&&$_smarty_tpl->getVariable('b_type')->value==6){?>
 <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable(0, null, null);?>
 <div class="Toolbar_inbox"><span>其他收入</span></div>
 <div class="list">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">序号	</th>
	<th width="200">时间</th>
	<th width="400">名称</th>
	<th>金额</th>
	<th>收入类型</th>
	<th>方式</th>
	<th>账户</th>
	<th>单号</th>
	<th>门店</th>
	<th>备注说明</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list6')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable($_smarty_tpl->getVariable('all_money')->value+(isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null), null, null);?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
    	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['add_time']) ? $_smarty_tpl->tpl_vars['row']->value['add_time'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['account_type']) ? $_smarty_tpl->tpl_vars['row']->value['account_type'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['payment_name']) ? $_smarty_tpl->tpl_vars['row']->value['payment_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_name']) ? $_smarty_tpl->tpl_vars['row']->value['bank_name'] : null);?>
</td>
		<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['break_id']) ? $_smarty_tpl->tpl_vars['row']->value['break_id'] : null)!=0){?><a href="../../machine/modify.php?task=breakdetail&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['break_id']) ? $_smarty_tpl->tpl_vars['row']->value['break_id'] : null);?>
" target="_blank"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bill_code']) ? $_smarty_tpl->tpl_vars['row']->value['bill_code'] : null);?>
</a><?php }else{ ?><a href="../../finance/change/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bill_id']) ? $_smarty_tpl->tpl_vars['row']->value['bill_id'] : null);?>
" target="_blank"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bill_code']) ? $_smarty_tpl->tpl_vars['row']->value['bill_code'] : null);?>
</a><?php }?></td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['remark']) ? $_smarty_tpl->tpl_vars['row']->value['remark'] : null);?>
</td>
  </tr>
  <?php }} ?>
  <tr style="background-color:#FE6E47;">
    <td colspan="3">合计	</td>
	<td><?php echo $_smarty_tpl->getVariable('all_money')->value;?>
</td>
	<td colspan="6"></td>
  </tr>
 </table>
</div>
 <?php }?>
 <?php if ($_smarty_tpl->getVariable('list9')->value&&$_smarty_tpl->getVariable('b_type')->value==9){?>
 <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable(0, null, null);?>
 <div class="Toolbar_inbox"><span>备用金明细</span></div>
 <div class="list">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">序号	</th>
	<th width="200">时间</th>
	<th width="400">名称</th>
	<th>打入金额</th>
	<th>归还金额</th>
	<th>单号</th>
	<th>备注说明</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list9')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable($_smarty_tpl->getVariable('all_money')->value+(isset($_smarty_tpl->tpl_vars['row']->value['in_money']) ? $_smarty_tpl->tpl_vars['row']->value['in_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['out_money']) ? $_smarty_tpl->tpl_vars['row']->value['out_money'] : null), null, null);?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
    	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['add_time']) ? $_smarty_tpl->tpl_vars['row']->value['add_time'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['in_money']) ? $_smarty_tpl->tpl_vars['row']->value['in_money'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['out_money']) ? $_smarty_tpl->tpl_vars['row']->value['out_money'] : null);?>
</td>
		<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['out_money']) ? $_smarty_tpl->tpl_vars['row']->value['out_money'] : null)!=0){?><a href="../../finance/change/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bill_id']) ? $_smarty_tpl->tpl_vars['row']->value['bill_id'] : null);?>
" target="_blank"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bill_code']) ? $_smarty_tpl->tpl_vars['row']->value['bill_code'] : null);?>
</a><?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['in_money']) ? $_smarty_tpl->tpl_vars['row']->value['in_money'] : null)!=0){?><a href="../../finance/baoxiao/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bill_id']) ? $_smarty_tpl->tpl_vars['row']->value['bill_id'] : null);?>
" target="_blank"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bill_code']) ? $_smarty_tpl->tpl_vars['row']->value['bill_code'] : null);?>
</a><?php }?></td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['remark']) ? $_smarty_tpl->tpl_vars['row']->value['remark'] : null);?>
</td>
  </tr>
  <?php }} ?>
  <tr style="background-color:#FE6E47;">
    <td colspan="3">合计	</td>
	<td colspan="2"><?php echo $_smarty_tpl->getVariable('all_money')->value;?>
</td>
	<td colspan="2"></td>
  </tr>
 </table>
</div>
 <?php }?>
 <?php if ($_smarty_tpl->getVariable('list10')->value&&$_smarty_tpl->getVariable('b_type')->value==10){?>
 <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable(0, null, null);?>
 <div class="Toolbar_inbox"><span>备用金借还明细</span></div>
 <div class="list">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">序号	</th>
	<th width="200">时间</th>
	<th width="400">名称</th>
	<th>借款人</th>
	<th>借出金额</th>
	<th>归还金额</th>
	<th>单号</th>
	<th>备注说明</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list10')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable($_smarty_tpl->getVariable('all_money')->value+(isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null), null, null);?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
    	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['add_time']) ? $_smarty_tpl->tpl_vars['row']->value['add_time'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</td>
		<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null)<0){?><?php echo -1*(isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
<?php }?></td>
		<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null)>0){?><?php echo 1*(isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
<?php }?></td>
		<td><a href="../../finance/borrow/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bill_id']) ? $_smarty_tpl->tpl_vars['row']->value['bill_id'] : null);?>
" target="_blank"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bill_code']) ? $_smarty_tpl->tpl_vars['row']->value['bill_code'] : null);?>
</a></td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['remark']) ? $_smarty_tpl->tpl_vars['row']->value['remark'] : null);?>
</td>
  </tr>
  <?php }} ?>
  <tr style="background-color:#FE6E47;">
    <td colspan="4">合计	</td>
	<td colspan="2"><?php echo -1*$_smarty_tpl->getVariable('all_money')->value;?>
</td>
	<td colspan="2"></td>
  </tr>
 </table>
</div>
 <?php }?>
</div>
<!-->
<script>
	//鼠标移动表格效果
	$(document).ready(function(){
        $("a.zoomIn").fancybox({
            'overlayShow'   : false,
            'transitionIn'  : 'elastic',
            'transitionOut' : 'elastic'
        });         
        
		$("tr[overstyle='on']").hover(
		  function () {
		    $(this).addClass("bg_hover");
		  },
		  function () {
		    $(this).removeClass("bg_hover");
		  }
		);
	});	
	

</script>
<!-->

</body>
</html>