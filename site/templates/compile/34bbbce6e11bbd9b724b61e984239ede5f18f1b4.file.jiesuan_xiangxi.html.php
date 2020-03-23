<?php /* Smarty version Smarty-3.0.4, created on 2020-03-01 14:31:30
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/daijia_linshi/jiesuan_xiangxi.html" */ ?>
<?php /*%%SmartyHeaderCode:279285e5b56c28b9105-58493833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34bbbce6e11bbd9b724b61e984239ede5f18f1b4' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/daijia_linshi/jiesuan_xiangxi.html',
      1 => 1582707921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '279285e5b56c28b9105-58493833',
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


    <title>临时代驾批量结账</title>
    <link rel="shortcut icon" href="favicon.ico">
<link href="../../../crm/fonts1/iconfont.css?a=2" rel="stylesheet">
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
                <h5>临时代驾批量结账 </br>
                    
                </h5>
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
            </div>
             
            <form method="post" action="index.php?task=jiesuan_action" name="form1">
                <div class="ibox-content">
                <div class="row row-lg">
                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="example-wrap">
                            <div class="example">
                            <input type="hidden" name="type" id="type" value="<?php echo $_smarty_tpl->getVariable('type')->value;?>
">
            <table class="table table-bordered table-hover" data-height="400" style="margin-bottom:0px" data-mobile-responsive="true">
                            <thead>
                            <tr>
                                <th style="text-align: center;width: 5%">
                                    选择
                                </th>
                                
                                <th style="text-align: center;width: 15%">
                                    合同号
                                </th>
                                
                                <th style="text-align: center;width: 25%">
                                    用车时间
                                </th>
                                <th style="text-align: center;width: 30%">
                                    行程备注
                                </th>
                                <th style="text-align: center;width: 15%">
                                    结账收款
                                </th>
                                <th style="width: 10%">
                                    <div align="center">
                                        详细
                                    </div>
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
                                <td style="text-align: center;">
                                    <label style="float: left;display: block;margin-left: 40%;"><input type="checkbox" name="rules[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['rows']->value['paiche_id'] : null);?>
" class="one" type_a="one" one="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['money']) ? $_smarty_tpl->tpl_vars['rows']->value['money'] : null);?>
"/></label>
                                </td>
                                <td style="text-align: center;">
                                   <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['rows']->value['paiche_contractNum'] : null);?>

                                </td>
                                <td style="text-align: center;">
                                   <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['rows']->value['paiche_startDate'] : null);?>
~~ <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['rows']->value['paiche_startDate'] : null);?>

                                </td>
                                <td style="text-align: center;">
                                   <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['paiche_line']) ? $_smarty_tpl->tpl_vars['rows']->value['paiche_line'] : null);?>
&nbsp;&nbsp;&nbsp; <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['paiche_specialRemarks']) ? $_smarty_tpl->tpl_vars['rows']->value['paiche_specialRemarks'] : null);?>

                                </td>
                                <td style="text-align: center;">
                                   <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['money']) ? $_smarty_tpl->tpl_vars['rows']->value['money'] : null);?>

                                </td>
                                <td style="text-align: center;">
                                  <a href="index.php?task=mingxi&pid=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['rows']->value['paiche_id'] : null);?>
" title="明细" style="color:#CC6600" target="_blank">
                                          <i class="iconfont icon-mingxi1" aria-hidden="true"></i>
                                   </a>
                                </td>
                                
                            </tr>
                            
                            <?php }} ?>
                            
                        </tbody>
                         
                    </table>
                    <table class="table table-bordered" class="shiji" style="margin-top: 20px;margin-bottom: 20px;">
                                    <tr>
                                        <th width="33%" style="text-align: center;">总金额</th>
                                        <th width="33%" style="text-align: center;">开票金额</th>
                                        <th width="34%" style="text-align: center;">发票号码</th>
                                        
                                    </tr>
                                                      
                                            <tr>
                                                
                                                <td style="color: red;text-align: center;" id="money_a"></td>
                                                <td style="color: red;text-align: center;" id="money_c"></td>
                                                <td style="text-align: center;">
                                                    <input type="text" name="xuhao" value="" id="xuhao">
                                                </td>
                                            </tr>
                                            
                                
                    </table>
                    
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
    $('#form1').submit(function(){
        $('#submit').attr('disabled','disabled');
        $('#submit').val('正在提交');

    });
    $('#submit').click(function(){
        var xuhao=$("#xuhao").val();
        if(xuhao==""){
            alert('请填写正确的发票号码！');
            return false;
        }
        
    });
    $(".yes").click(function(){
        var boean=$(this).attr('checked');
        if(boean){
            $(this).attr('checked',true);
            $(".no").attr('checked',false);
            $("input[name='rules[]']").attr('checked',true);
        }else{
            return false;
        }
        jisuan();
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
        jisuan();
    })

    jisuan();
    function jisuan(){
        var money=0;
        var items =  $("input[name='rules[]']");
        for(var i=0;i<items.length;i++){
            if(items.eq(i).attr("checked")){
               money=money+parseFloat(items.eq(i).attr("one"));
            }
        }
         $("#money_a").html(money);
         $("#money_c").html(money);
         
    }
    $("input[name='rules[]']").click(function(){
        jisuan();
    });
    
       
    
   
    

</script>
</html>
