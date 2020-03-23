<?php /* Smarty version Smarty-3.0.4, created on 2014-10-31 16:13:25
         compiled from "D:\czyhqc\site\templates\elsker\operator/base/add.html" */ ?>
<?php /*%%SmartyHeaderCode:22659545344a5832d92-43397319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e187f43591fa760fde743d5d418d7d7553a085c' => 
    array (
      0 => 'D:\\czyhqc\\site\\templates\\elsker\\operator/base/add.html',
      1 => 1403401785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22659545344a5832d92-43397319',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<div style='margin-top:5px'>
	<ul>
	<li>姓名：<input type='text' id='client_linker' size='5'  value='' /></li>
	</ul>
	<ul>
	<li>手机：<input type='text' id='client_phone' size='10'  value='' /></li>
	</ul>
	<ul>
	<li>职务：<input type='text' id='client_post' size='5'  value='' /></li>
	</ul>
	<ul>
	<li>备注：<input type='text' id='client_remark' size='70'  value='' /></li>
	</ul>
	<ul>
	<li><input type="button" value="确定" name="bok" onclick="bok()" /><input type="button" value="取消" name="berror" onclick="javascript:window.parent.window.jBox.close();" /></li>
	</ul>

</div>
<script language="javascript">
function bok()
{
	if (document.getElementById('client_linker').value==""){
		alert("请输入联系人姓名");
		document.getElementById('client_linker').focus();
		return false;
	}
	if (document.getElementById('client_phone').value==""){
		alert("请输入联系人手机号");
		document.getElementById('client_phone').focus();
		return false;
	}
	
	var new_linker=document.getElementById('client_linker').value;
	var new_phone=document.getElementById('client_phone').value;
	var new_post=document.getElementById('client_post').value;
	var new_remark=document.getElementById('client_remark').value;
	
	var old_linker=window.parent.window.document.getElementById('client_linker').value;
	var old_phone=window.parent.window.document.getElementById('client_phone').value;
	var old_post=window.parent.window.document.getElementById('client_post').value;
	var old_remark=window.parent.window.document.getElementById('client_remark').value;
	
	if (old_linker==""){
		window.parent.window.document.getElementById('client_linker').value=new_linker;
	}else{
		window.parent.window.document.getElementById('client_linker').value=old_linker+","+new_linker;
	}
	if (old_phone==""){
		window.parent.window.document.getElementById('client_phone').value=new_phone;
	}else{
		window.parent.window.document.getElementById('client_phone').value=old_phone+","+new_phone;
	}
	if (old_post==""){
		window.parent.window.document.getElementById('client_post').value=new_post;
	}else{
		window.parent.window.document.getElementById('client_post').value=old_post+","+new_post;
	}
	if (old_remark==""){
		window.parent.window.document.getElementById('client_remark').value=new_remark;
	}else{
		window.parent.window.document.getElementById('client_remark').value=old_remark+","+new_remark;
	}
	
	window.parent.window.jBox.close();
}
</script>
</body>
</html>