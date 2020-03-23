<?php /* Smarty version Smarty-3.0.4, created on 2014-09-12 14:17:30
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/report/accountdetail.html" */ ?>
<?php /*%%SmartyHeaderCode:3153954128ffa523fc0-52252143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62e6ef75dc0efe5a88b7eb61d1fc65c190853fab' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/report/accountdetail.html',
      1 => 1410502644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3153954128ffa523fc0-52252143',
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
  <div class="page_tit"><?php echo $_smarty_tpl->getVariable('PAGETITLE')->value;?>
</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <div class="form2">
        <form action="detail.php" method="get">
            <input type="hidden" name="bankid" value="<?php echo $_smarty_tpl->getVariable('bankid')->value;?>
" />
            <input type="hidden" name="op_flag" value="<?php echo $_smarty_tpl->getVariable('op_flag')->value;?>
" />
            <?php if ($_smarty_tpl->getVariable('op_flag')->value=='detail'){?>
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
            <?php }?>
            <?php if ($_smarty_tpl->getVariable('op_flag')->value=='daily'){?>
            <dl class="lineD">
	            <dt>记账日期：</dt>
	            <dd><input type="text" name="date" size="16" value="<?php echo $_smarty_tpl->getVariable('date')->value;?>
" onClick="calendar.show(this);" readonly="readonly" /></dd>
            </dl>
            <?php }?>
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
    <th style="width:30px;">序号</th>
    <th>发生日期</th>
    <th>往来单位</th>
	<th>名称</th>
	<?php if ($_smarty_tpl->getVariable('op_flag')->value=='detail'){?>
	<th>发生金额</th>
	<?php }?>
	<?php if ($_smarty_tpl->getVariable('op_flag')->value=='daily'){?>
	<th>增加金额</th>
	<th>减少金额</th>
	<th>余额</th>
	<?php }?>
	<th>关联业务</th>
	<th>业务类型</th>
  </tr>
  <?php if ($_smarty_tpl->getVariable('list')->value&&$_smarty_tpl->getVariable('op_flag')->value=='daily'){?>
	  <tr overstyle='on' id="0">
	  	<td>0</td>
	  	<td colspan="4" style="text-align:left;">此前余额</td>
	  	<td><?php echo $_smarty_tpl->getVariable('beforetotal')->value;?>
<?php $_smarty_tpl->tpl_vars["nowtotal"] = new Smarty_variable($_smarty_tpl->getVariable('beforetotal')->value, null, null);?></td>
	  	<td colspan="2">&nbsp;</td>
	  </tr>
  <?php }?>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
    	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['add_time']) ? $_smarty_tpl->tpl_vars['row']->value['add_time'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
</td>
		<?php if ($_smarty_tpl->getVariable('op_flag')->value=='detail'){?>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
</td>
		<?php }?>
		<?php if ($_smarty_tpl->getVariable('op_flag')->value=='daily'){?>
		<?php $_smarty_tpl->tpl_vars['nowtotal'] = new Smarty_variable($_smarty_tpl->getVariable('nowtotal')->value+(isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null), null, null);?>
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null)>0){?>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
</td>
		<td>&nbsp;</td>
		<?php }else{ ?>
		<td>&nbsp;</td>
		<td><?php echo -1*(isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
</td>
		<?php }?>
		<td><?php echo $_smarty_tpl->getVariable('nowtotal')->value;?>
</td>
		<?php }?>
		<td style="text-align:left;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_contractNum'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_name']) ? $_smarty_tpl->tpl_vars['row']->value['item_name'] : null);?>
</td>
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

	
    //导出Excel
    function excel(){
    	
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