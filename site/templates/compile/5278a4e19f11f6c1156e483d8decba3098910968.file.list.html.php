<?php /* Smarty version Smarty-3.0.4, created on 2019-04-16 09:39:42
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/finance/borrow/list.html" */ ?>
<?php /*%%SmartyHeaderCode:117135cb5325e0a4430-55999678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5278a4e19f11f6c1156e483d8decba3098910968' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/finance/borrow/list.html',
      1 => 1551492520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117135cb5325e0a4430-55999678',
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
  <div class="page_tit">借款管理</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <div class="form2">
    <form action="list.php" method="get">
    <input type="hidden" id="op" name="op" value="<?php echo $_smarty_tpl->getVariable('op')->value;?>
"/>
    	<dl class="lineD">
            <dt>借款日期：</dt>
            <dd>
            <input id="search_startDate" type="text" value="" name="search_startDate" onClick="calendar.show(this);">到
            <input id="search_endDate" type="text" value="" name="search_endDate" onClick="calendar.show(this);">
            </dd>
         </dl>
		 <dl class="lineD">
            <dt>借款人：</dt>
            <dd>
            <input type="text" name="search_empname" size="10" value="<?php echo $_smarty_tpl->getVariable('search_empname')->value;?>
" />
            </dd>
         </dl>
		 <dl class="lineD">
            <dt>还款：</dt>
            <dd>
            <input type="radio" value="0" name="search_item" <?php $_tmp1=$_smarty_tpl->getVariable('search_item')->value;?><?php if (empty($_tmp1)){?>checked<?php }?>/>全部
			<input type="radio" value="1" name="search_item" <?php if ($_smarty_tpl->getVariable('search_item')->value==1){?>checked<?php }?>/>未还
			<input type="radio" value="2" name="search_item" <?php if ($_smarty_tpl->getVariable('search_item')->value==2){?>checked<?php }?>/>未还清
            <input type="radio" value="3" name="search_item" <?php if ($_smarty_tpl->getVariable('search_item')->value==3){?>checked<?php }?>/>已还清
            </dd>
         </dl>
         <div class="page_btm">
            	<input type="hidden" name="search_emp" size="10" value="<?php echo $_smarty_tpl->getVariable('search_emp')->value;?>
" />
				<input class="btn_b" type="submit" value="确定">
         </div>
    </form>
    </div>
  </div>
  <div class="Toolbar_inbox">
  	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
  	<a href="create.php" class="btn_a"><span>添加</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <?php if ($_smarty_tpl->getVariable('op')->value=="leadcheck"){?>
    <th style="width:30px;">
		<input type="checkbox" id="checkbox_handle" onclick="checkAll(this)" value="0">
    	<label for="checkbox"></label>
	</th>
	<?php }?>
	<th>借款人</th>
	<th>借款日期</th>
	<th>借款金额</th>
	<?php if ($_smarty_tpl->getVariable('op')->value!="check"){?>
	<th>审核</th>
	<?php }?>
	<th>是否还款</th>
	<th>还款金额</th>
	<th>备注</th>
	
	<th class="line_l">操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
  <?php $_smarty_tpl->tpl_vars['btotal'] = new Smarty_variable($_smarty_tpl->getVariable('btotal')->value+(isset($_smarty_tpl->tpl_vars['row']->value['borrow_money']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_money'] : null), null, null);?>
  <?php $_smarty_tpl->tpl_vars['rtotal'] = new Smarty_variable($_smarty_tpl->getVariable('rtotal')->value+(isset($_smarty_tpl->tpl_vars['row']->value['borrow_Returnmoney']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_Returnmoney'] : null), null, null);?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['borrow_id']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_id'] : null);?>
">
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['borrow_date']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_date'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['borrow_money']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_money'] : null);?>
</td>
	<?php if ($_smarty_tpl->getVariable('op')->value!="check"){?>
	<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['borrow_isAgree']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_isAgree'] : null)==0){?>未审核<?php }else{ ?><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['borrow_isAgree']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_isAgree'] : null)==-1){?>审核未通过<?php }else{ ?>审核通过<?php }?>(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['borrow_isAgreeMan']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_isAgreeMan'] : null);?>
&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['borrow_isAgreeTime']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_isAgreeTime'] : null);?>
)<?php }?></td>
	<?php }?>
	<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['borrow_Returnmoney']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_Returnmoney'] : null)==0){?>未还款<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['borrow_Returnmoney']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_Returnmoney'] : null)!=(isset($_smarty_tpl->tpl_vars['row']->value['borrow_money']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_money'] : null)){?>部分还款<?php }else{ ?>已还清<?php }?></td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['borrow_Returnmoney']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_Returnmoney'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['borrow_remarks']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_remarks'] : null);?>
</td>
	<td>
	<?php if ($_smarty_tpl->getVariable('op')->value=="check"){?>
	<a href="javascript:check(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['borrow_id']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_id'] : null);?>
);">审核</a>
	<?php }elseif($_smarty_tpl->getVariable('op')->value=="bao"){?>
	<a href="javascript:bao(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['borrow_id']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_id'] : null);?>
);">受理</a>
	<?php }elseif($_smarty_tpl->getVariable('op')->value=="return"){?>
	<a href="javascript:ret(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['borrow_id']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_id'] : null);?>
);">还款</a>
	<?php }else{ ?>
	<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['borrow_isAgree']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_isAgree'] : null)==0){?>
	<a href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['borrow_id']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_id'] : null);?>
">编辑</a>&nbsp;
	<a href="javascript:if(confirm('是否确定删除该借款单？')){window.location.href='delete.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['borrow_id']) ? $_smarty_tpl->tpl_vars['row']->value['borrow_id'] : null);?>
&item=<?php echo $_smarty_tpl->getVariable('item')->value;?>
';}">删除</a>
	<?php }?>
	<?php }?>
	</td>
</tr>
 <?php }} ?>
 <?php if ($_smarty_tpl->getVariable('list')->value&&$_smarty_tpl->getVariable('op')->value=="return"){?>
 <tr style="background-color:#FE6E47;">
   <td colspan="2">合计</td>
   <td ><?php echo $_smarty_tpl->getVariable('btotal')->value;?>
</td>
   <td colspan="2"></td>
   <td ><?php echo $_smarty_tpl->getVariable('rtotal')->value;?>
</td>
   <td colspan="2"></td>
 </tr>
 <?php }?>
 </table>
 </div>

  <div class="Toolbar_inbox">
	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
	<a href="create.php" class="btn_a"><span>添加</span></a>
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
   	
    
	function bao(uid){
		demo_iframe('list.php?task=bao&uid='+uid,'借款账务处理',500,450,'login_js');
	}
	
	function check(bid){
		demo_iframe('list.php?task=check&uid='+bid,'借款审核',550,420,'login_js');
	}
	
	function ret(bid){
		demo_iframe('list.php?task=ret&uid='+bid,'借款归还',550,400,'login_js');
	}
	
</script>
<!-->

</body>
</html>