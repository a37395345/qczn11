<?php /* Smarty version Smarty-3.0.4, created on 2019-07-30 13:20:10
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/sales/contract/list.html" */ ?>
<?php /*%%SmartyHeaderCode:59405d3fd38a117334-99195866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '402e2d5d6a9b47e57e249f926339493945c1efa4' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/sales/contract/list.html',
      1 => 1564463884,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59405d3fd38a117334-99195866',
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
  <div class="page_tit">租赁合同管理</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <div class="form2">
    <form action="list.php" method="get">
    	<dl class="lineD">
		  <dt>合同编号：</dt>
		  <dd>
	        <input type="text" name="contract_number" id="contract_number" size="26"  />
		  </dd>
		</dl>
    	<dl class="lineD">
            <dt>日期范围：</dt>
            <dd>
            <input id="search_startDate" type="text" value="" name="search_startDate" onClick="calendar.show(this);">到
            <input id="search_endDate" type="text" value="" name="search_endDate" onClick="calendar.show(this);">
            </dd>
         </dl>
         <dl class="lineD">
          <dt>用车类型：</dt>
          <dd>
              <select name="b_id" >
                  <option value="0">请选择</option>
                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('category')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['item_paicheType']) ? $_smarty_tpl->tpl_vars['rows']->value['item_paicheType'] : null);?>
" ><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['item_name']) ? $_smarty_tpl->tpl_vars['rows']->value['item_name'] : null);?>
</option>
                  <?php }} ?>
              </select>
          </dd>
         </dl>
         <dl class="lineD">
	          <dt>客户：</dt>
	          <dd>
	              <select name="company"  id="company">
	                  <option value="0" <?php if ($_smarty_tpl->getVariable('companyid')->value==0){?>selected<?php }?>>请选择</option>
	                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('companylist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_id']) ? $_smarty_tpl->tpl_vars['rows']->value['client_id'] : null);?>
" <?php if ($_smarty_tpl->getVariable('companyid')->value==(isset($_smarty_tpl->tpl_vars['rows']->value['client_id']) ? $_smarty_tpl->tpl_vars['rows']->value['client_id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_name']) ? $_smarty_tpl->tpl_vars['rows']->value['client_name'] : null);?>
</option>
	                  <?php }} ?>
	              </select><input type="text" id="search_key" size="4" placeholder="快速检索" />
	          </dd>
	     </dl>
         <dl class="lineD">
		    <dt>业务员：</dt>
		    <dd><input type="text" name="paicheCounterMan" id="paicheCounterMan" size="16" onFocus="this.blur()"  />
		    <input type="hidden" name="paicheCounterMan2" id="paicheCounterMan2" size="16"  />
		    <a href="javascript:select_emp();"><img src="../../../../css/driver.gif" width="16" height="15" class="peoplePic" /></a></dd>
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
    <a href="create.php?item=<?php echo $_smarty_tpl->getVariable('item')->value;?>
" class="btn_a"><span>添加</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">
		<input type="checkbox" id="checkbox_handle" onclick="checkAll(this)" value="0">
    	<label for="checkbox"></label>
	</th>
    <th width="12%">合同编号</th>
    <th width="22%">所属客户</th>
    <th width="8%">用车类型</th>
	<th width="14%">合同有效期</th>
	<th>合同内容</th>
	<th width="5%">业务员</th>
	<th class="line_l" width="6%">操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['contract_id']) ? $_smarty_tpl->tpl_vars['row']->value['contract_id'] : null);?>
">
	<td><input type="checkbox" name="checkbox" id="checkbox<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['contract_id']) ? $_smarty_tpl->tpl_vars['row']->value['contract_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['contract_id']) ? $_smarty_tpl->tpl_vars['row']->value['contract_id'] : null);?>
"></td>
	<td style="text-align:left;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['contract_number']) ? $_smarty_tpl->tpl_vars['row']->value['contract_number'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_name']) ? $_smarty_tpl->tpl_vars['row']->value['item_name'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['contract_startdate']) ? $_smarty_tpl->tpl_vars['row']->value['contract_startdate'] : null);?>
~<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['contract_enddate']) ? $_smarty_tpl->tpl_vars['row']->value['contract_enddate'] : null);?>
</td>
	<td style="text-align:left;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['contract_content']) ? $_smarty_tpl->tpl_vars['row']->value['contract_content'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['yewuyuan']) ? $_smarty_tpl->tpl_vars['row']->value['yewuyuan'] : null);?>
</td>
	<td>
	<a href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['contract_id']) ? $_smarty_tpl->tpl_vars['row']->value['contract_id'] : null);?>
">编辑</a>&nbsp;
	<a href="javascript:if(confirm('是否确定删除该记录？')){window.location.href='delete.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['contract_id']) ? $_smarty_tpl->tpl_vars['row']->value['contract_id'] : null);?>
';}">删除</a>&nbsp;
	<a href="detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['contract_id']) ? $_smarty_tpl->tpl_vars['row']->value['contract_id'] : null);?>
" target="_blank">详情</a>
	</td>
</tr>
 <?php }} ?>
 </table>
 </div>

  <div class="Toolbar_inbox">
	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
	<a href="create.php?item=<?php echo $_smarty_tpl->getVariable('item')->value;?>
" class="btn_a"><span>添加</span></a>
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
		$("#search_key").live('input propertychange',function(){
		    var aa=$("#search_key").val();
		    if (aa!=""){
				$("#company option").each(function (){  
			        var txt = $(this).text();  
			        if(txt.toLowerCase().indexOf(aa) >-1){  
			            $(this).attr("selected",true);
			            $("#company").change();
			            return false;
			        }
			     });
		    }
		});
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
    function select_emp(){
    	demo_iframe('../../business/selectemp.php?sel_type=e','选择业务员',650,380,'login_js');
    }
</script>
<!-->

</body>
</html>