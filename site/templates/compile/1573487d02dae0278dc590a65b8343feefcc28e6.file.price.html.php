<?php /* Smarty version Smarty-3.0.4, created on 2019-10-05 12:53:00
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/car/price.html" */ ?>
<?php /*%%SmartyHeaderCode:13533086365d9821ac206ab4-03686766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1573487d02dae0278dc590a65b8343feefcc28e6' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/car/price.html',
      1 => 1569749209,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13533086365d9821ac206ab4-03686766',
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
			<h5>车辆租赁方案表 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
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
											<span style="color:#000">车辆车牌号码：</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="" id="" readonly="readonly" unselectable="on" value="苏D<?php echo (isset($_smarty_tpl->getVariable('car')->value['car_num']) ? $_smarty_tpl->getVariable('car')->value['car_num'] : null);?>
">
										</td>

										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">车辆日租金:</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="" id="chaoshi_feiyong" readonly="readonly" unselectable="on" name="chaoshi_feiyong" value="<?php echo (isset($_smarty_tpl->getVariable('pricelist')->value['plan_rentamount']) ? $_smarty_tpl->getVariable('pricelist')->value['plan_rentamount'] : null);?>
">
										</td>
									</tr>
									
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">本地客户/老客户押金:</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="" id="stime" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('pricelist')->value['plan_deposit1']) ? $_smarty_tpl->getVariable('pricelist')->value['plan_deposit1'] : null);?>
">
										</td>

										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">外地客户/新客户押金:</span>
										</th>
										<td width="35%">
											
											<input type="text" class="form-control input-sm" placeholder="" id="totalChangeCarKilo" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('pricelist')->value['plan_deposit2']) ? $_smarty_tpl->getVariable('pricelist')->value['plan_deposit2'] : null);?>
" name="">

										</td>
									</tr>
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">超时费用:</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="" id="totalChangeCarKilo" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('pricelist')->value['plan_chaoshi']) ? $_smarty_tpl->getVariable('pricelist')->value['plan_chaoshi'] : null);?>
" name="">
										</td>

										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">是否限公里:</span>
										</th>

										<td width="35%">
											<input type="text" class="form-control input-sm" readonly="readonly" unselectable="on" value="<?php if ((isset($_smarty_tpl->getVariable('pricelist')->value['plan_chaokm']) ? $_smarty_tpl->getVariable('pricelist')->value['plan_chaokm'] : null)=='y'){?>是<?php }else{ ?>否<?php }?>">
										</td>
									</tr>
									<?php if ((isset($_smarty_tpl->getVariable('pricelist')->value['plan_chaokm']) ? $_smarty_tpl->getVariable('pricelist')->value['plan_chaokm'] : null)=='y'){?>
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">日限公里数:</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder=""  readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('pricelist')->value['plan_chaokms']) ? $_smarty_tpl->getVariable('pricelist')->value['plan_chaokms'] : null);?>
" name="">
										</td>

										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">超每公里费用:</span>
										</th>

										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder=""  readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('pricelist')->value['plan_chaokmy']) ? $_smarty_tpl->getVariable('pricelist')->value['plan_chaokmy'] : null);?>
" name="">
										</td>
									</tr>
									<?php }?>
									
									</table>
								</div>
								<div>备注:&nbsp;&nbsp;&nbsp;①租1-9天都是按照：日租金×天数来计算租金。<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;②租10天-29天的，总租金打98折。（日租金×天数×0.98）<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;③租30天及以上的，总租金打95折。（日租金×天数×0.95）</div>

							

								
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