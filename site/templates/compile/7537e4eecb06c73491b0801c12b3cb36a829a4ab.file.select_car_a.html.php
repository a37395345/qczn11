<?php /* Smarty version Smarty-3.0.4, created on 2020-01-19 15:30:34
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/daijia_linshi/select_car_a.html" */ ?>
<?php /*%%SmartyHeaderCode:157005e24059acaca49-21435348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7537e4eecb06c73491b0801c12b3cb36a829a4ab' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/daijia_linshi/select_car_a.html',
      1 => 1579419001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157005e24059acaca49-21435348',
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
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_type']) ? $_smarty_tpl->tpl_vars['row']->value['car_type'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_motor']) ? $_smarty_tpl->tpl_vars['row']->value['car_motor'] : null);?>
','<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_frame']) ? $_smarty_tpl->tpl_vars['row']->value['car_frame'] : null);?>
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



function changeCar(car_id,car_num,car_color,car_brand,car_type,car_motor,car_frame){
		window.parent.window.document.getElementById("car_num").value="苏D"+car_num;
		window.parent.window.document.getElementById("car_color").value=car_color;
		window.parent.window.document.getElementById("car_ida").value=car_id;
		
		window.parent.window.jBox.close();

}

</script>
</body>
</html>