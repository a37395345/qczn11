<?php
class Components
{
    /**
    * 检查登录状态
    * 
    */
    public static function login_check()
    {
    	if (isset($_SESSION['a_uid']) && isset($_SESSION['code'])){
    		$a_uid = $_SESSION['a_uid'];
	    	if (empty($a_uid))
	        {
	            echo "<script>alert('登录超时，请重新登录');parent.location.href='/';</script>";
            	exit;
	        }
    		
    	}else{
    		echo "<script>alert('登录超时，请重新登录');parent.location.href='/';</script>";
            exit;
    	}
    } 
    
    /**
    * 处理文件上传
    * 
    * @param mixed $upload_root
    * @param mixed $name
    */
    public static function upload_post($upload_root, $name)
    {
        if(array_key_exists($name,$_FILES) && $_FILES[$name]["error"] == UPLOAD_ERR_OK){
            try{
                $uploader = new Uploader($_FILES[$name],$upload_root);
                $uploader->toUpload();            
                return $uploader->getFolderFile();
            }catch(Exception $e){
                var_dump($e->getMessage());
                exit();
            }
        }
        
        return;     
    }
    
    /**
    * 保存管理员操作日志    
    */
    public static function save_admin_log($msg)
    {
        $model    = new Model();
        $nickname = $_SESSION['a_username'];//FuseCookie::getInstance()->get("a_username");
        $admin_user_id = FuseCookie::getInstance()->get("a_uid"); 
        $ip   = $_SERVER['REMOTE_ADDR'];
        $time = date('Y-m-d H:i:s');
        $msg  = $nickname.$msg;
        $sql  = "INSERT INTO `admin_users_action`(`admin_user_id`,`title`,`ip`,`time`) VALUES('{$admin_user_id}', '{$msg}', '{$ip}', '{$time}')";

        mysql_query($sql);
        //$model->getRow($sql);
    }
    
}
?>