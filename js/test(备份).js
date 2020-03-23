    var list=[];
    var p=1;
    var per_page=15;
    var count;
    //搜索
      $("#up").click(function(){
            var content=$("#content").css('display');
            if(content=="none"){
                
            $("#content").css('display','block');
            $('#up').removeClass("fa-chevron-down");
            $('#up').addClass("fa-chevron-up");
            $(".car").css("margin-top","380px");
            }else{
                $("#content").css('display','none');
                $('#up').removeClass("fa-chevron-up");
                $('#up').addClass("fa-chevron-down");
                $(".car").css("margin-top","166px");
            }
        });
    //初始时间
    var time_jin=parseInt($("#time").val());
    var time=parseInt($("#time").val()-9*60*60*24);
    gettime();
    function gettime(){
       var s_time=timestampToTime(time);
       var e_time=timestampToTime(time+30*60*60*24);
       $("#showDate").html(s_time+"- "+e_time);
       for(var i=0;i<30;i++){
            $("#riqi"+(i+1)+" a").html(timestampToTime_a(time+i*60*60*24));
            $("#riqi"+(i+1)).removeClass("current");
            if(time_jin==time+i*60*60*24){
                $("#riqi"+(i+1)).addClass("current");
            }
        var xingqi=getWeek(new Date(timestampToTime(time+i*60*60*24)));
        $("#xingqi"+(i+1)).html(xingqi);
       }
       $("#paiche_startDate").val(timestampToTime(time));
       xuanran();
    }




    //选择时间
    $("#paiche_startDate").click(function(){
            laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss',choose:checkDate});
            
            
    });












  

          

//根据时间获取星期
    function getWeek(date) {
      var week;
      if(date.getDay() == 0) week = "Su"
      if(date.getDay() == 1) week = "Mo"
      if(date.getDay() == 2) week = "Tu"
      if(date.getDay() == 3) week = "We"
      if(date.getDay() == 4) week = "Th"
      if(date.getDay() == 5) week = "Fr"
      if(date.getDay() == 6) week = "Sa"
      return week;
  }

  getList(2);

  
$(document).scroll(
            function() {
                if ($(document).scrollTop() + window.innerHeight == $(document)
                        .height()) {
                    getList(1)
                }
            });


  function getList(index){
    
    if(index==2){
      p=1;
      
      list.length = 0;
    }else{
      p=p+1;
    }
    if(!count>0||count>(p+1)*per_page||count>15){
      var layer_index = layer.load(2, {
          shade: [0.1,'#fff'], //0.1透明度的白色背景
          offset: 'auto'
      });
    }
    var minrent=$("#minrent").val();
    var maxrent=$("#maxrent").val();
    var carnum=$("#carnum").val();
    //alert(carnum);
    var cartype=$("#cartype").val();
    var rentsort=$("#rentsort").val();
    
    $.ajax({
      type:'POST',
      url:'index.php?task=getCartime',
      data:{"p":p,
      "minrent":minrent,
      "maxrent":maxrent,
      "carnum":carnum,
      "cartype":cartype,
      "rentsort":rentsort,
      "per_page":per_page},
      dataType:"json",
      cache: false,
      success:function(req){
        //console.log(req);
        if(req['car_list']){
          for(var i=0;i<req['car_list'].length;i++){
            list.push(req['car_list'][i]);
            
           }
        }
          
           count=req['count'];
            var jiazai=p*per_page;
            if(count<p*per_page){
              jiazai=count;
            }
            $("#count").html("共"+count+"辆车&nbsp;&nbsp;&nbsp;&nbsp;已加载"+jiazai+"辆");
           xuanran();
           layer.close(layer_index);
            $("#content").css('display','none');
            $('#up').removeClass("fa-chevron-up");
            $('#up').addClass("fa-chevron-down");
            $(".car").css("margin-top","166px");

          }

    });
  }
  //渲染
  function xuanran(){
    console.log(list);
    $("#tbody").html("");
    if(list.length>0){
      for(var i=0;i<list.length;i++){
              var html_a="<tr><th bgcolor="+list[i]['car_status']+" width='10%'>苏D"+list[i]['car_num']+"<div class='contact-box'><div class='col-sm-6 car_img' style='width:206px;height:165px;'><div class='text-center'><img src=../../../thumb/"+list[i]['car_image']+"><div style='color:#000;' class='car_name1'>"+list[i]['car_model']+"</div></div></div><div class='col-sm-6 car_txt'><h4>苏D"+list[i]['car_num']+"</h4><p>状态：<span>"+list[i]['car_status']+"</span></p><p>租金："+list[i]['plan_rentamount']+"元/天</p><p>老客户押金："+list[i]['plan_deposit1']+"元/天</p><p>新客户押金："+list[i]['plan_deposit2']+"元/天</p></div></div></th><td width='90%' class='tdfirst td2401' day='24'>";
              //显示开始时间
              var s_timea=time;
              //显示结束的时间
              var e_timea=time+30*60*60*24;
              //车辆信息div
              // var xdd="";
              // xdd+="<div class='contact-box'><div class='col-sm-6' style='width:206px;height:165px;'><div class='text-center'>图片展示</div></div><div class='col-sm-6'><h4>苏D"+list[i]['car_num']+"</h4><p>租金："+list[i]['plan_rentamount']+"</p><p>老客户押金：30000元/天</p><p>新客户押金：50000元/天</p></div></div>"
              // $("#carDetails").html(xdd);

              //自驾预约
              $.each(list[i]["time"], function (k, item) {
                $.each(item, function (j, item_a) {
                      //派车单开始时间
                      var s_time=item_a['paiche_startDate'];
                      s_time=DateToUnix(s_time);
                      //派车单结束时间
                      var e_time=item_a['paiche_endDate'];
                      e_time=DateToUnix(e_time);
                      var left=(s_time-s_timea)*100/(e_timea-s_timea);
                      var width=(e_time-s_time)*100/(e_timea-s_timea);

                      //背景颜色
                      var bcolor="red";
                      if(k=="zijia_yuyue"||k=="cqzj_yuyue"||k=="lsdj_yuyue"||k=="cqdj_yuyue"||k=="dk_yuyue"){
                        bcolor="#82bdf7";
                        //car_lx="长期自驾预约";
                      }
                      if(k=="zijia_shishi"||k=="cqzj_shishi"||k=="lsdj_shishi"||k=="cqdj_shishi"||k=="dk_shishi"){
                        bcolor="#03a9f4";
                      }
                      if(k=="zijia_chaoshi"||k=="cqzj_chaoshi"||k=="lsdj_chaoshi"||k=="cqdj_chaoshi"||k=="dk_chaoshi"){
                        bcolor="#e2a38a";
                      }
                      var color="red";
                      if(k=="zijia_yuyue"||k=="zijia_shishi"||k=="zijia_chaoshi"){
                        color="#ffffff";
                      }
                      if(k=="cqzj_yuyue"||k=="cqzj_shishi"||k=="cqzj_chaoshi"){
                        color="red";
                      }
                      if(k=="lsdj_yuyue"||k=="lsdj_shishi"||k=="lsdj_chaoshi"){
                        color="#000000";
                      }

                      if(k=="cqdj_yuyue"||k=="cqdj_shishi"||k=="cqdj_chaoshi"){
                        color="#e607f5";
                      }
                      if(k=="dk_yuyue"||k=="dk_shishi"||k=="dk_chaoshi"){
                        color="#0b07f5";
                      }

                      var car_lx =""
                      if(k=="zijia_yuyue"){
                        car_lx="临时自驾——预约";
                      }
                      if(k=="cqzj_yuyue"){
                        car_lx="长期自驾——预约";
                      }
                      if(k=="lsdj_yuyue"){
                        car_lx="临时代驾——预约";
                      }
                      if(k=="cqdj_yuyue"){
                        car_lx="长期代驾——预约";
                      }
                      if(k=="dk_yuyue"){
                        car_lx="长期大客——预约";
                      }
                      if(k=="zijia_shishi"){
                        car_lx="临时自驾——正常运行";
                      }
                      if(k=="cqzj_shishi"){
                        car_lx="长期自驾——正常运行";
                      }
                      if(k=="lsdj_shishi"){
                        car_lx="临时代驾——正常运行";
                      }
                      if(k=="cqdj_shishi"){
                        car_lx="长期代驾——正常运行";
                      }
                      if(k=="dk_shishi"){
                        car_lx="长期大客——正常运行";
                      }
                      if(k=="zijia_chaoshi"){
                        car_lx="临时自驾——超时运行";
                      }
                      if(k=="cqzj_chaoshi"){
                        car_lx="长期自驾——超时运行";
                      }
                      if(k=="lsdj_chaoshi"){
                        car_lx="临时代驾——超时运行";
                      }
                      if(k=="cqdj_chaoshi"){
                        car_lx="长期代驾——超时运行";
                      }
                      if(k=="dk_chaoshi"){
                        car_lx="长期大客——超时运行";
                      }
                      
                      
                      html_a+="<span style='z-index:9;top:8px;left:"+left+"%;width:"+width+"%;height:30px;background-color:"+bcolor+";'>"
                      +"<span style='width: 7px;height: 60%;background-color: "+color+";left: 10px;top: 19%'></span>"
                      +"<div class='car_content'>"+
                      "<div class='car_txt1'>"+
                        "<h3 class='car_xq'>车辆详情</h3><p>类型："+car_lx+"<br>业务门店："+item_a['shop_name']+"<br/>租车开始时间："+item_a['paiche_startDate']
                          +"<br>租车结束时间："+item_a['paiche_endDate']
                        +"</p></div></div></span>";
                    
                })
              })
              html_a+="</td></tr>";
              $("#tbody").append(html_a);
      
      }
    }
    $(function(){
      var tdli = "<li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>"
      $("#tbody td").append(tdli);
    });
    
    $(".car td>span").hover(function(){
      $(this).siblings("").addClass("op5");
      $(this).parents().parents().find("span").addClass("op5");
    },function(){
      $(this).siblings("").removeClass("op5");
      $(this).parents().parents().find("span").removeClass("op5");
    });

    $(function(){
      $(".car td>span").each(function(){
        if($(this).width()<30){
          $(this).find("span").css("display","none");
        }
      })
    });
    //状态背景色
    $(function(){
      $(".car tr th").each(function(){
        if($(this).attr("bgcolor")==1){
          $(this).addClass("gzwx");
        }else if($(this).attr("bgcolor")==2){
          $(this).addClass("bp");
        }
      })
    });
    //显示状态
    $(function(){
      $(".car tr span").each(function(){
        if($(this).text()=="0"){
          $(this).text("正常");
        }else if($(this).text()==1){
          $(this).text("故障维修");
        }else if($(this).text()==2){
          $(this).text("异常/被骗");
        }
      });
    });
    //最底下数据显示问题
    $(function(){
      var carlength = $(".car tr").length;
      if(carlength>15){
        $(".car tr").eq(-2).find(".contact-box").addClass("eq2");
        $(".car tr").last().find(".contact-box").addClass("eq3");
        $(".car tr").eq(-3).find(".contact-box").addClass("eq4");
      }
    });   
}

    //选择时间
    function checkDate(){
      time=parseInt(DateToUnix($("#paiche_startDate").val())-9*60*60*24);
      gettime();
    }
    //下一天
    $("#nextWeek").click(function(){
        time=time+60*60*24;
        gettime();
    })
    //上一天
    $("#prevWeek").click(function(){
        time=time-60*60*24;
        gettime();
    })
    



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
//时间戳减时间
function timestampToTime(timestamp) {
       var date = new Date(timestamp * 1000);//时间戳为10位需*1000，时间戳为13位的话不需乘1000
       var Y = date.getFullYear() + '-';
       var M = (date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1) : date.getMonth()+1) + '-';
       var D = (date.getDate() < 10 ? '0'+date.getDate() : date.getDate()) + ' ';
       var h = (date.getHours() < 10 ? '0'+date.getHours() : date.getHours()) + ':';
       var m = (date.getMinutes() < 10 ? '0'+date.getMinutes() : date.getMinutes()) + ':';
       var s = (date.getSeconds() < 10 ? '0'+date.getSeconds() : date.getSeconds());
        return Y+M+D;
}
function timestampToTime_a(timestamp) {
       var date = new Date(timestamp * 1000);//时间戳为10位需*1000，时间戳为13位的话不需乘1000
       var Y = date.getFullYear() + '-';
       var M = (date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1) : date.getMonth()+1) + '-';
       var D = (date.getDate() < 10 ? '0'+date.getDate() : date.getDate()) + ' ';
       var h = (date.getHours() < 10 ? '0'+date.getHours() : date.getHours()) + ':';
       var m = (date.getMinutes() < 10 ? '0'+date.getMinutes() : date.getMinutes()) + ':';
       var s = (date.getSeconds() < 10 ? '0'+date.getSeconds() : date.getSeconds());
        return D;
}
    