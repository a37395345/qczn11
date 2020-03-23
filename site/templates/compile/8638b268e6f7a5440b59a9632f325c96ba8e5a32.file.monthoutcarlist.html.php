<?php /* Smarty version Smarty-3.0.4, created on 2015-02-26 10:31:04
         compiled from "D:\czyhqc\site\templates\elsker\operator/report/monthoutcarlist.html" */ ?>
<?php /*%%SmartyHeaderCode:97754ee856809ce09-33461661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8638b268e6f7a5440b59a9632f325c96ba8e5a32' => 
    array (
      0 => 'D:\\czyhqc\\site\\templates\\elsker\\operator/report/monthoutcarlist.html',
      1 => 1424917238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97754ee856809ce09-33461661',
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
<link href="../../../../css/style.css" rel="stylesheet" type="text/css">
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style>
</head>
<body>
<form action="month_accept.php" method="post" onsubmit="return month_check(this)" name="form1">
<div class="so_main">
  <div class="page_tit"><?php echo (isset($_smarty_tpl->getVariable('busi')->value['client_name']) ? $_smarty_tpl->getVariable('busi')->value['client_name'] : null);?>
<?php echo $_smarty_tpl->getVariable('month')->value;?>
月份出车记录清单</div>  
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
	<?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='3'){?>
	<tr>
	<th>日期</th>
	<th>车号</th>
	<th>开始公里</th>
	<th>截止公里</th>
	<th>公里数</th>
	<th>周末/节假日</th>
	<th>备注</th>
	</tr>
	<?php }elseif((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
	<tr>
	<th rowspan="2">日期</th>
	<th rowspan="2">车号</th>
	<th colspan="2">开始信息</th>
	<th colspan="2">截止信息</th>
	<th rowspan="2">公里数</th>
	<th rowspan="2">工作时间</th>
	<th rowspan="2">周末<br />节假日</th>
	<th rowspan="2">是否<br />出差</th>
	<th rowspan="2">带宿<br />出差</th>
	<th rowspan="2">出差备注</th>
	<th rowspan="2">食宿费<br />过路桥</th>
	<th rowspan="2">司机</th>
	<th rowspan="2" width="5%">备注</th>
	</tr>
	<tr>
	  <th>开始公里</th>
	  <th>开始时间</th>
	  <th>截止公里</th>
	  <th>截止时间</th>
	</tr>
	<?php }else{ ?>
	<tr>
	<th>日期</th>
	<th>车号</th>
	<th>时间</th>
	<th>周末/节假日</th>
	<th>用途</th>
	<th>起止地点</th>
	<th>趟数</th>
	<th>总费用</th>
	<th>司机</th>
	<th>备注</th>
	</tr>
	<?php }?>
	<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('outlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['list']->key;
?>
	<?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='3'||(isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
	<?php $_smarty_tpl->tpl_vars['totalKM'] = new Smarty_variable($_smarty_tpl->getVariable('totalKM')->value+(isset($_smarty_tpl->tpl_vars['list']->value['drive_endKilo']) ? $_smarty_tpl->tpl_vars['list']->value['drive_endKilo'] : null)-(isset($_smarty_tpl->tpl_vars['list']->value['drive_startKilo']) ? $_smarty_tpl->tpl_vars['list']->value['drive_startKilo'] : null), null, null);?>
	<?php }?>
	<?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='5'){?>
	<?php $_smarty_tpl->tpl_vars['totalTP'] = new Smarty_variable($_smarty_tpl->getVariable('totalTP')->value+(isset($_smarty_tpl->tpl_vars['list']->value['drive_trips']) ? $_smarty_tpl->tpl_vars['list']->value['drive_trips'] : null), null, null);?>
	<?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->getVariable('total')->value+(isset($_smarty_tpl->tpl_vars['list']->value['drive_money']) ? $_smarty_tpl->tpl_vars['list']->value['drive_money'] : null), null, null);?>
	<?php }?>
	<tr bgcolor="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['bgcolor']) ? $_smarty_tpl->tpl_vars['list']->value['bgcolor'] : null);?>
">
	  <td><input type="hidden" name="id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_id']) ? $_smarty_tpl->tpl_vars['list']->value['drive_id'] : null);?>
"/><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_date']) ? $_smarty_tpl->tpl_vars['list']->value['drive_date'] : null);?>
</td>
	  <td>苏D<?php if ((isset($_smarty_tpl->tpl_vars['list']->value['driveCarNum']) ? $_smarty_tpl->tpl_vars['list']->value['driveCarNum'] : null)==''){?><?php echo (isset($_smarty_tpl->getVariable('busi')->value['car_num']) ? $_smarty_tpl->getVariable('busi')->value['car_num'] : null);?>
<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['driveCarNum']) ? $_smarty_tpl->tpl_vars['list']->value['driveCarNum'] : null);?>
<?php }?></td>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='3'||(isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_startKilo']) ? $_smarty_tpl->tpl_vars['list']->value['drive_startKilo'] : null);?>
</td>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'||(isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='5'){?>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_startHour']) ? $_smarty_tpl->tpl_vars['list']->value['drive_startHour'] : null);?>
点&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_startMinute']) ? $_smarty_tpl->tpl_vars['list']->value['drive_startMinute'] : null);?>
分</td>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='3'||(isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_endKilo']) ? $_smarty_tpl->tpl_vars['list']->value['drive_endKilo'] : null);?>
</td>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_endHour']) ? $_smarty_tpl->tpl_vars['list']->value['drive_endHour'] : null);?>
点&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_endMinute']) ? $_smarty_tpl->tpl_vars['list']->value['drive_endMinute'] : null);?>
分</td>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='3'||(isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_endKilo']) ? $_smarty_tpl->tpl_vars['list']->value['drive_endKilo'] : null)-(isset($_smarty_tpl->tpl_vars['list']->value['drive_startKilo']) ? $_smarty_tpl->tpl_vars['list']->value['drive_startKilo'] : null);?>
</td>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
	  <td><?php echo ((isset($_smarty_tpl->tpl_vars['list']->value['drive_endTime_O']) ? $_smarty_tpl->tpl_vars['list']->value['drive_endTime_O'] : null)-(isset($_smarty_tpl->tpl_vars['list']->value['drive_startTime_O']) ? $_smarty_tpl->tpl_vars['list']->value['drive_startTime_O'] : null))/3600;?>
</td>
	  <?php }?>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_hol']) ? $_smarty_tpl->tpl_vars['list']->value['drive_hol'] : null);?>
</td>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'){?>
	  <td><?php if ((isset($_smarty_tpl->tpl_vars['list']->value['drive_travel']) ? $_smarty_tpl->tpl_vars['list']->value['drive_travel'] : null)==1){?>是<?php }else{ ?>否<?php }?></td>
	  <td><?php if ((isset($_smarty_tpl->tpl_vars['list']->value['drive_travelRoom']) ? $_smarty_tpl->tpl_vars['list']->value['drive_travelRoom'] : null)==1){?>是<?php }else{ ?>否<?php }?></td>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_travelRemarks']) ? $_smarty_tpl->tpl_vars['list']->value['drive_travelRemarks'] : null);?>
</td>
	  <td style="text-align:left;">火食:<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_mealsTimes']) ? $_smarty_tpl->tpl_vars['list']->value['drive_mealsTimes'] : null);?>
次
	  住宿:<?php if ((isset($_smarty_tpl->tpl_vars['list']->value['drive_roomTimes']) ? $_smarty_tpl->tpl_vars['list']->value['drive_roomTimes'] : null)==1){?>是<?php }else{ ?>否<?php }?>
	  路费:<?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_ioll']) ? $_smarty_tpl->tpl_vars['list']->value['drive_ioll'] : null);?>
元</td>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='5'){?>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_travelRemarks']) ? $_smarty_tpl->tpl_vars['list']->value['drive_travelRemarks'] : null);?>
</td>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_specialRemarks']) ? $_smarty_tpl->tpl_vars['list']->value['drive_specialRemarks'] : null);?>
</td>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_trips']) ? $_smarty_tpl->tpl_vars['list']->value['drive_trips'] : null);?>
趟</td>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_money']) ? $_smarty_tpl->tpl_vars['list']->value['drive_money'] : null);?>
元</td>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='4'||(isset($_smarty_tpl->getVariable('busi')->value['paiche_type']) ? $_smarty_tpl->getVariable('busi')->value['paiche_type'] : null)=='5'){?>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['driveDriverName']) ? $_smarty_tpl->tpl_vars['list']->value['driveDriverName'] : null);?>
</td>
	  <?php }?>
	  <td><?php echo (isset($_smarty_tpl->tpl_vars['list']->value['drive_remarks']) ? $_smarty_tpl->tpl_vars['list']->value['drive_remarks'] : null);?>
</td>
	</tr>
	<?php }} ?>	
  </table>
  </div>  
</div>
</form>
<!-->
<script>

var isSearchHidden = 1;
function searchNews() {
  if(isSearchHidden == 1) {
    $("#searchTopic_div").slideDown("fast");
    isSearchHidden = 0;
  }else {
    $("#searchTopic_div").slideUp("fast");
    isSearchHidden = 1;
  }
}

</script>
<!-->
</body>
</html>