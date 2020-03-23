<?php /* Smarty version Smarty-3.0.4, created on 2018-12-22 17:09:48
         compiled from "D:\web\site\templates\elsker\operator/system/profit/create.html" */ ?>
<?php /*%%SmartyHeaderCode:126255c1dff5c6997f6-06308622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b974299849bfc7e7a8306add951f4b1d33734b15' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/system/profit/create.html',
      1 => 1545469355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126255c1dff5c6997f6-06308622',
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
<script type="text/javascript" src="../../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<script type="text/javascript" src="../../../../js/box.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit">编辑</div>
  
  <form method="post" action="create.php" onsubmit="return check(this)">
    
  <div class="form2">
    <dl class="lineD">
		  <dt><span class="redstar">*</span>姓名：</dt>
		  <dd><input type="text" name="paicheDriver" id="paicheDriver" size="6" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('emp')->value['emp_name']) ? $_smarty_tpl->getVariable('emp')->value['emp_name'] : null);?>
" />
			         关键字：<input type="text" name="paicheDriverKey" id="paicheDriverKey" size="6" />
			    <input type="hidden" name="paicheDriver2" id="paicheDriver2" value="<?php echo (isset($_smarty_tpl->getVariable('emp')->value['emp_id']) ? $_smarty_tpl->getVariable('emp')->value['emp_id'] : null);?>
" />
			    <a href="javascript:select_driver();"><img src="../../../../css/driver.gif" height="15" class="peoplePic" /></a>
		  </dd>
	</dl>
	<dl class="lineD">
      <dt><span class="redstar">*</span>比例：</dt>
      <dd>
        <input type="text" name="percent" value="<?php echo (isset($_smarty_tpl->getVariable('emp')->value['percent']) ? $_smarty_tpl->getVariable('emp')->value['percent'] : null);?>
" size="2"/>%
	  </dd>
    </dl>
	<dl class="lineD">
      <dt><span class="redstar">*</span>开始：</dt>
      <dd>
        <input type="text" name="startyear" value="<?php echo (isset($_smarty_tpl->getVariable('emp')->value['startyear']) ? $_smarty_tpl->getVariable('emp')->value['startyear'] : null);?>
" size="4" onFocus="this.blur()"/>年&nbsp;&nbsp;<input type="text" name="startmonth" value="<?php echo (isset($_smarty_tpl->getVariable('emp')->value['startmonth']) ? $_smarty_tpl->getVariable('emp')->value['startmonth'] : null);?>
" size="1"/>月
	  </dd>
    </dl>
    <dl class="lineD">
      <dt><span class="redstar">*</span>结束：</dt>
      <dd>
        <input type="text" name="endyear" value="<?php echo (isset($_smarty_tpl->getVariable('emp')->value['endyear']) ? $_smarty_tpl->getVariable('emp')->value['endyear'] : null);?>
" size="4" onFocus="this.blur()"/>年&nbsp;&nbsp;<input type="text" name="endmonth" value="<?php echo (isset($_smarty_tpl->getVariable('emp')->value['endmonth']) ? $_smarty_tpl->getVariable('emp')->value['endmonth'] : null);?>
" size="1"/>月<span class="redstar" style="font-size: 9px;margin-left: 5px;"></span>
	  </dd>
    </dl>
    

    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" />
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('emp')->value['id']) ? $_smarty_tpl->getVariable('emp')->value['id'] : null);?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" /></form>
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
		if(_form.paicheDriver.value==""){
			alert("请选择员工！");
			_form.paicheDriver.focus();
			return false;
		}
		if(_form.percent.value==""){
			alert("请输入比例！");
			_form.percent.focus();
			return false;
		}
		if(_form.startyear.value=="" || _form.startmonth.value=="" || _form.endyear.value=="" || _form.endmonth.value==""){
			alert("开始年月和结束年月必须填写！");
			_form.startyear.focus();
			return false;
		}
		if(_form.startyear.value != _form.endyear.value){
			alert("开始年份和结束年份必须一致！");
			_form.startyear.focus();
			return false;
		}
		return true;
	}
	function select_driver(){
	var key=$("#paicheDriverKey").val();
	demo_iframe('../../business/selectemp.php?sel_type=d&item=2&key='+key,'选择员工',650,380,'login_js');
}
</script>

</body>
</html>