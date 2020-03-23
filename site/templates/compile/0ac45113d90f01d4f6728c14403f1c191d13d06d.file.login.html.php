<?php /* Smarty version Smarty-3.0.4, created on 2019-09-18 04:28:24
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/navi/login.html" */ ?>
<?php /*%%SmartyHeaderCode:138095d8141e8c46ff5-79015683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ac45113d90f01d4f6728c14403f1c191d13d06d' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/navi/login.html',
      1 => 1568751620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138095d8141e8c46ff5-79015683',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>运河租车-登录</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="../../../crm1/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="../../../crm1/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="../../../crm1/css/animate.css" rel="stylesheet">
    <link href="../../../crm1/css/style.css?v=4.1.0" rel="stylesheet">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>if(window.top !== window.self){ window.top.location = window.location;}</script>
</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name"><img src="css/logo.png" width="182" height="66" border="0" style="    margin-top: 50px;" /></h1>

            </div>
           

            <form class="m-t" role="form" action="<?php echo $_smarty_tpl->getVariable('S_LOGIN_ACTION')->value;?>
" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="用户名" required="" name="username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="密码" required="" name="password">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="验证码" required="" class="form-control"  name="checkcode" id="checkcode" value="" style="width: 65%;float: left;" />
                    <img src="verifycode.php" onclick="javascript:this.src='verifycode.php?'+Math.random();" style="vertical-align:middle;margin-left:2px;height: 33px" />
                </div>

                <button type="submit" class="btn btn-primary block full-width m-b">登 录</button>


               

            </form>
        </div>
    </div>

    <!-- 全局js -->
    <script src="../../../crm1/js/jquery.min.js?v=2.1.4"></script>
    <script src="../../../crm1/js/bootstrap.min.js?v=3.3.6"></script>

    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
    <!--统计代码，可删除-->


</body>
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

</html>
