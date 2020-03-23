<?php /* Smarty version Smarty-3.0.4, created on 2018-10-28 10:52:03
         compiled from "D:\web\site\templates\elsker\operator/busiaccount/list.html" */ ?>
<?php /*%%SmartyHeaderCode:255365bd524537a85d6-74166377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a4468da7525afd1c3bfc1eff853c8a4a75075f6' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/busiaccount/list.html',
      1 => 1540694575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '255365bd524537a85d6-74166377',
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
</head>
<body onload="winload();">
<div id="waitbackbg" style="display:none;">
	<img src="../../../images/wait2.gif" style="position:absolute;left:50%;top:50%;"/>
</div>
<div class="so_main">
  <div class="page_tit"><?php echo $_smarty_tpl->getVariable('PAGETITLE')->value;?>
</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <div class="form2">
        <form action="<?php echo $_smarty_tpl->getVariable('url')->value;?>
" id="form1" method="get" onsubmit="winsub()">
        <input type="hidden" id="firstop" name="firstop" value="<?php echo $_smarty_tpl->getVariable('firstop')->value;?>
" />
        <input type="hidden" id="op" name="op" value="<?php echo $_smarty_tpl->getVariable('op')->value;?>
" />
            <dl class="lineD">
            <dt>合同号：</dt>
            <dd>
            <input type="text" name="paiche_contractNum" size="16"  />
            </dd>
            </dl>
            <?php if ($_smarty_tpl->getVariable('op')->value=="deposit"){?>
            <dl class="lineD">
	          <dt>租赁类型：</dt>
	          <dd>
	              <select name="b_id" >
	                  <option value="0">请选择</option>
	                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('category')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['item_paicheType']) ? $_smarty_tpl->tpl_vars['rows']->value['item_paicheType'] : null);?>
" <?php if ($_smarty_tpl->getVariable('busitype')->value==(isset($_smarty_tpl->tpl_vars['rows']->value['item_paicheType']) ? $_smarty_tpl->tpl_vars['rows']->value['item_paicheType'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['item_name']) ? $_smarty_tpl->tpl_vars['rows']->value['item_name'] : null);?>
</option>
	                  <?php }} ?>
	              </select>
	          </dd>
	        </dl>
	        <?php }else{ ?>
            <input type="hidden" name="b_id" id="b_id" value="<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
" />
            <?php }?>
	        <dl class="lineD">
	          <dt>用车单位：</dt>
	          <dd>
	              <select name="company" >
	                  <option value="0" <?php if ($_smarty_tpl->getVariable('companyid')->value==0){?>selected<?php }?>>请选择</option>
	                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('companylist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_id']) ? $_smarty_tpl->tpl_vars['rows']->value['client_id'] : null);?>
" <?php if ($_smarty_tpl->getVariable('companyid')->value==(isset($_smarty_tpl->tpl_vars['rows']->value['client_id']) ? $_smarty_tpl->tpl_vars['rows']->value['client_id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_name']) ? $_smarty_tpl->tpl_vars['rows']->value['client_name'] : null);?>
</option>
	                  <?php }} ?>
	              </select>
	          </dd>
	        </dl>
            <dl class="lineD">
            <dt>开始时间：</dt>
            <dd>
            <input id="search_startDate" type="text" value="" name="search_startDate" onClick="calendar.show(this);">
            </dd>
            </dl>            
            <dl class="lineD">
            <dt>结束时间：</dt>
            <dd>
            <input id="search_endDate" type="text" value="" name="search_endDate" onClick="calendar.show(this);">
            </dd>
            </dl>
            <dl class="lineD">
            <dt>联系人/单位：</dt>
            <dd>
            <input type="text" name="paiche_linker" size="16"  />
            </dd>
            </dl>
            <div class="page_btm">
            	<input class="btn_b" type="submit" value="确定">
            </div>
        </form>
    </div>
</div>

  <!-------- 用户列表 -------->
  <div class="Toolbar_inbox">
  	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
	<a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>
	<?php if ($_smarty_tpl->getVariable('op')->value=="account0"){?><input type="radio" value="0" name="busi_id" <?php if ($_smarty_tpl->getVariable('b_id')->value==0){?>checked<?php }?>/>全部<input type="radio" value="1" name="busi_id" <?php if ($_smarty_tpl->getVariable('b_id')->value==1){?>checked<?php }?>/>自驾 <input type="radio" value="2" name="busi_id" <?php if ($_smarty_tpl->getVariable('b_id')->value==2){?>checked<?php }?>/>带驾<?php }?>
	<?php if ($_smarty_tpl->getVariable('op')->value=="account1"){?><input type="radio" value="0" name="busi_id" <?php if ($_smarty_tpl->getVariable('b_id')->value==0){?>checked<?php }?>/>全部<input type="radio" value="1" name="busi_id" <?php if ($_smarty_tpl->getVariable('b_id')->value==1){?>checked<?php }?>/>自驾 <input type="radio" value="21" name="busi_id" <?php if ($_smarty_tpl->getVariable('b_id')->value==21){?>checked<?php }?>/>带驾-散客 <input type="radio" value="20" name="busi_id" <?php if ($_smarty_tpl->getVariable('b_id')->value==20){?>checked<?php }?>/>代驾-长期<?php }?>
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th>租赁类型</th>
	<th>合同号/公司名</th>
	<th>联系人信息</th>
	<th>接待员</th>
	<th>用车时间</th>
	<?php if ($_smarty_tpl->getVariable('op')->value=="deposit"||$_smarty_tpl->getVariable('op')->value=="account0"||$_smarty_tpl->getVariable('op')->value=="account1"){?>
	<th>司机</th>
	<th>车辆</th>
	<?php }?>
	<th width="115">合同约定</th>
	<th width="265">金额明细</th>
	<?php if ($_smarty_tpl->getVariable('op')->value=="backmoney"){?>
	<th>违章情况</th>
	<?php }?>
	<?php if ($_smarty_tpl->getVariable('op')->value=="accvio"){?>
	<th>违约金</th>
	<?php }?>
	<th class="line_l">操作</th>
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
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_name']) ? $_smarty_tpl->tpl_vars['row']->value['item_name'] : null);?>
</td>
	  	<td><a href="../business/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="blank"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_contractNum'] : null);?>
</a><hr /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linker_hid']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linker_hid'] : null);?>
(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linkerPhone_hid']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linkerPhone_hid'] : null);?>
)<hr /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linkerNum_hid']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linkerNum_hid'] : null);?>
<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_brother']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_brother'] : null)>0){?>调车公司：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bro_name']) ? $_smarty_tpl->tpl_vars['row']->value['bro_name'] : null);?>
<?php }?></td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null);?>
<hr/><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['jiedaiyuan']) ? $_smarty_tpl->tpl_vars['row']->value['jiedaiyuan'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_startDate'] : null);?>
<hr /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_endDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_endDate'] : null);?>
</td>
		<?php if ($_smarty_tpl->getVariable('op')->value=="deposit"||$_smarty_tpl->getVariable('op')->value=="account0"||$_smarty_tpl->getVariable('op')->value=="account1"){?>
	    <td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_shunt']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_shunt'] : null)==1){?>调车<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['siji']) ? $_smarty_tpl->tpl_vars['row']->value['siji'] : null);?>
<?php }?></td>
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
	    <?php }?>
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
-已收:<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row1']->value['have_in_money'] : null);?>
<?php }?>
	    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['last']){?><?php }else{ ?><hr /><?php }?>
	    <?php }} ?>
	    
	    </td>
	    
        <td style="text-align:left;">
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
        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_type']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_type'] : null)==1||(isset($_smarty_tpl->tpl_vars['row']->value['paiche_type']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_type'] : null)==3){?><?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row2']->value['charge_name'] : null);?>
:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row2']->value['conv_money'] : null);?>
元-已收:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_in_money'] : null);?>
元-已冻结:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['have_freeze_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_freeze_money'] : null);?>
元<?php if ((isset($_smarty_tpl->tpl_vars['row2']->value['back_money']) ? $_smarty_tpl->tpl_vars['row2']->value['back_money'] : null)!=0){?>-已退:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_back_money'] : null);?>
元<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['last']){?><?php }else{ ?><hr /><?php }?><?php }?>
        <?php }else{ ?>
        <?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row2']->value['charge_name'] : null);?>
:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row2']->value['conv_money'] : null);?>
元-已收:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_in_money'] : null);?>
元<?php if ((isset($_smarty_tpl->tpl_vars['row2']->value['back_money']) ? $_smarty_tpl->tpl_vars['row2']->value['back_money'] : null)!=0){?>-已退:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_back_money'] : null);?>
元<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['last']){?><?php }else{ ?><hr /><?php }?>
        <?php }?>
        <?php }} ?>
        <?php if ($_smarty_tpl->getVariable('op')->value=="account1"){?>
        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['settle_overKmMoney']) ? $_smarty_tpl->tpl_vars['row']->value['settle_overKmMoney'] : null)!=0){?><hr />超公里费:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_overKmMoney']) ? $_smarty_tpl->tpl_vars['row']->value['settle_overKmMoney'] : null);?>
-已收:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_overKmMoney_have']) ? $_smarty_tpl->tpl_vars['row']->value['settle_overKmMoney_have'] : null);?>
<?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['settle_overTimeMoney']) ? $_smarty_tpl->tpl_vars['row']->value['settle_overTimeMoney'] : null)!=0){?><hr />超时费:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_overTimeMoney']) ? $_smarty_tpl->tpl_vars['row']->value['settle_overTimeMoney'] : null);?>
-已收:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_overTimeMoney_have']) ? $_smarty_tpl->tpl_vars['row']->value['settle_overTimeMoney_have'] : null);?>
<?php }?>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['settle_favor']) ? $_smarty_tpl->tpl_vars['row']->value['settle_favor'] : null)>0){?>
        <hr />优惠：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_favor']) ? $_smarty_tpl->tpl_vars['row']->value['settle_favor'] : null);?>
元
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['settle_waitTimeMoney']) ? $_smarty_tpl->tpl_vars['row']->value['settle_waitTimeMoney'] : null)!=0){?>
        <hr />等待费:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_waitTimeMoney']) ? $_smarty_tpl->tpl_vars['row']->value['settle_waitTimeMoney'] : null);?>
-已收:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_waitTimeMoney_have']) ? $_smarty_tpl->tpl_vars['row']->value['settle_waitTimeMoney_have'] : null);?>

        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_shunt']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_shunt'] : null)==1&&(isset($_smarty_tpl->tpl_vars['row']->value['shunt_rent']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_rent'] : null)>0){?>
        <hr />调车公司收现：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shunt_rented']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_rented'] : null);?>
元
        <hr />调车公司报价：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shunt_rent']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_rent'] : null);?>
元<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['shunt_money']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_money'] : null)>0){?>-已付:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shunt_money']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_money'] : null);?>
<?php }?>
        <hr />差额：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shunt_rented']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_rented'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['shunt_rent']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_rent'] : null);?>
元
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_brother']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_brother'] : null)>0){?>
        <hr />我公司收现：<?php echo -1*(isset($_smarty_tpl->tpl_vars['row']->value['shunt_rented']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_rented'] : null);?>
元
        <hr />我公司报价：<?php echo -1*(isset($_smarty_tpl->tpl_vars['row']->value['shunt_rent']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_rent'] : null);?>
元 <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['shunt_money']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_money'] : null)!=0){?>-已收:<?php echo -1*(isset($_smarty_tpl->tpl_vars['row']->value['shunt_money']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_money'] : null);?>
<?php }?>
        <hr />差额：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shunt_rented']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_rented'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['shunt_rent']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_rent'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['shunt_other']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_other'] : null);?>
元
        <?php }?>
        </td>
        <?php if ($_smarty_tpl->getVariable('op')->value=="backmoney"){?>
        <td style="text-align:left;">
        <?php  $_smarty_tpl->tpl_vars['row2'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['row']->value['paiche_breaklist']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_breaklist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row2']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['row2']->iteration=0;
if ($_smarty_tpl->tpl_vars['row2']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row2']->key => $_smarty_tpl->tpl_vars['row2']->value){
 $_smarty_tpl->tpl_vars['row2']->iteration++;
 $_smarty_tpl->tpl_vars['row2']->last = $_smarty_tpl->tpl_vars['row2']->iteration === $_smarty_tpl->tpl_vars['row2']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['last'] = $_smarty_tpl->tpl_vars['row2']->last;
?>
        <?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['breakrules_date']) ? $_smarty_tpl->tpl_vars['row2']->value['breakrules_date'] : null);?>
&nbsp;(<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['breakrules_money']) ? $_smarty_tpl->tpl_vars['row2']->value['breakrules_money'] : null);?>
元)<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['last']){?><?php }else{ ?><hr /><?php }?>
        <?php }} ?>
        </td>
        <?php }?>
        <?php if ($_smarty_tpl->getVariable('op')->value=="accvio"){?>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_vio']) ? $_smarty_tpl->tpl_vars['row']->value['settle_vio'] : null);?>
</td>
		<?php }?>
	    <td><?php if ($_smarty_tpl->getVariable('op')->value=="deposit"){?><a href="javascript:account(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
,'deposit');">收押金</a><?php }?>
	    <?php if ($_smarty_tpl->getVariable('op')->value=="account0"){?><a href="javascript:account(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
,'account0');">收款</a><?php }?>
	    <?php if ($_smarty_tpl->getVariable('op')->value=="accountcon"){?><a href="javascript:account(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
,'accountcon');">收续租金</a><?php }?>
	    <?php if ($_smarty_tpl->getVariable('op')->value=="backdeposit"){?><a href="javascript:account(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
,'backdeposit');">退押金</a><?php }?>
	    <?php if ($_smarty_tpl->getVariable('op')->value=="account1"){?><a href="javascript:account(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
,'account1');">结账</a><?php }?>
	    <?php if ($_smarty_tpl->getVariable('op')->value=="account2"){?><a href="javascript:account(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
,'account2');">收余款</a><?php }?>
	    <?php if ($_smarty_tpl->getVariable('op')->value=="backmoney"){?><a href="javascript:account(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
,'backmoney');">退款</a><?php }?>
	    <?php if ($_smarty_tpl->getVariable('op')->value=="accvio"){?><a href="javascript:account(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
,'accvio');">结算</a><?php }?>&nbsp;|&nbsp;<a href="../business/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="blank">明细</a>
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
</font><?php }} ?><?php }?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_specialRemarks']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_specialRemarks'] : null);?>
</td></tr>
 <?php }} ?>
 </table>
 </div>

  <div class="Toolbar_inbox">
	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>&nbsp;
  </div> 
</div>
<!-->
<script>
	var wh = $(window).height();
	var wt = $(document).scrollTop();
	var isSearchHidden = 1;
	function winload(){ 
	    //$('html,body').animate({scrollTop:$('.bottom').offset().top}, 800);
		$("#waitbackbg").css("display","none");
	}
	function winsub(){
		wh = $(window).height();
		wt = $(document).scrollTop();
		$("#waitbackbg").css({"display":"block","top":wt,"height":wh});
	}
	//鼠标移动表格效果
	$(document).ready(function(){
		var firstop=$("#firstop").val();
		var op=$("#op").val();
		if (firstop=="" && op!="account1" && op!="accountcon"){
			$("#searchTopic_div").slideDown("fast");
			isSearchHidden = 0;
			$("#firstop").val("firstop");
		}
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
		$("input[name='busi_id']").bind("click",function(){
		    $("#b_id").val($(this).val());
			$("#form1").submit();
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
		
	function account(pid,op){
	    var title="";
	    if (op=="deposit") title="订单收押金";
	    if (op=="account0") title="订单收租金";
	    if (op=="accountcon") title="订单收续租金";
	    if (op=="backdeposit") title="结账退押金";
	    if (op=="account1") title="订单结账";
	    if (op=="account2") title="订单收余款";
	    if (op=="backmoney") title="退违章保证金";
		demo_iframe('account.php?pid='+pid+'&op='+op,title,850,460,'login_js');
	}

</script>
<!-->

</body>
</html>