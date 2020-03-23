<?php /* Smarty version Smarty-3.0.4, created on 2014-09-05 11:19:50
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/sales/negotiate/create.html" */ ?>
<?php /*%%SmartyHeaderCode:3129454092bd638b437-94667729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19fd87fb1fadeb04be564cb8191f803198c83212' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/sales/negotiate/create.html',
      1 => 1409887090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3129454092bd638b437-94667729',
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
<script type="text/javascript" src="../../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<script type="text/javascript" src="../../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../../js/check_form.js"></script>
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit">洽谈结果反馈</div>  
  <form method="post" action="insert.php" onsubmit="return negotiate_check(this)" name="form1">
  <div class="form2">
  		<dl class="lineD">
	      <dt><span class="redstar">*</span>洽谈日期：</dt>
	      <dd>
	        <input type="text" name="negotiate_Date" id="negotiate_Date" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['negotiate_Date']) ? $_smarty_tpl->getVariable('list')->value['negotiate_Date'] : null);?>
" onClick="calendar.show(this);" readonly="readonly" />
	      </dd>
	    </dl>
	    <dl class="lineD">
		  <dt><span class="redstar">*</span>接洽人：</dt>
		  <dd>
	        <input type="text" name="negotiate_linker" id="negotiate_linker" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['negotiate_linker']) ? $_smarty_tpl->getVariable('list')->value['negotiate_linker'] : null);?>
" />
		  </dd>
		</dl>
		<dl class="lineD">
		    <dt>洽谈方式：</dt>
		    <dd><input type="radio" name="negotiate_type" value="电话" <?php if ((isset($_smarty_tpl->getVariable('list')->value['negotiate_type']) ? $_smarty_tpl->getVariable('list')->value['negotiate_type'] : null)=="电话"||(isset($_smarty_tpl->getVariable('list')->value['negotiate_type']) ? $_smarty_tpl->getVariable('list')->value['negotiate_type'] : null)==''){?>checked<?php }?> />电话&nbsp;&nbsp;<input type="radio" name="negotiate_type" value="上门" <?php if ((isset($_smarty_tpl->getVariable('list')->value['negotiate_type']) ? $_smarty_tpl->getVariable('list')->value['negotiate_type'] : null)=="上门"){?>checked<?php }?> />上门&nbsp;&nbsp;<input type="radio" name="negotiate_type" value="其他" <?php if ((isset($_smarty_tpl->getVariable('list')->value['negotiate_type']) ? $_smarty_tpl->getVariable('list')->value['negotiate_type'] : null)=="其他"){?>checked<?php }?> />其他</dd>
		</dl>
		<dl class="lineD">
		    <dt>洽谈内容：</dt>
		    <dd><textarea name="negotiate_Remarks" cols="40" rows="5"><?php echo (isset($_smarty_tpl->getVariable('list')->value['negotiate_Remarks']) ? $_smarty_tpl->getVariable('list')->value['negotiate_Remarks'] : null);?>
</textarea></dd>
		</dl>
		<dl class="lineD">
		    <dt>结果判定：</dt>
		    <dd><input type="radio" name="negotiate_result" value="0" <?php if ((isset($_smarty_tpl->getVariable('list')->value['negotiate_result']) ? $_smarty_tpl->getVariable('list')->value['negotiate_result'] : null)==0){?>checked<?php }?> />需要继续跟进&nbsp;&nbsp;
		    <input type="radio" name="negotiate_result" value="1" <?php if ((isset($_smarty_tpl->getVariable('list')->value['negotiate_result']) ? $_smarty_tpl->getVariable('list')->value['negotiate_result'] : null)==1){?>checked<?php }?> />已决定租车&nbsp;&nbsp;
		    <input type="radio" name="negotiate_result" value="2" <?php if ((isset($_smarty_tpl->getVariable('list')->value['negotiate_result']) ? $_smarty_tpl->getVariable('list')->value['negotiate_result'] : null)==2){?>checked<?php }?> />已选择其他租车公司&nbsp;&nbsp;
		    <input type="radio" name="negotiate_result" value="3" <?php if ((isset($_smarty_tpl->getVariable('list')->value['negotiate_result']) ? $_smarty_tpl->getVariable('list')->value['negotiate_result'] : null)==3){?>checked<?php }?> />用户已放弃</dd>
		</dl>
  	
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" /><b> 注：<span class="red">*</span>为必填项</b>
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['negotiate_id']) ? $_smarty_tpl->getVariable('list')->value['negotiate_id'] : null);?>
" />
  <input type="hidden" name="consult_id" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['consult_id']) ? $_smarty_tpl->getVariable('list')->value['consult_id'] : null);?>
" />
  <input type="hidden" name="task" id="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  </form>
</div>
<!-->
<script>

</script>
<!-->
</body>
</html>