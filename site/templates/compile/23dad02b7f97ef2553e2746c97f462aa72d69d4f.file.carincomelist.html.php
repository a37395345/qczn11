<?php /* Smarty version Smarty-3.0.4, created on 2019-03-27 10:16:52
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/report/carincomelist.html" */ ?>
<?php /*%%SmartyHeaderCode:93435c9add14a1db41-47570206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23dad02b7f97ef2553e2746c97f462aa72d69d4f' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/report/carincomelist.html',
      1 => 1456363388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93435c9add14a1db41-47570206',
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
  <div class="page_tit">车辆盈收统计</div>
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
            <div class="page_btm">
            	<input class="btn_b" type="submit" value="确定">
            </div>
        </form>
    </div>
  </div>
  <div class="Toolbar_inbox">
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>
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
	<th>临时自驾业务收入</th>
	<th>临时带驾业务收入</th>
	<th>长期自驾业务收入</th>
	<th>长期带驾业务收入</th>
	<th>长期大客业务收入</th>
	<th>合计</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <?php if (!isset($_smarty_tpl->tpl_vars['all_money']) || !is_array($_smarty_tpl->tpl_vars['all_money']->value)) $_smarty_tpl->createLocalArrayVariable('all_money', null, null);
$_smarty_tpl->tpl_vars['all_money']->value[0] = (isset($_smarty_tpl->getVariable('all_money')->value[0]) ? $_smarty_tpl->getVariable('all_money')->value[0] : null)+(isset($_smarty_tpl->tpl_vars['row']->value['total_money']) ? $_smarty_tpl->tpl_vars['row']->value['total_money'] : null);?>
  <?php if (!isset($_smarty_tpl->tpl_vars['all_money']) || !is_array($_smarty_tpl->tpl_vars['all_money']->value)) $_smarty_tpl->createLocalArrayVariable('all_money', null, null);
$_smarty_tpl->tpl_vars['all_money']->value[1] = (isset($_smarty_tpl->getVariable('all_money')->value[1]) ? $_smarty_tpl->getVariable('all_money')->value[1] : null)+(isset($_smarty_tpl->tpl_vars['row']->value['total_money1']) ? $_smarty_tpl->tpl_vars['row']->value['total_money1'] : null);?>
  <?php if (!isset($_smarty_tpl->tpl_vars['all_money']) || !is_array($_smarty_tpl->tpl_vars['all_money']->value)) $_smarty_tpl->createLocalArrayVariable('all_money', null, null);
$_smarty_tpl->tpl_vars['all_money']->value[2] = (isset($_smarty_tpl->getVariable('all_money')->value[2]) ? $_smarty_tpl->getVariable('all_money')->value[2] : null)+(isset($_smarty_tpl->tpl_vars['row']->value['total_money2']) ? $_smarty_tpl->tpl_vars['row']->value['total_money2'] : null);?>
  <?php if (!isset($_smarty_tpl->tpl_vars['all_money']) || !is_array($_smarty_tpl->tpl_vars['all_money']->value)) $_smarty_tpl->createLocalArrayVariable('all_money', null, null);
$_smarty_tpl->tpl_vars['all_money']->value[3] = (isset($_smarty_tpl->getVariable('all_money')->value[3]) ? $_smarty_tpl->getVariable('all_money')->value[3] : null)+(isset($_smarty_tpl->tpl_vars['row']->value['total_money3']) ? $_smarty_tpl->tpl_vars['row']->value['total_money3'] : null);?>
  <?php if (!isset($_smarty_tpl->tpl_vars['all_money']) || !is_array($_smarty_tpl->tpl_vars['all_money']->value)) $_smarty_tpl->createLocalArrayVariable('all_money', null, null);
$_smarty_tpl->tpl_vars['all_money']->value[4] = (isset($_smarty_tpl->getVariable('all_money')->value[4]) ? $_smarty_tpl->getVariable('all_money')->value[4] : null)+(isset($_smarty_tpl->tpl_vars['row']->value['total_money4']) ? $_smarty_tpl->tpl_vars['row']->value['total_money4'] : null);?>
  <?php if (!isset($_smarty_tpl->tpl_vars['all_money']) || !is_array($_smarty_tpl->tpl_vars['all_money']->value)) $_smarty_tpl->createLocalArrayVariable('all_money', null, null);
$_smarty_tpl->tpl_vars['all_money']->value[5] = (isset($_smarty_tpl->getVariable('all_money')->value[5]) ? $_smarty_tpl->getVariable('all_money')->value[5] : null)+(isset($_smarty_tpl->tpl_vars['row']->value['total_money5']) ? $_smarty_tpl->tpl_vars['row']->value['total_money5'] : null);?>
  
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_id']) ? $_smarty_tpl->tpl_vars['row']->value['drive_id'] : null);?>
" <?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1)%2==0){?>style="background-color:#EAF2D3;"<?php }?>>
	  	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
	  	<td>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['total_money1']) ? $_smarty_tpl->tpl_vars['row']->value['total_money1'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['total_money2']) ? $_smarty_tpl->tpl_vars['row']->value['total_money2'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['total_money3']) ? $_smarty_tpl->tpl_vars['row']->value['total_money3'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['total_money4']) ? $_smarty_tpl->tpl_vars['row']->value['total_money4'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['total_money5']) ? $_smarty_tpl->tpl_vars['row']->value['total_money5'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['total_money']) ? $_smarty_tpl->tpl_vars['row']->value['total_money'] : null);?>
</td>
 </tr>
 <?php }} ?>
 <tr style="background-color:#FE6E47;">
    <td colspan="2">合计</td>
    <td><?php echo (isset($_smarty_tpl->getVariable('all_money')->value[1]) ? $_smarty_tpl->getVariable('all_money')->value[1] : null);?>
</td>
    <td><?php echo (isset($_smarty_tpl->getVariable('all_money')->value[2]) ? $_smarty_tpl->getVariable('all_money')->value[2] : null);?>
</td>
    <td><?php echo (isset($_smarty_tpl->getVariable('all_money')->value[3]) ? $_smarty_tpl->getVariable('all_money')->value[3] : null);?>
</td>
    <td><?php echo (isset($_smarty_tpl->getVariable('all_money')->value[4]) ? $_smarty_tpl->getVariable('all_money')->value[4] : null);?>
</td>
    <td><?php echo (isset($_smarty_tpl->getVariable('all_money')->value[5]) ? $_smarty_tpl->getVariable('all_money')->value[5] : null);?>
</td>
    <td><?php echo (isset($_smarty_tpl->getVariable('all_money')->value[0]) ? $_smarty_tpl->getVariable('all_money')->value[0] : null);?>
</td>
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