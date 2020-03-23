<?php /* Smarty version Smarty-3.0.4, created on 2019-10-22 16:32:00
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/rule/add.html" */ ?>
<?php /*%%SmartyHeaderCode:312845daebe8066ced2-74082649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c38c841fa5254a66bc29b10e48c3fe21f55648a4' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/rule/add.html',
      1 => 1571707178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '312845daebe8066ced2-74082649',
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


    <title>添加菜单</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="../../../crm/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="../../../crm/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="../../../crm/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
    <link href="../../../crm/css/animate.min.css" rel="stylesheet">
    <link href="../../../crm/css/style.min862f.css?v=4.1.0" rel="stylesheet">
    <script type="text/javascript" src="../../../js/jquery.js"></script>

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        
        <!-- Panel Other -->
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>添加权限</h5>
                <div class="ibox-tools">
                   
                </div>
            </div>
            <form method="post" action="index.php?task=insert" name="form1">
            <div class="ibox-content">
                <div class="row row-lg">
                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="example-wrap">
                            <div class="example">
                                                                
                                <table class="table table-bordered">
                        
                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">上级菜单：</span>
                            </th>
                            
                            <td width="35%">
                               <select class="form-control input-sm" id="pid" name="pid">
                                            <option value="0">顶级权限</option>
                                <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                        <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
">
                                                +<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>

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
                                                &nbsp;&nbsp;&nbsp;&nbsp;+<?php echo (isset($_smarty_tpl->tpl_vars['rows_a']->value['title']) ? $_smarty_tpl->tpl_vars['rows_a']->value['title'] : null);?>

                                            </option>
                                        <?php }} ?>
                                        <?php }?>
                                 <?php }} ?>
                                </select>
                            
                            </td>

                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">权限名称：</span>
                            </th>
                            <td width="35%">
                               <input type="text" id="title" name="title"  class="form-control input-sm" placeholder="">
                            </td>
                        </tr>

                        <tr>
                            
                            

                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">链接地址：</span>
                            </th>
                            <td width="35%">
                               <input type="text" id="name" name="name"  class="form-control input-sm" placeholder="" >
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">排序：</span>
                            </th>
                             <td width="35%">
                                <input type="text" id="rule_order" name="rule_order"  class="form-control input-sm" placeholder="" >
                        
                            </td>
                        </tr>
                        
                    </table>
                    

                    <input type="hidden" name="id" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['id']) ? $_smarty_tpl->getVariable('data')->value['id'] : null);?>
" />
                    <input type="submit" id="submit" class="btn btn-outline btn-default" value="提交" style="width: 10%;margin-left: 45%;display: block;">
                    
                
                                
                            </div>
                        </div>
                        <!-- End Example Events -->
                    </div>
                </div>
            </div>
            </form>
        </div>
        <!-- End Panel Other -->
    </div>
    
    <script src="../../../crm/js/jquery.min.js?v=2.1.4"></script>
    <script src="../../../crm/js/bootstrap.min.js?v=3.3.6"></script>
    
    <script src="../../../crm/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
    <script src="../../../crm/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
    <script src="../../../crm/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
    <script src="../../../crm/js/demo/bootstrap-table-demo.min.js"></script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
    
</body>  
<script type="text/javascript">
    $("#submit").click(function(){
        var title= $("#title").val();
        if(title.length<2||title.length>20){
            alert("请填写2到20位的菜单名称！");
            return false;
        }

        

        var rule_order= $("#rule_order").val();
        if(!(yanzhengShuZi(rule_order))){
            alert("排序只能为整数！");
            return false;
        }
    });

    function yanzhengShuZi(idNo){

        var regIdNo = /^[0-9]*$/;  
        if(!regIdNo.test(idNo)){  
            return false;  
        }else{
            return true;
        }  
    }
</script>

    

<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->
</html>
