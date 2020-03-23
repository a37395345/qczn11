<?php /* Smarty version Smarty-3.0.4, created on 2020-03-18 17:38:27
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/car/update_image.html" */ ?>
<?php /*%%SmartyHeaderCode:3785e71ec1314cd86-63513667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38247641e3891ec61e3c026672c192003b5e78a6' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/car/update_image.html',
      1 => 1584524271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3785e71ec1314cd86-63513667',
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
	<script type="text/javascript" src="../../../../js/diyUpload/diyUpload.js?a=<?php echo time();?>
"></script>
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
    </style>
</head>
<body class="gray-bg">
	<div class="wrapper wrapper-content animated fadeInRight">
		<div class="ibox float-e-margins">
			<form method="post" action="index.php?task=update_imageAction" name="form1" id="form1" enctype="multipart/form-data">
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
													<span style="color:#000">车辆首图照片：</span>
												</th>
												<td width="85%">
													<input id="tp_b" style="float: left;margin-top: 60px;" type="file" name="images" value="">
													<img src="../../../thumb/<?php echo $_smarty_tpl->getVariable('car_image')->value;?>
" width="200" height="150" />
													<img src="" id="images_a" width="200">
													<input type="hidden" name="oldimages" value="<?php echo $_smarty_tpl->getVariable('car_image')->value;?>
"/>
												</td>
											</tr>
										</table>
							
									</div>

									<div>
										<table style="text-align: left;" class="table table-bordered" id="pic">
											<tr>
                                               <td width="100%">
                                                   <div id="box">
                                                       <div id="test"></div>
                                                   </div>
                                               </td>
                                           </tr>
                                           <tr>
                                           </tr>
                                           <div>
	                                           <ul>
	                                           <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable(0, null, null);?>
	                                           <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('image_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	                                            <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->getVariable('index')->value+1, null, null);?>
	                                            <li style="float:left;text-align:center;"><a href="index.php?task=picture&car_id=<?php echo $_smarty_tpl->getVariable('car_id')->value;?>
&nowserial=<?php echo $_smarty_tpl->getVariable('index')->value;?>
" title="点击查看原图" target="_blank"><img src="../../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['images']) ? $_smarty_tpl->tpl_vars['rows']->value['images'] : null);?>
" width="100" height="100" /></a><input type="checkbox" name="delimg[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" />删除<br /></li>
	                                           <?php }} ?>
	                                           </ul>
	                                       </div>
										</table>
									</div>
									<input type="submit" id="submit" class="btn btn-outline btn-default" value="提交" style="width: 10%;margin-left: 45%;display: block;">
								</div>
							</div>
						</div>
					</div>
				</div>
				<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('car_id')->value;?>
" name="car_id" id="car_id">
			</form>
		</div>
	</div>
	
	<script src="../../../crm/js/bootstrap.min.js?v=3.3.6"></script>
	<script src="../../../crm/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
    <script src="../../../crm/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
    <script src="../../../crm/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
    <script src="../../../crm/js/demo/bootstrap-table-demo.min.js"></script>
	<script>
		var cid = $("#car_id").val();
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
		        contractid:0,car:cid
		    }
		});
		$('#form1').submit(function(){
			$('#submit').attr('disabled','disabled');
			$('#submit').val('正在提交');

		});
	</script>
</body>
</html>