<?php /* Smarty version Smarty-3.0.4, created on 2019-05-15 09:07:21
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/business/printpact_a.html" */ ?>
<?php /*%%SmartyHeaderCode:43545cdb6649021c92-66946767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b439b3d6d1fb0a6e1ff82d7b18d2de79d153fb4' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/business/printpact_a.html',
      1 => 1557882435,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43545cdb6649021c92-66946767',
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

{   document.body.innerHTML=document.getElementById('iepage1').innerHTML+'<br/>'+document.getElementById('iepage2').innerHTML;

    window.print();

}

</script>
</head>
<body>

<div class="iepage1" id="iepage1" style="height: 1550px;width:100%">
<!--startprint1-->
<div style="width:125px;height:45px;position:relative;left: 85%;top: 20px">
  <img src="../../../css/logo.png" width="145" height="50" border="0">
</div>
<h1 style="text-align: center;margin: 0">租 车 合 同 </h1>
<p style="line-height:0px;font-size: 19px;"><b>合同号：</b><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_contractNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_contractNum'] : null);?>
</p>
<table border="1" cellspacing="0" cellpadding="0" width="100%" class="table" style="text-align:center;border:#c4c4c4 solid 1px;line-height:0px;font-size: 19px;">
  <tr>
    <td>甲方</td>
    <td colspan="2"><p>常州市运河汽车租赁有限公司 </p></td>
    <td colspan=""><p>取车门店 </p></td>
    <td colspan=""><p><?php echo (isset($_smarty_tpl->getVariable('list')->value['shop_name']) ? $_smarty_tpl->getVariable('list')->value['shop_name'] : null);?>
 </p></td>
    <td colspan=""><p>门店电话 </p></td>
    <td colspan=""><p><?php echo (isset($_smarty_tpl->getVariable('list')->value['shop_phone']) ? $_smarty_tpl->getVariable('list')->value['shop_phone'] : null);?>
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
<p style="line-height:0px;font-size: 19px;">一．租赁车辆 </p>
<table border="1" cellspacing="0" cellpadding="0" width="100%" class="table" style="text-align:center;border:#c4c4c4 solid 1px;line-height:0px;font-size: 19px;">
  <tr>
    <td><p>车牌号码#</p></td>
    <td><p>车　型</p></td>
    <td><p>颜　色 </p></td>
    <td><p>发动机号#</p></td>
  </tr>
  <tr>
    <td><p>苏D<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
</p></td>
    <td><p><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_model']) ? $_smarty_tpl->getVariable('list')->value['car_model'] : null);?>
</p></td>
    <td><p><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_color']) ? $_smarty_tpl->getVariable('list')->value['car_color'] : null);?>
</p></td>
    <td><p><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_motor']) ? $_smarty_tpl->getVariable('list')->value['car_motor'] : null);?>
</p></td>
  </tr>
</table>
<p style="line-height:0px;font-size: 19px;">二．租赁期限 </p>
<table border="1" cellspacing="0" cellpadding="0" width="100%" class="table" style="text-align:center;border:#c4c4c4 solid 1px;line-height:0px;font-size: 19px;">
  <tr>
    <td>起始时间</td>
    <td><p><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate_All'] : null);?>
</p></td>
    <td><p>终止时间</p></td>
    <td><p><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_endDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_endDate_All'] : null);?>
</p></td>
  </tr>
</table>
<p style="font-size: 18px;">三．租赁价格：合同租金<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_price']) ? $_smarty_tpl->getVariable('list')->value['car_price'] : null);?>
元/日。<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_aaa']) ? $_smarty_tpl->getVariable('list')->value['paiche_aaa'] : null)==''){?><?php echo round(((isset($_smarty_tpl->getVariable('list')->value['paiche_endDate']) ? $_smarty_tpl->getVariable('list')->value['paiche_endDate'] : null)-(isset($_smarty_tpl->getVariable('list')->value['paiche_startDate']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate'] : null))/86400);?>
日<?php }else{ ?><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_aaa']) ? $_smarty_tpl->getVariable('list')->value['paiche_aaa'] : null);?>
<?php }?>限行驶里程为<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)=="Y"){?>不限<?php }else{ ?><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_limitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_limitKm'] : null);?>
<?php }?>公里，超公里按每公里<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_overKm'] : null);?>
元/公里计算，，租赁时间以连续租用24小时为一天，超过前述终止时间的，按<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_overTime'] : null);?>
小时计收超时费用（超时半小时内不计算，超半小时不满一小时按半小时计算，超一小时不满一个半小时按一小时计算） <br />

  四．车辆交接：甲方公司经营场地。 <br />

  五．缴费结算：<?php if ($_smarty_tpl->getVariable('paiche_front')->value>0){?>乙方应向甲方预付定金<?php echo $_smarty_tpl->getVariable('paiche_front')->value;?>
元， <?php }?>乙方应向甲方缴付租金为<?php echo $_smarty_tpl->getVariable('paiche_rent')->value;?>
元，乙方应向甲方交纳租用车辆的押金为<?php echo $_smarty_tpl->getVariable('paiche_deposit')->value;?>
元/辆，在租车时一次性缴付给甲方。还车时，在车辆完好无损的情况下与甲方结算，结算时<font style="font-family : 微软雅黑,宋体;text-decoration:underline;"><strong>
  甲方要暂扣违章保证金3000元，若无违章费用则在30天后退回。所有违章由本公司统一处理，结算方式为：违章费用+50%违章手续费+150元/分，结算时间为银行营业时间内。 </strong></font> <br />


  六．承租人承诺：<font style="font-family : 微软雅黑,宋体;text-decoration:underline;"><strong>此次租车只前往<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_line']) ? $_smarty_tpl->getVariable('list')->value['paiche_line'] : null);?>
，若超出范围，租车公司有权前往收车，押金不退！收车费另行结算，由承租人承担。<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_needtax']) ? $_smarty_tpl->getVariable('list')->value['paiche_needtax'] : null)==0){?>此次租车无需要开票。<?php }?>若提前还车，租金不退。还车时请清洗车辆，如若不洗，向甲方支付清洗费50元。租赁期间保管好车辆行驶证，如若丢失，赔偿500元。甲方有权从车辆押金中直接扣除前述费用。</strong></font><br />

  七．续租方式：在租赁期内，乙方需要续租，在本合同租期结束前24小时内通知甲方，经甲方同意后，双方重新签订合同后才能续租。否则，甲方有权以超时作出处理。 <br />

  八．备注说明：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_specialRemarks']) ? $_smarty_tpl->getVariable('list')->value['paiche_specialRemarks'] : null);?>
 <br />

  九．甲方的权利和义务： <br />
  1．甲方负责出租给乙方车况良好、设备齐全、车辆行驶证、保险证等牌证齐全有效的车辆。乙方接受车辆即视为已确认车况良好，设备齐全、车辆行驶证、保险证等牌证齐全，符合租赁标准。<br/>
  2．甲方负责向保险公司对租赁车辆投保交强险、车损险和第三者责任100万。<br/>
  3．乙方违约，甲方有权单方解除本合同。甲方有权强行收回租赁车辆，没收押金，并加收3000-10000元强制收车费用。强制收车费用由甲方根据实际情况自主决定。由此对甲方或第三方造成的全部损失由乙方承担。 <br/>
  4．对因非甲方原因造成的损失不负连带责任，甲方不承担租赁期间乙方与第三者引发的任何民事经济责任。<br/>
  5．甲方有权将因乙方违约等产生的应付相关费用从押金中扣除。<br/>
  十．乙方的权利和义务：<br/>
  1．乙方提供给甲方的资料、证件应真实有效。<br/>
  2．认真的检查并掌握租赁车辆的各种性能和操作方法，点清随车配置的附件，验收签字后驶离。<font style="font-family : 微软雅黑,宋体;text-decoration:underline;"><strong>满油租车，满油还车。</strong></font><br/>
  3．乙方租用甲方车辆，不能从事营业性客运运输和非法活动，不能转租、转包、抵押、投资、买卖、赠与和借用。乙方使用车辆不能超过本合同规定的权利，不能私自拆装、匹配甲方的车体、车零件、设备及钥匙。乙方承诺租车用途仅为家庭私用。<br/>
  4．乙方承租车辆行驶范围应如实告知甲方。去外地必须事先告知甲方并征得甲方书面同意。<br/>
  5．租赁期间，乙方所租用车辆的保养维护和发生各类机械故障、事故后的维修，必须到甲方指定的汽车修理厂进行修理。如果特殊情况需要在外急修的，须事先征得甲方书面同意后方可修理。修理项目、费用经甲方审核，必须开具国家税务部门监制的汽车修理业统一发票。如果发现擅自去外厂修理而造成车辆修理质量低劣，零部件不符合车辆技术检测部门要求的必须重新修复或调换，乙方承担因此造成的全部经济损失。<br/>
  6．租赁期内发生交通事故后，乙方应当立即向甲方及当地公安交通管理部门报告，保护现场，在甲方的协助下及时办理事故处理及保险公司索赔事宜。如发生肇事逃逸或者由于乙方逾期不能提供有关资料而无法向保险公司索赔等情况，产生的一切后果由乙方负责，甲方不承担任何责任。<br/>
  <font style="font-family : 微软雅黑,宋体;text-decoration:underline;"><strong>
    7．租赁期间乙方使用甲方车辆发生各类事故而产生的费用由乙方先行支付。①发生事故需要报保险公司的，乙方承担500元来年保费上涨费用；②保险公司理赔不足部分由乙方自行承担。
  </strong></font><br/>

  <font style="font-family : 微软雅黑,宋体;text-decoration:underline;"><strong>
    8．租赁期内发生事故导致车辆需要维修的，不论有无责任，均需按照下列标准补偿甲方车辆的折旧损失：①车辆维修费在1万元以下的（含1万），按10%补偿；②车辆维修费在1万元以上5万元以下的（含5万），按20%补偿；③车辆维修费在5万元以上的，按30%补偿；④维修期间，乙方应继续按前述租金标准支付车辆使用费，直至车辆维修完毕；乙方未及时足额按上述租金标准支付车辆使用费的，甲方有权按上述超时费用标准向乙方收取车辆使用费；乙方应及时足额支付车辆维修费用，若乙方未及时足额支付车辆维修费用，甲方没有义务垫资进行车辆维修，由此导致维修延长期间乙方仍应按前述约定支付车辆使用费。
  </strong></font><br/>
  9．乙方必须按约定的时间、地点归还车辆，还车时必须保持车辆性能良好，车辆整洁，设备齐全，并无任何刮碰现象，如有损坏照价赔偿。<font style="font-family : 微软雅黑,宋体;text-decoration:underline;"><strong>若在乙方租用期间因呕吐、装载海鲜等造成还车时车辆存在异味的，赔偿甲方3000元。</strong></font> 乙方应在交车后主动在车辆交接清单上提出异议或签字确认，未在车辆交接清单上提出异议或签字确认的，以甲方经办人员签字确认的结果为准。<br/>
  10．租赁期内，因乙方不慎遗失牌照和各类证件及因违章（包括电子警察）未及时处理，致使甲方造成验审、过户、扣分的所有损失，全部由乙方承担，并向甲方赔偿因车辆无牌照和各类证件而停驶的实际损失。<br/>
  11．乙方在租赁期间操作不当、保管不善造成的车辆维修和车辆损失及由此造成的车辆停驶经济损失由乙方承担。<br/>
  12．乙方在合同期内要求提前终止合同的，需征得甲方书面同意，且租金不退。<br/>
  
  </p>

</div>





<!--------------第二页------------------------>
<div class="iepage2" id="iepage2" style="height: 800px;width: 100%">

<div style="width:125px;height:45px;position:relative;left: 85%;top: 20px">
  <img src="../../../css/logo.png" width="145" height="50" border="0">
</div>
  <p style="line-height:0px;font-size: 19px;"><b>合同号：</b><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_contractNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_contractNum'] : null);?>
</p>
<p style="font-size: 18px">
  13．乙方不得在饮酒、吸毒、药物麻醉、无有效驾驶证等情况下驾驶车辆。<br /> 
  十一．乙方还需要对以下损失应承担全部赔偿责任：<br />
  1．承租期内，乙方未尽对承租车辆保管责任造成的损失；<br />
  2．乙方租车期间轮胎破损、轮胎爆裂或者交通事故造成的换胎费用、补胎费用、车上人员伤亡、第三者损失和其他损失；<br />
  3．造成车辆扣押、罚没、抵押、出卖、赠与、投资等的损失，包括且不限于造成甲方停驶搁车的损失等。搁车停驶经济损失，以停车天数的租赁费总金额同等金额进行计算；<br />
  4．由于乙方的驾驶员饮酒、吸毒、药物麻醉、无有效驾驶证以及调换约定驾驶员造成的损失；<br />
  5．乙方或担保方因伪造证件、隐瞒事实、制造假案等违法行为造成的损失；<br />
  6. 乙方在租车期间的车辆全部损失及对第三人造成的全部损失；<br />
  7．因本合同争议引起的诉讼费、保全费、律师代理费（计算标准不超过江苏省律师收费标准的最高限额即视为合理）及其他全部合理维权费用（上述费用不要求甲方已实际支付，与第三方签订书面协议并约定付款义务即视为损失已经产生，乙方即需全额承担）；<br />
  8．其他应由乙方承担的相关费用。<br />
  十二．其他： <br />
  1．在合同期内如遇国家重大经济政策变化，或一方遇到不可抗力，经甲乙双方协商，可对合同条款作适当调整。<br />2．合同的附件是本合同的组成部分，与本合同具有同等法律效力。 <br />3．如发生纠纷，由甲乙双方协商解决，协商不成，提交甲方所在的人民法院诉讼。<br />
  4．本合同所载明的甲乙双方及担保方的通讯地址为各方约定的送达地址，各方均不得拒收。任一方需变更送达地址的，应在变更前三日内书面通知其他方，否则其他方按本协议约定的送达地址寄送后三日即视为已送达。诉讼文书送达亦参照以上约定。<br />
  5．本合同一式二份，甲、乙双方各执一份。本合同经甲、乙双方签字或盖章后生效。<br />
  十三．担保条款：<br />
  1．担保人为具有代为履行或代偿能力的企业法人或其他经济组织或个人。<br />
  2．担保人确认本次担保系其真实意思表示。<br />
  3．担保人同意出具营业执照、身份证、户口簿、房产证等真实有效证件。<br />
  4．担保人就乙方履行本合同及附件约定的全部义务负连带保证责任，保证期限为租赁期到期顺延两年。


</p>


<h2>常州市运河汽车租赁有限公司车辆交接清单</h2>

<table border="1" cellspacing="0" cellpadding="0" width="100%" class="table" style="text-align:center;border:#c4c4c4 solid 1px;line-height:0px;font-size: 18px">
  <tr>
    <td colspan="" width="160px"><p>起始时间 </p></td>
    <td colspan="2" ><p><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate_All'] : null);?>
</p></td>
    <td colspan="" width="160px"><p>实际还车时间</p></td>
    <td colspan="2"><p></p></td>
  </tr>
  <tr>
    <td colspan=""><p>开始公里 </p></td>
    <td colspan="2"><p></p></td>
    <td colspan=""><p>结束公里 </p></td>
    <td colspan="2"><p></p></td>
  </tr>
  <tr>
    <td colspan="" style="width: 16.6666%"><p>项目 </p></td>
    <td colspan="" style="width: 16.6666%"><p>拿车时</p></td>
    <td colspan="" style="width: 16.6666%"><p>还车时 </p></td>
    <td colspan="" style="width: 16.6666%"><p>项目</p></td>
    <td colspan="" style="width: 16.6666%"><p>拿车时</p></td>
    <td colspan="" style="width: 16.6666%"><p>还车时</p></td>
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
    <td width="48"  rowspan="2"><p style="line-height:16px;">租车<br/><br/>签字 </p></td>
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
<p style="font-size: 18px;">
  <div style="width: 33%;float: left;height: 55px;">甲方（盖章）：</div>
  <div style="width: 33%;float: left;height: 55px;">乙方（盖章）：</div>
  <div style="width: 33%;float: left;height: 55px;">丙方（盖章）：</div>
   <div style="width: 33%;float: left;height: 55px;">代理人（签字）： </div>
  <div style="width: 33%;float: left;height: 55px;">代理人（签字）： </div>
  <div style="width: 33%;float: left;height: 55px;">代理人（签字）： </div>
   <div style="width: 33%;float: left;height: 55px;">日期： </div>
  <div style="width: 33%;float: left;height: 55px;">日期： </div>
  <div style="width: 33%;float: left;height: 55px;">日期： </div>
               　　　　　　　　                  
        
</div>
<!--endprint1-->
<div class="" id="" style="height: 1px;width: 1200px"></div>
</body>
</html>