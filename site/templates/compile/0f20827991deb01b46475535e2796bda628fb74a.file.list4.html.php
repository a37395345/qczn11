<?php /* Smarty version Smarty-3.0.4, created on 2019-10-14 16:00:36
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/finance/baoxiao/list4.html" */ ?>
<?php /*%%SmartyHeaderCode:9755163365da42b24ef01b5-52246533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f20827991deb01b46475535e2796bda628fb74a' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/finance/baoxiao/list4.html',
      1 => 1569749247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9755163365da42b24ef01b5-52246533',
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
  <div class="page_tit">待跟踪费用报销记录</div>
  <div class="Toolbar_inbox">
  	<div class="page right">&nbsp;&nbsp;&nbsp;</div>
  	&nbsp;&nbsp;<a onclick="location.href='list1.php?search_user=<?php echo $_smarty_tpl->getVariable('search_user')->value;?>
';" href="javascript:void(0);" class="btn_a"><span>返回</span></a>
  </div>
  <div class="list">
  <?php if ($_smarty_tpl->getVariable('list1')->value){?>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th width="7%">审核日期</th>
    <th width="7%">报销日期</th>
    <th width="4%">报销人</th>
	<th width="4%">桥路费</th>
	<th width="4%">停车费</th>
	<th width="4%">油费</th>
	<th width="4%">住宿费</th>
	<th width="4%">餐费</th>
	<th width="8%">付款方式</th>
	<th width="9%">合同号</th>
	<th width="12%">用车时间</th>
	<th width="15%">开车线路</th>
	<th>报销备注</th>
	<th class="line_l" width="12%">操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list1')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
">
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isCheckTime']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isCheckTime'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_date']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_date'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_roadQiao']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_roadQiao'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_stopCar']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_stopCar'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_oil']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_oil'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_room']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_room'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_meal']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_meal'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['payment_name']) ? $_smarty_tpl->tpl_vars['row']->value['payment_name'] : null);?>
<hr/><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_name']) ? $_smarty_tpl->tpl_vars['row']->value['bank_name'] : null);?>
</td>
	<td><a href="../../business/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiaoPaicheId']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiaoPaicheId'] : null);?>
" target="_blank"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiaoPaicheContractNum']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiaoPaicheContractNum'] : null);?>
</a></td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_startDate'] : null);?>
<hr /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_endDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_endDate'] : null);?>
</td>
	<td style="text-align:left;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_line']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_line'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_remarks']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_remarks'] : null);?>
</td>
	<td>
	<a href="detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
" target="_blank">明细</a>&nbsp;|&nbsp;<a href="javascript:trancheck(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
);">取消跟踪</a>
	</td>
</tr>
 <?php }} ?>
 </table>
 <br /><br />
 <?php }?>
 <?php if ($_smarty_tpl->getVariable('list2')->value){?>
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th width="7%">审核日期</th>
	<th width="7%">报销日期</th>
	<th width="4%">报销人</th>
	<th width="10%">费用类型</th>
	<th width="5%">金额</th>
	<th width="13%">付款方式</th>
	<th width="25%">报销内容</th>
	<th width="15%">报销备注</th>
	<th width="4%">店铺</th>
	<th class="line_l" width="15%">操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list2')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
">
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isCheckTime']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isCheckTime'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_date']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_date'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_type']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_type'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_money']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_money'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['payment_name']) ? $_smarty_tpl->tpl_vars['row']->value['payment_name'] : null);?>
<hr/><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_name']) ? $_smarty_tpl->tpl_vars['row']->value['bank_name'] : null);?>
</td>
	<td style="text-align:left;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_content']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_content'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_remarks']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_remarks'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null);?>
</td>
	<td>
	<a href="detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
" target="_blank">明细</a>&nbsp;|&nbsp;<a href="javascript:trancheck(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
);">取消跟踪</a>
	</td>
</tr>
 <?php }} ?>
 </table>
 <?php }?>
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
	
	function checkAll(o){
		if( o.checked == true ){
			$('input[name="checkbox"]').attr('checked','true');
			$('tr[overstyle="on"]').addClass("bg_on");
		}else{
			$('input[name="checkbox"]').removeAttr('checked');
			$('tr[overstyle="on"]').removeClass("bg_on");
		}
	}
	
	//获取已选择记录的ID数组
	function getChecked() {
		var uids = new Array();
		$.each($('table input:checked'), function(i, n){
			uids.push( $(n).val() );
		});
		return uids;
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
	
	function trancheck(bid){
		if(confirm('是否确定取消跟踪该报销单？')){
			$.ajax({
	      		  type:'POST',
	      		  url:'list.php',
	      		  data:{"task":"cancel_track","uid":bid},
	      		  dataType:"json",
	      		  cache: false,
	      		  async: false,
	      		  error: function(){
	      		      return false;
	      		  },
	      		  success:function(jsonmsg){
	      		      if (jsonmsg.result==1){
	      		    	  alert("操作成功！");
	      					location.reload();
	      		      }else{
	      			  		
	      		      }
	      		  }
	      	});
		}
	}
	
</script>
<!-->

</body>
</html>