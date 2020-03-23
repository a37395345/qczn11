<?php /* Smarty version Smarty-3.0.4, created on 2019-12-30 14:15:29
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/gpskaizou/add.html" */ ?>
<?php /*%%SmartyHeaderCode:34645e09960145d674-57524037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0d293ea521f83ecde0579daef3adbfe3a07886e' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/gpskaizou/add.html',
      1 => 1577685305,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34645e09960145d674-57524037',
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
<link href="../../../css/box.css" rel="stylesheet" type="text/css" />
<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css?a=2" rel="stylesheet"  />
<link href="../../../css/jquery.editable-select.min.css" rel="stylesheet" type="text/css" />
<link href="../../../crm/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
<link href="../../../crm/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
<link href="../../../crm/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
<link href="../../../crm/css/animate.min.css" rel="stylesheet">
<link href="../../../crm/css/style.min862f.css?v=2" rel="stylesheet">
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/laydate/laydate.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js?a=5"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
<script src="../../../js/moment.js"></script>
<!-->
<script type="text/javascript">
	window.onload=function(){
		$("#div_a").css("display","none");
		$("#div_b").css("display","block");
		
	}
	
	var current=0;
		var ref = "";
		ref = setInterval(function(){
		    $("#img1").css("transform","rotate("+current+"deg)");
			current=current+10;
	},100);


</script>
<!--><object classid="clsid:F1317711-6BDE-4658-ABAA-39E31D3704D3" codebase="SDRdCard.cab#version=1,3,5,0" width="330" height="0" align="center" hspace="0" vspace="0" id="idcard" name="rdcard"></object>
<style type="text/css">
	.span1{
		margin-bottom: 5px;    color: inherit;
    background-color: transparent;
    -webkit-transition: all .5s;
    transition: all .5s;    border-color: #c2c2c2;border-radius: 3px;    display: inline-block;
    padding: 6px 12px;
	}

</style>

</head>
<body class="gray-bg">
	<div style="width: 100%;padding-top: 1px" id="div_a">
		<img src="../../../images/jz.png" style="width: 10%;margin-left: 45%;margin-top: 100px;" id="img1">
	</div>
	
<div class="wrapper wrapper-content animated fadeInRight" style="display: none" id="div_b">
	<!-- Panel Other -->
	<div class="ibox float-e-margins">
		<div class="ibox-title">
			<h5>添加业务</h5>
		</div>
		<form method="post" action="index.php?task=insert" name="form1" id="form1">
			<!--派车id,用于判断是修改还是调车-->
			<div class="ibox-content">
				<div class="row row-lg">
					<div class="col-sm-12">
						<!-- Example Events -->
						<div class="example-wrap">
							<div class="example">
								<div class="btn-group hidden-xs pull-right" id="exampleTableEventsToolbar" role="group">
								</div>
								<input type="hidden" name="paiche_stype" id="paiche_stype">

								
								<span  class="span1" style="float: left;">
								<img src="../../../images/a2.png" style="width: 20px">
										承租人信息
								</span>

								<button type="button" class="btn btn-outline btn-default" id="shuaka1" onclick="beginread_onclick()" style="float: left;">
								<img src="../../../images/a10.png" style="width: 20px">
										刷身份证验证
								</button>
						

						<button type="button" class="btn btn-outline btn-default" id="" onclick="xkehu_xianshi()" style="float: left;margin-left: 10px;">
								<img src="../../../images/a10.png" style="width: 20px">
										新客户人脸识别验证
						</button>
						
						<div style="clear: both;">

										<div style="display: none" id="xin_kehu">
										<table class="table table-bordered">

										<tr>
											<th style="background-color:#F5F5F6" width="15%">
												<span style="color:#000">承租人姓名</span>
											</th>
											<td width="35%" style="text-align: center;">
												<input type="text" class="form-control input-sm" placeholder="姓名" name="realname" id="realname">
											</td>

											<th style="background-color:#F5F5F6" width="15%">
												<span style="color:#000">身份证号码</span>
											</th>
											<td width="35%">
												<input type="text" class="form-control input-sm" placeholder="身份证号码" name="idcard_a" id="idcard_a" minlength="18" maxlength="18">
											</td>
										</tr>
										<tr>
											<th style="background-color:#F5F5F6" width="15%">
												<span style="color:#000">图片</span>
											</th>
											<td width="35%">
												<input type="file" class="form-control input-sm" placeholder="图片" name="tp_b" id="tp_b" accept=".png, .jpeg, .jpg">
											</td>

											<th style="background-color:#F5F5F6" width="15%">
												<img src="" id="images_a" width="100%" >
											</th>



											<th style="background-color:#F5F5F6" width="35%">
												<button type="button" class="btn btn-outline btn-default" id="yz_bbb" onclick="yzm_yanzheng_a()" style="float: left;margin-left: 10px;">
													<img src="../../../images/a10.png" style="width: 20px">
															确定
												</button>
												<input type="hidden" name="paiche_tupian" id="paiche_tupian">
											</th>
										</tr>
										
										</table>
										</div>

						


							
							
							</div>
								<table class="table table-bordered" style="display: none" id='czr'>
								<tr  id="czr_a">
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">承租人照片</span>
									</th>
									<td width="35%" style="text-align: center;">
										<img id="img_linker_picture" src="" style="width: 25%">
										<input type="hidden" name="paiche_linkerPicture" id="paiche_linkerPicture" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_linkerPicture']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_linkerPicture'] : null);?>
">
									</td>

									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000"></span>
									</th>
									<td width="35%">
									</td>
								</tr>
								
								<tr>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000" >承租人姓名</span>
									</th>
									<td width="35%">
										<input type="text" class="form-control input-sm  yuyue" placeholder="必填" name="paiche_linker" id="paiche_linker" readonly="readonly" unselectable="on"  >

										 
										
									</td>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">承租人电话号码</span>
									</th>
									<td width="35%">
										<input type="text" class="form-control input-sm" placeholder="必填" name="paiche_linkerPhone" id="paiche_linkerPhone"  >
									</td>
								</tr>


								<tr class="f_changqi">
									<th style="background-color:#F5F5F6">
										<span style="color:#000" id="c_xm">承租人身份证号码</span>
									</th>
				<td>
					<input type="text" class="form-control input-sm"  name="paiche_linkerNum" id="paiche_linkerNum" readonly="readonly" unselectable="on">
				</td>
									<th style="background-color:#F5F5F6">
										<span style="color:#000">承租人地址</span>
									</th>

									<td>
										<input type="text" class="form-control input-sm" placeholder="" name="paiche_linkerAdd" id="paiche_linkerAdd" readonly="readonly" unselectable="on">
									</td>
								</tr>
								</table>
								<br/>
								<div class="xixi">
									<span  class="span1" style="float: left;">
									<img src="../../../images/a5.png" style="width: 20px">
										车辆信息
									</span>
									<dl class="lineD" id="showCar" style="padding-top: 3px">
	         					关键字：
										<input type="text" name="paicheCarKey" id="paicheCarKey" size="10" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_num']) ? $_smarty_tpl->getVariable('paiche')->value['car_num'] : null);?>
" />
										<input type="hidden" name="paicheCar" id="paicheCar" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paicheCar2']) ? $_smarty_tpl->getVariable('paiche')->value['paicheCar2'] : null);?>
" size="10"/>


										<input type="hidden" name="paicheCars" id="paicheCars"  value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paicheCar2s']) ? $_smarty_tpl->getVariable('paiche')->value['paicheCar2s'] : null);?>
" size="10"/>

										<a href="javascript:get_car();"><img src="../../../css/car2.gif" height="15" class="peoplePic"/></a>
									</dl>



									<table class="table table-bordered" id="che" style="display: none">
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">车牌号码</span>
										</th>
										<td width="35%">
											<input type="text" id="car_num" class="form-control input-sm" placeholder="" readonly="readonly" unselectable="on" >
										</td>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">车辆颜色</span>
										</th>
										<td width="35%">
											<input type="text" id="car_color" class="form-control input-sm" placeholder="" readonly="readonly" unselectable="on">
										</td>
									</tr>
									<tr>
										
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">车辆种类</span>
										</th>
										<td width="35%">
											<input type="text" id="car_types_a" class="form-control input-sm" placeholder="" readonly="readonly"unselectable="on" >

											<input type="hidden" id="car_types" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_types']) ? $_smarty_tpl->getVariable('paiche')->value['car_types'] : null);?>
">
										</td>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">车辆价格</span>
										</th>
										<td width="35%">
											<input type="text" id="car_amount" class="form-control input-sm" placeholder="" readonly="readonly" unselectable="on" value="">
										</td>
									</tr>
									
							
									</table>
								</div>








								<span  class="span1" style="float: left;">
								<img src="../../../images/a6.png" style="width: 20px">
										合同数据
								</span>
								<table class="table table-bordered">
								
								<tr>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">用车开始时间：</span>
									</th>
									<td width="35%">
										<input name="paiche_startDate" id="paiche_startDate" placeholder="请输入日期" value="<?php echo $_smarty_tpl->getVariable('time')->value;?>
" class="laydate-icon"  unselectable="on" readonly >
										
									</td>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">使用月数：</span>
									</th>
									<td width="35%">
		                              <input style="width: 78%;float: left;" type="text" min="0" id="yue" class="form-control input-sm" placeholder="" value="" onchange="jisuan_shijian()">
		                              <input style="float: left;height: 30px;width: 30px;font-size: 18px;line-height: 24px;" class="btnyz xdd" type="button" value="+">
		                              <input style="float: left;width: 30px;height: 30px;font-size: 18px;line-height: 24px;" class="btnyj xdd" type="button" value="-">
		                            </td>
								</tr>
								<tr>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">用车结束时间：</span>
									</th>
									<td width="35%">
										<input name="paiche_endDate" id="paiche_endDate" placeholder="请输入日期" readonly="readonly" class="form-control input-sm" unselectable="on" value="<?php echo $_smarty_tpl->getVariable('paiche_endDate')->value;?>
">
									</td>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">租金：</span>
									</th>
									<td width="35%">
										<input readonly="readonly" unselectable="on" type="number" min="0" id="paiche_rent" name="paiche_rent" class="form-control input-sm " placeholder="" value="">
									</td>
								</tr>

								<tr>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">月供金额：</span>
									</th>
									<td width="35%">
										<input readonly="readonly" unselectable="on" type="number" min="0"  id="yue_money" name="" class="form-control input-sm" placeholder=""  value="" >
									</td>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">押金：</span>
									</th>
									<td width="35%">
										<input type="number" min="0"  id="paiche_deposit" name="paiche_deposit" class="form-control input-sm" placeholder=""  value="" onchange="xdd()">
									</td>
									
								</tr>
								<tr>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">本次最低收取金额：</span>
									</th>
									<td width="35%">
										<input readonly="readonly" unselectable="on" type="number" min="0"  id="min_money" name="" class="form-control input-sm" placeholder=""  value="" >
									</td>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">备注说明：</span>
									</th>
									<td width="35%">
										<input type="text" id="paiche_specialRemarks" name="paiche_specialRemarks" class="form-control input-sm" placeholder=""
										value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_specialRemarks']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_specialRemarks'] : null);?>
">
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
<input type="hidden" name="paicheCar" id="paicheCar" value="<?php echo $_smarty_tpl->getVariable('paicheCar')->value;?>
">
<div id="haoma_a" style="width:30%;display: none;


margin:0px; z-index: 1000;
padding:0px;
position:fixed;/* 相对于屏幕定位 */
left:35%;/* 横向位置也可用left */
top:100px;/* 纵向位置也可用top */
background-color:#F5F5F6;    border: 2px solid #999999;">
	<div style="height: 35px;width: 100%;background-color: #cacad2;text-align: center;">
		<span style="line-height: 35px;text-align: center;font-size: 18px">请选择验证号码</span>
	</div>
	<div style="width: 100%;margin-top: 15px;margin-bottom: 15px;padding-left:40%" id="haoma_b">
		<label >
			<input name="shouji" type="radio"  checked value="1"/>
			<span>中国公民</span> 
		</label><br/>
		<label >
			<input name="shouji" type="radio"  checked value="1"/>
			<span>中国公民</span> 
		</label><br/>
		<label >
			<input name="shouji" type="radio"  checked value="1"/>
			<span>中国公民</span> 
		</label><br/>
		<label >
			<input name="shouji" type="radio"  checked value="1"/>
			<span>中国公民</span> 
		</label><br/>
	</div>
	<div style="height: 35px;width: 100%;background-color: #cacad2;text-align: center;padding-top: 5px">
		<input type="button" name="" id="queding" value="确定" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="button" name="" id="quxiao" value="取消">
	</div >
</div>
<script type="text/javascript" src="../../../js/gps.js?a=<?php echo time();?>
"></script>
</body>

<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->
</html>