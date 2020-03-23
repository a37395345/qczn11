<?php /* Smarty version Smarty-3.0.4, created on 2020-01-07 19:09:35
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/wenti/new_add.html" */ ?>
<?php /*%%SmartyHeaderCode:318615e1466675541a2-08375235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '605db185b3f23a69a76f651206043b80594166af' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/wenti/new_add.html',
      1 => 1578395320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '318615e1466675541a2-08375235',
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
    <title>添加员工</title>
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

    <script src="../../../../jquery.js"></script>
    <script type="text/javascript" src="../../../../js/common.js"></script>
    <script type="text/javascript" src="../../../../js/calendar.js"></script>
    <script type="text/javascript" src="../../../../js/check_form.js"></script>
    <link rel="stylesheet" type="text/css" href="../../../../css/webuploader.css">
    <link rel="stylesheet" type="text/css" href="../../../../css/diyUpload.css">
    <script type="text/javascript" src="../../../../js/diyUpload/webuploader.html5only.min.js"></script>
    <script type="text/javascript" src="../../../../js/diyUpload/diyUpload.js?a=2"></script>

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
        .th_back{
            background-color:#F5F5F6
        }

    </style>

</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">

    <!-- Panel Other -->
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>添加问题</h5>
        </div>
        <form method="post" action="insert.php" name="form1" enctype="multipart/form-data">
            <div class="ibox-content">
                <div class="row row-lg">
                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="example-wrap">
                            <div class="example">
                                <table class="table table-bordered" style="margin-bottom: 0px;">
                                    <tr>
                                        <th class="th_back" width="15%">
                                            <span style="color:#000">问题类型：</span>
                                        </th>
                                        <td width="35%">
                                            <select name="type" id="type" class="form-control input-sm" >
                                                <option value="0">请选择问题类型</option>
                                                <option value="<?php echo $_smarty_tpl->getVariable('bug')->value;?>
">系统bug</option>
                                                <option value="<?php echo $_smarty_tpl->getVariable('advise')->value;?>
">系统建议</option>
                                                <option value="<?php echo $_smarty_tpl->getVariable('mistake')->value;?>
">操作失误</option>
                                            </select>
                                        </td>

                                        <th class="th_back" width="15%">
                                            <span style="color:#000">问题标题：</span>
                                        </th>
                                        <td width="35%">
                                            <input type="text" class="form-control input-sm" placeholder="必填" name="title" id="title">
                                        </td>
                                    </tr>
                                </table>
                                <table class="table table-bordered">
                                    <tr>
                                        <th class="th_back" width="15%">
                                            <span style="color:#000">问题描述：</span>
                                        </th>
                                        <td width="85%">
                                            <input type="text" class="form-control input-sm" placeholder="必填" name="desc" id="desc">
                                        </td>
                                    </tr>
                                </table>
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td width="100%">
                                            <div id="box" style="min-height: 300px;">
                                                <div id="test" class="webuploader-container">

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <input type="hidden" name="tmpid" id="tmpid" value="<?php echo $_smarty_tpl->getVariable('tmpid')->value;?>
"/>

                                <script type="text/javascript">
                                    var cid = $("#tmpid").val();
                                    $('#test').diyUpload({
                                        url: '../../../../site/includes/fileupload.php?id=8888',
                                        success: function (data) {
                                            //alert(data.jsonrpc);
                                            console.info(data);
                                        },
                                        error: function (err) {
                                            console.info(err);
                                        },
                                        formData: {
                                            contractid: 0, wenti: cid
                                        }
                                    });
                                </script>

                                <input type="submit" id="bt1" class="btn btn-outline btn-default" value="提交" style="width: 10%;margin-left: 45%;display: block;">
                            </div>
                            <script>
                                $("#bt1").click(function () {
                                    var title = $("#title").val();
                                    var desc = $("#desc").val();
                                    var type = $("#type").val();
                                    if (title == "") {
                                        alert('标题不能为空！');
                                        return false;
                                    }
                                    if (desc == "") {
                                        alert('请详细描述下需要解决的问题！');
                                        return false;
                                    }
                                    if (type == 0) {
                                        alert('请选择问题类型！');
                                        return false;
                                    }
                                });
                            </script>
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
