<?php /* Smarty version Smarty-3.0.4, created on 2019-11-19 16:03:37
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/emp/huangang.html" */ ?>
<?php /*%%SmartyHeaderCode:207195dd3a1d984f4b1-81538026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '524f54f68a85ee873610e9299e257165c52c4df4' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/emp/huangang.html',
      1 => 1571707171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207195dd3a1d984f4b1-81538026',
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


    <title>员工换岗</title>
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
                <h5>员工换岗</h5>
                <div class="ibox-tools">
                   
                </div>
            </div>
            <form method="post" action="index.php?task=huangang_action" name="form1">
            <div class="ibox-content">
                <div class="row row-lg">
                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="example-wrap">
                            <div class="example">
                                                                
                                <table class="table table-bordered">
                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">换前职位：</span>
                            </th>
                             <td width="35%">
                               <input type="text"    class="form-control input-sm" placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['zhiwei_name']) ? $_smarty_tpl->getVariable('data')->value['zhiwei_name'] : null);?>
">
                            </td>


                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">换后职位：</span>
                            </th>
                            <td width="35%">
                               <select class="form-control input-sm" id="emp_zhiweiid" name="emp_zhiweiid">
                                            <option value="0">请选择</option>
                                <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list_zhiwei')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                        <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('data')->value['emp_zhiweiid']) ? $_smarty_tpl->getVariable('data')->value['emp_zhiweiid'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null)){?>selected<?php }?>>
                                                <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_name']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_name'] : null);?>

                                        </option>
                                 <?php }} ?>
                                </select>
                            
                            </td>

                           
                        </tr>

                        <tr>
                             <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">换前门店：</span>
                            </th>
                            <td width="35%">
                               <input type="text" id="script"   class="form-control input-sm" placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['shop_name']) ? $_smarty_tpl->getVariable('data')->value['shop_name'] : null);?>
">
                            </td>

                            

                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">换后门店：</span>
                            </th>
                            

                               <td width="35%">
                               <select class="form-control input-sm" id="emp_shopid" name="emp_shopid">
                                            <option value="0">请选择</option>
                                <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list_shop')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                        <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('data')->value['emp_shopid']) ? $_smarty_tpl->getVariable('data')->value['emp_shopid'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null)){?>selected<?php }?>>
                                                <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>

                                        </option>
                                 <?php }} ?>
                                </select>
                            
                            
                            </td>
                        </tr>

                        
                        
                    </table>
                    <input type="hidden" name="zhiwei" id="zhiwei" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_zhiweiid']) ? $_smarty_tpl->getVariable('data')->value['emp_zhiweiid'] : null);?>
" />
                    <input type="hidden" name="shop" id="shop" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_shopid']) ? $_smarty_tpl->getVariable('data')->value['emp_shopid'] : null);?>
" />

                    <input type="hidden" name="emp_id" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_id']) ? $_smarty_tpl->getVariable('data')->value['emp_id'] : null);?>
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
        var zhiwei= parseInt($("#zhiwei").val());
        var shop= parseInt($("#shop").val());
        var emp_shopid= parseInt($("#emp_shopid").val());
        var emp_zhiweiid= parseInt($("#emp_zhiweiid").val());
        
        if(emp_zhiweiid==0){
            alert('请选择换后职位');
            return false;
        }
        if(emp_shopid==0){
            alert('请选择换后部门');
            return false;
        }
        if(zhiwei==emp_zhiweiid&&shop==emp_shopid){
            alert('换前与换后职位，部门都一样，不能切换！');
            return false;
        }
        
    });

    
</script>

    

<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->
</html>
