<?php /* Smarty version Smarty-3.0.4, created on 2020-03-19 15:47:43
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/car/yilan.html" */ ?>
<?php /*%%SmartyHeaderCode:110615e73239f07be46-23097262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2234c21a1fd672505c4b8bdb5238a1d0fc3f564b' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/car/yilan.html',
      1 => 1584604053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110615e73239f07be46-23097262',
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
    <div id="back" style="width: 100%;height: 100%;z-index: 2;display: none;position: fixed;text-align: center;padding-top: 10px;">
        <a href="javascript:hidden();" class="btn btn-outline btn-default" style="background-color: #293846;float: right;margin-right: 6%;font-size: 18px;">
            X
        </a>
        <div style="width: 80%;height: 500px;margin: 0px auto;">     
            <video id="course" src="

https://gfjugyu.oss-cn-shanghai.aliyuncs.com/%E8%BD%A6%E8%BE%86%E7%8A%B6%E5%86%B55.mp4" controls playsinline="true"></video>
        </div>
    </div>
     <div class="wrapper wrapper-content animated fadeInRight" style="z-index: 1;">
        
        <!-- Panel Other -->
        <div class="ibox float-e-margins" >
            <div class="ibox-title" style="    padding-top: 5px">
                <h5 style="padding-top: 10px">车辆当前状况一览表&nbsp;&nbsp;<a style="float: right;margin-top: -9px;" href="javascript:play();" class="btn btn-outline btn-default">
                使用教程
            </a></h5>

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
                                        <th style="text-align: center;">待维修车辆</th>
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
                                            <a href="index.php?task=carrun&status=4"><?php echo (isset($_smarty_tpl->getVariable('car')->value['dwx']) ? $_smarty_tpl->getVariable('car')->value['dwx'] : null);?>
</a>
                                         </td>
									     <td style="text-align: center;">
									     	<a href="index.php?task=carrun&status=2"><?php echo (isset($_smarty_tpl->getVariable('car')->value['wnum']) ? $_smarty_tpl->getVariable('car')->value['wnum'] : null);?>
</a>
									     </td>
									     <td style="text-align: center;">
									     	<a href="index.php?task=carrun&status=3"><?php echo (isset($_smarty_tpl->getVariable('car')->value['ynum']) ? $_smarty_tpl->getVariable('car')->value['ynum'] : null);?>
</a>
									     </td>
									    
                                       
                                       
                    					</tr>
                                    </tbody>
                                </table>

                    </div>
                </div>
            </div>



            <div class="col-sm-12">
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
                                        <tr style="text-align: center;">
                                        	<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('car')->value['zlist']) ? $_smarty_tpl->getVariable('car')->value['zlist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                        		<th style="width: 12.5%;text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>
</th>
                                        	<?php }} ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<tr style="text-align: center;">
                                    	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('car')->value['zlist']) ? $_smarty_tpl->getVariable('car')->value['zlist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
									     <td style="width: 12.5%;text-align: center;">
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


            <div class="col-sm-12">
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
                                        <tr style="text-align: center;">
                                        	<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('car')->value['klist']) ? $_smarty_tpl->getVariable('car')->value['klist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                        		<th style="width: 12.5%;text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>
</th>
                                        	<?php }} ?> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<tr style="text-align: center;">
                                    	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('car')->value['klist']) ? $_smarty_tpl->getVariable('car')->value['klist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
									     <td style="width: 12.5%;text-align: center;">
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
  
    
    

</body>

</html>
