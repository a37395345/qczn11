<?php /* Smarty version Smarty-3.0.4, created on 2014-07-12 23:14:29
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/business/printoutcar.html" */ ?>
<?php /*%%SmartyHeaderCode:636753c150d596ced5-75305879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1512b9d6b1d4901f25532c6939df3972d58a016' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/business/printoutcar.html',
      1 => 1405178049,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '636753c150d596ced5-75305879',
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
<link href="../../../css/pact.css" rel="stylesheet" type="text/css" />
<script language="javascript">

function printme()

{   document.body.innerHTML=document.getElementById('iepage1').innerHTML+'<br/>'+document.getElementById('iepage2').innerHTML+'<br/>'+document.getElementById('iepage3').innerHTML+'<br/>'+document.getElementById('iepage4').innerHTML;

    window.print();

}

</script>
</head>

<body>
<div align="right" id="btnPrint"><input id="btnPrint" type="button" value="打印预览" onclick="printme()" /></div>
<div class="iepage1" id="iepage1">
<table width="950" border="0" cellpadding="0" cellspacing="0" align="center" class="table" >
  <tr>
    <td colspan="4"><div style=" position:absolute; margin:20px 0 0 740px;"><iframe src="BCGcode39.php?text=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_contractNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_contractNum'] : null);?>
" width="184" height="50" frameborder="0" scrolling="no"></iframe></div><h1>常州市运河汽车租赁出车单</h1></td>
  </tr>
  <tr>
    <td align="right" bgcolor="#F5F5F5"><b>用车单位：</b></td>
    <td align="left" colspan="3"><?php echo (isset($_smarty_tpl->getVariable('list')->value['client_name']) ? $_smarty_tpl->getVariable('list')->value['client_name'] : null);?>
</td>
  </tr>
  <tr>
    <td width="22%" align="right" bgcolor="#F5F5F5"><b>联系人：</b></td>
    <td width="28%" align="left"><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linker']) ? $_smarty_tpl->getVariable('list')->value['paiche_linker'] : null);?>
</td>
    <td width="22%" align="right" bgcolor="#F5F5F5"><b>联系人手机：</b></td>
    <td width="28%" align="left"><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerPhone']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerPhone'] : null);?>
</td>
  </tr>
  <tr>
    <td align="right" bgcolor="#F5F5F5"><b>业务员：</b></td>
    <td align="left"><?php echo (isset($_smarty_tpl->getVariable('list')->value['yewuyuan']) ? $_smarty_tpl->getVariable('list')->value['yewuyuan'] : null);?>
</td>
    <td align="right" bgcolor="#F5F5F5"><b>业务员电话：</b></td>
    <td align="left"><?php echo (isset($_smarty_tpl->getVariable('list')->value['emp_phone']) ? $_smarty_tpl->getVariable('list')->value['emp_phone'] : null);?>
</td>
  </tr>
  <tr>
    <td align="right" bgcolor="#F5F5F5"><b>调度员：</b></td>
    <td align="left"><?php echo (isset($_smarty_tpl->getVariable('list')->value['paicheDispatchMan']) ? $_smarty_tpl->getVariable('list')->value['paicheDispatchMan'] : null);?>
</td>
    <td align="right" bgcolor="#F5F5F5"><b>调度员电话：</b></td>
    <td align="left"><?php echo (isset($_smarty_tpl->getVariable('list')->value['paicheDispatchManPhone']) ? $_smarty_tpl->getVariable('list')->value['paicheDispatchManPhone'] : null);?>
</td>
  </tr>
  <tr>
    <td align="right" bgcolor="#F5F5F5"><b>司机：</b></td>
    <td align="left"><?php echo (isset($_smarty_tpl->getVariable('list')->value['siji']) ? $_smarty_tpl->getVariable('list')->value['siji'] : null);?>
</td>
    <td align="right" bgcolor="#F5F5F5"><b>车辆：</b></td>
    <td align="left">苏D<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
</td>
  </tr>
  <tr>
    <td align="right" bgcolor="#F5F5F5"><b>用车起始日期：</b></td>
    <td align="left"><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate_All'] : null);?>
</td>
    <td align="right" bgcolor="#F5F5F5"><b>用车到期日期：</b></td>
    <td align="left"><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_endDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_endDate_All'] : null);?>
</td>
  </tr>  
  <tr>
  	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('itemlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
    <td align="right" bgcolor="#F5F5F5"><b><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_name']) ? $_smarty_tpl->tpl_vars['row']->value['item_name'] : null);?>
：</b></td>
    <td align="left"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row']->value['conv_result'] : null);?>
</td>
    <?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1)%2==0){?>
    </tr><tr>
    <?php }?>
    <?php }} ?>
  </tr>
  
  <tr>
    <td align="right" bgcolor="#F5F5F5"><b>每天工作时间：</b></td>
    <td align="left"><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_workTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_workTime'] : null);?>
小时</td>
    <td align="right" bgcolor="#F5F5F5"><b>超时费：</b></td>
    <td align="left"><?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitTime'] : null)!="Y"){?><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_overTime'] : null);?>
元/小时<?php }else{ ?><p class='red'>不限时</p><?php }?></td>
  </tr>
  <tr>
    <td align="right" bgcolor="#F5F5F5"><b>用车限制公里数：</b></td>
    <td align="left"><?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)!="Y"){?><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_limitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_limitKm'] : null);?>
公里 <?php }else{ ?><p class='red'>不限公里</p><?php }?></td>
    <td align="right" bgcolor="#F5F5F5"><b>超公里，每公里费用：</b></td>
    <td align="left"><?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)!="Y"){?><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_overKm'] : null);?>
元/公里<?php }?></td>
  </tr>
  <tr>
    <td align="right" bgcolor="#F5F5F5"><b>合同租金：</b></td>
    <td align="left"><?php echo $_smarty_tpl->getVariable('paiche_rent')->value;?>
元</td>
    <td align="right" bgcolor="#F5F5F5"><b>已交定金：</b></td>
    <td align="left"><?php echo $_smarty_tpl->getVariable('paiche_front')->value;?>
元</td>
  </tr>
  <tr>
    <td align="right" bgcolor="#F5F5F5"><b>还需收尾款：</b></td>
    <td align="left" colspan="3">租金<?php echo $_smarty_tpl->getVariable('paiche_rent')->value-$_smarty_tpl->getVariable('paiche_rented')->value-$_smarty_tpl->getVariable('paiche_front')->value;?>
元
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
  <tr>
    <td align="right" bgcolor="#F5F5F5"><b>线路说明：</b></td>
    <td align="left" colspan="3"><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_line']) ? $_smarty_tpl->getVariable('list')->value['paiche_line'] : null);?>
</td>
  </tr>
  <tr>
    <td align="right" bgcolor="#F5F5F5"><b>特殊备注：</b></td>
    <td align="left" colspan="3"><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_specialRemarks']) ? $_smarty_tpl->getVariable('list')->value['paiche_specialRemarks'] : null);?>
</td>
  </tr>
  <tr>
    <td align="right" bgcolor="#F5F5F5"><b>实际向客户收取车费：</b></td>
    <td align="left" colspan="3"></td>
  </tr>
  <tr>
    <td height="80px" align="right" bgcolor="#F5F5F5"><b>客户意见：</b></td>
    <td align="left" colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td align="right" bgcolor="#F5F5F5"><b>客户确认签字：</b></td>
    <td align="left" colspan="3">&nbsp;</td>
  </tr>
</table>
<div style="border-bottom:dotted #000 1px; margin:10px 0; font-size:12px;"></div>
<table width="950" border="0" cellpadding="0" cellspacing="0" align="center" class="table" >
  <tr>
  <td width="22%" align="right" bgcolor="#F5F5F5">*<b>过桥过路及费：</b></td>
  <td width="28%">&nbsp;</td>
  <td width="22%" align="right" bgcolor="#F5F5F5"><b>#过桥过路费审核人：</b></td>
  <td width="28%">&nbsp;</td>
</tr>
  <tr>
    <td width="22%" align="right" bgcolor="#F5F5F5">*<b>油卡加油：</b></td>
    <td width="28%">&nbsp;</td>
    <td width="22%" align="right" bgcolor="#F5F5F5">*<b>油卡加油日期时间：</b></td>
    <td width="28%">&nbsp;</td>
  </tr>
  <tr>
    <td align="right" bgcolor="#F5F5F5">*<b>现金加油：</b></td>
    <td>&nbsp;</td>
    <td align="right" bgcolor="#F5F5F5"><b>#现金加油审核人：</b></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right" bgcolor="#F5F5F5">*<b>住宿费：</b></td>
    <td>&nbsp;</td>
    <td align="right" bgcolor="#F5F5F5"><b>#住宿费审核人：</b></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right" bgcolor="#F5F5F5">*<b>开始公里数：</b></td>
    <td>&nbsp;</td>
    <td align="right" bgcolor="#F5F5F5">*<b>结束公里数：</b></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right" bgcolor="#F5F5F5">*<b>共行驶公里数：</b></td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td align="right" bgcolor="#F5F5F5"><b>备注：</b></td>
    <td height="50" colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td align="right" bgcolor="#F5F5F5"><b>司机签字：</b></td>
    <td>&nbsp;</td>
    <td align="right" bgcolor="#F5F5F5"><b>财务签字：</b></td>
    <td>&nbsp;</td>
  </tr>
</table>
<!--<div style=" width:100%; height:30px; bottom:0px; margin-bottom:0px; text-align:right; z-index:999; display:block; position:fixed;">注：“*”为司机填写，“#”为调度员填写</div>-->
<table style="bottom:0px; margin-bottom:0px; width:100%;">
<tr>
<td valign="bottom" style="text-align:right; height:100px;">注："*"为司机填写，"#"为调度员填写</td>
</tr>
</table></div>
</body>