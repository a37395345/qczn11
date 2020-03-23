<?php /* Smarty version Smarty-3.0.4, created on 2014-08-15 17:19:26
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/finance/monthaccount/create.html" */ ?>
<?php /*%%SmartyHeaderCode:2610353edd09ed35a06-99466295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a174cdf59a60ee8901bbc89b487d6831a1b990f' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/finance/monthaccount/create.html',
      1 => 1408094349,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2610353edd09ed35a06-99466295',
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
<link href="../../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<script type="text/javascript" src="../../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
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
  <div class="page_tit">结算</div>  
  <form method="post" action="list.php" onsubmit="return monthaccount_check(this)" name="form1">
  <input type="hidden" id="clientmoney" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['client_balance']) ? $_smarty_tpl->getVariable('list')->value['client_balance'] : null);?>
" />
  <input type="hidden" name="client_id" id="client_id" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['client_id']) ? $_smarty_tpl->getVariable('list')->value['client_id'] : null);?>
" />
  <input type="hidden" name="pid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['monthPaicheId']) ? $_smarty_tpl->getVariable('list')->value['monthPaicheId'] : null);?>
" />
  <div class="form2">
	  	<dl class="lineD">
		  <dt>单位名称：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['client_name']) ? $_smarty_tpl->getVariable('list')->value['client_name'] : null);?>
<?php if ((isset($_smarty_tpl->getVariable('list')->value['client_balance']) ? $_smarty_tpl->getVariable('list')->value['client_balance'] : null)>0){?>&nbsp;&nbsp;当前余额：<?php echo (isset($_smarty_tpl->getVariable('list')->value['client_balance']) ? $_smarty_tpl->getVariable('list')->value['client_balance'] : null);?>
元&nbsp;&nbsp;<input type="checkbox" name="isBalance" id="isBalance" value="1" />用余额支付<?php }?></dd>
		</dl>
	  	<dl class="lineD">
		  <dt>结算金额：</dt>
		  <dd><input type="text" name="total" id="total" size="10" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_infact']) ? $_smarty_tpl->getVariable('list')->value['settle_infact'] : null);?>
" readonly="readonly" /></dd>
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
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" />
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['month_id']) ? $_smarty_tpl->getVariable('list')->value['month_id'] : null);?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  </form>
</div>
<!-->
<script>

function select_driver(){
	var key=$("#paicheDriverKey").val();
	var item=$("#item").val();
	demo_iframe('../../business/selectemp.php?sel_type=d&item='+item+'&key='+key,'选择驾驶员',650,380,'login_js');
}
function select_user(){
	if ($("#paicheDriver2").val()==""){
		alert("请先选择报销费用的驾驶员！");
		$("#paicheDriverKey").focus();
		return false;
	}
	demo_iframe('../../business/selectemp.php?sel_type=h&key='+$("#paicheDriver2").val(),'选择租车合同',950,480,'login_js');
}
</script>
<!-->
</body>
</html>