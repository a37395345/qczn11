<?php /* Smarty version Smarty-3.0.4, created on 2020-02-28 15:22:32
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/shouqian/piliang_index.html" */ ?>
<?php /*%%SmartyHeaderCode:252445e58bfb891a228-43601252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ef691473cb3fc3064273b5f8122cb3da3ba759a' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/shouqian/piliang_index.html',
      1 => 1582874418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '252445e58bfb891a228-43601252',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<!DOCTYPE html>
<html>
<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:03 GMT -->
<head>


<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=9;IE=8;IE=7;IE=EDGE">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>管理后台</title>
<link rel="shortcut icon" href="favicon.ico">
<link href="../../../crm/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
<link href="../../../crm/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
<link href="../../../crm/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
<link href="../../../crm/css/animate.min.css" rel="stylesheet">
<link href="../../../crm/css/style.min862f.css?v=4.1.0" rel="stylesheet">
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/laydate/laydate.js?a=<?php echo (isset($_smarty_tpl->getVariable('list')->value['change_time']) ? $_smarty_tpl->getVariable('list')->value['change_time'] : null);?>
"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../js/check_form.js"></script>
<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css?a=2" rel="stylesheet">
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js?a=3"></script>
<script type="text/javascript" src="../../../js/jquery.editable-select.min.js"></script>
<!-->

<script type="text/javascript">

</script>
<!--><object classid="clsid:F1317711-6BDE-4658-ABAA-39E31D3704D3" codebase="SDRdCard.cab#version=1,3,5,0" width="330" height="0" align="center" hspace="0" vspace="0" id="idcard" name="rdcard"></object>

</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
	<!-- Panel Other -->
	<div class="ibox float-e-margins">
		<div class="ibox-title">
			<h5>批量结账</h5>
		</div>
        
		<div class="ibox-tools" style="margin-top: 100px;margin-left: 21.25%;float: left;width: 5%">
                    <a class="btn btn-outline btn-default" href="index.php?task=piliang_index_action&type=zijia_linshi">   
                        自驾平台单
                    </a>
         </div>
      
        
         <div class="ibox-tools" style="margin-top: 100px;margin-left: 21.25%;float: left;width: 5%">
                    <a class="btn btn-outline btn-default" href="index.php?task=piliang_index_action&type=daijia_linshi" >
                        临时代驾企业单
                    </a>
         </div>
         
         <div class="ibox-tools" style="margin-top: 100px;margin-left: 21.25%;float: left;width: 5%">
                    <a class="btn btn-outline btn-default" href="index.php?task=piliang_index_action&type=diaoche" >
                        临时代驾调车单
                    </a>
         </div>
        
        
	</div>
	<!-- End Panel Other -->
</div>

</body>
<script type="text/javascript" src="../../../js/account.js"></script>
<script type="text/javascript">
	 function yajin(pid){
        demo_iframe('index.php?task=yajin&pid='+pid,'押金管理',1000,500,'login_js');
    }
     function qita(pid){
        demo_iframe('index.php?task=qita&pid='+pid,'其他费用管理',1000,500,'login_js');
    }
</script>

</html>