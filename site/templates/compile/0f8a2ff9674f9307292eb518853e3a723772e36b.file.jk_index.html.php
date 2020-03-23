<?php /* Smarty version Smarty-3.0.4, created on 2020-01-04 14:52:46
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/beiyongjin/jk_index.html" */ ?>
<?php /*%%SmartyHeaderCode:44095e10363e43c089-48117452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f8a2ff9674f9307292eb518853e3a723772e36b' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/beiyongjin/jk_index.html',
      1 => 1578120701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44095e10363e43c089-48117452',
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
<title>借款管理</title>
<link rel="shortcut icon" href="favicon.ico">
<link href="../../../crm/fonts1/iconfont.css" rel="stylesheet">

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
    <script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN1.js?a=101"></script>



    <style type="text/css">
        tr{
            font-size: 12px;line-height: 10px;
        }
        td{
            
          margin: 0;padding: 1px;padding-top: 5px;padding-bottom: 5px !important;list-style: none;color: #000000;
        }
@media(max-width: 768px){
    .jbox-close{
        right: 132px!important;
    }
    .fa-flask:before{
        font-size: 16px;
    }
    .jbox-drag{
        z-index: 1000;
    }
}
    </style>

</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
    <!-- Panel Other -->
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>借款管理</h5>
        </div>
        <form id="form1" action="index.php?task=jk_index" method="post">
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
                    <?php if ($_smarty_tpl->getVariable('fk_add')->value==1){?> 
                <div class="ibox-tools" style="float: left;margin-left: 40px;margin-top: 6px">
                    <a onclick="fk_add(<?php echo (isset($_smarty_tpl->getVariable('row')->value['borrow_id']) ? $_smarty_tpl->getVariable('row')->value['borrow_id'] : null);?>
);return false" class="btn btn-outline btn-default" href="javascript:;">
                        <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                        添加
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
                                        <!-- <input type="hidden" name="type" value="<?php echo $_smarty_tpl->getVariable('type')->value;?>
"> -->
                                        <table class="table table-bordered">
                                        <tr>
                                            <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;借款开始时间:</span>
                                            </th>
        <td width="35%">
            <input style="height: 30px;line-height: 30px;" placeholder="请输入日期" onclick="laydate({istime: true, format: 'YYYY-MM-DD'})" class="laydate-icon form-control input-sm"  nselectable="on" readonly type="text" placeholder="" name="s_time">
        </td>
                                           
                                            <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;借款结束时间:</span>
                                            </th>
        <td width="35%">
            <input style="height: 30px;line-height: 30px;" placeholder="请输入日期" onclick="laydate({istime: true, format: 'YYYY-MM-DD'})" type="text" class="laydate-icon form-control input-sm" nselectable="on" readonly  placeholder="" name="e_time">
        </td>
                                        </tr>
                                        <tr>
                                            <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;借款人:</span>
                                            </th>
                                            <td width="35%">
                                                <input type="text" class="form-control input-sm" placeholder="" value="" name="emp_name">
                                            </td>
                                            <th width="15%" style="background-color:#F5F5F6">
                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;状态：</span>
                                            </th>
                                            <td width="35%">
                                                <select style="width: 100%;height: 30px;border:1px solid #ddd" name="status">
                                                    <option value="0">请选择</option>
                                                    <option value="-1">返回修改</option>
                                                    <option value="99">等待审核</option>
                                                    <option value="1">等待发款</option>
                                                    <option value="2">待还款</option>
                                                    <option value="3">已还款</option>
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
                                <th style="text-align: center;width: 5%">
                                    借款人
                                </th>
                                <th style="text-align: center;width: 8%">
                                    借款日期
                                </th>
                                <th style="text-align: center;width: 6%">
                                    借款金额	
                                </th>
                                <th style="text-align: center;width: 5%">
                                    审核人
                                </th>
                                <th style="text-align: center;width: 8%">
                                    审核时间
                                </th>
                                <th style="text-align: center;width: 5%">
                                    发款人
                                </th>
                                <th style="text-align: center;width: 8%">
                                    发款时间
                                </th>
                                <th style="text-align: center;width: 6%">
                                    状态
                                </th>
                                <th style="text-align: center;width: 6%">
                                    还款金额
                                </th>
                                 <th style="text-align: center;width: 13%">
                                    备注
                                </th>
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
                               
        <td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</td>
		<td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['borrow_date']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_date'] : null);?>
</td>
		<td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['borrow_money']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_money'] : null);?>
</td>
		<td style="text-align: center;"><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['borrow_isAgreeMan']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_isAgreeMan'] : null)!=''){?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['borrow_isAgreeMan']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_isAgreeMan'] : null);?>
<?php }?></td>
		<td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['borrow_isAgreeTime']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_isAgreeTime'] : null);?>
</td>
		<td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fa_name']) ? $_smarty_tpl->tpl_vars['row']->value['fa_name'] : null);?>
</td>
		<td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fa_time']) ? $_smarty_tpl->tpl_vars['row']->value['fa_time'] : null);?>
</td>
		<td style="text-align: center;"><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['status']) ? $_smarty_tpl->tpl_vars['row']->value['status'] : null)==-1){?>返回修改<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['status']) ? $_smarty_tpl->tpl_vars['row']->value['status'] : null)==0){?>等待审核<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['status']) ? $_smarty_tpl->tpl_vars['row']->value['status'] : null)==1){?>等待发款<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['status']) ? $_smarty_tpl->tpl_vars['row']->value['status'] : null)==2){?>待还款<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['status']) ? $_smarty_tpl->tpl_vars['row']->value['status'] : null)==3){?>已还款<?php }?></td>
		<td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['borrow_Returnmoney']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_Returnmoney'] : null);?>
</td>
		<td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['borrow_remarks']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_remarks'] : null);?>
</td>
		
		<td style="text-align: center;">
            <?php if ($_smarty_tpl->getVariable('user_id')->value==(isset($_smarty_tpl->tpl_vars['row']->value['borrow_emp']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_emp'] : null)&&$_smarty_tpl->getVariable('fk_edit')->value==1&&(isset($_smarty_tpl->tpl_vars['row']->value['status']) ? $_smarty_tpl->tpl_vars['row']->value['status'] : null)<=0){?>
            <a title="修改" href="javascript:;" onclick="fk_edit(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['borrow_id']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_id'] : null);?>
);return false"><i class="iconfont icon-xiugai"></i></a>&nbsp;&nbsp;
            <?php }?>
            <?php if ($_smarty_tpl->getVariable('user_id')->value==(isset($_smarty_tpl->tpl_vars['row']->value['borrow_emp']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_emp'] : null)&&$_smarty_tpl->getVariable('fk_delete')->value==1&&(isset($_smarty_tpl->tpl_vars['row']->value['status']) ? $_smarty_tpl->tpl_vars['row']->value['status'] : null)<=0){?>
            <a title="删除" href="javascript:;" onclick="delete_a(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['borrow_id']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_id'] : null);?>
);return false"><i class="iconfont icon-shanchu"></i></a>
            &nbsp;
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['status']) ? $_smarty_tpl->tpl_vars['row']->value['status'] : null)==0&&$_smarty_tpl->getVariable('fk_shenhe')->value==1){?>
            <a title="审核" href="javascript:;" onclick="fk_shenhe(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['borrow_id']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_id'] : null);?>
);return false"><i style="font-size: 20px;color: #273a4a;" class="fa fa-flask"></i></a>&nbsp;&nbsp;
            <?php }?>
            <?php if ($_smarty_tpl->getVariable('fk_fakuan')->value==1&&(isset($_smarty_tpl->tpl_vars['row']->value['status']) ? $_smarty_tpl->tpl_vars['row']->value['status'] : null)==1){?>
            <a title="发款" href="javascript:;" onclick="fk_fakuan(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['borrow_id']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_id'] : null);?>
);return false"><i class="iconfont icon-qitafeiyong"></i></a>&nbsp;&nbsp;
            <?php }?>
            <?php if ($_smarty_tpl->getVariable('fk_huankuan')->value==1&&(isset($_smarty_tpl->tpl_vars['row']->value['status']) ? $_smarty_tpl->tpl_vars['row']->value['status'] : null)==2){?>
            <a class="" title="还款" href="javascript:;" onclick="fk_huankuan(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['borrow_id']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_id'] : null);?>
);return false"><i style="font-size: 20px;color: #273a4a;" class="glyphicon glyphicon-saved"></i></a>
            <?php }?>
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
<input type="hidden" name="emp_name" value="<?php echo $_smarty_tpl->getVariable('emp_name')->value;?>
">
<input type="hidden" name="status" value="<?php echo $_smarty_tpl->getVariable('status')->value;?>
">
<input type="hidden" name="s_time" value="<?php echo $_smarty_tpl->getVariable('s_time')->value;?>
">
<input type="hidden" name="e_time" value="<?php echo $_smarty_tpl->getVariable('e_time')->value;?>
">
<script src="../../../crm1/js/bootstrap.min.js?v=3.3.6"></script>
    <!-- Bootstrap-Treeview plugin javascript -->
<script src="../../../crm1/js/plugins/treeview/bootstrap-treeview.js"></script>

<script type="text/javascript">
    var body_W = $("body").width();
    function setBody_W(){
        body_W = $("body").width();
    }
    function fk_add(){
        setBody_W();
        demo_iframe('index.php?task=fk_add','添加借款',body_W,500,'login_js');
    }
    function fk_shenhe(id){
        setBody_W();
        demo_iframe('index.php?task=fk_shenhe&id='+id,'借款审核',body_W,500,'login_js');
    }
    function fk_fakuan(id){
        setBody_W();
        demo_iframe('index.php?task=fk_fakuan&id='+id,'发款',body_W,500,'login_js');
    }
    function fk_huankuan(id){
        setBody_W();
        demo_iframe('index.php?task=fk_huankuan&id='+id,'还款',body_W,500,'login_js');
    }

     function fk_edit(id){
        setBody_W();
        demo_iframe('index.php?task=fk_edit&id='+id,'修改借款',body_W,500,'login_js');

    }
    function huangang(id){
        setBody_W();
        demo_iframe('index.php?task=huangang&emp_id='+id,'换岗',body_W,500,'login_js');

    }
  
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
                            window.location.href = "index.php?task=fk_delete&id="+id;
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