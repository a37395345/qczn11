<?php /* Smarty version Smarty-3.0.4, created on 2014-09-06 15:05:23
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/sales/contract/create.html" */ ?>
<?php /*%%SmartyHeaderCode:27389540ab233a41621-03577952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9e66a118915ef2c3cd274b414fff29c3c1a9aa4' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/sales/contract/create.html',
      1 => 1409987117,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27389540ab233a41621-03577952',
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
  <div class="page_tit"><?php if ($_smarty_tpl->getVariable('task')->value=="insert"){?>添加<?php }elseif($_smarty_tpl->getVariable('task')->value=="update"){?>编辑<?php }?></div>  
  <form method="post" action="insert.php" onsubmit="return contract_check(this)" name="form1" enctype="multipart/form-data">
  <div class="form2">
	  	<dl class="lineD">
		  <dt><span class="redstar">*</span>合同编号：</dt>
		  <dd>
	        <input type="text" name="contract_number" id="contract_number" size="26" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_number']) ? $_smarty_tpl->getVariable('list')->value['contract_number'] : null);?>
" />
		  </dd>
		</dl>
	  	<dl class="lineD">
		  <dt><span class="redstar">*</span>客户名称：</dt>
		  <dd>
		  <input type="text" name="paiche_name" id="paiche_name" size="35" onClick="showCom()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['client_name']) ? $_smarty_tpl->getVariable('list')->value['client_name'] : null);?>
" />&nbsp;
	        <input type="hidden" name="paiche_name2" id="paiche_name2" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_clientid']) ? $_smarty_tpl->getVariable('list')->value['contract_clientid'] : null);?>
" />
	        <ul class="sel" id="comul" onMouseOver="nameIsOut=false" onMouseOut="nameIsOut=true">
		  </dd>
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
		    	<input type="radio" name="contract_busitype" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['item_paicheType']) ? $_smarty_tpl->tpl_vars['rows']->value['item_paicheType'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['contract_busitype']) ? $_smarty_tpl->getVariable('list')->value['contract_busitype'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['item_paicheType']) ? $_smarty_tpl->tpl_vars['rows']->value['item_paicheType'] : null)){?>checked<?php }?> /><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['item_name']) ? $_smarty_tpl->tpl_vars['rows']->value['item_name'] : null);?>
&nbsp;&nbsp;
	           <?php }} ?>
	        </dd>
		</dl>
		<dl class="lineD">
	      <dt><span class="redstar">*</span>合同生效日期：</dt>
	      <dd>
	        <input type="text" name="contract_startdate" id="contract_startdate" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_startdate']) ? $_smarty_tpl->getVariable('list')->value['contract_startdate'] : null);?>
" onClick="calendar.show(this);" readonly="readonly" />
	      </dd>
	    </dl>
	    <dl class="lineD">
	      <dt><span class="redstar">*</span>合同截至日期：</dt>
	      <dd>
	        <input type="text" name="contract_enddate" id="contract_enddate" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_enddate']) ? $_smarty_tpl->getVariable('list')->value['contract_enddate'] : null);?>
" onClick="calendar.show(this);" readonly="readonly" />
	      </dd>
	    </dl>
	    <dl class="lineD">
		    <dt><span class="redstar">*</span>业务员：</dt>
		    <dd><input type="text" name="paicheCounterMan" id="paicheCounterMan" size="16" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['yewuyuan']) ? $_smarty_tpl->getVariable('list')->value['yewuyuan'] : null);?>
" />
		    <input type="hidden" name="paicheCounterMan2" id="paicheCounterMan2" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_CounterMan']) ? $_smarty_tpl->getVariable('list')->value['contract_CounterMan'] : null);?>
" />
		    <a href="javascript:select_emp();"><img src="../../../../css/driver.gif" width="16" height="15" class="peoplePic" /></a></dd>
		</dl>
	    <dl class="lineD">
		  <dt>合同内容概述：</dt>
		  <dd><textarea name="contract_content" cols="90" rows="5"><?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_content']) ? $_smarty_tpl->getVariable('list')->value['contract_content'] : null);?>
</textarea></dd>
		</dl>
		<dl class="lineD">
	      <dt>合同扫描件：</dt>
	      <dd>图片一<input type="file" name="images1" value=""/><br />图片二<input type="file" name="images2" value=""/><br />
	        	图片三<input type="file" name="images3" value=""/><br />图片四<input type="file" name="images4" value=""/>
	        <?php if ($_smarty_tpl->getVariable('task')->value=='update'&&(isset($_smarty_tpl->getVariable('list')->value['contract_imglist']) ? $_smarty_tpl->getVariable('list')->value['contract_imglist'] : null)){?>
	        <br />
	        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('list')->value['contract_imglist']) ? $_smarty_tpl->getVariable('list')->value['contract_imglist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	         <a href="../../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['images']) ? $_smarty_tpl->tpl_vars['rows']->value['images'] : null);?>
" title="点击查看原图" target="_blank"><img src="../../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['images']) ? $_smarty_tpl->tpl_vars['rows']->value['images'] : null);?>
" width="100" height="100" /></a>
	        <?php }} ?>
	        <?php }?> 
	      </dd>
	   </dl>
		
		
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" /><b> 注：<span class="red">*</span>为必填项</b>
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_id']) ? $_smarty_tpl->getVariable('list')->value['contract_id'] : null);?>
" />
  <input type="hidden" name="task" id="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  </form>
</div>
<!-->
<script>
var nameIsOut=true;//初始化值，便于判断用户是否在DIV以外点击，搜索公司名称时使用
document.onmousedown=function(){
	if(nameIsOut==true){
		$('#comul').css('display','none');
	}
}
$(document).ready(function(){
	$('#paiche_name').bind('input propertychange', function() {
		$("#paiche_name2").val("");
		
		$.ajax({
			  type:'POST',
			  url:'../../business/checkname.php',
			  data:{"paiche_name":$("#paiche_name").val()},
			  dataType:"json",
			  cache: false,
			  error: function(){
				  $("#comul").html("error！");
				  $("#comul").show();
			  },
			  success:function(jsonmsg){
				  $("#comul").html(jsonmsg.mes);	  
			  }
		});
	});
});
function changeNameId(name,id,linker,phone,money){
	$("#paiche_name").val(name);
	$("#paiche_name2").val(id);
	$('#comul').css('display','none');
}
function showCom(){
	if($('#comul').css("display")=="none"){
		$('#comul').css('display','block');
	}else{
		$('#comul').css('display','none');
	}
}
function select_emp(){
	demo_iframe('../../business/selectemp.php?sel_type=e','选择业务员',650,380,'login_js');
}

</script>
<!-->
</body>
</html>