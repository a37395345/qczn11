<?php /* Smarty version Smarty-3.0.4, created on 2019-10-21 17:21:13
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/zijia_linshi/zijia_yeji.html" */ ?>
<?php /*%%SmartyHeaderCode:8044207975dad78896456b5-83005696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bdc3e49c63bb47a11e4e859735fa9b7d237ac9e' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/zijia_linshi/zijia_yeji.html',
      1 => 1571649661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8044207975dad78896456b5-83005696',
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
                <h5 style="padding-top: 10px">临时自驾业绩排行榜</h5>
            </div>


            <div class="ibox-content_a">
                <div class="row row-lg">
                

            <div class="col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>当月临时自驾业绩排行榜</h5>
                        
                    </div>
                    <div class="ibox-content">
                       
                        <table class="table table-bordered table-hover" 
                                       data-height="400"
                                       style="margin-bottom:0px"
                                       data-mobile-responsive="true">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">名次</th>
                                            <th style="text-align: center;">门店</th>
                                            <th style="text-align: center;">业绩金额</th>
                                            <th style="text-align: center;">优惠券金额</th>
                                            <th style="text-align: center;">实际金额</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $_smarty_tpl->tpl_vars['moneysa'] = new Smarty_variable(0, null, null);?>
                                       <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                       <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null)!=5){?>
                                        <tr <?php if ((isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)==0){?>
                                        style="color: red"
                                        <?php }elseif((isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)==1){?>
                                            style="color: #dc6a6a;"
                                        <?php }elseif((isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)==2){?>
                                        style="color: #946804;"
                                        <?php }?>
                                        >
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)+1;?>
</td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>
</td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['model']) ? $_smarty_tpl->tpl_vars['rows']->value['model'] : null);?>
</td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['weixin_money']) ? $_smarty_tpl->tpl_vars['rows']->value['weixin_money'] : null);?>
</td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shiji']) ? $_smarty_tpl->tpl_vars['rows']->value['shiji'] : null);?>
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
                        <h5>年度临时自驾业绩排行榜</h5>
                    </div>
                    <div class="ibox-content">
                       
                        <table class="table table-bordered table-hover" 
                                       data-height="400"
                                       style="margin-bottom:0px"
                                       data-mobile-responsive="true">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">名次</th>
                                            <th style="text-align: center;">门店</th>
                                            <th style="text-align: center;">业绩金额</th>
                                            <th style="text-align: center;">优惠券金额</th>
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
                                       <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null)!=5){?>
                                        <tr <?php if ((isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)==0){?>
                                        style="color: red"
                                        <?php }elseif((isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)==1){?>
                                            style="color: #dc6a6a"
                                        <?php }elseif((isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)==2){?>
                                        style="color: #946804;"
                                        <?php }?>
                                        >
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)+1;?>
</td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>
</td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['model']) ? $_smarty_tpl->tpl_vars['rows']->value['model'] : null);?>
</td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['weixin_money']) ? $_smarty_tpl->tpl_vars['rows']->value['weixin_money'] : null);?>
</td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shiji']) ? $_smarty_tpl->tpl_vars['rows']->value['shiji'] : null);?>
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
                        <h5>当月在职业务员业绩排行榜</h5>
                    </div>
                    <div class="ibox-content">
                       
                        <table class="table table-bordered table-hover" 
                                       data-height="400"
                                       style="margin-bottom:0px"
                                       data-mobile-responsive="true">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">名次</th>
                                            <th style="text-align: center;">业务员</th>
                                            <th style="text-align: center;">所属门店</th>
                                            <th style="text-align: center;">业绩金额</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list_emp')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                       
                                        <tr <?php if ((isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)==0){?>
                                        style="color: red"
                                        <?php }elseif((isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)==1){?>
                                            style="color: #dc6a6a"
                                        <?php }elseif((isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)==2){?>
                                        style="color: #946804;"
                                        <?php }?>
                                        >
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)+1;?>
</td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_name']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_name'] : null);?>
</td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>
</td>
                                            <td style="text-align: center;"><?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['money']) ? $_smarty_tpl->tpl_vars['rows']->value['money'] : null)>0){?><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['money']) ? $_smarty_tpl->tpl_vars['rows']->value['money'] : null);?>
<?php }else{ ?>0.00<?php }?></td>
                                            
                                        </tr>
                                        
                                        <?php }} ?>
                                       
                    
                                    </tbody>
                                </table>

                    </div>
                </div>
            </div>



            







            
            <div class="col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>提成计算表</h5>
                        
                    </div>
                    <div class="ibox-content">
                        <table class="table table-bordered table-hover" 
                                       data-height="400"
                                       style="margin-bottom:0px"
                                       data-mobile-responsive="true">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;" width="50%">营业额</th>
                                            <th style="text-align: center;" width="50%">提成比例</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        <tr>
                <td style="text-align: center;">0~19999</td>
                <td style="text-align: center;">1.0%</td>
            </tr>
            <tr>
                <td style="text-align: center;">20000~39999</td>
                <td style="text-align: center;">1.1%</td>
            </tr>
            <tr>
                <td style="text-align: center;">40000~59999</td>
                <td style="text-align: center;">1.2%</td>
            </tr>
            <tr>
                <td style="text-align: center;">60000~79999</td>
                <td style="text-align: center;">1.3%</td>
            </tr>
            <tr>
                <td style="text-align: center;">80000~99999</td>
                <td style="text-align: center;">1.4%</td>
            </tr>
            <tr>
                <td style="text-align: center;">100000~149999</td>
                <td style="text-align: center;">1.5%</td>
            </tr>
            <tr>
                <td style="text-align: center;">150000~199999</td>
                <td style="text-align: center;">1.6%</td>
            </tr>
            <tr>
                <td style="text-align: center;">200000~249999</td>
                <td style="text-align: center;">1.7%</td>
            </tr>
            <tr>
                <td style="text-align: center;">250000~299999</td>
                <td style="text-align: center;">1.8%</td>
            </tr>
            <tr>
                <td style="text-align: center;">300000~399999</td>
                <td style="text-align: center;">1.9%</td>
            </tr>
            <tr>
                <td style="text-align: center;">400000~499999</td>
                <td style="text-align: center;">2.0%</td>
            </tr>
            <tr>
                <td style="text-align: center;">500000~599999</td>
                <td style="text-align: center;">2.1%</td>
            </tr>
            <tr>
                <td style="text-align: center;">......</td>
                <td style="text-align: center;">......</td>
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
