<?php /* Smarty version Smarty-3.0.4, created on 2020-03-05 17:38:36
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/daijia_linshi/qita.html" */ ?>
<?php /*%%SmartyHeaderCode:15435e60c89cc1aa86-60306046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '390e8f86f914b40c6f9efcdd08f2608e0ecec877' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/daijia_linshi/qita.html',
      1 => 1583400982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15435e60c89cc1aa86-60306046',
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
			<h5>长期自驾增加其他费用</h5>
		</div>
		<form method="post" action="index.php?task=qita_action" name="form1" id="form1">
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
								<input type="hidden" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_needtax']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_needtax'] : null);?>
" id="paiche_needtax">
								<div class="shiji">
									<table class="table table-bordered" class="shiji">
									<tr>
										<th style="background-color:#F5F5F6" width="25%">
											<span style="color:#000">等待费：<span style="color:#9c9696"></span>
										</th>
										<td width="25%">
											<input type="number" onkeyup="value=value.replace(/[^\d.]/g,'')" class="form-control input-sm" name="dengdai" id="dengdai" onchange="jisuan()">
										</td>


										<th style="background-color:#F5F5F6" width="25%">
											<span style="color:#000">超时费：<span style="color:#9c9696"></span></span>
										</th>
										<td width="25%">
											<input type="number" onkeyup="value=value.replace(/[^\d.]/g,'')"  class="form-control input-sm" name="chaoshi" id="chaoshi" onchange="jisuan()">
										</td>
									</tr>

									

									<tr>
										<th style="background-color:#F5F5F6" width="25%">
											<span style="color:#000">超公里费用：<span style="color:#9c9696"></span>
										</th>
										<td width="25%">
											<input type="number" onkeyup="value=value.replace(/[^\d.]/g,'')"  class="form-control input-sm" name="chaokm" id="chaokm" onchange="jisuan()">
										</td>
										<?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_kehu']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_kehu'] : null)==1&&(isset($_smarty_tpl->getVariable('paiche')->value['paiche_needtax']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_needtax'] : null)==1){?>
										<th style="background-color:#F5F5F6" width="25%">
											<span style="color:#000">税金：<span style="color:#9c9696"></span>
										</th>
										<td width="25%">
											<input type="number" onkeyup="value=value.replace(/[^\d.]/g,'')"  class="form-control input-sm" name="suijin" readonly="readonly" unselectable="on" id="suijin">
										</td>
										<?php }else{ ?>
										<th style="background-color:#F5F5F6" width="25%">
											<span style="color:#000"><span style="color:#9c9696"></span>
										</th>
										<td width="25%">
											
										</td>
										<?php }?>
										
									</tr>

									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">其他费用：<span style="color:#9c9696"></span></span>
										</th>
										<td class="xixi" width="25%">
											<input type="number" onkeyup="value=value.replace(/[^\d.]/g,'')"  class="form-control input-sm" name="qita" id="qita"  placeholder="特殊情况下使用" onchange="jisuan()">
										</td>

										<!-- <th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">其他费用（调车公司报价）：<span style="color:#9c9696"></span></span>
										</th>
										<td width="25%">
											<input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')"  class="form-control input-sm" name="have_freeze_money" id="have_freeze_money"  placeholder="本次收费调车公司应收的费用">
										</td> -->


									</tr>
									<tr class="xgg">
										
										
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
			<input type="hidden" id="paiche_pintaiid" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_pintaiid']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_pintaiid'] : null);?>
">
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
		var dengdai=0;
		if(parseFloat($("#dengdai").val())>0){
			dengdai=parseFloat($("#dengdai").val());
		}
		var chaoshi=0;
		if(parseFloat($("#chaoshi").val())>0){
			chaoshi=parseFloat($("#chaoshi").val());
		}
		var chaokm=0;
		if(parseFloat($("#chaokm").val())>0){
			chaokm=parseFloat($("#chaokm").val());
		}
		var qita=0;
		if(parseFloat($("#qita").val())>0){
			qita=parseFloat($("#qita").val());
			$("#charge_remarks").attr("placeholder","必填");
		}else if(parseFloat($("#qita").val())==0){
			$("#charge_remarks").attr("placeholder","其他费用的说明");
		}else if(!parseFloat($("#qita").val())){
			$("#charge_remarks").attr("placeholder","其他费用的说明");
		}
		var zj = ((dengdai+chaoshi+chaokm+qita)*0.1).toFixed(2);
		$("#suijin").val(zj);
	}
	$('#form1').submit(function(){
		$('#submit').attr('disabled','disabled');
		$('#submit').val('正在提交');
	});
	$("#submit").click(function(){
		let charge_remarks = $("#charge_remarks").val();
		var have_freeze_money = parseFloat($("#have_freeze_money").val());
		var qita = parseFloat($("#qita").val());
		if(have_freeze_money>qita){
			alert("调车公司报价不能大于其他费用！");
			$("#have_freeze_money").val(0);
			return false;
		}
		// if(!charge_remarks){
		// 	alert("请填写其他费用备注！");
		// 	return false;
		// }
		if(parseFloat($("#qita").val())>0){
			if(!charge_remarks){
				alert("请填写其他费用备注！");
				return false;
			}
		}
	});

	$(function(){
		var str;
		var list;
		var xdd = $("#paiche_pintaiid").val();
		if(xdd==2){
			str="<th style='background-color:#F5F5F6' width=15%<?php ?>><span style='color:#000'>其他费用（调车公司报价）：</span></th><td width=25%<?php ?>><input type='text' onkeyup='value=value.replace(/[^\d.]/g,'')' class='form-control input-sm' name='have_freeze_money' id='have_freeze_money' placeholder='本次收费调车公司应收的费用'></td>";
			list="<th style='background-color:#F5F5F6' width=15%<?php ?>><span style='color:#000'>其他费用备注：</span></th><td width=25%<?php ?>><input type='text' class='form-control input-sm' name='charge_remarks' id='charge_remarks' placeholder='其他费用的说明'></td><th style='background-color:#F5F5F6' width=15%<?php ?>><span style='color:#000'></span></th><td width=25%<?php ?>></td>"
			$(".xixi").after(str);
			$(".xgg").html(list);
		}else{
			str="<th style='background-color:#F5F5F6' width=15%<?php ?>><span style='color:#000'>其他费用备注：</span></th><td width=25%<?php ?>><input type='text' class='form-control input-sm' name='charge_remarks' id='charge_remarks' placeholder='其他费用的说明'></td>"
			$(".xixi").after(str);
		}
	})
</script>
</html>