<?php /* Smarty version Smarty-3.0.4, created on 2020-03-16 10:35:30
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/daijia_linshi/mingxi.html" */ ?>
<?php /*%%SmartyHeaderCode:92995e6ee5f2bcc270-10297012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58191e6a80ba6b2182a3aad84e4525abc684554e' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/daijia_linshi/mingxi.html',
      1 => 1584171601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92995e6ee5f2bcc270-10297012',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>订单详情</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="../../../crm1/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="../../../crm1/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="../../../crm1/css/animate.css" rel="stylesheet">
    <link href="../../../crm1/css/style.css?v=4.1.0" rel="stylesheet">
    <link href="../../../crm1/css/idangerous.swiper.css" rel="stylesheet">
    <link href="../../../crm1/css/idangerous.swiper.scrollbar.css" rel="stylesheet">
    <link href="../../../css/conmone.css" rel="stylesheet">
    <script type="text/javascript" src="../../../js/jquery.js"></script>
     <link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css?a=2" rel="stylesheet">
    <script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js?a=6"></script>
    <script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN1.js?a=101"></script>
    <style>
        .dl-horizontal dd{
                height: 26px;
            }
        @media(max-width: 768px){
            .zijia_title h2{
                font-size:16px;
                color: #615555;
            }
            .dl-horizontal dt{
                display: inline-block;
                float:left;
            }
            .dl-horizontal dd{
                height: 26px;
            }
            .tab-pane{
                width:1000px;
                overflow-x: hidden;
            }
            .tab-pane tr th{
                width: 3%!important;
            }
        }
    </style>
</head>

<body class="gray-bg">
    <div class="row">
        <div class="col-sm-12">
            <div class="wrapper wrapper-content animated fadeInUp">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="m-b-md zijia_title">
                                    <h2>运河租车临时代驾 &nbsp;&nbsp;&nbsp;<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_contractNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_contractNum'] : null);?>
</h2>
                                </div>
                                <dl class="dl-horizontal">
                                    <dt>状态：</dt>
                                    <dd><span class="label label-primary">
                                    <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_jie']) ? $_smarty_tpl->getVariable('list')->value['paiche_jie'] : null)==-3){?>取消
                                    <?php }elseif((isset($_smarty_tpl->getVariable('list')->value['paiche_jie']) ? $_smarty_tpl->getVariable('list')->value['paiche_jie'] : null)==-2){?>违约
                                    <?php }elseif((isset($_smarty_tpl->getVariable('list')->value['paiche_jie']) ? $_smarty_tpl->getVariable('list')->value['paiche_jie'] : null)==-1){?>预约
                                    <?php }elseif((isset($_smarty_tpl->getVariable('list')->value['paiche_jie']) ? $_smarty_tpl->getVariable('list')->value['paiche_jie'] : null)==1){?>调车未还
                                    <?php }elseif((isset($_smarty_tpl->getVariable('list')->value['paiche_jie']) ? $_smarty_tpl->getVariable('list')->value['paiche_jie'] : null)==2){?>还车未结账
                                    <?php }elseif((isset($_smarty_tpl->getVariable('list')->value['paiche_jie']) ? $_smarty_tpl->getVariable('list')->value['paiche_jie'] : null)==3){?>已结账
                                    <?php }?>

                                </span>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <dl class="dl-horizontal">

                                    <dt>业务归属门店：</dt>
                                    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['ywshopname']) ? $_smarty_tpl->getVariable('list')->value['ywshopname'] : null);?>
</dd>
                                    <dt>业务员：</dt>
                                    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['yewuyuan']) ? $_smarty_tpl->getVariable('list')->value['yewuyuan'] : null);?>
</dd>
                                    <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_jie']) ? $_smarty_tpl->getVariable('list')->value['paiche_jie'] : null)>=0){?>
                                    <dt>调度人：</dt>
                                    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['shop_name']) ? $_smarty_tpl->getVariable('list')->value['shop_name'] : null);?>
</dd>
                                    <?php }?>
                                </dl>
                            </div>
                            <div class="col-sm-7" id="cluster_info">
                                <dl class="dl-horizontal">
                                    <dt>用车开始时间：</dt>
                                    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate'] : null);?>
</dd>
                                    <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_jie']) ? $_smarty_tpl->getVariable('list')->value['paiche_jie'] : null)<=1){?>
                                    <dt>用车结束时间：</dt>
                                    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_endDate']) ? $_smarty_tpl->getVariable('list')->value['paiche_endDate'] : null);?>
</dd>
                                    <?php }?>
                                    <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_jie']) ? $_smarty_tpl->getVariable('list')->value['paiche_jie'] : null)>=0){?>
                                    <dt>调度时间：</dt>
                                    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_dispatchTimes']) ? $_smarty_tpl->getVariable('list')->value['paiche_dispatchTimes'] : null);?>
</dd>
                                    <?php }?>
                                    
                                    <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_jie']) ? $_smarty_tpl->getVariable('list')->value['paiche_jie'] : null)>1){?>
                                    
                                    <dt>实际还车时间：</dt>
                                    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_endDate']) ? $_smarty_tpl->getVariable('list')->value['settle_endDate'] : null);?>
</dd>
                                    <?php }?>
                                    <dt>用车备注：</dt>
                                    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_specialRemarks']) ? $_smarty_tpl->getVariable('list')->value['paiche_specialRemarks'] : null);?>
</dd>
                               
                                </dl>
                            </div>
                        </div>
                        
                        <div class="row m-t-sm" style="overflow: hidden;overflow-x: auto;">
                            <div class="col-sm-12">
                                <div class="panel blank-panel">
                                    <div class="panel-heading">
                                        <div class="panel-options">
                                            <ul class="nav nav-tabs">
                                                <li><a href="javascript:;" data-toggle="tab">客户信息</a>
                                                </li>

                                                <li class=""><a href="javascript:;" data-toggle="tab">租赁费用列表</a>
                                                </li>

                                                <li class=""><a href="javascript:;" data-toggle="tab">收款/支出记录</a>
                                                </li>
                                            <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_pintaiid']) ? $_smarty_tpl->getVariable('list')->value['paiche_pintaiid'] : null)!=2){?>
                                                <li class=""><a href="javascript:;" data-toggle="tab">出车记录</a>
                                                </li>

                                                <li class=""><a href="javascript:;" data-toggle="tab">违章记录</a>
                                                </li>
                                            <?php }?>
                                                <li class=""><a href="javascript:;" data-toggle="tab">开票记录</a>
                                                </li>
                                                <li class=""><a href="javascript:;" data-toggle="tab">其他约定条款</a>
                                                </li>


                                                 <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_jie']) ? $_smarty_tpl->getVariable('list')->value['paiche_jie'] : null)==3){?>
                                                <li class=""><a href="javascript:;" data-toggle="tab">订单审核状态</a>
                                                </li>
                                                <?php }?>
                                                
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body1">

                                        <div class="tab-content">
                                            <div class="tab-pane active">
                                                <div class="feed-activity-list">
                                                    <div class="feed-element">
                                                        <div class="media-body ">
                                                           <br/><br/>
                                                           <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_kehu']) ? $_smarty_tpl->getVariable('list')->value['paiche_kehu'] : null)==1){?>
                                                              
                                                               联系人姓名：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linker']) ? $_smarty_tpl->getVariable('list')->value['paiche_linker'] : null);?>

                                                               <br/><br/>
                                                               联系人联系电话：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerPhone']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerPhone'] : null);?>

                                                            <?php }elseif((isset($_smarty_tpl->getVariable('list')->value['paiche_kehu']) ? $_smarty_tpl->getVariable('list')->value['paiche_kehu'] : null)==2){?>
                                                                所属公司：<?php echo (isset($_smarty_tpl->getVariable('list')->value['client_name']) ? $_smarty_tpl->getVariable('list')->value['client_name'] : null);?>

                                                               <br/><br/>
                                                               联系人姓名：<?php echo (isset($_smarty_tpl->getVariable('list')->value['zemp_name']) ? $_smarty_tpl->getVariable('list')->value['zemp_name'] : null);?>

                                                               <br/><br/>
                                                               联系人联系电话：<?php echo (isset($_smarty_tpl->getVariable('list')->value['phone']) ? $_smarty_tpl->getVariable('list')->value['phone'] : null);?>

                                                               <br/><br/>
                                                               公司地址：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerAdd']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerAdd'] : null);?>

                                                            <?php }else{ ?>
                                                                所属公司：<?php echo (isset($_smarty_tpl->getVariable('list')->value['bro_name']) ? $_smarty_tpl->getVariable('list')->value['bro_name'] : null);?>

                                                               <br/><br/>
                                                               联系人姓名：<?php echo (isset($_smarty_tpl->getVariable('list')->value['bro_linker']) ? $_smarty_tpl->getVariable('list')->value['bro_linker'] : null);?>

                                                               <br/><br/>
                                                               联系人联系电话：<?php echo (isset($_smarty_tpl->getVariable('list')->value['bro_phone']) ? $_smarty_tpl->getVariable('list')->value['bro_phone'] : null);?>

                                                               
                                                            <?php }?>
                                                           <br/><br/>
                                                        </div>
                                                        
                                                    </div>
                                                </div>

                                            </div>


                          

                                            <div class="tab-pane">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                    <th width="16%">收费项目</th>
                                                                    <th width="16%">收费金额</th>
                                                                    <th width="16%">已收金额</th>
                                                    
                                                                    <th width="16%">操作时间</th>
                                                                    <th width="16%">操作人</th>
                                                                    <th width="20%">备注</th> 
                                                     
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('chargelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
                                                          <tr >
                                                                <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null);?>
</td>
                                                                <td ><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null);?>
</td>
                                                                <td ><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
</td>
                                                                
                                                                <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['addtime']) ? $_smarty_tpl->tpl_vars['row']->value['addtime'] : null);?>
</td>
                                                                <td>
                                                                <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</td>
                                                                <td>
                                                                    <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null)=="其他费用"){?>
                                                                        <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_remarks']) ? $_smarty_tpl->tpl_vars['row']->value['charge_remarks'] : null);?>

                                                                    <?php }else{ ?>
                                                                    
                                                                <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['continuerent_start']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_start'] : null)&&(isset($_smarty_tpl->tpl_vars['row']->value['continuerent_end']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_end'] : null)){?>
                                                                <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_start']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_start'] : null);?>
~<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_end']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_end'] : null);?>

                                                                <?php }?>
    
                                                                <?php }?>
                                                            </td>      
                                                         </tr>
                                                         <?php }} ?>


                                                                                                                   
    
    
                                                       
                    
                                                        </tbody>
                                                    </table>
                                                    <?php if ($_smarty_tpl->getVariable('youhui_list')->value){?>
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                    <th width="16%">优惠项目</th>
                                                                    <th width="16%">优惠金额</th>
                                                                    <th width="16%">已优惠金额</th>
                                                                     
                                                                    <th width="16%">优惠时间</th>
                                                        
                                                                    
                                                                    <th width="16%">操作人</th>
                                                                     <th width="20%">优惠原因</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                             <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('youhui_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
                                                          <tr >
                                                                <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_name']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_name'] : null);?>
</td>
                                                                <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_mone']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_mone'] : null);?>
</td>
                                                                <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_omone']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_omone'] : null);?>
</td>
                    
                                                                <td>
                                                                    <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_addtime']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_addtime'] : null);?>

                                                                </td>
                                                                <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</td>
                                                                <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_liyou']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_liyou'] : null);?>
</td>
                                                                 
                                                                
                                                         </tr>
                                                         <?php }} ?>
                                                        </tbody>
                                                    </table>
                                                    <?php }?>


                                                    <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_pintaiid']) ? $_smarty_tpl->getVariable('list')->value['paiche_pintaiid'] : null)==2&&$_smarty_tpl->getVariable('chargelist')->value){?>
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                    <th  width="16%">收费项目</th>
                                                                    <th  width="16%">调车公司报价</th>
                                                                    <th  width="16%">已收</th>
                                                                    <th  width="16%">操作时间</th>
                                                                    <th  width="16%">操作人</th>
                                                                    <th  width="20%">备注</th> 
                                                     
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('chargelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
                                                          <tr >
                                                                <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null);?>
</td>
                                                                <td ><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_freeze_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_freeze_money'] : null);?>
</td>
                                                                <td ><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null);?>
</td>
                                                                   
                                                                <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['addtime']) ? $_smarty_tpl->tpl_vars['row']->value['addtime'] : null);?>
</td>
                                                                <td>
                                                                <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</td>
                                                                <td>
                                                                     <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null)=="其他费用"){?>
                                                                        <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_remarks']) ? $_smarty_tpl->tpl_vars['row']->value['charge_remarks'] : null);?>

                                                                    <?php }else{ ?>
                                                                    
                                                                <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['continuerent_start']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_start'] : null)&&(isset($_smarty_tpl->tpl_vars['row']->value['continuerent_end']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_end'] : null)){?>
                                                                <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_start']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_start'] : null);?>
~<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_end']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_end'] : null);?>

                                                                <?php }?>
    
                                                                <?php }?>
                                                            </td>      
                                                         </tr>
                                                         <?php }} ?>


                                                                                                                   
    
    
                                                       
                    
                                                        </tbody>
                                                    </table>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->getVariable('youhui_list')->value&&(isset($_smarty_tpl->getVariable('list')->value['paiche_pintaiid']) ? $_smarty_tpl->getVariable('list')->value['paiche_pintaiid'] : null)==2){?>
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                    <th  width="16%">优惠项目</th>
                                                                    <th  width="16%">调车公司报价优惠</th>
                                                                    <th  width="16%">调车公司报价已优惠</th>
                                                                    <th  width="16%">优惠时间</th>
                                                                   
                                                                    
                                                                    <th  width="16%">操作人</th>
                                                                     <th  width="20%">优惠原因</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                             <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('youhui_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
                                                          <tr >
                                                                <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_name']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_name'] : null);?>
</td>
                                                                
                                                                
                                                                    <td ><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_smoney']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_smoney'] : null);?>
</td>
                                                                    <td ><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_emoney']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_emoney'] : null);?>
</td>
                                                                   
                                                                <td>
                                                                    <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_addtime']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_addtime'] : null);?>

                                                                </td>
                                                                
                                                                 
                                                                <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</td>
                                                                <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_liyou']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_liyou'] : null);?>
</td>
                                                         </tr>
                                                         <?php }} ?>
                                                        </tbody>
                                                    </table>
                                                    <?php }?>
                                                </div>
                                                



                                            <div class="tab-pane">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>序号</th>
                                                            <th>时间</th>
                                                            <th>收入</th>
                                                            <th>支出</th>
                                                            <th>方式</th>
                                                            <th>账户</th>
                                                            <th>摘要</th>  
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, null);?>
                                                        <?php $_smarty_tpl->tpl_vars['f_money'] = new Smarty_variable(0, null, null);?><?php $_smarty_tpl->tpl_vars['z_money'] = new Smarty_variable(0, null, null);?>
                                                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('account_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
                                                        <tr>
                                                            <td>
                                                                <?php echo $_smarty_tpl->getVariable('i')->value;?>

                                                            </td>
                                                            <td>
                                                                <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['add_time']) ? $_smarty_tpl->tpl_vars['row']->value['add_time'] : null);?>

                                                            </td>
                                                           <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null)>0){?>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
</td>
                                                            <td>&nbsp;</td>
                                                                <?php $_smarty_tpl->tpl_vars['z_money'] = new Smarty_variable($_smarty_tpl->getVariable('z_money')->value+(isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null), null, null);?>
                                                            <?php }else{ ?>
                                                            <td>&nbsp;</td>
                                                            <td><?php echo -1*(isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
</td>
                                                                <?php $_smarty_tpl->tpl_vars['f_money'] = new Smarty_variable($_smarty_tpl->getVariable('f_money')->value+(-1*(isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null)), null, null);?>
                                                            <?php }?>
                                                            <td>
                                                                <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['payment_name']) ? $_smarty_tpl->tpl_vars['row']->value['payment_name'] : null);?>

                                                            </td>
                                                            <td>
                                                                <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_name']) ? $_smarty_tpl->tpl_vars['row']->value['bank_name'] : null);?>

                                                            </td>
                                                            <td>
                                                               <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
&nbsp;&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['remark']) ? $_smarty_tpl->tpl_vars['row']->value['remark'] : null);?>

                                                            </td>

                                                        </tr>
                                                        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->getVariable('i')->value+1, null, null);?>
                                                        <?php }} ?>

                                                        <tr>
                                                            <td colspan="7">

                                                                合计收入:<span style="color: red"><?php echo $_smarty_tpl->getVariable('z_money')->value;?>
</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                合计支出:<span style="color: green"><?php echo $_smarty_tpl->getVariable('f_money')->value;?>
</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                总计：<span style="color: <?php if (($_smarty_tpl->getVariable('z_money')->value-$_smarty_tpl->getVariable('f_money')->value)>=0){?>red<?php }else{ ?>green<?php }?>"><?php echo $_smarty_tpl->getVariable('z_money')->value-$_smarty_tpl->getVariable('f_money')->value;?>
</span>
                                                        
                                                        </td>
                                                    </tr>
                                                        
                                                    </tbody>
                                                </table>

                                            </div>
                                            
                                    <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_pintaiid']) ? $_smarty_tpl->getVariable('list')->value['paiche_pintaiid'] : null)!=2){?>
                                            <div class="tab-pane">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>序号</th>
                                                            <th>用车开始时间</th>
                                                            <th>用车结束时间</th>
                                                            <th>换前车辆</th>
                                                            <th>换后车辆</th>
                                                            <th>车辆起始的公里数</th>
                                                            <th>车辆结束的公里数</th>
                                                            <th>车辆行驶公里数</th>
                                                            <th>换车备注</th>
                                                            <th>调度人</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                       <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('changelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
                      <tr >
                            <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>

                            <td><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1==1){?>
                                    <?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate'] : null);?>

                               
                                <?php }else{ ?>
                                     <?php echo (isset($_smarty_tpl->getVariable('changelist')->value[$_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']-1]['changecar_times_all']) ? $_smarty_tpl->getVariable('changelist')->value[$_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']-1]['changecar_times_all'] : null);?>

                                <?php }?>
                            </td>
                            <td>
                                <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_times_all']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_times_all'] : null);?>

                            </td>
                            <td>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['carA']) ? $_smarty_tpl->tpl_vars['row']->value['carA'] : null);?>
</td>
                            <td>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['carB']) ? $_smarty_tpl->tpl_vars['row']->value['carB'] : null);?>
</td>
                            
                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_carAStartKilo']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_carAStartKilo'] : null);?>
</td>
                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_carAEndKilo']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_carAEndKilo'] : null);?>
</td>
                            
                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_carAEndKilo']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_carAEndKilo'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['changecar_carAStartKilo']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_carAStartKilo'] : null);?>
</td>
                           
                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_rentRemarks']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_rentRemarks'] : null);?>
</td>
                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecarMan']) ? $_smarty_tpl->tpl_vars['row']->value['changecarMan'] : null);?>
</td>

                            
                     </tr>
                     <?php }} ?>
                     <tr>
                         <td><?php echo count($_smarty_tpl->getVariable('changelist')->value)+1;?>
</td>
                         <?php if (count($_smarty_tpl->getVariable('changelist')->value)>0){?>
                            <td><?php echo (isset($_smarty_tpl->getVariable('changelist')->value[count($_smarty_tpl->getVariable('changelist')->value)-1]['changecar_times_all']) ? $_smarty_tpl->getVariable('changelist')->value[count($_smarty_tpl->getVariable('changelist')->value)-1]['changecar_times_all'] : null);?>
</td>
                         <?php }else{ ?>
                        <td> <?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate'] : null);?>
</td>
                             
                         <?php }?>
                        
                         <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_endDate']) ? $_smarty_tpl->getVariable('list')->value['settle_endDate'] : null);?>
</td>
                          <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_pintaiid']) ? $_smarty_tpl->getVariable('list')->value['paiche_pintaiid'] : null)==2){?>
                            <td>调车公司车辆</td>
                          <?php }else{ ?>
                         <td>苏D<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
</td>
                         <?php }?>
                         <td></td>
                         <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_startKm']) ? $_smarty_tpl->getVariable('list')->value['settle_startKm'] : null);?>
</td>

                         <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_endKm']) ? $_smarty_tpl->getVariable('list')->value['settle_endKm'] : null);?>
</td>
                         <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_endKm']) ? $_smarty_tpl->getVariable('list')->value['settle_endKm'] : null)-(isset($_smarty_tpl->getVariable('list')->value['settle_startKm']) ? $_smarty_tpl->getVariable('list')->value['settle_startKm'] : null);?>
</td>
                       
                         <td></td>
                         <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['jiedaiyuan']) ? $_smarty_tpl->getVariable('list')->value['jiedaiyuan'] : null);?>
</td>
                         
                     </tr>
                     <?php if ((isset($_smarty_tpl->getVariable('list')->value['settle_totalcalKm']) ? $_smarty_tpl->getVariable('list')->value['settle_totalcalKm'] : null)>0){?>
                     <tr>
                        <td rowspan="5">共计行驶：</td>
                         <td rowspan="5"><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_totalcalKm']) ? $_smarty_tpl->getVariable('list')->value['settle_totalcalKm'] : null);?>
&nbsp;&nbsp;公里</td>
                     </tr>
                     <?php }?>
                                                                          
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="tab-pane">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                                <th>序号</th>
                                                                <th>车辆</th>
                                                                <th>违章时间</th>
                                                                <th>违章项目</th>
                                                                <th>违章款</th>
                                                                <th>手续费</th>
                                                                <th>扣分</th>
                                                                <th>金额抵扣分</th>
                                                                <th>总金额</th>
                                                                <th>备注</th>
                                                                <th>冻结押金时间</th>
                                                                <th>处理时间</th>
                                                                <th>状态</th> 
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $_smarty_tpl->tpl_vars['sum_breakrules_money1'] = new Smarty_variable(0, null, null);?>
                                                        
                                                        <?php $_smarty_tpl->tpl_vars['sum_breakrules_money2'] = new Smarty_variable(0, null, null);?>
                                                        
                                                        <?php $_smarty_tpl->tpl_vars['sum_breakrules_money3'] = new Smarty_variable(0, null, null);?>
                                                        
                                                        <?php $_smarty_tpl->tpl_vars['sum_breakrules_money4'] = new Smarty_variable(0, null, null);?>
                                                        
                                                        <?php $_smarty_tpl->tpl_vars['sum_breakrules_money'] = new Smarty_variable(0, null, null);?>
                                                       <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('breakrules')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
                                                      <tr >
                                                            <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>
                                                            <td>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
</td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_date']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_date'] : null);?>
</td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_item']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_item'] : null);?>
</td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money1']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money1'] : null);?>
</td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money2']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money2'] : null);?>
</td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money3']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money3'] : null);?>
</td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money4']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money4'] : null);?>
</td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money'] : null);?>
</td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_remarks']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_remarks'] : null);?>
</td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_times']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_times'] : null);?>
</td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_endtimes']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_endtimes'] : null);?>
</td>
                                                            <td><a href="../machine/modify.php?task=breakdetail&amp;uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_id'] : null);?>
" target="_blank"><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['breakrules_end']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_end'] : null)==0){?>未处理<?php }else{ ?>已处理<?php }?></a></td>
                                                     </tr>
                                                    <?php $_smarty_tpl->tpl_vars['sum_breakrules_money'] = new Smarty_variable($_smarty_tpl->getVariable('sum_breakrules_money')->value+(isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money'] : null), null, null);?>
                                                    <?php $_smarty_tpl->tpl_vars['sum_breakrules_money1'] = new Smarty_variable($_smarty_tpl->getVariable('sum_breakrules_money1')->value+(isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money1']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money1'] : null), null, null);?>
                                                    <?php $_smarty_tpl->tpl_vars['sum_breakrules_money2'] = new Smarty_variable($_smarty_tpl->getVariable('sum_breakrules_money2')->value+(isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money2']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money2'] : null), null, null);?>
                                                    <?php $_smarty_tpl->tpl_vars['sum_breakrules_money3'] = new Smarty_variable($_smarty_tpl->getVariable('sum_breakrules_money3')->value+(isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money3']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money3'] : null), null, null);?>
                                                    <?php $_smarty_tpl->tpl_vars['sum_breakrules_money4'] = new Smarty_variable($_smarty_tpl->getVariable('sum_breakrules_money4')->value+(isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money4']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money4'] : null), null, null);?>
                                                     <?php }} ?>
                     <tr>
                        <td>共计：</td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td ><?php echo $_smarty_tpl->getVariable('sum_breakrules_money1')->value;?>
</td>
                         <td ><?php echo $_smarty_tpl->getVariable('sum_breakrules_money2')->value;?>
</td>
                         <td ><?php echo $_smarty_tpl->getVariable('sum_breakrules_money3')->value;?>
</td>
                         <td ><?php echo $_smarty_tpl->getVariable('sum_breakrules_money4')->value;?>
</td>
                         <td >
                            <?php echo $_smarty_tpl->getVariable('sum_breakrules_money')->value;?>
 

                         </td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                     </tr>
                                                       
                                                        
                                                    </tbody>
                                                </table>

                                            </div>








                                               
                                           

<?php }?>
                                                <div class="tab-pane">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                                <th width="15%">序号</th>
                                                                <th width="15%">开票金额</th>
                                                                <th width="15%">发票号码</th>
                                                                <th width="15%">备注</th>
                                                                <th width="15%">操作人</th>
                                                                <th width="20%">操作时间</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $_smarty_tpl->tpl_vars['zkaipiao'] = new Smarty_variable(0, null, null);?>
                                                       <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('kaipiao_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
                                                      <tr>
                                                        <td><?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)+1;?>
</td>
                                                          <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
</td>
                                                          <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['xuhao']) ? $_smarty_tpl->tpl_vars['row']->value['xuhao'] : null);?>
</td>
                                                          <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['liyou']) ? $_smarty_tpl->tpl_vars['row']->value['liyou'] : null);?>
</td>
                                                          <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</td>
                                                          <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['addtime']) ? $_smarty_tpl->tpl_vars['row']->value['addtime'] : null);?>
</td>
                                                      </tr>
                                                      <?php $_smarty_tpl->tpl_vars['zkaipiao'] = new Smarty_variable($_smarty_tpl->getVariable('zkaipiao')->value+(isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null), null, null);?>
                                                      <?php }} ?>
                                                      <tr><td>总计：<?php echo $_smarty_tpl->getVariable('zkaipiao')->value;?>
</td></tr>
                                                    </tbody>


                                                </table>
                                               
                                            </div>


                                            <div class="tab-pane">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                                <th width="20%">条款名称</th>
                                                                <th width="50%">详细</th>
                                                                
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_kehu']) ? $_smarty_tpl->getVariable('list')->value['paiche_kehu'] : null)==4){?>
                                                        <tr>
                                                          <td>
                                                            光宝约定
                                                        </td>
                                                          <td>地点：<?php echo (isset($_smarty_tpl->getVariable('client_price')->value['price_area']) ? $_smarty_tpl->getVariable('client_price')->value['price_area'] : null);?>
&nbsp;&nbsp;车型：<?php echo (isset($_smarty_tpl->getVariable('client_price')->value['price_carmodel']) ? $_smarty_tpl->getVariable('client_price')->value['price_carmodel'] : null);?>
&nbsp;&nbsp;行程：<?php echo (isset($_smarty_tpl->getVariable('client_price')->value['price_line']) ? $_smarty_tpl->getVariable('client_price')->value['price_line'] : null);?>
&nbsp;&nbsp;
                                            价格：<?php echo (isset($_smarty_tpl->getVariable('client_price')->value['price']) ? $_smarty_tpl->getVariable('client_price')->value['price'] : null);?>
&nbsp;&nbsp;
                                            等车费：<?php echo (isset($_smarty_tpl->getVariable('client_price')->value['price_wait1']) ? $_smarty_tpl->getVariable('client_price')->value['price_wait1'] : null);?>
&nbsp;&nbsp;
                                            过夜等车费：<?php echo (isset($_smarty_tpl->getVariable('client_price')->value['price_wait2']) ? $_smarty_tpl->getVariable('client_price')->value['price_wait2'] : null);?>
</td>
                                                      </tr>
                                                    <?php }else{ ?>
                                                        <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitTime'] : null)=='Y'){?>
                                                      <tr>
                                                          <td>
                                                            超时
                                                        </td>
                                                          <td>超时每小时收取<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_overTime'] : null);?>
元</td>
                                                      </tr>
                                                      <?php }?>
                                                      <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)=='Y'){?>
                                                      <tr>
                                                          <td>
                                                            超公里
                                                        </td>
                                                          <td>每日限开<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_limitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_limitKm'] : null);?>
公里，超出按每公里<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_overKm'] : null);?>
元收费</td>
                                                      </tr>
                                                      <?php }?>
                                                    <?php }?>
                                                    </tbody>


                                                </table>
                                               
                                            </div>



                                            <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_jie']) ? $_smarty_tpl->getVariable('list')->value['paiche_jie'] : null)==3){?>
                                                <div class="tab-pane">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                                <th width="15%">审核状态</th>
                                                                <th width="15%">审核人</th>
                                                                <th width="15%">审核时间</th>
                                                                <th width="25%">审核意见</th>
                                                                
                                                                
                                                         

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                       
                                                      <tr>
                                                          <td>
                                                            <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_checkTimes']) ? $_smarty_tpl->getVariable('list')->value['paiche_checkTimes'] : null)!=0){?>
                                                                已审核
                                                            <?php }else{ ?>
                                                          未审核
                                                            <?php }?>
                                                        </td>
                                                          <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['shenhe_empname']) ? $_smarty_tpl->getVariable('list')->value['shenhe_empname'] : null);?>
</td>
                                                          <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_checkTimes']) ? $_smarty_tpl->getVariable('list')->value['paiche_checkTimes'] : null);?>
</td>
                                                          <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_checkNote']) ? $_smarty_tpl->getVariable('list')->value['paiche_checkNote'] : null);?>
</td>
                                                      </tr>
                                                    </tbody>


                                                </table>
                                               
                                            </div>
                                            <?php }?>

                                            









                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <input type="hidden" name="pid" value="$pid">
    
    <script src="../../../crm1/js/bootstrap.min.js?v=3.3.6"></script>

    <script>
        var body_W = $("body").width();
        function setBody_W(){
            body_W = $("body").width();
        }
        function hetong(pid){
            setBody_W();
            demo_iframe('index.php?task=hetong&pid='+pid,'合同管理',body_W,500,'login_js');
        }

        $(".nav-tabs li").click(function(){
            let xdd = $(this).index();
            $(".tab-pane").eq(xdd).show().siblings(".tab-pane").hide();
        });
        $(document).ready(function(){

            $('#loading-example-btn').click(function () {
                btn = $(this);
                simpleLoad(btn, true)

                // Ajax example
                //                $.ajax().always(function () {
                //                    simpleLoad($(this), false)
                //                });

                simpleLoad(btn, false)
            });
        });

        function simpleLoad(btn, state) {
            if (state) {
                btn.children().addClass('fa-spin');
                btn.contents().last().replaceWith(" Loading");
            } else {
                setTimeout(function () {
                    btn.children().removeClass('fa-spin');
                    btn.contents().last().replaceWith(" Refresh");
                }, 2000);
            }
        }
    </script>

    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
    <!--统计代码，可删除-->

</body>

</html>
