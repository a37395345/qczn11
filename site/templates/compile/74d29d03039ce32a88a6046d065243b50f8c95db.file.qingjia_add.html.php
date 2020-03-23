<?php /* Smarty version Smarty-3.0.4, created on 2019-04-24 08:45:17
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/renshi/qingjia_add.html" */ ?>
<?php /*%%SmartyHeaderCode:215435cbfb19db738e0-62003612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74d29d03039ce32a88a6046d065243b50f8c95db' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/renshi/qingjia_add.html',
      1 => 1556066704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '215435cbfb19db738e0-62003612',
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
  <div class="page_tit"><?php if ($_smarty_tpl->getVariable('op')->value=="add"){?>添加请假项目<?php }else{ ?>修改请假项目<?php }?></div>
  
  <form method="post" action="qingjia_insert.php" enctype="multipart/form-data" onsubmit="return check(this)">
  <div class="form2">
    <dl class="lineD">
      <dt><span style="color:red">*</span>请假名称：</dt>
      <dd>
        <input type="text" id="qingjia_name" name="qingjia_name" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['qingjia_name']) ? $_smarty_tpl->getVariable('list')->value['qingjia_name'] : null);?>
" />
	  </dd>
    </dl>	
	
    
    <dl class="lineD">
      <dt><span class="redstar">*</span>是否扣工资：</dt>
      <dd>
      	<select name="qingjia_kou" id="qingjia_kou">
      		<option value="1" <?php if ((isset($_smarty_tpl->getVariable('list')->value['qingjia_kou']) ? $_smarty_tpl->getVariable('list')->value['qingjia_kou'] : null)==1){?>selected <?php }?>>扣工资</option>
      		<option value="0" <?php if ((isset($_smarty_tpl->getVariable('list')->value['qingjia_kou']) ? $_smarty_tpl->getVariable('list')->value['qingjia_kou'] : null)==0){?>selected <?php }?>>不扣工资</option>
      		
		  	
		 
		</select>
	    
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