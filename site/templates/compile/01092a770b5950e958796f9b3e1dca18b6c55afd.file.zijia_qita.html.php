<?php /* Smarty version Smarty-3.0.4, created on 2020-02-28 17:59:49
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/zijia_linshi/zijia_qita.html" */ ?>
<?php /*%%SmartyHeaderCode:172615e58e4958f1df1-33242987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01092a770b5950e958796f9b3e1dca18b6c55afd' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/zijia_linshi/zijia_qita.html',
      1 => 1582883418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172615e58e4958f1df1-33242987',
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
			<h5>临时自驾增加其他费用</h5>
		</div>
		<form method="post" action="zijia_qitaaccept.php" name="form1" id="form1">
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
								<input type="hidden" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_needtax']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_needtax'] : null);?>
" id="paiche_needtax">
								
								
								

								
								<div class="shiji">
									<table class="table table-bordered" class="shiji">
									<tr>
										<th style="background-color:#F5F5F6" width="25%">
											<span style="color:#000">清洗费：<span style="color:#9c9696">(规定50元/次，如存在异味另收3000元)</span>
										</th>
										<td width="25%">
											<input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" class="form-control input-sm" name="qingxi" id="qingxi" onchange="jisuan()">
										</td>


										<th style="background-color:#F5F5F6" width="25%">
											<span style="color:#000">维修费：<span style="color:#9c9696">(具体金额请联系机务部顾玉星，3000元以内)</span></span>
										</th>
										<td width="25%">
											<input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')"  class="form-control input-sm" name="weixiu" id="weixiu" onchange="jisuan()">
										</td>
									</tr>

									

									<tr>
										<th style="background-color:#F5F5F6" width="25%">
											<span style="color:#000">收车费：<span style="color:#9c9696">(按合同收取3000~10000元,具体金额请联系机务部洪丹)</span>
										</th>
										<td width="25%">
											<input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')"  class="form-control input-sm" name="shouche" id="shouche" onchange="jisuan()">
										</td>
										<th style="background-color:#F5F5F6" width="25%">
											<span style="color:#000">刷卡费：<span style="color:#9c9696">(信用卡为刷卡金额的千分之8，储蓄卡20元)</span></span>
										</th>
										<td width="25%">
											<input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')"  class="form-control input-sm" name="shuaka" id="shuaka" onchange="jisuan()">
										</td>

										
									</tr>


									<tr>
										
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">配钥匙费：<span style="color:#9c9696">(具体金额请联系机务部洪丹)</span></span>
										</th>
										<td width="25%">
											<input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')"  class="form-control input-sm" name="yaoshi" id="yaoshi" onchange="jisuan()">
										</td>
										<th style="background-color:#F5F5F6" width="25%">
											<span style="color:#000">代加油服务费：<span style="color:#9c9696">(规定50元/次)</span></span>
										</th>
										<td width="25%">
											<input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')"  class="form-control input-sm" name="fuwu" id="fuwu" placeholder="" onchange="jisuan()">
										</td>
										
									</tr>


									<tr>
										
										<th style="background-color:#F5F5F6" width="25%">
											<span style="color:#000">补行驶证费:<span style="color:#9c9696">(丢失收费500元)</span></span>
										</th>

										<td width="25%">
											<input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')"  class="form-control input-sm" name="xingshi" id="xingshi" placeholder="" onchange="jisuan()">
										</td>
										<th style="background-color:#F5F5F6" width="25%">
											<span style="color:#000">其他费用：<span style="color:#9c9696">(特殊情况下使用)</span>
										</th>
										<td width="25%">
											<input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')"  class="form-control input-sm" name="qita"  id="qita" onchange="jisuan()">
										</td>
										
										
									</tr>

									<tr>
										
										

										<th style="background-color:#F5F5F6" width="25%">
											<span style="color:#000">税金：<span style="color:#9c9696">(开票金额为本次所有费用的百分之10)</span>
										</th>
										<td width="25%">
											<input type="text"  class="form-control input-sm" name="suijin" readonly unselectable="on" id="suijin">
										</td>
										<th style="background-color:#F5F5F6" width="25%">
											<span style="color:#000">本次应收：</span>
										</th>
										<td width="25%">
											<input type="text"  class="form-control input-sm" id="yingshou" readonly unselectable="on">
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
		var qingxi=0;
		if(parseFloat($('#qingxi').val())>0){
			qingxi=parseFloat($('#qingxi').val());
		}
		var weixiu=0;
		if(parseFloat($('#weixiu').val())>0){
			weixiu=parseFloat($('#weixiu').val());
		}

		var shouche=0;
		if(parseFloat($('#shouche').val())>0){
			shouche=parseFloat($('#shouche').val());
		}

		var qita=0;
		if(parseFloat($('#qita').val())>0){
			qita=parseFloat($('#qita').val());
		}
		

		
		var shuaka=0;
		if(parseFloat($('#shuaka').val())>0){
			shuaka=parseFloat($('#shuaka').val());
		}
		var yaoshi=0;
		if(parseFloat($('#yaoshi').val())>0){
			yaoshi=parseFloat($('#yaoshi').val());
		}

		var fuwu=0;
		if(parseFloat($('#fuwu').val())>0){
			fuwu=parseFloat($('#fuwu').val());
		}

		var xingshi=0;
		if(parseFloat($('#xingshi').val())>0){
			xingshi=parseFloat($('#xingshi').val());
		}
		

		

		var num_money=qingxi+weixiu+shouche+shuaka+yaoshi+fuwu+qita+xingshi;

		var paiche_needtax=parseFloat($('#paiche_needtax').val());
		var suijin=0;

		if(paiche_needtax>0){
			suijin=num_money*0.1;
		}
		$('#suijin').val(suijin);
		$('#yingshou').val(num_money+suijin);
		
	}
	$('#form1').submit(function(){
		$('#submit').attr('disabled','disabled');
		$('#submit').val('正在提交');

	});
</script>
</html>