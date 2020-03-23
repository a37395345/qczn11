<?php /* Smarty version Smarty-3.0.4, created on 2019-11-06 10:15:13
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/finance/baoxiao/first.html" */ ?>
<?php /*%%SmartyHeaderCode:289875dc22cb16dcd37-95818504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '236a85f2c31c8636476baa01ee0bb4c9023ad84c' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/finance/baoxiao/first.html',
      1 => 1571707180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '289875dc22cb16dcd37-95818504',
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
  <div class="page_tit">费用报销待审核记录</div>
  
  <div class="list">
  <table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr style="height:50px;">
    <th width="25%" colspan="2">司机出车报销</th>
    <th width="25%" colspan="2">公司运营报销</th>
    <th width="25%" colspan="2">微信活动返现</th>
    <th width="25%" colspan="2">机务报销</th>
  </tr>
  <tr style="height:60px;">
 	<td style="text-align:center;background-color:#B1C9FF;" width="16%"><a href="list3.php?op=leadcheck&t=1&search_user=<?php echo $_smarty_tpl->getVariable('search_user')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
"><?php echo (isset($_smarty_tpl->getVariable('info')->value['nCount1']) ? $_smarty_tpl->getVariable('info')->value['nCount1'] : null);?>
</a>个</td>
 	<td style="text-align:center;background-color:#B1C9FF;"><a href="list3.php?op=leadcheck&t=1&search_user=<?php echo $_smarty_tpl->getVariable('search_user')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
"><?php echo (isset($_smarty_tpl->getVariable('info')->value['nSum1']) ? $_smarty_tpl->getVariable('info')->value['nSum1'] : null);?>
</a>元</td>
 	<td style="text-align:center;background-color:#FE6E47;" width="16%"><a href="list3.php?op=leadcheck&t=2&search_user=<?php echo $_smarty_tpl->getVariable('search_user')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
"><?php echo (isset($_smarty_tpl->getVariable('info')->value['nCount2']) ? $_smarty_tpl->getVariable('info')->value['nCount2'] : null);?>
</a>个</td>
 	<td style="text-align:center;background-color:#FE6E47;"><a href="list3.php?op=leadcheck&t=2&search_user=<?php echo $_smarty_tpl->getVariable('search_user')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
"><?php echo (isset($_smarty_tpl->getVariable('info')->value['nSum2']) ? $_smarty_tpl->getVariable('info')->value['nSum2'] : null);?>
</a>元</td>
 	<td style="text-align:center;background-color:#FE6E47;" width="16%"><a href="list3.php?op=leadcheck&t=4&search_user=<?php echo $_smarty_tpl->getVariable('search_user')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
"><?php echo (isset($_smarty_tpl->getVariable('info')->value['nCount4']) ? $_smarty_tpl->getVariable('info')->value['nCount4'] : null);?>
</a>个</td>
 	<td style="text-align:center;background-color:#FE6E47;"><a href="list3.php?op=leadcheck&t=4&search_user=<?php echo $_smarty_tpl->getVariable('search_user')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
"><?php echo (isset($_smarty_tpl->getVariable('info')->value['nSum4']) ? $_smarty_tpl->getVariable('info')->value['nSum4'] : null);?>
</a>元</td>
 	<td style="text-align:center;background-color:#B1C9FF;" width="16%"><a href="list3.php?op=leadcheck&t=3&search_user=<?php echo $_smarty_tpl->getVariable('search_user')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
"><?php echo (isset($_smarty_tpl->getVariable('info')->value['nCount3']) ? $_smarty_tpl->getVariable('info')->value['nCount3'] : null);?>
</a>个</td>
 	<td style="text-align:center;background-color:#B1C9FF;"><a href="list3.php?op=leadcheck&t=3&search_user=<?php echo $_smarty_tpl->getVariable('search_user')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
"><?php echo (isset($_smarty_tpl->getVariable('info')->value['nSum3']) ? $_smarty_tpl->getVariable('info')->value['nSum3'] : null);?>
</a>元</td>
 </tr>
 <tr >
    <td colspan="8" style="text-align:left;padding-left:50px;"><input type="radio" name="search_user" value="track" >待跟踪报销(<?php echo (isset($_smarty_tpl->getVariable('info')->value['nCount5']) ? $_smarty_tpl->getVariable('info')->value['nCount5'] : null);?>
个)
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" name="search_shop" value="" <?php $_tmp1=$_smarty_tpl->getVariable('search_shop')->value;?><?php if (empty($_tmp1)){?>checked<?php }?> />全部 
            <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shoplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
            <input type="radio" name="search_shop" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null);?>
" <?php if ($_smarty_tpl->getVariable('search_shop')->value==(isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null)){?>checked<?php }?>/><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>

            <?php }} ?>
    </td>
  </tr>
 </table>
 
  </div>

</div>
<!-->
<script>
var search_shop,search_user;
	//鼠标移动表格效果
	$(document).ready(function(){
	    $("input[name='search_user'],input[name='search_shop']").change(function(){
	    	search_shop = $("input[name='search_shop']:checked").val();
	    	search_user = $("input[name='search_user']:checked").val();
	    	location.href="list4.php?search_user="+search_user+"&search_shop="+search_shop;
	    });
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
   	
    function add(){
    	var item=$('input:radio[name="itemtype"]:checked').val();
    	location.href="create.php?item="+item;
    }
    function add2(){
    	var item2=$('input:radio[name="itemtype2"]:checked').val();
    	location.href="create.php?item="+item2;
    }
	function bao(uid){
		demo_iframe('list.php?task=bao&uid='+uid,'费用报销',580,390,'login_js');
	}
	
	function check(bid){
		demo_iframe('list.php?task=check&uid='+bid,'费用报销审核',580,480,'login_js');
	}
	
	function leadcheck(bid){
		if (bid==""){
			bids = getChecked();
			bids = bids.toString();
	        if(bids == ''){
	        	alert("请先选择报销记录！");
	        	return false;
	        }
	        demo_iframe('list.php?task=leadcheck&uids='+bids,'费用报销领导审批',750,460,'login_js');
		}else{
			demo_iframe('list.php?task=leadcheck&uid='+bid,'费用报销领导审批',750,460,'login_js');
		}
		
	}
	
</script>
<!-->

</body>
</html>