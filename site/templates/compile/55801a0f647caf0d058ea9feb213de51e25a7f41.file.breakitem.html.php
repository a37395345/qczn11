<?php /* Smarty version Smarty-3.0.4, created on 2019-03-08 13:06:23
         compiled from "D:\web\site\templates\elsker\operator/machine/breakitem.html" */ ?>
<?php /*%%SmartyHeaderCode:7845bf792561d8645-89157387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55801a0f647caf0d058ea9feb213de51e25a7f41' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/machine/breakitem.html',
      1 => 1542868429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7845bf792561d8645-89157387',
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
<input type="hidden" id="id" value="<?php echo (isset($_smarty_tpl->getVariable('iteminfo')->value['item_id']) ? $_smarty_tpl->getVariable('iteminfo')->value['item_id'] : null);?>
" />
<div class="list">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<?php if ($_smarty_tpl->getVariable('itemlist')->value){?>
  <tr>
    <th style="width:30px;">序号	</th>
	<th>违章项目</th>
	<th>违章款</th>
	<th>手续费</th>
	<th>扣分</th>
	<th>金额抵扣分</th>
	<th>操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('itemlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
">
    	<td><input type="hidden" name="id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>
	  	<td style="text-align:left;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_name']) ? $_smarty_tpl->tpl_vars['row']->value['item_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_money1']) ? $_smarty_tpl->tpl_vars['row']->value['item_money1'] : null);?>
元</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_money2']) ? $_smarty_tpl->tpl_vars['row']->value['item_money2'] : null);?>
元</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_scope']) ? $_smarty_tpl->tpl_vars['row']->value['item_scope'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_money4']) ? $_smarty_tpl->tpl_vars['row']->value['item_money4'] : null);?>
元</td>
		<td><a href="breakitem.php?id=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
">编辑</a>&nbsp;|&nbsp;<a href="javascript:del(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
);">删除</a></td>
 </tr>
 <?php }} ?>
 <?php }?>
 </table>
</div>
<div class="form2">
	<dl class="lineD">
		<dt><span class="redstar">*</span>违章项目：</dt>
		<dd><input type="text" name="item_name" id="item_name" size="95" value="<?php echo (isset($_smarty_tpl->getVariable('iteminfo')->value['item_name']) ? $_smarty_tpl->getVariable('iteminfo')->value['item_name'] : null);?>
" />
		</dd>
	</dl>
	<dl class="lineD">
		<dt><span class="redstar">*</span>违章罚款：</dt>
		<dd><input type="text" name="item_money1" id="item_money1" value="<?php echo (isset($_smarty_tpl->getVariable('iteminfo')->value['item_money1']) ? $_smarty_tpl->getVariable('iteminfo')->value['item_money1'] : null);?>
" size="5"/>元&nbsp;&nbsp;&nbsp;&nbsp;
		<span style="color: #F00;">代办手续费</span>：<input type="text" name="item_money2" id="item_money2" value="<?php echo (isset($_smarty_tpl->getVariable('iteminfo')->value['item_money2']) ? $_smarty_tpl->getVariable('iteminfo')->value['item_money2'] : null);?>
" size="5"/>元
		</dd>
	</dl>
	<dl class="lineD">
		<dt>违章扣分：</dt>
		<dd><input type="text" name="item_scope" id="item_scope" value="<?php echo (isset($_smarty_tpl->getVariable('iteminfo')->value['item_scope']) ? $_smarty_tpl->getVariable('iteminfo')->value['item_scope'] : null);?>
" size="5"/>分	&nbsp;&nbsp;&nbsp;&nbsp;
		<span style="color: #F00;">金额抵扣分</span>：<input type="text" name="item_money4" id="item_money4" value="<?php echo (isset($_smarty_tpl->getVariable('iteminfo')->value['item_money4']) ? $_smarty_tpl->getVariable('iteminfo')->value['item_money4'] : null);?>
" size="5"/>元
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
		$("#item_money1").live('input propertychange',function(){
			if ($(this).val()=="" || $(this).val()==0){
				$("#item_money2").val("0");
			}else{
				var scope=$(this).val();
				$("#item_money2").val(parseInt(scope)*0.5);
			}
		});
		$("#item_scope").live('input propertychange',function(){
			if ($(this).val()=="" || $(this).val()==0){
				$("#item_money4").val("0");
			}else{
				var scope=$(this).val();
				$("#item_money4").val(parseInt(scope)*150);
			}
		});
	});
	function ok(){
		$("#btn_save").attr("disabled", true);
		if ($('#item_name').val()==""){
			alert("违章项目不能为空！");
			$('#item_name').focus();
			$("#btn_save").removeAttr("disabled");
			return false;
		}
		if ($('#item_money1').val()==""){
			alert("违章罚款不能为空！");
			$('#item_money1').focus();
			$("#btn_save").removeAttr("disabled");
			return false;
		}
		$.ajax({
			  type:'POST',
			  url:'breakitem.php?task=breakitem_acc',
			  data:{"item_name":$('#item_name').val(),"item_money1":$('#item_money1').val(),
				  "item_money2":$('#item_money2').val(),"item_scope":$('#item_scope').val(),
				  "item_money4":$('#item_money4').val(),"id":$('#id').val()},
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
			    	  window.location.href="breakitem.php";
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
			  url:'breakitem.php?task=breakitem_acc&op=delete',
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
			    	  window.location.href="breakitem.php";
			      }else{
			    	  alert("删除失败！");
			      }
			  }
		});
	}
	function winload(){
		var h = $(document).height()-$(window).height();
        $(document).scrollTop(h);
		$("#waitbackbg").css("display","none");
	} 
	function closebox(){
		window.parent.window.jBox.close();
	}
</script>
<!-->
</body>
</html>