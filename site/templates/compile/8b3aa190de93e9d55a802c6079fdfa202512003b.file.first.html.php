<?php /* Smarty version Smarty-3.0.4, created on 2019-03-22 17:41:46
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/sales/consult/first.html" */ ?>
<?php /*%%SmartyHeaderCode:237915c94addad19b84-93819019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b3aa190de93e9d55a802c6079fdfa202512003b' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/sales/consult/first.html',
      1 => 1479967423,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237915c94addad19b84-93819019',
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
<link href="../../../../css/flbao.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<script type="text/javascript" src="../../../../js/jsapi.js"></script>
<script type="text/javascript" src="../../../../js/corechart.js"></script>		
<script type="text/javascript" src="../../../../js/jquery.gvChart-1.0.1.min.js"></script>
<script type="text/javascript" src="../../../../js/jquery.ba-resize.min.js"></script>
</head>
<body>
<div class="so_main">
  <div class="page_tit">用车业务咨询登记一览</div>
  <div class="list">
            <table width="100%" border="1" cellspacing="0" cellpadding="0">
            <tbody>
            <tr style="height:70px;">
			    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('first')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
			    <td class="ccc_bg" width="20%" style="font-size: 16px;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['consult_result_name']) ? $_smarty_tpl->tpl_vars['row']->value['consult_result_name'] : null);?>
</td>
			    <?php }} ?>
			</tr>
		  	<tr style="height:80px;">
			    <?php  $_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('first')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row1']->key => $_smarty_tpl->tpl_vars['row1']->value){
?>
			    <?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->getVariable('total')->value+(isset($_smarty_tpl->tpl_vars['row1']->value['nCount']) ? $_smarty_tpl->tpl_vars['row1']->value['nCount'] : null), null, null);?>
			    <td style="text-align:center;background-color:#B1C9FF;font-size: 16px;"><a href="list.php?search_status=<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['consult_result']) ? $_smarty_tpl->tpl_vars['row1']->value['consult_result'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['nCount']) ? $_smarty_tpl->tpl_vars['row1']->value['nCount'] : null);?>
</a></td>
			    <?php }} ?>
			  </tr>
		    </tbody>
            </table>
            <table id='myTable5'>
			<caption>各状态分布</caption>
			<thead>
				<tr>
					<th></th>
					<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('first')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
					<th><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['consult_result_name']) ? $_smarty_tpl->tpl_vars['row']->value['consult_result_name'] : null);?>
</th>
					<?php }} ?>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th><?php echo $_smarty_tpl->getVariable('total')->value;?>
</th>
					<?php  $_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('first')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row1']->key => $_smarty_tpl->tpl_vars['row1']->value){
?>
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['nCount']) ? $_smarty_tpl->tpl_vars['row1']->value['nCount'] : null);?>
</td>
					<?php }} ?>
				</tr>
			</tbody>
		</table>
  </div>

</div>
<!-->
<script type="text/javascript">
gvChartInit();
$(document).ready(function(){
	$('#myTable5').gvChart({
		chartType: 'PieChart',
		gvSettings: {
			vAxis: {title: 'No of players'},
			hAxis: {title: 'Month'},
			width: 600,
			height: 350
		}
	});
});
</script>
<!-->
</body>
</html>