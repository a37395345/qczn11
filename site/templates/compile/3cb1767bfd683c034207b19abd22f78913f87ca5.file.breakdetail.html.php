<?php /* Smarty version Smarty-3.0.4, created on 2019-11-14 14:10:10
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/machine/breakdetail.html" */ ?>
<?php /*%%SmartyHeaderCode:183915dccefc27077d0-42269231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cb1767bfd683c034207b19abd22f78913f87ca5' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/machine/breakdetail.html',
      1 => 1573711805,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183915dccefc27077d0-42269231',
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
</head>

<body class="gray-bg">
	<div class="wrapper wrapper-content animated fadeInRight">
		<!-- Panel Other -->
		<div class="ibox float-e-margins">
			<div class="ibox-title">
				<h5>违章明细</h5>
			</div>
			<div class="wrapper wrapper-content animated fadeInRight" style=" margin: 0; padding: 0;">
				<div class="ibox float-e-margins" style="margin:0">
					<div class="ibox-title" style=" margin: 0; padding: 0;">
						<div class="ibox-tools" style="padding-top: 12px; padding-left: 10px;float: left">
							<div>
								<div style="margin-top:5px; ">
									<a href="javascript:history.back(-1)" class="btn btn-outline btn-default">返回
									</a>
								</div>
							</div>
						</div>
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
														<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
</td>

														<th width="15%" style="background-color:#F5F5F6">
															<span style="color:#000;">违章时间：</span>
														</th>
														<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_date']) ? $_smarty_tpl->getVariable('list')->value['breakrules_date'] : null);?>
</td>
													</tr>
													<tr>
														<th width="15%" style="background-color:#F5F5F6">
															<span style="color:#000;">违章项目：</span>
														</th>
														<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_item']) ? $_smarty_tpl->getVariable('list')->value['breakrules_item'] : null);?>

														</td>

														<th width="15%" style="background-color:#F5F5F6">
															<span style="color:#000;">违章款：</span>
														</th>
														<td width="35%">
															<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money1']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money1'] : null);?>
元</td>
													</tr>
													<tr>
														<th width="15%" style="background-color:#F5F5F6">
															<span style="color:#000;">手续费：</span>
														</th>
														<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money2']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money2'] : null);?>
元

														</td>
														<th width="15%" style="background-color:#F5F5F6">
															<span style="color:#000;">扣分：</span>
														</th>
														<td width="35%">
															<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money3']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money3'] : null);?>
分
														</td>
													</tr>
													<tr>
														<th width="15%" style="background-color:#F5F5F6">
															<span style="color:#000;">扣分罚款：</span>
														</th>
														<td width="35%">
															<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money4']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money4'] : null);?>
元
														</td>
														<th width="15%" style="background-color:#F5F5F6">
															<span style="color:#000;">违章总金额：</span>
														</th>
														<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money'] : null);?>
元</td>
													</tr>
													<tr>
														<th width="15%" style="background-color:#F5F5F6">
															<span style="color:#000;">实际违章款：</span>
														</th>
														<td width="35%">
															<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money1_infact']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money1_infact'] : null);?>
元</td>
														<th width="15%" style="background-color:#F5F5F6">
															<span style="color:#000;">实际手续费：</span>
														</th>
														<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money2_infact']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money2_infact'] : null);?>
元</td>
													</tr>
													<tr>
														<th width="15%" style="background-color:#F5F5F6">
															<span style="color:#000;">实际扣分：</span>
														</th>
														<td width="35%">
															实际扣分：<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money3_infact']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money3_infact'] : null);?>
分</td>
														<th width="15%" style="background-color:#F5F5F6">
															<span style="color:#000;">实际扣分罚款：</span>
														</th>
														<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money4_infact']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money4_infact'] : null);?>
元
														</td>
													</tr>
													<tr>
														<th width="15%" style="background-color:#F5F5F6">
															<span style="color:#000;">实际违章总金额：</span>
														</th>
														<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money_infact']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money_infact'] : null);?>
元</td>
														<th width="15%" style="background-color:#F5F5F6">
															<span style="color:#000;">备注说明：</span>
														</th>
														<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_remarks']) ? $_smarty_tpl->getVariable('list')->value['breakrules_remarks'] : null);?>
</td>
														</th>
													</tr>
													<?php if ((isset($_smarty_tpl->getVariable('list')->value['breakrulesPaicheId']) ? $_smarty_tpl->getVariable('list')->value['breakrulesPaicheId'] : null)!=0){?>
													<tr>
														<th width="15%" style="background-color:#F5F5F6">
															<span style="color:#000;">派车单号：</span>
														</th>
														<td width="35%"><a
																href="../business/detail.php?uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrulesPaicheId']) ? $_smarty_tpl->getVariable('list')->value['breakrulesPaicheId'] : null);?>
"
																target="blank"><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_contractNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_contractNum'] : null);?>
</a></td>
														</th>
														<?php if ((isset($_smarty_tpl->getVariable('list')->value['breakrules_end']) ? $_smarty_tpl->getVariable('list')->value['breakrules_end'] : null)==1){?>
														<th width="15%" style="background-color:#F5F5F6">
															<span style="color:#000;">处理时间：</span>
														</th>
														<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_endtimes']) ? $_smarty_tpl->getVariable('list')->value['breakrules_endtimes'] : null);?>
</td>
													</tr>
													<tr>
														<th width="15%" style="background-color:#F5F5F6">
															<span style="color:#000;">处理人：</span>
														</th>
														<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_endman']) ? $_smarty_tpl->getVariable('list')->value['breakrules_endman'] : null);?>
</td>
														</th>
														<?php }else{ ?>

														<th width="15%" style="background-color:#F5F5F6">
															<span style="color:#000;">状态：</span>
														</th>
														<td width="35%">未处理</td>
														</th>
														<?php }?>
														<?php }else{ ?>
													</tr>
													<tr>
														<th width="15%" style="background-color:#F5F5F6">
															<span style="color:#000;">状态：</span>
														</th>
														<td width="35%">未冻结</td>
														</th>
														<?php }?>
													</tr>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

</body>

</html>