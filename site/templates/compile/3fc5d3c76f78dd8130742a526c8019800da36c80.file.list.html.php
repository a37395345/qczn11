<?php /* Smarty version Smarty-3.0.4, created on 2016-01-05 16:10:17
         compiled from "D:\web\site\templates\elsker\operator/fitting/list.html" */ ?>
<?php /*%%SmartyHeaderCode:730568b7a69bf43b3-50454823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fc5d3c76f78dd8130742a526c8019800da36c80' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/fitting/list.html',
      1 => 1447233606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '730568b7a69bf43b3-50454823',
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
<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/date_select.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
</head>
<body>
<div class="so_main">
  <div class="page_tit">配件一览表</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <form action="list.php" method="get">
    <div class="form">
        <dl class="lineD">
            <dt>购买日期：</dt>
            <dd>
            <input id="search_startDate" type="text" value="" name="search_startDate" onClick="calendar.show(this);">~~~<input id="search_endDate" type="text" value="" name="search_endDate" onClick="calendar.show(this);">
            </dd>
            </dl>            
            <dl class="lineD">
            <dt>配件名称：</dt>
            <dd>
            <input id="title" type="text" value="<?php echo $_smarty_tpl->getVariable('title')->value;?>
" name="title">
            <p>支持模糊查询</p>
            </dd>
        </dl>
        <div class="page_btm">
            	<input class="btn_b" type="submit" value="确定">
         </div>
    </div>
    </form>
  </div>
  <div class="Toolbar_inbox">
  	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
  	<a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>
    <a href="create.php" class="btn_a"><span>采购申请</span></a>
    <a href="list.php?task=applist" class="btn_a"><span>采购记录</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="out();"><span>领用</span></a>
    <a href="list.php?task=outlist" class="btn_a"><span>领用记录</span></a>
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">
		<input type="checkbox" id="checkbox_handle" onclick="checkAll(this)" value="0">
    	<label for="checkbox"></label>
	</th>
	<th>配件名称</th>
	<th>品牌</th>
	<th>型号规格</th>
	<th>库存数量</th>
	<th>单位</th>
	<th>单价</th>
	<th>金额</th>
	<th>购买日期</th>
	<th>最近一次领用日期</th>
	<th>状态</th>
	<th class="line_l">操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_id']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_id'] : null);?>
">
    	<td><input type="checkbox" name="checkbox" id="checkbox<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_id']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_id']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_id'] : null);?>
"></td>	
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_name']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_brand']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_brand'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_model']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_model'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_innum']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_innum'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['fitting_outnum']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_outnum'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_unit']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_unit'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_price']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_price'] : null);?>
</td>
		<td><?php echo ((isset($_smarty_tpl->tpl_vars['row']->value['fitting_innum']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_innum'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['fitting_outnum']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_outnum'] : null))*(isset($_smarty_tpl->tpl_vars['row']->value['fitting_price']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_price'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_indate']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_indate'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_outdate']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_outdate'] : null);?>
</td>
		<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['fitting_status']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_status'] : null)==1){?>已审核<?php }else{ ?>未审核<?php }?></td>
		<td><a href="out.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_id']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_id'] : null);?>
">领用</a>
		</td>
 </tr>
 <?php }} ?>
 </table>
 </div>

  <div class="Toolbar_inbox">
	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
	<a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>
	<a href="create.php" class="btn_a"><span>采购申请</span></a>
    <a href="list.php?task=applist" class="btn_a"><span>采购记录</span></a>
	<a href="javascript:void(0);" class="btn_a" onclick="out();"><span>领用</span></a>
    <a href="list.php?task=outlist" class="btn_a"><span>领用记录</span></a>
    
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
  	//获取已选择记录的ID数组
	function getChecked() {
		var uids = new Array();
		$.each($('table input:checked'), function(i, n){
			uids.push( $(n).val() );
		});
		return uids;
	}
    function out(){
		bids = getChecked();
		bids = bids.toString();
        if(bids == ''){
        	alert("请先选择库存配件！");
        	return false;
        }
        location.href="out.php?uid="+bids;
		
	}
	
	
</script>
<!-->

</body>
</html>