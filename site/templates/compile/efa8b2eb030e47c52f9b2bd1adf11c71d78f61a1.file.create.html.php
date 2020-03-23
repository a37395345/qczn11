<?php /* Smarty version Smarty-3.0.4, created on 2019-03-03 14:07:45
         compiled from "D:\web\site\templates\elsker\operator/finance/baoxiao/create.html" */ ?>
<?php /*%%SmartyHeaderCode:303165c7b6f310f7a97-24590992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efa8b2eb030e47c52f9b2bd1adf11c71d78f61a1' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/finance/baoxiao/create.html',
      1 => 1549095945,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303165c7b6f310f7a97-24590992',
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
  <div class="page_tit"><?php if ($_smarty_tpl->getVariable('task')->value=="insert"){?>添加<?php }elseif($_smarty_tpl->getVariable('task')->value=="update"){?>编辑<?php }elseif($_smarty_tpl->getVariable('task')->value=="bao_accept"){?>报销<?php }elseif($_smarty_tpl->getVariable('task')->value=="lead_accept"){?>领导审批<?php }else{ ?>受理<?php }?></div>  
  <form method="post" action="insert.php" onsubmit="return baoxiao_check(this)" name="form1" enctype="multipart/form-data">
  <div class="form2">
	  	<?php if ($_smarty_tpl->getVariable('task')->value=="bao_accept"){?>
	  	<dl class="lineD">
		  <dt>报销人：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['emp_name']) ? $_smarty_tpl->getVariable('list')->value['emp_name'] : null);?>
<input type="hidden" name="paicheDriver2" id="paicheDriver2" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_emp']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_emp'] : null);?>
" /></dd>
		</dl>
		<dl class="lineD">
		  <dt>报销日期：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_date']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_date'] : null);?>
</dd>
		</dl>
		<?php if ((isset($_smarty_tpl->getVariable('list')->value['baoxiao_item']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_item'] : null)==1){?>
	  	<dl class="lineD">
		  <dt>金额：</dt>
		  <dd><input type="text" name="baoxiao_money" id="baoxiao_money" size="10" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_oil']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_oil'] : null)+(isset($_smarty_tpl->getVariable('list')->value['baoxiao_roadQiao']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_roadQiao'] : null)+(isset($_smarty_tpl->getVariable('list')->value['baoxiao_stopCar']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_stopCar'] : null)+(isset($_smarty_tpl->getVariable('list')->value['baoxiao_room']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_room'] : null)+(isset($_smarty_tpl->getVariable('list')->value['baoxiao_meal']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_meal'] : null);?>
" onFocus="this.blur()"/></dd>
		</dl>
		<?php }?>
		<?php if ((isset($_smarty_tpl->getVariable('list')->value['baoxiao_item']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_item'] : null)==2){?>
		<dl class="lineD">
		  <dt>金额：</dt>
		  <dd><input type="text" name="baoxiao_money" id="baoxiao_money" size="10" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_money']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_money'] : null);?>
" onFocus="this.blur()"/></dd>
		</dl>
		<dl class="lineD">
		  <dt>费用类别：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_type']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_type'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>店铺：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['shop_name']) ? $_smarty_tpl->getVariable('list')->value['shop_name'] : null);?>
</dd>
		</dl>
		<?php }?>
		<dl class="lineD">
		  <dt>审核意见：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_isAgreeRemarks']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_isAgreeRemarks'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>说明：</dt>
		  <dd>审核人：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_isAgreeMan']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_isAgreeMan'] : null);?>
&nbsp;&nbsp;审核时间：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_isAgreeTime']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_isAgreeTime'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>审批意见：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_checkRemarks']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_checkRemarks'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>说明：</dt>
		  <dd>审批人：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_isCheckMan']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_isCheckMan'] : null);?>
&nbsp;&nbsp;审批时间：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_isCheckTime']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_isCheckTime'] : null);?>
</dd>
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
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['payments_id']) ? $_smarty_tpl->getVariable('list')->value['payments_id'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['payment_id']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_name']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_name'] : null);?>
</option>
		                  <?php }} ?>
		              </select>
			</dd>
		</dl>
		<dl class="lineD">
			<dt>付款 账户：</dt>
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
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['bank_id']) ? $_smarty_tpl->getVariable('list')->value['bank_id'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['bank_id']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bank_name']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_name'] : null);?>
</option>
		                  <?php }} ?>
		              </select>
			</dd>
		</dl>
		<?php }elseif($_smarty_tpl->getVariable('task')->value=="check_accept"){?>
		<dl class="lineD">
		  <dt>报销人：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['emp_name']) ? $_smarty_tpl->getVariable('list')->value['emp_name'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>报销日期：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_date']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_date'] : null);?>
</dd>
		</dl>
	  	<dl class="lineD">
		  <dt>金额：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_money']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_money'] : null)+(isset($_smarty_tpl->getVariable('list')->value['baoxiao_oil']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_oil'] : null)+(isset($_smarty_tpl->getVariable('list')->value['baoxiao_roadQiao']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_roadQiao'] : null)+(isset($_smarty_tpl->getVariable('list')->value['baoxiao_stopCar']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_stopCar'] : null)+(isset($_smarty_tpl->getVariable('list')->value['baoxiao_room']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_room'] : null)+(isset($_smarty_tpl->getVariable('list')->value['baoxiao_meal']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_meal'] : null);?>
</dd>
		</dl>
		<?php if ((isset($_smarty_tpl->getVariable('list')->value['baoxiao_item']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_item'] : null)==2){?>
		<dl class="lineD">
		  <dt>费用类别：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_type']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_type'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>店铺：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['shop_name']) ? $_smarty_tpl->getVariable('list')->value['shop_name'] : null);?>
</dd>
		</dl>
		<?php if ((isset($_smarty_tpl->getVariable('list')->value['bill_id']) ? $_smarty_tpl->getVariable('list')->value['bill_id'] : null)){?>
		<dl class="lineD">
	    <dt>违章车辆：</dt>
	    <dd>苏D<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['car_num']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['car_num'] : null);?>
</dd>
	    </dl>
		<dl class="lineD">
	    <dt>违章时间：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_date']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_date'] : null);?>
</dd>
	    </dl>
	    <dl class="lineD">
		<dt>违章项目：</dt>
		<dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_item']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_item'] : null);?>

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
			</dd>
		</dl>
		<dl class="lineD">
			<dt>违章总金额：</dt>
			<dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money'] : null);?>
元</dd>
		</dl>
		<dl class="lineD">
			<dt>实际违章处理：</dt>
			<dd>实际违章款：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money1_infact']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money1_infact'] : null);?>
元&nbsp;&nbsp;&nbsp;&nbsp;实际手续费：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money2_infact']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money2_infact'] : null);?>
元&nbsp;&nbsp;&nbsp;&nbsp;
			实际扣分：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money3_infact']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money3_infact'] : null);?>
分=<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money4_infact']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money4_infact'] : null);?>
元
			</dd>
		</dl>
		<dl class="lineD">
			<dt>相关单据：</dt>
			<dd>
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('bill_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
			   <tr overstyle='on' >
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bill_type']) ? $_smarty_tpl->tpl_vars['row']->value['bill_type'] : null);?>
</td>
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['out_money']) ? $_smarty_tpl->tpl_vars['row']->value['out_money'] : null);?>
元</td>
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['in_money']) ? $_smarty_tpl->tpl_vars['row']->value['in_money'] : null);?>
元</td>
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['change_class']) ? $_smarty_tpl->tpl_vars['row']->value['change_class'] : null);?>
</td>
			  </tr>
			<?php }} ?>
			</table>
			</dd>
		</dl>
		<dl class="lineD">
			<dt>实际违章总金额：</dt>
			<dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money_infact']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money_infact'] : null);?>
元</dd>
		</dl>
		<?php if ((isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrulesPaicheId']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrulesPaicheId'] : null)!=0){?>
		<dl class="lineD">
			<dt>派车单号：</dt>
			<dd><a href="../../business/detail.php?uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrulesPaicheId']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrulesPaicheId'] : null);?>
" target="blank"><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['paiche_contractNum']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['paiche_contractNum'] : null);?>
</a></dd>
		</dl>
		<?php }?>
		<?php }?>
		<?php }?>
		<dl class="lineD">
		  <dt>报销备注：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_remarks']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_remarks'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>审核结果：</dt>
		  <dd><input type="radio" value="1" name="baoxiao_isAgree" checked/>通过 <input type="radio" value="-1" name="baoxiao_isAgree"/>退回</dd>
		</dl>
		<dl class="lineD">
		  <dt>审核备注：</dt>
		  <dd><textarea name="baoxiao_isAgreeRemarks" id="baoxiao_isAgreeRemarks" cols="40" rows="4"></textarea></dd>
		</dl>
		<?php }elseif($_smarty_tpl->getVariable('task')->value=="lead_accept"){?>
		<dl class="lineD">
		  <dt>单号：</dt>
		  <dd><a href="detail.php?uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_id']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_id'] : null);?>
" target="_blank"><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_code']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_code'] : null);?>
</a>&nbsp;&nbsp;&nbsp;&nbsp;
		  报销人：<?php echo (isset($_smarty_tpl->getVariable('list')->value['emp_name']) ? $_smarty_tpl->getVariable('list')->value['emp_name'] : null);?>
&nbsp;&nbsp;&nbsp;&nbsp;报销日期：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_date']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_date'] : null);?>
</dd>
		</dl>
		<?php if ((isset($_smarty_tpl->getVariable('list')->value['baoxiao_item']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_item'] : null)==1){?>
	  	<dl class="lineD">
		  <dt>合同号：</dt>
		  <dd><a href="../../business/detail.php?uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiaoPaicheId']) ? $_smarty_tpl->getVariable('list')->value['baoxiaoPaicheId'] : null);?>
" target="_blank"><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiaoPaicheContractNum']) ? $_smarty_tpl->getVariable('list')->value['baoxiaoPaicheContractNum'] : null);?>
</a></dd>
		</dl>
		<dl class="lineD">
		  <dt>报销金额：</dt>
		  <dd>
		  <?php if ((isset($_smarty_tpl->getVariable('list')->value['baoxiao_oil']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_oil'] : null)!=0){?>现金加油：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_oil']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_oil'] : null);?>
元(<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_oil_number']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_oil_number'] : null);?>
升)&nbsp;&nbsp;<?php }?>
		  <?php if ((isset($_smarty_tpl->getVariable('list')->value['baoxiao_roadQiao']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_roadQiao'] : null)!=0){?>过桥过路费：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_roadQiao']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_roadQiao'] : null);?>
&nbsp;&nbsp;<?php }?>
		  <?php if ((isset($_smarty_tpl->getVariable('list')->value['baoxiao_stopCar']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_stopCar'] : null)!=0){?>停车费：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_stopCar']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_stopCar'] : null);?>
&nbsp;&nbsp;<?php }?>
		  <?php if ((isset($_smarty_tpl->getVariable('list')->value['baoxiao_room']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_room'] : null)!=0){?>住宿费：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_room']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_room'] : null);?>
&nbsp;&nbsp;<?php }?>
		  <?php if ((isset($_smarty_tpl->getVariable('list')->value['baoxiao_meal']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_meal'] : null)!=0){?>餐费：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_meal']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_meal'] : null);?>
&nbsp;&nbsp;<?php }?>
		     合计：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_oil']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_oil'] : null)+(isset($_smarty_tpl->getVariable('list')->value['baoxiao_roadQiao']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_roadQiao'] : null)+(isset($_smarty_tpl->getVariable('list')->value['baoxiao_stopCar']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_stopCar'] : null)+(isset($_smarty_tpl->getVariable('list')->value['baoxiao_room']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_room'] : null)+(isset($_smarty_tpl->getVariable('list')->value['baoxiao_meal']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_meal'] : null);?>
元
		  </dd>
		</dl>
		<dl class="lineD">
		  <dt>付款方式：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['payment_name']) ? $_smarty_tpl->getVariable('list')->value['payment_name'] : null);?>
&nbsp;&nbsp;&nbsp;&nbsp;付款账户：<?php echo (isset($_smarty_tpl->getVariable('list')->value['bank_name']) ? $_smarty_tpl->getVariable('list')->value['bank_name'] : null);?>
</dd>
		</dl>
		<?php }?>
		<?php if ((isset($_smarty_tpl->getVariable('list')->value['baoxiao_item']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_item'] : null)==2){?>
		<dl class="lineD">
		  <dt>报销内容：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_content']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_content'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>报销金额：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_money']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_money'] : null);?>
&nbsp;&nbsp;&nbsp;&nbsp;付款方式：<?php echo (isset($_smarty_tpl->getVariable('list')->value['payment_name']) ? $_smarty_tpl->getVariable('list')->value['payment_name'] : null);?>
&nbsp;&nbsp;&nbsp;&nbsp;付款账户：<?php echo (isset($_smarty_tpl->getVariable('list')->value['bank_name']) ? $_smarty_tpl->getVariable('list')->value['bank_name'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>费用类别：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_type']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_type'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>店铺：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['shop_name']) ? $_smarty_tpl->getVariable('list')->value['shop_name'] : null);?>
</dd>
		</dl>
		<?php if ((isset($_smarty_tpl->getVariable('list')->value['bill_id']) ? $_smarty_tpl->getVariable('list')->value['bill_id'] : null)){?>
		<dl class="lineD">
	    <dt>违章车辆：</dt>
	    <dd>苏D<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['car_num']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['car_num'] : null);?>
</dd>
	    </dl>
		<dl class="lineD">
	    <dt>违章时间：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_date']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_date'] : null);?>
</dd>
	    </dl>
	    <dl class="lineD">
		<dt>违章项目：</dt>
		<dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_item']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_item'] : null);?>

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
			</dd>
		</dl>
		<dl class="lineD">
			<dt>违章总金额：</dt>
			<dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money'] : null);?>
元</dd>
		</dl>
		<dl class="lineD">
			<dt>实际违章处理：</dt>
			<dd>实际违章款：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money1_infact']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money1_infact'] : null);?>
元&nbsp;&nbsp;&nbsp;&nbsp;实际手续费：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money2_infact']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money2_infact'] : null);?>
元&nbsp;&nbsp;&nbsp;&nbsp;
			实际扣分：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money3_infact']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money3_infact'] : null);?>
分=<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money4_infact']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money4_infact'] : null);?>
元
			</dd>
		</dl>
		<dl class="lineD">
			<dt>相关单据：</dt>
			<dd>
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('bill_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
			   <tr overstyle='on' >
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bill_type']) ? $_smarty_tpl->tpl_vars['row']->value['bill_type'] : null);?>
</td>
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['out_money']) ? $_smarty_tpl->tpl_vars['row']->value['out_money'] : null);?>
元</td>
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['in_money']) ? $_smarty_tpl->tpl_vars['row']->value['in_money'] : null);?>
元</td>
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['change_class']) ? $_smarty_tpl->tpl_vars['row']->value['change_class'] : null);?>
</td>
			  </tr>
			<?php }} ?>
			</table>
			</dd>
		</dl>
		<dl class="lineD">
			<dt>实际违章总金额：</dt>
			<dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money_infact']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrules_money_infact'] : null);?>
元</dd>
		</dl>
		<?php if ((isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrulesPaicheId']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrulesPaicheId'] : null)!=0){?>
		<dl class="lineD">
			<dt>派车单号：</dt>
			<dd><a href="../../business/detail.php?uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrulesPaicheId']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['breakrulesPaicheId'] : null);?>
" target="blank"><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['paiche_contractNum']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_breakinfo']['paiche_contractNum'] : null);?>
</a></dd>
		</dl>
		<?php }?>
		<?php }?>
		<?php }?>
		<?php if ((isset($_smarty_tpl->getVariable('list')->value['baoxiao_remarks']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_remarks'] : null)!=''){?>
		<dl class="lineD">
		  <dt>备注说明：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_remarks']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_remarks'] : null);?>
</dd>
		</dl>
		<?php }?>
		<dl class="lineD">
		  <dt>审核意见：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_isAgreeRemarks']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_isAgreeRemarks'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>说明：</dt>
		  <dd>审核人：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_isAgreeMan']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_isAgreeMan'] : null);?>
&nbsp;&nbsp;审核时间：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_isAgreeTime']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_isAgreeTime'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>审批结果：</dt>
		  <dd><input type="radio" value="1" name="baoxiao_isCheck" checked/>通过 <input type="radio" value="-1" name="baoxiao_isCheck"/>退回
		  <input type="checkbox" value="1" name="chktracking" id="chktracking"/>需要进一步跟踪</dd>
		</dl>
		<dl class="lineD">
		  <dt>审批意见：</dt>
		  <dd><textarea name="checkNote" id="checkNote" cols="60" rows="3"></textarea></dd>
		</dl>
		<dl class="lineD" style="display:none;">
		  <dt>审批转交：</dt>
		  <dd><?php if ($_smarty_tpl->getVariable('nowuser')->value==24){?><input type="checkbox" value="26" name="chktrans" id="chktrans"/>转给何艳阳<?php }?>
		  <?php if ($_smarty_tpl->getVariable('nowuser')->value==26){?><input type="checkbox" value="24" name="chktrans" id="chktrans"/>转给蒋政<?php }?></dd>
		</dl>
		
	  	<?php }else{ ?>
	  	<dl class="lineD">
		  <dt><span class="redstar">*</span>报销人：</dt>
		  <dd><input type="text" name="paicheDriver" id="paicheDriver" size="18" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['emp_name']) ? $_smarty_tpl->getVariable('list')->value['emp_name'] : null);?>
" />
			         关键字：<input type="text" name="paicheDriverKey" id="paicheDriverKey" size="10" />
			    <input type="hidden" name="paicheDriver2" id="paicheDriver2" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_emp']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_emp'] : null);?>
" />
			    <a href="javascript:select_driver();"><img src="../../../../css/driver.gif" height="15" class="peoplePic" /></a>
		  </dd>
		</dl>
		<dl class="lineD">
	        <dt><span class="redstar">*</span>指定审核人</dt>
	        <dd><input type="text" name="driveDriver_9" id="driveDriver_9" size="18" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['auditor_empname']) ? $_smarty_tpl->getVariable('list')->value['auditor_empname'] : null);?>
" />
			         关键字：<input type="text" name="searchKey" id="searchKey" size="10" />
			    <input type="hidden" name="driveDriver2_9" id="driveDriver2_9" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_auditor']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_auditor'] : null);?>
" />
			    <a href="javascript:select_auditor();"><img src="../../../../css/driver.gif" height="15" class="peoplePic" /></a></dd>
         </dl>
		<?php if ($_smarty_tpl->getVariable('item')->value==1){?>
	  	<dl class="lineD">
		  <dt>出车日期：</dt>
		  <dd><input id="paiche_date" type="text" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate'] : null);?>
" name="paiche_date" size="16" onClick="calendar.show(this);" /></dd>
		</dl>
	  	<dl class="lineD">
		  <dt><span class="redstar">*</span>合同号：</dt>
		  <dd><input type="text" name="baoxiaoPaicheContractNum" id="baoxiaoPaicheContractNum" size="18" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiaoPaicheContractNum']) ? $_smarty_tpl->getVariable('list')->value['baoxiaoPaicheContractNum'] : null);?>
" />
		  <input type="hidden" name="baoxiaoPaicheContractId" id="baoxiaoPaicheContractId" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiaoPaicheId']) ? $_smarty_tpl->getVariable('list')->value['baoxiaoPaicheId'] : null);?>
" />&nbsp;<input type="button" value="选择派车单" name="seluser" onClick="select_user();"></dd>
		</dl>
		<dl class="lineD">
		  <dt>现金加油费：</dt>
		  <dd><input type="text" name="baoxiao_oil" id="baoxiao_oil" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_oil']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_oil'] : null);?>
" />加油量：<input type="text" name="baoxiao_oil_number" id="baoxiao_oil_number" size="6" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_oil_number']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_oil_number'] : null);?>
" />升&nbsp;&nbsp;
		  加油日期<input id="baoxiao_oil_date" type="text" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_oil_date']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_oil_date'] : null);?>
" name="baoxiao_oil_date" size="16" onClick="calendar.show(this);" readonly="readonly" /></dd>
		</dl>
		<dl class="lineD">
		  <dt>过桥过路费：</dt>
		  <dd><input type="text" name="baoxiao_roadQiao" id="baoxiao_roadQiao" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_roadQiao']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_roadQiao'] : null);?>
" /></dd>
		</dl>
		<dl class="lineD">
		  <dt>停车费：</dt>
		  <dd><input type="text" name="baoxiao_stop" id="baoxiao_stop" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_stopCar']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_stopCar'] : null);?>
" /></dd>
		</dl>
		<dl class="lineD">
		  <dt>住宿费：</dt>
		  <dd><input type="text" name="baoxiao_room" id="baoxiao_room" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_room']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_room'] : null);?>
" /></dd>
		</dl>
		<dl class="lineD">
		  <dt>餐费：</dt>
		  <dd><input type="text" name="baoxiao_meal" id="baoxiao_meal" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_meal']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_meal'] : null);?>
" /></dd>
		</dl>
		<?php }?>
		<?php if ($_smarty_tpl->getVariable('item')->value==2){?>
		<dl class="lineD">
		  <dt><span class="redstar">*</span>报销内容：</dt>
		  <dd><textarea name="baoxiao_content" id="baoxiao_content" cols="90" rows="8"><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_content']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_content'] : null);?>
</textarea></dd>
		</dl>
		<dl class="lineD">
		  <dt><span class="redstar">*</span>报销金额：</dt>
		  <dd><input type="text" name="baoxiao_money" id="baoxiao_money" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_money']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_money'] : null);?>
" /></dd>
		</dl>
		<dl class="lineD">
		  <dt>费用类型：</dt>
		  <dd>
		  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('baoxiaotypelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
		  <?php if ($_smarty_tpl->getVariable('class')->value!=(isset($_smarty_tpl->tpl_vars['rows']->value['typeclass']) ? $_smarty_tpl->tpl_vars['rows']->value['typeclass'] : null)){?><?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars['rows']->value['typeclass']) ? $_smarty_tpl->tpl_vars['rows']->value['typeclass'] : null), null, null);?><br/><?php }else{ ?><?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['typename']) ? $_smarty_tpl->tpl_vars['rows']->value['typename'] : null)=="电话费"){?><br/><?php }?><?php }?>
		  <input type="radio" name="baoxiao_type" id="baoxiao_type" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['typename']) ? $_smarty_tpl->tpl_vars['rows']->value['typename'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['baoxiao_type']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_type'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['typename']) ? $_smarty_tpl->tpl_vars['rows']->value['typename'] : null)){?>checked<?php }?> /><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['typename']) ? $_smarty_tpl->tpl_vars['rows']->value['typename'] : null);?>
&nbsp;&nbsp;
		  
		  <?php }} ?>
		  </dd>
		</dl>
		
		<dl class="lineD">
	      <dt><span class="redstar">*</span>选择店铺：</dt>
	      <dd>
	        <select name="shop_id" >
	        	<option value="0" selected>请选择</option>
			<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shop')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
				<option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null)==(isset($_smarty_tpl->getVariable('list')->value['shop_id']) ? $_smarty_tpl->getVariable('list')->value['shop_id'] : null)){?>selected<?php }else{ ?><?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>
</option>	
			<?php }} ?>
			</select>
		  </dd>
	    </dl>
		<?php }?>
		<dl class="lineD">
		  <dt><span class="redstar">*</span>报销日期：</dt>
		  <dd><input id="baoxiao_date" type="text" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_date']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_date'] : null);?>
" name="baoxiao_date" size="16" readonly="readonly" /></dd>
		</dl>
		<dl class="lineD" style="display:none;">
	        <dt>指定审核人</dt>
	        <dd><input type="radio" name="baoxiao_setCheckMan" value="24" <?php if ((isset($_smarty_tpl->getVariable('list')->value['baoxiao_setCheckMan']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_setCheckMan'] : null)=="24"){?>checked<?php }?>>蒋政&nbsp;&nbsp;
		    <input type="radio" name="baoxiao_setCheckMan" value="26" <?php if ((isset($_smarty_tpl->getVariable('list')->value['baoxiao_setCheckMan']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_setCheckMan'] : null)=="26"){?>checked<?php }?>>何艳阳</dd>
         </dl>
		<dl class="lineD">
		  <dt>报销备注：</dt>
		  <dd><textarea name="baoxiao_remarks" id="baoxiao_remarks" cols="90" rows="8"><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_remarks']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_remarks'] : null);?>
</textarea></dd>
		</dl>
		<dl class="lineD">
	      <dt>发票扫描件：</dt>
	      <dd>
	      	<div id="box">
				<div id="test" ></div>
			</div>
	     
	        <?php if ($_smarty_tpl->getVariable('task')->value=='update'&&(isset($_smarty_tpl->getVariable('list')->value['baoxiao_imglist']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_imglist'] : null)){?>
	        <br />
	        <div>
	        <ul>
	        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('list')->value['baoxiao_imglist']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_imglist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
	         <li style="float:left;text-align:center;"><a href="picture.php?baoxiao_id=<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_id']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_id'] : null);?>
&nowserial=<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
" title="点击查看原图" target="_blank"><img src="../../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['images']) ? $_smarty_tpl->tpl_vars['rows']->value['images'] : null);?>
" width="100" height="100" /></a><br /><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</li>
	        <?php }} ?>
	        </ul>
	        </div>
	        <?php }?> 
	      </dd>
	   </dl>
	    <?php }?>
    <div class="page_btm">
      <input type="submit" class="btn_b" name="btn_save" value="确定" /><b> 注：<span class="red">*</span>为必填项</b>
    </div>
  </div>
  <input type="hidden" name="uid" id="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_id']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_id'] : null);?>
" />
  <input type="hidden" name="uids" value="<?php echo $_smarty_tpl->getVariable('uids')->value;?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  <input type="hidden" name="item" id="item" value="<?php echo $_smarty_tpl->getVariable('item')->value;?>
" />
  <input type="hidden" name="baoxiaoPaicheId" id="baoxiaoPaicheId" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiaoPaicheId']) ? $_smarty_tpl->getVariable('list')->value['baoxiaoPaicheId'] : null);?>
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