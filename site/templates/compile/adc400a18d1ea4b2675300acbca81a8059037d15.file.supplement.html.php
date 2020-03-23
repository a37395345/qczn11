<?php /* Smarty version Smarty-3.0.4, created on 2016-10-12 17:03:53
         compiled from "D:\web\site\templates\elsker\operator/business/supplement.html" */ ?>
<?php /*%%SmartyHeaderCode:883957fdfc7995eaa0-08239873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adc400a18d1ea4b2675300acbca81a8059037d15' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/business/supplement.html',
      1 => 1476262944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '883957fdfc7995eaa0-08239873',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>管理后台</title>
<link href="../../../css/style.css" rel="stylesheet" type="text/css">
<link href="../../../css/box.css" rel="stylesheet" type="text/css" />
<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>

<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>

    
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style>

</head>
<body>
<div class="so_main">
  <div class="page_tit">订单补录</div>
  <form method="post" action="supplement.php" onsubmit="return business_check(this)" name="form1">
  <input type="hidden" name="paiche_contractNum" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_contractNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_contractNum'] : null);?>
" />
  <div class="form2">
	<dl class="lineD">
	          <dt>租赁类型：</dt>
	          <dd><input type="radio" name="b_id" value="1" <?php if ($_smarty_tpl->getVariable('busitype')->value=="1"){?>checked<?php }?> />临时自驾&nbsp;
	          <input type="radio" name="b_id" value="2" <?php if ($_smarty_tpl->getVariable('busitype')->value=="2"){?>checked<?php }?> />临时带驾
	          </dd>
	</dl>	
	<dl class="lineD">
	    <dt>用车类型：</dt>
	    <dd>
	    <input type="radio" name="paiche_busitype" value="1" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_busitype']) ? $_smarty_tpl->getVariable('list')->value['paiche_busitype'] : null)=="1"){?>checked<?php }?> />前台散客
	    &nbsp;&nbsp;<input type="radio" name="paiche_busitype" value="2" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_busitype']) ? $_smarty_tpl->getVariable('list')->value['paiche_busitype'] : null)=="2"){?>checked<?php }?> />长期合作企业客户
	    &nbsp;&nbsp; <input type="radio" name="paiche_busitype" value="3" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_busitype']) ? $_smarty_tpl->getVariable('list')->value['paiche_busitype'] : null)=="3"){?>checked<?php }?> />调车公司
	    </dd>
	</dl>
	<dl class="lineD" id="busishow_2" style="display:none">
      <dt><span class="redstar">*</span>长期合作企业客户：</dt>
      <dd>
        <select name="paiche_name2" id="paiche_name2">
	                  <option value="0">请选择</option>
	                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('clientlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_id']) ? $_smarty_tpl->tpl_vars['rows']->value['client_id'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paicheCom']) ? $_smarty_tpl->getVariable('list')->value['paicheCom'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['client_id']) ? $_smarty_tpl->tpl_vars['rows']->value['client_id'] : null)){?>selected<?php }?> at="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_Mlinker']) ? $_smarty_tpl->tpl_vars['rows']->value['client_Mlinker'] : null);?>
#<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_Mphone']) ? $_smarty_tpl->tpl_vars['rows']->value['client_Mphone'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_name']) ? $_smarty_tpl->tpl_vars['rows']->value['client_name'] : null);?>
</option>
	                  <?php }} ?>
	    </select><input type="text" id="search_key" size="4" placeholder="快速检索" />
	  </dd>
    </dl>
    <dl class="lineD" id="busishow_3" style="display:none">
      <dt><span class="redstar">*</span>调车公司：</dt>
      <dd><select name="paiche_brother" id="paiche_brother" >
	                  <option value="0">请选择</option>
	                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('brotherlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bro_id']) ? $_smarty_tpl->tpl_vars['rows']->value['bro_id'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_brother']) ? $_smarty_tpl->getVariable('list')->value['paiche_brother'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['bro_id']) ? $_smarty_tpl->tpl_vars['rows']->value['bro_id'] : null)){?>selected<?php }?> at="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bro_linker']) ? $_smarty_tpl->tpl_vars['rows']->value['bro_linker'] : null);?>
#<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bro_phone']) ? $_smarty_tpl->tpl_vars['rows']->value['bro_phone'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bro_name']) ? $_smarty_tpl->tpl_vars['rows']->value['bro_name'] : null);?>
</option>
	                  <?php }} ?>
	              </select>
	              
	  </dd>
    </dl>
    <dl class="lineD">
      <dt><span class="redstar">*</span>联系人：</dt>
      <dd>
        <input type="text" name="paiche_linker" id="paiche_linker" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linker']) ? $_smarty_tpl->getVariable('list')->value['paiche_linker'] : null);?>
" />
	  </dd>
    </dl>
    <dl class="lineD">
      <dt><span class="redstar">*</span>联系人手机：</dt>
      <dd>
        <input type="text" name="paiche_linkerPhone" id="paiche_linkerPhone" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerPhone']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerPhone'] : null);?>
"/>
	  </dd>
    </dl>

    <dl class="lineD show1" style="display:block;">
      <dt><span class="redstar">*</span>联系人身份证：</dt>
      <dd>
        <input type="text" name="paiche_linkerNum" id="paiche_linkerNum" size="26"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerNum'] : null);?>
"/>
	  </dd>
    </dl>
    <dl class="lineD show1" style="display:block;">
      <dt>联系人地址：</dt>
      <dd>
        <input type="text" name="paiche_linkerAdd" id="paiche_linkerAdd" size="40"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerAdd']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerAdd'] : null);?>
"/>
	  </dd>
    </dl>
    <dl class="lineD show1" style="display:block;">
	    <dt>担保人：</dt>
	    <dd><input type="text" name="paiche_promier" id="paiche_promier" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promier']) ? $_smarty_tpl->getVariable('list')->value['paiche_promier'] : null);?>
"/></dd>
	</dl>
    <dl class="lineD show1" style="display:block;">
	    <dt>担保人手机：</dt>
	    <dd><input type="text" name="paiche_promierPhone" id="paiche_promierPhone" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promierPhone']) ? $_smarty_tpl->getVariable('list')->value['paiche_promierPhone'] : null);?>
"/></dd>
    </dl>
    <dl class="lineD show1" style="display:block;">
	    <dt>担保人身份证：</dt>
	    <dd><input type="text" name="paiche_promierNum" id="paiche_promierNum" size="26" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promierNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_promierNum'] : null);?>
"/></dd>
    </dl>
    
	<dl class="lineD">
      <dt><span class="redstar">*</span>用车开始时间：</dt>
      <dd>
        <input type="text" name="paiche_startDate" id="paiche_startDate" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate_format']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate_format'] : null);?>
" onClick="calendar.show(this);"  />
        <select name="paiche_startHour" id="paiche_startHour">
            <option value="00" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_startHour']) ? $_smarty_tpl->getVariable('list')->value['paiche_startHour'] : null)=="00"){?> selected <?php }else{ ?><?php }?>>-请选择小时-</option>
	        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('hourlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	            <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['hour']) ? $_smarty_tpl->tpl_vars['rows']->value['hour'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['hour']) ? $_smarty_tpl->tpl_vars['rows']->value['hour'] : null)==(isset($_smarty_tpl->getVariable('list')->value['paiche_startHour']) ? $_smarty_tpl->getVariable('list')->value['paiche_startHour'] : null)){?>selected<?php }else{ ?><?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['hour']) ? $_smarty_tpl->tpl_vars['rows']->value['hour'] : null);?>
点</option>
	        <?php }} ?>
        </select>
        <select name="paiche_startMinute" id="paiche_startMinute">
        	<option value="00" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_startMinute']) ? $_smarty_tpl->getVariable('list')->value['paiche_startMinute'] : null)==''){?> selected <?php }else{ ?><?php }?>>-请选择分钟-</option>
        	<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('minuelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	            <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['minute']) ? $_smarty_tpl->tpl_vars['rows']->value['minute'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['minute']) ? $_smarty_tpl->tpl_vars['rows']->value['minute'] : null)==(isset($_smarty_tpl->getVariable('list')->value['paiche_startMinute']) ? $_smarty_tpl->getVariable('list')->value['paiche_startMinute'] : null)){?>selected<?php }else{ ?><?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['minute']) ? $_smarty_tpl->tpl_vars['rows']->value['minute'] : null);?>
分</option>
	        <?php }} ?>
        </select>
        <input type="hidden" id="p_startDate" name="p_startDate" value="" />
        <input type="hidden" id="p_endDate" name="p_endDate" value="" />
      </dd>
    </dl>
    <dl class="lineD">
      <dt><span class="redstar">*</span>用车结束时间：</dt>
      <dd>
        <input type="text" name="paiche_endDate" id="paiche_endDate" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_endDate_format']) ? $_smarty_tpl->getVariable('list')->value['paiche_endDate_format'] : null);?>
" onClick="calendar.show(this);" />
        <select name="paiche_endHour" id="paiche_endHour">
            <option value="00" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_endHour']) ? $_smarty_tpl->getVariable('list')->value['paiche_endHour'] : null)=="00"){?> selected <?php }else{ ?><?php }?>>-请选择小时-</option>
	        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('hourlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	            <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['hour']) ? $_smarty_tpl->tpl_vars['rows']->value['hour'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['hour']) ? $_smarty_tpl->tpl_vars['rows']->value['hour'] : null)==(isset($_smarty_tpl->getVariable('list')->value['paiche_endHour']) ? $_smarty_tpl->getVariable('list')->value['paiche_endHour'] : null)){?>selected<?php }else{ ?><?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['hour']) ? $_smarty_tpl->tpl_vars['rows']->value['hour'] : null);?>
点</option>
	        <?php }} ?>
        </select>
        <select name="paiche_endMinute" id="paiche_endMinute">
        	<option value="00" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_endMinute']) ? $_smarty_tpl->getVariable('list')->value['paiche_endMinute'] : null)==''){?> selected <?php }else{ ?><?php }?>>-请选择分钟-</option>
        	<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('minuelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	            <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['minute']) ? $_smarty_tpl->tpl_vars['rows']->value['minute'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['minute']) ? $_smarty_tpl->tpl_vars['rows']->value['minute'] : null)==(isset($_smarty_tpl->getVariable('list')->value['paiche_endMinute']) ? $_smarty_tpl->getVariable('list')->value['paiche_endMinute'] : null)){?>selected<?php }else{ ?><?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['minute']) ? $_smarty_tpl->tpl_vars['rows']->value['minute'] : null);?>
分</option>
	        <?php }} ?>
        </select>
        
      </dd>
    </dl>
    <dl class="lineD show2" style="display:none;">
	    <dt>司机每天工作时间：</dt>
	    <dd><input type="text" name="paiche_workTime" id="paiche_workTime" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_workTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_workTime'] : null);?>
"/></dd>
	</dl>
    <dl class="lineD">
	    <dt><span class="redstar">*</span>超时费用：</dt>
    	<dd><input type="text" name="paiche_overTime" id="paiche_overTime" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_overTime'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitTime'] : null)=="Y"){?>readonly<?php }?> />
    不限时间：<input type="checkbox" id="paiche_unlimitTime" name="paiche_unlimitTime" onClick="unlimited(this,'paiche_overTime')" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitTime'] : null)=="Y"){?>checked<?php }?> value="Y" /></dd>
    </dl>
    <dl class="lineD">
	    <dt><span class="redstar">*</span>限制公里数：</dt>
	    <dd><input type="text" name="paiche_limitKm" id="paiche_limitKm" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_limitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_limitKm'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)=="Y"){?>readonly<?php }else{ ?><?php }?>/>&nbsp;
	    超公里费用：<input type="text" name="paiche_overKm" id="paiche_overKm" size="6"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_overKm'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)=="Y"){?>readonly<?php }else{ ?><?php }?> />/公里&nbsp;
	    不限公里<input type="checkbox" id="paiche_unlimitKm" name="paiche_unlimitKm" onClick="unlimited(this,'paiche_limitKm','paiche_overKm')" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)=="Y"){?>checked<?php }else{ ?><?php }?> value="Y" />
	    <div class="showprice" id="price" ></div>
	    </dd>
	</dl>
	<dl class="lineD show2" style="display:none;">
	    <dt>路程：</dt>
	    <dd><input type="radio" name="paiche_route" value="单" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_route']) ? $_smarty_tpl->getVariable('list')->value['paiche_route'] : null)=="单"){?>checked<?php }?> />单程&nbsp;&nbsp;<input type="radio" name="paiche_route" value="双" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_route']) ? $_smarty_tpl->getVariable('list')->value['paiche_route'] : null)=="双"){?>checked<?php }?> />双程</dd>
	</dl>
	<dl class="lineD show2" style="display:none;">
	    <dt>内外：</dt>
	    <dd><input type="radio" name="paiche_scope" value="内" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_scope']) ? $_smarty_tpl->getVariable('list')->value['paiche_scope'] : null)=="内"){?>checked<?php }?> />市内&nbsp;&nbsp;<input type="radio" name="paiche_scope" value="外" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_scope']) ? $_smarty_tpl->getVariable('list')->value['paiche_scope'] : null)=="外"){?>checked<?php }?> />市外</dd>
	</dl>
	<dl class="lineD" id="dlitems">
	    <dt>其他条款约定：</dt>
	    <dd>
	    <div id="divitems" style="width:344px;">
	    <ul>
          <li class="aaa">编号</li><li class="bbb">约定条款</li><li class="aaa">约定结果</li><li class="aaa">删除</li>
        </ul>
	    
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('itemlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
	    <ul id="V<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
">
          <li class="aaa"><input type="hidden" id="Recid" name="Recid[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
<input type="hidden" id="Iid" name="Iid[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
" /></li>
          <li class="bbb"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_name']) ? $_smarty_tpl->tpl_vars['row']->value['item_name'] : null);?>
</li>
          <li class="aaa"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row']->value['conv_result'] : null);?>
<input type="hidden" id="result" name="result[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row']->value['conv_result'] : null);?>
" /></li>
          <li class="aaa"><a href="javascript:delV(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
)"><img src="../../../css/error.gif" /></a><input type="hidden" id="DV<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
" name="DVid[]" value="0" /></li>
        </ul>
        <?php }} ?>
        
	    </div><div style="padding:5px 0 0 276px;"><a href="javascript:select_items();"><img src="../../../css/list.gif" height="15" class="peoplePic" /></a></div>
	    </dd>
	</dl>
	<dl class="lineD show1" style="display:block;">
	    <dt><span class="redstar">*</span>押金：</dt>
	    <dd><input type="hidden" id="Rid" name="Rid[]" value="<?php echo (isset($_smarty_tpl->getVariable('row')->value['id']) ? $_smarty_tpl->getVariable('row')->value['id'] : null);?>
" /><input type="hidden" name="paiche_deposit_id" value="1" />
	    <input type="text" id="paiche_deposit" name="paiche_deposit" value="<?php echo $_smarty_tpl->getVariable('paiche_deposit')->value;?>
" size="6"/></dd>
	</dl>
	<dl class="lineD" >
	    <dt id="showrent"><span class="redstar">*</span>租金：</dt>
	    <dd><input type="hidden" id="Rid" name="Rid[]" value="<?php echo (isset($_smarty_tpl->getVariable('row')->value['id']) ? $_smarty_tpl->getVariable('row')->value['id'] : null);?>
" /><input type="hidden" name="paiche_rent_id" value="2" />
	    <input type="text" id="paiche_rent" name="paiche_rent" value="<?php echo $_smarty_tpl->getVariable('paiche_rent')->value;?>
" size="6"/>
	    <ul id="showpaiche_shunt" style="display:none;">本公司收现：<input type="text" name="paiche_brother_rented" id="paiche_brother_rented" size="6"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rented']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rented'] : null);?>
"/>元</ul>
	    </dd>
	</dl>
    <dl class="lineD">
	    <dt>开车线路：</dt>
	    <dd><textarea name="paiche_line" id="paiche_line" cols="40" rows="5"><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_line']) ? $_smarty_tpl->getVariable('list')->value['paiche_line'] : null);?>
</textarea></dd>
	</dl>
	<dl class="lineD" >
	    <dt><span class="redstar">*</span>车辆：</dt>
	    <dd><input type="text" name="paicheCar" id="paicheCar" size="38" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
-<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_color']) ? $_smarty_tpl->getVariable('list')->value['car_color'] : null);?>
-<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_brand']) ? $_smarty_tpl->getVariable('list')->value['car_brand'] : null);?>
-<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_type']) ? $_smarty_tpl->getVariable('list')->value['car_type'] : null);?>
" />
	         <input type="button" value="清 空" onClick="clearValue('paicheCar','paicheCar2')" />&nbsp;
	         关键字：<input type="text" name="paicheCarKey" id="paicheCarKey" size="10" />
	    <input type="hidden" name="paicheCar2" id="paicheCar2" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paicheCar']) ? $_smarty_tpl->getVariable('list')->value['paicheCar'] : null);?>
" />
	    <a href="javascript:select_car();"><img src="../../../css/car2.gif" height="15" class="peoplePic" /></a>
	    <a href="javascript:select_brother();"><img src="../../../css/car.gif" height="15" class="diao" /></a>
	    <input type="hidden" name="shunt" id="shunt" value="0" />
	    </dd>
    </dl>

	<dl class="lineD" id="shuntCon1" style="display:none;">
        <dt><span class="redstar">*</span>调车公司：</dt>
	    <dd>
		<input type="text" name="shuntCom" id="shuntCom" size="30" value="" />
		<input type="hidden" name="shuntCom2" id="shuntCom2" value="" />
		<ul class="sel" id="comul" onMouseOver="nameIsOut=false" onMouseOut="nameIsOut=true">
		</ul>
	    </dd>
    </dl>
    <dl class="lineD" id="shuntCon2" style="display:none;">
	    <dt><span class="redstar">*</span>司机：</dt>
	    <dd><input type="text" name="shunt_driver" id="shunt_driver" size="12" value="" /></dd>
	</dl>
	<dl class="lineD" id="shuntCon3" style="display:none;">
	    <dt>司机号码：</dt>
	    <dd><input type="text" name="shunt_driverPhone" id="shunt_driverPhone" size="16" value="" /></dd>
	</dl>
	<dl class="lineD" id="shuntCon4" style="display:none;">
	    <dt><span class="redstar">*</span>调车公司报价：</dt>
	    <dd><input type="text" name="shunt_rent" id="shunt_rent" size="8"  value=""/></dd>
	</dl>
	<dl class="lineD" id="shuntCon5" style="display:none;">
	    <dt><span class="redstar">*</span>调车公司收现：</dt>
	    <dd>
	    <input type="text" name="shunt_rented" id="shunt_rented" size="8"  value=""/>   
		</dd>
	</dl>

    <dl class="lineD show2" style="display:none;">
	    <dt>司机：</dt>
	    <dd><input type="text" name="paicheDriver" id="paicheDriver" size="18" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['siji']) ? $_smarty_tpl->getVariable('list')->value['siji'] : null);?>
" />
	    <input type="button" value="清 空" onClick="clearValue('paicheDriver','paicheDriver2')" />&nbsp;
	         关键字：<input type="text" name="paicheDriverKey" id="paicheDriverKey" size="10" />
	    <input type="hidden" name="paicheDriver2" id="paicheDriver2" value="" />
	    <a href="javascript:select_driver();"><img src="../../../css/driver.gif" height="15" class="peoplePic" /></a>
	    </dd>
    </dl>
    
    <dl class="lineD">
		<dt><span class="redstar">*</span>开始公里数：</dt>
		<dd><input type="text" name="settle_startKm" id="settle_startKm" size="18" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_startKm']) ? $_smarty_tpl->getVariable('list')->value['settle_startKm'] : null);?>
"/>公里
		</dd>
	</dl>
	<dl class="lineD">
		<dt><span class="redstar">*</span>结束公里数：</dt>
		<dd><input type="text" name="settle_endKm" id="settle_endKm" size="18" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_endKm']) ? $_smarty_tpl->getVariable('list')->value['settle_endKm'] : null);?>
"/>公里
		</dd>
	</dl>
	<dl class="lineD">
		<dt>共计行驶：</dt>
		<dd><input type="text" name="settle_totalKm" id="settle_totalKm" value="" size="4" onFocus="this.blur()"/>公里&nbsp;&nbsp;结算公里数：<input type="text" name="settle_totalcalKm" id="settle_totalcalKm" value="" size="4" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="redstar" id="showerr" style="display:none;">行驶公里数异常</span></dd>
	</dl>
	<dl class="lineD">
		<dt>超公里数：</dt>
		<dd><input type="text" name="overKm" id="overKm" size="18" onFocus="this.blur()" class="grey noborder" />公里&nbsp;&nbsp;超公里费用：<input type="text" name="overKmMoney" id="overKmMoney" size="8" value="" onFocus="this.blur()" class="grey noborder" />元
		</dd>
	</dl>
	<dl class="lineD">
		<dt>超时：</dt>
		<dd><input type="text" name="settle_overTime" id="settle_overTime" size="18" />小时&nbsp;&nbsp;超时费用：<input type="text" name="overTimeMoney" id="overTimeMoney" size="8" value="" onFocus="this.blur()" class="grey noborder" />元
		</dd>
	</dl>
	<dl class="lineD show2"  style="display:none;">
		<dt>等待时间：</dt>
		<dd><input type="text" name="settle_waitTime" id="settle_waitTime" size="8" />小时×<input type="text" name="paiche_waitTime" id="paiche_waitTime" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_waitTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_waitTime'] : null);?>
" size="3" />元&nbsp;&nbsp;
		等待费用：<input type="text" name="waitTimeMoney" id="waitTimeMoney" size="8" value="" onFocus="this.blur()" class="grey noborder" />元
		</dd>
	</dl>
	<dl class="lineD" >
	    <dt>其他费用：</dt>
	    <dd>
	    <div id="divcharges">
	    <ul>
          <li>编号</li><li>收费项目</li><li>约定金额</li><li></li><li>删除</li>
        </ul>
        
	    </div><div style="padding:5px 0 0 342px;"><a href="javascript:select_charges();"><img src="../../../css/list.gif" height="15" class="peoplePic" /></a></div>
	    </dd>
	</dl>	

    <div class="page_btm">
      <?php if ($_smarty_tpl->getVariable('task')->value=='update'){?><input type="checkbox" name="delflag" value="1">删除<?php }?><input type="submit" class="btn_b" name="btn_save" value="确定" />
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  <input type="hidden" name="paiche_parent" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_parent']) ? $_smarty_tpl->getVariable('list')->value['paiche_parent'] : null);?>
" />
  </form>
</div>

<!-->
<script>
$(document).ready(function(){
	
	$("input[name='b_id']").bind("click",function(){
		if ($(this).val()=="1"){//自驾
		    $('.show1').css('display','block');
		    $('.show2').css('display','none');
		}else{
		    $('.show1').css('display','none');
		    $('.show2').css('display','block');
		}
	});
	$("input[name='paiche_busitype']").bind("click",function(){
	    showbusitype();
	});
	$("#search_key").live('input propertychange',function(){
	    var aa=$("#search_key").val();
	    if (aa!=""){
			$("#paiche_name2 option").each(function (){  
		        var txt = $(this).text();  
		        if(txt.toLowerCase().indexOf(aa) >-1){  
		            $(this).attr("selected",true);
		            $("#paiche_name2").change();
		            return false;
		        }
		     });
	    }
	});
	$('#paiche_name2').change(function(){
	    var p1=$(this).children('option:selected').val();
	    if (p1==0){
		
	    }else{
			p2=$(this).children('option:selected').attr("at");
			$("#paiche_linker").val(p2.substring(0,p2.indexOf("#")));
			$("#paiche_linkerPhone").val(p2.substring(p2.indexOf("#")+1));
	    }
	});
	$('#paiche_brother').change(function(){
	    var p1=$(this).children('option:selected').val();
	    if (p1==0){
		$('#showpaiche_shunt').css('display','none');
	    }else{
		$('#showpaiche_shunt').css('display','inline');
		p2=$(this).children('option:selected').attr("at");
		$("#paiche_linker").val(p2.substring(0,p2.indexOf("#")));
		$("#paiche_linkerPhone").val(p2.substring(p2.indexOf("#")+1));
	    }
	});
	$("#settle_startKm,#settle_endKm,#paiche_overKm,#paiche_overTime,#settle_overTime,#settle_waitTime,#paiche_waitTime").live('input propertychange',function(){
	    var settle_startKm=0;//开始公里数
		var settle_endKm=0;//结束公里数
		if ($("#settle_startKm").val()!=""){
		    settle_startKm=parseFloat(textTrim($("#settle_startKm").val()),10);//开始公里数
		}
		if ($("#settle_endKm").val()!=""){
		    settle_endKm=parseFloat(textTrim($("#settle_endKm").val()),10);//结束公里数
		}
		var totalChangeCarKilo=0;//换车累计公里
		$("#settle_totalKm").val(settle_endKm-settle_startKm);
	    $("#settle_totalcalKm").val(settle_endKm-settle_startKm);//总计公里数
	    if (settle_endKm-settle_startKm+totalChangeCarKilo<0 || settle_endKm-settle_startKm+totalChangeCarKilo>10000){
		    $("#showerr").css("display","inline-table");
		}else{
		    $("#showerr").css("display","none");
		}
	    var paiche_unlimitKm=$("#paiche_unlimitKm").is(':checked');//是否限制公里数
	    if (!paiche_unlimitKm){
			var limitKm=parseFloat(textTrim($("#paiche_limitKm").val()),10); //限制公里数
			var overKmPrice=parseFloat(textTrim($("#paiche_overKm").val()),10);//超公里每公里金额
			var totalcalKm= parseFloat($("#settle_totalcalKm").val());
			
			overKm=totalcalKm-limitKm;//+totalChangeCarKilo
			if (overKm<0) overKm=0;
			$("#overKm").val(overKm);//超公里数
			$("#overKmMoney").val(xround(overKm*overKmPrice,2));//超公里费用
		}
		var paiche_unlimitTime=$("#paiche_unlimitTime").is(':checked');//是否限时
		if (!paiche_unlimitTime){
			if ($("#settle_overTime").val()=="") $("#settle_overTime").val(0);
			var paiche_overTime=parseFloat(textTrim($("#paiche_overTime").val()),10);//超时每小时费用
			var settle_overTime=parseFloat(textTrim($("#settle_overTime").val()),10);//超时
			$("#overTimeMoney").val(xround(settle_overTime*paiche_overTime,2));//超时费用
		}
		if($("#settle_waitTime").length>0 || $("#paiche_waitTime").length>0){
			if ($("#settle_waitTime").val()=="") $("#settle_waitTime").val(0);
			if ($("#paiche_waitTime").val()=="") $("#paiche_waitTime").val(0);
			var paiche_waitTime=parseFloat(textTrim($("#paiche_waitTime").val()),10);//待时每小时费用
			var settle_waitTime=parseFloat(textTrim($("#settle_waitTime").val()),10);//待时
			$("#waitTimeMoney").val(xround(settle_waitTime*paiche_waitTime,2));//待时费用
			
		}
	});
	$("input[name='b_id']").trigger("click");
});
function showbusitype(){
    var paiche_busitype=$('input:radio[name=paiche_busitype]:checked').val();
    if (paiche_busitype==2){
	$('#busishow_2').css('display','block');
	$('#busishow_3').css('display','none');
	$('#showrent').html('<span class="redstar">*</span>租金：');
	$('#showpaiche_shunt').css('display','none');
    }else if (paiche_busitype==3){
	$('#busishow_2').css('display','none');
	$('#busishow_3').css('display','block');
	$('#showrent').html('<span class="redstar">*</span>本公司报价：');
	$('#showpaiche_shunt').css('display','inline');
    }else{
	$('#busishow_2').css('display','none');
	$('#busishow_3').css('display','none');
	$('#showrent').html('<span class="redstar">*</span>租金：');
	$('#showpaiche_shunt').css('display','none');
    }
}
function select_emp(){
	demo_iframe('selectemp.php?sel_type=e','选择业务员',650,380,'login_js');
}
function select_car(){
    $("#shuntCon1,#shuntCon2,#shuntCon3,#shuntCon4,#shuntCon5,#shuntCon6").css("display","none");
	$("#showCar,#showDrive").css("display","block");
	var key=$("#paicheCarKey").val();
	demo_iframe('selectemp.php?sel_type=c&key='+key,'选择车辆',650,380,'login_js');
}
function select_driver(){
	var key=$("#paicheDriverKey").val();
	demo_iframe('selectemp.php?sel_type=d&key='+key,'选择驾驶员',650,380,'login_js');
}
function select_brother(){
	$("#shuntCon1,#shuntCon2,#shuntCon3,#shuntCon4,#shuntCon5,#shuntCon6").css("display","block");
	$("#showCar,#showDrive").css("display","none");
	var key=$("#paicheCarKey").val();
	demo_iframe('selectemp.php?sel_type=b&key='+key,'选择调车企业',650,380,'login_js');
}
function select_charges(){
	demo_iframe('selectcharge.php?busi_type='+$("input[name='b_id']:checked").val(),'选择收费项目',700,400,'login_js');
}
function select_items(){
	demo_iframe('selectitem.php?busi_type='+$("input[name='b_id']:checked").val(),'选择合同约定条款',650,500,'login_js');
}
function clearValue(dom1,dom2){
	$("#"+dom1).val("");
	$("#"+dom2).val("");
}
function business_check(_form){
	_form.btn_save.disabled=true;
		
		if(textTrim(_form.paiche_linker.value)==""){
			alert("联系人不能为空，请必须填写");
			_form.paiche_linker.focus();
			_form.btn_save.disabled=false;
			return false;
		}
		if(textTrim(_form.paiche_linkerPhone.value)==""){
			alert("联系人手机不能为空，请必须填写");
			_form.paiche_linkerPhone.focus();
			_form.btn_save.disabled=false;
			return false;
		}
		var b_id=$("input[name='b_id']:checked").val();
		if (b_id==1 && textTrim(_form.paiche_linkerNum.value)==""){
			alert("联系人身份证不能为空，请必须填写");
			_form.paiche_linkerNum.focus();
			_form.btn_save.disabled=false;
			return false;
		}
		if ($("#paiche_unlimitTime").is(':checked')){
		    
		}else{
		    if(textTrim(_form.paiche_overTime.value)==""){
				alert("请填写超时费或者选择不限时间");
				_form.paiche_overTime.focus();
				_form.btn_save.disabled=false;
				return false;
			}
		}
		if ($("#paiche_unlimitKm").is(':checked')){
		    
		}else{
		    if(textTrim(_form.paiche_limitKm.value)=="" || textTrim(_form.paiche_overKm.value)==""){
				alert("请填写限制公里数和超公里费或者选择不限公里");
				_form.paiche_limitKm.focus();
				_form.btn_save.disabled=false;
				return false;
			}
		}
		if(textTrim(_form.paiche_startDate.value)==""){
			alert("用车开始时间不能为空，请必须填写");
			_form.paiche_startDate .focus();
			_form.btn_save.disabled=false;
			return false;
		}
		if(textTrim(_form.paiche_endDate.value)==""){
			alert("用车结束时间不能为空，请必须填写");
			_form.paiche_endDate .focus();
			_form.btn_save.disabled=false;
			return false;
		}
		
		if(textTrim(_form.paiche_rent.value)==""){
			alert("租金不能为空，请必须填写");
			_form.paiche_rent.focus();
			_form.btn_save.disabled=false;
			return false;
		}
		
		var paiche_busitype=$('input:radio[name=paiche_busitype]:checked').val();
		if (paiche_busitype==2 && $('#paiche_name2').val()=="0"){
		    alert("请选择用车单位");
		    _form.paiche_name2.focus();
		    _form.btn_save.disabled=false;
		    return false;
		}
		if (paiche_busitype==3 && $('#paiche_brother').val()=="0"){
		    alert("请选择调车公司");
		    _form.paiche_brother.focus();
		    _form.btn_save.disabled=false;
		    return false;
		}
		if(textTrim(_form.paicheCar2.value)==""){
			alert("请选择车辆");
			_form.btn_save.disabled=false;
			return false;
		}
		if(textTrim(_form.settle_startKm.value)==""){
			alert("开始公里数不能为空，请必须填写");
			_form.settle_startKm.focus();
			_form.btn_save.disabled=false;
			return false;
		}
		if(textTrim(_form.settle_endKm.value)==""){
			alert("结束公里数不能为空，请必须填写");
			_form.settle_endKm.focus();
			_form.btn_save.disabled=false;
			return false;
		}
		
		var sssstartDate=$('#paiche_startDate').val();
		var sssendDate=$('#paiche_endDate').val();
		var arrStartDate = sssstartDate.split("-");
		var arrEndDate = sssendDate.split("-");
		var allStartDate = new Date(arrStartDate[0],arrStartDate[1],arrStartDate[2],$('#paiche_startHour').val(),$('#paiche_startMinute').val(),"00");
		var allEndDate = new Date(arrEndDate[0],arrEndDate[1],arrEndDate[2],$('#paiche_endHour').val(),$('#paiche_endMinute').val(),"00");
		if(allStartDate.getTime()>allEndDate.getTime()){
		    alert('用车结束时间不能小于开始时间');
		    _form.btn_save.disabled=false;
		    return false;
		}
		$("#p_startDate").val(resStartDate());
		$("#p_endDate").val(resEndDate());
		
		return true;
}
function resStartDate(){//计算开始时间
	var start="";
	var startDate=$('#paiche_startDate').val();
	var startHour=$('#paiche_startHour').val();
	var startMinute=$('#paiche_startMinute').val();
	if(startHour==""){startHour="00";}
	if(startMinute==""){startMinute="00";}    	
	if(startDate==""){
		start="";
	}else{
		start=startDate+" "+startHour+":"+startMinute+":00";
	}
	return start;
}
function resEndDate(){//计算结束时间
	var end="";
	var endDate=$('#paiche_endDate').val();
	var endHour=$('#paiche_endHour').val();
	var endMinute=$('#paiche_endMinute').val();
	if(endHour==""){endHour="00";}
	if(endMinute==""){endMinute="00";}
	if(endDate==""){
	    end="";
	}else{
	    end=endDate+" "+endHour+":"+endMinute+":00";
	}    	
	return end;
}
</script>
<!-->
</body>
</html>