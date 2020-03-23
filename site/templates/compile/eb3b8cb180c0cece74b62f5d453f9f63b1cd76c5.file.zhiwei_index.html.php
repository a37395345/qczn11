<?php /* Smarty version Smarty-3.0.4, created on 2019-09-03 16:42:07
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/renshi/zhiwei_index.html" */ ?>
<?php /*%%SmartyHeaderCode:47965d6e275f8ad114-10566131%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb3b8cb180c0cece74b62f5d453f9f63b1cd76c5' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/renshi/zhiwei_index.html',
      1 => 1567498455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47965d6e275f8ad114-10566131',
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
  		<button><a href="tianjia.php">添加职位</a></button>&nbsp;&nbsp;&nbsp;&nbsp;
  </div>
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th class="line_l">排序</th>
    <th class="line_l">职位名称</th>
    <th class="line_l">试用期底薪</th>
    <th class="line_l">正式期底薪</th>
    <th class="line_l">试用期</th>
    <th class="line_l">休息方式</th>
	
	<th class="line_l">操作</th>
  </tr>

  	<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
  <tr style="background-color: <?php if ((isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)%2==0){?>#e6dddd<?php }else{ ?>#c3bebe<?php }?>"> 
  	<td ><?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)+1;?>
</td>
  	<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_name']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_name'] : null);?>
</td>
  	<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_shiyong_dixin']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_shiyong_dixin'] : null);?>
</td>
  	<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_zhengshi_dixin']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_zhengshi_dixin'] : null);?>
</td>
  	<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_shiyongqi']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_shiyongqi'] : null);?>
月</td>
  	<td><?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_xiuxi']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_xiuxi'] : null)==0){?>单休
  	<?php }elseif((isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_xiuxi']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_xiuxi'] : null)==1){?>双休
  	<?php }elseif((isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_xiuxi']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_xiuxi'] : null)==2){?>一月休4天
  	<?php }elseif((isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_xiuxi']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_xiuxi'] : null)==3){?>不休
  	<?php }?>
  </td>
  	<td>
  		<a href="xiangxi.php?id=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
">详细</a> &nbsp;&nbsp;&nbsp;<a href="tianjia.php?id=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
&op=update">修改</a> &nbsp;&nbsp;&nbsp;<a href="delete.php?id=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
">删除</a>
  	</td>
  	
 </tr>
 	<?php }} ?>

 </table>
 </div>




</body>
</html>