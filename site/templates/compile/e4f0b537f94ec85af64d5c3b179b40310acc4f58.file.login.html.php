<?php /* Smarty version Smarty-3.0.4, created on 2019-10-22 14:01:24
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/navi/login.html" */ ?>
<?php /*%%SmartyHeaderCode:192595dae9b34085227-39905818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4f0b537f94ec85af64d5c3b179b40310acc4f58' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/navi/login.html',
      1 => 1571723579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192595dae9b34085227-39905818',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
   


    <title>运河租车-登录</title>
   

    <link rel="shortcut icon" href="favicon.ico"> <link href="../../../crm1/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="../../../crm1/css/font-awesome.css?v=4.4.0" rel="stylesheet">

  
    <link href="../../../crm1/css/style.css?v=4.1.0" rel="stylesheet">
  
   
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
