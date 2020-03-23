<?php /* Smarty version Smarty-3.0.4, created on 2019-10-02 10:23:36
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/update/update.html" */ ?>
<?php /*%%SmartyHeaderCode:5671332575d940a288f17f4-47218076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e9fe2425544033ba540d109504c572560d8f545' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/update/update.html',
      1 => 1569749241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5671332575d940a288f17f4-47218076',
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
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/date_select.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
.tdd{border-bottom:solid 1px #e1e1e1;}
.tbb{border:solid 1px #e1e1e1;}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit">详细信息-<?php echo $_smarty_tpl->getVariable('PAGETITLE')->value;?>
<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_aaa']) ? $_smarty_tpl->getVariable('list')->value['paiche_aaa'] : null)=='补单'){?>(<a href="supplement.php?task=modify&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
"><font color="red"><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_aaa']) ? $_smarty_tpl->getVariable('list')->value['paiche_aaa'] : null);?>
</font></a>)<?php }?>
  	&nbsp;&nbsp;&nbsp;&nbsp;<span><a href="delete.php?table=paiche&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">删除订单</a></span>
  	<span class="pc_inner"><?php echo (isset($_smarty_tpl->getVariable('list')->value['shop_name']) ? $_smarty_tpl->getVariable('list')->value['shop_name'] : null);?>
</span>
  </div>
  <div class="form2">
  	<table width="90%" border="0" cellspacing="0" cellpadding="5" class="tbb">
  		
  		<tr>
  		<th style="background: url(../../../css/Arrtitle.png) repeat-x;color:#fff;" colspan="2" >基本信息</th>
  		</tr>
  		<tr>
  		<td colspan="2">
	  		<table width="100%" border="0" cellspacing="10" cellpadding="1">
	  		<tr>
	  		<td class="tdd" width="200">合同号：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_contractNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_contractNum'] : null);?>
</td>
	  		<td class="tdd" width="200">用车开始时间：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate_All'] : null);?>


	  			<a href="update_a.php?table=paiche&name=paiche_startDate&type=time&heading=用车开始时间&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate_All'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">修改
	  			</a>
	  		</td>

	  		<td class="tdd" width="200">预计结束时间：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_endDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_endDate_All'] : null);?>

		  		<a href="update_a.php?table=paiche&name=paiche_endDate&type=time&heading=预计结束时间&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_endDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_endDate_All'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
		  		修改
		  		</a>
	  		</td>
	  		<td class="tdd" width="200">调度人：<?php echo (isset($_smarty_tpl->getVariable('list')->value['jiedaiyuan']) ? $_smarty_tpl->getVariable('list')->value['jiedaiyuan'] : null);?>

	  			<a href="update_a.php?table=paiche&name=paicheServerMan&type=emp&heading=调度人&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['jiedaiyuan']) ? $_smarty_tpl->getVariable('list')->value['jiedaiyuan'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
	  			修改
	  			</a>
	  		</td>
	  		<td class="tdd" width="200">实际车辆还车时间：<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_endDate']) ? $_smarty_tpl->getVariable('list')->value['settle_endDate'] : null);?>

	  			<a href="update_a.php?table=settle&name=settle_endDate&type=time&heading=实际车辆还车时间&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_endDate']) ? $_smarty_tpl->getVariable('list')->value['settle_endDate'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
	  			修改
	  			</a>
	  		</td>
	  		</tr>


	  		<tr>
	  		<td class="tdd">客户要求车型：
	  			<a href="update_a.php?table=paiche&name=paiche_requestCar&type=text&heading=客户要求车型&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_requestCar']) ? $_smarty_tpl->getVariable('list')->value['paiche_requestCar'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
	  			<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_requestCar']) ? $_smarty_tpl->getVariable('list')->value['paiche_requestCar'] : null);?>

	  			</a>
	  		</td>

	  		<td class="tdd">租赁时限类型：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitTime'] : null);?>

	  			<a href="update_a.php?table=paiche&name=paiche_unlimitTime&type=text&heading=租赁时限类型&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitTime'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
	  			修改
	  			</a>
	  			<?php if ($_smarty_tpl->getVariable('paiche_unlimitTime')->value=='Y'){?>不限时<?php }else{ ?>限时<?php }?>
	  		</td>
	  		<td>
	  			
	  			限时<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_overTime'] : null);?>
元/小时
	  			<a href="update_a.php?table=paiche&name=paiche_overTime&type=text&heading=限时&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_overTime'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
	  			修改
	  			</a>
	  			
	  		</td>
	  		<td>
	  			超时：<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overTime']) ? $_smarty_tpl->getVariable('list')->value['settle_overTime'] : null);?>

	  			<a href="update_a.php?table=settle&name=settle_overTime&type=text&heading=超时&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overTime']) ? $_smarty_tpl->getVariable('list')->value['settle_overTime'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
	  			修改
	  			</a>
	  		</td>


	  		<td class="tdd">租赁公里数：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null);?>

	  			<a href="update_a.php?table=paiche&name=paiche_unlimitKm&type=text&heading=租赁公里数&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
	  				修改
	  			</a>
	  			<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)=="Y"){?>不限公里<?php }else{ ?>限制<?php }?>
	  		</td>

	  		</tr>
	  		<tr>
	  		<td>
	  			<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_limitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_limitKm'] : null);?>
公里
	  			<a href="update_a.php?table=paiche&name=paiche_limitKm&type=text&heading=公里&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_limitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_limitKm'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
	  				修改
	  			</a>
	  		</td>

	  		<td>

	  			超公里单价：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_overKm'] : null);?>
元/公里
	  			<a href="update_a.php?table=paiche&name=paiche_overKm&type=text&heading=超公里单价&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_overKm'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
	  				修改
	  			</a>
	  		</td>
	  		<td>
	  			实际行驶公里：<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_totalcalKm']) ? $_smarty_tpl->getVariable('list')->value['settle_totalcalKm'] : null);?>

	  			<a href="update_a.php?table=settle&name=settle_totalcalKm&type=text&heading=实际行驶公里&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_totalcalKm']) ? $_smarty_tpl->getVariable('list')->value['settle_totalcalKm'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
	  				修改
	  			</a>
	  		</td>
	  		<td>
	  			前期累计： <?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_qianMonth']) ? $_smarty_tpl->getVariable('list')->value['settle_qianMonth'] : null);?>

	  			<a href="update_a.php?table=settle&name=settle_qianMonth&type=text&heading=前期累计&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_qianMonth']) ? $_smarty_tpl->getVariable('list')->value['settle_qianMonth'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
	  				修改
	  			</a>
	  		</td>

	  		<td class="tdd">
	  			业务员：<?php echo (isset($_smarty_tpl->getVariable('list')->value['yewuyuan']) ? $_smarty_tpl->getVariable('list')->value['yewuyuan'] : null);?>

	  			<a href="update_a.php?table=paiche&name=paicheCounterMan&type=emp&heading=业务员&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['yewuyuan']) ? $_smarty_tpl->getVariable('list')->value['yewuyuan'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
	  				修改
	  			</a>

	  		</td>
	  		</tr>
	  		<tr>
	  		<td class="tdd">
	  			约定定金：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_front']) ? $_smarty_tpl->getVariable('list')->value['paiche_front'] : null);?>

	  			<a href="update_a.php?table=paiche&name=paiche_front&type=text&heading=约定定金&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_front']) ? $_smarty_tpl->getVariable('list')->value['paiche_front'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
	  				修改
	  			</a>
	  		</td>

	  		<td>

	  		路程：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_route']) ? $_smarty_tpl->getVariable('list')->value['paiche_route'] : null);?>
程
		  		<a href="update_a.php?table=paiche&name=paiche_route&type=text&heading=路程&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_route']) ? $_smarty_tpl->getVariable('list')->value['paiche_route'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
		  				修改
		  		</a>
	  		</td>
	  		
	  		
	  		<td class="tdd" colspan="2">开车线路：<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('routelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
	  			<font style="TEXT-DECORATION: line-through;">
	  			<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changeroute_lineA']) ? $_smarty_tpl->tpl_vars['row']->value['changeroute_lineA'] : null);?>

	  			<a href="update_a.php?table=changeroute&name=changeroute_lineA&type=text&heading=线路A&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changeroute_lineA']) ? $_smarty_tpl->tpl_vars['row']->value['changeroute_lineA'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changeroute_id']) ? $_smarty_tpl->tpl_vars['row']->value['changeroute_id'] : null);?>
">
		  				修改
		  		</a>
	  			</font>
	  			&nbsp;&nbsp;——>&nbsp;&nbsp;
	  			<?php }} ?>
	  			<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_line']) ? $_smarty_tpl->getVariable('list')->value['paiche_line'] : null);?>

	  			<a href="update_a.php?table=paiche&name=paiche_line&type=text&heading=目的地&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_line']) ? $_smarty_tpl->getVariable('list')->value['paiche_line'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
		  				修改
		  		</a>
	  		</td>



	  		<td class="tdd" colspan="3">
	  			特殊说明：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_specialRemarks']) ? $_smarty_tpl->getVariable('list')->value['paiche_specialRemarks'] : null);?>

	  			<a href="update_a.php?table=paiche&name=paiche_specialRemarks&type=text&heading=特殊说明&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_specialRemarks']) ? $_smarty_tpl->getVariable('list')->value['paiche_specialRemarks'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
		  				修改
		  		</a>
	  		</td>
	  		</tr>
	  		</table>
	  	</td>
	  	</tr>





	  	<tr>
  		<th style="background: url(../../../css/Arrtitle.png) repeat-x;color:#fff;" colspan="2">承租人信息</th>
  		</tr>
  		<tr>
  		<td colspan="2">
  		
  			<table width="100%" border="0" cellspacing="10" cellpadding="1">
	  		<tr>
	  		<td class="tdd" width="100"><?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_personal']) ? $_smarty_tpl->getVariable('list')->value['paiche_personal'] : null)==1){?>前台散客<?php }else{ ?>长期合作企业客户<?php }?></td>
	  		<td width="100" align="center" rowspan="3"><img id="img_linker_picture" name="img_linker_picture" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_linkerPicture']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerPicture'] : null)){?>src="../../../thumb/upload/idpicture/<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerPicture']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerPicture'] : null);?>
"<?php }else{ ?>src=""<?php }?>></td>
	  		<td width="100" class="tdd">
	  			联系人：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linker_hid']) ? $_smarty_tpl->getVariable('list')->value['paiche_linker_hid'] : null);?>

	  			<a href="update_a.php?table=paiche&name=paiche_linker&type=text&heading=联系人&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linker_hid']) ? $_smarty_tpl->getVariable('list')->value['paiche_linker_hid'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
		  				修改
		  		</a>
	  		</td>

	  		<td width="160" class="tdd">
	  			联系人手机：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerPhone_hid']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerPhone_hid'] : null);?>

	  			<a href="update_a.php?table=paiche&name=paiche_linkerPhone&type=text&heading=联系人手机&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerPhone_hid']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerPhone_hid'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
		  				修改
		  		</a>
	  		</td>
	  		<td width="100" align="center" rowspan="3"><img id="img_promier_picture" name="img_promier_picture" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_promierPicture']) ? $_smarty_tpl->getVariable('list')->value['paiche_promierPicture'] : null)){?>src="../../../thumb/upload/idpicture/<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promierPicture']) ? $_smarty_tpl->getVariable('list')->value['paiche_promierPicture'] : null);?>
"<?php }else{ ?>src=""<?php }?>></td>
	  		<td width="100" class="tdd">
	  			担保人：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promier']) ? $_smarty_tpl->getVariable('list')->value['paiche_promier'] : null);?>

	  			<a href="update_a.php?table=paiche&name=paiche_promier&type=text&heading=担保人&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promier']) ? $_smarty_tpl->getVariable('list')->value['paiche_promier'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
		  				修改
		  		</a>
	  		</td>
	  		<td width="160" class="tdd">
	  			担保人手机：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promierPhone']) ? $_smarty_tpl->getVariable('list')->value['paiche_promierPhone'] : null);?>

	  			<a href="update_a.php?table=paiche&name=paiche_promierPhone&type=text&heading=担保人手机&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promierPhone']) ? $_smarty_tpl->getVariable('list')->value['paiche_promierPhone'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
		  				修改
		  		</a>
	  		</td>
	  		</tr>
	  		<tr>
	  		<td >优惠券：<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_coupons']) ? $_smarty_tpl->getVariable('list')->value['paiche_coupons'] : null)!=''){?><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_coupons']) ? $_smarty_tpl->getVariable('list')->value['paiche_coupons'] : null);?>
<?php }else{ ?>未使用<?php }?>
	  				<a href="update_a.php?table=paiche&name=paiche_coupons&type=text&heading=联系人身份证&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_coupons']) ? $_smarty_tpl->getVariable('list')->value['paiche_coupons'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
		  				修改
		  			</a>
	  		</td>
	  		<td width="260" class="tdd" colspan="2">
	  			联系人身份证：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerNum_hid']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerNum_hid'] : null);?>

	  			<a href="update_a.php?table=paiche&name=paiche_linkerNum&type=text&heading=联系人身份证&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerNum_hid']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerNum_hid'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
		  				修改
		  		</a>
	  		</td>
	  		<td width="260" class="tdd" colspan="2">
	  			担保人身份证：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promierNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_promierNum'] : null);?>

	  			<a href="update_a.php?table=paiche&name=paiche_promierNum&type=text&heading=担保人身份证&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promierNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_promierNum'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
		  				修改
		  		</a>
	  		</td>
	  		</tr>
	  		<tr>
	  		<td >
	  			<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_status']) ? $_smarty_tpl->getVariable('list')->value['paiche_status'] : null)==-1&&(isset($_smarty_tpl->getVariable('list')->value['settle_vioreason']) ? $_smarty_tpl->getVariable('list')->value['settle_vioreason'] : null)!=''){?>违约原因：<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_vioreason']) ? $_smarty_tpl->getVariable('list')->value['settle_vioreason'] : null);?>
<?php }?>
	  			违约原因：<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_vioreason']) ? $_smarty_tpl->getVariable('list')->value['settle_vioreason'] : null);?>

	  			<a href="update_a.php?table=settle&name=settle_vioreason&type=text&heading=违约原因&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_vioreason']) ? $_smarty_tpl->getVariable('list')->value['settle_vioreason'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
		  				修改
		  		</a>
	  		</td>
	  		<td width="260" class="tdd" colspan="2">
	  			联系人地址：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerAdd']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerAdd'] : null);?>

	  			<a href="update_a.php?table=paiche&name=paiche_linkerAdd&type=text&heading=联系人地址&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerAdd']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerAdd'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
		  				修改
		  		</a>
	  		</td>
	  		<td width="260" class="tdd" colspan="2">
	  			担保人地址：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promierAdd']) ? $_smarty_tpl->getVariable('list')->value['paiche_promierAdd'] : null);?>

	  			<a href="update_a.php?table=paiche&name=paiche_promierAdd&type=text&heading=担保人地址&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promierAdd']) ? $_smarty_tpl->getVariable('list')->value['paiche_promierAdd'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
		  				修改
		  		</a>
	  		</td>
	  		
	  		</tr>
	  		<tr>
	  			<td >

	  		调车  &nbsp;&nbsp;&nbsp;&nbsp;车队:<?php echo (isset($_smarty_tpl->getVariable('list')->value['bro_name']) ? $_smarty_tpl->getVariable('list')->value['bro_name'] : null);?>

	  		<a href="update_a.php?table=paiche&name=paiche_brother&type=brothers&heading=车队&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['bro_name']) ? $_smarty_tpl->getVariable('list')->value['bro_name'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
		  				修改
		  	</a>

	  		</td>
	  		</tr>
	  		
	  		</table>
  		

	  		
	  	
  		</td>
  		</tr>
  		




  		<tr>
  		<th style="background: url(../../../css/Arrtitle.png) repeat-x;color:#fff;" width="50%">租赁金额</th>
  		<th style="background: url(../../../css/Arrtitle.png) repeat-x;color:#fff;" width="50%">车辆信息</th>
  		</tr>


  		<tr>
  		<td>
	  		<table width="100%" border="1" cellspacing="0" cellpadding="3" class="tbb">
	  		<?php if ($_smarty_tpl->getVariable('itemlist')->value){?>
			<tr>
			<td width="25%">约定条款</td>
	  		<td width="15%">约定结果</td>
	  		<td width="15%">收费项目</td>
	  		<td width="15%">约定金额</td>
	  		<td width="15%">已收金额</td>
	  		</tr>

	  		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('itemlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
	  		<tr>
		          <td>
		          	<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_name']) ? $_smarty_tpl->tpl_vars['row']->value['item_name'] : null);?>

		          	<a href="update_a.php?table=paiche_items&name=item_id&type=items&heading=约定条款&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_name']) ? $_smarty_tpl->tpl_vars['row']->value['item_name'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
		  				修改
		  			</a>
		          </td>
		          <td>
		          	<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row']->value['conv_result'] : null);?>

		          	<a href="update_a.php?table=paiche_items&name=conv_result&type=text&heading=约定结果&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row']->value['conv_result'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
		  				修改
		  			</a>
		          </td>
		          <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_costname']) ? $_smarty_tpl->tpl_vars['row']->value['item_costname'] : null);?>
</td>

				  <td>
				  	<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null);?>

				  		<a href="update_a.php?table=paiche_items&name=conv_money&type=text&heading=约定条款&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
		  				修改
		  				</a>
				  </td>
				  <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>

				  		<a href="update_a.php?table=paiche_items&name=have_in_money&type=text&heading=约定条款&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
		  					修改
		  				</a>
				  </td>
			</tr>
			<?php }} ?>


			
			<?php }?>



			

			<!--收费项目-->
	  		<tr>
	  		<td width="20%">收费项目</td>
	  		<td width="15%" >约定金额</td>
	  		<td width="15%" ><?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_personal']) ? $_smarty_tpl->getVariable('list')->value['paiche_personal'] : null)==1){?>已收金额<?php }else{ ?>已结算<?php }?></td>
	  		<td >备注</td>
	  		</tr>


	  		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('chargelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
	  		<tr>
	  		<td>
	  			<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null);?>

	  			<a href="update_a.php?table=paiche_charges&name=charge_id&type=charges&heading=收费项目&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
		  					修改
		  		</a>
	  		</td>
	  		<td>
	  			<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null);?>

	  			<a href="update_a.php?table=paiche_charges&name=conv_money&type=text&heading=约定金额&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
		  					修改
		  		</a>
	  		</td>
	  		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>

	  			<a href="update_a.php?table=paiche_charges&name=have_in_money&type=text&heading=已收金额&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
		  					修改
		  		</a>
	  		</td>

	  		<td>已冻结：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_freeze_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_freeze_money'] : null);?>

	  				<a href="update_a.php?table=paiche_charges&name=have_freeze_money&type=text&heading=已收已冻结&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_freeze_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_freeze_money'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
		  					修改
		  			</a>
	  			&nbsp;&nbsp;&nbsp;
	  			已退：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null);?>

	  				<a href="update_a.php?table=paiche_charges&name=have_back_money&type=text&heading=已收已冻结&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
		  					修改
		  			</a>
	  			&nbsp;&nbsp;&nbsp;
	  			<?php if (((isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null)=='续租金'||(isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null)=='租金')&&(isset($_smarty_tpl->tpl_vars['row']->value['continuerent_start']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_start'] : null)!=''){?>
	  			<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_start']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_start'] : null);?>

	  			<a href="update_a.php?table=paiche_charges&name=continuerent_start&type=time&heading=开始时间&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_start']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_start'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
		  					修改
		  			</a>

	  			~<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_end']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_end'] : null);?>

	  			<a href="update_a.php?table=paiche_charges&name=continuerent_end&type=time&heading=结束时间&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_end']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_end'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
		  					修改
		  			</a>
	  			<?php }?>

	  		</td>
	  		</tr>
	  		<?php }} ?>




	  		<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_brother']) ? $_smarty_tpl->getVariable('list')->value['paiche_brother'] : null)>0){?>
		    <tr>
			    <td>我公司报价：</td>
			    <td>
			    	<?php echo -1*(isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rent']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rent'] : null);?>

			    	<a href="update_a.php?table=shunt&name=shunt_rent&type=text&heading=调车公司报价&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rent']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rent'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_id'] : null);?>
">
		  					修改
		  			</a>
			    </td>
			    <td>
			<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_money']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_money'] : null)!=0){?>

			    已结:<?php echo -1*(isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_money']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_money'] : null);?>
<?php }?>
			    <a href="update_a.php?table=shunt&name=shunt_money&type=text&heading=调车公司报价&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_money']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_money'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_id'] : null);?>
">
		  					修改
		  		</a>
			</td>
			    <td>调车公司用我们的车,我公司收现：<?php echo -1*(isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rented']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rented'] : null);?>
元
			    	<a href="update_a.php?table=shunt&name=shunt_rented&type=text&heading=我们用调车公司的车，调车公司收现&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rented']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rented'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_id'] : null);?>
">
		  					修改
		  			</a>
			    </td>
			</tr>
		    <?php }?>

			<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_shunt']) ? $_smarty_tpl->getVariable('list')->value['paiche_shunt'] : null)==1){?>
		    <tr>
			    <td>调车公司报价：</td>
			    <td>
			    	<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rent']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rent'] : null);?>

			    	<a href="update_a.php?table=shunt&name=shunt_rent&type=text&heading=调车公司报价&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rent']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rent'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_id'] : null);?>
">
		  					修改
		  			</a>

			    </td>
			    <td></td>
			    <td>我们用调车公司的车，调车公司收现：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rented']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rented'] : null);?>

			    	<a href="update_a.php?table=shunt&name=shunt_rented&type=text&heading=我们用调车公司的车，调车公司收现&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rented']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rented'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_id'] : null);?>
">
		  					修改
		  			</a>
			    </td>
			</tr>
		    <?php }?>
	  		<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)!="Y"&&(isset($_smarty_tpl->getVariable('list')->value['settle_overKmMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overKmMoney'] : null)!=0){?>
	  		<tr>
	  		<td>超公里费</td>
	  		<td>
	  			<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overKmMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overKmMoney'] : null);?>

	  			<a href="update_a.php?table=settle&name=settle_overKmMoney&type=text&heading=超公里费&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overKmMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overKmMoney'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
		  					修改
		  		</a>
	  		</td>
	  		<td>
	  			<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overKmMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_overKmMoney_have'] : null);?>

	  			<a href="update_a.php?table=settle&name=settle_overKmMoney_have&type=text&heading=超公里费&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overKmMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_overKmMoney_have'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
		  					修改
		  		</a>
	  		</td>
	  		<td></td>
	  		</tr>
	  		<?php }?>
    		<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitTime'] : null)!="Y"&&(isset($_smarty_tpl->getVariable('list')->value['settle_overTimeMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overTimeMoney'] : null)!=0){?>
    		<tr>
	  		<td>超时费</td>
	  		<td>
	  			<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overTimeMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overTimeMoney'] : null);?>

	  			<a href="update_a.php?table=settle&name=settle_overTimeMoney&type=text&heading=超时费&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overTimeMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overTimeMoney'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
		  					修改
		  		</a>

	  		</td>
	  		<td>
	  			<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overTimeMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_overTimeMoney_have'] : null);?>

	  			<a href="update_a.php?table=settle&name=settle_overTimeMoney_have&type=text&heading=超时费&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overTimeMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_overTimeMoney_have'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
		  					修改
		  		</a>

	  		</td>
	  		<td></td>
	  		</tr>
    		<?php }?>
    		<?php if ((isset($_smarty_tpl->getVariable('list')->value['settle_waitTimeMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_waitTimeMoney'] : null)!=0){?>
    		<tr>
	  		<td>等待费用</td>
	  		<td>
	  			<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_waitTimeMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_waitTimeMoney'] : null);?>

	  			<a href="update_a.php?table=settle&name=settle_waitTimeMoney&type=text&heading=等待费用&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_waitTimeMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_waitTimeMoney'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
		  					修改
		  		</a>
	  		</td>
	  		<td>
	  			<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_waitTimeMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_waitTimeMoney_have'] : null);?>

	  			<a href="update_a.php?table=settle&name=settle_waitTimeMoney_have&type=text&heading=等待费用&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_waitTimeMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_waitTimeMoney_have'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
		  					修改
		  		</a>
	  		</td>
	  		<td></td>
	  		</tr>
    		<?php }?>
    		<?php if ((isset($_smarty_tpl->getVariable('list')->value['settle_favor']) ? $_smarty_tpl->getVariable('list')->value['settle_favor'] : null)!=0){?>
		    <tr>
			    <td>优惠金额</td>
			    <td>
			    	<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_favor']) ? $_smarty_tpl->getVariable('list')->value['settle_favor'] : null);?>

			    	<a href="update_a.php?table=settle&name=settle_favor&type=text&heading=优惠金额&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_favor']) ? $_smarty_tpl->getVariable('list')->value['settle_favor'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
		  					修改
		  			</a>
			    </td>
			    <td></td>
			    <td>
			    	<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_favorreason']) ? $_smarty_tpl->getVariable('list')->value['settle_favorreason'] : null);?>

			    	<a href="update_a.php?table=settle&name=settle_favorreason&type=text&heading=优惠金额备注&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_favorreason']) ? $_smarty_tpl->getVariable('list')->value['settle_favorreason'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
		  					修改
		  			</a>
			    </td>
		    </tr>
		    <?php }?>
		    <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_status']) ? $_smarty_tpl->getVariable('list')->value['paiche_status'] : null)==-1){?>
			<tr>
			    <td>违约金</td>
			    <td>
			    	<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_vio']) ? $_smarty_tpl->getVariable('list')->value['settle_vio'] : null);?>

			    	<a href="update_a.php?table=settle&name=settle_vio&type=text&heading=违约金&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_vio']) ? $_smarty_tpl->getVariable('list')->value['settle_vio'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
		  					修改
		  			</a>
			    </td>
			    <td>
			    	<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_vio']) ? $_smarty_tpl->getVariable('list')->value['settle_vio'] : null);?>


			    </td>
		    </tr>
			<?php }?>
			<?php if ((isset($_smarty_tpl->getVariable('list')->value['settle_losses']) ? $_smarty_tpl->getVariable('list')->value['settle_losses'] : null)==2){?>
			<tr>
			    <td>订单收入</td>
			    <td colspan="3">
			    	<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_income']) ? $_smarty_tpl->getVariable('list')->value['paiche_income'] : null);?>


			    </td>
		    </tr>
			<?php }?>
	  		</table>
  		</td>





  		<td style="vertical-align:text-top;">
	  		<table width="100%" border="0" cellspacing="10" cellpadding="1">
	  		<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_shunt']) ? $_smarty_tpl->getVariable('list')->value['paiche_shunt'] : null)==1){?>
	  		<tr>
	  		<td class="tdd">调车公司：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['bro_name']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['bro_name'] : null);?>
</td>
	  		<td width="130" class="tdd">司机：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_driver']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_driver'] : null);?>
</td>
	  		<td width="200" class="tdd">司机手机：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_driverPhone']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_driverPhone'] : null);?>
</td>
	  		</tr>
	  		<?php }else{ ?>
	  		<tr>
	  		<td class="tdd"><?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_status']) ? $_smarty_tpl->getVariable('list')->value['paiche_status'] : null)==0){?>预约车辆：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paicheCar2s']) ? $_smarty_tpl->getVariable('list')->value['paicheCar2s'] : null);?>
<?php }else{ ?>调度车辆：苏D<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
---<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_model']) ? $_smarty_tpl->getVariable('list')->value['car_model'] : null);?>
---<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_color']) ? $_smarty_tpl->getVariable('list')->value['car_color'] : null);?>
<?php }?></td>
	  		<td width="130" class="tdd"><?php if (($_smarty_tpl->getVariable('busitype')->value=='2'||$_smarty_tpl->getVariable('busitype')->value=='4'||$_smarty_tpl->getVariable('busitype')->value=='5')&&(isset($_smarty_tpl->getVariable('list')->value['paiche_shunt']) ? $_smarty_tpl->getVariable('list')->value['paiche_shunt'] : null)!=1){?>司机：<?php echo (isset($_smarty_tpl->getVariable('list')->value['siji']) ? $_smarty_tpl->getVariable('list')->value['siji'] : null);?>
<?php }?></td>
	  		</tr>
	  		<?php }?>
	  		</table>
  		</td>
  		</tr>
  		<?php if ($_smarty_tpl->getVariable('accountlist')->value||$_smarty_tpl->getVariable('continuelist')->value){?>
  		<tr>
  		<th style="background: url(../../../css/Arrtitle.png) repeat-x;color:#fff;" >收款/支出记录</th>
  		<th style="background: url(../../../css/Arrtitle.png) repeat-x;color:#fff;" >续租记录</th>
  		</tr>
  		<tr>
  		<td>


  			<?php if ($_smarty_tpl->getVariable('accountlist')->value){?>
	  		<table width="100%" border="1" cellspacing="0" cellpadding="2" class="tbb">
			  	<tr>
			    <th style="width:30px;">序号	</th>
				<th width="22%">时间</th>
				<th width="8%">收入</th>
				<th width="8%">支出</th>
				<th width="10%">方式</th>
				<th width="24%">账户</th>
				<th>摘要</th>
			  </tr>
			  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('accountlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
			  <tr>
			    	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>
				  	<td>
				  		<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['add_time']) ? $_smarty_tpl->tpl_vars['row']->value['add_time'] : null);?>

				  			<a href="update_a.php?table=account_log&name=add_time&type=time&heading=时间&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['add_time']) ? $_smarty_tpl->tpl_vars['row']->value['add_time'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
		  					修改
		  					</a>
				  	</td>
				  	<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['bill_type']) ? $_smarty_tpl->tpl_vars['row']->value['bill_type'] : null)==6){?>
					  	<?php if ((isset($_smarty_tpl->getVariable('list')->value['shunt_money']) ? $_smarty_tpl->getVariable('list')->value['shunt_money'] : null)>0){?>
					  	<td>&nbsp;</td>
						<td><?php echo (isset($_smarty_tpl->getVariable('list')->value['shunt_money']) ? $_smarty_tpl->getVariable('list')->value['shunt_money'] : null);?>

							<a href="update_a.php?table=account_log&name=shunt_money&type=text&heading=支出&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shunt_money']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_money'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
		  					修改
		  					</a>
						</td>
						<?php }else{ ?>
						<td>
							<?php echo -1*(isset($_smarty_tpl->getVariable('list')->value['shunt_money']) ? $_smarty_tpl->getVariable('list')->value['shunt_money'] : null);?>

							<a href="update_a.php?table=account_log&name=shunt_money&type=text&heading=收入&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shunt_money']) ? $_smarty_tpl->tpl_vars['row']->value['shunt_money'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
		  					修改
		  					</a>
						</td>
						<td>&nbsp;</td>
						<?php }?>
				  	<?php }else{ ?>
					  	<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null)>0){?>
					  	<td>
					  		<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>

					  		<a href="update_a.php?table=account_log&name=money&type=text&heading=支出&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
					  			修改
		  					</a>

					  	</td>
						<td>&nbsp;</td>
						<?php }else{ ?>
						<td>&nbsp;</td>
						<td>
							<?php echo -1*(isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>

							<a href="update_a.php?table=account_log&name=money&type=text&heading=收入&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
					  			修改
		  					</a>

						</td>
						<?php }?>
					<?php }?>
					<td>
						<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['payment_name']) ? $_smarty_tpl->tpl_vars['row']->value['payment_name'] : null);?>

						<a href="update_a.php?table=account_log&name=payments_id&type=payments&heading=方式&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['payment_name']) ? $_smarty_tpl->tpl_vars['row']->value['payment_name'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
					  			修改
		  				</a>
						
					</td>
					<td>
						<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_name']) ? $_smarty_tpl->tpl_vars['row']->value['bank_name'] : null);?>

						<a href="update_a.php?table=account_log&name=bank_id&type=banks&heading=账户&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_name']) ? $_smarty_tpl->tpl_vars['row']->value['bank_name'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
					  			修改
		  				</a>
					</td>
				  	<td>
				  		<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>

				  		<a href="update_a.php?table=account_log&name=name&type=text&heading=账户&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
					  			修改
		  				</a>
				  	&nbsp;&nbsp;
				  	<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['remark']) ? $_smarty_tpl->tpl_vars['row']->value['remark'] : null);?>

				  	<a href="update_a.php?table=account_log&name=remark&type=text&heading=账户&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['remark']) ? $_smarty_tpl->tpl_vars['row']->value['remark'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
					  			修改
		  				</a>

				  </td>
			 </tr>
			 <?php }} ?>
			</table>
			<?php }?>
  		</td>
  		<td style="vertical-align:text-top;">


  		<!--续租记录-->
  		<?php if ($_smarty_tpl->getVariable('continuelist')->value){?>
  		<table width="100%" border="1" cellspacing="0" cellpadding="2" class="tbb">
			<tr>
				<th style="width:26px;">序号	</th>
				<th width="19%">操作时间</th>
				<th width="11%">续租天数</th>
				<th width="11%">续租公里</th>
				<th>备注</th>
				<th width="8%">操作人</th>
			</tr>



			<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('continuelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
			<tr>
				<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>
				<td>
					<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_times']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_times'] : null);?>

					<a href="update_a.php?table=continuerent&name=continuerent_times&type=time&heading=操作时间&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_times']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_times'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_id']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_id'] : null);?>
">
					  	修改
		  			</a>

				</td>
				<td>
					<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_days']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_days'] : null);?>
天
					<a href="update_a.php?table=continuerent&name=continuerent_days&type=text&heading=续租天数&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_days']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_days'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_id']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_id'] : null);?>
">
					  	修改
		  			</a>
				</td>
				<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_kilo']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_kilo'] : null);?>
公里
					<a href="update_a.php?table=continuerent&name=continuerent_kilo&type=text&heading=续租公里&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_kilo']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_kilo'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_id']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_id'] : null);?>
">
					  	修改
		  			</a>

				</td>
				<td>开始:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_start']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_start'] : null);?>

					<a href="update_a.php?table=continuerent&name=continuerent_start&type=time&heading=开始时间&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_start']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_start'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_id']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_id'] : null);?>
">
					  	修改
		  			</a>
				截止:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_end']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_end'] : null);?>

					<a href="update_a.php?table=continuerent&name=continuerent_end&type=time&heading=结束时间&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_end']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_end'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_id']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_id'] : null);?>
">
					  	修改
		  			</a>
					<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_rentRemarks']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_rentRemarks'] : null);?>

					<a href="update_a.php?table=continuerent&name=continuerent_rentRemarks&type=text&heading=备注&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_rentRemarks']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_rentRemarks'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_id']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_id'] : null);?>
">
					  	修改
		  			</a>
				</td>
				<td>
					<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerentDispatchMan']) ? $_smarty_tpl->tpl_vars['row']->value['continuerentDispatchMan'] : null);?>

					<a href="update_a.php?table=continuerent&name=continuerentDispatchMan&type=text&heading=操作人&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerentDispatchMan']) ? $_smarty_tpl->tpl_vars['row']->value['continuerentDispatchMan'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_id']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_id'] : null);?>
">
					  	修改
		  			</a>
				</td>
			</tr>
			<?php }} ?>



		</table>
  		<?php }?>
  		</td>
  		</tr>
  		<?php }?>





  		<!--报销-->
  		<?php if ($_smarty_tpl->getVariable('baoxiao_list')->value){?>
  		<tr>
  		<th style="background: url(../../../css/Arrtitle.png) repeat-x;color:#fff;" colspan="2">报销记录</th>
  		</tr>
  		<tr>
  		<td colspan="2">
  			<table width="100%" border="1" cellspacing="0" cellpadding="2" class="tbb">
		  	<tr>
			  	<th style="width:30px;">序号	</th>
			  	<th>报销人</th>
			  	<th>报销日期</th>
			  	<th>过桥过路费</th>
				<th>停车费</th>
				<th>油费</th>
				<th>住宿费</th>
				<th>餐费</th>
				<th>报销备注</th>
				<th>审核结果</th>
		  	</tr>

		  	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('baoxiao_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
		    <tr >
		    	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>
		    	<td>
		    		<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>

		    		<a href="update_a.php?table=baoxiao&name=baoxiao_emp&type=emp&heading=报销人&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
">
					  	修改
		  			</a>
		    	</td>
		    	<td>
		    		<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_date']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_date'] : null);?>

		    		<a href="update_a.php?table=baoxiao&name=baoxiao_date&type=time&heading=报销日期&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_date']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_date'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
">
					  	修改
		  			</a>
		    	</td>
		    	<td>
		    		<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_roadQiao']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_roadQiao'] : null);?>

		    		<a href="update_a.php?table=baoxiao&name=baoxiao_roadQiao&type=text&heading=过桥过路费&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_roadQiao']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_roadQiao'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
">
					  	修改
		  			</a>
		    	</td>
				<td>
					<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_stopCar']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_stopCar'] : null);?>

					<a href="update_a.php?table=baoxiao&name=baoxiao_stopCar&type=text&heading=停车费&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_stopCar']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_stopCar'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
">
					  	修改
		  			</a>
				</td>
				<td>
					<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_oil']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_oil'] : null);?>

					<a href="update_a.php?table=baoxiao&name=baoxiao_oil&type=text&heading=油费&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_oil']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_oil'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
">
					  	修改
		  			</a>
				</td>
				<td>
					<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_room']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_room'] : null);?>

					<a href="update_a.php?table=baoxiao&name=baoxiao_room&type=text&heading=住宿费&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_room']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_room'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
">
					  	修改
		  			</a>
				</td>
				<td>
					<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_meal']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_meal'] : null);?>

					<a href="update_a.php?table=baoxiao&name=baoxiao_meal&type=text&heading=餐费&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_meal']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_meal'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
">
					  	修改
		  			</a>
				</td>
				<td>
					<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_remarks']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_remarks'] : null);?>

					<a href="update_a.php?table=baoxiao&name=baoxiao_remarks&type=text&heading=报销备注&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_remarks']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_remarks'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
">
					  	修改
		  			</a>
				</td>
				<td style="text-align:left;">
					<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgree']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgree'] : null)==0){?>
						未审核
						<a href="update_a.php?table=baoxiao&name=baoxiao_isAgree&type=shenhe&heading=审核&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgree']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgree'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
">
					  	修改
		  				</a>
					<?php }else{ ?>
						<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgree']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgree'] : null)==-1){?>
							审核未通过
							<a href="update_a.php?table=baoxiao&name=baoxiao_isAgree&type=shenhe&heading=审核&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgree']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgree'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
">
					  			修改
		  					</a>
						<?php }else{ ?>
							审核通过
							<a href="update_a.php?table=baoxiao&name=baoxiao_isAgree&type=shenhe&heading=审核&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgree']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgree'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
">
					  		修改
		  					</a>
						<?php }?>
						(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeMan']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeMan'] : null);?>

							<a href="update_a.php?table=baoxiao&name=baoxiao_isAgreeMan&type=text&heading=审核人&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeMan']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeMan'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
">
					  		修改
		  					</a>
						&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeTime']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeTime'] : null);?>

							<a href="update_a.php?table=baoxiao&name=baoxiao_isAgreeTime&type=time&heading=审核时间&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeTime']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeTime'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
">
					  		修改
		  					</a>
						)<hr />备注:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeRemarks']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeRemarks'] : null);?>

						<a href="update_a.php?table=baoxiao&name=baoxiao_isAgreeRemarks&type=text&heading=备注&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeRemarks']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeRemarks'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
">
					  		修改
		  				</a>
					<?php }?></td>
		    </tr>
		 	<?php }} ?>
		 	</table>
  		</td>
  		</tr>
  		<?php }?>
  		<!--/报销-->











  		<!--换车记录-->
  		<?php if ($_smarty_tpl->getVariable('changelist')->value){?>
  		<tr>
  		<th style="background: url(../../../css/Arrtitle.png) repeat-x;color:#fff;" colspan="2">换车记录</th>
  		</tr>
  		<tr>
  		<td colspan="2">
	  		<table width="100%" border="1" cellspacing="0" cellpadding="2" class="tbb">
			  	<tr>
			    <th style="width:30px;">序号	</th>
				<th>时间</th>
				<th>车辆</th>
				<th>被换车起始的公里数</th>
				<th>被换车结束的公里数</th>
				<th>更换过来的车当前公里数</th>
				<th>原租金</th>
				<th>更换后租金</th>
				<th>换车备注</th>
				<th>调度人</th>
				<th>删除</th>
			  </tr>
			  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('changelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
			  <tr >
			    	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>
				  	<td>
				  		<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_times_all']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_times_all'] : null);?>

				  		<a href="update_a.php?table=changecar&name=changecar_times&type=time&heading=时间&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_times_all']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_times_all'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_id']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_id'] : null);?>
">
					  		修改
		  				</a>
				  	</td>
				  	<td>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['carA']) ? $_smarty_tpl->tpl_vars['row']->value['carA'] : null);?>

				  		<a href="update_a.php?table=changecar&name=changecar_carA&type=car&heading=车辆A&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['carA']) ? $_smarty_tpl->tpl_vars['row']->value['carA'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_id']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_id'] : null);?>
">
					  	修改
		  				</a>
				  		&nbsp;->&nbsp;
				  		苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['carB']) ? $_smarty_tpl->tpl_vars['row']->value['carB'] : null);?>

				  		<a href="update_a.php?table=changecar&name=changecar_carB&type=car&heading=车辆B&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['carB']) ? $_smarty_tpl->tpl_vars['row']->value['carB'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_id']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_id'] : null);?>
">
					  	修改
		  				</a>
				  	</td>
					<td>
						<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_carAStartKilo']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_carAStartKilo'] : null);?>

						<a href="update_a.php?table=changecar&name=changecar_carAStartKilo&type=text&heading=被换车起始的公里数&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_carAStartKilo']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_carAStartKilo'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_id']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_id'] : null);?>
">
					  		修改
		  				</a>
					</td>
					<td>
						<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_carAEndKilo']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_carAEndKilo'] : null);?>

						<a href="update_a.php?table=changecar&name=changecar_carAEndKilo&type=text&heading=更换过来的车当前公里数&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_carAEndKilo']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_carAEndKilo'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_id']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_id'] : null);?>
">
					  		修改
		  				</a>
					</td>
					
					<td>
						<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_kiloBNow']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_kiloBNow'] : null);?>

						<a href="update_a.php?table=changecar&name=changecar_kiloBNow&type=text&heading=被换车结束的公里数&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_kiloBNow']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_kiloBNow'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_id']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_id'] : null);?>
">
					  		修改
		  				</a>
					</td>
					<td>
						<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_rentA']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_rentA'] : null);?>

						<a href="update_a.php?table=changecar&name=changecar_rentA&type=text&heading=原租金&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_rentA']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_rentA'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_id']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_id'] : null);?>
">
					  		修改
		  				</a>
					</td>
					<td>
						<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_rentB']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_rentB'] : null);?>

						<a href="update_a.php?table=changecar&name=changecar_rentB&type=text&heading=更换后租金&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_rentB']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_rentB'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_id']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_id'] : null);?>
">
					  		修改
		  				</a>
					</td>
					<td>
						<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_rentRemarks']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_rentRemarks'] : null);?>

						<a href="update_a.php?table=changecar&name=changecar_rentRemarks&type=text&heading=换车备注&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_rentRemarks']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_rentRemarks'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_id']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_id'] : null);?>
">
					  		修改
		  				</a>
					</td>
					<td>
						<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecarMan']) ? $_smarty_tpl->tpl_vars['row']->value['changecarMan'] : null);?>

						<a href="update_a.php?table=changecar&name=changecarMan&type=text&heading=调度人&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecarMan']) ? $_smarty_tpl->tpl_vars['row']->value['changecarMan'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_id']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_id'] : null);?>
">
					  		修改
		  				</a>

					</td>
					
			 </tr>
			 <?php }} ?>
			 </table>
  		</td>
  		</tr>
  		<?php }?>
  		<!--/换车记录-->













  		<!--改变行程记录-->
  		<?php if ($_smarty_tpl->getVariable('routelist')->value){?>
  		<tr>
  		<th style="background: url(../../../css/Arrtitle.png) repeat-x;color:#fff;" colspan="2">改变行程记录</th>
  		</tr>
  		<tr>
  		<td colspan="2">
	  		<table width="100%" border="1" cellspacing="0" cellpadding="2" class="tbb">
			  	<tr>
			    <th style="width:30px;">序号	</th>
				<th style="width:250px;">原行驶路程</th>
				<th style="width:50px;">原租金</th>
				<th style="width:130px;">原结束时间</th>
				<th>改变后的行程</th>
				<th style="width:90px;">改变后的租金</th>
				<th style="width:130px;">改变后的结束时间</th>
				<th style="width:50px;">操作人</th>
				<th style="width:130px;">操作时间</th>
				<th style="width:80px;">删除</th>
			  </tr>
			  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('routelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
			  <tr >
			    	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>
				  	<td>
				  		<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changeroute_lineA']) ? $_smarty_tpl->tpl_vars['row']->value['changeroute_lineA'] : null);?>

				  		<a href="update_a.php?table=changeroute&name=changeroute_lineA&type=text&heading=原行驶路程&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changeroute_lineA']) ? $_smarty_tpl->tpl_vars['row']->value['changeroute_lineA'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changeroute_id']) ? $_smarty_tpl->tpl_vars['row']->value['changeroute_id'] : null);?>
">
					  		修改
		  				</a>
				  	</td>
					<td>
						<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changeroute_rentA']) ? $_smarty_tpl->tpl_vars['row']->value['changeroute_rentA'] : null);?>

						<a href="update_a.php?table=changeroute&name=changeroute_rentA&type=text&heading=原租金&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changeroute_rentA']) ? $_smarty_tpl->tpl_vars['row']->value['changeroute_rentA'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changeroute_id']) ? $_smarty_tpl->tpl_vars['row']->value['changeroute_id'] : null);?>
">
					  		修改
		  				</a>
					</td>
					<td>
						<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changeroute_endDateA']) ? $_smarty_tpl->tpl_vars['row']->value['changeroute_endDateA'] : null);?>

						<a href="update_a.php?table=changeroute&name=changeroute_endDateA&type=text&heading=原结束时间&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changeroute_endDateA']) ? $_smarty_tpl->tpl_vars['row']->value['changeroute_endDateA'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changeroute_id']) ? $_smarty_tpl->tpl_vars['row']->value['changeroute_id'] : null);?>
">
					  		修改
		  				</a>
					</td>
					<td>
						<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changeroute_lineB']) ? $_smarty_tpl->tpl_vars['row']->value['changeroute_lineB'] : null);?>

						<a href="update_a.php?table=changeroute&name=changeroute_lineB&type=text&heading=改变后的行程&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changeroute_lineB']) ? $_smarty_tpl->tpl_vars['row']->value['changeroute_lineB'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changeroute_id']) ? $_smarty_tpl->tpl_vars['row']->value['changeroute_id'] : null);?>
">
					  		修改
		  				</a>
					</td>
					<td>
						<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changeroute_rentB']) ? $_smarty_tpl->tpl_vars['row']->value['changeroute_rentB'] : null);?>

						<a href="update_a.php?table=changeroute&name=changeroute_rentB&type=text&heading=改变后的租金&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changeroute_rentB']) ? $_smarty_tpl->tpl_vars['row']->value['changeroute_rentB'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changeroute_id']) ? $_smarty_tpl->tpl_vars['row']->value['changeroute_id'] : null);?>
">
					  		修改
		  				</a>
					</td>
					<td>
						<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changeroute_endDateB']) ? $_smarty_tpl->tpl_vars['row']->value['changeroute_endDateB'] : null);?>

						<a href="update_a.php?table=changeroute&name=changeroute_endDateB&type=text&heading=改变后的结束时间&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changeroute_endDateB']) ? $_smarty_tpl->tpl_vars['row']->value['changeroute_endDateB'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changeroute_id']) ? $_smarty_tpl->tpl_vars['row']->value['changeroute_id'] : null);?>
">
					  		修改
		  				</a>
					</td>
					<td>
						<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changerouteMan']) ? $_smarty_tpl->tpl_vars['row']->value['changerouteMan'] : null);?>

						<a href="update_a.php?table=changeroute&name=changerouteMan&type=text&heading=操作人&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changerouteMan']) ? $_smarty_tpl->tpl_vars['row']->value['changerouteMan'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changeroute_id']) ? $_smarty_tpl->tpl_vars['row']->value['changeroute_id'] : null);?>
">
					  		修改
		  				</a>
						
					</td>
					<td>
						<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changeroute_times']) ? $_smarty_tpl->tpl_vars['row']->value['changeroute_times'] : null);?>

						<a href="update_a.php?table=changeroute&name=changeroute_times&type=time&heading=操作时间&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changeroute_times']) ? $_smarty_tpl->tpl_vars['row']->value['changeroute_times'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changeroute_id']) ? $_smarty_tpl->tpl_vars['row']->value['changeroute_id'] : null);?>
">
					  		修改
		  				</a>

					</td>
			 </tr>
			 <?php }} ?>
			</table>
  		</td>
  		</tr>
  		<?php }?>
  		<!--/改变行程记录-->













  		<!--违章记录-->
  		<?php if ($_smarty_tpl->getVariable('breaklist')->value){?>
  		<tr>
  		<th style="background: url(../../../css/Arrtitle.png) repeat-x;color:#fff;" colspan="2">违章记录</th>
  		</tr>
  		<tr>
  		<td colspan="2">
  		 <table width="100%" border="1" cellspacing="0" cellpadding="2" class="tbb">
		  	<tr>
		    <th style="width:30px;">序号	</th>
		    <th>车辆</th>
			<th>违章时间</th>
			<th>违章项目</th>
			<th>违章款</th>
			<th>手续费</th>
			<th>扣分</th>
			<th>金额抵扣分</th>
			<th>总金额</th>
			<th>备注</th>
			<th>冻结押金时间</th>
			<th>处理时间</th>
			<th>状态</th>
		  </tr>
		  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('breaklist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
		  <tr >
		    	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>
			  	<td>
			  		苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>

			  		<a href="update_a.php?table=breakrules&name=breakrules_CarId&type=car&heading=车辆&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_id'] : null);?>
">
					  		修改
		  			</a>
			  	</td>
			  	<td>
			  		<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_date']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_date'] : null);?>

			  		<a href="update_a.php?table=breakrules&name=breakrules_date&type=time&heading=违章时间&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_date']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_date'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_id'] : null);?>
">
					  		修改
		  			</a>
			  	</td>
			  	<td>
			  		<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_item']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_item'] : null);?>

			  		<a href="update_a.php?table=breakrules&name=breakrules_item&type=text&heading=违章项目&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_item']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_item'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_id'] : null);?>
">
					  		修改
		  			</a>

			  	</td>
			  	<td>
			  		<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money1']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money1'] : null);?>

			  		<a href="update_a.php?table=breakrules&name=breakrules_money1&type=text&heading=违章款&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money1']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money1'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_id'] : null);?>
">
					  		修改
		  			</a>
			  		
			  	</td>
				<td>
					<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money2']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money2'] : null);?>

					<a href="update_a.php?table=breakrules&name=breakrules_money2&type=text&heading=手续费&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money2']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money2'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_id'] : null);?>
">
					  		修改
		  			</a>
				</td>
				<td>
					<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money3']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money3'] : null);?>


					<a href="update_a.php?table=breakrules&name=breakrules_money3&type=text&heading=扣分&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money3']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money3'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_id'] : null);?>
">
					  		修改
		  			</a>
				</td>
				<td>
					<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money4']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money4'] : null);?>

					<a href="update_a.php?table=breakrules&name=breakrules_money4&type=text&heading=金额抵扣分&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money4']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money4'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_id'] : null);?>
">
					  		修改
		  			</a>
				</td>
				<td>
					<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money'] : null);?>

					<a href="update_a.php?table=breakrules&name=breakrules_money&type=text&heading=总金额&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_id'] : null);?>
">
					  		修改
		  			</a>
				</td>
				<td>
					<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_remarks']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_remarks'] : null);?>

					<a href="update_a.php?table=breakrules&name=breakrules_remarks&type=text&heading=备注&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_remarks']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_remarks'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_id'] : null);?>
">
					  		修改
		  			</a>
					
				</td>
				<td>
					<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_times']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_times'] : null);?>

					<a href="update_a.php?table=breakrules&name=breakrules_times&type=time&heading=冻结押金时间&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_times']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_times'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_id'] : null);?>
">
					  		修改
		  			</a>
				</td>
				<td>
					<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_endtimes']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_endtimes'] : null);?>

					<a href="update_a.php?table=breakrules&name=breakrules_endtimes&type=time&heading=处理时间&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_endtimes']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_endtimes'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_id'] : null);?>
">
					  		修改
		  			</a>
				</td>
				<td>
					<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_enda']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_enda'] : null);?>

					<a href="update_a.php?table=breakrules&name=breakrules_end&type=zhuangtai&heading=处理时间&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_enda']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_enda'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_id'] : null);?>
">
					  		修改
		  			</a>

				</td>
		 </tr>
		 <?php }} ?>
		 </table>
  		</td>
  		</tr>
  		<?php }?>
  		<!--/违章记录-->









  		<!--结算记录-->
  		<?php if ($_smarty_tpl->getVariable('settlement_list')->value){?>
  		<tr>
  		<th style="background: url(../../../css/Arrtitle.png) repeat-x;color:#fff;" colspan="2">结算记录</th>
  		</tr>
  		<td colspan="2">
	  		<table width="100%" border="1" cellspacing="0" cellpadding="2" class="tbb">
			<tr>
				<th>结算金额</th>
				<th>发票号码</th>
				<th>开票金额</th>
				<th>开票优惠</th>
				<th>实际结账</th>
				<th>状态</th>
				<th>结账时间</th>
			  </tr>
			  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('settlement_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
			  <tr>
					<td>
						<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_infact']) ? $_smarty_tpl->tpl_vars['row']->value['settle_infact'] : null);?>

						<a href="update_a.php?table=paiche_month&name=settle_infact&type=text&heading=结算金额&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_infact']) ? $_smarty_tpl->tpl_vars['row']->value['settle_infact'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month_id']) ? $_smarty_tpl->tpl_vars['row']->value['month_id'] : null);?>
">
					  		修改
		  				</a>
					</td>
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_billNum']) ? $_smarty_tpl->tpl_vars['row']->value['settle_billNum'] : null);?>
</td>
					<td>
						<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_billMoney']) ? $_smarty_tpl->tpl_vars['row']->value['settle_billMoney'] : null);?>

						<a href="update_a.php?table=paiche_month&name=settle_billMoney&type=text&heading=开票优惠&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_billMoney']) ? $_smarty_tpl->tpl_vars['row']->value['settle_billMoney'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month_id']) ? $_smarty_tpl->tpl_vars['row']->value['month_id'] : null);?>
">
					  		修改
		  				</a>

					</td>
					<td>
						<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_billFavor']) ? $_smarty_tpl->tpl_vars['row']->value['settle_billFavor'] : null);?>

						<a href="update_a.php?table=paiche_month&name=settle_billFavor&type=text&heading=开票优惠&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_billFavor']) ? $_smarty_tpl->tpl_vars['row']->value['settle_billFavor'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month_id']) ? $_smarty_tpl->tpl_vars['row']->value['month_id'] : null);?>
">
					  		修改
		  				</a>
					</td>
					<td>
						<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_billMoney_have']) ? $_smarty_tpl->tpl_vars['row']->value['settle_billMoney_have'] : null);?>

						<a href="update_a.php?table=paiche_month&name=settle_billMoney_have&type=text&heading=实际结账&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_billMoney_have']) ? $_smarty_tpl->tpl_vars['row']->value['settle_billMoney_have'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month_id']) ? $_smarty_tpl->tpl_vars['row']->value['month_id'] : null);?>
">
					  		修改
		  				</a>
					</td>
					<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['month_account']) ? $_smarty_tpl->tpl_vars['row']->value['month_account'] : null)==1){?>已结账<?php }else{ ?>未结账<?php }?>
						<a href="update_a.php?table=paiche_month&name=month_account&type=zhuangtai2&heading=状态&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month_account']) ? $_smarty_tpl->tpl_vars['row']->value['month_account'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month_id']) ? $_smarty_tpl->tpl_vars['row']->value['month_id'] : null);?>
">
					  		修改
		  				</a>
					</td>
					<td>
						<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month_accounttime']) ? $_smarty_tpl->tpl_vars['row']->value['month_accounttime'] : null);?>

						<a href="update_a.php?table=paiche_month&name=month_accounttime&type=time&heading=结账时间&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month_accounttime']) ? $_smarty_tpl->tpl_vars['row']->value['month_accounttime'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month_id']) ? $_smarty_tpl->tpl_vars['row']->value['month_id'] : null);?>
">
					  		修改
		  				</a>
					</td>
			 </tr>
			 <?php }} ?>
			</table>
  		</td>
  		</tr>
  		<?php }?>
  		<!--结算记录-->















  		<!--月结记录-->
  		<?php if ($_smarty_tpl->getVariable('month_list')->value){?>
  		<tr>
  		<th style="background: url(../../../css/Arrtitle.png) repeat-x;color:#fff;" colspan="2">月结记录</th>
  		</tr>
  		<tr>
  		<td colspan="2">
	  		<table width="100%" border="1" cellspacing="0" cellpadding="2" class="tbb">
			<tr>
				
				<th>开始公里数</th>
				<th>结束公里数</th>
				
				<th>本期行驶里程</th>
				<th>月租金</th>
				<th>结算优惠</th>
				<th>结算金额</th>
				<th>发票号码</th>
				<th>开票金额</th>
				<th>开票优惠</th>
				<th>实际结账</th>
				<th>状态</th>
				<th>结账时间</th>
			  </tr>
			  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('month_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
			  <tr>
				  	
				  	<td>
				  		<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_startKm']) ? $_smarty_tpl->getVariable('list')->value['settle_startKm'] : null);?>

				  		
				  	</td>
				  	<td>
				  		<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_endKm']) ? $_smarty_tpl->getVariable('list')->value['settle_endKm'] : null);?>

				  		
				  	</td>
				  	
				  	<td>
				  		<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_totalKm']) ? $_smarty_tpl->tpl_vars['row']->value['settle_totalKm'] : null);?>

				  		<a href="update_a.php?table=paiche_month&name=settle_totalKm&type=text&heading=本期行驶里程&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_totalKm']) ? $_smarty_tpl->tpl_vars['row']->value['settle_totalKm'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month_id']) ? $_smarty_tpl->tpl_vars['row']->value['month_id'] : null);?>
">
					  		修改
		  				</a>
				  	</td>
				  	<td>
				  		<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_rent']) ? $_smarty_tpl->tpl_vars['row']->value['settle_rent'] : null);?>

				  		<a href="update_a.php?table=paiche_month&name=settle_rent&type=text&heading=月租金&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_rent']) ? $_smarty_tpl->tpl_vars['row']->value['settle_rent'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month_id']) ? $_smarty_tpl->tpl_vars['row']->value['month_id'] : null);?>
">
					  		修改
		  				</a>
				  	</td>
					<td>
						<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_favor']) ? $_smarty_tpl->tpl_vars['row']->value['settle_favor'] : null);?>

						<a href="update_a.php?table=paiche_month&name=settle_favor&type=text&heading=结算优惠&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_favor']) ? $_smarty_tpl->tpl_vars['row']->value['settle_favor'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month_id']) ? $_smarty_tpl->tpl_vars['row']->value['month_id'] : null);?>
">
					  		修改
		  				</a>
					</td>
					<td>
						<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_infact']) ? $_smarty_tpl->tpl_vars['row']->value['settle_infact'] : null);?>

						<a href="update_a.php?table=paiche_month&name=settle_infact&type=text&heading=结算金额&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_infact']) ? $_smarty_tpl->tpl_vars['row']->value['settle_infact'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month_id']) ? $_smarty_tpl->tpl_vars['row']->value['month_id'] : null);?>
">
					  		修改
		  				</a>
					</td>
					<td>
						<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_billNum']) ? $_smarty_tpl->tpl_vars['row']->value['settle_billNum'] : null);?>


					</td>
					<td>
						<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_billMoney']) ? $_smarty_tpl->tpl_vars['row']->value['settle_billMoney'] : null);?>

						<a href="update_a.php?table=paiche_month&name=settle_billMoney&type=text&heading=开票金额&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_billMoney']) ? $_smarty_tpl->tpl_vars['row']->value['settle_billMoney'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month_id']) ? $_smarty_tpl->tpl_vars['row']->value['month_id'] : null);?>
">
					  		修改
		  				</a>

					</td>
					<td>
						<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_billFavor']) ? $_smarty_tpl->tpl_vars['row']->value['settle_billFavor'] : null);?>

						<a href="update_a.php?table=paiche_month&name=settle_billFavor&type=text&heading=开票优惠&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_billFavor']) ? $_smarty_tpl->tpl_vars['row']->value['settle_billFavor'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month_id']) ? $_smarty_tpl->tpl_vars['row']->value['month_id'] : null);?>
">
					  		修改
		  				</a>
					</td>
					<td>
						<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_billMoney_have']) ? $_smarty_tpl->tpl_vars['row']->value['settle_billMoney_have'] : null);?>

						<a href="update_a.php?table=paiche_month&name=settle_billMoney_have&type=text&heading=实际结账&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_billMoney_have']) ? $_smarty_tpl->tpl_vars['row']->value['settle_billMoney_have'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month_id']) ? $_smarty_tpl->tpl_vars['row']->value['month_id'] : null);?>
">
					  		修改
		  				</a>
					</td>
					<td>
						<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['month_account']) ? $_smarty_tpl->tpl_vars['row']->value['month_account'] : null)==1){?>已结账<?php }else{ ?>未结账<?php }?>
						<a href="update_a.php?table=paiche_month&name=month_account&type=zhuangtai2&heading=状态&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month_account']) ? $_smarty_tpl->tpl_vars['row']->value['month_account'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month_id']) ? $_smarty_tpl->tpl_vars['row']->value['month_id'] : null);?>
">
					  		修改
		  				</a>

					</td>
					<td>
						<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month_accounttime']) ? $_smarty_tpl->tpl_vars['row']->value['month_accounttime'] : null);?>

						<a href="update_a.php?table=paiche_month&name=month_accounttime&type=time&heading=结账时间&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month_accounttime']) ? $_smarty_tpl->tpl_vars['row']->value['month_accounttime'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month_id']) ? $_smarty_tpl->tpl_vars['row']->value['month_id'] : null);?>
">
					  		修改
		  				</a>

					</td>
			 </tr>
			 <?php }} ?>
			</table>
  		</td>
  		</tr>
  		<?php }?>
  		<!--/月结记录-->








  		<?php if ($_smarty_tpl->getVariable('outcarlist')->value||(isset($_smarty_tpl->getVariable('list')->value['paiche_type']) ? $_smarty_tpl->getVariable('list')->value['paiche_type'] : null)=='1'){?>
  		<tr>
  		<form action="detail.php" method="get">
		  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
" />
		  <th style="background: url(../../../css/Arrtitle.png) repeat-x;color:#fff;" colspan="2">出车记录<?php if ($_smarty_tpl->getVariable('outcarlist')->value){?>&nbsp;&nbsp;&nbsp;日期范围：<input type="text" value="<?php echo $_smarty_tpl->getVariable('search_startDate')->value;?>
" name="search_startDate" onClick="calendar.show(this);">到<input type="text" value="<?php echo $_smarty_tpl->getVariable('search_endDate')->value;?>
" name="search_endDate" onClick="calendar.show(this);">
		  <input class="btn_b" type="submit" value="查询"><?php }?>
		  </th>
		</form>
  		</tr>
  		<tr>
  		<td colspan="2">
	  		<table width="100%" border="1" cellspacing="0" cellpadding="2" class="tbb">
			 <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_type']) ? $_smarty_tpl->getVariable('list')->value['paiche_type'] : null)=='3'){?>
				<tr>
				<th>日期</th>
				<th>开始公里</th>
				<th>截止公里</th>
				<th>公里数</th>
				<th>周末/节假日</th>
				</tr>
				<?php }elseif((isset($_smarty_tpl->getVariable('list')->value['paiche_type']) ? $_smarty_tpl->getVariable('list')->value['paiche_type'] : null)=='4'){?>
				<tr>
				<th rowspan="2">日期</th>
				<th colspan="2">开始信息</th>
				<th colspan="2">截止信息</th>
				<th rowspan="2">公里数</th>
				<th rowspan="2">工作时间</th>
				<th rowspan="2">扣除时间</th>
				<th rowspan="2">周末<br />节假日</th>
				<th rowspan="2">是否<br />出差</th>
				<th rowspan="2">带宿<br />出差</th>
				<th rowspan="2">出差备注</th>
				<th rowspan="2">食宿费<br />过路桥</th>
				<th rowspan="2">司机</th>
				<th rowspan="2">车辆</th>
				</tr>
				<tr>
				  <th>开始公里</th>
				  <th>开始时间</th>
				  <th>截止公里</th>
				  <th>截止时间</th>
				</tr>
				<?php }elseif((isset($_smarty_tpl->getVariable('list')->value['paiche_type']) ? $_smarty_tpl->getVariable('list')->value['paiche_type'] : null)=='5'){?>
				<tr>
				<th>日期</th>
				<th>时间</th>
				<th>周末/节假日</th>
				<th>用途</th>
				<th>起止地点</th>
				<th>趟数</th>
				<th>总费用</th>
				<th>司机</th>
				<th>车辆</th>
				</tr>
				<?php }elseif((isset($_smarty_tpl->getVariable('list')->value['paiche_type']) ? $_smarty_tpl->getVariable('list')->value['paiche_type'] : null)=='1'){?>
				<tr>
				<th>日期</th>
				<th>开始公里</th>
				<th>截止公里</th>
				<th>公里数</th>
				</tr>
				<?php }else{ ?>
				<tr>
				<th>序号</th>
				<th>出车日期</th>
				<th>开始时间</th>
				<th>结束时间</th>
				<th>起始公里</th>
				<th>结束公里</th>
				<th>共行驶里程</th>
				<th>结算公里数</th>
				<th>过路费</th>	
				<th>油卡加油</th>
				<th>现金加油</th>
				<th>是否结账</th>
			  </tr>
				<?php }?>
			  
			  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('outcarlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
			  <tr>
			  	<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_type']) ? $_smarty_tpl->getVariable('list')->value['paiche_type'] : null)=='3'){?>

			  	<td>
			  		<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_date']) ? $_smarty_tpl->tpl_vars['row']->value['drive_date'] : null);?>

			  		<a href="update_a.php?table=paiche_drive&name=drive_date&type=time&heading=出车日期&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_date']) ? $_smarty_tpl->tpl_vars['row']->value['drive_date'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_id']) ? $_smarty_tpl->tpl_vars['row']->value['drive_id'] : null);?>
">
					  		修改
		  			</a>
			  	</td>

			  	<td>
			  		<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_startKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startKilo'] : null);?>

			  		<a href="update_a.php?table=paiche_drive&name=drive_startKilo&type=text&heading=起始公里&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_startKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startKilo'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_id']) ? $_smarty_tpl->tpl_vars['row']->value['drive_id'] : null);?>
">
					  		修改
		  			</a>
			  	</td>
			  	<td>
			  		<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_endKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_endKilo'] : null);?>

			  		<a href="update_a.php?table=paiche_drive&name=drive_endKilo&type=text&heading=结束公里&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_endKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_endKilo'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_id']) ? $_smarty_tpl->tpl_vars['row']->value['drive_id'] : null);?>
">
					  		修改
		  			</a>
			  	</td>
			  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_endKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_endKilo'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['drive_startKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startKilo'] : null);?>
</td>
			  	<td>
			  		<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_hol']) ? $_smarty_tpl->tpl_vars['row']->value['drive_hol'] : null);?>

			  		<a href="update_a.php?table=paiche_drive&name=drive_hol&type=text&heading=工作日&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_hol']) ? $_smarty_tpl->tpl_vars['row']->value['drive_hol'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_id']) ? $_smarty_tpl->tpl_vars['row']->value['drive_id'] : null);?>
">
					  		修改
		  			</a>
			  	</td>
			  	<?php }elseif((isset($_smarty_tpl->getVariable('list')->value['paiche_type']) ? $_smarty_tpl->getVariable('list')->value['paiche_type'] : null)=='4'){?>
			  	<td>
			  		<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_date']) ? $_smarty_tpl->tpl_vars['row']->value['drive_date'] : null);?>

			  		<a href="update_a.php?table=paiche_drive&name=drive_date&type=time&heading=出车日期&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_date']) ? $_smarty_tpl->tpl_vars['row']->value['drive_date'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_id']) ? $_smarty_tpl->tpl_vars['row']->value['drive_id'] : null);?>
">
					  		修改
		  			</a>
			  	</td>
			  	<td>
			  		<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_startKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startKilo'] : null);?>

			  		<a href="update_a.php?table=paiche_drive&name=drive_startKilo&type=text&heading=起始公里&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_startKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startKilo'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_id']) ? $_smarty_tpl->tpl_vars['row']->value['drive_id'] : null);?>
">
					  		修改
		  			</a>
			  	</td>
			  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_startHour']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startHour'] : null);?>
点&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_startMinute']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startMinute'] : null);?>
分</td>
			  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_endKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_endKilo'] : null);?>
</td>
			  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_endHour']) ? $_smarty_tpl->tpl_vars['row']->value['drive_endHour'] : null);?>
点&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_endMinute']) ? $_smarty_tpl->tpl_vars['row']->value['drive_endMinute'] : null);?>
分</td>
			  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_endKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_endKilo'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['drive_startKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startKilo'] : null);?>
</td>
			  	<td><?php echo ((isset($_smarty_tpl->tpl_vars['row']->value['drive_endTime_O']) ? $_smarty_tpl->tpl_vars['row']->value['drive_endTime_O'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['drive_startTime_O']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startTime_O'] : null))/3600;?>
</td>
				  <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_deductTime']) ? $_smarty_tpl->tpl_vars['row']->value['drive_deductTime'] : null)/60;?>
</td>
				  <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_hol']) ? $_smarty_tpl->tpl_vars['row']->value['drive_hol'] : null);?>
</td>
				<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['drive_travel']) ? $_smarty_tpl->tpl_vars['row']->value['drive_travel'] : null)==1){?>是<?php }else{ ?>否<?php }?></td>
				  <td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['drive_travelRoom']) ? $_smarty_tpl->tpl_vars['row']->value['drive_travelRoom'] : null)==1){?>是<?php }else{ ?>否<?php }?></td>
				  <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_travelRemarks']) ? $_smarty_tpl->tpl_vars['row']->value['drive_travelRemarks'] : null);?>
</td>
				  <td style="text-align:left;">火食:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_mealsTimes']) ? $_smarty_tpl->tpl_vars['row']->value['drive_mealsTimes'] : null);?>
次
				  住宿:<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['drive_roomTimes']) ? $_smarty_tpl->tpl_vars['row']->value['drive_roomTimes'] : null)==1){?>是<?php }else{ ?>否<?php }?>
				  路费:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_ioll']) ? $_smarty_tpl->tpl_vars['row']->value['drive_ioll'] : null);?>
元</td>
				  <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['driveDriverName']) ? $_smarty_tpl->tpl_vars['row']->value['driveDriverName'] : null);?>
</td>
				  <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['driveCarNum']) ? $_smarty_tpl->tpl_vars['row']->value['driveCarNum'] : null);?>
</td>
			  	<?php }elseif((isset($_smarty_tpl->getVariable('list')->value['paiche_type']) ? $_smarty_tpl->getVariable('list')->value['paiche_type'] : null)=='5'){?>
			  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_date']) ? $_smarty_tpl->tpl_vars['row']->value['drive_date'] : null);?>
</td>
			  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_startHour']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startHour'] : null);?>
点&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_startMinute']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startMinute'] : null);?>
分</td>
			  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_hol']) ? $_smarty_tpl->tpl_vars['row']->value['drive_hol'] : null);?>
</td>
			  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_travelRemarks']) ? $_smarty_tpl->tpl_vars['row']->value['drive_travelRemarks'] : null);?>
</td>
				<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_specialRemarks']) ? $_smarty_tpl->tpl_vars['row']->value['drive_specialRemarks'] : null);?>
</td>
				<td>
					<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_trips']) ? $_smarty_tpl->tpl_vars['row']->value['drive_trips'] : null);?>
趟
					<a href="update_a.php?table=paiche_drive&name=drive_trips&type=text&heading=趟数&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_trips']) ? $_smarty_tpl->tpl_vars['row']->value['drive_trips'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_id']) ? $_smarty_tpl->tpl_vars['row']->value['drive_id'] : null);?>
">
					  		修改
		  			</a>
				</td>
				  <td>
				  	<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_money']) ? $_smarty_tpl->tpl_vars['row']->value['drive_money'] : null);?>
元
				  	<a href="update_a.php?table=paiche_drive&name=drive_money&type=text&heading=总费用&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_money']) ? $_smarty_tpl->tpl_vars['row']->value['drive_money'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_id']) ? $_smarty_tpl->tpl_vars['row']->value['drive_id'] : null);?>
">
					  		修改
		  			</a>
				  </td>
				  <td>
				  	<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['driveDriverName']) ? $_smarty_tpl->tpl_vars['row']->value['driveDriverName'] : null);?>

				  	
				  </td>
				  <td>
				  	<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['driveCarNum']) ? $_smarty_tpl->tpl_vars['row']->value['driveCarNum'] : null);?>


				  </td>
			  	<?php }elseif((isset($_smarty_tpl->getVariable('list')->value['paiche_type']) ? $_smarty_tpl->getVariable('list')->value['paiche_type'] : null)=='1'){?>
			  	<td>
			  		<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_date']) ? $_smarty_tpl->tpl_vars['row']->value['drive_date'] : null);?>

			  		<a href="update_a.php?table=paiche_drive&name=drive_date&type=time&heading=出车日期&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_date']) ? $_smarty_tpl->tpl_vars['row']->value['drive_date'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_id']) ? $_smarty_tpl->tpl_vars['row']->value['drive_id'] : null);?>
">
					  		修改
		  			</a>
			  	</td>
			  	<td>
			  		<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_startKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startKilo'] : null);?>

			  		<a href="update_a.php?table=paiche_drive&name=drive_startKilo&type=text&heading=起始公里&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_startKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startKilo'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_id']) ? $_smarty_tpl->tpl_vars['row']->value['drive_id'] : null);?>
">
					  		修改
		  			</a>
			  	</td>
			  	<td>
			  		<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_endKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_endKilo'] : null);?>

			  		<a href="update_a.php?table=paiche_drive&name=drive_endKilo&type=text&heading=结束公里&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_endKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_endKilo'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_id']) ? $_smarty_tpl->tpl_vars['row']->value['drive_id'] : null);?>
">
					  		修改
		  			</a>
			  	</td>
			  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_endKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_endKilo'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['drive_startKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startKilo'] : null);?>
</td>
			  	<?php }else{ ?>
				  	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
				  	<td>
				  		<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_date']) ? $_smarty_tpl->tpl_vars['row']->value['drive_date'] : null);?>

				  		<a href="update_a.php?table=paiche_drive&name=drive_date&type=time&heading=出车日期&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_date']) ? $_smarty_tpl->tpl_vars['row']->value['drive_date'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_id']) ? $_smarty_tpl->tpl_vars['row']->value['drive_id'] : null);?>
">
					  		修改
		  				</a>
				  	</td>
				  	<td>
				  		<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_startTime']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startTime'] : null);?>

				  		<a href="update_a.php?table=paiche_drive&name=drive_startTime&type=time&heading=开始时间&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_startTime']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startTime'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_id']) ? $_smarty_tpl->tpl_vars['row']->value['drive_id'] : null);?>
">
					  		修改
		  				</a>
				  	</td>
				  	<td>
				  		<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_endTime']) ? $_smarty_tpl->tpl_vars['row']->value['drive_endTime'] : null);?>

				  		<a href="update_a.php?table=paiche_drive&name=drive_endTime&type=time&heading=结束时间&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_endTime']) ? $_smarty_tpl->tpl_vars['row']->value['drive_endTime'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_id']) ? $_smarty_tpl->tpl_vars['row']->value['drive_id'] : null);?>
">
					  		修改
		  				</a>
				  	</td>
				  	<td>
				  		<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_startKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startKilo'] : null);?>

				  		<a href="update_a.php?table=paiche_drive&name=drive_startKilo&type=text&heading=起始公里&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_startKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startKilo'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_id']) ? $_smarty_tpl->tpl_vars['row']->value['drive_id'] : null);?>
">
					  		修改
		  				</a>
				  	</td>
					<td>
						<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_endKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_endKilo'] : null);?>

						<a href="update_a.php?table=paiche_drive&name=drive_endKilo&type=text&heading=结束公里&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_endKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_endKilo'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_id']) ? $_smarty_tpl->tpl_vars['row']->value['drive_id'] : null);?>
">
					  		修改
		  				</a>
					</td>
					<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_endKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_endKilo'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['drive_startKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startKilo'] : null);?>
</td>
					<td>
						<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_totalcalKm']) ? $_smarty_tpl->getVariable('list')->value['settle_totalcalKm'] : null);?>

					</td>
				    <td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>
						<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['drive_account']) ? $_smarty_tpl->tpl_vars['row']->value['drive_account'] : null)==0){?>
							未结账
						<?php }else{ ?>
							已结账
						<?php }?>
						
						<a href="update_a.php?table=paiche_drive&name=drive_account&type=zhuangtai2&heading=是否结账&val=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_account']) ? $_smarty_tpl->tpl_vars['row']->value['drive_account'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_id']) ? $_smarty_tpl->tpl_vars['row']->value['drive_id'] : null);?>
">
					  		修改
		  				</a>
					</td>
				<?php }?>
			 </tr>
			 <?php }} ?>
			 <?php $_tmp1=(isset($_smarty_tpl->getVariable('list')->value['settle_totalKm']) ? $_smarty_tpl->getVariable('list')->value['settle_totalKm'] : null);?><?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_type']) ? $_smarty_tpl->getVariable('list')->value['paiche_type'] : null)=='1'&&!empty($_tmp1)){?>
			 <tr>
			  	<td>
			  		<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_endDate']) ? $_smarty_tpl->getVariable('list')->value['settle_endDate'] : null);?>

			  		<a href="update_a.php?table=settle&name=settle_endDate&type=time&heading=日期&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_endDate']) ? $_smarty_tpl->getVariable('list')->value['settle_endDate'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
					  		修改
		  			</a>
			  	</td>
			  	<td>
			  		<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_startKm']) ? $_smarty_tpl->getVariable('list')->value['settle_startKm'] : null);?>

			  		<a href="update_a.php?table=settle&name=settle_startKm&type=text&heading=开始公里&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_startKm']) ? $_smarty_tpl->getVariable('list')->value['settle_startKm'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
					  		修改
		  			</a>
			  	</td>
			  	<td>
			  		<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_endKm']) ? $_smarty_tpl->getVariable('list')->value['settle_endKm'] : null);?>

			  		<a href="update_a.php?table=settle&name=settle_endKm&type=text&heading=截止公里&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_endKm']) ? $_smarty_tpl->getVariable('list')->value['settle_endKm'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
					  		修改
		  			</a>
			  	</td>
			  	<td>
			  		<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_totalKm']) ? $_smarty_tpl->getVariable('list')->value['settle_totalKm'] : null);?>

			  		<a href="update_a.php?table=settle&name=settle_totalKm&type=text&heading=公里数&val=<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_totalKm']) ? $_smarty_tpl->getVariable('list')->value['settle_totalKm'] : null);?>
&uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
">
					  		修改
		  			</a>
			  	</td>
			 </tr>
			 <?php }?>
			</table>
  		</td>
  		</tr>
  		<?php }?>
  		
  	</table>
  </div>


</div>

</body>
</html>