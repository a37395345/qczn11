<?php /* Smarty version Smarty-3.0.4, created on 2014-09-05 10:51:04
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/sales/consult/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:2327154092518e5c1c7-11187563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2210e2ca2655410401bd8b5b57d28dd0f590275' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/sales/consult/detail.html',
      1 => 1409885458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2327154092518e5c1c7-11187563',
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
<script type="text/javascript" src="../../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit">详细</div>  
  <div class="form2">  	
	  	<dl class="lineD">
		  <dt>咨询人：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['consult_linker']) ? $_smarty_tpl->getVariable('list')->value['consult_linker'] : null);?>
    联系电话：<?php echo (isset($_smarty_tpl->getVariable('list')->value['consult_linkerPhone']) ? $_smarty_tpl->getVariable('list')->value['consult_linkerPhone'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		    <dt>用车类型：</dt>
		    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['item_name']) ? $_smarty_tpl->getVariable('list')->value['item_name'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
	    	<dt>需求车型：</dt>
	    	<dd><?php if ((isset($_smarty_tpl->getVariable('list')->value['consult_requestCar']) ? $_smarty_tpl->getVariable('list')->value['consult_requestCar'] : null)==1){?>商务车<?php }elseif((isset($_smarty_tpl->getVariable('list')->value['consult_requestCar']) ? $_smarty_tpl->getVariable('list')->value['consult_requestCar'] : null)==2){?>客车<?php }else{ ?>小车<?php }?></dd>
	  	</dl>
	  	<dl class="lineD">
		    <dt>路程：</dt>
		    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['consult_route']) ? $_smarty_tpl->getVariable('list')->value['consult_route'] : null);?>
</dd>
		</dl>
	  	<dl class="lineD">
		    <dt>开车线路：</dt>
		    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['consult_line']) ? $_smarty_tpl->getVariable('list')->value['consult_line'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
	      <dt>开始时间：</dt>
	      <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['consult_startDate']) ? $_smarty_tpl->getVariable('list')->value['consult_startDate'] : null);?>
~<?php echo (isset($_smarty_tpl->getVariable('list')->value['consult_endDate']) ? $_smarty_tpl->getVariable('list')->value['consult_endDate'] : null);?>
</dd>
	    </dl>
		<dl class="lineD">
		  <dt>报价情况：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['consult_price']) ? $_smarty_tpl->getVariable('list')->value['consult_price'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		    <dt>接待人：</dt>
		    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['yewuyuan']) ? $_smarty_tpl->getVariable('list')->value['yewuyuan'] : null);?>
</dd>
		</dl>
	    <dl class="lineD">
		  <dt>备注：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['consult_Remarks']) ? $_smarty_tpl->getVariable('list')->value['consult_Remarks'] : null);?>
</dd>
		</dl>
  </div>
  <?php if ((isset($_smarty_tpl->getVariable('list')->value['negotiate_list']) ? $_smarty_tpl->getVariable('list')->value['negotiate_list'] : null)){?>
  <div class="list">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr><th colspan="6" style="text-align:left;">历次洽谈情况</th></tr>
		<tr>
			<th style="width:30px;">序号	</th>
			<th>日期</th>
			<th>接洽人</th>
			<th>洽谈方式</th>
			<th>洽谈内容</th>
			<th>结果判断</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('list')->value['negotiate_list']) ? $_smarty_tpl->getVariable('list')->value['negotiate_list'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row1']->key => $_smarty_tpl->tpl_vars['row1']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row1']->key;
?>
		<tr>
			<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['negotiate_Date']) ? $_smarty_tpl->tpl_vars['row1']->value['negotiate_Date'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['negotiate_linker']) ? $_smarty_tpl->tpl_vars['row1']->value['negotiate_linker'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['negotiate_type']) ? $_smarty_tpl->tpl_vars['row1']->value['negotiate_type'] : null);?>
</td>
			<td style="text-align:left;"><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['negotiate_Remarks']) ? $_smarty_tpl->tpl_vars['row1']->value['negotiate_Remarks'] : null);?>
</td>
			<td><?php if ((isset($_smarty_tpl->tpl_vars['row1']->value['negotiate_result']) ? $_smarty_tpl->tpl_vars['row1']->value['negotiate_result'] : null)==3){?>用户已放弃<?php }elseif((isset($_smarty_tpl->tpl_vars['row1']->value['negotiate_result']) ? $_smarty_tpl->tpl_vars['row1']->value['negotiate_result'] : null)==2){?>已选择其他租车公司<?php }elseif((isset($_smarty_tpl->tpl_vars['row1']->value['negotiate_result']) ? $_smarty_tpl->tpl_vars['row1']->value['negotiate_result'] : null)==1){?>已决定租车<?php }else{ ?>需要继续跟进<?php }?></td>
		</tr>
		<?php }} ?>
	</table>
  </div>
  <?php }?>
  <div class="page_btm">
      <a href="list.php">返回</a>
  </div>
</div>

</body>
</html>