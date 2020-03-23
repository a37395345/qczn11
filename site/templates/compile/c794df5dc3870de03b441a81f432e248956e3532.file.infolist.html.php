<?php /* Smarty version Smarty-3.0.4, created on 2019-07-06 14:28:13
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/system/rules/infolist.html" */ ?>
<?php /*%%SmartyHeaderCode:120975d203f7d5baac0-01611832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c794df5dc3870de03b441a81f432e248956e3532' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/system/rules/infolist.html',
      1 => 1560821448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120975d203f7d5baac0-01611832',
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
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;


	}
	a:hover{

color: red;

}
/**/
</style>
</head>
<body>
	<h2 style="margin-top: 50px">公司规章制度</h2>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('infoList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  <tr>
	<td style="text-align:left; font-size: 16px;margin-top: 50px;margin-left: 100px;padding: 50px; font-weight: 600;"><?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)+1;?>
.<a href="detail.php?id=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" target="_blank"><u><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['info_title']) ? $_smarty_tpl->tpl_vars['row']->value['info_title'] : null);?>
</u></a></td>
  </tr>
 <?php }} ?>
 </table>
<div class="so_main">
  <div class="page_tit" style="text-align:center;"><?php echo (isset($_smarty_tpl->getVariable('info')->value['info_content']) ? $_smarty_tpl->getVariable('info')->value['info_content'] : null);?>
</div>
<div class="list">


 
 
</div>
</div>
</body>
</html>