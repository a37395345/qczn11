<?php /* Smarty version Smarty-3.0.4, created on 2014-09-16 11:12:28
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/fitting/account.html" */ ?>
<?php /*%%SmartyHeaderCode:99895417aa9c1fc034-69892257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbf1d50fa27cd0f60dabe470bfc49b3765790602' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/fitting/account.html',
      1 => 1410836964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99895417aa9c1fc034-69892257',
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
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
</head>
<body>
<form method="post" action="list.php" name="form1" id="form1" onsubmit="return ok()">
<input type="hidden" name="task" value="account_accept" />
<input type="hidden" name="fid" value="<?php echo $_smarty_tpl->getVariable('fid')->value;?>
" />
<div class="so_main">
  	<div class="page_tit_1">配件采购账务处理</div>
	<div class="list">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
	    <th style="width:30px;">序号	</th>
		<th>配件名称</th>
		<th>品牌</th>
		<th>型号规格</th>
		<th>采购数量</th>
		<th>单位</th>
		<th>单价</th>
		<th>金额</th>
		<th>用途</th>
	  </tr>
	  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
	  <?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->getVariable('total')->value+(isset($_smarty_tpl->tpl_vars['row']->value['fitting_innum']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_innum'] : null)*(isset($_smarty_tpl->tpl_vars['row']->value['fitting_price']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_price'] : null), null, null);?>
	  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_id']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_id'] : null);?>
">
	    	<td><input type="hidden" name="fitting_id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_id']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_id'] : null);?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>
		  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_name']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_name'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_brand']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_brand'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_model']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_model'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_innum']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_innum'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_unit']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_unit'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_price']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_price'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_innum']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_innum'] : null)*(isset($_smarty_tpl->tpl_vars['row']->value['fitting_price']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_price'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_remark']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_remark'] : null);?>
</td>
	  </tr>
	  <?php }} ?>
	  <tr>
		  <td>合计</td>
		  <td colspan="6">&nbsp;</td>
		  <td><input type='text' name='total_sum' id='total_sum' value="<?php echo $_smarty_tpl->getVariable('total')->value;?>
" size='4' onFocus="this.blur()"/></td>
		  <td>&nbsp;</td>
	  </tr>
	 </table>
	</div>
	<div class="form2">
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
    	<input class="btn_b" type="submit" value="确定">
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
		alert("请选择收款账户！");
		$('#bank').focus();
		return false;
	}
	if(!confirm('请仔细核对，一旦提交就无法修改了，确定提交吗？')){
		return false;
	}
	
}
</script>
<!-->
</body>
</html>