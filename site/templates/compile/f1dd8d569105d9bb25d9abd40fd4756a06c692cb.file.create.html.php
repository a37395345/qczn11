<?php /* Smarty version Smarty-3.0.4, created on 2019-12-13 13:53:19
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/system/profit/create.html" */ ?>
<?php /*%%SmartyHeaderCode:315255df3273b8fb083-06918891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1dd8d569105d9bb25d9abd40fd4756a06c692cb' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/system/profit/create.html',
      1 => 1576216378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315255df3273b8fb083-06918891',
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
<link href="../../../../crm/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
<link href="../../../../crm/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
<link href="../../../../crm/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
<link href="../../../../crm/css/animate.min.css" rel="stylesheet">
<link href="../../../../crm/css/style.min862f.css?v=4.1.0" rel="stylesheet">
<script type="text/javascript" src="../../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<script type="text/javascript" src="../../../../js/box.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
	.table td{
		background: #fff;
	}
	.table td input{
		/*width: 100%;*/
		border:1px solid #ddd;
		height: 30px;
	}
/**/
</style>
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
<div class="ibox float-e-margins">
  <form method="post" action="create.php" onsubmit="return check(this)">
    
  <table class="table table-bordered">
	<tr>
		<th style="background-color:#F5F5F6" width="15%">
			<span style="color:#000">姓名：</span>
		</th>
		<td width="35%"> 
			<input style="width: 100%;" type="text" name="paicheDriver" id="paicheDriver" size="6" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('emp')->value['emp_name']) ? $_smarty_tpl->getVariable('emp')->value['emp_name'] : null);?>
" />
		</td>
		<th style="background-color:#F5F5F6" width="15%"></th>
		<td>
			关键字：<input type="text" style="width: 66%;" name="paicheDriverKey" id="paicheDriverKey" size="6" />
			    <input type="hidden" name="paicheDriver2" id="paicheDriver2" value="<?php echo (isset($_smarty_tpl->getVariable('emp')->value['emp_id']) ? $_smarty_tpl->getVariable('emp')->value['emp_id'] : null);?>
" />
			    <a href="javascript:select_driver();"><img src="../../../../css/driver.gif" height="15" class="peoplePic" /></a>
		</td>
	</tr>
	<tr>
		<th style="background-color:#F5F5F6" width="15%">
			<span style="color:#000">开始时间：</span>
		</th>
		<td width="35%">
			<input type="text" name="startyear" value="<?php echo (isset($_smarty_tpl->getVariable('emp')->value['startyear']) ? $_smarty_tpl->getVariable('emp')->value['startyear'] : null);?>
" size="4" onFocus="this.blur()"/>年&nbsp;&nbsp;<input type="text" name="startmonth" value="<?php echo (isset($_smarty_tpl->getVariable('emp')->value['startmonth']) ? $_smarty_tpl->getVariable('emp')->value['startmonth'] : null);?>
" size="1"/>月
		</td>
		<th style="background-color:#F5F5F6" width="15%">
			<span style="color:#000">结束时间：</span>
		</th>
		<td>
			<input type="text" name="startyear" value="<?php echo (isset($_smarty_tpl->getVariable('emp')->value['startyear']) ? $_smarty_tpl->getVariable('emp')->value['startyear'] : null);?>
" size="4" onFocus="this.blur()"/>年&nbsp;&nbsp;<input type="text" name="startmonth" value="<?php echo (isset($_smarty_tpl->getVariable('emp')->value['startmonth']) ? $_smarty_tpl->getVariable('emp')->value['startmonth'] : null);?>
" size="1"/>月
		</td>
	</tr>
	<tr>
		<th style="background-color:#F5F5F6" width="15%">
			<span style="color:#000">比例：(%)</span>
		</th>
		<td width="35%">
			<input style="width: 100%;" type="text" name="percent" value="<?php echo (isset($_smarty_tpl->getVariable('emp')->value['percent']) ? $_smarty_tpl->getVariable('emp')->value['percent'] : null);?>
" size="2"/>
		</td>
	</tr>
	<div style="clear: both;"></div>
  </table>
  <div class="page_btm">
      <input type="submit" id="submit" class="btn btn-outline btn-default" value="提交" style="width: 10%;margin-left: 45%;display: block;">
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