<?php
import('operator.navi.admincontroller');
import('publicFunction.CommonFunction');
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('imag.utilities.pagestyle_a');
import('imag.image.uploader');
import('operator.navi.privilegehelper');
import('imag.fusecookie');
import('imag.filesystem.fusefile');
import('imag.filesystem.filesystem');
import('imag.utilities.tool');
class kehuController extends AdminController
{
	private $package="site/operator/kehu";
	function __construct($config = array())
	{
		parent::__construct($config);
		$this->registerTask( 'index','index');
		$this->registerTask( 'xiangxi','xiangxi');
		
	}
	function index(){
		
		
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/index");
		$p = Request::getVar('p','get');
        if(empty($p)){
            $p=1;
        }
        $per_page = 20;
        $style = new PageStyle_a();
        $start = ($p-1)*$per_page;
        $base_url = "index.php?a=1";
        $where=" where  paiche_linkerNum!=''  and paiche_type=1";
        //身份证号码
        $paiche_linkerNum = Request::getVar('paiche_linkerNum','get');
        if(!empty($paiche_linkerNum)){
        	$where.=" and paiche_linkerNum like '%{$paiche_linkerNum}%'";
        	$base_url.="&paiche_linkerNum=paiche_linkerNum";
        }
        //姓名
        $paiche_linker = Request::getVar('paiche_linker','get');
         if(!empty($paiche_linker)){
        	$where.=" and paiche_linker like '%{$paiche_linker}%'";
        	$base_url.="&paiche_linker=paiche_linker";
        }
        //电话号码
        $paiche_linkerPhone = Request::getVar('paiche_linkerPhone','get');
         if(!empty($paiche_linkerPhone)){
        	$where.=" and paiche_linkerPhone like '%{$paiche_linkerPhone}%'";
        	$base_url.="&paiche_linkerPhone=paiche_linkerPhone";
        }
		$sql="select distinct paiche_linkerNum,paiche_linker from paiche {$where}  order by paiche_times desc Limit {$start},{$per_page} ";

		$list=$CommonFunction->getList($sql);
		for($i=0;$i<count($list);$i++){
			//电话号码
			$sql_linkerPhone="select  paiche_linkerPhone from paiche where paiche_linkerNum='{$list[$i]['paiche_linkerNum']}' and paiche_linkerNum!='' order by paiche_times asc";

			$list[$i]['paiche_linkerPhone']=$CommonFunction->getDataY($sql_linkerPhone,'paiche_linkerPhone');
			//地址集合
			$sql_linkerAdd="select paiche_linkerAdd from paiche where paiche_linkerNum='{$list[$i]['paiche_linkerNum']}' and paiche_linkerAdd!='' order by paiche_times asc";
			$list[$i]['paiche_linkerAdd']=$CommonFunction->getDataY($sql_linkerAdd,'paiche_linkerAdd');
			//用车次数分类
			$sql_chisu="select count(*) as chisu  from paiche where paiche_linkerNum='{$list[$i]['paiche_linkerNum']}'";
			$list[$i]['chisu']=$CommonFunction->getDataY($sql_chisu,"chisu");
			//参与活动次数
			$sql_huodong="select count(*) as huodongs  from paiche_huodong where paiche_linkerNum='{$list[$i]['paiche_linkerNum']}'";
			$list[$i]['huodongs']=$CommonFunction->getDataY($sql_huodong,"huodongs");
			
		}

	
		//总数
		$total_item=$CommonFunction->getList("select distinct distinct paiche_linkerNum,paiche_linker from paiche {$where} ");
		$total_item=count($total_item);
		//print_r($total_item);exit;
		$options = array(
            "baseurl"    => $base_url,
            "totalitems" => $total_item,
            "perpage"    => $per_page,
            "page"       => $p,
            "maxpage"    => 10,
            "pagestyle"  => $style,
            "showtotal"  => false
        );
        $pagination = new Pagination($options);
        $p = $pagination->getPage();
        $object = new stdClass();
        //详细的权限
        $object->xiangxi=$CommonFunction->panduan_rule($this->package."/xiangxi");

        $object->PAGINATION = $pagination->fetch();
        $object->total = $total_item;
        $object->p = $p;
		$object->list = $list;
		$view  = $this->createView("operator/kehu/index.html");
		$view->assign($object);
		$view->display();
		
	}
	function xiangxi(){
		$CommonFunction=new CommonFunction();


		$CommonFunction->getQuanxian($this->package."/index");
		$paiche_linkerNum = Request::getVar('paiche_linkerNum','get');
		$sql="select distinct paiche_linkerNum,paiche_linker from paiche where  paiche_linkerNum = '{$paiche_linkerNum}'";

		$data=$CommonFunction->getdata($sql);

		$sql="select a.*,b.name from paiche as a left join pintai as b on a.paiche_pintaiid=b.id where a.paiche_linkerNum='{$paiche_linkerNum}' ";

		$list=$CommonFunction->getList($sql);
		
		for($i=0;$i<count($list);$i++){
			$sql_huodong="select a.*,b.name from paiche_huodong as a left join huodong as b on a.huodong_id=b.id where a.paiche_id={$list[$i]['paiche_id']}";
			$huodong=$CommonFunction->getdata($sql_huodong);
			if($huodong){
				$list[$i]['huodong']=$huodong['name'];
			}else{
				$list[$i]['huodong']="无";
			}
			$list_huodong=$CommonFunction->getList($sql);

			$list[$i]['paiche_startDate']=date("Y-m-d H:i:s",$list[$i]['paiche_startDate']);
			$list[$i]['paiche_endDate']=date("Y-m-d H:i:s",$list[$i]['paiche_endDate']);

		}
		//print_r($list);exit;
		$object = new stdClass();
		//自驾详细权限
		$object->zijia_detail=$CommonFunction->panduan_rule("site/operator/zijia_linshi/zijia_detail");
		$object->list = $list;
		$object->data = $data;
		$view  = $this->createView("operator/kehu/xiangxi.html");
		$view->assign($object);
		$view->display();
	}
	
}
