<?php /* Smarty version Smarty-3.0.4, created on 2014-04-02 21:43:53
         compiled from "D:\Phpserv\elsker\admincp\site\templates\elsker\operator/survey/add/create.html" */ ?>
<?php /*%%SmartyHeaderCode:29983533c1419b47904-89478478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd4d80baa9af11473cbda34fcbb19d33a9ef11b0' => 
    array (
      0 => 'D:\\Phpserv\\elsker\\admincp\\site\\templates\\elsker\\operator/survey/add/create.html',
      1 => 1396446198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29983533c1419b47904-89478478',
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
  
  <form method="post" action="insert.php" onsubmit="return check(this)" name="form1">
     
  <div class="form2">
      <dl class="lineD">
          <dt>问题：</dt>
          <dd>
              <input type="text" name="title" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['question']) ? $_smarty_tpl->getVariable('list')->value['question'] : null);?>
" /> *
          </dd>
      </dl>

      <dl class="lineD">
          <dt>类别：</dt>
          <dd>
              <select name="type" >
                  <option value="1" <?php if ((isset($_smarty_tpl->getVariable('list')->value['question_type']) ? $_smarty_tpl->getVariable('list')->value['question_type'] : null)==1){?>selected<?php }?>>单选</option>
                  <option value="2" <?php if ((isset($_smarty_tpl->getVariable('list')->value['question_type']) ? $_smarty_tpl->getVariable('list')->value['question_type'] : null)==2){?>selected<?php }?>>多选</option>
                  <option value="3" <?php if ((isset($_smarty_tpl->getVariable('list')->value['question_type']) ? $_smarty_tpl->getVariable('list')->value['question_type'] : null)==3){?>selected<?php }?>>填空</option>
              </select>
          </dd>
      </dl>

      <dl class="lineD">
          <dt>选项：</dt>
          <dd>
              <textarea name="intro" style="width:350px;height:50px;" ><?php echo (isset($_smarty_tpl->getVariable('list')->value['answer']) ? $_smarty_tpl->getVariable('list')->value['answer'] : null);?>
</textarea>  (多个选项以分号;隔开 )
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
  <input type="hidden" name="st_id" value="<?php echo $_smarty_tpl->getVariable('st_id')->value;?>
" />
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['id']) ? $_smarty_tpl->getVariable('list')->value['id'] : null);?>
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
        if(_form.cate_id.value==""){
            alert("请选择类别!");
            _form.cate_id.focus();
            return false;
        }

		if(_form.task.value!="update"){
            if(_form.small_pic.value==""){
            alert("请选择小图!");
            _form.small_pic.focus();
            return false;
            }
            
			if(_form.big_pic.value==""){
			alert("请选择大图!");
			_form.big_pic.focus();
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