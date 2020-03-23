<?php /* Smarty version Smarty-3.0.4, created on 2020-01-04 17:19:17
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/gongzuofu/tongji_list.html" */ ?>
<?php /*%%SmartyHeaderCode:52375e1058951ba555-46586312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2ca8f0caf3c65d417b3d56d43c40e21b2aa8a8b' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/gongzuofu/tongji_list.html',
      1 => 1578129483,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52375e1058951ba555-46586312',
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

                            window.location.href = "index.php?task=tongji_delete&id="+id;
                        }else{
                            swal("已取消",
                                 "您取消了删除操作！","error"
                            )
                        }
                    }
                )
        };
    </script>
<style>
        @media(max-width: 950px){
            .ibox-tools{
                float: right;
            }
        }
    </style>
</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        
        <!-- Panel Other -->
        <div class="ibox float-e-margins">
            <div class="ibox-title" style="    padding-top: 5px">
                <h5 style="padding-top: 10px"">工具管理</h5>
               <div class="ibox-tools">
                    <a class="btn btn-outline btn-default" href="index.php?task=tongji_add&jisuan=0">
                        <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                        公司采购
                    </a>
                </div>
                <div class="ibox-tools">
                    <a class="btn btn-outline btn-default" href="index.php?task=tongji_add&jisuan=1">
                        <i class="glyphicon glyphicon-plus" aria-hidden="true"></i>
                        员工领取
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
                <form id="form1" action="tongji_list.php" method="get">
                <div class="row row-lg">
                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="example-wrap">
                            <div class="example">
                                                                
                                <table class="table table-bordered">
                        <tr>
                            
                            <th width="15%" style="background-color:#F5F5F6">
                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;员工姓名:</span>
                            </th>
                            <td width="35%">
                                <select class="form-control input-sm" id="emp_id" name="emp_id" style="float: left;width: 35%">
                                            <option value="0">请选择</option>
                                <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('emp_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                            <option <?php if ((isset($_smarty_tpl->getVariable('data')->value['emp_id']) ? $_smarty_tpl->getVariable('data')->value['emp_id'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['emp_id']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_id'] : null)){?>selected<?php }?> value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_id']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_id'] : null);?>
">
                                  <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_name']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_name'] : null);?>

                                            </option>
                                 <?php }} ?>
                                </select>

                                <input type="text" class="form-control input-sm"  style="float: left;width: 25%;margin-left:20px" id="name1" placeholder="关键字">

                                <input type="button" name="" value="点击" style="display: block;float: left;width:15% ;margin-left:20px" id="bt1" >
                            </td>

                            <th width="15%" style="background-color:#F5F5F6">
                                <span style="color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;工具名称:</span>
                            </th>
                            <td width="35%">
                                <select class="form-control input-sm" id="gongzuofu_id" name="gongzuofu_id">
                                            <option value="0">请选择</option>
                                <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('gongzuofu_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                            <option <?php if ((isset($_smarty_tpl->getVariable('data')->value['gongzuofu_id']) ? $_smarty_tpl->getVariable('data')->value['gongzuofu_id'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null)){?>selected<?php }?> value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
">
                                                <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['name']) ? $_smarty_tpl->tpl_vars['rows']->value['name'] : null);?>

                                            </option>
                                 <?php }} ?>
                                </select>
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
                                            <th>工具名称</th>
                                            <th>操作名称</th>
                                            <th>出库数量</th>
                                            <th>入库数量</th>
                                            <th>职员姓名</th>
                                            <th>收入</th>
                                            <th>支出</th>

                                            <th>备注</th>
                                            <th>办理时间</th>
                                            <th>退还时间</th>
											<th>经办人</th>
											<th>
												<div align="center">操作</div>
											</th>
                                        </tr>
                                    </thead>
									<tbody>
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
											<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['name']) ? $_smarty_tpl->tpl_vars['rows']->value['name'] : null);?>
</td>
                                            <td><?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['jisuan']) ? $_smarty_tpl->tpl_vars['rows']->value['jisuan'] : null)==0){?>公司采购<?php }elseif((isset($_smarty_tpl->tpl_vars['rows']->value['jisuan']) ? $_smarty_tpl->tpl_vars['rows']->value['jisuan'] : null)==1){?>员工领取<?php }else{ ?>已退还<?php }?></td>
                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shuliang']) ? $_smarty_tpl->tpl_vars['rows']->value['shuliang'] : null);?>
</td>
                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['sshuliang']) ? $_smarty_tpl->tpl_vars['rows']->value['sshuliang'] : null);?>
</td>
											<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_name']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_name'] : null);?>
</td>
											<td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['smoney']) ? $_smarty_tpl->tpl_vars['rows']->value['smoney'] : null);?>
</td>
                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emoney']) ? $_smarty_tpl->tpl_vars['rows']->value['emoney'] : null);?>
</td>

                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shuoming']) ? $_smarty_tpl->tpl_vars['rows']->value['shuoming'] : null);?>
</td>
                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['addtime']) ? $_smarty_tpl->tpl_vars['rows']->value['addtime'] : null);?>
</td>
                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['etime']) ? $_smarty_tpl->tpl_vars['rows']->value['etime'] : null);?>
</td>
                                            <td><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['addemp_name']) ? $_smarty_tpl->tpl_vars['rows']->value['addemp_name'] : null);?>
</td>
											
											<td align="center">
												<div>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['jisuan']) ? $_smarty_tpl->tpl_vars['rows']->value['jisuan'] : null)==1){?>
                                                    <a href="index.php?task=tongji_add&id=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
&jisuan=2" title="退还">
                                                        <i class="fa fa-hand-pointer-o"></i>
                                                    </a>
                                                    <?php }?>
                                                    &nbsp;&nbsp;
													<a href="index.php?task=tongji_add&id=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
&jisuan=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['jisuan']) ? $_smarty_tpl->tpl_vars['rows']->value['jisuan'] : null);?>
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
										<?php }} ?>
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
<script type="text/javascript">
    $("#bt1").click(function(){
                                   
                                    var name=$('#name1').val();
                                    $.ajax({
                                        type:'POST',
                                        url:"index.php?task=getsiji",
                                        data:{"name":name},
                                        success:function(result){
        
                                            $("#emp_id").find("option").remove();
                                            var list=JSON.parse (result);
                                            for(var i=0;i<list.length;i++){
                                                $("#emp_id").append("<option value='"+list[i]['emp_id']+"'>"+list[i]['emp_name']+"</option>");
                                            }
                                            
                                            
                                        }
                                    });
                                })
</script>

<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->
</html>
