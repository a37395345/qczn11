<?php /* Smarty version Smarty-3.0.4, created on 2014-06-24 15:25:10
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/product/detail/list.html" */ ?>
<?php /*%%SmartyHeaderCode:1123553a927d6a75874-69085467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f93739daa6980ab666206bdf1df665875162fb0d' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/product/detail/list.html',
      1 => 1398346618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1123553a927d6a75874-69085467',
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
</head>
<body>
<div class="so_main">
  <div class="page_tit">列表</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <div class="form2">
        <form action="list.php?task=search" method="post">
            
            <dl class="lineD">
            <dt>产品名称：</dt>
            <dd>
            <input id="name" type="text" value="" name="name" size="60">
            <p>支持模糊查询</p>
            </dd>
            </dl>

            <dl class="lineD">
                <dt>产品详细类型：</dt>
                <dd>
                    <select name="cate_id" >
                        <option value="">请选择</option>
                        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cate6List')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                        <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>
</option>
                        <?php }} ?>
                    </select>
                </dd>
            </dl>
            <dl class="lineD">
                <dt>产品系列：</dt>
                <dd>
                    <select name="serial_id" >
                        <option value="">请选择</option>
                        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cate5List')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                        <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>
</option>
                        <?php }} ?>
                    </select>
                </dd>
            </dl>
            
            <dl class="lineD">
            <dt>状态：</dt>
            <dd>
            <select name="status" >
                <option value="">-请选择-</option>
                <option value="1" >激活</option>
                <option value="0" >关闭</option>    
            </select>

            </dd>
            </dl>                        
                        
            
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
	<a href="create.php" class="btn_a"><span>添加</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="deleteNews();"><span>删除</span></a>
    <!--<a href="javascript:void(0);" class="btn_a" onclick="to_top();"><span>置顶</span></a>   -->
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
    <th class="line_l">名称</th>
    <th class="line_l">产品详细类型</th>
    <th class="line_l">产品图片</th>
    <th class="line_l">测评图片</th>
    <th class="line_l">产品效果</th>
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
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['pid']) ? $_smarty_tpl->tpl_vars['row']->value['pid'] : null);?>
">
    	<td><input type="checkbox" name="checkbox" id="checkbox<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['pid']) ? $_smarty_tpl->tpl_vars['row']->value['pid'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['pid']) ? $_smarty_tpl->tpl_vars['row']->value['pid'] : null);?>
"></td>
	  	<td ><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['pid']) ? $_smarty_tpl->tpl_vars['row']->value['pid'] : null);?>
</td>
        <td ><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
</td>
        <td ><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['cate_name']) ? $_smarty_tpl->tpl_vars['row']->value['cate_name'] : null);?>
</td>
        <td ><a href="/thumb/<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['images']) ? $_smarty_tpl->tpl_vars['row']->value['images'] : null);?>
" class="zoomIn" title="点击查看原图"><img src="/thumb/<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['images']) ? $_smarty_tpl->tpl_vars['row']->value['images'] : null);?>
" WIDTH="100" HEIGHT="100" BORDER="0"></a></td>
      <td ><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['report']) ? $_smarty_tpl->tpl_vars['row']->value['report'] : null)){?><a href="/thumb/<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['report']) ? $_smarty_tpl->tpl_vars['row']->value['report'] : null);?>
" class="zoomIn" title="点击查看原图"><img src="/thumb/<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['report']) ? $_smarty_tpl->tpl_vars['row']->value['report'] : null);?>
" WIDTH="100" HEIGHT="100" BORDER="0"></a><?php }?></td>
        <td ><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['benefit']) ? $_smarty_tpl->tpl_vars['row']->value['benefit'] : null);?>
</td>
        <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['created']) ? $_smarty_tpl->tpl_vars['row']->value['created'] : null);?>
</td>
        <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['updated']) ? $_smarty_tpl->tpl_vars['row']->value['updated'] : null);?>
</td>
		<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['status']) ? $_smarty_tpl->tpl_vars['row']->value['status'] : null)==1){?>激活<?php }else{ ?>关闭<?php }?></td>
	    <td>
			<a href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['pid']) ? $_smarty_tpl->tpl_vars['row']->value['pid'] : null);?>
">编辑</a>
            <a href="javascript:if(confirm('是否确定删除？')){window.location.href='delete.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['pid']) ? $_smarty_tpl->tpl_vars['row']->value['pid'] : null);?>
';}">删除</a>
            <a href="../../testimonial/list.php?prodid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['pid']) ? $_smarty_tpl->tpl_vars['row']->value['pid'] : null);?>
&task=commentlist">管理评论</a>	
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
    <a href="javascript:void(0);" class="btn_a" onclick="deleteNews();"><span>删除</span></a>
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
        
        $("#cate1_id").change(function(){
            $this = $(this);
            var level1_id = $this.val();
            $.get('../level3/list.php',
            {
                task:'getLevel2List',
                level1_id:level1_id
            },function(data){
                var obj = eval("("+data+")");
                $("#cate3_id").empty();
                $("#cate3_id").append("<option value=''>-请选择-</option>");                   
                    $("#cate2_id").empty();
                    $("#cate2_id").append("<option value=''>-请选择-</option>");                  
                if (obj.result == 'OK')
                { 
                    var level2List = obj.level2List;
                    for(var i = 0, len = level2List.length; i < len; i++)
                    {
                        $("#cate2_id").append("<option value='"+level2List[i]['look_book_cate_id']+"'>"+level2List[i]['title']+"</option>");   
                    }
                }
            }); 
        });
              
        
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
    
    
    //置顶用户
    function to_top(uid) {
        uid = uid ? uid : getChecked();
        uid = uid.toString();
        if(uid == '') return false;

        $.post("top.php?multi=1&cate1_id={$cate1_id}&cate2_id={$cate2_id}&cate3_id={$cate3_id}", {uid:uid}, function(res){
            if(res == '1') {
                alert('操作成功');
                document.location.reload();
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