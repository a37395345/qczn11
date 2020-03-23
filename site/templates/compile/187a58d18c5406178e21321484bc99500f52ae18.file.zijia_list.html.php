<?php /* Smarty version Smarty-3.0.4, created on 2020-03-20 17:23:41
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/zijia_linshi/zijia_list.html" */ ?>
<?php /*%%SmartyHeaderCode:235765e748b9d216506-75317883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '187a58d18c5406178e21321484bc99500f52ae18' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/zijia_linshi/zijia_list.html',
      1 => 1584696199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '235765e748b9d216506-75317883',
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
<title>管理后台</title>
<link rel="shortcut icon" href="favicon.ico">
<link href="../../../crm/fonts1/iconfont.css?a=2" rel="stylesheet">
<link href="../../../crm/css/bootstrap.min14ed.css" rel="stylesheet">
<link href="../../../crm/css/font-awesome.min93e3.css?v=3" rel="stylesheet">
<link href="../../../crm/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
<script type="text/javascript" src="../../../js/laydate/laydate.js"></script>
<link href="../../../crm/css/animate.min.css" rel="stylesheet">
<link href="../../../crm/css/style.min862f.css" rel="stylesheet">
<link href="../../../css/conmone.css" rel="stylesheet">

<link href="../../../crm/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
<script type="text/javascript" src="../../../js/jquery.js">
</script>
<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css?a=2" rel="stylesheet">
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js?a=5"></script>

<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN1.js?a=101"></script>

<script type="text/javascript">
        function isDel() {
            swal(
                {title:"您确定要删除这条信息吗",
                      text:"删除后将无法恢复，请谨慎操作！",
                      type:"warning",
                      showCancelButton:true,
                      confirmButtonColor:"#DD6B55",
                      confirmButtonText:"确定",
                      cancelButtonText:"取消",
                      closeOnConfirm:false,
                      closeOnCancel:false},
                      function(isConfirm){
                        if(isConfirm){
                            swal("删除成功！","您已经永久删除了这条信息。",
                                 "success"
                            )
                        }else{
                            swal("已取消",
                                 "您取消了删除操作！","error"
                            )
                        }
                    }
                )
        };
    </script>
    <style type="text/css">
        tr{
            font-size: 12px;line-height: 10px;
        }
        td{
            
margin: 0;padding: 1px !important;list-style: none;color: #000000;
        }

        @media only screen and (max-width: 800px) {
            .width100 {
                width: 100%;
            }
            .width98 {
                width: 98%;
            }
            .width48 {
                width: 48%;
            }
        }
        
    </style>
</head>
<body class="gray-bg">
    <div id="back" style="width: 100%;height: 100%;z-index: 2;display: none;position: fixed;text-align: center;padding-top: 10px;">
        <a href="javascript:hidden();" class="btn btn-outline btn-default" style="background-color: #293846;float: right;margin-right: 6%;font-size: 18px;">
            X
        </a>
        <div style="width: 80%;height: 500px;margin: 0px auto;">     
            <video id="course" src="https://gfjugyu.oss-cn-shanghai.aliyuncs.com/MyVideo_1.mp4" controls playsinline="true"></video>
        </div>
    </div>
<div class="wrapper wrapper-content animated fadeInRight" style="z-index: 1;">
    <!-- Panel Other -->
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>临时自驾派车管理&nbsp;&nbsp;<a style="float: right;margin-top: -9px;" href="javascript:play();" class="btn btn-outline btn-default">
                使用教程
            </a> </h5>
            
        </div>
        <form id="form1" action="zijia_list.php" method="get">
            <div class="wrapper wrapper-content animated fadeInRight" style=" margin: 0; padding: 0;">
                <div class="ibox float-e-margins" style="margin:0">
                     <div class="ibox-title" style=" margin: 0; padding: 0; float: left;margin-bottom: 5px;width: 100%;">

                        <div class="ibox-tools" style="padding-top: 12px; padding-left: 10px;float: left">
                            <span style="color:#000;">状态:</span>
                        </div>
                         <div class="ibox-tools" style="padding-top: 6px; padding-right: 20px;float: left">
                            <select class="form-control input-sm" name="search_status" id="search_status">
                                <option <?php if ($_smarty_tpl->getVariable('search_status')->value=="qb"){?>selected<?php }?> value="qb">全部</a></option>
                                <option <?php if ($_smarty_tpl->getVariable('search_status')->value=="yy"){?>selected<?php }?> value="yy">预约单</option>
                                <option <?php if ($_smarty_tpl->getVariable('search_status')->value=="qx"){?>selected<?php }?> value="qx">取消单</option>
                                <option <?php if ($_smarty_tpl->getVariable('search_status')->value=="ss"){?>selected<?php }?> value="ss">正在运行中</option>
                                <!--<option <?php if ($_smarty_tpl->getVariable('search_status')->value=="cswh"){?>selected<?php }?> value="cswh">调车超时未还车</option>-->
                                <option <?php if ($_smarty_tpl->getVariable('search_status')->value=="yh"){?>selected<?php }?> value="yh">已还车未结账</option>

                                 <option <?php if ($_smarty_tpl->getVariable('search_status')->value=="yj"){?>selected<?php }?> value="yj">已结账</option>
                                <!--
                                 <option <?php if ($_smarty_tpl->getVariable('search_status')->value=="cswh"){?>selected<?php }?> value="cswh" >超时4小时未续</option>
                                 <option <?php if ($_smarty_tpl->getVariable('search_status')->value=="zjyy"){?>selected<?php }?> value="zjyy" >72h预约订单</option>
                               -->
                            </select>
                            <input type="hidden" name="search_status_a" value=<?php echo $_smarty_tpl->getVariable('search_status')->value;?>
>
                        </div>
                        <h5 style="padding-top: 15px; padding-left: 10px;">搜索
                        </h5>

                        <div class="ibox-tools" style="padding-top: 14px; padding-left: 10px;float: left;">
                            <a class="collapse-link">
                            <i class="fa fa-chevron-down" id="up"></i>
                            </a>
                        </div>
                         
                        
                        <div class="ibox-tools" style=" padding-right: 0;float: left;">
                            <div class="width100" style="float: left;margin-bottom: -18px;" >
                                <div class="width48" style="margin: 10px 1px;float: left;" >
                                    <a style="width: 98%;" href="zijia_list.php?search_status=cswh" class="btn btn-outline btn-default">超时4小时未续：<span style="color:red"><?php echo $_smarty_tpl->getVariable('chaoshiweihuan')->value;?>
</span>个
                                    </a><br />
                                    <a style="width: 98%;" href="zijia_list.php?search_status=cswh&paicheCounterShop=<?php echo $_smarty_tpl->getVariable('nowshopid')->value;?>
" class="btn btn-outline btn-default">业务门店超时4小时未续:<span style="color:red"><?php echo $_smarty_tpl->getVariable('chaoshiweihuan_b')->value;?>
</span>个
                                    </a>
                                </div>
    
                                <div class="width48" style="margin: 10px 1px;float: left;" >  
                                    <a style="width: 98%;" href="zijia_list.php?search_status=zjyy" class="btn btn-outline btn-default">72h预约订单：<span style="color:red"><?php echo $_smarty_tpl->getVariable('getzuijinyueyue')->value;?>
</span>个
                                    </a><br />
                                    <a style="width: 98%;" href="zijia_list.php?search_status=zjyy&paicheCounterShop=<?php echo $_smarty_tpl->getVariable('nowshopid')->value;?>
" class="btn btn-outline btn-default">业务门店72h预约订单:<span style="color:red"><?php echo $_smarty_tpl->getVariable('getzuijinyueyue_b')->value;?>
</span>个
                                    </a>
                                </div>
                            </div>
                            
                            <div class="width100" style="float: left;" >
                                <div class="width48" style="margin: 10px 1px;float: left;" >  
                                    <a style="width: 98%;" href="zijia_list.php?search_status=yh" class="btn btn-outline btn-default">已还车未结账的订单:<span style="color:red"><?php echo $_smarty_tpl->getVariable('getyhwj')->value;?>
</span>个
                                    </a><br />
                                    <a style="width: 98%;" href="zijia_list.php?search_status=yh&paicheCounterShop=<?php echo $_smarty_tpl->getVariable('nowshopid')->value;?>
" class="btn btn-outline btn-default">业务门店已还车未结账的订单:<span style="color:red"><?php echo $_smarty_tpl->getVariable('getyhwj_b')->value;?>
</span>个
                                    </a>
                                </div>
    
                                <div class="width48" style="margin: 10px 1px;float: left;" >  
                                     <?php if ($_smarty_tpl->getVariable('zijia_create')->value==1){?>
                                    <a style="width: 98%;" href="zijia_create.php" class="btn btn-outline btn-default">
                                    <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                                    新建预约单  
                                    </a><br />
                                    <?php }?>
         
                                    <?php if ($_smarty_tpl->getVariable('zijia_create')->value==1){?>
                                    <a style="width: 98%;" href="zijia_create.php?paidan_type_b=s" class="btn btn-outline btn-default">
                                    <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                                    新建实时单
                                    </a>
                                    <?php }?>
                                </div>
                            </div>
                            
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
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;合同号:</span>
                                            </th>
                                            <td width="35%">
                                                <input type="text" class="form-control input-sm" placeholder="合同号" name="paiche_contractNum">
                                            </td>

                                             <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;客户来源:</span>
                                            </th>
                                            <td width="35%">
                                                <select class="form-control input-sm" name="paiche_kehu" id="paiche_kehu">
                                                    <option value="0">请选择</option>
                                                    <option value="1">临时散客</option>
                                                    <option value="2">平台用户</option>
                                                    <option value="3">凹凸代步车</option>
                                                    <option value="4">违章冻结</option>
                                                    <option value="5">境外客户</option>

                                                </select>
                                            </td>
                                           
                                        </tr>
                                        <tr>
                                             <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000">&nbsp;&nbsp;&nbsp;&nbsp;车牌号:</span>
                                            </th>
                                            <td>
                                                <input type="text" class="form-control input-sm" placeholder="车牌号" name="paiche_car">
                                            </td>
                                            <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;客户类型:</span>
                                            </th>
                                            <td width="35%">
                                                <select class="form-control input-sm" name="paiche_pintaiid" id="paiche_pintaiid">
                                                <option value="0" >请选择</option>
                                                <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pintai_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                                    <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['name']) ? $_smarty_tpl->tpl_vars['rows']->value['name'] : null);?>
</option>
                                                <?php }} ?>
                                                </select>
                                               
                                                 <input type="text" class="form-control input-sm" placeholder="客户类型" name="paiche_pintaiida" id="paiche_pintaiida" readonly="readonly" unselectable="on">
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000">&nbsp;&nbsp;&nbsp;&nbsp;联系人:</span>
                                            </th>
                                            <td width="35%">
                                                <input type="text" class="form-control input-sm" placeholder="联系人" name="paiche_linker">
                                            </td>
                                            <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;业绩店铺:</span>
                                            </th>
                                            <td width="35%">
                                                <select class="form-control input-sm" name="paicheCounterShop">
                                                    <option value="0">请选择</option>
                                                <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shoplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                                    <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null);?>
" <?php if ($_smarty_tpl->getVariable('paicheCounterShop')->value==(isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>
</option>
                                                <?php }} ?>
                                                </select>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                             <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000">&nbsp;&nbsp;&nbsp;&nbsp;联系电话:</span>
                                            </th>
                                            <td width="35%">
                                                <input type="text" class="form-control input-sm" placeholder="联系电话" name="paiche_linkerPhone">
                                            </td>
                                            <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;调度店铺:</span>
                                            </th>
                                            <td width="35%">
                                                <select class="form-control input-sm" name="paiche_shopid">
                                                    <option value="0">请选择</option>
                                                <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shoplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                                    <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>
</option>
                                                <?php }} ?>
                                                </select>
                                            </td>

                                        </tr>

                                         <tr>
                                            <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;身份证:</span>
                                            </th>
                                            <td width="35%">
                                                <input type="text" class="form-control input-sm" placeholder="身份证号码" name="paiche_linkerNum">
                                            </td>
                                            <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;开始时间:</span>
                                            </th>
                                            
                                            <td width="35%">
                                                <input name="paiche_startDate" placeholder="请输入日期" value="" class="laydate-icon form-control input-sm" onclick="laydate({istime: true, format: 'YYYY-MM-DD'})" unselectable="on" readonly>
                                            </td>
                                            
                                            
                                        </tr>
                                        <tr>
                                            <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;身份验证方式:</span>
                                            </th>
                                            <td width="35%">
                                              <select class="form-control input-sm" name="paiche_stype">
                                                    <option value="0">请选择</option>
                                                    <option value="1">手动输入</option>
                                                    <option value="2">刷身份证验证</option>
                                                    <option value="3">老客户短信验证</option>
                                                    <option value="4">新客户人脸验证</option>
                                                </select>
                                            </td>
                                            <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000">&nbsp;&nbsp;&nbsp;&nbsp;结束时间:</span>
                                            </th>
                                            <td width="35%">
                                                <input name="paiche_endDate" placeholder="请输入日期" value="" class="laydate-icon form-control input-sm" onclick="laydate({istime: true, format: 'YYYY-MM-DD'})" unselectable="on" readonly>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <?php if ($_smarty_tpl->getVariable('zijia_shenghe')->value==1&&$_smarty_tpl->getVariable('search_status')->value=='yj'){?>
                                            <th width="15%" style="background-color:#F5F5F6">
                                            
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;订单审核状态:</span>
                                            

                                            </th>

                                            <td width="35%">
                                                 
                                                    <select class="form-control input-sm" name="zijia_shenhe">
                                                        <option value="0">全部</option>
                                                        <option value="1">未审核</option>
                                                        <option value="2">已审核</option>

                                                    </select>
                                               
                                            </td>
                                            <?php }else{ ?>
                                             <th width="15%" style="background-color:#F5F5F6">
                                            
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                            

                                            </th>

                                            <td width="35%">
                                               
                                            </td>
                                            <?php }?>
                                            <th width="15%" style="background-color:#F5F5F6;" class="paiche_pintainum">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;平台单号:</span>

                                            </th>

                                            <td width="35%" class="paiche_pintainum">
                                                 
                                                    <input type="text" class="form-control input-sm" placeholder="平台单号" name="paiche_pintainum">
                                               
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
                               
                                <th style="text-align: center;width: 4%">
                                    状态
                                </th>
                                <th style="text-align: center;width: 9%">
                                    合同编号
                                </th>
                                <th style="text-align: center;width: 10%">
                                    联系人信息
                                </th>
                                <th style="text-align: center;width: 8%">
                                    业务员
                                </th>
                                <th style="text-align: center;width: 11%">
                                    用车时间
                                </th>
                                <th style="text-align: center;width: 8%">
                                    调度人
                                </th>
                                <th style="text-align: center;width: 4%">
                                    车辆
                                </th>
                                <th style="text-align: center;width: 22%">
                                    金额明细
                                </th>
                                


                                <th style="width: 14%">
                                    <div align="center">
                                        操作
                                    </div>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable(1, null, null);?>
                                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('busiList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
                            <tr>
            
                                <td style="text-align: center;color: <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['zhuangtai']) ? $_smarty_tpl->tpl_vars['row']->value['zhuangtai'] : null)=='预约单'){?>#4b5fe6<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['zhuangtai']) ? $_smarty_tpl->tpl_vars['row']->value['zhuangtai'] : null)=='违约单'){?>#141415<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['zhuangtai']) ? $_smarty_tpl->tpl_vars['row']->value['zhuangtai'] : null)=='取消单'){?>#8c948e<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['zhuangtai']) ? $_smarty_tpl->tpl_vars['row']->value['zhuangtai'] : null)=='超时4小时以内未还'){?>#fb6800<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['zhuangtai']) ? $_smarty_tpl->tpl_vars['row']->value['zhuangtai'] : null)=='超时4小时以上未还'){?>red<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['zhuangtai']) ? $_smarty_tpl->tpl_vars['row']->value['zhuangtai'] : null)=='调车未还'){?>#0bea3b<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['zhuangtai']) ? $_smarty_tpl->tpl_vars['row']->value['zhuangtai'] : null)=='已还车未结账'){?>#ff00f7
                                <?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['zhuangtai']) ? $_smarty_tpl->tpl_vars['row']->value['zhuangtai'] : null)=='已结账'){?>

                                    #17c8e4

                                <?php }?>;">
                                    <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['zhuangtai']) ? $_smarty_tpl->tpl_vars['row']->value['zhuangtai'] : null);?>


                                    <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_jie']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_jie'] : null)==3){?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_checkTimes']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_checkTimes'] : null)>0){?>
                                            <br><span style="color: #2d2f2f">（已审核）</span>
                                        <?php }else{ ?>
                                            <br><span style="color: red">（未审核）</span>
                                        <?php }?>
                                    <?php }?>
                                </td>
                                
                                <td style="text-align: center;">
                                    <span  style="border-bottom:1px solid #b19d9d;line-height: 23px">
                                                <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_contractNum'] : null);?>

                                    </span>
                                    <br/>
            
                                    <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_kehu']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_kehu'] : null)==1){?>
                                    临时散客
                                    <?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['paiche_kehu']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_kehu'] : null)==2){?>
                                            <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_pintainame']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_pintainame'] : null);?>
<br/>单号：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_pintainum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_pintainum'] : null);?>

                                    <?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['paiche_kehu']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_kehu'] : null)==3){?>
                                    凹凸代步车<br/>单号：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_pintainum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_pintainum'] : null);?>

                                    <?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['paiche_kehu']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_kehu'] : null)==4){?>
                                    违章冻结
                                    <?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['paiche_kehu']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_kehu'] : null)==5){?>
                                    境外客户
                                    <?php }?>
                                            
                                </td>
                                <td style="text-align: center;">
                                     <span <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_linkerNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linkerNum'] : null)!=''){?> style="border-bottom:1px solid #b19d9d;line-height: 23px"<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linker']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linker'] : null);?>
<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_linkerPhone']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linkerPhone'] : null)){?>(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linkerPhone']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linkerPhone'] : null);?>
)<?php }?></br><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linkerNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linkerNum'] : null);?>
</br><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_stype']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_stype'] : null)==0){?><span style="color:red">手动输入</span><?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['paiche_stype']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_stype'] : null)==1){?>刷身份证验证<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['paiche_stype']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_stype'] : null)==2){?>老客户短信验证<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['paiche_stype']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_stype'] : null)==3){?>新客户人脸验证
                                 <?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['paiche_stype']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_stype'] : null)==4){?>系统默认<?php }?></span>
                                </td>
                                <td style="text-align: center;">
                                    <span style="border-bottom:1px solid #b19d9d;line-height: 23px"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['ywshopname']) ? $_smarty_tpl->tpl_vars['row']->value['ywshopname'] : null);?>

                                    </span><br/><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['yewuyuan']) ? $_smarty_tpl->tpl_vars['row']->value['yewuyuan'] : null);?>

                                </td>
                                <td style="text-align: center;">
                                    <span style="border-bottom:1px solid #b19d9d;line-height: 23px"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_startDate'] : null);?>

                                    </span><br/><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_endDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_endDate'] : null);?>

                                </td>
                                <td style="text-align: center;">
                                    <span style="border-bottom:1px solid #b19d9d;line-height: 23px"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null);?>

                                    </span><br/><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['jiedaiyuan']) ? $_smarty_tpl->tpl_vars['row']->value['jiedaiyuan'] : null);?>

                                </td>
                                <td style="text-align: center;">
                                    
                                     <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_shunt']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_shunt'] : null)==1){?>
                                        <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_shuntline']['bro_name']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_shuntline']['bro_name'] : null);?>

                                    <?php }else{ ?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_status']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_status'] : null)==0){?>
                                            <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num2']) ? $_smarty_tpl->tpl_vars['row']->value['car_num2'] : null);?>

                                        <?php }else{ ?>
                                            <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>

                                            <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_changelist']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_changelist'] : null)){?>
                                                <?php  $_smarty_tpl->tpl_vars['row10'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['row']->value['paiche_changelist']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_changelist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row10']->key => $_smarty_tpl->tpl_vars['row10']->value){
?>
                                                            <br/><font style="TEXT-DECORATION: line-through;"><?php echo (isset($_smarty_tpl->tpl_vars['row10']->value['carA']) ? $_smarty_tpl->tpl_vars['row10']->value['carA'] : null);?>
</font><?php }} ?>
                                            <?php }?>

                                         <?php }?>
                                    <?php }?>
                                </td>
                                <td style="text-align:left;">
                                    <?php $_smarty_tpl->tpl_vars['z_yingshou'] = new Smarty_variable(0, null, null);?>
                                    <?php $_smarty_tpl->tpl_vars['z_yingshou_a'] = new Smarty_variable(0, null, null);?>
            <?php $_smarty_tpl->tpl_vars['yinshou'] = new Smarty_variable(0, null, null);?><?php $_smarty_tpl->tpl_vars['yishou'] = new Smarty_variable(0, null, null);?>
        <?php  $_smarty_tpl->tpl_vars['row2'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['row']->value['paiche_chargelist']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_chargelist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row2']->key => $_smarty_tpl->tpl_vars['row2']->value){
?>

        <?php if ((isset($_smarty_tpl->tpl_vars['row2']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row2']->value['charge_name'] : null)=='押金'){?>
            <span style="border-bottom:1px solid #b19d9d;line-height: 23px">
                <?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row2']->value['charge_name'] : null);?>
:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row2']->value['conv_money'] : null);?>
元-已收:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_in_money'] : null);?>
元-已冻结:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['have_freeze_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_freeze_money'] : null);?>
元<?php if ((isset($_smarty_tpl->tpl_vars['row2']->value['back_money']) ? $_smarty_tpl->tpl_vars['row2']->value['back_money'] : null)!=0){?>-已退:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_back_money'] : null);?>
元<?php }?><br/><br/>
            </span>
        <?php }else{ ?>
            <?php $_smarty_tpl->tpl_vars['yinshou'] = new Smarty_variable($_smarty_tpl->getVariable('yinshou')->value+(isset($_smarty_tpl->tpl_vars['row2']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row2']->value['conv_money'] : null), null, null);?><?php $_smarty_tpl->tpl_vars['yishou'] = new Smarty_variable($_smarty_tpl->getVariable('yishou')->value+(isset($_smarty_tpl->tpl_vars['row2']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_in_money'] : null), null, null);?>

            <span style="border-bottom:1px solid #b19d9d;line-height: 23px">
                
                <?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row2']->value['charge_name'] : null);?>
:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row2']->value['conv_money'] : null);?>
元 &nbsp;&nbsp;已收:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_in_money'] : null);?>
元<br/>
                
            </span>
        <?php }?>
        <?php }} ?>

        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_unlimitTime']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_unlimitTime'] : null)!="Y"&&(isset($_smarty_tpl->tpl_vars['row']->value['settle_overTimeMoney']) ? $_smarty_tpl->tpl_vars['row']->value['settle_overTimeMoney'] : null)!=0){?>
            <span style="border-bottom:1px solid #b19d9d;line-height: 23px">
                超时费:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_overTimeMoney']) ? $_smarty_tpl->tpl_vars['row']->value['settle_overTimeMoney'] : null);?>
元 &nbsp;&nbsp;已收:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_overTimeMoney_have']) ? $_smarty_tpl->tpl_vars['row']->value['settle_overTimeMoney_have'] : null);?>
元<br/>
            </span>
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_unlimitKm']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_unlimitKm'] : null)!="Y"&&(isset($_smarty_tpl->tpl_vars['row']->value['settle_overKmMoney']) ? $_smarty_tpl->tpl_vars['row']->value['settle_overKmMoney'] : null)!=0){?>
            <span style="border-bottom:1px solid #b19d9d;line-height: 23px">
                超公里费:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_overKmMoney']) ? $_smarty_tpl->tpl_vars['row']->value['settle_overKmMoney'] : null);?>
元 &nbsp;&nbsp;已收:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_overKmMoney_have']) ? $_smarty_tpl->tpl_vars['row']->value['settle_overKmMoney_have'] : null);?>
元<br/>
            </span>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_status']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_status'] : null)==-1){?>
              <span style="border-bottom:1px solid #b19d9d;line-height: 23px">
                违约金:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_vio']) ? $_smarty_tpl->tpl_vars['row']->value['settle_vio'] : null);?>
元 &nbsp;&nbsp;已收:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_vio']) ? $_smarty_tpl->tpl_vars['row']->value['settle_vio'] : null);?>
元<br/>
            </span>
        <?php }?>


        <br/>
        <?php $_smarty_tpl->tpl_vars['yinyouhui'] = new Smarty_variable(0, null, null);?><?php $_smarty_tpl->tpl_vars['yiyouhui'] = new Smarty_variable(0, null, null);?>
        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_youhuilist']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_youhuilist'] : null)){?>
        <?php  $_smarty_tpl->tpl_vars['row2'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['row']->value['paiche_youhuilist']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_youhuilist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row2']->key => $_smarty_tpl->tpl_vars['row2']->value){
?>
            <span style="border-bottom:1px solid #b19d9d;line-height: 23px;color: red">
                <?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['youhui_name']) ? $_smarty_tpl->tpl_vars['row2']->value['youhui_name'] : null);?>
:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['youhui_mone']) ? $_smarty_tpl->tpl_vars['row2']->value['youhui_mone'] : null);?>
元 &nbsp;&nbsp;已优惠:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['youhui_omone']) ? $_smarty_tpl->tpl_vars['row2']->value['youhui_omone'] : null);?>
元<br/>
            </span>
        <?php $_smarty_tpl->tpl_vars['yinyouhui'] = new Smarty_variable($_smarty_tpl->getVariable('yinyouhui')->value+(isset($_smarty_tpl->tpl_vars['row2']->value['youhui_mone']) ? $_smarty_tpl->tpl_vars['row2']->value['youhui_mone'] : null), null, null);?><?php $_smarty_tpl->tpl_vars['yiyouhui'] = new Smarty_variable($_smarty_tpl->getVariable('yiyouhui')->value+(isset($_smarty_tpl->tpl_vars['row2']->value['youhui_omone']) ? $_smarty_tpl->tpl_vars['row2']->value['youhui_omone'] : null), null, null);?>
        <?php }} ?>
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['settle_favor']) ? $_smarty_tpl->tpl_vars['row']->value['settle_favor'] : null)!=0){?>
             <span style="border-bottom:1px solid #b19d9d;line-height: 23px;color: red">
            优惠：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_favor']) ? $_smarty_tpl->tpl_vars['row']->value['settle_favor'] : null);?>
元&nbsp;&nbsp;已优惠:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_favor']) ? $_smarty_tpl->tpl_vars['row']->value['settle_favor'] : null);?>
元<br/>
            </span>
        <?php }?>

        <br/><br/>
        
                                </td>
                              
                                <td align="center">
                                    <div>
                                    <?php if ($_smarty_tpl->getVariable('zijia_shenghe')->value==1&&(isset($_smarty_tpl->tpl_vars['row']->value['paiche_checkTimes']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_checkTimes'] : null)==0&&(isset($_smarty_tpl->tpl_vars['row']->value['paiche_jie']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_jie'] : null)==3){?>
                                    &nbsp;&nbsp;
                                       <a href="javascript:;" onclick="zijia_shenghe(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);return false" title=" 订单审核" style="color:#CC6600" target="_blank">
                                        <i style="font-size: 22px;color: red" class="fa fa-flask"></i>
                                   
                                    </a>

                                    <?php }?>

                                    <?php if ($_smarty_tpl->getVariable('zijia_create')->value==1){?>
                                   
                                         <?php if (($_smarty_tpl->getVariable('nowshopid')->value==(isset($_smarty_tpl->tpl_vars['row']->value['paiche_shopid']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_shopid'] : null)||$_smarty_tpl->getVariable('nowshopid')->value==(isset($_smarty_tpl->tpl_vars['row']->value['paicheCounterShop']) ? $_smarty_tpl->tpl_vars['row']->value['paicheCounterShop'] : null)||$_smarty_tpl->getVariable('bufen_quanbu')->value==1)&&((isset($_smarty_tpl->tpl_vars['row']->value['paiche_jie']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_jie'] : null)==-1)){?>
                                          &nbsp;&nbsp;
                                        <a href="zijia_create.php?p_id=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
&paidan_type_a=update" title="修改">
                                        <i class="iconfont icon-xiugai" aria-hidden="true"></i>
                                        </a>
                                        <?php }?>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->getVariable('zijia_create')->value==1){?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_jie']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_jie'] : null)==-1){?>
                                                    &nbsp;&nbsp;
                                        <a href="zijia_create.php?p_id=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
&paidan_type_a=diaoche" title="调度" style="color:#CC6600">
                                        <i class="iconfont icon-ziyuan" aria-hidden="true"></i>
                                        </a>
                                        <?php }?>
                                    <?php }?>


                                        <?php if ($_smarty_tpl->getVariable('zijia_changecar')->value==1){?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_jie']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_jie'] : null)==1){?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_kehu']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_kehu'] : null)==1||(isset($_smarty_tpl->tpl_vars['row']->value['paiche_kehu']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_kehu'] : null)==2){?>
                <a href="javascript:;" onclick="yanzheng_shenfen(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);return false" title="换车" style="color:#CC6600" target="_blank">
                    <i class="iconfont icon-qiehuancheliang" aria-hidden="true"></i>
                                            </a>
                                            <?php }else{ ?>
                                            <a href="javascript:;" onclick="zijia_changecar(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);return false" title="换车" style="color:#CC6600" target="_blank">
                    <i class="iconfont icon-qiehuancheliang" aria-hidden="true"></i>
                                            </a>
                                            <?php }?>
                                        <?php }?>
                                        <?php }?>

                    <?php if ($_smarty_tpl->getVariable('print')->value==1){?>
                                        <?php if (($_smarty_tpl->getVariable('nowshopid')->value==(isset($_smarty_tpl->tpl_vars['row']->value['paiche_shopid']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_shopid'] : null)||$_smarty_tpl->getVariable('nowshopid')->value==(isset($_smarty_tpl->tpl_vars['row']->value['paicheCounterShop']) ? $_smarty_tpl->tpl_vars['row']->value['paicheCounterShop'] : null)||$_smarty_tpl->getVariable('bufen_quanbu')->value==1)&&((isset($_smarty_tpl->tpl_vars['row']->value['paiche_jie']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_jie'] : null)==1)){?>
                                          &nbsp;&nbsp;
                    <a href="print.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
&className=pact&bid=<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
" title="打印" style="color:#CC6600" target="_blank">
                                         <i class="iconfont icon-dayin" aria-hidden="true"></i>
                                                      
                                                                    </a>
                                    <?php }?>
                    <?php }?>
                    <?php if ($_smarty_tpl->getVariable('zijia_continuecar')->value==1){?>
                                    <?php if (($_smarty_tpl->getVariable('nowshopid')->value==(isset($_smarty_tpl->tpl_vars['row']->value['paiche_shopid']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_shopid'] : null)||$_smarty_tpl->getVariable('nowshopid')->value==(isset($_smarty_tpl->tpl_vars['row']->value['paicheCounterShop']) ? $_smarty_tpl->tpl_vars['row']->value['paicheCounterShop'] : null)||$_smarty_tpl->getVariable('bufen_quanbu')->value==1)&&((isset($_smarty_tpl->tpl_vars['row']->value['paiche_jie']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_jie'] : null)==1)){?>                       
                                            &nbsp;&nbsp;
                                            <a href="javascript:;" onclick="zijia_continuecar(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);return false"   title="续租" style="color:#CC6600" target="_blank">
                                    <i class="iconfont icon-woyaoxuzu" aria-hidden="true"></i>
                                            </a>
                                        <?php }?>
                    <?php }?>

                    <?php if ($_smarty_tpl->getVariable('zijia_detail')->value==1){?>
                                        <hr/>

                                        <?php if (($_smarty_tpl->getVariable('nowshopid')->value==(isset($_smarty_tpl->tpl_vars['row']->value['paiche_shopid']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_shopid'] : null)||$_smarty_tpl->getVariable('nowshopid')->value==(isset($_smarty_tpl->tpl_vars['row']->value['paicheCounterShop']) ? $_smarty_tpl->tpl_vars['row']->value['paicheCounterShop'] : null))||$_smarty_tpl->getVariable('bufen_xiangxi')->value==1){?>
                                        &nbsp;&nbsp;
                                            <a href="zijia_detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" title="明细" style="color:#CC6600" target="_blank">
                                          <i class="iconfont icon-mingxi1" aria-hidden="true"></i>
                                                                    </a>
                
           
                                        <?php }?>
                    <?php }?>

                                        
 <?php if ($_smarty_tpl->getVariable('quxiao')->value==1){?>
<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_jie']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_jie'] : null)==-1&&($_smarty_tpl->getVariable('nowshopid')->value==(isset($_smarty_tpl->tpl_vars['row']->value['paiche_shopid']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_shopid'] : null)||$_smarty_tpl->getVariable('bufen_quxiao')->value==1)){?>
                                            &nbsp;&nbsp;
                                            <a href="javascript:;" onclick="quxiao(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);return false"   title="取消" style="color:#CC6600" target="_blank">
               <i class="iconfont icon-shanchu" aria-hidden="true"></i>
                                                                    </a>
                                        <?php }?>

 <?php }?>                                 

<?php if ($_smarty_tpl->getVariable('zijia_returncar')->value==1){?>
    <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_jie']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_jie'] : null)==1){?>
                                        
                                            &nbsp;&nbsp;
<a href="javascript:;" onclick="zijia_returncar(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);return false"   title="还车" style="color:#CC6600" target="_blank">

        <i class="iconfont icon-yihuanche" aria-hidden="true"></i>
                                                                    </a>
      <?php }?>                                  

<?php }?>

<?php if ($_smarty_tpl->getVariable('zijia_qita')->value==1){?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_jie']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_jie'] : null)<3&&(isset($_smarty_tpl->tpl_vars['row']->value['paiche_jie']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_jie'] : null)>-1&&($_smarty_tpl->getVariable('nowshopid')->value==(isset($_smarty_tpl->tpl_vars['row']->value['paiche_shopid']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_shopid'] : null)||$_smarty_tpl->getVariable('nowshopid')->value==(isset($_smarty_tpl->tpl_vars['row']->value['paicheCounterShop']) ? $_smarty_tpl->tpl_vars['row']->value['paicheCounterShop'] : null)||$_smarty_tpl->getVariable('bufen_quanbu')->value==1)){?>
                                             &nbsp;&nbsp;
                                            <a href="javascript:;" onclick="zijia_qita(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);return false"  title="增加其他费用" style="color:#CC6600" target="_blank">

                             <i class="iconfont icon-qitafeiyong" aria-hidden="true"></i>
                                                                    </a>
                                        <?php }?>

 <?php }?> 

 <?php if ($_smarty_tpl->getVariable('zijia_youhui')->value==1){?>                                     
                                        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_jie']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_jie'] : null)<3&&(isset($_smarty_tpl->tpl_vars['row']->value['paiche_jie']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_jie'] : null)>-1&&($_smarty_tpl->getVariable('nowshopid')->value==(isset($_smarty_tpl->tpl_vars['row']->value['paiche_shopid']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_shopid'] : null)||$_smarty_tpl->getVariable('nowshopid')->value==(isset($_smarty_tpl->tpl_vars['row']->value['paicheCounterShop']) ? $_smarty_tpl->tpl_vars['row']->value['paicheCounterShop'] : null)||$_smarty_tpl->getVariable('bufen_quanbu')->value==1)){?>
                                             &nbsp;&nbsp;
                                            <a href="javascript:;" onclick="zijia_youhui(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);return false"  title="优惠" style="color:#CC6600" target="_blank">
                             <i class="iconfont icon-youhui" aria-hidden="true"></i>
                                                                    </a>
                                        <?php }?>                                  
<?php }?>



 <?php if ($_smarty_tpl->getVariable('xiaofei')->value==1){?>
 <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_jie']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_jie'] : null)==3){?>
                                         &nbsp;&nbsp;
<a href="zijia_qita.php?task=xiaofei&pid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" title="打印其他费用" style="color:#CC6600" target="_blank">
     <i class="iconfont icon-xiangxixinxi" aria-hidden="true"></i>
</a>
     <?php }?>
     <?php }?>


                                        <!--
                                                    &nbsp;&nbsp;
                                        <a href="contact_record.html" title="交往记录" style="color:#33cc00">
                                        <i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
                                        </a>
                                                    &nbsp;&nbsp;
                                        <a href="order_info.html" title="历史订单" style="color:#ff3300">
                                        <i class="glyphicon glyphicon-time" aria-hidden="true"></i>
                                        </a>
                                                    &nbsp;&nbsp;
                                        <a onclick="isDel();" title="删除" style="color:#CC0000">
                                        <i class="glyphicon glyphicon-remove" aria-hidden="true"></i>
                                        </a>
                                    -->
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="9" style="border-bottom: 2px #c7c3c4 solid;">
                                    <p>
                                         <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_jie']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_jie'] : null)==3&&(isset($_smarty_tpl->tpl_vars['row']->value['paiche_checkTimes']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_checkTimes'] : null)>0){?>
                                            <span style="color: #f7a30a;">
                                                订单审核意见：
                                                <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_checkNote']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_checkNote'] : null)!=''){?>
                                                    <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_checkNote']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_checkNote'] : null);?>

                                                <?php }else{ ?>
                                                    无
                                                <?php }?>
                                                &nbsp;&nbsp;&nbsp;
                                            </span>
                                         <?php }?>
                                        
                                    <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_line']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_line'] : null);?>
&nbsp;&nbsp;&nbsp;
                                    备注：<span id="span_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" dat="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" class="spanremarks">
                                    </span>

                                     <input type="hidden"  value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" class="pid">
                                    <input type="text" name="" style="display:none;width: 50%" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_specialRemarks']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_specialRemarks'] : null);?>
" class="ipt">
<span class="beizhu" >
 <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_specialRemarks']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_specialRemarks'] : null)!=''){?>
  <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_specialRemarks']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_specialRemarks'] : null);?>

<?php }else{ ?>
  无
<?php }?>
</span>
</p>

                                </td>
                            </tr>
                            <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->getVariable('index')->value+1, null, null);?>
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

<script>
    $(function(){

    });
</script>
<script type="text/javascript">
    var body_W = $("body").width();
    var v = document.getElementById("course");
    function setBody_W(){
        body_W = $("body").width();
    }
     function quxiao(pid){
        setBody_W();
        demo_iframe('zijia_list.php?task=quxiao&pid='+pid,'取消',body_W,500,'login_js');
    }
    function zijia_youhui(pid){
        setBody_W();
        demo_iframe('zijia_youhui.php?pid='+pid,'添加优惠',body_W,500,'login_js');
        
    }
     function zijia_qita(pid){
            setBody_W();
            demo_iframe('zijia_qita.php?pid='+pid,'增加其他费用',body_W,500,'login_js');
    }
    function zijia_returncar(pid){
        setBody_W();
        demo_iframe('zijia_returncar.php?pid='+pid,'还车',body_W,500,'login_js');
    }
     function zijia_continuecar(pid){
            setBody_W();
            demo_iframe('zijia_continuecar.php?pid='+pid,'续租',body_W,500,'login_js');
        
    }
    function yanzheng_shenfen(pid){
        
            setBody_W();
            demo_iframe('zijia_changecar.php?task=yanzheng_shenfen&pid='+pid,'换车',body_W,500,'login_js');
        
    }
    function zijia_changecar(pid){
        
            setBody_W();
            demo_iframe('zijia_changecar.php?pid='+pid,'换车',body_W,500,'login_js');
        
    }
    function zijia_shenghe(pid){
            demo_iframe('zijia_list.php?task=zijia_shenghe&pid='+pid,'订单审核',body_W,500,'login_js');
        
    }
    
    
    function play(){
        $('#back').css('display',"block");
        $("#back").css("background-color","rgba(0,0,0,0.9)");
        $('body').css('overflow','hidden');
        v.play();
    }

    function hidden(){
        $('#back').css('display',"none");
        $('body').css('overflow','visible');
        v.pause();
    }

    function allScreen() {      
    if (v.requestFullscreen) {
        v.requestFullscreen();
    } else if (v.mozRequestFullScreen) {
        v.mozRequestFullScreen();
    } else if (v.webkitRequestFullScreen) {
        v.webkitRequestFullScreen();
    }
     }


    $("#search_status").change(function(){
       
         window.location.href = "zijia_list.php?search_status="+$("#search_status").val();
    })
    
    
    
    $("#up").click(function(){
        var content=$("#content").css('display');
        if(content=="none"){
            
            $("#content").css('display','block');
        $('#up').removeClass("fa-chevron-down");
        $('#up').addClass("fa-chevron-up");
        }else{
            $("#content").css('display','none');
        $('#up').removeClass("fa-chevron-up");
        $('#up').addClass("fa-chevron-down");
        }
    });
    
     $(".beizhu").click(function(){
        
        var index = $(".beizhu").index(this);
        $(this).css("display","none");
        $(".ipt").eq(index).css("display","inline");
         var val = $(".ipt").eq(index).val();

         
        $(".ipt").eq(index).val("");
         $(".ipt").eq(index).focus();
         
         $(".ipt").eq(index).val(val);
     })
$("#paiche_pintaiid").css("display","none");
     $('#paiche_kehu').change(function(){
        var type=$(this).val();
        if(type==1){
            $("#paiche_pintaiid").css("display","none");
            $("#paiche_pintaiida").css("display","table-row");
            $("#paiche_pintaiida").val("临时散客");
            $("#paiche_pintaiid").val(0);
           
        }else if(type==2){
            $("#paiche_pintaiid").css("display","table-row");
            $("#paiche_pintaiida").css("display","none");
            
        }else if(type==3){
            $("#paiche_pintaiid").css("display","none");
            $("#paiche_pintaiida").css("display","table-row");
            $("#paiche_pintaiida").val("凹凸代步车");
            $("#paiche_pintaiid").val(0);
            
            
        }else if(type==4){
            $("#paiche_pintaiid").css("display","none");
            $("#paiche_pintaiida").css("display","table-row");
            $("#paiche_pintaiida").val("违章冻结");
            $("#paiche_pintaiid").val(0);
           
        }else if(type==5){
            $("#paiche_pintaiid").css("display","none");
            $("#paiche_pintaiida").css("display","table-row");
            $("#paiche_pintaiida").val("境外客户");
            $("#paiche_pintaiid").val(0);
        }
    });


$(".ipt").blur(function(){
        var index = $(".ipt").index(this);
        var pid=$('.pid').eq(index).val();
        var content=$(this).val();

        $.ajax({
            type:'POST',
            url:'get_emp_shop.php?task=setBeizhu',
            data:{"paiche_specialRemarks":content,"pid":pid},
            dataType:"json",
            cache: false,
            success:function(req){
               
                 $(".beizhu").eq(index).html(content);
                 $(".beizhu").eq(index).css("display","inline");
                 $(".ipt").eq(index).css("display","none");
            }
        })
    })
//if($("input['search_status']:checked").val()=="1"){
        //paiche_needtax=1.1;
    //} 
</script>

</body>
<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->
</html>