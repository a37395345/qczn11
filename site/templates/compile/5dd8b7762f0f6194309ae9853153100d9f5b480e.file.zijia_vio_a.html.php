<?php /* Smarty version Smarty-3.0.4, created on 2019-07-12 10:23:53
         compiled from "F:\WWW\qczn\site\templates\elsker\operator/zijia_linshi/zijia_vio_a.html" */ ?>
<?php /*%%SmartyHeaderCode:205625d27ef395b92e9-60860152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dd8b7762f0f6194309ae9853153100d9f5b480e' => 
    array (
      0 => 'F:\\WWW\\qczn\\site\\templates\\elsker\\operator/zijia_linshi/zijia_vio_a.html',
      1 => 1562898199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205625d27ef395b92e9-60860152',
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


    <title>H+ 后台主题UI框架 - 项目详情</title>
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
                                    <h2>临时自驾违约</h2>
                                </div>
        
                            </div>
                        </div>
                        
                        <form method="post" action="zijiaVio_accept.php" name="form1">
                            <input type="hidden" value="<?php echo $_smarty_tpl->getVariable('pid')->value;?>
" id="car_id" name="pid">
                        <div class="row m-t-sm">
                            <div class="col-sm-12">
                                <div class="panel blank-panel">
                                  
                                    <div class="panel-body">

                                        <div class="tab-content">



                                            
                                            <div  id="tab-2">
                                                <table class="table table-striped">
                                                   
                                                    <thead>
                                                        <tr>
                                                            <th>序号</th>
                                                            <th>收费项目</th>
                                                            <th>约定金额</th>
                                                            <th>已收金额</th>
                                                            <th>已退金额</th>
                                                            <th>退款金额</th>
                                                        </tr>
                                                    </thead>
                                                     <?php if ($_smarty_tpl->getVariable('chargelist')->value){?>
                                                    <tbody>
                                                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('chargelist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
                                                    <tr>
                                                       <td><input type="hidden" name="charge_id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
 </td>

                                                       <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['charge_name']) ? $_smarty_tpl->tpl_vars['row']->value['charge_name'] : null);?>
</td>

                                                        <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['conv_money']) ? $_smarty_tpl->tpl_vars['row']->value['conv_money'] : null);?>
</td> 
                                                        <td><input type="hidden" class="charge_havemoney" name="charge_havemoney[]" id="charge_havemoney_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
"/><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null);?>
</td>
                                                        <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null);?>
</td>

                                                        <td><input type="hidden" name="back_money[]" id="back_money_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['id']) ? $_smarty_tpl->tpl_vars['row']->value['id'] : null);?>
" value="<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null);?>
"/><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['have_in_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_in_money'] : null)-(isset($_smarty_tpl->tpl_vars['row']->value['have_back_money']) ? $_smarty_tpl->tpl_vars['row']->value['have_back_money'] : null);?>
</td>
                                                    </tr>
                                                     <?php }} ?>   
                                                    </tbody>
                                                </table>
                                                 <?php }?>
                                                <table class="table table-bordered" >

                                                    <tr>
    <th style="background-color:#F5F5F6" width="15%">
        <span style="color:#000">本次收取违约金：</span>
    </th>  
     <td width="35%">
        <input type="text" name="settle_vio" id="settle_vio" size="5" value="<?php echo $_smarty_tpl->getVariable('paiche_rented')->value;?>
" class="form-control input-sm" onchange="jisuan()"/>
     </td> 

      <th style="background-color:#F5F5F6" width="15%">
        <span style="color:#000">合计应退金额:</span>
    </th> 
    <td width="35%">
        <input type="text" name="total" id="total" value="" size="5" readonly class="form-control input-sm"/>
     </td>   
 </tr>
 <tr>
     <th style="background-color:#F5F5F6" width="15%">
        <span style="color:#000">车辆归还时间:</span>
    </th> 
    <td width="35%">
        <input type="text" name="return_endDate" id="return_endDate" size="16" value="<?php echo $_smarty_tpl->getVariable('nowtime')->value;?>
" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})"  class="form-control input-sm"/>
     </td> 

     <th style="background-color:#F5F5F6" width="15%">
        <span style="color:#000">请备注违约原因：</span>
    </th> 
    <td width="35%">
        <input type="text" name="settle_vioreason" id="settle_vioreason" value="" style="width:410px;" class="form-control input-sm"/>
     </td>   
     <input type="hidden" name="infact" id="infact" value=""/>   
        
        
        
        
        
        
        
        
   
  </tr>
                                                </table>

                                            </div>
                                            <input type="submit" id="submit" class="btn btn-outline btn-default" value="提交" style="width: 10%;margin-left: 45%;display: block;">
                                           

</form>




                                               










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

    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
    <!--统计代码，可删除-->
<script>
$(document).ready(function(){
   jisuan();
    
  
    
});

function jisuan(){
    var length=$(".charge_havemoney").length;
   var mouth=0;
   for(var i=0;i<length;i++){
        mouth=mouth+parseInt($('.charge_havemoney').eq(i).val());
   }
    $('#total').val(parseInt($('#settle_vio').val())-mouth);
  }  
</script>
</body>

</html>
