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


//刷身份证验证
function beginread_onclick(){
  $("#xin_kehu").css('display','none');
    rdcard.ReadCard();
    if (rdcard.bHaveCard){
        $("#emp_name").val(rdcard.NameS);
        $("#emp_num").val(rdcard.CardNo);
        $("#emp_homeAdd").val(rdcard.Address);
        getPitcure(rdcard.JPGBuffer);
        rdcard.bHaveCard=false;
    }
}
//图片的存储
function getPitcure(strBase64Code){
        $.ajax({
              type:'POST',
              url:'generatepicutrea.php',
              data:{"Base64Code":strBase64Code},
              dataType:"json",
              cache: false,
              async:false,
              error: function(){
                  sre="err1";
              },
              success:function(jsonmsg){
                        $("#tupian").css("display","table-row");
                        $('#image').attr('src','../../../thumb/'+jsonmsg+'.jpg');
                        $("#emp_imagea").val(jsonmsg+'.jpg');
                        $("#emp_homeAdd").attr("readonly","readonly");
                        $("#emp_homeAdd").attr("unselectable","on");
                           
              }
        });
    
}
//人脸验证
function xkehu_xianshi(){
    var xianshi=$("#xin_kehu").css('display');
    if(xianshi=="none"){
        $("#xin_kehu").css('display','block');
        $("#lkehu").css('display','none');
    }else{
        $("#xin_kehu").css('display','none');
    }
}

var yz_bbb=$('#yz_bbb').html();

function yzm_yanzheng_a(){
    $('#yz_bbb').attr("disabled","disabled");
    var idcard=$("#idcard_a").val();
    var realname=$("#realname").val();
    

    if(realname.length<2||realname.length>30){
        $('#yz_bbb').removeAttr("disabled");
        alert('请填写正确的员工姓名！');
        return false;

    }
    if(!yzshenfen(idcard)){
        $('#yz_bbb').removeAttr("disabled");
        alert('请填写正确的员工的身份证号码！');
        return false;
    }
    
    //判断文件是否为空
    var fileInput = $('#tp_b').get(0).files[0];
    console.info(fileInput);
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
        url:'generatepicutrea.php',
        data:{"Base64Code":image},
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
                        if(req.req==0){
                            alert('匹配成功');
                            $("#tupian").css("display","table-row");
                            $('#image').attr('src','../../../thumb/'+jsonmsg+'.jpg');
                            $("#emp_imagea").val(jsonmsg+'.jpg');
                            $("#emp_name").val(realname);
                            $("#emp_num").val(idcard);


                            
                        }else if(req.req==1){
                            alert('匹配失败');
                        }else{
                            alert('异常');
                        }
                        
                        
                    },
                    error:function(){
                        alert('error:900');
                    }
                });
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
$("#tp_c").change(function(){
    

    var fileInput = $('#tp_c').get(0).files[0];
    console.info(fileInput);
    //判断是否为图片文件
    var fileName = $("#tp_c")[0].files[0].name;
    
    var fileType = fileName.substr(fileName.lastIndexOf(".")).toUpperCase();
    if ( fileType != ".PNG"&& fileType != ".JPG" && fileType != ".JPEG") {
        alert("图片限于png,jpeg,jpg格式");
        return false;
    } 
    var image;
    var upload=document.getElementById("tp_c");
    var reader = new FileReader();
    reader.readAsDataURL(upload.files[0]);
    reader.onload = function(e) {
    var base=this.result;
    base=base.split("base64,");
    //return false;
    image=base[1];
        $.ajax({
            type:'POST',
            url:'generatepicutrea.php',
            data:{"Base64Code":image},
            dataType:"json",
            cache: false,
            async:false,
            error: function(){
                sre="err1";
            },
            success:function(jsonmsg){
                $("#images_c").attr("display","block");
                 $('#images_c').attr('src','../../../thumb/'+jsonmsg+'.jpg');
                 $("#emp_image").val(jsonmsg+".jpg");
            }
        })
    }

});



$("#submit").click(function(){
        
       var emp_name=$("#emp_name").val();
       if(emp_name.length<2){
            alert("请填写正确的员工姓名！");
            return false;
       }
       var emp_num=$("#emp_num").val();

       if(!yzshenfen($("#emp_num").val())){
            alert("请填写正确的身份证号码！");
            return false;
       }

       var emp_homeAdd=$("#emp_homeAdd").val();
       if(emp_homeAdd==""){
            alert("请填写员工的家庭住址！");
            return false;
       }

       var emp_phone=$("#emp_phone").val();
       if(!yzphon(emp_phone)){
            alert("请填写正确的员工私人电话！");
            return false;
       }

       var dangqian_homeAdd=$("#dangqian_homeAdd").val();
       if(dangqian_homeAdd.length<5){
            alert("请填写完整的当前居住地址！");
            return false;
       }


       var jinji_name=$("#jinji_name").val();
       if(jinji_phone.length<2){
            alert("请填写正确的紧急联系人！");
            return false;
       }
       var jinji_phone=$("#jinji_phone").val();
       if(!yzphon(jinji_phone)){
            alert("请填写正确的紧急联系人电话！");
            return false;
       }

       
       var emp_kahao=$("#emp_kahao").val();
       if(emp_kahao.length<16||emp_kahao.length>19){
            alert("请填写正确的银行卡号码！");
            return false;
       }
      
       

       var emp_zhiweiid=parseInt($("#emp_phone").val());
       if(emp_zhiweiid==0){
            alert("请选择职位！");
            return false;
       }
       var emp_shopid=parseInt($("#emp_shopid").val());
       if(emp_shopid==0){
            alert("请选择所属门店！");
            return false;
       }
       

       var emp_addtime=$("#emp_addtime").val();
       if(emp_addtime==""){
            alert("请选择入职时间！");
            return false;
       }

       var emp_pactStartDate=$("#emp_pactStartDate").val();
       if(emp_pactStartDate==""){
            alert("请选择合同开始时间！");
            return false;
       }
       var emp_pactEndDate=$("#emp_pactEndDate").val();
       if(emp_pactEndDate==""){
            alert("请选择合同结束时间！");
            return false;
       }
       

       var emp_driverlicense=$("#emp_driverlicense").val();
       if(emp_driverlicense!=""){
            var emp_jiazhaotime=$("#emp_jiazhaotime").val();
            if(emp_jiazhaotime==""){
                alert("请选择驾照有效日期！");
                return false;
            }
            
       }
        var emp_post=parseInt($("#emp_post").val());
       if(emp_post==0){
            alert("请选择职位a！");
            return false;
       }

       
       
    });