<?php /* Smarty version Smarty-3.0.4, created on 2019-03-21 14:25:42
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/machine/view_shuoming.html" */ ?>
<?php /*%%SmartyHeaderCode:270245c932e66075187-38097706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ea5ad8d70ebb3837d3ffaec0678671ffc0df47d' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/machine/view_shuoming.html',
      1 => 1553149538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '270245c932e66075187-38097706',
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
<link href="../../../css/flbao.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
</head>
<body>
<div class="so_main">
  <div class="page_tit">修改说明</div>
  	  <form method="post" action="update_shuoming.php" onsubmit="return " name="form1" enctype="multipart/form-data">
	  	 <dl class="lineD">
		  <dt><span class="redstar">*</span>说明：</dt>
		  <dd><textarea name="text" id="text" cols="90" rows="8" ><?php echo $_smarty_tpl->getVariable('text')->value;?>
</textarea></dd>
		</dl>
		   <input type="submit" class="btn_b" value="确定" />
  	  </form>
	</div>

</body>
</html>