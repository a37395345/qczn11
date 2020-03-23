<?php /* Smarty version Smarty-3.0.4, created on 2019-05-07 11:43:30
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/renshi/index.html" */ ?>
<?php /*%%SmartyHeaderCode:212205cd0fee2a54942-51252215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '866655a7eac640b49f13d7a18266384ece42e2e0' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/renshi/index.html',
      1 => 1557200515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212205cd0fee2a54942-51252215',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert title here</title>
<link href="../../../css/style.css" rel="stylesheet" type="text/css" />
<link href="../../../css/header.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../../js/jquery.js"></script>
</head>
<body style="width: 100%">
<style>
	.a2{
		width: 45%;float: left;margin-left: 2%;
	}
	table{
		margin-left: 2%;float: left;
	}
</style>
<div class="so_main" style="width:70%;float: left;margin-left:2%;margin-right:2%;">
	<div class="page_tit">员工状态一览表</div>
		<div class="Toolbar_inbox_2 a2">
  			<div class="page ">合同快要到期的员工</div>
		</div>
		<div class="Toolbar_inbox_3 a2">
  			<div class="page ">快要到过试用期的员工</div>
		</div>
		<div class="list">
		<table id="maint" width="45%" border="0" cellspacing="0" cellpadding="0" align="left">
		  <tr>
		    <th>序号</th>
			<th>员工姓名</th>
			<th>身份证号</th>
		    <th>合同开始日期</th>
		    <th>合同到期日期</th>
		    <th>合同剩余天数</th>
		    <th>操作</th>
		  </tr>
		  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
		  <tr>
		  	<td><?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)+1;?>
</td>
		  	<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_name']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_name'] : null);?>
</td>
		  	<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_num']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_num'] : null);?>
</td>
		  	<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_pactStartDate']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_pactStartDate'] : null);?>
</td>
		  	<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_pactEndDate']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_pactEndDate'] : null);?>
</td>
		  	<?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['tianshu']) ? $_smarty_tpl->tpl_vars['rows']->value['tianshu'] : null)<=0){?>
		  	<td style="color:red"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['tianshu']) ? $_smarty_tpl->tpl_vars['rows']->value['tianshu'] : null);?>
天</td>
		  	<?php }else{ ?>
		  	<td ><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['tianshu']) ? $_smarty_tpl->tpl_vars['rows']->value['tianshu'] : null);?>
天</td>
		  	<?php }?>
		  	<td><a href="zemp_xiangxi.php?id=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_id']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_id'] : null);?>
" target="blank">详细</a></td>
		  	

		  </tr>
		  <?php }} ?>
		</table>
		<table id="contract" width="45%" border="0" cellspacing="0" cellpadding="0" align="right">
		  <tr>
		    <th>序号</th>
			<th>员工姓名</th>
			<th>身份证号</th>
		    <th>合同开始日期</th>
		    <th>合同到期日期</th>
		    <th>试用期剩余天数</th>
		    <th>操作</th>
		  </tr>
		   <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list_linshi')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
		  <tr>
		  	<td><?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)+1;?>
</td>
		  	<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_name']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_name'] : null);?>
</td>
		  	<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_num']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_num'] : null);?>
</td>
		  	<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_pactStartDate']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_pactStartDate'] : null);?>
</td>
		  	<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_pactEndDate']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_pactEndDate'] : null);?>
</td>
		  	<?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['tianshu']) ? $_smarty_tpl->tpl_vars['rows']->value['tianshu'] : null)<=0){?>
		  	<td style="color:red"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['tianshu']) ? $_smarty_tpl->tpl_vars['rows']->value['tianshu'] : null);?>
天</td>
		  	<?php }else{ ?>
		  	<td ><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['tianshu']) ? $_smarty_tpl->tpl_vars['rows']->value['tianshu'] : null);?>
天</td>
		  	<?php }?>

		  	<td><a href="zemp_xiangxi.php?id=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_id']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_id'] : null);?>
" target="blank">详细</a></td>

		  </tr>
		  <?php }} ?>
		</table>
	</div>
	
</div>
<style>
	.a1{
		font-size: 20px;margin-top: 10px;width: 100%;border-bottom: 1px solid #cec7c7;
	}
</style>
<div style="width: 20%;float: left;padding-top: 1px;">
	<div class="page_tit">&nbsp;</div>
		<div class="Toolbar_inbox_2" style="width: 100%">
  			<div class="page ">员工状态列表</div>

		</div>
		<div class="a1"><a href="zemp_index.php?emp_zhuangtai=1">总人数：<?php echo $_smarty_tpl->getVariable('count_zong')->value;?>
</a></div>
		<div class="a1"><a href="zemp_index.php?emp_zhuangtai=2">在职人数：<?php echo $_smarty_tpl->getVariable('count_zaizhi')->value;?>
</a></div>
		<div class="a1"><a href="zemp_index.php?emp_zhuangtai=3">正式期人数：<?php echo $_smarty_tpl->getVariable('count_zhenshi')->value;?>
</a></div>
		<div class="a1"><a href="zemp_index.php?emp_zhuangtai=4">试用期人数：<?php echo $_smarty_tpl->getVariable('count_lishi')->value;?>
</a></div>
		<div class="a1"><a href="zemp_index.php?emp_zhuangtai=5">离职人数：<?php echo $_smarty_tpl->getVariable('count_lizhi')->value;?>
</a></div>
	</div>

</div>
</body>
</html>