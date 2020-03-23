<?php /* Smarty version Smarty-3.0.4, created on 2020-03-20 17:44:10
         compiled from "D:\WWW\qczn\site\templates\elsker\operator/zijia_linshi/zijia_continuecar_a.html" */ ?>
<?php /*%%SmartyHeaderCode:198865e74906a095822-66127107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24bb7a8ce9303f050db738291cb671bd909fbc48' => 
    array (
      0 => 'D:\\WWW\\qczn\\site\\templates\\elsker\\operator/zijia_linshi/zijia_continuecar_a.html',
      1 => 1584697434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198865e74906a095822-66127107',
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=9;IE=8;IE=7;IE=EDGE">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>管理后台</title>
<link rel="shortcut icon" href="favicon.ico">
<link href="../../../crm/css/bootstrap.min14ed.css?v=3.3.6" rel="stylesheet">
<link href="../../../crm/css/font-awesome.min93e3.css?v=4.4.0" rel="stylesheet">
<link href="../../../crm/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
<link href="../../../crm/css/animate.min.css" rel="stylesheet">
<link href="../../../crm/css/style.min862f.css?v=4.1.0" rel="stylesheet">
<script type="text/javascript" src="../../../js/jquery.js"></script>
<script type="text/javascript" src="../../../js/laydate/laydate.js?a=<?php echo (isset($_smarty_tpl->getVariable('list')->value['change_time']) ? $_smarty_tpl->getVariable('list')->value['change_time'] : null);?>
"></script>
<script type="text/javascript" src="../../../js/common.js"></script>
<script type="text/javascript" src="../../../js/calendar.js"></script>

<script type="text/javascript" src="../../../js/check_form.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/jquery.jBox-2.3.min.js"></script>
<script type="text/javascript" src="../../../js/jbox/jBox/i18n/jquery.jBox-zh-CN.js?a=3"></script>
<script type="text/javascript" src="../../../js/jquery.editable-select.min.js"></script>
<!-->
<script type="text/javascript">


</script>

<!--><object classid="clsid:F1317711-6BDE-4658-ABAA-39E31D3704D3" codebase="SDRdCard.cab#version=1,3,5,0" width="330" height="0" align="center" hspace="0" vspace="0" id="idcard" name="rdcard"></object>
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
	<!-- Panel Other -->
	<div class="ibox float-e-margins">
		<div class="ibox-title">
			<h5>临时自驾续租</h5>
		</div>
		<form method="post" action="zijiaContinue_accept.php" name="form1" id="form1">
			<div class="ibox-content"  id="tian">
				<div class="row row-lg">
					<div class="col-sm-12">
						<!-- Example Events -->
						<div class="example-wrap">
							<div class="example">
								
								<div class="btn-group hidden-xs pull-right" id="exampleTableEventsToolbar" role="group">
								</div>
								<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('pid')->value;?>
" id="car_id" name="pid">

								<input type="hidden" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['plan_rentamount']) ? $_smarty_tpl->getVariable('list')->value['plan_rentamount'] : null);?>
" id="plan_rentamount" >
								<input type="hidden" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_needtax']) ? $_smarty_tpl->getVariable('list')->value['paiche_needtax'] : null);?>
" id="paiche_needtax" >
								
								<input type="hidden" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['plan_chaoshi']) ? $_smarty_tpl->getVariable('list')->value['plan_chaoshi'] : null);?>
" id="plan_chaoshi" >
								<input type="hidden" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_kehu']) ? $_smarty_tpl->getVariable('list')->value['paiche_kehu'] : null);?>
" id="paiche_kehu" >

								<input type="hidden" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_types']) ? $_smarty_tpl->getVariable('list')->value['car_types'] : null);?>
" id="car_types" >

								<input type="hidden" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['car_gongchang']) ? $_smarty_tpl->getVariable('list')->value['car_gongchang'] : null);?>
" id="car_gongchang" >

							

								
								<div class="shiji">
									<table class="table table-bordered" class="shiji">
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">开始时间</span>
										</th>
										<td width="35%">
											<input type="text"  class="form-control input-sm"  readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_startDate']) ? $_smarty_tpl->getVariable('list')->value['paiche_startDate'] : null);?>
">
										</td>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">预计结束时间</span>
										</th>
										<td width="35%">
											<input type="text" id="paiche_endDate" class="form-control input-sm" name="paiche_endDate" readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_endDate']) ? $_smarty_tpl->getVariable('list')->value['paiche_endDate'] : null);?>
">
										</td>
									</tr>
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">开车线路</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm"      readonly="readonly" unselectable="on"value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['paiche_line']) ? $_smarty_tpl->getVariable('list')->value['paiche_line'] : null);?>
">
										</td>

										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">原租天数</span>
										</th>

										<td width="35%">
											<input type="text" id="ytianshu" class="form-control input-sm"    readonly="readonly" unselectable="on" value="<?php echo (isset($_smarty_tpl->getVariable('list')->value['ytianshu']) ? $_smarty_tpl->getVariable('list')->value['ytianshu'] : null);?>
">
										</td>
									</tr>
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">续租天数</span>
										</th>
										<td width="35%">
										<span style="display: block;width: 14%;float: left;line-height: 34px;text-align: right;">天:</span>
										<input type="text" class="form-control input-sm" placeholder="" style="float: left;width: 20%" id="tian_a" onchange="jisuan_a()">

										<input type="button" name="" value="+" style="display: block;float: left;width:7% " id="tjia" onclick="jisuan_b('t','j')">
										<input type="button" name="" value="-" style="display: block;float: left;width:7% " id="tjian" onclick="jisuan_b('t','g')">


										<span style="display: block;width: 14%;float: left;line-height: 34px;text-align: right;">小时：</span>


										<input type="text" class="form-control input-sm" placeholder="" style="float: left;width: 20%" id="shi" onchange="jisuan_a()">

										<input type="button" name="" value="+" style="display: block;float: left;width:7% " id="sjia" onclick="jisuan_b('s','j')">
										<input type="button" name="" value="-" style="display: block;float: left;width:7% " id="sjian" onclick="jisuan_b('s','g')">
									</td>
										
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">续租到日期</span>
										</th>

										<td width="35%">
											<input type="text" class="form-control input-sm"  id="paiche_endDate_a" name="paiche_endDate_a" readonly="readonly" unselectable="on">
										</td>
									</tr>
									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">续租费用</span>
										</th>
										<td width="35%">
											<input type="number" min="0" class="form-control input-sm"  id="money" name="money"  <?php if ((isset($_smarty_tpl->getVariable('list')->value['paiche_kehu']) ? $_smarty_tpl->getVariable('list')->value['paiche_kehu'] : null)==1||(isset($_smarty_tpl->getVariable('list')->value['paiche_kehu']) ? $_smarty_tpl->getVariable('list')->value['paiche_kehu'] : null)==5){?>readonly="readonly" unselectable="on"<?php }?>>
										</td>

										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">节日服务费</span>
										</th>

										<td width="35%">
											<input type="text" class="form-control input-sm"  id="jieri" name="jieri" readonly="readonly" unselectable="on">
										</td>
									</tr>

									<tr>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">税金</span>
										</th>

										<td width="35%">
											<input type="text" class="form-control input-sm"  id="suijin" name="suijin" readonly="readonly" unselectable="on">
										</td>
										<th style="background-color:#F5F5F6" width="15%">
											<span style="color:#000">备注</span>
										</th>
										<td width="35%">
											<input type="text" class="form-control input-sm"  id="beizhu" name="beizhu" >
										</td>

										<th style="background-color:#F5F5F6" width="15%">
										
										</th>

										<td width="35%">
											
										</td>
									</tr>

								
									</table>
								</div>


							</div>
						</div>
						<!-- End Example Events -->
					</div>
				</div>
				<input type="submit" id="submit" class="btn btn-outline btn-default" value="提交" style="width: 10%;margin-left: 45%;display: block;">
			</div>
			
		</form>
	</div>
	<!-- End Panel Other -->
</div>
<script src="js/jquery.min.js?v=2.1.4"></script>
<script src="js/bootstrap.min.js?v=3.3.6"></script>
<script src="js/content.min.js?v=1.0.0"></script>
<script src="js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
<script src="js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
<script src="js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
<script src="js/demo/bootstrap-table-demo.min.js"></script>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>
<script type="text/javascript" src="../../../js/account.js"></script>
<!-- Mirrored from www.zi-han.net/theme/hplus/table_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:20:06 GMT -->
<script type="text/javascript">
	//活动a时间段
var time_as=DateToUnix("2030-01-17 00:00:00");
var time_ae=DateToUnix("2030-01-21 23:59:59");

//活动b时间段
var time_bs=DateToUnix("2030-01-22 00:00:00");
var time_be=DateToUnix("2030-01-31 23:59:59");
//活动c时间段
var time_cs=DateToUnix("2030-02-01 00:00:00");
var time_ce=DateToUnix("2030-02-05 23:59:59");

//活动d时间段
var time_ds=DateToUnix("2030-01-23 00:00:00");
var time_de=DateToUnix("2030-01-30 16:30:00");
//品台id
var paiche_kehu=parseInt($("#paiche_kehu").val());
var car_types=parseInt($('#car_types').val());
var car_gongchang=parseInt($('#car_gongchang').val());

	$('#form1').submit(function(){
		$('#submit').attr('disabled','disabled');
		$('#submit').val('正在提交');

	});
	$('#submit').click(function(){
		var tian_a=parseInt($('#tian_a').val());
		var shi=parseInt($('#shi').val());
		if(!(tian_a>0)&&!(shi>0)){
			alert('请选择续约时间！');
			return false;
		}
		
	});


	function jisuan_b(sjianjian,shuzi){
		
		//天
		var tian_a=0;
		//时
		var shi=0;
		if($('#tian_a').val()){
			tian_a=parseInt($('#tian_a').val());
			
		}
		if($('#shi').val()){
			shi=parseInt($('#shi').val());
			
		}
		if(shuzi=="j"){
			if(sjianjian=="t"){
				$('#tian_a').val(tian_a+1);
				
			}else{
				if(shi<24){
					$('#shi').val(shi+1);
				}	
			}
		}else{
			if(sjianjian=="t"){
				if(tian_a>0){
					$('#tian_a').val(tian_a-1);	
				}
			}else{
				if(shi>0){
					$('#shi').val(shi-1);

				}
			}
		}
		jisuan_a();
	}

	function jisuan_a(){
		//已租天数
		var ytianshu=parseInt($('#ytianshu').val());
		var tian_b=0;
		var shi_b=0;
		if($('#tian_a').val()!=""){
		
			if(!yanzhengShuZi($('#tian_a').val())){
				$('#tian_a').val(0);

			}else{
				tian_b=parseInt($('#tian_a').val());
			}
			
		}
		if($('#shi').val()!=""){
			
			if(!yanzhengShuZi($('#shi').val())){
				$('#shi').val(0);
			}else{
				shi_b=parseInt($('#shi').val());
			}	
		}
		if(tian_b>999){
			alert('天数不能大于999');
			$('#tian_a').val("999");
			tian_b=999;
		}
		if(shi_b>24){
			alert('时间不能大于24');
			$('#shi').val("24");
			shi_b=24;
		}

		var time_s = $('#paiche_endDate').val();
		time_s=DateToUnix(time_s);
		var time_e=time_s+24*60*60*tian_b+60*60*shi_b;
		//品台单
	
		if(paiche_kehu!=1&&paiche_kehu!=5){
			$('#paiche_endDate_a').val(timestampToTime(time_e));
		//不是平台单
		}else{
			//工厂车辆
			if(car_gongchang==1){
			//不是工厂车辆
				alert("当前车辆不允许续租！");
				$('#paiche_endDate_a').val("");
				$('#tian_a').val(0);
				$('#shi').val(0);
				return false;
			}else{
				if(time_e>time_bs&&time_s<time_be){
					if(car_types==2){
						if(ytianshu+tian_b<3){
							$('#tian_a').val(3-ytianshu);
							$('#shi').val("0");
							tian=3-ytianshu;shi=0;
							time_e=time_s+24*60*60*tian+60*60*shi;
							$('#paiche_endDate_a').val(timestampToTime(time_e));
						}
					}
					if(car_types!=2&&ytianshu+tian_b<15){
						$('#tian_a').val(15-ytianshu);
						$('#shi').val("0");
						tian=15-ytianshu;shi=0;
						time_e=time_s+24*60*60*tian+60*60*shi;
						$('#paiche_endDate_a').val(timestampToTime(time_e));
					}else{
						$('#paiche_endDate_a').val(timestampToTime(time_e));
					}
				}else{
					$('#paiche_endDate_a').val(timestampToTime(time_e));
				}

			}
		}
		//计算租金
		jisuan();
	}


	function jisuan(){

		//品台id
		var paiche_kehu=parseInt($("#paiche_kehu").val());
		//是否开票
		var paiche_needtax=parseInt($('#paiche_needtax').val());
		//天数
		var tian_a=0;
		if(parseInt($('#tian_a').val())>0){
			tian_a=parseInt($('#tian_a').val());
		}
		//时间
		var shi=0;
		if(parseInt($('#shi').val())>0){
			shi=parseInt($('#shi').val());
		}
		
		//超时费用
		var plan_chaoshi=parseInt($('#plan_chaoshi').val());
		//日租金
		var plan_rentamount=parseInt($('#plan_rentamount').val());

		//超时费用
		var shi_feiyong=0;
		
		//续租开始时间
		var time_s=DateToUnix($('#paiche_endDate').val());
		//续租结束时间
		var time_e=time_s+24*60*60*tian_a+60*60*shi;
		
		//超时时间段日租金
		var zhe=1;
		//节日服务费
		var jieri_money=0;
		var car_types=parseInt($("#car_types").val());

		if(time_e>time_as&&time_s<time_ce){

			zhe=1;
			for(var i=time_as;i<time_ae;i=i+60*60*24){
				if(i>=time_s&&i<=time_e){

					if(car_types!=4&&car_types!=5){
						jieri_money=jieri_money+100;
					}else{
						
						jieri_money=jieri_money;

					}
					
				}
			}

			for(var i=time_bs;i<time_be;i=i+60*60*24){
				if(i>=time_s&&i<=time_e){
					if(car_types!=4&&car_types!=5){
						jieri_money=jieri_money+200;
					}else{
						
						jieri_money=jieri_money+100;
					}
					
				}
			}

			for(var i=time_cs;i<time_ce;i=i+60*60*24){
				if(i>=time_s&&i<=time_e){
					if(car_types!=4&&car_types!=5){
						jieri_money=jieri_money+100;
					}else{
						jieri_money=jieri_money;
					}
				}
			}
			if(tian_a>=30){
				jieri_money=0;
			}	

		}else{
			if(tian_a>9&&tian_a<20){
				zhe=0.95;
			}
			if(tian_a>19&&tian_a<30){
				zhe=0.9;
			}
			if(tian_a>29){
				zhe=0.85;
			}
		}

		if(shi>0){
			shi_feiyong=shi*plan_chaoshi;
		}
		
		if(shi_feiyong>plan_rentamount){
			shi_feiyong=plan_rentamount;
		}
		if(paiche_kehu!=1&&paiche_kehu!=5){
			jieri_money=0;
		}

		var num_mone=(tian_a*plan_rentamount+shi_feiyong)*zhe;
		$("#money").val(num_mone);
		$("#jieri").val(jieri_money);
		if(paiche_needtax>0){
			$('#suijin').val((num_mone+jieri_money)*0.1);
		}
	}
	function yanzhengShuZi(idNo){

		var regIdNo = /^[0-9]*$/;  
		if(!regIdNo.test(idNo)){  
		    alert("续租时间只能为整数，不能带有其他字符及空格！");
		    return false;  
		}else{
			return true;
		}  
	}


	function getNewData(dateTemp_a, days) {  

		var dateTemp_a = dateTemp_a.split(" ");
		var dateTemp=dateTemp_a[0];
		
	    dateTemp = dateTemp.split("-");  
	   var nDate = new Date(dateTemp[1] + '-' + dateTemp[2] + '-' + dateTemp[0]); //转换为MM-DD-YYYY格式    
	   var millSeconds = Math.abs(nDate) + (days * 24 * 60 * 60 * 1000);  
	   var rDate = new Date(millSeconds);  
	   var year = rDate.getFullYear();  
	   var month = rDate.getMonth() + 1;  
	   if (month < 10) month = "0" + month;  
	   var date = rDate.getDate();  
	   if (date < 10) date = "0" + date;  
	   return (year + "-" + month + "-" + date+" "+dateTemp_a[1]);  
	}

	//时间转成时间戳
function DateToUnix(string) {

                var f = string.split(' ', 2);

                var d = (f[0] ? f[0] : '').split('-', 3);

                var t = (f[1] ? f[1] : '').split(':', 3);

                return (new Date(

                        parseInt(d[0], 10) || null,

                        (parseInt(d[1], 10) || 1) - 1,

                        parseInt(d[2], 10) || null,

                        parseInt(t[0], 10) || null,

                        parseInt(t[1], 10) || null,

                        parseInt(t[2], 10) || null

                        )).getTime() / 1000;
}
function timestampToTime(timestamp) {
       var date = new Date(timestamp * 1000);//时间戳为10位需*1000，时间戳为13位的话不需乘1000
       var Y = date.getFullYear() + '-';
       var M = (date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1) : date.getMonth()+1) + '-';
       var D = (date.getDate() < 10 ? '0'+date.getDate() : date.getDate()) + ' ';
       var h = (date.getHours() < 10 ? '0'+date.getHours() : date.getHours()) + ':';
       var m = (date.getMinutes() < 10 ? '0'+date.getMinutes() : date.getMinutes()) + ':';
       var s = (date.getSeconds() < 10 ? '0'+date.getSeconds() : date.getSeconds());
        return Y+M+D+h+m+s;
    }

 

</script>
</html>