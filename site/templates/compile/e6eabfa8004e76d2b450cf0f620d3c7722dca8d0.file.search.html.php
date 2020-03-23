<?php /* Smarty version Smarty-3.0.4, created on 2016-02-01 15:13:12
         compiled from "D:\web\site\templates\elsker\operator/sales/sms/search.html" */ ?>
<?php /*%%SmartyHeaderCode:2674456af05884586a2-66920363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6eabfa8004e76d2b450cf0f620d3c7722dca8d0' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/sales/sms/search.html',
      1 => 1447233610,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2674456af05884586a2-66920363',
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
  <div class="page_tit">短信发送记录</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <div class="form2">
    <form action="search.php" method="get">
    	<dl class="lineD">
            <dt>日期范围：</dt>
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
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">
		<input type="checkbox" id="checkbox_handle" onclick="checkAll(this)" value="0">
    	<label for="checkbox"></label>
	</th>
	<th>发送手机号</th>
    <th>发送给</th>
    <th>优先级</th>
	<th>当前状态</th>
	<th>提交时间</th>
	<th>提交人</th>
	<th>发送时间</th>
	<th>发送次数</th>
	<th width="40%">发送内容</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['sms_id']) ? $_smarty_tpl->tpl_vars['row']->value['sms_id'] : null);?>
">
	<td><input type="checkbox" name="checkbox" id="checkbox<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['sms_id']) ? $_smarty_tpl->tpl_vars['row']->value['sms_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['sms_id']) ? $_smarty_tpl->tpl_vars['row']->value['sms_id'] : null);?>
"></td>
	<td style="text-align:left;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['sms_tophone']) ? $_smarty_tpl->tpl_vars['row']->value['sms_tophone'] : null);?>
</td>
	<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null)!=''){?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null);?>
-<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_Mlinker']) ? $_smarty_tpl->tpl_vars['row']->value['client_Mlinker'] : null);?>
<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
<?php }?></td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['sms_priority']) ? $_smarty_tpl->tpl_vars['row']->value['sms_priority'] : null);?>
</td>
	<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['sms_state']) ? $_smarty_tpl->tpl_vars['row']->value['sms_state'] : null)==1){?>已发送<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['sms_state']) ? $_smarty_tpl->tpl_vars['row']->value['sms_state'] : null)==-1){?>发送失败<?php }else{ ?>未发送<?php }?></td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['sms_inputdate']) ? $_smarty_tpl->tpl_vars['row']->value['sms_inputdate'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['sms_inputuser']) ? $_smarty_tpl->tpl_vars['row']->value['sms_inputuser'] : null);?>
</td>
	<td ><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['sms_senddate']) ? $_smarty_tpl->tpl_vars['row']->value['sms_senddate'] : null);?>
</td>
	<td ><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['sms_sendcount']) ? $_smarty_tpl->tpl_vars['row']->value['sms_sendcount'] : null);?>
</td>
	<td style="text-align:left;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['sms_content']) ? $_smarty_tpl->tpl_vars['row']->value['sms_content'] : null);?>
</td>
</tr>
 <?php }} ?>
 </table>
 </div>

  <div class="Toolbar_inbox">
	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
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
    function select_emp(){
    	demo_iframe('../../business/selectemp.php?sel_type=e','选择业务员',650,380,'login_js');
    }
</script>
<!-->

</body>
</html>