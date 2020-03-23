<?php /* Smarty version Smarty-3.0.4, created on 2019-09-07 17:44:09
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/menu/index.html" */ ?>
<?php /*%%SmartyHeaderCode:100905d737be9bc5e50-39576402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3065e5a22d347b31e443b5ebab7c79d0a9c674c1' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/menu/index.html',
      1 => 1567849442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100905d737be9bc5e50-39576402',
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



    <title>菜单管理</title>
    
    <link rel="shortcut icon" href="favicon.ico"> <link href="../../../crm1/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="../../../crm1/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="../../../crm1/css/animate.css" rel="stylesheet">
    <link href="../../../crm1/css/style.css?v=4.1.0" rel="stylesheet">
    <link href="../../../crm1/css/plugins/treeview/bootstrap-treeview.css" rel="stylesheet">

    <link href="../../../crm/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
	<script src="../../../crm/js/plugins/sweetalert/sweetalert.min.js"></script>



    <script type="text/javascript" src="../../../js/jquery.js">
</script>
    <link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css?a=2" rel="stylesheet">
	<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js?a=5"></script>
	<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js?a=1"></script>
</head>

<body class="gray-bg">
    <div class="row wrapper wrapper-content animated fadeInRight">
        
       
       
        <div class="col-sm-12">
        	<div class="ibox float-e-margins" >
        	     <div class="ibox-title" style="    padding-top: 5px">
                <h5 style="padding-top: 10px">菜单管理</h5>
                <?php if ($_smarty_tpl->getVariable('rule_add')->value==1){?>
               <div class="ibox-tools" style="float: left;margin-left: 40px">
                    <a class="btn btn-outline btn-default" href="javascript:;" onclick="add();return false" target="_blank">
                        <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                        添加菜单
                    </a>
                     
                </div>
                <?php }?>
                <?php if ($_smarty_tpl->getVariable('rule_delete')->value==1){?>
                <div class="ibox-tools">
                    <a class="btn btn-outline btn-default" href="javascript:;" onclick="delete_a();return false" target="_blank">
                        <i class="fa fa-close" style="color: red"></i>
                        清理未启用菜单
                    </a>
                </div>
                <?php }?>
               
            </div>
            <table class="table table-bordered table-hover" data-height="400" style="margin-bottom:0px" data-mobile-responsive="true">
                            <thead>
                            <tr>
                                <th style="text-align: center;width: 25%">
                                    菜单名称
                                </th>
                                <th style="text-align: center;width: 15%">
                                    权限名称
                                </th>
                                <th style="text-align: center;width: 20%">
                                    链接地址
                                </th>
                                <th style="text-align: center;width: 10%">
                                    排序
                                </th>
                                <th style="text-align: center;width: 10%">
                                    是否启用
                                </th>
                                <th style="text-align: center;width: 10%">
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
                            	<td>
                            		<span class="icon"><i class="glyphicon glyphicon-stop"></i></span><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['name']) ? $_smarty_tpl->tpl_vars['rows']->value['name'] : null);?>

                            	</td>
                            	<td>
                            		<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['action']) ? $_smarty_tpl->tpl_vars['rows']->value['action'] : null);?>

                            	</td>
                            	<td>
                            		<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['script']) ? $_smarty_tpl->tpl_vars['rows']->value['script'] : null);?>

                            	</td>
                            	<td style="text-align: center;">
                            		<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['menu_order']) ? $_smarty_tpl->tpl_vars['rows']->value['menu_order'] : null);?>

                            	</td>
                            	<td style="text-align: center;">
                                    <?php if ($_smarty_tpl->getVariable('rule_setStatus')->value==1){?>
                            		<a  onclick="setStatus(<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['admin_menu_id']) ? $_smarty_tpl->tpl_vars['rows']->value['admin_menu_id'] : null);?>
);return false" target="_blank">
	                            		<?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['status']) ? $_smarty_tpl->tpl_vars['rows']->value['status'] : null)==0){?>
	                            			<i class="fa fa-check" style="color:green"></i>
	                            		<?php }else{ ?> 
	                            			<i class="fa fa-close" style="color:red"></i>
	                            		<?php }?>
                            		</a>
                                    <?php }else{ ?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['status']) ? $_smarty_tpl->tpl_vars['rows']->value['status'] : null)==0){?>
                                            <i class="fa fa-check" style="color:green"></i>
                                        <?php }else{ ?> 
                                            <i class="fa fa-close" style="color:red"></i>
                                        <?php }?>
                                    <?php }?>
                            	</td>
                                <?php if ($_smarty_tpl->getVariable('rule_edit')->value==1){?>
                            	<td style="text-align: center;">
                            		<a  href="javascript:;" onclick="edit(<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['admin_menu_id']) ? $_smarty_tpl->tpl_vars['rows']->value['admin_menu_id'] : null);?>
);return false" target="_blank">
		                            		修改</a>
                            	</td>
                                <?php }?>
                            </tr>
                            <?php if (count((isset($_smarty_tpl->tpl_vars['rows']->value['son']) ? $_smarty_tpl->tpl_vars['rows']->value['son'] : null))>0){?>

                            	<?php  $_smarty_tpl->tpl_vars['rows_a'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rows']->value["son"]) ? $_smarty_tpl->tpl_vars['rows']->value["son"] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows_a']->key => $_smarty_tpl->tpl_vars['rows_a']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows_a']->key;
?>
	                            <tr>
	                            	<td>
	                            		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                            		<span class="icon"><i class="glyphicon glyphicon-stop"></i></span><?php echo (isset($_smarty_tpl->tpl_vars['rows_a']->value['name']) ? $_smarty_tpl->tpl_vars['rows_a']->value['name'] : null);?>

	                            	</td>
	                            	<td>
	                            		<?php echo (isset($_smarty_tpl->tpl_vars['rows_a']->value['action']) ? $_smarty_tpl->tpl_vars['rows_a']->value['action'] : null);?>

	                            	</td>
	                            	<td>
	                            		<?php echo (isset($_smarty_tpl->tpl_vars['rows_a']->value['script']) ? $_smarty_tpl->tpl_vars['rows_a']->value['script'] : null);?>

	                            	</td>
	                            	<td style="text-align: center;">
	                            		<?php echo (isset($_smarty_tpl->tpl_vars['rows_a']->value['menu_order']) ? $_smarty_tpl->tpl_vars['rows_a']->value['menu_order'] : null);?>

	                            	</td>
	                            	<td style="text-align: center;">
                                        <?php if ($_smarty_tpl->getVariable('rule_setStatus')->value==1){?>
	                            		<a  onclick="setStatus(<?php echo (isset($_smarty_tpl->tpl_vars['rows_a']->value['admin_menu_id']) ? $_smarty_tpl->tpl_vars['rows_a']->value['admin_menu_id'] : null);?>
);return false" target="_blank">
	                            		<?php if ((isset($_smarty_tpl->tpl_vars['rows_a']->value['status']) ? $_smarty_tpl->tpl_vars['rows_a']->value['status'] : null)==0){?><i class="fa fa-check" style="color:green"></i><?php }else{ ?> <i class="fa fa-close" style="color:red"></i></i><?php }?>
	                            		</a>
                                        <?php }else{ ?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['rows_a']->value['status']) ? $_smarty_tpl->tpl_vars['rows_a']->value['status'] : null)==0){?><i class="fa fa-check" style="color:green"></i><?php }else{ ?> <i class="fa fa-close" style="color:red"></i></i><?php }?>
                                        <?php }?>
	                            	</td>
	                            	<td style="text-align: center;">
                                        <?php if ($_smarty_tpl->getVariable('rule_edit')->value==1){?>
	                            		<a  href="javascript:;" onclick="edit(<?php echo (isset($_smarty_tpl->tpl_vars['rows_a']->value['admin_menu_id']) ? $_smarty_tpl->tpl_vars['rows_a']->value['admin_menu_id'] : null);?>
);return false" target="_blank">
		                            		修改</a>
                                        
                                        <?php }?>
	                            	</td>
	                            </tr>
	                            <?php if (count((isset($_smarty_tpl->tpl_vars['rows_a']->value['son']) ? $_smarty_tpl->tpl_vars['rows_a']->value['son'] : null))>0){?>
	          						<?php  $_smarty_tpl->tpl_vars['rows_b'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rows_a']->value["son"]) ? $_smarty_tpl->tpl_vars['rows_a']->value["son"] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows_b']->key => $_smarty_tpl->tpl_vars['rows_b']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows_b']->key;
?>
		                            <tr>
		                            	<td>
		                            		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		                            		<span class="icon"><i class="glyphicon glyphicon-stop"></i></span><?php echo (isset($_smarty_tpl->tpl_vars['rows_b']->value['name']) ? $_smarty_tpl->tpl_vars['rows_b']->value['name'] : null);?>

		                            	</td>
		                            	<td>
		                            		<?php echo (isset($_smarty_tpl->tpl_vars['rows_b']->value['action']) ? $_smarty_tpl->tpl_vars['rows_b']->value['action'] : null);?>

		                            	</td>
		                            	<td>
		                            		<?php echo (isset($_smarty_tpl->tpl_vars['rows_b']->value['script']) ? $_smarty_tpl->tpl_vars['rows_b']->value['script'] : null);?>

		                            	</td>
		                            	<td style="text-align: center;">
		                            		<?php echo (isset($_smarty_tpl->tpl_vars['rows_b']->value['menu_order']) ? $_smarty_tpl->tpl_vars['rows_b']->value['menu_order'] : null);?>

		                            	</td>
		                            	<td style="text-align: center;">
                                            <?php if ($_smarty_tpl->getVariable('rule_setStatus')->value==1){?>
		                            		<a   onclick="setStatus(<?php echo (isset($_smarty_tpl->tpl_vars['rows_b']->value['admin_menu_id']) ? $_smarty_tpl->tpl_vars['rows_b']->value['admin_menu_id'] : null);?>
);return false" target="_blank">
		                            		<?php if ((isset($_smarty_tpl->tpl_vars['rows_b']->value['status']) ? $_smarty_tpl->tpl_vars['rows_b']->value['status'] : null)==0){?><i class="fa fa-check" style="color:green"></i><?php }else{ ?> <i class="fa fa-close" style="color:red"></i></i><?php }?>
		                            		</a>
                                            <?php }else{ ?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['rows_b']->value['status']) ? $_smarty_tpl->tpl_vars['rows_b']->value['status'] : null)==0){?><i class="fa fa-check" style="color:green"></i><?php }else{ ?> <i class="fa fa-close" style="color:red"></i></i><?php }?>
                                            <?php }?>
		                            	</td>
		                            	<td style="text-align: center;">
                                            <?php if ($_smarty_tpl->getVariable('rule_edit')->value==1){?>
		                            		<a  href="javascript:;" onclick="edit(<?php echo (isset($_smarty_tpl->tpl_vars['rows_b']->value['admin_menu_id']) ? $_smarty_tpl->tpl_vars['rows_b']->value['admin_menu_id'] : null);?>
);return false" target="_blank">
		                            		修改</a>
                                            <?php }?>
		                            	</td>
		                            </tr>
		                           
		                            <?php }} ?>
	                            <?php }?>
	                            <?php }} ?>
                            <?php }?>
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
	function add(){
		//alert('aa');
		 demo_iframe('index.php?task=add','添加菜单',1000,500,'login_js');

	}
	function edit(id){
		demo_iframe('index.php?task=edit&admin_menu_id='+id,'修改菜单',1000,500,'login_js');

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
                            window.location.href = "index.php?task=setStatus&admin_menu_id="+id;
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
                {title:"您确定清除禁用的菜单？",
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
