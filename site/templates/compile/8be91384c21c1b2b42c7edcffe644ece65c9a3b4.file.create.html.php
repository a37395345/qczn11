<?php /* Smarty version Smarty-3.0.4, created on 2016-11-15 14:00:10
         compiled from "D:\web\site\templates\elsker\operator/machine/create.html" */ ?>
<?php /*%%SmartyHeaderCode:26336582aa46a47c013-02307377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8be91384c21c1b2b42c7edcffe644ece65c9a3b4' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/machine/create.html',
      1 => 1479115832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26336582aa46a47c013-02307377',
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
  <div class="page_tit">编辑</div>  
  <form method="post" action="insert.php" onsubmit="return car_check(this)" name="form1" enctype="multipart/form-data">
  <div class="form2">
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>车牌号：</dt>
	    <dd>苏D&nbsp;<input type="text" name="car_num" id="car_num" size="12" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_num']) ? $_smarty_tpl->getVariable('list')->value['car_num'] : null);?>
" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>车辆颜色：</dt>
	    <dd><input type="text" name="car_color" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_color']) ? $_smarty_tpl->getVariable('list')->value['car_color'] : null);?>
" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>车辆品牌：</dt>
	    <dd><input type="text" name="car_brand" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_brand']) ? $_smarty_tpl->getVariable('list')->value['car_brand'] : null);?>
"/></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>车辆种类：</dt>
	    <dd><input type="text" name="car_type" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_type']) ? $_smarty_tpl->getVariable('list')->value['car_type'] : null);?>
"/></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>车型：</dt>
	    <dd><input type="text" name="car_model" size="26"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_model']) ? $_smarty_tpl->getVariable('list')->value['car_model'] : null);?>
"/></dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>发动机号：</dt>
	    <dd><input type="text" name="car_motor" id="car_motor" size="26"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_motor']) ? $_smarty_tpl->getVariable('list')->value['car_motor'] : null);?>
"/></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>车辆识别号：</dt>
	    <dd><input type="text" name="car_frame" size="26" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_frame']) ? $_smarty_tpl->getVariable('list')->value['car_frame'] : null);?>
" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>座位数：</dt>
	    <dd><input type="text" name="car_seat" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_seat']) ? $_smarty_tpl->getVariable('list')->value['car_seat'] : null);?>
" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>入账日期：</dt>
	    <dd><input type="text" name="car_saleDate" id="car_saleDate" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_saleDate']) ? $_smarty_tpl->getVariable('list')->value['car_saleDate'] : null);?>
" onclick="calendar.show(this);" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>开票价格：</dt>
	    <dd><input type="text" name="car_amount" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_amount']) ? $_smarty_tpl->getVariable('list')->value['car_amount'] : null);?>
"/>元</dd>
	  </dl>
	  <dl class="lineD">
	    <dt>购置税：</dt>
	    <dd><input type="text" name="car_buytax" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_buytax']) ? $_smarty_tpl->getVariable('list')->value['car_buytax'] : null);?>
"/>元</dd>
	  </dl>
	  <dl class="lineD">
	    <dt><span class="redstar">*</span>车辆注册日期：</dt>
	    <dd><input type="text" name="car_cartDate" id="car_cartDate" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_cartDate']) ? $_smarty_tpl->getVariable('list')->value['car_cartDate'] : null);?>
" onclick="calendar.show(this);" /></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>备注：</dt>
	    <dd><textarea name="car_remarks" cols="40" rows="5"><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_remarks']) ? $_smarty_tpl->getVariable('list')->value['car_remarks'] : null);?>
</textarea></dd>
	  </dl>
	  <dl class="lineD">
	    <dt>是否绑定油卡：</dt>
	    <dd><input type='checkbox' name='car_oilcard' <?php if ((isset($_smarty_tpl->getVariable('list')->value['car_oilcard']) ? $_smarty_tpl->getVariable('list')->value['car_oilcard'] : null)==1){?>checked="checked"<?php }?> value="1" /></dd>
	  </dl>
	  <?php if ((isset($_smarty_tpl->getVariable('list')->value['car_status']) ? $_smarty_tpl->getVariable('list')->value['car_status'] : null)=="2"||(isset($_smarty_tpl->getVariable('list')->value['car_status']) ? $_smarty_tpl->getVariable('list')->value['car_status'] : null)=="3"){?>
	  <dl class="lineD">
	    <dt>状态：</dt>
	    <dd><?php if ((isset($_smarty_tpl->getVariable('list')->value['car_status']) ? $_smarty_tpl->getVariable('list')->value['car_status'] : null)=="2"){?>维修<?php }?><?php if ((isset($_smarty_tpl->getVariable('list')->value['car_status']) ? $_smarty_tpl->getVariable('list')->value['car_status'] : null)=="3"){?>报废<?php }?></dd>
	  </dl>
	  <?php }?>
	  <dl class="lineD">
	      <dt>车辆首图照片：</dt>
	      <dd><input type="file" name="images" value=""/><span class="redstar">注：图片像素200*150，大小控制在50k以内</span>
	        <?php if ((isset($_smarty_tpl->getVariable('list')->value['car_image']) ? $_smarty_tpl->getVariable('list')->value['car_image'] : null)){?><br /><img src="../../../thumb/<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_image']) ? $_smarty_tpl->getVariable('list')->value['car_image'] : null);?>
" width="200" height="150" /><?php }?>
	        <input type="hidden" name="oldimages" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_image']) ? $_smarty_tpl->getVariable('list')->value['car_image'] : null);?>
"/>
	      </dd>
	  </dl>
	  <dl class="lineD">
	      <dt>车辆详细照片：</dt>
	      <dd>照片一<input type="file" name="images1" value=""/><br />照片二<input type="file" name="images2" value=""/><br />
	        	照片三<input type="file" name="images3" value=""/><br />照片四<input type="file" name="images4" value=""/><br />
	        	照片五<input type="file" name="images5" value=""/><br />照片六<input type="file" name="images6" value=""/><br />
	        	照片七<input type="file" name="images7" value=""/><br />照片八<input type="file" name="images8" value=""/>
	        <?php if ($_smarty_tpl->getVariable('task')->value=='update'&&(isset($_smarty_tpl->getVariable('list')->value['car_imglist']) ? $_smarty_tpl->getVariable('list')->value['car_imglist'] : null)){?>
	        <br />
	        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('list')->value['car_imglist']) ? $_smarty_tpl->getVariable('list')->value['car_imglist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
	         <a href="picture.php?car_id=<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_id']) ? $_smarty_tpl->getVariable('list')->value['car_id'] : null);?>
&nowserial=<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
" title="点击查看原图" target="_blank"><img src="../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['images']) ? $_smarty_tpl->tpl_vars['rows']->value['images'] : null);?>
" width="100" height="100" /></a>
	         <input type="checkbox" name="delimg[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" />删除图片
	        <?php }} ?>
	        <?php }?> 
	      </dd>
	  </dl>
      <dl class="lineD">
	    <dt>车辆报价：</dt>
	    <dd><textarea name="car_price" cols="40" rows="5"><?php echo (isset($_smarty_tpl->getVariable('list')->value['car_price']) ? $_smarty_tpl->getVariable('list')->value['car_price'] : null);?>
</textarea></dd>
	  </dl>
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" /><b> 注：<span class="red">*</span>为必填项</b>
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_id']) ? $_smarty_tpl->getVariable('list')->value['car_id'] : null);?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  </form>
</div>

</body>
</html>