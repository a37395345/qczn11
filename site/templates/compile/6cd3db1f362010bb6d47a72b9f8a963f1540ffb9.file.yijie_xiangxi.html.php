<?php /* Smarty version Smarty-3.0.4, created on 2020-03-03 18:55:02
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/daijia_linshi/yijie_xiangxi.html" */ ?>
<?php /*%%SmartyHeaderCode:208105e5e37864a3324-00828477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cd3db1f362010bb6d47a72b9f8a963f1540ffb9' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/daijia_linshi/yijie_xiangxi.html',
      1 => 1583232899,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208105e5e37864a3324-00828477',
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


    <title>企业结账记录</title>
    <link rel="shortcut icon" href="favicon.ico">
<link href="../../../crm/fonts1/iconfont.css?a=2" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico"> <link href="../../../crm1/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="../../../crm1/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="../../../crm1/css/animate.css" rel="stylesheet">
    <link href="../../../crm1/css/style.css?v=4.1.0" rel="stylesheet">
    <link href="../../../crm1/css/plugins/treeview/bootstrap-treeview.css" rel="stylesheet">

    <link href="../../../crm/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <script src="../../../crm/js/plugins/sweetalert/sweetalert.min.js"></script>



    <script type="text/javascript" src="../../../js/jquery.js">
</script>
    <link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css?a=2" rel="stylesheet">
    <script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js?a=5"></script>
    <script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js?a=1"></script>
</head>

<body class="gray-bg">
    <div class="row wrapper wrapper-content animated fadeInRight">
        
       
            <div class="ibox float-e-margins" >
                 <div class="ibox-title">
                <h5>临时代驾企业结账记录 </br> 
                </h5>
               </div>
               
            </div>
             
            <form method="post" action="index.php?task=jiesuan_action" name="form1">
                <div class="ibox-content">
                <div class="row row-lg">
                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="example-wrap">
                            <div class="example">
                            <input type="hidden" name="type" id="type" value="<?php echo $_smarty_tpl->getVariable('type')->value;?>
">
            <table class="table table-bordered table-hover" data-height="400" style="margin-bottom:0px" data-mobile-responsive="true">
                            <thead>
                            <tr>
                                
                                <th style="text-align: center;width: 10%">
                                    合同号
                                </th>
                                
                                <th style="text-align: center;width: 25%">
                                    用车时间
                                </th>
                                <th style="text-align: center;width: 15%">
                                    行程备注
                                </th>
                                <th style="text-align: center;width: 13%">
                                    结账时间
                                </th>
                                <th style="text-align: center;width: 8%">
                                    发票号码
                                </th>
                                <th style="text-align: center;width: 7%">
                                    发票金额
                                </th>
                                <th style="text-align: center;width: 7%">
                                    应收金额
                                </th>
                                <th style="text-align: center;width: 7%">
                                    已收金额
                                </th>
                                <th style="width: 8%">
                                    <div align="center">
                                        详细
                                    </div>
                                </th>
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
                            <tr>
                                <td style="text-align: center;">
                                   <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['rows']->value['paiche_contractNum'] : null);?>

                                </td>
                                <td style="text-align: center;">
                                   <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['rows']->value['paiche_startDate'] : null);?>
~~ <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['rows']->value['paiche_startDate'] : null);?>

                                </td>
                                <td style="text-align: center;">
                                   <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['paiche_line']) ? $_smarty_tpl->tpl_vars['rows']->value['paiche_line'] : null);?>
&nbsp;&nbsp;&nbsp; <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['paiche_specialRemarks']) ? $_smarty_tpl->tpl_vars['rows']->value['paiche_specialRemarks'] : null);?>

                                </td>
                                <td style="text-align: center;">
                                   <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['qiye_num_time']) ? $_smarty_tpl->tpl_vars['rows']->value['qiye_num_time'] : null);?>

                                </td>
                                <td style="text-align: center;">
                                   <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['xuhao']) ? $_smarty_tpl->tpl_vars['rows']->value['xuhao'] : null);?>

                                </td>
                                <td style="text-align: center;">
                                   <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['money']) ? $_smarty_tpl->tpl_vars['rows']->value['money'] : null);?>

                                </td>
                                <td style="text-align: center;">
                                   <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['money_a']) ? $_smarty_tpl->tpl_vars['rows']->value['money_a'] : null);?>

                                </td>
                                <td style="text-align: center;">
                                   <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['money_b']) ? $_smarty_tpl->tpl_vars['rows']->value['money_b'] : null);?>

                                </td>
                                <td style="text-align: center;">
                                  <a href="index.php?task=mingxi&pid=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['rows']->value['paiche_id'] : null);?>
" title="明细" style="color:#CC6600" target="_blank">
                                          <i class="iconfont icon-mingxi1" aria-hidden="true"></i>
                                   </a>
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
        </form>
    </div>
    </div>
    <!-- 全局js -->
    
    <script src="../../../crm1/js/bootstrap.min.js?v=3.3.6"></script>
    <!-- Bootstrap-Treeview plugin javascript -->
    <script src="../../../crm1/js/plugins/treeview/bootstrap-treeview.js"></script>


</body>
</html>
