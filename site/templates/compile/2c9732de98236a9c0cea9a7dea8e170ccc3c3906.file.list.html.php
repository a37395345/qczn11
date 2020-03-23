<?php /* Smarty version Smarty-3.0.4, created on 2019-11-19 13:19:24
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/oilcard/list.html" */ ?>
<?php /*%%SmartyHeaderCode:148825dd37b5cf144d8-73903544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c9732de98236a9c0cea9a7dea8e170ccc3c3906' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/oilcard/list.html',
      1 => 1571707185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148825dd37b5cf144d8-73903544',
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
<link href="../../../css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
</head>
<body>
<div class="so_main">
  <div class="page_tit">加油卡对应车辆一览表</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <form action="list.php" method="get">
    <div class="list">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
		  <tr>
		    <th>车牌号</th>
		    <th>油卡号</th>
		    <th>状态</th>
		  </tr>
		  <tr>
		    <td>苏D&nbsp;<input type="text" name="car_num" size="3"  /></td>
		    <td><input type="text" name="mobile" size="15"  /></td>
		    <td><input type="radio" name="search_status" value="0" <?php if ($_smarty_tpl->getVariable('search_status')->value==0){?>checked<?php }?>>正常
			<input type="radio" name="search_status" value="-1" <?php if ($_smarty_tpl->getVariable('search_status')->value==-1){?>checked<?php }?>>挂失
			<input type="radio" name="search_status" value="-2" <?php if ($_smarty_tpl->getVariable('search_status')->value==-2){?>checked<?php }?>>暂停使用</td>
		   </tr>
		  <tr>
		    <td colspan="2"><input type="submit" class="sub" value="查 询" /></td>
		  <tr>
		</table>
    </div>
    </form>
  </div>
  <div class="Toolbar_inbox">
  	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
    <a href="list.php?task=create" class="btn_a"><span>添加</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>
	<input class="btn_b" type="button" value="返回" name="btnback" onclick="javascript:window.location.href='first.php';">
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">序号	</th>
	<th>车牌号</th>
	<th>油卡号</th>
    <th>加油站限定情况</th>
    <th>限油品</th>
    <th>加油卡密码</th>
    <th>当前状态</th>
    <th width="10%">操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['oil_id']) ? $_smarty_tpl->tpl_vars['row']->value['oil_id'] : null);?>
">
    	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>	
	    <td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['card_state']) ? $_smarty_tpl->tpl_vars['row']->value['card_state'] : null)==-1){?>挂失<?php }else{ ?><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null)!=''){?>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null)==998){?>备用油卡<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null)==999){?>公司副卡<?php }else{ ?>公司主卡<?php }?><?php }?></td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['card_no']) ? $_smarty_tpl->tpl_vars['row']->value['card_no'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['card_area']) ? $_smarty_tpl->tpl_vars['row']->value['card_area'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['card_oilmode']) ? $_smarty_tpl->tpl_vars['row']->value['card_oilmode'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['card_pass']) ? $_smarty_tpl->tpl_vars['row']->value['card_pass'] : null);?>
</td>
		<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['card_state']) ? $_smarty_tpl->tpl_vars['row']->value['card_state'] : null)==-2){?>暂停使用<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['card_state']) ? $_smarty_tpl->tpl_vars['row']->value['card_state'] : null)==-1){?>挂失<?php }else{ ?>正常<?php }?></td>
	    <td><a href="copy.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['oil_id']) ? $_smarty_tpl->tpl_vars['row']->value['oil_id'] : null);?>
">复制</a>&nbsp;|&nbsp;<a href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['oil_id']) ? $_smarty_tpl->tpl_vars['row']->value['oil_id'] : null);?>
">编辑</a>&nbsp;|&nbsp;<a href="javascript:if(confirm('是否确定删除该加油卡记录？')){window.location.href='delete.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['oil_id']) ? $_smarty_tpl->tpl_vars['row']->value['oil_id'] : null);?>
&car_id=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
';}">删除</a></td>
 </tr>
 <?php }} ?>
 </table>
 </div>

  <div class="Toolbar_inbox">
	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
	<a href="list.php?task=create" class="btn_a"><span>添加</span></a>
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