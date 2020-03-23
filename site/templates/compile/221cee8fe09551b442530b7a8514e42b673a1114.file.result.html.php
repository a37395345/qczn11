<?php /* Smarty version Smarty-3.0.4, created on 2019-05-31 15:20:00
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/busiaccount/result.html" */ ?>
<?php /*%%SmartyHeaderCode:310675cf0d5a0df87b8-66112807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '221cee8fe09551b442530b7a8514e42b673a1114' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/busiaccount/result.html',
      1 => 1447233599,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '310675cf0d5a0df87b8-66112807',
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