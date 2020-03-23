<?php /* Smarty version Smarty-3.0.4, created on 2014-09-19 14:19:44
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/maint/create.html" */ ?>
<?php /*%%SmartyHeaderCode:2867541bcb00503aa2-99835393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d6e2a74c666ea1a41a8ceba3ec5e91711f9d483' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/maint/create.html',
      1 => 1411096498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2867541bcb00503aa2-99835393',
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
  <div class="page_tit"><?php if ($_smarty_tpl->getVariable('task')->value=="insert"){?>添加<?php }elseif($_smarty_tpl->getVariable('task')->value=="update"){?>编辑<?php }else{ ?>报销<?php }?></div>  
  <form method="post" action="insert.php" onsubmit="return maint_check(this)" name="form1">
  <div class="form2">
	  <?php if ($_smarty_tpl->getVariable('task')->value=="bao_accept"){?>
	  <dl class="lineD">
	    <dt>维修车辆：</dt>
	    <dd>苏D<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>日期：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['maintenance_date']) ? $_smarty_tpl->getVariable('list')->value['maintenance_date'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>维修费：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['maintenance_money']) ? $_smarty_tpl->getVariable('list')->value['maintenance_money'] : null);?>
元</dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>报销金额：</dt>
	    <dd><input type="text" name="baoxiao_money" id="baoxiao_money" size="3" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['maintenance_money']) ? $_smarty_tpl->getVariable('list')->value['maintenance_money'] : null);?>
"/>元</dd>
	  </dl>
	  <dl class="lineD">
			<dt><span class="redstar">*</span>付款方式：</dt>
			<dd><select name="payments" id="payments">
		                  <option value="">请选择</option>
		                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('paymentslist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
		                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_id']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_id'] : null);?>
" rel="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_fee']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_fee'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_name']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_name'] : null);?>
</option>
		                  <?php }} ?>
		              </select>
			</dd>
		</dl>
		<dl class="lineD">
			<dt><span class="redstar">*</span>付款 账户：</dt>
			<dd><select name="bank" id="bank">
		                  <option value="">请选择</option>
		                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('banklist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
		                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bank_id']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_id'] : null);?>
" ><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bank_name']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_name'] : null);?>
</option>
		                  <?php }} ?>
		              </select>
			</dd>
		</dl>
	  <?php }else{ ?>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>选择维修车辆：</dt>
	    <dd><input type="text" name="paicheCar" id="paicheCar" size="38" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
" /> 
	         <input type="button" value="清 空" onClick="clearValue('paicheCar','paicheCar2')" />&nbsp;
	         关键字：<input type="text" name="paicheCarKey" id="paicheCarKey" size="10" />
	    <input type="hidden" name="paicheCar2" id="paicheCar2" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_id']) ? $_smarty_tpl->getVariable('list')->value['car_id'] : null);?>
" /><input type="hidden" name="shunt" id="shunt" value="" />
	    <a href="javascript:select_car();"><img src="../../../css/car2.gif" height="15" class="peoplePic" /></a></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>类型：</dt>
	    <dd><input type="radio" name="maintenance_type" value="保养" <?php if ((isset($_smarty_tpl->getVariable('list')->value['maintenance_type']) ? $_smarty_tpl->getVariable('list')->value['maintenance_type'] : null)=="保养"){?>checked<?php }?> />保养&nbsp;&nbsp;<input type="radio" name="maintenance_type" value="维修" <?php if ((isset($_smarty_tpl->getVariable('list')->value['maintenance_type']) ? $_smarty_tpl->getVariable('list')->value['maintenance_type'] : null)=="维修"){?>checked<?php }?> />维修</dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>日期：</dt>
	    <dd><input type="text" name="maintenance_date" id="maintenance_date" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['maintenance_date']) ? $_smarty_tpl->getVariable('list')->value['maintenance_date'] : null);?>
" onclick="calendar.show(this);" readonly="readonly" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>本次公里数：</dt>
	    <dd><input type="text" name="maintenance_km" id="maintenance_km" size="10" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['maintenance_km']) ? $_smarty_tpl->getVariable('list')->value['maintenance_km'] : null);?>
"  /></dd>
	  </dl>
	  <?php if ($_smarty_tpl->getVariable('task')->value=="update"&&(isset($_smarty_tpl->getVariable('list')->value['maintenance_type']) ? $_smarty_tpl->getVariable('list')->value['maintenance_type'] : null)=="保养"){?>
	  <dl class="lineD" id="divnextdate">
	  <?php }else{ ?>
	  <dl class="lineD" style="display:none;" id="divnextdate">
	  <?php }?>
	    <dt>下次保养日期和公里数：</dt>
	    <dd><input type="text" name="maintenance_nextdate" id="maintenance_nextdate" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['maintenance_nextdate']) ? $_smarty_tpl->getVariable('list')->value['maintenance_nextdate'] : null);?>
" onclick="calendar.show(this);" readonly="readonly" />/<input type="text" name="maintenance_nextkilo" id="maintenance_nextkilo" size="3" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['maintenance_nextkilo']) ? $_smarty_tpl->getVariable('list')->value['maintenance_nextkilo'] : null);?>
"/>公里</dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>维修费：</dt>
	    <dd>工时费<input type="text" name="maintenance_workhourmoney" id="maintenance_workhourmoney" size="3" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['maintenance_workhourmoney']) ? $_smarty_tpl->getVariable('list')->value['maintenance_workhourmoney'] : null);?>
"/>+配件材料费<input type="text" name="maintenance_fittingsmoney" id="maintenance_fittingsmoney" size="3" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['maintenance_fittingsmoney']) ? $_smarty_tpl->getVariable('list')->value['maintenance_fittingsmoney'] : null);?>
"/>=合计费用<input type="text" name="maintenance_money" id="maintenance_money" size="3" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['maintenance_money']) ? $_smarty_tpl->getVariable('list')->value['maintenance_money'] : null);?>
"/>元</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>配件材料：</dt>
	    <dd>
	    <table width="70%" border="0" cellspacing="0" cellpadding="0" align="left">
			<tr>
			<th>名称</th>
			<th>品牌</th>
			<th>型号/规格</th>
			<th>数量</th>
			<th>计量单位</th>
			<th>单价</th>
			<th>金额</th>
			</tr>
		<?php if ($_smarty_tpl->getVariable('task')->value=="update"){?>
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('list')->value['fitting_list']) ? $_smarty_tpl->getVariable('list')->value['fitting_list'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
		<?php $_smarty_tpl->tpl_vars['total_sum'] = new Smarty_variable($_smarty_tpl->getVariable('total_sum')->value+(isset($_smarty_tpl->tpl_vars['row']->value['fitting_sum']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_sum'] : null), null, null);?>
		<?php $_smarty_tpl->tpl_vars['total_num'] = new Smarty_variable($_smarty_tpl->getVariable('total_num')->value+(isset($_smarty_tpl->tpl_vars['row']->value['fitting_num']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_num'] : null), null, null);?>
			<tr>
			  <td><input type="hidden" name="fitting_id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_id']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_id'] : null);?>
">
			  <input type='text' name='fitting_name[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_name']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_name'] : null);?>
" size='12' class="noborder" /></td>
			  <td><input type='text' name='fitting_brand[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_brand']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_brand'] : null);?>
" size='12' /></td>
			  <td><input type='text' name='fitting_model[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_model']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_model'] : null);?>
" size='12' /></td>
			  <td><input type='text' name='fitting_num[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_num']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_num'] : null);?>
" size='2' /></td>
			  <td><input type='text' name='fitting_unit[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_unit']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_unit'] : null);?>
" size='2' /></td>
			  <td><input type='text' name='fitting_price[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_price']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_price'] : null);?>
" size='3' /></td>
			  <td><input type='text' name='fitting_sum[]' value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_sum']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_sum'] : null);?>
" size='4' /></td>
			</tr>
		<?php }} ?>
		<?php }?>
		
		<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['total']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['name'] = 'total';
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['loop'] = is_array($_loop=8) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['total']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['total']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['total']['total']);
?>
			<tr>
			  <td><input type='text' name='fitting_name[]' value="" size='12' class="noborder" /></td>
			  <td><input type='text' name='fitting_brand[]' value="" size='12' /></td>
			  <td><input type='text' name='fitting_model[]' value="" size='12' /></td>
			  <td><input type='text' name='fitting_num[]' value="" size='2' /></td>
			  <td><input type='text' name='fitting_unit[]' value="" size='2' /></td>
			  <td><input type='text' name='fitting_price[]' value="" size='3' /></td>
			  <td><input type='text' name='fitting_sum[]' value="" size='4' /></td>
			</tr>
		<?php endfor; endif; ?>
		<tr>
		  <th>合计</th>
		  <td colspan="2">&nbsp;</td>
		  <td><input type='text' name='total_num' id='total_num' value="<?php echo $_smarty_tpl->getVariable('total_num')->value;?>
" size='2' /></td>
		  <td colspan="2">&nbsp;</td>
		  <td><input type='text' name='total_sum' id='total_sum' value="<?php echo $_smarty_tpl->getVariable('total_sum')->value;?>
" size='2' /></td>
		</tr>
		</table>
	    </dd>
	  </dl>
	  <dl class="lineD">
	    <dt>备注：</dt>
	    <dd><textarea name="maintenance_remark" cols="60" rows="3"><?php echo (isset($_smarty_tpl->getVariable('list')->value['maintenance_remark']) ? $_smarty_tpl->getVariable('list')->value['maintenance_remark'] : null);?>
</textarea></dd>
	  </dl>
    <?php }?>
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" /><b> 注：<span class="red">*</span>为必填项</b>
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['maintenance_id']) ? $_smarty_tpl->getVariable('list')->value['maintenance_id'] : null);?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  </form>
</div>
<!-->
<script>
$(document).ready(function(){
	$("input[name=fitting_num[]]").live('input propertychange',function(){
		calTotal();
	});
	$("input[name=fitting_price[]]").live('input propertychange',function(){
		calTotal();
	});
	$("input[name=maintenance_type]").live('click',function(){
		if ($(this).val()=="保养"){
			$("#divnextdate").removeAttr("style");
		}else{
			$("#divnextdate").css("display","none");
		}
	});
	
});
function calTotal(){
	var tmpSum=0;
	var Total_Num=0;
	var Total_Sum=0; 
	$.each($('input[name=fitting_num[]]'), function(i, n){
		if ($('input[name=fitting_price[]]').eq(i).val()!="" && $(n).val()!=""){
			tmpSum=parseFloat($('input[name=fitting_price[]]').eq(i).val())*parseFloat($(n).val());
			Total_Num+= parseFloat($(n).val());
			Total_Sum+=tmpSum;
			$('input[name=fitting_sum[]]').eq(i).val(tmpSum);
		}
	});
	$("#total_num").val(Total_Num);
	$("#total_sum").val(Total_Sum);
	if ($("#maintenance_fittingsmoney").val()=="" || $("#maintenance_fittingsmoney").val()==0){
		$("#maintenance_fittingsmoney").val(Total_Sum);
	}
	
	$("#maintenance_money").val(Total_Sum+($("#maintenance_workhourmoney").val()==""? 0 : parseFloat($("#maintenance_workhourmoney").val())));
}
function select_car(){
	var key=$("#paicheCarKey").val();
	demo_iframe('../business/selectemp.php?sel_type=c&key='+key,'选择车辆',650,380,'login_js');
}
function clearValue(dom1,dom2){
	$("#"+dom1).val("");
	$("#"+dom2).val("");
}
</script>
<!-->
</body>
</html>