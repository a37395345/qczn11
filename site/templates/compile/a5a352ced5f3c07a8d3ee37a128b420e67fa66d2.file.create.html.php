<?php /* Smarty version Smarty-3.0.4, created on 2014-05-04 15:23:51
         compiled from "D:\Phpserv\elsker\admincp\site\templates\elsker\operator/promotion/create.html" */ ?>
<?php /*%%SmartyHeaderCode:82145365eb070ebfa2-64368168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5a352ced5f3c07a8d3ee37a128b420e67fa66d2' => 
    array (
      0 => 'D:\\Phpserv\\elsker\\admincp\\site\\templates\\elsker\\operator/promotion/create.html',
      1 => 1399188165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82145365eb070ebfa2-64368168',
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
    
  <div class="form2">
    <dl class="lineD">
      <dt>标题：</dt>
      <dd>
        <input type="text" name="title" value="<?php echo (isset($_smarty_tpl->getVariable('promotion')->value['title']) ? $_smarty_tpl->getVariable('promotion')->value['title'] : null);?>
" /> *
	  </dd>
    </dl>
    <dl class="lineD">
      <dt>促销图片：</dt>
      <dd>
        <input type="file" name="pic" value="<?php echo (isset($_smarty_tpl->getVariable('promotion')->value['pic']) ? $_smarty_tpl->getVariable('promotion')->value['pic'] : null);?>
"/> *图片尺寸：2048x1244 <a href="/thumb/<?php echo (isset($_smarty_tpl->getVariable('promotion')->value['pic']) ? $_smarty_tpl->getVariable('promotion')->value['pic'] : null);?>
" class="zoomIn" title="点击查看"><?php echo (isset($_smarty_tpl->getVariable('promotion')->value['pic']) ? $_smarty_tpl->getVariable('promotion')->value['pic'] : null);?>
</a>
      </dd>
    </dl>

    <dl class="lineD">
      <dt>省市：</dt>
      <dd> 
	  <select name="province_id" id="province_id" >
	  <option value="">-请选择省份-</option>
	    <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('province')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	  <option  value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['province_id']) ? $_smarty_tpl->tpl_vars['rows']->value['province_id'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['province_id']) ? $_smarty_tpl->tpl_vars['rows']->value['province_id'] : null)==(isset($_smarty_tpl->getVariable('promotion')->value['province_id']) ? $_smarty_tpl->getVariable('promotion')->value['province_id'] : null)){?>selected<?php }else{ ?><?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>
</option>
	  	<?php }} ?>
	  </select>
---
		<select name="city_id" id="city_id">
	  <option value="">-请选择城市-</option>
	    <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('city')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	  <option  value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['city_id']) ? $_smarty_tpl->tpl_vars['rows']->value['city_id'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['rows']->value['city_id']) ? $_smarty_tpl->tpl_vars['rows']->value['city_id'] : null)==(isset($_smarty_tpl->getVariable('promotion')->value['city_id']) ? $_smarty_tpl->getVariable('promotion')->value['city_id'] : null)){?>selected<?php }else{ ?><?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>
</option>
	  	<?php }} ?>
		</select>
		*	  </dd>
    </dl>
    <dl class="lineD">
      <dt>所属渠道：</dt>
      <dd>
      	<input type="hidden" id="old_channel_id" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['channel_id']) ? $_smarty_tpl->getVariable('list')->value['channel_id'] : null);?>
" />
        	  <?php if ((isset($_smarty_tpl->getVariable('cate7List')->value[0]['multi_choice']) ? $_smarty_tpl->getVariable('cate7List')->value[0]['multi_choice'] : null)==1){?>
                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cate7List')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                  <input type="checkbox" name="channel_id[]" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" id="channel_id" class="subnavi" /><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>

                  <?php }} ?>
              <?php }else{ ?>
                  <select name="effect_id" >
                      <option value="">请选择</option>
                      <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('cate7List')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
                      <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null);?>
" <?php if ((isset($_smarty_tpl->getVariable('list')->value['effect_id']) ? $_smarty_tpl->getVariable('list')->value['effect_id'] : null)==(isset($_smarty_tpl->tpl_vars['rows']->value['id']) ? $_smarty_tpl->tpl_vars['rows']->value['id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['title']) ? $_smarty_tpl->tpl_vars['rows']->value['title'] : null);?>
</option>
                      <?php }} ?>
                  </select>
              <?php }?> *
	  </dd>
    </dl>
	<dl class="lineD">
      <dt>开始时间：</dt>
      <dd>
         <input type="text" name="start_time"  id="start_time" value="<?php echo (isset($_smarty_tpl->getVariable('promotion')->value['start_time']) ? $_smarty_tpl->getVariable('promotion')->value['start_time'] : null);?>
" onClick="calendar.show(this);" />
      </dd>
    </dl>
    <dl class="lineD">
      <dt>结束时间：</dt>
      <dd>
         <input type="text" name="end_time"  id="end_time" value="<?php echo (isset($_smarty_tpl->getVariable('promotion')->value['end_time']) ? $_smarty_tpl->getVariable('promotion')->value['end_time'] : null);?>
" onClick="calendar.show(this);" />
      </dd>
    </dl>
	
	<dl class="lineD">
      <dt>状态：</dt>
      <dd>
    
	  <input type="radio" name="is_active"  value="1" <?php if ((isset($_smarty_tpl->getVariable('promotion')->value['is_active']) ? $_smarty_tpl->getVariable('promotion')->value['is_active'] : null)==1){?>checked<?php }else{ ?><?php }?>>正常
	  <input type="radio" name="is_active"  value="0" <?php if ((isset($_smarty_tpl->getVariable('promotion')->value['is_active']) ? $_smarty_tpl->getVariable('promotion')->value['is_active'] : null)==0){?>checked<?php }else{ ?><?php }?>>冻结
	  </dd>
    </dl>
	
    <div class="page_btm">
      <input type="submit" class="btn_b" value="确定" />
    </div>
  </div>
  <input type="hidden" name="uid" value="<?php echo (isset($_smarty_tpl->getVariable('promotion')->value['promotion_id']) ? $_smarty_tpl->getVariable('promotion')->value['promotion_id'] : null);?>
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
		
		var sel_channel_id=$("#old_channel_id").val();
		if (sel_channel_id!=''){
			var b = sel_channel_id.split(","); 
			for (var i=0;i<b.length;i++) {
				$("[value='"+b[i]+"']").attr("checked",'true');
			}
		}
        
        
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
	function check(_form){		
		if(_form.title.value==""){
			alert("请输入资讯标题！");
			_form.title.focus();
			return false;
		}
		if(_form.task.value!="update"){
            if(_form.pic.value==""){
            alert("请选择图片文件上传!");
            _form.pic.focus();
            return false;
            }
		}
		if(_form.start_time.value==""){
			alert("请选择开始时间！");
			_form.start_time.focus();
			return false;
		}
		if(_form.end_time.value==""){
			alert("请选择结束时间！");
			_form.end_time.focus();
			return false;
		}
		
		return true;
	}
</script>
</body>
</html>