<?php /* Smarty version Smarty-3.0.4, created on 2019-11-14 14:53:44
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/system/log/list.html" */ ?>
<?php /*%%SmartyHeaderCode:222425dccf9f8dcad75-06563734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75dcc229ba398a9faf32e42e977dc755fc6237b2' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/system/log/list.html',
      1 => 1573714422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '222425dccf9f8dcad75-06563734',
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
<link href="../../../../crm/css/bootstrap.min14ed.css" rel="stylesheet">
<link href="../../../../crm/css/style.min862f.css" rel="stylesheet">
<link href="../../../../crm/css/font-awesome.min93e3.css?" rel="stylesheet">
<link href="../../../../crm/fonts1/iconfont.css" rel="stylesheet">
<link href="../../../../crm/css/animate.min.css" rel="stylesheet">
<script type="text/javascript" src="../../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../../js/laydate/laydate.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<script type="text/javascript" src="../../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../../js/box.js"></script>
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
      border-left:1px solid #ddd;
    }
    .s_roblems table{
      width: 100%;
      max-width: 100%;
      margin-bottom: 20px;
      border-spacing: 0;
      border-collapse: collapse;
    }
    .list table td{
      /*padding: 8px;*/
      line-height: 30px;
      vertical-align:inherit!important;
    }
    .s_roblems table tr td{
      border-left: 1px solid #ddd;
      border-bottom: 1px solid #ddd;
      /*padding: 10px 0 10px 0;*/
      padding: 8px;
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
  		margin-top: 10px;
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
  <div class="page_tit">系统日志</div>
  <div style="clear:both"></div>
  <div style="overflow: hidden;margin-bottom: 10px;border-top: 4px solid #e7eaec;border-bottom: 1px solid #e7eaec;padding-bottom: 10px">
    <h5 style="padding-top: 10px; display: inline-block;font-size: 14px;
float: left;text-overflow: ellipsis;">搜索</h5>
 <div class="ibox-tools" style="padding-top: 14px; padding-left: 10px;float: left;">
      <a class="collapse-link"><i class="fa fa-chevron-down" id="up"></i></a>
 </div>
  </div>
  <!--搜索日志-->
<div id="content" style="display:none;">
<!-- 	<div class="page_tit">
	搜索日志 [<a onclick="searchLog();" href="javascript:void(0);">隐藏</a>]
    </div> -->
	<div class="form2 s_roblems">
		<form action="list.php?task=search" method="post">
			<table>
				<tbody>
					<tr>
            <th style="background-color: #F5F5F6;" width="15%">查询开始日期：</th>
            <td class="bik" width="35%">
              <input onfocus=this.blur()  id="" type="text" value="" name="" size="10" onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})">
                        
            </td>
						<th style="background-color: #F5F5F6;" width="15%">管理员ID：</th>
						<td width="35%">
							<input id="uid" type="text" value="" name="uid">
						</td>
					
					</tr>
          <tr>
            <th style="background-color: #F5F5F6;" width="15%">查询结束日期：</th>
            <td class="bik" width="35%">
              <input onfocus=this.blur()  id="" type="text" value="" name="" size="10" onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})">
            </td>
          </tr>

				</tbody>
			</table>

				<!-- <div class="page_btm">
				<input class="btn_b" type="submit" value="确定">
				</div> -->	
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
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <!-- <th style="width:30px;">
		<input type="checkbox" id="checkbox_handle" onclick="checkAll(this)" value="0">
    	<label for="checkbox"></label>
	</th> -->
    <th class="line_l" width="40%">内容</th>
    <th class="line_l">时间</th>
    <th class="line_l">IP地址</th>
    <th class="line_l">操作</th>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('logList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
  <tr overstyle='on' id="log_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['admin_user_action_id']) ? $_smarty_tpl->tpl_vars['row']->value['admin_user_action_id'] : null);?>
">
	  	<!-- <td><input type="checkbox" name="checkbox" id="checkbox<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['admin_user_action_id']) ? $_smarty_tpl->tpl_vars['row']->value['admin_user_action_id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['admin_user_action_id']) ? $_smarty_tpl->tpl_vars['row']->value['admin_user_action_id'] : null);?>
"></td> -->
	  	<td style="text-align:left;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['title']) ? $_smarty_tpl->tpl_vars['row']->value['title'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['time']) ? $_smarty_tpl->tpl_vars['row']->value['time'] : null);?>
</td>
		<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['ip']) ? $_smarty_tpl->tpl_vars['row']->value['ip'] : null);?>
</td>   
	    <td style="border-right:1px solid #ddd;">		
			<a title="删除" href="javascript:if(confirm('是否确定删除？')){window.location.href='delete.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['admin_user_action_id']) ? $_smarty_tpl->tpl_vars['row']->value['admin_user_action_id'] : null);?>
';}"><i class="iconfont icon-shanchu"></i></a>
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
	//鼠标移动表格效果
	$(document).ready(function(){
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

	//获取已选择用户的ID数组
	function getChecked() {
		var uids = new Array();
		$.each($('table input:checked'), function(i, n){
			uids.push( $(n).val() );
		});
		return uids;
	}
	
	//删除用户
	function deleteLog(uid) {
		uid = uid ? uid : getChecked();
		uid = uid.toString();
		if(uid == '' || !confirm('删除成功后将无法恢复，确认继续？')) return false;
		
		$.post("delete.php?multi=1", {uid:uid}, function(res){
			if(res == '1') {
				uid = uid.split(',');
				for(i = 0; i < uid.length; i++) {
					$('#log_'+uid[i]).remove();
				}
				ui.success('操作成功');
			}else {
				ui.error('操作失败');
			}
		});
	}
	
	function folder(type, _this) {
		$('#search_'+type).slideToggle('fast');
		if ($(_this).html() == '展开') {
			$(_this).html('收起');
		}else {
			$(_this).html('展开');
		}
		
	}

	//搜索用户
	var isSearchHidden = 1;
	function searchLog() {
	  if(isSearchHidden == 1) {
		$("#searchLog_div").slideDown("fast");
		$("#searchLog_action").html("搜索完毕");
		$("#searchLog_actions").html("搜索完毕");
		isSearchHidden = 0;
	  }else {
		$("#searchLog_div").slideUp("fast");
		$("#searchLog_action").html("搜索日志");
		$("#searchLog_actions").html("搜索日志");
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