<?php /* Smarty version Smarty-3.0.4, created on 2019-11-11 17:42:45
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/assets/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:318185dc92d156de463-36108340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8aed46f40bd567c522ac1f903ff44d41d742f9da' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/assets/detail.html',
      1 => 1573465362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '318185dc92d156de463-36108340',
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
<link href="../../../crm/css/style.min862f.css" rel="stylesheet">
<link href="../../../crm/css/bootstrap.min14ed.css" rel="stylesheet">
<link href="../../../crm/css/font-awesome.min93e3.css?" rel="stylesheet">
<link href="../../../crm/fonts1/iconfont.css" rel="stylesheet">
<link href="../../../crm/css/animate.min.css" rel="stylesheet">
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
    .so_main{
      overflow: hidden;
    }
    .xt_problems .page_tit{
      font-size: 14px;
      margin: 0 0 7px;
      padding: 0;
      text-overflow: ellipsis;
      color: #676a6c;
        /* border-bottom: 1px solid #ddd; */
    }
    .s_roblems table th{
      padding: 10px;
      line-height: 21px;
      vertical-align: top;
      border-top: 1px solid #ddd;
      background-color: #F5F5F6!important;
      color: #000;
      font-weight: bold;
      border-bottom: 1px solid #ddd;
    }
    .s_roblems table{
      width: 100%;
      max-width: 100%;
      margin-bottom: 20px;
      border-spacing: 0;
      border-collapse: collapse;
    }
    .list table td{
      padding: 8px;
    }
    .s_roblems table tr td{
      border-left: 1px solid #ddd;
      border-bottom: 1px solid #ddd;
      padding: 10px 0 10px 0;
    }
    .xt_problems table tr th{
      padding: 12px 8px 12px 8px;
    }
    .xt_problems table tr td{
      border-top: 1px solid #e7e7e7;
      border-left: 1px solid #e7e7e7;
      border-right: 1px solid #e7e7e7;
      border-bottom: 1px solid #e7e7e7;
      text-indent: 1em;
    }
    .xt_problems .form2 .table tr td input{
      height: 28px;
      border: 1px solid #e5e6e7;
      width: 100%;
      text-indent: 1em;
    }
    .page_btm{
    	border-top:none;
    }
    .page_btm input{
    	display: inline-block;
    width: 97px;
    height: 34px;
    color: inherit;
    background: transparent;
    border: 1px solid #c2c2c2;
    border-radius: 3px;
    }
    .btn_b:hover{
    	    background-color: #bababa;
    border-color: #bababa;
    color: #FFF;
    }
    .page_btm{
    	    padding: 18px 0 18px 0;
    }
</style>
</head>
<body class="gray-bg wrapper-content animated fadeInRight">
<div class="xt_problems">
<div class="so_main">
  <div class="page_tit">固定资产详细</div>
  <div class="form2 s_roblems">

		<table>
			<tbody>
				<tr>
					<th style="background-color: #F5F5F6;border-left:1px solid #ddd" width="15%">设备类型：</th>
					<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['typename']) ? $_smarty_tpl->getVariable('list')->value['typename'] : null);?>
</td>
					<th style="background-color: #F5F5F6;" width="15%">设备名称：</th>
					<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['assets_name']) ? $_smarty_tpl->getVariable('list')->value['assets_name'] : null);?>
</td>
				</tr>
				<tr>
					<th style="background-color: #F5F5F6;border-left:1px solid #ddd"" width="15%">型号规格：</th>
					<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['assets_spec']) ? $_smarty_tpl->getVariable('list')->value['assets_spec'] : null);?>
</td>
					<th style="background-color: #F5F5F6;" width="15%">购买日期：</th>
					<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['assets_buydate']) ? $_smarty_tpl->getVariable('list')->value['assets_buydate'] : null);?>
</td>
				</tr>
				<tr>
					<th style="background-color: #F5F5F6;border-left:1px solid #ddd"" width="15%">购买经手人：</th>
					<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['assets_buyman']) ? $_smarty_tpl->getVariable('list')->value['assets_buyman'] : null);?>
</td>
					<th style="background-color: #F5F5F6;" width="15%">购买金额：</th>
					<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['assets_buyamount']) ? $_smarty_tpl->getVariable('list')->value['assets_buyamount'] : null);?>
</td>
				</tr>
				<tr>
					<th style="background-color: #F5F5F6;border-left:1px solid #ddd"" width="15%">负责人：</th>
					<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['assets_responsible']) ? $_smarty_tpl->getVariable('list')->value['assets_responsible'] : null);?>
</td>
					<th style="background-color: #F5F5F6;" width="15%">存放门店：</th>
					<td width="35%"><?php echo (isset($_smarty_tpl->getVariable('list')->value['shop_name']) ? $_smarty_tpl->getVariable('list')->value['shop_name'] : null);?>
</td>
				</tr>
			</tbody>
		</table>
	    
    <div class="page_btm" style="text-align: center;">
      <input type="button" class="btn_b" name="btn_save" value="关闭" onclick="window.close();" />
    </div>
  </div>
</div>
</div>
</body>
</html>