<?php /* Smarty version Smarty-3.0.4, created on 2014-09-20 21:21:13
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/machine/carrunlist.html" */ ?>
<?php /*%%SmartyHeaderCode:8873541d7f498c0558-83112414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14ee62ead309eeaa99e94ac5e171f1e38b83e596' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/machine/carrunlist.html',
      1 => 1411219268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8873541d7f498c0558-83112414',
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
<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>

</head>
<body>
<div class="so_main">
  <div class="page_tit">车辆当前状况一览表</div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
  <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->getVariable('count')->value+1, null, null);?>
  <?php if ($_smarty_tpl->getVariable('count')->value==9){?></tr><tr><?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(1, null, null);?><?php }?>
	<td width="12.5%">
	<table align="left" width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td style="border-bottom:0;"><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_status']) ? $_smarty_tpl->tpl_vars['row']->value['car_status'] : null)==2){?><img src="../../../images/carb.gif" width="30" /><?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['car_status']) ? $_smarty_tpl->tpl_vars['row']->value['car_status'] : null)==1){?><img src="../../../images/carr.gif" width="30" /><?php }else{ ?><img src="../../../images/carg.gif" width="30" /><?php }?>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
</td>
	</tr>
	<tr>
		<td style="border-bottom:0;">
		<div style="position: relative;">
		<a href="javascript:cardetail(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
);">
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_photo']) ? $_smarty_tpl->tpl_vars['row']->value['car_photo'] : null)==''){?><img src="../../../images/nopic.png" width="120" height="160" />
		<?php }else{ ?><img src="../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_photo']) ? $_smarty_tpl->tpl_vars['row']->value['car_photo'] : null);?>
" width="120" height="160" /><?php }?>
		</a>
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_status']) ? $_smarty_tpl->tpl_vars['row']->value['car_status'] : null)==1&&(isset($_smarty_tpl->tpl_vars['row']->value['drive']) ? $_smarty_tpl->tpl_vars['row']->value['drive'] : null)>0){?>
		<div style="position: absolute;top:90px;left:72px;">
		<a href="javascript:drivedetail(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive']) ? $_smarty_tpl->tpl_vars['row']->value['drive'] : null);?>
);" title="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['siji']) ? $_smarty_tpl->tpl_vars['row']->value['siji'] : null);?>
">
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['drive_photo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_photo'] : null)==''){?><img src="../../../images/nopic2.png" width="50" height="70"/>
		<?php }else{ ?><img src="../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_photo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_photo'] : null);?>
" width="50" height="70" /><?php }?></a>
	  	</div>
	  	<?php }?>
		</div></td>
	</tr>
	<tr>
		<td style="border-bottom:0;"><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_price']) ? $_smarty_tpl->tpl_vars['row']->value['car_price'] : null)==''){?>暂无租赁报价<?php }else{ ?><span id="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
" >查看租赁报价</span>
		<div class="geovindu" id="price<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
"><span><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_price']) ? $_smarty_tpl->tpl_vars['row']->value['car_price'] : null);?>
</span></div><?php }?>
		</td>
	</tr>
	</table>
	</td>
  <?php }} ?>
  </tr>
 </table>
 </div>
</div>
<!-->
<script>
var id="";
$(document).ready(function(){
	$('span').mouseover(function(){
		id=$(this).attr("id");
		if (id){
			$("#price"+id).css("display","block");
		}
    });
	$('span').mouseout(function(){
		id=$(this).attr("id");
		if (id){
			$("#price"+id).css("display","none");
		}
    });
});
function cardetail(uid){
	demo_iframe('list.php?task=detail&uid='+uid,'车辆详细资料',500,480,'login_js');
}
function drivedetail(uid){
	demo_iframe('../employee/list.php?task=detail&uid='+uid,'驾驶员详细资料',500,480,'login_js');
}
function showprice(uid){
	if ($("#price"+uid).css("display")=="none"){
		$("#price"+uid).css("display","block");
	}else{
		$("#price"+uid).css("display","none");
	}
}
</script>
<!-->

</body>
</html>