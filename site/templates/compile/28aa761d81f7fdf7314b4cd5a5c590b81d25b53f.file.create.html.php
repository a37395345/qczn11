<?php /* Smarty version Smarty-3.0.4, created on 2018-12-02 14:37:17
         compiled from "D:\web\site\templates\elsker\operator/system/rules/create.html" */ ?>
<?php /*%%SmartyHeaderCode:264295c037d9dc3ef32-94829384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28aa761d81f7fdf7314b4cd5a5c590b81d25b53f' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/system/rules/create.html',
      1 => 1543732025,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '264295c037d9dc3ef32-94829384',
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
<script type="text/javascript" src="../../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<script type="text/javascript" src="../../../../js/box.js"></script>
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit">发布</div>
  
  <form method="post" action="insert.php" onsubmit="return check(this)" enctype="multipart/form-data">
    <table width="98%" style="border-collapse:collapse; margin: 0 auto; text-align:left; margin-left:10px; margin-top:5px">
                    	<tr>
                        	<td class="td1">信息标题:</td>
                        	<td class="td2">
                        		<input type="text" name="infotitle" id="infotitle" size="96" value="<?php echo (isset($_smarty_tpl->getVariable('infoList')->value['info_title']) ? $_smarty_tpl->getVariable('infoList')->value['info_title'] : null);?>
">
                        	</td>
                        </tr>  
                        <tr>
                        	<td class="td1">所属类别:</td>
                        	<td class="td2">
                            	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('infotypeList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
                            		<input type="radio" name="infotype" id="infotype" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['typeid']) ? $_smarty_tpl->tpl_vars['row']->value['typeid'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['typename']) ? $_smarty_tpl->tpl_vars['row']->value['typename'] : null);?>

                            	<?php }} ?>
                            </td>
                        </tr>
                        <tr>
                        	<td class="td1">信息内容：</td>
                            <td class="td2"><?php echo $_smarty_tpl->getVariable('editor')->value;?>
</td>
                        </tr>
                        <tr>
                        	<td class="td1">附件:</td>
                            <td class="td2"><input type="file" name="fj" id="fj"  /><a href="download.php?annexname=<?php echo (isset($_smarty_tpl->getVariable('infoList')->value['attachname']) ? $_smarty_tpl->getVariable('infoList')->value['attachname'] : null);?>
" target="_blank"><?php echo (isset($_smarty_tpl->getVariable('infoList')->value['attachname']) ? $_smarty_tpl->getVariable('infoList')->value['attachname'] : null);?>
</a></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align:center">
                            	<br>
                            	<input type="submit" name="tj" value="提交" class="input2">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="button" value="返回" class="input2" onclick="location.href='infolist.php';">
                                <input type="hidden" id="infotype1" value="<?php echo (isset($_smarty_tpl->getVariable('infoList')->value['info_type']) ? $_smarty_tpl->getVariable('infoList')->value['info_type'] : null);?>
">
                                <input type="hidden" name="id" id="id" value="<?php echo (isset($_smarty_tpl->getVariable('infoList')->value['id']) ? $_smarty_tpl->getVariable('infoList')->value['id'] : null);?>
">
								<input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
                            </td>
                        </tr> 
                    </table>
  </form>
</div>

<script type="text/javascript">
	function selectAll(){
		$("input[type='checkbox']").attr("checked",true);
	}
	function unselectAll(){
		$("input[type='checkbox']").attr("checked",false);
	}
	$(document).ready(function(){
		$(".subnavi").click(function(){
			var checked = false;
			$(this).parent().parent().find(".subnavi").each(function(){
				if($(this).attr("checked")){
					checked = true;
				}
			});
			var navi = $(this).parent().parent().parent().find(".navi");
			if(checked){
				navi.attr("checked",true);
			}else{
				navi.attr("checked",false);
			}
		});
		$(".navi").click(function(){
			$(this).parent().find(".subnavi").attr("checked",$(this).attr("checked"));
		});
	});
	function check(_form){
		if(_form.infotitle.value==""){
			alert("请输入标题名称！");
			_form.infotitle.focus();
			return false;
		}
		return true;
	}
</script>

</body>
</html>