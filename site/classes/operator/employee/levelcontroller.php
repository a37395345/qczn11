<?php
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('operator.navi.admincontroller');
import('operator.navi.privilegehelper');
import('imag.fusecookie');
import('imag.filesystem.fusefile');
import('imag.filesystem.filesystem');
import('imag.image.uploader');
import('imag.utilities.tool');

class LevelController extends AdminController
{
	/**
	 * Constructor
	 *
	 * @params	array	Controller configuration array
	 */
	var $badgeList;
	function __construct($config = array())
	{
		parent::__construct($config);
		
		//if(!($this->checkPrivilege("system"))){
			//$this->redirect("/admincp/empty.php","您没有权限访问该页面！");
		//}
		
		$this->registerTask( 'list','categoryList');
		$this->registerTask( 'create','create');
		$this->registerTask( 'insert','insert');
		$this->registerTask( 'modify','modify');
		$this->registerTask( 'update','update');
		$this->registerTask( 'delete','delete');
		$this->registerTask( 'changeOrder','changeOrder');
        $this->registerTask( 'update_multi_choice','update_multi_choice');
      
	}
	function display(){
		echo "display";
	}

	function categoryList()
	{
		$p = Request::getVar('p','get');
        $cate_id = Request::getVar('cate_id','get');
        if (empty($cate_id)) $cate_id = 1;
        
		$model = $this->createModel("level",dirname( __FILE__ ));	
		//var_dump($where);
		if(empty($p)){$p=1;}
		$base_url = "list.php";
		$per_page = 20;
		
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
        $where = " 1 ";
		$Level1List = $model->getLevel1List($start,$per_page, $where, $cate_id);
		$total_item = $model->getTotal(" WHERE cate_id = {$cate_id} ");

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
		$view  = $this->createView("operator/employee_level/list.html");
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();
		$object->level1List = $Level1List;
		$object->total = $total_item;

        $object->cateName = $this->getCate($cate_id);
        $object->cate_id = $cate_id;
        $model->table["name"] = 'multi_choice';
        $model->table["key"] = 'cate_id';
        $multi_choice = $model->getRow($cate_id);
        $object->status = $multi_choice['status'];
		$view->assign($object);
		$view->display();
	}
	
	function create()
	{	
		$view  = $this->createView("operator/employee_level/create.html");
		$object = new stdClass();		
		$object->task = "insert";
        $object->cate_id = Request::getVar('cate_id','get');
        $object->cateName = $this->getCate($object->cate_id);
		$view->assign($object);
		$view->display();
	}
	
	function insert()
	{			
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "list.php?cate_id=".Request::getVar('cate_id','post');
		}			
		$t = Request::getVar('title','post');
		$object = new stdClass();
		$object->title = Request::getVar('title','post');
        $object->is_active = intval(Request::getVar('is_active','post'));       
		$object->created = date('Y-m-d H:i:s');
        $object->updated = date('Y-m-d H:i:s');
        
				
		$model = $this->createModel("level",dirname( __FILE__ ));

      
		if ($model->store($object))
		{	
            $nickname = $_SESSION['a_username'];
            $admin_user_id = $_SESSION['a_uid'];
			$title = $nickname."添加分类".$t;
			$ip   = $_SERVER['REMOTE_ADDR'];
			$time = date('Y-m-d H:i:s');
			$sql = "INSERT INTO `admin_users_action` SET `admin_user_id`= '".$admin_user_id."',`title` = '".$title."',`ip` = '".$ip."',`time` = '".$time."'";
			mysql_query($sql);
			$this->redirect($forward,"添加成功");
		}
		else
		{
			$this->redirect($forward,"添加失败");
		}
	}
	
	function modify()
	{
		$uid = Request::getVar('uid','get');
		$model = $this->createModel("level",dirname( __FILE__ ));		
		$categoryInfo = $model->getCategoryInfo($uid);
		$view  = $this->createView("operator/employee_level/create.html");
		$object = new stdClass();	
		$object->list = $categoryInfo;
		$object->task = "update";
        $object->cate_id = Request::getVar('cate_id','get');
		$view->assign($object);
		$view->display();
	}
	
	function update()
	{	
		$uid = Request::getVar('uid','post');	
		if(empty($uid))
		{
			Response::redirect($forward,"Need id!");
		}
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
            $forward = "list.php?cate_id=".Request::getVar('cate_id','post');
		}
		$object = new stdClass();
		$object->title = Request::getVar('title','post');
        $object->is_active = Request::getVar('is_active','post');
		$object->id = $uid;
        $object->updated = date('Y-m-d H:i:s');
		
		$model = $this->createModel("level",dirname( __FILE__ ));
     
		
		//var_dump($object);
		if ($model->update($object,'id'))
		{	
			$nickname = $_SESSION['a_username'];
			$admin_user_id = $_SESSION['a_uid'];
			$name = $model->getCategoryInfo($uid);
			$title = $nickname."修改了添加分类".$name['title'];
			$ip   = $_SERVER['REMOTE_ADDR'];
			$time = date('Y-m-d H:i:s');
			$sql = "INSERT INTO `admin_users_action` SET `admin_user_id`= '".$admin_user_id."',`title` = '".$title."',`ip` = '".$ip."',`time` = '".$time."'";
			mysql_query($sql);
			$this->redirect($forward,"修改成功!");
		}
		else
		{
			$this->redirect($forward,"修改失败!");
		}
	}
    
	function delete()
	{
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
            $forward = "list.php?cate_id=".Request::getVar('cate_id','get');
		}
		$uid = Request::getVar('uid','get');
		$multi = Request::getVar('multi','get');
		
		if(empty($uid)){
			$uid = Request::getVar('uid','post');
		}
		
		$uidlist = explode(",",$uid);

		$model = $this->createModel("level",dirname( __FILE__ ));
		foreach($uidlist as $uid){
			
				$model->delete($uid);
				$nickname = $_SESSION['a_username'];
				$admin_user_id = $_SESSION['a_uid'];			
				$title = $nickname."删除了ID为".$uid."的产品系列分类";
				$ip   = $_SERVER['REMOTE_ADDR'];
				$time = date('Y-m-d H:i:s');
				$sql = "INSERT INTO `admin_users_action` SET `admin_user_id`= '".$admin_user_id."',`title` = '".$title."',`ip` = '".$ip."',`time` = '".$time."'";
				mysql_query($sql);
			
		}
		if(!empty($multi)){
			echo "1";
		}else{
			
			$this->redirect($forward,"删除成功");
		}
	}
	
	/**
	 * 排序
	 */
	 function changeOrder(){
            $order   = '';
            $forward    = Request::getVar('forward', 'get');
            $id         = Request::getVar('id', 'get');
            $cate_id    = Request::getVar('cate_id', 'get');
            $fid     = Request::getVar('fid', 'get');

            if(empty($forward)){
                $forward = Request::getVar("HTTP_REFERER",'server');
            }

            if(empty($id)){
                $this->redirect($forward,"参数ID丢失");
            }

            $model  = $this->createModel("level",dirname( __FILE__ ));

            if ($fid=="end" || $fid=="top"){
                   $this->redirect($forward);
            }else{
                $rs1 = $model->getline($cate_id, $id,'id', "product_attr_cate");
                $rs2 = $model->getline($cate_id, $fid, "sort_id", "product_attr_cate");
                $object             = new stdClass();
                $object->id         = $id;
                $object->sort_id    = $fid;
                $object->updated    = date("Y-m-d H:i:s");
                $result1 = $model->update($object, 'id', "product_attr_cate");

                $object             = new stdClass();
                $object->id         = $rs2['id'];
                $object->sort_id    = $rs1['sort_id'];
                $object->updated    = date("Y-m-d H:i:s");
                $result2 = $model->update($object, 'id', "product_attr_cate");

                if ($result1 && $result2){
                    $this->redirect($forward);
                }
            }


    }


    function update_multi_choice(){
        $forward    = Request::getVar('forward', 'get');
        $cate_id    = Request::getVar('cate_id');
        $multi_choice = Request::getVar('multi_choice');

        $model = $this->createModel("level",dirname( __FILE__ ));
        $model->table["name"] = 'multi_choice';
        $model->table["key"] = 'cate_id';
        $row = $model->getRow($cate_id);

        if (empty($row)){
            //新插入
            $object                 = new stdClass();
            $object->cate_id        = $cate_id;
            $object->status         = $multi_choice;
            $object->created        = date("Y-m-d H:i:s");
            $object->updated        = date("Y-m-d H:i:s");
            $result = $model->store($object);
        }else{
            $object                 = new stdClass();
            $object->cate_id        = $cate_id;
            $object->status         = $multi_choice;
            $object->updated        = date("Y-m-d H:i:s");
            $result = $model->update($object, 'cate_id');
        }

        $this->redirect('list.php?cate_id='.$cate_id,"保存成功");
    }


    function getCate($cate_id){
        switch($cate_id){
            case 1:
                return '使用人群';
            case 2:
                return '年龄阶段';
            case 3:
                return '产品功效';
            case 4:
                return '使用环境';
            case 5:
                return '产品系列';
            case 6:
                return '产品分类';
        }
    }
}

