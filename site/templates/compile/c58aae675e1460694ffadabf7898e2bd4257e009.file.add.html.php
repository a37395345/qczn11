<?php /* Smarty version Smarty-3.0.4, created on 2019-12-30 18:19:19
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/car_zhuanyong/add.html" */ ?>
<?php /*%%SmartyHeaderCode:250315e09cf2705c032-10922843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c58aae675e1460694ffadabf7898e2bd4257e009' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/car_zhuanyong/add.html',
      1 => 1577701111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '250315e09cf2705c032-10922843',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
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
	    @media(max-width: 768px){
	    	#jbox{
	    		position: relative;
	    	}
	    }
    </style>
</head>
<body class="gray-bg">
	<div class="wrapper wrapper-content animated fadeInRight">
		<div class="ibox float-e-margins">
			<div class="ibox-title" style="padding-top: 5px">
				<h5 style="padding-top: 10px">添加</h5>
			</div>
			<form method="post" action="index.php?task=add_action" name="form1" id="form1">
				<div class="ibox-content" id="tian">
					<div class="row row-lg">
						<div class="col-sm-12">
							<div class="example-wrap">
								<div class="example">
									<div class="btn-group hidden-xs pull-right" id="exampleTableEventsToolbar" role="group">
									</div>
									<div class="shiji">
										<table class="table table-bordered" class="shiji">
											<tr>
												<th style="background-color:#F5F5F6" width="15%">
													<span style="color:#000">名称：</span>
												</th>
												<td width="35%">
													<input type="text" id="name" class="form-control input-sm" name="name" placeholder="">
												</td>
												<th style="background-color:#F5F5F6" width="15%">
													<span style="color:#000"></span>
												</th>
												<td width="35%">
													<!-- <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')"  id="" class="form-control input-sm" name="" placeholder=""> -->
												</td>
											</tr>
										</table>
									</div>

									<input type="submit" id="submit" class="btn btn-outline btn-default" value="提交" style="width: 10%;margin-left: 45%;display: block;">
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
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
		var cid = $("#cid").val();
		$('#test').diyUpload({
		    url:'../../../../site/includes/fileupload.php?id=8888',
		    success:function( data ) {
		        //alert(data.jsonrpc);
		        console.info( data );
		    },
		    error:function( err ) {
		        console.info( err );    
		    },
		    formData:{
		        contractid:0,paiche:cid
		    }
		});
		$('#form1').submit(function(){
			$('#submit').attr('disabled','disabled');
			$('#submit').val('正在提交');

		});
	</script>
</body>
</html>