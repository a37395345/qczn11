$('#paicheCom').change(function(){
	var paicheCom=parseInt($(this).val());
	$('#paiche_linkerPhone').val("");
	$("#paiche_linker option").remove();
	$('#paiche_linkerAdd').val("");
	$('#paicheCounterShop').val("");
	$('#paicheCounterShop_name').val("");
	$('#paicheCounterMan').val("");
	$('#paicheCounterMan_name').val("");
	if(paicheCom==0){
		return false;
	}
	$.ajax({
		type:'POST',
		url:'index.php?task=getClient',
		data:{"paicheCom":paicheCom},
		dataType:"json",
		cache: false,
		success:function(req){
			//console.log(req);
			$('#paiche_linkerAdd').val(req.client.client_add);
			$('#paicheCounterShop').val(req.client.client_shopid);
			$('#paicheCounterShop_name').val(req.client.shop_name);
			$('#paicheCounterMan').val(req.client.client_salesman);
			$('#paicheCounterMan_name').val(req.client.emp_name);
			$('#paiche_linkerPhone').val(req.list[0]['phone']);
			for(var i=0;i<req.list.length;i++){
				$("#paiche_linker").append("<option  value='"+req.list[i]['name']+"'>"+req.list[i]['name']+"</option>");
			}
			 
			
		}
	});
})

$('#paiche_linker').change(function(){
	var paicheCom=parseInt($("#paicheCom").val());
	var paiche_linker=$(this).val();
	$('#paiche_linkerPhone').val("");
	$.ajax({
		type:'POST',
		url:'index.php?task=getClient_lianxi',
		data:{"paicheCom":paicheCom,"paiche_linker":paiche_linker},
		dataType:"json",
		cache: false,
		success:function(req){
			$('#paiche_linkerPhone').val(req);
			 	
		}
	});

})

$(function(){
	$(".btnj").click(function(){
		var tian=parseInt($("#tian").val());
		if(tian>1){
			tian--;
			$("#tian").val(tian);
		}else{
			$("#tian").val(0);
		}
		jisuan_shijian();
	});
	$(".btnz").click(function(){
		var tian=parseInt($("#tian").val());
		if(isNaN(tian)){
			$("#tian").val(1);
		}else{
		tian++;
		$("#tian").val(tian);
		}
		jisuan_shijian();
	});
})

$(function(){
	$(".btnyj").click(function(){
		var yue=parseInt($("#yue").val());
		if(yue>1){
			yue--;
			$("#yue").val(yue);
		}else{
			$("#yue").val(0);
		}
		jisuan_shijian();
	});
	$(".btnyz").click(function(){
		var yue=parseInt($("#yue").val());
		if(isNaN(yue)){
			$("#yue").val(1);
		}else{
		yue++;
		$("#yue").val(yue);
		}
		jisuan_shijian();
	});
});

$(function(){
	$(".xdd").click(function(){
		var startTime = $("#paiche_startDate").val();
		if(!startTime){
			alert("请先选择用车开始时间！");
			$("#paiche_endDate").val("");
			$("#yue").val(0);
			$("#tian").val(0);
		}
		return false;
	})
})

function jisuan_shijian(){
	var startTime = $("#paiche_startDate").val();
	var yue=parseInt($("#yue").val());
	var tian=parseInt($("#tian").val());
	//var startTime=startTime.split('-');
	var paiche_endDate = $("#paiche_endDate").val();
	nian=parseInt(startTime[0]);
	yue_a=(startTime[1]);
	//console.log(nian);
	//console.log(yue_a)
	//console.log(startTime);
	if(tian>50){
		alert("使用天数不能超过50天!");
		$("#tian").val(50);
	}

	

	var xdd1 = moment(startTime).add(tian*1, 'days').add(yue*1, 'months').format('YYYY-MM-DD HH:mm:ss'); 
	var xdd2 = moment(xdd1).valueOf();
	//var xdd3 = xdd2-1;
	if(tian==0&&yue==0){
		xdd3=xdd2
	}else{
		xdd3=xdd2-1
	}
	var xdd4 = moment(xdd3).format('YYYY-MM-DD HH:mm:ss');
	$("#paiche_endDate").val(xdd4);

	
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


//用车数据
$(function(){
	//用车开始时间
	var startTime = $("#paiche_startDate").val();
	var selmonth = $("#yue").val();

    $("#paiche_startDate").click(function(){
    	//alert("111")
    	laydate({
    		elem:"#paiche_startDate",
    		format: 'YYYY-MM-DD 00:00:00',
	        istime: true, 
	        choose: function(datas){ //选择日期完毕的回调
        		//var sDate = DateToUnix(datas);
        		console.log(datas);
			}
	    });
    });

    //使用月数只能是整数
    $("#yue").on('keyup',function(){
    	if(! /^\d+$/.test(this.value)){
	        this.value='';
	    }
    }); 
})



//租金 费用



function totalCost(){
    var rent = Number($("#paiche_rent").val());
    var deposit = Number($("#paiche_deposit").val());
        if(isNaN(deposit)){
            var numd = rent;
            numd = numd.toFixed(2);
            $("#yingshou").val(numd);
        }else{
            var nums = rent+deposit;
            nums = nums.toFixed(2);
            $("#yingshou").val(nums);
        }
}



function xdd2(){
    var vs = $("#paiche_needtax option:selected").val();
    if(vs==1){
        var rent = Number($("#paiche_rent").val());
        var deposit = Number($("#paiche_deposit").val());
       
        
            if(isNaN(deposit)){
                var numz = rent+tax;
                numz = numz.toFixed(2);
                $("#yingshou").val(numz);
            }else{
                var numx = rent+deposit+tax;
                numx = numx.toFixed(2);
                $("#yingshou").val(numx);
            }
    }else if(vs==0){
        totalCost();
    }else{
        
    }
}

//提交
$(function(){
	$("#submit").click(function(){
		var vs = $("#paicheCom option:selected").val();
		var linkAdd = $("#paiche_linkerAdd").val();
		var paiche_linker = $("#paiche_linker").val();
		var paiche_linkerPhone = $("#paiche_linkerPhone").val();
		var paicheCounterShop_name = $("#paicheCounterShop_name").val();
		var paicheCounterMan_name = $("#paicheCounterMan_name").val();
		var paiche_startDate = $("#paiche_startDate").val();
		var paiche_endDate = $("#paiche_endDate").val();
		var paiche_rent = $("#paiche_rent").val();
		if($("#paicheCom option:selected")==false||vs==0){
			alert("请选择公司名称！");
			return false;
		}
		if(!linkAdd){
			alert("请填写联系人地址！");
			return false;
		}
		if(!paiche_linker){
			alert("请填写联系人！");
			return false;
		}
		if(!paiche_linkerPhone){
			alert("请填写联系人电话！");
			return false;
		}
		if(!paicheCounterShop_name){
			alert("请填写业务门店！");
			return false;
		}
		if(!paicheCounterMan_name){
			alert("请填写业务员！");
			return false;
		}
		if(!paiche_startDate){
			alert("请选择用车开始时间！");
			return false;
		}
		if(!paiche_endDate){
			alert("请填写用车结束时间！");
			return false;
		}
		if(!paiche_rent){
			alert("请填写租金！");
			return false;
		}
	});
});




