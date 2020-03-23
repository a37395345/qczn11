<?php /* Smarty version Smarty-3.0.4, created on 2019-09-30 13:56:45
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/machine/changecreate.html" */ ?>
<?php /*%%SmartyHeaderCode:16240113825d91991d666103-03077418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01209b631634d43d82a09a0c64a4b2935f55d3b4' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/machine/changecreate.html',
      1 => 1569749230,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16240113825d91991d666103-03077418',
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
  <form method="post" action="changelist.php" name="form1" id="form1">
  <input type="hidden" name="task" value="changecreate_acc" />
  <div class="form2">
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>变化日期：</dt>
	    <dd><input type="text" name="change_time" id="change_time" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['change_time']) ? $_smarty_tpl->getVariable('list')->value['change_time'] : null);?>
" readonly="readonly"  /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>备注：</dt>
	    <dd><textarea name="change_remark" id="change_remark" cols="40" rows="5"><?php echo (isset($_smarty_tpl->getVariable('list')->value['change_remark']) ? $_smarty_tpl->getVariable('list')->value['change_remark'] : null);?>
</textarea></dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>实时数量：</dt>
	    <dd><input type="text" name="change_number" id="change_number" size="6" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['change_number']) ? $_smarty_tpl->getVariable('list')->value['change_number'] : null);?>
" /></dd>
	  </dl>
	  
    <div class="page_btm">
      <input type="button" class="btn_b" value="确定" onclick="ok()" /><b> 注：<span class="red">*</span>为必填项</b>
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_id']) ? $_smarty_tpl->getVariable('list')->value['car_id'] : null);?>
" />
  </form>
</div>
<!-->
<script>

function ok(){
	
	if (!$('#change_time').val()){
		alert("请填写时间！");
		$('#change_time').focus();
		return false;
	}
	if (!$('#change_number').val()){
		alert("请填写实时数量！");
		$('#change_number').focus();
		return false;
	}

	if(!confirm('请仔细核对，一旦提交就无法修改了，确定提交吗？')){
		return false;
	}
	
	$("#form1").submit();
	
	//window.parent.window.location.reload();
    //window.parent.window.jBox.close();
}


function closebox(){
	window.parent.window.jBox.close();
}

</script>
<!-->
</body>
</html>