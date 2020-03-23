<?php /* Smarty version Smarty-3.0.4, created on 2014-07-31 17:12:35
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/business/result.html" */ ?>
<?php /*%%SmartyHeaderCode:180653da088340cac0-61595796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89b3ad0a03512a790ed3352f99d5ae0e26516270' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/business/result.html',
      1 => 1406797813,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180653da088340cac0-61595796',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<script language="JavaScript" type="text/javascript">
	function delayURL() {
		var delay = document.getElementById("time").innerHTML;
		if(delay > 0) {
			delay--;
			document.getElementById("time").innerHTML = delay;
		} else {
			window.parent.window.location.reload();
	        window.parent.window.jBox.close();
		}
		setTimeout("delayURL()", 1000);
	}
	
</script>
</head>
<body>
<div style="width:100%;text-align:center;">
<?php echo $_smarty_tpl->getVariable('result')->value;?>
,<span id="time" style="background: #00BFFF">2</span>秒钟后页面自动关闭。
</div>
<script type="text/javascript">
	delayURL();
</script>
</body>
</html>