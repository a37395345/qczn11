<?php /* Smarty version Smarty-3.0.4, created on 2020-03-18 16:50:38
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/daijia_linshi/add.html" */ ?>
<?php /*%%SmartyHeaderCode:325275e71e0de2e2e75-38535866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcc7da56cdf6bd2388c85b73f14937e59a153933' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/daijia_linshi/add.html',
      1 => 1584521318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '325275e71e0de2e2e75-38535866',
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
    <title>添加合同</title>
    <link rel="shortcut icon" href="favicon.ico">
  <link href="../../../../css/style.css" rel="stylesheet" type="text/css">
<link href="../../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<link rel="stylesheet" type="text/css" href="../../../../css/webuploader.css">
<link rel="stylesheet" type="text/css" href="../../../../css/diyUpload.css">

<link href="../../../css/box.css" rel="stylesheet" type="text/css" />
<link href="../../../css/jquery.editable-select.min.css" rel="stylesheet" type="text/css" />
<link href="../../../crm/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
<link href="../../../crm/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
<link href="../../../crm/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">

<link href="../../../crm/css/animate.min.css" rel="stylesheet">
<link href="../../../crm/css/style.min862f.css?v=2" rel="stylesheet">
<script src="../../../../jquery.js"></script>

<script type="text/javascript" src="../../../js/laydate/laydate.js?a=1"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../js/check_form.js"></script>

<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js?a=5"></script>

<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
<script type="text/javascript" src="../../../js/jquery.editable-select.min.js"></script>


<script type="text/javascript" src="../../../../js/diyUpload/webuploader.html5only.min.js"></script>
<script type="text/javascript" src="../../../../js/diyUpload/diyUpload.js?a=6"></script>

<script src="../../../js/moment.js"></script>


    <style type="text/css">
    /**/
    .navi_name{font-size:14px;font-weight:bold;}
    .indent{padding-left:40px;}
#box{width:100%; min-height:300px; background:#FF9}
/**/
        .span1{
        margin-bottom: 5px;    color: inherit;
    background-color: transparent;
    -webkit-transition: all .5s;
    transition: all .5s;    border-color: #c2c2c2;border-radius: 3px;    display: inline-block;
    padding: 6px 12px;
    }
    .webuploader-pick{
        float: left;
    }
    </style>
</head>
<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        
        <!-- Panel Other -->
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>添加合同</h5>
                <div class="ibox-tools">
                   
                </div>
            </div>

            <form method="post" action="index.php?task=insert" name="form1">
            <div class="ibox-content">
                <div class="row row-lg">
                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="example-wrap">
                            <div class="example"> 
                    <span  class="span1" style="float: left";>
                        <img src="../../../images/a2.png" style="width: 20px">
                        客户来源
                    </span>                              
                    <table class="table table-bordered">
                        <input type="hidden" name="type" value="<?php echo $_smarty_tpl->getVariable('type')->value;?>
" id="type">
                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">客户来源：</span>
                            </th>

                            <td width="35%">
                                <select class="form-control input-sm" id="paiche_kehu" name="paiche_kehu">
                                    <option value="0">请选择</option>
                                    <option value="1">临时散客</option>
                                    <option value="2">企业客户</option>
                                    <option value="3">调车公司</option>
                                    <option value="4">光宝用车</option>
                                    <option value="5">门店取送车</option>
                                </select>
                            </td>
                           
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">客户类型：</span>
                            </th>
                            <td width="35%">
                                <select class="form-control input-sm" id="paicheCom" name="paicheCom">
                                    <option value="0">请选择</option>
                                    <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('client_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                            <option id="companyname" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_id']) ? $_smarty_tpl->tpl_vars['rows']->value['client_id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_name']) ? $_smarty_tpl->tpl_vars['rows']->value['client_name'] : null);?>
</option>
                                    <?php }} ?>  
                                </select>
                                <input type="text" id="kehu_a"   class="form-control input-sm" placeholder="" value="临时散客" readonly="readonly" unselectable="on">
                                <select class="form-control input-sm" id="paiche_brother" name="paiche_brother">
                                    <option value="0">请选择</option>
                                    <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('brothers_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                            <option  value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bro_id']) ? $_smarty_tpl->tpl_vars['rows']->value['bro_id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bro_name']) ? $_smarty_tpl->tpl_vars['rows']->value['bro_name'] : null);?>
</option>
                                    <?php }} ?>  
                                </select>
                            </td>
                            


                        </tr>

                        <tr id='dioache_a'>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">调车类型：</span>
                            </th>

                            <td width="35%">
                                <select class="form-control input-sm" id="paiche_pintaiid" name="paiche_pintaiid">
                                    <option value="0">请选择</option>
                                    <option value="1">不调车</option>
                                    <option value="2">调车</option>
                                </select>
                            </td>
                       
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000" id="diaoche_name">调车公司：</span>
                            </th>
                            <td width="35%">
                                <select class="form-control input-sm" id="paiche_brothera" name="paiche_brothera">
                                    <option value="0">请选择</option>
                                    <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('brothers_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                            <option  value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bro_id']) ? $_smarty_tpl->tpl_vars['rows']->value['bro_id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bro_name']) ? $_smarty_tpl->tpl_vars['rows']->value['bro_name'] : null);?>
</option>
                                    <?php }} ?>  
                                </select>
                            </td>
                        </tr>
                         </table>




                         <div id="kehu">
                            <span  class="span1" style="float: left";>
                                <img src="../../../images/a2.png" style="width: 20px">
                                        客户信息
                                </span>                              
                    <table class="table table-bordered">
                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">联系人：</span>
                            </th>
                            <td width="35%">
                               <input type="text" class="form-control input-sm" id="paiche_linker" name="paiche_linker" placeholder="租车人的姓名">
                            </td>
                             <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">联系人电话：</span>
                            </th>
                            <td width="35%">
                               <input type="text" id="paiche_linkerPhone" name="paiche_linkerPhone"  class="form-control input-sm"  placeholder="租车人的电话号码" onchange="phone()">
                            </td>
                        </tr>
                         </table>

                     </div>

                    <div id="cheliang">
                                    <span  class="span1" style="float: left;">
                                    <img src="../../../images/a5.png" style="width: 20px">
                                        车辆信息
                                    </span>
                                    <dl class="lineD" id="showCar" style="padding-top: 3px;border-bottom:0;float: left;">
                                关键字：
                                        <input type="text" name="paicheCarKey" id="paicheCarKey" size="10" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_num']) ? $_smarty_tpl->getVariable('paiche')->value['car_num'] : null);?>
" />
                                        <input type="hidden" name="paicheCar" id="paicheCar" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paicheCar2']) ? $_smarty_tpl->getVariable('paiche')->value['paicheCar2'] : null);?>
" size="10"/>


                                        <input type="hidden" name="paicheCars" id="paicheCars"  value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paicheCar2s']) ? $_smarty_tpl->getVariable('paiche')->value['paicheCar2s'] : null);?>
" size="10"/>

                                        <a href="javascript:get_car();"><img src="../../../css/car2.gif" height="15" class="peoplePic"/></a>
                                    </dl>



                                    <table class="table table-bordered" id="che">
                                    <tr>
                                        <th style="background-color:#F5F5F6" width="15%">
                                            <span style="color:#000">车牌号码</span>
                                        </th>
                                        <td width="35%">
                                            <input type="text" id="car_num" class="form-control input-sm" placeholder="" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_num']) ? $_smarty_tpl->getVariable('paiche')->value['car_num'] : null);?>
">
                                        </td>
                                        <th style="background-color:#F5F5F6" width="15%">
                                            <span style="color:#000">车辆颜色</span>
                                        </th>
                                        <td width="35%">
                                            <input type="text" id="car_color" class="form-control input-sm" placeholder="" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_color']) ? $_smarty_tpl->getVariable('paiche')->value['car_color'] : null);?>
">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="background-color:#F5F5F6" width="15%">
                                            <span style="color:#000">车辆型号</span>
                                        </th>
                                        <td width="35%">
                                            <input type="text" id="car_brand" class="form-control input-sm" placeholder="" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_brand']) ? $_smarty_tpl->getVariable('paiche')->value['car_brand'] : null);?>
">
                                        </td>
                                        <th style="background-color:#F5F5F6" width="15%">
                                            <span style="color:#000">车辆种类</span>
                                        </th>
                                        <td width="35%">
                                            <input type="text" id="car_types" class="form-control input-sm" placeholder="" readonly="readonly"unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_types']) ? $_smarty_tpl->getVariable('paiche')->value['car_types'] : null);?>
">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="background-color:#F5F5F6" width="15%">
                                            <span style="color:#000">发动机号</span>
                                        </th>
                                        <td width="35%">
                                            <input type="text" id="car_motor" class="form-control input-sm" placeholder="" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_motor']) ? $_smarty_tpl->getVariable('paiche')->value['car_motor'] : null);?>
">
                                        </td>
                                        <th style="background-color:#F5F5F6" width="15%">
                                            <span style="color:#000">车架号</span>
                                        </th>
                                        <td width="35%">
                                            <input type="text" id="car_frame" class="form-control input-sm" placeholder="" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_frame']) ? $_smarty_tpl->getVariable('paiche')->value['car_frame'] : null);?>
">
                                        </td>
                                    </tr>
                                </table>
                        </div>

                       
                        <div id="shishidan">
                                    <span  class="span1" style="float: left;">
                                    <img src="../../../images/a5.png" style="width: 20px">
                                        司机信息
                                    </span>
                                    <table class="table table-bordered" id="che">
                                    <tr>
                                        <th style="background-color:#F5F5F6" width="15%">
                                            <span style="color:#000">司机类型:</span>
                                        </th>
                                        <td width="35%">
                                            <select class="form-control input-sm" id="emp_zhiweiid">
                                                <option value="0">请选择</option>
                                                <option value="66">机动司机</option>
                                                <option value="67">厂车司机</option>
                                                 <option value="1000">其他人员</option>
                                            </select>
                                        </td>
                                        <th style="background-color:#F5F5F6" width="15%">
                                            <span style="color:#000">选择司机:</span>
                                        </th>
                                        <td width="35%">
                                                <select name="paicheDriver" id="paicheDriver" class="form-control input-sm">
                                                    
                                                </select>
                                            </td>
                                    </tr>
                    
                                </table>
                        </div>
                        




                            <span  class="span1" style="float: left;">
                                <img src="../../../images/a6.png" style="width: 20px">
                                        用车数据
                            </span>
                            <table class="table table-bordered">
                                    <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">用车开始时间：</span>

                            </th>
                            <td width="35%">
                              <input name="paiche_startDate" id="paiche_startDate" placeholder="请输入日期" value="<?php echo $_smarty_tpl->getVariable('time')->value;?>
" class="laydate-icon form-control input-sm" readonly="readonly" unselectable="on">
                            </td>
                             <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">使用天数：</span>
                            </th>
                            <td width="35%">
                              <input style="width: 78%;float: left;" οnkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" type="text" min="0" id="tian_a"  class="form-control input-sm" placeholder="" value="" onchange="jisuan_shijian()">
                              <input style="float: left;height: 30px;width: 30px;font-size: 18px;line-height: 24px;" class="btnyz xdd" type="button" value="+" onclick="jisuan('t','j')">
                              <input style="float: left;width: 30px;height: 30px;font-size: 18px;line-height: 24px;" class="btnyj xdd" type="button" value="-" 
                              onclick="jisuan('t','z')">
                            </td>
                        </tr>
                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">用车结束时间：</span>
                            </th>
                            <td width="35%">
                                <input type="text" id="paiche_endDate" name="paiche_endDate"  class="form-control input-sm" placeholder=""  readonly="readonly" unselectable="on" >
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">使用小时数：</span>
                            </th>
                            <td width="35%">
                              <input style="float: left;width: 78%;" type="text" min="0" id="shi_b"   class="form-control input-sm" placeholder="" value="" onchange="jisuan_shijian()">
                              <input style="float: left;height: 30px;width: 30px;font-size: 18px;line-height: 24px;" class="btnz xdd" type="button" value="+" onclick="jisuan('s','j')">
                              <input style="float: left;width: 30px;height: 30px;font-size: 18px;line-height: 24px;" class="btnj xdd" type="button" value="-" onclick="jisuan('s','z')">
                            </td>
                        </tr>

                                </table>
                        <span  class="span1" style="float: left;">
                                <img src="../../../images/a6.png" style="width: 20px">
                                        金额明细
                                </span>
                            <table class="table table-bordered">
                                 
                        <tr id="zujin">
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">租金：</span>
                            </th>
                        

                            <td width="35%">
                               <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" id="paiche_rent" name="paiche_rent"  class="form-control input-sm" placeholder="用车的总金额" value="" onchange="totalCost();">
                            </td>
                             <th style="background-color:#F5F5F6" width="15%">
                               
                            </th>
                            <td width="35%">
                            </td>
                        </tr>
                        <tr id="guangbao">
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">光宝用车模式：</span>
                            </th>
                            <td width="35%" colspan="3">
                                <select class="form-control input-sm" id="client_price" name="client_price">
                                    <option value="0">请选择</option>
                                    <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('client_price')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                            <option  value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)+1;?>
.&nbsp;地点：<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['price_area']) ? $_smarty_tpl->tpl_vars['rows']->value['price_area'] : null);?>
&nbsp;&nbsp;车型：<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['price_carmodel']) ? $_smarty_tpl->tpl_vars['rows']->value['price_carmodel'] : null);?>
&nbsp;&nbsp;行程：<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['price_line']) ? $_smarty_tpl->tpl_vars['rows']->value['price_line'] : null);?>
&nbsp;&nbsp;
                                            价格：<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['price']) ? $_smarty_tpl->tpl_vars['rows']->value['price'] : null);?>
&nbsp;&nbsp;
                                            等车费：<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['price_wait1']) ? $_smarty_tpl->tpl_vars['rows']->value['price_wait1'] : null);?>
&nbsp;&nbsp;
                                            过夜等车费：<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['price_wait2']) ? $_smarty_tpl->tpl_vars['rows']->value['price_wait2'] : null);?>

                                            </option>
                                    <?php }} ?>  
                                </select>
                            </td>
                        </tr>
                        <tr id="baojia_a">
                            <th style="background-color:#F5F5F6" width="15%" >
                                <span style="color:#000">调车公司报价：</span>
                            </th>
                            <td width="35%">
                               <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" id="have_freeze_money" name="have_freeze_money"  class="form-control input-sm" placeholder="本次调车应该给调车公司的钱" value="" onchange="totalCost();">
                            </td>


                            <th class="hidea" style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">调车公司代收费：</span>
                            </th>
                            <td class="hidea" width="35%">
                               <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" id="dioache_money" name="dioache_money"  class="form-control input-sm" placeholder="本次用车客户给调车公司的钱" value="" onchange="totalCost();">
                            </td>

                            
                            <th class="hideb" style="background-color:#F5F5F6; display: none" width="15%">
                                <span style="color:#000"></span>
                            </th>
                            <td style="display: none;" class="hideb" width="25%">
                                           
                            </td>
                             
                        
                        </tr>

                        <tr id="kaipiao">
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">是否开票：</span>
                            </th>
                            <td width="35%">
                               <select class="form-control input-sm" id="paiche_needtax" name="paiche_needtax" >
                                            <option value="0">不开票</option>
                                            <option value="1">开票</option>
                                            
                                </select>
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">税金：</span>
                            </th>
                            <td width="35%">
                              <input type="text" id="suijin" name='suijin'   class="form-control input-sm" placeholder="临时客户要求开票，收取百分之十的费用" value="" readonly="readonly" unselectable="on">
                            </td>
                            
                        </tr>

                        

                        <tr class="feiyong">
                                        <th style="background-color:#F5F5F6" width="15%">
                                            <span style="color:#000">限制公里数</span>
                                        </th>
                                        <td width="25%">
                                            <input onkeyup="value=value.replace(/[^0-9]/g,'')" type="text" id="paiche_chaokms" name="paiche_chaokms" class="form-control input-sm" placeholder="本次租车，车辆限制行驶的公里数">
                                        </td>
                                        <th style="background-color:#F5F5F6" width="15%">
                                            <span style="color:#000">超每公里费用</span>
                                        </th>
                                        <td width="25%">
                                            <input onkeyup="value=value.replace(/[^\0-9\.]/g,'')" type="text" id="paiche_chaokmy" name="paiche_chaokmy" class="form-control input-sm"  placeholder="车辆超出公里数，每公里收取的费用">
                                        </td>
                                        
                     </tr>
                     <tr class="feiyong">
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">超时费用</span>
                            </th>
                            <td width="25%">
                                <input onkeyup="value=value.replace(/[^\0-9\.]/g,'')" type="text" id="paiche_chaoshi" name="paiche_chaoshi" class="form-control input-sm" placeholder="本次租车，超每小时的费用">            
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000"></span>
                            </th>
                            <td width="25%">
                                           
                            </td>
                        </tr>


                        <tr>
                             <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">备注：</span>
                            </th>
                            <td width="35%">
                              <input type="text" id="paiche_specialRemarks" name="paiche_specialRemarks"  class="form-control input-sm" placeholder="其他特殊情况说明" value="">
                            </td>


                            <th  style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">车型及行程</span>
                            </th>
                            <td  width="35%">
                                     <input type="text" id="paiche_line" name="paiche_line"  class="form-control input-sm" placeholder="用车车型及行程（必填）" value="">      
                            </td>
                            
                        </tr>
                        
                        
                        </table>




                            
                          

                    
                    <input type="submit" id="submit" class="btn btn-outline btn-default" value="提交" style="width: 10%;margin-left: 45%;display: block;">
                    
                
                                
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

    
    
    <script src="../../../crm/js/bootstrap.min.js?v=3.3.6"></script>
    
    <script src="../../../crm/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
    <script src="../../../crm/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
    <script src="../../../crm/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
    <script src="../../../crm/js/demo/bootstrap-table-demo.min.js"></script>
    <script src="../../../js/add_linshidaijia.js?a=<?php echo time();?>
"></script>
    
    
    
</body> 
<!-->
<script type="text/javascript">
    $(function(){
        $('.ygop').on('input',function(){
        this.value=this.value.replace(/[^\d]/g,'')        
    })
    });
function get_car(){
    var key=$("#paicheCarKey").val();
    demo_iframe('index.php?task=get_car&key='+key,'选择车辆',650,380,'login_js');
}
var cid=$('#cid').val();
$('#test').diyUpload({

    url:'../../../../site/includes/fileupload.php?id=8888',
    success:function( data ) {
        //alert(data.jsonrpc);
        console.info( data );
    },
    error:function( err ) {
        console.info( err );    
    },
    formData:{
        contractid:0,paiche:cid
    }
});
    
</script>
<!-->
    

<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->
</html>
