<?php /* Smarty version Smarty-3.0.4, created on 2014-05-06 13:36:41
         compiled from "D:\Phpserv\elsker\admincp\site\templates\elsker\operator/product/detail/create.html" */ ?>
<?php /*%%SmartyHeaderCode:14767536874e9c17164-71002382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93987150c5a2455e838532a29b49face117dfffa' => 
    array (
      0 => 'D:\\Phpserv\\elsker\\admincp\\site\\templates\\elsker\\operator/product/detail/create.html',
      1 => 1399354524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14767536874e9c17164-71002382',
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
<link href="/admincp/css/style.css" rel="stylesheet" type="text/css">
<link href="/admincp/css/box.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/admincp/js/jquery.js"></script>
<script type="text/javascript" src="/admincp/js/common.js"></script>
<script type="text/javascript" src="/admincp/js/box.js"></script>
<script type="text/javascript" src="/admincp/js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="/admincp/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="/admincp/js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
    <link rel="stylesheet" href="/admincp/js/kindeditor/themes/default/default.css" />
    <link rel="stylesheet" href="/admincp/js/kindeditor/plugins/code/prettify.css" />
    <script charset="utf-8" src="/admincp/js/kindeditor/kindeditor.js"></script>
    <script charset="utf-8" src="/admincp/js/kindeditor/lang/zh_CN.js"></script>
    <script charset="utf-8" src="/admincp/js/kindeditor/plugins/code/prettify.js"></script>
    <script>
        KindEditor.ready(function(K) {
            var editor1 = K.create('textarea[name="content1"]', {
                cssPath : '/admincp/js/kindeditor//plugins/code/prettify.css',
                uploadJson : '/admincp/js/kindeditor/php/upload_json.php',
                fileManagerJson : '/admincp/js/kindeditor/php/file_manager_json.php',
                allowFileManager : true,
                afterCreate : function() {
                    var self = this;
                    K.ctrl(document, 13, function() {
                        self.sync();
                        K('form[name=form1]')[0].submit();
                    });
                    K.ctrl(self.edit.doc, 13, function() {
                        self.sync();
                        K('form[name=form1]')[0].submit();
                    });
                }
            });
            prettyPrint();
        });
    </script>
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit">编辑</div>
  
  <form method="post" action="insert.php" enctype="multipart/form-data" onsubmit="return check(this)" name="form1">
  <div class="form2">

      <dl class="lineD">
          <dt>产品名称：</dt>
          <dd>
              <input type="text" name="name" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['name']) ? $_smarty_tpl->getVariable('list')->value['name'] : null);?>
" /> *
          </dd>
      </dl>

      <dl class="lineD">
          <dt>使用人群：</dt>
          <dd>
            <?php if ((isset($_smarty_tpl->getVariable('cate1List')->value[0]['multi_choice']) ? $_smarty_tpl->getVariable('cate1List')->value[0]['multi_choice'] : null)==1){?>
              <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cate1List')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
              <input type="checkbox" name="target_id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" id="target_id" class="subnavi" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['checked']) ? $_smarty_tpl->tpl_vars['rows']->value['checked'] : null)==1){?>checked<?php }?> /><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>

              <?php }} ?>
            <?php }else{ ?>
              <select name="target_id" >
                  <option value="">请选择</option>
                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cate1List')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['target_id']) ? $_smarty_tpl->getVariable('list')->value['target_id'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>
</option>
                  <?php }} ?>
              </select>
            <?php }?>
          </dd>
      </dl>

      <dl class="lineD">
          <dt>年龄阶段：</dt>
          <dd>
              <?php if ((isset($_smarty_tpl->getVariable('cate2List')->value[0]['multi_choice']) ? $_smarty_tpl->getVariable('cate2List')->value[0]['multi_choice'] : null)==1){?>
                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cate2List')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                  <input type="checkbox" name="age_id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" id="age_id" class="subnavi" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['checked']) ? $_smarty_tpl->tpl_vars['rows']->value['checked'] : null)==1){?>checked<?php }?> /><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>

                  <?php }} ?>
              <?php }else{ ?>
                  <select name="age_id" >
                      <option value="">请选择</option>
                      <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cate2List')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                      <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['age_id']) ? $_smarty_tpl->getVariable('list')->value['age_id'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>
</option>
                      <?php }} ?>
                  </select>
              <?php }?>
          </dd>
      </dl>

      <dl class="lineD">
          <dt>产品功效：</dt>
          <dd>
              <?php if ((isset($_smarty_tpl->getVariable('cate3List')->value[0]['multi_choice']) ? $_smarty_tpl->getVariable('cate3List')->value[0]['multi_choice'] : null)==1){?>
                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cate3List')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                  <input type="checkbox" name="effect_id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" id="effect_id" class="subnavi" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['checked']) ? $_smarty_tpl->tpl_vars['rows']->value['checked'] : null)==1){?>checked<?php }?> /><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>

                  <?php }} ?>
              <?php }else{ ?>
                  <select name="effect_id" >
                      <option value="">请选择</option>
                      <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cate3List')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                      <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['effect_id']) ? $_smarty_tpl->getVariable('list')->value['effect_id'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>
</option>
                      <?php }} ?>
                  </select>
              <?php }?>
          </dd>
      </dl>

      <dl class="lineD">
          <dt>使用环境：</dt>
          <dd>
              <?php if ((isset($_smarty_tpl->getVariable('cate4List')->value[0]['multi_choice']) ? $_smarty_tpl->getVariable('cate4List')->value[0]['multi_choice'] : null)==1){?>
                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cate4List')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                  <input type="checkbox" name="season_id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" id="season_id" class="subnavi" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['checked']) ? $_smarty_tpl->tpl_vars['rows']->value['checked'] : null)==1){?>checked<?php }?> /><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>

                  <?php }} ?>
              <?php }else{ ?>
                  <select name="season_id" >
                      <option value="">请选择</option>
                      <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cate4List')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                      <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['season_id']) ? $_smarty_tpl->getVariable('list')->value['season_id'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>
</option>
                      <?php }} ?>
                  </select>
              <?php }?>
          </dd>
      </dl>

      <dl class="lineD">
          <dt>产品系列：</dt>
          <dd>
              <?php if ((isset($_smarty_tpl->getVariable('cate5List')->value[0]['multi_choice']) ? $_smarty_tpl->getVariable('cate5List')->value[0]['multi_choice'] : null)==1){?>
                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cate5List')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                  <input type="checkbox" name="serials_id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" id="serials_id" class="subnavi" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['checked']) ? $_smarty_tpl->tpl_vars['rows']->value['checked'] : null)==1){?>checked<?php }?> /><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>

                  <?php }} ?>
              <?php }else{ ?>
                  <select name="serials_id" >
                      <option value="">请选择</option>
                      <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cate5List')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                      <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['serials_id']) ? $_smarty_tpl->getVariable('list')->value['serials_id'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>
</option>
                      <?php }} ?>
                  </select>
              <?php }?>
          </dd>
      </dl>

      <dl class="lineD">
          <dt>产品详细类型(排序用)：</dt>
          <dd>
              <select name="cate_id" >
                  <option value="">请选择</option>
              <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cate6List')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                    <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['cate_id']) ? $_smarty_tpl->getVariable('list')->value['cate_id'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>
</option>
              <?php }} ?>
              </select>
          </dd>
      </dl>
    <dl class="lineD">
      <dt>所属渠道：</dt>
      <dd>
      	<input type="hidden" id="old_channel_id" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['channel_id']) ? $_smarty_tpl->getVariable('list')->value['channel_id'] : null);?>
" />
        	  <?php if ((isset($_smarty_tpl->getVariable('cate7List')->value[0]['multi_choice']) ? $_smarty_tpl->getVariable('cate7List')->value[0]['multi_choice'] : null)==1){?>
                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cate7List')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                  <input type="checkbox" name="channel_id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" id="channel_id" class="subnavi" /><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>

                  <?php }} ?>
              <?php }else{ ?>
                  <select name="effect_id" >
                      <option value="">请选择</option>
                      <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cate7List')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                      <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['effect_id']) ? $_smarty_tpl->getVariable('list')->value['effect_id'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>
</option>
                      <?php }} ?>
                  </select>
              <?php }?>
	  </dd>
    </dl>
    
     <dl class="lineD">
      <dt>产品图片：</dt>
      <dd>
        <input type="file" name="images" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['images']) ? $_smarty_tpl->getVariable('list')->value['images'] : null);?>
"/> *<a href="/thumb/<?php echo (isset($_smarty_tpl->getVariable('list')->value['images']) ? $_smarty_tpl->getVariable('list')->value['images'] : null);?>
" class="zoomIn" title="点击查看原图"><?php echo (isset($_smarty_tpl->getVariable('list')->value['images']) ? $_smarty_tpl->getVariable('list')->value['images'] : null);?>
</a> （正常尺寸：700 X 700 png）
      </dd>
    </dl>

      <dl class="lineD">
          <dt>前标卖点：</dt>
          <dd>
              <textarea name="front_claim" style="width:350px;height:50px;" ><?php echo (isset($_smarty_tpl->getVariable('list')->value['front_claim']) ? $_smarty_tpl->getVariable('list')->value['front_claim'] : null);?>
</textarea> *
          </dd>
      </dl>


      <dl class="lineD">
          <dt>选择植物成分：</dt>
          <dd>
              <select name="composition_id" >
                  <option value="">请选择</option>
                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('compositionList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['composition_id']) ? $_smarty_tpl->getVariable('list')->value['composition_id'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
-<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>
</option>
                  <?php }} ?>
              </select>
          </dd>
      </dl>
      
      <dl class="lineD">
          <dt>选择视频：</dt>
          <dd>
              <select name="video_id" >
                  <option value="">请选择</option>
                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('videoList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['video_id']) ? $_smarty_tpl->getVariable('list')->value['video_id'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>
</option>
                  <?php }} ?>
              </select>
          </dd>
      </dl>


      <dl class="lineD">
          <dt>测评报告：</dt>
          <dd>
              <input type="file" name="report" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['report']) ? $_smarty_tpl->getVariable('list')->value['report'] : null);?>
"/> *<a href="/thumb/<?php echo (isset($_smarty_tpl->getVariable('list')->value['report']) ? $_smarty_tpl->getVariable('list')->value['report'] : null);?>
" class="zoomIn" title="点击查看原图"><?php echo (isset($_smarty_tpl->getVariable('list')->value['report']) ? $_smarty_tpl->getVariable('list')->value['report'] : null);?>
</a>
          </dd>
      </dl>

      <dl class="lineD">
          <dt>关联产品ID：</dt>
          <dd>
              <input type="text" name="relation_pid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['relation_pid']) ? $_smarty_tpl->getVariable('list')->value['relation_pid'] : null);?>
" /> * (id之间以半角逗号分开)
          </dd>
      </dl>


      <dl class="lineD">
          <dt>条形码编号：</dt>
          <dd>
              <input type="text" name="barcode" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['barcode']) ? $_smarty_tpl->getVariable('list')->value['barcode'] : null);?>
" />
          </dd>
      </dl>

	 <dl class="lineD">
      <dt>状态：</dt>
      <dd>
        <!--<input type="text" name="status" value="<?php echo (isset($_smarty_tpl->getVariable('badge')->value['status']) ? $_smarty_tpl->getVariable('badge')->value['status'] : null);?>
"/>-->
		<input type="radio" name="status"  value="1" <?php if ((isset($_smarty_tpl->getVariable('list')->value['status']) ? $_smarty_tpl->getVariable('list')->value['status'] : null)==1){?>checked<?php }else{ ?><?php }?>>激活
	    <input type="radio" name="status"  value="0" <?php if ((isset($_smarty_tpl->getVariable('list')->value['status']) ? $_smarty_tpl->getVariable('list')->value['status'] : null)==0){?>checked<?php }else{ ?><?php }?>>关闭
	  </dd>
    </dl>

	
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" />
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['pid']) ? $_smarty_tpl->getVariable('list')->value['pid'] : null);?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" /></form>
</div>

<script type="text/javascript">
	function selectAll(){
		$("input[type='checkbox']").attr("checked",true);
	}
	function unselectAll(){
		$("input[type='checkbox']").attr("checked",false);
	}
	$(document).ready(function(){
		var sel_channel_id=$("#old_channel_id").val();
		if (sel_channel_id!=''){
			var b = sel_channel_id.split(","); 
			for (var i=0;i<b.length;i++) {
				$("[value='"+b[i]+"']").attr("checked",'true');
			}
		}
		
        $("a.zoomIn").fancybox({
            'overlayShow'   : false,
            'transitionIn'  : 'elastic',
            'transitionOut' : 'elastic'
        });         
		$(".subnavi").click(function(){
			var checked = false;
			$(this).parent().parent().find(".subnavi").each(function(){
				if($(this).attr("checked")){
					checked = true;
				}
			});
			var navi = $(this).parent().parent().parent().find(".navi");
			if(checked){
				navi.attr("checked",true);
			}else{
				navi.attr("checked",false);
			}
		});
		$(".navi").click(function(){
			$(this).parent().find(".subnavi").attr("checked",$(this).attr("checked"));
		});
        
        $("#cate1_id").change(function(){
            $this = $(this);
            var level1_id = $this.val();
            $.get('../level3/list.php',
            {
                task:'getLevel2List',
                level1_id:level1_id
            },function(data){
                var obj = eval("("+data+")");
                            
                    $("#cate2_id").empty();
                    $("#cate2_id").append("<option value=''>-请选择-</option>");                  
                if (obj.result == 'OK')
                { 
                    var level2List = obj.level2List;
                    for(var i = 0, len = level2List.length; i < len; i++)
                    {
                        $("#cate2_id").append("<option value='"+level2List[i]['look_book_cate_id']+"'>"+level2List[i]['title']+"</option>");   
                    }
                }
            }); 
        });                 
        
	});
	
	function check(_form){
        if(_form.cate1_id.value==""){
            alert("请选择一级分类!");
            _form.cate1_id.focus();
            return false;
        }
        
        if(_form.cate2_id.value==""){
            alert("请选择二级分类!");
            _form.cate2_id.focus();
            return false;
        } 
        
        
        if(_form.task.value!="update"){
            if(_form.small_pic.value==""){
            alert("请选择小图!");
            _form.small_pic.focus();
            return false;
            }
            
            if(_form.medium_pic.value==""){
            alert("请选择中图!");
            _form.medium_pic.focus();
            return false;
            }
            
            if(_form.big_pic.value==""){
            alert("请选择大图!");
            _form.big_pic.focus();
            return false;
            }                
        }                      

		
		return true;
	}
</script>

</body>
</html>