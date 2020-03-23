<?php /* Smarty version Smarty-3.0.4, created on 2014-03-30 21:12:01
         compiled from "D:\Phpserv\elsker\admincp\site\templates\elsker\operator/personal/create.html" */ ?>
<?php /*%%SmartyHeaderCode:2492953381821b97229-76823722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '804c7f7f6fb3a73d2bd80c90f887069258b91ddc' => 
    array (
      0 => 'D:\\Phpserv\\elsker\\admincp\\site\\templates\\elsker\\operator/personal/create.html',
      1 => 1396185114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2492953381821b97229-76823722',
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
  <div class="page_tit"><?php if ($_smarty_tpl->getVariable('tasktype')->value=='question'){?>回复<?php }else{ ?>编辑<?php }?></div>
  
  <form method="post" action="insert.php" enctype="multipart/form-data" onsubmit="return check(this)" name="form1">
  <div class="form2">
	<?php if ($_smarty_tpl->getVariable('tasktype')->value=='question'){?>
	<dl class="lineD">
	<dt>用户姓名：</dt>
      <dd>
        <?php echo (isset($_smarty_tpl->getVariable('list')->value['users_name']) ? $_smarty_tpl->getVariable('list')->value['users_name'] : null);?>

	  </dd>
	</dl>
	<dl class="lineD">
	<dt>问题标题：</dt>
      <dd>
        <?php echo (isset($_smarty_tpl->getVariable('list')->value['title']) ? $_smarty_tpl->getVariable('list')->value['title'] : null);?>

	  </dd>
	</dl>
	<dl class="lineD">
      <dt>回答：</dt>
      <dd>
          <textarea name="reply" style="width:700px;height:400px;"></textarea>
	  </dd>
    </dl>
	<?php }else{ ?>
    <dl class="lineD">
      <dt>标题：</dt>
      <dd>
        <input type="text" name="title" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['title']) ? $_smarty_tpl->getVariable('list')->value['title'] : null);?>
" /> *
	  </dd>
    </dl>
	<dl class="lineD">
      <dt>PDF上传：</dt>
      <dd>
        <input type="file" name="pdf" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['pdf']) ? $_smarty_tpl->getVariable('list')->value['pdf'] : null);?>
"/> *<a href="/thumb/<?php echo (isset($_smarty_tpl->getVariable('list')->value['pdf']) ? $_smarty_tpl->getVariable('list')->value['pdf'] : null);?>
" class="zoomIn" title="点击查看"><?php echo (isset($_smarty_tpl->getVariable('list')->value['pdf']) ? $_smarty_tpl->getVariable('list')->value['pdf'] : null);?>
</a>
      </dd>
    </dl>
    <dl class="lineD">
      <dt>发布日期：</dt>
      <dd>
         <input type="text" name="start_date"  id="created" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['created']) ? $_smarty_tpl->getVariable('list')->value['created'] : null);?>
" onClick="calendar.show(this);" /> （注意：发布日期如果不填默认为今天）     
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
	<?php }?>
	
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" />
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['personal_id']) ? $_smarty_tpl->getVariable('list')->value['personal_id'] : null);?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  <input type="hidden" name="tasktype" value="<?php echo $_smarty_tpl->getVariable('tasktype')->value;?>
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
		if(_form.tasktype.value=="question"){
			if(_form.reply.value==""){
				alert("请输入问题的回答内容!");
				_form.reply.focus();
				return false;
			}
			return confirm("您确定输入的回答内容正确无误吗？一旦保存就无法再修改了！");
		}else{
			if(_form.title.value==""){
				alert("请输入资讯标题！");
				_form.title.focus();
				return false;
			}			
			if(_form.task.value!="update"){
	            if(_form.pdf.value==""){
	            alert("请选择PDF文件上传!");
	            _form.pdf.focus();
	            return false;
	            }
			}
		}
		return true;
	}
</script>

</body>
</html>