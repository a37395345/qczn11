<?php /* Smarty version Smarty-3.0.4, created on 2014-09-06 16:04:41
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/sales/contract/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:4748540ac0191d65c2-05478858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b361be76669a97e88fbedf099b16bee867cf932' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/sales/contract/detail.html',
      1 => 1409989404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4748540ac0191d65c2-05478858',
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

<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit">合同详细</div>  
  
  <div class="form2">
	  	<dl class="lineD">
		  <dt>合同编号：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_number']) ? $_smarty_tpl->getVariable('list')->value['contract_number'] : null);?>
</dd>
		</dl>
	  	<dl class="lineD">
		  <dt>客户名称：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['client_name']) ? $_smarty_tpl->getVariable('list')->value['client_name'] : null);?>
" /></dd>
		</dl>
		<dl class="lineD">
		    <dt>用车类型：</dt>
		    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['item_name']) ? $_smarty_tpl->getVariable('list')->value['item_name'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
	      <dt>合同有效期：</dt>
	      <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_startdate']) ? $_smarty_tpl->getVariable('list')->value['contract_startdate'] : null);?>
~<?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_enddate']) ? $_smarty_tpl->getVariable('list')->value['contract_enddate'] : null);?>
</dd>
	    </dl>
	    <dl class="lineD">
		    <dt>业务员：</dt>
		    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['yewuyuan']) ? $_smarty_tpl->getVariable('list')->value['yewuyuan'] : null);?>
</dd>
		</dl>
	    <dl class="lineD">
		  <dt>合同内容概述：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_content']) ? $_smarty_tpl->getVariable('list')->value['contract_content'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
	      <dt>合同扫描件：</dt>
	      <dd>
	        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('list')->value['contract_imglist']) ? $_smarty_tpl->getVariable('list')->value['contract_imglist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	         <a href="../../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['images']) ? $_smarty_tpl->tpl_vars['rows']->value['images'] : null);?>
" title="点击查看原图" target="_blank"><img src="../../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['images']) ? $_smarty_tpl->tpl_vars['rows']->value['images'] : null);?>
" width="100" height="100" /></a>
	        <?php }} ?>
	      </dd>
	   </dl>
    <div class="page_btm">
      <a href="list.php">返回</a>
    </div>
  </div>
</div>
</body>
</html>