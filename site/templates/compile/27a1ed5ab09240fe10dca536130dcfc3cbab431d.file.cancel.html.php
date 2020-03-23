<?php /* Smarty version Smarty-3.0.4, created on 2019-12-04 15:17:39
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/machine/cancel.html" */ ?>
<?php /*%%SmartyHeaderCode:70455de75d93c0bf79-73385090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27a1ed5ab09240fe10dca536130dcfc3cbab431d' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/machine/cancel.html',
      1 => 1575443856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70455de75d93c0bf79-73385090',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>管理后台</title>
	<link href="../../../css/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="../../../../../crm/css/bootstrap.min14ed.css">
	<link rel="stylesheet" href="../../../../../crm/css/style.min862f.css">
	<script type="text/javascript" src="../../../js/jquery.js"></script>
	<script type="text/javascript" src="../../../js/common.js"></script>
	<script type="text/javascript" src="../../../js/calendar.js"></script>
	<script type="text/javascript" src="../../../js/check_form.js"></script>

	<!-- <style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style> -->
</head>

<body class="gray-bg">
		<div class="wrapper wrapper-content animated fadeInRight">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>出售</h5>
				</div>
			<form method="post" action="list.php" onsubmit="return check()" name="form1">
				<div class="wrapper wrapper-content animated fadeInRight" style=" margin: 0; padding: 0;">
					<div class="ibox float-e-margins" style="margin:0">
						<div class="ibox-content" id="content" style=" margin: 0px; padding: 0px;">
							<div class="row row-lg">
								<div class="col-sm-12">
									<!-- Example Events -->
									<div class="example-wrap">
										<div class="example">
											<table class=" table table-bordered">
												<tr>
													<th width="15%" style="background-color:#F5F5F6">
														<span style="color:#000;">车牌号：</span>
													</th>
													<td width="35%">苏D<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
</td>

													<th width="15%" style="background-color:#F5F5F6">
														<span style="color:#000;">车辆颜色：</span>
													</th>
													<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_color']) ? $_smarty_tpl->getVariable('list')->value['car_color'] : null);?>
</td>
												</tr>
												<tr>
													<th width="15%" style="background-color:#F5F5F6">
														<span style="color:#000;">车型：</span>
													</th>
													<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_model']) ? $_smarty_tpl->getVariable('list')->value['car_model'] : null);?>
</td>

													<th width="15%" style="background-color:#F5F5F6">
														<span style="color:#000;">发动机号：</span>
													</th>
													<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_motor']) ? $_smarty_tpl->getVariable('list')->value['car_motor'] : null);?>
</td>
												</tr>
												<tr>
													<th width="15%" style="background-color:#F5F5F6">
														<span style="color:#000;">车辆识别号：</span>
													</th>
													<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_frame']) ? $_smarty_tpl->getVariable('list')->value['car_frame'] : null);?>
</td>

													<th width="15%" style="background-color:#F5F5F6">
														<span style="color:#000;">座位数：</span>
													</th>
													<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_seat']) ? $_smarty_tpl->getVariable('list')->value['car_seat'] : null);?>
</td>
												</tr>
												<tr>
													<th width="15%" style="background-color:#F5F5F6">
														<span style="color:#000;">入账日期：</span>
													</th>
													<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_saleDate']) ? $_smarty_tpl->getVariable('list')->value['car_saleDate'] : null);?>
</td>

													<th width="15%" style="background-color:#F5F5F6">
														<span style="color:#000;">开票价格：</span>
													</th>
													<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_amount']) ? $_smarty_tpl->getVariable('list')->value['car_amount'] : null);?>
元</td>
												</tr>
												<tr>
													<th width="15%" style="background-color:#F5F5F6">
														<span style="color:#000;">实际购买车价：</span>
													</th>
													<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_infactamount']) ? $_smarty_tpl->getVariable('list')->value['car_infactamount'] : null);?>
元</td>

													<th width="15%" style="background-color:#F5F5F6">
														<span style="color:#000;">购置税：</span>
													</th>
													<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_buytax']) ? $_smarty_tpl->getVariable('list')->value['car_buytax'] : null);?>
元</td>
												</tr>
												<tr>
													<th width="15%" style="background-color:#F5F5F6">
														<span style="color:#000;">车辆注册日期：</span>
													</th>
													<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_cartDate']) ? $_smarty_tpl->getVariable('list')->value['car_cartDate'] : null);?>
</td>


													<th width="15%" style="background-color:#F5F5F6">
														<span style="color:#000;">备注：</span>
													</th>
													<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_remarks']) ? $_smarty_tpl->getVariable('list')->value['car_remarks'] : null);?>
</td>
												</tr>
												<?php if ($_smarty_tpl->getVariable('task')->value=="delete"){?>
												<tr>
													<th width="15%" style="background-color:#F5F5F6">
														<span style="color:#000;">出售日期：</span>
													</th>
													<td width="35%"><input type="text" name="car_cancelDate"
															id="car_cancelDate" size="16" class="form-control input-sm"
															unselectable="on" readonly

															value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_cancelDate']) ? $_smarty_tpl->getVariable('list')->value['car_cancelDate'] : null);?>
" placeholder="必填"
															onclick="calendar.show(this);" /></td>

													<th width="15%" style="background-color:#F5F5F6">
														<span style="color:#000;">出售价格：</span>
													</th>
													<td width="35%"><input type="text" name="car_cancelPrice"
														onkeyup="value=value.replace(/[^\d.]/g,'')" onafterpaste="this.value=this.value.replace(/\d/g,'')"
															class="form-control input-sm" id="car_cancelPrice" size="6"
															placeholder="必填" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_cancelPrice']) ? $_smarty_tpl->getVariable('list')->value['car_cancelPrice'] : null);?>
" /></td>
												</tr>
												<tr>
													<th width="15%" style="background-color:#F5F5F6">
														<span style="color:#000;">处理方式：</span>
													</th>
													<td width="35%"><input name="car_canceldeal" cols="40"
															class="form-control input-sm"
															rows="5"><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_canceldeal']) ? $_smarty_tpl->getVariable('list')->value['car_canceldeal'] : null);?>
</input></td>

													<th width="15%" style="background-color:#F5F5F6">
														<span style="color:#000;">赔款说明：</span>
													</th>
													<td width="35%"><input name="car_cancelrepara" cols="40"
															class="form-control input-sm"
															rows="5"><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_cancelrepara']) ? $_smarty_tpl->getVariable('list')->value['car_cancelrepara'] : null);?>
</input></td>
												</tr>
												<tr>
													<th width="15%" style="background-color:#F5F5F6">
														<span style="color:#000;">入账情况：</span>
													</th>
													<td width="35%"><input name="car_cancelaccount" cols="40"
															class="form-control input-sm"
															rows="5"><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_cancelaccount']) ? $_smarty_tpl->getVariable('list')->value['car_cancelaccount'] : null);?>
</input></td>

													<?php }?>
													<?php if ((isset($_smarty_tpl->getVariable('list')->value['car_oilcard']) ? $_smarty_tpl->getVariable('list')->value['car_oilcard'] : null)==1){?>

													<th width="15%" style="background-color:#F5F5F6">
														<span style="color:#000;">绑定油卡：</span>
													</th>
													<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['card_no']) ? $_smarty_tpl->getVariable('list')->value['card_no'] : null);?>
</td>

													<?php }?>
												</tr>
												<?php if ($_smarty_tpl->getVariable('task')->value=="changeacc"){?>
												<tr>
													<th width="15%" style="background-color:#F5F5F6">
														<span style="color:#000;">出售日期：</span>
													</th>
													<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_cancelDate']) ? $_smarty_tpl->getVariable('list')->value['car_cancelDate'] : null);?>
</td>

													<th width="15%" style="background-color:#F5F5F6">
														<span style="color:#000;">出售价格：</span>
													</th>
													<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_cancelPrice']) ? $_smarty_tpl->getVariable('list')->value['car_cancelPrice'] : null);?>
</td>
												</tr>
												<tr>
													<th width="15%" style="background-color:#F5F5F6">
														<span style="color:#000;">处理方式：</span>
													</th>
													<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_canceldeal']) ? $_smarty_tpl->getVariable('list')->value['car_canceldeal'] : null);?>
</td>

													<th width="15%" style="background-color:#F5F5F6">
														<span style="color:#000;">赔款说明：</span>
													</th>
													<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_cancelrepara']) ? $_smarty_tpl->getVariable('list')->value['car_cancelrepara'] : null);?>
</td>
												</tr>
												<tr>
													<th width="15%" style="background-color:#F5F5F6">
														<span style="color:#000;">入账情况：</span>
													</th>
													<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_cancelaccount']) ? $_smarty_tpl->getVariable('list')->value['car_cancelaccount'] : null);?>
</td>

													<th width="15%" style="background-color:#F5F5F6">
														<span style="color:#000;">过户日期：</span>
													</th>
													<td width="35%"><input type="text" name="car_changeDate"
															unselectable="on" readonly
															id="car_changeDate" size="16" placeholder="必填"
															class="form-control input-sm" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_changeDate']) ? $_smarty_tpl->getVariable('list')->value['car_changeDate'] : null);?>
"
															onclick="calendar.show(this);" /></td>
												</tr>

												<?php }?>
											</table>
											<div class="page_btm">
												<button type="submit" class="btn btn-outline btn-default"
													style="margin-left: -10%; width: 10%">
													确定
												</button>
												<!-- <input type="submit" class="btn_b" value="确定" /><b> 注：<span
									class="red">*</span>为必填项</b> -->
											</div>
										</div>
										<input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_id']) ? $_smarty_tpl->getVariable('list')->value['car_id'] : null);?>
" />
										<input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
										<input type="hidden" name="car_num" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
" />
									</div>
								</div>
								<!-- End Example Events -->
							</div>
						</div>
					</div>
			</form>
		</div>
	</div>
</body>
<!-->
	<script>
		function check() {
			if ($("#car_cancelDate").val() == "") {
				alert("请先选择出售日期！");
				return false;
			}
			if ($("#car_cancelPrice").val() == "") {
				alert("请填写出售价格！");
				return false;
			}
			if ($("#car_changeDate").val() == "") {
				alert("请先选择过户日期！");
				return false;
			}
		}
	</script>
	<!--> </body> </html>