<?php /* Smarty version Smarty-3.0.4, created on 2014-10-10 16:55:29
         compiled from "D:\czyhqc\site\templates\elsker\operator/machine/breaklist.html" */ ?>
<?php /*%%SmartyHeaderCode:3145954379f0179ad79-63497960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ad2074e54bfbf655ec755703b4e291974a5cbf1' => 
    array (
      0 => 'D:\\czyhqc\\site\\templates\\elsker\\operator/machine/breaklist.html',
      1 => 1406604402,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3145954379f0179ad79-63497960',
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
<link href="../../../css/style.css" rel="stylesheet" type="text/css">
<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
</head>
<body>
<div class="so_main">
  <div class="page_tit">车辆违章记录</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <div class="form2">
    <form action="list.php?task=breaklist" method="get">
    	<dl class="lineD">
            <dt>违章日期：</dt>
            <dd>
            <input id="search_startDate" type="text" value="" name="search_startDate" onClick="calendar.show(this);">到
            <input id="search_endDate" type="text" value="" name="search_endDate" onClick="calendar.show(this);">
            </dd>
         </dl>
         <dl class="lineD">
            <dt>违章车辆：</dt>
            <dd>
            <input id="title" type="text" value="" name="title">
            <p>支持模糊查询</p>
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
    <?php if ($_smarty_tpl->getVariable('op')->value=="account"){?>
    <a href="javascript:breakaccount('');" class="btn_a"><span>结账</span></a>
    <?php }else{ ?>
    <a href="create.php?task=breakcreate" class="btn_a"><span>添加</span></a>
    <?php }?>
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>
	
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">
		<input type="checkbox" id="checkbox_handle" onclick="checkAll(this)" value="0">
    	<label for="checkbox"></label>
	</th>
	<th>车牌号</th>
	<th>违章时间</th>
	<th>违章金额</th>
	<th>承租人</th>
	<th>用车类型</th>
	<th>司机</th>
	<th>违章备注</th>
	<th>状态</th>
	<th class="line_l">操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_id'] : null);?>
">
    	<td><input type="checkbox" name="checkbox" id="checkbox<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_id'] : null);?>
"></td>	
	    <td>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_date']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_date'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money'] : null);?>
</td>
		<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null)==''){?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linker']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linker'] : null);?>
<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null);?>
<?php }?></td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_name']) ? $_smarty_tpl->tpl_vars['row']->value['item_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['siji']) ? $_smarty_tpl->tpl_vars['row']->value['siji'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_remarks']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_remarks'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_endname']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_endname'] : null);?>
</td>
		<td><?php if ($_smarty_tpl->getVariable('op')->value=="account"){?><a href="javascript:breakaccount(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_id'] : null);?>
);">结账</a><?php }else{ ?>
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['breakrules_end']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_end'] : null)==0){?><a href="modify.php?task=breakmodify&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_id'] : null);?>
">编辑</a>&nbsp;<a href="javascript:if(confirm('是否确定删除该违章记录？')){window.location.href='delete.php?task=breakdelete&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_id'] : null);?>
';}">删除</a><?php }?>
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
	<?php if ($_smarty_tpl->getVariable('op')->value=="account"){?><a href="javascript:breakaccount('');" class="btn_a"><span>结账</span></a><?php }else{ ?><a href="create.php?task=breakcreate" class="btn_a"><span>添加</span></a><?php }?>
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
	
	//获取已选择用户的ID数组
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
	function folder(type, _this) {
		$('#search_'+type).slideToggle('fast');
		if ($(_this).html() == '展开') {
			$(_this).html('收起');
		}else {
			$(_this).html('展开');
		}
		
	}
	function breakaccount(pid){
		var url="";
		if (pid==""){
			pid = pid ? pid : getChecked();
			pid = pid.toString();
	        if(pid == ''){
	        	alert("请先选择违章记录！");
	        	return false;
	        }
	        url="account.php?multi=1&bid="+pid;
		}else{
			url="account.php?bid="+pid;
		}
		demo_iframe(url,'车辆违章结算',550,380,'login_js');
	}
	
</script>
<!-->

</body>
</html>