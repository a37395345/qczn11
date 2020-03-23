<?php /* Smarty version Smarty-3.0.4, created on 2015-04-17 15:43:57
         compiled from "D:\czyhqc\site\templates\elsker\operator/report/comuseedit.html" */ ?>
<?php /*%%SmartyHeaderCode:312455530b9bdcc8d80-92022381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5b840ac62a486ea96c2966e0d443a436b736204' => 
    array (
      0 => 'D:\\czyhqc\\site\\templates\\elsker\\operator/report/comuseedit.html',
      1 => 1429255572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '312455530b9bdcc8d80-92022381',
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
<script type="text/javascript" src="../../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<script type="text/javascript" src="../../../../js/calendar.js"></script>
</head>
<body>
<form method="post" action="update.php" name="form1" id="form1">
<input type="hidden" name="pid" value="<?php echo $_smarty_tpl->getVariable('pid')->value;?>
" />
<input type="hidden" name="paiche_unlimitKm" id="paiche_unlimitKm" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null);?>
" />
<input type="hidden" name="paiche_limitKm" id="paiche_limitKm" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_limitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_limitKm'] : null);?>
" />
<input type="hidden" name="paiche_unlimitTime" id="paiche_unlimitTime" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitTime'] : null);?>
" />
<input type="hidden" name="settle_totalKm" id="settle_totalKm" value="0"/>
<div class="so_main">
<div class="form2">
	<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_shunt']) ? $_smarty_tpl->getVariable('list')->value['paiche_shunt'] : null)==0){?>
	<dl class="lineD">
		<dt><span class="redstar">*</span>开始公里数：</dt>
		<dd><input type="text" name="settle_startKm" id="settle_startKm" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_startKm']) ? $_smarty_tpl->getVariable('list')->value['settle_startKm'] : null);?>
" size="18" />公里
		</dd>
	</dl>
	<dl class="lineD">
		<dt><span class="redstar">*</span>结束公里数：</dt>
		<dd><input type="text" name="settle_endKm" id="settle_endKm" size="18" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_endKm']) ? $_smarty_tpl->getVariable('list')->value['settle_endKm'] : null);?>
" />公里
		</dd>
	</dl>
	<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitKm'] : null)!="Y"){?>
	<dl class="lineD">
		<dt>超公里数：</dt>
		<dd><input type="text" name="overKm" id="overKm" size="18" onFocus="this.blur()" class="grey noborder" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_endKm']) ? $_smarty_tpl->getVariable('list')->value['settle_endKm'] : null)-(isset($_smarty_tpl->getVariable('list')->value['settle_startKm']) ? $_smarty_tpl->getVariable('list')->value['settle_startKm'] : null);?>
" />公里×<input type="text" name="paiche_overKm" id="paiche_overKm" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overKm']) ? $_smarty_tpl->getVariable('list')->value['paiche_overKm'] : null);?>
" size="3" />元&nbsp;&nbsp;
		超公里费用：<input type="text" name="overKmMoney" id="overKmMoney" size="8" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overKmMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overKmMoney'] : null);?>
" onFocus="this.blur()" class="grey noborder" />元
		</dd>
	</dl>
	<?php }?>
	<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_unlimitTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_unlimitTime'] : null)!="Y"){?>
	<dl class="lineD">
		<dt>超时：</dt>
		<dd><input type="text" name="settle_overTime" id="settle_overTime" size="18" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overTime']) ? $_smarty_tpl->getVariable('list')->value['settle_overTime'] : null);?>
" />小时×<input type="text" name="paiche_overTime" id="paiche_overTime" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_overTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_overTime'] : null);?>
" size="3" />元&nbsp;&nbsp;
		超时费用：<input type="text" name="overTimeMoney" id="overTimeMoney" size="8" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_overTimeMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overTimeMoney'] : null);?>
" onFocus="this.blur()" class="grey noborder" />元
		</dd>
	</dl>
	<?php }?>
	<dl class="lineD">
		<dt>等待时间：</dt>
		<dd><input type="text" name="settle_waitTime" id="settle_waitTime" size="8" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_waitTime']) ? $_smarty_tpl->getVariable('list')->value['settle_waitTime'] : null);?>
" />小时×<input type="text" name="paiche_waitTime" id="paiche_waitTime" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_waitTime']) ? $_smarty_tpl->getVariable('list')->value['paiche_waitTime'] : null);?>
" size="3" />元&nbsp;&nbsp;
		等待费用：<input type="text" name="waitTimeMoney" id="waitTimeMoney" size="8" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_waitTimeMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_waitTimeMoney'] : null);?>
" onFocus="this.blur()" class="grey noborder" />元
		</dd>
	</dl>
	<dl class="lineD">
    	<dt>客户要求车型：</dt>
    	<dd><input type="text" name="paiche_requestCar" id="paiche_requestCar" size="16"  value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_requestCar']) ? $_smarty_tpl->getVariable('list')->value['paiche_requestCar'] : null);?>
"/></dd>
  	</dl>
	<dl class="lineD">
	    <dt>路程：</dt>
	    <dd><input type="radio" name="paiche_route" value="单" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_route']) ? $_smarty_tpl->getVariable('list')->value['paiche_route'] : null)=="单"){?>checked<?php }?> />单程&nbsp;&nbsp;<input type="radio" name="paiche_route" value="双" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_route']) ? $_smarty_tpl->getVariable('list')->value['paiche_route'] : null)=="双"){?>checked<?php }?> />双程
	    <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_type']) ? $_smarty_tpl->getVariable('list')->value['paiche_type'] : null)=='2'&&(isset($_smarty_tpl->getVariable('list')->value['paiche_clientprice']) ? $_smarty_tpl->getVariable('list')->value['paiche_clientprice'] : null)){?>
		&nbsp;&nbsp;<input type="button" value="价目表" id="btnPrice" />
		<div class="showprice" id="price" style="margin-left:10px;">
		<ul><li>选择</li><li>No.</li><li>地点</li><li>车型</li><li>行程</li><li>价格</li><li>等车费</li><li>过凌晨等车费</li></ul>
		<?php  $_smarty_tpl->tpl_vars['row5'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('list')->value['paiche_clientprice']) ? $_smarty_tpl->getVariable('list')->value['paiche_clientprice'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row5']->key => $_smarty_tpl->tpl_vars['row5']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
		<ul><li><a href="javascript:void(0);" id="selPrice" att="<?php echo (isset($_smarty_tpl->tpl_vars['row5']->value['price']) ? $_smarty_tpl->tpl_vars['row5']->value['price'] : null);?>
">选择</a></li><li><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</li><li><?php echo (isset($_smarty_tpl->tpl_vars['row5']->value['price_area']) ? $_smarty_tpl->tpl_vars['row5']->value['price_area'] : null);?>
</li><li><?php echo (isset($_smarty_tpl->tpl_vars['row5']->value['price_carmodel']) ? $_smarty_tpl->tpl_vars['row5']->value['price_carmodel'] : null);?>
</li><li><?php echo (isset($_smarty_tpl->tpl_vars['row5']->value['price_line']) ? $_smarty_tpl->tpl_vars['row5']->value['price_line'] : null);?>
</li><li><?php echo (isset($_smarty_tpl->tpl_vars['row5']->value['price']) ? $_smarty_tpl->tpl_vars['row5']->value['price'] : null);?>
</li><li><?php echo (isset($_smarty_tpl->tpl_vars['row5']->value['price_wait1']) ? $_smarty_tpl->tpl_vars['row5']->value['price_wait1'] : null);?>
</li><li><?php echo (isset($_smarty_tpl->tpl_vars['row5']->value['price_wait2']) ? $_smarty_tpl->tpl_vars['row5']->value['price_wait2'] : null);?>
</li></ul>
		<?php }} ?>
		</div>
		<?php }?>
	    </dd>
	</dl>
	<dl class="lineD">
	    <dt>内外：</dt>
	    <dd><input type="radio" name="paiche_scope" value="内" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_scope']) ? $_smarty_tpl->getVariable('list')->value['paiche_scope'] : null)=="内"){?>checked<?php }?> />市内&nbsp;&nbsp;<input type="radio" name="paiche_scope" value="外" <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_scope']) ? $_smarty_tpl->getVariable('list')->value['paiche_scope'] : null)=="外"){?>checked<?php }?> />市外</dd>
	</dl>
	<?php }?>
	
	<?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_front']) ? $_smarty_tpl->getVariable('list')->value['paiche_front'] : null)>0&&(isset($_smarty_tpl->getVariable('list')->value['paiche_fronted']) ? $_smarty_tpl->getVariable('list')->value['paiche_fronted'] : null)>0){?>
	<dl class="lineD">
		<dt>已付定金：</dt>
		<dd><input type="text" name="paiche_fronted" id="paiche_fronted" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_fronted']) ? $_smarty_tpl->getVariable('list')->value['paiche_fronted'] : null);?>
" size="8" readonly/>元
		</dd>
	</dl>
	<?php }?>
	<dl class="lineD">
		<dt>优惠金额：</dt>
		<dd><input type="text" name="settle_favor" id="settle_favor" size="8" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['settle_favor']) ? $_smarty_tpl->getVariable('list')->value['settle_favor'] : null);?>
" />元
		</dd>
	</dl>
	<dl class="lineD">
		<dt>合计金额：</dt>
		<dd><input type="text" name="infact" id="infact" size="8" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['money']) ? $_smarty_tpl->getVariable('list')->value['money'] : null)+(isset($_smarty_tpl->getVariable('list')->value['settle_overKmMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overKmMoney'] : null)+(isset($_smarty_tpl->getVariable('list')->value['settle_overTimeMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_overTimeMoney'] : null)+(isset($_smarty_tpl->getVariable('list')->value['settle_waitTimeMoney']) ? $_smarty_tpl->getVariable('list')->value['settle_waitTimeMoney'] : null);?>
" />元
		</dd>
	</dl>
			
	<div class="Toolbar_inbox">
    <a href="javascript:void(0);" class="btn_a" name="btn_save" id="btn_save" onclick="ok();"><span>确定</span></a>

  </div>
</div>
</div>
</form>
<!-->
<script>
var isshow=0;
	//鼠标移动表格效果
	$(document).ready(function(){
	    $("#btnPrice").live('click',function(){
			if (isshow==0){
				$("#price").show();
				isshow=1;
			}else{
				$("#price").hide();
				isshow=0;
			}
		});
	    $("#settle_startKm,#settle_endKm,#paiche_overKm,#paiche_overTime,#settle_favor").live('input propertychange',function(){
			compute();
		});
	    $("#overKmMoney,#overTimeMoney").live('input propertychange',function(){
			calTotal();
		});
		$("#settle_overTime,#settle_waitTime,#paiche_waitTime").live('input propertychange',function(){
			calTotal();
			compute();
		});
		$('#selPrice').live("click",function(){
			$("#paiche_overKm").val($(this).attr("att"));
			compute();
		});
	});
	
	function calTotal(){
		var op=$("#op").val();
		var nTotal=0;
		var nFront=0;
				
		if($("#overKmMoney").length>0){
			nTotal+=parseFloat($("#overKmMoney").val());
		}
		if($("#overTimeMoney").length>0){
			nTotal+=parseFloat($("#overTimeMoney").val());
		}
		if($("#settle_favor").length>0){
			nTotal-=parseFloat($("#settle_favor").val());
		}
		
		if($("#paiche_front").length>0){
			if (op=="front"){
				nTotal+=parseFloat($("#paiche_front").val());
			}else{
				nTotal-=parseFloat($("#paiche_fronted").val());
			}
			
		}
		$.each($('input[name=overKmMoney[]]'), function(i, n){
			nTotal+= $(n).val()=="" ? 0 : parseFloat($(n).val());
		});
		$.each($('input[name=overTimeMoney[]]'), function(i, n){
			nTotal+= $(n).val()=="" ? 0 : parseFloat($(n).val());
		});
		$.each($('input[name=shuntMoney[]]'), function(i, n){
			nTotal+= $(n).val()=="" ? 0 : parseFloat($(n).val());
		});		
		
		$("#infact").val(nTotal);		
	}
	function compute(){//还车计算结果
		var nTotal_ar=0;
		
			var paiche_unlimitKm=$("#paiche_unlimitKm").val();//是否限制公里数
			var settle_startKm=parseFloat(textTrim($("#settle_startKm").val()),10);//开始公里数
			var settle_endKm=parseFloat(textTrim($("#settle_endKm").val()),10);//结束公里数
			
			$("#settle_totalKm").val(settle_endKm-settle_startKm);//总计公里数
			if (paiche_unlimitKm!="Y"){
				var limitKm=parseFloat(textTrim($("#paiche_limitKm").val()),10); //限制公里数
				var overKmPrice=parseFloat(textTrim($("#paiche_overKm").val()),10);//超公里每公里金额
				
				overKm=settle_endKm-settle_startKm-limitKm;
				if (overKm<0) overKm=0;
				$("#overKm").val(overKm);//超公里数
				$("#overKmMoney").val(overKm*overKmPrice);//超公里费用
				nTotal_ar+=overKm*overKmPrice;
			}
			var paiche_unlimitTime=$("#paiche_unlimitTime").val();//是否限时
			if (paiche_unlimitTime!="Y"){
				if ($("#settle_overTime").val()=="") $("#settle_overTime").val(0);
				var paiche_overTime=parseFloat(textTrim($("#paiche_overTime").val()),10);//超时每小时费用
				var settle_overTime=parseFloat(textTrim($("#settle_overTime").val()),10);//超时
				$("#overTimeMoney").val(settle_overTime*paiche_overTime);//超时费用
				nTotal_ar+=settle_overTime*paiche_overTime;
			}
			if($("#settle_waitTime").length>0 || $("#paiche_waitTime").length>0){
				if ($("#settle_waitTime").val()=="") $("#settle_waitTime").val(0);
				if ($("#paiche_waitTime").val()=="") $("#paiche_waitTime").val(0);
				var paiche_waitTime=parseFloat(textTrim($("#paiche_waitTime").val()),10);//待时每小时费用
				var settle_waitTime=parseFloat(textTrim($("#settle_waitTime").val()),10);//待时
				$("#waitTimeMoney").val(settle_waitTime*paiche_waitTime);//待时费用
				nTotal_ar+=settle_waitTime*paiche_waitTime;
				
			}
			if ($("#settle_favor").val()=="") $("#settle_favor").val(0);
			nTotal_ar -= parseFloat(textTrim($("#settle_favor").val()),10);
			if($("#paiche_fronted").length>0){
				nTotal_ar-=parseFloat($("#paiche_fronted").val());
			}
		
		
		$("#infact").val(nTotal_ar);
	}
	function ok(){
	    $("#btn_save").attr("disabled", true);
	    if ($("#settle_startKm").val()==""){
			alert("请输入开始公里数！");
			$('#settle_startKm').focus();
			$("#btn_save").removeAttr("disabled");
			return false;
		}
		if ($("#settle_endKm").val()==""){
			alert("请输入结束公里数！");
			$('#settle_endKm').focus();
			$("#btn_save").removeAttr("disabled");
			return false;
		}
		compute();
		if(!confirm('请仔细核对,一旦提交就无法修改了，确定提交吗？')){
		    $("#btn_save").removeAttr("disabled");
		    return false;
		}
		$("#form1").submit();
	}

</script>
<!-->
</body>
</html>