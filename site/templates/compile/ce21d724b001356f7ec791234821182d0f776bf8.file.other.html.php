<?php /* Smarty version Smarty-3.0.4, created on 2019-11-27 15:03:07
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/finance/change/other.html" */ ?>
<?php /*%%SmartyHeaderCode:112435dde1fabccfe33-74410246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce21d724b001356f7ec791234821182d0f776bf8' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/finance/change/other.html',
      1 => 1574838184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112435dde1fabccfe33-74410246',
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
<link rel="stylesheet" type="text/css" href="../../../../css/webuploader.css">
<link href="../../../../crm/css/style.min862f.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../../../../css/diyUpload.css">
<link href="../../../../crm/css/animate.min.css" rel="stylesheet">
<script src="../../../../jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<script type="text/javascript" src="../../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../../js/check_form.js"></script>
<script type="text/javascript" src="../../../../js/diyUpload/webuploader.html5only.min.js"></script>
<script type="text/javascript" src="../../../../js/diyUpload/diyUpload.js"></script>
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
	#box{width:840px; min-height:200px; background:#FF9}
	.gray-bg{
		background-color: #f3f3f4;
        padding: 20px;
	}
	.xt_problems{
		padding: 0 20px 20px 20px;
      	background-color: #fff; 
      	border-top:4px solid #e7eaec;
	}
	.xt_problems .lineD{
		border-bottom:none;
	}
	.xt_problems .table{
      width: 100%;
      max-width: 100%;
      margin-bottom: 20px;
      border-spacing: 0;
      border-collapse: collapse;
    }
    .xt_problems .table tr td{
    	background-color: #fff!important;
    }
    .xt_problems .table tr td input{
    	width: 100%;
    	height: 26px;
    	border:1px solid #ddd;
    	text-indent: 1em;
    }
    .xt_problems .table select{
    	width: 100%;
    	height: 30px;
    	border:1px solid #ddd;
    	padding-left: 10px;
    }
    input{
    	outline: none;
    }
    select{
    	outline: none;
    }
    .form2 dt{
    	width: auto;
    }
    .form2 dd{
    	margin-left: 80px;
    }
    .page_btm .btn_b{
    	width: auto;
    	height: auto;
    	color: #fff;
    	padding: 9px 20px;
    	font-size: 14px;
    	border-radius: 3px;
    	cursor: pointer;
    	background: #00b7ee;
    }
    .page_btm{
    	padding:18px 0 18px 84px;
    	border-top:none;
    }
    #box{
    	background:#fff;
    	box-shadow:0 0 2px rgba(0,0,0,0.188235);
    }
    input:focus{outline:none;}
/**/
</style>
</head>
<body class="gray-bg wrapper-content animated fadeInRight">
<div class="xt_problems">
<div class="so_main">
  <div class="page_tit">其他收入</div>  
  <form method="post" action="list.php" onsubmit="return other_check(this)" name="form1" enctype="multipart/form-data">
  <div class="form2">

		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th style="background-color:#F5F5F6;" width="15%">进账时间：</th>
					<td width="35%">
						<input type="text" name="add_time" size="16" value="<?php echo $_smarty_tpl->getVariable('addtime')->value;?>
" readonly/>
					</td>
					<th style="background-color:#F5F5F6;" width="15%">收入类型：</th>
					<td>
						<select name="change_class" id="change_class">
							<option>请选择</option>
							<option>刷卡费</option>
							<option>保险理赔及退保</option>
							<option>税金</option>
							<option>违章手续费</option>
							<option>卖车及报废收入</option>
							<option>一嗨多收费用</option>
							<option>备用金归还</option>
							<option>其他</option>
						</select>
					</td>
				</tr>
				<tr>
					<th style="background-color:#F5F5F6;" width="15%">金额：</th>
					<td width="35%">
<input onkeyup="this.value=this.value.replace(/[^\-?\d.]/g,'')" placeholder="必填" type="text" name="change_money" id="change_money" size="10" />
					</td>
					<th style="background-color:#F5F5F6;" width="15%">相关单位：</th>
					<td width="35%">
						<select style="width: 60%;float: left" name="client" id="client">
		                  <option value="0" <?php if ($_smarty_tpl->getVariable('companyid')->value==0){?>selected<?php }?>>请选择</option>
		                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('clientlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
		                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_id']) ? $_smarty_tpl->tpl_vars['rows']->value['client_id'] : null);?>
" ><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_name']) ? $_smarty_tpl->tpl_vars['rows']->value['client_name'] : null);?>
</option>
		                  <?php }} ?>
		                </select>
		                <input style="width: 30%;float: left;" type="text" id="search_key" size="15" placeholder="快速检索" />
					</td>
				</tr>
				<tr>
					<th style="background-color:#F5F5F6;" width="15%">收款方式：</th>
					<td width="35%">
						<select name="payments_to" id="payments_to" onchange="xdd()">
		                  <option value="">请选择</option>
		                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('paymentslist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
		                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_id']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_id'] : null);?>
" rel="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_fee']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_fee'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_name']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_name'] : null);?>
</option>
		                  <?php }} ?>
		                </select>
					</td>
					<th style="background-color:#F5F5F6;" width="15%">收款 账户：</th>
					<td width="35%">
						<select name="bank_to" id="bank_to">
		                  <option value="">请选择</option>
		                </select>
					</td>
				</tr>
				<tr>
					<th style="background-color:#F5F5F6;" width="15%">选择店铺：</th>
					<td width="35%">
						<select name="shop_id" >
				        	<option value="0" selected>请选择</option>
						<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shop')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
							<option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null);?>
" ><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>
</option>	
						<?php }} ?>
						</select>
					</td>
					<th style="background-color:#F5F5F6;" width="15%">备注：</th>
					<td width="35%">
						<input placeholder="必填" name="change_name" id="change_name"></input>
					</td>
				</tr>
			</thead>
		</table>


		<dl class="lineD">
	      <dt>附件上传：</dt>
	      <dd>
	      	<div id="box">
				<div id="test"></div>
			</div>
	      </dd>
	    </dl>
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" />
    </div>
  </div>
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  <input type="hidden" name="uid" id="uid" value="<?php echo $_smarty_tpl->getVariable('tmpid')->value;?>
" />
  </form>
</div>
</div>

<script>
var cid=$("#uid").val();

$('#test').diyUpload({
	url:'../../../../site/includes/fileupload.php?id=9999',
	success:function( data ) {
	    //alert(data.jsonrpc);
		console.info( data );
	},
	error:function( err ) {
		console.info( err );
	},
	formData:{
	    contractid:0,otherid:cid
	}
});
$(document).ready(function(){
    $("#search_key").live('input propertychange',function(){
            var aa=$("#search_key").val();
            $("#client option").each(function (){  
                var txt = $(this).text();  
                if(txt.toLowerCase().indexOf(aa) >-1){  
                    $(this).attr("selected",true);
                    return false;
                }
             });
    });
});


function xdd(){
	var paymentsVal = $("#payments_to option:selected").val();
	var html
	//console.log(paymentsVal);
	if(paymentsVal==1){
		html += "<option value='1'>现金账</option>";
	}else if(paymentsVal==2){
		html += "<option value='5'>农行都市桃源支行-运河租车</option><option value='15'>农行金色新城支行-兰博租车</option><option value='18'>常州市运河汽车租赁有限公司无锡分公司</option><option value='19'>常州市运河汽车租赁有限公司苏州分公司</option>"
	}else if(paymentsVal==3){
		html += "<option value='12'>中国建设银行——蒋政</option><option value='13'>中国农业银行——蒋政</option><option value='10'>中国工商银行——蒋政</option><option value='11'>中国银行——蒋政</option><option value='16'>中国建设银行(提现)——蒋政</option><option value='6'>蒋政——建行</option><option value='8'>押金账</option><option value='17'>备用金账</option>"
	}
	$("#bank_to").html(html);
}
</script>
</body>
</html>