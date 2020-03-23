<?php /* Smarty version Smarty-3.0.4, created on 2014-06-18 11:36:43
         compiled from "D:\Phpserv\elsker\admincp\site\templates\elsker\operator/testimonial/commentcreate.html" */ ?>
<?php /*%%SmartyHeaderCode:2189953a1094b3b8a99-75344839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9e067eec78a54b932893d5e69dd1eca8505544c' => 
    array (
      0 => 'D:\\Phpserv\\elsker\\admincp\\site\\templates\\elsker\\operator/testimonial/commentcreate.html',
      1 => 1403062592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2189953a1094b3b8a99-75344839',
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
      <dt>产品名称：</dt>
      <dd>
        <?php echo (isset($_smarty_tpl->getVariable('testimonial')->value['name']) ? $_smarty_tpl->getVariable('testimonial')->value['name'] : null);?>

	  </dd>
    </dl>
    <dl class="lineD">
      <dt>KV图片：</dt>
      <dd>
        <img src="/thumb/<?php echo (isset($_smarty_tpl->getVariable('testimonial')->value['images']) ? $_smarty_tpl->getVariable('testimonial')->value['images'] : null);?>
" /> <a href="/thumb/<?php echo (isset($_smarty_tpl->getVariable('testimonial')->value['images']) ? $_smarty_tpl->getVariable('testimonial')->value['images'] : null);?>
" class="zoomIn" title="点击查看"><?php echo (isset($_smarty_tpl->getVariable('testimonial')->value['images']) ? $_smarty_tpl->getVariable('testimonial')->value['images'] : null);?>
</a>
      </dd>
    </dl>
	<dl class="lineD">
      <dt>评论用户昵称：</dt>
      <dd>
    	<input type="text" name="user_name" value="<?php echo (isset($_smarty_tpl->getVariable('testimonialcom')->value['user_name']) ? $_smarty_tpl->getVariable('testimonialcom')->value['user_name'] : null);?>
" /> *
	  </dd>
    </dl>
    <dl class="lineD">
      <dt>用户ICON：</dt>
      <dd>
        <input type="file" name="pic" value="<?php echo (isset($_smarty_tpl->getVariable('testimonialcom')->value['user_icon']) ? $_smarty_tpl->getVariable('testimonialcom')->value['user_icon'] : null);?>
"/> *图片尺寸：80x40    <a href="/thumb/<?php echo (isset($_smarty_tpl->getVariable('testimonialcom')->value['user_icon']) ? $_smarty_tpl->getVariable('testimonialcom')->value['user_icon'] : null);?>
" class="zoomIn" title="点击查看"><?php echo (isset($_smarty_tpl->getVariable('testimonialcom')->value['user_icon']) ? $_smarty_tpl->getVariable('testimonialcom')->value['user_icon'] : null);?>
</a>
      </dd>
    </dl>
    <dl class="lineD">
      <dt>状态：</dt>
      <dd>
		<input type="radio" name="status"  value="1" <?php if ((isset($_smarty_tpl->getVariable('testimonialcom')->value['status']) ? $_smarty_tpl->getVariable('testimonialcom')->value['status'] : null)==1){?>checked<?php }else{ ?><?php }?>>显示
	    <input type="radio" name="status"  value="0" <?php if ((isset($_smarty_tpl->getVariable('testimonialcom')->value['status']) ? $_smarty_tpl->getVariable('testimonialcom')->value['status'] : null)==0){?>checked<?php }else{ ?><?php }?>>不显示
	  </dd>
    </dl>
	<dl class="lineD">
      <dt>评论文案：</dt>
      <dd>
    	<textarea name="content" cols="80" rows="20"><?php echo (isset($_smarty_tpl->getVariable('testimonialcom')->value['content']) ? $_smarty_tpl->getVariable('testimonialcom')->value['content'] : null);?>
</textarea> *
	  </dd>
    </dl>
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" />
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('testimonialcom')->value['cid']) ? $_smarty_tpl->getVariable('testimonialcom')->value['cid'] : null);?>
" />
  <input type="hidden" name="pid" value="<?php echo $_smarty_tpl->getVariable('pid')->value;?>
" />
  <input type="hidden" name="prod_id" value="<?php echo (isset($_smarty_tpl->getVariable('testimonial')->value['prodid']) ? $_smarty_tpl->getVariable('testimonial')->value['prodid'] : null);?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" /></form>
</div>
<script type="text/javascript">
	 var areaMap = new AreaMap('province','city');	
		 areaMap.province(document.getElementById("province_0").value,document.getElementById("city_0").value);		
</script>
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
		if(_form.user_name.value==""){
			alert("请输入用户昵称！");
			_form.user_name.focus();
			return false;
		}
		
		if(_form.task.value!="update"){
            if(_form.pic.value==""){
            alert("请选择图片文件上传!");
            _form.pic.focus();
            return false;
            }
		}
		
        if(_form.content.value==""){
            alert("请输入评论内容!");
            _form.content.focus();
            return false;
        }
		
				
		return true;
	}
</script>
</body>
</html>