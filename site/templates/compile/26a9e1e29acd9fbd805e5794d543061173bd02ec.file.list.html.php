<?php /* Smarty version Smarty-3.0.4, created on 2019-11-18 16:00:29
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/base/list.html" */ ?>
<?php /*%%SmartyHeaderCode:322785dd24f9d60f845-08702823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26a9e1e29acd9fbd805e5794d543061173bd02ec' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/base/list.html',
      1 => 1574064026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '322785dd24f9d60f845-08702823',
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
<link href="../../../../css/style.css" rel="stylesheet" type="text/css">
<link href="../../../../css/box.css" rel="stylesheet" type="text/css" />
<link href="../../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<link href="../../../crm/css/font-awesome.min93e3.css?v=3" rel="stylesheet">
<link rel="stylesheet" href="../../../../../crm/css/style.min862f.css">
<link rel="stylesheet" href="../../../../../crm/css/font-awesome.min93e3.css">
<link rel="stylesheet" href="../../../../../crm/css/bootstrap.min.css">

<script type="text/javascript" src="../../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<script type="text/javascript" src="../../../../js/box.js"></script>
<script type="text/javascript" src="../../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="../../../../js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<script type="text/javascript" src="../../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
</head>

<body class="class="gray-bg"">
<di000v class="wrapper wrapper-content animated fadeInRight">
		<div class="ibox float-e-margins">
			<div class="ibox-title">
				<h5><?php echo $_smarty_tpl->getVariable('PAGETITLE')->value;?>
</h5>
			</div>

<!-- 顶部按键页面栏 -->
<div class="ibox-title ibox-tools" style=" padding-right: 20px;float: left; width: 100%;text-align: left;">
					<div style="margin-top:5px; ">
						<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
						
						<a href="javascript:void(0);" id="searchTopic_action">
							<h5 style="font-weight: 700; color: #000; padding-top: 15px; padding-left: 10px; display: inline-block;vertical-align: auto;">
								搜索</h5>
						</a>

						<a class="collapse-link" href="javascript:void(0);" id="searchTopic_action" onclick="searchNews()">
							<i class="fa fa-chevron-down" id="up"></i>
						</a>

						<a href="create.php" class="btn btn-outline btn-default">
							<span><i class="glyphicon glyphicon-plus" aria-hidden="true"></i>添加</span></a>

						<a href="javascript:void(0);"  onclick="deleteNews();" class="btn btn-outline btn-default"
							target="blank">
							<span>删除</span></a>
						<a href="first.php" class="btn btn-outline btn-default" target="blank">
							<span>返回</span></a>
							<?php if ($_smarty_tpl->getVariable('tasktype')->value=='client'){?><a href="export.php" class="btn_a" target="blank"><span title="删除">导出</span></a><?php }?>
					</div>
					</div>

			<!-- 顶部按键页面栏结束 -->
			 <!-- 搜索栏 -->
			<div id="searchTopic_div" style="display:none;">
			
								<div class="form2">
									<form action="list.php?task=search" method="post">
										<table class="table table-bordered table-hover">
											<input type="hidden" name="tasktype" value="<?php echo $_smarty_tpl->getVariable('tasktype')->value;?>
" />
											<tr>
												<th width="15%" style="background-color:#F5F5F6">
													<span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;名称：</span>
												</th>
												<td width="35%">
													<input id="title" type="text" value="" name="title"
														class="form-control input-sm" placeholder="支持模糊查询" />
												</td>
												<?php if ($_smarty_tpl->getVariable('tasktype')->value=='client'||$_smarty_tpl->getVariable('tasktype')->value=='brother'){?>
												<th width="15%" style="background-color:#F5F5F6">
													<span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;联系人：</span>
												</th>
												<td width="35%">
													<input id="client_Mlinker" type="text" placeholder="支持模糊查询" value=""
														class="form-control input-sm" name="client_Mlinker">
												</td>
											</tr>
											<tr>
												<th width="15%" style="background-color:#F5F5F6">
													<span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;联系人手机：</span>
												</th>
												<td width="35%">
													<input id="client_Mphone" class="form-control input-sm" type="text"
														value="" name="client_Mphone">
												</td>
												<th>&nbsp;</th>
												<td>&nbsp;</td>
											</tr>
											<?php }?>

										</table>
										<!-- <div class="page_btm">
								<input class="btn_b" type="submit" value="确定">
							</div> -->
										<button type="submit" class="btn btn-outline btn-default"
											style="width: 10%">
											<i class="glyphicon glyphicon-search" aria-hidden="true"></i>
											搜索
										</button>
							
					</form>
				</div>
			</div>
			<!-- 搜索栏结束 -->

  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th width="10%">
		序号
	</th>
	<?php if ($_smarty_tpl->getVariable('tasktype')->value=='client'){?>
    <th width="20%">公司名称</th>
	<th width="10%">联系人<hr/>手机</th>
	<th width="10%">单位电话</th>
	<th width="15%">单位地址</th>
	<th width="5%">业绩归属<hr/>服务门店</th>
	<th width="10%">其他联系人</th>
	<th width="10%">合同</th>
	<th width="10%">备注</th>
	<?php }elseif($_smarty_tpl->getVariable('tasktype')->value=='brother'){?>
	<th>公司名称<hr />地址</th>
	<th>联系人<hr />联系人手机</th>
	<th>联系人职位<hr />组织机构代码证</th>
	<th>营业执照<hr />税号</th>
	<th>开户银行<hr />账号</th>
	<th>单位电话<hr />单位传真</th>
	<th>邮箱</th>
	<?php }elseif($_smarty_tpl->getVariable('tasktype')->value=='charge'){?>
	<th>项目名称</th>
	<th>默认值</th>
	<th>适用的业务品种</th>
	<th>驾驶员是否提成</th>
	<th>驾驶员提成率</th>
	<?php }elseif($_smarty_tpl->getVariable('tasktype')->value=='payment'){?>
	<th>收款方式</th>
	<th>手续费</th>
	<?php }elseif($_smarty_tpl->getVariable('tasktype')->value=='bank'){?>
	<th>开户行</th>
	<th>账号</th>
	<?php }elseif($_smarty_tpl->getVariable('tasktype')->value=='item'){?>
	<th>条款名称</th>
	<th>对应费用名称</th>
	<th>适用的业务品种</th>
	<th>展示类型</th>
	<th>选择项</th>
	<th>是否参与计算</th>
	<th>计算方式</th>
	<th>计算单位</th>
	<?php }?>
	<th width="10%">操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('baseList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  <?php if ($_smarty_tpl->getVariable('tasktype')->value=='client'){?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_id']) ? $_smarty_tpl->tpl_vars['row']->value['client_id'] : null);?>
" style="background-color: <?php if ((isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)%2==0){?>#e6ecec<?php }else{ ?><?php }?>">
    	<td style="text-align:center;"> </td>
	  	<td style="text-align:center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null);?>
</td>
		<td style="text-align:center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_Mlinker']) ? $_smarty_tpl->tpl_vars['row']->value['client_Mlinker'] : null);?>
<hr/><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_Mphone']) ? $_smarty_tpl->tpl_vars['row']->value['client_Mphone'] : null);?>
</td>
		
		<td style="text-align:center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_tel']) ? $_smarty_tpl->tpl_vars['row']->value['client_tel'] : null);?>
</td>
		<td style="text-align:center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_add']) ? $_smarty_tpl->tpl_vars['row']->value['client_add'] : null);?>
</td>
		<td style="text-align:center;">
			<span id="start_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_id']) ? $_smarty_tpl->tpl_vars['row']->value['client_id'] : null);?>
" data-id="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_id']) ? $_smarty_tpl->tpl_vars['row']->value['client_id'] : null);?>
" data-ywyid="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_salesman']) ? $_smarty_tpl->tpl_vars['row']->value['client_salesman'] : null);?>
" <?php if ($_smarty_tpl->getVariable('nowuserid')->value==46||$_smarty_tpl->getVariable('nowuserid')->value==1){?>class="spanremarks"<?php }?>><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null)!=''){?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
<?php }else{ ?>未设定<?php }?></span>
		<?php if ($_smarty_tpl->getVariable('nowuserid')->value==46||$_smarty_tpl->getVariable('nowuserid')->value==1){?><select id="salesman_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_id']) ? $_smarty_tpl->tpl_vars['row']->value['client_id'] : null);?>
" style="display:none;" class="textremarks">
		<option value="0">业务员</option>
		<?php  $_smarty_tpl->tpl_vars['row3'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('ywy_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row3']->key => $_smarty_tpl->tpl_vars['row3']->value){
?>
    	<option value="<?php echo (isset($_smarty_tpl->tpl_vars['row3']->value['emp_id']) ? $_smarty_tpl->tpl_vars['row3']->value['emp_id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['row3']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row3']->value['emp_name'] : null);?>
</option>
    	<?php }} ?>
		</select><?php }?>
        <hr/><span title="删除" id="street_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_id']) ? $_smarty_tpl->tpl_vars['row']->value['client_id'] : null);?>
" data-id="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_id']) ? $_smarty_tpl->tpl_vars['row']->value['client_id'] : null);?>
" data-shopid="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_shopid']) ? $_smarty_tpl->tpl_vars['row']->value['client_shopid'] : null);?>
" <?php if ($_smarty_tpl->getVariable('nowuserid')->value==46||$_smarty_tpl->getVariable('nowuserid')->value==1){?>class="spanremarks"<?php }?>><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null)!=''){?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null);?>
<?php }else{ ?>未设定<?php }?></span>
		<?php if ($_smarty_tpl->getVariable('nowuserid')->value==46||$_smarty_tpl->getVariable('nowuserid')->value==1){?><select id="shop_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_id']) ? $_smarty_tpl->tpl_vars['row']->value['client_id'] : null);?>
" style="display:none;" class="textremarks">
		<option value="0">服务归属门店</option>
		<?php  $_smarty_tpl->tpl_vars['row3'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shop_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row3']->key => $_smarty_tpl->tpl_vars['row3']->value){
?>
    	<option value="<?php echo (isset($_smarty_tpl->tpl_vars['row3']->value['shop_id']) ? $_smarty_tpl->tpl_vars['row3']->value['shop_id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['row3']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row3']->value['shop_name'] : null);?>
</option>
    	<?php }} ?>
		</select><?php }?>
        </td>
        <td style="text-align:center;">
        <?php  $_smarty_tpl->tpl_vars['row_a'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['row']->value['lianxi_list']) ? $_smarty_tpl->tpl_vars['row']->value['lianxi_list'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row_a']->key => $_smarty_tpl->tpl_vars['row_a']->value){
?>
        	<?php echo (isset($_smarty_tpl->tpl_vars['row_a']->value['name']) ? $_smarty_tpl->tpl_vars['row_a']->value['name'] : null);?>
(<?php echo (isset($_smarty_tpl->tpl_vars['row_a']->value['zhiwei']) ? $_smarty_tpl->tpl_vars['row_a']->value['zhiwei'] : null);?>
):&nbsp;&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['row_a']->value['phone']) ? $_smarty_tpl->tpl_vars['row_a']->value['phone'] : null);?>
<hr/>
        <?php }} ?>
        </td>
        <td style="text-align:center;"><?php  $_smarty_tpl->tpl_vars['row2'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['row']->value['contract_list']) ? $_smarty_tpl->tpl_vars['row']->value['contract_list'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row2']->key => $_smarty_tpl->tpl_vars['row2']->value){
?>
        <a href="../../sales/contract/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['contract_id']) ? $_smarty_tpl->tpl_vars['row2']->value['contract_id'] : null);?>
" target="_blank"><?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['contract_number']) ? $_smarty_tpl->tpl_vars['row2']->value['contract_number'] : null);?>
</a><hr />
        <?php }} ?></td>
		<td style="text-align:center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_Mremark']) ? $_smarty_tpl->tpl_vars['row']->value['client_Mremark'] : null);?>
</td>
	    <td>
			<a href="javascript:price(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_id']) ? $_smarty_tpl->tpl_vars['row']->value['client_id'] : null);?>
);">报价方案</a>--
			<a href="javascript:add_lianxi(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_id']) ? $_smarty_tpl->tpl_vars['row']->value['client_id'] : null);?>
);">添加联系人</a>
			<hr/>
			<a href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_id']) ? $_smarty_tpl->tpl_vars['row']->value['client_id'] : null);?>
"><span title="删除" style="color:red;"><span title="修改" class="glyphicon glyphicon-edit"></span></sapn></a> --            
            <a href="javascript:if(confirm('是否确定删除？')){window.location.href='delete.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_id']) ? $_smarty_tpl->tpl_vars['row']->value['client_id'] : null);?>
';}"><span title="删除" style="color:red;"><span title="删除" class="glyphicon glyphicon-remove-circle"></span></sapn></a>
		</td>
  </tr>


  
  <?php }elseif($_smarty_tpl->getVariable('tasktype')->value=='brother'){?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bro_id']) ? $_smarty_tpl->tpl_vars['row']->value['bro_id'] : null);?>
">
    	<td>1</td>
    	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bro_name']) ? $_smarty_tpl->tpl_vars['row']->value['bro_name'] : null);?>
<hr /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bro_add']) ? $_smarty_tpl->tpl_vars['row']->value['bro_add'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bro_linker']) ? $_smarty_tpl->tpl_vars['row']->value['bro_linker'] : null);?>
<hr /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bro_phone']) ? $_smarty_tpl->tpl_vars['row']->value['bro_phone'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bro_post']) ? $_smarty_tpl->tpl_vars['row']->value['bro_post'] : null);?>
<hr /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bro_orgCode']) ? $_smarty_tpl->tpl_vars['row']->value['bro_orgCode'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bro_license']) ? $_smarty_tpl->tpl_vars['row']->value['bro_license'] : null);?>
<hr /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bro_tariff']) ? $_smarty_tpl->tpl_vars['row']->value['bro_tariff'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bro_bank']) ? $_smarty_tpl->tpl_vars['row']->value['bro_bank'] : null);?>
<hr /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bro_account']) ? $_smarty_tpl->tpl_vars['row']->value['bro_account'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bro_tel']) ? $_smarty_tpl->tpl_vars['row']->value['bro_tel'] : null);?>
<hr /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bro_fax']) ? $_smarty_tpl->tpl_vars['row']->value['bro_fax'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bro_mail']) ? $_smarty_tpl->tpl_vars['row']->value['bro_mail'] : null);?>
</td>
		<td>
			<a href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bro_id']) ? $_smarty_tpl->tpl_vars['row']->value['bro_id'] : null);?>
"><span title="删除" style="color:red;"><span title="修改" class="glyphicon glyphicon-edit"></span></sapn></a> --            
            <a href="javascript:if(confirm('是否确定删除？')){window.location.href='delete.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bro_id']) ? $_smarty_tpl->tpl_vars['row']->value['bro_id'] : null);?>
';}"><span title="删除" style="color:red;"><span title="删除" class="glyphicon glyphicon-remove-circle"></span></sapn></a>
		</td>
  </tr>
  <?php }elseif($_smarty_tpl->getVariable('tasktype')->value=='charge'){?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_id']) ? $_smarty_tpl->tpl_vars['row']->value['charge_id'] : null);?>
">
    	<td><?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)+1;?>
</td>
    	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null);?>
</td>
    	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_default']) ? $_smarty_tpl->tpl_vars['row']->value['charge_default'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_business']) ? $_smarty_tpl->tpl_vars['row']->value['charge_business'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_provision']) ? $_smarty_tpl->tpl_vars['row']->value['charge_provision'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_provision_fee']) ? $_smarty_tpl->tpl_vars['row']->value['charge_provision_fee'] : null);?>
</td>
		<td>
			<a href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_id']) ? $_smarty_tpl->tpl_vars['row']->value['charge_id'] : null);?>
"><span title="删除" style="color:red;"><span title="修改" class="glyphicon glyphicon-edit"></span></sapn></a> --            
            <a href="javascript:if(confirm('是否确定删除？')){window.location.href='delete.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_id']) ? $_smarty_tpl->tpl_vars['row']->value['charge_id'] : null);?>
';}"><span title="删除" style="color:red;"><span title="删除" class="glyphicon glyphicon-remove-circle"></span></sapn></a>
		</td>
  </tr>
  <?php }elseif($_smarty_tpl->getVariable('tasktype')->value=='payment'){?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['payment_id']) ? $_smarty_tpl->tpl_vars['row']->value['payment_id'] : null);?>
">
    	<td><?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)+1;?>
</td>
    	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['payment_name']) ? $_smarty_tpl->tpl_vars['row']->value['payment_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['payment_fee']) ? $_smarty_tpl->tpl_vars['row']->value['payment_fee'] : null);?>
</td>
		<td>
			<a href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['payment_id']) ? $_smarty_tpl->tpl_vars['row']->value['payment_id'] : null);?>
"><span title="删除" style="color:red;"><span title="修改" class="glyphicon glyphicon-edit"></span></sapn></a> --            
            <a href="javascript:if(confirm('是否确定删除？')){window.location.href='delete.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['payment_id']) ? $_smarty_tpl->tpl_vars['row']->value['payment_id'] : null);?>
';}"><span title="删除" style="color:red;"><span title="删除" class="glyphicon glyphicon-remove-circle"></span></sapn></a>
		</td>
  </tr>
  <?php }elseif($_smarty_tpl->getVariable('tasktype')->value=='bank'){?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_id']) ? $_smarty_tpl->tpl_vars['row']->value['bank_id'] : null);?>
">
    	<td><?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)+1;?>
</td>
    	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_name']) ? $_smarty_tpl->tpl_vars['row']->value['bank_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_no']) ? $_smarty_tpl->tpl_vars['row']->value['bank_no'] : null);?>
</td>
		<td>
			<a href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_id']) ? $_smarty_tpl->tpl_vars['row']->value['bank_id'] : null);?>
"><span title="删除" style="color:red;"><span title="修改" class="glyphicon glyphicon-edit"></span></sapn></a> --            
            <a href="javascript:if(confirm('是否确定删除？')){window.location.href='delete.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_id']) ? $_smarty_tpl->tpl_vars['row']->value['bank_id'] : null);?>
';}"><span title="删除" style="color:red;"><span title="删除" class="glyphicon glyphicon-remove-circle"></span></sapn></a>
		</td>
  </tr>
  <?php }elseif($_smarty_tpl->getVariable('tasktype')->value=='item'){?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
">
    	<td><?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)+1;?>
</td>
    	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_name']) ? $_smarty_tpl->tpl_vars['row']->value['item_name'] : null);?>
</td>
    	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_costname']) ? $_smarty_tpl->tpl_vars['row']->value['item_costname'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_business']) ? $_smarty_tpl->tpl_vars['row']->value['item_business'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_type']) ? $_smarty_tpl->tpl_vars['row']->value['item_type'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_options']) ? $_smarty_tpl->tpl_vars['row']->value['item_options'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_calcu']) ? $_smarty_tpl->tpl_vars['row']->value['item_calcu'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_caltype']) ? $_smarty_tpl->tpl_vars['row']->value['item_caltype'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_unit']) ? $_smarty_tpl->tpl_vars['row']->value['item_unit'] : null);?>
</td>
		<td>
			<a href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
"><span title="删除" style="color:red;"><span title="修改" class="glyphicon glyphicon-edit"></span></sapn></a> --            
            <a href="javascript:if(confirm('是否确定删除？')){window.location.href='delete.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
';}"><span title="删除" style="color:red;"><span title="删除" class="glyphicon glyphicon-remove-circle"></span></sapn></a>
		</td>
  </tr>
  <?php }?>
 <?php }} ?>

 </table>
 </div>

<!-- <div class="ibox-title ibox-tools" style=" padding-right: 20px;float: left; width: 100%;text-align: left;">
					<div style="margin-top:5px; ">
						<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
						
						<a href="javascript:void(0);" id="searchTopic_action">
							<h5 style="font-weight: 700; color: #000; padding-top: 15px; padding-left: 10px; display: inline-block;vertical-align: auto;">
								搜索</h5>
						</a>

						<a class="collapse-link" href="javascript:void(0);" id="searchTopic_action" onclick="searchNews()">
							<i class="fa fa-chevron-down" id="up"></i>
						</a>

						<a href="create.php" class="btn btn-outline btn-default">
							<span><i class="glyphicon glyphicon-plus" aria-hidden="true"></i>添加</span></a>

						<a href="javascript:void(0);"  onclick="deleteNews();" class="btn btn-outline btn-default"
							target="blank">
							<span>删除</span></a>
						<a href="first.php" class="btn btn-outline btn-default" target="blank">
							<span>返回</span></a>
							<?php if ($_smarty_tpl->getVariable('tasktype')->value=='client'){?><a href="export.php" class="btn_a" target="blank"><span title="删除">导出</span></a><?php }?>
					</div>
					</div> -->
</div></div>
<!-->

</div></body>
</div><
<script>
	var now_client_id=0;
	var now_ywy_id=0;
	var now_shop_id=0;
	// 搜索栏收缩
				$("#up").click(function () {
					var searchTopic_div = $("#searchTopic_div").css('display');
					if (searchTopic_div == "none") {

						$("#searchTopic_div").css('display', 'block');
						$('#up').removeClass("fa-chevron-down");
						$('#up').addClass("fa-chevron-up");
					} else {
						$("#searchTopic_div").css('display', 'none');
						$('#up').removeClass("fa-chevron-up");
						$('#up').addClass("fa-chevron-down");
					}
				});
	//鼠标移动表格效果
	$(document).ready(function(){
        $("a.zoomIn").fancybox({
            'overlayShow'   : false,
            'transitionIn'  : 'elastic',
            'transitionOut' : 'elastic'
        });         
        
		$("tr[overstyle='on']").hover(
		  function () {
		    $(this).addClass("bg_hover");
		  },
		  function () {
		    $(this).removeClass("bg_hover");
		  }
		);
		$(".spanremarks").click(function(){
			now_client_id=$(this).data("id");
			now_object=$(this).attr("id");
	    	$(this).css("display","none");
	    	if (now_object=="start_"+now_client_id){
	    		now_ywy_id=$(this).data("ywyid");
	    		$("#salesman_"+now_client_id).css("display","inline-block");
		    	$("#salesman_"+now_client_id).val(now_ywy_id);
	    	}
	    	if (now_object=="street_"+now_client_id){
	    		now_shop_id=$(this).data("shopid");
	    		$("#shop_"+now_client_id).css("display","inline-block");
		    	$("#shop_"+now_client_id).val(now_shop_id);
	    	}
	    	
	    });
		$(".textremarks").change(function(){
			now_object=$(this).attr("id");
			if (now_object=="salesman_"+now_client_id){
				now_ywy_id=$(this).find("option:selected").val();
				$(this).css("display","none");
				
				$("#start_"+now_client_id).html($(this).find("option:selected").text());
				$("#start_"+now_client_id).data("ywyid",now_ywy_id);
		    	$("#start_"+now_client_id).css("display","inline-block");
		    	$.get("list.php?task=setywy&client_id="+now_client_id+"&ywy_id="+now_ywy_id,{}, function(jsonmsg){
	    			
	    		},"json");
		    	now_ywy_id=0;
			}
			if (now_object=="shop_"+now_client_id){
				now_shop_id=$(this).find("option:selected").val();
				$(this).css("display","none");
				
				$("#street_"+now_client_id).html($(this).find("option:selected").text());
				$("#street_"+now_client_id).data("shopid",now_shop_id);
		    	$("#street_"+now_client_id).css("display","inline-block");
		    	$.get("list.php?task=setywy&client_id="+now_client_id+"&shop_id="+now_shop_id,{}, function(jsonmsg){
	    			
	    		},"json");
		    	now_shop_id=0;
			}
	    	
	    	now_client_id=0;
	    	
		});
	});
	
	function checkon(o){
		if( o.checked == true ){
			$(o).parents('tr').addClass('bg_on') ;
		}else{
			$(o).parents('tr').removeClass('bg_on') ;
		}
	}
	
	function checkAll(o){
		if( o.checked == true ){
			$('input[name="checkbox"]').attr('checked','true');
			$('tr[overstyle="on"]').addClass("bg_on");
		}else{
			$('input[name="checkbox"]').removeAttr('checked');
			$('tr[overstyle="on"]').removeClass("bg_on");
		}
	}

	//获取已选择用户的ID数组
	function getChecked() {
		var uids = new Array();
		$.each($('table input:checked'), function(i, n){
			uids.push( $(n).val() );
		});
		return uids;
	}
    
    //删除用户
    function deleteNews(uid) {
        uid = uid ? uid : getChecked();
        uid = uid.toString();
        if(uid == '' || !confirm('删除成功后将无法恢复，确认继续？')) return false;
        
        $.post("delete.php?multi=1", {uid:uid}, function(res){
            if(res == '1') {
                uid = uid.split(',');
                for(i = 0; i < uid.length; i++) {
                    $('#badge_'+uid[i]).remove();
                }
                ui.success('操作成功');
            }else {
                ui.error('操作失败');
            }
        });
    }
    //导出Excel
    function excel(){
    	
    }
        
    var isSearchHidden = 1;
    function searchNews() {
      if(isSearchHidden == 1) {
        $("#searchTopic_div").slideDown("fast");
        isSearchHidden = 0;
      }else {
        $("#searchTopic_div").slideUp("fast");
        isSearchHidden = 1;
      }
    }         
	
	
	function folder(type, _this) {
		$('#search_'+type).slideToggle('fast');
		if ($(_this).html() == '展开') {
			$(_this).html('收起');
		}else {
			$(_this).html('展开');
		}
		
	}
	
	function price(carid){
		demo_iframe('price.php?client_id='+carid,'服务报价方案',850,470,'login_js');
	}

	function add_lianxi(carid){
		demo_iframe('add_lianxi.php?client_id='+carid,'服务报价方案',850,470,'login_js');
	}
	
	function setYWY(client_id){
		demo_iframe('list.php?task=setywy&client_id='+client_id,'设定业务员',850,470,'login_js');
	}

</script>
<!-->

</body>
</html>