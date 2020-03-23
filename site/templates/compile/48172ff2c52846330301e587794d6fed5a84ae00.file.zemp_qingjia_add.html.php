<?php /* Smarty version Smarty-3.0.4, created on 2019-04-26 16:07:30
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/renshi/zemp_qingjia_add.html" */ ?>
<?php /*%%SmartyHeaderCode:88925cc2bc4271f568-05706269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48172ff2c52846330301e587794d6fed5a84ae00' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/renshi/zemp_qingjia_add.html',
      1 => 1556266029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88925cc2bc4271f568-05706269',
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
<link rel="stylesheet" type="text/css" href="../../../../css/webuploader.css">
<link rel="stylesheet" type="text/css" href="../../../../css/diyUpload.css">
<script src="../../../../jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<script type="text/javascript" src="../../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../../js/check_form.js"></script>
<script type="text/javascript" src="../../../js/laydate/laydate.js"></script>

</head>
<style>
/**/

  .navi_name{font-size:14px;font-weight:bold;}
  .indent{padding-left:40px;}
#box{width:840px; min-height:200px; background:#FF9}
/**/
</style>
<body>
<div class="so_main">
  <div class="page_tit">请假/调休</div>
  
  <form method="post" action="zemp_qingjia_insert.php" enctype="multipart/form-data" onsubmit="return check(this)">
  <div class="form2">

    <dl class="lineD">
    <dt><span class="redstar">*</span>请假/调休类型：</dt>
    <dd><select name="qingjia_nameid" id="qingjia_nameid">
        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('qingjia_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
          <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('employee')->value['emp_post']) ? $_smarty_tpl->getVariable('employee')->value['emp_post'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['qingjia_name']) ? $_smarty_tpl->tpl_vars['rows']->value['qingjia_name'] : null);?>
</option>
        <?php }} ?>
        </select></dd>
    </dl>

    <dl class="lineD">
      <dt><span style="color:red">*</span>请假/调休开始时间：</dt>
      <dd>
        <input name="qingjia_time" id="qingjia_time" placeholder="请输入日期" value="<?php echo $_smarty_tpl->getVariable('val')->value;?>
" class="laydate-icon" onClick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})">
    </dd>
    </dl>

    <dl class="lineD">
      <dt><span style="color:red">*</span>请假/调休时间：</dt>
      <dd>
        <input type="text" id="qingjia_shuliang" name="qingjia_shuliang" value="" />单位
        <select name="qingjia_danwei" id="qingjia_danwei">
          <option value="天">天</option>
          <option value="小时">小时</option>
        
        </select>
    </dd>
    </dl>

    <dl class="lineD">
      <dt><span style="color:red">*</span>请假/调休理由：</dt>
      <dd>
        <textarea name="qingjia_liyou" id="qingjia_liyou" cols="90" rows="8"></textarea>
      </dd>
    </dl>


    <div class="page_btm">
      <input type="submit" class="btn_b" id="bt1" value="确定" />
    </div>
    <input type="hidden" name="uid" id="uid" value="<?php echo $_smarty_tpl->getVariable('tmpid')->value;?>
" />
  </div>
</div>


<script>

$("#bt1").click(function(){
  var wenti_name=$("#wenti_name").val();
  var wenti_shuoming=$("#wenti_shuoming").val();
  if(wenti_name==""){
    alert('标题不能为空！');
    return false;
  }
  if(wenti_shuoming==""){
    alert('请详细描述下需要解决的问题！');
    return false;
  }
});





</script>
</body>
</html>