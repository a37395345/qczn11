<?php /* Smarty version Smarty-3.0.4, created on 2019-07-23 14:03:16
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/machine/baselist.html" */ ?>
<?php /*%%SmartyHeaderCode:74005d36a324377083-52111861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dda58a47ca84640849ed3eea017db6a2c439a87' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/machine/baselist.html',
      1 => 1562920600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74005d36a324377083-52111861',
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
<link href="../../../css/flbao.css" rel="stylesheet" type="text/css">
<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
</head>
<body>
<div class="so_main">
  <div class="page_tit">车辆基础资料</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <form action="list.php" method="get">
    <input type="hidden" name="car_status" value="<?php echo $_smarty_tpl->getVariable('car_status')->value;?>
"  />
    <div class="list">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
		  <tr>
		    <th>车牌号</th>
		    <th>品牌</th>
		    <th>车型</th>
		    <th>发动机号</th>
		    <th>座位数</th>
		    <th>车辆注册日期</th>
		  </tr>
		  <tr>
		    <td>苏D&nbsp;<input type="text" name="car_num" size="3"  /></td>
		    <td><input type="text" name="car_brand" size="3" /></td>
		    <td><input type="text" name="car_model" size="8" /></td>
		    <td><input type="text" name="car_motor" size="3" /></td>
		    <td><input type="text" name="car_seat" size="3"  /></td>
		    <td><input type="text" name="car_cartDate" id="car_cartDate" size="6" onclick="new Calendar().show(this);" /></td>
		   </tr>
		  <tr>
		    <td colspan="13"><input type="submit" class="sub" value="查 询" /></td>
		  <tr>
		</table>
    </div>
    </form>
  </div>
  <div class="Toolbar_inbox">
  	
  	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
    <?php if ($_smarty_tpl->getVariable('car_status')->value!=3){?><a href="create.php" class="btn_a"><span>添加</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>
    
	<a href="export.php?car_status=<?php echo $_smarty_tpl->getVariable('car_status')->value;?>
" class="btn_a" target="blank"><span>导出</span></a><?php }?>
	<input class="btn_b" type="button" value="返回" name="btnback" onclick="javascript:window.location.href='first.php';">
  </div>
  
  <div class="list">
  <?php if (($_smarty_tpl->getVariable('list')->value)){?>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th width="8%">车牌号</th>
	<th width="4%">颜色</th>
	<th width="8%">车型</th>
	<?php if ($_smarty_tpl->getVariable('car_status')->value!=3){?>
	<th width="8%">发动机号</th>
	<th width="9%">车辆识别号</th>
	<th width="3%">座位</th>
	<?php }?>
	<th width="7%">入账日期</th>
	<th width="6%">开票价格</th>
	<th width="6%">实际购买车价</th>
	<th width="4%">购置税</th>
	<th width="7%">车辆注册日期</th>
	<th width="6%">当前公里数</th>
	<?php if ($_smarty_tpl->getVariable('car_status')->value==3||$_smarty_tpl->getVariable('car_status')->value==4){?>
	<th>出售日期</th>
	<th>出售价格</th>
	<th>处理方式</th>
	<?php }?>
	<?php if ($_smarty_tpl->getVariable('car_status')->value==4){?>
	<th>过户日期</th>
	<?php }?>
	<th class="line_l">操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_status_code']) ? $_smarty_tpl->tpl_vars['row']->value['car_status_code'] : null)==3){?>style="color:#AA3355;"<?php }?>>
	    <td>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_color']) ? $_smarty_tpl->tpl_vars['row']->value['car_color'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_model']) ? $_smarty_tpl->tpl_vars['row']->value['car_model'] : null);?>
</td>
		<?php if ($_smarty_tpl->getVariable('car_status')->value!=3){?>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_motor']) ? $_smarty_tpl->tpl_vars['row']->value['car_motor'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_frame']) ? $_smarty_tpl->tpl_vars['row']->value['car_frame'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_seat']) ? $_smarty_tpl->tpl_vars['row']->value['car_seat'] : null);?>
</td>
		<?php }?>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_saleDate']) ? $_smarty_tpl->tpl_vars['row']->value['car_saleDate'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_amount']) ? $_smarty_tpl->tpl_vars['row']->value['car_amount'] : null);?>
</td>
		<td><span id="span_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
" data-id="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
" class="spanremarks"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_infactamount']) ? $_smarty_tpl->tpl_vars['row']->value['car_infactamount'] : null);?>
</span>
		<input type="text" id="price_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
" value="" style="display:none;" size="4" class="textremarks" /></td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_buytax']) ? $_smarty_tpl->tpl_vars['row']->value['car_buytax'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_cartDate']) ? $_smarty_tpl->tpl_vars['row']->value['car_cartDate'] : null);?>
</td>
		<td><span id="ssan_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
" data-id="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
" class="spanremarks"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_nowKilo']) ? $_smarty_tpl->tpl_vars['row']->value['car_nowKilo'] : null);?>
</span>
		<input type="text" id="kilo_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
" value="" style="display:none;" size="4" class="textremarks" /></td>
		<?php if ($_smarty_tpl->getVariable('car_status')->value==3||$_smarty_tpl->getVariable('car_status')->value==4){?>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_cancelDate']) ? $_smarty_tpl->tpl_vars['row']->value['car_cancelDate'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_cancelPrice']) ? $_smarty_tpl->tpl_vars['row']->value['car_cancelPrice'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_canceldeal']) ? $_smarty_tpl->tpl_vars['row']->value['car_canceldeal'] : null);?>
</td>
		<?php }?>
		<?php if ($_smarty_tpl->getVariable('car_status')->value==4){?>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_changeDate']) ? $_smarty_tpl->tpl_vars['row']->value['car_changeDate'] : null);?>
</td>
		<?php }?>
		<td><a href="list.php?task=detail&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
" target="_blank">详情</a>&nbsp;<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['car_status_code']) ? $_smarty_tpl->tpl_vars['row']->value['car_status_code'] : null)!=3){?><a href="javascript:price(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
);">报价方案</a><hr/><a href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
">编辑</a>&nbsp;<a href="list.php?task=cancel&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
">出售</a>
		<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['car_changeDate']) ? $_smarty_tpl->tpl_vars['row']->value['car_changeDate'] : null)==''){?>&nbsp;<a href="list.php?task=change&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
">过户</a><?php }?>
		</td>
 </tr>
 <?php }} ?>
 </table>
 <?php }?>
 </div>

  <div class="Toolbar_inbox">
	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
	<?php if ($_smarty_tpl->getVariable('car_status')->value!=3){?><a href="create.php" class="btn_a"><span>添加</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>
    <a href="export.php?car_status=<?php echo $_smarty_tpl->getVariable('car_status')->value;?>
" class="btn_a" target="blank"><span>导出</span></a><?php }?>&nbsp;
  </div> 
</div>
<!-->
<script>
	var now_car_id=0;
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
		$(".spanremarks").click(function(){
			now_car_id=$(this).data("id");
			now_object=$(this).attr("id");
	    	$(this).css("display","none");
	    	if (now_object=="span_"+now_car_id){
		    	$("#price_"+now_car_id).css("display","inline-block");
		    	$("#price_"+now_car_id).val($(this).text());
	    	}
	    	if (now_object=="ssan_"+now_car_id){
		    	$("#kilo_"+now_car_id).css("display","inline-block");
		    	$("#kilo_"+now_car_id).val($(this).text());
	    	}
	    });
		//失去焦点
	    $(".textremarks").blur(function(){
	    	now_object=$(this).attr("id");
	    	if (now_object=="price_"+now_car_id){
		    	$("#span_"+now_car_id).html($(this).val());
		    	$("#span_"+now_car_id).css("display","inline-block");
	            $(this).css("display","none");
	            $.get("list.php?task=updateprice&car_id="+now_car_id+"&car_infactamount="+$(this).val(),{}, function(jsonmsg){
	    			
	    		},"json");
	    	}
	    	if (now_object=="kilo_"+now_car_id){
	    		$("#ssan_"+now_car_id).html($(this).val());
		    	$("#ssan_"+now_car_id).css("display","inline-block");
	            $(this).css("display","none");
	            $.get("list.php?task=updateprice&car_id="+now_car_id+"&car_nowKilo="+$(this).val(),{}, function(jsonmsg){
	    			
	    		},"json");
	    	}
            now_car_id=0;
        });
	    //回车
	    $(".textremarks").keydown(function(event){
        if (event.keyCode == 13){
        	now_object=$(this).attr("id");
        	if (now_object=="price_"+now_car_id){
	        	$("#span_"+now_car_id).html($(this).val());
		    	$("#span_"+now_car_id).css("display","inline-block");
	            $(this).css("display","none");
	            $.get("list.php?task=updateprice&car_id="+now_car_id+"&car_infactamount="+$(this).val(),{}, function(jsonmsg){
	    			
	    		},"json");
        	}
        	if (now_object=="kilo_"+now_car_id){
	    		$("#ssan_"+now_car_id).html($(this).val());
		    	$("#ssan_"+now_car_id).css("display","inline-block");
	            $(this).css("display","none");
	            $.get("list.php?task=updateprice&car_id="+now_car_id+"&car_nowKilo="+$(this).val(),{}, function(jsonmsg){
	    			
	    		},"json");
	    	}
            now_car_id=0;
        }
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
	function price(carid){
		demo_iframe('price.php?car_id='+carid,'租赁报价方案',980,520,'login_js');
	}
	
</script>
<!-->

</body>
</html>