<?php /* Smarty version Smarty-3.0.4, created on 2019-10-02 16:04:41
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/finance/baoxiao/upload.html" */ ?>
<?php /*%%SmartyHeaderCode:3850854335d945a19df5802-19285583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca26373d629fc99adfb18b9109d9dc69c85e13a4' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/finance/baoxiao/upload.html',
      1 => 1569749247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3850854335d945a19df5802-19285583',
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
<script type="text/javascript" src="../../../../js/diyUpload/webuploader.html5only.min.js"></script>
<script type="text/javascript" src="../../../../js/diyUpload/diyUpload.js"></script>
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
#box{width:840px; min-height:200px; background:#FF9}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit">补传附件</div>
  <div class="form2">

		<dl class="lineD">
	      <dt>发票扫描件：</dt>
	      <dd>
	      	<div id="box">
				<div id="test" ></div>
			</div>
	      </dd>
	   </dl>
    <div class="page_btm">
      <input type="button" onclick="closewin()" class="btn_b" name="btn_save" value="确定" />
    </div>
  </div>
  <input type="hidden" name="uid" id="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_id']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_id'] : null);?>
" />
  <input type="hidden" name="fid" id="fid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['finance_id']) ? $_smarty_tpl->getVariable('list')->value['finance_id'] : null);?>
" />
</div>
<!-->
<script>
var cid=$("#uid").val();
var fid=$("#fid").val();
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
	    contractid:0,baoxiaoid:cid,otherid:fid
	}
});
function closewin(){
	window.parent.window.location.reload();
	window.parent.window.jBox.close();
}

</script>
<!-->
</body>
</html>