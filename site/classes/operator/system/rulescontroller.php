<?php
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('imag.component.controller');
import('imag.component.model');
import('imag.component.view');
import('imag.component.template');
import('imag.environment.request');
import('imag.database.database');
import('imag.fusecookie');
import('operator.navi.admincontroller');
/**
 * 
 * Controller for navigation
 *
 * @package		classes
 * @subpackage	operator.navi
 * @author gary wang (wangbaogang123@hotmail.com)
 * 
 */

class RulesController extends AdminController
{

	/**
	 * Constructor
	 *
	 * @params	array	Controller configuration array
	 */
	function __construct($config = array())
	{
		parent::__construct($config);
		$this->registerTask( 'create','add');
		$this->registerTask( 'insert','insert');
		$this->registerTask( 'update','update');
		$this->registerTask( 'delete','delete');
		$this->registerTask( 'list','infolist');
		$this->registerTask( 'newslist','newslist');
		$this->registerTask( 'detail','newsdetail');
		$this->registerTask( 'download','download');
	}
	

	/**
	 * index

	 */
	function display()
	{
		//$this->_first();
	}

	function add(){
		$id = Request::getVar("id","get");
		$input_value="";
		$model = $this->createModel("rules",dirname( __FILE__ ));
		
		$object = new stdClass();
		if(!empty($id)){
			$infoList=$model->getInfoSql("select * from issue_info where id=$id");
			$input_value=$infoList['info_content'];
			$object->infoList=$infoList;
		}
		$view  = $this->createView("operator/system/rules/create.html");
		$object->infotypeList=$model->getListBySql("select * from rules_type ");
		require('fckeditor/fckeditor_php5.php'); 
		$editor = new FCKeditor('infocontent') ;  
		$editor->BasePath   = "../../../libraries/fckeditor/";//指定编辑器路径
		
		$editor->ToolbarSet = "Default";//编辑器工具栏有Basic（基本工具）,Default（所有工具）选择
		$editor->Width      = "100%";
		$editor->Height     = "420";
		$editor->Value      = $input_value;
		$editor->Config['AutoDetectLanguage'] = true ;
		$editor->Config['DefaultLanguage']  = 'en' ;//语言 
		$FCKeditor = $editor->CreateHtml();
		$object->editor=$FCKeditor;
		$object->task = "insert";
		$view->assign($object);
		$view->display();
	}
	
	function insert(){
		$uid= $_SESSION['a_uid'];
		$infotitle = Request::getVar("infotitle","post");
		$infotype = Request::getVar("infotype","post");
		$infocontent =$_POST['infocontent'];
		$model = $this->createModel("rules",dirname( __FILE__ ));
		$object = new stdClass();
		$object->info_title =$infotitle;
		$object->info_type =$infotype;
		$object->info_content =stripslashes($infocontent);
		$object->empid=$uid;
		$object->addtime =strtotime("now");
		
		if($_FILES['fj']['tmp_name']!=""){//有附件
			$tmp=$_FILES['fj']['tmp_name'];
			$arr=explode('.',$_FILES['fj']['name']);
			$name=rand(100000,999999).".".$arr[1];
			if(move_uploaded_file($tmp, "../../../../thumb/upload/".$name)){
				$object->attachname = $name;
			}
		}
		$id=$model->store($object,"rules_info");
		if($id>0){//添加成功
			$forward="create.php";//获取列表
			$this->redirect($forward,"信息发布成功");
		}
	}
	


	

	function infolist(){
		$companyid=1;
		$model = $this->createModel("rules",dirname( __FILE__ ));
		//先取组织结构图
		$sql="Select * From rules_info Where id={$companyid}";
		$info = $model->getInfo($sql);
		
		$sql="select info.*,emp_name,typename from rules_info as info".
				" left join emp on info.empid=emp.emp_id".
				" left join rules_type as dd on info.info_type=dd.typeid Where id<>{$companyid}";

		$infoList = $model->getListBySql($sql);
		
		$view  = $this->createView("operator/system/rules/infolist.html");
		$object = new stdClass();
		$object->infoList = $infoList;
		$object->info = $info;
		$view->assign($object);
		$view->display();
	}

	
	function delete(){
		$forward="infolist.php";
		$newsid=Request::getVar("uid","get");
		$model = $this->createModel("issueinfo",dirname( __FILE__ ));
		
		$sql1="Delete From issue_info Where id={$newsid}";
		$sql2="Delete from news_emp where newsid=$newsid";
		if ($model->update_readtimes($sql1) && $model->update_readtimes($sql2)){
			$this->redirect($forward,"删除成功");
		}else{
			$this->redirect($forward,"删除失败");
		}
	}
	
	function newsdetail(){
		//接收数据
		$newsid = Request::getVar("id","get");
		$model = $this->createModel("rules",dirname( __FILE__ ));
		//$readtimes=$model->getReadtimes("select readtimes from issue_info where id=$newsid");
		//更新浏览次数
		//$object = new stdClass();
		//$object->readtimes=$readtimes+1;
		//$object->id=$newsid;
		//$model->update("issue_info",$object,"id");
		
		$view  = $this->createView("operator/system/rules/infodetail.html");
		$object=new stdClass();
		$object->info=$model->getInfo("select * from rules_info where id={$newsid}");
		
		//$object2=new stdClass();
		//$object2->newsid=$newsid;
		//$object2->empid=$uid;
		//$sql1="select count(*) as total from news_emp where newsid=$newsid and empid=$uid";
		//if($model->getTotal($sql1)==0){//记录不存在
		//	$model->store($object2,"news_emp");
		//}
		$view->assign($object);
		$view->display();
	}
	
	function update()
	{
		$infocontent =$_POST['infocontent'];
		$model = $this->createModel("issueinfo",dirname( __FILE__ ));
		$object = new stdClass();
		$object->info_title=Request::getVar("infotitle","post");
		$object->info_type= Request::getVar("infotype","post");
		$object->info_content=stripslashes($infocontent);
		$object->id=Request::getVar("id","post");
		if($_FILES['fj']['tmp_name']!=""){//有附件
			$tmp=$_FILES['fj']['tmp_name'];
			$arr=explode('.',$_FILES['fj']['name']);
			$name=rand(100000,999999).".".$arr[1];
			if(move_uploaded_file($tmp, "../../../upload/news/".$name)){
				$object->attachname = $name;
			}
		}
		if($model->update("issue_info",$object,"id")){//审核成功
			$forward="infolist.php";//获取列表
			$this->redirect($forward,"编辑成功");
		}
	}

	function download(){
		//接收参数
		$file_name=$_GET['annexname'];
		$file_dir = chop("../../../upload/news/");//去掉路径中多余的空格
		//得出要下载的文件的路径
		if (!file_exists($file_dir . $file_name)) { //检查文件是否存在
			exit;
		}
		else {
			$file = fopen($file_dir . $file_name,"r"); // 打开文件
			// 输入文件标签
			Header("Content-type: application/octet-stream");
			Header("Accept-Ranges: bytes");
			Header("Accept-Length: ".filesize($file_dir . $file_name));
			Header("Content-Disposition: attachment; filename=" . $file_name);
			// 输出文件内容
			echo fread($file,filesize($file_dir . $file_name));
			fclose($file);
			exit;
		}
	}
}
?>