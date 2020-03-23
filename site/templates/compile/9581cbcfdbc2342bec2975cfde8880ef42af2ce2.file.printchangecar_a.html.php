<?php /* Smarty version Smarty-3.0.4, created on 2019-04-30 13:59:34
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/business/printchangecar_a.html" */ ?>
<?php /*%%SmartyHeaderCode:158165cc7e446057442-79483514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9581cbcfdbc2342bec2975cfde8880ef42af2ce2' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/business/printchangecar_a.html',
      1 => 1556603970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158165cc7e446057442-79483514',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>换车单打印</title>
<link href="../../../css/pact.css" rel="stylesheet" type="text/css" />
<script language="javascript">


function printme()

{   document.body.innerHTML=document.getElementById('iepage1').innerHTML;

    window.print();

}

</script>
</head>
<body>
<!--startprint1--><br />
<div class="iepage1" id="iepage1" style="height: 900px;width:100%">
  <div style="width:125px;height:45px;position:relative;left: 85%;top: 20px">
  <img src="../../../css/logo.png" width="145" height="50" border="0">
</div>
<h2 style="text-align: center;margin: 0">常州市运河汽车租赁有限公司中途更换车辆补充协议</h2>
<br/>
<p style="line-height:0px;font-size: 15px;"><b>合同号：</b><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_contractNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_contractNum'] : null);?>
</p>
<table border="1" cellspacing="0" cellpadding="0" width="100%" class="table" style="text-align:center;border:#c4c4c4 solid 1px;line-height:0px;font-size: 15px;">
<p style="font-size: 15px;">
  本协议为合同号租车合同（以下简称“原协议”）补充协议。
</p>
  <tr>
    <td>甲方</td>
    <td colspan="2"><p>常州市运河汽车租赁有限公司 </p></td>
    <td colspan=""><p>换车门店 </p></td>
    <td colspan=""><p><?php echo (isset($_smarty_tpl->getVariable('change')->value['shop_name']) ? $_smarty_tpl->getVariable('change')->value['shop_name'] : null);?>
 </p></td>
    <td colspan=""><p>门店电话 </p></td>
    <td colspan=""><p><?php echo (isset($_smarty_tpl->getVariable('change')->value['shop_phone']) ? $_smarty_tpl->getVariable('change')->value['shop_phone'] : null);?>
</p></td>
  </tr>
  <tr>
    <td rowspan="3"><p>乙方</p></td>
    <td><p>承租人</p></td>
    <td colspan=""><p><?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_personal']) ? $_smarty_tpl->getVariable('list')->value['paiche_personal'] : null)==1){?><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linker']) ? $_smarty_tpl->getVariable('list')->value['paiche_linker'] : null);?>
<?php }else{ ?><?php echo (isset($_smarty_tpl->getVariable('list')->value['client_name']) ? $_smarty_tpl->getVariable('list')->value['client_name'] : null);?>
<?php }?></p></td>
    <td colspan=""><p>联系人</p></td>
    <td><p><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linker']) ? $_smarty_tpl->getVariable('list')->value['paiche_linker'] : null);?>
</p></td>
    <td><p>电话</p></td>
    <td><p><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerPhone']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerPhone'] : null);?>
</p></td>
  </tr>
  <tr>
    <td><p>证件名称</p></td>
    <td><p>身份证</p></td>
    <td colspan=""><p>证件号码 </p></td>
    <td colspan="3"><p><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerNum'] : null);?>
</p></td>
  </tr>
  <tr>
    <td colspan="2"><p>通讯地址：</p></td>
    <td colspan="4"><p><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerAdd']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerAdd'] : null);?>
</p></td>
  </tr>

  <tr>
    <td rowspan="3"><p>丙方</p></td>
    <td><p>担保人</p></td>
    <td colspan=""><p><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promier']) ? $_smarty_tpl->getVariable('list')->value['paiche_promier'] : null);?>
</p></td>
    <td><p>电话</p></td>
    <td colspan="4"><p><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promierPhone']) ? $_smarty_tpl->getVariable('list')->value['paiche_promierPhone'] : null);?>
</p></td>
  </tr>
  <tr>
    <td><p>证件名称</p></td>
    <td><p>身份证</p></td>
    <td colspan=""><p>证件号码 </p></td>
    <td colspan="3"><p><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promierNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_promierNum'] : null);?>
</p></td>
  </tr>
  <tr>
    <td colspan="2"><p>通讯地址：</p></td>
    <td colspan="4"><p><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promierAdd']) ? $_smarty_tpl->getVariable('list')->value['paiche_promierAdd'] : null);?>
</p></td>
  </tr>
</table>


<br/>
<table border="1" cellspacing="0" cellpadding="0" width="100%" class="table" style="text-align:center;border:#c4c4c4 solid 1px;line-height:0px;font-size: 15px;">
  <tr>
    <td width="25%"><p>原始车辆</p></td>
    <td width="25%"><p>苏D<?php echo (isset($_smarty_tpl->getVariable('change')->value['carA']) ? $_smarty_tpl->getVariable('change')->value['carA'] : null);?>
</p></td>
    <td width="25%"><p>目标车辆</p></td>
    <td width="25%"><p>苏D<?php echo (isset($_smarty_tpl->getVariable('change')->value['carB']) ? $_smarty_tpl->getVariable('change')->value['carB'] : null);?>
</p></td>
  </tr>
  <tr>
    <td><p>原始车辆品牌型号</p></td>
    <td><p><?php echo (isset($_smarty_tpl->getVariable('change')->value['car_brandA']) ? $_smarty_tpl->getVariable('change')->value['car_brandA'] : null);?>
</p></td>
    <td><p>目标车辆品牌型号</p></td>
    <td><p><?php echo (isset($_smarty_tpl->getVariable('change')->value['car_brand']) ? $_smarty_tpl->getVariable('change')->value['car_brand'] : null);?>
</p></td>
  </tr>
  <tr>
    <td><p>原始车辆发动机号</p></td>
    <td><p><?php echo (isset($_smarty_tpl->getVariable('change')->value['car_motorB']) ? $_smarty_tpl->getVariable('change')->value['car_motorB'] : null);?>
</p></td>
    <td><p>目标车辆发动机号</p></td>
    <td><p><?php echo (isset($_smarty_tpl->getVariable('change')->value['car_motor']) ? $_smarty_tpl->getVariable('change')->value['car_motor'] : null);?>
</p></td>
  </tr>
  <tr>
    <td><p>原始车辆结束公里数</p></td>
    <td><p><?php echo (isset($_smarty_tpl->getVariable('change')->value['changecar_carAEndKilo']) ? $_smarty_tpl->getVariable('change')->value['changecar_carAEndKilo'] : null);?>
KM</p></td>
    <td><p>目标车辆开始公里数</p></td>
    <td><p><?php echo (isset($_smarty_tpl->getVariable('change')->value['changecar_kiloBNow']) ? $_smarty_tpl->getVariable('change')->value['changecar_kiloBNow'] : null);?>
KM</p></td>
  </tr>

</table>
<p>
  本次车辆更换后，租金变为<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_price']) ? $_smarty_tpl->getVariable('list')->value['car_price'] : null);?>
元/日。<br/>
  本补充协议与原合同不一致，以补充协议为准。本协议未涉及部分，仍按原合同履行。<br/>
  本补充协议自各方签章后生效。
</p>


<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_type']) ? $_smarty_tpl->getVariable('list')->value['paiche_type'] : null)==1){?>

<h2>常州市运河汽车租赁有限公司车辆交接清单</h2>

<table border="1" cellspacing="0" cellpadding="0" width="100%" class="table" style="text-align:center;border:#c4c4c4 solid 1px;line-height:0px;font-size: 15px">
  <tr>
    <td colspan="" width="160px"><p>换车时间 </p></td>
    <td colspan="2" ><p><?php echo (isset($_smarty_tpl->getVariable('change')->value['changecar_times']) ? $_smarty_tpl->getVariable('change')->value['changecar_times'] : null);?>
</p></td>
    <td colspan="" width="160px"><p>实际还车时间</p></td>
    <td colspan="2"><p></p></td>
  </tr>
  <tr>
    <td colspan=""><p>开始公里 </p></td>
    <td colspan="2"><p><?php echo (isset($_smarty_tpl->getVariable('change')->value['changecar_kiloBNow']) ? $_smarty_tpl->getVariable('change')->value['changecar_kiloBNow'] : null);?>
KM</p></td>
    <td colspan=""><p>结束公里 </p></td>
    <td colspan="2"><p></p></td>
  </tr>
  <tr>
    <td colspan="" style="width: 10%"><p>项目 </p></td>
    <td colspan="" style="width: 20%"><p>拿车时</p></td>
    <td colspan="" style="width: 20%"><p>还车时 </p></td>
    <td colspan="" style="width: 10%"><p>项目</p></td>
    <td colspan="" style="width: 20%"><p>拿车时</p></td>
    <td colspan="" style="width: 20%"><p>还车时</p></td>
  </tr>
  <tr>
   <td colspan=""><p>行驶证 </p></td>
    <td colspan=""><p>√</p></td>
    <td colspan=""><p> </p></td>
    <td colspan=""><p>钥匙</p></td>
    <td colspan=""><p>√</p></td>
    <td colspan=""><p></p></td>
  </tr>
  
 
 
  <tr>
    <td width="337" colspan="3" align="left">
      <p>前        
      <div align="center"><img width="250" height="125" src="../../../css/clip_image002.jpg" /></div>
    </p></td>
    <td width="335" colspan="3" align="left"><p>后        
      <div align="center"><img width="250" height="125" src="../../../css/clip_image004.jpg" /></div></p></td>
  </tr>
  <tr>
    <td width="337" colspan="3" align="left"><p>左        
      <div align="center"><img width="350" height="115" src="../../../css/clip_image006.jpg" /></div></p></td>
    <td width="335" colspan="3" align="left"><p>右        
      <div align="center"><img width="350" height="115" src="../../../css/clip_image006_0000.jpg" /></div></p></td>
  </tr>

  <tr>
    <td width="48"  rowspan="2"><p style="line-height:15px;">租车<br/><br/>签字 </p></td>
    <td width="60" colspan="" height="60px"><p>承租方 </p></td>
    <td width="229" colspan=""><p>&nbsp;</p></td>
    <td width="48" rowspan="2" ><p style="line-height:16px;">还车<br/><br/>签字 </p></td>
    <td width="59" colspan=""><p>承租方 </p></td>
    <td width="276" colspan=""><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="60" colspan="" height="60px"><p>出租方</p></td>
    <td width="229" colspan=""><p>&nbsp;</p></td>
    <td width="59" colspan=""><p>出租方</p></td>
    <td width="276" colspan=""><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="48" height="100px"><p>备注 </p></td>
    <td width="624" colspan="5" align="left" style="line-height:20px;"><b>
      1.上述证件、车况、备用工具良好的在空格上打"√"，无或损坏的打"×"。<br />
      2.油箱为满油，客户还车时也应注满还车。<br />
      3.客户在归还时必须将车辆内外清洗干净，否则加收50元清洗费。<br />                                              
    </td>
  </tr>
</table>
<br/>
<p style="font-size: 18px;">
  <div style="width: 33%;float: left;height: 50px;">甲方（盖章）：</div>
  <div style="width: 33%;float: left;height: 50px;">乙方（盖章）：</div>
  <div style="width: 33%;float: left;height: 50px;">丙方（盖章）：</div>
   <div style="width: 33%;float: left;height: 50px;">代理人（签字）： </div>
  <div style="width: 33%;float: left;height: 50px;">代理人（签字）： </div>
  <div style="width: 33%;float: left;height: 50px;">代理人（签字）： </div>
   <div style="width: 33%;float: left;height: 50px;">日期： </div>
  <div style="width: 33%;float: left;height: 50px;">日期： </div>
  <div style="width: 33%;float: left;height: 50px;">日期： </div>
               　　　　　　　　                  
  <div class="" id="" style="height: 1px;width: 1200px"></div>


<?php }?>
</div>
<!--endprint1-->
</body>
</html>