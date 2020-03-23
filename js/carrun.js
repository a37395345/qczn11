/**
 * 
 */
var wh = $(window).height();
var wt = $(document).scrollTop();
function winload(){ 
    //$('html,body').animate({scrollTop:$('.bottom').offset().top}, 800);
	$("#waitbackbg").css("display","none");
} 
var id="";
var typeid="1";
$(document).ready(function(){
	jQuery.jqtab = function(tabtit,tab_conbox,shijian) {
		$(tab_conbox).find("li").hide();
		$(tabtit).find("li:first").addClass("thistab").show(); 
		$(tab_conbox).children().eq(0).show();
		getDate();
	
		$(tabtit).find("li").bind(shijian,function(){
			$(this).addClass("thistab").siblings("li").removeClass("thistab");
			$(tab_conbox).children().eq(0).show();
			$(tab_conbox).children().eq(1).hide();
			typeid=$(this).attr("dat");
			getDate();
			return false;
		});
	
	};
	/*调用方法如下：*/
	$.jqtab("#tabs","#tab_conbox","click");
	
	var firstop=$("#firstop").val();
	if (firstop==""){
		$("#waitbackbg").css({"display":"block","top":wt,"height":wh});
		$("#firstop").val("firstop");
		document.SearchForm.submit();
	}
    $("img").lazyload({ 
        effect: "fadeIn"
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
				$("#carid").val($(this).attr("date1"));
				$("input[name='car_shop'][value='"+shopid+"']").attr("checked",true);
				
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
		$.get("list.php?task=changeshop",{carid:$("#carid").val(),shopid:$("input[name='car_shop']:checked").val()}, function(jsonmsg){
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
function getDate(){

	$.get("list.php?task=getbusiness",{bid:typeid}, function(jsonmsg){
		
		if (jsonmsg.status==0){
			var nRe=jsonmsg.totalRecords1;
			var dataObj = jsonmsg.data1;
			var nTotal=0;
			$("#business1").empty();
			$("#business1").append("<tr><td colspan='2' align='center'>预约未调度</td></tr>");
			for (var i=0;i<nRe;i++){
				nTotal+=parseInt(dataObj[i].total);
				sResult="<tr style='background-color:#B1C9FF;height:40px;'><th align='center'>"+dataObj[i].shop_name+"</th><td align='center'><a href='../business/searchlist.php?firstop=firstop&search_status=yy&b_id="+typeid+"&search_shop="+dataObj[i].shop_id+"&b_type="+jsonmsg.busi_type+"' target='_blank'>"+dataObj[i].total+"</a></td></tr>";
				$("#business1").append(sResult);
			}
			sResult="<tr style='background-color:#FE6E47;height:40px;'><th align='center'>合计</th><td align='center'><a href='../business/searchlist.php?firstop=firstop&search_status=yy&b_id="+typeid+"&b_type="+jsonmsg.busi_type+"' target='_blank'>"+nTotal+"</a></td></tr>";
			$("#business1").append(sResult);
			if (typeid==2){
				$("#b2").css("display","block");
				nRe=jsonmsg.totalRecords20;
				dataObj = jsonmsg.data20;
				nTotal=0;
				$("#business20").empty();
				$("#business20").append("<tr><td colspan='2' align='center'>车辆进行中</td></tr>");
				for (var i=0;i<nRe;i++){
					nTotal+=parseInt(dataObj[i].total);
					sResult="<tr style='background-color:#B1C9FF;height:40px;'><th align='center'>"+dataObj[i].shop_name+"</th><td align='center'><a href='../business/searchlist.php?firstop=firstop&search_status=zzyxz0&b_id="+typeid+"&search_shop="+dataObj[i].shop_id+"&b_type="+jsonmsg.busi_type+"' target='_blank'>"+dataObj[i].total+"</a></td></tr>";
					$("#business20").append(sResult);
				}
				sResult="<tr style='background-color:#FE6E47;height:40px;'><th align='center'>合计</th><td align='center'><a href='../business/searchlist.php?firstop=firstop&search_status=zzyxz0&b_id="+typeid+"&b_type="+jsonmsg.busi_type+"' target='_blank'>"+nTotal+"</a></td></tr>";
				$("#business20").append(sResult);
			}else{
				$("#b2").css("display","none");
			}
			nRe=jsonmsg.totalRecords2;
			dataObj = jsonmsg.data2;
			nTotal=0;
			$("#business2").empty();
			$("#business2").append("<tr><td colspan='2' align='center'>调度未还车</td></tr>");
			for (var i=0;i<nRe;i++){
				nTotal+=parseInt(dataObj[i].total);
				sResult="<tr style='background-color:#B1C9FF;height:40px;'><th align='center'>"+dataObj[i].shop_name+"</th><td align='center'><a href='../business/searchlist.php?firstop=firstop&search_status=zzyxz1&b_id="+typeid+"&search_shop="+dataObj[i].shop_id+"&b_type="+jsonmsg.busi_type+"' target='_blank'>"+dataObj[i].total+"</a></td></tr>";
				$("#business2").append(sResult);
			}
			sResult="<tr style='background-color:#FE6E47;height:40px;'><th align='center'>合计</th><td align='center'><a href='../business/searchlist.php?firstop=firstop&search_status=zzyxz1&b_id="+typeid+"&b_type="+jsonmsg.busi_type+"' target='_blank'>"+nTotal+"</a></td></tr>";
			$("#business2").append(sResult);
			
			nRe=jsonmsg.totalRecords3;
			dataObj = jsonmsg.data3;
			nTotal=0;
			$("#business3").empty();
			$("#business3").append("<tr><td colspan='2' align='center'>还车未结账</td></tr>");
			for (var i=0;i<nRe;i++){
				nTotal+=parseInt(dataObj[i].total);
				sResult="<tr style='background-color:#B1C9FF;height:40px;'><th align='center'>"+dataObj[i].shop_name+"</th><td align='center'><a href='../business/searchlist.php?firstop=firstop&search_status=hcwfk&b_id="+typeid+"&search_shop="+dataObj[i].shop_id+"&b_type="+jsonmsg.busi_type+"' target='_blank'>"+dataObj[i].total+"</a></td></tr>";
				$("#business3").append(sResult);
			}
			sResult="<tr style='background-color:#FE6E47;height:40px;'><th align='center'>合计</th><td align='center'><a href='../business/searchlist.php?firstop=firstop&search_status=hcwfk&b_id="+typeid+"&b_type="+jsonmsg.busi_type+"' target='_blank'>"+nTotal+"</a></td></tr>";
			$("#business3").append(sResult);
			
			nRe=jsonmsg.totalRecords4;
			dataObj = jsonmsg.data4;
			nTotal=0;
			$("#business4").empty();
			$("#business4").append("<tr><td colspan='2' align='center'>已结账</td></tr>");
			for (var i=0;i<nRe;i++){
				nTotal+=parseInt(dataObj[i].total);
				sResult="<tr style='background-color:#B1C9FF;height:40px;'><th align='center'>"+dataObj[i].shop_name+"</th><td align='center'><a href='../business/searchlist.php?firstop=firstop&search_status=yjz&b_id="+typeid+"&search_shop="+dataObj[i].shop_id+"&b_type="+jsonmsg.busi_type+"' target='_blank'>"+dataObj[i].total+"</a></td></tr>";
				$("#business4").append(sResult);
			}
			sResult="<tr style='background-color:#FE6E47;height:40px;'><th align='center'>合计</th><td align='center'><a href='../business/searchlist.php?firstop=firstop&search_status=yjz&b_id="+typeid+"&b_type="+jsonmsg.busi_type+"' target='_blank'>"+nTotal+"</a></td></tr>";
			$("#business4").append(sResult);
			
			$("#tab_conbox").children().eq(0).hide();
			$("#tab_conbox").children().eq(1).show();
		}
	},"json");
}