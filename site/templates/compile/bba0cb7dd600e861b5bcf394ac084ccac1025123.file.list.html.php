<?php /* Smarty version Smarty-3.0.4, created on 2019-09-29 17:28:58
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/emp/list.html" */ ?>
<?php /*%%SmartyHeaderCode:20306814075d90795aafae17-37058542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bba0cb7dd600e861b5bcf394ac084ccac1025123' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/emp/list.html',
      1 => 1569749212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20306814075d90795aafae17-37058542',
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


    <title>H+ 后台主题UI框架 - 百度ECHarts</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="../../../crm1/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="../../../crm1/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="../../../crm1/css/animate.css" rel="stylesheet">
    <link href="../../../crm1/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
     <div class="wrapper wrapper-content animated fadeInRight">
        
        <!-- Panel Other -->
        <div class="ibox float-e-margins" >
            <div class="ibox-title" style="    padding-top: 5px">
                <h5 style="padding-top: 10px">员工资料统计</h5>
            </div>


            <div class="ibox-content_a">
                <div class="row row-lg">
                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="example-wrap">
                            <div class="example">
                                
                                <table class="table table-bordered table-hover" 
                                       data-height="400"
                                       style="margin-bottom:0px"
                                       data-mobile-responsive="true">
                                       
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">所有员工</th>
                                            <th style="text-align: center;">在职人数</th>
                                            <th style="text-align: center;">正式期人数</th>
                                            <th style="text-align: center;">试用期人数</th>
                                            <th style="text-align: center;">离职人数</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                            <td style="text-align: center;">
                                                <?php if ($_smarty_tpl->getVariable('rule_add')->value==1){?>
                                                    <a href="index.php?type=1"><?php echo $_smarty_tpl->getVariable('quanbu')->value;?>
</a>
                                                <?php }else{ ?>
                                                    <?php echo $_smarty_tpl->getVariable('quanbu')->value;?>

                                                <?php }?>
                                            </td>
                                            <td style="text-align: center;">
                                                <?php if ($_smarty_tpl->getVariable('rule_add')->value==1){?>
                                                    <a href="index.php?type=2"><?php echo $_smarty_tpl->getVariable('zaizhi')->value;?>
</a>
                                                <?php }else{ ?>
                                                    <?php echo $_smarty_tpl->getVariable('zaizhi')->value;?>

                                                <?php }?>
                                                
                                            </td>
                                            <td style="text-align: center;">
                                                <?php if ($_smarty_tpl->getVariable('rule_add')->value==1){?>
                                                    <a href="index.php?type=3"><?php echo $_smarty_tpl->getVariable('zhengshi')->value;?>
</a>
                                                <?php }else{ ?>
                                                    <?php echo $_smarty_tpl->getVariable('zhengshi')->value;?>

                                                <?php }?>
                                                
                                            </td>
                                            <td style="text-align: center;">
                                                <?php if ($_smarty_tpl->getVariable('rule_add')->value==1){?>
                                                    <a href="index.php?type=4"><?php echo $_smarty_tpl->getVariable('shiyong')->value;?>
</a>
                                                <?php }else{ ?>
                                                    <?php echo $_smarty_tpl->getVariable('shiyong')->value;?>

                                                <?php }?>
                                                
                                            </td>
                                            <td style="text-align: center;">
                                                <?php if ($_smarty_tpl->getVariable('rule_add')->value==1){?>
                                                    <a href="index.php?type=5"><?php echo $_smarty_tpl->getVariable('lizhi')->value;?>
</a>
                                                <?php }else{ ?>
                                                    <?php echo $_smarty_tpl->getVariable('lizhi')->value;?>

                                                <?php }?>
                                                
                                            </td>
                                        </tr>
                    
                                    </tbody>
                                </table>
                            
                                
                                
                            </div>
                        </div>
                        <!-- End Example Events -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Panel Other -->
    </div>












        
           
           
        
 
      
            

        
        
    </div>
    <!-- 全局js -->
    <script src="../../../crm1/js/jquery.min.js?v=2.1.4"></script>
    <script src="../../../crm1/js/bootstrap.min.js?v=3.3.6"></script>



    <!-- ECharts -->
    <script src="../../../crm1/js/plugins/echarts/echarts-all.js"></script>

    <!-- 自定义js -->



  
    
    

</body>

</html>
