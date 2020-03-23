
var list;
var shop=new Array();
var money=new Array();
var emp=new Array();

var xiaofei=new Array();
var shenyu=new Array();
var pinjun=new Array();

$.ajax({
                                        type:'POST',
                                        url:"index.php?task=shop_list",
                                        data:{"name":name},
                                        success:function(result){
        
                                            list=JSON.parse (result);
                                            for(var i=0;i<list.length;i++){
                                                shop[i]=list[i]['shop_name'];
                                                if(list[i]['money']==null){
                                                    list[i]['money']=0;
                                                }
                                                money[i]=list[i]['money'];

                                                emp[i]=list[i]['emp_count'];
                                                if(list[i]['xiaofei']==null){
                                                    list[i]['xiaofei']=0;
                                                }
                                                xiaofei[i]=list[i]['xiaofei'];
                                                if(list[i]['shenyu']==null){
                                                    list[i]['shenyu']=0;
                                                }
                                                shenyu[i]=list[i]['shenyu'];
                                                if(list[i]['pinjun']==null){
                                                    list[i]['pinjun']=0;
                                                }
                                                pinjun[i]=list[i]['pinjun'];

                                            }
                                            console.log(list);
                                            
                                            title();
                                        }
                                    });


function title(){


var barChart = echarts.init(document.getElementById("echarts-bar-chart"));
    var baroption = {
        title : {
            text: ''
        },
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            data:['总计','消费']
        },
        grid:{
            x:50,
            x2:40,
            y2:24
        },
        calculable : true,
        xAxis : [
            {
                type : 'category',
                data : shop
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [
            {
                name:'总计',
                type:'bar',
                data:money,
                markPoint : {
                    data : [
                        {type : 'max', name: '最大值'},
                        {type : 'min', name: '最小值'}
                    ]
                },
                markLine : {
                    data : [
                        {type : 'average', name: '平均值'}
                    ]
                }
            },
            {
                name:'消费',
                type:'bar',
                data:xiaofei,
                markPoint : {
                    data : [
                        {type : 'max', name: '最大值'},
                        {type : 'min', name: '最小值'}
                    ]
                },
                markLine : {
                    data : [
                        {type : 'average', name : '平均值'}
                    ]
                }
            }
        ]
    };
    barChart.setOption(baroption);

    window.onresize = barChart.resize;



    

var barChart_a = echarts.init(document.getElementById("echarts-bar-chart_a"));

    var baroption_a = {
        title : {
            text: ''
        },
        tooltip : {
            trigger: 'axis'
        },
        legend: {
            data:['剩余','人均']
        },
        grid:{
            x:50,
            x2:40,
            y2:24
        },
        calculable : true,
        xAxis : [
            {
                type : 'category',
                data : shop
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [
            {
                name:'剩余',
                type:'bar',
                data:shenyu,
                markPoint : {
                    data : [
                        {type : 'max', name: '最大值'},
                        {type : 'min', name: '最小值'}
                    ]
                },
                markLine : {
                    data : [
                        {type : 'average', name: '平均值'}
                    ]
                }
            },
            {
                name:'人均',
                type:'bar',
                data:pinjun,
                markPoint : {
                    data : [
                        {type : 'max', name: '最大值'},
                        {type : 'min', name: '最小值'}
                    ]
                },
                markLine : {
                    data : [
                        {type : 'average', name : '平均值'}
                    ]
                }
            }
        ]
    };
    barChart_a.setOption(baroption_a);

    window.onresize = barChart_a.resize;
}