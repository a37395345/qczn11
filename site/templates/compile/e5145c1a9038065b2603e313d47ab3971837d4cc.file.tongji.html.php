<?php /* Smarty version Smarty-3.0.4, created on 2019-11-07 09:30:26
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/wenti/tongji.html" */ ?>
<?php /*%%SmartyHeaderCode:124335dc373b25041e9-74688222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5145c1a9038065b2603e313d47ab3971837d4cc' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/wenti/tongji.html',
      1 => 1573090223,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124335dc373b25041e9-74688222',
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
<style>
	.gray-bg{
      background-color: #f3f3f4;
      padding: 20px;
    }
    .xt_problems{
      padding: 0 20px 20px 20px;
      background-color: #fff; 
      border-top:4px solid #e7eaec;
      overflow: hidden;
    }
    .xt_problems .table{
    	width: 100%;
	    max-width: 100%;
	    margin-bottom: 20px;
	    border-spacing: 0;
    	border-collapse: collapse;
    }
    .list{
    	padding-top: 20px;
    }
    .list table td{
    	border:1px solid #dddddd;
    }
    .list table{
    	border:1px solid #ccc;
    }
    .xt_problems .table tr td{
    	
    }
</style>
</head>
<body class="gray-bg">
<div class="xt_problems">
<div class="so_main">
  <div class="page_tit">系统问题统计</div>
  <div class="list form2">
            <table class="table table-bordered" width="100%" border="1" cellspacing="0" cellpadding="0">
            <thead>
            <tr>
			    <td class="ccc_bg" width="14.2%" style="font-size: 16px;background-color: #f3f0f0;">全部</td>
			    <td class="ccc_bg" width="14.2%" style="font-size: 16px;background-color: #f3f0f0;">等待审核</td>
			    <td class="ccc_bg" width="14.2%" style="font-size: 16px;background-color: #f3f0f0;">发回修改</td>
			     <td class="ccc_bg" width="14.2%" style="font-size: 16px;background-color: #f3f0f0;">等待处理</td>
			      <td class="ccc_bg" width="14.2%" style="font-size: 16px;background-color: #f3f0f0;">等待确认</td>
			       <td class="ccc_bg" width="14.2%" style="font-size: 16px;background-color: #f3f0f0;">问题解决</td>
			        <td class="ccc_bg" width="14.2%" style="font-size: 16px;background-color: #f3f0f0;">不能解决</td>
			</tr>
		  	<tr>

		  		<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
			    <td style="text-align:center;font-size: 16px;"><a style="font-size: 14px;" href="list.php?lsi_id=<?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value) ? $_smarty_tpl->tpl_vars['rows']->value : null);?>
</a>
			    </td>
			    <?php }} ?>
			</tr>
		    </thead>
            </table>
  </div>

</div>
</div>

</body>
</html>