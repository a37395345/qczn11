<?php /* Smarty version Smarty-3.0.4, created on 2019-04-16 14:33:19
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/wenti/xiangxi.html" */ ?>
<?php /*%%SmartyHeaderCode:315585cb5772fd31dd2-83788205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad2255a25734b90e6c5b002cbaae6a6238308472' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/wenti/xiangxi.html',
      1 => 1555396396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315585cb5772fd31dd2-83788205',
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
<script src="../../../../jquery.js"></script>
</head>
<body>
<div class="so_main">
  <div class="page_tit">问题明细</div>  
  
  <div class="form2">
  	 <dl class="lineD">
	    <dt>问题状态：</dt>
	    <dd><span style="color: red"><?php echo (isset($_smarty_tpl->getVariable('list')->value['wenti_type']) ? $_smarty_tpl->getVariable('list')->value['wenti_type'] : null);?>
</span></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>问题标题：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['wenti_name']) ? $_smarty_tpl->getVariable('list')->value['wenti_name'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>问题说明：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['wenti_shuoming']) ? $_smarty_tpl->getVariable('list')->value['wenti_shuoming'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
		<dt>提交问题人：</dt>
		<dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['username1']) ? $_smarty_tpl->getVariable('list')->value['username1'] : null);?>

		</dd>
	</dl>
	<dl class="lineD">
	    <dt>提交时间：</dt>
	    <dd>
    	<?php echo (isset($_smarty_tpl->getVariable('list')->value['wenti_addtime']) ? $_smarty_tpl->getVariable('list')->value['wenti_addtime'] : null);?>

	    </dd>
	</dl>
	<dl class="lineD">
	    <dt>审核意见：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['wenti_shenheyijian']) ? $_smarty_tpl->getVariable('list')->value['wenti_shenheyijian'] : null);?>
</dd>
	</dl>
	<dl class="lineD">
	    <dt>审核人：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['username2']) ? $_smarty_tpl->getVariable('list')->value['username2'] : null);?>
</dd>
	</dl>
	<dl class="lineD">
	    <dt>审核时间：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['wenti_shenhetime']) ? $_smarty_tpl->getVariable('list')->value['wenti_shenhetime'] : null);?>
</dd>
	</dl>
	<dl class="lineD">
	    <dt>处理人：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['username3']) ? $_smarty_tpl->getVariable('list')->value['username3'] : null);?>
</dd>
	</dl>
	<dl class="lineD">
	    <dt>处理时间：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['wenti_chilitime']) ? $_smarty_tpl->getVariable('list')->value['wenti_chilitime'] : null);?>
</dd>
	</dl>
	<?php if ((isset($_smarty_tpl->getVariable('list')->value['wenti_zhuangtai']) ? $_smarty_tpl->getVariable('list')->value['wenti_zhuangtai'] : null)=='5'){?>
	<dl class="lineD">
	    <dt>提交人审查时间：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['wenti_shenchatime']) ? $_smarty_tpl->getVariable('list')->value['wenti_shenchatime'] : null);?>
</dd>
	</dl>
	<?php }?>
	<?php if ((isset($_smarty_tpl->getVariable('list')->value['wenti_zhuangtai']) ? $_smarty_tpl->getVariable('list')->value['wenti_zhuangtai'] : null)=='6'){?>
	<dl class="lineD">
	    <dt>不能解决原因：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['wenti_liyou']) ? $_smarty_tpl->getVariable('list')->value['wenti_liyou'] : null);?>
</dd>
	</dl>
	<?php }?>
	<dl class="lineD">
	    <dt>附件：</dt>
	  	<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('images')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	  	<div style="float: left;width: 150px;height: 150px;margin: 10px;" class="img_a">
	  		<img style="width: 100%;height: 100%" src="/thumb/<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['images']) ? $_smarty_tpl->tpl_vars['rows']->value['images'] : null);?>
">
	  	</div>
	  	<?php }} ?>
	</dl>
</div>
  
  
</div>
<script> 
	$('img').click(function(){
		var src=$(this).attr('src');
		window.open(src); 
	});
	
</script>

</body>
</html>