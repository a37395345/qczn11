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
include_once(Config::homedir()."/admincp/site/includes/components.php");


class HomeController extends AdminController
{
	/**
	 * Constructor
	 *
	 * @params	array	Controller configuration array
	 */
	var $badgeList;
    
    //花絮小图最小的宽度，而且只能是120的整数倍
    var $sWidth     = 120;
    
    //花絮小图最小的高度，而且只能是180的整数倍
    var $sHeight    = 180;
    
    //前台图片排列之间的间隔为15px
    var $space      = 15;
    
    private $upload_root;    
    
    
	function __construct($config = array())
	{
		parent::__construct($config);
		
		//if(!($this->checkPrivilege("system"))){
			//$this->redirect("/admincp/empty.php","您没有权限访问该页面！");
		//}
		
		$this->registerTask( 'list','itemlist');
		$this->registerTask( 'create','create');
		$this->registerTask( 'insert','insert');
		$this->registerTask( 'modify','modify');
		$this->registerTask( 'update','update');
		$this->registerTask( 'delete','delete');
        $this->registerTask( 'top','top');
		$this->registerTask( 'changeOrder','changeOrder');
        $this->registerTask( 'search','searchList');

        $this->upload_root  = Config::homedir()."/thumb/";                   
      
	}
	function display(){
		echo "display";
	}

	function itemlist()
	{
		$p = Request::getVar('p','get');
    
		$model = $this->createModel("home",dirname( __FILE__ ));	
	    
        $title          = Request::getVar('title');
        $is_active      = Request::getVar('is_active');   

        if(empty($p)){$p=1;}
        $base_url = "list.php?title={$title}&is_active={$is_active}";
        $per_page = 20;
        
        
        $where = '';
        if(!empty($title)){
            $where .="  AND title LIKE '%{$title}%'";
        }

        if(!empty($is_active)){
            $where .="  AND is_active='{$is_active}'";
        } 
        
         
		$style = new PageStyle();
		$start = ($p-1)*$per_page;
		$itemList = $model->getList($start,$per_page, $where);
		$total_item = $model->getTotal('WHERE 1 '.$where);

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
		$view  = $this->createView("operator/user/home/list.html");
		$object = new stdClass();
		$object->PAGINATION = $pagination->fetch();
		$object->itemList = $itemList;     
		$object->total = $total_item;
        $object->homeurl = Config::homeurl();
		$view->assign($object);
		$view->display();
	}
	
	function create()
	{	
		$model = $this->createModel("home",dirname( __FILE__ ));
		$category = $model->getcategory();
		$view  = $this->createView("operator/user/home/create.html");
		$object = new stdClass();	
		$object->category = $category;
		$object->task = "insert";
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
		$object = new stdClass();
        $object->url = Request::getVar('url','post');        
		$object->title = Request::getVar('title','post');
		$object->is_active = Request::getVar('is_active','post');
		
		$object->ip   = $_SERVER['REMOTE_ADDR'];
		$object->created = date('Y-m-d H:i:s');
		$object->updated = date('Y-m-d H:i:s');
		
		$model = $this->createModel("home",dirname( __FILE__ ));

         //上传图片 
        foreach($_FILES as $key=>$val)
        {
            if (!empty($val['name']))
            {
                $object->$key       = Components::upload_post($this->upload_root, $key);               
            }
        }
        //上传结束
           
        
		$maxSql   = " SELECT max(`sort_id`) as maxOrder FROM  `user_home`  ";
        $maxOrder = $model->getNewsrow('', '', '', '', $maxSql);

        if (empty($maxOrder)) {
            $sort_id = 1;
        } else {
            $sort_id = ($maxOrder['maxOrder'] + 1);
        }
		$object->sort_id      = $sort_id;

		//var_dump($object);
		//exit;
        if ($model->store($object))
		{	
		    Components::save_admin_log("添加了用户首页图片");
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
		$model = $this->createModel("home",dirname( __FILE__ ));		
		$item = $model->getInfo($uid);
		$category = $model->getcategory();
		$view  = $this->createView("operator/user/home/create.html");
		$object = new stdClass();	
		$object->list = $item;
		$object->category = $category;
		$object->task = "update";
		$view->assign($object);
		$view->display();
	}
	
	function update()
	{	
		$uid = Request::getVar('uid','request');	
		if(empty($uid))
		{
			Response::redirect($forward,"Need id!");
		}
		$forward = Request::getVar("forward");
		if(empty($forward))
		{
			$forward = "list.php";
		}
		$object = new stdClass();
		$object->user_home_id = $uid;
        $object->url = Request::getVar('url','post');        
        $object->title = Request::getVar('title','post');
        $object->is_active = Request::getVar('is_active','post');
        $object->ip   = $_SERVER['REMOTE_ADDR'];
        $object->updated = date('Y-m-d H:i:s');
        
		$model = $this->createModel("home",dirname( __FILE__ ));
		$row = $model->getRow($uid);

        foreach($_FILES as $key=>$val)
        {
            if (!empty($val['name']))
            {
                $object->$key       = Components::upload_post($this->upload_root, $key);
                //删除旧图片
                if($row[$key]){
                    FileSystem::delete($this->upload_root.$row[$key]);
                }                   
            }
        }
        //上传结束  
              
             
		//var_dump($object);
		if ($model->update($object,'user_home_id'))
		{	
            Components::save_admin_log("修改了用户首页图片");			
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
			$forward = "list.php";
		}
		$uid = Request::getVar('uid','get');
		$multi = Request::getVar('multi','get');
				
		if(empty($uid)){
			$uid = Request::getVar('uid','post');
		}
		
		$uidlist = explode(",",$uid);

		$model = $this->createModel("home",dirname( __FILE__ ));
		foreach($uidlist as $uid){
				$model->delete($uid);
			    Components::save_admin_log("删除了ID为".$uid."的用户首页图片");
			
		}
		if(!empty($multi)){
			echo "1";
		}else{
			
			$this->redirect($forward,"删除成功");
		}
	}
    
    
    function top()
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

        $model = $this->createModel("home",dirname( __FILE__ ));
        foreach($uidlist as $uid){
                $model->top($uid);
                Components::save_admin_log("置顶了ID为".$uid."的首页图片");            
        }
        if(!empty($multi)){
            echo "1";
        }else{
            $this->redirect($forward,"操作成功");
        }
    }    
	
	/**
	 * 排序
	 */
	 function changeOrder(){
            $order   = '';
            $forward = Request::getVar('forward', 'get');
            $id      = Request::getVar('id', 'get');
            $fid     = Request::getVar('fid', 'get');
            
            $news_cate_id   = Request::getVar('news_cate_id', 'get');
            $title          = Request::getVar('title', 'get');
            $is_active      = Request::getVar('is_active', 'get');             

            if(empty($forward)){
                $forward = Request::getVar("HTTP_REFERER",'server');
            }
            
            //$forward = $forward."&news_cate_id=".$news_cate_id."title=".$title."summary=".$summary."is_video=".$is_video."is_active=".$is_active;

            if(empty($id)){
                $this->redirect($forward,"参数ID丢失");
            }

            $model  = $this->createModel("home",dirname( __FILE__ ));

            if ($fid=="end" || $fid=="top"){
                   $this->redirect($forward);
            }else{
                $rs1 = $model->getline($id,'user_home_id', "user_home");
                $rs2 = $model->getline($fid, "sort_id", "user_home");
                $object            = new stdClass();
                $object->user_home_id  = $id;
                $object->sort_id   = $fid;
                $result1 = $model->update($object, 'user_home_id', "user_home");

                $object            = new stdClass();
                $object->user_home_id  = $rs2['user_home_id'];
                $object->sort_id  = $rs1['sort_id'];
                $result2 = $model->update($object, 'user_home_id', "user_home");

                if ($result1 && $result2){
                    $this->redirect($forward);
                }
            }
    }
    

    function searchList()
    {
        $p = Request::getVar('p','get');
        
        $model = $this->createModel("home",dirname( __FILE__ ));
        
        $cate_id        = Request::getVar('cate_id');
        $title          = Request::getVar('title');
        $is_active      = Request::getVar('is_active'); 
        $is_video       = Request::getVar('is_video');       

        if(empty($p)){$p=1;}
        $base_url = "list.php?is_video={$is_video}&cate_id={$cate_id}&title={$title}&is_active={$is_active}";
        $per_page = 20;
        
        
        $where = '';
        if(!empty($cate_id)){
            $where .="  AND cate_id = '{$cate_id}'";
        }
        if(!empty($title)){
            $where .="  AND title LIKE '%{$title}%'";
        }

        if(!empty($is_active)){
            $where .="  AND is_active='{$is_active}'";
        } 
        
        if ($is_video == 1)
        {            
            //搜索图片
            $where .= " AND (`big_pic` LIKE '%.jpeg%' OR  `big_pic` LIKE '%.jpg%' 
                        OR  `big_pic` LIKE '%.png%' OR  `big_pic` LIKE '%.gif%') ";
        }
        else if ($is_video == 2)
        {
            //搜索视频
            $where .= " AND (`big_pic` LIKE '%.flv%' OR `big_pic` LIKE '%.mp4%') ";
        }                           
       //echo $where;
       
       $style = new PageStyle();
        $start = ($p-1)*$per_page;
        $highLightList = $model->getHighLightsList($start,$per_page, $where);
        $total_item = $model->getTotal('where 1'.$where);

        $options = array(
            "baseurl"     => $base_url,
            "totalitems" => $total_item,
            "perpage"     => $per_page,
            "page"         => $p,
            "maxpage"     => 15,
            "pagestyle"  => $style,
            "showtotal"  => false
        );
        $pagination = new Pagination($options);
        $p = $pagination->getPage();
        $view  = $this->createView("operator/user/home/list.html");
        $object = new stdClass();
        $object->PAGINATION = $pagination->fetch();
        $object->highLightsList = $highLightList;     
        $object->total = $total_item;
        $object->category = $model->getcategory();    
        $view->assign($object);
        $view->display();
    }    
}

