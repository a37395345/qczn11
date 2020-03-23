<?php /* Smarty version Smarty-3.0.4, created on 2015-10-10 15:45:41
         compiled from "D:\czyhqc\site\templates\elsker\operator/business/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:91365618c225a323e3-98956438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '572f20b56df934d9dad709d53f6fc6b8ec58432c' => 
    array (
      0 => 'D:\\czyhqc\\site\\templates\\elsker\\operator/business/detail.html',
      1 => 1444463088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91365618c225a323e3-98956438',
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
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/date_select.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
.tdd{border-bottom:solid 1px #e1e1e1;}
.tbb{border:solid 1px #e1e1e1;}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit">详细信息-<?php echo $_smarty_tpl->getVariable('PAGETITLE')->value;?>
<span class="pc_inner"><?php echo (isset($_smarty_tpl->getVariable('list')->value['shop_name']) ? $_smarty_tpl->getVariable('list')->value['shop_name'] : null);?>
</span></div>
  <div class="form2">
  	<table width="90%" border="0" cellspacing="0" cellpadding="5" class="tbb">
  		<tr>
  		<th style="background: url(../../../css/Arrtitle.png) repeat-x;color:#fff;" colspan="2" >基本信息</th>
  		</tr>
  		<tr>
  		<td colspan="2">
	  		<table width="100%" border="0" cellspacing="10" cellpadding="1">
	  		<tr>
	  		<td class="tdd" width="260">合同号：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_contractNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_contractNum'] : null);?>
</td><td class="tdd" width="260">用车开始时间：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate_All'] : null);?>
</td>
	  		<td class="tdd" width="300">用车结束时间：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_endDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_endDate_All'] : null);?>
</td>
	  		<td class="tdd" width="90">业务员：<?php echo (isset($_smarty_tpl->getVariable('list')->value['yewuyuan']) ? $_smarty_tpl->getVariable('list')->value['yewuyuan'] : null);?>
</td>
	  		<td class="tdd">还车时间：<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_endDate']) ? $_smarty_tpl->getVariable('list')->value['settle_endDate'] : null);?>
</td>
	  		</tr>
	  		<tr>
	  		<td class="tdd">客户要求车型：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_requestCar']) ? $_smarty_tpl->getVariable('list')->value['paiche_requestCar'] : null);?>
</td>
	  		<td class="tdd">租赁时限：<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitTime'] : null)=="Y"){?>不限时间<?php }else{ ?>限时<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_overTime'] : null);?>
元/小时<?php if ((isset($_smarty_tpl->getVariable('list')->value['settle_overTime']) ? $_smarty_tpl->getVariable('list')->value['settle_overTime'] : null)>0){?>&nbsp;&nbsp;超时：<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overTime']) ? $_smarty_tpl->getVariable('list')->value['settle_overTime'] : null);?>
<?php }?><?php }?></td>
	  		<td class="tdd">租赁公里数：<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)=="Y"){?>不限公里<?php }else{ ?>限制<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_limitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_limitKm'] : null);?>
公里，超公里单价：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_overKm'] : null);?>
元/公里<?php if ((isset($_smarty_tpl->getVariable('list')->value['settle_totalcalKm']) ? $_smarty_tpl->getVariable('list')->value['settle_totalcalKm'] : null)>(isset($_smarty_tpl->getVariable('list')->value['paiche_limitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_limitKm'] : null)){?>&nbsp;&nbsp;超公里：<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_totalcalKm']) ? $_smarty_tpl->getVariable('list')->value['settle_totalcalKm'] : null)-(isset($_smarty_tpl->getVariable('list')->value['paiche_limitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_limitKm'] : null);?>
<?php }?><?php if ((isset($_smarty_tpl->getVariable('list')->value['settle_qianMonth']) ? $_smarty_tpl->getVariable('list')->value['settle_qianMonth'] : null)!=0){?>&nbsp;&nbsp;前期累计： <?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_qianMonth']) ? $_smarty_tpl->getVariable('list')->value['settle_qianMonth'] : null);?>
<?php }?><?php }?></td>
	  		<td class="tdd"><?php if (($_smarty_tpl->getVariable('busitype')->value=='1'||$_smarty_tpl->getVariable('busitype')->value=='2')&&(isset($_smarty_tpl->getVariable('list')->value['paiche_front']) ? $_smarty_tpl->getVariable('list')->value['paiche_front'] : null)>0){?>约定定金：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_front']) ? $_smarty_tpl->getVariable('list')->value['paiche_front'] : null);?>
<?php }?></td>
	  		<td class="tdd"><?php if ($_smarty_tpl->getVariable('busitype')->value=='2'&&(isset($_smarty_tpl->getVariable('list')->value['paiche_route']) ? $_smarty_tpl->getVariable('list')->value['paiche_route'] : null)!=''){?>路程：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_route']) ? $_smarty_tpl->getVariable('list')->value['paiche_route'] : null);?>
程<?php }?></td>
	  		</tr>
	  		<tr>
	  		<td class="tdd" colspan="2">开车线路：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_line']) ? $_smarty_tpl->getVariable('list')->value['paiche_line'] : null);?>
</td><td class="tdd" colspan="3">特殊说明：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_specialRemarks']) ? $_smarty_tpl->getVariable('list')->value['paiche_specialRemarks'] : null);?>
</td>
	  		</tr>
	  		</table>
	  	</td>
	  	</tr>
	  	<tr>
  		<th style="background: url(../../../css/Arrtitle.png) repeat-x;color:#fff;" colspan="2">承租人信息</th>
  		</tr>
  		<tr>
  		<td colspan="2">
	  		<table width="100%" border="0" cellspacing="10" cellpadding="1">
	  		<tr>
	  		<td class="tdd"><?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_personal']) ? $_smarty_tpl->getVariable('list')->value['paiche_personal'] : null)==1){?>前台散客<?php }else{ ?>长期合作企业客户<?php }?></td>
	  		<td width="110" class="tdd">联系人：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linker']) ? $_smarty_tpl->getVariable('list')->value['paiche_linker'] : null);?>
</td><td width="160" class="tdd">联系人手机：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerPhone']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerPhone'] : null);?>
</td>
	  		<td width="240" class="tdd">联系人身份证：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerNum'] : null);?>
</td><td width="300" class="tdd">联系人地址：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerAdd']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerAdd'] : null);?>
</td>
	  		</tr>
	  		<tr>
	  		<td ><?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_personal']) ? $_smarty_tpl->getVariable('list')->value['paiche_personal'] : null)==1){?><?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_brother']) ? $_smarty_tpl->getVariable('list')->value['paiche_brother'] : null)>0){?>调车公司:<?php echo (isset($_smarty_tpl->getVariable('list')->value['bro_name']) ? $_smarty_tpl->getVariable('list')->value['bro_name'] : null);?>
<?php }?><?php }else{ ?><?php echo (isset($_smarty_tpl->getVariable('list')->value['client_name']) ? $_smarty_tpl->getVariable('list')->value['client_name'] : null);?>
<?php }?></td>
	  		<td class="tdd">担保人：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promier']) ? $_smarty_tpl->getVariable('list')->value['paiche_promier'] : null);?>
</td><td class="tdd">担保人手机：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promierPhone']) ? $_smarty_tpl->getVariable('list')->value['paiche_promierPhone'] : null);?>
</td>
	  		<td class="tdd">担保人身份证：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promierNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_promierNum'] : null);?>
</td><td >&nbsp;</td>
	  		</tr>
	  		</table>
  		</td>
  		</tr>
  		
  		<tr>
  		<th style="background: url(../../../css/Arrtitle.png) repeat-x;color:#fff;" width="50%">租赁金额</th>
  		<th style="background: url(../../../css/Arrtitle.png) repeat-x;color:#fff;" width="50%">车辆信息</th>
  		</tr>
  		<tr>
  		<td>
	  		<table width="100%" border="1" cellspacing="0" cellpadding="3" class="tbb">
	  		<?php if ($_smarty_tpl->getVariable('itemlist')->value){?>
			<tr>
			<td width="25%">约定条款</td>
	  		<td width="15%">约定结果</td>
	  		<td width="15%">收费项目</td>
	  		<td width="15%">约定金额</td>
	  		<td width="15%">已收金额</td>
	  		</tr>
	  		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('itemlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
	  		<tr>
		          <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_name']) ? $_smarty_tpl->tpl_vars['row']->value['item_name'] : null);?>
</td>
		          <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row']->value['conv_result'] : null);?>
</td>
		          <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_costname']) ? $_smarty_tpl->tpl_vars['row']->value['item_costname'] : null);?>
</td>
				  <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null);?>
</td>
				  <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
</td>
			</tr>
			<?php }} ?>
			<?php }?>
	  		<tr>
	  		<td width="20%">收费项目</td>
	  		<td width="15%" >约定金额</td>
	  		<td width="15%" >已收金额</td>
	  		<td >备注</td>
	  		</tr>
	  		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('chargelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
	  		<tr>
	  		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null);?>
</td>
	  		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null);?>
</td>
	  		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
</td>
	  		<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['back_money']) ? $_smarty_tpl->tpl_vars['row']->value['back_money'] : null)>0&&(isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null)>0){?>已退：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null);?>
<?php }?>
	  			<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null)=='续租金'){?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_start']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_start'] : null);?>
~<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_end']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_end'] : null);?>
<?php }?></td>
	  		</tr>
	  		<?php }} ?>
	  		<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_brother']) ? $_smarty_tpl->getVariable('list')->value['paiche_brother'] : null)>0){?>
		    <tr>
			    <td>我公司报价：</td>
			    <td><?php echo -1*(isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rent']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rent'] : null);?>
</td>
			    <td></td>
			    <td>调车公司用我们的车,我公司收现：<?php echo -1*(isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rented']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rented'] : null);?>
元</td>
			</tr>
		    <?php }?>
			<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_shunt']) ? $_smarty_tpl->getVariable('list')->value['paiche_shunt'] : null)==1){?>
		    <tr>
			    <td>调车公司报价：</td>
			    <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rent']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rent'] : null);?>
</td>
			    <td></td>
			    <td>我们用调车公司的车，调车公司收现：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rented']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rented'] : null);?>
</td>
			</tr>
		    <?php }?>
	  		<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)!="Y"&&(isset($_smarty_tpl->getVariable('list')->value['settle_overKmMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overKmMoney'] : null)!=0){?>
	  		<tr>
	  		<td>超公里费</td>
	  		<td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overKmMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overKmMoney'] : null);?>
</td>
	  		<td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overKmMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_overKmMoney_have'] : null);?>
</td>
	  		<td></td>
	  		</tr>
	  		<?php }?>
    		<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitTime'] : null)!="Y"&&(isset($_smarty_tpl->getVariable('list')->value['settle_overTimeMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overTimeMoney'] : null)!=0){?>
    		<tr>
	  		<td>超时费</td>
	  		<td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overTimeMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overTimeMoney'] : null);?>
</td>
	  		<td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overTimeMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_overTimeMoney_have'] : null);?>
</td>
	  		<td></td>
	  		</tr>
    		<?php }?>
    		<?php if ((isset($_smarty_tpl->getVariable('list')->value['settle_favor']) ? $_smarty_tpl->getVariable('list')->value['settle_favor'] : null)!=0){?>
		    <tr>
			    <td>优惠金额</td>
			    <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_favor']) ? $_smarty_tpl->getVariable('list')->value['settle_favor'] : null);?>
</td>
			    <td></td>
			    <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_favorreason']) ? $_smarty_tpl->getVariable('list')->value['settle_favorreason'] : null);?>
</td>
		    </tr>
		    <?php }?>
		    <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_status']) ? $_smarty_tpl->getVariable('list')->value['paiche_status'] : null)==-1){?>
			<tr>
			    <td>违约金</td>
			    <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_vio']) ? $_smarty_tpl->getVariable('list')->value['settle_vio'] : null);?>
</td>
			    <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_vio']) ? $_smarty_tpl->getVariable('list')->value['settle_vio'] : null);?>
</td>
		    </tr>
			<?php }?>
			<?php if ((isset($_smarty_tpl->getVariable('list')->value['settle_losses']) ? $_smarty_tpl->getVariable('list')->value['settle_losses'] : null)==2){?>
			<tr>
			    <td>订单收入</td>
			    <td colspan="3"><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_income']) ? $_smarty_tpl->getVariable('list')->value['paiche_income'] : null);?>
</td>
		    </tr>
			<?php }?>
	  		</table>
  		</td>
  		<td style="vertical-align:text-top;">
	  		<table width="100%" border="0" cellspacing="10" cellpadding="1">
	  		<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_shunt']) ? $_smarty_tpl->getVariable('list')->value['paiche_shunt'] : null)==1){?>
	  		<tr>
	  		<td class="tdd">调车公司：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['bro_name']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['bro_name'] : null);?>
</td>
	  		<td width="130" class="tdd">司机：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_driver']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_driver'] : null);?>
</td>
	  		<td width="200" class="tdd">司机手机：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_driverPhone']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_driverPhone'] : null);?>
</td>
	  		</tr>
	  		<?php }else{ ?>
	  		<tr>
	  		<td class="tdd">车辆：<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_status']) ? $_smarty_tpl->getVariable('list')->value['paiche_status'] : null)==1){?><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
-<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_color']) ? $_smarty_tpl->getVariable('list')->value['car_color'] : null);?>
-<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_brand']) ? $_smarty_tpl->getVariable('list')->value['car_brand'] : null);?>
-<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_type']) ? $_smarty_tpl->getVariable('list')->value['car_type'] : null);?>
<?php }else{ ?>尚未调度<?php }?></td>
	  		<td width="130" class="tdd"><?php if (($_smarty_tpl->getVariable('busitype')->value=='2'||$_smarty_tpl->getVariable('busitype')->value=='4'||$_smarty_tpl->getVariable('busitype')->value=='5')&&(isset($_smarty_tpl->getVariable('list')->value['paiche_shunt']) ? $_smarty_tpl->getVariable('list')->value['paiche_shunt'] : null)!=1){?>司机：<?php echo (isset($_smarty_tpl->getVariable('list')->value['siji']) ? $_smarty_tpl->getVariable('list')->value['siji'] : null);?>
<?php }?></td>
	  		</tr>
	  		<?php }?>
	  		</table>
  		</td>
  		</tr>
  		<?php if ($_smarty_tpl->getVariable('accountlist')->value||$_smarty_tpl->getVariable('continuelist')->value){?>
  		<tr>
  		<th style="background: url(../../../css/Arrtitle.png) repeat-x;color:#fff;" >收款/支出记录</th>
  		<th style="background: url(../../../css/Arrtitle.png) repeat-x;color:#fff;" >续租记录</th>
  		</tr>
  		<tr>
  		<td>
  			<?php if ($_smarty_tpl->getVariable('accountlist')->value){?>
	  		<table width="100%" border="1" cellspacing="0" cellpadding="2" class="tbb">
			  	<tr>
			    <th style="width:30px;">序号	</th>
				<th width="22%">时间</th>
				<th width="8%">收入</th>
				<th width="8%">支出</th>
				<th width="10%">方式</th>
				<th width="24%">账户</th>
				<th>摘要</th>
			  </tr>
			  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('accountlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
			  <tr>
			    	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>
				  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['add_time']) ? $_smarty_tpl->tpl_vars['row']->value['add_time'] : null);?>
</td>
				  	<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null)>0){?>
				  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
</td>
					<td>&nbsp;</td>
					<?php }else{ ?>
					<td>&nbsp;</td>
					<td><?php echo -1*(isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
</td>
					<?php }?>
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['payment_name']) ? $_smarty_tpl->tpl_vars['row']->value['payment_name'] : null);?>
</td>
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_name']) ? $_smarty_tpl->tpl_vars['row']->value['bank_name'] : null);?>
</td>
				  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
</td>
			 </tr>
			 <?php }} ?>
			</table>
			<?php }?>
  		</td>
  		<td style="vertical-align:text-top;">
  		<?php if ($_smarty_tpl->getVariable('continuelist')->value){?>
  		<table width="100%" border="1" cellspacing="0" cellpadding="2" class="tbb">
			<tr>
				<th style="width:26px;">序号	</th>
				<th width="19%">操作时间</th>
				<th width="11%">续租天数</th>
				<th width="11%">续租公里</th>
				<th>备注</th>
				<th width="8%">操作人</th>
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
				<td>开始:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_start']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_start'] : null);?>
截止:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_end']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_end'] : null);?>
<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_rentRemarks']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_rentRemarks'] : null);?>
</td>
				<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerentDispatchMan']) ? $_smarty_tpl->tpl_vars['row']->value['continuerentDispatchMan'] : null);?>
</td>
			</tr>
			<?php }} ?>
		</table>
  		<?php }?>
  		</td>
  		</tr>
  		<?php }?>
  		<?php if ($_smarty_tpl->getVariable('baoxiao_list')->value){?>
  		<tr>
  		<th style="background: url(../../../css/Arrtitle.png) repeat-x;color:#fff;" colspan="2">报销记录</th>
  		</tr>
  		<tr>
  		<td colspan="2">
  			<table width="100%" border="1" cellspacing="0" cellpadding="2" class="tbb">
		  	<tr>
			  	<th style="width:30px;">序号	</th>
			  	<th>报销人</th>
			  	<th>报销日期</th>
			  	<th>过桥过路费</th>
				<th>停车费</th>
				<th>油费</th>
				<th>住宿费</th>
				<th>餐费</th>
				<th>报销备注</th>
				<th>审核结果</th>
		  	</tr>
		  	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('baoxiao_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
		    <tr >
		    	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>
		    	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</td>
		    	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_date']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_date'] : null);?>
</td>
		    	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_roadQiao']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_roadQiao'] : null);?>
</td>
				<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_stopCar']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_stopCar'] : null);?>
</td>
				<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_oil']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_oil'] : null);?>
</td>
				<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_room']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_room'] : null);?>
</td>
				<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_meal']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_meal'] : null);?>
</td>
				<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_remarks']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_remarks'] : null);?>
</td>
				<td style="text-align:left;"><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgree']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgree'] : null)==0){?>未审核<?php }else{ ?><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgree']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgree'] : null)==-1){?>审核未通过<?php }else{ ?>审核通过<?php }?>(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeMan']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeMan'] : null);?>
&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeTime']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeTime'] : null);?>
)<hr />备注:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeRemarks']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeRemarks'] : null);?>
<?php }?></td>
		    </tr>
		 	<?php }} ?>
		 	</table>
  		</td>
  		</tr>
  		<?php }?>
  		<?php if ($_smarty_tpl->getVariable('changelist')->value){?>
  		<tr>
  		<th style="background: url(../../../css/Arrtitle.png) repeat-x;color:#fff;" colspan="2">换车记录</th>
  		</tr>
  		<tr>
  		<td colspan="2">
	  		<table width="100%" border="1" cellspacing="0" cellpadding="2" class="tbb">
			  	<tr>
			    <th style="width:30px;">序号	</th>
				<th>被换的车</th>
				<th>被换车起始的公里数</th>
				<th>被换车结束的公里数</th>
				<th>更换过来的车</th>
				<th>更换过来的车当前公里数</th>
				<th>原租金</th>
				<th>更换后租金</th>
				<th>换车备注</th>
				<th>调度人</th>
				<th>打印</th>
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
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_rentA']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_rentA'] : null);?>
</td>
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_rentB']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_rentB'] : null);?>
</td>
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_rentRemarks']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_rentRemarks'] : null);?>
</td>
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecarMan']) ? $_smarty_tpl->tpl_vars['row']->value['changecarMan'] : null);?>
</td>
					<td><a href="print.php?uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
&cid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_id']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_id'] : null);?>
&className=changecar" target="_blank">打印换车单</a></td>
			 </tr>
			 <?php }} ?>
			 </table>
  		</td>
  		</tr>
  		<?php }?>
  		<?php if ($_smarty_tpl->getVariable('routelist')->value){?>
  		<tr>
  		<th style="background: url(../../../css/Arrtitle.png) repeat-x;color:#fff;" colspan="2">改变行程记录</th>
  		</tr>
  		<tr>
  		<td colspan="2">
	  		<table width="100%" border="1" cellspacing="0" cellpadding="2" class="tbb">
			  	<tr>
			    <th style="width:30px;">序号	</th>
				<th>原行驶路程</th>
				<th>原租金</th>
				<th>改变后的行程</th>
				<th>改变后的租金</th>
				<th>操作人</th>
				<th>时间</th>
			  </tr>
			  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('routelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
			  <tr >
			    	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>
				  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changeroute_lineA']) ? $_smarty_tpl->tpl_vars['row']->value['changeroute_lineA'] : null);?>
</td>
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changeroute_rentA']) ? $_smarty_tpl->tpl_vars['row']->value['changeroute_rentA'] : null);?>
</td>
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changeroute_lineB']) ? $_smarty_tpl->tpl_vars['row']->value['changeroute_lineB'] : null);?>
</td>
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changeroute_rentB']) ? $_smarty_tpl->tpl_vars['row']->value['changeroute_rentB'] : null);?>
</td>
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changerouteMan']) ? $_smarty_tpl->tpl_vars['row']->value['changerouteMan'] : null);?>
</td>
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changeroute_times']) ? $_smarty_tpl->tpl_vars['row']->value['changeroute_times'] : null);?>
</td>
			 </tr>
			 <?php }} ?>
			</table>
  		</td>
  		</tr>
  		<?php }?>
  		<?php if ($_smarty_tpl->getVariable('month_list')->value){?>
  		<tr>
  		<th style="background: url(../../../css/Arrtitle.png) repeat-x;color:#fff;" colspan="2">月结记录</th>
  		</tr>
  		<tr>
  		<td colspan="2">
	  		<table width="100%" border="1" cellspacing="0" cellpadding="2" class="tbb">
			<tr>
				<?php if (($_smarty_tpl->getVariable('busitype')->value=='1'||$_smarty_tpl->getVariable('busitype')->value=='2'||$_smarty_tpl->getVariable('busitype')->value=='3')){?>
				<th>开始公里数</th>
				<th>结束公里数</th>
				<?php }?>
				<th>本期行驶里程</th>
				<th>优惠金额</th>
				<th>结算金额</th>
				<th>开票金额</th>
				<th>发票号码</th>
				<th>状态</th>
				<th>结账时间</th>
			  </tr>
			  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('month_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
			  <tr>
				  	<?php if (($_smarty_tpl->getVariable('busitype')->value=='1'||$_smarty_tpl->getVariable('busitype')->value=='2'||$_smarty_tpl->getVariable('busitype')->value=='3')){?>
				  	<td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_startKm']) ? $_smarty_tpl->getVariable('list')->value['settle_startKm'] : null);?>
</td>
				  	<td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_endKm']) ? $_smarty_tpl->getVariable('list')->value['settle_endKm'] : null);?>
</td>
				  	<?php }?>
				  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_totalKm']) ? $_smarty_tpl->tpl_vars['row']->value['settle_totalKm'] : null);?>
</td>
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_favor']) ? $_smarty_tpl->tpl_vars['row']->value['settle_favor'] : null);?>
</td>
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_infact']) ? $_smarty_tpl->tpl_vars['row']->value['settle_infact'] : null);?>
</td>
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_billMoney']) ? $_smarty_tpl->tpl_vars['row']->value['settle_billMoney'] : null);?>
</td>
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_billNum']) ? $_smarty_tpl->tpl_vars['row']->value['settle_billNum'] : null);?>
</td>
					<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['month_account']) ? $_smarty_tpl->tpl_vars['row']->value['month_account'] : null)==1){?>已结账<?php }else{ ?>未结账<?php }?></td>
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month_accounttime']) ? $_smarty_tpl->tpl_vars['row']->value['month_accounttime'] : null);?>
</td>
			 </tr>
			 <?php }} ?>
			</table>
  		</td>
  		</tr>
  		<?php }?>
  		<?php if ($_smarty_tpl->getVariable('outcarlist')->value){?>
  		<tr>
  		<form action="detail.php" method="get">
		  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
" />
		  <th style="background: url(../../../css/Arrtitle.png) repeat-x;color:#fff;" colspan="2">出车记录   &nbsp;&nbsp;&nbsp;日期范围：<input type="text" value="<?php echo $_smarty_tpl->getVariable('search_startDate')->value;?>
" name="search_startDate" onClick="calendar.show(this);">到<input type="text" value="<?php echo $_smarty_tpl->getVariable('search_endDate')->value;?>
" name="search_endDate" onClick="calendar.show(this);">
		  <input class="btn_b" type="submit" value="查询">
		  </th>
		</form>
  		</tr>
  		<tr>
  		<td colspan="2">
	  		<table width="100%" border="1" cellspacing="0" cellpadding="2" class="tbb">
			 <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_type']) ? $_smarty_tpl->getVariable('list')->value['paiche_type'] : null)=='3'){?>
				<tr>
				<th>日期</th>
				<th>开始公里</th>
				<th>截止公里</th>
				<th>公里数</th>
				<th>周末/节假日</th>
				</tr>
				<?php }elseif((isset($_smarty_tpl->getVariable('list')->value['paiche_type']) ? $_smarty_tpl->getVariable('list')->value['paiche_type'] : null)=='4'){?>
				<tr>
				<th rowspan="2">日期</th>
				<th colspan="2">开始信息</th>
				<th colspan="2">截止信息</th>
				<th rowspan="2">公里数</th>
				<th rowspan="2">工作时间</th>
				<th rowspan="2">扣除时间</th>
				<th rowspan="2">周末<br />节假日</th>
				<th rowspan="2">是否<br />出差</th>
				<th rowspan="2">带宿<br />出差</th>
				<th rowspan="2">出差备注</th>
				<th rowspan="2">食宿费<br />过路桥</th>
				<th rowspan="2">司机</th>
				</tr>
				<tr>
				  <th>开始公里</th>
				  <th>开始时间</th>
				  <th>截止公里</th>
				  <th>截止时间</th>
				</tr>
				<?php }elseif((isset($_smarty_tpl->getVariable('list')->value['paiche_type']) ? $_smarty_tpl->getVariable('list')->value['paiche_type'] : null)=='5'){?>
				<tr>
				<th>日期</th>
				<th>时间</th>
				<th>周末/节假日</th>
				<th>用途</th>
				<th>起止地点</th>
				<th>趟数</th>
				<th>总费用</th>
				<th>司机</th>
				</tr>
				<?php }else{ ?>
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
				<?php }?>
			  
			  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('outcarlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
			  <tr>
			  	<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_type']) ? $_smarty_tpl->getVariable('list')->value['paiche_type'] : null)=='3'){?>
			  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_date']) ? $_smarty_tpl->tpl_vars['row']->value['drive_date'] : null);?>
</td>
			  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_startKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startKilo'] : null);?>
</td>
			  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_endKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_endKilo'] : null);?>
</td>
			  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_endKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_endKilo'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['drive_startKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startKilo'] : null);?>
</td>
			  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_hol']) ? $_smarty_tpl->tpl_vars['row']->value['drive_hol'] : null);?>
</td>
			  	<?php }elseif((isset($_smarty_tpl->getVariable('list')->value['paiche_type']) ? $_smarty_tpl->getVariable('list')->value['paiche_type'] : null)=='4'){?>
			  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_date']) ? $_smarty_tpl->tpl_vars['row']->value['drive_date'] : null);?>
</td>
			  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_startKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startKilo'] : null);?>
</td>
			  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_startHour']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startHour'] : null);?>
点&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_startMinute']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startMinute'] : null);?>
分</td>
			  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_endKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_endKilo'] : null);?>
</td>
			  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_endHour']) ? $_smarty_tpl->tpl_vars['row']->value['drive_endHour'] : null);?>
点&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_endMinute']) ? $_smarty_tpl->tpl_vars['row']->value['drive_endMinute'] : null);?>
分</td>
			  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_endKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_endKilo'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['drive_startKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startKilo'] : null);?>
</td>
			  	<td><?php echo ((isset($_smarty_tpl->tpl_vars['row']->value['drive_endTime_O']) ? $_smarty_tpl->tpl_vars['row']->value['drive_endTime_O'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['drive_startTime_O']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startTime_O'] : null))/3600;?>
</td>
				  <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_deductTime']) ? $_smarty_tpl->tpl_vars['row']->value['drive_deductTime'] : null)/60;?>
</td>
				  <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_hol']) ? $_smarty_tpl->tpl_vars['row']->value['drive_hol'] : null);?>
</td>
				<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['drive_travel']) ? $_smarty_tpl->tpl_vars['row']->value['drive_travel'] : null)==1){?>是<?php }else{ ?>否<?php }?></td>
				  <td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['drive_travelRoom']) ? $_smarty_tpl->tpl_vars['row']->value['drive_travelRoom'] : null)==1){?>是<?php }else{ ?>否<?php }?></td>
				  <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_travelRemarks']) ? $_smarty_tpl->tpl_vars['row']->value['drive_travelRemarks'] : null);?>
</td>
				  <td style="text-align:left;">火食:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_mealsTimes']) ? $_smarty_tpl->tpl_vars['row']->value['drive_mealsTimes'] : null);?>
次
				  住宿:<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['drive_roomTimes']) ? $_smarty_tpl->tpl_vars['row']->value['drive_roomTimes'] : null)==1){?>是<?php }else{ ?>否<?php }?>
				  路费:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_ioll']) ? $_smarty_tpl->tpl_vars['row']->value['drive_ioll'] : null);?>
元</td>
				  <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['driveDriverName']) ? $_smarty_tpl->tpl_vars['row']->value['driveDriverName'] : null);?>
</td>
			  	<?php }elseif((isset($_smarty_tpl->getVariable('list')->value['paiche_type']) ? $_smarty_tpl->getVariable('list')->value['paiche_type'] : null)=='5'){?>
			  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_date']) ? $_smarty_tpl->tpl_vars['row']->value['drive_date'] : null);?>
</td>
			  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_startHour']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startHour'] : null);?>
点&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_startMinute']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startMinute'] : null);?>
分</td>
			  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_hol']) ? $_smarty_tpl->tpl_vars['row']->value['drive_hol'] : null);?>
</td>
			  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_travelRemarks']) ? $_smarty_tpl->tpl_vars['row']->value['drive_travelRemarks'] : null);?>
</td>
				  <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_specialRemarks']) ? $_smarty_tpl->tpl_vars['row']->value['drive_specialRemarks'] : null);?>
</td>
				  <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_trips']) ? $_smarty_tpl->tpl_vars['row']->value['drive_trips'] : null);?>
趟</td>
				  <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_money']) ? $_smarty_tpl->tpl_vars['row']->value['drive_money'] : null);?>
元</td>
				  <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['driveDriverName']) ? $_smarty_tpl->tpl_vars['row']->value['driveDriverName'] : null);?>
</td>
			  	<?php }else{ ?>
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
				<?php }?>
			 </tr>
			 <?php }} ?>
			</table>
  		</td>
  		</tr>
  		<?php }?>
  		
  		
  	</table>
  </div>


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