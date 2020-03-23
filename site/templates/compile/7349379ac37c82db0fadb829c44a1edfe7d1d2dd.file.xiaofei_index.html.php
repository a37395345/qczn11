<?php /* Smarty version Smarty-3.0.4, created on 2019-10-29 10:00:45
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/jucan/xiaofei_index.html" */ ?>
<?php /*%%SmartyHeaderCode:266655db79d4d8f2d82-85487374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7349379ac37c82db0fadb829c44a1edfe7d1d2dd' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/jucan/xiaofei_index.html',
      1 => 1571707177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '266655db79d4d8f2d82-85487374',
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>H+ 后台主题UI框架 - Bootstrap Table</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="../../../crm/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="../../../crm/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="../../../crm/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
    <link href="../../../crm/css/animate.min.css" rel="stylesheet">
    <link href="../../../crm/css/style.min862f.css?v=4.1.0" rel="stylesheet">
    
	<link href="../../../crm/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
	<script src="../../../crm/js/plugins/sweetalert/sweetalert.min.js"></script>
<script type="text/javascript">
        function isDel(id) {
            swal(
                {title:"您确定要删除这条信息吗",
                      text:"删除后将无法恢复，请谨慎操作！",
                      type:"warning",
                      showCancelButton:true,
                      confirmButtonColor:"#DD6B55",
                      confirmButtonText:"确定",
                      cancelButtonText:"取消",
                      closeOnConfirm:false,
                      closeOnCancel:false},
                      function(isConfirm){
                        if(isConfirm){

                            window.location.href = "xiaofei_index.php?task=xiaofei_delete&id="+id;
                        }else{
                            swal("已取消",
                                 "您取消了删除操作！","error"
                            )
                        }
                    }
                )
        };
    </script>

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        
        <!-- Panel Other -->
        <div class="ibox float-e-margins">
            <div class="ibox-title" style="    padding-top: 5px">
                <h5 style="padding-top: 10px"">消费管理</h5>
                

                <div class="ibox-tools">
                    <a class="btn btn-outline btn-default" href="index.php?task=xiaofei_add">
                        <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                        添加消费
                    </a>
                </div>
                
               
                <h5 style="padding-top: 10px; padding-left: 20px;">搜索
                        </h5>

                        <div class="ibox-tools" style="padding-top: 8px; padding-left: 5px;float: left;">
                            <a class="collapse-link">
                            <i class="fa fa-chevron-down" id="up"></i>
                            </a>
                        </div>
                
            </div>




            <div class="ibox-content" style="display: none">
                <form id="form1" action="xiaofei_index.php" method="get">
                <div class="row row-lg">
                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="example-wrap">
                            <div class="example">
                                                                
                                <table class="table table-bordered">
                        <tr>
                            
                            <th width="15%" style="background-color:#F5F5F6">
                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;开始时间:</span>
                            </th>
                            <td width="35%">
                                <input name="s_time" placeholder="请输入日期" value="" class="laydate-icon form-control input-sm" onclick="laydate({istime: true, format: 'YYYY-MM-DD'})">
                            </td>
                            <th width="15%" style="background-color:#F5F5F6">
                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;结束时间:</span>
                            </th>
                            <td width="35%">
                                <input name="e_time" placeholder="请输入日期" value="" class="laydate-icon form-control input-sm" onclick="laydate({istime: true, format: 'YYYY-MM-DD'})">
                            </td>
                        </tr>
                    </table>
                    <input type="submit" id="submit" class="btn btn-outline btn-default" value="提交" style="width: 10%;margin-left: 45%;display: block;">
                            </div>
                        </div>
                        <!-- End Example Events -->
                    </div>
                </div>

                </form>
             </div>





             
            <div class="ibox-content_a">
                <div class="row row-lg">
                    

                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="example-wrap">
                            <div class="example">
								
                                <table class="table table-bordered table-hover" 
								       data-height="400"
									   style="margin-bottom:0px"
									   data-mobile-responsive="true">
                                    <thead>
                                        <tr>
                                            <th>序号</th>
                                           
                                            <th>消费金额</th>
                                            <th>备注</th>
                                            <th>添加时间</th>
											<th>操作人</th>
											<th>
												<div align="center">操作</div>
											</th>
                                        </tr>
                                    </thead>
									<tbody>
                                        <?php $_smarty_tpl->tpl_vars['money_b'] = new Smarty_variable(0, null, null);?>
										 <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                        
										<tr>

											<td><?php echo (isset($_smarty_tpl->tpl_vars['i']->value) ? $_smarty_tpl->tpl_vars['i']->value : null)+1;?>
</td>
                                           
											<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['money']) ? $_smarty_tpl->tpl_vars['rows']->value['money'] : null);?>
</td>
                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shuoming']) ? $_smarty_tpl->tpl_vars['rows']->value['shuoming'] : null);?>
</td>
											<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['addtime']) ? $_smarty_tpl->tpl_vars['rows']->value['addtime'] : null);?>
</td>
											
											<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_name']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_name'] : null);?>
</td>
											
											<td align="center">
												<div>
													<a href="xiaofei_index.php?task=xiaofei_add&id=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" title="修改">
														<i class="glyphicon glyphicon-pencil" aria-hidden="true"></i>
													</a>
													
													&nbsp;&nbsp;
													<a onclick="isDel(<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
);" title="删除" style="color:#CC0000">
														<i class="glyphicon glyphicon-remove" aria-hidden="true"></i>
													</a>
												</div>
											</td>
										</tr>
                                         <?php $_smarty_tpl->tpl_vars['money_b'] = new Smarty_variable($_smarty_tpl->getVariable('money_b')->value+(isset($_smarty_tpl->tpl_vars['rows']->value['money']) ? $_smarty_tpl->tpl_vars['rows']->value['money'] : null), null, null);?>
										<?php }} ?>
                                        <tr>
                                            <td colspan="6"> 合计：<?php echo $_smarty_tpl->getVariable('money_b')->value;?>
</td>
                                           
                                        </tr>
									</tbody>
                                </table>
								
								
                            </div>
                        </div>
                        <!-- End Example Events -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Panel Other -->
    </div>
	
    <script src="../../../crm/js/jquery.min.js?v=2.1.4"></script>
    <script src="../../../crm/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="../../../crm/js/content.min.js?v=1.0.0"></script>
    <script src="../../../crm/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
    <script src="../../../crm/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
    <script src="../../../crm/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
    <script src="../../../crm/js/demo/bootstrap-table-demo.min.js"></script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>

</body>


<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->
</html>
