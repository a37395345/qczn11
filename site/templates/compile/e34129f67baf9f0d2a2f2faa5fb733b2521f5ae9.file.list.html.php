<?php /* Smarty version Smarty-3.0.4, created on 2014-05-07 21:32:46
         compiled from "D:\Phpserv\elsker\admincp\site\templates\elsker\operator/cart/list.html" */ ?>
<?php /*%%SmartyHeaderCode:15928536a35fec8dd05-77188759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e34129f67baf9f0d2a2f2faa5fb733b2521f5ae9' => 
    array (
      0 => 'D:\\Phpserv\\elsker\\admincp\\site\\templates\\elsker\\operator/cart/list.html',
      1 => 1399469350,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15928536a35fec8dd05-77188759',
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
<link href="/admincp/css/style.css" rel="stylesheet" type="text/css">
<link href="/admincp/css/box.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/admincp/js/jquery.js"></script>
<script type="text/javascript" src="/admincp/js/common.js"></script>
<script type="text/javascript" src="/admincp/js/box.js"></script>
<script type="text/javascript" src="/js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="/js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
</head>
<body>
<div class="so_main">
  <div class="page_tit">列表</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <div class="form2">
        <form action="list.php?task=search" method="post">
            
            <dl class="lineD">
            <dt>员工选择：</dt>
            <dd>
            <select name="em_id" >
                <option value="">-请选择-</option>
                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('employeeList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
                <option value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['em_id']) ? $_smarty_tpl->tpl_vars['row']->value['em_id'] : null);?>
" ><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['realname']) ? $_smarty_tpl->tpl_vars['row']->value['realname'] : null);?>
</option>
                <?php }} ?>
            </select>
            </dd>
            </dl>
            <dl class="lineD">
            <dt>产品选择：</dt>
            <dd>
            <select name="pid" >
                <option value="">-请选择-</option>
                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('productList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
                <option value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['pid']) ? $_smarty_tpl->tpl_vars['row']->value['pid'] : null);?>
" ><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
</option>
                <?php }} ?>
            </select>
            </dd>
            </dl>
                <div class="page_btm">
                <input class="btn_b" type="submit" value="确定">
                </div>            
        </form>
    </div>
</div>

  <!-------- 用户列表 -------->
  <div class="Toolbar_inbox">
  	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>

  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('itemList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  <tr>
    <th class="line_l">购物单ID号:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['flag_code']) ? $_smarty_tpl->tpl_vars['row']->value['flag_code'] : null);?>
</th>
    <th class="line_l">提交时间:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['cart_time']) ? $_smarty_tpl->tpl_vars['row']->value['cart_time'] : null);?>
</th>	
    <th class="line_l">员工ID:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['em_id']) ? $_smarty_tpl->tpl_vars['row']->value['em_id'] : null);?>
</th>    
    <th class="line_l">员工姓名:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['realname']) ? $_smarty_tpl->tpl_vars['row']->value['realname'] : null);?>
</th>
    <th class="line_l">省份:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['province_name']) ? $_smarty_tpl->tpl_vars['row']->value['province_name'] : null);?>
</th>
    <th class="line_l">城市:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['city_name']) ? $_smarty_tpl->tpl_vars['row']->value['city_name'] : null);?>
</th>
  </tr>  
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
  	<td colspan="4">
  	<table width="70%" border="0" cellspacing="0" cellpadding="0" align="left">
  	<?php  $_smarty_tpl->tpl_vars['pro'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['row']->value['productlist']) ? $_smarty_tpl->tpl_vars['row']->value['productlist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['pro']->key => $_smarty_tpl->tpl_vars['pro']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['pro']->key;
?>
  	<tr>
  		<td width="5%">&nbsp;</td>
  		<td><img src="/thumb/<?php echo (isset($_smarty_tpl->tpl_vars['pro']->value['images']) ? $_smarty_tpl->tpl_vars['pro']->value['images'] : null);?>
" width="100"></td>
        <td><?php echo (isset($_smarty_tpl->tpl_vars['pro']->value['name']) ? $_smarty_tpl->tpl_vars['pro']->value['name'] : null);?>
</td>
        <td><?php echo (isset($_smarty_tpl->tpl_vars['pro']->value['barcode']) ? $_smarty_tpl->tpl_vars['pro']->value['barcode'] : null);?>
</td>
        <td><?php echo (isset($_smarty_tpl->tpl_vars['pro']->value['qty']) ? $_smarty_tpl->tpl_vars['pro']->value['qty'] : null);?>
</td>
  	</tr>
  	<?php }} ?>
  	</table>
    </td>	    
 </tr>
 <?php }} ?>
 </table>
 </div>

  <div class="Toolbar_inbox">
	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
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

</script>
<!-->

</body>
</html>