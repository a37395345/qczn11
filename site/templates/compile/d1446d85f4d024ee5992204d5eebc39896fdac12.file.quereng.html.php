<?php /* Smarty version Smarty-3.0.4, created on 2019-03-26 18:30:39
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/wenti/quereng.html" */ ?>
<?php /*%%SmartyHeaderCode:305455c99ff4f199b08-23433174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1446d85f4d024ee5992204d5eebc39896fdac12' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/wenti/quereng.html',
      1 => 1553596231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '305455c99ff4f199b08-23433174',
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
<script type="text/javascript" src="../../../../js/common.js"></script>
<script type="text/javascript" src="../../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../../js/check_form.js"></script>
<script type="text/javascript" src="../../../../js/diyUpload/webuploader.html5only.min.js"></script>
<script type="text/javascript" src="../../../../js/diyUpload/diyUpload.js"></script>

</head>
<style>
/**/

	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
#box{width:840px; min-height:200px; background:#FF9}
/**/
</style>
<body>
<div class="so_main">
  <div class="page_tit">问题确认</div>
  
  <form method="post" action="quereng_a.php"  onsubmit="return check(this)">
  <div class="form2">
    <dl class="lineD">
      <dl class="lineD">
		  <dt>是否解决：</dt>
		  <dd>
		  <input type="radio" name="quereng_type" id="shenhe_type" checked value="1" />已解决&nbsp;&nbsp;
		  <input type="radio" name="quereng_type" id="shenhe_type" value="2" />未解决&nbsp;&nbsp;
		  
		  
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