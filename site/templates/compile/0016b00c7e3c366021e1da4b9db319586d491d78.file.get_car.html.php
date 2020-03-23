<?php /* Smarty version Smarty-3.0.4, created on 2019-05-31 15:09:57
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/business/get_car.html" */ ?>
<?php /*%%SmartyHeaderCode:106145cf0d3458fd0e9-33089969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0016b00c7e3c366021e1da4b9db319586d491d78' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/business/get_car.html',
      1 => 1559286592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106145cf0d3458fd0e9-33089969',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<link href="../../../css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
	html{
		background-color: #908c8c;
	}
</style>
</head>
<body>

<div style="">
  	<ul class="newwindowcar" >
  	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('car_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  	<li><a style="color: #ffffff" href="javascript:changeCar('<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_color']) ? $_smarty_tpl->tpl_vars['row']->value['car_color'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_brand']) ? $_smarty_tpl->tpl_vars['row']->value['car_brand'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_type']) ? $_smarty_tpl->tpl_vars['row']->value['car_type'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_motor']) ? $_smarty_tpl->tpl_vars['row']->value['car_motor'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_frame']) ? $_smarty_tpl->tpl_vars['row']->value['car_frame'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_chaoshi']) ? $_smarty_tpl->tpl_vars['row']->value['plan_chaoshi'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_deposit']) ? $_smarty_tpl->tpl_vars['row']->value['plan_deposit'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['xianzhikm']) ? $_smarty_tpl->tpl_vars['row']->value['xianzhikm'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_rentamount']) ? $_smarty_tpl->tpl_vars['row']->value['plan_rentamount'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_chaokm_a']) ? $_smarty_tpl->tpl_vars['row']->value['plan_chaokm_a'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_chaokms']) ? $_smarty_tpl->tpl_vars['row']->value['plan_chaokms'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_chaokmy']) ? $_smarty_tpl->tpl_vars['row']->value['plan_chaokmy'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
');"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
-<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_color']) ? $_smarty_tpl->tpl_vars['row']->value['car_color'] : null);?>
-<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_brand']) ? $_smarty_tpl->tpl_vars['row']->value['car_brand'] : null);?>
-<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_type']) ? $_smarty_tpl->tpl_vars['row']->value['car_type'] : null);?>
</a></li>
  	<?php }} ?>
  	</ul>

</div>
<script language="javascript">



function changeCar(id,car_num,car_color,car_brand,car_type,car_motor,car_frame,plan_chaoshi,plan_deposit,xianzhikm,plan_rentamount,plan_chaokm_a,plan_chaokms,plan_chaokmy,car_id){
	
		window.parent.window.document.getElementById("car_num").value="苏D"+car_num;
		window.parent.window.document.getElementById("car_color").value=car_color;
		window.parent.window.document.getElementById("car_brand").value=car_brand;
		window.parent.window.document.getElementById("car_type").value=car_type;
		window.parent.window.document.getElementById("car_motor").value=car_motor;
		window.parent.window.document.getElementById("car_frame").value=car_frame;
		window.parent.window.document.getElementById("plan_rentamount").value=plan_rentamount;

		window.parent.window.document.getElementById("paiche_overTime_a").value=plan_chaoshi+"元/小时";
		window.parent.window.document.getElementById("paiche_overTime").value=plan_chaoshi;
		window.parent.window.document.getElementById("paiche_deposit").value=plan_deposit;
		window.parent.window.document.getElementById("xianzhikm").value=xianzhikm;

		window.parent.window.document.getElementById("paiche_unlimitKm").value=plan_chaokm_a;
		window.parent.window.document.getElementById("paiche_limitKm").value=plan_chaokms;
		window.parent.window.document.getElementById("paiche_overKm").value=plan_chaokmy;
		window.parent.window.document.getElementById("paicheCar").value=car_id;
		
		window.parent.window.document.getElementById("paicheCars").value="苏D"+car_num+"-"+car_color+"-"+car_brand+"-"+car_type;
		
	
	window.parent.window.jBox.close();

}

</script>
</body>
</html>