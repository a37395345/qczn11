<?php /* Smarty version Smarty-3.0.4, created on 2019-06-25 15:12:38
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/jucan/xiangmu_add.html" */ ?>
<?php /*%%SmartyHeaderCode:80495d11c9669a8bf4-97775796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d0a837eb8232ea6bba55ceeb2587bece90ce312' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/jucan/xiangmu_add.html',
      1 => 1561446752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80495d11c9669a8bf4-97775796',
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
            <form method="post" action="xiangmu_index.php?task=xiangmu_insert" name="form1">
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
								<input type="text" id="name" name="name" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['name']) ? $_smarty_tpl->getVariable('data')->value['name'] : null);?>
" class="form-control input-sm" placeholder="项目名称">
							</td>
							<th style="background-color:#F5F5F6" width="15%">
								<span style="color:#000"></span>
							</th>
							<td width="35%">
								
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
    <script type="text/javascript">
        
        $("#submit").click(function(){
            if($("#name").val()==""){
                alert('项目名称不能为空');
                return false;
            }
        });
    </script>
</body>


<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->
</html>
