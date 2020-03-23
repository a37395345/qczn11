<?php /* Smarty version Smarty-3.0.4, created on 2019-04-23 11:07:24
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/employee/change.html" */ ?>
<?php /*%%SmartyHeaderCode:230175cbe816cb0fc27-34818856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0ace7d37ccba9008c7c740c8ba8d8316e98eb78' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/employee/change.html',
      1 => 1447233602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '230175cbe816cb0fc27-34818856',
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
  <?php if ((isset($_smarty_tpl->getVariable('employee')->value['emp_post']) ? $_smarty_tpl->getVariable('employee')->value['emp_post'] : null)==1){?>
  <dl class="lineD">
    <dt>目前公里补贴(临时)：</dt>
    <dd><?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_kiloLs']) ? $_smarty_tpl->getVariable('employee')->value['emp_kiloLs'] : null);?>
元/公里</dd>
  </dl>
  <dl class="lineD">
    <dt>目前超公里补贴(临时)：</dt>
    <dd><?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_overKmLs']) ? $_smarty_tpl->getVariable('employee')->value['emp_overKmLs'] : null);?>
元/公里</dd>
  </dl>
  <?php }?>
  <?php if ((isset($_smarty_tpl->getVariable('employee')->value['emp_post']) ? $_smarty_tpl->getVariable('employee')->value['emp_post'] : null)==2){?>
  <dl class="lineD">
    <dt>目前公里补贴(长期)：</dt>
    <dd><?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_kiloCq']) ? $_smarty_tpl->getVariable('employee')->value['emp_kiloCq'] : null);?>
元/公里</dd>
  </dl>
  <dl class="lineD">
    <dt>目前超公里补贴(长期)：</dt>
    <dd><?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_overKmCq']) ? $_smarty_tpl->getVariable('employee')->value['emp_overKmCq'] : null);?>
元/公里</dd>
  </dl>
  <?php }?>
  <?php if ((isset($_smarty_tpl->getVariable('employee')->value['emp_post']) ? $_smarty_tpl->getVariable('employee')->value['emp_post'] : null)==7){?>
  <dl class="lineD">
    <dt>目前趟数补贴(大客)：</dt>
    <dd><?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_tripKc']) ? $_smarty_tpl->getVariable('employee')->value['emp_tripKc'] : null);?>
元/公里</dd>
  </dl>
  <?php }?>
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
  <dl class="lineD" style="display:none;" id="show1_1">
    <dt>转岗后公里补贴(临时)：</dt>
    <dd><input type="text" name="emp_kiloLs" id="emp_kiloLs" size="6" value="<?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_kiloLs']) ? $_smarty_tpl->getVariable('employee')->value['emp_kiloLs'] : null);?>
" /> 元/公里</dd>
  </dl>
  <dl class="lineD" style="display:none;" id="show1_2">
    <dt>转岗后超公里补贴(临时)：</dt>
    <dd><input type="text" name="emp_overKmLs" id="emp_overKmLs" size="6" value="<?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_overKmLs']) ? $_smarty_tpl->getVariable('employee')->value['emp_overKmLs'] : null);?>
" /> 元/公里</dd>
  </dl>
  <dl class="lineD" style="display:none;" id="show2_1">
    <dt>转岗后公里补贴(长期)：</dt>
    <dd><input type="text" name="emp_kiloCq" id="emp_kiloCq" size="6" value="<?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_kiloCq']) ? $_smarty_tpl->getVariable('employee')->value['emp_kiloCq'] : null);?>
" /> 元/公里</dd>
  </dl>
  <dl class="lineD" style="display:none;" id="show2_2">
    <dt>转岗后超公里补贴(长期)：</dt>
    <dd><input type="text" name="emp_overKmCq" id="emp_overKmCq" size="6" value="<?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_overKmCq']) ? $_smarty_tpl->getVariable('employee')->value['emp_overKmCq'] : null);?>
" /> 元/公里</dd>
  </dl>
  <dl class="lineD" style="display:none;" id="show7_1">
    <dt>转岗后趟数补贴(大客)：</dt>
    <dd><input type="text" name="emp_tripKc" id="emp_tripKc" size="6" value="<?php echo (isset($_smarty_tpl->getVariable('employee')->value['emp_tripKc']) ? $_smarty_tpl->getVariable('employee')->value['emp_tripKc'] : null);?>
" /> 元/趟</dd>
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
	$(document).ready(function(){
	    $('#emp_post').change(function(){
		    var nn=$(this).children('option:selected').val();
		    if (nn==1){
				$('#show1_1').css('display','block');
			    $('#show1_2').css('display','block');
			    $('#show2_1').css('display','none');
			    $('#show2_2').css('display','none');
			    $('#show7_1').css('display','none');
		    }else if (nn==2){
			    $('#show1_1').css('display','none');
			    $('#show1_2').css('display','none');
			    $('#show7_1').css('display','none');
			    $('#show2_1').css('display','block');
			    $('#show2_2').css('display','block');
		    }else if (nn==7){
			    $('#show1_1').css('display','none');
			    $('#show1_2').css('display','none');
			    $('#show2_1').css('display','none');
			    $('#show2_2').css('display','none');
			    $('#show7_1').css('display','block');
		    }
		    else{
				$('#show1_1').css('display','none');
			    $('#show1_2').css('display','none');
			    $('#show2_1').css('display','none');
			    $('#show2_2').css('display','none');
			    $('#show7_1').css('display','none');
		    }
		});
	});
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