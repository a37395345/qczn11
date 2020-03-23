<?php /* Smarty version Smarty-3.0.4, created on 2019-09-12 17:45:02
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/emp/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:70625d7a139e333042-07490086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fdc6869246172764828dcb7fe22cb57b2fe1d94' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/emp/edit.html',
      1 => 1568279083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70625d7a139e333042-07490086',
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
    <title>修改员工资料</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="../../../crm/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="../../../crm/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="../../../crm/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
    <link href="../../../crm/css/animate.min.css" rel="stylesheet">
    <link href="../../../crm/css/style.min862f.css?v=4.1.0" rel="stylesheet">
    <script type="text/javascript" src="../../../js/jquery.js"></script>
    <script type="text/javascript" src="../../../js/laydate/laydate.js"></script>

    <object classid="clsid:F1317711-6BDE-4658-ABAA-39E31D3704D3" codebase="SDRdCard.cab#version=1,3,5,0" width="330" height="0" align="center" hspace="0" vspace="0" id="idcard" name="rdcard"></object>
    <style type="text/css">
    
    .span1{
        margin-bottom: 5px;    color: inherit;
    background-color: transparent;
    -webkit-transition: all .5s;
    transition: all .5s;    border-color: #c2c2c2;border-radius: 3px;    display: inline-block;
    padding: 6px 12px;
    }

</style>

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        
        <!-- Panel Other -->
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>修改员工资料</h5>
            </div>
            <form method="post" action="index.php?task=update" name="form1" enctype="multipart/form-data">
            <div class="ibox-content">
                <div class="row row-lg">
                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="example-wrap">
                            <div class="example">
                                <input type="hidden" name="emp_id" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_id']) ? $_smarty_tpl->getVariable('data')->value['emp_id'] : null);?>
">
                                <span  class="span1" style="float: left;">
                                <img src="../../../images/a2.png" style="width: 20px">
                                        员工信息
                                </span>
                        <button type="button" class="btn btn-outline btn-default" id="shuaka1" onclick="beginread_onclick()" style="float: left;">
                            <img src="../../../images/a10.png" style="width: 20px">
                                        刷身份证验证
                        </button>   
                        <button type="button" class="btn btn-outline btn-default" id="" onclick="xkehu_xianshi()" style="float: left;margin-left: 10px;">
                                <img src="../../../images/a10.png" style="width: 20px">
                                        人脸识别验证
                        </button>


                        <div style="display: none" id="xin_kehu">
                                        <table class="table table-bordered">

                                        <tr>
                                            <th style="background-color:#F5F5F6" width="15%">
                                                <span style="color:#000">员工姓名</span>
                                            </th>
                                            <td width="35%" style="text-align: center;">
                                                <input type="text" class="form-control input-sm" placeholder="姓名" name="realname" id="realname">
                                            </td>

                                            <th style="background-color:#F5F5F6" width="15%">
                                                <span style="color:#000">身份证号码</span>
                                            </th>
                                            <td width="35%">
                                                <input type="text" class="form-control input-sm" placeholder="身份证号码" name="idcard_a" id="idcard_a" minlength="18" maxlength="18">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th style="background-color:#F5F5F6" width="15%">
                                                <span style="color:#000">员工照片</span>
                                            </th>
                                            <td width="35%">
                                                <input type="file" class="form-control input-sm" placeholder="图片" name="tp_b" id="tp_b" accept=".png, .jpeg, .jpg">
                                            </td>

                                            <th style="background-color:#F5F5F6" width="15%">
                                                <img src="" id="images_a" width="100%" >
                                            </th>



                                            <th style="background-color:#F5F5F6" width="35%">
                                                <button type="button" class="btn btn-outline btn-default" id="yz_bbb" onclick="yzm_yanzheng_a()" style="float: left;margin-left: 10px;">
                                                    <img src="../../../images/a10.png" style="width: 20px">
                                                            确定
                                                </button>
                                                
                                            </th>
                                        </tr>
                                        </table>
                                        </div>














                    <table class="table table-bordered">
                        <tr <?php if ((isset($_smarty_tpl->getVariable('data')->value['emp_imagea']) ? $_smarty_tpl->getVariable('data')->value['emp_imagea'] : null)){?><?php }else{ ?>style="display: none"<?php }?> id="tupian">
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">图片</span>
                            </th>
                            <td width="35%">
                                <img id="image" src="../../../thumb/<?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_imagea']) ? $_smarty_tpl->getVariable('data')->value['emp_imagea'] : null);?>
" style="width: 25%">
                            </td>
                            <input type="hidden" name="emp_imagea" id="emp_imagea" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_imagea']) ? $_smarty_tpl->getVariable('data')->value['emp_imagea'] : null);?>
">


                            <th style="background-color:#F5F5F6" width="15%">
                               
                            </th>
                            <td width="35%">
                                
                            </td>
                        </tr>
                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">姓名：</span>
                            </th>
                            <td width="35%">
                               <input type="text" id="emp_name" name="emp_name"  class="form-control input-sm" placeholder="必填" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_name']) ? $_smarty_tpl->getVariable('data')->value['emp_name'] : null);?>
">
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">身份证号码：</span>
                            </th>
                            <td width="35%">
                               <input type="text" id="emp_num" name="emp_num"  class="form-control input-sm" placeholder="必填" minlength="18" maxlength="18" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_num']) ? $_smarty_tpl->getVariable('data')->value['emp_num'] : null);?>
">
                            </td>
  
                        </tr>
                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">家庭住址：</span>
                            </th>
                             <td width="35%">
                                <input type="text" id="emp_homeAdd" name="emp_homeAdd"  class="form-control input-sm" placeholder="必填" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_homeAdd']) ? $_smarty_tpl->getVariable('data')->value['emp_homeAdd'] : null);?>
">
                        
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">私人电话：</span>
                            </th>

                            <td width="35%">
                               <input type="text" id="emp_phone" name="emp_phone"  class="form-control input-sm" placeholder="必填" minlength="11" maxlength="11" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_phone']) ? $_smarty_tpl->getVariable('data')->value['emp_phone'] : null);?>
">
                            </td>
                        </tr>

                        <tr>
                             <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">当前居住地址：</span>
                            </th>
                             <td width="35%">
                                <input type="text" id="dangqian_homeAdd" name="dangqian_homeAdd"  class="form-control input-sm" placeholder="必填" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['dangqian_homeAdd']) ? $_smarty_tpl->getVariable('data')->value['dangqian_homeAdd'] : null);?>
">
                        
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">紧急联系人电话：</span>
                            </th>

                            <td width="35%">
                               <input type="text" id="jinji_phone" name="jinji_phone"  class="form-control input-sm" placeholder="必填" minlength="11" maxlength="11" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['jinji_phone']) ? $_smarty_tpl->getVariable('data')->value['jinji_phone'] : null);?>
">
                            </td>

                        </tr>

                        
                        <tr>
                                <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">性别：</span>
                            </th>
                            <td width="35%">
                                    <label style="margin:0px;margin-right: 10px">
                                            <input name="emp_sex" type="radio" <?php if ((isset($_smarty_tpl->getVariable('data')->value['emp_sex']) ? $_smarty_tpl->getVariable('data')->value['emp_sex'] : null)=="男"){?>checked<?php }?> value="男"/ 
                                             style="display: block;float: left;margin: 3px;padding: 0"> 
                                            <span style="display: block;float: left;">男</span> 
                                    </label>

                                    <label style="margin:0px;margin-right: 10px">
                                            <input name="emp_sex" type="radio" <?php if ((isset($_smarty_tpl->getVariable('data')->value['emp_sex']) ? $_smarty_tpl->getVariable('data')->value['emp_sex'] : null)=="女"){?>checked<?php }?> value="女"  
                                             style="display: block;float: left;margin: 3px;padding: 0">
                                            <span style="display: block;float: left;">女</span>
                                    </label>
                            </td>
                                <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">是否是司机：</span>
                            </th>
                            <td width="35%">
                                    <label style="margin:0px;margin-right: 10px">
                                            <input name="emp_siji" type="radio" <?php if ((isset($_smarty_tpl->getVariable('data')->value['emp_siji']) ? $_smarty_tpl->getVariable('data')->value['emp_siji'] : null)=="1"){?>checked<?php }?> value="1"/ 
                                             style="display: block;float: left;margin: 3px;padding: 0"> 
                                            <span style="display: block;float: left;">不是</span> 
                                    </label>

                                    <label style="margin:0px;margin-right: 10px">
                                            <input name="emp_siji" type="radio" <?php if ((isset($_smarty_tpl->getVariable('data')->value['emp_siji']) ? $_smarty_tpl->getVariable('data')->value['emp_siji'] : null)=="2"){?>checked<?php }?> value="2"  
                                             style="display: block;float: left;margin: 3px;padding: 0">
                                            <span style="display: block;float: left;">是</span>
                                    </label>
                            </td>
                        </tr>
                        <tr>
                            
    
                                
                                
                            
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">建行卡号：</span>
                            </th>
                             <td width="35%">
                                <input type="text" id="emp_kahao" name="emp_kahao"  class="form-control input-sm" placeholder="" minlength="19" maxlength="19" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_kahao']) ? $_smarty_tpl->getVariable('data')->value['emp_kahao'] : null);?>
">
                            </td>
                             <th style="background-color:#F5F5F6" width="15%">
                                
                            </th>
                             <td width="35%">
                                
                            </td>

                           
                            
                        </tr>
                        </table>





                        <span  class="span1" style="float: left;">
                                <img src="../../../images/a1.png" style="width: 20px">
                                        入职信息
                                </span>
                         <table class="table table-bordered">

                        <tr>
                            
                        </tr>

                        <tr>
                                
                                    <th style="background-color:#F5F5F6" width="15%">
                                        <span style="color:#000">入职时间</span>
                                    </th>
                                    <td width="35%">

                                        <input name="emp_addtime"  id="emp_addtime" placeholder="请输入日期" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_addtime']) ? $_smarty_tpl->getVariable('data')->value['emp_addtime'] : null);?>
" class="laydate-icon" onclick="laydate({istime: true, format: 'YYYY-MM-DD'})" unselectable="on" readonly>
                                    </td>

                                    <th style="background-color:#F5F5F6" width="15%">
                                        <span style="color:#000">公司电话：</span>
                                    </th>
                                     <td width="35%">
                                        <input type="text" id="emp_workTel" name="emp_workTel"  class="form-control input-sm" placeholder="" minlength="11" maxlength="11" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_workTel']) ? $_smarty_tpl->getVariable('data')->value['emp_workTel'] : null);?>
">
                                    </td>
                                   
                                
                            </tr>
                            <tr>
                                
                                    <th style="background-color:#F5F5F6" width="15%">
                                        <span style="color:#000">合同开始时间</span>
                                    </th>
                                    <td width="35%">
                                        <input name="emp_pactStartDate"  id="emp_pactStartDate" placeholder="请输入日期" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_pactStartDate']) ? $_smarty_tpl->getVariable('data')->value['emp_pactStartDate'] : null);?>
" class="laydate-icon" onclick="laydate({istime: true, format: 'YYYY-MM-DD'})" unselectable="on" readonly>
                                    </td>
                                
                                    <th style="background-color:#F5F5F6" width="15%">
                                        <span style="color:#000">合同结束时间</span>
                                    </th>
                                    <td width="35%">
                                        <input name="emp_pactEndDate"  id="emp_pactEndDate" placeholder="请输入日期" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_pactEndDate']) ? $_smarty_tpl->getVariable('data')->value['emp_pactEndDate'] : null);?>
" class="laydate-icon" onclick="laydate({istime: true, format: 'YYYY-MM-DD'})" unselectable="on" readonly>
                                    </td>
                                
                            </tr>

                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">额外补贴：</span>
                            </th>
                            <td width="35%">
                               <input type="text" id="zemp_butie" name="zemp_butie"  class="form-control input-sm" placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['zemp_butie']) ? $_smarty_tpl->getVariable('data')->value['zemp_butie'] : null);?>
">
                            </td>
                             <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">安全奖励：</span>
                            </th>
                            <td width="35%">
                                        <label style="margin:0px;margin-right: 10px">
                                            <input name="zemp_anquan" type="radio" <?php if ((isset($_smarty_tpl->getVariable('data')->value['zemp_anquan']) ? $_smarty_tpl->getVariable('data')->value['zemp_anquan'] : null)=="1"){?>checked<?php }?> value="1"/ 
                                             style="display: block;float: left;margin: 3px;padding: 0"> 
                                            <span style="display: block;float: left;">有</span> 
                                        </label>

                                        <label style="margin:0px;margin-right: 10px">
                                            <input name="zemp_anquan" type="radio" <?php if ((isset($_smarty_tpl->getVariable('data')->value['zemp_anquan']) ? $_smarty_tpl->getVariable('data')->value['zemp_anquan'] : null)=="0"){?>checked<?php }?> value="0"  
                                             style="display: block;float: left;margin: 3px;padding: 0">
                                            <span style="display: block;float: left;">无</span>
                                        </label>
                                    </td>
                            </tr>


                            <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">驾照类型：</span>
                            </th>
                            <td width="35%">
                               <input type="text" id="emp_driverlicense" name="emp_driverlicense"  class="form-control input-sm" placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_driverlicense']) ? $_smarty_tpl->getVariable('data')->value['emp_driverlicense'] : null);?>
">
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                        <span style="color:#000">驾照有效日期：</span>
                                    </th>
                                    <td width="35%">
                                        <input name="emp_jiazhaotime"  id="emp_jiazhaotime" placeholder="请输入日期" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_jiazhaotime']) ? $_smarty_tpl->getVariable('data')->value['emp_jiazhaotime'] : null);?>
" class="laydate-icon" onclick="laydate({istime: true, format: 'YYYY-MM-DD'})" unselectable="on" readonly>
                                    </td>
                            
                            </tr>
                            
                            
                            <tr>
                                     <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">备注：</span>
                            </th>
                                <td width="35%">
                                        <input type="text" id="emp_introduce" name="emp_introduce"  class="form-control input-sm" placeholder="" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_introduce']) ? $_smarty_tpl->getVariable('data')->value['emp_introduce'] : null);?>
">
                                </td>
                                    <th style="background-color:#F5F5F6" width="15%">
                                        <span style="color:#000">职位A（后期会取消此选项）</span>
                                    </th>
                                    <td width="35%">
                                        <select class="form-control input-sm" name="emp_post" id="emp_post">
                                            <option value="0">请选择</option>
                                            <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list_level')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                              <option <?php if ((isset($_smarty_tpl->getVariable('data')->value['emp_post']) ? $_smarty_tpl->getVariable('data')->value['emp_post'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null)){?>selected<?php }?> value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>
</option>
                                            <?php }} ?>
                                        </select>
                                    </td>
                                
                            </tr>
                            <tr>
                             
                        </tr>
                        <tr>
                                            <th style="background-color:#F5F5F6" width="15%">
                                                <span style="color:#000">工作照片</span>
                                            </th>
                                            <td width="35%">
                                                <input type="file" class="form-control input-sm" placeholder="图片" name="tp_c" id="tp_c" accept=".png, .jpeg, .jpg">
                                            </td>

                                            <th style="background-color:#F5F5F6" width="15%">
                                                <img src="../../../thumb/<?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_image']) ? $_smarty_tpl->getVariable('data')->value['emp_image'] : null);?>
" id="images_c" width="100%" >
                                            </th>
                                            <th style="background-color:#F5F5F6" width="35%">
                                                <input type="hidden" name="emp_image" id="emp_image" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_image']) ? $_smarty_tpl->getVariable('data')->value['emp_image'] : null);?>
">
                                            </th>
                                        </tr>
                        
                    </table>
                    
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
    
    <script src="../../../crm/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
    <script src="../../../crm/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
    <script src="../../../crm/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
    <script src="../../../crm/js/demo/bootstrap-table-demo.min.js"></script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
    <script type="text/javascript" src="../../../js/common1.js?a=<?php echo time();?>
"></script>
</body>  
<script type="text/javascript">
  

    
   


</script>

    

<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->
</html>
