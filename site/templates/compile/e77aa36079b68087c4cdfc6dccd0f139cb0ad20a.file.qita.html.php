<?php /* Smarty version Smarty-3.0.4, created on 2020-03-09 15:43:50
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/shouqian/qita.html" */ ?>
<?php /*%%SmartyHeaderCode:225085e65f3b646db23-54673152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e77aa36079b68087c4cdfc6dccd0f139cb0ad20a' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/shouqian/qita.html',
      1 => 1583739826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '225085e65f3b646db23-54673152',
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
			<h5>其他费用管理 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;车辆：苏D<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['car_num']) ? $_smarty_tpl->getVariable('paiche')->value['car_num'] : null);?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_type']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_type'] : null)==1){?>承租人：<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_linker']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_linker'] : null);?>
<?php }elseif((isset($_smarty_tpl->getVariable('paiche')->value['paiche_type']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_type'] : null)==3){?>用车单位：<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['client_name']) ? $_smarty_tpl->getVariable('paiche')->value['client_name'] : null);?>
<?php }?></h5>
		</div>
		<form method="post" action="index.php?task=qita_action" name="form1" id="form1">
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
								
								<!--收支记录-->
								<?php if (count($_smarty_tpl->getVariable('account_log')->value)>0){?>
								<span  class="span1" style="float: left;margin-bottom: 20px">
                                <img src="../../../images/a2.png" style="width: 20px">
                                        收支详细
                                </span> 
								<table class="table table-bordered" class="shiji">
								  	<tr>
                                        <th width="20%">时间</th>
                                           	<th width="15%">名称</th>
                                            <th width="10%">收入</th>
                                            <th width="10%">支出</th>
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




								<span  class="span1" style="float: left;margin-bottom: 20px">
                                <img src="../../../images/a2.png" style="width: 20px">
                                       收费明细
                                </span>
								<!--费用列表-->
								<?php if (count($_smarty_tpl->getVariable('charges_list')->value)>0){?>
								<table class="table table-bordered" class="shiji">
								  	<tr>
                                        	<th width="16%">费用名称</th>
                                           	<th width="16%">应收金额</th>
                                            <th width="16%">已收金额</th>
                                            <th width="20%">本次收费</th>
                                  
                                            <th width="16%">添加时间</th>
                                            <th width="16%">添加人</th>
                                            
                                            </tr>
                                           <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('charges_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
                                        
                                        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null)>(isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null)){?>		
											<tr>
												<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null);?>
</td>
												<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null);?>
</td>
												<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
</td>
												<td><input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" name="have_in_money[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
" class="charges form-control input-sm"></td>
								
												<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['addtime']) ? $_smarty_tpl->tpl_vars['row']->value['addtime'] : null);?>
</td>
												<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</td>
												<input type="hidden" name="charges_aaa[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
												<input type="hidden" name="have_in_money_a[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
">

												<input type="hidden" class="charges_a" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
">

						
												

											</tr>
											<?php }?>
										<?php }} ?>
								</table>
								<?php }?>
								<!--优惠-->
								<?php if (count($_smarty_tpl->getVariable('youhui_list')->value)>0){?>
								<table class="table table-bordered" class="shiji">
								  	<tr>
                                        <th width="16%">优惠名称</th>
                                           	<th width="16%">优惠金额</th>
                                            <th width="16%">已优惠金额</th>
                							<th width="20%">本次优惠</th>
                                            <th width="16%">添加时间</th>
                                            <th width="16%">添加人</th>
                                            
                                           
                                        </tr>
                                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('youhui_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['youhui_mone']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_mone'] : null)>(isset($_smarty_tpl->tpl_vars['row']->value['youhui_omone']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_omone'] : null)){?>			
											<tr>
												<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_name']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_name'] : null);?>
</td>
												<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_mone']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_mone'] : null);?>
</td>
												<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_omone']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_omone'] : null);?>
</td>
												<td><input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" name="youhui_omone[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_mone']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_mone'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['youhui_omone']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_omone'] : null);?>
" class="charges form-control input-sm"></td>
												<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_addtime']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_addtime'] : null);?>
</td>
												<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</td>
												<input type="hidden" name="youhui_aaa[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
												<input type="hidden" name="youhui_omone_a[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_omone']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_omone'] : null);?>
">
												<input type="hidden" class="youhui_a" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_mone']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_mone'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['youhui_omone']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_omone'] : null);?>
">
											</tr>
											<?php }?>
											<?php }} ?>
								
								</table>
								<?php }?>


								<?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_pintaiid']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_pintaiid'] : null)==2){?>
								<span  class="span1" style="float: left;margin-bottom: 20px">
                                <img src="../../../images/a2.png" style="width: 20px">
                                       调车公司收费明细
                                </span>
                                
















								<!--调车费用-->
								<?php if (count($_smarty_tpl->getVariable('charges_list')->value)>0&&(isset($_smarty_tpl->getVariable('paiche')->value['paiche_type']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_type'] : null)==2){?>
								<table class="table table-bordered" class="shiji">
								  	<tr>
                                        <th width="16%">费用名称</th>
                                 
                                          
                                            <th width="16%">调车公司报价</th>
                                            <th width="16%">调车公司已收</th>
                                            <th width="20%">本次调车公司收款</th>
                                            <th width="16%">添加时间</th>
                                            <th width="16%">添加人</th>
                                            
                                            </tr>
                                           <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('charges_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
                                        
                                        <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['have_freeze_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_freeze_money'] : null)!=(isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null)){?>		
											<tr>
												<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null);?>
</td>
	                                            	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_freeze_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_freeze_money'] : null);?>
</td>
	                                            	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null);?>
</td>
	                                            	<td><input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" name="have_back_money[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_freeze_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_freeze_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null);?>
" class="charges form-control input-sm"></td>
												<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['addtime']) ? $_smarty_tpl->tpl_vars['row']->value['addtime'] : null);?>
</td>
												<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</td>

												<input type="hidden" name="charges_bbb[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">


												<input type="hidden"  value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null);?>
" name="have_back_money_a[]">

												<input type="hidden" class="charges_b" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_freeze_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_freeze_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null);?>
">
												
												

											</tr>
											<?php }?>
										<?php }} ?>
								</table>
								<?php }?>


								<!--调车优惠-->
								<?php if (count($_smarty_tpl->getVariable('youhui_list')->value)>0&&(isset($_smarty_tpl->getVariable('paiche')->value['paiche_type']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_type'] : null)==2){?>
								<table class="table table-bordered" class="shiji">
								  	<tr>
                                       <th width="16%">优惠名称</th>
                                           	
                                            <th width="16%">调车公司报价优惠</th>
                                            <th width="16%">调车公司报价已优惠</th>
                                            <th width="20%">调车公司报价本次优惠</th>
                                            
                                            <th width="16%">添加时间</th>
                                            <th width="16%">添加人</th>
                                            
                                           
                                        </tr>
                                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('youhui_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['youhui_smoney']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_smoney'] : null)!=(isset($_smarty_tpl->tpl_vars['row']->value['youhui_emoney']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_emoney'] : null)){?>			
											<tr>
												<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_name']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_name'] : null);?>
</td>
												<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_smoney']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_smoney'] : null);?>
</td>
												<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_emoney']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_emoney'] : null);?>
</td>
												<td><input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" name="youhui_emoney[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_smoney']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_smoney'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['youhui_emoney']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_emoney'] : null);?>
" class="charges form-control input-sm"></td>

												
												<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_addtime']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_addtime'] : null);?>
</td>
												<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</td>
												<input type="hidden" name="youhui_bbb[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">

												<input type="hidden" name="youhui_emoney_a[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_emoney']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_emoney'] : null);?>
">
												<input type="hidden" class="youhui_b" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['youhui_smoney']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_smoney'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['youhui_emoney']) ? $_smarty_tpl->tpl_vars['row']->value['youhui_emoney'] : null);?>
">
												
											</tr>
											<?php }?>
											<?php }} ?>
								
								</table>
								<?php }?>
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
											<option  value="1">收取其他费用</option>
											<?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_jie']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_jie'] : null)==2){?>
											<option  value="2">订单结账</option>
											<?php }?>
										</select>
										</td>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">总金额：</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm" name="money" id="money"  readonly="readonly" unselectable="on">
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
	jisuan();
	$('#yajin_type').change(function(){
		var yajin_type=parseInt($(this).val());
		if(yajin_type==1){
			
			$(".charges").removeAttr("readonly");
			$(".charges").removeAttr("unselectable");
			
			jisuan();

		}else if(yajin_type==2){
			$(".charges").attr("readonly","readonly");
			$(".charges").attr("unselectable","on");
			//我公司收费
			var have_in_money=0;
			for(var i=0;i<$("input[name='have_in_money[]']").length;i++){
				$("input[name='have_in_money[]']").eq(i).val(parseFloat($(".charges_a").eq(i).val()));
				have_in_money=have_in_money+parseFloat($(".charges_a").eq(i).val());
			}
			
			var youhui_omone=0;
			for(var i=0;i<$("input[name='youhui_omone[]']").length;i++){
				$("input[name='youhui_omone[]']").eq(i).val(parseFloat($(".youhui_a").eq(i).val()));
				youhui_omone=youhui_omone+parseFloat($(".youhui_a").eq(i).val());

			}
			
			

			var have_back_money=0;
			for(var i=0;i<$("input[name='have_back_money[]']").length;i++){
				have_back_money=have_back_money+parseFloat($(".charges_b").eq(i).val());
				$("input[name='have_back_money[]']").eq(i).val(parseFloat($(".charges_b").eq(i).val()))
			}
			
			var youhui_emoney=0;
			for(var i=0;i<$("input[name='youhui_emoney[]']").length;i++){
				youhui_emoney=youhui_emoney+parseFloat($(".youhui_b").eq(i).val());
				$("input[name='youhui_emoney[]']").eq(i).val(parseFloat($(".youhui_b").eq(i).val()))
			}
			
			
			var two = have_in_money-youhui_omone;
			var twoFixed = two.toFixed(2);
			var two_c = have_back_money-youhui_emoney;
			var twoFixed_c = two_c.toFixed(2);
			$("#money").val(twoFixed-twoFixed_c);
		}
		
		
	})
	//最大收款
	$("input[name='have_in_money[]']").blur(function(){
		var have_in_money=0;
		if(parseFloat($(this).val())>0){
			have_in_money=parseFloat($(this).val())
		}
		var index= $("input[name='have_in_money[]']").index(this);
		var charges_a=parseFloat($('.charges_a').eq(index).val());
		if(have_in_money>charges_a){
			alert("最大收费"+charges_a);
			$("input[name='have_in_money[]']").eq(index).val(charges_a);
		}
		
		jisuan();
	})
	//最大优惠
	$("input[name='youhui_omone[]']").blur(function(){

		
		var youhui_omone=0;
		if(parseFloat($(this).val())>0){
			youhui_omone=parseFloat($(this).val())
		}
		var index= $("input[name='youhui_omone[]']").index(this);
		var youhui_a=parseFloat($('.youhui_a').eq(index).val());
		if(youhui_omone>youhui_a){
			alert("最大优惠"+youhui_a);
			$("input[name='youhui_omone[]']").eq(index).val(youhui_a);
		}

		jisuan();
	})
	//最大付费
	$("input[name='have_back_money[]']").blur(function(){
		// var have_back_money=parseFloat($(this).val());
		// var index= $("input[name='have_back_money[]']").index(this);
		// var charges_c=parseFloat($('.charges_c').eq(index).val());
		// if(have_back_money>charges_c){
		// 	alert("调车公司最大收费"+charges_c);
		// 	$("input[name='have_back_money[]']").eq(index).val(charges_c);
		// }
		
		jisuan();
	})
	//调车最大优惠
	$("input[name='youhui_emoney[]").blur(function(){
		var youhui_emoney=0;
		if(parseFloat($(this).val())>0){
			youhui_emoney=parseFloat($(this).val())
		}
		var index= $("input[name='youhui_emoney[]").index(this);
		var youhui_b=parseFloat($('.youhui_b').eq(index).val());
		if(youhui_emoney>youhui_b){
			alert("调车公司最大优惠"+youhui_b);
			$("input[name='youhui_emoney[]").eq(index).val(youhui_b);
		}
		jisuan();
		
	})
	
	/*
	$(".charges_c").blur(function(){
		var charges_c=parseFloat($(this).val());
		var index= $(".charges_c").index(this);
		var charges_d=parseFloat($('.charges_d').eq(index).val());
		if(charges_c>charges_d){
			alert("调车公司最大收费"+charges_d);
			$(".charges_c").eq(index).val(charges_d);
		}
		jisuan();
	})
	*/
	




	function jisuan(){
		var have_in_money=0
		for(var i=0;i<$("input[name='have_in_money[]']").length;i++){
			have_in_money=have_in_money+parseFloat($("input[name='have_in_money[]']").eq(i).val());
		}

		var youhui_omone=0
		for(var i=0;i<$("input[name='youhui_omone[]']").length;i++){
			youhui_omone=youhui_omone+parseFloat($("input[name='youhui_omone[]']").eq(i).val());
		}

		var have_back_money=0
		for(var i=0;i<$("input[name='have_back_money[]']").length;i++){
			have_back_money=have_back_money+parseFloat($("input[name='have_back_money[]']").eq(i).val());
		}

		var youhui_emoney=0
		for(var i=0;i<$("input[name='youhui_emoney[]']").length;i++){
			youhui_emoney=youhui_emoney+parseFloat($("input[name='youhui_emoney[]']").eq(i).val());
		}

		var two = have_in_money-youhui_omone;
		var twoFixed = 0;
		if(two){
			 twoFixed = two.toFixed(2);
		}
		

		var two_c = have_back_money-youhui_emoney;
		var twoFixed_c = 0;
		if(two_c){
			 twoFixed_c = two_c.toFixed(2);
		}
		$("#money").val(twoFixed-twoFixed_c);
		
	}
	$('#submit').click(function(){
		var yajin_type=parseInt($("#yajin_type").val());
		var payment_id=parseInt($("#payment_id").val());
		var bank_id=parseInt($("#bank_id").val());
		if(!yajin_type>0){
			alert('请选择操作！');
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