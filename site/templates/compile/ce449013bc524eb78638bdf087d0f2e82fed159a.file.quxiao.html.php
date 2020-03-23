<?php /* Smarty version Smarty-3.0.4, created on 2020-01-22 18:43:35
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/shouqian/quxiao.html" */ ?>
<?php /*%%SmartyHeaderCode:249935e282757df63f6-42046412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce449013bc524eb78638bdf087d0f2e82fed159a' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/shouqian/quxiao.html',
      1 => 1579689788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '249935e282757df63f6-42046412',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<!DOCTYPE html>
<html>
<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:03 GMT -->
<head>


<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=9;IE=8;IE=7;IE=EDGE">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>其他费用管理</title>
<link rel="shortcut icon" href="favicon.ico">
<link href="../../../crm/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
<link href="../../../crm/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
<link href="../../../crm/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
<link href="../../../crm/css/animate.min.css" rel="stylesheet">
<link href="../../../crm/css/style.min862f.css?v=4.1.0" rel="stylesheet">
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/laydate/laydate.js?a=<?php echo (isset($_smarty_tpl->getVariable('list')->value['change_time']) ? $_smarty_tpl->getVariable('list')->value['change_time'] : null);?>
"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../js/check_form.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js?a=3"></script>
<script type="text/javascript" src="../../../js/jquery.editable-select.min.js"></script>
<!-->
<script type="text/javascript">

</script>
<!--><object classid="clsid:F1317711-6BDE-4658-ABAA-39E31D3704D3" codebase="SDRdCard.cab#version=1,3,5,0" width="330" height="0" align="center" hspace="0" vspace="0" id="idcard" name="rdcard"></object>

</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
	<!-- Panel Other -->
	<div class="ibox float-e-margins">
		<div class="ibox-title">
			<h5>违约金管理</h5>
		</div>
		<form method="post" action="index.php?task=quxiao_action" name="form1" id="form1">
			<div class="ibox-content"  id="tian">
				<div class="row row-lg">
					<div class="col-sm-12">
						<!-- Example Events -->
						<div class="example-wrap">
							<div class="example">
								<div class="btn-group hidden-xs pull-right" id="exampleTableEventsToolbar" role="group">
								</div>

								<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('pid')->value;?>
" id="pid" name="pid">
								

								<?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_type']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_type'] : null)==2&&(isset($_smarty_tpl->getVariable('paiche')->value['paiche_pintaiid']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_pintaiid'] : null)==2){?>
								<table class="table table-bordered" class="shiji">
								  	<tr>
                                        
                                           	<th>应收违约金</th>
                                            <th>已收金额</th>
                                            <th>应给调车公司违约金</th>
                                            <th>已给调车公司违约金</th>
                                            <th>添加时间</th>
                                            <th>添加人</th>
                                            <th>本次收费</th>
                                             <th>本次付调车公司费用</th>
                                             <th>合计</th>
                                            </tr>
											<tr>
												<td><?php echo (isset($_smarty_tpl->getVariable('weiyue')->value['conv_money']) ? $_smarty_tpl->getVariable('weiyue')->value['conv_money'] : null);?>
</td>
												<td><?php echo (isset($_smarty_tpl->getVariable('weiyue')->value['have_in_money']) ? $_smarty_tpl->getVariable('weiyue')->value['have_in_money'] : null);?>
</td>
												<td><?php echo (isset($_smarty_tpl->getVariable('weiyue')->value['have_freeze_money']) ? $_smarty_tpl->getVariable('weiyue')->value['have_freeze_money'] : null);?>
</td>
												<td><?php echo (isset($_smarty_tpl->getVariable('weiyue')->value['have_back_money']) ? $_smarty_tpl->getVariable('weiyue')->value['have_back_money'] : null);?>
</td>
												<td><?php echo (isset($_smarty_tpl->getVariable('weiyue')->value['emp_name']) ? $_smarty_tpl->getVariable('weiyue')->value['emp_name'] : null);?>
</td>
												<td><?php echo (isset($_smarty_tpl->getVariable('weiyue')->value['add_time']) ? $_smarty_tpl->getVariable('weiyue')->value['add_time'] : null);?>
</td>
												<td><?php echo ((isset($_smarty_tpl->getVariable('weiyue')->value['conv_money']) ? $_smarty_tpl->getVariable('weiyue')->value['conv_money'] : null)-(isset($_smarty_tpl->getVariable('weiyue')->value['have_in_money']) ? $_smarty_tpl->getVariable('weiyue')->value['have_in_money'] : null));?>
</td>
												<td><?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('weiyue')->value['have_freeze_money']) ? $_smarty_tpl->getVariable('weiyue')->value['have_freeze_money'] : null);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('weiyue')->value['have_back_money']) ? $_smarty_tpl->getVariable('weiyue')->value['have_back_money'] : null);?>
<?php $_tmp2=ob_get_clean();?><?php echo ($_tmp1-$_tmp2);?>
</td>
												<td><?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('weiyue')->value['have_freeze_money']) ? $_smarty_tpl->getVariable('weiyue')->value['have_freeze_money'] : null);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo (isset($_smarty_tpl->getVariable('weiyue')->value['have_back_money']) ? $_smarty_tpl->getVariable('weiyue')->value['have_back_money'] : null);?>
<?php $_tmp4=ob_get_clean();?><?php echo ((isset($_smarty_tpl->getVariable('weiyue')->value['conv_money']) ? $_smarty_tpl->getVariable('weiyue')->value['conv_money'] : null)-(isset($_smarty_tpl->getVariable('weiyue')->value['have_in_money']) ? $_smarty_tpl->getVariable('weiyue')->value['have_in_money'] : null))-($_tmp3-$_tmp4);?>
</td>
											</tr>
										
								</table>
								<?php }else{ ?>
									<table class="table table-bordered" class="shiji">
								  	<tr>
                                        
                                           	<th width="15%">应收违约金</th>
                                            <th width="15%">已收金额</th>
                                            <th width="15%">添加时间</th>
                                            <th width="15%">添加人</th>
                                            <th width="10%">本次收费</th>
                                            </tr>
											<tr>
												<td><?php echo (isset($_smarty_tpl->getVariable('weiyue')->value['conv_money']) ? $_smarty_tpl->getVariable('weiyue')->value['conv_money'] : null);?>
</td>
												<td><?php echo (isset($_smarty_tpl->getVariable('weiyue')->value['have_in_money']) ? $_smarty_tpl->getVariable('weiyue')->value['have_in_money'] : null);?>
</td>
												
												<td><?php echo (isset($_smarty_tpl->getVariable('weiyue')->value['emp_name']) ? $_smarty_tpl->getVariable('weiyue')->value['emp_name'] : null);?>
</td>
												<td><?php echo (isset($_smarty_tpl->getVariable('weiyue')->value['add_time']) ? $_smarty_tpl->getVariable('weiyue')->value['add_time'] : null);?>
</td>
												<td><?php echo ((isset($_smarty_tpl->getVariable('weiyue')->value['conv_money']) ? $_smarty_tpl->getVariable('weiyue')->value['conv_money'] : null)-(isset($_smarty_tpl->getVariable('weiyue')->value['have_in_money']) ? $_smarty_tpl->getVariable('weiyue')->value['have_in_money'] : null));?>
</td>
											</tr>
										
									</table>
								<?php }?>

								<div class="shiji">
									<table class="table table-bordered" class="shiji">

									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">付款方式：</span>
										</th>
										<td width="35%">
											<select class="form-control input-sm" id="payment_id" name="payment_id" onchange="xdd()">
											<option  value="0">请选择</option>

											</option>
												<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('payments_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
													<option  value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_id']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_id'] : null);?>
">
											  			<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_name']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_name'] : null);?>

													</option>
											 	<?php }} ?>
											</select>
										</td>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">账户：</span>
										</th>
										<td width="35%">
											<select class="form-control input-sm" id="bank_id" name="bank_id">
												
											</select>
										</td>
									</tr>
									</table>
								</div>

							</div>
						</div>
						<!-- End Example Events -->
					</div>
				</div>
				<input type="submit" id="submit" class="btn btn-outline btn-default" value="提交" style="width: 10%;margin-left: 45%;display: block;">
			</div>
			
		</form>
	</div>
	<!-- End Panel Other -->
</div>


</body>
<script type="text/javascript" src="../../../js/account.js"></script>
<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->
<script type="text/javascript">

	$('#submit').click(function(){
		
		var payment_id=parseInt($("#payment_id").val());
		var bank_id=parseInt($("#bank_id").val());
		
		if(!payment_id>0){
			alert('请选择收款方式！');
			return false;
		}
		if(!bank_id>0){
			alert('请选择收款账户！');
			return false;
		}
	});
	$('#form1').submit(function(){
		$('#submit').attr('disabled','disabled');
		$('#submit').val('正在提交');

	});


	function xdd(){
		var paymentsVal = $("#payment_id option:selected").val();
		var html
		//console.log(paymentsVal);
		if(paymentsVal==1){
			html += "<option value='1'>现金账</option>";
		}else if(paymentsVal==2){
			html += "<option value='5'>农行都市桃源支行-运河租车</option><option value='15'>农行金色新城支行-兰博租车</option><option value='18'>常州市运河汽车租赁有限公司无锡分公司</option>"
		}else if(paymentsVal==3){
			html += "<option value='12'>中国建设银行——蒋政</option><option value='13'>中国农业银行——蒋政</option><option value='10'>中国工商银行——蒋政</option><option value='11'>中国银行——蒋政</option><option value='16'>中国建设银行(提现)——蒋政</option><option value='6'>蒋政——建行</option><option value='8'>押金账</option><option value='17'>备用金账</option>"
		}
		$("#bank_id").html(html);
	}
</script>
</html>