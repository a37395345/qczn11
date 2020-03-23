<?php /* Smarty version Smarty-3.0.4, created on 2019-12-27 09:31:33
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/kehu/index.html" */ ?>
<?php /*%%SmartyHeaderCode:133315e055ef5094656-38908115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcdb2897fded71288b141b65970521c6fd502317' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/kehu/index.html',
      1 => 1571707180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133315e055ef5094656-38908115',
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
<title>临时自驾客户资料</title>
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
            <h5>临时自驾客户资料</h5>
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
                    </div>
                    <div class="ibox-content" id="content" style=" margin: 0px; padding: 0px;display: none">
                        <div class="row row-lg">
                            <div class="col-sm-12">
                                <!-- Example Events -->
                                <div class="example-wrap">
                                    <div class="example">
                                        <table class="table table-bordered">
                                        <tr>
                                            <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;客户姓名:</span>
                                            </th>
                                            <td width="35%">
                                                <input type="text" class="form-control input-sm" placeholder="客户姓名" name="paiche_linker">
                                            </td>

                                            <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;客户身份证号码:</span>
                                            </th>
                                            <td width="35%">
                                               <input type="text" class="form-control input-sm" placeholder="客户身份证号码" name="paiche_linkerNum">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;电话号码:</span>
                                            </th>
                                            <td width="35%">
                                                <input type="text" class="form-control input-sm" placeholder="电话号码" name="paiche_linkerPhone">
                                            </td>

                                            <th width="15%" style="background-color:#F5F5F6">
                                               
                                            </th>
                                            <td width="35%">
                                               
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
                               
                               
                                <th style="text-align: center;width: 5%">
                                    序号
                                </th>
                                <th style="text-align: center;width: 7%">
                                    姓名
                                </th>
                                <th style="text-align: center;width: 15%">
                                    身份证号码
                                </th>
                                
                                <th style="text-align: center;width: 13%">
                                    联系电话
                                </th>
                                <th style="text-align: center;width: 20%">
                                    地址
                                </th>
                                <th style="text-align: center;width: 10%">
                                    用车次数
                                </th>
                                <th style="text-align: center;width: 10%">
                                    参与活动次数
                                </th>
                                <th style="text-align: center;width: 10%">
                                    详情
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
                                     <?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)+1;?>

                                    
                                </td>
                                <td style="text-align: center;">
                                    <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linker']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linker'] : null);?>

                                </td>
                                <td style="text-align: center;">
                                   <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linkerNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linkerNum'] : null);?>

                                    
                                </td>
                                
                                <td style="text-align: center;">
                                   
                                        <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linkerPhone']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linkerPhone'] : null);?>

                                    
                                </td>
                                <td style="text-align: center;">
                                     <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linkerAdd']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linkerAdd'] : null);?>

                                       
                                </td>
                                <td style="text-align: center;">
                                   <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['chisu']) ? $_smarty_tpl->tpl_vars['row']->value['chisu'] : null);?>

                                </td>
                                <td style="text-align: center;">
                                   <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['huodongs']) ? $_smarty_tpl->tpl_vars['row']->value['huodongs'] : null);?>

                                </td>
                               
                                <td style="text-align: center;">
                                    <?php if ($_smarty_tpl->getVariable('xiangxi')->value==1){?>
                                    <a href="index.php?task=xiangxi&paiche_linkerNum=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linkerNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linkerNum'] : null);?>
" target="_blank">查看详情</a>
                                    <?php }else{ ?>
                                    查看详情
                                    <?php }?>
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