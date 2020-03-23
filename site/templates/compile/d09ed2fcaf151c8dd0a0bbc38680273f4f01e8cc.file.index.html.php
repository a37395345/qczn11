<?php /* Smarty version Smarty-3.0.4, created on 2020-01-06 13:47:54
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/rule/index.html" */ ?>
<?php /*%%SmartyHeaderCode:55125e12ca0adc42f8-03432635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd09ed2fcaf151c8dd0a0bbc38680273f4f01e8cc' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/rule/index.html',
      1 => 1578289620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55125e12ca0adc42f8-03432635',
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


    <title>权限管理</title>
    

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
                <h5 style="padding-top: 10px">权限管理</h5>
                <?php if ($_smarty_tpl->getVariable('rule_add')->value==1){?>
               <div class="ibox-tools" style="float: left;margin-left: 40px">
                    <a class="btn btn-outline btn-default" href="javascript:;" onclick="add();return false" target="_blank">
                        <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                        添加权限
                    </a>
                     
                </div>
                <?php }?>
                <?php if ($_smarty_tpl->getVariable('rule_delete')->value==1){?>
                <div class="ibox-tools">
                    <a class="btn btn-outline btn-default" href="javascript:;" onclick="delete_a();return false" target="_blank">
                        <i class="fa fa-close" style="color: red"></i>
                        清理未启用权限
                    </a>
                </div>
                <?php }?>
            </div>
            <table class="table table-bordered table-hover" data-height="400" style="margin-bottom:0px" data-mobile-responsive="true">
                            <thead>
                            <tr>
                                <th style="text-align: center;width: 15%">
                                    一级权限
                                </th>
                                <th style="text-align: center;width: 15%">
                                    二级权限
                                </th>
                                <th style="text-align: center;width: 70%">
                                    三级权限
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
                            	<td>
                                    <?php if ($_smarty_tpl->getVariable('rule_edit')->value==1){?>
                                    <a  href="javascript:;" onclick="edit(<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
);return false" target="_blank"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>
(<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['rule_order']) ? $_smarty_tpl->tpl_vars['rows']->value['rule_order'] : null);?>
)</a>
                                    <?php }else{ ?>
                                        <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>
(<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['rule_order']) ? $_smarty_tpl->tpl_vars['rows']->value['rule_order'] : null);?>
)
                                    <?php }?>
                                    &nbsp;&nbsp;
                                    <?php if ($_smarty_tpl->getVariable('rule_setStatus')->value==1){?>
                                    <a  onclick="setStatus(<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
);return false" target="_blank">
                                        <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['status']) ? $_smarty_tpl->tpl_vars['rows']->value['status'] : null)==0){?><i class="fa fa-check" style="color:green"></i><?php }else{ ?> <i class="fa fa-close" style="color:red"></i></i><?php }?>
                                        </a>
                                        <?php }else{ ?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['status']) ? $_smarty_tpl->tpl_vars['rows']->value['status'] : null)==0){?><i class="fa fa-check" style="color:green"></i><?php }else{ ?> <i class="fa fa-close" style="color:red"></i></i><?php }?>
                                        <?php }?>
                            	</td>
                                <td>
                                    <?php if (count((isset($_smarty_tpl->tpl_vars['rows']->value['son']) ? $_smarty_tpl->tpl_vars['rows']->value['son'] : null))>0){?>
                                        <?php  $_smarty_tpl->tpl_vars['rows_a'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rows']->value["son"]) ? $_smarty_tpl->tpl_vars['rows']->value["son"] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows_a']->key => $_smarty_tpl->tpl_vars['rows_a']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows_a']->key;
?>
                                        <?php if ($_smarty_tpl->getVariable('rule_edit')->value==1){?>
                                            <a  href="javascript:;" onclick="edit(<?php echo (isset($_smarty_tpl->tpl_vars['rows_a']->value['id']) ? $_smarty_tpl->tpl_vars['rows_a']->value['id'] : null);?>
);return false" target="_blank">
                                            <?php echo (isset($_smarty_tpl->tpl_vars['rows_a']->value['title']) ? $_smarty_tpl->tpl_vars['rows_a']->value['title'] : null);?>
(<?php echo (isset($_smarty_tpl->tpl_vars['rows_a']->value['rule_order']) ? $_smarty_tpl->tpl_vars['rows_a']->value['rule_order'] : null);?>
)</a>
                                        <?php }else{ ?>
                                            <?php echo (isset($_smarty_tpl->tpl_vars['rows_a']->value['title']) ? $_smarty_tpl->tpl_vars['rows_a']->value['title'] : null);?>
(<?php echo (isset($_smarty_tpl->tpl_vars['rows_a']->value['rule_order']) ? $_smarty_tpl->tpl_vars['rows_a']->value['rule_order'] : null);?>
)
                                        <?php }?>
                                            &nbsp;&nbsp;
                                        <?php if ($_smarty_tpl->getVariable('rule_setStatus')->value==1){?>
                                            <a  onclick="setStatus(<?php echo (isset($_smarty_tpl->tpl_vars['rows_a']->value['id']) ? $_smarty_tpl->tpl_vars['rows_a']->value['id'] : null);?>
);return false" target="_blank">
                                        
                                        <?php if ((isset($_smarty_tpl->tpl_vars['rows_a']->value['status']) ? $_smarty_tpl->tpl_vars['rows_a']->value['status'] : null)==0){?><i class="fa fa-check" style="color:green"></i><?php }else{ ?> <i class="fa fa-close" style="color:red"></i></i><?php }?>
                                        </a>
                                        <?php }else{ ?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['rows_a']->value['status']) ? $_smarty_tpl->tpl_vars['rows_a']->value['status'] : null)==0){?><i class="fa fa-check" style="color:green"></i><?php }else{ ?> <i class="fa fa-close" style="color:red"></i></i><?php }?>
                                        <?php }?>
                                            <br/><br/>
                                        
                                        
                                        <?php }} ?>
                                    <?php }?>
                                </td>
                                <td>
                                    <?php if (count((isset($_smarty_tpl->tpl_vars['rows']->value['son']) ? $_smarty_tpl->tpl_vars['rows']->value['son'] : null))>0){?>
                                        <?php  $_smarty_tpl->tpl_vars['rows_a'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rows']->value["son"]) ? $_smarty_tpl->tpl_vars['rows']->value["son"] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows_a']->key => $_smarty_tpl->tpl_vars['rows_a']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows_a']->key;
?>
                                                <?php if (count((isset($_smarty_tpl->tpl_vars['rows_a']->value['son']) ? $_smarty_tpl->tpl_vars['rows_a']->value['son'] : null))>0){?>
                                                    <?php  $_smarty_tpl->tpl_vars['rows_b'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rows_a']->value["son"]) ? $_smarty_tpl->tpl_vars['rows_a']->value["son"] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows_b']->key => $_smarty_tpl->tpl_vars['rows_b']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows_b']->key;
?>
                                                    <?php if ($_smarty_tpl->getVariable('rule_edit')->value==1){?>
                                                    <a  href="javascript:;" onclick="edit(<?php echo (isset($_smarty_tpl->tpl_vars['rows_b']->value['id']) ? $_smarty_tpl->tpl_vars['rows_b']->value['id'] : null);?>
);return false" target="_blank">
                                                        <?php echo (isset($_smarty_tpl->tpl_vars['rows_b']->value['title']) ? $_smarty_tpl->tpl_vars['rows_b']->value['title'] : null);?>
(<?php echo (isset($_smarty_tpl->tpl_vars['rows_b']->value['rule_order']) ? $_smarty_tpl->tpl_vars['rows_b']->value['rule_order'] : null);?>
)</a>
                                                    <?php }else{ ?>
                                                         <?php echo (isset($_smarty_tpl->tpl_vars['rows_b']->value['title']) ? $_smarty_tpl->tpl_vars['rows_b']->value['title'] : null);?>
(<?php echo (isset($_smarty_tpl->tpl_vars['rows_b']->value['rule_order']) ? $_smarty_tpl->tpl_vars['rows_b']->value['rule_order'] : null);?>
)
                                                    <?php }?>
                                                        &nbsp;&nbsp;
                                                         <?php if ($_smarty_tpl->getVariable('rule_setStatus')->value==1){?>
                                                         <a  onclick="setStatus(<?php echo (isset($_smarty_tpl->tpl_vars['rows_b']->value['id']) ? $_smarty_tpl->tpl_vars['rows_b']->value['id'] : null);?>
);return false" target="_blank">
                                                        
                                                    
                                        <?php if ((isset($_smarty_tpl->tpl_vars['rows_b']->value['status']) ? $_smarty_tpl->tpl_vars['rows_b']->value['status'] : null)==0){?><i class="fa fa-check" style="color:green"></i><?php }else{ ?> <i class="fa fa-close" style="color:red"></i></i><?php }?>
                                        </a>
                                        <?php }else{ ?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['rows_b']->value['status']) ? $_smarty_tpl->tpl_vars['rows_b']->value['status'] : null)==0){?><i class="fa fa-check" style="color:green"></i><?php }else{ ?> <i class="fa fa-close" style="color:red"></i></i><?php }?>
                                        <?php }?>
                                                        &nbsp;&nbsp;&nbsp;&nbsp; 
                                                    <?php }} ?>
                                                <?php }?>
                                            <br/><br/>
                                        <?php }} ?>
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
		demo_iframe('index.php?task=add','添加权限',body_W,500,'login_js');

	}
	function edit(id){
        setBody_W();
		demo_iframe('index.php?task=edit&id='+id,'修改权限',body_W,500,'login_js');

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
                {title:"您确定清除禁用的权限？",
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
