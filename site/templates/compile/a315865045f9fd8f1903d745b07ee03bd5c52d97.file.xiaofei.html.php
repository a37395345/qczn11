<?php /* Smarty version Smarty-3.0.4, created on 2019-07-24 14:12:55
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/zijia_linshi/xiaofei.html" */ ?>
<?php /*%%SmartyHeaderCode:315285d37f6e771fc52-85661930%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a315865045f9fd8f1903d745b07ee03bd5c52d97' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/zijia_linshi/xiaofei.html',
      1 => 1563948766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315285d37f6e771fc52-85661930',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>合同打印</title>
<link href="../../../css/pact.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../../js/jquery.js"></script>

<script language="javascript">



function printme()

{   document.body.innerHTML=document.getElementById('iepage1').innerHTML;

    window.print();

}

</script>
</head>
<body>

<div class="iepage1" id="iepage1" style="height: 1550px;width:100%">
<!--startprint1-->
<div style="width:125px;height:45px;position:relative;left: 85%;top: 20px">
  <img src="../../../css/logo.png" width="145" height="50" border="0">
</div>
<input type="button" id="bt1" value="打印">
<h1 style="text-align: center;margin: 0">租车消费清单 </h1>
<p style="line-height:0px;font-size: 19px;"><b>合同号：</b><?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_contractNum']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_contractNum'] : null);?>
</p>
<table border="1" cellspacing="0" cellpadding="0" width="100%" class="table" style="text-align:center;border:#c4c4c4 solid 1px;line-height:0px;font-size: 19px;">
  <tr>
    <td><p>费用名称</p></td>
    <td><p>费用金额</p></td>
  </tr>
  <?php $_smarty_tpl->tpl_vars['money_a'] = new Smarty_variable(0, null, null);?>
 <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('feiyong')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
 <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['charge_id']) ? $_smarty_tpl->tpl_vars['row']->value['charge_id'] : null)!=1){?>
 <?php $_smarty_tpl->tpl_vars['money_a'] = new Smarty_variable($_smarty_tpl->getVariable('money_a')->value+(isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null), null, null);?>
  <tr>
    <td><p><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null);?>
</p></td>
    <td><p><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
</p></td>
  </tr>
  <?php }?>
<?php }} ?>


 

  
  
</table>
<table border="1" cellspacing="0" cellpadding="0" width="100%" class="table" style="text-align:center;border:#c4c4c4 solid 1px;line-height:0px;font-size: 19px;margin-top: 20px">
<tr>
    <td><p>优惠项目</p></td>
    <td><p>优惠金额</p></td>
  </tr>
  <?php $_smarty_tpl->tpl_vars['money_b'] = new Smarty_variable(0, null, null);?>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('youhui')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
 <?php $_smarty_tpl->tpl_vars['money_b'] = new Smarty_variable($_smarty_tpl->getVariable('money_b')->value+(isset($_smarty_tpl->tpl_vars['row']->value['youhui_omone']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_omone'] : null), null, null);?>
  <tr>
    <td><p><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_name']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_name'] : null);?>
</p></td>
    <td><p><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_omone']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_omone'] : null);?>
</p></td>
   
  </tr>
<?php }} ?>

</table>

<table border="1" cellspacing="0" cellpadding="0" width="100%" class="table" style="text-align:center;border:#c4c4c4 solid 1px;line-height:0px;font-size: 19px;margin-top: 20px">
  <tr>
    <td><p>合计费用：<?php echo $_smarty_tpl->getVariable('money_a')->value;?>
</p></td>
    <td><p>合计优惠：<?php echo $_smarty_tpl->getVariable('money_b')->value;?>
</p></td>
    <td><p>实际费用：<?php echo $_smarty_tpl->getVariable('money_a')->value-$_smarty_tpl->getVariable('money_b')->value;?>
</p></td>
  </tr>
</table>
</div>
<div class="" id="" style="height: 1px;width: 1200px"></div>
</body>
<script type="text/javascript">
  $("#bt1").click(function(){
    $(this).css("display","none");
  window.print();
});
</script>
</html>