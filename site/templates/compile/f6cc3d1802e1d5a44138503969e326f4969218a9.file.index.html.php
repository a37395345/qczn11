<?php /* Smarty version Smarty-3.0.4, created on 2020-01-04 14:09:07
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/client/index.html" */ ?>
<?php /*%%SmartyHeaderCode:253845e102c03f23990-49573600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6cc3d1802e1d5a44138503969e326f4969218a9' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/client/index.html',
      1 => 1578118074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '253845e102c03f23990-49573600',
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
    <title>企业客户资料管理</title>
    <link rel="shortcut icon" href="favicon.ico"> 
    <link href="../../../crm/fonts1/iconfont.css?a=1" rel="stylesheet">
    <link href="../../../crm1/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="../../../crm1/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="../../../crm1/css/animate.css" rel="stylesheet">
    <link href="../../../crm1/css/style.css?v=4.1.0" rel="stylesheet">
    <link href="../../../crm1/css/plugins/treeview/bootstrap-treeview.css" rel="stylesheet">

    <link href="../../../crm/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="../../../css/conmone.css" rel="stylesheet">
	<script src="../../../crm/js/plugins/sweetalert/sweetalert.min.js"></script>

    <script type="text/javascript" src="../../../js/jquery.js">
</script>
    <link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css?a=2" rel="stylesheet">
	<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js?a=5"></script>
	<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN1.js?a=1"></script>
    <style type="text/css">
       
        .input-sm{
            margin: 0;padding:0;
        }
        

    </style>
</head>

<body class="gray-bg">
    <div class="row wrapper wrapper-content animated fadeInRight">
        <div class="col-sm-12">
        	<div class="ibox float-e-margins" >
        	     <div class="ibox-title" style="    padding-top: 5px">
                <h5 style="padding-top: 10px">企业客户资料管理</h5>
               
            </div>

            <form id="form1" action="index.php" method="get">
            <div class="wrapper wrapper-content animated fadeInRight" style=" margin: 0; padding: 0;">
                <div class="ibox float-e-margins" style="margin:0">
                    <div class="ibox-title" style=" margin: 0; padding: 0;">
                         
                        <h5 style="padding-top: 15px; padding-left: 10px;">搜索
                        </h5>

                        <div class="ibox-tools" style="padding-top: 14px; padding-left: 10px;float: left;">
                            <a class="collapse-link">
                            <i class="fa fa-chevron-down" id="up"></i>
                            </a>
                        </div>

                <?php if ($_smarty_tpl->getVariable('add')->value==1){?>
               <div class="ibox-tools" style="float: left;margin-left: 40px;margin-top: 5px;">
                    <a class="btn btn-outline btn-default" href="javascript:;" onclick="add();return false" target="_blank">
                        <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                        添加客户资料
                    </a>
                </div>
                <?php }?>
                        
                    </div>
                    <div class="ibox-content" id="content" style=" margin: 0px; padding: 0px;display: none">
                        <div class="row row-lg">
                            <div class="col-sm-12">
                                <!-- Example Events -->
                                <div class="example-wrap">
                                    <div class="example">
                                        <table class="table table-bordered">
                                        <tr>
                                            <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;公司名称:</span>
                                            </th>

                                            <td width="35%">
                                                <input type="text" class="form-control input-sm" placeholder="公司名称" name="client_name">
                                            </td>
                                             <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;联系人:</span>
                                            </th>
                                             <td width="35%">
                                                <input type="text" class="form-control input-sm" placeholder="联系人" name="client_Mlinker">
                                            </td>

                                            
                                           
                                        </tr>
                                        <tr>
                                             <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;业务员:</span>
                                            </th>
                                            <td width="35%">
                                                <select class="form-control input-sm" name="client_salesman">
                                                    <option value="0">全部</option>
                                                <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('emp_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                                    <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_salesman']) ? $_smarty_tpl->tpl_vars['rows']->value['client_salesman'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_name']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_name'] : null);?>
</option>
                                                <?php }} ?>
                                                     <option value="100">临时散客</option>
                                                </select>
                                            </td>

                                             <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;联系电话:</span>
                                            </th>

                                             <td width="35%">
                                                <input type="text" class="form-control input-sm" placeholder="联系电话" name="client_Mphone">
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
                                            显示 <?php echo ($_smarty_tpl->getVariable('p')->value-1)*20+1;?>
 到 <?php echo $_smarty_tpl->getVariable('p')->value*20;?>
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
                                <th style="text-align: center;width: 20%">
                                    公司名称
                                </th>
                                 <th style="text-align: center;width: 15%">
                                    联系人/电话
                                </th>
                                <th style="text-align: center;width: 10%">
                                    单位电话
                                </th>
                                <th style="text-align: center;width: 15%">
                                    单位地址
                                </th>
                                 <th style="text-align: center;width: 5%">
                                    业务归属
                                </th>

                                <th style="text-align: center;width: 20%">
                                    合同
                                </th>
                                <th style="text-align: center;width: 15%">
                                    操作
                                </th>
                            </tr>
                            </thead>
                     <tbody>

                         <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                        <tr>
                            <td style="text-align: center;">
                                <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_name']) ? $_smarty_tpl->tpl_vars['rows']->value['client_name'] : null);?>

                            </td>
                            <td style="text-align: center;">
                                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rows']->value['client_lianxi']) ? $_smarty_tpl->tpl_vars['rows']->value['client_lianxi'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
                                         <span 
                                    <?php if ((isset($_smarty_tpl->tpl_vars['j']->value) ? $_smarty_tpl->tpl_vars['j']->value : null)<count((isset($_smarty_tpl->tpl_vars['rows']->value['client_lianxi']) ? $_smarty_tpl->tpl_vars['rows']->value['client_lianxi'] : null))-1){?> style="border-bottom:1px solid #b19d9d;line-height: 23px"
                                    <?php }?>>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['j']->value) ? $_smarty_tpl->tpl_vars['j']->value : null)!=0){?>
                                        <br/>
                                        <?php }?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['zhu']) ? $_smarty_tpl->tpl_vars['row']->value['zhu'] : null)==1){?>
                                            <i class="fa fa-star" style="color: red"></i>
                                        <?php }?>
                                        <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
--<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['phone']) ? $_smarty_tpl->tpl_vars['row']->value['phone'] : null);?>

                                        
                                    </span>
                                <?php }} ?>
                            </td>
                             <td style="text-align: center;">
                               <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_tel']) ? $_smarty_tpl->tpl_vars['rows']->value['client_tel'] : null);?>

                            </td>
                            <td style="text-align: center;">
                                <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_add']) ? $_smarty_tpl->tpl_vars['rows']->value['client_add'] : null);?>

                                
                            </td>
                           
                            <td style="text-align: center;">
                                <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_name']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_name'] : null);?>

                            </td>

                            <td style="text-align: center;">
                                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rows']->value['hetong']) ? $_smarty_tpl->tpl_vars['rows']->value['hetong'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
                                         <span 
                                    <?php if ((isset($_smarty_tpl->tpl_vars['j']->value) ? $_smarty_tpl->tpl_vars['j']->value : null)<count((isset($_smarty_tpl->tpl_vars['rows']->value['hetong']) ? $_smarty_tpl->tpl_vars['rows']->value['hetong'] : null))-1){?> style="border-bottom:1px solid #b19d9d;line-height: 23px"
                                    <?php }?>>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['j']->value) ? $_smarty_tpl->tpl_vars['j']->value : null)<count((isset($_smarty_tpl->tpl_vars['rows']->value['hetong']) ? $_smarty_tpl->tpl_vars['rows']->value['hetong'] : null))&&(isset($_smarty_tpl->tpl_vars['j']->value) ? $_smarty_tpl->tpl_vars['j']->value : null)!=0){?> 
                                        <br/>
                                    <?php }?>
                                        <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['contract_number']) ? $_smarty_tpl->tpl_vars['row']->value['contract_number'] : null);?>

                                    </span>
                                <?php }} ?>
                            </td>
                            <td style="text-align: center;">
                            
                            <?php if ($_smarty_tpl->getVariable('edit')->value==1){?>
                            <a href="javascript:;" onclick="edit(<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_id']) ? $_smarty_tpl->tpl_vars['rows']->value['client_id'] : null);?>
);return false"  title="修改" style="color:#CC6600" target="_blank">
                                &nbsp;&nbsp;
                                <i class="iconfont icon-xiugai" aria-hidden="true"></i>
                            </a>
                            <?php }?>
                            <?php if ($_smarty_tpl->getVariable('delete')->value==1){?>
                            <a href="javascript:;" onclick="delete_a(<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_id']) ? $_smarty_tpl->tpl_vars['rows']->value['client_id'] : null);?>
);return false"  title="删除" style="color:#CC6600" target="_blank">
                                &nbsp;&nbsp;
                                <i class="iconfont icon-shanchu" aria-hidden="true"></i>
                            </a>
                            <?php }?>
                            
                            <a href="index.php?task=xiangxi&client_id=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_id']) ? $_smarty_tpl->tpl_vars['rows']->value['client_id'] : null);?>
"  title="详细" target="_blank" style="color:#CC6600" >
                                &nbsp;&nbsp;
                                <i style="font-size: 22px;color: #273a4a" class="fa fa-book"></i>

                            </a>

                            </td>
                        </tr>
                        <?php }} ?>
                     </tbody>
                      </table>

               <div class="row">
                                <div class="col-lg-6">
                                    <div class="pull-left" style="margin-top:15px">
                                        <p>
                                            显示<?php echo ($_smarty_tpl->getVariable('p')->value-1)*20+1;?>
 到 <?php echo $_smarty_tpl->getVariable('p')->value*20;?>
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
    <!-- 全局js -->
    
    <script src="../../../crm1/js/bootstrap.min.js?v=3.3.6"></script>
    <!-- Bootstrap-Treeview plugin javascript -->
    <script src="../../../crm1/js/plugins/treeview/bootstrap-treeview.js"></script>

<script>
    var body_W = $("body").width();
    function setBody_W(){
        body_W = $("body").width();
    }
	function add(){
        setBody_W();
        demo_iframe('index.php?task=add','添加客户资料',body_W,500,'login_js');
	}

	function edit(id){
        setBody_W();
        demo_iframe('index.php?task=edit&client_id='+id,'修改客户资料',body_W,500,'login_js');
	}

    function add_lianxi(id){
        setBody_W();
        demo_iframe('index.php?task=add_lianxi&client_id='+id,'增加其他联系人',body_W,500,'login_js');
    }

    function edit_lianxi(id){
        setBody_W();
        demo_iframe('index.php?task=edit_lianxi&id='+id,'管理其他联系人',body_W,500,'login_js');
    }
    
    
	
</script>
    <script type="text/javascript">
        $("#up").click(function(){
        var content=$("#content").css('display');
        if(content=="none"){
            
            $("#content").css('display','block');
        $('#up').removeClass("fa-chevron-down");
        $('#up').addClass("fa-chevron-up");
        }else{
            $("#content").css('display','none');
        $('#up').removeClass("fa-chevron-up");
        $('#up').addClass("fa-chevron-down");
        }
    });
    </script>
    <script type="text/javascript">
        function delete_a(id) {
            swal(
                {title:"您确定删除？",
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
                            window.location.href = "index.php?task=delete&client_id="+id;
                        }else{
                            swal("已取消",
                                 "您取消了切换操作！","error"
                            )
                        }
                    }
                )
        };
    </script>

</body>

</html>
