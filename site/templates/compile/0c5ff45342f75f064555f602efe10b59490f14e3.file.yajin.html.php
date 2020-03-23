<?php /* Smarty version Smarty-3.0.4, created on 2019-11-13 17:27:38
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/shouqian/yajin.html" */ ?>
<?php /*%%SmartyHeaderCode:74245dcbcc8ae67658-24663524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c5ff45342f75f064555f602efe10b59490f14e3' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/shouqian/yajin.html',
      1 => 1573636915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74245dcbcc8ae67658-24663524',
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
<title>押金管理</title>
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
			<h5>其他费用管理 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;车辆：苏D<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_num']) ? $_smarty_tpl->getVariable('paiche')->value['car_num'] : null);?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_type']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_type'] : null)==1){?>承租人：<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_linker']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_linker'] : null);?>
<?php }elseif((isset($_smarty_tpl->getVariable('paiche')->value['paiche_type']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_type'] : null)==3){?>用车单位：<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['client_name']) ? $_smarty_tpl->getVariable('paiche')->value['client_name'] : null);?>
<?php }?></h5>
		</div>
		<form method="post" action="index.php?task=yajin_acction" name="form1" id="form1">
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
								<input type="hidden" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['id']) ? $_smarty_tpl->getVariable('data')->value['id'] : null);?>
" id="cid" name="cid">
								<input type="hidden" value="<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_type']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_type'] : null);?>
" id="paiche_type" name="paiche_type">
								

								<table class="table table-bordered" class="shiji">
								  	<tr>
                                        <th width="25%">应收押金</th>
                                           	<th width="25%">已收押金</th>
                                            <th width="25%">冻结押金</th>
                                            <th width="25%">已退押金</th>
                                           
                                        </tr>
                                             			
											<tr>
												<td><?php echo (isset($_smarty_tpl->getVariable('data')->value['conv_money']) ? $_smarty_tpl->getVariable('data')->value['conv_money'] : null);?>
</td>
												<td><?php echo (isset($_smarty_tpl->getVariable('data')->value['have_in_money']) ? $_smarty_tpl->getVariable('data')->value['have_in_money'] : null);?>
</td>
												<td><?php echo (isset($_smarty_tpl->getVariable('data')->value['have_freeze_money']) ? $_smarty_tpl->getVariable('data')->value['have_freeze_money'] : null);?>
</td>
												<td><?php echo (isset($_smarty_tpl->getVariable('data')->value['have_back_money']) ? $_smarty_tpl->getVariable('data')->value['have_back_money'] : null);?>
</td>
											</tr>
										<input type="hidden" id="conv_moneya" value=<?php echo (isset($_smarty_tpl->getVariable('data')->value['conv_money']) ? $_smarty_tpl->getVariable('data')->value['conv_money'] : null);?>
>
										<input type="hidden" id="have_in_moneya" value=<?php echo (isset($_smarty_tpl->getVariable('data')->value['have_in_money']) ? $_smarty_tpl->getVariable('data')->value['have_in_money'] : null);?>
>
										<input type="hidden" id="have_freeze_moneya" value=<?php echo (isset($_smarty_tpl->getVariable('data')->value['have_freeze_money']) ? $_smarty_tpl->getVariable('data')->value['have_freeze_money'] : null);?>
>
										<input type="hidden" id="have_back_moneya" value=<?php echo (isset($_smarty_tpl->getVariable('data')->value['have_back_money']) ? $_smarty_tpl->getVariable('data')->value['have_back_money'] : null);?>
>
								</table>
								<?php if (count($_smarty_tpl->getVariable('account_log')->value)>0){?>
								<table class="table table-bordered" class="shiji">
								  	<tr>
                                        <th width="20%">时间</th>
                                           	<th width="15%">名称</th>
                                            <th width="10%">收押金</th>
                                            <th width="10%">退押金</th>
                                            <th width="15%">方式</th>
                                            <th width="15%">账户</th>
                                            
                                           
                                        </tr>
                                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('account_log')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>			
											<tr>
												<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['add_time']) ? $_smarty_tpl->tpl_vars['row']->value['add_time'] : null);?>
</td>
												<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
</td>
												<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null)>0){?>
													<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
</td><td>&nbsp;</td>
													<?php }else{ ?>
													<td>&nbsp;</td><td><?php echo -1*(isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null);?>
</td>
													<?php }?>
												<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['payment_name']) ? $_smarty_tpl->tpl_vars['row']->value['payment_name'] : null);?>
</td>
												<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_name']) ? $_smarty_tpl->tpl_vars['row']->value['bank_name'] : null);?>
</td>
												
										
											</tr>
											<?php }} ?>
								
								</table>
								<?php }?>
								<?php if (count($_smarty_tpl->getVariable('breakrules')->value)>0){?>
								<table class="table table-bordered" class="shiji">
								  	<tr>
                                        <th width="15%">违章车辆</th>
                                           	<th width="15%">违章时间</th>
                                            <th width="15%">总金额</th>
                                            <th width="15%">冻结时间</th>
                                            <th width="15%">处理时间</th>
                                            <th width="15%">状态</th>
                                            
                                           
                                        </tr>
                                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('breakrules')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>			
											<tr>
												<td>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
</td>
												<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_date']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_date'] : null);?>
</td>
												
												<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money'] : null);?>
</td>
												<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_times']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_times'] : null);?>
</td>
												<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_endtimes']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_endtimes'] : null);?>
</td>
												<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['breakrules_end']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_end'] : null)==0){?>
													未处理
													<?php }else{ ?>
													已处理
												<?php }?></td>
												
											</tr>
											<?php }} ?>
								
								</table>
								<?php }?>


								<div class="shiji">
									<table class="table table-bordered" class="shiji">
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">操作选择：</span>
										</th>
										<td width="35%">
											<select class="form-control input-sm" id="yajin_type" name="yajin_type">
											<option  value="0">请选择</option>
											<option  value="1">收押金</option>
											<option  value="2">退押金</option>
											<option  value="3">冻结押金</option>
										</select>
										</td>
										<th style="background-color:#F5F5F6" width="15%">
											
										</th>
										<td width="35%">
											
										</td>
										
									</tr>
								



									<tr class="shou yajin" style="display: none" >
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">收钱时间：</span>
										</th>
										<td width="35%">
											<input type="text" id="add_time" class="form-control input-sm" name="add_time" placeholder="必填" value="<?php echo $_smarty_tpl->getVariable('add_time')->value;?>
" readonly="readonly" unselectable="on">
										</td>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">收款金额：</span>
										</th>
										<td width="35%">
											<input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" id="have_in_money" class="form-control input-sm" name="have_in_money" placeholder="必填">
										</td>
									</tr>
									<tr class="shou yajin" style="display: none" >
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">收款方式：</span>
										</th>
										<td width="35%">
											<select class="form-control input-sm" id="payments_id" name="payments_id" onchange="xdd()">
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

									<tr class="shou yajin" style="display: none" >
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">备注：</span>
										</th>
										<td width="35%">
											<input type="text" id="remark" class="form-control input-sm" name="remark" placeholder="" value="" >
										</td>
										<th style="background-color:#F5F5F6" width="15%">
											
										</th>
										<td width="35%">
											
										</td>
									</tr>
								
									<tr class="tui yajin" style="display: none" >
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">退钱时间：</span>
										</th>
										<td width="35%">
											<input type="text" id="add_time" class="form-control input-sm" name="add_time" placeholder="必填" value="<?php echo $_smarty_tpl->getVariable('add_time')->value;?>
" readonly="readonly" unselectable="on">
										</td>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">退款金额：</span>
										</th>
										<td width="35%">
											<input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" id="have_back_money" class="form-control input-sm" name="have_back_money" placeholder="必填" onblur="sk()">
										</td>
									</tr>
									<tr class="tui yajin" style="display: none" >
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">退款方式：</span>
										</th>
										<td width="35%">
											<select class="form-control input-sm" id="payments_ida" name="payments_ida" onchange="xdd()">
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
										<td width="35%" >
											<select class="form-control input-sm" id="bank_ida" name="bank_ida">
											
											</select>
										</td>
									</tr>
									<tr class="tui yajin" style="display: none" >
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">备注：</span>
										</th>
										<td width="35%">
											<input type="text" id="remark_a" class="form-control input-sm" name="remark_a" placeholder="" value="" >
										</td>
										<th style="background-color:#F5F5F6" width="15%">
											
										</th>
										<td width="35%">
											
										</td>
									</tr>


									
								<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('breakrules_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
												<input type="hidden" id="breakrules_money<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['rows']->value['breakrules_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['breakrules_money']) ? $_smarty_tpl->tpl_vars['rows']->value['breakrules_money'] : null);?>
">
								<?php }} ?>

								
									<tr class="dong yajin" style="display: none" >
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">冻结违章：</span>
										</th>
										<td width="85%" colspan="3">
											<select class="form-control input-sm" id="breakrules_id" name="breakrules_id">
											<option  value="0">请选择</option>

											</option>
												<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('breakrules_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
												
													<option  value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['rows']->value['breakrules_id'] : null);?>
">
											  			车牌：苏D<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['car_num']) ? $_smarty_tpl->tpl_vars['rows']->value['car_num'] : null);?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;违章时间：<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['breakrules_date']) ? $_smarty_tpl->tpl_vars['rows']->value['breakrules_date'] : null);?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;违章详细：<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['breakrules_item']) ? $_smarty_tpl->tpl_vars['rows']->value['breakrules_item'] : null);?>

													</option>
											 	<?php }} ?>
											</select>
											
										</td>
										
									</tr>

									<?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_type']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_type'] : null)==1){?>
									<tr class="dong yajin" style="display: none" >
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">冻结总额：</span>
										</th>
										<td width="35%" >
											<input type="text" class="form-control input-sm" name="have_freeze_money" id="have_freeze_money" placeholder="必填" readonly="readonly" unselectable="on">
										</td>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000" >冻结时间：</span>
										</th>
										<td width="35%" >
											<input type="text" class="form-control input-sm" name="add_time" id="add_time" placeholder="必填" value="<?php echo $_smarty_tpl->getVariable('add_time')->value;?>
" readonly="readonly" unselectable="on">
										</td>
										
									</tr>
									<?php }?>
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
<script src="js/jquery.min.js?v=2.1.4"></script>
<script src="js/bootstrap.min.js?v=3.3.6"></script>
<script src="js/content.min.js?v=1.0.0"></script>
<script src="js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
<script src="js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
<script src="js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
<script src="js/demo/bootstrap-table-demo.min.js"></script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>
<script type="text/javascript" src="../../../js/account.js"></script>
<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->
<script type="text/javascript">
	var paiche_type=parseInt($("#paiche_type").val());
	
	function sk(){
		var conv_moneya=parseFloat($("#conv_moneya").val());
		var have_in_moneya=parseFloat($("#have_in_moneya").val());
		var have_freeze_moneya=parseFloat($("#have_freeze_moneya").val());
		var have_back_moneya=parseFloat($("#have_back_moneya").val());
		var have_back_money=parseFloat($("#have_back_money").val());
		if(have_back_money>(have_in_moneya-have_freeze_moneya-have_back_moneya)){
			alert("超出能退的最大金额！");
			$("#have_back_money").val(have_in_moneya-have_freeze_moneya-have_back_moneya);
		}
	}
	$('#yajin_type').bind("change",function(){
		var yajin_type=parseInt($(this).val());
		$(".yajin").css("display","none");
		if(yajin_type==1){
			$(".shou").css("display","table-row");
		}else if(yajin_type==2){
			$(".tui").css("display","table-row");
		}else if(yajin_type==3){
			$(".dong").css("display","table-row");
		}
	});

	$('#breakrules_id').bind("change",function(){
		var breakrules_id=parseInt($(this).val());
		if(breakrules_id!=0){
			if(paiche_type==1){
				var breakrules_id=$(this).val();
				//已收
				var have_in_moneya=parseFloat($("#have_in_moneya").val());
				//冻结
				var have_freeze_moneya=parseFloat($("#have_freeze_moneya").val());
				//已退
				var have_back_moneya=parseFloat($("#have_back_moneya").val());
				//本次冻结
				var bdj=$("#breakrules_money"+breakrules_id).val();
				if((have_in_moneya-have_freeze_moneya-have_back_moneya)>=bdj){
					$("#have_freeze_money").val(bdj);
				}else{
					$('#breakrules_id').val(0);
					alert("剩余押金不够冻结此次违章！");
				}
				
			}
		}else{
			$("#have_freeze_money").val(0);
		}
		
		
	})

	$('#submit').click(function(){
		var yajin_type=parseInt($("#yajin_type").val());
		//收押金
		var have_in_money=parseFloat($("#have_in_money").val());
		//方式
		var payments_id=parseInt($("#payments_id").val());
		//账户
		var bank_id=parseInt($("#bank_id").val());

		//退押金
		var have_back_money=parseFloat($("#have_back_money").val());
		//方式
		var payments_ida=parseInt($("#payments_ida").val());
		//账户
		var bank_ida=parseInt($("#bank_ida").val());
		//违章选择
		var breakrules_id=parseInt($("#breakrules_id").val());
		
		if(yajin_type==1){
			if(!have_in_money>0){
				alert("请选择金额！");
				return false;
			}
			if(!payments_id>0){
				alert("请选择收款方式！");
				return false;
			}
			if(!bank_id>0){
				alert("请选择收款账户！");
				return false;
			}
		}else if(yajin_type==2){
			if(!have_back_money>0){
				alert("请选择金额！");
				return false;
			}
			if(!payments_ida>0){
				alert("请选择退款方式！");
				return false;
			}
			if(!bank_ida>0){
				alert("请选择退款账户！");
				return false;
			}
		}else if(yajin_type==3){
			if(!breakrules_id>0){
				alert("请选择违章！");
				return false;
			}
		}else{
			return false;
		}
	});
	
	$('#form1').submit(function(){
		$('#submit').attr('disabled','disabled');
		$('#submit').val('正在提交');

	});
	function xdd(){
	var paymentsVal = $("#payments_id option:selected").val();
	var paymentsVal1 = $("#payments_ida option:selected").val();
	var html
	//console.log(paymentsVal);
	if(paymentsVal==1||paymentsVal1==1){
		html += "<option value='1'>现金账</option>";
	}else if(paymentsVal==2||paymentsVal1==2){
		html += "<option value='5'>农行都市桃源支行-运河租车</option><option value='15'>农行金色新城支行-兰博租车</option><option value='18'>常州市运河汽车租赁有限公司无锡分公司</option>"
	}else if(paymentsVal==3||paymentsVal1==3){
		html += "<option value='12'>中国建设银行——蒋政</option><option value='13'>中国农业银行——蒋政</option><option value='10'>中国工商银行——蒋政</option><option value='11'>中国银行——蒋政</option><option value='16'>中国建设银行(提现)——蒋政</option><option value='6'>蒋政——建行</option><option value='8'>押金账</option><option value='17'>备用金账</option>"
	}
	$("#bank_id").html(html);
	$("#bank_ida").html(html);
}
</script>
</html>