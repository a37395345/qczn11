<?php /* Smarty version Smarty-3.0.4, created on 2015-10-24 16:09:34
         compiled from "D:\czyhqc\site\templates\elsker\operator/finance/monthaccount/list.html" */ ?>
<?php /*%%SmartyHeaderCode:12858562b3cbe757cb0-73616781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b4b12aaa1da9313f60cf010b3dd4f5bbe8b866c' => 
    array (
      0 => 'D:\\czyhqc\\site\\templates\\elsker\\operator/finance/monthaccount/list.html',
      1 => 1445673880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12858562b3cbe757cb0-73616781',
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
<script type="text/javascript" src="../../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
</head>
<body>
<div class="so_main">
  <div class="page_tit"><?php if ($_smarty_tpl->getVariable('flag')->value=="month"){?>长期用车<?php }?><?php if ($_smarty_tpl->getVariable('flag')->value=="batch"){?>临时用车批量<?php }?>月结清单</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <div class="form2">
        <form action="list.php?task=list" method="get">
        	<dl class="lineD">
	          <dt>用车单位：</dt>
	          <dd>
	              <select name="company" >
	                  <option value="0" <?php if ($_smarty_tpl->getVariable('companyid')->value==0){?>selected<?php }?>>请选择</option>
	                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('companylist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_id']) ? $_smarty_tpl->tpl_vars['rows']->value['client_id'] : null);?>
" <?php if ($_smarty_tpl->getVariable('companyid')->value==(isset($_smarty_tpl->tpl_vars['rows']->value['client_id']) ? $_smarty_tpl->tpl_vars['rows']->value['client_id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_name']) ? $_smarty_tpl->tpl_vars['rows']->value['client_name'] : null);?>
</option>
	                  <?php }} ?>
	              </select>
	          </dd>
	        </dl>
	    	<div class="page_btm">
            	<input class="btn_b" type="submit" value="确定">
            </div>
        </form>
    </div>
  </div>
  <div class="Toolbar_inbox">
  	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>
    <a href="javascript:javascript:history.back(-1);" class="btn_a">返回</a>
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th>序号</th>
	<th>单位</th>
	<?php if ($_smarty_tpl->getVariable('flag')->value=="month"){?>
	<th>车辆</th>
	<th>用车时间</th>
	<?php }?>
	<?php if ($_smarty_tpl->getVariable('flag')->value=="batch"){?>
	<th>日期范围</th>
	<?php }?>
	<th>合计金额</th>
	<th>优惠金额</th>
	<th>结算金额</th>
	<th>开票金额</th>
	<th>已结算</th>
	<th>剩余金额</th>
	<th>发票号码</th>
	<th>开票日期</th>
	<th class="line_l">操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month_id']) ? $_smarty_tpl->tpl_vars['row']->value['month_id'] : null);?>
">    	
	  	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null);?>
</td>
	  	<?php if ($_smarty_tpl->getVariable('flag')->value=="month"){?>
	  	<td>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_startDate_format']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_startDate_format'] : null);?>
~<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_endDate_format']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_endDate_format'] : null);?>
</td>
	  	<?php }?>
	  	<?php if ($_smarty_tpl->getVariable('flag')->value=="batch"){?>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_startDate']) ? $_smarty_tpl->tpl_vars['row']->value['settle_startDate'] : null);?>
~~<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_endDate']) ? $_smarty_tpl->tpl_vars['row']->value['settle_endDate'] : null);?>
</td>
		<?php }?>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_total']) ? $_smarty_tpl->tpl_vars['row']->value['settle_total'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_favor']) ? $_smarty_tpl->tpl_vars['row']->value['settle_favor'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_infact']) ? $_smarty_tpl->tpl_vars['row']->value['settle_infact'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_billMoney']) ? $_smarty_tpl->tpl_vars['row']->value['settle_billMoney'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_billMoney_have']) ? $_smarty_tpl->tpl_vars['row']->value['settle_billMoney_have'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_billMoney']) ? $_smarty_tpl->tpl_vars['row']->value['settle_billMoney'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['settle_billMoney_have']) ? $_smarty_tpl->tpl_vars['row']->value['settle_billMoney_have'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_billNum']) ? $_smarty_tpl->tpl_vars['row']->value['settle_billNum'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['settle_billDate']) ? $_smarty_tpl->tpl_vars['row']->value['settle_billDate'] : null);?>
</td>
		<td><a href="javascript:month(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month_id']) ? $_smarty_tpl->tpl_vars['row']->value['month_id'] : null);?>
);">结算</a><?php if ($_smarty_tpl->getVariable('flag')->value=="batch"){?>&nbsp;&nbsp;<a href="../../business/batchcountdetail.php?pcode=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['month_code']) ? $_smarty_tpl->tpl_vars['row']->value['month_code'] : null);?>
" target="blank">明细</a><?php }?></td>
 </tr>
 <?php }} ?>
 </table>
 </div>
  <div class="Toolbar_inbox">
	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
	&nbsp;
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
	
	function month(uid){
		demo_iframe('list.php?task=month&uid='+uid,'月结结算',650,500,'login_js');
	}

</script>
<!-->

</body>
</html>