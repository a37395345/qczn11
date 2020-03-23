<?php /* Smarty version Smarty-3.0.4, created on 2019-12-04 15:03:28
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/machine/total_list.html" */ ?>
<?php /*%%SmartyHeaderCode:213965de75a40c989c4-64224644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8d1333af1efade370c361e6e4b2335df13656bd' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/machine/total_list.html',
      1 => 1575443007,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213965de75a40c989c4-64224644',
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
	<link href="../../../crm1/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
	<link href="../../../crm1/css/font-awesome.css?v=4.4.0" rel="stylesheet">
	<link href="../../../crm1/css/animate.css" rel="stylesheet">
	<link href="../../../crm1/css/style.css?v=4.1.0" rel="stylesheet">
	<link href="../../../css/style.css" rel="stylesheet" type="text/css">
	<link href="../../../css/flbao.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="../../../js/jquery.js"></script>
	<script type="text/javascript" src="../../../js/common.js"></script>
	<style>
		.ccc_bg{
			background: #F5F5F6;
			text-align: center;
		}
	</style>
</head>

<body class="gray-bg">
	<div class="wrapper wrapper-content animated fadeInRight">
		<!-- Panel Other -->
		<div class="ibox float-e-margins">
			<div class="ibox-title" style="padding-top: 5px">
            <h5 style="padding-top: 10px">车辆违章管理</h5>
        </div>
			<div class="ibox-content" id="content">
				<div class="row row-lg">
					<div class="col-sm-12">
						<!-- Example Events -->
						<div class="example-wrap">
							<div class="example">
								<table class="table table-bordered table-hover" 
                                       data-height="400"
                                       style="margin-bottom:0px"
                                       data-mobile-responsive="true">
									<tr>
										<th class="ccc_bg" width="25%" style="font-size: 14px;">违章总数</th>
										<th class="ccc_bg" width="25%" style="font-size: 14px;">未冻结数</th>
										<th class="ccc_bg" width="25%" style="font-size: 14px;">企业冻结数</th>
										<th class="ccc_bg" width="25%" style="font-size: 14px;">冻结数</th>
									</tr>
									<tr>
										<td class="" width="25%" style="font-size: 14px;color: #000"><a
												href="list.php?task=breakfirst&l_id=0"><?php echo $_smarty_tpl->getVariable('count_weihznag')->value;?>
</a></td>
										<td class="" width="25%" style="font-size: 14px;color: #000"><a
												href="list.php?task=breakfirst&l_id=1"><?php echo $_smarty_tpl->getVariable('count_wdongjie')->value;?>
</a></td>
										<td class="" width="25%" style="font-size: 14px;color: #000"><a
												href="list.php?task=breakfirst&l_id=2"><?php echo $_smarty_tpl->getVariable('count_qdongjie')->value;?>
</a></td>
										<td class="" width="25%" style="font-size: 14px;color: #000"><a
												href="list.php?task=breakfirst&l_id=3"><?php echo $_smarty_tpl->getVariable('count_dongjie')->value;?>
</a></td>
									</tr>
								</table>
							</div>
						</div>
						<!-- End Example Events -->
					</div>
				</div>

			</div>
		</div>

	</div>
	
</body>

</html>