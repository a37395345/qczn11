<?php /* Smarty version Smarty-3.0.4, created on 2019-09-29 17:31:53
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/fitting/applist.html" */ ?>
<?php /*%%SmartyHeaderCode:14317952065d907a093e9f90-17810354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '208f6ac3d6b8943d30f3a0ee8f6410aebc23e6c1' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/fitting/applist.html',
      1 => 1569749218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14317952065d907a093e9f90-17810354',
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
  <div class="page_tit">配件采购申请记录</div>
  <div class="Toolbar_inbox">
  	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
  	<?php if ($_smarty_tpl->getVariable('op')->value=="check"){?><a href="javascript:void(0);" class="btn_a" onclick="check(0);"><span>批量审核</span></a>
  	<?php }elseif($_smarty_tpl->getVariable('op')->value=="account"){?><a href="javascript:void(0);" class="btn_a" onclick="account(0);"><span>批量处理</span></a>
  	<?php }else{ ?><a href="list.php" class="btn_a"><span>返回</span></a><?php }?>
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">
		<input type="checkbox" id="checkbox_handle" onclick="checkAll(this)" value="0">
    	<label for="checkbox"></label>
	</th>
	<th>申请日期</th>
	<th>申请人</th>
	<th>合计数量</th>
	<th>合计金额</th>
	<th style="text-align:left;">详细</th>
	<?php if ($_smarty_tpl->getVariable('op')->value!="check"&&$_smarty_tpl->getVariable('op')->value!="account"){?>
	<th>状态</th>
	<?php }?>
	<th class="line_l">操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_appid']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_appid'] : null);?>
">
    	<td><input type="checkbox" name="checkbox" id="checkbox<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_appid']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_appid'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_appid']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_appid'] : null);?>
"></td>	
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_appdate']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_appdate'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_appman']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_appman'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_num']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_num'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_sum']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_sum'] : null);?>
</td>
	    <td style="text-align:left;">
	    <table align="left">
	    <tr>
		    <th>配件名称</th>
			<th>品牌</th>
			<th>型号规格</th>
			<th>数量</th>
			<th>单位</th>
			<th>单价</th>
			<th>金额</th>
			<th>备注</th>
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
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['fitting_innum']) ? $_smarty_tpl->tpl_vars['row1']->value['fitting_innum'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['fitting_unit']) ? $_smarty_tpl->tpl_vars['row1']->value['fitting_unit'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['fitting_price']) ? $_smarty_tpl->tpl_vars['row1']->value['fitting_price'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['fitting_innum']) ? $_smarty_tpl->tpl_vars['row1']->value['fitting_innum'] : null)*(isset($_smarty_tpl->tpl_vars['row1']->value['fitting_price']) ? $_smarty_tpl->tpl_vars['row1']->value['fitting_price'] : null);?>
</td>
			<td><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['fitting_remark']) ? $_smarty_tpl->tpl_vars['row1']->value['fitting_remark'] : null);?>
</td>
 		</tr>
	    <?php }} ?>
	    </table>
	    </td>
	    <?php if ($_smarty_tpl->getVariable('op')->value!="check"&&$_smarty_tpl->getVariable('op')->value!="account"){?>
		<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['fitting_status']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_status'] : null)==2){?>已记账<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['fitting_status']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_status'] : null)==1){?>已审核<?php }else{ ?>未审核<?php }?></td>
		<?php }?>
		<td><?php if ($_smarty_tpl->getVariable('op')->value=="check"){?><a href="javascript:void(0);" class="btn_a" onclick="check(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_appid']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_appid'] : null);?>
);"><span>审核</span></a>
		<?php }elseif($_smarty_tpl->getVariable('op')->value=="account"){?><a href="javascript:void(0);" class="btn_a" onclick="account(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_appid']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_appid'] : null);?>
);"><span>处理</span></a>
		<?php }else{ ?><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['fitting_status']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_status'] : null)==0){?><a href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_appid']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_appid'] : null);?>
">编辑</a>&nbsp;
		<a href="javascript:if(confirm('是否确定删除该采购申请？')){window.location.href='delete.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['fitting_appid']) ? $_smarty_tpl->tpl_vars['row']->value['fitting_appid'] : null);?>
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
	<?php if ($_smarty_tpl->getVariable('op')->value=="check"){?><a href="javascript:void(0);" class="btn_a" onclick="check(0);"><span>批量审核</span></a>
	<?php }elseif($_smarty_tpl->getVariable('op')->value=="account"){?><a href="javascript:void(0);" class="btn_a" onclick="account(0);"><span>批量处理</span></a>
	<?php }else{ ?><a href="list.php" class="btn_a"><span>返回</span></a><?php }?>
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
	//获取已选择记录的ID数组
	function getChecked() {
		var uids = new Array();
		$.each($('table input:checked'), function(i, n){
			uids.push( $(n).val() );
		});
		return uids;
	}
	
	function check(fid){
		if (fid==0){
			fid = getChecked();
			fid = fid.toString();
	        if(fid == ''){
	        	alert("请先选择配件采购记录！");
	        	return false;
	        }
		}
		
        demo_iframe('list.php?task=check&fid='+fid,'配件采购审批',760,460,'login_js');
	}
	function account(fid){
		if (fid==0){
			fid = getChecked();
			fid = fid.toString();
	        if(fid == ''){
	        	alert("请先选择配件采购记录！");
	        	return false;
	        }
		}
		
        demo_iframe('list.php?task=account&fid='+fid,'配件采购账务处理',760,460,'login_js');
	}
		
</script>
<!-->

</body>
</html>