<?php /* Smarty version Smarty-3.0.4, created on 2020-03-06 13:36:50
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/wenti/new_shenhe.html" */ ?>
<?php /*%%SmartyHeaderCode:47555e61e1721dc9e8-21275275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c222b5faa7e8f5d8176613f8ba28e20ae8dc99f' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/wenti/new_shenhe.html',
      1 => 1582363471,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47555e61e1721dc9e8-21275275',
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
    <title>审核问题</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico">
    <link href="../../../crm/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="../../../crm/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="../../../crm/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
    <link href="../../../crm/css/animate.min.css" rel="stylesheet">
    <link href="../../../crm/css/style.min862f.css?v=4.1.0" rel="stylesheet">
    <script type="text/javascript" src="../../../js/jquery.js"></script>
    <script type="text/javascript" src="../../../js/laydate/laydate.js"></script>

    <object classid="clsid:F1317711-6BDE-4658-ABAA-39E31D3704D3" codebase="SDRdCard.cab#version=1,3,5,0" width="330"
            height="0" align="center" hspace="0" vspace="0" id="idcard" name="rdcard"></object>
    <style type="text/css">

        .webuploader-pick {
            position: relative;
            display: inline-block;
            cursor: pointer;
            background: #00b7ee;
            padding: 10px 15px;
            color: #fff;
            text-align: center;
            border-radius: 3px;
            overflow: hidden;
        }

        .webuploader-element-invisible {
            position: absolute !important;
            clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
            clip: rect(1px,1px,1px,1px);
        }

    </style>

</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">

    <!-- Panel Other -->
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>审核问题</h5>
        </div>
        <script>
            function check_form() {
                let status = $("#status").val();

                if(status == 7){
                    if($("#wenti_shenheyijian").val() == ''){
                        alert('提交复审时，意见必填');
                        $("#wenti_shenheyijian").attr('placeholder', '必填');
                        return false;
                    }
                }
            }
        </script>
        <form method="post" action="shenhe_a.php" onsubmit="return check_form();" name="form1" enctype="multipart/form-data">
            <div class="ibox-content">
                <div class="row row-lg">
                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="example-wrap">
                            <div class="example">
                                <table class="table table-bordered">
                                    <tr>
                                        <th style="background-color:#F5F5F6" width="15%">
                                            <span style="color:#000">审核结果：</span>
                                        </th>
                                        <td width="35%">

                                                <select class="form-control input-sm" id="status" name="stats">
                                                    <option selected value="<?php echo $_smarty_tpl->getVariable('waiting_deal')->value;?>
">通过</option>
                                                    <option value="<?php echo $_smarty_tpl->getVariable('waiting_change')->value;?>
">发回修改</option>
                                                    <?php if ($_smarty_tpl->getVariable('is_manager')->value!=1){?>
                                                    <option value="<?php echo $_smarty_tpl->getVariable('recheck')->value;?>
">提交复审</option>
                                                    <?php }?>
                                                </select>

                                        </td>

                                        <th style="background-color:#F5F5F6" width="15%">
                                            <span style="color:#000">意见：</span>
                                        </th>
                                        <td width="35%">
                                            <input class="form-control input-sm"  name="reason" id="wenti_shenheyijian">
                                        </td>
                                    </tr>
                                </table>
                                <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->getVariable('id')->value;?>
" />
                                <input type="submit" class="btn btn-outline btn-default" style="width: 10%;margin-left: 45%;display: block;" value="确定" />
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
<script type="text/javascript" src="../../../js/common1.js?a=<?php echo time();?>
"></script>
</body>
<script type="text/javascript">


</script>


<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->
</html>
