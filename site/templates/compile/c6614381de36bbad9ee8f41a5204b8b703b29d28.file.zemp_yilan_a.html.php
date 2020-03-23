<?php /* Smarty version Smarty-3.0.4, created on 2019-06-06 14:00:49
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/renshi/zemp_yilan_a.html" */ ?>
<?php /*%%SmartyHeaderCode:10825cf8ac11108822-65540660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6614381de36bbad9ee8f41a5204b8b703b29d28' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/renshi/zemp_yilan_a.html',
      1 => 1559800780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10825cf8ac11108822-65540660',
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
                <h5>在职员工一览表</h5>
                <div class="ibox-tools">
                    
                </div>
            </div>
            <div class="ibox-content" style="background-color:#F3F3F4">
            <div class="row row-lg">
                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="example-wrap">
                            <div class="example">
    <div>
        <form action="zemp_yilan.php" method="post" id="SearchForm" name="SearchForm">
                   <div style="margin-bottom:15px;border-bottom:1px solid #E7EAEC;padding-bottom:8px;margin-top: 20px">
                                    <table>
                                        <tr>
                                            <th width="10%">
                                                <span style="color:#000">按姓名检索：</span>
                                            </th>
                                            <td width="15%">
                                                <input type="text" class="form-control input-sm" placeholder="姓名" name="emp_name" value="<?php echo $_smarty_tpl->getVariable('emp_name')->value;?>
">
                                            </td>
                                        
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
" <?php if ($_smarty_tpl->getVariable('emp_shopid')->value==(isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null)){?>selected <?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>
</option>
                                                     <?php }} ?>
                                                </select>
                                            </td>
                                        
                                            <td colspan="2">
                                                <div class="btn-group hidden-xs pull-right" style="margin-top:5px;" id="exampleTableEventsToolbar" role="group">
                                                    <button type="submit" class="btn btn-outline btn-default">
                                                        <i class="glyphicon glyphicon-search" aria-hidden="true"></i>
                                                        搜索
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                    </form>
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
                                <img alt="image" class="img-circle m-t-xs img-responsive" src="../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_image']) ? $_smarty_tpl->tpl_vars['row']->value['emp_image'] : null);?>
" onerror="javascript:this.src='../../../crm/img/a2.jpg'" style="width:100%; height:100%; position:absolute; top:0; left:0;">
                                </div>
                                <div class="m-t-xs font-bold">运河租车</div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <h3><strong><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</strong></h3>
                            职位：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['title']) ? $_smarty_tpl->tpl_vars['row']->value['title'] : null);?>
<br><br>
                           所属门店：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null);?>
<br><br>

                            <abbr title="Phone">Tel:</abbr> <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_workTel']) ? $_smarty_tpl->tpl_vars['row']->value['emp_workTel'] : null);?>

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
    <script src="../../../crm/js/content.min.js?v=1.0.0"></script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>
<script>
        $(document).ready(function(){
            $(".contact-box").each(function(){
                animationHover(this,"pulse");
            })
        });
    </script>


<!-- Mirrored from www.zi-han.net/theme/hplus/contacts.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:18:21 GMT -->
</html>
