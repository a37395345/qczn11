<?php /* Smarty version Smarty-3.0.4, created on 2015-04-25 16:41:09
         compiled from "D:\czyhqc\site\templates\elsker\operator/business/batchaccountlist.html" */ ?>
<?php /*%%SmartyHeaderCode:20088553b53255bb659-37184628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '024b69813c188104afd9d0938d6a19bd7d484f6e' => 
    array (
      0 => 'D:\\czyhqc\\site\\templates\\elsker\\operator/business/batchaccountlist.html',
      1 => 1429950530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20088553b53255bb659-37184628',
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
<script type="text/javascript" src="../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
</head>
<body>
<div class="so_main">
  <div class="page_tit"><?php echo $_smarty_tpl->getVariable('title')->value;?>
</div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">
		<input type="checkbox" id="checkbox_handle" onclick="checkAll(this)" value="0">
    	<label for="checkbox"></label>
	</th>	
	<th>名称</th>
	<th>待结用车次数</th>
	<th width="60%">待结用车</th>
	<th class="line_l">操作</th>
  </tr>
  
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('busiList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
">
    	<td><input type="checkbox" name="checkbox" id="checkbox<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
"></td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['nCount']) ? $_smarty_tpl->tpl_vars['row']->value['nCount'] : null);?>
</td>	    
	    <td style="text-align:left;">
	    <?php  $_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['row']->value['paichelist']) ? $_smarty_tpl->tpl_vars['row']->value['paichelist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row1']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['row1']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->tpl_vars['row1']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row1']->key => $_smarty_tpl->tpl_vars['row1']->value){
 $_smarty_tpl->tpl_vars['row1']->iteration++;
 $_smarty_tpl->tpl_vars['row1']->last = $_smarty_tpl->tpl_vars['row1']->iteration === $_smarty_tpl->tpl_vars['row1']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['last'] = $_smarty_tpl->tpl_vars['row1']->last;
?>
	    	<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
.合同号:<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['row1']->value['paiche_contractNum'] : null);?>
&nbsp;&nbsp;&nbsp;&nbsp;用车时间:&nbsp;&nbsp;从<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['row1']->value['paiche_startDate'] : null);?>
&nbsp;到&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['paiche_endDate']) ? $_smarty_tpl->tpl_vars['row1']->value['paiche_endDate'] : null);?>

	    	&nbsp;&nbsp;&nbsp;&nbsp;司机:<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['siji']) ? $_smarty_tpl->tpl_vars['row1']->value['siji'] : null);?>
&nbsp;&nbsp;&nbsp;&nbsp;车辆:<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['car_num']) ? $_smarty_tpl->tpl_vars['row1']->value['car_num'] : null);?>

	    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['last']){?><?php }else{ ?><hr /><?php }?>
	    <?php }} ?></td>	    
	    <td><a href="list.php?op=batchaccount&company=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paicheCom']) ? $_smarty_tpl->tpl_vars['row']->value['paicheCom'] : null);?>
&paiche_linker=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null);?>
">结账</a>	</td>
 </tr>
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
</script>
<!-->

</body>
</html>