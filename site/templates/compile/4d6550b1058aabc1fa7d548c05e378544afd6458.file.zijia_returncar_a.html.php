<?php /* Smarty version Smarty-3.0.4, created on 2019-10-17 14:07:20
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/zijia_linshi/zijia_returncar_a.html" */ ?>
<?php /*%%SmartyHeaderCode:6649669385da805180d5c52-36439847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d6550b1058aabc1fa7d548c05e378544afd6458' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/zijia_linshi/zijia_returncar_a.html',
      1 => 1571292343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6649669385da805180d5c52-36439847',
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
			<h5>临时自驾还车 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;车辆：<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
-<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_color']) ? $_smarty_tpl->getVariable('list')->value['car_color'] : null);?>
-<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_brand']) ? $_smarty_tpl->getVariable('list')->value['car_brand'] : null);?>
-<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_type']) ? $_smarty_tpl->getVariable('list')->value['car_type'] : null);?>
</h5>
		</div>
		<form method="post" action="returncar_accept.php" name="form1" id="form1">
			<div class="ibox-content"  id="tian">
				<div class="row row-lg">
					<div class="col-sm-12">
						<!-- Example Events -->
						<div class="example-wrap">
							<div class="example">
								
								<div class="btn-group hidden-xs pull-right" id="exampleTableEventsToolbar" role="group">
								</div>
								<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('pid')->value;?>
" id="car_id" name="pid">
								<input type="hidden" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paicheCar']) ? $_smarty_tpl->getVariable('list')->value['paicheCar'] : null);?>
" id="paicheCar" name="paicheCar">
								<input type="hidden" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_needtax']) ? $_smarty_tpl->getVariable('list')->value['paiche_needtax'] : null);?>
" id="paiche_needtax">
								<input type="hidden" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['plan_chaokm']) ? $_smarty_tpl->getVariable('list')->value['plan_chaokm'] : null);?>
" id="plan_chaokm">
								<input type="hidden" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['plan_chaokms']) ? $_smarty_tpl->getVariable('list')->value['plan_chaokms'] : null);?>
" id="plan_chaokms">
								<input type="hidden" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['plan_chaokmy']) ? $_smarty_tpl->getVariable('list')->value['plan_chaokmy'] : null);?>
" id="plan_chaokmy">
								<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('shiyong_day')->value;?>
" id="shiyong_day">
								
								

								
								<div class="shiji">
									<table class="table table-bordered" class="shiji">
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">约定用车开始时间：</span>
										</th>
										<td width="35%">
											<input type="text" id="" class="form-control input-sm" placeholder="" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate_All'] : null);?>
">
										</td>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">约定用车结束时间：</span>
										</th>
										<td width="35%">
											<input type="text" id="" class="form-control input-sm" placeholder="" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_endDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_endDate_All'] : null);?>
">
										</td>
									</tr>
								
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">当前车辆实际用车时间：</span>
										</th>
										<td width="35%">
											<input type="text" readonly="readonly" unselectable="on" class="form-control input-sm" placeholder="" id=""  value="<?php echo $_smarty_tpl->getVariable('changecar_times')->value;?>
">
										</td>

										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">实际还车时间:</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="" id="" name="return_endDate" readonly="readonly" unselectable="on" value="<?php echo $_smarty_tpl->getVariable('nowtime')->value;?>
">
										</td>
									</tr>
									
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">超时：</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="" id="" readonly="readonly" unselectable="on" value="<?php echo $_smarty_tpl->getVariable('chaoshi_text')->value;?>
">
										</td>

										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">超时费用:</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="" id="chaoshi_feiyong" readonly="readonly" unselectable="on" name="chaoshi_feiyong" value="<?php echo $_smarty_tpl->getVariable('chaoshi_feiyong')->value;?>
">
										</td>
									</tr>
									
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">超公里:</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="" id="stime" readonly="readonly" unselectable="on" value="<?php echo $_smarty_tpl->getVariable('chaogongli_text')->value;?>
">
										</td>

										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">换车使用公里数:</span>
										</th>
										<td width="35%">
											
											<input type="text" class="form-control input-sm" placeholder="" id="totalChangeCarKilo" readonly="readonly" unselectable="on" value="<?php echo $_smarty_tpl->getVariable('totalChangeCarKilo')->value;?>
" name="">

										</td>
									</tr>
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">开始公里数:</span>
										</th>
										<td width="35%">
											<input type="number" min="0" class="form-control input-sm" placeholder="必填" id="skm" name="skm" >
										</td>

										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">结束公里数:</span>
										</th>

										<td width="35%">
											<input type="number" min="0" class="form-control input-sm" placeholder="必填" id="ekm"  name="ekm" onchange="jisuan()">
										</td>
									</tr>

									
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">当前车辆行驶公里数：</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm"  id="sum_km"  name="sum_km" placeholder="" readonly="readonly" unselectable="on">
										</td>

										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">结算公里数：</span>
										</th>

										<td width="35%">
											<input type="text" class="form-control input-sm"  id="sum_kma" name="sum_kma" placeholder="" readonly="readonly" unselectable="on">
										</td>
									</tr>

									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">超公里费用:</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm"  id="chao_money" name="chao_money" placeholder="" readonly="readonly" unselectable="on">
										</td>

										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">税金:</span>
										</th>

										<td width="35%">
											<input type="text" class="form-control input-sm"  id="suijin" name="suijin" placeholder="" readonly="readonly" unselectable="on">
										</td>
									</tr>
									</table>
								</div>

							<table class="table table-bordered" class="shiji">
								  						<tr>
                                                            <th width="25%">序号</th>
                                                            <th width="25%">费用名称</th>
                                                            <th width="25%">应收</th>
                                                            <th width="25%">已收</th>
                                           
                                             			</tr>
                                             			<?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable(1, null, null);?>
                                             			<?php $_smarty_tpl->tpl_vars['conv_money'] = new Smarty_variable(0, null, null);?>
                                             			<?php $_smarty_tpl->tpl_vars['have_in_money'] = new Smarty_variable(0, null, null);?>
								<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('chargelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
								<tr>
									<td><?php echo $_smarty_tpl->getVariable('index')->value;?>
</td>
									<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null);?>
</td>
									<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null);?>
</td>
									<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
</td>
				
			
								</tr>
								<?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->getVariable('index')->value+1, null, null);?>
								<?php $_smarty_tpl->tpl_vars['conv_money'] = new Smarty_variable($_smarty_tpl->getVariable('conv_money')->value+(isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null), null, null);?>
                                <?php $_smarty_tpl->tpl_vars['have_in_money'] = new Smarty_variable($_smarty_tpl->getVariable('have_in_money')->value+(isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null), null, null);?>
								<?php }} ?>
								
	</table>
	<?php if ($_smarty_tpl->getVariable('youhui_list')->value){?>
	<table class="table table-bordered" class="shiji">
								  						<tr>
                                                            <th width="25%">序号</th>
                                                            <th width="25%">优惠名称</th>
                                                            <th width="25%">优惠金额</th>
                                                            <th width="25%">已优惠</th>
                                           
                                             			</tr>
                                             			<?php $_smarty_tpl->tpl_vars['index_a'] = new Smarty_variable(1, null, null);?>
                                             			<?php $_smarty_tpl->tpl_vars['youhui_mone'] = new Smarty_variable(0, null, null);?>
                                             			<?php $_smarty_tpl->tpl_vars['youhui_omone'] = new Smarty_variable(0, null, null);?>
                                             			
								<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('youhui_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
								<tr>
									<td><?php echo $_smarty_tpl->getVariable('index_a')->value;?>
</td>
									<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_name']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_name'] : null);?>
</td>
									<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_mone']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_mone'] : null);?>
</td>
									<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_omone']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_omone'] : null);?>
</td>
				
			
								</tr>
									<?php $_smarty_tpl->tpl_vars['index_a'] = new Smarty_variable($_smarty_tpl->getVariable('index_a')->value+1, null, null);?>
	                                <?php $_smarty_tpl->tpl_vars['youhui_mone'] = new Smarty_variable($_smarty_tpl->getVariable('youhui_mone')->value+(isset($_smarty_tpl->tpl_vars['row']->value['youhui_mone']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_mone'] : null), null, null);?>
	                                <?php $_smarty_tpl->tpl_vars['youhui_omone'] = new Smarty_variable($_smarty_tpl->getVariable('youhui_omone')->value+(isset($_smarty_tpl->tpl_vars['row']->value['youhui_omone']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_omone'] : null), null, null);?>
								<?php }} ?>
								
	</table>
	<?php }?>
	<table class="table table-bordered" class="shiji">
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">还需收取：</span>
										</th>
										<td width="35%">
											<input type="hidden" name="haixu_a" id="haixu_a" value="<?php echo $_smarty_tpl->getVariable('conv_money')->value-$_smarty_tpl->getVariable('have_in_money')->value+$_smarty_tpl->getVariable('chaoshi_feiyong')->value-$_smarty_tpl->getVariable('youhui_mone')->value+$_smarty_tpl->getVariable('youhui_omone')->value;?>
">

											<input type="text" class="form-control input-sm"  id="haixu"  placeholder="" readonly="readonly" unselectable="on" value="<?php echo $_smarty_tpl->getVariable('conv_money')->value-$_smarty_tpl->getVariable('have_in_money')->value+$_smarty_tpl->getVariable('chaoshi_feiyong')->value-$_smarty_tpl->getVariable('youhui_mone')->value+$_smarty_tpl->getVariable('youhui_omone')->value;?>
">
										</td>

										<th style="background-color:#F5F5F6" width="15%">
											
										</th>

										<td width="35%">
											
										</td>
									</tr>
	</table>

								
							</div>
						</div>
						<!-- End Example Events -->
					</div>
				</div>
				<input type="submit" id="submit" class="btn btn-outline btn-default" value="提交" style="width: 10%;margin-left: 45%;display: block;">
			</div>
			
		</form>
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
<script type="text/javascript">
	$('#form1').submit(function(){
		$('#submit').attr('disabled','disabled');
		$('#submit').val('正在提交');

	});
	function jisuan(){
		//超时费
		var chaoshi_feiyong=0;
		if(parseInt($('#chaoshi_feiyong').val())>0){
			chaoshi_feiyong=parseInt($('#chaoshi_feiyong').val());
		}	
		//还需要收取的费用

		var haixu_a=0;
		if(parseInt($('#haixu_a').val())>0){
			haixu_a=parseInt($('#haixu_a').val());
		}
		

		//开始公里
		var skm=parseInt($('#skm').val());
		//结束公里
		var ekm=parseInt($('#ekm').val());
		//是否有超公里费
		var plan_chaokm=$('#plan_chaokm').val()
		//当前车辆使用天数
		var shiyong_day=0;
		if(parseInt($('#shiyong_day').val())>0){
			shiyong_day=parseInt($('#shiyong_day').val());
		}

		//还车行驶公里数
		var totalChangeCarKilo=0;
		if(parseInt($('#totalChangeCarKilo').val())>0){
			totalChangeCarKilo=parseInt($('#totalChangeCarKilo').val());
		}
		;
		if(!(skm>0)){
			alert('请先填写正确的开始公里数！');
			$("#ekm").val("");
			return false;
		}
		if(ekm<=skm){
			alert('请先填写正确的公里数！');
			$("#ekm").val("");
			return false;
		}
		//当前车辆行驶公里数
		var sum_km=ekm-skm;
		$("#sum_km").val(sum_km);
		//结束公里数
		$("#sum_kma").val(sum_km+totalChangeCarKilo);

		var chao_money=0;
		suijin=0;
		

		if(plan_chaokm=='y'){
			//每天限制公里数
			var plan_chaokms=0;
			if(parseInt($('#plan_chaokms').val())>0){
				plan_chaokms=parseInt($('#plan_chaokms').val());
			}
			//超公里费用
			var plan_chaokmy=0;
			if(parseInt($('#plan_chaokmy').val())>0){
				plan_chaokmy=parseInt($('#plan_chaokmy').val());
			}
			
			if((sum_km+totalChangeCarKilo)>(plan_chaokms*shiyong_day)){
				chao_money=((sum_km+totalChangeCarKilo)-(plan_chaokms*shiyong_day))*plan_chaokmy;
			}
			$('#chao_money').val(chao_money);
			
			

		}
		var paiche_needtax=parseInt($('#paiche_needtax').val());
		if(paiche_needtax>0){
				suijin=(chaoshi_feiyong+chao_money)*0.1;
		}
		$('#suijin').val(suijin);
		
		$("#haixu").val(haixu_a+chao_money+suijin);
	}


	$("#submit").click(function(){
		var ekm=parseInt($('#ekm').val());
		if(!(ekm>0)){
			alert('请先填写正确的公里数！');
			return false;
		}
		var youhui=parseInt($('#youhui').val());
		if(youhui>0){
			if($('#yuanyin').val()==""){
				alert('请先填写优惠原因！');
				return false;
			}
		}
	});

</script>
</html>