<?php /* Smarty version Smarty-3.0.4, created on 2015-03-17 16:52:56
         compiled from "D:\czyhqc\site\templates\elsker\operator/sales/sms/select.html" */ ?>
<?php /*%%SmartyHeaderCode:119295507eb68e04007-60692947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '406901bb19d3ca243b3ee6234599b3181ff55e2d' => 
    array (
      0 => 'D:\\czyhqc\\site\\templates\\elsker\\operator/sales/sms/select.html',
      1 => 1409907564,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119295507eb68e04007-60692947',
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
<div class="so_main">
  <div class="page_tit">选择</div>
  <div class="Toolbar_inbox">
  	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录</div>
  	<a href="javascript:void(0);" class="btn_a" onclick="selok();"><span>确定</span></a>
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">
		<input type="checkbox" id="checkbox_handle" onclick="checkAll(this)" value="0">
    	<label for="checkbox"></label>
	</th>
	<th>客户名称</th>
    <th>联系人</th>
    <th>手机号</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_id']) ? $_smarty_tpl->tpl_vars['row']->value['client_id'] : null);?>
">
	<td><input type="checkbox" name="checkbox" id="checkbox<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_id']) ? $_smarty_tpl->tpl_vars['row']->value['client_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_Mphone']) ? $_smarty_tpl->tpl_vars['row']->value['client_Mphone'] : null);?>
"></td>
	<td style="text-align:left;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_Mlinker']) ? $_smarty_tpl->tpl_vars['row']->value['client_Mlinker'] : null);?>
</td>
	<td style="text-align:left;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_Mphone']) ? $_smarty_tpl->tpl_vars['row']->value['client_Mphone'] : null);?>
</td>
	
</tr>
 <?php }} ?>
 </table>
 </div>

  <div class="Toolbar_inbox">
	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录</div>
	<a href="javascript:void(0);" class="btn_a" onclick="selok();"><span>确定</span></a>
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