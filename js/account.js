/**
 * 
 */
 
var isshow=0;


	//鼠标移动表格效果
	$(document).ready(function(){
		$("tr[overstyle='on']").hover(
		  function () {
		    $(this).addClass("bg_hover");
		  },
		  function () {
		    $(this).removeClass("bg_hover");
		  }
		);
		$("#btnPrice").live('click',function(){
			if (isshow==0){
				$("#price").show();
				isshow=1;
			}else{
				$("#price").hide();
				isshow=0;
			}
			
		});
		$('#backreason2').change(function(){
		    var p1=$(this).children('option:selected').val();
		    var oldp1=$("#backreason").val();
		    if (oldp1==""){
			$("#backreason").val(p1);
		    }else{
			$("#backreason").val(oldp1+","+p1);
		    }
		    if (p1=="违章"){
		    	$("#showillegal").css("display","inline-table");
		    }else{
		    	$("#showillegal").css("display","none");
		    }
		});
		$('#breaklist').change(function(){
		    var p1=$(this).children('option:selected').val();
		    
		    if (p1!=""){
		    	$.get("../machine/breaklist.php?task=getbreakinfo",{bid:p1}, function(jsonmsg){
					if (jsonmsg.status==0){
						$("#breakrules_id").val(p1);
						$("#backmoney_1").val(jsonmsg.data.breakrules_money1);
						$("#backmoney_2").val(jsonmsg.data.breakrules_money2);
						$("#backmoney_3").val(jsonmsg.data.breakrules_money3);
						$("#backmoney_4").val(jsonmsg.data.breakrules_money4);
						$("#total,#infact").val(parseInt(jsonmsg.data.breakrules_money1)+parseInt(jsonmsg.data.breakrules_money2)+parseInt(jsonmsg.data.breakrules_money4));
						$("input[name=freeze_money[]]").val(parseInt(jsonmsg.data.breakrules_money1)+parseInt(jsonmsg.data.breakrules_money2)+parseInt(jsonmsg.data.breakrules_money4));
						$("#showillegal").css("display","inline-table");
					}
				},"json");
		    	
		    }else{
		    	$("#showillegal").css("display","none");
		    }
		});
		$("input[name=money[]]").live('input propertychange',function(){
			calTotal();
		});
		$("input[name=back_money[]]").live('input propertychange',function(){
			calTotal();
		});
		$("#settle_vio").live('input propertychange',function(){
			calTotal();
		});
		$("#payments").live('change',function(){
			calTotal();
			/*
			if ($('#payments option:selected').val()){
				var st=$('#payments option:selected').text();
				if (st.indexOf("现金") >= 0){
					$("#bank").css("display","none");
				}else{
					$("#bank").removeAttr("style");
				}
			}else{
				$("#bank").css("display","none");
			}
			*/
		});
		

		$("#settle_startKm,#settle_endKm,#paiche_overKm,#paiche_overTime").live('input propertychange',function(){
		    var settle_startKm=0;//开始公里数
			var settle_endKm=0;//结束公里数
			if ($("#settle_startKm").val()!=""){
			    settle_startKm=parseFloat(textTrim($("#settle_startKm").val()),10);//开始公里数
			}
			if ($("#settle_endKm").val()!=""){
			    settle_endKm=parseFloat(textTrim($("#settle_endKm").val()),10);//结束公里数
			}
			var totalChangeCarKilo=parseFloat(textTrim($("#totalChangeCarKilo").val()),10);//换车累计公里
		    $("#settle_totalcalKm").val(settle_endKm-settle_startKm+totalChangeCarKilo);//总计公里数
		    compute();
		});
		$("#settle_totalcalKm").live('input propertychange',function(){
			compute();
		});
		$("#settle_favor").live('input propertychange',function(){
		    if ($("#op").val()=="batchaccount" || $("#op").val()=="shuntaccount"){
			if($(this).length>0){
			    $("#infact").val(parseFloat($("#total").val())-parseFloat($(this).val()));
			}
		    }else{
			compute();
		    }
		});
		$("#overKmMoney,#overTimeMoney").live('input propertychange',function(){
			calTotal();
		});
		$("#settle_overTime,#settle_waitTime,#paiche_waitTime").live('input propertychange',function(){
			calTotal();
			compute();
		});
		$("input[name=item_money[]]").live('input propertychange',function(){
			calTotal();
			compute();
		});
		$("input[name=charge_money[]]").live('input propertychange',function(){
			calTotal();
			compute();
		});
		$("input[name=youhui_omone[]]").live('input propertychange',function(){
			calTotal();
			compute();
		});
		//退押金判断
		$("input[name=back_money[]]").live('input propertychange',function(){
		    var aa=$(this).val();
		    if (aa!=''){
			var bb=$("input[name=left_money[]]").val();
			if (parseFloat(aa)>parseFloat(bb)){
			    alert("本次退押金金额不能大于剩余可退金额！");
			    $(this).focus();
			}
		    }
		});
		
		$("#money1").live('input propertychange',function(){
			$("#money2").val($("#infact").val()-$("#money1").val());
		});
		$("#money2").live('input propertychange',function(){
			$("#money1").val($("#infact").val()-$("#money2").val());
		});
		var op=$("#op").val();
		if (op=="account" || op=="batchaccount" || op=="shuntaccount" || op=="vio"){
			if ($("#account_flag").val()!="freezedeposit"){
			calTotal();
			}
			//if($("#money1").length>0){
			//	$("#money1").val($("#infact").val());
			//}
		}
		$('#selPrice').live("click",function(){
			$("#paiche_overKm").val($(this).attr("att"));
			compute();
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
		    if ($("#b_id").val()==2 && ($("#paiche_name2").val()==11 || $("#paiche_name2").val()==12)){
			var car=$('#paiche_requestCar').val();
			var route=$('input:radio[name=paiche_route]:checked').val();
			var scope=$('input:radio[name=paiche_scope]:checked').val();
			if ($(this).val() !="" && typeof(route)!="undefined" && typeof(scope)!="undefined"){
			    getClientPrice_2();
			}
		    }
		});
		$("#chkOther").live("click",function(){
		    if ($(this).is(':checked')){
			$('#shunt_other').val($('#total').val());
			$('#total').val(0);
		    }else{
			$('#shunt_other').val(0);
			calTotal();
		    }
		});
		//计算续租到期日期
		$('#addday').bind('input propertychange', function() {
			$("#end_Date").val(DateAdd($("#paiche_endDate").val(),$(this).val()));
		});
		//初始化
		var op=$("#op").val();
		if (op=="returncar" || op=="givecar"){
		    compute();
		}
	});
	function calTotal(){
		var op=$("#op").val();
		var nTotal=0;
		var fee=0;
		var nTotal_back=0;
		var nTotal_favor=0;
		var nFront=0;
		

		$.each($('input[name=charge_id[]]'), function(i, n){
			if ($(n).val()>0){
				nid=$(n).val();
				if($('#charge_money_'+nid).length>0){
					nTotal+= $('#charge_money_'+nid).val()=="" ? 0 : parseFloat($('#charge_money_'+nid).val());
				}
				if($('#back_money_'+nid).length>0){
					nTotal_back-= $('#back_money_'+nid).val()=="" ? 0 : parseFloat($('#back_money_'+nid).val());
				}
			}
		});
		//优惠
		$.each($('input[name=youhui_id[]]'), function(i, n){

			if ($(n).val()>0){
				
				nid=$(n).val();
				nTotal-= $('#youhui_omone_'+nid).val()=="" ? 0 : parseFloat($('#youhui_omone_'+nid).val());
				
			}
		});
		
		$.each($('input[name=back_id[]]'), function(i, n){
			if ($(n).val()>0){
				nid=$(n).val();
				nTotal-= $('#back_money_'+nid).val()=="" ? 0 : parseFloat($('#back_money_'+nid).val());
			}
		});

		$.each($('input[name=item_id[]]'), function(i, n){
			if ($(n).val()>0){
				nid=$(n).val();
				if($('#item_money_'+nid).length>0){
					nTotal+= $('#item_money_'+nid).val()=="" ? 0 : parseFloat($('#item_money_'+nid).val());
				}
				if($('#back_money_'+nid).length>0){
					nTotal_back-= $('#back_money_'+nid).val()=="" ? 0 : parseFloat($('#back_money_'+nid).val());
				}
			}
		});
		if($("#overKmMoney").length>0){
			nTotal+=parseFloat($("#overKmMoney").val());
		}
		if($("#overTimeMoney").length>0){
			nTotal+=parseFloat($("#overTimeMoney").val());
		}
		if($("#waitTimeMoney").length>0){
			nTotal+=parseFloat($("#waitTimeMoney").val());
		}
		
		if($("#settle_favor").length>0){
			nTotal_favor=parseFloat($("#settle_favor").val());
			nTotal-=parseFloat($("#settle_favor").val());
		}
		
		if($("#settle_vio").length>0){
			nTotal+=parseFloat($("#settle_vio").val());
		}
		if($("#paiche_front").length>0){
			if (op=="front"){
				nTotal+=parseFloat($("#paiche_front").val());
			}else{
				nTotal-=parseFloat($("#paiche_fronted").val());
			}
			
		}
		if ($("#shunt_rent").length>0 ){
		    if ($("#paiche_brother").val()>0){//调车公司用我们的车
			//nTotal +=parseFloat($("#shunt_rent").val())- parseFloat($("#shunt_rented").val());
		    }
		    if ($("#paiche_shunt").val()==1){//我们用调车公司的车
			//nTotal -=parseFloat($("#shunt_rented").val());//去除调车公司收现
		    }
		}
		$.each($('input[name=overKmMoney[]]'), function(i, n){
			nTotal+= $(n).val()=="" ? 0 : parseFloat($(n).val());
		});
		$.each($('input[name=overTimeMoney[]]'), function(i, n){
			nTotal+= $(n).val()=="" ? 0 : parseFloat($(n).val());
		});
		$.each($('input[name=waitTimeMoney[]]'), function(i, n){
			nTotal+= $(n).val()=="" ? 0 : parseFloat($(n).val());
		});
		$.each($('input[name=shuntMoney[]]'), function(i, n){
			nTotal+= $(n).val()=="" ? 0 : parseFloat($(n).val());
		});
		$.each($('input[name=favor[]]'), function(i, n){
			nTotal+= $(n).val()=="" ? 0 : parseFloat($(n).val());
		});
		
		if (op=="shuntaccount"){
			$("#total").val(xround(nTotal+nTotal_back+nTotal_favor,2));
		}else{
			$("#total").val(xround(nTotal+nTotal_back,2));
		}
		
		//if ($('#payments option:selected').val()){
		//	fee=$('#payments option:selected').attr("rel");
		//}
		//if($("#fee").length>0){
		//$("#fee").val(nTotal*fee);
		//}


		$("#infact").val(nTotal+nTotal_back);
		
	}
	function compute(){//还车计算结果
		var nTotal_ar=0;
		if ($("#paiche_shunt").val()==0){
			var paiche_unlimitKm=$("#paiche_unlimitKm").val();//是否限制公里数
			var settle_startKm=0;//开始公里数
			var settle_endKm=0;//结束公里数
			if ($("#settle_startKm").val()!=""){
			    settle_startKm=parseFloat(textTrim($("#settle_startKm").val()),10);//开始公里数
			}
			if ($("#settle_endKm").val()!=""){
			    settle_endKm=parseFloat(textTrim($("#settle_endKm").val()),10);//结束公里数
			}
			var totalChangeCarKilo=parseFloat(textTrim($("#totalChangeCarKilo").val()),10);//换车累计公里
			$("#settle_totalKm").val(settle_endKm-settle_startKm+totalChangeCarKilo);//总计公里数
			    

			if (settle_endKm-settle_startKm+totalChangeCarKilo<0 || settle_endKm-settle_startKm+totalChangeCarKilo>15000){
			    $("#showerr").css("display","inline-table");
			}else{
			    $("#showerr").css("display","none");
			}
			if (paiche_unlimitKm!="Y"){
				var limitKm=parseFloat(textTrim($("#paiche_limitKm").val()),10); //限制公里数
				var overKmPrice=parseFloat(textTrim($("#paiche_overKm").val()),10);//超公里每公里金额
				var totalcalKm= parseFloat($("#settle_totalcalKm").val());
				
				overKm=totalcalKm-limitKm;//+totalChangeCarKilo
				if (overKm<0) overKm=0;
				$("#overKm").val(overKm);//超公里数
				$("#overKmMoney").val(xround(overKm*overKmPrice,2));//超公里费用
				nTotal_ar+=xround(overKm*overKmPrice,2);
			}
			var paiche_unlimitTime=$("#paiche_unlimitTime").val();//是否限时
			if (paiche_unlimitTime!="Y"){
				if ($("#settle_overTime").val()=="") $("#settle_overTime").val(0);
				var paiche_overTime=parseFloat(textTrim($("#paiche_overTime").val()),10);//超时每小时费用
				var settle_overTime=parseFloat(textTrim($("#settle_overTime").val()),10);//超时
				$("#overTimeMoney").val(xround(settle_overTime*paiche_overTime,2));//超时费用
				nTotal_ar+=xround(settle_overTime*paiche_overTime,2);
			}
			if($("#settle_waitTime").length>0 || $("#paiche_waitTime").length>0){
				if ($("#settle_waitTime").val()=="") $("#settle_waitTime").val(0);
				if ($("#paiche_waitTime").val()=="") $("#paiche_waitTime").val(0);
				var paiche_waitTime=parseFloat(textTrim($("#paiche_waitTime").val()),10);//待时每小时费用
				var settle_waitTime=parseFloat(textTrim($("#settle_waitTime").val()),10);//待时
				$("#waitTimeMoney").val(xround(settle_waitTime*paiche_waitTime,2));//待时费用
				nTotal_ar+=xround(settle_waitTime*paiche_waitTime,2);
				
			}
			if ($("#paiche_brother").val()>0){//调车公司用我们的车
			    nTotal_ar +=parseFloat($("#shunt_rent").val())- parseFloat($("#shunt_rented").val());
			}
			
		}else{
		    nTotal_ar -=parseFloat($("#shunt_rented").val());//去除调车公司收现
		}
		
		//if ($("#settle_favor").val()=="") $("#settle_favor").val(0);
		if ($("#settle_favor").val()!=""){
		    aa=parseFloat(textTrim($("#settle_favor").val()),10);
		    bb=xround(nTotal_ar-aa,2);
		    nTotal_ar = bb;
		}
		
		if($("#paiche_fronted").length>0){
			nTotal_ar-=parseFloat($("#paiche_fronted").val());
		}
		
		var nTotal_item=0;
		$.each($('input[name=item_id[]]'), function(i, n){
			if ($(n).val()>0){
				nid=$(n).val();
				nTotal_item+= $('#item_money_'+nid).val()=="" ? 0 : parseFloat($('#item_money_'+nid).val());
			}
		});
		
		var nTotal_charge=0;
		$.each($('input[name=charge_id[]]'), function(i, n){
			if ($(n).val()>0){
				nid=$(n).val();
				nTotal_charge+= $('#charge_money_'+nid).val()=="" ? 0 : parseFloat($('#charge_money_'+nid).val());
			}
		});
		var nTotal_newcharge=0;
		$.each($('input[name=Cid[]]'), function(i, n){
			if ($(n).val()>0){
				nid=$(n).val();
				if ($('#D'+nid).val()==0){//未删除
					nTotal_newcharge+= $('#money_'+nid).val()=="" ? 0 : parseFloat($('#money_'+nid).val());
				}				
			}
		});
		
		nTotal_ar+=nTotal_item+nTotal_charge+nTotal_newcharge;
		
		$("#debt").val(nTotal_ar);
		
	}
	function checkon(o){
		if( o.checked == true ){
			$(o).parents('tr').addClass('bg_on') ;
		}else{
			$(o).parents('tr').removeClass('bg_on') ;
		}
	}
	
	function checkAll(o){
		if( o.checked == true ){
			$('input[name="checkbox"]').attr('checked','true');
			$('tr[overstyle="on"]').addClass("bg_on");
		}else{
			$('input[name="checkbox"]').removeAttr('checked');
			$('tr[overstyle="on"]').removeClass("bg_on");
		}
	}
	
	function clearValue(dom1,dom2){
		$("#"+dom1).val("");
		$("#"+dom2).val("");
	}
	
	function select_car(){
		var key=$("#paicheCarKey").val();
		demo_iframe('selectemp.php?sel_type=c&key='+key,'选择车辆',650,380,'login_js');
	}
	
	function select_driver(){
		var key=$("#paicheDriverKey").val();
		demo_iframe('selectemp.php?sel_type=d&key='+key,'选择驾驶员',650,380,'login_js');
	}
	function select_charges(strsource){
		demo_iframe('selectcharge.php?busi_type='+$("#b_id").val()+'&s='+strsource,'选择收费项目',700,400,'login_js');
	}
	function select_brother(){
		$("#shuntCon1,#shuntCon2,#shuntCon3,#shuntCon4,#shuntCon5,#shuntCon6").css("display","block");
		$("#showCar,#showDrive").css("display","none");
		var key=$("#paicheCarKey").val();
		demo_iframe('selectemp.php?sel_type=b&key='+key,'选择调车企业',650,380,'login_js');
	}

	function ok(){
	    $("#btn_save").attr("disabled", true);
		var op=$("#op").val();
		if (op=="front"){//收款
			if ($("#infact").val()==""){
				alert("实际收款金额为空，无法提交！");
				$("#btn_save").removeAttr("disabled");
				return false;
			}
			if(!confirm('请仔细核对各个款项，一旦提交就无法修改了，确定提交吗？')){
			    $("#btn_save").removeAttr("disabled");
			    return false;
			}
		}
		if (op=="account" || op=="accvio"){//结账or收款 or 违约结算
			if ( $("#account_flag").val()!="freezedeposit"){
			calTotal();
			}
			if ($("#infact").val()=="" || $("#infact").val()==0){
			    if (!$('#payments option:selected').val()){
				alert("请选择收款方式！");
				$('#payments').focus();
				$("#btn_save").removeAttr("disabled");
				return false;
			    }
			    if (!$('#bank option:selected').val()){
				alert("请选择收款账户！");
				$('#bank').focus();
				$("#btn_save").removeAttr("disabled");
				return false;
			    }
			    if(!confirm('实际金额为0，依然要提交吗？')){
				$("#btn_save").removeAttr("disabled");
				return false;
			    }
			}else{
				if ($("#infact").val()==""){
					alert("实际收款金额为空，无法提交！");
					$("#btn_save").removeAttr("disabled");
					return false;
				}
				if ($("#infact").val()==0){
					alert("实际收款金额为零，无法提交！");
					$("#btn_save").removeAttr("disabled");
					return false;
				}
				/*
				if ( $("#account_flag").val()=="account1" && $("#infact").val()<0){
					alert("实际收款金额不能小于零，无法提交！");
					$("#btn_save").removeAttr("disabled");
					return false;
				}*/
				
				if ($("#chkOther").is(':checked')){
					$('#shunt_other').val($('#total').val());
					$('#total').val(0);
				}else{
					$('#shunt_other').val(0);
				}
				if ( $("#account_flag").val()=="backdeposit"){
					if (-1*$("#infact").val()>$("#leftmoney").val()){
						alert("本次退押金金额不能大于剩余可退金额，无法提交！");
						$("#btn_save").removeAttr("disabled");
						return false;
					}
				}
				if ( $("#account_flag").val()=="freezedeposit"){
					if (parseInt($("#infact").val())>parseInt($("#leftmoney").val())){
						alert("本次冻结押金金额不能大于剩余金额，无法提交！");
						$("#btn_save").removeAttr("disabled");
						return false;
					}
				}
				if ( $("#account_flag").val()=="freezedeposit"){
					if (parseInt($("#infact").val())>parseInt($("#leftmoney").val())){
						alert("本次冻结金额不能大于剩余金额，无法提交！");
						$("#btn_save").removeAttr("disabled");
						return false;
					}
				}
				if(!confirm('请仔细核对各个款项，一旦提交就无法修改了，确定提交吗？')){
				    $("#btn_save").removeAttr("disabled");
				    return false;
				}
			}
				
		}
		if (op=="shuntaccount"){
			calTotal();
			/*
			if ($("#infact").val()==""){
				alert("实际收款金额为空，无法提交！");
				$("#btn_save").removeAttr("disabled");
				return false;
			}
			if ($("#infact").val()==0){
				alert("实际收款金额为空，无法提交！");
				$("#btn_save").removeAttr("disabled");
				return false;
			}
			*/
			if ($("#settle_favor").val()!="" && parseFloat($("#settle_favor").val())>0 && $("#settle_favorreason").val()==""){
				alert("请输入优惠原因！");
				$('#settle_favorreason').focus();
				$("#btn_save").removeAttr("disabled");
				return false;
			}
			if ($("#ywy option:selected").val()==""){
				alert("请选择业务员！");
				$('#ywy').focus();
				$("#btn_save").removeAttr("disabled");
				return false;
			}
			if(!confirm('请仔细核对各个款项，一旦提交就无法修改了，确定提交吗？')){
			    $("#btn_save").removeAttr("disabled");
			    return false;
			}
		}
		if (op=="batchaccount"){
			calTotal();
			/*
			if ($("#infact").val()==""){
				alert("实际收款金额为空，无法提交！");
				$("#btn_save").removeAttr("disabled");
				return false;
			}
			if ($("#infact").val()==0){
				alert("实际收款金额为空，无法提交！");
				$("#btn_save").removeAttr("disabled");
				return false;
			}
			*/
			if ($("#settle_favor").val()!="" && parseFloat($("#settle_favor").val())>0 && $("#settle_favorreason").val()==""){
				alert("请输入优惠原因！");
				$('#settle_favorreason').focus();
				$("#btn_save").removeAttr("disabled");
				return false;
			}
			if ($("#ywy option:selected").val()==""){
				alert("请选择业务员！");
				$('#ywy').focus();
				$("#btn_save").removeAttr("disabled");
				return false;
			}
			
			if(!confirm('请仔细核对各个款项，一旦提交就无法修改了，确定提交吗？')){
			    $("#btn_save").removeAttr("disabled");
			    return false;
			}
		}
		if (op=="diaodu"){
			if ($("#shunt").val()==0){//自己车辆
				if ($("#paicheCar2").val()==""){
					alert("请选择调度车辆！");
					$("#btn_save").removeAttr("disabled");
					return false;
				}
				var busitype=$("#b_id").val();
				if (busitype==2 || busitype==4 || busitype==5){
					if ($("#paicheDriver2").val()==""){
						alert("请选择驾驶员！");
						$("#btn_save").removeAttr("disabled");
						return false;
					}
				}
			}else{//调车
				if ($("#shuntCom2").val()==""){
					alert("请选择调车企业！");
					$("#btn_save").removeAttr("disabled");
					return false;
				}
				if ($("#shunt_driver").val()==""){
					alert("请填写驾驶员！");
					$("#shunt_driver").focus();
					$("#btn_save").removeAttr("disabled");
					return false;
				}
				if ($("#shunt_rent").val()==""){
					alert("请填写调车公司报价！");
					$("#shunt_rent").focus();
					$("#btn_save").removeAttr("disabled");
					return false;
				}
				if ($("#shunt_rented").val()==""){
					alert("请填写调车公司收现！");
					$("#shunt_rented").focus();
					$("#btn_save").removeAttr("disabled");
					return false;
				}
			}
		}
		if (op=="changedriver"){
		    if ($("#paicheDriver2").val()==""){
			alert("请选择新驾驶员！");
			$("#btn_save").removeAttr("disabled");
			return false;
		    }
		}
		if (op=="changecar"){
			if ($("#paicheCar2").val()==""){
				alert("请选择调度车辆！");
				$("#btn_save").removeAttr("disabled");
				return false;
			}
			if ($("#changecar_carAStartKilo").val()==""){
				alert("请输入被换车辆起始公里数！");
				$('#changecar_carAStartKilo').focus();
				$("#btn_save").removeAttr("disabled");
				return false;
			}
			if ($("#changecar_carAEndKilo").val()==""){
				alert("请输入被换车辆结束公里数！");
				$('#changecar_carAEndKilo').focus();
				$("#btn_save").removeAttr("disabled");
				return false;
			}
			
		}
		if (op=="changeroute"){
		    if ($("#paiche_line").val()==""){
			alert("请填写新的路线！");
			$('#paiche_line').focus();
			$("#btn_save").removeAttr("disabled");
			return false;
		    }
		}
		if (op=="returncar" || op=="givecar"){
			if ($("#paiche_shunt").val()==0){
				var res="";
				$.ajax({
		      		  type:'GET',
		      		  url:"list.php?task=gettimediff&begin_time="+$("#return_endDate").val()+"&end_time="+$("#paiche_endDate").val(),
		      		  dataType:"json",
		      		  cache: false,
		      		  async: false,
		      		  error: function(){
		      		  },
		      		  success:function(result){
		      			$("#showerr2").html("");
		      			$("#diff_day").val(result.datediff);
						if (result.day>0) res+=result.day+"天";
						if (result.hour>0) res+=result.hour+"小时";
						if (result.min>0) res+=result.min+"分";
						if (result.sec>0) res+=result.sec+"秒";
						
						if (res!="") $("#showerr2").html("超时："+res);
		      		  }
		      	});
				if ($("#settle_startKm").val()==""){
					alert("请输入开始公里数！");
					$('#settle_startKm').focus();
					$("#btn_save").removeAttr("disabled");
					return false;
				}
				if ($("#settle_endKm").val()==""){
					alert("请输入结束公里数！");
					$('#settle_endKm').focus();
					$("#btn_save").removeAttr("disabled");
					return false;
				}
				if ($("#diff_day").val()>0){
					alert("实际还车时间不能超过预计用车结束时间！");
					$('#return_endDate').focus();
					$("#btn_save").removeAttr("disabled");
					return false;
				}
			}
			if ($("#settle_favor").val()!="" && parseFloat($("#settle_favor").val())>0 && $("#settle_favorreason").val()==""){
				alert("请输入优惠原因！");
				$('#settle_favorreason').focus();
				$("#btn_save").removeAttr("disabled");
				return false;
			}
			
			compute();
			if(!confirm('请仔细核对还车单，一旦提交就无法修改了，确定提交吗？')){
			    $("#btn_save").removeAttr("disabled");
			    return false;
			}
		}
		if (op=="continue"){
			var continue_type=$('input:radio[name=continue_type]:checked').val();
			if (continue_type==1){
				if ($("#addday").val()=="" ){
					alert("请输入续租天数！");
					$('#addday').focus();
					$("#btn_save").removeAttr("disabled");
					return false;
			    }
			    $("#end_Date").val(DateAdd($("#paiche_endDate").val(),$("#addday").val()));
			    
			    var paiche_unlimitKm=$("#paiche_unlimitKm").val();//是否限制公里数
			    if (paiche_unlimitKm!="Y"){
					if ($("#addoverKm").val()==""){
						alert("请输入增加公里数！");
						$('#addoverKm').focus();
						$("#btn_save").removeAttr("disabled");
						return false;
					}
			    }
			    
			    if ($("#money_5").val()=="" ){
					alert("请填写续租金额！");
					$('#money_5').focus();
					$("#btn_save").removeAttr("disabled");
					return false;
			    }
			}
			if (continue_type==2){
				if ($("#money_6").val()=="" && $("#money_7").val()==""){
					alert("请填写续租金额！");
					$('#money_6').focus();
					$("#btn_save").removeAttr("disabled");
					return false;
			    }
			}
		    if(!confirm('请仔细核对，一旦提交就无法修改了，确定提交吗？')){
			    $("#btn_save").removeAttr("disabled");
			    return false;
			}
		}
		if (op=="revisit"){
			if ($("#revisit_Date").val()==""){
				alert("请选择回访日期！");
				$("#btn_save").removeAttr("disabled");
				return false;
			}
		}
		if (op=="vio"){//违约
		    calTotal();
		    if(!confirm('请仔细核对各个款项，一旦提交就无法修改了，确定提交吗？')){
			$("#btn_save").removeAttr("disabled");
			return false;
		    }
		}
		
		$("#form1").submit();
		
		//window.parent.window.location.reload();
        //window.parent.window.jBox.close();
	}
	//计算续租天数
	function calDay(){
	    if ($("#addday").val()=="" && $("#end_Date").val()!=""){
		$("#addday").val(DateDiff($("#end_Date").val(),$("#paiche_endDate").val()));
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
	function closebox(){
		window.parent.window.jBox.close();
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
			      compute();
			  }
		});
	}
	//计算天数差的函数，通用  
	function  DateDiff(sDate1,sDate2){//sDate1和sDate2是2006-12-18格式  
	       var aDate,oDate1,oDate2,iDays;
	       aDate = sDate1.split("-");
	       oDate1 = new Date(aDate[1] + '-' + aDate[2] + '-' + aDate[0]);//转换为12-18-2006格式  
	       aDate = sDate2.split("-");
	       oDate2 = new Date(aDate[1] + '-' + aDate[2] + '-' + aDate[0]);
	       iDays = parseInt(Math.abs(oDate1 - oDate2)/1000/60/60/24);//把相差的毫秒数转换为天数  
	       return iDays;
	}
	//
	function DateAdd(sDate1,nDay){
		var oldTime = new Date(sDate1);
		oldTime.setDate(oldTime.getDate()+parseInt(nDay));
        return oldTime.format("yyyy-MM-dd hh:mm:ss");
	}
	