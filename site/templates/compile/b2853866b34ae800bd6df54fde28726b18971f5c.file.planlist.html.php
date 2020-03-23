<?php /* Smarty version Smarty-3.0.4, created on 2014-08-18 11:10:30
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/machine/planlist.html" */ ?>
<?php /*%%SmartyHeaderCode:1317553f16ea60e5e75-86200100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2853866b34ae800bd6df54fde28726b18971f5c' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/machine/planlist.html',
      1 => 1408331424,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1317553f16ea60e5e75-86200100',
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
<script type="text/javascript" src="../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
</head>
<body>
<div class="so_main">
  <div class="page_tit">近一个月车辆调度状况</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <div class="form2">
    <form action="list.php" method="post">
    <input type="hidden" name="task" value="planlist" />
         <dl class="lineD">
            <dt>车牌号：</dt>
            <dd>
            <input id="title" type="text" value="<?php echo $_smarty_tpl->getVariable('title')->value;?>
" name="title">
            <p>支持模糊查询</p>
            </dd>
         </dl>
         <div class="page_btm">
            	<input class="btn_b" type="submit" value="确定">
         </div>
    </form>
    </div>
  </div>
  <div class="Toolbar_inbox">
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>
  </div>
  <div class="list">
  <table width="1088" border="1" cellspacing="0" cellpadding="0">
  <tr>
	<th width="100">车牌</th>
	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('daylist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
	<th width="28"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['day']) ? $_smarty_tpl->tpl_vars['row']->value['day'] : null);?>
</th>
	<?php }} ?>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row1']->key => $_smarty_tpl->tpl_vars['row1']->value){
?>
  <?php if ($_smarty_tpl->getVariable('status')->value==9||$_smarty_tpl->getVariable('status')->value==(isset($_smarty_tpl->getVariable('row')->value['car_status']) ? $_smarty_tpl->getVariable('row')->value['car_status'] : null)){?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->getVariable('row')->value['car_id']) ? $_smarty_tpl->getVariable('row')->value['car_id'] : null);?>
">
    <td>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['car_num']) ? $_smarty_tpl->tpl_vars['row1']->value['car_num'] : null);?>
</td>
    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('daylist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
    <?php if (strstr((isset($_smarty_tpl->tpl_vars['row1']->value['datelist']) ? $_smarty_tpl->tpl_vars['row1']->value['datelist'] : null),(isset($_smarty_tpl->tpl_vars['row']->value['day']) ? $_smarty_tpl->tpl_vars['row']->value['day'] : null))){?>
    <td width="28" style="padding: 6px 0;bodder-right:1px solid #E3E6EB;"><span style="line-height:5px;background-color:#0047FF;width:100%;height:5px;display:inline-block;">&nbsp;</span></td>
    <?php }else{ ?>
    <td>&nbsp;</td>
    <?php }?>
    <?php }} ?>
 </tr>
 <?php }?>
 <?php }} ?>
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