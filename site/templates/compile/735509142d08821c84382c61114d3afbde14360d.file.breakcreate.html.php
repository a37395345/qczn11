<?php /* Smarty version Smarty-3.0.4, created on 2018-03-17 11:12:26
         compiled from "D:\web\site\templates\elsker\operator/machine/breakcreate.html" */ ?>
<?php /*%%SmartyHeaderCode:79505aac879aa12f92-95401702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '735509142d08821c84382c61114d3afbde14360d' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/machine/breakcreate.html',
      1 => 1521255713,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79505aac879aa12f92-95401702',
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
<script type="text/javascript" src="../../../js/My97DatePicker/WdatePicker.js"></script>
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
	    <dt>违章车辆：</dt>
	    <dd><input type="text" name="paicheCar" id="paicheCar" size="38" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
" readonly/>
	    <input type="hidden" name="paicheCar2" id="paicheCar2" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_CarId']) ? $_smarty_tpl->getVariable('list')->value['breakrules_CarId'] : null);?>
" />
	    <!-- 	关键字：<input type="text" name="paicheCarKey" id="paicheCarKey" size="10" />
	    <a href="javascript:select_car();"><img src="../../../css/car2.gif" height="15" class="peoplePic" /></a> --></dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>违章时间：</dt>
	    <dd><input type="text" name="breakrules_date" id="breakrules_date" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_date']) ? $_smarty_tpl->getVariable('list')->value['breakrules_date'] : null);?>
" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" readonly="readonly" /></dd>
	  </dl>
	  <dl class="lineD">
		<dt><span class="redstar">*</span>违章项目：</dt>
		<dd><select name="breakrules_item" id="breakrules_item">
	                  <option value="">请选择</option>
	                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('itemlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['item_name']) ? $_smarty_tpl->tpl_vars['rows']->value['item_name'] : null);?>
" at="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['item_money1']) ? $_smarty_tpl->tpl_vars['rows']->value['item_money1'] : null);?>
#<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['item_money2']) ? $_smarty_tpl->tpl_vars['rows']->value['item_money2'] : null);?>
#<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['item_scope']) ? $_smarty_tpl->tpl_vars['rows']->value['item_scope'] : null);?>
#<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['item_money4']) ? $_smarty_tpl->tpl_vars['rows']->value['item_money4'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['breakrules_item']) ? $_smarty_tpl->getVariable('list')->value['breakrules_item'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['item_name']) ? $_smarty_tpl->tpl_vars['rows']->value['item_name'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['item_name']) ? $_smarty_tpl->tpl_vars['rows']->value['item_name'] : null);?>
</option>
	                  <?php }} ?>
	              </select>
		</dd>
	</dl>
	<dl class="lineD">
	    <dt><span class="redstar">*</span>违章处罚：</dt>
	    <dd>违章款：<input type="text" name="breakrules_money1" id="breakrules_money1" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money1']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money1'] : null);?>
" size="4" readonly/>&nbsp;&nbsp;&nbsp;&nbsp;
    	手续费：<input type="text" name="breakrules_money2" id="breakrules_money2" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money2']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money2'] : null);?>
" size="4" readonly/>&nbsp;&nbsp;&nbsp;&nbsp;
    	扣分：<input type="text" name="breakrules_money3" id="breakrules_money3" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money3']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money3'] : null);?>
" size="1" readonly/>=<input type="text" name="breakrules_money4" id="breakrules_money4" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money4']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money4'] : null);?>
" size="4" readonly/>元
	    </dd>
	</dl>
	<dl class="lineD">
	    <dt><span class="redstar">*</span>违章总金额：</dt>
	    <dd><input type="text" name="breakrules_money" id="breakrules_money" size="4"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money'] : null);?>
" readonly="readonly"/>元</dd>
	</dl>
	<!-- 
	<dl class="lineD">
	    <dt>违章驾驶员：</dt>
	    <dd><input type="text" name="paicheDriver" id="paicheDriver" size="18" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['siji']) ? $_smarty_tpl->getVariable('list')->value['siji'] : null);?>
" />
	    <input type="hidden" name="paicheDriver2" id="paicheDriver2" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_DriverID']) ? $_smarty_tpl->getVariable('list')->value['breakrules_DriverID'] : null);?>
" />
	    关键字：<input type="text" name="paicheDriverKey" id="paicheDriverKey" size="10" />
	    <a href="javascript:select_driver();"><img src="../../../css/driver.gif" height="15" class="peoplePic" /></a></dd>
	</dl> -->
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
  <input type="hidden" name="search_car" value="<?php echo $_smarty_tpl->getVariable('search_car')->value;?>
" />
  </form>
</div>
<script>
$(document).ready(function(){
	$('#breakrules_item').change(function(){
	    var p1=$(this).children('option:selected').val();
	    if (p1==""){
		
	    }else{
			p2=$(this).children('option:selected').attr("at");
			var arrMoney = p2.split('#');
			$("#breakrules_money1").val(arrMoney[0]);
			$("#breakrules_money2").val(arrMoney[1]);
			$("#breakrules_money3").val(arrMoney[2]);
			$("#breakrules_money4").val(arrMoney[3]);
			cal();
	    }
	});
	$("#breakrules_money3").live('input propertychange',function(){
		if ($("#breakrules_money3").val()=="" || $("#breakrules_money3").val()==0){
			$("#breakrules_money4").val("0");
		}else{
			var scope=$(this).val();
			$("#breakrules_money4").val(parseInt(scope)*150);
		}
		cal();
	});
	$("#breakrules_money1,#breakrules_money2,#breakrules_money4").live('input propertychange',function(){
		cal();
	});
});
function cal(){
	var a=b=c=0;
	if ($("#breakrules_money1").val()!="" || $("#breakrules_money1").val()!=0){
		a=$("#breakrules_money1").val();
	}
	if ($("#breakrules_money2").val()!="" || $("#breakrules_money2").val()!=0){
		b=$("#breakrules_money2").val();
	}
	if ($("#breakrules_money4").val()!="" || $("#breakrules_money4").val()!=0){
		c=$("#breakrules_money4").val();
	}
	$("#breakrules_money").val(parseInt(a)+parseInt(b)+parseInt(c));
}
function select_driver(){
	var key=$("#paicheDriverKey").val();
	demo_iframe('../business/selectemp.php?sel_type=d&key='+key,'选择驾驶员',650,380,'login_js');
}
function select_car(){
	var key=$("#paicheCarKey").val();
	demo_iframe('../machine/selectcar.php?sel_type=c&key='+key,'选择车辆',650,380,'login_js');
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