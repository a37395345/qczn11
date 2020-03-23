<?php /* Smarty version Smarty-3.0.4, created on 2019-05-24 14:45:30
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/business/zijia_list.html" */ ?>
<?php /*%%SmartyHeaderCode:140085ce7930a9e9f98-84093094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc8dd352a4b71c2fefe0e6fd0425eca5ececfbc5' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/business/zijia_list.html',
      1 => 1558680323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140085ce7930a9e9f98-84093094',
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
<body>
<div class="so_main">
  <div class="page_tit">临时自驾派车管理</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <div class="form2">
        <form id="form1" action="zijia_list.php" method="get">
        	<input type="hidden" name="search_status" id="search_status" value="<?php echo $_smarty_tpl->getVariable('search_status')->value;?>
" />

        	<input type="hidden" name="search_overtime" id="search_overtime" value="<?php echo $_smarty_tpl->getVariable('search_overtime')->value;?>
" />
            <dl class="lineD">
            <dt>合同号：</dt>
            <dd>
            <input type="text" name="paiche_contractNum" size="16"  />
            </dd>
            </dl>

	        <dl class="lineD">
	          <dt>用车单位：</dt>
	          <dd>
	              <select name="company" id="company">
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
	              </select><input type="text" id="search_key" size="4" placeholder="快速检索" />
	          </dd>
	        </dl>

            <dl class="lineD">
            <dt>开始时间：</dt>
            <dd>
            <input id="search_startDate" type="text" value="<?php echo $_smarty_tpl->getVariable('search_startDate')->value;?>
" name="search_startDate" onClick="calendar.show(this);">
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
            <dl class="lineD">
            <dt>联系电话：</dt>
            <dd>
            <input type="text" name="paiche_linkerPhone" size="16"  />
            </dd>
            </dl>
            <dl class="lineD">
            <dt>车牌号：</dt>
            <dd>
            	苏D<input type="text" name="paiche_car" size="12"  />
            </dd>
            </dl>
            <dl class="lineD">
            <dt>店铺：</dt>
            <dd>
            <input type="radio" name="search_shop" value="" <?php $_tmp1=$_smarty_tpl->getVariable('search_shop')->value;?><?php if (empty($_tmp1)){?>checked<?php }?> />全部 
            <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shoplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
            <input type="radio" name="search_shop" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null);?>
" <?php if ($_smarty_tpl->getVariable('search_shop')->value==(isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null)){?>checked<?php }?>/><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>
负责
            <?php }} ?>
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
	
	<?php if ($_smarty_tpl->getVariable('op')->value==''){?><a href="zijia_create.php?b_id=<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
&clientid=<?php echo $_smarty_tpl->getVariable('clientid')->value;?>
" class="btn_a"><span>添加</span></a><?php }?>
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>
    
        <input type="radio" name="showshop" value="" <?php $_tmp2=$_smarty_tpl->getVariable('search_shop')->value;?><?php if (empty($_tmp2)){?>checked<?php }?> />全部 

        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shoplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
            <input type="radio" name="showshop" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null);?>
" <?php if ($_smarty_tpl->getVariable('search_shop')->value==(isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null)){?>checked<?php }?>/><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>
负责
        <?php }} ?></br>

        <input type="radio" name="showtype" value="d" <?php if ($_smarty_tpl->getVariable('search_status')->value=="d"){?>checked<?php }?>>已调度未还车
        <input type="radio" name="showtype" value="y" <?php if ($_smarty_tpl->getVariable('search_status')->value=="y"){?>checked<?php }?>>预约

       
        <input type="radio" name="showtype" value="r" <?php if ($_smarty_tpl->getVariable('search_status')->value=="r"){?>checked<?php }?>>已还车
        
        <input type="radio" name="showtype" value="a" <?php if ($_smarty_tpl->getVariable('search_status')->value=="a"){?>checked<?php }?>>全部
        &nbsp;&nbsp;
        <input type="checkbox" id="chkOvertime" value="1" <?php if ($_smarty_tpl->getVariable('search_overtime')->value==1){?>checked<?php }?>>超期未还车&nbsp;&nbsp;<span id="spnOvertime" style="color:#F00;font-size:14px;"></span>
  </div>









  
  <div class="Toolbar_inbox">
  	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
	&nbsp;
  </div>
  



  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">
		<input type="checkbox" id="checkbox_handle" onclick="checkAll(this)" value="0">
    	<label for="checkbox"></label>
	</th>
	
	<th>合同号/公司名</th>
	<th>联系人信息</th>
	<th width="40">业务员</th>
	<th>用车时间</th>
	<th width="40">调度人</th>
	<th>车辆</th>
	<th width="265">金额明细</th>
	<th class="line_l" style="min-width:60px;">操作</th>
  </tr>
  
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('busiList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  <?php $_smarty_tpl->tpl_vars['canreturn'] = new Smarty_variable(0, null, null);?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
">
    	<td bgcolor="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_status_color']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_status_color'] : null);?>
" style="color:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_font_color']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_font_color'] : null);?>
;">
            <input type="checkbox" name="checkbox" id="checkbox<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_status_name']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_status_name'] : null);?>

        </td>

	  	<td><a href="detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="blank"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_contractNum'] : null);?>
</a>
            <hr /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null);?>

        </td>


		<td>
            <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['show_tip']) ? $_smarty_tpl->tpl_vars['row']->value['show_tip'] : null)==1){?>
                <div class="tixing">此单已超过合同时间，但是还未还车，请及时处理！</div>
            <?php }?>
            <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linker_hid']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linker_hid'] : null);?>
(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linkerPhone_hid']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linkerPhone_hid'] : null);?>
)<hr />

            <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linkerNum_hid']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linkerNum_hid'] : null);?>
<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_brother']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_brother'] : null)>0){?>调车公司：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bro_name']) ? $_smarty_tpl->tpl_vars['row']->value['bro_name'] : null);?>
<?php }?></td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['ywshopname']) ? $_smarty_tpl->tpl_vars['row']->value['ywshopname'] : null);?>
<hr/><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['yewuyuan']) ? $_smarty_tpl->tpl_vars['row']->value['yewuyuan'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_startDate'] : null);?>
<hr /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_endDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_endDate'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null);?>
<hr/><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['jiedaiyuan']) ? $_smarty_tpl->tpl_vars['row']->value['jiedaiyuan'] : null);?>
</td>
	   
	    <td>
            <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_shunt']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_shunt'] : null)==1){?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_shuntline']['bro_name']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_shuntline']['bro_name'] : null);?>
<?php }else{ ?>
	            <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_status']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_status'] : null)==0){?>
                    <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num2']) ? $_smarty_tpl->tpl_vars['row']->value['car_num2'] : null);?>

                <?php }else{ ?>
	                <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_changelist']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_changelist'] : null)){?>
                        <?php  $_smarty_tpl->tpl_vars['row10'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['row']->value['paiche_changelist']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_changelist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row10']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['row10']->iteration=0;
if ($_smarty_tpl->tpl_vars['row10']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row10']->key => $_smarty_tpl->tpl_vars['row10']->value){
 $_smarty_tpl->tpl_vars['row10']->iteration++;
 $_smarty_tpl->tpl_vars['row10']->last = $_smarty_tpl->tpl_vars['row10']->iteration === $_smarty_tpl->tpl_vars['row10']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['last'] = $_smarty_tpl->tpl_vars['row10']->last;
?>
                        <hr /><font style="TEXT-DECORATION: line-through;"><?php echo (isset($_smarty_tpl->tpl_vars['row10']->value['carA']) ? $_smarty_tpl->tpl_vars['row10']->value['carA'] : null);?>
</font><?php }} ?>
                    <?php }?>
	           <?php }?>
           <?php }?>
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
            <?php $_tmp3=(isset($_smarty_tpl->tpl_vars['row2']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_in_money'] : null);?><?php if (!empty($_tmp3)){?><?php $_smarty_tpl->tpl_vars['canreturn'] = new Smarty_variable(1, null, null);?><?php }?>
            <?php if ($_smarty_tpl->getVariable('op')->value=="backmoney"){?>
                <?php if ((isset($_smarty_tpl->tpl_vars['row2']->value['back_money']) ? $_smarty_tpl->tpl_vars['row2']->value['back_money'] : null)!=0&&(isset($_smarty_tpl->tpl_vars['row2']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_back_money'] : null)!=(isset($_smarty_tpl->tpl_vars['row2']->value['back_money']) ? $_smarty_tpl->tpl_vars['row2']->value['back_money'] : null)){?>
                    <?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row2']->value['charge_name'] : null);?>
:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row2']->value['conv_money'] : null);?>
元-已收:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_in_money'] : null);?>
元-已退:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_back_money'] : null);?>
元
                <?php }?>
            <?php }else{ ?>
                <?php if ((isset($_smarty_tpl->tpl_vars['row2']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row2']->value['charge_name'] : null)=='押金'){?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_type']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_type'] : null)==1){?>
                        <?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row2']->value['charge_name'] : null);?>
:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row2']->value['conv_money'] : null);?>
元-已收:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_in_money'] : null);?>
元-已冻结:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['have_freeze_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_freeze_money'] : null);?>
元
                        <?php if ((isset($_smarty_tpl->tpl_vars['row2']->value['back_money']) ? $_smarty_tpl->tpl_vars['row2']->value['back_money'] : null)!=0){?>-已退:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_back_money'] : null);?>
元
                        <?php }?>
                        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['last']){?>
                        <?php }else{ ?><hr />
                        <?php }?>
                    <?php }?>
                <?php }else{ ?>
                    <?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row2']->value['charge_name'] : null);?>
:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row2']->value['conv_money'] : null);?>
元
                    <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_type']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_type'] : null)=='1'||(isset($_smarty_tpl->tpl_vars['row']->value['paiche_type']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_type'] : null)=='2'){?>
                        -已收:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_in_money'] : null);?>
元
                    <?php }?>
                    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['last']){?><?php }else{ ?><hr /><?php }?>
                <?php }?>
            <?php }?>
        <?php }} ?>
        

        
        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['settle_overKmMoney']) ? $_smarty_tpl->tpl_vars['row']->value['settle_overKmMoney'] : null)!=0){?><hr />超公里费:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_overKmMoney']) ? $_smarty_tpl->tpl_vars['row']->value['settle_overKmMoney'] : null);?>
-已收:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_overKmMoney_have']) ? $_smarty_tpl->tpl_vars['row']->value['settle_overKmMoney_have'] : null);?>

        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['settle_overTimeMoney']) ? $_smarty_tpl->tpl_vars['row']->value['settle_overTimeMoney'] : null)!=0){?><hr />超时费:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_overTimeMoney']) ? $_smarty_tpl->tpl_vars['row']->value['settle_overTimeMoney'] : null);?>
-已收:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_overTimeMoney_have']) ? $_smarty_tpl->tpl_vars['row']->value['settle_overTimeMoney_have'] : null);?>

        <?php }?>
       

        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['settle_favor']) ? $_smarty_tpl->tpl_vars['row']->value['settle_favor'] : null)>0){?>
        <hr />优惠：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_favor']) ? $_smarty_tpl->tpl_vars['row']->value['settle_favor'] : null);?>
元
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['settle_waitTimeMoney']) ? $_smarty_tpl->tpl_vars['row']->value['settle_waitTimeMoney'] : null)!=0){?>
        <hr />等待费:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_waitTimeMoney']) ? $_smarty_tpl->tpl_vars['row']->value['settle_waitTimeMoney'] : null);?>
-已收:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_waitTimeMoney_have']) ? $_smarty_tpl->tpl_vars['row']->value['settle_waitTimeMoney_have'] : null);?>

        <?php }?>
        </td>

        
        
		
	    <td>
	       <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_status']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_status'] : null)==0){?>
                <a href="javascript:diaodu(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);">调度</a>
	       <?php }else{ ?>
                <a href="javascript:changeCar(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);">换车</a>&nbsp;&nbsp;
               
            <?php }?>

	   
			
			 <?php if (((isset($_smarty_tpl->tpl_vars['row']->value['paiche_status']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_status'] : null)==0&&($_smarty_tpl->getVariable('nowshopid')->value==(isset($_smarty_tpl->tpl_vars['row']->value['paiche_shopid']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_shopid'] : null)||$_smarty_tpl->getVariable('nowshopid')->value==(isset($_smarty_tpl->tpl_vars['row']->value['paicheCounterShop']) ? $_smarty_tpl->tpl_vars['row']->value['paicheCounterShop'] : null)))||((isset($_smarty_tpl->tpl_vars['row']->value['paiche_status']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_status'] : null)!=0&&strstr($_smarty_tpl->getVariable('a_permissions')->value,'modifyorder'))){?>
                <a href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
">编辑</a>
            <?php }else{ ?>编辑
            <?php }?>&nbsp;
			 <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_accountstatus']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_accountstatus'] : null)==0&&($_smarty_tpl->getVariable('nowshopid')->value==(isset($_smarty_tpl->tpl_vars['row']->value['paiche_shopid']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_shopid'] : null)||$_smarty_tpl->getVariable('nowshopid')->value==(isset($_smarty_tpl->tpl_vars['row']->value['paicheCounterShop']) ? $_smarty_tpl->tpl_vars['row']->value['paicheCounterShop'] : null))&&((isset($_smarty_tpl->tpl_vars['row']->value['paiche_status']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_status'] : null)==0||((isset($_smarty_tpl->tpl_vars['row']->value['paiche_status']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_status'] : null)!=0&&strstr($_smarty_tpl->getVariable('a_permissions')->value,'modifyorder')))){?>
                    <a href="javascript:if(confirm('是否确定删除该派车单？')){window.location.href='zijia_cancel.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
';">删除</a>
            <?php }else{ ?>
                    删除
            <?php }?><hr />
			



            <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['settle_totalKm']) ? $_smarty_tpl->tpl_vars['row']->value['settle_totalKm'] : null)==0&&(isset($_smarty_tpl->tpl_vars['row']->value['paiche_status']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_status'] : null)!=-1&&(isset($_smarty_tpl->tpl_vars['row']->value['paiche_accountstatus']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_accountstatus'] : null)==1){?>
                <a href="javascript:vio(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);">违约</a>&nbsp;&nbsp;&nbsp;
            <?php }?>
            
            <?php if (($_smarty_tpl->getVariable('nowshopid')->value==(isset($_smarty_tpl->tpl_vars['row']->value['paiche_shopid']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_shopid'] : null)||$_smarty_tpl->getVariable('nowshopid')->value==(isset($_smarty_tpl->tpl_vars['row']->value['paicheCounterShop']) ? $_smarty_tpl->tpl_vars['row']->value['paicheCounterShop'] : null))&&((isset($_smarty_tpl->tpl_vars['row']->value['paiche_status']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_status'] : null)==1)){?>
                <a href="print.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
&className=pact&bid=<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
" target="_blank">打印</a>
            <?php }?>
            



            <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['settle_totalKm']) ? $_smarty_tpl->tpl_vars['row']->value['settle_totalKm'] : null)==0&&(isset($_smarty_tpl->tpl_vars['row']->value['paiche_status']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_status'] : null)!=0){?>
                <a href="javascript:continuecar(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);">续租</a>
            <?php }?>
           


            <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['settle_totalKm']) ? $_smarty_tpl->tpl_vars['row']->value['settle_totalKm'] : null)!=0&&strstr($_smarty_tpl->getVariable('a_permissions')->value,'modifyorder')){?> 
                <a href="javascript:cancelreturncar(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);">撤销还车</a>
            <?php }?>


            <?php if (($_smarty_tpl->getVariable('nowshopid')->value==(isset($_smarty_tpl->tpl_vars['row']->value['paiche_shopid']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_shopid'] : null)||$_smarty_tpl->getVariable('nowshopid')->value==(isset($_smarty_tpl->tpl_vars['row']->value['paicheCounterShop']) ? $_smarty_tpl->tpl_vars['row']->value['paicheCounterShop'] : null))||strstr($_smarty_tpl->getVariable('a_permissions')->value,'searchorder')){?>
                <a href="detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="_blank">明细</a>
            <?php }else{ ?>
                明细
            <?php }?>
        
		</td>
 </tr>
 <tr>
    <td colspan="20" style="text-align:left;">
        <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_line']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_line'] : null);?>

        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_requestCar']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_requestCar'] : null)!=''){?>
            &nbsp;&nbsp;&nbsp;客户要求车型：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_requestCar']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_requestCar'] : null);?>

        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_routelist']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_routelist'] : null)){?>
            &nbsp;&nbsp;&nbsp;
            <?php  $_smarty_tpl->tpl_vars['row10'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['row']->value['paiche_routelist']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_routelist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row10']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['row10']->iteration=0;
if ($_smarty_tpl->tpl_vars['row10']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row10']->key => $_smarty_tpl->tpl_vars['row10']->value){
 $_smarty_tpl->tpl_vars['row10']->iteration++;
 $_smarty_tpl->tpl_vars['row10']->last = $_smarty_tpl->tpl_vars['row10']->iteration === $_smarty_tpl->tpl_vars['row10']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['last'] = $_smarty_tpl->tpl_vars['row10']->last;
?>
                <font style="TEXT-DECORATION: line-through;">原路线：<?php echo (isset($_smarty_tpl->tpl_vars['row10']->value['changeroute_lineA']) ? $_smarty_tpl->tpl_vars['row10']->value['changeroute_lineA'] : null);?>
&nbsp;&nbsp;&nbsp;原租金：<?php echo (isset($_smarty_tpl->tpl_vars['row10']->value['changeroute_rentA']) ? $_smarty_tpl->tpl_vars['row10']->value['changeroute_rentA'] : null);?>

                <?php if ((isset($_smarty_tpl->tpl_vars['row10']->value['changeroute_limitKmA']) ? $_smarty_tpl->tpl_vars['row10']->value['changeroute_limitKmA'] : null)!=0){?>
                    &nbsp;&nbsp;&nbsp;原限制公里数：<?php echo (isset($_smarty_tpl->tpl_vars['row10']->value['changeroute_limitKmA']) ? $_smarty_tpl->tpl_vars['row10']->value['changeroute_limitKmA'] : null);?>

                <?php }?></font>
            <?php }} ?>
        <?php }?>
 &nbsp;&nbsp;&nbsp;<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_coupons']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_coupons'] : null)!=''){?>优惠券：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_coupons']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_coupons'] : null);?>
&nbsp;&nbsp;<?php }?>
 备注：<span id="span_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" dat="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" class="spanremarks"><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_specialRemarks']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_specialRemarks'] : null)!=''){?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_specialRemarks']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_specialRemarks'] : null);?>
<?php }else{ ?>无<?php }?></span><input type="text" id="remarks_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" value="" style="display:none;" size="78" class="textremarks" />
 </td></tr>
 <?php }} ?>
 </table>
 </div>

  <div class="Toolbar_inbox">
	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;临时自驾派车管理</div>
	<a href="zijia_create.php?b_id=<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
" class="btn_a"><span>添加</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>
   
  </div> 
</div>
<!-->
<script>
var now_paiche_id=0;
var now_remarks="";
	//鼠标移动表格效果
	$(document).ready(function(){

		     
			$.ajax({
	    		  type:'GET',
	    		  url:'list.php',
	    		  data:{"task":"getovertime_zijia"},
	    		  dataType:"json",
	    		  cache: false,
	    		  async: false,
	    		  error: function(){
	    		      return false;
	    		  },
	    		  success:function(jsonmsg){

	    		      if (jsonmsg.result==1){
	    		    	  $("#spnOvertime").html(jsonmsg.count+"个");
	    		    	  setInterval(set_word_shanshuo,200);
	    		      }else{
	    			  		
	    		      }
	    		  }
	    	});
		
		
	    $("#tmpcontractNum").focus();
	    $("#tmpcontractNum").keydown(function(event) {  
                if (event.keyCode == 13 && $(this).val()!=""){
                    $.ajax({
			      		  type:'POST',
			      		  url:'getpaicheid.php',
			      		  data:{"contractNum":$(this).val()},
			      		  dataType:"json",
			      		  cache: false,
			      		  async: false,
			      		  error: function(){
			      			alert('dddeee');
			      		      return false;
			      		  },
			      		  success:function(jsonmsg){
			      			$("#tmpcontractNum").val("");
			      		      if (jsonmsg.result==0){
			      					giveCar(jsonmsg.pid);
			      		      }else if(jsonmsg.result==1){
					      			alert('此派车单已还车！');
			      					$("#tmpcontractNum").focus();
			      		      }else if(jsonmsg.result==3){
					      			alert('此派车单尚未调度！');
			      					$("#tmpcontractNum").focus();
		      		      	  }
			      		      else{
					      			alert('派车单不存在！');
			      					$("#tmpcontractNum").focus();
			      		      }
			      		  }
			      	});
                    
                }
        });
	    $("#search_key").live('input propertychange',function(){
		    var aa=$("#search_key").val();
		    if (aa!=""){
				$("#company option").each(function (){  
			        var txt = $(this).text();  
			        if(txt.toLowerCase().indexOf(aa) >-1){  
			            $(this).attr("selected",true);
			            $("#company").change();
			            return false;
			        }
			     });
		    }
		});
	    $("#search_key2").live('input propertychange',function(){
		    var aa=$("#search_key2").val();
		    if (aa!=""){
				$("#brother option").each(function (){  
			        var txt = $(this).text();  
			        if(txt.toLowerCase().indexOf(aa) >-1){  
			            $(this).attr("selected",true);
			            $("#paiche_brother").change();
			            return false;
			        }
			     });
		    }
		});
	    $("input[name='showtype']").change(function(){
	    	var selectedvalue = $("input[name='showtype']:checked").val();
	    	$("#search_status").val(selectedvalue);
	    	$("#form1").submit();
	    });
	    $("input[name='showshop']").change(function(){
	    	var selectedvalue = $("input[name='showshop']:checked").val();
	    	$("input[name='search_shop'][value='"+selectedvalue+"']").attr("checked",true);
	    	$("#form1").submit();
	    });
	    $("#chkOvertime").click(function(){
	    	var selectedvalue = 0;
	    	if ($(this).attr('checked') ==true){
	    		selectedvalue = 1;
	    	}
	    	$("#search_overtime").val(selectedvalue);
	    	$("#form1").submit();
	    });
	    $(".spanremarks").click(function(){
	    	now_paiche_id=$(this).attr("dat");
	    	$(this).css("display","none");
	    	$("#remarks_"+now_paiche_id).css("display","inline-block");
	    	if ($(this).html()!="无"){
	    		$("#remarks_"+now_paiche_id).val($(this).html());
	    	}
	    	$("#remarks_"+now_paiche_id).focus();
	    });
	    //失去焦点
	    $(".textremarks").blur(function(){
	    	now_remarks=$(this).val();
	    	aaa=now_remarks==""?"无":now_remarks
	    	$("#span_"+now_paiche_id).html(aaa);
	    	$("#span_"+now_paiche_id).css("display","inline-block");
            $(this).css("display","none");
            $.get("list.php?task=uppaicheremark&paiche_id="+now_paiche_id+"&paiche_remarks="+now_remarks,{}, function(jsonmsg){
    			
    		},"json");
            now_paiche_id=0;
        });
	    //回车
	    $(".textremarks").keydown(function(event){
        if (event.keyCode == 13){
        	now_remarks=$(this).val();
	    	aaa=now_remarks==""?"无":now_remarks
	    	$("#span_"+now_paiche_id).html(aaa);
	    	$("#span_"+now_paiche_id).css("display","inline-block");
            $(this).css("display","none");
			$.get("list.php?task=uppaicheremark&paiche_id="+now_paiche_id+"&paiche_remarks="+now_remarks,{}, function(jsonmsg){
    			
    		},"json");
            now_paiche_id=0;
        }
        });
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
	});
	function set_word_shanshuo(){
		var color = ['red','yellow','purple'];
		$("#spnOvertime").css('color',color[parseInt( Math.random()*color.length)]);
	}
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
	
	function continuecar(pid){
		demo_iframe('zijia_continuecar.php?pid='+pid,'续租',750,540,'login_js');
	}
	
	function changeroute(pid){
		demo_iframe('zijia_changeroute.php?pid='+pid,'改变行程',750,520,'login_js');
	}
	
	function front(pid){
		demo_iframe('front.php?pid='+pid,'收定金',750,400,'login_js');
	}
	
	function account(pid,op_flag){
		demo_iframe('account.php?pid='+pid+'&op_flag='+op_flag,'订单款项处理',850,460,'login_js');
	}
	
	function vio(pid){
		demo_iframe('zijia_vio.php?pid='+pid,'订单违约',850,460,'login_js');
	}
	
	function diaodu(pid){
		demo_iframe('zijia_diaodu.php?pid='+pid,'订单车辆调度',750,460,'login_js');
	}
	
	function changeCar(pid){
		demo_iframe('zijia_changecar.php?pid='+pid,'中途换车',950,480,'login_js');
	}

	function changeDriver(pid){
	    demo_iframe('changedriver.php?pid='+pid,'中途换司机',650,460,'login_js');
	}
	
	function returnCar(pid){
		demo_iframe('returncar.php?pid='+pid,'自驾还车',750,460,'login_js');
	}
	
	function giveCar(pid){
		demo_iframe('givecar.php?pid='+pid,'代驾交车',750,460,'login_js');
	}
	
	function backMoney(pid){
		demo_iframe('backmoney.php?pid='+pid,'退违章保证金',750,460,'login_js');
	}
	
	function check(pid){
		demo_iframe('check.php?pid='+pid,'审核',550,380,'login_js');
	}
	
	function revisit(pid){
		demo_iframe('revisit.php?pid='+pid,'客户回访',550,460,'login_js');
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
        demo_iframe('shuntaccount.php?brotherid='+$("#brotherid").val()+'&pids='+pid,'调车结算处理',910,500,'login_js');
	}
	function shuntexport(){
	    pid = getChecked();
		pid = pid.toString();
	    if(pid == ''){
	    	alert("请先选择用车记录！");
	    	return false;
	    }
	    location.href="shuntexport.php?pids="+pid;
	}
	function cancelreturncar(pid){
		if(confirm('是否确定撤销还车？')){
			$.ajax({
	      		  type:'POST',
	      		  url:'list.php',
	      		  data:{"task":"returncar_cancel","pid":pid},
	      		  dataType:"json",
	      		  cache: false,
	      		  async: false,
	      		  error: function(){
	      		      return false;
	      		  },
	      		  success:function(jsonmsg){
	      		      if (jsonmsg.result==1){
	      		    	  alert("撤销还车成功！");
	      					location.reload();
	      		      }else{
	      			  		
	      		      }
	      		  }
	      	});
		}
	}
</script>
<!-->

</body>
</html>