<?php /* Smarty version Smarty-3.0.4, created on 2019-09-29 17:28:44
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/finance/borrow/first.html" */ ?>
<?php /*%%SmartyHeaderCode:14892692905d90794c032a58-47073687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68748916f3bfd6315689dc426f18d0ebdaa47c3e' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/finance/borrow/first.html',
      1 => 1569749247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14892692905d90794c032a58-47073687',
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
<script type="text/javascript" src="../../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
</head>
<body>
<div class="so_main">
  <div class="page_tit">备用金</div>
  <div class="list">
  	<table width="100%" border="0" cellspacing="0" cellpadding="0">
  	<tr>
  		<td width="60%" style="vertical-align:top;">
            <table width="100%" border="1" cellspacing="0" cellpadding="0">
            <tbody>
            <tr style="height:70px;">
			    <td class="ccc_bg" width="33%" style="font-size: 16px;">备用金总额</td>
			    <td class="ccc_bg" width="33%" style="font-size: 16px;">备用金外借</td>
			    <td class="ccc_bg" width="33%" style="font-size: 16px;">备用金池剩余</td>
			</tr>
		  	<tr style="height:80px;">
			    <td style="text-align:center;background-color:#B1C9FF;font-size: 16px;"><a href="../../report/income/detail.php?startdate=2017-01-01&enddate=2017-01-01&b_type=9" target="_blank"><?php echo (isset($_smarty_tpl->getVariable('beiyong')->value['total_money']) ? $_smarty_tpl->getVariable('beiyong')->value['total_money'] : null);?>
</a></td>
			    <td style="text-align:center;background-color:#FE6E47;font-size: 16px;"><a href="list.php"><?php echo (isset($_smarty_tpl->getVariable('beiyong')->value['total_money']) ? $_smarty_tpl->getVariable('beiyong')->value['total_money'] : null)-(isset($_smarty_tpl->getVariable('beiyong')->value['now_money']) ? $_smarty_tpl->getVariable('beiyong')->value['now_money'] : null);?>
</a></td>
			    <td style="text-align:center;background-color:#B1C9FF;font-size: 16px;"><a href="../../report/income/detail.php?startdate=2017-01-01&enddate=2017-01-01&b_type=10" target="_blank"><?php echo (isset($_smarty_tpl->getVariable('beiyong')->value['now_money']) ? $_smarty_tpl->getVariable('beiyong')->value['now_money'] : null);?>
</a></td>
			  </tr>
		    </tbody>
            </table>
  		</td>
  		<td width="40%" style="vertical-align:top;">
  			<table width="100%" border="1" cellspacing="0" cellpadding="0">
		  	<tr style="height:50px;">
			<th width="25%">借款人</th><td width="25%">借款金额</td><td width="25%">已还金额</td><td width="25%">欠款</td>
		  	</tr>
		  	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
		  	<?php $_smarty_tpl->tpl_vars['all_money1'] = new Smarty_variable($_smarty_tpl->getVariable('all_money1')->value+(isset($_smarty_tpl->tpl_vars['row']->value['borrow_money']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_money'] : null), null, null);?>
		  	<?php $_smarty_tpl->tpl_vars['all_money2'] = new Smarty_variable($_smarty_tpl->getVariable('all_money2')->value+(isset($_smarty_tpl->tpl_vars['row']->value['borrow_Returnmoney']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_Returnmoney'] : null), null, null);?>
			  <tr style="height:30px;">
				<th><a href="list.php?search_emp=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['borrow_emp']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_emp'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</a></th>
				<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['borrow_money']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_money'] : null);?>
</td>
				<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['borrow_Returnmoney']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_Returnmoney'] : null);?>
</td>
				<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['borrow_money']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['borrow_Returnmoney']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_Returnmoney'] : null);?>
</td>
			  </tr>
			<?php }} ?>
			<?php if ($_smarty_tpl->getVariable('all_money1')->value!=0||$_smarty_tpl->getVariable('all_money2')->value!=0){?>
			<tr style="height:40px;background-color:#FE6E47;">
				<th>合计</th>
				<td><?php echo $_smarty_tpl->getVariable('all_money1')->value;?>
</td>
				<td><?php echo $_smarty_tpl->getVariable('all_money2')->value;?>
</td>
				<td><?php echo $_smarty_tpl->getVariable('all_money1')->value-$_smarty_tpl->getVariable('all_money2')->value;?>
</td>
			  </tr>
			  <?php }?>
		  	</table>
  		</td>
  	</tr>
  	</table>
  </div>

</div>

</body>
</html>