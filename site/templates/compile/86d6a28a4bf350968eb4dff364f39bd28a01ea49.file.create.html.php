<?php /* Smarty version Smarty-3.0.4, created on 2016-01-16 17:30:57
         compiled from "D:\web\site\templates\elsker\operator/sales/sms/create.html" */ ?>
<?php /*%%SmartyHeaderCode:30917569a0dd2022881-08274419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86d6a28a4bf350968eb4dff364f39bd28a01ea49' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/sales/sms/create.html',
      1 => 1452935556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30917569a0dd2022881-08274419',
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
<link href="../../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<script type="text/javascript" src="../../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<script type="text/javascript" src="../../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit">短信发送</div>  
  <form method="post" action="insert.php" onsubmit="return sms_check()" name="form1">
  <div class="form2">
  		<dl class="lineD">
	      <dt><span class="redstar">*</span>发送手机号：</dt>
	      <dd>
	        <textarea id="smsphone" name="smsphone" cols="100" rows="10"></textarea>
	        <input type="button" name="dd" onclick="selUser()" value="选择发送人">
	      </dd>
	    </dl>
	    <dl class="lineD">
		  <dt><span class="redstar">*</span>短信内容：</dt>
		  <dd>
	        <textarea id="smscontent" name="smscontent" cols="120" rows="10" ></textarea>
		  </dd>
		</dl>
		<dl class="lineD">
		    <dt>短信选项：</dt>
		    <dd>短信字数<input id="sms_total" name="sms_total" type="text" size="6" readonly />&nbsp;&nbsp;&nbsp;&nbsp;
		  	  	短信条数<input id="sms_total2" name="sms_total2" type="text" size="4" readonly />&nbsp;&nbsp;&nbsp;&nbsp;
		    <input type="radio" name="optType" id="optType" value="1">及时发送 <input type="radio" id="optType" name="optType" value="0" checked>定时发送&nbsp;&nbsp;
		    	发送时间<input id="validity_start" type="text" name="validity_start" value="<?php echo $_smarty_tpl->getVariable('nowtime')->value;?>
" onclick="calendar.show(this);"></dd>
		</dl>
		<dl class="lineD">
		    <dt>注意事项：</dt>
		    <dd>一、本页面主要实现单个或多个手机号码的发送,单个或少量手机号码可以选择及时发送的方式，大量手机号码的发送请选用定时发送方式；<br>二、手工录入号码时请将号码用英文逗号“<font color=#FF0000>,</font> ”隔开,例如：13900000000，13100000000,05510000000（号码为11位）；<br>三、短信内容最多可以输入660个字，最多一次可发送50个手机号码；<br>四、短信内容不得包含<font color=#FF0000>涉嫌诈骗、色情、反动、政治等非法字眼的词组</font>，否则将可能造成短信无法正常发送；<br>五、定时发送时间不能早于当前时间。</dd>
		</dl>
  	
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" /><b> 注：<span class="red">*</span>为必填项</b>
    </div>
  </div>
  <input type="hidden" name="task" id="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  </form>
</div>
<!-->
<script>
$(document).ready(function(){
	$("#smscontent").live('input propertychange',function(){
		Count();
	});
});
function Count(){
	$("#sms_total").val($("#smscontent").val().length);
	if ($("#smscontent").val().length)
		$("#sms_total2").val(parseInt($("#smscontent").val().length/70)+1);
}
function sms_check(){
	if ($("#smsphone").val()==""){
		alert("发送手机号不能为空！");
		$("#smsphone").focus();
		return false;
	}
	if ($("#smscontent").val()==""){
		alert("发送内容不能为空！");
		$("#smscontent").focus();
		return false;
	}
}
function selUser(){
	demo_iframe('select.php','选择发送人员',750,480,'login_js');
}
</script>
<!-->
</body>
</html>