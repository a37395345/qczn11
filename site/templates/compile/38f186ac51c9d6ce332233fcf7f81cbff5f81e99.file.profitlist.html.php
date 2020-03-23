<?php /* Smarty version Smarty-3.0.4, created on 2018-12-31 13:41:57
         compiled from "D:\web\site\templates\elsker\operator/system/profit/profitlist.html" */ ?>
<?php /*%%SmartyHeaderCode:50055c29ac25e8d8d8-31145157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38f186ac51c9d6ce332233fcf7f81cbff5f81e99' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/system/profit/profitlist.html',
      1 => 1546223847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50055c29ac25e8d8d8-31145157',
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
<script type="text/javascript" src="../../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
</head>
<body>
<div class="so_main">
  <div class="page_tit">员工收益明细</div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th class="line_l">月份</th>
	<th class="line_l">比率</th>
    <th class="line_l">收益</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('profitlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  <?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->getVariable('total')->value+(isset($_smarty_tpl->tpl_vars['row']->value['profit']) ? $_smarty_tpl->tpl_vars['row']->value['profit'] : null), null, null);?>
  <tr overstyle='on' id="profit_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month']) ? $_smarty_tpl->tpl_vars['row']->value['month'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['percent']) ? $_smarty_tpl->tpl_vars['row']->value['percent'] : null);?>
</td>
	  	<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['profit']) ? $_smarty_tpl->tpl_vars['row']->value['profit'] : null)==0){?>待计算...<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['profit']) ? $_smarty_tpl->tpl_vars['row']->value['profit'] : null);?>
<?php }?></td>
 </tr>
 <?php }} ?>
 <tr style="background-color:#FE6E47;">
    <td>合计</td>
	<td colspan="1">&nbsp;</td>
	<td><?php if ($_smarty_tpl->getVariable('total')->value==0){?>待计算...<?php }else{ ?><?php echo $_smarty_tpl->getVariable('total')->value;?>
<?php }?></td>
  </tr>
 </table>
 </div>

</div>

<!-->
<script>
	//鼠标移动表格效果
	$(document).ready(function(){
		$("tr[overstyle='on']").hover(
		  function () {
		    $(this).addClass("bg_hover");
		  },
		  function () {
		    $(this).removeClass("bg_hover");
		  }
		);
	});
	
	function folder(type, _this) {
		$('#search_'+type).slideToggle('fast');
		if ($(_this).html() == '展开') {
			$(_this).html('收起');
		}else {
			$(_this).html('展开');
		}
		
	}
</script>
<!-->

</body>
</html>