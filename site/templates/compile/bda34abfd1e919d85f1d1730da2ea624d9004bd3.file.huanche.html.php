<?php /* Smarty version Smarty-3.0.4, created on 2020-03-05 17:30:10
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/daijia_linshi/huanche.html" */ ?>
<?php /*%%SmartyHeaderCode:297665e60c6a27b4946-28796773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bda34abfd1e919d85f1d1730da2ea624d9004bd3' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/daijia_linshi/huanche.html',
      1 => 1583317489,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '297665e60c6a27b4946-28796773',
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
<title>换车</title>
<link rel="shortcut icon" href="favicon.ico">
  <link href="../../../../css/style.css" rel="stylesheet" type="text/css">
<link href="../../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<link rel="stylesheet" type="text/css" href="../../../../css/webuploader.css">
<link rel="stylesheet" type="text/css" href="../../../../css/diyUpload.css">


<link href="../../../css/box.css" rel="stylesheet" type="text/css" />
<link href="../../../css/jquery.editable-select.min.css" rel="stylesheet" type="text/css" />
<link href="../../../crm/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
<link href="../../../crm/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
<link href="../../../crm/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">

<link href="../../../crm/css/animate.min.css" rel="stylesheet">
<link href="../../../crm/css/style.min862f.css?v=2" rel="stylesheet">
<script src="../../../../jquery.js"></script>

<script type="text/javascript" src="../../../js/laydate/laydate.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../js/check_form.js"></script>

<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js?a=5"></script>

<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
<script type="text/javascript" src="../../../js/jquery.editable-select.min.js"></script>


<script type="text/javascript" src="../../../../js/diyUpload/webuploader.html5only.min.js"></script>
<script type="text/javascript" src="../../../../js/diyUpload/diyUpload.js?a=5"></script>

<script src="../../../js/moment.js"></script>
<!-->
<script type="text/javascript">
</script>
<!--><object classid="clsid:F1317711-6BDE-4658-ABAA-39E31D3704D3" codebase="SDRdCard.cab#version=1,3,5,0" width="330" height="0" align="center" hspace="0" vspace="0" id="idcard" name="rdcard"></object>
<style type="text/css">
    /**/
    .navi_name{font-size:14px;font-weight:bold;}
    .indent{padding-left:40px;}
#box{width:100%; min-height:300px; background:#FF9}
/**/
        .span1{
        margin-bottom: 5px;    color: inherit;
    background-color: transparent;
    -webkit-transition: all .5s;
    transition: all .5s;    border-color: #c2c2c2;border-radius: 3px;    display: inline-block;
    padding: 6px 12px;
    }
    .webuploader-pick{
        float: left;
    }

    .example div ul{
        overflow:hidden;
    }
    .example div ul li img{
        display: block;
        border: 1px solid #ddd;
        box-shadow: 1px 1px 5px 0px #a2958a;
        padding: 6px;
        text-align: center;
        vertical-align: middle;
    }
    input[type="checkbox"]{
      width:18px;
      height:18px;
      display: inline-block;
      text-align: center;
      vertical-align:baseline; 
      line-height: 18px;
      position: relative;
      border-radius: 50%;
      outline: none;
      -webkit-appearance: none;
      border:1px solid #fff;
      -webkit-tab-highlight-color: rgba(0,0,0,0);
      color: #fff;
      background: #fff;
      top: 4px;
    }
    input[type="checkbox"]::before{
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      background: #fff;
      width: 100%;
      height: 100%;
      border: 1px solid #999999;
      border-radius: 50%;
      color: #fff;
    }
    input[type="checkbox"]:checked::before{
      content: "\2713";
      background-color: #657AFE;
      border: 1px solid #657AFE;
      position: absolute;
      top: 0;
      left: 0;
      width:100%;
      color:#fff;
      font-size: 18px;
      border-radius: 50%;
    }
    input[type="checkbox"]:disabled::before{
        background: #eee;
        cursor: default;
    }
    input[type="checkbox"]:focus{
        border: none!important;
    }
    input{
        outline:none!important;
    }
    </style>
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
	<!-- Panel Other -->
	<div class="ibox float-e-margins">
		<div class="ibox-title">
			<h5>换车</h5>
		</div>
		<form method="post" action="index.php?task=huanche_action" name="form1" id="form1">
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
								<input type="hidden" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_id']) ? $_smarty_tpl->getVariable('paiche')->value['car_id'] : null);?>
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
											<input type="text" id="" class="form-control input-sm" placeholder="" readonly="readonly" value="苏D<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_num']) ? $_smarty_tpl->getVariable('paiche')->value['car_num'] : null);?>
" unselectable="on">
										</td>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">车辆颜色</span>
										</th>
										<td width="35%">
											<input type="text" id="" class="form-control input-sm" placeholder="" readonly="readonly" unselectable="on"value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_color']) ? $_smarty_tpl->getVariable('paiche')->value['car_color'] : null);?>
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
											
											<input type="text" class="form-control input-sm" placeholder="" id="etime" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['addtime']) ? $_smarty_tpl->getVariable('paiche')->value['addtime'] : null);?>
" name="etime">

										</td>
									</tr>
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">开始公里数</span>
										</th>
										<td width="35%">
											<input onkeyup="value=value.replace(/[^0-9\.]/g,'')" type="text" min="0" class="form-control input-sm" placeholder="被换车辆行驶开始公里数(必填)" id="skm" name="skm"  value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['settle_startKm']) ? $_smarty_tpl->getVariable('paiche')->value['settle_startKm'] : null);?>
">
										</td>

										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">结束公里数</span>
										</th>

										<td width="35%">
											<input type="text" min="0" class="form-control input-sm" placeholder="被换车辆行驶结束公里数(必填)" id="ekm"  name="ekm">
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

									<dl class="lineD" id="showCar" style="float: left;border-bottom:none">
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
											<input type="text" id="car_num" class="form-control input-sm" placeholder="" readonly="readonly" unselectable="on">
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
											<span style="color:#000">预计结束时间</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" placeholder="" id="endtime" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_endDate']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_endDate'] : null);?>
" >
										</td>

										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000"></span>
										</th>
										<td width="35%">
											<!-- <input onkeyup="value=value.replace(/[^0-9]/g,'')" type="text" min="0" class="form-control input-sm" placeholder="换后车辆行驶起始公里数" id="ekm_a"  name="ekm_a"> -->
										</td>
									</tr>
									</table>
								</div>




								
						<!-- End Example Events -->
					</div>
				</div>
				<input type="hidden" name="cid" value="<?php echo $_smarty_tpl->getVariable('cid')->value;?>
" id="cid">
				<input type="submit" id="submit" class="btn btn-outline btn-default" value="提交" style="width: 10%;margin-left: 45%;display: block;">
			</div>
			
		</form>
	</div>
	<!-- End Panel Other -->
</div>

 <script src="../../../crm/js/bootstrap.min.js?v=3.3.6"></script>
    
    <script src="../../../crm/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
    <script src="../../../crm/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
    <script src="../../../crm/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
    <script src="../../../crm/js/demo/bootstrap-table-demo.min.js"></script>

</body>
<!-->
<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->
<script type="text/javascript">
var cid=$('#cid').val();
$('#test').diyUpload({

    url:'../../../../site/includes/fileupload.php?id=8888',
    success:function( data ) {
        //alert(data.jsonrpc);
        console.info( data );
    },
    error:function( err ) {
        console.info( err );    
    },
    formData:{
        contractid:0,paiche:cid
    }
});



	var aim =document.getElementById("ekm");
	aim.oninput = function(){
		this.value = this.value.replace(/[^\d]/g,'')
	}
	
$("#submit").click(function(){
	var skm=parseInt($("#skm").val());
	var ekm=parseInt($("#ekm").val());
	var ekm_a=parseInt($("#ekm_a").val());
	var car_ida=parseInt($("#car_ida").val());
	var stime = $("#stime").val();
	var etime = $("#etime").val();

	if(!(ekm>0)){
		alert("请填写被换车辆的结束公里数!");
		return false;
	}

	if(!(ekm_a>0)){
		//alert("请填写换后车辆的起始公里数!");
		//return false;
	}

	if(ekm<skm){
		alert("被换车辆的结束公里数不能小于开始公里数!");
		return false;
	}
	
	if(!(car_ida>0)){
		alert("你还没有选择车辆!");
		return false;
	}
});

function select_car_a(){
		var key=$("#paicheCarKey").val();
		var car_id=$("#car_id").val();
		demo_iframe('index.php?task=select_car_a&&key='+key+'&car_id='+car_id,'选择车辆',650,380,'login_js');
		
}
$('#form1').submit(function(){
		$('#submit').attr('disabled','disabled');
		$('#submit').val('正在提交');

	});


</script>
<!-->
</html>