<?php /* Smarty version Smarty-3.0.4, created on 2019-10-08 15:57:56
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/car/siji_xiangxi.html" */ ?>
<?php /*%%SmartyHeaderCode:6833818665d9c41845b9a33-12174405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0e15e061cb479457bc2bf60895417b6799fea09' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/car/siji_xiangxi.html',
      1 => 1569749209,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6833818665d9c41845b9a33-12174405',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>



<!DOCTYPE html>
<html>
<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:03 GMT -->
<head>



<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=9;IE=8;IE=7;IE=EDGE">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>管理后台</title>
<link rel="shortcut icon" href="favicon.ico">
<link href="../../../crm/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
<link href="../../../crm/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
<link href="../../../crm/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
<link href="../../../crm/css/animate.min.css" rel="stylesheet">
<link href="../../../crm/css/style.min862f.css?v=4.1.0" rel="stylesheet">
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/laydate/laydate.js?a=<?php echo (isset($_smarty_tpl->getVariable('list')->value['change_time']) ? $_smarty_tpl->getVariable('list')->value['change_time'] : null);?>
"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../js/check_form.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js?a=3"></script>
<script type="text/javascript" src="../../../js/jquery.editable-select.min.js"></script>
<!-->
<script type="text/javascript">

</script>
<!--><object classid="clsid:F1317711-6BDE-4658-ABAA-39E31D3704D3" codebase="SDRdCard.cab#version=1,3,5,0" width="330" height="0" align="center" hspace="0" vspace="0" id="idcard" name="rdcard"></object>

</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
	<!-- Panel Other -->
	<div class="ibox float-e-margins">
		<div class="ibox-title">
			<h5>司机详细资料 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
		</div>
		
			<div class="ibox-content"  id="tian">
				<div class="row row-lg">
					<div class="col-sm-12">
						<!-- Example Events -->
						<div class="example-wrap">
							<div class="example">
								
								<div class="btn-group hidden-xs pull-right" id="exampleTableEventsToolbar" role="group">
								</div>
								

								<div class="shiji">
									<table class="table table-bordered" class="shiji">
									
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">姓名：</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="" id="" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('emp')->value['emp_name']) ? $_smarty_tpl->getVariable('emp')->value['emp_name'] : null);?>
">
										</td>

										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">性别:</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="" id="chaoshi_feiyong" readonly="readonly" unselectable="on" name="chaoshi_feiyong" value="<?php echo (isset($_smarty_tpl->getVariable('emp')->value['emp_sex']) ? $_smarty_tpl->getVariable('emp')->value['emp_sex'] : null);?>
">
										</td>
									</tr>
									
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">驾照类型:</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="" id="stime" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('emp')->value['emp_driverlicense']) ? $_smarty_tpl->getVariable('emp')->value['emp_driverlicense'] : null);?>
">
										</td>

										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">驾照有效日期:</span>
										</th>
										<td width="35%">
											
											<input type="text" class="form-control input-sm" placeholder="" id="totalChangeCarKilo" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('emp')->value['emp_jiazhaotime']) ? $_smarty_tpl->getVariable('emp')->value['emp_jiazhaotime'] : null);?>
" name="">

										</td>
									</tr>
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">工作电话:</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="" id="totalChangeCarKilo" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('emp')->value['emp_workTel']) ? $_smarty_tpl->getVariable('emp')->value['emp_workTel'] : null);?>
" name="">
										</td>
										<th style="background-color:#F5F5F6" width="15%">
											
										</th>
										<td width="35%">
											
										</td>

										
									</tr>
									<tr>
											<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">工作照片:</span>
										</th>

										<td width="35%">
											 <a href="../../../thumb/<?php echo (isset($_smarty_tpl->getVariable('emp')->value['emp_image']) ? $_smarty_tpl->getVariable('emp')->value['emp_image'] : null);?>
" title="点击查看原图" target="_blank">
											 	<img src="../../../thumb/<?php echo (isset($_smarty_tpl->getVariable('emp')->value['emp_image']) ? $_smarty_tpl->getVariable('emp')->value['emp_image'] : null);?>
" id="images_c" width="60%" style="padding-left: 20%">
											 </a>
											 
										</td>
									</tr>
									
									
									</table>
								</div>
								

							

								
							</div>
						</div>
						<!-- End Example Events -->
					</div>
				</div>
				
			</div>
			
		
	</div>
	<!-- End Panel Other -->
</div>
<script src="js/jquery.min.js?v=2.1.4"></script>
<script src="js/bootstrap.min.js?v=3.3.6"></script>
<script src="js/content.min.js?v=1.0.0"></script>
<script src="js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
<script src="js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
<script src="js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
<script src="js/demo/bootstrap-table-demo.min.js"></script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>
<script type="text/javascript" src="../../../js/account.js"></script>
<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->

</html>