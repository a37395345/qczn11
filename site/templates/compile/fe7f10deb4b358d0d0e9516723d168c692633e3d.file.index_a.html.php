<?php /* Smarty version Smarty-3.0.4, created on 2019-11-29 14:01:45
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/public/index_a.html" */ ?>
<?php /*%%SmartyHeaderCode:255075de0b449644861-48339406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe7f10deb4b358d0d0e9516723d168c692633e3d' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/public/index_a.html',
      1 => 1575007302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '255075de0b449644861-48339406',
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
        @media(max-width: 1400px){
            .timeinput{
                right: 340px;
            }
        }
        @media(min-width: 1500px){
            .timeinput{
                right: 400px;
            }
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
                                <div class="timeinput">
                                     <input id="paiche_startDate" placeholder="请输入日期" value="" class="laydate-icon form-control input-sm"  unselectable="on" readonly  onchange="test1()">
                                </div>
                                <a href="javascript:void(0)" id="prevWeek"></a>
                                <h1 id="showDate">2019年11月24日 - 2019年11月30日</h1>
                                <a href="javascript:void(0)" id="nextWeek" class="nextWeek"></a>
                                <div class="carztype">
                                    <ul class="typethr">
                                        <li>
                                            <span style="width: 15px;height: 3px;background: #1e90ff;display: inline-block;border-radius: 4px;"></span>
                                            <p>自驾</p>
                                        </li>
                                        <li>
                                            <span style="width: 15px;height: 3px;background: red;display: inline-block;border-radius: 4px;"></span>
                                            <p>长期自驾</p>
                                        </li>
                                        <li>
                                            <span style="width: 15px;height: 3px;background: #000000;display: inline-block;border-radius: 4px;"></span>
                                            <p>临时代驾</p>
                                        </li>
                                        <li>
                                            <span style="width: 15px;height: 3px;background: #e607f5;display: inline-block;border-radius: 4px;"></span>
                                            <p>长期代驾</p>
                                        </li>
                                        <li>
                                            <span style="width: 15px;height: 3px;background: #0b07f5;display: inline-block;border-radius: 4px;"></span>
                                            <p>大客</p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <span style="width: 15px;height: 15px;background: #43ec0b;display: inline-block;border-radius: 4px;"></span>
                                            <p>预约</p>
                                        </li>
                                        <li>
                                            <span style="width: 15px;height: 15px;background: #7cb5ec;display: inline-block;border-radius: 4px;"></span>
                                            <p>实时</p>
                                        </li>
                                        <li>
                                            <span style="width: 15px;height: 15px;background: #e2a38a;display: inline-block;border-radius: 4px;"></span>
                                            <p>超时</p>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                  </div>


                  <div id="content" style="display:none;">
                <!--    <div class="page_tit">
                搜索日志 [<a onclick="searchLog();" href="javascript:void(0);">隐藏</a>]
                </div> -->
                <div class="form2 s_roblems">
                    <form action="list.php?task=search" method="post">
                        <table>
                            <tbody>
                        <tr>
                        <th style="background-color: #F5F5F6;" width="15%">最低日租金：</th>
                        <td class="bik" width="35%">
                          <input  type="text" value="" name="minrent" id="minrent">          
                        </td>
                        <th style="background-color: #F5F5F6;" width="15%">最高日租金：</th>
                        <td width="35%">
                            <input  type="text" value="" name="maxrent" id="maxrent">
                        </td>       
                        </tr>
                      <tr>
                        <th style="background-color: #F5F5F6;" width="15%">车牌号码：</th>
                        <td class="bik" width="35%">
                          <input   type="text" value="" name="carnum" id="carnum">
                        </td>
                        <th style="background-color: #F5F5F6;" width="15%">车辆品牌：</th>
                        <td class="bik" width="35%">
                          <input   type="text" value="" name="cartype" id="cartype">
                        </td>
                      </tr>
                      <tr>
                          <th style="background-color: #F5F5F6;" width="15%">
                              租金排序：
                          </th>
                          <td width="35%">
                              <select name="rentsort" id="rentsort">
                                  <option value="1">从高到低</option>
                                  <option value="2">从低到高</option>
                              </select>
                          </td>
                          <th style="background-color: #F5F5F6;" width="15%"></th>
                          <td width="35%"></td>
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
                            <ul class="clear" id="weekUl">
                                <li style="width: 10%">车辆/时间</li>
                                <li id="xingqi1">日</li>
                                <li id="xingqi2">一</li>
                                <li id="xingqi3">二</li>
                                <li id="xingqi4">三</li>
                                <li id="xingqi5">四</li>
                                <li id="xingqi6">五</li>
                                <li id="xingqi7">六</li>

                                <li id="xingqi8">日</li>
                                <li id="xingqi9">一</li>
                                <li id="xingqi10">二</li>
                                <li id="xingqi11">三</li>
                                <li id="xingq12">四</li>
                                <li id="xingqi13">五</li>
                                <li id="xingqi14">六</li>

                                <li id="xingqi15">日</li>
                                <li id="xingqi16">一</li>
                                <li id="xingqi17">二</li>
                                <li id="xingqi18">三</li>
                                <li id="xingqi19">四</li>
                                <li id="xingqi20">五</li>
                                <li id="xingqi21">六</li>

                                <li id="xingqi22">日</li>
                                <li id="xingqi23">一</li>
                                <li id="xingqi24">二</li>
                                <li id="xingqi25">三</li>
                                <li id="xingqi26">四</li>
                                <li id="xingqi27">五</li>
                                <li id="xingqi28">六</li>

                                <li id="xingqi29">日</li>
                                <li id="xingqi30">一</li>
                                
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
                                    <th width="10%">苏D1</th>
                                    <td width="90%" class="tdfirst td2401" day="24">
                                        <span style="z-index:9;top:22px;left:2.19%;width:12.60%;height:24px;background-color:#7cb5ec ;border-radius: 3px;">
                                            <span style='float: right;width: 5px;height: 70%;background-color: #ffffff;right: 10px;top: 15%'></span>
                                            <div class="car_content">
                                                <p>车牌号：苏D1<br>租车开始时间：2019-11-24 03:40:30<br>租车结束时间：2019-11-25 00:50:30</p>
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
    

    </script>

    
    

    
    
 <script type="text/javascript" src="../../../js/test.js?a=<?php echo time();?>
"></script>

</body>

</html>