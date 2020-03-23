<?php /* Smarty version Smarty-3.0.4, created on 2015-04-18 14:29:41
         compiled from "D:\czyhqc\site\templates\elsker\operator/finance/baoxiao/list2.html" */ ?>
<?php /*%%SmartyHeaderCode:88105531f9436dd698-06500027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1de25e89d557b5f3e7d0481d897c51a019ab5916' => 
    array (
      0 => 'D:\\czyhqc\\site\\templates\\elsker\\operator/finance/baoxiao/list2.html',
      1 => 1429338077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88105531f9436dd698-06500027',
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
  <div class="page_tit">费用报销记录</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <div class="form2">
    <form action="list.php" method="get">
    <input type="hidden" id="op" name="op" value="<?php echo $_smarty_tpl->getVariable('op')->value;?>
"/>
    	<dl class="lineD">
            <dt>报销日期：</dt>
            <dd>
            <input id="search_startDate" type="text" value="" name="search_startDate" onClick="calendar.show(this);">到
            <input id="search_endDate" type="text" value="" name="search_endDate" onClick="calendar.show(this);">
            </dd>
         </dl>
         <dl class="lineD">
	        <dt>报销人：</dt>
	            <dd><input type="text" name="searchname" size="16" /></dd>
         </dl>
         <div class="page_btm">
            	<input class="btn_b" type="submit" value="确定">
         </div>
    </form>
    </div>
  </div>
  <div class="Toolbar_inbox">
  	<a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>
	<?php if ($_smarty_tpl->getVariable('op')->value=="leadcheck"){?><a href="javascript:leadcheck('');" class="btn_a">批量审批</a><?php }?>
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
    <th>合同号</th>
	<th>用车时间</th>
	<th>过桥过路费</th>
	<th>停车费</th>
	<th>油费</th>
	<th>住宿费</th>
	<th>餐费</th>
	<th width="25%">开车线路</th>
	<th>报销人</th>
	<th>报销备注</th>
	<th>报销日期</th>
	<?php if ($_smarty_tpl->getVariable('op')->value!="check"){?>
	<th>审核</th>
	<?php }?>
	<th class="line_l">操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list1')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
">
	<?php if ($_smarty_tpl->getVariable('op')->value=="leadcheck"){?>
	<td><input type="checkbox" name="checkbox" id="checkbox<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
"></td>
	<?php }?>
	<td><a href="../../business/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiaoPaicheId']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiaoPaicheId'] : null);?>
" target="_blank"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiaoPaicheContractNum']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiaoPaicheContractNum'] : null);?>
</a></td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_startDate'] : null);?>
<br /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_endDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_endDate'] : null);?>
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
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_line']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_line'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_remarks']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_remarks'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_date']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_date'] : null);?>
</td>
	<?php if ($_smarty_tpl->getVariable('op')->value!="check"){?>
	<td style="text-align:left;"><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgree']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgree'] : null)==0){?>未审核<?php }else{ ?><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgree']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgree'] : null)==-1){?>审核未通过<?php }else{ ?>审核通过<?php }?>(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeMan']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeMan'] : null);?>
&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeTime']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeTime'] : null);?>
)<hr />备注:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeRemarks']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeRemarks'] : null);?>
<?php }?></td>
	<?php }?>
	<td>
	<?php if ($_smarty_tpl->getVariable('op')->value=="leadcheck"){?>
	<a href="javascript:leadcheck(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
);">审批</a>
	<?php }elseif($_smarty_tpl->getVariable('op')->value=="check"){?>
	<a href="javascript:check(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
);">审核</a>
	<?php }elseif($_smarty_tpl->getVariable('op')->value=="bao"){?>
	<a href="javascript:bao(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
);">受理</a>
	<?php }else{ ?><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isOver']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isOver'] : null)==1){?>已成功报销<?php }?>
	<?php }?>
	</td>
</tr>
 <?php }} ?>
 </table>
 <br /><br />
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <?php if ($_smarty_tpl->getVariable('op')->value=="leadcheck"){?>
    <th style="width:30px;">
		<input type="checkbox" id="checkbox_handle" onclick="checkAll(this)" value="0">
    	<label for="checkbox"></label>
	</th>
	<?php }?>
	<th>报销内容</th>
	<th>报销人</th>
	<th>报销金额</th>
	<th>报销备注</th>
	<th>报销日期</th>
	<?php if ($_smarty_tpl->getVariable('op')->value!="check"){?>
	<th>审核</th>
	<?php }?>
	<th class="line_l">操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list2')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
">
	<?php if ($_smarty_tpl->getVariable('op')->value=="leadcheck"){?>
	<td><input type="checkbox" name="checkbox" id="checkbox<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
"></td>
	<?php }?>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_content']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_content'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_money']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_money'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_remarks']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_remarks'] : null);?>
</td>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_date']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_date'] : null);?>
</td>
	<?php if ($_smarty_tpl->getVariable('op')->value!="check"){?>
	<td style="text-align:left;"><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgree']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgree'] : null)==0){?>未审核<?php }else{ ?><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgree']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgree'] : null)==-1){?>审核未通过<?php }else{ ?>审核通过<?php }?>(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeMan']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeMan'] : null);?>
&nbsp;<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeTime']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeTime'] : null);?>
)<hr />备注:<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeRemarks']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isAgreeRemarks'] : null);?>
<?php }?></td>
	<?php }?>
	<td>
	<?php if ($_smarty_tpl->getVariable('op')->value=="leadcheck"){?>
	<a href="javascript:leadcheck(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
);">审批</a>
	<?php }elseif($_smarty_tpl->getVariable('op')->value=="check"){?>
	<a href="javascript:check(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
);">审核</a>
	<?php }elseif($_smarty_tpl->getVariable('op')->value=="bao"){?>
	<a href="javascript:bao(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_id']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_id'] : null);?>
);">受理</a>
	<?php }else{ ?>
	<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['baoxiao_isOver']) ? $_smarty_tpl->tpl_vars['row']->value['baoxiao_isOver'] : null)==1){?>已成功报销<?php }?>
	<?php }?>
	</td>
</tr>
 <?php }} ?>
 </table>
 </div>

</div>
<!-->
<script>
	//鼠标移动表格效果
	$(document).ready(function(){
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
                    alert();
                }  
            })  
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
		demo_iframe('list.php?task=bao&uid='+uid,'费用报销',500,350,'login_js');
	}
	
	function check(bid){
		demo_iframe('list.php?task=check&uid='+bid,'费用报销审核',550,420,'login_js');
	}
	
	function leadcheck(bid){
		if (bid==""){
			bids = getChecked();
			bids = bids.toString();
	        if(bids == ''){
	        	alert("请先选择报销记录！");
	        	return false;
	        }
	        demo_iframe('list.php?task=leadcheck&uids='+bids,'费用报销领导审批',550,400,'login_js');
		}else{
			demo_iframe('list.php?task=leadcheck&uid='+bid,'费用报销领导审批',550,400,'login_js');
		}
		
	}
	
</script>
<!-->

</body>
</html>