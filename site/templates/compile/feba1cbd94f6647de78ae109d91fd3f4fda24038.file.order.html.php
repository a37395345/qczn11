<?php /* Smarty version Smarty-3.0.4, created on 2020-02-20 13:33:16
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/questions/order.html" */ ?>
<?php /*%%SmartyHeaderCode:302415e4e1a1caab848-76809306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'feba1cbd94f6647de78ae109d91fd3f4fda24038' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/questions/order.html',
      1 => 1582176523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '302415e4e1a1caab848-76809306',
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
    <title>系统问题排行榜</title>

    <link rel="shortcut icon" href="favicon.ico">
    <link href="../../../crm1/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="../../../crm1/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="../../../crm1/css/animate.css" rel="stylesheet">
    <link href="../../../crm1/css/style.css?v=4.1.0" rel="stylesheet">
    <script type="text/javascript" src="../../../js/laydate/laydate.js"></script>
    <style>
        .timeline input {
            line-height: 10px !important;
        }
    </style>
</head>


<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">

    <!-- Panel Other -->
    <div class="ibox float-e-margins">

        <div class="ibox-content_a">
            <div class="row row-lg">
                <div class="col-sm-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>系统问题排行</h5>
                        </div>
                        <div class="ibox-content">
                            <table class="table table-bordered table-hover"
                                   data-height="400"
                                   style="margin-bottom:0px"
                                   data-mobile-responsive="true">
                                <thead>
                                <tr>
                                    <th style="text-align: center;" width="20%">排名</th>
                                    <th style="text-align: center;" width="40%">提交人</th>
                                    <th style="text-align: center;" width="40%">提交数</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('bugs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
                                <tr>
                                    <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)+1;?>
</td>
                                    <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
</td>
                                    <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['counts']) ? $_smarty_tpl->tpl_vars['row']->value['counts'] : null);?>
</td>
                                </tr>
                                <?php }} ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>系统建议排行</h5>
                        </div>
                        <div class="ibox-content">
                            <table class="table table-bordered table-hover"
                                   data-height="400"
                                   style="margin-bottom:0px"
                                   data-mobile-responsive="true">
                                <thead>
                                <tr>
                                    <th style="text-align: center;" width="20%">排名</th>
                                    <th style="text-align: center;" width="40%">提交人</th>
                                    <th style="text-align: center;" width="40%">提交数</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('advices')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
                                <tr>
                                    <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)+1;?>
</td>
                                    <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
</td>
                                    <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['counts']) ? $_smarty_tpl->tpl_vars['row']->value['counts'] : null);?>
</td>
                                </tr>
                                <?php }} ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>操作失误排行</h5>
                        </div>
                        <div class="ibox-content">
                            <table class="table table-bordered table-hover"
                                   data-height="400"
                                   style="margin-bottom:0px"
                                   data-mobile-responsive="true">
                                <thead>
                                <tr>
                                    <th style="text-align: center;" width="20%">排名</th>
                                    <th style="text-align: center;" width="40%">提交人</th>
                                    <th style="text-align: center;" width="40%">提交数</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('mistakes')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
                                <tr>
                                    <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)+1;?>
</td>
                                    <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
</td>
                                    <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['counts']) ? $_smarty_tpl->tpl_vars['row']->value['counts'] : null);?>
</td>
                                </tr>
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
