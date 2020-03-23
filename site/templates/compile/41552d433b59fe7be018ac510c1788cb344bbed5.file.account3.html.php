<?php /* Smarty version Smarty-3.0.4, created on 2019-09-30 09:38:39
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/business/account3.html" */ ?>
<?php /*%%SmartyHeaderCode:20474738385d915c9fbea355-77622484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41552d433b59fe7be018ac510c1788cb344bbed5' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/business/account3.html',
      1 => 1569749206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20474738385d915c9fbea355-77622484',
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
<script type="text/javascript" src="../../../js/jquery.js"></script>

</head>
<body>
<form method="get" action="<?php echo $_smarty_tpl->getVariable('url')->value;?>
" name="form1" id="form1">
<input type="hidden" id="step" name="step" value="2" />
<input type="hidden" name="pid" value="<?php echo $_smarty_tpl->getVariable('pid')->value;?>
" />
<div class="so_main">
  <div class="page_tit_1"><?php echo $_smarty_tpl->getVariable('PAGETITLE')->value;?>
</div>
  
  
  <div style="font-size: 28px;line-height: 60px;text-align: center;margin-top: 50px;">请确认车辆是否已经加满油？</div>
  <div style="font-size: 14px;line-height: 40px;text-align: center;color: #f00;">如果未加满就还车，将面临公司的巨额罚款！！！</div>
  <div style="font-size: 18px;line-height: 40px;text-align: center;margin-bottom: 50px;">
  <input type="radio" name="back_note" value="2"/>已加满&nbsp;&nbsp;
  <input type="radio" name="back_note" value="1" />未加满
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
	var sel=$('input[name="back_note"]:checked ').val();
	if(typeof(sel)=="undefined"){
		alert("请确认车辆是否已加满油！");
		return false;
	}
	if (sel=="2"){
		$("#form1").submit();
	}else{
		alert("请加满油后再还车！");
		window.parent.window.jBox.close();
	}
	
}
function closebox(){
	window.parent.window.jBox.close();
}
</script>
<!-->
</body>
</html>