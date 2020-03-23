<?php /* Smarty version Smarty-3.0.4, created on 2019-12-26 17:04:50
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/zijia_linshi/contract.html" */ ?>
<?php /*%%SmartyHeaderCode:229445e0477b2d727c9-09545644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6aad9b73878e06a5a04bb0ff560397a1b9017194' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/zijia_linshi/contract.html',
      1 => 1577350583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '229445e0477b2d727c9-09545644',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>demo</title>
	<meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="../../../../css/style.css" rel="stylesheet" type="text/css">
	<link href="../../../css/box.css" rel="stylesheet" type="text/css" />
	<link href="../../../css/jquery.editable-select.min.css" rel="stylesheet" type="text/css" />
	<link href="../../../crm/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
	<link href="../../../crm/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
	<link href="../../../crm/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
	<link href="../../../crm/css/animate.min.css" rel="stylesheet">
	<link href="../../../crm/css/style.min862f.css?v=2" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../../../css/diyUpload.css">
	<link rel="stylesheet" type="text/css" href="../../../../css/webuploader.css">
	<script src="../../../../jquery.js"></script>
	<script type="text/javascript" src="../../../js/laydate/laydate.js"></script>
	<script type="text/javascript" src="../../../js/common.js"></script>
	<script type="text/javascript" src="../../../js/jquery.editable-select.min.js"></script>
	<script type="text/javascript" src="../../../../js/diyUpload/webuploader.html5only.min.js"></script>
	<script type="text/javascript" src="../../../../js/diyUpload/diyUpload.js?a=100"></script>
    <style>
    	#box{
    		width:100%; 
    		min-height:300px; 
    		background:#FF9
    	}
	    .example div ul{
	        overflow:hidden;
	    }
	    .example div ul li img{
	        display: block;
	        border: 1px solid #ddd;
	        box-shadow: 1px 1px 5px 0px #a2958a;
	        padding: 6px;
	        text-align: center;
	        vertical-align: middle;
	    }
    	input[type="checkbox"]{
	      width:18px;
	      height:18px;
	      display: inline-block;
	      text-align: center;
	      vertical-align:baseline; 
	      line-height: 18px;
	      position: relative;
	      border-radius: 50%;
	      outline: none;
	      -webkit-appearance: none;
	      border:1px solid #fff;
	      -webkit-tab-highlight-color: rgba(0,0,0,0);
	      color: #fff;
	      background: #fff;
	      top: 4px;
	    }
	    input[type="checkbox"]::before{
	      content: "";
	      position: absolute;
	      top: 0;
	      left: 0;
	      background: #fff;
	      width: 100%;
	      height: 100%;
	      border: 1px solid #999999;
	      border-radius: 50%;
	      color: #fff;
	    }
	    input[type="checkbox"]:checked::before{
	      content: "\2713";
	      background-color: #657AFE;
	      border: 1px solid #657AFE;
	      position: absolute;
	      top: 0;
	      left: 0;
	      width:100%;
	      color:#fff;
	      font-size: 18px;
	      border-radius: 50%;
	    }
	    input[type="checkbox"]:disabled::before{
	        background: #eee;
	        cursor: default;
	    }
	    input[type="checkbox"]:focus{
	        border: none!important;
	    }
	    input{
	        outline:none!important;
	    }
	    #box{
	    	background: #fff;
	    	box-shadow: 0 0 2px rgba(0,0,0,0.188235);
	    }
		.ibox_con{
			text-align: center;
		}
		.ibox-tools{
			display: inline-block;
			float:inherit;
			margin: 100px 20px 0 20px;
		}
    </style>
</head>
<body class="gray-bg">
	<div class="wrapper wrapper-content animated fadeInRight">
		<div class="ibox float-e-margins">
			<div class="ibox-title">
				<h5>操作选项</h5>
			</div>
			<div class="ibox_con">
				<div class="ibox-tools" style="">
	                <a class="btn btn-outline btn-default" href="print.php?uid=<?php echo $_smarty_tpl->getVariable('pid')->value;?>
&className=pact" target="_blank">   
	                    打印租车合同
	                </a>
	         	</div>
	         	<?php if ($_smarty_tpl->getVariable('count')->value>0){?>
	         	<div class="ibox-tools" style="">
	                <a class="btn btn-outline btn-default" href="zijia_list.php?task=yanzheng_shenfen&pid=<?php echo $_smarty_tpl->getVariable('pid')->value;?>
">   
	                    打印换车合同
	                </a>
	         	</div>
	         	<?php }?>
			</div>
		</div>
	</div>
	<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('cid')->value;?>
" name="cid" id="cid">
	<script src="../../../crm/js/bootstrap.min.js?v=3.3.6"></script>
	<script src="../../../crm/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
    <script src="../../../crm/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
    <script src="../../../crm/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
    <script src="../../../crm/js/demo/bootstrap-table-demo.min.js"></script>
	<script>
		$('#form1').submit(function(){
			$('#submit').attr('disabled','disabled');
			$('#submit').val('正在提交');

		});
	</script>
</body>
</html>