<?php /* Smarty version Smarty-3.0.4, created on 2019-08-29 15:33:06
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/department/result.html" */ ?>
<?php /*%%SmartyHeaderCode:9755d677fb2443cd0-21764348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b523f6bfbecaf9c4012869588df6cba19922ef4' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/department/result.html',
      1 => 1565856497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9755d677fb2443cd0-21764348',
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
		    var printchange=document.getElementById("printchange").value;
		    if (printchange=="yes"){
			window.open("print.php?className=changecar&uid="+document.getElementById("pid").value+"&cid="+document.getElementById("cid").value,"blank");
		    }
			window.parent.window.location.reload();
	        window.parent.window.jBox.close();
		}
		setTimeout("delayURL()", 1000);
	}
	
</script>
</head>
<body>
<input type="hidden" id="printchange" value="<?php echo $_smarty_tpl->getVariable('printchange')->value;?>
" />
<input type="hidden" id="pid" value="<?php echo $_smarty_tpl->getVariable('pid')->value;?>
" />
<input type="hidden" id="cid" value="<?php echo $_smarty_tpl->getVariable('cid')->value;?>
" />
<div style="width:100%;text-align:center;">
<?php echo $_smarty_tpl->getVariable('result')->value;?>
,<span id="time" style="background: #00BFFF">2</span>秒钟后页面自动关闭。
</div>
<script type="text/javascript">
	delayURL();
</script>
</body>
</html>