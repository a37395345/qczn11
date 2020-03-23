<?php /* Smarty version Smarty-3.0.4, created on 2019-03-26 17:17:11
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/wenti/shenhe.html" */ ?>
<?php /*%%SmartyHeaderCode:6855c99ee1707c093-62048562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a55eae09675b4ad7218c052e20c0616dbd84793d' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/wenti/shenhe.html',
      1 => 1553591638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6855c99ee1707c093-62048562',
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
  <div class="page_tit">领导审核</div>
  
  <form method="post" action="shenhe_a.php"  onsubmit="return check(this)">
  <div class="form2">
    <dl class="lineD">
      <dl class="lineD">
		  <dt>收入类型：</dt>
		  <dd>
		  <input type="radio" name="shenhe_type" id="shenhe_type" checked value="1" />通过&nbsp;&nbsp;
		  <input type="radio" name="shenhe_type" id="shenhe_type" value="2" />发回修改&nbsp;&nbsp;
		  
		  
		  </dd>
		</dl>
	<dl class="lineD">
      <dt><span style="color:red">*</span>意见：</dt>
      <dd>
      	<textarea name="wenti_shenheyijian" id="wenti_shenheyijian" cols="90" rows="8"></textarea>
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