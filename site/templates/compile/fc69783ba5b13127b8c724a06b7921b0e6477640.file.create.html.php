<?php /* Smarty version Smarty-3.0.4, created on 2019-06-05 19:18:24
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/business/create.html" */ ?>
<?php /*%%SmartyHeaderCode:221105cf7a500d6e8f5-03524584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc69783ba5b13127b8c724a06b7921b0e6477640' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/business/create.html',
      1 => 1559704554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '221105cf7a500d6e8f5-03524584',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=9;IE=8;IE=7;IE=EDGE">
<title>管理后台</title>
<link href="../../../css/style.css" rel="stylesheet" type="text/css">
<link href="../../../css/box.css" rel="stylesheet" type="text/css" />
<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<link href="../../../css/jquery.editable-select.min.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../js/check_form.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
<script type="text/javascript" src="../../../js/jquery.editable-select.min.js"></script>
    
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style>
<!-->
<script type="text/javascript">
var i=2;
setInterval("window_onload()",300);

function beginread_onclick(){
	i=0;
	rdcard.ReadCard2();
	if (rdcard.bHaveCard){
		document.getElementsByName("paiche_linker")[0].value=rdcard.NameS;
		document.getElementsByName("paiche_linkerNum")[0].value=rdcard.CardNo;
		document.getElementsByName("paiche_linkerAdd")[0].value=rdcard.Address;
		getPitcure(rdcard.CardNo,rdcard.JPGBuffer,1);
		rdcard.bHaveCard=false;
	}
}
function beginread_onclick2(){
	i=1;
	rdcard.ReadCard2();
	if (rdcard.bHaveCard){
		document.getElementsByName("paiche_promier")[0].value=rdcard.NameS;
		document.getElementsByName("paiche_promierNum")[0].value=rdcard.CardNo;
		document.getElementsByName("paiche_promierAdd")[0].value=rdcard.Address;
		getPitcure(rdcard.CardNo,rdcard.JPGBuffer,2);
		rdcard.bHaveCard=false;
	}
}

function endread_onclick(){
	rdcard.endread();
}
function window_onload(){
	if(i<2){
	    if (i==0){
			document.getElementsByName("paiche_linker")[0].value=rdcard.NameS;
			document.getElementsByName("paiche_linkerNum")[0].value=rdcard.CardNo;
			document.getElementsByName("paiche_linkerAdd")[0].value=rdcard.Address;
			getPitcure(rdcard.CardNo,rdcard.JPGBuffer,1);
	    }
	    if (i==1){
			document.getElementsByName("paiche_promier")[0].value=rdcard.NameS;
			document.getElementsByName("paiche_promierNum")[0].value=rdcard.CardNo;
			document.getElementsByName("paiche_promierAdd")[0].value=rdcard.Address;
			getPitcure(rdcard.CardNo,rdcard.JPGBuffer,2);
	    }
	}
}

function window_onUnload(){
	  rdcard.DeleteOutputFile();
	  rdcard.DeleteAllPicture();
}

function getPitcure(strCardNo,strBase64Code,nFlag){
	if (strCardNo!=""){
		$.ajax({
			  type:'POST',
			  url:'list.php?task=generatepicutre',
			  data:{"IDcard":strCardNo,"Base64Code":strBase64Code},
			  dataType:"json",
			  cache: false,
			  async:false,
			  error: function(){
			      sre="err1";
			  },
			  success:function(jsonmsg){
				if (jsonmsg.status==0){
					if (nFlag==1){
						document.getElementsByName('img_linker_picture')[0].setAttribute('src','../../../thumb/upload/idpicture/'+strCardNo+'.jpg');
						document.getElementsByName("paiche_linkerPicture")[0].value=strCardNo+'.jpg';
						if (jsonmsg.havecount>0){
							stitle="此客户此前曾经有"+jsonmsg.havecount+"次用车，<a href='searchlist.php?firstop=firstop&paiche_linkerNum="+strCardNo+"' target='_blank'>用车详情</a>";
						}else{
							stitle="此客户首次租车！";
						}
						$("#havecount").html(stitle);
						$("#havecount").show();
					}
					if (nFlag==2){
						document.getElementsByName('img_promier_picture')[0].setAttribute('src','../../../thumb/upload/idpicture/'+strCardNo+'.jpg');
						document.getElementsByName("paiche_promierPicture")[0].value=strCardNo+'.jpg';
					}
				}else{
				    //alert('error');
				}
			  }
		});
	}
}
</script>
<!-->
<OBJECT
	  classid="clsid:F1317711-6BDE-4658-ABAA-39E31D3704D3"                  
	  codebase="SDRdCard.cab#version=1,3,5,0"
	  width=330
	  height=0
	  align=center
	  hspace=0
	  vspace=0
	  id=idcard
	  name=rdcard		 
>
</OBJECT>
</head>
<body>
<div class="so_main">
  <div class="page_tit">编辑-<?php echo $_smarty_tpl->getVariable('PAGETITLE')->value;?>
<span class="pc_inner"><?php echo (isset($_smarty_tpl->getVariable('list')->value['shop_name']) ? $_smarty_tpl->getVariable('list')->value['shop_name'] : null);?>
</span></div>
  <form method="post" action="insert.php" onsubmit="return business_check(this)" name="form1">
  <div class="form2">
	<dl class="lineD">
	    <dt>用车类型：</dt>
	    <dd><input type="hidden" name="paiche_contractNum" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_contractNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_contractNum'] : null);?>
" />
	    <?php if ($_smarty_tpl->getVariable('busitype')->value=='1'||$_smarty_tpl->getVariable('busitype')->value=='2'){?>
	    <input type="radio" name="paiche_busitype" value="1" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_busitype']) ? $_smarty_tpl->getVariable('list')->value['paiche_busitype'] : null)=="1"){?>checked<?php }?> />前台散客&nbsp;&nbsp;
	    <?php }?><input type="radio" name="paiche_busitype" value="2" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_busitype']) ? $_smarty_tpl->getVariable('list')->value['paiche_busitype'] : null)=="2"){?>checked<?php }?> />长期合作企业客户
	    <?php if ($_smarty_tpl->getVariable('busitype')->value=='2'){?>
	    &nbsp;&nbsp; <input type="radio" name="paiche_busitype" value="3" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_busitype']) ? $_smarty_tpl->getVariable('list')->value['paiche_busitype'] : null)=="3"){?>checked<?php }?> />调车公司
	    <?php }?>
	    </dd>
	</dl>
	<dl class="lineD" id="busishow_2" style="display:none">
      <dt><span class="redstar">*</span>长期合作企业客户：</dt>
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
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paicheCom']) ? $_smarty_tpl->getVariable('list')->value['paicheCom'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['client_id']) ? $_smarty_tpl->tpl_vars['rows']->value['client_id'] : null)){?>selected<?php }?> at="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_Mlinker']) ? $_smarty_tpl->tpl_vars['rows']->value['client_Mlinker'] : null);?>
#<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_Mphone']) ? $_smarty_tpl->tpl_vars['rows']->value['client_Mphone'] : null);?>
#<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_shopid']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_shopid'] : null);?>
#<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_name']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_name'] : null);?>
#<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_salesman']) ? $_smarty_tpl->tpl_vars['rows']->value['client_salesman'] : null);?>
#<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_shopid']) ? $_smarty_tpl->tpl_vars['rows']->value['client_shopid'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_name']) ? $_smarty_tpl->tpl_vars['rows']->value['client_name'] : null);?>
</option>
	                  <?php }} ?>
	    </select><input type="text" id="search_key" size="4" placeholder="快速检索" />
	  </dd>
    </dl>
    <dl class="lineD" id="busishow_3" style="display:none">
      <dt><span class="redstar">*</span>调车公司：</dt>
      <dd><select name="paiche_brother" id="paiche_brother" >
	                  <option value="0">请选择</option>
	                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('brotherlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bro_id']) ? $_smarty_tpl->tpl_vars['rows']->value['bro_id'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_brother']) ? $_smarty_tpl->getVariable('list')->value['paiche_brother'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['bro_id']) ? $_smarty_tpl->tpl_vars['rows']->value['bro_id'] : null)){?>selected<?php }?> at="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bro_linker']) ? $_smarty_tpl->tpl_vars['rows']->value['bro_linker'] : null);?>
#<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bro_phone']) ? $_smarty_tpl->tpl_vars['rows']->value['bro_phone'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bro_name']) ? $_smarty_tpl->tpl_vars['rows']->value['bro_name'] : null);?>
</option>
	                  <?php }} ?>
	              </select>
	              
	  </dd>
    </dl>
	<dl class="lineD">
      <dt><span class="redstar">*</span>业务归属：</dt>
      <dd>归属门店：<select name="paicheCounterShop" id="paicheCounterShop">
		  <option value="0">请选择</option>
		  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shoplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
		 	<option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null)==(isset($_smarty_tpl->getVariable('list')->value['paicheCounterShop']) ? $_smarty_tpl->getVariable('list')->value['paicheCounterShop'] : null)){?>selected<?php }?> at="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>
</option>
		  <?php }} ?>
		  </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;业务员：<input type="text" name="paicheCounterMan" id="paicheCounterMan" size="16" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['yewuyuan']) ? $_smarty_tpl->getVariable('list')->value['yewuyuan'] : null);?>
" />
	    <input type="hidden" name="paicheCounterMan2" id="paicheCounterMan2" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paicheCounterMan']) ? $_smarty_tpl->getVariable('list')->value['paicheCounterMan'] : null);?>
" />
	    <a href="javascript:select_ywy();" id="selywy"><img src="../../../css/driver.gif" width="16" height="15" class="peoplePic" /></a>
	  </dd>
    </dl>
    <dl class="lineD">
	    <dt>服务门店及接待员：</dt>
	    <dd>服务门店：<select name="shop_id" id="shop_id" <?php if ($_smarty_tpl->getVariable('task')->value=='insert'){?>disabled="disabled"<?php }?>>
		  <option value="0">请选择</option>
		  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shoplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
		 	<option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null)==(isset($_smarty_tpl->getVariable('list')->value['paiche_shopid']) ? $_smarty_tpl->getVariable('list')->value['paiche_shopid'] : null)){?>selected<?php }?> at="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>
</option>
		  <?php }} ?>
		  </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;接待员：<input type="text" name="paicheServerMan" id="paicheServerMan" size="16" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['jiedaiyuan']) ? $_smarty_tpl->getVariable('list')->value['jiedaiyuan'] : null);?>
" />
	    <input type="hidden" name="paicheServerMan2" id="paicheServerMan2" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paicheServerMan']) ? $_smarty_tpl->getVariable('list')->value['paicheServerMan'] : null);?>
" />
	    <a href="javascript:select_emp();" id="seljdy"><img src="../../../css/driver.gif" width="16" height="15" class="peoplePic" /></a>
	    
	    </dd>
	</dl>
    <dl class="lineD">
      <dt><span class="redstar">*</span>联系人：</dt>
      <dd>
        <div style="position: absolute;margin-left: 375px;" ><img id="img_linker_picture" name="img_linker_picture" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_linkerPicture']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerPicture'] : null)){?>src="../../../thumb/upload/idpicture/<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerPicture']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerPicture'] : null);?>
"<?php }else{ ?>src=""<?php }?>></div>
        <input type="text" name="paiche_linker" id="paiche_linker" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linker']) ? $_smarty_tpl->getVariable('list')->value['paiche_linker'] : null);?>
" />
        <input type="hidden" name="paiche_linkerPicture" id="paiche_linkerPicture" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerPicture']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerPicture'] : null);?>
" />
	  </dd>
    </dl>
    <dl class="lineD">
      <dt><span class="redstar">*</span>联系人手机：</dt>
      <dd>
        <input type="text" name="paiche_linkerPhone" id="paiche_linkerPhone" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerPhone']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerPhone'] : null);?>
"/>
	  </dd>
    </dl>
    <?php if ($_smarty_tpl->getVariable('busitype')->value=='1'||$_smarty_tpl->getVariable('busitype')->value=='3'){?>
    <dl class="lineD">
      <dt><span class="redstar">*</span>联系人身份证：</dt>
      <dd>
        <input type="text" name="paiche_linkerNum" id="paiche_linkerNum" size="26"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerNum'] : null);?>
" <?php if (strstr($_smarty_tpl->getVariable('a_permissions')->value,'inputidcard')){?><?php }else{ ?>onFocus="this.blur()"<?php }?>/>&nbsp;
        <input type="button" value="开始读卡" name="beginread" onClick="beginread_onclick()">&nbsp;

        <input type="button" value="停止读卡" name="endread"   onclick="endread_onclick()"  >

        <div class="showprice list" id="havecount" style="width: 350px;margin-left: 490px;height: 38px;line-height: 38px;font-size: 16px;"></div>
	  </dd>
    </dl>
    <dl class="lineD">
      <dt><span class="redstar">*</span>联系人地址：</dt>
      <dd>
        <input type="text" name="paiche_linkerAdd" id="paiche_linkerAdd" size="40"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_linkerAdd']) ? $_smarty_tpl->getVariable('list')->value['paiche_linkerAdd'] : null);?>
"/>
	  </dd>
    </dl>
    <dl class="lineD">
	    <dt>担保人：</dt>
	    <dd>
	    <div style="position: absolute;margin-left: 375px;" ><img id="img_promier_picture" name="img_promier_picture" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_promierPicture']) ? $_smarty_tpl->getVariable('list')->value['paiche_promierPicture'] : null)){?>src="../../../thumb/upload/idpicture/<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promierPicture']) ? $_smarty_tpl->getVariable('list')->value['paiche_promierPicture'] : null);?>
"<?php }else{ ?>src=""<?php }?>></div>
	    <input type="text" name="paiche_promier" id="paiche_promier" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promier']) ? $_smarty_tpl->getVariable('list')->value['paiche_promier'] : null);?>
"/>
	    <input type="hidden" name="paiche_promierPicture" id="paiche_promierPicture" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promierPicture']) ? $_smarty_tpl->getVariable('list')->value['paiche_promierPicture'] : null);?>
" />
	    </dd>
	</dl>
    <dl class="lineD">
	    <dt>担保人手机：</dt>
	    <dd><input type="text" name="paiche_promierPhone" id="paiche_promierPhone" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promierPhone']) ? $_smarty_tpl->getVariable('list')->value['paiche_promierPhone'] : null);?>
"/></dd>
    </dl>
    <dl class="lineD">
	    <dt>担保人身份证：</dt>
	    <dd><input type="text" name="paiche_promierNum" id="paiche_promierNum" size="26" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promierNum']) ? $_smarty_tpl->getVariable('list')->value['paiche_promierNum'] : null);?>
"/>&nbsp;<input type="button" value="开始读卡" name="beginread" onClick="beginread_onclick2()">&nbsp;<input type="button" value="停止读卡" name="endread"   onclick="endread_onclick()"  ></dd>
    </dl>
    <dl class="lineD">
      <dt>担保人地址：</dt>
      <dd>
        <input type="text" name="paiche_promierAdd" id="paiche_promierAdd" size="40"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_promierAdd']) ? $_smarty_tpl->getVariable('list')->value['paiche_promierAdd'] : null);?>
"/>
	  </dd>
    </dl>
    <?php }?>
    
	
	<dl class="lineD">
      <dt><span class="redstar">*</span>用车开始时间：</dt>
      <dd>
        <input type="text" name="paiche_startDate" id="paiche_startDate" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate_format']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate_format'] : null);?>
" onClick="calendar.show(this);" readonly="readonly" />
        <select name="paiche_startHour" id="paiche_startHour">
            <option value="00" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_startHour']) ? $_smarty_tpl->getVariable('list')->value['paiche_startHour'] : null)=="00"){?> selected <?php }else{ ?><?php }?>>-请选择小时-</option>
	        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('hourlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	            <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['hour']) ? $_smarty_tpl->tpl_vars['rows']->value['hour'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['hour']) ? $_smarty_tpl->tpl_vars['rows']->value['hour'] : null)==(isset($_smarty_tpl->getVariable('list')->value['paiche_startHour']) ? $_smarty_tpl->getVariable('list')->value['paiche_startHour'] : null)){?>selected<?php }else{ ?><?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['hour']) ? $_smarty_tpl->tpl_vars['rows']->value['hour'] : null);?>
点</option>
	        <?php }} ?>
        </select>
        <input id="paiche_startMinute" name="paiche_startMinute" type="text" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startMinute']) ? $_smarty_tpl->getVariable('list')->value['paiche_startMinute'] : null);?>
" class='cssINPUT' style='position: absolute; border-right: 0px;margin-left: 3px;' />
        <select name="select_startMinute" id="select_startMinute" class="cssINPUT" style="display: none; height: 22px; position: absolute; cursor: pointer;margin-left: 3px;">
        	<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('minuelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	            <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['minute']) ? $_smarty_tpl->tpl_vars['rows']->value['minute'] : null);?>
" ><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['minute']) ? $_smarty_tpl->tpl_vars['rows']->value['minute'] : null);?>
</option>
	        <?php }} ?>
        </select>
        <input type="hidden" id="p_startDate" name="p_startDate" value="" />
        <input type="hidden" id="p_endDate" name="p_endDate" value="" />
      </dd>
    </dl>
    <dl class="lineD">
      <dt><span class="redstar">*</span>用车结束时间：</dt>
      <dd>
        <input type="text" name="paiche_endDate" id="paiche_endDate" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_endDate_format']) ? $_smarty_tpl->getVariable('list')->value['paiche_endDate_format'] : null);?>
" onClick="calendar.show(this);" readonly="readonly" />
        <select name="paiche_endHour" id="paiche_endHour">
            <option value="00" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_endHour']) ? $_smarty_tpl->getVariable('list')->value['paiche_endHour'] : null)=="00"){?> selected <?php }else{ ?><?php }?>>-请选择小时-</option>
	        <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('hourlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	            <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['hour']) ? $_smarty_tpl->tpl_vars['rows']->value['hour'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['hour']) ? $_smarty_tpl->tpl_vars['rows']->value['hour'] : null)==(isset($_smarty_tpl->getVariable('list')->value['paiche_endHour']) ? $_smarty_tpl->getVariable('list')->value['paiche_endHour'] : null)){?>selected<?php }else{ ?><?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['hour']) ? $_smarty_tpl->tpl_vars['rows']->value['hour'] : null);?>
点</option>
	        <?php }} ?>
        </select>
        <input id="paiche_endMinute" name="paiche_endMinute" type="text" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_endMinute']) ? $_smarty_tpl->getVariable('list')->value['paiche_endMinute'] : null);?>
" class='cssINPUT' style='position: absolute; border-right: 0px;margin-left: 3px;' />
        <select name="select_endMinute" id="select_endMinute" class="cssINPUT" style="display: none; height: 22px; position: absolute; cursor: pointer;margin-left: 3px;">
        	<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('minuelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	            <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['minute']) ? $_smarty_tpl->tpl_vars['rows']->value['minute'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['minute']) ? $_smarty_tpl->tpl_vars['rows']->value['minute'] : null);?>
</option>
	        <?php }} ?>
        </select>
        <?php if ($_smarty_tpl->getVariable('busitype')->value=='1'){?><span style="margin-left: 120px;">&nbsp;&nbsp;租赁期限:<input type="text" name="paiche_aaa"  size="2"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_aaa']) ? $_smarty_tpl->getVariable('list')->value['paiche_aaa'] : null);?>
"/>注：填写的内容仅供合同打印使用，如：3天、2个月、1年</span><?php }?>
      </dd>
    </dl>
    <?php if ($_smarty_tpl->getVariable('busitype')->value=='1'||$_smarty_tpl->getVariable('busitype')->value=='2'){?>
    <dl class="lineD">
	    <dt>优惠券编号：</dt>
    	<dd><input type="text" name="paiche_coupons" id="paiche_coupons" size="26" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_coupons']) ? $_smarty_tpl->getVariable('list')->value['paiche_coupons'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_coupons']) ? $_smarty_tpl->getVariable('list')->value['paiche_coupons'] : null)==''){?>readonly<?php }?> />&nbsp;
    	不使用：<input type="checkbox" id="paiche_unuseCoupons" name="paiche_unuseCoupons" onClick="unlimited(this,'paiche_coupons')" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_coupons']) ? $_smarty_tpl->getVariable('list')->value['paiche_coupons'] : null)==''){?>checked<?php }?> value="Y" /></dd>
    </dl>
	<dl class="lineD" id="showCar">
	    <dt><?php if ($_smarty_tpl->getVariable('busitype')->value=='1'){?><span class="redstar">*</span><?php }?>预约车辆：</dt>
	    <dd><input type="text" name="paicheCar" id="paicheCar" size="45" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paicheCar2s']) ? $_smarty_tpl->getVariable('list')->value['paicheCar2s'] : null);?>
" /> 
	         <input type="button" value="清 空" onClick="clearValue('paicheCar','paicheCar2')" />&nbsp;
	         关键字：<input type="text" name="paicheCarKey" id="paicheCarKey" size="10" />
	    <input type="hidden" name="paicheCar2" id="paicheCar2" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paicheCar2']) ? $_smarty_tpl->getVariable('list')->value['paicheCar2'] : null);?>
" />
	    <a href="javascript:select_car();"><img src="../../../css/car2.gif" height="15" class="peoplePic" /></a>
	    </dd>
    </dl>
	<?php }?>

    <?php if ($_smarty_tpl->getVariable('busitype')->value=='2'||$_smarty_tpl->getVariable('busitype')->value=='4'||$_smarty_tpl->getVariable('busitype')->value=='5'){?>
    <dl class="lineD">
	    <dt><span class="redstar">*</span>司机每天工作时间：</dt>
	    <dd><input type="text" name="paiche_workTime" id="paiche_workTime" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_workTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_workTime'] : null);?>
"/></dd>
	</dl>
	<?php }?>
    <dl class="lineD">
	    <dt><span class="redstar">*</span>超时费用：</dt>
    	<dd><input type="text" name="paiche_overTime" id="paiche_overTime" size="16" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_overTime'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitTime'] : null)=="Y"){?>readonly<?php }?> />
    不限时间：<input type="checkbox" id="paiche_unlimitTime" name="paiche_unlimitTime" onClick="unlimited(this,'paiche_overTime')" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitTime'] : null)=="Y"){?>checked<?php }?> value="Y" /></dd>
    </dl>
    <dl class="lineD">
	    <dt><span class="redstar">*</span>限制公里数：</dt>
	    <dd><input type="text" name="paiche_limitKm" id="paiche_limitKm" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_limitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_limitKm'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)=="Y"){?>readonly<?php }else{ ?><?php }?>/>&nbsp;
	    超公里费用：<input type="text" name="paiche_overKm" id="paiche_overKm" size="6"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_overKm'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)=="Y"){?>readonly<?php }else{ ?><?php }?> />/公里&nbsp;
	    不限公里<input type="checkbox" id="paiche_unlimitKm" name="paiche_unlimitKm" onClick="unlimited(this,'paiche_limitKm','paiche_overKm')" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)=="Y"){?>checked<?php }else{ ?><?php }?> value="Y" />
	    <div class="showprice list" id="price" style="width: 510px;"></div>
	    </dd>
	</dl>

	<?php if ($_smarty_tpl->getVariable('busitype')->value=='4'){?>
	<dl class="lineD">
	    <dt><span class="redstar">*</span>油费：</dt>
	    <dd>
	    	100公里<input type="text" name="youfei_shen" id="youfei_shen" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['youfei_shen']) ? $_smarty_tpl->getVariable('list')->value['youfei_shen'] : null);?>
" />升&nbsp;

	    油价：<input type="text" name="youfei_danjia" id="youfei_danjia" size="6"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['youfei_danjia']) ? $_smarty_tpl->getVariable('list')->value['youfei_danjia'] : null);?>
"  />/升&nbsp;

	    没有油费<input type="checkbox" id="youfei" name="youfei"  <?php if ((isset($_smarty_tpl->getVariable('list')->value['youfei']) ? $_smarty_tpl->getVariable('list')->value['youfei'] : null)=="Y"){?>checked<?php }else{ ?><?php }?> value="Y" />
	    
	    </dd>
	</dl>	
	<?php }?>


	<?php if ($_smarty_tpl->getVariable('busitype')->value=='1'||$_smarty_tpl->getVariable('busitype')->value=='2'){?>
	<dl class="lineD">
    	<dt>客户要求车型：</dt>
    	<dd><input type="text" name="paiche_requestCar" id="paiche_requestCar" size="45"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_requestCar']) ? $_smarty_tpl->getVariable('list')->value['paiche_requestCar'] : null);?>
"/></dd>
  	</dl>
  	<?php }?>
  	<?php if ($_smarty_tpl->getVariable('busitype')->value=='2'){?>
	<dl class="lineD">
	    <dt>路程：</dt>
	    <dd><input type="radio" name="paiche_route" value="单" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_route']) ? $_smarty_tpl->getVariable('list')->value['paiche_route'] : null)=="单"){?>checked<?php }?> />单程&nbsp;&nbsp;<input type="radio" name="paiche_route" value="双" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_route']) ? $_smarty_tpl->getVariable('list')->value['paiche_route'] : null)=="双"){?>checked<?php }?> />双程</dd>
	</dl>
	<dl class="lineD">
	    <dt>内外：</dt>
	    <dd><input type="radio" name="paiche_scope" value="内" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_scope']) ? $_smarty_tpl->getVariable('list')->value['paiche_scope'] : null)=="内"){?>checked<?php }?> />市内&nbsp;&nbsp;<input type="radio" name="paiche_scope" value="外" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_scope']) ? $_smarty_tpl->getVariable('list')->value['paiche_scope'] : null)=="外"){?>checked<?php }?> />市外</dd>
	</dl>
	<?php }?>
	<?php if (($_smarty_tpl->getVariable('busitype')->value=='3'||$_smarty_tpl->getVariable('busitype')->value=='4'||$_smarty_tpl->getVariable('busitype')->value=='5')&&$_smarty_tpl->getVariable('task')->value=="insert111"){?>
    <dl class="lineD">
	    <dt>上次结账截止日期：</dt>
	    <dd><input type="text" name="paiche_AccountendDate" id="paiche_AccountendDate" size="12" onClick="calendar.show(this);" readonly="readonly" /></dd>
	</dl>
	<dl class="lineD">
	    <dt>上次统计超公里日期：</dt>
	    <dd><input type="text" name="paiche_lastTotalDate" id="paiche_lastTotalDate" size="12" onClick="calendar.show(this);" readonly="readonly" /></dd>
	</dl>
	<?php }?>
	<dl class="lineD" id="dlitems">
	    <dt>其他条款约定：</dt>
	    <dd>
	    <div id="divitems" style="width:344px;">
	    <ul>
          <li class="aaa">编号</li><li class="bbb">约定条款</li><li class="aaa">约定结果</li><li class="aaa">删除</li>
        </ul>
	    
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('itemlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
	    <ul id="V<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
">
          <li class="aaa"><input type="hidden" id="Recid" name="Recid[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
<input type="hidden" id="Iid" name="Iid[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
" /></li>
          <li class="bbb"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_name']) ? $_smarty_tpl->tpl_vars['row']->value['item_name'] : null);?>
</li>
          <li class="aaa"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row']->value['conv_result'] : null);?>
<input type="hidden" id="result" name="result[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_result']) ? $_smarty_tpl->tpl_vars['row']->value['conv_result'] : null);?>
" /></li>
          <li class="aaa"><a href="javascript:delV(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
)"><img src="../../../css/error.gif" /></a><input type="hidden" id="DV<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
" name="DVid[]" value="0" /></li>
        </ul>
        <?php }} ?>
        
	    </div><div style="padding:5px 0 0 276px;"><a href="javascript:select_items();"><img src="../../../css/list.gif" height="15" class="peoplePic" /></a></div>
	    </dd>
	</dl>
	<?php if ($_smarty_tpl->getVariable('busitype')->value=='3'||$_smarty_tpl->getVariable('busitype')->value=='1'||$_smarty_tpl->getVariable('busitype')->value=='4'||$_smarty_tpl->getVariable('busitype')->value=='5'){?>
	<dl class="lineD" >
	    <dt><span class="redstar">*</span>押金：</dt>
	    <dd><input type="hidden" id="Rid" name="Rid[]" value="<?php echo (isset($_smarty_tpl->getVariable('row')->value['id']) ? $_smarty_tpl->getVariable('row')->value['id'] : null);?>
" /><input type="hidden" name="paiche_deposit_id" value="1" />
	    <input type="text" id="paiche_deposit" name="paiche_deposit" value="<?php echo $_smarty_tpl->getVariable('paiche_deposit')->value;?>
" size="6"/>&nbsp;&nbsp;需退金额：<input type="text" id="paiche_deposit_back" name="paiche_deposit_back" value="<?php echo $_smarty_tpl->getVariable('paiche_deposit_back')->value;?>
" size="6" onFocus="this.blur()"/></dd>
	</dl>
	<?php }?>
	<dl class="lineD" >
	    <dt id="showrent"><span class="redstar">*</span>租金：</dt>
	    <dd><input type="hidden" id="Rid" name="Rid[]" value="<?php echo (isset($_smarty_tpl->getVariable('row')->value['id']) ? $_smarty_tpl->getVariable('row')->value['id'] : null);?>
" /><input type="hidden" name="paiche_rent_id" value="2" />
	    <input type="text" id="paiche_rent" name="paiche_rent" value="<?php echo $_smarty_tpl->getVariable('paiche_rent')->value;?>
" size="6"/>
	    <?php if ($_smarty_tpl->getVariable('busitype')->value=='1'||$_smarty_tpl->getVariable('busitype')->value=='2'){?>&nbsp;&nbsp;<input type="radio" name="paiche_needtax" value="0" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_needtax']) ? $_smarty_tpl->getVariable('list')->value['paiche_needtax'] : null)=="0"){?>checked<?php }?> />不需要开票&nbsp;<input type="radio" name="paiche_needtax" value="1" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_needtax']) ? $_smarty_tpl->getVariable('list')->value['paiche_needtax'] : null)=="1"){?>checked<?php }?> />需要开票<?php }?>
	    <ul id="showpaiche_shunt" style="display:none;">本公司收现：<input type="text" name="paiche_brother_rented" id="paiche_brother_rented" size="6"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rented']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rented'] : null);?>
"/>元</ul>
	    </dd>
	</dl>
    
    
    <?php if ($_smarty_tpl->getVariable('busitype')->value=='1'||$_smarty_tpl->getVariable('busitype')->value=='2'){?>
    <dl class="lineD">
	    <dt>约定定金：</dt>
	    <dd><input type="text" name="paiche_front" id="paiche_front" size="6"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_front']) ? $_smarty_tpl->getVariable('list')->value['paiche_front'] : null);?>
"/>元</dd>
	</dl>
    <dl class="lineD">
	    <dt><span class="redstar">*</span>开车线路：</dt>
	    <dd><textarea name="paiche_line" id="paiche_line" cols="40" rows="5"><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_line']) ? $_smarty_tpl->getVariable('list')->value['paiche_line'] : null);?>
</textarea></dd>
	</dl>
	
	<?php }?>
	<dl class="lineD">
	    <dt>特殊说明：</dt>
	    <dd><textarea name="paiche_specialRemarks" id="paiche_specialRemarks" cols="40" rows="5"><?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_specialRemarks']) ? $_smarty_tpl->getVariable('list')->value['paiche_specialRemarks'] : null);?>
</textarea></dd>
	</dl>
	<?php if ($_smarty_tpl->getVariable('task')->value=="update"){?>
	<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_shunt']) ? $_smarty_tpl->getVariable('list')->value['paiche_shunt'] : null)==1){?>
	<dl class="lineD">
	    <dt>调车公司：</dt>
	    <dd><input type="text" name="shuntCom" id="shuntCom" size="38" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['bro_name']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['bro_name'] : null);?>
" /></dd>
    </dl>
    <dl class="lineD">
	    <dt>司机：</dt>
	    <dd><input type="text" name="shunt_driver" id="shunt_driver" size="18" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_driver']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_driver'] : null);?>
" /></dd>
    </dl>
    <dl class="lineD">
	    <dt>司机号码：</dt>
	    <dd><input type="text" name="shunt_driverPhone" id="shunt_driverPhone" size="16" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_driverPhone']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_driverPhone'] : null);?>
" /></dd>
	</dl>
    <dl class="lineD">
	    <dt>租金：</dt>
	    <dd><input type="text" name="shunt_rent" id="shunt_rent" size="8" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rent']) ? $_smarty_tpl->getVariable('list')->value['paiche_shuntline']['shunt_rent'] : null);?>
"/></dd>
	</dl>
    <?php }?>
    <?php if (($_smarty_tpl->getVariable('busitype')->value=='2'||$_smarty_tpl->getVariable('busitype')->value=='4'||$_smarty_tpl->getVariable('busitype')->value=='5')&&(isset($_smarty_tpl->getVariable('list')->value['paiche_shunt']) ? $_smarty_tpl->getVariable('list')->value['paiche_shunt'] : null)!=1){?>
    <dl class="lineD">
	    <dt>司机：</dt>
	    <dd><input type="text" name="paicheDriver" id="paicheDriver" size="18" onFocus="this.blur()" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['siji']) ? $_smarty_tpl->getVariable('list')->value['siji'] : null);?>
" /></dd>
    </dl>
    <?php }?>
	<?php }?>
    <div class="page_btm">
      <input type="submit" class="btn_b" name="btn_save" value="确定" />
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_id']) ? $_smarty_tpl->getVariable('list')->value['paiche_id'] : null);?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" />
  <input type="hidden" name="b_id" id="b_id" value="<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
" />
  <input type="hidden" name="paiche_parent" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_parent']) ? $_smarty_tpl->getVariable('list')->value['paiche_parent'] : null);?>
" />
  
  </form>
</div>
<script type="text/javascript" src="../../../js/create.js"></script>
<!-->
<script>
//编辑状态下显示光宝报价
if ($("#b_id").val()==2 && ($("#paiche_name2").children('option:selected').val()==11 || $("#paiche_name2").children('option:selected').val()==12)){
	getClientPrice($("#paiche_name2").val());
}

</script>
<!-->
</body>
</html>