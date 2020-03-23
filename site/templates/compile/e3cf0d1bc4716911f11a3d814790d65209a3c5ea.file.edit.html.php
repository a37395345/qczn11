<?php /* Smarty version Smarty-3.0.4, created on 2019-10-14 13:15:31
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/zhiwei/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:1954318245da40473898b85-01692211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3cf0d1bc4716911f11a3d814790d65209a3c5ea' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/zhiwei/edit.html',
      1 => 1571030105,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1954318245da40473898b85-01692211',
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


    <title>修改职位</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">
     <link rel="stylesheet" type="text/css" href="../../../comment/bootstrap.css">
    <link rel="stylesheet" href="../../../comment/font-awesome.css">
    <link href="../../../comment/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="favicon.ico"> <link href="../../../crm/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="../../../crm/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="../../../crm/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
    <link href="../../../crm/css/animate.min.css" rel="stylesheet">
    <link href="../../../crm/css/style.min862f.css?v=4.1.0" rel="stylesheet">
    <script src="../../../comment/jquery.js" type="text/javascript"></script>

    <script src="../../../comment/star-rating.js" type="text/javascript"></script>
</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        
        <!-- Panel Other -->
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>修改职位</h5>
                <div class="ibox-tools">
                   
                </div>
            </div>
            <form method="post" action="index.php?task=update" name="form1">
            <div class="ibox-content">
                <div class="row row-lg">
                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="example-wrap">
                            <div class="example">                                
                                <table class="table table-bordered">
                        
                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">所属部门：</span>
                            </th>
                            <td width="35%">
                               
                            <?php if ($_smarty_tpl->getVariable('count')->value>0){?>
                                <input type="hidden" id="department_id" name="department_id"  class="form-control input-sm" placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('zhiwei')->value['department_id']) ? $_smarty_tpl->getVariable('zhiwei')->value['department_id'] : null);?>
">

                                <input type="text" id="" name=""  class="form-control input-sm" placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('zhiwei')->value['name']) ? $_smarty_tpl->getVariable('zhiwei')->value['name'] : null);?>
" readonly="readonly" unselectable="on">
                            <?php }else{ ?>
                                
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
" <?php if ((isset($_smarty_tpl->getVariable('zhiwei')->value['department_id']) ? $_smarty_tpl->getVariable('zhiwei')->value['department_id'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null)){?>selected<?php }?>>
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
" <?php if ((isset($_smarty_tpl->getVariable('zhiwei')->value['department_id']) ? $_smarty_tpl->getVariable('zhiwei')->value['department_id'] : null)==(isset($_smarty_tpl->tpl_vars['rows_a']->value['id']) ? $_smarty_tpl->tpl_vars['rows_a']->value['id'] : null)){?>selected<?php }?>>
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
" <?php if ((isset($_smarty_tpl->getVariable('zhiwei')->value['department_id']) ? $_smarty_tpl->getVariable('zhiwei')->value['department_id'] : null)==(isset($_smarty_tpl->getVariable('rows_b')->value['id']) ? $_smarty_tpl->getVariable('rows_b')->value['id'] : null)){?>selected<?php }?>>
                                                &nbsp;&nbsp;&nbsp;&nbsp;+<?php echo (isset($_smarty_tpl->getVariable('rows_b')->value['name']) ? $_smarty_tpl->getVariable('rows_b')->value['name'] : null);?>

                                                </option>
                                            <?php }?>
                                        <?php }} ?>
                                        <?php }?>

                                 <?php }} ?>
                                </select>
                               
                            <?php }?>
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">上级职位：</span>
                            </th>

                            <td width="35%">
                               <select class="form-control input-sm" id="pid" name="pid">
                                    <option value='0' <?php if ((isset($_smarty_tpl->getVariable('zhiwei')->value['pid']) ? $_smarty_tpl->getVariable('zhiwei')->value['pid'] : null)==0){?>selected<?php }?>>
                                        顶级职位
                                    </option>
                                    <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('zhiwei_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                        <option value='<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
' <?php if ((isset($_smarty_tpl->getVariable('zhiwei')->value['pid']) ? $_smarty_tpl->getVariable('zhiwei')->value['pid'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null)){?>selected<?php }?>>
                                            <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_name']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_name'] : null);?>

                                        </option>
                                    <?php }} ?>
                                </select>
                            
                            </td>

                            
                        </tr>
                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">职位名称：</span>
                            </th>
                            <td width="35%">
                               <input type="text" id="zhiwei_name" name="zhiwei_name"  class="form-control input-sm" placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('zhiwei')->value['zhiwei_name']) ? $_smarty_tpl->getVariable('zhiwei')->value['zhiwei_name'] : null);?>
">
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">排序：</span>
                            </th>
                             <td width="35%">
                                <input type="text" id="zhiwei_order" name="zhiwei_order"  class="form-control input-sm" placeholder=""  value="<?php echo (isset($_smarty_tpl->getVariable('zhiwei')->value['zhiwei_order']) ? $_smarty_tpl->getVariable('zhiwei')->value['zhiwei_order'] : null);?>
">
                        
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                               
                            </th>
                            <td width="35%">
                              
                            </td>
                        </tr>
                        <tr>
                             <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">岗位职责：</span>
                            </th>
                             <td width="35%">
                                <input type="text" id="zhize" name="zhize"  class="form-control input-sm" placeholder="岗位职责" minlength="1" maxlength="28" value="<?php echo (isset($_smarty_tpl->getVariable('zhiwei')->value['zhize']) ? $_smarty_tpl->getVariable('zhiwei')->value['zhize'] : null);?>
">
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">星级：</span>
                            </th>
                            <td width="35%">
                                <input required id="input-21c" value="<?php echo (isset($_smarty_tpl->getVariable('zhiwei')->value['xingji']) ? $_smarty_tpl->getVariable('zhiwei')->value['xingji'] : null);?>
" type="text" title="" name="xingji">
                            </td>

                        </tr>
                    </table>
                    
                    <input type="hidden" name="id" value="<?php echo (isset($_smarty_tpl->getVariable('zhiwei')->value['id']) ? $_smarty_tpl->getVariable('zhiwei')->value['id'] : null);?>
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
    
    
    <script src="../../../crm/js/bootstrap.min.js?v=3.3.6"></script>
    
    <script src="../../../crm/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
    <script src="../../../crm/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
    <script src="../../../crm/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
    <script src="../../../crm/js/demo/bootstrap-table-demo.min.js"></script>
    
    
</body> 
<script>
        jQuery(document).ready(function () {
            
            $("#input-21c").rating({
                min: 0, max: 5, step: 0.5, size: "xs", stars: "5"
            });
        });
</script> 
<script type="text/javascript">

    $("#submit").click(function(){
        var department_id= $("#department_id").val();
        if(department_id<=0){
            alert("请选择所属部门！");
            return false;
        }
        
        var zhiwei_name= $("#zhiwei_name").val();
        if(zhiwei_name.length<2||zhiwei_name.length>20){
            alert("请填写2到20位的职位名称！");
            return false;
        }
        

        var zhiwei_order= $("#zhiwei_order").val();
        if(!(yanzhengShuZi(zhiwei_order))){
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
    $("#department_id").change(function(){
        var department_id=$(this).val();
        var pid=$("#pid").val();
        $.ajax({
            type:'POST',
            url:'index.php?task=getShangjiZhiwei',
            data: {"department_id":department_id},
            dataType:"json",
            cache: false,
            success:function(req){
                $("#pid").empty();
                $("#pid").append("<option value='0'>顶级职位</option>");
                for(var i=0;i<req.length;i++){
                    $("#pid").append("<option  value='"+req[i]['id']+"'>"+req[i]['zhiwei_name']+"</option>");
                }
                 
                
            }
        });
       
    })
</script>

    

<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->
</html>
