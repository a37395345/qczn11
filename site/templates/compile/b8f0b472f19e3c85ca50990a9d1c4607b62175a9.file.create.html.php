<?php /* Smarty version Smarty-3.0.4, created on 2014-09-15 08:50:22
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/finance/recharge/create.html" */ ?>
<?php /*%%SmartyHeaderCode:29490541637ce640586-12671195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8f0b472f19e3c85ca50990a9d1c4607b62175a9' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/finance/recharge/create.html',
      1 => 1410742216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29490541637ce640586-12671195',
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
<script type="text/javascript" src="../../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<script type="text/javascript" src="../../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../../js/check_form.js"></script>

</head>
<body>
<div class="so_main">
  <div class="page_tit">添加</div>  
  <form method="post" action="insert.php" onsubmit="return recharge_check(this)" name="form1">
  <div class="form2">
	  	<dl class="lineD">
	      <dt><span class="redstar">*</span>客户名称：</dt>
	      <dd>
	        <input type="text" name="paiche_name" id="paiche_name" size="30" onClick="showCom()" />&nbsp;
	        	当前余额：<input type="text" name="nowMoney" id="nowMoney" size="3" value="" readonly="readonly" />
	        <input type="hidden" name="paiche_name2" id="paiche_name2"  />
	        <ul class="sel" id="comul" onMouseOver="nameIsOut=false" onMouseOut="nameIsOut=true">
		  </dd>
	    </dl>
	  	<dl class="lineD">
		  <dt><span class="redstar">*</span>充值金额：</dt>
		  <dd><input type="text" name="recharge_money" id="recharge_money" size="10" /></dd>
		</dl>
		<dl class="lineD">
			<dt><span class="redstar">*</span>支付方式：</dt>
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
			<dt>收款账户：</dt>
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
		<dl class="lineD">
		  <dt>进帐票号：</dt>
		  <dd><input type="text" name="recharge_bank" id="recharge_bank" size="16" /></dd>
		</dl>
		<dl class="lineD">
		  <dt><span class="redstar">*</span>进帐时间：</dt>
		  <dd><input type="text" name="recharge_remitTime" id="recharge_remitTime" size="16" onClick="calendar.show(this);" readonly="readonly" />
		  	<select name="recharge_Hour" id="recharge_Hour">
            <option value="00" >-请选择小时-</option>
	        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('hourlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	            <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['hour']) ? $_smarty_tpl->tpl_vars['rows']->value['hour'] : null);?>
" ><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['hour']) ? $_smarty_tpl->tpl_vars['rows']->value['hour'] : null);?>
点</option>
	        <?php }} ?>
	        </select>
	        <select name="recharge_Minute" id="recharge_Minute">
	        	<option value="00" >-请选择分钟-</option>
	        	<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('minuelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
		            <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['minute']) ? $_smarty_tpl->tpl_vars['rows']->value['minute'] : null);?>
" ><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['minute']) ? $_smarty_tpl->tpl_vars['rows']->value['minute'] : null);?>
分</option>
		        <?php }} ?>
	        </select>
	        <input type="hidden" id="p_remitDate" name="p_remitDate" value="" />
		  </dd>
		</dl>
		<dl class="lineD">
		  <dt>备注：</dt>
		  <dd><textarea name="recharge_explanation" id="recharge_explanation" cols="60" rows="3"></textarea></dd>
		</dl>
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" /><b> 注：<span class="red">*</span>为必填项</b>
    </div>
  </div>
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  </form>
</div>
<!-->
<script>
var nameIsOut=true;//初始化值，便于判断用户是否在DIV以外点击，搜索公司名称时使用
document.onmousedown=function(){
	if(nameIsOut==true){
		$('#comul').css('display','none');
	}
}
$(document).ready(function(){
	/*
	$("#payments").live('change',function(){
		if ($('#payments option:selected').val()){
			var st=$('#payments option:selected').text();
			if (st.indexOf("现金") >= 0){
				$("#bank").css("display","none");
			}else{
				$("#bank").removeAttr("style");
			}
		}else{
			$("#bank").css("display","none");
		}
	});
	*/
	$('#paiche_name').bind('input propertychange', function() {
		$("#paiche_name2").val("");
		
		$.ajax({
			  type:'POST',
			  url:'../../business/checkname.php',
			  data:{"paiche_name":$("#paiche_name").val()},
			  dataType:"json",
			  cache: false,
			  error: function(){
				  $("#comul").html("error！");
				  $("#comul").show();
			  },
			  success:function(jsonmsg){
				  $("#comul").html(jsonmsg.mes);	  
			  }
		});
	});
});
function changeNameId(name,id,linker,phone,money){
	$("#paiche_name").val(name);
	$("#paiche_name2").val(id);
	$("#nowMoney").val(money);
	$('#comul').css('display','none');
}
function showCom(){
	if($('#comul').css("display")=="none"){
		$('#comul').css('display','block');
	}else{
		$('#comul').css('display','none');
	}
}
</script>
<!-->
</body>
</html>