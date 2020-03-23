<?php /* Smarty version Smarty-3.0.4, created on 2014-08-16 15:38:10
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/machine/carstatuslist.html" */ ?>
<?php /*%%SmartyHeaderCode:2277353ef0a6251eb76-59227191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd8a30a0905a29e6e182dee3cf598ed11c5c066f' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/machine/carstatuslist.html',
      1 => 1408174682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2277353ef0a6251eb76-59227191',
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
  <div class="page_tit">车辆使用情况一览表</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <div class="form2">
    <form action="list.php" method="post">
    <input type="hidden" name="task" value="carstatus" />
         <dl class="lineD">
            <dt>车牌号：</dt>
            <dd>
            <input id="title" type="text" value="<?php echo $_smarty_tpl->getVariable('title')->value;?>
" name="title">
            <p>支持模糊查询</p>
            </dd>
         </dl>
         <dl class="lineD">
            <dt>状态：</dt>
            <dd>
            <input type="radio" value="9" name="status" <?php if ($_smarty_tpl->getVariable('status')->value==9){?>checked<?php }?>/>全部
            <input type="radio" value="0" name="status" <?php if ($_smarty_tpl->getVariable('status')->value==0){?>checked<?php }?>/>空闲
            <input type="radio" value="1" name="status" <?php if ($_smarty_tpl->getVariable('status')->value==1){?>checked<?php }?>/>租用
            <input type="radio" value="2" name="status" <?php if ($_smarty_tpl->getVariable('status')->value==2){?>checked<?php }?>/>维修
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
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th width="100">车牌</th><th colspan="2">租用状态</th><th>使用情况</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
  <?php if ($_smarty_tpl->getVariable('status')->value==9||$_smarty_tpl->getVariable('status')->value==(isset($_smarty_tpl->tpl_vars['row']->value['car_status']) ? $_smarty_tpl->tpl_vars['row']->value['car_status'] : null)){?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
">
    <td>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
</td>
    <td width="50"><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_status']) ? $_smarty_tpl->tpl_vars['row']->value['car_status'] : null)==2){?><img src="../../../images/carb.gif" width="30" /><?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['car_status']) ? $_smarty_tpl->tpl_vars['row']->value['car_status'] : null)==1){?><img src="../../../images/carr.gif" width="30" /><?php }else{ ?><img src="../../../images/carg.gif" width="30" /><?php }?></td>
	<td width="100"><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_status']) ? $_smarty_tpl->tpl_vars['row']->value['car_status'] : null)==2){?><p class="blue">维修中</p><?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['car_status']) ? $_smarty_tpl->tpl_vars['row']->value['car_status'] : null)==1){?><p class="red">租用中</p><?php }else{ ?><p class="green">空闲</p><?php }?></td>
	<td style="text-align:left;">
	<?php  $_smarty_tpl->tpl_vars['row2'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['row']->value['paiche_list']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_list'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row2']->key => $_smarty_tpl->tpl_vars['row2']->value){
?>
	【<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['row2']->value['paiche_startDate'] : null);?>
】到【<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['paiche_endDate']) ? $_smarty_tpl->tpl_vars['row2']->value['paiche_endDate'] : null);?>
】服务于<?php if ((isset($_smarty_tpl->tpl_vars['row2']->value['paicheCom']) ? $_smarty_tpl->tpl_vars['row2']->value['paicheCom'] : null)>0){?><?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['client_name']) ? $_smarty_tpl->tpl_vars['row2']->value['client_name'] : null);?>
<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['paiche_linker']) ? $_smarty_tpl->tpl_vars['row2']->value['paiche_linker'] : null);?>
<?php }?></br>
	<?php }} ?>
	</td>
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