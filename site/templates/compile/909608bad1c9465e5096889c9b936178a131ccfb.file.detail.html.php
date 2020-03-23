<?php /* Smarty version Smarty-3.0.4, created on 2019-09-30 08:55:42
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/finance/baoxiao/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:14263961615d91528e445755-35871263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '909608bad1c9465e5096889c9b936178a131ccfb' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/finance/baoxiao/detail.html',
      1 => 1569749246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14263961615d91528e445755-35871263',
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
<link href="../../../../css/box.css" rel="stylesheet" type="text/css" />
<link href="../../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<script type="text/javascript" src="../../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<script type="text/javascript" src="../../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>

</head>
<body>
<div class="so_main">
  <div class="page_tit">报销内容详情</div>
  <div class="form2">
	  	<dl class="lineD">
		  <dt>报销单号：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_code']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_code'] : null);?>
</dd>
		</dl>
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
		<?php if ($_smarty_tpl->getVariable('item')->value==1){?>
	  	<dl class="lineD">
		  <dt>合同号：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiaoPaicheContractNum']) ? $_smarty_tpl->getVariable('list')->value['baoxiaoPaicheContractNum'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>现金加油费：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_oil']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_oil'] : null);?>
元&nbsp;&nbsp;&nbsp;&nbsp;加油量：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_oil_number']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_oil_number'] : null);?>
升&nbsp;&nbsp;&nbsp;&nbsp;加油日期：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_oil_date']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_oil_date'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>过桥过路费：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_roadQiao']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_roadQiao'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>停车费：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_stopCar']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_stopCar'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>住宿费：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_room']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_room'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>餐费：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_meal']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_meal'] : null);?>
</dd>
		</dl>
		<?php }?>
		<?php if ($_smarty_tpl->getVariable('item')->value==2){?>
		<dl class="lineD">
		  <dt>报销内容：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_content']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_content'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>报销金额：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_money']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_money'] : null);?>
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
		  <dt>付款方式：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['payment_name']) ? $_smarty_tpl->getVariable('list')->value['payment_name'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>付款账户：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['bank_name']) ? $_smarty_tpl->getVariable('list')->value['bank_name'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>报销备注：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_remarks']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_remarks'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
	      <dt>发票扫描件：</dt>
	      <dd>
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
			<input onclick="uploadfile(<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_id']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_id'] : null);?>
)" type="button" class="btn_b" value="补传发票" style="float:right;"/>
	      </dd>
	   </dl>
		
		<dl class="lineD">
		  <dt>审核结果：</dt>
		  <dd><?php if ((isset($_smarty_tpl->getVariable('list')->value['baoxiao_isAgree']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_isAgree'] : null)==0){?>未审核<?php }elseif((isset($_smarty_tpl->getVariable('list')->value['baoxiao_isAgree']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_isAgree'] : null)==1){?>审核通过<?php }else{ ?>审核未通过<?php }?></dd>
		</dl>
		<?php if ((isset($_smarty_tpl->getVariable('list')->value['baoxiao_isAgree']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_isAgree'] : null)!=0){?>
		<dl class="lineD">
		  <dt>说明：</dt>
		  <dd>审核人：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_isAgreeMan']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_isAgreeMan'] : null);?>
&nbsp;&nbsp;审核时间：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_isAgreeTime']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_isAgreeTime'] : null);?>
&nbsp;&nbsp;审核意见：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_isAgreeRemarks']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_isAgreeRemarks'] : null);?>
</dd>
		</dl>
		<?php }?>
		<dl class="lineD">
		  <dt>审批结果：</dt>
		  <dd><?php if ((isset($_smarty_tpl->getVariable('list')->value['baoxiao_isCheck']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_isCheck'] : null)==0){?>未审批<?php }elseif((isset($_smarty_tpl->getVariable('list')->value['baoxiao_isCheck']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_isCheck'] : null)==1){?>审批通过<?php }else{ ?>审批未通过<?php }?></dd>
		</dl>
		<?php if ((isset($_smarty_tpl->getVariable('list')->value['baoxiao_isCheck']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_isCheck'] : null)!=0){?>
		<dl class="lineD">
		  <dt>说明：</dt>
		  <dd>审批人：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_isCheckMan']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_isCheckMan'] : null);?>
&nbsp;&nbsp;审批时间：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_isCheckTime']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_isCheckTime'] : null);?>
&nbsp;&nbsp;审批意见：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_checkRemarks']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_checkRemarks'] : null);?>
</dd>
		</dl>
		<?php }?>
		<dl class="lineD">
		  <dt>受理结果：</dt>
		  <dd><?php if ((isset($_smarty_tpl->getVariable('list')->value['baoxiao_isOver']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_isOver'] : null)==0){?>未受理<?php }else{ ?>已受理<?php }?></dd>
		</dl>
		<?php if ((isset($_smarty_tpl->getVariable('list')->value['baoxiao_isOver']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_isOver'] : null)==1){?>
		<dl class="lineD">
		  <dt>说明：</dt>
		  <dd>受理人：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_isOverMan']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_isOverMan'] : null);?>
&nbsp;&nbsp;受理时间：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_isOverTime']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_isOverTime'] : null);?>
</dd>
		</dl>
		<?php }?>
		<?php if ($_smarty_tpl->getVariable('translist')->value){?>
		<dl class="lineD">
		  <dt>转批：</dt>
		  <dd><?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('translist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
		  [<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['trans_time']) ? $_smarty_tpl->tpl_vars['rows']->value['trans_time'] : null);?>
]<?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['from_userid']) ? $_smarty_tpl->tpl_vars['rows']->value['from_userid'] : null)==24){?>蒋政<?php }else{ ?>何艳阳<?php }?>转给<?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['to_userid']) ? $_smarty_tpl->tpl_vars['rows']->value['to_userid'] : null)==24){?>蒋政<?php }else{ ?>何艳阳处理<?php }?><br/>
		  <?php }} ?>
		</dl>
		<?php }?>
		
  </div>
</div>
<!-->
<script>
	function uploadfile(bid){
		demo_iframe('list.php?task=upload&b_id='+bid,'上传附件',950,560,'login_js');
	}
</script>
<!-->
</body>
</html>