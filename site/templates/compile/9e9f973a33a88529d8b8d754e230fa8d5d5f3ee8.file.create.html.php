<?php /* Smarty version Smarty-3.0.4, created on 2017-08-31 11:46:12
         compiled from "D:\web\site\templates\elsker\operator/adminuser/create.html" */ ?>
<?php /*%%SmartyHeaderCode:1760959a78684c2a906-29435193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e9f973a33a88529d8b8d754e230fa8d5d5f3ee8' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/adminuser/create.html',
      1 => 1504150712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1760959a78684c2a906-29435193',
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
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/box.js"></script>
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit">添加权限</div>
  
  <form method="post" action="" onsubmit="return check(this)">
    
  <div class="form2">
    <dl class="lineD">
      <dt>用户名：</dt>
      <dd>
        <input type="text" name="username" value="<?php echo (isset($_smarty_tpl->getVariable('user')->value['username']) ? $_smarty_tpl->getVariable('user')->value['username'] : null);?>
" /> *
	  </dd>
    </dl>	
	<?php if ($_smarty_tpl->getVariable('task')->value!="update"){?>
    <dl class="lineD">
      <dt>密码：</dt>
      <dd>
        <input type="password" name="password" />
	  </dd>
    </dl>
    <?php }?>
	<dl class="lineD">
      <dt>选择员工：</dt>
      <dd>
        <select name="user_id" >
		<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('employee')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
			<option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_id']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_id'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['emp_id']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_id'] : null)==(isset($_smarty_tpl->getVariable('user')->value['user_id']) ? $_smarty_tpl->getVariable('user')->value['user_id'] : null)){?>selected<?php }else{ ?><?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_name']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_name'] : null);?>
</option>	
		<?php }} ?>
		</select>
	  </dd>
    </dl>
    <dl class="lineD">
      <dt>选择店铺：</dt>
      <dd>
        <select name="shop_id" >
        	<option value="0" <?php if (0==(isset($_smarty_tpl->getVariable('user')->value['shop_id']) ? $_smarty_tpl->getVariable('user')->value['shop_id'] : null)){?>selected<?php }else{ ?><?php }?>>请选择</option>
		<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shop')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
			<option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null)==(isset($_smarty_tpl->getVariable('user')->value['shop_id']) ? $_smarty_tpl->getVariable('user')->value['shop_id'] : null)){?>selected<?php }else{ ?><?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>
</option>	
		<?php }} ?>
		</select>
	  </dd>
    </dl>
	
    <dl class="lineD">
      <dt>权限组：</dt>
      <dd>
		<select name="admin_group_id" >
		<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('privilege')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
			<option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['admin_group_id']) ? $_smarty_tpl->tpl_vars['rows']->value['admin_group_id'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['admin_group_id']) ? $_smarty_tpl->tpl_vars['rows']->value['admin_group_id'] : null)==(isset($_smarty_tpl->getVariable('user')->value['admin_group_id']) ? $_smarty_tpl->getVariable('user')->value['admin_group_id'] : null)){?>selected<?php }else{ ?><?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>
</option>	
		<?php }} ?>
		</select>
	  <!--
      	<a href="javascript:selectAll();"><span>全选</span></a> | <a href="javascript:unselectAll();"><span>取消</span></a>
		<ul>
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('privilegeList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
	      	<li style="padding-top:5px;">
	      		<input type="checkbox" name="privileges[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['action']) ? $_smarty_tpl->tpl_vars['row']->value['action'] : null);?>
" class="navi"<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['checked']) ? $_smarty_tpl->tpl_vars['row']->value['checked'] : null)){?> checked<?php }?> /> <span class="navi_name"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
</span>
		        <ul>
		            <?php  $_smarty_tpl->tpl_vars['navi'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['row']->value['list']) ? $_smarty_tpl->tpl_vars['row']->value['list'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['navi']->key => $_smarty_tpl->tpl_vars['navi']->value){
 $_smarty_tpl->tpl_vars['r']->value = $_smarty_tpl->tpl_vars['navi']->key;
?>
		          	<li class='indent'><input type="checkbox" name="privileges[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['navi']->value['action']) ? $_smarty_tpl->tpl_vars['navi']->value['action'] : null);?>
" id="<?php echo (isset($_smarty_tpl->tpl_vars['navi']->value['action']) ? $_smarty_tpl->tpl_vars['navi']->value['action'] : null);?>
"<?php if ((isset($_smarty_tpl->tpl_vars['navi']->value['checked']) ? $_smarty_tpl->tpl_vars['navi']->value['checked'] : null)){?> checked<?php }?> class="subnavi" /> <?php echo (isset($_smarty_tpl->tpl_vars['navi']->value['name']) ? $_smarty_tpl->tpl_vars['navi']->value['name'] : null);?>
</li>
		          	<?php }} ?>
				</ul>
		     </li>
		 <?php }} ?>
		 </ul>-->
	  </dd>
	  <dl class="lineD">
	      <dt>使用范围：</dt>
	      <dd>
	        <input type="radio" name="userscope" value="0" <?php if ((isset($_smarty_tpl->getVariable('user')->value['userscope']) ? $_smarty_tpl->getVariable('user')->value['userscope'] : null)==0){?>checked<?php }?>/>内外网
	        <input type="radio" name="userscope" value="1" <?php if ((isset($_smarty_tpl->getVariable('user')->value['userscope']) ? $_smarty_tpl->getVariable('user')->value['userscope'] : null)==1){?>checked<?php }?>/>只限内网
		  </dd>
	  </dl>
	  <dl class="lineD">
	      <dt>当前状态：</dt>
	      <dd>
	        <input type="radio" name="userstates" value="0" <?php if ((isset($_smarty_tpl->getVariable('user')->value['userstates']) ? $_smarty_tpl->getVariable('user')->value['userstates'] : null)==0){?>checked<?php }?>/>正常
	        <input type="radio" name="userstates" value="1" <?php if ((isset($_smarty_tpl->getVariable('user')->value['userstates']) ? $_smarty_tpl->getVariable('user')->value['userstates'] : null)==1){?>checked<?php }?>/>禁用
		  </dd>
	  </dl>
    </dl>
	
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" />
    </div>
  </div>
  <input type="hidden" name="aid" value="<?php echo (isset($_smarty_tpl->getVariable('user')->value['admin_user_id']) ? $_smarty_tpl->getVariable('user')->value['admin_user_id'] : null);?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" /></form>
</div>

<script type="text/javascript">
	function selectAll(){
		$("input[type='checkbox']").attr("checked",true);
	}
	function unselectAll(){
		$("input[type='checkbox']").attr("checked",false);
	}
	$(document).ready(function(){
		$(".subnavi").click(function(){
			var checked = false;
			$(this).parent().parent().find(".subnavi").each(function(){
				if($(this).attr("checked")){
					checked = true;
				}
			});
			var navi = $(this).parent().parent().parent().find(".navi");
			if(checked){
				navi.attr("checked",true);
			}else{
				navi.attr("checked",false);
			}
		});
		$(".navi").click(function(){
			$(this).parent().find(".subnavi").attr("checked",$(this).attr("checked"));
		});
	});

	function check(_form){
		if(_form.username.value==""){
			alert("请输入用户名！");
			_form.username.focus();
			return false;
		}
		if(_form.password.value==""){
			if (_form.task.value=="insert"){
				alert("请输入登录密码！");
				_form.password.focus();
				return false;
			}
		}else{
			var strPS=_form.password.value;
	    	if (/[^a-z]/gi.test(strPS) && /[^0-9]/gi.test(strPS) && strPS.length>=6){
	    	}else{
		        alert("密码只能由6位以上的数字和字母组成");
		        _form.password.focus();
				return false;
		    }
		}
		return true;
	}
</script>

</body>
</html>