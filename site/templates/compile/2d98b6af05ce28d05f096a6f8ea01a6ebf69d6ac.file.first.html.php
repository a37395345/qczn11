<?php /* Smarty version Smarty-3.0.4, created on 2019-04-11 10:17:17
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/gps/first.html" */ ?>
<?php /*%%SmartyHeaderCode:130855caea3adccac29-75254523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d98b6af05ce28d05f096a6f8ea01a6ebf69d6ac' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/gps/first.html',
      1 => 1495001092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130855caea3adccac29-75254523',
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
  <div class="page_tit">车辆GPS</div>
  <div class="list">
            <table width="100%" border="1" cellspacing="0" cellpadding="0">
            <tbody>
            <tr style="height:70px;">
			    <td class="ccc_bg" width="33%" style="font-size: 16px;">公司现有车辆</td>
			    <td class="ccc_bg" width="33%" style="font-size: 16px;">已出售但未过户车辆</td>
			    <td class="ccc_bg" width="33%" style="font-size: 16px;">已出售已过户车辆</td>
			</tr>
		  	<tr style="height:80px;">
			    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('first')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
			    <td style="text-align:center;background-color:#B1C9FF;font-size: 16px;"><a href="list.php?car_status=0"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['nCount1']) ? $_smarty_tpl->tpl_vars['row']->value['nCount1'] : null)+(isset($_smarty_tpl->tpl_vars['row']->value['nCount2']) ? $_smarty_tpl->tpl_vars['row']->value['nCount2'] : null);?>
</a></td>
			    <td style="text-align:center;background-color:#FE6E47;font-size: 16px;"><a href="list.php?car_status=3"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['nCount3']) ? $_smarty_tpl->tpl_vars['row']->value['nCount3'] : null);?>
</a></td>
			    <td style="text-align:center;background-color:#B1C9FF;font-size: 16px;"><a href="list.php?car_status=4"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['nCount4']) ? $_smarty_tpl->tpl_vars['row']->value['nCount4'] : null);?>
</a></td>
			    <?php }} ?>
			  </tr>
		    </tbody>
            </table>
  </div>

</div>

</body>
</html>