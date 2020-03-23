<?php /* Smarty version Smarty-3.0.4, created on 2020-03-10 11:02:32
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/daijia_linshi/diaoche_jiezhang.html" */ ?>
<?php /*%%SmartyHeaderCode:145595e6703487d7986-11904016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '780d193eaf42d62b7c6190f4e423c891e7d356c6' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/daijia_linshi/diaoche_jiezhang.html',
      1 => 1583806695,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145595e6703487d7986-11904016',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <link rel="shortcut icon" href="favicon.ico">
<link href="../../../crm/fonts1/iconfont.css?a=2" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>临时代驾批量结算</title>
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
          <div class="ibox float-e-margins">
            <div class="ibox-title" style="    padding-top: 5px">
                <h5 style="padding-top: 10px">临时代驾调车结算</h5>
            </div>
            <div class="ibox-tools changebtn" style="padding-right: 20px;float: left;">
                <div style="margin-top:5px;" >
                    <a href="javascript:;" class="btn btn-outline btn-default">未结算</a>
                    <a href="javascript:;" class="btn btn-outline btn-default">已结算</a>
                </div>
            </div>
            <table class="table table-bordered table-hover" data-height="400" style="margin-bottom:0px" data-mobile-responsive="true">
                            <thead>
                            <tr>
                                <th style="text-align: center;width: 10%">
                                    排序
                                </th>
                                <th style="text-align: center;width: 40%">
                                    调车公司
                                </th>
                                <th style="text-align: center;width: 15%">
                                    未结算订单数量
                                </th>
                                <th style="text-align: center;width: 25%">
                                    操作
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                            <tr>
                              <td style="text-align: center;">
                                <?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)+1;?>

                              </td>
                              <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bro_name']) ? $_smarty_tpl->tpl_vars['rows']->value['bro_name'] : null);?>
</td>
                              <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['count']) ? $_smarty_tpl->tpl_vars['rows']->value['count'] : null);?>
</td>
                             
                              <td style="text-align: center;">
                               <a href="index.php?task=diaoche_jiezhang_xiangxi&paiche_brother=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['paiche_brother']) ? $_smarty_tpl->tpl_vars['rows']->value['paiche_brother'] : null);?>
" title="结算" style="color:#CC6600">
     <i class="iconfont icon-qitafeiyong" aria-hidden="true"></i>
</a>
                             
                
                            </td>
                            </tr>
                            <?php }} ?>
                        </tbody>
                    </table>
                    <table style="display: none" class="table table-bordered table-hover" data-height="400" style="margin-bottom:0px" data-mobile-responsive="true">
                            <thead>
                            <tr>
                                <th style="text-align: center;width: 10%">
                                    排序
                                </th>
                                <th style="text-align: center;width: 10%">
                                    结算序号
                                </th>
                                <th style="text-align: center;width: 10%">
                                    结算时间
                                </th>
                                <th style="text-align: center;width: 40%">
                                    调车公司
                                </th>
                                <th style="text-align: center;width: 15%">
                                    已结算未结账数量
                                </th>
                                <th style="text-align: center;width: 25%">
                                    操作
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list_a')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                            <tr>
                              <td style="text-align: center;">
                                <?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)+1;?>

                              </td>
                              <td style="text-align: center;">
                                <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['diaoche_num']) ? $_smarty_tpl->tpl_vars['rows']->value['diaoche_num'] : null);?>

                              </td>
                              <td style="text-align: center;">
                                <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['qiye_num_time']) ? $_smarty_tpl->tpl_vars['rows']->value['qiye_num_time'] : null);?>

                              </td>
                              
                              <td style="text-align: center;">
                              <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['bro_name']) ? $_smarty_tpl->tpl_vars['rows']->value['bro_name'] : null)==''){?>
                                    <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bro_name_a']) ? $_smarty_tpl->tpl_vars['rows']->value['bro_name_a'] : null);?>

                                <?php }else{ ?>
                                <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bro_name']) ? $_smarty_tpl->tpl_vars['rows']->value['bro_name'] : null);?>

                                
                            <?php }?></td>
                              <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['count']) ? $_smarty_tpl->tpl_vars['rows']->value['count'] : null);?>
</td>
                             
                              <td style="text-align: center;">
                               <a href="index.php?task=yijie_diaoche&diaoche_num=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['diaoche_num']) ? $_smarty_tpl->tpl_vars['rows']->value['diaoche_num'] : null);?>
" title="明细" style="color:#CC6600">
     <i class="iconfont icon-mingxi1" aria-hidden="true"></i>
</a>
                             
                
                            </td>
                            </tr>
                            <?php }} ?>
                        </tbody>
                    </table>
                </div>
        </div> 
    </div>
    </div>
    <!-- 全局js -->
    <script>
        $(function(){
            $(".changebtn a").click(function(){
                var idx = $(this).index();
                $(".table").eq(idx).show().siblings(".table").hide();
            });
        });
    </script>
    
    <script src="../../../crm1/js/bootstrap.min.js?v=3.3.6"></script>
    <!-- Bootstrap-Treeview plugin javascript -->
    <script src="../../../crm1/js/plugins/treeview/bootstrap-treeview.js"></script>




</body>

</html>
