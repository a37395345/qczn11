<?php /* Smarty version Smarty-3.0.4, created on 2019-11-08 17:41:55
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/wenti/chuli.html" */ ?>
<?php /*%%SmartyHeaderCode:309435dc53863c07d11-53506137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8df3c2741866c9aa9f41ce2f129e9a6855ba0496' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/wenti/chuli.html',
      1 => 1571707178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '309435dc53863c07d11-53506137',
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
<link rel="stylesheet" type="text/css" href="../../../../css/webuploader.css">
<link rel="stylesheet" type="text/css" href="../../../../css/diyUpload.css">
<script src="../../../../jquery.js"></script>


</head>

<body>
<div class="so_main">
  <div class="page_tit">系统管理员处理</div>
  
  <form method="post" action="chuli_a.php"  onsubmit="return check(this)">
  <div class="form2">
    <dl class="lineD">
      <dl class="lineD">
		  <dt>处理结果：</dt>
		  <dd>
		  <input type="radio" name="shenhe_type" id="shenhe_type" checked value="1" />问题解决&nbsp;&nbsp;
		  <input type="radio" name="shenhe_type" id="shenhe_type" value="2" />不能解决&nbsp;&nbsp;
		  
		  
		  </dd>
		</dl>
	<dl class="lineD">
      <dt><span style="color:red">*</span>理由：</dt>
      <dd>
      	<textarea name="wenti_liyou" id="wenti_liyou" cols="90" rows="8"></textarea>
      </dd>
    </dl>
    
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" />
    </div>
    <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->getVariable('id')->value;?>
" />
  </div>
</div>


</body>
</html>