<?php /* Smarty version Smarty-3.0.4, created on 2018-01-20 17:34:12
         compiled from "D:\web\site\templates\elsker\operator/business/select.html" */ ?>
<?php /*%%SmartyHeaderCode:134165a630d1412eac3-11519043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce7938ced9a5d4e9ff077525b1f19c0935a7f28d' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/business/select.html',
      1 => 1516437037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134165a630d1412eac3-11519043',
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
<script type="text/javascript" src="../../../js/common.js"></script>
</head>
<body>
<div class="so_main">
  <div class="page_tit"><?php if ($_smarty_tpl->getVariable('sel_type')->value=="charges"){?>选择收费项目<?php }else{ ?>设定合同条款约定<?php }?></div>
<div class="list">
<input type="hidden" name="source" id="source" value="<?php echo $_smarty_tpl->getVariable('source')->value;?>
" />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">
		<input type="checkbox" id="checkbox_handle" onclick="checkAll(this)" value="0">
    	<label for="checkbox"></label>
	</th>
	<?php if ($_smarty_tpl->getVariable('sel_type')->value=="charges"){?>
	<th>收费项目</th>
	<th>约定金额</th>
	<th>&nbsp;</th>
	<?php }else{ ?>
	<th>约定条款</th>
	<th>结果</th>
	<?php }?>
  </tr>
  <?php if ($_smarty_tpl->getVariable('sel_type')->value=="charges"){?>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('chargeList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_id']) ? $_smarty_tpl->tpl_vars['row']->value['charge_id'] : null);?>
">
    	<td><input type="checkbox" name="checkbox" id="checkbox<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_id']) ? $_smarty_tpl->tpl_vars['row']->value['charge_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_id']) ? $_smarty_tpl->tpl_vars['row']->value['charge_id'] : null);?>
"></td>
	  	<td><input type="hidden" id="name_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_id']) ? $_smarty_tpl->tpl_vars['row']->value['charge_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null);?>
" /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null);?>
</td>
		<td><input type="text" name="money[]" id="money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_id']) ? $_smarty_tpl->tpl_vars['row']->value['charge_id'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['charge_default']) ? $_smarty_tpl->tpl_vars['row']->value['charge_default'] : null)!=0){?> value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_default']) ? $_smarty_tpl->tpl_vars['row']->value['charge_default'] : null);?>
" <?php }?>/></td>
		<td><input type="hidden" name="back_money[]" id="back_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_id']) ? $_smarty_tpl->tpl_vars['row']->value['charge_id'] : null);?>
" /><input type="hidden" name="charge_isback[]" id="isback_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_id']) ? $_smarty_tpl->tpl_vars['row']->value['charge_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_isback']) ? $_smarty_tpl->tpl_vars['row']->value['charge_isback'] : null);?>
" /></td>
 </tr>
 <?php }} ?>
 <?php }else{ ?>
 <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('itemList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
">
    	<td><input type="checkbox" name="checkbox" id="checkbox<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
"></td>
	  	<td style="text-align:left;"><input type="hidden" id="name_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_name']) ? $_smarty_tpl->tpl_vars['row']->value['item_name'] : null);?>
" /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_name']) ? $_smarty_tpl->tpl_vars['row']->value['item_name'] : null);?>
</td>
		<td style="text-align:left;">
		<input type="hidden" id="type_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_type']) ? $_smarty_tpl->tpl_vars['row']->value['item_type'] : null);?>
" />
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['item_type']) ? $_smarty_tpl->tpl_vars['row']->value['item_type'] : null)=="radio"){?>
		<input type="radio" name="result_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
" id="result_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
" value="1"/>是<input type="radio" name="result_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
" id="result_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
" value="0"/>否
		<?php }else{ ?>
		<input type="text" name="result_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
" id="result_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_id']) ? $_smarty_tpl->tpl_vars['row']->value['item_id'] : null);?>
" size="12" /><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['item_calcu']) ? $_smarty_tpl->tpl_vars['row']->value['item_calcu'] : null)==1&&(isset($_smarty_tpl->tpl_vars['row']->value['item_caltype']) ? $_smarty_tpl->tpl_vars['row']->value['item_caltype'] : null)==1){?>/<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_unit']) ? $_smarty_tpl->tpl_vars['row']->value['item_unit'] : null);?>
<?php }?>
		<?php }?>
		</td>
 </tr>
 <?php }} ?>
 <?php }?>
 </table>
</div>
<div class="Toolbar_inbox">
    <?php if ($_smarty_tpl->getVariable('sel_type')->value=="charges"){?>
    <a href="javascript:void(0);" class="btn_a" onclick="ok();"><span>确定</span></a>
    <?php }else{ ?>
    <a href="javascript:void(0);" class="btn_a" onclick="ok2();"><span>确定</span></a>
    <?php }?>
    <a href="javascript:void(0);" class="btn_a" onclick="closebox();"><span>关闭</span></a>   	
  </div> 
</div>
<!-->
<script>
	//鼠标移动表格效果
	$(document).ready(function(){	    
		$("tr[overstyle='on']").hover(
		  function () {
		    $(this).addClass("bg_hover");
		  },
		  function () {
		    $(this).removeClass("bg_hover");
		  }
		);
	});
	function checkon(o){
		if( o.checked == true ){
			$(o).parents('tr').addClass('bg_on') ;
		}else{
			$(o).parents('tr').removeClass('bg_on') ;
		}
	}
	
	function checkAll(o){
		if( o.checked == true ){
			$('input[name="checkbox"]').attr('checked','true');
			$('tr[overstyle="on"]').addClass("bg_on");
		}else{
			$('input[name="checkbox"]').removeAttr('checked');
			$('tr[overstyle="on"]').removeClass("bg_on");
		}
	}

	function ok(){
		var uids = new Array();
		var nRe=0;
		$.each($('table input:checked'), function(i, n){
			if ($(n).val()>0){
				uids.push( $(n).val() );
				tmpmoney=$('#money_'+$(n).val()).val();
				if (tmpmoney==""){
					nRe=1;
					$('#money_'+$(n).val()).focus();
					return false;
				}
			}
		});
        uid = uids.toString();
        if (uid==''){
        	alert("您没有选择任何项目！")
        	return false;
        }
        if (nRe==1){
        	alert("请输入约定金额");
        	return false;
        }
        var strRe="";
        
        $.each($('table input:checked'), function(i, n){
			if ($(n).val()>0){
				nid=$(n).val();
				tmpmoney=$('#money_'+nid).val();
				isback=$('#isback_'+nid).val();
				tmpbackmoney= isback=="0" ? "0" : tmpmoney;
				strRe+="<ul id=\"U"+nid+"\">";
				strRe+="<li class=\"aaa\"><input type=\"hidden\" id=\"Rid\" name=\"Rid[]\" value=\"\" />"+nid+"<input type=\"hidden\" id=\"Cid\" name=\"Cid[]\" value=\""+nid+"\" /></li>";
				strRe+="<li class=\"bbb\">"+$('#name_'+nid).val()+"</li>";
				strRe+="<li class=\"aaa\">"+tmpmoney+"<input type=\"hidden\" id=\"money_"+nid+"\" name=\"money[]\" value=\""+tmpmoney+"\" /></li>";
				strRe+="<li class=\"aaa\">"+ (isback=="0" ? "&nbsp;" : tmpmoney)+"<input type=\"hidden\" id=\"back_money\" name=\"back_money[]\" value=\""+tmpbackmoney+"\" /></li>";
				strRe+="<li class=\"aaa\"><a href=\"javascript:del("+nid+")\"><img src=\"../../../css/error.gif\" /></a><input type=\"hidden\" id=\"D"+nid+"\" name=\"Did[]\" value=\"0\" /></li></ul>";
			}
		});
        $("#divcharges",window.parent.document).append(strRe);
        if ($('#source').val()!='continue'){
        	window.parent.window.compute();
        }
        window.parent.window.jBox.close();
	}
	
	function ok2(){
		var uids = new Array();
		var nRe=0;
		$.each($('table input[name="checkbox"]:checked'), function(i, n){
			if ($(n).val()>0){
				uids.push( $(n).val() );
			}
		});
        uid = uids.toString();
        if (uid==''){
        	alert("您没有选择任何项目！")
        	return false;
        }
        
        var strRe="";
        var ncount=0;
        $.each($('table input[name="checkbox"]:checked'), function(i, n){
			if ($(n).val()>0){
				ncount++;
				nid=$(n).val();
				type=$('#type_'+nid).val();
				if (type=="radio"){
					tmpcheck=$('#result_'+nid+':checked').val();
					if (tmpcheck==null){
						tmpresult="否";
					}else{
						tmpresult=(tmpcheck==1? "是" : "否");
					}
				}else{
					tmpresult=$('#result_'+nid).val();
				}
				
				strRe+="<ul id=\"V"+nid+"\">";
				strRe+="<li class=\"aaa\"><input type=\"hidden\" id=\"Recid\" name=\"Recid[]\" value=\"\" />"+nid+"<input type=\"hidden\" id=\"Iid\" name=\"Iid[]\" value=\""+nid+"\" /></li>";
				strRe+="<li class=\"bbb\">"+$('#name_'+nid).val()+"</li>";
				strRe+="<li class=\"aaa\">"+tmpresult+"<input type=\"hidden\" id=\"result\" name=\"result[]\" value=\""+tmpresult+"\" /></li>";
				strRe+="<li class=\"aaa\"><a href=\"javascript:delV("+nid+")\"><img src=\"../../../css/error.gif\" /></a><input type=\"hidden\" id=\"DV"+nid+"\" name=\"DVid[]\" value=\"0\" /></li></ul>";
			}
		});
        //nheight=ncount*22+$("#dlitems",window.parent.document).outerHeight();
        //$("#dlitems",window.parent.document).css("height",nheight.toString()+"px");
        $("#divitems",window.parent.document).append(strRe);
        window.parent.window.jBox.close();
	}
	
	function closebox(){
		window.parent.window.jBox.close();
	}
</script>
<!-->
</body>
</html>