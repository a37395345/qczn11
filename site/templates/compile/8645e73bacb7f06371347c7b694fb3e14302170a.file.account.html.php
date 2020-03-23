<?php /* Smarty version Smarty-3.0.4, created on 2019-05-30 14:54:21
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/busilong/account.html" */ ?>
<?php /*%%SmartyHeaderCode:70795cef7e1d402808-96403709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8645e73bacb7f06371347c7b694fb3e14302170a' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/busilong/account.html',
      1 => 1559199251,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70795cef7e1d402808-96403709',
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


</head>
<body>

<form method="post" action="list.php" name="form1" id="form1">
<input type="hidden" id="op" name="op" value="<?php echo $_smarty_tpl->getVariable('op')->value;?>
" />
<input type="hidden" name="pid" value="<?php echo $_smarty_tpl->getVariable('pid')->value;?>
" />
<input type="hidden" name="pids" value="<?php echo $_smarty_tpl->getVariable('pids')->value;?>
" />
<div class="so_main">
  <div class="page_tit_1"><?php echo $_smarty_tpl->getVariable('PAGETITLE')->value;?>
</div>
  <?php if ($_smarty_tpl->getVariable('op')->value=="returncar"||$_smarty_tpl->getVariable('op')->value=="givecar"){?>
  <div class="page_tit_2">车辆：<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
-<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_color']) ? $_smarty_tpl->getVariable('list')->value['car_color'] : null);?>
-<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_brand']) ? $_smarty_tpl->getVariable('list')->value['car_brand'] : null);?>
-<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_type']) ? $_smarty_tpl->getVariable('list')->value['car_type'] : null);?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->getVariable('op')->value=="givecar"){?>驾驶员：<?php echo (isset($_smarty_tpl->getVariable('list')->value['siji']) ? $_smarty_tpl->getVariable('list')->value['siji'] : null);?>
<?php }?><?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_brother']) ? $_smarty_tpl->getVariable('list')->value['paiche_brother'] : null)>0){?>(调车公司用车:<?php echo (isset($_smarty_tpl->getVariable('list')->value['bro_name']) ? $_smarty_tpl->getVariable('list')->value['bro_name'] : null);?>
)<?php }?></div>
  <?php }?>


<?php if ($_smarty_tpl->getVariable('op')->value=="returncar"||$_smarty_tpl->getVariable('op')->value=="givecar"){?>
<input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('op')->value;?>
_accept" />
<input type="hidden" name="b_id" id="b_id" value="<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
" />
<input type="hidden" name="paicheCar" id="paicheCar" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paicheCar']) ? $_smarty_tpl->getVariable('list')->value['paicheCar'] : null);?>
" />
<input type="hidden" name="paicheDriver" id="paicheDriver" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paicheDriver']) ? $_smarty_tpl->getVariable('list')->value['paicheDriver'] : null);?>
" />
<input type="hidden" name="paiche_shunt" id="paiche_shunt" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shunt']) ? $_smarty_tpl->getVariable('list')->value['paiche_shunt'] : null);?>
" />
<input type="hidden" name="paiche_unlimitKm" id="paiche_unlimitKm" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null);?>
" />
<input type="hidden" name="youfei" id="youfei" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['youfei']) ? $_smarty_tpl->getVariable('list')->value['youfei'] : null);?>
" />
<input type="hidden" name="paiche_limitKm" id="paiche_limitKm" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_limitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_limitKm'] : null);?>
" />
<input type="hidden" name="paiche_unlimitTime" id="paiche_unlimitTime" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitTime'] : null);?>
" />
<input type="hidden" name="totalChangeCarKilo" id="totalChangeCarKilo" value="<?php echo $_smarty_tpl->getVariable('totalChangeCarKilo')->value;?>
" />
<input type="hidden" name="paiche_name2" id="paiche_name2" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paicheCom']) ? $_smarty_tpl->getVariable('list')->value['paicheCom'] : null);?>
" />

<div class="form2">
	<dl class="lineD">
	    <dt>单位名称：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['client_name']) ? $_smarty_tpl->getVariable('list')->value['client_name'] : null);?>
</dd>
   </dl>
   <dl class="lineD">
          <dt>开始日期：</dt>
          <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate_format']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate_format'] : null);?>
<input type="hidden" name="startdate" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate_format']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate_format'] : null);?>
" /></dd>
   </dl>
   <dl class="lineD">
          <dt>截止日期：</dt>
          <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_endDate_format']) ? $_smarty_tpl->getVariable('list')->value['paiche_endDate_format'] : null);?>
<input type="hidden" name="enddate" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_endDate_format']) ? $_smarty_tpl->getVariable('list')->value['paiche_endDate_format'] : null);?>
" /></dd>
   </dl>
	<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_shunt']) ? $_smarty_tpl->getVariable('list')->value['paiche_shunt'] : null)==0){?>
	<dl class="lineD">
		<dt><span class="redstar">*</span>开始公里数：</dt>
		<dd><input type="text" name="settle_startKm" id="settle_startKm" <?php if ($_smarty_tpl->getVariable('changecar_kiloBNow')->value!=0){?> value="<?php echo $_smarty_tpl->getVariable('changecar_kiloBNow')->value;?>
" readonly class="grey" <?php }?> size="18" />公里
		</dd>
	</dl>
	<dl class="lineD">
		<dt><span class="redstar">*</span>结束公里数：</dt>
		<dd><input type="text" name="settle_endKm" id="settle_endKm" size="18" />公里<?php if ($_smarty_tpl->getVariable('changecar_kiloBNow')->value!=0){?>(注：换车一共行驶了<?php echo $_smarty_tpl->getVariable('totalChangeCarKilo')->value;?>
公里) <?php }?>
		</dd>
	</dl>
	<dl class="lineD">
		<dt>共计行驶：</dt>
		<dd><input type="text" name="settle_totalKm" id="settle_totalKm" value="" size="4" onFocus="this.blur()"/>公里&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="redstar" id="showerr" style="display:none;">行驶公里数异常</span></dd>
	</dl>

	<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)!="Y"){?>
	<dl class="lineD">
	    <dt>前月累计行驶：</dt>
	    <dd><input type="text" name="settle_qianMonth" id="settle_qianMonth" size="6"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_qianMonth']) ? $_smarty_tpl->getVariable('list')->value['settle_qianMonth'] : null);?>
" />公里
	    </dd>
	</dl>
	<dl class="lineD">
		<dt>超公里数：</dt>
		<dd><input type="text" name="overKm" id="overKm" size="18" onFocus="this.blur()" class="grey noborder" />公里×<input type="text" name="paiche_overKm" id="paiche_overKm" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_overKm'] : null);?>
" size="3" />元&nbsp;&nbsp;
		超公里费用：<input type="text" name="overKmMoney" id="overKmMoney" size="8" value="" onFocus="this.blur()" class="grey noborder" />元
		</dd>
	</dl>
	<?php }?>

	<?php if ((isset($_smarty_tpl->getVariable('list')->value['youfei']) ? $_smarty_tpl->getVariable('list')->value['youfei'] : null)!="Y"){?>
	<dl class="lineD">
		<dt>油费：</dt>
		<dd>
			每100公里<input style="width: 40px" type="text" name="youfei_shen" id="youfei_shen" size="18" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['youfei_shen']) ? $_smarty_tpl->getVariable('list')->value['youfei_shen'] : null);?>
"  />升&nbsp;&nbsp;

			油价：<input type="text" name="youfei_danjia" id="youfei_danjia" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['youfei_danjia']) ? $_smarty_tpl->getVariable('list')->value['youfei_danjia'] : null);?>
" size="3" />元/升&nbsp;&nbsp;&nbsp;&nbsp;

			总计：<input type="text" name="youfei_zongji" id="youfei_zongji" size="18"  class="grey noborder" readonly="readonly"/>元
	
		</dd>
	</dl>
	<?php }?>

	
	<?php }else{ ?>
	<dl class="lineD">
	    <dt>支付给调车公司的租金：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['shunt_rent']) ? $_smarty_tpl->getVariable('list')->value['shunt_rent'] : null);?>
元</dd>
	</dl>
	<dl class="lineD">
	    <dt>调车公司收客户金额：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['shunt_rented']) ? $_smarty_tpl->getVariable('list')->value['shunt_rented'] : null);?>
元</dd>
	</dl>
	<?php }?>

	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('itemlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
	<dl class="lineD">
		<dt><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_name']) ? $_smarty_tpl->tpl_vars['row']->value['item_name'] : null);?>
</dt>
		<dd><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['item_calcu']) ? $_smarty_tpl->tpl_vars['row']->value['item_calcu'] : null)=="1"){?><input type="hidden" name="item_id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
"><input type="hidden" name="item_calcu[]" id="item_calcu_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_calcu']) ? $_smarty_tpl->tpl_vars['row']->value['item_calcu'] : null);?>
">
		<input type="hidden" name="item_caltype[]" id="item_caltype_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_caltype']) ? $_smarty_tpl->tpl_vars['row']->value['item_caltype'] : null);?>
">
		&nbsp;&nbsp;

		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['item_caltype']) ? $_smarty_tpl->tpl_vars['row']->value['item_caltype'] : null)==0){?>
		<input type="text" name="item_money[]" id="item_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
" size="4" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row']->value['conv_result'] : null);?>
" />元

		<input type="hidden" name="item_price[]" id="item_price_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
" size="4" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row']->value['conv_result'] : null);?>
"/>

		<input type="hidden" name="item_number[]" id="item_number_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
" size="2" value="0" />
		
		<?php }else{ ?>


		<input type="hidden" name="item_price[]" id="item_price_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
" size="4" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row']->value['conv_result'] : null);?>
"/>

		<input type="text" name="item_number[]" id="item_number_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
" size="2" value="" />*<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row']->value['conv_result'] : null);?>
元/<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_unit']) ? $_smarty_tpl->tpl_vars['row']->value['item_unit'] : null);?>
=
		<input type="text" name="item_money[]" id="item_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
" size="4" value="" onFocus="this.blur()"/>元
		<?php }?>
		<?php }else{ ?>
		<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row']->value['conv_result'] : null);?>

		<?php }?>
		
		</dd>
	</dl>
	<?php }} ?>
	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('chargelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
	<dl class="lineD">
		<dt><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null);?>
：</dt>
		<dd><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null);?>
元<input type="hidden" name="charge_id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
		<input type="hidden" name="charge_money[]" id="charge_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null)-(isset($_smarty_tpl->getVariable('list')->value['shunt_rented']) ? $_smarty_tpl->getVariable('list')->value['shunt_rented'] : null);?>
" />
		<input type="hidden" name="paiche_rent" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null);?>
">
		</dd>
	</dl>
	<?php }} ?>
	<dl class="lineD" >
	    <dt>其他费用：</dt>
	    <dd>
	    <div id="divcharges">
	    <ul>
          <li>编号</li><li>收费项目</li><li>约定金额</li><li></li><li>删除</li>
        </ul>
        
	    </div><div style="padding:5px 0 0 342px;"><a href="javascript:select_charges();"><img src="../../../css/list.gif" height="15" class="peoplePic" /></a></div>
	    </dd>
	</dl>
 	<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_shunt']) ? $_smarty_tpl->getVariable('list')->value['paiche_shunt'] : null)==0){?>
	<dl class="lineD">
		<dt>合计金额：</dt>
		<dd><input type="text" name="total" id="total" value="<?php echo $_smarty_tpl->getVariable('total')->value;?>
" size="5" readonly/></dd>
	</dl>
	<dl class="lineD">
		<dt>优惠金额：</dt>
		<dd><input type="text" name="favor" id="favor" value="0" size="5" /></dd>
	</dl>
	<dl class="lineD">
		<dt>实际开票金额：</dt>
		<dd><input type="text" name="settle_billMoney" id="settle_billMoney" value="<?php echo $_smarty_tpl->getVariable('total')->value;?>
" size="6"/></dd>
	</dl>
	<dl class="lineD">
		<dt>发票号码：</dt>
		<dd><input type="text" name="settle_billNum" size="15"/></dd>
	</dl>
	<dl class="lineD">
		<dt>开票日期：</dt>
		<dd><input type="text" name="settle_billDate" size="16" onClick="calendar.show(this);" readonly="readonly" /></dd>
	</dl>
	
	<?php }?>
</div>
<?php }?>
  <div class="Toolbar_inbox">
    <a href="javascript:void(0);" class="btn_a" name="btn_save" id="btn_save" onclick="ok();"><span>确定</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="closebox();"><span>关闭</span></a>   	
  </div> 
</div>
</form>
<!-->
<script>
$(document).ready(function(){
    $("#settle_startKm,#settle_endKm,#settle_qianMonth,#paiche_overKm,#paiche_overTime,#favor").live('input propertychange',function(){
		compute();
	});
	$("input[name=money[]]").live('input propertychange',function(){
		compute();
	});
	$("input[name=item_number[]]").live('input propertychange',function(){
			compute();
	});
	$("input[name=item_money[]]").live('input propertychange',function(){
			compute();
	});
});
function select_charges(strsource){
	demo_iframe('../business/selectcharge.php?busi_type='+$("#b_id").val()+'&s='+strsource,'选择收费项目',700,400,'login_js');
}
function del(id){
	if ($("#D"+id).val()==0){//删除
		$("#U"+id).find("li").css("text-decoration","line-through");
		$("#D"+id).val(1);
	}else{//恢复
		$("#U"+id).find("li").css("text-decoration","none");
		$("#D"+id).val(0);
	}
	compute();
}
function compute(){//还车计算结果
	var nTotal_ar=0;
	
	if ($("#paiche_shunt").val()==0){




		var paiche_unlimitKm=$("#paiche_unlimitKm").val();//是否限制公里数
		var settle_startKm=0;//开始公里数
		var settle_endKm=0;//结束公里数
		if ($("#settle_startKm").val()!=""){
			settle_startKm=parseFloat(textTrim($("#settle_startKm").val()),10);//开始公里数
		}
		if ($("#settle_endKm").val()!=""){
			settle_endKm=parseFloat(textTrim($("#settle_endKm").val()),10);//结束公里数
		}
		var totalChangeCarKilo=0;//换车累计公里
		if ($("#totalChangeCarKilo").val()!=""){
			totalChangeCarKilo=parseFloat(textTrim($("#totalChangeCarKilo").val()),10);
		}
		$("#settle_totalKm").val(settle_endKm-settle_startKm+totalChangeCarKilo);//总计公里数

		if (settle_endKm-settle_startKm+totalChangeCarKilo<0 || settle_endKm-settle_startKm+totalChangeCarKilo>15000){
		    $("#showerr").css("display","inline-table");
		}else{
		    $("#showerr").css("display","none");
		}
		if (paiche_unlimitKm!="Y"){
		    var settle_qianMonth=parseFloat(textTrim($("#settle_qianMonth").val()),10);//前月累计行驶
			var limitKm=parseFloat(textTrim($("#paiche_limitKm").val()),10); //限制公里数
			var overKmPrice=parseFloat(textTrim($("#paiche_overKm").val()),10);//超公里每公里金额
			
			overKm=settle_endKm-settle_startKm+settle_qianMonth+totalChangeCarKilo-limitKm;
			if (overKm<0) overKm=0;
			$("#overKm").val(overKm);//超公里数
			$("#overKmMoney").val(overKm*overKmPrice);//超公里费用
			nTotal_ar+=overKm*overKmPrice;
		}
		var youfei=$("#youfei").val();
		if(youfei!='Y'){
			
			var youfei_shen=parseFloat(textTrim($("#youfei_shen").val()),10);
			var youfei_danjia=parseFloat(textTrim($("#youfei_danjia").val()),10);
			var youfei_zongji=((settle_endKm-settle_startKm+totalChangeCarKilo)*youfei_shen*youfei_danjia)/100;
			$('#youfei_zongji').val(youfei_zongji);
			

		}
	}
	
	var nTotal_item=0;
	var ncal=0;
	$.each($('input[name=item_id[]]'), function(i, n){
		if ($(n).val()>0){
			nid=$(n).val();
			if ($('#item_calcu_'+nid).val()=="1"){//需要计算的
				if ($('#item_caltype_'+nid).val()=="0"){//固定值
					nTotal_item+= $('#item_money_'+nid).val()=="" ? 0 : parseFloat($('#item_money_'+nid).val());
				}else{
					ncal=$('#item_number_'+nid).val()=="" ? 0 : parseFloat($('#item_number_'+nid).val())*parseFloat($('#item_price_'+nid).val());
					$('#item_money_'+nid).val(ncal);
					nTotal_item+= ncal;
				}
			}
		}
	});
	
	var nTotal_charge=0;
	$.each($('input[name=charge_id[]]'), function(i, n){
		if ($(n).val()>0){
			nid=$(n).val();
			nTotal_charge+= $('#charge_money_'+nid).val()=="" ? 0 : parseFloat($('#charge_money_'+nid).val());
		}
	});
	
	var nTotal_newcharge=0;
	$.each($('input[name=Cid[]]'), function(i, n){
		if ($(n).val()>0){
			nid=$(n).val();
			if ($('#D'+nid).val()==0){//未删除
				nTotal_newcharge+= $('#money_'+nid).val()=="" ? 0 : parseFloat($('#money_'+nid).val());
			}				
		}
	});
		
	nTotal_ar+=nTotal_item+nTotal_charge+nTotal_newcharge;
	$("#total").val(nTotal_ar);
	
	if ($("#favor").val()=="") $("#favor").val(0);
	nTotal_ar -= parseFloat(textTrim($("#favor").val()),10);
	$("#settle_billMoney").val(nTotal_ar);
	
}
function ok(){
    $("#btn_save").attr("disabled", true);
	var op=$("#op").val();
	
	if (op=="returncar" || op=="givecar"){
		if ($("#paiche_shunt").val()==0){
			if ($("#settle_startKm").val()==""){
				alert("请输入开始公里数！");
				$('#settle_startKm').focus();
				$("#btn_save").removeAttr("disabled");
				return false;
			}
			if ($("#settle_endKm").val()==""){
				alert("请输入结束公里数！");
				$('#settle_endKm').focus();
				$("#btn_save").removeAttr("disabled");
				return false;
			}
		}
		
		if(!confirm('请仔细核对，一旦提交就无法修改了，确定提交吗？')){
		    $("#btn_save").removeAttr("disabled");
		    return false;
		}
	}
	
	
	
	
	$("#form1").submit();
	
	//window.parent.window.location.reload();
//window.parent.window.jBox.close();
}
</script>
<!-->
</body>
</html>