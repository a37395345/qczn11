<?php /* Smarty version Smarty-3.0.4, created on 2014-09-19 10:02:59
         compiled from "D:\Phpserv\qczn\site\templates\elsker\operator/maint/list.html" */ ?>
<?php /*%%SmartyHeaderCode:1381541b8ed33f1c38-07739528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ad4135d1158c07013afdf96bee0f1d71ee77495' => 
    array (
      0 => 'D:\\Phpserv\\qczn\\site\\templates\\elsker\\operator/maint/list.html',
      1 => 1411091895,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1381541b8ed33f1c38-07739528',
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
  <div class="page_tit">车辆维修保养记录</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <form action="list.php" method="post">
    <div class="list">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
		  <tr>
		    <th>车牌号</th>
		    <th>颜色</th>
		    <th>品牌</th>
		    <th>种类</th>
		    <th>座位数</th>
		    <th>购车日期</th>
		  </tr>
		  <tr>
		    <td>苏D&nbsp;<input type="text" name="car_num" size="3"  /></td>
		    <td><input type="text" name="car_color" size="3"  /></td>
		    <td><input type="text" name="car_brand" size="3" /></td>
		    <td><input type="text" name="car_type" size="3" /></td>
		    <td><input type="text" name="car_seat" size="3"  /></td>
		    <td><input type="text" name="car_saleDate" id="car_saleDate" size="6" onclick="new Calendar().show(this);" readonly="readonly" /></td>
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
    <?php if ($_smarty_tpl->getVariable('op')->value!="account"){?><a href="create.php" class="btn_a"><span>添加</span></a><?php }?>
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
    <th>品牌</th>
    <th>种类</th>
    <th>座位数</th>
    <th>车辆购买日期</th>
    <th>类型</th>
    <th>维修金额</th>
    <th>维修日期</th>
    <th style="text-align:left;" width="38%">维修配件</th>
    <th>备注</th>
    <th>操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['maintenance_id']) ? $_smarty_tpl->tpl_vars['row']->value['maintenance_id'] : null);?>
">
    	<td><input type="checkbox" name="checkbox" id="checkbox<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['maintenance_id']) ? $_smarty_tpl->tpl_vars['row']->value['maintenance_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['maintenance_id']) ? $_smarty_tpl->tpl_vars['row']->value['maintenance_id'] : null);?>
"></td>	
	    <td>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_brand']) ? $_smarty_tpl->tpl_vars['row']->value['car_brand'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_type']) ? $_smarty_tpl->tpl_vars['row']->value['car_type'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_seat']) ? $_smarty_tpl->tpl_vars['row']->value['car_seat'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_saleDate']) ? $_smarty_tpl->tpl_vars['row']->value['car_saleDate'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['maintenance_type']) ? $_smarty_tpl->tpl_vars['row']->value['maintenance_type'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['maintenance_money']) ? $_smarty_tpl->tpl_vars['row']->value['maintenance_money'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['maintenance_date']) ? $_smarty_tpl->tpl_vars['row']->value['maintenance_date'] : null);?>
</td>
		<td style="text-align:left;">
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['fitting_list']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_list'] : null)){?>
	    <table align="left" width="100%" border="0" cellspacing="0" cellpadding="0">
	    <tr>
		    <th>名称</th>
			<th>品牌</th>
			<th>型号规格</th>
			<th>数量</th>
			<th>单位</th>
			<th>单价</th>
			<th>金额</th>
	    </tr>
	    <?php  $_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['row']->value['fitting_list']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_list'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row1']->key => $_smarty_tpl->tpl_vars['row1']->value){
?>
	    <tr>
		    <td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['fitting_name']) ? $_smarty_tpl->tpl_vars['row1']->value['fitting_name'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['fitting_brand']) ? $_smarty_tpl->tpl_vars['row1']->value['fitting_brand'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['fitting_model']) ? $_smarty_tpl->tpl_vars['row1']->value['fitting_model'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['fitting_num']) ? $_smarty_tpl->tpl_vars['row1']->value['fitting_num'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['fitting_unit']) ? $_smarty_tpl->tpl_vars['row1']->value['fitting_unit'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['fitting_price']) ? $_smarty_tpl->tpl_vars['row1']->value['fitting_price'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['fitting_sum']) ? $_smarty_tpl->tpl_vars['row1']->value['fitting_sum'] : null);?>
</td>
 		</tr>
	    <?php }} ?>
	    </table>
	    <?php }?>
	    </td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['maintenance_remark']) ? $_smarty_tpl->tpl_vars['row']->value['maintenance_remark'] : null);?>
</td>
	    <td><?php if ($_smarty_tpl->getVariable('op')->value=="account"){?><a href="javascript:bao(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['maintenance_id']) ? $_smarty_tpl->tpl_vars['row']->value['maintenance_id'] : null);?>
);">报销</a><?php }else{ ?><a href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['maintenance_id']) ? $_smarty_tpl->tpl_vars['row']->value['maintenance_id'] : null);?>
">编辑</a>&nbsp;<a href="javascript:if(confirm('是否确定删除该维修记录？')){window.location.href='delete.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['maintenance_id']) ? $_smarty_tpl->tpl_vars['row']->value['maintenance_id'] : null);?>
';}">删除</a><?php }?>
 </tr>
 <?php }} ?>
 </table>
 </div>

  <div class="Toolbar_inbox">
	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
	<?php if ($_smarty_tpl->getVariable('op')->value!="account"){?><a href="create.php" class="btn_a"><span>添加</span></a><?php }?>
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
	function bao(uid){
		demo_iframe('list.php?task=bao&uid='+uid,'车辆维修费用报销',500,450,'login_js');
	}
	
</script>
<!-->

</body>
</html>