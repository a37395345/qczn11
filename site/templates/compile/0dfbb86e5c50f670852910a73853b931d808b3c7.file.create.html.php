<?php /* Smarty version Smarty-3.0.4, created on 2014-04-09 15:24:36
         compiled from "D:\Phpserv\elsker\admincp\site\templates\elsker\operator/media/create.html" */ ?>
<?php /*%%SmartyHeaderCode:304225344f5b4d3e473-71739679%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dfbb86e5c50f670852910a73853b931d808b3c7' => 
    array (
      0 => 'D:\\Phpserv\\elsker\\admincp\\site\\templates\\elsker\\operator/media/create.html',
      1 => 1397028226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304225344f5b4d3e473-71739679',
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
<script type="text/javascript" src="/admincp/js/date_select.js"></script>
<script type="text/javascript" src="/admincp/js/city.js"></script>
<script type="text/javascript" src="/admincp/js/calendar.js"></script>
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
      <dt>标题：</dt>
      <dd>
        <input type="text" name="title" value="<?php echo (isset($_smarty_tpl->getVariable('media')->value['title']) ? $_smarty_tpl->getVariable('media')->value['title'] : null);?>
" /> *
	  </dd>
    </dl>
    <dl class="lineD">
      <dt>视频文件：</dt>
      <dd>
        <input type="file" name="video" value="<?php echo (isset($_smarty_tpl->getVariable('media')->value['video']) ? $_smarty_tpl->getVariable('media')->value['video'] : null);?>
"/> *视频尺寸：   <?php echo (isset($_smarty_tpl->getVariable('media')->value['video']) ? $_smarty_tpl->getVariable('media')->value['video'] : null);?>

      </dd>
    </dl>
	
	<dl class="lineD">
      <dt>状态：</dt>
      <dd>
    
	  <input type="radio" name="is_active"  value="1" <?php if ((isset($_smarty_tpl->getVariable('media')->value['is_active']) ? $_smarty_tpl->getVariable('media')->value['is_active'] : null)==1){?>checked<?php }else{ ?><?php }?>>正常
	  <input type="radio" name="is_active"  value="0" <?php if ((isset($_smarty_tpl->getVariable('media')->value['is_active']) ? $_smarty_tpl->getVariable('media')->value['is_active'] : null)==0){?>checked<?php }else{ ?><?php }?>>冻结
	  </dd>
    </dl>
	
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" />
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('media')->value['video_id']) ? $_smarty_tpl->getVariable('media')->value['video_id'] : null);?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" /></form>
</div>
<script type="text/javascript">	
	$(document).ready(function(){
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
        
	});
	function check(_form){		
		if(_form.title.value==""){
			alert("请输入资讯标题！");
			_form.title.focus();
			return false;
		}
		if(_form.task.value!="update"){
            if(_form.video.value==""){
            alert("请选择视频文件上传!");
            _form.video.focus();
            return false;
            }
		}
				
		return true;
	}
</script>
</body>
</html>