<?php /* Smarty version Smarty-3.0.4, created on 2019-01-20 09:54:58
         compiled from "D:\web\site\templates\elsker\operator/machine/carrunlist.html" */ ?>
<?php /*%%SmartyHeaderCode:255265c43d4f23f9612-97289547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7d65d0881a413dfd747d89df28c21f793359659' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/machine/carrunlist.html',
      1 => 1547949235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '255265c43d4f23f9612-97289547',
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
	<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shoplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
            <input type="radio" name="car_shop" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null);?>
" /><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>

    <?php }} ?><br/><br/><input type="checkbox" name="car_status" id="car_status" value="2" style="float:left;"><label style="float:left;">维修</label>
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
    <input type="hidden" id="firstop" name="firstop" value="<?php echo $_smarty_tpl->getVariable('firstop')->value;?>
" /><input type="hidden" name="status" value="<?php echo $_smarty_tpl->getVariable('status')->value;?>
" />
    <input type="hidden" name="task" value="carrun" /><input type="hidden" name="search_shop" value="<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
" />
    <input type="hidden" name="maint" value="<?php echo $_smarty_tpl->getVariable('maint')->value;?>
" />
    <input class="btn_b" type="button" value="返回" name="btnback" onclick="javascript:parent.history.go(-1);">&nbsp;&nbsp;&nbsp;&nbsp;
  	按车牌检索：<input type="text" name="car_num" size="6"  /><input class="btn_b" type="submit" value="确定">
  	
  &nbsp;&nbsp;&nbsp;&nbsp;
  	<?php if ($_smarty_tpl->getVariable('status')->value==0){?>空闲<?php }?><?php if ($_smarty_tpl->getVariable('status')->value==1){?>租用<?php }?><?php if ($_smarty_tpl->getVariable('status')->value==2){?>维修<?php }?>合计：<?php echo (isset($_smarty_tpl->getVariable('car')->value['count']) ? $_smarty_tpl->getVariable('car')->value['count'] : null);?>
辆
  	
  	</form>
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('car')->value['list']) ? $_smarty_tpl->getVariable('car')->value['list'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
  <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->getVariable('count')->value+1, null, null);?>
  <?php if ($_smarty_tpl->getVariable('count')->value==6){?></tr><tr><?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(1, null, null);?><?php }?>
	<td width="20%">
	<table align="left" width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td style="border-bottom:0;"><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_status_code']) ? $_smarty_tpl->tpl_vars['row']->value['car_status_code'] : null)==2){?><img src="../../../images/carb.gif" width="30" /><?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['car_status_code']) ? $_smarty_tpl->tpl_vars['row']->value['car_status_code'] : null)==1){?><img src="../../../images/carr.gif" width="30" /><?php }else{ ?><img src="../../../images/carg.gif" width="30" /><?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_status_code']) ? $_smarty_tpl->tpl_vars['row']->value['car_status_code'] : null)==1){?><a href="../business/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="blank">苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
</a>(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_shopname']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_shopname'] : null);?>
)<?php }else{ ?>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
<?php }?>-<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_model']) ? $_smarty_tpl->tpl_vars['row']->value['car_model'] : null);?>

		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_status_code']) ? $_smarty_tpl->tpl_vars['row']->value['car_status_code'] : null)==2){?>(<span date1="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
" date2="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_nowSite']) ? $_smarty_tpl->tpl_vars['row']->value['car_nowSite'] : null);?>
" date3="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_status_code']) ? $_smarty_tpl->tpl_vars['row']->value['car_status_code'] : null);?>
" date4="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_maintreason']) ? $_smarty_tpl->tpl_vars['row']->value['car_maintreason'] : null);?>
"><a href="javascript://">维修</a></span>)<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_status_code']) ? $_smarty_tpl->tpl_vars['row']->value['car_status_code'] : null)==0){?>(<span date1="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
" date2="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_nowSite']) ? $_smarty_tpl->tpl_vars['row']->value['car_nowSite'] : null);?>
" date3="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_status_code']) ? $_smarty_tpl->tpl_vars['row']->value['car_status_code'] : null);?>
" date4="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_maintreason']) ? $_smarty_tpl->tpl_vars['row']->value['car_maintreason'] : null);?>
"><a href="javascript://"><?php $_tmp1=(isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null);?><?php if (empty($_tmp1)){?>设定<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null);?>
<?php }?></a></span>)<?php }?></td>
	</tr>
	<tr>
		<td style="border-bottom:0;">
		<div style="position: relative;">
		<a href="javascript:cardetail(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
);">
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_photo']) ? $_smarty_tpl->tpl_vars['row']->value['car_photo'] : null)==''){?><img src="../../../images/wait1.gif" data-original="../../../images/nopic.png" width="200" height="150" />
		<?php }else{ ?><img src="../../../images/wait1.gif" data-original="../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_photo']) ? $_smarty_tpl->tpl_vars['row']->value['car_photo'] : null);?>
" width="200" height="150" /><?php }?>
		</a>
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_status_code']) ? $_smarty_tpl->tpl_vars['row']->value['car_status_code'] : null)==1&&(isset($_smarty_tpl->tpl_vars['row']->value['drive']) ? $_smarty_tpl->tpl_vars['row']->value['drive'] : null)>0){?>
		<div style="position: absolute;top:80px;left:152px;">
		<a href="javascript:drivedetail(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive']) ? $_smarty_tpl->tpl_vars['row']->value['drive'] : null);?>
);" title="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['siji']) ? $_smarty_tpl->tpl_vars['row']->value['siji'] : null);?>
">
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['drive_photo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_photo'] : null)==''){?><img src="../../../images/wait3.gif" data-original="../../../images/nopic2.png" width="50" height="70"/>
		<?php }else{ ?><img src="../../../images/wait3.gif" data-original="../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_photo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_photo'] : null);?>
" width="50" height="70" /><?php }?></a>
	  	</div>
	  	<?php }?>
		</div></td>
	</tr>
	<tr>
		<td style="border-bottom:0;">
		<a href="javascript:price(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
);"><?php $_tmp2=(isset($_smarty_tpl->tpl_vars['row']->value['car_price']) ? $_smarty_tpl->tpl_vars['row']->value['car_price'] : null);?><?php if (empty($_tmp2)){?>暂无租赁报价<?php }else{ ?>租金：<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_price']) ? $_smarty_tpl->tpl_vars['row']->value['car_price'] : null);?>
元/天<?php }?></a>
		
		
		<!--<span id="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
" ><a href="javascript://"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_price']) ? $_smarty_tpl->tpl_vars['row']->value['car_price'] : null);?>
元/天</a></span>-->
		<div class="geovindu2" id="price<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
"><a href="javascript://" class="pop_close">关闭</a>
		<span>
		<table id="carprice<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
" width="100%" border="0" cellspacing="0" cellpadding="0">
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
		<span ><a href="carrundetail.php?car_id=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
" target="blank">查看租车记录</a></span>
		
		</td>
	</tr>
	</table>
	</td>
  <?php }} ?>
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
<!-->
<script>
var wh = $(window).height();
var wt = $(document).scrollTop();
function winload(){ 
    //$('html,body').animate({scrollTop:$('.bottom').offset().top}, 800);
	$("#waitbackbg").css("display","none");
} 
var id="";
$(document).ready(function(){
	var firstop=$("#firstop").val();
	if (firstop==""){
		$("#waitbackbg").css({"display":"block","top":wt,"height":wh});
		$("#firstop").val("firstop");
		document.SearchForm.submit();
	}
    $("img").lazyload({ 
        effect: "fadeIn"
  	});
    $("#car_status").click(function(){
    	if($('#car_status').is(':checked')) {
    		$("#radiospan").show();
    	}else{
    		$("#radiospan").hide();
    	}
    });
	$('span').click(function(){
		pid=$(this).attr("id");		
		if (pid){
			$.get("list.php?task=getcarprice",{carid:pid}, function(jsonmsg){
				if (jsonmsg.status==0){
					$("#carprice"+pid+" tr:not(:first)").empty();
					var nRe=jsonmsg.totalRecords;
					var dataObj = jsonmsg.data;
					for (var i=0;i<nRe;i++){
						if (i%2==0){
							sResult="<tr style='background-color:#CAF2F3;'>";
						}else{
							sResult="<tr>";
						}
						sResult+="<td>"+(i+1)+"</td><td style='text-align:left;'>"+dataObj[i].plan_name+"</td><td>"+dataObj[i].plan_day+"天</td><td>"+dataObj[i].plan_rent+"元/天</td>";
						sResult+="<td>"+dataObj[i].plan_rentamount+"元</td><td>"+dataObj[i].plan_deposit1+"元</td><td>"+dataObj[i].plan_deposit2+"元</td>";
						sResult+="<td>"+dataObj[i].plan_rentRemarks+"</td></tr>";
						$("#carprice"+pid).append(sResult);
					}
				}
			},"json");
		    var self = $(this); //当前对象  
		    $(".geovindu2").css("display","none");
			$("#price"+pid).css("display","block");
			var p = self.position(); //获取这个元素的left和top  
		        var x = p.left + self.width();//获取这个浮动层的left
		        var y = p.top + self.height();//获取这个浮动层的bottom
		        var docWidth = $(document).width();//获取网页的宽
		        var docHeight= $(document).height();//获取网页的高
		        if (x > docWidth - $("#price"+pid).width() - 20) {  
		            x = p.left - $("#price"+pid).width()+80;  
		        }else{
		            x = x - 80;
		        }
		        $("#price"+pid).css("left", x);
		        if (y > docHeight - $("#price"+pid).height()-20){
		            y = p.top - $("#price"+pid).height();
		        }
		        $("#price"+pid).css("top", y);
		}else{
			if ($(this).attr("date1")){
				shopid=$(this).attr("date2");
				carstatus=$(this).attr("date3");
				car_maintreason=$(this).attr("date4");
				$("#carid").val($(this).attr("date1"));
				$("input[name='car_shop'][value='"+shopid+"']").attr("checked",true);
				if (carstatus==2){
					$("#car_status").attr("checked",'true');
					$("input[name='car_maintreason'][value='"+car_maintreason+"']").attr("checked",true);  
					$("#radiospan").show();
				}else{
					$("#car_status").removeAttr("checked");
					$("#radiospan").hide();
				}
				
				var self = $(this); //当前对象
				var p = self.position(); //获取这个元素的left和top  
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
		        $(".geovindu3").css("display","block");
			}
			
			
		}
    });
	/*
	$('.geovindu2').mouseover(function(){
	    
	    $(this).css("display","block");
	});
	$('.geovindu2').mouseout(function(){
	    $(this).css("display","none");
	});
	$('span').mouseout(function(){
		id=$(this).attr("id");
		pid=$(this).attr("pid");
		if (id){
			//$("#price"+id).css("display","none");
		}
		if (pid){
			$("#paiche"+pid).css("display","none");
		}
    });
	*/
	$("input[name=status],input[name=search_shop]").click(function(){
		$("#waitbackbg").css({"display":"block","top":wt,"height":wh});
		document.SearchForm.action = 'list.php?status=' + $("input[name=status]:checked").val()+'&search_shop'+ + $("input[name=search_shop]:checked").val();
        document.SearchForm.submit();
	});
	$(".pop_close").click(function(){
		$(this).parent().css("display","none");
	});
	$("#btnsave").click(function(){
		wh = $(window).height();
		wt = $(document).scrollTop();
		var carstatus=car_maintreason=0;
		if ($("#car_status").is(':checked')){
			carstatus=2;
			car_maintreason=$("input:radio[name='car_maintreason']:checked").val();
		}
		
		$.get("list.php?task=changeshop",{carid:$("#carid").val(),shopid:$("input[name='car_shop']:checked").val(),carstatus:carstatus,car_maintreason:car_maintreason}, function(jsonmsg){
			if (jsonmsg.status==0){
				alert("设置成功！");
				$(".geovindu3").css("display","none");
				$("#waitbackbg").css({"display":"block","top":wt,"height":wh});
				location.reload();
				
			}
		},"json");
	});
});
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
<!-->

</body>
</html>