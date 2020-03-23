<?php /* Smarty version Smarty-3.0.4, created on 2019-09-30 00:01:38
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/zijia_linshi/zijia_detail_a.html" */ ?>
<?php /*%%SmartyHeaderCode:6107083495d90d5623b2dd1-70258742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66ec420e639eb0b6d6ff5a84eddd8e9b02e40132' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/zijia_linshi/zijia_detail_a.html',
      1 => 1569749245,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6107083495d90d5623b2dd1-70258742',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <title>订单详情</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="../../../crm1/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="../../../crm1/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="../../../crm1/css/animate.css" rel="stylesheet">
    <link href="../../../crm1/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="row">
        <div class="col-sm-12">
            <div class="wrapper wrapper-content animated fadeInUp">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="m-b-md">
                                    <h2>运河租车临时自驾 &nbsp;&nbsp;&nbsp;<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_contractNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_contractNum'] : null);?>
</h2>
                                </div>
                                <dl class="dl-horizontal">
                                    <dt>状态：</dt>
                                    <dd><span class="label label-primary">
                                    <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_jie']) ? $_smarty_tpl->getVariable('list')->value['paiche_jie'] : null)==-3){?>取消
                                    <?php }elseif((isset($_smarty_tpl->getVariable('list')->value['paiche_jie']) ? $_smarty_tpl->getVariable('list')->value['paiche_jie'] : null)==-2){?>违约
                                    <?php }elseif((isset($_smarty_tpl->getVariable('list')->value['paiche_jie']) ? $_smarty_tpl->getVariable('list')->value['paiche_jie'] : null)==-1){?>预约
                                    <?php }elseif((isset($_smarty_tpl->getVariable('list')->value['paiche_jie']) ? $_smarty_tpl->getVariable('list')->value['paiche_jie'] : null)==1){?>调车未还
                                    <?php }elseif((isset($_smarty_tpl->getVariable('list')->value['paiche_jie']) ? $_smarty_tpl->getVariable('list')->value['paiche_jie'] : null)==2){?>还车未结账
                                    <?php }elseif((isset($_smarty_tpl->getVariable('list')->value['paiche_jie']) ? $_smarty_tpl->getVariable('list')->value['paiche_jie'] : null)==3){?>已结账
                                    <?php }?>
                                </span>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <dl class="dl-horizontal">

                                    <dt>业务归属门店：</dt>
                                    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['shop_namea']) ? $_smarty_tpl->getVariable('list')->value['shop_namea'] : null);?>
</dd>
                                    <dt>业务员：</dt>
                                    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['emp_namea']) ? $_smarty_tpl->getVariable('list')->value['emp_namea'] : null);?>
</dd>
                                   
                                    <?php if ((isset($_smarty_tpl->getVariable('list')->value['jiedaiyuan']) ? $_smarty_tpl->getVariable('list')->value['jiedaiyuan'] : null)){?>
                                    <dt>调度人：</dt>
                                    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['jiedaiyuan']) ? $_smarty_tpl->getVariable('list')->value['jiedaiyuan'] : null);?>
</dd>
                                    <?php }?>
                                </dl>
                            </div>
                            <div class="col-sm-7" id="cluster_info">
                                <dl class="dl-horizontal">
                                    <dt>客户来源：</dt>
                                    <dd><?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_pintaiid']) ? $_smarty_tpl->getVariable('list')->value['paiche_pintaiid'] : null)!=0){?>平台客户
                                            &nbsp;&nbsp;&nbsp;单号：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_pintainum']) ? $_smarty_tpl->getVariable('list')->value['paiche_pintainum'] : null);?>

                                        <?php }else{ ?>临时散客<?php }?>
                                    </dd>
                                    <dt>用车开始时间：</dt>
                                    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate_All'] : null);?>
</dd>
                                    <dt>预计结束时间：</dt>
                                    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_endDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_endDate_All'] : null);?>
</dd>
                                    <?php if ((isset($_smarty_tpl->getVariable('list')->value['settle_endDate']) ? $_smarty_tpl->getVariable('list')->value['settle_endDate'] : null)){?>
                                    <dt>实际还车时间：</dt>
                                    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_endDate']) ? $_smarty_tpl->getVariable('list')->value['settle_endDate'] : null);?>
</dd>
                                    <?php }?>
                                    <dt>开车线路：</dt>
                                    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_line']) ? $_smarty_tpl->getVariable('list')->value['paiche_line'] : null);?>
</dd>
                               
                                </dl>
                            </div>
                        </div>
                        
                        <div class="row m-t-sm">
                            <div class="col-sm-12">
                                <div class="panel blank-panel">
                                    <div class="panel-heading">
                                        <div class="panel-options">
                                            <ul class="nav nav-tabs">
                                                <li><a href="project_detail.html#tab-1" data-toggle="tab">客户信息</a>
                                                </li>

                                                <li class=""><a href="project_detail.html#tab-5" data-toggle="tab">租赁费用列表</a>
                                                </li>

                                                <li class=""><a href="project_detail.html#tab-2" data-toggle="tab">收款/支出记录</a>
                                                </li>
                                                <li class=""><a href="project_detail.html#tab-3" data-toggle="tab">出车记录</a>
                                                </li>
                                                <li class=""><a href="project_detail.html#tab-4" data-toggle="tab">违章记录</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">

                                        <div class="tab-content">

                                            <div class="tab-pane active" id="tab-1">
                                                <div class="feed-activity-list">
                                                    <div class="feed-element">
                                                       
                                                        <div class="media-body ">
                                                           
                                                           <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_linkerPicture']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerPicture'] : null)){?>
                                                           <img src="../../../thumb/upload/idpicture/<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerPicture']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerPicture'] : null);?>
" style="width: 100px;height: 130px">
                                                           <br/><br/>
                                                           <?php }elseif((isset($_smarty_tpl->getVariable('list')->value['paiche_tupian']) ? $_smarty_tpl->getVariable('list')->value['paiche_tupian'] : null)){?>
                                                                <img src="../../../thumb/upload/idpicture/<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_tupian']) ? $_smarty_tpl->getVariable('list')->value['paiche_tupian'] : null);?>
" style="width: 100px;height: 130px">
                                                           <br/><br/>
                                                           <?php }?>
                                                           身份验证方式：<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_stype']) ? $_smarty_tpl->getVariable('list')->value['paiche_stype'] : null)==0){?>
                                                           手动输入
                                                           <?php }elseif((isset($_smarty_tpl->getVariable('list')->value['paiche_stype']) ? $_smarty_tpl->getVariable('list')->value['paiche_stype'] : null)==1){?>
                                                           刷身份证验证
                                                           <?php }elseif((isset($_smarty_tpl->getVariable('list')->value['paiche_stype']) ? $_smarty_tpl->getVariable('list')->value['paiche_stype'] : null)==2){?>
                                                           老客户短信验证
                                                           <?php }elseif((isset($_smarty_tpl->getVariable('list')->value['paiche_stype']) ? $_smarty_tpl->getVariable('list')->value['paiche_stype'] : null)==3){?>
                                                           新客户人脸验证
                                                           <?php }?>



                                                           <br/><br/>
                                                           承租人姓名：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linker']) ? $_smarty_tpl->getVariable('list')->value['paiche_linker'] : null);?>

                                                           <br/><br/>
                                                           承租人联系电话：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerPhone']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerPhone'] : null);?>

                                                           <br/><br/>
                                                           承租人联系人身份证：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerNum'] : null);?>

                                                           <br/><br/>
                                                           承租人地址：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerAdd']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerAdd'] : null);?>

                                                           <br/><br/><hr/>
                                                        </div>
                                                        <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_promier']) ? $_smarty_tpl->getVariable('list')->value['paiche_promier'] : null)){?>
                                                        <div class="media-body ">
                                                           担保人姓名：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promier']) ? $_smarty_tpl->getVariable('list')->value['paiche_promier'] : null);?>

                                                           <br/><br/>
                                                           <img src="../../../thumb/upload/idpicture/<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promierPicture']) ? $_smarty_tpl->getVariable('list')->value['paiche_promierPicture'] : null);?>
">
                                                           <br/><br/>
                                                           担保人联系电话：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promierPhone']) ? $_smarty_tpl->getVariable('list')->value['paiche_promierPhone'] : null);?>

                                                           <br/><br/>
                                                           担保人联系人身份证：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promierNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_promierNum'] : null);?>

                                                           <br/><br/>
                                                           担保人地址：<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promierAdd']) ? $_smarty_tpl->getVariable('list')->value['paiche_promierAdd'] : null);?>

                                                        </div>
                                                        <?php }?>
                                                    </div>
                                                </div>

                                            </div>



                                            <div class="tab-pane" id="tab-2">
                                                <table class="table table-striped">
                                                   
                                                    <thead>
                                                        <tr>
                                                            <th>序号</th>
                                                            <th>时间</th>
                                                            <th>收入</th>
                                                            <th>支出</th>
                                                            <th>方式</th>
                                                            <th>账户</th>
                                                            <th>摘要</th>  
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, null);?>
                                                        <?php $_smarty_tpl->tpl_vars['f_money'] = new Smarty_variable(0, null, null);?><?php $_smarty_tpl->tpl_vars['z_money'] = new Smarty_variable(0, null, null);?>
                                                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('accountlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
                                                        <tr>
                                                            <td>
                                                                <?php echo $_smarty_tpl->getVariable('i')->value;?>

                                                            </td>
                                                            <td>
                                                                <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['add_time']) ? $_smarty_tpl->tpl_vars['row']->value['add_time'] : null);?>

                                                            </td>
                                                           <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null)>0){?>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
</td>
                                                            <td>&nbsp;</td>
                                                                <?php $_smarty_tpl->tpl_vars['z_money'] = new Smarty_variable($_smarty_tpl->getVariable('z_money')->value+(isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null), null, null);?>
                                                            <?php }else{ ?>
                                                            <td>&nbsp;</td>
                                                            <td><?php echo -1*(isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
</td>
                                                                <?php $_smarty_tpl->tpl_vars['f_money'] = new Smarty_variable($_smarty_tpl->getVariable('f_money')->value+(-1*(isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null)), null, null);?>
                                                            <?php }?>
                                                            <td>
                                                                <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['payment_name']) ? $_smarty_tpl->tpl_vars['row']->value['payment_name'] : null);?>

                                                            </td>
                                                            <td>
                                                                <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_name']) ? $_smarty_tpl->tpl_vars['row']->value['bank_name'] : null);?>

                                                            </td>
                                                            <td>
                                                               <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
&nbsp;&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['remark']) ? $_smarty_tpl->tpl_vars['row']->value['remark'] : null);?>

                                                            </td>


                                                        </tr>
                                                        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->getVariable('i')->value+1, null, null);?>
                                                        <?php }} ?>

                                                        <tr>
                                                            <td colspan="7">

                                                                合计收入:<span style="color: red"><?php echo $_smarty_tpl->getVariable('z_money')->value;?>
</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                合计支出:<span style="color: green"><?php echo $_smarty_tpl->getVariable('f_money')->value;?>
</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                总计：<span style="color: <?php if (($_smarty_tpl->getVariable('z_money')->value-$_smarty_tpl->getVariable('f_money')->value)>=0){?>red<?php }else{ ?>green<?php }?>"><?php echo $_smarty_tpl->getVariable('z_money')->value-$_smarty_tpl->getVariable('f_money')->value;?>
</span>
                                                        
                                                        </td>
                                                    </tr>
                                                        
                                                    </tbody>
                                                </table>

                                            </div>
                                            

                                            <div class="tab-pane" id="tab-3">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>序号</th>
                                                            <th>用车开始时间</th>
                                                            <th>用车结束时间</th>
                                                            <th>车辆</th>
                                                            <th>车辆起始的公里数</th>
                                                            <th>车辆结束的公里数</th>
                                                            <th>车辆行驶公里数</th>
                                                           
                                                            <th>换车备注</th>
                                                            <th>调度人</th>
                                                            <th>打印</th>  
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                       <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('changelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
                      <tr >
                            <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>

                            <td><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1==1){?>
                                    <?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate_All'] : null);?>

                               
                                <?php }else{ ?>
                                     <?php echo (isset($_smarty_tpl->getVariable('changelist')->value[$_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']-1]['changecar_times_all']) ? $_smarty_tpl->getVariable('changelist')->value[$_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']-1]['changecar_times_all'] : null);?>

                                <?php }?>
                            </td>
                            <td>
                                <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_times_all']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_times_all'] : null);?>

                            </td>
                            <td>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['carA']) ? $_smarty_tpl->tpl_vars['row']->value['carA'] : null);?>
</td>
                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_carAStartKilo']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_carAStartKilo'] : null);?>
</td>
                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_carAEndKilo']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_carAEndKilo'] : null);?>
</td>
                            
                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_carAEndKilo']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_carAEndKilo'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['changecar_carAStartKilo']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_carAStartKilo'] : null);?>
</td>
                           
                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_rentRemarks']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_rentRemarks'] : null);?>
</td>
                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecarMan']) ? $_smarty_tpl->tpl_vars['row']->value['changecarMan'] : null);?>
</td>

                            <td><?php if ($_smarty_tpl->getVariable('print')->value==1){?><a href="print.php?uid=<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
&cid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['changecar_id']) ? $_smarty_tpl->tpl_vars['row']->value['changecar_id'] : null);?>
&className=changecar" target="_blank">打印换车单</a>
                                <?php }?>
                            </td>
                     </tr>
                     <?php }} ?>
                     <tr>
                         <td><?php echo count($_smarty_tpl->getVariable('changelist')->value)+1;?>
</td>
                         <?php if (count($_smarty_tpl->getVariable('changelist')->value)>0){?>
                            <td><?php echo (isset($_smarty_tpl->getVariable('changelist')->value[count($_smarty_tpl->getVariable('changelist')->value)-1]['changecar_times_all']) ? $_smarty_tpl->getVariable('changelist')->value[count($_smarty_tpl->getVariable('changelist')->value)-1]['changecar_times_all'] : null);?>
</td>
                         <?php }else{ ?>
                        <td> <?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate_All']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate_All'] : null);?>
</td>
                             
                         <?php }?>
                        
                         <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_endDate']) ? $_smarty_tpl->getVariable('list')->value['settle_endDate'] : null);?>
</td>
                         <td>苏D<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
</td>
                         <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_startKm']) ? $_smarty_tpl->getVariable('list')->value['settle_startKm'] : null);?>
</td>
                         <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_endKm']) ? $_smarty_tpl->getVariable('list')->value['settle_endKm'] : null);?>
</td>
                         <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_endKm']) ? $_smarty_tpl->getVariable('list')->value['settle_endKm'] : null)-(isset($_smarty_tpl->getVariable('list')->value['settle_startKm']) ? $_smarty_tpl->getVariable('list')->value['settle_startKm'] : null);?>
</td>
                       
                         
                         <td></td>
                         <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['jiedaiyuan']) ? $_smarty_tpl->getVariable('list')->value['jiedaiyuan'] : null);?>
</td>
                         <td></td>
                     </tr>
                     <?php if ((isset($_smarty_tpl->getVariable('list')->value['settle_totalcalKm']) ? $_smarty_tpl->getVariable('list')->value['settle_totalcalKm'] : null)>0){?>
                     <tr>
                        <td rowspan="5">共计行驶：</td>
                         <td rowspan="5"><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_totalcalKm']) ? $_smarty_tpl->getVariable('list')->value['settle_totalcalKm'] : null);?>
&nbsp;&nbsp;公里</td>
                     </tr>
                     <?php }?>
                                                                          
                                                    </tbody>
                                                </table>










                                            </div>



                                            <div class="tab-pane" id="tab-4">
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
 $_from = $_smarty_tpl->getVariable('breaklist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
                                                      <tr >
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
" target="_blank"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_end']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_end'] : null);?>
</a></td>
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




                                               <div class="tab-pane" id="tab-5">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                                <th width="15%">收费项目</th>
                                                                <th width="15%">收费金额</th>
                                                                <th width="15%">已收金额</th>
                                                                <th width="25%">操作时间</th>
                                                                 <th width="15%">操作人</th>
                                                                <th width="25%">备注</th>
                                                                
                                                               
                                                 
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $_smarty_tpl->tpl_vars['sum_money'] = new Smarty_variable(0, null, null);?>
                                                        <?php $_smarty_tpl->tpl_vars['have_in_money'] = new Smarty_variable(0, null, null);?>
                                                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('chargelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
                                                      <tr >
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null);?>
</td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null);?>
</td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
</td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['addtime']) ? $_smarty_tpl->tpl_vars['row']->value['addtime'] : null);?>
</td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</td>
                                                            <td>
                                                                <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null)=="押金"){?>
                                                                已冻结:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_freeze_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_freeze_money'] : null);?>
元<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['back_money']) ? $_smarty_tpl->tpl_vars['row']->value['back_money'] : null)!=0){?>-已退:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null);?>
元<?php }?>
                                                                <?php }else{ ?>
                                                                
                                                            <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['continuerent_start']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_start'] : null)&&(isset($_smarty_tpl->tpl_vars['row']->value['continuerent_end']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_end'] : null)){?>
                                                            <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_start']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_start'] : null);?>
~<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['continuerent_end']) ? $_smarty_tpl->tpl_vars['row']->value['continuerent_end'] : null);?>

                                                            <?php }?>

                                                            <?php }?>
                                                        </td> 
                                                            
                                                            
                                                     </tr>
                                                     <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null)!="押金"){?>
                                                     <?php $_smarty_tpl->tpl_vars['sum_money'] = new Smarty_variable($_smarty_tpl->getVariable('sum_money')->value+(isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null), null, null);?>
                                                     <?php $_smarty_tpl->tpl_vars['have_in_money'] = new Smarty_variable($_smarty_tpl->getVariable('have_in_money')->value+(isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null), null, null);?>
                                                     <?php }?>
                                                     <?php }} ?>


                                                        <?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overKmMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overKmMoney'] : null);?>

                                                    <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)!="Y"&&(isset($_smarty_tpl->getVariable('list')->value['settle_overKmMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overKmMoney'] : null)!=0){?>

                                                    <tr>
                                                        <td>超公里费</td>
                                                        <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overKmMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overKmMoney'] : null);?>
</td>
                                                        <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overKmMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_overKmMoney_have'] : null);?>
</td>
                                                        <td></td>
                                                         <td></td>
                                                          <td></td>
                                                    </tr>
                                                    <?php }?>


                                                    <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitTime'] : null)!="Y"&&(isset($_smarty_tpl->getVariable('list')->value['settle_overTimeMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overTimeMoney'] : null)!=0){?>
                                                    <tr>
                                                    <td>超时费</td>
                                                    <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overTimeMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overTimeMoney'] : null);?>
</td>
                                                    <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overTimeMoney_have']) ? $_smarty_tpl->getVariable('list')->value['settle_overTimeMoney_have'] : null);?>
</td>
                                                    <td></td>
                                                     <td></td>
                                                      <td></td>
                                                    </tr>
                                                    <?php }?>

                                                    
                                                    
                                                    <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_status']) ? $_smarty_tpl->getVariable('list')->value['paiche_status'] : null)==-1){?>
                                                    <tr>
                                                        <td>违约金</td>
                                                        <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_vio']) ? $_smarty_tpl->getVariable('list')->value['settle_vio'] : null);?>
</td>
                                                        <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_vio']) ? $_smarty_tpl->getVariable('list')->value['settle_vio'] : null);?>
</td>
                                                        <td></td>
                                                         <td></td>
                                                          <td></td>
                                                    </tr>
                                                    <?php }?>


                                                    <!--
                                                     <tr>
                                                        <td>共计：</td>
                                                         <td>应收：<?php echo $_smarty_tpl->getVariable('sum_money')->value;?>
</td>
                                                         <td>已收：<?php echo $_smarty_tpl->getVariable('have_in_money')->value;?>
</td>
                                                        <?php if ((isset($_smarty_tpl->getVariable('list')->value['settle_favor']) ? $_smarty_tpl->getVariable('list')->value['settle_favor'] : null)>0){?> 
                                                        <td>优惠：<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_favor']) ? $_smarty_tpl->getVariable('list')->value['settle_favor'] : null);?>
(优惠原因：<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_favorreason']) ? $_smarty_tpl->getVariable('list')->value['settle_favorreason'] : null);?>
)
                                                        </td>
                                                        <?php }?>
                                                        <td>
                                                            剩余未收：
                                                            <?php echo $_smarty_tpl->getVariable('sum_money')->value-$_smarty_tpl->getVariable('have_in_money')->value;?>

                                                        </td>
                                                         
                                                         
                                                     </tr>
                                                 -->
                                                       
                                                        
                                                    </tbody>
                                                </table>
                                                <?php if ($_smarty_tpl->getVariable('youhui_list')->value){?>
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                                <th width="15%">优惠项目</th>
                                                                <th width="15%">优惠金额</th>
                                                                <th width="15%">已优惠金额</th>
                                                                <th width="15%">优惠时间</th>
                                                                <th width="25%">优惠原因</th>
                                                                
                                                                <th width="15%">操作人</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                         <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('youhui_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
                                                      <tr >
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_name']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_name'] : null);?>
</td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_mone']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_mone'] : null);?>
</td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_omone']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_omone'] : null);?>
</td>
                                                            <td>
                                                                <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_addtime']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_addtime'] : null);?>

                                                            </td>
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_liyou']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_liyou'] : null);?>
</td>
                                                             
                                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</td>
                                                     </tr>
                                                     <?php }} ?>
                                                     <?php if ((isset($_smarty_tpl->getVariable('list')->value['settle_favor']) ? $_smarty_tpl->getVariable('list')->value['settle_favor'] : null)!=0){?>
                                                    <tr>
                                                        <td>优惠</td>
                                                        <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_favor']) ? $_smarty_tpl->getVariable('list')->value['settle_favor'] : null);?>
</td>
                                                        <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_favor']) ? $_smarty_tpl->getVariable('list')->value['settle_favor'] : null);?>
</td>
                                                        <td></td>
                                                        <td><?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_favorreason']) ? $_smarty_tpl->getVariable('list')->value['settle_favorreason'] : null);?>
</td>
                                                        <td></td>
                                                    </tr>
                                                    <?php }?>
                                                    </tbody>
                                                </table>
                                                <?php }?>
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
    <script src="../../../crm1/js/jquery.min.js?v=2.1.4"></script>
    <script src="../../../crm1/js/bootstrap.min.js?v=3.3.6"></script>



    


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
