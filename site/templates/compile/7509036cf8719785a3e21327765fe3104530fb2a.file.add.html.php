<?php /* Smarty version Smarty-3.0.4, created on 2019-08-19 17:04:27
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/gongzuofu/add.html" */ ?>
<?php /*%%SmartyHeaderCode:118985d5a661b26ba40-13456337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7509036cf8719785a3e21327765fe3104530fb2a' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/gongzuofu/add.html',
      1 => 1566205318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118985d5a661b26ba40-13456337',
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
                <h5>添加工具</h5>
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
                                <span style="color:#000">工具名称：</span>
                            </th>
                            <td width="35%">
                               <input type="text" id="name" name="name" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['name']) ? $_smarty_tpl->getVariable('data')->value['name'] : null);?>
" class="form-control input-sm" placeholder="">
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">应收押金：</span>
                            </th>
                            <td width="35%">
                               <input type="text" id="jiawei" name="jiawei" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['jiawei']) ? $_smarty_tpl->getVariable('data')->value['jiawei'] : null);?>
" class="form-control input-sm" placeholder="">
                            </td>
						</tr>
						
						
						
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
    
</body>
    <script type="text/javascript">
        $("#submit").click(function(){
            var name=$('#name').val();
            if(name==""){
                alert('请填写工具名称');
                return false;
            }

            var jiawei=parseInt($('#jiawei').val());
            if(!(jiawei>0)){
                alert('请填写应收押金');
                return false;
            }
        });
    </script>

<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->
</html>
