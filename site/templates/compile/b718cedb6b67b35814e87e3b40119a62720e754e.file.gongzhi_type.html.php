<?php /* Smarty version Smarty-3.0.4, created on 2020-01-04 17:00:52
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/renshi/gongzhi_type.html" */ ?>
<?php /*%%SmartyHeaderCode:165835e105444b44871-49250790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b718cedb6b67b35814e87e3b40119a62720e754e' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/renshi/gongzhi_type.html',
      1 => 1577435575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165835e105444b44871-49250790',
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
<link href="../../../crm/fonts1/iconfont.css?a=1" rel="stylesheet">
<link href="../../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<link href="../../../crm/css/animate.min.css" rel="stylesheet">
<script src="../../../../jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<script type="text/javascript" src="../../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../../js/check_form.js"></script>
<style>
    .a1{
      padding: 10px 12px;
      background-color: #fff;
      border-radius: 3px;
      color: #c4c4c4!important;
      line-height: 40px;
      border: 1px solid #c4c4c4
    }
    .gray-bg{
      background-color: #f3f3f4;
      padding: 20px;
    }
    .xt_problems{
      padding: 0 20px 20px 20px;
      background-color: #fff; 
      border-top:4px solid #e7eaec;
    }
    .xt_problems .page_tit{
      font-size: 14px;
      margin: 0 0 7px;
      padding: 0;
      text-overflow: ellipsis;
      color: #676a6c;
      /*border-bottom: 1px solid #ddd;*/
    }
    .xt_problems .Toolbar_inbox{
      border-bottom: none;
      padding-bottom: 20px;
      background-color: #fff;
    }
    .xt_problems .Toolbar_inbox a{
      transition: all .5s;
      -moz-transition: all .5s; /* Firefox 4 */
      -webkit-transition: all .5s; /* Safari 和 Chrome */
      -o-transition: all .5s; /* Opera */
    }
    .xt_problems .Toolbar_inbox a:hover{
      text-decoration: none;
      background-color: #bababa;
      color: #fff!important;
      border-color:#bababa;
    }
    .s_roblems table th{
      padding: 8px;
      line-height: 21px;
      vertical-align: top;
      border-top: 1px solid #ddd;
      background-color: #F5F5F6!important;
      color: #000;
      font-weight: bold;
    }
    .s_roblems table tr td{
      border-left: 1px solid #ddd;
      border-bottom: 1px solid #ddd;
      padding: 10px 0 10px 0;
    }
    .tr_hover:hover{
      background-color: #f2f4f6;
    }
    a:hover{
      text-decoration: none;
    }
</style>
</head>
<body class="gray-bg wrapper-content animated fadeInRight">
<div class="xt_problems">
<div class="so_main">
  <div class="page_tit" style="float: left;">工资项目</div>
  <!-------- 用户列表 -------->   
  <div class="Toolbar_inbox" style="float: right;">
  	<div class="page right"></div>
  		<a class="a1" href="add_gongzhi_type.php">添加项目</a>&nbsp;&nbsp;&nbsp;&nbsp;
  </div>
  </div>
  <div class="list s_roblems">
  <table class="table table-bordered" width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th class="line_l" width="5%">排序</th>
    <th class="line_l" width="10%">项目名称</th>
	  <th class="line_l" width="10%">单位</th>
	  <th class="line_l" width="10%">计算方式</th>
	  <th class="line_l" width="10%">基础数据</th>
    <th class="line_l" width="45%">规则说明</th>
    <th class="line_l" width="10%">操作</th>
  </tr>

  	<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
  <tr class="tr_hover">
  	<td><?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)+1;?>
</td>
  	<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_name']) ? $_smarty_tpl->tpl_vars['rows']->value['type_name'] : null);?>
</td>
  	<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_danwei']) ? $_smarty_tpl->tpl_vars['rows']->value['type_danwei'] : null);?>
</td>
  	<td><?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['type_jisuan']) ? $_smarty_tpl->tpl_vars['rows']->value['type_jisuan'] : null)==1){?>加<?php }else{ ?>减<?php }?></td>
    <td><?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['type_shuliang']) ? $_smarty_tpl->tpl_vars['rows']->value['type_shuliang'] : null)==1){?>一次<?php }else{ ?>多次<?php }?></td>
    <td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_guize']) ? $_smarty_tpl->tpl_vars['rows']->value['type_guize'] : null);?>
</td>
  	<td style="border-right:1px solid #ddd;"><a title="修改" href="add_gongzhi_type.php?id=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
&op=update"><i class="iconfont icon-xiugai"></i></a> &nbsp;&nbsp;&nbsp;<a title="删除" href="delete_gongzhi_type.php?id=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
"><i class="iconfont icon-shanchu"></i></a></td>
 </tr>
 	<?php }} ?>

 </table>
 </div>
</div>

</body>
</html>