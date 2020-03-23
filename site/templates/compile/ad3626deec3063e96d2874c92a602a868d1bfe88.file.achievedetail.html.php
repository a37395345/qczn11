<?php /* Smarty version Smarty-3.0.4, created on 2019-09-18 03:34:09
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/report/achievedetail.html" */ ?>
<?php /*%%SmartyHeaderCode:106485d813531456f29-89740441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad3626deec3063e96d2874c92a602a868d1bfe88' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/report/achievedetail.html',
      1 => 1564638638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106485d813531456f29-89740441',
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
  <div class="page_tit">业绩统计明细---<?php echo $_smarty_tpl->getVariable('search_name')->value;?>
&nbsp;&nbsp;时间范围：<?php echo $_smarty_tpl->getVariable('sdate')->value;?>
&nbsp;&nbsp;到&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('edate')->value;?>
</div>
  <?php if ($_smarty_tpl->getVariable('list1')->value){?>
  <div class="Toolbar_inbox"><span>临时自驾</span></div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th>序号</th>
	<th>进账时间</th>
	<th>名称</th>
	<th>金额</th>
	<th>合同号</th>
	<th>用车时间</th>
	<th>联系人</th>
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
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_contractNum'] : null);?>
</td>
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
 <?php if ($_smarty_tpl->getVariable('list11')->value){?>
 <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable(0, null, null);?>
 <div class="Toolbar_inbox"><span>优惠券</span></div>
 <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th>序号</th>
	<th>报销日期</th>
	<th>报销人</th>
	<th>金额</th>
	<th>付款方式</th>
	<th>付款账号</th>
	<th width="35%">报销内容</th>
	<th>受理时间</th>
	<th>报销单号</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list11')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable($_smarty_tpl->getVariable('all_money')->value+(isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_money']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_money'] : null), null, null);?>
  <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->getVariable('count')->value+1, null, null);?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
" <?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1)%2==0){?>style="background-color:#EAF2D3;"<?php }?>>
	  	<td><?php echo $_smarty_tpl->getVariable('count')->value;?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_date']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_date'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_money']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_money'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['payment_name']) ? $_smarty_tpl->tpl_vars['row']->value['payment_name'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_name']) ? $_smarty_tpl->tpl_vars['row']->value['bank_name'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_content']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_content'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isOverTime']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isOverTime'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_code']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_code'] : null);?>
</td>
 </tr>
 <?php }} ?>
 <tr style="background-color:#FE6E47;">
    <td>合计</td>
    <td colspan="2">&nbsp;</td>
    <td><?php echo $_smarty_tpl->getVariable('all_money')->value;?>
</td>
    <td colspan="7">&nbsp;</td>
  </tr>
  </table>
  </div>
 <?php }?>
 <?php if ($_smarty_tpl->getVariable('list2')->value){?>
 <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable(0, null, null);?>
 <div class="Toolbar_inbox"><span>临时带驾</span></div>
 <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th width="42">序号</th>
	<th>进账时间</th>
	<th>名称</th>
	<th width="288">用车时间</th>
	<th width="80">金额</th>
	<th width="130">合同号</th>
	<th width="270">说明</th>
	<th>联系人</th>
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
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_startDate'] : null);?>
&nbsp;&nbsp;到&nbsp;&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_endDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_endDate'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_contractNum'] : null);?>
</td>
	    <td></td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linker']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linker'] : null);?>
</td>	    
 </tr>
 <?php }} ?>
 <tr style="background-color:#FE6E47;">
    <td>合计</td>
    <td  colspan="3">&nbsp;</td>
    <td><?php echo $_smarty_tpl->getVariable('all_money')->value;?>
</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  </table>
  </div>
 <?php }?>
 <?php if ($_smarty_tpl->getVariable('list22')->value){?>
 <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable(0, null, null);?>
 <div class="Toolbar_inbox"><span>临时带驾批量结算</span></div>
 <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th width="62">序号</th>
	<th width="160">进账时间</th>
	<th width="400">客户名称</th>
	<th width="80">金额</th>
	<th>结算号</th>
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
" <?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1)%2==0){?>style="background-color:#EAF2D3;"<?php }?>>
	  	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['add_time']) ? $_smarty_tpl->tpl_vars['row']->value['add_time'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bill_code']) ? $_smarty_tpl->tpl_vars['row']->value['bill_code'] : null);?>
</td>
 </tr>
 <?php }} ?>
 <tr style="background-color:#FE6E47;">
    <td>合计</td>
    <td colspan="2">&nbsp;</td>
    <td><?php echo $_smarty_tpl->getVariable('all_money')->value;?>
</td>
    <td>&nbsp;</td>
  </tr>
  </table>
  </div>
 <?php }?>
 <?php if ($_smarty_tpl->getVariable('list21')->value){?>
 <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable(0, null, null);?>
 <div class="Toolbar_inbox"><span>调车结算</span></div>
 <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th width="62">序号</th>
	<th width="160">进账时间</th>
	<th width="400">调车企业名称</th>
	<th width="80">金额</th>
	<th>结算号</th>
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
" <?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1)%2==0){?>style="background-color:#EAF2D3;"<?php }?>>
	  	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['add_time']) ? $_smarty_tpl->tpl_vars['row']->value['add_time'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bro_name']) ? $_smarty_tpl->tpl_vars['row']->value['bro_name'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bill_code']) ? $_smarty_tpl->tpl_vars['row']->value['bill_code'] : null);?>
</td>
 </tr>
 <?php }} ?>
 <tr style="background-color:#FE6E47;">
    <td>合计</td>
    <td colspan="2">&nbsp;</td>
    <td><?php echo $_smarty_tpl->getVariable('all_money')->value;?>
</td>
    <td>&nbsp;</td>
  </tr>
  </table>
  </div>
 <?php }?>
 <?php if ($_smarty_tpl->getVariable('list3')->value){?>
 <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable(0, null, null);?>
 <div class="Toolbar_inbox"><span>长期自驾</span></div>
 <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th width="52">序号</th>
	<th width="160">进账时间</th>
	<th width="338">用车时间</th>
	<th width="80">金额</th>
	<th width="180">合同号</th>
	<th width="370">客户名称</th>
	<th>联系人</th>
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
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_startDate'] : null);?>
&nbsp;&nbsp;到&nbsp;&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_endDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_endDate'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_contractNum'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null);?>
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
 <?php if ($_smarty_tpl->getVariable('list4')->value){?>
 <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable(0, null, null);?>
 <div class="Toolbar_inbox"><span>长期带驾</span></div>
 <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th width="52">序号</th>
	<th width="160">进账时间</th>
	<th width="338">用车时间</th>
	<th width="80">金额</th>
	<th width="180">合同号</th>
	<th width="400">客户名称</th>
	<th>联系人</th>
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
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_startDate'] : null);?>
&nbsp;&nbsp;到&nbsp;&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_endDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_endDate'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_contractNum'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null);?>
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
 <?php if ($_smarty_tpl->getVariable('list5')->value){?>
 <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable(0, null, null);?>
 <div class="Toolbar_inbox"><span>长期大客</span></div>
 <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th width="52">序号</th>
	<th>进账时间</th>
	<th width="338">用车时间</th>
	<th width="80">金额</th>
	<th width="180">合同号</th>
	<th width="470">客户名称</th>
	<th>联系人</th>
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
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_startDate'] : null);?>
&nbsp;&nbsp;到&nbsp;&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_endDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_endDate'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_contractNum'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linker']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linker'] : null);?>
</td>	    
 </tr>
 <?php }} ?>
 <tr style="background-color:#FE6E47;">
    <td>合计</td>
    <td >&nbsp;</td>
    <td><?php echo $_smarty_tpl->getVariable('all_money')->value;?>
</td>
    <td colspan="3">&nbsp;</td>
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