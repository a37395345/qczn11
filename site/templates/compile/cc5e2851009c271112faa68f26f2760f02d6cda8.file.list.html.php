<?php /* Smarty version Smarty-3.0.4, created on 2014-04-08 22:25:56
         compiled from "D:\Phpserv\elsker\admincp\site\templates\elsker\operator/employee/list.html" */ ?>
<?php /*%%SmartyHeaderCode:14574534406f49bd136-01605538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc5e2851009c271112faa68f26f2760f02d6cda8' => 
    array (
      0 => 'D:\\Phpserv\\elsker\\admincp\\site\\templates\\elsker\\operator/employee/list.html',
      1 => 1396966638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14574534406f49bd136-01605538',
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
<link href="/admincp/css/style.css" rel="stylesheet" type="text/css">
<link href="/admincp/css/box.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/admincp/js/jquery.js"></script>
<script type="text/javascript" src="/admincp/js/common.js"></script>
<script type="text/javascript" src="/admincp/js/box.js"></script>
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
		<form action="list.php?task=search" method="post">
			<dl class="lineD">
			<dt>员工编号：</dt>
			<dd>
			<input id="em_no" type="text" value="" name="em_no">
			<p>员工编号</p>
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
            <dt>级别：</dt>
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
	<a href="create.php" class="btn_a"><span>添加员工</span></a>
<!--	<a href="javascript:void(0);" class="btn_a" onclick="deleteUser();"><span>删除员工</span></a>-->
	<a href="javascript:void(0);" class="btn_a" onclick="searchUser();" id="searchUser_action"><span>搜索员工</span></a>
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">
		<input type="checkbox" id="checkbox_handle" onclick="checkAll(this)" value="0">
    	<label for="checkbox"></label>
	</th>
    <th class="line_l"><a href="list.php?order=em_id">id</a></th>
   
    <th class="line_l">姓名</th>
     <th class="line_l">编号</th>
     <th class="line_l">级别</th>          
    <th class="line_l">省份</th>
    <th class="line_l">城市</th>

	<th class="line_l"><a href="list.php?order=time">建立时间</a></th>
    <th class="line_l"><a href="list.php?order=time">最后更新时间</a></th>
	<th class="line_l"><a href="list.php?order=status">状态</a></th>
	<th class="line_l">操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('userList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  <tr overstyle='on' id="user_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['em_id']) ? $_smarty_tpl->tpl_vars['row']->value['em_id'] : null);?>
">  
    	<td><input type="checkbox" name="checkbox" id="checkbox<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['em_id']) ? $_smarty_tpl->tpl_vars['row']->value['em_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['em_id']) ? $_smarty_tpl->tpl_vars['row']->value['em_id'] : null);?>
"></td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['em_id']) ? $_smarty_tpl->tpl_vars['row']->value['em_id'] : null);?>
</td>
        <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['realname']) ? $_smarty_tpl->tpl_vars['row']->value['realname'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['em_no']) ? $_smarty_tpl->tpl_vars['row']->value['em_no'] : null);?>
</td>
        <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['level_title']) ? $_smarty_tpl->tpl_vars['row']->value['level_title'] : null);?>
</td>   
        <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['province_title']) ? $_smarty_tpl->tpl_vars['row']->value['province_title'] : null);?>
</td>        
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['city_title']) ? $_smarty_tpl->tpl_vars['row']->value['city_title'] : null);?>
</td>
        <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['created']) ? $_smarty_tpl->tpl_vars['row']->value['created'] : null);?>
</td>        
        <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['updated']) ? $_smarty_tpl->tpl_vars['row']->value['updated'] : null);?>
</td>
		<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['is_active']) ? $_smarty_tpl->tpl_vars['row']->value['is_active'] : null)==1){?>激活<?php }else{ ?>禁用<?php }?></td>

	    <td>
			<a href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['em_id']) ? $_smarty_tpl->tpl_vars['row']->value['em_id'] : null);?>
">编辑</a>
			<a href="javascript:if(confirm('是否确定删除？')){window.location.href='delete.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['em_id']) ? $_smarty_tpl->tpl_vars['row']->value['em_id'] : null);?>
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
	<a href="create.php" class="btn_a"><span>添加员工</span></a>
<!--	<a href="javascript:void(0);" class="btn_a" onclick="deleteUser();"><span>删除员工</span></a>-->
	<a href="javascript:void(0);" class="btn_a" onclick="searchUser();" id="searchUser_actions"><span>搜索员工</span></a>
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