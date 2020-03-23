<?php /* Smarty version Smarty-3.0.4, created on 2019-07-03 15:57:54
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/zijia_linshi/zijia_changecar.html" */ ?>
<?php /*%%SmartyHeaderCode:298435d1c60025b91d7-32667020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bde958c860ef429ddf5d3c04915e6f98bc6f64e0' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/zijia_linshi/zijia_changecar.html',
      1 => 1562140670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '298435d1c60025b91d7-32667020',
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
<link href="../../../css/style.css" rel="stylesheet" type="text/css">
<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/date_select.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
<script language="javascript" type="text/javascript" src="../../../js/My97DatePicker/WdatePicker.js"></script>
</head>
<body>
<form method="post" action="zijiaChangecar_accept.php" name="form1" id="form1">
<input type="hidden" name="pid" value="<?php echo $_smarty_tpl->getVariable('pid')->value;?>
" />
<div class="so_main">
  <div class="page_tit_1">中途换车</div>
 
<div class="page_tit_3">&nbsp;</div>

<div class="form2">
	<dl class="lineD">
		<dt><span class="redstar">*</span>被换车辆：</dt>
		<dd>
			苏D<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_num']) ? $_smarty_tpl->getVariable('paiche')->value['car_num'] : null);?>
 &nbsp;&nbsp;租金：<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['plan_rentamount']) ? $_smarty_tpl->getVariable('paiche')->value['plan_rentamount'] : null);?>
/天&nbsp;&nbsp;超时费：<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['plan_chaoshi']) ? $_smarty_tpl->getVariable('paiche')->value['plan_chaoshi'] : null);?>
/小时&nbsp;&nbsp;<?php if ((isset($_smarty_tpl->getVariable('paiche')->value['plan_chaokm']) ? $_smarty_tpl->getVariable('paiche')->value['plan_chaokm'] : null)!="y"){?>不限公里<?php }else{ ?>限<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['plan_chaokms']) ? $_smarty_tpl->getVariable('paiche')->value['plan_chaokms'] : null);?>
/天,超每公里<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['plan_chaokmy']) ? $_smarty_tpl->getVariable('paiche')->value['plan_chaokmy'] : null);?>
元 

			<?php }?>&nbsp;&nbsp;开始时间<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['stime']) ? $_smarty_tpl->getVariable('paiche')->value['stime'] : null);?>

		</dd>
		<dt><span class="redstar">*</span>目标车辆：</dt>
		<dd >
			<input type="text" name="mb" id="mb" readonly class="grey" size="38" />
		</dd>
		<dt><span class="redstar">*</span>预计结束时间：</dt>
		<dd>
			<input type="text" name="changecar_carA" id="changecar_carA" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_endDate']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_endDate'] : null);?>
" readonly class="grey" size="38" />
		</dd>
	</dl>
	<dl class="lineD">
		<dt><span class="redstar">*</span>被换车辆起始公里数：</dt>
		<dd><input type="text" name="changecar_carAStartKilo" id="changecar_carAStartKilo" size="5" />&nbsp;&nbsp;结束公里数：<input type="text" name="changecar_carAEndKilo" id="changecar_carAEndKilo" size="5" />
		</dd>
	</dl>



		



	<dl class="lineD">
		<dt><span class="redstar">*</span>目标车辆：</dt>
		<dd><input type="text" name="paicheCar" id="paicheCar" size="38" onFocus="this.blur()" /> 关键字：<input type="text" name="paicheCarKey" id="paicheCarKey" size="10" />
		<input type="hidden" name="paicheCar2" id="paicheCar2" size="16" />
		<input type="button" value="清 空" onClick="clearValue('paicheCar','paicheCar2')" />
		<a href="javascript:select_car();"><img src="../../../css/car2.gif" height="15" class="peoplePic" /></a>
		</dd>
	</dl>

	<dl class="lineD">
		<dt>目标车辆当前公里数：</dt>
		<dd><input type="text" name="changecar_kiloBNow" id="changecar_kiloBNow" value="" size="5"/>
		</dd>
	</dl>
	
	<dl class="lineD">
		<dt>换车时间：</dt>
		<dd><input type="text" name="addtime" size="18" value="<?php echo $_smarty_tpl->getVariable('addtime')->value;?>
" onclick="WdatePicker({dateFmt:'yyyy-MM-dd H:m:s'})" />
		</dd>
	</dl>
	
	<dl class="lineD">
		<dt>备注：</dt>
		<dd><textarea name="changecar_rentRemarks" id="changecar_rentRemarks" cols="60" rows="3"></textarea>
		</dd>
	</dl>
</div>

  <div class="Toolbar_inbox">
    <a href="javascript:void(0);" class="btn_a" name="btn_save" id="btn_save" onclick="ok();"><span>确定</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="closebox();"><span>关闭</span></a>   	
  </div> 
</div>
</form>
<script type="text/javascript" src="../../../js/account.js"></script>
<!-->
<script>
$(document).ready(function(){
   
   
    
});
</script>
<!-->
</body>
</html>