<?php /* Smarty version Smarty-3.0.4, created on 2016-06-27 14:04:12
         compiled from "D:\web\site\templates\elsker\operator/employee/searchlist.html" */ ?>
<?php /*%%SmartyHeaderCode:308195770c1dc356f34-79179620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efac5ed04518b5590afe9e7dca5d8b16424df349' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/employee/searchlist.html',
      1 => 1467007216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '308195770c1dc356f34-79179620',
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
  <div class="page_tit">员工列表</div>

<!--搜索用户-->
<div id="searchUser_div" style="display:none;">
	<div class="page_tit">
	搜索员工 [<a onclick="searchUser();" href="javascript:void(0);">隐藏</a>]
    </div>
	<div class="form2">
		<form action="list.php" method="get">
		<input type="hidden" name="task" value="searchList" />
			<dl class="lineD">
			<dt>手机号：</dt>
			<dd>
			<input type="text" value="" name="phone">
			</dd>
			</dl>
			<dl class="lineD">
			<dt>姓名：</dt>
			<dd>
			<input id="realname" type="text" value="" name="realname">
			<p>支持模糊查询</p>
			</dd>
			</dl>
			            
            <dl class="lineD">
            <dt>职位：</dt>
            <dd>
            <select name="level_id" >
                  <option value="0">请选择</option>
                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('levelList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>
</option>
                  <?php }} ?>
              </select>
            </dd>
            </dl>
            <dl class="lineD">
			    <dt>状态：</dt>
			    <dd><select name="emp_stutas" id="emp_stutas" >
			    <option value="9">请选择</option>
			    <option value="0" >试用期</option>
			    <option value="1">在值</option>
			    <option value="3">休假</option>
			    <option value="-1">离职</option>
			    </select></dd>
			</dl>
			
				<div class="page_btm">
				<input class="btn_b" type="submit" value="确定">
				</div>			
		</form>
	</div>
</div>
  <!-------- 用户列表 -------->
  <div class="Toolbar_inbox">
  	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
	<a href="javascript:void(0);" class="btn_a" onclick="searchUser();" id="searchUser_action"><span>搜索</span></a>
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  	<tr>
	<th>姓名(性别)</th>
	<th>职位</th>
	<th>手机号</th>
	<th>身份证号</th>
	<th>家庭地址</th>
	<th>家庭电话</th>
	<th>入职日期</th>
	<th>状态</th>
	</tr>
  
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('userList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  <tr overstyle='on' id="user_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_id']) ? $_smarty_tpl->tpl_vars['row']->value['emp_id'] : null);?>
">
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_sex']) ? $_smarty_tpl->tpl_vars['row']->value['emp_sex'] : null);?>
)</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['level_title']) ? $_smarty_tpl->tpl_vars['row']->value['level_title'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_phone']) ? $_smarty_tpl->tpl_vars['row']->value['emp_phone'] : null);?>
</td>
        <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_num']) ? $_smarty_tpl->tpl_vars['row']->value['emp_num'] : null);?>
</td>
        <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_homeAdd']) ? $_smarty_tpl->tpl_vars['row']->value['emp_homeAdd'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_homeTel']) ? $_smarty_tpl->tpl_vars['row']->value['emp_homeTel'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_EntryDate']) ? $_smarty_tpl->tpl_vars['row']->value['emp_EntryDate'] : null);?>
</td>
        <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['status_title']) ? $_smarty_tpl->tpl_vars['row']->value['status_title'] : null);?>
</td>
 </tr>
 <?php }} ?>
 </table>
 </div>

  <div class="Toolbar_inbox">
	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
	<a href="javascript:void(0);" class="btn_a" onclick="searchUser();" id="searchUser_actions"><span>搜索</span></a>
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
	
	//搜索用户
	var isSearchHidden = 1;
	function searchUser() {
	  if(isSearchHidden == 1) {
		$("#searchUser_div").slideDown("fast");
		isSearchHidden = 0;
	  }else {
		$("#searchUser_div").slideUp("fast");
		isSearchHidden = 1;
	  }
	}
</script>
<!-->

</body>
</html>