<?php /* Smarty version Smarty-3.0.4, created on 2019-05-08 09:27:15
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/base/qiye_lianxiren.html" */ ?>
<?php /*%%SmartyHeaderCode:309885cd23073a2da85-77184885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcfcc5536c3383018815edea9c718a936707987d' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/base/qiye_lianxiren.html',
      1 => 1557278753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '309885cd23073a2da85-77184885',
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
<link href="../../../../css/box.css" rel="stylesheet" type="text/css" />
<link href="../../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />

<script type="text/javascript" src="../../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<script type="text/javascript" src="../../../../js/box.js"></script>
<script type="text/javascript" src="../../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="../../../../js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<script type="text/javascript" src="../../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
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
        <form action="list.php?task=search" method="post">
            <input type="hidden" name="tasktype" value="<?php echo $_smarty_tpl->getVariable('tasktype')->value;?>
" />
            <dl class="lineD">
            <dt>名称：</dt>
            <dd>
            <input id="title" type="text" value="" name="title">
            <p>支持模糊查询</p>
            </dd>
            </dl>
            
            <dl class="lineD">
            <dt>联系人：</dt>
            <dd>
            <input id="client_Mlinker" type="text" value="" name="client_Mlinker">
            <p>支持模糊查询</p>
            </dd>
            </dl>
            <dl class="lineD">
            <dt>联系人手机：</dt>
            <dd>
            <input id="client_Mphone" type="text" value="" name="client_Mphone">
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
	<a href="create.php" class="btn_a"><span>添加</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="deleteNews();"><span>删除</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>

	<?php if ($_smarty_tpl->getVariable('tasktype')->value=='client'){?><a href="export.php" class="btn_a" target="blank"><span>导出</span></a><?php }?>

  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th style="width:30px;">
		<input type="checkbox" id="checkbox_handle" onclick="checkAll(this)" value="0">
    	<label for="checkbox"></label>
	</th>
    <th width="25%">公司名称</th>
	<th width="8%">联系人<hr/>手机</th>
	<th width="10%">单位电话</th>
	<th width="16%">单位地址</th>
	<th width="8%">业绩归属</th>
	<th width="8%">服务门店</th>
	<th width="10%">合同</th>
	<th>备注</th>
	<th width="8%">操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('baseList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_id']) ? $_smarty_tpl->tpl_vars['row']->value['client_id'] : null);?>
">
    	<td><input type="checkbox" name="checkbox" id="checkbox<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_id']) ? $_smarty_tpl->tpl_vars['row']->value['client_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_id']) ? $_smarty_tpl->tpl_vars['row']->value['client_id'] : null);?>
"></td>
	  	<td style="text-align:left;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null);?>
</td>
		<td style="text-align:left;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_Mlinker']) ? $_smarty_tpl->tpl_vars['row']->value['client_Mlinker'] : null);?>
<hr/><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_Mphone']) ? $_smarty_tpl->tpl_vars['row']->value['client_Mphone'] : null);?>
</td>
		
		<td style="text-align:left;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_tel']) ? $_smarty_tpl->tpl_vars['row']->value['client_tel'] : null);?>
</td>
		<td style="text-align:left;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_add']) ? $_smarty_tpl->tpl_vars['row']->value['client_add'] : null);?>
</td>
		<td style="text-align:left;"><span id="start_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_id']) ? $_smarty_tpl->tpl_vars['row']->value['client_id'] : null);?>
" data-id="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_id']) ? $_smarty_tpl->tpl_vars['row']->value['client_id'] : null);?>
" data-ywyid="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_salesman']) ? $_smarty_tpl->tpl_vars['row']->value['client_salesman'] : null);?>
" <?php if ($_smarty_tpl->getVariable('nowuserid')->value==46||$_smarty_tpl->getVariable('nowuserid')->value==1){?>class="spanremarks"<?php }?>><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null)!=''){?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>
<?php }else{ ?>未设定<?php }?></span>
		<?php if ($_smarty_tpl->getVariable('nowuserid')->value==46||$_smarty_tpl->getVariable('nowuserid')->value==1){?><select id="salesman_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_id']) ? $_smarty_tpl->tpl_vars['row']->value['client_id'] : null);?>
" style="display:none;" class="textremarks">
		<option value="0">业务员</option>
		<?php  $_smarty_tpl->tpl_vars['row3'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('ywy_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row3']->key => $_smarty_tpl->tpl_vars['row3']->value){
?>
    	<option value="<?php echo (isset($_smarty_tpl->tpl_vars['row3']->value['emp_id']) ? $_smarty_tpl->tpl_vars['row3']->value['emp_id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['row3']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row3']->value['emp_name'] : null);?>
</option>
    	<?php }} ?>
		</select><?php }?>
        </td>
        <td style="text-align:left;"><span id="street_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_id']) ? $_smarty_tpl->tpl_vars['row']->value['client_id'] : null);?>
" data-id="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_id']) ? $_smarty_tpl->tpl_vars['row']->value['client_id'] : null);?>
" data-shopid="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_shopid']) ? $_smarty_tpl->tpl_vars['row']->value['client_shopid'] : null);?>
" <?php if ($_smarty_tpl->getVariable('nowuserid')->value==46||$_smarty_tpl->getVariable('nowuserid')->value==1){?>class="spanremarks"<?php }?>><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null)!=''){?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null);?>
<?php }else{ ?>未设定<?php }?></span>
		<?php if ($_smarty_tpl->getVariable('nowuserid')->value==46||$_smarty_tpl->getVariable('nowuserid')->value==1){?><select id="shop_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_id']) ? $_smarty_tpl->tpl_vars['row']->value['client_id'] : null);?>
" style="display:none;" class="textremarks">
		<option value="0">服务归属门店</option>
		<?php  $_smarty_tpl->tpl_vars['row3'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shop_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row3']->key => $_smarty_tpl->tpl_vars['row3']->value){
?>
    	<option value="<?php echo (isset($_smarty_tpl->tpl_vars['row3']->value['shop_id']) ? $_smarty_tpl->tpl_vars['row3']->value['shop_id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['row3']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row3']->value['shop_name'] : null);?>
</option>
    	<?php }} ?>
		</select><?php }?>
        </td>
        <td style="text-align:left;"><?php  $_smarty_tpl->tpl_vars['row2'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['row']->value['contract_list']) ? $_smarty_tpl->tpl_vars['row']->value['contract_list'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row2']->key => $_smarty_tpl->tpl_vars['row2']->value){
?>
        <a href="../../sales/contract/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['contract_id']) ? $_smarty_tpl->tpl_vars['row2']->value['contract_id'] : null);?>
" target="_blank"><?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['contract_number']) ? $_smarty_tpl->tpl_vars['row2']->value['contract_number'] : null);?>
</a><hr />
        <?php }} ?></td>
		<td style="text-align:left;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_Mremark']) ? $_smarty_tpl->tpl_vars['row']->value['client_Mremark'] : null);?>
</td>
	    <td>
			<a href="javascript:price(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_id']) ? $_smarty_tpl->tpl_vars['row']->value['client_id'] : null);?>
);">报价方案</a><hr/>
			<a href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_id']) ? $_smarty_tpl->tpl_vars['row']->value['client_id'] : null);?>
">编辑</a> --            
            <a href="javascript:if(confirm('是否确定删除？')){window.location.href='delete.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_id']) ? $_smarty_tpl->tpl_vars['row']->value['client_id'] : null);?>
';}">删除</a>
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
    <a href="javascript:void(0);" class="btn_a" onclick="deleteNews();"><span>删除</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>
   <a href="export.php" class="btn_a" target="blank"><span>导出</span></a>   	
  </div> 
</div>
<!-->
<script>
	var now_client_id=0;
	var now_ywy_id=0;
	var now_shop_id=0;
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
			now_client_id=$(this).data("id");
			now_object=$(this).attr("id");
	    	$(this).css("display","none");
	    	if (now_object=="start_"+now_client_id){
	    		now_ywy_id=$(this).data("ywyid");
	    		$("#salesman_"+now_client_id).css("display","inline-block");
		    	$("#salesman_"+now_client_id).val(now_ywy_id);
	    	}
	    	if (now_object=="street_"+now_client_id){
	    		now_shop_id=$(this).data("shopid");
	    		$("#shop_"+now_client_id).css("display","inline-block");
		    	$("#shop_"+now_client_id).val(now_shop_id);
	    	}
	    	
	    });
		$(".textremarks").change(function(){
			now_object=$(this).attr("id");
			if (now_object=="salesman_"+now_client_id){
				now_ywy_id=$(this).find("option:selected").val();
				$(this).css("display","none");
				
				$("#start_"+now_client_id).html($(this).find("option:selected").text());
				$("#start_"+now_client_id).data("ywyid",now_ywy_id);
		    	$("#start_"+now_client_id).css("display","inline-block");
		    	$.get("list.php?task=setywy&client_id="+now_client_id+"&ywy_id="+now_ywy_id,{}, function(jsonmsg){
	    			
	    		},"json");
		    	now_ywy_id=0;
			}
			if (now_object=="shop_"+now_client_id){
				now_shop_id=$(this).find("option:selected").val();
				$(this).css("display","none");
				
				$("#street_"+now_client_id).html($(this).find("option:selected").text());
				$("#street_"+now_client_id).data("shopid",now_shop_id);
		    	$("#street_"+now_client_id).css("display","inline-block");
		    	$.get("list.php?task=setywy&client_id="+now_client_id+"&shop_id="+now_shop_id,{}, function(jsonmsg){
	    			
	    		},"json");
		    	now_shop_id=0;
			}
	    	
	    	now_client_id=0;
	    	
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

	//获取已选择用户的ID数组
	function getChecked() {
		var uids = new Array();
		$.each($('table input:checked'), function(i, n){
			uids.push( $(n).val() );
		});
		return uids;
	}
    
    //删除用户
    function deleteNews(uid) {
        uid = uid ? uid : getChecked();
        uid = uid.toString();
        if(uid == '' || !confirm('删除成功后将无法恢复，确认继续？')) return false;
        
        $.post("delete.php?multi=1", {uid:uid}, function(res){
            if(res == '1') {
                uid = uid.split(',');
                for(i = 0; i < uid.length; i++) {
                    $('#badge_'+uid[i]).remove();
                }
                ui.success('操作成功');
            }else {
                ui.error('操作失败');
            }
        });
    }
    //导出Excel
    function excel(){
    	
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
		demo_iframe('price.php?client_id='+carid,'服务报价方案',850,470,'login_js');
	}
	
	function setYWY(client_id){
		demo_iframe('list.php?task=setywy&client_id='+client_id,'设定业务员',850,470,'login_js');
	}

</script>
<!-->

</body>
</html>