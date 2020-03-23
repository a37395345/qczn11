<?php /* Smarty version Smarty-3.0.4, created on 2019-09-02 15:50:19
         compiled from "F:\WWW\qczn\site\templates\elsker\index.html" */ ?>
<?php /*%%SmartyHeaderCode:174735d6cc9bb183df7-41723650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c81b2e46065c6ea4b0602b088f2aa7f9f73e5d7' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\index.html',
      1 => 1567410617,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174735d6cc9bb183df7-41723650',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/style.css?a=1" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>车辆租赁管理系统</title>
<script type="text/javascript" src="js/jquery.js"></script>

</head>
<body scroll="no" style="margin:0; padding:0;" onLoad="nof5()">
<input type="hidden" id="aa" value="<?php echo $_smarty_tpl->getVariable('defalt_script')->value;?>
">
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3">
		<div class="header"><!-- 头部 begin -->
		    <p>您好,<?php echo $_smarty_tpl->getVariable('truename')->value;?>
(<?php echo $_smarty_tpl->getVariable('shopname')->value;?>
)&nbsp; | <a href="site/operator/navi/modips.php" target="MainIframe">修改密码</a> | <a href="javascript:void(0);" onClick="refresh();">刷新</a> | <a href="site/operator/navi/logout.php">退出</a>
		    	<span id="TopTime">2014年07月19日12时18分15秒</span></p>
		    <div class="logo"></div>
		    <div class="nav_sub">
		    	<a href="javascript:refresh();"><img src="css/logo.png" width="182" height="66" border="0" /></a>
		    </div>
		    <div class="main_nav">
		    	<ul class="infonav">
		    	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('menu_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
		    	<li style="width:10%"><a id="channel_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['action']) ? $_smarty_tpl->tpl_vars['row']->value['action'] : null);?>
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
  	<td width="10%" height="100%" valign="top" id="FrameTitle" background="css/left_bg.gif">
  		<div class="LeftMenu" >
		  	<!-- 第一级菜单，即大频道 -->
		  	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('menu_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  			<ul class="MenuList" id="root_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['action']) ? $_smarty_tpl->tpl_vars['row']->value['action'] : null);?>
" style="display:none;">
		      	<!-- 第二级菜单 -->
		      	<?php if (count((isset($_smarty_tpl->tpl_vars['row']->value['son']) ? $_smarty_tpl->tpl_vars['row']->value['son'] : null))>0){?>
		      	<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['row']->value['son']) ? $_smarty_tpl->tpl_vars['row']->value['son'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
		      	<?php if (count((isset($_smarty_tpl->tpl_vars['rows']->value['son']) ? $_smarty_tpl->tpl_vars['rows']->value['son'] : null))>0){?>
		      	<li class="treemenu" style="width: 100%,margin:0;padding: 0">
			          <a id="root_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['admin_menu_id']) ? $_smarty_tpl->tpl_vars['row']->value['admin_menu_id'] : null);?>
" class="actuator" href="javascript:void(0)" onClick="switch_root_menu('<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['admin_menu_id']) ? $_smarty_tpl->tpl_vars['row']->value['admin_menu_id'] : null);?>
');" hidefocus="true" style="outline:none;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['name']) ? $_smarty_tpl->tpl_vars['rows']->value['name'] : null);?>
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
			    <?php }else{ ?>
			    	<li><a id="menu_<?php echo (isset($_smarty_tpl->getVariable('navi')->value['admin_menu_id']) ? $_smarty_tpl->getVariable('navi')->value['admin_menu_id'] : null);?>
" href="javascript:void(0)" onClick="switch_sub_menu('<?php echo (isset($_smarty_tpl->getVariable('navi')->value['admin_menu_id']) ? $_smarty_tpl->getVariable('navi')->value['admin_menu_id'] : null);?>
', '<?php echo (isset($_smarty_tpl->getVariable('navi')->value['script']) ? $_smarty_tpl->getVariable('navi')->value['script'] : null);?>
');" class="submenuA" hidefocus="true" style="outline:none;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['name']) ? $_smarty_tpl->tpl_vars['rows']->value['name'] : null);?>
</a></li>
			    <?php }?>
			    <?php }} ?>
			    <?php }?>

			      
		 	 </ul>
		 	 <?php }} ?>
		</div>
	</td>
    <td width="1100px">
   	  <iframe onload="nof5()" id="MainIframe" name="MainIframe" scrolling="yes" src="<?php echo $_smarty_tpl->getVariable('defalt_script')->value;?>
" width="100%" height="100%" frameborder="0" noresize> </iframe>
	</td>
  </tr>
</table>




<div style="width: 35px;z-index: 9;height: 25px;position:fixed;left:50%;top:5px;cursor:pointer" id="xinxi">
		<div style="float: left;width: 70%;height: 100%"><img src="uploadImages/xinxib.png" style="width:100%;"></div>
		<div style="float: left;width: 30%;height: 100%;text-align: right;color: red" id="index"></div>
		
</div>

<audio controls src="" id="audio" style="display: none"></audio>
<script>

$('#xinxi').click(function(){
	window.open ("/site/operator/xinxi/yuedu_xinxi.php", "newwindow", "height=600, width=1000, top=200, left=300, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no, status=no"); 
	//window.open ("http://www.baidu.com")
});

var ref = "";
function consoleLog(){
    getxinxi();
}
ref = setInterval(function(){
    consoleLog();
},1000);

function getxinxi(){
	var src="http://tsn.baidu.com/text2audio?lan=zh&ctp=1&cuid=abcd&tok=24.4be953851b03251995a4ee8b5e905b71.2592000.1558159140.282335-16050293&vol=9&per=0&spd=5&pit=5&aue=3&tex=";
	if($('#index').html()==''){
		var index_a=0;
	}else{
		var index_a=parseInt($('#index').html());
	}
	
	$.ajax({
       	type:'POST',
        url:"/site/operator/xinxi/getxinxi.php",
      	success:function(result){
      		var jsons = JSON.parse(result);
      		num=parseInt(jsons['num']);
          	if(num>0){

                $("#xinxi img").attr('src','uploadImages/xinxia.png');
                $("#index").html(num);
                if(num>index_a){
                	var audio = $("#audio")[0];
                	src=src+jsons['text'];
                	audio.src=src;
					audio.play();
                }
            }else{
            	 $("#xinxi img").attr('src','uploadImages/xinxib.png');
            	 $("#index").html('');
            }
                   
        }
    });
}
</script>

</body>
<!--  -->

<script type="text/javascript"> 
	var current_channel   = null;
	var current_menu_root = null;
	var current_menu_sub  = null;
	var viewed_channel	  = new Array();
	
	$(document).ready(function(){
		switchChannel('product');
		if ($("#aa").val()!=""){
			parent.MainIframe.location = $("#aa").val();
		}
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
					parent.MainIframe.location = "site/templates/elsker/blank_business.html?v=1";//加载一个空白页
				}else if (channel=="machine"){
					parent.MainIframe.location = "site/templates/elsker/blank_machine.html";//加载提醒页
				}else if (channel=="renshi"){
					parent.MainIframe.location = "site/operator/renshi/index.php";//加载提醒页
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


var nCount=0;
function currentTime(){
	nCount++;
	if (nCount>=60){
		nCount=0;

		$.getJSON("site/operator/navi/checksession.php", function(jsonmsg){
			if (jsonmsg.status!=0){
				alert("您的账号在另外一个地方登录了！ \n\n 如果非本人操作，请及时修改登录密码");
				parent.location.href="site/operator/navi/logout.php";
			}
		});
	}
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