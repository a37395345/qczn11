<?php /* Smarty version Smarty-3.0.4, created on 2019-10-09 16:49:18
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/assets/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:13221374875d9d9f0e81eae3-27560285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6707b7796e3f1c9f35cfdb2ee647bbf0e3b3cc11' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/assets/detail.html',
      1 => 1569749203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13221374875d9d9f0e81eae3-27560285',
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
</head>
<body>
<div class="so_main">
  <div class="page_tit">固定资产详细</div>
  <div class="form2">
	  	<dl class="lineD">
		  <dt>设备类型：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['typename']) ? $_smarty_tpl->getVariable('list')->value['typename'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>设备名称：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['assets_name']) ? $_smarty_tpl->getVariable('list')->value['assets_name'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>型号规格：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['assets_spec']) ? $_smarty_tpl->getVariable('list')->value['assets_spec'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>购买日期：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['assets_buydate']) ? $_smarty_tpl->getVariable('list')->value['assets_buydate'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>购买经手人：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['assets_buyman']) ? $_smarty_tpl->getVariable('list')->value['assets_buyman'] : null);?>
</dd>
		</dl>
	  	<dl class="lineD">
		  <dt>购买金额：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['assets_buyamount']) ? $_smarty_tpl->getVariable('list')->value['assets_buyamount'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>负责人：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['assets_responsible']) ? $_smarty_tpl->getVariable('list')->value['assets_responsible'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
	      <dt>存放门店：</dt>
	      <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['shop_name']) ? $_smarty_tpl->getVariable('list')->value['shop_name'] : null);?>
</dd>
	    </dl>
	    
    <div class="page_btm">
      <input type="button" class="btn_b" name="btn_save" value="关闭" onclick="window.close();" />
    </div>
  </div>
</div>
</body>
</html>