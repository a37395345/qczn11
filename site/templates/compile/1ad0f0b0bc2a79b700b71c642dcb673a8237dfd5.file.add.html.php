<?php /* Smarty version Smarty-3.0.4, created on 2020-02-19 17:09:24
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/client/add.html" */ ?>
<?php /*%%SmartyHeaderCode:181125e4cfb44bdd9b1-03010420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ad0f0b0bc2a79b700b71c642dcb673a8237dfd5' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/client/add.html',
      1 => 1582103358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181125e4cfb44bdd9b1-03010420',
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
    <title>添加客户</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">
    

    <link rel="shortcut icon" href="favicon.ico"> <link href="../../../crm/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="../../../crm/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="../../../crm/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
    <link href="../../../crm/css/animate.min.css" rel="stylesheet">
    <link href="../../../crm/css/style.min862f.css?v=4.1.0" rel="stylesheet">

   
    <!--suppress JSUnresolvedLibraryURL -->
    
    <script src="../../../comment/jquery.js" type="text/javascript"></script>

    
    

</head>
<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        
        <!-- Panel Other -->
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>添加客户</h5>
                <div class="ibox-tools">
                   
                </div>
            </div>

            <form method="post" action="index.php?task=insert" name="form1" id="form1">
            <div class="ibox-content">
                <div class="row row-lg">
                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="example-wrap">
                            <div class="example">                                
                                <table class="table table-bordered">
                        
                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">公司名称：</span>
                            </th>
                            <td width="35%">
                               <input style="padding-left: 5px;" type="text" id="client_name" name="client_name"  class="form-control input-sm" placeholder="必填">
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">营业执照：</span>
                            </th>
                             <td width="35%">
                                <input type="text" id="client_license" name="client_license"  class="form-control input-sm" placeholder="">
                            </td>
                            
                        </tr>
                        
                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">开户银行：</span>
                            </th>
                             <td width="35%">
                                <input type="text" id="client_bank" name="client_bank"  class="form-control input-sm" placeholder="">
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">账号：</span>
                            </th>
                            <td width="35%">
                                 <input type="text" id="client_account" name="client_account" class="form-control input-sm" placeholder="">
                            </td>

                            
                        </tr>
                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">电话：</span>
                            </th>
                             <td width="35%">
                                <input type="text" id="client_tel" name="client_tel"  class="form-control input-sm" placeholder="">
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">传真：</span>
                            </th>
                            <td width="35%">
                                <input type="text" id="client_fax" name="client_fax"  class="form-control input-sm" placeholder="">
                            </td>

                            
                        </tr>
                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">邮箱：</span>
                            </th>
                             <td width="35%">
                                <input type="text" id="client_mail" name="client_mail"  class="form-control input-sm" placeholder="">
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">地址：</span>
                            </th>
                            <td width="35%">
                                <input style="padding-left: 5px;" type="text" id="client_add" name="client_add"  class="form-control input-sm" placeholder="必填">
                            </td>

                            
                        </tr>
                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">业务门店：</span>
                            </th>
                             <td width="35%">
                                 <select class="form-control input-sm" id="client_shopid" name="client_shopid">
                                    <option value="0">请选择</option>
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
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">业务员：</span>
                            </th>
                            <td width="35%">
                                 <select class="form-control input-sm" id="client_salesman" name="client_salesman">
                                            
                                </select>
                            </td>

                            
                        </tr>
                    </table>
                    

                
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

<script type="text/javascript">

    $("#submit").click(function(){
        //console.log("111");
        var client_name= $("#client_name").val();
        var client_add = $("#client_add").val();
        if(client_name==""){
            alert("请填写公司名称！");
            return false;
        }
        if(client_add==""){
            alert("请填写地址！");
            return false;
        }
        if(!parseInt($("#client_shopid").val())>0){
            alert("请选择业务门店！");
            return false;
        }
    });

    $('#form1').submit(function(){
        $('#submit').attr('disabled','disabled');
        $('#submit').val('正在提交');

    });

    $("#client_shopid").change(function(){
            var client_shopid=$(this).val();

            $.ajax({
                type:'POST',
                url:'index.php?task=getEmp',
                data: {"client_shopid":client_shopid},
                dataType:"json",
                cache: false,

                success:function(req){
                    console.log(req);
                    $("#client_salesman").empty();
                    for(var i=0;i<req.length;i++){
                        $("#client_salesman").append("<option  value='"+req[i]['emp_id']+"'>"+req[i]['emp_name']+"</option>");
                    }
                     
                    
                }
            });
        })
    
</script>

    

<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->
</html>
