<?php /* Smarty version Smarty-3.0.4, created on 2015-04-30 10:58:48
         compiled from "D:\czyhqc\site\templates\elsker\operator/report/fuellist.html" */ ?>
<?php /*%%SmartyHeaderCode:3191955419a68efb6e1-80945765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b03c12c8f3ad263bf1ba9fd544eb6bcac9bc387' => 
    array (
      0 => 'D:\\czyhqc\\site\\templates\\elsker\\operator/report/fuellist.html',
      1 => 1430362115,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3191955419a68efb6e1-80945765',
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
<link href="../../../../css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<script type="text/javascript" src="../../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
</head>
<body>
<div class="so_main">
  <div class="page_tit">车辆油耗统计</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <div class="form2">
        <form action="list.php" method="get">
            <dl class="lineD">
	            <dt>开始日期：</dt>
	            <dd><input type="text" name="startdate" size="16" value="<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
" onClick="calendar.show(this);" readonly="readonly" /></dd>
            </dl>
            <dl class="lineD">
	            <dt>截止日期：</dt>
	            <dd><input type="text" name="enddate" size="16" value="<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
" onClick="calendar.show(this);" readonly="readonly" /></dd>
            </dl>
            <dl class="lineD">
            <dt>车牌号：</dt>
            <dd><input type="text" name="title"></dd>
         </dl>
            <div class="page_btm">
            	<input class="btn_b" type="submit" value="确定">
            </div>
        </form>
    </div>
  </div>
  <div class="Toolbar_inbox">
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>条件</span></a>
<!-- 	<a href="list.php?task=exportoutcar&paicheDriver2=<?php echo $_smarty_tpl->getVariable('driveid')->value;?>
&startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
" class="btn_a"  id="exportUser_action"><span>导出</span></a> -->
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th>序号</th>
	<th>车辆</th>
	<th>总行驶里程</th>
	<th>加油行驶里程</th>
	<th>油卡加油</th>
	<th>现金加油</th>
	<th>油耗</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <?php $_smarty_tpl->tpl_vars['total4'] = new Smarty_variable($_smarty_tpl->getVariable('total4')->value+(isset($_smarty_tpl->tpl_vars['row']->value['all_km']) ? $_smarty_tpl->tpl_vars['row']->value['all_km'] : null), null, null);?>
  <?php $_smarty_tpl->tpl_vars['total1'] = new Smarty_variable($_smarty_tpl->getVariable('total1')->value+(isset($_smarty_tpl->tpl_vars['row']->value['total_km']) ? $_smarty_tpl->tpl_vars['row']->value['total_km'] : null), null, null);?>
  <?php $_smarty_tpl->tpl_vars['total2'] = new Smarty_variable($_smarty_tpl->getVariable('total2')->value+(isset($_smarty_tpl->tpl_vars['row']->value['refuel_number1']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_number1'] : null), null, null);?>
  <?php $_smarty_tpl->tpl_vars['total3'] = new Smarty_variable($_smarty_tpl->getVariable('total3')->value+(isset($_smarty_tpl->tpl_vars['row']->value['refuel_number2']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_number2'] : null), null, null);?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_id']) ? $_smarty_tpl->tpl_vars['row']->value['drive_id'] : null);?>
">
	  	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
	  	<td>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['all_km']) ? $_smarty_tpl->tpl_vars['row']->value['all_km'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['total_km']) ? $_smarty_tpl->tpl_vars['row']->value['total_km'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['refuel_number1']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_number1'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['refuel_number2']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_number2'] : null);?>
</td>
		<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['total_km']) ? $_smarty_tpl->tpl_vars['row']->value['total_km'] : null)>0){?><?php echo round(100*((isset($_smarty_tpl->tpl_vars['row']->value['refuel_number1']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_number1'] : null)+(isset($_smarty_tpl->tpl_vars['row']->value['refuel_number2']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_number2'] : null))/(isset($_smarty_tpl->tpl_vars['row']->value['total_km']) ? $_smarty_tpl->tpl_vars['row']->value['total_km'] : null),2);?>
<?php }?></td>
 </tr>
 <?php }} ?>
 <tr>
    <th colspan="2">合计</th>
    <th><?php echo $_smarty_tpl->getVariable('total4')->value;?>
</th>
    <th><?php echo $_smarty_tpl->getVariable('total1')->value;?>
</th>
    <th><?php echo $_smarty_tpl->getVariable('total2')->value;?>
</th>
    <th><?php echo $_smarty_tpl->getVariable('total3')->value;?>
</th>
    <th>&nbsp;</th>
  </tr>
 </table>
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
	

</script>
<!-->

</body>
</html>