<?php /* Smarty version Smarty-3.0.4, created on 2019-10-29 15:38:04
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/client/add_hetong.html" */ ?>
<?php /*%%SmartyHeaderCode:64265db7ec5c617e86-51685669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '144a5689b8a0149595e6ab223239faa2c1a69b9c' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/client/add_hetong.html',
      1 => 1572334501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64265db7ec5c617e86-51685669',
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

<script type="text/javascript" src="../../../js/laydate/laydate.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../js/check_form.js"></script>

<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js?a=5"></script>

<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
<script type="text/javascript" src="../../../js/jquery.editable-select.min.js"></script>


<script type="text/javascript" src="../../../../js/diyUpload/webuploader.html5only.min.js"></script>
<script type="text/javascript" src="../../../../js/diyUpload/diyUpload.js?a=5"></script>


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

            <form method="post" action="index.php?task=insert_lianxi" name="form1">
            <div class="ibox-content">
                <div class="row row-lg">
                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="example-wrap">
                            <div class="example">                                
                                <table class="table table-bordered">
                        
                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">公司名称：</span>
                            </th>
                            <td width="35%">
                                <input type="hidden" name="<?php echo (isset($_smarty_tpl->getVariable('client')->value['client_id']) ? $_smarty_tpl->getVariable('client')->value['client_id'] : null);?>
">
                               <input type="text" id="client_name" name="client_name"  class="form-control input-sm" placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('client')->value['client_name']) ? $_smarty_tpl->getVariable('client')->value['client_name'] : null);?>
" readonly="readonly" unselectable="on">
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">用车类型：</span>
                            </th>

                            <td width="35%">
                               <select class="form-control input-sm" id="paiche_type" name="paiche_type">
                                            <option value="3">长期自驾</option>
                                           <!-- <option value="0">请选择</option>
                                            <option value="2">临时带驾</option>
                                            <option value="3">长期自驾</option>
                                            <option value="4">长期代驾</option>-->
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">业务门店：</span>
                            </th>
                            <td width="35%">
                               <input type="text" id="paicheCounterShop" name="paicheCounterShop"  class="form-control input-sm" placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('client')->value['shop_name']) ? $_smarty_tpl->getVariable('client')->value['shop_name'] : null);?>
" readonly="readonly" unselectable="on">
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">业务员：</span>
                            </th>

                            <td width="35%">
                               <input type="text" id="paicheCounterMan" name="paicheCounterMan"  class="form-control input-sm" placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('client')->value['emp_name']) ? $_smarty_tpl->getVariable('client')->value['emp_name'] : null);?>
" readonly="readonly" unselectable="on">
                            </td>

                            
                            
                        </tr>

                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">联系人/电话：</span>

                            </th>
                            <td width="35%">
                               <select class="form-control input-sm" id="department_id" name="department_id">
                                            <option value="0"><?php echo (isset($_smarty_tpl->getVariable('client')->value['client_Mlinker']) ? $_smarty_tpl->getVariable('client')->value['client_Mlinker'] : null);?>
(<?php echo (isset($_smarty_tpl->getVariable('client')->value['client_Mphone']) ? $_smarty_tpl->getVariable('client')->value['client_Mphone'] : null);?>
)</option>
                                            <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('client_lianxi')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                            <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['name']) ? $_smarty_tpl->tpl_vars['rows']->value['name'] : null);?>
(<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['phone']) ? $_smarty_tpl->tpl_vars['rows']->value['phone'] : null);?>
)</option>
                                            
                                            <?php }} ?>
                                </select>
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">联系地址：</span>
                            </th>
                            <td width="35%">
                               <input type="text" id="" name=""  class="form-control input-sm" placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('client')->value['client_add']) ? $_smarty_tpl->getVariable('client')->value['client_add'] : null);?>
" readonly="readonly" unselectable="on">
                            </td>
                        </tr>
                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">用车开始时间：</span>

                            </th>
                            <td width="35%">
                              <input name="paiche_startDate" id="paiche_startDate" placeholder="请输入日期" value="" class="laydate-icon form-control input-sm" onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})">
                            </td>
                             <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">使用月数：</span>
                            </th>
                            <td width="35%">
                              <input type="number" min="0" id="yue"  class="form-control input-sm" placeholder="" value="" onchange="jisuan_shijian()">
                            </td>
                        </tr>
                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">用车结束时间：</span>
                            </th>
                            <td width="35%">
                                <input type="text" id="paiche_endDate" name="paiche_endDate"  class="form-control input-sm" placeholder=""  readonly="readonly" unselectable="on">
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">使用天数：</span>
                            </th>
                            <td width="35%">
                              <input type="number" min="0" id="tian"   class="form-control input-sm" placeholder="" value="" onchange="jisuan_shijian()">
                            </td>
                        </tr>
                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">租金：</span>
                            </th>
                            <td width="35%">
                              <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" id="paiche_rent" name="paiche_rent"  class="form-control input-sm" placeholder="" value="">

                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">押金：</span>
                            </th>
                            <td width="35%">
                               <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" id="paiche_deposit" name="paiche_deposit"  class="form-control input-sm" placeholder="" value="">
                            </td>
                        </tr>

                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">是否限制公里数：</span>
                            </th>

                            <td width="35%">
                              <select class="form-control input-sm" id="chao_km" name="chao_km">
                                            <option value="1">不限公里</option>
                                            <option value="2">按月累计</option>
                                            <option value="3">按季累计</option>
                                            <option value="4">按年累计</option>
                                            
                                </select>
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">是否开票：</span>
                            </th>
                            <td width="35%">
                               <select class="form-control input-sm" id="paiche_needtax" name="paiche_needtax">
                                            <option value="0">不开票</option>
                                            <option value="1">开票</option>
                                            
                                </select>
                            </td>
                        </tr>

                        <tr style="display: none" id="km">
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">限制公里数：</span>
                            </th>
                            <td width="35%">
                              <input type="number" min="0" id="paiche_limitKm" name="paiche_limitKm"  class="form-control input-sm" placeholder="" value="">
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">超每公里费用：</span>
                            </th>
                            <td width="35%">
                              <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" id="paiche_overKm" name="paiche_overKm"  class="form-control input-sm" placeholder="" value="">
                            </td>
                        </tr>

                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">税金：</span>
                            </th>
                            <td width="35%">
                              <input type="text" id="suijin" name="suijin"  class="form-control input-sm" placeholder="" value="">
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">本次应收费用：</span>
                            </th>
                            <td width="35%">
                              <input type="text" id="yingshou"   class="form-control input-sm" placeholder="" value="">
                            </td>
                        </tr>
                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">备注：</span>
                            </th>
                            <td width="35%">
                              <input type="text" id="client_add" name="client_add"  class="form-control input-sm" placeholder="" value="">
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
                                            <input type="text" id="car_type" class="form-control input-sm" placeholder="" readonly="readonly"unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_type']) ? $_smarty_tpl->getVariable('paiche')->value['car_type'] : null);?>
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
                            <div>
                             <table class="table table-bordered" id="che">
                                    <tr>
                                        <td width="100%">
                                            <div id="box">
                                                <div id="test" ></div>
                                            </div>
                                        </td>
                                    </tr>

                                </table>
                            </div>

                    <input type="hidden" name="client_id" value="<?php echo $_smarty_tpl->getVariable('client_id')->value;?>
">
                
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
    demo_iframe('index.php?task=get_car','选择车辆',650,380,'login_js');
}
var cid=1;
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
