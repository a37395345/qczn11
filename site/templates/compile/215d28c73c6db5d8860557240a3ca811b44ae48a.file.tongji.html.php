<?php /* Smarty version Smarty-3.0.4, created on 2019-04-16 14:40:46
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/wenti/tongji.html" */ ?>
<?php /*%%SmartyHeaderCode:2635cb578ee924f51-60111874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '215d28c73c6db5d8860557240a3ca811b44ae48a' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/wenti/tongji.html',
      1 => 1555396833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2635cb578ee924f51-60111874',
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
<link href="../../../css/flbao.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
</head>
<body>
<div class="so_main">
  <div class="page_tit">系统问题统计</div>
  <div class="list">
            <table width="100%" border="1" cellspacing="0" cellpadding="0">
            <tbody>
            <tr style="height:70px;">
			    <td class="ccc_bg" width="14.2%" style="font-size: 16px;">全部</td>
			    <td class="ccc_bg" width="14.2%" style="font-size: 16px;">等待审核</td>
			    <td class="ccc_bg" width="14.2%" style="font-size: 16px;">发回修改</td>
			     <td class="ccc_bg" width="14.2%" style="font-size: 16px;">等待处理</td>
			      <td class="ccc_bg" width="14.2%" style="font-size: 16px;">等待确认</td>
			       <td class="ccc_bg" width="14.2%" style="font-size: 16px;">问题解决</td>
			        <td class="ccc_bg" width="14.2%" style="font-size: 16px;">不能解决</td>
			</tr>
		  	<tr style="height:80px;">

		  		<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
			    <td style="text-align:center;background-color:#B1C9FF;font-size: 16px;"><a href="list.php?lsi_id=<?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value) ? $_smarty_tpl->tpl_vars['rows']->value : null);?>
</a>
			    </td>
			    <?php }} ?>
			</tr>
		    </tbody>
            </table>
  </div>

</div>

</body>
</html>