<?php /* Smarty version Smarty-3.0.4, created on 2020-03-10 17:43:46
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/sim/create.html" */ ?>
<?php /*%%SmartyHeaderCode:156475e676152e30b36-02116015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e592d5938f85e6a2bc2acd93ef5517c49ef2e61a' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/sim/create.html',
      1 => 1571707170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156475e676152e30b36-02116015',
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
<script type="text/javascript" src="../../../js/check_form.js"></script>
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit"><?php if ($_smarty_tpl->getVariable('task')->value=='inmoney_acc'){?>充值<?php }else{ ?>编辑<?php }?></div>  
  <form method="post" action="list.php" onsubmit="return sim_check(this)" name="form1">
  <div class="form2">
	  <?php if ($_smarty_tpl->getVariable('task')->value=='inmoney_acc'){?>
	  <dl class="lineD">
	    <dt>手机号码：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['card_no']) ? $_smarty_tpl->getVariable('list')->value['card_no'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>充值日期：</dt>
	    <dd><input type="text" name="buy_date" id="buy_date" size="16" onclick="calendar.show(this);" readonly="readonly" value="<?php echo (isset($_smarty_tpl->getVariable('info')->value['buy_date']) ? $_smarty_tpl->getVariable('info')->value['buy_date'] : null);?>
"/></dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>充值金额：</dt>
	    <dd><input type="text" name="buy_money" size="8" value="<?php echo (isset($_smarty_tpl->getVariable('info')->value['buy_money']) ? $_smarty_tpl->getVariable('info')->value['buy_money'] : null);?>
" />元</dd>
	  </dl>
	  <?php }else{ ?>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>手机号码：</dt>
	    <dd><input type="text" name="card_no" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['card_no']) ? $_smarty_tpl->getVariable('list')->value['card_no'] : null);?>
"/></dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>购买日期：</dt>
	    <dd><input type="text" name="buy_date" id="buy_date" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['buy_date']) ? $_smarty_tpl->getVariable('list')->value['buy_date'] : null);?>
" onclick="calendar.show(this);" readonly="readonly" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>购买金额：</dt>
	    <dd><input type="text" name="buy_money" size="8" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['buy_money']) ? $_smarty_tpl->getVariable('list')->value['buy_money'] : null);?>
"/>元</dd>
	  </dl>
	  <?php }?>
	  <dl class="lineD">
	    <dt>备注：</dt>
	    <dd><textarea name="remark" cols="40" rows="5"><?php echo (isset($_smarty_tpl->getVariable('list')->value['remark']) ? $_smarty_tpl->getVariable('list')->value['remark'] : null);?>
<?php echo (isset($_smarty_tpl->getVariable('info')->value['remark']) ? $_smarty_tpl->getVariable('info')->value['remark'] : null);?>
</textarea></dd>
	  </dl>  
    	
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" /><b> 注：<span class="red">*</span>为必填项</b>
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['sim_id']) ? $_smarty_tpl->getVariable('list')->value['sim_id'] : null);?>
" />
  <input type="hidden" name="rid" value="<?php echo (isset($_smarty_tpl->getVariable('info')->value['id']) ? $_smarty_tpl->getVariable('info')->value['id'] : null);?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  </form>
</div>

</body>
</html>