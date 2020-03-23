<?php /* Smarty version Smarty-3.0.4, created on 2019-10-16 10:52:52
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/machine/account.html" */ ?>
<?php /*%%SmartyHeaderCode:5470920985da686049736f2-05427680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8540c44277fbae56ca6d6cb97503471dc3d5f294' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/machine/account.html',
      1 => 1569749226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5470920985da686049736f2-05427680',
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
<script type="text/javascript" src="../../../js/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
</head>
<body>
<form method="post" action="insert.php" name="form1" id="form1">
<div class="so_main">
<input type="hidden" name="task" value="account_accept" />
<input type="hidden" name="bid" id="bid" value="<?php echo $_smarty_tpl->getVariable('bid')->value;?>
" />
<input type="hidden" name="pid" id="pid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
" />
<div class="form2">
	<dl class="lineD">
		<dt>违章车辆：</dt>
		<dd>苏D<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
&nbsp;&nbsp;&nbsp;&nbsp;合计金额：<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money'] : null);?>
<input type="hidden" name="total" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money'] : null);?>
"/>
		&nbsp;&nbsp;&nbsp;&nbsp;实际合计金额：<input type="text" name="total_infact" id="total_infact" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money'] : null)-(isset($_smarty_tpl->getVariable('list')->value['breakrules_money2']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money2'] : null);?>
" size="5" readonly/></dd>
	</dl>
	<dl class="lineD">
		<dt>违章项目：</dt>
		<dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_item']) ? $_smarty_tpl->getVariable('list')->value['breakrules_item'] : null);?>

		</dd>
	</dl>
	<dl class="lineD">
		<dt>违章金额：</dt>
		<dd><input type="text" name="total1" id="total1" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money1']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money1'] : null);?>
" size="5" readonly/>
		&nbsp;&nbsp;&nbsp;&nbsp;实际违章金额：<input type="text" name="total1_infact" id="total1_infact" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money1']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money1'] : null);?>
" size="5"/>
		</dd>
	</dl>
	
	<dl class="lineD">
		<dt>违章手续费：</dt>
		<dd><input type="text" name="total2" id="total2" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money2']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money2'] : null);?>
" size="5" readonly/>
		&nbsp;&nbsp;&nbsp;&nbsp;实际违章手续费：<input type="text" name="total2_infact" id="total2_infact" value="0" size="5" readonly/>
		其他收入类型：<input type="radio" name="change_class" id="change_class" value="违章手续费" checked/>违章手续费
		</dd>
	</dl>
	<dl class="lineD">
		<dt>违章扣分：</dt>
		<dd><input type="text" name="total3" id="total3" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money3']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money3'] : null);?>
" size="5" readonly/>
		&nbsp;&nbsp;&nbsp;&nbsp;实际违章扣分：<input type="text" name="total3_infact" id="total3_infact" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money3']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money3'] : null);?>
" size="5"/>
		</dd>
	</dl>
	<dl class="lineD">
		<dt>金额抵扣分：</dt>
		<dd><input type="text" name="total4" id="total4" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money4']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money4'] : null);?>
" size="5" readonly/>
		其他收入类型：<input type="radio" name="other_class" id="other_class" value="违章扣分费" checked/>违章扣分费
		  
		</dd>
	</dl>
	<dl class="lineD">
			<dt>其他收入收款方式：</dt>
			<dd><select name="payments_to" id="payments_to">
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
		         收款 账户：<select name="bank_to" id="bank_to">
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
	<dl class="lineD">
		<dt>实际金额抵扣分：</dt>
		<dd><input type="text" name="total4_infact" id="total4_infact" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money4']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money4'] : null);?>
" size="5"/>
		费用报销类型：<input type="radio" name="baoxiao_type" id="baoxiao_type" value="违章处理" checked>违章处理
		  
		</dd>
	</dl>
	<dl class="lineD">
		  <dt>报销人/处理人：</dt>
		  <dd><input type="text" name="paicheDriver" id="paicheDriver" size="18" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['emp_name']) ? $_smarty_tpl->getVariable('list')->value['emp_name'] : null);?>
" />
			         关键字：<input type="text" name="paicheDriverKey" id="paicheDriverKey" size="10" />
			    <input type="hidden" name="paicheDriver2" id="paicheDriver2" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_emp']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_emp'] : null);?>
" />
			    <a href="javascript:select_driver();"><img src="../../../css/driver.gif" height="15" class="peoplePic" /></a>
		  </dd>
	</dl>
	<dl class="lineD">
	        <dt>指定审核人</dt>
	        <dd><input type="text" name="driveDriver_9" id="driveDriver_9" size="18" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['auditor_empname']) ? $_smarty_tpl->getVariable('list')->value['auditor_empname'] : null);?>
" />
			         关键字：<input type="text" name="searchKey" id="searchKey" size="10" />
			    <input type="hidden" name="driveDriver2_9" id="driveDriver2_9" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_auditor']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_auditor'] : null);?>
" />
			    <a href="javascript:select_auditor();"><img src="../../../css/driver.gif" height="15" class="peoplePic" /></a></dd>
    </dl>
	
	<dl class="lineD">
		<dt>费用报销付款方式：</dt>
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
	              付款 账户：<select name="bank" id="bank">
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
	<dl class="lineD">
		  <dt>报销说明：</dt>
		  <dd><textarea name="baoxiao_content" id="baoxiao_content" cols="90" rows="3"><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_content']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_content'] : null);?>
</textarea></dd>
	</dl>
	
	<dl class="lineD">
	    <dt><span class="redstar">*</span>处理时间：</dt>
	    <dd><input type="text" name="breakrules_endtimes" id="breakrules_endtimes" size="16" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" readonly="readonly" /></dd>
	</dl>
</div>

  <div class="Toolbar_inbox">
    <a href="javascript:void(0);" class="btn_a" onclick="ok();"><span>确定</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="closebox();"><span>关闭</span></a>   	
  </div> 
</div>
</form>

<!-->
<script>
var nTotal=0;
$(document).ready(function(){
	$("#total1_infact,#total2_infact,#total4_infact").live('input propertychange',function(){
		nTotal= $('#total1_infact').val()=="" ? 0 : parseFloat($('#total1_infact').val());
		nTotal+= $('#total2_infact').val()=="" ? 0 : parseFloat($('#total2_infact').val());
		nTotal+= $('#total4_infact').val()=="" ? 0 : parseFloat($('#total4_infact').val());
		$("#total_infact").val(nTotal);
	});
	$("#payments_to").bind("change",function(){
		var selval = $(this).val();
		if (selval!=""){
	    	jQuery("#payments option").each(function (){
		        if($(this).val()==selval){
		            $(this).attr("selected",true);
		            jQuery("#payments").change();
		            return false;
		        }
		     });
	    }
	});
	$("#bank_to").bind("change",function(){
		var selval = $(this).val();
		if (selval!=""){
	    	jQuery("#bank option").each(function (){
		        if($(this).val()==selval){
		            $(this).attr("selected",true);
		            jQuery("#bank").change();
		            return false;
		        }
		     });
	    }
	});
});
function ok(){
	if (!$('#payments_to option:selected').val()){
		alert("请选择收款方式！");
		$('#payments_to').focus();
		return false;
	}
	if (!$('#bank_to option:selected').val()){
		alert("请选择收款账户！");
		$('#bank_to').focus();
		return false;
	}
	if (!$('#paicheDriver').val()){
		alert("请选择报销人！");
		$('#paicheDriver').focus();
		return false;
	}
	if (!$('#driveDriver_9').val()){
		alert("请选择报销审核人！");
		$('#paicheDriver').focus();
		return false;
	}
	if (!$('#payments option:selected').val()){
		alert("请选择付款方式！");
		$('#payments').focus();
		return false;
	}
	if (!$('#bank option:selected').val()){
		alert("请选择付款账户！");
		$('#bank').focus();
		return false;
	}
	if (!$('#breakrules_endtimes').val()){
		alert("请选择违章处理时间！");
		$('#breakrules_endtimes').focus();
		return false;
	}

	if(!confirm('请仔细核对，一旦提交就无法修改了，确定提交吗？')){
		return false;
	}
	
	$("#form1").submit();
	
	//window.parent.window.location.reload();
    //window.parent.window.jBox.close();
}


function closebox(){
	window.parent.window.jBox.close();
}
function select_driver(){
	var key=$("#paicheDriverKey").val();
	demo_iframe('../business/selectemp.php?sel_type=d&item=2&key='+key,'选择处理人',650,380,'login_js');
}
function select_auditor(){
	var key=$("#searchKey").val();
	var item=$("#item").val();
	var stitle="报销审核人";
	demo_iframe('../business/selectemp.php?sel_type=g&item=3&target_id=9&key='+key,'选择'+stitle,650,380,'login_js');
}
</script>
<!-->
</body>
</html>