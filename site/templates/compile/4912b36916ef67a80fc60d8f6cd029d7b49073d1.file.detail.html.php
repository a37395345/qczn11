<?php /* Smarty version Smarty-3.0.4, created on 2015-11-12 13:16:59
         compiled from "D:\web\site\templates\elsker\operator/sales/contract/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:7728564420cba19650-52577192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4912b36916ef67a80fc60d8f6cd029d7b49073d1' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/sales/contract/detail.html',
      1 => 1447233610,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7728564420cba19650-52577192',
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
  <div class="page_tit">合同详细</div>  
  
  <div class="form2">
	  	<dl class="lineD">
		  <dt>合同编号：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_number']) ? $_smarty_tpl->getVariable('list')->value['contract_number'] : null);?>
</dd>
		</dl>
	  	<dl class="lineD">
		  <dt>客户名称：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['client_name']) ? $_smarty_tpl->getVariable('list')->value['client_name'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		    <dt>用车类型：</dt>
		    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['item_name']) ? $_smarty_tpl->getVariable('list')->value['item_name'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
	      <dt>合同有效期：</dt>
	      <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_startdate']) ? $_smarty_tpl->getVariable('list')->value['contract_startdate'] : null);?>
~<?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_enddate']) ? $_smarty_tpl->getVariable('list')->value['contract_enddate'] : null);?>
</dd>
	    </dl>
	    <dl class="lineD">
		    <dt>业务员：</dt>
		    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['yewuyuan']) ? $_smarty_tpl->getVariable('list')->value['yewuyuan'] : null);?>
</dd>
		</dl>
	    <dl class="lineD">
		  <dt>合同内容概述：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_content']) ? $_smarty_tpl->getVariable('list')->value['contract_content'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
	      <dt>合同扫描件：</dt>
	      <dd>
	      <div>
	        <ul>
	        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('list')->value['contract_imglist']) ? $_smarty_tpl->getVariable('list')->value['contract_imglist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
	         <li style="float:left;text-align:center;"><a href="picture.php?contract_id=<?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_id']) ? $_smarty_tpl->getVariable('list')->value['contract_id'] : null);?>
&nowserial=<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
" title="点击查看原图" target="_blank"><img src="../../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['images']) ? $_smarty_tpl->tpl_vars['rows']->value['images'] : null);?>
" width="100" height="100" /></a><br /><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</li>
	        <?php }} ?>
	        </ul>
	        </div>
	      </dd>
	   </dl>
    <div class="page_btm">
      <a href="javascript:window.close();">关闭</a>
    </div>
  </div>
</div>
</body>
</html>