<?php /* Smarty version Smarty-3.0.4, created on 2019-09-03 18:35:49
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/renshi/zemp_xiangxi.html" */ ?>
<?php /*%%SmartyHeaderCode:297635d6e42053b83b0-32456425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ae8c6896a92281718b3a714e93a14adee168311' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/renshi/zemp_xiangxi.html',
      1 => 1567506940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '297635d6e42053b83b0-32456425',
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
    <dt>姓名：</dt>
    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['emp_name']) ? $_smarty_tpl->getVariable('list')->value['emp_name'] : null);?>
</dd>
  </dl>
  <dl class="lineD">
    <dt>状态：</dt>
    <dd style="color:red"><?php echo (isset($_smarty_tpl->getVariable('list')->value['zhuangtai']) ? $_smarty_tpl->getVariable('list')->value['zhuangtai'] : null);?>
</dd>
  </dl>
  <dl class="lineD">
    <dt>职位：</dt>
    <dd ><?php echo (isset($_smarty_tpl->getVariable('list')->value['title']) ? $_smarty_tpl->getVariable('list')->value['title'] : null);?>
</dd>
  </dl>

  <dl class="lineD">
    <dt>工资结构：</dt>
    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['zhiwei_name']) ? $_smarty_tpl->getVariable('list')->value['zhiwei_name'] : null);?>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='/site/operator/zhiwei/index.php?task=xiangxi&id=<?php echo (isset($_smarty_tpl->getVariable('list')->value['emp_zhiweiid']) ? $_smarty_tpl->getVariable('list')->value['emp_zhiweiid'] : null);?>
&emp_id=<?php echo (isset($_smarty_tpl->getVariable('list')->value['emp_id']) ? $_smarty_tpl->getVariable('list')->value['emp_id'] : null);?>
' target="_blank">点击查询工资结构</a></dd>
  </dl>
  <dl class="lineD">
    <dt>安全奖励：</dt>
    <dd ><?php if ((isset($_smarty_tpl->getVariable('list')->value['zemp_anquan']) ? $_smarty_tpl->getVariable('list')->value['zemp_anquan'] : null)==1){?>有<?php }else{ ?>没有<?php }?></dd>
  </dl>
  <?php if ((isset($_smarty_tpl->getVariable('list')->value['zemp_butie']) ? $_smarty_tpl->getVariable('list')->value['zemp_butie'] : null)!=0){?>
  <dl class="lineD">
    <dt>额外补贴：</dt>
    <dd ><?php echo (isset($_smarty_tpl->getVariable('list')->value['zemp_butie']) ? $_smarty_tpl->getVariable('list')->value['zemp_butie'] : null);?>
/月</dd>
  </dl>
  <?php }?>
  <dl class="lineD">
    <dt>性别：</dt>
    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['emp_sex']) ? $_smarty_tpl->getVariable('list')->value['emp_sex'] : null);?>
</dd>
  </dl>
  <dl class="lineD">
    <dt>身份证号：</dt>
    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['emp_num']) ? $_smarty_tpl->getVariable('list')->value['emp_num'] : null);?>
</dd>
  </dl>
  <dl class="lineD">
    <dt>手机号：</dt>
    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['emp_phone']) ? $_smarty_tpl->getVariable('list')->value['emp_phone'] : null);?>
</dd>
  </dl>
  <dl class="lineD">
    <dt>家庭电话：</dt>
    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['emp_homeTel']) ? $_smarty_tpl->getVariable('list')->value['emp_homeTel'] : null);?>
</dd>
  </dl>
  <dl class="lineD">
    <dt>家庭地址：</dt>
    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['emp_homeAdd']) ? $_smarty_tpl->getVariable('list')->value['emp_homeAdd'] : null);?>
</dd>
  </dl>
  <dl class="lineD">
    <dt>介绍：</dt>
    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['emp_introduce']) ? $_smarty_tpl->getVariable('list')->value['emp_introduce'] : null);?>
</dd>
  </dl>
  <dl class="lineD">
    <dt>合同开始日期：</dt>
    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['emp_pactStartDate']) ? $_smarty_tpl->getVariable('list')->value['emp_pactStartDate'] : null);?>
</dd>
  </dl>
  <dl class="lineD">
      <dt>照片：</dt>
      <dd>
         <a href="../../../thumb/<?php echo (isset($_smarty_tpl->getVariable('list')->value['emp_image']) ? $_smarty_tpl->getVariable('list')->value['emp_image'] : null);?>
" title="点击查看原图" target="_blank"><img src="../../../thumb/<?php echo (isset($_smarty_tpl->getVariable('list')->value['emp_image']) ? $_smarty_tpl->getVariable('list')->value['emp_image'] : null);?>
" width="100" height="100" /></a>
     
      </dd>
    </dl>
</div>
</div>
</body>
</html>