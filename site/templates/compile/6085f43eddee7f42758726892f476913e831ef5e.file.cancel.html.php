<?php /* Smarty version Smarty-3.0.4, created on 2017-04-24 15:10:06
         compiled from "D:\web\site\templates\elsker\operator/machine/cancel.html" */ ?>
<?php /*%%SmartyHeaderCode:2277258fda4ced88dc3-09203364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6085f43eddee7f42758726892f476913e831ef5e' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/machine/cancel.html',
      1 => 1493017302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2277258fda4ced88dc3-09203364',
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
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../js/check_form.js"></script>

<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit">出售</div>  
  <form method="post" action="list.php" onsubmit="return check()" name="form1" >
  <div class="form2">
	  <dl class="lineD">
	    <dt>车牌号：</dt>
	    <dd>苏D<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>车辆颜色：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_color']) ? $_smarty_tpl->getVariable('list')->value['car_color'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>车型：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_model']) ? $_smarty_tpl->getVariable('list')->value['car_model'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>发动机号：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_motor']) ? $_smarty_tpl->getVariable('list')->value['car_motor'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>车辆识别号：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_frame']) ? $_smarty_tpl->getVariable('list')->value['car_frame'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>座位数：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_seat']) ? $_smarty_tpl->getVariable('list')->value['car_seat'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>入账日期：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_saleDate']) ? $_smarty_tpl->getVariable('list')->value['car_saleDate'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>开票价格：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_amount']) ? $_smarty_tpl->getVariable('list')->value['car_amount'] : null);?>
元</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>实际购买车价：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_infactamount']) ? $_smarty_tpl->getVariable('list')->value['car_infactamount'] : null);?>
元</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>购置税：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_buytax']) ? $_smarty_tpl->getVariable('list')->value['car_buytax'] : null);?>
元</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>车辆注册日期：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_cartDate']) ? $_smarty_tpl->getVariable('list')->value['car_cartDate'] : null);?>
</dd>
	  </dl>
	  <?php if ((isset($_smarty_tpl->getVariable('list')->value['car_oilcard']) ? $_smarty_tpl->getVariable('list')->value['car_oilcard'] : null)==1){?>
	  <dl class="lineD">
	    <dt>绑定油卡：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['card_no']) ? $_smarty_tpl->getVariable('list')->value['card_no'] : null);?>
</dd>
	  </dl>
	  <?php }?>
	  <dl class="lineD">
	    <dt>备注：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_remarks']) ? $_smarty_tpl->getVariable('list')->value['car_remarks'] : null);?>
</dd>
	  </dl>
	  <?php if ($_smarty_tpl->getVariable('task')->value=="delete"){?>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>出售日期：</dt>
	    <dd><input type="text" name="car_cancelDate" id="car_cancelDate" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_cancelDate']) ? $_smarty_tpl->getVariable('list')->value['car_cancelDate'] : null);?>
" onclick="calendar.show(this);" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>出售价格：</dt>
	    <dd><input type="text" name="car_cancelPrice" id="car_cancelPrice" size="6" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_cancelPrice']) ? $_smarty_tpl->getVariable('list')->value['car_cancelPrice'] : null);?>
" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>处理方式：</dt>
	    <dd><textarea name="car_canceldeal" cols="40" rows="5"><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_canceldeal']) ? $_smarty_tpl->getVariable('list')->value['car_canceldeal'] : null);?>
</textarea></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>赔款说明：</dt>
	    <dd><textarea name="car_cancelrepara" cols="40" rows="5"><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_cancelrepara']) ? $_smarty_tpl->getVariable('list')->value['car_cancelrepara'] : null);?>
</textarea></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>入账情况：</dt>
	    <dd><textarea name="car_cancelaccount" cols="40" rows="5"><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_cancelaccount']) ? $_smarty_tpl->getVariable('list')->value['car_cancelaccount'] : null);?>
</textarea></dd>
	  </dl>
	  <?php }?>
	  <?php if ($_smarty_tpl->getVariable('task')->value=="changeacc"){?>
	  <dl class="lineD">
	    <dt>出售日期：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_cancelDate']) ? $_smarty_tpl->getVariable('list')->value['car_cancelDate'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>出售价格：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_cancelPrice']) ? $_smarty_tpl->getVariable('list')->value['car_cancelPrice'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>处理方式：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_canceldeal']) ? $_smarty_tpl->getVariable('list')->value['car_canceldeal'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>赔款说明：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_cancelrepara']) ? $_smarty_tpl->getVariable('list')->value['car_cancelrepara'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>入账情况：</dt>
	    <dd><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_cancelaccount']) ? $_smarty_tpl->getVariable('list')->value['car_cancelaccount'] : null);?>
</dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>过户日期：</dt>
	    <dd><input type="text" name="car_changeDate" id="car_changeDate" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_changeDate']) ? $_smarty_tpl->getVariable('list')->value['car_changeDate'] : null);?>
" onclick="calendar.show(this);" /></dd>
	  </dl>
	  <?php }?>
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" /><b> 注：<span class="red">*</span>为必填项</b>
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_id']) ? $_smarty_tpl->getVariable('list')->value['car_id'] : null);?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  <input type="hidden" name="car_num" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
" />
  </form>
</div>
<!-->
<script>
function check(){
	if ($("#car_cancelDate").val()==""){
		alert("请先选择出售日期！");
		return false;
	}
	if ($("#car_cancelPrice").val()==""){
		alert("请填写出售价格！");
		return false;
	}
	if ($("#car_changeDate").val()==""){
		alert("请先选择过户日期！");
		return false;
	}
}
</script>
<!-->
</body>
</html>