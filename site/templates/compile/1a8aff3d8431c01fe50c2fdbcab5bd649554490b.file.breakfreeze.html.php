<?php /* Smarty version Smarty-3.0.4, created on 2019-11-14 13:23:00
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/machine/breakfreeze.html" */ ?>
<?php /*%%SmartyHeaderCode:218795dcce4b4306fe4-03782782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a8aff3d8431c01fe50c2fdbcab5bd649554490b' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/machine/breakfreeze.html',
      1 => 1573708975,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '218795dcce4b4306fe4-03782782',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Insert title here</title>
	<link href="../../../css/style.css" rel="stylesheet" type="text/css">
	<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet" />
	<link rel="stylesheet" href="../../../../../crm/css/bootstrap.min14ed.css">
	<link rel="stylesheet" href="../../../../../crm/css/style.min862f.css">
	<script type="text/javascript" src="../../../js/jquery.js"></script>
	<script type="text/javascript" src="../../../js/common.js"></script>
	<script type="text/javascript" src="../../../js/My97DatePicker/WdatePicker.js"></script>
	<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
	<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
</head>

<body class="gray-bg">
	<div class="wrapper wrapper-content animated fadeInRight">
		<!-- Panel Other -->
		<div class="ibox float-e-margins">
			<div class="ibox-title">
				<h5>车辆违章冻结</h5>
			</div>
			<form method="post" action="insert.php" name="form1" id="form1">
				<div class="wrapper wrapper-content animated fadeInRight" style=" margin: 0; padding: 0;">
					<div class="ibox float-e-margins" style="margin:0">
						<input type="hidden" name="task" value="breakfreeze_acc" />
						<input type="hidden" name="bid" id="bid" value="<?php echo $_smarty_tpl->getVariable('bid')->value;?>
" />
						<div class="ibox-content" id="content" style=" margin: 0px; padding: 0px;">
							<div class="row row-lg">
								<div class="col-sm-12">
									<!-- Example Events -->
									<div class="example-wrap">
										<div class="example">
											<div class="form2">
												<table class="table table-bordered">

													<tr>
														<th width="15%" style="background-color:#F5F5F6">
															<span style="color:#000;">违章车辆：</span>
														</th>
														<td width="35%">苏D<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
</td>
														<th width="15%" style="background-color:#F5F5F6">
															<span style="color:#000;">合计金额：</span>
														</th>
														<td width="35%">
															<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money'] : null);?>
<input type="hidden" name="total"
																value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money'] : null);?>
" /> </td>
													</tr>
													<tr>
														<th width="15%" style="background-color:#F5F5F6">
															<span style="color:#000;">违章项目：</span>
														</th>
														<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_item']) ? $_smarty_tpl->getVariable('list')->value['breakrules_item'] : null);?>

														</td>
													
														<th width="15%" style="background-color:#F5F5F6">
															<span style="color:#000;">违章金额：</span>
														</th>
														<td width="35%">
															<input type="text" name="total1" id="total1" class="form-control input-sm"
																value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money1']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money1'] : null);?>
" size="5" readonly />
														</td>
													</tr>
													<tr>
														<th width="15%" style="background-color:#F5F5F6">
															<span style="color:#000;">违章手续费：</span>
														</th>
														<td width="35%">
															<input type="text" name="total2" id="total2"class="form-control input-sm"
																value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money2']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money2'] : null);?>
" size="5" readonly />
														</td>
													
														<th width="15%" style="background-color:#F5F5F6">
															<span style="color:#000;">违章扣分：</span>
														</th>
														<td width="35%">
															<input type="text" name="total3" id="total3"class="form-control input-sm"
																value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money3']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money3'] : null);?>
" size="5" readonly />
														</td>
													</tr>
													<tr>
														<th width="15%" style="background-color:#F5F5F6">
															<span style="color:#000;">金额抵扣分：</span>
														</th>
														<td width="35%">
															<input type="text" name="total4" id="total4"class="form-control input-sm"
																value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money4']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money4'] : null);?>
" size="5" readonly />
														</td>
													
														<th width="15%" style="background-color:#F5F5F6">
															<span style="color:#000;">派车单号：</span>
														</th>
														<td width="35%">
															<input type="text" name="breakrules_paiche"class="form-control input-sm"
																id="breakrules_paiche" size="16" placeholder="必填" /> </td>
													</tr>
													</table>
											</div>
											
											<div >
												<a href="javascript:void(0);" class="btn btn-outline btn-default" style="margin-left:5%;width: 10%"
													onclick="ok();"><span>确定</span></a>
												<a href="javascript:void(0);" class="btn btn-outline btn-default" style="margin-left:20%;width: 10%"
													onclick="closebox();"><span>关闭</span></a>
											</div>
										</div>
			</form>

			<!-->
				<script>

					function ok() {

						if (!$('#breakrules_paiche').val()) {
							alert("请填写派车单号！");
							$('#breakrules_paiche').focus();
							return false;
						}

						if (!confirm('请仔细核对，一旦提交就无法修改了，确定提交吗？')) {
							return false;
						}

						$("#form1").submit();

						//window.parent.window.location.reload();
						//window.parent.window.jBox.close();
					}


					function closebox() {
						window.parent.window.jBox.close();
					}

				</script>
				<!--> </body> </html>