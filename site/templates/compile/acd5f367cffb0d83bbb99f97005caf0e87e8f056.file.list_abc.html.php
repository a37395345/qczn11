<?php /* Smarty version Smarty-3.0.4, created on 2020-01-04 17:10:29
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/jucan/list_abc.html" */ ?>
<?php /*%%SmartyHeaderCode:23995e105685c03551-30731195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acd5f367cffb0d83bbb99f97005caf0e87e8f056' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/jucan/list_abc.html',
      1 => 1578128969,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23995e105685c03551-30731195',
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
    <style>
        @media(max-width: 950px){
            .ibox-tools{
                float: right;
            }
        }
    </style>
</head>

<body class="gray-bg">
     <div class="wrapper wrapper-content animated fadeInRight">
        
        <!-- Panel Other -->
        <div class="ibox float-e-margins" >
            <div class="ibox-title" style="    padding-top: 5px">
                <h5 style="padding-top: 10px">聚餐经费概况</h5>

                <div class="ibox-tools" style="margin-left: 40px;">
                    <a class="btn btn-outline btn-default" href="index.php?task=xiangmu_index">
                        
                        项目明细
                    </a>
                </div>
                <div class="ibox-tools" style="margin-left: 40px;">
                    <a class="btn btn-outline btn-default" href="index.php?task=xiaofei_index">
                        
                        消费明细
                    </a>
                </div>
                <div class="ibox-tools" style="margin-left: 40px;">
                    <a class="btn btn-outline btn-default" href="index.php">
                        
                        经费明细
                    </a>
                </div>
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
                                            <th style="text-align: center;">总经费</th>
                                            <th style="text-align: center;">总消费</th>
                                            <th style="text-align: center;">剩余经费</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        <tr>
                                            <td style="text-align: center;color: red"><?php echo number_format((isset($_smarty_tpl->getVariable('tongji')->value['jucan']) ? $_smarty_tpl->getVariable('tongji')->value['jucan'] : null),2);?>
</td>
                                            <td style="text-align: center;color: green"><?php if ((isset($_smarty_tpl->getVariable('tongji')->value['xiaofei']) ? $_smarty_tpl->getVariable('tongji')->value['xiaofei'] : null)>0){?>
                                    <?php echo number_format((isset($_smarty_tpl->getVariable('tongji')->value['xiaofei']) ? $_smarty_tpl->getVariable('tongji')->value['xiaofei'] : null),2);?>

                                 <?php }else{ ?>
                                    0.00
                                 <?php }?></td>
                                 <td style="text-align: center;color: red"><?php echo number_format(((isset($_smarty_tpl->getVariable('tongji')->value['jucan']) ? $_smarty_tpl->getVariable('tongji')->value['jucan'] : null)-(isset($_smarty_tpl->getVariable('tongji')->value['xiaofei']) ? $_smarty_tpl->getVariable('tongji')->value['xiaofei'] : null)),2);?>
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
