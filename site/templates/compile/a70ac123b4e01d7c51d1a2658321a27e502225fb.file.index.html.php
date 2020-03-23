<?php /* Smarty version Smarty-3.0.4, created on 2019-09-29 17:29:03
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/gongzuofu/index.html" */ ?>
<?php /*%%SmartyHeaderCode:12652753505d90795f4d0728-62175531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a70ac123b4e01d7c51d1a2658321a27e502225fb' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/gongzuofu/index.html',
      1 => 1569749220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12652753505d90795f4d0728-62175531',
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
                <h5 style="padding-top: 10px"">工作用具概况</h5>


                <div class="ibox-tools" style="margin-left: 40px;">
                    <a class="btn btn-outline btn-default" href="list.php">
                        工具类别
                    </a>
                </div>
                <div class="ibox-tools" style="margin-left: 40px;">
                    <a class="btn btn-outline btn-default" href="index.php?task=tongji_list">
                        工具统计明细
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
                                            <th style="text-align: center;">工具名称</th>
                                            <th style="text-align: center;">购买件数</th>
                                            <th style="text-align: center;">员工领取件数</th>
                                            <th style="text-align: center;">仓库剩余件数</th>
                                            <th style="text-align: center;">购买花费</th>
                                            <th style="text-align: center;">收取押金</th>
                                            <th style="text-align: center;">退还押金</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $_smarty_tpl->tpl_vars['h_huas'] = new Smarty_variable(0, null, null);?>
                                        <?php $_smarty_tpl->tpl_vars['s_huas'] = new Smarty_variable(0, null, null);?>
                                        <?php $_smarty_tpl->tpl_vars['t_huas'] = new Smarty_variable(0, null, null);?>
                                       <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                        <tr>
                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['name']) ? $_smarty_tpl->tpl_vars['rows']->value['name'] : null);?>
</td>
                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['g_jian']) ? $_smarty_tpl->tpl_vars['rows']->value['g_jian'] : null);?>
</td>
                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['q_jian']) ? $_smarty_tpl->tpl_vars['rows']->value['q_jian'] : null);?>
</td>
                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['y_jian']) ? $_smarty_tpl->tpl_vars['rows']->value['y_jian'] : null);?>
</td>
                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['h_hua']) ? $_smarty_tpl->tpl_vars['rows']->value['h_hua'] : null);?>
</td>
                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['s_ya']) ? $_smarty_tpl->tpl_vars['rows']->value['s_ya'] : null);?>
</td>
                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['t_ya']) ? $_smarty_tpl->tpl_vars['rows']->value['t_ya'] : null);?>
</td>

                                        </tr>
                                        <?php $_smarty_tpl->tpl_vars['h_huas'] = new Smarty_variable($_smarty_tpl->getVariable('h_huas')->value+(isset($_smarty_tpl->tpl_vars['rows']->value['h_hua']) ? $_smarty_tpl->tpl_vars['rows']->value['h_hua'] : null), null, null);?>
                                        <?php $_smarty_tpl->tpl_vars['s_huas'] = new Smarty_variable($_smarty_tpl->getVariable('s_huas')->value+(isset($_smarty_tpl->tpl_vars['rows']->value['s_ya']) ? $_smarty_tpl->tpl_vars['rows']->value['s_ya'] : null), null, null);?>
                                        <?php $_smarty_tpl->tpl_vars['t_huas'] = new Smarty_variable($_smarty_tpl->getVariable('t_huas')->value+(isset($_smarty_tpl->tpl_vars['rows']->value['t_ya']) ? $_smarty_tpl->tpl_vars['rows']->value['t_ya'] : null), null, null);?>
                                       <?php }} ?>
                                    <tr><td colspan="7">合计：&nbsp;&nbsp;&nbsp;
                                        购买花费:<span style="color: green"><?php echo $_smarty_tpl->getVariable('h_huas')->value;?>
</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        收取押金:<span style="color: red"><?php echo $_smarty_tpl->getVariable('s_huas')->value;?>
</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        退还押金:<span style="color: green"><?php echo $_smarty_tpl->getVariable('t_huas')->value;?>
</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        经费剩余:<span style="color: red"><?php echo $_smarty_tpl->getVariable('s_huas')->value-$_smarty_tpl->getVariable('h_huas')->value-$_smarty_tpl->getVariable('t_huas')->value;?>
</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                    </td></tr>
                    
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
