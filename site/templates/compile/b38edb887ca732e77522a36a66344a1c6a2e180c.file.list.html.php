<?php /* Smarty version Smarty-3.0.4, created on 2020-01-07 16:34:51
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/xinxi/list.html" */ ?>
<?php /*%%SmartyHeaderCode:213815e1442ab8292f3-82258986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b38edb887ca732e77522a36a66344a1c6a2e180c' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/xinxi/list.html',
      1 => 1578124515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213815e1442ab8292f3-82258986',
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
    <title>信息列表</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="../../../crm/fonts1/iconfont.css" rel="stylesheet">
    <link href="../../../crm/font2/iconfont.css" rel="stylesheet">
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
        .action_icon{
            margin-right: 0.7rem;
        }

    </style>
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <!-- Panel Other -->
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>信息列表</h5>
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
                                        <input type="hidden" name="task" value="lists">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th width="15%" style="background-color:#F5F5F6">
                                                    <span style="font-weight: bold;color: #000;">类型:</span>
                                                </th>
                                                <td width="35%">
                                                    <select class="form-control input-sm" name="type">
                                                        <option value="">请选择类型</option>
                                                        <option value="1">通知</option>
                                                        <option value="2">代办事项</option>
                                                    </select>
                                                </td>

                                                <th width="15%" style="background-color:#F5F5F6">
                                                    <span style="font-weight: bold;color: #000;">状态:</span>
                                                </th>
                                                <td width="35%">
                                                    <select class="form-control input-sm" name="stats">
                                                        <option value="">请选择状态</option>
                                                        <option value="0">待处理</option>
                                                        <option value="1">已处理</option>
                                                    </select>
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
                                        排序
                                    </th>
                                    <th style="text-align: center;width: 6%">
                                        类型
                                    </th>
                                    <th style="text-align: center;width: 6%">
                                        状态
                                    </th>
                                    <th style="text-align: center;width: 11%">
                                        发送人
                                    </th>
                                    <th style="text-align: center;width: 13%">
                                        发送时间
                                    </th>
                                    <th style="text-align: center;width: 25%">
                                        信息内容
                                    </th>

                                    <th style="text-align: center;width: 8%">
                                        操作
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

                                    <td style="text-align: center;<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['stats']) ? $_smarty_tpl->tpl_vars['row']->value['stats'] : null)==0){?>color: red;<?php }?>">
                                        <?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)+1;?>


                                    </td>
                                    <td style="text-align: center;<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['stats']) ? $_smarty_tpl->tpl_vars['row']->value['stats'] : null)==0){?>color: red;<?php }?>">
                                        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['type']) ? $_smarty_tpl->tpl_vars['row']->value['type'] : null)==2){?>
                                        代办事项
                                        <?php }else{ ?>
                                        通知
                                        <?php }?>
                                    </td>
                                    <td style="text-align: center;<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['stats']) ? $_smarty_tpl->tpl_vars['row']->value['stats'] : null)==0){?>color: red;<?php }?>">
                                        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['type']) ? $_smarty_tpl->tpl_vars['row']->value['type'] : null)==2){?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['stats']) ? $_smarty_tpl->tpl_vars['row']->value['stats'] : null)==0){?>
                                                待处理
                                            <?php }else{ ?>
                                                已处理
                                            <?php }?>
                                        <?php }else{ ?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['readed']) ? $_smarty_tpl->tpl_vars['row']->value['readed'] : null)==0){?>
                                                未读
                                            <?php }else{ ?>
                                                已读
                                            <?php }?>
                                        <?php }?>
                                    </td>
                                    <td style="text-align: center;<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['stats']) ? $_smarty_tpl->tpl_vars['row']->value['stats'] : null)==0){?>color: red;<?php }?>">
                                        <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fasong_emp']) ? $_smarty_tpl->tpl_vars['row']->value['fasong_emp'] : null);?>

                                    </td>

                                    <td style="text-align: center;<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['stats']) ? $_smarty_tpl->tpl_vars['row']->value['stats'] : null)==0){?>color: red;<?php }?>">
                                        <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['addtime']) ? $_smarty_tpl->tpl_vars['row']->value['addtime'] : null);?>

                                    </td>
                                    <td style="text-align: center;<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['stats']) ? $_smarty_tpl->tpl_vars['row']->value['stats'] : null)==0){?>color: red;<?php }?>">
                                        <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['text']) ? $_smarty_tpl->tpl_vars['row']->value['text'] : null);?>

                                    </td>

                                    <td align="center">
                                        <div>
                                            <li class="refresh">
                                                <a class="J_menuItem" href="/site/operator/wenti/list.php?id=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['rel_id']) ? $_smarty_tpl->tpl_vars['row']->value['rel_id'] : null);?>
" title="查看" data-index="0">
                                                    <i class="iconfont icon-xiangxixinxi" aria-hidden="true" style="color:#273a4a"></i>
                                                </a>
                                            </li>
                                        </div>
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
</html>