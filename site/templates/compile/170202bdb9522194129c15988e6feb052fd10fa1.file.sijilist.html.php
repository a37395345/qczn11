<?php /* Smarty version Smarty-3.0.4, created on 2019-10-24 17:35:47
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/employee/sijilist.html" */ ?>
<?php /*%%SmartyHeaderCode:237875db17073add434-97548480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '170202bdb9522194129c15988e6feb052fd10fa1' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/employee/sijilist.html',
      1 => 1571707175,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237875db17073add434-97548480',
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
<script src="../../../js/jquery.lazyload.js" type=text/javascript></script>



</head>
<body>
<div class="so_main">
  <div class="page_tit">司机当前状况一览表</div>
  <div id="searchTopic_div" style="margin-left:100px;">
    <form action="list.php?task=sijilist" method="post" id="SearchForm" name="SearchForm">
  	按姓名检索：<input type="text" name="name" size="16"  /><input class="btn_b" type="submit" value="确定">
  	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	状态：<input type="radio" value="9" name="status" <?php if ($_smarty_tpl->getVariable('status')->value==9){?>checked<?php }?>/>全部
            <input type="radio" value="0" name="status" <?php if ($_smarty_tpl->getVariable('status')->value==0){?>checked<?php }?>/>空闲
            <input type="radio" value="1" name="status" <?php if ($_smarty_tpl->getVariable('status')->value==1){?>checked<?php }?>/>出车
            <input type="radio" value="-1" name="status" <?php if ($_smarty_tpl->getVariable('status')->value==-1){?>checked<?php }?>/>离职
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;共计：<?php echo $_smarty_tpl->getVariable('total')->value;?>
人
  	</form>
  	
  </div>
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
		<td style="border-bottom:0;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
(&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['title']) ? $_smarty_tpl->tpl_vars['row']->value['title'] : null);?>
<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_driverlicense']) ? $_smarty_tpl->tpl_vars['row']->value['emp_driverlicense'] : null);?>
)<hr/ style="width: 40%">
			<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['emp_status']) ? $_smarty_tpl->tpl_vars['row']->value['emp_status'] : null)==1){?><a href="../business/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="blank"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
</a><?php }else{ ?>&nbsp;<?php }?></td>
	</tr>
	<tr>
		<td style="border-bottom:0;text-align:left;">
		<div style="position: relative;">
		<a href="javascript:drivedetail(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_id']) ? $_smarty_tpl->tpl_vars['row']->value['emp_id'] : null);?>
);">
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['emp_photo']) ? $_smarty_tpl->tpl_vars['row']->value['emp_photo'] : null)==''){?><img src="../../../images/wait3.gif" data-original="../../../images/nopic2.png" width="120" height="160" />
		<?php }else{ ?><img src="../../../images/wait3.gif" data-original="../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_photo']) ? $_smarty_tpl->tpl_vars['row']->value['emp_photo'] : null);?>
" width="120" height="160" /><?php }?>
		</a>
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['emp_status']) ? $_smarty_tpl->tpl_vars['row']->value['emp_status'] : null)==1){?>
		<div style="position: absolute;top:90px;left:72px;">
		<a href="javascript:cardetail(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
);" title="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
">
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_photo']) ? $_smarty_tpl->tpl_vars['row']->value['car_photo'] : null)==''){?><img src="../../../images/wait1.gif" data-original="../../../images/nopic.png" width="50" height="70"/>
		<?php }else{ ?><img src="../../../images/wait1.gif" data-original="../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_photo']) ? $_smarty_tpl->tpl_vars['row']->value['car_photo'] : null);?>
" width="50" height="70" /><?php }?></a>
	  	</div>
	  	<?php }?>
		</div></td>
	</tr>
	<tr>
		<td style="border-bottom:0;">
		<span ><a href="../machine/carrundetail.php?emp_id=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_id']) ? $_smarty_tpl->tpl_vars['row']->value['emp_id'] : null);?>
" target="blank">查看出车记录</a></span>
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
$(document).ready(function(){
    $("img").lazyload({ 
        effect: "fadeIn"
  	});
    $('span').mouseover(function(){
		pid=$(this).attr("pid");
		if (pid){
		    var self = $(this); //当前对象  
			$("#paiche"+pid).css("display","block");
			var p = self.position(); //获取这个元素的left和top  
		        var x = p.left + self.width();//获取这个浮动层的left
		        var y = p.top + self.height();//获取这个浮动层的bottom
		        var docWidth = $(document).width();//获取网页的宽
		        var docHeight= $(document).height();//获取网页的高
		        if (x > docWidth - $("#paiche"+pid).width() - 20) {  
		            x = p.left - $("#paiche"+pid).width()+80;  
		        }else{
		            x = x - 80;
		        }
		        $("#paiche"+pid).css("left", x);
		        if (y > docHeight - $("#paiche"+pid).height()-20){
		            y = p.top - $("#paiche"+pid).height();
		        }
		        $("#paiche"+pid).css("top", y);
		}
	});
	$('.geovindu2').mouseover(function(){
	    $(this).css("display","block");
	});
	$('.geovindu2').mouseout(function(){
	    $(this).css("display","none");
	});
	$('span').mouseout(function(){
		pid=$(this).attr("pid");
		if (pid){
			$("#paiche"+pid).css("display","none");
		}
	});
    $("input[name=status]").click(function(){
	    document.SearchForm.action = 'list.php?task=sijilist&status=' + $("input[name=status]:checked").val();
    	document.SearchForm.submit();
	});
});
function cardetail(uid){
	demo_iframe('../machine/list.php?task=detail&uid='+uid,'车辆详细资料',500,480,'login_js');
}
function drivedetail(uid){
	demo_iframe('list.php?task=detail&uid='+uid,'驾驶员详细资料',1000,480,'login_js');
}

</script>
<!-->

</body>
</html>