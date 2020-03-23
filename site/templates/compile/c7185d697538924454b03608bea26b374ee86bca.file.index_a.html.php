<?php /* Smarty version Smarty-3.0.4, created on 2019-10-21 10:25:21
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/index_a.html" */ ?>
<?php /*%%SmartyHeaderCode:14846602495dad1711ca57e4-26734639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7185d697538924454b03608bea26b374ee86bca' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/index_a.html',
      1 => 1571624719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14846602495dad1711ca57e4-26734639',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    
    <meta name="renderer" content="webkit">

    <title>运河租车管理系统</title>

    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->

    <link rel="shortcut icon" href="favicon.ico"> <link href="../../../crm1/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="../../../crm1/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="../../../crm1/css/animate.css" rel="stylesheet">
    <link href="../../../crm1/css/style.css?v=4.1.0" rel="stylesheet">
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
    <div id="wrapper">
        <!--左侧导航开始-->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"><i class="fa fa-times-circle"></i>
            </div>
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span>
                                
                                <img alt="image" class="../../../crm/img-circle" src="../../../thumb/<?php echo $_smarty_tpl->getVariable('image')->value;?>
" style="width: 64px;height: 64px;border-radius:32px"/>
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                               <span class="block m-t-xs"><strong class="font-bold"><?php echo $_smarty_tpl->getVariable('truename')->value;?>
</strong></span>
                                <span class="text-muted text-xs block"><?php if ($_smarty_tpl->getVariable('uid')->value==70){?>超级管理员<?php }else{ ?><?php echo $_smarty_tpl->getVariable('shopname')->value;?>
-<?php echo $_smarty_tpl->getVariable('department_name')->value;?>
-<?php echo $_smarty_tpl->getVariable('zhiwei_name')->value;?>
<?php }?><b class="caret"></b></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="J_menuItem" href="site/operator/navi/modips.php">修改密码</a>
                                </li>
                                <li><a href="site/operator/navi/logout.php">安全退出</a>
                                </li>
                            </ul>
                        </div>
                        <div class="logo-element">运河
                        </div>
                    </li>
                    
                    
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('menu_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
                    <?php if (count((isset($_smarty_tpl->tpl_vars['row']->value['son']) ? $_smarty_tpl->tpl_vars['row']->value['son'] : null))>0){?>
                    <li>
                        <a href="http://www.baidu.com">
                            <i class="fa fa-home"></i>
                            <span class="nav-label"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['row']->value['son']) ? $_smarty_tpl->tpl_vars['row']->value['son'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                            <?php if (count((isset($_smarty_tpl->tpl_vars['rows']->value['son']) ? $_smarty_tpl->tpl_vars['rows']->value['son'] : null))>0){?>
                            <li>
                                <a href="#"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['name']) ? $_smarty_tpl->tpl_vars['rows']->value['name'] : null);?>
<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <?php  $_smarty_tpl->tpl_vars['rows_a'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rows']->value['son']) ? $_smarty_tpl->tpl_vars['rows']->value['son'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows_a']->key => $_smarty_tpl->tpl_vars['rows_a']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows_a']->key;
?>
                                    <li><a class="J_menuItem" href="<?php echo (isset($_smarty_tpl->tpl_vars['rows_a']->value['script']) ? $_smarty_tpl->tpl_vars['rows_a']->value['script'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows_a']->value['name']) ? $_smarty_tpl->tpl_vars['rows_a']->value['name'] : null);?>
</a>
                                    <?php }} ?>
                                </ul>
                            </li>
                           
                            <?php }else{ ?>
                                <li>
                                <a class="J_menuItem" href="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['script']) ? $_smarty_tpl->tpl_vars['rows']->value['script'] : null);?>
" <?php if ($_smarty_tpl->getVariable('i')->value==0){?>data-index="0"<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['name']) ? $_smarty_tpl->tpl_vars['rows']->value['name'] : null);?>
</a>
                                </li>
                            <?php }?>
                            <?php }} ?>
                        </ul>

                    </li>
                    <?php }else{ ?>
                        <li>
                        <a>
                            <i class="fa fa-home"></i> <span class="nav-label"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
</span></a>
                        </li>
                    <?php }?>
                    <?php }} ?>


                    

                </ul>
            </div>
        </nav>
        <!--左侧导航结束-->

        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header" style="width: 20%">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        
                    </div>
                    <div style="float: right;">
                         <img src="css/logo.png" width="120" height="44" border="0" style="padding-top: 10px;padding-right: 30px" />
                     </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-envelope" onclick="openXinxi()"></i> <span class="label label-warning" id="num"></span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="row content-tabs">
                <button class="roll-nav roll-left J_tabLeft"><i class="fa fa-backward"></i>
                </button>
                <nav class="page-tabs J_menuTabs">
                    <div class="page-tabs-content">
                        <a href="javascript:;" class="active J_menuTab" data-id="index_v1.html">首页</a>
                    </div>
                </nav>
                <button class="roll-nav roll-right J_tabRight"><i class="fa fa-forward"></i>
                </button>
                <div class="btn-group roll-nav roll-right">
                    <button class="dropdown J_tabClose" data-toggle="dropdown">关闭操作<span class="caret"></span>

                    </button>
                    <ul role="menu" class="dropdown-menu dropdown-menu-right">
                        
                        <li class="J_tabCloseAll"><a>关闭全部选项卡</a>
                        </li>
                        <li class="J_tabCloseOther"><a>关闭其他选项卡</a>
                        </li>
                    </ul>
                </div>
                <a href="site/operator/navi/logout.php" class="roll-nav roll-right J_tabExit"><i class="fa fa fa-sign-out" ></i>退出</a>
            </div>
        
            <div class="row J_mainContent" id="content-main" width="1100px">
               
                <iframe id="J_iframe" class="J_iframe" name="iframe0" width="100%" height="100%" scrolling="yes" src="site/operator/public/index.php" frameborder="0" data-id="index_v1.html" scrolling="yes" seamless></iframe>
                
            </div>
        

        </div>

        <!--右侧部分结束-->
        <!--右侧边栏开始-->
       
        <!--右侧边栏结束-->
        
    </div>

    <!-- 全局js -->
    <script src="../../../crm1/js/jquery.min.js?v=2.1.4"></script>
    <script src="../../../crm1/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="../../../crm1/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../../../crm1/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../../../crm1/js/plugins/layer/layer.min.js"></script>

    <!-- 自定义js -->
    <script src="../../../crm1/js/hplus.js?v=4.1.0"></script>
    <script type="text/javascript" src="../../../crm1/js/contabs.js"></script>

    <!-- 第三方插件 -->
    <script src="../../../crm1/js/plugins/pace/pace.min.js"></script>

</body>

<script type="text/javascript">

function openXinxi(){
    window.open ("/site/operator/xinxi/yuedu_xinxi.php", "newwindow", "height=600, width=1000, top=200, left=300, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no, status=no"); 
}
    var ref = "";

function consoleLog(){
    getxinxi();
}
ref = setInterval(function(){
    consoleLog();
},5000);

function getxinxi(){
    if($('#index').html()==''){
        var index_a=0;
    }else{
        var index_a=parseInt($('#num').html());
    }
    $.ajax({
        type:'POST',
        url:"/site/operator/xinxi/getxinxi.php",
        success:function(result){
            var jsons = JSON.parse(result);
            num=parseInt(jsons['num']);
            //alert(num);
            if(num>0){
                
                $("#num").html(num);
            }else{
                 
                 $("#num").html('');
            }
                   
        }
    });
}
/*
var nCount=0;
setInterval(function(){
    nCount++;
    if (nCount>=60){
        nCount=0;
        $.getJSON("site/operator/navi/checksession.php", function(jsonmsg){
            console.log(jsonmsg.status);
            if (jsonmsg.status==1){
                alert("您的账号在另外一个地方登录了！ \n\n 如果非本人操作，请及时修改登录密码");
                parent.location.href="site/operator/navi/logout.php";
            }else if(jsonmsg.status==2){
                alert("登录超时，请重新登录");
                parent.location.href="site/operator/navi/logout.php";
            }

        });
    }
},1000);*/
</script>
</html>
