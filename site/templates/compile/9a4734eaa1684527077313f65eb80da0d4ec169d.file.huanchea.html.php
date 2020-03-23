<?php /* Smarty version Smarty-3.0.4, created on 2020-03-19 15:55:32
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/daijia_linshi/huanchea.html" */ ?>
<?php /*%%SmartyHeaderCode:297995e7325743a3ed1-88128119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a4734eaa1684527077313f65eb80da0d4ec169d' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/daijia_linshi/huanchea.html',
      1 => 1584604439,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '297995e7325743a3ed1-88128119',
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
<script type="text/javascript" src="../../../js/laydate/laydate.js?a=1"></script>
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
			<h5>临时代驾还车</h5>
		</div>
		<form method="post" action="index.php?task=huanchea_action" name="form1" id="form1">
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
								
								<div class="shiji">
									<table class="table table-bordered" class="shiji">
									<tr>
										<th style="background-color:#F5F5F6" width="25%">
											<span style="color:#000">用车开始时间：</span>
										</th>
										<td width="25%">
											<input type="text" readonly="readonly" unselectable="on" class="form-control input-sm"   value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate'] : null);?>
">
										</td>


										
										<th style="background-color:#F5F5F6" width="25%">
											<span style="color:#000">实际还车时间：</span>
										</th>
										<td width="25%">
											<input readonly="readonly" unselectable="on" type="text" id="return_endDate" class="laydate-icon form-control input-sm" name="return_endDate" value="<?php echo $_smarty_tpl->getVariable('time')->value;?>
" >
										</td>
									</tr>
									<tr>
										<th style="background-color:#F5F5F6" width="25%">
											<span style="color:#000">当前车辆起始公里数：</span>
										</th>
										<td width="25%">
											<input  type="number" class="form-control input-sm" value="" id="skm" name="skm" placeholder="必填"  onchange="jisuan()">
										</td>
										<th style="background-color:#F5F5F6" width="25%">
											<span style="color:#000">当前车辆结束公里数：</span>
										</th>
										<td width="25%">
											<input type="number" min="0"   class="form-control input-sm" id="ekm" name="ekm"  placeholder="必填" onchange="jisuan()" >
										</td>
									</tr>
									<tr>
										<th style="background-color:#F5F5F6" width="25%">
											<span style="color:#000">被换车辆共计形式公里数：</span>
										</th>
										<td width="25%">
											<input type="text" readonly="readonly" unselectable="on" class="form-control input-sm"  value="<?php echo $_smarty_tpl->getVariable('ekm')->value;?>
" id="zkm">
										</td>
										<th style="background-color:#F5F5F6" width="25%">
											<span style="color:#000">共计形式公里数：</span>
										</th>
										<td width="25%">
											<input type="text" readonly="readonly" unselectable="on"  class="form-control input-sm"   id="zjkm" name="zjkm">
										</td>
									</tr>
									<tr>
										<th style="background-color:#F5F5F6" width="25%">
											<span style="color:#000">计费行驶公里：</span>
										</th>
										<td width="25%">
											<input  type="number" class="form-control input-sm" value="" id="paiche_ekm" name="paiche_ekm" placeholder="必填" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_kehu']) ? $_smarty_tpl->getVariable('list')->value['paiche_kehu'] : null)==5){?>readonly="readonly" unselectable="on"<?php }?>>
										</td>

										<?php if (((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)=='Y'&&(isset($_smarty_tpl->getVariable('list')->value['paiche_kehu']) ? $_smarty_tpl->getVariable('list')->value['paiche_kehu'] : null)==1)||(isset($_smarty_tpl->getVariable('list')->value['paiche_kehu']) ? $_smarty_tpl->getVariable('list')->value['paiche_kehu'] : null)==4){?>
										<th style="background-color:#F5F5F6" width="25%">
											<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_kehu']) ? $_smarty_tpl->getVariable('list')->value['paiche_kehu'] : null)==4){?>
											<span style="color:#000">等待时长：</span>
											<?php }else{ ?>
											<span style="color:#000">超时：</span>
											<?php }?>
										</th>
										<td width="25%">
											<input  type="number" class="form-control input-sm" value="" id="chaoshi" name="chaoshi" placeholder="" >
										</td>
										<?php }else{ ?>
										<th style="background-color:#F5F5F6" width="25%">
											
										</th>
										<td width="25%">
									
										</td>
										<?php }?>
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
	function jisuan(){
		
		var ekm = parseFloat($("#ekm").val());
		var skm = parseFloat($("#skm").val());

		if(ekm<skm){
			alert("当前车辆结束公里数不能小于起始公里数！");
			$("#ekm").val("")
			return false;
		}
		var skm=0;
		if(parseInt($("#skm").val())>0){
			skm=parseInt($("#skm").val());
		}
		var ekm=0;
		if(parseInt($("#ekm").val())>0){
			ekm=parseInt($("#ekm").val());
		}
		var zkm=0;
		if(parseInt($("#zkm").val())>0){
			zkm=parseInt($("#zkm").val());
		}
		$("#zjkm").val(ekm-skm+zkm);
		$("#paiche_ekm").val(ekm-skm+zkm);

	}
	$("#paiche_ekm").change(function(){

		var zjkm=0;
		if(parseInt($("#zjkm").val())>0){
			zjkm=parseInt($("#zjkm").val());
		}
		var paiche_ekm=0;
		if(parseInt($("#paiche_ekm").val())>0){
			paiche_ekm=parseInt($("#paiche_ekm").val());
		}
		
		if(paiche_ekm>zjkm){
			alert('结束里程不能大于实际行驶公里数！');
			$("#paiche_ekm").val(zjkm);
		}

	})
	$("#submit").click(function(){
		var skm=parseInt($("#skm").val());
		var ekm=parseInt($("#ekm").val());
		var skm=parseInt($("#skm").val());
		var paiche_ekm=parseInt($("#paiche_ekm").val());
		
		
		
		if(!skm>0){
			alert("请填写当前车辆起始公里数！");
			return false;
		}
		if(!ekm>0){
			alert("请填写当前车辆结束公里数！");
			return false;
		}
		if(ekm<skm){
			alert("前车辆结束公里数不能小于开始公里数！");
			return false;
		}
		if(!paiche_ekm>0){
			alert("请填写计费里程！");
			return false;
		}
	});

	$("#return_endDate").click(function(){
    	//alert("111")
    	laydate({
    		elem:"#return_endDate",
    		format: 'YYYY-MM-DD hh:mm:ss',
	        istime: true, 
	        choose: function(datas){ //选择日期完毕的回调
        		//var sDate = DateToUnix(datas);
        		console.log(datas);
			}
	    });
    });
	
	
	$('#form1').submit(function(){
		$('#submit').attr('disabled','disabled');
		$('#submit').val('正在提交');

	});


	function changexs(){
		var skm = parseFloat($("#skm").val());
		var ekm = parseFloat($("#ekm").val());
		var zkm = parseFloat($("#zkm").val());
		var zjkm = parseFloat($("#zjkm").val());
		var cha = ekm-skm
		var cha1 = zjkm-zkm
		var cha2 = cha+cha1
		var paiche_ekm = parseFloat($("#paiche_ekm").val());
		if(paiche_ekm>cha2){
			alert("计费行驶公里数不能大于实际行驶公里数");
			$("#paiche_ekm").val("")
			return false;
		}
	}
</script>
</html>