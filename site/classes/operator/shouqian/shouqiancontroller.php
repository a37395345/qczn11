<?php
import('operator.navi.admincontroller');
import('publicFunction.CommonFunction');
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('imag.image.uploader');
import('operator.navi.privilegehelper');
import('imag.fusecookie');
import('imag.filesystem.fusefile');
import('imag.filesystem.filesystem');
import('imag.utilities.tool');
class shouqianController extends AdminController
{


	private $package="site/operator/shouqian";
	function __construct($config = array())
	{
		parent::__construct($config);
		$this->registerTask( 'index','index');
		$this->registerTask( 'sousuo','sousuo');
		$this->registerTask( 'qita','qita');
		$this->registerTask( 'yajin','yajin');
		$this->registerTask( 'yajin_acction','yajin_acction');	
		$this->registerTask( 'qita_action','qita_action');
		$this->registerTask( 'quxiao','quxiao');	
		$this->registerTask( 'quxiao_action','quxiao_action');
		$this->registerTask( 'piliang_index','piliang_index');	
		$this->registerTask( 'piliang_index_action','piliang_index_action');
		$this->registerTask( 'danhao_list','danhao_list');
		$this->registerTask( 'pinlian_action','pinlian_action');
		$this->registerTask( 'piliang_action_a','piliang_action_a');
		
		
	}

	//批量结账
	function piliang_index(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/piliang_index");
		$view  = $this->createView("operator/shouqian/piliang_index.html");
        $view->display();
	}
	
	function piliang_index_action(){
		$CommonFunction=new CommonFunction();
		$object = new stdClass();
		$type=Request::getVar('type','get');
		//print_r($type);exit;
		if($type=="zijia_linshi"){
			$sql_pintai="select * from pintai";
        	$object->pintai_list=$CommonFunction->getList($sql_pintai);
		}else if($type=="daijia_linshi"){
			$sql="select a.paicheCom,a.qiye_num,Count(a.paiche_id) as count,b.client_name from paiche as a
            left join client as b on a.paicheCom=b.client_id where a.paiche_jie=2 and a.paiche_type=2 and a.qiye_num>0 and
          a.paiche_personal=1 and a.paicheCom>0  Group by a.qiye_num";
          	$daijia_linshi=$CommonFunction->getList($sql);

			$object->daijia_linshi=$daijia_linshi;

		}else if($type=="diaoche"){
			$sql="select a.bro_name,b.diaoche_num,a.bro_id from brothers as a 
			left join paiche as b on b.paiche_brother=a.bro_id 
			where b.paiche_type=2 and b.paiche_jie=2 and b.paiche_pintainum=1 and b.diaoche_num>0 Group by b.diaoche_num
			";

			$brothers_a=$CommonFunction->getList($sql);

			$sql="select a.bro_name,b.diaoche_num,a.bro_id from brothers as a 
			left join paiche as b on b.paiche_brothera=a.bro_id 
			where b.paiche_type=2 and b.diaoche_num>0 and b.paiche_jie=2 and b.paiche_pintainum=1 Group by b.diaoche_num
			";
			$brothers_b=$CommonFunction->getList($sql);
			
			$brothers=null;
			if(count($brothers_a)>0){
				$brothers=$brothers_b;
				for($i=0;$i<count($brothers_a);$i++){
					$index=0;
					for($j=0;$j<count($brothers);$j++){
						if($brothers_a[$i]['diaoche_num']==$brothers[$j]['diaoche_num']){
							$index=1;
						}
					}
					if($index==0){
						$brothers[]=$brothers_a[$i];
					}
				}
			}else if(count($brothers_b)>0){
				$brothers=$brothers_a;
				for($i=0;$i<count($brothers_b);$i++){
					$index=0;
					for($j=0;$j<count($brothers);$j++){
						if($brothers_b[$i]['diaoche_num']==$brothers[$j]['diaoche_num']){
							$index=1;
						}
						
					}
					if($index==0){
							$brothers[]=$brothers_b[$i];
					}
				}
			}
			
			//print_r($brothers);exit;
			$object->brothers=$brothers;
			
		}else{
			print_r("等待开发");exit;
		}
        $object->type=$type;
        $view  = $this->createView("operator/shouqian/piliang_index_action.html");
        $view->assign($object);
        $view->display();
	}

	//单号列表
	function danhao_list(){
		$CommonFunction=new CommonFunction();
		$type=Request::getVar('type','post');
		$sql="";
		$list=null;
		if($type=="zijia_linshi"){
			$paiche_kehu=Request::getVar('paiche_kehu','post');
			$paiche_pintaiid=Request::getVar('paiche_pintaiid','post');
			if($paiche_kehu==2){
				$sql="select * from paiche where paiche_type=1 and paiche_jie=2 and paiche_kehu=2 and paiche_pintaiid={$paiche_pintaiid} ORDER BY  paiche_dispatchTimes desc";
			}else if($paiche_kehu==3){
				$sql="select * from paiche where paiche_type=1 and paiche_jie=2 and paiche_kehu=3 ORDER BY paiche_dispatchTimes desc";
			}
			$list=$CommonFunction->getList($sql);
		}else if($type=="daijia_linshi"){

			$paicheCom=Request::getVar('paicheCom','post');
			$paicheCom=explode(",",$paicheCom);
			//print_r($paicheCom);exit;
			$sql="select paiche_contractNum,paiche_id,paiche_line,paiche_specialRemarks,paiche_startDate,paiche_endDate from paiche where paiche_type=2 and paicheCom={$paicheCom[0]} and paiche_jie=2 and paiche_personal=1  and qiye_num={$paicheCom[1]}  order by paiche_startDate desc";
			$list=$CommonFunction->getList($sql);
		}else if($type=="diaoche"){
			$bro_id=Request::getVar('bro_id','post');
			$bro_id=explode(",",$bro_id);
			//调车公司调我们的车
			$sql="select paiche_contractNum,paiche_id,paiche_line,paiche_specialRemarks,paiche_startDate,paiche_endDate from paiche  where paiche_pintainum=1 and paiche_brother={$bro_id[0]} and diaoche_num={$bro_id[1]} and paiche_type=2 and paiche_jie=2";
			$list=$CommonFunction->getList($sql);
			for($i=0;$i<count($list);$i++){
				$list[$i]['paiche_startDate'] = $list[$i]['paiche_startDate']>0 ? date("Y-m-d H:i:s",$list[$i]['paiche_startDate']) :"-";

	            $list[$i]['paiche_endDate'] = $list[$i]['paiche_endDate']>0 ? date("Y-m-d H:i:s",$list[$i]['paiche_endDate']) : "—";
	            $sql="select sum(conv_money-have_in_money) as money from paiche_charges where paiche_id={$list[$i]['paiche_id']} and charge_id!=1";
	            $money=$CommonFunction->getDataY($sql,"money");
	            $sql="select sum(youhui_mone-youhui_omone) as money from paiche_youhui where paiche_id={$list[$i]['paiche_id']}";
	            $money=$money-$CommonFunction->getDataY($sql,"money");
	            $list[$i]['money']=$money;
			}

			//我们调别人的车
			$sql="select paiche_contractNum,paiche_id,paiche_line,paiche_specialRemarks,paiche_startDate,paiche_endDate from paiche   where paiche_pintainum=1 and paiche_brothera={$bro_id[0]} and diaoche_num={$bro_id[1]} and paiche_type=2 and paiche_jie=2";
			$list2=$CommonFunction->getList($sql);

			for($i=0;$i<count($list2);$i++){
				$list2[$i]['paiche_startDate'] = $list2[$i]['paiche_startDate']>0 ? date("Y-m-d H:i:s",$list2[$i]['paiche_startDate']) :"-";

	            $list2[$i]['paiche_endDate'] = $list2[$i]['paiche_endDate']>0 ? date("Y-m-d H:i:s",$list2[$i]['paiche_endDate']) : "—";

	            $sql="select sum(have_freeze_money-have_back_money) as money from paiche_charges where paiche_id={$list2[$i]['paiche_id']} and charge_id!=1";
	            $money=$CommonFunction->getDataY($sql,"money");

	            $sql="select sum(youhui_smoney-youhui_emoney) as money from paiche_youhui where paiche_id={$list2[$i]['paiche_id']}";
	            $money=$money-$CommonFunction->getDataY($sql,"money");

	            $list2[$i]['money']=$money*-1;
	            //print_r($list2[$i]);exit;
			}
			
			for($i=0;$i<count($list2);$i++){
				$list[]=$list2[$i];
			}
			
			
		}else{
			print_r("expression");exit;
		}
	
		
		if($type!="diaoche"){
			for($i=0;$i<count($list);$i++){
				$list[$i]['paiche_startDate'] = $list[$i]['paiche_startDate']>0 ? date("Y-m-d H:i:s",$list[$i]['paiche_startDate']) :"-";

	            $list[$i]['paiche_endDate'] = $list[$i]['paiche_endDate']>0 ? date("Y-m-d H:i:s",$list[$i]['paiche_endDate']) : "—";
	            $sql="select sum(conv_money-have_in_money) as money from paiche_charges where paiche_id={$list[$i]['paiche_id']} and charge_id!=1";
	            $money=$CommonFunction->getDataY($sql,"money");
	            $sql="select sum(youhui_mone-youhui_omone) as money from paiche_youhui where paiche_id={$list[$i]['paiche_id']}";
	            $money=$money-$CommonFunction->getDataY($sql,"money");
	            $list[$i]['money']=$money;
			}
		}
		$object = new stdClass();
		//收款方式
		$sql="select * from payments where payment_recycle!=1";
		$payments_list=$CommonFunction->getList($sql);
		//账户
		$sql="select * from banks where bank_recycle!=1";
		$bank_list=$CommonFunction->getList($sql);
		$object->payments_list=$payments_list;
		$object->bank_list=$bank_list;
		
        $object->type=$type;
        $object->list=$list;
        $view  = $this->createView("operator/shouqian/danhao_list.html");
        $view->assign($object);
        $view->display();
	}

	function pinlian_action(){
		$CommonFunction=new CommonFunction();
		$type=Request::getVar('type','post');
		$payment_id=Request::getVar('payment_id','post');
		$bank_id=Request::getVar('bank_id','post');
		$moneys[]=Request::getVar('moneys','post');
		$moneys=$moneys[0];
		$pid[]=Request::getVar('pid','post');
		$pid=$pid[0];
		//print_r($pid);exit;
		for($i=0;$i<count($pid);$i++){
			$money=$moneys[$i];
			//如果收入不为0 ，则储存收支记录
			if($moneys[$i]!=0){
				$object = new Object();
			    $object->paiche_id = $pid[$i];
				$object->payments_id = $payment_id;
				$object->bank_id = $bank_id;
				$object->money = $moneys[$i];
				$object->add_time = time();
				$object->name = "收续租金";
				$CommonFunction->instert($object,"account_log");
			}
			$sql="select paiche_brothera from paiche where paiche_id={$pid[$i]}";
			$paiche_brothera=$CommonFunction->getDataY($sql,"paiche_brothera");
			//不存在我们调别人的车
			if($paiche_brothera<=0||$type!="diaoche"){
				$sql="select * from paiche_youhui where paiche_id={$pid[$i]}";
				$youhuis=$CommonFunction->getList($sql);
				//处理优惠记录
				for($j=0;$j<count($youhuis);$j++){
					
				    $object = new stdClass();
			        $object->id = $youhuis[$j]['id'];
			        $object->youhui_omone=$youhuis[$j]['youhui_mone'];
			        $CommonFunction->update_a($object,"id","paiche_youhui","");
		        	$money=$money+($youhuis[$j]['youhui_mone']-$youhuis[$j]['youhui_omone']);
				}
				
				//处理收支
				$sql="select * from paiche_charges where paiche_id={$pid[$i]} and charge_id!=1";
				$paiche_charges=$CommonFunction->getList($sql);
				//处理优惠记录
				for($j=0;$j<count($paiche_charges);$j++){
			    	$object = new stdClass();
		        	$object->id = $paiche_charges[$j]['id'];
		        	if($money>=$paiche_charges[$j]['conv_money']-$paiche_charges[$j]['have_in_money']){
		        		$object->have_in_money=$paiche_charges[$j]['conv_money'];
		        		$money=$money-($paiche_charges[$j]['conv_money']-$paiche_charges[$j]['have_in_money']);
		        	}else{
		        		$object->have_in_money=$money;
		        		$money=0;
		        	}
		        	$CommonFunction->update_a($object,"id","paiche_charges","");
				}
				$sql="select sum(conv_money-have_in_money) as money,sum(have_freeze_money-have_back_money) as money_a from paiche_charges where paiche_id={$pid[$i]} and charge_id!=1";
		        $money_1=$CommonFunction->getData($sql);
		        $sql="select sum(youhui_mone-youhui_omone) as money,sum(youhui_smoney-youhui_smoney) as money_a  from paiche_youhui where paiche_id={$pid[$i]}";
		        $money_2=$CommonFunction->getData($sql);
		        if($money_1['money']-$money_2['money']==0){
			        $object_paiche = new Object();
					$object_paiche->paiche_id = $pid[$i];
					if($type=="diaoche"){
						$object_paiche->paiche_pintainum=2;
					}else{
						$object_paiche->paiche_personal=2;
					}
					if($money_1['money_a']-$money_2['money_a']==0){
						$object_paiche->paiche_jie=3;//改变已结账状
					}
					
					$CommonFunction->update_a($object_paiche,"paiche_id","paiche","");
		        }

			//我们调别人的车
			}else{
				$money=$money*-1;
				$sql="select * from paiche_youhui where paiche_id={$pid[$i]}";
				$youhuis=$CommonFunction->getList($sql);
				//处理优惠记录
				for($j=0;$j<count($youhuis);$j++){
			    	$object = new stdClass();
		        	$object->id = $youhuis[$j]['id'];
		        	$object->youhui_emoney=$youhuis[$j]['youhui_smoney'];
		        	$CommonFunction->update_a($object,"id","paiche_youhui","");
		        	$money=$money+($youhuis[$j]['youhui_smoney']-$youhuis[$j]['youhui_emoney']);
				}
				//处理收支
				$sql="select * from paiche_charges where paiche_id={$pid[$i]} and charge_id!=1";
				$paiche_charges=$CommonFunction->getList($sql);
				
				for($j=0;$j<count($paiche_charges);$j++){
			    	$object = new stdClass();
		        	$object->id = $paiche_charges[$j]['id'];
		        	if($money>=$paiche_charges[$j]['have_freeze_money']-$paiche_charges[$j]['have_back_money']){
		        		$object->have_back_money=$paiche_charges[$j]['have_freeze_money'];
		        		$money=$money-($paiche_charges[$j]['have_freeze_money']-$paiche_charges[$j]['have_back_money']);
		        	}else{
		        		$object->have_back_money=$money;
		        		$money=0;
		        	}
		        	$CommonFunction->update_a($object,"id","paiche_charges","");
				}
				$sql="select sum(conv_money-have_in_money) as money,sum(have_freeze_money-have_back_money) as money_a from paiche_charges where paiche_id={$pid[$i]} and charge_id!=1";
		        $money_1=$CommonFunction->getData($sql);
		        $sql="select sum(youhui_mone-youhui_omone) as money,sum(youhui_smoney-youhui_smoney) as money_a  from paiche_youhui where paiche_id={$pid[$i]}";
		        $money_2=$CommonFunction->getData($sql);
		        //print_r($money_1['money_a']-$money_2['money_a']);exit;
		        if($money_1['money_a']-$money_2['money_a']==0){
		        	$object_paiche = new Object();
		        	$object_paiche->paiche_id = $pid[$i];
		        	$object_paiche->paiche_pintainum = 2;
		        	if($money_1['money']-$money_2['money']==0){
		        		$object_paiche->paiche_jie=3;//改变已结账状
		        	}
					
					$CommonFunction->update_a($object_paiche,"paiche_id","paiche","");
		        }
		        
			}
		}
		//print_r("expression");exit;
		$re=true;
		if($re){
			$this->redirect("index.php?task==piliang_index","操作成功");
		}else{
			$this->redirect("index.php?task==piliang_index","操作失败");
		}
	}
	













	function index(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/index");
		$view  = $this->createView("operator/shouqian/index.html");
        $view->display();
	}
	function sousuo(){
		$CommonFunction=new CommonFunction();
		$paiche_contractNum=Request::getVar('paiche_contractNum','post');
		$pid=Request::getVar('pid','get');
		$sql="select * from paiche where paiche_contractNum ='{$paiche_contractNum}'";
		if($pid){
			$sql="select * from paiche where paiche_id ={$pid}";
		}
		
		$paiche=$CommonFunction->getData($sql);
		if(!$paiche){
			print_r("没有此合同号！");exit;
		}
		if($paiche['paiche_type']!=1&&$paiche['paiche_type']!=2&&$paiche['paiche_type']!=3){
			print_r("其他类型派车单，等待开发！");exit;
		}
		$object = new stdClass();
		$object->paiche=$paiche;
		$view  = $this->createView("operator/shouqian/sousuo.html");
		$view->assign($object);
        $view->display();
	}

	function yajin(){
		$CommonFunction=new CommonFunction();
		$pid=Request::getVar('pid','get');
		$sql="select a.*,b.car_num,c.settle_endDate,d.client_name from paiche as a left join car as b on a.paicheCar=b.car_id left join settle as c on a.paiche_id=c.settlePaicheId left join client AS d ON a.paicheCom=d.client_id where a.paiche_id={$pid}";
		$paiche=$CommonFunction->getData($sql);
		//违章记录
		$sql="select a.*,b.car_num from breakrules as a left join car as b on a.breakrules_CarId=b.car_id where a.breakrulesPaicheId={$pid}";
		$breakrules=$CommonFunction->getList($sql);
		if(count($breakrules)>0){
			for($i=0;$i<count($breakrules);$i++){
				$breakrules[$i]['breakrules_date']=($breakrules[$i]['breakrules_date']>0?date("Y-m-d H:i:s",$breakrules[$i]['breakrules_date']):"");
				$breakrules[$i]['breakrules_times']=($breakrules[$i]['breakrules_times']>0?date("Y-m-d H:i:s",$breakrules[$i]['breakrules_times']):"");
				$breakrules[$i]['breakrules_endtimes']=($breakrules[$i]['breakrules_endtimes']>0?date("Y-m-d H:i:s",$breakrules[$i]['breakrules_endtimes']):"");
			}
		}
		//押金详细
		$sql="select * from paiche_charges where paiche_id={$pid} and charge_id=1";
		$data=$CommonFunction->getData($sql);

		$sql="Select a.*,b.payment_name,c.bank_name From account_log as a 
			Left Join payments as b ON a.payments_id=b.payment_id Left Join banks as c on a.bank_id=c.bank_id 
			Where a.paiche_id={$pid} and (a.name like '%押金' or a.name like '%违章保证金') Order by a.add_time";

		$account_log=$CommonFunction->getList($sql);
		if(count($account_log)>0){
			for($i=0;$i<count($account_log);$i++){
				$account_log[$i]['add_time']=($account_log[$i]['add_time']>0?date("Y-m-d H:i:s",$account_log[$i]['add_time']):"");
			}
		}
		//收款方式
		$sql="select * from payments where payment_recycle!=1";
		$payments_list=$CommonFunction->getList($sql);
		//账户
		$sql="select * from banks where bank_recycle!=1";
		$bank_list=$CommonFunction->getList($sql);

		//换车记录
		$sql="select * from changecar where changecarPaicheId={$pid} Order by changecar_id";
		$changecar_list=$CommonFunction->getList($sql);

		$breakrules_list=null;
		if(count($changecar_list)>0){

			for($i=0;$i<=count($changecar_list);$i++){
					$stim=null;
					$etime=null;
					$car=null;
				if($i==0){
					$stim=$paiche['paiche_startDate'];
					$etime=$changecar_list[$i]['changecar_times'];
					$car=$changecar_list[$i]['changecar_carA'];
				}else if($i<count($changecar_list)){
					$stim=$changecar_list[$i-1]['changecar_times'];
					$etime=$changecar_list[$i]['changecar_times'];
					$car=$changecar_list[$i]['changecar_carA'];
				}else{
					$stim=$changecar_list[$i-1]['changecar_times'];
					$etime=$paiche['paiche_endDate'];
					$car=$paiche['paicheCar'];
					if($paiche['paiche_jie']<=1){
						$etime=time();

					}else{
						$etime=$paiche['settle_endDate'];
					}
				}
				
				$sql="Select a.*,b.car_num From breakrules as a Left Join car as b on a.breakrules_CarId=b.car_id Where breakrules_DriverID=0 AND breakrulesPaicheId=0 AND breakrules_CarId={$car} AND breakrules_date>={$stim} AND breakrules_date<={$etime} Order by breakrules_date";
				//print_r($etime);
				$list=$CommonFunction->getList($sql);

				if(count($list)>0){
					for($j=0;$j<count($list);$j++){
						$breakrules_list[]=$list[$j];
					}
				}

			}
			//exit;
		}else{
			$stim=$stim=$paiche['paiche_startDate'];
			$etime=$paiche['paiche_endDate'];
			$car=$paiche['paicheCar'];
			if($paiche['paiche_jie']<=1){
				$etime=time();
			}else{
				$etime=$paiche['settle_endDate'];
			}
			$sql="Select a.*,b.car_num From breakrules as a Left Join car as b on a.breakrules_CarId=b.car_id Where breakrules_DriverID=0 AND breakrulesPaicheId=0 AND breakrules_CarId={$paiche['paicheCar']} AND breakrules_date>={$paiche['paiche_startDate']} AND breakrules_date<={$paiche['paiche_endDate']} Order by breakrules_date";
			$list=$CommonFunction->getList($sql);
			if(count($list)>0){
				for($j=0;$j<count($list);$j++){
					$breakrules_list[]=$list[$j];
				}
			}
		}
		for($i=0;$i<count($breakrules_list);$i++){
			$breakrules_list[$i]['breakrules_date']= ($breakrules_list[$i]['breakrules_date']>0?date("Y-m-d H:i:s",$breakrules_list[$i]['breakrules_date']):"");
		}

		$object = new stdClass();
		$object->data=$data;
		$object->breakrules=$breakrules;
		
		$object->account_log=$account_log;
		$object->add_time=date("Y-m-d H:i:s",time());

		$object->pid=$pid;
		$object->payments_list=$payments_list;
		$object->bank_list=$bank_list;
		$object->breakrules_list=$breakrules_list;
		$object->paiche=$paiche;
		$view  = $this->createView("operator/shouqian/yajin.html");
		$view->assign($object);
        $view->display();
		

	}

	function yajin_acction(){
		$CommonFunction=new CommonFunction();
		$pid=Request::getVar('pid','post');
		$yajin_type=Request::getVar('yajin_type','post');
		$id=Request::getVar('cid','post');
		$sql="select * from paiche_charges where id={$id}";
		$yajin=$CommonFunction->getData($sql);
		//收押金
		$re=true;
		if($yajin_type==1){
			$object = new stdClass();
			//$object->addtime = Request::getVar('add_time','post');
			$object->id =$id;
			$object->have_in_money = $yajin['have_in_money']+Request::getVar('have_in_money','post');
			$object->status =1;
			$object->payments_id = Request::getVar('payments_id','post');
	        $object->bank_id = Request::getVar('bank_id','post');
	        if($CommonFunction->update_a($object,"id","paiche_charges","")){
			 	$re=true;
			}else{
			 	$re=false;
			}
			if($re){
				$object = new Object();
	    		$object->paiche_id = $pid;
		        $object->payments_id =Request::getVar('payments_id','post');
		        $object->bank_id = Request::getVar('bank_id','post');
		        $object->money = Request::getVar('have_in_money','post');
		        $object->add_time = time();
		        $object->name = "收押金";
		        $object->remark =Request::getVar('remark','post');
		        if($CommonFunction->instert($object,"account_log")){
				 	$re=true;
				}else{
				 	$re=false;
				}
			}
			if($re){
				$object = new Object();
	    		$object->paiche_id = $pid;
	    		$object->paiche_accountstatus=1;
	    		if($CommonFunction->update_a($object,"paiche_id","paiche","")){
				 	$re=true;
				}else{
				 	$re=false;
				}
			}
			
		}else if($yajin_type==2){//退押金
			$object = new Object();
	    	$object->id = $id;
		    $object->have_back_money =  $yajin['have_back_money']+Request::getVar('have_back_money','post');
			if($CommonFunction->update_a($object,"id","paiche_charges","")){
			 	$re=true;
			}else{
			 	$re=false;
			}
			
			if($re){
				$object = new Object();
	    		$object->paiche_id = $pid;
		        $object->payments_id = Request::getVar('payments_ida','post');
		        $object->bank_id = Request::getVar('bank_ida','post');
		        $object->money = (Request::getVar('have_back_money','post'))*-1;
		        $object->add_time = time();
		        $object->name = "退押金";
		        $object->remark =Request::getVar('remark_a','post');
		        
				if ($CommonFunction->instert($object,"account_log")){
				}else{
					$re=false;
				}
			}
				


		}else if($yajin_type==3){//冻结违章
			$paiche_type=Request::getVar('paiche_type','post');
			if($paiche_type==1){
				$object = new Object();
		    	$object->id = $id;
			    $object->have_freeze_money = $yajin['have_freeze_money']+Request::getVar('have_freeze_money','post');
				if ($CommonFunction->update_a($object,"id","paiche_charges","")){
				}else{
					$re=false;
				}
			}
			
			if($re){
				$object = new stdClass();
				if($paiche_type==3){
					$object->breakrules_isCom=1;
				}
				$object->breakrules_id = Request::getVar('breakrules_id','post');
			  	$object->breakrulesPaicheId=$pid;
			  	$object->breakrules_times=time();
				if ($CommonFunction->update_a($object,"breakrules_id","breakrules","")){
				}else{
					$re=false;
				}
			}

		}
		if($re){
			$this->redirect("index.php?task==sousuo&pid={$pid}","操作成功");
		}else{
			$this->redirect("index.php?task==sousuo&pid={$pid}","操作失败");
		}
		
	}

	function qita(){
		$CommonFunction=new CommonFunction();
		$pid=Request::getVar('pid','get');
		//账目明细
		$sql="select a.*,b.emp_name,c.charge_name from paiche_charges as a left join emp as b on a.addemp=b.emp_id left join charges as c on a.charge_id=c.charge_id where a.paiche_id={$pid} and a.charge_id!=1";
		$charges_list=$CommonFunction->getList($sql);
		if(count($charges_list)>0){
			for($i=0;$i<count($charges_list);$i++){
				$charges_list[$i]['addtime']= ($charges_list[$i]['addtime']>0?date("Y-m-d H:i:s",$charges_list[$i]['addtime']):"");
			}
		}
		//派车单信息left join client AS b ON a.paicheCom=b.client_id
		$sql="select a.*,b.car_num,c.settle_endDate,d.client_name from paiche as a left join car as b on a.paicheCar=b.car_id left join settle as c on a.paiche_id=c.settlePaicheId left join client AS d ON a.paicheCom=d.client_id where a.paiche_id={$pid}";
		$paiche=$CommonFunction->getData($sql);

		//收支详细
		$sql="Select a.*,b.payment_name,c.bank_name From account_log as a 
			Left Join payments as b ON a.payments_id=b.payment_id Left Join banks as c on a.bank_id=c.bank_id 

			Where a.paiche_id={$pid} and a.name in ('收租金','租车结账收款','收续租金','租车违约收违约金','租车违约退租金','长期用车月结') Order by a.add_time";

		$account_log=$CommonFunction->getList($sql);
		if(count($account_log)>0){
			for($i=0;$i<count($account_log);$i++){
				$account_log[$i]['add_time']=($account_log[$i]['add_time']>0?date("Y-m-d H:i:s",$account_log[$i]['add_time']):"");
			}
		}
		//优惠
		$sql="select a.*,b.emp_name from paiche_youhui as a left join emp as b on a.youhui_empid=b.emp_id where a.paiche_id={$pid}";
		$youhui_list=$CommonFunction->getList($sql);
		if(count($youhui_list)>0){
			for($i=0;$i<count($youhui_list);$i++){
				$youhui_list[$i]['youhui_addtime']=($youhui_list[$i]['youhui_addtime']>0?date("Y-m-d H:i:s",$youhui_list[$i]['youhui_addtime']):"");
			}
		}
		//收款方式
		$sql="select * from payments where payment_recycle!=1";
		$payments_list=$CommonFunction->getList($sql);
		//账户
		$sql="select * from banks where bank_recycle!=1";
		$bank_list=$CommonFunction->getList($sql);
		$object = new stdClass();
		$object->payments_list=$payments_list;
		$object->bank_list=$bank_list;

		$object->charges_list=$charges_list;
		$object->paiche=$paiche;
		$object->pid=$pid;
		$object->youhui_list=$youhui_list;
		$object->account_log=$account_log;
		$view  = $this->createView("operator/shouqian/qita.html");
		$view->assign($object);
        $view->display();
		
	}



	function qita_action(){
		//print_r("expression");exit;
		$CommonFunction=new CommonFunction();
		$re=true;
		$pid=Request::getVar('pid','post');
		$payment_id=Request::getVar('payment_id','post');
		$bank_id=Request::getVar('bank_id','post');
		//公司收费
		$charges_aaa=Request::getVar('charges_aaa','post');
		$have_in_money=Request::getVar('have_in_money','post');
		$have_in_money_a=Request::getVar('have_in_money_a','post');
		for($i=0;$i<count($charges_aaa);$i++){
			$object = new Object();
	    	$object->id = $charges_aaa[$i];
		    $object->have_in_money = $have_in_money[$i]+$have_in_money_a[$i];
		    $object->payments_id = $payment_id;
	       	$object->bank_id = $bank_id;
			if ($CommonFunction->update_a($object,"id","paiche_charges","")){
			}else{
				$re=false;
			}
		}
		//公司优惠
		$youhui_aaa=Request::getVar('youhui_aaa','post');
		$youhui_omone=Request::getVar('youhui_omone','post');
		$youhui_omone_a=Request::getVar('youhui_omone_a','post');
		for($i=0;$i<count($youhui_aaa);$i++){
			$object = new Object();
	    	$object->id = $youhui_aaa[$i];
		    $object->youhui_omone = $youhui_omone[$i]+$youhui_omone_a[$i];
			if ($CommonFunction->update_a($object,"id","paiche_youhui","")){
			}else{
				$re=false;
			}
		}
		//调车公司收费
		$charges_bbb=Request::getVar('charges_bbb','post');
		$have_back_money=Request::getVar('have_back_money','post');
		$have_back_money_a=Request::getVar('have_back_money_a','post');
		//print_r($have_back_money);
		//print_r($have_back_money);
		//exit;
		for($i=0;$i<count($charges_bbb);$i++){
			$object = new Object();
	    	$object->id = $charges_bbb[$i];
		    $object->have_back_money = $have_back_money[$i]+$have_back_money_a[$i];
		    $object->payments_id = $payment_id;
	       	$object->bank_id = $bank_id;
			if ($CommonFunction->update_a($object,"id","paiche_charges","")){
			}else{
				$re=false;
			}
		}
		$youhui_bbb=Request::getVar('youhui_bbb','post');
		$youhui_emoney=Request::getVar('youhui_emoney','post');
		$youhui_emoney_a=Request::getVar('youhui_emoney_a','post');
		for($i=0;$i<count($youhui_bbb);$i++){
			$object = new Object();
	    	$object->id = $youhui_bbb[$i];
		    $object->youhui_emoney = $youhui_emoney[$i]+$youhui_emoney_a[$i];
			if ($CommonFunction->update_a($object,"id","paiche_youhui","")){
			}else{
				$re=false;
			}
		}
		//收支记录
		$money=Request::getVar('money','post');
		if($money!=0){
				//print_r($money);exit;
				$object = new Object();
	    		$object->paiche_id = $pid;
		        $object->payments_id = $payment_id;
		        $object->bank_id = $bank_id;
		        $object->money = $money;
		        $object->add_time = time();
		        $object->name = "收续租金";
				if ($CommonFunction->instert($object,"account_log")){
				}else{
					$re=false;
				}
				$object2 = new Object();
				$object2->paiche_id = $pid;
				$object2->paiche_accountstatus=1;
				if ($CommonFunction->update_a($object2,"paiche_id","paiche","")){
				}else{
					$re=false;
				}
			}

		$yajin_type=Request::getVar('yajin_type','post');
		if($yajin_type==2){
			$object_paiche = new Object();
			$object_paiche->paiche_id = $pid;
			$object_paiche->paiche_jie=3;//改变已结账状态
			if ($CommonFunction->update_a($object_paiche,"paiche_id","paiche","")){

			}else{
				$re=false;
			}
		}
		
		if($re){
			$this->redirect("index.php?task==sousuo&pid={$pid}","操作成功");
		}else{
			$this->redirect("index.php?task==sousuo&pid={$pid}","操作失败");
		}
		
		
	}
	function quxiao(){
		$CommonFunction=new CommonFunction();
		$pid=Request::getVar('pid','get');
		$sql="select * from paiche_charges where paiche_id={$pid} and charge_id=26";
		$weiyue=$CommonFunction->getData($sql);
		$sql="select * from paiche where paiche_id={$pid}";
		$paiche=$CommonFunction->getData($sql);
		//收款方式
		$sql="select * from payments where payment_recycle!=1";
		$payments_list=$CommonFunction->getList($sql);
		//账户
		$sql="select * from banks where bank_recycle!=1";
		$bank_list=$CommonFunction->getList($sql);
		$object = new Object();
		$object->weiyue=$weiyue;
		$object->pid=$pid;
		$object->paiche=$paiche;
		$object->payments_list=$payments_list;
		$object->bank_list=$bank_list;

		$view  = $this->createView("operator/shouqian/quxiao.html");
		$view->assign($object);
        $view->display();


	}
	function quxiao_action(){
		$CommonFunction=new CommonFunction();
		$pid=Request::getVar('pid','post');
		$payment_id=Request::getVar('payment_id','post');
		$bank_id=Request::getVar('bank_id','post');
		$sql="select * from paiche_charges where paiche_id={$pid}";
		$data=$CommonFunction->getData($sql);
		$re=true;
		$object = new Object();
		$object->paiche_id = $pid;
		$object->charge_id = 26;
		$object->status =1;
        $object->have_in_money = $data["conv_money"];
        $object->have_back_money = $data['have_freeze_money'];
        $object->payments_id = $payment_id;
    	$object->bank_id = $bank_id;
		if ($CommonFunction->update_a($object,"paiche_id","paiche_charges","")){
		}else{
			$re=false;
		}

		$money=($data["conv_money"]-$data["have_in_money"])-($data["have_freeze_money"]-$data["have_back_money"]);
		$object = new Object();
	    $object->paiche_id = $pid;
		$object->payments_id = $payment_id;
		$object->bank_id = $bank_id;

		$object->money = $money;
		$object->add_time = time();
        $object->name = "收续租金";
		if ($CommonFunction->instert($object,"account_log")){
		}else{
			$re=false;
		}
		$object2 = new Object();
		$object2->paiche_id = $pid;
		$object2->paiche_jie=-2;
		if ($CommonFunction->update_a($object2,"paiche_id","paiche","")){
		}else{
			$re=false;
		}
		if($re){
			$this->redirect("index.php?task==sousuo&pid={$pid}","操作成功");
		}else{
			$this->redirect("index.php?task==sousuo&pid={$pid}","操作失败");
		}
	}
	

}
