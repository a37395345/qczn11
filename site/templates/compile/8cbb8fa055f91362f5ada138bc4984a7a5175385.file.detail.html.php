<?php /* Smarty version Smarty-3.0.4, created on 2015-04-14 17:30:40
         compiled from "D:\czyhqc\site\templates\elsker\operator/finance/change/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:30805552cde405ab6d2-50091956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cbb8fa055f91362f5ada138bc4984a7a5175385' => 
    array (
      0 => 'D:\\czyhqc\\site\\templates\\elsker\\operator/finance/change/detail.html',
      1 => 1429002817,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30805552cde405ab6d2-50091956',
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

<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit"><?php if ($_smarty_tpl->getVariable('item')->value==1){?>其他收入<?php }elseif($_smarty_tpl->getVariable('item')->value==2){?>其他付款<?php }else{ ?>资金账户变动<?php }?></div>
  <div class="form2">
	  	<dl class="lineD">
		  <dt>经手人：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['input_man']) ? $_smarty_tpl->getVariable('list')->value['input_man'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>操作日期：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['add_time']) ? $_smarty_tpl->getVariable('list')->value['add_time'] : null);?>
</dd>
		</dl>
		<?php if ($_smarty_tpl->getVariable('item')->value==1||$_smarty_tpl->getVariable('item')->value==0){?>
	  	<dl class="lineD">
		  <dt>收款方式：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['payment_name_to']) ? $_smarty_tpl->getVariable('list')->value['payment_name_to'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>收款账号：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['bank_name_to']) ? $_smarty_tpl->getVariable('list')->value['bank_name_to'] : null);?>
元</dd>
		</dl>
		<?php }?>
		<?php if ($_smarty_tpl->getVariable('item')->value==2||$_smarty_tpl->getVariable('item')->value==0){?>
		<dl class="lineD">
		  <dt>付款方式：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['payment_name_from']) ? $_smarty_tpl->getVariable('list')->value['payment_name_from'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>付款账号：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['bank_name_from']) ? $_smarty_tpl->getVariable('list')->value['bank_name_from'] : null);?>
</dd>
		</dl>
		
		<?php }?>
		<dl class="lineD">
		  <dt>金额：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['money']) ? $_smarty_tpl->getVariable('list')->value['money'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>备注说明：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_remarks']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_remarks'] : null);?>
</dd>
		</dl>
  </div>
</div>

</body>
</html>