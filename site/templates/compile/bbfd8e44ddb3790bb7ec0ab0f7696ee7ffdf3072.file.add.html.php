<?php /* Smarty version Smarty-3.0.4, created on 2019-10-16 19:13:26
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/huodong/add.html" */ ?>
<?php /*%%SmartyHeaderCode:2327522435da6fb56856159-88730353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbfd8e44ddb3790bb7ec0ab0f7696ee7ffdf3072' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/huodong/add.html',
      1 => 1571215235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2327522435da6fb56856159-88730353',
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
    <title>添加活动</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">
     

    <link rel="shortcut icon" href="favicon.ico"> <link href="../../../crm/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
    <link href="../../../crm/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
    <link href="../../../crm/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
    <link href="../../../crm/css/animate.min.css" rel="stylesheet">
    <link href="../../../crm/css/style.min862f.css?v=4.1.0" rel="stylesheet">

   
    <!--suppress JSUnresolvedLibraryURL -->
    
    <script src="../../../comment/jquery.js" type="text/javascript"></script>

   
    <script type="text/javascript" src="../../../js/laydate/laydate.js"></script>

</head>
<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        
        <!-- Panel Other -->
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>添加活动</h5>
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
                                <span style="color:#000">活动名称：</span>
                            </th>
                            <td width="35%">
                                <input type="text" id="name" name="name"  class="form-control input-sm" placeholder="">
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">租车类型：</span>
                            </th>
                            <td width="35%">
                                <input type="hidden" id="paiche_type" name="paiche_type"   value="1" >
                                <input type="text" id="" name=""  class="form-control input-sm" placeholder="" value="临时自驾" readonly="readonly"unselectable="on">
                            </td>

                        </tr>

                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">活动类型：</span>
                            </th>
                            <td width="35%">
                                <input type="hidden" id="type" name="type"   value="1" >
                                <input type="text" id="" name=""  class="form-control input-sm" placeholder="" value="天数优惠" readonly="readonly"unselectable="on">
                            </td>
                             <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">优惠天数：</span>
                            </th>
                             <td width="35%">
                                <input type="text" id="tianshu" name="tianshu"  class="form-control input-sm" placeholder="">
                            </td>
                           
                        </tr>



                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">开始时间：</span>
                            </th>
                             <td width="35%">
                                <input name="addtime" placeholder="请输入日期" value="" class="laydate-icon form-control input-sm" onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})">
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">结束时间：</span>
                            </th>
                            <td width="35%">
                                <input name="endtime" placeholder="请输入日期" value="" class="laydate-icon form-control input-sm" onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})">
                            </td>
                            
                        </tr>
                        <tr>
                             <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">最高金额：</span>
                            </th>
                             <td width="35%">
                                <input type="text" id="money" name="money"  class="form-control input-sm" placeholder="">
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">开放门店：</span>
                            </th>
                            <td width="35%">
                                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shop_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
                                <label style="float: left;display: block;">
                                    
                                        <input type="checkbox" type="checkbox" name="shops[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_id']) ? $_smarty_tpl->tpl_vars['row']->value['shop_id'] : null);?>
"/>
                                        <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['shop_name']) ? $_smarty_tpl->tpl_vars['row']->value['shop_name'] : null);?>

                                </label>
                                 <?php }} ?>
                            </td>

                            
                        </tr>

                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">可用次数：</span>
                            </th>
                            <td width="35%">
                                <input type="hidden" id="cishu" name="cishu"   value="1" >
                                <input type="text" id="" name=""  class="form-control input-sm" placeholder="" value="一次" readonly="readonly"unselectable="on">
                            </td>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">关联活动：</span>
                            </th>
                            <td width="35%">
                                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
                                <label style="float: left;display: block;">
                                    
                                        <input type="checkbox" type="checkbox" name="h_id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
"/>
                                        <?php echo (isset($_smarty_tpl->tpl_vars['row']->value['name']) ? $_smarty_tpl->tpl_vars['row']->value['name'] : null);?>

                                </label>
                                 <?php }} ?>
                            </td>

                           
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

    
    
    <script src="../../../crm/js/bootstrap.min.js?v=3.3.6"></script>
    
    <script src="../../../crm/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
    <script src="../../../crm/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
    <script src="../../../crm/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
    <script src="../../../crm/js/demo/bootstrap-table-demo.min.js"></script>
    
    
</body> 
<script>
        jQuery(document).ready(function () {
            
            $("#input-21c").rating({
                min: 0, max: 5, step: 0.5, size: "xs", stars: "5"
            });
        });
</script> 
<script type="text/javascript">

    $("#submit").click(function(){
        var zhiwei_name= $("#zhiwei_name").val();
        if(zhiwei_name.length<2||zhiwei_name.length>20){
            alert("请填写2到20位的职位名称！");
            return false;
        }

        var department_id= $("#department_id").val();
        if(department_id<=0){
            alert("请选择所属部门！");
            return false;
        }

        var zhiwei_order= $("#zhiwei_order").val();
        if(!(yanzhengShuZi(zhiwei_order))){
            alert("排序只能为整数！");
            return false;
        }
       
        
    });
    
    function yanzhengShuZi(idNo){

        var regIdNo = /^[0-9]*$/;  
        if(!regIdNo.test(idNo)){  
            return false;  
        }else{
            return true;
        }  
    }
    
    $("#department_id").change(function(){
        var department_id=$(this).val();
        $.ajax({
            type:'POST',
            url:'index.php?task=getShangjiZhiwei',
            data: {"department_id":department_id},
            dataType:"json",
            cache: false,
            success:function(req){
                $("#pid").empty();
                $("#pid").append("<option value='0'>顶级职位</option>");
                
                for(var i=0;i<req.length;i++){
                    $("#pid").append("<option  value='"+req[i]['id']+"'>"+req[i]['zhiwei_name']+"</option>");
                }
                 
                
            }
        });
       
    })

       
    

    
</script>

    

<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->
</html>
