<?php /* Smarty version Smarty-3.0.4, created on 2020-03-20 14:33:34
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/shouqian/danhao_list.html" */ ?>
<?php /*%%SmartyHeaderCode:40945e7463be018597-76635264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2b16db12959e7e71aa388924f79f71d050047c9' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/shouqian/danhao_list.html',
      1 => 1584686008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40945e7463be018597-76635264',
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


    <title>部门权限管理</title>
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
                <h5><?php if ($_smarty_tpl->getVariable('type')->value=="zijia_linshi"){?>自驾平台单<?php }elseif($_smarty_tpl->getVariable('type')->value=="daijia_linshi"){?>临时代驾企业结账<?php }elseif($_smarty_tpl->getVariable('type')->value=="diaoche"){?>临时代驾调车结账<?php }?> </br>
                    
                </h5>
               </div>
               
            </div>
             
            <form method="post" action="index.php?task=pinlian_action" name="form1">
                <div class="ibox-content">
                <div class="row row-lg">
                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="example-wrap">
                            <div class="example">
                            <input type="hidden" name="type" id="type" value="<?php echo $_smarty_tpl->getVariable('type')->value;?>
">
            <table class="table table-bordered table-hover" data-height="400" style="margin-bottom:20px" data-mobile-responsive="true">
                            <thead>
                            <tr>
                               
                               
                                <th style="text-align: center;width: 10%">
                                    合同号
                                </th>
                                <?php if ($_smarty_tpl->getVariable('type')->value=="zijia_linshi"){?>
                                <th style="text-align: center;width: 15%">
                                    平台单号
                                </th>
                                
                                <th style="text-align: center;width: 10%">
                                    承租人
                                </th>
                                <?php }?>
                                <th style="text-align: center;width: 25%">
                                    用车时间
                                </th>
                                <th style="text-align: center;width: 15%">
                                    结账收款
                                </th>
                                <th style="text-align: center;width: 15%">
                                    本次收款
                                </th>
                                <th style="width: 15%">
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
                               <input type="hidden" class="form-control input-sm" name="pid[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['rows']->value['paiche_id'] : null);?>
"   />
                                <td style="text-align: center;">
                                   <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['paiche_contractNum']) ? $_smarty_tpl->tpl_vars['rows']->value['paiche_contractNum'] : null);?>

                                </td>
                                 <?php if ($_smarty_tpl->getVariable('type')->value=="zijia_linshi"){?>
                                <td style="text-align: center;">
                                   <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['paiche_pintainum']) ? $_smarty_tpl->tpl_vars['rows']->value['paiche_pintainum'] : null);?>

                                </td>
                               
                                <td style="text-align: center;">
                                   <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['paiche_linker']) ? $_smarty_tpl->tpl_vars['rows']->value['paiche_linker'] : null);?>

                                </td>
                                <?php }?>
                                <td style="text-align: center;">
                                   <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['rows']->value['paiche_startDate'] : null);?>
~~ <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['paiche_startDate']) ? $_smarty_tpl->tpl_vars['rows']->value['paiche_startDate'] : null);?>

                                </td>
                                <td style="text-align: center;">
                                    <input type="text" class="form-control input-sm" name="money_a[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['money']) ? $_smarty_tpl->tpl_vars['rows']->value['money'] : null);?>
" readonly="readonly" unselectable="on"  />
                                   
                                </td>
                                <td style="text-align: center;">
                                   <input type="text" class="form-control input-sm" name="moneys[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['money']) ? $_smarty_tpl->tpl_vars['rows']->value['money'] : null);?>
" onchange="jisuan()"  />
                                </td>
                                <td style="text-align: center;">
                                    <?php if ($_smarty_tpl->getVariable('type')->value=="zijia_linshi"){?>
                                  <a href="../zijia_linshi/zijia_detail.php?uid=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['rows']->value['paiche_id'] : null);?>
" title="明细" style="color:#CC6600" target="_blank">
                                          <i class="iconfont icon-mingxi1" aria-hidden="true"></i>
                                   </a>
                                   <?php }elseif($_smarty_tpl->getVariable('type')->value=="daijia_linshi"){?>
                                    <a href="../daijia_linshi/index.php?task=mingxi&pid=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['rows']->value['paiche_id'] : null);?>
" title="明细" style="color:#CC6600" target="_blank">
                                          <i class="iconfont icon-mingxi1" aria-hidden="true"></i>
                                   </a>
                                   <?php }elseif($_smarty_tpl->getVariable('type')->value=="diaoche"){?>
                                    <a href="../daijia_linshi/index.php?task=mingxi&pid=<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['paiche_id']) ? $_smarty_tpl->tpl_vars['rows']->value['paiche_id'] : null);?>
" title="明细" style="color:#CC6600" target="_blank">
                                          <i class="iconfont icon-mingxi1" aria-hidden="true"></i>
                                   </a>
                                   <?php }?>
                                </td>
                                
                            </tr>
                            
                            <?php }} ?>

                        </tbody>
                         
                    </table>

                    <table class="table table-bordered" class="shiji">
                                    <tr>
                                        
                                        <th style="background-color:#F5F5F6" width="15%">
                                            <span style="color:#000">总金额：</span>
                                        </th>
                                        <td width="35%">
                                            <input type="text" class="form-control input-sm" name="money" id="money" value="<?php echo $_smarty_tpl->getVariable('money')->value;?>
" readonly="readonly" unselectable="on">
                                        </td>

                                        <th style="background-color:#F5F5F6" width="15%">
                                            
                                        </th>
                                        <td width="35%">
                                            
                                        </td>
                                    </tr>

                                    <tr>
                                        <th style="background-color:#F5F5F6" width="15%">
                                            <span style="color:#000">付款方式：</span>
                                        </th>
                                        <td width="35%">
                                            <select class="form-control input-sm" id="payment_id" name="payment_id" onchange="xdd()">
                                            <option  value="0">请选择</option>

                                            </option>
                                                <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('payments_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                                    <option  value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_id']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_id'] : null);?>
">
                                                        <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['payment_name']) ? $_smarty_tpl->tpl_vars['rows']->value['payment_name'] : null);?>

                                                    </option>
                                                <?php }} ?>
                                            </select>
                                        </td>
                                        <th style="background-color:#F5F5F6" width="15%">
                                            <span style="color:#000">账户：</span>
                                        </th>
                                        <td width="35%">
                                            <select class="form-control input-sm" id="bank_id" name="bank_id">
                                                
                                            </select>
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
        var payment_id=parseInt($("#payment_id").val());
        var bank_id=parseInt($("#bank_id").val());
        if(!payment_id>0){
            alert('请选择收款方式！');
            return false;
        }
        if(!bank_id>0){
            alert('请选择收款账户！');
            return false;
        }
    });

   
    jisuan();
    
    function jisuan(){
        
        var money=0;
        var moneys =  $("input[name='moneys[]']");
        var money_a=$("input[name='money_a[]']");
       
        
        for(var i=0;i<moneys.length;i++){
            if(parseFloat(money_a.eq(i).val())>0){
                if(parseFloat(moneys.eq(i).val())>parseFloat(money_a.eq(i).val())||parseFloat(moneys.eq(i).val())<0){
                    alert("收入金额不能大于应收的总金额或小于0！");
                    moneys.eq(i).val(money_a.eq(i).val());
                }
            }else{
                if(parseFloat(moneys.eq(i).val())<parseFloat(money_a.eq(i).val())||parseFloat(moneys.eq(i).val())>0){
                    alert("支出金额不能小于支出的总金额或大于0！");
                    moneys.eq(i).val(money_a.eq(i).val());
                }
            }
            
            money=money+parseFloat(moneys.eq(i).val());
            
        }
         $("#money").val(money);
    }
    function xdd(){
        var paymentsVal = $("#payment_id option:selected").val();
        var html
        //console.log(paymentsVal);
        if(paymentsVal==1){
            html += "<option value='1'>现金账</option>";
        }else if(paymentsVal==2){
            html += "<option value='5'>农行都市桃源支行-运河租车</option><option value='15'>农行金色新城支行-兰博租车</option><option value='18'>常州市运河汽车租赁有限公司无锡分公司</option>"
        }else if(paymentsVal==3){
            html += "<option value='12'>中国建设银行——蒋政</option><option value='13'>中国农业银行——蒋政</option><option value='10'>中国工商银行——蒋政</option><option value='11'>中国银行——蒋政</option><option value='16'>中国建设银行(提现)——蒋政</option><option value='6'>蒋政——建行</option><option value='8'>押金账</option><option value='17'>备用金账</option>"
        }
        $("#bank_id").html(html);
    }
   
    
       
    
   
    

</script>
</html>
