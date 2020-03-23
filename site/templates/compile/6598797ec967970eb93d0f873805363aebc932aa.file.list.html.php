<?php /* Smarty version Smarty-3.0.4, created on 2019-11-19 13:19:33
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/finance/refuel/list.html" */ ?>
<?php /*%%SmartyHeaderCode:252005dd37b65f36ca6-19202416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6598797ec967970eb93d0f873805363aebc932aa' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/finance/refuel/list.html',
      1 => 1571707179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '252005dd37b65f36ca6-19202416',
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
  <div class="page_tit">油卡加油记录</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <div class="form2">
    <form action="list.php" method="get">
    <input type="hidden" id="op" name="op" value="<?php echo $_smarty_tpl->getVariable('op')->value;?>
"/>
    	<dl class="lineD">
	    <dt>车辆：</dt>
	    <dd><input type="text" name="paicheCar" id="paicheCar" size="38" onFocus="this.blur()" value="" /> 
	         <input type="button" value="清 空" onClick="clearValue('paicheCar','paicheCar2')" />&nbsp;
	         关键字：<input type="text" name="paicheCarKey" id="paicheCarKey" size="10" />
	    <input type="hidden" name="paicheCar2" id="paicheCar2" value="" />
	    <a href="javascript:select_car();"><img src="../../../../css/car2.gif" height="15" class="peoplePic" /></a></dd>
	    </dl>
    	<dl class="lineD">
			    <dt>加油人：</dt>
			    <dd><input type="text" name="paicheDriver" id="paicheDriver" size="18" onFocus="this.blur()" value="" />
			         关键字：<input type="text" name="paicheDriverKey" id="paicheDriverKey" size="10" />
			    <input type="hidden" name="paicheDriver2" id="paicheDriver2" value="" />
			    <a href="javascript:select_driver();"><img src="../../../../css/driver.gif" height="15" class="peoplePic" /></a>
			    </dd>
		    </dl>
    	<dl class="lineD">
            <dt>加油日期：</dt>
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
  	<a href="list.php?task=create" class="btn_a"><span>添加</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>

	<th>车辆</th>
	<th>加油日期</th>
	<th>加油数量</th>
	<th>加油金额</th>
	<th>加油人</th>
	<th>GPS里程</th>
	<th>备注</th>
	<th class="line_l">操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['borrow_id']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_id'] : null);?>
">
	<td>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['refuel_date']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_date'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['refuel_number']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_number'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['refuel_money']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_money'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['refuel_man']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_man'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['refuel_km']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_km'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['refuel_remarks']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_remarks'] : null);?>
</td>
	<td>
	<a href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['refuel_id']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_id'] : null);?>
">编辑</a>&nbsp;
	<a href="javascript:if(confirm('是否确定删除该加油记录？')){window.location.href='delete.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['refuel_id']) ? $_smarty_tpl->tpl_vars['row']->value['refuel_id'] : null);?>
';}">删除</a>
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
    function select_car(){
    	var key=$("#paicheCarKey").val();
    	demo_iframe('../../business/selectemp.php?sel_type=c&key='+key,'选择车辆',650,380,'login_js');
    }
    function select_driver(){
    	var key=$("#paicheDriverKey").val();
    	
    	demo_iframe('../../business/selectemp.php?sel_type=d&item=2'+'&key='+key,'选择员工',650,380,'login_js');
    }
    
	
</script>
<!-->

</body>
</html>