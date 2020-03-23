<?php /* Smarty version Smarty-3.0.4, created on 2020-01-04 15:00:41
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/emp/xiangxi.html" */ ?>
<?php /*%%SmartyHeaderCode:83135e1038199a1682-18815156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0577f4c18afeb571262cfec12a88b56f167694d' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/emp/xiangxi.html',
      1 => 1578121191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83135e1038199a1682-18815156',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>

<head>


    <meta charset="utf-8">
    <title>员工详细资料</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="../../../crm1/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="../../../crm1/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="../../../crm1/css/animate.css" rel="stylesheet">
    <link href="../../../crm1/css/style.css?v=4.1.0" rel="stylesheet">

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
                                    <h2>员工详细资料 &nbsp;&nbsp;&nbsp;<?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_name']) ? $_smarty_tpl->getVariable('data')->value['emp_name'] : null);?>
</h2>
                                </div>
                                <dl class="dl-horizontal">
                                    <dt>状态：</dt>
                                    <dd><span class="label label-primary">
                                        <?php echo (isset($_smarty_tpl->getVariable('data')->value['zhuangtai']) ? $_smarty_tpl->getVariable('data')->value['zhuangtai'] : null);?>

                                </span>
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
                                                <li><a href="project_detail.html#tab-1" data-toggle="tab">员工私人信息</a>
                                                </li>

                                                <li class=""><a href="project_detail.html#tab-2" data-toggle="tab">入职信息</a>
                                                </li>

                                                <li class=""><a href="project_detail.html#tab-3" data-toggle="tab">换岗记录</a>
                                                </li>

                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">

                                        <div class="tab-content">

                                            <div class="tab-pane active" id="tab-1">
                                                <div class="feed-activity-list">
                                                    <div class="feed-element">
                                                        <div class="media-body ">
                                                           <?php if ((isset($_smarty_tpl->getVariable('data')->value['emp_imagea']) ? $_smarty_tpl->getVariable('data')->value['emp_imagea'] : null)){?>
                                                                <img src="../../../thumb/<?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_imagea']) ? $_smarty_tpl->getVariable('data')->value['emp_imagea'] : null);?>
" style="width: 100px;height: 130px">
                                                           <br/><br/>
                                                           <?php }?>
                                                           <br/><br/>
                                                           性别：<?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_sex']) ? $_smarty_tpl->getVariable('data')->value['emp_sex'] : null);?>

                                                           <br/><br/>
                                                           身份证号码：<?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_num']) ? $_smarty_tpl->getVariable('data')->value['emp_num'] : null);?>

                                                           <br/><br/>
                                                           私人联系电话：<?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_phone']) ? $_smarty_tpl->getVariable('data')->value['emp_phone'] : null);?>

                                                           <br/><br/>
                                                           家庭住址：<?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_homeAdd']) ? $_smarty_tpl->getVariable('data')->value['emp_homeAdd'] : null);?>

                                                           <br/><br/>
                                                           当前居住地址：<?php echo (isset($_smarty_tpl->getVariable('data')->value['dangqian_homeAdd']) ? $_smarty_tpl->getVariable('data')->value['dangqian_homeAdd'] : null);?>

                                                           <br/><br/>
                                                           紧急联系人：<?php echo (isset($_smarty_tpl->getVariable('data')->value['jinji_name']) ? $_smarty_tpl->getVariable('data')->value['jinji_name'] : null);?>

                                                           <br/><br/>
                                                           紧急联系人电话：<?php echo (isset($_smarty_tpl->getVariable('data')->value['jinji_phone']) ? $_smarty_tpl->getVariable('data')->value['jinji_phone'] : null);?>

                                                           <br/><br/>
                                                           建行卡号：<?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_kahao']) ? $_smarty_tpl->getVariable('data')->value['emp_kahao'] : null);?>

                                                           <br/><br/>
                                                           <hr/>
                                                        </div>
                                                        
                                                    </div>
                                                </div>

                                            </div>




                                            <div class="tab-pane" id="tab-2">
                                                <div class="feed-activity-list">
                                                <div class="feed-element">
                                                        <div class="media-body ">
                                                           <?php if ((isset($_smarty_tpl->getVariable('data')->value['emp_image']) ? $_smarty_tpl->getVariable('data')->value['emp_image'] : null)){?>
                                                           <img src="../../../thumb/<?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_image']) ? $_smarty_tpl->getVariable('data')->value['emp_image'] : null);?>
" style="width: 100px;height: 130px;">
                                                           <br/><br/>
                                                           <?php }?>



                                           

                                                           <br/><br/>
                                                           所属部门：<?php echo (isset($_smarty_tpl->getVariable('data')->value['name']) ? $_smarty_tpl->getVariable('data')->value['name'] : null);?>

                                                           <br/><br/>
                                                           所属职位：<?php echo (isset($_smarty_tpl->getVariable('data')->value['zhiwei_name']) ? $_smarty_tpl->getVariable('data')->value['zhiwei_name'] : null);?>


                                                           <?php if ($_smarty_tpl->getVariable('rule')->value==1){?>
                                                           &nbsp;&nbsp;&nbsp;
                                                           <a href="/site/operator/zhiwei/index.php?task=xiangxi&id=<?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_zhiweiid']) ? $_smarty_tpl->getVariable('data')->value['emp_zhiweiid'] : null);?>
&emp_id=<?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_id']) ? $_smarty_tpl->getVariable('data')->value['emp_id'] : null);?>
">点击查看工资结构</a>
                                                           <?php }?>
                                                           <br/><br/>
                                                           所属门店：<?php echo (isset($_smarty_tpl->getVariable('data')->value['shop_name']) ? $_smarty_tpl->getVariable('data')->value['shop_name'] : null);?>

                                                           <br/><br/>
                                                           入职时间：<?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_addtime']) ? $_smarty_tpl->getVariable('data')->value['emp_addtime'] : null);?>

                                                           <br/><br/>
                                                           <?php if ((isset($_smarty_tpl->getVariable('data')->value['emp_quitTime']) ? $_smarty_tpl->getVariable('data')->value['emp_quitTime'] : null)){?>
                                                            离职时间：
                                                            <?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_quitTime']) ? $_smarty_tpl->getVariable('data')->value['emp_quitTime'] : null);?>

                                                            <br/><br/>
                                                            <?php }?>
                                                            合同开始时间：
                                                            <?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_pactStartDate']) ? $_smarty_tpl->getVariable('data')->value['emp_pactStartDate'] : null);?>

                                                                <br/><br/>
                                                            合同结束时间：
                                                            <?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_pactEndDate']) ? $_smarty_tpl->getVariable('data')->value['emp_pactEndDate'] : null);?>

                                                             <br/><br/>


                                                             <?php if ((isset($_smarty_tpl->getVariable('data')->value['emp_driverlicense']) ? $_smarty_tpl->getVariable('data')->value['emp_driverlicense'] : null)){?>
                                                            驾照类型：
                                                            <?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_driverlicense']) ? $_smarty_tpl->getVariable('data')->value['emp_driverlicense'] : null);?>

                                                            <br/><br/>
                                                            <?php }?>
                                                            <?php if ((isset($_smarty_tpl->getVariable('data')->value['emp_jiazhaotime']) ? $_smarty_tpl->getVariable('data')->value['emp_jiazhaotime'] : null)){?>
                                                            驾照有效日期：
                                                            <?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_jiazhaotime']) ? $_smarty_tpl->getVariable('data')->value['emp_jiazhaotime'] : null);?>

                                                            <br/><br/>
                                                            <?php }?>

                                                           <hr/>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane" id="tab-3">
                                                <table class="table table-striped">
                                                   
                                                    <thead>
                                                        <tr>
                                                            <th>换岗前职位</th>
                                                            <th>换岗后职位</th>
                                                            <th>换岗前门店</th>
                                                            <th>换岗后门店</th>
                                                            <th>操作人</th>
                                                            <th>操作时间</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                       <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('huangang')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
                                                       <tr>
                                                         <td>
                                                           <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['zhiwei_name']) ? $_smarty_tpl->tpl_vars['row']->value['zhiwei_name'] : null);?>

                                                         </td>
                                                         <td>
                                                           <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['zhiwei_nameb']) ? $_smarty_tpl->tpl_vars['row']->value['zhiwei_nameb'] : null);?>

                                                         </td>
                                                         <td>
                                                           <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null);?>

                                                         </td>
                                                         <td>
                                                           <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_nameb']) ? $_smarty_tpl->tpl_vars['row']->value['shop_nameb'] : null);?>

                                                         </td>
                                                         <td>
                                                            <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['emp_name']) ? $_smarty_tpl->tpl_vars['row']->value['emp_name'] : null);?>

                                                         </td>
                                                         <td>
                                                            <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['addtime']) ? $_smarty_tpl->tpl_vars['row']->value['addtime'] : null);?>

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
