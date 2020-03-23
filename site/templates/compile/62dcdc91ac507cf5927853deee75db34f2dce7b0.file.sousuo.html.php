<?php /* Smarty version Smarty-3.0.4, created on 2020-03-04 17:13:48
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/shouqian/sousuo.html" */ ?>
<?php /*%%SmartyHeaderCode:305995e5f714c005241-42665687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62dcdc91ac507cf5927853deee75db34f2dce7b0' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/shouqian/sousuo.html',
      1 => 1583304244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '305995e5f714c005241-42665687',
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
			<h5>操作选项</h5>
		</div>
         <?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_type']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_type'] : null)==1||(isset($_smarty_tpl->getVariable('paiche')->value['paiche_type']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_type'] : null)==3){?>
		<div class="ibox-tools" style="margin-top: 100px;margin-left: 21.25%;float: left;width: 5%">
                    <a class="btn btn-outline btn-default" href="index.php?task=yajin&pid=<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_id']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_id'] : null);?>
">   
                        押金管理
                    </a>
         </div>
         <?php }?>
         <?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_jie']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_jie'] : null)<3&&(isset($_smarty_tpl->getVariable('paiche')->value['paiche_jie']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_jie'] : null)>-2){?>
         <div class="ibox-tools" style="margin-top: 100px;margin-left: 21.25%;float: left;width: 5%">
                    <a class="btn btn-outline btn-default" href="index.php?task=qita&pid=<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_id']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_id'] : null);?>
" >
                       
                        其他费用管理
                    </a>
         </div>
         <?php }?>
         <div class="ibox-tools" style="margin-top: 100px;margin-left: 21.25%;float: left;width: 5%">
                    <a class="btn btn-outline btn-default" href="<?php if ((isset($_smarty_tpl->getVariable('paiche')->value['paiche_type']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_type'] : null)==1){?>/site/operator/zijia_linshi/zijia_detail.php?uid=<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_id']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_id'] : null);?>
<?php }elseif((isset($_smarty_tpl->getVariable('paiche')->value['paiche_type']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_type'] : null)==3){?>/site/operator/changqi_zijia/index.php?task=mingxi&pid=<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_id']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_id'] : null);?>
<?php }elseif((isset($_smarty_tpl->getVariable('paiche')->value['paiche_type']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_type'] : null)==2){?>/site/operator/daijia_linshi/index.php?task=mingxi&pid=<?php echo (isset($_smarty_tpl->getVariable('paiche')->value['paiche_id']) ? $_smarty_tpl->getVariable('paiche')->value['paiche_id'] : null);?>
<?php }?>" target="_blank">
                        订单详细
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