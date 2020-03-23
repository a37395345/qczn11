<?php /* Smarty version Smarty-3.0.4, created on 2015-09-12 15:49:06
         compiled from "D:\czyhqc\site\templates\elsker\operator/business/list.html" */ ?>
<?php /*%%SmartyHeaderCode:2173455f3d8f27bbb58-20009611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec28b1d8b4decfb119486925c4a415322d523cce' => 
    array (
      0 => 'D:\\czyhqc\\site\\templates\\elsker\\operator/business/list.html',
      1 => 1442041035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2173455f3d8f27bbb58-20009611',
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
  <div class="page_tit"><?php echo $_smarty_tpl->getVariable('PAGETITLE')->value;?>
</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <div class="form2">
        <form action="list.php?task=list" method="get">
        	<input type="hidden" name="op" value="<?php echo $_smarty_tpl->getVariable('op')->value;?>
" />
        	<input type="hidden" name="clientid" value="<?php echo $_smarty_tpl->getVariable('clientid')->value;?>
" />
        	<input type="hidden" name="accountend" value="<?php echo $_smarty_tpl->getVariable('op_flag')->value;?>
" />
        	<input type="hidden" name="brotherid" id="brotherid" value="<?php echo $_smarty_tpl->getVariable('brotherid')->value;?>
" />
            <dl class="lineD">
            <dt>合同号：</dt>
            <dd>
            <input type="text" name="paiche_contractNum" size="16"  />
            </dd>
            </dl>
            <?php if ($_smarty_tpl->getVariable('op')->value=="account"||$_smarty_tpl->getVariable('op')->value=="diaodu"||$_smarty_tpl->getVariable('op')->value=="search"){?>
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
            <input type="hidden" name="b_id" value="<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
" />
            <?php }?>
            <?php if ($_smarty_tpl->getVariable('op')->value=="diaodu"){?>
            <dl class="lineD">
            <dt>调度状态：</dt>
            <dd>
            <input type="radio" name="diaodu_status" value="0" <?php if ($_smarty_tpl->getVariable('diaodu_status')->value==0){?>checked<?php }?>/>未调度
            <input type="radio" name="diaodu_status" value="1" <?php if ($_smarty_tpl->getVariable('diaodu_status')->value==1){?>checked<?php }?>/>已调度
            </dd>
            </dl>
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
            
            <?php if ($_smarty_tpl->getVariable('op')->value=="shuntaccount"||$_smarty_tpl->getVariable('op')->value=="shuntlist"){?>
            <dl class="lineD">
	          <dt>调车公司：</dt>
	          <dd>
	              <select name="brother" >
	                  <option value="0" <?php if ($_smarty_tpl->getVariable('brotherid')->value==0){?>selected<?php }?>>请选择</option>
	                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('brotherlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bro_id']) ? $_smarty_tpl->tpl_vars['rows']->value['bro_id'] : null);?>
" <?php if ($_smarty_tpl->getVariable('brotherid')->value==(isset($_smarty_tpl->tpl_vars['rows']->value['bro_id']) ? $_smarty_tpl->tpl_vars['rows']->value['bro_id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bro_name']) ? $_smarty_tpl->tpl_vars['rows']->value['bro_name'] : null);?>
</option>
	                  <?php }} ?>
	              </select>
	          </dd>
	        </dl>
            <?php }?>
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
            <input type="radio" name="search_shop" value="" checked />全部 
            <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shoplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
            <input type="radio" name="search_shop" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null);?>
" /><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>

            <?php }} ?>
            </dd>
            </dl>
            <?php if ($_smarty_tpl->getVariable('op')->value!="monthaccount"){?>
            <dl class="lineD">
            <dt>调度：</dt>
            <dd>
            <select name="search_diaodu" >
                <option value="">-请选择-</option>
                <option value="all" >所有派单</option>
                <option value="self" >自己派单</option>    
            </select>
            </dd>
            </dl>
            <dl class="lineD">
            <dt>开单：</dt>
            <dd>
            <select name="search_input" >
                <option value="">-请选择-</option>
                <option value="all" >所有开单</option>
                <option value="self" >自己开单</option>    
            </select>
            </dd>
            </dl>
            <?php }?>
			<?php if ($_smarty_tpl->getVariable('op')->value==''||$_smarty_tpl->getVariable('op')->value=="search"){?>
            <dl class="lineD">
            <dt>订单状态：</dt>
            <dd>
            <input type="radio" name="search_status" value="" checked />全部 <input type="radio" name="search_status" value="yy" /><font color="#0000FF">预约</font>
            <input type="radio" name="search_status" value="zzyxz" /><font color="#30ff00">正在运行中</font>
            <input type="radio" name="search_status" value="hcwfk" /><font color="#e00024">还车未结账</font>
            <!-- 
            <input type="radio" name="search_status" value="hcgz"/><font color="#ffe900">还车挂账</font>
            <input type="radio" name="search_status" value="wy"/><font color="#f000f6">违约</font>
            <input type="radio" name="search_status" value="qx"/><font color="#008489">取消</font> -->
            </dd>
            </dl>
            <?php }?>
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
	<?php if ($_smarty_tpl->getVariable('op')->value==''){?><a href="create.php?b_id=<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
&clientid=<?php echo $_smarty_tpl->getVariable('clientid')->value;?>
" class="btn_a"><span>添加</span></a><?php }?>
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>
    <?php if ($_smarty_tpl->getVariable('op')->value==''&&($_smarty_tpl->getVariable('busitype')->value=="3"||$_smarty_tpl->getVariable('busitype')->value=="4"||$_smarty_tpl->getVariable('busitype')->value=="5")){?><a href="javascript:javascript:history.back(-1);" class="btn_a">返回</a><?php }?>
	<?php if ($_smarty_tpl->getVariable('op')->value=="batchaccount"){?><a href="javascript:batchaccount();" class="btn_a">批量结算</a>&nbsp;&nbsp;<a href="batchaccountlist.php" class="btn_a">返回</a><?php }?>
	<?php if ($_smarty_tpl->getVariable('op')->value=="shuntaccount"){?><a href="javascript:shuntaccount();" class="btn_a">结算</a><?php }?>	
	<?php if ($_smarty_tpl->getVariable('op')->value=="diaodu"||$_smarty_tpl->getVariable('op')->value=="givecar"){?><a href="list.php?op=<?php echo $_smarty_tpl->getVariable('op')->value;?>
&b_id=<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
&clientid=12" class="btn_a"><span>光宝专用</span></a><?php }?>
	<?php if ($_smarty_tpl->getVariable('op')->value=="givecar"&&$_smarty_tpl->getVariable('busitype')->value=="2"){?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;扫描条码还车：<input type="text" id="tmpcontractNum" size="25" /><?php }?>
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">
		<input type="checkbox" id="checkbox_handle" onclick="checkAll(this)" value="0">
    	<label for="checkbox"></label>
	</th>
	<?php if ($_smarty_tpl->getVariable('op')->value!=''&&$_smarty_tpl->getVariable('busitype')->value=='0'){?>
	<th>租赁类型</th>
	<?php }?>
	<th>合同号/公司名</th>
	<th>联系人信息</th>
	<th>业务员</th>
	<th>用车时间</th>
	<th width="115">合同约定</th>
	<?php if ($_smarty_tpl->getVariable('busitype')->value=='2'||$_smarty_tpl->getVariable('busitype')->value=='0'){?>
	<th>司机</th>
	<?php }?>
	<th>车辆</th>
	<?php if ($_smarty_tpl->getVariable('op')->value==''||$_smarty_tpl->getVariable('op')->value=="diaodu"){?>
	<th>调度人</th>
	<?php }?>
	<th width="265">金额明细</th>
	<?php if ($_smarty_tpl->getVariable('op')->value=="backmoney"||$_smarty_tpl->getVariable('op')->value=="search"){?>
	<th>违章情况</th>
	<?php }?>
	<?php if ($_smarty_tpl->getVariable('op')->value=="monthaccount"){?>
	<th>最近一次月结</th>
	<th>记录数</th>
	<?php }?>
	<?php if ($_smarty_tpl->getVariable('op')->value=="shuntlist"){?>
	<th>结算金额</th>
	<th>结算时间</th>
	<?php }?>
	<?php if ($_smarty_tpl->getVariable('op')->value=="dispatch"){?>
	<th>出车记录最后日期</th>
	<th>记录数</th>
	<?php }?>
	<?php if ($_smarty_tpl->getVariable('op')->value==''){?>
	<th>审核人</th>
	<?php }?>
	<th class="line_l">操作</th>
  </tr>
  <?php if (($_smarty_tpl->getVariable('op')->value=="batchaccount"&&$_smarty_tpl->getVariable('companyid')->value==0)||($_smarty_tpl->getVariable('op')->value=="shuntaccount"&&$_smarty_tpl->getVariable('brotherid')->value==0)){?>
  <tr overstyle='on' id="badge_0">
  	<td colspan="15" style="text-align:left;"><?php if ($_smarty_tpl->getVariable('op')->value=="batchaccount"){?>请先选择用车单位！<?php }else{ ?>请先选择调车公司！<?php }?></td>
  </tr>
  <?php }?>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('busiList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
">
    	<td <?php if ($_smarty_tpl->getVariable('op')->value==''){?>bgcolor="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_status_color']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_status_color'] : null);?>
" style="color:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_font_color']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_font_color'] : null);?>
;"<?php }?>><input type="checkbox" name="checkbox" id="checkbox<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
"><?php if ($_smarty_tpl->getVariable('op')->value==''){?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_status_name']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_status_name'] : null);?>
<?php }?></td>
	  	<?php if ($_smarty_tpl->getVariable('op')->value!=''&&$_smarty_tpl->getVariable('busitype')->value=='0'){?>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_name']) ? $_smarty_tpl->tpl_vars['row']->value['item_name'] : null);?>
</td>
	  	<?php }?>
	  	<td><a href="detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="blank"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_contractNum'] : null);?>
</a><hr /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null);?>
</td>
		<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['show_tip']) ? $_smarty_tpl->tpl_vars['row']->value['show_tip'] : null)==1&&$_smarty_tpl->getVariable('op')->value==''&&($_smarty_tpl->getVariable('busitype')->value=='1'||$_smarty_tpl->getVariable('busitype')->value=='2')){?><div class="tixing">此单已超过合同时间，但是还未还车，请及时处理！</div><?php }?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linker']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linker'] : null);?>
(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linkerPhone']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linkerPhone'] : null);?>
)<hr /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linkerNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linkerNum'] : null);?>
<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_brother']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_brother'] : null)>0){?>调车公司：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bro_name']) ? $_smarty_tpl->tpl_vars['row']->value['bro_name'] : null);?>
<?php }?></td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['yewuyuan']) ? $_smarty_tpl->tpl_vars['row']->value['yewuyuan'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_startDate'] : null);?>
<hr /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_endDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_endDate'] : null);?>
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
-已收:<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row1']->value['have_in_money'] : null);?>
<?php }?>
	    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['last']){?><?php }else{ ?><hr /><?php }?>
	    <?php }} ?></td>
	    <?php if ($_smarty_tpl->getVariable('busitype')->value=='2'||$_smarty_tpl->getVariable('busitype')->value=='5'||$_smarty_tpl->getVariable('busitype')->value=='0'){?>
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
	    <?php if ($_smarty_tpl->getVariable('op')->value==''||$_smarty_tpl->getVariable('op')->value=="diaodu"){?>
        <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paicheDispatchMan']) ? $_smarty_tpl->tpl_vars['row']->value['paicheDispatchMan'] : null);?>
<hr /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_dispatchTimes']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_dispatchTimes'] : null);?>
</td>
        <?php }?>
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
        <?php if ($_smarty_tpl->getVariable('op')->value=="backmoney"){?>
        <?php if ((isset($_smarty_tpl->tpl_vars['row2']->value['back_money']) ? $_smarty_tpl->tpl_vars['row2']->value['back_money'] : null)!=0&&(isset($_smarty_tpl->tpl_vars['row2']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_back_money'] : null)!=(isset($_smarty_tpl->tpl_vars['row2']->value['back_money']) ? $_smarty_tpl->tpl_vars['row2']->value['back_money'] : null)){?>
        <?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row2']->value['charge_name'] : null);?>
:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row2']->value['conv_money'] : null);?>
元-已收:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_in_money'] : null);?>
元-已退:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_back_money'] : null);?>
元
        <?php }?>
        <?php }else{ ?>
        <?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row2']->value['charge_name'] : null);?>
:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row2']->value['conv_money'] : null);?>
元-已收:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_in_money'] : null);?>
元<?php if ((isset($_smarty_tpl->tpl_vars['row2']->value['back_money']) ? $_smarty_tpl->tpl_vars['row2']->value['back_money'] : null)!=0){?>-已退:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_back_money'] : null);?>
元<?php }?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['last']){?><?php }else{ ?><hr /><?php }?>
        <?php }?>
        <?php }} ?>
        
        <?php if ($_smarty_tpl->getVariable('op')->value!="backmoney"){?>
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
        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_shunt']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_shunt'] : null)==1&&($_smarty_tpl->getVariable('busitype')->value=='2'||$_smarty_tpl->getVariable('busitype')->value=='5'||$_smarty_tpl->getVariable('busitype')->value=='0')){?>
        <hr />调车公司收现：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shunt_rented']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_rented'] : null);?>
元
        <hr />调车公司报价：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shunt_rent']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_rent'] : null);?>
元<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['shunt_money']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_money'] : null)>0){?>-已付:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shunt_money']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_money'] : null);?>
<?php }?>
        <hr />调车结算：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shunt_rented']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_rented'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['shunt_rent']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_rent'] : null);?>
元
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_brother']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_brother'] : null)>0&&($_smarty_tpl->getVariable('busitype')->value=='2'||$_smarty_tpl->getVariable('busitype')->value=='5'||$_smarty_tpl->getVariable('busitype')->value=='0')){?>
        <hr />我公司收现：<?php echo -1*(isset($_smarty_tpl->tpl_vars['row']->value['shunt_rented']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_rented'] : null);?>
元
        <hr />我公司报价：<?php echo -1*(isset($_smarty_tpl->tpl_vars['row']->value['shunt_rent']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_rent'] : null);?>
元 <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['shunt_money']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_money'] : null)!=0){?>-已收:<?php echo -1*(isset($_smarty_tpl->tpl_vars['row']->value['shunt_money']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_money'] : null);?>
<?php }?>
        <hr />差额：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shunt_rented']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_rented'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['shunt_rent']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_rent'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['shunt_other']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_other'] : null);?>
元
        <?php }?>
        
        </td>
        <?php if ($_smarty_tpl->getVariable('op')->value=="backmoney"||$_smarty_tpl->getVariable('op')->value=="search"){?>
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
        <?php if ($_smarty_tpl->getVariable('op')->value=="monthaccount"){?>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_AccountendDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_AccountendDate'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_outcarnum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_outcarnum'] : null);?>
</td>
		<?php }?>
		<?php if ($_smarty_tpl->getVariable('op')->value=="shuntlist"){?>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shunt_money']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_money'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shunt_endtimes']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_endtimes'] : null);?>
</td>
		<?php }?>
		<?php if ($_smarty_tpl->getVariable('op')->value=="dispatch"){?>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_AccountendDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_AccountendDate'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_outcarnum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_outcarnum'] : null);?>
</td>
		<?php }?>
		<?php if ($_smarty_tpl->getVariable('op')->value==''){?>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paicheCheckMan']) ? $_smarty_tpl->tpl_vars['row']->value['paicheCheckMan'] : null);?>
<hr /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_checkTimes']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_checkTimes'] : null);?>
</td>
		<?php }?>
	    <td>
	    <?php if ($_smarty_tpl->getVariable('op')->value=="front"){?>
	    <a href="javascript:front(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);">收定金</a>
	    <?php }elseif($_smarty_tpl->getVariable('op')->value=="account"){?>
	    <?php if ($_smarty_tpl->getVariable('op_flag')->value==0){?><a href="javascript:account(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
,<?php echo $_smarty_tpl->getVariable('op_flag')->value;?>
);">收款</a><?php }else{ ?><a href="javascript:account(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
,<?php echo $_smarty_tpl->getVariable('op_flag')->value;?>
);">结账</a><?php }?>
	    <?php }elseif($_smarty_tpl->getVariable('op')->value=="batchaccount"||$_smarty_tpl->getVariable('op')->value=="shuntaccount"){?>
	    <?php }elseif($_smarty_tpl->getVariable('op')->value=="monthaccount"){?>
	    <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_outcarnum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_outcarnum'] : null)>0){?><a href="list.php?task=outcarlist&pid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
">月结</a><?php }?>
	    <?php }elseif($_smarty_tpl->getVariable('op')->value=="diaodu"){?>
	    <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_status']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_status'] : null)==0){?><a href="javascript:diaodu(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);">调度</a> 换车
	    <?php }else{ ?>调度 <a href="javascript:changeCar(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);">换车</a>&nbsp;&nbsp;<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_type']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_type'] : null)=='2'||(isset($_smarty_tpl->tpl_vars['row']->value['paiche_type']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_type'] : null)=='4'||(isset($_smarty_tpl->tpl_vars['row']->value['paiche_type']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_type'] : null)=='5'){?><a href="javascript:changeDriver(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);">换司机</a><?php }?><?php }?>
	    <?php }elseif($_smarty_tpl->getVariable('op')->value=="dispatch"){?>
	    <a href="outcar.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
">出车单</a><hr/><a href="detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="blank">明细</a>
	    <?php }elseif($_smarty_tpl->getVariable('op')->value=="returncar"){?>
	    <a href="javascript:returnCar(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);">还车</a>
	    <?php }elseif($_smarty_tpl->getVariable('op')->value=="givecar"){?>
	    <a href="javascript:giveCar(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);">交车</a>
	    <?php }elseif($_smarty_tpl->getVariable('op')->value=="backmoney"){?>
	    <a href="javascript:backMoney(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);">退款</a>
	    <?php }elseif($_smarty_tpl->getVariable('op')->value=="check"){?>
	    <a href="javascript:check(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);">审核</a><hr/><a href="detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="blank">明细</a>
	    <?php }elseif($_smarty_tpl->getVariable('op')->value=="search"){?>
	    <a href="detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="blank">明细</a>
	    <?php }elseif($_smarty_tpl->getVariable('op')->value=="revisit"){?>
	    <a href="javascript:revisit(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);">回访</a><hr/><a href="detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="blank">明细</a>
	    <?php }else{ ?>
			<?php if ($_smarty_tpl->getVariable('busitype')->value=='3'||$_smarty_tpl->getVariable('busitype')->value=='4'||$_smarty_tpl->getVariable('busitype')->value=='5'){?>
			<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_checkTimes']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_checkTimes'] : null)>0){?>编辑 删除<?php }else{ ?><a href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
">编辑</a>&nbsp;<a href="javascript:if(confirm('是否确定删除该派车单？')){window.location.href='delete.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
&b_id=<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
';}">删除</a><?php }?>
			<hr /><a href="javascript:continuecar(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);">续租</a>
			<?php }else{ ?>
			<?php if (((isset($_smarty_tpl->tpl_vars['row']->value['paiche_accountstatus']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_accountstatus'] : null)==0||((isset($_smarty_tpl->tpl_vars['row']->value['paiche_accountstatus']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_accountstatus'] : null)==1&&(isset($_smarty_tpl->tpl_vars['row']->value['settle_totalKm']) ? $_smarty_tpl->tpl_vars['row']->value['settle_totalKm'] : null)==0))&&(isset($_smarty_tpl->tpl_vars['row']->value['paiche_status']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_status'] : null)==0){?><a href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
">编辑</a>&nbsp;<a href="javascript:if(confirm('是否确定删除该派车单？')){window.location.href='delete.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
&b_id=<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
';}">删除</a><?php }else{ ?>编辑 删除<?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['settle_totalKm']) ? $_smarty_tpl->tpl_vars['row']->value['settle_totalKm'] : null)==0&&(isset($_smarty_tpl->tpl_vars['row']->value['paiche_accountstatus']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_accountstatus'] : null)!=1&&(isset($_smarty_tpl->tpl_vars['row']->value['paiche_status']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_status'] : null)!=-2){?><a href="javascript:if(confirm('是否确定取消该派车单？')){window.location.href='cancel.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
&b_id=<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
';}">取消</a><?php }?><hr />
			<?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['settle_totalKm']) ? $_smarty_tpl->tpl_vars['row']->value['settle_totalKm'] : null)==0&&(isset($_smarty_tpl->tpl_vars['row']->value['paiche_status']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_status'] : null)!=-1&&(isset($_smarty_tpl->tpl_vars['row']->value['paiche_accountstatus']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_accountstatus'] : null)==1){?><a href="javascript:vio(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);">违约</a><?php }?>
            
            <?php if (((isset($_smarty_tpl->tpl_vars['row']->value['paiche_status']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_status'] : null)==1&&$_smarty_tpl->getVariable('busitype')->value=='1')||($_smarty_tpl->getVariable('busitype')->value=='2'&&(isset($_smarty_tpl->tpl_vars['row']->value['paiche_status']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_status'] : null)!=-1)){?>
            <a href="print.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
&className=pact&bid=<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
" target="_blank">打印</a>
            <?php }?>
            <?php if ($_smarty_tpl->getVariable('busitype')->value=='1'){?>
            <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['settle_totalKm']) ? $_smarty_tpl->tpl_vars['row']->value['settle_totalKm'] : null)==0&&(isset($_smarty_tpl->tpl_vars['row']->value['paiche_status']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_status'] : null)!=0){?><a href="javascript:continuecar(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);">续租</a><?php }?>
            <?php }?>
            <?php if ($_smarty_tpl->getVariable('busitype')->value=='2'&&(isset($_smarty_tpl->tpl_vars['row']->value['paiche_status']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_status'] : null)!=-1&&((isset($_smarty_tpl->tpl_vars['row']->value['paiche_accountstatus']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_accountstatus'] : null)==1||(isset($_smarty_tpl->tpl_vars['row']->value['paiche_status']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_status'] : null)==1)){?>
            <hr /><a href="print.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
&className=outCar" target="_blank">打印出车单</a>
            <hr /><a href="javascript:changeroute(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);">改变行程</a>
            <?php }?>
            <a href="detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="blank">明细</a>
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
<?php if ((isset($_smarty_tpl->tpl_vars['row10']->value['changeroute_limitKmA']) ? $_smarty_tpl->tpl_vars['row10']->value['changeroute_limitKmA'] : null)!=0){?>&nbsp;&nbsp;&nbsp;原限制公里数：<?php echo (isset($_smarty_tpl->tpl_vars['row10']->value['changeroute_limitKmA']) ? $_smarty_tpl->tpl_vars['row10']->value['changeroute_limitKmA'] : null);?>
<?php }?></font><?php }} ?><?php }?></td></tr>
 <?php }} ?>
 </table>
 </div>

  <div class="Toolbar_inbox">
	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
	<?php if ($_smarty_tpl->getVariable('op')->value==''){?><a href="create.php?b_id=<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
" class="btn_a"><span>添加</span></a><?php }?>
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>
    <?php if ($_smarty_tpl->getVariable('op')->value==''&&($_smarty_tpl->getVariable('busitype')->value=="3"||$_smarty_tpl->getVariable('busitype')->value=="4"||$_smarty_tpl->getVariable('busitype')->value=="5")){?><a href="javascript:javascript:history.back(-1);" class="btn_a">返回</a><?php }?>
    <?php if ($_smarty_tpl->getVariable('op')->value=="batchaccount"){?><a href="javascript:batchaccount();" class="btn_a">批量结算</a><?php }?>
    <?php if ($_smarty_tpl->getVariable('op')->value=="shuntaccount"){?><a href="javascript:shuntaccount();" class="btn_a">结算</a><?php }?>
  </div> 
</div>
<!-->
<script>
	//鼠标移动表格效果
	$(document).ready(function(){
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
		demo_iframe('continue.php?pid='+pid,'续租',750,540,'login_js');
	}
	
	function changeroute(pid){
		demo_iframe('changeroute.php?pid='+pid,'改变行程',750,520,'login_js');
	}
	
	function front(pid){
		demo_iframe('front.php?pid='+pid,'收定金',750,400,'login_js');
	}
	
	function account(pid,op_flag){
		demo_iframe('account.php?pid='+pid+'&op_flag='+op_flag,'订单款项处理',850,460,'login_js');
	}
	
	function vio(pid){
		demo_iframe('vio.php?pid='+pid,'订单违约',850,460,'login_js');
	}
	
	function diaodu(pid){
		demo_iframe('diaodu.php?pid='+pid,'订单车辆调度',750,460,'login_js');
	}
	
	function changeCar(pid){
		demo_iframe('changecar.php?pid='+pid,'中途换车',950,480,'login_js');
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
        demo_iframe('shuntaccount.php?brotherid='+$("#brotherid").val()+'&pids='+pid,'调车结账处理',750,500,'login_js');
	}

</script>
<!-->

</body>
</html>