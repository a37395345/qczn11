<?php /* Smarty version Smarty-3.0.4, created on 2016-09-26 14:19:57
         compiled from "D:\web\site\templates\elsker\operator/sales/priceplan.html" */ ?>
<?php /*%%SmartyHeaderCode:370757e8be0d644219-84431438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d8ea26c0335a2a0d8c60134843633a8aaee0422' => 
    array (
      0 => 'D:\\web\\site\\templates\\elsker\\operator/sales/priceplan.html',
      1 => 1474870585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '370757e8be0d644219-84431438',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert title here</title>
<link href="../../../css/style.css" rel="stylesheet" type="text/css" />
<link href="../../../css/flbao.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../../../js/jquery.js"></script>

<script>
$(function(){
	

	jQuery("#btnSearch").click(function(){
		
		if ($("#search_key").val()==""){
			alert("请先输入车辆价格！");
			return false;
		}
		$('#clentprice').hide();
		
		$.get("../../../site/operator/business/list.php?task=getclientprice5&carprice="+$("#search_key").val(),{}, function(jsonmsg){
			if (jsonmsg.status==0){
				$("#price1").html(jsonmsg.priceplan1);
				$("#price2").html(jsonmsg.priceplan2);
				$("#price3").html(jsonmsg.priceplan3);
				$('#clentprice').show();
			}else{
				alert("查询失败，车辆价格不对！");
				$('#clentprice').hide();
			}
		},"json");
		
	});
});
</script>
</head>

<body>
<div class="so_main" style="width:1003px;">
	<div class="page_tit">长期企业用车报价方案</div>
	<div class="list">
	<input type="text" id="search_key" size="16" placeholder="请输入车辆价格" />
	    &nbsp;&nbsp;&nbsp;&nbsp;<input type="button" id="btnSearch" value="查询" />
	</div>
	<div id="clentprice" class="dtl-l" style="display: none;">
	          <ul class="pro-info01 pro-zq" data-type="hqn">
	            <li class="cc">
					<span class="til">高</span>
					<span class="un"><span class="lay-l" id="price1">1</span><i class="sig">元/月</i></span>
				</li>
	            <li class="cc">
					<span class="til">中 </span>
					<span class="un"><span class="lay-l" id="price2">1</span><i class="sig">元/月</i></span>
				</li>
	            <li class="r">
		            <span class="til">低</span>
		            <span class="un"><span class="lay-l" id="price3">1</span><i class="sig">元/月</i></span>
	            </li>
	          </ul>
	    </div>
	
</div>


<script>

</script>

</body>
</html>