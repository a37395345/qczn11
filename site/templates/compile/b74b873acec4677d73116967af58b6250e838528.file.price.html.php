<?php /* Smarty version Smarty-3.0.4, created on 2019-05-07 17:23:45
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/base/price.html" */ ?>
<?php /*%%SmartyHeaderCode:136785cd14ea1029959-18221238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b74b873acec4677d73116967af58b6250e838528' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/base/price.html',
      1 => 1466328974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136785cd14ea1029959-18221238',
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
<script type="text/javascript" src="../../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../../js/calendar.js"></script>
</head>
<body onload="winload();">
<div id="waitbackbg" >
	<img src="../../../../images/wait2.gif" style="position:absolute;left:50%;top:50%;"/>
</div>
<div class="so_main">
<input type="hidden" id="client_id" value="<?php echo $_smarty_tpl->getVariable('client_id')->value;?>
" />
<input type="hidden" id="id" value="<?php echo (isset($_smarty_tpl->getVariable('priceinfo')->value['id']) ? $_smarty_tpl->getVariable('priceinfo')->value['id'] : null);?>
" />
<div class="list">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<?php if ($_smarty_tpl->getVariable('pricelist')->value){?>
  <tr>
    <th style="width:30px;">序号	</th>
	<th width="90">目的地</th>
	<th width="90">车型</th>
	<th width="90">单程价格(元/趟)</th>
    <th width="90">双程价格(元/趟)</th>
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
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['destination']) ? $_smarty_tpl->tpl_vars['row']->value['destination'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['carmodel']) ? $_smarty_tpl->tpl_vars['row']->value['carmodel'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['scheme_price1']) ? $_smarty_tpl->tpl_vars['row']->value['scheme_price1'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['scheme_price2']) ? $_smarty_tpl->tpl_vars['row']->value['scheme_price2'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['remarks']) ? $_smarty_tpl->tpl_vars['row']->value['remarks'] : null);?>
</td>
		<td><a href="price.php?client_id=<?php echo $_smarty_tpl->getVariable('client_id')->value;?>
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
		<dt><span class="redstar">*</span>目的地：</dt>
		<dd><input type="text" name="destination" id="destination" size="45" value="<?php echo (isset($_smarty_tpl->getVariable('priceinfo')->value['destination']) ? $_smarty_tpl->getVariable('priceinfo')->value['destination'] : null);?>
" /></dd>
	</dl>
	<dl class="lineD">
		<dt><span class="redstar">*</span>车型：</dt>
		<dd><input type="text" name="carmodel" id="carmodel" value="<?php echo (isset($_smarty_tpl->getVariable('priceinfo')->value['carmodel']) ? $_smarty_tpl->getVariable('priceinfo')->value['carmodel'] : null);?>
" size="20"/></dd>
	</dl>
	<dl class="lineD">
		<dt>单程价格：</dt>
		<dd><input type="text" name="scheme_price1" id="scheme_price1" value="<?php echo (isset($_smarty_tpl->getVariable('priceinfo')->value['scheme_price1']) ? $_smarty_tpl->getVariable('priceinfo')->value['scheme_price1'] : null);?>
" size="5"/>元/趟</dd>
	</dl>
	<dl class="lineD">
		<dt>双程价格：</dt>
		<dd><input type="text" name="scheme_price2" id="scheme_price2" value="<?php echo (isset($_smarty_tpl->getVariable('priceinfo')->value['scheme_price2']) ? $_smarty_tpl->getVariable('priceinfo')->value['scheme_price2'] : null);?>
" size="5"/>元/趟</dd>
	</dl>
	<dl class="lineD">
		<dt>备注说明：</dt>
		<dd><textarea name="remarks" id="remarks" cols="60" rows="3"><?php echo (isset($_smarty_tpl->getVariable('priceinfo')->value['remarks']) ? $_smarty_tpl->getVariable('priceinfo')->value['remarks'] : null);?>
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
		var client_id=$("#client_id").val();
		if ($("#client_id").val()==""){
			alert("参数丢失，无法提交！");
			$("#btn_save").removeAttr("disabled");
			return false;
		}
		if ($('#destination').val()==""){
			alert("目的地不能为空！");
			$('#destination').focus();
			$("#btn_save").removeAttr("disabled");
			return false;
		}
		if ($('#carmodel').val()==""){
			alert("车型不能为空！");
			$('#carmodel').focus();
			$("#btn_save").removeAttr("disabled");
			return false;
		}
		$.ajax({
			  type:'POST',
			  url:'price.php?task=price_acc',
			  data:{"client_id":client_id,"destination":$('#destination').val(),"carmodel":$('#carmodel').val(),
				  "scheme_price1":$('#scheme_price1').val(),"scheme_price2":$('#scheme_price2').val(),
				  "remarks":$('#remarks').val(),"id":$('#id').val()},
			  dataType:"json",
			  cache: false,
			  error: function(){
				  alert('dddd');
			  },
			  beforeSend: function(){
				  $("#waitbackbg").css("display","block");
			  },
			  complete: function(){
				  $("#waitbackbg").css("display","none");
			  },
			  success:function(jsonmsg){
			      if (jsonmsg.status=="ok"){
			    	  alert("保存成功！");
			    	  window.location.href="price.php?client_id="+client_id;
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
			    	  window.location.href="price.php?client_id="+$("#client_id").val();
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