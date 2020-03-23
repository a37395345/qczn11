<?php /* Smarty version Smarty-3.0.4, created on 2014-04-08 22:13:47
         compiled from "D:\Phpserv\elsker\admincp\site\templates\elsker\operator/employee/create.html" */ ?>
<?php /*%%SmartyHeaderCode:30535344041bb42bd0-99966985%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3f69320ea30f32f61e074f7b8b5cb90c4c1cf34' => 
    array (
      0 => 'D:\\Phpserv\\elsker\\admincp\\site\\templates\\elsker\\operator/employee/create.html',
      1 => 1396966412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30535344041bb42bd0-99966985',
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
  
  <form method="post" action="insert.php" >
    
  <div class="form2">
  <?php if ($_smarty_tpl->getVariable('task')->value=="update"){?>
       <dl class="lineD">
      <dt>编号：</dt>
      <dd>
       <?php echo (isset($_smarty_tpl->getVariable('employee')->value['em_no']) ? $_smarty_tpl->getVariable('employee')->value['em_no'] : null);?>

	  </dd>
    </dl>
<?php }?>

    <dl class="lineD">
      <dt>省市：</dt>
      <dd> 
	  <select name="province_id" id="province_id" >
	  <option value="0">-请选择省份-</option>
	    <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('province')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	  <option  value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['province_id']) ? $_smarty_tpl->tpl_vars['rows']->value['province_id'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['province_id']) ? $_smarty_tpl->tpl_vars['rows']->value['province_id'] : null)==(isset($_smarty_tpl->getVariable('employee')->value['province_id']) ? $_smarty_tpl->getVariable('employee')->value['province_id'] : null)){?>selected<?php }else{ ?><?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>
</option>
	  	<?php }} ?>
	  </select>
---
		<select name="city_id" id="city_id">
	  <option value="0">-请选择城市-</option>
	    <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('city')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	  <option  value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['city_id']) ? $_smarty_tpl->tpl_vars['rows']->value['city_id'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['city_id']) ? $_smarty_tpl->tpl_vars['rows']->value['city_id'] : null)==(isset($_smarty_tpl->getVariable('employee')->value['city_id']) ? $_smarty_tpl->getVariable('employee')->value['city_id'] : null)){?>selected<?php }else{ ?><?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>
</option>
	  	<?php }} ?>
		</select>
		*	  </dd>
    </dl>
	
	
    <dl class="lineD">
      <dt>姓名：</dt>
      <dd>
        <input type="text" name="realname" value="<?php echo (isset($_smarty_tpl->getVariable('employee')->value['realname']) ? $_smarty_tpl->getVariable('employee')->value['realname'] : null);?>
" /> *
	  </dd>
    </dl>
<!--
	 <dl class="lineD">
      <dt>编号：</dt>
      <dd>
        <input type="text" name="serial_number" value="<?php echo (isset($_smarty_tpl->getVariable('employee')->value['serial_number']) ? $_smarty_tpl->getVariable('employee')->value['serial_number'] : null);?>
"/>
	  </dd>
    </dl>
-->	
	  <dl class="lineD">
      <dt>级别：</dt>
      <dd>
              <select name="level_id" >
                  <option value="0">请选择</option>
                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('levelList')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('employee')->value['power']) ? $_smarty_tpl->getVariable('employee')->value['power'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>
</option>
                  <?php }} ?>
              </select>
      </dd>
    </dl>
	
	
    <dl class="lineD">
      <dt>密码：</dt>
      <dd>
        <input type="text" name="password" value="" /> * <?php if ($_smarty_tpl->getVariable('task')->value=="update"){?>(不修改密码请留空。)<?php }?>
	  </dd>
    </dl>


	 <dl class="lineD">
      <dt>状态：</dt>
      <dd>
    
	  <input type="radio" name="is_active"  value="1" <?php if ((isset($_smarty_tpl->getVariable('employee')->value['is_active']) ? $_smarty_tpl->getVariable('employee')->value['is_active'] : null)==1){?>checked<?php }else{ ?><?php }?>>正常
	  <input type="radio" name="is_active"  value="0" <?php if ((isset($_smarty_tpl->getVariable('employee')->value['is_active']) ? $_smarty_tpl->getVariable('employee')->value['is_active'] : null)==0){?>checked<?php }else{ ?><?php }?>>冻结
	  </dd>
    </dl>
	
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" />
    </div>
  </div>
  <input type="hidden" name="aid" value="<?php echo (isset($_smarty_tpl->getVariable('employee')->value['em_id']) ? $_smarty_tpl->getVariable('employee')->value['em_id'] : null);?>
" />
  <input type="hidden" name="task" value="<?php echo $_smarty_tpl->getVariable('task')->value;?>
" /></form>
</div>
<script type="text/javascript">
	 var areaMap = new AreaMap('province','city');	
		 areaMap.province(document.getElementById("province_0").value,document.getElementById("city_0").value);		
</script>
<script type="text/javascript">
	function selectAll(){
		$("input[type='checkbox']").attr("checked",true);
	}
	function unselectAll(){
		$("input[type='checkbox']").attr("checked",false);
	}
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
        
        
        $("#province_id").change(function(){
            //alert('aa');
            $this = $(this);
            var province_id = $this.val();
            $.get('list.php',
            {
                task:'getCityList',
                province_id:province_id
            },function(data){
                var obj = eval("("+data+")");        
                    $("#city_id").empty();
                    $("#city_id").append("<option value=''>-请选择-</option>");                  
                if (obj.result == 'OK')
                { 
                    var cityList = obj.cityList;
                    for(var i = 0, len = cityList.length; i < len; i++)
                    {
                        $("#city_id").append("<option value='"+cityList[i]['city_id']+"'>"+cityList[i]['title']+"</option>");   
                    }
                }
            }); 
        });          
	});
</script>
</body>
</html>