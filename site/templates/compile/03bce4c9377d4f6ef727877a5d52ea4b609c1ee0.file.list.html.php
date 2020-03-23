<?php /* Smarty version Smarty-3.0.4, created on 2019-09-30 14:25:25
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/sales/consult/list.html" */ ?>
<?php /*%%SmartyHeaderCode:9922553085d919fd54435a2-62026002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03bce4c9377d4f6ef727877a5d52ea4b609c1ee0' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/sales/consult/list.html',
      1 => 1569824715,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9922553085d919fd54435a2-62026002',
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
  <div class="page_tit">用车业务咨询-登记</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <div class="form2">
    <form action="list.php" method="get">
    	<dl class="lineD">
		    <dt>客户名称：</dt>
		    <dd><input type="text" name="search_kehu" size="16" /></dd>
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
		    <dt>接待人：</dt>
		    <dd><input type="text" name="paicheCounterMan" id="paicheCounterMan" size="16" onFocus="this.blur()"  />
		    <input type="hidden" name="paicheCounterMan2" id="paicheCounterMan2" size="16"  />
		    <a href="javascript:select_emp();"><img src="../../../../css/driver.gif" width="16" height="15" class="peoplePic" /></a></dd>
		 </dl>
         <dl class="lineD">
            <dt>状态：</dt>
            <dd>
            <input type="radio" name="search_status" value="0" <?php if ($_smarty_tpl->getVariable('search_status')->value==0){?>checked<?php }?>/><font color="#30ff00">进行中</font>
            <input type="radio" name="search_status" value="1" <?php if ($_smarty_tpl->getVariable('search_status')->value==1){?>checked<?php }?>/><font color="#00ff8f">决定租车</font>
            <input type="radio" name="search_status" value="2" <?php if ($_smarty_tpl->getVariable('search_status')->value==2){?>checked<?php }?>/><font color="#0000FF">选择其他租车公司</font>
            <input type="radio" name="search_status" value="3" <?php if ($_smarty_tpl->getVariable('search_status')->value==3){?>checked<?php }?>/><font color="#f000f6">客户放弃</font>
            <input type="radio" name="search_status" value="4" <?php if ($_smarty_tpl->getVariable('search_status')->value==4){?>checked<?php }?>/><font color="#008489">本公司主动放弃</font>
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
    <a href="list.php?task=create&search_status=<?php echo $_smarty_tpl->getVariable('search_status')->value;?>
&item=<?php echo $_smarty_tpl->getVariable('item')->value;?>
" class="btn_a"><span>添加</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>
    <input class="btn_b" type="button" value="返回" name="btnback" onclick="javascript:window.location.href='first.php';">
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;"></th>
    <th width="120">咨询单位</th>
    <th width="60">联系人信息</th>
	<th width="80">预计用车时间</th>
	<th width="60">用车类型</th>
	<th width="60">需求车型</th>
	<th>报价情况</th>
	<th width="20%">备注</th>
	<th width="40">接受人</th>
	<th class="line_l" width="70">操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['consult_id']) ? $_smarty_tpl->tpl_vars['row']->value['consult_id'] : null);?>
">
	<td bgcolor="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['result_status_color']) ? $_smarty_tpl->tpl_vars['row']->value['result_status_color'] : null);?>
" style="color:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['result_font_color']) ? $_smarty_tpl->tpl_vars['row']->value['result_font_color'] : null);?>
;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['consult_result_name']) ? $_smarty_tpl->tpl_vars['row']->value['consult_result_name'] : null);?>
</td>
	<td style="text-align:left;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['consult_linker']) ? $_smarty_tpl->tpl_vars['row']->value['consult_linker'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['consult_linkerPhone']) ? $_smarty_tpl->tpl_vars['row']->value['consult_linkerPhone'] : null);?>
<hr/><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['consult_linkerMan']) ? $_smarty_tpl->tpl_vars['row']->value['consult_linkerMan'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['consult_times']) ? $_smarty_tpl->tpl_vars['row']->value['consult_times'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_name']) ? $_smarty_tpl->tpl_vars['row']->value['item_name'] : null);?>
</td>
	<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['consult_requestCar']) ? $_smarty_tpl->tpl_vars['row']->value['consult_requestCar'] : null)==1){?>商务车<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['consult_requestCar']) ? $_smarty_tpl->tpl_vars['row']->value['consult_requestCar'] : null)==2){?>客车<?php }else{ ?>小车<?php }?></td>
	<td style="text-align:left;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['consult_price']) ? $_smarty_tpl->tpl_vars['row']->value['consult_price'] : null);?>
</td>
	<td style="text-align:left;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['consult_Remarks']) ? $_smarty_tpl->tpl_vars['row']->value['consult_Remarks'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['yewuyuan']) ? $_smarty_tpl->tpl_vars['row']->value['yewuyuan'] : null);?>
</td>
	<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['consult_result']) ? $_smarty_tpl->tpl_vars['row']->value['consult_result'] : null)==0){?>
	<a href="modify.php?search_status=<?php echo $_smarty_tpl->getVariable('search_status')->value;?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['consult_id']) ? $_smarty_tpl->tpl_vars['row']->value['consult_id'] : null);?>
">编辑</a>&nbsp;
	<a href="javascript:if(confirm('是否确定删除该记录？')){window.location.href='delete.php?search_status=<?php echo $_smarty_tpl->getVariable('search_status')->value;?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['consult_id']) ? $_smarty_tpl->tpl_vars['row']->value['consult_id'] : null);?>
';}">删除</a>
	<hr /><?php }?><a href="../negotiate/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['consult_id']) ? $_smarty_tpl->tpl_vars['row']->value['consult_id'] : null);?>
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
	<a href="list.php?task=create&search_status=<?php echo $_smarty_tpl->getVariable('search_status')->value;?>
&item=<?php echo $_smarty_tpl->getVariable('item')->value;?>
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