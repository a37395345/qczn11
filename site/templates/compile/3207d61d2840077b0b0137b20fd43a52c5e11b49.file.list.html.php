<?php /* Smarty version Smarty-3.0.4, created on 2019-11-08 17:28:46
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/wenti/list.html" */ ?>
<?php /*%%SmartyHeaderCode:48555dc5354e2178d9-63445889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3207d61d2840077b0b0137b20fd43a52c5e11b49' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/wenti/list.html',
      1 => 1573205320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48555dc5354e2178d9-63445889',
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
<link href="../../../crm/fonts1/iconfont.css" rel="stylesheet">
<link href="../../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<script type="text/javascript" src="../../../../js/jquery.js"></script>

</head>
<body class="gray-bg">
  <style type="text/css">
    .a1{
       padding: 10px 12px;
       background-color: #bababa;
       border-radius: 3px;
       color: #fff!important;
       line-height: 40px;
    }
    .gray-bg{
      background-color: #f3f3f4;
      padding: 20px;
    }
    .xt_problems{
      padding: 0 20px 20px 20px;
      background-color: #fff; 
      border-top:4px solid #e7eaec;
    }
    .xt_problems .so_main{
      margin: 0;
    }
    .xt_problems .page_tit{
      font-size: 14px;
      margin: 0 0 7px;
      padding: 0;
      text-overflow: ellipsis;
      color: #676a6c;
      border-bottom:1px solid #ddd;
    }
    .xt_problems .Toolbar_inbox{
      border-bottom: none;
      padding-bottom: 20px;
      background-color: #fff;
    }
    .xt_problems .Toolbar_inbox a{
      transition: all .5s;
      -moz-transition: all .5s; /* Firefox 4 */
      -webkit-transition: all .5s; /* Safari 和 Chrome */
      -o-transition: all .5s; /* Opera */
    }
    .xt_problems .Toolbar_inbox a:hover{
      text-decoration: none;
      background-color: #a5a2a2;
    }
    .s_roblems table th{
        padding: 8px;
        line-height: 21px;
        vertical-align: top;
        border-top: 1px solid #ddd;
        background-color: #F5F5F6!important;
        color: #000;
        font-weight: bold;
    }
    .s_roblems table tr td{
        border-left:1px solid #ddd;
        border-bottom:1px solid #ddd;
        padding: 10px 0 10px 0;
    }
    a:hover{
      text-decoration: none;
    }
  </style>
  <div class="xt_problems">
<div class="so_main">
  <div class="page_tit">系统问题</div>
  <!-------- 用户列表 -------->
  <div class="Toolbar_inbox">
  	<div class="page right"> </div>
  		<a href="add.php" class="a1" style="">添加问题</a>&nbsp;&nbsp;&nbsp;&nbsp;
	   <a href="list.php?lsi_id=0" class="a1">全部问题</a>&nbsp;&nbsp;&nbsp;&nbsp;
	   <a href="list.php?lsi_id=1" class="a1">待审核问题</a>&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="list.php?lsi_id=2" class="a1">待修改问题</a>&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="list.php?lsi_id=3" class="a1">待处理问题</a>&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="list.php?lsi_id=4" class="a1">等待确认的问题</a>&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="list.php?lsi_id=5" class="a1">已解决问题</a>&nbsp;&nbsp;&nbsp;&nbsp;
   <a href="list.php?lsi_id=6" class="a1">不能解决的问题</a>&nbsp;&nbsp;&nbsp;&nbsp;
		<?php if ($_smarty_tpl->getVariable('group_id')->value==14||$_smarty_tpl->getVariable('group_id')->value==15||$_smarty_tpl->getVariable('group_id')->value==1){?>
			<a href="tongji.php" class="a1">统计</a>&nbsp;&nbsp;&nbsp;&nbsp;
		<?php }?>
  </div>
  </div>
  <div class="list s_roblems">
  <table class="table table-bordered" width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th class="line_l">问题排序</th>
    <th class="line_l" style="width: 20%;">标题</th>
	<th class="line_l">提交人</th>
	<th class="line_l">提交时间</th>
	<th class="line_l">审核人</th>
	<th class="line_l">审核时间</th>
	<th class="line_l">处理人</th>
	<th class="line_l">处理时间</th>
	<th class="line_l">状态</th>
	<th class="line_l">操作</th>
  <!-- <?php if ($_smarty_tpl->getVariable('group_id')->value==14||$_smarty_tpl->getVariable('group_id')->value==15||$_smarty_tpl->getVariable('group_id')->value==1){?>
  <th class="line_l">删除</th>
  <?php }?> -->
	
  </tr>

  	<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('wenti')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
  <tr>
  	<td><?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)+1;?>
</td>
  	<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['wenti_name']) ? $_smarty_tpl->tpl_vars['rows']->value['wenti_name'] : null);?>
</td>
  	<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['username1']) ? $_smarty_tpl->tpl_vars['rows']->value['username1'] : null);?>
</td>
  	<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['wenti_addtime']) ? $_smarty_tpl->tpl_vars['rows']->value['wenti_addtime'] : null);?>
</td>
  	<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['username2']) ? $_smarty_tpl->tpl_vars['rows']->value['username2'] : null);?>
</td>
  	<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['wenti_shenhetime']) ? $_smarty_tpl->tpl_vars['rows']->value['wenti_shenhetime'] : null);?>
</td>
  	<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['username3']) ? $_smarty_tpl->tpl_vars['rows']->value['username3'] : null);?>
</td>
  	<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['wenti_chilitime']) ? $_smarty_tpl->tpl_vars['rows']->value['wenti_chilitime'] : null);?>
</td>
  	<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['wenti_type']) ? $_smarty_tpl->tpl_vars['rows']->value['wenti_type'] : null);?>
</td>
  	<td><a title="明细" href="xiangxi.php?id=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
"><i class="iconfont icon-mingxi1"></i></a>
  		<?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['wenti_zhuangtai']) ? $_smarty_tpl->tpl_vars['rows']->value['wenti_zhuangtai'] : null)==1){?>
  			<?php if ($_smarty_tpl->getVariable('group_id')->value==14||$_smarty_tpl->getVariable('group_id')->value==15||$_smarty_tpl->getVariable('group_id')->value==1){?>
  				/<a  href="shenhe.php?id=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
">审核</a>
  			<?php }?>
  		<?php }elseif((isset($_smarty_tpl->tpl_vars['rows']->value['wenti_zhuangtai']) ? $_smarty_tpl->tpl_vars['rows']->value['wenti_zhuangtai'] : null)==2){?>
  			<?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['wenti_empid1']) ? $_smarty_tpl->tpl_vars['rows']->value['wenti_empid1'] : null)==$_smarty_tpl->getVariable('a_uid')->value){?>
  				/<a href="xiugai.php?id=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
">修改</a>
  			<?php }?>
  		<?php }elseif((isset($_smarty_tpl->tpl_vars['rows']->value['wenti_zhuangtai']) ? $_smarty_tpl->tpl_vars['rows']->value['wenti_zhuangtai'] : null)==3){?>
  			<?php if ($_smarty_tpl->getVariable('group_id')->value==1){?>
  				/<a href="chuli.php?id=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
">处理</a>
  			<?php }?>
  		<?php }elseif((isset($_smarty_tpl->tpl_vars['rows']->value['wenti_zhuangtai']) ? $_smarty_tpl->tpl_vars['rows']->value['wenti_zhuangtai'] : null)==4){?>
  			<?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['wenti_empid1']) ? $_smarty_tpl->tpl_vars['rows']->value['wenti_empid1'] : null)==$_smarty_tpl->getVariable('a_uid')->value){?>
  				/<a href="quereng.php?id=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
">确认</a>
  			<?php }?>
  		<?php }?>

      <?php if ($_smarty_tpl->getVariable('group_id')->value==14||$_smarty_tpl->getVariable('group_id')->value==1){?>
       <a title="删除" href="delete.php?id=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
"><i class="iconfont icon-shanchu"></i></a>
      <?php }?>

  	</td>
  
 </tr>
 	<?php }} ?>

 </table>
 </div>
</div>

<script>
  $(function(){
    $("#div").each(function(){
      $(this).addClass("").siblings().removeClass("");
      var date = new Date();
      console.log(date);
    });
  });
</script>

</body>
</html>