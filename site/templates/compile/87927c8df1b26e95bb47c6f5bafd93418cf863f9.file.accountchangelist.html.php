<?php /* Smarty version Smarty-3.0.4, created on 2019-11-06 10:18:30
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/report/accountchangelist.html" */ ?>
<?php /*%%SmartyHeaderCode:254845dc22d76e7e147-68585159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87927c8df1b26e95bb47c6f5bafd93418cf863f9' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/report/accountchangelist.html',
      1 => 1571707185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '254845dc22d76e7e147-68585159',
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

</head>
<body>
<div class="so_main">
  <div class="page_tit">账户资金变动记录</div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th>序号</th>
	<th>类型</th>
	<th>发生日期</th>
	<th>付款方式</th>
	<th>付款账户</th>
	<th>发生金额</th>
	<th>收款方式</th>
	<th>收款账户</th>
	<th>备注说明</th>
	<th>经手人</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
	  	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
	  	<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['change_type']) ? $_smarty_tpl->tpl_vars['row']->value['change_type'] : null)==1){?>其他收入<?php }else{ ?>资金账户变动<?php }?></td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['add_time']) ? $_smarty_tpl->tpl_vars['row']->value['add_time'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['payment_from_name']) ? $_smarty_tpl->tpl_vars['row']->value['payment_from_name'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_from_name']) ? $_smarty_tpl->tpl_vars['row']->value['bank_from_name'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['payment_to_name']) ? $_smarty_tpl->tpl_vars['row']->value['payment_to_name'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_to_name']) ? $_smarty_tpl->tpl_vars['row']->value['bank_to_name'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['input_man']) ? $_smarty_tpl->tpl_vars['row']->value['input_man'] : null);?>
</td>
 </tr>
 <?php }} ?>
 </table>
 </div>

  <div class="Toolbar_inbox">
	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
	&nbsp;
  </div> 
</div>
<!-->
<script>
	//鼠标移动表格效果
	$(document).ready(function(){
        $("a.zoomIn").fancybox({
            'overlayShow'   : false,
            'transitionIn'  : 'elastic',
            'transitionOut' : 'elastic'
        });         
        
		$("tr[overstyle='on']").hover(
		  function () {
		    $(this).addClass("bg_hover");
		  },
		  function () {
		    $(this).removeClass("bg_hover");
		  }
		);
	});
	
	function checkon(o){
		if( o.checked == true ){
			$(o).parents('tr').addClass('bg_on') ;
		}else{
			$(o).parents('tr').removeClass('bg_on') ;
		}
	}
	
	function checkAll(o){
		if( o.checked == true ){
			$('input[name="checkbox"]').attr('checked','true');
			$('tr[overstyle="on"]').addClass("bg_on");
		}else{
			$('input[name="checkbox"]').removeAttr('checked');
			$('tr[overstyle="on"]').removeClass("bg_on");
		}
	}
	
</script>
<!-->

</body>
</html>