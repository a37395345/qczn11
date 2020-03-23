<?php /* Smarty version Smarty-3.0.4, created on 2019-05-14 13:35:04
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/base/index.html" */ ?>
<?php /*%%SmartyHeaderCode:235355cda5388b072a6-19200576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90f1a8f0d3e22352702fdb984edf6f20f9d22a02' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/base/index.html',
      1 => 1557812102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '235355cda5388b072a6-19200576',
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
<link href="../../../../css/box.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../../../js/jquery.js"></script>

<style>

</style>
</head>
<body>
<div style="width: 90%;padding-top: 1px;margin-left: 5%;    border: 1px solid #e4c7c7;margin-top: 30px">
	<div style="float: left;width: 20%;background-color: #e2acac;height: 100px;font-size: 18px;line-height: 100px;text-align: center;">
		<a href="list.php?client_typeid=100" cursor:pointer>客户总数：<?php echo $_smarty_tpl->getVariable('count')->value;?>
</a></div>
	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
	<div style="float: left;width: 16%;background-color: <?php if ((isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)%2!=0){?>#e6e8f1<?php }else{ ?>#e6e2e2<?php }?>;height: 100px;font-size: 15px;line-height: 100px;text-align: center;">
		<a href="list.php?client_typeid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" cursor:pointer><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['index']) ? $_smarty_tpl->tpl_vars['row']->value['index'] : null);?>
</a>
	</div>
	<?php $_smarty_tpl->tpl_vars['s'] = new Smarty_variable($_smarty_tpl->getVariable('s')->value+(isset($_smarty_tpl->tpl_vars['row']->value['index']) ? $_smarty_tpl->tpl_vars['row']->value['index'] : null), null, null);?>
	<?php }} ?>
	<div style="width: 100%;height: 1px;clear: both;"></div>
	
</div>

</body>
</html>