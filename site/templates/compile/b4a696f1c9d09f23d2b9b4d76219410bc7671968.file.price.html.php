<?php /* Smarty version Smarty-3.0.4, created on 2019-05-28 10:47:20
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/machine/price.html" */ ?>
<?php /*%%SmartyHeaderCode:171565ceca138e3daf7-89040562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4a696f1c9d09f23d2b9b4d76219410bc7671968' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/machine/price.html',
      1 => 1559011600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171565ceca138e3daf7-89040562',
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
	
	<th>租金</th>
	
	<th>本地人/老客户押金</th>
	<th>外地人押金</th>
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
		
		
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_rentamount']) ? $_smarty_tpl->tpl_vars['row']->value['plan_rentamount'] : null);?>
元/天</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_deposit1']) ? $_smarty_tpl->tpl_vars['row']->value['plan_deposit1'] : null);?>
元</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['plan_deposit2']) ? $_smarty_tpl->tpl_vars['row']->value['plan_deposit2'] : null);?>
元</td>
		<td>①租1-9天都是按照：日租金×天数来计算租金。
②租10天-29天的，总租金打98折。（日租金×天数×0.98）
③租30天及以上的，总租金打95折。（日租金×天数×0.95）</td>
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
		<dt>租赁单价：</dt>
		<dd>
			<input type="hidden" name="plan_day" id="plan_day" value="1" size="2"/>
		<input type="text" name="plan_rentamount" id="plan_rentamount" value="<?php echo (isset($_smarty_tpl->getVariable('priceinfo')->value['plan_rentamount']) ? $_smarty_tpl->getVariable('priceinfo')->value['plan_rentamount'] : null);?>
" size="6"/>元/天
		</dd>
	</dl>

	<dl class="lineD">
		<dt>超时费：</dt>
		<dd>
		<input type="text" name="plan_chaoshi" id="plan_chaoshi" value="<?php echo (isset($_smarty_tpl->getVariable('priceinfo')->value['plan_chaoshi']) ? $_smarty_tpl->getVariable('priceinfo')->value['plan_chaoshi'] : null);?>
" size="6"/>元/小时
		</dd>
	</dl>

	<dl class="lineD">
		<dt>超公里：</dt>
		<dd>
		<label><input name="plan_chaokm" type="radio" value="n" <?php if ((isset($_smarty_tpl->getVariable('priceinfo')->value['plan_chaokm']) ? $_smarty_tpl->getVariable('priceinfo')->value['plan_chaokm'] : null)!='y'){?>checked<?php }?>/>不限公里数 </label> 
		<label><input name="plan_chaokm" type="radio" value="y" <?php if ((isset($_smarty_tpl->getVariable('priceinfo')->value['plan_chaokm']) ? $_smarty_tpl->getVariable('priceinfo')->value['plan_chaokm'] : null)=='y'){?>checked<?php }?>/>限制公里数 </label> 
		</dd>
	</dl>
<div style="display: <?php if ((isset($_smarty_tpl->getVariable('priceinfo')->value['plan_chaokm']) ? $_smarty_tpl->getVariable('priceinfo')->value['plan_chaokm'] : null)!='y'){?>none<?php }else{ ?>block<?php }?>" id="ck">
	<dl class="lineD">
		<dt>限制公里数：</dt>
		<dd>
		<input type="text" name="plan_chaokms" id="plan_chaokms" value="<?php echo (isset($_smarty_tpl->getVariable('priceinfo')->value['plan_chaokms']) ? $_smarty_tpl->getVariable('priceinfo')->value['plan_chaokms'] : null);?>
" size="6"/>公里/天
		</dd>
	</dl>
	<dl class="lineD">
		<dt>超公里费用：</dt>
		<dd>
		<input type="text" name="plan_chaokmy" id="plan_chaokmy" value="<?php echo (isset($_smarty_tpl->getVariable('priceinfo')->value['plan_chaokmy']) ? $_smarty_tpl->getVariable('priceinfo')->value['plan_chaokmy'] : null);?>
" size="6"/>元/公里
		</dd>
	</dl>
</div>
<script type="text/javascript">
	$('input[name="plan_chaokm"]').change(function(){
		if ($(this).val()=="y") {
        	$('#ck').css('display','block');
   		} else {
        	$('#ck').css('display','none');
   		}
	})

</script>
	<dl class="lineD">
		<dt>押金：</dt>
		<dd>本地人/老客户：<input type="text" name="plan_deposit1" id="plan_deposit1" value="<?php echo (isset($_smarty_tpl->getVariable('priceinfo')->value['plan_deposit1']) ? $_smarty_tpl->getVariable('priceinfo')->value['plan_deposit1'] : null);?>
" size="5"/>元
		&nbsp;&nbsp;&nbsp;&nbsp;外地人：<input type="text" name="plan_deposit2" id="plan_deposit2" value="<?php echo (isset($_smarty_tpl->getVariable('priceinfo')->value['plan_deposit2']) ? $_smarty_tpl->getVariable('priceinfo')->value['plan_deposit2'] : null);?>
" size="5"/>元
		</dd>
	</dl>

	


	<dl class="lineD">
		<dt>备注说明：</dt>
		<dd><textarea readonly="readonly" name="plan_rentRemarks" id="plan_rentRemarks" cols="60" rows="3">①租1-9天都是按照：日租金×天数来计算租金。
②租10天-29天的，总租金打98折。（日租金×天数×0.98）
③租30天及以上的，总租金打95折。（日租金×天数×0.95）</textarea>
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
				  "end_Date":$('#end_Date').val(),"plan_rentRemarks":$('#plan_rentRemarks').val(),"id":$('#id').val(),"plan_chaoshi":$('#plan_chaoshi').val(),"plan_chaokm":$('input[name="plan_chaokm"]:checked').val(),"plan_chaokms":$('#plan_chaokms').val(),"plan_chaokmy":$('#plan_chaokmy').val()},
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