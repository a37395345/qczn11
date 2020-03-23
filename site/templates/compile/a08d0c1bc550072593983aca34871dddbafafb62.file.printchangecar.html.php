<?php /* Smarty version Smarty-3.0.4, created on 2014-12-31 15:36:56
         compiled from "D:\czyhqc\site\templates\elsker\operator/business/printchangecar.html" */ ?>
<?php /*%%SmartyHeaderCode:1793354a3a745f3aaa3-88736102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a08d0c1bc550072593983aca34871dddbafafb62' => 
    array (
      0 => 'D:\\czyhqc\\site\\templates\\elsker\\operator/business/printchangecar.html',
      1 => 1420011271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1793354a3a745f3aaa3-88736102',
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
<div align="right" id="btnPrint"><input id="btnPrint" type="button" value="打印预览" onclick="printme()" /></div>
<div class="iepage1" id="iepage1">
<!--startprint1--><br />
<div class="iepage1" id="iepage1">
<h2>常州市运河汽车租赁有限公司中途更换车辆补充协议</h2>
<p style="line-height:30px">甲方：常州市运河汽车租赁有限公司<br />
乙方：<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_personal']) ? $_smarty_tpl->getVariable('list')->value['paiche_personal'] : null)==1){?><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linker']) ? $_smarty_tpl->getVariable('list')->value['paiche_linker'] : null);?>
<?php }else{ ?><?php echo (isset($_smarty_tpl->getVariable('list')->value['client_name']) ? $_smarty_tpl->getVariable('list')->value['client_name'] : null);?>
<?php }?><br /><br />
1、乙方于<?php echo (isset($_smarty_tpl->getVariable('change')->value['changecar_times']) ? $_smarty_tpl->getVariable('change')->value['changecar_times'] : null);?>
将苏D-<?php echo (isset($_smarty_tpl->getVariable('change')->value['carA']) ? $_smarty_tpl->getVariable('change')->value['carA'] : null);?>
更换车辆苏D-<?php echo (isset($_smarty_tpl->getVariable('change')->value['carB']) ? $_smarty_tpl->getVariable('change')->value['carB'] : null);?>
，
苏D-<?php echo (isset($_smarty_tpl->getVariable('change')->value['carA']) ? $_smarty_tpl->getVariable('change')->value['carA'] : null);?>
车辆还车时公里数为<?php echo (isset($_smarty_tpl->getVariable('change')->value['changecar_carAEndKilo']) ? $_smarty_tpl->getVariable('change')->value['changecar_carAEndKilo'] : null);?>
公里，苏D-<?php echo (isset($_smarty_tpl->getVariable('change')->value['carB']) ? $_smarty_tpl->getVariable('change')->value['carB'] : null);?>
车辆交车公里数为<?php echo (isset($_smarty_tpl->getVariable('change')->value['changecar_kiloBNow']) ? $_smarty_tpl->getVariable('change')->value['changecar_kiloBNow'] : null);?>
公里。<br />
2、苏D-<?php echo (isset($_smarty_tpl->getVariable('change')->value['carB']) ? $_smarty_tpl->getVariable('change')->value['carB'] : null);?>
车辆发动机号：<?php echo (isset($_smarty_tpl->getVariable('change')->value['car_motor']) ? $_smarty_tpl->getVariable('change')->value['car_motor'] : null);?>
，车架号：<?php echo (isset($_smarty_tpl->getVariable('change')->value['car_frame']) ? $_smarty_tpl->getVariable('change')->value['car_frame'] : null);?>
，品牌型号：<?php echo (isset($_smarty_tpl->getVariable('change')->value['car_brand']) ? $_smarty_tpl->getVariable('change')->value['car_brand'] : null);?>
。<br />
3、其他双方责任与义务按之前汽车租赁合同履行。<br /><br /><br /><br />




甲方：　　　　　　　　　　　　　　　　　　　　　　　　　 乙方：<br />
经办人：
</p>
</div>


<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_type']) ? $_smarty_tpl->getVariable('list')->value['paiche_type'] : null)==1){?>
<h2>常州市运河汽车租赁有限公司车辆交接清单</h2>
<p style="line-height:0px;"><b>合同号：</b><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_contractNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_contractNum'] : null);?>
</p>
<table border="1" cellspacing="0" cellpadding="0" width="100%" class="table" style="text-align:center;border:#c4c4c4 solid 1px;line-height:0px;">
  <tr>
    <td colspan="2" width="160px"><p>车辆号码 </p></td>
    <td colspan="6"><p>苏D<?php echo (isset($_smarty_tpl->getVariable('change')->value['carB']) ? $_smarty_tpl->getVariable('change')->value['carB'] : null);?>
</p></td>
    <td colspan="2"><p>车    型 </p></td>
    <td colspan="6"><p><?php echo (isset($_smarty_tpl->getVariable('change')->value['car_brand']) ? $_smarty_tpl->getVariable('change')->value['car_brand'] : null);?>
</p></td>
  </tr>
  <tr>
    <td colspan="2"><p>承租人 </p></td>
    <td colspan="6"><p><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linker']) ? $_smarty_tpl->getVariable('list')->value['paiche_linker'] : null);?>
</p></td>
    <td colspan="3"><p>经办人 </p></td>
    <td colspan="4"><p><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linker']) ? $_smarty_tpl->getVariable('list')->value['paiche_linker'] : null);?>
</p></td>
  </tr>
  <tr>
    <td colspan="2"><p>起租时间 </p></td>
    <td colspan="6"><p><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate_All'] : null);?>
</p></td>
    <td colspan="3"><p>还车时间 </p></td>
    <td colspan="4"><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td colspan="2"><p>起驶公里 </p></td>
    <td colspan="6"><p><?php echo (isset($_smarty_tpl->getVariable('change')->value['changecar_kiloBNow']) ? $_smarty_tpl->getVariable('change')->value['changecar_kiloBNow'] : null);?>
　KM</p></td>
    <td colspan="3"><p>还车公里 </p></td>
    <td colspan="4"><p>　　　　KM</p></td>
  </tr>
  <tr>
    <td colspan="2"><p>检查项目 </p></td>
    <td colspan="2"><p>发车时 </p></td>
    <td><p>收车时 </p></td>
    <td colspan="2"><p>检查项目 </p></td>
    <td colspan="2"><p>发车时 </p></td>
    <td colspan="3"><p>收车时 </p></td>
    <td><p>收车时</p></td>
    <td><p>发车时</p></td>
    <td><p>收车时</p></td>
  </tr>
  <tr>
    <td colspan="2"><p>行    驶 证 </p></td>
    <td colspan="2"><p>&nbsp;</p></td>
    <td><p>&nbsp;</p></td>
    <td colspan="2"><p>遥    控 器 </p></td>
    <td colspan="2"><p>&nbsp;</p></td>
    <td colspan="3"><p>&nbsp;</p></td>
    <td><p>备 胎 </p></td>
    <td><p>&nbsp;</p></td>
    <td><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td colspan="2"><p>前后牌照 </p></td>
    <td colspan="2"><p>&nbsp;</p></td>
    <td><p>&nbsp;</p></td>
    <td colspan="2"><p>燃油量</p></td>
    <td colspan="2"><p>&nbsp;</p></td>
    <td colspan="3"><p>&nbsp;</p></td>
    <td><p>轮胎扳手 </p></td>
    <td><p>&nbsp;</p></td>
    <td><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td colspan="2"><p>反    光 镜 </p></td>
    <td colspan="2"><p>&nbsp;</p></td>
    <td><p>&nbsp;</p></td>
    <td colspan="2"><p>内倒车镜 </p></td>
    <td colspan="2"><p>&nbsp;</p></td>
    <td colspan="3"><p>&nbsp;</p></td>
    <td><p>警 示 牌 </p></td>
    <td><p>&nbsp;</p></td>
    <td><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td colspan="2"><p>钥　匙 </p></td>
    <td colspan="2"><p>&nbsp;</p></td>
    <td><p>&nbsp;</p></td>
    <td colspan="2"><p>音　响 </p></td>
    <td colspan="2"><p>&nbsp;</p></td>
    <td colspan="3"><p>&nbsp;</p></td>
    <td><p>千 斤 顶 </p></td>
    <td><p>&nbsp;</p></td>
    <td><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td colspan="2"><p>门　锁 </p></td>
    <td colspan="2"><p>&nbsp;</p></td>
    <td><p>&nbsp;</p></td>
    <td colspan="2"><p>座　套 </p></td>
    <td colspan="2"><p>&nbsp;</p></td>
    <td colspan="3"><p>&nbsp;</p></td>
    <td><p>灭 火 器 </p></td>
    <td><p>&nbsp;</p></td>
    <td><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td colspan="2"><p>灯　光 </p></td>
    <td colspan="2"><p>&nbsp;</p></td>
    <td><p>&nbsp;</p></td>
    <td colspan="2"><p>点烟器 </p></td>
    <td colspan="2"><p>&nbsp;</p></td>
    <td colspan="3"><p>&nbsp;</p></td>
    <td><p>洗车蜡把 </p></td>
    <td><p>&nbsp;</p></td>
    <td><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td colspan="2"><p>雨    刮 器 </p></td>
    <td colspan="2"><p>&nbsp;</p></td>
    <td><p>&nbsp;</p></td>
    <td colspan="2"><p>烟　缸 </p></td>
    <td colspan="2"><p>&nbsp;</p></td>
    <td colspan="3"><p>&nbsp;</p></td>
    <td><p>发动工况 </p></td>
    <td><p>&nbsp;</p></td>
    <td><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td colspan="2"><p>保    险 杠 </p></td>
    <td colspan="2"><p>&nbsp;</p></td>
    <td><p>&nbsp;</p></td>
    <td colspan="2"><p>脚　垫</p></td>
    <td colspan="2"><p>&nbsp;</p></td>
    <td colspan="3"><p>&nbsp;</p></td>
    <td><p>底盘启动 </p></td>
    <td><p>&nbsp;</p></td>
    <td><p>&nbsp;</p></td>

  </tr>
  <tr>
    <td colspan="2"><p>天　线 </p></td>
    <td colspan="2"><p>&nbsp;</p></td>
    <td><p>&nbsp;</p></td>
    <td colspan="2"><p>空　调 </p></td>
    <td colspan="2"><p>&nbsp;</p></td>
    <td colspan="3"><p>&nbsp;</p></td>
    <td><p>&nbsp;</p></td>
    <td><p>&nbsp;</p></td>
    <td><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="337" colspan="8" align="left"><p>前        <div align="center"><img width="176" height="111" src="../../../css/clip_image002.jpg"></div></p></td>
    <td width="335" colspan="7" align="left"><p>后        <div align="center"><img width="155" height="109" src="../../../css/clip_image004.jpg"></div></p></td>
  </tr>
  <tr>
    <td width="337" colspan="8" align="left"><p>左        <div align="center"><img width="252" height="92" src="../../../css/clip_image006.jpg"></div></p></td>
    <td width="335" colspan="7" align="left"><p>右        <div align="center"><img width="252" height="92" src="../../../css/clip_image006_0000.jpg"></div></p></td>
  </tr>
  <tr>
    <td width="337" colspan="8"><p>车顶 </p></td>
    <td width="335" colspan="7"><p>底盘 </p></td>
  </tr>
  <tr>
    <td width="48" rowspan="2"><p>签字 </p></td>
    <td width="60" colspan="2"><p>承租方 </p></td>
    <td width="229" colspan="5"><p>&nbsp;</p></td>
    <td width="59" colspan="2"><p>承租方 </p></td>
    <td width="276" colspan="5"><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="60" colspan="2"><p>出租方</p></td>
    <td width="229" colspan="5"><p>&nbsp;</p></td>
    <td width="59" colspan="2"><p>出租方</p></td>
    <td width="276" colspan="5"><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="48"><p>备注 </p></td>
    <td width="624" colspan="14" align="left" style="line-height:20px;"><b>油箱为满油。客户在归还车辆时必须将车辆内外清洗干净，否则将加收50元清洗费用。</b><br />
      <b>凭此单据在还车20日后退还相应违章保证金，交接单如有丢失，恕不退还违章保证金。</b></td>
  </tr>
</table>
注：1、上述这件、车况、备用工具良好的在空格上打"√"，无或损坏的打"×"。<br />
　　2、燃油箱在发车为满箱状态，还车时应在验车人的陪同下至加油站加注满还车。
</div>
<?php }?>
<!--endprint1-->
</body>
</html>