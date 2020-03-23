<?php /* Smarty version Smarty-3.0.4, created on 2019-09-29 17:30:39
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/machine/basefirst.html" */ ?>
<?php /*%%SmartyHeaderCode:20322225415d9079bf367a10-65631356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a1fa8ef918f66db835543d1deec9a591a52d650' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/machine/basefirst.html',
      1 => 1569749226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20322225415d9079bf367a10-65631356',
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
<link href="../../../css/flbao.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
</head>
<body>
<div class="so_main">
  <div class="page_tit">车辆基础资料</div>
  <div class="list">
            <table width="100%" border="1" cellspacing="0" cellpadding="0">
            <tbody>
            <tr style="height:35px;">
			    <td class="ccc_bg" width="60%" style="font-size: 16px;" colspan="4">公司现有车辆</td>
			    <td class="ccc_bg" width="20%" style="font-size: 16px;" rowspan="2">已出售但未过户车辆数(卖车款已收全)</td>
			    <td class="ccc_bg" width="20%" style="font-size: 16px;" rowspan="2">已出售已过户车辆数(卖车款已收全)</td>
			</tr>
			<tr style="height:35px;">
			    <td class="ccc_bg" width="15%" style="font-size: 16px;">车辆数</td>
			    <td class="ccc_bg" width="15%" style="font-size: 16px;">开票价</td>
			    <td class="ccc_bg" width="15%" style="font-size: 16px;">实际购买价</td>
			    <td class="ccc_bg" width="15%" style="font-size: 16px;">购置税</td>
			</tr>
		  	<tr style="height:80px;">
			    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('first')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
			    <td style="text-align:center;background-color:#B1C9FF;font-size: 16px;"><a href="list.php?car_status=0"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['nCount1']) ? $_smarty_tpl->tpl_vars['row']->value['nCount1'] : null)+(isset($_smarty_tpl->tpl_vars['row']->value['nCount2']) ? $_smarty_tpl->tpl_vars['row']->value['nCount2'] : null);?>
</a></td>
			    <td style="text-align:center;background-color:#FE6E47;font-size: 16px;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_amount']) ? $_smarty_tpl->tpl_vars['row']->value['car_amount'] : null);?>
</td>
			    <td style="text-align:center;background-color:#B1C9FF;font-size: 16px;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_infactamount']) ? $_smarty_tpl->tpl_vars['row']->value['car_infactamount'] : null);?>
</td>
			    <td style="text-align:center;background-color:#FE6E47;font-size: 16px;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_buytax']) ? $_smarty_tpl->tpl_vars['row']->value['car_buytax'] : null);?>
</td>
			    <td style="text-align:center;background-color:#B1C9FF;font-size: 16px;"><a href="list.php?car_status=3"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['nCount3']) ? $_smarty_tpl->tpl_vars['row']->value['nCount3'] : null);?>
</a></td>
			    <td style="text-align:center;background-color:#FE6E47;font-size: 16px;"><a href="list.php?car_status=4"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['nCount4']) ? $_smarty_tpl->tpl_vars['row']->value['nCount4'] : null);?>
</a></td>
			    <?php }} ?>
			  </tr>
		    </tbody>
            </table>
            <div style="width: 100%;height:50px;margin:30px">
            	<div style="float: left;width: 90%;font-size: 18px">
            		<span style="color: red">*</span>

  				<?php echo $_smarty_tpl->getVariable('shuoming')->value;?>

            	</div>
  				<div style="float: right;width: 10%"><a href="list.php?task=view_shuoming">修改</a>
  			</div>
  </div>
  
</div>

</div>

</body>
</html>