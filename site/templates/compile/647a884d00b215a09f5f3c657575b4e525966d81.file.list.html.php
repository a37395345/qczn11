<?php /* Smarty version Smarty-3.0.4, created on 2019-09-30 13:46:57
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/busilong/list.html" */ ?>
<?php /*%%SmartyHeaderCode:9020416745d9196d16424b2-59406374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '647a884d00b215a09f5f3c657575b4e525966d81' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/busilong/list.html',
      1 => 1569822068,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9020416745d9196d16424b2-59406374',
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
<link href="../../../css/box.css" rel="stylesheet" type="text/css" />
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
  <div class="page_tit"><?php echo $_smarty_tpl->getVariable('PAGETITLE')->value;?>
</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <div class="form2">
        <form action="list.php?task=list" id="form1" method="get">
        	<input type="hidden" name="op" value="<?php echo $_smarty_tpl->getVariable('op')->value;?>
" />                        
            <input type="hidden" name="b_id" value="<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
" />
            <input type="hidden" name="search_status" id="search_status" value="<?php echo $_smarty_tpl->getVariable('search_status')->value;?>
" />          
	        <dl class="lineD">
	          <dt>用车单位：</dt>
	          <dd>
	              <select name="company" id="company" >
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
	              </select><input type="text" id="search_key" size="15" placeholder="快速检索" />
	              
	          </dd>
	        </dl>
            <dl class="lineD">
            <dt>车牌号：</dt>
            <dd>
            	苏D<input type="text" name="paiche_car" size="12"  />
            </dd>
            </dl>
            <div class="page_btm">
            	<input class="btn_b" type="submit" value="确定">
            </div>
        </form>
    </div>
</div>

  <!-------- 用户列表 -------->
  <div class="Toolbar_inbox">
  	<div class="page right">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>
	<a href="list.php?task=create&b_id=<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
" class="btn_a"><span>添加</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>
    <input type="radio" name="showtype" value="d" <?php if ($_smarty_tpl->getVariable('search_status')->value=="d"){?>checked<?php }?>>未完结<input type="radio" name="showtype" value="y" <?php if ($_smarty_tpl->getVariable('search_status')->value=="y"){?>checked<?php }?>>已完结<input type="radio" name="showtype" value="a" <?php if ($_smarty_tpl->getVariable('search_status')->value=="a"){?>checked<?php }?>>全部
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<th>合同号</th>
	<th>用车单位</th>
	<th width="80">实际用车时间</th>
	<?php if ($_smarty_tpl->getVariable('busitype')->value=='4'||$_smarty_tpl->getVariable('busitype')->value=='5'){?>
	<th width="40">司机</th>
	<?php }?>
	<th>车辆</th>
	<th width="30">押金</th>
	<th>租金</th>
	<th>超公里</th>
	<th width="185">备注</th>
	<th>派车单数</th>
	<th>剩余单数</th>
	<th>超期未还车数</th>
	<th>未结账数</th>
	<th class="line_l" width="12%">操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('busiList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['contract_id']) ? $_smarty_tpl->tpl_vars['row']->value['contract_id'] : null);?>
">
	  	<td><a href="list.php?task=detail&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['contract_id']) ? $_smarty_tpl->tpl_vars['row']->value['contract_id'] : null);?>
&b_id=<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['contract_num']) ? $_smarty_tpl->tpl_vars['row']->value['contract_num'] : null);?>
</a></td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['contract_startDate']) ? $_smarty_tpl->tpl_vars['row']->value['contract_startDate'] : null);?>
<hr /><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['contract_endDate']) ? $_smarty_tpl->tpl_vars['row']->value['contract_endDate'] : null);?>
</td>
	    <?php if ($_smarty_tpl->getVariable('busitype')->value=='4'||$_smarty_tpl->getVariable('busitype')->value=='5'){?>
        <td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['contract_shunt']) ? $_smarty_tpl->tpl_vars['row']->value['contract_shunt'] : null)==1){?>调车<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['siji']) ? $_smarty_tpl->tpl_vars['row']->value['siji'] : null);?>
<?php }?></td>
        <?php }?>
	    <td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['contract_shunt']) ? $_smarty_tpl->tpl_vars['row']->value['contract_shunt'] : null)==1){?>调车<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
<?php }?></td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['contract_deposit']) ? $_smarty_tpl->tpl_vars['row']->value['contract_deposit'] : null);?>
</td>
        <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['contract_rent']) ? $_smarty_tpl->tpl_vars['row']->value['contract_rent'] : null);?>
</td>
        <td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['contract_unlimitKm']) ? $_smarty_tpl->tpl_vars['row']->value['contract_unlimitKm'] : null)=="Y"){?>不限<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['contract_limitKmType']) ? $_smarty_tpl->tpl_vars['row']->value['contract_limitKmType'] : null)==1){?>按季<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['contract_limitKmType']) ? $_smarty_tpl->tpl_vars['row']->value['contract_limitKmType'] : null)==2){?>按年<?php }else{ ?>按月<?php }?></td>
        <td style="text-align:left;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['contract_note']) ? $_smarty_tpl->tpl_vars['row']->value['contract_note'] : null);?>
</td>


	    <td><?php $_tmp1=(isset($_smarty_tpl->tpl_vars['row']->value['gCount']) ? $_smarty_tpl->tpl_vars['row']->value['gCount'] : null);?><?php if (empty($_tmp1)){?>0<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['gCount']) ? $_smarty_tpl->tpl_vars['row']->value['gCount'] : null);?>
<?php }?></td>

	    <td><?php $_tmp2=(isset($_smarty_tpl->tpl_vars['row']->value['lCount']) ? $_smarty_tpl->tpl_vars['row']->value['lCount'] : null);?><?php if (empty($_tmp2)){?>0<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['lCount']) ? $_smarty_tpl->tpl_vars['row']->value['lCount'] : null);?>
<?php }?></td>
	    <td><?php $_tmp3=(isset($_smarty_tpl->tpl_vars['row']->value['rCount']) ? $_smarty_tpl->tpl_vars['row']->value['rCount'] : null);?><?php if (empty($_tmp3)){?>0<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['rCount']) ? $_smarty_tpl->tpl_vars['row']->value['rCount'] : null);?>
<?php }?></td>
	    <td><?php $_tmp4=(isset($_smarty_tpl->tpl_vars['row']->value['zCount']) ? $_smarty_tpl->tpl_vars['row']->value['zCount'] : null);?><?php if (empty($_tmp4)){?>0<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['zCount']) ? $_smarty_tpl->tpl_vars['row']->value['zCount'] : null);?>
<?php }?></td>
	    <td>
			<a href="list.php?task=detail&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['contract_id']) ? $_smarty_tpl->tpl_vars['row']->value['contract_id'] : null);?>
&b_id=<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
">派车明细</a>
			<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['contract_complete']) ? $_smarty_tpl->tpl_vars['row']->value['contract_complete'] : null)==0){?>&nbsp;|&nbsp;<a href="list.php?task=modify&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['contract_id']) ? $_smarty_tpl->tpl_vars['row']->value['contract_id'] : null);?>
">编辑</a><?php }?>
			<br /><a href="../sales/contract/detail.php?cnum=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['contract_num']) ? $_smarty_tpl->tpl_vars['row']->value['contract_num'] : null);?>
" target="_blank">合同明细</a>
			<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['contract_complete']) ? $_smarty_tpl->tpl_vars['row']->value['contract_complete'] : null)==0){?>
			&nbsp;|&nbsp;
			<?php $_tmp5=(isset($_smarty_tpl->tpl_vars['row']->value['gCount']) ? $_smarty_tpl->tpl_vars['row']->value['gCount'] : null);?><?php if (!empty($_tmp5)&&(isset($_smarty_tpl->tpl_vars['row']->value['gCount']) ? $_smarty_tpl->tpl_vars['row']->value['gCount'] : null)==(isset($_smarty_tpl->tpl_vars['row']->value['hCount']) ? $_smarty_tpl->tpl_vars['row']->value['hCount'] : null)){?>
			<a href="javascript:if(confirm('是否确定完结此用车协议？')){window.location.href='list.php?task=complete&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['contract_id']) ? $_smarty_tpl->tpl_vars['row']->value['contract_id'] : null);?>
&b_id=<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
';}">完结</a>
			<?php }else{ ?>
			<a href="javascript:if(confirm('是否确定删除？')){window.location.href='list.php?task=delete&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['contract_id']) ? $_smarty_tpl->tpl_vars['row']->value['contract_id'] : null);?>
&b_id=<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
';}">删除</a>
			<?php }?>
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
	<a href="list.php?task=create&b_id=<?php echo $_smarty_tpl->getVariable('busitype')->value;?>
" class="btn_a"><span>添加</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>
  </div> 
</div>
<!-->
<script>
	//鼠标移动表格效果
	$(document).ready(function(){
	    $("#tmpcontractNum").focus();
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
	            $("#company option").each(function (){  
	                var txt = $(this).text();  
	                if(txt.toLowerCase().indexOf(aa) >-1){  
	                    $(this).attr("selected",true);
	                    return false;
	                }
	             });
	    });
		$("input[name='showtype']").change(function(){
	    	var selectedvalue = $("input[name='showtype']:checked").val();
	    	$("#search_status").val(selectedvalue);
	    	$("#form1").submit();
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
	function folder(type, _this) {
		$('#search_'+type).slideToggle('fast');
		if ($(_this).html() == '展开') {
			$(_this).html('收起');
		}else {
			$(_this).html('展开');
		}
		
	}
	
	function continuecar(pid){
		demo_iframe('continue.php?pid='+pid,'续租',750,540,'login_js');
	}
	
	function changeroute(pid){
		demo_iframe('changeroute.php?pid='+pid,'改变行程',750,520,'login_js');
	}
	
	function front(pid){
		demo_iframe('front.php?pid='+pid,'收定金',750,400,'login_js');
	}
	
	function account(pid,op_flag){
		demo_iframe('account.php?pid='+pid+'&op_flag='+op_flag,'订单款项处理',850,460,'login_js');
	}
	
	function vio(pid){
		demo_iframe('vio.php?pid='+pid,'订单违约',850,460,'login_js');
	}
	
	function diaodu(pid){
		demo_iframe('diaodu.php?pid='+pid,'订单车辆调度',750,460,'login_js');
	}
	
	function changeCar(pid){
		demo_iframe('changecar.php?pid='+pid,'中途换车',950,480,'login_js');
	}
	function changeDriver(pid){
	    demo_iframe('changedriver.php?pid='+pid,'中途换司机',650,460,'login_js');
	}
	
	function returnCar(pid){
		demo_iframe('returncar.php?pid='+pid,'自驾还车',750,460,'login_js');
	}
	
	function giveCar(pid){
		demo_iframe('givecar.php?pid='+pid,'代驾交车',750,460,'login_js');
	}
	
	function backMoney(pid){
		demo_iframe('backmoney.php?pid='+pid,'退违章保证金',750,460,'login_js');
	}
	
	function check(pid){
		demo_iframe('check.php?pid='+pid,'审核',550,380,'login_js');
	}
	
	function revisit(pid){
		demo_iframe('revisit.php?pid='+pid,'客户回访',550,460,'login_js');
	}
	
	function batchaccount(){
		pid = getChecked();
		pid = pid.toString();
        if(pid == ''){
        	alert("请先选择用车记录！");
        	return false;
        }
        demo_iframe('batchaccount.php?pids='+pid,'批量结账处理',950,500,'login_js');
	}
	
	function shuntaccount(){
		pid = getChecked();
		pid = pid.toString();
        if(pid == ''){
        	alert("请先选择用车记录！");
        	return false;
        }
        demo_iframe('shuntaccount.php?pids='+pid,'调车结账处理',750,500,'login_js');
	}

</script>
<!-->

</body>
</html>