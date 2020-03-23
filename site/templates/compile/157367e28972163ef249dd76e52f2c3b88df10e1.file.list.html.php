<?php /* Smarty version Smarty-3.0.4, created on 2019-04-03 10:30:02
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/assets/list.html" */ ?>
<?php /*%%SmartyHeaderCode:316255ca41aaa622e56-39287000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '157367e28972163ef249dd76e52f2c3b88df10e1' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/assets/list.html',
      1 => 1488856559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '316255ca41aaa622e56-39287000',
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
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../js/box.js"></script>
<script type="text/javascript" src="../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="../../../js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

</head>
<body>
<div class="so_main">
  <div class="page_tit">固定资产列表</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <div class="form2">
        <form action="list.php" method="get">
            <dl class="lineD">
            <dt>设备类型：</dt>
            <dd>
            <input type="radio" name="search_type" value="" <?php $_tmp1=$_smarty_tpl->getVariable('search_type')->value;?><?php if (empty($_tmp1)){?>checked<?php }?> />全部 
            <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('assetstypelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
            <input type="radio" name="search_type" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['typeid']) ? $_smarty_tpl->tpl_vars['rows']->value['typeid'] : null);?>
" <?php if ($_smarty_tpl->getVariable('search_type')->value==(isset($_smarty_tpl->tpl_vars['rows']->value['typeid']) ? $_smarty_tpl->tpl_vars['rows']->value['typeid'] : null)){?>checked<?php }?>/><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['typename']) ? $_smarty_tpl->tpl_vars['rows']->value['typename'] : null);?>

            <?php }} ?>
            </dd>
            </dl>
            <dl class="lineD">
            <dt>设备名称：</dt>
            <dd><input type="text" value="" name="search_name" placeholder="支持模糊查询"></dd>
            </dl>
            <dl class="lineD">
            <dt>购买日期：</dt>
            <dd>
            <input id="search_startDate" type="text" value="<?php echo $_smarty_tpl->getVariable('search_startDate')->value;?>
" name="search_startDate" size="10" onClick="calendar.show(this);">
            ~~
            <input id="search_endDate" type="text" value="" name="search_endDate" size="10" onClick="calendar.show(this);">
            </dd>
            </dl>
            <dl class="lineD">
            <dt>负责人：</dt>
            <dd><input type="text" value="" name="search_responsible" size="10" placeholder="支持模糊查询"></dd>
            </dl>
            <dl class="lineD">
            <dt>存放门店：</dt>
            <dd>
            <input type="radio" name="search_shop" value="" <?php $_tmp2=$_smarty_tpl->getVariable('search_shop')->value;?><?php if (empty($_tmp2)){?>checked<?php }?> />全部 
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

  <!-------- 用户列表 -------->
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
    <th style="width:30px;">
		<input type="checkbox" id="checkbox_handle" onclick="checkAll(this)" value="0">
    	<label for="checkbox"></label>
	</th>
    <th width="8%">分类</th>
	<th width="8%">设备编号</th>
	<th width="18%">设备名称</th>
	<th>规格型号</th>
	<th width="12%">购买日期</th>
	<th width="12%">存放门店</th>
	<th width="10%">负责人</th>
	<th width="8%">操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  
  <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['assets_id']) ? $_smarty_tpl->tpl_vars['row']->value['assets_id'] : null);?>
">
    	<td><input type="checkbox" name="checkbox" id="checkbox<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['assets_id']) ? $_smarty_tpl->tpl_vars['row']->value['assets_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['assets_id']) ? $_smarty_tpl->tpl_vars['row']->value['assets_id'] : null);?>
"></td>
	  	<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['typename']) ? $_smarty_tpl->tpl_vars['row']->value['typename'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['assets_code']) ? $_smarty_tpl->tpl_vars['row']->value['assets_code'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['assets_name']) ? $_smarty_tpl->tpl_vars['row']->value['assets_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['assets_spec']) ? $_smarty_tpl->tpl_vars['row']->value['assets_spec'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['assets_buydate']) ? $_smarty_tpl->tpl_vars['row']->value['assets_buydate'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['assets_responsible']) ? $_smarty_tpl->tpl_vars['row']->value['assets_responsible'] : null);?>
</td>
	    <td>
			<a href="detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['assets_id']) ? $_smarty_tpl->tpl_vars['row']->value['assets_id'] : null);?>
" target="_blank">明细</a> -- <a href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['assets_id']) ? $_smarty_tpl->tpl_vars['row']->value['assets_id'] : null);?>
">编辑</a>
			<?php if (($_smarty_tpl->getVariable('nowuserid')->value==24||$_smarty_tpl->getVariable('nowuserid')->value==70)){?>
            <hr/><a href="javascript:if(confirm('是否确定删除？')){window.location.href='delete.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['assets_id']) ? $_smarty_tpl->tpl_vars['row']->value['assets_id'] : null);?>
';}">删除</a>
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
	var now_client_id=0;
	var now_ywy_id=0;
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
			now_ywy_id=$(this).data("ywyid");
	    	$(this).css("display","none");
	    	
	    	$("#salesman_"+now_client_id).css("display","inline-block");
	    	$("#salesman_"+now_client_id).val(now_ywy_id);
	    });
		$(".textremarks").change(function(){
			now_ywy_id=$(this).find("option:selected").val();
			$(this).css("display","none");
			
			$("#start_"+now_client_id).html($(this).find("option:selected").text());
			$("#start_"+now_client_id).data("ywyid",now_ywy_id);
	    	$("#start_"+now_client_id).css("display","inline-block");
	    	$.get("list.php?task=setywy&client_id="+now_client_id+"&ywy_id="+now_ywy_id,{}, function(jsonmsg){
    			
    		},"json");
	    	now_client_id=0;
	    	now_ywy_id=0;
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