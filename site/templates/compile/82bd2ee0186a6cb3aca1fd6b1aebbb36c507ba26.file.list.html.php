<?php /* Smarty version Smarty-3.0.4, created on 2014-09-14 10:01:05
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/finance/monthaccount/list.html" */ ?>
<?php /*%%SmartyHeaderCode:119825414f6e1c6a2b5-04082812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82bd2ee0186a6cb3aca1fd6b1aebbb36c507ba26' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/finance/monthaccount/list.html',
      1 => 1410660059,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119825414f6e1c6a2b5-04082812',
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
  <div class="page_tit">长期用车月结清单</div>

  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th>序号</th>
	<th>单位</th>
	<th>结账月份</th>
	<th>结算金额</th>
	<th>开票金额</th>
	<th>发票号码</th>
	<th>开票日期</th>
	<th class="line_l">操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month_id']) ? $_smarty_tpl->tpl_vars['row']->value['month_id'] : null);?>
">    	
	  	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month_year']) ? $_smarty_tpl->tpl_vars['row']->value['month_year'] : null);?>
年<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month_month']) ? $_smarty_tpl->tpl_vars['row']->value['month_month'] : null);?>
月</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_infact']) ? $_smarty_tpl->tpl_vars['row']->value['settle_infact'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_billMoney']) ? $_smarty_tpl->tpl_vars['row']->value['settle_billMoney'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_billNum']) ? $_smarty_tpl->tpl_vars['row']->value['settle_billNum'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_billDate']) ? $_smarty_tpl->tpl_vars['row']->value['settle_billDate'] : null);?>
</td>
		<td><a href="javascript:month(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month_id']) ? $_smarty_tpl->tpl_vars['row']->value['month_id'] : null);?>
);">结算</a></td>
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
	
	function month(uid){
		demo_iframe('list.php?task=month&uid='+uid,'月结结算',600,350,'login_js');
	}

</script>
<!-->

</body>
</html>