<?php /* Smarty version Smarty-3.0.4, created on 2019-09-30 17:18:34
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/zhiwei/Salary.html" */ ?>
<?php /*%%SmartyHeaderCode:20290157665d91c86a320798-91530288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b68e33533a3150db473d21f204e236dae9336d8' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/zhiwei/Salary.html',
      1 => 1569749244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20290157665d91c86a320798-91530288',
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
</head>
<body>
<div class="so_main">
  <div class="page_tit">修改职位</div>
  
  <form method="post" action="index.php?task=Salary_update" enctype="multipart/form-data" onsubmit="return check(this)">
  <div class="form2">
    <dl class="lineD">
      <dt><span style="color:red">*</span>职位名称：</dt>
      <dd>
        <input type="text" id="zhiwei_name" name="zhiwei_name" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['zhiwei_name']) ? $_smarty_tpl->getVariable('list')->value['zhiwei_name'] : null);?>
" />
	  </dd>
    </dl>
    <dl class="lineD">
      <dt><span style="color:red">*</span>试用期底薪：</dt>
      <dd>
        <input type="text" id="zhiwei_shiyong_dixin" name="zhiwei_shiyong_dixin" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['zhiwei_shiyong_dixin']) ? $_smarty_tpl->getVariable('list')->value['zhiwei_shiyong_dixin'] : null);?>
" />
    </dd>
    </dl>
    <dl class="lineD">
      <dt><span style="color:red">*</span>正式期底薪：</dt>
      <dd>
        <input type="text" id="zhiwei_zhengshi_dixin" name="zhiwei_zhengshi_dixin" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['zhiwei_zhengshi_dixin']) ? $_smarty_tpl->getVariable('list')->value['zhiwei_zhengshi_dixin'] : null);?>
" />
    </dd>
    </dl>
    <dl class="lineD">
      <dt><span style="color:red">*</span>试用期：</dt>
      <dd>
        <input type="text" id="zhiwei_shiyongqi" name="zhiwei_shiyongqi" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['zhiwei_shiyongqi']) ? $_smarty_tpl->getVariable('list')->value['zhiwei_shiyongqi'] : null);?>
" />月
    </dd>
    </dl>
    <dl class="lineD">
      <dl class="lineD">
      <dt>休息类型：</dt>
      <dd>
      <select id="select1" name="zhiwei_xiuxi" >
   
        <option calss='user_id' value="0" <?php if ((isset($_smarty_tpl->getVariable('list')->value['zhiwei_xiuxi']) ? $_smarty_tpl->getVariable('list')->value['zhiwei_xiuxi'] : null)==0){?>selected<?php }else{ ?><?php }?>>单休</option>
        <option calss='user_id' value="1" <?php if ((isset($_smarty_tpl->getVariable('list')->value['zhiwei_xiuxi']) ? $_smarty_tpl->getVariable('list')->value['zhiwei_xiuxi'] : null)==1){?>selected<?php }else{ ?><?php }?>>双休</option> 
        <option calss='user_id' value="2" <?php if ((isset($_smarty_tpl->getVariable('list')->value['zhiwei_xiuxi']) ? $_smarty_tpl->getVariable('list')->value['zhiwei_xiuxi'] : null)==2){?>selected<?php }else{ ?><?php }?>>一月休4天</option> 
        <option calss='user_id' value="3" <?php if ((isset($_smarty_tpl->getVariable('list')->value['zhiwei_xiuxi']) ? $_smarty_tpl->getVariable('list')->value['zhiwei_xiuxi'] : null)==3){?>selected<?php }else{ ?><?php }?>>不休</option>   
    
      </select>
     
      
      
      </dd>
    </dl>
    <dl class="lineD">
    <div style="width:40%;float: left;padding-left: 10%">
      <h2>试用期</h2>
      <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('gongzhi_typelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
       <input type="checkbox" name="gongzhi_type[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" index_a="<?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null);?>
" class="gongzhi_type" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['type']) ? $_smarty_tpl->tpl_vars['rows']->value['type'] : null)==1){?>checked<?php }?>/><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_name']) ? $_smarty_tpl->tpl_vars['rows']->value['type_name'] : null);?>
&nbsp;&nbsp;

        每<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_danwei']) ? $_smarty_tpl->tpl_vars['rows']->value['type_danwei'] : null);?>
 <input type="text" name="moeny[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['money']) ? $_smarty_tpl->tpl_vars['rows']->value['money'] : null);?>
" class="moeny" index_a="<?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['type']) ? $_smarty_tpl->tpl_vars['rows']->value['type'] : null)!=1){?>disabled<?php }?>/>元&nbsp;&nbsp;
         <br/><br/>
      <?php }} ?>

    </div>
    <div style="width:40%;float: left;padding-left: 10%">
      
      <h2>正式期</h2>
      <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('gongzhi_typelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
         <input type="checkbox" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['type_1']) ? $_smarty_tpl->tpl_vars['rows']->value['type_1'] : null)==1){?>checked<?php }?> name="gongzhi_type_1[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" class="gongzhi_type_1"/><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_name']) ? $_smarty_tpl->tpl_vars['rows']->value['type_name'] : null);?>
&nbsp;&nbsp;


         每<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_danwei']) ? $_smarty_tpl->tpl_vars['rows']->value['type_danwei'] : null);?>
<input type="text" name="moeny_1[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['money_1']) ? $_smarty_tpl->tpl_vars['rows']->value['money_1'] : null);?>
" class="moeny_1" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['type_1']) ? $_smarty_tpl->tpl_vars['rows']->value['type_1'] : null)!=1){?>disabled<?php }?>/>元&nbsp;&nbsp;
         <br/><br/>
      <?php }} ?>
    </div>
    </dl>




    
	   
    <div class="page_btm">
      <input type="submit" class="btn_b" id="bt1" value="确定" />
    </div>
    
    <input type="hidden" name="id" id="id" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['id']) ? $_smarty_tpl->getVariable('list')->value['id'] : null);?>
" />
  </div>
</div>
<script type="text/javascript">

  

  var gongzhi_type=$(".gongzhi_type");
  

  gongzhi_type.change(function(){
    var checked_a=$(this).prop('checked');
    var index=$(".gongzhi_type").index(this);
    if(checked_a){
      $('.moeny').eq(index).removeAttr("disabled");
    }else{
       $('.moeny').eq(index).attr('disabled','disabled');
        $('.moeny').eq(index).val('');
    }
    
  });

  
  var gongzhi_type_1=$(".gongzhi_type_1");
  gongzhi_type_1.change(function(){

    var checked_a1=$(this).prop('checked');
    var index1=$(".gongzhi_type_1").index(this);
    if(checked_a1){
      $('.moeny_1').eq(index1).removeAttr("disabled");
    }else{
       $('.moeny_1').eq(index1).attr('disabled','disabled');
       $('.moeny_1').eq(index).val('');
    }
    
  });
</script>
</body>
</html>