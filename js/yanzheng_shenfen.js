var paiche_linker=$("#paiche_linker").val();
var paiche_linkerNum=$("#paiche_linkerNum").val();
function xkehu_xianshi(){
	var xianshi=$("#xin_kehu").css('display');
	if(xianshi=="none"){
		$("#xin_kehu").css('display','block');
	}else{
		$("#xin_kehu").css('display','none');
	}
}

//身份验证
function beginread_onclick(){
	$("#xin_kehu").css("display","none");
	rdcard.ReadCard();
	if (rdcard.bHaveCard){
		if(paiche_linker==rdcard.NameS&&paiche_linkerNum==rdcard.CardNo){
			alert('验证成功，请继续下一步操作！');
			$("#submit").css("display","block");
		}else{
			alert('身份证验证成功但与当前订单承租人信息不匹配，请重新验证！');
		}
	}else{
		alert('验证失败！');
	}
}
var nCount_a=60;
var yz_bbb=$('#yz_bbb').html();

function huanche(){
	//alert('aa');
	$('#yz_bbb').attr("disabled","disabled");
	var idcard=$("#idcard_a").val();
	var realname=$("#realname").val();
	

	if(realname.length<2||realname.length>30){
		$('#yz_bbb').removeAttr("disabled");
		alert('请填写正确的承租人姓名！');
		return false;

	}

	if(!idcard){
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
					url:'get_emp_shop.php?task=getRenlian',
					data:{"idcard":idcard,"realname":realname,"image":image},
					dataType:"json",
					cache: false,
					success:function(req){
						if(req>70){
							alert('匹配相似度'+req+'%,匹配成功,请继续下一步操作');
							$("#submit").css("display","block");

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

