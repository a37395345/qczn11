<?php /* Smarty version Smarty-3.0.4, created on 2019-11-08 15:19:13
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/maint/list.html" */ ?>
<?php /*%%SmartyHeaderCode:270615dc516f1ad9690-03680850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de52d2f098615f76246a5ab366c7f2c0e35d3612' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/maint/list.html',
      1 => 1571707188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '270615dc516f1ad9690-03680850',
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
<script type="text/javascript" src="../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
</head>
<body>
<div class="so_main">
  <div class="page_tit">车辆维修保养记录</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <form action="list.php" method="get">
    <input type="hidden" name="car_status" value="<?php echo $_smarty_tpl->getVariable('car_status')->value;?>
"  />
    <div class="list">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
		  <tr>
		    <th>车牌号</th>
		    <th>注册日期</th>
		  </tr>
		  <tr>
		    <td>苏D&nbsp;<input type="text" name="car_num" size="3"  /></td>
		    <td><input type="text" name="car_cartDate" id="car_cartDate" size="6" onclick="new Calendar().show(this);" /></td>
		   </tr>
		  <tr>
		    <td colspan="13"><input type="submit" class="sub" value="查 询" /></td>
		  <tr>
		</table>
    </div>
    </form>
  </div>
  <div class="Toolbar_inbox">
  	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
    <?php if ($_smarty_tpl->getVariable('op')->value!="account"){?><a href="list.php?task=create" class="btn_a"><span>添加</span></a><?php }?>
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>
    <input class="btn_b" type="button" value="返回" name="btnback" onclick="javascript:window.location.href='first.php';">
	
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th width="7%" rowspan="2">车牌号</th>
    <th width="15%" rowspan="2">品牌</th>
    <th width="7%" rowspan="2">购买日期</th>
	<th width="16%" colspan="2">上次保养</th>
    <th rowspan="2">最近更换</th>
    <th width="5%" rowspan="2">详情</th>
  </tr>
  <tr>
    <th width="10%">时间</th>
	<th width="8%">公里数</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
">
	    <td>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_brand']) ? $_smarty_tpl->tpl_vars['row']->value['car_brand'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_saleDate']) ? $_smarty_tpl->tpl_vars['row']->value['car_saleDate'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_lastmaintDate']) ? $_smarty_tpl->tpl_vars['row']->value['car_lastmaintDate'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_lastmaintKilo']) ? $_smarty_tpl->tpl_vars['row']->value['car_lastmaintKilo'] : null);?>
</td>
	    <td style="text-align:left;">
	    <?php  $_smarty_tpl->tpl_vars['row2'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['row']->value['car_maintItemList']) ? $_smarty_tpl->tpl_vars['row']->value['car_maintItemList'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row2']->key => $_smarty_tpl->tpl_vars['row2']->value){
?>
	    <?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['option_name']) ? $_smarty_tpl->tpl_vars['row2']->value['option_name'] : null);?>
:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['maintenance_date']) ? $_smarty_tpl->tpl_vars['row2']->value['maintenance_date'] : null);?>
;&nbsp;&nbsp;
	    <?php }} ?>
	    </td>
	    <td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_maintList']) ? $_smarty_tpl->tpl_vars['row']->value['car_maintList'] : null)){?><a href="javascript:show(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
);"><span id="show_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
">展开</span></a><?php }else{ ?>无<?php }?></td>
 </tr>
 <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_maintList']) ? $_smarty_tpl->tpl_vars['row']->value['car_maintList'] : null)){?>
 <tr id="detail_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
" style="display:none;">
 	<td>&nbsp;</td>
 	<td colspan="8">
 		<table align="left" width="100%" border="1" cellspacing="0" cellpadding="0">
	    <tr>
		    <th width="4%" style="background-color:#4764A2;color:#FFFFFF;">类型</th>
		    <th width="5%" style="background-color:#4764A2;color:#FFFFFF;">金额</th>
		    <th width="8%" style="background-color:#4764A2;color:#FFFFFF;">日期</th>
		    <th width="5%" style="background-color:#4764A2;color:#FFFFFF;">公里数</th>
		    <th  style="background-color:#4764A2;color:#FFFFFF;">保养内容</th>
		    <?php  $_smarty_tpl->tpl_vars['row11'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('itemlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row11']->key => $_smarty_tpl->tpl_vars['row11']->value){
?>
		    <th width="5%" style="background-color:#4764A2;color:#FFFFFF;"><?php echo (isset($_smarty_tpl->tpl_vars['row11']->value['option_name']) ? $_smarty_tpl->tpl_vars['row11']->value['option_name'] : null);?>
</th>
		    <?php }} ?>
			<th width="7%" style="background-color:#4764A2;color:#FFFFFF;">操作</th>
	    </tr>
	    <?php  $_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['row']->value['car_maintList']) ? $_smarty_tpl->tpl_vars['row']->value['car_maintList'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row1']->key => $_smarty_tpl->tpl_vars['row1']->value){
?>
	    <tr>
		    <td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['maintenance_type']) ? $_smarty_tpl->tpl_vars['row1']->value['maintenance_type'] : null);?>
</td>
		    <td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['maintenance_money']) ? $_smarty_tpl->tpl_vars['row1']->value['maintenance_money'] : null);?>
</td>
		    <td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['maintenance_date']) ? $_smarty_tpl->tpl_vars['row1']->value['maintenance_date'] : null);?>
</td>
		    <td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['maintenance_km']) ? $_smarty_tpl->tpl_vars['row1']->value['maintenance_km'] : null);?>
</td>
		    <td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['maintenance_remark']) ? $_smarty_tpl->tpl_vars['row1']->value['maintenance_remark'] : null);?>
</td>
		    <?php  $_smarty_tpl->tpl_vars['row12'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['row1']->value['item_list']) ? $_smarty_tpl->tpl_vars['row1']->value['item_list'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row12']->key => $_smarty_tpl->tpl_vars['row12']->value){
?>
		    <td><?php $_tmp1=(isset($_smarty_tpl->tpl_vars['row12']->value['item_id']) ? $_smarty_tpl->tpl_vars['row12']->value['item_id'] : null);?><?php if (empty($_tmp1)){?><?php }else{ ?>√<?php }?></td>
		    <?php }} ?>
			<td><a href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['maintenance_id']) ? $_smarty_tpl->tpl_vars['row1']->value['maintenance_id'] : null);?>
">编辑</a>
			<!-- &nbsp;<a href="javascript:if(confirm('是否确定删除该记录？')){window.location.href='delete.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['maintenance_id']) ? $_smarty_tpl->tpl_vars['row1']->value['maintenance_id'] : null);?>
';}">删除 --></a>
 		</tr>
	    <?php }} ?>
	    </table>
 	</td>
 </tr>
 <?php }?>
 <?php }} ?>
 </table>
 </div>

  <div class="Toolbar_inbox">
	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
	<?php if ($_smarty_tpl->getVariable('op')->value!="account"){?><a href="list.php?task=create" class="btn_a"><span>添加</span></a><?php }?>
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
	function bao(uid){
		demo_iframe('list.php?task=bao&uid='+uid,'车辆维修费用报销',500,450,'login_js');
	}
	function show(nid){
	    if ($("#show_"+nid).html()=="展开"){
			$("#detail_"+nid).css("display","table-row");
			$("#show_"+nid).html("收起");
	    }else{
			$("#detail_"+nid).css("display","none");
			$("#show_"+nid).html("展开");
	    }
	}
	
</script>
<!-->

</body>
</html>