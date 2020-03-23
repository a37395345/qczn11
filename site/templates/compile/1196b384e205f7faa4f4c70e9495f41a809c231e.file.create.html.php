<?php /* Smarty version Smarty-3.0.4, created on 2019-09-30 14:19:35
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/oilcard/create.html" */ ?>
<?php /*%%SmartyHeaderCode:15153853505d919e777716c1-28574688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1196b384e205f7faa4f4c70e9495f41a809c231e' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/oilcard/create.html',
      1 => 1569749236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15153853505d919e777716c1-28574688',
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
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>

<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit">编辑</div>  
  <form method="post" action="insert.php" onsubmit="return oilcard_check()" name="form1">
  <input type="hidden" name="oldcarid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_id']) ? $_smarty_tpl->getVariable('list')->value['car_id'] : null);?>
" />
  <div class="form2">
	  <dl class="lineD">
	    <dt>选择关联车辆：</dt>
	    <dd><select name="car_id" id="car_id">
	                  <option value="0" <?php if ((isset($_smarty_tpl->getVariable('list')->value['car_id']) ? $_smarty_tpl->getVariable('list')->value['car_id'] : null)==0){?>selected<?php }?>>公司主卡</option>
	                  <option value="999" <?php if ((isset($_smarty_tpl->getVariable('list')->value['car_id']) ? $_smarty_tpl->getVariable('list')->value['car_id'] : null)==999){?>selected<?php }?>>公司副卡</option>
	                  <option value="998" <?php if ((isset($_smarty_tpl->getVariable('list')->value['car_id']) ? $_smarty_tpl->getVariable('list')->value['car_id'] : null)==998){?>selected<?php }?>>备用油卡</option>
	                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('carlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['car_id']) ? $_smarty_tpl->tpl_vars['rows']->value['car_id'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['car_id']) ? $_smarty_tpl->getVariable('list')->value['car_id'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['car_id']) ? $_smarty_tpl->tpl_vars['rows']->value['car_id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['car_num']) ? $_smarty_tpl->tpl_vars['rows']->value['car_num'] : null);?>
</option>
	                  <?php }} ?>
	              </select><input type="text" id="search_key" size="4" placeholder="快速检索" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>加油卡号：</dt>
	    <dd><input type="text" name="card_no" id="card_no" size="20" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['card_no']) ? $_smarty_tpl->getVariable('list')->value['card_no'] : null);?>
"/></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>油卡密码：</dt>
	    <dd><input type="text" name="card_pass" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['card_pass']) ? $_smarty_tpl->getVariable('list')->value['card_pass'] : null);?>
"/></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>限油品：</dt>
	    <dd><input type="text" name="card_oilmode" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['card_oilmode']) ? $_smarty_tpl->getVariable('list')->value['card_oilmode'] : null);?>
"/></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>加油站限定：</dt>
	    <dd><input type="text" name="card_area" size="56" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['card_area']) ? $_smarty_tpl->getVariable('list')->value['card_area'] : null);?>
"/></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>当前状态：</dt>
	    <dd><input type="radio" name="card_state" value="0" <?php if ((isset($_smarty_tpl->getVariable('list')->value['card_state']) ? $_smarty_tpl->getVariable('list')->value['card_state'] : null)==0){?>checked<?php }?>>正常<input type="radio" name="card_state" value="-1" <?php if ((isset($_smarty_tpl->getVariable('list')->value['card_state']) ? $_smarty_tpl->getVariable('list')->value['card_state'] : null)==-1){?>checked<?php }?>>挂失<input type="radio" name="card_state" value="-2" <?php if ((isset($_smarty_tpl->getVariable('list')->value['card_state']) ? $_smarty_tpl->getVariable('list')->value['card_state'] : null)==-2){?>checked<?php }?>>暂停使用</dd>
	  </dl>
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" /><b> 注：<span class="red">*</span>为必填项</b>
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['oil_id']) ? $_smarty_tpl->getVariable('list')->value['oil_id'] : null);?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  </form>
</div>
<!-->
<script>
$(document).ready(function(){
	$("#search_key").live('input propertychange',function(){
	    var aa=$("#search_key").val();
	    if (aa!=""){
			$("#car_id option").each(function (){  
		        var txt = $(this).text();  
		        if(txt.toLowerCase().indexOf(aa) >-1){  
		            $(this).attr("selected",true);
		            //$("#company").change();
		            return false;
		        }
		     });
	    }
	});
});
function oilcard_check(){
	if ($("#card_no").val()==""){
		alert("请填写加油卡号！");
		$("#card_no").focus();
		return false;
	}
}
</script>
<!-->
</body>
</html>