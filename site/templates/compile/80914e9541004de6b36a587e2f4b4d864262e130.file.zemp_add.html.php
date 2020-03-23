<?php /* Smarty version Smarty-3.0.4, created on 2019-09-06 17:51:16
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/renshi/zemp_add.html" */ ?>
<?php /*%%SmartyHeaderCode:79545d722c140caab2-02825770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80914e9541004de6b36a587e2f4b4d864262e130' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/renshi/zemp_add.html',
      1 => 1567756393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79545d722c140caab2-02825770',
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
<link href="../../../css/box.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/box.js"></script>
<script type="text/javascript" src="../../../js/date_select.js"></script>
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
  <div class="page_tit"><?php if ($_smarty_tpl->getVariable('op')->value=='update'){?>编辑员工资料<?php }else{ ?>添加员工资料<?php }?></div>
  <form method="post" action="zemp_insert.php" onsubmit="return check(this);" name="form1" enctype="multipart/form-data">
  <div class="form2">
  <dl class="lineD">
    <dt><span class="redstar">*</span>姓名：</dt>
    <dd><input type="text" name="emp_name" id="emp_name" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_name']) ? $_smarty_tpl->getVariable('employee')->value['emp_name'] : null);?>
" /></dd>
  </dl>
  <dl class="lineD">
    <dt><span class="redstar">*</span>性别：</dt>
    <dd>
	<?php if ($_smarty_tpl->getVariable('op')->value=="update"){?>
	<input type="radio" name="emp_sex" id="emp_sex" <?php if ((isset($_smarty_tpl->getVariable('employee')->value['emp_sex']) ? $_smarty_tpl->getVariable('employee')->value['emp_sex'] : null)=='男'){?>checked<?php }else{ ?><?php }?> value="男" /> 男　<input type="radio" name="emp_sex" id="emp_sex" <?php if ((isset($_smarty_tpl->getVariable('employee')->value['emp_sex']) ? $_smarty_tpl->getVariable('employee')->value['emp_sex'] : null)=='女'){?>checked<?php }else{ ?><?php }?> value="女" /> 女
    <?php }else{ ?>
    <input type="radio" name="emp_sex" id="emp_sex" value="男" checked /> 男　
    <input type="radio" name="emp_sex" id="emp_sex" value="女" /> 女
	<?php }?>
    </dd>
    
  </dl>
  <dl class="lineD">
    <dt><span class="redstar">*</span>身份证号：</dt>
    <dd><input type="text" name="emp_num" id="emp_num" size="26"  value="<?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_num']) ? $_smarty_tpl->getVariable('employee')->value['emp_num'] : null);?>
"/></dd>
  </dl>

  <dl class="lineD">
    <dt><span class="redstar">*</span>手机号：</dt>
    <dd><input type="text" name="emp_phone" id="emp_phone" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_phone']) ? $_smarty_tpl->getVariable('employee')->value['emp_phone'] : null);?>
"/></dd>
  </dl>
  <dl class="lineD">
    <dt><span class="redstar">*</span>工作电话：</dt>
    <dd><input type="text" name="emp_workTel" id="emp_workTel" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_workTel']) ? $_smarty_tpl->getVariable('employee')->value['emp_workTel'] : null);?>
"/></dd>
  </dl>
  <dl class="lineD">
    <dt>家庭电话：</dt>
    <dd><input type="text" name="emp_homeTel" id="emp_homeTel" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_homeTel']) ? $_smarty_tpl->getVariable('employee')->value['emp_homeTel'] : null);?>
"/></dd>
  </dl>
  <dl class="lineD">
    <dt>家庭地址：</dt>
    <dd><input type="text" name="emp_homeAdd" id="emp_homeAdd" size="26" value="<?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_homeAdd']) ? $_smarty_tpl->getVariable('employee')->value['emp_homeAdd'] : null);?>
" /></dd>
  </dl>


  <dl class="lineD">
    <dt><span class="redstar">*</span>工资结构：</dt>
    <dd><select name="emp_zhiweiid" id="emp_zhiweiid">
      <option value="0" <?php if ((isset($_smarty_tpl->getVariable('employee')->value['emp_zhiweiid']) ? $_smarty_tpl->getVariable('employee')->value['emp_zhiweiid'] : null)==0){?>selected<?php }?>>请选择</option>
        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list_zhiwei')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
          <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('employee')->value['emp_zhiweiid']) ? $_smarty_tpl->getVariable('employee')->value['emp_zhiweiid'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_name']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_name'] : null);?>
</option>
        <?php }} ?>
        </select></dd>
  </dl>


  <dl class="lineD">
    <dt>安全奖励：</dt>
    <dd>
      <label><input name="zemp_anquan" type="radio" value="1" <?php if ((isset($_smarty_tpl->getVariable('employee')->value['zemp_anquan']) ? $_smarty_tpl->getVariable('employee')->value['zemp_anquan'] : null)==1){?>checked<?php }?>/>有 </label> 
      <label><input name="zemp_anquan" type="radio" value="0" <?php if ((isset($_smarty_tpl->getVariable('employee')->value['zemp_anquan']) ? $_smarty_tpl->getVariable('employee')->value['zemp_anquan'] : null)==0){?>checked<?php }?>/>没有 </label> 
    </dd>
  </dl>
  <dl class="lineD">
    <dt>额外补贴</dt>
    <dd><input type="text" name="zemp_butie" id="zemp_butie" size="26" value="<?php echo (isset($_smarty_tpl->getVariable('employee')->value['zemp_butie']) ? $_smarty_tpl->getVariable('employee')->value['zemp_butie'] : null);?>
" />元/月</dd>
  </dl>
  
  <dl class="lineD">
    <dt><span class="redstar">*</span>职位：</dt>
    <dd><select name="emp_post" id="emp_post">
        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list_level')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
          <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('employee')->value['emp_post']) ? $_smarty_tpl->getVariable('employee')->value['emp_post'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>
</option>
        <?php }} ?>
        </select></dd>
  </dl>
  <dl class="lineD">
    <dt>部门：</dt>
    <dd><select name="emp_shopid" id="emp_shopid">
        <option value="0" >请选择部门</option>
        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list_shop')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
        	<option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('employee')->value['emp_shopid']) ? $_smarty_tpl->getVariable('employee')->value['emp_shopid'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>
</option>
        <?php }} ?>
        </select></dd>
  </dl>
  <dl class="lineD">
    <dt>驾照类型：</dt>
    <dd><input type="text" name="emp_driverlicense" id="emp_driverlicense" size="10"  value="<?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_driverlicense']) ? $_smarty_tpl->getVariable('employee')->value['emp_driverlicense'] : null);?>
"/><span class="redstar" style="margin-left: 5px;font-size: 9px;">注：只针对司机职位有效</span></dd>
  </dl>
  <dl class="lineD">
    <dt>介绍：</dt>
    <dd><textarea name="emp_introduce" id="emp_introduce" cols="70" rows="3"><?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_introduce']) ? $_smarty_tpl->getVariable('employee')->value['emp_introduce'] : null);?>
</textarea></dd>
  </dl>
 
  <dl class="lineD">
    <dt><span class="redstar">*</span>合同开始日期：</dt>
    <dd><input type="text" name="emp_pactStartDate" id="emp_pactStartDate" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_pactStartDate']) ? $_smarty_tpl->getVariable('employee')->value['emp_pactStartDate'] : null);?>
" onClick="calendar.show(this);" readonly="readonly" /></dd>
  </dl>
  <dl class="lineD">
    <dt><span class="redstar">*</span>合同到期日期：</dt>
    <dd><input type="text" name="emp_pactEndDate" id="emp_pactEndDate" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_pactEndDate']) ? $_smarty_tpl->getVariable('employee')->value['emp_pactEndDate'] : null);?>
" onClick="calendar.show(this);" readonly="readonly" /></dd>
  </dl>
  
  <dl class="lineD">
      <dt>首图照片：</dt>
      <dd><input type="file" name="images" value=""/><span class="redstar">注：图片像素120*160，大小控制在50k以内</span>
        <?php if ((isset($_smarty_tpl->getVariable('employee')->value['emp_image']) ? $_smarty_tpl->getVariable('employee')->value['emp_image'] : null)){?><br /><img src="../../../thumb/<?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_image']) ? $_smarty_tpl->getVariable('employee')->value['emp_image'] : null);?>
" width="120" height="160" /><?php }?>
        <input type="hidden" name="oldimages" value="<?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_image']) ? $_smarty_tpl->getVariable('employee')->value['emp_image'] : null);?>
"/>
      </dd>
  </dl>
  <dl class="lineD">
    <dt>&nbsp;</dt>
    <dd><input type="submit" id="submit" value="提 交" class="btn_b"/>　<b>注：<span class="red">*</span>为必填项</b></dd>
  </dl>
</div>

  <input type="hidden" name="id" value="<?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_id']) ? $_smarty_tpl->getVariable('employee')->value['emp_id'] : null);?>
" />
  <input type="hidden" name="op" value="<?php echo $_smarty_tpl->getVariable('op')->value;?>
" />
  
  
</form>
</div>

<script type="text/javascript">

	function check(_form){
		if(textTrim(_form.emp_name.value)==""){
			alert("姓名不能为空，请必须填写");
			_form.emp_name.focus();
			return false;
		}
		if(textTrim(_form.emp_num.value)==""){
			alert("身份证号不能为空，请必须填写");
			_form.emp_num.focus();
			return false;
		}
		if(textTrim(_form.emp_phone.value)==""){
			alert("手机号不能为空，请必须填写");
			_form.emp_phone.focus();
			return false;
		}
		
		if(textTrim(_form.emp_pactStartDate.value)==""){
			alert("合同开始日期不能为空，请必须填写");
			_form.emp_pactStartDate.focus();
			return false;
		}
		if(textTrim(_form.emp_pactEndDate.value)==""){
			alert("合同到期日期不能为空，请必须填写");
			_form.emp_pactEndDate.focus();
			return false;
		}
		
		return true;
	}
	
</script>
</body>
</html>