<?php /* Smarty version Smarty-3.0.4, created on 2017-07-11 10:09:41
         compiled from "D:\web\site\templates\elsker\operator/business/selectemp.html" */ ?>
<?php /*%%SmartyHeaderCode:1913759643365f3d352-77631977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36e02a99a3bfc101b3cf0970b86d0d0632f5b15a' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/business/selectemp.html',
      1 => 1496654256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1913759643365f3d352-77631977',
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
</head>
<body>
<?php if ($_smarty_tpl->getVariable('sel_type')->value=='f'){?>
<div class="so_main">
	<div class="list">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr><th>合同号</th><th>承租人</th><th>开始时间</th><th>结束时间</th><th>使用车辆</th><th>驾驶员</th><th>行车线路</th><th>操作</th></tr>
	  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('empList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
	  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
">
	  	<tr>
	  		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_contractNum'] : null);?>
</td>
	  		<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null)==''){?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linker']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linker'] : null);?>
<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null);?>
<?php }?></td>
	  		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_startDate'] : null);?>
</td>
	  		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_endDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_endDate'] : null);?>
</td>
	  		<td>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
</td>
	  		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['siji']) ? $_smarty_tpl->tpl_vars['row']->value['siji'] : null);?>
</td>
	  		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_line']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_line'] : null);?>
</td>
	  		<td><a href="javaScript:sel_ok('<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linker']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linker'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_startDate'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_endDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_endDate'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paicheCar']) ? $_smarty_tpl->tpl_vars['row']->value['paicheCar'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paicheDriver']) ? $_smarty_tpl->tpl_vars['row']->value['paicheDriver'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['siji']) ? $_smarty_tpl->tpl_vars['row']->value['siji'] : null);?>
');">选择</a></td>
	  	</tr>  	
	 </tr>
	  <?php }} ?>
	 </table>
	</div>
</div>
<?php }elseif($_smarty_tpl->getVariable('sel_type')->value=='h'){?>
<div class="so_main">
	<div class="list">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr><th>合同号</th><th>承租人</th><th>开始时间</th><th>结束时间</th><th>使用车辆</th><th width="25%">行车线路</th><th>条款约定</th><th>操作</th></tr>
	  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('empList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
	  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
">
	  	<tr>
	  		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_contractNum'] : null);?>
</td>
	  		<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null)==''){?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linker']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linker'] : null);?>
<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null);?>
<?php }?></td>
	  		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_startDate'] : null);?>
</td>
	  		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_endDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_endDate'] : null);?>
</td>
	  		<td>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
</td>
	  		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_line']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_line'] : null);?>
</td>
	  		<td style="text-align:left;">
		    <?php  $_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['row']->value['paiche_itemlist']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_itemlist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row1']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['row1']->iteration=0;
if ($_smarty_tpl->tpl_vars['row1']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row1']->key => $_smarty_tpl->tpl_vars['row1']->value){
 $_smarty_tpl->tpl_vars['row1']->iteration++;
 $_smarty_tpl->tpl_vars['row1']->last = $_smarty_tpl->tpl_vars['row1']->iteration === $_smarty_tpl->tpl_vars['row1']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['last'] = $_smarty_tpl->tpl_vars['row1']->last;
?>
		    <?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['item_name']) ? $_smarty_tpl->tpl_vars['row1']->value['item_name'] : null);?>
:<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row1']->value['conv_result'] : null);?>
<?php if ((isset($_smarty_tpl->tpl_vars['row1']->value['item_calcu']) ? $_smarty_tpl->tpl_vars['row1']->value['item_calcu'] : null)==1&&(isset($_smarty_tpl->tpl_vars['row1']->value['item_caltype']) ? $_smarty_tpl->tpl_vars['row1']->value['item_caltype'] : null)==1){?>/<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['item_unit']) ? $_smarty_tpl->tpl_vars['row1']->value['item_unit'] : null);?>
<?php }?>
		    <?php if ((isset($_smarty_tpl->tpl_vars['row1']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row1']->value['conv_money'] : null)!=0){?><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['item_costname']) ? $_smarty_tpl->tpl_vars['row1']->value['item_costname'] : null);?>
:<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row1']->value['conv_money'] : null);?>
-已收:<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row1']->value['have_in_money'] : null);?>
<?php }?>
		    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['last']){?><?php }else{ ?><hr /><?php }?>
		    <?php }} ?></td>
	  		<td><a href="javaScript:sel_ok2('<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_contractNum'] : null);?>
');">选择</a></td>
	  	</tr>  	
	 </tr>
	  <?php }} ?>
	 </table>
	</div>
</div>
<?php }else{ ?>
<div>
<input type="hidden" id="sel_type" value="<?php echo $_smarty_tpl->getVariable('sel_type')->value;?>
" />
  	<ul class="<?php if ($_smarty_tpl->getVariable('sel_type')->value=='e'||$_smarty_tpl->getVariable('sel_type')->value=='d'||$_smarty_tpl->getVariable('sel_type')->value=='g'){?> newwindowdriver<?php }else{ ?> newwindowcar <?php }?>">
  	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('empList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  	<?php if ($_smarty_tpl->getVariable('sel_type')->value=='e'){?>
  	<li><a href="javascript:changeCounterMan('<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_id']) ? $_smarty_tpl->tpl_vars['row']->value['emp_id'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_id']) ? $_smarty_tpl->tpl_vars['row']->value['shop_id'] : null);?>
');"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</a></li>
  	<?php }elseif($_smarty_tpl->getVariable('sel_type')->value=='ee'){?>
  	<li><a href="javascript:changeServerMan('<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_id']) ? $_smarty_tpl->tpl_vars['row']->value['emp_id'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_id']) ? $_smarty_tpl->tpl_vars['row']->value['shop_id'] : null);?>
');"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</a></li>
  	<?php }elseif($_smarty_tpl->getVariable('sel_type')->value=='d'){?>
  	<li><a href="javascript:changeDriver('<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_id']) ? $_smarty_tpl->tpl_vars['row']->value['emp_id'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
','');"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</a></li>
  	<?php }elseif($_smarty_tpl->getVariable('sel_type')->value=='g'){?>
  	<li><a href="javascript:changeDriver('<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_id']) ? $_smarty_tpl->tpl_vars['row']->value['emp_id'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
','<?php echo $_smarty_tpl->getVariable('target_id')->value;?>
');"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</a></li>
  	<?php }elseif($_smarty_tpl->getVariable('sel_type')->value=='b'){?>
  	<li><a href="javascript:changeBrother('<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bro_id']) ? $_smarty_tpl->tpl_vars['row']->value['bro_id'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bro_name']) ? $_smarty_tpl->tpl_vars['row']->value['bro_name'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bro_linker']) ? $_smarty_tpl->tpl_vars['row']->value['bro_linker'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bro_phone']) ? $_smarty_tpl->tpl_vars['row']->value['bro_phone'] : null);?>
');"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bro_name']) ? $_smarty_tpl->tpl_vars['row']->value['bro_name'] : null);?>
</a></li>
  	<?php }elseif($_smarty_tpl->getVariable('sel_type')->value=='j'){?>
  	<li><a href="javascript:changeCar('<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
','<?php echo $_smarty_tpl->getVariable('target_id')->value;?>
');"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_name']) ? $_smarty_tpl->tpl_vars['row']->value['car_name'] : null);?>
</a></li>
  	<?php }elseif($_smarty_tpl->getVariable('sel_type')->value=='k'){?>
  	<li><a href="javascript:changeCar2('<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_cartDate']) ? $_smarty_tpl->tpl_vars['row']->value['car_cartDate'] : null);?>
');"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_name']) ? $_smarty_tpl->tpl_vars['row']->value['car_name'] : null);?>
</a></li>
  	<?php }else{ ?>
  	<li><a href="javascript:changeCar('<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_name']) ? $_smarty_tpl->tpl_vars['row']->value['car_name'] : null);?>
','');"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_name']) ? $_smarty_tpl->tpl_vars['row']->value['car_name'] : null);?>
</a></li>
  	<?php }?>
  	<?php }} ?>
  	</ul>
</div>
<?php }?>
<script language="javascript">
function changeCounterMan(id,v,sid){
	if (typeof(window.parent.window.paicheCounterMan2) != "undefined"){
		window.parent.window.paicheCounterMan2.value=id;
		window.parent.window.paicheCounterMan.value=v;
		var all_options = window.parent.window.paicheCounterShop.options;
	}else{
		window.parent.window.document.getElementById("paicheCounterMan2").value=id;
		window.parent.window.document.getElementById("paicheCounterMan").value=v;
		var all_options = window.parent.window.document.getElementById("paicheCounterShop").options;
	}
	
	for (i=0; i<all_options.length; i++){
      if (all_options[i].value == sid)  // 根据option标签的ID来进行判断  测试的代码这里是两个等号
      {
         all_options[i].selected = true;
      }
    }
	
	window.parent.window.jBox.close();
}
function changeServerMan(id,v,sid){
	if (typeof(window.parent.window.paicheCounterMan2) != "undefined"){
		window.parent.window.paicheServerMan2.value=id;
		window.parent.window.paicheServerMan.value=v;
		var all_options = window.parent.window.shop_id.options;
	}else{
		window.parent.window.document.getElementById("paicheServerMan2").value=id;
		window.parent.window.document.getElementById("paicheServerMan").value=v;
		var all_options = window.parent.window.document.getElementById("shop_id").options;
	}
	for (i=0; i<all_options.length; i++){
	      if (all_options[i].value == sid)  // 根据option标签的ID来进行判断  测试的代码这里是两个等号
	      {
	         all_options[i].selected = true;
	      }
	}
	window.parent.window.jBox.close();
}
function changeDriver(id,v,tid){
	if (tid==""){
		if (typeof(window.parent.window.paicheDriver2) != "undefined"){
			window.parent.window.paicheDriver2.value=id;
			window.parent.window.paicheDriver.value=v;
		}else{
			window.parent.window.document.getElementById("paicheDriver2").value=id;
			window.parent.window.document.getElementById("paicheDriver").value=v;
		}
	}else{
		window.parent.window.document.getElementById("driveDriver2_"+tid).value=id;
		window.parent.window.document.getElementById("driveDriver_"+tid).value=v;
	}
	
	window.parent.window.jBox.close();
}
function changeCar(id,v,tid){
	if (tid==""){
		if (typeof(window.parent.window.paicheDriver2) != "undefined"){
			window.parent.window.paicheCar2.value=id;
			window.parent.window.paicheCar.value=v;
		}else{
			window.parent.window.document.getElementById("paicheCar2").value=id;
			window.parent.window.document.getElementById("paicheCar").value=v;
		}
		
		if (typeof(window.parent.window.shunt) != "undefined"){
			window.parent.window.shunt.value=0;
		}else{
			if (typeof(window.parent.window.document.getElementById("shunt")) != "undefined" && typeof(window.parent.window.document.getElementById("shunt")) !="object"){
				window.parent.window.document.getElementById("shunt").value=0;
			}
		}
	}else{
		window.parent.window.document.getElementById("driveCar2_"+tid).value=id;
		window.parent.window.document.getElementById("driveCar_"+tid).value=v;
	}
	

	window.parent.window.jBox.close();
}
function changeCar2(id,v,tid){
		if (typeof(window.parent.window.paicheDriver2) != "undefined"){
			window.parent.window.paicheCar2.value=id;
			window.parent.window.paicheCar.value="苏D"+v;
			window.parent.window.car_cartDate.value=tid;
		}else{
			window.parent.window.document.getElementById("paicheCar2").value=id;
			window.parent.window.document.getElementById("paicheCar").value="苏D"+v;
			window.parent.window.document.getElementById("car_cartDate").value=tid;
		}
	window.parent.window.jBox.close();
}
function changeBrother(id,v,v1,v2){
	if (typeof(window.parent.window.shuntCom2) != "undefined"){
		window.parent.window.shuntCom2.value=id;
		window.parent.window.shuntCom.value=v;
		window.parent.window.shunt_driver.value=v1;
		window.parent.window.shunt_driverPhone.value=v2;
	}else{
		window.parent.window.document.getElementById("shuntCom2").value=id;
		window.parent.window.document.getElementById("shuntCom").value=v;
		window.parent.window.document.getElementById("shunt_driver").value=v1;
		window.parent.window.document.getElementById("shunt_driverPhone").value=v2;
	}
	if (typeof(window.parent.window.shunt) != "undefined"){
		window.parent.window.shunt.value=1;
	}else{
		if (typeof(window.parent.window.document.getElementById("shunt")) != "undefined"){
			window.parent.window.document.getElementById("shunt").value=1;
		}
	}
	window.parent.window.jBox.close();
}
function sel_ok(id,v1,v2,v3,v4,v5,v6,v7,v8){
	if (typeof(window.parent.window.paiche_id) != "undefined"){
		window.parent.window.paiche_id.value=id;
		window.parent.window.paiche_startDate.value=v3;
		window.parent.window.paiche_endDate.value=v4;
		window.parent.window.paicheCar.value="苏D"+v5;
		window.parent.window.paicheCar2.value=v6;
	}else{
		window.parent.window.document.getElementById("paiche_id").value=id;
		window.parent.window.document.getElementById("paiche_startDate").value=v3;
		window.parent.window.document.getElementById("paiche_endDate").value=v4;
		window.parent.window.document.getElementById("paicheCar").value="苏D"+v5;
		window.parent.window.document.getElementById("paicheCar2").value=v6;
	}
	if (v1==""){
		if (typeof(window.parent.window.paiche_linker) != "undefined"){
			window.parent.window.paiche_linker.value=v2;
		}else{
			window.parent.window.document.getElementById("paiche_linker").value=v2;
		}
	}else{
		if (typeof(window.parent.window.paiche_linker) != "undefined"){
			window.parent.window.paiche_linker.value=v1;
		}else{
			window.parent.window.document.getElementById("paiche_linker").value=v1;
		}
	}
	if (typeof(window.parent.window.paicheDriver) != "undefined"){
		window.parent.window.paicheDriver2.value=v7;
		window.parent.window.paicheDriver.value=v8;
	}else{
		if (typeof(window.parent.window.document.getElementById("paicheDriver2")) != "undefined"){
			window.parent.window.document.getElementById("paicheDriver2").value=v7;
			window.parent.window.document.getElementById("paicheDriver").value=v8;
		}
	}
	
	window.parent.window.jBox.close();
}
function sel_ok2(id,v1){
    
	if (typeof(window.parent.window.baoxiaoPaicheContractId) != "undefined"){
		window.parent.window.baoxiaoPaicheContractId.value=id;
		window.parent.window.baoxiaoPaicheContractNum.value=v1;
	}else{
		window.parent.window.document.getElementById("baoxiaoPaicheContractId").value=id;
		window.parent.window.document.getElementById("baoxiaoPaicheContractNum").value=v1;
	}
	window.parent.window.jBox.close();
}
</script>
</body>
</html>