<?php /* Smarty version Smarty-3.0.4, created on 2019-12-06 14:23:31
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/machine/basefirst.html" */ ?>
<?php /*%%SmartyHeaderCode:114815de9f3e3687b58-17598552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a8ad76d047eb332c979aa791e01ef154559452f' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/machine/basefirst.html',
      1 => 1575613389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114815de9f3e3687b58-17598552',
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
    <title>车辆基础资料</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">
    <link rel="shortcut icon" href="favicon.ico"> 
    <link href="../../../crm1/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="../../../crm1/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="../../../crm1/css/animate.css" rel="stylesheet">
    <link href="../../../crm1/css/style.css?v=4.1.0" rel="stylesheet">
    <script type="text/javascript" src="../../../js/laydate/laydate.js"></script>
</head>
<body class="gray-bg">
     <div class="wrapper wrapper-content animated fadeInRight">
        <div class="ibox float-e-margins" >
            <div class="ibox-title" style="    padding-top: 5px">
                <h5 style="padding-top: 10px">车辆基础资料</h5>
            </div>
            <div class="ibox-content_a">
                <div class="row row-lg">
                <div class="col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>公司现有车辆一览表</h5>
                    </div>
                    <div class="ibox-content">
                       
                        <table class="table table-bordered table-hover" 
                                       data-height="400"
                                       style="margin-bottom:0px"
                                       data-mobile-responsive="true">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">车辆数</th>
                                            <th style="text-align: center;">开票价</th>
                                            <th style="text-align: center;">实际购买价</th>
                                            <th style="text-align: center;">购置税</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                      
                                        <tr>
                                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('first')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
                                     <td style="text-align: center;">
                                        <a href="list.php?car_status=0"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['nCount1']) ? $_smarty_tpl->tpl_vars['row']->value['nCount1'] : null)+(isset($_smarty_tpl->tpl_vars['row']->value['nCount2']) ? $_smarty_tpl->tpl_vars['row']->value['nCount2'] : null);?>
</a>
                                     </td>
                                     <td style="text-align: center;">
                                        <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_amount']) ? $_smarty_tpl->tpl_vars['row']->value['car_amount'] : null);?>

                                     </td>
                                     <td style="text-align: center;">
                                        <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_infactamount']) ? $_smarty_tpl->tpl_vars['row']->value['car_infactamount'] : null);?>

                                     </td>
                                     <td style="text-align: center;">
                                        <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_buytax']) ? $_smarty_tpl->tpl_vars['row']->value['car_buytax'] : null);?>

                                     </td>
                                     <?php }} ?>
                                    </tr>
                                        
                    
                                    </tbody>
                                </table>

                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5> 公司现出售车辆一览表</h5>
                    </div>
                    <div class="ibox-content">
                        <table class="table table-bordered table-hover" 
                                       data-height="400"
                                       style="margin-bottom:0px"
                                       data-mobile-responsive="true">
                                    <thead>
                                        <tr>
                                             <th style="text-align: center;font-size: 13px;">已出售但未过户车辆数(卖车款已收全)</th>
                                    <th style="text-align: center;font-size: 13px;">已出售已过户车辆数(卖车款已收全)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                      
                                        <tr>
                                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('first')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
                                     <td style="text-align: center;">
                                        <a href="list.php?car_status=3"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['nCount3']) ? $_smarty_tpl->tpl_vars['row']->value['nCount3'] : null);?>
</a>
                                     </td>
                                     <td style="text-align: center;">
                                        <a href="list.php?car_status=4"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['nCount4']) ? $_smarty_tpl->tpl_vars['row']->value['nCount4'] : null);?>
</a>
                                     </td>
                                     <?php }} ?>
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
   
</script>
  
    
    

</body>

</html>
