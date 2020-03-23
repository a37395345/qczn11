<?php /* Smarty version Smarty-3.0.4, created on 2019-09-30 21:23:24
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/zijia_linshi/selectemp.html" */ ?>
<?php /*%%SmartyHeaderCode:11437893705d9201cc21a796-27399781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5858b6fd5fff0333ad257b57776efdc61cd63fb6' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/zijia_linshi/selectemp.html',
      1 => 1569749244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11437893705d9201cc21a796-27399781',
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
 $_from = $_smarty_tpl->getVariable('empList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>

									<tr>
										<td style="background-color:#F5F5F6;text-align: center;padding: 0"  >
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
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_rentamount']) ? $_smarty_tpl->tpl_vars['row']->value['plan_rentamount'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_chaoshi']) ? $_smarty_tpl->tpl_vars['row']->value['plan_chaoshi'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_chaokm']) ? $_smarty_tpl->tpl_vars['row']->value['plan_chaokm'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_chaokms']) ? $_smarty_tpl->tpl_vars['row']->value['plan_chaokms'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_chaokmy']) ? $_smarty_tpl->tpl_vars['row']->value['plan_chaokmy'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_deposit1']) ? $_smarty_tpl->tpl_vars['row']->value['plan_deposit1'] : null);?>
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



function changeCar(car_id,car_num,car_color,plan_rentamounta,plan_chaoshi,plan_chaokm,plan_chaokms,plan_chaokmy,plan_deposit1){
			window.parent.window.document.getElementById("car_ida").value=car_id;
			window.parent.window.document.getElementById("car_num_a").value="苏D"+car_num;
			window.parent.window.document.getElementById("car_color_a").value=car_color;
			window.parent.window.document.getElementById("plan_rentamounta").value=plan_rentamounta;
			window.parent.window.document.getElementById("plan_chaoshia").value=plan_chaoshi;
			window.parent.window.document.getElementById("yajin_a").value=plan_deposit1;
			
			
			if(plan_chaokm=='y'){
				window.parent.window.document.getElementById("plan_chaokma").style.display="table-row";
				window.parent.window.document.getElementById("plan_chaokmya").value=plan_chaokmy;
				window.parent.window.document.getElementById("plan_chaokmsa").value=plan_chaokms;

			}



		var etime=window.parent.window.document.getElementById("etime").value;
		var stime=window.parent.window.document.getElementById("stime").value;
		var endtime=window.parent.window.document.getElementById("endtime").value;

		

		//原车辆日租金
		var plan_rentamount=window.parent.window.document.getElementById("plan_rentamount").value;

		//目标车辆租金
		var plan_rentamounta=window.parent.window.document.getElementById("plan_rentamounta").value;
		
		etime=etime.replace(/-/g,"/");
		endtime=endtime.replace(/-/g,"/");
		stime=stime.replace(/-/g,"/");
		var day=DateMinus(etime,endtime);
		
		var day1=DateMinus(stime,endtime);
		//当前订单剩余天数
		var day_t=parseInt(day/(24*60));
		
		//原预定车辆行驶天数
		var day1_t=parseInt(day1/(24*60));
		//当前订单剩余小时
		var day_s=day%(24*60);
		
		if(day_s>120){
			
			if(parseInt(plan_rentamounta)>parseInt(plan_rentamount)){
				day_t=day_t+1;
				
			}
			
			
		}

		var zujin_a;
		zujin_a=(plan_rentamounta-plan_rentamount)*day_t;
		window.parent.window.document.getElementById("zujin_a").value=zujin_a;
		//是否开票
		var paiche_needtax=window.parent.window.document.getElementById("paiche_needtax").value;
		if(parseInt(paiche_needtax)>0){
			window.parent.window.document.getElementById("suijin").value=zujin_a*0.1;
		}
		
		
		
		
	window.parent.window.jBox.close();
}
function test(){
	return 123;
}
function DateMinus(date1,date2){
  　　var sdate = new Date(date1); 
  　　var now = new Date(date2); 
  　　var days = now.getTime() - sdate.getTime(); 
  　　var day = parseInt(days / (1000 * 60)); 
  　　return day; 
  }
</script>
</body>
</html>