<?php /* Smarty version Smarty-3.0.4, created on 2019-11-11 17:55:39
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/finance/borrow/first.html" */ ?>
<?php /*%%SmartyHeaderCode:47945dc9301bdbdcd3-76946646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02b07a9610d363012fcb5da6caa42b4571deb309' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/finance/borrow/first.html',
      1 => 1573466073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47945dc9301bdbdcd3-76946646',
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
<link href="../../../../css/flbao.css" rel="stylesheet" type="text/css">
<link href="../../../../crm/css/style.min862f.css" rel="stylesheet">
<link href="../../../../crm/css/animate.min.css" rel="stylesheet">
<script type="text/javascript" src="../../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<style>
	.gray-bg{
		background-color: #f3f3f4;
        padding: 20px;
	}
	.xt_problems{
		padding: 0 20px 20px 20px;
      	background-color: #fff; 
      	border-top:4px solid #e7eaec;
	}
	.ibox-tools a{
		padding: 10px 12px;
		border:1px solid #ccc;
	}
	.ibox-tools{
		display: block;
	}
	.page_tit{
		color: #676a6c;
	    margin-left: 5px;
	    border-bottom: 1px solid #ddd;
	    margin-bottom: 26px;
	}
	.xt_problems .table{
      width: 100%;
      max-width: 100%;
      margin-bottom: 20px;
      border-spacing: 0;
      border-collapse: collapse;
    }
	.s_roblems table th{
        padding: 8px;
        line-height: 21px;
        vertical-align: top;
        border-top: 1px solid #ddd;
        background-color: #F5F5F6!important;
        color: #000;
        font-weight: bold;
        border-left: 1px solid #ddd;
    }
    .s_roblems table tr td{
        border-left:1px solid #ddd;
        border-bottom:1px solid #ddd;
        padding: 10px 0 10px 0;
    }
    .s_roblems table tr td a{
    	color: #676a6c!important;
    }
    .s_roblems table tr:hover{
    	background-color: #F5F5F6;
    }
    .sktwin{
    	border-top: 1px solid #ddd;
	    background-color: #F5F5F6;
	    color: #000;
	    font-size: 14px;
    }
</style>
</head>
<body class="gray-bg wrapper-content animated fadeInRight">
<div class="xt_problems">
<div class="so_main">
  <div class="page_tit">备用金</div>
  <div class="ibox-tools" style=" padding-right: 20px;float: inherit;height: 40px;">
	<div style="margin-top:5px;" >
		<a href="../../report/income/detail.php?startdate=2017-01-01&enddate=2017-01-01&b_type=9" class="btn btn-outline btn-default">备用金总额：<span style="color:red"><?php echo (isset($_smarty_tpl->getVariable('beiyong')->value['total_money']) ? $_smarty_tpl->getVariable('beiyong')->value['total_money'] : null);?>
</span>
		</a>
		<a href="list.php" class="btn btn-outline btn-default">备用金外借：<span style="color:red"><?php echo (isset($_smarty_tpl->getVariable('beiyong')->value['total_money']) ? $_smarty_tpl->getVariable('beiyong')->value['total_money'] : null)-(isset($_smarty_tpl->getVariable('beiyong')->value['now_money']) ? $_smarty_tpl->getVariable('beiyong')->value['now_money'] : null);?>
</span>
		</a>
		<a href="../../report/income/detail.php?startdate=2017-01-01&enddate=2017-01-01&b_type=10" class="btn btn-outline btn-default">备用金池剩余：<span style="color:red"><?php echo (isset($_smarty_tpl->getVariable('beiyong')->value['now_money']) ? $_smarty_tpl->getVariable('beiyong')->value['now_money'] : null);?>
</span>
		</a>
	</div>
  </div>

  <div class="list s_roblems">
  	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		  	<tr style="height:50px;">
			<td class="sktwin" width="25%">借款人</td><td class="sktwin" width="25%">借款金额</td><td class="sktwin" width="25%">已还金额</td><td class="sktwin" width="25%">欠款</td>
		  	</tr>
		  	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
		  	<?php $_smarty_tpl->tpl_vars['all_money1'] = new Smarty_variable($_smarty_tpl->getVariable('all_money1')->value+(isset($_smarty_tpl->tpl_vars['row']->value['borrow_money']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_money'] : null), null, null);?>
		  	<?php $_smarty_tpl->tpl_vars['all_money2'] = new Smarty_variable($_smarty_tpl->getVariable('all_money2')->value+(isset($_smarty_tpl->tpl_vars['row']->value['borrow_Returnmoney']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_Returnmoney'] : null), null, null);?>
			  <tr style="height:30px;">
				<td><a href="list.php?search_emp=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['borrow_emp']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_emp'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</a></td>
				<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['borrow_money']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_money'] : null);?>
</td>
				<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['borrow_Returnmoney']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_Returnmoney'] : null);?>
</td>
				<td style="border-right:1px solid #ddd;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['borrow_money']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['borrow_Returnmoney']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_Returnmoney'] : null);?>
</td>
			  </tr>
			<?php }} ?>
			<?php if ($_smarty_tpl->getVariable('all_money1')->value!=0||$_smarty_tpl->getVariable('all_money2')->value!=0){?>
			<tr style="height:40px;background-color:#FE6E47;">
				<td style="background-color: #FE6E47!important;color: #fff!important">合计</td>
				<td style="color: #fff;"><?php echo $_smarty_tpl->getVariable('all_money1')->value;?>
</td>
				<td style="color: #fff;"><?php echo $_smarty_tpl->getVariable('all_money2')->value;?>
</td>
				<td style="color: #fff;"><?php echo $_smarty_tpl->getVariable('all_money1')->value-$_smarty_tpl->getVariable('all_money2')->value;?>
</td>
			  </tr>
			  <?php }?>
  	</table>
  </div>

</div>
</div>
</body>
</html>