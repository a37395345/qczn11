<?php /* Smarty version Smarty-3.0.4, created on 2019-10-17 10:45:53
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/update/update_shouru.html" */ ?>
<?php /*%%SmartyHeaderCode:9346339975da7d5e1a87f05-54081046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff0c8a5d62cec5cbdd10d2d5b6f2b81964e09b46' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/update/update_shouru.html',
      1 => 1569749241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9346339975da7d5e1a87f05-54081046',
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
<link rel="stylesheet" type="text/css" href="../../../../css/webuploader.css">
<link rel="stylesheet" type="text/css" href="../../../../css/diyUpload.css">
<script src="../../../../jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<script type="text/javascript" src="../../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../../js/check_form.js"></script>
<script type="text/javascript" src="../../../../js/diyUpload/webuploader.html5only.min.js"></script>
<script type="text/javascript" src="../../../../js/diyUpload/diyUpload.js"></script>
<style>
/**/

	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
#box{width:840px; min-height:200px; background:#FF9}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit">其他收入修改&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="delete_shouru.php?aid=<?php echo (isset($_smarty_tpl->getVariable('data')->value['aid']) ? $_smarty_tpl->getVariable('data')->value['aid'] : null);?>
&bid=<?php echo (isset($_smarty_tpl->getVariable('data')->value['bid']) ? $_smarty_tpl->getVariable('data')->value['bid'] : null);?>
">删除此单</a></div>  
  <form method="post" action="update_shouru_a.php" onsubmit="return other_check(this)" name="form1" enctype="multipart/form-data">
  <div class="form2">
	  	<dl class="lineD">
		  <dt>进账时间：</dt>
		  <dd><input type="text" name="add_time" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['add_time']) ? $_smarty_tpl->getVariable('data')->value['add_time'] : null);?>
" readonly/></dd>
		</dl>
	  	<dl class="lineD">
		  <dt><span class="redstar">*</span>说明：</dt>
		  <dd><textarea name="name" id="name" cols="90" rows="8" ><?php echo (isset($_smarty_tpl->getVariable('data')->value['name']) ? $_smarty_tpl->getVariable('data')->value['name'] : null);?>
</textarea></dd>
		</dl>
	  	<dl class="lineD">
		  <dt><span class="redstar">*</span>金额：</dt>
		  <dd><input type="text" name="money" id="money" size="10" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['money']) ? $_smarty_tpl->getVariable('data')->value['money'] : null);?>
"=/></dd>
		</dl>
		<dl class="lineD">
		  <dt>收入类型：</dt>
		  <dd><input type="radio" name="change_class" id="change_class"  value="刷卡费" <?php if ((isset($_smarty_tpl->getVariable('data')->value['change_class']) ? $_smarty_tpl->getVariable('data')->value['change_class'] : null)=='刷卡费'){?>checked<?php }?> />刷卡费&nbsp;&nbsp;
		  <input type="radio" name="change_class" id="change_class" value="保险理赔及退保" <?php if ((isset($_smarty_tpl->getVariable('data')->value['change_class']) ? $_smarty_tpl->getVariable('data')->value['change_class'] : null)=='保险理赔及退保'){?>checked<?php }?> />保险理赔及退保&nbsp;&nbsp;
		  <input type="radio" name="change_class" id="change_class" value="税金"  <?php if ((isset($_smarty_tpl->getVariable('data')->value['change_class']) ? $_smarty_tpl->getVariable('data')->value['change_class'] : null)=='税金'){?>checked<?php }?>/>税金&nbsp;&nbsp;
		  <input type="radio" name="change_class" id="change_class" value="违章手续费" <?php if ((isset($_smarty_tpl->getVariable('data')->value['change_class']) ? $_smarty_tpl->getVariable('data')->value['change_class'] : null)=='违章手续费'){?>checked<?php }?>/>违章手续费&nbsp;&nbsp;
		  <input type="radio" name="change_class" id="change_class" value="卖车及报废收入" <?php if ((isset($_smarty_tpl->getVariable('data')->value['change_class']) ? $_smarty_tpl->getVariable('data')->value['change_class'] : null)=='卖车及报废收入'){?>checked<?php }?>/>卖车及报废收入&nbsp;&nbsp;
		  <input type="radio" name="change_class" id="change_class" value="一嗨多收费用" <?php if ((isset($_smarty_tpl->getVariable('data')->value['change_class']) ? $_smarty_tpl->getVariable('data')->value['change_class'] : null)=='一嗨多收费用'){?>checked<?php }?>/>一嗨多收费用&nbsp;&nbsp;
		  <input type="radio" name="change_class" id="change_class" value="备用金归还" <?php if ((isset($_smarty_tpl->getVariable('data')->value['change_class']) ? $_smarty_tpl->getVariable('data')->value['change_class'] : null)=='备用金归还'){?>checked<?php }?>/>备用金归还&nbsp;&nbsp;
		  <input type="radio" name="change_class" id="change_class" value="其他" <?php if ((isset($_smarty_tpl->getVariable('data')->value['change_class']) ? $_smarty_tpl->getVariable('data')->value['change_class'] : null)=='其他'){?>checked<?php }?>/>其他
		  </dd>
		</dl>
		<dl class="lineD">
	      <dt>选择店铺：</dt>
	      <dd>
	        <select name="shop_id" >
	        	<option value="0" selected>请选择</option>
			<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shop')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
				<option <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null)==(isset($_smarty_tpl->getVariable('data')->value['shop_id']) ? $_smarty_tpl->getVariable('data')->value['shop_id'] : null)){?>selected<?php }?> value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>

				</option>	
			<?php }} ?>
			</select>
		  </dd>
	    </dl>
	    <dl class="lineD">
			<dt><span class="redstar">*</span>收款方式：</dt>
			<dd><select name="payments_to_id" id="payments_to_id">
		                  <option value="">请选择</option>
		                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('paymentslist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
		                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_id']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_id'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['payment_id']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_id'] : null)==(isset($_smarty_tpl->getVariable('data')->value['payments_to_id']) ? $_smarty_tpl->getVariable('data')->value['payments_to_id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_name']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_name'] : null);?>
</option>
		                  <?php }} ?>
		              </select>
			</dd>
		</dl>

		<dl class="lineD">
			<dt><span class="redstar">*</span>收款 账户：</dt>
			<dd><select name="bank_to_id" id="bank_to_id">
		                  <option value="">请选择</option>
		                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('banklist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
		                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bank_id']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_id'] : null);?>
"  <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['bank_id']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_id'] : null)==(isset($_smarty_tpl->getVariable('data')->value['bank_to_id']) ? $_smarty_tpl->getVariable('data')->value['bank_to_id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bank_name']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_name'] : null);?>
</option>
		                  <?php }} ?>
		              </select>
			</dd>
		</dl>
		<dl class="lineD">
	          <dt>相关单位：</dt>
	          <dd>
	              <select name="client_id" id="client_id">
	                  <option value="0" <?php if ((isset($_smarty_tpl->getVariable('rows')->value['client_id']) ? $_smarty_tpl->getVariable('rows')->value['client_id'] : null)==0){?>selected<?php }?>>请选择</option>
	                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('clientlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_id']) ? $_smarty_tpl->tpl_vars['rows']->value['client_id'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['client_id']) ? $_smarty_tpl->tpl_vars['rows']->value['client_id'] : null)==(isset($_smarty_tpl->getVariable('data')->value['client_id']) ? $_smarty_tpl->getVariable('data')->value['client_id'] : null)){?>selected<?php }?>>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_name']) ? $_smarty_tpl->tpl_vars['rows']->value['client_name'] : null);?>
</option>
	                  <?php }} ?>
	              </select>
	              
	          </dd>
	     </dl>
		
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" /><b> 注：<span class="red">*</span>为必填项</b>
    </div>
     <input type="hidden" name="aid" id="aid" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['aid']) ? $_smarty_tpl->getVariable('data')->value['aid'] : null);?>
" />
     <input type="hidden" name="bid" id="bid" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['bid']) ? $_smarty_tpl->getVariable('data')->value['bid'] : null);?>
" />
     <input type="hidden" name="change_code" id="change_code" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['change_code']) ? $_smarty_tpl->getVariable('data')->value['change_code'] : null);?>
" />
  </div>
  </form>
</div>

</body>
</html>