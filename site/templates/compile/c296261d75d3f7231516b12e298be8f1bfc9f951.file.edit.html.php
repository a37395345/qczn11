<?php /* Smarty version Smarty-3.0.4, created on 2019-12-11 18:27:36
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/changqi_zijia/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:35715df0c498a08bf1-82223300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c296261d75d3f7231516b12e298be8f1bfc9f951' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/changqi_zijia/edit.html',
      1 => 1576059885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35715df0c498a08bf1-82223300',
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
    <title>修改派车单</title>
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

<script type="text/javascript" src="../../../js/laydate/laydate.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../js/check_form.js"></script>

<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js?a=5"></script>

<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
<script type="text/javascript" src="../../../js/jquery.editable-select.min.js"></script>


<script type="text/javascript" src="../../../../js/diyUpload/webuploader.html5only.min.js"></script>
<script type="text/javascript" src="../../../../js/diyUpload/diyUpload.js?a=5"></script>

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

    .example div ul{
        overflow:hidden;
    }
    .example div ul li img{
        display: block;
        border: 1px solid #ddd;
        box-shadow: 1px 1px 5px 0px #a2958a;
        padding: 6px;
        text-align: center;
        vertical-align: middle;
    }
    input[type="checkbox"]{
      width:18px;
      height:18px;
      display: inline-block;
      text-align: center;
      vertical-align:baseline; 
      line-height: 18px;
      position: relative;
      border-radius: 50%;
      outline: none;
      -webkit-appearance: none;
      border:1px solid #fff;
      -webkit-tab-highlight-color: rgba(0,0,0,0);
      color: #fff;
      background: #fff;
      top: 4px;
    }
    input[type="checkbox"]::before{
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      background: #fff;
      width: 100%;
      height: 100%;
      border: 1px solid #999999;
      border-radius: 50%;
      color: #fff;
    }
    input[type="checkbox"]:checked::before{
      content: "\2713";
      background-color: #657AFE;
      border: 1px solid #657AFE;
      position: absolute;
      top: 0;
      left: 0;
      width:100%;
      color:#fff;
      font-size: 18px;
      border-radius: 50%;
    }
    input[type="checkbox"]:disabled::before{
        background: #eee;
        cursor: default;
    }
    input[type="checkbox"]:focus{
        border: none!important;
    }
    input{
        outline:none!important;
    }
    </style>

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        
        <!-- Panel Other -->
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>修改派车单</h5>
                <div class="ibox-tools">
                   
                </div>
            </div>
            <form method="post" action="index.php?task=update" name="form1">
            <div class="ibox-content">
                <div class="row row-lg">
                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="example-wrap">
                            <div class="example"> 

                            <span  class="span1" style="float: left";>
                                <img src="../../../images/a2.png" style="width: 20px">
                                        客户信息
                                </span>                              
                                <table class="table table-bordered">
                        
                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">公司名称：</span>
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
                                            <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_id']) ? $_smarty_tpl->tpl_vars['rows']->value['client_id'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['client_id']) ? $_smarty_tpl->tpl_vars['rows']->value['client_id'] : null)==(isset($_smarty_tpl->getVariable('paiche')->value['paicheCom']) ? $_smarty_tpl->getVariable('paiche')->value['paicheCom'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_name']) ? $_smarty_tpl->tpl_vars['rows']->value['client_name'] : null);?>
</option>
                                    <?php }} ?>  
                                </select>

                            </td>
                             <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">联系地址：</span>
                            </th>
                            <td width="35%">
                               <input type="text" id="paiche_linkerAdd" name="paiche_linkerAdd"  class="form-control input-sm" placeholder=""  readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_linkerAdd']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_linkerAdd'] : null);?>
">
                            </td>
                
                        </tr>
                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">联系人：</span>
                            </th>
                            <td width="35%">
                               <select class="form-control input-sm" id="paiche_linker" name="paiche_linker">
                                    <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('lianxi_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                            <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['name']) ? $_smarty_tpl->tpl_vars['rows']->value['name'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['name']) ? $_smarty_tpl->tpl_vars['rows']->value['name'] : null)==(isset($_smarty_tpl->getVariable('paiche')->value['paiche_linker']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_linker'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['name']) ? $_smarty_tpl->tpl_vars['rows']->value['name'] : null);?>
</option>
                                    <?php }} ?>
                               </select>
                              
                            </td>
                             <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">联系人电话：</span>
                            </th>
                            <td width="35%">
                               <input type="text" id="paiche_linkerPhone" name="paiche_linkerPhone"  class="form-control input-sm" placeholder=""  readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_linkerPhone']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_linkerPhone'] : null);?>
">
                            </td>
                        </tr>
                         </table>

                         <span  class="span1" style="float: left;">
                            <img src="../../../images/a1.png" style="width: 20px">
                                        业务信息
                        </span>

                         <table class="table table-bordered">
                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">业务门店：</span>
                            </th>
                            <td width="35%">
                                <input type="hidden" name="paicheCounterShop" id="paicheCounterShop" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paicheCounterShop']) ? $_smarty_tpl->getVariable('paiche')->value['paicheCounterShop'] : null);?>
">
                               <input type="text" id="paicheCounterShop_name"   class="form-control input-sm" placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['shop_name']) ? $_smarty_tpl->getVariable('paiche')->value['shop_name'] : null);?>
" readonly="readonly" unselectable="on">
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">业务员：</span>
                            </th>
                            <td width="35%">
                                <input type="hidden" name="paicheCounterMan" id="paicheCounterMan" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paicheCounterMan']) ? $_smarty_tpl->getVariable('paiche')->value['paicheCounterMan'] : null);?>
">
                               <input type="text" id="paicheCounterMan_name"   class="form-control input-sm" placeholder="" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['emp_name']) ? $_smarty_tpl->getVariable('paiche')->value['emp_name'] : null);?>
">
                            </td>

                            
                            
                        </tr>
                        
                    </table>
                    





                    <div >
                                    <span  class="span1" style="float: left;">
                                    <img src="../../../images/a5.png" style="width: 20px">
                                        车辆信息
                                    </span>
                                    <dl class="lineD" id="showCar" style="padding-top: 3px;border-bottom:0;float: left;">
                                关键字：
                                        <input type="text" name="paicheCarKey" id="paicheCarKey" size="10" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_num']) ? $_smarty_tpl->getVariable('paiche')->value['car_num'] : null);?>
" />
                                        <input type="hidden" name="paicheCar" id="paicheCar" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paicheCar']) ? $_smarty_tpl->getVariable('paiche')->value['paicheCar'] : null);?>
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
                                            <input type="text" id="car_color" class="form-control input-sm" placeholder="" readonly="readonly" unselectable="on"value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_color']) ? $_smarty_tpl->getVariable('paiche')->value['car_color'] : null);?>
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
                                            <span style="color:#000">车辆类型</span>
                                        </th>
                                        <td width="35%">
                                            <input type="text" id="car_types" class="form-control input-sm" placeholder="" readonly="readonly"unselectable="on" <?php if ((isset($_smarty_tpl->getVariable('paiche')->value['car_types']) ? $_smarty_tpl->getVariable('paiche')->value['car_types'] : null)==0){?>
                                            value="小轿车"
                                            <?php }elseif((isset($_smarty_tpl->getVariable('paiche')->value['car_types']) ? $_smarty_tpl->getVariable('paiche')->value['car_types'] : null)==1){?>
                                            value="普通跑车"
                                            <?php }elseif((isset($_smarty_tpl->getVariable('paiche')->value['car_types']) ? $_smarty_tpl->getVariable('paiche')->value['car_types'] : null)==2){?>
                                            value="超级跑车"
                                            <?php }elseif((isset($_smarty_tpl->getVariable('paiche')->value['car_types']) ? $_smarty_tpl->getVariable('paiche')->value['car_types'] : null)==3){?>
                                            value="越野车"
                                            <?php }elseif((isset($_smarty_tpl->getVariable('paiche')->value['car_types']) ? $_smarty_tpl->getVariable('paiche')->value['car_types'] : null)==4){?>
                                            value="商务车"
                                            <?php }elseif((isset($_smarty_tpl->getVariable('paiche')->value['car_types']) ? $_smarty_tpl->getVariable('paiche')->value['car_types'] : null)==5){?>
                                            value="中型客车"
                                            <?php }elseif((isset($_smarty_tpl->getVariable('paiche')->value['car_types']) ? $_smarty_tpl->getVariable('paiche')->value['car_types'] : null)==6){?>
                                            value="大型客车"
                                            <?php }?>
                                             >
                                            
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
                              <input name="paiche_startDate" id="paiche_startDate" placeholder="请输入日期"  class="laydate-icon form-control input-sm" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_startDate']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_startDate'] : null);?>
">
                            </td>
                             <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">使用月数：</span>
                            </th>
                            <td width="35%">
                              <input style="width: 78%;float: left;" οnkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" type="text" min="0" id="yue"  class="form-control input-sm" placeholder="" value="<?php echo $_smarty_tpl->getVariable('yue')->value;?>
" onchange="jisuan_shijian()">
                              <input style="float: left;height: 30px;width: 30px;font-size: 18px;line-height: 24px;" class="btnyz xdd" type="button" value="+">
                              <input style="float: left;width: 30px;height: 30px;font-size: 18px;line-height: 24px;" class="btnyj xdd" type="button" value="-">
                            </td>
                        </tr>
                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">用车结束时间：</span>
                            </th>
                            <td width="35%">
                                <input type="text" id="paiche_endDate" name="paiche_endDate"  class="form-control input-sm" placeholder=""  readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_endDate']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_endDate'] : null);?>
" onchange="jisuan_shijian()">
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">使用天数：</span>
                            </th>
                            <td width="35%">
                              <input style="width: 78%;float: left;" type="text" min="0" id="tian"   class="form-control input-sm" placeholder="" value="<?php echo $_smarty_tpl->getVariable('tian')->value;?>
" onchange="jisuan_shijian()">
                              <input style="float: left;height: 30px;width: 30px;font-size: 18px;line-height: 24px;" class="btnz xdd" type="button" value="+">
                              <input style="float: left;width: 30px;height: 30px;font-size: 18px;line-height: 24px;" class="btnj xdd" type="button" value="-">
                            </td>
                        </tr>
                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">租金：</span>
                            </th>
                            <td width="35%">
                              <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" id="paiche_rent" name="paiche_rent"  class="form-control input-sm" placeholder=""  value="<?php echo (isset($_smarty_tpl->getVariable('paiche_rent')->value['conv_money']) ? $_smarty_tpl->getVariable('paiche_rent')->value['conv_money'] : null);?>
" onchange="totalCost();">

                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">押金：</span>
                            </th>
                            <td width="35%">
                               <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" id="paiche_deposit" name="paiche_deposit"  class="form-control input-sm" placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('paiche_deposit')->value['conv_money']) ? $_smarty_tpl->getVariable('paiche_deposit')->value['conv_money'] : null);?>
" onchange="totalCost();">
                            </td>
                        </tr>
                        <tr>
                      
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">是否开票：</span>
                            </th>
                            <td width="35%">
                               <select class="form-control input-sm" id="paiche_needtax" name="paiche_needtax">
                                            <option value="0" <?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_needtax']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_needtax'] : null)!=1){?>selected<?php }?>>不开票</option>
                                            <option value="1" <?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_needtax']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_needtax'] : null)!=1){?>selected<?php }?>>开票</option>
                                            
                                </select>
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">本次应收费用：</span>
                            </th>
                            <td width="35%">
                              <input type="text" id="yingshou"   class="form-control input-sm" placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('suijin')->value['conv_money']) ? $_smarty_tpl->getVariable('suijin')->value['conv_money'] : null)+(isset($_smarty_tpl->getVariable('paiche_deposit')->value['conv_money']) ? $_smarty_tpl->getVariable('paiche_deposit')->value['conv_money'] : null)+(isset($_smarty_tpl->getVariable('paiche_rent')->value['conv_money']) ? $_smarty_tpl->getVariable('paiche_rent')->value['conv_money'] : null);?>
" readonly="readonly" unselectable="on">
                            </td>
                             
                        </tr>
                        

                        

                        <tr>
                           
                            
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">备注：</span>
                            </th>
                            <td width="35%">
                              <input type="text" id="paiche_specialRemarks" name="paiche_specialRemarks"  class="form-control input-sm" placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_specialRemarks']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_specialRemarks'] : null);?>
">
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                
                            </th>
                            <td width="35%">
                              
                            </td>
                        </tr>
                        <tr>
                            
                        </tr>
                        
                        </table>




                            </div>
                            <div>
                             <table class="table table-bordered" id="che">
                                    <tr>
                                        <td width="100%">
                                            <div id="box">
                                                <div id="test" ></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                               
                                    </tr>
                                
                                </table>
                            <div>

            <ul>
              <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable(0, null, null);?>
            <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('images_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
            <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->getVariable('index')->value+1, null, null);?>
             <li style="float:left;text-align:center;"><a href="index.php?task=picture&pid=<?php echo $_smarty_tpl->getVariable('cid')->value;?>
&id=<?php echo $_smarty_tpl->getVariable('index')->value;?>
" title="点击查看原图" target="_blank"><img src="../../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['name']) ? $_smarty_tpl->tpl_vars['rows']->value['name'] : null);?>
" width="100" height="100" /></a><input type="checkbox" name="delimg[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" />删除<br /></li>
            <?php }} ?>
            
            </ul>
            </div>
                            </div>

                    <input type="hidden" name="client_id" value="<?php echo $_smarty_tpl->getVariable('client_id')->value;?>
">
                    <input type="hidden" name="cid" value="<?php echo $_smarty_tpl->getVariable('cid')->value;?>
" id="cid">
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
    <script src="../../../js/add_hetong.js?a=<?php echo time();?>
"></script>
    
    
</body> 
<!-->
<script type="text/javascript">
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
