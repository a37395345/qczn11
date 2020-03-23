<?php /* Smarty version Smarty-3.0.4, created on 2020-01-04 16:39:30
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/zhiwei/xiangxi.html" */ ?>
<?php /*%%SmartyHeaderCode:23705e104f4252a461-89719204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '983620daad4aa11b11fca50b40535e792ec7a888' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/zhiwei/xiangxi.html',
      1 => 1578127073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23705e104f4252a461-89719204',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>

<head>


    <meta charset="utf-8">



    <title>工资项目明细</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="../../../crm1/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="../../../crm1/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="../../../crm1/css/animate.css" rel="stylesheet">
    <link href="../../../crm1/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="row">
        <div class="col-sm-12">
            <div class="wrapper wrapper-content animated fadeInUp">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="m-b-md">
                                    <h2>工资项目明细</h2>
                                </div>
                                <dl class="dl-horizontal">
                                    <dt>职位名称：</dt>
                                    <dd><span class="label label-primary">
                                    <?php echo (isset($_smarty_tpl->getVariable('list')->value['zhiwei_name']) ? $_smarty_tpl->getVariable('list')->value['zhiwei_name'] : null);?>

                                </span>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <dl class="dl-horizontal">

                                    <dt>休息类型：</dt>
                                    <dd><?php if ((isset($_smarty_tpl->getVariable('list')->value['zhiwei_xiuxi']) ? $_smarty_tpl->getVariable('list')->value['zhiwei_xiuxi'] : null)==0){?>单休
                                        <?php }elseif((isset($_smarty_tpl->getVariable('list')->value['zhiwei_xiuxi']) ? $_smarty_tpl->getVariable('list')->value['zhiwei_xiuxi'] : null)==1){?>双休
                                        <?php }elseif((isset($_smarty_tpl->getVariable('list')->value['zhiwei_xiuxi']) ? $_smarty_tpl->getVariable('list')->value['zhiwei_xiuxi'] : null)==2){?>一月休4
                                        <?php }elseif((isset($_smarty_tpl->getVariable('list')->value['zhiwei_xiuxi']) ? $_smarty_tpl->getVariable('list')->value['zhiwei_xiuxi'] : null)==3){?>不休
                                        <?php }?></dd>
                                    <dt>试用期：</dt>
                                    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['zhiwei_shiyongqi']) ? $_smarty_tpl->getVariable('list')->value['zhiwei_shiyongqi'] : null);?>
个月</dd>
                                    <?php if ((isset($_smarty_tpl->getVariable('emp')->value['emp_name']) ? $_smarty_tpl->getVariable('emp')->value['emp_name'] : null)){?>
                                        <dt>员工姓名：</dt>
                                        <dd><?php echo (isset($_smarty_tpl->getVariable('emp')->value['emp_name']) ? $_smarty_tpl->getVariable('emp')->value['emp_name'] : null);?>
</dd>

                                    <?php }?>
                                    <?php if ((isset($_smarty_tpl->getVariable('emp')->value['zemp_butie']) ? $_smarty_tpl->getVariable('emp')->value['zemp_butie'] : null)>0){?>
                                        <dt>额外补贴：</dt>
                                        <dd><?php echo (isset($_smarty_tpl->getVariable('emp')->value['zemp_butie']) ? $_smarty_tpl->getVariable('emp')->value['zemp_butie'] : null);?>
元/月</dd>
                                    <?php }?>
                                    <?php if ((isset($_smarty_tpl->getVariable('emp')->value['zemp_butie']) ? $_smarty_tpl->getVariable('emp')->value['zemp_butie'] : null)>0){?>
                                        <dt>安全奖励：</dt>
                                        <dd><?php if ((isset($_smarty_tpl->getVariable('emp')->value['nianxian']) ? $_smarty_tpl->getVariable('emp')->value['nianxian'] : null)==1){?>第一年新司机100<?php }elseif((isset($_smarty_tpl->getVariable('emp')->value['nianxian']) ? $_smarty_tpl->getVariable('emp')->value['nianxian'] : null)==2){?>第二年司机200<?php }else{ ?>第三年或三年以上老司机300<?php }?>
            元/月</dd>
                                    <?php }?>
                                </dl>
                            </div>
                            <div class="col-sm-7" id="cluster_info">
                                <dl class="dl-horizontal">
                                    
                                </dl>
                            </div>
                        </div>
                        
                        <div class="row m-t-sm">
                            <div class="col-sm-12">
                                <div class="panel blank-panel">
                                    <div class="panel-heading">
                                        <div class="panel-options">
                                            <ul class="nav nav-tabs">
                                                <li><a href="project_detail.html#tab-1" data-toggle="tab">试用期</a>
                                                </li>

                                                <li class=""><a href="project_detail.html#tab-2" data-toggle="tab">正式期</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab-1">
                                                <table class="table table-striped">
                                                   
                                                    <thead>
                                                        <tr>
                                                            <th>项目名称</th>
                                                            <th>运算符</th>
                                                            <th>计算方式</th>
                                                            <th>规则说明</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list_s')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                                        <tr>
                                                            <td>
                                                               <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_name']) ? $_smarty_tpl->tpl_vars['rows']->value['type_name'] : null);?>

                                                            </td>
                                                            <td>
                                                               <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['type_jisuan']) ? $_smarty_tpl->tpl_vars['rows']->value['type_jisuan'] : null)==1){?>加
                                                                <?php }else{ ?>减
                                                                <?php }?>
                                                            </td>
                                                           
                                                            <td><?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_shiyong_money']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_shiyong_money'] : null)>0){?>
                                                            每<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_danwei']) ? $_smarty_tpl->tpl_vars['rows']->value['type_danwei'] : null);?>
<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_shiyong_money']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_shiyong_money'] : null);?>
元
                                                            <?php }else{ ?>
                                                                根据当月情况
                                                            <?php }?></td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_guize']) ? $_smarty_tpl->tpl_vars['rows']->value['type_guize'] : null);?>
</td>
                                                           
                                                        </tr>
                                                        <?php }} ?>

                                                        <tr>
                                                            <td colspan="4">

                                                                试用期工资计算方式：((试用期底薪)<?php echo (isset($_smarty_tpl->getVariable('list')->value['zhiwei_shiyong_dixin']) ? $_smarty_tpl->getVariable('list')->value['zhiwei_shiyong_dixin'] : null);?>
/应上班天数)*实际上班天数
        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list_s')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
            <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['type_jisuan']) ? $_smarty_tpl->tpl_vars['rows']->value['type_jisuan'] : null)==1){?>+<?php }else{ ?>-<?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['type_shuliang']) ? $_smarty_tpl->tpl_vars['rows']->value['type_shuliang'] : null)==1){?>
                

                
                <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_shiyong_money']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_shiyong_money'] : null)>0){?>
                    (是/否)<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_name']) ? $_smarty_tpl->tpl_vars['rows']->value['type_name'] : null);?>

                    <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_shiyong_money']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_shiyong_money'] : null);?>
元
                <?php }else{ ?>
                    <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_name']) ? $_smarty_tpl->tpl_vars['rows']->value['type_name'] : null);?>

                <?php }?>
            <?php }else{ ?>
                <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_name']) ? $_smarty_tpl->tpl_vars['rows']->value['type_name'] : null);?>

                (数量<?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['type_jishu']) ? $_smarty_tpl->tpl_vars['rows']->value['type_jishu'] : null)!=0){?>-<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_jishu']) ? $_smarty_tpl->tpl_vars['rows']->value['type_jishu'] : null);?>
<?php }?>)*<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_shiyong_money']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_shiyong_money'] : null);?>

            <?php }?>
        <?php }} ?>
        <?php if ((isset($_smarty_tpl->getVariable('emp')->value['zemp_butie']) ? $_smarty_tpl->getVariable('emp')->value['zemp_butie'] : null)>0){?>
        +（额外补贴）<?php echo (isset($_smarty_tpl->getVariable('emp')->value['zemp_butie']) ? $_smarty_tpl->getVariable('emp')->value['zemp_butie'] : null);?>
元
        <?php }?>
        <?php if ((isset($_smarty_tpl->getVariable('emp')->value['nianxian']) ? $_smarty_tpl->getVariable('emp')->value['nianxian'] : null)>0){?>
            +（安全奖励）<?php if ((isset($_smarty_tpl->getVariable('emp')->value['nianxian']) ? $_smarty_tpl->getVariable('emp')->value['nianxian'] : null)==1){?>100<?php }elseif((isset($_smarty_tpl->getVariable('emp')->value['nianxian']) ? $_smarty_tpl->getVariable('emp')->value['nianxian'] : null)==2){?>200<?php }elseif((isset($_smarty_tpl->getVariable('emp')->value['nianxian']) ? $_smarty_tpl->getVariable('emp')->value['nianxian'] : null)==3){?>300<?php }?>元
        <?php }?>
        =应发工资
                                                        
                                                        </td>
                                                    </tr>
                                                        
                                                    </tbody>
                                                </table>

                                            </div>


                                            <div class="tab-pane" id="tab-2">
                                                <table class="table table-striped">
                                                   
                                                    <thead>
                                                        <tr>
                                                            <th>项目名称</th>
                                                            <th>运算符</th>
                                                            <th>计算方式</th>
                                                            <th>规则说明</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                       <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list_z')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                                        <tr>
                                                            <td>
                                                                <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_name']) ? $_smarty_tpl->tpl_vars['rows']->value['type_name'] : null);?>

                                                            </td>
                                                            <td>
                                                                <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['type_jisuan']) ? $_smarty_tpl->tpl_vars['rows']->value['type_jisuan'] : null)==1){?>加
                                                                <?php }else{ ?>减
                                                                <?php }?>
                                                            </td>
                                                        
                                                            <td><?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_zhengshi_money']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_zhengshi_money'] : null)>0){?>
                每<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_danwei']) ? $_smarty_tpl->tpl_vars['rows']->value['type_danwei'] : null);?>
<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_zhengshi_money']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_zhengshi_money'] : null);?>
元
                <?php }else{ ?>
                    根据当月情况
                <?php }?></td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_guize']) ? $_smarty_tpl->tpl_vars['rows']->value['type_guize'] : null);?>
</td>
                                                                


                                                        </tr>
                        
                                                        <?php }} ?>

                                                        <tr>
                                                            <td colspan="4">

                                                                正式期工资计算方式：((正式期底薪)<?php echo (isset($_smarty_tpl->getVariable('list')->value['zhiwei_zhengshi_dixin']) ? $_smarty_tpl->getVariable('list')->value['zhiwei_zhengshi_dixin'] : null);?>
/应上班天数)*实际上班天数
        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list_z')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
            <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['type_jisuan']) ? $_smarty_tpl->tpl_vars['rows']->value['type_jisuan'] : null)==1){?>+<?php }else{ ?>-<?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['type_shuliang']) ? $_smarty_tpl->tpl_vars['rows']->value['type_shuliang'] : null)==1){?>
            <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_zhengshi_money']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_zhengshi_money'] : null)>0){?>
            (是/否)<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_name']) ? $_smarty_tpl->tpl_vars['rows']->value['type_name'] : null);?>

            <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_zhengshi_money']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_zhengshi_money'] : null);?>
元
            <?php }else{ ?>
            <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_name']) ? $_smarty_tpl->tpl_vars['rows']->value['type_name'] : null);?>

            <?php }?>
            <?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_name']) ? $_smarty_tpl->tpl_vars['rows']->value['type_name'] : null);?>

                (数量<?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['type_jishu']) ? $_smarty_tpl->tpl_vars['rows']->value['type_jishu'] : null)!=0){?>-<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_jishu']) ? $_smarty_tpl->tpl_vars['rows']->value['type_jishu'] : null);?>
<?php }?>)*<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_zhengshi_money']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_zhengshi_money'] : null);?>

            <?php }?>
        <?php }} ?>
        <?php if ((isset($_smarty_tpl->getVariable('emp')->value['zemp_butie']) ? $_smarty_tpl->getVariable('emp')->value['zemp_butie'] : null)>0){?>
        +（额外补贴）<?php echo (isset($_smarty_tpl->getVariable('emp')->value['zemp_butie']) ? $_smarty_tpl->getVariable('emp')->value['zemp_butie'] : null);?>
元
        <?php }?>
        <?php if ((isset($_smarty_tpl->getVariable('emp')->value['nianxian']) ? $_smarty_tpl->getVariable('emp')->value['nianxian'] : null)>0){?>
            +（安全奖励）<?php if ((isset($_smarty_tpl->getVariable('emp')->value['nianxian']) ? $_smarty_tpl->getVariable('emp')->value['nianxian'] : null)==1){?>100<?php }elseif((isset($_smarty_tpl->getVariable('emp')->value['nianxian']) ? $_smarty_tpl->getVariable('emp')->value['nianxian'] : null)==2){?>200<?php }elseif((isset($_smarty_tpl->getVariable('emp')->value['nianxian']) ? $_smarty_tpl->getVariable('emp')->value['nianxian'] : null)==3){?>300<?php }?>元
        <?php }?>
        =应发工资

                                                        
                                                        </td>
                                                    </tr>
                                                        
                                                    </tbody>
                                                </table>

                                            </div>
                                            
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <!-- 全局js -->
    <script src="../../../crm1/js/jquery.min.js?v=2.1.4"></script>
    <script src="../../../crm1/js/bootstrap.min.js?v=3.3.6"></script>



    


    <script>
        $(document).ready(function () {

            $('#loading-example-btn').click(function () {
                btn = $(this);
                simpleLoad(btn, true)

                // Ajax example
                //                $.ajax().always(function () {
                //                    simpleLoad($(this), false)
                //                });

                simpleLoad(btn, false)
            });
        });

        function simpleLoad(btn, state) {
            if (state) {
                btn.children().addClass('fa-spin');
                btn.contents().last().replaceWith(" Loading");
            } else {
                setTimeout(function () {
                    btn.children().removeClass('fa-spin');
                    btn.contents().last().replaceWith(" Refresh");
                }, 2000);
            }
        }
    </script>

    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
    <!--统计代码，可删除-->

</body>

</html>
