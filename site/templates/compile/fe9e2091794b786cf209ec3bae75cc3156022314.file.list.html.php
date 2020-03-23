<?php /* Smarty version Smarty-3.0.4, created on 2014-04-02 21:45:54
         compiled from "D:\Phpserv\elsker\admincp\site\templates\elsker\operator/survey/add/list.html" */ ?>
<?php /*%%SmartyHeaderCode:23428533c149266e065-61522567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe9e2091794b786cf209ec3bae75cc3156022314' => 
    array (
      0 => 'D:\\Phpserv\\elsker\\admincp\\site\\templates\\elsker\\operator/survey/add/list.html',
      1 => 1396446347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23428533c149266e065-61522567',
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
</head>
<body>
<div class="so_main">
  <div class="page_tit">列表</div>
  

  <!-------- 用户列表 -------->
  <div class="Toolbar_inbox">
  	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
	<a href="create.php?uid=<?php echo $_smarty_tpl->getVariable('uid')->value;?>
" class="btn_a"><span>添加</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="deleteNews();"><span>删除</span></a>
    
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">
		<input type="checkbox" id="checkbox_handle" onclick="checkAll(this)" value="0">
    	<label for="checkbox"></label>
	</th>
    <th class="line_l">ID</th>
    <th class="line_l">问题</th>
    <th class="line_l">类别</th>
    <th class="line_l">选项</th>
    <th class="line_l">建立时间</th>
    <th class="line_l">最后更新时间</th>
	<th class="line_l">状态</th>

	<th class="line_l">操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('itemList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
    	<td><input type="checkbox" name="recid" id="checkbox<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
"></td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
</td>
        <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['question']) ? $_smarty_tpl->tpl_vars['row']->value['question'] : null);?>
</td>
        <td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['question_type']) ? $_smarty_tpl->tpl_vars['row']->value['question_type'] : null)==1){?>单选<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['question_type']) ? $_smarty_tpl->tpl_vars['row']->value['question_type'] : null)==2){?>多选<?php }else{ ?>填空<?php }?></td>
        <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['answer']) ? $_smarty_tpl->tpl_vars['row']->value['answer'] : null);?>
</td>
        <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['created']) ? $_smarty_tpl->tpl_vars['row']->value['created'] : null);?>
</td>
        <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['updated']) ? $_smarty_tpl->tpl_vars['row']->value['updated'] : null);?>
</td>
		<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['status']) ? $_smarty_tpl->tpl_vars['row']->value['status'] : null)==1){?>激活<?php }else{ ?>关闭<?php }?></td>
	    <td>
			<a href="modify.php?uid=<?php echo $_smarty_tpl->getVariable('uid')->value;?>
&recid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">编辑</a>
            <a href="javascript:if(confirm('是否确定删除？')){window.location.href='delete.php?uid=<?php echo $_smarty_tpl->getVariable('uid')->value;?>
&recid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
';}">删除</a>
            
        </td>
 </tr>
 <?php }} ?>
 </table>
 </div>

  <div class="Toolbar_inbox">
	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
	<a href="create.php?uid=<?php echo $_smarty_tpl->getVariable('uid')->value;?>
" class="btn_a"><span>添加</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="deleteNews();"><span>删除</span></a>
    
  </div> 
</div>
<!-->
<script>
	//鼠标移动表格效果
	$(document).ready(function(){
        $("a.zoomIn").fancybox({
            'overlayShow'   : false,
            'transitionIn'  : 'elastic',
            'transitionOut' : 'elastic'
        });         
        
		$("tr[overstyle='on']").hover(
		  function () {
		    $(this).addClass("bg_hover");
		  },
		  function () {
		    $(this).removeClass("bg_hover");
		  }
		);
	});
	
	function checkon(o){
		if( o.checked == true ){
			$(o).parents('tr').addClass('bg_on') ;
		}else{
			$(o).parents('tr').removeClass('bg_on') ;
		}
	}
	
	function checkAll(o){
		if( o.checked == true ){
			$('input[name="recid"]').attr('checked','true');
			$('tr[overstyle="on"]').addClass("bg_on");
		}else{
			$('input[name="recid"]').removeAttr('checked');
			$('tr[overstyle="on"]').removeClass("bg_on");
		}
	}

	//获取已选择用户的ID数组
	function getChecked() {
		var uids = new Array();
		$.each($('table input:checked'), function(i, n){
			uids.push( $(n).val() );
		});
		return uids;
	}
    
    //删除用户
    function deleteNews(uid) {
        uid = uid ? uid : getChecked();
        uid = uid.toString();
        if(uid == '' || !confirm('删除成功后将无法恢复，确认继续？')) return false;
        
        $.post("delete.php?multi=1", {uid:uid}, function(res){
            if(res == '1') {
                uid = uid.split(',');
                for(i = 0; i < uid.length; i++) {
                    $('#badge_'+uid[i]).remove();
                }
                ui.success('操作成功');
            }else {
                ui.error('操作失败');
            }
        });
    }

    //置顶用户
    function to_top(uid) {
        uid = uid ? uid : getChecked();
        uid = uid.toString();
        if(uid == '') return false;

        $.post("top.php?multi=1", {uid:uid}, function(res){
            if(res == '1') {
                ui.success('操作成功');
            }else {
                ui.error('操作失败');
            }
        });
    }     
    
    var isSearchHidden = 1;
    function searchNews() {
      if(isSearchHidden == 1) {
        $("#searchTopic_div").slideDown("fast");
        isSearchHidden = 0;
      }else {
        $("#searchTopic_div").slideUp("fast");
        isSearchHidden = 1;
      }
    }         
	
	
	function folder(type, _this) {
		$('#search_'+type).slideToggle('fast');
		if ($(_this).html() == '展开') {
			$(_this).html('收起');
		}else {
			$(_this).html('展开');
		}
		
	}

</script>
<!-->

</body>
</html>