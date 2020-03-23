<?php /* Smarty version Smarty-3.0.4, created on 2019-05-07 14:31:02
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/renshi/add_gongzhi_type.html" */ ?>
<?php /*%%SmartyHeaderCode:203785cd12626e48207-67345891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e561a0df3e8382b2aa08b061b564faac1e58f79' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/renshi/add_gongzhi_type.html',
      1 => 1557210594,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203785cd12626e48207-67345891',
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
<script type="text/javascript" src="../../../../js/diyUpload/webuploader.html5only.min.js"></script>
<script type="text/javascript" src="../../../../js/diyUpload/diyUpload.js?a=2"></script>

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
  <div class="page_tit"><?php if ($_smarty_tpl->getVariable('op')->value=="add"){?>添加项目<?php }else{ ?>修改项目<?php }?></div>
  
  <form method="post" action="insert_gongzhi_type.php" enctype="multipart/form-data" onsubmit="return check(this)">
  <div class="form2">
    <dl class="lineD">
      <dt><span style="color:red">*</span>项目名称：</dt>
      <dd>
        <input type="text" id="type_name" name="type_name" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['type_name']) ? $_smarty_tpl->getVariable('list')->value['type_name'] : null);?>
" />
	  </dd>
    </dl>	
	<dl class="lineD">
      <dt><span style="color:red">*</span>项目单位：</dt>
      <dd>
        <input type="text" id="type_danwei" name="type_danwei" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['type_danwei']) ? $_smarty_tpl->getVariable('list')->value['type_danwei'] : null);?>
" />
	  </dd>
    </dl>
    
    

    <dl class="lineD">
      <dt><span class="redstar">*</span>计算方式：</dt>
      <dd>
      	<select name="type_jisuan" id="type_jisuan">
      		<option value="1" <?php if ((isset($_smarty_tpl->getVariable('list')->value['type_jisuan']) ? $_smarty_tpl->getVariable('list')->value['type_jisuan'] : null)>0){?>selected <?php }?>>加</option>
      		<option value="-1" <?php if ((isset($_smarty_tpl->getVariable('list')->value['type_jisuan']) ? $_smarty_tpl->getVariable('list')->value['type_jisuan'] : null)<0){?>selected <?php }?>>减</option>
		</select>
	    
	  </dd>
    </dl>

    <dl class="lineD">
      <dt><span class="redstar">*</span>次数许可：</dt>
      <dd>
      	<select name="type_shuliang" id="type_shuliang">
      		<option value="1" <?php if ((isset($_smarty_tpl->getVariable('list')->value['type_shuliang']) ? $_smarty_tpl->getVariable('list')->value['type_shuliang'] : null)==1){?>selected <?php }?>>每月1次</option>
      		<option value="2" <?php if ((isset($_smarty_tpl->getVariable('list')->value['type_shuliang']) ? $_smarty_tpl->getVariable('list')->value['type_shuliang'] : null)==2){?>selected <?php }?>>每月多次</option>
		</select>
	    &nbsp;&nbsp;&nbsp;(例如全勤每月只有一次，迟到可以有很多次)
	  </dd>
    </dl>

    <dl class="lineD">
      <dt><span class="redstar">*</span>基础数据：</dt>
      <dd>
        <input type="text" id="type_jishu" name="type_jishu" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['type_jishu']) ? $_smarty_tpl->getVariable('list')->value['type_jishu'] : null);?>
" />
        &nbsp;&nbsp;&nbsp;(例如超公里需要的基础公里数，其他填0即可)
	  </dd>
    </dl>

     <dl class="lineD">
      <dt><span class="redstar">*</span>规则说明：</dt>
      <dd>
        <input type="text" id="type_guize" name="type_guize" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['type_guize']) ? $_smarty_tpl->getVariable('list')->value['type_guize'] : null);?>
" />
	  </dd>
    </dl>		
   
    <div class="page_btm">
      <input type="submit" class="btn_b" id="bt1" value="确定" />
    </div>
    <input type="hidden" name="id" id="id" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['id']) ? $_smarty_tpl->getVariable('list')->value['id'] : null);?>
" />
  </div>
</div>


<script>

$("#bt1").click(function(){
	var type_name=$("#type_name").val();
	var type_danwei=$("#type_danwei").val();
	var type_jisuan=$("#type_jisuan").val();
	
	if(type_name==""){
		alert('项目名称不能为空！');
		return false;
	}
	if(type_danwei==""){
		alert('项目单位不能为空！');
		return false;
	}
	if(type_jisuan==""){
		alert('计算方式不能为空！');
		return false;
	}
});

</script>
</body>
</html>