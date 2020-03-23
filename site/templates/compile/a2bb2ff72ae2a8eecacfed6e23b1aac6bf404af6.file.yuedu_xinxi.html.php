<?php /* Smarty version Smarty-3.0.4, created on 2019-04-18 10:57:03
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/xinxi/yuedu_xinxi.html" */ ?>
<?php /*%%SmartyHeaderCode:58285cb7e77ff2e490-81056139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2bb2ff72ae2a8eecacfed6e23b1aac6bf404af6' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/xinxi/yuedu_xinxi.html',
      1 => 1555556212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58285cb7e77ff2e490-81056139',
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

</head>
<body>
<div class="so_main">
  <div class="page_tit">系统信息</div>
  <!-------- 用户列表 -------->
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>
  <th class="line_l" width="8%">信息排序</th>
  <th class="line_l" width="10%">发送人</th>
	<th class="line_l" width="12%">发送时间</th>
  <th class="line_l" width="60%">信息内容</th>
  <th class="line_l" width="10%">操作</th>
  </tr>
  	<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
  <tr>
  	<td ><?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)+1;?>
</td>
  	<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['fasong_emp']) ? $_smarty_tpl->tpl_vars['rows']->value['fasong_emp'] : null);?>
</td>
  	<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['addtime']) ? $_smarty_tpl->tpl_vars['rows']->value['addtime'] : null);?>
</td>
    <td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['text']) ? $_smarty_tpl->tpl_vars['rows']->value['text'] : null);?>
</td>
  	<td><a href="delete_xinxi.php?id=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
">删除</a></td>
 </tr>
 	<?php }} ?>

 </table>
 </div>




</body>
</html>