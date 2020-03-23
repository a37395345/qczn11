<?php /* Smarty version Smarty-3.0.4, created on 2019-07-26 15:58:36
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/zijia_linshi/zijia_shouce.html" */ ?>
<?php /*%%SmartyHeaderCode:193225d3ab2ac8aa158-66305489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fd11011e30490848db3df2ea13b7a53021995b8' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/zijia_linshi/zijia_shouce.html',
      1 => 1564127913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193225d3ab2ac8aa158-66305489',
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


    <title>H+ 后台主题UI框架 - 项目详情</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

   <link href="../../../crm/fonts1/iconfont.css" rel="stylesheet">
 


<link href="../../../crm/css/bootstrap.min14ed.css" rel="stylesheet">
<link href="../../../crm/css/font-awesome.min93e3.css?v=3" rel="stylesheet">
<link href="../../../crm/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">


<script type="text/javascript" src="../../../js/laydate/laydate.js"></script>

<link href="../../../crm/css/animate.min.css" rel="stylesheet">
<link href="../../../crm/css/style.min862f.css" rel="stylesheet">


<link href="../../../crm/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet">
<script type="text/javascript" src="../../../js/jquery.js">
</script>

<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
<style>
	p{
		font-size: 13px;line-height: 20px;
	}
</style>
</head>

<body class="gray-bg">
    <div class="row">
        <div class="col-sm-12">
            <div class="wrapper wrapper-content animated fadeInUp">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="m-b-md">
                                    <h2 style="text-align: center;">运河租车临时自驾使用手册</h2>
                                
                        </div>
                        
                        
                        <div class="row m-t-sm">
                            <div class="col-sm-12">
                                <div class="panel blank-panel">
                                    <div class="panel-heading">
                                        <div class="panel-options">
                                            <ul class="nav nav-tabs">
                                                <li><a href="project_detail.html#tab-1" data-toggle="tab">订单状态</a>
                                                </li>

                                                <li class=""><a href="project_detail.html#tab-2" data-toggle="tab">订单操作</a>
                                                </li>

                                                <li class=""><a href="project_detail.html#tab-3" data-toggle="tab">常见问题</a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">

                                        <div class="tab-content">

                                            <div class="tab-pane active" id="tab-1">
                                                <h3>1.预约订单</h3>
                                                	<p>&nbsp;&nbsp;&nbsp;&nbsp;客户预约用车，但还未实际使用</p>
                                                <h3>2.取消订单</h3>
                                                	<p>&nbsp;&nbsp;&nbsp;&nbsp;客户取消预约用车，删除订单后，次单显示为取消用车</p>
                                                <h3>3.调车未还订单</h3>
                                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;(1).正常调车未还</h4>
                                                	<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;客户正在使用车辆，并且未超过预定还车时间</p>
                                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;(2).超时调车未还</h4>
                                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;客户正在使用车辆，但已超过预定还车时间<span style="color: red">（注：请各门店业务员及时联系客户进行处理！）</span></p>

                                                <h3>4.已还车未结账订单</h3>
                                                	<p>&nbsp;&nbsp;&nbsp;&nbsp;客户已将租用车辆归还，但未对订单进行结账</p>
                                                <h3>5.已结账订单</h3>
                                                	<p>&nbsp;&nbsp;&nbsp;&nbsp;客户已将租用车辆归还，并且已结账</p>
                                            </div>











                           <div class="tab-pane" id="tab-2">
                                <h3>
                                	<a href="#" class="btn btn-outline btn-default">
                                		<i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                                                      新建预约单
                                	</a>&nbsp;&nbsp;新建预约单</h3>
                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;1.条件</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;将临时自驾的页面状态改为预约单状态</p>

                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;2.内容</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	(1).客户来源:选择框（临时散客、平台客户）默认为临时散客，必选<br/>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	(2).平台选择:选择框（凹凸、携程...），必选<br/>
                                	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	(3).业务归属:选择框（公司各个门店），必选<br/>
                                	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	(4).业务员:选择框（业务归属门店下的所属的业务员），必选<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	(5).服务门店:系统默认（当前系统操作账号所属门店）<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	(6).接待业务员:系统默认（当前系统操作账号）<br/>
                                	
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	(7).承租人姓名:文本框（刷卡获取、手填、老客户未带身份证验证、新客户未带身份证验证），必填<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	(8).承租人电话号码:文本框（手填、老客户未带身份证验证），必填。注：只能为手机号码<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	(9).承租人身份证号码:文本框（刷卡获取、手填、老客户未带身份证验证、新客户未带身份证验证），必填。<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	(10).承租人地址:文本框（刷卡获取、手填、老客户未带身份证验证），必填<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	(11).担保人信息:文本框（刷卡获取）<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	(12).担保人电话号码:文本框（手填），有担保人的情况下必填，注：只能为手机号码<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	(13).车辆信息:点选
                                	<a href="#"><img src="../../../css/car2.gif" height="15" class="peoplePic"/></a>，必选<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	(14).用车开始时间:点选（当前时间~2099-12-31 23:59:59）默认当前时间，必填<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	(15).用车时长:点选（手填、天数或小时的加减按钮）<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	(16).用车结束时间:操作默认（用车开始时间+用车时长）<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	(17).是否开票:单选框（开票、不开票），默认不开票<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	(18).租金:操作默认（所选车辆日租金*使用天数+超时费用*小时数，注：当小时乘以超时费用大于单日租金，则默认为单日租金）注：平台客户可以修改，临时散客不能修改<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	(19).押金:操作默认（根据刷卡客户及所选车辆决定）<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	(20).刷卡费:文本框（手填），注：刷卡费用只针对押金，刷信用卡收取千分之6，刷储蓄卡为20元<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	(21).其他费用:文本框（手填）<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	(22).送车费:文本框（手填）<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	(23).税金:操作默认（选择开票后，除押金外，所有费用的百分之10）<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	(24).已收费用:系统默认（已经收取费用的总和）<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	(25).本次应收:操作默认（所有费用减去已收费用）<br/>
                                		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	(26).开车线路:文本框（手填）客户开车的线路，必填<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	(27).备注:文本框（手填）<br/>
                                </p> 
                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;3.备注</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	预约单添加成功后，此订单状态为预约单
                                </p>  
                                <hr/>


                                <h3>
                                	<a href="#" title="修改">
                                        <i class="iconfont icon-xiugai" aria-hidden="true"></i>
                                        </a>&nbsp;&nbsp;修改</h3>
                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;1.条件</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;订单状态为预约单，且业务归属门店或服务门店等于当前操作用户所属门店</p>
                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;2.内容</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	与预约单相同。

                                </p> 
                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;3.备注</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	修改成功后，订单状态不变，依然为预约单状态
                                </p>   


                                <hr/>
                                <h3>
                                	<a href="#" class="btn btn-outline btn-default">
                                		<i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                                                      新建实时单
                                	</a>&nbsp;&nbsp;新建实时单</h3>
                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;1.条件</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;将临时自驾的页面状态改为调车正常未还状态</p>
                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;2.内容</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	客户为临时散客的情况下，承租人信息必须采用刷卡获取、老客户未带身份证验证、新客户未带身份证验证这三种方法获取客户信息，<span style="color:red">不能手填，</span>
                                	其他则与预约单相同。

                                </p> 
                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;3.备注</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	预约单添加成功后，此订单状态为调车未还状态，系统根据还车时间区分是调车正常未还或调车超时未还。
                                </p>   

                                <hr/>
                                 <h3>
                                	<a href="#" title="调度" style="color:#CC6600">
                                        <i class="iconfont icon-ziyuan" aria-hidden="true"></i>
                                   
                                	</a>&nbsp;&nbsp;调度</h3>
                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;1.条件</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;需要调度的车辆必须为预约单状态</p>
                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;2.内容</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	客户为临时散客的情况下，承租人信息必须采用刷卡获取、老客户未带身份证验证、新客户未带身份证验证这三种方法获取客户信息，<span style="color:red">不能手填</span>；调度不能选择客户类型及业务归属。
                                	其他则与预约单相同。

                                </p> 
                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;3.备注</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	调度成功后，此订单状态为调车未还状态，系统根据还车时间区分是调车正常未还或调车超时未还。
                                </p> 

                                <hr/>
                                 <h3>
                                	 <a href="#" title="删除" style="color:#CC6600" >
               							<i class="iconfont icon-shanchu" aria-hidden="true"></i>
                                 </a>&nbsp;&nbsp;删除</h3>

                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;1.条件</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;订单必须为预约单状态、已收费用为0、业务归属门店或服务门店等于当前操作账号所属门店</p>
                                
                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;2.备注</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	删除成功后，此订单状态变为取消单。
                                </p> 


                                <hr/>
                                 <h3>
                                	 <a href="#" title="续租" style="color:#CC6600" >
                                    <i class="iconfont icon-woyaoxuzu" aria-hidden="true"></i>
                                            </a>&nbsp;&nbsp;续租</h3>

                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;1.条件</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;订单必须为调车未还（调车超时未还或调车正常未还都可以）、业务归属门店或服务门店等于当前操作账号所属门店</p>
                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;2.内容</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	（1）.开始时间：系统默认（订单实际开始的时间）<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	（2）.预计结束时间：系统默认（订单原约定的结束时间）<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	（3）.开车线路：系统默认（订单约定的开车线路）<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	（4）.原租天数：系统默认（订单原约定的用车天数）<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	（5）.续租天数：点选（手填、天数或小时的加减按钮）<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	（6）.续租到日期：操作默认（订单原约定的结束时间+续租时间）<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	（7）.续租费用：操作默认（续租天数*车辆日租金+续租小时*车辆超时费用，注：当超时费用*续租小时大于车辆日租金，则为日租金）<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	（8）.税金：操作默认（约定开票的情况下，税金为续租费用的百分之10）<br/>
                                </p>
                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;3.备注</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	续租成功后订单状态不变，为调车未还状态，系统根据还车时间区分是调车正常未还或调车超时未还。
                                </p>    

                                <hr/>
                                 <h3>
                                	<a href="#" title="换车" style="color:#CC6600">
                    <i class="iconfont icon-qiehuancheliang" aria-hidden="true"></i>
                                            </a>&nbsp;&nbsp;换车</h3>

                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;1.条件</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;订单必须为调车未还（调车超时未还或调车正常未还都可以）、业务归属门店或服务门店等于当前操作账号所属门店</p>
                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;2.内容</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	（1）.车牌号码：系统默认（订单原使用车辆的车牌号码）<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	（2）.车辆颜色：系统默认（订单原使用车辆的颜色）<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	（3）.日租金：系统默认（订单原使用车辆的单日租金），平台客户可以修改<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	（4）.车辆超时费用：系统默认（订单原使用车辆的超时费）<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	（5）.开始使用时间：系统默认（订单实际开始使用时间）<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	（6）.换车时间：操作默认（当前时间）<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	（7）.开始公里数：文本框（手填），必填<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	（8）.结束公里数：文本框（手填），必填<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	（9）.换车备注：文本框（手填）<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	（10）.目标车辆：点选
                                	<a href="#"><img src="../../../css/car2.gif" height="15" class="peoplePic"/></a>，必选，注：平台客户，目标车辆日租金可以修改<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	（11）.原押金：系统默认（订单原车辆押金）<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	（12）.换车后押金：系统默认（目标车辆的押金，注：默认为老客户续交的押金）<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	（13）.租金差价：系统默认（（目标车辆租金-原车辆租金）*剩余使用天数）<br/>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	（14）.税金：系统默认（预定开票，为租金差价的百分之10）<br/>
                                </p>
                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;3.备注</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	续租成功后订单状态不变，为调车未还状态，系统根据还车时间区分是调车正常未还或调车超时未还。<br>
                                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	<span style="color: red">
                                	换车时间应在预定还车时间的前2个小时至后半小时，否则换车当天,取日租金价格最高的那辆车的日租金为当日租金;只能换平级或更高价格的车辆；超公里不同的车辆不能换</span>
                                </p> 

                                <hr/>
                                 <h3>
                                	  <a href="#" title="明细" style="color:#CC6600" >
                                          <i class="iconfont icon-mingxi1" aria-hidden="true"></i>
                                                                    </a>&nbsp;&nbsp;明细</h3>

                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;1.条件</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;业务归属门店或服务门店等于当前操作账号所属门店</p>
                                
                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;2.备注</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	订单所有的操作记录
                                </p>     

                                <hr/>
                                 <h3>
                                	   <a href="#" title="打印" style="color:#CC6600" target="_blank">
                                         <i class="iconfont icon-dayin" aria-hidden="true"></i>
                                                      
                                                                    </a>&nbsp;&nbsp;打印</h3>

                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;1.条件</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;订单必须为调车未还（调车超时未还或调车正常未还都可以）、业务归属门店或服务门店等于当前操作账号所属门店</p>
                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;2.备注</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                	打印之前请确认合同明细
                                </p>  


                                <hr/>
                                 <h3>
                                       <a href="#" title="优惠" style="color:#CC6600" >
                             <i class="iconfont icon-youhui" aria-hidden="true"></i>
                                                                    </a>&nbsp;&nbsp;优惠</h3>

                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;1.条件</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;订单必须为未结账状态、业务归属门店或服务门店等于当前操作账号所属门店</p>

                                 <h4>&nbsp;&nbsp;&nbsp;&nbsp;2.内容</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                （1）.优惠金额：文本框（手填），必选</p>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                （2）.金额原因：文本框（手填），必选</p>

                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;3.备注</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    最大优惠金额为应收金额-应优惠金额，不能超过应收金额
                                </p>                                            	




                                <hr/>
                                 <h3>
                                       <a href="#" title="增加其他费用" style="color:#CC6600" >

                             <i class="iconfont icon-qitafeiyong" aria-hidden="true"></i>
                                                                    </a>&nbsp;&nbsp;增加其他费用</h3>

                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;1.条件</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;订单必须为未结账状态、业务归属门店或服务门店等于当前操作账号所属门店</p>

                                 <h4>&nbsp;&nbsp;&nbsp;&nbsp;2.内容</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                （1）.税金：系统默认（订单预定开票，税金为本次虽有费用总和的百分之10），必选</p>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                （2）.本次默认：操作默认（本次添加所有费用的总和）</p>

                                <hr/>
                                 <h3>
                                       <a href="#" title="打印其他费用" style="color:#CC6600" target="_blank">
     <i class="iconfont icon-xiangxixinxi" aria-hidden="true"></i>
</a>&nbsp;&nbsp;打印其他费用</h3>

                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;1.条件</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;订单必须为结账状态、业务归属门店或服务门店等于当前操作账号所属门店</p>

                                 <h4>&nbsp;&nbsp;&nbsp;&nbsp;3.备注</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    结账后，如果客户有需要，答应所有费用及优惠的详细清单
                                </p>

                                <hr/>
                                 <h3>
                                       <a href="#" title="还车" style="color:#CC6600" >

                                           <i class="iconfont icon-yihuanche" aria-hidden="true"></i>
                                                                    </a>&nbsp;&nbsp;还车</h3>

                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;1.条件</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;订单必须为调车未还（调车超时未还或调车正常未还都可以）、业务归属门店或服务门店等于当前操作账号所属门店</p>

                                 <h4>&nbsp;&nbsp;&nbsp;&nbsp;2.内容</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                （1）.约定用车开始时间：系统默认（订单实际开始使用车辆时间）</p>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                （2）.约定用车结束时间：系统默认（订单预定还车时间）</p>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                （3）.当前车辆实际用车时间：系统默认（当前车辆实际开始使用时间）</p>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                （4）.实际还车时间：系统默认（当前时间）</p>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                （5）.超时：系统默认（当前时间+半小时—原定还车时间）</p>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                （6）.超时费用:系统默认（超时半小时内不计算，超半小时不满一小时按半小时计算，超一小时不满一个半小时按一小时计算）</p>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                （7）.超公里:系统默认（实际使用天数，及车辆是否有超公里）</p>
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                （8）.换车使用公里数:系统默认（订单换车行驶公里的总数）</p>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                （9）.开始公里数:文本框（当前车辆开始使用时的公里数），必填</p>
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                （10）.结束公里数:文本框（当前车辆还车时的公里数），必填</p>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                （11）.当前车辆行驶公里数：操作默认（当前车辆实际使用公里数）</p>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                （12）.结算公里数：操作默认（当前订单所有车辆使用公里数的总和）</p>
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                （13）.超公里费用:操作默认（车辆有超公里费用，（结算公里数车辆日限制公里*使用天数）*超公里费）</p>
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                （14）.税金:操作默认（超公里费和超时费总和的百分之10）</p>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                （15）.还需收取:操作默认（（应收费用-已收费用）-（应优惠费用-以优惠费用）+超时费+超公里费）</p>

                                


                                <h4>&nbsp;&nbsp;&nbsp;&nbsp;3.备注</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   
                                </p>       

                                   
                            </div>






























                            <div class="tab-pane" id="tab-3">
                                <h3>1.默认浏览器</h3>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;
                                   本系统默认浏览器为360，请在兼容模式下使用（兼容模式选择IE10）；
                                </p>
                                <h3>2.打印合同的格式不对</h3>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;
                                   请将360浏览器的模式改为极速模式；
                                </p>

                                <h3>3.不能提交</h3>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;
                                   请仔细检查，根据系统提示，必选项必须填；
                                </p>
                                <h3>4.系统特殊状况</h3>
                                 <p>&nbsp;&nbsp;&nbsp;&nbsp;
                                   及时提交系统问题或微信联系公司程序员及时处理；
                                </p>
                            </div>








                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <!-- 全局js -->
    <script src="../../../crm1/js/jquery.min.js?v=2.1.4"></script>
    <script src="../../../crm1/js/bootstrap.min.js?v=3.3.6"></script>

</body>

</html>
