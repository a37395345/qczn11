<?php /* Smarty version Smarty-3.0.4, created on 2020-02-23 16:38:39
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/zijia_linshi/get_car.html" */ ?>
<?php /*%%SmartyHeaderCode:67435e523a0f681b63-82765154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54d0ff480a8a432b70d3df32c342e16ac20b54b5' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/zijia_linshi/get_car.html',
      1 => 1582446982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67435e523a0f681b63-82765154',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<link rel="shortcut icon" href="favicon.ico">
<link href="../../../css/box.css" rel="stylesheet" type="text/css" />
<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
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
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js?a=3"></script>
<script type="text/javascript" src="../../../js/jquery.editable-select.min.js"></script>
<script type="text/javascript" src="../../../js/jquery.js"></script>

<style>
	body{
		background-color: #F5F5F6;
	}
	.newwindowcar li{
		padding: 0;margin: 0;
		padding-top: 10px;padding-bottom: 10px;
		margin-left:8%;padding-left:2%;width: 40%;
	}
	.newwindowcar li a{
		font-size: 13px;font-weight: 500;color:#5e6157;text-decoration:none;
	}
	.newwindowcar li a:hover{
		color: #b38532;
	}

</style>
</head>
<body>
	<div class="wrapper wrapper-content animated fadeInRight">
	<!-- Panel Other -->
	<div class="ibox float-e-margins">
		
		<form method="post" action="zijia_youhuiaccept.php" name="form1">
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
								<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('nengyouhui')->value;?>
" id="nengyouhui" name="nengyouhui">
								
								<div class="shiji">
									<table class="table table-bordered" class="shiji">
									<tr>
										<td width="20%" style="text-align: center;">图片</td>
										<td width="20%" style="text-align: center;">车牌号码</td>
										<td width="20%" style="text-align: center;">颜色</td>
										<td width="20%" style="text-align: center;">车型</td>
										<td width="20%" style="text-align: center;">操作</td>
									</tr>
									<?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable(1, null, null);?>
										<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('car_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>

									<tr>
										<td style="background-color:#F5F5F6;text-align: center;padding:0;"  >
											<img src="../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_image']) ? $_smarty_tpl->tpl_vars['row']->value['car_image'] : null);?>
" width="100%">
										</td>
										<td style="background-color:#F5F5F6;text-align: center;" >
											苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>

										</td>
										<td style="background-color:#F5F5F6;text-align: center;" >
											<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_color']) ? $_smarty_tpl->tpl_vars['row']->value['car_color'] : null);?>

										</td>
										<td style="background-color:#F5F5F6;text-align: center;" >
											<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_model']) ? $_smarty_tpl->tpl_vars['row']->value['car_model'] : null);?>

										</td>
										<td style="background-color:#F5F5F6;text-align: center;" >
											<a  href="javascript:changeCar('<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_color']) ? $_smarty_tpl->tpl_vars['row']->value['car_color'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_brand']) ? $_smarty_tpl->tpl_vars['row']->value['car_brand'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_types']) ? $_smarty_tpl->tpl_vars['row']->value['car_types'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_motor']) ? $_smarty_tpl->tpl_vars['row']->value['car_motor'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_frame']) ? $_smarty_tpl->tpl_vars['row']->value['car_frame'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_chaoshi']) ? $_smarty_tpl->tpl_vars['row']->value['plan_chaoshi'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_deposit']) ? $_smarty_tpl->tpl_vars['row']->value['plan_deposit'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['xianzhikm']) ? $_smarty_tpl->tpl_vars['row']->value['xianzhikm'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_rentamount']) ? $_smarty_tpl->tpl_vars['row']->value['plan_rentamount'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_chaokm']) ? $_smarty_tpl->tpl_vars['row']->value['plan_chaokm'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_chaokms']) ? $_smarty_tpl->tpl_vars['row']->value['plan_chaokms'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_chaokmy']) ? $_smarty_tpl->tpl_vars['row']->value['plan_chaokmy'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
');">选择</a>
										</td>
										
										
										<?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->getVariable('index')->value+1, null, null);?>
										
									</tr>
									<?php }} ?>
							
									</table>
								</div>
							</div>
						</div>
						<!-- End Example Events -->
					</div>
				</div>
				
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




<script language="javascript">


function changeCar(id,car_num,car_color,car_brand,car_types,car_motor,car_frame,plan_chaoshi,plan_deposit,xianzhikm,plan_rentamount,plan_chaokm,plan_chaokms,plan_chaokmy,car_id){
		$.ajax({
			type:'POST',
			url:'zijia_list.php?task=get_gongchang',
			data:{"car_id":car_id},
			dataType:"json",
			cache: false,
			success:function(req){
				window.parent.window.document.getElementById("car_gongchang").value=req;
				//window.parent.window.document.getElementById("che").style.display='table';
				window.parent.window.document.getElementById("car_num").value="苏D"+car_num;
				window.parent.window.document.getElementById("car_color").value=car_color;
				window.parent.window.document.getElementById("car_brand").value=car_brand;
				window.parent.window.document.getElementById("car_types").value=car_types;
				
				var car_types_a="小轿车";
				if(car_types==1){
					car_types_a="普通跑车";
				}else if(car_types==2){
					car_types_a="超级跑车";
				}else if(car_types==3){
					car_types_a="越野车";
				}else if(car_types==4){
					car_types_a="商务车";
				}else if(car_types==5){
					car_types_a="中型客车";
				}else if(car_types==6){
					car_types_a="大型客车";
				}
				window.parent.window.document.getElementById("car_types_a").value=car_types_a;
				window.parent.window.document.getElementById("car_motor").value=car_motor;
				window.parent.window.document.getElementById("car_frame").value=car_frame;
				window.parent.window.document.getElementById("plan_rentamount").value=plan_rentamount;

				window.parent.window.document.getElementById("paiche_overTime").value=plan_chaoshi;
				window.parent.window.document.getElementById("paiche_deposit").value=plan_deposit;

				window.parent.window.document.getElementById("paiche_rent").value=0;
				window.parent.window.document.getElementById("tian_a").value=0;
				window.parent.window.document.getElementById("shi").value=0;
				window.parent.window.document.getElementById("fen").value=0;
				window.parent.window.document.getElementById("paiche_endDate").value="";
				
				if(plan_chaokm=='y'){
					window.parent.window.document.getElementById("plan_chaokm").style.display='table-row';
					window.parent.window.document.getElementById("plan_chaokms").value=plan_chaokms;
					window.parent.window.document.getElementById("plan_chaokmy").value=plan_chaokmy;
				}else{
					window.parent.window.document.getElementById("plan_chaokm").style.display='none';
				}
				
				window.parent.window.document.getElementById("paicheCar").value=car_id;
				
				window.parent.window.document.getElementById("paicheCars").value="苏D"+car_num+"-"+car_color+"-"+car_brand+"-"+car_types_a;
				
			
			window.parent.window.jBox.close();
				
				
			}
		});
		

}

</script>
</body>
</html>