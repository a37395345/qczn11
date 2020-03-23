<?php /* Smarty version Smarty-3.0.4, created on 2019-12-24 09:31:55
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/jinrongdiya/index.html" */ ?>
<?php /*%%SmartyHeaderCode:114975e016a8b18dda4-04638898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74c9801ef6b58bb98174df93264b0f4521656ce3' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/jinrongdiya/index.html',
      1 => 1577149321,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114975e016a8b18dda4-04638898',
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
	<title>gps开走</title>
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
			/*padding:1px!important;*/
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
	            <h5>gps开走</h5>
	        </div>
	        <from id="form1" action="index.php" method="get">
	        	<div class="wrapper wrapper-content animated fadeInRight" style="margin:0; padding: 0;">
	        		<div class="ibox float-e-margins" style="margin:0">
	        			<div class="ibox-title" style=" margin: 0; padding: 0;">
	        				<div class="ibox-tools" style="padding-top: 12px; padding-left: 10px;float: left">
	                            <span style="color:#000;">状态:</span>
	                        </div>
	                        <div class="ibox-tools" style="padding-top: 6px; padding-right: 20px;float: left">
                            <select class="form-control input-sm" name="search_status" id="search_status">
                                <option <?php if ($_smarty_tpl->getVariable('search_status')->value=="qb"){?>selected<?php }?> value="qb">全部</a></option>
                                <option <?php if ($_smarty_tpl->getVariable('search_status')->value=="ss"){?>selected<?php }?> value="ss">正在运行中</option>
                                <option <?php if ($_smarty_tpl->getVariable('search_status')->value=="yh"){?>selected<?php }?> value="yh">已接单未结账</option>
                                 <option <?php if ($_smarty_tpl->getVariable('search_status')->value=="yj"){?>selected<?php }?> value="yj">已结账</option>
                            </select>
                        </div>
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
	                                <a href="index.php?task=add" class="btn btn-outline btn-default" >
	                                <i style="padding-right: 4px;" class="glyphicon glyphicon-plus" aria-hidden="true"></i>新建业务
	                         
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
	        								<th style="text-align: center;width: 10%">用车时间</th>
	        								<th style="text-align: center;width: 6%">车辆</th>
	        								<th style="text-align: center;width: 22%">金额明细</th>
	        								<th style="width: 14%">
			                                    <div align="center">操作</div>
			                                </th>
	        							</tr>
	        						</thead>
	        						<tbody>
	        						<?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable(1, null, null);?>
	        						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
	        							<tr>
							<td style="text-align: center;color: <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['zhuangtai']) ? $_smarty_tpl->tpl_vars['row']->value['zhuangtai'] : null)=='运行中'){?>red<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['zhuangtai']) ? $_smarty_tpl->tpl_vars['row']->value['zhuangtai'] : null)=='已接单未结账'){?>#ff00f7<?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['zhuangtai']) ? $_smarty_tpl->tpl_vars['row']->value['zhuangtai'] : null)=='已结账'){?>#0bea3b

                <?php }?>;">
                    <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['zhuangtai']) ? $_smarty_tpl->tpl_vars['row']->value['zhuangtai'] : null);?>

                </td>
	        								<td style="text-align: center;">
	        									<span style="border-bottom:1px solid #b19d9d;line-height: 23px"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_contractNum'] : null);?>
</span><br/><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['client_name']) ? $_smarty_tpl->tpl_vars['row']->value['client_name'] : null);?>

	        								</td>
	        								<td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linker']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linker'] : null);?>
(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linkerPhone']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linkerPhone'] : null);?>
)</td>
	        								<td style="text-align: center;"><span style="border-bottom:1px solid #b19d9d;line-height: 23px"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['ywshopname']) ? $_smarty_tpl->tpl_vars['row']->value['ywshopname'] : null);?>

                                    </span><br/><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['yewuyuan']) ? $_smarty_tpl->tpl_vars['row']->value['yewuyuan'] : null);?>
</td>
	        								<td style="text-align: center;"><span style="border-bottom:1px solid #b19d9d;line-height: 23px"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_startDate'] : null);?>

                                    </span><br/><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_endDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_endDate'] : null);?>
</td>
	        								<td style="text-align: center;"><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
</td>
	        								<td style="text-align:left;">
                                    <?php $_smarty_tpl->tpl_vars['z_yingshou'] = new Smarty_variable(0, null, null);?>
                                    <?php $_smarty_tpl->tpl_vars['z_yingshou_a'] = new Smarty_variable(0, null, null);?>
            <?php $_smarty_tpl->tpl_vars['yinshou'] = new Smarty_variable(0, null, null);?><?php $_smarty_tpl->tpl_vars['yishou'] = new Smarty_variable(0, null, null);?>
        <?php  $_smarty_tpl->tpl_vars['row2'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['row']->value['paiche_chargelist']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_chargelist'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row2']->key => $_smarty_tpl->tpl_vars['row2']->value){
?>
        <?php if ((isset($_smarty_tpl->tpl_vars['row2']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row2']->value['charge_name'] : null)=='押金'){?>
            <span style="border-bottom:1px solid #b19d9d;line-height: 23px">
                <?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row2']->value['charge_name'] : null);?>
:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row2']->value['conv_money'] : null);?>
元-已收:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_in_money'] : null);?>
元-已冻结:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['have_freeze_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_freeze_money'] : null);?>
元<?php if ((isset($_smarty_tpl->tpl_vars['row2']->value['back_money']) ? $_smarty_tpl->tpl_vars['row2']->value['back_money'] : null)!=0){?>-已退:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_back_money'] : null);?>
元<?php }?><br/><br/>
            </span>
         <?php }else{ ?>
            <?php $_smarty_tpl->tpl_vars['yinshou'] = new Smarty_variable($_smarty_tpl->getVariable('yinshou')->value+(isset($_smarty_tpl->tpl_vars['row2']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row2']->value['conv_money'] : null), null, null);?><?php $_smarty_tpl->tpl_vars['yishou'] = new Smarty_variable($_smarty_tpl->getVariable('yishou')->value+(isset($_smarty_tpl->tpl_vars['row2']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_in_money'] : null), null, null);?>
            <span style="border-bottom:1px solid #b19d9d;line-height: 23px">
                <?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row2']->value['charge_name'] : null);?>
:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row2']->value['conv_money'] : null);?>
元 &nbsp;&nbsp;已收:<?php echo (isset($_smarty_tpl->tpl_vars['row2']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row2']->value['have_in_money'] : null);?>
元<br/>
            </span>
        <?php }?>

        <?php }} ?>

       

        
        <br/>


        
                                </td>
	        								<td align="center">
	        									<div>
	        										<a href="javascript:;" onclick="edit(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);return false" title="修改" style="color:#CC6600">
                                        				<i class="iconfont icon-xiugai"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="qitamoney(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);return false" title="增加其他费用" style="color:#CC6600">
                                        				<i class="iconfont icon-qitafeiyong"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="delete_a(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);return false" title="删除" style="color:#CC6600">
                                        				<i class="iconfont icon-shanchu"></i>
                                    				</a>
                                    				<hr/>
                                    				&nbsp;&nbsp;
	        										<a href="javascript:;" onclick="huanche(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);return false" title="还车" style="color:#CC6600">
                                        				<i class="iconfont icon-yihuanche"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="" title="打印" style="color:#CC6600">
                                        				<i class="iconfont icon-dayin"></i>
                                    				</a>&nbsp;&nbsp;
                                    				<a href="javascript:;" onclick="discount(<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
);return false" title="优惠" style="color:#CC6600">
                                        				<i class="iconfont icon-youhui"></i>
                                    				</a>&nbsp;&nbsp;
	        									</div>
	        								</td>
	        							</tr>
	        							<input type="hidden"  value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" class="pid">
	        							<?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->getVariable('index')->value+1, null, null);?>
	        							<?php }} ?>
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

	    $("#search_status").change(function(){
	        window.location.href = "index.php?search_status="+$("#search_status").val();
	    });


	    function edit(pid){
            demo_iframe('index.php?task=edit&pid='+pid,'修改业务',1000,500,'login_js');
        }
        function discount(pid){
	        demo_iframe('index.php?task=discount&pid='+pid,'添加优惠',1000,500,'login_js');
	    }
	    function huanche(pid){
	        demo_iframe('index.php?task=huanche&pid='+pid,'还车',1000,500,'login_js');
	    }
	    function qitamoney(pid){
	        demo_iframe('index.php?task=qitamoney&pid='+pid,'增加其他费用',1000,500,'login_js');
	    }


         function delete_a(id) {
            swal(
                {title:"您确定切换启用？",
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
                            window.location.href = "index.php?task=delete&pid="+id;
                        }else{
                            swal("已取消",
                                 "您取消了切换操作！","error"
                            )
                        }
                    }
                )
        };
</script>
	</script>
</body>
</html>