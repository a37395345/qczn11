/**
 * 
 */
var nameIsOut=true;//初始化值，便于判断用户是否在DIV以外点击，搜索公司名称时使用
var intervalId=0;
var carid=0;
var idcard=1;//默认本地身份证
document.onmousedown=function(){
	if(nameIsOut==true){
		$('#comul').css('display','none');
	}
}

	$(document).ready(function(){
		$(".subnavi").click(function(){
			var checked = false;
			$(this).parent().parent().find(".subnavi").each(function(){
				if($(this).attr("checked")){
					checked = true;
				}
			});
			var navi = $(this).parent().parent().parent().find(".navi");
			if(checked){
				navi.attr("checked",true);
			}else{
				navi.attr("checked",false);
			}
		});
		$(".navi").click(function(){
			$(this).parent().find(".subnavi").attr("checked",$(this).attr("checked"));
		});
		$("#getlink").click(function(){
			$("#paiche_promier").val($("#paiche_linker").val());
			$("#paiche_promierPhone").val($("#paiche_linkerPhone").val());
			$("#paiche_promierNum").val($("#paiche_linkerNum").val());
			$("#paiche_promierAdd").val($("#paiche_linkerAdd").val());
		});
		$('#paiche_name').bind('input propertychange', function() {
			if ($("#paiche_name").val()!=""){
				$("#paiche_name2").val("");
				$("#paiche_linker").val("");
				$("#paiche_linkerPhone").val("");
				
				$.ajax({
					  type:'POST',
					  url:'checkname.php',
					  data:{"paiche_name":$("#paiche_name").val()},
					  dataType:"json",
					  cache: false,
					  error: function(){
						  $("#comul").html("error！");
						  $("#comul").show();
					  },
					  success:function(jsonmsg){
						  $("#comul").html(jsonmsg.mes);	  
					  }
				});
			}
			
		});
		$('#selPrice').live("click",function(){
			$("#paiche_overKm").val($(this).attr("att"));
		});
		$('#selPrice4').live("click",function(){
			var route=$('input:radio[name=paiche_route]:checked').val();
			if (route=="双"){
				$("#paiche_rent").val($(this).attr("att2"));
			}else{
				$("#paiche_rent").val($(this).attr("att1"));
			}
		});
		$("#selPrice3").live("click",function(){
			if ($("#paiche_linkerNum").val()!=""){//有身份证
				aa=$("#paiche_linkerNum").val();
				if (aa.substring(0,4)=="3204"){
					idcard=1;
				}else{
					idcard=2;
				}
			}
			$("#paiche_rent").val($(this).attr("att"));
			$("#paiche_deposit").val($(this).attr("att"+idcard));
			$("#paiche_deposit_back").val($(this).attr("att"+idcard));
			
		});
		//光宝获取价格
		$('#paiche_requestCar').bind('input propertychange', function() {
		    if ($("#b_id").val()==2 && ($("#paiche_name2").val()==11 || $("#paiche_name2").val()==12)){
			var car=$(this).val();
			var route=$('input:radio[name=paiche_route]:checked').val();
			var scope=$('input:radio[name=paiche_scope]:checked').val();
			if ($(this).val() !="" && typeof(route)!="undefined" && typeof(route)!="scope"){
			    getClientPrice_2();
			}
		    }
		});
		$("input[name='paiche_route'],input[name='paiche_scope'],").bind("click",function(){
		    if ($("#b_id").val()==2 && ($("#paiche_name2").children('option:selected').val()==11 || $("#paiche_name2").children('option:selected').val()==12)){
			var car=$('#paiche_requestCar').val();
			var route=$('input:radio[name=paiche_route]:checked').val();
			var scope=$('input:radio[name=paiche_scope]:checked').val();
			if ($(this).val() !="" && typeof(route)!="undefined" && typeof(scope)!="undefined"){
			    getClientPrice_2();
			}
		    }
		});
		//
		$("#search_key").bind('input propertychange',function(){
		    var aa=$("#search_key").val();
		    if (aa!=""){
				$("#paiche_name2 option").each(function (){  
			        var txt = $(this).text();  
			        if(txt.toLowerCase().indexOf(aa) >-1){  
			            $(this).attr("selected",true);
			            $("#paiche_name2").change();
			            return false;
			        }
			     });
		    }
		});
		$('#paiche_brother').change(function(){
		    var p1=$(this).children('option:selected').val();
		    if (p1==0){
			$('#showpaiche_shunt').css('display','none');
		    }else{
			$('#showpaiche_shunt').css('display','inline');
			p2=$(this).children('option:selected').attr("at");
			$("#paiche_linker").val(p2.substring(0,p2.indexOf("#")));
			$("#paiche_linkerPhone").val(p2.substring(p2.indexOf("#")+1));
		    }
		});
		$('#paiche_name2').change(function(){
		    var p1=$(this).children('option:selected').val();
		    if (p1==0){
			
		    }else{
				p2=$(this).children('option:selected').attr("at");
				var arrLink = p2.split('#');
				$("#paiche_linker").val(arrLink[0]);
				$("#paiche_linkerPhone").val(arrLink[1]);
				$("#paicheCounterShop").val(arrLink[2]);
				$("#paicheCounterMan").val(arrLink[3]);
				$("#paicheCounterMan2").val(arrLink[4]);
				$("#shop_id").val(arrLink[5]);
				if ($("#b_id").val()==2){
					if (p1==11 || p1==12){
						getClientPrice(p1);
					}else{
						getClientPrice_4(p1);
					}
				}
		    }
		});
		
		$('#shop_id').change(function(){
			p2=$(this).children('option:selected').attr("at");
			$(".pc_inner").html(p2);
		});
		$("#paiche_deposit").bind('input propertychange',function(){
		    var aa=$(this).val();
		    $("#paiche_deposit_back").val(aa);
		});
		$("input[name='paiche_busitype']").bind("click",function(){
		    showbusitype();
		});
		$("#paiche_line").focus(function(){
			getPricePlan();
		});
		
		
		//初始化
		showbusitype();
		init();
		
	});
	function init(){
	    var p1=$('#paiche_name2').children('option:selected').val();
	    if (p1==0){
		
	    }else{
			p2=$('#paiche_name2').children('option:selected').attr("at");
			var arrLink = p2.split('#');
			$("#paiche_linker").val(arrLink[0]);
			$("#paiche_linkerPhone").val(arrLink[1]);
			$("#paicheCounterShop").val(arrLink[2]);
			$("#paicheCounterMan").val(arrLink[3]);
			$("#paicheCounterMan2").val(arrLink[4]);
			if ($("#b_id").val()==3 || $("#b_id").val()==4 || $("#b_id").val()==5){
				$("#shop_id").val(arrLink[2]);
				$("#paicheServerMan").val(arrLink[3]);
				$("#paicheServerMan2").val(arrLink[4]);
			}else{
				$("#shop_id").val(arrLink[5]);
			}
			
			if ($("#b_id").val()==2){
				if (p1==11 || p1==12){
					getClientPrice(p1);
				}else{
					getClientPrice_4(p1);
				}
			}
	    }
	    if ($("#b_id").val()==1){
	    	getPricePlan();
	    }
	}
	function showbusitype(){
	    var paiche_busitype=$('input:radio[name=paiche_busitype]:checked').val();
	    if (paiche_busitype==2){//客户
		$('#busishow_2').css('display','block');
		$('#busishow_3').css('display','none');
		$('#showrent').html('<span class="redstar">*</span>租金：');
		$('#showpaiche_shunt').css('display','none');
		$("#paicheCounterShop").attr("disabled","disabled");
		$('#selywy').css('display','none');
		if ($("#b_id").val()==3 || $("#b_id").val()==4 || $("#b_id").val()==5){
			$("#shop_id").attr("disabled","disabled");
			$('#seljdy').css('display','none');
		}
	    }else if (paiche_busitype==3){
		$('#busishow_2').css('display','none');
		$('#busishow_3').css('display','block');
		$('#showrent').html('<span class="redstar">*</span>本公司报价：');
		$('#showpaiche_shunt').css('display','inline');
		$("#paicheCounterShop").removeAttr("disabled");
		$('#selywy').css('display','inline');
	    }else{//散客
		$('#busishow_2').css('display','none');
		$('#busishow_3').css('display','none');
		$('#showrent').html('<span class="redstar">*</span>租金：');
		$('#showpaiche_shunt').css('display','none');
		$("#paicheCounterShop").removeAttr("disabled");
		$('#selywy').css('display','inline');
	    }
	}

	function changeNameId(name,id,linker,phone,money){
		$("#paiche_name").val(name);
		$("#paiche_name2").val(id);
		$("#person").attr("checked",false);
		$("#paiche_linker").val(linker);
		$("#paiche_linkerPhone").val(phone);
		$('#comul').css('display','none');
		if ($("#b_id").val()==2){
			if (v==11 || id==12){
				getClientPrice(id);
			}else{
				getClientPrice_4(id);
			}
		}
	}
	
	function getClientPrice(id){
		$.ajax({
			  type:'POST',
			  url:'getclientprice.php',
			  data:{"client_id":id},
			  dataType:"json",
			  cache: false,
			  error: function(){
				  //$("#comul").html("error！");
				  //$("#comul").show();
			  },
			  success:function(jsonmsg){
				  if (jsonmsg.status==0){
						var nRe=jsonmsg.totalRecords;
						if (nRe>0){
							var dataObj = jsonmsg.data;
							var sResult3='<table width="100%" border="0" cellspacing="0" cellpadding="0" align="left">';
							sResult3+='<tr><th width="30">选择</th><th width="30">No.</th><th>地点</th><th>车型</th><th>行程</th><th>价格</th><th>等车费</th><th>过凌晨等车费</th></tr>';
							for (var i=0;i<nRe;i++){
								sResult3+="<tr><td><a href='javascript:void(0);' id='selPrice' att='"+dataObj[i].price+"'>选择</a></td><td>"+ (i+1)+"</td><td>"+dataObj[i].price_area+"</td><td>"+ dataObj[i].price_carmodel+"</td><td>"+ dataObj[i].price_line+"</td><td>"+dataObj[i].price+"</td><td>"+dataObj[i].price_wait1+"</td><td>"+dataObj[i].price_wait2+"</td></tr>";
							}
							sResult3+='</table>';
							$("#price").html(sResult3);
							$("#price").show();
						}else{
							$("#price").hide();
						}
					}else{
						$("#price").hide();
					}
			  }
		});
	}
	function getClientPrice_2(){
	    	var client_id=$("#paiche_name2").val();
	    	var car=$('#paiche_requestCar').val();
		var route=$('input:radio[name=paiche_route]:checked').val();
		var scope=$('input:radio[name=paiche_scope]:checked').val();
		$.ajax({
			  type:'POST',
			  url:'getclientprice2.php',
			  data:{"client_id":client_id,"car":car,"route":route,"scope":scope},
			  dataType:"json",
			  cache: false,
			  error: function(){
				  //$("#comul").html("error！");
				  //$("#comul").show();
			  },
			  success:function(jsonmsg){
			      $("#paiche_overKm").val(jsonmsg.price);
			  }
		});
	}
	function getPricePlan()
	{
		carid=$("#paicheCar2").val();
		if (carid!=0 && $("#b_id").val()==1){
			window.clearInterval(intervalId);
			//$("#paiche_requestCar").val($("#paicheCar").val());

			$.ajax({
				  type:'POST',
				  url:'getclientprice3.php',
				  data:{"carid":carid,"p_startDate":$('#paiche_startDate').val(),"p_endDate":$('#paiche_endDate').val()},
				  dataType:"json",
				  cache: false,
				  error: function(){
					  //$("#comul").html("error！");
					  //$("#comul").show();
				  },
				  success:function(jsonmsg){
					  if (jsonmsg.status==0){
							var nRe=jsonmsg.totalRecords;
							if (nRe>0){
								//$("#paiche_rent").val(jsonmsg.planAmount);
								var dataObj = jsonmsg.data;
								var sResult3="<ul><li style='width:35px;'>选择</li><li style='width:25px;'>No.</li><li style='width:143px;'>套餐名称</li><li style='width:35px;'>天数</li><li style='width:45px;'>租金</li><li style='width:45px;'>套餐价</li><li style='width:70px;'>本地人押金</li><li style='width:70px;'>外地人押金</li></ul>";
								for (var i=0;i<nRe;i++){
									sResult3+="<ul><li style='width:35px;'><a href='javascript:void(0);' id='selPrice3' att='"+dataObj[i].plan_rentamount+"' att1='"+dataObj[i].plan_deposit1+"' att2='"+dataObj[i].plan_deposit2+"'>选择</a></li><li style='width:25px;'>"+ (i+1)+"</li><li style='width:143px;'>"+dataObj[i].plan_name+"</li><li style='width:35px;'>"+ dataObj[i].plan_day+"</li><li style='width:45px;'>"+ dataObj[i].plan_rent+"</li><li style='width:45px;'>"+dataObj[i].plan_rentamount+"</li><li style='width:70px;'>"+dataObj[i].plan_deposit1+"</li><li style='width:70px;'>"+dataObj[i].plan_deposit2+"</li></ul>";
								}
								$("#price").html(sResult3);
								$("#price").show();
							}else{
								$("#price").hide();
							}
						}else{
							$("#price").hide();
						}
				  }
			});
			
		}
	}
	function getClientPrice_4(id){
		$.get("list.php?task=getclientprice4&clientid="+id,{}, function(jsonmsg){
			if (jsonmsg.status==0){
				var nRe=jsonmsg.totalRecords;
				if (nRe>0){
					var dataObj = jsonmsg.data;
					var sResult2='<table width="100%" border="0" cellspacing="0" cellpadding="0" align="left">';
					sResult2+='<tr><th width="30">选择</th><th width="90">目的地</th><th width="90">车型</th><th width="90">单程价格(元/趟)</th><th width="90">双程价格(元/趟)</th><th>备注</th></tr>';
					for (var i=0;i<nRe;i++){
					    sResult2+="<tr><td><a href='javascript:void(0);' id='selPrice4' att1='"+dataObj[i].scheme_price1+"' att2='"+dataObj[i].scheme_price2+"'>选择</a><td>"+dataObj[i].destination+"</td><td>"+dataObj[i].carmodel+"</td>";
					    sResult2+="<td>"+dataObj[i].scheme_price1+"</td><td>"+dataObj[i].scheme_price2+"</td><td>"+dataObj[i].remarks+"</td></tr>";
					}
					sResult2+='</table>';
					$("#price").html(sResult2);
					$("#price").show();
				}else{
					$("#price").hide();
				}
			}else{
				$("#price").hide();
			}
		},"json");
	}
	function select_ywy(){
		var key=$("#paicheCounterShop option:selected").val();
		demo_iframe('selectemp.php?sel_type=e&key='+key,'选择业务员',650,380,'login_js');
	}
	function select_emp(){
		var key=$("#shop_id option:selected").val();
		demo_iframe('selectemp.php?sel_type=ee&key='+key,'选择接待员',650,380,'login_js');
	}
	function select_car(){
		window.clearInterval(intervalId);
		$("#paicheCar2").val("");
		var key=$("#paicheCarKey").val();
		demo_iframe('selectemp.php?sel_type=c&key='+key,'选择车辆',650,380,'login_js');
		intervalId =window.setInterval("getPricePlan()",1000);
	}
	function clearValue(dom1,dom2){
		$("#"+dom1).val("");
		$("#"+dom2).val("");
	}
	function select_charges(){
		demo_iframe('selectcharge.php?busi_type='+$("#b_id").val(),'选择收费项目',750,460,'login_js');
	}
	function select_items(){
		demo_iframe('selectitem.php?busi_type='+$("#b_id").val(),'选择合同约定条款',650,500,'login_js');
	}
	function unlimited(dom1,dom2,dom3)
	{
		if(dom1.checked==true){
			$("#"+dom2).val("");
			$("#"+dom2).attr("readonly",true);
			if(dom3!=null){
				$("#"+dom3).val("");
				$("#"+dom3).attr("readonly",true);
			}
		}else{
			$("#"+dom2).removeAttr("readonly"); 
			if(dom3!=null){
				$("#"+dom3).removeAttr("readonly"); 
			}
		}
	}
	
	function showCom(){
		//if ($("#paiche_name").val()!=""){
		if($('#comul').css("display")=="none"){
			$('#comul').css('display','block');
		}else{
			$('#comul').css('display','none');
		}
		//}
	}
	function personal(){
		if($('#person').attr("checked")==true){
			$("#paiche_name").val("");
			$("#paiche_name2").val("");
			$("#paiche_name").attr("readonly",true);
		}else{
			$("#paiche_name").removeAttr("readonly"); 
		}
	}
	function del(id){
		if ($("#D"+id).val()==0){//删除
			$("#U"+id).find("li").css("text-decoration","line-through");
			$("#D"+id).val(1);
		}else{//恢复
			$("#U"+id).find("li").css("text-decoration","none");
			$("#D"+id).val(0);
		}
	}
	function delV(id){
		if ($("#DV"+id).val()==0){//删除
			$("#V"+id).find("li").css("text-decoration","line-through");
			$("#DV"+id).val(1);
		}else{//恢复
			$("#V"+id).find("li").css("text-decoration","none");
			$("#DV"+id).val(0);
		}
	}
	  