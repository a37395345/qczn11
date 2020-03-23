<?php /* Smarty version Smarty-3.0.4, created on 2020-03-20 15:24:58
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/zijia_linshi/zijia_yeji.html" */ ?>
<?php /*%%SmartyHeaderCode:247725e746fcabd1857-70427813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '037c1663d81dd6bbd69b3d303554b6c486e3f16e' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/zijia_linshi/zijia_yeji.html',
      1 => 1584684646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '247725e746fcabd1857-70427813',
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
        .timeline input{
            line-height: 10px!important;
        }
    </style>
</head>


<body class="gray-bg">
    <div id="back" style="width: 100%;height: 100%;z-index: 2;display: none;position: fixed;text-align: center;padding-top: 10px;">
        <a href="javascript:hidden();" class="btn btn-outline btn-default" style="background-color: #293846;float: right;margin-right: 6%;font-size: 18px;">
            X
        </a>
        <div style="width: 80%;height: 500px;margin: 0px auto;">     
            <video id="course" src="
https://gfjugyu.oss-cn-shanghai.aliyuncs.com/%E4%B8%B4%E6%97%B6%E8%87%AA%E9%A9%BE%20%282%29.mp4" controls playsinline="true"></video>
        </div>
    </div>
     <div class="wrapper wrapper-content animated fadeInRight" style="z-index: 1;">
        
        <!-- Panel Other -->
        <div class="ibox float-e-margins" >
            <div class="ibox-title" style="    padding-top: 5px">
                <h5 style="padding-top: 10px">临时自驾业绩排行榜&nbsp;&nbsp;<a style="float: right;margin-top: -9px;" href="javascript:play();" class="btn btn-outline btn-default">
                使用教程
            </a></h5>
            </div>

 <form id="form1" action="zijia_list.php?task=zijia_yeji" method="post">

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
                                            
                                            <td class="timeline" width="35%">
                                                 <input name="paiche_startDate" placeholder="请输入日期" value="" class="laydate-icon form-control input-sm" onclick="laydate({istime: true, format: 'YYYY-MM-DD 00:00:00'})" unselectable="on" readonly>


                                               
                                            </td>
                                             <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000">&nbsp;&nbsp;&nbsp;&nbsp;结束时间:</span>
                                            </th>
                                            <td class="timeline" width="35%">
                                                <input name="paiche_endDate" placeholder="请输入日期" value="" class="laydate-icon form-control input-sm" onclick="laydate({istime: true, format: 'YYYY-MM-DD 23:59:59'})" unselectable="on" readonly>
                                            </td>
                                            
                                        </tr>

                                  
                    <script>
                        laydate.render({
                              elem: '#test1',
                            });
                    </script>

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
                        <h5>当月门店临时自驾租车业绩排行榜</h5>
                        
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
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                       <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('list')->value['shop_list']) ? $_smarty_tpl->getVariable('list')->value['shop_list'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                                            
                                            
                                        </tr>
                                        <?php }?>
                                        <?php }} ?>
                                         <tr style="background-color: red;
    color: #ffffff;">
                                            <td style="text-align: center;">总计：</td>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->getVariable('list')->value['z_money']) ? $_smarty_tpl->getVariable('list')->value['z_money'] : null);?>
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
                        <h5>年度门店临时自驾租车业绩排行榜</h5>
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
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('list_a')->value['shop_list']) ? $_smarty_tpl->getVariable('list_a')->value['shop_list'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                                            
                                            
                                        </tr>
                                        <?php }?>
                                        <?php }} ?>
                                        <tr style="background-color: red;
    color: #ffffff;">
                                            <td style="text-align: center;">总计：</td>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;"><?php echo (isset($_smarty_tpl->getVariable('list_a')->value['z_money']) ? $_smarty_tpl->getVariable('list_a')->value['z_money'] : null);?>
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
                        <h5>当月租车部同事临时自驾租车业绩排行榜</h5>
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
                        <h5>当月租车部同事临时自驾租车优惠排行榜</h5>
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
                                            <th style="text-align: center;">优惠金额</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('emp_youhui')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                        <h5>当月门店临时自驾租车优惠排行榜</h5>
                        
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
                                            <th style="text-align: center;">优惠金额</th>
                    
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $_smarty_tpl->tpl_vars['smoney'] = new Smarty_variable(0, null, null);?>
                                       <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shop_youhui')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                       
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
                                            <td style="text-align: center;"><?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['money']) ? $_smarty_tpl->tpl_vars['rows']->value['money'] : null)>0){?><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['money']) ? $_smarty_tpl->tpl_vars['rows']->value['money'] : null);?>
<?php }else{ ?>0.00<?php }?></td>
                                           
                                        </tr>
                                        <?php $_smarty_tpl->tpl_vars['smoney'] = new Smarty_variable($_smarty_tpl->getVariable('smoney')->value+(isset($_smarty_tpl->tpl_vars['rows']->value['money']) ? $_smarty_tpl->tpl_vars['rows']->value['money'] : null), null, null);?>
                                        <?php }} ?>
                                         <tr style="background-color: red;
    color: #ffffff;">
                                            <td style="text-align: center;">总计：</td>
                                            <td style="text-align: center;"></td>
                                            <td style="text-align: center;"><?php echo number_format($_smarty_tpl->getVariable('smoney')->value,2);?>
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
                        <h5>租车部提成计算表</h5>
                        
                    </div>
                    <div class="ibox-content">
                        <table class="table table-bordered table-hover" 
                                       data-height="400"
                                       style="margin-bottom:0px"
                                       data-mobile-responsive="true">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;" width="50%">门店营业额</th>
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


<script type="text/javascript">
     var v = document.getElementById("course");
    function play(){
        $('#back').css('display',"block");
        $("#back").css("background-color","rgba(0,0,0,0.9)");
        $('body').css('overflow','hidden');
        v.play();
    }

    function hidden(){
        $('#back').css('display',"none");
        $('body').css('overflow','visible');
        v.pause();
    }
</script>









        
           
           
        
 
      
            

        
        
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
