<?php /* Smarty version Smarty-3.0.4, created on 2020-01-03 15:02:28
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/client/edit_lianxi.html" */ ?>
<?php /*%%SmartyHeaderCode:163255e0ee7045872e9-90317496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afc74a66573ec8fcae2a7354d00c833bea03ce8a' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/client/edit_lianxi.html',
      1 => 1578034869,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163255e0ee7045872e9-90317496',
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
    <title>修改联系方式</title>
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
                <h5>修改联系方式</h5>
               
            </div>

            <form method="post" action="index.php?task=update_lianxi" name="form1" id="form1">
            <div class="ibox-content">
                <div class="row row-lg">
                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="example-wrap">
                            <div class="example">                                
                                <table class="table table-bordered">
                        
                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">联系人姓名：</span>

                            </th>
                            <td width="35%">
                               <input style="padding-left: 10px;" type="text" onkeyup="this.value=this.value.replace(/^ +| +$/g,'')" id="name" name="name"  class="form-control input-sm" placeholder="必填" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['name']) ? $_smarty_tpl->getVariable('data')->value['name'] : null);?>
">
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">电话号码：</span>
                            </th>
                            <td width="35%">
                               <input style="padding-left: 10px;" type="text" id="phone" name="phone"  class="form-control input-sm" placeholder="必填" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['phone']) ? $_smarty_tpl->getVariable('data')->value['phone'] : null);?>
">
                            </td>
                        </tr>
                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">职位：</span>

                            </th>
                            <td width="35%">
                               <input type="text" id="zhiwei" name="zhiwei"  class="form-control input-sm" placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['zhiwei']) ? $_smarty_tpl->getVariable('data')->value['zhiwei'] : null);?>
">
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">备注：</span>
                            </th>
                            <td width="35%">
                               <input type="text" id="beizhu" name="beizhu"  class="form-control input-sm" placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['beizhu']) ? $_smarty_tpl->getVariable('data')->value['beizhu'] : null);?>
">
                            </td>
                        </tr>
                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">联系人地址：</span>
                            </th>
                             <td width="35%">
                                <input type="text" id="dizhi_a" name="dizhi_a"  class="form-control input-sm" placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['dizhi_a']) ? $_smarty_tpl->getVariable('data')->value['dizhi_a'] : null);?>
">
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">联系人备用地址：</span>
                            </th>
                            <td width="35%">
                                  <input type="text" id="dizhi_b" name="dizhi_b"  class="form-control input-sm" placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['dizhi_b']) ? $_smarty_tpl->getVariable('data')->value['dizhi_b'] : null);?>
">
                            </td>

                            
                        </tr>
                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">是否是主联系人：</span>
                            </th>
                             <td width="35%">
                                <select class="form-control input-sm" id="zhu" name="zhu">
                                    <option value="0" <?php if ((isset($_smarty_tpl->getVariable('data')->value['zhu']) ? $_smarty_tpl->getVariable('data')->value['zhu'] : null)==0){?>selected<?php }?>>不是</option>
                                    <option value="1" <?php if ((isset($_smarty_tpl->getVariable('data')->value['zhu']) ? $_smarty_tpl->getVariable('data')->value['zhu'] : null)==1){?>selected<?php }?>>是</option>   
                                </select>
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                               
                            </th>
                            <td width="35%">
                                 
                            </td>

                            
                        </tr>
                    </table>
                    
                    <input type="hidden" name="id" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['id']) ? $_smarty_tpl->getVariable('data')->value['id'] : null);?>
">
                
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
        var name= $("#name").val();
         var phone = parseInt($("#phone").val());
        //alert((typeof phone));
        var testphone1=/^1[3|5|6|7|8|9][0-9]<?php echo 9;?>
$/;
        //var testphone2 = /^14[5|7][0-9]<?php echo 8;?>
$/;
        //!testphone1.test(phone)
        if(!name){
            alert("请填写联系人姓名！");
            return false;
        }else if(name.length<2){
            alert("请填写完整的联系人姓名！");
            return false;
        }
        if(!phone){
            alert("请您填写联系人手机号码！")
            return false;
        }
        // if(!testphone1.test(phone)){
        //     alert("请填写正确的11位手机号码")
        //     return false;
        // }
        
        
    });
    
    $('#form1').submit(function(){
        $('#submit').attr('disabled','disabled');
        $('#submit').val('正在提交');

    });
</script>

    

<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->
</html>
