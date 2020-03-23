<?php /* Smarty version Smarty-3.0.4, created on 2015-11-11 20:02:39
         compiled from "D:\web\site\templates\elsker\operator/report/outcarlist.html" */ ?>
<?php /*%%SmartyHeaderCode:678956432e5fc3f459-24050340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35ea5ece9eb627204844f2c1d4565b07f2b6ab23' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/report/outcarlist.html',
      1 => 1447233609,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '678956432e5fc3f459-24050340',
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
  <div class="page_tit"><?php echo $_smarty_tpl->getVariable('drivename')->value;?>
-出车记录清单</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <div class="form2">
        <form action="list.php" method="get">
            <dl class="lineD">
			    <dt>司机：</dt>
			    <dd><input type="text" name="paicheDriver" id="paicheDriver" size="18" onFocus="this.blur()" value="<?php echo $_smarty_tpl->getVariable('drivename')->value;?>
" />
			         关键字：<input type="text" name="paicheDriverKey" id="paicheDriverKey" size="10" />
			    <input type="hidden" name="paicheDriver2" id="paicheDriver2" value="<?php echo $_smarty_tpl->getVariable('driveid')->value;?>
" />
			    <a href="javascript:select_driver();"><img src="../../../../css/driver.gif" height="15" class="peoplePic" /></a>
			    </dd>
		    </dl>
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
	<a href="list.php?task=exportoutcar&paicheDriver2=<?php echo $_smarty_tpl->getVariable('driveid')->value;?>
&startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
" class="btn_a"  id="exportUser_action"><span>导出</span></a>
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th>序号</th>
	<th>出车日期</th>
	<th>车号</th>
	<th>开始时间</th>
	<th width="35%">路线</th>
	<th>结束时间</th>
	<th>起始公里</th>
	<th>结束公里</th>
	<th>共行驶里程</th>
	<th>过路费</th>	
	<th>油卡加油</th>
	<th>现金加油</th>
  </tr>
  <?php if ($_smarty_tpl->getVariable('driveid')->value==0){?>
  <tr overstyle='on' id="badge_0">
  	<td colspan="11" style="text-align:left;">请先选择司机！</td>
  </tr>
  <?php }?>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_id']) ? $_smarty_tpl->tpl_vars['row']->value['drive_id'] : null);?>
">
	  	<td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_date']) ? $_smarty_tpl->tpl_vars['row']->value['drive_date'] : null);?>
</td>
	  	<td>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_startTime']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startTime'] : null);?>
</td>
	  	<td style="text-align:left;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_line']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_line'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_endTime']) ? $_smarty_tpl->tpl_vars['row']->value['drive_endTime'] : null);?>
</td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_startKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startKilo'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_endKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_endKilo'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['drive_endKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_endKilo'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['drive_startKilo']) ? $_smarty_tpl->tpl_vars['row']->value['drive_startKilo'] : null);?>
</td>
	    <td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
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
	function select_driver(){
		var key=$("#paicheDriverKey").val();
		demo_iframe('../../business/selectemp.php?sel_type=d&key='+key,'选择驾驶员',650,380,'login_js');
	}

</script>
<!-->

</body>
</html>