<?php /* Smarty version Smarty-3.0.4, created on 2015-09-30 15:28:56
         compiled from "D:\czyhqc\site\templates\elsker\operator/insur/list.html" */ ?>
<?php /*%%SmartyHeaderCode:7223560b8f387ff5c2-02473240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b90af77ece35678f42caa99f5aa7490633103a5' => 
    array (
      0 => 'D:\\czyhqc\\site\\templates\\elsker\\operator/insur/list.html',
      1 => 1443597968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7223560b8f387ff5c2-02473240',
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
<script type="text/javascript" src="../../../js/date_select.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
</head>
<body>
<div class="so_main">
  <div class="page_tit">车辆保险记录</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    
    <div class="form2">
    <form action="list.php" method="post">
        <dl class="lineD">
            <dt>车牌号：</dt>
            <dd>苏D&nbsp;<input type="text" name="car_num" size="3"  />
            </dd>
        </dl>
        <dl class="lineD">
            <dt>购车日期：</dt>
            <dd><input type="text" name="car_saleDate" id="car_saleDate" size="6" onclick="calendar.show(this);"  />
            </dd>
        </dl>
        <div class="page_btm">
           <input class="btn_b" type="submit" value="查 询">
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
	<th width="5%">车牌号</th>
    <th width="8%">品牌</th>
    <th width="8%">车辆购买日期</th>
    <th style="text-align:left;" >保险购买记录</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['nCount1']) ? $_smarty_tpl->tpl_vars['row']->value['nCount1'] : null)>0){?>style="color:#FF0000;"<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['nCount2']) ? $_smarty_tpl->tpl_vars['row']->value['nCount2'] : null)!=2){?>style="color:#AA3355;"<?php }?>>
	    <td>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_brand']) ? $_smarty_tpl->tpl_vars['row']->value['car_brand'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_saleDate']) ? $_smarty_tpl->tpl_vars['row']->value['car_saleDate'] : null);?>
</td>		
		<td style="text-align:left;">
		<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_insuranceList']) ? $_smarty_tpl->tpl_vars['row']->value['car_insuranceList'] : null)){?>
	    <table align="left" width="100%" border="0" cellspacing="0" cellpadding="0">
	    <tr>
		    <th width="6%">类型</th>
		    <th width="7%">投保公司</th>
		    <th width="10%">起始日期</th>
			<th width="10%">截止日期</th>
			<th width="7%">保费</th>
			<th width="30%">明细</th>
			<th width="20%">险种</th>
			<th>操作</th>
	    </tr>
	    <?php  $_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['row']->value['car_insuranceList']) ? $_smarty_tpl->tpl_vars['row']->value['car_insuranceList'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row1']->key => $_smarty_tpl->tpl_vars['row1']->value){
?>
	    <tr >
		    <td <?php if ((isset($_smarty_tpl->tpl_vars['row1']->value['insurance_over']) ? $_smarty_tpl->tpl_vars['row1']->value['insurance_over'] : null)==1){?>style="text-decoration:line-through;"<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['insurance_type']) ? $_smarty_tpl->tpl_vars['row1']->value['insurance_type'] : null);?>
</td>
		    <td <?php if ((isset($_smarty_tpl->tpl_vars['row1']->value['insurance_over']) ? $_smarty_tpl->tpl_vars['row1']->value['insurance_over'] : null)==1){?>style="text-decoration:line-through;"<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['insurance_company']) ? $_smarty_tpl->tpl_vars['row1']->value['insurance_company'] : null);?>
</td>
		    <td <?php if ((isset($_smarty_tpl->tpl_vars['row1']->value['insurance_over']) ? $_smarty_tpl->tpl_vars['row1']->value['insurance_over'] : null)==1){?>style="text-decoration:line-through;"<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['insurance_start']) ? $_smarty_tpl->tpl_vars['row1']->value['insurance_start'] : null);?>
</td>
			<td <?php if ((isset($_smarty_tpl->tpl_vars['row1']->value['insurance_over']) ? $_smarty_tpl->tpl_vars['row1']->value['insurance_over'] : null)==1){?>style="text-decoration:line-through;"<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['insurance_end']) ? $_smarty_tpl->tpl_vars['row1']->value['insurance_end'] : null);?>
</td>
			<td <?php if ((isset($_smarty_tpl->tpl_vars['row1']->value['insurance_over']) ? $_smarty_tpl->tpl_vars['row1']->value['insurance_over'] : null)==1){?>style="text-decoration:line-through;"<?php }?>><?php if ((isset($_smarty_tpl->tpl_vars['row1']->value['insurance_type']) ? $_smarty_tpl->tpl_vars['row1']->value['insurance_type'] : null)=="交强险"){?><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['insurance_money2']) ? $_smarty_tpl->tpl_vars['row1']->value['insurance_money2'] : null);?>
<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['insurance_money']) ? $_smarty_tpl->tpl_vars['row1']->value['insurance_money'] : null);?>
<?php }?></td>
			<td <?php if ((isset($_smarty_tpl->tpl_vars['row1']->value['insurance_over']) ? $_smarty_tpl->tpl_vars['row1']->value['insurance_over'] : null)==1){?>style="text-decoration:line-through;"<?php }?> style="text-align:left;"><?php if ((isset($_smarty_tpl->tpl_vars['row1']->value['insurance_type']) ? $_smarty_tpl->tpl_vars['row1']->value['insurance_type'] : null)=="交强险"){?>交强险:<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['insurance_mandatory']) ? $_smarty_tpl->tpl_vars['row1']->value['insurance_mandatory'] : null);?>
&nbsp;浮动比率:<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['insurance_float']) ? $_smarty_tpl->tpl_vars['row1']->value['insurance_float'] : null);?>
%&nbsp;车船税:<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['insurance_cartax']) ? $_smarty_tpl->tpl_vars['row1']->value['insurance_cartax'] : null);?>
<?php }else{ ?>车损:<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['insurance_loss']) ? $_smarty_tpl->tpl_vars['row1']->value['insurance_loss'] : null);?>
&nbsp;三者:<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['insurance_respons']) ? $_smarty_tpl->tpl_vars['row1']->value['insurance_respons'] : null);?>
&nbsp;优惠折扣:<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['insurance_discount']) ? $_smarty_tpl->tpl_vars['row1']->value['insurance_discount'] : null);?>
%&nbsp;返利:<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['insurance_return']) ? $_smarty_tpl->tpl_vars['row1']->value['insurance_return'] : null);?>
元<?php }?></td>
			<td <?php if ((isset($_smarty_tpl->tpl_vars['row1']->value['insurance_over']) ? $_smarty_tpl->tpl_vars['row1']->value['insurance_over'] : null)==1){?>style="text-decoration:line-through;"<?php }?> style="text-align:left;"><?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['insurance_item']) ? $_smarty_tpl->tpl_vars['row1']->value['insurance_item'] : null);?>
</td>
			<td ><a href="detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['insurance_id']) ? $_smarty_tpl->tpl_vars['row1']->value['insurance_id'] : null);?>
" target="blank">查看</a><?php if ((isset($_smarty_tpl->tpl_vars['row1']->value['insurance_over']) ? $_smarty_tpl->tpl_vars['row1']->value['insurance_over'] : null)==0){?>&nbsp;<a href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['insurance_id']) ? $_smarty_tpl->tpl_vars['row1']->value['insurance_id'] : null);?>
" >修改</a>&nbsp;<a href="javascript:if(confirm('是否确定删除该车险记录？')){window.location.href='delete.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row1']->value['insurance_id']) ? $_smarty_tpl->tpl_vars['row1']->value['insurance_id'] : null);?>
';}">删除</a><?php }?>
 		</tr>
	    <?php }} ?>
	    </table>
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
	
	
</script>
<!-->

</body>
</html>