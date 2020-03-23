<?php /* Smarty version Smarty-3.0.4, created on 2019-03-22 09:44:35
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/machine/total_list.html" */ ?>
<?php /*%%SmartyHeaderCode:239055c943e0319b9e7-53632574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e165610f440d8e5a69cfa01d3ea3db433819a64' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/machine/total_list.html',
      1 => 1553219012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '239055c943e0319b9e7-53632574',
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
  <div class="page_tit">车辆违章管理</div>
  <div class="list">
            <table width="100%" border="1" cellspacing="0" cellpadding="0">
            <tbody>
            <tr style="height:50px;">
			    <td class="ccc_bg" width="25%" style="font-size: 16px;">违章总数</td>
			    <td class="ccc_bg" width="25%" style="font-size: 16px;">未冻结数</td>
			    <td class="ccc_bg" width="25%" style="font-size: 16px;">企业冻结数</td>
			    <td class="ccc_bg" width="25%" style="font-size: 16px;">冻结数</td>
			    
			</tr>
			<tr style="height:50px;">
			    <td class="ccc_bg" width="25%" style="font-size: 16px;background-color: #B1C9FF"><a href="list.php?task=breakfirst&l_id=0"><?php echo $_smarty_tpl->getVariable('count_weihznag')->value;?>
</a></td>
			    <td class="ccc_bg" width="25%" style="font-size: 16px;background-color: #FE6E47"><a href="list.php?task=breakfirst&l_id=1"><?php echo $_smarty_tpl->getVariable('count_wdongjie')->value;?>
</a></td>
			    <td class="ccc_bg" width="25%" style="font-size: 16px;background-color: #B1C9FF"><a href="list.php?task=breakfirst&l_id=2"><?php echo $_smarty_tpl->getVariable('count_qdongjie')->value;?>
</a></td>
			    <td class="ccc_bg" width="25%" style="font-size: 16px;background-color: #FE6E47"><a href="list.php?task=breakfirst&l_id=3"><?php echo $_smarty_tpl->getVariable('count_dongjie')->value;?>
</a></td>
			    
			</tr>
			
		    </tbody>
            </table>
           
  </div>
  
</div>

</div>

</body>
</html>