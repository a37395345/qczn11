<?php /* Smarty version Smarty-3.0.4, created on 2019-09-30 15:05:53
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/sales/contract/picture.html" */ ?>
<?php /*%%SmartyHeaderCode:12883526395d91a95193db21-07183868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfab0d3ccaa16ef66b2ec27f92ac3b85040599e5' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/sales/contract/picture.html',
      1 => 1569749251,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12883526395d91a95193db21-07183868',
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
	  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('imagelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
	  <dl id="pic_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
" style="display:none;">
	      <dd>
	        <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['atttype']) ? $_smarty_tpl->tpl_vars['rows']->value['atttype'] : null)=='picture'){?>
	         <img src="../../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['images']) ? $_smarty_tpl->tpl_vars['rows']->value['images'] : null);?>
" width="1050" height="1444" />
	        <?php }else{ ?>
	        <img src="../../../../images/filebg/<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['filetype']) ? $_smarty_tpl->tpl_vars['rows']->value['filetype'] : null);?>
.png"  />
	        <?php }?>
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