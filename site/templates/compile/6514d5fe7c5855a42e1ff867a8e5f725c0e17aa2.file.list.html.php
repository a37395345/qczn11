<?php /* Smarty version Smarty-3.0.4, created on 2017-07-15 14:45:22
         compiled from "D:\web\site\templates\elsker\operator/sim/list.html" */ ?>
<?php /*%%SmartyHeaderCode:173475969ba021240d3-68326525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6514d5fe7c5855a42e1ff867a8e5f725c0e17aa2' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/sim/list.html',
      1 => 1500014439,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173475969ba021240d3-68326525',
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
  <div class="page_tit">GPS手机卡号管理</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <form action="list.php" method="get">
    <div class="list">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
		  <tr>
		    <th>手机号</th>
		    <th>车牌号</th>
		    <th>购买日期</th>
		  </tr>
		  <tr>
		    <td><input type="text" name="mobile" size="15"  /></td>
		    <td>苏D&nbsp;<input type="text" name="car_num" size="3"  /></td>
		    <td><input type="text" name="buy_Date" size="10" onclick="calendar.show(this);" readonly="readonly" /></td>
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
    <a href="create.php" class="btn_a"><span>添加</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>
	<a href="list.php?task=export&mobile=<?php echo $_smarty_tpl->getVariable('mobile')->value;?>
&buy_Date=<?php echo $_smarty_tpl->getVariable('buy_Date')->value;?>
" class="btn_a" id="exportUser_action"><span>导出</span></a>
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">序号	</th>
	<th>卡号</th>
    <th>购买日期</th>
    <th>金额</th>
    <th>启用日期</th>
    <th>最近一次充值</th>
    <th>使用车辆</th>
    <th style="text-align:left;" width="50%">充值情况</th>
    <th width="8%">操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
">
    	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>	
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['card_no']) ? $_smarty_tpl->tpl_vars['row']->value['card_no'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['buy_date']) ? $_smarty_tpl->tpl_vars['row']->value['buy_date'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['buy_money']) ? $_smarty_tpl->tpl_vars['row']->value['buy_money'] : null);?>
元</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['gps_start']) ? $_smarty_tpl->tpl_vars['row']->value['gps_start'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['recharge_date']) ? $_smarty_tpl->tpl_vars['row']->value['recharge_date'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
</td>
		<td style="text-align:left;">
	    <?php  $_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['row']->value['sim_inmoneyList']) ? $_smarty_tpl->tpl_vars['row']->value['sim_inmoneyList'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row1']->key => $_smarty_tpl->tpl_vars['row1']->value){
?>
	    <?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['buy_date']) ? $_smarty_tpl->tpl_vars['row1']->value['buy_date'] : null);?>
充<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['buy_money']) ? $_smarty_tpl->tpl_vars['row1']->value['buy_money'] : null);?>
元<a href="javascript:in_money(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['sim_id']) ? $_smarty_tpl->tpl_vars['row']->value['sim_id'] : null);?>
,<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['id']) ? $_smarty_tpl->tpl_vars['row1']->value['id'] : null);?>
);"><img src="../../../images/edit.gif" /></a>&nbsp;&nbsp;
	    <?php }} ?>
	    </td>
	    <td><a href="javascript:in_money(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['sim_id']) ? $_smarty_tpl->tpl_vars['row']->value['sim_id'] : null);?>
,0);">充值</a>&nbsp;<a href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['sim_id']) ? $_smarty_tpl->tpl_vars['row']->value['sim_id'] : null);?>
">编辑</a>&nbsp;<a href="javascript:if(confirm('是否确定删除该手机卡记录？')){window.location.href='delete.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['sim_id']) ? $_smarty_tpl->tpl_vars['row']->value['sim_id'] : null);?>
';}">删除</a>
 </tr>
 <?php }} ?>
 </table>
 </div>

  <div class="Toolbar_inbox">
	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
	<a href="create.php" class="btn_a"><span>添加</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>
    <a href="list.php?task=export&mobile=<?php echo $_smarty_tpl->getVariable('mobile')->value;?>
&buy_Date=<?php echo $_smarty_tpl->getVariable('buy_Date')->value;?>
" class="btn_a" id="exportUser_action"><span>导出</span></a>
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
	function in_money(sim_id,in_id){
		demo_iframe('list.php?task=inmoney&uid='+sim_id+'&rid='+in_id,'手机卡充值',550,380,'login_js');
	}
	
</script>
<!-->

</body>
</html>