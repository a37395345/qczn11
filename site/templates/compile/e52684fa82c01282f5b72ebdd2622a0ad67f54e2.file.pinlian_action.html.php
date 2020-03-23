<?php /* Smarty version Smarty-3.0.4, created on 2020-03-02 17:04:11
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/shouqian/pinlian_action.html" */ ?>
<?php /*%%SmartyHeaderCode:274335e5ccc0bac09b4-51866674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e52684fa82c01282f5b72ebdd2622a0ad67f54e2' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/shouqian/pinlian_action.html',
      1 => 1583139753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274335e5ccc0bac09b4-51866674',
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
			<h5><?php if ($_smarty_tpl->getVariable('type')->value=="zijia_linshi"){?>临时自驾批量收费<?php }?></h5>
		</div>
		<form method="post" action="index.php?task=piliang_action_a" name="form1" id="form1">
			<div class="ibox-content"  id="tian">
				<div class="row row-lg">
					<div class="col-sm-12">
						<!-- Example Events -->
						<div class="example-wrap">
							<div class="example">
								<div class="btn-group hidden-xs pull-right" id="exampleTableEventsToolbar" role="group">
								</div>

								<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('type')->value;?>
" id="type" name="type">
								<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('rules_a')->value;?>
" id="rules_a" name="rules_a">
								<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('money')->value;?>
" id="money_d" name="money_d" >
								

								


								<div class="shiji">
									<table class="table table-bordered" class="shiji">
									<tr>
										
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">总金额：</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" name="money" id="money" value="<?php echo $_smarty_tpl->getVariable('money')->value;?>
"  <?php if ($_smarty_tpl->getVariable('type')->value=="zijia_linshi"){?>readonly="readonly" unselectable="on"<?php }?>>
										</td>

										<th style="background-color:#F5F5F6" width="15%">
											
										</th>
										<td width="35%">
											
										</td>
									</tr>

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
	
	$('#form1').submit(function(){
		$('#submit').attr('disabled','disabled');
		$('#submit').val('正在提交');

	});
	$('#submit').click(function(){
		
		var payment_id=parseInt($("#payment_id").val());
		var bank_id=parseInt($("#bank_id").val());
		var money=parseInt($("#money").val());
		var money_d=parseInt($("#money_d").val());
		//alert(money_d);alert(money);return false;
		if(money_d<money){
			alert('收款金额不能大于总金额！');
			return false;
		}
		if(!payment_id>0){
			alert('请选择收款方式！');
			return false;
		}
		if(!bank_id>0){
			alert('请选择收款账户！');
			return false;
		}
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