<?php /* Smarty version Smarty-3.0.4, created on 2020-03-19 13:57:33
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/zijia_linshi/zijia_create.html" */ ?>
<?php /*%%SmartyHeaderCode:247235e7309cdba1678-04942227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bd1bbfafc669fa6682e616d6a076eef62633fd6' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/zijia_linshi/zijia_create.html',
      1 => 1584597378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '247235e7309cdba1678-04942227',
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
<script type="text/javascript" src="../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../js/check_form.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js?a=5"></script>

<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN1.js?a=101"></script>
<script type="text/javascript" src="../../../js/jquery.editable-select.min.js"></script>
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
			<h5><?php if ($_smarty_tpl->getVariable('paidan_type_a')->value=="add"){?>添加<?php }elseif($_smarty_tpl->getVariable('paidan_type_a')->value=="diaoche"){?>调度<?php }else{ ?>修改<?php }?>临时自驾<?php if ($_smarty_tpl->getVariable('paidan_type_b')->value=="s"){?>实时<?php }elseif($_smarty_tpl->getVariable('paidan_type_b')->value=="y"){?>预约<?php }?>单</h5>
		</div>
		<form method="post" action="zijia_insert.php" name="form1" id="form1">
			<!--派车id,用于判断是修改还是调车-->
			<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('p_id')->value;?>
" id="p_id" name="p_id">
			<input type="hidden"  id="car_gongchang" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_gongchang']) ? $_smarty_tpl->getVariable('paiche')->value['car_gongchang'] : null);?>
">
			<input type="hidden" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_kehu']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_kehu'] : null);?>
" id="paiche_kehu_aaa" >

			<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('paidan_type_a')->value;?>
" id="paidan_type_a" name="paidan_type_a">
			<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('paidan_type_b')->value;?>
" id="paidan_type_b" name="paidan_type_b">
			<input type="hidden"  id="paiche_stype" name="paiche_stype" value="0">
			<div class="ibox-content"  id="tian">
				<div class="row row-lg">
					<div class="col-sm-12">
						<!-- Example Events -->
						<div class="example-wrap">
							<div class="example">
								<div class="btn-group hidden-xs pull-right" id="exampleTableEventsToolbar" role="group">
								</div>
								<?php if ($_smarty_tpl->getVariable('paidan_type_a')->value!='diaoche'&&$_smarty_tpl->getVariable('paidan_type_a')->value!='update'){?>
								<span  class="span1">
								<img src="../../../images/a2.png" style="width: 20px">
										客户来源
								</span>
								<table class="table table-bordered">
								<tr>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">客户来源</span>
									</th>
									<td width="35%" style="text-align: center;">
										<select class="form-control input-sm" id="paiche_kehu" name="paiche_kehu" >

											<option value="0">请选择
											</option>
											<option  value="1" <?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_kehu']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_kehu'] : null)==1){?>selected<?php }?>>临时散客
											</option>
											<option  value="2" <?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_kehu']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_kehu'] : null)==2){?>selected<?php }?>>平台客户
											<option  value="3" <?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_kehu']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_kehu'] : null)==3){?>selected<?php }?>>凹凸代步车
											</option>
											<option  value="5" <?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_kehu']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_kehu'] : null)==5){?>selected<?php }?>>境外客户
											</option>
											<?php if ($_smarty_tpl->getVariable('paidan_type_b')->value=="s"){?>
											<option  value="4" <?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_kehu']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_kehu'] : null)==4){?>selected<?php }?>>冻结违章
											</option>
											<?php }?>
										</select>
									</td>

									<div style="" id="ke_leixing">
										<th style="background-color:#F5F5F6;" width="15%">
											<span style="color:#000">客户类型</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" value=""   readonly="readonly" unselectable="on" id="pingtai_cc">

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


									<tr id="paiche_bb">
										<th style="background-color:#F5F5F6;" width="15%">
											<span style="color:#000">平台单号</span>
										</th>
										
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="平台订单的合同号（必填）" name="paiche_pintainum" id="paiche_pintainum" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_pintainum']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_pintainum'] : null);?>
" >
										</td>
										<th style="background-color:#F5F5F6;" width="15%"></th>
										<td width="35%"></td>
										
									</tr>
								
								</table>
								<?php }?>


								<input type="hidden" class="form-control input-sm" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_pintaiid']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_pintaiid'] : null);?>
"  id="pintai_a" >

								<span  class="span1" style="float: left;">
								<img src="../../../images/a1.png" style="width: 20px">
										门店信息
								</span>
								<table class="table table-bordered">
								<?php if ($_smarty_tpl->getVariable('paidan_type_a')->value!='diaoche'){?>
								<tr id="yewu_guishu">
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
											<option <?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paicheCounterShop']) ? $_smarty_tpl->getVariable('paiche')->value['paicheCounterShop'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null)){?>selected<?php }?> value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null);?>
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
								<?php }?>
								<tr >
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">服务门店</span>
									</th>
									<td width="35%">
										<?php if ($_smarty_tpl->getVariable('paidan_type_b')->value=='y'&&$_smarty_tpl->getVariable('paidan_type_a')->value!="diaoche"){?>
											<select class="form-control input-sm" id="shop_ida" name="shop_ida">
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
										<?php }else{ ?>
											<input type="text" name="shop_name" id="shop_name" class="form-control input-sm" value="<?php echo (isset($_smarty_tpl->getVariable('shop')->value['shop_name']) ? $_smarty_tpl->getVariable('shop')->value['shop_name'] : null);?>
"  readonly="readonly" unselectable="on">

											
										<?php }?>
										<input type="hidden" name="shop_id" id="shop_id" class="form-control input-sm" value="<?php if ($_smarty_tpl->getVariable('paidan_type_b')->value=='y'&&$_smarty_tpl->getVariable('paidan_type_a')->value!="diaoche"){?><?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_shopid']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_shopid'] : null);?>
<?php }else{ ?><?php echo (isset($_smarty_tpl->getVariable('shop')->value['shop_id']) ? $_smarty_tpl->getVariable('shop')->value['shop_id'] : null);?>
<?php }?>" >

										
									</td>
									<th style="background-color:#F5F5F6">
										<?php if ($_smarty_tpl->getVariable('paidan_type_b')->value=="y"&&$_smarty_tpl->getVariable('paidan_type_a')->value!="diaoche"){?>
											
										<?php }else{ ?>
										<span style="color:#000">接待业务员</span>
										<?php }?>
									</th>
									<td width="35%">
										<?php if ($_smarty_tpl->getVariable('paidan_type_b')->value=="y"&&$_smarty_tpl->getVariable('paidan_type_a')->value!="diaoche"){?>
											
										<?php }else{ ?>
											<input type="text" class="form-control input-sm" value="<?php echo (isset($_smarty_tpl->getVariable('emp')->value['emp_name']) ? $_smarty_tpl->getVariable('emp')->value['emp_name'] : null);?>
"   readonly="readonly" unselectable="on">
											<input type="hidden" class="form-control input-sm" value="<?php echo (isset($_smarty_tpl->getVariable('emp')->value['emp_id']) ? $_smarty_tpl->getVariable('emp')->value['emp_id'] : null);?>
"  id="paicheServerMan" name="paicheServerMan">
										<?php }?>
									</td>
								</tr>
								</table>

								

								<span  class="span1" style="float: left;">
								<img src="../../../images/a2.png" style="width: 20px">
										承租人信息
								</span>
					<div id="yanzheng">
						<button type="button" class="btn btn-outline btn-default" id="shuaka1" onclick="beginread_onclick()" style="float: left;">
								<img src="../../../images/a10.png" style="width: 20px">
										刷身份证验证
						</button>

								
							
						
						<button type="button" class="btn btn-outline btn-default" id="" onclick="lkehu_xianshi()" style="float: left;margin-left: 10px;display: none;" >
								<img src="../../../images/a10.png" style="width: 20px">
										老客户短信验证
						</button>


						<button type="button" class="btn btn-outline btn-default" id="" onclick="xkehu_xianshi()" style="float: left;margin-left: 10px;">
								<img src="../../../images/a10.png" style="width: 20px">
										新客户人脸识别验证
						</button>
						
					</div>

						<div style="clear: both;">


										<div style="display: none" id="lkehu">
										<table class="table table-bordered">

										<tr>
											<th style="background-color:#F5F5F6" width="15%">
												<span style="color:#000" >承租人姓名</span>
											</th>
											<td width="35%" style="text-align: center;">
												<input type="text" class="form-control input-sm" placeholder="承租人姓名" name="name_a" id="name_a">
											</td>
											<th style="background-color:#F5F5F6" width="15%">
												<span style="color:#000" >身份证号码</span>
											</th>
											<td width="15%">
												<input type="text" class="form-control input-sm" placeholder="身份证号码" name="shenfen_a" id="shenfen_a" minlength="18" maxlength="18">
											</td>
											<th style="background-color:#F5F5F6" width="20%">
												<button type="button" class="btn btn-outline btn-default" id="yz_aaa" onclick="shenfen()" style="float: left;margin-left: 10px;">
												<img src="../../../images/a10.png" style="width: 20px">
														验证
												</button>
											</th>
										</tr>
										<tr>
											<th style="background-color:#F5F5F6" width="15%">
												<span style="color:#000">验证码：</span>
											</th>
											<td width="35%" style="text-align: center;">
												<input type="text" class="form-control input-sm" placeholder="验证码" name="yzm" id="yzm">
											</td>
											<th style="background-color:#F5F5F6" width="15%">
												
											</th>
											<td width="20%">
												
											</td>
											<th style="background-color:#F5F5F6" width="15%">
												<button type="button" class="btn btn-outline btn-default" id="" onclick="yzm_yanzheng()" style="float: left;margin-left: 10px;">
												<img src="../../../images/a10.png" style="width: 20px">
														确定
												</button>
											</th>
										</tr>
										
										</table>
										</div>








										<div style="display: none" id="xin_kehu">
										<table class="table table-bordered">

										<tr>
											<th style="background-color:#F5F5F6" width="15%">
												<span style="color:#000">承租人姓名</span>
											</th>
											<td width="35%" style="text-align: center;">
												<input type="text" class="form-control input-sm" placeholder="承租人身份证姓名" name="realname" id="realname">
											</td>

											<th style="background-color:#F5F5F6" width="15%">
												<span style="color:#000">身份证号码</span>
											</th>
											<td width="35%">
												<input type="text" class="form-control input-sm" placeholder="承租人身份证号码" name="idcard_a" id="idcard_a" minlength="18" maxlength="18">
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
								<table class="table table-bordered">
								<tr id="czr" style="display: <?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_linkerPicture']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_linkerPicture'] : null)==''||$_smarty_tpl->getVariable('paidan_type_a')->value!='update'){?>none<?php }?>">
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
										<div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5 id="biaoti"><?php echo (isset($_smarty_tpl->getVariable('paiche')->value['kuhu_type']) ? $_smarty_tpl->getVariable('paiche')->value['kuhu_type'] : null);?>
<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['kuhu_mew']) ? $_smarty_tpl->getVariable('paiche')->value['kuhu_mew'] : null);?>
</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-down" id="up"></i>
                                
                            </a>
                        </div>
                    </div>
                    
                    <div class="ibox-content" style="display: none;" id="content">

                        <table class="table" id="table_a">
                        	<?php if (count($_smarty_tpl->getVariable('num_list')->value)>0){?>
                            <tbody>
                            	<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('num_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                <tr>
                                    <td><a href="'detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['rows']->value['paiche_id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['rows']->value['paiche_contractNum'] : null);?>
</a>
									</td>
                                   
                                </tr>
                                <?php }} ?>
                            </tbody>
                             <?php }?>
                        </table>

                    </div>
                   
                </div>
            </div>

									</td>
								</tr>

								<tr style="display:none"> 
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">公民选择</span>
									</th>
									<td width="35%">
										<label style="margin:0px;margin-right: 10px;margin-top: 5px">
											<input name="gongming" type="radio"  checked value="1" 
											style="display: block;float: left;margin: 3px;padding: 0"/>
											<span style="display: block;float: left;">中国公民</span> 
										</label>
										<label style="margin:0px;margin-right: 10px;margin-top: 5px">
											<input name="gongming" type="radio" value="0"  
											style="display: block;float: left;margin: 3px;padding: 0"/>
												<span style="display: block;float: left;">境外公民</span>
										</label>
											
									</td>

									<th style="background-color:#F5F5F6" width="15%">
										
									</th>
									<td width="35%">
										
									</td>

								</tr>
								<tr>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000" >承租人姓名</span>
									</th>
									<td width="35%">
										<input type="text" class="form-control input-sm  yuyue" placeholder="承租人身份证姓名（必填）" name="paiche_linker" id="paiche_linker" <?php if ($_smarty_tpl->getVariable('paidan_type_a')->value=='update'||(isset($_smarty_tpl->getVariable('paiche')->value['paiche_kehu']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_kehu'] : null)>1){?>
										 value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_linker']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_linker'] : null);?>
" <?php }?>  >

										 
										
									</td>
									<th style="background-color:#F5F5F6" width="15%" class="cz_aaab">
										<span style="color:#000">承租人电话号码</span>
									</th>
									<td width="35%" class="cz_aaab">
										<input type="text" class="form-control input-sm" placeholder="承租人的手机号码（必填）" name="paiche_linkerPhone" id="paiche_linkerPhone" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_linkerPhone']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_linkerPhone'] : null);?>
" >
									</td>

									<th style="background-color:#F5F5F6" width="15%" class="cz_aaa">
										<span style="color:#000"></span>
									</th>
									<td width="35%" class="cz_aaa">
									
									</td>
								</tr>


								<tr class="f_changqi" id="chengzu_aaa" style="display: none">
									<th style="background-color:#F5F5F6">
										<span style="color:#000" id="c_xm">承租人身份证号码</span>
									</th>
									<td>
										<input type="text" class="form-control input-sm  yuyue" placeholder="承租人身份证号码（必填）"  name="paiche_linkerNum" id="paiche_linkerNum" <?php if ($_smarty_tpl->getVariable('paidan_type_a')->value=='update'||(isset($_smarty_tpl->getVariable('paiche')->value['paiche_kehu']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_kehu'] : null)>1){?> value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_linkerNum']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_linkerNum'] : null);?>
" <?php }?>>
									</td>
									<th style="background-color:#F5F5F6">
										<span style="color:#000">承租人地址</span>
									</th>

									<td>
										<input type="text" class="form-control input-sm  yuyue" placeholder="承租人身份证地址（必填）" name="paiche_linkerAdd" id="paiche_linkerAdd" <?php if ($_smarty_tpl->getVariable('paidan_type_a')->value=='update'||(isset($_smarty_tpl->getVariable('paiche')->value['paiche_kehu']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_kehu'] : null)>1){?> value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_linkerAdd']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_linkerAdd'] : null);?>
" <?php }?>>
									</td>
								</tr>
								</table>



								<div id="dbr_q">
									<span  class="span1" style="float: left;">
									<img src="../../../images/a3.png" style="width: 20px">
										担保人信息
									</span>
									<button type="button" id="dbrxs" style="margin-left: 15px;margin-top: 5px">
									<img src="../../../images/a9.png" style="width: 20px" id="dbr_img">
									</button>

									<button type="button" class="btn btn-outline btn-default" id="shuaka2" onclick="beginread_onclick2()" style="float: left;display: none">

									<img src="../../../images/a10.png" style="width: 20px">
										刷身份证验证
									</button>
									
									<div style="width: 100%;margin-bottom: 40px;" id="dbr_a">
									</div>


									<div  id="dbr" style="display: none;">
										<table class="table table-bordered">

										<tr id="czr_a" style="display: <?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_promierPicture']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_promierPicture'] : null)==''){?>none<?php }?>">
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
												<input type="text" class="form-control input-sm" placeholder="担保人身份证姓名" name="paiche_promier" id="paiche_promier"   value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_promier']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_promier'] : null);?>
"  readonly="readonly" unselectable="on">
											</td>
											<th style="background-color:#F5F5F6" width="15%">
												<span style="color:#000">担保人电话号码</span>
											</th>
											<td width="35%">
												<input type="text" class="form-control input-sm" placeholder="担保人的手机号码" id="paiche_promierPhone" name="paiche_promierPhone" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_promierPhone']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_promierPhone'] : null);?>
">
											</td>
										</tr>
										<tr>
											<th style="background-color:#F5F5F6" width="15%">
												<span style="color:#000">担保人身份证号码</span>
											</th>
											<td width="35%">
												<input type="text" class="form-control input-sm" placeholder="担保人身份证号码" id="paiche_promierNum" name="paiche_promierNum"  value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_promierNum']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_promierNum'] : null);?>
"  readonly="readonly" unselectable="on">
											</td>
											<th style="background-color:#F5F5F6" width="15%">
												<span style="color:#000">担保人地址</span>
											</th>
											<td width="35%">
												<input type="text" class="form-control input-sm" placeholder="担保人身份证地址" id="paiche_promierAdd" name="paiche_promierAdd"  value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_promierAdd']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_promierAdd'] : null);?>
"  readonly="readonly" unselectable="on">
											</td>
										</tr>
										</table>
									</div>
								</div>









								<div >
									<span  class="span1" style="float: left; ">
									<img src="../../../images/a5.png" style="width: 20px;">
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

										<a href="javascript:get_car();" style="margin-left:10px"><img src="../../../css/car2.gif"  style="    width: 35px;
    height: 22px;
    /* border: 1px red solid; */
    border-width: 2px;
    border-style: inset;
    border-color: initial;
    border-image: initial;"  class="peoplePic"/></a>
									</dl>



									<table class="table table-bordered" id="che">
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">车牌号码</span>
										</th>
										<td width="35%">
											<input type="text" id="car_num" class="form-control input-sm" placeholder="" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_num']) ? $_smarty_tpl->getVariable('paiche')->value['car_num'] : null);?>
">
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
											<span style="color:#000">车辆型号</span>
										</th>
										<td width="35%">
											<input type="text" id="car_brand" class="form-control input-sm" placeholder="" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_brand']) ? $_smarty_tpl->getVariable('paiche')->value['car_brand'] : null);?>
">
										</td>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">车辆种类</span>
										</th>
										<td width="35%">
											<input type="text" id="car_types_a" class="form-control input-sm" placeholder="" readonly="readonly"unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_types_a']) ? $_smarty_tpl->getVariable('paiche')->value['car_types_a'] : null);?>
">

											<input type="hidden" id="car_types" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_types']) ? $_smarty_tpl->getVariable('paiche')->value['car_types'] : null);?>
">
										</td>
									</tr>
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">发动机号</span>
										</th>
										<td width="35%">
											<input type="text" id="car_motor" class="form-control input-sm" placeholder="" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_motor']) ? $_smarty_tpl->getVariable('paiche')->value['car_motor'] : null);?>
">
										</td>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">车架号</span>
										</th>
										<td width="35%">
											<input type="text" id="car_frame" class="form-control input-sm" placeholder="" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_frame']) ? $_smarty_tpl->getVariable('paiche')->value['car_frame'] : null);?>
">
										</td>
									</tr>
									<tr id="plan_rentamount_a">
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">车辆日租金</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="" id="plan_rentamount" readonly="readonly" unselectable="on"value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['plan_rentamount']) ? $_smarty_tpl->getVariable('paiche')->value['plan_rentamount'] : null);?>
">
										</td>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">超时费用</span>
										</th>
										<td width="25%">
											<input type="text" id="paiche_overTime" name="paiche_overTime" class="form-control input-sm" readonly="readonly" unselectable="on"placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['plan_chaoshi']) ? $_smarty_tpl->getVariable('paiche')->value['plan_chaoshi'] : null);?>
">
											
										</td>

									</tr>
									


									<tr style="<?php if ((isset($_smarty_tpl->getVariable('paiche')->value['plan_chaokm']) ? $_smarty_tpl->getVariable('paiche')->value['plan_chaokm'] : null)!='y'){?>display:none<?php }else{ ?>display:table-row<?php }?>" id='plan_chaokm'>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">超每公里费用</span>
										</th>
										<td width="25%">
											<input type="text" id="plan_chaokmy" class="form-control input-sm"  readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['plan_chaokmy']) ? $_smarty_tpl->getVariable('paiche')->value['plan_chaokmy'] : null);?>
">
										</td>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">每天限制公里数</span>
										</th>
										<td width="25%">
											<input type="text" id="plan_chaokms" class="form-control input-sm" placeholder="" readonly="readonly"unselectable="on"value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['plan_chaokms']) ? $_smarty_tpl->getVariable('paiche')->value['plan_chaokms'] : null);?>
">
										</td>
									</tr>
									
									</table>
								</div>








								<span  class="span1" style="float: left;">
								<img src="../../../images/a6.png" style="width: 20px">
										用车数据
								</span>
								<table class="table table-bordered">
								
								<tr>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">用车开始时间</span>
									</th>
									<td width="35%">
										<input name="paiche_startDate" id="paiche_startDate" placeholder="请输入日期" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_startDate']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_startDate'] : null);?>
" class="laydate-icon"  unselectable="on" readonly>
										
										<input type="hidden" id="d_time"  value="<?php echo $_smarty_tpl->getVariable('d_time')->value;?>
">
										<input type="hidden" id="time" value="<?php echo $_smarty_tpl->getVariable('time')->value;?>
">
									</td>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">用车时长</span>
									</th>
									<td width="35%">
										
										<span style="display: block;width: 10%;float: left;line-height: 32px;text-align: right;">天:</span>
										<input type="text" class="form-control input-sm" placeholder="" style="float: left;width: 10%" id="tian_a" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['tian_a']) ? $_smarty_tpl->getVariable('paiche')->value['tian_a'] : null);?>
" onchange="jisuan_a()">
										<input type="button" name="" value="+" style="display: block;float: left;width:5%;    padding: 0;
    height: 30px; " id="tjia" onclick="jisuan('t','j')" >
										<input type="button" name="" value="-" style="display: block;float: left;width:5% ;    padding: 0;
    height: 30px;" id="tjian" onclick="jisuan('t','g')">


										<span style="display: block;width: 10%;float: left;line-height: 32px;text-align: right;">时：</span>
										<input type="text" class="form-control input-sm" placeholder="" style="float: left;width: 10%" id="shi" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['shi']) ? $_smarty_tpl->getVariable('paiche')->value['shi'] : null);?>
" onchange="jisuan_a()">
										<input type="button" name="" value="+" style="display: block;float: left;width:5%;    padding: 0;
    height: 30px; " id="sjia" onclick="jisuan('s','j')">
										<input type="button" name="" value="-" style="display: block;float: left;width:5%;    padding: 0;
    height: 30px; " id="sjian" onclick="jisuan('s','g')">



										<span style="display: block;width: 10%;float: left;line-height: 32px;text-align: right;">分：</span>

										<input type="text" class="form-control input-sm" placeholder="" style="float: left;width: 10%" id="fen" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['fen']) ? $_smarty_tpl->getVariable('paiche')->value['fen'] : null);?>
" onchange="jisuan_a()">

										<input type="button" name="" value="+" style="display: block;float: left;width:5%;    padding: 0;
    height: 30px; " id="fen_a" onclick="jisuan('f','j')">
										<input type="button" name="" value="-" style="display: block;float: left;width:5%;    padding: 0;
    height: 30px; " id="fen_b" onclick="jisuan('f','g')">
									</td>
								</tr>

								<tr style="height: 51px">
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">用车结束时间</span>
									</th>
									<td width="35%">
										<input name="paiche_endDate" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_endDate']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_endDate'] : null);?>
" id="paiche_endDate" placeholder="请输入日期" value="<?php echo $_smarty_tpl->getVariable('time')->value;?>
" class="laydate-icon"   unselectable="on" readonly>
									</td>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000"></span>
									</th>
									<td width="35%">
										
									</td>
								</tr>
							</table>
								<span  class="span1" style="float: left;">
								<img src="../../../images/a6.png" style="width: 20px">
										费用明细
								</span>
								<table class="table table-bordered">
									

								<tr>
									<th style="background-color:#F5F5F6" width="15%" class="zhujin_bbb">
										<span style="color:#000">租金</span>
									</th>
									<td width="35%" class="zhujin_bbb">
										<input type="number" min="0" id="paiche_rent" name="paiche_rent" class="form-control input-sm " placeholder="本次租车的总租金" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_rent']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_rent'] : null);?>
" onchange="jisuan_b()">
									</td>

									<th style="background-color:#F5F5F6" width="15%" class="zhujin_ccc">
										<span style="color:#000">押金</span>
									</th>
									<td width="35%" class="zhujin_ccc">
										<input type="number" min="0"  id="paiche_deposit" name="paiche_deposit" class="form-control input-sm" placeholder="本次租车应收的押金"  value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_deposit']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_deposit'] : null);?>
" onchange="jisuan_zujin()">
									</td>
									<th style="background-color:#F5F5F6" width="15%" class="zhujin_aaa">
										<span style="color:#000"></span>
									</th>
									<td width="35%" class="zhujin_aaa">
										
									</td>
								</tr>

								<tr class="qitafeiyong_aaa" id="shuaka_aaa">
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">刷卡费</span>
									</th>
									<td width="35%">
										<input type="number" min="0" id="shuaka" name="shuaka" class="form-control input-sm " placeholder="客户刷卡收取千分之八的刷卡费用" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['shuaka']) ? $_smarty_tpl->getVariable('paiche')->value['shuaka'] : null);?>
" onchange="jisuan_zujin()">
									</td>

									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">其他费用</span>
									</th>
									<td width="35%">
										<input type="number" min="0" id="qita" name="qita" class="form-control input-sm" placeholder="特殊情况使用的"  value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['qita']) ? $_smarty_tpl->getVariable('paiche')->value['qita'] : null);?>
" onchange="jisuan_zujin()">
									</td>
								</tr>

								<tr class="qitafeiyong_aaa">
									
									<th style="background-color:#F5F5F6" width="15%" class="songche_aaa">
										<span style="color:#000">公司送车</span>
									</th>
									<td width="35%" class="songche_aaa">
										<select class="form-control input-sm" id="songche_a"  name="songche_a"  <?php if ((isset($_smarty_tpl->getVariable('paiche')->value['jieri']) ? $_smarty_tpl->getVariable('paiche')->value['jieri'] : null)>0){?>disabled<?php }?>>
											<option  value="0">
								  				请选择
											</option>
											<option  value="1" <?php if ((isset($_smarty_tpl->getVariable('paiche')->value['songche']) ? $_smarty_tpl->getVariable('paiche')->value['songche'] : null)===0){?>selected<?php }?>>
								  				不送车
											</option>
											<option  value="2" <?php if ((isset($_smarty_tpl->getVariable('paiche')->value['songche']) ? $_smarty_tpl->getVariable('paiche')->value['songche'] : null)==60){?>selected<?php }?>>
								  				单程
											</option>
											<option  value="3" <?php if ((isset($_smarty_tpl->getVariable('paiche')->value['songche']) ? $_smarty_tpl->getVariable('paiche')->value['songche'] : null)==120){?>selected<?php }?>>
								  				双程
											</option>
										</select>
									</td>
									
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">送车费</span>
									</th>
									<td width="35%">
										<input type="number" min="0" id="songche" name="songche" class="form-control input-sm" placeholder="公司为客户送车收取的服务费"  value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['songche']) ? $_smarty_tpl->getVariable('paiche')->value['songche'] : null);?>
" onchange="jisuan_zujin()">
									</td>

								
									<th style="background-color:#F5F5F6" width="15%" class="jieri_aaa">
										<span style="color:#000">节日服务费</span>
									</th>
									<td width="35%" class="jieri_aaa">
										<input type="text" id="jieri" name="jieri" class="form-control input-sm " placeholder="节假日收取的额外服务费"  readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['jieri']) ? $_smarty_tpl->getVariable('paiche')->value['jieri'] : null);?>
">
									</td>
								
								</tr>

								<tr id="suijin_aaa">
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">是否开票</span>
									</th>
									<td width="35%">
										<select class="form-control input-sm" id="paiche_needtax" name="paiche_needtax" >

											
											<option  value="0" <?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_needtax']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_needtax'] : null)==0){?>selected<?php }?>>不开票
											</option>
											<option  value="1" <?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_needtax']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_needtax'] : null)==1){?>selected<?php }?>>开票
										</select>
										
									</td>
								
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">税金</span>
									</th>
									<td width="35%">
										<input type="text" id="suijin" name="suijin" class="form-control input-sm " placeholder="客户要求开票收取总费用的百分之十" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['suijin']) ? $_smarty_tpl->getVariable('paiche')->value['suijin'] : null);?>
" readonly="readonly" unselectable="on">
									</td>
									
								</tr>

								<tr style="display: none" id="huodong">
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">活动选择：</span>
									</th>
									<td width="35%">
										<select class="form-control input-sm" id="huodong_id"  name="huodong_id"  <?php if ((isset($_smarty_tpl->getVariable('paiche')->value['jieri']) ? $_smarty_tpl->getVariable('paiche')->value['jieri'] : null)>0){?>disabled<?php }?>>
											
											<option selected  value="99999">
								  				请选择
											</option>
											
											<option  value="0" <?php if ((isset($_smarty_tpl->getVariable('paiche')->value['jieri']) ? $_smarty_tpl->getVariable('paiche')->value['jieri'] : null)>0){?>selected<?php }?>>
								  				不参与
											</option>
											
											<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('huodong_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
												<option  value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
">
								  					<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['name']) ? $_smarty_tpl->tpl_vars['rows']->value['name'] : null);?>

												</option>
								 			<?php }} ?>
								 			
										</select>
									</td>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">活动优惠：</span>
									</th>
									<td width="35%">
										<input type="text" id="huodong_youhui" name="huodong_youhui"  class="form-control input-sm" placeholder="客户参加公司租车活动优惠的金额"  value="" readonly="readonly" unselectable="on">
									</td>
								</tr>

								<tr id="feiyong_aaa">
									<?php if (($_smarty_tpl->getVariable('paidan_type_a')->value=="update"||$_smarty_tpl->getVariable('paidan_type_a')->value=="diaoche")&&(isset($_smarty_tpl->getVariable('paiche')->value['yishou']) ? $_smarty_tpl->getVariable('paiche')->value['yishou'] : null)>0){?>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">已收费用</span>
									</th>
									<td width="35%">
										<input type="text" id="yishou"  class="form-control input-sm" placeholder="已经收取客户的费用"  value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['yishou']) ? $_smarty_tpl->getVariable('paiche')->value['yishou'] : null);?>
" readonly="readonly" unselectable="on">
									</td>
									<?php }?>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">本次应收</span>
									</th>
									<td width="35%">
										<input type="text" readonly="readonly" unselectable="on" id="yinshou" class="form-control input-sm " placeholder="本次应当收取客户的费用" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_rent']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_rent'] : null)+(isset($_smarty_tpl->getVariable('paiche')->value['paiche_deposit']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_deposit'] : null)+(isset($_smarty_tpl->getVariable('paiche')->value['dingjin']) ? $_smarty_tpl->getVariable('paiche')->value['dingjin'] : null)+(isset($_smarty_tpl->getVariable('paiche')->value['qita']) ? $_smarty_tpl->getVariable('paiche')->value['qita'] : null)+(isset($_smarty_tpl->getVariable('paiche')->value['shuaka']) ? $_smarty_tpl->getVariable('paiche')->value['shuaka'] : null)+(isset($_smarty_tpl->getVariable('paiche')->value['songche']) ? $_smarty_tpl->getVariable('paiche')->value['songche'] : null)+(isset($_smarty_tpl->getVariable('paiche')->value['suijin']) ? $_smarty_tpl->getVariable('paiche')->value['suijin'] : null)-(isset($_smarty_tpl->getVariable('paiche')->value['yishou']) ? $_smarty_tpl->getVariable('paiche')->value['yishou'] : null);?>
">
									</td>
									<?php if (($_smarty_tpl->getVariable('paidan_type_a')->value!="update"&&$_smarty_tpl->getVariable('paidan_type_a')->value!="diaoche")||(isset($_smarty_tpl->getVariable('paiche')->value['yishou']) ? $_smarty_tpl->getVariable('paiche')->value['yishou'] : null)<=0){?>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000"></span>
									</th>
									<td width="35%">
										
									</td>
									<?php }?>
									
								</tr>
								</table>
							<div id="beizhu_aaa">
								<span  class="span1" style="float: left;">
								<img src="../../../images/a6.png" style="width: 20px">
										备注信息
								</span>
								<table class="table table-bordered">
								<tr>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">开车线路</span>
									</th>
									<td width="35%">
										<input type="text" id="paiche_line" name="paiche_line" class="form-control input-sm" placeholder="客户使用车辆的范围(必填)"
										value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_line']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_line'] : null);?>
">
									</td>
									<th style="background-color:#F5F5F6" width="15%">
										<span style="color:#000">备注说明</span>
									</th>
									<td width="35%">
										<input type="text" id="paiche_specialRemarks" name="paiche_specialRemarks" class="form-control input-sm" placeholder="其他特殊情况的说明"
										value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_specialRemarks']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_specialRemarks'] : null);?>
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