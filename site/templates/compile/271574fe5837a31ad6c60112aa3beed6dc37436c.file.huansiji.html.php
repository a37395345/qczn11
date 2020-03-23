<?php /* Smarty version Smarty-3.0.4, created on 2020-03-19 14:48:28
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/daijia_linshi/huansiji.html" */ ?>
<?php /*%%SmartyHeaderCode:226185e7315bc98c262-88258541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '271574fe5837a31ad6c60112aa3beed6dc37436c' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/daijia_linshi/huansiji.html',
      1 => 1584518727,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '226185e7315bc98c262-88258541',
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
    <title>调度</title>
    <link rel="shortcut icon" href="favicon.ico">
  <link href="../../../../css/style.css" rel="stylesheet" type="text/css">
<link href="../../../../js/jbox/jBox/Skins/GreyBlue/jbox.css" rel="stylesheet"  />
<link rel="stylesheet" type="text/css" href="../../../../css/webuploader.css">
<link rel="stylesheet" type="text/css" href="../../../../css/diyUpload.css">


<link href="../../../css/box.css" rel="stylesheet" type="text/css" />
<link href="../../../css/jquery.editable-select.min.css" rel="stylesheet" type="text/css" />
<link href="../../../crm/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
<link href="../../../crm/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
<link href="../../../crm/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">

<link href="../../../crm/css/animate.min.css" rel="stylesheet">
<link href="../../../crm/css/style.min862f.css?v=2" rel="stylesheet">
<script src="../../../../jquery.js"></script>

<script type="text/javascript" src="../../../js/laydate/laydate.js"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>
<script type="text/javascript" src="../../../js/check_form.js"></script>

<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js?a=5"></script>

<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js"></script>
<script type="text/javascript" src="../../../js/jquery.editable-select.min.js"></script>


<script type="text/javascript" src="../../../../js/diyUpload/webuploader.html5only.min.js"></script>
<script type="text/javascript" src="../../../../js/diyUpload/diyUpload.js?a=5"></script>

<script src="../../../js/moment.js"></script>


    <style type="text/css">
    /**/
    .navi_name{font-size:14px;font-weight:bold;}
    .indent{padding-left:40px;}
#box{width:100%; min-height:300px; background:#FF9}
/**/
        .span1{
        margin-bottom: 5px;    color: inherit;
    background-color: transparent;
    -webkit-transition: all .5s;
    transition: all .5s;    border-color: #c2c2c2;border-radius: 3px;    display: inline-block;
    padding: 6px 12px;
    }
    .webuploader-pick{
        float: left;
    }
    </style>

</head>
<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        
        <!-- Panel Other -->
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>调度</h5>
                <div class="ibox-tools">
                   
                </div>
            </div>

            <form method="post" action="index.php?task=huansiji_action" name="form1" id="form1">
            <div class="ibox-content">
                <div class="row row-lg">
                    <div class="col-sm-12">
                        <!-- Example Events -->
                        <div class="example-wrap">
                            <div class="example"> 
                            
                                    <div >
                                    <table class="table table-bordered" id="che">
                                    <tr>
                                        <th style="background-color:#F5F5F6" width="15%">
                                            <span style="color:#000">司机类型:</span>
                                        </th>
                                        
                                        <td width="35%">
                                            <select class="form-control input-sm" name="emp_zhiweiid" id="emp_zhiweiid">
                                                <option value="0">请选择</option>
                                                <option value="66">机动司机</option>
                                                <option value="67">厂车司机</option>
                                                 <option value="1000">其他人员</option>
                                            </select>
                                        </td>
                                        <th style="background-color:#F5F5F6" width="15%">
                                            <span style="color:#000">选择司机:</span>
                                        </th>
                                        <td width="35%">
                                                <select name="paicheDriver" id="paicheDriver" class="form-control input-sm">
                                                   
                                                    
                                                </select>
                                            </td>
                                    </tr>
                                    
                                </table>
                               


                            </div>

                    <input type="hidden" name="pid" value="<?php echo $_smarty_tpl->getVariable('pid')->value;?>
" id="pid">
                    
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

    
    
    <script src="../../../crm/js/bootstrap.min.js?v=3.3.6"></script>
    
    <script src="../../../crm/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
    <script src="../../../crm/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
    <script src="../../../crm/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
    <script src="../../../crm/js/demo/bootstrap-table-demo.min.js"></script>
   
    
    
</body> 
<!-->


<script>

$("#emp_zhiweiid").change(function(){
    var emp_zhiweiid=$('#emp_zhiweiid').val();
    $("#paicheDriver option").remove();
    if(parseInt(emp_zhiweiid)>0){
        $.ajax({
            type:'POST',
            url:'index.php?task=getSiji',
            data:{"emp_zhiweiid":emp_zhiweiid},
            dataType:"json",
            cache: false,
            success:function(req){
               
                $("#paicheDriver").append("<option  value='0'>请选择</option>");
                for(var i=0;i<req.length;i++){
                    $("#paicheDriver").append("<option  value='"+req[i]['emp_id']+"'>"+req[i]['emp_name']+"</option>");
                } 
            }
        });
    }
    
})
    $(function(){
        $("#submit").click(function(){
            var emp_zhiweiid=parseInt($('#emp_zhiweiid').val());
            var paicheDriver=parseInt($('#paicheDriver').val());
            
            if(!emp_zhiweiid>0){
                alert("请先选择司机类型！");
                return false;
            }
            if(!paicheDriver>0){
                alert("请先选择司机！");
                return false;
            }
            
        })

    });

    $('#form1').submit(function(){
        $('#submit').attr('disabled','disabled');
        $('#submit').val('正在提交');

    });
</script>
<!-->
    

<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->
</html>
