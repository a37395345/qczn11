<?php
import('operator.navi.admincontroller');
import('publicFunction.CommonFunction');
import('imag.utilities.pagination');
import('imag.utilities.pagestyle_a');
import('imag.image.uploader');
import('operator.navi.privilegehelper');
import('imag.fusecookie');
import('imag.filesystem.fusefile');
import('imag.filesystem.filesystem');
import('imag.utilities.tool');
class beiyongjinController extends AdminController
{
	private $package="site/operator/beiyongjin";
	function __construct($config = array())
	{
		parent::__construct($config);
		$this->registerTask( 'index','index');
		$this->registerTask( 'jk_index','jk_index');
		$this->registerTask( 'fk_add','fk_add');
		$this->registerTask( 'fk_edit','fk_edit');
		$this->registerTask( 'fk_shenhe','fk_shenhe');
		$this->registerTask( 'fk_fakuan','fk_fakuan');
		$this->registerTask( 'fk_huankuan','fk_huankuan');
		$this->registerTask( 'fk_add_action','fk_add_action');
		$this->registerTask( 'fk_edit_action','fk_edit_action');
		$this->registerTask( 'fk_delete','fk_delete');
		$this->registerTask( 'fk_shenhe_action','fk_shenhe_action');
		$this->registerTask( 'fk_fakuan_action','fk_fakuan_action');
		$this->registerTask( 'fk_huankuan_action','fk_huankuan_action');
		$this->registerTask( 'guihuan','guihuan');
		$this->registerTask( 'guihuan_action','guihuan_action');
		$this->registerTask( 'dakuan','dakuan');
		$this->registerTask( 'dakuan_action','dakuan_action');
		
		
	}

	function index(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/index");
		//打款备用金
		$sql="select sum(money) as money from account_log where type_id=35";
		$dk=($CommonFunction->getDataY($sql,"money"))*-1;
		//备用金归还
		$sql="select sum(money) as money from account_log where type_id=1";
		$gh=($CommonFunction->getDataY($sql,"money"));
		//借款金额
		$sql="select sum(borrow_money) as jie, sum(borrow_Returnmoney) as huan from borrow where  status=2";
		$jiekuan=$CommonFunction->getdata($sql);
		//总计
		$zongji=$dk-$gh-$jiekuan['jie']+$jiekuan['huan'];
		$sql="Select c.emp_name,a.* From emp as c Inner Join (Select borrow_emp,Sum(borrow_money) as borrow_money,Sum(borrow_Returnmoney) as borrow_Returnmoney From borrow Where status=2  Group by borrow_emp ) as a ON a.borrow_emp=c.emp_id";
		$list=$CommonFunction->getList($sql);
		$sql="select a.*,b.emp_name,c.payment_name,d.bank_name from account_log as a left join emp as b on a.user_id=b.emp_id left join payments as c on a.payments_id=c.payment_id Left Join banks as d on a.bank_id=d.bank_id   where (a.type_id=35 or a.type_id=1)";
		$list_a=$CommonFunction->getList($sql);
		for($i=0;$i<count($list_a);$i++){
			$list_a[$i]['add_time']=date('Y-m-d H:i:s',$list_a[$i]['add_time']);
		}

		$object = new stdClass();
		$object->list=$list;
		$object->list_a=$list_a;
		$object->dk=number_format($dk,2);
		$object->gh=number_format($gh,2);
		$object->jie=number_format($jiekuan['jie'],2);
		$object->huan=number_format($jiekuan['huan'],2);

		$object->zongji=number_format($zongji,2);
		$object->jk_index=$CommonFunction->panduan_rule($this->package."/jk_index");
		$object->guihuan=$CommonFunction->panduan_rule($this->package."/guihuan");
		$object->dakuan=$CommonFunction->panduan_rule($this->package."/dakuan");
		$view  = $this->createView("operator/beiyongjin/index.html");
		$view->assign($object);
		$view->display();
	}

	function jk_index(){
		//sattus=-1 返回修改 0为等待审核 1为等待发款 2为待还款 3为已还款
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/jk_index");
		$base_url = "index.php?task=jk_index";
		//页数
		$p = Request::getVar('p','get');
		if(empty($p)){$p=1;}
		$per_page = 20;
		$style = new PageStyle_a();
		$start = ($p-1)*$per_page;
		$where="a.`borrow_recycle`!=1";
		$status = Request::getVar('status','post');
		if(!empty($status)){
			if($status==99){
				$status=0;
			}
			$where.=" and a.status={$status}";
			$base_url.="&status={$status}";
		}
		$emp_name = Request::getVar('emp_name','post');

		if(!empty($emp_name)){
			$where.=" and c.emp_name like '%{$emp_name}%'";
			$base_url.="&emp_name={$emp_name}";
		}

		$s_time = strtotime(Request::getVar('s_time','post'));
		if($s_time>0){
			$where.=" and a.borrow_date>{$s_time}";
			$base_url.="&s_time={$s_time}";
		}
		$e_time = strtotime(Request::getVar('e_time','post'));
		if($e_time>0){
			$where.=" and a.borrow_date<{$e_time}";
			$base_url.="&e_time={$e_time}";
		}
		$sql="SELECT a.*,c.emp_name FROM `borrow` AS a ".
			 "LEFT JOIN `emp` AS c ON a.borrow_emp=c.emp_id WHERE {$where} ORDER BY a.borrow_id desc LIMIT {$start},{$per_page}";
			 //print_r($sql);exit;
		$list = $CommonFunction->getList($sql);
		for($i=0;$i<count($list);$i++){
			$list[$i]['borrow_date']=date('Y-m-d H:i:s',$list[$i]['borrow_date'] );
			if($list[$i]['borrow_isAgreeTime']!=0){
				$list[$i]['borrow_isAgreeTime']=date('Y-m-d H:i:s',$list[$i]['borrow_isAgreeTime']);
			}else{
				$list[$i]['borrow_isAgreeTime']='-';
			}
			if($list[$i]['status']>1){
				$list[$i]['fa_time']=date('Y-m-d H:i:s',$list[$i]['fa_time']);
			}else{
				$list[$i]['fa_time']='-';
			}
		}
		$total_item=$CommonFunction->getdataY("SELECT COUNT(*) AS count FROM `borrow` AS a LEFT JOIN `emp` AS c ON a.borrow_emp=c.emp_id WHERE {$where}","count");
		//print($total_item);exit;
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
		$view  = $this->createView("operator/beiyongjin/jk_index.html");
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();		
		$object->list=$list;
		$object->p=$p;
		$object->user_id=$_SESSION['user_id'];
		$object->total=$total_item;
		$object->fk_add=$CommonFunction->panduan_rule($this->package."/fk_add");
		$object->fk_edit=$CommonFunction->panduan_rule($this->package."/fk_edit");

		$object->fk_delete=$CommonFunction->panduan_rule($this->package."/fk_delete");
		$object->fk_shenhe=$CommonFunction->panduan_rule($this->package."/fk_shenhe");
		$object->fk_fakuan=$CommonFunction->panduan_rule($this->package."/fk_fakuan");
		$object->fk_huankuan=$CommonFunction->panduan_rule($this->package."/fk_huankuan");
		$view->assign($object);
		$view->display();
	}
	function fk_add(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/fk_add");
		$view  = $this->createView("operator/beiyongjin/fk_add.html");
		$view->display();
	}
	function fk_add_action(){
		$CommonFunction=new CommonFunction();
		$borrow_money = Request::getVar('borrow_money','post');
		$borrow_remarks = Request::getVar('borrow_remarks','post');
		$object=new Object();
		$object->borrow_money=$borrow_money;
		$object->borrow_remarks=$borrow_remarks;
		$object->borrow_emp=$_SESSION['user_id'];
		$object->status=0;
		$object->borrow_date=time();		
		if($CommonFunction->instert($object,'borrow')){
			$CommonFunction->setAction("添加了借款-".$object->borrow_emp);
			$req=true;
		}else{
			$req=false;
			
		}
		$object = new stdClass();
        $object->result = $req ? "添加成功！":"添加失败，返回重试！";
        $view  = $this->createView("operator/beiyongjin/result.html");
        $view->assign($object);
        $view->display();
	}
	function fk_edit(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/fk_edit");
		$id = Request::getVar('id','get');
		$sql="select * from borrow where borrow_id={$id}";
		$data=$CommonFunction->getdata($sql);
		$object = new stdClass();
		$object->data=$data;
		$view  = $this->createView("operator/beiyongjin/fk_edit.html");
		$view->assign($object);
		$view->display();
	}
	function fk_edit_action(){
		$CommonFunction=new CommonFunction();
		$borrow_money = Request::getVar('borrow_money','post');
		$borrow_remarks = Request::getVar('borrow_remarks','post');
		$id = Request::getVar('id','post');
		$object=new Object();
		$object->status=0;
		$object->borrow_money=$borrow_money;
		$object->borrow_remarks=$borrow_remarks;
		$object->borrow_date=time();
		$object->borrow_id=$id;
		if($CommonFunction->update_a($object,'borrow_id','borrow','')){
			$CommonFunction->setAction("修改了借款-ID为".$id);
			$req=true;
		}else{
			$req=false;
		}
		$object = new stdClass();
        $object->result = $req ? "修改成功！":"修改失败，返回重试！";
        $view  = $this->createView("operator/beiyongjin/result.html");
        $view->assign($object);
        $view->display();
		
	}
	//删除
	function fk_delete(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/fk_delete");
		$id = Request::getVar('id','get');
		
		if($CommonFunction->dalete_sql("borrow","borrow_id",$id)){
			$CommonFunction->setAction("删除了借款，ID为".$id);
			$this->redirect("jk_index.php","删除成功！");
		}else{
			$this->redirect("jk_index.php","删除失败！");
		}	
	}
	function fk_shenhe(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/fk_shenhe");
		$id = Request::getVar('id','get');
		$object = new stdClass();
		$object->id=$id;
		$view  = $this->createView("operator/beiyongjin/fk_shenhe.html");
		$view->assign($object);
		$view->display();
	}
	function fk_shenhe_action(){
		$CommonFunction=new CommonFunction();
		$id = Request::getVar('id','post');
		$shenhe = Request::getVar('shenhe','post');
		$object = new stdClass();
		$object->borrow_id=$id;
		$object->borrow_isAgreeMan=$CommonFunction->getDataY("select emp_name from emp where emp_id={$_SESSION['user_id']}",'emp_name');
		$object->borrow_isAgreeTime=time();
		if($shenhe==1){
			$object->status=1;
		}else{
			$object->status=-1;
		}

		if($CommonFunction->update_a($object,'borrow_id','borrow','')){
			$CommonFunction->setAction("审核了借款-ID为".$id);
			$req=true;
		}else{
			$req=false;
		}
		$object = new stdClass();
        $object->result = $req ? "审核成功！":"审核失败，返回重试！";
        $view  = $this->createView("operator/beiyongjin/result.html");
        $view->assign($object);
        $view->display();
		
		
	}
	//发款
	function fk_fakuan(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/fk_fakuan");
		$id = Request::getVar('id','get');
		$sql="select * from borrow where borrow_id={$id}";
		$data=$CommonFunction->getdata($sql);
		$data['emp_name']=$CommonFunction->getDataY("select emp_name from emp where emp_id={$data['borrow_emp']}",'emp_name');
		$data['borrow_date']=date('Y-m-d H:i:s',$data['borrow_date'] );
		$data['borrow_isAgreeTime']=date('Y-m-d H:i:s',$data['borrow_isAgreeTime'] );
		$view  = $this->createView("operator/beiyongjin/fk_fakuan.html");
		$object = new stdClass();
		$object->id=$id;
		$object->data=$data;
		$view->assign($object);
		$view->display();
	}
	function fk_fakuan_action(){
		$CommonFunction=new CommonFunction();
		$id = Request::getVar('id','post');
		$object = new stdClass();
		$object->fa_name=$CommonFunction->getDataY("select emp_name from emp where emp_id={$_SESSION['user_id']}",'emp_name');
		$object->fa_time=time();
		$object->status=2;
		$object->borrow_id=$id;
		if($CommonFunction->update_a($object,'borrow_id','borrow','')){
			$CommonFunction->setAction("发放了借款-ID为".$id);
			$req=true;
		}else{
			$req=false;
		}
		$object = new stdClass();
        $object->result = $req ? "发款成功！":"发款失败，返回重试！";
        $view  = $this->createView("operator/beiyongjin/result.html");
        $view->assign($object);
        $view->display();
	}
	//还款
	function fk_huankuan(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/fk_huankuan");
		$id = Request::getVar('id','get');
		$sql="select * from borrow where borrow_id={$id}";
		$data=$CommonFunction->getdata($sql);
		$view  = $this->createView("operator/beiyongjin/fk_huankuan.html");
		$object = new stdClass();
		$object->id=$id;
		$object->data=$data;
		$view->assign($object);
		$view->display();
	}
	function fk_huankuan_action(){
		$CommonFunction=new CommonFunction();
		$id = Request::getVar('id','post');
		$hk_money = Request::getVar('hk_money','post');
		$borrow_Returnmoney = Request::getVar('borrow_Returnmoney','post');
		$borrow_money = Request::getVar('borrow_money','post');
		$object = new stdClass();
		$object->borrow_id=$id;
		$object->borrow_Returnmoney=$borrow_Returnmoney+$hk_money;
		if($hk_money+$borrow_Returnmoney>=$borrow_money){
			$object->status=3;
		}
		if($CommonFunction->update_a($object,'borrow_id','borrow','')){
			$CommonFunction->setAction("进行了还款-ID为".$id);
			$req=true;
		}else{
			$req=false;
		}
		$object = new stdClass();
        $object->result = $req ? "还款成功！":"还款失败，返回重试！";
        $view  = $this->createView("operator/beiyongjin/result.html");
        $view->assign($object);
        $view->display();
		
		
	}
	//备用金归还
	function guihuan(){
		//print_r("expression");exit;
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/guihuan");
		$sql="select * from payments";
		$payments_list=$CommonFunction->getList($sql);
		$sql="select * from banks";
		$banks_list=$CommonFunction->getList($sql);
		$view  = $this->createView("operator/beiyongjin/guihuan.html");
		$object = new stdClass();
		$object->payments_list=$payments_list;
		$object->banks_list=$banks_list;
		$view->assign($object);
		$view->display();
	}
	function guihuan_action(){
		$CommonFunction=new CommonFunction();
		$money = Request::getVar('money','post');
		$beizhu = Request::getVar('beizhu','post');
		$payment_id = Request::getVar('payment_id','post');
		$bank_id = Request::getVar('bank_id','post');
		$object = new stdClass();
		$object->money=$money;
		$object->payments_id=$payment_id;
		$object->bank_id=$bank_id;
		$object->remark=$beizhu;
		$object->type_id=1;
		$object->user_id=$_SESSION['user_id'];
		$object->add_time=time();
		//print_r($object);exit;
		if($CommonFunction->instert($object,'account_log')){
			$CommonFunction->setAction("归还了备用金-".$money);
			$req=true;
		}else{
			$req=false;
			
		}
		$object = new stdClass();
        $object->result = $req ? "归还成功！":"归还失败，返回重试！";
        $view  = $this->createView("operator/beiyongjin/result.html");
        $view->assign($object);
        $view->display();
	}
	//打款备用金
	function dakuan(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/dakuan");
		$sql="select * from payments";
		$payments_list=$CommonFunction->getList($sql);
		$sql="select * from banks";
		$banks_list=$CommonFunction->getList($sql);
		$view  = $this->createView("operator/beiyongjin/dakuan.html");
		$object = new stdClass();
		$object->payments_list=$payments_list;
		$object->banks_list=$banks_list;
		$view->assign($object);
		$view->display();
	}
	function dakuan_action(){
		$CommonFunction=new CommonFunction();
		$money = Request::getVar('money','post');
		$beizhu = Request::getVar('beizhu','post');
		$payment_id = Request::getVar('payment_id','post');
		$bank_id = Request::getVar('bank_id','post');
		$object = new stdClass();
		$object->money=$money*-1;
		//print_r($object->money);exit;
		$object->payments_id=$payment_id;
		$object->bank_id=$bank_id;
		$object->remark=$beizhu;
		$object->type_id=35;
		$object->user_id=$_SESSION['user_id'];
		$object->add_time=time();
		
		if($CommonFunction->instert($object,'account_log')){
			$CommonFunction->setAction("打款了备用金-".$money);
			$req=true;
		}else{
			$req=false;
			
		}
		$object = new stdClass();
        $object->result = $req ? "打款成功！":"打款失败，返回重试！";
        $view  = $this->createView("operator/beiyongjin/result.html");
        $view->assign($object);
        $view->display();
	}
}
