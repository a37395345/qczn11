<?php /* Smarty version Smarty-3.0.4, created on 2019-10-11 14:34:53
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/business/account2.html" */ ?>
<?php /*%%SmartyHeaderCode:15483982925da0228d9eab86-54103619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f21091e425addcc335d070607f2d88bdf49e54a' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/business/account2.html',
      1 => 1569749206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15483982925da0228d9eab86-54103619',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<link href="../../../css/style.css" rel="stylesheet" type="text/css">
<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/date_select.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
<script type="text/javascript" src="../../../js/My97DatePicker/WdatePicker.js"></script>
</head>
<body>
<form method="post" action="account.php" name="form1" id="form1">
<input type="hidden" id="op" name="op" value="<?php echo $_smarty_tpl->getVariable('op')->value;?>
" />
<input type="hidden" name="pid" value="<?php echo $_smarty_tpl->getVariable('pid')->value;?>
" />
<input type="hidden" name="pids" value="<?php echo $_smarty_tpl->getVariable('pids')->value;?>
" />
<div class="so_main">
  <div class="page_tit_1"><?php echo $_smarty_tpl->getVariable('PAGETITLE')->value;?>
</div>
  <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_shunt']) ? $_smarty_tpl->getVariable('list')->value['paiche_shunt'] : null)==1){?>
  <div class="page_tit_2">调车公司：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['bro_name']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['bro_name'] : null);?>
&nbsp;&nbsp;司机：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_driver']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_driver'] : null);?>
&nbsp;&nbsp;司机电话：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_driverPhone']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_driverPhone'] : null);?>
</div>
  <?php }else{ ?>
  <div class="page_tit_2">车辆：<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
-<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_color']) ? $_smarty_tpl->getVariable('list')->value['car_color'] : null);?>
-<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_brand']) ? $_smarty_tpl->getVariable('list')->value['car_brand'] : null);?>
-<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_type']) ? $_smarty_tpl->getVariable('list')->value['car_type'] : null);?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->getVariable('op')->value=="givecar"){?>驾驶员：<?php echo (isset($_smarty_tpl->getVariable('list')->value['siji']) ? $_smarty_tpl->getVariable('list')->value['siji'] : null);?>
<?php }?><?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_brother']) ? $_smarty_tpl->getVariable('list')->value['paiche_brother'] : null)>0){?>(调车公司用车:<?php echo (isset($_smarty_tpl->getVariable('list')->value['bro_name']) ? $_smarty_tpl->getVariable('list')->value['bro_name'] : null);?>
)<?php }?></div>
  <?php }?>
<?php if ($_smarty_tpl->getVariable('op')->value=="changedriver"){?>
<input type="hidden" name="task" value="changedriver_accept" />
<input type="hidden" name="b_id" id="b_id" value="<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
" />
<div class="form2">
	<dl class="lineD">
      <dt>用车开始时间：</dt>
      <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate_All'] : null);?>
</dd>
    </dl>
    <dl class="lineD">
      <dt>用车结束时间：</dt>
      <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_endDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_endDate_All'] : null);?>
</dd>
    </dl>
	<?php if ($_smarty_tpl->getVariable('busitype')->value=='1'||$_smarty_tpl->getVariable('busitype')->value=='2'){?>
    <dl class="lineD">
	    <dt>开车线路：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_line']) ? $_smarty_tpl->getVariable('list')->value['paiche_line'] : null);?>
</dd>
	</dl>
	<?php }?>
	<dl class="lineD">
	    <dt>特殊说明：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_specialRemarks']) ? $_smarty_tpl->getVariable('list')->value['paiche_specialRemarks'] : null);?>
</dd>
	</dl>
	<dl class="lineD">
    	<dt>客户要求车型：</dt>
    	<dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_requestCar']) ? $_smarty_tpl->getVariable('list')->value['paiche_requestCar'] : null);?>
</dd>
  	</dl>
  	<dl class="lineD">
    	<dt>原司机：</dt>
    	<dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['siji']) ? $_smarty_tpl->getVariable('list')->value['siji'] : null);?>
</dd>
  	</dl>
    <?php if ($_smarty_tpl->getVariable('busitype')->value=='2'||$_smarty_tpl->getVariable('busitype')->value=='4'||$_smarty_tpl->getVariable('busitype')->value=='5'){?>
    <dl class="lineD" id="showDrive">
	    <dt>选择新司机：</dt>
	    <dd><input type="text" name="paicheDriver" id="paicheDriver" size="18" onFocus="this.blur()" value="" /> 
	         <input type="button" value="清 空" onClick="clearValue('paicheDriver','paicheDriver2')" />&nbsp;
	         关键字：<input type="text" name="paicheDriverKey" id="paicheDriverKey" size="10" />
	    <input type="hidden" name="paicheDriver2" id="paicheDriver2" value="" />
	    <a href="javascript:select_driver();"><img src="../../../css/driver.gif" height="15" class="peoplePic" /></a>
	    </dd>
    </dl>
    <?php }?>
    <?php if ($_smarty_tpl->getVariable('busitype')->value==14||$_smarty_tpl->getVariable('busitype')->value==15){?>
	<dl class="lineD">
	    <dt>生效日期：</dt>
	    <dd><input type="text" name="start_Date" id="start_Date" size="12" value="<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
" onClick="calendar.show(this)" /></dd>
	</dl>
	<?php }?>  
</div>
<?php }?>



<?php if ($_smarty_tpl->getVariable('op')->value=="changeroute"){?>
<input type="hidden" name="task" value="changeroute_accept" />
<input type="hidden" name="b_id" id="b_id" value="<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
" />
<input type="hidden" name="paiche_shunt" id="paiche_shunt" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shunt']) ? $_smarty_tpl->getVariable('list')->value['paiche_shunt'] : null);?>
" />
<input type="hidden" name="paiche_brother" id="paiche_brother" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_brother']) ? $_smarty_tpl->getVariable('list')->value['paiche_brother'] : null);?>
" />
<div class="form2">
	<dl class="lineD">
      <dt>用车开始时间：</dt>
      <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate_All'] : null);?>
</dd>
    </dl>
    <dl class="lineD">
      <dt>预计结束时间：</dt>
      <dd><input type="hidden" name="old_endDate" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_endDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_endDate_All'] : null);?>
" /> <input type="text" name="paiche_endDate" id="paiche_endDate" size="18" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_endDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_endDate_All'] : null);?>
" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" readonly="readonly"/></dd>
    </dl>
	
	<dl class="lineD">
	    <dt>限制公里数：</dt>
	    <dd><input type="text" name="paiche_limitKm" id="paiche_limitKm" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_limitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_limitKm'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)=="Y"){?>readonly<?php }else{ ?><?php }?>/>&nbsp;
	    超公里费用：<input type="text" name="paiche_overKm" id="paiche_overKm" size="6"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_overKm'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)=="Y"){?>readonly<?php }else{ ?><?php }?> />/公里&nbsp;
	    不限公里<input type="checkbox" id="paiche_unlimitKm" name="paiche_unlimitKm" onClick="unlimited(this,'paiche_limitKm','paiche_overKm')" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)=="Y"){?>checked<?php }else{ ?><?php }?> value="Y" />
	    <input type="hidden" name="old_paiche_limitKm" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_limitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_limitKm'] : null);?>
" /><input type="hidden" name="old_paiche_overKm" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_overKm'] : null);?>
" /><input type="hidden" name="old_paiche_unlimitKm" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null);?>
" />
	    </dd>
	</dl>
	<dl class="lineD">
	    <dt>特殊说明：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_specialRemarks']) ? $_smarty_tpl->getVariable('list')->value['paiche_specialRemarks'] : null);?>
</dd>
	</dl>
	<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_shunt']) ? $_smarty_tpl->getVariable('list')->value['paiche_shunt'] : null)==1){?>
	<dl class="lineD">
    	<dt>调车公司：</dt>
    	<dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['bro_name']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['bro_name'] : null);?>
</dd>
  	</dl>
  	<dl class="lineD">
	    <dt>租金：</dt>
	    <dd><input type="text" name="shunt_rent" id="shunt_rent" size="8"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['shunt_rent']) ? $_smarty_tpl->getVariable('list')->value['shunt_rent'] : null);?>
"/></dd>
	</dl>
	<dl class="lineD">
	    <dt>调车公司收客户金额：</dt>
	    <dd>
	    <input type="text" name="shunt_rented" id="shunt_rented" size="8"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['shunt_rented']) ? $_smarty_tpl->getVariable('list')->value['shunt_rented'] : null);?>
"/>   
		</dd>
	</dl>
	<?php }else{ ?>
  	<dl class="lineD">
    	<dt>司机：</dt>
    	<dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['siji']) ? $_smarty_tpl->getVariable('list')->value['siji'] : null);?>
</dd>
  	</dl>
  	<?php }?>
  	<?php if ($_smarty_tpl->getVariable('busitype')->value=='1'||$_smarty_tpl->getVariable('busitype')->value=='2'){?>
    <dl class="lineD">
	    <dt>原线路：</dt>
	    <dd><input type="hidden" name="old_paiche_line" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_line']) ? $_smarty_tpl->getVariable('list')->value['paiche_line'] : null);?>
" /><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_line']) ? $_smarty_tpl->getVariable('list')->value['paiche_line'] : null);?>
</dd>
	</dl>
	<?php }?>
  	<dl class="lineD">
	    <dt><span class="redstar">*</span>新线路：</dt>
	    <dd><textarea name="paiche_line" id="paiche_line" cols="70" rows="3"></textarea></dd>
	</dl>
    
</div>
<div class="list">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <?php if ($_smarty_tpl->getVariable('chargelist')->value){?>
  <tr>
    <th style="width:30px;">序号	</th>
	<th>收费项目</th>
	<th>原约定金额</th>
	<th>调整后金额</th>
	<th>已收金额</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('chargelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
    	<td><input type="hidden" name="charge_id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null);?>
</td>
	  	<td><input type="hidden" name="old_conv_money[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null);?>
" /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null);?>
</td>
		<td><input type="text" name="conv_money[]" id="conv_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null);?>
" size="10" /></td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
</td>
  </tr>
  <?php }} ?>
  <?php $_tmp1=(isset($_smarty_tpl->getVariable('list')->value['paiche_brother']) ? $_smarty_tpl->getVariable('list')->value['paiche_brother'] : null);?><?php if (!empty($_tmp1)){?>
  <tr overstyle='on' id="badge_3">
    	<td>2</td>
	  	<td>我公司报价</td>
	  	<td><input type="hidden" name="old_shunt_rent" value="<?php echo -1*(isset($_smarty_tpl->getVariable('list')->value['shunt_rent']) ? $_smarty_tpl->getVariable('list')->value['shunt_rent'] : null);?>
" /><?php echo -1*(isset($_smarty_tpl->getVariable('list')->value['shunt_rent']) ? $_smarty_tpl->getVariable('list')->value['shunt_rent'] : null);?>
</td>
		<td><input type="text" name="shunt_rent" id="shunt_rent" value="<?php echo -1*(isset($_smarty_tpl->getVariable('list')->value['shunt_rent']) ? $_smarty_tpl->getVariable('list')->value['shunt_rent'] : null);?>
" size="10" /></td>
		<td>0</td>
  </tr>
  <?php }?>
  <?php }?>
 </table>
</div>
<?php }?>
  <div class="Toolbar_inbox">
    <a href="javascript:void(0);" class="btn_a" onclick="ok();"><span>确定</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="closebox();"><span>关闭</span></a>   	
  </div> 
</div>
</form>
<script type="text/javascript" src="../../../js/account.js"></script>
<!-->
<script>

</script>
<!-->
</body>
</html>