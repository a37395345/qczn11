<?php /* Smarty version Smarty-3.0.4, created on 2014-09-28 10:52:03
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/employee/change.html" */ ?>
<?php /*%%SmartyHeaderCode:9616542777d3d41128-43795797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cafab573822a66c56ce02143b54cfa419c039806' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/employee/change.html',
      1 => 1411872715,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9616542777d3d41128-43795797',
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
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/date_select.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit">转岗</div>
  <form method="post" action="insert.php" onsubmit="return check(this);" name="form1" >
  <div class="form2">
  <dl class="lineD">
    <dt>姓名：</dt>
    <dd><?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_name']) ? $_smarty_tpl->getVariable('employee')->value['emp_name'] : null);?>
</dd>
  </dl>
  <dl class="lineD">
    <dt>入职日期：</dt>
    <dd><?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_EntryDate']) ? $_smarty_tpl->getVariable('employee')->value['emp_EntryDate'] : null);?>
</dd>
  </dl>
  <dl class="lineD">
    <dt>目前职位：</dt>
    <dd><?php echo (isset($_smarty_tpl->getVariable('employee')->value['level_title']) ? $_smarty_tpl->getVariable('employee')->value['level_title'] : null);?>
</dd>
  </dl>
  <dl class="lineD">
    <dt>目前底薪：</dt>
    <dd><?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_basicSalary']) ? $_smarty_tpl->getVariable('employee')->value['emp_basicSalary'] : null);?>
</dd>
  </dl>
  
  <dl class="lineD">
    <dt><span class="redstar">*</span>转换职位：</dt>
    <dd><select name="emp_post" id="emp_post" onchange="Show(this,'h1','h2','h3')">
        <option value="" >请选择职位</option>
        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('levelList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" ><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>
</option>
                  <?php }} ?>
        </select></dd>
  </dl>
  <dl class="lineD">
    <dt><span class="redstar">*</span>转岗后底薪：</dt>
    <dd><input type="text" name="emp_basicSalary" id="emp_basicSalary" size="16" /></dd>
  </dl>
  <dl class="lineD">
    <dt><span class="redstar">*</span>转岗日期：</dt>
    <dd><input type="text" name="emp_EntryDate" id="emp_EntryDate" size="16" onClick="calendar.show(this);" readonly="readonly" /></dd>
  </dl>
  <dl class="lineD">
    <dt>&nbsp;</dt>
    <dd><input type="submit" id="submit" value="提 交" class="btn_b"/><b>注：<span class="red">*</span>为必填项</b></dd>
  </dl>
</div>
  <input type="hidden" name="aid" value="<?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_id']) ? $_smarty_tpl->getVariable('employee')->value['emp_id'] : null);?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
</form>
</div>

<script type="text/javascript">
	function check(_form){
		if(textTrim(_form.emp_post.value)==""){
			alert("转岗职位必须选择！");
			_form.emp_post.focus();
			return false;
		}
		if(textTrim(_form.emp_basicSalary.value)==""){
			alert("转岗后底薪不能为空，请必须填写");
			_form.emp_basicSalary.focus();
			return false;
		}
		if(textTrim(_form.emp_EntryDate.value)==""){
			alert("转岗日期不能为空，请必须填写");
			_form.emp_EntryDate.focus();
			return false;
		}
		return true;
	}
</script>
</body>
</html>