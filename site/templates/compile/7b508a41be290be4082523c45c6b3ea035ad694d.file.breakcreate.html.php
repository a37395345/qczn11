<?php /* Smarty version Smarty-3.0.4, created on 2014-12-25 11:32:33
         compiled from "D:\czyhqc\site\templates\elsker\operator/machine/breakcreate.html" */ ?>
<?php /*%%SmartyHeaderCode:29131549b8551441418-02617427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b508a41be290be4082523c45c6b3ea035ad694d' => 
    array (
      0 => 'D:\\czyhqc\\site\\templates\\elsker\\operator/machine/breakcreate.html',
      1 => 1410663520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29131549b8551441418-02617427',
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
  <form method="post" action="insert.php" onsubmit="return break_check(this)" name="form1">
  <div class="form2">
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>违章时间：</dt>
	    <dd><input type="text" name="breakrules_date" id="breakrules_date" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_date']) ? $_smarty_tpl->getVariable('list')->value['breakrules_date'] : null);?>
" onclick="calendar.show(this);" readonly="readonly" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>违章金额：</dt>
	    <dd><input type="text" name="breakrules_money" id="breakrules_money" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money'] : null);?>
"/></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>违章车辆：</dt>
	    <dd><input type="text" name="paicheCar" id="paicheCar" size="38" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
" />
	    	关键字：<input type="text" name="paicheCarKey" id="paicheCarKey" size="10" />
	    <input type="hidden" name="paicheCar2" id="paicheCar2" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_CarId']) ? $_smarty_tpl->getVariable('list')->value['breakrules_CarId'] : null);?>
" />
	    <a href="javascript:select_car();"><img src="../../../css/car2.gif" height="15" class="peoplePic" /></a></dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>派车单承租人：</dt>
	    <dd><input type="hidden" name="paiche_id" id="paiche_id" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrulesPaicheId']) ? $_smarty_tpl->getVariable('list')->value['breakrulesPaicheId'] : null);?>
"/>
	    <input type="text" name="paiche_linker" id="paiche_linker" size="38" value="<?php if ((isset($_smarty_tpl->getVariable('list')->value['client_name']) ? $_smarty_tpl->getVariable('list')->value['client_name'] : null)==''){?><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linker']) ? $_smarty_tpl->getVariable('list')->value['paiche_linker'] : null);?>
<?php }else{ ?><?php echo (isset($_smarty_tpl->getVariable('list')->value['client_name']) ? $_smarty_tpl->getVariable('list')->value['client_name'] : null);?>
<?php }?>" readonly="readonly" onFocus="this.blur()" />
	    &nbsp;<input type="button" value="选择派车单" name="seluser" onClick="select_user();">
	    </dd>
	  </dl>
	  <dl class="lineD">
	    <dt>违章驾驶员：</dt>
	    <dd><input type="text" name="paicheDriver" id="paicheDriver" size="18" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['siji']) ? $_smarty_tpl->getVariable('list')->value['siji'] : null);?>
" />
	    <input type="hidden" name="paicheDriver2" id="paicheDriver2" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_DriverID']) ? $_smarty_tpl->getVariable('list')->value['breakrules_DriverID'] : null);?>
" />
	    关键字：<input type="text" name="paicheDriverKey" id="paicheDriverKey" size="10" />
	    <a href="javascript:select_driver();"><img src="../../../css/driver.gif" height="15" class="peoplePic" /></a></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>用车时间：</dt>
	    <dd><input type="text" name="paiche_startDate" id="paiche_startDate" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate'] : null);?>
" readonly="readonly" onFocus="this.blur()"/>到
	    <input type="text" name="paiche_endDate" id="paiche_endDate" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_endDate']) ? $_smarty_tpl->getVariable('list')->value['paiche_endDate'] : null);?>
" readonly="readonly" onFocus="this.blur()"/>
	    </dd>
	  </dl>
	  <dl class="lineD">
	    <dt>违章备注：</dt>
	    <dd><textarea name="breakrules_remarks" cols="40" rows="5"><?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_remarks']) ? $_smarty_tpl->getVariable('list')->value['breakrules_remarks'] : null);?>
</textarea></dd>
	  </dl>
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" /><b> 注：<span class="red">*</span>为必填项</b>
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_id']) ? $_smarty_tpl->getVariable('list')->value['breakrules_id'] : null);?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  </form>
</div>
<script>
function select_driver(){
	var key=$("#paicheDriverKey").val();
	demo_iframe('../business/selectemp.php?sel_type=d&key='+key,'选择驾驶员',650,380,'login_js');
}
function select_car(){
	var key=$("#paicheCarKey").val();
	demo_iframe('../business/selectemp.php?sel_type=c&key='+key,'选择车辆',650,380,'login_js');
}
function select_user(){
	if ($("#breakrules_date").val()==""){
		alert("请先选择违章时间！");
		$("#breakrules_date").focus();
		return false;
	}
	if ($("#paicheCar").val()=="" && $("#paicheCar2").val()==""){
		alert("请先选择违章车辆或者输入车牌号！");
		$("#paicheCar").focus();
		return false;
	}
	demo_iframe('../business/selectemp.php?sel_type=f&key='+$("#breakrules_date").val()+"&key2="+$("#paicheCar2").val()+"&key1="+$("#paicheCar").val(),'选择承租人',950,480,'login_js');
}
</script>
</body>
</html>