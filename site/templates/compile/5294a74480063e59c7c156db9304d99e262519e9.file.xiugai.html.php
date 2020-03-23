<?php /* Smarty version Smarty-3.0.4, created on 2019-11-08 17:47:20
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/wenti/xiugai.html" */ ?>
<?php /*%%SmartyHeaderCode:208715dc539a8d60e19-39543286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5294a74480063e59c7c156db9304d99e262519e9' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/wenti/xiugai.html',
      1 => 1571707178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208715dc539a8d60e19-39543286',
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
  <div class="page_tit">修改问题</div>
  
  <form method="post" action="xiugai_a.php" enctype="multipart/form-data" onsubmit="return check(this)">
  <div class="form2">
    <dl class="lineD">
      <dt><span style="color:red">*</span>问题标题：</dt>
      <dd>
        <input type="text" id="wenti_name" name="wenti_name" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['wenti_name']) ? $_smarty_tpl->getVariable('data')->value['wenti_name'] : null);?>
" />
	  </dd>
    </dl>	
	    <dl class="lineD">
      <dt><span style="color:red">*</span>问题描述：</dt>
      <dd>
      	<textarea name="wenti_shuoming" id="wenti_shuoming" cols="90" rows="8"><?php echo (isset($_smarty_tpl->getVariable('data')->value['wenti_shuoming']) ? $_smarty_tpl->getVariable('data')->value['wenti_shuoming'] : null);?>
</textarea>
      </dd>
    </dl>
    <dl class="lineD">
	      <dt>附件上传：</dt>
	      <dd>
	      	<div id="box">
				<div id="test" ></div>
			</div>
	      </dd>
	 </dl>
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" />
    </div>
     <input type="hidden" name="id" id="id" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['id']) ? $_smarty_tpl->getVariable('data')->value['id'] : null);?>
" />
    <input type="hidden" name="uid" id="uid" value="<?php echo $_smarty_tpl->getVariable('tmpid')->value;?>
" />
  </div>
</div>

<script>
var cid=$("#uid").val();

$('#test').diyUpload({
	url:'../../../../site/includes/fileupload.php?id=9999',
	success:function( data ) {
	    //alert(data.jsonrpc);
		console.info( data );
	},
	error:function( err ) {
		console.info( err );
	},
	formData:{
	    contractid:0,wenti:cid
	}
});
</script>
</body>
</html>