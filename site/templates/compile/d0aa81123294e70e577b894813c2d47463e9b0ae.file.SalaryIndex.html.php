<?php /* Smarty version Smarty-3.0.4, created on 2019-11-06 10:09:14
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/zhiwei/SalaryIndex.html" */ ?>
<?php /*%%SmartyHeaderCode:4465dc22b4ab5d812-37416846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0aa81123294e70e577b894813c2d47463e9b0ae' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/zhiwei/SalaryIndex.html',
      1 => 1571707191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4465dc22b4ab5d812-37416846',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>职位工资结构管理</title>
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
          <div class="ibox float-e-margins" >
               <div class="ibox-title" style="    padding-top: 5px">
                <h5 style="padding-top: 10px">职位工资结构管理</h5>
               
              
            </div>
            <table class="table table-bordered table-hover" data-height="400" style="margin-bottom:0px" data-mobile-responsive="true">
                            <thead>
                            <tr>
                                <th style="text-align: center;width: 10%">
                                    排序
                                </th>
                                <th style="text-align: center;width: 15%">
                                    职位名称
                                </th>
                                <th style="text-align: center;width: 15%">
                                    试用期底薪
                                </th>
                                <th style="text-align: center;width: 15%">
                                    正式期底薪
                                </th>
                                <th style="text-align: center;width: 15%">
                                    试用期
                                </th>
                                <th style="text-align: center;width: 15%">
                                    休息方式
                                </th>
                                <th style="text-align: center;width: 15%">
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
                              <td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_name']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_name'] : null);?>
</td>
                              <td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_shiyong_dixin']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_shiyong_dixin'] : null);?>
</td>
                              <td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_zhengshi_dixin']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_zhengshi_dixin'] : null);?>
</td>
                              <td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_shiyongqi']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_shiyongqi'] : null);?>
月</td>

                              <td><?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_xiuxi']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_xiuxi'] : null)==0){?>单休
                                <?php }elseif((isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_xiuxi']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_xiuxi'] : null)==1){?>双休
                                <?php }elseif((isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_xiuxi']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_xiuxi'] : null)==2){?>一月休4天
                                <?php }elseif((isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_xiuxi']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_xiuxi'] : null)==3){?>不休
                                <?php }?>
                              </td>
                              <td>
                                <?php if ($_smarty_tpl->getVariable('rule_xiangxi')->value==1){?>
                              <a href="index.php?task=xiangxi&id=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
">详细</a> &nbsp;&nbsp;&nbsp;
                              <?php }?>
                               <?php if ($_smarty_tpl->getVariable('rule_Salary')->value==1){?>
                              <a href="index.php?task=Salary&id=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
">修改</a> &nbsp;&nbsp;&nbsp;
                              <?php }?>
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
    
    <script src="../../../crm1/js/bootstrap.min.js?v=3.3.6"></script>
    <!-- Bootstrap-Treeview plugin javascript -->
    <script src="../../../crm1/js/plugins/treeview/bootstrap-treeview.js"></script>




</body>

</html>
