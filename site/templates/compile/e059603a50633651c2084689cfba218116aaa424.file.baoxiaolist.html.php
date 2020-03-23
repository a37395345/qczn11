<?php /* Smarty version Smarty-3.0.4, created on 2019-11-06 10:18:11
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/report/baoxiaolist.html" */ ?>
<?php /*%%SmartyHeaderCode:90545dc22d63844935-25614094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e059603a50633651c2084689cfba218116aaa424' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/report/baoxiaolist.html',
      1 => 1571707185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90545dc22d63844935-25614094',
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
</head>
<body>
<div class="so_main">
  <div class="page_tit">费用报销统计</div>
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
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>条件</span></a>
<!-- 	<a href="list.php?task=exportoutcar&paicheDriver2=<?php echo $_smarty_tpl->getVariable('driveid')->value;?>
&startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
" class="btn_a"  id="exportUser_action"><span>导出</span></a> -->
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th colspan="5">司机报销</th>
	<th colspan="10">其他报销</th>
	<th rowspan="2">工资报销</th>
	<th rowspan="2">合计</th>
	<th rowspan="2">&nbsp;</th>
  </tr>
  <tr>
	<th>过路费</th>
	<th>停车费</th>
	<th>加油费</th>
	<th>住宿费</th>
	<th>就餐费</th>
	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list2')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
	<th><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['typename']) ? $_smarty_tpl->tpl_vars['row']->value['typename'] : null);?>
</th>
	<?php }} ?>
  </tr>
  <tr style="background-color:#FE6E47;height:50px;">
	    <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['total_money11']) ? $_smarty_tpl->getVariable('list')->value['total_money11'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['total_money15']) ? $_smarty_tpl->getVariable('list')->value['total_money15'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['total_money12']) ? $_smarty_tpl->getVariable('list')->value['total_money12'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['total_money13']) ? $_smarty_tpl->getVariable('list')->value['total_money13'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['total_money14']) ? $_smarty_tpl->getVariable('list')->value['total_money14'] : null);?>
</td>
	    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list2')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
	    <?php $_smarty_tpl->tpl_vars['total_money2'] = new Smarty_variable($_smarty_tpl->getVariable('total_money2')->value+(isset($_smarty_tpl->tpl_vars['row']->value['total_money20']) ? $_smarty_tpl->tpl_vars['row']->value['total_money20'] : null), null, null);?>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['total_money20']) ? $_smarty_tpl->tpl_vars['row']->value['total_money20'] : null);?>
</td>
	    <?php }} ?>
	    <td>0</td>
	    <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['total_money11']) ? $_smarty_tpl->getVariable('list')->value['total_money11'] : null)+(isset($_smarty_tpl->getVariable('list')->value['total_money12']) ? $_smarty_tpl->getVariable('list')->value['total_money12'] : null)+(isset($_smarty_tpl->getVariable('list')->value['total_money13']) ? $_smarty_tpl->getVariable('list')->value['total_money13'] : null)+(isset($_smarty_tpl->getVariable('list')->value['total_money14']) ? $_smarty_tpl->getVariable('list')->value['total_money14'] : null)+(isset($_smarty_tpl->getVariable('list')->value['total_money15']) ? $_smarty_tpl->getVariable('list')->value['total_money15'] : null)+$_smarty_tpl->getVariable('total_money2')->value+(isset($_smarty_tpl->getVariable('list')->value['total_money3']) ? $_smarty_tpl->getVariable('list')->value['total_money3'] : null);?>
</td>
	    <td><a href="detail.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
" target="blank">明细</a></td>
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