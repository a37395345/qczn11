<?php /* Smarty version Smarty-3.0.4, created on 2019-12-18 14:48:39
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/public/list.html" */ ?>
<?php /*%%SmartyHeaderCode:195685df9cbc77d9d42-97109963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a7d572ef410b67960fdaccf3905b53b0d6f6e76' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/public/list.html',
      1 => 1576651692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195685df9cbc77d9d42-97109963',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>管理后台</title>
	<link rel="shortcut icon" href="favicon.ico">
	<link href="../../../crm/fonts1/iconfont.css" rel="stylesheet">
	<link href="../../../crm/css/bootstrap.min14ed.css" rel="stylesheet">
	<link href="../../../crm/css/font-awesome.min93e3.css?v=3" rel="stylesheet">
	<link href="../../../crm/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
	<link href="../../../crm/css/animate.min.css" rel="stylesheet">
	<link href="../../../crm/css/style.min862f.css" rel="stylesheet">
	<link href="../../../crm/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <script src="../../../crm/js/plugins/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript" src="../../../js/jquery.js"></script>
	<script type="text/javascript" src="../../../js/laydate/laydate.js"></script>
	<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css?a=2" rel="stylesheet">
    <script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js?a=5"></script>
    <script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js?a=1"></script>
	<style>
		tr{
			font-size: 12px;
			line-height: 10px;
		}
		td{
			margin: 0;
			padding:1px!important;
			list-style: none;
			color: #000000;
		}
		input{
			outline: none!important;
		}
	</style>
</head>
<body class="gray-bg">
	<div class="wrapper wrapper-content animated fadeInRight">
		<div class="ibox float-e-margins">
			<div class="ibox-title">
	            <h5>标题</h5>
	        </div>
	        <from id="form1" action="" method="get">
	        	<div class="wrapper wrapper-content animated fadeInRight" style="margin:0; padding: 0;">
	        		<div class="ibox float-e-margins" style="margin:0">
	        			<div class="ibox-title" style=" margin: 0; padding: 0;">
	        				<h5 style="padding-top: 15px; padding-left: 10px;">搜索</h5>
	        				<div class="ibox-tools" style="padding-top: 14px; padding-left: 10px;float: left;">
	                            <a class="collapse-link">
	                            <i class="fa fa-chevron-down" id="up"></i>
	                            </a>
	                        </div>
	                        <div class="ibox-tools" style="padding-top: 14px; padding-right: 20px;float: left;">
                        	</div>
	                        <div class="ibox-tools" style="padding-right: 20px;float: left;">
	                            <div style="margin-top:5px;" >
	                                <a href="javascript:;" class="btn btn-outline btn-default">分类</a>
	                                <a href="javascript:;" class="btn btn-outline btn-default">分类</a>
	                                <a href="javascript:;" class="btn btn-outline btn-default">分类</a>
	                                <a href="javascript:;" class="btn btn-outline btn-default" onclick="demo();return false">
	                                <i style="padding-right: 4px;" class="glyphicon glyphicon-plus" aria-hidden="true"></i>新建项目
	                                </a>
	                            </div>
	                        </div>
	                        <div class="ibox-tools" style=" padding-right: 20px;float:right; ;">
                            <div class="btn-group hidden-xs pull-right" style="margin-top:5px;" id="exampleTableEventsToolbar" role="group">
	                                <a href="export.php?car_status=0" class="btn btn-outline btn-default" target="_blank">导出</a>
	                            </div>
	                        </div>
	        			</div>
	        			<div class="ibox-content" id="content" style=" margin: 0px; padding: 0px;display: none">
	        				<div class="row row-lg">
	        					<div class="col-sm-12">
	        						<div class="example-wrap">
	        							<div class="example">
	        								<table class="table table-bordered">
	        									<tr>
	        										<th width="15%" style="background-color:#F5F5F6">
		                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;合同号:</span>
		                                            </th>
		                                            <td width="35%">
		                                                <input onkeyup="value=value.replace(/[^0-9]/g,'')" type="text" class="form-control input-sm" placeholder="" name="" id="">
		                                            </td>
		                                            <th width="15%" style="background-color:#F5F5F6">
		                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;借款金额:</span>
		                                            </th>
		                                            <td width="35%">
		                                                <input onkeyup="value=value.replace(/[^0-9\.]/g,'')" type="text" class="form-control input-sm" placeholder="" name="" id="">
		                                            </td>
	        									</tr>
	        									<tr>
	        										<th width="15%" style="background-color:#F5F5F6">
		                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;开始时间:</span>
		                                            </th>
		                                            <td width="35%">
		                                                <input onclick="laydate({istime: true, format: 'YYYY-MM-DD'})" type="text" class="form-control input-sm" placeholder="" name="" id="">
		                                            </td>
		                                            <th width="15%" style="background-color:#F5F5F6">
		                                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;结束时间:</span>
		                                            </th>
		                                            <td width="35%">
		                                                <input onclick="laydate({istime: true, format: 'YYYY-MM-DD'})" type="text" class="form-control input-sm" placeholder="" name="" id="">
		                                            </td>
	        									</tr>
	        								</table>
	        								<button type="submit" class="btn btn-outline btn-default" style="margin-left:45%;width: 10%">
			                                <i class="glyphicon glyphicon-search" aria-hidden="true"></i>搜索
			                                </button>
	        							</div>
	        						</div>
	        					</div>
	        				</div>
	        			</div>
	        		</div>
	        	</div>
	        </from>
	        <div class="ibox-content">
	        	<div class="row row-lg">
	        		<div class="col-sm-12">
	        			<div class="example-wrap">
	        				<div class="example">
	        					<div class="row">
	        						<div class="col-lg-6">
	                                    <div class="pull-left" style="margin-top:15px">
	                                        <p>
	                                            显示 <?php echo ($_smarty_tpl->getVariable('p')->value-1)*10+1;?>
 到 <?php echo $_smarty_tpl->getVariable('p')->value*10;?>
 项，共 <?php echo $_smarty_tpl->getVariable('total')->value;?>
 项
	                                        </p>
	                                    </div>
	                                </div>
	                                <div class="col-lg-6">
	                                    <div class="pull-right">
	                                        <ul class="pagination">
	                                               <?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>

	                                        </ul>
	                                    </div>
	                                </div>
	        					</div>
	        					<table class="table table-bordered table-hover" data-height="400" style="margin-bottom:0px" data-mobile-responsive="true">
	        						<thead>
	        							<tr>
	        								<th style="text-align: center;width: 4%">状态</th>
	        								<th style="text-align: center;width: 9%">合同编号</th>
	        								<th style="text-align: center;width: 10%">联系人信息</th>
	        								<th style="text-align: center;width: 6%">业务员</th>
	        								<th style="text-align: center;width: 10%">金额明细</th>
	        								<th style="text-align: center;width: 6%">李白</th>
	        								<th style="text-align: center;width: 6%">韩信</th>
	        								<th style="text-align: center;width: 6%">虞姬</th>
	        								<th style="text-align: center;width: 6%">妲己</th>
	        								<th style="width: 14%">
			                                    <div align="center">操作</div>
			                                </th>
	        							</tr>
	        						</thead>
	        						<tbody>
	        							<tr>
	        								<td style="text-align: center;">加载中</td>
	        								<td style="text-align: center;">
	        									<span style="border-bottom:1px solid #b19d9d;line-height: 23px">201912178888</span><br/>小明
	        								</td>
	        								<td style="text-align: center;">小明</td>
	        								<td style="text-align: center;">小明</td>
	        								<td style="text-align: center;">800000</td>
	        								<td style="text-align: center;">李白</td>
	        								<td style="text-align: center;">韩信</td>
	        								<td style="text-align: center;">虞姬</td>
	        								<td style="text-align: center;">妲己</td>
	        								<td align="center">
	        									<div>
	        										<a href="javascript:;" onclick="" title="" style="color:#CC6600">
                                        				<i style="font-size: 22px;color: red" class="fa fa-flask"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600">
                                        				<i class="iconfont icon-xiugai"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600">
                                        				<i class="iconfont icon-woyaoxuzu"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="delete_a();return false" title="" style="color:#CC6600">
                                        				<i class="iconfont icon-shanchu"></i>
                                    				</a>&nbsp;&nbsp;
	        									</div>
	        								</td>
	        							</tr>
	        							<tr>
	        								<td style="text-align: center;">加载中</td>
	        								<td style="text-align: center;">
	        									<span style="border-bottom:1px solid #b19d9d;line-height: 23px">201912178888</span><br/>小明
	        								</td>
	        								<td style="text-align: center;">小明</td>
	        								<td style="text-align: center;">小明</td>
	        								<td style="text-align: center;">800000</td>
	        								<td style="text-align: center;">李白</td>
	        								<td style="text-align: center;">韩信</td>
	        								<td style="text-align: center;">虞姬</td>
	        								<td style="text-align: center;">妲己</td>
	        								<td align="center">
	        									<div>
	        										<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i style="font-size: 22px;color: red" class="fa fa-flask"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-xiugai"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-woyaoxuzu"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-ziyuan"></i>
                                    				</a>&nbsp;&nbsp;
	        									</div>
	        								</td>
	        							</tr>
	        							<tr>
	        								<td style="text-align: center;">加载中</td>
	        								<td style="text-align: center;">
	        									<span style="border-bottom:1px solid #b19d9d;line-height: 23px">201912178888</span><br/>小明
	        								</td>
	        								<td style="text-align: center;">小明</td>
	        								<td style="text-align: center;">小明</td>
	        								<td style="text-align: center;">800000</td>
	        								<td style="text-align: center;">李白</td>
	        								<td style="text-align: center;">韩信</td>
	        								<td style="text-align: center;">虞姬</td>
	        								<td style="text-align: center;">妲己</td>
	        								<td align="center">
	        									<div>
	        										<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i style="font-size: 22px;color: red" class="fa fa-flask"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-xiugai"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-woyaoxuzu"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-ziyuan"></i>
                                    				</a>&nbsp;&nbsp;
	        									</div>
	        								</td>
	        							</tr>
	        							<tr>
	        								<td style="text-align: center;">加载中</td>
	        								<td style="text-align: center;">
	        									<span style="border-bottom:1px solid #b19d9d;line-height: 23px">201912178888</span><br/>小明
	        								</td>
	        								<td style="text-align: center;">小明</td>
	        								<td style="text-align: center;">小明</td>
	        								<td style="text-align: center;">800000</td>
	        								<td style="text-align: center;">李白</td>
	        								<td style="text-align: center;">韩信</td>
	        								<td style="text-align: center;">虞姬</td>
	        								<td style="text-align: center;">妲己</td>
	        								<td align="center">
	        									<div>
	        										<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i style="font-size: 22px;color: red" class="fa fa-flask"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-xiugai"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-woyaoxuzu"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-ziyuan"></i>
                                    				</a>&nbsp;&nbsp;
	        									</div>
	        								</td>
	        							</tr>
	        							<tr>
	        								<td style="text-align: center;">加载中</td>
	        								<td style="text-align: center;">
	        									<span style="border-bottom:1px solid #b19d9d;line-height: 23px">201912178888</span><br/>小明
	        								</td>
	        								<td style="text-align: center;">小明</td>
	        								<td style="text-align: center;">小明</td>
	        								<td style="text-align: center;">800000</td>
	        								<td style="text-align: center;">李白</td>
	        								<td style="text-align: center;">韩信</td>
	        								<td style="text-align: center;">虞姬</td>
	        								<td style="text-align: center;">妲己</td>
	        								<td align="center">
	        									<div>
	        										<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i style="font-size: 22px;color: red" class="fa fa-flask"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-xiugai"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-woyaoxuzu"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-ziyuan"></i>
                                    				</a>&nbsp;&nbsp;
	        									</div>
	        								</td>
	        							</tr>
	        							<tr>
	        								<td style="text-align: center;">加载中</td>
	        								<td style="text-align: center;">
	        									<span style="border-bottom:1px solid #b19d9d;line-height: 23px">201912178888</span><br/>小明
	        								</td>
	        								<td style="text-align: center;">小明</td>
	        								<td style="text-align: center;">小明</td>
	        								<td style="text-align: center;">800000</td>
	        								<td style="text-align: center;">李白</td>
	        								<td style="text-align: center;">韩信</td>
	        								<td style="text-align: center;">虞姬</td>
	        								<td style="text-align: center;">妲己</td>
	        								<td align="center">
	        									<div>
	        										<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i style="font-size: 22px;color: red" class="fa fa-flask"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-xiugai"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-woyaoxuzu"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-ziyuan"></i>
                                    				</a>&nbsp;&nbsp;
	        									</div>
	        								</td>
	        							</tr>
	        							<tr>
	        								<td style="text-align: center;">加载中</td>
	        								<td style="text-align: center;">
	        									<span style="border-bottom:1px solid #b19d9d;line-height: 23px">201912178888</span><br/>小明
	        								</td>
	        								<td style="text-align: center;">小明</td>
	        								<td style="text-align: center;">小明</td>
	        								<td style="text-align: center;">800000</td>
	        								<td style="text-align: center;">李白</td>
	        								<td style="text-align: center;">韩信</td>
	        								<td style="text-align: center;">虞姬</td>
	        								<td style="text-align: center;">妲己</td>
	        								<td align="center">
	        									<div>
	        										<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i style="font-size: 22px;color: red" class="fa fa-flask"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-xiugai"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-woyaoxuzu"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-ziyuan"></i>
                                    				</a>&nbsp;&nbsp;
	        									</div>
	        								</td>
	        							</tr>
	        							<tr>
	        								<td style="text-align: center;">加载中</td>
	        								<td style="text-align: center;">
	        									<span style="border-bottom:1px solid #b19d9d;line-height: 23px">201912178888</span><br/>小明
	        								</td>
	        								<td style="text-align: center;">小明</td>
	        								<td style="text-align: center;">小明</td>
	        								<td style="text-align: center;">800000</td>
	        								<td style="text-align: center;">李白</td>
	        								<td style="text-align: center;">韩信</td>
	        								<td style="text-align: center;">虞姬</td>
	        								<td style="text-align: center;">妲己</td>
	        								<td align="center">
	        									<div>
	        										<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i style="font-size: 22px;color: red" class="fa fa-flask"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-xiugai"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-woyaoxuzu"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-ziyuan"></i>
                                    				</a>&nbsp;&nbsp;
	        									</div>
	        								</td>
	        							</tr>
	        							<tr>
	        								<td style="text-align: center;">加载中</td>
	        								<td style="text-align: center;">
	        									<span style="border-bottom:1px solid #b19d9d;line-height: 23px">201912178888</span><br/>小明
	        								</td>
	        								<td style="text-align: center;">小明</td>
	        								<td style="text-align: center;">小明</td>
	        								<td style="text-align: center;">800000</td>
	        								<td style="text-align: center;">李白</td>
	        								<td style="text-align: center;">韩信</td>
	        								<td style="text-align: center;">虞姬</td>
	        								<td style="text-align: center;">妲己</td>
	        								<td align="center">
	        									<div>
	        										<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i style="font-size: 22px;color: red" class="fa fa-flask"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-xiugai"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-woyaoxuzu"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-ziyuan"></i>
                                    				</a>&nbsp;&nbsp;
	        									</div>
	        								</td>
	        							</tr>
	        							<tr>
	        								<td style="text-align: center;">加载中</td>
	        								<td style="text-align: center;">
	        									<span style="border-bottom:1px solid #b19d9d;line-height: 23px">201912178888</span><br/>小明
	        								</td>
	        								<td style="text-align: center;">小明</td>
	        								<td style="text-align: center;">小明</td>
	        								<td style="text-align: center;">800000</td>
	        								<td style="text-align: center;">李白</td>
	        								<td style="text-align: center;">韩信</td>
	        								<td style="text-align: center;">虞姬</td>
	        								<td style="text-align: center;">妲己</td>
	        								<td align="center">
	        									<div>
	        										<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i style="font-size: 22px;color: red" class="fa fa-flask"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-xiugai"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-woyaoxuzu"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-ziyuan"></i>
                                    				</a>&nbsp;&nbsp;
	        									</div>
	        								</td>
	        							</tr>
	        							<tr>
	        								<td style="text-align: center;">加载中</td>
	        								<td style="text-align: center;">
	        									<span style="border-bottom:1px solid #b19d9d;line-height: 23px">201912178888</span><br/>小明
	        								</td>
	        								<td style="text-align: center;">小明</td>
	        								<td style="text-align: center;">小明</td>
	        								<td style="text-align: center;">800000</td>
	        								<td style="text-align: center;">李白</td>
	        								<td style="text-align: center;">韩信</td>
	        								<td style="text-align: center;">虞姬</td>
	        								<td style="text-align: center;">妲己</td>
	        								<td align="center">
	        									<div>
	        										<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i style="font-size: 22px;color: red" class="fa fa-flask"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-xiugai"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-woyaoxuzu"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-ziyuan"></i>
                                    				</a>&nbsp;&nbsp;
	        									</div>
	        								</td>
	        							</tr>
	        							<tr>
	        								<td style="text-align: center;">加载中</td>
	        								<td style="text-align: center;">
	        									<span style="border-bottom:1px solid #b19d9d;line-height: 23px">201912178888</span><br/>小明
	        								</td>
	        								<td style="text-align: center;">小明</td>
	        								<td style="text-align: center;">小明</td>
	        								<td style="text-align: center;">800000</td>
	        								<td style="text-align: center;">李白</td>
	        								<td style="text-align: center;">韩信</td>
	        								<td style="text-align: center;">虞姬</td>
	        								<td style="text-align: center;">妲己</td>
	        								<td align="center">
	        									<div>
	        										<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i style="font-size: 22px;color: red" class="fa fa-flask"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-xiugai"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-woyaoxuzu"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-ziyuan"></i>
                                    				</a>&nbsp;&nbsp;
	        									</div>
	        								</td>
	        							</tr>
	        							<tr>
	        								<td style="text-align: center;">加载中</td>
	        								<td style="text-align: center;">
	        									<span style="border-bottom:1px solid #b19d9d;line-height: 23px">201912178888</span><br/>小明
	        								</td>
	        								<td style="text-align: center;">小明</td>
	        								<td style="text-align: center;">小明</td>
	        								<td style="text-align: center;">800000</td>
	        								<td style="text-align: center;">李白</td>
	        								<td style="text-align: center;">韩信</td>
	        								<td style="text-align: center;">虞姬</td>
	        								<td style="text-align: center;">妲己</td>
	        								<td align="center">
	        									<div>
	        										<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i style="font-size: 22px;color: red" class="fa fa-flask"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-xiugai"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-woyaoxuzu"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-ziyuan"></i>
                                    				</a>&nbsp;&nbsp;
	        									</div>
	        								</td>
	        							</tr>
	        							<tr>
	        								<td style="text-align: center;">加载中</td>
	        								<td style="text-align: center;">
	        									<span style="border-bottom:1px solid #b19d9d;line-height: 23px">201912178888</span><br/>小明
	        								</td>
	        								<td style="text-align: center;">小明</td>
	        								<td style="text-align: center;">小明</td>
	        								<td style="text-align: center;">800000</td>
	        								<td style="text-align: center;">李白</td>
	        								<td style="text-align: center;">韩信</td>
	        								<td style="text-align: center;">虞姬</td>
	        								<td style="text-align: center;">妲己</td>
	        								<td align="center">
	        									<div>
	        										<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i style="font-size: 22px;color: red" class="fa fa-flask"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-xiugai"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-woyaoxuzu"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-ziyuan"></i>
                                    				</a>&nbsp;&nbsp;
	        									</div>
	        								</td>
	        							</tr>
	        							<tr>
	        								<td style="text-align: center;">加载中</td>
	        								<td style="text-align: center;">
	        									<span style="border-bottom:1px solid #b19d9d;line-height: 23px">201912178888</span><br/>小明
	        								</td>
	        								<td style="text-align: center;">小明</td>
	        								<td style="text-align: center;">小明</td>
	        								<td style="text-align: center;">800000</td>
	        								<td style="text-align: center;">李白</td>
	        								<td style="text-align: center;">韩信</td>
	        								<td style="text-align: center;">虞姬</td>
	        								<td style="text-align: center;">妲己</td>
	        								<td align="center">
	        									<div>
	        										<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i style="font-size: 22px;color: red" class="fa fa-flask"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-xiugai"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-woyaoxuzu"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="" style="color:#CC6600" target="_blank">
                                        				<i class="iconfont icon-ziyuan"></i>
                                    				</a>&nbsp;&nbsp;
	        									</div>
	        								</td>
	        							</tr>
	        						</tbody>
	        					</table>
	        					<div class="row">
	        						<div class="col-lg-6">
	                                    <div class="pull-left" style="margin-top:15px">
	                                        <p>
	                                            显示 <?php echo ($_smarty_tpl->getVariable('p')->value-1)*10+1;?>
 到 <?php echo $_smarty_tpl->getVariable('p')->value*10;?>
 项，共 <?php echo $_smarty_tpl->getVariable('total')->value;?>
 项
	                                        </p>
	                                    </div>
	                                </div>
	                                <div class="col-lg-6">
	                                    <div class="pull-right">
	                                        <ul class="pagination">
	                                            <?php echo $_smarty_tpl->getVariable('PAGINATION')->value;?>

	                                        </ul>
	                                    </div>
	                                </div>
	        					</div>
	        				</div>
	        			</div>
	        		</div>
	        	</div>
	        </div>
		</div>
	</div>
	<script src="../../../crm/js/bootstrap.min.js?v=3.3.6"></script>
	<script>
		$("#up").click(function(){
	       var content=$("#content").css('display');
	       	if(content=="none"){   
		        $("#content").css('display','block');
		        $('#up').removeClass("fa-chevron-down");
		        $('#up').addClass("fa-chevron-up");
	        }else{
		        $("#content").css('display','none');
		        $('#up').removeClass("fa-chevron-up");
		        $('#up').addClass("fa-chevron-down");
	        }
	    });


	    function demo(){
            demo_iframe('index.php?task=demo','demo',1000,500,'login_js');
        }

        function delete_a(){
        	swal(
                {title:"您确定删除？",
                      text:"",
                      type:"warning",
                      showCancelButton:true,
                      confirmButtonColor:"#DD6B55",
                      confirmButtonText:"确定",
                      cancelButtonText:"取消",
                      closeOnConfirm:false,
                      closeOnCancel:false},
                      function(isConfirm){
                        if(isConfirm){
                            window.location.href = "index.php?task=fk_delete&id="+id;
                        }else{
                            swal("已取消",
                                 "您取消了切换操作！","error"
                            )
                        }
                    }
                )
        }
	</script>
</body>
</html>