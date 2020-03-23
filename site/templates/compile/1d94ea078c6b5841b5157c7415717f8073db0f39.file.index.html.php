<?php /* Smarty version Smarty-3.0.4, created on 2019-09-17 16:15:49
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/zhiwei/index.html" */ ?>
<?php /*%%SmartyHeaderCode:46365d8096355d6255-52455815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d94ea078c6b5841b5157c7415717f8073db0f39' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/zhiwei/index.html',
      1 => 1568708147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46365d8096355d6255-52455815',
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
    <title>职位管理</title>
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
        <div class="col-sm-12">
        	<div class="ibox float-e-margins" >
        	     <div class="ibox-title" style="    padding-top: 5px">
                <h5 style="padding-top: 10px">职位管理</h5>
                <?php if ($_smarty_tpl->getVariable('rule_add')->value==1){?>
               <div class="ibox-tools" style="float: left;margin-left: 40px">
                    <a class="btn btn-outline btn-default" href="javascript:;" onclick="add();return false" target="_blank">
                        <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                        添加职位
                    </a>
                </div>
                <?php }?>
                <?php if ($_smarty_tpl->getVariable('rule_delete')->value==1){?>
                <div class="ibox-tools">
                    <a class="btn btn-outline btn-default" href="javascript:;" onclick="delete_a();return false" target="_blank">
                        <i class="fa fa-close" style="color: red"></i>
                        清理未启用职位
                    </a>
                </div>
               <?php }?>
            </div>
           






                    <table class="table table-bordered table-hover" data-height="400" style="margin-bottom:0px" data-mobile-responsive="true">
                            <thead>
                            <tr>
                                <th style="text-align: center;width: 25%">
                                    所属部门
                                </th>
                                 <th style="text-align: center;width: 25%">
                                    职位名称
                                </th>
                                
                                <th style="text-align: center;width: 25%">
                                    是否启用
                                </th>
                                <th style="text-align: center;width: 25%">
                                    操作
                                </th>
                            </tr>
                            </thead>


                            <tbody>
                            <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list_department')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                            <tr>
                                <?php if (count((isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei'] : null))>0){?>
                                <td>
                                    <span class="icon"><i class="glyphicon glyphicon-stop"></i></span>
                                        <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['name']) ? $_smarty_tpl->tpl_vars['rows']->value['name'] : null);?>

                                </td>

                                <td>
                                    <?php  $_smarty_tpl->tpl_vars['rowsa'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rowsa']->key => $_smarty_tpl->tpl_vars['rowsa']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rowsa']->key;
?>
                                        <br/><br/><?php echo (isset($_smarty_tpl->tpl_vars['rowsa']->value['zhiwei_name']) ? $_smarty_tpl->tpl_vars['rowsa']->value['zhiwei_name'] : null);?>

                                        <?php if (count((isset($_smarty_tpl->tpl_vars['rowsa']->value['son']) ? $_smarty_tpl->tpl_vars['rowsa']->value['son'] : null))>0){?>
                                            <?php  $_smarty_tpl->tpl_vars['rowsb'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rowsa']->value['son']) ? $_smarty_tpl->tpl_vars['rowsa']->value['son'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rowsb']->key => $_smarty_tpl->tpl_vars['rowsb']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rowsb']->key;
?>
                                                <br/><br/>+<?php echo (isset($_smarty_tpl->tpl_vars['rowsb']->value['zhiwei_name']) ? $_smarty_tpl->tpl_vars['rowsb']->value['zhiwei_name'] : null);?>

                                                <?php if (count((isset($_smarty_tpl->tpl_vars['rowsb']->value['son']) ? $_smarty_tpl->tpl_vars['rowsb']->value['son'] : null))>0){?>
                                                    <?php  $_smarty_tpl->tpl_vars['rowsc'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rowsb']->value['son']) ? $_smarty_tpl->tpl_vars['rowsb']->value['son'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rowsc']->key => $_smarty_tpl->tpl_vars['rowsc']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rowsc']->key;
?>
                                                        <br/><br/>++<?php echo (isset($_smarty_tpl->tpl_vars['rowsc']->value['zhiwei_name']) ? $_smarty_tpl->tpl_vars['rowsc']->value['zhiwei_name'] : null);?>

                                                    <?php }} ?>
                                                <?php }?>
                                            <?php }} ?>
                                        <?php }?>
                                    <?php }} ?>
                                </td>
                                
                                <td style="text-align: center;">
                                    <?php  $_smarty_tpl->tpl_vars['rowsa'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rowsa']->key => $_smarty_tpl->tpl_vars['rowsa']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rowsa']->key;
?>
                                    <br/><br/>
                                        <?php if ($_smarty_tpl->getVariable('rule_setStatus')->value==1){?>
                                        <a  onclick="setStatus(<?php echo (isset($_smarty_tpl->tpl_vars['rowsa']->value['id']) ? $_smarty_tpl->tpl_vars['rowsa']->value['id'] : null);?>
);return false" target="_blank">
                                            <?php if ((isset($_smarty_tpl->tpl_vars['rowsa']->value['status']) ? $_smarty_tpl->tpl_vars['rowsa']->value['status'] : null)==0){?>
                                                <i class="fa fa-check" style="color:green"></i>
                                            <?php }else{ ?> 
                                                <i class="fa fa-close" style="color:red"></i>
                                            <?php }?>
                                        </a>
                                        <?php }else{ ?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['rowsa']->value['status']) ? $_smarty_tpl->tpl_vars['rowsa']->value['status'] : null)==0){?>
                                                <i class="fa fa-check" style="color:green"></i>
                                            <?php }else{ ?> 
                                                <i class="fa fa-close" style="color:red"></i>
                                            <?php }?>
                                            
                                        <?php }?>

                                        <?php if (count((isset($_smarty_tpl->tpl_vars['rowsa']->value['son']) ? $_smarty_tpl->tpl_vars['rowsa']->value['son'] : null))>0){?>
                                            <?php  $_smarty_tpl->tpl_vars['rowsb'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rowsa']->value['son']) ? $_smarty_tpl->tpl_vars['rowsa']->value['son'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rowsb']->key => $_smarty_tpl->tpl_vars['rowsb']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rowsb']->key;
?>
                                                <br/><br/><?php if ($_smarty_tpl->getVariable('rule_setStatus')->value==1){?>
                                                        <a  onclick="setStatus(<?php echo (isset($_smarty_tpl->tpl_vars['rowsb']->value['id']) ? $_smarty_tpl->tpl_vars['rowsb']->value['id'] : null);?>
);return false" target="_blank">
                                                            <?php if ((isset($_smarty_tpl->tpl_vars['rowsb']->value['status']) ? $_smarty_tpl->tpl_vars['rowsb']->value['status'] : null)==0){?>
                                                                <i class="fa fa-check" style="color:green"></i>
                                                            <?php }else{ ?> 
                                                                <i class="fa fa-close" style="color:red"></i>
                                                            <?php }?>
                                                        </a>
                                                        <?php }else{ ?>
                                                            <?php if ((isset($_smarty_tpl->tpl_vars['rowsb']->value['status']) ? $_smarty_tpl->tpl_vars['rowsb']->value['status'] : null)==0){?>
                                                                <i class="fa fa-check" style="color:green"></i>
                                                            <?php }else{ ?> 
                                                                <i class="fa fa-close" style="color:red"></i>
                                                            <?php }?>
                                                            
                                                        <?php }?>
                                                <?php if (count((isset($_smarty_tpl->tpl_vars['rowsb']->value['son']) ? $_smarty_tpl->tpl_vars['rowsb']->value['son'] : null))>0){?>
                                                    <?php  $_smarty_tpl->tpl_vars['rowsc'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rowsb']->value['son']) ? $_smarty_tpl->tpl_vars['rowsb']->value['son'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rowsc']->key => $_smarty_tpl->tpl_vars['rowsc']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rowsc']->key;
?>
                                                        <br/><br/><?php if ($_smarty_tpl->getVariable('rule_setStatus')->value==1){?>
                                                            <a  onclick="setStatus(<?php echo (isset($_smarty_tpl->tpl_vars['rowsc']->value['id']) ? $_smarty_tpl->tpl_vars['rowsc']->value['id'] : null);?>
);return false" target="_blank">
                                                                <?php if ((isset($_smarty_tpl->tpl_vars['rowsc']->value['status']) ? $_smarty_tpl->tpl_vars['rowsc']->value['status'] : null)==0){?>
                                                                    <i class="fa fa-check" style="color:green"></i>
                                                                <?php }else{ ?> 
                                                                    <i class="fa fa-close" style="color:red"></i>
                                                                <?php }?>
                                                            </a>
                                                            <?php }else{ ?>
                                                                <?php if ((isset($_smarty_tpl->tpl_vars['rowsc']->value['status']) ? $_smarty_tpl->tpl_vars['rowsc']->value['status'] : null)==0){?>
                                                                    <i class="fa fa-check" style="color:green"></i>
                                                                <?php }else{ ?> 
                                                                    <i class="fa fa-close" style="color:red"></i>
                                                                <?php }?>
                                                                
                                                            <?php }?>
                                                    <?php }} ?>
                                                <?php }?>
                                            <?php }} ?>
                                        <?php }?>
                                    <?php }} ?>

                                </td>
                                <td style="text-align: center;">
                                    <?php  $_smarty_tpl->tpl_vars['rowsa'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rowsa']->key => $_smarty_tpl->tpl_vars['rowsa']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rowsa']->key;
?>
                                        <br/><br/>
                                        <?php if ($_smarty_tpl->getVariable('rule_edit')->value==1){?>
                                          <a  href="javascript:;" onclick="edit(<?php echo (isset($_smarty_tpl->tpl_vars['rowsa']->value['id']) ? $_smarty_tpl->tpl_vars['rowsa']->value['id'] : null);?>
);return false" target="_blank">
                                                修改</a>&nbsp;&nbsp;
                                        <?php }?>
                                        <?php if ($_smarty_tpl->getVariable('rule_setRule')->value==1){?>
                                        <a  href="javascript:;" onclick="setRule(<?php echo (isset($_smarty_tpl->tpl_vars['rowsa']->value['id']) ? $_smarty_tpl->tpl_vars['rowsa']->value['id'] : null);?>
);return false" target="_blank">
                                                权限</a>
                                        <?php }?>
                                        <?php if (count((isset($_smarty_tpl->tpl_vars['rowsa']->value['son']) ? $_smarty_tpl->tpl_vars['rowsa']->value['son'] : null))>0){?>
                                            <?php  $_smarty_tpl->tpl_vars['rowsb'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rowsa']->value['son']) ? $_smarty_tpl->tpl_vars['rowsa']->value['son'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rowsb']->key => $_smarty_tpl->tpl_vars['rowsb']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rowsb']->key;
?>
                                                 <br/><br/><?php if ($_smarty_tpl->getVariable('rule_edit')->value==1){?>
                                                      <a  href="javascript:;" onclick="edit(<?php echo (isset($_smarty_tpl->tpl_vars['rowsb']->value['id']) ? $_smarty_tpl->tpl_vars['rowsb']->value['id'] : null);?>
);return false" target="_blank">
                                                            修改</a>&nbsp;&nbsp;
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->getVariable('rule_setRule')->value==1){?>
                                                    <a  href="javascript:;" onclick="setRule(<?php echo (isset($_smarty_tpl->tpl_vars['rowsb']->value['id']) ? $_smarty_tpl->tpl_vars['rowsb']->value['id'] : null);?>
);return false" target="_blank">
                                                            权限</a>
                                                    <?php }?>
                                                <?php if (count((isset($_smarty_tpl->tpl_vars['rowsb']->value['son']) ? $_smarty_tpl->tpl_vars['rowsb']->value['son'] : null))>0){?>
                                                    <?php  $_smarty_tpl->tpl_vars['rowsc'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rowsb']->value['son']) ? $_smarty_tpl->tpl_vars['rowsb']->value['son'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rowsc']->key => $_smarty_tpl->tpl_vars['rowsc']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rowsc']->key;
?>
                                                        <br/><?php if ($_smarty_tpl->getVariable('rule_edit')->value==1){?>
                                                          <a  href="javascript:;" onclick="edit(<?php echo (isset($_smarty_tpl->tpl_vars['rowsc']->value['id']) ? $_smarty_tpl->tpl_vars['rowsc']->value['id'] : null);?>
);return false" target="_blank">
                                                                修改</a>&nbsp;&nbsp;
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->getVariable('rule_setRule')->value==1){?>
                                                        <a  href="javascript:;" onclick="setRule(<?php echo (isset($_smarty_tpl->tpl_vars['rowsc']->value['id']) ? $_smarty_tpl->tpl_vars['rowsc']->value['id'] : null);?>
);return false" target="_blank">
                                                                权限</a>
                                                        <?php }?>
                                                    <?php }} ?>
                                                <?php }?>
                                            <?php }} ?>
                                        <?php }?>
                                    <?php }} ?>
                                    
                                        
                                   
                                </td>
                                <?php }?>
                            </tr>



















                            <?php if (count((isset($_smarty_tpl->tpl_vars['rows']->value['son']) ? $_smarty_tpl->tpl_vars['rows']->value['son'] : null))>0){?>
                                <?php  $_smarty_tpl->tpl_vars['rows_b'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rows']->value['son']) ? $_smarty_tpl->tpl_vars['rows']->value['son'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows_b']->key => $_smarty_tpl->tpl_vars['rows_b']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows_b']->key;
?>
                                    <tr>
                            <?php if (count((isset($_smarty_tpl->tpl_vars['rows_b']->value['zhiwei']) ? $_smarty_tpl->tpl_vars['rows_b']->value['zhiwei'] : null))>0){?>
                                <td >
                                        +
                                        <span class="icon"><i class="glyphicon glyphicon-stop"></i></span>
                                        <?php echo (isset($_smarty_tpl->tpl_vars['rows_b']->value['name']) ? $_smarty_tpl->tpl_vars['rows_b']->value['name'] : null);?>

                                </td>

                                <td >
                                    <?php  $_smarty_tpl->tpl_vars['rowsa'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rows_b']->value['zhiwei']) ? $_smarty_tpl->tpl_vars['rows_b']->value['zhiwei'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rowsa']->key => $_smarty_tpl->tpl_vars['rowsa']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rowsa']->key;
?>
                                        <br/><br/><?php echo (isset($_smarty_tpl->tpl_vars['rowsa']->value['zhiwei_name']) ? $_smarty_tpl->tpl_vars['rowsa']->value['zhiwei_name'] : null);?>

                                        <?php if (count((isset($_smarty_tpl->tpl_vars['rowsa']->value['son']) ? $_smarty_tpl->tpl_vars['rowsa']->value['son'] : null))>0){?>
                                            <?php  $_smarty_tpl->tpl_vars['rowsb'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rowsa']->value['son']) ? $_smarty_tpl->tpl_vars['rowsa']->value['son'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rowsb']->key => $_smarty_tpl->tpl_vars['rowsb']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rowsb']->key;
?>
                                                <br/><br/>+<?php echo (isset($_smarty_tpl->tpl_vars['rowsb']->value['zhiwei_name']) ? $_smarty_tpl->tpl_vars['rowsb']->value['zhiwei_name'] : null);?>

                                                <?php if (count((isset($_smarty_tpl->tpl_vars['rowsb']->value['son']) ? $_smarty_tpl->tpl_vars['rowsb']->value['son'] : null))>0){?>
                                                    <?php  $_smarty_tpl->tpl_vars['rowsc'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rowsb']->value['son']) ? $_smarty_tpl->tpl_vars['rowsb']->value['son'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rowsc']->key => $_smarty_tpl->tpl_vars['rowsc']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rowsc']->key;
?>
                                                        <br/><br/>++<?php echo (isset($_smarty_tpl->tpl_vars['rowsc']->value['zhiwei_name']) ? $_smarty_tpl->tpl_vars['rowsc']->value['zhiwei_name'] : null);?>

                                                    <?php }} ?>
                                                <?php }?>
                                            <?php }} ?>
                                        <?php }?>
                                    <?php }} ?>
                                </td>
                               
                                <td style="text-align: center;">
                                    <?php  $_smarty_tpl->tpl_vars['rowsa'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rows_b']->value['zhiwei']) ? $_smarty_tpl->tpl_vars['rows_b']->value['zhiwei'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rowsa']->key => $_smarty_tpl->tpl_vars['rowsa']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rowsa']->key;
?>
                                    <br/><br/>
                                        <?php if ($_smarty_tpl->getVariable('rule_setStatus')->value==1){?>
                                        <a  onclick="setStatus(<?php echo (isset($_smarty_tpl->tpl_vars['rowsa']->value['id']) ? $_smarty_tpl->tpl_vars['rowsa']->value['id'] : null);?>
);return false" target="_blank">
                                            <?php if ((isset($_smarty_tpl->tpl_vars['rowsa']->value['status']) ? $_smarty_tpl->tpl_vars['rowsa']->value['status'] : null)==0){?>
                                                <i class="fa fa-check" style="color:green"></i>
                                            <?php }else{ ?> 
                                                <i class="fa fa-close" style="color:red"></i>
                                            <?php }?>
                                        </a>
                                        <?php }else{ ?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['rowsa']->value['status']) ? $_smarty_tpl->tpl_vars['rowsa']->value['status'] : null)==0){?>
                                                <i class="fa fa-check" style="color:green"></i>
                                            <?php }else{ ?> 
                                                <i class="fa fa-close" style="color:red"></i>
                                            <?php }?>
                                            
                                        <?php }?>

                                        <?php if (count((isset($_smarty_tpl->tpl_vars['rowsa']->value['son']) ? $_smarty_tpl->tpl_vars['rowsa']->value['son'] : null))>0){?>
                                            <?php  $_smarty_tpl->tpl_vars['rowsb'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rowsa']->value['son']) ? $_smarty_tpl->tpl_vars['rowsa']->value['son'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rowsb']->key => $_smarty_tpl->tpl_vars['rowsb']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rowsb']->key;
?>
                                                <br/><br/><?php if ($_smarty_tpl->getVariable('rule_setStatus')->value==1){?>
                                                        <a  onclick="setStatus(<?php echo (isset($_smarty_tpl->tpl_vars['rowsb']->value['id']) ? $_smarty_tpl->tpl_vars['rowsb']->value['id'] : null);?>
);return false" target="_blank">
                                                            <?php if ((isset($_smarty_tpl->tpl_vars['rowsb']->value['status']) ? $_smarty_tpl->tpl_vars['rowsb']->value['status'] : null)==0){?>
                                                                <i class="fa fa-check" style="color:green"></i>
                                                            <?php }else{ ?> 
                                                                <i class="fa fa-close" style="color:red"></i>
                                                            <?php }?>
                                                        </a>
                                                        <?php }else{ ?>
                                                            <?php if ((isset($_smarty_tpl->tpl_vars['rowsb']->value['status']) ? $_smarty_tpl->tpl_vars['rowsb']->value['status'] : null)==0){?>
                                                                <i class="fa fa-check" style="color:green"></i>
                                                            <?php }else{ ?> 
                                                                <i class="fa fa-close" style="color:red"></i>
                                                            <?php }?>
                                                            
                                                        <?php }?>
                                                <?php if (count((isset($_smarty_tpl->tpl_vars['rowsb']->value['son']) ? $_smarty_tpl->tpl_vars['rowsb']->value['son'] : null))>0){?>
                                                    <?php  $_smarty_tpl->tpl_vars['rowsc'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rowsb']->value['son']) ? $_smarty_tpl->tpl_vars['rowsb']->value['son'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rowsc']->key => $_smarty_tpl->tpl_vars['rowsc']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rowsc']->key;
?>
                                                        <br/><br/><?php if ($_smarty_tpl->getVariable('rule_setStatus')->value==1){?>
                                                            <a  onclick="setStatus(<?php echo (isset($_smarty_tpl->tpl_vars['rowsc']->value['id']) ? $_smarty_tpl->tpl_vars['rowsc']->value['id'] : null);?>
);return false" target="_blank">
                                                                <?php if ((isset($_smarty_tpl->tpl_vars['rowsc']->value['status']) ? $_smarty_tpl->tpl_vars['rowsc']->value['status'] : null)==0){?>
                                                                    <i class="fa fa-check" style="color:green"></i>
                                                                <?php }else{ ?> 
                                                                    <i class="fa fa-close" style="color:red"></i>
                                                                <?php }?>
                                                            </a>
                                                            <?php }else{ ?>
                                                                <?php if ((isset($_smarty_tpl->tpl_vars['rowsc']->value['status']) ? $_smarty_tpl->tpl_vars['rowsc']->value['status'] : null)==0){?>
                                                                    <i class="fa fa-check" style="color:green"></i>
                                                                <?php }else{ ?> 
                                                                    <i class="fa fa-close" style="color:red"></i>
                                                                <?php }?>
                                                                
                                                            <?php }?>
                                                    <?php }} ?>
                                                <?php }?>
                                            <?php }} ?>
                                        <?php }?>
                                    <?php }} ?>

                                </td>
                                <td style="text-align: center;">
                                    <?php  $_smarty_tpl->tpl_vars['rowsa'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rows_b']->value['zhiwei']) ? $_smarty_tpl->tpl_vars['rows_b']->value['zhiwei'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rowsa']->key => $_smarty_tpl->tpl_vars['rowsa']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rowsa']->key;
?>
                                        <br/><br/>
                                        <?php if ($_smarty_tpl->getVariable('rule_edit')->value==1){?>
                                          <a  href="javascript:;" onclick="edit(<?php echo (isset($_smarty_tpl->tpl_vars['rowsa']->value['id']) ? $_smarty_tpl->tpl_vars['rowsa']->value['id'] : null);?>
);return false" target="_blank">
                                                修改</a>&nbsp;&nbsp;
                                        <?php }?>
                                        <?php if ($_smarty_tpl->getVariable('rule_setRule')->value==1){?>
                                        <a  href="javascript:;" onclick="setRule(<?php echo (isset($_smarty_tpl->tpl_vars['rowsa']->value['id']) ? $_smarty_tpl->tpl_vars['rowsa']->value['id'] : null);?>
);return false" target="_blank">
                                                权限</a>
                                        <?php }?>
                                        <?php if (count((isset($_smarty_tpl->tpl_vars['rowsa']->value['son']) ? $_smarty_tpl->tpl_vars['rowsa']->value['son'] : null))>0){?>
                                            <?php  $_smarty_tpl->tpl_vars['rowsb'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rowsa']->value['son']) ? $_smarty_tpl->tpl_vars['rowsa']->value['son'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rowsb']->key => $_smarty_tpl->tpl_vars['rowsb']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rowsb']->key;
?>
                                                <br/><br/><?php if ($_smarty_tpl->getVariable('rule_edit')->value==1){?>
                                                      <a  href="javascript:;" onclick="edit(<?php echo (isset($_smarty_tpl->tpl_vars['rowsb']->value['id']) ? $_smarty_tpl->tpl_vars['rowsb']->value['id'] : null);?>
);return false" target="_blank">
                                                            修改</a>&nbsp;&nbsp;
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->getVariable('rule_setRule')->value==1){?>
                                                    <a  href="javascript:;" onclick="setRule(<?php echo (isset($_smarty_tpl->tpl_vars['rowsb']->value['id']) ? $_smarty_tpl->tpl_vars['rowsb']->value['id'] : null);?>
);return false" target="_blank">
                                                            权限</a>
                                                    <?php }?>
                                                <?php if (count((isset($_smarty_tpl->tpl_vars['rowsb']->value['son']) ? $_smarty_tpl->tpl_vars['rowsb']->value['son'] : null))>0){?>
                                                    <?php  $_smarty_tpl->tpl_vars['rowsc'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rowsb']->value['son']) ? $_smarty_tpl->tpl_vars['rowsb']->value['son'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rowsc']->key => $_smarty_tpl->tpl_vars['rowsc']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rowsc']->key;
?>
                                                       <br/><br/><?php if ($_smarty_tpl->getVariable('rule_edit')->value==1){?>
                                                          <a  href="javascript:;" onclick="edit(<?php echo (isset($_smarty_tpl->tpl_vars['rowsc']->value['id']) ? $_smarty_tpl->tpl_vars['rowsc']->value['id'] : null);?>
);return false" target="_blank">
                                                                修改</a>&nbsp;&nbsp;
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->getVariable('rule_setRule')->value==1){?>
                                                        <a  href="javascript:;" onclick="setRule(<?php echo (isset($_smarty_tpl->tpl_vars['rowsc']->value['id']) ? $_smarty_tpl->tpl_vars['rowsc']->value['id'] : null);?>
);return false" target="_blank">
                                                                权限</a>
                                                        <?php }?>
                                                    <?php }} ?>
                                                <?php }?>
                                            <?php }} ?>
                                        <?php }?>
                                    <?php }} ?>
                                    
                                        
                                   
                                </td>
                                <?php }?>
                                    </tr>

                                <?php if (count((isset($_smarty_tpl->tpl_vars['rows_b']->value['son']) ? $_smarty_tpl->tpl_vars['rows_b']->value['son'] : null))>0){?>
                                <?php  $_smarty_tpl->tpl_vars['rows_c'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rows_b']->value['son']) ? $_smarty_tpl->tpl_vars['rows_b']->value['son'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows_c']->key => $_smarty_tpl->tpl_vars['rows_c']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows_c']->key;
?>
                                    <tr>
                            <?php if (count((isset($_smarty_tpl->tpl_vars['rows_c']->value['zhiwei']) ? $_smarty_tpl->tpl_vars['rows_c']->value['zhiwei'] : null))>0){?>
                                <td >
                                        ++
                                        <span class="icon"><i class="glyphicon glyphicon-stop"></i></span><?php echo (isset($_smarty_tpl->tpl_vars['rows_c']->value['name']) ? $_smarty_tpl->tpl_vars['rows_c']->value['name'] : null);?>

                                </td>

                                <td >
                                    <?php  $_smarty_tpl->tpl_vars['rowsa'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rows_c']->value['zhiwei']) ? $_smarty_tpl->tpl_vars['rows_c']->value['zhiwei'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rowsa']->key => $_smarty_tpl->tpl_vars['rowsa']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rowsa']->key;
?>
                                        <br/><br/><?php echo (isset($_smarty_tpl->tpl_vars['rowsa']->value['zhiwei_name']) ? $_smarty_tpl->tpl_vars['rowsa']->value['zhiwei_name'] : null);?>

                                        <?php if (count((isset($_smarty_tpl->tpl_vars['rowsa']->value['son']) ? $_smarty_tpl->tpl_vars['rowsa']->value['son'] : null))>0){?>
                                            <?php  $_smarty_tpl->tpl_vars['rowsb'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rowsa']->value['son']) ? $_smarty_tpl->tpl_vars['rowsa']->value['son'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rowsb']->key => $_smarty_tpl->tpl_vars['rowsb']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rowsb']->key;
?>
                                                <br/><br/>+<?php echo (isset($_smarty_tpl->tpl_vars['rowsb']->value['zhiwei_name']) ? $_smarty_tpl->tpl_vars['rowsb']->value['zhiwei_name'] : null);?>

                                                <?php if (count((isset($_smarty_tpl->tpl_vars['rowsb']->value['son']) ? $_smarty_tpl->tpl_vars['rowsb']->value['son'] : null))>0){?>
                                                    <?php  $_smarty_tpl->tpl_vars['rowsc'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rowsb']->value['son']) ? $_smarty_tpl->tpl_vars['rowsb']->value['son'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rowsc']->key => $_smarty_tpl->tpl_vars['rowsc']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rowsc']->key;
?>
                                                        <br/><br/>++<?php echo (isset($_smarty_tpl->tpl_vars['rowsc']->value['zhiwei_name']) ? $_smarty_tpl->tpl_vars['rowsc']->value['zhiwei_name'] : null);?>

                                                    <?php }} ?>
                                                <?php }?>
                                            <?php }} ?>
                                        <?php }?>
                                    <?php }} ?>
                                </td>
                                
                                <td style="text-align: center;">
                                    <?php  $_smarty_tpl->tpl_vars['rowsa'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rows_c']->value['zhiwei']) ? $_smarty_tpl->tpl_vars['rows_c']->value['zhiwei'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rowsa']->key => $_smarty_tpl->tpl_vars['rowsa']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rowsa']->key;
?>
                                    <br/>
                                        <?php if ($_smarty_tpl->getVariable('rule_setStatus')->value==1){?>
                                        <a  onclick="setStatus(<?php echo (isset($_smarty_tpl->tpl_vars['rowsa']->value['id']) ? $_smarty_tpl->tpl_vars['rowsa']->value['id'] : null);?>
);return false" target="_blank">
                                            <?php if ((isset($_smarty_tpl->tpl_vars['rowsa']->value['status']) ? $_smarty_tpl->tpl_vars['rowsa']->value['status'] : null)==0){?>
                                                <i class="fa fa-check" style="color:green"></i>
                                            <?php }else{ ?> 
                                                <i class="fa fa-close" style="color:red"></i>
                                            <?php }?>
                                        </a>
                                        <?php }else{ ?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['rowsa']->value['status']) ? $_smarty_tpl->tpl_vars['rowsa']->value['status'] : null)==0){?>
                                                <i class="fa fa-check" style="color:green"></i>
                                            <?php }else{ ?> 
                                                <i class="fa fa-close" style="color:red"></i>
                                            <?php }?>
                                            
                                        <?php }?>

                                        <?php if (count((isset($_smarty_tpl->tpl_vars['rowsa']->value['son']) ? $_smarty_tpl->tpl_vars['rowsa']->value['son'] : null))>0){?>
                                            <?php  $_smarty_tpl->tpl_vars['rowsb'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rowsa']->value['son']) ? $_smarty_tpl->tpl_vars['rowsa']->value['son'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rowsb']->key => $_smarty_tpl->tpl_vars['rowsb']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rowsb']->key;
?>
                                                <br/><?php if ($_smarty_tpl->getVariable('rule_setStatus')->value==1){?>
                                                        <a  onclick="setStatus(<?php echo (isset($_smarty_tpl->tpl_vars['rowsb']->value['id']) ? $_smarty_tpl->tpl_vars['rowsb']->value['id'] : null);?>
);return false" target="_blank">
                                                            <?php if ((isset($_smarty_tpl->tpl_vars['rowsb']->value['status']) ? $_smarty_tpl->tpl_vars['rowsb']->value['status'] : null)==0){?>
                                                                <i class="fa fa-check" style="color:green"></i>
                                                            <?php }else{ ?> 
                                                                <i class="fa fa-close" style="color:red"></i>
                                                            <?php }?>
                                                        </a>
                                                        <?php }else{ ?>
                                                            <?php if ((isset($_smarty_tpl->tpl_vars['rowsb']->value['status']) ? $_smarty_tpl->tpl_vars['rowsb']->value['status'] : null)==0){?>
                                                                <i class="fa fa-check" style="color:green"></i>
                                                            <?php }else{ ?> 
                                                                <i class="fa fa-close" style="color:red"></i>
                                                            <?php }?>
                                                            
                                                        <?php }?>
                                                <?php if (count((isset($_smarty_tpl->tpl_vars['rowsb']->value['son']) ? $_smarty_tpl->tpl_vars['rowsb']->value['son'] : null))>0){?>
                                                    <?php  $_smarty_tpl->tpl_vars['rowsc'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rowsb']->value['son']) ? $_smarty_tpl->tpl_vars['rowsb']->value['son'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rowsc']->key => $_smarty_tpl->tpl_vars['rowsc']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rowsc']->key;
?>
                                                        <br/><?php if ($_smarty_tpl->getVariable('rule_setStatus')->value==1){?>
                                                            <a  onclick="setStatus(<?php echo (isset($_smarty_tpl->tpl_vars['rowsc']->value['id']) ? $_smarty_tpl->tpl_vars['rowsc']->value['id'] : null);?>
);return false" target="_blank">
                                                                <?php if ((isset($_smarty_tpl->tpl_vars['rowsc']->value['status']) ? $_smarty_tpl->tpl_vars['rowsc']->value['status'] : null)==0){?>
                                                                    <i class="fa fa-check" style="color:green"></i>
                                                                <?php }else{ ?> 
                                                                    <i class="fa fa-close" style="color:red"></i>
                                                                <?php }?>
                                                            </a>
                                                            <?php }else{ ?>
                                                                <?php if ((isset($_smarty_tpl->tpl_vars['rowsc']->value['status']) ? $_smarty_tpl->tpl_vars['rowsc']->value['status'] : null)==0){?>
                                                                    <i class="fa fa-check" style="color:green"></i>
                                                                <?php }else{ ?> 
                                                                    <i class="fa fa-close" style="color:red"></i>
                                                                <?php }?>
                                                                
                                                            <?php }?>
                                                    <?php }} ?>
                                                <?php }?>
                                            <?php }} ?>
                                        <?php }?>
                                    <?php }} ?>

                                </td>
                                <td style="text-align: center;">
                                    <?php  $_smarty_tpl->tpl_vars['rowsa'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rows_c']->value['zhiwei']) ? $_smarty_tpl->tpl_vars['rows_c']->value['zhiwei'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rowsa']->key => $_smarty_tpl->tpl_vars['rowsa']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rowsa']->key;
?>
                                        <br/>
                                        <?php if ($_smarty_tpl->getVariable('rule_edit')->value==1){?>
                                          <a  href="javascript:;" onclick="edit(<?php echo (isset($_smarty_tpl->tpl_vars['rowsa']->value['id']) ? $_smarty_tpl->tpl_vars['rowsa']->value['id'] : null);?>
);return false" target="_blank">
                                                修改</a>&nbsp;&nbsp;
                                        <?php }?>
                                        <?php if ($_smarty_tpl->getVariable('rule_setRule')->value==1){?>
                                        <a  href="javascript:;" onclick="setRule(<?php echo (isset($_smarty_tpl->tpl_vars['rowsa']->value['id']) ? $_smarty_tpl->tpl_vars['rowsa']->value['id'] : null);?>
);return false" target="_blank">
                                                权限</a>
                                        <?php }?>
                                        <?php if (count((isset($_smarty_tpl->tpl_vars['rowsa']->value['son']) ? $_smarty_tpl->tpl_vars['rowsa']->value['son'] : null))>0){?>
                                            <?php  $_smarty_tpl->tpl_vars['rowsb'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rowsa']->value['son']) ? $_smarty_tpl->tpl_vars['rowsa']->value['son'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rowsb']->key => $_smarty_tpl->tpl_vars['rowsb']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rowsb']->key;
?>
                                                <br/><?php if ($_smarty_tpl->getVariable('rule_edit')->value==1){?>
                                                      <a  href="javascript:;" onclick="edit(<?php echo (isset($_smarty_tpl->tpl_vars['rowsb']->value['id']) ? $_smarty_tpl->tpl_vars['rowsb']->value['id'] : null);?>
);return false" target="_blank">
                                                            修改</a>&nbsp;&nbsp;
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->getVariable('rule_setRule')->value==1){?>
                                                    <a  href="javascript:;" onclick="setRule(<?php echo (isset($_smarty_tpl->tpl_vars['rowsb']->value['id']) ? $_smarty_tpl->tpl_vars['rowsb']->value['id'] : null);?>
);return false" target="_blank">
                                                            权限</a>
                                                    <?php }?>
                                                <?php if (count((isset($_smarty_tpl->tpl_vars['rowsb']->value['son']) ? $_smarty_tpl->tpl_vars['rowsb']->value['son'] : null))>0){?>
                                                    <?php  $_smarty_tpl->tpl_vars['rowsc'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rowsb']->value['son']) ? $_smarty_tpl->tpl_vars['rowsb']->value['son'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rowsc']->key => $_smarty_tpl->tpl_vars['rowsc']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rowsc']->key;
?>
                                                        <br/><?php if ($_smarty_tpl->getVariable('rule_edit')->value==1){?>
                                                          <a  href="javascript:;" onclick="edit(<?php echo (isset($_smarty_tpl->tpl_vars['rowsc']->value['id']) ? $_smarty_tpl->tpl_vars['rowsc']->value['id'] : null);?>
);return false" target="_blank">
                                                                修改</a>&nbsp;&nbsp;
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->getVariable('rule_setRule')->value==1){?>
                                                        <a  href="javascript:;" onclick="setRule(<?php echo (isset($_smarty_tpl->tpl_vars['rowsc']->value['id']) ? $_smarty_tpl->tpl_vars['rowsc']->value['id'] : null);?>
);return false" target="_blank">
                                                                权限</a>
                                                        <?php }?>
                                                    <?php }} ?>
                                                <?php }?>
                                            <?php }} ?>
                                        <?php }?>
                                    <?php }} ?>
                                </td>
                                <?php }?>
                                    </tr>
                                <?php }} ?>
                            <?php }?>













                                <?php }} ?>
                            <?php }?>

                            <?php }} ?>
                        </tbody>
                    </table>















                </div>
        </div> 
    </div>
    </div>
    <!-- 全局js -->
    
    <script src="../../../crm1/js/bootstrap.min.js?v=3.3.6"></script>
    <!-- Bootstrap-Treeview plugin javascript -->
    <script src="../../../crm1/js/plugins/treeview/bootstrap-treeview.js"></script>

<script>
	function add(){
		//alert('aa');
		 demo_iframe('index.php?task=add','添加菜单',1000,500,'login_js');

	}
	function edit(id){
		demo_iframe('index.php?task=edit&id='+id,'修改菜单',1000,500,'login_js');

	}
    function setRule(id){
        demo_iframe('index.php?task=setRule&id='+id,'职位权限管理',1000,500,'login_js');

    }
    
	
</script>
<script type="text/javascript">
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
    </script>
    <script type="text/javascript">
        function delete_a() {
            swal(
                {title:"您确定清除禁用的职位？",
                      text:"删除后将无法恢复，请谨慎操作！",
                      type:"warning",
                      showCancelButton:true,
                      confirmButtonColor:"#DD6B55",
                      confirmButtonText:"确定",
                      cancelButtonText:"取消",
                      closeOnConfirm:false,
                      closeOnCancel:false},
                      function(isConfirm){
                        if(isConfirm){
                            window.location.href = "index.php?task=delete";
                        }else{
                            swal("已取消",
                                 "您取消了清除操作！","error"
                            )
                        }
                    }
                )
        };
    </script>

</body>

</html>
