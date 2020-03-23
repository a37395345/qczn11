<?php /* Smarty version Smarty-3.0.4, created on 2019-10-21 17:48:14
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/zijia_linshi/daijia_yeji.html" */ ?>
<?php /*%%SmartyHeaderCode:10601598485dad7ede7321d8-70278866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04d86795353a8761ab9d64c4a845b514376d7995' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/zijia_linshi/daijia_yeji.html',
      1 => 1571651008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10601598485dad7ede7321d8-70278866',
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

</head>

<body class="gray-bg">
     <div class="wrapper wrapper-content animated fadeInRight">
        
        <!-- Panel Other -->
        <div class="ibox float-e-margins" >
            <div class="ibox-title" style="    padding-top: 5px">
                <h5 style="padding-top: 10px">业绩排行榜</h5>

            </div>


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
                                            
                                           
                                            <th style="text-align: center;">临时带驾-现结</th>
                                            <th style="text-align: center;">临时带驾-批结</th>
                                            <th style="text-align: center;">调车费用</th>
                                             <th style="text-align: center;">实际金额</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                       <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null)==9){?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['model_a']) ? $_smarty_tpl->tpl_vars['rows']->value['model_a'] : null);?>
</td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['biliang_money']) ? $_smarty_tpl->tpl_vars['rows']->value['biliang_money'] : null);?>
</td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['diaoche_money']) ? $_smarty_tpl->tpl_vars['rows']->value['diaoche_money'] : null);?>
</td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shiji_a']) ? $_smarty_tpl->tpl_vars['rows']->value['shiji_a'] : null);?>
</td>
                                        </tr>
                                        <?php }?>
                                        <?php }} ?>
                                       
                    
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
                                            
                                           
                                            <th style="text-align: center;">临时带驾-现结</th>
                                            <th style="text-align: center;">临时带驾-批结</th>
                                            <th style="text-align: center;">调车费用</th>
                                             <th style="text-align: center;">实际金额</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list_a')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                       <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null)==9){?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['model_a']) ? $_smarty_tpl->tpl_vars['rows']->value['model_a'] : null);?>
</td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['biliang_money']) ? $_smarty_tpl->tpl_vars['rows']->value['biliang_money'] : null);?>
</td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['diaoche_money']) ? $_smarty_tpl->tpl_vars['rows']->value['diaoche_money'] : null);?>
</td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shiji_a']) ? $_smarty_tpl->tpl_vars['rows']->value['shiji_a'] : null);?>
</td>
                                        </tr>
                                        <?php }?>
                                        <?php }} ?>
                                       
                    
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



  
    
    

</body>

</html>
