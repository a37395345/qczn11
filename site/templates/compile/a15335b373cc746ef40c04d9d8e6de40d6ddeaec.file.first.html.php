<?php /* Smarty version Smarty-3.0.4, created on 2019-12-04 16:20:33
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/yearcareful/first.html" */ ?>
<?php /*%%SmartyHeaderCode:303695de76c513600e3-93543450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a15335b373cc746ef40c04d9d8e6de40d6ddeaec' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/yearcareful/first.html',
      1 => 1575447629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303695de76c513600e3-93543450',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>管理后台</title>
<link rel="shortcut icon" href="favicon.ico">
<link href="../../../crm1/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
<link href="../../../crm1/css/font-awesome.css?v=4.4.0" rel="stylesheet">
<link href="../../../crm1/css/animate.css" rel="stylesheet">
<link href="../../../crm1/css/style.css?v=4.1.0" rel="stylesheet">
<link href="../../../css/style.css" rel="stylesheet" type="text/css">
<link href="../../../css/flbao.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
</head>
<body class="gray-bg wrapper wrapper-content animated fadeInRight">
	<div class="ibox float-e-margins">
		<div class="ibox-title" style="padding-top: 5px">
            <h5 style="padding-top: 10px">车辆维修保养</h5>
        </div>
        <div class="ibox-content_a">
        	<div class="row row-lg">
        		<div class="col-lg-12 col-sm-12">
        			<div class="ibox float-e-margins">
        				<div class="ibox-content">
        					<table class="table table-bordered table-hover" 
                                       data-height="400"
                                       style="margin-bottom:0px"
                                       data-mobile-responsive="true">
                                <thead>
                                	<tr>
                                		<th style="text-align: center;">公司现有车辆</th>
                                		<th style="text-align: center;">已出售但未过户车辆</th>
                                		<th style="text-align: center;">已出售已过户车辆</th>
                                	</tr>
                                </thead>
                                <tbody>
                                	<tr>
									    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('first')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
									    <td style="text-align:center;"><a href="list.php?car_status=0"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['nCount1']) ? $_smarty_tpl->tpl_vars['row']->value['nCount1'] : null)+(isset($_smarty_tpl->tpl_vars['row']->value['nCount2']) ? $_smarty_tpl->tpl_vars['row']->value['nCount2'] : null);?>
</a></td>
									    <td style="text-align:center;"><a href="list.php?car_status=3"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['nCount3']) ? $_smarty_tpl->tpl_vars['row']->value['nCount3'] : null);?>
</a></td>
									    <td style="text-align:center;"><a href="list.php?car_status=4"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['nCount4']) ? $_smarty_tpl->tpl_vars['row']->value['nCount4'] : null);?>
</a></td>
									    <?php }} ?>
									</tr>
									<tr>
										<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('first')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
											<td><a href=""></a></td>
										<?php }} ?>
									</tr>
                                </tbody>
                            </table>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
	</div>
</body>
</html>