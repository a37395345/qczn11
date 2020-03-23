<?php /* Smarty version Smarty-3.0.4, created on 2019-11-14 13:20:25
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/yearcareful/create.html" */ ?>
<?php /*%%SmartyHeaderCode:112605dcce419a54101-85255268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d4f306c6d880d86d7534ec13bda847d4e9356ca' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/yearcareful/create.html',
      1 => 1571707186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112605dcce419a54101-85255268',
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
  <div class="page_tit"><?php if ($_smarty_tpl->getVariable('task')->value=="insert"){?>添加<?php }elseif($_smarty_tpl->getVariable('task')->value=="update"){?>编辑<?php }else{ ?>报销<?php }?></div>  
  <form method="post" action="insert.php" onsubmit="return careful_check(this)" name="form1">

  <div class="form2">
	  <?php if ($_smarty_tpl->getVariable('task')->value=="bao_accept"){?>
	  <dl class="lineD">
	    <dt>年审车辆：</dt>
	    <dd>苏D<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>日期：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['careful_date']) ? $_smarty_tpl->getVariable('list')->value['careful_date'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>年审费用：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['careful_money']) ? $_smarty_tpl->getVariable('list')->value['careful_money'] : null);?>
元</dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>报销金额：</dt>
	    <dd><input type="text" name="baoxiao_money" id="baoxiao_money" size="3" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['careful_money']) ? $_smarty_tpl->getVariable('list')->value['careful_money'] : null);?>
"/>元</dd>
	  </dl>
	  <dl class="lineD">
			<dt><span class="redstar">*</span>付款方式：</dt>
			<dd><select name="payments" id="payments">
		                  <option value="">请选择</option>
		                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('paymentslist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
		                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_id']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_id'] : null);?>
" rel="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_fee']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_fee'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_name']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_name'] : null);?>
</option>
		                  <?php }} ?>
		              </select>
			</dd>
		</dl>
		<dl class="lineD">
			<dt><span class="redstar">*</span>付款 账户：</dt>
			<dd><select name="bank" id="bank">
		                  <option value="">请选择</option>
		                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('banklist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
		                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bank_id']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_id'] : null);?>
" ><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bank_name']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_name'] : null);?>
</option>
		                  <?php }} ?>
		              </select>
			</dd>
		</dl>
	  <?php }else{ ?>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>选择年审车辆：</dt>
	    <dd><input type="text" name="paicheCar" id="paicheCar" size="38" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
" /> 
	         <input type="button" value="清 空" onClick="clearValue('paicheCar','paicheCar2')" />&nbsp;
	         关键字：<input type="text" name="paicheCarKey" id="paicheCarKey" size="10" />
	    <input type="hidden" name="paicheCar2" id="paicheCar2" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_id']) ? $_smarty_tpl->getVariable('list')->value['car_id'] : null);?>
" /><input type="hidden" name="shunt" id="shunt" value="" />
	    <a href="javascript:select_car();"><img src="../../../css/car2.gif" height="15" class="peoplePic" /></a></dd>
	  </dl>
	  <dl class="lineD">
		<dt>车辆注册日期：</dt>
	    <dd><input type="text" name="car_cartDate" id="car_cartDate" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_cartDate']) ? $_smarty_tpl->getVariable('list')->value['car_cartDate'] : null);?>
" readonly="readonly"/></dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>年审大小：</dt>
	    <dd><input type="radio" name="type" value="0" <?php if ((isset($_smarty_tpl->getVariable('list')->value['type']) ? $_smarty_tpl->getVariable('list')->value['type'] : null)==0){?>checked<?php }?>="">大年审&nbsp;<input type="radio"  <?php if ((isset($_smarty_tpl->getVariable('list')->value['type']) ? $_smarty_tpl->getVariable('list')->value['type'] : null)==1){?>checked<?php }?> name="type" value="1">小年审</dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>本次年审日期：</dt>
	    <dd><input type="text" name="careful_date" id="careful_date" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['careful_date']) ? $_smarty_tpl->getVariable('list')->value['careful_date'] : null);?>
" onclick="calendar.show(this);" readonly="readonly" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>本次公里数：</dt>
	    <dd><input type="text" name="careful_km" id="careful_km" size="10" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['careful_km']) ? $_smarty_tpl->getVariable('list')->value['careful_km'] : null);?>
"  /></dd>
	  </dl>
	  <dl class="lineD">
		<dt><span class="redstar">*</span>下次年审日期：</dt>
	    <dd><input type="text" name="careful_nextdate" id="careful_nextdate" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['careful_nextdate']) ? $_smarty_tpl->getVariable('list')->value['careful_nextdate'] : null);?>
" onclick="calendar.show(this);"  /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>年审费用：</dt>
	    <dd><input type="text" name="careful_money" id="careful_money" size="3" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['careful_money']) ? $_smarty_tpl->getVariable('list')->value['careful_money'] : null);?>
"/>元</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>年审内容：</dt>
	    <dd><textarea name="careful_remark" cols="90" rows="4"><?php echo (isset($_smarty_tpl->getVariable('list')->value['careful_remark']) ? $_smarty_tpl->getVariable('list')->value['careful_remark'] : null);?>
</textarea></dd>
	  </dl>
    <?php }?>
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" /><b> 注：<span class="red">*</span>为必填项</b>
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['careful_id']) ? $_smarty_tpl->getVariable('list')->value['careful_id'] : null);?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  </form>
</div>
<!-->
<script>
function select_car(){
	var key=$("#paicheCarKey").val();
	demo_iframe('../machine/selectcar.php?sel_type=k&key='+key,'选择车辆',650,380,'login_js');
}
function clearValue(dom1,dom2){
	$("#"+dom1).val("");
	$("#"+dom2).val("");
}
</script>
<!-->
</body>
</html>