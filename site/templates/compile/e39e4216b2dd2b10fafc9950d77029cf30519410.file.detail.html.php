<?php /* Smarty version Smarty-3.0.4, created on 2014-09-20 21:12:07
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/employee/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:31343541d7d27296c30-34446053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e39e4216b2dd2b10fafc9950d77029cf30519410' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/employee/detail.html',
      1 => 1411218722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31343541d7d27296c30-34446053',
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
<link href="../../../css/style.css" rel="stylesheet" type="text/css">
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="form2">
  <dl class="lineD">
    <dt>姓名：</dt>
    <dd><?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_name']) ? $_smarty_tpl->getVariable('employee')->value['emp_name'] : null);?>
</dd>
  </dl>
  <dl class="lineD">
    <dt>性别：</dt>
    <dd><?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_sex']) ? $_smarty_tpl->getVariable('employee')->value['emp_sex'] : null);?>
</dd>
  </dl>
  <dl class="lineD">
    <dt>身份证号：</dt>
    <dd><?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_num']) ? $_smarty_tpl->getVariable('employee')->value['emp_num'] : null);?>
</dd>
  </dl>
  <dl class="lineD">
    <dt>手机号：</dt>
    <dd><?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_phone']) ? $_smarty_tpl->getVariable('employee')->value['emp_phone'] : null);?>
</dd>
  </dl>
  <dl class="lineD">
    <dt>家庭电话：</dt>
    <dd><?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_homeTel']) ? $_smarty_tpl->getVariable('employee')->value['emp_homeTel'] : null);?>
</dd>
  </dl>
  <dl class="lineD">
    <dt>家庭地址：</dt>
    <dd><?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_homeAdd']) ? $_smarty_tpl->getVariable('employee')->value['emp_homeAdd'] : null);?>
</dd>
  </dl>
  <dl class="lineD">
    <dt>介绍：</dt>
    <dd><?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_introduce']) ? $_smarty_tpl->getVariable('employee')->value['emp_introduce'] : null);?>
</dd>
  </dl>
  <dl class="lineD">
    <dt>入职日期：</dt>
    <dd><?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_EntryDate']) ? $_smarty_tpl->getVariable('employee')->value['emp_EntryDate'] : null);?>
</dd>
  </dl>
  <dl class="lineD">
      <dt>照片：</dt>
      <dd>
        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('employee')->value['emp_imglist']) ? $_smarty_tpl->getVariable('employee')->value['emp_imglist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
         <a href="../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['images']) ? $_smarty_tpl->tpl_vars['rows']->value['images'] : null);?>
" title="点击查看原图" target="_blank"><img src="../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['images']) ? $_smarty_tpl->tpl_vars['rows']->value['images'] : null);?>
" width="100" height="100" /></a>
        <?php }} ?>
      </dd>
    </dl>
</div>
</div>
</body>
</html>