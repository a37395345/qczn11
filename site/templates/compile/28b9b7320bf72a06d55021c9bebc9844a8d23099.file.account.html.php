<?php /* Smarty version Smarty-3.0.4, created on 2014-09-14 10:54:40
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/machine/account.html" */ ?>
<?php /*%%SmartyHeaderCode:634554150370d91b06-16278646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28b9b7320bf72a06d55021c9bebc9844a8d23099' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/machine/account.html',
      1 => 1410663276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '634554150370d91b06-16278646',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<link href="../../../css/style.css" rel="stylesheet" type="text/css">
<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>

</head>
<body>
<form method="post" action="insert.php" name="form1" id="form1">
<div class="so_main">
<input type="hidden" name="task" value="account_accept" />
<input type="hidden" name="bid" id="bid" value="<?php echo $_smarty_tpl->getVariable('bid')->value;?>
" />
<div class="form2">
	<dl class="lineD">
		<dt>违章车辆：</dt>
		<dd>苏D<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
</dd>
	</dl>
	<dl class="lineD">
		<dt>违章驾驶员：</dt>
		<dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['siji']) ? $_smarty_tpl->getVariable('list')->value['siji'] : null);?>
</dd>
	</dl>
	<dl class="lineD">
		<dt>合计金额：</dt>
		<dd><input type="text" name="total" id="total" value="<?php echo $_smarty_tpl->getVariable('total')->value;?>
" size="5" readonly/></dd>
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
</div>

  <div class="Toolbar_inbox">
    <a href="javascript:void(0);" class="btn_a" onclick="ok();"><span>确定</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="closebox();"><span>关闭</span></a>   	
  </div> 
</div>
</form>

<!-->
<script>

function ok(){	
	if (!$('#payments option:selected').val()){
		alert("请选择付款方式！");
		$('#payments').focus();
		return false;
	}
	
	if (!$('#bank option:selected').val()){
		alert("请选择付款账户！");
		$('#bank').focus();
		return false;
	}

	if(!confirm('请仔细核对，一旦提交就无法修改了，确定提交吗？')){
		return false;
	}
	
	$("#form1").submit();
	
	//window.parent.window.location.reload();
    //window.parent.window.jBox.close();
}


function closebox(){
	window.parent.window.jBox.close();
}
</script>
<!-->
</body>
</html>