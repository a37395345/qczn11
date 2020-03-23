<?php /* Smarty version Smarty-3.0.4, created on 2019-11-08 17:41:06
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/wenti/add.html" */ ?>
<?php /*%%SmartyHeaderCode:296455dc53832c38018-14357987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8797d27146e4fd94af1944df0f2b856f015e6b1' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/wenti/add.html',
      1 => 1573206061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '296455dc53832c38018-14357987',
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
<script type="text/javascript" src="../../../../js/diyUpload/diyUpload.js?a=2"></script>

</head>
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
	#box{width:840px; min-height:200px; background:#FF9}
	.gray-bg{
      background-color: #f3f3f4;
      padding: 20px;
    }
	.xt_problems{
      padding: 0 20px 20px 20px;
      background-color: #fff; 
      border-top:4px solid #e7eaec;
    }
    .xt_problems .form2 .lineD{
    	border-bottom: none;
    }
    .xt_problems .table{
    	width: 100%;
	    max-width: 100%;
	    margin-bottom: 20px;
	    border-spacing: 0;
    	border-collapse: collapse;
    }
    .xt_problems .table tr th{
    	padding: 12px 8px 12px 8px;
    	border-top:1px solid #e7e7e7;
    	border-left:1px solid #e7e7e7;
    	border-bottom:1px solid #e7e7e7;
    }
    .xt_problems .table tr td{
    	padding: 12px 8px 12px 8px;
    	border-top:1px solid #e7e7e7;
    	border-left:1px solid #e7e7e7;
    	border-right:1px solid #e7e7e7;
    	border-bottom:1px solid #e7e7e7;
    }
    .xt_problems .table tr td input{
    	height: 28px;
    	border: 1px solid #e5e6e7;
    	width: 100%;
    	text-indent: 1em;
    }
    .xt_problems .table tr td textarea{
    	border:1px solid #ccc;
    	width: 98%;
    }
    .xt_problems .form2 dt{
    	width:auto;
    }
    .xt_problems .form2 dd{
    	margin-left: 70px;
    }
    .page_btm{
    	border-top:none;
    }
    .page_btm .btn_b{
    	width: auto;
    	height: auto;
    	color: #fff;
    	padding: 9px 20px;
    	font-size: 14px;
    	border-radius: 3px;
    	cursor: pointer;
    	background: #00b7ee;
    }
    .page_btm{
    	padding:18px 0 18px 75px;
    }
    #box{
    	background:#fff;
    	box-shadow:0 0 2px rgba(0,0,0,0.188235);
    }
/**/
</style>
<body class="gray-bg">
<div class="xt_problems">
<div class="so_main">
  <div class="page_tit">添加问题</div>
  
  <form method="post" action="insert.php" enctype="multipart/form-data" onsubmit="return check(this)">
  <div class="form2">

  	<table class="table table-bordered" width="100%" border="0" cellspacing="0" cellpadding="0">
  		<tr>
  			<th style="background-color:#F5F5F6;" width="15%">问题标题</th>
  			<td style="padding: 8px;" width="35%"><input type="text" id="wenti_name" name="wenti_name" value="" placeholder="必填" /></td>
  			<th style="background-color:#F5F5F6;" width="15%">问题描述：</th>
  			<td style="padding: 8px;" width="35%"><input name="wenti_shuoming" id="wenti_shuoming" placeholder="必填"></input></td>
  		</tr>
  	</table>
    <dl class="lineD">
	      <dt>附件上传：</dt>
	      <dd>
	      	<div id="box">
				<div id="test" ></div>
			</div>
	      </dd>
	 </dl>
    <div class="page_btm col-sm-4 col-sm-offset-2">
      <input type="submit" class="btn_b" id="bt1" value="确定" />
    </div>
    <input type="hidden" name="uid" id="uid" value="<?php echo $_smarty_tpl->getVariable('tmpid')->value;?>
" />
  </div>
</div>
</div>

<script>

$("#bt1").click(function(){
	var wenti_name=$("#wenti_name").val();
	var wenti_shuoming=$("#wenti_shuoming").val();
	if(wenti_name==""){
		alert('标题不能为空！');
		return false;
	}
	if(wenti_shuoming==""){
		alert('请详细描述下需要解决的问题！');
		return false;
	}
});




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