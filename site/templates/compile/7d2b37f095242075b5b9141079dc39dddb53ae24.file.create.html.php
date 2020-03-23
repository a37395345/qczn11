<?php /* Smarty version Smarty-3.0.4, created on 2014-04-01 21:39:31
         compiled from "D:\Phpserv\elsker\admincp\site\templates\elsker\operator/city/create.html" */ ?>
<?php /*%%SmartyHeaderCode:296533ac193964298-65173889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d2b37f095242075b5b9141079dc39dddb53ae24' => 
    array (
      0 => 'D:\\Phpserv\\elsker\\admincp\\site\\templates\\elsker\\operator/city/create.html',
      1 => 1395974735,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '296533ac193964298-65173889',
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
<script type="text/javascript" src="/js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="/js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
    <link rel="stylesheet" href="/admincp/js/kindeditor/themes/default/default.css" />
    <link rel="stylesheet" href="/admincp/js/kindeditor/plugins/code/prettify.css" />
    <script charset="utf-8" src="/admincp/js/kindeditor/kindeditor.js"></script>
    <script charset="utf-8" src="/admincp/js/kindeditor/lang/zh_CN.js"></script>
    <script charset="utf-8" src="/admincp/js/kindeditor/plugins/code/prettify.js"></script>
    <script type="text/javascript" src="/admincp/js/calendar.js"></script>
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
      <dt>省份：</dt>
      <dd>
        <select name="province_id" >
            <option value="-请选择-">-请选择-</option>
        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('province')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
            <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['province_id']) ? $_smarty_tpl->tpl_vars['rows']->value['province_id'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['province_id']) ? $_smarty_tpl->tpl_vars['rows']->value['province_id'] : null)==(isset($_smarty_tpl->getVariable('list')->value['province_id']) ? $_smarty_tpl->getVariable('list')->value['province_id'] : null)){?>selected<?php }else{ ?><?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>
</option>    
        <?php }} ?>
        </select>
      </dd>
    </dl>  
    <dl class="lineD">
      <dt>城市：</dt>
      <dd>
        <input type="text" name="title" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['title']) ? $_smarty_tpl->getVariable('list')->value['title'] : null);?>
" /> *
	  </dd>
    </dl>
	
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" />
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['city_id']) ? $_smarty_tpl->getVariable('list')->value['city_id'] : null);?>
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
        if(_form.news_cate_id.value=="-请选择-"){
            alert("请选择资讯类别!");
            _form.news_cate_id.focus();
            return false;
        }

		if(_form.title.value==""){
			alert("请输入资讯标题！");
			_form.title.focus();
			return false;
		}
 	
		if(_form.reply.value==""){
			alert("请输入资讯简介!");
			_form.reply.focus();
			return false;
		}
		if(_form.task.value!="update"){
            if(_form.pic.value==""){
            alert("请选择小图!");
            _form.pic.focus();
            return false;
            }
            
			if(_form.pic_hover.value==""){
			alert("请选择小图鼠标悬浮图片!");
			_form.pic_hover.focus();
			return false;
			}	
		}
	
        /*
		if(_form.content_html.value==""){
			alert("请输入资讯内容!");
			_form.content_html.focus();
			return false;
		}
        */
		
		return true;
	}
</script>

</body>
</html>