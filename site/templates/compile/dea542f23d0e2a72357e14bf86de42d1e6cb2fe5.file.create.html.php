<?php /* Smarty version Smarty-3.0.4, created on 2015-11-13 17:17:37
         compiled from "D:\web\site\templates\elsker\operator/finance/leave/create.html" */ ?>
<?php /*%%SmartyHeaderCode:78365645aab1c7cd36-30766599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dea542f23d0e2a72357e14bf86de42d1e6cb2fe5' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/finance/leave/create.html',
      1 => 1447233604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78365645aab1c7cd36-30766599',
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
<link href="../../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<script type="text/javascript" src="../../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<script type="text/javascript" src="../../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../../js/check_form.js"></script>
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
  <div class="page_tit"><?php if ($_smarty_tpl->getVariable('task')->value=="insert"){?>添加<?php }elseif($_smarty_tpl->getVariable('task')->value=="update"){?>编辑<?php }else{ ?>审核<?php }?></div>  
  <form method="post" action="insert.php" onsubmit="return leave_check(this)" name="form1">
  <div class="form2">
		<?php if ($_smarty_tpl->getVariable('task')->value=="check_accept"){?>
		<dl class="lineD">
		  <dt>请假人：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['emp_name']) ? $_smarty_tpl->getVariable('list')->value['emp_name'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>请假日期：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['leave_date']) ? $_smarty_tpl->getVariable('list')->value['leave_date'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>请假类型：</dt>
		  <dd><?php if ((isset($_smarty_tpl->getVariable('list')->value['leave_item']) ? $_smarty_tpl->getVariable('list')->value['leave_item'] : null)==1){?>病假<?php }else{ ?>事假<?php }?></dd>
		</dl>
		<dl class="lineD">
		  <dt>请假天数：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['leave_day']) ? $_smarty_tpl->getVariable('list')->value['leave_day'] : null);?>
天</dd>
		</dl>
	  	<dl class="lineD">
		  <dt>请假扣款：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['leave_money']) ? $_smarty_tpl->getVariable('list')->value['leave_money'] : null);?>
元</dd>
		</dl>
		<dl class="lineD">
		  <dt>备注：</dt>
		  <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['leave_remarks']) ? $_smarty_tpl->getVariable('list')->value['leave_remarks'] : null);?>
</dd>
		</dl>
		<dl class="lineD">
		  <dt>审核结果：</dt>
		  <dd><input type="radio" value="1" name="leave_isAgree" checked/>通过 <input type="radio" value="-1" name="leave_isAgree"/>不通过</dd>
		</dl>
		<dl class="lineD">
		  <dt>审核意见：</dt>
		  <dd><textarea name="leave_isAgreeRemarks" id="leave_isAgreeRemarks" cols="40" rows="4"></textarea></dd>
		</dl>
	  	<?php }else{ ?>
	  	<dl class="lineD">
		  <dt><span class="redstar">*</span>请假人：</dt>
		  <dd><input type="text" name="paicheDriver" id="paicheDriver" size="18" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['emp_name']) ? $_smarty_tpl->getVariable('list')->value['emp_name'] : null);?>
" />
			         关键字：<input type="text" name="paicheDriverKey" id="paicheDriverKey" size="10" />
			    <input type="hidden" name="paicheDriver2" id="paicheDriver2" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['emp_id']) ? $_smarty_tpl->getVariable('list')->value['emp_id'] : null);?>
" />
			    <a href="javascript:select_driver();"><img src="../../../../css/driver.gif" height="15" class="peoplePic" /></a>
		  </dd>
		</dl>
		<dl class="lineD">
		  <dt><span class="redstar">*</span>请假日期：</dt>
		  <dd><input id="leave_date" type="text" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['leave_date']) ? $_smarty_tpl->getVariable('list')->value['leave_date'] : null);?>
" name="leave_date" size="16" onClick="calendar.show(this);" readonly="readonly" /></dd>
		</dl>
		<dl class="lineD">
            <dt>请假类型：</dt>
            <dd>
            <input type="radio" value="0" name="leave_item" <?php if ((isset($_smarty_tpl->getVariable('list')->value['leave_item']) ? $_smarty_tpl->getVariable('list')->value['leave_item'] : null)==0||$_smarty_tpl->getVariable('item')->value==0){?>checked<?php }?>/>事假
            <input type="radio" value="1" name="leave_item" <?php if ((isset($_smarty_tpl->getVariable('list')->value['leave_item']) ? $_smarty_tpl->getVariable('list')->value['leave_item'] : null)==1||$_smarty_tpl->getVariable('item')->value==1){?>checked<?php }?>/>病假
            </dd>
        </dl>
		<dl class="lineD">
		  <dt><span class="redstar">*</span>请假天数：</dt>
		  <dd><input type="text" name="leave_day" id="leave_day" size="3" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['leave_day']) ? $_smarty_tpl->getVariable('list')->value['leave_day'] : null);?>
" />天</dd>
		</dl>
		<dl class="lineD">
		  <dt>请假扣款：</dt>
		  <dd><input type="text" name="leave_money" id="leave_money" size="8" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['leave_money']) ? $_smarty_tpl->getVariable('list')->value['leave_money'] : null);?>
" />元</dd>
		</dl>
		<dl class="lineD">
		  <dt>备注：</dt>
		  <dd><textarea name="leave_remarks" id="leave_remarks" cols="60" rows="3"><?php echo (isset($_smarty_tpl->getVariable('list')->value['leave_remarks']) ? $_smarty_tpl->getVariable('list')->value['leave_remarks'] : null);?>
</textarea></dd>
		</dl>
	    <?php }?>
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" /><b> 注：<span class="red">*</span>为必填项</b>
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['leave_id']) ? $_smarty_tpl->getVariable('list')->value['leave_id'] : null);?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  </form>
</div>
<!-->
<script>

function select_driver(){
	var key=$("#paicheDriverKey").val();
	
	demo_iframe('../../business/selectemp.php?sel_type=d&item=2'+'&key='+key,'选择员工',650,380,'login_js');
}

</script>
<!-->
</body>
</html>