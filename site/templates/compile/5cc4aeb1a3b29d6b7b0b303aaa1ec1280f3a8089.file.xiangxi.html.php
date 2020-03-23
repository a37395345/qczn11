<?php /* Smarty version Smarty-3.0.4, created on 2020-01-07 16:43:03
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/wenti/xiangxi.html" */ ?>
<?php /*%%SmartyHeaderCode:275625e1444974f3eb1-03357653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cc4aeb1a3b29d6b7b0b303aaa1ec1280f3a8089' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/wenti/xiangxi.html',
      1 => 1578131150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '275625e1444974f3eb1-03357653',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>管理后台</title>
		<link href="../../../css/style.css" rel="stylesheet" type="text/css">
		<link href="../../../crm1/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
		<link href="../../../crm1/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
		<link href="../../../crm1/css/style.css?v=4.1.0" rel="stylesheet">
		<link rel="stylesheet" href="http://yhzc.com/crm1/js/plugins/layer/skin/layer.css" id="layui_layer_skinlayercss" style="">
		<script src="../../../../jquery.js"></script>
	<style>
	.gray-bg{
	  background-color: #f3f3f4;
	  padding: 20px;
	}
	.xt_problems{
	  padding: 0 20px 20px 20px;
	  background-color: #fff;
	  border-top:4px solid #e7eaec;
	  overflow: hidden;
	}
	.xt_problems .form2 .lineD{
		border-bottom: 1px solid #ddd;
	}
	.xt_problems .table{
		width: 100%;
		max-width: 100%;
		margin-bottom: 20px;
		border-spacing: 0;
		border-collapse: collapse;
	}
	.xt_problems .table tr th{
		padding: 12px 8px 12px 8px;
		border-top:1px solid #e7e7e7;
		border-left:1px solid #e7e7e7;
		border-bottom:1px solid #e7e7e7;
	}
	.xt_problems .table tr td{
		padding: 12px 8px 12px 8px;
		border-top:1px solid #e7e7e7;
		border-left:1px solid #e7e7e7;
		border-right:1px solid #e7e7e7;
		border-bottom:1px solid #e7e7e7;
	}
	.xt_problems .form2 dt{
		width:auto;
	}
	.input-sm{
		background-color: #eee;
	}
	.th_back{
		background-color:#F5F5F6
	}
</style>
</head>
<body class="gray-bg">
	<div class="xt_problems" style="padding: 0;">
		<div class="so_main" style="margin: 0;">
			<div class="page_tit" style="padding: 0 15px;">问题明细</div>
			<div class="form2" style="border-top:1px solid #e7eaec; padding: 10px 20px 0 20px;">
				<table class="table table-bordered" style="margin-bottom: 0px;">
					<tr>
						<th class="th_back" width="15%">
							<span style="color:#000">问题类型:</span>
						</th>
						<td width="35%">
							<input type="text" class="form-control input-sm" readonly="readonly" unselectable="on" value="<?php if ((isset($_smarty_tpl->getVariable('list')->value['type']) ? $_smarty_tpl->getVariable('list')->value['type'] : null)==1){?>系统bug<?php }else{ ?>操作失误<?php }?>">
						</td>
						<th class="th_back" width="15%">
							<span style="color:#000">问题标题:</span>
						</th>
						<td width="35%">
							<input type="text" class="form-control input-sm" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['title']) ? $_smarty_tpl->getVariable('list')->value['title'] : null);?>
">
						</td>
					</tr>
				</table>

				<table class="table table-bordered" style="margin-bottom: 0px;">
					<tr>
						<th class="th_back" width="15%">
							<span style="color:#000">问题说明:</span>
						</th>
						<td width="85%">
							<input type="text" class="form-control input-sm" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['description']) ? $_smarty_tpl->getVariable('list')->value['description'] : null);?>
">
						</td>
					</tr>
				</table>
				<table class="table table-bordered">
					<tr>
						<th class="th_back" width="15%">
							<span style="color:#000">提交问题人:</span>
						</th>
						<td width="35%">
							<input type="text" class="form-control input-sm" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['promoter_name']) ? $_smarty_tpl->getVariable('list')->value['promoter_name'] : null);?>
">
						</td>

						<th class="th_back" width="15%">
							<span style="color:#000">提交时间:</span>
						</th>
						<td width="35%">
							<input type="text" class="form-control input-sm" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['start_time']) ? $_smarty_tpl->getVariable('list')->value['start_time'] : null);?>
">
						</td>
					</tr>
				</table>
				<div style="clear:both;"></div>

				<script>
					function change_tab(id){
						$(".tab-pane").each(function(){
							$(this).removeClass('active')
						})
						$("#tab-"+id).addClass('active')

						$(".li-tab").each(function(){
							$(this).removeClass('active')
						})
						$("#li-tab"+id).addClass('active')
					}
				</script>

				<div class="col-sm-12" style="padding: 0;">
					<div class="panel blank-panel">
						<div class="panel-heading">
							<div class="panel-options">
								<ul class="nav nav-tabs" style="border: 0;">
									<li class="li-tab active" id="li-tab1"><a href="javascript:;" onclick="change_tab(1)" data-toggle="tab" aria-expanded="false">处理记录</a></li>
									<li class="li-tab" id="li-tab2"><a href="javascript:;" onclick="change_tab(2)" data-toggle="tab" aria-expanded="false">附件</a></li>
								</ul>
							</div>
						</div>

						<div class="panel-body1">
							<div class="tab-content">
								<div class="tab-pane active" id="tab-1">
									<table class="table table-striped">
										<thead>
											<tr>
												<th width="5%" style="text-align: center;border: 1px solid #e7e7e7;">处理人</th>
												<th width="10%" style="text-align: center;border: 1px solid #e7e7e7;">处理时间</th>
												<th width="10%" style="text-align: center;border: 1px solid #e7e7e7;">操作</th>
												<th width="25%" style="text-align: center;border: 1px solid #e7e7e7;">备注</th>
											</tr>
										</thead>
										<tbody>
											<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('logs')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
												<tr>
													<td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp']) ? $_smarty_tpl->tpl_vars['row']->value['emp'] : null);?>
</td>
													<td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['dateline']) ? $_smarty_tpl->tpl_vars['row']->value['dateline'] : null);?>
</td>
													<td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['type']) ? $_smarty_tpl->tpl_vars['row']->value['type'] : null);?>
</td>
													<td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['text']) ? $_smarty_tpl->tpl_vars['row']->value['text'] : null);?>
</td>
												</tr>
											<?php }} ?>
										</tbody>
									</table>
								</div>

								<div class="tab-pane" id="tab-2" style="border-top: 1px solid #e7e7e7;">
									<dl class="">
										<dt>附件：</dt>
									</dl>
									<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('images')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
									<div style="float: left;width: 150px;height: 150px;margin: 10px 0 30px 60px;" class="img_a">
										<img style="width: 100%;height: 100%" src="/thumb/<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['images']) ? $_smarty_tpl->tpl_vars['rows']->value['images'] : null);?>
">
									</div>
									<?php }} ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		$('img').click(function(){
			var src=$(this).attr('src');
			window.open(src);
		});
	</script>
</body>
</html>