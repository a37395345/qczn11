<?php /* Smarty version Smarty-3.0.4, created on 2019-10-16 19:42:26
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/kehu/xiangxi.html" */ ?>
<?php /*%%SmartyHeaderCode:8625855835da7022215adb9-97835057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '773e59b5ac7e802ef7ac74df2ad5fda1b4bb7e79' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/kehu/xiangxi.html',
      1 => 1571215301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8625855835da7022215adb9-97835057',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <title>客户详细资料</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="../../../crm1/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="../../../crm1/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="../../../crm1/css/animate.css" rel="stylesheet">
    <link href="../../../crm1/css/style.css?v=4.1.0" rel="stylesheet">
    <style type="text/css">
      th{
        text-align: center;
        }
        td{
        text-align: center;
        }
    </style>
</head>
<body class="gray-bg">
    <div class="row">
        <div class="col-sm-12">
            <div class="wrapper wrapper-content animated fadeInUp">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="m-b-md">
                                    <h2>客户详细资料 &nbsp;&nbsp;&nbsp;<?php echo (isset($_smarty_tpl->getVariable('data')->value['paiche_linker']) ? $_smarty_tpl->getVariable('data')->value['paiche_linker'] : null);?>
</h2>
                                </div>
                                <dl class="dl-horizontal">
                                    <dt>身份证号码：</dt>
                                    <dd>
                                        <?php echo (isset($_smarty_tpl->getVariable('data')->value['paiche_linkerNum']) ? $_smarty_tpl->getVariable('data')->value['paiche_linkerNum'] : null);?>

                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                
                                <dl class="dl-horizontal">
                                    
                        
                                </dl>
                            </div>
                            <div class="col-sm-7" id="cluster_info">
                                <dl class="dl-horizontal">
                                   
                               
                                </dl>
                            </div>
                        </div>
                        
                        <div class="row m-t-sm">
                            <div class="col-sm-12">
                                <div class="panel blank-panel">
                                    <div class="panel-heading">
                                        <div class="panel-options">
                                            <ul class="nav nav-tabs">
                                                <li><a href="project_detail.html#tab-1" data-toggle="tab"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">

                                        <div class="tab-content">

                                            <div class="tab-pane active" id="tab-1">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>租车合同号</th>
                                                            <th>开始用车时间</th>
                                                            <th>结束用车时间</th>
                                                            <th>活动名称</th>
                                                            <th>订单来源</th>
                                                            <th>身份验证方式</th>
                                                            <th>联系电话</th>
                                                            <th>联系地址</th>
                                                            <th>订单详细</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                       <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
                                                       <tr>
                                                         <td>
                                                           <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_contractNum'] : null);?>

                                                         </td>
                                                         <td>
                                                           <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_startDate'] : null);?>

                                                         </td>
                                                         <td>
                                                           <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_endDate']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_endDate'] : null);?>

                                                         </td>
                                                         <td>
                                                           <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['huodong']) ? $_smarty_tpl->tpl_vars['row']->value['huodong'] : null);?>

                                                         </td>
                                                         <td>
                                                           <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null)==''){?>
                                                              临时散客
                                                           <?php }else{ ?>
                                                              <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>

                                                           <?php }?>
                                                         </td>
                                                         <td>
                                                           <?php if ((isset($_smarty_tpl->tpl_vars['row']->value['paiche_stype']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_stype'] : null)==1){?>
                                                           手动输入
                                                           <?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['paiche_stype']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_stype'] : null)==2){?>
                                                            刷身份证验证
                                                           <?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['paiche_stype']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_stype'] : null)==3){?>
                                                           老客户短信验证
                                                           <?php }elseif((isset($_smarty_tpl->tpl_vars['row']->value['paiche_stype']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_stype'] : null)==4){?>
                                                           新客户人脸验证
                                                           <?php }?>
                                                         </td>
                                                         <td>
                                                            <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linkerPhone']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linkerPhone'] : null);?>

                                                         </td>
                                                         <td>
                                                            <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_linkerAdd']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_linkerAdd'] : null);?>

                                                         </td>
                                                         <td >
                                                            <?php if ($_smarty_tpl->getVariable('zijia_detail')->value==1){?>
                                                            <a href="/site/operator/zijia_linshi/zijia_detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['row']->value['paiche_id'] : null);?>
" target="_blank">明细</a>
                                                            <?php }else{ ?>
                                                            详细
                                                            <?php }?>
                                                         </td>
                                                       </tr>
                                                       <?php }} ?>
                                                    </tbody>
                                                  </table>

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
        
    </div>

    <!-- 全局js -->
    <script src="../../../crm1/js/jquery.min.js?v=2.1.4"></script>
    <script src="../../../crm1/js/bootstrap.min.js?v=3.3.6"></script>



    


    <script>
        $(document).ready(function () {

            $('#loading-example-btn').click(function () {
                btn = $(this);
                simpleLoad(btn, true)

                // Ajax example
                //                $.ajax().always(function () {
                //                    simpleLoad($(this), false)
                //                });

                simpleLoad(btn, false)
            });
        });

        function simpleLoad(btn, state) {
            if (state) {
                btn.children().addClass('fa-spin');
                btn.contents().last().replaceWith(" Loading");
            } else {
                setTimeout(function () {
                    btn.children().removeClass('fa-spin');
                    btn.contents().last().replaceWith(" Refresh");
                }, 2000);
            }
        }
    </script>

    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
    <!--统计代码，可删除-->

</body>

</html>
