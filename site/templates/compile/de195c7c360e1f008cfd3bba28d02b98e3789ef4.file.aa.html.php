<?php /* Smarty version Smarty-3.0.4, created on 2019-04-03 09:31:28
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/machine/aa.html" */ ?>
<?php /*%%SmartyHeaderCode:258105ca40cf0dbd347-90005537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de195c7c360e1f008cfd3bba28d02b98e3789ef4' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/machine/aa.html',
      1 => 1554255077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258105ca40cf0dbd347-90005537',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>管理后台</title>
<link href="../../../css/style.css" rel="stylesheet" type="text/css">
<link href="../../../css/float.css" rel="stylesheet" type="text/css" />
<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>

<script src="../../../js/jquery.lazyload.js" type=text/javascript></script>
</head>
<body onload="winload();">
<div class="geovindu3" id="shop"><a href="javascript://" class="pop_close">关闭</a>
<input type="hidden" id="carid" value="0" />
<span style="text-align: left;">
	            <input type="radio" name="car_shop" value="1" />万福店
                <input type="radio" name="car_shop" value="2" />莱蒙店
                <input type="radio" name="car_shop" value="4" />武进店
                <input type="radio" name="car_shop" value="6" />无锡店
                <input type="radio" name="car_shop" value="7" />苏州店
                <input type="radio" name="car_shop" value="8" />南京店
                <input type="radio" name="car_shop" value="9" />业务部
                <input type="radio" name="car_shop" value="10" />镇江店
    <br/><br/><input type="checkbox" name="car_status" id="car_status" value="2" style="float:left;"><label style="float:left;">维修</label>
    <em id="radiospan"><input type="radio" name="car_maintreason" value="0">一般故障<input type="radio" name="car_maintreason" value="1">被骗<input type="radio" name="car_maintreason" value="2">损毁</em>
    <br/><br/><input type="button" id="btnsave" value="提交" />
</span>
</div>
<div id="waitbackbg" style="display:none;">
	<img src="../../../images/wait2.gif" style="position:absolute;left:50%;top:50%;"/>
</div>

<div class="so_main">
  <div class="page_tit">车辆当前状况一览表   </div>
  <div id="searchTopic_div" style="margin-left:10px;">
    <form action="list.php" method="get" id="SearchForm" name="SearchForm">
    <input type="hidden" id="firstop" name="firstop" value="firstop" /><input type="hidden" name="status" value="1" />
    <input type="hidden" name="task" value="carrun" /><input type="hidden" name="search_shop" value="6" />
    <input type="hidden" name="maint" value="" />
    <input class="btn_b" type="button" value="返回" name="btnback" onclick="javascript:parent.history.go(-1);">&nbsp;&nbsp;&nbsp;&nbsp;
  	按车牌检索：<input type="text" name="car_num" size="6"  /><input class="btn_b" type="submit" value="确定">
  	
  &nbsp;&nbsp;&nbsp;&nbsp;
  	租用合计：9辆
  	
  	</form>
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  
      
	
      
      
      
    <td width="20%">
	<table align="left" width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td style="border-bottom:0;"><img src="../../../images/carr.gif" width="30" />		<a href="../business/detail.php?uid=32611" target="blank">苏DU919E</a>(无锡店)-福特越野车
				</td>
	</tr>
	<tr>
		<td style="border-bottom:0;">
		<div style="position: relative;">
		<a href="javascript:cardetail(140);">
		<img src="../../../images/wait1.gif" data-original="../../../thumb/23/9/14794532002.jpg" width="200" height="150" />		</a>
				</div></td>
	</tr>
	<tr>
		<td style="border-bottom:0;">
		<a href="javascript:price(140);">租金：498元/天</a>
		
		
		<!--<span id="140" ><a href="javascript://">498元/天</a></span>-->
		<div class="geovindu2" id="price140"><a href="javascript://" class="pop_close">关闭</a>
		<span>
		<table id="carprice140" width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
		    <th style="width:25px;">序号	</th>
			<th style="width:135px;">套餐名称</th>
			<th style="width:30px;">天数</th>
			<th style="width:55px;">租金</th>
			<th style="width:50px;">套餐价</th>
			<th style="width:50px;">本地押金</th>
			<th style="width:50px;">外地押金</th>
			<th>备注说明</th>
		</tr>
		<tr>
			<td colspan="8"><img src="../../../images/wait3.gif" /></td>
		</tr>
		</table>
		</span></div>
		&nbsp;&nbsp;
		<span ><a href="carrundetail.php?car_id=140" target="blank">查看租车记录</a></span>
		
		</td>
	</tr>
	</table>
	</td>
    </tr>





 </table>
 </div>
 <div class="bottom"></div>
</div>
<div class="float108" id="hhService" >
    <div class="short-list">
        <div title="更多" class="backToHead"><a href="javascript:;"><img src="../../../images/scroll_01.jpg" alt="" /></a></div>
    </div>
</div>

<script>
var wh = $(window).height();
var wt = $(document).scrollTop();

function cardetail(uid){
	demo_iframe('list.php?task=detail&uid='+uid,'车辆详细资料',1000,480,'login_js');
}
function drivedetail(uid){
	demo_iframe('../employee/list.php?task=detail&uid='+uid,'驾驶员详细资料',500,480,'login_js');
}
function price(carid){
	demo_iframe('price.php?car_id='+carid,'租赁报价方案',980,520,'login_js');
}
function showprice(uid){
	if ($("#price"+uid).css("display")=="none"){
		$("#price"+uid).css("display","block");
	}else{
		$("#price"+uid).css("display","none");
	}
}
function carshop(carid,shopid,self){
	$(".geovindu3").css("display","block");
	
	var p = self.position(); //获取这个元素的left和top  
	alert(p.left);
    var x = p.left + self.width();//获取这个浮动层的left
    var y = p.top + self.height();//获取这个浮动层的bottom
    var docWidth = $(document).width();//获取网页的宽
    var docHeight= $(document).height();//获取网页的高
    if (x > docWidth - $(".geovindu3").width() - 20) {  
        x = p.left - $(".geovindu3").width()+80;  
    }else{
        x = x - 80;
    }
    $(".geovindu3").css("left", x);
    if (y > docHeight - $(".geovindu3").height()-20){
        y = p.top - $(".geovindu3").height();
    }
    $(".geovindu3").css("top", y);
}
</script>


</body>
</html>