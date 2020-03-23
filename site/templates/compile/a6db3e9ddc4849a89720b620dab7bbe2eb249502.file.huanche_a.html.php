<?php /* Smarty version Smarty-3.0.4, created on 2019-11-07 16:57:11
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/changqi_zijia/huanche_a.html" */ ?>
<?php /*%%SmartyHeaderCode:153595dc3dc678fdde3-35903720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6db3e9ddc4849a89720b620dab7bbe2eb249502' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/changqi_zijia/huanche_a.html',
      1 => 1573116833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153595dc3dc678fdde3-35903720',
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
			<h5>长期自驾还车</h5>
		</div>
		<form method="post" action="index.php?task=huanche_aaction" name="form1" id="form1">
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
											<span style="color:#000">用车预计结束时间：</span>
										</th>
										<td width="25%">
											<input type="text" readonly="readonly" unselectable="on"  class="form-control input-sm"   value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_endDate']) ? $_smarty_tpl->getVariable('list')->value['paiche_endDate'] : null);?>
">
										</td>
									</tr>
									<tr>
										<th style="background-color:#F5F5F6" width="25%">
											<span style="color:#000">当前车辆实际用车时间：</span>
										</th>
										<td width="25%">
											<input type="text" readonly="readonly" unselectable="on" class="form-control input-sm"  value="<?php echo $_smarty_tpl->getVariable('stime')->value;?>
" >
										</td>
										<th style="background-color:#F5F5F6" width="25%">
											<span style="color:#000">实际还车时间：</span>
										</th>
										<td width="25%">
											<input type="text" readonly="readonly" unselectable="on"  class="form-control input-sm" name="return_endDate" value="<?php echo $_smarty_tpl->getVariable('time')->value;?>
" >
										</td>
									</tr>
									<tr>
										<th style="background-color:#F5F5F6" width="25%">
											<span style="color:#000">当前车辆起始公里数：</span>
										</th>
										<td width="25%">
											<input type="text" readonly="readonly" unselectable="on" class="form-control input-sm" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_startKm']) ? $_smarty_tpl->getVariable('list')->value['settle_startKm'] : null);?>
" id="skm" name="skm">
										</td>
										<th style="background-color:#F5F5F6" width="25%">
											<span style="color:#000">当前车辆结束公里数：</span>
										</th>
										<td width="25%">
											<input type="number" min="0" onkeyup="value=value.replace(/[^\d.]/g,'')"  class="form-control input-sm" id="ekm" name="ekm"  placeholder="必填" onchange="jisuan();">
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
		var skm=parseInt($("#skm").val());
		var ekm=parseInt($("#ekm").val());
		var zkm=parseInt($("#zkm").val());
		$("#zjkm").val(ekm-skm+zkm);
	}
	$("#submit").click(function(){
		var skm=parseInt($("#skm").val());
		var ekm=parseInt($("#ekm").val());
		if(!ekm>0){
			alert("请填写当前车辆结束公里数！");
			return false;
		}
		if(ekm<skm){
			alert("前车辆结束公里数不能小于开始公里数！");
			return false;
		}
	});
	
	
	$('#form1').submit(function(){
		$('#submit').attr('disabled','disabled');
		$('#submit').val('正在提交');

	});
</script>
</html>