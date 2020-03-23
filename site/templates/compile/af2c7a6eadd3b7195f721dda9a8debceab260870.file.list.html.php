<?php /* Smarty version Smarty-3.0.4, created on 2018-04-16 17:20:56
         compiled from "D:\web\site\templates\elsker\operator/adminuser/list.html" */ ?>
<?php /*%%SmartyHeaderCode:280915ad46af8c17425-58716122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af2c7a6eadd3b7195f721dda9a8debceab260870' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/adminuser/list.html',
      1 => 1523692788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '280915ad46af8c17425-58716122',
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
</head>
<body>
<div class="so_main">
  <div class="page_tit">系统用户</div>
  <!-------- 用户列表 -------->
  <div class="Toolbar_inbox">
  	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
	<a href="create.php" class="btn_a"><span>添加用户</span></a>
	<a href="javascript:void(0);" class="btn_a" onclick="deleteUser();"><span>删除用户</span></a>
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">
		<input type="checkbox" id="checkbox_handle" onclick="checkAll(this)" value="0">
    	<label for="checkbox"></label>
	</th>
    <th class="line_l">ID</th>
    <th class="line_l">操作员帐号</th>
    <th class="line_l">员工姓名</th>
    <th class="line_l">店铺</th>
	<th class="line_l">权限组</th>
	<th class="line_l">使用范围</th>
	<th class="line_l">当前状态</th>
    <th class="line_l">授权时间</th>
    <th class="line_l">操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('userList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  <tr overstyle='on' id="user_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['admin_user_id']) ? $_smarty_tpl->tpl_vars['row']->value['admin_user_id'] : null);?>
">
	  	<td><input type="checkbox" name="checkbox" id="checkbox<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['admin_user_id']) ? $_smarty_tpl->tpl_vars['row']->value['admin_user_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['admin_user_id']) ? $_smarty_tpl->tpl_vars['row']->value['admin_user_id'] : null);?>
"></td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['admin_user_id']) ? $_smarty_tpl->tpl_vars['row']->value['admin_user_id'] : null);?>
</td>			
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['username']) ? $_smarty_tpl->tpl_vars['row']->value['username'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['title']) ? $_smarty_tpl->tpl_vars['row']->value['title'] : null);?>
</td>
		<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['userscope']) ? $_smarty_tpl->tpl_vars['row']->value['userscope'] : null)==1){?>只限内网<?php }else{ ?>内外网<?php }?></td>
		<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['userstates']) ? $_smarty_tpl->tpl_vars['row']->value['userstates'] : null)==1){?>禁用<?php }else{ ?>正常<?php }?></td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['time']) ? $_smarty_tpl->tpl_vars['row']->value['time'] : null);?>
</td>
	    <td>
			<a href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['admin_user_id']) ? $_smarty_tpl->tpl_vars['row']->value['admin_user_id'] : null);?>
">编辑</a>&nbsp;|&nbsp;
			<a href="javascript:if(confirm('是否确定恢复初始密码？')){window.location.href='list.php?task=resetps&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['admin_user_id']) ? $_smarty_tpl->tpl_vars['row']->value['admin_user_id'] : null);?>
';}">重置密码</a>&nbsp;|&nbsp;
			<a href="javascript:if(confirm('是否确定删除？')){window.location.href='delete.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['admin_user_id']) ? $_smarty_tpl->tpl_vars['row']->value['admin_user_id'] : null);?>
';}">删除</a>
		</td>
 </tr>
 <?php }} ?>
 </table>
 </div>

  <div class="Toolbar_inbox">
	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
	<a href="create.php" class="btn_a"><span>添加用户</span></a>
	<a href="javascript:void(0);" class="btn_a" onclick="deleteUser();"><span>删除用户</span></a>
  </div>
</div>
<!-->
<script>
	//鼠标移动表格效果
	$(document).ready(function(){
		$("tr[overstyle='on']").hover(
		  function () {
		    $(this).addClass("bg_hover");
		  },
		  function () {
		    $(this).removeClass("bg_hover");
		  }
		);
	});
	
	function checkon(o){
		if( o.checked == true ){
			$(o).parents('tr').addClass('bg_on') ;
		}else{
			$(o).parents('tr').removeClass('bg_on') ;
		}
	}
	
	function checkAll(o){
		if( o.checked == true ){
			$('input[name="checkbox"]').attr('checked','true');
			$('tr[overstyle="on"]').addClass("bg_on");
		}else{
			$('input[name="checkbox"]').removeAttr('checked');
			$('tr[overstyle="on"]').removeClass("bg_on");
		}
	}

	//获取已选择用户的ID数组
	function getChecked() {
		var uids = new Array();
		$.each($('table input:checked'), function(i, n){
			uids.push( $(n).val() );
		});
		return uids;
	}
	
	//删除用户
	function deleteUser(uid) {
		uid = uid ? uid : getChecked();
		uid = uid.toString();
		if(uid == '' || !confirm('删除成功后将无法恢复，确认继续？')) return false;
		
		$.post("delete.php?multi=1", {uid:uid}, function(res){
			if(res == '1') {
				uid = uid.split(',');
				for(i = 0; i < uid.length; i++) {
					$('#user_'+uid[i]).remove();
				}
				ui.success('操作成功');
			}else {
				ui.error('操作失败');
			}
		});
	}
	
	function folder(type, _this) {
		$('#search_'+type).slideToggle('fast');
		if ($(_this).html() == '展开') {
			$(_this).html('收起');
		}else {
			$(_this).html('展开');
		}
		
	}
</script>
<!-->

</body>
</html>