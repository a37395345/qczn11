<?php /* Smarty version Smarty-3.0.4, created on 2019-09-30 14:14:02
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/yearcareful/list.html" */ ?>
<?php /*%%SmartyHeaderCode:5939431355d919d2addaac0-08203701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da9a14267fc90a5a6a84dabb1e82065ceb5633fc' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/yearcareful/list.html',
      1 => 1569824033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5939431355d919d2addaac0-08203701',
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
  <div class="page_tit">车辆年审记录</div>
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
    <th width="7%" rowspan="2">注册日期</th>
	<th width="20%" colspan="3">上次年审</th>
	<th width="9%" rowspan="2">下次大年审日期</th>
	<th width="9%" rowspan="2">下次小年审日期</th>
    <th rowspan="2">年审记录</th>
    <th width="5%" rowspan="2">详情</th>
  </tr>
  <tr>
    <th width="8%">大年审时间</th>
    <th width="8%">小年审时间</th>
	<th width="4%">公里数</th>
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
		<td style="text-align:left;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_brand']) ? $_smarty_tpl->tpl_vars['row']->value['car_brand'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_cartDate']) ? $_smarty_tpl->tpl_vars['row']->value['car_cartDate'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_lastcarefulDate']) ? $_smarty_tpl->tpl_vars['row']->value['car_lastcarefulDate'] : null);?>
</td>
		<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_xiaotime']) ? $_smarty_tpl->tpl_vars['row']->value['car_xiaotime'] : null)==0){?>无<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_xiaotime']) ? $_smarty_tpl->tpl_vars['row']->value['car_xiaotime'] : null);?>
<?php }?></td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_lastcarefulKilo']) ? $_smarty_tpl->tpl_vars['row']->value['car_lastcarefulKilo'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_nextcarefulDate']) ? $_smarty_tpl->tpl_vars['row']->value['car_nextcarefulDate'] : null);?>
</td>
	    <td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_xiaodate']) ? $_smarty_tpl->tpl_vars['row']->value['car_xiaodate'] : null)==0){?>无<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_xiaodate']) ? $_smarty_tpl->tpl_vars['row']->value['car_xiaodate'] : null);?>
<?php }?></td>
	    <td style="text-align:left;">
	    <?php  $_smarty_tpl->tpl_vars['row2'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['row']->value['car_carefulList']) ? $_smarty_tpl->tpl_vars['row']->value['car_carefulList'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row2']->key => $_smarty_tpl->tpl_vars['row2']->value){
?>
	    <?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['careful_date']) ? $_smarty_tpl->tpl_vars['row2']->value['careful_date'] : null);?>
<?php if ((isset($_smarty_tpl->tpl_vars['row2']->value['type']) ? $_smarty_tpl->tpl_vars['row2']->value['type'] : null)==0){?>大<?php }else{ ?>小<?php }?>年审;&nbsp;&nbsp;<hr/>
	    <?php }} ?>
	    </td>
	    <td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_carefulList']) ? $_smarty_tpl->tpl_vars['row']->value['car_carefulList'] : null)){?><a href="javascript:show(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
);"><span id="show_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
">展开</span></a><?php }else{ ?>无<?php }?></td>
 </tr>
 <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_carefulList']) ? $_smarty_tpl->tpl_vars['row']->value['car_carefulList'] : null)){?>
 <tr id="detail_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
" style="display:none;">
 	<td>&nbsp;</td>
 	<td colspan="8">
 		<table align="left" width="100%" border="1" cellspacing="0" cellpadding="0">
	    <tr>
		    <th width="8%" style="background-color:#4764A2;color:#FFFFFF;">日期</th>
		    <th width="8%" style="background-color:#4764A2;color:#FFFFFF;">公里数</th>
		    <th width="8%" style="background-color:#4764A2;color:#FFFFFF;">年审费用</th>
		    <th width="8%" style="background-color:#4764A2;color:#FFFFFF;">大小年审</th>
		    <th  style="background-color:#4764A2;color:#FFFFFF;">年审内容</th>
			<th width="7%" style="background-color:#4764A2;color:#FFFFFF;">操作</th>
	    </tr>
	    <?php  $_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['row']->value['car_carefulList']) ? $_smarty_tpl->tpl_vars['row']->value['car_carefulList'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row1']->key => $_smarty_tpl->tpl_vars['row1']->value){
?>
	    <tr>
		    <td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['careful_date']) ? $_smarty_tpl->tpl_vars['row1']->value['careful_date'] : null);?>
</td>
		    <td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['careful_km']) ? $_smarty_tpl->tpl_vars['row1']->value['careful_km'] : null);?>
</td>
		    <td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['careful_money']) ? $_smarty_tpl->tpl_vars['row1']->value['careful_money'] : null);?>
</td>
		    <td><?php if ((isset($_smarty_tpl->tpl_vars['row1']->value['type']) ? $_smarty_tpl->tpl_vars['row1']->value['type'] : null)==0){?>大<?php }else{ ?>小<?php }?></td>
		    <td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['careful_remark']) ? $_smarty_tpl->tpl_vars['row1']->value['careful_remark'] : null);?>
</td>
			<td><a href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['careful_id']) ? $_smarty_tpl->tpl_vars['row1']->value['careful_id'] : null);?>
&type=<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['type']) ? $_smarty_tpl->tpl_vars['row1']->value['type'] : null);?>
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
		demo_iframe('list.php?task=bao&uid='+uid,'车辆年审费用报销',500,450,'login_js');
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