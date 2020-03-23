<?php /* Smarty version Smarty-3.0.4, created on 2019-08-30 16:31:23
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/zijia_linshi/zijia_changecar_a.html" */ ?>
<?php /*%%SmartyHeaderCode:196375d68dedb6ba1c6-84800876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a973de3c60cdf5a04175d4e6d9917e850f90f71' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/zijia_linshi/zijia_changecar_a.html',
      1 => 1567153763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196375d68dedb6ba1c6-84800876',
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
<title>临时自驾换车</title>
<link rel="shortcut icon" href="favicon.ico">
<link href="../../../css/box.css" rel="stylesheet" type="text/css" />
<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css?a=2" rel="stylesheet"  />
<link href="../../../css/jquery.editable-select.min.css" rel="stylesheet" type="text/css" />
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
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js?a=1"></script>
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
			<h5>临时自驾换车</h5>
		</div>
		<form method="post" action="zijiaChangecar_accept.php" name="form1" id="form1">
			<div class="ibox-content"  id="tian">
				<div class="row row-lg">
					<div class="col-sm-12">
						<!-- Example Events -->
						<div class="example-wrap">
							<div class="example">
								
								
								<div class="btn-group hidden-xs pull-right" id="exampleTableEventsToolbar" role="group">
								</div>
								<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('pid')->value;?>
" id="pid" name="pid">
								<input type="hidden" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paicheCar']) ? $_smarty_tpl->getVariable('paiche')->value['paicheCar'] : null);?>
" id="car_id" name="car_id">
								<div class="shiji">
									<span  class="span1" style="float: left;">
									<img src="../../../images/a5.png" style="width: 20px">
										被换车辆信息
									</span>
									<table class="table table-bordered" class="shiji">
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">车牌号码</span>
										</th>
										<td width="35%">
											<input type="text" id="car_num" class="form-control input-sm" placeholder="" readonly="readonly" value="苏D<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_num']) ? $_smarty_tpl->getVariable('paiche')->value['car_num'] : null);?>
" unselectable="on">
										</td>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">车辆颜色</span>
										</th>
										<td width="35%">
											<input type="text" id="car_color" class="form-control input-sm" placeholder="" readonly="readonly" unselectable="on"value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_color']) ? $_smarty_tpl->getVariable('paiche')->value['car_color'] : null);?>
">
										</td>
									</tr>
								
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">车辆日租金</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="" id="plan_rentamount" <?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_pintaiid']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_pintaiid'] : null)<=0){?>readonly="readonly" unselectable="on"<?php }?> value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['plan_rentamount']) ? $_smarty_tpl->getVariable('paiche')->value['plan_rentamount'] : null);?>
">
										</td>

										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">车辆超时费用</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="" id="plan_chaoshi" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['plan_chaoshi']) ? $_smarty_tpl->getVariable('paiche')->value['plan_chaoshi'] : null);?>
">
										</td>
									</tr>
									

									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">开始使用时间</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="" id="stime" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['stime']) ? $_smarty_tpl->getVariable('paiche')->value['stime'] : null);?>
">
										</td>

										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">换车时间</span>
										</th>
										<td width="35%">
											
											<input type="text" class="form-control input-sm" placeholder="" id="etime" readonly="readonly" unselectable="on" value="<?php echo $_smarty_tpl->getVariable('addtime')->value;?>
" name="etime">

										</td>
									</tr>
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">开始公里数</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="必填" id="skm" name="skm" >
										</td>

										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">结束公里数</span>
										</th>

										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="必填" id="ekm"  name="ekm" >
										</td>
									</tr>

									
									

									
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">换车备注</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm"  id="beizu" name="beizu" placeholder="" >
										</td>

										<th style="background-color:#F5F5F6" width="15%">
											
										</th>

										<td width="35%">
											
										</td>
									</tr>
									</table>
								</div>




















								<input type="hidden" value="" id="car_ida" name="car_ida">

								<div class="shiji">
									<span  class="span1" style="float: left;">
									<img src="../../../images/a5.png" style="width: 20px">
										目标车辆信息
									</span>

									<dl class="lineD" id="showCar">
	         							&nbsp;&nbsp;&nbsp;关键字：
										<input type="text" name="paicheCarKey" id="paicheCarKey" size="10" value="" />

										<input type="hidden" name="paicheCar" id="paicheCar" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paicheCar2']) ? $_smarty_tpl->getVariable('paiche')->value['paicheCar2'] : null);?>
" size="10"/>

										<input type="hidden" name="paicheCars" id="paicheCars"  value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paicheCar2s']) ? $_smarty_tpl->getVariable('paiche')->value['paicheCar2s'] : null);?>
" size="10"/>

										<a href="javascript:select_car_a();"><img src="../../../css/car2.gif" height="15" class="peoplePic"/></a>
									</dl>



									<table class="table table-bordered" class="shiji">
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">车牌号码</span>
										</th>
										<td width="35%">
											<input type="text" id="car_num_a" class="form-control input-sm" placeholder="" readonly="readonly" unselectable="on">
										</td>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">车辆颜色</span>
										</th>
										<td width="35%">
											<input type="text" id="car_color_a" class="form-control input-sm" placeholder="" readonly="readonly" unselectable="on">
										</td>
									</tr>
						
									
									<tr >
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">车辆日租金</span>
										</th>
										<td width="35%">
											<input type="text" id="plan_rentamounta" class="form-control input-sm" placeholder="" <?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_pintaiid']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_pintaiid'] : null)<=0){?>readonly="readonly" unselectable="on"<?php }?> >
										</td>

										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">车辆超时费用</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="" id="plan_chaoshia" readonly="readonly"  unselectable="on">
										</td>
									</tr>
									<tr style="display: none" id="plan_chaokma">
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">超公里费用</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="" id="plan_chaokmya" readonly="readonly" unselectable="on" >
										</td>

										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">每天限制公里数</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="" id="plan_chaokmsa" readonly="readonly" unselectable="on" >
										</td>
									</tr>
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">预计结束时间</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="" id="endtime" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_endDate']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_endDate'] : null);?>
" >
										</td>

										<th style="background-color:#F5F5F6" width="15%">
											
										</th>
										<td width="35%">
											
										</td>
									</tr>
									</table>
								</div>
								<div class="shiji">
									<span  class="span1" style="float: left;">
									<img src="../../../images/a5.png" style="width: 20px">
										租金押金
									</span>

									<table class="table table-bordered" class="shiji">
									
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">原押金</span>
										</th>
										<td width="35%">
											<input type="text" id="yajin" class="form-control input-sm" placeholder="" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['yajin']) ? $_smarty_tpl->getVariable('paiche')->value['yajin'] : null);?>
">
										</td>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">换车后的押金</span>
										</th>
										<td width="35%">
											<input type="text" id="yajin_a" class="form-control input-sm" placeholder="" name="yajin_a">
										</td>
									</tr>

									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">租金差价</span>
										</th>
										<td width="35%">
											<input type="text" id="zujin_a" class="form-control input-sm" placeholder="" <?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_pintaiid']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_pintaiid'] : null)==0){?>readonly="readonly" unselectable="on"<?php }?> name="zujin_a">
										</td>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">税金</span>
										</th>

										<td width="35%">
											<input type="text" class="form-control input-sm"  id="suijin" name="suijin" placeholder="" readonly="readonly" unselectable="on">
											
											<input type="hidden" class="form-control input-sm"  id="paiche_needtax"  placeholder="" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_needtax']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_needtax'] : null);?>
">
										</td>

										
									</tr>
									
									</table>
								</div>
								
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

$("#submit").click(function(){

	var beizu=$('#beizu').val();
	var skm=parseInt($("#skm").val());
	var ekm=parseInt($("#ekm").val());
	var car_ida=parseInt($("#car_ida").val());
	
	if(!(skm>0)){
		alert("请先填写被换车辆的开始公里数!");
		return false;
	}

	if(!(ekm>0)){
		alert("请先填写被换车辆的结束公里数!");
		return false;
	}

	if(ekm<skm){
		alert("被换车辆的结束公里数不能大于开始公里数!");
		return false;
	}
	
	if(!(car_ida>0)){
		alert("你还没有选择车辆");
		return false;
	}
});




function select_car_a(){
		var key=$("#paicheCarKey").val();
		var car_id=$("#car_id").val();
		demo_iframe('selectemp.php?sel_type=c&key='+key+'&car_id='+car_id,'选择车辆',650,380,'login_js');
		
}
$('#form1').submit(function(){
		$('#submit').attr('disabled','disabled');
		$('#submit').val('正在提交');

	});


</script>
</html>