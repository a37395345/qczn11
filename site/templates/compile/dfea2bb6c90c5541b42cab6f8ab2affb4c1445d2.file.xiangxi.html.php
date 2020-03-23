<?php /* Smarty version Smarty-3.0.4, created on 2019-09-03 18:26:06
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/renshi/xiangxi.html" */ ?>
<?php /*%%SmartyHeaderCode:146945d6e3fbe132502-96601628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfea2bb6c90c5541b42cab6f8ab2affb4c1445d2' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/renshi/xiangxi.html',
      1 => 1567501689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146945d6e3fbe132502-96601628',
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
<script src="../../../../jquery.js"></script>
</head>
<body>
	<style type="text/css">
		.lineD{
			padding: 0;margin: 0;
		}
		dd{
			margin-left: 1px;
		}
		dt{
			width: 1px;
		}
	</style>
<div class="so_main">
  <div class="page_tit">工资项目明细</div>  
  
  <div class="form2" style="width: 80%;padding-left: 10%">
  	<?php if ((isset($_smarty_tpl->getVariable('emp')->value['emp_name']) ? $_smarty_tpl->getVariable('emp')->value['emp_name'] : null)){?>
  	<dl class="lineD">
	    <dt style="width: 70px;">员工姓名：</dt>
	    <dd style="margin-left: 70px;"><span ><?php echo (isset($_smarty_tpl->getVariable('emp')->value['emp_name']) ? $_smarty_tpl->getVariable('emp')->value['emp_name'] : null);?>
</span></dd>
	  </dl>
	 <dl class="lineD">
	<?php }?>
  	 <dl class="lineD">
	    <dt style="width: 70px;">职位名称：</dt>
	    <dd style="margin-left: 70px;"><span ><?php echo (isset($_smarty_tpl->getVariable('list')->value['zhiwei_name']) ? $_smarty_tpl->getVariable('list')->value['zhiwei_name'] : null);?>
</span></dd>
	  </dl>
	 <dl class="lineD">
	    <dt style="width: 70px;">休息类型：</dt>
	    <dd style="margin-left: 70px;"><span >
	    <?php if ((isset($_smarty_tpl->getVariable('list')->value['zhiwei_xiuxi']) ? $_smarty_tpl->getVariable('list')->value['zhiwei_xiuxi'] : null)==0){?>单休
		<?php }elseif((isset($_smarty_tpl->getVariable('list')->value['zhiwei_xiuxi']) ? $_smarty_tpl->getVariable('list')->value['zhiwei_xiuxi'] : null)==1){?>双休
		<?php }elseif((isset($_smarty_tpl->getVariable('list')->value['zhiwei_xiuxi']) ? $_smarty_tpl->getVariable('list')->value['zhiwei_xiuxi'] : null)==2){?>一月休4
		<?php }elseif((isset($_smarty_tpl->getVariable('list')->value['zhiwei_xiuxi']) ? $_smarty_tpl->getVariable('list')->value['zhiwei_xiuxi'] : null)==3){?>不休
		<?php }?>
		</span></dd>
	 </dl>
	 <dl class="lineD">
	    <dt style="width: 70px;">试用期：</dt>
	    <dd style="margin-left: 70px;"><span ><?php echo (isset($_smarty_tpl->getVariable('list')->value['zhiwei_shiyongqi']) ? $_smarty_tpl->getVariable('list')->value['zhiwei_shiyongqi'] : null);?>
个月</span></dd>
	  </dl>
	  <?php if ((isset($_smarty_tpl->getVariable('emp')->value['zemp_butie']) ? $_smarty_tpl->getVariable('emp')->value['zemp_butie'] : null)>0){?>
	  <dl class="lineD">
	    <dt style="width: 70px;">额外补贴：</dt>
	    <dd style="margin-left: 70px;"><span ><?php echo (isset($_smarty_tpl->getVariable('emp')->value['zemp_butie']) ? $_smarty_tpl->getVariable('emp')->value['zemp_butie'] : null);?>
元/月</span></dd>
	  </dl>
	  <?php }?>
	  <?php if ((isset($_smarty_tpl->getVariable('emp')->value['nianxian']) ? $_smarty_tpl->getVariable('emp')->value['nianxian'] : null)>0){?>
	  <dl class="lineD">
	    <dt style="width: 70px;">安全奖励：</dt>
	    <dd style="margin-left: 70px;"><span >
	    	<?php if ((isset($_smarty_tpl->getVariable('emp')->value['nianxian']) ? $_smarty_tpl->getVariable('emp')->value['nianxian'] : null)==1){?>第一年新司机100<?php }elseif((isset($_smarty_tpl->getVariable('emp')->value['nianxian']) ? $_smarty_tpl->getVariable('emp')->value['nianxian'] : null)==2){?>第二年司机200<?php }else{ ?>第三年或三年以上老司机300<?php }?>
	    	元/月
		</span></dd>
	  </dl>
	  <?php }?>
	  
	</div>


	<style>
		#div1{
			text-align: center;

		}
		table{
			margin-top: 10px;
		}
		td{
			height: 30px;
		}

	</style>
	<div style="padding-top: 10px" id="div1">
		<table border="1" border:1px solid #000  cellspacing="0" cellpadding="0" style="width: 80%">
			<tr>
			<td colspan="4" style="font-size: 18px;font-weight: 800;background-color: #0b10b5;color:#ffffff">试用期</td>
			
			</tr>
			<tr>
			
			<td colspan="4">底薪：<?php echo (isset($_smarty_tpl->getVariable('list')->value['zhiwei_shiyong_dixin']) ? $_smarty_tpl->getVariable('list')->value['zhiwei_shiyong_dixin'] : null);?>
/月</td>
			</tr>
			<tr>
			<td width="10%" style="font-size: 15px;font-weight: 800">项目名称</td>
			<td width="10%" style="font-size: 15px;font-weight: 800">运算符</td>
			<td width="10%" style="font-size: 15px;font-weight: 800">计算方式</td>
			<td width="70%" style="font-size: 15px;font-weight: 800">规则说明</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list_s')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
			<tr>
			<td width="10%"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_name']) ? $_smarty_tpl->tpl_vars['rows']->value['type_name'] : null);?>
</td>
			<td width="5%">
				<?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['type_jisuan']) ? $_smarty_tpl->tpl_vars['rows']->value['type_jisuan'] : null)==1){?>加
	    		<?php }else{ ?>减
	    		<?php }?>
	    	</td>
			<td width="10%">
				<?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_shiyong_money']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_shiyong_money'] : null)>0){?>
	    		每<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_danwei']) ? $_smarty_tpl->tpl_vars['rows']->value['type_danwei'] : null);?>
<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_shiyong_money']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_shiyong_money'] : null);?>
元
	    		<?php }else{ ?>
	    			根据当月情况
	    		<?php }?>
			</td>
			<td width="75%"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_guize']) ? $_smarty_tpl->tpl_vars['rows']->value['type_guize'] : null);?>
</td>
			</tr>
			<?php }} ?>
			<tr>
				<td colspan="4" style="font-size: 15px;color:#08163e">
					试用期工资计算方式：((试用期底薪)<?php echo (isset($_smarty_tpl->getVariable('list')->value['zhiwei_shiyong_dixin']) ? $_smarty_tpl->getVariable('list')->value['zhiwei_shiyong_dixin'] : null);?>
/应上班天数)*实际上班天数
		<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list_s')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
			<?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['type_jisuan']) ? $_smarty_tpl->tpl_vars['rows']->value['type_jisuan'] : null)==1){?>+<?php }else{ ?>-<?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['type_shuliang']) ? $_smarty_tpl->tpl_vars['rows']->value['type_shuliang'] : null)==1){?>
				

				
				<?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_shiyong_money']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_shiyong_money'] : null)>0){?>
					(是/否)<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_name']) ? $_smarty_tpl->tpl_vars['rows']->value['type_name'] : null);?>

					<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_shiyong_money']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_shiyong_money'] : null);?>
元
				<?php }else{ ?>
					<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_name']) ? $_smarty_tpl->tpl_vars['rows']->value['type_name'] : null);?>

				<?php }?>
			<?php }else{ ?>
				<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_name']) ? $_smarty_tpl->tpl_vars['rows']->value['type_name'] : null);?>

				(数量<?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['type_jishu']) ? $_smarty_tpl->tpl_vars['rows']->value['type_jishu'] : null)!=0){?>-<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_jishu']) ? $_smarty_tpl->tpl_vars['rows']->value['type_jishu'] : null);?>
<?php }?>)*<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_shiyong_money']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_shiyong_money'] : null);?>

			<?php }?>
		<?php }} ?>
		<?php if ((isset($_smarty_tpl->getVariable('emp')->value['zemp_butie']) ? $_smarty_tpl->getVariable('emp')->value['zemp_butie'] : null)>0){?>
		+（额外补贴）<?php echo (isset($_smarty_tpl->getVariable('emp')->value['zemp_butie']) ? $_smarty_tpl->getVariable('emp')->value['zemp_butie'] : null);?>
元
		<?php }?>
		<?php if ((isset($_smarty_tpl->getVariable('emp')->value['nianxian']) ? $_smarty_tpl->getVariable('emp')->value['nianxian'] : null)>0){?>
			+（安全奖励）<?php if ((isset($_smarty_tpl->getVariable('emp')->value['nianxian']) ? $_smarty_tpl->getVariable('emp')->value['nianxian'] : null)==1){?>100<?php }elseif((isset($_smarty_tpl->getVariable('emp')->value['nianxian']) ? $_smarty_tpl->getVariable('emp')->value['nianxian'] : null)==2){?>200<?php }elseif((isset($_smarty_tpl->getVariable('emp')->value['nianxian']) ? $_smarty_tpl->getVariable('emp')->value['nianxian'] : null)==3){?>300<?php }?>元
		<?php }?>
		=应发工资
				</td>
			</tr>
		</table>

		<p><br/><br/><br/></p>
		<table border="1"   cellspacing="0" cellpadding="0" style="width: 80%">
			<tr>
			<td colspan="4" style="font-size: 18px;font-weight: 800;background-color: #0b10b5;color:#ffffff"">正式期</td>
			
			</tr>
			<tr>
			
			<td colspan="4" >底薪：<?php echo (isset($_smarty_tpl->getVariable('list')->value['zhiwei_zhengshi_dixin']) ? $_smarty_tpl->getVariable('list')->value['zhiwei_zhengshi_dixin'] : null);?>
/月</td>
			</tr>
			<tr>
			<td width="10%" style="font-size: 15px;font-weight: 800">项目名称</td>
			<td width="10%" style="font-size: 15px;font-weight: 800">运算符</td>
			<td width="10%" style="font-size: 15px;font-weight: 800">计算方式</td>
			<td width="70%" style="font-size: 15px;font-weight: 800">规则说明</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list_z')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
			<tr>
			<td width="10%"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_name']) ? $_smarty_tpl->tpl_vars['rows']->value['type_name'] : null);?>
</td>
			<td width="5%">
				<?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['type_jisuan']) ? $_smarty_tpl->tpl_vars['rows']->value['type_jisuan'] : null)==1){?>加
	    		<?php }else{ ?>减
	    		<?php }?>
	    	</td>
			<td width="10%">
				<?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_zhengshi_money']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_zhengshi_money'] : null)>0){?>
	    		每<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_danwei']) ? $_smarty_tpl->tpl_vars['rows']->value['type_danwei'] : null);?>
<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_zhengshi_money']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_zhengshi_money'] : null);?>
元
	    		<?php }else{ ?>
	    			根据当月情况
	    		<?php }?>
			</td>
			<td width="75%"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_guize']) ? $_smarty_tpl->tpl_vars['rows']->value['type_guize'] : null);?>
</td>
			</tr>
			<?php }} ?>
			<tr>
				<td colspan="4" style="font-size: 15px;color:#08163e">
					正式期工资计算方式：((正式期底薪)<?php echo (isset($_smarty_tpl->getVariable('list')->value['zhiwei_zhengshi_dixin']) ? $_smarty_tpl->getVariable('list')->value['zhiwei_zhengshi_dixin'] : null);?>
/应上班天数)*实际上班天数
		<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list_z')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
			<?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['type_jisuan']) ? $_smarty_tpl->tpl_vars['rows']->value['type_jisuan'] : null)==1){?>+<?php }else{ ?>-<?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['type_shuliang']) ? $_smarty_tpl->tpl_vars['rows']->value['type_shuliang'] : null)==1){?>
			<?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_zhengshi_money']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_zhengshi_money'] : null)>0){?>
			(是/否)<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_name']) ? $_smarty_tpl->tpl_vars['rows']->value['type_name'] : null);?>

			<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_zhengshi_money']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_zhengshi_money'] : null);?>
元
			<?php }else{ ?>
			<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_name']) ? $_smarty_tpl->tpl_vars['rows']->value['type_name'] : null);?>

			<?php }?>
			<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_name']) ? $_smarty_tpl->tpl_vars['rows']->value['type_name'] : null);?>

				(数量<?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['type_jishu']) ? $_smarty_tpl->tpl_vars['rows']->value['type_jishu'] : null)!=0){?>-<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['type_jishu']) ? $_smarty_tpl->tpl_vars['rows']->value['type_jishu'] : null);?>
<?php }?>)*<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['zhiwei_zhengshi_money']) ? $_smarty_tpl->tpl_vars['rows']->value['zhiwei_zhengshi_money'] : null);?>

			<?php }?>
		<?php }} ?>
		<?php if ((isset($_smarty_tpl->getVariable('emp')->value['zemp_butie']) ? $_smarty_tpl->getVariable('emp')->value['zemp_butie'] : null)>0){?>
		+（额外补贴）<?php echo (isset($_smarty_tpl->getVariable('emp')->value['zemp_butie']) ? $_smarty_tpl->getVariable('emp')->value['zemp_butie'] : null);?>
元
		<?php }?>
		<?php if ((isset($_smarty_tpl->getVariable('emp')->value['nianxian']) ? $_smarty_tpl->getVariable('emp')->value['nianxian'] : null)>0){?>
			+（安全奖励）<?php if ((isset($_smarty_tpl->getVariable('emp')->value['nianxian']) ? $_smarty_tpl->getVariable('emp')->value['nianxian'] : null)==1){?>100<?php }elseif((isset($_smarty_tpl->getVariable('emp')->value['nianxian']) ? $_smarty_tpl->getVariable('emp')->value['nianxian'] : null)==2){?>200<?php }elseif((isset($_smarty_tpl->getVariable('emp')->value['nianxian']) ? $_smarty_tpl->getVariable('emp')->value['nianxian'] : null)==3){?>300<?php }?>元
		<?php }?>
		=应发工资

				</td>
			</tr>

		</table>
		<P style="color:red;font-size: 15px;text-align: left;width: 80%;margin-left: 10%">
			<br/>
			*离职备注：<br/><br/>
			1.试用期申请离职7天，未提前7天的工资不发。（实际情况视公司招聘及交接情况而定，如有新员工提前到位，离职员工可应公司要求提前离职，最高不超过7天。被开除除外）
			<br/><br/>
			2.正式期离职提前一个月提出离职，未提前一个月的工资不发（实际情况视公司招聘及交接情况而定，如有新员工提前到位，离职员工可应公司要求提前离职，最高不超过一个月。被开除除外）
			<br/><br/>
		</P>

		<table border="1px" cellspacing="0" cellpadding="0" style="width: 50%";>
			<tr>
				<td colspan="2" style="font-size: 15px"><span style="color: red">*（附表）</span>提成算法（单位：元）</td>
			</tr>
			<tr>
				<td>营业额</td>
				<td>提成比例</td>
				
			</tr>
			<tr>
				<td>0~19999</td>
				<td>1.0%</td>
			</tr>
			<tr>
				<td>20000~39999</td>
				<td>1.1%</td>
			</tr>
			<tr>
				<td>40000~59999</td>
				<td>1.2%</td>
			</tr>
			<tr>
				<td>60000~79999</td>
				<td>1.3%</td>
			</tr>
			<tr>
				<td>80000~99999</td>
				<td>1.4%</td>
			</tr>
			<tr>
				<td>100000~149999</td>
				<td>1.5%</td>
			</tr>
			<tr>
				<td>150000~199999</td>
				<td>1.6%</td>
			</tr>
			<tr>
				<td>200000~249999</td>
				<td>1.7%</td>
			</tr>
			<tr>
				<td>250000~299999</td>
				<td>1.8%</td>
			</tr>
			<tr>
				<td>300000~399999</td>
				<td>1.9%</td>
			</tr>
			<tr>
				<td>400000~499999</td>
				<td>2.0%</td>
			</tr>
			<tr>
				<td>500000~599999</td>
				<td>2.1%</td>
			</tr>
			<tr>
				<td>......</td>
				<td>......</td>
			</tr>
		</table>
		
		<p><br/><br/><br/></p>
		<p></p>
</div>



</body>
</html>