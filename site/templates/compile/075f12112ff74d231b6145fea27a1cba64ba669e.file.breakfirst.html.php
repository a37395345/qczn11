<?php /* Smarty version Smarty-3.0.4, created on 2019-12-27 09:21:11
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/machine/breakfirst.html" */ ?>
<?php /*%%SmartyHeaderCode:292055e055c87a58c07-41840552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '075f12112ff74d231b6145fea27a1cba64ba669e' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/machine/breakfirst.html',
      1 => 1575545690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '292055e055c87a58c07-41840552',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>管理后台</title>
  <link href="../../../css/style.css" rel="stylesheet" type="text/css">
  <link href="../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet" />
  <link rel="stylesheet" href="../../../../../crm/css/bootstrap.min14ed.css">
  <link rel="stylesheet" href="../../../../../crm/css/style.min862f.css">
  <link rel="stylesheet" href="../../../../../crm/css/font-awesome.min93e3.css">
  <script type="text/javascript" src="../../../js/jquery.js"></script>
  <script type="text/javascript" src="../../../js/common.js"></script>
  <script type="text/javascript" src="../../../js/calendar.js"></script>
  <script type="text/javascript" src="../../../js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
  <script type="text/javascript" src="../../../js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
  <script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
  <script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
</head>

<body class="gray-bg">
  <div class="wrapper wrapper-content animated fadeInRight">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>车辆违章总览</h5>
      </div>
      <div class="ibox float-e-margins" style="margin:0">
        <!-- 表头栏 -->
        <div class="ibox-title" style=" margin: 0; padding: 0;">
          <h5 style="padding-top: 15px; padding-left: 10px;">查找
          </h5>

          <div class="ibox-tools" style="padding-top: 14px; padding-left: 10px;float: left;">
            <a class="collapse-link">
              <i class="fa fa-chevron-down" id="up"></i>
            </a>
          </div>
          <div class="ibox-tools" style=" padding-right: 20px;float: left;">
            <div style="margin-top:5px;">

              <a href="javascript:breakitem();" class="btn btn-outline btn-default">
                违章项目
              </a>

            </div>
          </div>
          <!-- 表头栏结束 -->
          <!-- 收索栏 -->
          <div class="ibox-content" id="content" style=" margin: 0px; padding: 0px; display: none">
            <div class="row row-lg">
              <div class="col-sm-12">
                <!-- Example Events -->
                <div class="example-wrap">
                  <div class="example">
                    <form action="list.php" method="get">
                      <input type="hidden" name="task" value="breakfirst">
                      <input type="hidden" name="op" value="<?php echo $_smarty_tpl->getVariable('op')->value;?>
">
                      <table class="table table-bordered">
                        <tr>
                          <th width="15%" style="background-color:#F5F5F6">
                            <span style="color:#000;">车牌号：</span>
                          </th>
                          <td width="35%">
                            <input type="text" class="form-control input-sm" name="title" value="<?php echo $_smarty_tpl->getVariable('search_car')->value;?>
">
                          </td>
                          <th width="15%" style="background-color:#F5F5F6"></th>
                          <td width="35%"></td>
                        </tr>
                      </table>
                      <div class="page_btm">
                        <input class="btn btn-outline btn-default" style="width: 10%" type="submit"
                          value="确定">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- 收索栏结束 -->


          <!-- <div class="Toolbar_inbox">
                    <a href="javascript:void(0);" class="btn_a" onclick="searchNews();"
                      id="searchTopic_action"><span>查找</span></a>
                    <a href="javascript:breakitem();" class="btn_a"><span>违章项目</span></a>
                     	<a href="list.php?task=exportoutcar&paicheDriver2=<?php echo $_smarty_tpl->getVariable('driveid')->value;?>
&startdate=<?php echo $_smarty_tpl->getVariable('startdate')->value;?>
&enddate=<?php echo $_smarty_tpl->getVariable('enddate')->value;?>
" class="btn_a"  id="exportUser_action"><span>导出</span></a> -->
        </div> 
        <div class="list">
          <table class="table table-bordered table-hover">
            <tr>
              <th>序号</th>
              <th>车牌</th>
              <th width="10%">发动机号</th>
              <th width="8%">车型</th>
              <th width="9%">车辆年审日期</th>
              <th>违章数</th>
              <th>冻结数</th>

              <th>企业冻结数</th>
              <th>未冻结数</th>
              <th>违章款</th>
              <th>手续费</th>
              <th>扣分</th>
              <th>金额抵扣分</th>
              <th>总金额</th>
              <th>操作</th>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('list')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['index']++;
?>
            <?php $_smarty_tpl->tpl_vars['num1'] = new Smarty_variable($_smarty_tpl->getVariable('num1')->value+(isset($_smarty_tpl->tpl_vars['row']->value['nCount']) ? $_smarty_tpl->tpl_vars['row']->value['nCount'] : null), null, null);?>
            <?php $_smarty_tpl->tpl_vars['num2'] = new Smarty_variable($_smarty_tpl->getVariable('num2')->value+(isset($_smarty_tpl->tpl_vars['row']->value['nPerCount']) ? $_smarty_tpl->tpl_vars['row']->value['nPerCount'] : null), null, null);?>
            <?php $_smarty_tpl->tpl_vars['num3'] = new Smarty_variable($_smarty_tpl->getVariable('num3')->value+(isset($_smarty_tpl->tpl_vars['row']->value['nComCount']) ? $_smarty_tpl->tpl_vars['row']->value['nComCount'] : null), null, null);?>
            <?php $_smarty_tpl->tpl_vars['num4'] = new Smarty_variable($_smarty_tpl->getVariable('num4')->value+(isset($_smarty_tpl->tpl_vars['row']->value['nNoCount']) ? $_smarty_tpl->tpl_vars['row']->value['nNoCount'] : null), null, null);?>
            <?php $_smarty_tpl->tpl_vars['total1'] = new Smarty_variable($_smarty_tpl->getVariable('total1')->value+(isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money1']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money1'] : null), null, null);?>
            <?php $_smarty_tpl->tpl_vars['total2'] = new Smarty_variable($_smarty_tpl->getVariable('total2')->value+(isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money2']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money2'] : null), null, null);?>
            <?php $_smarty_tpl->tpl_vars['total3'] = new Smarty_variable($_smarty_tpl->getVariable('total3')->value+(isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money3']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money3'] : null), null, null);?>
            <?php $_smarty_tpl->tpl_vars['total4'] = new Smarty_variable($_smarty_tpl->getVariable('total4')->value+(isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money4']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money4'] : null), null, null);?>
            <?php $_smarty_tpl->tpl_vars['total5'] = new Smarty_variable($_smarty_tpl->getVariable('total5')->value+(isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money'] : null), null, null);?>
            <tr overstyle='on' id="badge_<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
">
              <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['index']+1;?>
</td>
              <td>苏D<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
</td>
              <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_motor']) ? $_smarty_tpl->tpl_vars['row']->value['car_motor'] : null);?>
</td>
              <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_model']) ? $_smarty_tpl->tpl_vars['row']->value['car_model'] : null);?>
</td>
              <td><?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_nextcarefulDate']) ? $_smarty_tpl->tpl_vars['row']->value['car_nextcarefulDate'] : null);?>
</td>
              <td><?php echo number_format((isset($_smarty_tpl->tpl_vars['row']->value['nCount']) ? $_smarty_tpl->tpl_vars['row']->value['nCount'] : null),0,".",'');?>
</td>
              <td><?php echo number_format((isset($_smarty_tpl->tpl_vars['row']->value['nPerCount']) ? $_smarty_tpl->tpl_vars['row']->value['nPerCount'] : null),0,".",'');?>
</td>
              <td><?php echo number_format((isset($_smarty_tpl->tpl_vars['row']->value['nComCount']) ? $_smarty_tpl->tpl_vars['row']->value['nComCount'] : null),0,".",'');?>
</td>
              <td><?php echo number_format((isset($_smarty_tpl->tpl_vars['row']->value['nNoCount']) ? $_smarty_tpl->tpl_vars['row']->value['nNoCount'] : null),0,".",'');?>
</td>
              <td><?php echo number_format((isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money1']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money1'] : null),0,".",'');?>
</td>
              <td><?php echo number_format((isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money2']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money2'] : null),0,".",'');?>
</td>
              <td><?php echo number_format((isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money3']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money3'] : null),0,".",'');?>
</td>
              <td><?php echo number_format((isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money4']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money4'] : null),0,".",'');?>
</td>
              <td><?php echo number_format((isset($_smarty_tpl->tpl_vars['row']->value['breakrules_money']) ? $_smarty_tpl->tpl_vars['row']->value['breakrules_money'] : null),0,".",'');?>
</td>
              <td>
                <a href="breaklist.php?title=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_num']) ? $_smarty_tpl->tpl_vars['row']->value['car_num'] : null);?>
&op=<?php echo $_smarty_tpl->getVariable('op')->value;?>
" title="明细" style="color:#ff0101" >
                  <i class="glyphicon glyphicon-th-list" aria-hidden="true"></i></a><?php if ($_smarty_tpl->getVariable('op')->value!="s"){?>&nbsp;&nbsp;
                <a href="list.php?task=breakcreate&c_id=<?php echo (isset($_smarty_tpl->tpl_vars['row']->value['car_id']) ? $_smarty_tpl->tpl_vars['row']->value['car_id'] : null);?>
&search_car=<?php echo $_smarty_tpl->getVariable('search_car')->value;?>
"title="添加" style="color:#ff0101" >
                      <i class="glyphicon glyphicon-plus" aria-hidden="true"></i></a><?php }?>
              </td>
            </tr>
            <?php }} ?>
            <tr>
              <th colspan="5">合计</th>
              <th><?php echo $_smarty_tpl->getVariable('num1')->value;?>
</th>
              <th><?php echo $_smarty_tpl->getVariable('num2')->value;?>
</th>
              <th><?php echo $_smarty_tpl->getVariable('num3')->value;?>
</th>
              <th><?php echo $_smarty_tpl->getVariable('num4')->value;?>
</th>
              <th><?php echo $_smarty_tpl->getVariable('total1')->value;?>
</th>
              <th><?php echo $_smarty_tpl->getVariable('total2')->value;?>
</th>
              <th><?php echo $_smarty_tpl->getVariable('total3')->value;?>
</th>
              <th><?php echo $_smarty_tpl->getVariable('total4')->value;?>
</th>
              <th><?php echo $_smarty_tpl->getVariable('total5')->value;?>
</th>
              <th colspan="2">&nbsp;</th>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <!-- End Example Events -->
  </div>
</body>
  <!-->
    <script>

      $("#up").click(function () {
        var content = $("#content").css('display');
        if (content == "none") {

          $("#content").css('display', 'block');
          $('#up').removeClass("fa-chevron-down");
          $('#up').addClass("fa-chevron-up");
        } else {
          $("#content").css('display', 'none');
          $('#up').removeClass("fa-chevron-up");
          $('#up').addClass("fa-chevron-down");
        }
      });
      //鼠标移动表格效果
      $(document).ready(function () {
        $("a.zoomIn").fancybox({
          'overlayShow': false,
          'transitionIn': 'elastic',
          'transitionOut': 'elastic'
        });

        $("tr[overstyle='on']").hover(
          function () {
            $(this).addClass("bg_hover");
          },
          function () {
            $(this).removeClass("bg_hover");
          }
        );
      });
      var isSearchHidden = 1;
      function searchNews() {
        if (isSearchHidden == 1) {
          $("#searchTopic_div").slideDown("fast");
          isSearchHidden = 0;
        } else {
          $("#searchTopic_div").slideUp("fast");
          isSearchHidden = 1;
        }
      }
      function breakitem() {
        demo_iframe('breakitem.php', '违章项目设置', 960, 480, 'login_js');
      }
    </script>
    <!--> </body> </html>