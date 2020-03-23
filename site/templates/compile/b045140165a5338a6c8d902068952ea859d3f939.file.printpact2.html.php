<?php /* Smarty version Smarty-3.0.4, created on 2019-10-07 15:22:33
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/business/printpact2.html" */ ?>
<?php /*%%SmartyHeaderCode:4394158725d9ae7b9e3b685-57175054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b045140165a5338a6c8d902068952ea859d3f939' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/business/printpact2.html',
      1 => 1569749208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4394158725d9ae7b9e3b685-57175054',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>合同打印</title>
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
<!--startprint1--><br />
<h2>合　同</h2>
<p class="lsdj"><b>合同号：</b><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_contractNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_contractNum'] : null);?>
<br />
  出租方：　常州市运河汽车租赁有限公司　电话：0519-88990000　传真：0519-86800024（以下简称甲方） <br />
  承租方：　<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_personal']) ? $_smarty_tpl->getVariable('list')->value['paiche_personal'] : null)==1){?><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linker']) ? $_smarty_tpl->getVariable('list')->value['paiche_linker'] : null);?>
<?php }else{ ?><?php echo (isset($_smarty_tpl->getVariable('list')->value['client_name']) ? $_smarty_tpl->getVariable('list')->value['client_name'] : null);?>
<?php }?>　联系电话：　<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerPhone']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerPhone'] : null);?>
　（以下简称乙方）<br />
  <br />
  甲、乙双方经协商一致，就汽车租赁事宜签订本合同。 <br />
  第一条 租车期限及租金<br />
  乙方承租甲方<u>　<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_requestCar']) ? $_smarty_tpl->getVariable('list')->value['paiche_requestCar'] : null);?>
　</u>&nbsp;<br />
  租车时间及行程为<u>　用车时间从　<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate_All'] : null);?>
　到　<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_endDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_endDate_All'] : null);?>
　，线路是　<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_line']) ? $_smarty_tpl->getVariable('list')->value['paiche_line'] : null);?>
　</u>&nbsp;<br />
  第二条 租金支付<br />
  租金共为人民币：<u>　<?php echo $_smarty_tpl->getVariable('paiche_rent_D')->value;?>
　</u>元整 （<u>　<?php echo $_smarty_tpl->getVariable('paiche_rent')->value;?>
　</u>元）。行驶公里数：<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)=="Y"){?>不限<?php }else{ ?><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_limitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_limitKm'] : null);?>
公里，超公里按每公里<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_overKm'] : null);?>
元/公里计算。<?php }?>
  <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitTime'] : null)!="Y"){?>超时按<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_overTime'] : null);?>
元/小时计算。<?php }?>注：<u>　
  <?php  $_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('itemlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
	    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['last']){?><?php }else{ ?>,<?php }?>
	    <?php }} ?>
  </u>。<br />
  <?php if ($_smarty_tpl->getVariable('paiche_front')->value>0){?>客人需付定金：<u>　<?php echo $_smarty_tpl->getVariable('paiche_front')->value;?>
　</u>元<?php }?>,<?php if ($_smarty_tpl->getVariable('paiche_rented')->value>0){?>客人已付定金：<u>　<?php echo $_smarty_tpl->getVariable('paiche_rented_D')->value;?>
　</u>元整 （<u>　<?php echo $_smarty_tpl->getVariable('paiche_rented')->value;?>
　</u>元）。<?php }?><u>　余款上车后支付。　</u>&nbsp;<br />
  第三条 甲方权利和义务 <br />
    1、向乙方提供的租赁车辆技术状况良好，各种证照及国家强制保险齐全。<br />
    2、租赁期间对车辆使用情况进行监督 。<br />
    3、向乙方提供司机<br />
  第四条 乙方权利和义务 <br />
  <u>1</u><u>、按时支付租金</u><u>,</u><u>如租金计算方式有超公里费，公里数是按往返计算，如客户下车地点不在常州市区，车辆空车返回常州市区的公里数计算在客户用车公里数内。</u><u><br />
  </u>2、不得用租赁车辆从事违法活动。<br />
  第五条 违约责任 <br />
  <u>如乙方取消用车，定金不退。</u><br />
  第六条 争议解决方式 <br />
  因本合同发生的争议，由双方协商解决，协商不成，任何一方可以向人民法院起诉。 <br />
  第七条 其他 <br />
    1、本合同自双方签字、盖章之日起生效。 <br />
    2、本合同一式贰份，甲乙双方各执壹份，具同等法律效力。 <br /><br />
  甲方：　　　　　　　　　　　　　　　　　　　　　　乙方： <br />
经办人：<br /><br />
签约时间：</p>
<!--endprint1-->
</div>
<div align="right" id="btnPrint"><input id="btnPrint" type="button" value="打印预览" onclick=preview(1) /></div>
</body>
</html>