<?php /* Smarty version Smarty-3.0.4, created on 2019-09-17 16:22:27
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/zhiwei/setRule.html" */ ?>
<?php /*%%SmartyHeaderCode:133205d8097c38f9f55-59432818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bdf86710119bdb6bed0e0b5ad47d7790612d40d' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/zhiwei/setRule.html',
      1 => 1568708542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133205d8097c38f9f55-59432818',
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


    <title>职位权限管理</title>
    

    <link rel="shortcut icon" href="favicon.ico"> <link href="../../../crm1/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="../../../crm1/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="../../../crm1/css/animate.css" rel="stylesheet">
    <link href="../../../crm1/css/style.css?v=4.1.0" rel="stylesheet">
    <link href="../../../crm1/css/plugins/treeview/bootstrap-treeview.css" rel="stylesheet">

    <link href="../../../crm/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <script src="../../../crm/js/plugins/sweetalert/sweetalert.min.js"></script>



    <script type="text/javascript" src="../../../js/jquery.js">
</script>
    <link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css?a=2" rel="stylesheet">
    <script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js?a=5"></script>
    <script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js?a=1"></script>
</head>

<body class="gray-bg">
    <div class="row wrapper wrapper-content animated fadeInRight">
        
       
       
       
            <div class="ibox float-e-margins" >
                 <div class="ibox-title">
                <h5>职位权限管理</h5>
               </div>
                <div class="ibox-tools" style="padding-top: 14px; padding-left: 10px;float: left;">  <div style="float:left">
                    <span style="float: left;">全选</span>&nbsp;&nbsp;
                    <label>
                        <input style="float: left;display: block;" type="checkbox" name="yes"  class="yes" /></label>&nbsp;&nbsp; &nbsp;&nbsp;
                </div>
                    <div style="float:left">

                    <span style="float: left;">全不选</span>&nbsp;&nbsp;
                    <label><input style="float: left;display: block;" type="checkbox" name="no"  class="no" />
                    </label>
                </div>
            </div>
            <form method="post" action="index.php?task=setRuleAction" name="form1">
                <div class="ibox-content">
                <div class="row row-lg">
                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="example-wrap">
                            <div class="example">
            <table class="table table-bordered table-hover" data-height="400" style="margin-bottom:0px" data-mobile-responsive="true">
                        
                            <tbody>
                              
                                
                            <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('rule_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                            <tr>
                                <td style="width: 15%"> 
                                    <label style="float: left;display: block;"><input type="checkbox" name="rules[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['rules_xuanze']) ? $_smarty_tpl->tpl_vars['rows']->value['rules_xuanze'] : null)==1){?>checked<?php }?> class="one" type_a="one" one="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
"/></label>
                                    <span style="display: block;float: left;"><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>
</span>
                                </td>
                                <td style="width: 25%">
                                    <?php if (count((isset($_smarty_tpl->tpl_vars['rows']->value['son']) ? $_smarty_tpl->tpl_vars['rows']->value['son'] : null))>0){?>
                                        <?php  $_smarty_tpl->tpl_vars['rows_a'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rows']->value["son"]) ? $_smarty_tpl->tpl_vars['rows']->value["son"] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows_a']->key => $_smarty_tpl->tpl_vars['rows_a']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows_a']->key;
?>
                                             <div style="height: 80px">
                                                <label style="float: left;display: block;"><input type="checkbox" name="rules[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows_a']->value['id']) ? $_smarty_tpl->tpl_vars['rows_a']->value['id'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows_a']->value['rules_xuanze']) ? $_smarty_tpl->tpl_vars['rows_a']->value['rules_xuanze'] : null)==1){?>checked<?php }?> class="two<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" two="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" type_a="two"/></label>
                                            <span style="display: block;float: left;"><?php echo (isset($_smarty_tpl->tpl_vars['rows_a']->value['title']) ? $_smarty_tpl->tpl_vars['rows_a']->value['title'] : null);?>
</span>
                                            </div>
                                        <?php }} ?>
                                    <?php }?>
                                </td >
                                <td style="width: 60%">
                                    <?php if (count((isset($_smarty_tpl->tpl_vars['rows']->value['son']) ? $_smarty_tpl->tpl_vars['rows']->value['son'] : null))>0){?>
                                        <?php  $_smarty_tpl->tpl_vars['rows_a'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rows']->value["son"]) ? $_smarty_tpl->tpl_vars['rows']->value["son"] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows_a']->key => $_smarty_tpl->tpl_vars['rows_a']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows_a']->key;
?>
                                        <div style="height: 80px">
                                                <?php if (count((isset($_smarty_tpl->tpl_vars['rows_a']->value['son']) ? $_smarty_tpl->tpl_vars['rows_a']->value['son'] : null))>0){?>
                                                    <?php  $_smarty_tpl->tpl_vars['rows_b'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['rows_a']->value["son"]) ? $_smarty_tpl->tpl_vars['rows_a']->value["son"] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows_b']->key => $_smarty_tpl->tpl_vars['rows_b']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows_b']->key;
?>
                                                         <label style="float: left;display: block;"><input type="checkbox" name="rules[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows_b']->value['id']) ? $_smarty_tpl->tpl_vars['rows_b']->value['id'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows_b']->value['rules_xuanze']) ? $_smarty_tpl->tpl_vars['rows_b']->value['rules_xuanze'] : null)==1){?>checked<?php }?> class="three<?php echo (isset($_smarty_tpl->tpl_vars['rows_a']->value['id']) ? $_smarty_tpl->tpl_vars['rows_a']->value['id'] : null);?>
" three="<?php echo (isset($_smarty_tpl->tpl_vars['rows_a']->value['id']) ? $_smarty_tpl->tpl_vars['rows_a']->value['id'] : null);?>
"  type_a="three"/></label>
                                                         <span style="display: block;float: left;">
                                                        <?php echo (isset($_smarty_tpl->tpl_vars['rows_b']->value['title']) ? $_smarty_tpl->tpl_vars['rows_b']->value['title'] : null);?>

                                                        &nbsp;&nbsp;&nbsp;&nbsp; 
                                                        </span>
                                                    <?php }} ?>
                                                <?php }?>
                                            </div>
                                        <?php }} ?>
                                    <?php }?>
                                </td>
                               
                            </tr>
                             
                            <?php }} ?>
                        </tbody>
                         
                    </table>
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('id')->value;?>
" />
                    <input type="submit" id="submit" class="btn btn-outline btn-default" value="提交" style="width: 10%;margin-left: 45%;display: block;">
                
            
            </div>
            </div>
            </div>

        </div>
        </div> 
        </form>
    </div>
    </div>
    <!-- 全局js -->
    
    <script src="../../../crm1/js/bootstrap.min.js?v=3.3.6"></script>
    <!-- Bootstrap-Treeview plugin javascript -->
    <script src="../../../crm1/js/plugins/treeview/bootstrap-treeview.js"></script>


</body>
<script type="text/javascript">
    $(".yes").click(function(){
        var boean=$(this).attr('checked');
        if(boean){
            $(this).attr('checked',true);
            $(".no").attr('checked',false);
            $("input[name='rules[]']").attr('checked',true);
        }else{
            return false;
        }
    })

    $(".no").click(function(){
        var boean=$(this).attr('checked');
        if(boean){
            $(this).attr('checked',true);
            $(".yes").attr('checked',false);
            $("input[name='rules[]']").attr('checked',false);
        }else{
            return false;
        }
    })
    $("input[type_a='one']").click(function () {
       var boean=$(this).attr('checked');
       var id=$(this).val();
       if(!boean){
            $(".two"+id).attr('checked',false);
            for(var i=0;i<$(".two"+id).length;i++){
                var id_a=$(".two"+id).eq(i).val();
                $(".three"+id_a).attr('checked',false);
            }
       }
       
      
   })
    $("input[type_a='two']").click(function () {
      var boean=$(this).attr('checked');
      var id=$(this).val();
      var two=$(this).attr("two");
      if(!boean){
        $(".three"+id).attr('checked',false);
    }else{
         
        $("input[one="+two+"]").attr('checked',true);
    }
      
   })
    $("input[type_a='three']").click(function () {

        var boean=$(this).attr('checked');
        var three=$(this).attr("three");
        
        if(boean){
            $("input[value="+three+"]").attr('checked',true);
            var two=$("input[value="+three+"]").attr("two");
            $("input[one="+two+"]").attr('checked',true);
        }
    })
    

</script>
</html>
