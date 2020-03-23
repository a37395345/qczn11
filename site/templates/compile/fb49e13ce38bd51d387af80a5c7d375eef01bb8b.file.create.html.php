<?php /* Smarty version Smarty-3.0.4, created on 2019-11-18 14:18:18
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/sales/contract/create.html" */ ?>
<?php /*%%SmartyHeaderCode:22355dd237aa79da93-00980499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb49e13ce38bd51d387af80a5c7d375eef01bb8b' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/sales/contract/create.html',
      1 => 1572859142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22355dd237aa79da93-00980499',
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
<script type="text/javascript" src="../../../../js/diyUpload/diyUpload.js?a=5"></script>
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
  <form method="post" action="insert.php" onsubmit="return contract_check(this)" name="form1" enctype="multipart/form-data">
  <div class="form2">
	  	
		<dl class="lineD">
	      <dt><span class="redstar">*</span>客户名称：</dt>
	      <dd>
	        <select name="paiche_name2" id="paiche_name2">
		                  <option value="0">请选择</option>
		                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('clientlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
		                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_id']) ? $_smarty_tpl->tpl_vars['rows']->value['client_id'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['contract_clientid']) ? $_smarty_tpl->getVariable('list')->value['contract_clientid'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['client_id']) ? $_smarty_tpl->tpl_vars['rows']->value['client_id'] : null)){?>selected<?php }?> ><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_name']) ? $_smarty_tpl->tpl_vars['rows']->value['client_name'] : null);?>
</option>
		                  <?php }} ?>
		    </select><input type="text" id="search_key" size="10" placeholder="快速检索" />
		  </dd>
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
		    	<input type="radio" name="contract_busitype" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['item_paicheType']) ? $_smarty_tpl->tpl_vars['rows']->value['item_paicheType'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['contract_busitype']) ? $_smarty_tpl->getVariable('list')->value['contract_busitype'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['item_paicheType']) ? $_smarty_tpl->tpl_vars['rows']->value['item_paicheType'] : null)){?>checked<?php }?> /><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['item_name']) ? $_smarty_tpl->tpl_vars['rows']->value['item_name'] : null);?>
&nbsp;&nbsp;
	           <?php }} ?>
	        </dd>
		</dl>
		<dl class="lineD">
	      <dt><span class="redstar">*</span>合同生效日期：</dt>
	      <dd>
	        <input type="text" name="contract_startdate" id="contract_startdate" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_startdate']) ? $_smarty_tpl->getVariable('list')->value['contract_startdate'] : null);?>
" onClick="calendar.show(this);" readonly="readonly" />
	      </dd>
	    </dl>
	    <dl class="lineD">
	      <dt><span class="redstar">*</span>合同截至日期：</dt>
	      <dd>
	        <input type="text" name="contract_enddate" id="contract_enddate" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_enddate']) ? $_smarty_tpl->getVariable('list')->value['contract_enddate'] : null);?>
" onClick="calendar.show(this);" readonly="readonly" />
	      </dd>
	    </dl>
	    <dl class="lineD">
		    <dt><span class="redstar">*</span>业务员：</dt>
		    <dd><input type="text" name="paicheCounterMan" id="paicheCounterMan" size="16" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['yewuyuan']) ? $_smarty_tpl->getVariable('list')->value['yewuyuan'] : null);?>
" />
		    <input type="hidden" name="paicheCounterMan2" id="paicheCounterMan2" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_CounterMan']) ? $_smarty_tpl->getVariable('list')->value['contract_CounterMan'] : null);?>
" />
		    <a href="javascript:select_emp();"><img src="../../../../css/driver.gif" width="16" height="15" class="peoplePic" /></a></dd>
		</dl>
	    <dl class="lineD">
		  <dt>合同内容概述：</dt>
		  <dd><textarea name="contract_content" cols="90" rows="5"><?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_content']) ? $_smarty_tpl->getVariable('list')->value['contract_content'] : null);?>
</textarea></dd>
		</dl>
		<dl class="lineD">
	      <dt>合同扫描件：</dt>
	      <dd>
	      	<div id="box">
				<div id="test" ></div>
			</div>
	     
	        <?php if ($_smarty_tpl->getVariable('task')->value=='update'&&(isset($_smarty_tpl->getVariable('list')->value['contract_imglist']) ? $_smarty_tpl->getVariable('list')->value['contract_imglist'] : null)){?>
	        <br />
	        <div>
	        <ul>
	        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('list')->value['contract_imglist']) ? $_smarty_tpl->getVariable('list')->value['contract_imglist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
	         <li style="float:left;text-align:center;"><a href="picture.php?contract_id=<?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_id']) ? $_smarty_tpl->getVariable('list')->value['contract_id'] : null);?>
&nowserial=<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
" title="点击查看原图" target="_blank"><img src="../../../../thumb/<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['images']) ? $_smarty_tpl->tpl_vars['rows']->value['images'] : null);?>
" width="100" height="100" /></a><input type="checkbox" name="delimg[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" />删除<br /><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
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
  
  <input type="hidden" name="uid" id="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['contract_id']) ? $_smarty_tpl->getVariable('list')->value['contract_id'] : null);?>
" />
  <input type="hidden" name="task" id="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
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
	    contractid:cid
	}
});

var nameIsOut=true;//初始化值，便于判断用户是否在DIV以外点击，搜索公司名称时使用
document.onmousedown=function(){
	if(nameIsOut==true){
		$('#comul').css('display','none');
	}
}
$(document).ready(function(){
    $("#search_key").live('input propertychange',function(){
        var aa=$("#search_key").val();
        $("#paiche_name2 option").each(function (){  
            var txt = $(this).text();  
            if(txt.toLowerCase().indexOf(aa) >-1){  
                $(this).attr("selected",true);
                
                return false;
            }
         });
	});
});
function changeNameId(name,id,linker,phone,money){
	$("#paiche_name").val(name);
	$("#paiche_name2").val(id);
	$('#comul').css('display','none');
}
function showCom(){
	if($('#comul').css("display")=="none"){
		$('#comul').css('display','block');
	}else{
		$('#comul').css('display','none');
	}
}
function select_emp(){
	demo_iframe('../../business/selectemp.php?sel_type=e','选择业务员',650,380,'login_js');
}

</script>
<!-->
</body>
</html>