/**
 * 
 */
var nNowPage=1;
var nTotalPage=1;
var sNowType="";
var sPriceType="";
$(document).ready(function(){
    	//获取
	//getCarList(sNowType,sPriceType,nNowPage);
    	//点击筛选按钮
	$('#btnSearch').click(function(){
	    sNowType="";
	    sPriceType="";
	    nNowPage=1;
            $("input[name='cartype']:checkbox").each(function(){ 
        	if(this.checked){
                    sNowType += $(this).val()+",";
                }
            });
            sPriceType=$('input[name="carprice"]:checked').val();
            getCarList(sNowType,sPriceType,nNowPage);
	});
    	//上一页
	$('#last').click(function(){
	    sNowType="";
	    sPriceType="";
            $("input[name='cartype']:checkbox").each(function(){ 
        	if(this.checked){
                    sNowType += $(this).val()+",";
                }
            });
            sPriceType=$('input[name="carprice"]:checked').val();
            nNowPage=parseInt($("#nowpage").val());
	    nTotalPage=parseInt($("#totalpage").val());
	    if (nNowPage>1){
		nNowPage--;
		getCarList(sNowType,sPriceType,nNowPage);
	    }
	});
	//下一页
	$('#next').click(function(){
	    sNowType="";
	    sPriceType="";
            $("input[name='cartype']:checkbox").each(function(){ 
        	if(this.checked){
                    sNowType += $(this).val()+",";
                }
            });
            sPriceType=$('input[name="carprice"]:checked').val();
	    nNowPage=parseInt($("#nowpage").val());
	    nTotalPage=parseInt($("#totalpage").val());
	    if (nNowPage<nTotalPage){
		nNowPage++;
		getCarList(sNowType,sPriceType,nNowPage);
	    }
	});
});
setTimeout('getCarList("","",1)',1000);

//Navigate to the next page on swipeleft
$( document ).on( "swipeleft", ".list", function( event ) {				
    sNowType="";
    sPriceType="";
    $("input[name='cartype']:checkbox").each(function(){ 
	if(this.checked){
            sNowType += $(this).val()+",";
        }
    });
    sPriceType=$('input[name="carprice"]:checked').val();
    nNowPage=parseInt($("#nowpage").val());
    nTotalPage=parseInt($("#totalpage").val());
    if (nNowPage<nTotalPage){
	nNowPage++;
	location.href="wap.php?cartype="+sNowType+"&carprice="+sPriceType+"&page="+nNowPage;
    }
		
});
$( document ).on( "swiperight", ".list", function( event ) {		
    sNowType="";
    sPriceType="";
    $("input[name='cartype']:checkbox").each(function(){ 
	if(this.checked){
            sNowType += $(this).val()+",";
        }
    });
    sPriceType=$('input[name="carprice"]:checked').val();
    nNowPage=parseInt($("#nowpage").val());
    nTotalPage=parseInt($("#totalpage").val());
    if (nNowPage>1){
	nNowPage--;
	location.href="wap.php?cartype="+sNowType+"&carprice="+sPriceType+"&page="+nNowPage;
    }
});

$( document ).on( "swipeleft", ".list_2", function( event ) {				
	if (nowI<lists.length-1){
			nowI++;
			showPro(nowI);
	}
});
$( document ).on( "swiperight", ".list_2", function( event ) {		
	if (nowI>0){
			nowI--;
			showPro(nowI);
	}
});

$( document ).on( "tap", ".thumb", function( event ) {		
    $('#showbanner,#list_2,#next3,#last3,#mymenu').css("display", "block");
});

function getCarList(sType,sPrice,nPage){	
	//获得车辆
	$.ajax({
		type:'POST',
		url:'ajaxOrder.php',
		data:{cartype:sType,carprice:sPrice,page:nPage},
		dataType:"json", 
		cache: false,
		async:false,
		error: function(){
		    alert('获取列表出错！');
		    $('.list').html("");
		},
		beforeSend:function(XMLHttpRequest){
			$('.list').html("<img src='images/wait.gif' />");
	       },
	        complete:function(XMLHttpRequest,textStatus){
	        	  //$('.list').empty();
	        },
		success:function(jsonmsg){
		    if (jsonmsg.status==0){
			var nRe=jsonmsg.totalRecords;
			if (nRe>0){
			    	strHtml="";
			    	var dataObj = jsonmsg.data;
				for (var i=0;i<nRe;i++){
				    	strHtml=strHtml+"<li><div class=\"thumb\" id=\""+dataObj[i].car_id+"\"><div class=\"showprice\">"+dataObj[i].car_price+"</div>";
				    	if (dataObj[i].car_photo==undefined){
				    	    strHtml=strHtml+"<img src=\"images/nopic.png \" width=\"310\" height=\"233\"/>";
				    	}else{
				    	    strHtml=strHtml+"<img src=\"thumb/"+dataObj[i].car_photo+" \" width=\"310\" height=\"233\"/>";
				    	}
				    	strHtml=strHtml+"</div>";
					strHtml=strHtml+"<p>苏D"+dataObj[i].car_num+"</p>";
					strHtml=strHtml+"</li>";
				}
				$('.list').html(strHtml);
			}
		    }	
		}
	});
	
}
