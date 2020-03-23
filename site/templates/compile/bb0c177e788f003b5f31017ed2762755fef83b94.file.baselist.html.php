<?php /* Smarty version Smarty-3.0.4, created on 2020-02-12 15:35:19
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/machine/baselist.html" */ ?>
<?php /*%%SmartyHeaderCode:215205e43aab7ab7c67-60735275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb0c177e788f003b5f31017ed2762755fef83b94' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/machine/baselist.html',
      1 => 1581492845,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '215205e43aab7ab7c67-60735275',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>

<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:03 GMT -->
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>车辆基础资料</title>
<link rel="shortcut icon" href="favicon.ico">
<link href="../../../crm/fonts1/iconfont.css?a=1" rel="stylesheet">
<link href="../../../crm/css/bootstrap.min14ed.css" rel="stylesheet">
<link href="../../../crm/css/font-awesome.min93e3.css?v=3" rel="stylesheet">
<link href="../../../crm/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
<script type="text/javascript" src="../../../js/laydate/laydate.js"></script>
<script src="../../../crm/js/plugins/sweetalert/sweetalert.min.js"></script>
<link href="../../../crm/css/animate.min.css" rel="stylesheet">
<link href="../../../crm/css/style.min862f.css" rel="stylesheet">


<link href="../../../crm/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
<script type="text/javascript" src="../../../js/jquery.js">
</script>
<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css?a=2" rel="stylesheet">
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js?a=5"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js?a=1"></script>



    <style type="text/css">
        tr{
            font-size: 12px;line-height: 10px;
        }
        td{
            
margin: 0;padding: 1px;padding-top: 5px;padding-bottom: 5px; !important;list-style: none;color: #000000;
        }
        

    </style>
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <!-- Panel Other -->
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>车辆基础资料</h5>
        </div>
        <form id="form1" action="list.php" method="get">
            <div class="wrapper wrapper-content animated fadeInRight" style=" margin: 0; padding: 0;">
                <div class="ibox float-e-margins" style="margin:0">
                    <div class="ibox-title" style=" margin: 0; padding: 0;">
                        <input type="hidden" name="car_status" value="<?php echo $_smarty_tpl->getVariable('car_status')->value;?>
">
                        <h5 style="padding-top: 15px; padding-left: 10px;">搜索
                        </h5>

                        <div class="ibox-tools" style="padding-top: 14px; padding-left: 10px;float: left;padding-right: 20px">
                            <a class="collapse-link">
                            <i class="fa fa-chevron-down" id="up"></i>
                            </a>
                        </div>
                        
                <div class="ibox-tools" style="float: left;margin-left: 40px;margin-top: 6px">
                    <a class="btn btn-outline btn-default" href="list.php?task=create">
                        <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                        添加车辆
                    </a>
                     
                </div>
                        
                       
                        <div class="ibox-tools" style=" padding-right: 20px;float:right; ;">
                            <div class="btn-group hidden-xs pull-right" style="margin-top:5px;" id="exampleTableEventsToolbar" role="group">
                               
                                <a href="export.php?car_status=<?php echo $_smarty_tpl->getVariable('car_status')->value;?>
" class="btn btn-outline btn-default" target="_blank">
                                                 导出
                                </a>
                               
                            </div>
                        </div>
                      
                    </div>

                    <div class="ibox-content" id="content" style=" margin: 0px; padding: 0px;display: none">
                        <div class="row row-lg">
                            <div class="col-sm-12">
                                <!-- Example Events -->
                                <div class="example-wrap">
                                    <div class="example">
                                        <input type="hidden" name="type" value="<?php echo $_smarty_tpl->getVariable('type')->value;?>
">
                                        <table class="table table-bordered">
                                        <tr>
                                            <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;车牌号:</span>
                                            </th>
                                            <td width="35%">
                                                <input type="text" class="form-control input-sm" placeholder="车牌号" name="car_num">
                                            </td>
                                           
                                            <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;品牌:</span>
                                            </th>
                                            <td width="35%">
                                                <input type="text" class="form-control input-sm" placeholder="品牌" name="car_brand">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;车型:</span>
                                            </th>
                                            <td width="35%">
                                                <input type="text" class="form-control input-sm" placeholder="车型" name="car_model">
                                            </td>
                                            <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;发动机号:</span>
                                            </th>
                                            <td width="35%">
                                                <input type="text" class="form-control input-sm" placeholder="发动机号" name="car_motor">
                                            </td>

                                            
                                        </tr>

                                        <tr>
                                              <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;座位数:</span>
                                            </th>
                                            <td width="35%">
                                                <input type="text" class="form-control input-sm" placeholder="座位数" name="car_seat">
                                            </td>
                                             <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;车辆注册日期:</span>
                                            </th>
                                            <td width="35%">
                                                <input name="car_cartDate" placeholder="请输入日期" value="" class="laydate-icon " onclick="laydate({istime: true, format: 'YYYY-MM-DD'})" unselectable="on" readonly>
                                            </td>
                                           
                                        </tr>
                                        <tr>
                                             <th style="background-color:#F5F5F6" width="15%">
                                                <span style="color:#000">&nbsp;&nbsp;&nbsp;&nbsp;车辆种类:</span>
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
                                                <th style="background-color:#F5F5F6" width="15%">
                                                <span style="color:#000">车辆专用名称</span>
                                                </th>
                                                <td width="35%">
                                                    <select class="form-control input-sm" name="zhuanyong" id="zhuanyong">
                                                         <option value="0">请选择</option>
                                                        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('zhuanyong_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                                          <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['name']) ? $_smarty_tpl->tpl_vars['rows']->value['name'] : null);?>
</option>
                                                        <?php }} ?>
                                                    </select>
                                                </td>
                                        </tr>
                                        </table>


                                         <button type="submit" class="btn btn-outline btn-default" style="margin-left:45%;width: 10%">
                                <i class="glyphicon glyphicon-search" aria-hidden="true"></i>
                                                        搜索
                                </button>
                                    </div>
                                </div>
                                <!-- End Example Events -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Panel Other -->
            </div>
        </form>
        <div class="ibox-content">
            <div class="row row-lg">
                <div class="col-sm-12">
                    <!-- Example Events -->
                    <div class="example-wrap">
                        <div class="example">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="pull-left" style="margin-top:15px">
                                        <p>
                                            显示 <?php echo ($_smarty_tpl->getVariable('p')->value-1)*10+1;?>
 到 <?php echo $_smarty_tpl->getVariable('p')->value*10;?>
 项，共 <?php echo $_smarty_tpl->getVariable('total')->value;?>
 项
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="pull-right">
                                        <ul class="pagination">
                                               <?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-bordered table-hover" data-height="400" style="margin-bottom:0px" data-mobile-responsive="true">
                            <thead>
                            <tr>
                               
                               
                                <th style="text-align: center;width: 9%">
                                    车牌号
                                </th>
                                <th style="text-align: center;width: 5%">
                                    颜色
                                </th>
                                <th style="text-align: center;width: 10%">
                                    车型
                                </th>
                                <?php if ($_smarty_tpl->getVariable('car_status')->value!=3){?>
                                <!-- <th style="text-align: center;width: 8%">
                                    发动机号
                                </th>
                                <th style="text-align: center;width: 8%">
                                    车辆识别号
                                </th> -->
                                <!-- <th style="text-align: center;width: 9%">
                                    座位
                                </th> -->
                                <?php }?>
                                <th style="text-align: center;width: 8%">
                                    入账日期
                                </th>
                                <th style="text-align: center;width: 6%">
                                    开票价格
                                </th>
                        
                                <th style="text-align: center;width: 6%">
                                    实际购买车价
                                </th>
                                <th style="text-align: center;width: 6%">
                                    购置税
                                </th>
                                 <th style="text-align: center;width: 8%">
                                    车辆注册日期
                                </th>
                                 <th style="text-align: center;width: 6%">
                                    当前公里数
                                </th>
                                <?php if ($_smarty_tpl->getVariable('car_status')->value==3||$_smarty_tpl->getVariable('car_status')->value==4){?>
								<th>出售日期</th>
								<th>出售价格</th>
								<th>处理方式</th>
								<?php }?>
								<?php if ($_smarty_tpl->getVariable('car_status')->value==4){?>
								<th>过户日期</th>
								<?php }?>
                                
                                <th style="width: 10%">
                                    <div align="center">
                                        操作
                                    </div>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
                            <tr>
                               
        <td style="text-align: center;">苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
</td>
		<td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_color']) ? $_smarty_tpl->tpl_vars['row']->value['car_color'] : null);?>
</td>
		<td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_model']) ? $_smarty_tpl->tpl_vars['row']->value['car_model'] : null);?>
</td>
		<?php if ($_smarty_tpl->getVariable('car_status')->value!=3){?>
		<!-- <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_motor']) ? $_smarty_tpl->tpl_vars['row']->value['car_motor'] : null);?>
</td>
		<td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_frame']) ? $_smarty_tpl->tpl_vars['row']->value['car_frame'] : null);?>
</td> -->
		<!-- <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_seat']) ? $_smarty_tpl->tpl_vars['row']->value['car_seat'] : null);?>
</td> -->
		<?php }?>
		<td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_saleDate']) ? $_smarty_tpl->tpl_vars['row']->value['car_saleDate'] : null);?>
</td>
		<td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_amount']) ? $_smarty_tpl->tpl_vars['row']->value['car_amount'] : null);?>
</td>
		<td style="text-align: center;"><span id="span_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
" data-id="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
" class="spanremarks"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_infactamount']) ? $_smarty_tpl->tpl_vars['row']->value['car_infactamount'] : null);?>
</span>
		<input type="text" id="price_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
" value="" style="display:none;" size="4" class="textremarks" /></td>
		<td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_buytax']) ? $_smarty_tpl->tpl_vars['row']->value['car_buytax'] : null);?>
</td>
		<td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_cartDate']) ? $_smarty_tpl->tpl_vars['row']->value['car_cartDate'] : null);?>
</td>
		<td style="text-align: center;"><span id="ssan_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
" data-id="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
" class="spanremarks"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_nowKilo']) ? $_smarty_tpl->tpl_vars['row']->value['car_nowKilo'] : null);?>
</span>
		<input type="text" id="kilo_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
" value="" style="display:none;" size="4" class="textremarks" /></td>
		<?php if ($_smarty_tpl->getVariable('car_status')->value==3||$_smarty_tpl->getVariable('car_status')->value==4){?>
		<td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_cancelDate']) ? $_smarty_tpl->tpl_vars['row']->value['car_cancelDate'] : null);?>
</td>
		<td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_cancelPrice']) ? $_smarty_tpl->tpl_vars['row']->value['car_cancelPrice'] : null);?>
</td>
		<td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_canceldeal']) ? $_smarty_tpl->tpl_vars['row']->value['car_canceldeal'] : null);?>
</td>
		<?php }?>
		<?php if ($_smarty_tpl->getVariable('car_status')->value==4){?>
		<td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_changeDate']) ? $_smarty_tpl->tpl_vars['row']->value['car_changeDate'] : null);?>
</td>
		<?php }?>
		<td style="text-align: center;"><a title="明细" href="list.php?task=detail&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
" target="_blank"><i class="iconfont icon-mingxi1"></i></a>&nbsp;&nbsp;&nbsp;<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_status_code']) ? $_smarty_tpl->tpl_vars['row']->value['car_status_code'] : null)!=3){?><!-- <a title="报价方案" href="javascript:price(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
);"><i class="iconfont icon-qitafeiyong"></i></a> --><a title="编辑" href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
"><i class="iconfont icon-xiugai"></i></a>&nbsp;&nbsp;&nbsp;<a title="出售" href="list.php?task=cancel&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
"><i class="iconfont icon-qitafeiyong"></i></a>
		<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['car_changeDate']) ? $_smarty_tpl->tpl_vars['row']->value['car_changeDate'] : null)==''){?>&nbsp;<a title="过户" href="list.php?task=change&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
"><i style="color:red;font-size: 19px;
        position: relative;top: -1px;" class="fa fa-group"></i></a><?php }?>
		</td>
         </tr>
        <?php }} ?>

                            </tbody>
                            </table>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="pull-left" style="margin-top:15px">
                                        <p>
                                            显示 <?php echo ($_smarty_tpl->getVariable('p')->value-1)*10+1;?>
 到 <?php echo $_smarty_tpl->getVariable('p')->value*10;?>
 项，共 <?php echo $_smarty_tpl->getVariable('total')->value;?>
 项
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="pull-right">
                                        <ul class="pagination">
                                               <?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Example Events -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Panel Other -->
</div>

<script src="../../../crm/js/bootstrap.min.js?v=3.3.6"></script>
<script src="../../../crm/js/content.min.js?v=2"></script>
<script src="../../../crm/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
<script src="../../../crm/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
<script src="../../../crm/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
<script src="../../../crm/js/demo/bootstrap-table-demo.min.js"></script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>

<script type="text/javascript">
    function add(){
        //alert('aa');
         demo_iframe('index.php?task=add','添加菜单',1000,500,'login_js');

    }
     function edit(id){
        demo_iframe('index.php?task=edit&emp_id='+id,'修改菜单',1000,500,'login_js');

    }
    function huangang(id){
        demo_iframe('index.php?task=huangang&emp_id='+id,'换岗',1000,500,'login_js');

    }
  
        function setStatus(id) {
            swal(
                {title:"您确定切换启用？",
                      text:"",
                      type:"warning",
                      showCancelButton:true,
                      confirmButtonColor:"#DD6B55",
                      confirmButtonText:"确定",
                      cancelButtonText:"取消",
                      closeOnConfirm:false,
                      closeOnCancel:false},
                      function(isConfirm){
                        if(isConfirm){
                            window.location.href = "index.php?task=setStatus&id="+id;
                        }else{
                            swal("已取消",
                                 "您取消了切换操作！","error"
                            )
                        }
                    }
                )
        };
    
    
     function shanchu(emp_id) {
            swal(
                {title:"您确定此操作？",
                      text:"",
                      type:"warning",
                      showCancelButton:true,
                      confirmButtonColor:"#DD6B55",
                      confirmButtonText:"确定",
                      cancelButtonText:"取消",
                      closeOnConfirm:false,
                      closeOnCancel:false},
                      function(isConfirm){
                        if(isConfirm){
                            window.location.href = "index.php?task=delete&emp_id="+emp_id;
                        }else{
                            swal("已取消",
                                 "您取消了切换操作！","error"
                            )
                        }
                    }
                )
        }
      function lizhi(emp_id) {
        
            swal(
                {title:"您确定此操作？",
                      text:"",
                      type:"warning",
                      showCancelButton:true,
                      confirmButtonColor:"#DD6B55",
                      confirmButtonText:"确定",
                      cancelButtonText:"取消",
                      closeOnConfirm:false,
                      closeOnCancel:false},
                      function(isConfirm){
                        if(isConfirm){
                            window.location.href = "index.php?task=liszhi&emp_id="+emp_id;
                        }else{
                            swal("已取消",
                                 "您取消了切换操作！","error"
                            )
                        }
                    }
                )
        };
    function zijia_youhui(pid){
        demo_iframe('zijia_youhui.php?pid='+pid,'添加优惠',1000,500,'login_js');
    }
$('#up').click(function(){
    //alert('aa');
    var content=$('#content').css('display');
    if(content=="none"){
        $("#content").css('display','block');
        $('#up').removeClass("fa-chevron-down");
        $('#up').addClass("fa-chevron-up");
        
    }else{
        $("#content").css('display','none');
        $('#up').removeClass("fa-chevron-up");
        $('#up').addClass("fa-chevron-down");
    }
    //fa fa-chevron-down
})


$("#department_id").change(function(){
            var department_id=$(this).val();
            $.ajax({
                type:'POST',
                url:'index.php?task=getShangjiZhiwei',
                data: {"department_id":department_id},
                dataType:"json",
                cache: false,
                success:function(req){
                    $("#emp_zhiweiid").empty();
                    $("#emp_zhiweiid").append("<option value='0'>全部</option>");
                    for(var i=0;i<req.length;i++){
                        $("#emp_zhiweiid").append("<option  value='"+req[i]['id']+"'>"+req[i]['zhiwei_name']+"</option>");
                    }
                     
                    
                }
            });
           
        })
    
</script>

</body>
<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->
</html>