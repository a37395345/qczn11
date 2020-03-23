<?php /* Smarty version Smarty-3.0.4, created on 2019-11-08 13:23:19
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/renshi/add_gongzhi_type.html" */ ?>
<?php /*%%SmartyHeaderCode:231515dc4fbc7a9d674-58415965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5879bd3df9d052901ae937fa29cbf1e14b2f81ae' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/renshi/add_gongzhi_type.html',
      1 => 1573190597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '231515dc4fbc7a9d674-58415965',
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
<link href="../../../../css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../../../../css/webuploader.css">
<link rel="stylesheet" type="text/css" href="../../../../css/diyUpload.css">
<link href="../../../crm/css/animate.min.css" rel="stylesheet">
<script src="../../../../jquery.js"></script>
<script type="text/javascript" src="../../../../js/common.js"></script>
<script type="text/javascript" src="../../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../../js/check_form.js"></script>
</head>
<style>
/**/
	.navi_name{font-size:14px;font-weight:bold;}
	.indent{padding-left:40px;}
  #box{width:840px; min-height:200px; background:#FF9}
  .gray-bg{
      background-color: #f3f3f4;
      padding: 20px;
    }
    .xt_problems{
      padding: 0 20px 20px 20px;
      background-color: #fff; 
      border-top:4px solid #e7eaec;
    }
    .xt_problems .form2 .lineD{
      border-bottom: none;
    }
    .page_btm{
      border-top:none;
    }
    .xt_problems .table{
      width: 100%;
      max-width: 100%;
      margin-bottom: 20px;
      border-spacing: 0;
      border-collapse: collapse;
    }
    .xt_problems .table tr th{
      padding: 12px 8px 12px 8px;
      border-top: 1px solid #e7e7e7;
      border-left: 1px solid #e7e7e7;
      border-bottom: 1px solid #e7e7e7;
    }
    .xt_problems .table tr td{
      border-top: 1px solid #e7e7e7;
      border-left: 1px solid #e7e7e7;
      border-right: 1px solid #e7e7e7;
      border-bottom: 1px solid #e7e7e7;
    }
    .xt_problems .table tr td input{
      height: 28px;
      border: 1px solid #e5e6e7;
      width: 100%;
      text-indent: 1em;
    }
    .xt_problems .table tr td select{
      width: 100%;
      height: 32px;
      line-height: 32px;
      border: 1px solid #ddd;
      padding-left: 10px;
    }
    .page_btm{
      padding: 18px 0 18px 0;
    }
    .page_btm input{
      display: inline-block;
      width: 97px;
      height: 34px;
      color: inherit;
      background: transparent;
      border: 1px solid #c2c2c2;
      border-radius: 3px;
    }
    .btn_b:hover{
      background-color: #bababa;
      border-color: #bababa;
      color: #FFF;
    }
    input:focus{outline:none;}
    select:focus{outline:none;}
/**/
</style>
<body class="gray-bg wrapper-content animated fadeInRight">
<div class="xt_problems">
<div class="so_main">
  <div class="page_tit"><?php if ($_smarty_tpl->getVariable('op')->value=="add"){?>添加项目<?php }else{ ?>修改项目<?php }?></div>
  <form method="post" action="insert_gongzhi_type.php" enctype="multipart/form-data" onsubmit="return check(this)">
  <div class="form2">
    <table class="table table-bordered" width="100%" border="0" cellpadding="0" cellspacing="0">
      <tbody>
        <tr>
          <th style="background-color:#F5F5F6;" width="15%">项目名称：</th>
          <td style="padding: 8px;" width="35%"><input type="text" id="type_name" name="type_name" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['type_name']) ? $_smarty_tpl->getVariable('list')->value['type_name'] : null);?>
" placeholder="必填" /></td>
          <th style="background-color:#F5F5F6;">项目单位：</th>
          <td style="padding: 8px;" width="35%"><input type="text" id="type_danwei" name="type_danwei" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['type_danwei']) ? $_smarty_tpl->getVariable('list')->value['type_danwei'] : null);?>
" placeholder="必填" /></td>
        </tr>
        <tr>
          <th style="background-color:#F5F5F6;" width="15%">计算方式：</th>
          <td style="padding: 8px;" width="35%">
            <select name="type_jisuan" id="type_jisuan">
              <option value="1" <?php if ((isset($_smarty_tpl->getVariable('list')->value['type_jisuan']) ? $_smarty_tpl->getVariable('list')->value['type_jisuan'] : null)>0){?>selected <?php }?>>加</option>
              <option value="-1" <?php if ((isset($_smarty_tpl->getVariable('list')->value['type_jisuan']) ? $_smarty_tpl->getVariable('list')->value['type_jisuan'] : null)<0){?>selected <?php }?>>减</option>
            </select>
          </td>
          <th style="background-color:#F5F5F6;" width="15%">次数许可(<span style="color: #9e9a9a;">例如全勤每月只有一次，迟到可以有很多次</span>)：</th>
          <td style="padding: 8px;" width="35%">
            <select style="width: 100%;" name="type_shuliang" id="type_shuliang">
                  <option value="1" <?php if ((isset($_smarty_tpl->getVariable('list')->value['type_shuliang']) ? $_smarty_tpl->getVariable('list')->value['type_shuliang'] : null)==1){?>selected <?php }?>>每月1次</option>
                  <option value="2" <?php if ((isset($_smarty_tpl->getVariable('list')->value['type_shuliang']) ? $_smarty_tpl->getVariable('list')->value['type_shuliang'] : null)==2){?>selected <?php }?>>每月多次</option>
            </select>&nbsp;&nbsp;&nbsp;
          </td>
        </tr>
        <tr>
          <th style="background-color:#F5F5F6;" width="15%">基础数据(<span style="color:#9e9a9a;">例如超公里需要的基础公里数，其他填0即可</span>)：</th>
          <td style="padding: 8px;" width="35%">
            <input onkeyup='value=value.replace(/[^A-Za-z0-9\.]+/g,"")' style="width: 100%;" type="text" id="type_jishu" name="type_jishu" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['type_jishu']) ? $_smarty_tpl->getVariable('list')->value['type_jishu'] : null);?>
" />
        &nbsp;&nbsp;&nbsp;
          </td>
          <th style="background-color:#F5F5F6;" width="15%">规则说明：</th>
          <td style="padding: 8px;" width="35%">
            <input type="text" id="type_guize" name="type_guize" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['type_guize']) ? $_smarty_tpl->getVariable('list')->value['type_guize'] : null);?>
" placeholder="必填" />
          </td>
        </tr>
      </tbody>
    </table>

    <div class="page_btm" style="text-align: center;">
      <input style="cursor: pointer;" type="submit" class="btn_b" id="bt1" value="确定" />
    </div>
    <input type="hidden" name="id" id="id" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['id']) ? $_smarty_tpl->getVariable('list')->value['id'] : null);?>
" />
  </div>
</div>
</div>

<script>
$("#bt1").click(function(){
	var type_name=$("#type_name").val();
	var type_danwei=$("#type_danwei").val();
	var type_jisuan=$("#type_jisuan").val();
	var type_guize = $("#type_guize").val();
	if(!type_name){
		alert('项目名称不能为空！');
		return false;
	}
	if(!type_danwei){
		alert('项目单位不能为空！');
		return false;
	}
	if(!type_jisuan){
		alert('计算方式不能为空！');
		return false;
	}
  if(!type_guize){
    alert("规则说明不能为空！");
    return false;
  }
});
</script>
</body>
</html>