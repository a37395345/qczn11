<?php /* Smarty version Smarty-3.0.4, created on 2019-09-30 14:09:23
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/insur/create.html" */ ?>
<?php /*%%SmartyHeaderCode:12718595195d919c1319e3f8-58902002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6057da1f2c82bc33783298c258ea594c5fc339ba' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/insur/create.html',
      1 => 1569749222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12718595195d919c1319e3f8-58902002',
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
  <form method="post" action="insert.php" onsubmit="return insur_check(this)" name="form1">
  <div class="form2">
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>选择投保车辆：</dt>
	    <dd><input type="text" name="paicheCar" id="paicheCar" size="38" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
" /> 
	         <input type="button" value="清 空" onClick="clearValue('paicheCar','paicheCar2')" />&nbsp;
	         关键字：<input type="text" name="paicheCarKey" id="paicheCarKey" size="10" />
	    <input type="hidden" name="paicheCar2" id="paicheCar2" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_id']) ? $_smarty_tpl->getVariable('list')->value['car_id'] : null);?>
" /><input type="hidden" name="shunt" id="shunt" value="" />
	    <a href="javascript:select_car();"><img src="../../../css/car2.gif" height="15" class="peoplePic" /></a></dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>保险类型：</dt>
	    <dd><input type="radio" name="insurance_type" value="商业险" <?php if ((isset($_smarty_tpl->getVariable('list')->value['insurance_type']) ? $_smarty_tpl->getVariable('list')->value['insurance_type'] : null)=="商业险"){?>checked<?php }?> <?php if ($_smarty_tpl->getVariable('task')->value=='update'){?>disabled<?php }?>/>商业险&nbsp;<input type="radio" name="insurance_type" value="交强险" <?php if ((isset($_smarty_tpl->getVariable('list')->value['insurance_type']) ? $_smarty_tpl->getVariable('list')->value['insurance_type'] : null)=="交强险"){?>checked<?php }?> <?php if ($_smarty_tpl->getVariable('task')->value=='update'){?>disabled<?php }?>/>交强险</dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>起始日期：</dt>
	    <dd><input type="text" name="insurance_start" id="insurance_start" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['insurance_start']) ? $_smarty_tpl->getVariable('list')->value['insurance_start'] : null);?>
" onclick="calendar.show(this);" readonly="readonly" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>截止日期：</dt>
	    <dd><input type="text" name="insurance_end" id="insurance_end" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['insurance_end']) ? $_smarty_tpl->getVariable('list')->value['insurance_end'] : null);?>
" onclick="calendar.show(this);" readonly="readonly" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>投保公司：</dt>
	    <dd><input type="text" name="insurance_company" size="30" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['insurance_company']) ? $_smarty_tpl->getVariable('list')->value['insurance_company'] : null);?>
"/></dd>
	  </dl>
	  <dl class="lineD" style="display:none;">
	    <dt></dt>
	    <dd>***********以下是商业险部分*************</dd>
	  </dl>
	  <dl class="lineD" style="display:block;" id="show1_1">
	    <dt>车损险(保额)：</dt>
	    <dd><input type="text" name="insurance_loss" size="10" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['insurance_loss']) ? $_smarty_tpl->getVariable('list')->value['insurance_loss'] : null);?>
"/>元</dd>
	  </dl>
	  <dl class="lineD" style="display:block;" id="show1_2">
	    <dt>三者险(保额)：</dt>
	    <dd><input type="text" name="insurance_respons" size="10" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['insurance_respons']) ? $_smarty_tpl->getVariable('list')->value['insurance_respons'] : null);?>
"/>元</dd>
	  </dl>
	  <dl class="lineD" style="display:block;" id="show1_3">
	    <dt>保费合计：</dt>
	    <dd><input type="text" name="insurance_money" id="insurance_money" size="10" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['insurance_money']) ? $_smarty_tpl->getVariable('list')->value['insurance_money'] : null);?>
"/>元</dd>
	  </dl>
	  <dl class="lineD" style="display:block;" id="show1_4">
	    <dt>优惠折扣：</dt>
	    <dd><input type="text" name="insurance_discount" size="2" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['insurance_discount']) ? $_smarty_tpl->getVariable('list')->value['insurance_discount'] : null);?>
"/>%</dd>
	  </dl>
	  <dl class="lineD" style="display:block;" id="show1_6">
	    <dt>返利：</dt>
	    <dd><input type="text" name="insurance_return" id="insurance_return" size="3" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['insurance_return']) ? $_smarty_tpl->getVariable('list')->value['insurance_return'] : null);?>
"/></dd>
	  </dl>
	  <dl class="lineD" style="display:block;" id="show1_5">
	    <dt>投保险种：</dt>
	    <dd><input type="checkbox" name="insurance_item[]" size="16" value="车损险" <?php if (strstr((isset($_smarty_tpl->getVariable('list')->value['insurance_item']) ? $_smarty_tpl->getVariable('list')->value['insurance_item'] : null),"车损险")){?>checked<?php }?>/>车损险
	    <input type="checkbox" name="insurance_item[]" size="16" value="三者险" <?php if (strstr((isset($_smarty_tpl->getVariable('list')->value['insurance_item']) ? $_smarty_tpl->getVariable('list')->value['insurance_item'] : null),"三者险")){?>checked<?php }?>/>三者险
	    <input type="checkbox" name="insurance_item[]" size="16" value="座位险" <?php if (strstr((isset($_smarty_tpl->getVariable('list')->value['insurance_item']) ? $_smarty_tpl->getVariable('list')->value['insurance_item'] : null),"座位险")){?>checked<?php }?>/>座位险
	    <input type="checkbox" name="insurance_item[]" size="16" value="玻璃险" <?php if (strstr((isset($_smarty_tpl->getVariable('list')->value['insurance_item']) ? $_smarty_tpl->getVariable('list')->value['insurance_item'] : null),"玻璃险")){?>checked<?php }?>/>玻璃险
	    <input type="checkbox" name="insurance_item[]" size="16" value="盗抢险" <?php if (strstr((isset($_smarty_tpl->getVariable('list')->value['insurance_item']) ? $_smarty_tpl->getVariable('list')->value['insurance_item'] : null),"盗抢险")){?>checked<?php }?>/>盗抢险
	    <input type="checkbox" name="insurance_item[]" size="16" value="不计免赔特约险" <?php if (strstr((isset($_smarty_tpl->getVariable('list')->value['insurance_item']) ? $_smarty_tpl->getVariable('list')->value['insurance_item'] : null),"不计免赔特约险")){?>checked<?php }?>/>不计免赔特约险
	    </dd>
	  </dl>
	  <dl class="lineD" style="display:none;">
	    <dt></dt>
	    <dd>***********以下是交强险部分*************</dd>
	  </dl>
	  <dl class="lineD" style="display:none;" id="show2_1">
	    <dt>交强险金额：</dt>
	    <dd><input type="text" name="insurance_mandatory" id="insurance_mandatory" size="10" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['insurance_mandatory']) ? $_smarty_tpl->getVariable('list')->value['insurance_mandatory'] : null);?>
"/>元</dd>
	  </dl>
	  <dl class="lineD" style="display:none;" id="show2_2">
	    <dt>浮动比率：</dt>
	    <dd><input type="text" name="insurance_float" size="2" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['insurance_float']) ? $_smarty_tpl->getVariable('list')->value['insurance_float'] : null);?>
"/>%</dd>
	  </dl>
	  <dl class="lineD" style="display:none;" id="show2_3">
	    <dt>车船税金额：</dt>
	    <dd><input type="text" name="insurance_cartax" id="insurance_cartax" size="10" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['insurance_cartax']) ? $_smarty_tpl->getVariable('list')->value['insurance_cartax'] : null);?>
"/>元</dd>
	  </dl>
	  <dl class="lineD" style="display:none;" id="show2_4">
	    <dt>总金额：</dt>
	    <dd><input type="text" name="insurance_money2" id="insurance_money2" size="10" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['insurance_money2']) ? $_smarty_tpl->getVariable('list')->value['insurance_money2'] : null);?>
"/>元</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>备注：</dt>
	    <dd><textarea name="insurance_remark" cols="40" rows="5"><?php echo (isset($_smarty_tpl->getVariable('list')->value['insurance_remark']) ? $_smarty_tpl->getVariable('list')->value['insurance_remark'] : null);?>
</textarea></dd>
	  </dl>  
    	
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" />
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['insurance_id']) ? $_smarty_tpl->getVariable('list')->value['insurance_id'] : null);?>
" />
  <input type="hidden" name="aaaa" id="aaaa" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['insurance_type']) ? $_smarty_tpl->getVariable('list')->value['insurance_type'] : null);?>
" />
  <input type="hidden" name="task" id="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  </form>
</div>
<!-->
<script>
$(document).ready(function(){
    $("input[name='insurance_type']").bind("click",function(){
		changeshow($(this).val());
    });
    
    $("#insurance_mandatory,#insurance_cartax").live('input propertychange',function(){
		var ntotal=0;
		ntotal+=$("#insurance_mandatory").val()=="" ? 0 : parseFloat($("#insurance_mandatory").val());
		ntotal+=$("#insurance_cartax").val()=="" ? 0 : parseFloat($("#insurance_cartax").val())
		$("#insurance_money2").val(ntotal);
	});
    $("#insurance_money").live('input propertychange',function(){
		if ($(this).val()!=''){
		    aa=$(this).val()=="" ? 0 : parseFloat($(this).val())*0.18/1.06;
		    $("#insurance_return").val(aa.toFixed(2));
		}
    });
    if ($("#task").val()=="update"){
		changeshow($("#aaaa").val());
	}
    
});
function changeshow(sval){
	if (sval=="商业险"){
		    $('#show1_1').css('display','block');
		    $('#show1_2').css('display','block');
		    $('#show1_3').css('display','block');
		    $('#show1_4').css('display','block');
		    $('#show1_5').css('display','block');
		    $('#show1_6').css('display','block');
		    $('#show2_1').css('display','none');
		    $('#show2_2').css('display','none');
		    $('#show2_3').css('display','none');
		    $('#show2_4').css('display','none');
		}else{
		    $('#show1_1').css('display','none');
		    $('#show1_2').css('display','none');
		    $('#show1_3').css('display','none');
		    $('#show1_4').css('display','none');
		    $('#show1_5').css('display','none');
		    $('#show1_6').css('display','none');
		    $('#show2_1').css('display','block');
		    $('#show2_2').css('display','block');
		    $('#show2_3').css('display','block');
		    $('#show2_4').css('display','block');
		}
}
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