<?php /* Smarty version Smarty-3.0.4, created on 2019-09-30 13:56:03
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/jucan/xiaofei_add.html" */ ?>
<?php /*%%SmartyHeaderCode:6327655075d9198f39a8ad4-56502386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '748924d34a936d3b870c5ca30ed0e7d93c80ba98' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/jucan/xiaofei_add.html',
      1 => 1569749224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6327655075d9198f39a8ad4-56502386',
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
            <form method="post" action="xiaofei_index.php?task=xiaofei_insert" name="form1">
            <div class="ibox-content">
                <div class="row row-lg">
                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="example-wrap">
                            <div class="example">
								                                
								<table class="table table-bordered">
						<tr>
							
							<th style="background-color:#F5F5F6" width="15%">
								<span style="color:#000">消费金额</span>
							</th>
							<td width="35%">
								<input type="text" id="money" name="money" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['money']) ? $_smarty_tpl->getVariable('data')->value['money'] : null);?>
" class="form-control input-sm" placeholder="消费金额">
							</td>
							<th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">备注</span>
                            </th>
                            <td width="35%">
                                <input type="text" id="shuoming" name="shuoming" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['shuoming']) ? $_smarty_tpl->getVariable('data')->value['shuoming'] : null);?>
" class="form-control input-sm" placeholder="备注">
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
            var money=$("#money").val();
            
            if(parseInt(money)<=0||money==""){
                alert('金额不能为空');
                return false;
            }
            if($("#shop_id").val()==0){
                alert('部门不能为空');
                return false;
            }
            
           
        });
    </script>
</body>


<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->
</html>
