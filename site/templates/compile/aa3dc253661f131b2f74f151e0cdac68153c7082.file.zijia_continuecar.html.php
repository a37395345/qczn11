<?php /* Smarty version Smarty-3.0.4, created on 2019-07-09 14:45:26
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/zijia_linshi/zijia_continuecar.html" */ ?>
<?php /*%%SmartyHeaderCode:23365d2438068c5f95-43292216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa3dc253661f131b2f74f151e0cdac68153c7082' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/zijia_linshi/zijia_continuecar.html',
      1 => 1562654593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23365d2438068c5f95-43292216',
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
<form method="post" action="zijiaContinue_accept.php" name="form1" id="form1">
<input type="hidden" name="pid" value="<?php echo $_smarty_tpl->getVariable('pid')->value;?>
" />
<div class="so_main">
  <div class="page_tit_1">续租</div>
 

<div class="page_tit_3">&nbsp;</div>


<input type="hidden" name="paiche_unlimitKm" id="paiche_unlimitKm" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null);?>
" />
<div class="form2">
  <dl class="lineD">
      <dt>用车开始时间：</dt>
      <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate_All'] : null);?>
</dd>
    </dl>
    <dl class="lineD">
      <dt>预计结束时间：</dt>
      <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_endDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_endDate_All'] : null);?>
<input type="hidden" name="paiche_endDate" id="paiche_endDate" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_endDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_endDate_All'] : null);?>
" /></dd>
    </dl>
 
    <dl class="lineD">
      <dt>开车线路：</dt>
      <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_line']) ? $_smarty_tpl->getVariable('list')->value['paiche_line'] : null);?>
</dd>
  </dl>
  <dl class="lineD">
      <dt>续租类型：</dt>
      <dd><input type="radio" name="continue_type" value="1" checked/>租车费&nbsp;<input type="radio" name="continue_type" value="2"/>其他费用</dd>
    </dl>
  <dl class="lineD" style="display:block;" id="show1_1">
      <dt>续租天数：</dt>
      <dd><input type="text" name="addday" id="addday" size="2" />天&nbsp;&nbsp;&nbsp;&nbsp;续租到日期：<input type="text" name="end_Date" id="end_Date" size="18" readonly="readonly"/>&nbsp;&nbsp;原租赁天数：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_day']) ? $_smarty_tpl->getVariable('list')->value['paiche_day'] : null);?>
天</dd>
  </dl>
  
  <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)!="Y"){?>
  <dl class="lineD" style="display:block;" id="show1_2">
    <dt>增加公里数：</dt>
    <dd><input type="text" name="addoverKm" id="addoverKm" size="2" />公里&nbsp;&nbsp;原限定公里数：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_limitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_limitKm'] : null);?>
公里
    </dd>
  </dl>
  <?php }?>
    <dl class="lineD" style="display:block;" id="show1_3">
      <dt>续租费用：</dt>
      <dd><input type="hidden" id="Cid" name="Cid[]" value="5" /><input type="text" id="money_5" name="money[]" size="4" />元
      <input type="hidden" id="Did" name="Did[]" value="0" />
      </dd>
  </dl>
  <dl class="lineD" style="display:none;" id="show2_1">
      <dt></dt>
      <dd>
      <div id="divcharges">
      <ul>
          <li>编号</li><li>收费项目</li><li>约定金额</li><li></li><li>删除</li>
        </ul>
      </div><div style="padding:5px 0 0 342px;"><a href="javascript:select_charges('continue');"><img src="../../../css/list.gif" height="15" class="peoplePic" /></a></div>
      </dd>
  </dl>
  <dl class="lineD">
      <dt>备注：</dt>
      <dd><textarea name="Remarks" id="Remarks" cols="40" rows="5"></textarea></dd>
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
$(document).ready(function(){
   length=$(".charge_havemoney").length;
   var mouth=0;
   for(var i=0;i<length;i++){
   		mouth=mouth+parseInt($('.charge_havemoney').eq(i).val());
   }
  $('#total').val(parseInt($('#settle_vio').val())-mouth);
    
    
    
});
</script>
<!-->
</body>
</html>