<?php /* Smarty version Smarty-3.0.4, created on 2019-03-26 15:48:01
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/finance/salary/list.html" */ ?>
<?php /*%%SmartyHeaderCode:205935c99d931798719-04909533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ce63568427d58e6ee3fa3697357a23546c98963' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/finance/salary/list.html',
      1 => 1447318902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205935c99d931798719-04909533',
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
  <div class="page_tit">工资查询&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('year')->value;?>
年<?php echo $_smarty_tpl->getVariable('month')->value;?>
月份</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <div class="form2">
    <form action="list.php" method="get">
    	<dl class="lineD">
	          <dt>选择职位：</dt>
	          <dd>
	              <select name="post" >
	                  <option value="">请选择</option>
	                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('postlist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" <?php if ($_smarty_tpl->getVariable('postid')->value==(isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>
</option>
	                  <?php }} ?>
	              </select>
	          </dd>
	        </dl>
    	<dl class="lineD">
            <dt>年份：</dt>
            <dd><input type="text" name="searchyear" id="searchyear" size="16" value="<?php echo $_smarty_tpl->getVariable('year')->value;?>
" /></dd>
         </dl>
         <dl class="lineD">
	        <dt>月份：</dt>
	            <dd><input type="text" name="searchmonth" id="searchmonth" size="16" value="<?php echo $_smarty_tpl->getVariable('month')->value;?>
" /></dd>
         </dl>
         <dl class="lineD">
	        <dt>员工姓名：</dt>
	            <dd><input type="text" name="searchname" size="16" /></dd>
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
  </div>
  <div class="list">
  <table  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">
		<input type="checkbox" id="checkbox_handle" onclick="checkAll(this)" value="0">
    	<label for="checkbox"></label>
	</th>
    <th style="width:40px;">姓名</th>
	<th style="width:50px;">职位</th>
	<th>在岗天数</th>
	<th>请假天数</th>
	<th>底薪</th>
	<th>公里补贴</th>
	<th>超公里补贴</th>
	<th>趟数补贴</th>
	<th>加班工资</th>
	<th>差旅费</th>
	<th>电话费</th>
	<th>垫付路桥费</th>
	<th>应发工资</th>
	<th>请假扣款</th>
	<th>迟到扣款</th>
	<th>借款</th>
	<th>违章</th>
	<th>社保</th>
	<th>其他</th>
	<th>实发工资</th>
	<th style="width:40px;">操作</th>
	<th style="align:left;">备注</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
  <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['salary_changepost']) ? $_smarty_tpl->tpl_vars['row']->value['salary_changepost'] : null)==1){?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['salary_id']) ? $_smarty_tpl->tpl_vars['row']->value['salary_id'] : null);?>
" style="color:#F74;">
  <?php }else{ ?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['salary_id']) ? $_smarty_tpl->tpl_vars['row']->value['salary_id'] : null);?>
" >
  <?php }?>
  <?php $_smarty_tpl->tpl_vars['postout'] = new Smarty_variable((isset($_smarty_tpl->tpl_vars['row']->value['salary_putout']) ? $_smarty_tpl->tpl_vars['row']->value['salary_putout'] : null), null, null);?>
	<td><input type="checkbox" name="checkbox" id="checkbox<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['empid']) ? $_smarty_tpl->tpl_vars['row']->value['empid'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['empid']) ? $_smarty_tpl->tpl_vars['row']->value['empid'] : null);?>
"></td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['title']) ? $_smarty_tpl->tpl_vars['row']->value['title'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['salary_workday']) ? $_smarty_tpl->tpl_vars['row']->value['salary_workday'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['salary_leave']) ? $_smarty_tpl->tpl_vars['row']->value['salary_leave'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['salary_base']) ? $_smarty_tpl->tpl_vars['row']->value['salary_base'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['salary_kmsubsid']) ? $_smarty_tpl->tpl_vars['row']->value['salary_kmsubsid'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['salary_ovkmsubsid']) ? $_smarty_tpl->tpl_vars['row']->value['salary_ovkmsubsid'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['salary_tssubsid']) ? $_smarty_tpl->tpl_vars['row']->value['salary_tssubsid'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['salary_ovtime']) ? $_smarty_tpl->tpl_vars['row']->value['salary_ovtime'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['salary_travel']) ? $_smarty_tpl->tpl_vars['row']->value['salary_travel'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['salary_telsubsid']) ? $_smarty_tpl->tpl_vars['row']->value['salary_telsubsid'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['salary_ioll']) ? $_smarty_tpl->tpl_vars['row']->value['salary_ioll'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['salary_should']) ? $_smarty_tpl->tpl_vars['row']->value['salary_should'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['salary_leavemoney']) ? $_smarty_tpl->tpl_vars['row']->value['salary_leavemoney'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['salary_latemoney']) ? $_smarty_tpl->tpl_vars['row']->value['salary_latemoney'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['salary_borrow']) ? $_smarty_tpl->tpl_vars['row']->value['salary_borrow'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['salary_break']) ? $_smarty_tpl->tpl_vars['row']->value['salary_break'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['salary_social']) ? $_smarty_tpl->tpl_vars['row']->value['salary_social'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['salary_other']) ? $_smarty_tpl->tpl_vars['row']->value['salary_other'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['salary_fact']) ? $_smarty_tpl->tpl_vars['row']->value['salary_fact'] : null);?>
</td>
	<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['salary_putout']) ? $_smarty_tpl->tpl_vars['row']->value['salary_putout'] : null)==1){?>已发放<?php }else{ ?><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['salary_id']) ? $_smarty_tpl->tpl_vars['row']->value['salary_id'] : null)){?><a href="javascript:modify(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['salary_id']) ? $_smarty_tpl->tpl_vars['row']->value['salary_id'] : null);?>
);">调整</a><?php }?><?php }?></td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['salary_remarks']) ? $_smarty_tpl->tpl_vars['row']->value['salary_remarks'] : null);?>
</td>
</tr>
 <?php }} ?>
 <?php if ($_smarty_tpl->getVariable('list')->value&&$_smarty_tpl->getVariable('total_info')->value){?>
 <tr>
    <td colspan="4">合计</th>
	<td><?php echo (isset($_smarty_tpl->getVariable('total_info')->value['salary_leave']) ? $_smarty_tpl->getVariable('total_info')->value['salary_leave'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->getVariable('total_info')->value['salary_base']) ? $_smarty_tpl->getVariable('total_info')->value['salary_base'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->getVariable('total_info')->value['salary_kmsubsid']) ? $_smarty_tpl->getVariable('total_info')->value['salary_kmsubsid'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->getVariable('total_info')->value['salary_ovkmsubsid']) ? $_smarty_tpl->getVariable('total_info')->value['salary_ovkmsubsid'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->getVariable('total_info')->value['salary_tssubsid']) ? $_smarty_tpl->getVariable('total_info')->value['salary_tssubsid'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->getVariable('total_info')->value['salary_ovtime']) ? $_smarty_tpl->getVariable('total_info')->value['salary_ovtime'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->getVariable('total_info')->value['salary_travel']) ? $_smarty_tpl->getVariable('total_info')->value['salary_travel'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->getVariable('total_info')->value['salary_telsubsid']) ? $_smarty_tpl->getVariable('total_info')->value['salary_telsubsid'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->getVariable('total_info')->value['salary_ioll']) ? $_smarty_tpl->getVariable('total_info')->value['salary_ioll'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->getVariable('total_info')->value['salary_should']) ? $_smarty_tpl->getVariable('total_info')->value['salary_should'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->getVariable('total_info')->value['salary_leavemoney']) ? $_smarty_tpl->getVariable('total_info')->value['salary_leavemoney'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->getVariable('total_info')->value['salary_latemoney']) ? $_smarty_tpl->getVariable('total_info')->value['salary_latemoney'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->getVariable('total_info')->value['salary_borrow']) ? $_smarty_tpl->getVariable('total_info')->value['salary_borrow'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->getVariable('total_info')->value['salary_break']) ? $_smarty_tpl->getVariable('total_info')->value['salary_break'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->getVariable('total_info')->value['salary_social']) ? $_smarty_tpl->getVariable('total_info')->value['salary_social'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->getVariable('total_info')->value['salary_other']) ? $_smarty_tpl->getVariable('total_info')->value['salary_other'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->getVariable('total_info')->value['salary_fact']) ? $_smarty_tpl->getVariable('total_info')->value['salary_fact'] : null);?>
</td>
	<td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <th colspan="4">&nbsp;</th>
	<th>请假天数</th>
	<th>底薪</th>
	<th>公里补贴</th>
	<th>超公里补贴</th>
	<th>趟数补贴</th>
	<th>加班工资</th>
	<th>差旅费</th>
	<th>电话费</th>
	<th>垫付路桥费</th>
	<th>应发工资</th>
	<th>请假扣款</th>
	<th>迟到扣款</th>
	<th>借款</th>
	<th>违章</th>
	<th>社保</th>
	<th>其他</th>
	<th>实发工资</th>
	<th colspan="2">&nbsp;</th>
  </tr>
  <?php }?>
 </table>
 </div>

  <div class="Toolbar_inbox">
	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
	<?php if ($_smarty_tpl->getVariable('total')->value>0){?>
	<?php if ($_smarty_tpl->getVariable('postout')->value==0){?>
    <a href="javascript:recreate();" class="btn_a"><span>部分重新计算</span></a>
    <a href="javascript:if(confirm('重新计算工资会将已经调整过的所有数据删除,是否确定全部重新计算？')){window.location.href='list.php?task=salarycreate&op=recreateall&searchyear=<?php echo $_smarty_tpl->getVariable('year')->value;?>
&searchmonth=<?php echo $_smarty_tpl->getVariable('month')->value;?>
';}" class="btn_a"><span>全部重新计算</span></a>
    <a href="javascript:if(confirm('请核对工资是否准确，一旦确认发放就无法再调整了,是否确定？')){window.location.href='list.php?task=salaryissue&searchyear=<?php echo $_smarty_tpl->getVariable('year')->value;?>
&searchmonth=<?php echo $_smarty_tpl->getVariable('month')->value;?>
';}" class="btn_a"><span>发放确认</span></a>
    <?php }?>
    <a href="list.php?task=exportsalary&searchyear=<?php echo $_smarty_tpl->getVariable('year')->value;?>
&searchmonth=<?php echo $_smarty_tpl->getVariable('month')->value;?>
&post=<?php echo $_smarty_tpl->getVariable('postid')->value;?>
" class="btn_a" ><span>导出</span></a>
    <?php }else{ ?><a href="list.php?task=salarycreate&searchyear=<?php echo $_smarty_tpl->getVariable('year')->value;?>
&searchmonth=<?php echo $_smarty_tpl->getVariable('month')->value;?>
" class="btn_a"><span>工资计算</span></a><?php }?>
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
    function recreate(){
    	pid = getChecked();
		pid = pid.toString();
        if(pid == ''){
        	alert("请先选择需要重新计算工资的员工！");
        	return false;
        }
        if(confirm('重新计算工资会将已经调整过的数据删除,是否确定重新计算？')){
        	location.href="list.php?task=salarycreate&op=recreate&searchyear="+$("#searchyear").val()+"&searchmonth="+$("#searchmonth").val()+"&pid="+pid;
        }
    }
	function modify(pid){
		demo_iframe('list.php?task=salarymodify&pid='+pid,'工资结果调整',550,500,'login_js');
	}
</script>
<!-->
</body>
</html>