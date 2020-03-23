<?php /* Smarty version Smarty-3.0.4, created on 2020-02-20 13:58:27
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/wenti/new_chuli.html" */ ?>
<?php /*%%SmartyHeaderCode:234335e4e20038ba625-24368833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfd0d6f8926969021ebb7047fd8781381b82f9b4' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/wenti/new_chuli.html',
      1 => 1582178302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '234335e4e20038ba625-24368833',
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
    <title>处理问题</title>

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
</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">

    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>处理问题</h5>
        </div>
        <form method="post" action="chuli_a.php">
            <div class="ibox-content">
                <div class="row row-lg">
                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="example-wrap">
                            <div class="example">
                                <table class="table table-bordered">
                                    <tr>
                                        <th style="background-color:#F5F5F6" width="15%">
                                            <span style="color:#000">处理结果：</span>
                                        </th>
                                        <td width="35%">

                                            <select class="form-control input-sm"  name="stats">
                                                <option selected value="<?php echo $_smarty_tpl->getVariable('dealed')->value;?>
">问题解决</option>
                                                <option value="<?php echo $_smarty_tpl->getVariable('cannot_deal')->value;?>
">不能解决</option>
                                                <option value="<?php echo $_smarty_tpl->getVariable('waiting_change')->value;?>
">发回修改</option>
                                                <?php if ($_smarty_tpl->getVariable('show_recheck')->value==1){?>
                                                <option value="7">发回复审</option>
                                                <?php }?>
                                            </select>

                                        </td>

                                        <th style="background-color:#F5F5F6" width="15%">
                                            <span style="color:#000">反馈：</span>
                                        </th>
                                        <td width="35%">
                                            <input class="form-control input-sm"  name="deal_reason">
                                        </td>
                                    </tr>
                                </table>
                                <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->getVariable('id')->value;?>
"/>
                                <input type="submit" class="btn btn-outline btn-default"
                                       style="width: 10%;margin-left: 45%;display: block;" value="确定"/>
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
