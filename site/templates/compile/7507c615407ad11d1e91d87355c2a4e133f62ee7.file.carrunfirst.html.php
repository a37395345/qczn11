<?php /* Smarty version Smarty-3.0.4, created on 2019-03-03 13:57:59
         compiled from "D:\web\site\templates\elsker\operator/machine/carrunfirst.html" */ ?>
<?php /*%%SmartyHeaderCode:33885c7b6ce71058f3-59974297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7507c615407ad11d1e91d87355c2a4e133f62ee7' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/machine/carrunfirst.html',
      1 => 1551592642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33885c7b6ce71058f3-59974297',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>管理后台</title>
<link href="../../../css/style.css" rel="stylesheet" type="text/css">
<link href="../../../css/flbao.css" rel="stylesheet" type="text/css">
<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<script type="text/javascript" src="../../../js/jquery.js"></script>

</head>
<body>

<div class="so_main">
  <div class="page_tit">车辆当前状况一览表   </div>
  <div class="list">
  		<div class="detl-l">
            <table class="form" id="profit">
            <tbody>
            <tr>
			    <td class="ccc_bg" rowspan="2" >总计<br/>车辆数</td>
			    <td class="ccc_bg" colspan="9" width="40%">租用车辆数(业务归属)</td>
			    <td class="ccc_bg" colspan="9" width="40%">空闲车辆数</td>
			    <td class="ccc_bg" rowspan="2" width="7%">故障<br/>维修<br/>车辆数</td>
			    <td class="ccc_bg" rowspan="2" width="7%">异常<br/>维修<br/>车辆数</td>
			</tr>
		  	<tr>
			    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('car')->value['zlist']) ? $_smarty_tpl->getVariable('car')->value['zlist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
			    <td class="ccc_bg" width="4%"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null);?>
</td>
			    <?php }} ?>
			    <td class="ccc_bg" width="4%">合计</td>
			    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('car')->value['klist']) ? $_smarty_tpl->getVariable('car')->value['klist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
			    <td class="ccc_bg" width="4%"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null);?>
</td>
			    <?php }} ?>
			    <td class="ccc_bg" width="4%">合计</td>
			  </tr>
		  	  <tr>
			    <td ><a href="list.php?task=carrun&firstop=firstop&status=9"><?php echo (isset($_smarty_tpl->getVariable('car')->value['tnum']) ? $_smarty_tpl->getVariable('car')->value['tnum'] : null);?>
</a></td>
			    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('car')->value['zlist']) ? $_smarty_tpl->getVariable('car')->value['zlist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
			    <td width="4%"><a href="list.php?task=carrun&status=1&search_shop=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_id']) ? $_smarty_tpl->tpl_vars['row']->value['shop_id'] : null);?>
"><?php $_tmp1=(isset($_smarty_tpl->tpl_vars['row']->value['total']) ? $_smarty_tpl->tpl_vars['row']->value['total'] : null);?><?php if (empty($_tmp1)){?>0<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['total']) ? $_smarty_tpl->tpl_vars['row']->value['total'] : null);?>
<?php }?></a></td>
			    <?php }} ?>
			    <td width="4%"><a href="list.php?task=carrun&status=1"><?php echo (isset($_smarty_tpl->getVariable('car')->value['znum']) ? $_smarty_tpl->getVariable('car')->value['znum'] : null);?>
</a></td>
			    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('car')->value['klist']) ? $_smarty_tpl->getVariable('car')->value['klist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
			    <td width="4%"><a href="list.php?task=carrun&status=0&search_shop=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_id']) ? $_smarty_tpl->tpl_vars['row']->value['shop_id'] : null);?>
"><?php $_tmp2=(isset($_smarty_tpl->tpl_vars['row']->value['total']) ? $_smarty_tpl->tpl_vars['row']->value['total'] : null);?><?php if (empty($_tmp2)){?>0<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['total']) ? $_smarty_tpl->tpl_vars['row']->value['total'] : null);?>
<?php }?></a></td>
			    <?php }} ?>
			    <td width="4%"><a href="list.php?task=carrun&status=0"><?php echo (isset($_smarty_tpl->getVariable('car')->value['knum']) ? $_smarty_tpl->getVariable('car')->value['knum'] : null);?>
</a></td>
			    <td width="7%"><a href="list.php?task=carrun&firstop=firstop&status=2"><?php echo (isset($_smarty_tpl->getVariable('car')->value['wnum']) ? $_smarty_tpl->getVariable('car')->value['wnum'] : null);?>
</a></td>
			    <td width="7%"><a href="list.php?task=carrun&firstop=firstop&status=2&maint=reason"><?php echo (isset($_smarty_tpl->getVariable('car')->value['ynum']) ? $_smarty_tpl->getVariable('car')->value['ynum'] : null);?>
</a></td>
			  </tr>
		    </tbody>
            </table>
      </div>  
  
 </div>
  <div class="page_tit">门店调度订单状况一览表   </div>
  <div id="tabbox">
    <ul class="tabs" id="tabs">
       <li dat="1"><a href="http://192.168.1.9">临时自驾</a></li>
       <li dat="2"><a href="http://192.168.1.9">临时代驾</a></li>
       <li dat="3"><a href="http://192.168.1.9">长期自驾</a></li>
       <li dat="4"><a href="http://192.168.1.9">长期代驾</a></li>
       <li dat="5"><a href="http://192.168.1.9">长期大客</a></li>
    </ul>
    <ul class="tab_conbox" id="tab_conbox">
        <li class="tab_con"><img src="../../../images/wait2.gif" style="margin:auto; clear: both; display: block; left:50%;top:50%;"/></li>
        <li class="tab_con">
        	<table width="100%" border="0" cellspacing="0" cellpadding="0">
			  <tr>
			  <td  style="vertical-align:top;">
			  	<table id="business1" width="100%" border="1" cellspacing="0" cellpadding="3">
				  <tr>
					<td colspan="2">预约未调度</td>
				  </tr>
			  	</table>
			  </td>
			  <td  id="b2" style="vertical-align:top;display:none;">
			  	<table id="business20" width="100%" border="1" cellspacing="0" cellpadding="3">
				  <tr>
					<td colspan="2">调度进行中</td>
				  </tr>
			  	</table>
			  </td>
			  <td  style="vertical-align:top;">
			  	<table id="business2" width="100%" border="1" cellspacing="0" cellpadding="3">
				  <tr>
					<td colspan="2">调度未还车</td>
				  </tr>
			  	</table>
			  </td>
			  <td  style="vertical-align:top;">
			  	<table id="business3" width="100%" border="1" cellspacing="0" cellpadding="3">
				  <tr>
					<td colspan="2">还车未结账</td>
				  </tr>
			  	</table>
			  </td>
			  <td  style="vertical-align:top;">
			  	<table id="business4" width="100%" border="1" cellspacing="0" cellpadding="3">
				  <tr>
					<td colspan="2">已结账</td>
				  </tr>
			  	</table>
			  </td>
			  </tr>
			</table>
        </li>
        
    </ul>
</div>
</div>

<script type="text/javascript" src="../../../js/carrun.js"></script>

</body>
</html>