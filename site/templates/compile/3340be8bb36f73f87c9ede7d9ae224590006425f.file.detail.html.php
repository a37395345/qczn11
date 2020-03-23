<?php /* Smarty version Smarty-3.0.4, created on 2015-04-20 12:45:07
         compiled from "D:\czyhqc\site\templates\elsker\operator/finance/baoxiao/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:984455348453113044-76971481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3340be8bb36f73f87c9ede7d9ae224590006425f' => 
    array (
      0 => 'D:\\czyhqc\\site\\templates\\elsker\\operator/finance/baoxiao/detail.html',
      1 => 1429340004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '984455348453113044-76971481',
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
  <div class="page_tit">报销内容详情</div>
  <div class="form2">
	  	<dl class="lineD">
		  <dt>报销人：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['emp_name']) ? $_smarty_tpl->getVariable('list')->value['emp_name'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>报销日期：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_date']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_date'] : null);?>
</dd>
		</dl>
		<?php if ($_smarty_tpl->getVariable('item')->value==1){?>
	  	<dl class="lineD">
		  <dt>合同号：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiaoPaicheContractNum']) ? $_smarty_tpl->getVariable('list')->value['baoxiaoPaicheContractNum'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>现金加油费：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_oil']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_oil'] : null);?>
元&nbsp;&nbsp;&nbsp;&nbsp;加油量：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_oil_number']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_oil_number'] : null);?>
升&nbsp;&nbsp;&nbsp;&nbsp;加油日期：<?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_oil_date']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_oil_date'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>过桥过路费：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_roadQiao']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_roadQiao'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>停车费：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_stopCar']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_stopCar'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>住宿费：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_room']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_room'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>餐费：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_meal']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_meal'] : null);?>
</dd>
		</dl>
		<?php }?>
		<?php if ($_smarty_tpl->getVariable('item')->value==2){?>
		<dl class="lineD">
		  <dt>报销内容：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_content']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_content'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>报销金额：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_money']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_money'] : null);?>
</dd>
		</dl>
		<?php }?>
		<dl class="lineD">
		  <dt>报销备注：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_remarks']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_remarks'] : null);?>
</dd>
		</dl>
  </div>
</div>

</body>
</html>