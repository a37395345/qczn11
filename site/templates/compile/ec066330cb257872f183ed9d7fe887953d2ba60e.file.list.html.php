<?php /* Smarty version Smarty-3.0.4, created on 2014-06-19 21:11:06
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/personal/list.html" */ ?>
<?php /*%%SmartyHeaderCode:2030753a2e16a92f485-62813398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec066330cb257872f183ed9d7fe887953d2ba60e' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/personal/list.html',
      1 => 1401191174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2030753a2e16a92f485-62813398',
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
  <div class="page_tit"><?php echo $_smarty_tpl->getVariable('PAGETITLE')->value;?>
</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <div class="form2">
        <form action="list.php?task=search" method="post">
            <input type="hidden" name="tasktype" value="<?php echo $_smarty_tpl->getVariable('tasktype')->value;?>
" />
            <dl class="lineD">
            <dt>标题：</dt>
            <dd>
            <input id="title" type="text" value="" name="title">
            <p>支持模糊查询</p>
            </dd>
            </dl>
            <?php if ($_smarty_tpl->getVariable('tasktype')->value!='question'){?>
            <dl class="lineD">
            <dt>状态：</dt>
            <dd>
            <select name="is_active" >
                <option value="">-请选择-</option>
                <option value="1" >激活</option>
                <option value="0" >关闭</option>    
            </select>
            </dd>
            </dl>
            <?php }?>
                <div class="page_btm">
                <input class="btn_b" type="submit" value="确定">
                </div>            
        </form>
    </div>
</div>

  <!-------- 用户列表 -------->
  <div class="Toolbar_inbox">
  	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
	<?php if ($_smarty_tpl->getVariable('tasktype')->value=='question'){?>
	<a href="javascript:void(0);" class="btn_a" onclick="excel();"><span>导出</span></a>
	<?php }else{ ?>
	<a href="create.php" class="btn_a"><span>添加</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="deleteNews();"><span>删除</span></a>
        <a href="javascript:void(0);" class="btn_a" onclick="to_top();"><span>置顶</span></a> 
    <?php }?>
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>

  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">
		<input type="checkbox" id="checkbox_handle" onclick="checkAll(this)" value="0">
    	<label for="checkbox"></label>
	</th>
    <th class="line_l">ID</th>
    <th class="line_l">标题</th>	
    <?php if ($_smarty_tpl->getVariable('tasktype')->value=='question'){?>
    <th class="line_l">问题答案</th>
    <th class="line_l">用户编号</th>
    <th class="line_l">用户姓名</th>
    <?php }else{ ?>
    <th class="line_l">发布日期</th>
    <?php }?>
    <th class="line_l">建立时间</th>
    <th class="line_l">最后更新时间</th>
	<?php if ($_smarty_tpl->getVariable('tasktype')->value!='question'){?>
	<th class="line_l">状态</th>
	<?php }?>
    <!--<th class="line_l">置顶</th>  -->  
	<th class="line_l">操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('newsList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['personal_id']) ? $_smarty_tpl->tpl_vars['row']->value['personal_id'] : null);?>
">
    	<td><input type="checkbox" name="checkbox" id="checkbox<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['personal_id']) ? $_smarty_tpl->tpl_vars['row']->value['personal_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['personal_id']) ? $_smarty_tpl->tpl_vars['row']->value['personal_id'] : null);?>
"></td>
	  	<td ><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['personal_id']) ? $_smarty_tpl->tpl_vars['row']->value['personal_id'] : null);?>
</td>
		<td width="10%"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['title']) ? $_smarty_tpl->tpl_vars['row']->value['title'] : null);?>
</td>
		<?php if ($_smarty_tpl->getVariable('tasktype')->value=='question'){?>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['reply']) ? $_smarty_tpl->tpl_vars['row']->value['reply'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['users_id']) ? $_smarty_tpl->tpl_vars['row']->value['users_id'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['realname']) ? $_smarty_tpl->tpl_vars['row']->value['realname'] : null);?>
</td>
		<?php }else{ ?>
        <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['pulish_date']) ? $_smarty_tpl->tpl_vars['row']->value['pulish_date'] : null);?>
</td>
        <?php }?>
        <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['created']) ? $_smarty_tpl->tpl_vars['row']->value['created'] : null);?>
</td>
        <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['updated']) ? $_smarty_tpl->tpl_vars['row']->value['updated'] : null);?>
</td>
        <?php if ($_smarty_tpl->getVariable('tasktype')->value!='question'){?>
		<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['is_active']) ? $_smarty_tpl->tpl_vars['row']->value['is_active'] : null)==1){?>激活<?php }else{ ?>关闭<?php }?></td>
		<?php }?>
    <!--    <td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['is_top']) ? $_smarty_tpl->tpl_vars['row']->value['is_top'] : null)==1){?><img src="/images/Sticky.png"><?php }?></td>        -->
	    <td>
			<?php if ($_smarty_tpl->getVariable('tasktype')->value=='question'){?>
			<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['reply']) ? $_smarty_tpl->tpl_vars['row']->value['reply'] : null)==''){?>
			<a href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['personal_id']) ? $_smarty_tpl->tpl_vars['row']->value['personal_id'] : null);?>
">回复</a> --            
            <a href="javascript:if(confirm('是否确定删除？')){window.location.href='delete.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['personal_id']) ? $_smarty_tpl->tpl_vars['row']->value['personal_id'] : null);?>
';}">删除</a>
			<?php }?>
			<?php }else{ ?>
			<a href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['personal_id']) ? $_smarty_tpl->tpl_vars['row']->value['personal_id'] : null);?>
">编辑</a> --            
            <a href="javascript:if(confirm('是否确定删除？')){window.location.href='delete.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['personal_id']) ? $_smarty_tpl->tpl_vars['row']->value['personal_id'] : null);?>
';}">删除</a>
            <?php }?>
		</td>
 </tr>
 <?php }} ?>
 </table>
 </div>

  <div class="Toolbar_inbox">
	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
	<?php if ($_smarty_tpl->getVariable('tasktype')->value=='question'){?>
	<a href="javascript:void(0);" class="btn_a" onclick="excel();"><span>导出</span></a>
	<?php }else{ ?>
	<a href="create.php" class="btn_a"><span>添加</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="deleteNews();"><span>删除</span></a>
        <a href="javascript:void(0);" class="btn_a" onclick="to_top();"><span>置顶</span></a>
    <?php }?>
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>   	
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
    //导出Excel
    function excel(){
    	
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