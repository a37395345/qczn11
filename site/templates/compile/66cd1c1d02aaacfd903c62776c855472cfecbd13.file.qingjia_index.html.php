<?php /* Smarty version Smarty-3.0.4, created on 2019-04-24 08:45:49
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/renshi/qingjia_index.html" */ ?>
<?php /*%%SmartyHeaderCode:45cbfb1bd7e0c77-43037398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66cd1c1d02aaacfd903c62776c855472cfecbd13' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/renshi/qingjia_index.html',
      1 => 1556066746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45cbfb1bd7e0c77-43037398',
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
  <div class="page_tit">职位分类</div>
  <!-------- 用户列表 -------->
  <div class="Toolbar_inbox">
  	<div class="page right"> </div>
  		<button><a href="qingjia_add.php">添加请假项目</a></button>&nbsp;&nbsp;&nbsp;&nbsp;
  </div>
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th class="line_l">排序</th>
    <th class="line_l">请假名称</th>
    <th class="line_l">是否扣工资</th>
	   <th class="line_l">操作</th>
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
  	<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['qingjia_name']) ? $_smarty_tpl->tpl_vars['rows']->value['qingjia_name'] : null);?>
</td>
  	<td><?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['qingjia_kou']) ? $_smarty_tpl->tpl_vars['rows']->value['qingjia_kou'] : null)==0){?>不扣工资
  	<?php }elseif((isset($_smarty_tpl->tpl_vars['rows']->value['qingjia_kou']) ? $_smarty_tpl->tpl_vars['rows']->value['qingjia_kou'] : null)==1){?>扣工资
  
  	<?php }?>
  </td>
  	<td>
  		<a href="qingjia_add.php?id=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
&op=update">修改</a> &nbsp;&nbsp;&nbsp;<a href="qingjia_delete.php?id=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
">删除</a>
  	</td>
  	
 </tr>
 	<?php }} ?>

 </table>
 </div>




</body>
</html>