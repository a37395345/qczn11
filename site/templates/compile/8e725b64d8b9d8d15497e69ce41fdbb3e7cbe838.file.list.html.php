<?php /* Smarty version Smarty-3.0.4, created on 2014-06-19 15:53:48
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/product/cate/list.html" */ ?>
<?php /*%%SmartyHeaderCode:1924053a2970c617f07-50714134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e725b64d8b9d8d15497e69ce41fdbb3e7cbe838' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/product/cate/list.html',
      1 => 1398430246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1924053a2970c617f07-50714134',
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
</head>
<body>
<div class="so_main">
  <div class="page_tit"><?php echo $_smarty_tpl->getVariable('cateName')->value;?>
</div>

  <!-------- 用户列表 -------->
  <div class="Toolbar_inbox">
  	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
	<a href="create.php?cate_id=<?php echo $_smarty_tpl->getVariable('cate_id')->value;?>
" class="btn_a"><span>添加</span></a>
	<a href="javascript:void(0);" class="btn_a" onclick="deleteCategory();"><span>删除</span></a>

  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">
		<input type="checkbox" id="checkbox_handle" onclick="checkAll(this)" value="0">
    	<label for="checkbox"></label>
	</th>
    <th class="line_l">ID</th>
    <th class="line_l">名称</th>
    <th class="line_l">建立时间</th>
    <th class="line_l">最后更新时间</th>
    <th class="line_l">状态</th>
    <th class="line_l">排序</th>
	<th class="line_l">操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('level1List')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  <tr overstyle='on' id="category_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
    	<td><input type="checkbox" name="checkbox" id="checkbox<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
"></td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['title']) ? $_smarty_tpl->tpl_vars['row']->value['title'] : null);?>
</td>
        <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['created']) ? $_smarty_tpl->tpl_vars['row']->value['created'] : null);?>
</td>
        <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['updated']) ? $_smarty_tpl->tpl_vars['row']->value['updated'] : null);?>
</td>
        <td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['is_active']) ? $_smarty_tpl->tpl_vars['row']->value['is_active'] : null)==1){?>激活<?php }else{ ?>关闭<?php }?></td>
      <td>
          <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['preOrder']) ? $_smarty_tpl->tpl_vars['row']->value['preOrder'] : null)=='top'){?>&nbsp;&nbsp;&nbsp;&nbsp;<?php }else{ ?><img src="/admincp/site/operator/images/up.gif" style="cursor:pointer;" onclick="location.href='list.php?task=changeOrder&id=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
&target=up&fid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['preOrder']) ? $_smarty_tpl->tpl_vars['row']->value['preOrder'] : null);?>
&forward=<?php echo $_smarty_tpl->getVariable('forward')->value;?>
&cate_id=<?php echo $_smarty_tpl->getVariable('cate_id')->value;?>
&title=<?php echo $_smarty_tpl->getVariable('title')->value;?>
&summary=<?php echo $_smarty_tpl->getVariable('summary')->value;?>
&is_active=<?php echo $_smarty_tpl->getVariable('is_active')->value;?>
&is_video=<?php echo $_smarty_tpl->getVariable('is_video')->value;?>
'" value="向上"/><?php }?>&nbsp;&nbsp;
          <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['nextOrder']) ? $_smarty_tpl->tpl_vars['row']->value['nextOrder'] : null)=='end'){?>&nbsp;&nbsp;<?php }else{ ?><img src="/admincp/site/operator/images/down.gif" style="cursor:pointer;" onclick="location.href='list.php?task=changeOrder&id=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
&fid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['nextOrder']) ? $_smarty_tpl->tpl_vars['row']->value['nextOrder'] : null);?>
&target=down&forward=<?php echo $_smarty_tpl->getVariable('forward')->value;?>
&cate_id=<?php echo $_smarty_tpl->getVariable('cate_id')->value;?>
&title=<?php echo $_smarty_tpl->getVariable('title')->value;?>
&summary=<?php echo $_smarty_tpl->getVariable('summary')->value;?>
&is_active=<?php echo $_smarty_tpl->getVariable('is_active')->value;?>
&is_video=<?php echo $_smarty_tpl->getVariable('is_video')->value;?>
'" value="向下"/><?php }?>

      <td>
			<a href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
&cate_id=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['cate_id']) ? $_smarty_tpl->tpl_vars['row']->value['cate_id'] : null);?>
">编辑</a>
			<a href="javascript:if(confirm('是否确定删除？')){window.location.href='delete.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
&cate_id=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['cate_id']) ? $_smarty_tpl->tpl_vars['row']->value['cate_id'] : null);?>
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
	<a href="create.php" class="btn_a"><span>添加</span></a>
	<a href="javascript:void(0);" class="btn_a" onclick="deleteCategory();"><span>删除</span></a>
	
  </div>

    <div >
        <form name="form1" action="update_multi_choice.php" method="post">
            <br>
            设定选择类别:
            单选:<input type="radio" name="multi_choice" value="0" <?php if ($_smarty_tpl->getVariable('status')->value==0){?>checked<?php }?>> 多选:<input type="radio" name="multi_choice" value="1" <?php if ($_smarty_tpl->getVariable('status')->value==1){?>checked<?php }?>>
            <input type="submit" value="保存">
            <input type="hidden" name="cate_id" value="<?php echo $_smarty_tpl->getVariable('cate_id')->value;?>
">
        </form>
    </div>


</div>
<!-->
<script>
	//鼠标移动表格效果
	$(document).ready(function(){
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
			$('input[name="checkbox"]').attr('checked','true');
			$('tr[overstyle="on"]').addClass("bg_on");
		}else{
			$('input[name="checkbox"]').removeAttr('checked');
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
	function deleteCategory(uid) {
		uid = uid ? uid : getChecked();
		uid = uid.toString();
		if(uid == '' || !confirm('删除成功后将无法恢复，确认继续？')) return false;
		
		$.post("delete.php?multi=1", {uid:uid}, function(res){
			if(res == '1') {
				uid = uid.split(',');
				for(i = 0; i < uid.length; i++) {
					$('#category_'+uid[i]).remove();
				}
				ui.success('操作成功');
			}else {
				ui.error('操作失败');
			}
		});
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