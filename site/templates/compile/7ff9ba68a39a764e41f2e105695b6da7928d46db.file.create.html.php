<?php /* Smarty version Smarty-3.0.4, created on 2015-04-14 10:47:22
         compiled from "D:\czyhqc\site\templates\elsker\operator/finance/pos/create.html" */ ?>
<?php /*%%SmartyHeaderCode:29750552c7fba7c5e41-21047354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ff9ba68a39a764e41f2e105695b6da7928d46db' => 
    array (
      0 => 'D:\\czyhqc\\site\\templates\\elsker\\operator/finance/pos/create.html',
      1 => 1409728660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29750552c7fba7c5e41-21047354',
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

<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit">处理</div>  
  <form method="post" action="list.php" name="form1">
  <div class="form2">
	  	<dl class="lineD">
		  <dt>刷卡金额：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['money']) ? $_smarty_tpl->getVariable('list')->value['money'] : null);?>
</dd>
		</dl>
	  	<dl class="lineD">
		  <dt>手续费：</dt>
		  <dd><input type="text" name="fee" id="fee" size="10" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['fee']) ? $_smarty_tpl->getVariable('list')->value['fee'] : null);?>
" /></dd>
		</dl>
		<dl class="lineD">
		  <dt>成本：</dt>
		  <dd><input type="text" name="cost" id="cost" size="10" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['cost']) ? $_smarty_tpl->getVariable('list')->value['cost'] : null);?>
" /></dd>
		</dl>
		<dl class="lineD">
		  <dt>利润：</dt>
		  <dd><input type="text" name="profit" id="profit" size="10" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['profit']) ? $_smarty_tpl->getVariable('list')->value['profit'] : null);?>
" readonly="readonly" /></dd>
		</dl>
		
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" />
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['id']) ? $_smarty_tpl->getVariable('list')->value['id'] : null);?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  </form>
</div>
<!-->
<script>
$(document).ready(function(){
	$("#fee,#cost").live('input propertychange',function(){
		a=$("#fee").val()==""? 0 : parseFloat($("#fee").val());
		b=$("#cost").val()==""? 0 : parseFloat($("#cost").val());
		$("#profit").val(a-b);
	});
});
</script>
<!-->
</body>
</html>