<?php /* Smarty version Smarty-3.0.4, created on 2014-10-11 20:26:51
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/business/create.html" */ ?>
<?php /*%%SmartyHeaderCode:123035439220b558953-22166475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '124249a1147baa2dde3a413080ea1d61c16cd4da' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/business/create.html',
      1 => 1413030398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123035439220b558953-22166475',
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
<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../js/check_form.js"></script>
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
  <div class="page_tit">编辑-<?php echo $_smarty_tpl->getVariable('PAGETITLE')->value;?>
</div>
  <form method="post" action="insert.php" onsubmit="return business_check(this)" name="form1">
  <div class="form2">
	
	<dl class="lineD">
      <dt><span class="redstar">*</span>租车客户（公司/个人）：</dt>
      <dd>
        <input type="hidden" name="paiche_contractNum" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_contractNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_contractNum'] : null);?>
" />
        <input type="text" name="paiche_name" id="paiche_name" size="30" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['client_name']) ? $_smarty_tpl->getVariable('list')->value['client_name'] : null);?>
" onClick="showCom()" />
        <input type="hidden" name="paiche_name2" id="paiche_name2" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paicheCom']) ? $_smarty_tpl->getVariable('list')->value['paicheCom'] : null);?>
" />
        是否为个人：<input type="checkbox" id="person" onClick="personal()" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_personal']) ? $_smarty_tpl->getVariable('list')->value['paiche_personal'] : null)==1){?>checked<?php }?> />
        <ul class="sel" id="comul" onMouseOver="nameIsOut=false" onMouseOut="nameIsOut=true">
	  </dd>
    </dl>
    <dl class="lineD">
      <dt><span class="redstar">*</span>联系人：</dt>
      <dd>
        <input type="text" name="paiche_linker" id="paiche_linker" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linker']) ? $_smarty_tpl->getVariable('list')->value['paiche_linker'] : null);?>
" />&nbsp;<input type="button" value="开始读卡" name="beginread" onClick="beginread_onclick()">&nbsp;<input type="button" value="停止读卡" name="endread"   onclick="endread_onclick()"  >
	  </dd>
    </dl>
    <dl class="lineD">
      <dt><span class="redstar">*</span>联系人手机：</dt>
      <dd>
        <input type="text" name="paiche_linkerPhone" id="paiche_linkerPhone" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerPhone']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerPhone'] : null);?>
"/>
	  </dd>
    </dl>
    <?php if ($_smarty_tpl->getVariable('busitype')->value=='1'||$_smarty_tpl->getVariable('busitype')->value=='3'){?>
    <OBJECT
	  classid="clsid:F1317711-6BDE-4658-ABAA-39E31D3704D3"                  
	  codebase="SDRdCard.cab#version=1,3,5,0"
	  width=330
	  height=0
	  align=center
	  hspace=0
	  vspace=0
	  id=idcard
	  name=rdcard		 
	>
	</OBJECT>
    <dl class="lineD">
      <dt>联系人身份证：</dt>
      <dd>
        <input type="text" name="paiche_linkerNum" id="paiche_linkerNum" size="26"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerNum'] : null);?>
"/>
	  </dd>
    </dl>
    <dl class="lineD">
      <dt>联系人地址：</dt>
      <dd>
        <input type="text" name="paiche_linkerAdd" id="paiche_linkerAdd" size="40"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerAdd']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerAdd'] : null);?>
"/>
	  </dd>
    </dl>
    <dl class="lineD">
	    <dt>担保人：</dt>
	    <dd><input type="text" name="paiche_promier" id="paiche_promier" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promier']) ? $_smarty_tpl->getVariable('list')->value['paiche_promier'] : null);?>
"/>&nbsp;<input type="button" value="取联系人" name="getlink" id="getlink"></dd>
	</dl>
    <dl class="lineD">
	    <dt>担保人手机：</dt>
	    <dd><input type="text" name="paiche_promierPhone" id="paiche_promierPhone" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promierPhone']) ? $_smarty_tpl->getVariable('list')->value['paiche_promierPhone'] : null);?>
"/></dd>
    </dl>
    <dl class="lineD">
	    <dt>担保人身份证：</dt>
	    <dd><input type="text" name="paiche_promierNum" id="paiche_promierNum" size="26" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promierNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_promierNum'] : null);?>
"/></dd>
    </dl>
    <?php }?>
    <dl class="lineD">
	    <dt><span class="redstar">*</span>业务员：</dt>
	    <dd><input type="text" name="paicheCounterMan" id="paicheCounterMan" size="16" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['yewuyuan']) ? $_smarty_tpl->getVariable('list')->value['yewuyuan'] : null);?>
" />
	    <input type="hidden" name="paicheCounterMan2" id="paicheCounterMan2" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paicheCounterMan']) ? $_smarty_tpl->getVariable('list')->value['paicheCounterMan'] : null);?>
" />
	    <a href="javascript:select_emp();"><img src="../../../css/driver.gif" width="16" height="15" class="peoplePic" /></a></dd>
	</dl>
	<dl class="lineD">
      <dt><span class="redstar">*</span>用车开始时间：</dt>
      <dd>
        <input type="text" name="paiche_startDate" id="paiche_startDate" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate_format']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate_format'] : null);?>
" onClick="calendar.show(this);" readonly="readonly" />
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
" onClick="calendar.show(this);" readonly="readonly" />
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
    <?php if ($_smarty_tpl->getVariable('busitype')->value=='2'||$_smarty_tpl->getVariable('busitype')->value=='4'||$_smarty_tpl->getVariable('busitype')->value=='5'){?>
    <dl class="lineD">
	    <dt><span class="redstar">*</span>司机每天工作时间：</dt>
	    <dd><input type="text" name="paiche_workTime" id="paiche_workTime" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_workTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_workTime'] : null);?>
"/></dd>
	</dl>
	<?php }?>
    <dl class="lineD">
	    <dt>超时费用：</dt>
    	<dd><input type="text" name="paiche_overTime" id="paiche_overTime" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_overTime'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitTime'] : null)=="Y"){?>readonly<?php }?> />
    不限时间：<input type="checkbox" id="paiche_unlimitTime" name="paiche_unlimitTime" onClick="unlimited(this,'paiche_overTime')" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitTime'] : null)=="Y"){?>checked<?php }?> value="Y" /></dd>
    </dl>
    <dl class="lineD">
	    <dt>限制公里数：</dt>
	    <dd><input type="text" name="paiche_limitKm" id="paiche_limitKm" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_limitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_limitKm'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)=="Y"){?>readonly<?php }else{ ?><?php }?>/>&nbsp;
	    超公里费用：<input type="text" name="paiche_overKm" id="paiche_overKm" size="6"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_overKm'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)=="Y"){?>readonly<?php }else{ ?><?php }?> />/公里&nbsp;
	    <?php if ($_smarty_tpl->getVariable('busitype')->value=='3'||$_smarty_tpl->getVariable('busitype')->value=='4'){?>
	    超公里累计方式<input type="radio" name="paiche_limitKmType" value="0" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_limitKmType']) ? $_smarty_tpl->getVariable('list')->value['paiche_limitKmType'] : null)=="0"){?>checked<?php }?> />按月
	    <input type="radio" name="paiche_limitKmType" value="1" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_limitKmType']) ? $_smarty_tpl->getVariable('list')->value['paiche_limitKmType'] : null)=="1"){?>checked<?php }?> />按季
	    <input type="radio" name="paiche_limitKmType" value="2" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_limitKmType']) ? $_smarty_tpl->getVariable('list')->value['paiche_limitKmType'] : null)=="2"){?>checked<?php }?> />按年&nbsp;&nbsp;&nbsp;
	    <?php }?>
	    不限公里<input type="checkbox" id="paiche_unlimitKm" name="paiche_unlimitKm" onClick="unlimited(this,'paiche_limitKm','paiche_overKm')" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)=="Y"){?>checked<?php }else{ ?><?php }?> value="Y" />
	    <div class="showprice" id="price" ></div>
	    </dd>
	</dl>	
	<dl class="lineD">
    	<dt>客户要求车型：</dt>
    	<dd><input type="text" name="paiche_requestCar" id="paiche_requestCar" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_requestCar']) ? $_smarty_tpl->getVariable('list')->value['paiche_requestCar'] : null);?>
"/></dd>
  	</dl>
	
	<dl class="lineD" id="dlitems">
	    <dt>其他条款约定：</dt>
	    <dd>
	    <div id="divitems">
	    <ul>
          <li>编号</li><ll>约定条款</ll><li>约定结果</li><li>删除</li>
        </ul>
	    <?php if ($_smarty_tpl->getVariable('task')->value=="update"){?>
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('itemlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
	    <ul id="V<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
">
          <li><input type="hidden" id="Recid" name="Recid[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
<input type="hidden" id="Iid" name="Iid[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
" /></li>
          <ll><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_name']) ? $_smarty_tpl->tpl_vars['row']->value['item_name'] : null);?>
</ll>
          <li><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row']->value['conv_result'] : null);?>
<input type="hidden" id="result" name="result[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row']->value['conv_result'] : null);?>
" /></li>
          <li><a href="javascript:delV(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
)"><img src="../../../css/error.gif" /></a><input type="hidden" id="DV<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
" name="DVid[]" value="0" /></li>
        </ul>
        <?php }} ?>
        <?php }?>
	    </div><div style="padding:5px 0 0 276px;"><a href="javascript:select_items();"><img src="../../../css/list.gif" height="15" class="peoplePic" /></a></div>
	    </dd>
	</dl>
    <dl class="lineD" >
	    <dt>收费项目：</dt>
	    <dd>
	    <div id="divcharges">
	    <ul>
          <li>编号</li><li>收费项目</li><li>约定金额</li><li>退还金额</li><li>删除</li>
        </ul>
        <?php if ($_smarty_tpl->getVariable('task')->value=="update"){?>
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('chargelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
	    <ul id="U<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_id']) ? $_smarty_tpl->tpl_vars['row']->value['charge_id'] : null);?>
">
          <li><input type="hidden" id="Rid" name="Rid[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_id']) ? $_smarty_tpl->tpl_vars['row']->value['charge_id'] : null);?>
<input type="hidden" id="Cid" name="Cid[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_id']) ? $_smarty_tpl->tpl_vars['row']->value['charge_id'] : null);?>
" /></li>
          <li><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null);?>
</li>
          <li><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null);?>
<input type="hidden" id="money" name="money[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null);?>
" /></li>
          <li><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['back_money']) ? $_smarty_tpl->tpl_vars['row']->value['back_money'] : null);?>
<input type="hidden" id="back_money" name="back_money[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['back_money']) ? $_smarty_tpl->tpl_vars['row']->value['back_money'] : null);?>
" /></li>
          <li><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['status']) ? $_smarty_tpl->tpl_vars['row']->value['status'] : null)==0){?><a href="javascript:del(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_id']) ? $_smarty_tpl->tpl_vars['row']->value['charge_id'] : null);?>
)"><img src="../../../css/error.gif" /></a><?php }else{ ?>&nbsp;<?php }?><input type="hidden" id="D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_id']) ? $_smarty_tpl->tpl_vars['row']->value['charge_id'] : null);?>
" name="Did[]" value="0" /></li>
        </ul>
        <?php }} ?>
        <?php }?>
	    </div><div style="padding:5px 0 0 342px;"><a href="javascript:select_charges();"><img src="../../../css/list.gif" height="15" class="peoplePic" /></a></div>
	    </dd>
	</dl>
    
    <?php if ($_smarty_tpl->getVariable('busitype')->value=='1'||$_smarty_tpl->getVariable('busitype')->value=='2'){?>
    <dl class="lineD">
	    <dt><span class="redstar">*</span>开车线路：</dt>
	    <dd><textarea name="paiche_line" id="paiche_line" cols="40" rows="5"><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_line']) ? $_smarty_tpl->getVariable('list')->value['paiche_line'] : null);?>
</textarea></dd>
	</dl>
	<?php if ($_smarty_tpl->getVariable('busitype')->value=='2'){?>
	<dl class="lineD">
	    <dt>路程：</dt>
	    <dd><input type="radio" name="paiche_route" value="单" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_route']) ? $_smarty_tpl->getVariable('list')->value['paiche_route'] : null)=="单"){?>checked<?php }?> />单程&nbsp;&nbsp;<input type="radio" name="paiche_route" value="双" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_route']) ? $_smarty_tpl->getVariable('list')->value['paiche_route'] : null)=="双"){?>checked<?php }?> />双程</dd>
	</dl>
	<dl class="lineD">
	    <dt>内外：</dt>
	    <dd><input type="radio" name="paiche_scope" value="内" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_scope']) ? $_smarty_tpl->getVariable('list')->value['paiche_scope'] : null)=="内"){?>checked<?php }?> />内&nbsp;&nbsp;<input type="radio" name="paiche_scope" value="外" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_scope']) ? $_smarty_tpl->getVariable('list')->value['paiche_scope'] : null)=="外"){?>checked<?php }?> />外</dd>
	</dl>
	<?php }?>
	<?php }?>
	<dl class="lineD">
	    <dt>特殊说明：</dt>
	    <dd><textarea name="paiche_specialRemarks" id="paiche_specialRemarks" cols="40" rows="5"><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_specialRemarks']) ? $_smarty_tpl->getVariable('list')->value['paiche_specialRemarks'] : null);?>
</textarea></dd>
	</dl>
	<?php if ($_smarty_tpl->getVariable('task')->value=="update"){?>
	<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_shunt']) ? $_smarty_tpl->getVariable('list')->value['paiche_shunt'] : null)==1){?>
	<dl class="lineD">
	    <dt>调车公司：</dt>
	    <dd><input type="text" name="shuntCom" id="shuntCom" size="38" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['bro_name']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['bro_name'] : null);?>
" /></dd>
    </dl>
    <dl class="lineD">
	    <dt>司机：</dt>
	    <dd><input type="text" name="shunt_driver" id="shunt_driver" size="18" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_driver']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_driver'] : null);?>
" /></dd>
    </dl>
    <dl class="lineD">
	    <dt>司机号码：</dt>
	    <dd><input type="text" name="shunt_driverPhone" id="shunt_driverPhone" size="16" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_driverPhone']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_driverPhone'] : null);?>
" /></dd>
	</dl>
    <dl class="lineD">
	    <dt>租金：</dt>
	    <dd><input type="text" name="shunt_rent" id="shunt_rent" size="8" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rent']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rent'] : null);?>
"/></dd>
	</dl>
	<?php }else{ ?>
	<dl class="lineD">
	    <dt>汽车：</dt>
	    <dd><input type="text" name="paicheCar" id="paicheCar" size="38" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
-<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_color']) ? $_smarty_tpl->getVariable('list')->value['car_color'] : null);?>
-<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_brand']) ? $_smarty_tpl->getVariable('list')->value['car_brand'] : null);?>
-<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_type']) ? $_smarty_tpl->getVariable('list')->value['car_type'] : null);?>
" /></dd>
    </dl>
    <?php }?>
    <?php if (($_smarty_tpl->getVariable('busitype')->value=='2'||$_smarty_tpl->getVariable('busitype')->value=='4'||$_smarty_tpl->getVariable('busitype')->value=='5')&&(isset($_smarty_tpl->getVariable('list')->value['paiche_shunt']) ? $_smarty_tpl->getVariable('list')->value['paiche_shunt'] : null)!=1){?>
    <dl class="lineD">
	    <dt>司机：</dt>
	    <dd><input type="text" name="paicheDriver" id="paicheDriver" size="18" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['siji']) ? $_smarty_tpl->getVariable('list')->value['siji'] : null);?>
" /></dd>
    </dl>
    <?php }?>
	<?php }?>
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" />
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  <input type="hidden" name="b_id" id="b_id" value="<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
" />
  </form>
</div>
<script type="text/javascript" src="../../../js/create.js"></script>
<!-->
<script type="text/javascript">

</script>
<!-->
</body>
</html>