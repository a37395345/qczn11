<?php /* Smarty version Smarty-3.0.4, created on 2020-01-06 13:56:41
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/car_zhuanyong/index.html" */ ?>
<?php /*%%SmartyHeaderCode:101445e12cc192c5cb9-14782372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f91f305bc7bbf2f75eafe560e227d26f17601c9' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/car_zhuanyong/index.html',
      1 => 1578290146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101445e12cc192c5cb9-14782372',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>管理后台</title>

	<link rel="shortcut icon" href="favicon.ico">
	<link href="../../../crm/fonts1/iconfont.css?a=1" rel="stylesheet">
	<link href="../../../crm/css/bootstrap.min14ed.css" rel="stylesheet">
	<link href="../../../crm/css/font-awesome.min93e3.css?v=3" rel="stylesheet">
	<link href="../../../crm/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
	<link href="../../../crm/css/animate.min.css" rel="stylesheet">
	<link href="../../../crm/css/style.min862f.css" rel="stylesheet">
	<link href="../../../crm/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
	<link href="../../../css/conmone.css" rel="stylesheet">
    <script src="../../../crm/js/plugins/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript" src="../../../js/jquery.js"></script>
	<script type="text/javascript" src="../../../js/laydate/laydate.js"></script>
	<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css?a=2" rel="stylesheet">
    <script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js?a=5"></script>
    <script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN1.js?a=101"></script>
	<style>
		tr{
			font-size: 12px;
			line-height: 10px;
		}
		td{
			margin: 0;
			padding:1px!important;
			list-style: none;
			color: #000000;
		}
		input{
			outline: none!important;
		}
	</style>
</head>
<body class="gray-bg">
	<div class="wrapper wrapper-content animated fadeInRight">
	<from id="form1" action="index.php" method="get">
		<div class="ibox float-e-margins">
			<div class="ibox-title">
	            <h5>车辆专用名称管理</h5>
	        </div>
	        <from id="form1" action="" method="get">
	        	<div class="wrapper wrapper-content animated fadeInRight" style="margin:0; padding: 0;">
	        		<div class="ibox float-e-margins" style="margin:0">
	        			<div class="ibox-title" style=" margin: 0; padding: 0;">
	                        <div class="ibox-tools" style="padding-right: 20px;float: left;">
	                        	<?php if ($_smarty_tpl->getVariable('add')->value==1){?>
	                            <div style="margin-top:5px;" >
	                                <a href="javascript:;" onclick="add();return false;" class="btn btn-outline btn-default">
	                                <i style="padding-right: 4px;" class="glyphicon glyphicon-plus" aria-hidden="true"></i>添加
	                                </a>
	                            </div>
	                            <?php }?>
	                        </div>
	        			</div>
	        		</div>
	        	</div>
	        </from>
	        <div class="ibox-content">
	        	<div class="row row-lg">
	        		<div class="col-sm-12">
	        			<div class="example-wrap">
	        				<div class="example">
	        					<table class="table table-bordered table-hover" data-height="400" style="margin-bottom:0px" data-mobile-responsive="true">
	        						<thead>
	        							<tr>
	        								<th style="text-align: center;width: 33%">序号</th>
	        								<th style="text-align: center;width: 33%">名称</th>
	        								<th style="width: 33%">
			                                    <div align="center">操作</div>
			                                </th>
	        							</tr>
	        						</thead>
	        						<tbody>
	        						<?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable(1, null, null);?>
	        						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
	        							<tr>
	        								<td style="text-align: center;"><?php echo $_smarty_tpl->getVariable('index')->value++;?>
</td>
	        								<td style="text-align: center;">
	        									<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>

	        								</td>
        								<td align="center">
        									<div>
        										<?php if ($_smarty_tpl->getVariable('edit')->value==1){?>
                                				<a href="javascript:;" onclick="edit(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
);return false" title="修改" style="color:#CC6600">
                                    				<i class="iconfont icon-xiugai"></i>
                                				</a>&nbsp;&nbsp;
                                				<?php }?>
                                				<?php if ($_smarty_tpl->getVariable('delete')->value==1){?>
                                				<a href="javascript:;" onclick="delete_a(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
);return false" title="删除" style="color:#CC6600">
                                    				<i class="iconfont icon-shanchu"></i>
                                				</a>&nbsp;&nbsp;
                                				<?php }?>
        									</div>
        								</td>
	        							</tr>
	        						<?php }} ?>
	        						</tbody>
	        					</table>
	        				</div>
	        			</div>
	        		</div>
	        	</div>
	        </div>
		</div>
	</from>
	</div>
	<script src="../../../crm/js/bootstrap.min.js?v=3.3.6"></script>
	<script>
		var body_W = $("body").width();
		function setBody_W(){
	        body_W = $("body").width();
	    }
		function add(){
			setBody_W();
			demo_iframe('index.php?task=add','添加',body_W,500,'login_js');
		}
        function edit(id){
        	setBody_W();
            demo_iframe('index.php?task=edit&id='+id,'修改',body_W,500,'login_js');
        }

        function delete_a(id){
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
                            window.location.href="index.php?task=delete&id="+id;
                        }else{
                            swal("已取消",
                                 "您取消了切换操作！","error"
                            )
                        }
                    }
                )
        }
	</script>
</body>
</html>