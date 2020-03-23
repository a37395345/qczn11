<?php /* Smarty version Smarty-3.0.4, created on 2020-03-10 17:57:50
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/machine/changelist.html" */ ?>
<?php /*%%SmartyHeaderCode:103485e67642c48d8a1-32722244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73eeea88fa3db7eb6ea849daffa3baa0b460f56f' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/machine/changelist.html',
      1 => 1583834133,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103485e67642c48d8a1-32722244',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>管理后台</title>
	<!-- <link href="../../../css/style.css" rel="stylesheet" type="text/css"> -->
	<link href="../../../css/flbao.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="../../../../../crm/css/style.min862f.css">
	<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet" />
	<link href="../../../crm1/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
	<script type="text/javascript" src="../../../js/jquery.js"></script>
	<script type="text/javascript" src="../../../js/common.js"></script>
	<script type="text/javascript" src="../../../js/calendar.js"></script>
	<script type="text/javascript" src="../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
	<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>

	<link rel="shortcut icon" href="favicon.ico">
	<link href="../../../crm1/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
	<link href="../../../crm1/css/font-awesome.css?v=4.4.0" rel="stylesheet">

	<link href="../../../crm1/css/animate.css" rel="stylesheet">
	<link href="../../../crm1/css/style.css?v=4.1.0" rel="stylesheet">
	<script type="text/javascript" src="../../../js/laydate/laydate.js"></script>

</head>

<body class="gray-bg">
	<!-- <div class="so_main">
		<div class="page_tit ibox-title" ">车辆变动情况一览表
			<span style=" float: right;"><?php if ($_smarty_tpl->getVariable('car_status')->value!=3){?><button
				onclick="window.location.href='javascript:price(<?php echo (isset($_smarty_tpl->getVariable('row')->value['car_id']) ? $_smarty_tpl->getVariable('row')->value['car_id'] : null);?>
);'"
				class="btn btn-default"><span>添加</span></button><?php }?></span>
		</div>
		<div class="Toolbar_inbox">
			<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
			<?php if ($_smarty_tpl->getVariable('car_status')->value!=3){?><a href="javascript:price(<?php echo (isset($_smarty_tpl->getVariable('row')->value['car_id']) ? $_smarty_tpl->getVariable('row')->value['car_id'] : null);?>
);" class="btn_a"><span>添加</span></a><?php }?>
		</div>
		<div class="list ibox-content_a">
			<div class="row row-lg">
				<div class="col-sm-12">
					<div class="example-wrap">
						<div class="example">

							<?php if (($_smarty_tpl->getVariable('list')->value)){?>
							<table width="100%" border="0" cellspacing="0" cellpadding="0"
								class="table table-bordered table-hover">
								<tr>
									<th>序号</th>
									<th>变化日期</th>
									<th>增减变动</th>
									<th>实时数量</th>
								</tr>
								<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
								<tr overstyle='on' id="badge_$smarty.foreach.foo.index+1}">
									<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
									<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['change_time']) ? $_smarty_tpl->tpl_vars['row']->value['change_time'] : null);?>
</td>
									<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['change_remark']) ? $_smarty_tpl->tpl_vars['row']->value['change_remark'] : null);?>
</td>
									<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['change_number']) ? $_smarty_tpl->tpl_vars['row']->value['change_number'] : null);?>
</td>
								</tr>
								<?php }} ?>
							</table>
							<?php }?>
						</div>

						<div class="Toolbar_inbox">
							<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
							&nbsp;
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<div class="wrapper wrapper-content animated fadeInRight">

		<div class="ibox float-e-margins">

			<div class="ibox-title" style="padding-top: 5px">
				<h5 style="padding-top: 10px">车辆变动状况</h5>
				<span style=" float: right;"><?php if ($_smarty_tpl->getVariable('car_status')->value!=3){?><button
						onclick="window.location.href='javascript:price(<?php echo (isset($_smarty_tpl->getVariable('row')->value['car_id']) ? $_smarty_tpl->getVariable('row')->value['car_id'] : null);?>
);'"
						class="btn btn-default"><span>添加</span></button><?php }?></span>
			</div>

			<!-- <div class="Toolbar_inbox">
				<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
				<?php if ($_smarty_tpl->getVariable('car_status')->value!=3){?><a href="javascript:price(<?php echo (isset($_smarty_tpl->getVariable('row')->value['car_id']) ? $_smarty_tpl->getVariable('row')->value['car_id'] : null);?>
);" class="btn_a"><span>添加</span></a><?php }?>
			</div> -->
			<div class="">
				<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
				<?php if ($_smarty_tpl->getVariable('car_status')->value!=3){?><a href="javascript:price(<?php echo (isset($_smarty_tpl->getVariable('row')->value['car_id']) ? $_smarty_tpl->getVariable('row')->value['car_id'] : null);?>
);" class="btn_a"><span>添加</span></a><?php }?>
			</div>

			<div class="ibox-content_a">
				<div class="row row-lg">
					<div class="col-sm-12">
						<div class="ibox float-e-margins">
							<div class="ibox-title">
								<h5>车辆变动情况一览表</h5>
							</div>
							<div class="ibox-content">

								<?php if (($_smarty_tpl->getVariable('list')->value)){?>
								<table class="table table-bordered table-hover" data-height="400"
									style="margin-bottom:0px" data-mobile-responsive="true">
									<thead>
										<tr>
											<th style="text-align: center;">序号</th>
											<th style="text-align: center;">变化日期</th>
											<th style="text-align: center;">增减变动</th>
											<th style="text-align: center;">实时数量</th>
										</tr>
									</thead>

									<tbody>
										<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
										<tr overstyle='on' id="badge_$smarty.foreach.foo.index+1}">
											<td style="text-align: center;"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
											<td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['change_time']) ? $_smarty_tpl->tpl_vars['row']->value['change_time'] : null);?>
</td>
											<td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['change_remark']) ? $_smarty_tpl->tpl_vars['row']->value['change_remark'] : null);?>
</td>
											<td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['change_number']) ? $_smarty_tpl->tpl_vars['row']->value['change_number'] : null);?>
</td>
										</tr>
										<?php }} ?>
									</tbody>
								</table>
								<?php }?>
							</div>

							<!-- <div class="Toolbar_inbox">
								<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
								&nbsp;
							</div> -->

							<div class="">
								<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
								<?php if ($_smarty_tpl->getVariable('car_status')->value!=3){?><a href="javascript:price(<?php echo (isset($_smarty_tpl->getVariable('row')->value['car_id']) ? $_smarty_tpl->getVariable('row')->value['car_id'] : null);?>
);"
									class="btn_a"><span>添加</span></a><?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

	<!-- 全局js -->
	<!-- <script src="../../../crm1/js/jquery.min.js?v=2.1.4"></script>
	<script src="../../../crm1/js/bootstrap.min.js?v=3.3.6"></script> -->

	<!-- ECharts -->
	<!-- <script src="../../../crm1/js/plugins/echarts/echarts-all.js"></script> -->

	<!-- 自定义js -->
	<!-- <script type="text/javascript">
		$("#up").click(function () {
			var content = $("#content").css('display');
			if (content == "none") {

				$("#content").css('display', 'block');
				$('#up').removeClass("fa-chevron-down");
				$('#up').addClass("fa-chevron-up");
			} else {
				$("#content").css('display', 'none');
				$('#up').removeClass("fa-chevron-up");
				$('#up').addClass("fa-chevron-down");
			}
		});
	</script> -->

	<!-->
		<script>
			var now_car_id = 0;
			//鼠标移动表格效果
			$(document).ready(function () {
				$("a.zoomIn").fancybox({
					'overlayShow': false,
					'transitionIn': 'elastic',
					'transitionOut': 'elastic'
				});

				$("tr[overstyle='on']").hover(
					function () {
						$(this).addClass("bg_hover");
					},
					function () {
						$(this).removeClass("bg_hover");
					}
				);

			});

			function checkon(o) {
				if (o.checked == true) {
					$(o).parents('tr').addClass('bg_on');
				} else {
					$(o).parents('tr').removeClass('bg_on');
				}
			}

			function checkAll(o) {
				if (o.checked == true) {
					$('input[name="checkbox"]').attr('checked', 'true');
					$('tr[overstyle="on"]').addClass("bg_on");
				} else {
					$('input[name="checkbox"]').removeAttr('checked');
					$('tr[overstyle="on"]').removeClass("bg_on");
				}
			}

			var isSearchHidden = 1;

			function searchNews() {
				if (isSearchHidden == 1) {
					$("#searchTopic_div").slideDown("fast");
					isSearchHidden = 0;
				} else {
					$("#searchTopic_div").slideUp("fast");
					isSearchHidden = 1;
				}
			}

			function folder(type, _this) {
				$('#search_' + type).slideToggle('fast');
				if ($(_this).html() == '展开') {
					$(_this).html('收起');
				} else {
					$(_this).html('展开');
				}

			}

			function price(carid) {
				demo_iframe('list.php?task=changecreate', '添加', 780, 420, 'login_js');
			}
		</script>
		<!--> </body> </html>