<?php /* Smarty version Smarty-3.0.4, created on 2020-02-19 15:21:32
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/car/timeYilan.html" */ ?>
<?php /*%%SmartyHeaderCode:267605e4ce1fc9e6bb0-76399069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be70e2c758517dc17fa2c9d6c6aad010351dbac6' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/car/timeYilan.html',
      1 => 1582096886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '267605e4ce1fc9e6bb0-76399069',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>日历</title>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <link href="../../../../crm/css/font-awesome.min93e3.css?" rel="stylesheet">
    <link href="../../../../crm/fonts1/iconfont.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../../../../crm/css/plugins/public/weeklyCalendar.css?a=<?php echo time();?>
" />
    <script type="text/javascript" src="../../../js/laydate/laydate.js?a=<?php echo time();?>
"></script>
    <link rel="stylesheet" href="../../../../../crm/css/plugins/public/carcss.css?a=<?php echo time();?>
">
    <script src="../../../crm1/js/plugins/layer/layer.min.js"></script>
    <style>
        .week_box ul li{
            line-height: 33px;
        }
        .week_title{
            width: 100%;
            margin:0 auto;
            top: -43px;
            z-index: 9;
        }
        #layui-layer1{
            left: 48%!important;
        }
        .timeinput{
            position: absolute;
            left: 45px;
            top: -2px;
        }
        .timeinput input{
            border:1px solid #ddd;
        }
        .carztype li{
            /*width: 55px;*/
            float: left;
        }
        .carztype li p{
            float: right;
            font-size: 12px;
            color: #000;
            font-weight: bold;
            margin-right: 18px;
            margin-left: 4px;
        }
        .carztype{
            position: absolute;
            right: 2px;
            top: 6px;
        }
        .typethr{
            margin-bottom: 8px;
            overflow: hidden;
        }
        .typethr li{
            /*width: 80px;*/
        }
        .typethr li p{
            margin-top: 6px;
        }
        .xixi th{
            width: 15%!important;
        }
        .xixi td{
            width: 35%!important;
        }
        .contact-box{
            display: none;
            position: absolute;
            right:-453px;
            top: 0;
            width: 435px;
        }
        .car th{
            position: relative;
            cursor: pointer;
        }
        .car th:hover .contact-box{
            display: block;
        }
        /*.col-sm-6{
            float: left;
            padding-left: 15px;
            padding-right: 15px;
            width: 50%;
        }*/
        .car_img{
            float: left;
        }
        .car_txt{
            float: right;
            text-align: left;
            margin-right: 30px;
        }
        .contact-box{
            background-color: #fff;
            border: 1px solid #e7eaec;
            padding: 8px;
            padding-bottom: 20px;
            box-shadow: : 0 0 2px rgba(0,0,0,0.07);
        }
        .contact-box h4{
            color: #676a6c;
            font-size: 15px;
            margin: 10px 0;
        }
        .contact-box p{
            color: #676a6c;
            font-size: 14px;
            line-height: 25px;
            font-weight: 200;
        }
        .layui-layer-loading{
            top: auto!important;
            bottom: 0px!important;
        }
        #layui-layer1{
            
        }
        .collapse-link{
          cursor: pointer;  
        }
        .form2 table td input{
            text-indent: 0em!important;
            font-size: 14px;
        }
        .form2 table td select{
            text-indent: 0em!important;
        }
        input::-webkit-input-placeholder{
            color: #999;
        }
        input::-moz-input-placeholder{
            color: #999;
        }
        input::-ms-input-placeholder{
            color: #999;
        }
    </style>
</head>

<body class="gray-bg wrapper-content animated fadeInRight">
    <div class="xt_problems">
        <div class="so_main">
            <div class="list s_roblems">
                <div class="week_content">
                    <div class="weekfix">
                        <div class="page_tit">车辆预览表</div>
                        <div style="clear:both"></div>
                  <div style="overflow: hidden;border-top: 4px solid #e7eaec;border-bottom: 1px solid #e7eaec;padding-bottom: 10px;height: 65px;">
                    <h5 style="padding-top: 24px; display: inline-block;font-size: 15px;
                float: left;text-overflow: ellipsis;padding-left: 24px;font-weight: bold;color: #676a6c;position: relative;z-index: 10;">搜索</h5>
                 <div class="ibox-tools" style="padding-top: 22px; padding-left: 10px;float: left;position: relative;z-index: 10;">
                      <a class="collapse-link"><i class="fa fa-chevron-down" id="up"></i></a>
                 </div>

                 <h5 style="padding-top: 24px; display: inline-block;font-size: 12px;
                float: left;text-overflow: ellipsis;padding-left: 24px;font-weight: bold;color: #676a6c;" id="count"></h5>
                         <div class="week_title" id="week_title" ids="0">
                                <a href="javascript:void(0)" id="prevWeek" class="fa fa-angle-left"></a>
                                <h1 id="showDate">2019年11月24日 - 2019年11月30日</h1>
                                <a href="javascript:void(0)" id="nextWeek" class="nextWeek fa fa-angle-right">
                                    <div class="timeinput">
                                         <input id="paiche_startDate" placeholder="请输入日期" value="" class="laydate-icon form-control input-sm"  unselectable="on" readonly  onchange="test1()">
                                    </div>
                                </a>
                        </div>
                  </div>


                  <div id="content" style="display:none;">
                <!--    <div class="page_tit">
                搜索日志 [<a onclick="searchLog();" href="javascript:void(0);">隐藏</a>]
                </div> -->
                <div class="form2 s_roblems">
                    <form action="list.php?task=search" method="post">
                        <table class="xixi">
                            <tbody>
                        <tr>
                        <th style="background-color: #F5F5F6;" width="15%">最低日租金：</th>
                        <td class="bik" width="35%">
                          <input onkeyup="value=value.replace(/[^0-9]/g,'')"  type="text" value="" name="minrent" id="minrent" placeholder="最低日租金">          
                        </td>
                        <th style="background-color: #F5F5F6;" width="15%">最高日租金：</th>
                        <td width="35%">
                            <input onkeyup="value=value.replace(/[^0-9]/g,'')"  type="text" value="" name="maxrent" id="maxrent" placeholder="最高日租金">
                        </td>       
                        </tr>
                      <tr>
                        <th style="background-color: #F5F5F6;" width="15%">车牌号码：</th>
                        <td class="bik" width="35%">
                          <input onkeyup="value=value.replace(/[^\a-\z\A-\Z0-9]/g,'')"  type="text" value="" name="carnum" id="carnum" placeholder="车牌号码">
                        </td>
                        <th style="background-color: #F5F5F6;" width="15%">车辆品牌：</th>
                        <td class="bik" width="35%">
                          <input type="text" value="" name="cartype" id="cartype" placeholder="车辆品牌">
                        </td>
                      </tr>
                      <tr>
                        
                        <th style="background-color:#F5F5F6" width="15%">
                                                <span style="color:#000">车辆种类:</span>
                                                </th>
                                                <td width="35%">
                                                    <select class="form-control input-sm" name="car_types" id="car_types">
                                                         <option value="0">请选择</option>
                                                         
                                                          
                                                          <option value="2">超级跑车</option>
                                                          <option value="1">普通跑车</option>
                                                           <option value="99">小轿车</option>
                                                          <option value="3">越野车</option>
                                                          <option value="4">商务车</option>
                                                        <option value="5">中型客车</option>
                                                        <option value="6">大型客车</option>
                                                    </select>
                                                </td>
                          <th style="background-color: #F5F5F6;" width="15%">
                              租金排序：
                          </th>
                          <td width="35%">
                              <select name="rentsort" id="rentsort">
                                  <option value="1">从高到低</option>
                                  <option value="2">从低到高</option>
                              </select>
                          </td>
                          
                      </tr>

                            </tbody>
                        </table>

                            <!-- <div class="page_btm">
                            <input class="btn_b" type="submit" value="确定">
                            </div> -->  
                            <button type="button" class="btn btn-outline btn-default" style="margin-left:45%;width: 10%;height: 30px;border:1px solid #ddd;cursor: pointer;color: #000;font-weight: bold;" onclick="getList(2)">
                          <i class="glyphicon glyphicon-search" aria-hidden="true"></i>确定
                        </button>       
                    </form>
                </div>
                </div>
                        
                        <div class="week_box">
                            <div class="cartime">车辆/时间</div>
                            <ul class="clear" id="weekUl">
                                
                                <li id="xingqi1">Su</li>
                                <li id="xingqi2">Mo</li>
                                <li id="xingqi3">Tu</li>
                                <li id="xingqi4">We</li>
                                <li id="xingqi5">Th</li>
                                <li id="xingqi6">Fr</li>
                                <li id="xingqi7">Sa</li>

                                <li id="xingqi8">Su</li>
                                <li id="xingqi9">Mo</li>
                                <li id="xingqi10">Tu</li>
                                <li id="xingqi11">We</li>
                                <li id="xingq12">Th</li>
                                <li id="xingqi13">Fr</li>
                                <li id="xingqi14">Sa</li>

                                <li id="xingqi15">Su</li>
                                <li id="xingqi16">Mo</li>
                                <li id="xingqi17">Tu</li>
                                <li id="xingqi18">We</li>
                                <li id="xingqi19">Th</li>
                                <li id="xingqi20">Fr</li>
                                <li id="xingqi21">Sa</li>

                                <li id="xingqi22">Su</li>
                                <li id="xingqi23">Mo</li>
                                <li id="xingqi24">Tu</li>
                                <li id="xingqi25">We</li>
                                <li id="xingqi26">Th</li>
                                <li id="xingqi27">Fr</li>
                                <li id="xingqi28">Sa</li>

                                <li id="xingqi29">Su</li>
                                <li id="xingqi30">Mo</li>
                                
                            </ul>
                        </div>


                        <div class="calendar_box clear" id="calendarBox">
                            <section data-year="2019" data-month="11" data-date="24" >
                                <h2 id="riqi1"><a href="javascript:void(0)">24</a></h2>
                            </section>
                            <section data-year="2019" data-month="11" data-date="25">
                                <h2 id="riqi2"><a href="javascript:void(0)">25</a></h2>
                            </section>
                            <section data-year="2019" data-month="11" data-date="26">
                                <h2 id="riqi3">
                                <a href="javascript:void(0)">26</a></h2>
                            </section>
                            <section data-year="2019" data-month="11" data-date="27">
                                <h2 id="riqi4"><a href="javascript:void(0)">27</a></h2>
                            </section>
                            <section data-year="2019" data-month="11" data-date="28">
                                <h2 id="riqi5" class="current"><a href="javascript:void(0)">28</a>
                                </h2>
                            </section>
                            <section data-year="2019" data-month="11" data-date="29">
                                <h2 id="riqi6"><a href="javascript:void(0)">29</a></h2>
                            </section>
                            <section data-year="2019" data-month="11" data-date="30">
                                <h2 id="riqi7"><a href="javascript:void(0)">30</a></h2>
                            </section>


                            <section data-year="2019" data-month="11" data-date="24" >
                                <h2 id="riqi8"><a href="javascript:void(0)">24</a></h2>
                            </section>
                            <section data-year="2019" data-month="11" data-date="25">
                                <h2 id="riqi9"><a href="javascript:void(0)">25</a></h2>
                            </section>
                            <section data-year="2019" data-month="11" data-date="26">
                                <h2 id="riqi10">
                                <a href="javascript:void(0)">26</a></h2>
                            </section>
                            <section data-year="2019" data-month="11" data-date="27">
                                <h2 id="riqi11"><a href="javascript:void(0)">27</a></h2>
                            </section>
                            <section data-year="2019" data-month="11" data-date="28">
                                <h2 id="riqi12" class="current"><a href="javascript:void(0)">28</a>
                                </h2>
                            </section>
                            <section data-year="2019" data-month="11" data-date="29">
                                <h2 id="riqi13"><a href="javascript:void(0)">29</a></h2>
                            </section>
                            <section data-year="2019" data-month="11" data-date="30">
                                <h2 id="riqi14"><a href="javascript:void(0)">30</a></h2>
                            </section>

                            <section data-year="2019" data-month="11" data-date="24" >
                                <h2 id="riqi15"><a href="javascript:void(0)">24</a></h2>
                            </section>
                            <section data-year="2019" data-month="11" data-date="25">
                                <h2 id="riqi16"><a href="javascript:void(0)">25</a></h2>
                            </section>
                            <section data-year="2019" data-month="11" data-date="26">
                                <h2 id="riqi17">
                                <a href="javascript:void(0)">26</a></h2>
                            </section>
                            <section data-year="2019" data-month="11" data-date="27">
                                <h2 id="riqi18"><a href="javascript:void(0)">27</a></h2>
                            </section>
                            <section data-year="2019" data-month="11" data-date="28">
                                <h2 id="riqi19" class="current"><a href="javascript:void(0)">28</a>
                                </h2>
                            </section>
                            <section data-year="2019" data-month="11" data-date="29">
                                <h2 id="riqi20"><a href="javascript:void(0)">29</a></h2>
                            </section>
                            <section data-year="2019" data-month="11" data-date="30">
                                <h2 id="riqi21"><a href="javascript:void(0)">30</a></h2>
                            </section>

                            <section data-year="2019" data-month="11" data-date="24" >
                                <h2 id="riqi22"><a href="javascript:void(0)">24</a></h2>
                            </section>
                            <section data-year="2019" data-month="11" data-date="25">
                                <h2 id="riqi23"><a href="javascript:void(0)">25</a></h2>
                            </section>
                            <section data-year="2019" data-month="11" data-date="26">
                                <h2 id="riqi24">
                                <a href="javascript:void(0)">26</a></h2>
                            </section>
                            <section data-year="2019" data-month="11" data-date="27">
                                <h2 id="riqi25"><a href="javascript:void(0)">27</a></h2>
                            </section>
                            <section data-year="2019" data-month="11" data-date="28">
                                <h2 id="riqi26" class="current"><a href="javascript:void(0)">28</a>
                                </h2>
                            </section>
                            <section data-year="2019" data-month="11" data-date="29">
                                <h2 id="riqi27"><a href="javascript:void(0)">29</a></h2>
                            </section>
                            <section data-year="2019" data-month="11" data-date="30">
                                <h2 id="riqi28"><a href="javascript:void(0)">30</a></h2>
                            </section>

                            <section data-year="2019" data-month="11" data-date="24" >
                                <h2 id="riqi29"><a href="javascript:void(0)">24</a></h2>
                            </section>
                            <section data-year="2019" data-month="11" data-date="25">
                                <h2 id="riqi30"><a href="javascript:void(0)">25</a></h2>
                            </section>

                        </div>
                    </div>
                    <div class="car" id="carDetails">
                        <table witdh="100%">
                            <tbody id="tbody">
                                <tr>
                                    <th width="10%"></th>
                                    <td width="90%" class="tdfirst td2401" day="24">
                                        <span style="">
                                            <span style=''></span>
                                            <div class="car_content">
                                                <p><br><br></p>
                                            </div>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>




                    <input type="hidden" name="time" id="time" value="<?php echo strtotime(date('Y-m-d'));?>
">
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function(){
            $("#weekUl li").each(function(){
                if($(this).text()=="Sa"||$(this).text()=="Su"){
                    $(this).css("background-color","#a9a6a6");
                    $(this).css("color","#fff");
                }
            });
        });
    </script>
    

    
    

    
    
 <script type="text/javascript" src="../../../js/test.js?a=<?php echo time();?>
"></script>

</body>

</html>