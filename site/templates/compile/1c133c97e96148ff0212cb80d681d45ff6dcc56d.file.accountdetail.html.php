<?php /* Smarty version Smarty-3.0.4, created on 2018-07-28 10:24:43
         compiled from "D:\web\site\templates\elsker\operator/report/accountdetail.html" */ ?>
<?php /*%%SmartyHeaderCode:322665b5bd3eb328103-49527212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c133c97e96148ff0212cb80d681d45ff6dcc56d' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/report/accountdetail.html',
      1 => 1532744601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '322665b5bd3eb328103-49527212',
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
<div class="so_main">
  <div class="page_tit"><?php echo $_smarty_tpl->getVariable('PAGETITLE')->value;?>
</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <div class="form2">
        <form action="detail.php" method="get">
            <input type="hidden" name="bankid" value="<?php echo $_smarty_tpl->getVariable('bankid')->value;?>
" />
            <input type="hidden" name="op_flag" value="<?php echo $_smarty_tpl->getVariable('op_flag')->value;?>
" />
            <?php if ($_smarty_tpl->getVariable('op_flag')->value=='detail'){?>
            <dl class="lineD">
	            <dt>开始日期：</dt>
	            <dd><input type="text" name="startdate" size="16" value="<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
" onClick="calendar.show(this);" readonly="readonly" /></dd>
            </dl>
            <dl class="lineD">
	            <dt>截止日期：</dt>
	            <dd><input type="text" name="enddate" size="16" value="<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
" onClick="calendar.show(this);" readonly="readonly" /></dd>
            </dl>
            <dl class="lineD">
	            <dt>单位名称：</dt>
	            <dd>
	            <input type="text" name="name" size="16"  />(支持模糊查询)
	            </dd>
            </dl>
            <?php }?>
            <?php if ($_smarty_tpl->getVariable('op_flag')->value=='daily'){?>
            <dl class="lineD">
	            <dt>记账日期：</dt>
	            <dd><input type="text" name="date" size="16" value="<?php echo $_smarty_tpl->getVariable('date')->value;?>
" onClick="calendar.show(this);" readonly="readonly" /></dd>
            </dl>
            <?php }?>
            <div class="page_btm">
            <input class="btn_b" type="submit" value="确定">
            </div>            
        </form>
    </div>
</div>

  <div class="Toolbar_inbox">
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">序号</th>
    <th width="13%">发生时间</th>
	<?php if ($_smarty_tpl->getVariable('op_flag')->value=='detail'){?>
	<th width="6%">收入</th>
	<th width="6%">支出</th>
	<th width="6%">账户余额</th>
	<?php }?>
	<?php if ($_smarty_tpl->getVariable('op_flag')->value=='daily'){?>
	<th width="6%">增加金额</th>
	<th width="6%">减少金额</th>
	<th width="6%">账户余额</th>
	<?php }?>
	<th>往来单位</th>
	<th>摘要</th>
	<th width="11%">关联业务</th>
	<th width="11%">业务类型</th>
  </tr>
  <?php if ($_smarty_tpl->getVariable('list')->value){?>
	  <tr overstyle='on' id="0">
	  	<td colspan="4" style="text-align:left;">此前余额</td>
	  	<td><?php echo $_smarty_tpl->getVariable('beforetotal')->value;?>
<?php $_smarty_tpl->tpl_vars["nowtotal"] = new Smarty_variable($_smarty_tpl->getVariable('beforetotal')->value, null, null);?><?php $_smarty_tpl->tpl_vars["totalin"] = new Smarty_variable(0, null, null);?><?php $_smarty_tpl->tpl_vars["totalout"] = new Smarty_variable(0, null, null);?></td>
	  	<td colspan="4">&nbsp;</td>
	  </tr>
  <?php }?>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
    	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['add_time']) ? $_smarty_tpl->tpl_vars['row']->value['add_time'] : null);?>
</td>
	  	<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['bill_type']) ? $_smarty_tpl->tpl_vars['row']->value['bill_type'] : null)==99){?>
	  	<td>&nbsp;</td>
	  	<td>&nbsp;</td>
	  	<td><?php echo number_format((isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null),2,".",'');?>
</td>
	  	<?php }else{ ?>
		<?php $_smarty_tpl->tpl_vars['nowtotal'] = new Smarty_variable($_smarty_tpl->getVariable('nowtotal')->value+(isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null), null, null);?>
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null)>0){?>
		<?php $_smarty_tpl->tpl_vars['totalin'] = new Smarty_variable($_smarty_tpl->getVariable('totalin')->value+(isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null), null, null);?>
		<td><?php echo number_format((isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null),2,".",'');?>
</td>
		<td>&nbsp;</td>
		<?php }else{ ?>
		<?php $_smarty_tpl->tpl_vars['totalout'] = new Smarty_variable($_smarty_tpl->getVariable('totalout')->value+-1*(isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null), null, null);?>
		<td>&nbsp;</td>
		<td><?php echo number_format(-1*(isset($_smarty_tpl->tpl_vars['row']->value['money']) ? $_smarty_tpl->tpl_vars['row']->value['money'] : null),2,".",'');?>
</td>
		<?php }?>
		<td><?php echo number_format($_smarty_tpl->getVariable('nowtotal')->value,2,".",'');?>
</td>
		<?php }?>
		<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null)!=''){?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null);?>
<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['paiche_client_name']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_client_name'] : null)!=''){?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_client_name']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_client_name'] : null);?>
<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['bro_name']) ? $_smarty_tpl->tpl_vars['row']->value['bro_name'] : null)!=''){?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bro_name']) ? $_smarty_tpl->tpl_vars['row']->value['bro_name'] : null);?>
<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['paiche_linker']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linker'] : null)!=''){?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linker']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linker'] : null);?>
<?php }?><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null)!=''){?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['siji']) ? $_smarty_tpl->tpl_vars['row']->value['siji'] : null)!=''){?>-<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['siji']) ? $_smarty_tpl->tpl_vars['row']->value['siji'] : null);?>
<?php }?><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null)!=''){?>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
<?php }?></td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>
</td>
		<td style="text-align:left;"><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['bill_type']) ? $_smarty_tpl->tpl_vars['row']->value['bill_type'] : null)==1){?><a href="../../finance/baoxiao/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bill_id']) ? $_smarty_tpl->tpl_vars['row']->value['bill_id'] : null);?>
" target="blank"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_code']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_code'] : null);?>
</a>
		<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['bill_type']) ? $_smarty_tpl->tpl_vars['row']->value['bill_type'] : null)==5){?><a href="../../business/batchcountdetail.php?pcode=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bill_code']) ? $_smarty_tpl->tpl_vars['row']->value['bill_code'] : null);?>
" target="blank"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bill_code']) ? $_smarty_tpl->tpl_vars['row']->value['bill_code'] : null);?>
</a>
		<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['bill_type']) ? $_smarty_tpl->tpl_vars['row']->value['bill_type'] : null)==6){?><a href="../../business/shuntcountdetail.php?pcode=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bill_code']) ? $_smarty_tpl->tpl_vars['row']->value['bill_code'] : null);?>
" target="blank"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bill_code']) ? $_smarty_tpl->tpl_vars['row']->value['bill_code'] : null);?>
</a>
		<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['bill_type']) ? $_smarty_tpl->tpl_vars['row']->value['bill_type'] : null)==2||(isset($_smarty_tpl->tpl_vars['row']->value['bill_type']) ? $_smarty_tpl->tpl_vars['row']->value['bill_type'] : null)==3){?><a href="../../finance/change/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bill_id']) ? $_smarty_tpl->tpl_vars['row']->value['bill_id'] : null);?>
" target="blank"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['change_code']) ? $_smarty_tpl->tpl_vars['row']->value['change_code'] : null);?>
</a>
		<?php }else{ ?>
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null)>0){?><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_type']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_type'] : null)==4||(isset($_smarty_tpl->tpl_vars['row']->value['paiche_type']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_type'] : null)==5){?><a href="../../busilong/list.php?task=paichedetail&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="blank"><?php }else{ ?><a href="../../business/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="blank"><?php }?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_contractNum'] : null);?>
</a><?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_contractNum'] : null);?>
<?php }?>
		
		<?php }?></td>
		<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['bill_type']) ? $_smarty_tpl->tpl_vars['row']->value['bill_type'] : null)==1){?>其他费用报销<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['bill_type']) ? $_smarty_tpl->tpl_vars['row']->value['bill_type'] : null)==4){?>司机出车报销<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['bill_type']) ? $_smarty_tpl->tpl_vars['row']->value['bill_type'] : null)==2){?>资金变动<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['bill_type']) ? $_smarty_tpl->tpl_vars['row']->value['bill_type'] : null)==3){?>其他收入<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['bill_type']) ? $_smarty_tpl->tpl_vars['row']->value['bill_type'] : null)==5){?>批量结算<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['bill_type']) ? $_smarty_tpl->tpl_vars['row']->value['bill_type'] : null)==6){?>调车结算<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_name']) ? $_smarty_tpl->tpl_vars['row']->value['item_name'] : null);?>
<?php }?></td>
  </tr>  
 <?php }} ?>
 <?php if ($_smarty_tpl->getVariable('list')->value&&$_smarty_tpl->getVariable('op_flag')->value=='detail'){?>
 	  <tr overstyle='on' id="0">
	  	<td colspan="9" style="text-align:left;"><?php echo $_smarty_tpl->getVariable('startdate')->value;?>
到<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
这段时间收支金额合计:总收入:<font color="#BB2200" size="6"><?php echo $_smarty_tpl->getVariable('totalin')->value;?>
</font>元&nbsp;&nbsp;总支出:<font color="#BB2200" size="6"><?php echo $_smarty_tpl->getVariable('totalout')->value;?>
</font>元</td>
	  </tr>
  <?php }?>
 </table>
 </div>
</div>
<!-->
<script>
	//鼠标移动表格效果
	$(document).ready(function(){
        $("a.zoomIn").fancybox({
            'overlayShow'   : false,
            'transitionIn'  : 'elastic',
            'transitionOut' : 'elastic'
        });         
        
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

	
    //导出Excel
    function excel(){
    	
    }
        
    var isSearchHidden = 1;
    function searchNews() {
      if(isSearchHidden == 1) {
        $("#searchTopic_div").slideDown("fast");
        isSearchHidden = 0;
      }else {
        $("#searchTopic_div").slideUp("fast");
        isSearchHidden = 1;
      }
    }         
	
	
	function folder(type, _this) {
		$('#search_'+type).slideToggle('fast');
		if ($(_this).html() == '展开') {
			$(_this).html('收起');
		}else {
			$(_this).html('展开');
		}
		
	}

</script>
<!-->

</body>
</html>