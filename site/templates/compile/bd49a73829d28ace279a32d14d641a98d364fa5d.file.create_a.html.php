<?php /* Smarty version Smarty-3.0.4, created on 2019-12-27 09:20:48
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/machine/create_a.html" */ ?>
<?php /*%%SmartyHeaderCode:195335e055c7079c9c3-68599708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd49a73829d28ace279a32d14d641a98d364fa5d' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/machine/create_a.html',
      1 => 1577344839,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195335e055c7079c9c3-68599708',
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
    <title>编辑车辆</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="../../../crm/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="../../../crm/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="../../../crm/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
    <link href="../../../crm/css/animate.min.css" rel="stylesheet">
    <link href="../../../crm/css/style.min862f.css?v=4.1.0" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../../../css/webuploader.css">
<link rel="stylesheet" type="text/css" href="../../../../css/diyUpload.css">
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
    <object classid="clsid:F1317711-6BDE-4658-ABAA-39E31D3704D3" codebase="SDRdCard.cab#version=1,3,5,0" width="330" height="0" align="center" hspace="0" vspace="0" id="idcard" name="rdcard"></object>
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

    .show_img{
        overflow:hidden;
        padding: 0;
    }
    .show_img li{
    	list-style: none;
    }
    .show_img li img{
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
        text-indent: 0.4em;
    }
    #box{
    	background: #fff;
    	box-shadow: 0 0 2px rgba(0,0,0,0.188235);
    }
    .parentFileBox{
      width: 100%!important;
    }
</style>

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        
        <!-- Panel Other -->
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>编辑车辆</h5>
            </div>
            <form method="post" action="insert.php" name="form1" id="form1" enctype="multipart/form-data">
            <div class="ibox-content">
                <div class="row row-lg">
                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="example-wrap">
                              <div class="example">


                        <span  class="span1" style="float: left;">
                  <img src="../../../images/a5.png" style="width: 20px">
                    车辆基础信息
                  </span>
                         <table class="table table-bordered">
                        <tr>
                                    <th style="background-color:#F5F5F6" width="15%">
                                        <span style="color:#000">车牌号码：（苏D）</span>
                                    </th>
                                     <td width="35%">
                                        <input placeholder="登记证书上的车牌号码" onkeyup="value=value.replace(/[^\a-\z\A-\Z0-9]/g,'')" type="text" id="car_num" name="car_num"  class="form-control input-sm" placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
">
                                    </td>
                                    <th style="background-color:#F5F5F6" width="15%">
                                        <span style="color:#000">发动机号：</span>
                                    </th>
                                     <td width="35%">
                                        <input placeholder="登记证书上的发动机号码" type="text" id="car_motor" name="car_motor"  class="form-control input-sm" placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_motor']) ? $_smarty_tpl->getVariable('list')->value['car_motor'] : null);?>
">
                                    </td>
                                  </tr>
                                  <tr>
                                    <th style="background-color:#F5F5F6" width="15%">
                                        <span style="color:#000">车辆识别号：</span>
                                    </th>
                                     <td width="35%">
                                        <input placeholder="登记证书上的车辆识别号" type="text" id="car_frame" name="car_frame"  class="form-control input-sm" placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_frame']) ? $_smarty_tpl->getVariable('list')->value['car_frame'] : null);?>
">
                                    </td>
                                    <th style="background-color:#F5F5F6" width="15%">
                                        <span style="color:#000">车辆品牌：</span>
                                    </th>
                                     <td width="35%">
                                        <input placeholder="登记证书上的车辆品牌" type="text" id="car_brand" name="car_brand"  class="form-control input-sm" placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_brand']) ? $_smarty_tpl->getVariable('list')->value['car_brand'] : null);?>
" >
                                    </td>
                                  </tr>
                                  <tr>
                                     <th style="background-color:#F5F5F6" width="15%">
                                        <span style="color:#000">座位数：</span>
                                    </th>
                                    <td width="35%">
                                       <input placeholder="登记证书上的座位数" onkeyup="value=value.replace(/[^0-9]/g,'')" type="text" id="car_seat" name="car_seat"  class="form-control input-sm" placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_seat']) ? $_smarty_tpl->getVariable('list')->value['car_seat'] : null);?>
">
                                    </td> 

                                     <th style="background-color:#F5F5F6" width="15%">
                                        <span style="color:#000">车辆颜色：</span>
                                    </th>
                                     <td width="35%">
                                        <input placeholder="登记证书上的车辆颜色" type="text" id="car_color" name="car_color"  class="form-control input-sm" placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_color']) ? $_smarty_tpl->getVariable('list')->value['car_color'] : null);?>
" >
                                    </td>
                                   
                                
                            </tr>
                            <tr>
                              <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">车辆注册日期：</span>
                              </th>
                              <td width="35%">
                                <input onfocus="this.value='';" onblur="this.value='<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_cartDate']) ? $_smarty_tpl->getVariable('list')->value['car_cartDate'] : null);?>
'" type="text" class="form-control input-sm" name="car_cartDate" id="car_cartDate" placeholder="登记证书上的车辆注册日期" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_cartDate']) ? $_smarty_tpl->getVariable('list')->value['car_cartDate'] : null);?>
" onclick="laydate({istime: true, format: 'YYYY-MM-DD'})" />
                              </td>
                               <th style="background-color:#F5F5F6" width="15%">
                                
                              </th>
                              <td width="35%">
                              </td>
                            </tr>
                          </table>

                             <span  class="span1" style="float: left;">
                            <img src="../../../images/a5.png" style="width: 20px">
                              车辆其他信息
                            </span>
                            <table class="table table-bordered">
                            <tr>
                                    
                                     <th style="background-color:#F5F5F6" width="15%">
                                        <span style="color:#000">车型：</span>
                                    </th>
                                    <td width="35%">
                                        <input placeholder="车辆的型号（例如：别克GL8）" type="text" id="car_model" name="car_model"  class="form-control input-sm" placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_model']) ? $_smarty_tpl->getVariable('list')->value['car_model'] : null);?>
">
                                    </td>
                                    <th style="background-color:#F5F5F6" width="15%">
                                        <span style="color:#000">车辆种类:</span>
                                    </th>
                                    <td width="35%">
                                         <select class="form-control input-sm" name="car_types" id="car_types">
                                                <option value="0" <?php if ((isset($_smarty_tpl->getVariable('list')->value['car_types']) ? $_smarty_tpl->getVariable('list')->value['car_types'] : null)==0){?>selected<?php }?>>小轿车</option>
                                                <option value="1" <?php if ((isset($_smarty_tpl->getVariable('list')->value['car_types']) ? $_smarty_tpl->getVariable('list')->value['car_types'] : null)==1){?>selected<?php }?>>普通跑车</option>
                                                <option value="2" <?php if ((isset($_smarty_tpl->getVariable('list')->value['car_types']) ? $_smarty_tpl->getVariable('list')->value['car_types'] : null)==2){?>selected<?php }?>>超级跑车</option>
                                                <option value="3" <?php if ((isset($_smarty_tpl->getVariable('list')->value['car_types']) ? $_smarty_tpl->getVariable('list')->value['car_types'] : null)==3){?>selected<?php }?>>越野车</option>
                                                <option value="4" <?php if ((isset($_smarty_tpl->getVariable('list')->value['car_types']) ? $_smarty_tpl->getVariable('list')->value['car_types'] : null)==4){?>selected<?php }?>>商务车</option>
                                                <option value="5" <?php if ((isset($_smarty_tpl->getVariable('list')->value['car_types']) ? $_smarty_tpl->getVariable('list')->value['car_types'] : null)==5){?>selected<?php }?>>中型客车</option>
                                                <option value="6" <?php if ((isset($_smarty_tpl->getVariable('list')->value['car_types']) ? $_smarty_tpl->getVariable('list')->value['car_types'] : null)==6){?>selected<?php }?>>大型客车</option>
                                        </select>
                                    </td>
                            </tr>
                            
                            <tr>
                              <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">入账日期：</span>
                              </th>
                              <td width="35%">
                                <input onfocus="this.value='';" onblur="this.value='<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_saleDate']) ? $_smarty_tpl->getVariable('list')->value['car_saleDate'] : null);?>
'" class="form-control input-sm"   type="text" name="car_saleDate" id="car_saleDate" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_saleDate']) ? $_smarty_tpl->getVariable('list')->value['car_saleDate'] : null);?>
" placeholder="公司实际购车日期" onclick="laydate({istime: true, format: 'YYYY-MM-DD'})" />
                              </td>
                              


                               <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">开票价格：</span>
                              </th>
                              <td>
                                <input placeholder="发票上车辆的价格" onkeyup="value=value.replace(/[^0-9\.]/g,'')" class="form-control input-sm" id="car_amount"  type="text" name="car_amount" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_amount']) ? $_smarty_tpl->getVariable('list')->value['car_amount'] : null);?>
"/>
                              </td>
                              
                            </tr>

                          

                            <tr>
                              <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">购置税：</span>
                              </th>
                              <td width="35%">
                                <input placeholder="购置税发票上的价格" onkeyup="value=value.replace(/[^0-9\.]/g,'')" type="text" name="car_buytax" id="car_buytax" size="16" class="form-control input-sm" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_buytax']) ? $_smarty_tpl->getVariable('list')->value['car_buytax'] : null);?>
"/>
                              </td>
                                <th style="background-color:#F5F5F6" width="15%">
                                               <span style="color:#000">实际购车价格：</span>
                                             </th>
                                            <td width="35%">
                                              <input placeholder="实际购车价格" onkeyup="value=value.replace(/[^0-9\.]/g,'')" type="text" name="car_infactamount" id="car_infactamount" size="16" class="form-control input-sm" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_infactamount']) ? $_smarty_tpl->getVariable('list')->value['car_infactamount'] : null);?>
"/>
                                        </td>
                              
                            </tr>


                          </table>


                           <span  class="span1" style="float: left;">
                            <img src="../../../images/a5.png" style="width: 20px">
                              车辆备注信息
                            </span>
                           <table class="table table-bordered">
                            <tr>
                              <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">保险备注：</span>
                              </th>
                              <td width="35%">
                                <input class="form-control input-sm" name="car_remarks_a" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_remarks_a']) ? $_smarty_tpl->getVariable('list')->value['car_remarks_a'] : null);?>
" cols="40" rows="5">
                              </td>
                              <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">车辆备注：</span>
                              </th>
                              <td width="35%">
                                <input class="form-control input-sm" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_remarks']) ? $_smarty_tpl->getVariable('list')->value['car_remarks'] : null);?>
" name="car_remarks" cols="40" rows="5">
                              </td>
                              
                            </tr>
                        
                        </table>

                                <div>
                                  <div>


           
       </div>

							</div>
                            </div>
                    <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
                    <input type="hidden" name="zid" value="<?php echo $_smarty_tpl->getVariable('zid')->value;?>
" id="zid"/>
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
</body>  
<script type="text/javascript">

$("#submit").click(function(){
    var car_num = $("#car_num").val();
    var car_color = $("#car_color").val();
    var car_brand = $("#car_brand").val();
    var car_model = $("#car_model").val();
    var car_motor = $("#car_motor").val();
    var car_frame = $("#car_frame").val();
    var car_seat = $("#car_seat").val();
    var car_amount = $("#car_amount").val();
    var car_buytax = $("#car_buytax").val();
    var car_price = $("#car_price").val();
    if(!car_num||car_num.length!=5){
      alert("请填写正确的车牌号码！");
      return false;
    }
    if(!car_color){
      alert("请填写车辆颜色！");
      return false;
    }
    if(!car_brand){
      alert("请填写车辆品牌！");
      return false;
    }
    if(!car_model){
      alert("请填写车型！");
      return false;
    }
    if(!car_motor){
      alert("请填写发动机号！");
      return false;
    }
    if(!car_frame){
      alert("请填写车辆识别号！");
      return false;
    }
    if(!car_seat){
      alert("请填写座位数！");
      return false;
    }
    if(!car_amount){
      alert("请填写开票价格！");
      return false;
    }
    if(!car_buytax){
      alert("请填写购置税！");
      return false;
    }
});

$("#tp_b").change(function(){
 var image;
var upload=document.getElementById("tp_b");
 var reader = new FileReader();
 reader.readAsDataURL(upload.files[0]);

 reader.onload = function(e) {
  var base=this.result;
  image=base[1];
  $("#images_a").attr("src",base);
  $("#images_a").attr("display","block");
 }
 //$('#images_a').attr("src",$("#tp_b").val());
});
$('#form1').submit(function(){
    $('#submit').attr('disabled','disabled');
    $('#submit').val('正在提交');

  });
</script>


    

<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->
</html>
