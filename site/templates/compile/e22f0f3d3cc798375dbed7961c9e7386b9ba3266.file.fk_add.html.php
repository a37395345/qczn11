<?php /* Smarty version Smarty-3.0.4, created on 2019-12-17 13:14:32
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/beiyongjin/fk_add.html" */ ?>
<?php /*%%SmartyHeaderCode:291845df864383fe325-24130532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e22f0f3d3cc798375dbed7961c9e7386b9ba3266' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/beiyongjin/fk_add.html',
      1 => 1576559637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '291845df864383fe325-24130532',
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
<title>续租</title>
<link rel="shortcut icon" href="favicon.ico">
  <link href="../../../../css/style.css" rel="stylesheet" type="text/css">
<link href="../../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<link rel="stylesheet" type="text/css" href="../../../../css/webuploader.css">
<link rel="stylesheet" type="text/css" href="../../../../css/diyUpload.css">


<link href="../../../css/box.css" rel="stylesheet" type="text/css" />
<link href="../../../css/jquery.editable-select.min.css" rel="stylesheet" type="text/css" />
<link href="../../../crm/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
<link href="../../../crm/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
<link href="../../../crm/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">

<link href="../../../crm/css/animate.min.css" rel="stylesheet">
<link href="../../../crm/css/style.min862f.css?v=2" rel="stylesheet">
<script src="../../../../jquery.js"></script>

<script type="text/javascript" src="../../../js/laydate/laydate.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../js/check_form.js"></script>

<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js?a=5"></script>

<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
<script type="text/javascript" src="../../../js/jquery.editable-select.min.js"></script>


<script type="text/javascript" src="../../../../js/diyUpload/webuploader.html5only.min.js"></script>
<script type="text/javascript" src="../../../../js/diyUpload/diyUpload.js?a=5"></script>

<script src="../../../js/moment.js"></script>
<!-->
<script type="text/javascript">
</script>
<!--><object classid="clsid:F1317711-6BDE-4658-ABAA-39E31D3704D3" codebase="SDRdCard.cab#version=1,3,5,0" width="330" height="0" align="center" hspace="0" vspace="0" id="idcard" name="rdcard"></object>
<style type="text/css">
    /**/
    .navi_name{font-size:14px;font-weight:bold;}
    .indent{padding-left:40px;}
#box{width:100%; min-height:300px; background:#FF9}
/**/
        .span1{
        margin-bottom: 5px;    color: inherit;
    background-color: transparent;
    -webkit-transition: all .5s;
    transition: all .5s;    border-color: #c2c2c2;border-radius: 3px;    display: inline-block;
    padding: 6px 12px;
    }
    .webuploader-pick{
        float: left;
    }

    .example div ul{
        overflow:hidden;
    }
    .example div ul li img{
        display: block;
        border: 1px solid #ddd;
        box-shadow: 1px 1px 5px 0px #a2958a;
        padding: 6px;
        text-align: center;
        vertical-align: middle;
    }
    input[type="checkbox"]{
      width:18px;
      height:18px;
      display: inline-block;
      text-align: center;
      vertical-align:baseline; 
      line-height: 18px;
      position: relative;
      border-radius: 50%;
      outline: none;
      -webkit-appearance: none;
      border:1px solid #fff;
      -webkit-tab-highlight-color: rgba(0,0,0,0);
      color: #fff;
      background: #fff;
      top: 4px;
    }
    input[type="checkbox"]::before{
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      background: #fff;
      width: 100%;
      height: 100%;
      border: 1px solid #999999;
      border-radius: 50%;
      color: #fff;
    }
    input[type="checkbox"]:checked::before{
      content: "\2713";
      background-color: #657AFE;
      border: 1px solid #657AFE;
      position: absolute;
      top: 0;
      left: 0;
      width:100%;
      color:#fff;
      font-size: 18px;
      border-radius: 50%;
    }
    input[type="checkbox"]:disabled::before{
        background: #eee;
        cursor: default;
    }
    input[type="checkbox"]:focus{
        border: none!important;
    }
    input{
        outline:none!important;
    }
    @media(max-width: 768px){
      .jbox-close{
        right:135px!important;
      }
    }
    </style>
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
	<!-- Panel Other -->
	<div class="ibox float-e-margins">
		<div class="ibox-title">
			<h5>添加借款</h5>
		</div>
		<form method="post" action="index.php?task=fk_add_action" name="form1" id="form1">
			<div class="ibox-content"  id="tian1">
				<div class="row row-lg">
					<div class="col-sm-12">
						<!-- Example Events -->
						<div class="example-wrap">
							<div class="example">
								<div class="btn-group hidden-xs pull-right" id="exampleTableEventsToolbar" role="group">
								</div>
								<!-- <input type="hidden" value="<?php echo $_smarty_tpl->getVariable('pid')->value;?>
" id="pid" name="pid"> -->
								<div class="shiji">
									<table class="table table-bordered" class="shiji">
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">借款金额：</span>
										</th>
								<td width="35%">
									<input onkeyup="value=value.replace(/[^0-9\.]/g,'')" name="borrow_money" id="borrow_money" placeholder="必填" class="form-control input-sm" value="" >
								</td>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">备注：</span>
										</th>
										<td width="35%">
				              <input style="width: 78%;float: left;"type="text"class="form-control input-sm" id="borrow_remarks" name="borrow_remarks" value="" >
				                            </td>
									</tr>
									</table>
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

 <script src="../../../crm/js/bootstrap.min.js?v=3.3.6"></script>
    
    <script src="../../../crm/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
    <script src="../../../crm/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
    <script src="../../../crm/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
    <script src="../../../crm/js/demo/bootstrap-table-demo.min.js"></script>

</body>
<!-->
<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->
<script>


</script>
<script type="text/javascript">

$("#submit").click(function(){
	let borrow_money = $("#borrow_money").val();
	let borrow_remarks =$("#borrow_remarks").val();
	if(!borrow_money){
		alert("请输入借款金额！");
		return false;
	}
});

$('#form1').submit(function(){
	$('#submit').attr('disabled','disabled');
	$('#submit').val('正在提交');

});
</script>
<!-->
</html>