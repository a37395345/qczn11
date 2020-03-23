<?php /* Smarty version Smarty-3.0.4, created on 2015-11-13 17:16:35
         compiled from "D:\web\site\templates\elsker\operator/finance/leave/list.html" */ ?>
<?php /*%%SmartyHeaderCode:247975645aa73795761-17721905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0af0ee075aee9f098d77452eef486a41deacf431' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/finance/leave/list.html',
      1 => 1447233604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '247975645aa73795761-17721905',
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
  <div class="page_tit">员工请假管理</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <div class="form2">
    <form action="list.php" method="get">
    <input type="hidden" id="op" name="op" value="<?php echo $_smarty_tpl->getVariable('op')->value;?>
"/>
    	<dl class="lineD">
            <dt>请假日期：</dt>
            <dd>
            <input id="search_startDate" type="text" value="" name="search_startDate" onClick="calendar.show(this);">到
            <input id="search_endDate" type="text" value="" name="search_endDate" onClick="calendar.show(this);">
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
  	<a href="create.php" class="btn_a"><span>添加</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th>请假人</th>
	<th>请假日期</th>
	<th>请假类型</th>
	<th>请假天数</th>
	<th>扣除金额</th>
	<th>审核结果</th>
	<th>备注</th>
	<th class="line_l">操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['leave_id']) ? $_smarty_tpl->tpl_vars['row']->value['leave_id'] : null);?>
">
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['leave_date']) ? $_smarty_tpl->tpl_vars['row']->value['leave_date'] : null);?>
</td>
	<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['leave_item']) ? $_smarty_tpl->tpl_vars['row']->value['leave_item'] : null)==1){?>病假<?php }else{ ?>事假<?php }?></td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['leave_day']) ? $_smarty_tpl->tpl_vars['row']->value['leave_day'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['leave_money']) ? $_smarty_tpl->tpl_vars['row']->value['leave_money'] : null);?>
</td>
	<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['leave_isAgree']) ? $_smarty_tpl->tpl_vars['row']->value['leave_isAgree'] : null)==0){?>未审核<?php }else{ ?><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['leave_isAgree']) ? $_smarty_tpl->tpl_vars['row']->value['leave_isAgree'] : null)==-1){?>审核未通过<?php }else{ ?>审核通过<?php }?><hr /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['leave_isAgreeTime']) ? $_smarty_tpl->tpl_vars['row']->value['leave_isAgreeTime'] : null);?>
&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['leave_isAgreeMan']) ? $_smarty_tpl->tpl_vars['row']->value['leave_isAgreeMan'] : null);?>
<?php }?></td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['leave_remarks']) ? $_smarty_tpl->tpl_vars['row']->value['leave_remarks'] : null);?>
</td>
	<td>
	<?php if ($_smarty_tpl->getVariable('op')->value=="check"){?>
	<a href="javascript:check(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['leave_id']) ? $_smarty_tpl->tpl_vars['row']->value['leave_id'] : null);?>
);">审核</a>
	<?php }else{ ?>
	<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['leave_isAgree']) ? $_smarty_tpl->tpl_vars['row']->value['leave_isAgree'] : null)==0){?>
	<a href="list.php?task=check&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['leave_id']) ? $_smarty_tpl->tpl_vars['row']->value['leave_id'] : null);?>
">审核</a>&nbsp;<a href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['leave_id']) ? $_smarty_tpl->tpl_vars['row']->value['leave_id'] : null);?>
">编辑</a>&nbsp;
	<a href="javascript:if(confirm('是否确定删除该请假记录？')){window.location.href='delete.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['leave_id']) ? $_smarty_tpl->tpl_vars['row']->value['leave_id'] : null);?>
&item=<?php echo $_smarty_tpl->getVariable('item')->value;?>
';}">删除</a>
	<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['leave_isAgree']) ? $_smarty_tpl->tpl_vars['row']->value['leave_isAgree'] : null)==1){?>
	<a href="javascript:if(confirm('是否确定反审核该请假记录？')){window.location.href='recheck.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['leave_id']) ? $_smarty_tpl->tpl_vars['row']->value['leave_id'] : null);?>
&item=<?php echo $_smarty_tpl->getVariable('item')->value;?>
';}">反审核</a>
	<?php }?>
	<?php }?>
	</td>
</tr>
 <?php }} ?>
 </table>
 </div>

  <div class="Toolbar_inbox">
	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
	<a href="create.php" class="btn_a"><span>添加</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>
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
   		
	function check(bid){
		demo_iframe('list.php?task=check&uid='+bid,'请假审核',550,420,'login_js');
	}
	
</script>
<!-->

</body>
</html>