<?php /* Smarty version Smarty-3.0.4, created on 2019-11-06 10:15:19
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/finance/baoxiao/list3.html" */ ?>
<?php /*%%SmartyHeaderCode:24065dc22cb7c396f9-31905063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7bf376e552a795002fce5265f91fa34f706c11d' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/finance/baoxiao/list3.html',
      1 => 1571707179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24065dc22cb7c396f9-31905063',
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
<link href="../../../../js/jbox/jBox/Skins/GreyBlue/jbox.css?a=4" rel="stylesheet"  />
<script type="text/javascript" src="../../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<script type="text/javascript" src="../../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/jquery.jBox-2.3.min.js?a=1"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
</head>
<body onload="winload();">
<div id="waitbackbg">
	<img src="../../../../images/wait2.gif" style="position:absolute;left:50%;top:50%;"/>
</div>
<div class="so_main">
  <div class="page_tit">费用报销记录</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <div class="form2">
    <form action="<?php echo $_smarty_tpl->getVariable('url')->value;?>
" method="get" id="form1" onsubmit="winsub()">
    <input type="hidden" id="op" name="op" value="<?php echo $_smarty_tpl->getVariable('op')->value;?>
"/><input type="hidden" id="t" name="t" value="<?php echo $_smarty_tpl->getVariable('t')->value;?>
"/>
    <input type="hidden" name="search_status" id="search_status" value="<?php echo $_smarty_tpl->getVariable('search_status')->value;?>
" />
    <input type="hidden" id="firstop" name="firstop" value="<?php echo $_smarty_tpl->getVariable('firstop')->value;?>
" />
    	<dl class="lineD">
            <dt>报销日期：</dt>
            <dd>
            <input id="search_startDate" type="text" name="search_startDate" value="<?php echo $_smarty_tpl->getVariable('search_startDate')->value;?>
" onClick="calendar.show(this);">到
            <input id="search_endDate" type="text" name="search_endDate" value="<?php echo $_smarty_tpl->getVariable('search_endDate')->value;?>
" onClick="calendar.show(this);">
            </dd>
         </dl>
         <dl class="lineD">
	        <dt>报销人：</dt>
	            <dd><input type="text" name="searchname" size="16" /></dd>
         </dl>
         
         <dl class="lineD">
            <dt>店铺：</dt>
            <dd>
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
  	<a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>
	<?php if ($_smarty_tpl->getVariable('op')->value=="leadcheck"){?>&nbsp;&nbsp;<a onclick="location.href='list1.php?search_user=<?php echo $_smarty_tpl->getVariable('search_user')->value;?>
';" href="javascript:void(0);" class="btn_a"><span>返回</span></a>&nbsp;&nbsp;
	<input type="radio" name="showtype" value="d" <?php if ($_smarty_tpl->getVariable('search_status')->value=="d"){?>checked<?php }?>>未审核
	<input type="radio" name="showtype" value="y" <?php if ($_smarty_tpl->getVariable('search_status')->value=="y"){?>checked<?php }?>>已审核
	<input type="radio" name="showtype" value="a" <?php if ($_smarty_tpl->getVariable('search_status')->value=="a"){?>checked<?php }?>>全部
	 <?php }?>
  </div>
  <div class="list">
  <?php $_tmp2=$_smarty_tpl->getVariable('t')->value;?><?php if (empty($_tmp2)||$_smarty_tpl->getVariable('t')->value==1){?>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <?php if ($_smarty_tpl->getVariable('search_status')->value=="y"){?><th width="7%">审核日期</th><?php }?>
    <th width="7%">报销日期</th>
    <th width="4%">报销人</th>
	<th width="4%">桥路费</th>
	<th width="4%">停车费</th>
	<th width="4%">油费</th>
	<th width="4%">住宿费</th>
	<th width="4%">餐费</th>
	<th width="8%">付款方式</th>
	<th width="9%">合同号</th>
	<th width="12%">用车时间</th>
	<th width="20%">开车线路</th>
	<th>报销备注</th>
	<th class="line_l" width="10%">操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
">
	<?php if ($_smarty_tpl->getVariable('search_status')->value=="y"){?><td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isCheckTime']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isCheckTime'] : null);?>
</td><?php }?>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_date']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_date'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_roadQiao']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_roadQiao'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_stopCar']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_stopCar'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_oil']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_oil'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_room']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_room'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_meal']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_meal'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['payment_name']) ? $_smarty_tpl->tpl_vars['row']->value['payment_name'] : null);?>
<hr/><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_name']) ? $_smarty_tpl->tpl_vars['row']->value['bank_name'] : null);?>
</td>
	<td><a href="../../business/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiaoPaicheId']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiaoPaicheId'] : null);?>
" target="_blank"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiaoPaicheContractNum']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiaoPaicheContractNum'] : null);?>
</a></td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_startDate'] : null);?>
<hr /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_endDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_endDate'] : null);?>
</td>
	<td style="text-align:left;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_line']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_line'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_remarks']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_remarks'] : null);?>
</td>
	<td>
	<a href="detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
" target="_blank">明细</a><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isCheck']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isCheck'] : null)==0){?>&nbsp;|&nbsp;<a href="javascript:leadcheck(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
);">审批</a>&nbsp;|&nbsp;<a href="javascript:trancheck(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
);">转批</a><?php }?>
	</td>
</tr>
 <?php }} ?>
 </table>
 <br /><br />
 <?php }?>
 <?php $_tmp3=$_smarty_tpl->getVariable('t')->value;?><?php if (empty($_tmp3)||$_smarty_tpl->getVariable('t')->value==2||$_smarty_tpl->getVariable('t')->value==3||$_smarty_tpl->getVariable('t')->value==4){?>
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<?php if ($_smarty_tpl->getVariable('search_status')->value=="y"){?><th width="7%">审核日期</th><?php }?>
	<th width="7%">报销日期</th>
	<th width="4%">报销人</th>
	<th width="10%">费用类型</th>
	<th width="5%">金额</th>
	<th width="13%">付款方式</th>
	<th width="30%">报销内容</th>
	<th width="15%">报销备注</th>
	<th width="4%">店铺</th>
	<th class="line_l" width="10%">操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
">
	<?php if ($_smarty_tpl->getVariable('search_status')->value=="y"){?><td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isCheckTime']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isCheckTime'] : null);?>
</td><?php }?>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_date']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_date'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_type']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_type'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_money']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_money'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['payment_name']) ? $_smarty_tpl->tpl_vars['row']->value['payment_name'] : null);?>
<hr/><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['bank_name']) ? $_smarty_tpl->tpl_vars['row']->value['bank_name'] : null);?>
</td>
	<td style="text-align:left;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_content']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_content'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_remarks']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_remarks'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null);?>
</td>
	<td>
	<a href="detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
" target="_blank">明细</a><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isCheck']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isCheck'] : null)==0){?>&nbsp;|&nbsp;<a href="javascript:leadcheck(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
);">审批</a>&nbsp;|&nbsp;<a href="javascript:trancheck(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
);">转批</a><?php }?>
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
  	<a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>
  </div>
</div>
<!-->
<script>
var wh = $(window).height();
var wt = $(document).scrollTop();
function winload(){ 
    //$('html,body').animate({scrollTop:$('.bottom').offset().top}, 800);
	$("#waitbackbg").css("display","none");
}
function winsub(){
	wh = $(window).height();
	wt = $(document).scrollTop();
	$("#waitbackbg").css({"display":"block","top":wt,"height":wh});
}
	//鼠标移动表格效果
	$(document).ready(function(){
		var firstop=$("#firstop").val();
		if (firstop==""){
			$("#waitbackbg").css({"display":"block","top":wt,"height":wh});
			$("#firstop").val("firstop");
			$("#form1").submit();
		}
		$(".page > a").click(function(){
			wh = $(window).height();
			wt = $(document).scrollTop();
			$("#waitbackbg").css({"display":"block","top":wt,"height":wh});
		});
	    $("#tmpcontractNum").focus();
	    $("#tmpcontractNum").keydown(function(event) {  
                if (event.keyCode == 13) {
                    $.ajax({
			      		  type:'POST',
			      		  url:'getpaicheid.php',
			      		  data:{"contractNum":$(this).val()},
			      		  dataType:"json",
			      		  cache: false,
			      		  async: false,
			      		  error: function(){
			      		      return false;
			      		  },
			      		  success:function(jsonmsg){
			      		      if (jsonmsg.result==1){
			      					location.href="create.php?item="+item+"&paiche_id="+jsonmsg.pid;
			      		      }else{
			      			  		
			      		      }
			      		  }
			      	});
                }  
        });
	    $("input[name='showtype']").change(function(){
	    	var selectedvalue = $("input[name='showtype']:checked").val();
	    	$("#search_status").val(selectedvalue);
	    	$("#waitbackbg").css({"display":"block","top":wt,"height":wh});
	    	$("#form1").submit();
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
	        demo_iframe('list.php?task=leadcheck&uids='+bids,'费用报销领导审批',750,500,'login_js');
		}else{
			demo_iframe('list.php?task=leadcheck&uid='+bid+'&search_user='+$("input[name='search_user']:checked").val(),'费用报销领导审批',750,500,'login_js');
		}
		
	}
	function trancheck(bid){
		if(confirm('是否确定转批该报销单？')){
			var selectedvalue = $("input[name='search_user']:checked").val();
			$.ajax({
	      		  type:'POST',
	      		  url:'list.php',
	      		  data:{"task":"lead_accept2","chktrans":selectedvalue,"uid":bid},
	      		  dataType:"json",
	      		  cache: false,
	      		  async: false,
	      		  error: function(){
	      		      return false;
	      		  },
	      		  success:function(jsonmsg){
	      		      if (jsonmsg.result==1){
	      		    	  alert("转批成功！");
	      					location.reload();
	      		      }else{
	      			  		
	      		      }
	      		  }
	      	});
		}
	}
	
</script>
<!-->

</body>
</html>