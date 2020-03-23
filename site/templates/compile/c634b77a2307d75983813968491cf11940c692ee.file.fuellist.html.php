<?php /* Smarty version Smarty-3.0.4, created on 2019-09-29 17:31:43
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/report/fuellist.html" */ ?>
<?php /*%%SmartyHeaderCode:14329730475d9079ff0467a1-33778885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c634b77a2307d75983813968491cf11940c692ee' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/report/fuellist.html',
      1 => 1569749239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14329730475d9079ff0467a1-33778885',
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
<script type="text/javascript" src="../../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
</head>
<body>
<div class="so_main">
  <div class="page_tit">车辆油耗统计</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <div class="form2">
        <form action="list.php" method="get">
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
            <dt>车牌号：</dt>
            <dd><input type="text" name="title"></dd>
         </dl>
            <div class="page_btm">
            	<input class="btn_b" type="submit" value="确定">
            </div>
        </form>
    </div>
  </div>
  <div class="Toolbar_inbox">
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>条件</span></a>
    &nbsp;&nbsp;日期范围：<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
 ~~ <?php echo $_smarty_tpl->getVariable('enddate')->value;?>

<!-- 	<a href="list.php?task=exportoutcar&paicheDriver2=<?php echo $_smarty_tpl->getVariable('driveid')->value;?>
&startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
" class="btn_a"  id="exportUser_action"><span>导出</span></a> -->
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th>序号</th>
	<th>车辆</th>
	<th>表数里程</th>
	<th>加油行驶里程</th>
	<th>GPS统计里程</th>
	<th>油卡加油量</th>
	<th>油卡加油金额</th>
	<th>现金加油量</th>
	<th>现金加油金额</th>
	<th>总加油量</th>
	<th>总加油金额</th>
	<th>平均油价</th>
	<th>油耗</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <?php $_smarty_tpl->tpl_vars['total3'] = new Smarty_variable($_smarty_tpl->getVariable('total3')->value+(isset($_smarty_tpl->tpl_vars['row']->value['refuel_number1']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_number1'] : null), null, null);?>
  <?php $_smarty_tpl->tpl_vars['total4'] = new Smarty_variable($_smarty_tpl->getVariable('total4')->value+(isset($_smarty_tpl->tpl_vars['row']->value['refuel_sum1']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_sum1'] : null), null, null);?>
  <?php $_smarty_tpl->tpl_vars['total5'] = new Smarty_variable($_smarty_tpl->getVariable('total5')->value+(isset($_smarty_tpl->tpl_vars['row']->value['refuel_number2']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_number2'] : null), null, null);?>
  <?php $_smarty_tpl->tpl_vars['total6'] = new Smarty_variable($_smarty_tpl->getVariable('total6')->value+(isset($_smarty_tpl->tpl_vars['row']->value['refuel_sum2']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_sum2'] : null), null, null);?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_id']) ? $_smarty_tpl->tpl_vars['row']->value['drive_id'] : null);?>
">
	  	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
	  	<td>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['all_km']) ? $_smarty_tpl->tpl_vars['row']->value['all_km'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['total_2_km']) ? $_smarty_tpl->tpl_vars['row']->value['total_2_km'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['gps_km']) ? $_smarty_tpl->tpl_vars['row']->value['gps_km'] : null);?>
</td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['refuel_number1']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_number1'] : null);?>
<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['refuel_number1']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_number1'] : null)!=0){?>(升)<?php }?></td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['refuel_sum1']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_sum1'] : null);?>
<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['refuel_sum1']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_sum1'] : null)!=0){?>(元)<?php }?></td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['refuel_number2']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_number2'] : null);?>
<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['refuel_number2']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_number2'] : null)!=0){?>(升)<?php }?></td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['refuel_sum2']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_sum2'] : null);?>
<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['refuel_sum2']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_sum2'] : null)!=0){?>(元)<?php }?></td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['refuel_number1']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_number1'] : null)+(isset($_smarty_tpl->tpl_vars['row']->value['refuel_number2']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_number2'] : null);?>
<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['refuel_number1']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_number1'] : null)!=0||(isset($_smarty_tpl->tpl_vars['row']->value['refuel_number2']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_number2'] : null)!=0){?>(升)<?php }?></td>
	    <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['refuel_sum1']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_sum1'] : null)+(isset($_smarty_tpl->tpl_vars['row']->value['refuel_sum2']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_sum2'] : null);?>
<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['refuel_sum1']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_sum1'] : null)!=0||(isset($_smarty_tpl->tpl_vars['row']->value['refuel_sum2']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_sum2'] : null)!=0){?>(元)<?php }?></td>
	    <td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['refuel_number1']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_number1'] : null)!=0||(isset($_smarty_tpl->tpl_vars['row']->value['refuel_number2']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_number2'] : null)!=0){?><?php echo round(((isset($_smarty_tpl->tpl_vars['row']->value['refuel_sum1']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_sum1'] : null)+(isset($_smarty_tpl->tpl_vars['row']->value['refuel_sum2']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_sum2'] : null))/((isset($_smarty_tpl->tpl_vars['row']->value['refuel_number1']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_number1'] : null)+(isset($_smarty_tpl->tpl_vars['row']->value['refuel_number2']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_number2'] : null)),2);?>
(元)<?php }?></td>
		<td>
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['all_km']) ? $_smarty_tpl->tpl_vars['row']->value['all_km'] : null)!=0){?><!-- 有表数 -->
			<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['gps_km']) ? $_smarty_tpl->tpl_vars['row']->value['gps_km'] : null)!=0){?><!-- 机动 长租混合 -->
				<?php if (((isset($_smarty_tpl->tpl_vars['row']->value['gps_km']) ? $_smarty_tpl->tpl_vars['row']->value['gps_km'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['total_1_km']) ? $_smarty_tpl->tpl_vars['row']->value['total_1_km'] : null))!=0){?><?php echo round(100*((isset($_smarty_tpl->tpl_vars['row']->value['refuel_number1']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_number1'] : null)+(isset($_smarty_tpl->tpl_vars['row']->value['refuel_number2']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_number2'] : null))/((isset($_smarty_tpl->tpl_vars['row']->value['gps_km']) ? $_smarty_tpl->tpl_vars['row']->value['gps_km'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['total_1_km']) ? $_smarty_tpl->tpl_vars['row']->value['total_1_km'] : null)),2);?>
<?php }?>
			<?php }else{ ?><!-- 纯机动 -->
				<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['total_2_km']) ? $_smarty_tpl->tpl_vars['row']->value['total_2_km'] : null)>0){?><?php echo round(100*((isset($_smarty_tpl->tpl_vars['row']->value['refuel_number1']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_number1'] : null)+(isset($_smarty_tpl->tpl_vars['row']->value['refuel_number2']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_number2'] : null))/(isset($_smarty_tpl->tpl_vars['row']->value['total_2_km']) ? $_smarty_tpl->tpl_vars['row']->value['total_2_km'] : null),2);?>
<?php }?>
			<?php }?>
		<?php }else{ ?><!-- 无表数 -->
			<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['gps_km']) ? $_smarty_tpl->tpl_vars['row']->value['gps_km'] : null)!=0){?><?php echo round(100*((isset($_smarty_tpl->tpl_vars['row']->value['refuel_number1']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_number1'] : null)+(isset($_smarty_tpl->tpl_vars['row']->value['refuel_number2']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_number2'] : null))/(isset($_smarty_tpl->tpl_vars['row']->value['gps_km']) ? $_smarty_tpl->tpl_vars['row']->value['gps_km'] : null),2);?>
<?php }?>
		<?php }?>
		</td>
 </tr>
 <?php }} ?>
 <tr>
    <th colspan="2">合计</th>
    <th><?php echo $_smarty_tpl->getVariable('total1')->value;?>
</th>
    <th><?php echo $_smarty_tpl->getVariable('total2')->value;?>
</th>
    <th><?php echo $_smarty_tpl->getVariable('total7')->value;?>
</th>
    <th><?php echo $_smarty_tpl->getVariable('total3')->value;?>
</th>
    <th><?php echo $_smarty_tpl->getVariable('total4')->value;?>
</th>
    <th><?php echo $_smarty_tpl->getVariable('total5')->value;?>
</th>
    <th><?php echo $_smarty_tpl->getVariable('total6')->value;?>
</th>
    <th><?php echo $_smarty_tpl->getVariable('total3')->value+$_smarty_tpl->getVariable('total5')->value;?>
</th>
    <th><?php echo $_smarty_tpl->getVariable('total4')->value+$_smarty_tpl->getVariable('total6')->value;?>
</th>
    <th colspan="2">&nbsp;</th>
  </tr>
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
	

</script>
<!-->

</body>
</html>