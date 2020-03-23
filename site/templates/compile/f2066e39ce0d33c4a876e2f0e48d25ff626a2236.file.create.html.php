<?php /* Smarty version Smarty-3.0.4, created on 2019-09-30 13:56:19
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/assets/create.html" */ ?>
<?php /*%%SmartyHeaderCode:7247096595d919903402a49-77280336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2066e39ce0d33c4a876e2f0e48d25ff626a2236' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/assets/create.html',
      1 => 1569749203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7247096595d919903402a49-77280336',
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
<script src="../../../jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit"><?php if ($_smarty_tpl->getVariable('task')->value=="insert"){?>添加<?php }elseif($_smarty_tpl->getVariable('task')->value=="update"){?>编辑<?php }?></div>  
  <form method="post" action="insert.php" onsubmit="return assets_check()" name="form1" enctype="multipart/form-data">
  <div class="form2">
	  	<dl class="lineD">
		  <dt>设备类型：</dt>
		  <dd>
		  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('assetstypelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
		  <input type="radio" name="assets_type" id="assets_type" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['typeid']) ? $_smarty_tpl->tpl_vars['rows']->value['typeid'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['assets_type']) ? $_smarty_tpl->getVariable('list')->value['assets_type'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['typeid']) ? $_smarty_tpl->tpl_vars['rows']->value['typeid'] : null)){?>checked<?php }?> /><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['typename']) ? $_smarty_tpl->tpl_vars['rows']->value['typename'] : null);?>
&nbsp;&nbsp;
		  <?php }} ?>
		  </dd>
		</dl>
		<dl class="lineD">
		  <dt><span class="redstar">*</span>设备名称：</dt>
		  <dd><input type="text" name="assets_name" id="assets_name" size="38" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['assets_name']) ? $_smarty_tpl->getVariable('list')->value['assets_name'] : null);?>
" /></dd>
		</dl>
		<dl class="lineD">
		  <dt><span class="redstar">*</span>型号规格：</dt>
		  <dd><textarea name="assets_spec" id="assets_spec" cols="60" rows="3"><?php echo (isset($_smarty_tpl->getVariable('list')->value['assets_spec']) ? $_smarty_tpl->getVariable('list')->value['assets_spec'] : null);?>
</textarea></dd>
		</dl>
		<dl class="lineD">
		  <dt>购买日期：</dt>
		  <dd><input id="assets_buydate" type="text" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['assets_buydate']) ? $_smarty_tpl->getVariable('list')->value['assets_buydate'] : null);?>
" name="assets_buydate" size="16" onClick="calendar.show(this);" /></dd>
		</dl>
		<dl class="lineD">
		  <dt>购买经手人：</dt>
		  <dd><select name="assets_buyman" >
	        	<option value="" selected>请选择</option>
			<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('emplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
				<option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_name']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_name'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['emp_name']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_name'] : null)==(isset($_smarty_tpl->getVariable('list')->value['assets_buyman']) ? $_smarty_tpl->getVariable('list')->value['assets_buyman'] : null)){?>selected<?php }else{ ?><?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_name']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_name'] : null);?>
</option>	
			<?php }} ?>
			</select>
		  </dd>
		</dl>
	  	<dl class="lineD">
		  <dt>购买金额：</dt>
		  <dd><input type="text" name="assets_buyamount" id="assets_buyamount" size="10" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['assets_buyamount']) ? $_smarty_tpl->getVariable('list')->value['assets_buyamount'] : null);?>
" /></dd>
		</dl>
		<dl class="lineD">
		  <dt><span class="redstar">*</span>负责人：</dt>
		  <dd><select name="assets_responsible" id="assets_responsible">
	        	<option value="" selected>请选择</option>
			<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('emplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
				<option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_name']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_name'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['emp_name']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_name'] : null)==(isset($_smarty_tpl->getVariable('list')->value['assets_responsible']) ? $_smarty_tpl->getVariable('list')->value['assets_responsible'] : null)){?>selected<?php }else{ ?><?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_name']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_name'] : null);?>
</option>	
			<?php }} ?>
			</select>
		  </dd>
		</dl>
		<dl class="lineD">
	      <dt><span class="redstar">*</span>存放门店：</dt>
	      <dd>
	        <select name="assets_shopid" id="assets_shopid" >
	        	<option value="0" selected>请选择</option>
			<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shoplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
				<option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null)==(isset($_smarty_tpl->getVariable('list')->value['assets_shopid']) ? $_smarty_tpl->getVariable('list')->value['assets_shopid'] : null)){?>selected<?php }else{ ?><?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>
</option>	
			<?php }} ?>
			</select>
		  </dd>
	    </dl>
	    
    <div class="page_btm">
      <input type="submit" class="btn_b" name="btn_save" value="确定" /><b> 注：<span class="red">*</span>为必填项</b>
    </div>
  </div>
  <input type="hidden" name="uid" id="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['assets_id']) ? $_smarty_tpl->getVariable('list')->value['assets_id'] : null);?>
" />
  
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  </form>
</div>
<!-->
<script>
function assets_check(){
	if ($("#assets_name").val()==""){
		alert("请填写设备名称！");
		$("#assets_name").focus();
		return false;
	}
	if ($("#assets_spec").val()==""){
		alert("请填写型号规格！");
		$("#assets_spec").focus();
		return false;
	}
	if ($("#assets_responsible").val()==""){
		alert("请选择负责人！");
		$("#assets_responsible").focus();
		return false;
	}
	if ($("#assets_shopid").val()=="0"){
		alert("请选择存放门店！");
		$("#assets_shopid").focus();
		return false;
	}
}

</script>
<!-->
</body>
</html>