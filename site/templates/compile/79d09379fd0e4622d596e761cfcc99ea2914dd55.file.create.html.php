<?php /* Smarty version Smarty-3.0.4, created on 2018-12-24 14:24:57
         compiled from "D:\web\site\templates\elsker\operator/finance/monthaccount/create.html" */ ?>
<?php /*%%SmartyHeaderCode:45225c207bb98b4a07-35438693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79d09379fd0e4622d596e761cfcc99ea2914dd55' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/finance/monthaccount/create.html',
      1 => 1545458373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45225c207bb98b4a07-35438693',
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
  <div class="page_tit">结账</div>  
  <form method="post" action="list.php" onsubmit="return monthaccount_check(this)" name="form1">
  <input type="hidden" id="clientmoney" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['client_balance']) ? $_smarty_tpl->getVariable('list')->value['client_balance'] : null);?>
" />
  <input type="hidden" name="client_id" id="client_id" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['client_id']) ? $_smarty_tpl->getVariable('list')->value['client_id'] : null);?>
" />
  <input type="hidden" name="month_clientid" id="month_clientid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['month_clientid']) ? $_smarty_tpl->getVariable('list')->value['month_clientid'] : null);?>
" />
  <input type="hidden" name="month_brotherid" id="month_brotherid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['month_brotherid']) ? $_smarty_tpl->getVariable('list')->value['month_brotherid'] : null);?>
" />
  <input type="hidden" name="month_code" id="month_code" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['month_code']) ? $_smarty_tpl->getVariable('list')->value['month_code'] : null);?>
" />
  <input type="hidden" name="pid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['monthPaicheId']) ? $_smarty_tpl->getVariable('list')->value['monthPaicheId'] : null);?>
" />
  <div class="form2">
	  	<dl class="lineD">
		  <dt>单位名称：</dt>
		  <dd><?php if ((isset($_smarty_tpl->getVariable('list')->value['bro_name']) ? $_smarty_tpl->getVariable('list')->value['bro_name'] : null)!=''){?><?php echo (isset($_smarty_tpl->getVariable('list')->value['bro_name']) ? $_smarty_tpl->getVariable('list')->value['bro_name'] : null);?>
<?php }elseif((isset($_smarty_tpl->getVariable('list')->value['client_name']) ? $_smarty_tpl->getVariable('list')->value['client_name'] : null)==''){?><?php echo (isset($_smarty_tpl->getVariable('list')->value['client_name2']) ? $_smarty_tpl->getVariable('list')->value['client_name2'] : null);?>
<?php }else{ ?><?php echo (isset($_smarty_tpl->getVariable('list')->value['client_name']) ? $_smarty_tpl->getVariable('list')->value['client_name'] : null);?>
<?php }?></dd>
		</dl>
		<dl class="lineD">
		  <dt>月结金额：</dt>
		  <dd><input type="hidden" name="total0" id="total0" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_infact']) ? $_smarty_tpl->getVariable('list')->value['settle_infact'] : null);?>
" /><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_infact']) ? $_smarty_tpl->getVariable('list')->value['settle_infact'] : null);?>
</dd>
		</dl>
		<?php if ((isset($_smarty_tpl->getVariable('list')->value['settle_billNum']) ? $_smarty_tpl->getVariable('list')->value['settle_billNum'] : null)==''){?>
		<dl class="lineD">
		<dt>发票号码：</dt>
		<dd><input type="text" name="settle_billNum" size="15"/></dd>
		</dl>
		<dl class="lineD">
		<dt>开票日期：</dt>
		<dd><input type="text" name="settle_billDate" size="16" onClick="calendar.show(this);" readonly="readonly" /></dd>
		</dl>
		<?php }else{ ?>
		<dl class="lineD">
		  <dt>发票号码：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_billNum']) ? $_smarty_tpl->getVariable('list')->value['settle_billNum'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>开票日期：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_billDate']) ? $_smarty_tpl->getVariable('list')->value['settle_billDate'] : null);?>
</dd>
		</dl>
		<?php }?>
		<dl class="lineD">
		  <dt>开票金额：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_billMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_billMoney'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>已结金额：</dt>
		  <dd><input type="hidden" name="total1" id="total1" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_billMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_billMoney_have'] : null);?>
"/><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_billMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_billMoney_have'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>优惠金额：</dt>
		  <dd><input type="text" name="favor" id="favor" size="10" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_billFavor']) ? $_smarty_tpl->getVariable('list')->value['settle_billFavor'] : null);?>
" /></dd>
		</dl>
	  	<dl class="lineD">
		  <dt>本次结账金额：</dt>
		  <dd><input type="text" name="total" id="total" size="10" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_infact']) ? $_smarty_tpl->getVariable('list')->value['settle_infact'] : null)-(isset($_smarty_tpl->getVariable('list')->value['settle_billMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_billMoney_have'] : null);?>
" /></dd>
		</dl>
		<dl class="lineD">
	    	<dt>结账时间：</dt>
	    	<dd><input type="text" name="month_accounttime" size="18" value="<?php echo $_smarty_tpl->getVariable('monthtime')->value;?>
" readonly /></dd>
	    </dl>
		<dl class="lineD">
			<dt><span class="redstar">*</span>收款方式：</dt>
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
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['payment_id']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_id'] : null)==2){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_name']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_name'] : null);?>
</option>
		                  <?php }} ?>
		              </select>
			</dd>
		</dl>
		<dl class="lineD">
			<dt><span class="redstar">*</span>收款 账户：</dt>
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
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['bank_id']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_id'] : null)==5){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bank_name']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_name'] : null);?>
</option>
		                  <?php }} ?>
		              </select>
			</dd>
		</dl>
		<dl class="lineD">
		    <dt>备注说明：</dt>
		    <dd><textarea name="Remarks" id="Remarks" cols="80" rows="5"></textarea></dd>
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
$(document).ready(function(){
    $("#favor").live('input propertychange',function(){
		if ($(this).val()!=""){
		    aa=parseFloat($("#total0").val(),2)-parseFloat($("#total1").val(),2)-parseFloat($(this).val(),2);
		    $("#total").val(aa.toFixed(2));
		}
    });
});

</script>
<!-->
</body>
</html>