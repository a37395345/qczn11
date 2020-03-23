<?php /* Smarty version Smarty-3.0.4, created on 2019-11-21 13:56:05
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/changqi_zijia/picture.html" */ ?>
<?php /*%%SmartyHeaderCode:77505dd626f5225236-44331145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03764889e28e06d5dcb11869ef65ed044e78afd2' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/changqi_zijia/picture.html',
      1 => 1574315761,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77505dd626f5225236-44331145',
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
</head>
<body style="overflow-y:scroll; overflow-x:scroll;">
<div >
  <div >
  	<div class="page_btm">
      <input type="hidden" id="total" value="<?php echo $_smarty_tpl->getVariable('total')->value;?>
" /><input type="hidden" id="nowserial" value="<?php echo $_smarty_tpl->getVariable('nowserial')->value;?>
" />
      <input type="button" id="last" class="btn_b" value="上一张" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" id="next" class="btn_b" value="下一张" />
    </div>
    	<?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable(0, null, null);?>  
	  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('imagelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
?>
	  <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->getVariable('index')->value+1, null, null);?> 
	  <dl id="pic_<?php echo $_smarty_tpl->getVariable('index')->value;?>
" style="display:none;">
	      <dd>
	         <img src="../../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['name']) ? $_smarty_tpl->tpl_vars['rows']->value['name'] : null);?>
" width="1050" height="1444" />
	      </dd>
	  </dl>
      <?php }} ?>
      
  </div>
</div>
<!-->
<script>
var total=parseInt($("#total").val());
var nowserial=parseInt($("#nowserial").val());
init();
	$(document).ready(function(){
	    $('#last').live("click",function(){
			$("#pic_"+nowserial).css("display","none");
			nowserial=nowserial-1;
			if (nowserial<1){
			    nowserial=1;
			}
			init();
		});
	    $('#next').live("click",function(){
			$("#pic_"+nowserial).css("display","none");
			nowserial=nowserial+1;
			if (nowserial>total){
			    nowserial=total;
			}
			init();
		});
	});
function init(){

    if (nowserial<=1){
		$("#last").hide();
    }else{
		$("#last").show();
    }
    if (nowserial>=total){
		$("#next").hide();
	}else{
	    $("#next").show();
	}
    $("#pic_"+nowserial).css("display","block");
}
</script>
<!-->
</body>
</html>