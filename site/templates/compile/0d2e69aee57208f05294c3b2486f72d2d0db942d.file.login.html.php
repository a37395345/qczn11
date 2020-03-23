<?php /* Smarty version Smarty-3.0.4, created on 2014-06-19 16:39:05
         compiled from "D:\Phpserv\qczn\site\templates\elsker\login.html" */ ?>
<?php /*%%SmartyHeaderCode:2891753a2a1a90fc2b8-11694900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d2e69aee57208f05294c3b2486f72d2d0db942d' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\login.html',
      1 => 1403167141,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2891753a2a1a90fc2b8-11694900',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>常州运河汽车租赁有限公司租车管理系统</title>
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
.lf {  margin-bottom:13px; }
.lbm { width:435px; height:39px; line-height:22px; color:#f6f4f9; background:url(css/login/gm_l_i.gif) no-repeat; text-align:center; padding-top:30px;}
</style>
<!--  -->
<script type="text/javascript" src="js/jquery.js"></script> 
</head>
<body>
<div class="gm">
	<div class="fl"><img src="css/login/gm_l_a.gif" /></div>
	<div class="la fl">
		<div class="lb fl"></div>
		<div class="lc fl">
            <form action="<?php echo $_smarty_tpl->getVariable('S_LOGIN_ACTION')->value;?>
" name="reg" method="post"  class="nf lf">
			<ul>
				<li><img src="css/login/gm_l_g.gif" /></li>
									<li class="lf">
					   帐　号：
					   <input class="text" onfocus="this.className='text2'" onblur="this.className='text'" type="text" name="username" value="" style="width:128px; height:15px;">
				    </li>
								<li class="lf">
				    密　码：
				    <input class="text" onfocus="this.className='text2'" onblur="this.className='text'" type="password" name="password" value="" style="width:128px; height:15px;">
				</li>
				<li style="height:27px;"><input type="image" src="css/login/gm_l_dl.gif" style="height:27px; width:81px;" /></li>
			</ul>
			</form>
		</div>
	</div>
	<div class="lbm fl">Copyright &copy; 2014 常州运河汽车租赁有限公司 版权所有</div>
</div>
</body>
</html>