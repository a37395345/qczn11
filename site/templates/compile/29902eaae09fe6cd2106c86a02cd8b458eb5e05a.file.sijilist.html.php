<?php /* Smarty version Smarty-3.0.4, created on 2014-09-21 13:18:24
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/employee/sijilist.html" */ ?>
<?php /*%%SmartyHeaderCode:17513541e5fa09c8930-14882788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29902eaae09fe6cd2106c86a02cd8b458eb5e05a' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/employee/sijilist.html',
      1 => 1411276700,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17513541e5fa09c8930-14882788',
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
<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>

</head>
<body>
<div class="so_main">
  <div class="page_tit">车辆当前状况一览表</div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
  <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->getVariable('count')->value+1, null, null);?>
  <?php if ($_smarty_tpl->getVariable('count')->value==9){?></tr><tr><?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(1, null, null);?><?php }?>
	<td width="12.5%">
	<table align="left" width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td style="border-bottom:0;">
		<div style="position: relative;">
		<a href="javascript:drivedetail(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_id']) ? $_smarty_tpl->tpl_vars['row']->value['emp_id'] : null);?>
);">
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['emp_photo']) ? $_smarty_tpl->tpl_vars['row']->value['emp_photo'] : null)==''){?><img src="../../../images/nopic2.png" width="120" height="160" />
		<?php }else{ ?><img src="../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_photo']) ? $_smarty_tpl->tpl_vars['row']->value['emp_photo'] : null);?>
" width="120" height="160" /><?php }?>
		</a>
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['emp_status']) ? $_smarty_tpl->tpl_vars['row']->value['emp_status'] : null)==1){?>
		<div style="position: absolute;top:90px;left:72px;">
		<a href="javascript:cardetail(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
);" title="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
">
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_photo']) ? $_smarty_tpl->tpl_vars['row']->value['car_photo'] : null)==''){?><img src="../../../images/nopic.png" width="50" height="70"/>
		<?php }else{ ?><img src="../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_photo']) ? $_smarty_tpl->tpl_vars['row']->value['car_photo'] : null);?>
" width="50" height="70" /><?php }?></a>
	  	</div>
	  	<?php }?>
		</div></td>
	</tr>
	<tr>
		<td style="border-bottom:0;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['emp_status']) ? $_smarty_tpl->tpl_vars['row']->value['emp_status'] : null)==1){?>(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
)<?php }?></td>
	</tr>
	</table>
	</td>
  <?php }} ?>
  </tr>
 </table>
 </div>
</div>
<!-->
<script>

function cardetail(uid){
	demo_iframe('../machine/list.php?task=detail&uid='+uid,'车辆详细资料',500,480,'login_js');
}
function drivedetail(uid){
	demo_iframe('list.php?task=detail&uid='+uid,'驾驶员详细资料',500,480,'login_js');
}

</script>
<!-->

</body>
</html>