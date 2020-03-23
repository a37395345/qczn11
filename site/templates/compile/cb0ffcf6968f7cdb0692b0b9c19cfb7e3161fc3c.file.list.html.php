<?php /* Smarty version Smarty-3.0.4, created on 2019-09-29 17:31:51
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/system/profit/list.html" */ ?>
<?php /*%%SmartyHeaderCode:19452021605d907a07ed8241-18155857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb0ffcf6968f7cdb0692b0b9c19cfb7e3161fc3c' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/system/profit/list.html',
      1 => 1569749254,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19452021605d907a07ed8241-18155857',
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
<script type="text/javascript" src="../../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
</head>
<body>
<div class="so_main">
  <div class="page_tit">股权激励法</div>
  <!-------- 用户列表 -------->
  

  <div class="Toolbar_inbox">

  	<div class="page right">&nbsp;&nbsp;数据统计截止时间：<?php echo $_smarty_tpl->getVariable('addtime')->value;?>
</div>
	<input type="radio" name="searchyear" value="2018" <?php if ($_smarty_tpl->getVariable('nowyear')->value==2018){?>checked<?php }?> />2018年&nbsp;&nbsp;
	<input type="radio" name="searchyear" value="2019" <?php if ($_smarty_tpl->getVariable('nowyear')->value==2019){?>checked<?php }?> />2019年&nbsp;&nbsp;
	<input type="radio" name="searchyear" value="2020" <?php if ($_smarty_tpl->getVariable('nowyear')->value==2020){?>checked<?php }?> />2020年&nbsp;&nbsp;
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th class="line_l">月份</th>
    <th class="line_l">收入</th>
	<th class="line_l">卖车款</th>

	<th class="line_l">除卖车款收入</th>

	<th class="line_l">支出</th>
	<th class="line_l">净买车款</th>
	<th class="line_l">除买车款支出</th>

	<th class="line_l">小计</th>

	<th class="line_l">车辆折旧</th>
	<th class="line_l">月利</th>
	
  </tr>
  <?php $_smarty_tpl->tpl_vars['heji'] = new Smarty_variable(0, null, null);?>
  <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable(0, null, null);?>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  <tr overstyle='on' id="profit_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
		<td><?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)+1;?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['a']) ? $_smarty_tpl->tpl_vars['row']->value['a'] : null);?>
</td>
	    <td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['b']) ? $_smarty_tpl->tpl_vars['row']->value['b'] : null)==''){?>0:00<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['b']) ? $_smarty_tpl->tpl_vars['row']->value['b'] : null);?>
<?php }?></td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['c']) ? $_smarty_tpl->tpl_vars['row']->value['c'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['d']) ? $_smarty_tpl->tpl_vars['row']->value['d'] : null);?>
</td>
		<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['e']) ? $_smarty_tpl->tpl_vars['row']->value['e'] : null)==''){?>0:00<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['e']) ? $_smarty_tpl->tpl_vars['row']->value['e'] : null);?>
<?php }?></td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['f']) ? $_smarty_tpl->tpl_vars['row']->value['f'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['c']) ? $_smarty_tpl->tpl_vars['row']->value['c'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['f']) ? $_smarty_tpl->tpl_vars['row']->value['f'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['g']) ? $_smarty_tpl->tpl_vars['row']->value['g'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['h']) ? $_smarty_tpl->tpl_vars['row']->value['h'] : null);?>
</td>
		<?php $_smarty_tpl->tpl_vars['heji'] = new Smarty_variable($_smarty_tpl->getVariable('heji')->value+(isset($_smarty_tpl->tpl_vars['row']->value['h']) ? $_smarty_tpl->tpl_vars['row']->value['h'] : null), null, null);?>
		<?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->getVariable('index')->value+1, null, null);?>
 </tr>
 <?php }} ?>
 <tr style="background-color:#E00024;">
    <td>合计</td>
	<td colspan="8">&nbsp;</td>
    <td><?php echo $_smarty_tpl->getVariable('heji')->value;?>
</td>
  </tr>
  <tr style="background-color:#FFE900;">
    <td>年基准利润</td>
	<td colspan="8">&nbsp;</td>
    <td><?php echo number_format($_smarty_tpl->getVariable('base_profit')->value,2,".",'');?>
</td>
  </tr>
  <tr style="background-color:#405D9C;color: #FFF;">
    <td>当前收益</td>
	<td colspan="8">&nbsp;</td>
	<td>
		<?php $_smarty_tpl->tpl_vars['bb'] = new Smarty_variable(($_smarty_tpl->getVariable('base_profit')->value/12)*$_smarty_tpl->getVariable('index')->value, null, null);?>
		<?php $_smarty_tpl->tpl_vars['zy'] = new Smarty_variable(sprintf("%.2f",$_smarty_tpl->getVariable('heji')->value)-sprintf("%.2f",$_smarty_tpl->getVariable('bb')->value), null, null);?>
		<?php if ($_smarty_tpl->getVariable('zy')->value>0){?><span style="color: red"><?php echo $_smarty_tpl->getVariable('zy')->value;?>
</span><?php }else{ ?><span style="color: #57f554"><?php echo $_smarty_tpl->getVariable('zy')->value;?>
</span><?php }?>

	</td>
  </tr>
 </table>
 </div>
		

</div>

<div class="so_main">
  <div class="page_tit">员工收益比例</div>
  <!-------- 用户列表 -------->
  <div class="Toolbar_inbox">
	<div class="page right">&nbsp;&nbsp;</div>
	<a href="javascript:add(0);" class="btn_a"><span>添加</span></a>
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th class="line_l">姓名</th>
	<th class="line_l">部门</th>
	<th class="line_l">职务</th>
	<th class="line_l">占股比例</th>
	<th class="line_l">占股金额</th>
	<th class="line_l">开始月份</th>
	<th class="line_l">结束月份</th>
	<th class="line_l">收益明细</th>
	<th class="line_l" width="14%">操作</th>
  </tr>
  <?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable(0, null, null);?>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('emplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  <?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->getVariable('total')->value+(isset($_smarty_tpl->tpl_vars['row']->value['total_profit']) ? $_smarty_tpl->tpl_vars['row']->value['total_profit'] : null), null, null);?>
  <tr overstyle='on' id="emp_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
">
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['title']) ? $_smarty_tpl->tpl_vars['row']->value['title'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['percent']) ? $_smarty_tpl->tpl_vars['row']->value['percent'] : null);?>
%</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['percent_sum']) ? $_smarty_tpl->tpl_vars['row']->value['percent_sum'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['startyear']) ? $_smarty_tpl->tpl_vars['row']->value['startyear'] : null);?>
年<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['startmonth']) ? $_smarty_tpl->tpl_vars['row']->value['startmonth'] : null);?>
月</td>
		<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['endyear']) ? $_smarty_tpl->tpl_vars['row']->value['endyear'] : null)&&(isset($_smarty_tpl->tpl_vars['row']->value['endmonth']) ? $_smarty_tpl->tpl_vars['row']->value['endmonth'] : null)){?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['endyear']) ? $_smarty_tpl->tpl_vars['row']->value['endyear'] : null);?>
年<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['endmonth']) ? $_smarty_tpl->tpl_vars['row']->value['endmonth'] : null);?>
月<?php }else{ ?>永久<?php }?></td>
		<td>
			<?php $_smarty_tpl->tpl_vars['shouyis'] = new Smarty_variable(0, null, null);?>
			<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
				<?php if (((isset($_smarty_tpl->tpl_vars['k']->value) ? $_smarty_tpl->tpl_vars['k']->value : null)+1)>=(isset($_smarty_tpl->tpl_vars['row']->value['startmonth']) ? $_smarty_tpl->tpl_vars['row']->value['startmonth'] : null)&&((isset($_smarty_tpl->tpl_vars['k']->value) ? $_smarty_tpl->tpl_vars['k']->value : null)+1)<=(isset($_smarty_tpl->tpl_vars['row']->value['endmonth']) ? $_smarty_tpl->tpl_vars['row']->value['endmonth'] : null)){?>
				<?php $_smarty_tpl->tpl_vars['shouyi'] = new Smarty_variable(((isset($_smarty_tpl->tpl_vars['rows']->value['h']) ? $_smarty_tpl->tpl_vars['rows']->value['h'] : null)-($_smarty_tpl->getVariable('base_profit')->value/12))*(isset($_smarty_tpl->tpl_vars['row']->value['percent']) ? $_smarty_tpl->tpl_vars['row']->value['percent'] : null)/100, null, null);?>
				<?php echo (isset($_smarty_tpl->tpl_vars['k']->value) ? $_smarty_tpl->tpl_vars['k']->value : null)+1;?>
月份：<?php echo number_format($_smarty_tpl->getVariable('shouyi')->value,2,".",'');?>
<hr/>
				<?php $_smarty_tpl->tpl_vars['shouyis'] = new Smarty_variable($_smarty_tpl->getVariable('shouyis')->value+$_smarty_tpl->getVariable('shouyi')->value, null, null);?>
				<?php $_smarty_tpl->tpl_vars['shouyis'] = new Smarty_variable(number_format($_smarty_tpl->getVariable('shouyis')->value,2,".",''), null, null);?>
				<?php }?>
			<?php }} ?>
			
			总计：<?php if ($_smarty_tpl->getVariable('shouyis')->value>0){?><span style="color: red"><?php echo $_smarty_tpl->getVariable('shouyis')->value;?>
元</span><?php }else{ ?><span style="color: #57f554"><?php echo $_smarty_tpl->getVariable('shouyis')->value;?>
元</span><?php }?>

		</td>
		<td><a href="javascript:add(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
);">编辑</a>&nbsp;|&nbsp;
		<a href="javascript:if(confirm('是否确定删除该记录？')){window.location.href='list.php?task=delete&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
&searchyear=<?php echo $_smarty_tpl->getVariable('nowyear')->value;?>
';}">删除</a>
		</td>
 </tr>
 <?php }} ?>
  
 </table>
 </div>

</div>
<!-->
<script>
	//鼠标移动表格效果
	$(document).ready(function(){
		$("tr[overstyle='on']").hover(
		  function () {
		    $(this).addClass("bg_hover");
		  },
		  function () {
		    $(this).removeClass("bg_hover");
		  }
		);
		$("input[name='searchyear']").change(function(){
	    	var selectedvalue = $("input[name='searchyear']:checked").val();
			location.href="list.php?searchyear="+selectedvalue;
	    	//$("input[name='search_shop'][value='"+selectedvalue+"']").attr("checked",true);
	    	//$("#form1").submit();
	    });
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
	
	//删除用户
	function deleteGroup(uid) {
		uid = uid ? uid : getChecked();
		uid = uid.toString();
		if(uid == '' || !confirm('删除成功后将无法恢复，确认继续？')) return false;
		
		$.post("delete.php?multi=1", {uid:uid}, function(res){
			if(res == '1') {
				uid = uid.split(',');
				for(i = 0; i < uid.length; i++) {
					$('#admin_group_'+uid[i]).remove();
				}
				ui.success('操作成功');
			}else {
				ui.error('操作失败');
			}
		});
	}
	
	function folder(type, _this) {
		$('#search_'+type).slideToggle('fast');
		if ($(_this).html() == '展开') {
			$(_this).html('收起');
		}else {
			$(_this).html('展开');
		}
		
	}
	function add(uid){
		var selectedvalue = $("input[name='searchyear']:checked").val();
    	demo_iframe('create.php?uid='+uid+'&searchyear='+selectedvalue,'添加人员',700,450,'login_js');
    }

	function detail(uid,recid){
		var selectedvalue = $("input[name='searchyear']:checked").val();
    	demo_iframe('list.php?task=detail&uid='+uid+'&searchyear='+selectedvalue+'&recid='+recid,'收益明细',600,500,'login_js');
    }
	function cal(){
    	demo_iframe('../../../../profitmonth.php?auto=1','实时统计',450,450,'login_js');
    }
	function cal2(){
    	demo_iframe('../../../../profitemp.php?auto=1','重新计算',450,450,'login_js');
    }
</script>
<!-->

</body>
</html>