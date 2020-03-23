<?php /* Smarty version Smarty-3.0.4, created on 2020-03-19 15:38:46
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/car/carrunlist.html" */ ?>
<?php /*%%SmartyHeaderCode:46395e732186e9ff05-00981900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3fbcdd223a945920a9a3e5ed00613155bd56ed3' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/car/carrunlist.html',
      1 => 1584603521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46395e732186e9ff05-00981900',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>


<!-- Mirrored from www.zi-han.net/theme/hplus/contacts.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:18:21 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理后台</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">
    <link rel="shortcut icon" href="favicon.ico"> <link href="../../../crm/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="../../../crm/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="../../../crm/css/animate.min.css" rel="stylesheet">
    <link href="../../../crm/css/style.min862f.css?v=4.1.0" rel="stylesheet">
   	<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css?a=2" rel="stylesheet">
    <link href="../../../css/conmone.css" rel="stylesheet">
   	<script type="text/javascript" src="../../../js/jquery.js"></script>
	<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js?a=5"></script>
	<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN1.js?a=101"></script>
   <style type="text/css">
       .col-sm-4{
            padding-right: 5px;
    padding-left: 5px;
       }
   </style>
    
</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight" style="">
    <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>车辆当前状况一览表</h5>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #e4961f"></span>
            </div>
            <form id="form1" action="index.php?task=carrun" method="post">
        
            	<input type="hidden" name="status" value="<?php echo $_smarty_tpl->getVariable('status')->value;?>
">
            	<input type="hidden" name="search_shop" value="<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
">
               

                <div class="ibox float-e-margins" style="margin:0">
                    <div class="ibox-title" style=" margin: 0; padding: 0;">
                        <h5 style="padding-top: 15px; padding-left: 10px;">搜索
                        </h5>

                        <div class="ibox-tools" style="padding-top: 14px; padding-left: 10px;float: left;padding-right: 20px">
                            <a class="collapse-link">
                            <i class="fa fa-chevron-down" id="up"></i>
                            </a>
                        </div>
                        
                    </div>
                    <div class="ibox-content" id="content" style=" margin: 0px; padding: 0px;display: none">
                        <div class="row row-lg">
                            <div class="col-sm-12">
                                <!-- Example Events -->
                                <div class="example-wrap">
                                    <div class="example">
                                        <table class="table table-bordered">
                                        <tbody>
                                        <tr> 
                                            <th width="15%" style="background-color:#F5F5F6">
                                                 <span style="color:#000">最低日租金：</span>
                                            </th>
                                            <td width="35%">
                                               <input type="text" class="form-control input-sm" placeholder="最低日租金" name="d_zujin" >
                                            </td>
                                            <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000">最高日租金：</span>
                                            </th>
                                            <td width="35%">
                                                <input type="text" class="form-control input-sm" placeholder="最高日租金" name="g_zujin" >
                                            </td>
                                            
                                        
                                        </tr>

                                        <tr> 
                                            <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000">车牌号码：</span>
                                            </th>

                                            <td width="35%">
                                                <input type="text" class="form-control input-sm" placeholder="车牌号码" name="car_num" >
                                            </td>

                                             <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000">车辆品牌：</span>
                                            </th>

                                            <td width="35%">
                                                <input type="text" class="form-control input-sm" placeholder="车辆品牌" name="car_model" >
                                            </td>
                                            
                                        </tr>
                                             <tr>
                                                <th style="background-color:#F5F5F6" width="15%">
                                                <span style="color:#000">车辆种类:</span>
                                                </th>
                                                <td width="35%">
                                                    <select class="form-control input-sm" name="car_types" id="car_types">
                                                         <option value="0">请选择</option>
                                                         
                                                          
                                                          <option value="2">超级跑车</option>
                                                          <option value="1">普通跑车</option>
                                                           <option value="99">小轿车</option>
                                                          <option value="3">越野车</option>
                                                          <option value="4">商务车</option>
                                                        <option value="5">中型客车</option>
                                                        <option value="6">大型客车</option>
                                                    </select>
                                                </td>
                                                 <th style="background-color:#F5F5F6" width="15%">
                                                <span style="color:#000">车辆专用名称</span>
                                                </th>
                                                <td width="35%">
                                                    <select class="form-control input-sm" name="zhuanyong" id="zhuanyong">
                                                         <option value="0">请选择</option>
                                                        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('zhaunyong_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                                          <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['name']) ? $_smarty_tpl->tpl_vars['rows']->value['name'] : null);?>
</option>
                                                        <?php }} ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <?php if ($_smarty_tpl->getVariable('status')->value==0){?>
                                            <tr>
                                           

                                                <th style="background-color:#F5F5F6" width="15%">
                                                <span style="color:#000">存放门店</span>
                                                </th>
                                                <td width="35%">
                                                    <select class="form-control input-sm" name="car_nowSite" id="car_nowSite">
                                                         <option value="0">请选择</option>
                                                        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shop_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                                            
                                            <th width="15%">
                                                <span style="color:#000"></span>
                                            </th>
                                            <td width="35%">
                                                
                                            </td>
                                            
                        
                                             </tr>
                                             <?php }?>
                                             </tbody>
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
        </form>
            <div class="ibox-content" style="background-color:#F3F3F4">
            <div class="row row-lg">
                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="example-wrap">
                            <div class="example">
    <div class="wrapper wrapper-content animated fadeInRight" style="padding: 0;">
        <div class="row">
            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('car')->value['list']) ? $_smarty_tpl->getVariable('car')->value['list'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="contact-box" style="padding: 8px">
                        <div class="col-sm-6" style="padding:0">
                            <div class="text-center">
                                <div style="width:100%; height:0;padding-top:100%;position:relative;">
                             <a href="javascript:void(0);" onclick="xiangxi_a(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
);">
                                <img alt="image" class="img-circle m-t-xs img-responsive" data-echo="../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_photo']) ? $_smarty_tpl->tpl_vars['row']->value['car_photo'] : null);?>
" src="../../../images/wait1.gif" onerror="javascript:this.src='../../../images/wait1.gif'" style="width:100%; height:80%; position:absolute; top:0; left:0;border-radius:0px" >
                            </a>
                                <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['drive_photo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_photo'] : null)){?>
                            <a href="javascript:void(0);" onclick="siji_xiangxi(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive']) ? $_smarty_tpl->tpl_vars['row']->value['drive'] : null);?>
);">
                                <img alt="image" class="img-circle m-t-xs img-responsive" data-echo="../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_photo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_photo'] : null);?>
" src="../../../images/wait2.gif" onerror="javascript:this.src='../../../images/wait2.gif'" style="width:25%; height:30%; position:absolute; top:0; left:0;border-radius:0px" title="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['siji']) ? $_smarty_tpl->tpl_vars['row']->value['siji'] : null);?>
" >
                              </a> 
                                <?php }?>
                                </div>
                                <div class="m-t-xs font-bold" style="height: 92px;overflow: hidden;">	
                                    <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_model']) ? $_smarty_tpl->tpl_vars['row']->value['car_model'] : null);?>
<br><br/>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_remarks_b']) ? $_smarty_tpl->tpl_vars['row']->value['car_remarks_b'] : null)){?>
                                    <span style="font-size: 12px;color: #969292;font-weight: 500;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_remarks_b']) ? $_smarty_tpl->tpl_vars['row']->value['car_remarks_b'] : null);?>
</span>
                                    <?php }?>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <h4 style="height: 30px"><nobr>
                            <strong>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
<br><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null)!='其他车辆'){?><span style="font-size: 12px;margin-top: 5px;
    font-weight: 400;
    color: red;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
</span><?php }?></strong>
                            </nobr><br><br>
                            </h4>
                            <nobr>
                            	状态：<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_status_code']) ? $_smarty_tpl->tpl_vars['row']->value['car_status_code'] : null)==0){?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_image']) ? $_smarty_tpl->tpl_vars['row']->value['emp_image'] : null);?>

                            	<span style="color: #1187ec;">
                            	空闲
                            	</span>
                            	<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['car_status_code']) ? $_smarty_tpl->tpl_vars['row']->value['car_status_code'] : null)==1){?>
                            	<span style="color: green">
                            	在租
                            	</span>

                            	<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['car_status_code']) ? $_smarty_tpl->tpl_vars['row']->value['car_status_code'] : null)==2){?>
                            		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_maintreason']) ? $_smarty_tpl->tpl_vars['row']->value['car_maintreason'] : null)==0){?>
                            			<span style="color: red">
                            			故障维修
                            			</span>

                            		<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['car_maintreason']) ? $_smarty_tpl->tpl_vars['row']->value['car_maintreason'] : null)==1){?>
                            			<span style="color: red">
                            			异常/被骗
                            			</span>
                                    <?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['car_maintreason']) ? $_smarty_tpl->tpl_vars['row']->value['car_maintreason'] : null)==2){?>
                                        <span style="color: red">
                                        待维修
                                        </span>
                            		<?php }?>
                            	<?php }?>
                            </nobr>
                            <br><br>
                            <nobr>租金：
                            <?php $_tmp1=(isset($_smarty_tpl->tpl_vars['row']->value['plan_rentamount']) ? $_smarty_tpl->tpl_vars['row']->value['plan_rentamount'] : null);?><?php if (empty($_tmp1)){?>暂无租赁报价<?php }else{ ?>

                            <a href="javascript:void(0);" onclick="price(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
);" style="color:#CC6600">
                            	<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_rentamount']) ? $_smarty_tpl->tpl_vars['row']->value['plan_rentamount'] : null);?>
元/天
                        	</a>
                    		<?php }?>
                    		</nobr><br><br>
                            <nobr>老客户押金：
                                <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_deposit1']) ? $_smarty_tpl->tpl_vars['row']->value['plan_deposit1'] : null);?>
元/天
                            </nobr><br><br>
                            <nobr>新客户押金：
                                <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_deposit2']) ? $_smarty_tpl->tpl_vars['row']->value['plan_deposit2'] : null);?>
元/天
                            </nobr><br><br>

                           	<nobr>
                           		<?php ob_start();?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_status_code']) ? $_smarty_tpl->tpl_vars['row']->value['car_status_code'] : null)==2&&(isset($_smarty_tpl->tpl_vars['row']->value['car_maintreason']) ? $_smarty_tpl->tpl_vars['row']->value['car_maintreason'] : null)==2;?>
<?php $_tmp2=ob_get_clean();?><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_status_code']) ? $_smarty_tpl->tpl_vars['row']->value['car_status_code'] : null)==0||$_tmp2){?>
                           			存放门店：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null);?>

                           		<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['car_status_code']) ? $_smarty_tpl->tpl_vars['row']->value['car_status_code'] : null)==1){?>
                            		业绩门店：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_shopname']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_shopname'] : null);?>

                            	<?php }?>
                            </nobr>
                            <br><br>
                            <nobr>
                           		操作：
                           		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_status_code']) ? $_smarty_tpl->tpl_vars['row']->value['car_status_code'] : null)==1){?>
                           		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_type']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_type'] : null)==1){?>
	                           		<?php if ($_smarty_tpl->getVariable('zijia_detail')->value==1){?>
	                           		<a href="/site/operator/zijia_linshi/zijia_detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="_blank" style="color:#CC6600">查看当前订单</a>&nbsp;&nbsp;&nbsp;
	                           		<?php }?>
	                           	<?php }else{ ?>
	                           		<a href="/site/operator/business/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="blank" style="color:#CC6600">查看当前订单</a>
                           		<?php }?>
                           		<?php }?>

                           		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_status_code']) ? $_smarty_tpl->tpl_vars['row']->value['car_status_code'] : null)!=1){?>
                           		<a href="javascript:void(0);" onclick="qiehuan(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
);" style="color:#CC6600" >切换车辆存放状态</a>
                           		<?php }?>
                            </nobr>
                            <br><br>

                        </div>
                        <div class="clearfix"></div>
                    
                </div>
            </div>
            <?php }} ?>
        </div>

    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</body>
<script src="../../../crm/js/echo.js"></script>

<script>
     Echo.init({
            offset: 0,
            throttle: 0
        });
    var body_W = $("body").width();
    function setBody_W(){
        body_W = $("body").width();
    }
	function price(carid){
        setBody_W();
        demo_iframe('index.php?task=price&car_id='+carid,'租赁报价方案',body_W,500,'login_js');
	}
	function qiehuan(carid){
        setBody_W();
        demo_iframe('index.php?task=qiehuan&car_id='+carid,'切换车辆状态',body_W,500,'login_js');
	}
	function xiangxi_a(carid){
        setBody_W();
        demo_iframe('index.php?task=xiangxi_a&car_id='+carid,'车辆详细资料',body_W,500,'login_js');
	}
	function siji_xiangxi(carid){
        setBody_W();
        demo_iframe('index.php?task=siji_xiangxi&u_id='+carid,'司机详细资料',body_W,500,'login_js');
	}
	
    $(document).ready(function(){
        $(".contact-box").each(function(){
            animationHover(this,"pulse");
        })
    });
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
    </script>


<!-- Mirrored from www.zi-han.net/theme/hplus/contacts.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:18:21 GMT -->
</html>
