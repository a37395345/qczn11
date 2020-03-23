<?php /* Smarty version Smarty-3.0.4, created on 2014-09-04 16:49:17
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/sales/consult/create.html" */ ?>
<?php /*%%SmartyHeaderCode:274065408278daba397-39819216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2d7e795d4ec4c7b3fbc5821405d7e59e94c1494' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/sales/consult/create.html',
      1 => 1409820547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274065408278daba397-39819216',
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
<link href="../../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<script type="text/javascript" src="../../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<script type="text/javascript" src="../../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../../js/check_form.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit"><?php if ($_smarty_tpl->getVariable('task')->value=="insert"){?>添加<?php }elseif($_smarty_tpl->getVariable('task')->value=="update"){?>编辑<?php }else{ ?>洽谈结果反馈<?php }?></div>  
  <form method="post" action="insert.php" onsubmit="return consult_check(this)" name="form1">
  <div class="form2">
  	<?php if ($_smarty_tpl->getVariable('task')->value=="negotiate_accept"){?>
  		<dl class="lineD">
	      <dt><span class="redstar">*</span>洽谈日期：</dt>
	      <dd>
	        <input type="text" name="negotiate_Date" id="negotiate_Date" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['negotiate_Date']) ? $_smarty_tpl->getVariable('list')->value['negotiate_Date'] : null);?>
" onClick="calendar.show(this);" readonly="readonly" />
	      </dd>
	    </dl>
	    <dl class="lineD">
		  <dt><span class="redstar">*</span>接洽人：</dt>
		  <dd>
	        <input type="text" name="negotiate_linker" id="negotiate_linker" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['negotiate_linker']) ? $_smarty_tpl->getVariable('list')->value['negotiate_linker'] : null);?>
" />
		  </dd>
		</dl>
		<dl class="lineD">
		    <dt>洽谈方式：</dt>
		    <dd><input type="radio" name="negotiate_type" value="电话" <?php if ((isset($_smarty_tpl->getVariable('list')->value['negotiate_type']) ? $_smarty_tpl->getVariable('list')->value['negotiate_type'] : null)=="电话"||(isset($_smarty_tpl->getVariable('list')->value['negotiate_type']) ? $_smarty_tpl->getVariable('list')->value['negotiate_type'] : null)==''){?>checked<?php }?> />电话&nbsp;&nbsp;<input type="radio" name="negotiate_type" value="上门" <?php if ((isset($_smarty_tpl->getVariable('list')->value['negotiate_type']) ? $_smarty_tpl->getVariable('list')->value['negotiate_type'] : null)=="上门"){?>checked<?php }?> />上门&nbsp;&nbsp;<input type="radio" name="negotiate_type" value="其他" <?php if ((isset($_smarty_tpl->getVariable('list')->value['negotiate_type']) ? $_smarty_tpl->getVariable('list')->value['negotiate_type'] : null)=="其他"){?>checked<?php }?> />其他</dd>
		</dl>
		<dl class="lineD">
		    <dt>洽谈内容：</dt>
		    <dd><textarea name="negotiate_Remarks" cols="40" rows="5"><?php echo (isset($_smarty_tpl->getVariable('list')->value['negotiate_Remarks']) ? $_smarty_tpl->getVariable('list')->value['negotiate_Remarks'] : null);?>
</textarea></dd>
		</dl>
		<dl class="lineD">
		    <dt>结果判定：</dt>
		    <dd><input type="radio" name="negotiate_result" value="0" <?php if ((isset($_smarty_tpl->getVariable('list')->value['negotiate_result']) ? $_smarty_tpl->getVariable('list')->value['negotiate_result'] : null)==0){?>checked<?php }?> />需要继续跟进&nbsp;&nbsp;
		    <input type="radio" name="negotiate_result" value="1" <?php if ((isset($_smarty_tpl->getVariable('list')->value['negotiate_result']) ? $_smarty_tpl->getVariable('list')->value['negotiate_result'] : null)==1){?>checked<?php }?> />已决定租车&nbsp;&nbsp;
		    <input type="radio" name="negotiate_result" value="2" <?php if ((isset($_smarty_tpl->getVariable('list')->value['negotiate_result']) ? $_smarty_tpl->getVariable('list')->value['negotiate_result'] : null)==2){?>checked<?php }?> />已选择其他租车公司&nbsp;&nbsp;
		    <input type="radio" name="negotiate_result" value="3" <?php if ((isset($_smarty_tpl->getVariable('list')->value['negotiate_result']) ? $_smarty_tpl->getVariable('list')->value['negotiate_result'] : null)==3){?>checked<?php }?> />用户已放弃</dd>
		</dl>
  	<?php }else{ ?>
	  	<dl class="lineD">
		  <dt><span class="redstar">*</span>咨询人：</dt>
		  <dd>
	        <input type="text" name="consult_linker" id="consult_linker" size="26" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['consult_linker']) ? $_smarty_tpl->getVariable('list')->value['consult_linker'] : null);?>
" />
		  </dd>
		</dl>
	  	<dl class="lineD">
		  <dt><span class="redstar">*</span>联系电话：</dt>
		  <dd><input type="text" name="consult_linkerPhone" id="consult_linkerPhone" size="26"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['consult_linkerPhone']) ? $_smarty_tpl->getVariable('list')->value['consult_linkerPhone'] : null);?>
"/></dd>
		</dl>
		<dl class="lineD">
		    <dt>用车类型：</dt>
		    <dd><?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('category')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
		    	<input type="radio" name="consult_busitype" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['item_paicheType']) ? $_smarty_tpl->tpl_vars['rows']->value['item_paicheType'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['consult_busitype']) ? $_smarty_tpl->getVariable('list')->value['consult_busitype'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['item_paicheType']) ? $_smarty_tpl->tpl_vars['rows']->value['item_paicheType'] : null)){?>checked<?php }?> /><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['item_name']) ? $_smarty_tpl->tpl_vars['rows']->value['item_name'] : null);?>
&nbsp;&nbsp;
	           <?php }} ?>
	        </dd>
		</dl>
		<dl class="lineD">
	    	<dt>需求车型：</dt>
	    	<dd><input type="radio" name="consult_requestCar" value="0" <?php if ((isset($_smarty_tpl->getVariable('list')->value['consult_requestCar']) ? $_smarty_tpl->getVariable('list')->value['consult_requestCar'] : null)==0){?>checked<?php }?>/>小车<input type="radio" name="consult_requestCar" value="1" <?php if ((isset($_smarty_tpl->getVariable('list')->value['consult_requestCar']) ? $_smarty_tpl->getVariable('list')->value['consult_requestCar'] : null)==1){?>checked<?php }?>/>商务车<input type="radio" name="consult_requestCar" value="2" <?php if ((isset($_smarty_tpl->getVariable('list')->value['consult_requestCar']) ? $_smarty_tpl->getVariable('list')->value['consult_requestCar'] : null)==2){?>checked<?php }?>/>客车</dd>
	  	</dl>
	  	<dl class="lineD">
		    <dt>路程：</dt>
		    <dd><input type="radio" name="consult_route" value="单" <?php if ((isset($_smarty_tpl->getVariable('list')->value['consult_route']) ? $_smarty_tpl->getVariable('list')->value['consult_route'] : null)=="单"||(isset($_smarty_tpl->getVariable('list')->value['consult_route']) ? $_smarty_tpl->getVariable('list')->value['consult_route'] : null)==''){?>checked<?php }?> />单程&nbsp;&nbsp;<input type="radio" name="consult_route" value="双" <?php if ((isset($_smarty_tpl->getVariable('list')->value['consult_route']) ? $_smarty_tpl->getVariable('list')->value['consult_route'] : null)=="双"){?>checked<?php }?> />双程</dd>
		</dl>
	  	<dl class="lineD">
		    <dt>开车线路：</dt>
		    <dd><textarea name="consult_line" cols="40" rows="5"><?php echo (isset($_smarty_tpl->getVariable('list')->value['consult_line']) ? $_smarty_tpl->getVariable('list')->value['consult_line'] : null);?>
</textarea></dd>
		</dl>
		<dl class="lineD">
	      <dt>用车开始时间：</dt>
	      <dd>
	        <input type="text" name="consult_startDate" id="consult_startDate" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['consult_startDate']) ? $_smarty_tpl->getVariable('list')->value['consult_startDate'] : null);?>
" onClick="calendar.show(this);" readonly="readonly" />
	      </dd>
	    </dl>
	    <dl class="lineD">
	      <dt>用车结束时间：</dt>
	      <dd>
	        <input type="text" name="consult_endDate" id="consult_endDate" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['consult_endDate']) ? $_smarty_tpl->getVariable('list')->value['consult_endDate'] : null);?>
" onClick="calendar.show(this);" readonly="readonly" />
	      </dd>
	    </dl>
		<dl class="lineD">
		  <dt>报价情况：</dt>
		  <dd><textarea name="consult_price" cols="60" rows="3"><?php echo (isset($_smarty_tpl->getVariable('list')->value['consult_price']) ? $_smarty_tpl->getVariable('list')->value['consult_price'] : null);?>
</textarea></dd>
		</dl>
		<dl class="lineD">
		    <dt><span class="redstar">*</span>接待人：</dt>
		    <dd><input type="text" name="paicheCounterMan" id="paicheCounterMan" size="16" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['yewuyuan']) ? $_smarty_tpl->getVariable('list')->value['yewuyuan'] : null);?>
" />
		    <input type="hidden" name="paicheCounterMan2" id="paicheCounterMan2" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['consult_CounterMan']) ? $_smarty_tpl->getVariable('list')->value['consult_CounterMan'] : null);?>
" />
		    <a href="javascript:select_emp();"><img src="../../../../css/driver.gif" width="16" height="15" class="peoplePic" /></a></dd>
		</dl>
	    <dl class="lineD">
		  <dt>备注：</dt>
		  <dd><textarea name="consult_Remarks" cols="60" rows="3"><?php echo (isset($_smarty_tpl->getVariable('list')->value['consult_Remarks']) ? $_smarty_tpl->getVariable('list')->value['consult_Remarks'] : null);?>
</textarea></dd>
		</dl>
	<?php }?>
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" /><b> 注：<span class="red">*</span>为必填项</b>
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['consult_id']) ? $_smarty_tpl->getVariable('list')->value['consult_id'] : null);?>
" />
  <input type="hidden" name="consult_id" value="<?php echo $_smarty_tpl->getVariable('consult_id')->value;?>
" />
  <input type="hidden" name="task" id="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  </form>
</div>
<!-->
<script>
function select_emp(){
	demo_iframe('../../business/selectemp.php?sel_type=e','选择业务员',650,380,'login_js');
}

</script>
<!-->
</body>
</html>