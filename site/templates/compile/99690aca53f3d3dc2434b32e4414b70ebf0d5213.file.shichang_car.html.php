<?php /* Smarty version Smarty-3.0.4, created on 2020-03-18 14:04:23
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/car/shichang_car.html" */ ?>
<?php /*%%SmartyHeaderCode:62055e71b9e76ee547-61597662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99690aca53f3d3dc2434b32e4414b70ebf0d5213' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/car/shichang_car.html',
      1 => 1584511378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62055e71b9e76ee547-61597662',
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
<link href="../../../crm/fonts1/iconfont.css" rel="stylesheet">
<link href="../../../crm/css/bootstrap.min14ed.css" rel="stylesheet">
<link href="../../../crm/css/font-awesome.min93e3.css?v=3" rel="stylesheet">
<link href="../../../crm/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
<script type="text/javascript" src="../../../js/laydate/laydate.js"></script>
<script src="../../../crm/js/plugins/sweetalert/sweetalert.min.js"></script>
<link href="../../../crm/css/animate.min.css" rel="stylesheet">
<link href="../../../crm/css/style.min862f.css" rel="stylesheet">


<link href="../../../crm/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
<link href="../../../css/conmone.css" rel="stylesheet">
<script type="text/javascript" src="../../../js/jquery.js">
</script>
<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css?a=2" rel="stylesheet">
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js?a=5"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN1.js?a=101"></script>



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
        <form id="form1" action="shichang_car.php" method="get">
            <div class="wrapper wrapper-content animated fadeInRight" style=" margin: 0; padding: 0;">
                <div class="ibox float-e-margins" style="margin:0">
                    <div class="ibox-title" style=" margin: 0; padding: 0;">
                        <h5 style="padding-top: 15px; padding-left: 10px;">搜索
                        </h5>

                        <div class="ibox-tools" style="padding-top: 14px; padding-left: 10px;float: left;padding-right: 20px">
                            <a class="collapse-link">
                            <i class="fa fa-chevron-down" id="up"></i>
                            </a>
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
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;专属名称:</span>
                                            </th>
                                            <td width="35%">
                                               <select class="form-control input-sm" name="zhuanyong" id="zhuanyong">
                                                         <option value="0">请选择</option>
                                                        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('zhaunyong_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('id')->value;?>
" id="id">
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
                               
                                <th style="text-align: center;width: 12%">
                                    车辆主图
                                </th>
                                <th style="text-align: center;width: 8%">
                                    车牌号
                                </th>
                                <th style="text-align: center;width: 8%">
                                    单日租金
                                </th>
                                <th style="text-align: center;width: 8%">
                                    新客户押金
                                </th>
                                <th style="text-align: center;width: 8%">
                                    老客户押金
                                </th>
                                <th style="text-align: center;width: 8%">
                                    超时费用
                                </th>
                        
                                <th style="text-align: center;width: 8%">
                                    是否超公里
                                </th>
                                <th style="text-align: center;width: 8%">
                                    单日限定公里数
                                </th>
                                <th style="text-align: center;width: 8%">
                                    超公里费用
                                </th>
                                 <th style="text-align: center;width: 8%">
                                    专属名称
                                </th>
                                <th style="width: 8%">
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
        <td style="text-align: center;"><img src="../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_image']) ? $_smarty_tpl->tpl_vars['row']->value['car_image'] : null);?>
" style="width: 80%;padding:10%"></td>                
        <td style="text-align: center;">苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
</td>
		<td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_rentamount']) ? $_smarty_tpl->tpl_vars['row']->value['plan_rentamount'] : null);?>
</td>
		<td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_deposit1']) ? $_smarty_tpl->tpl_vars['row']->value['plan_deposit1'] : null);?>
</td>
		
		<td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_deposit2']) ? $_smarty_tpl->tpl_vars['row']->value['plan_deposit2'] : null);?>
</td>
		<td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_chaoshi']) ? $_smarty_tpl->tpl_vars['row']->value['plan_chaoshi'] : null);?>
</td>
	
		<td style="text-align: center;"><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['plan_chaokm']) ? $_smarty_tpl->tpl_vars['row']->value['plan_chaokm'] : null)=='y'){?>是<?php }else{ ?>否<?php }?></td>
		<td style="text-align: center;"><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['plan_chaokm']) ? $_smarty_tpl->tpl_vars['row']->value['plan_chaokm'] : null)=='y'){?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_chaokms']) ? $_smarty_tpl->tpl_vars['row']->value['plan_chaokms'] : null);?>
<?php }?></td>
		
		
		<td style="text-align: center;"><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['plan_chaokm']) ? $_smarty_tpl->tpl_vars['row']->value['plan_chaokm'] : null)=='y'){?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_chaokmy']) ? $_smarty_tpl->tpl_vars['row']->value['plan_chaokmy'] : null);?>
<?php }?></td>
		
		<td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
</td>
		
		<td style="text-align: center;">
        <a title="图片管理" href="javascript:;" onclick="update_image(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
);return false"><i style="color: #273a4a;font-size: 18px;" class="fa fa-photo"></i></a>
        &nbsp;&nbsp;&nbsp;
        <a title="报价方案" href="javascript:;" onclick="update_price(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
);return false"><i style="color: #273a4a;font-size: 18px;" class="fa fa-usd"></i></a>&nbsp;&nbsp;&nbsp;
        <a title="专属名称及车辆注意事项" href="javascript:;" onclick="set_zhuanyong(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
);return false"><i style="color: #273a4a;font-size: 20px;position: relative;top: 1px;left: 1px;" class="fa fa-asterisk"></i></a>
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


<script type="text/javascript">
    var body_W = $("body").width();
    function setBody_W(){
        body_W = $("body").width();
    }
    function update_image(id){
        setBody_W();
        demo_iframe('index.php?task=update_image&car_id='+id,'车辆图片',body_W,500,'login_js');
    }

    function set_zhuanyong(id){
        setBody_W();
        demo_iframe('index.php?task=set_zhuanyong&car_id='+id,'专属名称及车辆注意事项',body_W,500,'login_js');
    }

    function update_price(id){
        setBody_W();
        demo_iframe('index.php?task=update_price&id='+id,'车辆报价方案',body_W,500,'login_js');
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


    
</script>

</body>
<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->
</html>