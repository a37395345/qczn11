<?php /* Smarty version Smarty-3.0.4, created on 2019-09-30 14:25:26
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/sales/consult/create.html" */ ?>
<?php /*%%SmartyHeaderCode:17715284555d919fd6b93f80-72703699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7354abe8a2a1c45f698c95d96fe8439d7b61d4de' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/sales/consult/create.html',
      1 => 1569749250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17715284555d919fd6b93f80-72703699',
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
<link rel="stylesheet" type="text/css" href="../../../../css/webuploader.css">
<link rel="stylesheet" type="text/css" href="../../../../css/diyUpload.css">
<script src="../../../../jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<script type="text/javascript" src="../../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../../js/check_form.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
<script type="text/javascript" src="../../../../js/diyUpload/webuploader.html5only.min.js"></script>
<script type="text/javascript" src="../../../../js/diyUpload/diyUpload.js"></script>
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
#box{width:840px; min-height:300px; background:#FF9}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit"><?php if ($_smarty_tpl->getVariable('task')->value=="insert"){?>添加<?php }elseif($_smarty_tpl->getVariable('task')->value=="update"){?>编辑<?php }?></div>  
  <form method="post" action="insert.php" onsubmit="return consult_check(this)" name="form1" enctype="multipart/form-data">
  <div class="form2">
	  	<dl class="lineD">
	      <dt>咨询时间：</dt>
	      <dd>
	        <input type="text" name="consult_addtime" size="12" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['consult_addtime']) ? $_smarty_tpl->getVariable('list')->value['consult_addtime'] : null);?>
" onClick="calendar.show(this);"/>
	      </dd>
	    </dl>
	  	<dl class="lineD">
		  <dt><span class="redstar">*</span>咨询单位：</dt>
		  <dd>
	        <input type="text" name="consult_linker" id="consult_linker" size="26" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['consult_linker']) ? $_smarty_tpl->getVariable('list')->value['consult_linker'] : null);?>
" />
		  </dd>
		</dl>
	  	<dl class="lineD">
		  <dt><span class="redstar">*</span>联系人：</dt>
		  <dd><input type="text" name="consult_linkerMan" id="consult_linkerMan" size="8"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['consult_linkerMan']) ? $_smarty_tpl->getVariable('list')->value['consult_linkerMan'] : null);?>
"/>&nbsp;&nbsp;联系电话：<input type="text" name="consult_linkerPhone" id="consult_linkerPhone" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['consult_linkerPhone']) ? $_smarty_tpl->getVariable('list')->value['consult_linkerPhone'] : null);?>
"/></dd>
		</dl>
		<dl class="lineD">
		    <dt>用车类型：</dt>
		    <dd><?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('category')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
		    	<input type="radio" name="consult_busitype" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['item_paicheType']) ? $_smarty_tpl->tpl_vars['rows']->value['item_paicheType'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['consult_busitype']) ? $_smarty_tpl->getVariable('list')->value['consult_busitype'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['item_paicheType']) ? $_smarty_tpl->tpl_vars['rows']->value['item_paicheType'] : null)){?>checked<?php }?> /><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['item_name']) ? $_smarty_tpl->tpl_vars['rows']->value['item_name'] : null);?>
&nbsp;&nbsp;
	           <?php }} ?>
	        </dd>
		</dl>
		<dl class="lineD">
	    	<dt>需求车型：</dt>
	    	<dd><input type="radio" name="consult_requestCar" value="0" <?php if ((isset($_smarty_tpl->getVariable('list')->value['consult_requestCar']) ? $_smarty_tpl->getVariable('list')->value['consult_requestCar'] : null)==0){?>checked<?php }?>/>小车<input type="radio" name="consult_requestCar" value="1" <?php if ((isset($_smarty_tpl->getVariable('list')->value['consult_requestCar']) ? $_smarty_tpl->getVariable('list')->value['consult_requestCar'] : null)==1){?>checked<?php }?>/>商务车<input type="radio" name="consult_requestCar" value="2" <?php if ((isset($_smarty_tpl->getVariable('list')->value['consult_requestCar']) ? $_smarty_tpl->getVariable('list')->value['consult_requestCar'] : null)==2){?>checked<?php }?>/>客车</dd>
	  	</dl>
	  	<dl class="lineD">
		    <dt>路程：</dt>
		    <dd><input type="radio" name="consult_route" value="单" <?php if ((isset($_smarty_tpl->getVariable('list')->value['consult_route']) ? $_smarty_tpl->getVariable('list')->value['consult_route'] : null)=="单"||(isset($_smarty_tpl->getVariable('list')->value['consult_route']) ? $_smarty_tpl->getVariable('list')->value['consult_route'] : null)==''){?>checked<?php }?> />单程&nbsp;&nbsp;<input type="radio" name="consult_route" value="双" <?php if ((isset($_smarty_tpl->getVariable('list')->value['consult_route']) ? $_smarty_tpl->getVariable('list')->value['consult_route'] : null)=="双"){?>checked<?php }?> />双程</dd>
		</dl>
	  	<dl class="lineD">
		    <dt>开车线路：</dt>
		    <dd><textarea name="consult_line" cols="40" rows="5"><?php echo (isset($_smarty_tpl->getVariable('list')->value['consult_line']) ? $_smarty_tpl->getVariable('list')->value['consult_line'] : null);?>
</textarea></dd>
		</dl>
		<dl class="lineD">
		  <dt>预计用车时间：</dt>
		  <dd><input type="text" name="consult_times" id="consult_times" size="18"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['consult_times']) ? $_smarty_tpl->getVariable('list')->value['consult_times'] : null);?>
"/></dd>
		</dl>
		<!-- 
		<dl class="lineD">
	      <dt>预计用车时间：</dt>
	      <dd>
	        <input type="text" name="consult_startDate" id="consult_startDate" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['consult_startDate']) ? $_smarty_tpl->getVariable('list')->value['consult_startDate'] : null);?>
" onClick="calendar.show(this);" readonly="readonly" />
	      ~~
	        <input type="text" name="consult_endDate" id="consult_endDate" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['consult_endDate']) ? $_smarty_tpl->getVariable('list')->value['consult_endDate'] : null);?>
" onClick="calendar.show(this);" readonly="readonly" />
	      </dd>
	    </dl> -->
		<dl class="lineD">
		  <dt>报价情况：</dt>
		  <dd><textarea name="consult_price" cols="60" rows="3"><?php echo (isset($_smarty_tpl->getVariable('list')->value['consult_price']) ? $_smarty_tpl->getVariable('list')->value['consult_price'] : null);?>
</textarea></dd>
		</dl>
		<dl class="lineD">
		    <dt><span class="redstar">*</span>接待人：</dt>
		    <dd><input type="text" name="paicheCounterMan" id="paicheCounterMan" size="16" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['yewuyuan']) ? $_smarty_tpl->getVariable('list')->value['yewuyuan'] : null);?>
" />
		    <input type="hidden" name="paicheCounterMan2" id="paicheCounterMan2" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['consult_CounterMan']) ? $_smarty_tpl->getVariable('list')->value['consult_CounterMan'] : null);?>
" />
		    <a href="javascript:select_emp();"><img src="../../../../css/driver.gif" width="16" height="15" class="peoplePic" /></a></dd>
		</dl>
	    <dl class="lineD">
		  <dt>备注：</dt>
		  <dd><textarea name="consult_Remarks" cols="60" rows="3"><?php echo (isset($_smarty_tpl->getVariable('list')->value['consult_Remarks']) ? $_smarty_tpl->getVariable('list')->value['consult_Remarks'] : null);?>
</textarea></dd>
		</dl>
		<dl class="lineD">
	      <dt>相关附件：</dt>
	      <dd>
	      	<div id="box">
				<div id="test" ></div>
			</div>
	     
	        <?php if ($_smarty_tpl->getVariable('task')->value=='update'&&(isset($_smarty_tpl->getVariable('list')->value['consulting_imglist']) ? $_smarty_tpl->getVariable('list')->value['consulting_imglist'] : null)){?>
	        <br />
	        <div>
	        <ul>
	        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('list')->value['consulting_imglist']) ? $_smarty_tpl->getVariable('list')->value['consulting_imglist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
	         <li style="float:left;text-align:center;"><a href="picture.php?consult_id=<?php echo (isset($_smarty_tpl->getVariable('list')->value['consult_id']) ? $_smarty_tpl->getVariable('list')->value['consult_id'] : null);?>
&nowserial=<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
" title="点击查看原图" target="_blank"><img src="../../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['images']) ? $_smarty_tpl->tpl_vars['rows']->value['images'] : null);?>
" width="100" height="100" /></a><br /><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</li>
	        <?php }} ?>
	        
	        </ul>
	        </div>
	        <?php }?> 
	      </dd>
	   </dl>
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" /><b> 注：<span class="red">*</span>为必填项</b>
    </div>
  </div>
  <input type="hidden" name="uid" id="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['consult_id']) ? $_smarty_tpl->getVariable('list')->value['consult_id'] : null);?>
" />
  <input type="hidden" name="consult_id" value="<?php echo $_smarty_tpl->getVariable('consult_id')->value;?>
" />
  <input type="hidden" name="task" id="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  <input type="hidden" name="search_status" value="<?php echo $_smarty_tpl->getVariable('search_status')->value;?>
" />
  </form>
</div>
<!-->
<script>
var cid=$("#uid").val();
$('#test').diyUpload({
	url:'../../../../site/includes/fileupload.php?id=2222',
	success:function( data ) {
	    //alert(data.jsonrpc);
		console.info( data );
	},
	error:function( err ) {
		console.info( err );	
	},
	formData:{
		consultid:cid
	},
	buttonText : '点击选择文件',
	accept: {
		title:"Images",
		extensions:"gif,jpg,jpeg,bmp,png,doc,docx,xls,xlsx,pdf,txt",
		mimeTypes:"image/*,application/msword,application/vnd.ms-excel,application/pdf,text/plain"
	}
});
function select_emp(){
	demo_iframe('../../business/selectemp.php?sel_type=e','选择业务员',650,380,'login_js');
}

</script>
<!-->
</body>
</html>