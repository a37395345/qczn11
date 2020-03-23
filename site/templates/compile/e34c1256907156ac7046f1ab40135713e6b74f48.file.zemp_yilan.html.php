<?php /* Smarty version Smarty-3.0.4, created on 2019-09-19 17:15:03
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/emp/zemp_yilan.html" */ ?>
<?php /*%%SmartyHeaderCode:52735d834717abf1f9-81525392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e34c1256907156ac7046f1ab40135713e6b74f48' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/emp/zemp_yilan.html',
      1 => 1568884500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52735d834717abf1f9-81525392',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>


<!-- Mirrored from www.zi-han.net/theme/hplus/contacts.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:18:21 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>管理后台</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="../../../crm/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="../../../crm/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">

    <link href="../../../crm/css/animate.min.css" rel="stylesheet">
    <link href="../../../crm/css/style.min862f.css?v=4.1.0" rel="stylesheet">

    <link href="../../../crm/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <script src="../../../crm/js/plugins/sweetalert/sweetalert.min.js"></script>
   
    
</head>

<body class="gray-bg">
    <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>在职员工一览表</h5>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #e4961f"><?php echo $_smarty_tpl->getVariable('count')->value;?>
人</span>
            </div>
            <form id="form1" action="/site/operator/emp/index.php?task=zemp_yilan" method="post">
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
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;部门:</span>
                                            </th>
                                            <td width="35%">
                                               <select class="form-control input-sm" id="department_id" name="department_id">
                                                <option value="0">请选择</option>
                                                <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('department_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                                            <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;职位:</span>
                                            </th>
                                            <td width="35%">
                                                <select class="form-control input-sm" name="zhiwei_id">
                                                    <option value="0">请选择</option>
                                                <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('zhiwei_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                                            <th width="10%">
                                                <span style="color:#000">&nbsp;&nbsp;&nbsp;&nbsp;所属门店：</span>
                                            </th>

                                            <td width="15%">
                                                <select class="form-control input-sm" name="emp_shopid">
                                                    <option value="0" <?php if ($_smarty_tpl->getVariable('emp_shopid')->value==0){?>selected <?php }?>>全部</option>
                                                    <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shop_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                                            <th width="10%">
                                                <span style="color:#000">按姓名检索：</span>
                                            </th>
                                            <td width="15%">
                                                <input type="text" class="form-control input-sm" placeholder="姓名" name="emp_name" >
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
            <div class="ibox-content" style="background-color:#F3F3F4">
            <div class="row row-lg">
                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="example-wrap">
                            <div class="example">
    <div>
       
    <div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
            <div class="col-sm-4">
                <div class="contact-box">
                    <a data-toggle="modal" data-target="#myModal3">
                        <div class="col-sm-4">
                            <div class="text-center">
                                <div style="width:100%; height:0;padding-top:100%;position:relative;">
                                <img alt="image" class="img-circle m-t-xs img-responsive" src="../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_imagea']) ? $_smarty_tpl->tpl_vars['row']->value['emp_imagea'] : null);?>
" onerror="javascript:this.src='../../../crm/img/a2.jpg'" style="width:100%; height:100%; position:absolute; top:0; left:0;">
                                </div>
                                <div class="m-t-xs font-bold"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
</div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <h3><strong><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</strong>
                                <?php if ($_smarty_tpl->getVariable('emp_xiangxi')->value==1){?>
                            <span style="font-size: 12px">&nbsp;&nbsp;&nbsp;<a style="font-size: 12px;color:#CC6600" href="index.php?task=xiangxi&emp_id=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_id']) ? $_smarty_tpl->tpl_vars['row']->value['emp_id'] : null);?>
" target="_blank">点击查看详细</a></span><br><br>
                                <?php }?>
                            </h3>
                            员工编号：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['zemp_num']) ? $_smarty_tpl->tpl_vars['row']->value['zemp_num'] : null);?>
<br><br>
                            所属职位：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['zhiwei_name']) ? $_smarty_tpl->tpl_vars['row']->value['zhiwei_name'] : null);?>
<br><br>
                           工作门店：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null);?>
<br><br>

                            <abbr title="Phone">工作电话:</abbr> <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_workTel']) ? $_smarty_tpl->tpl_vars['row']->value['emp_workTel'] : null);?>

                        </address>

                        </div>
                        <div class="clearfix"></div>
                    </a>
                </div>
            </div>
            <?php }} ?>
        </div>
    </div>
    
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    <script src="../../../crm/js/jquery.min.js?v=2.1.4"></script>
    <script src="../../../crm/js/bootstrap.min.js?v=3.3.6"></script>
    
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>
<script>
        $(document).ready(function(){
            $(".contact-box").each(function(){
                animationHover(this,"pulse");
            })
        });
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


<!-- Mirrored from www.zi-han.net/theme/hplus/contacts.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:18:21 GMT -->
</html>
