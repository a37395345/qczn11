<?php /* Smarty version Smarty-3.0.4, created on 2020-03-20 15:22:51
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/zhiwei/company.html" */ ?>
<?php /*%%SmartyHeaderCode:244075e746f4be01582-05615382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55df4376862d5f6fa756b885c888081b378f3a72' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/zhiwei/company.html',
      1 => 1584517525,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '244075e746f4be01582-05615382',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <meta charset="utf-8">
    <title>公司架构图</title>
    <script type="text/javascript" src="/js/jquery.js"></script>
    <link rel="shortcut icon" href="favicon.ico"> <link href="../../../crm/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../../comment/bootstrap.css">
    <style>
        html, body {
            margin: 0px;
            padding: 0px;
            width: 100%;
            height: 100%;
            overflow: hidden;
            font-family: Helvetica;
        }
        #tree text{
            font-size: 30px!important;
        }
        #tree {
            width: 100%;
            height: 100%;
        }
        @media(max-width: 1100px){
            .field_0{
                font-size: 12px!important;
            }
        }
        .edit-wrapper{
            background: #f3f3f4!important;
            opacity: 1!important;
        }

        /*2.25新增*/
        .emp-wrapper{
            width: 35%;
            position: absolute;
            top: 0;
            right: 0;
            border-left: 1px solid rgb(215,215,215);
            text-align: left;
            height: 100%;
            background: #f3f3f4!important;
            overflow-y: auto;
        }
        .wraptop{
            background-color: rgb(47, 64, 80);
            min-height: 50px;
            text-align: center;
            position: fixed;
            top: 0;
            right: 0;
            width: 35%;
            z-index: 2;
        }
        .wrap-bg{
            cursor: pointer;
            width: 34px;
            height: 34px;
            position: absolute;
            top: 7px;
            right: 7px;
        }
        .emp-fields{
            margin-top: 60px;
            padding: 0 20px;
        }
        .emp_con{
            background: #fff;
            overflow: hidden;
            padding: 20px 25px;
            margin-bottom: 24px;
        }
        .right{
            margin-top: 6px;
        }
        .right p{
            line-height: 0;
            margin-block-end: 0;
            margin-block-start: 0;
            font-size: 13px;
            color: #676a6c;
            font-family: "微软雅黑";
            margin-bottom: 36px;
        }
        .zhiwe_remark{
            text-align: center;
            margin-top: 14px;
            font-size: 14px;
            color: #676a6c;
            font-weight: bold;
            font-family: "微软雅黑";
        }
        .kk{
            width: 100%;
            height: 0;
            padding-top: 100%;
            position: relative;
        }
        .emp_left{
            width: 46%;
            float: left;
            padding-right: 2%;
            padding-left: 2%;
            text-align: center;
        }
        .emp_right{
            width: 46%;
            float: right;
            padding-right: 2%;
            padding-left: 2%;
        }
        .img{
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            border-radius: 0;
            z-index: 1;
        }
        .ss{
            font-family: "微软雅黑";
            font-size: 14px;
            color: #676a6c;
            font-weight: bold;
        }
        .pp{
            border-bottom: 1px dotted #777;
            display: inline-block;
            text-decoration: underline dotted;
            padding-bottom: 8px;
            position: relative;
            top: -10px;
        }
        .emp-fields p{
            font-family: "微软雅黑";
            /*font-size: 14px;*/
        }
        .glyphicon{
            color: red;
        }
        .rating-stars{
            position: relative;
            cursor: pointer;
            vertical-align: middle;
            display: inline-block;
            overflow: hidden;
            white-space: nowrap;
            margin-top: 5px;
        }
        .empty-stars{
            color: #aaa;
        }
        .star{
            display: inline-block;
            margin: 0 3px;
            text-align: center;
        }
        .filled-stars{
            position: absolute;
            left: 0px;
            top: 0;
            margin: auto;
            color: #fde16d;
            white-space: nowrap;
            overflow: hidden;
            -webkit-text-stroke: 1px #777;
            text-shadow: 1px 1px #999;
        }
        .close{
            opacity: 1!important;
        }
    </style>

</head>
<body>


<script src="/js/chart.js?a=<?php echo time();?>
"></script>
<input type="hidden" name="node_id" value=""></input>
<div id="tree" style="overflow: hidden; position: relative; height: 100%;"></div>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
<div class="emp-info" date-id="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" date-name="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
" date-pid="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['pid']) ? $_smarty_tpl->tpl_vars['row']->value['pid'] : null);?>
" date-zhiwei="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['zhiwei']) ? $_smarty_tpl->tpl_vars['row']->value['zhiwei'] : null);?>
" date-img="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['avatar']) ? $_smarty_tpl->tpl_vars['row']->value['avatar'] : null);?>
"></div>
<?php }} ?>
<script>
    // $(function(){
    //     $(".emp-info").each(function(){
    //         if($(this).attr("date-name").length>6){
    //             var that = $(this).attr("date-name");
    //             $(this).attr("date-name",that.substr(0,6)+'...');
    //         }
    //     });
    // });
</script>
<div class="emp-wrapper" style="display: none">
    <div class="wraptop">
        <div class="wrap-bg">
            <svg class="close" style="width: 34px; height: 34px;"><path style="fill:#ffffff;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111 C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587 c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"></path></svg>
        </div>
    </div>
    <div class="emp-fields">
    </div>
</div>
<script>


    var chart;

    window.onload = function() {
        var info = [];
        $(".emp-info").each(function(){
            info.push(
                { id: $(this).attr('date-id'),
                 pid: $(this).attr('date-pid'), 
                 store_name: $(this).attr('date-name'), 
                 title: $(this).attr('date-zhiwei'), 
                 img: $(this).attr('date-img')});
        })
console.log(info);
        chart = new OrgChart(document.getElementById("tree"), {
            template: "luba",
            layout: OrgChart.normal,
            subtreeSeparation: 50,
            padding: 400,
            nodeMouseClick: OrgChart.action.none,
            lazyLoading: false,
            enableDraDrop:false,
            scaleInitial: OrgChart.match.boundary,
            nodeBinding: {
                field_4:"emp_name",
                field_1:"emp_number",
                field_2:"store",
                field_3:"department",   
                field_0: "store_name",
                field_5: "tel",
            },
            nodes: info,
        });
        //chart.match.width;
        function preview(){
            OrgChart.pdfPrevUI.show(chart, {
                format: 'A4'
            });
        }  
    };


    $(".node").live("click",function(){
        $(".emp-wrapper").css("display","block")
        var tt = parseInt($(this).attr("node-id"));
        $("input[name=node_id]").val(tt);
        ajaxLoading();
    });


    $(".close").click(function(){
        $(".emp-wrapper").css("display","none")
    });

    function ajaxLoading(){
        var node_id = $("input[name=node_id]").val();
        $.ajax({
            url:'/site/operator/zhiwei/index.php?task=company_date&id='+node_id,
            dataType:"json",
            success:function(data){
                console.log(data);
                var list="";
                if(data.length>0){
                    for(var i=0;i<data.length;i++){
                        var star = data[i].xingji;
                        var starpre = star/5*100+"%";
                        list+= '<div class="emp_con"><div class="emp_left"><div class="left"><div class="kk"><img class="img" src="../../../thumb/'+data[i].emp_image+'"></div><div class="rating-stars"><span class="empty-stars"><span class="star"><i class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i class="glyphicon glyphicon-star-empty"></i></span><span class="star"><i class="glyphicon glyphicon-star-empty"></i></span></span><span class="filled-stars" style="width:'+starpre+'"><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i class="glyphicon glyphicon-star"></i></span><span class="star"><i class="glyphicon glyphicon-star"></i></span></span></div><div class="zhiwe_remark">'+data[i].zhize+'</div></div></div><div class="emp_right"><div class="right"><p class="ss">'+data[i].emp_name+'</p><p>编号：'+data[i].zemp_num+'</p><p>门店：'+data[i].shop+'</p><p>部门：'+data[i].department+'</p><p>职位：'+data[i].zhiwei+'</p><p class="pp">TEL：'+data[i].emp_phone+'</p></div></div></div>'
                    }
                }else{
                    list='<p>该职位暂时没有人员！</p>'
                }
                $(".emp-fields").html(list);
            }
        })
    }
</script>
</body>
</html>