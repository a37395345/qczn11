<?php /* Smarty version Smarty-3.0.4, created on 2019-04-03 13:35:03
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/report/incomelist_a.html" */ ?>
<?php /*%%SmartyHeaderCode:111835ca44607c60696-95534702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47bab676f114d0f18e2f2b8b2a5cec37801f5ad6' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/report/incomelist_a.html',
      1 => 1554261862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111835ca44607c60696-95534702',
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
<script type="text/javascript" src="../../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<script type="text/javascript" src="../../../../js/calendar.js"></script>
<!-->
<style>
.aaa{background-color:#FF0000;}
.aaa a:link {color:#333333;}
</style>
<!-->
</head>
<body>
<div class="so_main">
  <div class="page_tit">收支统计<?php if ($_smarty_tpl->getVariable('flag')->value=="2"){?>(一楼)<?php }?></div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <div class="form2">
        <form action="<?php echo $_smarty_tpl->getVariable('url')->value;?>
" method="get">
            <dl class="lineD">
	            <dt>开始日期：</dt>
	            <dd><input type="text" name="startdate" size="16" value="<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
" onClick="calendar.show(this);" readonly="readonly" /></dd>
            </dl>
            <dl class="lineD">
	            <dt>截止日期：</dt>
	            <dd><input type="text" name="enddate" size="16" value="<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
" onClick="calendar.show(this);" readonly="readonly" /></dd>
            </dl>
            <div class="page_btm">
            	<input class="btn_b" type="submit" value="确定">
            </div>
        </form>
    </div>
  </div>
  <div class="Toolbar_inbox">
    <form action="<?php echo $_smarty_tpl->getVariable('url')->value;?>
" method="get">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
		  <tr>
		    <th>开始日期：<input type="text" name="startdate" size="16" value="<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
" onClick="calendar.show(this);" readonly="readonly" />
		    截止日期：<input type="text" name="enddate" size="16" value="<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
" onClick="calendar.show(this);" readonly="readonly" />
		    店铺：<input type="radio" name="search_shop" value="" <?php $_tmp1=$_smarty_tpl->getVariable('search_shop')->value;?><?php if (empty($_tmp1)){?>checked<?php }?> />全部 
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
		    <input class="btn_b" type="submit" value="确定"></th>
		    
		  </tr>
		  </table>
            
        </form>
    
  </div>
  <div class="list">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td width="25%" style="vertical-align:top;">
  	<table width="100%" border="1" cellspacing="0" cellpadding="3">
  		<tr>
			<td width="25%">项目</td>
	  		<td width="15%">收入</td>
	  		<td width="15%">支出</td>
	  	</tr>
	  	<tr style="background-color:#B1C9FF;height:50px;">
			<td>业务收入</td>
	  		<td style="text-align:right;padding-right:10px;"><a href="detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
" target="_blank"><?php echo number_format((isset($_smarty_tpl->getVariable('income')->value['total_money1']) ? $_smarty_tpl->getVariable('income')->value['total_money1'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money2']) ? $_smarty_tpl->getVariable('income')->value['total_money2'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money22']) ? $_smarty_tpl->getVariable('income')->value['total_money22'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money21']) ? $_smarty_tpl->getVariable('income')->value['total_money21'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money3']) ? $_smarty_tpl->getVariable('income')->value['total_money3'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money4']) ? $_smarty_tpl->getVariable('income')->value['total_money4'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money5']) ? $_smarty_tpl->getVariable('income')->value['total_money5'] : null),2,".",'');?>
</a></td>
	  		<td>&nbsp;</td>
	  	</tr>
	  	<tr style="background-color:#B1C9FF;height:50px;">
			<td>其他收入</td>
			<td style="text-align:right;padding-right:10px;"><a href="detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=6" target="_blank"><?php echo number_format((isset($_smarty_tpl->getVariable('income')->value['total_money6']) ? $_smarty_tpl->getVariable('income')->value['total_money6'] : null),2,".",'');?>
</a></td>
			<td>&nbsp;</td>
		</tr>
		<tr style="background-color:#B1C9FF;height:50px;">
			<td>费用报销</td>
			<td>&nbsp;</td>
			<td style="text-align:right;padding-right:10px;"><a href="../baoxiao/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
" target="_blank"><?php echo number_format((isset($_smarty_tpl->getVariable('baoxiao')->value['total_money7']) ? $_smarty_tpl->getVariable('baoxiao')->value['total_money7'] : null),2,".",'');?>
</a></td>
		</tr>


		
		<tr style="background-color:#FE6E47;height:50px;">
			<td>合计</td>
			<td style="text-align:right;padding-right:10px;"><?php echo number_format((isset($_smarty_tpl->getVariable('income')->value['total_money1']) ? $_smarty_tpl->getVariable('income')->value['total_money1'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money2']) ? $_smarty_tpl->getVariable('income')->value['total_money2'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money22']) ? $_smarty_tpl->getVariable('income')->value['total_money22'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money21']) ? $_smarty_tpl->getVariable('income')->value['total_money21'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money3']) ? $_smarty_tpl->getVariable('income')->value['total_money3'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money4']) ? $_smarty_tpl->getVariable('income')->value['total_money4'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money5']) ? $_smarty_tpl->getVariable('income')->value['total_money5'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money6']) ? $_smarty_tpl->getVariable('income')->value['total_money6'] : null),2,".",'');?>
</td>
			<td style="text-align:right;padding-right:10px;"><?php echo number_format((isset($_smarty_tpl->getVariable('baoxiao')->value['total_money7']) ? $_smarty_tpl->getVariable('baoxiao')->value['total_money7'] : null),2,".",'');?>
</td>
		</tr>
		<tr style="background-color:#FE6E47;height:50px;">
			<td>结余</td>
			<td style="text-align:center;padding-right:10px;" colspan="2"><?php echo number_format((isset($_smarty_tpl->getVariable('income')->value['total_money1']) ? $_smarty_tpl->getVariable('income')->value['total_money1'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money2']) ? $_smarty_tpl->getVariable('income')->value['total_money2'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money22']) ? $_smarty_tpl->getVariable('income')->value['total_money22'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money21']) ? $_smarty_tpl->getVariable('income')->value['total_money21'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money3']) ? $_smarty_tpl->getVariable('income')->value['total_money3'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money4']) ? $_smarty_tpl->getVariable('income')->value['total_money4'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money5']) ? $_smarty_tpl->getVariable('income')->value['total_money5'] : null)+(isset($_smarty_tpl->getVariable('income')->value['total_money6']) ? $_smarty_tpl->getVariable('income')->value['total_money6'] : null)-(isset($_smarty_tpl->getVariable('baoxiao')->value['total_money7']) ? $_smarty_tpl->getVariable('baoxiao')->value['total_money7'] : null),2,".",'');?>
</td>
		</tr>
		<tr style="background-color:#B1C9FF;height:50px;">
			<td>押金</td>
			<td style="text-align:right;padding-right:10px;"><a href="detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=7" target="_blank"><?php echo number_format((isset($_smarty_tpl->getVariable('income')->value['deposit_money']) ? $_smarty_tpl->getVariable('income')->value['deposit_money'] : null),2,".",'');?>
</a></td>
			<td style="text-align:right;padding-right:10px;"><a href="detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=8" target="_blank"><?php echo number_format((isset($_smarty_tpl->getVariable('income')->value['depositback_money']) ? $_smarty_tpl->getVariable('income')->value['depositback_money'] : null),2,".",'');?>
</a></td>
		</tr>
		<tr style="background-color:#B1C9FF;height:50px;">
			<td>押金结余</td>
			<td style="text-align:center;" colspan="2"><?php echo number_format((isset($_smarty_tpl->getVariable('income')->value['deposit_money']) ? $_smarty_tpl->getVariable('income')->value['deposit_money'] : null)-(isset($_smarty_tpl->getVariable('income')->value['depositback_money']) ? $_smarty_tpl->getVariable('income')->value['depositback_money'] : null),2,".",'');?>
</td>
		</tr>
		<!-- 
		<tr style="background-color:#B1C9FF;height:50px;">
			<td>违章资金</td>
			<td style="text-align:right;padding-right:10px;"><a href="../../machine/breaklist.php?search_startDate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&search_endDate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&op=s&type=add" target="_blank"><?php echo number_format((isset($_smarty_tpl->getVariable('breaks')->value['total1']) ? $_smarty_tpl->getVariable('breaks')->value['total1'] : null),2,".",'');?>
</a></td>
			<td style="text-align:right;padding-right:10px;"><a href="../../machine/breaklist.php?search_startDate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&search_endDate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&op=s&type=reduce" target="_blank"><?php echo number_format((isset($_smarty_tpl->getVariable('breaks')->value['total2']) ? $_smarty_tpl->getVariable('breaks')->value['total2'] : null),2,".",'');?>
</a></td>
		</tr>
		<tr style="background-color:#B1C9FF;height:50px;">
			<td>待处理违章资金</td>
			<td style="text-align:center;" colspan="2"><a href="../../machine/list.php?task=breakfirst&op=s" target="_blank"><?php echo number_format((isset($_smarty_tpl->getVariable('breaks')->value['total']) ? $_smarty_tpl->getVariable('breaks')->value['total'] : null),2,".",'');?>
</a></td>
		</tr> -->
		<tr style="background-color:#B1C9FF;height:50px;">
			<td>打款蒋政</td>
			<td>&nbsp;</td>
			<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('baoxiao_2')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
			<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['typeid']) ? $_smarty_tpl->tpl_vars['row']->value['typeid'] : null)==10){?>
			<td style="text-align:right;padding-right:10px;"><a href="../baoxiao/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['typeid']) ? $_smarty_tpl->tpl_vars['row']->value['typeid'] : null);?>
" target="_blank"><?php echo number_format((isset($_smarty_tpl->tpl_vars['row']->value['total_money20']) ? $_smarty_tpl->tpl_vars['row']->value['total_money20'] : null),2,".",'');?>
</a></td>
			<?php }?>
			<?php }} ?>
		</tr>
		<tr style="background-color:#B1C9FF;height:50px;">
			<td>备用金总额</td>
			<td style="text-align:center;" colspan="2"><a href="detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=9" target="_blank"><?php echo number_format((isset($_smarty_tpl->getVariable('beiyong')->value['total_money']) ? $_smarty_tpl->getVariable('beiyong')->value['total_money'] : null),2,".",'');?>
</a></td>
		</tr>
		<tr style="background-color:#B1C9FF;height:50px;">
			<td>备用金结余</td>
			<td style="text-align:center;" colspan="2"><a href="detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=10" target="_blank"><?php echo number_format((isset($_smarty_tpl->getVariable('beiyong')->value['now_money']) ? $_smarty_tpl->getVariable('beiyong')->value['now_money'] : null),2,".",'');?>
</a></td>
		</tr>
  	</table>
  </td>
  <td width="25%" style="vertical-align:top;">
	  <table width="100%" border="1" cellspacing="0" cellpadding="0">
	  <tr>
		<td colspan="2">业务收入大项明细</td>
	  </tr>
	  <tr style="height:50px;">
		<th>临时自驾业务收入</th><td width="35%" <?php if ((isset($_smarty_tpl->getVariable('income')->value['total_count1']) ? $_smarty_tpl->getVariable('income')->value['total_count1'] : null)!=0){?>class="aaa"<?php }?>><a href="detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=1" target="_blank"><?php echo (isset($_smarty_tpl->getVariable('income')->value['total_money1']) ? $_smarty_tpl->getVariable('income')->value['total_money1'] : null);?>
</a></td>
	  </tr>
	  <tr style="height:50px;">
		<th>临时带驾现结收入</th><td <?php if ((isset($_smarty_tpl->getVariable('income')->value['total_count2']) ? $_smarty_tpl->getVariable('income')->value['total_count2'] : null)!=0){?>class="aaa"<?php }?>><a href="detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=2" target="_blank"><?php echo (isset($_smarty_tpl->getVariable('income')->value['total_money2']) ? $_smarty_tpl->getVariable('income')->value['total_money2'] : null);?>
</a></td>
	  </tr>
	  <tr style="height:50px;">
		<th>临时用车批结收入</th><td <?php if ((isset($_smarty_tpl->getVariable('income')->value['total_count22']) ? $_smarty_tpl->getVariable('income')->value['total_count22'] : null)!=0){?>class="aaa"<?php }?>><a href="detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=22" target="_blank"><?php echo (isset($_smarty_tpl->getVariable('income')->value['total_money22']) ? $_smarty_tpl->getVariable('income')->value['total_money22'] : null);?>
</a></td>
	  </tr>
	  <tr style="height:50px;">
		<th>调车结算收入</th><td <?php if ((isset($_smarty_tpl->getVariable('income')->value['total_count21']) ? $_smarty_tpl->getVariable('income')->value['total_count21'] : null)!=0){?>class="aaa"<?php }?>><a href="detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=21" target="_blank"><?php echo (isset($_smarty_tpl->getVariable('income')->value['total_money21']) ? $_smarty_tpl->getVariable('income')->value['total_money21'] : null);?>
</a></td>
	  </tr>
	  <tr style="height:50px;">
		<th>长期自驾业务收入</th><td <?php if ((isset($_smarty_tpl->getVariable('income')->value['total_count3']) ? $_smarty_tpl->getVariable('income')->value['total_count3'] : null)!=0){?>class="aaa"<?php }?>><a href="detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=3" target="_blank"><?php echo (isset($_smarty_tpl->getVariable('income')->value['total_money3']) ? $_smarty_tpl->getVariable('income')->value['total_money3'] : null);?>
</a></td>
	  </tr>
	  <tr style="height:50px;">
		<th>长期带驾业务收入</th><td <?php if ((isset($_smarty_tpl->getVariable('income')->value['total_count4']) ? $_smarty_tpl->getVariable('income')->value['total_count4'] : null)!=0){?>class="aaa"<?php }?>><a href="detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=4" target="_blank"><?php echo (isset($_smarty_tpl->getVariable('income')->value['total_money4']) ? $_smarty_tpl->getVariable('income')->value['total_money4'] : null);?>
</a></td>
	  </tr>
	  <tr style="height:50px;">
		<th>长期大客业务收入</th><td <?php if ((isset($_smarty_tpl->getVariable('income')->value['total_count5']) ? $_smarty_tpl->getVariable('income')->value['total_count5'] : null)!=0){?>class="aaa"<?php }?>><a href="detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=5" target="_blank"><?php echo (isset($_smarty_tpl->getVariable('income')->value['total_money5']) ? $_smarty_tpl->getVariable('income')->value['total_money5'] : null);?>
</a></td>
	  </tr>
	  </table>
  </td>
  <td width="25%" style="vertical-align:top;">
	  <table width="100%" border="1" cellspacing="0" cellpadding="0">
	  <tr>
		<td colspan="2">其他收入大项明细</td>
	  </tr>
	  <tr style="height:50px;">
			<th>刷卡费</th><td <?php if ((isset($_smarty_tpl->getVariable('other_count')->value['total_count61']) ? $_smarty_tpl->getVariable('other_count')->value['total_count61'] : null)!=0){?>class="aaa"<?php }?>><a href="../other/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=61" target="_blank"><?php echo (isset($_smarty_tpl->getVariable('other')->value['total_money61']) ? $_smarty_tpl->getVariable('other')->value['total_money61'] : null);?>
</a></td>
	  </tr>
	  <tr style="height:50px;">
			<th>保险理赔及退保</th><td <?php if ((isset($_smarty_tpl->getVariable('other_count')->value['total_count62']) ? $_smarty_tpl->getVariable('other_count')->value['total_count62'] : null)!=0){?>class="aaa"<?php }?>><a href="../other/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=62" target="_blank"><?php echo (isset($_smarty_tpl->getVariable('other')->value['total_money62']) ? $_smarty_tpl->getVariable('other')->value['total_money62'] : null);?>
</a></td>
	  </tr>
	  <tr style="height:50px;">
			<th>税金</th><td <?php if ((isset($_smarty_tpl->getVariable('other_count')->value['total_count63']) ? $_smarty_tpl->getVariable('other_count')->value['total_count63'] : null)!=0){?>class="aaa"<?php }?>><a href="../other/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=63" target="_blank"><?php echo (isset($_smarty_tpl->getVariable('other')->value['total_money63']) ? $_smarty_tpl->getVariable('other')->value['total_money63'] : null);?>
</a></td>
	  </tr>
	  <tr style="height:50px;">
			<th>违章手续费</th><td <?php if ((isset($_smarty_tpl->getVariable('other_count')->value['total_count67']) ? $_smarty_tpl->getVariable('other_count')->value['total_count67'] : null)!=0){?>class="aaa"<?php }?>><a href="../other/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=67" target="_blank"><?php echo (isset($_smarty_tpl->getVariable('other')->value['total_money67']) ? $_smarty_tpl->getVariable('other')->value['total_money67'] : null);?>
</a></td>
	  </tr>
	  <tr style="height:50px;">
			<th>违章扣分费</th><td <?php if ((isset($_smarty_tpl->getVariable('other_count')->value['total_count68']) ? $_smarty_tpl->getVariable('other_count')->value['total_count68'] : null)!=0){?>class="aaa"<?php }?>><a href="../other/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=68" target="_blank"><?php echo (isset($_smarty_tpl->getVariable('other')->value['total_money68']) ? $_smarty_tpl->getVariable('other')->value['total_money68'] : null);?>
</a></td>
	  </tr>
	  <tr style="height:50px;">
			<th>卖车及报废收入</th><td <?php if ((isset($_smarty_tpl->getVariable('other_count')->value['total_count65']) ? $_smarty_tpl->getVariable('other_count')->value['total_count65'] : null)!=0){?>class="aaa"<?php }?>><a href="../other/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=65" target="_blank"><?php echo (isset($_smarty_tpl->getVariable('other')->value['total_money65']) ? $_smarty_tpl->getVariable('other')->value['total_money65'] : null);?>
</a></td>
	  </tr>
	  <tr style="height:50px;">
			<th>一嗨多收费用</th><td <?php if ((isset($_smarty_tpl->getVariable('other_count')->value['total_count69']) ? $_smarty_tpl->getVariable('other_count')->value['total_count69'] : null)!=0){?>class="aaa"<?php }?>><a href="../other/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=69" target="_blank"><?php echo (isset($_smarty_tpl->getVariable('other')->value['total_money69']) ? $_smarty_tpl->getVariable('other')->value['total_money69'] : null);?>
</a></td>
	  </tr>
	  <tr style="height:50px;">
			<th>备用金归还</th><td <?php if ((isset($_smarty_tpl->getVariable('other_count')->value['total_count66']) ? $_smarty_tpl->getVariable('other_count')->value['total_count66'] : null)!=0){?>class="aaa"<?php }?>><a href="../other/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=66" target="_blank"><?php echo (isset($_smarty_tpl->getVariable('other')->value['total_money66']) ? $_smarty_tpl->getVariable('other')->value['total_money66'] : null);?>
</a></td>
	  </tr>
	  <tr style="height:50px;">
			<th>其他</th><td <?php if ((isset($_smarty_tpl->getVariable('other_count')->value['total_count64']) ? $_smarty_tpl->getVariable('other_count')->value['total_count64'] : null)!=0){?>class="aaa"<?php }?>><a href="../other/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=64" target="_blank"><?php echo (isset($_smarty_tpl->getVariable('other')->value['total_money64']) ? $_smarty_tpl->getVariable('other')->value['total_money64'] : null);?>
</a></td>
	  </tr>
  	  </table>
  </td>
  <td width="25%" style="vertical-align:top;">
  <table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
	<td colspan="3">费用报销大项明细</td>
  </tr>
  <tr style="height:50px;">
	<th rowspan="5" width="8%">司机出车报销</th>
	<th>过路费</th><td width="35%"><a href="../baoxiao/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=0" target="_blank"><?php echo number_format((isset($_smarty_tpl->getVariable('baoxiao_1')->value['total_money11']) ? $_smarty_tpl->getVariable('baoxiao_1')->value['total_money11'] : null),2,".",'');?>
</a></td>
  </tr>
  <tr style="height:50px;">
	<th>停车费</th><td><a href="../baoxiao/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=0" target="_blank"><?php echo number_format((isset($_smarty_tpl->getVariable('baoxiao_1')->value['total_money15']) ? $_smarty_tpl->getVariable('baoxiao_1')->value['total_money15'] : null),2,".",'');?>
</a></td>
  </tr>
  <tr style="height:50px;">
    <th>加油费</th><td><a href="../baoxiao/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=0" target="_blank"><?php echo number_format((isset($_smarty_tpl->getVariable('baoxiao_1')->value['total_money12']) ? $_smarty_tpl->getVariable('baoxiao_1')->value['total_money12'] : null),2,".",'');?>
</a></td>
  </tr>
  <tr style="height:50px;">
	<th>住宿费</th><td><a href="../baoxiao/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=0" target="_blank"><?php echo number_format((isset($_smarty_tpl->getVariable('baoxiao_1')->value['total_money13']) ? $_smarty_tpl->getVariable('baoxiao_1')->value['total_money13'] : null),2,".",'');?>
</a></td>
  </tr>
  <tr style="height:50px;">
	<th>就餐费</th><td><a href="../baoxiao/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=0" target="_blank"><?php echo number_format((isset($_smarty_tpl->getVariable('baoxiao_1')->value['total_money14']) ? $_smarty_tpl->getVariable('baoxiao_1')->value['total_money14'] : null),2,".",'');?>
</a></td>
  </tr>
  
  <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('baoxiao_2')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
  <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['typeclass']) ? $_smarty_tpl->tpl_vars['row']->value['typeclass'] : null)==1){?>
  <tr style="height:50px;">
	<?php if ((isset($_smarty_tpl->tpl_vars['row']->value['typeid']) ? $_smarty_tpl->tpl_vars['row']->value['typeid'] : null)==17){?>
	<th rowspan="7">机务报销</th>
	<?php }?>
	<th><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['typename']) ? $_smarty_tpl->tpl_vars['row']->value['typename'] : null);?>
</th><td><a href="../baoxiao/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['typeid']) ? $_smarty_tpl->tpl_vars['row']->value['typeid'] : null);?>
" target="_blank"><?php echo number_format((isset($_smarty_tpl->tpl_vars['row']->value['total_money20']) ? $_smarty_tpl->tpl_vars['row']->value['total_money20'] : null),2,".",'');?>
</a></td>
  </tr>
  <?php }else{ ?>
  <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['typeid']) ? $_smarty_tpl->tpl_vars['row']->value['typeid'] : null)!=10){?>
  <tr style="height:50px;">
	<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']==0){?>
	<th rowspan="15">公司运营报销</th>
	<?php }?>
	<th><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['typename']) ? $_smarty_tpl->tpl_vars['row']->value['typename'] : null);?>
</th><td><a href="../baoxiao/detail<?php echo $_smarty_tpl->getVariable('flag')->value;?>
.php?startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
&search_shop=<?php echo $_smarty_tpl->getVariable('search_shop')->value;?>
&b_type=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['typeid']) ? $_smarty_tpl->tpl_vars['row']->value['typeid'] : null);?>
" target="_blank"><?php echo number_format((isset($_smarty_tpl->tpl_vars['row']->value['total_money20']) ? $_smarty_tpl->tpl_vars['row']->value['total_money20'] : null),2,".",'');?>
</a></td>
  </tr>
  <?php }?>
  <?php }?>
  <?php }} ?>
  </table>
  </td>
  </tr>
  </table>
  
 </div>
</div>
<!-->
<script>
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
	});	
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
    

</script>
<!-->

</body>
</html>