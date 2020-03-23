<?php /* Smarty version Smarty-3.0.4, created on 2019-08-09 09:32:33
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/jucan/add.html" */ ?>
<?php /*%%SmartyHeaderCode:156445d4ccd31d03537-37639431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b5c11ebe203140eca2eccd6001d4dcb8f644869' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/jucan/add.html',
      1 => 1565314288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156445d4ccd31d03537-37639431',
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
    <script type="text/javascript" src="../../../js/jquery.js"></script>

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        
        <!-- Panel Other -->
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>添加项目</h5>
                <div class="ibox-tools">
                   
                </div>
            </div>
            <form method="post" action="index.php?task=insert" name="form1">
            <div class="ibox-content">
                <div class="row row-lg">
                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="example-wrap">
                            <div class="example">
								                                
								<table class="table table-bordered">
						<tr>
							
							<th style="background-color:#F5F5F6" width="15%">
								<span style="color:#000">项目名称</span>
							</th>
							<td width="35%">
								<select class="form-control input-sm" id="xiangmu_id" name="xiangmu_id">
                                            <option value="0">请选择</option>
                                <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('xiangmu_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                            <option <?php if ((isset($_smarty_tpl->getVariable('data')->value['xiangmu_id']) ? $_smarty_tpl->getVariable('data')->value['xiangmu_id'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null)){?>selected<?php }?> value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
">
                                                <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['name']) ? $_smarty_tpl->tpl_vars['rows']->value['name'] : null);?>

                                            </option>
                                 <?php }} ?>
                                </select>
							</td>

							<th style="background-color:#F5F5F6" width="15%">
								<span style="color:#000">金额</span>
							</th>
							<td width="35%">
								<input type="text" id="money" name="money" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['money']) ? $_smarty_tpl->getVariable('data')->value['money'] : null);?>
" class="form-control input-sm" placeholder="金额">
							</td>
                            </tr>

                             <tr>

                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">投资人</span>
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

                             


                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">备注</span>
                            </th>
                            <td width="35%">
                               <input type="text" id="shuoming" name="shuoming" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['shuoming']) ? $_smarty_tpl->getVariable('data')->value['shuoming'] : null);?>
" class="form-control input-sm" placeholder="备注">
                            </td>
						</tr>
						<script>
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
						
						
					</table>
					<input type="hidden" name="id" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['id']) ? $_smarty_tpl->getVariable('data')->value['id'] : null);?>
" />
					<input type="submit" id="submit" class="btn btn-outline btn-default" value="提交" style="width: 10%;margin-left: 45%;display: block;">
					
				
								
                            </div>
                        </div>
                        <!-- End Example Events -->
                    </div>
                </div>
            </div>
        	</form>
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
    <script type="text/javascript">
        
        $("#submit").click(function(){
            if($("#xiangmu_id").val()==0){
                alert('项目不能为空');
                return false;
            }
            if($("#money").val()==""||parseInt($("#money").val())<=0){
                alert('金额不能为空');
                return false;
            }
            if($("#emp_id").val()==0){
                alert('投资人不能为空');
                return false;
            }
        });
    </script>
</body>
    

<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->
</html>
