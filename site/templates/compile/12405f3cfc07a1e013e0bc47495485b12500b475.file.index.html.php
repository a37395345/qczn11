<?php /* Smarty version Smarty-3.0.4, created on 2019-09-16 14:51:57
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/emp/index.html" */ ?>
<?php /*%%SmartyHeaderCode:202335d7f310d0eca14-18437772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12405f3cfc07a1e013e0bc47495485b12500b475' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/emp/index.html',
      1 => 1568616714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202335d7f310d0eca14-18437772',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>

<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:03 GMT -->
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>员工资料管理</title>
<link rel="shortcut icon" href="favicon.ico">
<link href="../../../crm/fonts1/iconfont.css" rel="stylesheet">
<link href="../../../crm/css/bootstrap.min14ed.css" rel="stylesheet">
<link href="../../../crm/css/font-awesome.min93e3.css?v=3" rel="stylesheet">
<link href="../../../crm/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
<script type="text/javascript" src="../../../js/laydate/laydate.js"></script>
<script src="../../../crm/js/plugins/sweetalert/sweetalert.min.js"></script>
<link href="../../../crm/css/animate.min.css" rel="stylesheet">
<link href="../../../crm/css/style.min862f.css" rel="stylesheet">


<link href="../../../crm/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
<script type="text/javascript" src="../../../js/jquery.js">
</script>
<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css?a=2" rel="stylesheet">
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js?a=5"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js?a=1"></script>



    <style type="text/css">
        tr{
            font-size: 12px;line-height: 10px;
        }
        td{
            
margin: 0;padding: 1px;padding-top: 5px;padding-bottom: 5px; !important;list-style: none;color: #000000;
        }
        

    </style>
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <!-- Panel Other -->
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>员工资料管理</h5>
        </div>
        <form id="form1" action="index.php" method="get">
            <div class="wrapper wrapper-content animated fadeInRight" style=" margin: 0; padding: 0;">
                <div class="ibox float-e-margins" style="margin:0">
                    <div class="ibox-title" style=" margin: 0; padding: 0;">
                        <h5 style="padding-top: 15px; padding-left: 10px;">搜索
                        </h5>

                        <div class="ibox-tools" style="padding-top: 14px; padding-left: 10px;float: left;padding-right: 20px">
                            <a class="collapse-link">
                            <i class="fa fa-chevron-down" id="up"></i>
                            </a>
                        </div>
                        <?php if ($_smarty_tpl->getVariable('emp_add')->value==1){?>
                <div class="ibox-tools" style="float: left;margin-left: 40px;margin-top: 6px">
                    <a class="btn btn-outline btn-default" href="javascript:;" onclick="add();return false" target="_blank">
                        <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                        添加员工
                    </a>
                     
                </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->getVariable('emp_export')->value==1){?>
                        <div class="ibox-tools" style=" padding-right: 20px;float:right; ;">
                            <div class="btn-group hidden-xs pull-right" style="margin-top:5px;" id="exampleTableEventsToolbar" role="group">
                               
                                <a href="index.php?task=export" class="btn btn-outline btn-default" target="_blank">
                                                 导出
                                </a>
                               
                            </div>
                        </div>
                        <?php }?>
                    </div>
                    <div class="ibox-content" id="content" style=" margin: 0px; padding: 0px;display: none">
                        <div class="row row-lg">
                            <div class="col-sm-12">
                                <!-- Example Events -->
                                <div class="example-wrap">
                                    <div class="example">
                                        <input type="hidden" name="type" value="<?php echo $_smarty_tpl->getVariable('type')->value;?>
">
                                        <table class="table table-bordered">
                                        <tr>
                                            <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;员工号码:</span>
                                            </th>
                                            <td width="35%">
                                                <input type="text" class="form-control input-sm" placeholder="员工号码" name="zemp_num">
                                            </td>
                                            <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;部门:</span>
                                            </th>
                                            <td width="35%">
                                               <select class="form-control input-sm" id="department_id" name="department_id">
                                                <option value="0">请选择</option>
                                                <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list_department')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                                        <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
">
                                                                +<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['name']) ? $_smarty_tpl->tpl_vars['rows']->value['name'] : null);?>

                                                        </option>
                                                        <?php if (count((isset($_smarty_tpl->tpl_vars['rows']->value['son']) ? $_smarty_tpl->tpl_vars['rows']->value['son'] : null))>0){?>
                                                        <?php  $_smarty_tpl->tpl_vars['rows_a'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rows']->value["son"]) ? $_smarty_tpl->tpl_vars['rows']->value["son"] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows_a']->key => $_smarty_tpl->tpl_vars['rows_a']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows_a']->key;
?>
                                                            <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows_a']->value['id']) ? $_smarty_tpl->tpl_vars['rows_a']->value['id'] : null);?>
">
                                                                &nbsp;&nbsp;&nbsp;&nbsp;+<?php echo (isset($_smarty_tpl->tpl_vars['rows_a']->value['name']) ? $_smarty_tpl->tpl_vars['rows_a']->value['name'] : null);?>

                                                            </option>
                                                            <?php if (count((isset($_smarty_tpl->tpl_vars['rows_a']->value['son']) ? $_smarty_tpl->tpl_vars['rows_a']->value['son'] : null))>0){?>

                                                            <?php  $_smarty_tpl->tpl_vars['rows_b'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rows_a']->value["son"]) ? $_smarty_tpl->tpl_vars['rows_a']->value["son"] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows_b']->key => $_smarty_tpl->tpl_vars['rows_b']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows_b']->key;
?>
                                                            <?php }} ?>
                                                                <option value="<?php echo (isset($_smarty_tpl->getVariable('rows_b')->value['id']) ? $_smarty_tpl->getVariable('rows_b')->value['id'] : null);?>
">
                                                                &nbsp;&nbsp;&nbsp;&nbsp;+<?php echo (isset($_smarty_tpl->getVariable('rows_b')->value['name']) ? $_smarty_tpl->getVariable('rows_b')->value['name'] : null);?>

                                                                </option>
                                                            <?php }?>
                                                        <?php }} ?>
                                                        <?php }?>
                                                 <?php }} ?>
                                                </select>
                                            </td>
                                            
                                            
                                           
                                        </tr>
                                        <tr>
                                            <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;员工姓名:</span>
                                            </th>
                                            <td width="35%">
                                                <input type="text" class="form-control input-sm" placeholder="员工姓名" name="emp_name">
                                            </td>

                                            <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;职位:</span>
                                            </th>
                                            <td width="35%">
                                                <select class="form-control input-sm" name="emp_zhiweiid">
                                                    <option value="0">请选择</option>
                                                <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list_zhiwei')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                                    <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_name']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_name'] : null);?>
</option>
                                                <?php }} ?>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                              <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;公司电话:</span>
                                            </th>
                                            <td width="35%">
                                                <input type="text" class="form-control input-sm" placeholder="公司电话" name="emp_workTel">
                                            </td>

                                            <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;门店:</span>
                                            </th>
                                            <td width="35%">
                                                <select class="form-control input-sm" name="emp_shopid">
                                                    <option value="0">请选择</option>
                                                <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list_shop')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                                    <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>
</option>
                                                <?php }} ?>
                                                </select>
                                            </td> 
                                        </tr>



                                         
                                        <tr>
                                             <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;合同开始时间:</span>
                                            </th>
                                            <td width="35%">
                                                <input name="emp_pactStartDate" placeholder="请输入日期" value="" class="laydate-icon " onclick="laydate({istime: true, format: 'YYYY-MM-DD'})" unselectable="on" readonly>
                                            </td>
                                             <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;合同结束时间:</span>
                                            </th>
                                            <td width="35%">
                                                <input name="emp_pactEndDate" placeholder="请输入日期" value="" class="laydate-icon" onclick="laydate({istime: true, format: 'YYYY-MM-DD'})" unselectable="on" readonly>
                                            </td>

                                             

                                
                                        </tr>



                                        
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
        <div class="ibox-content">
            <div class="row row-lg">
                <div class="col-sm-12">
                    <!-- Example Events -->
                    <div class="example-wrap">
                        <div class="example">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="pull-left" style="margin-top:15px">
                                        <p>
                                            显示 <?php echo ($_smarty_tpl->getVariable('p')->value-1)*10+1;?>
 到 <?php echo $_smarty_tpl->getVariable('p')->value*10;?>
 项，共 <?php echo $_smarty_tpl->getVariable('total')->value;?>
 项
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="pull-right">
                                        <ul class="pagination">
                                               <?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-bordered table-hover" data-height="400" style="margin-bottom:0px" data-mobile-responsive="true">
                            <thead>
                            <tr>
                               
                               
                                <th style="text-align: center;width: 6%">
                                    员工编号
                                </th>
                                <th style="text-align: center;width: 6%">
                                    姓名
                                </th>
                                <th style="text-align: center;width: 5%">
                                    性别
                                </th>
                                <th style="text-align: center;width: 8%">
                                    部门
                                </th>
                                <th style="text-align: center;width: 8%">
                                    职位
                                </th>
                                <th style="text-align: center;width: 8%">
                                    门店
                                </th>
                                <th style="text-align: center;width: 8%">
                                    公司电话
                                </th>
                                <th style="text-align: center;width: 10%">
                                    入职/离职日期
                                </th>
                        
                                <th style="text-align: center;width: 10%">
                                    合同开始/结束时间
                                </th>
                                <th style="text-align: center;width: 6%">
                                    状态
                                </th>
                                 <th style="text-align: center;width: 7%">
                                    账号状态
                                </th>

                                <th style="width: 22%">
                                    <div align="center">
                                        操作
                                    </div>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
                            <tr>
                               
                                <td style="text-align: center;">
                                     <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['zemp_num']) ? $_smarty_tpl->tpl_vars['row']->value['zemp_num'] : null);?>

                                    
                                </td>
                                <td style="text-align: center;">
                                    <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>

                                </td>
                                <td style="text-align: center;">
                                   <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_sex']) ? $_smarty_tpl->tpl_vars['row']->value['emp_sex'] : null);?>

                                    
                                </td>
                                
                                <td style="text-align: center;">
                                    <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['department_name']) ? $_smarty_tpl->tpl_vars['row']->value['department_name'] : null);?>

                                </td>
                                <td style="text-align: center;">
                                    <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['zhiwei_name']) ? $_smarty_tpl->tpl_vars['row']->value['zhiwei_name'] : null);?>

                                </td>
                                <td style="text-align: center;">
                                    <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null);?>

                                </td>
                                <td style="text-align: center;">
                                    <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_workTel']) ? $_smarty_tpl->tpl_vars['row']->value['emp_workTel'] : null);?>

                                </td>
                                
                                <td style="text-align: center;">
                                    <span style="border-bottom:1px solid #b19d9d;line-height: 23px"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_addtime']) ? $_smarty_tpl->tpl_vars['row']->value['emp_addtime'] : null);?>

                                    </span><br/><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['emp_quitTime']) ? $_smarty_tpl->tpl_vars['row']->value['emp_quitTime'] : null)==0){?><?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_quitTime']) ? $_smarty_tpl->tpl_vars['row']->value['emp_quitTime'] : null);?>
<?php }?>
                                </td>
                                <td style="text-align: center;">
                                    <span style="border-bottom:1px solid #b19d9d;line-height: 23px"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_pactStartDate']) ? $_smarty_tpl->tpl_vars['row']->value['emp_pactStartDate'] : null);?>

                                    </span><br/><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_pactEndDate']) ? $_smarty_tpl->tpl_vars['row']->value['emp_pactEndDate'] : null);?>

                                </td>
                                <td style="text-align: center;">
                                    <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['zhuangtai']) ? $_smarty_tpl->tpl_vars['row']->value['zhuangtai'] : null);?>

                                </td>
                                <td style="text-align: center;">
                                    
                                <?php if ($_smarty_tpl->getVariable('emp_setStatus')->value==1){?>

                                    <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['status']) ? $_smarty_tpl->tpl_vars['row']->value['status'] : null)==1){?>
                                        <a  onclick="setStatus(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_id']) ? $_smarty_tpl->tpl_vars['row']->value['emp_id'] : null);?>
);return false" target="_blank">
                                            <i class="fa fa-check" style="color:green"></i>
                                        </a>
                                    <?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['status']) ? $_smarty_tpl->tpl_vars['row']->value['status'] : null)==2){?>
                                        <a  onclick="setStatus(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_id']) ? $_smarty_tpl->tpl_vars['row']->value['emp_id'] : null);?>
);return false" target="_blank">
                                            <i class="fa fa-close" style="color:red"></i>
                                        </a>
                                    <?php }else{ ?>
                                        无账号
                                    <?php }?>
                                <?php }else{ ?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['status']) ? $_smarty_tpl->tpl_vars['row']->value['status'] : null)==1){?>
                                        <i class="fa fa-check" style="color:green"></i>
                                    <?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['status']) ? $_smarty_tpl->tpl_vars['row']->value['status'] : null)==2){?> 
                                        <i class="fa fa-close" style="color:red"></i>
                                    <?php }else{ ?>
                                        无账号
                                    <?php }?>
                                <?php }?> 
                                </td>
                                
        
                              
                                <td align="center">
                                    <div>
                                        <?php if ($_smarty_tpl->getVariable('emp_edit')->value==1){?>
                                        <a href="javascript:;" onclick="edit(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_id']) ? $_smarty_tpl->tpl_vars['row']->value['emp_id'] : null);?>
)" title="修改">
                                        <i class="iconfont icon-xiugai" aria-hidden="true"></i>
                                        </a>
                                        <?php }?>
                                        
                                        <?php if ($_smarty_tpl->getVariable('emp_xiangxi')->value==1){?>
                                        &nbsp;
                                            <a href="index.php?task=xiangxi&emp_id=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_id']) ? $_smarty_tpl->tpl_vars['row']->value['emp_id'] : null);?>
" title="详细" style="color:#CC6600" target="_blank">
                                          <i class="iconfont icon-mingxi1" aria-hidden="true"></i>
                                                                    </a>
                                        <?php }?>

                                         <?php if ($_smarty_tpl->getVariable('emp_huangang')->value==1){?>
                                          &nbsp;
                                            <a href="javascript:;" onclick="huangang(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_id']) ? $_smarty_tpl->tpl_vars['row']->value['emp_id'] : null);?>
);return false" title="换岗" style="color:#CC6600" target="_blank">
                                                <i class="iconfont icon-qiehuancheliang" aria-hidden="true"></i>
                                            </a>
                                        <?php }?>

                                        <?php if ($_smarty_tpl->getVariable('emp_lizhi')->value==1&&(isset($_smarty_tpl->tpl_vars['row']->value['zhuangtai']) ? $_smarty_tpl->tpl_vars['row']->value['zhuangtai'] : null)!="离职"){?>
                                                    &nbsp;
                                        <a href="javascript:;" onclick="lizhi(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_id']) ? $_smarty_tpl->tpl_vars['row']->value['emp_id'] : null);?>
)" title="离职" style="color:#CC6600">
                                        <i class="iconfont icon-ziyuan" aria-hidden="true"></i>
                                        </a>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->getVariable('emp_delete')->value==1){?>
                            
                                                                    </a>
                
                                             &nbsp;
                                            <a href="javascript:;" onclick="shanchu(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_id']) ? $_smarty_tpl->tpl_vars['row']->value['emp_id'] : null);?>
)" title="删除" style="color:#CC6600" >
               <i class="iconfont icon-shanchu" aria-hidden="true"></i>
                                                                    </a>
                                                                    <?php }?>
                                       

                                  
                                    </div>
                                </td>
                            </tr>
                           
                            
                                        <?php }} ?>

                            </tbody>
                            </table>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="pull-left" style="margin-top:15px">
                                        <p>
                                            显示 <?php echo ($_smarty_tpl->getVariable('p')->value-1)*10+1;?>
 到 <?php echo $_smarty_tpl->getVariable('p')->value*10;?>
 项，共 <?php echo $_smarty_tpl->getVariable('total')->value;?>
 项
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="pull-right">
                                        <ul class="pagination">
                                               <?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Example Events -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Panel Other -->
</div>

<script src="../../../crm/js/bootstrap.min.js?v=3.3.6"></script>
<script src="../../../crm/js/content.min.js?v=2"></script>
<script src="../../../crm/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
<script src="../../../crm/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
<script src="../../../crm/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
<script src="../../../crm/js/demo/bootstrap-table-demo.min.js"></script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>

<script type="text/javascript">
    function add(){
        //alert('aa');
         demo_iframe('index.php?task=add','添加菜单',1000,500,'login_js');

    }
     function edit(id){
        demo_iframe('index.php?task=edit&emp_id='+id,'修改菜单',1000,500,'login_js');

    }
    function huangang(id){
        demo_iframe('index.php?task=huangang&emp_id='+id,'换岗',1000,500,'login_js');

    }
  
        function setStatus(id) {
            swal(
                {title:"您确定切换启用？",
                      text:"",
                      type:"warning",
                      showCancelButton:true,
                      confirmButtonColor:"#DD6B55",
                      confirmButtonText:"确定",
                      cancelButtonText:"取消",
                      closeOnConfirm:false,
                      closeOnCancel:false},
                      function(isConfirm){
                        if(isConfirm){
                            window.location.href = "index.php?task=setStatus&id="+id;
                        }else{
                            swal("已取消",
                                 "您取消了切换操作！","error"
                            )
                        }
                    }
                )
        };
    
    
     function shanchu(emp_id) {
            swal(
                {title:"您确定此操作？",
                      text:"",
                      type:"warning",
                      showCancelButton:true,
                      confirmButtonColor:"#DD6B55",
                      confirmButtonText:"确定",
                      cancelButtonText:"取消",
                      closeOnConfirm:false,
                      closeOnCancel:false},
                      function(isConfirm){
                        if(isConfirm){
                            window.location.href = "index.php?task=delete&emp_id="+emp_id;
                        }else{
                            swal("已取消",
                                 "您取消了切换操作！","error"
                            )
                        }
                    }
                )
        }
      function lizhi(emp_id) {
        
            swal(
                {title:"您确定此操作？",
                      text:"",
                      type:"warning",
                      showCancelButton:true,
                      confirmButtonColor:"#DD6B55",
                      confirmButtonText:"确定",
                      cancelButtonText:"取消",
                      closeOnConfirm:false,
                      closeOnCancel:false},
                      function(isConfirm){
                        if(isConfirm){
                            window.location.href = "index.php?task=liszhi&emp_id="+emp_id;
                        }else{
                            swal("已取消",
                                 "您取消了切换操作！","error"
                            )
                        }
                    }
                )
        };
    function zijia_youhui(pid){
        demo_iframe('zijia_youhui.php?pid='+pid,'添加优惠',1000,500,'login_js');
    }
$('#up').click(function(){
    //alert('aa');
    var content=$('#content').css('display');
    if(content=="none"){
        $("#content").css('display','block');
        $('#up').removeClass("fa-chevron-down");
        $('#up').addClass("fa-chevron-up");
        
    }else{
        $("#content").css('display','none');
        $('#up').removeClass("fa-chevron-up");
        $('#up').addClass("fa-chevron-down");
    }
    //fa fa-chevron-down
})
    
</script>

</body>
<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->
</html>