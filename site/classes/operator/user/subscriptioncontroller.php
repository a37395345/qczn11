<?php
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('operator.navi.admincontroller');
import('operator.navi.privilegehelper');
import('imag.fusecookie');

class SubscriptionController extends AdminController
{
	/**
	 * Constructor
	 *
	 * @params	array	Controller configuration array
	 */
	var $userList;
	function __construct($config = array())
	{
		parent::__construct($config);
		
		//if(!($this->checkPrivilege("system"))){
			//$this->redirect("/admincp/empty.php","您没有权限访问该页面！");
		//}
		
		$this->registerTask( 'list','subscriptionList');		
		$this->registerTask( 'modify','modify');
		$this->registerTask( 'update','update');
		$this->registerTask( 'delete','delete');
		$this->registerTask( 'search','searchList');
        $this->registerTask( 'export','export');
        
	}
    
	function display(){
		echo "display";
	}

	function getPrefixImage($image,$prefix)
	{
		$filelist = explode(".",$image);
		if(count($filelist)<2){
			return $image;
		}
		$index = count($filelist)-2;
		$filelist[$index] .= "_".$prefix;
		$filelist[count($filelist)-1] = "jpg";
		return implode(".",$filelist);
	}

	function searchList()
	{
		$p = Request::getVar('p','get');
        
		$model = $this->createModel("subscription",dirname( __FILE__ ));
		
	
		$nickname = Request::getVar('nickname','post');
		$email = Request::getVar('email','post');

		if(empty($p)){$p=1;}
		$base_url = "list.php";
		$per_page = 20;
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;

		
		$where = 1;
	
		if(!empty($nickname)){
			$where .=" AND `nickname` LIKE '%".$nickname."%'";
		}

		if(!empty($email)){
			$where .=" AND `email` LIKE '%".$email."%'";
		}
		
		$itemList = $model->getUserList($start,$per_page,$where);
		$total_item = $model->getTotal($where);
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
		$view  = $this->createView("operator/user/subscription/list.html");
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();
		$object->itemList = $itemList;	
		$object->total = $total_item;	
		$view->assign($object);
		$view->display();
	}

	
	function subscriptionList()
	{
		$p = Request::getVar('p','get');
        
		$model = $this->createModel("subscription",dirname( __FILE__ ));
		$where = " 1 ORDER BY `created` DESC";

		
		if(empty($p)){$p=1;}
		$base_url = "list.php";
		$per_page = 20;
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		$itemList = $model->getUserList($start,$per_page,$where);
		//var_dump($userLists);
		$total_item = $model->getTotal();
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
		$view  = $this->createView("operator/user/subscription/list.html");
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();		
		$object->itemList = $itemList;	
		$object->total = $total_item;
		$view->assign($object);
		$view->display();
	}
	

    
	function delete()
	{
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "list.php";
		}
		$uid = Request::getVar('uid','get');
		$multi = Request::getVar('multi','get');
				
		if(empty($uid)){
			$uid = Request::getVar('uid','post');
		}
		
		$uidlist = explode(",",$uid);

		$model = $this->createModel("subscription",dirname( __FILE__ ));
		foreach($uidlist as $uid){
			
				$model->delete($uid);
				$nickname = $_SESSION['a_username'];
				$admin_user_id = $_SESSION['a_uid'];			
				$title = $nickname."删除ID为".$uid."的用户";			   
				$ip   = $_SERVER['REMOTE_ADDR'];
				$time = gmdate('Y-m-d H:i:s');
				$sql = "INSERT INTO `admin_users_action` SET `admin_user_id`= '".$admin_user_id."',`title` = '".$title."',`ip` = '".$ip."',`time` = '".$time."'";
				mysql_query($sql);
			
		}
		if(!empty($multi)){
			echo "1";
		}else{
			
			$this->redirect($forward,"删除成功");
		}
	}
    
    
    function export(){
        require_once("Excel/Writer.php");
        $model = $this->createModel("subscription",dirname( __FILE__ ));
        $where = " `is_active`=1 ORDER BY created DESC ";
        $start = '';
        $per_page = '';     
        $itemList = $model->getUserList($start,$per_page,$where);                 
        $workbook = new Spreadsheet_Excel_Writer();        
        $workbook->send(date("Y-m-d")."_玖姿用户订阅邮件列表.xls");
        $worksheet = $workbook->addWorksheet("enjoy".date("Y-m-d"));
        $worksheet->write(0, 0, "".iconv("UTF-8","GBK//IGNORE","姓名")."");
        $worksheet->write(0, 1, "".iconv("UTF-8","GBK//IGNORE","邮件")."");
        $worksheet->write(0, 2, "".iconv("UTF-8","GBK//IGNORE","时间")."");                                
        $r=1;
        if(is_array($itemList)){
            foreach($itemList as $item)
            {    
                //$item["addr"]=$item["realname"]."-".$item["mobile"]."-".$item["province"]."-".$item["city"]."-".$item["address"];
                is_numeric($item["nickname"])?$worksheet->write($r, 0, $item["nickname"]):$worksheet->writeString($r, 0, iconv("UTF-8","GBK//IGNORE",$item["nickname"]));
                is_numeric($item["email"])?$worksheet->write($r, 1, $item["email"]):$worksheet->writeString($r, 1, iconv("UTF-8","GBK//IGNORE",$item["email"]));
                is_numeric($item["created"])?$worksheet->write($r, 2, $item["created"]):$worksheet->writeString($r, 2, iconv("UTF-8","GBK//IGNORE",$item["created"]));           
                $r++;
            }
        }
        $workbook->close();
    }    

}

