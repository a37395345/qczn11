<?php /* Smarty version Smarty-3.0.4, created on 2019-11-12 10:13:56
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/finance/baoxiao/bao.html" */ ?>
<?php /*%%SmartyHeaderCode:174995dca1564a138b3-62333392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a8ff65eac8b9e542be060957fc9f936d5ab72e5' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/finance/baoxiao/bao.html',
      1 => 1571707179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174995dca1564a138b3-62333392',
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
<link rel="stylesheet" type="text/css" href="../../../../css/webuploader.css">
<link rel="stylesheet" type="text/css" href="../../../../css/diyUpload.css">
<script src="../../../../jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<script type="text/javascript" src="../../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../../js/check_form.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
<script type="text/javascript" src="../../../../js/diyUpload/webuploader.html5only.min.js"></script>
<script type="text/javascript" src="../../../../js/diyUpload/diyUpload.js"></script>
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
#box{width:840px; min-height:200px; background:#FF9}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit">违章费用受理</div>  
  <form method="post" action="insert.php" onsubmit="return baoxiao_check(this)" name="form1" enctype="multipart/form-data">
  <div class="form2">
		<dl class="lineD">
	    <dt>违章车辆：</dt>
	    <dd>苏D<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['car_num']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['car_num'] : null);?>
&nbsp;&nbsp;&nbsp;&nbsp;违章时间：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_date']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_date'] : null);?>

		&nbsp;&nbsp;&nbsp;&nbsp;违章项目：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_item']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_item'] : null);?>
</dd>
	    </dl>
		<dl class="lineD">
			<dt>违章处罚：</dt>
			<dd>违章款：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money1']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money1'] : null);?>
元&nbsp;&nbsp;&nbsp;&nbsp;手续费：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money2']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money2'] : null);?>
元&nbsp;&nbsp;&nbsp;&nbsp;
			扣分：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money3']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money3'] : null);?>
分=<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money4']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money4'] : null);?>
元
			&nbsp;&nbsp;&nbsp;&nbsp;违章总金额：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money'] : null);?>
元
			</dd>
		</dl>
		<dl class="lineD">
			<dt>实际违章处理：</dt>
			<dd>实际违章款：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money1_infact']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money1_infact'] : null);?>
元&nbsp;&nbsp;&nbsp;&nbsp;实际手续费：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money2_infact']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money2_infact'] : null);?>
元&nbsp;&nbsp;&nbsp;&nbsp;
			实际扣分：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money3_infact']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money3_infact'] : null);?>
分=<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money4_infact']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money4_infact'] : null);?>
元
			&nbsp;&nbsp;&nbsp;&nbsp;实际违章总金额：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money_infact']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money_infact'] : null);?>
元
			</dd>
		</dl>
	  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('bao_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
	  	<dl class="lineD">
		  <dt><span class="redstar">*</span>费用报销：<input type="hidden" name="uid[]" id="uid_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
" /></dt>
		  <dd>报销人：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
<input type="hidden" name="paicheDriver2[]" id="paicheDriver2_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_emp']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_emp'] : null);?>
" />
		  &nbsp;&nbsp;报销日期：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_date']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_date'] : null);?>
&nbsp;&nbsp;金额：<input type="text" name="baoxiao_money[]" id="baoxiao_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
" size="5" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_money']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_money'] : null);?>
" onFocus="this.blur()"/>
		  &nbsp;&nbsp;费用类别：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_type']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_type'] : null);?>

		  </dd>
		</dl>
		<dl class="lineD">
		  <dt>审核意见：</dt>
		  <dd><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeRemarks']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeRemarks'] : null);?>
&nbsp;&nbsp;审核人：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeMan']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeMan'] : null);?>
&nbsp;&nbsp;审核时间：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeTime']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeTime'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>审批意见：</dt>
		  <dd><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_checkRemarks']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_checkRemarks'] : null);?>
&nbsp;&nbsp;审批人：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isCheckMan']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isCheckMan'] : null);?>
&nbsp;&nbsp;审批时间：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isCheckTime']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isCheckTime'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
			<dt>付款方式：</dt>
			<dd><select name="payments[]" id="payments_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
">
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
" <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['payments_id']) ? $_smarty_tpl->tpl_vars['row']->value['payments_id'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['payment_id']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_name']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_name'] : null);?>
</option>
		                  <?php }} ?>
		              </select>
				&nbsp;&nbsp;&nbsp;&nbsp;付款账户：<select name="bank[]" id="bank_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
">
		                  <option value="">请选择</option>
		                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('banklist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
		                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bank_id']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_id'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['bank_id']) ? $_smarty_tpl->tpl_vars['row']->value['bank_id'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['bank_id']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bank_name']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_name'] : null);?>
</option>
		                  <?php }} ?>
		              </select>
			</dd>
		</dl>
	<?php }} ?>
	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('other_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
		<dl class="lineD">
		  <dt><span class="redstar">*</span>其他收入：<input type="hidden" name="oid[]" id="oid_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" /></dt>
		  <dd>进账日期：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['add_time']) ? $_smarty_tpl->tpl_vars['row']->value['add_time'] : null);?>
&nbsp;&nbsp;&nbsp;&nbsp;金额：<input type="text" name="change_money[]" id="change_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" size="5" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
" onFocus="this.blur()"/>
		  &nbsp;&nbsp;&nbsp;&nbsp;收入类型：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['change_class']) ? $_smarty_tpl->tpl_vars['row']->value['change_class'] : null);?>
<input type="hidden" name="change_class[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['change_class']) ? $_smarty_tpl->tpl_vars['row']->value['change_class'] : null);?>
"/><input type="hidden" name="name[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
"/></dd>
		</dl>	  	
	    <dl class="lineD">
			<dt>收款方式：</dt>
			<dd><select name="payments_to[]" id="payments_to_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
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
" <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['payments_to_id']) ? $_smarty_tpl->tpl_vars['row']->value['payments_to_id'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['payment_id']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_name']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_name'] : null);?>
</option>
		                  <?php }} ?>
		              </select>
				&nbsp;&nbsp;&nbsp;&nbsp;收款账户：<select name="bank_to[]" id="bank_to_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
		                  <option value="">请选择</option>
		                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('banklist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
		                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bank_id']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_id'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['bank_to_id']) ? $_smarty_tpl->tpl_vars['row']->value['bank_to_id'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['bank_id']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bank_name']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_name'] : null);?>
</option>
		                  <?php }} ?>
		              </select>
			</dd>
		</dl>
		
	
	<?php }} ?>
    <div class="page_btm">
      <input type="submit" class="btn_b" name="btn_save" value="确定" /><b> 注：<span class="red">*</span>为必填项</b>
    </div>
  </div>
  
  <input type="hidden" name="uids" value="<?php echo $_smarty_tpl->getVariable('uids')->value;?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  <input type="hidden" name="item" id="item" value="<?php echo $_smarty_tpl->getVariable('item')->value;?>
" />
  
  <input type="hidden" name="breakrulesid" id="breakrulesid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['bill_id']) ? $_smarty_tpl->getVariable('list')->value['bill_id'] : null);?>
" />
  </form>
</div>
<!-->
<script>
var cid=$("#uid").val();

$('#test').diyUpload({
	url:'../../../../site/includes/fileupload.php?id=9999',
	success:function( data ) {
	    //alert(data.jsonrpc);
		console.info( data );
	},
	error:function( err ) {
		console.info( err );
	},
	formData:{
	    contractid:0,baoxiaoid:cid
	}
});

function select_driver(){
	var key=$("#paicheDriverKey").val();
	var item=$("#item").val();
	var stitle=item==1 ? "驾驶员" : "报销人";
	demo_iframe('../../business/selectemp.php?sel_type=d&item='+item+'&key='+key,'选择'+stitle,650,380,'login_js');
}
function select_auditor(){
	var key=$("#searchKey").val();
	var item=$("#item").val();
	var stitle="报销审核人";
	demo_iframe('../../business/selectemp.php?sel_type=g&item=3&target_id=9&key='+key,'选择'+stitle,650,380,'login_js');
}
function select_user(){
	if ($("#paicheDriver2").val()==""){
		alert("请先选择报销费用的驾驶员！");
		$("#paicheDriverKey").focus();
		return false;
	}
	
	demo_iframe('../../business/selectemp.php?sel_type=h&key='+$("#paicheDriver2").val()+'&sdate='+$("#paiche_date").val(),'选择租车合同',950,480,'login_js');
}
</script>
<!-->
</body>
</html>