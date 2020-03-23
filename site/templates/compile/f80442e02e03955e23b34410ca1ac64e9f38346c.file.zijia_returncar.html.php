<?php /* Smarty version Smarty-3.0.4, created on 2019-07-10 17:11:38
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/zijia_linshi/zijia_returncar.html" */ ?>
<?php /*%%SmartyHeaderCode:183365d25abcac12196-36632281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f80442e02e03955e23b34410ca1ac64e9f38346c' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/zijia_linshi/zijia_returncar.html',
      1 => 1562749879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183365d25abcac12196-36632281',
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
<script language="javascript" type="text/javascript" src="../../../js/My97DatePicker/WdatePicker.js"></script>
</head>
<body>
<form method="post" action="returncar_accept.php" name="form1" id="form1">
<input type="hidden" name="pid" value="<?php echo $_smarty_tpl->getVariable('pid')->value;?>
" />
<div class="so_main">
  <div class="page_tit_1">自驾还车</div>
  
  <div class="page_tit_2">
  	车辆：<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
-<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_color']) ? $_smarty_tpl->getVariable('list')->value['car_color'] : null);?>
-<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_brand']) ? $_smarty_tpl->getVariable('list')->value['car_brand'] : null);?>
-<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_type']) ? $_smarty_tpl->getVariable('list')->value['car_type'] : null);?>
&nbsp;&nbsp;
  </div>
		<div class="form2">


			<dl class="lineD">
				<dt>约定用车时间：</dt>
				<dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate_All'] : null);?>
到<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_endDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_endDate_All'] : null);?>
<input type="hidden" name="paiche_endDate" id="paiche_endDate" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_endDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_endDate_All'] : null);?>
"/>
				<input type="hidden" name="diff_day" id="diff_day" value="<?php echo (isset($_smarty_tpl->getVariable('overtime')->value['day']) ? $_smarty_tpl->getVariable('overtime')->value['day'] : null);?>
"/>
				</dd>
			</dl>
			<dl class="lineD">
				<dt>实际开始时间：</dt>
				<dd><input type="text" name="changecar_times" id="changecar_times" size="16" value="<?php echo $_smarty_tpl->getVariable('changecar_times')->value;?>
" />
				</dd>
			</dl>
			<dl class="lineD">
				<dt>实际还车时间：</dt>
				<dd><input type="text" name="return_endDate" id="return_endDate" size="16" value="<?php echo $_smarty_tpl->getVariable('nowtime')->value;?>
" onclick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<span class="redstar" id="showerr2">
					<?php if ($_smarty_tpl->getVariable('nowtime2')->value>(isset($_smarty_tpl->getVariable('list')->value['paiche_endDate']) ? $_smarty_tpl->getVariable('list')->value['paiche_endDate'] : null)){?>超时：<?php if ((isset($_smarty_tpl->getVariable('overtime')->value['day']) ? $_smarty_tpl->getVariable('overtime')->value['day'] : null)>0){?><?php echo (isset($_smarty_tpl->getVariable('overtime')->value['day']) ? $_smarty_tpl->getVariable('overtime')->value['day'] : null);?>
天<?php }?><?php if ((isset($_smarty_tpl->getVariable('overtime')->value['hour']) ? $_smarty_tpl->getVariable('overtime')->value['hour'] : null)>0){?><?php echo (isset($_smarty_tpl->getVariable('overtime')->value['hour']) ? $_smarty_tpl->getVariable('overtime')->value['hour'] : null);?>
小时<?php }?><?php if ((isset($_smarty_tpl->getVariable('overtime')->value['min']) ? $_smarty_tpl->getVariable('overtime')->value['min'] : null)>0){?><?php echo (isset($_smarty_tpl->getVariable('overtime')->value['min']) ? $_smarty_tpl->getVariable('overtime')->value['min'] : null);?>
分<?php }?><?php if ((isset($_smarty_tpl->getVariable('overtime')->value['sec']) ? $_smarty_tpl->getVariable('overtime')->value['sec'] : null)>0){?><?php echo (isset($_smarty_tpl->getVariable('overtime')->value['sec']) ? $_smarty_tpl->getVariable('overtime')->value['sec'] : null);?>
秒<?php }?><?php }?></span></dd>
			</dl>

			<dl class="lineD">
				<dt><span class="redstar">*</span>开始公里数：</dt>
				<dd><input type="text" name="settle_startKm" id="settle_startKm" size="18"/>公里
				</dd>
			</dl>

			<dl class="lineD">
				<dt><span class="redstar">*</span>结束公里数：</dt>
				<dd><input type="text" name="settle_endKm" id="settle_endKm" size="18" onchange="jisuan()" />公里

					<?php if ($_smarty_tpl->getVariable('totalChangeCarKilo')->value!=0){?>(注：换车一共行驶了<?php echo $_smarty_tpl->getVariable('totalChangeCarKilo')->value;?>
公里) <?php }?>
				</dd>
			</dl>

			<?php if ($_smarty_tpl->getVariable('totalChangeCarKilo')->value!=0){?>
			<dl class="lineD">
				<dt><span class="redstar">*</span>换车行驶公里数：</dt>
				<dd><input type="text" name="totalChangeCarKilo" id="totalChangeCarKilo" size="18" value="<?php echo $_smarty_tpl->getVariable('totalChangeCarKilo')->value;?>
" readonly/>公里
				</dd>
			</dl>
			<?php }?>

			<dl class="lineD">
				<dt>共计行驶：</dt>
				<dd>
				<input type="text" name="settle_totalKm" id="settle_totalKm" value="" size="4" readonly/>公里


				&nbsp;&nbsp;结算公里数：
				<input type="text" name="settle_totalcalKm" id="settle_totalcalKm" value="" size="4"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="redstar" id="showerr" style="display:none;">行驶公里数异常</span>
			</dd>
			</dl>

	<?php if ((isset($_smarty_tpl->getVariable('list')->value['plan_chaokm']) ? $_smarty_tpl->getVariable('list')->value['plan_chaokm'] : null)=="y"){?>
			<dl class="lineD">
				<dt>超公里数：</dt>
				<dd><input type="text" name="overKm" id="overKm" size="18"  />公里×<input type="text" name="paiche_overKm" id="paiche_overKm" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_overKm'] : null);?>
" size="3"/>元&nbsp;&nbsp;
		超公里费用：
				<input type="text" name="overKmMoney" id="overKmMoney" size="8" value=""  class="grey noborder"/>元
				</dd>
			</dl>
	<?php }?>

	
			<dl class="lineD">
				<dt>超时：</dt>
				<dd><input type="text" name="settle_overTime" id="settle_overTime" size="18" />小时×
					<input type="text" name="paiche_overTime" id="paiche_overTime" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['plan_chaoshi']) ? $_smarty_tpl->getVariable('list')->value['plan_chaoshi'] : null);?>
" size="3" readonly/>元&nbsp;&nbsp;
					超时费用：
				<input type="text" name="overTimeMoney" id="overTimeMoney" size="8" value="" onfocus="this.blur()" class="grey noborder" readonly/>元
				</dd>
			</dl>
	

	

	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('chargelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
			<dl class="lineD">
				<dt><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null);?>
：</dt>
				<dd><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null);?>
元，已收：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
元，<input type="hidden" name="charge_id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
				<input type="hidden" name="charge_money[]" id="charge_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
"/>
				</dd>
			</dl>
	<?php }} ?>
			
			<dl class="lineD">
				<dt>优惠金额：</dt>
				<dd><input type="text" name="settle_favor" id="settle_favor" size="8"/>元&nbsp;&nbsp;优惠原因：<input type="text" name="settle_favorreason" id="settle_favorreason" size="48"/>
				</dd>
			</dl>
			<dl class="lineD">
				<dt>还需向客户收取：</dt>
				<dd><input type="text" name="debt" id="debt" size="8" value="" class="red noborder" onfocus="this.blur()"/>元
				</dd>
			</dl>

	
		</div>

  <div class="Toolbar_inbox">
    <a href="javascript:void(0);" class="btn_a" name="btn_save" id="btn_save" onclick="ok();"><span>确定</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="closebox();"><span>关闭</span></a>   	
  </div> 
</div>
</form>
<script type="text/javascript" src="../../../js/account.js"></script>
<!-->
<script>
function jisuan(){
	var settle_startKm=$("#settle_startKm").val();
	var settle_endKm=$("#settle_endKm").val();
	if(!(parseInt(settle_startKm)>0)){
		alert('请填写车辆开始公里数！');
		$("#settle_endKm").val("");
	}
}
</script>
<!-->
</body>
</html>