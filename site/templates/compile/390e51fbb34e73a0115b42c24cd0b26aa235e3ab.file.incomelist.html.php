<?php /* Smarty version Smarty-3.0.4, created on 2020-03-23 08:42:41
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/report/incomelist.html" */ ?>
<?php /*%%SmartyHeaderCode:150445e780601621056-90740466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '390e51fbb34e73a0115b42c24cd0b26aa235e3ab' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/report/incomelist.html',
      1 => 1584924134,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150445e780601621056-90740466',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>管理后台</title>
	<meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
	<meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

	<link rel="shortcut icon" href="favicon.ico">
	<link href="../../../../crm1/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
	<link href="../../../../crm1/css/font-awesome.css?v=4.4.0" rel="stylesheet">

	<link href="../../../../crm1/css/animate.css" rel="stylesheet">
	<link href="../../../../crm1/css/style.css?v=4.1.0" rel="stylesheet">
	<script type="text/javascript" src="../../../../js/laydate/laydate.js"></script>
	<script type="text/javascript" src="../../../js/jquery.js"></script>

	<style>
		.timeline input {
			line-height: 10px !important;
		}
	</style>
</head>

<body class="gray-bg">

	<div class="wrapper wrapper-content animated fadeInRight" style="z-index: 1;">
		<div class="ibox float-e-margins">
			<div class="ibox-title" style="padding-top: 5px">
				<h5 style="padding-top: 10px">收支统计<?php if ($_smarty_tpl->getVariable('flag')->value=="2"){?>(一楼)<?php }?></h5>
			</div>

			<form id="form1" action="<?php echo $_smarty_tpl->getVariable('url')->value;?>
" method="get">
				<div class="wrapper wrapper-content animated fadeInRight"
					style="margin: 0; padding: 0;margin-top: 8px;">
					<div class="ibox float-e-margins" style="margin:0">
						<div class="ibox-title" style=" margin: 0; padding: 0;">

							<h5 style="padding-top: 15px; padding-left: 10px;">搜索</h5>
							<div class="ibox-tools" style="padding-top: 14px; padding-left: 10px;float: left;">
								<a class="collapse-link">
									<i class="fa fa-chevron-down" id="up"></i>
								</a>
							</div>
						</div>
						<div class="ibox-content" id="content" style=" margin: 0px; padding: 0px;display: none">
							<div class="row row-lg">
								<div class="col-sm-12">
									<!-- Example Events -->
									<div class="example-wrap">
										<div class="example">
											<table class="table table-bordered">
												<tr>
													<th width="15%" style="background-color:#F5F5F6">
														<span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;开始时间:</span>
													</th>
													<td class="timeline" width="35%">
														<input name="paiche_startDate" placeholder="请输入日期"
															value="<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
"
															class="laydate-icon form-control input-sm"
															onclick="laydate({istime: true, format: 'YYYY-MM-DD 23:59:59'})"
															unselectable="on" readonly style="height: 20%;">
													</td>
													<th width="15%" style="background-color:#F5F5F6">
														<span style="color:#000">&nbsp;&nbsp;&nbsp;&nbsp;结束时间:</span>
													</th>
													<td class="timeline" width="35%">
														<input name="paiche_endDate" placeholder="请输入日期"
															value="<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
"
															class="laydate-icon form-control input-sm"
															onclick="laydate({istime: true, format: 'YYYY-MM-DD 23:59:59'})"
															unselectable="on" readonly style="height: 20%;">
													</td>

												</tr>
												<tr>
													<th style="background-color:#F5F5F6">
														<span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;店铺:</span>
													</th>
													<td colspan="3">
														<select class="form-control input-sm" name="search_shop"
															style="width: 30%;height: 20%;">
															<option value="" <?php $_tmp1=$_smarty_tpl->getVariable('search_shop')->value;?><?php if (empty($_tmp1)){?>selected<?php }?>>全部
																</option> <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shoplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
																<option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null);?>
" <?php if ($_smarty_tpl->getVariable('search_shop')->value==(isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>

																</option> <?php }} ?> </select> </td> </tr> <script>
																laydate.render({
																elem: '#test1',
																});
																</script>

											</table>

											<button type="submit" class="btn btn-outline btn-default"
												style="margin-left:45%;width: 10%">
												<i class="glyphicon glyphicon-search" aria-hidden="true"></i>
												搜索
											</button>
										</div>
									</div>
									<!-- End Example Events -->
								</div>
							</div>
						</div>
					</div>
					<!-- End Panel Other -->
				</div>
			</form>

			<div class="ibox-content_a">
				<div class="row row-lg">

					<div class="col-sm-6">
						<div class="ibox float-e-margins">
							<div class="ibox-title">
								<h5>收支明细</h5>
							</div>

							<div class="ibox-content">

								<table class="table table-bordered table-hover" data-height="400"
									style="margin-bottom:0px" data-mobile-responsive="true">

									<thead>
										<tr>
											<th style="text-align: center;">项目</th>
											<th style="text-align: center;">收入</th>
											<th style="text-align: center;">支出</th>
											<th style="text-align: center;">结余</th>
										</tr>
									</thead>
									<tbody>
										<tr style="text-align: center;">
											<td>业务收入</td>
											<td><a href="detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
"
													target="_blank"><?php echo number_format((isset($_smarty_tpl->getVariable('income')->value['total_money1']) ? $_smarty_tpl->getVariable('income')->value['total_money1'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money2']) ? $_smarty_tpl->getVariable('income')->value['total_money2'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money22']) ? $_smarty_tpl->getVariable('income')->value['total_money22'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money21']) ? $_smarty_tpl->getVariable('income')->value['total_money21'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money3']) ? $_smarty_tpl->getVariable('income')->value['total_money3'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money4']) ? $_smarty_tpl->getVariable('income')->value['total_money4'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money5']) ? $_smarty_tpl->getVariable('income')->value['total_money5'] : null),2,".",'');?>
</a>
											</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
										<tr style="text-align: center;">
											<td>其他收入</td>
											<td><a href="detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=6"
													target="_blank"><?php echo number_format((isset($_smarty_tpl->getVariable('income')->value['total_money6']) ? $_smarty_tpl->getVariable('income')->value['total_money6'] : null),2,".",'');?>
</a>
											</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
										<tr style="text-align: center;">
											<td>费用报销</td>
											<td>&nbsp;</td>
											<td><a href="../baoxiao/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
"
													target="_blank"><?php echo number_format((isset($_smarty_tpl->getVariable('baoxiao')->value['total_money7']) ? $_smarty_tpl->getVariable('baoxiao')->value['total_money7'] : null),2,".",'');?>
</a>
											</td>
											<td>&nbsp;</td>
										</tr>
										<tr style="background-color:red;text-align: center;color: #ffffff;">
											<td>合计</td>
											<td>
												<?php echo number_format((isset($_smarty_tpl->getVariable('income')->value['total_money1']) ? $_smarty_tpl->getVariable('income')->value['total_money1'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money2']) ? $_smarty_tpl->getVariable('income')->value['total_money2'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money22']) ? $_smarty_tpl->getVariable('income')->value['total_money22'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money21']) ? $_smarty_tpl->getVariable('income')->value['total_money21'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money3']) ? $_smarty_tpl->getVariable('income')->value['total_money3'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money4']) ? $_smarty_tpl->getVariable('income')->value['total_money4'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money5']) ? $_smarty_tpl->getVariable('income')->value['total_money5'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money6']) ? $_smarty_tpl->getVariable('income')->value['total_money6'] : null),2,".",'');?>

											</td>
											<td>
												<?php echo number_format((isset($_smarty_tpl->getVariable('baoxiao')->value['total_money7']) ? $_smarty_tpl->getVariable('baoxiao')->value['total_money7'] : null),2,".",'');?>
</td>
											<td>
												<?php echo number_format((isset($_smarty_tpl->getVariable('income')->value['total_money1']) ? $_smarty_tpl->getVariable('income')->value['total_money1'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money2']) ? $_smarty_tpl->getVariable('income')->value['total_money2'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money22']) ? $_smarty_tpl->getVariable('income')->value['total_money22'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money21']) ? $_smarty_tpl->getVariable('income')->value['total_money21'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money3']) ? $_smarty_tpl->getVariable('income')->value['total_money3'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money4']) ? $_smarty_tpl->getVariable('income')->value['total_money4'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money5']) ? $_smarty_tpl->getVariable('income')->value['total_money5'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money6']) ? $_smarty_tpl->getVariable('income')->value['total_money6'] : null)-(isset($_smarty_tpl->getVariable('baoxiao')->value['total_money7']) ? $_smarty_tpl->getVariable('baoxiao')->value['total_money7'] : null),2,".",'');?>

											</td>
										</tr>
										<tr style="text-align: center;">
											<td>押金</td>
											<td><a href="detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=7"
													target="_blank"><?php echo number_format((isset($_smarty_tpl->getVariable('income')->value['deposit_money']) ? $_smarty_tpl->getVariable('income')->value['deposit_money'] : null),2,".",'');?>
</a>
											</td>
											<td><a href="detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=8"
													target="_blank"><?php echo number_format((isset($_smarty_tpl->getVariable('income')->value['depositback_money']) ? $_smarty_tpl->getVariable('income')->value['depositback_money'] : null),2,".",'');?>
</a>
											</td>
											<td>
												<?php echo number_format((isset($_smarty_tpl->getVariable('income')->value['deposit_money']) ? $_smarty_tpl->getVariable('income')->value['deposit_money'] : null)-(isset($_smarty_tpl->getVariable('income')->value['depositback_money']) ? $_smarty_tpl->getVariable('income')->value['depositback_money'] : null),2,".",'');?>

											</td>
										</tr>
										<tr style="text-align: center;">
											<td>违章资金</td>
											<td><a href="../../machine/breaklist.php?search_startDate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&search_endDate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&op=s&type=add"
													target="_blank"><?php echo number_format((isset($_smarty_tpl->getVariable('breaks')->value['total1']) ? $_smarty_tpl->getVariable('breaks')->value['total1'] : null),2,".",'');?>
</a></td>
											<td><a href="../../machine/breaklist.php?search_startDate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&search_endDate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&op=s&type=reduce"
													target="_blank"><?php echo number_format((isset($_smarty_tpl->getVariable('breaks')->value['total2']) ? $_smarty_tpl->getVariable('breaks')->value['total2'] : null),2,".",'');?>
</a></td>
											<td>&nbsp;</td>
										</tr>
										<tr style="text-align: center;">
											<td>待处理违章资金</td>
											<td colspan="3"><a href="../../machine/list.php?task=breakfirst&op=s"
													target="_blank"><?php echo number_format((isset($_smarty_tpl->getVariable('breaks')->value['total']) ? $_smarty_tpl->getVariable('breaks')->value['total'] : null),2,".",'');?>
</a></td>
										</tr>
										<tr style="text-align: center;">
											<td>打款蒋政</td>
											<td>&nbsp;</td>
											<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('baoxiao_2')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
											<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['typeid']) ? $_smarty_tpl->tpl_vars['row']->value['typeid'] : null)==10){?>
											<td><a href="../baoxiao/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['typeid']) ? $_smarty_tpl->tpl_vars['row']->value['typeid'] : null);?>
"
													target="_blank"><?php echo number_format((isset($_smarty_tpl->tpl_vars['row']->value['total_money20']) ? $_smarty_tpl->tpl_vars['row']->value['total_money20'] : null),2,".",'');?>
</a>
											</td>
											<?php }?>
											<?php }} ?>
											<td>&nbsp;</td>
										</tr>
										<tr style="text-align: center;">
											<td>备用金总额</td>
											<td style="text-align:center;" colspan="2"><a
													href="detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=9"
													target="_blank"><?php echo number_format((isset($_smarty_tpl->getVariable('beiyong')->value['total_money']) ? $_smarty_tpl->getVariable('beiyong')->value['total_money'] : null),2,".",'');?>
</a>
											</td>
											<td style="text-align:center;"><a
													href="detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=10"
													target="_blank"><?php echo number_format((isset($_smarty_tpl->getVariable('beiyong')->value['now_money']) ? $_smarty_tpl->getVariable('beiyong')->value['now_money'] : null),2,".",'');?>
</a>
											</td>
										</tr>
									</tbody>

								</table>
							</div>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="ibox float-e-margins">
							<div class="ibox-title">
								<h5>其他收入</h5>
							</div>

							<div class="ibox-content">

								<table class="table table-bordered table-hover" data-height="400"
									style="margin-bottom:0px" data-mobile-responsive="true">

									<thead>
										<tr>
											<th style="text-align: center;" colspan="2">其他收入大项明细</th>
										</tr>
									</thead>
									<tbody>
										<tr style="text-align: center;">
											<td style="width: 50%;">刷卡费</td>
											<td <?php if ((isset($_smarty_tpl->getVariable('other_count')->value['total_count61']) ? $_smarty_tpl->getVariable('other_count')->value['total_count61'] : null)!=0){?>class="aaa" <?php }?>> <a
												href="../other/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=61"
												target="_blank"><?php echo (isset($_smarty_tpl->getVariable('other')->value['total_money61']) ? $_smarty_tpl->getVariable('other')->value['total_money61'] : null);?>
</a></td>
										</tr>
										<tr style="text-align: center;">
											<td>保险理赔及退保</td>
											<td <?php if ((isset($_smarty_tpl->getVariable('other_count')->value['total_count62']) ? $_smarty_tpl->getVariable('other_count')->value['total_count62'] : null)!=0){?>class="aaa" <?php }?>> <a
												href="../other/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=62"
												target="_blank"><?php echo (isset($_smarty_tpl->getVariable('other')->value['total_money62']) ? $_smarty_tpl->getVariable('other')->value['total_money62'] : null);?>
</a></td>
										</tr>
										<tr style="text-align: center;">
											<td>税金</td>
											<td <?php if ((isset($_smarty_tpl->getVariable('other_count')->value['total_count63']) ? $_smarty_tpl->getVariable('other_count')->value['total_count63'] : null)!=0){?>class="aaa" <?php }?>> <a
												href="../other/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=63"
												target="_blank"><?php echo (isset($_smarty_tpl->getVariable('other')->value['total_money63']) ? $_smarty_tpl->getVariable('other')->value['total_money63'] : null);?>
</a></td>
										</tr>
										<tr style="text-align: center;">
											<td>违章手续费</td>
											<td <?php if ((isset($_smarty_tpl->getVariable('other_count')->value['total_count67']) ? $_smarty_tpl->getVariable('other_count')->value['total_count67'] : null)!=0){?>class="aaa" <?php }?>> <a
												href="../other/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=67"
												target="_blank"><?php echo (isset($_smarty_tpl->getVariable('other')->value['total_money67']) ? $_smarty_tpl->getVariable('other')->value['total_money67'] : null);?>
</a></td>
										</tr>
										<tr style="text-align: center;">
											<td>违章扣分费</td>
											<td <?php if ((isset($_smarty_tpl->getVariable('other_count')->value['total_count68']) ? $_smarty_tpl->getVariable('other_count')->value['total_count68'] : null)!=0){?>class="aaa" <?php }?>> <a
												href="../other/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=68"
												target="_blank"><?php echo (isset($_smarty_tpl->getVariable('other')->value['total_money68']) ? $_smarty_tpl->getVariable('other')->value['total_money68'] : null);?>
</a></td>
										</tr>
										<tr style="text-align: center;">
											<td>卖车及报废收入</td>
											<td <?php if ((isset($_smarty_tpl->getVariable('other_count')->value['total_count65']) ? $_smarty_tpl->getVariable('other_count')->value['total_count65'] : null)!=0){?>class="aaa" <?php }?>> <a
												href="../other/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=65"
												target="_blank"><?php echo (isset($_smarty_tpl->getVariable('other')->value['total_money65']) ? $_smarty_tpl->getVariable('other')->value['total_money65'] : null);?>
</a></td>
										</tr>
										<tr style="text-align: center;">
											<td>一嗨多收费用</td>
											<td <?php if ((isset($_smarty_tpl->getVariable('other_count')->value['total_count69']) ? $_smarty_tpl->getVariable('other_count')->value['total_count69'] : null)!=0){?>class="aaa" <?php }?>> <a
												href="../other/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=69"
												target="_blank"><?php echo (isset($_smarty_tpl->getVariable('other')->value['total_money69']) ? $_smarty_tpl->getVariable('other')->value['total_money69'] : null);?>
</a></td>
										</tr>
										<tr style="text-align: center;">
											<td>备用金归还</td>
											<td <?php if ((isset($_smarty_tpl->getVariable('other_count')->value['total_count66']) ? $_smarty_tpl->getVariable('other_count')->value['total_count66'] : null)!=0){?>class="aaa" <?php }?>> <a
												href="../other/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=66"
												target="_blank"><?php echo (isset($_smarty_tpl->getVariable('other')->value['total_money66']) ? $_smarty_tpl->getVariable('other')->value['total_money66'] : null);?>
</a></td>
										</tr>
										<tr style="text-align: center;">
											<td>其他</td>
											<td <?php if ((isset($_smarty_tpl->getVariable('other_count')->value['total_count64']) ? $_smarty_tpl->getVariable('other_count')->value['total_count64'] : null)!=0){?>class="aaa" <?php }?>> <a
												href="../other/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=64"
												target="_blank"><?php echo (isset($_smarty_tpl->getVariable('other')->value['total_money64']) ? $_smarty_tpl->getVariable('other')->value['total_money64'] : null);?>
</a></td>
										</tr>
									</tbody>

								</table>
							</div>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="ibox float-e-margins">
							<div class="ibox-title">
								<h5>费用报销</h5>
							</div>

							<div class="ibox-content">

								<table class="table table-bordered table-hover" data-height="400"
									style="margin-bottom:0px" data-mobile-responsive="true">

									<thead>
										<tr>
											<th style="text-align: center;" colspan="3">费用报销大项明细</th>
										</tr>
									</thead>
									<tbody>
										<tr style="text-align: center;">
											<td rowspan="5">司机出车报销</td>
											<td style="width: 33%;">过路费</td>
											<td style="width: 33%;"><a
													href="../baoxiao/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=0"
													target="_blank"><?php echo number_format((isset($_smarty_tpl->getVariable('baoxiao_1')->value['total_money11']) ? $_smarty_tpl->getVariable('baoxiao_1')->value['total_money11'] : null),2,".",'');?>
</a>
											</td>
										</tr>
										<tr style="text-align: center;">
											<td>停车费</td>
											<td><a href="../baoxiao/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=0"
													target="_blank"><?php echo number_format((isset($_smarty_tpl->getVariable('baoxiao_1')->value['total_money15']) ? $_smarty_tpl->getVariable('baoxiao_1')->value['total_money15'] : null),2,".",'');?>
</a>
											</td>
										</tr>
										<tr style="text-align: center;">
											<td>加油费</td>
											<td><a href="../baoxiao/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=0"
													target="_blank"><?php echo number_format((isset($_smarty_tpl->getVariable('baoxiao_1')->value['total_money12']) ? $_smarty_tpl->getVariable('baoxiao_1')->value['total_money12'] : null),2,".",'');?>
</a>
											</td>
										</tr>
										<tr style="text-align: center;">
											<td>住宿费</td>
											<td><a href="../baoxiao/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=0"
													target="_blank"><?php echo number_format((isset($_smarty_tpl->getVariable('baoxiao_1')->value['total_money13']) ? $_smarty_tpl->getVariable('baoxiao_1')->value['total_money13'] : null),2,".",'');?>
</a>
											</td>
										</tr>
										<tr style="text-align: center;">
											<td>就餐费</td>
											<td><a href="../baoxiao/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=0"
													target="_blank"><?php echo number_format((isset($_smarty_tpl->getVariable('baoxiao_1')->value['total_money14']) ? $_smarty_tpl->getVariable('baoxiao_1')->value['total_money14'] : null),2,".",'');?>
</a>
											</td>
										</tr>
										<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('baoxiao_2')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
										<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['typeclass']) ? $_smarty_tpl->tpl_vars['row']->value['typeclass'] : null)==1){?>
										<tr style="text-align: center;">
											<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['typeid']) ? $_smarty_tpl->tpl_vars['row']->value['typeid'] : null)==17){?>
											<td rowspan="7">机务报销</td>
											<?php }?>
											<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['typename']) ? $_smarty_tpl->tpl_vars['row']->value['typename'] : null);?>
</td>
											<td><a href="../baoxiao/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['typeid']) ? $_smarty_tpl->tpl_vars['row']->value['typeid'] : null);?>
"
													target="_blank"><?php echo number_format((isset($_smarty_tpl->tpl_vars['row']->value['total_money20']) ? $_smarty_tpl->tpl_vars['row']->value['total_money20'] : null),2,".",'');?>
</a>
											</td>
										</tr>
										<?php }else{ ?>
										<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['typeid']) ? $_smarty_tpl->tpl_vars['row']->value['typeid'] : null)!=10){?>
										<tr style="text-align: center;">
											<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']==0){?>
											<td rowspan="15">公司运营报销</td>
											<?php }?>
											<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['typename']) ? $_smarty_tpl->tpl_vars['row']->value['typename'] : null);?>
</td>
											<td><a href="../baoxiao/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['typeid']) ? $_smarty_tpl->tpl_vars['row']->value['typeid'] : null);?>
"
													target="_blank"><?php echo number_format((isset($_smarty_tpl->tpl_vars['row']->value['total_money20']) ? $_smarty_tpl->tpl_vars['row']->value['total_money20'] : null),2,".",'');?>
</a>
											</td>
										</tr>
										<?php }?>
										<?php }?>
										<?php }} ?>
									</tbody>

								</table>
							</div>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="ibox float-e-margins">
							<div class="ibox-title">
								<h5>业务收入</h5>
							</div>

							<div class="ibox-content">

								<table class="table table-bordered table-hover" data-height="400"
									style="margin-bottom:0px" data-mobile-responsive="true">

									<thead>
										<tr>
											<th style="text-align: center;" colspan="2">业务收入大项明细</th>
										</tr>
									</thead>
									<tbody>
										<tr style="text-align: center;">
											<td style="width: 50%;">临时自驾业务收入</td>
											<td <?php if ((isset($_smarty_tpl->getVariable('income')->value['total_count1']) ? $_smarty_tpl->getVariable('income')->value['total_count1'] : null)!=0){?>class="aaa" <?php }?>> <a
												href="detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=1"
												target="_blank"><?php echo (isset($_smarty_tpl->getVariable('income')->value['total_money1']) ? $_smarty_tpl->getVariable('income')->value['total_money1'] : null);?>
</a></td>
										</tr>
										<tr style="text-align: center;">
											<td>临时带驾现结收入</td>
											<td <?php if ((isset($_smarty_tpl->getVariable('income')->value['total_count2']) ? $_smarty_tpl->getVariable('income')->value['total_count2'] : null)!=0){?>class="aaa" <?php }?>> <a
												href="detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=2"
												target="_blank"><?php echo (isset($_smarty_tpl->getVariable('income')->value['total_money2']) ? $_smarty_tpl->getVariable('income')->value['total_money2'] : null);?>
</a></td>
										</tr>
										<tr style="text-align: center;">
											<td>临时用车批结收入</td>
											<td <?php if ((isset($_smarty_tpl->getVariable('income')->value['total_count22']) ? $_smarty_tpl->getVariable('income')->value['total_count22'] : null)!=0){?>class="aaa" <?php }?>> <a
												href="detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=22"
												target="_blank"><?php echo (isset($_smarty_tpl->getVariable('income')->value['total_money22']) ? $_smarty_tpl->getVariable('income')->value['total_money22'] : null);?>
</a></td>
										</tr>
										<tr style="text-align: center;">
											<td>调车结算收入</td>
											<td <?php if ((isset($_smarty_tpl->getVariable('income')->value['total_count21']) ? $_smarty_tpl->getVariable('income')->value['total_count21'] : null)!=0){?>class="aaa" <?php }?>> <a
												href="detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=21"
												target="_blank"><?php echo (isset($_smarty_tpl->getVariable('income')->value['total_money21']) ? $_smarty_tpl->getVariable('income')->value['total_money21'] : null);?>
</a></td>
										</tr>
										<tr style="text-align: center;">
											<td>长期自驾业务收入</td>
											<td <?php if ((isset($_smarty_tpl->getVariable('income')->value['total_count3']) ? $_smarty_tpl->getVariable('income')->value['total_count3'] : null)!=0){?>class="aaa" <?php }?>> <a
												href="detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=3"
												target="_blank"><?php echo (isset($_smarty_tpl->getVariable('income')->value['total_money3']) ? $_smarty_tpl->getVariable('income')->value['total_money3'] : null);?>
</a></td>
										</tr>
										<tr style="text-align: center;">
											<td>长期带驾业务收入</td>
											<td <?php if ((isset($_smarty_tpl->getVariable('income')->value['total_count4']) ? $_smarty_tpl->getVariable('income')->value['total_count4'] : null)!=0){?>class="aaa" <?php }?>> <a
												href="detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=4"
												target="_blank"><?php echo (isset($_smarty_tpl->getVariable('income')->value['total_money4']) ? $_smarty_tpl->getVariable('income')->value['total_money4'] : null);?>
</a></td>
										</tr>
										<tr style="text-align: center;">
											<td>长期大客业务收入</td>
											<td <?php if ((isset($_smarty_tpl->getVariable('income')->value['total_count5']) ? $_smarty_tpl->getVariable('income')->value['total_count5'] : null)!=0){?>class="aaa" <?php }?>> <a
												href="detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=5"
												target="_blank"><?php echo (isset($_smarty_tpl->getVariable('income')->value['total_money5']) ? $_smarty_tpl->getVariable('income')->value['total_money5'] : null);?>
</a></td>
										</tr>
									</tbody>

								</table>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- 全局js -->
	<script src="../../../../crm1/js/jquery.min.js?v=2.1.4"></script>
	<script src="../../../../crm1/js/bootstrap.min.js?v=3.3.6"></script>

	<!-- ECharts -->
	<script src="../../../../crm1/js/plugins/echarts/echarts-all.js"></script>

	<!-- 自定义js -->
	<script type="text/javascript">
		$("#up").click(function () {
			var content = $("#content").css('display');
			if (content == "none") {

				$("#content").css('display', 'block');
				$('#up').removeClass("fa-chevron-down");
				$('#up').addClass("fa-chevron-up");
			} else {
				$("#content").css('display', 'none');
				$('#up').removeClass("fa-chevron-up");
				$('#up').addClass("fa-chevron-down");
			}
		});
	</script>

</body>

</html>