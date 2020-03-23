<?php /* Smarty version Smarty-3.0.4, created on 2019-09-29 17:30:44
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/oilcard/first.html" */ ?>
<?php /*%%SmartyHeaderCode:19985427035d9079c44ee976-52308343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'baa93053c14afa470f37f289df731007b255a15a' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/oilcard/first.html',
      1 => 1569749236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19985427035d9079c44ee976-52308343',
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
<link href="../../../css/flbao.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>

</head>
<body>
<div class="so_main">
  <div class="page_tit">加油卡一览</div>
  <div class="list">
            <table width="100%" border="1" cellspacing="0" cellpadding="0">
            <tbody>
            <tr style="height:70px;">
			    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('first')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
			    <td class="ccc_bg" width="20%" style="font-size: 16px;"><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['card_state']) ? $_smarty_tpl->tpl_vars['row']->value['card_state'] : null)==-2){?>暂停使用<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['card_state']) ? $_smarty_tpl->tpl_vars['row']->value['card_state'] : null)==-1){?>挂失<?php }else{ ?>正常<?php }?></td>
			    <?php }} ?>
			    <td class="ccc_bg" width="20%" style="font-size: 16px;">合计</td>
			</tr>
		  	<tr style="height:80px;">
			    <?php  $_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('first')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row1']->key => $_smarty_tpl->tpl_vars['row1']->value){
?>
			    <?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->getVariable('total')->value+(isset($_smarty_tpl->tpl_vars['row1']->value['nCount']) ? $_smarty_tpl->tpl_vars['row1']->value['nCount'] : null), null, null);?>
			    <td style="text-align:center;background-color:#B1C9FF;font-size: 16px;"><a href="list.php?search_status=<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['card_state']) ? $_smarty_tpl->tpl_vars['row1']->value['card_state'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['nCount']) ? $_smarty_tpl->tpl_vars['row1']->value['nCount'] : null);?>
</a></td>
			    <?php }} ?>
			    <td style="text-align:center;background-color:#B1C9FF;font-size: 16px;"><a href="list.php?search_status=9"><?php echo $_smarty_tpl->getVariable('total')->value;?>
</a></td>
			  </tr>
		    </tbody>
            </table>
  </div>

</div>

</body>
</html>