<?php /* Smarty version Smarty-3.0.4, created on 2014-08-20 15:02:39
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/fitting/out.html" */ ?>
<?php /*%%SmartyHeaderCode:284253f4480f4bed49-83543401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c7432e5bafa6b94d955ea664cbf12c06425bbc9' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/fitting/out.html',
      1 => 1408516664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '284253f4480f4bed49-83543401',
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
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
</head>
<body>
<form method="post" action="list.php" name="form1" id="form1" onsubmit="return ok()">
<input type="hidden" name="task" value="out_accept" />
<input type="hidden" name="fid" value="<?php echo $_smarty_tpl->getVariable('fid')->value;?>
" />
<div class="so_main">
  	<div class="page_tit_1">配件领用</div>
	<div class="list">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
	    <th style="width:30px;">序号	</th>
		<th>配件名称</th>
		<th>品牌</th>
		<th>型号规格</th>
		<th>库存数量</th>
		<th>单位</th>
		<th>单价</th>
		<th>金额</th>
		<th>本次领用</th>
		<th>用途</th>
	  </tr>
	  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
	  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_id']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_id'] : null);?>
">
	    	<td><input type="hidden" name="fitting_id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_id']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_id'] : null);?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>
		  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_name']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_name'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_brand']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_brand'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_model']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_model'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_innum']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_innum'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['fitting_outnum']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_outnum'] : null);?>
 <input type="hidden" name="fitting_num[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_innum']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_innum'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['fitting_outnum']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_outnum'] : null);?>
"></td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_unit']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_unit'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_price']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_price'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_innum']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_innum'] : null)*(isset($_smarty_tpl->tpl_vars['row']->value['fitting_price']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_price'] : null);?>
</td>
			<td><input type="text" name="out_num[]" id="out_num_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_id']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_innum']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_innum'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['fitting_outnum']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_outnum'] : null);?>
" size="2"/></td>
			<td><input type='text' name='out_remark[]' value="" size='64' /></td>
	  </tr>
	  <?php }} ?>
	 </table>
	</div>
	<div class="Toolbar_inbox">
    	<input class="btn_b" type="submit" value="确定">
  	</div> 
</div>
</form>
<!-->
<script>
function ok(){
	if(!confirm('请仔细核对领用数量，一旦提交就无法修改了，确定提交吗？')){
		return false;
	}
	
}
</script>
<!-->
</body>
</html>