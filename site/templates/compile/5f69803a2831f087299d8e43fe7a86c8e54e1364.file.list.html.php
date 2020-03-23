<?php /* Smarty version Smarty-3.0.4, created on 2017-09-14 14:27:01
         compiled from "D:\web\site\templates\elsker\operator/employee/list.html" */ ?>
<?php /*%%SmartyHeaderCode:219959ba2135351be9-49430851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f69803a2831f087299d8e43fe7a86c8e54e1364' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/employee/list.html',
      1 => 1505370278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '219959ba2135351be9-49430851',
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
			    <dt>部门：</dt>
			    <dd><select name="emp_shopid" id="emp_shopid">
			        <option value="0" >请选择部门</option>
			        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shopList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
			        	<option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>
</option>
			        <?php }} ?>
			        </select></dd>
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
	<a href="create.php" class="btn_a"><span>添加员工</span></a>
<!--	<a href="javascript:void(0);" class="btn_a" onclick="deleteUser();"><span>删除员工</span></a>-->
	<a href="javascript:void(0);" class="btn_a" onclick="searchUser();" id="searchUser_action"><span>搜索员工</span></a>
	<a href="export.php" class="btn_a" target="blank" ><span>导出</span></a>
	<a href="javascript:void(0);" class="btn_a" onclick="lockpost();" ><span>锁定职位</span></a>
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  	<tr>
	<th>选中<input type="checkbox" id="checkbox_handle" onclick="checkAll(this)" value="0">
    	<label for="checkbox"></label></th>
	<th>姓名(性别)<hr />职位</th>
	<th>驾照类型</th>
	<th>手机号<hr />入职日期</th>
	<th>部门</th>
	<th>身份证号<hr />家庭地址</th>
	<th>家庭电话</th>
	<th>底薪<hr />社保补贴</th>
	<th>公里补贴<hr />超公里补贴</th>
	<th>合同开始日期<hr />合同到期日期</th>
	<th>状态</th>
	<th>操作</th>
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
    	<td><input type="checkbox" name="checkbox" id="checkbox<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_id']) ? $_smarty_tpl->tpl_vars['row']->value['emp_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_id']) ? $_smarty_tpl->tpl_vars['row']->value['emp_id'] : null);?>
"></td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_sex']) ? $_smarty_tpl->tpl_vars['row']->value['emp_sex'] : null);?>
)<hr /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['level_title']) ? $_smarty_tpl->tpl_vars['row']->value['level_title'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_driverlicense']) ? $_smarty_tpl->tpl_vars['row']->value['emp_driverlicense'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_phone']) ? $_smarty_tpl->tpl_vars['row']->value['emp_phone'] : null);?>
<hr /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_EntryDate']) ? $_smarty_tpl->tpl_vars['row']->value['emp_EntryDate'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null);?>
</td>
        <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_num']) ? $_smarty_tpl->tpl_vars['row']->value['emp_num'] : null);?>
<hr /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_homeAdd']) ? $_smarty_tpl->tpl_vars['row']->value['emp_homeAdd'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_homeTel']) ? $_smarty_tpl->tpl_vars['row']->value['emp_homeTel'] : null);?>
</td>
        <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_basicSalary']) ? $_smarty_tpl->tpl_vars['row']->value['emp_basicSalary'] : null);?>
<hr /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_subsidy']) ? $_smarty_tpl->tpl_vars['row']->value['emp_subsidy'] : null);?>
</td>
		<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['emp_post']) ? $_smarty_tpl->tpl_vars['row']->value['emp_post'] : null)==1){?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_kiloLs']) ? $_smarty_tpl->tpl_vars['row']->value['emp_kiloLs'] : null);?>
元/公里<hr /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_overKmLs']) ? $_smarty_tpl->tpl_vars['row']->value['emp_overKmLs'] : null);?>
元/公里<?php }?><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['emp_post']) ? $_smarty_tpl->tpl_vars['row']->value['emp_post'] : null)==2){?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_kiloCq']) ? $_smarty_tpl->tpl_vars['row']->value['emp_kiloCq'] : null);?>
元/公里<hr /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_overKmCq']) ? $_smarty_tpl->tpl_vars['row']->value['emp_overKmCq'] : null);?>
元/公里<?php }?></td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_pactStartDate']) ? $_smarty_tpl->tpl_vars['row']->value['emp_pactStartDate'] : null);?>
<hr /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_pactEndDate']) ? $_smarty_tpl->tpl_vars['row']->value['emp_pactEndDate'] : null);?>
</td>
        <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['status_title']) ? $_smarty_tpl->tpl_vars['row']->value['status_title'] : null);?>
</td>
	    <td>
			<a href="list.php?task=changepost&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_id']) ? $_smarty_tpl->tpl_vars['row']->value['emp_id'] : null);?>
">转岗</a>
			<a href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_id']) ? $_smarty_tpl->tpl_vars['row']->value['emp_id'] : null);?>
">编辑</a><hr />
			<a href="list.php?task=detail&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_id']) ? $_smarty_tpl->tpl_vars['row']->value['emp_id'] : null);?>
" target="_blank">明细</a>
			<a href="javascript:if(confirm('是否确定删除？')){window.location.href='delete.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_id']) ? $_smarty_tpl->tpl_vars['row']->value['emp_id'] : null);?>
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
	<a href="export.php" class="btn_a" target="blank"><span>导出</span></a>
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
	
	function lockpost()
	{
	    var now = new Date();
	    var nowYear = now.getFullYear();
	    var nowMonth = now.getMonth();
	    var startdate=new Date(nowYear, nowMonth, 1);
	    var aaa=AddDays(startdate,-1);

		if(!confirm('即将生成['+aaa+']的司机岗位，确定？')) return false;
		
		$.post("list.php?task=lockpost", {"enddate":aaa}, function(res){
			if(res == '1') {
				alert('操作成功');
			}else {
			    alert('操作失败');
			}
		});
	}
	//日期+天
	 function AddDays(d, n) {
	     var t = new Date(d);//复制并操作新对象，避免改动原对象
	     t.setDate(t.getDate() + n);
	     return t.getFullYear()+"-"+(t.getMonth()+1)+"-"+t.getDate();
	 }

</script>
<!-->

</body>
</html>