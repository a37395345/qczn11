<?php /* Smarty version Smarty-3.0.4, created on 2020-01-17 09:58:43
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/zijia_linshi/yanzheng_shenfen.html" */ ?>
<?php /*%%SmartyHeaderCode:49575e2114d343f5c2-02917522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c744233dd31fac2b6a3c8d608a29aefac1e99554' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/zijia_linshi/yanzheng_shenfen.html',
      1 => 1579225816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49575e2114d343f5c2-02917522',
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
<link href="../../../css/box.css" rel="stylesheet" type="text/css" />
<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css?a=2" rel="stylesheet"  />
<link href="../../../css/jquery.editable-select.min.css" rel="stylesheet" type="text/css" />
<link href="../../../crm/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
<link href="../../../crm/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
<link href="../../../crm/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
<link href="../../../crm/css/animate.min.css" rel="stylesheet">
<link href="../../../crm/css/style.min862f.css?v=2" rel="stylesheet">
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/laydate/laydate.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../js/check_form.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js?a=5"></script>

<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
<script type="text/javascript" src="../../../js/jquery.editable-select.min.js"></script>

<!-->
<script type="text/javascript">
	window.onload=function(){
		$("#div_a").css("display","none");
		$("#div_b").css("display","block");
		
	}
	
	var current=0;
		var ref = "";
		ref = setInterval(function(){
		    $("#img1").css("transform","rotate("+current+"deg)");
			current=current+10;
	},100);


</script>
<!--><object classid="clsid:F1317711-6BDE-4658-ABAA-39E31D3704D3" codebase="SDRdCard.cab#version=1,3,5,0" width="330" height="0" align="center" hspace="0" vspace="0" id="idcard" name="rdcard"></object>
<style type="text/css">
	.span1{
		margin-bottom: 5px;    color: inherit;
    background-color: transparent;
    -webkit-transition: all .5s;
    transition: all .5s;    border-color: #c2c2c2;border-radius: 3px;    display: inline-block;
    padding: 6px 12px;
	}

</style>

</head>
<body class="gray-bg">
	<div style="width: 100%;padding-top: 1px" id="div_a">
		<img src="../../../images/jz.png" style="width: 10%;margin-left: 45%;margin-top: 100px;" id="img1">
	</div>
	
<div class="wrapper wrapper-content animated fadeInRight" style="display: none" id="div_b">
	<!-- Panel Other -->
	<div class="ibox float-e-margins">
		<div class="ibox-title">
			<h5>换车请验证客户<?php echo (isset($_smarty_tpl->getVariable('data')->value['paiche_linker']) ? $_smarty_tpl->getVariable('data')->value['paiche_linker'] : null);?>
的身份信息</h5>
		</div>
		
			<!--派车id,用于判断是修改还是调车-->
			<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('pid')->value;?>
" id="pid" name="pid">
			<input type="hidden" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['paiche_linker']) ? $_smarty_tpl->getVariable('data')->value['paiche_linker'] : null);?>
" id="paiche_linker">
			<input type="hidden" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['paiche_linkerNum']) ? $_smarty_tpl->getVariable('data')->value['paiche_linkerNum'] : null);?>
" id="paiche_linkerNum" >
			<div class="ibox-content"  id="tian">
				<div class="row row-lg">
					<div class="col-sm-12">
						<!-- Example Events -->
						<div class="example-wrap">
							<div class="example">
								<div class="btn-group hidden-xs pull-right" id="exampleTableEventsToolbar" role="group">
								</div>
								<button type="button" class="btn btn-outline btn-default" id="shuaka1" onclick="beginread_onclick()" style="float: left;">
								<img src="../../../images/a10.png" style="width: 20px">
										刷身份证验证
								</button>
						<button type="button" class="btn btn-outline btn-default" id="" onclick="xkehu_xianshi()" style="float: left;margin-left: 10px;">
								<img src="../../../images/a10.png" style="width: 20px">
										新客户人脸识别验证
						</button>
						
						<div style="clear: both;">
										<div style="display: none" id="xin_kehu">
										<table class="table table-bordered">

										<tr>
											<th style="background-color:#F5F5F6" width="15%">
												<span style="color:#000">承租人姓名</span>
											</th>
											<td width="35%" style="text-align: center;">
												<input type="text" class="form-control input-sm" placeholder="姓名" name="realname" id="realname" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['paiche_linker']) ? $_smarty_tpl->getVariable('data')->value['paiche_linker'] : null);?>
" readonly="readonly" unselectable="on">
											</td>

											<th style="background-color:#F5F5F6" width="15%">
												<span style="color:#000">身份证号码</span>
											</th>
											<td width="35%">
												<input type="text" class="form-control input-sm" placeholder="身份证号码" name="idcard_a" id="idcard_a" minlength="18" maxlength="18" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['paiche_linkerNum']) ? $_smarty_tpl->getVariable('data')->value['paiche_linkerNum'] : null);?>
" readonly="readonly" unselectable="on">
											</td>
										</tr>
										<tr>
											<th style="background-color:#F5F5F6" width="15%">
												<span style="color:#000">图片</span>
											</th>
											<td width="35%">
												<input type="file" class="form-control input-sm" placeholder="图片" name="tp_b" id="tp_b" accept=".png, .jpeg, .jpg">
											</td>

											<th style="background-color:#F5F5F6" width="15%">
												<img src="" id="images_a" width="100%" >
											</th>



											<th style="background-color:#F5F5F6" width="35%">
												<button type="button" class="btn btn-outline btn-default" id="yz_bbb" onclick="huanche()" style="float: left;margin-left: 10px;">
													<img src="../../../images/a10.png" style="width: 20px">
															验证
												</button>
												<input type="hidden" name="paiche_tupian" id="paiche_tupian">
											</th>
										</tr>
										</table>
										</div>

							</div>
								

                    </div>
                   
                </div>
            </div>

									</td>
								</tr>

								
								






								
							</div>
						</div>
						<!-- End Example Events -->
					</div>
				</div>
				<a href="zijia_changecar.php?pid=<?php echo $_smarty_tpl->getVariable('pid')->value;?>
" class="btn btn-outline btn-default" id='submit' style="display: none;width: 10%;margin-left: 45%;display: none;">换车
                                </a>
				
			</div>
			
		
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

</body>


<script type="text/javascript" src="../../../js/yanzheng_shenfen.js?a=<?php echo time();?>
"></script>
<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->
</html>