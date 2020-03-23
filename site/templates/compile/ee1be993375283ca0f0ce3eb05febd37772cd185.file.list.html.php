<?php /* Smarty version Smarty-3.0.4, created on 2020-02-20 13:33:13
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/questions/list.html" */ ?>
<?php /*%%SmartyHeaderCode:184955e4e1a19e9cdc0-68550305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee1be993375283ca0f0ce3eb05febd37772cd185' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/questions/list.html',
      1 => 1582176455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184955e4e1a19e9cdc0-68550305',
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
    <title>问题列表</title>
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
    <script type="text/javascript" src="../../../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN1.js?a=101"></script>
    <link href="../../../css/conmone.css" rel="stylesheet">

    <link href="../../../crm/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <script type="text/javascript" src="../../../js/jquery.js">
    </script>
    <link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css?a=2" rel="stylesheet">
    <script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js?a=5"></script>



    <style type="text/css">
        tr{
            font-size: 12px;
            line-height: 10px;
        }
        td{
            margin: 0;
            padding: 1px;
            padding-top: 5px;
            padding-bottom: 5px; !important;
            list-style: none;
            color: #000000;
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
            <h5>问题列表</h5>
        </div>
        <form id="form1" action="list.php" method="get">
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
                        <div class="ibox-tools" style="float: left;margin-left: 40px;margin-top: 6px">
                            <?php if ($_smarty_tpl->getVariable('add')->value==1){?>
                            <a class="btn btn-outline btn-default" href="javascript:;" onclick="add();return false" target="_blank">
                                <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                                添加问题
                            </a>
                            <?php }?>

                            <a class="btn btn-outline btn-default" href="javascript:;" onclick="tongji();return false" target="_blank">
                                查看统计
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content" id="content" style=" margin: 0px; padding: 0px;display: none">
                        <div class="row row-lg">
                            <div class="col-sm-12">
                                <!-- Example Events -->
                                <div class="example-wrap">
                                    <div class="example">
                                        <input type="hidden" name="type" value="<?php echo $_smarty_tpl->getVariable('type')->value;?>
">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th width="15%" style="background-color:#F5F5F6">
                                                    <span style="font-weight: bold;color: #000;">问题状态:</span>
                                                </th>
                                                <td width="35%">
                                                    <select class="form-control input-sm" name="stats">
                                                        <option value="0">请选择</option>
                                                        <option value="0">全部问题</option>
                                                        <option value="1">待审核问题</option>
                                                        <option value="4">待发起人修改问题</option>
                                                        <option value="2">待IT部处理问题</option>
                                                        <option value="3">待发起人确定问题</option>
                                                        <option value="6">发起人已确定问题</option>
                                                        <option value="5">IT部不能解决问题</option>
                                                    </select>
                                                </td>

                                                <th width="15%" style="background-color:#F5F5F6">
                                                    <span style="font-weight: bold;color: #000;">问题类型:</span>
                                                </th>
                                                <td width="35%">
                                                    <select class="form-control input-sm" name="type">
                                                        <option value="0">请选择</option>
                                                        <option value="1">系统bug</option>
                                                        <option value="3">系统建议</option>
                                                        <option value="2">操作失误</option>
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
                                        问题编号
                                    </th>
                                    <th style="text-align: center;width: 6%">
                                        类型
                                    </th>
                                    <th style="text-align: center;width: 6%">
                                        提交人
                                    </th>
                                    <th style="text-align: center;width: 11%">
                                        提交时间
                                    </th>
                                    <th style="text-align: center;width: 13%">
                                        问题标题
                                    </th>
                                    <th style="text-align: center;width: 25%">
                                        问题描述
                                    </th>

                                    <th style="text-align: center;width: 8%">
                                        状态
                                    </th>
                                    <th style="text-align: center;width: 8%">
                                        操作
                                    </th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('questions')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
                                <tr>

                                    <td style="text-align: center;">
                                        <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>


                                    </td>
                                    <td style="text-align: center;">
                                        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['type']) ? $_smarty_tpl->tpl_vars['row']->value['type'] : null)==1){?>
                                        系统bug
                                        <?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['type']) ? $_smarty_tpl->tpl_vars['row']->value['type'] : null)==2){?>
                                        操作失误
                                        <?php }else{ ?>
                                        系统建议
                                        <?php }?>
                                    </td>
                                    <td style="text-align: center;">
                                        <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['promoter_name']) ? $_smarty_tpl->tpl_vars['row']->value['promoter_name'] : null);?>

                                    </td>
                                    <td style="text-align: center;">
                                        <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['start_time']) ? $_smarty_tpl->tpl_vars['row']->value['start_time'] : null);?>


                                    </td>

                                    <td style="text-align: center;">
                                        <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['title']) ? $_smarty_tpl->tpl_vars['row']->value['title'] : null);?>

                                    </td>
                                    <td style="text-align: center;">
                                        <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['description']) ? $_smarty_tpl->tpl_vars['row']->value['description'] : null);?>

                                    </td>
                                    <td style="text-align: center;">
                                        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['stats']) ? $_smarty_tpl->tpl_vars['row']->value['stats'] : null)==1){?>
                                        待审核
                                        <?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['stats']) ? $_smarty_tpl->tpl_vars['row']->value['stats'] : null)==2){?>
                                        待处理
                                        <?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['stats']) ? $_smarty_tpl->tpl_vars['row']->value['stats'] : null)==3){?>
                                        待确认
                                        <?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['stats']) ? $_smarty_tpl->tpl_vars['row']->value['stats'] : null)==4){?>
                                        待修改
                                        <?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['stats']) ? $_smarty_tpl->tpl_vars['row']->value['stats'] : null)==5){?>
                                        不能解决
                                        <?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['stats']) ? $_smarty_tpl->tpl_vars['row']->value['stats'] : null)==6){?>
                                        确认解决
                                        <?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['stats']) ? $_smarty_tpl->tpl_vars['row']->value['stats'] : null)==7){?>
                                        待复审
                                        <?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['stats']) ? $_smarty_tpl->tpl_vars['row']->value['stats'] : null)==8){?>
                                        已撤回
                                        <?php }?>
                                    </td>

                                    <td align="center">
                                        <div>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['show_check']) ? $_smarty_tpl->tpl_vars['row']->value['show_check'] : null)){?>
                                            <a href="javascript:;" onclick="check(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
);return false;" class="action_icon" title="审核" style="color:#CC6600;">
                                                <i class="iconfont icon-check" aria-hidden="true" style="color:#273a4a"></i>
                                            </a>
                                            <?php }?>

                                            <?php if ($_smarty_tpl->getVariable('user_id')->value==(isset($_smarty_tpl->tpl_vars['row']->value['promoter']) ? $_smarty_tpl->tpl_vars['row']->value['promoter'] : null)&&((isset($_smarty_tpl->tpl_vars['row']->value['stats']) ? $_smarty_tpl->tpl_vars['row']->value['stats'] : null)==4||(isset($_smarty_tpl->tpl_vars['row']->value['stats']) ? $_smarty_tpl->tpl_vars['row']->value['stats'] : null)==1)&&$_smarty_tpl->getVariable('show_change')->value==1){?>
                                            <a href="javascript:;" onclick="change(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
);return false" class="action_icon" title="修改" style="color:#CC6600" target="_blank">
                                                <i class="iconfont icon-xiugai" aria-hidden="true" style="color:#273a4a"></i>
                                            </a>
                                            <?php }?>

                                            <?php if ($_smarty_tpl->getVariable('user_id')->value==(isset($_smarty_tpl->tpl_vars['row']->value['promoter']) ? $_smarty_tpl->tpl_vars['row']->value['promoter'] : null)&&((isset($_smarty_tpl->tpl_vars['row']->value['stats']) ? $_smarty_tpl->tpl_vars['row']->value['stats'] : null)==4||(isset($_smarty_tpl->tpl_vars['row']->value['stats']) ? $_smarty_tpl->tpl_vars['row']->value['stats'] : null)==1||(isset($_smarty_tpl->tpl_vars['row']->value['stats']) ? $_smarty_tpl->tpl_vars['row']->value['stats'] : null)==7)&&$_smarty_tpl->getVariable('show_change')->value==1){?>
                                                <a href="javascript:;" onclick="reback_question(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
);return false" class="action_icon" title="撤回" style="color:#CC6600" target="_blank">
                                                    <i class="iconfont icon-shanchu" aria-hidden="true" style="color:#273a4a"></i>
                                                </a>
                                            <?php }?>

                                            <?php if ($_smarty_tpl->getVariable('show_deal')->value==1&&(isset($_smarty_tpl->tpl_vars['row']->value['stats']) ? $_smarty_tpl->tpl_vars['row']->value['stats'] : null)==2){?>
                                            <a href="javascript:;" onclick="deal(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
);return false;" class="action_icon" title="处理" style="color:#CC6600">
                                                <i class="iconfont icon-deal_question" aria-hidden="true" style="color:#273a4a"></i>
                                            </a>
                                            <?php }?>

                                            <?php if ($_smarty_tpl->getVariable('user_id')->value==(isset($_smarty_tpl->tpl_vars['row']->value['promoter']) ? $_smarty_tpl->tpl_vars['row']->value['promoter'] : null)&&(isset($_smarty_tpl->tpl_vars['row']->value['stats']) ? $_smarty_tpl->tpl_vars['row']->value['stats'] : null)==3){?>
                                            <a href="javascript:;" onclick="check_deal(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
);return false;" class="action_icon" title="确定解决" style="color:#CC6600" >
                                                <i class="iconfont icon-check_deal" aria-hidden="true" style="color:#273a4a"></i>
                                            </a>
                                            <?php }?>

                                            <?php if ($_smarty_tpl->getVariable('show_info')->value==1){?>
                                            <a href="javascript:;" onclick="info(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
);return false;" class="action_icon" title="详情" style="color:#CC6600" target="_blank">
                                                <i class="iconfont icon-mingxi1" aria-hidden="true" style="color:#273a4a"></i>
                                            </a>
                                            <?php }?>
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
    let body_W = $("body").width();
    function setBody_W(){
        body_W = $("body").width();
    }


    function add(){
        setBody_W();
        $.ajax({
            type: "GET",
            url: "check_add.php",
            success: function(data){
                if(data == 1){
                    demo_iframe('add.php','添加问题',body_W,500)
                }else{
                    alert('您有待确认问题，请先确认！')
                }
            }
        })
    }

    function check(id)
    {
        setBody_W();
        demo_iframe('shenhe.php?id='+id,'审核问题',body_W,500);
    }

    function deal(id)
    {
        setBody_W();
        demo_iframe('chuli.php?id='+id,'处理问题',body_W,500);
    }

    function info(id)
    {
        setBody_W();
        demo_iframe('xiangxi.php?id='+id,'查看详情',body_W,500);
    }

    function change(id)
    {
        setBody_W();
        demo_iframe('xiugai.php?id='+id,'修改',body_W,500);
    }

    function tongji()
    {
        setBody_W();
        demo_iframe('tongji.php','统计',body_W,500);
    }

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

    function check_deal(ques_id) {
        swal(
            {title:"已仔细检查确认是否解决问题？",
            text:"",
            type:"warning",
            showCancelButton:true,
            confirmButtonColor:"#DD6B55",
            confirmButtonText:"已解决",
            cancelButtonText:"未解决",
            closeOnConfirm:false,
            closeOnCancel:false},
            function(isConfirm){
                if(isConfirm){
                    $.ajax({
                        type: "GET",
                        url: "quereng.php?id="+ques_id+"&stats=6",
                        success: function(){
                            swal({
                                    title: "",
                                    text: "您反馈了 已解决问题",
                                    type: "warning",
                                    showCancelButton: false,
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "确认",
                                    cancelButtonText: "取消",
                                    closeOnConfirm: false,
                                    closeOnCancel: false
                                },
                                function(isConfirm){
                                    if (isConfirm) {
                                        window.location.reload();
                                    }
                                });
                        }
                    })
                }else{
                    $.ajax({
                        type: 'GET',
                        url: "quereng.php?id="+ques_id+"&stats=2",
                        success: function(){
                            swal({
                                title: "",
                                text: "您反馈了 未解决问题",
                                type: "warning",
                                showCancelButton: false,
                                confirmButtonColor: "#DD6B55",
                                confirmButtonText: "确认",
                                cancelButtonText: "取消",
                                closeOnConfirm: false,
                                closeOnCancel: false
                                },
                                function(isConfirm){
                                    if (isConfirm) {
                                        window.location.reload();
                                    }
                                });
                        }
                    })
                }
            }
        )
    }


    function reback_question(ques_id) {
        swal(
            {title:"已确定是否要撤回问题",
            text:"",
            type:"warning",
            showCancelButton:true,
            confirmButtonColor:"#DD6B55",
            confirmButtonText:"撤回",
            cancelButtonText:"取消",
            closeOnConfirm:false,
            closeOnCancel:true},
        function(isConfirm){
            if(isConfirm){
                $.ajax({
                    type: "GET",
                    url: "index.php?task=back_question&id="+ques_id,
                    success: function(){
                        swal({
                                title: "",
                                text: "您已撤回了问题",
                                type: "warning",
                                showCancelButton: false,
                                confirmButtonColor: "#DD6B55",
                                confirmButtonText: "确认",
                                cancelButtonText: "取消",
                                closeOnConfirm: false,
                                closeOnCancel: false
                            },
                            function(isConfirm){
                                if (isConfirm) {
                                    window.location.reload();
                                }
                            });
                    },
                    error: function() {
                        swal({
                                title: "错误",
                                text: "该问题已无法撤销",
                                type: "error",
                                showCancelButton: false,
                                confirmButtonColor: "#DD6B55",
                                confirmButtonText: "确认",
                                cancelButtonText: "取消",
                                closeOnConfirm: false,
                                closeOnCancel: false
                            },
                            function(isConfirm){
                                if (isConfirm) {
                                    window.location.reload();
                                }
                        });
                    }
                })
            }
        }
    )
    }
</script>

</body>
<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->
</html>