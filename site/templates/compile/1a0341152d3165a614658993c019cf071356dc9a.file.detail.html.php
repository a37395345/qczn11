<?php /* Smarty version Smarty-3.0.4, created on 2016-11-15 08:56:40
         compiled from "D:\web\site\templates\elsker\operator/machine/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:9476582a5d48792c77-33922908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a0341152d3165a614658993c019cf071356dc9a' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/machine/detail.html',
      1 => 1479115911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9476582a5d48792c77-33922908',
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
  <div class="form2">
	  <dl class="lineD">
	    <dt>车牌号：</dt>
	    <dd>苏D<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>车辆颜色：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_color']) ? $_smarty_tpl->getVariable('list')->value['car_color'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>车型：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_model']) ? $_smarty_tpl->getVariable('list')->value['car_model'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>车辆品牌：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_brand']) ? $_smarty_tpl->getVariable('list')->value['car_brand'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>车辆种类：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_type']) ? $_smarty_tpl->getVariable('list')->value['car_type'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>发动机号：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_motor']) ? $_smarty_tpl->getVariable('list')->value['car_motor'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>车辆识别号：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_frame']) ? $_smarty_tpl->getVariable('list')->value['car_frame'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>座位数：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_seat']) ? $_smarty_tpl->getVariable('list')->value['car_seat'] : null);?>
</dd>
	  </dl>
	  <?php if ((isset($_smarty_tpl->getVariable('list')->value['car_status']) ? $_smarty_tpl->getVariable('list')->value['car_status'] : null)=="2"||(isset($_smarty_tpl->getVariable('list')->value['car_status']) ? $_smarty_tpl->getVariable('list')->value['car_status'] : null)=="3"){?>
	  <dl class="lineD">
	    <dt>状态：</dt>
	    <dd style="line-height:26px;"><?php if ((isset($_smarty_tpl->getVariable('list')->value['car_status']) ? $_smarty_tpl->getVariable('list')->value['car_status'] : null)=="2"){?>维修<?php }?>
	    <?php if ((isset($_smarty_tpl->getVariable('list')->value['car_status']) ? $_smarty_tpl->getVariable('list')->value['car_status'] : null)=="3"){?>已出售，出售日期:<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_cancelDate']) ? $_smarty_tpl->getVariable('list')->value['car_cancelDate'] : null);?>
，出售价格:<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_cancelPrice']) ? $_smarty_tpl->getVariable('list')->value['car_cancelPrice'] : null);?>

	    <?php if ((isset($_smarty_tpl->getVariable('list')->value['car_canceldeal']) ? $_smarty_tpl->getVariable('list')->value['car_canceldeal'] : null)){?><br/>处理方式：<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_canceldeal']) ? $_smarty_tpl->getVariable('list')->value['car_canceldeal'] : null);?>
<?php }?>
	    <?php if ((isset($_smarty_tpl->getVariable('list')->value['car_cancelrepara']) ? $_smarty_tpl->getVariable('list')->value['car_cancelrepara'] : null)){?><br/>赔款说明：<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_cancelrepara']) ? $_smarty_tpl->getVariable('list')->value['car_cancelrepara'] : null);?>
<?php }?>
	    <?php if ((isset($_smarty_tpl->getVariable('list')->value['car_cancelaccount']) ? $_smarty_tpl->getVariable('list')->value['car_cancelaccount'] : null)){?><br/>入账情况：<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_cancelaccount']) ? $_smarty_tpl->getVariable('list')->value['car_cancelaccount'] : null);?>
<?php }?>
	    <?php if ((isset($_smarty_tpl->getVariable('list')->value['car_cancelremarks']) ? $_smarty_tpl->getVariable('list')->value['car_cancelremarks'] : null)){?><br/>补充说明：<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_cancelremarks']) ? $_smarty_tpl->getVariable('list')->value['car_cancelremarks'] : null);?>
<?php }?>
	    <?php }?></dd>
	  </dl>
	  <?php }?>
	  <dl class="lineD">
	    <dt>入账日期：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_saleDate']) ? $_smarty_tpl->getVariable('list')->value['car_saleDate'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>开票价格：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_amount']) ? $_smarty_tpl->getVariable('list')->value['car_amount'] : null);?>
元</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>实际购买车价：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_infactamount']) ? $_smarty_tpl->getVariable('list')->value['car_infactamount'] : null);?>
元</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>购置税：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_buytax']) ? $_smarty_tpl->getVariable('list')->value['car_buytax'] : null);?>
元</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>车辆注册日期：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_cartDate']) ? $_smarty_tpl->getVariable('list')->value['car_cartDate'] : null);?>
</dd>
	  </dl>
	  <?php if ((isset($_smarty_tpl->getVariable('list')->value['car_oilcard']) ? $_smarty_tpl->getVariable('list')->value['car_oilcard'] : null)==1){?>
	  <dl class="lineD">
	    <dt>绑定油卡：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['card_no']) ? $_smarty_tpl->getVariable('list')->value['card_no'] : null);?>
</dd>
	  </dl>
	  <?php }?>
	  <dl class="lineD">
	    <dt>备注：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_remarks']) ? $_smarty_tpl->getVariable('list')->value['car_remarks'] : null);?>
</dd>
	  </dl>
	  
	  <dl class="lineD">
	      <dt>车辆照片：</dt>
	      <dd>
	        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('list')->value['car_imglist']) ? $_smarty_tpl->getVariable('list')->value['car_imglist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
	         <a href="picture.php?car_id=<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_id']) ? $_smarty_tpl->getVariable('list')->value['car_id'] : null);?>
&nowserial=<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
" title="点击查看原图" target="blank"><img src="../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['images']) ? $_smarty_tpl->tpl_vars['rows']->value['images'] : null);?>
" width="100" height="100" /></a>
	        <?php }} ?>
	      </dd>
	  </dl>
      
  </div>
</div>
</body>
</html>