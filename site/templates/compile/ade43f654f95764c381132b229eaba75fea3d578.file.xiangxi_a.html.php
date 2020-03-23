<?php /* Smarty version Smarty-3.0.4, created on 2019-09-29 18:19:19
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/car/xiangxi_a.html" */ ?>
<?php /*%%SmartyHeaderCode:11717028275d908527c32434-21641282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ade43f654f95764c381132b229eaba75fea3d578' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/car/xiangxi_a.html',
      1 => 1569749210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11717028275d908527c32434-21641282',
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
			<h5>车辆详细资料 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
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
											<span style="color:#000">车牌号码：</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="" id="" readonly="readonly" unselectable="on" value="苏D<?php echo (isset($_smarty_tpl->getVariable('car')->value['car_num']) ? $_smarty_tpl->getVariable('car')->value['car_num'] : null);?>
">
										</td>

										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">车辆颜色:</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="" id="chaoshi_feiyong" readonly="readonly" unselectable="on" name="chaoshi_feiyong" value="<?php echo (isset($_smarty_tpl->getVariable('car')->value['car_color']) ? $_smarty_tpl->getVariable('car')->value['car_color'] : null);?>
">
										</td>
									</tr>
									
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">车型:</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="" id="stime" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('car')->value['car_model']) ? $_smarty_tpl->getVariable('car')->value['car_model'] : null);?>
">
										</td>

										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">车辆品牌:</span>
										</th>
										<td width="35%">
											
											<input type="text" class="form-control input-sm" placeholder="" id="totalChangeCarKilo" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('car')->value['car_brand']) ? $_smarty_tpl->getVariable('car')->value['car_brand'] : null);?>
" name="">

										</td>
									</tr>
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">发动机号:</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="" id="totalChangeCarKilo" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('car')->value['car_motor']) ? $_smarty_tpl->getVariable('car')->value['car_motor'] : null);?>
" name="">
										</td>
										
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">车辆识别号:</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="" id="totalChangeCarKilo" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('car')->value['car_frame']) ? $_smarty_tpl->getVariable('car')->value['car_frame'] : null);?>
" name="">
										</td>
										

										
									</tr>
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">车辆种类:</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="" id="totalChangeCarKilo" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('car')->value['car_type']) ? $_smarty_tpl->getVariable('car')->value['car_type'] : null);?>
" name="">
										</td>
										

										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">座位数:</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="" id="totalChangeCarKilo" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('car')->value['car_seat']) ? $_smarty_tpl->getVariable('car')->value['car_seat'] : null);?>
" name="">
										</td>

										
									</tr>
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">车辆注册日期:</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="" id="totalChangeCarKilo" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('car')->value['car_cartDate']) ? $_smarty_tpl->getVariable('car')->value['car_cartDate'] : null);?>
" name="">
										</td>
										<th style="background-color:#F5F5F6" width="15%">
										</th>
										<td width="35%">
										</td>

										
									</tr>
									
									
									</table>
								</div>
								

							

								
							</div>
						</div>
						<!-- End Example Events -->
					</div>
					<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('images')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>

					<div class="col-sm-2" style="margin-bottom: 10px">
					<a href="index.php?task=picture&car_id=<?php echo (isset($_smarty_tpl->getVariable('car')->value['car_id']) ? $_smarty_tpl->getVariable('car')->value['car_id'] : null);?>
&nowserial=<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
" title="点击查看原图" target="blank">
						<img src="../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['images']) ? $_smarty_tpl->tpl_vars['rows']->value['images'] : null);?>
" style="width: 100%" >
					</a>
					</div>
					<?php }} ?>
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