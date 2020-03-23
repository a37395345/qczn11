<?php /* Smarty version Smarty-3.0.4, created on 2019-03-21 08:56:09
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/report/otherdetail.html" */ ?>
<?php /*%%SmartyHeaderCode:267605c92e129ee6ec0-48875709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c8652e329084f08bad7661535a09817c968d77b' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/report/otherdetail.html',
      1 => 1535165914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '267605c92e129ee6ec0-48875709',
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
<script type="text/javascript" src="../../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
</head>
<body>
<div class="so_main">
  <div class="page_tit">其他收入(<?php echo $_smarty_tpl->getVariable('b_type')->value;?>
)明细---时间范围：<?php echo $_smarty_tpl->getVariable('sdate')->value;?>
&nbsp;&nbsp;到&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('edate')->value;?>
</div>
 <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable(0, null, null);?>
 <div class="Toolbar_inbox"><span><?php echo $_smarty_tpl->getVariable('b_type')->value;?>
</span></div>
 <div class="list">
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="table-layout:fixed;word-wrap:break-word;word-break:break-all;">
  <tr>
    <th style="width:30px;">序号	</th>
	<th width="200">时间</th>
	<th width="50%">名称</th>
	<th>金额</th>
	<th>方式</th>
	<th>账户</th>
	<th>单号</th>
	<th>门店</th>
	<th>备注说明</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list6')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable($_smarty_tpl->getVariable('all_money')->value+(isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null), null, null);?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
    	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['add_time']) ? $_smarty_tpl->tpl_vars['row']->value['add_time'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['payment_name']) ? $_smarty_tpl->tpl_vars['row']->value['payment_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_name']) ? $_smarty_tpl->tpl_vars['row']->value['bank_name'] : null);?>
</td>
		<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['break_id']) ? $_smarty_tpl->tpl_vars['row']->value['break_id'] : null)!=0){?><a href="../../machine/modify.php?task=breakdetail&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['break_id']) ? $_smarty_tpl->tpl_vars['row']->value['break_id'] : null);?>
" target="_blank"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bill_code']) ? $_smarty_tpl->tpl_vars['row']->value['bill_code'] : null);?>
</a><?php }else{ ?><a href="../../finance/change/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bill_id']) ? $_smarty_tpl->tpl_vars['row']->value['bill_id'] : null);?>
" target="_blank"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bill_code']) ? $_smarty_tpl->tpl_vars['row']->value['bill_code'] : null);?>
</a><?php }?></td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['remark']) ? $_smarty_tpl->tpl_vars['row']->value['remark'] : null);?>
</td>
  </tr>
  <?php }} ?>
  <tr style="background-color:#FE6E47;">
    <td colspan="3">合计	</td>
	<td><?php echo $_smarty_tpl->getVariable('all_money')->value;?>
</td>
	<td colspan="5"></td>
  </tr>
 </table>
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
	

</script>
<!-->

</body>
</html>