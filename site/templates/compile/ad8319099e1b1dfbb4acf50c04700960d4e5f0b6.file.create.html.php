<?php /* Smarty version Smarty-3.0.4, created on 2014-09-29 13:19:56
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/finance/baoxiao/create.html" */ ?>
<?php /*%%SmartyHeaderCode:148995428ebfc101439-30051391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad8319099e1b1dfbb4acf50c04700960d4e5f0b6' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/finance/baoxiao/create.html',
      1 => 1411961130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148995428ebfc101439-30051391',
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
  <div class="page_tit"><?php if ($_smarty_tpl->getVariable('task')->value=="insert"){?>添加<?php }elseif($_smarty_tpl->getVariable('task')->value=="update"){?>编辑<?php }elseif($_smarty_tpl->getVariable('task')->value=="bao_accept"){?>报销<?php }else{ ?>受理<?php }?></div>  
  <form method="post" action="insert.php" onsubmit="return baoxiao_check(this)" name="form1">
  <div class="form2">
	  	<?php if ($_smarty_tpl->getVariable('task')->value=="bao_accept"){?>
	  	<dl class="lineD">
		  <dt>报销人：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['emp_name']) ? $_smarty_tpl->getVariable('list')->value['emp_name'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>报销日期：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_date']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_date'] : null);?>
</dd>
		</dl>
	  	<dl class="lineD">
		  <dt>金额：</dt>
		  <dd><input type="text" name="baoxiao_money" id="baoxiao_money" size="10" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_money']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_money'] : null)+(isset($_smarty_tpl->getVariable('list')->value['baoxiao_oil']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_oil'] : null)+(isset($_smarty_tpl->getVariable('list')->value['baoxiao_roadQiao']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_roadQiao'] : null)+(isset($_smarty_tpl->getVariable('list')->value['baoxiao_stopCar']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_stopCar'] : null)+(isset($_smarty_tpl->getVariable('list')->value['baoxiao_room']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_room'] : null);?>
" onFocus="this.blur()"/></dd>
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
			<dt>付款 账户：</dt>
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
		  <dt>报销人：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['emp_name']) ? $_smarty_tpl->getVariable('list')->value['emp_name'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>报销日期：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_date']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_date'] : null);?>
</dd>
		</dl>
	  	<dl class="lineD">
		  <dt>金额：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_money']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_money'] : null)+(isset($_smarty_tpl->getVariable('list')->value['baoxiao_oil']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_oil'] : null)+(isset($_smarty_tpl->getVariable('list')->value['baoxiao_roadQiao']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_roadQiao'] : null)+(isset($_smarty_tpl->getVariable('list')->value['baoxiao_stopCar']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_stopCar'] : null)+(isset($_smarty_tpl->getVariable('list')->value['baoxiao_room']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_room'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>报销备注：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_remarks']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_remarks'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>审核结果：</dt>
		  <dd><input type="radio" value="1" name="baoxiao_isAgree" checked/>通过 <input type="radio" value="-1" name="baoxiao_isAgree"/>不通过</dd>
		</dl>
		<dl class="lineD">
		  <dt>审核备注：</dt>
		  <dd><textarea name="baoxiao_isAgreeRemarks" id="baoxiao_isAgreeRemarks" cols="40" rows="4"></textarea></dd>
		</dl>
		<?php }elseif($_smarty_tpl->getVariable('task')->value=="lead_accept"){?>
		<dl class="lineD">
		  <dt>报销日期：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_date']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_date'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt><span class="redstar">*</span>金额：</dt>
		  <dd><input type="text" name="baoxiao_money" id="baoxiao_money" size="10" value="<?php echo $_smarty_tpl->getVariable('total')->value;?>
" /></dd>
		</dl>
		<dl class="lineD">
			<dt>付款方式：</dt>
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
			<dt>付款 账户：</dt>
			<dd><select name="bank_from" id="bank_from">
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
		<dl class="lineD">
			<dt>收款 账户：</dt>
			<dd><select name="bank_to" id="bank_to">
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
		  <dt><span class="redstar">*</span>报销人：</dt>
		  <dd><input type="text" name="paicheDriver" id="paicheDriver" size="18" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['emp_name']) ? $_smarty_tpl->getVariable('list')->value['emp_name'] : null);?>
" />
			         关键字：<input type="text" name="paicheDriverKey" id="paicheDriverKey" size="10" />
			    <input type="hidden" name="paicheDriver2" id="paicheDriver2" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_emp']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_emp'] : null);?>
" />
			    <a href="javascript:select_driver();"><img src="../../../../css/driver.gif" height="15" class="peoplePic" /></a>
		  </dd>
		</dl>
		<dl class="lineD">
		  <dt><span class="redstar">*</span>报销日期：</dt>
		  <dd><input id="baoxiao_date" type="text" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_date']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_date'] : null);?>
" name="baoxiao_date" size="16" onClick="calendar.show(this);" readonly="readonly" /></dd>
		</dl>
		<?php if ($_smarty_tpl->getVariable('item')->value==1){?>
	  	<dl class="lineD">
		  <dt><span class="redstar">*</span>合同号：</dt>
		  <dd><input type="text" name="baoxiaoPaicheContractNum" id="baoxiaoPaicheContractNum" size="18" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiaoPaicheContractNum']) ? $_smarty_tpl->getVariable('list')->value['baoxiaoPaicheContractNum'] : null);?>
" />
		  <input type="hidden" name="baoxiaoPaicheId" id="baoxiaoPaicheId" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiaoPaicheId']) ? $_smarty_tpl->getVariable('list')->value['baoxiaoPaicheId'] : null);?>
" />&nbsp;<input type="button" value="选择派车单" name="seluser" onClick="select_user();"></dd>
		</dl>
		<dl class="lineD">
		  <dt>现金加油费：</dt>
		  <dd><input type="text" name="baoxiao_oil" id="baoxiao_oil" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_oil']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_oil'] : null);?>
" />加油量：<input type="text" name="baoxiao_oil_number" id="baoxiao_oil_number" size="6" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_oil_number']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_oil_number'] : null);?>
" />升</dd>
		</dl>
		<dl class="lineD">
		  <dt>过桥过路费：</dt>
		  <dd><input type="text" name="baoxiao_roadQiao" id="baoxiao_roadQiao" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_roadQiao']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_roadQiao'] : null);?>
" /></dd>
		</dl>
		<dl class="lineD">
		  <dt>停车费：</dt>
		  <dd><input type="text" name="baoxiao_stop" id="baoxiao_stop" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_stopCar']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_stopCar'] : null);?>
" /></dd>
		</dl>
		<dl class="lineD">
		  <dt>住宿费：</dt>
		  <dd><input type="text" name="baoxiao_room" id="baoxiao_room" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_room']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_room'] : null);?>
" /></dd>
		</dl>
		<?php }?>
		<?php if ($_smarty_tpl->getVariable('item')->value==2){?>
		<dl class="lineD">
		  <dt><span class="redstar">*</span>报销内容：</dt>
		  <dd><textarea name="baoxiao_content" id="baoxiao_content" cols="60" rows="3"><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_content']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_content'] : null);?>
</textarea></dd>
		</dl>
		<dl class="lineD">
		  <dt><span class="redstar">*</span>报销金额：</dt>
		  <dd><input type="text" name="baoxiao_money" id="baoxiao_money" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_money']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_money'] : null);?>
" /></dd>
		</dl>
		<?php }?>
		<dl class="lineD">
		  <dt>报销备注：</dt>
		  <dd><textarea name="baoxiao_remarks" id="baoxiao_remarks" cols="60" rows="3"><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_remarks']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_remarks'] : null);?>
</textarea></dd>
		</dl>
	    <?php }?>
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" /><b> 注：<span class="red">*</span>为必填项</b>
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_id']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_id'] : null);?>
" />
  <input type="hidden" name="uids" value="<?php echo $_smarty_tpl->getVariable('uids')->value;?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  <input type="hidden" name="item" id="item" value="<?php echo $_smarty_tpl->getVariable('item')->value;?>
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