//$("#xixi").css("display","none");
getPintai();
$("#paiche_pintaiid").change(function(){
	getPintai();
});

function getPintai(){
	var paiche_pintaiid=parseInt($("#paiche_pintaiid").val());
	if(paiche_pintaiid==1){
		$("#xixi").css("display","block");
		$("#paiche_cun").val(4);
		$("#paiche_cun").attr("disabled","disabled");
	}else{
		$("#xixi").css("display","none");
		$("#paiche_cun").val(0);
		$("#paiche_cun").removeAttr("disabled");
		
	}
}


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
							$("#paiche_stype").val(3);
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