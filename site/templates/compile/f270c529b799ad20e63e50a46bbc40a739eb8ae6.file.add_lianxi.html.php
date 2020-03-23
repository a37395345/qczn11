<?php /* Smarty version Smarty-3.0.4, created on 2019-10-25 10:16:52
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/base/add_lianxi.html" */ ?>
<?php /*%%SmartyHeaderCode:114675db25b14b99dc8-09738490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f270c529b799ad20e63e50a46bbc40a739eb8ae6' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/base/add_lianxi.html',
      1 => 1571707189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114675db25b14b99dc8-09738490',
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
<input type="hidden" id="id" value="<?php echo (isset($_smarty_tpl->getVariable('list_a')->value['id']) ? $_smarty_tpl->getVariable('list_a')->value['id'] : null);?>
" />
<div class="list">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<?php if ($_smarty_tpl->getVariable('list')->value){?>
  <tr>
    <th style="width:30px;">序号	</th>
	<th width="90">姓名</th>
	<th width="90">电话号码</th>
	<th width="90">职位</th>
	<th>备注说明</th>
	<th>操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
    	<td><?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)+1;?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['phone']) ? $_smarty_tpl->tpl_vars['row']->value['phone'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['zhiwei']) ? $_smarty_tpl->tpl_vars['row']->value['zhiwei'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['beizhu']) ? $_smarty_tpl->tpl_vars['row']->value['beizhu'] : null);?>
</td>
		<td><a href="add_lianxi.php?client_id=<?php echo $_smarty_tpl->getVariable('client_id')->value;?>
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
		<dt><span class="redstar">*</span>姓名:</dt>
		<dd><input type="text" name="name" id="name" size="45" value="<?php echo (isset($_smarty_tpl->getVariable('list_a')->value['name']) ? $_smarty_tpl->getVariable('list_a')->value['name'] : null);?>
" /></dd>
	</dl>
	<dl class="lineD">
		<dt><span class="redstar">*</span>电话号码：</dt>
		<dd><input type="text" name="phone" id="phone" value="<?php echo (isset($_smarty_tpl->getVariable('list_a')->value['phone']) ? $_smarty_tpl->getVariable('list_a')->value['phone'] : null);?>
" size="20"/></dd>
	</dl>
	<dl class="lineD">
		<dt>职位：</dt>
		<dd><input type="text" name="zhiwei" id="zhiwei" value="<?php echo (isset($_smarty_tpl->getVariable('list_a')->value['zhiwei']) ? $_smarty_tpl->getVariable('list_a')->value['zhiwei'] : null);?>
" size="5"/></dd>
	</dl>
	<dl class="lineD">
		<dt>备注说明：</dt>
		<dd><textarea name="beizhu" id="beizhu" cols="60" rows="3"><?php echo (isset($_smarty_tpl->getVariable('list_a')->value['beizhu']) ? $_smarty_tpl->getVariable('list_a')->value['beizhu'] : null);?>
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
		if ($('#name').val()==""){
			alert("姓名不能为空！");
			$('#name').focus();
			$("#name").removeAttr("disabled");
			return false;
		}
		if ($('#phone').val()==""){
			alert("电话号码不能为空！");
			$('#phone').focus();
			$("#phone").removeAttr("phone");
			return false;
		}
		$.ajax({
			  type:'POST',
			  url:'insert_lianxi.php',
			  data:{"client_id":$('#client_id').val(),"name":$('#name').val(),"phone":$('#phone').val(),
				  "zhiwei":$('#zhiwei').val(),"beizhu":$('#beizhu').val(),
				  "id":$('#id').val()},
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
			  success:function(req){
			      if (req=="1"){
			    	  alert("保存成功！");
			    	  window.location.href="add_lianxi.php?client_id="+$('#client_id').val();
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
			  url:'delete_lianxi.php',
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
			  success:function(req){
			      if (req==1){
			    	  alert("删除成功！");
			    	  window.location.href="add_lianxi.php?client_id="+$("#client_id").val();
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