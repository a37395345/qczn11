<?php /* Smarty version Smarty-3.0.4, created on 2017-04-29 10:28:56
         compiled from "D:\web\site\templates\elsker\operator/machine/price.html" */ ?>
<?php /*%%SmartyHeaderCode:139705903fa682f73c2-14009565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb69057f3885c25d617e3cf2c8c15607145fe41d' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/machine/price.html',
      1 => 1493286783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139705903fa682f73c2-14009565',
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
<link href="../../../css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
</head>
<body onload="winload();">
<div id="waitbackbg" >
	<img src="../../../images/wait2.gif" style="position:absolute;left:50%;top:50%;"/>
</div>
<div class="so_main">
<input type="hidden" id="car_id" value="<?php echo $_smarty_tpl->getVariable('car_id')->value;?>
" />
<input type="hidden" id="id" value="<?php echo (isset($_smarty_tpl->getVariable('priceinfo')->value['id']) ? $_smarty_tpl->getVariable('priceinfo')->value['id'] : null);?>
" />
<div class="list">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<?php if ($_smarty_tpl->getVariable('pricelist')->value){?>
  <tr>
    <th style="width:30px;">序号	</th>
	<th>套餐名称</th>
	<th>天数</th>
	<th>租金</th>
	<th>套餐价</th>
	<th>本地人押金</th>
	<th>外地人押金</th>
	<th>开始时间</th>
	<th>结束时间</th>
	<th>备注说明</th>
	<th>操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pricelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
    	<td><input type="hidden" name="id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_name']) ? $_smarty_tpl->tpl_vars['row']->value['plan_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_day']) ? $_smarty_tpl->tpl_vars['row']->value['plan_day'] : null);?>
天</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_rent']) ? $_smarty_tpl->tpl_vars['row']->value['plan_rent'] : null);?>
元/天</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_rentamount']) ? $_smarty_tpl->tpl_vars['row']->value['plan_rentamount'] : null);?>
元</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_deposit1']) ? $_smarty_tpl->tpl_vars['row']->value['plan_deposit1'] : null);?>
元</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_deposit2']) ? $_smarty_tpl->tpl_vars['row']->value['plan_deposit2'] : null);?>
元</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['start_Date']) ? $_smarty_tpl->tpl_vars['row']->value['start_Date'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['end_Date']) ? $_smarty_tpl->tpl_vars['row']->value['end_Date'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_rentRemarks']) ? $_smarty_tpl->tpl_vars['row']->value['plan_rentRemarks'] : null);?>
</td>
		<td><a href="price.php?car_id=<?php echo $_smarty_tpl->getVariable('car_id')->value;?>
&id=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">编辑</a>|<a href="javascript:del(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
);">删除</a></td>
 </tr>
 <?php }} ?>
 <?php }?>
 </table>
</div>
<div class="form2">
	<dl class="lineD">
		<dt><span class="redstar">*</span>套餐名称：</dt>
		<dd><input type="text" name="plan_name" id="plan_name" size="65" value="<?php echo (isset($_smarty_tpl->getVariable('priceinfo')->value['plan_name']) ? $_smarty_tpl->getVariable('priceinfo')->value['plan_name'] : null);?>
" />
		</dd>
	</dl>
	<dl class="lineD">
		<dt>租赁天数：</dt>
		<dd><input type="text" name="plan_day" id="plan_day" value="<?php echo (isset($_smarty_tpl->getVariable('priceinfo')->value['plan_day']) ? $_smarty_tpl->getVariable('priceinfo')->value['plan_day'] : null);?>
" size="2"/>天&nbsp;&nbsp;&nbsp;&nbsp;
		租金：<input type="text" name="plan_rent" id="plan_rent" value="<?php echo (isset($_smarty_tpl->getVariable('priceinfo')->value['plan_rent']) ? $_smarty_tpl->getVariable('priceinfo')->value['plan_rent'] : null);?>
" size="5"/>元/天&nbsp;&nbsp;&nbsp;&nbsp;
		<span style="color: #F00;">套餐价</span>：<input type="text" name="plan_rentamount" id="plan_rentamount" value="<?php echo (isset($_smarty_tpl->getVariable('priceinfo')->value['plan_rentamount']) ? $_smarty_tpl->getVariable('priceinfo')->value['plan_rentamount'] : null);?>
" size="6"/>元
		</dd>
	</dl>
	<dl class="lineD">
		<dt>押金：</dt>
		<dd>本地人：<input type="text" name="plan_deposit1" id="plan_deposit1" value="<?php echo (isset($_smarty_tpl->getVariable('priceinfo')->value['plan_deposit1']) ? $_smarty_tpl->getVariable('priceinfo')->value['plan_deposit1'] : null);?>
" size="5"/>元
		&nbsp;&nbsp;&nbsp;&nbsp;外地人：<input type="text" name="plan_deposit2" id="plan_deposit2" value="<?php echo (isset($_smarty_tpl->getVariable('priceinfo')->value['plan_deposit2']) ? $_smarty_tpl->getVariable('priceinfo')->value['plan_deposit2'] : null);?>
" size="5"/>元
		</dd>
	</dl>
	<dl class="lineD">
	    <dt>生效时间：</dt>
	    <dd><input type="text" name="start_Date" id="start_Date" size="12" value="<?php echo (isset($_smarty_tpl->getVariable('priceinfo')->value['start_Date']) ? $_smarty_tpl->getVariable('priceinfo')->value['start_Date'] : null);?>
" onClick="calendar.show(this)" />
	    &nbsp;&nbsp;~&nbsp;&nbsp;<input type="text" name="end_Date" id="end_Date" size="12" value="<?php echo (isset($_smarty_tpl->getVariable('priceinfo')->value['end_Date']) ? $_smarty_tpl->getVariable('priceinfo')->value['end_Date'] : null);?>
" onclick="calendar.show(this)" />&nbsp;&nbsp;注：空表示长期有效
	    </dd>
	</dl>
	
	<dl class="lineD">
		<dt>备注说明：</dt>
		<dd><textarea name="plan_rentRemarks" id="plan_rentRemarks" cols="60" rows="3"><?php echo (isset($_smarty_tpl->getVariable('priceinfo')->value['plan_rentRemarks']) ? $_smarty_tpl->getVariable('priceinfo')->value['plan_rentRemarks'] : null);?>
</textarea>
		</dd>
	</dl>
</div>
<div class="Toolbar_inbox">
    <a href="javascript:void(0);" class="btn_a" name="btn_save" id="btn_save" onclick="ok();"><span>确定</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="closebox();"><span>关闭</span></a>   	
  </div> 
</div>
<!-->
<script>
	$(document).ready(function(){
	    
	});
	function ok(){
		$("#btn_save").attr("disabled", true);
		var car_id=$("#car_id").val();
		if ($("#car_id").val()==""){
			alert("参数丢失，无法提交！");
			$("#btn_save").removeAttr("disabled");
			return false;
		}
		if ($('#plan_name').val()==""){
			alert("套餐名称不能为空！");
			$('#plan_name').focus();
			$("#btn_save").removeAttr("disabled");
			return false;
		}
		$.ajax({
			  type:'POST',
			  url:'price.php?task=price_acc',
			  data:{"car_id":car_id,"plan_name":$('#plan_name').val(),"plan_day":$('#plan_day').val(),
				  "plan_rent":$('#plan_rent').val(),"plan_rentamount":$('#plan_rentamount').val(),"plan_deposit1":$('#plan_deposit1').val(),
				  "plan_deposit2":$('#plan_deposit2').val(),"start_Date":$('#start_Date').val(),
				  "end_Date":$('#end_Date').val(),"plan_rentRemarks":$('#plan_rentRemarks').val(),"id":$('#id').val()},
			  dataType:"json",
			  cache: false,
			  error: function(){
			  },
			  beforeSend: function(){
				  $("#waitbackbg").css("display","block");
			  },
			  complete: function(){
				  //$("#waitbackbg").css("display","none");
			  },
			  success:function(jsonmsg){
			      if (jsonmsg.status=="ok"){
			    	  alert("保存成功！");
			    	  window.location.href="price.php?car_id="+car_id;
			      }else{
			    	  alert("保存失败！");
			    	  $("#btn_save").removeAttr("disabled");
			      }
			      
			  }
		});
	}
	function del(id){
		if (!confirm("确定要删除吗？")){
			return false;
		}
		$.ajax({
			  type:'POST',
			  url:'price.php?task=price_acc&op=delete',
			  data:{"id":id},
			  dataType:"json",
			  cache: false,
			  error: function(){
			  },
			  beforeSend: function(){
				  $("#waitbackbg").css("display","block");
			  },
			  complete: function(){
				  //$("#waitbackbg").css("display","none");
			  },
			  success:function(jsonmsg){
			      if (jsonmsg.status=="ok"){
			    	  alert("删除成功！");
			    	  window.location.href="price.php?car_id="+$("#car_id").val();
			      }else{
			    	  alert("删除失败！");
			      }
			      
			  }
		});
	}
	function winload(){ 
		$("#waitbackbg").css("display","none");
	} 
	function closebox(){
		window.parent.window.jBox.close();
	}
</script>
<!-->
</body>
</html>