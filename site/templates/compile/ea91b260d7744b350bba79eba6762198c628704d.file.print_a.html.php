<?php /* Smarty version Smarty-3.0.4, created on 2020-03-07 18:02:56
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/daijia_linshi/print_a.html" */ ?>
<?php /*%%SmartyHeaderCode:41015e6371507bd2d7-47939809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea91b260d7744b350bba79eba6762198c628704d' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/daijia_linshi/print_a.html',
      1 => 1583575373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41015e6371507bd2d7-47939809',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>租车合同打印</title>
<link href="../../../css/pact.css" rel="stylesheet" type="text/css" />
<script language="javascript">


function printme()

{   document.body.innerHTML=document.getElementById('iepage1').innerHTML;

    window.print();

}

</script>
</head>
<body>
  <style type="text/css">
    tr{
      height: 30px;
    }
    body{
      font-size: 18px;
      line-height: 25px;
    }
  </style>
<!--startprint1--><br />
<div class="iepage1" id="iepage1" style="height: 900px;width:100%">
  <div style="width:125px;height:45px;position:relative;left: 85%;top: 20px">
  <img src="../../../css/logo.png" width="145" height="50" border="0">
</div>
<h2 style="text-align: center;margin: 0">租车合同</h2>
<br/>
<p style="line-height:0px;font-size: 15px;"><b>合同号：</b><?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_contractNum']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_contractNum'] : null);?>
</p>
<table border="1" cellspacing="0" cellpadding="0" width="100%" class="table" style="text-align:center;border:#c4c4c4 solid 1px;line-height:0px;font-size: 15px;">
  <tr>
    <td>甲方</td>
    <td colspan="3"><p>常州市运河汽车租赁有限公司 </p></td>
  </tr>
  <tr>

    <td width="25%">联系人</td>
    <td width="25%"><?php echo (isset($_smarty_tpl->getVariable('paiche')->value['emp_name']) ? $_smarty_tpl->getVariable('paiche')->value['emp_name'] : null);?>
</td>
    <td width="25%">电话</td>
    <td width="25%">13775081500</td>
    
  </tr>
  

    <td>乙方</td>
    <td><?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_linker']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_linker'] : null);?>
</td>
    <td>电话</td>
    <td><?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_linkerPhone']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_linkerPhone'] : null);?>
</td>
    
  </tr>
</table>
<br/>
<p style="font-size: 18px;line-height: 25px">
<span style="font-size: 20px;font-weight: 550;line-height: 20px">一．租赁期限：</span><br>




<table border="1" cellspacing="0" cellpadding="0" width="100%" class="table" style="text-align:center;border:#c4c4c4 solid 1px;line-height:0px;font-size: 15px;">
  <tr>
    <td width="25%">起始时间</td>
    <td width="25%"><p> <?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_startDate']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_startDate'] : null);?>
</p></td>
  
    <td width="25%">终止时间</td>
    <td width="25%"><p><?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_endDate']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_endDate'] : null);?>
 </p></td>
  </tr>
</table>
<br/><br/>
<span style="font-size: 20px;font-weight: 550;line-height: 20px">二．租赁费用及付款方式：</span><br>

1、基础合同租金为<u>&nbsp;&nbsp;<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['conv_money']) ? $_smarty_tpl->getVariable('paiche')->value['conv_money'] : null);?>
&nbsp;&nbsp;</u>          元。<br>
2、限行驶里程为   <u>&nbsp;&nbsp;<?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_unlimitKm'] : null)=="Y"){?><?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_limitKm']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_limitKm'] : null);?>
<?php }else{ ?>不限<?php }?>&nbsp;&nbsp;</u>       公里，超公里按 <u>&nbsp;&nbsp;<?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_unlimitKm'] : null)=="Y"){?><?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_overKm']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_overKm'] : null);?>
<?php }else{ ?>0<?php }?>&nbsp;&nbsp;</u>    元/公里计算。（注：①整个用车行程的总公里数是按照往返计算②乙方下车地点不在常州市区，车辆空车返回常州市区的公里数也计算在客户整个用车行程的总公里数内） <br>
3、服务时间为     <u>&nbsp;&nbsp;8&nbsp;&nbsp;</u>     小时，超时按  <u>&nbsp;&nbsp;<?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_unlimitKm'] : null)=="Y"){?><?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_overTime']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_overTime'] : null);?>
<?php }else{ ?>0<?php }?>&nbsp;&nbsp;</u>   元/小时计算。<br>
4、租车服务开始前支付约定租金，超公里费及超时费用车结束后支付<br>
5、支付方式为：现金、微信扫码、支付宝扫码、银行卡转账。<br><br>
<span style="font-size: 20px;font-weight: 550;line-height: 20px">三．用车车型及行程：</span>
<u style="">&nbsp;&nbsp;<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_line']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_line'] : null);?>
&nbsp;&nbsp;</u>。（注：因乙方行程变更超过限行驶里程30%的，甲方有权要求乙方重新按新行程预计里程超过限行驶里程部分支付费用后继续用车，否则有权终止本合同直至乙方付清前述费用） <br> <br>

<span style="font-size: 20px;font-weight: 550;line-height: 20px">四．备注说明：</span><u>&nbsp;&nbsp;<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_specialRemarks']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_specialRemarks'] : null);?>
&nbsp;&nbsp;</u>

<br> <br>
<span style="font-size: 20px;font-weight: 550;line-height: 20px">五．甲方的权利和义务：</span><br>
1、甲方向乙方提供车辆和司机服务。<br>
2、甲方定期对司机进行安全教育、安全培训，确保甲方司机提供优良的驾驶服务。<br>
3、在合同期内，甲方应负责提供车辆的质量及行车安全，保持车辆的清洁卫生。<br>
4、甲方负责出租给乙方车况良好、设备齐全、车辆行驶证、保险证等齐全的有效车辆。乙方接收车辆即视为已确认车况良好、设备齐全、车辆行驶证、保险证等齐全，符合租赁标准。<br>
5、甲方负责向保险公司对租赁车辆投保：交强险、足额车辆损失险、第三者责任险100万和不计免赔险。若因甲方未及时办理投保或续保而导致车辆发生事故而无法进行理赔的，甲方承担由此引发的直接经济损失。<br>
6、甲方有权在租赁期间内对车辆使用情况进行监督。<br>
7、对因非甲方原因造成的损失不负连带责任，甲方不承担租赁期内乙方与第三者引发的任何民事经济责任。<br><br>

<span style="font-size: 20px;font-weight: 550;line-height: 20px">六．乙方的权利和义务：</span><br>
1、乙方提供给甲方的资料、证件应真实有效。<br>
2、乙方租用甲方车辆，不能从事营业性客运运输和非法活动，不能转租、转包、抵押、投资、买卖、赠与和借用。乙方使用车辆不能超过本合同规定的权利，不能私自拆装、匹配甲方的车体、车零件、设备及钥匙。<br>
3、乙方不得驾驶甲方车辆。<br><br>

<span style="font-size: 20px;font-weight: 550;line-height: 20px">七．违约责任：</span><br>
1、<u>若乙方取消用车，甲方收取的定金和租金不退。</u>若在用车过程中因乙方原因造成损失的，应向甲方进行赔偿，包括且不限于维修费用、律师费、诉讼费、鉴定费、检验费、评估费、公证费、查档费、翻译费、仲裁费、人身损害赔偿等相关费用。

<span style="font-size: 20px;font-weight: 550;line-height: 20px">八．其他约定：</span><br>
1、如发生纠纷，由甲乙双方协商解决，协商不成，提交甲方所在的人民法院诉讼。<br>
2、本合同所载明的甲乙双方的联系方式为双方约定签收的联系方式。任一方需变更联系方式的，应在变更前三日内书面通知另一方，且任何一方不得拒收，否则另一方按本合同约定的联系方式接到通知后三日即视为已签收。<br>
3、本合同一式二份，甲、乙双方各执一份。本合同经甲、乙双方签字或盖章后生效。<br>


</p>






<br/>
<p style="font-size: 18px;">
  <div style="width: 50%;float: left;height: 60px;">甲方（盖章）：常州市运河汽车租赁有限公司 </div>
  <div style="width: 50%;float: left;height: 60px;">乙方（盖章）：</div>
  
   <div style="width: 50%;float: left;height: 60px;">代理人（签字）： </div>
  <div style="width: 50%;float: left;height: 60px;">代理人（签字）： </div>
  
   <div style="width: 50%;float: left;height: 60px;">日期： </div>
  <div style="width: 50%;float: left;height: 60px;">日期： </div>
 
               　　　　　　　　                  
  <div class="" id="" style="height: 1px;width: 1200px"></div>



</div>
<!--endprint1-->
</body>
</html>