<?php /* Smarty version Smarty-3.0.4, created on 2019-11-08 10:12:05
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/machine/changecreate.html" */ ?>
<?php /*%%SmartyHeaderCode:41735dc4cef5228d19-94748538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '442bfcec45c598ec8a5f7dfae0133f7b22f4c3c3' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/machine/changecreate.html',
      1 => 1573179110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41735dc4cef5228d19-94748538',
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
	<link href="../../../css/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="../../../../../crm/css/bootstrap.min14ed.css">
	<link rel="stylesheet" href="../../../../../crm/css/style.min862f.css">
	<link rel="stylesheet" href="../../../../../crm/css/font-awesome.min93e3.css">
	<script type="text/javascript" src="../../../js/jquery.js"></script>
	<script type="text/javascript" src="../../../js/common.js"></script>
	<script type="text/javascript" src="../../../js/calendar.js"></script>

	<style>
		/**/
		.navi_name {
			font-size: 14px;
			font-weight: bold;
		}

		.indent {
			padding-left: 40px;
		}

		/**/
	</style>
</head>

<body class="gray-bg" style="padding:20px">
	<div class="so_main ibox wrapper wrapper-content animated fadeInRight ">
		<div class="ibox-title">
			<h5>编辑</h5>
		</div>
		<form method="post" action="changelist.php" name="form1" id="form1">
			<div class="ibox-content" id="tian">
				<div class="row row-lg">
					<div class="col-sm-12">
						<!-- Example Events -->
						<div class="example-wrap">
							<div class="example">
								<input type="hidden" name="task" value="changecreate_acc" />
								<div class="form2">
									<table class="table table-bordered" class="shiji">
										<tr>
											<th style="background-color:#F5F5F6" width="15%">
												<span style="color:#000"> 变化日期：</span>
											</th>
											<td width="35%">
												<input type="text" name="change_time" id="change_time" size="16"
													value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['change_time']) ? $_smarty_tpl->getVariable('list')->value['change_time'] : null);?>
" class="form-control input-sm"
													readonly="readonly" />
											</td>
											<th style="background-color:#F5F5F6" width="15%">
												<span style="color:#000"> 实时数量：</span>
											</th>
											<td width="35%">
												<input type="text" name="change_number" class="form-control input-sm"
													id="change_number" size="6" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['change_number']) ? $_smarty_tpl->getVariable('list')->value['change_number'] : null);?>
" placeholder="必填" />
											</td>
										</tr>

										<tr>
											<th style="background-color:#F5F5F6" width="15%">
												<span style="color:#000"> 备注：</span> 
											</th>
											<td width="35%" colspan="3">
												<textarea name="change_remark" id="change_remark" style="width: 100%;resize:none"
													rows="3" placeholder="必填"><?php echo (isset($_smarty_tpl->getVariable('list')->value['change_remark']) ? $_smarty_tpl->getVariable('list')->value['change_remark'] : null);?>
</textarea>
											</td>
										</tr>
									</table>
									<div class="page_btm">
										<input type="button" value="提交" class="btn btn-outline btn-default"
											style="width: 10%;margin-left: 30%;display: block;" onclick="ok()" />
									</div>
								</div>
								<input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_id']) ? $_smarty_tpl->getVariable('list')->value['car_id'] : null);?>
" />
							</div>
						</div>
						<!-- End Example Events -->
					</div>
				</div>
		</form>
	</div>
	<!-->
		<script>

			function ok() {
				var change_number = $("#change_number").val("")

				if (!$('#change_time').val()) {
					alert("请填写时间！");
					$('#change_time').focus();
					return false;
				}
				if (!$('#change_number').val() && !$('#change_number').val().replace(/[^0-9]/)) {
					alert("请填写正确实时数量！");
					$('#change_number').focus();
					return false;
				}

				if (!confirm('请仔细核对，一旦提交就无法修改了，确定提交吗？')) {
					return false;
				}

				$("#form1").submit();

				//window.parent.window.location.reload();
				//window.parent.window.jBox.close();
			}


			function closebox() {
				window.parent.window.jBox.close();
			}

		</script>
		<!--> </body> </html>