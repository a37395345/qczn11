<?php /* Smarty version Smarty-3.0.4, created on 2019-06-05 19:32:06
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/renshi/gongzhi_type.html" */ ?>
<?php /*%%SmartyHeaderCode:301355cf7a836d7e3f2-10472973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2219ba51d9594c0962374097dc382087575b732f' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/renshi/gongzhi_type.html',
      1 => 1557452742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '301355cf7a836d7e3f2-10472973',
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
  <div class="page_tit">工资项目</div>
  <!-------- 用户列表 -------->
  <div class="Toolbar_inbox">
  	<div class="page right"> </div>
  		<button><a href="add_gongzhi_type.php">添加项目</a></button>&nbsp;&nbsp;&nbsp;&nbsp;
  </div>
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th class="line_l" width="5%">排序</th>
    <th class="line_l" width="10%">项目名称</th>
	 <th class="line_l" width="10%">单位</th>
	 <th class="line_l" width="10%">计算方式</th>
	 <th class="line_l" width="10%">基础数据</th>
    
     <th class="line_l" width="45%">规则说明</th>
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
  	<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_name']) ? $_smarty_tpl->tpl_vars['rows']->value['type_name'] : null);?>
</td>

  	<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_danwei']) ? $_smarty_tpl->tpl_vars['rows']->value['type_danwei'] : null);?>
</td>
  	<td><?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['type_jisuan']) ? $_smarty_tpl->tpl_vars['rows']->value['type_jisuan'] : null)==1){?>加<?php }else{ ?>减<?php }?></td>
    <td><?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['type_shuliang']) ? $_smarty_tpl->tpl_vars['rows']->value['type_shuliang'] : null)==1){?>一次<?php }else{ ?>多次<?php }?></td>
    
    <td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_guize']) ? $_smarty_tpl->tpl_vars['rows']->value['type_guize'] : null);?>
</td>
  	<td><a href="add_gongzhi_type.php?id=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
&op=update">修改</a> &nbsp;&nbsp;&nbsp;<a href="delete_gongzhi_type.php?id=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
">删除</a></td>
    
  	
 </tr>
 	<?php }} ?>

 </table>
 </div>




</body>
</html>