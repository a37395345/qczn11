<?php /* Smarty version Smarty-3.0.4, created on 2019-09-29 17:28:38
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/finance/change/other.html" */ ?>
<?php /*%%SmartyHeaderCode:6985019565d907946678a79-85257591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c84f4b98aab8a02e457ed83e32610062c1980d23' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/finance/change/other.html',
      1 => 1569749247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6985019565d907946678a79-85257591',
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
  <div class="page_tit">其他收入</div>  
  <form method="post" action="list.php" onsubmit="return other_check(this)" name="form1" enctype="multipart/form-data">
  <div class="form2">
	  	<dl class="lineD">
		  <dt>进账时间：</dt>
		  <dd><input type="text" name="add_time" size="16" value="<?php echo $_smarty_tpl->getVariable('addtime')->value;?>
" readonly/></dd>
		</dl>
	  	<dl class="lineD">
		  <dt><span class="redstar">*</span>说明：</dt>
		  <dd><textarea name="change_name" id="change_name" cols="90" rows="8"></textarea></dd>
		</dl>
	  	<dl class="lineD">
		  <dt><span class="redstar">*</span>金额：</dt>
		  <dd><input type="text" name="change_money" id="change_money" size="10" /></dd>
		</dl>
		<dl class="lineD">
		  <dt>收入类型：</dt>
		  <dd><input type="radio" name="change_class" id="change_class" value="刷卡费" />刷卡费&nbsp;&nbsp;
		  <input type="radio" name="change_class" id="change_class" value="保险理赔及退保" />保险理赔及退保&nbsp;&nbsp;
		  <input type="radio" name="change_class" id="change_class" value="税金" />税金&nbsp;&nbsp;
		  <input type="radio" name="change_class" id="change_class" value="违章手续费" />违章手续费&nbsp;&nbsp;
		  <input type="radio" name="change_class" id="change_class" value="卖车及报废收入" />卖车及报废收入&nbsp;&nbsp;
		  <input type="radio" name="change_class" id="change_class" value="一嗨多收费用" />一嗨多收费用&nbsp;&nbsp;
		  <input type="radio" name="change_class" id="change_class" value="备用金归还" />备用金归还&nbsp;&nbsp;
		  <input type="radio" name="change_class" id="change_class" value="其他" checked/>其他
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
				<option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null);?>
" ><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>
</option>	
			<?php }} ?>
			</select>
		  </dd>
	    </dl>
	    <dl class="lineD">
			<dt><span class="redstar">*</span>收款方式：</dt>
			<dd><select name="payments_to" id="payments_to">
		                  <option value="">请选择</option>
		                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('paymentslist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
		                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_id']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_id'] : null);?>
" rel="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_fee']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_fee'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_name']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_name'] : null);?>
</option>
		                  <?php }} ?>
		              </select>
			</dd>
		</dl>
		<dl class="lineD">
			<dt><span class="redstar">*</span>收款 账户：</dt>
			<dd><select name="bank_to" id="bank_to">
		                  <option value="">请选择</option>
		                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('banklist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
		                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bank_id']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_id'] : null);?>
" ><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bank_name']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_name'] : null);?>
</option>
		                  <?php }} ?>
		              </select>
			</dd>
		</dl>
		<dl class="lineD">
	          <dt>相关单位：</dt>
	          <dd>
	              <select name="client" id="client">
	                  <option value="0" <?php if ($_smarty_tpl->getVariable('companyid')->value==0){?>selected<?php }?>>请选择</option>
	                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('clientlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_id']) ? $_smarty_tpl->tpl_vars['rows']->value['client_id'] : null);?>
" ><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_name']) ? $_smarty_tpl->tpl_vars['rows']->value['client_name'] : null);?>
</option>
	                  <?php }} ?>
	              </select>
	              <input type="text" id="search_key" size="15" placeholder="快速检索" />
	          </dd>
	     </dl>
		<dl class="lineD">
	      <dt>附件上传：</dt>
	      <dd>
	      	<div id="box">
				<div id="test" ></div>
			</div>
	      </dd>
	    </dl>
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" /><b> 注：<span class="red">*</span>为必填项</b>
    </div>
  </div>
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  <input type="hidden" name="uid" id="uid" value="<?php echo $_smarty_tpl->getVariable('tmpid')->value;?>
" />
  </form>
</div>
<!-->
<script>
var cid=$("#uid").val();

$('#test').diyUpload({
	url:'../../../../site/includes/fileupload.php?id=9999',
	success:function( data ) {
	    //alert(data.jsonrpc);
		console.info( data );
	},
	error:function( err ) {
		console.info( err );
	},
	formData:{
	    contractid:0,otherid:cid
	}
});
$(document).ready(function(){
    $("#search_key").live('input propertychange',function(){
            var aa=$("#search_key").val();
            $("#client option").each(function (){  
                var txt = $(this).text();  
                if(txt.toLowerCase().indexOf(aa) >-1){  
                    $(this).attr("selected",true);
                    return false;
                }
             });
    });
});

</script>
<!-->
</body>
</html>