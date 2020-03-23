<?php /* Smarty version Smarty-3.0.4, created on 2014-10-31 10:35:59
         compiled from "D:\czyhqc\site\templates\elsker\operator/finance/borrow/create.html" */ ?>
<?php /*%%SmartyHeaderCode:130255452f58f307915-12728324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdeb239d6ed95e2eb087b79f828f77ad20f56fbd' => 
    array (
      0 => 'D:\\czyhqc\\site\\templates\\elsker\\operator/finance/borrow/create.html',
      1 => 1411958683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130255452f58f307915-12728324',
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
  <div class="page_tit"><?php if ($_smarty_tpl->getVariable('task')->value=="insert"){?>添加<?php }elseif($_smarty_tpl->getVariable('task')->value=="update"){?>编辑<?php }elseif($_smarty_tpl->getVariable('task')->value=="bao_accept"){?>出账<?php }elseif($_smarty_tpl->getVariable('task')->value=="check_accept"){?>审核<?php }else{ ?>还款<?php }?></div>  
  <form method="post" action="insert.php" onsubmit="return borrow_check(this)" name="form1">
  <div class="form2">
	  	<?php if ($_smarty_tpl->getVariable('task')->value=="bao_accept"){?>
	  	<dl class="lineD">
		  <dt>借款人：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['emp_name']) ? $_smarty_tpl->getVariable('list')->value['emp_name'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>借款日期：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['borrow_date']) ? $_smarty_tpl->getVariable('list')->value['borrow_date'] : null);?>
</dd>
		</dl>
	  	<dl class="lineD">
		  <dt>金额：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['borrow_money']) ? $_smarty_tpl->getVariable('list')->value['borrow_money'] : null);?>
<input type="hidden" name="borrow_money" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['borrow_money']) ? $_smarty_tpl->getVariable('list')->value['borrow_money'] : null);?>
" /></dd>
		</dl>
		<dl class="lineD">
		  <dt>审核人：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['borrow_isAgreeMan']) ? $_smarty_tpl->getVariable('list')->value['borrow_isAgreeMan'] : null);?>
</dd>
		</dl>
	  	<dl class="lineD">
		  <dt>审核意见：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['borrow_isAgreeRemarks']) ? $_smarty_tpl->getVariable('list')->value['borrow_isAgreeRemarks'] : null);?>
</dd>
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
		<?php }elseif($_smarty_tpl->getVariable('task')->value=="check_accept"){?>
		<dl class="lineD">
		  <dt>借款人：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['emp_name']) ? $_smarty_tpl->getVariable('list')->value['emp_name'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>借款日期：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['borrow_date']) ? $_smarty_tpl->getVariable('list')->value['borrow_date'] : null);?>
</dd>
		</dl>
	  	<dl class="lineD">
		  <dt>借款金额：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['borrow_money']) ? $_smarty_tpl->getVariable('list')->value['borrow_money'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>备注：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['borrow_remarks']) ? $_smarty_tpl->getVariable('list')->value['borrow_remarks'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>审核结果：</dt>
		  <dd><input type="radio" value="1" name="borrow_isAgree" checked/>通过 <input type="radio" value="-1" name="borrow_isAgree"/>不通过</dd>
		</dl>
		<dl class="lineD">
		  <dt>审核意见：</dt>
		  <dd><textarea name="borrow_isAgreeRemarks" id="borrow_isAgreeRemarks" cols="40" rows="4"></textarea></dd>
		</dl>
		<?php }elseif($_smarty_tpl->getVariable('task')->value=="ret_accept"){?>
		<dl class="lineD">
		  <dt>借款人：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['emp_name']) ? $_smarty_tpl->getVariable('list')->value['emp_name'] : null);?>
</dd>
		</dl>
	  	<dl class="lineD">
		  <dt>借款金额：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['borrow_money']) ? $_smarty_tpl->getVariable('list')->value['borrow_money'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>借款日期：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['borrow_date']) ? $_smarty_tpl->getVariable('list')->value['borrow_date'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>还款金额：</dt>
		  <dd><input type="text" name="borrow_Returnmoney" id="borrow_Returnmoney" size="10" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['borrow_money']) ? $_smarty_tpl->getVariable('list')->value['borrow_money'] : null)-(isset($_smarty_tpl->getVariable('list')->value['borrow_Returnmoney']) ? $_smarty_tpl->getVariable('list')->value['borrow_Returnmoney'] : null);?>
" /></dd>
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
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_name']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_name'] : null);?>
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
" ><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bank_name']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_name'] : null);?>
</option>
		                  <?php }} ?>
		              </select>
			</dd>
		</dl>
	  	<?php }else{ ?>
	  	<dl class="lineD">
		  <dt><span class="redstar">*</span>借款人：</dt>
		  <dd><input type="text" name="paicheDriver" id="paicheDriver" size="18" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['emp_name']) ? $_smarty_tpl->getVariable('list')->value['emp_name'] : null);?>
" />
			         关键字：<input type="text" name="paicheDriverKey" id="paicheDriverKey" size="10" />
			    <input type="hidden" name="paicheDriver2" id="paicheDriver2" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['borrow_emp']) ? $_smarty_tpl->getVariable('list')->value['borrow_emp'] : null);?>
" />
			    <a href="javascript:select_driver();"><img src="../../../../css/driver.gif" height="15" class="peoplePic" /></a>
		  </dd>
		</dl>
		<dl class="lineD">
		  <dt><span class="redstar">*</span>借款日期：</dt>
		  <dd><input id="borrow_date" type="text" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['borrow_date']) ? $_smarty_tpl->getVariable('list')->value['borrow_date'] : null);?>
" name="borrow_date" size="16" onClick="calendar.show(this);" readonly="readonly" /></dd>
		</dl>
		<dl class="lineD">
		  <dt><span class="redstar">*</span>借款金额：</dt>
		  <dd><input type="text" name="borrow_money" id="borrow_money" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['borrow_money']) ? $_smarty_tpl->getVariable('list')->value['borrow_money'] : null);?>
" /></dd>
		</dl>
		<dl class="lineD">
		  <dt>备注：</dt>
		  <dd><textarea name="borrow_remarks" id="borrow_remarks" cols="60" rows="3"><?php echo (isset($_smarty_tpl->getVariable('list')->value['borrow_remarks']) ? $_smarty_tpl->getVariable('list')->value['borrow_remarks'] : null);?>
</textarea></dd>
		</dl>
	    <?php }?>
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" /><b> 注：<span class="red">*</span>为必填项</b>
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['borrow_id']) ? $_smarty_tpl->getVariable('list')->value['borrow_id'] : null);?>
" />
  <input type="hidden" name="uids" value="<?php echo $_smarty_tpl->getVariable('uids')->value;?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  </form>
</div>
<!-->
<script>

function select_driver(){
	var key=$("#paicheDriverKey").val();
	
	demo_iframe('../../business/selectemp.php?sel_type=d&item=2'+'&key='+key,'选择员工',650,380,'login_js');
}

</script>
<!-->
</body>
</html>