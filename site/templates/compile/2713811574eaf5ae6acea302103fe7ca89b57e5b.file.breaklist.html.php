<?php /* Smarty version Smarty-3.0.4, created on 2019-11-14 13:32:34
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/machine/breaklist.html" */ ?>
<?php /*%%SmartyHeaderCode:22145dcce6f2e5bc67-74549497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2713811574eaf5ae6acea302103fe7ca89b57e5b' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/machine/breaklist.html',
      1 => 1573709549,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22145dcce6f2e5bc67-74549497',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>管理后台</title>
	<link href="../../../css/style.css" rel="stylesheet" type="text/css">
	<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet" />
	<link rel="stylesheet" href="../../../../../crm/css/bootstrap.min14ed.css">
	<link rel="stylesheet" href="../../../../../crm/css/style.min862f.css">
	<script type="text/javascript" src="../../../js/jquery.js"></script>
	<script type="text/javascript" src="../../../js/common.js"></script>
	<script type="text/javascript" src="../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
	<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
</head>

<body class="gray-bg">
	<div class="wrapper wrapper-content animated fadeInRight">
		<!-- Panel Other -->
		<div class="ibox float-e-margins">
			<div class="ibox-title">
				<h5><?php if ($_smarty_tpl->getVariable('title')->value){?>苏D<?php echo $_smarty_tpl->getVariable('title')->value;?>
<?php }?>违章记录</h5>
			</div>

			<div id="searchTopic_div" style="display:none;">
				<div class="page_tit">
					搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
				</div>
				<div class="form2">
					<form action="breaklist.php" method="get">
						<dl class="lineD">
							<dt>违章日期：</dt>
							<dd>
								<input id="search_startDate" type="text" value="" name="search_startDate"
									onClick="calendar.show(this);">到
								<input id="search_endDate" type="text" value="" name="search_endDate"
									onClick="calendar.show(this);">
							</dd>
						</dl>
						<dl class="lineD">
							<dt>违章车辆：</dt>
							<dd>
								<input id="title" type="text" value="<?php echo $_smarty_tpl->getVariable('title')->value;?>
" name="title">
								<p>支持模糊查询</p>
							</dd>
						</dl>
						<div class="page_btm">
							<input class="btn_b" type="submit" value="确定">
						</div>
					</form>
				</div>
			</div>
			<div class="wrapper wrapper-content animated fadeInRight" style=" margin: 0; padding: 0;">
				<div class="ibox float-e-margins" style="margin:0">
					<div class="ibox-title" style=" margin: 0; padding: 0;">
						<div style=" margin-left: 20px;float: left;">
							<div style="margin-top:5px;">
								<?php if ($_smarty_tpl->getVariable('type')->value){?><?php echo $_smarty_tpl->getVariable('search_startDate')->value;?>
~~~<?php echo $_smarty_tpl->getVariable('search_endDate')->value;?>
<?php }?>
								<?php if ($_smarty_tpl->getVariable('title')->value){?>
								<a class="btn btn-outline btn-default" name="btnback"
									href="list.php?task=breakfirst&op=<?php echo $_smarty_tpl->getVariable('op')->value;?>
;"> 返回</a>
								<?php }?>

							</div>
						</div>




						<div class="page right" style="margin-top:15px;">共<?php echo $_smarty_tpl->getVariable('total')->value;?>
条记录&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>
</div>

						<div class="list">
							<table class="table table-bordered">
								<tr>
									<th>序号</th>
									<th>车牌号</th>
									<th>违章时间</th>
									<th>违章项目</th>
									<th>违章款</th>
									<th>手续费</th>
									<th>扣分</th>
									<th>金额抵扣分</th>
									<th>总金额</th>
									<th>承租人</th>
									<th>用车类型</th>
									<th>违章备注</th>
									<th>状态</th>
									<th class="line_l">操作</th>
								</tr>
								<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
								<?php $_smarty_tpl->tpl_vars['total1'] = new Smarty_variable($_smarty_tpl->getVariable('total1')->value+(isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money1']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money1'] : null), null, null);?>
								<?php $_smarty_tpl->tpl_vars['total2'] = new Smarty_variable($_smarty_tpl->getVariable('total2')->value+(isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money2']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money2'] : null), null, null);?>
								<?php $_smarty_tpl->tpl_vars['total3'] = new Smarty_variable($_smarty_tpl->getVariable('total3')->value+(isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money3']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money3'] : null), null, null);?>
								<?php $_smarty_tpl->tpl_vars['total4'] = new Smarty_variable($_smarty_tpl->getVariable('total4')->value+(isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money4']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money4'] : null), null, null);?>
								<?php $_smarty_tpl->tpl_vars['total5'] = new Smarty_variable($_smarty_tpl->getVariable('total5')->value+(isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money'] : null), null, null);?>
								<tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_id'] : null);?>
">
									<td><?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)+1;?>
 </td>
									
									<td>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
</td>
									<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_date']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_date'] : null);?>
</td>
									<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_item']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_item'] : null);?>
</td>
									<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money1']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money1'] : null);?>
</td>
									<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money2']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money2'] : null);?>
</td>
									<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money3']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money3'] : null);?>
</td>
									<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money4']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money4'] : null);?>
</td>
									<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money'] : null);?>
</td>
									<td><a href="../business/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrulesPaicheId']) ? $_smarty_tpl->tpl_vars['row']->value['breakrulesPaicheId'] : null);?>
"
											target="blank"><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null)==''){?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linker']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linker'] : null);?>
<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null);?>
<?php }?></a>
									</td>
									<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_name']) ? $_smarty_tpl->tpl_vars['row']->value['item_name'] : null);?>
</td>
									<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_remarks']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_remarks'] : null);?>
</td>
									<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_endname']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_endname'] : null);?>
</td>
									<td><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['breakrules_end']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_end'] : null)==0&&(isset($_smarty_tpl->tpl_vars['row']->value['breakrulesPaicheId']) ? $_smarty_tpl->tpl_vars['row']->value['breakrulesPaicheId'] : null)!=0){?>
										<a
											href="javascript:if(confirm('是否确定解冻该违章记录？')){window.location.href='delete.php?task=breakunfreeze&forward=<?php echo $_smarty_tpl->getVariable('title')->value;?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_id'] : null);?>
';}"
											title="解冻" style="color:#ff0101;font-size:16px;margin-top: 2px;"   ><span class="glyphicon glyphicon-ok-circle"></span></a>&nbsp;&nbsp;
										<a href="javascript:breakaccount(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_id'] : null);?>
);"title="处理" style="color:#ff0101;font-size:16px;margin-top: 2px;"   ><span
											class="glyphicon glyphicon-wrench"></span> </a><?php }?>
										<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['breakrules_end']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_end'] : null)==0&&(isset($_smarty_tpl->tpl_vars['row']->value['breakrulesPaicheId']) ? $_smarty_tpl->tpl_vars['row']->value['breakrulesPaicheId'] : null)==0){?>
										<a href="javascript:breakfreeze(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_id'] : null);?>
);" title="企业冻结"style="color:#ff0101;font-size:16px;margin-top: 2px;"   ><span
												class="glyphicon glyphicon-remove-circle"></span></a>&nbsp;&nbsp;
										<a href="javascript:if(confirm('是否确定删除该违章记录？')){window.location.href='delete.php?task=breakdelete&forward=<?php echo $_smarty_tpl->getVariable('title')->value;?>
&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_id'] : null);?>
';}"
										title="删除"style="color:#ff0101;font-size:16px;margin-top: 2px;"   ><span
												class="glyphicon glyphicon-trash"></span>
										</a><?php }?>
									</td>
								</tr>
								<tr>
								
									<td colspan="20"style="border-bottom: 2px #c7c3c4 solid;">
										<p style="display: block; text-align: left;"> 备注：<span id="span_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_id'] : null);?>
" dat="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_id'] : null);?>
"
											class="spanremarks"><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['breakrules_remarks']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_remarks'] : null)!=''){?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_remarks']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_remarks'] : null);?>
<?php }else{ ?>无<?php }?></span>
											<input type="text" id="remarks_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_id'] : null);?>
" value="" style="display:none;"
											size="78" class="textremarks" />
										</p>
									</td>
								</tr>
								<?php }} ?>
								<?php if ($_smarty_tpl->getVariable('list')->value){?>
								<tr style="background-color:#FE6E47;">
									<td colspan="4">合计</td>
									<td><?php echo $_smarty_tpl->getVariable('total1')->value;?>
</td>
									<td><?php echo $_smarty_tpl->getVariable('total2')->value;?>
</td>
									<td><?php echo $_smarty_tpl->getVariable('total3')->value;?>
</td>
									<td><?php echo $_smarty_tpl->getVariable('total4')->value;?>
</td>
									<td><?php echo $_smarty_tpl->getVariable('total5')->value;?>
</td>
									<td colspan="5">&nbsp;</td>
								</tr>
								<?php }?>
								<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list1')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
								<tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_id'] : null);?>
">
									<td><?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)+1;?>
</td>
									<td>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
</td>
									<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_date']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_date'] : null);?>
</td>
									<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_item']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_item'] : null);?>
</td>
									<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money1']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money1'] : null);?>
</td>
									<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money2']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money2'] : null);?>
</td>
									<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money3']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money3'] : null);?>
</td>
									<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money4']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money4'] : null);?>
</td>
									<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money'] : null);?>
</td>
									<td><a href="../business/detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrulesPaicheId']) ? $_smarty_tpl->tpl_vars['row']->value['breakrulesPaicheId'] : null);?>
"
											target="blank"><?php if ((isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null)==''){?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linker']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linker'] : null);?>
<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null);?>
<?php }?></a>
									</td>
									<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_name']) ? $_smarty_tpl->tpl_vars['row']->value['item_name'] : null);?>
</td>
									<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_remarks']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_remarks'] : null);?>
</td>
									<td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_endname']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_endname'] : null);?>
</td>
									<td><a href="modify.php?task=breakdetail&uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['breakrules_id']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_id'] : null);?>
"
										title="明细"style="color:#ff0101;font-size:16px;margin-top: 2px;"   ><span
												class="glyphicon glyphicon-th-list"></span>
											  </a></td>
								</tr>
								<?php }} ?>
							</table>
						</div>

					</div>
					<!-->
						<script>
							var now_break_id = 0;
							var now_remarks = "";
							//鼠标移动表格效果
							$(document).ready(function () {
								$("a.zoomIn").fancybox({
									'overlayShow': false,
									'transitionIn': 'elastic',
									'transitionOut': 'elastic'
								});

								$("tr[overstyle='on']").hover(
									function () {
										$(this).addClass("bg_hover");
									},
									function () {
										$(this).removeClass("bg_hover");
									}
								);
								$(".spanremarks").click(function () {
									now_break_id = $(this).attr("dat");
									$(this).css("display", "none");
									$("#remarks_" + now_break_id).css("display", "inline-block");
									if ($(this).html() != "无") {
										$("#remarks_" + now_break_id).val($(this).html());
									}
									$("#remarks_" + now_break_id).focus();
								});
								//失去焦点
								$(".textremarks").blur(function () {
									now_remarks = $(this).val();
									aaa = now_remarks == "" ? "无" : now_remarks
									$("#span_" + now_break_id).html(aaa);
									$("#span_" + now_break_id).css("display", "inline-block");
									$(this).css("display", "none");
									$.get("list.php?task=upbreakremark&breakrules_id=" + now_break_id + "&breakrules_remarks=" + now_remarks, {}, function (jsonmsg) {

									}, "json");
									now_break_id = 0;
								});
								//回车
								$(".textremarks").keydown(function (event) {
									if (event.keyCode == 13) {
										now_remarks = $(this).val();
										aaa = now_remarks == "" ? "无" : now_remarks
										$("#span_" + now_break_id).html(aaa);
										$("#span_" + now_break_id).css("display", "inline-block");
										$(this).css("display", "none");
										$.get("list.php?task=upbreakremark&breakrules_id=" + now_break_id + "&breakrules_remarks=" + now_remarks, {}, function (jsonmsg) {

										}, "json");
										now_break_id = 0;
									}
								});
							});

							function checkon(o) {
								if (o.checked == true) {
									$(o).parents('tr').addClass('bg_on');
								} else {
									$(o).parents('tr').removeClass('bg_on');
								}
							}

							function checkAll(o) {
								if (o.checked == true) {
									$('input[name="checkbox"]').attr('checked', 'true');
									$('tr[overstyle="on"]').addClass("bg_on");
								} else {
									$('input[name="checkbox"]').removeAttr('checked');
									$('tr[overstyle="on"]').removeClass("bg_on");
								}
							}

							//获取已选择用户的ID数组
							function getChecked() {
								var uids = new Array();
								$.each($('table input:checked'), function (i, n) {
									uids.push($(n).val());
								});
								return uids;
							}

							var isSearchHidden = 1;
							function searchNews() {
								if (isSearchHidden == 1) {
									$("#searchTopic_div").slideDown("fast");
									isSearchHidden = 0;
								} else {
									$("#searchTopic_div").slideUp("fast");
									isSearchHidden = 1;
								}
							}
							function folder(type, _this) {
								$('#search_' + type).slideToggle('fast');
								if ($(_this).html() == '展开') {
									$(_this).html('收起');
								} else {
									$(_this).html('展开');
								}

							}
							function breakaccount(pid) {
								var url = "";
								if (pid == "") {
									pid = pid ? pid : getChecked();
									pid = pid.toString();
									if (pid == '') {
										alert("请先选择违章记录！");
										return false;
									}
									url = "account.php?multi=1&bid=" + pid;
								} else {
									url = "account.php?bid=" + pid;
								}
								demo_iframe(url, '车辆违章结算', 750, 480, 'login_js');
							}
							function breakfreeze(pid) {
								url = "list.php?task=breakfreeze&bid=" + pid;
								demo_iframe(url, '车辆违章冻结', 650, 380, 'login_js');
							}
						</script>
						<!--> </body> </html>