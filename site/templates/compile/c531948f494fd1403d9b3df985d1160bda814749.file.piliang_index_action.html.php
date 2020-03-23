<?php /* Smarty version Smarty-3.0.4, created on 2020-03-02 15:50:35
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/shouqian/piliang_index_action.html" */ ?>
<?php /*%%SmartyHeaderCode:294765e5cbacb5aa133-91943165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c531948f494fd1403d9b3df985d1160bda814749' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/shouqian/piliang_index_action.html',
      1 => 1583135430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '294765e5cbacb5aa133-91943165',
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
<title>自驾财务管理</title>
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
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js?a=3"></script>
<script type="text/javascript" src="../../../js/jquery.editable-select.min.js"></script>
<style>
	.wrapper-content{
		padding: 0 20px;
	}
</style>
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
			<h5><?php if ($_smarty_tpl->getVariable('type')->value=="zijia_linshi"){?>自驾平台单<?php }elseif($_smarty_tpl->getVariable('type')->value=="daijia_linshi"){?>临时代驾企业结账<?php }elseif($_smarty_tpl->getVariable('type')->value=="diaoche"){?>临时代驾调车结账<?php }?></h5>
		</div>
		<form method="post" action="index.php?task=danhao_list" name="form1" id="form1">
			<div class="ibox-content"  id="tian">
				<div class="row row-lg">
					<div class="col-sm-12">
						<!-- Example Events -->
						<div class="example-wrap">
							<input type="hidden" name="type" id="type" value="<?php echo $_smarty_tpl->getVariable('type')->value;?>
">
							<div class="example">
								<div class="btn-group hidden-xs pull-right" id="exampleTableEventsToolbar" role="group">
								</div>
								<div class="shiji">
									<?php if ($_smarty_tpl->getVariable('type')->value=="zijia_linshi"){?>
									<table class="table table-bordered" class="shiji">
									<tr>
										<th style="background-color:#F5F5F6" width="25%">
											<span style="color:#000">客户类型：</span>
										</th>
										<td width="25%">
											<select class="form-control input-sm" name="paiche_kehu" id="paiche_kehu">
                                                    <option value="0">请选择</option>
                                                    <option value="2">平台用户</option>
                                                    <option value="3">凹凸代步车</option>
                                             </select>
										</td>

										<th style="background-color:#F5F5F6;display: none" width="25%" class="paiche_pintaiid">
											<span style="color:#000">平台类型：</span>
										</th>
										<td width="25%" class="paiche_pintaiid" style="display: none">
											 <select class="form-control input-sm" name="paiche_pintaiid" id="paiche_pintaiid">
                                                <option value="0" >请选择</option>
                                                <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pintai_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                                    <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['name']) ? $_smarty_tpl->tpl_vars['rows']->value['name'] : null);?>
</option>
                                                <?php }} ?>
                                                </select>
										</td>

										<th style="background-color:#F5F5F6;" width="25%" class="paiche_pintaiid_a">
											
										</th>
										<td width="25%" class="paiche_pintaiid_a" >
											
										</td>
									</tr>

									</table>
									<?php }elseif($_smarty_tpl->getVariable('type')->value=="daijia_linshi"){?>
										<table class="table table-bordered" class="shiji">
									<tr>
										<th style="background-color:#F5F5F6" width="25%">
											<span style="color:#000">企业名称：</span>
										</th>
										<td width="25%">
											<select class="form-control input-sm" name="paicheCom" id="paicheCom">
											 <option value="0" >请选择</option>
                                                <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('daijia_linshi')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                                    <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['paicheCom']) ? $_smarty_tpl->tpl_vars['rows']->value['paicheCom'] : null);?>
,<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['qiye_num']) ? $_smarty_tpl->tpl_vars['rows']->value['qiye_num'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_name']) ? $_smarty_tpl->tpl_vars['rows']->value['client_name'] : null);?>
~<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['qiye_num']) ? $_smarty_tpl->tpl_vars['rows']->value['qiye_num'] : null);?>
</option>
                                                <?php }} ?>
                                                </select>
										</td>
										
										<th style="background-color:#F5F5F6;" width="25%" >
											
										</th>
										<td width="25%" >
											
										</td>
									</tr>
									</table>
									<?php }elseif($_smarty_tpl->getVariable('type')->value=="diaoche"){?>
										<table class="table table-bordered" class="shiji">
									<tr>
										<th style="background-color:#F5F5F6" width="25%">
											<span style="color:#000">调车公司：</span>
										</th>
										<td width="25%">
											<select class="form-control input-sm" name="bro_id" id="bro_id">
											 <option value="0" >请选择</option>
                                                <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('brothers')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                                    <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bro_id']) ? $_smarty_tpl->tpl_vars['rows']->value['bro_id'] : null);?>
,<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['diaoche_num']) ? $_smarty_tpl->tpl_vars['rows']->value['diaoche_num'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['bro_name']) ? $_smarty_tpl->tpl_vars['rows']->value['bro_name'] : null);?>
~<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['diaoche_num']) ? $_smarty_tpl->tpl_vars['rows']->value['diaoche_num'] : null);?>
</option>
                                                <?php }} ?>
                                                </select>
										</td>
										
										<th style="background-color:#F5F5F6;" width="25%" >
											
										</th>
										<td width="25%" >
											
										</td>
									</tr>
									</table>
									<?php }?>
								</div>

							</div>
						</div>
						<!-- End Example Events -->
					</div>
				</div>
				<input type="submit" id="submit" class="btn btn-outline btn-default" value="提交" style="width: 10%;margin-left: 45%;display: block;">
			</div>
			
		</form>
	</div>
	<!-- End Panel Other -->
</div>
<script src="js/jquery.min.js?v=2.1.4"></script>
<script src="js/bootstrap.min.js?v=3.3.6"></script>
<script src="js/content.min.js?v=1.0.0"></script>
<script src="js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
<script src="js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
<script src="js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
<script src="js/demo/bootstrap-table-demo.min.js"></script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>
<script type="text/javascript" src="../../../js/account.js"></script>

<script type="text/javascript">
	$('#form1').submit(function(){
		$('#submit').attr('disabled','disabled');
		$('#submit').val('正在提交');
	});
	$("#submit").click(function(){

		var type=$("#type").val();
		var paiche_kehu=parseInt($('#paiche_kehu').val());
		var paiche_pintaiid=parseInt($('#paiche_pintaiid').val());
		var paicheCom=parseInt($('#paicheCom').val());
		var bro_id=parseInt($('#bro_id').val());
		
		//临时自驾
		if(type=="zijia_linshi"){
			if(paiche_kehu==2){
				if(!paiche_pintaiid>0){
					alert("请选择平台类型！");
					return false;
				}
			}else if(paiche_kehu==3){

			}else{
				alert("请选择客户类型！");
				return false;
			}
		}else if(type=="daijia_linshi"){
			if(!paicheCom>0){
					alert("请选择企业名称！");
					return false;
			}
		}else if(type=="diaoche"){
			if(!bro_id>0){
					alert("请选择调车公司！");
					return false;
			}
		}
		
	})
		
	
	$('#paiche_kehu').change(function(){
        var type=$(this).val();
       if(type==2){
            $(".paiche_pintaiid").css("display","table-cell");
            $(".paiche_pintaiid_a").css("display","none");
            
        }else if(type==3){
            $(".paiche_pintaiid").css("display","none");
            $(".paiche_pintaiid_a").css("display","table-cell");
            $("#paiche_pintaiid").val(0);
        }
    });

</script>
</html>