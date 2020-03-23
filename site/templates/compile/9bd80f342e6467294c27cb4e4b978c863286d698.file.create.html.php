<?php /* Smarty version Smarty-3.0.4, created on 2015-08-13 14:29:23
         compiled from "D:\czyhqc\site\templates\elsker\operator/fitting/create.html" */ ?>
<?php /*%%SmartyHeaderCode:2162655cc394334c223-25464281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bd80f342e6467294c27cb4e4b978c863286d698' => 
    array (
      0 => 'D:\\czyhqc\\site\\templates\\elsker\\operator/fitting/create.html',
      1 => 1408517001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2162655cc394334c223-25464281',
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
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../js/check_form.js"></script>
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit">配件采购申请</div>
  <form method="post" action="list.php" onsubmit="return fitting_check(this)" name="form1">
  <input type="hidden" name="fid" value="<?php echo $_smarty_tpl->getVariable('fid')->value;?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  <div class="list">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
	<th>配件名称</th>
	<th>品牌</th>
	<th>型号/规格</th>
	<th>采购数量</th>
	<th>计量单位</th>
	<th>单价</th>
	<th>金额</th>
	<th>备注</th>
	</tr>
<?php if ($_smarty_tpl->getVariable('task')->value=="insert"){?>	
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['total']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['name'] = 'total';
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['loop'] = is_array($_loop=8) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total']);
?>
	<tr>
	  <td><input type='text' name='fitting_name[]' value="" size='12' class="noborder" /></td>
	  <td><input type='text' name='fitting_brand[]' value="" size='12' /></td>
	  <td><input type='text' name='fitting_model[]' value="" size='12' /></td>
	  <td><input type='text' name='fitting_num[]' value="" size='2' /></td>
	  <td><input type='text' name='fitting_unit[]' value="" size='2' /></td>
	  <td><input type='text' name='fitting_price[]' value="" size='3' /></td>
	  <td><input type='text' name='fitting_sum[]' value="" size='4' /></td>
	  <td><input type='text' name='fitting_remark[]' value="" size='64' /></td>
	</tr>
<?php endfor; endif; ?>
<?php }?>
<?php if ($_smarty_tpl->getVariable('task')->value=="update"){?>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
<?php $_smarty_tpl->tpl_vars['total_sum'] = new Smarty_variable($_smarty_tpl->getVariable('total_sum')->value+(isset($_smarty_tpl->tpl_vars['row']->value['fitting_innum']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_innum'] : null)*(isset($_smarty_tpl->tpl_vars['row']->value['fitting_price']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_price'] : null), null, null);?>
<?php $_smarty_tpl->tpl_vars['total_num'] = new Smarty_variable($_smarty_tpl->getVariable('total_num')->value+(isset($_smarty_tpl->tpl_vars['row']->value['fitting_innum']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_innum'] : null), null, null);?>
	<tr>
	  <td><input type="hidden" name="fitting_id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_id']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_id'] : null);?>
">
	  <input type='text' name='fitting_name[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_name']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_name'] : null);?>
" size='12' class="noborder" /></td>
	  <td><input type='text' name='fitting_brand[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_brand']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_brand'] : null);?>
" size='12' /></td>
	  <td><input type='text' name='fitting_model[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_model']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_model'] : null);?>
" size='12' /></td>
	  <td><input type='text' name='fitting_num[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_innum']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_innum'] : null);?>
" size='2' /></td>
	  <td><input type='text' name='fitting_unit[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_unit']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_unit'] : null);?>
" size='2' /></td>
	  <td><input type='text' name='fitting_price[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_price']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_price'] : null);?>
" size='3' /></td>
	  <td><input type='text' name='fitting_sum[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_innum']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_innum'] : null)*(isset($_smarty_tpl->tpl_vars['row']->value['fitting_price']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_price'] : null);?>
" size='4' /></td>
	  <td><input type='text' name='fitting_remark[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_remark']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_remark'] : null);?>
" size='64' /></td>
	</tr>
<?php }} ?>
<?php }?>
	<tr>
	  <td>合计</td>
	  <td colspan="2">&nbsp;</td>
	  <td><input type='text' name='total_num' id='total_num' value="<?php echo $_smarty_tpl->getVariable('total_num')->value;?>
" size='2' /></td>
	  <td colspan="2">&nbsp;</td>
	  <td><input type='text' name='total_sum' id='total_sum' value="<?php echo $_smarty_tpl->getVariable('total_sum')->value;?>
" size='2' /></td>
	  <td>&nbsp;</td>
	</tr>
	<tr>
	  <td colspan="13"><input type="submit" id="submit" value="提 交" /></td>
	</tr>
	</table>
  </div>
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />

  </form>
</div>
<!-->
<script>
$(document).ready(function(){
	$("input[name=fitting_num[]]").live('input propertychange',function(){
		calTotal();
	});
	$("input[name=fitting_price[]]").live('input propertychange',function(){
		calTotal();
	});
});
function calTotal(){
	var tmpSum=0;
	var Total_Num=0;
	var Total_Sum=0; 
	$.each($('input[name=fitting_num[]]'), function(i, n){
		if ($('input[name=fitting_price[]]').eq(i).val()!="" && $(n).val()!=""){
			tmpSum=parseFloat($('input[name=fitting_price[]]').eq(i).val())*parseFloat($(n).val());
			Total_Num+= parseFloat($(n).val());
			Total_Sum+=tmpSum;
			$('input[name=fitting_sum[]]').eq(i).val(tmpSum);
		}
	});
	$("#total_num").val(Total_Num);
	$("#total_sum").val(Total_Sum);
}
</script>
<!-->
</body>
</html>