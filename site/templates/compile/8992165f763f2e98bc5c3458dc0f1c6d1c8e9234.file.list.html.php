<?php /* Smarty version Smarty-3.0.4, created on 2019-12-24 17:11:06
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/gps/list.html" */ ?>
<?php /*%%SmartyHeaderCode:159995e01d62abbb0f4-45381754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8992165f763f2e98bc5c3458dc0f1c6d1c8e9234' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/gps/list.html',
      1 => 1571707175,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159995e01d62abbb0f4-45381754',
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
<script type="text/javascript" src="../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
</head>
<body>
<div class="so_main">
  <div class="page_tit">车辆定位系统安装情况</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <form action="list.php" method="get">
    <input type="hidden" name="car_status" value="<?php echo $_smarty_tpl->getVariable('car_status')->value;?>
"  />
    <div class="list">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
		  <tr>
		    <th>手机号</th>
		    <th>车牌号</th>
		    <th>注册日期</th>
		  </tr>
		  <tr>
		    <td><input type="text" name="mobile" size="15"  /></td>
		    <td>苏D&nbsp;<input type="text" name="car_num" size="3"  /></td>
		    <td><input type="text" name="car_cartDate" id="car_cartDate" size="6" onclick="new Calendar().show(this);"  /></td>
		   </tr>
		  <tr>
		    <td colspan="13"><input type="submit" class="sub" value="查 询" /></td>
		  <tr>
		</table>
    </div>
    </form>
  </div>
  <div class="Toolbar_inbox">
  	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
    <a href="list.php?task=create" class="btn_a"><span>添加</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>
	<input class="btn_b" type="button" value="返回" name="btnback" onclick="javascript:window.location.href='first.php';">
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">序号	</th>
	<th>车牌号</th>
    <th>品牌</th>
    <th style="text-align:left;" width="80%">定位系统安装情况</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
">
    	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>	
	    <td>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_brand']) ? $_smarty_tpl->tpl_vars['row']->value['car_brand'] : null);?>
</td>
		<td style="text-align:left;">
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_gpsList']) ? $_smarty_tpl->tpl_vars['row']->value['car_gpsList'] : null)){?>
	    <table align="left" width="100%" border="0" cellspacing="0" cellpadding="0">
	    <tr>
		    <th width="9%">安装日期</th>
		    <th width="10%">设备类型</th>
		    <th width="14%">设备号</th>
			<th width="14%">安装位置</th>
			<th width="9%">设备到期</th>
			<th width="10%">手机号码</th>
			<th width="8%">余额</th>
			<th width="8%">套餐</th>
			<th width="9%">启用日期</th>
			<th>操作</th>
	    </tr>
	    <?php  $_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['row']->value['car_gpsList']) ? $_smarty_tpl->tpl_vars['row']->value['car_gpsList'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row1']->key => $_smarty_tpl->tpl_vars['row1']->value){
?>
	    <tr>
		    <td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['gps_installDate']) ? $_smarty_tpl->tpl_vars['row1']->value['gps_installDate'] : null);?>
</td>
		    <td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['gps_model']) ? $_smarty_tpl->tpl_vars['row1']->value['gps_model'] : null);?>
</td>
		    <td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['gps_serial']) ? $_smarty_tpl->tpl_vars['row1']->value['gps_serial'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['gps_site']) ? $_smarty_tpl->tpl_vars['row1']->value['gps_site'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['gps_end']) ? $_smarty_tpl->tpl_vars['row1']->value['gps_end'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['gps_cardno']) ? $_smarty_tpl->tpl_vars['row1']->value['gps_cardno'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['gps_money']) ? $_smarty_tpl->tpl_vars['row1']->value['gps_money'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['gps_package']) ? $_smarty_tpl->tpl_vars['row1']->value['gps_package'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['gps_start']) ? $_smarty_tpl->tpl_vars['row1']->value['gps_start'] : null);?>
</td>
			<td><a href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['gps_id']) ? $_smarty_tpl->tpl_vars['row1']->value['gps_id'] : null);?>
">编辑</a>&nbsp;<a href="javascript:if(confirm('是否确定删除该GPS记录？')){window.location.href='delete.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['gps_id']) ? $_smarty_tpl->tpl_vars['row1']->value['gps_id'] : null);?>
';}">删除</a>
 		</tr>
	    <?php }} ?>
	    </table>
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
	<a href="list.php?task=create" class="btn_a"><span>添加</span></a>
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