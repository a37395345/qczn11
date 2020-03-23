<?php /* Smarty version Smarty-3.0.4, created on 2019-11-11 08:47:23
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/base/create.html" */ ?>
<?php /*%%SmartyHeaderCode:94805dc8af9bdf25d7-61032488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85ce5955087717c747b680280b13a3ed45443ff3' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/base/create.html',
      1 => 1572231700,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94805dc8af9bdf25d7-61032488',
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
<link href="../../../../css/box.css" rel="stylesheet" type="text/css" />
<link id="skin" rel="stylesheet" href="../../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" />
<script type="text/javascript" src="../../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<script type="text/javascript" src="../../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../../js/check_form.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
    
    
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit">编辑<?php echo $_smarty_tpl->getVariable('PAGETITLE')->value;?>
</div>
  
  <form method="post" action="insert.php" enctype="multipart/form-data" onsubmit="return base_check(this)" name="form1">
  <div class="form2">
	<?php if ($_smarty_tpl->getVariable('tasktype')->value=='client'){?>
	  <dl class="lineD">
    	<dt><span class="redstar">*</span>公司名称：</dt>
    	<dd><input type="text" name="client_name" id="client_name" size="30" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['client_name']) ? $_smarty_tpl->getVariable('list')->value['client_name'] : null);?>
" /></dd>
	  </dl>
	  <?php if ($_smarty_tpl->getVariable('task')->value=='insert'){?>
	  <dl class="lineD">
    	<dt><span class="redstar">*</span>业绩归属业务员：</dt>
    	<dd><select id="client_salesman" name="client_salesman" >
		<option value="0">请选择</option>
		<?php  $_smarty_tpl->tpl_vars['row3'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('ywy_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row3']->key => $_smarty_tpl->tpl_vars['row3']->value){
?>
    	<option value="<?php echo (isset($_smarty_tpl->tpl_vars['row3']->value['emp_id']) ? $_smarty_tpl->tpl_vars['row3']->value['emp_id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['row3']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row3']->value['emp_name'] : null);?>
</option>
    	<?php }} ?>
		</select></dd>
	  </dl>
	  <dl class="lineD">
    	<dt><span class="redstar">*</span>服务归属门店：</dt>
    	<dd><select name="client_shopid" id="client_shopid" >
		<option value="0">请选择</option>
		<?php  $_smarty_tpl->tpl_vars['row3'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shop_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row3']->key => $_smarty_tpl->tpl_vars['row3']->value){
?>
    	<option value="<?php echo (isset($_smarty_tpl->tpl_vars['row3']->value['shop_id']) ? $_smarty_tpl->tpl_vars['row3']->value['shop_id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['row3']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row3']->value['shop_name'] : null);?>
</option>
    	<?php }} ?>
		</select></dd>
	  </dl>
	  <?php }?>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>主联系人：</dt>
	    <dd><input type="text" name="client_Mlinker" id="client_Mlinker" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['client_Mlinker']) ? $_smarty_tpl->getVariable('list')->value['client_Mlinker'] : null);?>
" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>主联系人手机：</dt>
	    <dd><input type="text" name="client_Mphone" id="client_Mphone" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['client_Mphone']) ? $_smarty_tpl->getVariable('list')->value['client_Mphone'] : null);?>
" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>主联系人职位：</dt>
	    <dd><input type="text" name="client_Mpost" id="client_Mpost" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['client_Mpost']) ? $_smarty_tpl->getVariable('list')->value['client_Mpost'] : null);?>
"/></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>主联系人备注：</dt>
	    <dd><textarea name="client_Mremark" id="client_Mremark" cols="40" rows="5"><?php echo (isset($_smarty_tpl->getVariable('list')->value['client_Mremark']) ? $_smarty_tpl->getVariable('list')->value['client_Mremark'] : null);?>
</textarea></dd>
	  </dl>
	  <dl class="lineD">
	  <dt>所属分类</dt>
	  <dd>
	  	
	
	
        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('type_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
          	<label><input name="client_typeid[]" type="checkbox"  
          		 value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['checked']) ? $_smarty_tpl->tpl_vars['rows']->value['checked'] : null);?>
 /><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['name']) ? $_smarty_tpl->tpl_vars['rows']->value['name'] : null);?>
 </label> 
        <?php }} ?>
	  </dd>
	  </dl>
	  <dl class="lineD">
	    <dt>营业执照：</dt>
	    <dd><input type="text" name="client_license" id="client_license" size="26" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['client_license']) ? $_smarty_tpl->getVariable('list')->value['client_license'] : null);?>
" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>税号：</dt>
	    <dd><input type="text" name="client_tariff" id="client_tariff" size="26" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['client_tariff']) ? $_smarty_tpl->getVariable('list')->value['client_tariff'] : null);?>
" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>开户银行：</dt>
	    <dd><input type="text" name="client_bank" id="client_bank" size="26" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['client_bank']) ? $_smarty_tpl->getVariable('list')->value['client_bank'] : null);?>
" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>账号：</dt>
	    <dd><input type="text" name="client_account" id="client_account" size="26" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['client_account']) ? $_smarty_tpl->getVariable('list')->value['client_account'] : null);?>
"/></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>电话：</dt>
	    <dd><input type="text" name="client_tel" id="client_tel" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['client_tel']) ? $_smarty_tpl->getVariable('list')->value['client_tel'] : null);?>
"  /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>传真：</dt>
	    <dd><input type="text" name="client_fax" id="client_fax" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['client_fax']) ? $_smarty_tpl->getVariable('list')->value['client_fax'] : null);?>
" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>邮箱：</dt>
	    <dd><input type="text" name="client_mail" id="client_mail" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['client_mail']) ? $_smarty_tpl->getVariable('list')->value['client_mail'] : null);?>
" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>地址：</dt>
	    <dd><input type="text" name="client_add" id="client_add" size="50" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['client_add']) ? $_smarty_tpl->getVariable('list')->value['client_add'] : null);?>
" /></dd>
	  </dl>
      <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['client_id']) ? $_smarty_tpl->getVariable('list')->value['client_id'] : null);?>
" />
    <?php }elseif($_smarty_tpl->getVariable('tasktype')->value=='brother'){?>
      <dl class="lineD">
	    <dt><span class="redstar">*</span>公司名称：</dt>
	    <dd><input type="text" name="bro_name" id="bro_name" size="30" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['bro_name']) ? $_smarty_tpl->getVariable('list')->value['bro_name'] : null);?>
" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>联系人：</dt>
	    <dd><input type="text" name="bro_linker" id="bro_linker" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['bro_linker']) ? $_smarty_tpl->getVariable('list')->value['bro_linker'] : null);?>
" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>联系人手机：</dt>
	    <dd><input type="text" name="bro_phone" id="bro_phone" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['bro_phone']) ? $_smarty_tpl->getVariable('list')->value['bro_phone'] : null);?>
"/></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>联系人职位：</dt>
	    <dd><input type="text" name="bro_post" id="bro_post" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['bro_post']) ? $_smarty_tpl->getVariable('list')->value['bro_post'] : null);?>
"/></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>联系人身份证：</dt>
	    <dd><input type="text" name="bro_linkerNum" id="bro_linkerNum" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['bro_linkerNum']) ? $_smarty_tpl->getVariable('list')->value['bro_linkerNum'] : null);?>
"/></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>联系人备注：</dt>
	    <dd><textarea name="bro_remark" id="bro_remark" cols="40" rows="5"><?php echo (isset($_smarty_tpl->getVariable('list')->value['bro_remark']) ? $_smarty_tpl->getVariable('list')->value['bro_remark'] : null);?>
</textarea></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>营业执照：</dt>
	    <dd><input type="text" name="bro_license" id="bro_license" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['bro_license']) ? $_smarty_tpl->getVariable('list')->value['bro_license'] : null);?>
" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>组织机构代码证：</dt>
	    <dd><input type="text" name="bro_orgCode" id="bro_orgCode" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['bro_orgCode']) ? $_smarty_tpl->getVariable('list')->value['bro_orgCode'] : null);?>
" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>税号：</dt>
	    <dd><input type="text" name="bro_tariff" id="bro_tariff" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['bro_tariff']) ? $_smarty_tpl->getVariable('list')->value['bro_tariff'] : null);?>
" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>开户银行：</dt>
	    <dd><input type="text" name="bro_bank" id="bro_bank" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['bro_bank']) ? $_smarty_tpl->getVariable('list')->value['bro_bank'] : null);?>
" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>账号：</dt>
	    <dd><input type="text" name="bro_account" id="bro_account" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['bro_account']) ? $_smarty_tpl->getVariable('list')->value['bro_account'] : null);?>
"/></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>电话：</dt>
	    <dd><input type="text" name="bro_tel" id="bro_tel" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['bro_tel']) ? $_smarty_tpl->getVariable('list')->value['bro_tel'] : null);?>
" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>传真：</dt>
	    <dd><input type="text" name="bro_fax" id="bro_fax" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['bro_fax']) ? $_smarty_tpl->getVariable('list')->value['bro_fax'] : null);?>
" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>邮箱：</dt>
	    <dd><input type="text" name="bro_mail" id="bro_mail" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['bro_mail']) ? $_smarty_tpl->getVariable('list')->value['bro_mail'] : null);?>
" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>地址：</dt>
	    <dd><input type="text" name="bro_add" id="bro_add" size="30" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['bro_add']) ? $_smarty_tpl->getVariable('list')->value['bro_add'] : null);?>
" /></dd>
	  </dl>
	  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['bro_id']) ? $_smarty_tpl->getVariable('list')->value['bro_id'] : null);?>
" />
	<?php }elseif($_smarty_tpl->getVariable('tasktype')->value=='charge'){?>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>项目名称：</dt>
	    <dd><input type="text" name="charge_name" id="charge_name" size="26" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['charge_name']) ? $_smarty_tpl->getVariable('list')->value['charge_name'] : null);?>
" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>默认值：</dt>
	    <dd><input type="text" name="charge_default" id="charge_default" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['charge_default']) ? $_smarty_tpl->getVariable('list')->value['charge_default'] : null);?>
" /></dd>
	  </dl>
	  <dl class="lineD">
          <dt>适用的业务品种：</dt>
          <dd>
              <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('itemlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
              <input type="checkbox" name="target_id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['item_paicheType']) ? $_smarty_tpl->tpl_vars['rows']->value['item_paicheType'] : null);?>
" id="target_id" class="subnavi" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['checked']) ? $_smarty_tpl->tpl_vars['rows']->value['checked'] : null)==1){?>checked<?php }?> /><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['item_name']) ? $_smarty_tpl->tpl_vars['rows']->value['item_name'] : null);?>

              <?php }} ?>
          </dd>
      </dl>
      <dl class="lineD">
          <dt>驾驶员是否提成：</dt>
          <dd>
              <input type="radio" name="charge_provision" value="1" id="charge_provision" <?php if ((isset($_smarty_tpl->getVariable('list')->value['charge_provision']) ? $_smarty_tpl->getVariable('list')->value['charge_provision'] : null)==1){?>checked<?php }?> />是
              <input type="radio" name="charge_provision" value="0" id="charge_provision" <?php if ((isset($_smarty_tpl->getVariable('list')->value['charge_provision']) ? $_smarty_tpl->getVariable('list')->value['charge_provision'] : null)==0){?>checked<?php }?> />否
          </dd>
      </dl>
	  <dl class="lineD">
	    <dt>驾驶员提成率：</dt>
	    <dd><input type="text" name="charge_provision_fee" id="charge_provision_fee" size="12" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['charge_provision_fee']) ? $_smarty_tpl->getVariable('list')->value['charge_provision_fee'] : null);?>
"/></dd>
	  </dl>
	  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['charge_id']) ? $_smarty_tpl->getVariable('list')->value['charge_id'] : null);?>
" />
	
    <?php }elseif($_smarty_tpl->getVariable('tasktype')->value=='payment'){?>
      <dl class="lineD">
	    <dt><span class="redstar">*</span>名称：</dt>
	    <dd><input type="text" name="payment_name" id="payment_name" size="26" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['payment_name']) ? $_smarty_tpl->getVariable('list')->value['payment_name'] : null);?>
" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>费率：</dt>
	    <dd><input type="text" name="payment_fee" id="payment_fee" size="12" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['payment_fee']) ? $_smarty_tpl->getVariable('list')->value['payment_fee'] : null);?>
"/></dd>
	  </dl>
	  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['payment_id']) ? $_smarty_tpl->getVariable('list')->value['payment_id'] : null);?>
" />
    <?php }elseif($_smarty_tpl->getVariable('tasktype')->value=='bank'){?>
      <dl class="lineD">
	    <dt><span class="redstar">*</span>开户银行：</dt>
	    <dd><input type="text" name="bank_name" id="bank_name" size="26" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['bank_name']) ? $_smarty_tpl->getVariable('list')->value['bank_name'] : null);?>
" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>账号：</dt>
	    <dd><input type="text" name="bank_no" id="bank_no" size="26" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['bank_no']) ? $_smarty_tpl->getVariable('list')->value['bank_no'] : null);?>
"/></dd>
	  </dl>
	  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['bank_id']) ? $_smarty_tpl->getVariable('list')->value['bank_id'] : null);?>
" />
	<?php }elseif($_smarty_tpl->getVariable('tasktype')->value=='item'){?>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>条款名称：</dt>
	    <dd><input type="text" name="item_name" id="item_name" size="26" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['item_name']) ? $_smarty_tpl->getVariable('list')->value['item_name'] : null);?>
" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>对应的费用名称：</dt>
	    <dd><input type="text" name="item_costname" id="item_costname" size="26" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['item_costname']) ? $_smarty_tpl->getVariable('list')->value['item_costname'] : null);?>
" /></dd>
	  </dl>
	  <dl class="lineD">
          <dt>适用的业务品种：</dt>
          <dd>
              <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('itemlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
              <input type="checkbox" name="target_id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['item_paicheType']) ? $_smarty_tpl->tpl_vars['rows']->value['item_paicheType'] : null);?>
" id="target_id" class="subnavi" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['checked']) ? $_smarty_tpl->tpl_vars['rows']->value['checked'] : null)==1){?>checked<?php }?> /><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['item_name']) ? $_smarty_tpl->tpl_vars['rows']->value['item_name'] : null);?>

              <?php }} ?>
          </dd>
      </dl>
      <dl class="lineD">
          <dt>展示类型：</dt>
          <dd>
              <input type="radio" name="item_type" value="text" id="item_type" <?php if ((isset($_smarty_tpl->getVariable('list')->value['item_type']) ? $_smarty_tpl->getVariable('list')->value['item_type'] : null)=='text'){?>checked<?php }?> />文本
              <input type="radio" name="item_type" value="radio" id="item_type" <?php if ((isset($_smarty_tpl->getVariable('list')->value['item_type']) ? $_smarty_tpl->getVariable('list')->value['item_type'] : null)=='radio'){?>checked<?php }?> />单选
          </dd>
      </dl>
      <dl class="lineD">
          <dt>选择项(仅对单选有效)：</dt>
          <dd>
              <input type="text" name="item_options" id="item_options" size="46" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['item_options']) ? $_smarty_tpl->getVariable('list')->value['item_options'] : null);?>
" />(多个选择项之间用,隔开)
          </dd>
      </dl>
      <dl class="lineD">
          <dt>是否参与计算：</dt>
          <dd>
              <input type="radio" name="item_calcu" value="0" id="item_calcu" <?php if ((isset($_smarty_tpl->getVariable('list')->value['item_calcu']) ? $_smarty_tpl->getVariable('list')->value['item_calcu'] : null)==0){?>checked<?php }?> />否
              <input type="radio" name="item_calcu" value="1" id="item_calcu" <?php if ((isset($_smarty_tpl->getVariable('list')->value['item_calcu']) ? $_smarty_tpl->getVariable('list')->value['item_calcu'] : null)==1){?>checked<?php }?> />是
          </dd>
      </dl>
      <dl class="lineD">
          <dt>计算方式(仅对参与计算的有效)：</dt>
          <dd>
              <input type="radio" name="item_caltype" value="0" id="item_caltype" <?php if ((isset($_smarty_tpl->getVariable('list')->value['item_caltype']) ? $_smarty_tpl->getVariable('list')->value['item_caltype'] : null)==0){?>checked<?php }?> />固定值
              <input type="radio" name="item_caltype" value="1" id="item_caltype" <?php if ((isset($_smarty_tpl->getVariable('list')->value['item_caltype']) ? $_smarty_tpl->getVariable('list')->value['item_caltype'] : null)==1){?>checked<?php }?> />按计量单位
          </dd>
      </dl>
      <dl class="lineD">
          <dt>计量单位：</dt>
          <dd>
              <input type="text" name="item_unit" id="item_unit" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['item_unit']) ? $_smarty_tpl->getVariable('list')->value['item_unit'] : null);?>
" />
          </dd>
      </dl>
      <dl class="lineD">
          <dt>排序：</dt>
          <dd>
              <input type="text" name="item_order" id="item_order" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['item_order']) ? $_smarty_tpl->getVariable('list')->value['item_order'] : null);?>
" />
          </dd>
      </dl>
	  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['item_id']) ? $_smarty_tpl->getVariable('list')->value['item_id'] : null);?>
" />
	<?php }?>
	
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" /><b> 注：<span class="red">*</span>为必填项</b>
    </div>
  </div>
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  <input type="hidden" name="tasktype" value="<?php echo $_smarty_tpl->getVariable('tasktype')->value;?>
" /></form>
</div>
<script type="text/javascript">
	function addlinker()//添加企业信息时使用的添加联系人
	{
		demo_iframe('add.php','增加联系人',650,380,'login_js');
	}
</script>
</body>
</html>