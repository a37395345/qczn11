<?php /* Smarty version Smarty-3.0.4, created on 2019-11-11 13:08:22
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/navi/modips.html" */ ?>
<?php /*%%SmartyHeaderCode:277715dc8ecc62db753-13277447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdcd13e57fc2f53abeea4e4cbbf3f503da53f9df' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/navi/modips.html',
      1 => 1573203040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '277715dc8ecc62db753-13277447',
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
	<link rel="stylesheet" href="../../../../../crm/css/style.min862f.css">
	<link rel="stylesheet" href="../../../../../crm/css/bootstrap.min14ed.css">
	<script type="text/javascript" src="../../../js/jquery-2.1.4.min.js"></script>
</head>
<style>
</style>

<body class="gray-bg">
	<div class=".wrapper-content ">
		<div class="ibox-title">
			<h5>密码修改</h5>
		</div>
		<div class="ibox-content ">
			<div class="example">
				<form method="post" action="modips.php" onsubmit="return check()">
					<table class="table table-bordered">
						<tr id="paiche_bb">

							<th style="background-color:#F5F5F6;" width="15%">
								<span style="color:#000">用户信息</span>
							</th>
							<td width="35%">
								<input class="form-control input-sm" placeholder="必填" name="oldpass" type="text"
									id="" value="<?php echo $_smarty_tpl->getVariable('truename')->value;?>
" readonly="readonly" unselectable="on">
								
							</td>
							<th style="background-color:#F5F5F6;" width="15%">
								<span style="color:#000">原密码</span>
							</th>
							<td width="35%">
								<input class="form-control input-sm" placeholder="必填" name="oldpass" type="password"
									id="oldpass">
							</td>
						</tr>
						<tr id="paiche_bb">

							<th style="background-color:#F5F5F6;" width="15%">
								<span style="color:#000">新密码</span>
							</th>
							<td width="35%">
								<input type="password" class="form-control input-sm" placeholder="请输入6位以上的数字和字母"
									name="newpass" id="newpass">
							</td>
							<th style="background-color:#F5F5F6;" width="15%">
								<span style="color:#000">确认密码</span>
							</th>
							<td width="35%">
								<input type="password" class="form-control input-sm" placeholder="再次输入新密码"
									name="connewpass" id="connewpass">
							</td>
						</tr>
						<input type="hidden" name="aid" value="<?php echo (isset($_smarty_tpl->getVariable('user')->value['user_id']) ? $_smarty_tpl->getVariable('user')->value['user_id'] : null);?>
" />
						<input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
					</table>
					<input type="submit" id="submit" class="btn btn-outline btn-default" value="提交"
						style="width: 10%;margin-left: 45%;display: block;" />
				</form>
			</div>
		</div>
	</div>
	</div>
</body>
<!-->
	<script type="text/javascript">
		var strPS = "";
		function check() {
			if ($("#oldpass").val() == "") {
				alert("请输入原密码！");
				$("#oldpass").focus();
				return false;
			}
			if ($("#newpass").val() == "") {
				alert("请输入新密码！");
				$("#newpass").focus();
				return false;
			} else {
				strPS = $("#newpass").val();
				if (/[^a-z]/gi.test(strPS) && /[^0-9]/gi.test(strPS) && strPS.length >= 6) {
				} else {
					alert("密码只能由6位以上的数字和字母组成");
					$("#newpass").focus();
					return false;
				}
			}

			if ($("#connewpass").val() == "") {
				alert("请再次输入新密码！");
				$("#connewpass").focus();
				return false;
			}
			if ($("#connewpass").val() != $("#newpass").val()) {
				alert("两次输入的密码不一致！");
				$("#connewpass").focus();
				return false;
			}
		}
		function selectAll() {
			$("input[type='checkbox']").attr("checked", true);
		}
		function unselectAll() {
			$("input[type='checkbox']").attr("checked", false);
		}
		$(document).ready(function () {
			$(".subnavi").click(function () {
				var checked = false;
				$(this).parent().parent().find(".subnavi").each(function () {
					if ($(this).attr("checked")) {
						checked = true;
					}
				});
				var navi = $(this).parent().parent().parent().find(".navi");
				if (checked) {
					navi.attr("checked", true);
				} else {
					navi.attr("checked", false);
				}
			});
			$(".navi").click(function () {
				$(this).parent().find(".subnavi").attr("checked", $(this).attr("checked"));
			});
		});
	</script>
	<!--> </body> </html>