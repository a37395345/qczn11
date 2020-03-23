<?php /* Smarty version Smarty-3.0.4, created on 2015-08-28 14:44:49
         compiled from "D:\czyhqc\site\templates\elsker\operator/business/printpact.html" */ ?>
<?php /*%%SmartyHeaderCode:2417055e00361d3ab63-11795864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80ac049c101b22d8371ea7d46d0975a279e2705c' => 
    array (
      0 => 'D:\\czyhqc\\site\\templates\\elsker\\operator/business/printpact.html',
      1 => 1440743438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2417055e00361d3ab63-11795864',
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

<div class="iepage1" id="iepage1">
<!--startprint1-->
<h2>合　同</h2>
<p style="line-height:0px;"><b>合同号：</b><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_contractNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_contractNum'] : null);?>
</p>
<table border="1" cellspacing="0" cellpadding="0" width="100%" class="table" style="text-align:center;border:#c4c4c4 solid 1px;line-height:0px;">
  <tr>
    <td>甲方</td>
    <td colspan="3"><p>常州市运河汽车租赁有限公司 </p></td>
    <td colspan="6"><p>电话：0519-88990000</p></td>
  </tr>
  <tr>
    <td rowspan="4"><p>乙方</p></td>
    <td><p>承租人</p></td>
    <td colspan="3"><p><?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_personal']) ? $_smarty_tpl->getVariable('list')->value['paiche_personal'] : null)==1){?><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linker']) ? $_smarty_tpl->getVariable('list')->value['paiche_linker'] : null);?>
<?php }else{ ?><?php echo (isset($_smarty_tpl->getVariable('list')->value['client_name']) ? $_smarty_tpl->getVariable('list')->value['client_name'] : null);?>
<?php }?></p></td>
    <td colspan="2"><p>联系人</p></td>
    <td><p><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linker']) ? $_smarty_tpl->getVariable('list')->value['paiche_linker'] : null);?>
</p></td>
    <td><p>电话</p></td>
    <td><p><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerPhone']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerPhone'] : null);?>
</p></td>
  </tr>
  <tr>
    <td><p>证件名称</p></td>
    <td><p>身份证</p></td>
    <td colspan="3"><p>证件号码 </p></td>
    <td colspan="4"><p><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerNum'] : null);?>
</p></td>
  </tr>
  <tr>
    <td><p>驾驶人</p></td>
    <td><p><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linker']) ? $_smarty_tpl->getVariable('list')->value['paiche_linker'] : null);?>
</p></td>
    <td colspan="3"><p>驾驶证号码 </p></td>
    <td colspan="4"><p><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerNum'] : null);?>
</p></td>
  </tr>
  <tr>
    <td><p>担保人</p></td>
    <td><p><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promier']) ? $_smarty_tpl->getVariable('list')->value['paiche_promier'] : null);?>
</p></td>
    <td colspan="2"><p>证件#</p></td>
    <td width="44%" colspan="5"><p><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promierNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_promierNum'] : null);?>
</p></td>
  </tr>
</table>
<p style="line-height:0px;">一．租赁车辆 </p>
<table border="1" cellspacing="0" cellpadding="0" width="100%" class="table" style="text-align:center;border:#c4c4c4 solid 1px;line-height:0px;">
  <tr>
    <td><p>车牌号码#</p></td>
    <td><p>车　型</p></td>
    <td><p>颜　色 </p></td>
    <td><p>发动机号#</p></td>
  </tr>
  <tr>
    <td><p>苏D<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
</p></td>
    <td><p><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_type']) ? $_smarty_tpl->getVariable('list')->value['car_type'] : null);?>
</p></td>
    <td><p><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_color']) ? $_smarty_tpl->getVariable('list')->value['car_color'] : null);?>
</p></td>
    <td><p><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_motor']) ? $_smarty_tpl->getVariable('list')->value['car_motor'] : null);?>
</p></td>
  </tr>
</table>
<p style="line-height:0px;">二．租赁期限 </p>
<table border="1" cellspacing="0" cellpadding="0" width="100%" class="table" style="text-align:center;border:#c4c4c4 solid 1px;line-height:0px;">
  <tr>
    <td>起始时间</td>
    <td><p><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate_All'] : null);?>
</p></td>
    <td><p>终止时间</p></td>
    <td><p><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_endDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_endDate_All'] : null);?>
</p></td>
  </tr>
</table>
<p>三．租赁价格：合同租金<?php echo $_smarty_tpl->getVariable('paiche_rent')->value;?>
元。<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_aaa']) ? $_smarty_tpl->getVariable('list')->value['paiche_aaa'] : null)==''){?><?php echo round(((isset($_smarty_tpl->getVariable('list')->value['paiche_endDate']) ? $_smarty_tpl->getVariable('list')->value['paiche_endDate'] : null)-(isset($_smarty_tpl->getVariable('list')->value['paiche_startDate']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate'] : null))/86400);?>
日<?php }else{ ?><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_aaa']) ? $_smarty_tpl->getVariable('list')->value['paiche_aaa'] : null);?>
<?php }?>限行驶里程为<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)=="Y"){?>不限<?php }else{ ?><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_limitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_limitKm'] : null);?>
<?php }?>公里，超公里按每公里<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_overKm'] : null);?>
元/公里计算，租赁时间以连续租用24小时为一天，超时按<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_overTime'] : null);?>
元/小时计算，（超时半小时内不计算，超半小时不满一小时按半小时计算，超一小时不满一个半小时按一小时计算） <br />
  其他约定事项 <br />
  四．车辆交接：甲方公司经营场地。 <br />
  五．缴费结算：<?php if ($_smarty_tpl->getVariable('paiche_front')->value>0){?>乙方应向甲方预付定金<?php echo $_smarty_tpl->getVariable('paiche_front')->value;?>
元 <?php }?>，乙方应向甲方缴付租金为<?php echo $_smarty_tpl->getVariable('paiche_rent')->value;?>
元，已付租金<?php echo $_smarty_tpl->getVariable('paiche_rented')->value;?>
元，乙方应向甲方交纳租用车辆的押金为<?php echo $_smarty_tpl->getVariable('paiche_deposit')->value;?>
元/辆，已付押金<?php echo $_smarty_tpl->getVariable('paiche_deposit_have')->value;?>
元，在租车时一次性以现金方式缴付给甲方。还车时，在车辆完好无损的情况下凭押金手据与甲方结算，结算时甲方要暂扣违章保证金2000元，在20天后退回，结算时间为银行营业时间内。 <br />
  六．本人承诺：<font style="font-family : 微软雅黑,宋体;text-decoration:underline;"><strong>此次租车只前往<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_line']) ? $_smarty_tpl->getVariable('list')->value['paiche_line'] : null);?>
，若超出范围，租车公司将前往收车，押金不退！收车费另算。<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_needtax']) ? $_smarty_tpl->getVariable('list')->value['paiche_needtax'] : null)==0){?>此次租车不需要开票。<?php }?></strong></font><br />
  七．续租方式：在租赁期内，乙方需要续租，在本合同租期结束前24小时通知甲方，经甲方同意后，双方重新签订合同后才能续租。否则，甲方有权以超时作出处理。 <br />
  八．租车费用：车船税，年检费，国家强制投保险种由甲方负担，其他行驶费用由乙方承担。 <br />
  九．保养维护：乙方租用甲方的车辆后，需对所租用的车辆进行日常保养（其保养项目为：出车前的检查，途中检查，回场后的保养）。定程保养及大修，由乙方根据里程和车辆的性能状况反馈给甲方，甲方确定有必要定程保养或大修时，乙方应将车辆交给甲方，由甲方负责保养及大修。 <br />
<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_specialRemarks']) ? $_smarty_tpl->getVariable('list')->value['paiche_specialRemarks'] : null)!=''){?>
 十．备注说明： <?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_specialRemarks']) ? $_smarty_tpl->getVariable('list')->value['paiche_specialRemarks'] : null);?>
<br />
 十一．其他： <br />
<?php }else{ ?>
 十．其他： <br />
<?php }?>
  
  1．在合同期内如遇国家重大经济政策变化，或一方遇到不可抗力，经甲乙双方协商，可对合同条款作适当调整。 <br />
  2．客户取车时间与还车时间必须在8点30分至下午17点30分，超过工作时间公司将不进行还车。 <br />
  3．合同的附件是本合同的组成部分，与本合同具有同等法律效力。 <br />
  4．本合同一式二份，甲，乙双方各执一份。<br />
  5．如发生纠纷，由甲乙双方协商解决，协商不成，提交甲方所在的人民法院求得解决。 <br />
  6．本合同经甲，乙双方签字或盖章后生效。</p>
<p>甲方（盖章）：             　　　　　　　　                   乙方（盖章）：<br />
  代理人（签字）：            　　　　　　　　              担保人（签字或盖章）：<br />
  日期： 　                  　　　　　　　　　                  日期：<br />
  签约地点： </p>

</div>

<!--------------第二页------------------------>
<div class="iepage2" id="iepage2">
<br /><br />
<h2>常州市运河汽车租赁有限公司租赁合同附件</h2>
<p><b>合同号：</b><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_contractNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_contractNum'] : null);?>
</p>
<p>一、	甲方的权利，义务<br />
  1.	甲方负责出租给乙方车况良好，设备齐全（见租赁车辆交接单），车辆行驶证，保险证等牌证齐全有效的车辆，并承担相应的责任。<br />
  2.	甲方负责向保险公司对租赁车辆投保国家强制投保险种和第三者责任。<br />
  3.	乙方违约，甲方有权收回租赁车辆。<br />
  4.	对因非甲方原因造成的损失不负连带责任，甲方不承担租赁期间乙方与第三者引发的任何民事经济责任。<br />
  5.	协助乙方处理发生的交通事故和及时按规定办理索赔手续。<br />
  6.	因甲方原因车辆发生故障且二小时内无法修复的，乙方需要替代车辆，甲方可提供相应的替代车辆。<br />
  二、	乙方的权利，义务<br />
  1，	乙方提供给甲方的资料，证件应真实有效，如有变更，应当及时通知甲方，否则由此产生的责任均由乙方承担。<br />
  2，	认真的检查并掌握租赁车辆的各种性能和操作方法，点清随车配置的附件，验收签字后驶离。凡因乙方操作不当，保管不善造成的车辆遗失或造成附件损坏，乙方应向甲方赔偿。<br />
  3，	乙方租用甲方车辆，未经批准不能从事营业性客运运输，不能转租、转包、抵押、投资、买卖、赠与。乙方使用车辆不能超过本合同规定的权利，不能私自拆装甲方的车体（件）。否则，甲方有权利收回车辆并要求乙方赔偿所造成的全部损失。<br />
  4，	乙方利用租赁车辆从事非法活动，转租所导致的后果均有乙方负责，所造成的全部经济损失由乙方承担，甲方不承担由此带来的任何民事解决损失，同时甲方有权解除合同。<br />
  5，	乙方承担车辆行驶范围应如实告知甲方。去外阜必须事先告知甲方并征得同意，否则所造成的一切经济和法律责任均由乙方承担。<br />
  6，	租赁期内，驾乘人员违反交通规则或利用租赁车辆进行违法犯罪活动，造成甲方经济损失的，全部由乙方承担。<br />
  7，	租赁期间，乙方所租用车辆的保养维护和发生各类机械故障、事故后的维修，必须到甲方指定的汽车修理厂进行修理。如果特殊情况需要在外急修的，须事先征得甲方同意后方可修理。修理项目、费用经甲方审核，必须开具国家税务部门监制的汽车修理业统一发票。如果发现擅自去外厂修理而造成车辆修理质量低劣，零部件不符合车辆技术检测部门要求的必须重新修复或调换，乙方承担因此造成的全部经济损失。<br />
  8，	租赁期内发生交通事故后，乙方应当立即向甲方及当地公安交通管理部门报告，保护现场，在甲方的协助下及时办理事故处理及保险公司索赔事宜。如发生肇事逃逸或者由于乙方逾期不能提供有关资料而无法向保险公司索赔等情况，产生的一切后果由乙方负责，甲方不承担任何责任。<br />
  <u class="gray_bg">9，	租赁期内乙方使用甲方车辆发生各类事故而产生的费用由乙方先行支付。事故损失在500元以内的，全部由乙方承担，事故损失费用在500元以上的，乙方必须承担500元。另外，第三责任险超过20万元及20万元以内保险未赔足部分由乙方承担。当车辆损失金额在500元至车辆价值全损时，由呈组人承担保险公司赔付不足部分。其他损失除按保险公司规定的赔偿外，理赔不足部分由乙方承担。<br />
  10，	租赁期内发生事故导致车辆需要维修的，不论有无责任，均需按照下列标准补偿甲方车辆的折旧损失：车辆维修费在1万元以下的，按10%补偿；车辆维修费在1万元以上5万元以下的，按20%补偿；车辆维修费在5万元以上的，按30%补偿。</u><br />
  11，	乙方对甲方保留在车上的特殊标志、特殊设备，不能私自摘除、涂装。否则应负赔偿责任。<br />
  12，	乙方必须按约定的时间，地点归还车辆，还车时必须保持车辆性能良好，车辆整洁，设备齐全，并无任何刮碰现象，如有损坏照价赔偿。
</p></div>
<!--------------第三页------------------------>
<div class="iepage3" id="iepage3">
<br /><br />
  <p>13，	租赁期内乙方造成承租车辆钥匙灭失，损坏等情况必须及时通知甲方，并负责赔偿修配所租车辆的门锁和点火钥匙的费用。不能私配租赁车辆的钥匙，若发生此情况，甲方保留诉讼法律权利。<br />
  14，	承租方对车辆的燃油费、过路、过桥、停车费等费用自理，还车时应保持油箱加满。<br />
  15，	租赁期内，因乙方不慎遗失牌照和各类证件及因违章（包括电子警察）未及时处理，致使甲方造成验审、过户、扣分的所有损失，全部由乙方承担，并向甲方赔偿因车辆无牌照和各类证件而停驶的实际损失。<br />
  16，	乙方在租赁期间操作不当、保管不善造成的车辆维修和车辆损失及由此造成的车辆停驶经济损失由乙方承担。<br />
  <u class="gray_bg">17，	乙方所租车辆的里程表发生故障或损坏等情况及时报修，若隐瞒不报或发生破坏铅封、私调里程表的，按承租期内规定使用的公里数的5倍收取超公里费。</u><br />
  18，	乙方在合同期内要求提前终止合同的，需征得甲方同意后，支付合同及附件未履行部分总金额的80%的违约金。<br />
  19，	乙方的驾驶员发生饮酒、吸毒、药物麻醉、无有效驾驶证等恶劣情况，甲方有权终止合同并且没收押金。<br />
  三，乙方对由于下列原因造成的车辆损失及第三者造成的损失应承担全部赔偿责任。<br />
  1，	承租期内，乙方未尽对承租车辆保管责任造成的损失。<br />
  2，	由于乙方操作不当造成承租车辆轮胎爆裂的损失。<br />
  3，	由于乙方人工直接供油，明火烘烤等原因造成的损失。<br />
  4，	由于乙方的原因，造成车辆扣押，罚没，抵押，出卖，赠与，投资等的损失，包括造成甲方停驶搁车的损失（搁车停驶经济损失，按停车天数的租赁费总金额计算）。<br />
  5，	由于乙方擅自修理造成的损失。<br />
  6，	由于乙方的驾驶员饮酒、吸毒、药物麻醉、无有效驾驶证以及调换约定驾驶员造成的损失。<br />
  7，	由于乙方利用承租车辆参加竞赛，测试造成的损失。<br />
  8，	由于乙方用承租车辆拖带其他车辆造成的损失。<br />
  9，	由于乙方或其驾驶人员的故意行为造成的损失。<br />
  10，	乙方或担保方因伪造证件，隐瞒事实，制造假案等违法行为造成的损失。<br />
  11，	因乙方违约，引起的诉讼费，律师代理费等均由乙方承担。<br />
  四，担保条款<br />
  1，	担保人必须为具有代为履行或代偿能力的企业法人或其他经济组织或个人，担保人必须出具营业执照、身份证、户口簿、房产证等真实有效证件。<br />
  2，	担保人就乙方履行本合同及附件的义务负连带保证责任，保证期限为租赁期到期顺延两年。<br />
  五，其他<br />
  a）	<u class="gray_bg">乙方如需续租该车辆，必须在合同期会同担保人与甲方重新签订合同。若车辆实际租金超过预付租金满3天，乙方未经甲方同意，不向甲方加付租金又不办理退租或续租手续的，甲方有权强行收回租赁车辆，没收押金，并加收3000元强制收车费用。甲方由此造成的全部损失由乙方承担。</u><br />
  b）	本合同附件签字前已仔细阅读并认同各项内容。</p>
<p>&nbsp;</p>
<p> 甲方（盖章）：　　　　　　　　　　　　　　　　　　乙方（盖章）：<br />
  代理人（签字）：　　　　　　　　　　　　　　　　　代理人（签字）：<br />
  日期：　　　　　　　　　　　　　　　　　　　　　　日期：<br />
  <br />
  担保人（签字或盖章）：签约地点：</p>
  <br />
<br />
<br />
<br />
<br />
<br />
<br />

</div>

<!--------------第四页------------------------>
<div class="iepage4" id="iepage4">
<br /><br />
<h2>常州市运河汽车租赁有限公司车辆交接清单</h2>
<p style="line-height:0px;"><b>合同号：</b><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_contractNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_contractNum'] : null);?>
</p>
<table border="1" cellspacing="0" cellpadding="0" width="100%" class="table" style="text-align:center;border:#c4c4c4 solid 1px;line-height:0px;">
  <tr>
    <td colspan="2" width="160px"><p>车辆号码 </p></td>
    <td colspan="6"><p>苏D<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
</p></td>
    <td colspan="2"><p>车    型 </p></td>
    <td colspan="6"><p><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_type']) ? $_smarty_tpl->getVariable('list')->value['car_type'] : null);?>
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
    <td colspan="4"><p></p></td>
  </tr>
  <tr>
    <td colspan="2"><p>起驶公里 </p></td>
    <td colspan="6"><p>　　　　KM</p></td>
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
    <td width="337" colspan="8" align="left"><p>前        <div align="center"><img width="176" height="111" src="../../../css/clip_image002.jpg" /></div></p></td>
    <td width="335" colspan="7" align="left"><p>后        <div align="center"><img width="155" height="109" src="../../../css/clip_image004.jpg" /></div></p></td>
  </tr>
  <tr>
    <td width="337" colspan="8" align="left"><p>左        <div align="center"><img width="252" height="92" src="../../../css/clip_image006.jpg" /></div></p></td>
    <td width="335" colspan="7" align="left"><p>右        <div align="center"><img width="252" height="92" src="../../../css/clip_image006_0000.jpg" /></div></p></td>
  </tr>
  <tr>
    <td width="337" colspan="8"><p>车顶 </p></td>
    <td width="335" colspan="7"><p>底盘 </p></td>
  </tr>
  <tr>
    <td width="48" rowspan="2"><p style="line-height:16px;">租车<br/>签字 </p></td>
    <td width="60" colspan="2"><p>承租方 </p></td>
    <td width="229" colspan="5"><p>&nbsp;</p></td>
    <td width="48" rowspan="2"><p style="line-height:16px;">还车<br/>签字 </p></td>
    <td width="59" colspan="2"><p>承租方 </p></td>
    <td width="276" colspan="4"><p>&nbsp;</p></td>
  </tr>
  <tr>
    <td width="60" colspan="2"><p>出租方</p></td>
    <td width="229" colspan="5"><p>&nbsp;</p></td>
    <td width="59" colspan="2"><p>出租方</p></td>
    <td width="276" colspan="4"><p>&nbsp;</p></td>
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
<!--endprint1-->

</body>
</html>