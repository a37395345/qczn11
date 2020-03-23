<?php /* Smarty version Smarty-3.0.4, created on 2019-10-10 14:05:17
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/update/update_a.html" */ ?>
<?php /*%%SmartyHeaderCode:12583020275d9eca1d5c65f5-05353482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '621663e5faf5e0cec22daaf5cd3b50f622f320d6' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/update/update_a.html',
      1 => 1569749241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12583020275d9eca1d5c65f5-05353482',
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
<link href="../../../css/box.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/laydate/laydate.js"></script>


</head>
<body>
	
		<br/><br/><br/>
		<form action="update_b.php" method="post">
			<input type="hidden" name="uid" value="<?php echo $_smarty_tpl->getVariable('uid')->value;?>
">
			<input type="hidden" name="table" value="<?php echo $_smarty_tpl->getVariable('table')->value;?>
">
			<input type="hidden" name="name" value="<?php echo $_smarty_tpl->getVariable('name')->value;?>
">
			<input type="hidden" name="type" value="<?php echo $_smarty_tpl->getVariable('type')->value;?>
">
			<?php echo $_smarty_tpl->getVariable('heading')->value;?>
:
			<?php if ($_smarty_tpl->getVariable('type')->value=='time'){?>
				<input name="val" id="change_time" placeholder="请输入日期" value="<?php echo $_smarty_tpl->getVariable('val')->value;?>
" class="laydate-icon" onClick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})">
			
			<?php }elseif($_smarty_tpl->getVariable('type')->value=='emp'){?>
				<select name="val">
					<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('emplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  						<option   value ="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_id']) ? $_smarty_tpl->tpl_vars['row']->value['emp_id'] : null);?>
" 
  						<?php if ($_smarty_tpl->getVariable('val')->value==(isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null)){?>selected <?php }?> ><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>

  						</option>
					<?php }} ?>
				</select>
			<?php }elseif($_smarty_tpl->getVariable('type')->value=='brothers'){?>
				<select name="val">
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('brotherslist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  					<option   value ="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bro_id']) ? $_smarty_tpl->tpl_vars['row']->value['bro_id'] : null);?>
" 
  					<?php if ($_smarty_tpl->getVariable('val')->value==(isset($_smarty_tpl->tpl_vars['row']->value['bro_name']) ? $_smarty_tpl->tpl_vars['row']->value['bro_name'] : null)){?>selected <?php }?> ><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bro_name']) ? $_smarty_tpl->tpl_vars['row']->value['bro_name'] : null);?>

  					</option>
				<?php }} ?>
				</select>
			<?php }elseif($_smarty_tpl->getVariable('type')->value=='items'){?>
				<select name="val">
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('itemslist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  					<option   value ="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
" 
  					<?php if ($_smarty_tpl->getVariable('val')->value==(isset($_smarty_tpl->tpl_vars['row']->value['item_name']) ? $_smarty_tpl->tpl_vars['row']->value['item_name'] : null)){?>selected <?php }?> ><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_name']) ? $_smarty_tpl->tpl_vars['row']->value['item_name'] : null);?>

  					</option>
				<?php }} ?>
				</select>
			<?php }elseif($_smarty_tpl->getVariable('type')->value=='charges'){?>
				<select name="val">
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('chargeslist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  					<option   value ="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_id']) ? $_smarty_tpl->tpl_vars['row']->value['charge_id'] : null);?>
" 
  					<?php if ($_smarty_tpl->getVariable('val')->value==(isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null)){?>selected <?php }?> ><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null);?>

  					</option>
				<?php }} ?>
				</select>
			<?php }elseif($_smarty_tpl->getVariable('type')->value=='payments'){?>
				<select name="val">
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('paymentslist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  					<option   value ="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['payment_id']) ? $_smarty_tpl->tpl_vars['row']->value['payment_id'] : null);?>
" 
  					<?php if ($_smarty_tpl->getVariable('val')->value==(isset($_smarty_tpl->tpl_vars['row']->value['payment_name']) ? $_smarty_tpl->tpl_vars['row']->value['payment_name'] : null)){?>selected <?php }?> ><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['payment_name']) ? $_smarty_tpl->tpl_vars['row']->value['payment_name'] : null);?>

  					</option>
				<?php }} ?>
				</select>
			<?php }elseif($_smarty_tpl->getVariable('type')->value=='banks'){?>
				<select name="val">
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('bankslist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  					<option   value ="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_id']) ? $_smarty_tpl->tpl_vars['row']->value['bank_id'] : null);?>
" 
  					<?php if ($_smarty_tpl->getVariable('val')->value==(isset($_smarty_tpl->tpl_vars['row']->value['bank_name']) ? $_smarty_tpl->tpl_vars['row']->value['bank_name'] : null)){?>selected <?php }?> ><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_name']) ? $_smarty_tpl->tpl_vars['row']->value['bank_name'] : null);?>

  					</option>
				<?php }} ?>
				</select>
			<?php }elseif($_smarty_tpl->getVariable('type')->value=='shenhe'){?>
				<select name="val">
  					<option   value ="1" 
  						<?php if ($_smarty_tpl->getVariable('val')->value==1){?>selected <?php }?> >审核通过
  					</option>
  					<option   value ="0" 
  						<?php if ($_smarty_tpl->getVariable('val')->value==0){?>selected <?php }?> >未审核
  					</option>
  					<option   value ="-1" 
  						<?php if ($_smarty_tpl->getVariable('val')->value==-1){?>selected <?php }?> >审核未通过
  					</option>

  					
				</select>
			<?php }elseif($_smarty_tpl->getVariable('type')->value=='zhuangtai'){?>
				<select name="val">
  					<option   value ="1" 
  						<?php if ($_smarty_tpl->getVariable('val')->value==1){?>selected <?php }?> >已处理
  					</option>
  					<option   value ="0" 
  						<?php if ($_smarty_tpl->getVariable('val')->value==0){?>selected <?php }?> >未处理
  					</option>
  					
  					
				</select>
			<?php }elseif($_smarty_tpl->getVariable('type')->value=='zhuangtai2'){?>
				<select name="val">
  					<option   value ="1" 
  						<?php if ($_smarty_tpl->getVariable('val')->value==1){?>selected <?php }?> >已结账
  					</option>
  					<option   value ="0" 
  						<?php if ($_smarty_tpl->getVariable('val')->value==0){?>selected <?php }?> >未结账
  					</option>
  					
  					
				</select>
				
			<?php }elseif($_smarty_tpl->getVariable('type')->value=='car'){?>
				<select name="val">
				<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('carlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  					<option   value ="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
" 
  					<?php if ($_smarty_tpl->getVariable('val')->value==(isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null)){?>selected <?php }?> ><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>

  					</option>
				<?php }} ?>
				</select>
			
			<?php }else{ ?>
				<input type="text" name="val" value="<?php echo $_smarty_tpl->getVariable('val')->value;?>
">
			<?php }?>
				<br/><br/><br/>
				<input type="submit" value="修改">
		</form>
		
	
</body>
</html>