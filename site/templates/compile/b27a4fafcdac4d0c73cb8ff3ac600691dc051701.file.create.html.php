<?php /* Smarty version Smarty-3.0.4, created on 2019-07-31 09:40:06
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/system/group/create.html" */ ?>
<?php /*%%SmartyHeaderCode:276125d40f176711768-95201229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b27a4fafcdac4d0c73cb8ff3ac600691dc051701' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/system/group/create.html',
      1 => 1564454377,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '276125d40f176711768-95201229',
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
<link href="../../../../css/box.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<script type="text/javascript" src="../../../../js/box.js"></script>
<style>

/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit">编辑权限</div>
  
  <form method="post" action="update.php" onsubmit="return check(this)">
    
  <div class="form2">
    <dl class="lineD">
      <dt>名称：</dt>
      <dd>
        <input type="text" name="title" value="<?php echo (isset($_smarty_tpl->getVariable('group')->value['title']) ? $_smarty_tpl->getVariable('group')->value['title'] : null);?>
" /> *
	  </dd>
    </dl>
		
   <dl class="lineD">
      <dt>权限：</dt>
      <dd>
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
	  </dd>
    </dl>
    <dl class="lineD">
      <dt>其他权限：</dt>
      <dd>
        <input type="checkbox" name="permissions[]" value="inputidcard" <?php if (strstr((isset($_smarty_tpl->getVariable('group')->value['permissions']) ? $_smarty_tpl->getVariable('group')->value['permissions'] : null),'inputidcard')){?>checked<?php }?>/>手输身份证号&nbsp;&nbsp;
		<input type="checkbox" name="permissions[]" value="modifyorder" <?php if (strstr((isset($_smarty_tpl->getVariable('group')->value['permissions']) ? $_smarty_tpl->getVariable('group')->value['permissions'] : null),'modifyorder')){?>checked<?php }?>/>调度后修改订单&nbsp;&nbsp;
		<input type="checkbox" name="permissions[]" value="searchphonecode" <?php if (strstr((isset($_smarty_tpl->getVariable('group')->value['permissions']) ? $_smarty_tpl->getVariable('group')->value['permissions'] : null),'searchphonecode')){?>checked<?php }?>/>调度后查看电话号码&nbsp;&nbsp;
		<input type="checkbox" name="permissions[]" value="searchorder" <?php if (strstr((isset($_smarty_tpl->getVariable('group')->value['permissions']) ? $_smarty_tpl->getVariable('group')->value['permissions'] : null),'searchorder')){?>checked<?php }?>/>查询订单明细&nbsp;&nbsp;
	  </dd>
    </dl>


    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" />
    </div>
  </div>
  <input type="hidden" name="aid" value="<?php echo (isset($_smarty_tpl->getVariable('group')->value['admin_group_id']) ? $_smarty_tpl->getVariable('group')->value['admin_group_id'] : null);?>
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
		if(_form.title.value==""){
			alert("请输入用户组名称！");
			_form.title.focus();
			return false;
		}
		return true;
	}
</script>

</body>
</html>