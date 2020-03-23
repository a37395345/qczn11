<?php /* Smarty version Smarty-3.0.4, created on 2019-09-29 17:28:01
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/car/yilan.html" */ ?>
<?php /*%%SmartyHeaderCode:10574176755d907921ca9700-96368726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89ed669268bc28699f0113fffbc3f6f2bf6553df' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/car/yilan.html',
      1 => 1569749210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10574176755d907921ca9700-96368726',
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
                <h5 style="padding-top: 10px">车辆当前状况一览表</h5>

            </div>


            <div class="ibox-content_a">
                <div class="row row-lg">
                
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>车辆总体状况</h5>
                        
                    </div>
                    <div class="ibox-content">
                       
                        <table class="table table-bordered table-hover" 
                                       data-height="400"
                                       style="margin-bottom:0px"
                                       data-mobile-responsive="true">
                                    <thead>
                                        <tr>	
                                        <th style="text-align: center;">车辆总数</th>
                                        <th style="text-align: center;">租用车辆</th>
                                        <th style="text-align: center;">空闲车辆</th>
                                        <th style="text-align: center;">故障维修</th>
                                        <th style="text-align: center;">异常/被骗</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<tr>
									     <td style="text-align: center;">
									     	<a href="index.php?task=carrun&firstop=firstop&status=9"><?php echo (isset($_smarty_tpl->getVariable('car')->value['tnum']) ? $_smarty_tpl->getVariable('car')->value['tnum'] : null);?>
</a>
									     </td>
									     <td style="text-align: center;">
									     	<a href="index.php?task=carrun&status=1"><?php echo (isset($_smarty_tpl->getVariable('car')->value['znum']) ? $_smarty_tpl->getVariable('car')->value['znum'] : null);?>
</a>
									     </td>
									     <td style="text-align: center;">
									     	<a href="index.php?task=carrun&status=0"><?php echo (isset($_smarty_tpl->getVariable('car')->value['knum']) ? $_smarty_tpl->getVariable('car')->value['knum'] : null);?>
</a>
									     </td>
									     <td style="text-align: center;">
									     	<a href="index.php?task=carrun&firstop=firstop&status=2"><?php echo (isset($_smarty_tpl->getVariable('car')->value['wnum']) ? $_smarty_tpl->getVariable('car')->value['wnum'] : null);?>
</a>
									     </td>
									     <td style="text-align: center;">
									     	<a href="index.php?task=carrun&firstop=firstop&status=2&maint=reason"><?php echo (isset($_smarty_tpl->getVariable('car')->value['ynum']) ? $_smarty_tpl->getVariable('car')->value['ynum'] : null);?>
</a>
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
                        <h5>租用车辆列表(业务归属)</h5>
                        
                    </div>
                    <div class="ibox-content">
                       
                        <table class="table table-bordered table-hover" 
                                       data-height="400"
                                       style="margin-bottom:0px"
                                       data-mobile-responsive="true">
                                    <thead>
                                        <tr>
                                        	<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('car')->value['zlist']) ? $_smarty_tpl->getVariable('car')->value['zlist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                        		<th style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>
</th>
                                        	<?php }} ?>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<tr>
                                    	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('car')->value['zlist']) ? $_smarty_tpl->getVariable('car')->value['zlist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
									     <td style="text-align: center;">
									     	<a href="index.php?task=carrun&status=1&search_shop=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_id']) ? $_smarty_tpl->tpl_vars['row']->value['shop_id'] : null);?>
"><?php $_tmp1=(isset($_smarty_tpl->tpl_vars['row']->value['total']) ? $_smarty_tpl->tpl_vars['row']->value['total'] : null);?><?php if (empty($_tmp1)){?>0<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['total']) ? $_smarty_tpl->tpl_vars['row']->value['total'] : null);?>
<?php }?></a>
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
                        <h5>空闲车辆</h5>
                        
                    </div>
                    <div class="ibox-content">
                       
                        <table class="table table-bordered table-hover" 
                                       data-height="400"
                                       style="margin-bottom:0px"
                                       data-mobile-responsive="true">
                                    <thead>
                                        <tr>
                                        	<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('car')->value['klist']) ? $_smarty_tpl->getVariable('car')->value['klist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                        		<th style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>
</th>
                                        	<?php }} ?> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<tr>
                                    	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('car')->value['klist']) ? $_smarty_tpl->getVariable('car')->value['klist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
									     <td style="text-align: center;">
									     	<a href="index.php?task=carrun&status=0&search_shop=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_id']) ? $_smarty_tpl->tpl_vars['row']->value['shop_id'] : null);?>
"><?php $_tmp2=(isset($_smarty_tpl->tpl_vars['row']->value['total']) ? $_smarty_tpl->tpl_vars['row']->value['total'] : null);?><?php if (empty($_tmp2)){?>0<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['total']) ? $_smarty_tpl->tpl_vars['row']->value['total'] : null);?>
<?php }?></a>
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



  
    
    

</body>

</html>
