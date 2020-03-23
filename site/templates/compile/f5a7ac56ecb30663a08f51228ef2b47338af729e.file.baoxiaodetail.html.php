<?php /* Smarty version Smarty-3.0.4, created on 2019-10-10 14:14:09
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/report/baoxiaodetail.html" */ ?>
<?php /*%%SmartyHeaderCode:8703008375d9ecc31362b73-09802291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5a7ac56ecb30663a08f51228ef2b47338af729e' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/report/baoxiaodetail.html',
      1 => 1570688021,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8703008375d9ecc31362b73-09802291',
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
<script type="text/javascript" src="../../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
</head>
<body>

<div class="so_main">
  <div class="page_tit">支出明细1---时间范围：<?php echo $_smarty_tpl->getVariable('sdate')->value;?>
&nbsp;&nbsp;到&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('edate')->value;?>
</div>
  <?php if ($_smarty_tpl->getVariable('list1')->value&&($_smarty_tpl->getVariable('b_type')->value==0||$_smarty_tpl->getVariable('b_type')->value=='')){?>
  <div class="Toolbar_inbox"><span>司机报销</span></div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th>序号1</th>
	<th>报销日期</th>
	<th>报销人</th>
	<th>过路费</th>
	<th>停车费</th>
	<th>加油费</th>
	<th>住宿费</th>
	<th>就餐费</th>
	<th>派车单号</th>
	<th>录入时间</th>
	<th>报销单号</th>
  </tr>
  
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list1')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
" <?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1)%2==0){?>style="background-color:#EAF2D3;"<?php }?>>
	  	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isOverTime']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isOverTime'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_roadQiao']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_roadQiao'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_stopCar']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_stopCar'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_oil']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_oil'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_room']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_room'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_meal']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_meal'] : null);?>
</td>
	    <td><a href="../../business/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiaoPaicheId']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiaoPaicheId'] : null);?>
" target="_blank"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiaoPaicheContractNum']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiaoPaicheContractNum'] : null);?>
</a></td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_times']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_times'] : null);?>
</td>
	    <td><a href="../../finance/baoxiao/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
" target="_blank"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_code']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_code'] : null);?>
</a></td>
 </tr>
 <?php }} ?>
 <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list10')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
 <tr style="background-color:#FE6E47;">
    <td>合计</td>
    <td colspan="2">&nbsp;</td>
    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['total_money11']) ? $_smarty_tpl->tpl_vars['row']->value['total_money11'] : null);?>
</td>
    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['total_money15']) ? $_smarty_tpl->tpl_vars['row']->value['total_money15'] : null);?>
</td>
    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['total_money12']) ? $_smarty_tpl->tpl_vars['row']->value['total_money12'] : null);?>
</td>
    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['total_money13']) ? $_smarty_tpl->tpl_vars['row']->value['total_money13'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['total_money14']) ? $_smarty_tpl->tpl_vars['row']->value['total_money14'] : null);?>
</td>
    <td ><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['total_money11']) ? $_smarty_tpl->tpl_vars['row']->value['total_money11'] : null)+(isset($_smarty_tpl->tpl_vars['row']->value['total_money15']) ? $_smarty_tpl->tpl_vars['row']->value['total_money15'] : null)+(isset($_smarty_tpl->tpl_vars['row']->value['total_money12']) ? $_smarty_tpl->tpl_vars['row']->value['total_money12'] : null)+(isset($_smarty_tpl->tpl_vars['row']->value['total_money13']) ? $_smarty_tpl->tpl_vars['row']->value['total_money13'] : null)+(isset($_smarty_tpl->tpl_vars['row']->value['total_money14']) ? $_smarty_tpl->tpl_vars['row']->value['total_money14'] : null);?>
</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <?php }} ?>
 </table>
 </div>
 <?php }?>
 <?php if ($_smarty_tpl->getVariable('list2')->value&&($_smarty_tpl->getVariable('b_type')->value!=0||$_smarty_tpl->getVariable('b_type')->value=='')){?>
 <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable(0, null, null);?>
 <div class="Toolbar_inbox"><span>其他报销</span></div>
 <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th>序号1</th>
	<th>报销日期</th>
	<th>报销人</th>
	<th>金额</th>
	<th>报销类型</th>
	<th>付款方式</th>
	<th>付款账号</th>
	<th width="35%">报销内容</th>
	<th>录入时间</th>
	<th>门店</th>
	<th>报销单号</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list2')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <?php if (($_smarty_tpl->getVariable('b_type')->value==''&&(isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_type']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_type'] : null)!="打款蒋政")||$_smarty_tpl->getVariable('b_type')->value==(isset($_smarty_tpl->tpl_vars['row']->value['typeid']) ? $_smarty_tpl->tpl_vars['row']->value['typeid'] : null)){?>
  <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable($_smarty_tpl->getVariable('all_money')->value+(isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_money']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_money'] : null), null, null);?>
  <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->getVariable('count')->value+1, null, null);?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
" <?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1)%2==0){?>style="background-color:#EAF2D3;"<?php }?>>
	  	<td><?php echo $_smarty_tpl->getVariable('count')->value;?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isOverTime']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isOverTime'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_money']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_money'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_type']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_type'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['payment_name']) ? $_smarty_tpl->tpl_vars['row']->value['payment_name'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_name']) ? $_smarty_tpl->tpl_vars['row']->value['bank_name'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_content']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_content'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_times']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_times'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null);?>
</td>
	    <td><a href="../../finance/baoxiao/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
" target="_blank"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_code']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_code'] : null);?>
</a></td>
 </tr>
 <?php }?>
 <?php }} ?>
 <tr style="background-color:#FE6E47;">
    <td>合计</td>
    <td colspan="2">&nbsp;</td>
    <td><?php echo $_smarty_tpl->getVariable('all_money')->value;?>
</td>
    <td colspan="7">&nbsp;</td>
  </tr>
  </table>
  </div>
 <?php }?>
 
 
</div>
<!-->
<script>
	//鼠标移动表格效果
	$(document).ready(function(){
        $("a.zoomIn").fancybox({
            'overlayShow'   : false,
            'transitionIn'  : 'elastic',
            'transitionOut' : 'elastic'
        });         
        
		$("tr[overstyle='on']").hover(
		  function () {
		    $(this).addClass("bg_hover");
		  },
		  function () {
		    $(this).removeClass("bg_hover");
		  }
		);
	});	
	

</script>
<!-->

</body>
</html>