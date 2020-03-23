<?php /* Smarty version Smarty-3.0.4, created on 2019-10-07 08:52:18
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/navi/modips.html" */ ?>
<?php /*%%SmartyHeaderCode:11570182755d9a8c42566165-27334670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06c0e79be4b00b1002029db649394367a6f126e5' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/navi/modips.html',
      1 => 1569749236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11570182755d9a8c42566165-27334670',
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
<script type="text/javascript" src="../../../js/jquery-2.1.4.min.js"></script>
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
  
  <form method="post" action="modips.php" onsubmit="return check()">
    
  <div class="form2">
     <dl class="lineD">
      <dt>当前用户：</dt>
      <dd><?php echo $_smarty_tpl->getVariable('truename')->value;?>
</dd>
    </dl>

    <dl class="lineD">
      <dt>原密码：</dt>
      <dd>
        <input type="password" name="oldpass" id="oldpass" /> *
	  </dd>
    </dl>
	 <dl class="lineD">
      <dt>新密码：</dt>
      <dd>
        <input type="password" name="newpass" id="newpass" />
	  </dd>
    </dl>
	
     <dl class="lineD">
      <dt>确认新密码：</dt>
      <dd>    <input type="password" name="connewpass" id="connewpass"/>
      </dd>
    </dl>
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" />
    </div>
  </div>
  <input type="hidden" name="aid" value="<?php echo (isset($_smarty_tpl->getVariable('user')->value['user_id']) ? $_smarty_tpl->getVariable('user')->value['user_id'] : null);?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  </form>
</div>
<!-->
<script type="text/javascript">
var strPS="";
	function check(){
	    if ($("#oldpass").val()==""){
			alert("请输入原密码！");
			$("#oldpass").focus();
			return false;
	    }
	    if ($("#newpass").val()==""){
			alert("请输入新密码！");
			$("#newpass").focus();
			return false;
	    }else{
	    	strPS=$("#newpass").val();
	    	if (/[^a-z]/gi.test(strPS) && /[^0-9]/gi.test(strPS) && strPS.length>=6){
	    	}else{
		        alert("密码只能由6位以上的数字和字母组成");
		        $("#newpass").focus();
				return false;
		    }
	    }
	    
	    if ($("#connewpass").val()==""){
			alert("请再次输入新密码！");
			$("#connewpass").focus();
			return false;
	    }
	    if ($("#connewpass").val()!=$("#newpass").val()){
			alert("两次输入的密码不一致！");
			$("#connewpass").focus();
			return false;
	    }
	}
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
</script>
<!-->
</body>
</html>