<?php /* Smarty version Smarty-3.0.4, created on 2020-01-06 13:54:23
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/huodong/index.html" */ ?>
<?php /*%%SmartyHeaderCode:104035e12cb8fb05cd5-04220262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '507d52e0dade785a064765c1718193eb63b90742' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/huodong/index.html',
      1 => 1578290009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104035e12cb8fb05cd5-04220262',
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
    <title>租车活动管理</title>
    <link rel="shortcut icon" href="favicon.ico"> <link href="../../../crm1/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
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
</head>

<body class="gray-bg">
    <div class="row wrapper wrapper-content animated fadeInRight">
        <div class="col-sm-12">
            <div class="ibox float-e-margins" >
                 <div class="ibox-title" style="    padding-top: 5px">
                <h5 style="padding-top: 10px">租车活动管理</h5>
                <?php if ($_smarty_tpl->getVariable('rule_add')->value==1){?>
               <div class="ibox-tools" style="float: left;margin-left: 40px">
                    <a class="btn btn-outline btn-default" href="javascript:;" onclick="add();return false" target="_blank">
                        <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                        添加活动
                    </a>
                </div>
                <?php }?>
                <?php if ($_smarty_tpl->getVariable('rule_delete')->value==1){?>
                <div class="ibox-tools">
                    <a class="btn btn-outline btn-default" href="javascript:;" onclick="delete_a();return false" target="_blank">
                        <i class="fa fa-close" style="color: red"></i>
                        清理未启用活动
                    </a>
                </div>
               <?php }?>
            </div>
           

                      <table class="table table-bordered table-hover" data-height="400" style="margin-bottom:0px" data-mobile-responsive="true">
                            <thead>
                            <tr>
                               
                                <th style="text-align: center;width: 8%">
                                    活动名称
                                </th>
                                <th style="text-align: center;width: 6%">
                                    租车类型
                                </th>
                                <th style="text-align: center;width: 5%">
                                    活动类型
                                </th>
                                <th style="text-align: center;width: 5%">
                                    天数
                                </th>
                                <th style="text-align: center;width: 8%">
                                    最高金额
                                </th>
                                <th style="text-align: center;width: 10%">
                                    开始时间
                                </th>
                                <th style="text-align: center;width: 10%">
                                    结束时间
                                </th>
                                
                                <th style="text-align: center;width: 15%">
                                    开放门店
                                </th>
                                <th style="text-align: center;width: 5%">
                                    可用次数
                                </th>
                                <th style="text-align: center;width: 10%">
                                    关联活动
                                </th>
                                <th style="text-align: center;width: 5%">
                                    活动状态
                                </th>
                                 <th style="text-align: center;width: 5%">
                                    操作
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
                               
                                <td style="text-align: center;">
                                     <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>

                                    
                                </td>
                                <td style="text-align: center;">
                                    <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_type']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_type'] : null)==1){?>
                                        临时自驾
                                    <?php }?>
                                </td>
                                <td style="text-align: center;">
                                   <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['type']) ? $_smarty_tpl->tpl_vars['row']->value['type'] : null)==1){?>
                                        天数优惠
                                    <?php }?>
                                    
                                </td>
                                <td style="text-align: center;">
                                    <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['tianshu']) ? $_smarty_tpl->tpl_vars['row']->value['tianshu'] : null);?>
   
                                </td>
                                <td style="text-align: center;">
                                    <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
   
                                </td>
                                
                                <td style="text-align: center;">
                                   
                                        <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['addtime']) ? $_smarty_tpl->tpl_vars['row']->value['addtime'] : null);?>

                                    
                                </td>
                                <td style="text-align: center;">
                                   
                                        <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['endtime']) ? $_smarty_tpl->tpl_vars['row']->value['endtime'] : null);?>

                                    
                                </td>
                                
                                <td style="text-align: center;">
                                    <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shop_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                        <?php if (in_array((isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null),(isset($_smarty_tpl->tpl_vars['row']->value['shops_a']) ? $_smarty_tpl->tpl_vars['row']->value['shops_a'] : null))){?>
                                            <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>

                                        <?php }?>
                                    <?php }} ?>
                                </td>

                                <td style="text-align: center;">
                                   
                                        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['cishu']) ? $_smarty_tpl->tpl_vars['row']->value['cishu'] : null)==1){?>
                                            一次
                                        <?php }else{ ?>
                                            多次
                                        <?php }?>
                                    
                                </td>

                                <td style="text-align: center;">
                                    <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                        <?php if (in_array((isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null),(isset($_smarty_tpl->tpl_vars['row']->value['h_id']) ? $_smarty_tpl->tpl_vars['row']->value['h_id'] : null))){?>
                                            <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['name']) ? $_smarty_tpl->tpl_vars['rows']->value['name'] : null);?>

                                        <?php }?>
                                    <?php }} ?>
                                </td>

                                <td style="text-align: center;">
                                     <?php if ($_smarty_tpl->getVariable('rule_setStatus')->value==1){?>
                                            <a  onclick="setStatus(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
);return false" target="_blank">
                                                        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['stutas']) ? $_smarty_tpl->tpl_vars['row']->value['stutas'] : null)==1){?>
                                                            <i class="fa fa-check" style="color:green"></i>
                                                        <?php }else{ ?> 
                                                            <i class="fa fa-close" style="color:red"></i>
                                                        <?php }?>
                                            </a>
                                    <?php }else{ ?>
                                                        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['stutas']) ? $_smarty_tpl->tpl_vars['row']->value['stutas'] : null)==1){?>
                                                            <i class="fa fa-check" style="color:green"></i>
                                                        <?php }else{ ?> 
                                                            <i class="fa fa-close" style="color:red"></i>
                                                        <?php }?>
                                                        
                                    <?php }?>
                                       
                                </td>
                               
                                <td style="text-align: center;">
                                    <?php if ($_smarty_tpl->getVariable('rule_edit')->value==1){?>
                                                <a  href="javascript:;" onclick="edit(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
);return false" target="_blank">
                                                        修改</a>&nbsp;&nbsp;
                                    <?php }?>
                                    
                                </td>
                                
                            </tr>
                           
                            
                        <?php }} ?>

                            </tbody>

                        </table>













                </div>
        </div> 
    </div>
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
        demo_iframe('index.php?task=add','添加活动',body_W,500,'login_js');

    }
    function edit(id){
        setBody_W();
        demo_iframe('index.php?task=edit&id='+id,'修改活动',body_W,500,'login_js');

    }
    
    
    
</script>
<script type="text/javascript">
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
    </script>
    <script type="text/javascript">
        function delete_a() {
            swal(
                {title:"您确定清除禁用的活动？",
                      text:"删除后将无法恢复，请谨慎操作！",
                      type:"warning",
                      showCancelButton:true,
                      confirmButtonColor:"#DD6B55",
                      confirmButtonText:"确定",
                      cancelButtonText:"取消",
                      closeOnConfirm:false,
                      closeOnCancel:false},
                      function(isConfirm){
                        if(isConfirm){
                            window.location.href = "index.php?task=delete";
                        }else{
                            swal("已取消",
                                 "您取消了清除操作！","error"
                            )
                        }
                    }
                )
        };
    </script>

</body>

</html>
