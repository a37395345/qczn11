<?php /* Smarty version Smarty-3.0.4, created on 2014-10-11 14:43:28
         compiled from "D:\Phpserv\qczn\site\templates\elsker\index.html" */ ?>
<?php /*%%SmartyHeaderCode:297615438d1909f3a25-27016012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb70c8d5f16752858e0e481cbc12e1d453a6a730' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\index.html',
      1 => 1413009800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '297615438d1909f3a25-27016012',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/style.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>车辆租赁管理系统</title>
<script type="text/javascript" src="js/jquery.js"></script>
<!--  -->
<script type="text/javascript"> 
/* 按下F5时仅刷新iframe页面 */
function inactiveF5(e) {
	return ;
	e=window.event||e;
	var key = e.keyCode;
	if (key == 116){
		parent.MainIframe.location.reload();
		if(document.all) {
			e.keyCode = 0;
			e.returnValue = false;
		}else {
			e.cancelBubble = true;
			e.preventDefault();
		}
	}
}
 
function nof5() {
    return ;
	if(window.frames&&window.frames[0]) {
		window.frames[0].focus();
		for (var i_tem = 0; i_tem < window.frames.length; i_tem++) {
			if (document.all) {
				window.frames[i_tem].document.onkeydown = new Function("var e=window.frames[" + i_tem + "].event; if(e.keyCode==116){parent.MainIframe.location.reload();e.keyCode = 0;e.returnValue = false;};");
			}else {
				window.frames[i_tem].onkeypress = new Function("e", "if(e.keyCode==116){parent.MainIframe.location.reload();e.cancelBubble = true;e.preventDefault();}");
			}
		} //END for()
	} //END if()
}
 
function refresh() {
	parent.MainIframe.location.reload();
}
 
document.onkeydown=inactiveF5;
</script>
<!--  -->
</head>
 
<body scroll="no" style="margin:0; padding:0;" onLoad="nof5()">
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3">
		<div class="header"><!-- 头部 begin -->
		    <p>您好,<?php echo $_smarty_tpl->getVariable('truename')->value;?>
&nbsp; | <a href="javascript:void(0);" onClick="refresh();">刷新</a> | <a href="site/operator/navi/logout.php">退出</a>
		    	<span id="TopTime">2014年07月19日12时18分15秒</span></p>
		    <div class="logo"></div>
		    <div class="nav_sub">
		    	<a href="javascript:refresh();"><img src="css/logo.jpg" width="204" height="66" border="0" /></a>
		    </div>
		    <div class="main_nav">
		    	<ul class="infonav">
		    	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('naviList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
		    	<li><a id="channel_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['action']) ? $_smarty_tpl->tpl_vars['row']->value['action'] : null);?>
" href="javascript:void(0)" onclick="switchChannel('<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['action']) ? $_smarty_tpl->tpl_vars['row']->value['action'] : null);?>
');" hidefocus="true" style="outline:none;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
</a></li>
		    	<?php }} ?>
		    	</ul>
		    </div>
		</div>
		
	</td>
  </tr>
  <tr>
  	<td  height="100%" valign="top" id="FrameTitle" background="css/left_bg.gif">
  		<div class="LeftMenu">
		  	<!-- 第一级菜单，即大频道 -->
		  	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('naviList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  			<ul class="MenuList" id="root_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['action']) ? $_smarty_tpl->tpl_vars['row']->value['action'] : null);?>
" style="display:none;">
		      	<!-- 第二级菜单 -->
		      	<li class="treemenu">
			          <a id="root_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['admin_menu_id']) ? $_smarty_tpl->tpl_vars['row']->value['admin_menu_id'] : null);?>
" class="actuator" href="javascript:void(0)" onClick="switch_root_menu('<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['admin_menu_id']) ? $_smarty_tpl->tpl_vars['row']->value['admin_menu_id'] : null);?>
');" hidefocus="true" style="outline:none;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
</a>
			          <ul id="tree_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['admin_menu_id']) ? $_smarty_tpl->tpl_vars['row']->value['admin_menu_id'] : null);?>
" class="submenu">
			            <!-- 第三级菜单 -->
			            <?php  $_smarty_tpl->tpl_vars['navi'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['row']->value['list']) ? $_smarty_tpl->tpl_vars['row']->value['list'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['navi']->key => $_smarty_tpl->tpl_vars['navi']->value){
 $_smarty_tpl->tpl_vars['r']->value = $_smarty_tpl->tpl_vars['navi']->key;
?>
			          	<li><a id="menu_<?php echo (isset($_smarty_tpl->tpl_vars['navi']->value['admin_menu_id']) ? $_smarty_tpl->tpl_vars['navi']->value['admin_menu_id'] : null);?>
" href="javascript:void(0)" onClick="switch_sub_menu('<?php echo (isset($_smarty_tpl->tpl_vars['navi']->value['admin_menu_id']) ? $_smarty_tpl->tpl_vars['navi']->value['admin_menu_id'] : null);?>
', '<?php echo (isset($_smarty_tpl->tpl_vars['navi']->value['script']) ? $_smarty_tpl->tpl_vars['navi']->value['script'] : null);?>
');" class="submenuA" hidefocus="true" style="outline:none;"><?php echo (isset($_smarty_tpl->tpl_vars['navi']->value['name']) ? $_smarty_tpl->tpl_vars['navi']->value['name'] : null);?>
</a></li>
						<?php }} ?>
						</ul>
			      </li>
		 	 </ul>
		 	 <?php }} ?>
		</div>
	</td>
    <td style="width:1108px;!important;width:1103px;">
   	  <iframe onload="nof5()" id="MainIframe" name="MainIframe" scrolling="yes" src="<?php echo $_smarty_tpl->getVariable('defalt_script')->value;?>
" width="100%" height="100%" frameborder="0" noresize> </iframe>
	</td>
  </tr>
</table>
</body>
<!--  -->

<script type="text/javascript"> 
	var current_channel   = null;
	var current_menu_root = null;
	var current_menu_sub  = null;
	var viewed_channel	  = new Array();
	
	$(document).ready(function(){
		switchChannel('product');
	});
	
	//切换频道（即头部的tab）
	function switchChannel(channel) {
		//if(current_channel == channel) return false;
		
		$('#channel_'+current_channel).removeClass('on');
		$('#channel_'+channel).addClass('on');
		
		$('#root_'+current_channel).css('display', 'none');
		$('#root_'+channel).css('display', 'block');
		
		var tmp_menulist = $('#root_'+channel).find('a');
		tmp_menulist.each(function(i, n) {
			// 防止重复点击ROOT菜单
			if( i == 0 && $.inArray($(n).attr('id'), viewed_channel) == -1 ) {
				$(n).click();
				viewed_channel.push($(n).attr('id'));
			}
			if ( i == 1 ) {
				//$(n).click();
				if (channel=="product"){
					parent.MainIframe.location = "site/templates/elsker/blank_business.html";//加载一个空白页
				}else if (channel=="machine"){
					parent.MainIframe.location = "site/templates/elsker/blank_machine.html";//加载提醒页
				}else if (channel=="base"){
					parent.MainIframe.location = "site/templates/elsker/blank_base.html";//加载提醒页
				}else{
					parent.MainIframe.location = "site/templates/elsker/blank.html";//加载一个空白页
				}
				
			}
		});
 
		current_channel = channel;
	}
	
	function switch_root_menu(root) {
		root = $('#tree_'+root);
		if (root.css('display') == 'block') {
			root.css('display', 'none');
			root.parent().css('backgroundImage', 'url(css/ArrOn.png)');
		}else {
			root.css('display', 'block');
			root.parent().css('backgroundImage', 'url(css/ArrOff.png)');
		}
	}
	
	function switch_sub_menu(sub, url) {
		if(current_menu_sub) {
			$('#menu_'+current_menu_sub).attr('class', 'submenuA');
		}
		$('#menu_'+sub).attr('class', 'submenuB');
		current_menu_sub = sub;
		
		parent.MainIframe.location = url;
	}
</script>
<script type="text/javascript">
function currentTime(){
	var d = new Date(),str = '';
 	str += d.getFullYear()+'年';
 	str  += d.getMonth() + 1+'月';
 	str  += d.getDate()+'日';
 	str += d.getHours()+'时'; 
 	str  += d.getMinutes()+'分'; 
	str+= d.getSeconds()+'秒'; 
	return str;
}
setInterval(function(){$('#TopTime').html(currentTime)},1000);
</script>
<!--  -->

</html>