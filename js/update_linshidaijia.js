//验证手机
function phone(){
	var phone = $("#paiche_linkerPhone").val();
	if(!(/^1[3456789]\d{9}$/.test(phone))){ 
        alert("请填写正确11位手机号码！"); 
        $("#paiche_linkerPhone").val(""); 
        return false; 
    }
}
//选择开始时间
$("#paiche_startDate").click(function(){
	laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'});
});
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
	var zj = $("#paiche_rent").val();
	var paiche_line = $("#paiche_line").val();
    var dmoney = $("#have_freeze_money").val();
	var paiche_kehu=parseInt($("#paiche_kehu").val());
	var paiche_pintaiid=parseInt($("#paiche_pintaiid").val());

	
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
	
	if($('#paiche_endDate').val()==""){
		alert('请填写用车时间！');
		return false;
	}

	if(paiche_kehu==4){
		if(!parseInt($("#client_price").val())>0){
			alert('请选择光宝用车模式！');
			return false;
		}
	}

    if(!paiche_line){
            alert("车型及行程!");
            return false;
       
    }
    
	
	

	
})
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
$("#client_price").change(function (){
	var client_price=$(this).val();
	if(client_price>0&&client_price<5){
		$("#paiche_rent").val(100);
	}else{
		$("#paiche_rent").val(0);
	}
});
