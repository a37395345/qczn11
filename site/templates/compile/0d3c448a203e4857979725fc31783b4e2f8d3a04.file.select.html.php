<?php /* Smarty version Smarty-3.0.4, created on 2016-01-16 17:30:59
         compiled from "D:\web\site\templates\elsker\operator/sales/sms/select.html" */ ?>
<?php /*%%SmartyHeaderCode:8730569a0dd33ad248-66663169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d3c448a203e4857979725fc31783b4e2f8d3a04' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/sales/sms/select.html',
      1 => 1452936590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8730569a0dd33ad248-66663169',
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
<script type="text/javascript" src="../../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
</head>
<body>
<form action="select.php" id="form1" method="get">
<div class="so_main">
  <div class="page_tit">选择</div>
  <div class="Toolbar_inbox">
  	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
  	<input type="radio" value="1" name="itemtype" id="itemtype" <?php if ($_smarty_tpl->getVariable('itemtype')->value==1){?> checked<?php }?>/>企业客户 <input type="radio" value="2" name="itemtype" id="itemtype" <?php if ($_smarty_tpl->getVariable('itemtype')->value==2){?> checked<?php }?>/>个人
  	<a href="javascript:void(0);" class="btn_a" onclick="selok();"><span>确定</span></a>
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">
		<input type="checkbox" id="checkbox_handle" onclick="checkAll(this)" value="0">
    	<label for="checkbox"></label>
	</th>
	<?php if ($_smarty_tpl->getVariable('itemtype')->value==1){?>
	<th>客户名称</th>
    <th>联系人</th>
    <?php }else{ ?>
    <th>姓名</th>
    <?php }?>
    <th style="text-align:left;">手机号</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
  <tr overstyle='on'>
	<?php if ($_smarty_tpl->getVariable('itemtype')->value==1){?>
	<td><input type="checkbox" name="checkbox" id="checkbox<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_id']) ? $_smarty_tpl->tpl_vars['row']->value['client_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_Mphone']) ? $_smarty_tpl->tpl_vars['row']->value['client_Mphone'] : null);?>
"></td>
	<td style="text-align:left;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_Mlinker']) ? $_smarty_tpl->tpl_vars['row']->value['client_Mlinker'] : null);?>
</td>
	<td style="text-align:left;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_Mphone']) ? $_smarty_tpl->tpl_vars['row']->value['client_Mphone'] : null);?>
</td>
	<?php }else{ ?>
	<td><input type="checkbox" name="checkbox" id="checkbox<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linkerNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linkerNum'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linkerPhone']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linkerPhone'] : null);?>
"></td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linker']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linker'] : null);?>
</td>
	<td style="text-align:left;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linkerPhone']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linkerPhone'] : null);?>
</td>
	<?php }?>
</tr>
 <?php }} ?>
 </table>
 </div>

  <div class="Toolbar_inbox">
	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
	<a href="javascript:void(0);" class="btn_a" onclick="selok();"><span>确定</span></a>
  </div> 
</div>
</form>
<!-->
<script>
	//鼠标移动表格效果
	$(document).ready(function(){
	    $("input[name='itemtype']").change(function(){
			$("#form1").submit();
	    });
	    
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
	
	function checkAll(o){
		if( o.checked == true ){
			$('input[name="checkbox"]').attr('checked','true');
			$('tr[overstyle="on"]').addClass("bg_on");
		}else{
			$('input[name="checkbox"]').removeAttr('checked');
			$('tr[overstyle="on"]').removeClass("bg_on");
		}
	}
	
	//获取已选择记录的ID数组
	function getChecked() {
		var uids = new Array();
		$.each($('table input:checked'), function(i, n){
			if ($(n).val()!="0"){
				uids.push( $(n).val() );
			}
		});
		return uids;
	}
	
	function selok(){
        uid = getChecked();
        uid = uid.toString();
        if(uid == ''){
        	alert("请先选择！");
        	return false;
        }
        window.parent.window.smsphone.value=uid;
        window.parent.window.jBox.close();
    }
</script>
<!-->

</body>
</html>