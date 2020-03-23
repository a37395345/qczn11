<?php /* Smarty version Smarty-3.0.4, created on 2019-06-05 18:57:53
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/business/zijia_create.html" */ ?>
<?php /*%%SmartyHeaderCode:141835cf7a031546e83-29819150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ef360068a77ddc208aff32dfb857be60a2e5582' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/business/zijia_create.html',
      1 => 1559732187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141835cf7a031546e83-29819150',
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
var kh_a=0;
function beginread_onclick(){
	rdcard.ReadCard();
	if (rdcard.bHaveCard){
		$("#paiche_linker").val(rdcard.NameS);
		$("#paiche_linkerNum").val(rdcard.CardNo);
		$("#paiche_linkerAdd").val(rdcard.Address);
		getPitcure(rdcard.CardNo,rdcard.JPGBuffer,1);
		rdcard.bHaveCard=false;
	}
}
function beginread_onclick2(){
	rdcard.ReadCard();
	if (rdcard.bHaveCard){
		$("#paiche_promier").val(rdcard.NameS);
		$("#paiche_promierNum").val(rdcard.CardNo);
		$("#paiche_promierAdd").val(rdcard.Address);
		getPitcure(rdcard.CardNo,rdcard.JPGBuffer,2);
		rdcard.bHaveCard=false;
	}
}
function getPitcure(strCardNo,strBase64Code,nFlag){
	if (strCardNo!=""){
		$.ajax({
			  type:'POST',
			  url:'list.php?task=generatepicutrea',
			  data:{"IDcard":strCardNo,"Base64Code":strBase64Code},
			  dataType:"json",
			  cache: false,
			  async:false,
			  error: function(){
			      sre="err1";
			  },
			  success:function(jsonmsg){
					if (nFlag==1){
						$("#img_linker_picture").attr('src','../../../thumb/upload/idpicture/'+strCardNo+'.jpg');
						$("#paiche_linkerPicture").val(strCardNo+'.jpg');
						$("#czr").css("display","block");
						var str=strCardNo.substr(0,4);
						var kh="";
						if(str=="3201"||str=="3202"||str=="3204"||str=="3205"||strCardNo.substr(0,2)=="31"){
							kh=kh+"本地";
							kh_a=1;
							//$('#paiche_leixing').val('本地客户');
						}else{
							//$('#paiche_leixing').val('外地客户');
							kh=kh+"外地";
						}
						if(jsonmsg.length>0){
							kh=kh+"老客户";
							kh_a=1;
							for(var i=0;i<jsonmsg.length;i++){
								kh=kh+"<hr/><a target='_blank' href='detail.php?uid="+jsonmsg[i]['paiche_id']+"'>"+jsonmsg[i]['paiche_contractNum']+"</a>"
							}
						}else{
							kh=kh+"新客户";
						}
						$('#paiche_leixing').html(kh);
					}
					if (nFlag==2){
						$('#img_promier_picture').attr('src','../../../thumb/upload/idpicture/'+strCardNo+'.jpg');
						$("#paiche_promierPicture").val(strCardNo+'.jpg');
						$("#czr_a").css("display","block");
					}
			  }
		});
	}
}
</script>
<!--><object classid="clsid:F1317711-6BDE-4658-ABAA-39E31D3704D3" codebase="SDRdCard.cab#version=1,3,5,0" width="330" height="0" align="center" hspace="0" vspace="0" id="idcard" name="rdcard"></object>
<style type="text/css">
	#jbox-iframe{
		    position: fixed;
    width: 650px;
    height: 380px;
    left: 35%;
    top: 20%;
	}
</style>
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
	<!-- Panel Other -->
	<div class="ibox float-e-margins">
		<div class="ibox-title">
			<h5>添加临时自驾单</h5>
		</div>

		<div style="width: 100%;height: 100%;display: none" id="leixing">
			<h2 style="text-align: center;margin: 5%">请选择派车类型
			</h2>
			<input type="button" style="width: 10%;display: block;text-align: center;height: 40px;float: left;margin: 20%" id="bt_1" value="实时单">
			<input type="button" style="width: 10%;display: block;text-align: center;height: 40px;float: left;margin: 20%" id="bt_2" value="预约单">
		</div>


		<form method="post" action="zijia_insert.php" name="form1">
			<!--派车id,用于判断是修改还是调车-->
			<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('p_id')->value;?>
" id="p_id" name="p_id">
			<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('paidan_type_a')->value;?>
" id="paidan_type_a" name="paidan_type_a">
			<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('paidan_type_b')->value;?>
" id="paidan_type_b" name="paidan_type_b">
			


			

			<div class="ibox-content" style="display: none" id="tian">
				<div class="row row-lg">
					<div class="col-sm-12">
						<!-- Example Events -->
						<div class="example-wrap">
							<div class="example">
								<div class="btn-group hidden-xs pull-right" id="exampleTableEventsToolbar" role="group">
								</div>
								<button type="button" class="btn btn-outline btn-default">
								<img src="../../../images/a2.png" style="width: 20px">
										客户来源
								</button>

								<table class="table table-bordered">
								<tr>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">用车类型</span>
									</th>
									<td width="35%" style="text-align: center;">
										<select class="form-control input-sm" id="paiche_busitype" name="paiche_busitype">
											<option value="0">请选择
											</option>
											<option  value="1" <?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_pintaiid']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_pintaiid'] : null)==0){?>selected<?php }?>>临时散客
											</option>
											<option  value="2" <?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_pintaiid']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_pintaiid'] : null)!=0){?>selected<?php }?>>平台客户
											</option>
										</select>
									</td>
									<div style="" id="ke_leixing">
										<th style="background-color:#F5F5F6;display: none" width="15%">
											<span style="color:#000">客户选择</span>
										</th>
										<td width="35%">
											<input type="hidden" class="form-control input-sm" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_pintaiid']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_pintaiid'] : null);?>
"  id="pintai_a" >

											<select class="form-control input-sm" id="pintai" name="pintai">
												<option <?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_pintaiid']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_pintaiid'] : null)==0){?>selected<?php }?> value="0">
								  			请选择
												</option>
									<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pintai_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
												<option <?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_pintaiid']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_pintaiid'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null)){?>selected<?php }?> value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
">
								  			<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['name']) ? $_smarty_tpl->tpl_vars['rows']->value['name'] : null);?>

												</option>
								 	<?php }} ?>
											</select>
										</td>
									</div>
								</tr>
								</table>
								<button type="button" class="btn btn-outline btn-default" style="float: left;">
								<img src="../../../images/a1.png" style="width: 20px">
										门店信息
								</button>
								<table class="table table-bordered">
								<tr>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">业务归属</span>
									</th>
									<td width="35%">
										<select class="form-control input-sm" id="paicheCounterShop" name="paicheCounterShop">
											<option  value="0">请选择</option>
								<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shop_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
											<option <?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_shopid']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_shopid'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null)){?>selected<?php }?> value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null);?>
">
								  <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>

											</option>
								 <?php }} ?>
										</select>
									</td>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">业务员</span>
									</th>
									<td width="35%">
										<select class="form-control input-sm" id="paicheCounterMan"  name="paicheCounterMan" value="">
											<?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paicheCounterMan']) ? $_smarty_tpl->getVariable('paiche')->value['paicheCounterMan'] : null)){?>
											<option selected value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paicheCounterMan']) ? $_smarty_tpl->getVariable('paiche')->value['paicheCounterMan'] : null);?>
">
								  				<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['emp_name']) ? $_smarty_tpl->getVariable('paiche')->value['emp_name'] : null);?>

											</option>
											<?php }?>
										</select>
									</td>
								</tr>
								<tr>
									<th style="background-color:#F5F5F6">
										<span style="color:#000">服务门店</span>
									</th>
									<td width="35%">
										<input type="email" name="shop_name" id="shop_name" class="form-control input-sm" value="<?php echo (isset($_smarty_tpl->getVariable('shop')->value['shop_name']) ? $_smarty_tpl->getVariable('shop')->value['shop_name'] : null);?>
"  readonly="readonly">

										<input type="hidden" name="shop_id" id="shop_id" class="form-control input-sm" value="<?php echo (isset($_smarty_tpl->getVariable('shop')->value['shop_id']) ? $_smarty_tpl->getVariable('shop')->value['shop_id'] : null);?>
" >
									</td>
									<th style="background-color:#F5F5F6">
										<span style="color:#000">接待业务员</span>
									</th>
									<td width="35%">
										<input type="email" class="form-control input-sm" value="<?php echo (isset($_smarty_tpl->getVariable('emp')->value['emp_name']) ? $_smarty_tpl->getVariable('emp')->value['emp_name'] : null);?>
"   readonly="readonly">

										<input type="hidden" class="form-control input-sm" value="<?php echo (isset($_smarty_tpl->getVariable('emp')->value['emp_id']) ? $_smarty_tpl->getVariable('emp')->value['emp_id'] : null);?>
"  id="paicheServerMan" name="paicheServerMan">
									</td>
								</tr>
								</table>

								

								<button type="button" class="btn btn-outline btn-default">
								<img src="../../../images/a2.png" style="width: 20px">
										承租人信息
								</button>
								<button type="button" class="btn btn-outline btn-default" id="shuaka1" onclick="beginread_onclick()">
								<img src="../../../images/a10.png" style="width: 20px">
										点击获取
								</button>
								<table class="table table-bordered">
								<tr id="czr" style="display: <?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_linkerPicture']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_linkerPicture'] : null)==''){?>none<?php }?>">
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">承租人照片</span>
									</th>
									<td width="35%" style="text-align: center;">
										<img id="img_linker_picture" src="../../../thumb/upload/idpicture/<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_linkerPicture']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_linkerPicture'] : null);?>
" style="width: 25%">
										<input type="hidden" name="paiche_linkerPicture" id="paiche_linkerPicture" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_linkerPicture']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_linkerPicture'] : null);?>
">
									</td>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">类型</span>
									</th>
									<td width="35%">
										<div style="width: 100%;height: 100%" placeholder="" name="paiche_leixing" id="paiche_leixing"><?php echo (isset($_smarty_tpl->getVariable('paiche')->value['kuhu_type']) ? $_smarty_tpl->getVariable('paiche')->value['kuhu_type'] : null);?>
<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['kuhu_mew']) ? $_smarty_tpl->getVariable('paiche')->value['kuhu_mew'] : null);?>

										<?php if (count($_smarty_tpl->getVariable('num_list')->value)>0){?>
											<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('num_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
											<hr/>
											<a href="'detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['rows']->value['paiche_id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['rows']->value['paiche_contractNum'] : null);?>
</a>
											<?php }} ?>
										<?php }?>
										</div>
									</td>
								</tr>
								<tr>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">承租人姓名</span>
									</th>
									<td width="35%">
										<input type="text" class="form-control input-sm  yuyue" placeholder="" name="paiche_linker" id="paiche_linker"
										 value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_linker']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_linker'] : null);?>
">
									</td>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">承租人电话号码</span>
									</th>
									<td width="35%">
										<input type="text" class="form-control input-sm" placeholder="" name="paiche_linkerPhone" id="paiche_linkerPhone" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_linkerPhone']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_linkerPhone'] : null);?>
">
									</td>
								</tr>


								<tr class="f_changqi">
									<th style="background-color:#F5F5F6">
										<span style="color:#000">承租人身份证号码</span>
									</th>
									<td>
										<input type="text" class="form-control input-sm  yuyue" placeholder="" name="paiche_linkerNum" id="paiche_linkerNum" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_linkerNum']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_linkerNum'] : null);?>
">
									</td>
									<th style="background-color:#F5F5F6">
										<span style="color:#000">承租人地址</span>
									</th>

									<td>
										<input type="text" class="form-control input-sm  yuyue" placeholder="" name="paiche_linkerAdd" id="paiche_linkerAdd" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_linkerAdd']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_linkerAdd'] : null);?>
">
									</td>
								</tr>
								</table>



								<div id="dbr_q">
									<button type="button" class="btn btn-outline btn-default" style="float: left;">
									<img src="../../../images/a3.png" style="width: 20px">
										担保人信息
									</button>
									<button type="button" id="dbrxs">
									<img src="../../../images/a8.png" style="width: 20px" id="dbr_img">
									</button>
									<button type="button" class="btn btn-outline btn-default" id="shuaka2" onclick="beginread_onclick2()" style="float: left;">
									<img src="../../../images/a10.png" style="width: 20px">
										点击获取
									</button>
									<div style="width: 100%;margin-bottom: 40px" id="dbr_a">
									</div>
									<div  id="dbr" style="display: <?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_promierPicture']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_promierPicture'] : null)!=''){?>block<?php }else{ ?>none<?php }?>">
										<table class="table table-bordered">
										<tr id="czr_a" >
											<th style="background-color:#F5F5F6" width="15%">
												<span style="color:#000">担保人照片</span>
											</th>
											<td width="35%" style="text-align: center;">
												<img id="img_promier_picture" src="../../../thumb/upload/idpicture/<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_promierPicture']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_promierPicture'] : null);?>
" style="width: 25%">
												<input type="hidden" name="paiche_promierPicture" id="paiche_promierPicture">
											</td>
											<th style="background-color:#F5F5F6" width="15%">
											</th>
											<td width="35%">
											</td>
										</tr>
										<tr>
											<th style="background-color:#F5F5F6" width="15%">
												<span style="color:#000">担保人姓名</span>
											</th>
											<td width="35%">
												<input type="text" class="form-control input-sm" placeholder="" name="paiche_promier" id="paiche_promier"   value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_promier']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_promier'] : null);?>
"  readonly="readonly">
											</td>
											<th style="background-color:#F5F5F6" width="15%">
												<span style="color:#000">担保人电话号码</span>
											</th>
											<td width="35%">
												<input type="text" class="form-control input-sm" placeholder="" id="paiche_promierPhone" name="paiche_promierPhone" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_promierPhone']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_promierPhone'] : null);?>
">
											</td>
										</tr>
										<tr>
											<th style="background-color:#F5F5F6" width="15%">
												<span style="color:#000">担保人身份证号码</span>
											</th>
											<td width="35%">
												<input type="text" class="form-control input-sm" placeholder="" id="paiche_promierNum" name="paiche_promierNum"  value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_promierNum']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_promierNum'] : null);?>
"  readonly="readonly">
											</td>
											<th style="background-color:#F5F5F6" width="15%">
												<span style="color:#000">担保人地址</span>
											</th>
											<td width="35%">
												<input type="text" class="form-control input-sm" placeholder="" id="paiche_promierAdd" name="paiche_promierAdd"  value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_promierAdd']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_promierAdd'] : null);?>
"  readonly="readonly">
											</td>
										</tr>
										</table>
									</div>
								</div>
								<div class="shiji">
									<button type="button" class="btn btn-outline btn-default">
									<img src="../../../images/a5.png" style="width: 20px">
										车辆信息
									</button>
									<dl class="lineD" id="showCar">
	         					关键字：
										<input type="text" name="paicheCarKey" id="paicheCarKey" size="10" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_num']) ? $_smarty_tpl->getVariable('paiche')->value['car_num'] : null);?>
" />
										<input type="hidden" name="paicheCar" id="paicheCar" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paicheCar2']) ? $_smarty_tpl->getVariable('paiche')->value['paicheCar2'] : null);?>
" size="10"/>

										<input type="hidden" name="paicheCars" id="paicheCars"  value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paicheCar2s']) ? $_smarty_tpl->getVariable('paiche')->value['paicheCar2s'] : null);?>
" size="10"/>

										<a href="javascript:get_car();"><img src="../../../css/car2.gif" height="15" class="peoplePic"/></a>
									</dl>
									<table class="table table-bordered" class="shiji">
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">车牌号码</span>
										</th>
										<td width="35%">
											<input type="text" id="car_num" class="form-control input-sm" placeholder="" readonly="readonly" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_num']) ? $_smarty_tpl->getVariable('paiche')->value['car_num'] : null);?>
">
										</td>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">车辆颜色</span>
										</th>
										<td width="35%">
											<input type="text" id="car_color" class="form-control input-sm" placeholder="" readonly="readonly" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_color']) ? $_smarty_tpl->getVariable('paiche')->value['car_color'] : null);?>
">
										</td>
									</tr>
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">车辆型号</span>
										</th>
										<td width="35%">
											<input type="text" id="car_brand" class="form-control input-sm" placeholder="" readonly="readonly" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_brand']) ? $_smarty_tpl->getVariable('paiche')->value['car_brand'] : null);?>
">
										</td>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">车辆类型</span>
										</th>
										<td width="35%">
											<input type="text" id="car_type" class="form-control input-sm" placeholder="" readonly="readonly" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_type']) ? $_smarty_tpl->getVariable('paiche')->value['car_type'] : null);?>
">
										</td>
									</tr>
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">发动机号</span>
										</th>
										<td width="35%">
											<input type="text" id="car_motor" class="form-control input-sm" placeholder="" readonly="readonly" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_motor']) ? $_smarty_tpl->getVariable('paiche')->value['car_motor'] : null);?>
">
										</td>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">车架号</span>
										</th>
										<td width="35%">
											<input type="text" id="car_frame" class="form-control input-sm" placeholder="" readonly="readonly" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_frame']) ? $_smarty_tpl->getVariable('paiche')->value['car_frame'] : null);?>
">
										</td>
									</tr>
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">车辆日租金</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="" id="plan_rentamount" readonly="readonly" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['plan_rentamount']) ? $_smarty_tpl->getVariable('paiche')->value['plan_rentamount'] : null);?>
">
										</td>
									</tr>
									</table>
								</div>

								<button type="button" class="btn btn-outline btn-default">
								<img src="../../../images/a6.png" style="width: 20px">
										用车数据
								</button>
								<table class="table table-bordered">
								<tr>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">超时费用</span>
									</th>
									<td width="25%">
										<input type="text" id="paiche_overTime_a" name="paiche_overTime_a" class="form-control input-sm" readonly="readonly" placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_overTime']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_overTime'] : null);?>
/小时">

										<input type="hidden" id="paiche_overTime" name="paiche_overTime" class="form-control input-sm" placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_overTime']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_overTime'] : null);?>
">
									</td>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">是否开票</span>
									</th>
									<td width="35%">
										<label><input name="paiche_needtax" type="radio" value="1"/ 
											<?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_needtax']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_needtax'] : null)==1){?>checked<?php }?>>开票 </label>
										<label><input name="paiche_needtax" type="radio" value="0"  
											<?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_needtax']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_needtax'] : null)!=1){?>checked<?php }?>/>不开票 </label>
									</td>
								</tr>
								<tr>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">用车开始时间</span>
									</th>
									<td width="35%">
										<input name="paiche_startDate" id="paiche_startDate" placeholder="请输入日期" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_startDate']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_startDate'] : null);?>
" class="laydate-icon" onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})">
										<input type="hidden" id="d_time"  value="<?php echo $_smarty_tpl->getVariable('d_time')->value;?>
">
										<input type="hidden" id="time" value="<?php echo $_smarty_tpl->getVariable('time')->value;?>
">


									</td>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">用车时长</span>
									</th>
									<td width="35%">
										<span style="display: block;width: 14%;float: left;line-height: 34px;text-align: right;">天:</span>
										<input type="text" class="form-control input-sm" placeholder="" style="float: left;width: 20%" id="tian_a" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['tian_a']) ? $_smarty_tpl->getVariable('paiche')->value['tian_a'] : null);?>
">

										<input type="button" name="" value="+" style="display: block;float: left;width:7% " id="tjia" onclick="jisuan('t','j')">
										<input type="button" name="" value="-" style="display: block;float: left;width:7% " id="tjian" onclick="jisuan('t','g')">


										<span style="display: block;width: 14%;float: left;line-height: 34px;text-align: right;">小时：</span>


										<input type="text" class="form-control input-sm" placeholder="" style="float: left;width: 20%" id="shi" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['shi']) ? $_smarty_tpl->getVariable('paiche')->value['shi'] : null);?>
">

										<input type="button" name="" value="+" style="display: block;float: left;width:7% " id="sjia" onclick="jisuan('s','j')">
										<input type="button" name="" value="-" style="display: block;float: left;width:7% " id="sjian" onclick="jisuan('s','g')">
									</td>
								</tr>
								<tr>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">用车结束时间</span>
									</th>
									<td width="35%">
										<input name="paiche_endDate" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_endDate']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_endDate'] : null);?>
" id="paiche_endDate" placeholder="请输入日期" value="<?php echo $_smarty_tpl->getVariable('time')->value;?>
" class="laydate-icon"  readonly="readonly">
									</td>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">限制公里数</span>
									</th>
									<td width="25%">
										<input type="text" id="xianzhikm" class="form-control input-sm" placeholder="限制公里数" readonly="readonly" value="<?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_unlimitKm'] : null)=='Y'){?>不限制公里数<?php }else{ ?>每天限<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_limitKm']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_limitKm'] : null);?>
公里，超出每公里<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_overKm']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_overKm'] : null);?>
元<?php }?>">

										<input type="hidden" id="paiche_limitKm" name="paiche_limitKm" class="form-control input-sm" readonly="readonly" placeholder="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_limitKm']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_limitKm'] : null);?>
">

										<input type="hidden" id="paiche_overKm" name="paiche_overKm" class="form-control input-sm" readonly="readonly" placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_overKm']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_overKm'] : null);?>
">

										<input type="hidden" id="paiche_unlimitKm" name="paiche_unlimitKm" class="form-control input-sm" readonly="readonly" placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_unlimitKm'] : null);?>
">
									</td>
								</tr>
								<tr>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">租金</span>
									</th>
									<td width="35%">
										<input type="text" id="paiche_rent" name="paiche_rent" class="form-control input-sm " placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('paiche_chargesz')->value['conv_money']) ? $_smarty_tpl->getVariable('paiche_chargesz')->value['conv_money'] : null);?>
">
									</td>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">押金</span>
									</th>
									<td width="35%">
										<input type="text" id="paiche_deposit" name="paiche_deposit" class="form-control input-sm" placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('paiche_chargesy')->value['conv_money']) ? $_smarty_tpl->getVariable('paiche_chargesy')->value['conv_money'] : null);?>
">
									</td>
								</tr>
								<tr>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">开车线路</span>
									</th>
									<td width="35%">
										<input type="text" id="paiche_line" name="paiche_line" class="form-control input-sm" placeholder="" 
										value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_line']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_line'] : null);?>
">
									</td>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">备注说明</span>
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
<script src="js/jquery.min.js?v=2.1.4"></script>
<script src="js/bootstrap.min.js?v=3.3.6"></script>
<script src="js/content.min.js?v=1.0.0"></script>
<script src="js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
<script src="js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
<script src="js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
<script src="js/demo/bootstrap-table-demo.min.js"></script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>
<script type="text/javascript" src="../../../js/create.js"></script>
<script type="text/javascript" src="../../../js/zijia.js?a=<?php echo time();?>
"></script>
<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->
</html>