<?php /* Smarty version Smarty-3.0.4, created on 2020-01-04 14:43:01
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/beiyongjin/index.html" */ ?>
<?php /*%%SmartyHeaderCode:244515e1033f50d6db8-68937191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26c7b6652c61da9853bfc232429228d54afe0aed' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/beiyongjin/index.html',
      1 => 1578120115,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '244515e1033f50d6db8-68937191',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>备用金管理</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">
    <style>
       @media (max-width: 768px){
        .ibox-tools a {
            cursor: pointer;
            margin-left: 10px!important;
            color: #c4c4c4;
            float: right;
            }
       }
       
    </style>
    <link rel="shortcut icon" href="favicon.ico"> <link href="../../../crm1/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="../../../crm1/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="../../../crm1/css/animate.css" rel="stylesheet">
    <link href="../../../crm1/css/style.css?v=4.1.0" rel="stylesheet">
    <link href="../../../css/conmone.css" rel="stylesheet">
     <script type="text/javascript" src="../../../js/jquery.js">
</script>
    <link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css?a=2" rel="stylesheet">
    <script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js?a=5"></script>
    <script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN1.js?a=101"></script>

</head>

<body class="gray-bg">
     <div class="wrapper wrapper-content animated fadeInRight">
        
        <!-- Panel Other -->
        <div class="ibox float-e-margins" >
            <div class="ibox-title" style="    padding-top: 5px">
                <h5 style="padding-top: 10px">备用金管理</h5>

                <?php if ($_smarty_tpl->getVariable('dakuan')->value==1){?>
                <div class="ibox-tools" style="margin-left: 40px;">
                    <a class="btn btn-outline btn-default" href="javascript:;" onclick="dakuan();return false">
                        打款备用金
                    </a>
                </div>
                <?php }?>
                <?php if ($_smarty_tpl->getVariable('guihuan')->value==1){?>
                <div class="ibox-tools" style="margin-left: 40px;">
                    <a class="btn btn-outline btn-default" href="javascript:;" onclick="guihuan();return false">
                        备用金归还
                    </a>
                </div>
                <?php }?>
                <?php if ($_smarty_tpl->getVariable('jk_index')->value==1){?>
                <div class="ibox-tools" style="margin-left: 40px;">
                    <a class="btn btn-outline btn-default" href="index.php?task=jk_index">
                        借款管理
                    </a>
                </div>
                <?php }?>
                
            </div>


            <div class="ibox-content_a">
                <div class="row row-lg">


                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="ibox float-e-margins">
                             <div class="ibox-title">
                                <h5>备用金收支总计</h5>
                        
                            </div>
                            <div class="ibox-content">
                                
                                <table class="table table-bordered table-hover" 
                                       data-height="400"
                                       style="margin-bottom:0px"
                                       data-mobile-responsive="true">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">打款备用金总额</th>
                                            <th style="text-align: center;">备用金归还总额</th>
                                            <th style="text-align: center;">借款金额</th>
                                            <th style="text-align: center;">已还金额</th>
                                            <th style="text-align: center;">备用金剩余</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        <tr>
                                            <td style="text-align: center;"><?php echo $_smarty_tpl->getVariable('dk')->value;?>
</td>
                                            <td style="text-align: center;"><?php echo $_smarty_tpl->getVariable('gh')->value;?>
</td>
                                            <td style="text-align: center;"><?php echo $_smarty_tpl->getVariable('jie')->value;?>
</td>
                                            <td style="text-align: center;"><?php echo $_smarty_tpl->getVariable('huan')->value;?>
</td>
                                            <td style="text-align: center;"><?php echo $_smarty_tpl->getVariable('zongji')->value;?>
</td>
                                            

                                        </tr>
                                        

                                   
                    
                                    </tbody>
                                </table>
                            
                                
                                
                            </div>
                        </div>
                        <!-- End Example Events -->
                    </div>


                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="ibox float-e-margins">
                             <div class="ibox-title">
                                <h5>备用金收支详细</h5>
                            </div>
                            <div class="ibox-content">
                                <table class="table table-bordered table-hover" 
                                       data-height="400"
                                       style="margin-bottom:0px"
                                       data-mobile-responsive="true">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">名称</th>
                                            <th style="text-align: center;">金额</th>
                                            <th style="text-align: center;">操作人</th>
                                            <th style="text-align: center;">操作时间</th>
                                            <th style="text-align: center;">方式</th>
                                            <th style="text-align: center;">账户</th>
                                            
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
                                        <tr>
                                            <td style="text-align: center;"><?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['type_id']) ? $_smarty_tpl->tpl_vars['rows']->value['type_id'] : null)==1){?>备用金归还<?php }else{ ?>打款备用金<?php }?></td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['money']) ? $_smarty_tpl->tpl_vars['rows']->value['money'] : null)*-1;?>
</td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_name']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_name'] : null);?>
</td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['add_time']) ? $_smarty_tpl->tpl_vars['rows']->value['add_time'] : null);?>
</td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_name']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_name'] : null);?>
</td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bank_name']) ? $_smarty_tpl->tpl_vars['rows']->value['bank_name'] : null);?>
</td>
                                           
                                        </tr>
                                        
                                        <?php }} ?>

                                        
                    
                                    </tbody>
                                </table>
                            
                                
                                
                            </div>
                        </div>
                        <!-- End Example Events -->
                    </div>


                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="ibox float-e-margins">
                             <div class="ibox-title">
                                <h5>未全部归还的备用金</h5>

                            </div>
                            <div class="ibox-content">
                                
                                <table class="table table-bordered table-hover" 
                                       data-height="400"
                                       style="margin-bottom:0px"
                                       data-mobile-responsive="true">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">借款人</th>
                                            <th style="text-align: center;">借款金额</th>
                                            <th style="text-align: center;">已还金额</th>
                                            <th style="text-align: center;">欠款</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $_smarty_tpl->tpl_vars['borrow_money'] = new Smarty_variable(0, null, null);?>
                                        <?php $_smarty_tpl->tpl_vars['borrow_Returnmoney'] = new Smarty_variable(0, null, null);?>
                                       <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                        <tr>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_name']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_name'] : null);?>
</td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['borrow_money']) ? $_smarty_tpl->tpl_vars['rows']->value['borrow_money'] : null);?>
</td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['borrow_Returnmoney']) ? $_smarty_tpl->tpl_vars['rows']->value['borrow_Returnmoney'] : null);?>
</td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['borrow_money']) ? $_smarty_tpl->tpl_vars['rows']->value['borrow_money'] : null)-(isset($_smarty_tpl->tpl_vars['rows']->value['borrow_Returnmoney']) ? $_smarty_tpl->tpl_vars['rows']->value['borrow_Returnmoney'] : null);?>
</td>
                                           
                                        </tr>
                                        <?php $_smarty_tpl->tpl_vars['borrow_money'] = new Smarty_variable($_smarty_tpl->getVariable('borrow_money')->value+(isset($_smarty_tpl->tpl_vars['rows']->value['borrow_money']) ? $_smarty_tpl->tpl_vars['rows']->value['borrow_money'] : null), null, null);?>
                                        <?php $_smarty_tpl->tpl_vars['borrow_Returnmoney'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars['rows']->value['borrow_Returnmoney']) ? $_smarty_tpl->tpl_vars['rows']->value['borrow_Returnmoney'] : null)+$_smarty_tpl->getVariable('borrow_Returnmoney')->value, null, null);?>
                                        <?php }} ?>

                                        <tr style="background-color: red;color: #ffffff">
                                            <td style="text-align: center;">合计：</td>
                                            
                                            <td style="text-align: center;"><?php echo $_smarty_tpl->getVariable('borrow_money')->value;?>
</td>
                                            <td style="text-align: center;"><?php echo $_smarty_tpl->getVariable('borrow_Returnmoney')->value;?>
</td>
                                            <td style="text-align: center;"><?php echo $_smarty_tpl->getVariable('borrow_money')->value-$_smarty_tpl->getVariable('borrow_Returnmoney')->value;?>
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
    <script src="../../../crm1/js/bootstrap.min.js?v=3.3.6"></script>
    <!-- Bootstrap-Treeview plugin javascript -->
<script src="../../../crm1/js/plugins/treeview/bootstrap-treeview.js"></script>

    <!-- 自定义js -->
    <script>
        var body_W = $("body").width();
        function setBody_W(){
            body_W = $("body").width();
        }
        function guihuan(){
            setBody_W();
            demo_iframe('index.php?task=guihuan','备用金归还',body_W,500,'login_js');
        }
        function dakuan(){
            setBody_W();
            demo_iframe('index.php?task=dakuan','打款备用金',body_W,500,'login_js');
        }
        
    </script>



  
    
    

</body>

</html>
