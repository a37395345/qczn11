<?php /* Smarty version Smarty-3.0.4, created on 2014-03-31 12:51:22
         compiled from "D:\Phpserv\elsker\admincp\site\templates\elsker\operator/message/cate/create.html" */ ?>
<?php /*%%SmartyHeaderCode:236435338f44a6a5958-26713962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdf1f94ab69bbc686b12adb09c85db6d0b3b55cc' => 
    array (
      0 => 'D:\\Phpserv\\elsker\\admincp\\site\\templates\\elsker\\operator/message/cate/create.html',
      1 => 1396241317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '236435338f44a6a5958-26713962',
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
  
  <form method="post" action="insert.php" enctype="multipart/form-data" onsubmit="return check(this)">
    
  <div class="form2">    
    <dl class="lineD">
      <dt>名称：</dt>
      <dd>
        <input type="text" name="title" value="<?php echo (isset($_smarty_tpl->getVariable('category')->value['title']) ? $_smarty_tpl->getVariable('category')->value['title'] : null);?>
" /> *
	  </dd>
    </dl>
    
    <dl class="lineD">
      <dt>icon1：</dt>
      <dd>
        <input type="file" name="icon1" value="<?php echo (isset($_smarty_tpl->getVariable('category')->value['icon1']) ? $_smarty_tpl->getVariable('category')->value['icon1'] : null);?>
"/> *<a href="/thumb/<?php echo (isset($_smarty_tpl->getVariable('category')->value['icon1']) ? $_smarty_tpl->getVariable('category')->value['icon1'] : null);?>
" class="zoomIn" title="点击查看原图"><?php echo (isset($_smarty_tpl->getVariable('category')->value['icon1']) ? $_smarty_tpl->getVariable('category')->value['icon1'] : null);?>
</a> (未点击状态)
      </dd>
    </dl>
    
    <dl class="lineD">
      <dt>icon2：</dt>
      <dd>
        <input type="file" name="icon2" value="<?php echo (isset($_smarty_tpl->getVariable('category')->value['icon2']) ? $_smarty_tpl->getVariable('category')->value['icon2'] : null);?>
"/> *<a href="/thumb/<?php echo (isset($_smarty_tpl->getVariable('category')->value['icon2']) ? $_smarty_tpl->getVariable('category')->value['icon2'] : null);?>
" class="zoomIn" title="点击查看原图"><?php echo (isset($_smarty_tpl->getVariable('category')->value['icon2']) ? $_smarty_tpl->getVariable('category')->value['icon2'] : null);?>
</a> (点击状态)
      </dd>
    </dl>
    
    <dl class="lineD">
      <dt>背景图：</dt>
      <dd>
        <input type="file" name="bg" value="<?php echo (isset($_smarty_tpl->getVariable('category')->value['bg']) ? $_smarty_tpl->getVariable('category')->value['bg'] : null);?>
"/> *<a href="/thumb/<?php echo (isset($_smarty_tpl->getVariable('category')->value['bg']) ? $_smarty_tpl->getVariable('category')->value['bg'] : null);?>
" class="zoomIn" title="点击查看原图"><?php echo (isset($_smarty_tpl->getVariable('category')->value['bg']) ? $_smarty_tpl->getVariable('category')->value['bg'] : null);?>
</a> 
      </dd>
    </dl>
    <dl class="lineD">
      <dt>排序：</dt>
      <dd>
        <input type="text" name="sort" value="<?php echo (isset($_smarty_tpl->getVariable('category')->value['sort_id']) ? $_smarty_tpl->getVariable('category')->value['sort_id'] : null);?>
" />
	  </dd>
    </dl>
    <dl class="lineD">
      <dt>状态：</dt>
      <dd>
        <!--<input type="text" name="status" value="<?php echo (isset($_smarty_tpl->getVariable('badge')->value['status']) ? $_smarty_tpl->getVariable('badge')->value['status'] : null);?>
"/>-->
        <input type="radio" name="is_active"  value="1" <?php if ((isset($_smarty_tpl->getVariable('category')->value['is_active']) ? $_smarty_tpl->getVariable('category')->value['is_active'] : null)==1){?>checked<?php }else{ ?><?php }?>>激活
        <input type="radio" name="is_active"  value="0" <?php if ((isset($_smarty_tpl->getVariable('category')->value['is_active']) ? $_smarty_tpl->getVariable('category')->value['is_active'] : null)==0){?>checked<?php }else{ ?><?php }?>>关闭
      </dd>
    </dl>
		
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" />
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('category')->value['message_cate_id']) ? $_smarty_tpl->getVariable('category')->value['message_cate_id'] : null);?>
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
	});
	
	function check(_form){
		if(_form.title.value==""){
			alert("请输入分类名称！");
			_form.title.focus();
			return false;
		}
 	
		return true;
	}
</script>

</body>
</html>