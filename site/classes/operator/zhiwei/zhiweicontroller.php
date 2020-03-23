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
import('model.Zemp_zhiwei');
import('model.Department');
import('model.Shop');
import('model.Emp');

class zhiweiController extends AdminController
{
	private $package="site/operator/zhiwei";
	function __construct($config = array())
	{
		parent::__construct($config);
		$this->registerTask( 'index','index');
		$this->registerTask( 'add','add');
		$this->registerTask( 'insert','insert');
		$this->registerTask( 'edit','edit');
		$this->registerTask( 'update','update');
		$this->registerTask( 'setStatus','setStatus');
		$this->registerTask( 'delete','delete');
		$this->registerTask( 'Salary','Salary');
		$this->registerTask( 'SalaryIndex','SalaryIndex');
		$this->registerTask( 'xiangxi','xiangxi');
		$this->registerTask( 'Salary_update','Salary_update');
		$this->registerTask( 'setRule','setRule');
		$this->registerTask( 'setRuleAction','setRuleAction');
		$this->registerTask( 'getShangjiZhiwei','getShangjiZhiwei');
		$this->registerTask( 'company','company');
		$this->registerTask( 'company_date','company_date');
	}
	function index(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/index");
		$object = new stdClass();
		$sql="select a.*,b.name from zemp_zhiwei as a left join department as b on a.department_id=b.id  order by a.zhiwei_order asc";
		$list=$CommonFunction->getList($sql);
		$sql_max="select max(dengji) as max from zemp_zhiwei ";
		$max=$CommonFunction->getDataY($sql_max,'max');
		$list1=$list;
		for($i=0;$i<count($list1);$i++){
			$jia="";
			for($j=2;$j<=$max;$j++){
				if($j<=$list1[$i]['dengji']){
					$jia.="+";
				}
			}
			$list1[$i]['jia']=$jia;
		}

		$list=$CommonFunction->paixuDepartment($list,0);


		$sql1="select * from department order by department_order asc";
		$list_department=$CommonFunction->getList($sql1);
		for($i=0;$i<count($list_department);$i++){
			$zhiwei_list=null;
			for($j=0;$j<count($list);$j++){
				if($list_department[$i]['id']==$list[$j]['department_id']){
					$zhiwei_list[]=$list[$j];
					$list_department[$i]['zhiwei']=$zhiwei_list;
				}
			}
		}

		$list_department=$CommonFunction->paixuDepartment($list_department,0);
		//print_r($list_department);exit;
		$object->list1=$list1;
		$object->max=$max;

		$object->list=$list;
		$object->list_department=$list_department;

		$object->rule_add=$CommonFunction->panduan_rule($this->package."/add");
		
		$object->rule_edit=$CommonFunction->panduan_rule($this->package."/edit");
		$object->rule_setStatus=$CommonFunction->panduan_rule($this->package."/setStatus");
		$object->rule_setRule=$CommonFunction->panduan_rule($this->package."/setRule");
		$object->rule_delete=$CommonFunction->panduan_rule($this->package."/delete");
		$view  = $this->createView("operator/zhiwei/index.html");
		$view->assign($object);
		$view->display();
	}
	function add(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/add");
		$sql="select * from department where status=0 order by menu_order asc";
		$list_department=$CommonFunction->getDepartment();
		//print_r($list_department);exit;
		$object = new stdClass();
		$object->list_department=$list_department;
		$view  = $this->createView("operator/zhiwei/add.html");
		$view->assign($object);
		$view->display();
	}

	//获取上级职位
	function getShangjiZhiwei(){
		$CommonFunction=new CommonFunction();
		$department_id=Request::getVar('department_id','post');
		$sql="select * from zemp_zhiwei where department_id={$department_id}";
		$list=$CommonFunction->getList($sql);
		header("Content-type: application/json");
        echo json_encode($list);
        exit();

	}

	//储存
	function insert(){
		$CommonFunction=new CommonFunction();
		$object = new stdClass();
		$object->department_id=Request::getVar('department_id','post');
		$object->zhiwei_name=Request::getVar('zhiwei_name','post');
		$object->zhize=Request::getVar('zhize','post');
		
		$pid=Request::getVar('pid','post');
		
		if($pid){
			$sql="select dengji from zemp_zhiwei where id={$pid}";

			$dengji=$CommonFunction->getDataY($sql,'dengji');
			
			$object->dengji=$dengji+1;
		}else{
			$object->dengji=1;
		}
		$object->pid=$pid;
		$object->zhiwei_order=Request::getVar('zhiwei_order','post');
		$object->xingji=Request::getVar('xingji','post');
		//$object->baoxiao_limit=Request::getVar('baoxiao_limit','post');
        $re=true;
        
		if($CommonFunction->instert($object,"zemp_zhiwei")){
		 	$re=true;
		}else{
		 	$re=false;
		}
		if($re){
			$CommonFunction->setAction("添加了职位-".$object->zhiwei_name);
		}
		$object = new stdClass();
        $object->result = $re ? "添加成功！":"添加失败，返回重试！";
        $view  = $this->createView("operator/zhiwei/result.html");
        $view->assign($object);
        $view->display();
		
	}

	function edit(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/edit");
		//部门
		$list_department=$CommonFunction->getDepartment();
		$id=Request::getVar('id','get');
		$sql="select a.*,b.name from zemp_zhiwei as a left join department as b on a.department_id=b.id where a.id={$id}";
		$zhiwei=$CommonFunction->getData($sql);
//		$sql3="select * from zemp_zhiwei where department_id={$zhiwei['department_id']} and status=0";
//		$zhiwei_list=$CommonFunction->getList($sql3);
		$zhiwei_list = Zemp_zhiwei::find('*', [
		    ['and', 'department_id', $zhiwei['department_id']],
            ['and', 'status', 0],
            ]);
		$sql1="select zhiwei_name from zemp_zhiwei where id={$zhiwei['pid']}";
		$zhiwei['pid_name']=$CommonFunction->getDataY($sql1,"zhiwei_name");
		$sql2="select count(*) as count from zemp_zhiwei where pid={$id} and status=0";
		$count=$CommonFunction->getDataY($sql2,"count");
		$object = new stdClass();
		$object->list_department=$list_department;
		$object->zhiwei=$zhiwei;
		//是否有下级
		
		$object->zhiwei_list=$zhiwei_list;
		$object->count=$count;
		$view  = $this->createView("operator/zhiwei/edit.html");
        $view->assign($object);
        $view->display();
	}



	function update(){

		$re=true;
		$CommonFunction=new CommonFunction();
		$id=Request::getVar('id','post');

		$object = new stdClass();
		$object->id=$id;
		$pid=Request::getVar('pid','post');
		
		if($pid){
			$sql="select dengji from zemp_zhiwei where id={$pid}";
			$dengji=$CommonFunction->getDataY($sql,'dengji');
			$object->dengji=$dengji+1;
		}else{
			$object->dengji=1;
		}
		$object->pid=$pid;
		$object->zhize=Request::getVar('zhize','post');
		$object->department_id=Request::getVar('department_id','post');
		$object->zhiwei_name=Request::getVar('zhiwei_name','post');
		$object->zhiwei_order=Request::getVar('zhiwei_order','post');
		$object->xingji=Request::getVar('xingji','post');
		//$object->baoxiao_limit=Request::getVar('baoxiao_limit','post');
		if($CommonFunction->update_a($object,"id","zemp_zhiwei","")){
		 	$re=true;
		}else{
		 	$re=false;
		}
		$sql="select * from zemp_zhiwei";
		$array=$CommonFunction->getList($sql);
		if($CommonFunction->setZhiweiDdengji($array,$id)){
			$re=true;
		}else{
			$re=false;
		}
		if($re){
			$CommonFunction->setAction("修改了职位-".$object->zhiwei_name);
		}
		$object = new stdClass();
        $object->result = $re ? "修改成功！":"修改失败，返回重试！";
        $view  = $this->createView("operator/zhiwei/result.html");
        $view->assign($object);
        $view->display();
	}
	
	function setStatus(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/setStatus");
		$id=Request::getVar('id','get');
		$sql="select * from emp where emp_zhiweiid={$id}";
		$list=$CommonFunction->getList($sql);
		$sql1="select * from zemp_zhiwei where pid={$id}";
		$list1=$CommonFunction->getList($sql1);
		$re=true;
		$text="切换成功！";

		if(count($list1)>0){
			$re=false;
			$text="当前有这个职位有下级职位，不能操作！";
		}

		if(count($list)>0){
			$re=false;
			$text="当前有人员属于这个职位，不能操作！";
		}
		if($re){
			$sql="select status from zemp_zhiwei where id={$id}";
			$status=$CommonFunction->getDataY($sql,"status");
			$object = new stdClass();
			if($status==0){
				$object->status=1;
			}else{
				$object->status=0;
			}
			
			$object->id=$id;
			if($CommonFunction->update_a($object,"id","zemp_zhiwei","")){
			 	$re=true;
			}else{
			 	$re=false;
			 	$text="切换失败！";
			}
		}
		if($re){
			$CommonFunction->setAction("切换了id为".$id."的职位启用");
		}
		$this->redirect("index.php",$text);
	}
	//清除
	function delete(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/delete");
		if($CommonFunction->dalete_sql("zemp_zhiwei","status","1")){
			$CommonFunction->setAction("清理了禁用的职位");
			$this->redirect("index.php","清理成功！");
		}else{
			$this->redirect("index.php","清理失败！");
		}	
	}
	//职位工资结构
	function SalaryIndex(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/SalaryIndex");
		$sql="select * from zemp_zhiwei";
		$list=$CommonFunction->getList($sql);
		for($i=0;$i<count($list);$i++){
			$list[$i]['zhiwei_shiyong']=unserialize($list[$i]['zhiwei_shiyong']);

			$list[$i]['zhiwei_shiyong_money']=unserialize($list[$i]['zhiwei_shiyong_money']);
			$list[$i]['zhiwei_zhengshi']=unserialize($list[$i]['zhiwei_zhengshi']);
			$list[$i]['zhiwei_zhengshi_money']=unserialize($list[$i]['zhiwei_zhengshi_money']);
		}
		
		$object=new Object();
		$object->list=$list;
		$object->rule_Salary=$CommonFunction->panduan_rule($this->package."/Salary");
		$object->rule_xiangxi=$CommonFunction->panduan_rule($this->package."/xiangxi");
		$view  = $this->createView("operator/zhiwei/SalaryIndex.html");
		$view->assign($object);
		$view->display();
	}

	//职位工资的添加及修改
	function Salary(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/Salary");
		$id=Request::getVar('id','get');
		$object= new Object();
		$sql="select * from zemp_gongzhi_type";
		$gongzhi_typelist=$CommonFunction->getList($sql);
		$sql="select * from zemp_zhiwei where id=".$id;
		$list=$CommonFunction->getData($sql);
		$list['zhiwei_shiyong']=unserialize($list['zhiwei_shiyong']);
		$list['zhiwei_shiyong_money']=unserialize($list['zhiwei_shiyong_money']);
		$list['zhiwei_zhengshi']=unserialize($list['zhiwei_zhengshi']);
		$list['zhiwei_zhengshi_money']=unserialize($list['zhiwei_zhengshi_money']);
		$object->list=$list;
		for($i=0;$i<count($gongzhi_typelist);$i++){
			for($j=0;$j<count($list['zhiwei_shiyong']);$j++){
				if($gongzhi_typelist[$i]['id']==$list['zhiwei_shiyong'][$j]){
					$gongzhi_typelist[$i]['type']=1;
					$gongzhi_typelist[$i]['money']=$list['zhiwei_shiyong_money'][$j];
				}
			}
			for($j=0;$j<count($list['zhiwei_zhengshi']);$j++){
				if($gongzhi_typelist[$i]['id']==$list['zhiwei_zhengshi'][$j]){
					$gongzhi_typelist[$i]['type_1']=1;
					$gongzhi_typelist[$i]['money_1']=$list['zhiwei_zhengshi_money'][$j];
				}
			}
		}
		$object->gongzhi_typelist=$gongzhi_typelist;
		$view  = $this->createView("operator/zhiwei/Salary.html");
		$view->assign($object);
		$view->display();
	}


	//详细
	function xiangxi(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/xiangxi");
		$emp_id=Request::getVar('emp_id','get');
		$id=Request::getVar('id','get');
		
		$sql="select * from zemp_zhiwei where id={$id}";
		$list=$CommonFunction->getData($sql);
		
		$list_s=null;
		$list['zhiwei_shiyong']=$this->getGongzhitype($list['zhiwei_shiyong']);

		$list['zhiwei_shiyong_money']=unserialize($list['zhiwei_shiyong_money']);
		for($i=0;$i<count($list['zhiwei_shiyong']);$i++){
			$sql_a="select * from zemp_gongzhi_type where type_name='".
			$list['zhiwei_shiyong'][$i]."'";
			$list_a=$CommonFunction->getList($sql_a);
			$list_s[$i]['type_name']=$list['zhiwei_shiyong'][$i];
			$list_s[$i]['zhiwei_shiyong_money']=$list['zhiwei_shiyong_money'][$i];
			$list_s[$i]['type_danwei']=$list_a[0]['type_danwei'];
			$list_s[$i]['type_jisuan']=$list_a[0]['type_jisuan'];
			$list_s[$i]['type_jishu']=$list_a[0]['type_jishu'];
			$list_s[$i]['type_shuliang']=$list_a[0]['type_shuliang'];
			$list_s[$i]['type_guize']=$list_a[0]['type_guize'];
		}
		$list_z=null;
		$list['zhiwei_zhengshi']=$this->getGongzhitype($list['zhiwei_zhengshi']);
		$list['zhiwei_zhengshi_money']=unserialize($list['zhiwei_zhengshi_money']);

		for($i=0;$i<count($list['zhiwei_zhengshi']);$i++){
			$sql_a="select * from zemp_gongzhi_type where type_name='".
			$list['zhiwei_zhengshi'][$i]."'";
			$list_a=$CommonFunction->getList($sql_a);
			
			$list_z[$i]['type_name']=$list['zhiwei_zhengshi'][$i];
			$list_z[$i]['zhiwei_zhengshi_money']=$list['zhiwei_zhengshi_money'][$i];
			$list_z[$i]['type_danwei']=$list_a[0]['type_danwei'];
			$list_z[$i]['type_jisuan']=$list_a[0]['type_jisuan'];
			$list_z[$i]['type_jishu']=$list_a[0]['type_jishu'];
			$list_z[$i]['type_shuliang']=$list_a[0]['type_shuliang'];
			$list_z[$i]['type_guize']=$list_a[0]['type_guize'];
		}
		$object=new Object();
		//员工固定项工资
		if(!empty($emp_id)){
			$sql_e="select emp_name,zemp_anquan,emp_pactStartDate,zemp_butie from emp where emp_id={$emp_id}";
			$emp=$CommonFunction->getData($sql_e);
			
			if($emp['zemp_anquan']=='1'){
				if(strtotime("+2year",$emp['emp_pactStartDate'])<time()){
					$emp['nianxian']=3;
				}else if(strtotime("+1year",$emp['emp_pactStartDate'])<time()){
					$emp['nianxian']=2;
				}else{
					$emp['nianxian']=1;
				}
				
			}
			$object->emp=$emp;
			
		}
		$object->list_s=$list_s;
		$object->list_z=$list_z;
		$object->list=$list;
		$view  = $this->createView("operator/zhiwei/xiangxi.html");
		$view->assign($object);
		$view->display();
	}
	function getGongzhitype($data){
		$list=null;
		$CommonFunction=new CommonFunction();
		$sql="select * from zemp_gongzhi_type";
		$list_1=$CommonFunction->getList($sql);
		$data=unserialize($data);
		for($i=0;$i<count($data);$i++){
			for($j=0;$j<count($list_1);$j++){
				if($data[$i]==$list_1[$j]['id']){
					$list[]=$list_1[$j]['type_name'];
				}
			}
		}
		return $list;
	}

	function Salary_update(){
		$id=Request::getVar('id','post');
		$zhiwei_name=Request::getVar('zhiwei_name','post');//名称
		$zhiwei_shiyongqi=Request::getVar('zhiwei_shiyongqi','post');//试用期
		$zhiwei_shiyong_dixin=Request::getVar('zhiwei_shiyong_dixin','post');//试用期底薪
		$zhiwei_zhengshi_dixin=Request::getVar('zhiwei_zhengshi_dixin','post');//正式期底薪
		$zhiwei_xiuxi=Request::getVar('zhiwei_xiuxi','post');//休息类型
		$gongzhi_type=Request::getVar('gongzhi_type','post');//试用期工资项目名称
		$moeny=Request::getVar('moeny','post');//试用期工资项目金额
		$gongzhi_type_1=Request::getVar('gongzhi_type_1','post');//正式期工资项目名称
		$moeny_1=Request::getVar('moeny_1','post');//正式期工资项目金额
		$CommonFunction=new CommonFunction();//实例化数据库连接
		$object=new Object();
		$object->zhiwei_shiyong=serialize($gongzhi_type);//序列化试用期工资项目名称
		$object->zhiwei_zhengshi_dixin=$zhiwei_zhengshi_dixin;
		$object->zhiwei_shiyong_dixin=$zhiwei_shiyong_dixin;
		$object->zhiwei_zhengshi=serialize($gongzhi_type_1);//序列化正式期工资项目名称
		$object->zhiwei_shiyong_money=serialize($moeny);//序列化试用期工资项目金额
		$object->zhiwei_zhengshi_money=serialize($moeny_1);//序列化正式期工资项目金娥
		$object->zhiwei_xiuxi=$zhiwei_xiuxi;
		$object->zhiwei_name=$zhiwei_name;
		$object->id=$id;
		$object->zhiwei_shiyongqi=$zhiwei_shiyongqi;
		//如果id不存在就是添加，如果有则为修改
		
		$req=$CommonFunction->update_a($object,'id',"zemp_zhiwei",'');
			
		if(!empty($req)){
			$CommonFunction->setAction("修改了id为".$id."的职位工资结构");
			$this->redirect("index.php?task=SalaryIndex","修改成功");
		}else{
			$this->redirect("index.php?task=SalaryIndex","修改失败");
		}
		
		
	}

	function setRule(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/setRule");
		$id=Request::getVar('id','get');

		$rule_sql="select * from admin_rule where status=0 order by rule_order asc";
		$rule_list=$CommonFunction->getList($rule_sql);
		//已有的权限
		$zhiwei_sql="select * from zemp_zhiwei where id={$id}";
		$zhiwei_list=$CommonFunction->getData($zhiwei_sql);
		$rules=$zhiwei_list['rules'];
		

		$department_id=$zhiwei_list['department_id'];

		//print_r($rules);exit;
		$rules=explode(",",$rules);
		
		
		$sql="select rules from department where id={$department_id}";
		$department_rules=$CommonFunction->getDataY($sql,"rules");
		

		$department_rules=explode(",",$department_rules);
		
		$list=null;

		for($i=0;$i<count($rule_list);$i++){
			for($j=0;$j<count($department_rules);$j++){
				if($rule_list[$i]['id']==$department_rules[$j]){
					$list[]=$rule_list[$i];
				}
			}
		}
		$rule_list=$list;
		for($i=0;$i<count($rule_list);$i++){
			if(in_array($rule_list[$i]['id'],$rules)){
				$rule_list[$i]['rules_xuanze']=1;
			}else{
				$rule_list[$i]['rules_xuanze']=2;
			}
		}
		$rule_list=$CommonFunction->getRoleXiaji($rule_list,0);
		$object = new stdClass();
		$object->rule_list=$rule_list;
		//print_r($object->rule_list);exit;
		$object->id=$id;
        $view  = $this->createView("operator/zhiwei/setRule.html");
        $view->assign($object);
        $view->display();
	}
	function setRuleAction(){
		$id=Request::getVar('id','post');
		$rules[]=Request::getVar('rules','post');
		$rules=$rules[0];
		$rules_a=NULL;
		for($i=0;$i<count($rules);$i++){
			if($i==0){
				$rules_a.=$rules[$i];
			}else{
				$rules_a.=",".$rules[$i];
			}		
		}
		$object = new stdClass();
		$object->rules=$rules_a;
		$object->id=$id;

		$CommonFunction=new CommonFunction();
		if($CommonFunction->update_a($object,"id","zemp_zhiwei","")){
		 	$re=true;
		}else{
		 	$re=false;
		}

		if($re){
			$CommonFunction->setAction("修改了id为".$id."的职位权限");
		}
		$object = new stdClass();
        $object->result = $re ? "添加成功！":"添加失败，返回重试！";
        $view  = $this->createView("operator/zhiwei/result.html");
        $view->assign($object);
        $view->display();
		
	}



	function company()
    {
        $result = [];
        //管理部门ID
        $charge_department = [];
        //查询所有启用的部门
        $department = Department::find('id,name,pid',[['and', 'status', '0']]);
        foreach ($department as $value){
            if($value['pid'] == 0){
                $manager_department = $value['id'];
            }
        }

        if(!isset($manager_department)){
            echo '无管理部！';die;
        }

        $manager_zhiwei = Zemp_zhiwei::find('id,zhiwei_name,pid,charge_department', [
            ['and', 'department_id', $manager_department],
            ['and', 'status', 0],
            ]);

        if($manager_zhiwei == false || $manager_zhiwei == []){
            echo '无管理职位！';die;
        }

        foreach ($manager_zhiwei as $v){
            if($v['pid'] == 0){         //总经理
                $result[] = [
                    'id' => intval($v['id']),
                    'pid' => 0,
                    'name' => $v['zhiwei_name'],
                ];

                if(!empty($v['charge_department'])){
                    $charge_department[$v['id']] = explode(',', $v['charge_department']);
                }
            }else{
                // 非总经理
                $CommonFunction=new CommonFunction();
                $sql="select pid from zemp_zhiwei where id={$v['id']}";
                $pid=$CommonFunction->getDataY($sql,"pid");
                $result[] = [
                    'id' => intval($v['id']),
                    'pid' => $pid,
                    'name' => $v['zhiwei_name'],
                ];

                if(!empty($v['charge_department'])){
                    $charge_department[$v['id']] = explode(',', $v['charge_department']);
                }
            }
        }

        // 部门
        foreach($department as $value){
            if($value['pid'] != 0){         // 非管理部
                foreach($charge_department as $zwid => $zecharge){
                    if(in_array($value['id'], $zecharge)){
                        $result[] = [
                            'id' => intval(1000+$value['id']),
                            'pid' => $zwid,
                            'name' => $value['name'],
                        ];
                        break;
                    }
                }

                // 当前部门下的职位
                $department_zhiwei = Zemp_zhiwei::find('id,zhiwei_name,pid,dengji', [
                    ['and', 'department_id', $value['id']],
                ],['dengji' => 'asc']);

                if($department_zhiwei != false && $department_zhiwei != []){
                    foreach ($department_zhiwei as $v){
                        if($v['pid'] == 0){
                            $result[] = [
                                'id' => intval($v['id']),
                                'pid' => 1000+$value['id'],
                                'name' => $v['zhiwei_name'],
                            ];
                        }else{
                            $result[] = [
                                'id' => intval($v['id']),
                                'pid' => intval($v['pid']),
                                'name' => $v['zhiwei_name'],
                            ];
                        }
                    }
                }
            }
        }

//        echo '<pre>';
//        print_r($result);
//        echo '</pre>';die;
        //print_r($result);exit;
        $object = new stdClass();
        $object->list = $result;
        $view = $this->createView("operator/zhiwei/company.html");
        $view->assign($object);
        $view->display();
    }


    function company_date()
    {
        // 1000+ 部门
        $id = Request::getVar('id');

        if($id > 999){
            // 部门
            $department = $id - 1000;

            $user_list = Emp::find('emp_id,emp_name,department_id,emp_zhiweiid,emp_workTel,emp_image,zemp_num,emp_shopid',[
                ['and', 'emp_stutas', -1, '<>'],
                ['and', 'department_id', $department],
            ]);
        }else{
            // 职位
            $zhiwei_id = $id;

            $user_list = Emp::find('emp_id,emp_name,department_id,emp_zhiweiid,emp_workTel,emp_image,zemp_num,emp_shopid',[
                ['and', 'emp_stutas', -1, '<>'],
                ['and', 'emp_zhiweiid', $zhiwei_id],
            ]);
        }

        foreach ($user_list as $key => $value){
            $user_list[$key]['emp_phone'] = $value['emp_workTel'];
            $user_list[$key]['department'] = Department::getDepartmentName($value['department_id']);
            $zhiwei = Zemp_zhiwei::find('zhiwei_name,zhize,xingji', [['and', 'id', $value['emp_zhiweiid']]]);
            $shop = Shop::find('shop_name', [['and', 'shop_id', $value['emp_shopid']]]);
            $user_list[$key]['zhiwei'] = $zhiwei[0]['zhiwei_name'];
            $user_list[$key]['zhize'] = $zhiwei[0]['zhize'];
            $user_list[$key]['xingji'] = $zhiwei[0]['xingji'];
            $user_list[$key]['shop'] = $shop[0]['shop_name'];
        }
        if($user_list != []){
            $xingji = CommonFunction::array_column($user_list, 'xingji');
            array_multisort($xingji, SORT_DESC, SORT_NUMERIC, $user_list);
        }

        echo json_encode($user_list, JSON_UNESCAPED_UNICODE);
    }

}
