var type_a=$("#type").val();
paiche_kehu(0);
//订单状态


//客户类型
function paiche_kehu(type){
	$("#paiche_pintaiid").val(0);
	paiche_pintaiid(0);
	if(type==1){
		$('#paicheCom').css("display","none");
		$('#kehu_a').css("display","block");
		$('#kehu_a').val("临时散客");
		$("#paiche_brother").css("display","none");
		$("#kehu").css("display","block");
		$('#dioache_a').css("display","table-row");
		$("#zujin").css("display","table-row");
		$("#guangbao").css("display","none");
	}else if(type==2){
		$('#paicheCom').css("display","block");
		$('#kehu_a').css("display","none");
		$("#paiche_brother").css("display","none");
		$("#kehu").css("display","none");
		$('#dioache_a').css("display","table-row");
		$("#zujin").css("display","table-row");
		$("#guangbao").css("display","none");
	}else if(type==3){
		$('#paicheCom').css("display","none");
		$('#kehu_a').css("display","none");
		$("#paiche_brother").css("display","block");
		$("#kehu").css("display","none");
		$('#dioache_a').css("display","none");
		$("#zujin").css("display","table-row");
		$("#guangbao").css("display","none");
	}else if(type==4){
		$('#paicheCom').css("display","none");
		$('#kehu_a').css("display","block");
		$('#kehu_a').val("光宝科技（常州）有限公司");
		$("#paiche_brother").css("display","none");
		$("#kehu").css("display","none");
		$('#dioache_a').css("display","table-row");
		$("#zujin").css("display","none");
		$("#guangbao").css("display","table-row");
	}else if(type==5){
		$('#paicheCom').css("display","none");
		$('#kehu_a').css("display","block");
		$('#kehu_a').val("门店取送车");
		$("#paiche_brother").css("display","none");
		$("#kehu").css("display","none");
		$('#dioache_a').css("display","none");
		$("#zujin").css("display","none");
		$("#guangbao").css("display","none");
	}else{
		$('#paicheCom').css("display","none");
		$('#kehu_a').css("display","none");
		$("#paiche_brother").css("display","none");
		$("#kehu").css("display","none");
		$('#dioache_a').css("display","none");
		$("#zujin").css("display","none");
		$("#guangbao").css("display","none");
	}
}

$('#paiche_kehu').change(function(){
	var type=$(this).val();
	paiche_kehu(type);
});



function paiche_pintaiid(type){
	$("#paicheCarKey").val("");
	$("#car_num").val("");
	$("#car_color").val("");
	$("#car_brand").val("");
	$("#car_types").val("");
	$("#car_motor").val("");
	$("#car_frame").val("");


	$("#emp_zhiweiid").val(0);
	$("#paicheDriver option").remove();

	$("#client_price").val(0);
	$("#paicheCar").val("");
	$("#paiche_linker").val('');
	$("#paiche_linkerPhone").val('');
	$("#paiche_needtax").val(0);
	$("#kaipiao").val(0);
	$("#tian_a").val(0);
	$("#paiche_endDate").val("");
	$("#shi_b").val(0);
	$("#paiche_rent").val("");
	$("#have_freeze_money").val("");
	$("#dioache_money").val("");
	$("#paiche_chaokmy").val("");
	$("#paiche_chaokms").val("");
	$("#paiche_chaoshi").val("");
	$("#dengdai").val("");
	$("#yingshou").val("");
	if(type!=2){
		if(type_a=="ss"){
			$("#shishidan").css("display","block");
		}else{
			$("#shishidan").css("display","none");
		}
		$("#diaoche_name").html('');
		$('#paiche_brothera').css("display","none");
		$('#cheliang').css("display","block");
		$('#baojia_a').css("display","none");
		if($('#paiche_kehu').val()==1){
			$('#kaipiao').css("display","table-row");
			$('.feiyong').css("display","table-row");
		}else if($('#paiche_kehu').val()==2){
			$('#kaipiao').css("display","none");
			$('.feiyong').css("display","table-row");
		}
		else if($('#paiche_kehu').val()==3){
			$('#kaipiao').css("display","none");
			$('.feiyong').css("display","none");
		}else{
			$('#kaipiao').css("display","none");
			$('.feiyong').css("display","none");
		}
	}else{
		var kehu=parseInt($("#paiche_kehu").val());
		if(kehu==4||kehu==2){
			$(".hidea").css("display","none");
			$(".hideb").css("display","table-cell");
		}else{
			$(".hidea").css("display","table-cell");
			$(".hideb").css("display","none");
		}
		$("#shishidan").css("display","none");
		$("#diaoche_name").html('调车公司');
		$('#paiche_brothera').css("display","block");
		$('#cheliang').css("display","none");
		$('#baojia_a').css("display","table-row");
		
		$('.feiyong').css("display","none");

		if($('#paiche_kehu').val()==1){
			$('#kaipiao').css("display","table-row");
			$('.feiyong').css("display","none");
		}else if($('#paiche_kehu').val()==2){
			$('#kaipiao').css("display","none");
			$('.feiyong').css("display","none");
		}
		else if($('#paiche_kehu').val()==3){
			$('#kaipiao').css("display","none");
			$('.feiyong').css("display","none");
		}else{
			$('#kaipiao').css("display","none");
			$('.feiyong').css("display","none");
		}
		
	}

}
$("#client_price").change(function (){
	var client_price=$(this).val();
	if(client_price>0&&client_price<5){
		$("#paiche_rent").val(100);
	}else{
		$("#paiche_rent").val(0);
	}
});
$('#paiche_pintaiid').change(function(){
	var type=$(this).val();
	paiche_pintaiid(type);
});

//取车
function get_car(){
	var key=$("#paicheCarKey").val();
	demo_iframe('index.php?task=get_car&key='+key+'&kh_a='+kh_a,'选择车辆',650,380,'login_js');

}
//选择开始时间
$("#paiche_startDate").click(function(){
	laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'});
});
function jisuan(sjianjian,shuzi){
	if(!$('#paiche_startDate').val()){
		alert('用车开始时间不能为空！');
		return false;
	}
	
	var tian_a=0;
	var shi_b=0;
	if($('#tian_a').val()){
		tian_a=parseInt($('#tian_a').val());
		
	}
	if($('#shi_b').val()){
		shi_b=parseInt($('#shi_b').val());
		
	}
	if(shuzi=="j"){
		if(sjianjian=="t"){
			$('#tian_a').val(tian_a+1);
			
		}else if(sjianjian=="s"){
			if(shi_b<24){
					$('#shi_b').val(shi_b+1);
				}	
		}
	}else{
		if(sjianjian=="t"){
			if(tian_a>0){
				$('#tian_a').val(tian_a-1);	
			}
		}else if(sjianjian=="s"){
			if(shi_b>0){
				$('#shi_b').val(shi_b-1);

			}
		}
	}
	jisuan_shijian();

}
function jisuan_shijian(){
	var tian_a=0;
	var shi_b=0;
	
	var time = $('#paiche_startDate').val();
	if($('#tian_a').val()!=""){
		
		if(!yanzhengShuZi($('#tian_a').val())){
			$('#tian_a').val(0);

		}else{
			tian_a=parseInt($('#tian_a').val());
		}
		
	}
	if($('#shi_b').val()!=""){
		if(!yanzhengShuZi($('#shi_b').val())){
			$('#shi_b').val(0);
		}else{
			shi_b=parseInt($('#shi_b').val());
		}
	}
	if(tian_a>999){
		alert('天数不能大于999');
		$('#tian_a').val("999");
		tian_a=999;
	}
	if(shi_b>23){
		alert('时间不能大于23');
		$('#shi_b').val("23");
		shi_b=23;
	}
	time_s=DateToUnix(time);
	var time_e=time_s+24*60*60*tian_a+60*60*shi_b;
	$('#paiche_endDate').val(timestampToTime(time_e));
			
		
}
//开票选择
$('#paiche_needtax').change(function(){
	
	//租金
	var paiche_rent=0;
	if($('#paiche_rent').val()){
	  paiche_rent=parseInt($('#paiche_rent').val());
	}
	if(parseInt($('#paiche_needtax').val())==1){
		$("#suijin").val(paiche_rent*0.1);
	}else{
		$("#suijin").val("");
	}
});

$('#form1').submit(function(){
	$('#submit').attr('disabled','disabled');
	$('#submit').val('正在提交');

});
$("#submit").click(function(){
	var zj = $("#paiche_rent").val();
	var paiche_line = $("#paiche_line").val();
    var dmoney = $("#have_freeze_money").val();
	var paiche_kehu=parseInt($("#paiche_kehu").val());
	var paiche_pintaiid=parseInt($("#paiche_pintaiid").val());
	if(paiche_kehu==0){
		alert('请选择客户来源');
		return false;
	}
	if(paiche_kehu==2){
		if(!parseInt($("#paicheCom").val())>0){
			alert('请选择企业客户');
			return false;
		}
	}

	if(paiche_kehu==3){
		if(!parseInt($("#paiche_brother").val())>0){
			alert('请选择调车企业');
			return false;
		}
	}

	if(paiche_pintaiid==0&&(paiche_kehu==1||paiche_kehu==2||paiche_kehu==4)){
			alert('请选择是否调车');
			return false;

	}
	if(paiche_pintaiid==2&&(paiche_kehu==1||paiche_kehu==2||paiche_kehu==4)){
		if(!parseInt($("#paiche_brothera").val())>0){
			alert('请选择调车企业');
			return false;
		}
	}
	
	if(paiche_kehu==1){
		if(!$("#paiche_linker").val()){
			alert('请填写客户姓名');
			return false;
		}
		if(!$("#paiche_linkerPhone").val()){
			alert('请填写客户电话号码');
			return false;
		}
		
	}
	if(paiche_pintaiid!=2){
		if(!$("#paicheCar").val()){
			alert('请选择车辆');
			return false;
		}
	}
	if(type_a=="ss"&&paiche_pintaiid!=2){

		if(!parseInt($("#emp_zhiweiid").val())>0){
			alert('请选择司机类型');
			return false;
		}
		if(!parseInt($("#paicheDriver").val())>0){
			alert('请选择司机');
			return false;
		}
	}
	if($('#paiche_endDate').val()==""){
		alert('请填写用车时间！');
		return false;
	}

	if(paiche_kehu!=4&&paiche_kehu!=5){
		if(!zj||zj==0){
	        alert("请填写租金！");
	        return false;
	    }
	}

	if(paiche_kehu==4){
		if(!parseInt($("#client_price").val())>0){
			alert('请选择光宝用车模式！');
			return false;
		}
	}

    if(paiche_pintaiid == 2){
        if(!dmoney||dmoney==0){
            alert("请填写调车公司报价！");
            return false;
        }
    }
    if(!paiche_line){
            alert("车型及行程!");
            return false;
       
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

//验证手机
function phone(){
	var phone = $("#paiche_linkerPhone").val();
	if(!(/^1[3456789]\d{9}$/.test(phone))){ 
        alert("请填写正确11位手机号码！"); 
        $("#paiche_linkerPhone").val(""); 
        return false; 
    }
}


function totalCost(){
	var paiche_kehu=parseInt($("#paiche_kehu").val());
	if(paiche_kehu!=4){
		var have_freeze_money = parseFloat($("#have_freeze_money").val());
		var paiche_rent = parseFloat($("#paiche_rent").val());
		var dioache_money = parseFloat($("#dioache_money").val());
		if(have_freeze_money>paiche_rent){
			alert("调车公司报价不能大于租金！");
			$("#have_freeze_money").val(paiche_rent);
		}
		if(dioache_money>paiche_rent){
			alert("调车公司收现不能大于租金！");
			$("#dioache_money").val(paiche_rent);
		}
	}
	
	
	
}
$("#emp_zhiweiid").change(function(){
    var emp_zhiweiid=$('#emp_zhiweiid').val();
    $("#paicheDriver option").remove();
    if(parseInt(emp_zhiweiid)>0){
        $.ajax({
            type:'POST',
            url:'index.php?task=getSiji',
            data:{"emp_zhiweiid":emp_zhiweiid},
            dataType:"json",
            cache: false,
            success:function(req){
               
                $("#paicheDriver").append("<option  value='0'>请选择</option>");
                for(var i=0;i<req.length;i++){
                    $("#paicheDriver").append("<option  value='"+req[i]['emp_id']+"'>"+req[i]['emp_name']+"</option>");
                } 
            }
        });
    }
    
})