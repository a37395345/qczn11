<?php /* Smarty version Smarty-3.0.4, created on 2014-05-04 10:52:18
         compiled from "D:\Phpserv\elsker\admincp\site\templates\elsker\operator/product/cate/create.html" */ ?>
<?php /*%%SmartyHeaderCode:88835365ab62727629-77363571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90713d6ff316d19a7afd711a323ae235ee70f76d' => 
    array (
      0 => 'D:\\Phpserv\\elsker\\admincp\\site\\templates\\elsker\\operator/product/cate/create.html',
      1 => 1399171915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88835365ab62727629-77363571',
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
<link href="/admincp/css/jquery.jcheckbox.css" rel="Stylesheet" type="text/css" />
<script type="text/javascript" src="/admincp/js/jquery.js"></script>
<script type="text/javascript" src="/admincp/js/common.js"></script>
<script type="text/javascript" src="/admincp/js/box.js"></script>


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
  
  <form method="post" action="insert.php"  enctype="multipart/form-data" onsubmit="return check(this)" >
    
  <div class="form2">
    <dl class="lineD">
      <dt>名称：</dt>
      <dd>
        <input type="text" name="title" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['title']) ? $_smarty_tpl->getVariable('list')->value['title'] : null);?>
" /> *
	  </dd>
    </dl>
    <?php if ($_smarty_tpl->getVariable('cate_id')->value==7){?>
    <dl class="lineD">
          <dt>ICON：</dt>
          <dd>
              <input type="file" name="icon1" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['icon1']) ? $_smarty_tpl->getVariable('list')->value['icon1'] : null);?>
"/> *<a href="/thumb/<?php echo (isset($_smarty_tpl->getVariable('list')->value['icon1']) ? $_smarty_tpl->getVariable('list')->value['icon1'] : null);?>
" class="zoomIn" title="点击查看原图"><?php echo (isset($_smarty_tpl->getVariable('list')->value['icon1']) ? $_smarty_tpl->getVariable('list')->value['icon1'] : null);?>
</a>
          </dd>
    </dl>
    <?php }?>
    <?php if ($_smarty_tpl->getVariable('cate_id')->value>=1&&$_smarty_tpl->getVariable('cate_id')->value<=5){?>
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
              <?php }?> *
	  </dd>
    </dl>
    <?php }?>
    <?php if ($_smarty_tpl->getVariable('cate_id')->value==1||$_smarty_tpl->getVariable('cate_id')->value==2){?>
      <dl class="lineD">
          <dt>ICON(点击前)：</dt>
          <dd>
              <input type="file" name="icon1" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['icon1']) ? $_smarty_tpl->getVariable('list')->value['icon1'] : null);?>
"/> *<a href="/thumb/<?php echo (isset($_smarty_tpl->getVariable('list')->value['icon1']) ? $_smarty_tpl->getVariable('list')->value['icon1'] : null);?>
" class="zoomIn" title="点击查看原图"><?php echo (isset($_smarty_tpl->getVariable('list')->value['icon1']) ? $_smarty_tpl->getVariable('list')->value['icon1'] : null);?>
</a>
          </dd>
      </dl>

      <dl class="lineD">
          <dt>ICON(点击后)：</dt>
          <dd>
              <input type="file" name="icon2" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['icon2']) ? $_smarty_tpl->getVariable('list')->value['icon2'] : null);?>
"/> *<a href="/thumb/<?php echo (isset($_smarty_tpl->getVariable('list')->value['icon2']) ? $_smarty_tpl->getVariable('list')->value['icon2'] : null);?>
" class="zoomIn" title="点击查看原图"><?php echo (isset($_smarty_tpl->getVariable('list')->value['icon2']) ? $_smarty_tpl->getVariable('list')->value['icon2'] : null);?>
</a>
          </dd>
      </dl>
    <?php }?>

      <?php if ($_smarty_tpl->getVariable('cate_id')->value==1){?>
      <dl class="lineD">
          <dt>ICON(产品详情中的ICON)：</dt>
          <dd>
              <input type="file" name="icon3" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['icon3']) ? $_smarty_tpl->getVariable('list')->value['icon3'] : null);?>
"/> *<a href="/thumb/<?php echo (isset($_smarty_tpl->getVariable('list')->value['icon3']) ? $_smarty_tpl->getVariable('list')->value['icon3'] : null);?>
" class="zoomIn" title="点击查看原图"><?php echo (isset($_smarty_tpl->getVariable('list')->value['icon3']) ? $_smarty_tpl->getVariable('list')->value['icon3'] : null);?>
</a>
          </dd>
      </dl>
      <?php }?>
      
  <dl class="lineD">
      <dt>排斥id：</dt>
      <dd>
        <input type="text" name="exclusion_id" id="exclusion_id" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['exclusion_id']) ? $_smarty_tpl->getVariable('list')->value['exclusion_id'] : null);?>
" />  (多个id以逗号分隔)
        <div id="divcheck" style="border:1px solid red;">
          <ul>
          <li>使用人群：
          	  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cate1List')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
              <input type="checkbox" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" id="target_id" /><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>

              <?php }} ?>
          </li>
          <li>年龄阶段：
          	  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cate2List')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
              <input type="checkbox" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" id="age_id" /><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>

              <?php }} ?>
          </li>
          <li>产品功效：
          	  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cate3List')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
              <input type="checkbox" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" id="effect_id" /><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>

              <?php }} ?>
          </li>
          <li>使用环境：
          	  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cate4List')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
              <input type="checkbox" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" id="season_id" /><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>

              <?php }} ?>
          </li>
          <li>产品系列：
          	  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cate5List')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
              <input type="checkbox" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" id="serials_id" /><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>

              <?php }} ?>
          </li>
          </ul>
        </div>
      </dd>
      	  
    </dl>

      <dl class="lineD">
      <dt>状态：</dt>
      <dd>
        <!--<input type="text" name="status" value="<?php echo (isset($_smarty_tpl->getVariable('badge')->value['status']) ? $_smarty_tpl->getVariable('badge')->value['status'] : null);?>
"/>-->
        <input type="radio" name="is_active"  value="1" <?php if ((isset($_smarty_tpl->getVariable('list')->value['is_active']) ? $_smarty_tpl->getVariable('list')->value['is_active'] : null)==1){?>checked<?php }else{ ?><?php }?>>激活
        <input type="radio" name="is_active"  value="0" <?php if ((isset($_smarty_tpl->getVariable('list')->value['is_active']) ? $_smarty_tpl->getVariable('list')->value['is_active'] : null)==0){?>checked<?php }else{ ?><?php }?>>关闭
      </dd>
    </dl>    
		
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" />
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['id']) ? $_smarty_tpl->getVariable('list')->value['id'] : null);?>
" />
  <input type="hidden" name="cate_id" value="<?php echo $_smarty_tpl->getVariable('cate_id')->value;?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" /></form>
</div>

<script type="text/javascript">
$(document).ready(function(){
	//初始化
	var exclusion_id=$("#exclusion_id").val();
	if (exclusion_id!=''){
		var a = exclusion_id.split(","); 
		for (var i=0;i<a.length;i++) {
			$("[value='"+a[i]+"']").attr("checked",'true');
		}
	}
	var sel_channel_id=$("#old_channel_id").val();
	if (sel_channel_id!=''){
		var b = sel_channel_id.split(","); 
		for (var i=0;i<b.length;i++) {
			$("[value='"+b[i]+"']").attr("checked",'true');
		}
	}
	
	
	$("#divcheck :checkbox").click(function(){
		getSelID();
	});
});
function getSelID(){
	var sel_id='';
	$("#divcheck :checkbox").each(function(){
		if($(this).attr('checked')==true){
			sel_id+=$(this).val()+',';
		}
	});
	if (sel_id!=''){
		sel_id=sel_id.substr(0,sel_id.length-1);
		$("#exclusion_id").val(sel_id);
	}else{
		$("#exclusion_id").val('');
	}
	
}

	
	function check(_form){
		if(_form.title.value==""){
			alert("请输入一级类别名称！");
			_form.title.focus();
			return false;
		}
 	
		return true;
	}
</script>

</body>
</html>