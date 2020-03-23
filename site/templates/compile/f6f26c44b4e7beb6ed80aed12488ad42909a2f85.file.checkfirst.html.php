<?php /* Smarty version Smarty-3.0.4, created on 2019-09-29 17:31:50
         compiled from "/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/busimanage/checkfirst.html" */ ?>
<?php /*%%SmartyHeaderCode:17256524775d907a066a8ec7-08030936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6f26c44b4e7beb6ed80aed12488ad42909a2f85' => 
    array (
      0 => '/www/wwwroot/gl.czyhqc.com/site/templates/elsker/operator/busimanage/checkfirst.html',
      1 => 1569749206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17256524775d907a066a8ec7-08030936',
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
<link href="../../../css/style.css" rel="stylesheet" type="text/css">
<link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
</head>
<body>
<div class="so_main">
  <div class="page_tit">业务订单待审核记录</div>
  <div id="searchTopic_div" style="display:none;">
    <div class="page_tit">
    搜索 [<a onclick="searchNews();" href="javascript:void(0);">隐藏</a>]
    </div>
    <div class="form2">
        <form id="form1" action="list.php" method="get">
        	<input type="hidden" name="op" id="op" value="check" />
        	<input type="hidden" name="clientid" id="clientid" value="<?php echo $_smarty_tpl->getVariable('clientid')->value;?>
" />
        	<input type="hidden" name="accountend" value="<?php echo $_smarty_tpl->getVariable('op_flag')->value;?>
" />
        	<input type="hidden" name="brotherid" id="brotherid" value="<?php echo $_smarty_tpl->getVariable('brotherid')->value;?>
" />
        	<input type="hidden" name="search_status" id="search_status" value="<?php echo $_smarty_tpl->getVariable('search_status')->value;?>
" />
        	<input type="hidden" name="search_overtime" id="search_overtime" value="<?php echo $_smarty_tpl->getVariable('search_overtime')->value;?>
" />
            <dl class="lineD">
            <dt>合同号：</dt>
            <dd>
            <input type="text" name="paiche_contractNum" size="16"  />
            </dd>
            </dl>
            <dl class="lineD">
	          <dt>租赁类型：</dt>
	          <dd>
	              <select name="b_id" >
	                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('category')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['item_paicheType']) ? $_smarty_tpl->tpl_vars['rows']->value['item_paicheType'] : null);?>
" <?php if ($_smarty_tpl->getVariable('busitype')->value==(isset($_smarty_tpl->tpl_vars['rows']->value['item_paicheType']) ? $_smarty_tpl->tpl_vars['rows']->value['item_paicheType'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['item_name']) ? $_smarty_tpl->tpl_vars['rows']->value['item_name'] : null);?>
</option>
	                  <?php }} ?>
	              </select>
	          </dd>
	        </dl>
	        <dl class="lineD">
	          <dt>用车单位：</dt>
	          <dd>
	              <select name="company" id="company">
	                  <option value="0" <?php if ($_smarty_tpl->getVariable('companyid')->value==0){?>selected<?php }?>>请选择</option>
	                  <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('companylist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
	                  <option value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_id']) ? $_smarty_tpl->tpl_vars['rows']->value['client_id'] : null);?>
" <?php if ($_smarty_tpl->getVariable('companyid')->value==(isset($_smarty_tpl->tpl_vars['rows']->value['client_id']) ? $_smarty_tpl->tpl_vars['rows']->value['client_id'] : null)){?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['client_name']) ? $_smarty_tpl->tpl_vars['rows']->value['client_name'] : null);?>
</option>
	                  <?php }} ?>
	              </select><input type="text" id="search_key" size="4" placeholder="快速检索" />
	          </dd>
	        </dl>
            <dl class="lineD">
            <dt>开始时间：</dt>
            <dd>
            <input id="search_startDate" type="text" value="<?php echo $_smarty_tpl->getVariable('search_startDate')->value;?>
" name="search_startDate" onClick="calendar.show(this);">
            </dd>
            </dl>
            <dl class="lineD">
            <dt>结束时间：</dt>
            <dd>
            <input id="search_endDate" type="text" value="" name="search_endDate" onClick="calendar.show(this);">
            </dd>
            </dl>
            <dl class="lineD">
            <dt>联系人/单位：</dt>
            <dd>
            <input type="text" name="paiche_linker" size="16"  />
            </dd>
            </dl>
            <dl class="lineD">
            <dt>联系电话：</dt>
            <dd>
            <input type="text" name="paiche_linkerPhone" size="16"  />
            </dd>
            </dl>
            <dl class="lineD">
            <dt>车牌号：</dt>
            <dd>
            	苏D<input type="text" name="paiche_car" size="12"  />
            </dd>
            </dl>
			<dl class="lineD">
            <dt>审核状态：</dt>
            <dd>
            	<input type="radio" name="search_status" value="d" checked>未审核<input type="radio" name="search_status" value="y" <?php if ($_smarty_tpl->getVariable('search_status')->value=="y"){?>checked<?php }?>>已审核<input type="radio" name="search_status" value="a" <?php if ($_smarty_tpl->getVariable('search_status')->value=="a"){?>checked<?php }?>>全部
            </dd>
            </dl>
            <dl class="lineD">
            <dt>店铺：</dt>
            <dd>
            <input type="radio" name="search_shop" value="" <?php $_tmp1=$_smarty_tpl->getVariable('search_shop')->value;?><?php if (empty($_tmp1)){?>checked<?php }?> />全部 
            <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shoplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
            <input type="radio" name="search_shop" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null);?>
" <?php if ($_smarty_tpl->getVariable('search_shop')->value==(isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null)){?>checked<?php }?>/><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>
负责
            <?php }} ?>
            </dd>
            </dl>
            
			
            <div class="page_btm">
            	<input class="btn_b" type="submit" value="确定">
            </div>
        </form>
    </div>
  </div>
  <!-------- 用户列表 -------->
  <div class="Toolbar_inbox">
    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();" id="searchTopic_action"><span>搜索</span></a>
  </div>
  
  <div class="list">
  <table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr style="height:50px;">
    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
    <th><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['item_name']) ? $_smarty_tpl->tpl_vars['row']->value['item_name'] : null);?>
</th>
    <?php }} ?>
  </tr>
  <tr style="height:60px;">
 	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
?>
 	<td style="text-align:center;background-color:#B1C9FF;"><?php $_tmp2=(isset($_smarty_tpl->tpl_vars['row']->value['nCount']) ? $_smarty_tpl->tpl_vars['row']->value['nCount'] : null);?><?php if (empty($_tmp2)){?>0<?php }else{ ?><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['nCount']) ? $_smarty_tpl->tpl_vars['row']->value['nCount'] : null);?>
<?php }?>个</td>
 	<?php }} ?>
 </tr>
 <tr >
    <td colspan="5" style="text-align:left;padding-left:50px;">
    <input type="radio" name="search_shop" value="" <?php $_tmp3=$_smarty_tpl->getVariable('search_shop')->value;?><?php if (empty($_tmp3)){?>checked<?php }?> />全部 
            <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('shoplist')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value){
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['rows']->key;
?>
            <input type="radio" name="search_shop" value="<?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null);?>
" <?php if ($_smarty_tpl->getVariable('search_shop')->value==(isset($_smarty_tpl->tpl_vars['rows']->value['shop_id']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_id'] : null)){?>checked<?php }?>/><?php echo (isset($_smarty_tpl->tpl_vars['rows']->value['shop_name']) ? $_smarty_tpl->tpl_vars['rows']->value['shop_name'] : null);?>

            <?php }} ?>
    </td>
  </tr>
 </table>
 
  </div>

</div>
<!-->
<script>
var search_shop,search_user;
	//鼠标移动表格效果
	$(document).ready(function(){
	    $("input[name='search_shop']").change(function(){
	    	search_shop = $("input[name='search_shop']:checked").val();
	    	location.href="checkfirst.php?search_shop="+search_shop;
	    });
	});
	$("#search_key").live('input propertychange',function(){
	    var aa=$("#search_key").val();
	    if (aa!=""){
			$("#company option").each(function (){  
		        var txt = $(this).text();  
		        if(txt.toLowerCase().indexOf(aa) >-1){  
		            $(this).attr("selected",true);
		            $("#company").change();
		            return false;
		        }
		     });
	    }
	});
	
	var isSearchHidden = 1;
    function searchNews() {
      if(isSearchHidden == 1) {
        $("#searchTopic_div").slideDown("fast");
        isSearchHidden = 0;
      }else {
        $("#searchTopic_div").slideUp("fast");
        isSearchHidden = 1;
      }
    }
	
	
</script>
<!-->

</body>
</html>