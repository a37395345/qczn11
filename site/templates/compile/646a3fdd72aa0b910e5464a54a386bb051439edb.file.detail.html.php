<?php /* Smarty version Smarty-3.0.4, created on 2019-10-09 16:51:11
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/finance/change/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:20080016645d9d9f7f7d74b2-76236814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '646a3fdd72aa0b910e5464a54a386bb051439edb' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/finance/change/detail.html',
      1 => 1569749247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20080016645d9d9f7f7d74b2-76236814',
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
<script type="text/javascript" src="../../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
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
</dd>
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
元</dd>
		</dl>
		<dl class="lineD">
		  <dt>备注说明：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['baoxiao_remarks']) ? $_smarty_tpl->getVariable('list')->value['baoxiao_remarks'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
	      <dt>附件：</dt>
	      <dd>
	      <div>
	        <ul>
	        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('list')->value['finance_imglist']) ? $_smarty_tpl->getVariable('list')->value['finance_imglist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
	         <li style="float:left;text-align:center;"><a href="../baoxiao/picture.php?finance_id=<?php echo (isset($_smarty_tpl->getVariable('list')->value['id']) ? $_smarty_tpl->getVariable('list')->value['id'] : null);?>
&nowserial=<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
" title="点击查看原图" target="_blank"><img src="../../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['images']) ? $_smarty_tpl->tpl_vars['rows']->value['images'] : null);?>
" width="100" height="100" /></a><br /><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</li>
	        <?php }} ?>
	        </ul>
	        </div>
			<input onclick="uploadfile(<?php echo (isset($_smarty_tpl->getVariable('list')->value['id']) ? $_smarty_tpl->getVariable('list')->value['id'] : null);?>
)" type="button" class="btn_b" value="补传附件" style="float:right;"/>
	      </dd>
		</dl>
  </div>
</div>

<!-->
<script>
	function uploadfile(bid){
		demo_iframe('list.php?task=upload&f_id='+bid,'上传附件',950,560,'login_js');
	}
</script>
<!-->
</body>
</html>