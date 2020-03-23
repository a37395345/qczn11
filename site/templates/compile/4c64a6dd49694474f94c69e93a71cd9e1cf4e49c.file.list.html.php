<?php /* Smarty version Smarty-3.0.4, created on 2020-01-06 14:02:48
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/system/profit/list.html" */ ?>
<?php /*%%SmartyHeaderCode:59185e12cd889b9341-85582620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c64a6dd49694474f94c69e93a71cd9e1cf4e49c' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/system/profit/list.html',
      1 => 1578290505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59185e12cd889b9341-85582620',
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
<!-- <link href="../../../../css/style.css" rel="stylesheet" type="text/css"> -->
<link href="../../../../crm/fonts1/iconfont.css" rel="stylesheet">
<link href="../../../../crm1/css/style.css?v=4.1.0" rel="stylesheet">
<link href="../../../../crm1/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
<link href="../../../../crm1/css/font-awesome.css?v=4.4.0" rel="stylesheet">
<link href="../../../../crm1/css/animate.css" rel="stylesheet">
<link href="../../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<link href="../../../css/conmone.css" rel="stylesheet">
<script type="text/javascript" src="../../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<script type="text/javascript" src="../../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN1.js?a=101"></script>
<style>
	.table th,td{
		text-align: center;
	}
	.table td a:hover{
		text-decoration: none;
	}
</style>
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
<div class="ibox float-e-margins" >
  <!-------- 用户列表 -------->
  <div class="wrapper wrapper-content" style=" margin: 0; padding: 0;">
                <div class="ibox float-e-margins" style="margin:0">
	                <div class="ibox-title" style="margin: 0;padding: 0;margin-bottom: 3px;">
	                <h5 style="padding-top: 15px;color: #676a6c;font-weight: bold;padding-left: 10px;">公司收益表</h5>
		                <div class="ibox-tools" style="padding-top: 12px; padding-right: 20px;float: right">
	                            <span style="color:#000;">数据统计截止时间：<?php echo $_smarty_tpl->getVariable('addtime')->value;?>
</span>
	                    </div>
	                    <div class="ibox-tools" style="padding-top: 12px; padding-left: 10px;float: left">
                            <span style="color:#000;">年份:</span>
                        </div>
	                    <div class="ibox-tools" style="float: left;padding-top: 7px; padding-left: 10px;">
							<select name="searchyear" style="height: 30px;">
								<option value="2018" <?php if ($_smarty_tpl->getVariable('nowyear')->value==2018){?>selected<?php }?>>2018年</option>
								<option value="2019" <?php if ($_smarty_tpl->getVariable('nowyear')->value==2019){?>selected<?php }?>>2019年</option>
								<option value="2020" <?php if ($_smarty_tpl->getVariable('nowyear')->value==2020){?>selected<?php }?>>2020年</option>
							</select>
					  	</div>
					</div>
                </div>
                <!-- End Panel Other -->
            </div>
  <div class="ibox-content" style="overflow: hidden;padding: 0">
  <div class="col-sm-12" style="padding:0">
	<div class="col-sm-6 col-lg-6" style="padding-left:0">
	<div class="ibox-title" style="margin: 0;padding: 0;margin-bottom: 3px;border-color: #fff;">
		<h5 style="padding-top: 15px;color: #676a6c;font-weight: bold;padding-left: 10px;">当年收入表</h5>
	</div>
	<div class="ibox-content">
  <table class="table table-bordered" width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="background: #F5F5F6;text-align: center;" class="line_l">月份</th>
    <th style="background: #F5F5F6;text-align: center;" class="line_l">收入</th>
	<th style="background: #F5F5F6;text-align: center;" class="line_l">卖车款</th>

	<th style="background: #F5F5F6;text-align: center;" class="line_l">除卖车款收入</th>
  </tr>
  <?php $_smarty_tpl->tpl_vars['heji'] = new Smarty_variable(0, null, null);?>
  <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable(0, null, null);?>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  <tr overstyle='on' id="profit_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
		<td><?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)+1;?>
</td>
	  	<td class="total1"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['a']) ? $_smarty_tpl->tpl_vars['row']->value['a'] : null);?>
</td>
	    <td class="total2"><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['b']) ? $_smarty_tpl->tpl_vars['row']->value['b'] : null)==''){?>0.00<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['b']) ? $_smarty_tpl->tpl_vars['row']->value['b'] : null);?>
<?php }?></td>
		<td class="total3"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['c']) ? $_smarty_tpl->tpl_vars['row']->value['c'] : null);?>
</td>
		<?php $_smarty_tpl->tpl_vars['heji'] = new Smarty_variable($_smarty_tpl->getVariable('heji')->value+(isset($_smarty_tpl->tpl_vars['row']->value['h']) ? $_smarty_tpl->tpl_vars['row']->value['h'] : null), null, null);?>
		<?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->getVariable('index')->value+1, null, null);?>
 </tr>
 <?php }} ?>

 <tr style="background-color:red;color: #fff;">
    <td>合计</td>
	<td class="td1"></td>
	<td class="td2"></td>
	<td class="td3"></td>
 </tr>
 </table>
 </div>
 </div>

<div class="col-sm-6 col-lg-6" style="padding-right:0">
<div class="ibox-title" style="margin: 0;padding: 0;margin-bottom: 3px;border-color: #fff;">
		<h5 style="padding-top: 15px;color: #676a6c;font-weight: bold;padding-left: 10px;">当年支出表</h5>
	</div>
	<div class="ibox-content">
	<table class="table table-bordered" width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<th style="background: #F5F5F6;text-align: center;" class="line_l">月份</th>
			<th style="background: #F5F5F6;text-align: center;" class="line_l">支出</th>
			<th style="background: #F5F5F6;text-align: center;" class="line_l">净买车款</th>
			<th style="background: #F5F5F6;text-align: center;" class="line_l">除买车款支出</th>
		</tr>
		<?php $_smarty_tpl->tpl_vars['heji'] = new Smarty_variable(0, null, null);?>
  		<?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable(0, null, null);?>
  		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  			<tr overstyle='on' id="profit_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
				<td><?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)+1;?>
</td>
				<td class="total4"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['d']) ? $_smarty_tpl->tpl_vars['row']->value['d'] : null);?>
</td>
				<td class="total5"><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['e']) ? $_smarty_tpl->tpl_vars['row']->value['e'] : null)==''){?>0.00<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['e']) ? $_smarty_tpl->tpl_vars['row']->value['e'] : null);?>
<?php }?></td>
				<td class="total6"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['f']) ? $_smarty_tpl->tpl_vars['row']->value['f'] : null);?>
</td>
				<?php $_smarty_tpl->tpl_vars['heji'] = new Smarty_variable($_smarty_tpl->getVariable('heji')->value+(isset($_smarty_tpl->tpl_vars['row']->value['h']) ? $_smarty_tpl->tpl_vars['row']->value['h'] : null), null, null);?>
				<?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->getVariable('index')->value+1, null, null);?>
			 </tr>
  		<?php }} ?>
  		 <tr style="background-color:red;color: #fff;">
		    <td>合计</td>
			<td class="td4"></td>
			<td class="td5"></td>
			<td class="td6"></td>
		 </tr>
	</table>
	</div>
</div>
</div>

</div>

<div class="col-sm-12" style="padding: 0;">
	<div class="ibox float-e-margins">
		<div class="ibox-title" style="margin: 0;padding: 0;">
	    	<h5 style="padding-top: 12px;padding-left: 10px;float: left;color: #676a6c;font-weight: bold;">公司利润表</h5>
	    </div>
	    <div class="ibox-content">
	    	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
	    		<tr>
	    			<th style="background: #F5F5F6;text-align: center;" class="line_l">月份</th>
	    			<th style="background: #F5F5F6;text-align: center;" class="line_l">利润</th>
					<th style="background: #F5F5F6;text-align: center;" class="line_l">车辆折旧</th>
					<th style="background: #F5F5F6;text-align: center;" class="line_l">实际利润</th>
					<th style="background: #F5F5F6;text-align: center;" class="line_l">月基准利润</th>
					<th style="background: #F5F5F6;text-align: center;" class="line_l">股权收益</th>
	    		</tr>
	    		  <?php $_smarty_tpl->tpl_vars['heji'] = new Smarty_variable(0, null, null);?>
				  <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable(0, null, null);?>
				  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
				  <tr overstyle='on' id="profit_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
						<td><?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)+1;?>
</td>
						<td class="total7"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['c']) ? $_smarty_tpl->tpl_vars['row']->value['c'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['f']) ? $_smarty_tpl->tpl_vars['row']->value['f'] : null);?>
</td>
						<td class="total8"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['g']) ? $_smarty_tpl->tpl_vars['row']->value['g'] : null);?>
</td>
						<td class="total9"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['c']) ? $_smarty_tpl->tpl_vars['row']->value['c'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['f']) ? $_smarty_tpl->tpl_vars['row']->value['f'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['g']) ? $_smarty_tpl->tpl_vars['row']->value['g'] : null);?>
</td>
						<td>250000</td>
						<td class="total_sy"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['h']) ? $_smarty_tpl->tpl_vars['row']->value['h'] : null)-250000;?>
</td>
						<?php $_smarty_tpl->tpl_vars['heji'] = new Smarty_variable($_smarty_tpl->getVariable('heji')->value+(isset($_smarty_tpl->tpl_vars['row']->value['h']) ? $_smarty_tpl->tpl_vars['row']->value['h'] : null), null, null);?>
						<?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->getVariable('index')->value+1, null, null);?>
				 </tr>
				 <?php }} ?>
				 <tr style="background-color:red;color: #fff;">
				    <td>合计</td>
					<td class="td7"></td>
					<td class="td8"></td>
					<td class="td9"></td>
					<td><?php echo number_format($_smarty_tpl->getVariable('base_profit')->value,2,".",'');?>
</td>
				    <td><?php $_smarty_tpl->tpl_vars['bb'] = new Smarty_variable(($_smarty_tpl->getVariable('base_profit')->value/12)*$_smarty_tpl->getVariable('index')->value, null, null);?>
						<?php $_smarty_tpl->tpl_vars['zy'] = new Smarty_variable(sprintf("%.2f",$_smarty_tpl->getVariable('heji')->value)-sprintf("%.2f",$_smarty_tpl->getVariable('bb')->value), null, null);?>
						<?php if ($_smarty_tpl->getVariable('zy')->value>0){?><span class="total_money" style="color: #fff"><?php echo $_smarty_tpl->getVariable('zy')->value;?>
</span><?php }else{ ?><span class="total_money" style="color: #fff"><?php echo $_smarty_tpl->getVariable('zy')->value;?>
</span><?php }?></td>
				 </tr>
	    	</table>
	    </div>
	</div>
</div>


<div class="col-sm-12" style="padding: 0;">
<div class="ibox float-e-margins">
  <div class="ibox-title" style="margin: 0;padding: 0;">
    <h5 style="padding-top: 12px;padding-left: 10px;float: left;color: #676a6c;font-weight: bold;">员工收益表</h5>
    <div class="ibox-tools" style="padding-top: 6px; margin-right: 22px;float: right;">
	<a href="javascript:add(0);" class="btn btn-outline btn-default">
    	<i class="glyphicon glyphicon-plus" aria-hidden="true"></i>添加
 	</a>
  </div>
  </div>
  <!-------- 用户列表 -------->
  <div class="ibox-content">
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
  <tr>
    <th style="background: #F5F5F6;text-align: center;" class="line_l">姓名</th>
	<th style="background: #F5F5F6;text-align: center;" class="line_l">部门</th>
	<th style="background: #F5F5F6;text-align: center;" class="line_l">职务</th>
	<th style="background: #F5F5F6;text-align: center;" class="line_l">占股比例</th>
	<th style="background: #F5F5F6;text-align: center;" class="line_l">占股金额</th>
	<th style="background: #F5F5F6;text-align: center;" class="line_l">开始月份</th>
	<th style="background: #F5F5F6;text-align: center;" class="line_l">结束月份</th>
	<th style="background: #F5F5F6;text-align: center;" class="line_l">收益总额</th>
	<!-- <th class="line_l">收益明细</th> -->
	<th style="background: #F5F5F6;text-align: center;" class="line_l" width="14%">操作</th>
  </tr>
  <?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable(0, null, null);?>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('emplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  <?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->getVariable('total')->value+(isset($_smarty_tpl->tpl_vars['row']->value['total_profit']) ? $_smarty_tpl->tpl_vars['row']->value['total_profit'] : null), null, null);?>
  <tr overstyle='on' id="emp_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['title']) ? $_smarty_tpl->tpl_vars['row']->value['title'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['percent']) ? $_smarty_tpl->tpl_vars['row']->value['percent'] : null);?>
%</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['percent_sum']) ? $_smarty_tpl->tpl_vars['row']->value['percent_sum'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['startyear']) ? $_smarty_tpl->tpl_vars['row']->value['startyear'] : null);?>
年<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['startmonth']) ? $_smarty_tpl->tpl_vars['row']->value['startmonth'] : null);?>
月</td>
		<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['endyear']) ? $_smarty_tpl->tpl_vars['row']->value['endyear'] : null)&&(isset($_smarty_tpl->tpl_vars['row']->value['endmonth']) ? $_smarty_tpl->tpl_vars['row']->value['endmonth'] : null)){?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['endyear']) ? $_smarty_tpl->tpl_vars['row']->value['endyear'] : null);?>
年<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['endmonth']) ? $_smarty_tpl->tpl_vars['row']->value['endmonth'] : null);?>
月<?php }else{ ?>永久<?php }?></td>
		<td>
			<?php $_smarty_tpl->tpl_vars['shouyis'] = new Smarty_variable(0, null, null);?>
			<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
				<?php if (((isset($_smarty_tpl->tpl_vars['k']->value) ? $_smarty_tpl->tpl_vars['k']->value : null)+1)>=(isset($_smarty_tpl->tpl_vars['row']->value['startmonth']) ? $_smarty_tpl->tpl_vars['row']->value['startmonth'] : null)&&((isset($_smarty_tpl->tpl_vars['k']->value) ? $_smarty_tpl->tpl_vars['k']->value : null)+1)<=(isset($_smarty_tpl->tpl_vars['row']->value['endmonth']) ? $_smarty_tpl->tpl_vars['row']->value['endmonth'] : null)){?>
				<?php $_smarty_tpl->tpl_vars['shouyi'] = new Smarty_variable(((isset($_smarty_tpl->tpl_vars['rows']->value['h']) ? $_smarty_tpl->tpl_vars['rows']->value['h'] : null)-($_smarty_tpl->getVariable('base_profit')->value/12))*(isset($_smarty_tpl->tpl_vars['row']->value['percent']) ? $_smarty_tpl->tpl_vars['row']->value['percent'] : null)/100, null, null);?>
				
				<?php $_smarty_tpl->tpl_vars['shouyis'] = new Smarty_variable($_smarty_tpl->getVariable('shouyis')->value+$_smarty_tpl->getVariable('shouyi')->value, null, null);?>
				<?php $_smarty_tpl->tpl_vars['shouyis'] = new Smarty_variable(number_format($_smarty_tpl->getVariable('shouyis')->value,2,".",''), null, null);?>
				<?php }?>
			<?php }} ?>
			
			<?php if ($_smarty_tpl->getVariable('shouyis')->value>0){?><span style="color: #fff"><?php echo $_smarty_tpl->getVariable('shouyis')->value;?>
元</span><?php }else{ ?><span style="color: #57f554"><?php echo $_smarty_tpl->getVariable('shouyis')->value;?>
元</span><?php }?>
		</td>
		<td><a title="编辑" href="javascript:add(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
);"><i class="iconfont icon-xiugai"></i></a>&nbsp;&nbsp;
		<a title="删除" href="javascript:if(confirm('是否确定删除该记录？')){window.location.href='list.php?task=delete&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
&searchyear=<?php echo $_smarty_tpl->getVariable('nowyear')->value;?>
';}"><i class="iconfont icon-shanchu"></i></a>
		</td>
 </tr>
 <?php }} ?>
 </table>
 </div>
 </div>
</div>

<div class="col-sm-12" style="padding: 0;">
	<div class="ibox float-e-margins">
		<div class="ibox-title" style="margin: 0;padding: 0;">
		    <h5 style="padding-top: 12px;padding-left: 10px;float: left;color: #676a6c;font-weight: bold;">股权占比表</h5>
		</div>
		<div class="ibox-content">
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-hover">
				<tr>
					<th style="background: #F5F5F6;text-align: center;" class="line_l">月份/占股比例</th>
					<th style="background: #F5F5F6;text-align: center;" class="line_l">1.00%</th>
					<th style="background: #F5F5F6;text-align: center;" class="line_l">2.00%</th>
					<th style="background: #F5F5F6;text-align: center;" class="line_l">3.00%</th>
					<th style="background: #F5F5F6;text-align: center;" class="line_l">4.00%</th>
					<th style="background: #F5F5F6;text-align: center;" class="line_l">5.00%</th>
				</tr>
				<tr>
					<td>1</td>
					<td class="gq1"></td>
					<td class="gq2"></td>
					<td class="gq3"></td>
					<td class="gq4"></td>
					<td class="gq5"></td>
				</tr>
				<tr>
					<td>2</td>
					<td class="gq1"></td>
					<td class="gq2"></td>
					<td class="gq3"></td>
					<td class="gq4"></td>
					<td class="gq5"></td>
				</tr>
				<tr>
					<td>3</td>
					<td class="gq1"></td>
					<td class="gq2"></td>
					<td class="gq3"></td>
					<td class="gq4"></td>
					<td class="gq5"></td>
				</tr>
				<tr>
					<td>4</td>
					<td class="gq1"></td>
					<td class="gq2"></td>
					<td class="gq3"></td>
					<td class="gq4"></td>
					<td class="gq5"></td>
				</tr>
				<tr>
					<td>5</td>
					<td class="gq1"></td>
					<td class="gq2"></td>
					<td class="gq3"></td>
					<td class="gq4"></td>
					<td class="gq5"></td>
				</tr>
				<tr>
					<td>6</td>
					<td class="gq1"></td>
					<td class="gq2"></td>
					<td class="gq3"></td>
					<td class="gq4"></td>
					<td class="gq5"></td>
				</tr>
				<tr>
					<td>7</td>
					<td class="gq1"></td>
					<td class="gq2"></td>
					<td class="gq3"></td>
					<td class="gq4"></td>
					<td class="gq5"></td>
				</tr>
				<tr>
					<td>8</td>
					<td class="gq1"></td>
					<td class="gq2"></td>
					<td class="gq3"></td>
					<td class="gq4"></td>
					<td class="gq5"></td>
				</tr>
				<tr>
					<td>9</td>
					<td class="gq1"></td>
					<td class="gq2"></td>
					<td class="gq3"></td>
					<td class="gq4"></td>
					<td class="gq5"></td>
				</tr>
				<tr>
					<td>10</td>
					<td class="gq1"></td>
					<td class="gq2"></td>
					<td class="gq3"></td>
					<td class="gq4"></td>
					<td class="gq5"></td>
				</tr>
				<tr>
					<td>11</td>
					<td class="gq1"></td>
					<td class="gq2"></td>
					<td class="gq3"></td>
					<td class="gq4"></td>
					<td class="gq5"></td>
				</tr>
				<tr>
					<td>12</td>
					<td class="gq1"></td>
					<td class="gq2"></td>
					<td class="gq3"></td>
					<td class="gq4"></td>
					<td class="gq5"></td>
				</tr>
				<tr style="background-color:red;color: #fff;">
					<td>总计</td>
					<td class="ss1"></td>
					<td class="ss2"></td>
					<td class="ss3"></td>
					<td class="ss4"></td>
					<td class="ss5"></td>
				</tr>
			</table>
		</div>
	</div>
</div>

</div>
<!-->
 <script>
	$(".total_sy").each(function(){
		//var xdd = parseFloat($(this).text());
		$(this).text(parseFloat($(this).text()).toFixed(2));
	})
</script>
<script type="text/javascript">
function tableAdd(tab,k) {
    var s = 0;
    var tr = $(tab);
    for (var i = 0; i < tr.length; i++)
        s += parseFloat(tr.eq(i).text()) || 0;
    $(".td"+k).text((s).toFixed(2));
}
$(function(){
    tableAdd(".total1",1);
    tableAdd(".total2",2);
    tableAdd(".total3",3);
    tableAdd(".total4",4);
    tableAdd(".total5",5);
    tableAdd(".total6",6);
    tableAdd(".total7",7);
    tableAdd(".total8",8);
    tableAdd(".total9",9);
});
</script>
<script>
	function percent(tab,k) {
		var tablength = $(tab);
    	for (var i = 0; i < tablength.length; i++){
    		$(".gq1").eq(i).text((parseFloat(($(".total_sy").eq(i).text())*0.01)).toFixed(2));
    		$(".gq2").eq(i).text((parseFloat(($(".total_sy").eq(i).text())*0.02)).toFixed(2));
    		$(".gq3").eq(i).text((parseFloat(($(".total_sy").eq(i).text())*0.03)).toFixed(2));
    		$(".gq4").eq(i).text((parseFloat(($(".total_sy").eq(i).text())*0.04)).toFixed(2));
    		$(".gq5").eq(i).text((parseFloat(($(".total_sy").eq(i).text())*0.05)).toFixed(2));
    	}
	}
	$(function(){
	    percent(".total_sy",1);
	});


	function tableAdd_a(xdd,m) {
	    var s = 0;
	    var xx = $(xdd);
	    for (var i = 0; i < xx.length; i++)
	        s += parseFloat(xx.eq(i).text()) || 0;
	    $(".ss"+m).text((s).toFixed(2));
	}
	$(function(){
	    tableAdd_a(".gq1",1);
	    tableAdd_a(".gq2",2);
	    tableAdd_a(".gq3",3);
	    tableAdd_a(".gq4",4);
	    tableAdd_a(".gq5",5);
	});

	//鼠标移动表格效果
	$(document).ready(function(){
		$("tr[overstyle='on']").hover(
		  function () {
		    $(this).addClass("bg_hover");
		  },
		  function () {
		    $(this).removeClass("bg_hover");
		  }
		);
		$("select[name='searchyear']").change(function(){
	    	var selectedvalue = $("select[name='searchyear'] option:selected").val();
			location.href="list.php?searchyear="+selectedvalue;
	    	//$("input[name='search_shop'][value='"+selectedvalue+"']").attr("checked",true);
	    	//$("#form1").submit();
	    });
	});
	
	function checkon(o){
		if( o.checked == true ){
			$(o).parents('tr').addClass('bg_on') ;
		}else{
			$(o).parents('tr').removeClass('bg_on') ;
		}
	}
	
	function checkAll(o){
		if( o.checked == true ){
			$('input[name="checkbox"]').attr('checked','true');
			$('tr[overstyle="on"]').addClass("bg_on");
		}else{
			$('input[name="checkbox"]').removeAttr('checked');
			$('tr[overstyle="on"]').removeClass("bg_on");
		}
	}

	//获取已选择用户的ID数组
	function getChecked() {
		var uids = new Array();
		$.each($('table input:checked'), function(i, n){
			uids.push( $(n).val() );
		});
		return uids;
	}
	
	//删除用户
	function deleteGroup(uid) {
		uid = uid ? uid : getChecked();
		uid = uid.toString();
		if(uid == '' || !confirm('删除成功后将无法恢复，确认继续？')) return false;
		
		$.post("delete.php?multi=1", {uid:uid}, function(res){
			if(res == '1') {
				uid = uid.split(',');
				for(i = 0; i < uid.length; i++) {
					$('#admin_group_'+uid[i]).remove();
				}
				ui.success('操作成功');
			}else {
				ui.error('操作失败');
			}
		});
	}
	
	function folder(type, _this) {
		$('#search_'+type).slideToggle('fast');
		if ($(_this).html() == '展开') {
			$(_this).html('收起');
		}else {
			$(_this).html('展开');
		}
		
	}
	var body_W = $("body").width();
	function setBody_W(){
        body_W = $("body").width();
    }
	function add(uid){
		setBody_W();
		var selectedvalue = $("select[name='searchyear'] option:selected").val();
    	demo_iframe('create.php?uid='+uid+'&searchyear='+selectedvalue,'添加人员',body_W,500,'login_js');
    }

	function detail(uid,recid){
		var selectedvalue = $("select[name='searchyear'] option:selected").val();
    	demo_iframe('list.php?task=detail&uid='+uid+'&searchyear='+selectedvalue+'&recid='+recid,'收益明细',600,500,'login_js');
    }
	function cal(){
    	demo_iframe('../../../../profitmonth.php?auto=1','实时统计',450,450,'login_js');
    }
	function cal2(){
    	demo_iframe('../../../../profitemp.php?auto=1','重新计算',450,450,'login_js');
    }
</script>
<!-->

</body>
</html>