<?php /* Smarty version Smarty-3.0.4, created on 2014-05-06 17:19:28
         compiled from "D:\Phpserv\elsker\admincp\site\templates\elsker\operator/testimonial/create.html" */ ?>
<?php /*%%SmartyHeaderCode:3695368a92000f091-53638874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4feeea2a63c3358352c2d1399dc284ec01f1c2a3' => 
    array (
      0 => 'D:\\Phpserv\\elsker\\admincp\\site\\templates\\elsker\\operator/testimonial/create.html',
      1 => 1399211509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3695368a92000f091-53638874',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>管理后台</title>
<link href="/admincp/css/style.css" rel="stylesheet" type="text/css">
<link href="/admincp/css/box.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/admincp/js/jquery.js"></script>
<script type="text/javascript" src="/admincp/js/common.js"></script>
<script type="text/javascript" src="/admincp/js/box.js"></script>
<script type="text/javascript" src="/admincp/js/date_select.js"></script>
<script type="text/javascript" src="/admincp/js/city.js"></script>
<script type="text/javascript" src="/admincp/js/calendar.js"></script>
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
/**/
</style>
</head>
<body>
<div class="so_main">
  <div class="page_tit">编辑</div>
  
  <form method="post" action="insert.php" enctype="multipart/form-data" onsubmit="return check(this)" name="form1">
  <input type="hidden" id="serials_id" value="<?php echo (isset($_smarty_tpl->getVariable('testimonial')->value['serials_id']) ? $_smarty_tpl->getVariable('testimonial')->value['serials_id'] : null);?>
" />
  <input type="hidden" id="product_id" value="<?php echo (isset($_smarty_tpl->getVariable('testimonial')->value['prodid']) ? $_smarty_tpl->getVariable('testimonial')->value['prodid'] : null);?>
" />
  <div class="form2">
    <dl class="lineD">
      <dt>产品名称：</dt>
      <dd>
        <select name="cate_id" id="cate_id" >
	  <option value="0">-请选择产品系列-</option>
	    <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cate5List')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null)==(isset($_smarty_tpl->getVariable('testimonial')->value['serials_id']) ? $_smarty_tpl->getVariable('testimonial')->value['serials_id'] : null)){?>selected<?php }else{ ?><?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>
</option>
	  	<?php }} ?>
	  </select>---
		<select name="prod_id" id="prod_id">
	  <option value="0">-请选择产品-</option>
	    <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('prodList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	  <option  value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['pid']) ? $_smarty_tpl->tpl_vars['rows']->value['pid'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['pid']) ? $_smarty_tpl->tpl_vars['rows']->value['pid'] : null)==(isset($_smarty_tpl->getVariable('testimonial')->value['prodid']) ? $_smarty_tpl->getVariable('testimonial')->value['prodid'] : null)){?>selected<?php }else{ ?><?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['name']) ? $_smarty_tpl->tpl_vars['rows']->value['name'] : null);?>
</option>
	  	<?php }} ?>
		</select> *
	  </dd>
    </dl>
    <!-- 
    <dl class="lineD">
      <dt>KV图片：</dt>
      <dd>
        <input type="file" name="pic" value="<?php echo (isset($_smarty_tpl->getVariable('testimonial')->value['images']) ? $_smarty_tpl->getVariable('testimonial')->value['images'] : null);?>
"/> *图片尺寸：580x400    <a href="/thumb/<?php echo (isset($_smarty_tpl->getVariable('testimonial')->value['images']) ? $_smarty_tpl->getVariable('testimonial')->value['images'] : null);?>
" class="zoomIn" title="点击查看"><?php echo (isset($_smarty_tpl->getVariable('testimonial')->value['images']) ? $_smarty_tpl->getVariable('testimonial')->value['images'] : null);?>
</a>
      </dd>
    </dl>
     -->
	<dl class="lineD">
      <dt>状态：</dt>
      <dd>
    
	  <input type="radio" name="status"  value="1" <?php if ((isset($_smarty_tpl->getVariable('testimonial')->value['status']) ? $_smarty_tpl->getVariable('testimonial')->value['status'] : null)==1){?>checked<?php }else{ ?><?php }?>>正常
	  <input type="radio" name="status"  value="0" <?php if ((isset($_smarty_tpl->getVariable('testimonial')->value['status']) ? $_smarty_tpl->getVariable('testimonial')->value['status'] : null)==0){?>checked<?php }else{ ?><?php }?>>冻结
	  </dd>
    </dl>
	
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" />
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('testimonial')->value['pid']) ? $_smarty_tpl->getVariable('testimonial')->value['pid'] : null);?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" /></form>
</div>
<script type="text/javascript">
	 var areaMap = new AreaMap('province','city');	
		 areaMap.province(document.getElementById("province_0").value,document.getElementById("city_0").value);		
</script>
<script type="text/javascript">	
	$(document).ready(function(){
		$(".subnavi").click(function(){
			var checked = false;
			$(this).parent().parent().find(".subnavi").each(function(){
				if($(this).attr("checked")){
					checked = true;
				}
			});
			var navi = $(this).parent().parent().parent().find(".navi");
			if(checked){
				navi.attr("checked",true);
			}else{
				navi.attr("checked",false);
			}
		});
		$(".navi").click(function(){
			$(this).parent().find(".subnavi").attr("checked",$(this).attr("checked"));
		});
		
		$("#cate_id").change(function(){
            //alert('aa');
            $this = $(this);
            var cate_id = $this.val();
            $.get('list.php',
            {
                task:'getProdList',
                cate_id:cate_id
            },function(data){
                var obj = eval("("+data+")");        
                    $("#prod_id").empty();
                    $("#prod_id").append("<option value=''>-请选择 产品-</option>");                  
                if (obj.result == 'OK')
                { 
                    var prodList = obj.prodList;
                    var ser="";
                    for(var i = 0, len = prodList.length; i < len; i++)
                    {
                    	if ($("#product_id").val() && $("#product_id").val()==prodList[i]['pid']){
                    		ser="selected";
                    	}else{
                    		ser="";
                    	}
                        $("#prod_id").append("<option value='"+prodList[i]['pid']+"' "+ser+">"+prodList[i]['name']+"</option>");   
                    }
                }
            }); 
        });
		
		if ($("#serials_id").val()){
			$("#cate_id").change();
		}
                 
	});
	function check(_form){		
		if(_form.prod_id.value==""){
			alert("请选择产品！");
			_form.prod_id.focus();
			return false;
		}
						
		return true;
	}
</script>
</body>
</html>