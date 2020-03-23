<?php /* Smarty version Smarty-3.0.4, created on 2019-12-10 13:54:19
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/machine/update_price.html" */ ?>
<?php /*%%SmartyHeaderCode:68075def330b252aa8-50245825%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6811e549f3ca66001940dc0f796937f4ea02bd1f' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/machine/update_price.html',
      1 => 1575957255,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68075def330b252aa8-50245825',
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
<link href="../../../../css/box.css" rel="stylesheet" type="text/css" />
<link href="../../../../crm/css/bootstrap.min14ed.css" rel="stylesheet">
<link href="../../../../crm/css/style.min862f.css" rel="stylesheet">
<link href="../../../../crm/css/font-awesome.min93e3.css?" rel="stylesheet">
<link href="../../../../crm/fonts1/iconfont.css" rel="stylesheet">
<link href="../../../../crm/css/animate.min.css" rel="stylesheet">
<script type="text/javascript" src="../../../js/jquery.js"></script>
<style>
	.gray-bg{
      background-color: #f3f3f4;
    }
    .xt_problems{
      /*padding: 0 20px 20px 20px;*/
      background-color: #fff; 
      border-top:4px solid #e7eaec;
    }
    .so_main{
      overflow: hidden;
    }
    .xt_problems .page_tit{
      font-size: 14px;
      margin: 0 0 7px;
      padding: 0;
      text-overflow: ellipsis;
      color: #676a6c;
        /* border-bottom: 1px solid #ddd; */
    }
    .s_roblems table th{
      padding: 10px;
      line-height: 21px;
      vertical-align: top;
      border-top: 1px solid #ddd;
      background-color: #F5F5F6!important;
      color: #000;
      font-weight: bold;
      border-left:1px solid #ddd;
    }
    .s_roblems table{
      width: 100%;
      max-width: 100%;
      margin-bottom: 20px;
      border-spacing: 0;
      border-collapse: collapse;
    }
    .list table td{
      /*padding: 8px;*/
      line-height: 30px;
      vertical-align:inherit!important;
      border: 1px solid #ddd;
    }
    .list table th{
    	border: 1px solid #ddd;
    }
    .s_roblems table tr td{
      border-left: 1px solid #ddd;
      border-bottom: 1px solid #ddd;
      /*padding: 10px 0 10px 0;*/
      padding: 8px;
    }
    .xt_problems table tr th{
      padding: 12px 8px 12px 8px;
    }
    .xt_problems table tr td{
      border-top: 1px solid #e7e7e7;
      border-left: 1px solid #e7e7e7;
      border-right: 1px solid #e7e7e7;
      border-bottom: 1px solid #e7e7e7;
    }
    .xt_problems .form2 .table tr td input{
      height: 28px;
      border: 1px solid #e5e6e7;
      width: 100%;
      text-indent: 1em;
    }
    .Toolbar_inbox{
      background-color:#fff;
      border-bottom:none;
      overflow: hidden;
      margin-bottom: 20px;
  		margin-top: 10px;
    }
    .page a{
      padding: 4px 6px;
      border: 1px solid #ddd;
      border-radius: 3px;
    }
    .page a:hover{
      text-decoration: none;
      background-color: #f4f4f4;
      padding: 4px 6px;
      border-radius: 3px;
      border: 1px solid #ddd;
    }
    .list table th.line_l{
      background:none;
    }
    a:hover{
      text-decoration: none;
    }
    .form2 table td{
      padding: 8px!important;
    }
    .form2 table td input{
      height: 30px;
    width: 100%;
    text-indent: 1em;
    border:1px solid #ddd; 
    }
    .form2 table td select{
    height: 30px;
    width: 100%;
    text-indent: 1em;
    }
    input{
      outline: none
    }
    select{
      outline: none;
      border: 1px solid #ddd;
    }
    .form2{
      border-top:none;
      border-bottom: 1px solid #ddd;
      padding-bottom: 15px;
    }
    .page_btm{
    	padding:20px 0;
    	border-top: 1px solid #ddd;
    	text-align: center;
    }
    .page_btm a{
    	color: #000;
    }
    .yt a{
    	color: #c4c4c4;
    }
    
</style>
</head>
<body onload="winload();" class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
<div class="xt_problems">
<div id="waitbackbg">
	<img src="../../../images/wait2.gif" style="position:absolute;left:50%;top:50%;"/>
</div>
<div class="so_main">
<!-- <input type="hidden" id="id" value="<?php echo (isset($_smarty_tpl->getVariable('priceinfo')->value['id']) ? $_smarty_tpl->getVariable('priceinfo')->value['id'] : null);?>
" /> --> 
<form method="post" action="list.php?task=price_updateAcc" name="form1" id="form1">
<div class="form2 s_roblems" id="searchTopic_div">
	<table style="width: 100%;">
	<tr>
		<th width="15%" style="background-color:#F5F5F6">租赁单价：</th>
		<td width="35%">
			<input type="hidden" name="plan_day" id="plan_day" value="1" size="2"/>
		<input onkeyup="value=value.replace(/[^0-9\.]/g,'')" type="text" class="form-control input-sm " name="plan_rentamount" id="plan_rentamount" value="<?php echo (isset($_smarty_tpl->getVariable('car_price')->value['plan_rentamount']) ? $_smarty_tpl->getVariable('car_price')->value['plan_rentamount'] : null);?>
" placeholder="元/天" size="6">
		</td>
		<th width="15%" style="background-color:#F5F5F6">超时费：</th>
		<td width="35%">
		<input type="text" onkeyup="value=value.replace(/[^0-9\.]/g,'')" class="form-control input-sm  " name="plan_chaoshi" id="plan_chaoshi" value="<?php echo (isset($_smarty_tpl->getVariable('car_price')->value['plan_chaoshi']) ? $_smarty_tpl->getVariable('car_price')->value['plan_chaoshi'] : null);?>
" placeholder="元/小时" size="6">
		</td>
	</tr>
<tr>
    <th width="15%" style="background-color:#F5F5F6">押金(本地人/老客户)：</th>
    <td>
      <input type="text" onkeyup="value=value.replace(/[^0-9\.]/g,'')" class="form-control input-sm " name="plan_deposit1" id="plan_deposit1" value="<?php echo (isset($_smarty_tpl->getVariable('car_price')->value['plan_deposit1']) ? $_smarty_tpl->getVariable('car_price')->value['plan_deposit1'] : null);?>
" size="5"/>
    </td>
    <th width="15%" style="background-color:#F5F5F6">押金(外地人)：</th>
    <td>
      <input type="text" onkeyup="value=value.replace(/[^0-9\.]/g,'')" class="form-control input-sm " name="plan_deposit2" id="plan_deposit2" value="<?php echo (isset($_smarty_tpl->getVariable('car_price')->value['plan_deposit2']) ? $_smarty_tpl->getVariable('car_price')->value['plan_deposit2'] : null);?>
" size="5"/>
    </td>
  </tr>
	<tr>
		<th width="15%" style="background-color:#F5F5F6">
          <span style="color:#000;">超公里:</span></th>
		<td width="35%">
			<select id="xdd" name="plan_chaokm">
				<option value="n" <?php if ((isset($_smarty_tpl->getVariable('car_price')->value['plan_chaokm']) ? $_smarty_tpl->getVariable('car_price')->value['plan_chaokm'] : null)!='y'){?>selected="selected"<?php }?>>不限公里数</option>
				<option value="y" <?php if ((isset($_smarty_tpl->getVariable('car_price')->value['plan_chaokm']) ? $_smarty_tpl->getVariable('car_price')->value['plan_chaokm'] : null)=='y'){?>selected="selected"<?php }?>>限制公里数</option>
			</select>
		</td>
    <th class="hides" width="15%" style="background-color:#F5F5F6;<?php if ((isset($_smarty_tpl->getVariable('car_price')->value['plan_chaokm']) ? $_smarty_tpl->getVariable('car_price')->value['plan_chaokm'] : null)!='y'){?>display: none<?php }?>">
          <span style="color:#000;">限制公里数:</span></th>
    <td class="hides" width="35%" style="<?php if ((isset($_smarty_tpl->getVariable('car_price')->value['plan_chaokm']) ? $_smarty_tpl->getVariable('car_price')->value['plan_chaokm'] : null)!='y'){?>display: none<?php }?>">
    <input type="text" onkeyup="value=value.replace(/[^0-9\.]/g,'')" class="form-control input-sm " name="plan_chaokms" id="plan_chaokms" value="<?php echo (isset($_smarty_tpl->getVariable('car_price')->value['plan_chaokms']) ? $_smarty_tpl->getVariable('car_price')->value['plan_chaokms'] : null);?>
" placeholder="公里/天" size="6" >
  </td>
	</tr>

	<tr>
    
	
		<th class="hides" width="15%" style="background-color:#F5F5F6;<?php if ((isset($_smarty_tpl->getVariable('car_price')->value['plan_chaokm']) ? $_smarty_tpl->getVariable('car_price')->value['plan_chaokm'] : null)!='y'){?>display: none<?php }?>">
           <span style="color:#000;">超公里费用：</span></th>
		<td class="hides" width="35%" style="<?php if ((isset($_smarty_tpl->getVariable('car_price')->value['plan_chaokm']) ? $_smarty_tpl->getVariable('car_price')->value['plan_chaokm'] : null)!='y'){?>display: none<?php }?>">
		<input type="text" onkeyup="value=value.replace(/[^0-9\.]/g,'')" class="form-control input-sm " name="plan_chaokmy" id="plan_chaokmy" value="<?php echo (isset($_smarty_tpl->getVariable('car_price')->value['plan_chaokmy']) ? $_smarty_tpl->getVariable('car_price')->value['plan_chaokmy'] : null);?>
" placeholder="元/公里" size="6">
		
		</td>
    
	</tr>

	 
</table>
<!-- <div class="page_btm">
    <a href="javascript:void(0);" class="btn btn-default" name="btn_save" id="btn_save" onclick="ok();"><span>确定</span></a>
    <a href="javascript:void(0);" class="btn btn-default" onclick="closebox();"><span>关闭</span></a> 
  </div> -->
  <input type="hidden" name="id" value="<?php echo (isset($_smarty_tpl->getVariable('car_price')->value['id']) ? $_smarty_tpl->getVariable('car_price')->value['id'] : null);?>
" />
  <input type="submit" id="submit" class="btn btn-outline btn-default" value="提交" style="width: 10%;margin-left: 45%;display: block;">
</div>
</form>


<script type="text/javascript">
	$('#xdd').change(function(){
		if ($(this).val()=="y") {
        	$('.hides').css('display','table-cell');
   		} else {
        	$('.hides').css('display','none');
   		}
     $("#plan_chaokmy").val("0");
     $("#plan_chaokms").val("0");
	})

</script>
</div>
 
</div>
</div>
<!-->
<script>
$('#form1').submit(function(){
        $('#submit').attr('disabled','disabled');
        $('#submit').val('正在提交');
    });

	function winload(){ 
		$("#waitbackbg").css("display","none");
	} 
	function closebox(){
		window.parent.window.jBox.close();
	}
</script>
<!-->
</body>
</html>