<?php /* Smarty version Smarty-3.0.4, created on 2020-01-08 17:21:16
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/car/mobile_car.html" */ ?>
<?php /*%%SmartyHeaderCode:310805e159f0c5da4a2-40106626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d1bdcd1a5228efe55f984adaf6df39d611a4282' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/car/mobile_car.html',
      1 => 1578475212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '310805e159f0c5da4a2-40106626',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <title>组织架构图</title>
    <style>
        body{
            margin: 8px;
            background: #f5eec9;
        }
        *{
            margin: 0;
            padding: 0;
        }
        .main{
            
        }
        .text-center{
            text-align: center;
        }
        .org-chart{
            display: block;
            clear: both;
            margin-bottom: 140px;
            position: relative;
        }
        .org-chart .board{
            width: 60%;
            margin: 0 auto;
            display: block;
            position: relative;
        }
        .org-chart ul.columnOne{
            height: 90px;
            position: relative;
            width: 100%;
            display: block;
            clear: both;
        }
        .org-chart ul{
            padding: 0;
            margin: 0;
            list-style: none;
        }
        .org-chart ul.columnOne li{
            width: 30%;
            margin: 0 auto;
            top: 30px;
            position: relative;
        }
        .org-chart ul.columnOne li span{
            font-weight: bold;
            line-height: 50px;
        }
        .org-chart .lvl-b{
            background: green;
            color: #92d4a8;
        }
        .org-chart .lvl-b{
            line-height: 36px;
            font-size: 18px;
            color: #fff;
        }
        .org-chart ul li span{
            display: block;
            border: 3px solid orange;
            text-align: center;
            overflow: hidden;
            text-decoration: none;
            color: #000;
            font-size: 12px;
            box-shadow: 4px 4px 9px -4px rgba(0,0,0,.4);
            -webkit-transition: all linear .1s;
            -moz-transition: all linear .1s;
            transition: all linear .1s;
            background: #92d4a8;
            padding: 4px;
        }
        .org-chart ul.columnThree{
            margin-top: 36px;
        }
        .org-chart ul.columnThree{
            position: relative;
            width: 100%;
            display: block;
            clear: both;
        }
        .org-chart ul.columnThree li{
            width: 30%;
            margin: 0 auto;
            top: 30px;
            position: relative;
        }
        .org-chart ul.columnOne li span{
            line-height: 50px;
            font-size: 18px;
            color: #000;
            font-weight: bold;
        }
        .org-chart ul.columnThree li span{
            line-height: 50px;
            font-size: 18px;
            color: #000;
            font-weight: bold;
        }
        .org-chart ul.columnThree{
            display:box;
            display:-webkit-box;
            display:-webkit-flex;
            display:-moz-box;
            display:-ms-flexbox;
            display:flex;
            -webkit-justify-content: space-between;
            -moz-justify-content: space-between;
            -ms-justify-content: space-between;
            -o-justify-content: space-between;
            justify-content: space-between;
        }
        .org-chart .board:before{
            content: "";
            display: block;
            position: absolute;
            height: 268px;  
            width: 0;
            border-left: 2px solid orange;
            margin-left: 50%;
            top: 94px;
        }
        .departments{
            width: 100%;
            display: block;
            clear: both;
            /*margin-top: 20px;*/
            display: flex;
            justify-content: space-between;
            position: relative;
        }
        .departments:before{
            content: "";
            display: block;
            position: absolute;
            width: 100%;
            height: 2px;
            background: orange;
            top: -60px;
            /*left: 50%;
            margin-left: -47%;*/
        }
        .departments ul{
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .departments li span{
            border:2px solid orange;
        }
        .department{
            position: relative;
        }
        .department:before{
            content: "";
            position: absolute;
            background: orange;
            width: 2px;
            height: 45px;
            left: 50%;
            margin-left: 1px;
            top: -59px;
        }
        .department .lvl-b{
            background: green;
            font-size: 18px;
            color: #fff;
            font-weight: bold;
            padding: 12px 35px;
        }
        .departments ul li dl dd span{
            background: #92d4a8;
            font-size: 16px;
            font-weight: bold;
            padding: 10px 5px;
            writing-mode:tb-rl;
            color: #000;
        }
        .departments .xiaji{
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
        }
        .departments ul li dl ul li span{
            background: #92d4a8!important;
            font-size: 16px!important;
            font-weight: bold!important;
            padding: 10px 5px!important;
            writing-mode:tb-rl!important;
            color: #000!important;
        }
        .next_pos{
            margin-top: 15px;
        }
        .next_pos ul{
            display: flex;
            justify-content: space-between;
        }
        .bm_one{
            position: relative;
        }
        /*.bm_one:before{
            position: absolute;
            content: "";
            width: 100%;
            height: 2px;
            background: orange;
            bottom: -16px;
            left: 0;
        }*/
        .bm_one:after{
            content: "";
            position: absolute;
            width: 2px;
            height: 18px;
            background: orange;
            bottom: -20px;
            left: 50%;
        }
        .djonecss{
            justify-content:center!important;
        }
        .djonecssd{
            writing-mode:lr-tb!important;
            padding:6px 36px!important;
        }
    </style>
</head>
<body>
    <div class="main">
        <h1 class="text-center">组织架构图</h1>
        <figure class="org-chart cf">
            <div class="board">
                <ul class="columnOne">
                    <li><span class="lvl-b" style="color: #fff">管理部</span></li>
                </ul>
                <ul class="columnOne">
                    <li style="top: 45px;"><span>蒋政</span></li>
                </ul>
                <ul class="columnThree">
                    <li><span>副总经理A</span></li>
                    <li><span>副总经理B</span></li>
                    <li><span>副总经理C</span></li>
                </ul>
            </div>
        </figure>
        <div class="departments">
            <ul>
                <li class="department"><span class="lvl-b bm_one">部门A</span>
                    <div class="xiaji xdd">
                        <dl class="sections"><dd><span class="section">职位</span></dd>
                            <div class="next_pos">
                                <ul>
                                    <li class="dep_two"><span class="lvl-b">职位</span>
                                </ul>
                            </div>
                        </dl>
                        <!-- <dl class="sections"><dd><span class="section">职位</span></dd></dl>
                        <dl class="sections"><dd><span class="section">职位</span></dd></dl> -->
                    </div>
                </li>
            </ul>
            <ul>
                <li class="department"><span class="lvl-b">部门A</span>
                    <div class="xiaji">
                        <dl class="sections"><dd><span class="section">职位</span></dd></dl>
                        <dl class="sections"><dd><span class="section">职位</span></dd></dl>
                        <dl class="sections"><dd><span class="section">职位</span></dd></dl>
                    </div>
                </li>
            </ul>
            <ul>
                <li class="department"><span class="lvl-b">部门A</span>
                    <div class="xiaji">
                        <dl class="sections"><dd><span class="section">职位</span></dd></dl>
                        <dl class="sections"><dd><span class="section">职位</span></dd></dl>
                        <dl class="sections"><dd><span class="section">职位</span></dd></dl>
                    </div>
                </li>
            </ul>
            <ul>
                <li class="department"><span class="lvl-b">部门A</span>
                    <div class="xiaji">
                        <dl class="sections"><dd><span class="section">职位</span></dd></dl>
                        <dl class="sections"><dd><span class="section">职位</span></dd></dl>
                        <dl class="sections"><dd><span class="section">职位</span></dd></dl>
                    </div>
                </li>
            </ul>
            <ul>
                <li class="department"><span class="lvl-b">部门A</span>
                    <div class="xiaji">
                        <dl class="sections"><dd><span class="section">职位</span></dd></dl>
                        <dl class="sections"><dd><span class="section">职位</span></dd></dl>
                        <dl class="sections"><dd><span class="section">职位</span></dd></dl>
                    </div>
                </li>
            </ul>
            <ul>
                <li class="department"><span class="lvl-b">部门A</span>
                    <div class="xiaji">
                        <dl class="sections"><dd><span class="section">职位</span></dd></dl>
                        <dl class="sections"><dd><span class="section">职位</span></dd></dl>
                        <dl class="sections"><dd><span class="section">职位</span></dd></dl>
                    </div>
                </li>
            </ul>
            <ul>
                <li class="department"><span class="lvl-b">部门A</span>
                    <div class="xiaji">
                        <dl class="sections"><dd><span class="section">职位</span></dd></dl>
                        <dl class="sections"><dd><span class="section">职位</span></dd></dl>
                        <dl class="sections"><dd><span class="section">职位</span></dd></dl>
                    </div>
                </li>
            </ul>
            <ul>
                <li class="department"><span class="lvl-b">部门A</span>
                    <div class="xiaji">
                        <dl class="sections"><dd><span class="section">职位</span></dd></dl>
                        <dl class="sections"><dd><span class="section">职位</span></dd></dl>
                        <dl class="sections"><dd><span class="section">职位</span></dd></dl>
                    </div>
                </li>
            </ul>
            <ul>
                <li class="department"><span class="lvl-b">部门A</span>
                    <div class="xiaji">
                        <dl class="sections"><dd><span class="section">职位</span></dd></dl>
                        <dl class="sections"><dd><span class="section">职位</span></dd></dl>
                        <dl class="sections"><dd><span class="section">职位</span></dd></dl>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <script>
        $(function(){
            $(".xdd").each(function(){
                if($(this).find("dl").length==1){
                    $(this).addClass("djonecss");
                    $(this).find("span").addClass("djonecssd");
                }
            })
        });
    </script>
</body>
</html>