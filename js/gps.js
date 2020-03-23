$(function(){
	$(".btnyj").click(function(){
		//alert("111")
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
		//alert("111")
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
		let car_num = $("#car_num").val();
		let xdd;
		if(!car_num){
		alert("请先选择车辆！");
		$("#yue").val(0);
		$("#paiche_endDate").val(xdd);
	}
		return false;
	})
});


function jisuan_shijian(){
	let startTime = $("#paiche_startDate").val();
	let yue = parseInt($("#yue").val());
	var xdd1 = moment(startTime).add(yue*30, 'days').format('YYYY-MM-DD HH:mm:ss');
	var xdd2 = moment(xdd1).valueOf();
	var xdd3 = moment(xdd2).format('YYYY-MM-DD HH:mm:ss');
	$("#paiche_endDate").val(xdd3);

	let car_amount  =$("#car_amount").val();
	var paiche_rent = parseFloat((car_amount*0.015))*yue+parseFloat(car_amount);
	$("#paiche_rent").val(paiche_rent);
	let yue_money = (parseFloat(paiche_rent/yue)).toFixed(2);
	$("#yue_money").val(yue_money);
	xdd();
}

function xdd(){
	//alert("111")
	let paiche_deposit = $("#paiche_deposit").val();
	yue_money = parseFloat($("#yue_money").val());
	if(!paiche_deposit){
		$("#min_money").val(yue_money);
	}else{
		$("#min_money").val(parseFloat(paiche_deposit)+yue_money);
	}
}

//选择车辆
function get_car(){
		var key=$("#paicheCarKey").val();
		demo_iframe('index.php?task=get_car&key='+key,'选择车辆',650,380,'login_js');
}
$("#paiche_startDate").click(function(){
	
		laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'});
		//qingli();
	
});



//身份验证
function beginread_onclick(){
	
	$("#xin_kehu").css("display","none");
	rdcard.ReadCard();

	if (rdcard.bHaveCard){
		$("#paiche_linker").val(rdcard.NameS);
		$("#paiche_linkerNum").val(rdcard.CardNo);
		$("#paiche_linkerAdd").val(rdcard.Address);
		//验证身份的方式
		$("#paiche_stype").val(1);
		getPitcure(rdcard.CardNo,rdcard.JPGBuffer);
		rdcard.bHaveCard=false;
		//gethuodong_a();

	}
}

function getPitcure(strCardNo,strBase64Code){
	//alert(strCardNo);
	if (strCardNo!=""){
		$.ajax({
			  type:'POST',
			  url:'index.php?task=generatepicutrea',
			  data:{"IDcard":strCardNo,"Base64Code":strBase64Code},
			  dataType:"json",
			  cache: false,
			  async:false,
			  error: function(){
			      sre="err1";
			  },
			  success:function(req){

			  	if(req==1){
			  		$("#img_linker_picture").attr('src','../../../thumb/upload/idpicture/'+strCardNo+'.jpg');
					$("#paiche_linkerPicture").val(strCardNo+'.jpg');
					$("#czr_a").css("display","table-row");
					$("#czr").css("display","table");

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
function xkehu_xianshi(){
	var xianshi=$("#xin_kehu").css('display');
	if(xianshi=="none"){
		$("#xin_kehu").css('display','block');
	}else{
		$("#xin_kehu").css('display','none');
	}
}
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
		url:'index.php?task=generatepicutrea_a',
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
					url:'index.php?task=getRenlian',
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
							$("#paiche_linkerAdd").attr("placeholder","必填");
							$(".sf_type").val("人脸识别验证");
							$("#czr_a").css("display","none");
							$("#czr").css("display","table");
							
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
//验证身份证号码
function yzshenfen(idNo){
	var regIdNo = /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/;  
	if(!regIdNo.test(idNo)){  
	     
	    return false;  
	}else{
		return true;
	}  
}
$(function(){
	$("#submit").click(function(){
		let car_num = $("#car_num").val();
		let realname = $("#realname").val();
		let idcard_a = $("#idcard_a").val();
		let paiche_linkerPhone = $("#paiche_linkerPhone").val();
		let paiche_linkerAdd = $("#paiche_linkerAdd").val();
		let yue = $("#yue").val();
		if(!realname){
		alert("请先填写承租人姓名！");
		return false;
		}
		if(!idcard_a){
		alert("请先填写承租人信息！");
		return false;
		}
		if(!paiche_linkerPhone){
		alert("请先填写承租人电话号码！");
		return false;
		}
		if(!paiche_linkerAdd){
		alert("请先填写承租人地址！");
		return false;
		}
		if(!car_num){
		alert("请先选择车辆！");
		return false;
		}
		if(yue==0){
		alert("请选择使用月数！");
		return false;
		}
	})
});

$(function(){
	let paiche_stype = $("#paiche_stype").val();
	if(paiche_stype==1){
		$(".sf_type").val("刷身份证验证");
	}else if(paiche_stype==3){
		$(".sf_type").val("人脸识别验证");
	}
});
