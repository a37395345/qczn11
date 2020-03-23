//活动a时间段
var time_as=DateToUnix("2030-01-17 00:00:00");
var time_ae=DateToUnix("2030-01-21 23:59:59");
//活动b时间段
var time_bs=DateToUnix("2030-01-22 00:00:00");
var time_be=DateToUnix("2020-01-31 23:59:59");
//活动c时间段
var time_cs=DateToUnix("2030-02-01 00:00:00");
var time_ce=DateToUnix("2030-02-05 23:59:59");
//活动d时间段
var time_ds=DateToUnix("2030-01-23 00:00:00");
var time_de=DateToUnix("2030-01-30 16:30:00");
var kh_a=0;

//添加，修改，调车
var paidan_type_a=$("#paidan_type_a").val();
//实时或预约
var paidan_type_b=$("#paidan_type_b").val();
//平台id，没有则为临时
var pintai_a=$("#pintai_a").val();
//承租人姓名
var paiche_linker=$('#paiche_linker');
//承租人身份证号码
var paiche_linkerNum=$('#paiche_linkerNum');
//承租人地址
var paiche_linkerAdd=$('#paiche_linkerAdd');
var paiche_linkerPhone=$('#paiche_linkerPhone');
//担保人区
var dbr_q=$("#dbr_q");
//租金
var czr_a=$("#paiche_rent");
//开始时间
var paiche_startDate=$("#paiche_startDate").val();
var d_time=$("#d_time").val();
var y_time=$("#time").val();

$("#paiche_startDate").click(function(){
	if(parseInt($('#paiche_kehu').val())!=1&&parseInt($("#paiche_kehu_aaa").val())!=1){
		//alert($('#paiche_kehu').val());
		laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'});
		qingli();
	}else{
		if(paidan_type_a!='diaoche'&&paidan_type_b!="s"){
			laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'});
			qingli();
		}
	}
});


if(paiche_startDate==""){
	if(paidan_type_b=="s"){
		$("#paiche_startDate").val(y_time);
	}else{
		$("#paiche_startDate").val(d_time);
	}
}else{
	if(paidan_type_a=='diaoche'){
		$("#paiche_startDate").val(y_time);

		var time=DateToUnix(y_time);

		time=time+24*60*60*(parseInt($("#tian_a").val()))+60*60*(parseInt($("#shi").val()))+60*(parseInt($("#fen").val()));

		$('#paiche_endDate').val(timestampToTime(time));

	}
}

$('#huodong_id').change(function(){
	if(parseInt($('#huodong_id').val())>0&&parseInt($('#huodong_id').val())!=99999){
		if($('#paiche_linkerNum').val()!=""&&$('#paiche_startDate').val()!=""&&$('#paiche_endDate').val()!=""){
			gethuodong_a();
		}else{
			huodong_tian=0;
			huodong_money=0;
			$("#huodong_id").val(0);
			$("#huodong_youhui").val(0);
			alert("清先填写客户身份信息与车辆租用时间！");
		}
	}else{
		
		$("#huodong_youhui").val(0);
		huodong_money=0;
		jisuan_zujin();
	}
	
	
})
var paiche_kehu_aaa=parseInt($("#paiche_kehu_aaa").val());
if(paiche_kehu_aaa>1){
	paiche_kehu(paiche_kehu_aaa,2);
}else{
	paiche_kehu(1,2);
	$("#paiche_kehu").val(1);
}
//客户选择下拉列表选中事件
function paiche_kehu(type,index){
	if(index==1){
		$("#paicheCounterShop").val(0);
		$("#paicheCounterMan option").remove();
		$("#shop_ida").val(0);
		paiche_linker.val('');
		paiche_linkerPhone.val('');
		paiche_linkerNum.val("");
		$("#paiche_rent").val("");
		paiche_linkerAdd.val("");
		$("#paiche_endDate").val("");
		$("#shi").val("");
		$("#fen").val("");
		$("#tian_a").val("");
		$("#songche").val("");
		$('#pintai').val(0);
		$('#paiche_deposit').val("");
		$('#shuaka').val("");
		$('#qita').val("");
		$('#jieri').val("");
		$('#yinshou').val("");
		$('#paiche_pintainum').val("");
		$('#paiche_stype').val("");
		$('#paiche_stype').val("");
		$('#paicheCarKey').val("");
		$('#che').css("display","table");
		$('#paicheCar').val("");
		$('#suijin').val("");
		$('#huodong_id').val("99999");
		$('#huodong_youhui').val("");
		$('#paiche_line').val("");
		$('#paiche_specialRemarks').val("");
		huodong_money=0;
		$('#czr').css("display","none");
		$('#paiche_linkerPicture').val("");
		$('#paiche_needtax').val(0);
		$('#paiche_tupian').val("");
		$("#xin_kehu").css('display','none');
		$('#songche_a').val(0);
		$('#car_num').val("");
		$('#car_color').val("");
		$('#car_brand').val("");
		$('#car_types_a').val("");
		$('#car_motor').val("");
		$('#car_frame').val("");
		$('#plan_rentamount').val("");
		$('#paiche_overTime').val("");
		$('#plan_chaokmy').val("");
		$('#plan_chaokms').val("");
		
		
		
		
	}
	//实时单
	if(paidan_type_b=='s'){
		
		//临时客户
		if(type==1){
			$("#pingtai_cc").css("display","table-row");
			$("#pingtai_cc").val("临时散客");
			$("#paiche_bb").css("display","none");
			$("#pintai").css("display","none");
			paiche_linker.attr("readonly","readonly");
			paiche_linker.attr("unselectable","on");
			paiche_linkerNum.attr("readonly","readonly");
			paiche_linkerNum.attr("unselectable","on");
			paiche_linkerAdd.attr("readonly","readonly");
			paiche_linkerAdd.attr("unselectable","on");
			paiche_linkerPhone.removeAttr("readonly");
			paiche_linkerPhone.removeAttr("unselectable");
			dbr_q.css('display',"block");
			$("#paiche_rent").attr("unselectable","on");
			$("#paiche_rent").attr("readonly","readonly");
			$("#huodong").css("display","table-row");
			$("#beizhu_aaa").css("display","block");
			$("#yanzheng").css("display","block");
			
			$("#suijin_aaa").css("display","table-row");
			$("#feiyong_aaa").css("display","table-row");
			$(".qitafeiyong_aaa").css("display","table-row");
			$(".songche_aaa").css("display","none");
			$(".jieri_aaa").css("display","table-cell");
			$("#shuaka_aaa").css("display","table-row");
			$("#songche").removeAttr("readonly");
			$("#songche").removeAttr("unselectable");
			$("#chengzu_aaa").css("display","table-row");
			$(".cz_aaab").css("display","table-cell");
			$(".cz_aaa").css("display","none");
			$("#yewu_guishu").css("display","table-row");
			$(".zhujin_bbb").css("display","table-cell");
			$(".zhujin_aaa").css("display","none");
			$(".zhujin_ccc").css("display","table-cell");
			$("#plan_rentamount_a").css("display","table-row");
			$("#c_xm").html("承租人身份证号码");
			
			
		//平台客户
		}else if(type==2){
			$("#pingtai_cc").css("display","none");
			$("#paiche_bb").css("display","table-row");
			$("#pintai").css("display","table-row");
			paiche_linker.attr("readonly","readonly");
			paiche_linker.attr("unselectable","on");
			paiche_linkerNum.attr("readonly","readonly");
			paiche_linkerNum.attr("unselectable","on");
			paiche_linkerAdd.attr("readonly","readonly");
			paiche_linkerAdd.attr("unselectable","on");
			paiche_linkerPhone.removeAttr("readonly");
			paiche_linkerPhone.removeAttr("unselectable");
			dbr_q.css('display',"none");
			$("#paiche_rent").removeAttr("readonly");
			$("#paiche_rent").removeAttr("unselectable");
			$("#huodong").css("display","none");
			$("#beizhu_aaa").css("display","block");
			$("#yanzheng").css("display","block");
		
			$("#suijin_aaa").css("display","none");
			$("#feiyong_aaa").css("display","table-row");
			$(".qitafeiyong_aaa").css("display","none");
			$(".songche_aaa").css("display","none");
			$(".jieri_aaa").css("display","table-cell");
			$("#shuaka_aaa").css("display","none");
			$("#songche").removeAttr("readonly");
			$("#songche").removeAttr("unselectable");
			$("#chengzu_aaa").css("display","table-row");
			$(".cz_aaab").css("display","table-cell");
			$(".cz_aaa").css("display","none");
			$("#yewu_guishu").css("display","table-row");
			$(".zhujin_bbb").css("display","table-cell");
			$(".zhujin_aaa").css("display","none");
			$(".zhujin_ccc").css("display","table-cell");
			$("#plan_rentamount_a").css("display","table-row");
			$("#c_xm").html("承租人身份证号码");
			
		//凹凸代步车
		}else if(type==3){
			$("#pingtai_cc").css("display","table-row");
			$("#pingtai_cc").val("凹凸代步车");
			$("#paiche_bb").css("display","table-row");
			$("#pintai").css("display","none");
			paiche_linker.attr("readonly","readonly");
			paiche_linker.attr("unselectable","on");
			paiche_linkerNum.attr("readonly","readonly");
			paiche_linkerNum.attr("unselectable","on");
			paiche_linkerAdd.attr("readonly","readonly");
			paiche_linkerAdd.attr("unselectable","on");
			paiche_linker.val('凹凸穆斯炜');
			paiche_linkerNum.val("321000000000000000");
			paiche_linkerPhone.val("15921376701");
			paiche_linkerAdd.val("无");
			paiche_linkerPhone.attr("readonly","readonly");
			paiche_linkerPhone.attr("unselectable","on");
			$("#paiche_stype").val(4);
			dbr_q.css('display',"none");
			$("#paiche_rent").removeAttr("readonly");
			$("#paiche_rent").removeAttr("unselectable");
			$("#huodong").css("display","none");
			$("#beizhu_aaa").css("display","block");
			$("#yanzheng").css("display","none");
			
			$("#suijin_aaa").css("display","none");
			$("#feiyong_aaa").css("display","table-row");
			$(".qitafeiyong_aaa").css("display","table-row");
			$(".songche_aaa").css("display","table-cell");
			$(".jieri_aaa").css("display","none");
			$("#shuaka_aaa").css("display","none");
			$("#songche").attr("readonly","readonly");
			$("#songche").attr("unselectable","on");
			$("#chengzu_aaa").css("display","table-row");
			$(".cz_aaab").css("display","table-cell");
			$(".cz_aaa").css("display","none");
			$("#yewu_guishu").css("display","table-row");
			$(".zhujin_bbb").css("display","table-cell");
			$(".zhujin_aaa").css("display","table-cell");
			$(".zhujin_ccc").css("display","none");
			$("#plan_rentamount_a").css("display","table-row");
			$("#c_xm").html("承租人身份证号码");
		//违章冻结
		}else if(type==4){
			$("#pingtai_cc").css("display","table-row");
			$("#pingtai_cc").val("违章冻结");
			$("#paiche_bb").css("display","none");
			$("#pintai").css("display","none");
			paiche_linker.removeAttr("readonly");
			paiche_linker.removeAttr("unselectable");
			paiche_linkerNum.removeAttr("readonly");
			paiche_linkerNum.removeAttr("unselectable");
			paiche_linkerAdd.removeAttr("readonly");
			paiche_linkerAdd.removeAttr("unselectable");
			paiche_linkerPhone.removeAttr("readonly");
			paiche_linkerPhone.removeAttr("unselectable");
			dbr_q.css('display',"none");
			$("#paiche_rent").attr("unselectable","on");
			$("#paiche_rent").attr("readonly","readonly");
			$("#huodong").css("display","none");
			$("#beizhu_aaa").css("display","none");
			$("#yanzheng").css("display","none");
			$("#suijin_aaa").css("display","none");
			$("#feiyong_aaa").css("display","none");
			$(".qitafeiyong_aaa").css("display","none");
			$(".songche_aaa").css("display","none");
			$(".jieri_aaa").css("display","table-row");
			$("#chengzu_aaa").css("display","none");
			$(".cz_aaab").css("display","none");
			$(".cz_aaa").css("display","table-cell");
			$("#yewu_guishu").css("display","none");
			$(".zhujin_bbb").css("display","none");
			$(".zhujin_aaa").css("display","table-cell");
			$(".zhujin_ccc").css("display","table-cell");
			$("#plan_rentamount_a").css("display","none");
			$("#c_xm").html("承租人身份证号码");
		}else if(type==5){
			$("#pingtai_cc").css("display","table-row");
			$("#pingtai_cc").val("境外客户");
			$("#paiche_bb").css("display","none");
			$("#pintai").css("display","none");
			paiche_linker.removeAttr("readonly");
			paiche_linker.removeAttr("unselectable");
			paiche_linkerNum.removeAttr("readonly");
			paiche_linkerNum.removeAttr("unselectable");
			paiche_linkerAdd.removeAttr("readonly");
			paiche_linkerAdd.removeAttr("unselectable");
			paiche_linkerPhone.removeAttr("readonly");
			paiche_linkerPhone.removeAttr("unselectable");
			dbr_q.css('display',"none");
			$("#paiche_rent").attr("unselectable","on");
			$("#paiche_rent").attr("readonly","readonly");
			$("#huodong").css("display","table-row");
			$("#beizhu_aaa").css("display","block");
			$("#yanzheng").css("display","block");
			
			$("#suijin_aaa").css("display","table-row");
			$("#feiyong_aaa").css("display","table-row");
			$(".qitafeiyong_aaa").css("display","table-row");
			$(".songche_aaa").css("display","none");
			$(".jieri_aaa").css("display","table-cell");
			$("#shuaka_aaa").css("display","table-row");
			$("#songche").removeAttr("readonly");
			$("#songche").removeAttr("unselectable");
			$("#chengzu_aaa").css("display","table-row");
			$(".cz_aaab").css("display","table-cell");
			$(".cz_aaa").css("display","none");
			$("#yewu_guishu").css("display","table-row");
			$(".zhujin_bbb").css("display","table-cell");
			$(".zhujin_aaa").css("display","none");
			$(".zhujin_ccc").css("display","table-cell");
			$("#plan_rentamount_a").css("display","table-row");
			$("#c_xm").html("承租人护照号码");

		}
	//预约单
	}else{
		
		
		//临时客户
		if(type==1){

			$("#pingtai_cc").css("display","table-row");
			$("#pingtai_cc").val("临时散客");
			$("#paiche_bb").css("display","none");
			$("#pintai").css("display","none");
			paiche_linker.removeAttr("readonly");
			paiche_linker.removeAttr("unselectable");
			paiche_linkerNum.removeAttr("readonly");
			paiche_linkerNum.removeAttr("unselectable");
			paiche_linkerAdd.removeAttr("readonly");
			paiche_linkerAdd.removeAttr("unselectable");
			paiche_linkerPhone.removeAttr("readonly");
			paiche_linkerPhone.removeAttr("unselectable");
			dbr_q.css('display',"none");
			$("#paiche_rent").attr("unselectable","on");
			$("#paiche_rent").attr("readonly","readonly");
			$("#huodong").css("display","none");
			$("#beizhu_aaa").css("display","block");
			$("#yanzheng").css("display","none");
			$("#suijin_aaa").css("display","table-row");
			$("#feiyong_aaa").css("display","table-row");
			$(".qitafeiyong_aaa").css("display","table-row");
			$(".songche_aaa").css("display","none");
			$(".jieri_aaa").css("display","table-cell");
			$("#shuaka_aaa").css("display","table-row");
			$("#songche").removeAttr("readonly");
			$("#songche").removeAttr("unselectable");
			$("#chengzu_aaa").css("display","none");
			$(".cz_aaab").css("display","table-cell");
			$(".cz_aaa").css("display","none");
			$("#yewu_guishu").css("display","table-row");
			$(".zhujin_bbb").css("display","table-cell");
			$(".zhujin_aaa").css("display","none");
			$(".zhujin_ccc").css("display","table-cell");
			$("#plan_rentamount_a").css("display","table-row");
			$("#c_xm").html("承租人身份证号码");
		//平台客户
		}else if(type==2){
			$("#pingtai_cc").css("display","none");
			$("#paiche_bb").css("display","table-row");
			$("#pintai").css("display","table-row");
			paiche_linker.removeAttr("readonly");
			paiche_linker.removeAttr("unselectable");
			paiche_linkerNum.removeAttr("readonly");
			paiche_linkerNum.removeAttr("unselectable");
			paiche_linkerAdd.removeAttr("readonly");
			paiche_linkerAdd.removeAttr("unselectable");
			paiche_linkerPhone.removeAttr("readonly");
			paiche_linkerPhone.removeAttr("unselectable");
			dbr_q.css('display',"none");
			$("#paiche_rent").removeAttr("readonly");
			$("#paiche_rent").removeAttr("unselectable");
			$("#huodong").css("display","none");
			$("#beizhu_aaa").css("display","block");
			$("#yanzheng").css("display","none");
		
			$("#suijin_aaa").css("display","none");
			$("#feiyong_aaa").css("display","table-row");
			$(".qitafeiyong_aaa").css("display","none");
			$(".songche_aaa").css("display","none");
			$(".jieri_aaa").css("display","table-cell");
			$("#shuaka_aaa").css("display","none");
			$("#songche").removeAttr("readonly");
			$("#songche").removeAttr("unselectable");
			$("#chengzu_aaa").css("display","none");
			$(".cz_aaab").css("display","table-cell");
			$(".cz_aaa").css("display","none");
			$("#yewu_guishu").css("display","table-row");
			$(".zhujin_bbb").css("display","table-cell");
			$(".zhujin_aaa").css("display","none");
			$(".zhujin_ccc").css("display","table-cell");
			$("#plan_rentamount_a").css("display","table-row");
			$("#c_xm").html("承租人身份证号码");
		//凹凸代步车
		}else if(type==3){
			
			$("#pingtai_cc").css("display","table-row");
			$("#paiche_bb").css("display","table-row");
			$("#pingtai_cc").val("凹凸代步车");
			$("#pintai").css("display","none");
			paiche_linker.attr("readonly","readonly");
			paiche_linker.attr("unselectable","on");
			paiche_linkerNum.attr("readonly","readonly");
			paiche_linkerNum.attr("unselectable","on");
			paiche_linkerAdd.attr("readonly","readonly");
			paiche_linkerAdd.attr("unselectable","on");
			paiche_linker.val('凹凸穆斯炜');
			paiche_linkerNum.val("321000000000000000");
			paiche_linkerPhone.val("15921376701");
			paiche_linkerAdd.val("无");
			paiche_linkerPhone.attr("readonly","readonly");
			paiche_linkerPhone.attr("unselectable","on");
			$("#paiche_stype").val(4);
			dbr_q.css('display',"none");
			$("#paiche_rent").removeAttr("readonly");
			$("#paiche_rent").removeAttr("unselectable");
			$("#huodong").css("display","none");
			$("#beizhu_aaa").css("display","block");
			$("#yanzheng").css("display","none");
			
			$("#suijin_aaa").css("display","none");
			$("#feiyong_aaa").css("display","table-row");
			$(".qitafeiyong_aaa").css("display","table-row");
			$(".songche_aaa").css("display","table-cell");
			$(".jieri_aaa").css("display","none");
			$("#shuaka_aaa").css("display","none");
			$("#songche").attr("readonly","readonly");
			$("#songche").attr("unselectable","on");
			$("#chengzu_aaa").css("display","table-row");
			$(".cz_aaab").css("display","table-cell");
			$(".cz_aaa").css("display","none");
			$("#yewu_guishu").css("display","table-row");
			$(".zhujin_bbb").css("display","table-cell");
			$(".zhujin_aaa").css("display","table-cell");
			$(".zhujin_ccc").css("display","none");
			$("#plan_rentamount_a").css("display","table-row");
			$("#c_xm").html("承租人身份证号码");
		//违章冻结
		}else if(type==5){
			$("#pingtai_cc").css("display","table-row");
			$("#pingtai_cc").val("境外客户");
			$("#paiche_bb").css("display","none");
			$("#pintai").css("display","none");
			paiche_linker.removeAttr("readonly");
			paiche_linker.removeAttr("unselectable");
			paiche_linkerNum.removeAttr("readonly");
			paiche_linkerNum.removeAttr("unselectable");
			paiche_linkerAdd.removeAttr("readonly");
			paiche_linkerAdd.removeAttr("unselectable");
			paiche_linkerPhone.removeAttr("readonly");
			paiche_linkerPhone.removeAttr("unselectable");
			dbr_q.css('display',"none");
			$("#paiche_rent").attr("unselectable","on");
			$("#paiche_rent").attr("readonly","readonly");
			$("#huodong").css("display","none");
			$("#beizhu_aaa").css("display","block");
			$("#yanzheng").css("display","none");
			$("#suijin_aaa").css("display","table-row");
			$("#feiyong_aaa").css("display","table-row");
			$(".qitafeiyong_aaa").css("display","table-row");
			$(".songche_aaa").css("display","none");
			$(".jieri_aaa").css("display","table-cell");
			$("#shuaka_aaa").css("display","table-row");
			$("#songche").removeAttr("readonly");
			$("#songche").removeAttr("unselectable");
			$("#chengzu_aaa").css("display","none");
			$(".cz_aaab").css("display","table-cell");
			$(".cz_aaa").css("display","none");
			$("#yewu_guishu").css("display","table-row");
			$(".zhujin_bbb").css("display","table-cell");
			$(".zhujin_aaa").css("display","none");
			$(".zhujin_ccc").css("display","table-cell");
			$("#plan_rentamount_a").css("display","table-row");
			$("#c_xm").html("承租人护照号码");
		}
	}
	//调车
	if(paidan_type_a=="diaoche"){
		//临时客户
		if(type==1){
			$("#pingtai_cc").css("display","table-row");
			$("#pingtai_cc").val("临时散客");
			$("#paiche_bb").css("display","none");
			$("#pintai").css("display","none");
			paiche_linker.attr("readonly","readonly");
			paiche_linker.attr("unselectable","on");
			paiche_linkerNum.attr("readonly","readonly");
			paiche_linkerNum.attr("unselectable","on");
			paiche_linkerAdd.attr("readonly","readonly");
			paiche_linkerAdd.attr("unselectable","on");
			paiche_linkerPhone.removeAttr("readonly");
			paiche_linkerPhone.removeAttr("unselectable");
			dbr_q.css('display',"block");
			$("#paiche_rent").attr("unselectable","on");
			$("#paiche_rent").attr("readonly","readonly");
			$("#huodong").css("display","table-row");
			$("#beizhu_aaa").css("display","block");
			$("#yanzheng").css("display","block");
			
			$("#suijin_aaa").css("display","table-row");
			$("#feiyong_aaa").css("display","table-row");
			$(".qitafeiyong_aaa").css("display","table-row");
			$(".songche_aaa").css("display","none");
			$(".jieri_aaa").css("display","table-cell");
			$("#shuaka_aaa").css("display","table-row");
			$("#songche").removeAttr("readonly");
			$("#songche").removeAttr("unselectable");
			$("#chengzu_aaa").css("display","table-row");
			$(".cz_aaab").css("display","table-cell");
			$(".cz_aaa").css("display","none");
			$("#yewu_guishu").css("display","table-row");
			$(".zhujin_bbb").css("display","table-cell");
			$(".zhujin_aaa").css("display","none");
			$(".zhujin_ccc").css("display","table-cell");
			$("#plan_rentamount_a").css("display","table-row");
			$("#c_xm").html("承租人身份证号码");
		//平台客户
		}else if(type==2){
			$("#pingtai_cc").css("display","none");
			$("#paiche_bb").css("display","table-row");
			$("#pintai").css("display","table-row");
			paiche_linker.removeAttr("readonly");
			paiche_linker.removeAttr("unselectable");
			paiche_linkerNum.removeAttr("readonly");
			paiche_linkerNum.removeAttr("unselectable");
			paiche_linkerAdd.removeAttr("readonly");
			paiche_linkerAdd.removeAttr("unselectable");
			paiche_linkerPhone.removeAttr("readonly");
			paiche_linkerPhone.removeAttr("unselectable");
			dbr_q.css('display',"none");
			$("#paiche_rent").removeAttr("readonly");
			$("#paiche_rent").removeAttr("unselectable");
			$("#huodong").css("display","none");
			$("#beizhu_aaa").css("display","block");
			$("#yanzheng").css("display","block");
		
			$("#suijin_aaa").css("display","none");
			$("#feiyong_aaa").css("display","table-row");
			$(".qitafeiyong_aaa").css("display","none");
			$(".songche_aaa").css("display","none");
			$(".jieri_aaa").css("display","table-cell");
			$("#shuaka_aaa").css("display","none");
			$("#songche").removeAttr("readonly");
			$("#songche").removeAttr("unselectable");
			$("#chengzu_aaa").css("display","table-row");
			$(".cz_aaab").css("display","table-cell");
			$(".cz_aaa").css("display","none");
			$("#yewu_guishu").css("display","table-row");
			$(".zhujin_bbb").css("display","table-cell");
			$(".zhujin_aaa").css("display","none");
			$(".zhujin_ccc").css("display","table-cell");
			$("#plan_rentamount_a").css("display","table-row");
			$("#c_xm").html("承租人身份证号码");

		//凹凸代步车
		}else if(type==3){
			$("#pingtai_cc").css("display","able-row");
			$("#paiche_bb").css("display","table-row");
			$("#pingtai_cc").val("凹凸代步车");
			$("#pintai").css("display","none");
			paiche_linker.attr("readonly","readonly");
			paiche_linker.attr("unselectable","on");
			paiche_linkerNum.attr("readonly","readonly");
			paiche_linkerNum.attr("unselectable","on");
			paiche_linkerAdd.attr("readonly","readonly");
			paiche_linkerAdd.attr("unselectable","on");
			paiche_linker.val('凹凸穆斯炜');
			paiche_linkerNum.val("321000000000000000");
			paiche_linkerPhone.val("15921376701");
			paiche_linkerAdd.val("无");
			paiche_linkerPhone.attr("readonly","readonly");
			paiche_linkerPhone.attr("unselectable","on");
			$("#paiche_stype").val(4);
			dbr_q.css('display',"none");
			$("#paiche_rent").removeAttr("readonly");
			$("#paiche_rent").removeAttr("unselectable");
			$("#huodong").css("display","none");
			$("#beizhu_aaa").css("display","block");
			$("#yanzheng").css("display","none");
			
			$("#suijin_aaa").css("display","none");
			$("#feiyong_aaa").css("display","table-row");
			$(".qitafeiyong_aaa").css("display","table-row");
			$(".songche_aaa").css("display","table-cell");
			$(".jieri_aaa").css("display","none");
			$("#shuaka_aaa").css("display","none");
			$("#songche").attr("readonly","readonly");
			$("#songche").attr("unselectable","on");
			$("#chengzu_aaa").css("display","table-row");
			$(".cz_aaab").css("display","table-cell");
			$(".cz_aaa").css("display","none");
			$("#yewu_guishu").css("display","table-row");
			$(".zhujin_bbb").css("display","table-cell");
			$(".zhujin_aaa").css("display","table-cell");
			$(".zhujin_ccc").css("display","none");
			$("#plan_rentamount_a").css("display","table-row");
			$("#c_xm").html("承租人身份证号码");
		//违章冻结
		}else if (type=5){
			$("#pingtai_cc").css("display","able-row");
			$("#paiche_bb").css("display","none");
			$("#pingtai_cc").val("境外客户");
			$("#pintai").css("display","none");
			paiche_linker.removeAttr("readonly");
			paiche_linker.removeAttr("unselectable");
			paiche_linkerNum.removeAttr("readonly");
			paiche_linkerNum.removeAttr("unselectable");
			paiche_linkerAdd.removeAttr("readonly");
			paiche_linkerAdd.removeAttr("unselectable");
			paiche_linkerPhone.removeAttr("readonly");
			paiche_linkerPhone.removeAttr("unselectable");
			dbr_q.css('display',"none");
			$("#paiche_rent").attr("unselectable","on");
			$("#paiche_rent").attr("readonly","readonly");
			$("#huodong").css("display","table-row");
			$("#beizhu_aaa").css("display","block");
			$("#yanzheng").css("display","block");
			
			$("#suijin_aaa").css("display","table-row");
			$("#feiyong_aaa").css("display","table-row");
			$(".qitafeiyong_aaa").css("display","table-row");
			$(".songche_aaa").css("display","none");
			$(".jieri_aaa").css("display","table-cell");
			$("#shuaka_aaa").css("display","table-row");
			$("#songche").removeAttr("readonly");
			$("#songche").removeAttr("unselectable");
			$("#chengzu_aaa").css("display","table-row");
			$(".cz_aaab").css("display","table-cell");
			$(".cz_aaa").css("display","none");
			$("#yewu_guishu").css("display","table-row");
			$(".zhujin_bbb").css("display","table-cell");
			$(".zhujin_aaa").css("display","none");
			$(".zhujin_ccc").css("display","table-cell");
			$("#plan_rentamount_a").css("display","table-row");
			$("#c_xm").html("承租人护照号码");
		}
	//修改
	}else if(paidan_type_a=="update"){
		//临时客户
		if(type==1){
			$("#pingtai_cc").css("display","table-row");
			$("#pingtai_cc").val("临时散客");
			$("#paiche_bb").css("display","none");
			$("#pintai").css("display","none");
			paiche_linker.removeAttr("readonly");
			paiche_linker.removeAttr("unselectable");
			paiche_linkerNum.removeAttr("readonly");
			paiche_linkerNum.removeAttr("unselectable");
			paiche_linkerAdd.removeAttr("readonly");
			paiche_linkerAdd.removeAttr("unselectable");
			paiche_linkerPhone.removeAttr("readonly");
			paiche_linkerPhone.removeAttr("unselectable");
			dbr_q.css('display',"none");
			$("#paiche_rent").attr("unselectable","on");
			$("#paiche_rent").attr("readonly","readonly");
			$("#huodong").css("display","none");
			$("#beizhu_aaa").css("display","block");
			$("#yanzheng").css("display","none");
			$("#suijin_aaa").css("display","table-row");
			$("#feiyong_aaa").css("display","table-row");
			$(".qitafeiyong_aaa").css("display","table-row");
			$(".songche_aaa").css("display","none");
			$(".jieri_aaa").css("display","table-cell");
			$("#shuaka_aaa").css("display","table-row");
			$("#songche").removeAttr("readonly");
			$("#songche").removeAttr("unselectable");
			$("#chengzu_aaa").css("display","none");
			$(".cz_aaab").css("display","table-cell");
			$(".cz_aaa").css("display","none");
			$("#yewu_guishu").css("display","table-row");
			$(".zhujin_bbb").css("display","table-cell");
			$(".zhujin_aaa").css("display","none");
			$(".zhujin_ccc").css("display","table-cell");
			$("#plan_rentamount_a").css("display","table-row");
			$("#c_xm").html("承租人身份证号码");
		//平台客户
		}else if(type==2){
			$("#pingtai_cc").css("display","none");
			$("#paiche_bb").css("display","table-row");
			$("#pintai").css("display","table-row");
			paiche_linker.removeAttr("readonly");
			paiche_linker.removeAttr("unselectable");
			paiche_linkerNum.removeAttr("readonly");
			paiche_linkerNum.removeAttr("unselectable");
			paiche_linkerAdd.removeAttr("readonly");
			paiche_linkerAdd.removeAttr("unselectable");
			paiche_linkerPhone.removeAttr("readonly");
			paiche_linkerPhone.removeAttr("unselectable");
			dbr_q.css('display',"none");
			$("#paiche_rent").removeAttr("readonly");
			$("#paiche_rent").removeAttr("unselectable");
			$("#huodong").css("display","none");
			$("#beizhu_aaa").css("display","block");
			$("#yanzheng").css("display","none");
		
			$("#suijin_aaa").css("display","none");
			$("#feiyong_aaa").css("display","table-row");
			$(".qitafeiyong_aaa").css("display","none");
			$(".songche_aaa").css("display","none");
			$(".jieri_aaa").css("display","table-cell");
			$("#shuaka_aaa").css("display","none");
			$("#songche").removeAttr("readonly");
			$("#songche").removeAttr("unselectable");
			$("#chengzu_aaa").css("display","table-row");
			$(".cz_aaab").css("display","table-cell");
			$(".cz_aaa").css("display","none");
			$("#yewu_guishu").css("display","table-row");
			$(".zhujin_bbb").css("display","table-cell");
			$(".zhujin_aaa").css("display","none");
			$(".zhujin_ccc").css("display","table-cell");
			$("#plan_rentamount_a").css("display","table-row");
			$("#c_xm").html("承租人身份证号码");
		//凹凸代步车
		}else if(type==3){
			$("#pingtai_cc").css("display","table-row");
			$("#paiche_bb").css("display","table-row");
			$("#pingtai_cc").val("凹凸代步车");
			$("#pintai").css("display","none");
			paiche_linker.attr("readonly","readonly");
			paiche_linker.attr("unselectable","on");
			paiche_linkerNum.attr("readonly","readonly");
			paiche_linkerNum.attr("unselectable","on");
			paiche_linkerAdd.attr("readonly","readonly");
			paiche_linkerAdd.attr("unselectable","on");
			paiche_linker.val('凹凸穆斯炜');
			paiche_linkerNum.val("321000000000000000");
			paiche_linkerPhone.val("15921376701");
			paiche_linkerAdd.val("无");
			paiche_linkerPhone.attr("readonly","readonly");
			paiche_linkerPhone.attr("unselectable","on");
			$("#paiche_stype").val(4);
			dbr_q.css('display',"none");
			$("#paiche_rent").removeAttr("readonly");
			$("#paiche_rent").removeAttr("unselectable");
			$("#huodong").css("display","none");
			$("#beizhu_aaa").css("display","block");
			$("#yanzheng").css("display","none");
			
			$("#suijin_aaa").css("display","none");
			$("#feiyong_aaa").css("display","table-row");
			$(".qitafeiyong_aaa").css("display","table-row");
			$(".songche_aaa").css("display","table-cell");
			$(".jieri_aaa").css("display","none");
			$("#shuaka_aaa").css("display","none");
			$("#songche").attr("readonly","readonly");
			$("#songche").attr("unselectable","on");
			$("#chengzu_aaa").css("display","table-row");
			$(".cz_aaab").css("display","table-cell");
			$(".cz_aaa").css("display","none");
			$("#yewu_guishu").css("display","table-row");
			$(".zhujin_bbb").css("display","table-cell");
			$(".zhujin_aaa").css("display","table-cell");
			$(".zhujin_ccc").css("display","none");
			$("#plan_rentamount_a").css("display","table-row");
			$("#c_xm").html("承租人身份证号码");
		}else if(type==5){
			$("#pingtai_cc").css("display","table-row");
			$("#pingtai_cc").val("境外客户");
			$("#paiche_bb").css("display","none");
			$("#pintai").css("display","none");
			paiche_linker.removeAttr("readonly");
			paiche_linker.removeAttr("unselectable");
			paiche_linkerNum.removeAttr("readonly");
			paiche_linkerNum.removeAttr("unselectable");
			paiche_linkerAdd.removeAttr("readonly");
			paiche_linkerAdd.removeAttr("unselectable");
			paiche_linkerPhone.removeAttr("readonly");
			paiche_linkerPhone.removeAttr("unselectable");
			dbr_q.css('display',"none");
			$("#paiche_rent").attr("unselectable","on");
			$("#paiche_rent").attr("readonly","readonly");
			$("#huodong").css("display","none");
			$("#beizhu_aaa").css("display","block");
			$("#yanzheng").css("display","none");
			$("#suijin_aaa").css("display","table-row");
			$("#feiyong_aaa").css("display","table-row");
			$(".qitafeiyong_aaa").css("display","table-row");
			$(".songche_aaa").css("display","none");
			$(".jieri_aaa").css("display","table-cell");
			$("#shuaka_aaa").css("display","table-row");
			$("#songche").removeAttr("readonly");
			$("#songche").removeAttr("unselectable");
			$("#chengzu_aaa").css("display","none");
			$(".cz_aaab").css("display","table-cell");
			$(".cz_aaa").css("display","none");
			$("#yewu_guishu").css("display","table-row");
			$(".zhujin_bbb").css("display","table-cell");
			$(".zhujin_aaa").css("display","none");
			$(".zhujin_ccc").css("display","table-cell");
			$("#plan_rentamount_a").css("display","table-row");
			$("#c_xm").html("承租人护照证号码");
		}
	}
	
	
	

	
}
//客户来源
$('#paiche_kehu').change(function(){
	var type=$(this).val();
	$('#paiche_kehu_aaa').val(type);
	paiche_kehu(type,1);
});
//凹凸代步车选择送车
$('#songche_a').change(function(){
	if(parseInt($(this).val())==2){
		$("#songche").val("60");
		
	}else if(parseInt($(this).val())==3){
		$("#songche").val("120");
	}else{
		$("#songche").val(0);
	}
	jisuan_zujin();
});
//开票选择
$('#paiche_needtax').change(function(){
	
	jisuan_zujin();
});


//根据门店选择业务员

$("#paicheCounterShop").change(function(){
	$("#paicheCounterMan option").remove();
	var shop_id=$('#paicheCounterShop').val();
	$.ajax({
		type:'POST',
		url:'get_emp_shop.php',
		data:{"shop_id":shop_id},
		dataType:"json",
		cache: false,
		success:function(req){
			$("#paicheCounterMan").append("<option  value='0'>请选择</option>");
			for(var i=0;i<req.length;i++){
				$("#paicheCounterMan").append("<option  value='"+req[i]['emp_id']+"'>"+req[i]['emp_name']+"</option>");
			}
			 
			
		}
	});
})

$("#shop_ida").change(function(){
	var shop_ida=$("#shop_ida").val();
	
	$("#shop_id").val(shop_ida);
})

var body_W = $(".wrapper-content").width();
function setBody_W(){
    body_W = $(".wrapper-content").width();
}


function get_car(){
		setBody_W();
		var key=$("#paicheCarKey").val();
		demo_iframe('get_car.php?key='+key+'&kh_a='+kh_a,'选择车辆',body_W,500,'login_js');

}



$("#dbrxs").click(function(){
	var dbr=$('#dbr').css('display');
	if(dbr=="none"){
		$('#dbr').css('display',"block");
		$('#dbr_img').attr("src","../../../images/a8.png");
		$('#dbr_a').css('display',"none");
		$('#shuaka2').css('display',"block");
	}else{
		$('#dbr').css('display',"none");
		$('#dbr_img').attr("src","../../../images/a9.png");
		$('#dbr_a').css('display',"block");
		$('#shuaka2').css('display',"none");
	}
})


function jisuan(sjianjian,shuzi){
	if(!$('#paiche_startDate').val()){
		alert('用车开始时间不能为空！');
		return false;
	}
	if(!$('#paicheCar').val()){
		alert('请先选择车辆！');
		return false;
	}

	var tian_a=0;
	var shi=0;
	var fen=0;

	if($('#tian_a').val()){
		tian_a=parseInt($('#tian_a').val());
		
	}
	if($('#shi').val()){
		shi=parseInt($('#shi').val());
		
	}

	if($('#fen').val()){
		fen=parseInt($('#fen').val());
		
	}

	if(shuzi=="j"){
		if(sjianjian=="t"){
			$('#tian_a').val(tian_a+1);
			
		}else if(sjianjian=="s"){
			if(shi<24){
					$('#shi').val(shi+1);
				}	
		}else{
			if(fen<60){
					$('#fen').val(fen+1);
			}	
		}
	}else{
		if(sjianjian=="t"){
			if(tian_a>0){
				$('#tian_a').val(tian_a-1);	
			}
		}else if(sjianjian=="s"){
			if(shi>0){
				$('#shi').val(shi-1);

			}
		}else{
			if(fen>0){
				$('#fen').val(fen-1);

			}
		}
	}

	jisuan_a();

}


function jisuan_a(){
	var tian_b=0;
	var shi_b=0;
	var fen=0;
	var time = $('#paiche_startDate').val();
	if($('#tian_a').val()!=""){
		
		if(!yanzhengShuZi($('#tian_a').val())){
			$('#tian_a').val(0);

		}else{
			tian_b=parseInt($('#tian_a').val());
		}
		
	}
	if($('#shi').val()!=""){
		
		if(!yanzhengShuZi($('#shi').val())){
			$('#shi').val(0);
		}else{
			shi_b=parseInt($('#shi').val());
		}
		
		
	}
	if($('#fen').val()!=""){
		
		if(!yanzhengShuZi($('#fen').val())){
			$('#fen').val(0);
		}else{
			fen=parseInt($('#fen').val());
		}
		
		
	}
	if(tian_b>999){
		alert('天数不能大于999');
		$('#tian_a').val("999");
		tian_b=999;
	}
	if(shi_b>23){
		alert('时间不能大于24');
		$('#shi').val("23");
		shi_b=23;
	}

	
	if(fen>59){
		alert('分钟不能大于59');
		$('#fen').val("59");
		fen=59;
	}
	

	time_s=DateToUnix(time);
	var time_e=time_s+24*60*60*tian_b+60*60*shi_b+60*fen;
	//判断车辆类型
	var car_types=parseInt($('#car_types').val());
	
	var car_gongchang=parseInt($('#car_gongchang').val());

	var paiche_kehu=$("#paiche_kehu").val();
	
		//工厂车辆
		if(car_gongchang==1){
			if(parseInt($("#paiche_kehu").val())==1||parseInt($("#paiche_kehu_aaa").val())==1||parseInt($("#paiche_kehu").val())==5||parseInt($("#paiche_kehu_aaa").val())==5){
			//租车时间不在D时间段以内
		
				if(time_s<time_ds||time_s>time_de){
					$('#tian_a').val("");
					$('#shi').val("");
					$('#fen').val("");
					$('#paiche_endDate').val("");
					alert("工厂车辆不在此时间租用范围！");
					return false;

				}else{
					
					//工厂车辆碰到D时间段
					var tian_e=parseInt((time_de-time_s)/(24*60*60));
					var shi_e=parseInt((time_de-time_s-tian_e*24*60*60)/(60*60));
					var fen_e=parseInt((time_de-time_s-tian_e*24*60*60-shi_e*60*60)/60);
					$('#tian_a').val(tian_e);
					$('#shi').val(shi_e);
					$('#fen').val(fen_e);
					$('#paiche_endDate').val(timestampToTime(time_de));
				}
			}else{
				$('#paiche_endDate').val(timestampToTime(time_e));
			}
		}else{
			if(parseInt($("#paiche_kehu").val())==1||parseInt($("#paiche_kehu_aaa").val())==1||parseInt($("#paiche_kehu").val())==5||parseInt($("#paiche_kehu_aaa").val())==5){
				//经过B时间段的结束时间
				if(time_e>time_bs&&time_s<time_be){
					$("#paiche_specialRemarks").val("");
					//超级跑车在B时间段任意一天3天起租
					if(car_types==2&&tian_b<3){
						$('#tian_a').val("3");
						$('#shi').val("0");
						$('#fen').val("0");
						tian_b=3;shi_b=0;fen=0;
						time_e=time_s+24*60*60*tian_b+60*60*shi_b+60*fen;
						$('#paiche_endDate').val(timestampToTime(time_e));
					}
					if(car_types!=2&&tian_b<15){
						$('#tian_a').val("15");
						$('#shi').val("0");
						$('#fen').val("0");
						tian_b=15;shi_b=0;fen=0;
						time_e=time_s+24*60*60*tian_b+60*60*shi_b+60*fen;
						$('#paiche_endDate').val(timestampToTime(time_e));
					}else{
						$('#paiche_endDate').val(timestampToTime(time_e));
					}
				}else{
					$('#paiche_endDate').val(timestampToTime(time_e));
				}
			}else{
				$('#paiche_endDate').val(timestampToTime(time_e));
			}
		}
		
	jisuan_zujin();
}

function jisuan_b(){
 //押金
 var paiche_deposit=0;
 if($('#paiche_deposit').val()){
  paiche_deposit=parseInt($('#paiche_deposit').val());
 }
 var jieri=0;
 if($('#jieri').val()){
  jieri=parseInt($('#jieri').val());
 }
 var huodong_youhui=0;
 if($('#huodong_youhui').val()){
  huodong_youhui=parseInt($('#huodong_youhui').val());
 }

 //租金
 var paiche_rent=0;
 if($('#paiche_rent').val()){
  paiche_rent=parseInt($('#paiche_rent').val());
 }

 
 //其他
 var qita=0;
 if($('#qita').val()){
  qita=parseInt($('#qita').val());
 }
 //刷卡费
 var shuaka=0;
 if($('#shuaka').val()){
  shuaka=parseInt($('#shuaka').val());
 }
 //送车费
 var songche=0;
 if($('#songche').val()){
  songche=parseInt($('#songche').val());
 }
 

 //已收费用
 var yishou=0;
 if($('#yishou').val()){
  yishou=parseInt($('#yishou').val());
 }


 var yinshou=paiche_rent+qita+shuaka+songche-huodong_youhui+jieri;
 //是否开票
 var paiche_needtax=0;
 if($("input[name='paiche_needtax']:checked").val()=="1"){
  paiche_needtax=yinshou*0.1;
 }
 var two = paiche_needtax;
 var twoFixed = two.toFixed(2);
 $('#suijin').val(twoFixed);

 var ytwo_r = yinshou+paiche_needtax-yishou+paiche_deposit;
 var ytwoFixed_r = ytwo_r.toFixed(2);
 $("#yinshou").val(ytwoFixed_r);



}
function qingli(){
	$("#tian_a").val("");
	$("#shi").val("");
	$("#paiche_endDate").val("");
}


//点击开票计算

$('#plan_rentamount').bind('input propertychange', function(){
	if($(this).val()){
		jisuan_zujin();
	}
});
//计算租金
function jisuan_zujin(){
	var paiche_kehu=parseInt($("#paiche_kehu").val());
	var paiche_kehu_aaa=parseInt($("#paiche_kehu_aaa").val());
	if(paiche_kehu==3||paiche_kehu_aaa==3){
		$('#paiche_deposit').val(0);
	}
	if(!$('#paiche_startDate').val()){
		alert('用车开始时间不能为空！');
		return false;
	}
	//日租金
	var ri_zujin=0;
	if($('#plan_rentamount').val()){
		ri_zujin=parseInt($('#plan_rentamount').val());
	}
	//天数
	var tian=0;
	if($('#tian_a').val()){
		tian=parseInt($('#tian_a').val());
	}
	//小时

	var shi=0;
	if($('#shi').val()){
		shi=parseInt($('#shi').val());
	}
	var fen=0;
	if($('#fen').val()){
		fen=parseInt($('#fen').val());
	}

	//押金
	var paiche_deposit=0;
	if($('#paiche_deposit').val()){
		paiche_deposit=parseInt($('#paiche_deposit').val());
	}

	//租金
	var paiche_rent=0;
	if($('#paiche_rent').val()){
		paiche_rent=parseInt($('#paiche_rent').val());
	}

	
	//其他
	var qita=0;
	if($('#qita').val()){
		qita=parseInt($('#qita').val());
	}
	//刷卡费
	var shuaka=0;
	if($('#shuaka').val()){
		shuaka=parseInt($('#shuaka').val());
	}
	//送车费
	var songche=0;
	if($('#songche').val()){
		songche=parseInt($('#songche').val());
	}
	

	//已收费用
	var yishou=0;
	if($('#yishou').val()){
		yishou=parseInt($('#yishou').val());
	}
	//超时费
	var paiche_overTime=0;
	if($('#paiche_overTime').val()){
		paiche_overTime=parseInt($('#paiche_overTime').val());
	}
	//总租金
	var num_zujin=0;
	//超时费用
	var shi_fei=0;
	//活动优惠金额
	var huodong_youhui=0;
	//判断车辆类型
	var car_types=parseInt($('#car_types').val());
	var car_gongchang=parseInt($('#car_gongchang').val());
	var time_s=DateToUnix($('#paiche_startDate').val());
	var time_e=DateToUnix($('#paiche_endDate').val());
	//折扣
	var zhe=1;

	//节日服务费
	var jieri_money=0;

	//工厂车辆
	if(car_gongchang==1){
		//租车时间不在D时间段以内
		if(time_s>=time_ds&&time_e<=time_de){
			$("#huodong_id").val(0);
			$("#huodong_id").attr("disabled","disabled");
			//工厂车辆碰到D时间段租金固定
			num_zujin=ri_zujin*7;
			if(car_types==4||car_types==5){
				jieri_money=100*7;
			}else{
				jieri_money=200*7;
			}
		}
		//机动车辆
	}else{
		//搭到活动时间	
		if(time_as<time_e&&time_ce>time_s){
			zhe=1;
			$("#huodong_id").val(0);
			$("#huodong_id").attr("disabled","disabled");

			for(var i=time_as;i<time_ae;i=i+60*60*24){
				if(i>=time_s&&i<=time_e){
					if(car_types!=4&&car_types!=5){
						jieri_money=jieri_money+100;
					}else{
						jieri_money=jieri_money;
					}
					
				}
			}
			for(var i=time_bs;i<time_be;i=i+60*60*24){
				if(i>=time_s&&i<=time_e){
					if(car_types!=4&&car_types!=5){
						jieri_money=jieri_money+200;
					}else{
						
						jieri_money=jieri_money+100;
					}
					
				}
			}
			for(var i=time_cs;i<time_ce;i=i+60*60*24){
				if(i>=time_s&&i<=time_e){
					if(car_types!=4&&car_types!=5){
						jieri_money=jieri_money+100;
					}else{
						jieri_money=jieri_money;
					}
				}
			}
			if(tian>=30){
				jieri_money=0;
			}	
			
		//没搭到活动时间
		}else{
			$("#huodong_id").removeAttr("disabled");
				if(tian>9&&tian<20){
					zhe=0.95;
				}
				if(tian>19&&tian<30){
					zhe=0.90;
				}
				if(tian>29){
					zhe=0.85;
				}

		}
		num_zujin=tian*ri_zujin;

		//小时费用
		shi_fei=shi*paiche_overTime;
		//分钟费用
		if(fen>0){
			if(fen<=30){
				shi_fei=shi_fei+paiche_overTime/2;
			}else{
				shi_fei=shi_fei+paiche_overTime;
			}
		}
		//判断小时费用是否超过日租金
		if(shi_fei>ri_zujin){
			shi_fei=ri_zujin;
		}
		//租金
		num_zujin=(num_zujin+shi_fei)*zhe;
		num_zujin=Math.round(num_zujin*100)/100;
		
		
		//活动优惠
		if(huodong_money>0){
			if(ri_zujin*zhe<huodong_money){
				if(tian<huodong_tian){
					huodong_youhui=ri_zujin*tian*zhe;
				}else{
					huodong_youhui=ri_zujin*zhe*huodong_tian;
				}
			}else{
				if(tian<huodong_tian){
					huodong_youhui=huodong_money*tian;
				}else{
					huodong_youhui=huodong_money*huodong_tian;
				}
			}
			$("#huodong_youhui").val(huodong_youhui);
			}
	}
	if(parseInt($("#paiche_kehu").val())!=1&&parseInt($("#paiche_kehu_aaa").val())!=1&&parseInt($("#paiche_kehu").val())!=5&&parseInt($("#paiche_kehu_aaa").val())!=5){
		jieri_money=0;
	}
	if(parseInt($("#paiche_kehu").val())==4){
		num_zujin=0;
	}
	if(parseInt($("#paiche_kehu").val())==1||parseInt($("#paiche_kehu_aaa").val())==1||parseInt($("#paiche_kehu").val())==5||parseInt($("#paiche_kehu_aaa").val())==5){
		$('#paiche_rent').val(num_zujin);

	}else{
		num_zujin=parseInt($('#paiche_rent').val());
	}
	

	$('#jieri').val(jieri_money);
	var yinshou=num_zujin+qita+shuaka+songche+jieri_money;
	//是否开票
	var paiche_needtax=0;
	
	if(parseInt($("#paiche_needtax").val())==1){
		paiche_needtax=(yinshou-huodong_youhui)*0.1;
	}
	var two = paiche_needtax;
	var twoFixed = two.toFixed(2);
	$('#suijin').val(twoFixed);
	var ytwo = yinshou+paiche_needtax-yishou+paiche_deposit-huodong_youhui;
	var ytwoFixed = ytwo.toFixed(2);
	$("#yinshou").val(ytwoFixed);
	

	
}


//时间转成时间戳
function DateToUnix(string) {

                var f = string.split(' ', 2);

                var d = (f[0] ? f[0] : '').split('-', 3);

                var t = (f[1] ? f[1] : '').split(':', 3);

                return (new Date(

                        parseInt(d[0], 10) || null,

                        (parseInt(d[1], 10) || 1) - 1,

                        parseInt(d[2], 10) || null,

                        parseInt(t[0], 10) || null,

                        parseInt(t[1], 10) || null,

                        parseInt(t[2], 10) || null

                        )).getTime() / 1000;
}
function timestampToTime(timestamp) {
       var date = new Date(timestamp * 1000);//时间戳为10位需*1000，时间戳为13位的话不需乘1000
       var Y = date.getFullYear() + '-';
       var M = (date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1) : date.getMonth()+1) + '-';
       var D = (date.getDate() < 10 ? '0'+date.getDate() : date.getDate()) + ' ';
       var h = (date.getHours() < 10 ? '0'+date.getHours() : date.getHours()) + ':';
       var m = (date.getMinutes() < 10 ? '0'+date.getMinutes() : date.getMinutes()) + ':';
       var s = (date.getSeconds() < 10 ? '0'+date.getSeconds() : date.getSeconds());
        return Y+M+D+h+m+s;
    }

$('#form1').submit(function(){
		$('#submit').attr('disabled','disabled');
		$('#submit').val('正在提交');

});

$("#submit").click(function(){
	var paiche_kehu=parseInt($("#paiche_kehu").val());
	var paiche_kehu_aaa=parseInt($("#paiche_kehu_aaa").val());
	if(paiche_kehu==0){
		alert('请选择用车类型！');
		return false;
	}
	if(paiche_kehu==2||paiche_kehu_aaa==2){
		if($("#pintai").val()=="0"){
			alert('请选择平台客户！');
			return false;
		}

	}
	if(paiche_kehu==2||paiche_kehu==3||paiche_kehu_aaa==2||paiche_kehu_aaa==3){
		if(!parseInt($("#paiche_pintainum").val())>0){
			alert('请填写正确的平台单号！');
			return false;
		}

	}
	if(paiche_kehu!=4&&paiche_kehu_aaa!=4){
		if($("#paicheCounterShop").val()=="0"){
			alert('请选择业务归属！');
			return false;
		}
		//shop_id
		if($("#paicheCounterMan").val()=="0"){
			alert('请选择业务员！');
			return false;
		}
	}
	

	if(!(parseInt($("#shop_id").val())>0)){
		alert('请选择服务门店！');
		return false;
	}

	if($("#paiche_linker").val()==""){
		alert('请填写承租人姓名！');
		return false;
	}
	
	if(paidan_type_a=='diaoche'||paidan_type_b=="s"){
		if(paiche_kehu!=4&&paiche_kehu_aaa!=4){
			if($("#paiche_linkerNum").val()==""){
				if(paiche_kehu==5||paiche_kehu_aaa==5){
					alert('请填写承租人护照号码！');
				}else{
					alert('请填写承租人身份证号码！');
				}
				return false;
			}
			if(!yzshenfen($("#paiche_linkerNum").val())&&paiche_kehu!=5&&paiche_kehu_aaa!=5){
				alert('请填写正确的承租人身份证号码！');
				return false;
			}
			if(paiche_kehu!=4&&paiche_kehu_aaa!=4){
				if($("#paiche_linkerAdd").val()==""){
					alert('请填写承租人地址！');
					return false;
				}
			}
		}
			
	}
	
	//验证电话号码
	if(paiche_kehu!=4&&paiche_kehu_aaa!=4){
		if($("#paiche_linkerPhone").val()==""){
			alert('请填写承租人电话号码！');
			return false;
		}
		if(!yzphon($("#paiche_linkerPhone").val())){
			alert('请填写正确的承租人电话号码！');
			return false;
		}
	}
	

	if($('#paiche_promier').val()!=""){
		if($('#paiche_promierPhone').val()==""){
			alert('请填写担保人电话号码！');
			return false;
		}

		if(!yzphon($('#paiche_promierPhone').val())){
			alert('请填写正确的担保人电话号码！');
			return false;
		}
	}
	if($("#paicheCar").val()==""){
		alert('请选择车辆信息！');
		return false;
	}
	if(paiche_kehu!=4&&paiche_kehu_aaa!=4){
		if(!(parseInt($("#paiche_rent").val())>0)){
			alert('租金不能为空！');
			return false;
		}
	}
	
	if(paiche_kehu==3||paiche_kehu_aaa==3){
		if(!(parseInt($("#songche_a").val())>0)){
			alert('请选择是否送车！');
			return false;
		}
	}
	if($('#paiche_endDate').val()==""){
		alert('请填写用车时间！');
		return false;
	}
	
	
	if((paidan_type_a=='diaoche'||paidan_type_b=="s")&&(paiche_kehu==1||paiche_kehu_aaa==1||paiche_kehu==5||paiche_kehu_aaa==5)){
		if(parseInt($('#huodong_id').val())==99999){
			alert('请填选择是否参与活动！');
			return false;
		}
	}
	
	if(paiche_kehu!=4&&paiche_kehu_aaa!=4){
		if($('#paiche_line').val()==""){
			alert('开车线路不能为空！');
			return false;
		}
	}
	
	
	
	
})
//验证数字

function yanzhengShuZi(idNo){

	var regIdNo = /^[0-9]*$/;  
	if(!regIdNo.test(idNo)){  
	    alert("租车时间只能为整数，不能带有其他字符及空格！");
	    return false;  
	}else{
		return true;
	}  
}
//验证护照
function yzhuzhao(code){
    var pass= true;
    //if(!/^((1[45]\d{7})|(G\d{8})|(P\d{7})|(S\d{7,8}))?$/.test(code)){
        //pass=false;
    //}
    return pass;
}

//验证身份证号码
function yzshenfen(idNo){
	var regIdNo = /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/;  
	if(!regIdNo.test(idNo)){  
	     
	    return false;  
	}else{
		return true;
	}  
}

//验证手机号码
function yzphon(phon){

		var rex = /^1[3-9]+\d{9}$/;
		if(rex.test(phon)&&phon.length==11){
			return true;
		}else{
			return false;
		}
}
var yzm=0;
var paiche_linkerPhone;
var paiche_linkerPicture;
var paiche_linkerAdd;
var paiche_linker;
var paiche_linkerNum;

var nCount=60;
//取消验证码验证
$("#quxiao").click(function(){
	$('#yz_aaa').removeAttr("disabled");
	$('#haoma_a').css("display","none");
});
//确定验证
$("#queding").click(function(){
	//需要发送的手机号码
	$('#haoma_a').css("display","none");
	var shouji=$("input[name='shouji']:checked").val();
	paiche_linkerPhone=shouji;
	var t1=setInterval(function(){
		nCount=nCount-1;
		if(nCount>0){
			$('#yz_aaa').html(yz_aaa+"("+nCount+"后可重新获取)");
			$('#yz_aaa').attr("disabled","disabled");
		}else{
			$('#yz_aaa').html(yz_aaa);
			$('#yz_aaa').removeAttr("disabled");
			nCount=60;
			window.clearTimeout(t1);
		}
	},1000);
		getYzm(paiche_linkerPhone);
	
});





function shenfen(){
	$('#yz_aaa').attr("disabled","disabled");
	var paiche_linkerNum_a = $("#shenfen_a").val();
	var name_a = $("#name_a").val();

	if(name_a.length<2||name_a.length>30){
		$('#yz_aaa').removeAttr("disabled");
		alert('请填写正确的承租人姓名！');
		return false;
	}
	if(!yzshenfen(paiche_linkerNum_a)){
		$('#yz_aaa').removeAttr("disabled");
		alert('请填写正确的承租人身份证号码！！');
		return false;
	}


	$.ajax({
		type:'POST',
		url:'get_emp_shop.php?task=getphone',
		data:{"paiche_linkerNum":paiche_linkerNum_a,"paiche_linker":name_a},
		dataType:"json",
		cache: false,
		success:function(req){

			if(req['req']>0){

				$('#haoma_a').css("display","block");
				var aa=req['dianhua'];
				$("#haoma_b").html("");
				for(var i=0;i<Object.keys(aa).length;i++){
					var haoma="<label><input name='shouji' type='radio' checked value='"+aa[i]+"'/><span>"+aa[i]+"</span> </label><br/>";
					$("#haoma_b").append(haoma);
				}
				paiche_linkerPicture=req['paiche_linkerPicture'];
				paiche_linkerAdd=req['paiche_linkerAdd'];
				paiche_linker=req['paiche_linker'];
				paiche_linkerNum=req['paiche_linkerNum'];
			}else{
				alert('承租人姓名与承租人身份证号码匹配失败，请仔细检查！');
				$('#yz_aaa').removeAttr("disabled");
			}
			
		}
	});
}

var yz_aaa=$('#yz_aaa').html();
function getYzm(mobile){
	
	$.ajax({
		type:'POST',
		url:'get_emp_shop.php?task=getYzm',
		data:{"mobile":mobile},
		dataType:"json",
		cache: false,
		success:function(req){
			if(req['req']==0){
				alert('发送成功！');
				yzm=req['rdm'];
				
			}else{
				
				alert('发送失败！');
			}
			
		}
	});
	
}





//验证码验证
function yzm_yanzheng(){
	var yzm_aa=$("#yzm").val();
	if(parseInt(yzm)>0&&parseInt(yzm_aa)>0){
		if(parseInt(yzm)==parseInt(yzm_aa)){
			$('#paiche_linkerPhone').val(paiche_linkerPhone);
			$('#paiche_linkerAdd').val(paiche_linkerAdd);
			$('#paiche_linker').val(paiche_linker);
			$('#paiche_linkerNum').val(paiche_linkerNum);
			$("#paiche_stype").val(2);
			getPitcure(paiche_linkerNum,"",1);
			gethuodong_a();
		}else{
			alert("验证码错误！");
		}
	}else{
		alert("没有验证码！");
	}
}
var huodong_tian=0;
var huodong_money=0;
//根据身份证号码，活动id，查询客户是否可以使用该活动
function gethuodong_a(){
	
	if($('#paiche_linkerNum').val()!=""&&parseInt($('#huodong_id').val())>0&&$('#paiche_startDate').val()!=""&&$('#paiche_endDate').val()!=""){
		
		var paiche_linkerNum=$('#paiche_linkerNum').val();
		var huodong_id=$('#huodong_id').val();
		var paiche_startDate=$('#paiche_startDate').val();
		var paiche_endDate=$('#paiche_endDate').val();
		$.ajax({
			type:'POST',
			url:'get_emp_shop.php?task=gethuodong_a',
			data:{"paiche_linkerNum":paiche_linkerNum,"huodong_id":huodong_id,"paiche_startDate":paiche_startDate,"paiche_endDate":paiche_endDate},
			dataType:"json",
			cache: false,
			success:function(req){
					if(req['re']==1){
						huodong_tian=req['huodong']['tianshu'];
						huodong_money=req['huodong']['money'];
						if(huodong_tian==0){
							huodong_tian=0;
							huodong_money=0;
							$("#huodong_id").val(0);
							$("#huodong_youhui").val(0);
							alert('满足活动的天数不足一天，取消优惠！');
						}
						jisuan_zujin();
					}else if(req['re']==2){
						huodong_tian=0;
						huodong_money=0;
						$("#huodong_id").val(0);
						$("#huodong_youhui").val(0);
						alert('此客户已参加过此次活动！');
					}else if(req['re']==3){
						huodong_tian=0;
						huodong_money=0;
						$("#huodong_id").val(0);
						$("#huodong_youhui").val(0);
						alert('用车时间不在活用时间段以内！');
					}else{
						huodong_tian=0;
						huodong_money=0;
						$("#huodong_id").val(0);
						$("#huodong_youhui").val(0);
						alert('异常，请与管理员联系！');
					}		
			},
			error:function(){
				
			}
		});
	}else{
		

	}
	
}


//身份验证
function beginread_onclick(){
	$("#lkehu").css("display","none");
	$("#xin_kehu").css("display","none");
	rdcard.ReadCard();
	if (rdcard.bHaveCard){
		$("#paiche_linker").val(rdcard.NameS);
		$("#paiche_linkerNum").val(rdcard.CardNo);
		$("#paiche_linkerAdd").val(rdcard.Address);
		$("#paiche_stype").val(1);
		getPitcure(rdcard.CardNo,rdcard.JPGBuffer,1);
		rdcard.bHaveCard=false;
		$('#paiche_tupian').val("");
		$("#xin_kehu").css('display','none');
		paiche_linkerAdd.attr("readonly","readonly");
		paiche_linkerAdd.attr("unselectable","on");
		gethuodong_a();
	}
}

function beginread_onclick2(){
	rdcard.ReadCard();
	if (rdcard.bHaveCard){
		$("#paiche_promier").val(rdcard.NameS);
		$("#paiche_promierNum").val(rdcard.CardNo);
		$("#paiche_promierAdd").val(rdcard.Address);
		getPitcure(rdcard.CardNo,rdcard.JPGBuffer,2);
		rdcard.bHaveCard=false;
	}
}



function getPitcure(strCardNo,strBase64Code,nFlag){
	if (strCardNo!=""){
		$.ajax({
			  type:'POST',
			  url:'generatepicutrea.php',
			  data:{"IDcard":strCardNo,"Base64Code":strBase64Code},
			  dataType:"json",
			  cache: false,
			  async:false,
			  error: function(){
			      sre="err1";
			  },
			  
			  success:function(jsonmsg){
					if (nFlag==1){
						$("#img_linker_picture").attr('src','../../../thumb/upload/idpicture/'+strCardNo+'.jpg');
						$("#paiche_linkerPicture").val(strCardNo+'.jpg');
						$("#czr").css("display","table-row");
						var str=strCardNo.substr(0,4);
						var kh="";
						if(str=="3201"||str=="3202"||str=="3204"||str=="3205"||strCardNo.substr(0,2)=="31"){
							kh=kh+"本地";
							kh_a=1;
							//$('#paiche_leixing').val('本地客户');
						}else{
							//$('#paiche_leixing').val('外地客户');
							kh=kh+"外地";
						}
						var kh_ccc=""
						if(jsonmsg.length>0){
							kh=kh+"老客户";
							kh_a=1;
							for(var i=0;i<jsonmsg.length;i++){
								kh_ccc=kh_ccc+"<tr><td><a target='_blank' href='zijia_detail.php?uid="+jsonmsg[i]['paiche_id']+"'>"+jsonmsg[i]['paiche_contractNum']+"</a></td></tr>"
							}
						}else{
							kh=kh+"新客户";

						}
						$('#biaoti').html(kh);
						$("#table_a").append(kh_ccc);
						jisuan_zujin()
					}
					if (nFlag==2){
						$('#img_promier_picture').attr('src','../../../thumb/upload/idpicture/'+strCardNo+'.jpg');
						$("#paiche_promierPicture").val(strCardNo+'.jpg');
						$("#czr_a").css("display","table-row");
					}
			  }
		});
	}
}


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
var nCount_a=60;
var yz_bbb=$('#yz_bbb').html();
//人脸验证
function yzm_yanzheng_a(){
	$('#yz_bbb').attr("disabled","disabled");
	var idcard=$("#idcard_a").val();
	var realname=$("#realname").val();
	

	if(realname.length<2||realname.length>30){
		$('#yz_bbb').removeAttr("disabled");
		alert('请填写正确的承租人姓名！');
		return false;

	}
	if(!yzshenfen(idcard)){
		$('#yz_bbb').removeAttr("disabled");
		alert('请填写正确的承租人身份证号码！');
		return false;
	}

	
	//判断文件是否为空
	var fileInput = $('#tp_b').get(0).files[0];
	
	if(!fileInput){
		$('#yz_bbb').removeAttr("disabled");
		alert("请选择上传文件！");
	}

	//判断是否为图片文件
	var fileName = $("#tp_b")[0].files[0].name;
	var fileType = fileName.substr(fileName.lastIndexOf(".")).toUpperCase();
	if ( fileType != ".PNG"&& fileType != ".JPG" && fileType != ".JPEG") {
	    $('#yz_bbb').removeAttr("disabled");
	    alert("图片限于png,jpeg,jpg格式");
	    return false;
	} 
	
	var image;
  	var upload=document.getElementById("tp_b");

	var reader = new FileReader();
	
	if(!upload.files[0]){
		$('#yz_bbb').removeAttr("disabled");
		alert('请选择图片文件！');
		return false;
	}
	var t2=setInterval(function(){
		nCount_a=nCount_a-1;
		if(nCount_a>0){
			$('#yz_bbb').html(yz_bbb+"("+nCount_a+"后可重新验证)");
			$('#yz_bbb').attr("disabled","disabled");
		}else{
			$('#yz_bbb').html(yz_aaa);
			$('#yz_bbb').removeAttr("disabled");
				nCount_a=60;
				window.clearTimeout(t2);
		}
	},1000);
	reader.readAsDataURL(upload.files[0]);

	reader.onload = function(e) {
	var base=this.result;
	base=base.split("base64,");
	//return false;
	image=base[1];

	$.ajax({
		type:'POST',
		url:'generatepicutrea_a.php',
		data:{"IDcard":idcard,"Base64Code":image},
		dataType:"json",
		cache: false,
		async:false,

		error: function(){
			sre="err1";
		},
		success:function(jsonmsg){
			if(jsonmsg>0){
				$.ajax({
					type:'POST',
					url:'get_emp_shop.php?task=getRenlian',
					data:{"idcard":idcard,"realname":realname,"image":image},
					dataType:"json",
					cache: false,
					success:function(req){
						if(req>70){
							alert('匹配相似度'+req+'%,匹配成功');
							$("#paiche_tupian").val(jsonmsg+'.jpg');
							$("#paiche_linker").val(realname);
							$("#paiche_linkerNum").val(idcard);

							$("#paiche_linkerAdd").removeAttr("readonly");
							$("#paiche_linkerAdd").removeAttr("unselectable");
							$("#paiche_stype").val(3);
							$('#czr').css("display","none");
							$('#paiche_linkerPicture').val("");
							gethuodong_a();

						}else if(req.req==1){
							alert('匹配相似度'+req+'%,匹配失败');
						}else{
							alert('匹配失败，请仔细检查参数是否正确100！');
						}
						
					},
					error:function(){
						alert('匹配失败，请仔细检查参数是否正确200！');
					}
				});
			}
			
		}
	});
	
	
	  	
	  
	}
}

function xkehu_xianshi(){
	var xianshi=$("#xin_kehu").css('display');
	if(xianshi=="none"){
		$("#xin_kehu").css('display','block');
		$("#lkehu").css('display','none');
	}else{
		$("#xin_kehu").css('display','none');
	}
}

function lkehu_xianshi(){
	var xianshi=$("#lkehu").css('display');
	if(xianshi=="none"){
		$("#lkehu").css('display','block');
		$("#xin_kehu").css('display','none');
	}else{
		$("#lkehu").css('display','none');
	}
}

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

  





