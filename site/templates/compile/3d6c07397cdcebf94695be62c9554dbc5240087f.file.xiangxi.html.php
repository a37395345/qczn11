<?php /* Smarty version Smarty-3.0.4, created on 2020-01-04 14:12:07
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/client/xiangxi.html" */ ?>
<?php /*%%SmartyHeaderCode:276675e102cb7c90841-35439848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d6c07397cdcebf94695be62c9554dbc5240087f' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/client/xiangxi.html',
      1 => 1578118269,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '276675e102cb7c90841-35439848',
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
    <link href="../../../css/conmone.css" rel="stylesheet">
    <script type="text/javascript" src="../../../js/jquery.js">
    </script>
    <link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css?a=2" rel="stylesheet">
    <script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js?a=6"></script>
    <script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN1.js?a=101"></script>
    <style>
        .panel-body1{
            padding: 20px;
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




                                    <h2>客户资料 &nbsp;&nbsp;&nbsp;<span style="font-size: 22px;"><?php echo (isset($_smarty_tpl->getVariable('client')->value['client_name']) ? $_smarty_tpl->getVariable('client')->value['client_name'] : null);?>
</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <dl class="dl-horizontal">
                                    <dt>公司地址：</dt>
                                    <dd><?php echo (isset($_smarty_tpl->getVariable('client')->value['client_add']) ? $_smarty_tpl->getVariable('client')->value['client_add'] : null);?>
</dd>
                                    <dt>公司电话：</dt>
                                    <dd><?php echo (isset($_smarty_tpl->getVariable('client')->value['client_tel']) ? $_smarty_tpl->getVariable('client')->value['client_tel'] : null);?>
</dd>
                                </dl>
                            </div>
                            <div class="col-sm-7" id="cluster_info">
                                <dl class="dl-horizontal">
                                    <dt>业务门店：</dt>
                                    <dd><?php echo (isset($_smarty_tpl->getVariable('client')->value['shop_name']) ? $_smarty_tpl->getVariable('client')->value['shop_name'] : null);?>
</dd>
                                    <dt>业务员：</dt>
                                    <dd><?php echo (isset($_smarty_tpl->getVariable('client')->value['emp_name']) ? $_smarty_tpl->getVariable('client')->value['emp_name'] : null);?>
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
                                                <li><a href="javascript:;" data-toggle="tab">客户详细信息</a>
                                                </li>

                                                <li class=""><a href="javascript:;" data-toggle="tab">详细联系人</a>
                                                </li>

                                                <li class=""><a href="javascript:;" data-toggle="tab">长期自驾订单</a>
                                                </li>
                                                <li class=""><a href="javascript:;" data-toggle="tab">长期代驾合同</a>
                                                </li>
                                                <li class=""><a href="javascript:;" data-toggle="tab">违章记录</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body1">
                                        <div class="tab-content">
                                            <div class="tab-pane active" >
                                                <div class="feed-activity-list">
                                                    <div class="feed-element">
                                                        <div class="media-body ">
                                                           营业执照：<?php echo (isset($_smarty_tpl->getVariable('client')->value['client_license']) ? $_smarty_tpl->getVariable('client')->value['client_license'] : null);?>
<br/><br/>
                                                           开户银行：<?php echo (isset($_smarty_tpl->getVariable('client')->value['client_bank']) ? $_smarty_tpl->getVariable('client')->value['client_bank'] : null);?>
<br/><br/>
                                                           账号：<?php echo (isset($_smarty_tpl->getVariable('client')->value['client_account']) ? $_smarty_tpl->getVariable('client')->value['client_account'] : null);?>
<br/><br/>
                                                           传真：<?php echo (isset($_smarty_tpl->getVariable('client')->value['client_fax']) ? $_smarty_tpl->getVariable('client')->value['client_fax'] : null);?>
<br/><br/>
                                                           邮箱：<?php echo (isset($_smarty_tpl->getVariable('client')->value['client_mail']) ? $_smarty_tpl->getVariable('client')->value['client_mail'] : null);?>
<br/><br/>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane">
                                                <table class="table table-striped">
                                                    <div class="ibox-tools" style="float: left;margin-bottom: 20px;">

                    <a class="btn btn-outline btn-default" href="javascript:;" onclick="add_lianxi(<?php echo (isset($_smarty_tpl->getVariable('client')->value['client_id']) ? $_smarty_tpl->getVariable('client')->value['client_id'] : null);?>
);return false" >
                        <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                        添加联系人
                    </a>
                </div>
               
                                                    <thead>
                                                        <tr>
                                                                <th width="12.5%">联系人姓名</th>
                                                                <th width="12.5%">电话号码</th>
                                                                <th width="12.5%">职位</th>
                                                                <th width="12.5%">联系人地址</th>
                                                                <th width="12.5%">联系人备用地址</th>
                                                                 <th width="12.5%">备注</th>
                                                                <th width="12.5%">是否是主联系人</th>
                                                               
                                                               <th width="12.5%">操作</th>
                                                 
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('lianxi_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
                                                      <tr>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
</td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['phone']) ? $_smarty_tpl->tpl_vars['row']->value['phone'] : null);?>
</td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['zhiwei']) ? $_smarty_tpl->tpl_vars['row']->value['zhiwei'] : null);?>
</td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['dizhi_a']) ? $_smarty_tpl->tpl_vars['row']->value['dizhi_a'] : null);?>
</td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['dizhi_b']) ? $_smarty_tpl->tpl_vars['row']->value['dizhi_b'] : null);?>
</td> 
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['beizhu']) ? $_smarty_tpl->tpl_vars['row']->value['beizhu'] : null);?>
</td> 
                                                            <td style="padding-left: 2%">
                                                                <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['zhu']) ? $_smarty_tpl->tpl_vars['row']->value['zhu'] : null)==1){?>
                                                                <i class="fa fa-check" style="color:green"></i>
                                                                <?php }?>
                                                            </td>  
                                                              
                                                            <td>

                                        
                            
                                                                <a href="javascript:;" onclick="edit_lianxi(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
);return false" title="修改" style="color:#CC6600" target="_blank"><i class="iconfont icon-xiugai"></i>
                                                                </a>



                                                                &nbsp;&nbsp;&nbsp;&nbsp;



                                                                <a title="删除"  href="javascript:;" onclick="delete_lianxi(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
);return false" ><i class="iconfont icon-shanchu"></i></a>
                                                            </td>
                                                     </tr>
                                                     <?php }} ?>
                                                    </tbody>
                                                </table>
                                            </div>



                                            <div class="tab-pane" >
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>合同单号</th>
                                                            <th>使用车辆</th>
                                                            <th>开始时间</th>
                                                            <th>结束时间</th>
                                                            <th>订单状态</th>
                                                            <th>详细</th> 
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                         <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('paiche_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
                                                        <tr>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_contractNum'] : null);?>
</td>
                                                            <td>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
</td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_startDate'] : null);?>
</td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_endDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_endDate'] : null);?>
</td>
                                                            <td>
                                                            <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_jie']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_jie'] : null)==-1){?>
                                                                预约
                                                            <?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['paiche_jie']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_jie'] : null)==1){?>
                                                            调车未还
                                                            <?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['paiche_jie']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_jie'] : null)==2){?>
                                                            已还未结
                                                            <?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['paiche_jie']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_jie'] : null)==3){?>
                                                            已结
                                                            <?php }?>
                                                            </td>
                                                            <td><a title="明细" href="/site/operator/changqi_zijia/index.php?task=mingxi&pid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="_blank"><i class="iconfont icon-mingxi1" ></i></a></td>
                                                        </tr>
                                                        <?php }} ?>
                                                        
                                                    </tbody>
                                                </table>

                                            </div>
                                            
                                            <!-- 长期代驾合同板块 -->
                                            <div class="tab-pane">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                       <tr>
                                                           <td></td>
                                                       </tr>                
                                                    </tbody>
                                                </table>
                                            </div>

                                               
                                            <div class="tab-pane">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                                <th>序号</th>
                                                                <th>车辆</th>
                                                                <th>违章时间</th>
                                                                <th>违章项目</th>
                                                                <th>违章款</th>
                                                                <th>手续费</th>
                                                                <th>扣分</th>
                                                                <th>金额抵扣分</th>
                                                                <th>总金额</th>
                                                                <th>备注</th>
                                                                <th>冻结押金时间</th>
                                                                <th>处理时间</th>
                                                                <th>状态</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                         <?php $_smarty_tpl->tpl_vars['sum_breakrules_money1'] = new Smarty_variable(0, null, null);?>
                                                        
                                                        <?php $_smarty_tpl->tpl_vars['sum_breakrules_money2'] = new Smarty_variable(0, null, null);?>
                                                        
                                                        <?php $_smarty_tpl->tpl_vars['sum_breakrules_money3'] = new Smarty_variable(0, null, null);?>
                                                        
                                                        <?php $_smarty_tpl->tpl_vars['sum_breakrules_money4'] = new Smarty_variable(0, null, null);?>
                                                        
                                                        <?php $_smarty_tpl->tpl_vars['sum_breakrules_money'] = new Smarty_variable(0, null, null);?>
                                                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('weizhang_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
                                                      <tr>
                                                           <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>
                                                            <td>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
</td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_date']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_date'] : null);?>
</td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_item']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_item'] : null);?>
</td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money1']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money1'] : null);?>
</td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money2']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money2'] : null);?>
</td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money3']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money3'] : null);?>
</td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money4']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money4'] : null);?>
</td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money'] : null);?>
</td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_remarks']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_remarks'] : null);?>
</td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_times']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_times'] : null);?>
</td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_endtimes']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_endtimes'] : null);?>
</td>
                                                            <td><a href="../machine/modify.php?task=breakdetail&amp;uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_id'] : null);?>
" target="_blank"><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['breakrules_end']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_end'] : null)==0){?>未处理<?php }else{ ?>已处理<?php }?></a></td>

                                                     </tr>
                                                      <?php $_smarty_tpl->tpl_vars['sum_breakrules_money'] = new Smarty_variable($_smarty_tpl->getVariable('sum_breakrules_money')->value+(isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money'] : null), null, null);?>
                                                    <?php $_smarty_tpl->tpl_vars['sum_breakrules_money1'] = new Smarty_variable($_smarty_tpl->getVariable('sum_breakrules_money1')->value+(isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money1']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money1'] : null), null, null);?>
                                                    <?php $_smarty_tpl->tpl_vars['sum_breakrules_money2'] = new Smarty_variable($_smarty_tpl->getVariable('sum_breakrules_money2')->value+(isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money2']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money2'] : null), null, null);?>
                                                    <?php $_smarty_tpl->tpl_vars['sum_breakrules_money3'] = new Smarty_variable($_smarty_tpl->getVariable('sum_breakrules_money3')->value+(isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money3']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money3'] : null), null, null);?>
                                                    <?php $_smarty_tpl->tpl_vars['sum_breakrules_money4'] = new Smarty_variable($_smarty_tpl->getVariable('sum_breakrules_money4')->value+(isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money4']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money4'] : null), null, null);?>
                                                     <?php }} ?>
                                                      <tr>
                        <td>共计：</td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td ><?php echo $_smarty_tpl->getVariable('sum_breakrules_money1')->value;?>
</td>
                         <td ><?php echo $_smarty_tpl->getVariable('sum_breakrules_money2')->value;?>
</td>
                         <td ><?php echo $_smarty_tpl->getVariable('sum_breakrules_money3')->value;?>
</td>
                         <td ><?php echo $_smarty_tpl->getVariable('sum_breakrules_money4')->value;?>
</td>
                         <td >
                            <?php echo $_smarty_tpl->getVariable('sum_breakrules_money')->value;?>
 

                         </td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                     </tr>
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
        $(".nav-tabs li").click(function(){
            let xdd = $(this).index();
            $(".tab-pane").eq(xdd).show().siblings(".tab-pane").hide();
        })
    </script>
    
    <script>
    var body_W = $("body").width();
    function setBody_W(){
        body_W = $("body").width();
    }

    function add_lianxi(id){
        setBody_W();
        demo_iframe('index.php?task=add_lianxi&client_id='+id,'增加其他联系人',body_W,500,'login_js');
    }

    function edit_lianxi(id){
        setBody_W();
        demo_iframe('index.php?task=edit_lianxi&id='+id,'管理其他联系人',body_W,500,'login_js');
    }

    function delete_lianxi(id){
        setBody_W();
        demo_iframe('index.php?task=delete_lianxi&id='+id,'删除联系人',body_W,500,'login_js');
    }
    
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

            $('#loading-example-btn').click(function () {
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
                btn.contents().last().replaceWith(" Loading");
            } else {
                setTimeout(function () {
                    btn.children().removeClass('fa-spin');
                    btn.contents().last().replaceWith(" Refresh");
                }, 2000);
            }
        }
    </script>

    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
    <!--统计代码，可删除-->

</body>

</html>
