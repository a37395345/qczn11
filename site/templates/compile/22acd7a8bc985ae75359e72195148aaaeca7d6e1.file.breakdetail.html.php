<?php /* Smarty version Smarty-3.0.4, created on 2019-10-17 10:20:57
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/machine/breakdetail.html" */ ?>
<?php /*%%SmartyHeaderCode:20279171595da7d0091017a1-47940000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22acd7a8bc985ae75359e72195148aaaeca7d6e1' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/machine/breakdetail.html',
      1 => 1569749226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20279171595da7d0091017a1-47940000',
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
  <div class="page_tit">违章明细</div>  
  
  <div class="form2">
	  <dl class="lineD">
	    <dt>违章车辆：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>违章时间：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_date']) ? $_smarty_tpl->getVariable('list')->value['breakrules_date'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
		<dt>违章项目：</dt>
		<dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_item']) ? $_smarty_tpl->getVariable('list')->value['breakrules_item'] : null);?>

		</dd>
	</dl>
	<dl class="lineD">
	    <dt>违章处罚：</dt>
	    <dd>违章款：<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money1']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money1'] : null);?>
元&nbsp;&nbsp;&nbsp;&nbsp;手续费：<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money2']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money2'] : null);?>
元&nbsp;&nbsp;&nbsp;&nbsp;
    	扣分：<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money3']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money3'] : null);?>
分=<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money4']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money4'] : null);?>
元
	    </dd>
	</dl>
	<dl class="lineD">
	    <dt>违章总金额：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money'] : null);?>
元</dd>
	</dl>
	<dl class="lineD">
	    <dt>实际违章处理：</dt>
	    <dd>实际违章款：<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money1_infact']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money1_infact'] : null);?>
元&nbsp;&nbsp;&nbsp;&nbsp;实际手续费：<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money2_infact']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money2_infact'] : null);?>
元&nbsp;&nbsp;&nbsp;&nbsp;
    	实际扣分：<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money3_infact']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money3_infact'] : null);?>
分=<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money4_infact']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money4_infact'] : null);?>
元
	    </dd>
	</dl>
	<dl class="lineD">
	    <dt>实际违章总金额：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money_infact']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money_infact'] : null);?>
元</dd>
	</dl>
	<dl class="lineD">
	    <dt>备注说明：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_remarks']) ? $_smarty_tpl->getVariable('list')->value['breakrules_remarks'] : null);?>
</dd>
	</dl>
	<?php if ((isset($_smarty_tpl->getVariable('list')->value['breakrulesPaicheId']) ? $_smarty_tpl->getVariable('list')->value['breakrulesPaicheId'] : null)!=0){?>
	<dl class="lineD">
	    <dt>派车单号：</dt>
	    <dd><a href="../business/detail.php?uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrulesPaicheId']) ? $_smarty_tpl->getVariable('list')->value['breakrulesPaicheId'] : null);?>
" target="blank"><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_contractNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_contractNum'] : null);?>
</a></dd>
	</dl>
	<?php if ((isset($_smarty_tpl->getVariable('list')->value['breakrules_end']) ? $_smarty_tpl->getVariable('list')->value['breakrules_end'] : null)==1){?>
	<dl class="lineD">
	    <dt>处理时间：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_endtimes']) ? $_smarty_tpl->getVariable('list')->value['breakrules_endtimes'] : null);?>
</dd>
	</dl>
	<dl class="lineD">
	    <dt>处理人：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_endman']) ? $_smarty_tpl->getVariable('list')->value['breakrules_endman'] : null);?>
</dd>
	</dl>
	<?php }else{ ?>
	<dl class="lineD">
	    <dt>状态：</dt>
	    <dd>未处理</dd>
	</dl>
	<?php }?>
	<?php }else{ ?>
	<dl class="lineD">
	    <dt>状态：</dt>
	    <dd>未冻结</dd>
	</dl>
	<?php }?>
  </div>
  
  
</div>

</body>
</html>