<?php /* Smarty version Smarty-3.0.4, created on 2020-03-11 17:25:21
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/assets/list.html" */ ?>
<?php /*%%SmartyHeaderCode:32865e68ae81a0c293-24425213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01675b7ef79f946366cb6d2a771a2894d95c4524' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/assets/list.html',
      1 => 1583317437,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32865e68ae81a0c293-24425213',
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

<link href="../../../crm/css/bootstrap.min14ed.css" rel="stylesheet">
<link href="../../../crm/css/style.min862f.css" rel="stylesheet">
<link href="../../../crm/css/font-awesome.min93e3.css?" rel="stylesheet">
<link href="../../../crm/fonts1/iconfont.css?a=1" rel="stylesheet">
<link href="../../../crm/css/animate.min.css" rel="stylesheet">
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../js/box.js"></script>
<script type="text/javascript" src="../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="../../../js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<script type="text/javascript" src="../../../../js/laydate/laydate.js"></script>
<style>
    .gray-bg{
      background-color: #f3f3f4;
      padding: 20px;
    }
    .xt_problems{
      /*padding: 0 20px 20px 20px;*/
      background-color: #fff; 
      border-top:4px solid #e7eaec;
    }
    .so_main{
      overflow: hidden;
    }
    .xt_problems .page_tit{
      font-size: 14px;
      margin: 0 0 7px;
      padding: 0;
      text-overflow: ellipsis;
      color: #676a6c;
        /* border-bottom: 1px solid #ddd; */
    }
    .s_roblems table th{
      padding: 10px;
      line-height: 21px;
      vertical-align: top;
      border-top: 1px solid #ddd;
      background-color: #F5F5F6!important;
      color: #000;
      font-weight: bold;
    }
    .s_roblems table{
      width: 100%;
      max-width: 100%;
      margin-bottom: 20px;
      border-spacing: 0;
      border-collapse: collapse;
    }
    .list table td{
      padding: 8px;
      line-height: 49px;
      vertical-align:inherit!important;
    }
    .s_roblems table tr td{
      border-left: 1px solid #ddd;
      border-bottom: 1px solid #ddd;
      padding: 10px 0 10px 0;
    }
    .xt_problems table tr th{
      padding: 12px 8px 12px 8px;
    }
    .xt_problems table tr td{
      border-top: 1px solid #e7e7e7;
      border-left: 1px solid #e7e7e7;
      border-right: 1px solid #e7e7e7;
      border-bottom: 1px solid #e7e7e7;
    }
    .xt_problems .form2 .table tr td input{
      height: 28px;
      border: 1px solid #e5e6e7;
      width: 100%;
      text-indent: 1em;
    }
    .Toolbar_inbox{
      background-color:#fff;
      border-bottom:none;
      overflow: hidden;
      margin-bottom: 20px;
    }
    .page a{
      padding: 4px 6px;
      border: 1px solid #ddd;
      border-radius: 3px;
    }
    .page a:hover{
      text-decoration: none;
      background-color: #f4f4f4;
      padding: 4px 6px;
      border-radius: 3px;
      border: 1px solid #ddd;
    }
    .list table th.line_l{
      background:none;
    }
    a:hover{
      text-decoration: none;
    }
    .form2 table td{
      padding: 8px!important;
    }
    .form2 table td input{
      height: 30px;
    width: 100%;
    text-indent: 1em;
    border:1px solid #ddd; 
    }
    .form2 table td select{
    height: 30px;
    width: 100%;
    text-indent: 1em;
    }
    input{
      outline: none
    }
    select{
      outline: none;
      border: 1px solid #ddd;
    }
    .form2{
      border-top:none;
      border-bottom: 1px solid #ddd;
      padding-bottom: 15px;
    }
</style>
</head>
<body class="gray-bg wrapper-content animated fadeInRight">
<div class="xt_problems">
<div class="so_main">
  <div class="page_tit" style="float: left;">办公用品管理</div>
  <div style="clear:both"></div>
  <div style="overflow: hidden;margin-bottom: 10px;border-top: 4px solid #e7eaec;border-bottom: 1px solid #e7eaec;padding-bottom: 10px">
    <h5 style="padding-top: 10px; display: inline-block;font-size: 14px;
float: left;text-overflow: ellipsis;">搜索</h5>
 <div class="ibox-tools" style="padding-top: 14px; padding-left: 10px;float: left;">
      <a class="collapse-link"><i class="fa fa-chevron-down" id="up"></i></a>
 </div>
 <div class="ibox-tools" style=" padding-right: 20px;float:right ;">
      <div class="btn-group hidden-xs pull-right" style="margin-top:5px;" id="exampleTableEventsToolbar" role="group">
         
          <a href="create.php" class="btn btn-outline btn-default">
                           添加
          </a>
         
      </div>
  </div>
  </div>
<div id="content" style="display: none;">
    <div class="form2 s_roblems">
        <form action="list.php" method="get">
            <table>
                <tbody>
                    <tr>
                        <th style="background-color: #F5F5F6;" width="15%">设备类型：</th>
                        <td width="35%">
                          <select name="search_type">
                            <option value="0">全部</option>
                            <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('assetstypelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['typeid']) ? $_smarty_tpl->tpl_vars['rows']->value['typeid'] : null);?>
" <?php if ($_smarty_tpl->getVariable('search_type')->value==(isset($_smarty_tpl->tpl_vars['rows']->value['typeid']) ? $_smarty_tpl->tpl_vars['rows']->value['typeid'] : null)){?>checked<?php }?>/><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['typename']) ? $_smarty_tpl->tpl_vars['rows']->value['typename'] : null);?>
</option>
  <?php }} ?>
                          </select>
                        </td>
                        
                        <th style="background-color: #F5F5F6;" width="15%">设备名称：</th>
                        <td width="35%">
                            <input type="text" value="" name="search_name" placeholder="支持模糊查询">
                        </td>
                    </tr>
                    <tr>
                       <th style="background-color: #F5F5F6;" width="15%">负责人：</th>
                      <td width="35%">
                        <input type="text" value="" name="search_responsible" size="10" placeholder="支持模糊查询">
                      </td>


                      <th style="background-color: #F5F5F6;" width="15%">购买开始日期：</th>
                      <td width="35%">
                        <input  id="search_startDate" type="text" value="<?php echo $_smarty_tpl->getVariable('search_startDate')->value;?>
" name="search_startDate" size="10"  onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})">
                        
                      </td>
                     
                    </tr>
                    <tr>
                      <th style="background-color: #F5F5F6;" width="15%">存放门店：</th>
                      <td>
                        <select name="search_shop">
                          <option value="0">全部 </option>
                          <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shoplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
            <option name="search_shop" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null);?>
" <?php if ($_smarty_tpl->getVariable('search_shop')->value==(isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null)){?>checked<?php }?>/><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>
</option>
            <?php }} ?>
                        </select>
                      </td>
                       <th style="background-color: #F5F5F6;" width="15%">购买结束日期：</th>
                      <td width="35%">
                         <input  id="search_endDate" type="text" value="" name="search_endDate" size="10"  onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})">
                        
                      </td>
                     
                    </tr>
                </tbody>
            </table>

            <!-- <div class="page_btm">
                <input class="btn_b" type="submit" value="确定">
            </div>  -->  

            <button type="submit" class="btn btn-outline btn-default" style="margin-left:45%;width: 10%">
              <i class="glyphicon glyphicon-search" aria-hidden="true"></i>确定
            </button>         
        </form>
    </div>
</div>
  <!-------- 用户列表 -------->
  <div class="Toolbar_inbox">
  	<div class="row">
        <div class="col-lg-6">
            <div class="pull-left" style="margin-top:15px">
                <p>
                    显示 <?php echo ($_smarty_tpl->getVariable('p')->value-1)*10+1;?>
 到 <?php echo $_smarty_tpl->getVariable('p')->value*10;?>
 项，共 <?php echo $_smarty_tpl->getVariable('total')->value;?>
 项
                </p >
            </div>
        </div>
        <div class="col-lg-6">
            <div class="pull-right">
                <ul class="pagination">
                       <?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>

                </ul>
            </div>
        </div>
    </div>
  </div>
  <div class="list s_roblems">
  <table class="table table-bordered" width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>

    <th class="line_l" width="8%">分类</th>
	<th class="line_l" width="8%">设备编号</th>
	<th class="line_l" width="18%">设备名称</th>
	<th class="line_l">规格型号</th>
	<th class="line_l" width="12%">购买日期</th>
	<th class="line_l" width="12%">存放门店</th>
	<th class="line_l" width="10%">负责人</th>
	<th style="border-right:1px solid #ddd;" class="line_l" width="8%">操作</th>
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
	    <td style="border-right:1px solid #ddd;">
			<a title="明细" href="detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['assets_id']) ? $_smarty_tpl->tpl_vars['row']->value['assets_id'] : null);?>
" target="_blank"><i class="iconfont icon-mingxi1"></i></a>&nbsp;&nbsp;<a title="编辑" href="modify.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['assets_id']) ? $_smarty_tpl->tpl_vars['row']->value['assets_id'] : null);?>
"><i class="iconfont icon-xiugai"></i></a>
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
	<div class="row">
        <div class="col-lg-6">
            <div class="pull-left" style="margin-top:15px">
                <p>
                    显示 <?php echo ($_smarty_tpl->getVariable('p')->value-1)*10+1;?>
 到 <?php echo $_smarty_tpl->getVariable('p')->value*10;?>
 项，共 <?php echo $_smarty_tpl->getVariable('total')->value;?>
 项
                </p >
            </div>
        </div>
        <div class="col-lg-6">
            <div class="pull-right">
                <ul class="pagination">
                       <?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>

                </ul>
            </div>
        </div>
    </div>
	<!-- <a href="create.php" class="btn_a"><span>添加</span></a>
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a> -->
  </div> 
</div>
</div>
<!-->
<script>
  $("#up").click(function(){
        var content=$("#content").css('display');
        if(content=="none"){
            
            $("#content").css('display','block');
        $('#up').removeClass("fa-chevron-down");
        $('#up').addClass("fa-chevron-up");
        }else{
            $("#content").css('display','none');
        $('#up').removeClass("fa-chevron-up");
        $('#up').addClass("fa-chevron-down");
        }
    });
</script>
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