<?php /* Smarty version Smarty-3.0.4, created on 2020-01-18 14:11:59
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/zijia_linshi/daijia_yeji.html" */ ?>
<?php /*%%SmartyHeaderCode:9915e22a1af5c0be9-82722811%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09fdc735e9cf10c251af8e268f284ff7b53214db' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/zijia_linshi/daijia_yeji.html',
      1 => 1579225817,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9915e22a1af5c0be9-82722811',
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
    <title>临时自驾业绩排行榜</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">
    <link rel="shortcut icon" href="favicon.ico"> <link href="../../../crm1/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="../../../crm1/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="../../../crm1/css/animate.css" rel="stylesheet">
    <link href="../../../crm1/css/style.css?v=4.1.0" rel="stylesheet">
    <script type="text/javascript" src="../../../js/laydate/laydate.js"></script>
    <style>
        .timeline{
            line-height: 10px!important;
        }
    </style>
</head>
<body class="gray-bg">
     <div class="wrapper wrapper-content animated fadeInRight">
        
        <!-- Panel Other -->
        <div class="ibox float-e-margins" >
            <div class="ibox-title" style="    padding-top: 5px">
                <h5 style="padding-top: 10px">大客户部业绩表</h5>

            </div>

                                <form id="form1" action="zijia_list.php?task=daijia_yeji" method="post">

            <div class="wrapper wrapper-content animated fadeInRight" style=" margin: 0; padding: 0;">
                <div class="ibox float-e-margins" style="margin:0">
                    <div class="ibox-title" style=" margin: 0; padding: 0;">

                       
                        <h5 style="padding-top: 15px; padding-left: 10px;">搜索
                        </h5>

                        <div class="ibox-tools" style="padding-top: 14px; padding-left: 10px;float: left;">
                            <a class="collapse-link">
                            <i class="fa fa-chevron-down" id="up"></i>
                            </a>
                        </div>
                         
                    </div>
                    <div class="ibox-content" id="content" style=" margin: 0px; padding: 0px;display: none">
                        <div class="row row-lg">
                            <div class="col-sm-12">
                                <!-- Example Events -->
                                <div class="example-wrap">
                                    <div class="example">
                                        <table class="table table-bordered">
                                       
                                            
                                        <tr>
                                          
                                            <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;开始时间:</span>
                                            </th>
                                            
                                            <td width="35%">
                                                <input name="paiche_startDate" placeholder="请输入日期" value="" class="timeline laydate-icon form-control input-sm" onclick="laydate({istime: true, format: 'YYYY-MM-DD 00:00:00'})" unselectable="on" readonly>
                                            </td>
                                             <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000">&nbsp;&nbsp;&nbsp;&nbsp;结束时间:</span>
                                            </th>
                                            <td width="35%">
                                                <input name="paiche_endDate" placeholder="请输入日期" value="" class="timeline laydate-icon form-control input-sm" onclick="laydate({istime: true, format: 'YYYY-MM-DD 23:59:59'})" unselectable="on" readonly>
                                            </td>
                                            
                                        </tr>
                                        </table>


                                         <button type="submit" class="btn btn-outline btn-default" style="margin-left:45%;width: 10%">
                                <i class="glyphicon glyphicon-search" aria-hidden="true"></i>
                                                        搜索
                                </button>
                                    </div>
                                </div>
                                <!-- End Example Events -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Panel Other -->
            </div>
</form>
            <div class="ibox-content_a">
                <div class="row row-lg">
             
            <div class="col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>当月临时代驾业绩</h5>
                        
                    </div>
                    <div class="ibox-content">
                       
                        <table class="table table-bordered table-hover" 
                                       data-height="400"
                                       style="margin-bottom:0px"
                                       data-mobile-responsive="true">
                                    <thead>
                                        <tr>
                                            
                                            <th style="text-align: center;" width="25%">代驾现结</th>
                                            <th style="text-align: center;" width="25%">代驾批量结账</th>
                                            <th style="text-align: center;" width="25%">调车结算</th>
                                            <th style="text-align: center;" width="25%">合计金额</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        <tr>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->getVariable('yue')->value['xianjie_list']) ? $_smarty_tpl->getVariable('yue')->value['xianjie_list'] : null);?>
</td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->getVariable('yue')->value['biliang_money']) ? $_smarty_tpl->getVariable('yue')->value['biliang_money'] : null);?>
</td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->getVariable('yue')->value['diaoche_money']) ? $_smarty_tpl->getVariable('yue')->value['diaoche_money'] : null);?>
</td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->getVariable('yue')->value['xianjie_list']) ? $_smarty_tpl->getVariable('yue')->value['xianjie_list'] : null)+(isset($_smarty_tpl->getVariable('yue')->value['biliang_money']) ? $_smarty_tpl->getVariable('yue')->value['biliang_money'] : null)+(isset($_smarty_tpl->getVariable('yue')->value['diaoche_money']) ? $_smarty_tpl->getVariable('yue')->value['diaoche_money'] : null);?>
</td>
                                            
                                        </tr>
                                        
                                         
                                       
                    
                                    </tbody>
                                </table>

                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>年度临时代驾业绩</h5>
                        
                    </div>

                    <div class="ibox-content">
                       
                        <table class="table table-bordered table-hover" 
                                       data-height="400"
                                       style="margin-bottom:0px"
                                       data-mobile-responsive="true">
                                    <thead>
                                        <tr>
                                            
                                            <th style="text-align: center;" width="25%">代驾现结</th>
                                            <th style="text-align: center;" width="25%">代驾批量结账</th>
                                            <th style="text-align: center;" width="25%">调车结算</th>
                                            <th style="text-align: center;" width="25%">合计金额</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        <tr>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->getVariable('nian')->value['xianjie_list']) ? $_smarty_tpl->getVariable('nian')->value['xianjie_list'] : null);?>
</td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->getVariable('nian')->value['biliang_money']) ? $_smarty_tpl->getVariable('nian')->value['biliang_money'] : null);?>
</td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->getVariable('nian')->value['diaoche_money']) ? $_smarty_tpl->getVariable('nian')->value['diaoche_money'] : null);?>
</td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->getVariable('nian')->value['xianjie_list']) ? $_smarty_tpl->getVariable('nian')->value['xianjie_list'] : null)+(isset($_smarty_tpl->getVariable('nian')->value['biliang_money']) ? $_smarty_tpl->getVariable('nian')->value['biliang_money'] : null)+(isset($_smarty_tpl->getVariable('nian')->value['diaoche_money']) ? $_smarty_tpl->getVariable('nian')->value['diaoche_money'] : null);?>
</td>
                                            
                                        </tr>
                                       
                    
                                    </tbody>
                                </table>

                    </div>
                </div>
            </div>




            <div class="col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>当月长期业务业绩</h5>
                        
                    </div>

                    <div class="ibox-content">
                       
                        <table class="table table-bordered table-hover" 
                                       data-height="400"
                                       style="margin-bottom:0px"
                                       data-mobile-responsive="true">
                                    <thead>
                                        <tr>
                                            
                                            <th style="text-align: center;">长期自驾</th>
                                            <th style="text-align: center;">长期代驾</th>
                                            <th style="text-align: center;">长期大客</th>
                                            <th style="text-align: center;">合计金额</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->getVariable('yue')->value['zijia_money']) ? $_smarty_tpl->getVariable('yue')->value['zijia_money'] : null);?>
</td>
                                      
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->getVariable('yue')->value['daijia_money']) ? $_smarty_tpl->getVariable('yue')->value['daijia_money'] : null);?>
</td>
                                       
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->getVariable('yue')->value['dake_money']) ? $_smarty_tpl->getVariable('yue')->value['dake_money'] : null);?>
</td>
                                             <td style="text-align: center;"><?php echo (isset($_smarty_tpl->getVariable('yue')->value['dake_money']) ? $_smarty_tpl->getVariable('yue')->value['dake_money'] : null)+(isset($_smarty_tpl->getVariable('yue')->value['daijia_money']) ? $_smarty_tpl->getVariable('yue')->value['daijia_money'] : null)+(isset($_smarty_tpl->getVariable('yue')->value['zijia_money']) ? $_smarty_tpl->getVariable('yue')->value['zijia_money'] : null);?>
</td>
                                       </tr>
                                         
                                       
                    
                                    </tbody>
                                </table>

                    </div>
                </div>
            </div>



             <div class="col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>年度长期业务业绩</h5>
                        
                    </div>

                    <div class="ibox-content">
                       
                        <table class="table table-bordered table-hover" 
                                       data-height="400"
                                       style="margin-bottom:0px"
                                       data-mobile-responsive="true">
                                    <thead>
                                        <tr>
                                             <th style="text-align: center;">合计金额</th>
                                            <th style="text-align: center;">长期自驾</th>
                                            <th style="text-align: center;">长期代驾</th>
                                            <th style="text-align: center;">长期大客</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->getVariable('nian')->value['zijia_money']) ? $_smarty_tpl->getVariable('nian')->value['zijia_money'] : null);?>
</td>
                                      
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->getVariable('nian')->value['daijia_money']) ? $_smarty_tpl->getVariable('nian')->value['daijia_money'] : null);?>
</td>
                                       
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->getVariable('nian')->value['dake_money']) ? $_smarty_tpl->getVariable('nian')->value['dake_money'] : null);?>
</td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->getVariable('nian')->value['dake_money']) ? $_smarty_tpl->getVariable('nian')->value['dake_money'] : null)+(isset($_smarty_tpl->getVariable('nian')->value['daijia_money']) ? $_smarty_tpl->getVariable('nian')->value['daijia_money'] : null)+(isset($_smarty_tpl->getVariable('nian')->value['zijia_money']) ? $_smarty_tpl->getVariable('nian')->value['zijia_money'] : null);?>
</td>
                                       </tr>
                                         
                                       
                    
                                    </tbody>
                                </table>

                    </div>
                </div>
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



  <script type="text/javascript">
    $("#up").click(function(){
        var content=$("#content").css('display');
        if(content=="none"){
            
            $("#content").css('display','block');
        $('#up').removeClass("fa-chevron-down");
        $('#up').addClass("fa-chevron-up");
        }else{
            $("#content").css('display','none');
        $('#up').removeClass("fa-chevron-up");
        $('#up').addClass("fa-chevron-down");
        }
    });
</script>
    
    

</body>

</html>
