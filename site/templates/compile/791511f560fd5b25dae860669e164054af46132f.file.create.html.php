<?php /* Smarty version Smarty-3.0.4, created on 2014-09-20 21:13:58
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/employee/create.html" */ ?>
<?php /*%%SmartyHeaderCode:6332541d7d96bb3634-80398305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '791511f560fd5b25dae860669e164054af46132f' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/employee/create.html',
      1 => 1411218619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6332541d7d96bb3634-80398305',
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
  <div class="page_tit">编辑</div>
  <form method="post" action="insert.php" onsubmit="return check(this);" name="form1" enctype="multipart/form-data">
  <div class="form2">
  <dl class="lineD">
    <dt><span class="redstar">*</span>姓名：</dt>
    <dd><input type="text" name="emp_name" id="emp_name" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_name']) ? $_smarty_tpl->getVariable('employee')->value['emp_name'] : null);?>
" /></dd>
  </dl>
  <dl class="lineD">
    <dt><span class="redstar">*</span>性别：</dt>
    <dd>
	<?php if ($_smarty_tpl->getVariable('task')->value=="update"){?>
	<input type="radio" name="emp_sex" id="emp_sex" <?php if ((isset($_smarty_tpl->getVariable('employee')->value['emp_sex']) ? $_smarty_tpl->getVariable('employee')->value['emp_sex'] : null)=='男'){?>checked<?php }else{ ?><?php }?> value="<?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_sex']) ? $_smarty_tpl->getVariable('employee')->value['emp_sex'] : null);?>
" /> 男　<input type="radio" name="emp_sex" id="emp_sex" <?php if ((isset($_smarty_tpl->getVariable('employee')->value['emp_sex']) ? $_smarty_tpl->getVariable('employee')->value['emp_sex'] : null)=='女'){?>checked<?php }else{ ?><?php }?> value="<?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_sex']) ? $_smarty_tpl->getVariable('employee')->value['emp_sex'] : null);?>
" /> 女
    <?php }else{ ?>
    <input type="radio" name="emp_sex" id="emp_sex" value="男" checked /> 男　<input type="radio" name="emp_sex" id="emp_sex" value="女" /> 女
	<?php }?>
    </dd>
  </dl>
  <dl class="lineD">
    <dt><span class="redstar">*</span>身份证号：</dt>
    <dd><input type="text" name="emp_num" id="emp_num" size="26"  value="<?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_num']) ? $_smarty_tpl->getVariable('employee')->value['emp_num'] : null);?>
"/></dd>
  </dl>
  <dl class="lineD">
    <dt><span class="redstar">*</span>手机号：</dt>
    <dd><input type="text" name="emp_phone" id="emp_phone" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_phone']) ? $_smarty_tpl->getVariable('employee')->value['emp_phone'] : null);?>
"/></dd>
  </dl>
  <dl class="lineD">
    <dt>家庭电话：</dt>
    <dd><input type="text" name="emp_homeTel" id="emp_homeTel" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_homeTel']) ? $_smarty_tpl->getVariable('employee')->value['emp_homeTel'] : null);?>
"/></dd>
  </dl>
  <dl class="lineD">
    <dt>家庭地址：</dt>
    <dd><input type="text" name="emp_homeAdd" id="emp_homeAdd" size="26" value="<?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_homeAdd']) ? $_smarty_tpl->getVariable('employee')->value['emp_homeAdd'] : null);?>
" /></dd>
  </dl>
  <dl class="lineD">
    <dt><span class="redstar">*</span>职位：</dt>
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
" <?php if ((isset($_smarty_tpl->getVariable('employee')->value['emp_post']) ? $_smarty_tpl->getVariable('employee')->value['emp_post'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>
</option>
                  <?php }} ?>
        </select></dd>
  </dl>
  <dl class="lineD">
    <dt>介绍：</dt>
    <dd><textarea name="emp_introduce" id="emp_introduce" cols="70" rows="3"><?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_introduce']) ? $_smarty_tpl->getVariable('employee')->value['emp_introduce'] : null);?>
</textarea></dd>
  </dl>
  <dl class="lineD">
    <dt><span class="redstar">*</span>底薪：</dt>
    <dd><input type="text" name="emp_basicSalary" id="emp_basicSalary" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_basicSalary']) ? $_smarty_tpl->getVariable('employee')->value['emp_basicSalary'] : null);?>
" /></dd>
  </dl>
  <dl class="lineD">
    <dt>社保补贴：</dt>
    <dd><input type="text" name="emp_subsidy" id="emp_subsidy" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_subsidy']) ? $_smarty_tpl->getVariable('employee')->value['emp_subsidy'] : null);?>
" /> /月</dd>
  </dl>
  <dl class="lineD">
    <dt><span class="redstar">*</span>入职日期：</dt>
    <dd><input type="text" name="emp_EntryDate" id="emp_EntryDate" size="16" value='<?php if ($_smarty_tpl->getVariable('task')->value=="update"){?><?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_EntryDate']) ? $_smarty_tpl->getVariable('employee')->value['emp_EntryDate'] : null);?>
<?php }?>' onClick="calendar.show(this);" readonly="readonly" /></dd>
  </dl>
  <dl class="lineD">
    <dt><span class="redstar">*</span>合同开始日期：</dt>
    <dd><input type="text" name="emp_pactStartDate" id="emp_pactStartDate" size="16" value="<?php if ($_smarty_tpl->getVariable('task')->value=='update'){?><?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_pactStartDate']) ? $_smarty_tpl->getVariable('employee')->value['emp_pactStartDate'] : null);?>
<?php }?>" onClick="calendar.show(this);" readonly="readonly" /></dd>
  </dl>
  <dl class="lineD">
    <dt><span class="redstar">*</span>合同到期日期：</dt>
    <dd><input type="text" name="emp_pactEndDate" id="emp_pactEndDate" size="16" value="<?php if ($_smarty_tpl->getVariable('task')->value=='update'){?><?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_pactEndDate']) ? $_smarty_tpl->getVariable('employee')->value['emp_pactEndDate'] : null);?>
<?php }?>" onClick="calendar.show(this);" readonly="readonly" /></dd>
  </dl>
  <dl class="lineD">
    <dt>状态：</dt>
    <dd><select name="emp_stutas" id="emp_stutas" >
    <option value="0" <?php if ((isset($_smarty_tpl->getVariable('employee')->value['emp_stutas']) ? $_smarty_tpl->getVariable('employee')->value['emp_stutas'] : null)=="0"){?>selected<?php }?> >试用期</option>
    <option value="1" <?php if ((isset($_smarty_tpl->getVariable('employee')->value['emp_stutas']) ? $_smarty_tpl->getVariable('employee')->value['emp_stutas'] : null)=="1"){?>selected<?php }?>>在值</option>
    <option value="2" <?php if ((isset($_smarty_tpl->getVariable('employee')->value['emp_stutas']) ? $_smarty_tpl->getVariable('employee')->value['emp_stutas'] : null)=="2"){?>selected<?php }?>>出勤</option>
    <option value="3" <?php if ((isset($_smarty_tpl->getVariable('employee')->value['emp_stutas']) ? $_smarty_tpl->getVariable('employee')->value['emp_stutas'] : null)=="3"){?>selected<?php }?>>休假</option>
    <option value="-1" <?php if ((isset($_smarty_tpl->getVariable('employee')->value['emp_stutas']) ? $_smarty_tpl->getVariable('employee')->value['emp_stutas'] : null)=="-1"){?>selected<?php }?>>离职</option>
    </select></dd>
  </dl>
  <dl class="lineD">    
    <dt>离职日期：</dt>
    <dd><input type="text" name="emp_quitTime" id="emp_quitTime" size="16" value="<?php if ($_smarty_tpl->getVariable('task')->value=='update'){?><?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_quitTime']) ? $_smarty_tpl->getVariable('employee')->value['emp_quitTime'] : null);?>
<?php }?>" onclick="new Calendar().show(this);" readonly="readonly" /></dd>
  </dl>
  <dl class="lineD">
      <dt>照片：</dt>
      <dd>照片一<input type="file" name="images1" value=""/><br />照片二<input type="file" name="images2" value=""/><br />
        	照片三<input type="file" name="images3" value=""/><br />照片四<input type="file" name="images4" value=""/>
        <?php if ($_smarty_tpl->getVariable('task')->value=='update'&&(isset($_smarty_tpl->getVariable('employee')->value['emp_imglist']) ? $_smarty_tpl->getVariable('employee')->value['emp_imglist'] : null)){?>
        <br />
        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('employee')->value['emp_imglist']) ? $_smarty_tpl->getVariable('employee')->value['emp_imglist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
         <a href="../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['images']) ? $_smarty_tpl->tpl_vars['rows']->value['images'] : null);?>
" title="点击查看原图" target="_blank"><img src="../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['images']) ? $_smarty_tpl->tpl_vars['rows']->value['images'] : null);?>
" width="100" height="100" /></a>
        <?php }} ?>
        <?php }?> 
      </dd>
    </dl>
  <dl class="lineD">
    <dt>&nbsp;</dt>
    <dd><input type="submit" id="submit" value="提 交" class="btn_b"/>　<b>注：<span class="red">*</span>为必填项</b></dd>
  </dl>
</div>

  <input type="hidden" name="aid" value="<?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_id']) ? $_smarty_tpl->getVariable('employee')->value['emp_id'] : null);?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
</form>
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
		if(textTrim(_form.emp_name.value)==""){
			alert("姓名不能为空，请必须填写");
			_form.emp_name.focus();
			return false;
		}
		if(textTrim(_form.emp_num.value)==""){
			alert("身份证号不能为空，请必须填写");
			_form.emp_num.focus();
			return false;
		}
		if(textTrim(_form.emp_phone.value)==""){
			alert("手机号不能为空，请必须填写");
			_form.emp_phone.focus();
			return false;
		}
		if(textTrim(_form.emp_post.value)==""){
			alert("职位必须选择！");
			_form.emp_post.focus();
			return false;
		}
		if(textTrim(_form.emp_basicSalary.value)==""){
			alert("底薪不能为空，请必须填写");
			_form.emp_basicSalary.focus();
			return false;
		}
		
		if(textTrim(_form.emp_EntryDate.value)==""){
			alert("入职日期不能为空，请必须填写");
			_form.emp_EntryDate.focus();
			return false;
		}
		if(textTrim(_form.emp_pactStartDate.value)==""){
			alert("合同开始日期不能为空，请必须填写");
			_form.emp_pactStartDate.focus();
			return false;
		}
		if(textTrim(_form.emp_pactEndDate.value)==""){
			alert("合同到期日期不能为空，请必须填写");
			_form.emp_pactEndDate.focus();
			return false;
		}
		if(textTrim(_form.emp_pactEndDate.value)<textTrim(_form.emp_pactStartDate.value)){
			alert("合同到期日期不能在开始日期之前，请重新填写");
			_form.emp_pactEndDate.focus();
			return false;
		}
		return true;
	}
</script>
</body>
</html>