<?php /* Smarty version Smarty-3.0.4, created on 2019-12-17 14:12:23
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/changqi_zijia/add.html" */ ?>
<?php /*%%SmartyHeaderCode:118205df871c761cad6-43207928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f04e9206db1b84148f9f6fdad1a5a20efdae4f57' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/changqi_zijia/add.html',
      1 => 1576060525,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118205df871c761cad6-43207928',
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
                                            <option id="companyname" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_id']) ? $_smarty_tpl->tpl_vars['rows']->value['client_id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_name']) ? $_smarty_tpl->tpl_vars['rows']->value['client_name'] : null);?>
</option>
                                    <?php }} ?>  
                                </select>

                            </td>
                             <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">联系地址：</span>
                            </th>
                            <td width="35%">
                               <input type="text" id="paiche_linkerAdd" name="paiche_linkerAdd"  class="form-control input-sm" placeholder=""  readonly="readonly" unselectable="on">
                            </td>
                
                        </tr>
                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">联系人：</span>
                            </th>
                            <td width="35%">
                               <select class="form-control input-sm" id="paiche_linker" name="paiche_linker">
                               </select>
                              
                            </td>
                             <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">联系人电话：</span>
                            </th>
                            <td width="35%">
                               <input type="text" id="paiche_linkerPhone" name="paiche_linkerPhone"  class="form-control input-sm" placeholder=""  readonly="readonly" unselectable="on">
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
                                <input type="hidden" name="paicheCounterShop" id="paicheCounterShop">
                               <input type="text" id="paicheCounterShop_name"   class="form-control input-sm" placeholder="" value="" readonly="readonly" unselectable="on">
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">业务员：</span>
                            </th>
                            <td width="35%">
                                <input type="hidden" name="paicheCounterMan" id="paicheCounterMan">
                               <input type="text" id="paicheCounterMan_name"   class="form-control input-sm" placeholder="" readonly="readonly" unselectable="on">
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
                              <input name="paiche_startDate" id="paiche_startDate" placeholder="请输入日期" value="" class="laydate-icon form-control input-sm">
                            </td>
                             <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">使用月数：</span>
                            </th>
                            <td width="35%">
                              <input style="width: 78%;float: left;" οnkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" type="text" min="0" id="yue"  class="form-control input-sm" placeholder="" value="" onchange="jisuan_shijian()">
                              <input style="float: left;height: 30px;width: 30px;font-size: 18px;line-height: 24px;" class="btnyz xdd" type="button" value="+">
                              <input style="float: left;width: 30px;height: 30px;font-size: 18px;line-height: 24px;" class="btnyj xdd" type="button" value="-">
                            </td>
                        </tr>
                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">用车结束时间：</span>
                            </th>
                            <td width="35%">
                                <input type="text" id="paiche_endDate" name="paiche_endDate"  class="form-control input-sm" placeholder=""  readonly="readonly" unselectable="on" onchange="jisuan_shijian()">
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">使用天数：</span>
                            </th>
                            <td width="35%">
                              <input style="float: left;width: 78%;" type="text" min="0" id="tian"   class="form-control input-sm" placeholder="" value="" onchange="jisuan_shijian()">
                              <input style="float: left;height: 30px;width: 30px;font-size: 18px;line-height: 24px;" class="btnz xdd" type="button" value="+">
                              <input style="float: left;width: 30px;height: 30px;font-size: 18px;line-height: 24px;" class="btnj xdd" type="button" value="-">
                            </td>
                        </tr>
                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">租金：</span>
                            </th>
                            <td width="35%">
                               <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" id="paiche_rent" name="paiche_rent"  class="form-control input-sm" placeholder="" value="" onchange="totalCost();">

                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">押金：</span>
                            </th>
                            <td width="35%">
                               <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" id="paiche_deposit" name="paiche_deposit"  class="form-control input-sm" placeholder="" value="" onchange="totalCost();">
                            </td>
                        </tr>

                        <tr>
                            
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
                                <span style="color:#000">本次应收费用：</span>
                            </th>
                            <td width="35%">
                              <input type="text" id="yingshou"   class="form-control input-sm" placeholder="" value="" readonly="readonly" unselectable="on">
                            </td>
                            
                        </tr>
                


                        <tr>
                            
                            
                             <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">备注：</span>
                            </th>
                            <td width="35%">
                              <input type="text" id="paiche_specialRemarks" name="paiche_specialRemarks"  class="form-control input-sm" placeholder="" value="">
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                               
                            </th>
                            <td width="35%">
                              
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
