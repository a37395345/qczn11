<?php /* Smarty version Smarty-3.0.4, created on 2019-10-25 09:39:24
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/busilong/create.html" */ ?>
<?php /*%%SmartyHeaderCode:111625db2524c2bbf88-99954137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5facf351fe184575bfd04f15a1aa9eb607c55778' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/busilong/create.html',
      1 => 1571707185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111625db2524c2bbf88-99954137',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>管理后台</title>
<link href="../../../css/style.css" rel="stylesheet" type="text/css">
<link href="../../../css/box.css" rel="stylesheet" type="text/css" />
<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../js/check_form.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
    

<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit">编辑-<?php echo $_smarty_tpl->getVariable('PAGETITLE')->value;?>
</div>
  <form method="post" action="insert.php" onsubmit="return check()" name="form1">
  <div class="form2">
	<dl class="lineD">
      <dt><span class="redstar">*</span>合同号：</dt>
      <dd>
        <input type="text" name="contract_num" id="contract_num" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_num']) ? $_smarty_tpl->getVariable('list')->value['contract_num'] : null);?>
" />
      </dd>
    </dl>
	<dl class="lineD">
      <dt><span class="redstar">*</span>用车单位：</dt>
      <dd>
        <select name="paiche_name2" id="paiche_name2">
	                  <option value="0">请选择</option>
	                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('clientlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_id']) ? $_smarty_tpl->tpl_vars['rows']->value['client_id'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['client_id']) ? $_smarty_tpl->getVariable('list')->value['client_id'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['client_id']) ? $_smarty_tpl->tpl_vars['rows']->value['client_id'] : null)){?>selected<?php }?> at="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_Mlinker']) ? $_smarty_tpl->tpl_vars['rows']->value['client_Mlinker'] : null);?>
#<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_Mphone']) ? $_smarty_tpl->tpl_vars['rows']->value['client_Mphone'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_name']) ? $_smarty_tpl->tpl_vars['rows']->value['client_name'] : null);?>
</option>
	                  <?php }} ?>
	    </select><input type="text" id="search_key" size="10" placeholder="快速检索" />
	  </dd>
    </dl>
    
	<dl class="lineD">
      <dt><span class="redstar">*</span>开始日期：</dt>
      <dd>
        <input type="text" name="paiche_startDate" id="paiche_startDate" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_startDate']) ? $_smarty_tpl->getVariable('list')->value['contract_startDate'] : null);?>
" onClick="calendar.show(this);" readonly="readonly" />
      </dd>
    </dl>
    <dl class="lineD">
      <dt><span class="redstar">*</span>结束日期：</dt>
      <dd>
        <input type="text" name="paiche_endDate" id="paiche_endDate" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_endDate']) ? $_smarty_tpl->getVariable('list')->value['contract_endDate'] : null);?>
" onClick="calendar.show(this);" readonly="readonly" />
      </dd>
    </dl>
    <dl class="lineD">
	    <dt><span class="redstar">*</span>业务员：</dt>
	    <dd><input type="text" name="paicheCounterMan" id="paicheCounterMan" size="16" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['yewuyuan']) ? $_smarty_tpl->getVariable('list')->value['yewuyuan'] : null);?>
" />
	    <input type="hidden" name="paicheCounterMan2" id="paicheCounterMan2" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_CounterMan']) ? $_smarty_tpl->getVariable('list')->value['contract_CounterMan'] : null);?>
" />
	    <a href="javascript:select_emp();"><img src="../../../css/driver.gif" width="16" height="15" class="peoplePic" /></a></dd>
	</dl>
	
	<dl class="lineD" >
	    <dt>押金：</dt>
	    <dd><input type="hidden" name="paiche_deposit_id" value="1" />
	    <input type="text" id="paiche_deposit" name="paiche_deposit" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_deposit']) ? $_smarty_tpl->getVariable('list')->value['contract_deposit'] : null);?>
" size="3"/>&nbsp;&nbsp;需退金额：<input type="text" id="paiche_deposit_back" name="paiche_deposit_back" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_deposit_back']) ? $_smarty_tpl->getVariable('list')->value['contract_deposit_back'] : null);?>
" size="3"/></dd>
	</dl>

	<dl class="lineD" >
	    <dt><span class="redstar">*</span>租金：</dt>
	    <dd><input type="hidden" name="paiche_rent_id" value="2" />
	    <input type="text" id="paiche_rent" name="paiche_rent" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_rent']) ? $_smarty_tpl->getVariable('list')->value['contract_rent'] : null);?>
" size="3"/></dd>
	</dl>

	<dl class="lineD">
	    <dt>油费：</dt>
	    <dd>
	    每百公里：<input type="text" name="youfei_sheng" id="youfei_sheng" size="6"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['youfei_sheng']) ? $_smarty_tpl->getVariable('list')->value['youfei_sheng'] : null);?>
" />升&nbsp;
	     每升：<input type="text" name="youfei_danjia" id="youfei_danjia" size="6"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['youfei_danjia']) ? $_smarty_tpl->getVariable('list')->value['youfei_danjia'] : null);?>
" />元&nbsp;

	    不需要油费<input type="checkbox" id="youfei" name="youfei" <?php if ((isset($_smarty_tpl->getVariable('list')->value['youfei']) ? $_smarty_tpl->getVariable('list')->value['youfei'] : null)=="Y"){?>checked<?php }else{ ?><?php }?> value="Y" />
	    </dd>
	</dl>




	<dl class="lineD">
	    <dt>限制公里数：</dt>
	    <dd><input type="text" name="paiche_limitKm" id="paiche_limitKm" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_limitKm']) ? $_smarty_tpl->getVariable('list')->value['contract_limitKm'] : null);?>
" />&nbsp;
	    超公里费用：<input type="text" name="paiche_overKm" id="paiche_overKm" size="6"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_overKm']) ? $_smarty_tpl->getVariable('list')->value['contract_overKm'] : null);?>
" />/公里&nbsp;
	    不限公里<input type="checkbox" id="paiche_unlimitKm" name="paiche_unlimitKm" onClick="unlimited(this,'paiche_limitKm','paiche_overKm')" <?php if ((isset($_smarty_tpl->getVariable('list')->value['contract_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['contract_unlimitKm'] : null)=="Y"){?>checked<?php }else{ ?><?php }?> value="Y" />
	    </dd>
	</dl>
	<dl class="lineD">
	    <dt>超公里累计方式：</dt>
	    <dd><input type="radio" name="paiche_limitKmType" value="0" <?php if ((isset($_smarty_tpl->getVariable('list')->value['contract_limitKmType']) ? $_smarty_tpl->getVariable('list')->value['contract_limitKmType'] : null)=="0"){?>checked<?php }?> />按月
	    <input type="radio" name="paiche_limitKmType" value="1" <?php if ((isset($_smarty_tpl->getVariable('list')->value['contract_limitKmType']) ? $_smarty_tpl->getVariable('list')->value['contract_limitKmType'] : null)=="1"){?>checked<?php }?> />按季
	    <input type="radio" name="paiche_limitKmType" value="2" <?php if ((isset($_smarty_tpl->getVariable('list')->value['contract_limitKmType']) ? $_smarty_tpl->getVariable('list')->value['contract_limitKmType'] : null)=="2"){?>checked<?php }?> />按年&nbsp;&nbsp;&nbsp;
		</dd>
	</dl>
	<dl class="lineD" id="dlitems">
	    <dt>条款约定：</dt>
	    <dd>
	    <div id="divitems" style="width:344px;">
	    <ul>
          <li class="aaa">编号</li><li class="bbb">约定条款</li><li class="aaa">约定结果</li><li class="aaa">删除</li>
        </ul>
	    <?php if ($_smarty_tpl->getVariable('task')->value=="update"){?>
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('itemlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
	    <ul id="V<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
">
          <li class="aaa"><input type="hidden" id="Recid" name="Recid[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
<input type="hidden" id="Iid" name="Iid[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
" /></li>
          <li class="bbb"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_name']) ? $_smarty_tpl->tpl_vars['row']->value['item_name'] : null);?>
</li>
          <li class="aaa"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row']->value['conv_result'] : null);?>
<input type="hidden" id="result" name="result[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row']->value['conv_result'] : null);?>
" /></li>
          <li class="aaa"><a href="javascript:delV(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
)"><img src="../../../css/error.gif" /></a><input type="hidden" id="DV<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
" name="DVid[]" value="0" /></li>
        </ul>
        <?php }} ?>
        <?php }?>
	    </div><div style="padding:5px 0 0 276px;"><a href="javascript:select_items();"><img src="../../../css/list.gif" height="15" class="peoplePic" /></a></div>
	    </dd>
	</dl>
	<dl class="lineD">
	    <dt>备注：</dt>
	    <dd><textarea name="paiche_specialRemarks" id="paiche_specialRemarks" cols="40" rows="5"><?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_note']) ? $_smarty_tpl->getVariable('list')->value['contract_note'] : null);?>
</textarea></dd>
	</dl>
	<dl class="lineD" id="showCar">
	    <dt>选择车辆：</dt>
	    <dd><input type="text" name="paicheCar" id="paicheCar" size="38" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
" /> 
	         <input type="button" value="清 空" onClick="clearValue('paicheCar','paicheCar2')" />&nbsp;
	         关键字：<input type="text" name="paicheCarKey" id="paicheCarKey" size="10" />
	    <input type="hidden" name="paicheCar2" id="paicheCar2" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_car']) ? $_smarty_tpl->getVariable('list')->value['contract_car'] : null);?>
" />
	    <a href="javascript:select_car();"><img src="../../../css/car2.gif" height="15" class="peoplePic" /></a>
	    
	    <input type="hidden" name="shunt" id="shunt" value="0" />
	    </dd>
    </dl>
    <?php if ($_smarty_tpl->getVariable('busitype')->value!='3'){?>
    <dl class="lineD" id="showDrive">
	    <dt>选择司机：</dt>
	    <dd><input type="text" name="paicheDriver" id="paicheDriver" size="18" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['siji']) ? $_smarty_tpl->getVariable('list')->value['siji'] : null);?>
" /> 
	         <input type="button" value="清 空" onClick="clearValue('paicheDriver','paicheDriver2')" />&nbsp;
	         关键字：<input type="text" name="paicheDriverKey" id="paicheDriverKey" size="10" />
	    <input type="hidden" name="paicheDriver2" id="paicheDriver2" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_driver']) ? $_smarty_tpl->getVariable('list')->value['contract_driver'] : null);?>
" />
	    <a href="javascript:select_driver();"><img src="../../../css/driver.gif" height="15" class="peoplePic" /></a>
	    </dd>
    </dl>
    <?php }?>
	<?php if ($_smarty_tpl->getVariable('busitype')->value=='4'){?>
	<dl class="lineD">
	    <dt>月结方式：</dt>
	    <dd><input type="radio" name="paiche_calType" value="0" <?php $_tmp1=(isset($_smarty_tpl->getVariable('list')->value['paiche_calType']) ? $_smarty_tpl->getVariable('list')->value['paiche_calType'] : null);?><?php if (empty($_tmp1)){?>checked<?php }?> />按出车单
	        <input type="radio" name="paiche_calType" value="1" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_calType']) ? $_smarty_tpl->getVariable('list')->value['paiche_calType'] : null)=="1"){?>checked<?php }?> />按费用单&nbsp;&nbsp;&nbsp;
		</dd>
	</dl>
	
	<?php }?>
	
    <div class="page_btm">
      <input type="submit" class="btn_b" name="btn_save" value="确定" />
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_id']) ? $_smarty_tpl->getVariable('list')->value['contract_id'] : null);?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  <input type="hidden" name="b_id" id="b_id" value="<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
" />
  </form>
</div>

<!-->
<script>
$(document).ready(function(){
    $("#search_key").live('input propertychange',function(){
        var aa=$("#search_key").val();
        $("#paiche_name2 option").each(function (){  
            var txt = $(this).text();  
            if(txt.toLowerCase().indexOf(aa) >-1){  
                $(this).attr("selected",true);
                
                return false;
            }
         });
	});
    $("#paiche_deposit").live('input propertychange',function(){
	    var aa=$(this).val();
	    $("#paiche_deposit_back").val(aa);
	});
});
function select_car(){
	var key=$("#paicheCarKey").val();
	demo_iframe('../business/selectemp.php?sel_type=c&key='+key,'选择车辆',650,380,'login_js');
}
function select_driver(){
	var key=$("#paicheDriverKey").val();
	demo_iframe('../business/selectemp.php?sel_type=d&key='+key,'选择驾驶员',650,380,'login_js');
}
function select_emp(){
	demo_iframe('../business/selectemp.php?sel_type=e','选择业务员',650,380,'login_js');
}
function select_items(){
	demo_iframe('../business/selectitem.php?busi_type='+$("#b_id").val(),'选择合同约定条款',650,500,'login_js');
}
function delV(id){
	if ($("#DV"+id).val()==0){//删除
		$("#V"+id).find("li").css("text-decoration","line-through");
		$("#DV"+id).val(1);
	}else{//恢复
		$("#V"+id).find("li").css("text-decoration","none");
		$("#DV"+id).val(0);
	}
}
function check(){
    var p1=$("#paiche_name2").children('option:selected').val();
    if (p1==0){
		alert("请选择用车单位！");
		$("#paiche_name2").focus();
		return false;
    }
    if ($("#paicheCounterMan").val()==""){
		alert("请选择业务员");
		return false;
	}
    if ($("#paiche_startDate").val()==""){
		alert("请选择开始日期");
		$("#paiche_startDate").focus();
		return false;
    }
    if ($("#paiche_endDate").val()==""){
		alert("请选择截止日期");
		$("#paiche_endDate").focus();
		return false;
	}
    if ($("#paiche_rent").val()==""){
		alert("请填写租金");
		$("#paiche_rent").focus();
		return false;
	}
    
}
</script>
<!-->
</body>
</html>