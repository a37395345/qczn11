<?php /* Smarty version Smarty-3.0.4, created on 2018-06-02 17:57:56
         compiled from "D:\web\site\templates\elsker\operator/machine/breakfreeze.html" */ ?>
<?php /*%%SmartyHeaderCode:127735b126a24a2b4b9-63429546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1ebb13c66d3c825c391ac082b4d56d587f9816d' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/machine/breakfreeze.html',
      1 => 1527932449,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127735b126a24a2b4b9-63429546',
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
<link href="../../../css/style.css" rel="stylesheet" type="text/css">
<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
</head>
<body>
<form method="post" action="insert.php" name="form1" id="form1">
<div class="so_main">
<input type="hidden" name="task" value="breakfreeze_acc" />
<input type="hidden" name="bid" id="bid" value="<?php echo $_smarty_tpl->getVariable('bid')->value;?>
" />
<div class="form2">
	<dl class="lineD">
		<dt>违章车辆：</dt>
		<dd>苏D<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
&nbsp;&nbsp;&nbsp;&nbsp;合计金额：<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money'] : null);?>
<input type="hidden" name="total" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money'] : null);?>
"/></dd>
	</dl>
	<dl class="lineD">
		<dt>违章项目：</dt>
		<dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_item']) ? $_smarty_tpl->getVariable('list')->value['breakrules_item'] : null);?>

		</dd>
	</dl>
	<dl class="lineD">
		<dt>违章金额：</dt>
		<dd><input type="text" name="total1" id="total1" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money1']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money1'] : null);?>
" size="5" readonly/></dd>
	</dl>
	<dl class="lineD">
		<dt>违章手续费：</dt>
		<dd><input type="text" name="total2" id="total2" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money2']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money2'] : null);?>
" size="5" readonly/>
		</dd>
	</dl>
	<dl class="lineD">
		<dt>违章扣分：</dt>
		<dd><input type="text" name="total3" id="total3" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money3']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money3'] : null);?>
" size="5" readonly/>
		</dd>
	</dl>
	<dl class="lineD">
		<dt>金额抵扣分：</dt>
		<dd><input type="text" name="total4" id="total4" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['breakrules_money4']) ? $_smarty_tpl->getVariable('list')->value['breakrules_money4'] : null);?>
" size="5" readonly/>
		</dd>
	</dl>
	<dl class="lineD">
	    <dt><span class="redstar">*</span>派车单号：</dt>
	    <dd><input type="text" name="breakrules_paiche" id="breakrules_paiche" size="16"  /></dd>
	</dl>
</div>

  <div class="Toolbar_inbox">
    <a href="javascript:void(0);" class="btn_a" onclick="ok();"><span>确定</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="closebox();"><span>关闭</span></a>   	
  </div> 
</div>
</form>

<!-->
<script>

function ok(){
	
	if (!$('#breakrules_paiche').val()){
		alert("请填写派车单号！");
		$('#breakrules_paiche').focus();
		return false;
	}

	if(!confirm('请仔细核对，一旦提交就无法修改了，确定提交吗？')){
		return false;
	}
	
	$("#form1").submit();
	
	//window.parent.window.location.reload();
    //window.parent.window.jBox.close();
}


function closebox(){
	window.parent.window.jBox.close();
}

</script>
<!-->
</body>
</html>