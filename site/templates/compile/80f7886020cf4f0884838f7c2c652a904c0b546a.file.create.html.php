<?php /* Smarty version Smarty-3.0.4, created on 2019-09-30 14:16:22
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/gps/create.html" */ ?>
<?php /*%%SmartyHeaderCode:19193755635d919db6eea9c7-30271168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80f7886020cf4f0884838f7c2c652a904c0b546a' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/gps/create.html',
      1 => 1569749221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19193755635d919db6eea9c7-30271168',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>管理后台</title>
<link href="../../../css/style.css" rel="stylesheet" type="text/css">
<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../js/check_form.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit">编辑</div>  
  <form method="post" action="insert.php" onsubmit="return gps_check(this)" name="form1">
  <div class="form2">
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>选择安装车辆：</dt>
	    <dd><input type="text" name="paicheCar" id="paicheCar" size="38" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
" /> 
	         <input type="button" value="清 空" onClick="clearValue('paicheCar','paicheCar2')" />&nbsp;
	         关键字：<input type="text" name="paicheCarKey" id="paicheCarKey" size="10" />
	    <input type="hidden" name="paicheCar2" id="paicheCar2" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_id']) ? $_smarty_tpl->getVariable('list')->value['car_id'] : null);?>
" /><input type="hidden" name="shunt" id="shunt" value="" />
	    <a href="javascript:select_car();"><img src="../../../css/car2.gif" height="15" class="peoplePic" /></a></dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>安装日期：</dt>
	    <dd><input type="text" name="gps_installDate" id="gps_installDate" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['gps_installDate']) ? $_smarty_tpl->getVariable('list')->value['gps_installDate'] : null);?>
" onclick="calendar.show(this);" readonly="readonly" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>设备类型：</dt>
	    <dd><input type="text" name="gps_model" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['gps_model']) ? $_smarty_tpl->getVariable('list')->value['gps_model'] : null);?>
"/></dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>设备号：</dt>
	    <dd><input type="text" name="gps_serial" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['gps_serial']) ? $_smarty_tpl->getVariable('list')->value['gps_serial'] : null);?>
"/></dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>安装位置：</dt>
	    <dd><input type="text" name="gps_site" size="36" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['gps_site']) ? $_smarty_tpl->getVariable('list')->value['gps_site'] : null);?>
"/></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>设备到期：</dt>
	    <dd><input type="text" name="gps_end" id="gps_end" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['gps_end']) ? $_smarty_tpl->getVariable('list')->value['gps_end'] : null);?>
" onclick="calendar.show(this);" readonly="readonly" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>手机号码：</dt>
	    <dd><input type="text" name="gps_cardno" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['gps_cardno']) ? $_smarty_tpl->getVariable('list')->value['gps_cardno'] : null);?>
"/></dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>余额：</dt>
	    <dd><input type="text" name="gps_money" size="8" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['gps_money']) ? $_smarty_tpl->getVariable('list')->value['gps_money'] : null);?>
"/>元</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>套餐：</dt>
	    <dd><input type="text" name="gps_package" size="8" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['gps_package']) ? $_smarty_tpl->getVariable('list')->value['gps_package'] : null);?>
"/></dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>启用日期：</dt>
	    <dd><input type="text" name="gps_start" id="gps_start" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['gps_start']) ? $_smarty_tpl->getVariable('list')->value['gps_start'] : null);?>
" onclick="calendar.show(this);" readonly="readonly" /></dd>
	  </dl>
	  
	  <dl class="lineD">
	    <dt>备注：</dt>
	    <dd><textarea name="gps_remark" cols="40" rows="5"><?php echo (isset($_smarty_tpl->getVariable('list')->value['gps_remark']) ? $_smarty_tpl->getVariable('list')->value['gps_remark'] : null);?>
</textarea></dd>
	  </dl>  
    	
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" /><b> 注：<span class="red">*</span>为必填项</b>
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['gps_id']) ? $_smarty_tpl->getVariable('list')->value['gps_id'] : null);?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  </form>
</div>
<!-->
<script>
$(document).ready(function(){
	
});
function select_car(){
	var key=$("#paicheCarKey").val();
	demo_iframe('../machine/selectcar.php?sel_type=c&key='+key,'选择车辆',650,380,'login_js');
}
function clearValue(dom1,dom2){
	$("#"+dom1).val("");
	$("#"+dom2).val("");
}
</script>
<!-->
</body>
</html>