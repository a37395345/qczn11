<?php /* Smarty version Smarty-3.0.4, created on 2014-09-27 15:59:42
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/finance/salary/create.html" */ ?>
<?php /*%%SmartyHeaderCode:2710154266e6e8375f4-88139625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c0e558a16ccb231c3d178fdda22f0ae7a634f98' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/finance/salary/create.html',
      1 => 1411804664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2710154266e6e8375f4-88139625',
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
<script type="text/javascript" src="../../../../js/common.js"></script>
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit">工资调整</div>  
  <form method="post" action="list.php" onsubmit="return salary_check(this)" name="form1">
  <div class="form2">
	  	<dl class="lineD">
		  <dt>姓名：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['emp_name']) ? $_smarty_tpl->getVariable('list')->value['emp_name'] : null);?>
&nbsp;&nbsp;职位：<?php echo (isset($_smarty_tpl->getVariable('list')->value['title']) ? $_smarty_tpl->getVariable('list')->value['title'] : null);?>
</dd>
		</dl>
	  	<dl class="lineD">
		  <dt>底薪：</dt>
		  <dd><input type="text" name="salary_base" id="salary_base" size="4" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['salary_base']) ? $_smarty_tpl->getVariable('list')->value['salary_base'] : null);?>
" onFocus="this.blur()"/></dd>
		</dl>
	  	<dl class="lineD">
		  <dt><span class="redstar">*</span>公里补贴：</dt>
		  <dd><input type="text" name="salary_kmsubsid" id="salary_kmsubsid" size="4" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['salary_kmsubsid']) ? $_smarty_tpl->getVariable('list')->value['salary_kmsubsid'] : null);?>
" /></dd>
		</dl>
		<dl class="lineD">
		  <dt><span class="redstar">*</span>超公里补贴：</dt>
		  <dd><input type="text" name="salary_ovkmsubsid" id="salary_ovkmsubsid" size="4" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['salary_ovkmsubsid']) ? $_smarty_tpl->getVariable('list')->value['salary_ovkmsubsid'] : null);?>
" /></dd>
		</dl>
		<dl class="lineD">
		  <dt><span class="redstar">*</span>加班工资：</dt>
		  <dd><input type="text" name="salary_ovtime" id="salary_ovtime" size="4" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['salary_ovtime']) ? $_smarty_tpl->getVariable('list')->value['salary_ovtime'] : null);?>
" /></dd>
		</dl>
		<dl class="lineD">
		  <dt><span class="redstar">*</span>全勤奖：</dt>
		  <dd><input type="text" name="salary_allday" id="salary_allday" size="4" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['salary_allday']) ? $_smarty_tpl->getVariable('list')->value['salary_allday'] : null);?>
" /></dd>
		</dl>
		<dl class="lineD">
		  <dt><span class="redstar">*</span>节油奖：</dt>
		  <dd><input type="text" name="salary_savefuel" id="salary_savefuel" size="4" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['salary_savefuel']) ? $_smarty_tpl->getVariable('list')->value['salary_savefuel'] : null);?>
" /></dd>
		</dl>
		<dl class="lineD">
		  <dt><span class="redstar">*</span>差旅费：</dt>
		  <dd><input type="text" name="salary_travel" id="salary_travel" size="4" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['salary_travel']) ? $_smarty_tpl->getVariable('list')->value['salary_travel'] : null);?>
" /></dd>
		</dl>
		<dl class="lineD">
		  <dt><span class="redstar">*</span>电话费：</dt>
		  <dd><input type="text" name="salary_telsubsid" id="salary_telsubsid" size="4" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['salary_telsubsid']) ? $_smarty_tpl->getVariable('list')->value['salary_telsubsid'] : null);?>
" /></dd>
		</dl>
		<dl class="lineD">
		  <dt><span class="redstar">*</span>垫付路桥费：</dt>
		  <dd><input type="text" name="salary_ioll" id="salary_ioll" size="4" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['salary_ioll']) ? $_smarty_tpl->getVariable('list')->value['salary_ioll'] : null);?>
" /></dd>
		</dl>
		<dl class="lineD">
		  <dt>应发工资：</dt>
		  <dd><input type="text" name="salary_should" id="salary_should" size="4" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['salary_should']) ? $_smarty_tpl->getVariable('list')->value['salary_should'] : null);?>
" onFocus="this.blur()" /></dd>
		</dl>
		<dl class="lineD">
		  <dt><span class="redstar">*</span>借款：</dt>
		  <dd><input type="text" name="salary_borrow" id="salary_borrow" size="4" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['salary_borrow']) ? $_smarty_tpl->getVariable('list')->value['salary_borrow'] : null);?>
" /></dd>
		</dl>
		<dl class="lineD">
		  <dt><span class="redstar">*</span>违章：</dt>
		  <dd><input type="text" name="salary_break" id="salary_break" size="4" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['salary_break']) ? $_smarty_tpl->getVariable('list')->value['salary_break'] : null);?>
" /></dd>
		</dl>
		<dl class="lineD">
		  <dt>社保：</dt>
		  <dd><input type="text" name="salary_social" id="salary_social" size="4" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['salary_social']) ? $_smarty_tpl->getVariable('list')->value['salary_social'] : null);?>
" onFocus="this.blur()"/></dd>
		</dl>
		<dl class="lineD">
		  <dt><span class="redstar">*</span>报销：</dt>
		  <dd><input type="text" name="salary_baoxiao" id="salary_baoxiao" size="4" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['salary_baoxiao']) ? $_smarty_tpl->getVariable('list')->value['salary_baoxiao'] : null);?>
" /></dd>
		</dl>
		<dl class="lineD">
		  <dt><span class="redstar">*</span>其他：</dt>
		  <dd><input type="text" name="salary_other" id="salary_other" size="4" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['salary_other']) ? $_smarty_tpl->getVariable('list')->value['salary_other'] : null);?>
" /></dd>
		</dl>
		<dl class="lineD">
		  <dt>备注：</dt>
		  <dd><input type="text" name="salary_remarks" id="salary_remarks" size="44" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['salary_remarks']) ? $_smarty_tpl->getVariable('list')->value['salary_remarks'] : null);?>
" /></dd>
		</dl>
		<dl class="lineD">
		  <dt>实发工资：</dt>
		  <dd><input type="text" name="salary_fact" id="salary_fact" size="4" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['salary_fact']) ? $_smarty_tpl->getVariable('list')->value['salary_fact'] : null);?>
" onFocus="this.blur()" /></dd>
		</dl>
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" /><b> 注：<span class="red">*</span>为必填项</b>
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['salary_id']) ? $_smarty_tpl->getVariable('list')->value['salary_id'] : null);?>
" />
  <input type="hidden" name="salary_year" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['salary_year']) ? $_smarty_tpl->getVariable('list')->value['salary_year'] : null);?>
" />
  <input type="hidden" name="salary_month" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['salary_month']) ? $_smarty_tpl->getVariable('list')->value['salary_month'] : null);?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  </form>
</div>
<!-->
<script>
$(document).ready(function(){
	$("input:text").live('input propertychange',function(){
		calTotal();
	});
});
function calTotal(){
	var should=0;
	should=parseFloat($("#salary_base").val())+($('#salary_kmsubsid').val()=="" ? 0 : parseFloat($('#salary_kmsubsid').val()))
			+($('#salary_ovtime').val()=="" ? 0 : parseFloat($('#salary_ovtime').val()))
			+($('#salary_allday').val()=="" ? 0 : parseFloat($('#salary_allday').val()))
			+($('#salary_savefuel').val()=="" ? 0 : parseFloat($('#salary_savefuel').val()))
			+($('#salary_travel').val()=="" ? 0 : parseFloat($('#salary_travel').val()))
			+($('#salary_telsubsid').val()=="" ? 0 : parseFloat($('#salary_telsubsid').val()))
			+($('#salary_ioll').val()=="" ? 0 : parseFloat($('#salary_ioll').val()));	
	$("#salary_should").val(should);
	should=should-($('#salary_borrow').val()=="" ? 0 : parseFloat($('#salary_borrow').val()))
			-($('#salary_break').val()=="" ? 0 : parseFloat($('#salary_break').val()))
			+($('#salary_baoxiao').val()=="" ? 0 : parseFloat($('#salary_baoxiao').val()))
			+($('#salary_other').val()=="" ? 0 : parseFloat($('#salary_other').val()));
	$("#salary_fact").val(should);
}
function salary_check(){
	var re=true;
	$.each($('input:text'), function(i, n){
		if (this.name!="salary_remarks"){
			if ($(n).val()==""){
				alert("带*号的每一项都要输入！");
				$(n).focus();
				re=false;
				return false;
			}
		}
		
	});
	if (re==false){
		return false;
	}
	
}

</script>
<!-->
</body>
</html>