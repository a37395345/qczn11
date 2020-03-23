<?php /* Smarty version Smarty-3.0.4, created on 2014-08-20 09:31:15
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/fitting/outlist.html" */ ?>
<?php /*%%SmartyHeaderCode:1391653f3fa63336974-91646147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89635a4ed32c48526670691b790c34f8bde029c5' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/fitting/outlist.html',
      1 => 1408498269,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1391653f3fa63336974-91646147',
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
<script type="text/javascript" src="../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
</head>
<body>
<div class="so_main">
  <div class="page_tit">配件领用记录</div>
  <div class="Toolbar_inbox">
  	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
    <a href="list.php" class="btn_a"><span>返回</span></a>
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th>领用日期</th>
	<th>领用人</th>
	<th style="text-align:left;">详细</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
  <tr overstyle='on' >
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_outdate']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_outdate'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_outman']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_outman'] : null);?>
</td>
	    <td style="text-align:left;">
	    <table align="left">
	    <tr>
		    <th>配件名称</th>
			<th>品牌</th>
			<th>型号规格</th>
			<th>数量</th>
			<th>单位</th>
			<th>用途</th>
	    </tr>
	    <?php  $_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['row']->value['fitting_list']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_list'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row1']->key => $_smarty_tpl->tpl_vars['row1']->value){
?>
	    <tr>
		    <td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['fitting_name']) ? $_smarty_tpl->tpl_vars['row1']->value['fitting_name'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['fitting_brand']) ? $_smarty_tpl->tpl_vars['row1']->value['fitting_brand'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['fitting_model']) ? $_smarty_tpl->tpl_vars['row1']->value['fitting_model'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['fitting_outnum']) ? $_smarty_tpl->tpl_vars['row1']->value['fitting_outnum'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['fitting_unit']) ? $_smarty_tpl->tpl_vars['row1']->value['fitting_unit'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['fitting_remark']) ? $_smarty_tpl->tpl_vars['row1']->value['fitting_remark'] : null);?>
</td>
 		</tr>
	    <?php }} ?>
	    </table>
	    </td>
 </tr>
 <?php }} ?>
 </table>
 </div>

  <div class="Toolbar_inbox">
	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
	<a href="list.php" class="btn_a"><span>返回</span></a>
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