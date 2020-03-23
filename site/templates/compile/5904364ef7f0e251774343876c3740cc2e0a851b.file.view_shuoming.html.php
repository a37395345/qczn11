<?php /* Smarty version Smarty-3.0.4, created on 2019-12-04 10:05:47
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/machine/view_shuoming.html" */ ?>
<?php /*%%SmartyHeaderCode:42025de7147b5d3600-50649890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5904364ef7f0e251774343876c3740cc2e0a851b' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/machine/view_shuoming.html',
      1 => 1575425142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42025de7147b5d3600-50649890',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>管理后台</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="../../../css/style.css" rel="stylesheet" type="text/css">
	<link href="../../../css/flbao.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="../../../js/jquery.js"></script>
	<script type="text/javascript" src="../../../js/common.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		.lineD{
			border-bottom: none;
		}
	</style>
</head>

<body style="background-color: #f3f3f3;padding: 20px;">
	<div class="so_main" style="border-top:4px solid #e7eaec;background-color: #fff;padding-bottom: 40px;">
		<div class="page_tit"style="color: #676a6c;font-weight: 700;font-size: 14px; border-bottom:1px solid #e7eaec;padding: 0px 15px 0px; line-height: 48px;">
			修改说明
		</div>
		<form method="post" action="update_shuoming.php" onsubmit="return " name="form1" enctype="multipart/form-data"
			style="padding: 15px;">
			<dl class="lineD" style="font-size: 14px">
				<dd>
					<textarea name="text" id="text" cols="90" rows="5" style="font-size: 14px;border:1px solid #ddd;"  ><?php echo $_smarty_tpl->getVariable('text')->value;?>
</textarea>
				</dd>
			</dl>
			<dl style="padding-top:20px;">
				<button type="button" class="btn btn-default" style="float: left; margin-left:150px"onclick="delVal()">重置</button>
				<button type="submit" class="btn btn-primary" style="float: left; margin-left:220px"onclick="btnSubmit()">确定</button>
			</dl>
		</form>

	</div>
</body>
<script type="text/javascript">
	function delVal() {
		$("#text").val("");
		$("#text").focus()
	};
</script>

</html>