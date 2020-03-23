<?php /* Smarty version Smarty-3.0.4, created on 2019-08-02 13:55:35
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/busilong/paichelist.html" */ ?>
<?php /*%%SmartyHeaderCode:203875d43d0579b7127-72263827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d3263ba7a282e70b2061871ee8eeea79a895368' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/busilong/paichelist.html',
      1 => 1560997138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203875d43d0579b7127-72263827',
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
<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/date_select.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
<script type="text/javascript" src="../../../js/My97DatePicker/WdatePicker.js"></script>
</head>
<body>
<div class="so_main">
  <div class="page_tit"><?php echo $_smarty_tpl->getVariable('PAGETITLE')->value;?>
</div>
  <div class="list" style="margin-bottom:5px;">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th width="50">合同号</th><td width="150"><?php echo (isset($_smarty_tpl->getVariable('info')->value['contract_num']) ? $_smarty_tpl->getVariable('info')->value['contract_num'] : null);?>
</td>
	<th width="60">用车单位</th><td><?php echo (isset($_smarty_tpl->getVariable('info')->value['client_name']) ? $_smarty_tpl->getVariable('info')->value['client_name'] : null);?>
</td>
	<th width="60">用车时间</th><td><?php echo (isset($_smarty_tpl->getVariable('info')->value['contract_startDate']) ? $_smarty_tpl->getVariable('info')->value['contract_startDate'] : null);?>
~<?php echo (isset($_smarty_tpl->getVariable('info')->value['contract_endDate']) ? $_smarty_tpl->getVariable('info')->value['contract_endDate'] : null);?>
</td>
	<?php if ((isset($_smarty_tpl->getVariable('info')->value['contract_type']) ? $_smarty_tpl->getVariable('info')->value['contract_type'] : null)=='4'||(isset($_smarty_tpl->getVariable('info')->value['contract_type']) ? $_smarty_tpl->getVariable('info')->value['contract_type'] : null)=='5'){?>
	<th width="35">司机</th><td><?php if ((isset($_smarty_tpl->getVariable('info')->value['contract_shunt']) ? $_smarty_tpl->getVariable('info')->value['contract_shunt'] : null)==1){?>调车<?php }else{ ?><?php echo (isset($_smarty_tpl->getVariable('info')->value['siji']) ? $_smarty_tpl->getVariable('info')->value['siji'] : null);?>
<?php }?></td>
	<?php }?>
	<th width="35">车辆</th><td><?php if ((isset($_smarty_tpl->getVariable('info')->value['contract_shunt']) ? $_smarty_tpl->getVariable('info')->value['contract_shunt'] : null)==1){?>调车<?php }else{ ?><?php echo (isset($_smarty_tpl->getVariable('info')->value['car_num']) ? $_smarty_tpl->getVariable('info')->value['car_num'] : null);?>
<?php }?></td>
	<?php if ((isset($_smarty_tpl->getVariable('info')->value['contract_type']) ? $_smarty_tpl->getVariable('info')->value['contract_type'] : null)=='3'){?>
	<th width="35">押金</th><td><?php echo (isset($_smarty_tpl->getVariable('info')->value['contract_deposit']) ? $_smarty_tpl->getVariable('info')->value['contract_deposit'] : null);?>
</td>
	<?php }?>
	<th width="35">租金</th><td><?php echo (isset($_smarty_tpl->getVariable('info')->value['contract_rent']) ? $_smarty_tpl->getVariable('info')->value['contract_rent'] : null);?>
</td>
	<th width="75">超公里方式</th><td><?php if ((isset($_smarty_tpl->getVariable('info')->value['contract_unlimitKm']) ? $_smarty_tpl->getVariable('info')->value['contract_unlimitKm'] : null)=="Y"){?>不限<?php }elseif((isset($_smarty_tpl->getVariable('info')->value['contract_limitKmType']) ? $_smarty_tpl->getVariable('info')->value['contract_limitKmType'] : null)==1){?>按季<?php }elseif((isset($_smarty_tpl->getVariable('info')->value['contract_limitKmType']) ? $_smarty_tpl->getVariable('info')->value['contract_limitKmType'] : null)==2){?>按年<?php }else{ ?>按月<?php }?></td>
  </tr>
  </table>
  </div>

  <!-------- 用户列表 -------->
  <div class="Toolbar_inbox">
  	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录</div>
	<?php if ((isset($_smarty_tpl->getVariable('info')->value['contract_complete']) ? $_smarty_tpl->getVariable('info')->value['contract_complete'] : null)==0){?><a href="../business/create.php?parentid=<?php echo (isset($_smarty_tpl->getVariable('info')->value['contract_id']) ? $_smarty_tpl->getVariable('info')->value['contract_id'] : null);?>
" class="btn_a">新建派车单</a><?php }?>
	<a href="list.php?b_id=<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
" class="btn_a">返回</a>
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">
		<input type="checkbox" id="checkbox_handle" onclick="checkAll(this)" value="0">
    	<label for="checkbox"></label>
	</th>
	<th>派车单号</th>
	<th>联系人信息</th>
	<th>业务员</th>
	<th>用车时间</th>
	<?php if ($_smarty_tpl->getVariable('busitype')->value=='4'||$_smarty_tpl->getVariable('busitype')->value=='5'){?>
	<th>司机</th>
	<?php }?>
	<th>车辆</th>
	<th>调度人</th>
	<th width="220">金额明细</th>
	<th>限制公里</th>
	<th width="180" class="line_l">操作</th>
  </tr>
  
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('busiList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
">
    	<td bgcolor="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_status_color']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_status_color'] : null);?>
" style="color:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_font_color']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_font_color'] : null);?>
;"><input type="checkbox" name="checkbox" id="checkbox<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_status_name']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_status_name'] : null);?>
</td>
	  	<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_status']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_status'] : null)==0||(isset($_smarty_tpl->tpl_vars['row']->value['paiche_type']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_type'] : null)=='3'){?><a href="../business/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="blank"><?php }else{ ?><a href="list.php?task=paichedetail&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="blank"><?php }?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_contractNum'] : null);?>
</a></td>
		<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['show_tip']) ? $_smarty_tpl->tpl_vars['row']->value['show_tip'] : null)==1){?><div class="tixing">此单已超过合同时间，但是还未还车，请及时处理！</div><?php }?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linker']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linker'] : null);?>
(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linkerPhone']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linkerPhone'] : null);?>
)<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_brother']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_brother'] : null)>0){?><hr />调车公司：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bro_name']) ? $_smarty_tpl->tpl_vars['row']->value['bro_name'] : null);?>
<?php }?></td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['ywshopname']) ? $_smarty_tpl->tpl_vars['row']->value['ywshopname'] : null);?>
<hr/><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['yewuyuan']) ? $_smarty_tpl->tpl_vars['row']->value['yewuyuan'] : null);?>
</td>
		<td><span id="start_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" dat-id="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" class="spanremarks"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_startDate'] : null);?>
</span><input type="text" id="startdate_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" value="" style="display:none;" size="15" class="textremarks" /><hr />
		<span id="end_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" dat-id="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" class="spanremarks"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_endDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_endDate'] : null);?>
</span><input type="text" id="enddate_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" value="" style="display:none;" size="15" class="textremarks" /></td>
	    
	    <?php if ($_smarty_tpl->getVariable('busitype')->value=='4'||$_smarty_tpl->getVariable('busitype')->value=='5'){?>
        <td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_shunt']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_shunt'] : null)==1){?>调车<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['siji']) ? $_smarty_tpl->tpl_vars['row']->value['siji'] : null);?>
<?php }?></td>
        <?php }?>
	    <td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_shunt']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_shunt'] : null)==1){?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_shuntline']['bro_name']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_shuntline']['bro_name'] : null);?>
<?php }else{ ?>
	    <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_changelist']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_changelist'] : null)){?><?php  $_smarty_tpl->tpl_vars['row10'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['row']->value['paiche_changelist']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_changelist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row10']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['row10']->iteration=0;
if ($_smarty_tpl->tpl_vars['row10']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row10']->key => $_smarty_tpl->tpl_vars['row10']->value){
 $_smarty_tpl->tpl_vars['row10']->iteration++;
 $_smarty_tpl->tpl_vars['row10']->last = $_smarty_tpl->tpl_vars['row10']->iteration === $_smarty_tpl->tpl_vars['row10']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['last'] = $_smarty_tpl->tpl_vars['row10']->last;
?><hr /><font style="TEXT-DECORATION: line-through;"><?php echo (isset($_smarty_tpl->tpl_vars['row10']->value['carA']) ? $_smarty_tpl->tpl_vars['row10']->value['carA'] : null);?>
</font><?php }} ?><?php }?>
	    <?php }?>
	    </td>
        <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paicheDispatchMan']) ? $_smarty_tpl->tpl_vars['row']->value['paicheDispatchMan'] : null);?>
<hr /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_dispatchTimes']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_dispatchTimes'] : null);?>
</td>
        <td style="text-align:left;">
        <?php  $_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['row']->value['paiche_itemlist']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_itemlist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row1']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['row1']->iteration=0;
if ($_smarty_tpl->tpl_vars['row1']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row1']->key => $_smarty_tpl->tpl_vars['row1']->value){
 $_smarty_tpl->tpl_vars['row1']->iteration++;
 $_smarty_tpl->tpl_vars['row1']->last = $_smarty_tpl->tpl_vars['row1']->iteration === $_smarty_tpl->tpl_vars['row1']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['last'] = $_smarty_tpl->tpl_vars['row1']->last;
?>
	    <?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['item_name']) ? $_smarty_tpl->tpl_vars['row1']->value['item_name'] : null);?>
:<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row1']->value['conv_result'] : null);?>
<?php if ((isset($_smarty_tpl->tpl_vars['row1']->value['item_calcu']) ? $_smarty_tpl->tpl_vars['row1']->value['item_calcu'] : null)==1&&(isset($_smarty_tpl->tpl_vars['row1']->value['item_caltype']) ? $_smarty_tpl->tpl_vars['row1']->value['item_caltype'] : null)==1){?>/<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['item_unit']) ? $_smarty_tpl->tpl_vars['row1']->value['item_unit'] : null);?>
<?php }?>
	    <?php if ((isset($_smarty_tpl->tpl_vars['row1']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row1']->value['conv_money'] : null)!=0){?><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['item_costname']) ? $_smarty_tpl->tpl_vars['row1']->value['item_costname'] : null);?>
:<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row1']->value['conv_money'] : null);?>
<?php }?>
	    <hr />
	    <?php }} ?>
        <?php  $_smarty_tpl->tpl_vars['row2'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['row']->value['paiche_chargelist']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_chargelist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row2']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['row2']->iteration=0;
if ($_smarty_tpl->tpl_vars['row2']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row2']->key => $_smarty_tpl->tpl_vars['row2']->value){
 $_smarty_tpl->tpl_vars['row2']->iteration++;
 $_smarty_tpl->tpl_vars['row2']->last = $_smarty_tpl->tpl_vars['row2']->iteration === $_smarty_tpl->tpl_vars['row2']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['last'] = $_smarty_tpl->tpl_vars['row2']->last;
?>
        <?php if ((isset($_smarty_tpl->tpl_vars['row2']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row2']->value['charge_name'] : null)=='押金'){?>
        <?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row2']->value['charge_name'] : null);?>
:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row2']->value['conv_money'] : null);?>
元-已收:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_in_money'] : null);?>
元<?php if ((isset($_smarty_tpl->tpl_vars['row2']->value['back_money']) ? $_smarty_tpl->tpl_vars['row2']->value['back_money'] : null)!=0){?>-已退:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_back_money'] : null);?>
元<?php }?>
        <?php }else{ ?>
        <?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row2']->value['charge_name'] : null);?>
:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row2']->value['conv_money'] : null);?>
元
        <?php }?>
        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['last']){?><?php }else{ ?><hr /><?php }?>
        <?php }} ?>
        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['settle_overKmMoney']) ? $_smarty_tpl->tpl_vars['row']->value['settle_overKmMoney'] : null)!=0){?><hr />超公里费:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_overKmMoney']) ? $_smarty_tpl->tpl_vars['row']->value['settle_overKmMoney'] : null);?>
<?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['settle_overTimeMoney']) ? $_smarty_tpl->tpl_vars['row']->value['settle_overTimeMoney'] : null)!=0){?><hr />超时费:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_overTimeMoney']) ? $_smarty_tpl->tpl_vars['row']->value['settle_overTimeMoney'] : null);?>
<?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['settle_favor']) ? $_smarty_tpl->tpl_vars['row']->value['settle_favor'] : null)>0){?><hr />优惠：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_favor']) ? $_smarty_tpl->tpl_vars['row']->value['settle_favor'] : null);?>
元 <?php }?>
        <?php if (((isset($_smarty_tpl->tpl_vars['row']->value['paiche_shunt']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_shunt'] : null)==1||(isset($_smarty_tpl->tpl_vars['row']->value['paiche_brother']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_brother'] : null)>0)){?>
        <hr />调车公司收现：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shunt_rented']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_rented'] : null);?>
元
        <hr />调车公司报价：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shunt_rent']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_rent'] : null);?>
元<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['shunt_money']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_money'] : null)>0){?>-已付:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shunt_money']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_money'] : null);?>
<?php }?>
        <hr />调车结算：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shunt_rented']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_rented'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['shunt_rent']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_rent'] : null);?>
元
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['settle_favor_m']) ? $_smarty_tpl->tpl_vars['row']->value['settle_favor_m'] : null)>0){?><hr />优惠：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_favor_m']) ? $_smarty_tpl->tpl_vars['row']->value['settle_favor_m'] : null);?>
元 <?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_status']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_status'] : null)==-1){?><hr />违约金：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_vio']) ? $_smarty_tpl->tpl_vars['row']->value['settle_vio'] : null);?>
元 <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['settle_losses']) ? $_smarty_tpl->tpl_vars['row']->value['settle_losses'] : null)!=0&&(isset($_smarty_tpl->tpl_vars['row']->value['settle_infact']) ? $_smarty_tpl->tpl_vars['row']->value['settle_infact'] : null)>0){?><hr />

        结算金额：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_infact']) ? $_smarty_tpl->tpl_vars['row']->value['settle_infact'] : null);?>
元 -已结:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_billMoney_have']) ? $_smarty_tpl->tpl_vars['row']->value['settle_billMoney_have'] : null);?>
<?php }?>
        </td>
	    <td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_unlimitKm']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_unlimitKm'] : null)=="Y"){?>不限<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_limitKm']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_limitKm'] : null);?>
<?php }?></td>
	    <td>
	    <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_status']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_status'] : null)<0){?>
	    <a href="../business/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="blank">明细</a>
	    <?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['paiche_status']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_status'] : null)==0){?><a href="../business/modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
">编辑</a>&nbsp;|&nbsp;<a href="javascript:diaodu(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);">调度</a>&nbsp;|&nbsp;
	    <a href="../business/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="blank">明细</a>
	    <?php }else{ ?>
	    <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['settle_losses']) ? $_smarty_tpl->tpl_vars['row']->value['settle_losses'] : null)==0){?>
	    <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['settle_totalKm']) ? $_smarty_tpl->tpl_vars['row']->value['settle_totalKm'] : null)==0&&(isset($_smarty_tpl->tpl_vars['row']->value['paiche_status']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_status'] : null)!=-1){?><a href="javascript:vio(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);">违约</a>&nbsp;|&nbsp;<?php }?>
	    <a href="javascript:changeCar(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);">换车</a>&nbsp;|&nbsp;<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_type']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_type'] : null)=='4'||(isset($_smarty_tpl->tpl_vars['row']->value['paiche_type']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_type'] : null)=='5'){?><a href="javascript:changeDriver(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);">换司机</a>&nbsp;|&nbsp;<?php }?>
	    <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_type']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_type'] : null)=='3'){?><a href="javascript:returnCar(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);">还车</a>
		<?php }elseif(((isset($_smarty_tpl->tpl_vars['row']->value['paiche_type']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_type'] : null)=='4'&&(isset($_smarty_tpl->getVariable('info')->value['paiche_calType']) ? $_smarty_tpl->getVariable('info')->value['paiche_calType'] : null)==1)){?><a href="javascript:giveCar(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);">费用单</a>&nbsp;|&nbsp;<a href="../business/list.php?task=outcarlist&pid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
">月结</a>
		<?php }else{ ?><a href="../business/outcar.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
">出车单</a>&nbsp;|&nbsp;<a href="../business/list.php?task=outcarlist&pid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
">月结</a><?php }?>
	    &nbsp;|&nbsp;
	    <?php }?>
	    <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_type']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_type'] : null)=='3'||(isset($_smarty_tpl->tpl_vars['row']->value['settle_losses']) ? $_smarty_tpl->tpl_vars['row']->value['settle_losses'] : null)=='2'){?><a href="../business/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="blank">明细</a><?php }else{ ?><a href="list.php?task=paichedetail&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="blank">明细</a><?php }?>

	    <?php }?>
	    
		</td>
 </tr>
 <tr><td colspan="20" style="text-align:left;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_line']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_line'] : null);?>
<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_routelist']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_routelist'] : null)){?>&nbsp;&nbsp;&nbsp;<?php  $_smarty_tpl->tpl_vars['row10'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['row']->value['paiche_routelist']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_routelist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row10']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['row10']->iteration=0;
if ($_smarty_tpl->tpl_vars['row10']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row10']->key => $_smarty_tpl->tpl_vars['row10']->value){
 $_smarty_tpl->tpl_vars['row10']->iteration++;
 $_smarty_tpl->tpl_vars['row10']->last = $_smarty_tpl->tpl_vars['row10']->iteration === $_smarty_tpl->tpl_vars['row10']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['last'] = $_smarty_tpl->tpl_vars['row10']->last;
?><font style="TEXT-DECORATION: line-through;">原路线：<?php echo (isset($_smarty_tpl->tpl_vars['row10']->value['changeroute_lineA']) ? $_smarty_tpl->tpl_vars['row10']->value['changeroute_lineA'] : null);?>
&nbsp;&nbsp;&nbsp;原租金：<?php echo (isset($_smarty_tpl->tpl_vars['row10']->value['changeroute_rentA']) ? $_smarty_tpl->tpl_vars['row10']->value['changeroute_rentA'] : null);?>
</font><?php }} ?><?php }?></td></tr>
 <?php }} ?>
 </table>
 </div>

</div>
<!-->
<script>
var now_paiche_id=0;
	//鼠标移动表格效果
	$(document).ready(function(){
	    $("#tmpcontractNum").focus();
        $("a.zoomIn").fancybox({
            'overlayShow'   : false,
            'transitionIn'  : 'elastic',
            'transitionOut' : 'elastic'
        });         
        
		$("tr[overstyle='on']").hover(
		  function () {
		    $(this).addClass("bg_hover");
		  },
		  function () {
		    $(this).removeClass("bg_hover");
		  }
		);
		$(".spanremarks").click(function(){
	    	now_paiche_id=$(this).attr("dat-id");
	    	$(this).css("display","none");
	    	if ($(this).attr("id")=="start_"+now_paiche_id){
	    		$("#startdate_"+now_paiche_id).css("display","inline-block");
		    	$("#startdate_"+now_paiche_id).val($(this).html());
		    	$("#startdate_"+now_paiche_id).focus();
	    	}else{
	    		$("#enddate_"+now_paiche_id).css("display","inline-block");
		    	$("#enddate_"+now_paiche_id).val($(this).html());
		    	$("#enddate_"+now_paiche_id).focus();
	    	}
	    	
	    });
	    //失去焦点
	    $(".textremarks").blur(function(){
	    	now_date=$(this).val();
	    	$(this).css("display","none");
	    	if ($(this).attr("id")=="startdate_"+now_paiche_id){
	    		$("#start_"+now_paiche_id).html(now_date);
		    	$("#start_"+now_paiche_id).css("display","inline-block");
		    	$.get("list.php?task=uppaichedate&paiche_id="+now_paiche_id+"&startdate="+now_date,{}, function(jsonmsg){
	    			
	    		},"json");
	    	}else{
	    		$("#end_"+now_paiche_id).html(now_date);
		    	$("#end_"+now_paiche_id).css("display","inline-block");
		    	$.get("list.php?task=uppaichedate&paiche_id="+now_paiche_id+"&enddate="+now_date,{}, function(jsonmsg){
	    			
	    		},"json");
	    	}
            now_paiche_id=0;
        });
	    //回车
	    $(".textremarks").keydown(function(event){
        if (event.keyCode == 13){
        	now_date=$(this).val();
        	$(this).css("display","none");
        	if ($(this).attr("id")=="startdate_"+now_paiche_id){
	    		$("#start_"+now_paiche_id).html(now_date);
		    	$("#start_"+now_paiche_id).css("display","inline-block");
		    	$.get("list.php?task=uppaichedate&paiche_id="+now_paiche_id+"&startdate="+now_date,{}, function(jsonmsg){
	    			
	    		},"json");
	    	}else{
	    		$("#end_"+now_paiche_id).html(now_date);
		    	$("#end_"+now_paiche_id).css("display","inline-block");
		    	$.get("list.php?task=uppaichedate&paiche_id="+now_paiche_id+"&enddate="+now_date,{}, function(jsonmsg){
	    			
	    		},"json");
	    	}
            now_paiche_id=0;
        }
        });
	});
	
	function checkon(o){
		if( o.checked == true ){
			$(o).parents('tr').addClass('bg_on') ;
		}else{
			$(o).parents('tr').removeClass('bg_on') ;
		}
	}
	
	function checkAll(o){
		if( o.checked == true ){
			$('input[name="checkbox"]').attr('checked','true');
			$('tr[overstyle="on"]').addClass("bg_on");
		}else{
			$('input[name="checkbox"]').removeAttr('checked');
			$('tr[overstyle="on"]').removeClass("bg_on");
		}
	}
	
	//获取已选择记录的ID数组
	function getChecked() {
		var uids = new Array();
		$.each($('table input:checked'), function(i, n){
			uids.push( $(n).val() );
		});
		return uids;
	}
    
    var isSearchHidden = 1;
    function searchNews() {
      if(isSearchHidden == 1) {
        $("#searchTopic_div").slideDown("fast");
        isSearchHidden = 0;
      }else {
        $("#searchTopic_div").slideUp("fast");
        isSearchHidden = 1;
      }
    }
	function folder(type, _this) {
		$('#search_'+type).slideToggle('fast');
		if ($(_this).html() == '展开') {
			$(_this).html('收起');
		}else {
			$(_this).html('展开');
		}
		
	}
	
	function changeroute(pid){
		demo_iframe('../business/changeroute.php?pid='+pid,'改变行程',750,520,'login_js');
	}
	function diaodu(pid){
		demo_iframe('../business/diaodu.php?pid='+pid,'车辆调度',750,460,'login_js');
	}
	
	function changeCar(pid){
		demo_iframe('../business/changecar.php?pid='+pid,'中途换车',950,480,'login_js');
	}
	function changeDriver(pid){
	    demo_iframe('../business/changedriver.php?pid='+pid,'中途换司机',650,460,'login_js');
	}
	
	function returnCar(pid){
		demo_iframe('returncar.php?pid='+pid,'自驾还车',750,460,'login_js');
	}
	
	function giveCar(pid){
		demo_iframe('givecar.php?pid='+pid,'司机费用单',750,460,'login_js');
	}
	function vio(pid){
		demo_iframe('../business/vio.php?pid='+pid,'订单违约',850,460,'login_js');
	}
	
	
	function batchaccount(){
		pid = getChecked();
		pid = pid.toString();
        if(pid == ''){
        	alert("请先选择用车记录！");
        	return false;
        }
        demo_iframe('batchaccount.php?pids='+pid,'批量结账处理',950,500,'login_js');
	}
	
	function shuntaccount(){
		pid = getChecked();
		pid = pid.toString();
        if(pid == ''){
        	alert("请先选择用车记录！");
        	return false;
        }
        demo_iframe('shuntaccount.php?pids='+pid,'调车结账处理',750,500,'login_js');
	}

</script>
<!-->

</body>
</html>