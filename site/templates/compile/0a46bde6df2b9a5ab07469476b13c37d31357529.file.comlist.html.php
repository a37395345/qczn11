<?php /* Smarty version Smarty-3.0.4, created on 2014-06-18 11:28:54
         compiled from "D:\Phpserv\elsker\admincp\site\templates\elsker\operator/testimonial/comlist.html" */ ?>
<?php /*%%SmartyHeaderCode:3260253a1077656dc88-95305747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a46bde6df2b9a5ab07469476b13c37d31357529' => 
    array (
      0 => 'D:\\Phpserv\\elsker\\admincp\\site\\templates\\elsker\\operator/testimonial/comlist.html',
      1 => 1401945375,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3260253a1077656dc88-95305747',
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
	<a href="create.php?task=commentcreate&pid=<?php echo $_smarty_tpl->getVariable('pid')->value;?>
&prodid=<?php echo $_smarty_tpl->getVariable('prodid')->value;?>
" class="btn_a"><span>添加</span></a>
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>    
    <th class="line_l">ID</th>
    <th class="line_l">用户ICON</th>
    <th class="line_l">用户昵称</th>
    <th class="line_l">评论内容</th>
    <th class="line_l">建立时间</th>
    <th class="line_l">更新时间</th>
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
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['cid']) ? $_smarty_tpl->tpl_vars['row']->value['cid'] : null);?>
">    	
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['cid']) ? $_smarty_tpl->tpl_vars['row']->value['cid'] : null);?>
</td>
	  	<td><img src="/thumb/<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['user_icon']) ? $_smarty_tpl->tpl_vars['row']->value['user_icon'] : null);?>
" width="50"></td>
        <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['user_name']) ? $_smarty_tpl->tpl_vars['row']->value['user_name'] : null);?>
</td>
        <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['content']) ? $_smarty_tpl->tpl_vars['row']->value['content'] : null);?>
</td>
        <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['created']) ? $_smarty_tpl->tpl_vars['row']->value['created'] : null);?>
</td>
        <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['updated']) ? $_smarty_tpl->tpl_vars['row']->value['updated'] : null);?>
</td>
        <td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['status']) ? $_smarty_tpl->tpl_vars['row']->value['status'] : null)==1){?>显示<?php }else{ ?>不显示<?php }?></td>
	    <td>
			<a href="modify.php?task=commentmodify&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['cid']) ? $_smarty_tpl->tpl_vars['row']->value['cid'] : null);?>
&pid=<?php echo $_smarty_tpl->getVariable('pid')->value;?>
">编辑</a>
            <a href="javascript:if(confirm('是否确定删除？')){window.location.href='delete.php?task=commentdelete&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['cid']) ? $_smarty_tpl->tpl_vars['row']->value['cid'] : null);?>
&pid=<?php echo $_smarty_tpl->getVariable('pid')->value;?>
';}">删除</a>
        </td>
 </tr>
 <?php }} ?>
 </table>
 </div>

  <div class="Toolbar_inbox">	
	<a href="create.php?task=commentcreate&pid=<?php echo $_smarty_tpl->getVariable('pid')->value;?>
&prodid=<?php echo $_smarty_tpl->getVariable('prodid')->value;?>
" class="btn_a"><span>添加</span></a>
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