<?php /* Smarty version Smarty-3.0.4, created on 2014-09-10 10:05:11
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/business/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:10580540fb1d7c0bfb1-54699545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bddab4aa1c9f92e8a47aebfae164252322fa8b29' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/business/detail.html',
      1 => 1410314705,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10580540fb1d7c0bfb1-54699545',
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
<link href="../../../css/box.css" rel="stylesheet" type="text/css" />
    
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit">详细信息-<?php echo $_smarty_tpl->getVariable('PAGETITLE')->value;?>
</div>
  <div class="form2">
	<dl class="lineD">
      <dt>合同号：</dt>
      <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_contractNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_contractNum'] : null);?>
</dd>
    </dl>
	<dl class="lineD">
      <dt>租车客户（公司/个人）：</dt>
      <dd><?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_personal']) ? $_smarty_tpl->getVariable('list')->value['paiche_personal'] : null)==1){?>个人<?php }else{ ?><?php echo (isset($_smarty_tpl->getVariable('list')->value['client_name']) ? $_smarty_tpl->getVariable('list')->value['client_name'] : null);?>
<?php }?></dd>
    </dl>
    <dl class="lineD">
      <dt>联系人：</dt>
      <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linker']) ? $_smarty_tpl->getVariable('list')->value['paiche_linker'] : null);?>
</dd>
    </dl>
    <dl class="lineD">
      <dt>联系人手机：</dt>
      <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerPhone']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerPhone'] : null);?>
</dd>
    </dl>
    <?php if ($_smarty_tpl->getVariable('busitype')->value=='1'||$_smarty_tpl->getVariable('busitype')->value=='3'){?>
    <dl class="lineD">
      <dt>联系人身份证：</dt>
      <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerNum'] : null);?>
</dd>
    </dl>
    <dl class="lineD">
      <dt>联系人地址：</dt>
      <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerAdd']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerAdd'] : null);?>
</dd>
    </dl>
    <?php }?>
    <dl class="lineD">
	    <dt>业务员：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['yewuyuan']) ? $_smarty_tpl->getVariable('list')->value['yewuyuan'] : null);?>
</dd>
	</dl>
	<dl class="lineD">
      <dt>用车开始时间：</dt>
      <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate_All'] : null);?>
</dd>
    </dl>
    <dl class="lineD">
      <dt>用车结束时间：</dt>
      <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_endDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_endDate_All'] : null);?>
</dd>
    </dl>
    <?php if ($_smarty_tpl->getVariable('busitype')->value=='2'||$_smarty_tpl->getVariable('busitype')->value=='4'||$_smarty_tpl->getVariable('busitype')->value=='5'){?>
    <dl class="lineD">
	    <dt>司机每天工作时间：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_workTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_workTime'] : null);?>
</dd>
	</dl>
	<?php }?>
    <dl class="lineD">
	    <dt>超时费用：</dt>
    	<dd><?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitTime'] : null)=="Y"){?>不限时间<?php }else{ ?><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_overTime'] : null);?>
元/小时<?php }?></dd>
    </dl>
    <dl class="lineD">
	    <dt>公里数：</dt>
	    <dd><?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)=="Y"){?>不限公里<?php }else{ ?>限制<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_limitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_limitKm'] : null);?>
公里，超公里单价：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_overKm'] : null);?>
元/公里<?php }?></dd>
	</dl>	
	<dl class="lineD">
    	<dt>客户要求车型：</dt>
    	<dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_requestCar']) ? $_smarty_tpl->getVariable('list')->value['paiche_requestCar'] : null);?>
</dd>
  	</dl>
  	<?php if ($_smarty_tpl->getVariable('itemlist')->value){?>
	<dl class="lineD" id="dlitems">
	    <dt>其他条款约定：</dt>
	    <dd>
	    <div id="divitems">
	    <ul>
          <li>编号</li><ll>约定条款</ll><li>约定结果</li><li>收费项目</li><li>约定金额</li><li>已收金额</li>
        </ul>
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('itemlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
	    <ul id="V<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
">
          <li><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
</li>
          <ll><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_name']) ? $_smarty_tpl->tpl_vars['row']->value['item_name'] : null);?>
</ll>
          <li><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row']->value['conv_result'] : null);?>
</li>
          <li><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_costname']) ? $_smarty_tpl->tpl_vars['row']->value['item_costname'] : null);?>
</li>
		  <li><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null);?>
</li>
		  <li><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
</li>
        </ul>
        <?php }} ?>
	    </div>
	    </dd>
	</dl>
	<?php }?>
	<?php if ($_smarty_tpl->getVariable('chargelist')->value){?>
    <dl class="lineD" >
	    <dt>收费项目：</dt>
	    <dd>
	    <div id="divcharges">
	    <ul>
          <li>编号</li><li>收费项目</li><li>约定金额</li><li>已收金额</li><li>需退金额</li><li>已退金额</li>
        </ul>
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('chargelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
	    <ul id="U<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_id']) ? $_smarty_tpl->tpl_vars['row']->value['charge_id'] : null);?>
">
          <li><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_id']) ? $_smarty_tpl->tpl_vars['row']->value['charge_id'] : null);?>
</li>
          <li><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null);?>
</li>
          <li><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null);?>
</li>
          <li><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
</li>
          <li><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['back_money']) ? $_smarty_tpl->tpl_vars['row']->value['back_money'] : null);?>
</li>
          <li><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null);?>
</li>
        </ul>
        <?php }} ?>
	    </div>
	    </dd>
	</dl>
	<?php }?>
    <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)!="Y"&&(isset($_smarty_tpl->getVariable('list')->value['settle_overKmMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_overKmMoney_have'] : null)!=0){?>
    <dl class="lineD">
	    <dt>超公里费用：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overKmMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_overKmMoney_have'] : null);?>
</dd>
    </dl>
    <?php }?>
    <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitTime'] : null)!="Y"&&(isset($_smarty_tpl->getVariable('list')->value['settle_overTimeMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_overTimeMoney_have'] : null)!=0){?>
    <dl class="lineD">
	    <dt>超时费用：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overTimeMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_overTimeMoney_have'] : null);?>
</dd>
    </dl>
    <?php }?>
    <?php if ((isset($_smarty_tpl->getVariable('list')->value['settle_favor']) ? $_smarty_tpl->getVariable('list')->value['settle_favor'] : null)!=0){?>
    <dl class="lineD">
	    <dt>订单优惠金额：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_favor']) ? $_smarty_tpl->getVariable('list')->value['settle_favor'] : null);?>
</dd>
    </dl>
    <?php }?>
    <?php if ((isset($_smarty_tpl->getVariable('list')->value['settle_losses']) ? $_smarty_tpl->getVariable('list')->value['settle_losses'] : null)==2){?>
	<dl class="lineD">
	    <dt>订单收入：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_income']) ? $_smarty_tpl->getVariable('list')->value['paiche_income'] : null);?>
</dd>
    </dl>
	<?php }?>
	<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_shunt']) ? $_smarty_tpl->getVariable('list')->value['paiche_shunt'] : null)==1){?>
	<dl class="lineD">
	    <dt>调车公司：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['bro_name']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['bro_name'] : null);?>
</dd>
    </dl>
    <dl class="lineD">
	    <dt>司机：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_driver']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_driver'] : null);?>
</dd>
    </dl>
    <dl class="lineD">
	    <dt>司机号码：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_driverPhone']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_driverPhone'] : null);?>
</dd>
	</dl>
    <dl class="lineD">
	    <dt>租金：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rent']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rent'] : null);?>
</dd>
	</dl>
	<dl class="lineD">
	    <dt>余款给司机：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_balance']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_balance'] : null);?>
</dd>
	</dl>
	<dl class="lineD">
	    <dt>结账金额：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_money']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_money'] : null);?>
</dd>
	</dl>
	<?php }else{ ?>
	<dl class="lineD">
	    <dt>汽车：</dt>
	    <dd><?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_status']) ? $_smarty_tpl->getVariable('list')->value['paiche_status'] : null)==1){?><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
-<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_color']) ? $_smarty_tpl->getVariable('list')->value['car_color'] : null);?>
-<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_brand']) ? $_smarty_tpl->getVariable('list')->value['car_brand'] : null);?>
-<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_type']) ? $_smarty_tpl->getVariable('list')->value['car_type'] : null);?>
<?php }else{ ?>尚未调度<?php }?></dd>
    </dl>
    <?php }?>
    <?php if (($_smarty_tpl->getVariable('busitype')->value=='2'||$_smarty_tpl->getVariable('busitype')->value=='4'||$_smarty_tpl->getVariable('busitype')->value=='5')&&(isset($_smarty_tpl->getVariable('list')->value['paiche_shunt']) ? $_smarty_tpl->getVariable('list')->value['paiche_shunt'] : null)!=1){?>
    <dl class="lineD">
	    <dt>司机：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['siji']) ? $_smarty_tpl->getVariable('list')->value['siji'] : null);?>
</dd>
    </dl>
    <?php }?>
    <?php if ($_smarty_tpl->getVariable('busitype')->value=='2'&&(isset($_smarty_tpl->getVariable('list')->value['paiche_route']) ? $_smarty_tpl->getVariable('list')->value['paiche_route'] : null)!=''){?>
    <dl class="lineD">
	    <dt>路程：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_route']) ? $_smarty_tpl->getVariable('list')->value['paiche_route'] : null);?>
程</dd>
	</dl>
    <?php }?>
    <?php if ($_smarty_tpl->getVariable('busitype')->value=='1'||$_smarty_tpl->getVariable('busitype')->value=='2'){?>
    <dl class="lineD">
	    <dt>开车线路：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_line']) ? $_smarty_tpl->getVariable('list')->value['paiche_line'] : null);?>
</dd>
	</dl>
	<?php }?>
	<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_specialRemarks']) ? $_smarty_tpl->getVariable('list')->value['paiche_specialRemarks'] : null)!=''){?>
	<dl class="lineD">
	    <dt>特殊说明：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_specialRemarks']) ? $_smarty_tpl->getVariable('list')->value['paiche_specialRemarks'] : null);?>
</dd>
	</dl>
	<?php }?>
	<?php if ((isset($_smarty_tpl->getVariable('list')->value['paicheCheckMan']) ? $_smarty_tpl->getVariable('list')->value['paicheCheckMan'] : null)!=''){?>
    <dl class="lineD">
	    <dt>审核人：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paicheCheckMan']) ? $_smarty_tpl->getVariable('list')->value['paicheCheckMan'] : null);?>
</dd>
    </dl>
    <dl class="lineD">
	    <dt>审核时间：</dt>
	    <dd><?php if ((isset($_smarty_tpl->getVariable('list')->value['paicheCheckMan']) ? $_smarty_tpl->getVariable('list')->value['paicheCheckMan'] : null)==''){?><?php }else{ ?><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_checkTimes']) ? $_smarty_tpl->getVariable('list')->value['paiche_checkTimes'] : null);?>
<?php }?></dd>
    </dl>
    <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_checkNote']) ? $_smarty_tpl->getVariable('list')->value['paiche_checkNote'] : null)!=''){?>
    <dl class="lineD">
	    <dt>审核意见：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_checkNote']) ? $_smarty_tpl->getVariable('list')->value['paiche_checkNote'] : null);?>
</dd>
    </dl>
    <?php }?>
    <?php }?>
  </div>
<?php if ($_smarty_tpl->getVariable('continuelist')->value){?>
<div class="list">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr><th colspan="6" style="text-align:left;">续租记录列表</th></tr>
	<tr>
		<th style="width:30px;">序号	</th>
		<th>操作时间</th>
		<th>续租天数</th>
		<th>续租公里数</th>
		<th>续租备注</th>
		<th>操作人</th>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('continuelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
	<tr>
		<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_times']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_times'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_days']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_days'] : null);?>
天</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_kilo']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_kilo'] : null);?>
公里</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_rentRemarks']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_rentRemarks'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerentDispatchMan']) ? $_smarty_tpl->tpl_vars['row']->value['continuerentDispatchMan'] : null);?>
</td>
	</tr>
	<?php }} ?>
</table>
</div>
<?php }?>
<?php if ($_smarty_tpl->getVariable('changelist')->value){?>
<div class="list">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  	<tr><th colspan="8" style="text-align:left;">换车记录列表</th></tr>
  	<tr>
    <th style="width:30px;">序号	</th>
	<th>被换的车</th>
	<th>被换车起始的公里数</th>
	<th>被换车结束的公里数</th>
	<th>更换过来的车</th>
	<th>更换过来的车当前公里数</th>
	<th>换车备注</th>
	<th>调度人</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('changelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <tr >
    	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>
	  	<td>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['carA']) ? $_smarty_tpl->tpl_vars['row']->value['carA'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_carAStartKilo']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_carAStartKilo'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_carAEndKilo']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_carAEndKilo'] : null);?>
</td>
		<td>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['carB']) ? $_smarty_tpl->tpl_vars['row']->value['carB'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_kiloBNow']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_kiloBNow'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_rentRemarks']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_rentRemarks'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecarMan']) ? $_smarty_tpl->tpl_vars['row']->value['changecarMan'] : null);?>
</td>
 </tr>
 <?php }} ?>
 </table>
</div>
<?php }?>
<?php if ($_smarty_tpl->getVariable('month_list')->value){?>
<div class="list">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr><th colspan="18" style="text-align:left;">月结记录列表</th></tr>
  <tr>
	<th>序号</th>
	<th>结账月份</th>
	<th>本期行驶里程</th>
	<th>平时加班</th>
	<th>结周末加班</th>
	<th>节假日加班</th>
	<th>出差次数</th>
	<th>带宿出差次数</th>
	<th>就餐次数</th>
	<th>住宿次数</th>
	<th>垫付路桥费</th>
	<th>结算金额</th>
	<th>开票金额</th>
	<th>发票号码</th>
	<th>状态</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('month_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <tr>
	  	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month_year']) ? $_smarty_tpl->tpl_vars['row']->value['month_year'] : null);?>
年<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month_month']) ? $_smarty_tpl->tpl_vars['row']->value['month_month'] : null);?>
月</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_totalKm']) ? $_smarty_tpl->tpl_vars['row']->value['settle_totalKm'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_dayWork']) ? $_smarty_tpl->tpl_vars['row']->value['settle_dayWork'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_weekWork']) ? $_smarty_tpl->tpl_vars['row']->value['settle_weekWork'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_holWork']) ? $_smarty_tpl->tpl_vars['row']->value['settle_holWork'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_travelTimes']) ? $_smarty_tpl->tpl_vars['row']->value['settle_travelTimes'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_travelRoomTimes']) ? $_smarty_tpl->tpl_vars['row']->value['settle_travelRoomTimes'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_meals']) ? $_smarty_tpl->tpl_vars['row']->value['settle_meals'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_rooms']) ? $_smarty_tpl->tpl_vars['row']->value['settle_rooms'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_advanceIoll']) ? $_smarty_tpl->tpl_vars['row']->value['settle_advanceIoll'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_infact']) ? $_smarty_tpl->tpl_vars['row']->value['settle_infact'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_billMoney']) ? $_smarty_tpl->tpl_vars['row']->value['settle_billMoney'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_billNum']) ? $_smarty_tpl->tpl_vars['row']->value['settle_billNum'] : null);?>
</td>
		<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['month_account']) ? $_smarty_tpl->tpl_vars['row']->value['month_account'] : null)==1){?>已结算<?php }else{ ?>未结算<?php }?></td>
 </tr>
 <?php }} ?>
</table>
</div>
<?php }?>
<?php if ($_smarty_tpl->getVariable('outcarlist')->value){?>
<div class="list">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr><th colspan="12" style="text-align:left;">出车记录列表</th></tr>
  <tr>
	<th>序号</th>
	<th>出车日期</th>
	<th>开始时间</th>
	<th>结束时间</th>
	<th>起始公里</th>
	<th>结束公里</th>
	<th>共行驶里程</th>
	<th>过路费</th>	
	<th>油卡加油</th>
	<th>现金加油</th>
	<th>是否结账</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('outcarlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <tr>
	  	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_date']) ? $_smarty_tpl->tpl_vars['row']->value['drive_date'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_startTime']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startTime'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_endTime']) ? $_smarty_tpl->tpl_vars['row']->value['drive_endTime'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_startKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startKilo'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_endKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_endKilo'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_endKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_endKilo'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['drive_startKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startKilo'] : null);?>
</td>
	    <td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_account']) ? $_smarty_tpl->tpl_vars['row']->value['drive_account'] : null);?>
</td>
 </tr>
 <?php }} ?>
</table>
</div>
<?php }?>
<?php if ($_smarty_tpl->getVariable('breaklist')->value){?>
<div class="list">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  	<tr><th colspan="8" style="text-align:left;">违章记录列表</th></tr>
  	<tr>
    <th style="width:30px;">序号	</th>
	<th>违章日期</th>
	<th>违章金额</th>
	<th>备注</th>
	<th>状态</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('breaklist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <tr >
    	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_date']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_date'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_remarks']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_remarks'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_end']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_end'] : null);?>
</td>
 </tr>
 <?php }} ?>
 </table>
</div>
<?php }?>
<?php if ($_smarty_tpl->getVariable('revisit_list')->value){?>
<div class="list">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  	<tr><th colspan="8" style="text-align:left;">回访记录列表</th></tr>
  	<tr>
    <th style="width:30px;">序号	</th>
	<th>回访日期</th>
	<th>接待人员服务态度</th>
	<th>车辆整洁程度</th>
	<th>车辆准时程度</th>
	<th>司机文明驾驶</th>
	<th>收费合理程度</th>
	<th>其他说明</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('revisit_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <tr >
    	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['revisit_Date']) ? $_smarty_tpl->tpl_vars['row']->value['revisit_Date'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['revisit_reception']) ? $_smarty_tpl->tpl_vars['row']->value['revisit_reception'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['revisit_clean']) ? $_smarty_tpl->tpl_vars['row']->value['revisit_clean'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['revisit_ontime']) ? $_smarty_tpl->tpl_vars['row']->value['revisit_ontime'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['revisit_civilization']) ? $_smarty_tpl->tpl_vars['row']->value['revisit_civilization'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['revisit_charge']) ? $_smarty_tpl->tpl_vars['row']->value['revisit_charge'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['revisit_Remarks']) ? $_smarty_tpl->tpl_vars['row']->value['revisit_Remarks'] : null);?>
</td>
 </tr>
 <?php }} ?>
 </table>
</div>
<?php }?>
</div>

</body>
</html>