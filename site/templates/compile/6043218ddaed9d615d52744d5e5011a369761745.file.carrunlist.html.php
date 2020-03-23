<?php /* Smarty version Smarty-3.0.4, created on 2015-08-22 16:39:20
         compiled from "D:\czyhqc\site\templates\elsker\operator/machine/carrunlist.html" */ ?>
<?php /*%%SmartyHeaderCode:1206455d834e368de98-74058719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6043218ddaed9d615d52744d5e5011a369761745' => 
    array (
      0 => 'D:\\czyhqc\\site\\templates\\elsker\\operator/machine/carrunlist.html',
      1 => 1440232073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1206455d834e368de98-74058719',
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
  <div class="page_tit">车辆当前状况一览表   </div>
  <div id="searchTopic_div" style="margin-left:70px;">
    <form action="list.php?task=carrun" method="post" id="SearchForm" name="SearchForm">
  	按车牌检索：<input type="text" name="car_num" size="16"  /><input class="btn_b" type="submit" value="确定">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	状态：<input type="radio" value="9" name="status" <?php if ($_smarty_tpl->getVariable('status')->value==9){?>checked<?php }?>/>全部
            <input type="radio" value="0" name="status" <?php if ($_smarty_tpl->getVariable('status')->value==0){?>checked<?php }?>/>空闲<img src="../../../images/carg.gif" width="30" />
            <input type="radio" value="1" name="status" <?php if ($_smarty_tpl->getVariable('status')->value==1){?>checked<?php }?>/>租用<img src="../../../images/carr.gif" width="30" />
            <input type="radio" value="2" name="status" <?php if ($_smarty_tpl->getVariable('status')->value==2){?>checked<?php }?>/>维修<img src="../../../images/carb.gif" width="30" />
  	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;共计：<?php echo $_smarty_tpl->getVariable('total')->value;?>
辆
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
  <?php if ($_smarty_tpl->getVariable('count')->value==6){?></tr><tr><?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(1, null, null);?><?php }?>
	<td width="20%">
	<table align="left" width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td style="border-bottom:0;"><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_status_code']) ? $_smarty_tpl->tpl_vars['row']->value['car_status_code'] : null)==2){?><img src="../../../images/carb.gif" width="30" /><?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['car_status_code']) ? $_smarty_tpl->tpl_vars['row']->value['car_status_code'] : null)==1){?><img src="../../../images/carr.gif" width="30" /><?php }else{ ?><img src="../../../images/carg.gif" width="30" /><?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_status_code']) ? $_smarty_tpl->tpl_vars['row']->value['car_status_code'] : null)==1){?><a href="../business/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="blank">苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
</a><?php }else{ ?>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
<?php }?><?php $_tmp1=(isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null);?><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_status_code']) ? $_smarty_tpl->tpl_vars['row']->value['car_status_code'] : null)!=2&&(isset($_smarty_tpl->tpl_vars['row']->value['car_status_code']) ? $_smarty_tpl->tpl_vars['row']->value['car_status_code'] : null)!=1&&!empty($_tmp1)){?>(停放:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null);?>
)<?php }?></td>
	</tr>
	<tr>
		<td style="border-bottom:0;">
		<div style="position: relative;">
		<a href="javascript:cardetail(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
);">
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_photo']) ? $_smarty_tpl->tpl_vars['row']->value['car_photo'] : null)==''){?><img src="../../../images/nopic.png" width="200" height="150" />
		<?php }else{ ?><img src="../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_photo']) ? $_smarty_tpl->tpl_vars['row']->value['car_photo'] : null);?>
" width="200" height="150" /><?php }?>
		</a>
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_status_code']) ? $_smarty_tpl->tpl_vars['row']->value['car_status_code'] : null)==1&&(isset($_smarty_tpl->tpl_vars['row']->value['drive']) ? $_smarty_tpl->tpl_vars['row']->value['drive'] : null)>0){?>
		<div style="position: absolute;top:80px;left:152px;">
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
		<td style="border-bottom:0;">
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_price']) ? $_smarty_tpl->tpl_vars['row']->value['car_price'] : null)==''){?>暂无租赁报价<?php }else{ ?><span id="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
" >查看租赁报价</span>
		<div class="geovindu" id="price<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
"><span><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_price']) ? $_smarty_tpl->tpl_vars['row']->value['car_price'] : null);?>
</span></div><?php }?>
		&nbsp;&nbsp;
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_list']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_list'] : null)==''){?>暂无租车记录<?php }else{ ?><span ><a href="carrundetail.php?car_id=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
" target="blank">查看租车记录</a></span><?php }?>
		
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
		pid=$(this).attr("pid");
		if (id){
			$("#price"+id).css("display","block");
		}
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
		id=$(this).attr("id");
		pid=$(this).attr("pid");
		if (id){
			$("#price"+id).css("display","none");
		}
		if (pid){
			$("#paiche"+pid).css("display","none");
		}
    });
	$("input[name=status]").click(function(){
	    document.SearchForm.action = 'list.php?task=carrun&status=' + $("input[name=status]:checked").val();
        document.SearchForm.submit();
	});
});
function cardetail(uid){
	demo_iframe('list.php?task=detail&uid='+uid,'车辆详细资料',1000,480,'login_js');
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