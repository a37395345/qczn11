<?php /* Smarty version Smarty-3.0.4, created on 2019-09-03 18:32:51
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/renshi/zemp_index.html" */ ?>
<?php /*%%SmartyHeaderCode:94695d6e41535af751-30874731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f091cfeee9cd83fd3a7adba086c694cc544b78c7' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/renshi/zemp_index.html',
      1 => 1567506763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94695d6e41535af751-30874731',
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
		<form action="zemp_index.php" method="get">
			<dl class="lineD">
			<dt>公司电话：</dt>
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
            <select name="emp_post" >
                  <option value="0">请选择</option>
                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list_title')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
            <dt>工资结构：</dt>
            <dd>
            <select name="emp_zhiweiid" >
                  <option value="0">请选择</option>
                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list_zhiwei')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_name']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_name'] : null);?>
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
 $_from = $_smarty_tpl->getVariable('list_shop')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
			    <dd><select name="emp_zhuangtai" id="emp_zhuangtai" >
			    <option value="1">全部</option>
			    <option value="2" >在职</option>
			    <option value="3">正式期</option>
			    <option value="4">试用期</option>
			    <option value="5">离职</option>
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
	<a href="zemp_add.php" class="btn_a"><span>添加员工</span></a>
<!--	<a href="javascript:void(0);" class="btn_a" onclick="deleteUser();"><span>删除员工</span></a>-->
	<a href="javascript:void(0);" class="btn_a" onclick="searchUser();" id="searchUser_action"><span>搜索员工</span></a>
	<a href="export.php" class="btn_a" target="blank" ><span>导出</span></a>
	
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  	<tr>
	
   <label for="checkbox"></label></th>
	<th>姓名(性别)</th>
	<th>职位</th>
	<th>工资结构</th>
	<th>驾照类型</th>
	<th>手机号</th>
	<th>部门</th>
	<th>身份证号</th>
	<th>家庭地址</th>
	<th>公司电话</th>
	<th>合同开始日期</th>
	<th>合同到期日期</th>
	<th>离职日期</th>
	<th>状态</th>
	<th>操作</th>
	</tr>
  
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  <tr overstyle='on' id="user_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_id']) ? $_smarty_tpl->tpl_vars['row']->value['emp_id'] : null);?>
" style="background-color: <?php if ((isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)%2==0){?>#dfe1e4<?php }?>">  
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['title']) ? $_smarty_tpl->tpl_vars['row']->value['title'] : null);?>
</td>
	  	<td><a href="/site/operator/zhiwei/index.php?task=xiangxi&id=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_zhiweiid']) ? $_smarty_tpl->tpl_vars['row']->value['emp_zhiweiid'] : null);?>
&emp_id=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_id']) ? $_smarty_tpl->tpl_vars['row']->value['emp_id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['zhiwei_name']) ? $_smarty_tpl->tpl_vars['row']->value['zhiwei_name'] : null);?>
</a></td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_driverlicense']) ? $_smarty_tpl->tpl_vars['row']->value['emp_driverlicense'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_phone']) ? $_smarty_tpl->tpl_vars['row']->value['emp_phone'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_num']) ? $_smarty_tpl->tpl_vars['row']->value['emp_num'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_homeAdd']) ? $_smarty_tpl->tpl_vars['row']->value['emp_homeAdd'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_workTel']) ? $_smarty_tpl->tpl_vars['row']->value['emp_workTel'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_pactStartDate']) ? $_smarty_tpl->tpl_vars['row']->value['emp_pactStartDate'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_pactEndDate']) ? $_smarty_tpl->tpl_vars['row']->value['emp_pactEndDate'] : null);?>
</td>
	  	<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['emp_quitTime']) ? $_smarty_tpl->tpl_vars['row']->value['emp_quitTime'] : null)==0){?><?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_quitTime']) ? $_smarty_tpl->tpl_vars['row']->value['emp_quitTime'] : null);?>
<?php }?></td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['zhuangtai']) ? $_smarty_tpl->tpl_vars['row']->value['zhuangtai'] : null);?>
</td>
	  	
	    <td>
			<a href="zemp_lizhi.php?id=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_id']) ? $_smarty_tpl->tpl_vars['row']->value['emp_id'] : null);?>
" onClick="return confirm('确定离职?');">离职</a>

			<a href="zemp_add.php?id=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_id']) ? $_smarty_tpl->tpl_vars['row']->value['emp_id'] : null);?>
&op=update">编辑</a>
			<hr/>
			<a href="zemp_xiangxi.php?id=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_id']) ? $_smarty_tpl->tpl_vars['row']->value['emp_id'] : null);?>
" >明细</a>
			<?php if ($_smarty_tpl->getVariable('uid')->value==70){?><a  href="zemp_delete.php?id=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_id']) ? $_smarty_tpl->tpl_vars['row']->value['emp_id'] : null);?>
" onClick="return confirm('确定删除?');">删除</a><?php }?>
			
		</td>
 </tr>
 <?php }} ?>
 </table>
 </div>

  <div class="Toolbar_inbox">
	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
	<a href="zemp_add.php" class="btn_a"><span>添加员工</span></a>
<!--	<a href="javascript:void(0);" class="btn_a" onclick="deleteUser();"><span>删除员工</span></a>-->
	<a href="javascript:void(0);" class="btn_a" onclick="searchUser();" id="searchUser_actions"><span>搜索员工</span></a>
	<a href="export.php" class="btn_a" target="blank"><span>导出</span></a>
  </div> 
</div>
<script type="text/javascript">
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
	
	function folder(type, _this) {
		$('#search_'+type).slideToggle('fast');
		if ($(_this).html() == '展开') {
			$(_this).html('收起');
		}else {
			$(_this).html('展开');
		}
		
	}
</script>

</body>
</html>