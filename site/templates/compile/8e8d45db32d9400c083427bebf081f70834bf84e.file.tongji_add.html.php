<?php /* Smarty version Smarty-3.0.4, created on 2020-01-04 17:11:05
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/gongzuofu/tongji_add.html" */ ?>
<?php /*%%SmartyHeaderCode:236615e1056a9095579-36538892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e8d45db32d9400c083427bebf081f70834bf84e' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/gongzuofu/tongji_add.html',
      1 => 1571707191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '236615e1056a9095579-36538892',
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
    <script type="text/javascript" src="../../../js/jquery.js"></script>

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        
        <!-- Panel Other -->
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><?php if ($_smarty_tpl->getVariable('jisuan')->value==0){?>添加工作工具<?php }elseif($_smarty_tpl->getVariable('jisuan')->value==1){?>领取工具<?php }else{ ?>退还工具<?php }?></h5>
                <div class="ibox-tools">
                   
                </div>
            </div>
            <form method="post" action="index.php?task=tongji_insert" name="form1">
            <div class="ibox-content">
                <div class="row row-lg">
                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="example-wrap">
                            <div class="example">
								                                
								<table class="table table-bordered">
						
                        <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">工具名称：</span>
                            </th>
                            
                            <td width="35%">
                            <?php if ($_smarty_tpl->getVariable('jisuan')->value==2){?>
                                <input type="text" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['gongzuofu']) ? $_smarty_tpl->getVariable('data')->value['gongzuofu'] : null);?>
" class="form-control input-sm" placeholder="" readonly="readonly" unselectable="on">
                                <input type="hidden" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['gongzuofu_id']) ? $_smarty_tpl->getVariable('data')->value['gongzuofu_id'] : null);?>
" class="form-control input-sm" placeholder="" id="gongzuofu_id">
                            <?php }else{ ?>
                               <select class="form-control input-sm" id="gongzuofu_id" name="gongzuofu_id">
                                            <option value="0">请选择</option>
                                <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('gongzuofu_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                            <option <?php if ((isset($_smarty_tpl->getVariable('data')->value['gongzuofu_id']) ? $_smarty_tpl->getVariable('data')->value['gongzuofu_id'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null)){?>selected<?php }?> value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" kk="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shuliang']) ? $_smarty_tpl->tpl_vars['rows']->value['shuliang'] : null);?>
" ss="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['sshuliang']) ? $_smarty_tpl->tpl_vars['rows']->value['sshuliang'] : null);?>
">
                                                <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['name']) ? $_smarty_tpl->tpl_vars['rows']->value['name'] : null);?>

                                            </option>
                                 <?php }} ?>
                                </select>
                            <?php }?>
                            </td>

                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">数量：</span>
                            </th>
                            <td width="35%">
                               <input type="text" id="shuliang" name="shuliang" value="<?php if ($_smarty_tpl->getVariable('jisuan')->value==0){?><?php echo (isset($_smarty_tpl->getVariable('data')->value['sshuliang']) ? $_smarty_tpl->getVariable('data')->value['sshuliang'] : null);?>
<?php }else{ ?><?php echo (isset($_smarty_tpl->getVariable('data')->value['shuliang']) ? $_smarty_tpl->getVariable('data')->value['shuliang'] : null);?>
<?php }?>" class="form-control input-sm" placeholder="" >
                            </td>
                        </tr>
                        <?php if ($_smarty_tpl->getVariable('jisuan')->value==1){?>
                            <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">员工姓名：</span>
                            </th>
                            <td width="35%">
                                <select class="form-control input-sm" id="emp_id" name="emp_id" style="float: left;width: 35%">
                                            <option value="0">请选择</option>
                                <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('emp_list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                                            <option <?php if ((isset($_smarty_tpl->getVariable('data')->value['emp_id']) ? $_smarty_tpl->getVariable('data')->value['emp_id'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['emp_id']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_id'] : null)){?>selected<?php }?> value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_id']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_id'] : null);?>
">
                                  <?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['emp_name']) ? $_smarty_tpl->tpl_vars['rows']->value['emp_name'] : null);?>

                                            </option>
                                 <?php }} ?>
                                </select>

                                <input type="text" class="form-control input-sm"  style="float: left;width: 25%;margin-left:20px" id="name1" placeholder="关键字">

                                <input type="button" name="" value="点击" style="display: block;float: left;width:15% ;margin-left:20px" id="bt1" >
                            </td>

                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">收取押金：</span>
                            </th>
                            <td width="35%">
                               <input type="text" id="money" name="money" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['smoney']) ? $_smarty_tpl->getVariable('data')->value['smoney'] : null);?>
" class="form-control input-sm" placeholder="" readonly="readonly" unselectable="on">
                            </td>
                            </tr>
                        <?php }elseif($_smarty_tpl->getVariable('jisuan')->value==2){?>
                            <tr>
                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">员工姓名：</span>
                            </th>
                            <td width="35%">
                                <input type="text"  value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['emp_name']) ? $_smarty_tpl->getVariable('data')->value['emp_name'] : null);?>
" class="form-control input-sm" placeholder="" readonly="readonly" unselectable="on">
                            </td>

                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">退还押金：</span>
                            </th>
                            <td width="35%">
                               <input type="text" id="money" name="money" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['smoney']) ? $_smarty_tpl->getVariable('data')->value['smoney'] : null);?>
" class="form-control input-sm" placeholder="" readonly="readonly" unselectable="on">
                            </td>
                            </tr>
                        <?php }?>


                        <tr>

                            <th style="background-color:#F5F5F6" width="15%">
                                <span style="color:#000">备注：</span>
                            </th>
                            <td width="35%">
                               <input type="text" id="shuoming" name="shuoming" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['shuoming']) ? $_smarty_tpl->getVariable('data')->value['shuoming'] : null);?>
" class="form-control input-sm" placeholder="">
                            </td>
                            <?php if ($_smarty_tpl->getVariable('jisuan')->value==0){?>
                                <th style="background-color:#F5F5F6" width="15%">
                                    <span style="color:#000">金额：</span>
                                </th>
                                <td width="35%">
                                   <input type="text" id="money" name="money" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['emoney']) ? $_smarty_tpl->getVariable('data')->value['emoney'] : null);?>
" class="form-control input-sm" placeholder="" >
                                </td>

                            <?php }?>
                            
                            
						</tr>
						
						
						
					</table>
                    <input type="hidden" name="jisuan" id="jisuan" value="<?php echo $_smarty_tpl->getVariable('jisuan')->value;?>
" />

                    <input type="hidden"  id="shuliang_a" value="<?php echo (isset($_smarty_tpl->getVariable('data')->value['shuliang']) ? $_smarty_tpl->getVariable('data')->value['shuliang'] : null);?>
" />


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
    
    <script src="../../../crm/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
    <script src="../../../crm/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
    <script src="../../../crm/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
    <script src="../../../crm/js/demo/bootstrap-table-demo.min.js"></script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
    
</body>
<script>    
   

    function yanzheng_a(){
        
        var jisuan=$("#jisuan").val();
        if(jisuan==1){
            getJiage();
        }else if(jisuan==2){
            yanzheng();
        }
    }

    function getJiage(){
        var shuliang_a=parseInt($("#shuliang_a").val());
        if(!(shuliang_a>0)){
            shuliang_a=0;
        }
        var gongzuofu_id=parseInt($("#gongzuofu_id").val());
        var shuliang=parseInt($("#shuliang").val());
        if(gongzuofu_id>0){
           var ss=parseInt($("#gongzuofu_id").find("option:selected").attr("ss"));
           var kk=parseInt($("#gongzuofu_id").find("option:selected").attr("kk"));
           if(shuliang>(ss-kk+shuliang_a)){
                alert("最大领取数为"+(ss-kk+shuliang_a));
                $("#shuliang").val(ss-kk+shuliang_a);
                
           }
        }else{
            alert("请先选择工具！");
            $("#shuliang").val("");
            
        }
        
    } 


    function yanzheng(){
        
        var jisuan=$("#jisuan").val();
        var shuliang_a=parseInt($("#shuliang_a").val());
        var shuliang=parseInt($("#shuliang").val());
        
        if(shuliang>shuliang_a){
            alert("最大退还数量为："+shuliang_a);
            $("#shuliang").val(shuliang_a);

        }
        
    }
                                
                                $("#bt1").click(function(){
                                   
                                    var name=$('#name1').val();
                                    $.ajax({
                                        type:'POST',
                                        url:"index.php?task=getsiji",
                                        data:{"name":name},
                                        success:function(result){
        
                                            $("#emp_id").find("option").remove();
                                            var list=JSON.parse (result);
                                            for(var i=0;i<list.length;i++){
                                                $("#emp_id").append("<option value='"+list[i]['emp_id']+"'>"+list[i]['emp_name']+"</option>");
                                            }
                                            
                                            
                                        }
                                    });
                                })
                                $("#shuliang").blur(function(){
                                    yanzheng_a();
                                     jisuan();
                                });

                                $('#gongzuofu_id').change(function(){
                                    yanzheng_a();
                                    jisuan();
                                });

                
                                $("#submit").click(function(){
                                    var jisuan=parseInt($("#jisuan").val());
                                    var gongzuofu_id=parseInt($("#gongzuofu_id").val());
                                    var shuliang=parseInt($('#shuliang').val());
                                    if(!(gongzuofu_id>0)){
                                        alert("请选择工具名称！");
                                        return false;
                                    }
                                    if(!(shuliang>0)){
                                        alert("请填写数量！");
                                        return false;
                                    }

                                    if(jisuan==1){
                                        var emp_id=parseInt($("#emp_id").val());

                                        if(!(emp_id>0)){
                                            alert("请选择员工！");
                                            return false;
                                        }
                                    }else if(jisuan==2){

                                    }
                                });
                                </script>

                                <script>
                                function jisuan(){
                                    var jisuan=parseInt($("#jisuan").val());
                                     var gongzuofu_id=parseInt($('#gongzuofu_id').val());
                                     var shuliang=parseInt($('#shuliang').val());
                                     if(!(shuliang)>0){
                                        shuliang=0;
                                     }
                                    
                                     if(jisuan>0){
                                        if(gongzuofu_id){
                                            $.ajax({
                                                type:'POST',
                                                url:"index.php?task=get_smoney",
                                                data:{"gongzuofu_id":gongzuofu_id,"shuliang":shuliang
                                                    },
                                                success:function(result){
                                                    $('#money').val(result);
                                                }
                                            });
                                         }  
                                     }
                                     
                                }
                        </script>
    

<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->
</html>
