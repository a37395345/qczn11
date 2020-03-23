<?php /* Smarty version Smarty-3.0.4, created on 2014-09-20 19:57:10
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/machine/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:2464541d6b96411d34-35372195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34163c34d8f1d047487e7895a2cf39742b40331d' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/machine/detail.html',
      1 => 1411214226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2464541d6b96411d34-35372195',
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
	    <dt>车牌号：</dt>
	    <dd>苏D<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>车辆颜色：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_color']) ? $_smarty_tpl->getVariable('list')->value['car_color'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>车辆品牌：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_brand']) ? $_smarty_tpl->getVariable('list')->value['car_brand'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>车辆种类：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_type']) ? $_smarty_tpl->getVariable('list')->value['car_type'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>发动机号：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_motor']) ? $_smarty_tpl->getVariable('list')->value['car_motor'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>车架号：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_frame']) ? $_smarty_tpl->getVariable('list')->value['car_frame'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>座位数：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_seat']) ? $_smarty_tpl->getVariable('list')->value['car_seat'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>备注：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_remarks']) ? $_smarty_tpl->getVariable('list')->value['car_remarks'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>车辆报价：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_price']) ? $_smarty_tpl->getVariable('list')->value['car_price'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	      <dt>车辆照片：</dt>
	      <dd>
	        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('list')->value['car_imglist']) ? $_smarty_tpl->getVariable('list')->value['car_imglist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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