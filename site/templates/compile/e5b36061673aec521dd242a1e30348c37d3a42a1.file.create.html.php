<?php /* Smarty version Smarty-3.0.4, created on 2014-09-21 19:04:57
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/finance/refuel/create.html" */ ?>
<?php /*%%SmartyHeaderCode:9015541eb0d95a2634-67824643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5b36061673aec521dd242a1e30348c37d3a42a1' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/finance/refuel/create.html',
      1 => 1411281798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9015541eb0d95a2634-67824643',
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
<link href="../../../../css/style.css" rel="stylesheet" type="text/css">
<link href="../../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<script type="text/javascript" src="../../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<script type="text/javascript" src="../../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../../js/check_form.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit"><?php if ($_smarty_tpl->getVariable('task')->value=="insert"){?>添加<?php }elseif($_smarty_tpl->getVariable('task')->value=="update"){?>编辑<?php }?></div>  
  <form method="post" action="insert.php" onsubmit="return refuel_check(this)" name="form1">
  <div class="form2">
	  	<dl class="lineD">
	    <dt><span class="redstar">*</span>选择加油车辆：</dt>
	    <dd><input type="text" name="paicheCar" id="paicheCar" size="38" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
" /> 
	         <input type="button" value="清 空" onClick="clearValue('paicheCar','paicheCar2')" />&nbsp;
	         关键字：<input type="text" name="paicheCarKey" id="paicheCarKey" size="10" />
	    <input type="hidden" name="paicheCar2" id="paicheCar2" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_id']) ? $_smarty_tpl->getVariable('list')->value['car_id'] : null);?>
" /><input type="hidden" name="shunt" id="shunt" value="" />
	    <a href="javascript:select_car();"><img src="../../../../css/car2.gif" height="15" class="peoplePic" /></a></dd>
	    </dl>
	    <dl class="lineD">
	    <dt><span class="redstar">*</span>加油日期：</dt>
	    <dd><input type="text" name="refuel_date" id="refuel_date" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['refuel_date']) ? $_smarty_tpl->getVariable('list')->value['refuel_date'] : null);?>
" onclick="calendar.show(this);" readonly="readonly" /></dd>
	    </dl>
	    <dl class="lineD">
		  <dt><span class="redstar">*</span>加油数量：</dt>
		  <dd><input type="text" name="refuel_number" id="refuel_number" size="6" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['refuel_number']) ? $_smarty_tpl->getVariable('list')->value['refuel_number'] : null);?>
" />升</dd>
		</dl>
		<dl class="lineD">
		  <dt><span class="redstar">*</span>加油金额：</dt>
		  <dd><input type="text" name="refuel_money" id="refuel_money" size="8" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['refuel_money']) ? $_smarty_tpl->getVariable('list')->value['refuel_money'] : null);?>
" />元</dd>
		</dl>
	  	<dl class="lineD">
		  <dt><span class="redstar">*</span>加油人：</dt>
		  <dd><input type="text" name="paicheDriver" id="paicheDriver" size="18" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['refuel_man']) ? $_smarty_tpl->getVariable('list')->value['refuel_man'] : null);?>
" />
			         关键字：<input type="text" name="paicheDriverKey" id="paicheDriverKey" size="10" />
			    <input type="hidden" name="paicheDriver2" id="paicheDriver2" value="" />
			    <a href="javascript:select_driver();"><img src="../../../../css/driver.gif" height="15" class="peoplePic" /></a>
		  </dd>
		</dl>
		<dl class="lineD">
		  <dt>车辆公里数：</dt>
		  <dd><input type="text" name="refuel_km" size="8" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['refuel_km']) ? $_smarty_tpl->getVariable('list')->value['refuel_km'] : null);?>
" />公里</dd>
		</dl>
		<dl class="lineD">
		  <dt>备注：</dt>
		  <dd><textarea name="refuel_remarks" cols="60" rows="3"><?php echo (isset($_smarty_tpl->getVariable('list')->value['refuel_remarks']) ? $_smarty_tpl->getVariable('list')->value['refuel_remarks'] : null);?>
</textarea></dd>
		</dl>
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" /><b> 注：<span class="red">*</span>为必填项</b>
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['refuel_id']) ? $_smarty_tpl->getVariable('list')->value['refuel_id'] : null);?>
" />
  <input type="hidden" name="uids" value="<?php echo $_smarty_tpl->getVariable('uids')->value;?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  </form>
</div>
<!-->
<script>
function select_car(){
	var key=$("#paicheCarKey").val();
	demo_iframe('../../business/selectemp.php?sel_type=c&key='+key,'选择车辆',650,380,'login_js');
}
function select_driver(){
	var key=$("#paicheDriverKey").val();
	
	demo_iframe('../../business/selectemp.php?sel_type=d&item=2'+'&key='+key,'选择员工',650,380,'login_js');
}

</script>
<!-->
</body>
</html>