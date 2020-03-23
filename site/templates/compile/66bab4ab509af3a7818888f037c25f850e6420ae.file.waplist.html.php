<?php /* Smarty version Smarty-3.0.4, created on 2015-12-11 14:31:25
         compiled from "D:\web\site\templates\elsker\operator/machine/waplist.html" */ ?>
<?php /*%%SmartyHeaderCode:6152566a6dbdb4a4c1-28095047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66bab4ab509af3a7818888f037c25f850e6420ae' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/machine/waplist.html',
      1 => 1447233608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6152566a6dbdb4a4c1-28095047',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>运河租车</title>
<link href="css/menu/menu.css" type="text/css" rel="stylesheet" />
<link href="css/menu/jquery.mobile-1.4.0.min.css" type="text/css" rel="stylesheet" />

<script language="javascript" src="js/jquery-2.1.4.min.js"></script>
<script language="javascript">
$(document).ready(function(){
	$("input").attr('data-role','none'); 
});
</script>
<script language="javascript" src="js/jquery.mobile-1.4.0.min.js"></script>
<script language="javascript" src="js/wap.js"></script>
</head>
<body>
<input type="hidden" name="nowpage" id="nowpage" value="<?php echo $_smarty_tpl->getVariable('nowpage')->value;?>
"/>
	<input type="hidden" name="totalpage" id="totalpage" value="<?php echo $_smarty_tpl->getVariable('totalpage')->value;?>
"/>
<div id="" class="main">
	<div id="showtype" class="item" style="display:block;">
		车型：<input type="checkbox" name="cartype" value="小轿车" <?php if (strpos($_smarty_tpl->getVariable('cartype')->value,"小轿车")!==false){?>checked<?php }?> />小轿车&nbsp;
		<input type="checkbox" name="cartype" value="商务车" <?php if (strpos($_smarty_tpl->getVariable('cartype')->value,"商务车")!==false){?>checked<?php }?>/>商务车&nbsp;
		<input type="checkbox" name="cartype" value="越野车" <?php if (strpos($_smarty_tpl->getVariable('cartype')->value,"越野车")!==false){?>checked<?php }?>/>越野车&nbsp;
		<input type="checkbox" name="cartype" value="大客车" <?php if (strpos($_smarty_tpl->getVariable('cartype')->value,"大客车")!==false){?>checked<?php }?>/>大客车<br/>
		价位：<input type="radio" name="carprice" value="0" <?php $_tmp1=$_smarty_tpl->getVariable('carprice')->value;?><?php if (empty($_tmp1)){?>checked<?php }?>/>不限&nbsp;
		<input type="radio" name="carprice" value="1" <?php if ($_smarty_tpl->getVariable('carprice')->value=="1"){?>checked<?php }?>/>200元以内&nbsp;
		<input type="radio" name="carprice" value="2" <?php if ($_smarty_tpl->getVariable('carprice')->value=="2"){?>checked<?php }?>/>200元~400元&nbsp;
		<input type="radio" name="carprice" value="3" <?php if ($_smarty_tpl->getVariable('carprice')->value=="3"){?>checked<?php }?>/>400元~800元&nbsp;
		<input type="radio" name="carprice" value="4" <?php if ($_smarty_tpl->getVariable('carprice')->value=="4"){?>checked<?php }?>/>800元以上&nbsp;
		<input type="button" class="btnon" name="btnSearch" id="btnSearch" value="筛选" />
	</div>
	
	<div id="list" class="list">
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
		<li >
			<div class="thumb" id="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
">
				<div class="showprice"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_price']) ? $_smarty_tpl->tpl_vars['row']->value['car_price'] : null);?>
</div>
				<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_photo']) ? $_smarty_tpl->tpl_vars['row']->value['car_photo'] : null)==''){?><img src="images/nopic.png" width="200" height="150" />
				<?php }else{ ?><img src="thumb/<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_photo']) ? $_smarty_tpl->tpl_vars['row']->value['car_photo'] : null);?>
" width="310" height="233" /><?php }?>
			</div>
			<p >苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
</p>
		</li>
		<?php }} ?>
	</div>
	<div id="list_2" class="list_2" style="display:none;">		
		<li id="showmain">
			<div class="thumb_1"><img src="images/left.png" id="last2" /> </div>
			<div class="thumb_2"></div>
			<div class="thumb_3">
				<input type="hidden" id="sProductCode" value="" />
				<input type="hidden" id="sProductID" value="" />
				<input type="hidden" id="sProductName" value="" />
				<input type="hidden" id="sProductPrice" value="" />
				<ul>
				
				</ul>
			</div>
			<div class="thumb_1"><img src="images/right.png" id="next2"/> </div>
		</li>
	</div>
	<div id="list_3" class="list_3" style="display:none;">		
		<div class="thumb_4">
			<section class="search">		
				<input type="hidden" id="txtTableCode" value="" />
				<span class="searchtitle_2"></span>	
			</section>
			<ul class="cont-list">
			
			</ul>
			<section class="search">		
				<span class="searchtitle_3"><input type="button" id="btnContinue" value="继续" class="btn_2" /> </span>	
			</section>
		</div>
		
	</div>
	<div class="page">
		<div class="plast"><a href="javascript:void(0);" id="last">上一页</a></div>
		<div class="pshow"><span>运河租车欢迎您</span></div>
		<div class="pnext"><a href="javascript:void(0);" id="next">下一页</a></div>
	</div>
</div>
</body>
</html>