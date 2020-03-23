<?php /* Smarty version Smarty-3.0.4, created on 2019-11-06 10:07:12
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/busiaccount/depositlist.html" */ ?>
<?php /*%%SmartyHeaderCode:165055dc22ad0c6fe89-52987810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bc7d1338ab0230d9b7fd286f0719423559d64a5' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/busiaccount/depositlist.html',
      1 => 1571707171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165055dc22ad0c6fe89-52987810',
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
        <input type="hidden" name="search_status" id="search_status" value="<?php echo $_smarty_tpl->getVariable('search_status')->value;?>
" />
        <input type="hidden" id="firstop" name="firstop" value="<?php echo $_smarty_tpl->getVariable('firstop')->value;?>
" />
            <dl class="lineD">
            <dt>合同号：</dt>
            <dd>
            <input type="text" name="paiche_contractNum" size="16"  />
            </dd>
            </dl>
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
            <input id="search_startDate" type="text" name="search_startDate" value="<?php echo $_smarty_tpl->getVariable('search_startDate')->value;?>
" onClick="calendar.show(this);">
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
            <dt>车牌号：</dt>
            <dd>
            	苏D<input type="text" name="paiche_car" size="12" value="<?php echo $_smarty_tpl->getVariable('paiche_car')->value;?>
" />
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
	<input type="radio" name="showtype" value="d" <?php if ($_smarty_tpl->getVariable('search_status')->value=="d"){?>checked<?php }?>>未结清<input type="radio" name="showtype" value="y" <?php if ($_smarty_tpl->getVariable('search_status')->value=="y"){?>checked<?php }?>>已结清<input type="radio" name="showtype" value="v" <?php if ($_smarty_tpl->getVariable('search_status')->value=="v"){?>checked<?php }?>>多退<input type="radio" name="showtype" value="a" <?php if ($_smarty_tpl->getVariable('search_status')->value=="a"){?>checked<?php }?>>全部
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th>租赁类型</th>
	<th>合同号/公司名</th>
	<th>联系人信息</th>
	<th>接待员</th>
	<th>用车时间</th>
	<th>车辆</th>
	<th width="265">金额明细</th>
	<th>违章情况</th>
	<th class="line_l" width="145" >操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('busiList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  <?php $_smarty_tpl->tpl_vars['iscomplete'] = new Smarty_variable(0, null, null);?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
">
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_name']) ? $_smarty_tpl->tpl_vars['row']->value['item_name'] : null);?>
</td>
	  	<td><a href="../business/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="blank"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_contractNum'] : null);?>
</a><hr /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linker']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linker'] : null);?>
(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linkerPhone']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linkerPhone'] : null);?>
)<hr /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linkerNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linkerNum'] : null);?>
<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_brother']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_brother'] : null)>0){?>调车公司：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bro_name']) ? $_smarty_tpl->tpl_vars['row']->value['bro_name'] : null);?>
<?php }?></td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null);?>
<hr/><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['jiedaiyuan']) ? $_smarty_tpl->tpl_vars['row']->value['jiedaiyuan'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_startDate'] : null);?>
<hr /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_endDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_endDate'] : null);?>
</td>
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
        <?php if ((isset($_smarty_tpl->tpl_vars['row2']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_back_money'] : null)+(isset($_smarty_tpl->tpl_vars['row2']->value['have_freeze_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_freeze_money'] : null)>=(isset($_smarty_tpl->tpl_vars['row2']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_in_money'] : null)){?><?php $_smarty_tpl->tpl_vars['iscomplete'] = new Smarty_variable(1, null, null);?><?php }?>
        <?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row2']->value['charge_name'] : null);?>
:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row2']->value['conv_money'] : null);?>
元-已收:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_in_money'] : null);?>
元<?php if ((isset($_smarty_tpl->tpl_vars['row2']->value['have_freeze_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_freeze_money'] : null)!=0){?>-冻结:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['have_freeze_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_freeze_money'] : null);?>
元<?php }?><?php if ((isset($_smarty_tpl->tpl_vars['row2']->value['back_money']) ? $_smarty_tpl->tpl_vars['row2']->value['back_money'] : null)!=0){?>-已退:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_back_money'] : null);?>
元<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['last']){?><?php }else{ ?><hr /><?php }?><?php }?>
        <?php }} ?>
        </td>
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
                      苏D<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['car_num']) ? $_smarty_tpl->tpl_vars['row2']->value['car_num'] : null);?>
&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['breakrules_date']) ? $_smarty_tpl->tpl_vars['row2']->value['breakrules_date'] : null);?>
&nbsp;(<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['breakrules_money']) ? $_smarty_tpl->tpl_vars['row2']->value['breakrules_money'] : null);?>
元)<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['last']){?><?php }else{ ?><hr /><?php }?>
        <?php }} ?>
        </td>
	    <td><a href="javascript:account(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
,'deposit');">收押金</a>&nbsp;|&nbsp;
	    <?php if ($_smarty_tpl->getVariable('iscomplete')->value==1){?>冻结押金&nbsp;|&nbsp;退押金<?php }else{ ?><a href="javascript:account(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
,'freezedeposit');">冻结押金</a>&nbsp;|&nbsp;<a href="javascript:account(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
,'backdeposit');">退押金</a><?php }?><hr />
	    <a href="javascript:detail(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);">收退明细</a>&nbsp;|&nbsp;
	    <a href="../business/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="blank">订单明细</a>
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
		if (firstop==""){
			$("#searchTopic_div").slideDown("fast");
			isSearchHidden = 0;
			$("#firstop").val("firstop");
			//$("#waitbackbg").css({"display":"block","top":wt,"height":wh});
			//$("#firstop").val("firstop");
			//$("#form1").submit();
		}
		$(".page > a").click(function(){
			wh = $(window).height();
			wt = $(document).scrollTop();
			$("#waitbackbg").css({"display":"block","top":wt,"height":wh});
		});
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
		$("input[name='busi_id']").bind("click",function(){
		    $("#b_id").val($(this).val());
			$("#form1").submit();
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
		$("input[name='showtype']").change(function(){
	    	var selectedvalue = $("input[name='showtype']:checked").val();
	    	$("#search_status").val(selectedvalue);
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
	
		
	function account(pid,op){
	    var title="";
	    if (op=="deposit") title="订单收押金";
	    if (op=="backmoney") title="退押金";
	    if (op=="freezedeposit") title="冻结押金";
		demo_iframe('account.php?pid='+pid+'&op='+op,title,850,460,'login_js');
	}
	
	function detail(pid)
	{
		demo_iframe('depositdetail.php?pid='+pid,"押金收退明细",850,460,'login_js');
	}

</script>
<!-->

</body>
</html>