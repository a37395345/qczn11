<?php /* Smarty version Smarty-3.0.4, created on 2019-09-02 14:03:15
         compiled from "F:\WWW\qczn\site\templates\elsker\login.html" */ ?>
<?php /*%%SmartyHeaderCode:303675d6cb0a3a8ad14-37840198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17eff991bd66a2c507f917934adaf73c258e2400' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\login.html',
      1 => 1567404181,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303675d6cb0a3a8ad14-37840198',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>租车管理系统</title>
<script type="text/javascript" src="js/jquery.js"></script>
<!--  -->
<style type="text/css"> 
body {
	font-family:arial;
	font-size: 12px;
	background:#a6acba;
	margin: 0px;
}
li{ list-style-type: none;}
ul, form, input { font-size:12px; padding:0; margin:0;}
a { color:#006633;}
a:hover{ color: #cc3300;}
a img { border: none;}
img{ border: 0px;}
.fl { float:left;}
.gm {
	width:435px;
	margin:0 auto;
	margin-top:100px;
}
.gm .la { width:433px; background:#e6e9ee url(css/login/gm_l_h.gif) repeat-x top; border:1px solid #fff; border-bottom:none; border-top:none;}
.gm .lb { width:176px; height:215px; background:url(css/login/gm_l_f.gif) no-repeat center center;}
.gm .lc { width:257px; height:215px; background:url(css/login/gm_l_e.gif) no-repeat top left; color:#5b5d6a;}
.gm .lc ul { padding-left:20px;}
.gm .lc li { float:left; width:237px; line-height:22px;}
.gm .lx { margin-left:24px;}
.ldinput {border:1px solid #c3c6cb; padding:2px;}
.ld { background:url(css/login/gm_l_b.gif) no-repeat top right;}
.le { background:url(css/login/gm_l_c.gif) no-repeat top right;}
.lg { background:url(css/login/gm_l_d.gif) repeat-x;}
.lf {   }
.lbm { width:435px; height:39px; line-height:22px; color:#f6f4f9; background:url(css/login/gm_l_i.gif) no-repeat; text-align:center; padding-top:30px;}
</style>
<!--  -->
<script>
function login_check(){
    if ($("#username").val()==""){
		alert("请先输入登录账号！");
		$("#username").focus();
		return false;
    }
    if ($("#password").val()==""){
		alert("请输入密码！");
		$("#password").focus();
		return false;
	}
    if ($("#checkcode").val()==""){
		alert("请输入验证码！");
		$("#checkcode").focus();
		return false;
	}
}
</script>
</head>
<body>
<div class="gm">
	<div class="fl"><img src="css/login/gm_l_a.gif" /></div>
	<div class="la fl">
		<div class="lb fl"></div>
		<div class="lc fl">
            <form action="<?php echo $_smarty_tpl->getVariable('S_LOGIN_ACTION')->value;?>
" name="reg" method="post"  class="nf lf" onsubmit="return login_check()">
			<ul>
				<li><img src="css/login/gm_l_g.gif" /></li>
				<li class="lf">
					帐　号：<input class="text" type="text" name="username" id="username" value="" style="width:128px; height:25px;" />
				</li>
				<li class="lf">
				 	密　码：<input class="text"  type="password" name="password" id="password" value="" style="width:128px; height:25px;" />
				</li>
				<li class="lf">
					验证码：<input class="text" type="text" name="checkcode" id="checkcode" value="" style="width:60px; height:22px;vertical-align:middle;"/><img src="verifycode.php" onclick="javascript:this.src='verifycode.php?'+Math.random();" style="vertical-align:middle;margin-left:2px;" />
				</li>
				<li style="height:27px;"><input type="image" src="css/login/gm_l_dl.gif" style="height:27px; width:81px;" /></li>
			</ul>
			</form>
		</div>
	</div>
	<div class="lbm fl"></div>
</div>
</body>
</html>