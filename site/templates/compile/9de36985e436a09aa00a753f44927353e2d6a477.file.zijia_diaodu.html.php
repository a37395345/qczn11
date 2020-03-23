<?php /* Smarty version Smarty-3.0.4, created on 2019-05-23 09:49:41
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/business/zijia_diaodu.html" */ ?>
<?php /*%%SmartyHeaderCode:53285ce5fc355b1bd6-41156885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9de36985e436a09aa00a753f44927353e2d6a477' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/business/zijia_diaodu.html',
      1 => 1558576172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53285ce5fc355b1bd6-41156885',
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
<form method="post" action="zijiaDiaodu_accept.php" name="form1" id="form1">
<input type="hidden" name="pid" value="<?php echo $_smarty_tpl->getVariable('pid')->value;?>
" />
<div class="so_main">
  <div class="page_tit_1">临时自驾车辆调度</div>
 
<div class="page_tit_3">&nbsp;</div>
<input type="hidden" name="b_id" id="b_id" value="<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
" />
<div class="form2">
	<dl class="lineD">
      <dt>用车开始时间：</dt>
      <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate_All'] : null);?>
</dd>
    </dl>
    <dl class="lineD">
      <dt>用车结束时间：</dt>
      <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_endDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_endDate_All'] : null);?>
</dd>
    </dl>
	
    <dl class="lineD">
	    <dt>开车线路：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_line']) ? $_smarty_tpl->getVariable('list')->value['paiche_line'] : null);?>
</dd>
	</dl>
	
	<dl class="lineD">
	    <dt>特殊说明：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_specialRemarks']) ? $_smarty_tpl->getVariable('list')->value['paiche_specialRemarks'] : null);?>
</dd>
	</dl>
	<dl class="lineD">
    	<dt>客户要求车型：</dt>
    	<dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_requestCar']) ? $_smarty_tpl->getVariable('list')->value['paiche_requestCar'] : null);?>
</dd>
  	</dl>
  	<dl class="lineD">
    	<dt>预约车辆：</dt>
    	<dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paicheCar2s']) ? $_smarty_tpl->getVariable('list')->value['paicheCar2s'] : null);?>
</dd>
  	</dl>
	<dl class="lineD" id="showCar">
	    <dt>选择汽车：</dt>
	    <dd>
	    	<input type="text" name="paicheCar" id="paicheCar" size="38" onFocus="this.blur()" value="" /> 
	        <input type="button" value="清 空" onClick="clearValue('paicheCar','paicheCar2')" />&nbsp;
	         关键字：
	         <input type="text" name="paicheCarKey" id="paicheCarKey" size="10" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num2']) ? $_smarty_tpl->getVariable('list')->value['car_num2'] : null);?>
"/>
	    	<input type="hidden" name="paicheCar2" id="paicheCar2" value="" />
	    <a href="javascript:select_car();">
	    	<img src="../../../css/car2.gif" height="15" class="peoplePic" /></a>
	    
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