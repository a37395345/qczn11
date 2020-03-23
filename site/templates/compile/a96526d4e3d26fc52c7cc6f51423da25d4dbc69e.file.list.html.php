<?php /* Smarty version Smarty-3.0.4, created on 2019-09-05 17:00:23
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/renshi/list.html" */ ?>
<?php /*%%SmartyHeaderCode:16525d70cea7375688-92213107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a96526d4e3d26fc52c7cc6f51423da25d4dbc69e' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/renshi/list.html',
      1 => 1567672271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16525d70cea7375688-92213107',
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
  <div class="page_tit">员工基础资料</div>
  <div class="list">
            <table width="100%" border="1" cellspacing="0" cellpadding="0">
            <tbody>
            <tr style="">
			    <td class="ccc_bg" width="20%" style="font-size: 16px;" colspan="">所有员工</td>
			    <td class="ccc_bg" width="20%" style="font-size: 16px;" rowspan="">在职人数</td>
			    <td class="ccc_bg" width="20%" style="font-size: 16px;" rowspan="">正式期人数</td>
			    <td class="ccc_bg" width="20%" style="font-size: 16px;" rowspan="">试用期人数</td>
			    <td class="ccc_bg" width="20%" style="font-size: 16px;" rowspan="">离职人数</td>
		
			</tr>
		  	<tr style="height:80px;">
			    <td style="text-align:center;background-color:#B1C9FF;font-size: 16px;"><a href="zemp_index.php?emp_zhuangtai=1"><?php echo $_smarty_tpl->getVariable('count_zong')->value;?>
</a></td>
			    <td style="text-align:center;background-color:#FE6E47;font-size: 16px;">
			    	<a href="zemp_index.php?emp_zhuangtai=2"><?php echo $_smarty_tpl->getVariable('count_zaizhi')->value;?>
</a>
			    </td>
			    <td style="text-align:center;background-color:#B1C9FF;font-size: 16px;">
			    	<a href="zemp_index.php?emp_zhuangtai=3"><?php echo $_smarty_tpl->getVariable('count_zhenshi')->value;?>
</a>
			    </td>
			    <td style="text-align:center;background-color:#FE6E47;font-size: 16px;">
			    	<a href="zemp_index.php?emp_zhuangtai=4"><?php echo $_smarty_tpl->getVariable('count_lishi')->value;?>
</a>
			    </td>
			    <td style="text-align:center;background-color:#B1C9FF;font-size: 16px;">
			    	<a href="zemp_index.php?emp_zhuangtai=5"><?php echo $_smarty_tpl->getVariable('count_lizhi')->value;?>
</a>
			    </td>
			    
			  </tr>
		    </tbody>
            </table>
            
  </div>
  
</div>

</div>

</body>
</html>