<?php /* Smarty version Smarty-3.0.4, created on 2019-09-29 17:31:32
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/report/accountlist.html" */ ?>
<?php /*%%SmartyHeaderCode:14790393755d9079f4e426c6-51799473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '822a0cc0e37d420c2cf03d6da03687430c868d97' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/report/accountlist.html',
      1 => 1569749238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14790393755d9079f4e426c6-51799473',
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
<meta http-equiv="refresh" content="600">
<title>管理后台</title>
<link href="../../../../css/style.css" rel="stylesheet" type="text/css">
<link href="../../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<script type="text/javascript" src="../../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<script type="text/javascript" src="../../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
</head>
<body>

<div class="so_main">
  <div class="page_tit">资金账户余额</div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">
		<input type="checkbox" id="checkbox_handle" onclick="checkAll(this)" value="0">
    	<label for="checkbox"></label>
	</th>
	<th>序号</th>
	<th>名称</th>
	<th>账户号</th>
	<th>当前余额</th>
	<th class="line_l">操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <?php $_smarty_tpl->tpl_vars['all_money'] = new Smarty_variable($_smarty_tpl->getVariable('all_money')->value+(isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null), null, null);?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_id']) ? $_smarty_tpl->tpl_vars['row']->value['bank_id'] : null);?>
">
    	<td><input type="checkbox" name="checkbox" id="checkbox<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_id']) ? $_smarty_tpl->tpl_vars['row']->value['bank_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_id']) ? $_smarty_tpl->tpl_vars['row']->value['bank_id'] : null);?>
" onclick="checkon(this)"><input type="hidden" id="money<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_id']) ? $_smarty_tpl->tpl_vars['row']->value['bank_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
"></td>
	  	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_name']) ? $_smarty_tpl->tpl_vars['row']->value['bank_name'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_no']) ? $_smarty_tpl->tpl_vars['row']->value['bank_no'] : null);?>
</td>
		<td style="text-align:right;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
</td>
	    <td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null)==0){?><a href="javascript:showdetail(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bankid']) ? $_smarty_tpl->tpl_vars['row']->value['bankid'] : null);?>
,'detail');">明细帐</a>&nbsp;&nbsp;<a href="javascript:showdetail(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bankid']) ? $_smarty_tpl->tpl_vars['row']->value['bankid'] : null);?>
,'daily');">日记帐</a>
	    <?php }else{ ?><a href="javascript:showdetail(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_id']) ? $_smarty_tpl->tpl_vars['row']->value['bank_id'] : null);?>
,'detail');">明细帐</a>&nbsp;&nbsp;<a href="javascript:showdetail(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_id']) ? $_smarty_tpl->tpl_vars['row']->value['bank_id'] : null);?>
,'daily');">日记帐</a><?php }?>
		</td>
 </tr>
 <?php }} ?>
 <tr style="background-color:#FE6E47;">
    <td colspan="4" style="text-align:left;">合计	</td>
	<td style="text-align:right;"><span id="all_money"><?php echo $_smarty_tpl->getVariable('all_money')->value;?>
</span></td>
	<td ></td>
  </tr>
 </table>
 </div>

  <div class="Toolbar_inbox">
	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
	&nbsp;
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
		getChecked();
	}
	
	function checkAll(o){
		if( o.checked == true ){
			$('input[name="checkbox"]').attr('checked','true');
			$('tr[overstyle="on"]').addClass("bg_on");
		}else{
			$('input[name="checkbox"]').removeAttr('checked');
			$('tr[overstyle="on"]').removeClass("bg_on");
		}
		getChecked();
	}
	
	function getChecked() {
		var all_money = 0;
		$.each($('table input:checked'), function(i, n){
			if ($(n).val()!=0)
			all_money+=xround(parseFloat($("#money"+$(n).val()).val()),2);
		});
		//alert(all_money);
		$("#all_money").html(xround(all_money,2));
	}
	
	function showdetail(bid,op_flag){
		demo_iframe('detail.php?bankid='+bid+'&op_flag='+op_flag,'资金账户明细',1020,460,'login_js');
	}
</script>
<!-->

</body>
</html>