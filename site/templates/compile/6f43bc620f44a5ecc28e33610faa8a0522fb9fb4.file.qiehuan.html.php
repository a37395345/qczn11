<?php /* Smarty version Smarty-3.0.4, created on 2019-09-25 16:55:59
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/car/qiehuan.html" */ ?>
<?php /*%%SmartyHeaderCode:218135d8b2b9f42dea2-03551246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f43bc620f44a5ecc28e33610faa8a0522fb9fb4' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/car/qiehuan.html',
      1 => 1569401751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '218135d8b2b9f42dea2-03551246',
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
    <title>切换车辆存放状态</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="../../../crm/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="../../../crm/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="../../../crm/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
    <link href="../../../crm/css/animate.min.css" rel="stylesheet">
    <link href="../../../crm/css/style.min862f.css?v=4.1.0" rel="stylesheet">
    <script type="text/javascript" src="../../../js/jquery.js"></script>
    <script type="text/javascript" src="../../../js/laydate/laydate.js"></script>

    <object classid="clsid:F1317711-6BDE-4658-ABAA-39E31D3704D3" codebase="SDRdCard.cab#version=1,3,5,0" width="330" height="0" align="center" hspace="0" vspace="0" id="idcard" name="rdcard"></object>
    <style type="text/css">
    
    .span1{
        margin-bottom: 5px;    color: inherit;
    background-color: transparent;
    -webkit-transition: all .5s;
    transition: all .5s;    border-color: #c2c2c2;border-radius: 3px;    display: inline-block;
    padding: 6px 12px;
    }

</style>

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        
        <!-- Panel Other -->
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>切换车辆存放状态</h5>
            </div>
            <form method="post" action="index.php?task=update_qiehuan" name="form1" enctype="multipart/form-data">
            <div class="ibox-content">
                <div class="row row-lg">
                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="example-wrap">
                            <div class="example">
                             
                             <table class="table table-bordered">
                            <tr>
                                    <th style="background-color:#F5F5F6" width="15%">
                                        <span style="color:#000">存放门店</span>
                                    </th>
                                    <td width="35%">
                                        <select class="form-control input-sm" name="car_nowSite" id="car_nowSite">
                                            <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shop_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                              <option <?php if ((isset($_smarty_tpl->getVariable('car')->value['car_nowSite']) ? $_smarty_tpl->getVariable('car')->value['car_nowSite'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null)){?>selected<?php }?> value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>
</option>
                                            <?php }} ?>
                                        </select>
                                    </td>


                                    <th style="background-color:#F5F5F6" width="15%">
                                        <span style="color:#000">维修状态</span>
                                    </th>
                                    <td width="35%">
                                        <select class="form-control input-sm" name="weixiu" id="weixiu">
                                            <option value="0" <?php if ((isset($_smarty_tpl->getVariable('car')->value['car_status']) ? $_smarty_tpl->getVariable('car')->value['car_status'] : null)!=2){?>selected<?php }?>>正常</option>
                                            <option value="1" <?php if ((isset($_smarty_tpl->getVariable('car')->value['car_status']) ? $_smarty_tpl->getVariable('car')->value['car_status'] : null)==2&&(isset($_smarty_tpl->getVariable('car')->value['car_maintreason']) ? $_smarty_tpl->getVariable('car')->value['car_maintreason'] : null)==0){?>selected<?php }?>>故障维修</option>
                                            <option value="2" <?php if ((isset($_smarty_tpl->getVariable('car')->value['car_status']) ? $_smarty_tpl->getVariable('car')->value['car_status'] : null)==2&&(isset($_smarty_tpl->getVariable('car')->value['car_maintreason']) ? $_smarty_tpl->getVariable('car')->value['car_maintreason'] : null)!=0){?>selected<?php }?>>异常</option>
                                              
                                            
                                        </select>
                                    </td>
                                
                            </tr>
                           
                    </table>
                    <input type="hidden" name="car_id" value="<?php echo (isset($_smarty_tpl->getVariable('car')->value['car_id']) ? $_smarty_tpl->getVariable('car')->value['car_id'] : null);?>
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
    
    <script src="../../../crm/js/jquery.min.js?v=2.1.4"></script>
    <script src="../../../crm/js/bootstrap.min.js?v=3.3.6"></script>
    
    <script src="../../../crm/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
    <script src="../../../crm/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
    <script src="../../../crm/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
    <script src="../../../crm/js/demo/bootstrap-table-demo.min.js"></script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
   
</body>  
<script type="text/javascript">
  

    
   


</script>

    

<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->
</html>
