<?php /* Smarty version Smarty-3.0.4, created on 2019-04-17 14:11:16
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/update/update_baoxiao.html" */ ?>
<?php /*%%SmartyHeaderCode:199125cb6c384a18871-54298437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3f837e5c5cc06d7c520ab37b306875e0053db43' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/update/update_baoxiao.html',
      1 => 1555481456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199125cb6c384a18871-54298437',
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
<link rel="stylesheet" type="text/css" href="../../../../css/webuploader.css">
<link rel="stylesheet" type="text/css" href="../../../../css/diyUpload.css">
<script src="../../../../jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<script type="text/javascript" src="../../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../../js/check_form.js"></script>
<script type="text/javascript" src="../../../../js/diyUpload/webuploader.html5only.min.js"></script>
<script type="text/javascript" src="../../../../js/diyUpload/diyUpload.js"></script>
<style>
/**/

	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
#box{width:840px; min-height:200px; background:#FF9}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit">其他收入修改&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="delete_baoxiao.php?baoxiao_id=<?php echo (isset($_smarty_tpl->getVariable('data')->value['baoxiao_id']) ? $_smarty_tpl->getVariable('data')->value['baoxiao_id'] : null);?>
">删除此单</a></div>  
  <form method="post" action="update_baoxiao_a.php" onsubmit="return other_check(this)" name="form1" enctype="multipart/form-data">
  <div class="form2">

  		<dl class="lineD">
	      <dt>报销人:</dt>
	      <dd>
	        <select name="baoxiao_emp" >
	        	<option value="0" <?php if ((isset($_smarty_tpl->getVariable('data')->value['baoxiao_emp']) ? $_smarty_tpl->getVariable('data')->value['baoxiao_emp'] : null)==0){?>selected<?php }?>>请选择</option>
			<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('emplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
				<option <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['emp_id']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_id'] : null)==(isset($_smarty_tpl->getVariable('data')->value['baoxiao_emp']) ? $_smarty_tpl->getVariable('data')->value['baoxiao_emp'] : null)){?>selected<?php }?> value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_id']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_name']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_name'] : null);?>

				</option>	
			<?php }} ?>
			</select>
		  </dd>
	    </dl>


	    <dl class="lineD">
	      <dt>指定审核人:</dt>
	      <dd>
	        <select name="baoxiao_auditor" >
	        	<option value="0" <?php if ((isset($_smarty_tpl->getVariable('data')->value['baoxiao_auditor']) ? $_smarty_tpl->getVariable('data')->value['baoxiao_auditor'] : null)==0){?>selected<?php }?>>请选择</option>
			<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('emplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
				<option <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['emp_id']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_id'] : null)==(isset($_smarty_tpl->getVariable('data')->value['baoxiao_auditor']) ? $_smarty_tpl->getVariable('data')->value['baoxiao_auditor'] : null)){?>selected<?php }?> value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_id']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_name']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_name'] : null);?>

				</option>	
			<?php }} ?>
			</select>
		  </dd>
	    </dl>


	  	<dl class="lineD">
		  <dt><span class="redstar">*</span>报销内容:</dt>
		  <dd><textarea name="baoxiao_content" id="baoxiao_content" cols="90" rows="8" ><?php echo (isset($_smarty_tpl->getVariable('data')->value['baoxiao_content']) ? $_smarty_tpl->getVariable('data')->value['baoxiao_content'] : null);?>
</textarea></dd>
		</dl>




	  	<dl class="lineD">
		  <dt><span class="redstar">*</span>报销金额:</dt>
		  <dd><input type="text" name="baoxiao_money" id="baoxiao_money" size="10" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['baoxiao_money']) ? $_smarty_tpl->getVariable('data')->value['baoxiao_money'] : null);?>
"=/></dd>
		</dl>



		<dl class="lineD">
		  <dt>费用类型：</dt>
		  <dd>
		  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('typeliat')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
		  	
		  <input type="radio" name="baoxiao_type" id="baoxiao_type"  value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['typename']) ? $_smarty_tpl->tpl_vars['rows']->value['typename'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('data')->value['baoxiao_type']) ? $_smarty_tpl->getVariable('data')->value['baoxiao_type'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['typename']) ? $_smarty_tpl->tpl_vars['rows']->value['typename'] : null)){?>checked<?php }?> /><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['typename']) ? $_smarty_tpl->tpl_vars['rows']->value['typename'] : null);?>
&nbsp;&nbsp;
		  <?php }} ?>
		  </dd>



		</dl>
		<dl class="lineD">
	      <dt>选择店铺：</dt>
	      <dd>
	        <select name="shop_id" >
	        	<option value="0" selected>请选择</option>
			<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shoplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
				<option <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null)==(isset($_smarty_tpl->getVariable('data')->value['shop_id']) ? $_smarty_tpl->getVariable('data')->value['shop_id'] : null)){?>selected<?php }?> value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>

				</option>	
			<?php }} ?>
			</select>
		  </dd>
	    </dl>
	   
	   <dl class="lineD">
		  <dt><span class="redstar">*</span>报销备注:</dt>
		  <dd><textarea name="baoxiao_remarks" id="baoxiao_remarks" cols="90" rows="8" ><?php echo (isset($_smarty_tpl->getVariable('data')->value['baoxiao_remarks']) ? $_smarty_tpl->getVariable('data')->value['baoxiao_remarks'] : null);?>
</textarea></dd>
		</dl>

		
		
		
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" /><b> 注：<span class="red">*</span>为必填项</b>
    </div>
     <input type="hidden" name="baoxiao_id" id="aid" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['baoxiao_id']) ? $_smarty_tpl->getVariable('data')->value['baoxiao_id'] : null);?>
" />
     <input type="hidden" name="baoxiao_code" id="baoxiao_code" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['baoxiao_code']) ? $_smarty_tpl->getVariable('data')->value['baoxiao_code'] : null);?>
" />
  </div>
  </form>
</div>

</body>
</html>