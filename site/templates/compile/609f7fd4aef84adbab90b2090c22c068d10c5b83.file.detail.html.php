<?php /* Smarty version Smarty-3.0.4, created on 2020-01-06 13:50:29
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/machine/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:204345e12caa5e2edc7-62313430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '609f7fd4aef84adbab90b2090c22c068d10c5b83' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/machine/detail.html',
      1 => 1578289784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204345e12caa5e2edc7-62313430',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <title>新长期客户资料</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="../../../../crm/fonts1/iconfont.css" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico"> <link href="../../../crm1/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="../../../crm1/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="../../../crm1/css/animate.css" rel="stylesheet">
    <link href="../../../crm1/css/style.css?v=4.1.0" rel="stylesheet">
    <link href="../../../crm1/css/idangerous.swiper.css" rel="stylesheet">
    <link href="../../../crm1/css/idangerous.swiper.scrollbar.css" rel="stylesheet">
      <script type="text/javascript" src="../../../js/jquery.js">
</script>
     <link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css?a=2" rel="stylesheet">
    <script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js?a=6"></script>
    <script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js?a=2"></script>
    <style>
        .panel-body1{
            padding: 20px;
        }
        .xdd th{
          font-weight: 500;
        }
        .car_imgs li{
          float: left;
          margin-right: 10px;
          list-style: none;
        }
        .car_imgs{
          padding: 0;
          margin: 20px 0;
        }
        .dl-horizontal dd{
                height: 26px;
            }
        @media(max-width: 768px){
            .zijia_title h2{
                font-size:16px;
                color: #615555;
            }
            .dl-horizontal dt{
                display: inline-block;
                float: left;
            }
            .dl-horizontal dd{
                height: 26px;
            }
            .tab-pane{
                width:1000px;
                overflow-x: hidden;
            }
            .tab-pane tr th{
                width: 3%!important;
            }
        }
    </style>
</head>

<body class="gray-bg">
    <div class="row">
        <div class="col-sm-12">
            <div class="wrapper wrapper-content animated fadeInUp">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="m-b-md zijia_title">
                                    <h2>苏D<span style="font-size: 22px;"><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <dl class="dl-horizontal">
                                  <dt>状态：</dt>
                                  <dd><span class="label label-primary"><?php if ((isset($_smarty_tpl->getVariable('list')->value['car_status']) ? $_smarty_tpl->getVariable('list')->value['car_status'] : null)!=2){?>
                                    正常
                                    <?php }else{ ?>
                                        <?php if ((isset($_smarty_tpl->getVariable('list')->value['car_maintreason']) ? $_smarty_tpl->getVariable('list')->value['car_maintreason'] : null)==0){?>
                                        故障维修
                                        <?php }else{ ?>
                                        异常/被骗
                                        <?php }?>
                                    <?php }?>
                                  </dd>
                                    <dt>车辆品牌：</dt>
                                    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_brand']) ? $_smarty_tpl->getVariable('list')->value['car_brand'] : null);?>
</dd>
                                    <dt>车辆种类:</dt>
                                    <dd><?php if ((isset($_smarty_tpl->getVariable('list')->value['car_types']) ? $_smarty_tpl->getVariable('list')->value['car_types'] : null)==0){?>
                                        小轿车
                                        <?php }elseif((isset($_smarty_tpl->getVariable('list')->value['car_types']) ? $_smarty_tpl->getVariable('list')->value['car_types'] : null)==1){?>
                                        普通跑车
                                        <?php }elseif((isset($_smarty_tpl->getVariable('list')->value['car_types']) ? $_smarty_tpl->getVariable('list')->value['car_types'] : null)==2){?>
                                        超级跑车
                                        <?php }elseif((isset($_smarty_tpl->getVariable('list')->value['car_types']) ? $_smarty_tpl->getVariable('list')->value['car_types'] : null)==3){?>
                                        越野车
                                        <?php }elseif((isset($_smarty_tpl->getVariable('list')->value['car_types']) ? $_smarty_tpl->getVariable('list')->value['car_types'] : null)==4){?>
                                        商务车
                                        <?php }elseif((isset($_smarty_tpl->getVariable('list')->value['car_types']) ? $_smarty_tpl->getVariable('list')->value['car_types'] : null)==5){?>
                                        中型客车
                                        <?php }else{ ?>
                                        大型客车
                                        <?php }?>

                                    </dd>
                                </dl>
                            </div>
                        </div>
                        
                        <div class="row m-t-sm" style="overflow: hidden;overflow-x: auto;">
                            <div class="col-sm-12">
                                <div class="panel blank-panel">
                                    <div class="panel-heading">
                                        <div class="panel-options">
                                            <ul class="nav nav-tabs">
                                                <li><a href="javascript:;" data-toggle="tab">车辆详细信息</a>
                                                </li>
                                                <li class=""><a href="javascript:;" data-toggle="tab">报价方案</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body1">
                                        <div class="tab-content">
                                            <div class="tab-pane active" >
                                              车辆颜色：<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_color']) ? $_smarty_tpl->getVariable('list')->value['car_color'] : null);?>
<br/><br/>
                                              车型：<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_model']) ? $_smarty_tpl->getVariable('list')->value['car_model'] : null);?>
<br/><br/>
                                              发动机号：<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_motor']) ? $_smarty_tpl->getVariable('list')->value['car_motor'] : null);?>
<br/><br/>
                                              车辆识别号：<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_frame']) ? $_smarty_tpl->getVariable('list')->value['car_frame'] : null);?>
<br/><br/>
                                              座位数：<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_seat']) ? $_smarty_tpl->getVariable('list')->value['car_seat'] : null);?>
<br/><br/>
                                              开票价格：<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_amount']) ? $_smarty_tpl->getVariable('list')->value['car_amount'] : null);?>
元<br/><br/>
                                              实际购买车价：<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_infactamount']) ? $_smarty_tpl->getVariable('list')->value['car_infactamount'] : null);?>
元<br/><br/>
                                              购置税：<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_buytax']) ? $_smarty_tpl->getVariable('list')->value['car_buytax'] : null);?>
元<br/><br/>
                                              车辆注册日期：<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_cartDate']) ? $_smarty_tpl->getVariable('list')->value['car_cartDate'] : null);?>
<br/><br/>
                                              入账日期：<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_saleDate']) ? $_smarty_tpl->getVariable('list')->value['car_saleDate'] : null);?>
<br/><br/>
                                              车辆专属名称：<?php echo $_smarty_tpl->getVariable('zhuanyong')->value;?>
<br/><br/>
                                              
                                              备注：<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_remarks']) ? $_smarty_tpl->getVariable('list')->value['car_remarks'] : null);?>
<br/><br/>
                                              <div style="clear: both;">
                                                <ul class="car_imgs">
                                                <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('list')->value['car_imglist']) ? $_smarty_tpl->getVariable('list')->value['car_imglist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
                                                
                                                 <li><a href="picture.php?car_id=<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_id']) ? $_smarty_tpl->getVariable('list')->value['car_id'] : null);?>
&nowserial=<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
" title="点击查看原图" target="blank"><img src="../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['images']) ? $_smarty_tpl->tpl_vars['rows']->value['images'] : null);?>
" width="100" height="100" /></a></li>

                                                 
                                                <?php }} ?>
                                                
                                                 
                                                </ul>
                                              </div>
                                            </div>
                                            <div class="tab-pane">

                                                <table class="table table-striped">
                                                    
                                                    <thead>
                                                        
                                                        <tr>
                                                               
                                                                <th width="10%">租赁单价</th>
                                                                <th width="10%">超时费</th>
                                                                <th width="10%">是否限制公里</th>
                                                                <th width="10%">限制公里数</th>
                                                                <th width="10%">超公里费用</th>
                                                                <th width="10%">押金(本地人/老客户)</th>
                                                                <th width="9%">押金(外地人)</th>
                                                                
                                                                

                                                        </tr>
                                                        
                                                    </thead>
                                                    <tbody>
                                                        <?php if (count($_smarty_tpl->getVariable('price')->value)>0){?>
                                                      <tr>
                                                            <td><?php echo (isset($_smarty_tpl->getVariable('price')->value['plan_rentamount']) ? $_smarty_tpl->getVariable('price')->value['plan_rentamount'] : null);?>
/天</td>
                                                            <td><?php echo (isset($_smarty_tpl->getVariable('price')->value['plan_chaoshi']) ? $_smarty_tpl->getVariable('price')->value['plan_chaoshi'] : null);?>
</td>
                                                            <td><?php if ((isset($_smarty_tpl->getVariable('price')->value['plan_chaokm']) ? $_smarty_tpl->getVariable('price')->value['plan_chaokm'] : null)=='n'){?>
                                                                否
                                                                <?php }else{ ?>
                                                                是
                                                                <?php }?>
                                                            </td>
                                                            <td><?php if ((isset($_smarty_tpl->getVariable('price')->value['plan_chaokm']) ? $_smarty_tpl->getVariable('price')->value['plan_chaokm'] : null)=='n'){?>
                                                              
                                                                <?php }else{ ?>
                                                                <?php echo (isset($_smarty_tpl->getVariable('price')->value['plan_chaokms']) ? $_smarty_tpl->getVariable('price')->value['plan_chaokms'] : null);?>

                                                                <?php }?></td> 
                                                            <td><?php if ((isset($_smarty_tpl->getVariable('price')->value['plan_chaokm']) ? $_smarty_tpl->getVariable('price')->value['plan_chaokm'] : null)=='n'){?>
                                                               
                                                                <?php }else{ ?>
                                                                <?php echo (isset($_smarty_tpl->getVariable('price')->value['plan_chaokmy']) ? $_smarty_tpl->getVariable('price')->value['plan_chaokmy'] : null);?>

                                                                <?php }?></td> 
                                                            <td><?php echo (isset($_smarty_tpl->getVariable('price')->value['plan_deposit1']) ? $_smarty_tpl->getVariable('price')->value['plan_deposit1'] : null);?>
</td> 
                                                            <td><?php echo (isset($_smarty_tpl->getVariable('price')->value['plan_deposit2']) ? $_smarty_tpl->getVariable('price')->value['plan_deposit2'] : null);?>
</td> 
                                                              
                                                            
                                                     </tr>
                                                     <?php }?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <!-- 全局js -->
    <!-- <script src="../../../crm1/js/jquery.min.js?v=2.1.4"></script> -->
    <script src="../../../crm1/js/bootstrap.min.js?v=3.3.6"></script>

    <script>

      function price(carid){
        demo_iframe('price.php?car_id='+carid,'添加租赁报价方案',980,520,'login_js');
      }
      function update_price(id){
        demo_iframe('price.php?task=update_price&id='+id,'修改租赁报价方案',980,520,'login_js');
      }

        $(".nav-tabs li").click(function(){
            let xdd = $(this).index();
            $(".tab-pane").eq(xdd).show().siblings(".tab-pane").hide();
        })
    </script>
    
    <script>
      var mySwiper = new Swiper('.swiper-container',{
        slidesPerView: 3,
        //Enable Scrollbar
        scrollbar: {
          container: '.swiper-scrollbar',
          hide: false,
          draggable: true,
          snapOnRelease: true
        }
      })
    </script>
    
    <script>
        $(document).ready(function () {

            $('#loading-example-btn').click(function(){
                btn = $(this);
                simpleLoad(btn, true)

                // Ajax example
                //                $.ajax().always(function () {
                //                    simpleLoad($(this), false)
                //                });

                simpleLoad(btn, false)
            });
        });

        function simpleLoad(btn, state) {
            if (state) {
                btn.children().addClass('fa-spin');
                btn.contents().last().replaceWith("Loading");
            } else {
                setTimeout(function () {
                    btn.children().removeClass('fa-spin');
                    btn.contents().last().replaceWith("Refresh");
                }, 2000);
            }
        }
    </script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
    <!--统计代码，可删除-->
</body>

</html>
