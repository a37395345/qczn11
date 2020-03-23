<?php /* Smarty version Smarty-3.0.4, created on 2015-06-02 14:31:17
         compiled from "D:\czyhqc\site\templates\elsker\operator/busiaccount/result.html" */ ?>
<?php /*%%SmartyHeaderCode:32410556d4db5a09ea3-26462243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b5887fc07e88ba6f93eb7c6b772d174edefcffd' => 
    array (
      0 => 'D:\\czyhqc\\site\\templates\\elsker\\operator/busiaccount/result.html',
      1 => 1433214506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32410556d4db5a09ea3-26462243',
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