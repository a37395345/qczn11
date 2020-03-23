<?php /* Smarty version Smarty-3.0.4, created on 2019-06-24 10:16:06
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/insur/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:235955d103266dd2fb3-90981694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f532caec0eb19dc439bd398f4b232c5ec6534851' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/insur/detail.html',
      1 => 1447233606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '235955d103266dd2fb3-90981694',
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
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit">明细</div>  
  <div class="form2">
	  <dl class="lineD">
	    <dt>投保车辆：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>保险类型：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['insurance_type']) ? $_smarty_tpl->getVariable('list')->value['insurance_type'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>起始日期：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['insurance_start']) ? $_smarty_tpl->getVariable('list')->value['insurance_start'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>截止日期：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['insurance_end']) ? $_smarty_tpl->getVariable('list')->value['insurance_end'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>投保公司：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['insurance_company']) ? $_smarty_tpl->getVariable('list')->value['insurance_company'] : null);?>
</dd>
	  </dl>
	  <?php if ((isset($_smarty_tpl->getVariable('list')->value['insurance_type']) ? $_smarty_tpl->getVariable('list')->value['insurance_type'] : null)=="商业险"){?>
	  <dl class="lineD">
	    <dt>车损险(保额)：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['insurance_loss']) ? $_smarty_tpl->getVariable('list')->value['insurance_loss'] : null);?>
元</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>三责险(保额)：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['insurance_respons']) ? $_smarty_tpl->getVariable('list')->value['insurance_respons'] : null);?>
元</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>保费合计：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['insurance_money']) ? $_smarty_tpl->getVariable('list')->value['insurance_money'] : null);?>
元</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>优惠折扣：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['insurance_discount']) ? $_smarty_tpl->getVariable('list')->value['insurance_discount'] : null);?>
%</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>返利：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['insurance_return']) ? $_smarty_tpl->getVariable('list')->value['insurance_return'] : null);?>
元</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>投保险种：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['insurance_item']) ? $_smarty_tpl->getVariable('list')->value['insurance_item'] : null);?>
</dd>
	  </dl>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('list')->value['insurance_type']) ? $_smarty_tpl->getVariable('list')->value['insurance_type'] : null)=="交强险"){?>
	  <dl class="lineD">
	    <dt>交强险金额：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['insurance_mandatory']) ? $_smarty_tpl->getVariable('list')->value['insurance_mandatory'] : null);?>
元</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>浮动比率：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['insurance_float']) ? $_smarty_tpl->getVariable('list')->value['insurance_float'] : null);?>
%</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>车船税金额：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['insurance_cartax']) ? $_smarty_tpl->getVariable('list')->value['insurance_cartax'] : null);?>
元</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>总金额：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['insurance_money2']) ? $_smarty_tpl->getVariable('list')->value['insurance_money2'] : null);?>
元</dd>
	  </dl>
	  <?php }?>
	  <dl class="lineD">
	    <dt>备注：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['insurance_remark']) ? $_smarty_tpl->getVariable('list')->value['insurance_remark'] : null);?>
</dd>
	  </dl>
    <div class="page_btm">
      <input type="button" class="btn_b" value="关闭" onclick="window.close();" />
    </div>
  </div>
</div>
</body>
</html>