<?php /* Smarty version Smarty-3.0.4, created on 2015-10-10 09:26:04
         compiled from "D:\czyhqc\site\templates\elsker\operator/finance/monthaccount/first.html" */ ?>
<?php /*%%SmartyHeaderCode:317655618692c647c22-86782380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d7d2f1cdca764535a165e63e9c4570345918d4c' => 
    array (
      0 => 'D:\\czyhqc\\site\\templates\\elsker\\operator/finance/monthaccount/first.html',
      1 => 1444440293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '317655618692c647c22-86782380',
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
<script type="text/javascript" src="../../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
</head>
<body>
<div class="so_main">
  <div class="page_tit">单位用车月结结账</div>
    <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <div class="form2">
    <form action="first.php" method="get">
    	<dl class="lineD">
	    <dt>单位：</dt>
	    <dd><input type="text" name="key" size="10" /></dd>
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
    <th style="width:30px;">
		<input type="checkbox" id="checkbox_handle" onclick="checkAll(this)" value="0">
    	<label for="checkbox"></label>
	</th>	
	<th>名称</th>
	<th>待结账数</th>
	<th>未结金额</th>
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
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['LeftSum']) ? $_smarty_tpl->tpl_vars['row']->value['LeftSum'] : null);?>
</td>
	    <td><a href="list.php?company=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month_clientid']) ? $_smarty_tpl->tpl_vars['row']->value['month_clientid'] : null);?>
">进入</a>	</td>
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