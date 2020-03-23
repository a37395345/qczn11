<?php /* Smarty version Smarty-3.0.4, created on 2019-11-11 10:10:18
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/busiaccount/result.html" */ ?>
<?php /*%%SmartyHeaderCode:140055dc8c30a42f579-46743569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2da87ee51891cb2fe9ec11238cac64825b0ab208' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/busiaccount/result.html',
      1 => 1571707171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140055dc8c30a42f579-46743569',
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