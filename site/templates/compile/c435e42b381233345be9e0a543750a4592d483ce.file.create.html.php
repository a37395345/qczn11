<?php /* Smarty version Smarty-3.0.4, created on 2019-11-14 14:36:25
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/assets/create.html" */ ?>
<?php /*%%SmartyHeaderCode:286725dccf5e93001b4-52638294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c435e42b381233345be9e0a543750a4592d483ce' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/assets/create.html',
      1 => 1573713383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '286725dccf5e93001b4-52638294',
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
<link href="../../../crm/css/animate.min.css" rel="stylesheet">
<script src="../../../jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
	.gray-bg{
      background-color: #f3f3f4;
      padding: 20px;
    }
    .xt_problems{
      padding: 0 20px 20px 20px;
      background-color: #fff; 
      border-top:4px solid #e7eaec;
    }
    .xt_problems .page_tit{
      font-size: 14px;
      margin: 0 0 7px;
      padding: 0;
      text-overflow: ellipsis;
      color: #676a6c;
        /* border-bottom: 1px solid #ddd; */
    }
    .xt_problems .lineD{
		border-bottom:none;
	}
	.xt_problems .table{
      width: 100%;
      max-width: 100%;
      margin-bottom: 20px;
      border-spacing: 0;
      border-collapse: collapse;
    }
    .list table td{
      padding: 8px;
    }
    .s_roblems table tr td{
      border-left: 1px solid #ddd;
      border-bottom: 1px solid #ddd;
      padding: 10px 0 10px 0;
    }
    .xt_problems table tr th{
      padding: 12px 8px 12px 8px;
    }
    .xt_problems table tr td{
      border-top: 1px solid #e7e7e7;
      border-left: 1px solid #e7e7e7;
      border-right: 1px solid #e7e7e7;
      border-bottom: 1px solid #e7e7e7;
      /*text-indent: 1em;*/
    }
    .xt_problems .form2 .table tr td input{
      height: 28px;
      border: 1px solid #e5e6e7;
      width: 100%;
      text-indent: 1em;
    }
    input{
      outline: none
    }
    select{
      outline: none;
      border: 1px solid #ddd;
    }
    .form2{
      border-top: 2px solid #9cb8cc;
      border-bottom: 1px solid #ddd;
      padding-bottom: 15px;
    }
    .form2 table td{
      padding: 8px!important;
    }
    .form2 table td input{
      height: 30px;
    width: 100%;
    text-indent: 1em;
    border:1px solid #ddd; 
    }
    .form2 table td select{
    height: 30px;
    width: 100%;
    text-indent: 1em;
    }
    .page_btm{
    	border-top:none;
    }
    .page_btm{
    	border-top:none;
    }
    .page_btm input{
    	display: inline-block;
    width: 97px;
    height: 34px;
    color: inherit;
    background: transparent;
    border: 1px solid #c2c2c2;
    border-radius: 3px;
    }
    .btn_b:hover{
    	    background-color: #bababa;
    border-color: #bababa;
    color: #FFF;
    }
    .page_btm{
    	    padding: 18px 0 18px 0;
    }
/**/
</style>
</head>
<body class="gray-bg wrapper-content animated fadeInRight">
<div class="xt_problems">
<div class="so_main">
  <div class="page_tit"><?php if ($_smarty_tpl->getVariable('task')->value=="insert"){?>添加<?php }elseif($_smarty_tpl->getVariable('task')->value=="update"){?>编辑<?php }?></div>  
  <form method="post" action="insert.php" onsubmit="return assets_check()" name="form1" enctype="multipart/form-data">
  <div class="form2 s_roblems">
  	<table class="table">
  		<tbody>
  			<tr>
  				<th style="background-color: #F5F5F6" width="15%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['assets_type']) ? $_smarty_tpl->getVariable('list')->value['assets_type'] : null);?>
设备类型：</th>
  				<td width="35%">
  					

      <select name="assets_type">
        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('assetstypelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['typeid']) ? $_smarty_tpl->tpl_vars['rows']->value['typeid'] : null);?>
" id="assets_type"                                 <?php if ((isset($_smarty_tpl->getVariable('list')->value['assets_type']) ? $_smarty_tpl->getVariable('list')->value['assets_type'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['typeid']) ? $_smarty_tpl->tpl_vars['rows']->value['typeid'] : null)){?>selected<?php }?> /><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['typename']) ? $_smarty_tpl->tpl_vars['rows']->value['typename'] : null);?>
&nbsp;&nbsp;
  </option>
        <?php }} ?>
      </select>


  				</td>
  				<th style="background-color: #F5F5F6" width="15%">设备名称：</th>
  				<td width="35%">
  					<input placeholder="必填" type="text" name="assets_name" id="assets_name" size="38" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['assets_name']) ? $_smarty_tpl->getVariable('list')->value['assets_name'] : null);?>
" />
  				</td>
  			</tr>
  			<tr>
  				<th style="background-color: #F5F5F6" width="15%">型号规格：</th>
  				<td width="35%">
  					<input placeholder="必填" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['assets_spec']) ? $_smarty_tpl->getVariable('list')->value['assets_spec'] : null);?>
" name="assets_spec" id="assets_spec"></input>
  				</td>
  				<th style="background-color: #F5F5F6" width="15%">购买日期：</th>
  				<td width="35%">
  					<input id="assets_buydate" type="text" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['assets_buydate']) ? $_smarty_tpl->getVariable('list')->value['assets_buydate'] : null);?>
" name="assets_buydate" size="16" onClick="calendar.show(this);" />
  				</td>
  			</tr>
  			<tr>
  				<th style="background-color: #F5F5F6" width="15%">购买经手人：</th>
  				<td width="35%">
  					<select name="assets_buyman" >
		        	<option value="" selected>请选择</option>
				<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('emplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
					<option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_name']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_name'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['emp_name']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_name'] : null)==(isset($_smarty_tpl->getVariable('list')->value['assets_buyman']) ? $_smarty_tpl->getVariable('list')->value['assets_buyman'] : null)){?>selected<?php }else{ ?><?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_name']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_name'] : null);?>
</option>	
				<?php }} ?>
				</select>
  				</td>
  				<th style="background-color: #F5F5F6" width="15%">购买金额：</th>
  				<td width="35%">
  					<input onkeyup="value=value.replace(/[^0-9]/g,'')" type="text" name="assets_buyamount" id="assets_buyamount" size="10" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['assets_buyamount']) ? $_smarty_tpl->getVariable('list')->value['assets_buyamount'] : null);?>
" />
  				</td>
  			</tr>
  			<tr>
  				<th style="background-color: #F5F5F6" width="15%">负责人：</th>
  				<td width="35%">
  					<select name="assets_responsible" id="assets_responsible">
			        	<option value="" selected>请选择</option>
					<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('emplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
						<option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_name']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_name'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['emp_name']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_name'] : null)==(isset($_smarty_tpl->getVariable('list')->value['assets_responsible']) ? $_smarty_tpl->getVariable('list')->value['assets_responsible'] : null)){?>selected<?php }else{ ?><?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_name']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_name'] : null);?>
</option>	
					<?php }} ?>
					</select>
  				</td>
  				<th style="background-color: #F5F5F6" width="15%">存放门店：</th>
  				<td width="35%">
  					<select name="assets_shopid" id="assets_shopid" >
			        	<option value="0" selected>请选择</option>
					<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shoplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
						<option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null)==(isset($_smarty_tpl->getVariable('list')->value['assets_shopid']) ? $_smarty_tpl->getVariable('list')->value['assets_shopid'] : null)){?>selected<?php }else{ ?><?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>
</option>	
					<?php }} ?>
					</select>
  				</td>
  			</tr>
  		</tbody>
  	</table>

    <div class="page_btm" style="text-align: center;">
      <input type="submit" class="btn_b" name="btn_save" value="确定" />
    </div>
  </div>
  <input type="hidden" name="uid" id="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['assets_id']) ? $_smarty_tpl->getVariable('list')->value['assets_id'] : null);?>
" />
  
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  </form>
</div>
</div>
<!-->
<script>
function assets_check(){
	var assets_buyamount = $("#assets_buyamount").val();
	if ($("#assets_name").val()==""){
		alert("请填写设备名称！");
		$("#assets_name").focus();
		return false;
	}
	if ($("#assets_spec").val()==""){
		alert("请填写型号规格！");
		$("#assets_spec").focus();
		return false;
	}
	if(!assets_buyamount){
		alert("请填写购买金额！")
		return false;
	}
	if ($("#assets_responsible").val()==""){
		alert("请选择负责人！");
		$("#assets_responsible").focus();
		return false;
	}
	if ($("#assets_shopid").val()=="0"){
		alert("请选择存放门店！");
		$("#assets_shopid").focus();
		return false;
	}
}

</script>
<!-->
</body>
</html>