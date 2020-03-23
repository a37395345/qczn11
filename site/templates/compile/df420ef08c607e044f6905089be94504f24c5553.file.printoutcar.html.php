<?php /* Smarty version Smarty-3.0.4, created on 2016-01-16 10:54:35
         compiled from "D:\web\site\templates\elsker\operator/business/printoutcar.html" */ ?>
<?php /*%%SmartyHeaderCode:261455699b0eb822bf0-35272903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df420ef08c607e044f6905089be94504f24c5553' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/business/printoutcar.html',
      1 => 1452912457,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '261455699b0eb822bf0-35272903',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>出车单打印</title>
<!--  -->
<script language="javascript">
function printme()
{   document.body.innerHTML=document.getElementById('iepage1').innerHTML+'<br/>'+document.getElementById('iepage2').innerHTML+'<br/>'+document.getElementById('iepage3').innerHTML+'<br/>'+document.getElementById('iepage4').innerHTML;
    window.print();
}
</script>
<style type="text/css">
body {margin:0;padding:0;font:normal 0.7em "微软雅黑",Arial,Times;}
tr {line-height:22px;}
</style>
</head>
<!--  -->
<body>

<table cellpadding="0" cellspacing="0" style="text-align:center;">
  <tr>
    <td colspan="2"><div style=" margin:5px 0 0 25px;"><iframe src="BCGcode39.php?text=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_contractNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_contractNum'] : null);?>
" width="100%" height="80" frameborder="0" scrolling="no"></iframe></div></td>
  </tr>
  <tr style="line-height:6px;">
    <td colspan="2"><h1>运河租车&nbsp;&nbsp;出车单</h1></td>
  </tr>
  <?php if ((isset($_smarty_tpl->getVariable('list')->value['client_name']) ? $_smarty_tpl->getVariable('list')->value['client_name'] : null)!=''){?>
  <tr>
    <td align="right" width="35%">用车单位：</td>
    <td align="left" ><?php echo (isset($_smarty_tpl->getVariable('list')->value['client_name']) ? $_smarty_tpl->getVariable('list')->value['client_name'] : null);?>
</td>
  </tr>
  <?php }else{ ?>
  <?php if ((isset($_smarty_tpl->getVariable('list')->value['bro_name']) ? $_smarty_tpl->getVariable('list')->value['bro_name'] : null)!=''){?>
  <tr>
    <td align="right" width="35%">调车公司：</td>
    <td align="left" ><?php echo (isset($_smarty_tpl->getVariable('list')->value['bro_name']) ? $_smarty_tpl->getVariable('list')->value['bro_name'] : null);?>
</td>
  </tr>
  <?php }?>
  
  <?php }?>
   <tr>
    <td align="right" width="35%">联系人：</td>
    <td align="left"><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linker']) ? $_smarty_tpl->getVariable('list')->value['paiche_linker'] : null);?>
&nbsp;手机：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerPhone']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerPhone'] : null);?>
</td>
  </tr>
  <tr>
    <td align="right" >业务员：</td>
    <td align="left"><?php echo (isset($_smarty_tpl->getVariable('list')->value['yewuyuan']) ? $_smarty_tpl->getVariable('list')->value['yewuyuan'] : null);?>
&nbsp;电话：<?php echo (isset($_smarty_tpl->getVariable('list')->value['yewuyuan_phone']) ? $_smarty_tpl->getVariable('list')->value['yewuyuan_phone'] : null);?>
</td>
  </tr>
  <tr>
    <td align="right" >调度员：</td>
    <td align="left"><?php echo (isset($_smarty_tpl->getVariable('list')->value['paicheDispatchMan']) ? $_smarty_tpl->getVariable('list')->value['paicheDispatchMan'] : null);?>
&nbsp;电话：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paicheDispatchManPhone']) ? $_smarty_tpl->getVariable('list')->value['paicheDispatchManPhone'] : null);?>
</td>
  </tr>
  <tr>
    <td align="right" >司机：</td>
    <td align="left"><?php echo (isset($_smarty_tpl->getVariable('list')->value['siji']) ? $_smarty_tpl->getVariable('list')->value['siji'] : null);?>
&nbsp;车辆：苏D<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
</td>
  </tr>
  <tr>
    <td align="right" >起始日期：</td>
    <td align="left"><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate_All'] : null);?>
</td>
  </tr>
  <tr>
    <td align="right" >截止日期：</td>
    <td align="left"><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_endDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_endDate_All'] : null);?>
</td>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('itemlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
  <tr>
    <td align="right" ><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_name']) ? $_smarty_tpl->tpl_vars['row']->value['item_name'] : null);?>
：</td>
    <td align="left"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row']->value['conv_result'] : null);?>
</td>
  </tr>
  <?php }} ?>
  <tr>
    <td align="right" >工作时间：</td>
    <td align="left"><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_workTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_workTime'] : null);?>
小时&nbsp;超时费：<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitTime'] : null)!="Y"){?><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_overTime'] : null);?>
元/小时<?php }else{ ?>不限时<?php }?></td>
  </tr>
  <tr>
    <td align="right" >限制公里数：</td>
    <td align="left"><?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)!="Y"){?><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_limitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_limitKm'] : null);?>
公里 ，超公里按<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_overKm'] : null);?>
元/公里<?php }else{ ?>不限公里<?php }?></td>
  </tr>
  <tr>
    <td align="right" >合同租金：</td>
    <td align="left"><?php echo $_smarty_tpl->getVariable('paiche_rent')->value;?>
元&nbsp;已交定金：<?php echo $_smarty_tpl->getVariable('paiche_rented')->value;?>
元</td>
  </tr>
  <tr>
    <td align="right" >还需收尾款：</td>
    <td align="left">租金<?php if ($_smarty_tpl->getVariable('paiche_rented')->value>0){?><?php echo $_smarty_tpl->getVariable('paiche_rent')->value-$_smarty_tpl->getVariable('paiche_rented')->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('paiche_rent')->value-$_smarty_tpl->getVariable('paiche_front')->value;?>
<?php }?>元
    			<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)!="Y"){?>、超公里费<?php }?><?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitTime'] : null)!="Y"){?>、超时费<?php }?>
    			<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('itemlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
    			<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row']->value['conv_result'] : null)=="否"){?>、<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_costname']) ? $_smarty_tpl->tpl_vars['row']->value['item_costname'] : null);?>
<?php }?>
    			<?php }} ?>
    			</td>
  </tr>
  <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_line']) ? $_smarty_tpl->getVariable('list')->value['paiche_line'] : null)!=''){?>
  <tr>
    <td align="right" >线路说明：</td>
    <td align="left"><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_route']) ? $_smarty_tpl->getVariable('list')->value['paiche_route'] : null);?>
程。<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_line']) ? $_smarty_tpl->getVariable('list')->value['paiche_line'] : null);?>
</td>
  </tr>
  <?php }?>
  <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_specialRemarks']) ? $_smarty_tpl->getVariable('list')->value['paiche_specialRemarks'] : null)!=''){?>
  <tr>
    <td align="right" >特殊备注：</td>
    <td align="left"><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_specialRemarks']) ? $_smarty_tpl->getVariable('list')->value['paiche_specialRemarks'] : null);?>
</td>
  </tr>
  <?php }?>
  <tr>
    <td align="right" >客户意见：</td>
    <td align="left">_________________________________</td>
  </tr>
  <tr>
    <td align="right" height="45">&nbsp;</td>
    <td align="left">_________________________________</td>
  </tr>
  <tr>
    <td align="right" >&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td align="right" colspan="2">客户确认签字：___________&nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td align="center" colspan="2">***********************************************</td>
  </tr>
</table>
<table cellpadding="0" cellspacing="0" style="text-align:center;">
  <tr>
	  <td width="7%">&nbsp;</td>
	  <td align="left" width="50%">过桥过路费：_______元</td>
	  <td align="right" >停车费：_______元</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="left" >餐费：_______元</td>
    <td align="right" >住宿费：_______元</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="left" >收取现金：_______元</td>
    <td align="right" >现金加油：_______元</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td align="left" >*开始公里：__________</td>
    <td align="right" >*结束公里：__________</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="left" >*总共行驶：______公里</td>
    <td>*实际结算：______公里</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="left" >用车时间：___________</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="left" colspan="2">备注说明：____________________________________</td>
  </tr>
</table>
<table cellpadding="0" cellspacing="0" style="text-align:center;">
  <tr>
    <td width="7%">&nbsp;</td>
    <td >司机：________</td>
    <td >审核：________</td>
    <td >财务：________</td>
  </tr>
</table>
</body>