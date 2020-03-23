<?php
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('operator.navi.admincontroller');
import('operator.navi.privilegehelper');
import('imag.fusecookie');

error_reporting(E_ERROR);

class SmsController extends AdminController
{
	function __construct($config = array())
	{
		parent::__construct($config);
		
		$this->registerTask( 'list','getList');
		$this->registerTask( 'search','getSearch');
		$this->registerTask( 'create','create');
		$this->registerTask( 'insert','insert');
		$this->registerTask( 'batchinsert','batchinsert');
		$this->registerTask( 'resend','resend');
		$this->registerTask( 'select','select');
		$this->registerTask( 'sendmsg','sendmsg');
	}
	function display(){
		echo "display";
	}
	function create()
	{
		$object = new stdClass();
		$object->task = "insert";
        $object->nowtime = date('Y-m-d H:i:s', time());
        $view  = $this->createView("operator/sales/sms/create.html");
		$view->assign($object);
		$view->display();
	}
	function insert()
	{
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "list.php";
		}
		$model = $this->createModel("sales",dirname( __FILE__ ));
		$empname=$model->getEmpName($_SESSION['a_uid']);
		
		$smsphone=Request::getVar('smsphone','post');
		$smscontent=Request::getVar('smscontent','post');
		$sms_type=Request::getVar('optType','post');
		$sms_senddate=Request::getVar('validity_start','post');
		$sms_sendcount=0;
		$re=true;
		$arrsmsphone=explode(",", $smsphone);	
		for($j = 0; $j < count($arrsmsphone);$j++){	
			if ($arrsmsphone[$j]<>"" && strlen($arrsmsphone[$j])==11)
			{
				$sms_state=0;
				if ($sms_type==1) //及时发送  调用短信发送接口
				{
					$sms_sendcount=1;
					echo $this->sendnote($arrsmsphone[$j],$smscontent);
					exit();
					if ($this->sendnote($arrsmsphone[$j],$smscontent)!="00"){
						$sms_state=-1;
					}else{
						$sms_state=1;
					}
				}
				$object = new stdClass();		
				$object->sms_tophone = $arrsmsphone[$j];
				$object->sms_content = $smscontent;
				$object->sms_priority=0;
				$object->sms_type = $sms_type;
				$object->sms_state = $sms_state;
				$object->sms_senddate = strtotime($sms_senddate);
				$object->sms_sendcount = $sms_sendcount;
				$object->sms_inputuser = $empname;
				$object->sms_inputdate = time();
				
				if ($model->store($object,"sales_sms")){
				}else{
					$re=false;
				}
			}
		}
		if ($re){
			$this->redirect($forward,"短信发送成功");
		}else{
			$this->redirect($forward,"短信发送失败");
		}
	}
	function batchinsert()
	{
		$smscontent="亲爱的客户您好，春节快到了，您还在等什么呢，租辆汽车回家过年，春节走亲访友倍有面子。车型齐全，任您挑选，不限里程，更多优惠套餐供您选择，咨询热线：0519-88990000。回N退订【运河租车】";
		$model = $this->createModel("sales",dirname( __FILE__ ));
		$empname=$model->getEmpName($_SESSION['a_uid']);
		$sql="Select distinct paiche_linkerPhone From `paiche` Where paiche_personal=1 and paiche_recycle!=1 and paiche_status>-2 and paiche_linkerNum <>'' and paiche_linkerPhone<>''";
		$list = $model->getListBySql(0,5000, $sql);
		echo count($list);
		$i=0;
		foreach($list as $key=>$val){
			$smsphone=$val['paiche_linkerPhone'];
			if (strlen($smsphone)==11){
				$object = new stdClass();		
				$object->sms_tophone = $smsphone;
				$object->sms_content = $smscontent;
				$object->sms_priority=0;
				$object->sms_type = 0;
				$object->sms_state = 0;
				$object->sms_senddate = time();
				$object->sms_sendcount = 0;
				$object->sms_inputuser = $empname;
				$object->sms_inputdate = time();
				$model->store($object,"sales_sms");
				$i++;
				echo $smsphone."已生成<br />";
			}
		}
		echo "共计生成个{$i}";
	}
	function resend()
	{
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "list.php";
		}
		$uid = Request::getVar('uid','get');	
		if(empty($uid))
		{
			Response::redirect($forward,"Need id!");
		}
		$model = $this->createModel("sales",dirname( __FILE__ ));
		$sql="SELECT * FROM `sales_sms` WHERE `sms_id`={$uid}";
		$Info = $model->getInfo(0,$sql);
		$smsphone=$Info['sms_tophone'];
		$smscontent=$Info['sms_content'];
		$sms_sendcount=$Info['sms_sendcount'];
		
		if ($this->sendnote($smsphone,$smscontent)!="00"){
			$sms_state=-1;
		}else{
			$sms_state=1;
		}
		$sms_sendcount++;
		
		$object = new stdClass();
		$object->sms_id = $uid;
		$object->sms_sendcount = $sms_sendcount;
		$object->sms_state = $sms_state;
		$object->sms_senddate = time();
		
		if ($model->update($object,'sms_id',"sales_sms"))
		{
			$this->redirect($forward,"短信重发成功");
		}else{
			$this->redirect($forward,"短信重发失败");
		}
	}
	function getList()
	{
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$base_url = "list.php?a=1";
		$per_page = 10;
		$search_startDate=Request::getVar('search_startDate','get');
		$search_endDate=Request::getVar('search_endDate','get');
		$search_user=Request::getVar('paicheCounterMan','get');
		$status=Request::getVar('status','get');
		$where="a.sms_priority<=0";
		if(!empty($search_startDate)){
			$base_url.="&search_startDate={$search_startDate}";
            $where .=" AND a.sms_senddate>='".strtotime($search_startDate)."'";
        }
		if(!empty($search_endDate)){
			$base_url.="&search_endDate={$search_endDate}";
            $where .=" AND a.sms_senddate<='".strtotime($search_endDate)."'";
        }
        if (!empty($search_user)){
        	$base_url.="&paicheCounterMan={$search_user}";
        	$where.=" AND a.sms_inputuser like '%{$search_user}%'";
        }
        if (!empty($status)){
        	$base_url.="&status={$status}";
        	$where.=" AND a.sms_state={$status}";
        }
		
		$model = $this->createModel("sales",dirname( __FILE__ ));
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		
		$sql="SELECT a.*,b.client_name,b.client_Mlinker FROM `sales_sms` AS a ".
			 "LEFT JOIN `client` AS b ON a.sms_tophone=b.client_Mphone ".
			 "WHERE {$where} ORDER BY a.`sms_inputdate` DESC";
		
		$List = $model->getListBySql($start,$per_page, $sql);
		$sql="SELECT COUNT(*) AS total FROM `sales_sms` AS a WHERE {$where}";
		$total_item = $model->getTotal($sql);

		$options = array(
			"baseurl"	 => $base_url,
			"totalitems" => $total_item,
			"perpage"	 => $per_page,
			"page"	     => $p,
			"maxpage"	 => 15,
			"pagestyle"  => $style,
			"showtotal"  => false
		);
		$pagination = new Pagination($options);
		$p = $pagination->getPage();
		$view  = $this->createView("operator/sales/sms/list.html");
		
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();		
		$object->list = $List;
		$object->total = $total_item;
		$view->assign($object);
		$view->display();
	}
	function getSearch()
	{
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$base_url = "list.php?task=search";
		$per_page = 20;
		$search_startDate=Request::getVar('search_startDate','get');
		$search_endDate=Request::getVar('search_endDate','get');
		$search_user=Request::getVar('paicheCounterMan','get');
		$status=Request::getVar('status','get');
		$where="1";
		if(!empty($search_startDate)){
			$base_url.="&search_startDate={$search_startDate}";
            $where .=" AND a.sms_senddate>='".strtotime($search_startDate)."'";
        }
		if(!empty($search_endDate)){
			$base_url.="&search_endDate={$search_endDate}";
            $where .=" AND a.sms_senddate<='".strtotime($search_endDate)."'";
        }
		
		$model = $this->createModel("sales",dirname( __FILE__ ));
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		
		$sql="SELECT a.*,b.client_name,b.client_Mlinker,c.emp_name FROM `sales_sms` AS a ".
			 "LEFT JOIN `client` AS b ON a.sms_tophone=b.client_Mphone ".
			 "LEFT JOIN `emp` AS c ON a.sms_tophone=c.emp_phone ".
			 "WHERE {$where} ORDER BY a.`sms_inputdate` DESC";
		
		$List = $model->getListBySql($start,$per_page, $sql);
		$sql="SELECT COUNT(*) AS total FROM `sales_sms` AS a WHERE {$where}";
		$total_item = $model->getTotal($sql);

		$options = array(
			"baseurl"	 => $base_url,
			"totalitems" => $total_item,
			"perpage"	 => $per_page,
			"page"	     => $p,
			"maxpage"	 => 15,
			"pagestyle"  => $style,
			"showtotal"  => false
		);
		$pagination = new Pagination($options);
		$p = $pagination->getPage();
		$view  = $this->createView("operator/sales/sms/search.html");
		
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();		
		$object->list = $List;
		$object->total = $total_item;
		$view->assign($object);
		$view->display();
	}
	function select()
	{
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$per_page = 100;
		$start = ($p-1)*$per_page;
		
		$itemtype=Request::getVar('itemtype','get');
		if (empty($itemtype)) $itemtype=1;
		$base_url = "select.php?itemtype={$itemtype}";
		
		$model = $this->createModel("sales",dirname( __FILE__ ));
		if ($itemtype==1){
			$sql="SELECT `client_id`,`client_name`,`client_Mlinker`,`client_Mphone` FROM `client` WHERE `client_recycle`!=1 AND `client_Mphone`!='' ";
			$sql_t="SELECT COUNT(*) AS total FROM `client`  WHERE `client_recycle`!=1 AND `client_Mphone`!='' ";
			$total_item = $model->getTotal($sql_t);
		}
		if ($itemtype==2){
			$where ="paiche_personal=1 and paiche_recycle!=1 and paiche_status>-2 ";
			$sql="Select distinct a.paiche_linkerNum,paiche_linker,paiche_linkerPhone From `paiche` as a Where {$where} and a.paiche_linkerNum <>''";
			$tmp = $model->getListBySql(0,5000, $sql);
			$total_item = count($tmp);
		}
		$List = $model->getListBySql($start,$per_page, $sql);
		
		$style = new PageStyle();
		$options = array(
			"baseurl"	 => $base_url,
			"totalitems" => $total_item,
			"perpage"	 => $per_page,
			"page"	     => $p,
			"maxpage"	 => 10,
			"pagestyle"  => $style,
			"showtotal"  => false
		);
		$pagination = new Pagination($options);
		$p = $pagination->getPage();
		
		$view  = $this->createView("operator/sales/sms/select.html");
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();
		$object->list = $List;
		$object->total = $total_item;
		$object->itemtype = $itemtype;
		$view->assign($object);
		$view->display();
	}
	
	function sendmsg()
	{
		$model = $this->createModel("sales",dirname( __FILE__ ));
		$list = null;
		$count=0;
		$sql="Select sms_id,sms_tophone,sms_content From sales_sms Where sms_senddate<=".time()." and sms_state<=0 Order by sms_priority,sms_state";
		$list=$model->getListBySql(0,10,$sql);
		if (empty($list)){
        	$info=array('status'=>0,'totalRecords'=>0,'note'=>'');
        }
        else{
        	foreach($list as $key=>$row)
            {
            	$count++;
            	$mobtel=$row['sms_tophone'];
            	$smscontent=$row['sms_content'];
            	$sms_state=0;
            	
				if ($this->sendnote($mobtel,$smscontent)!="00"){
					$sms_state=-1;
				}else{
					$sms_state=1;
				}
				
				$sql="Update sales_sms Set sms_state = {$sms_state},sms_sendcount=sms_sendcount+1,sms_priority=sms_priority-1 Where sms_id=".$row['sms_id'];
				$model->update('','','',$sql);
            }
            $info=array('status'=>0,'totalRecords'=>$count,'note'=>'');
        }
		
		echo json_encode($info);
	}
	function sendnote($mobtel,$msg)
	{
		$username='cunxia';
		$userpwd='cunxia@123';
		
		//$url="http://182.50.0.172:8007/msmqntlmt.ashx?phone=$mobtel&message=".iconv('UTF-8','GB2312//TRANSLIT',$msg)."&username=$username&password=$userpwd&epid=$comid";
		//$string = file_get_contents($url);
		$url="http://pi.noc.cn/SendSMS.aspx";
		$post_string="ececcid=$username&password=$userpwd&msisdn=$mobtel&smscontent=$msg&msgtype=5&longcode=11";
		return $this->postRequest($url,$post_string);
		
	}
	function postRequest($remote_server,$post_string){
		$context = array(
			'http'=>array(
			'method'=>'POST',
			'header'=>'Content-type: application/x-www-form-urlencoded'."\r\n".
			'User-Agent : Jimmy\'s POST Example beta'."\r\n".
			'Content-length: '.strlen($post_string)+8,
			'content'=>$post_string)
		);
		$stream_context = stream_context_create($context);
		$data = file_get_contents($remote_server,FALSE,$stream_context);
		return $data;
	}
}
?>