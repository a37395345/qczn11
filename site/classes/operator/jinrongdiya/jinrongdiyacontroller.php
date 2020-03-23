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

class jinrongdiyaController extends AdminController
{
	private $package="site/operator/jinrongdiya";
	function __construct($config = array())
	{
		parent::__construct($config);
		$this->registerTask( 'index','index');
        $this->registerTask( 'add','add');
        $this->registerTask( 'generatepicutrea','generatepicutrea');
        $this->registerTask( 'generatepicutrea_a','generatepicutrea_a');
        $this->registerTask( 'getRenlian','getRenlian');
          
	}

	
	function index(){
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/index");
        //print_r("expression");exit;
        $view  = $this->createView("operator/jinrongdiya/index.html");
        //$view->assign($object);
        $view->display();
        
	}
	function add(){
        //print_r("expression");exit;
		$CommonFunction=new CommonFunction();
		$CommonFunction->getQuanxian($this->package."/add");
		$object = new stdClass();
		
		$view  = $this->createView("operator/jinrongdiya/add.html");
		$view->assign($object);
		$view->display();

	}

     //上传图片
    function generatepicutrea(){
        $IDcard=Request::getVar('IDcard','post');
        $base64=Request::getVar('Base64Code','post');
        $req=2;
        if(!empty($base64)){
            $img = base64_decode($base64);
            $a = file_put_contents('../../../thumb/upload/idpicture/'.$IDcard.'.jpg', $img);
            $req=1;
        }
        
       
        header("Content-type: application/json");
        echo json_encode($req);
        exit();
    }
    //人脸验证上传图片
     function generatepicutrea_a(){
        $IDcard=Request::getVar('IDcard','post');
        $base64=Request::getVar('Base64Code','post');
        $time=time();
           if(!empty($base64)){
            $img = base64_decode($base64);
            $a = file_put_contents('../../../thumb/upload/idpicture/'.$time.'.jpg', $img);
        }
        header("Content-type: application/json");
        echo json_encode($time);
        exit();
    }
    function getRenlian(){
        $url = 'https://aip.baidubce.com/oauth/2.0/token';
        $post_data['grant_type']       = 'client_credentials';
        $post_data['client_id']      = 'dg6K2lFIA2TkyGqhiG8nOXkP';
        $post_data['client_secret'] = 'Gve28EP945xfqD9wPX5PKzTscVleI5ej';
        $o = "";
        foreach ( $post_data as $k => $v ) 
        {
            $o.= "$k=" . urlencode( $v ). "&" ;
        }
        $post_data = substr($o,0,-1);
        $res = $this->request_post($url, $post_data);
       
        
      
        $idcard = Request::getVar('idcard','post');
        $realname = Request::getVar('realname','post');
        $image = Request::getVar('image','post');
         
       
        $token = $res->access_token;
      
        $url1 = 'https://aip.baidubce.com/rest/2.0/face/v3/person/verify?access_token=' . $token;
        $bodys = array(
            'image' => $image,
            'image_type' => 'BASE64',
            'id_card_number' => $idcard,
            'name' => $realname
        );
        $bodyStr = json_encode($bodys);
        $res_a = $this->request_post($url1, $bodyStr);
        echo json_encode($res_a->result->score);
    }

     function request_post($url = '', $param = '') {
        if (empty($url) || empty($param)) {
            return false;
        }
        $postUrl = $url;
        $curlPost = $param;
        $curl = curl_init();//初始化curl
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
       
        curl_setopt($curl, CURLOPT_URL,$postUrl);//抓取指定网页
        curl_setopt($curl, CURLOPT_HEADER, 0);//设置header
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_POST, 1);//post提交方式
        curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPost);
        $data = curl_exec($curl);//运行curl
        curl_close($curl);
        $data=json_decode($data);
        return $data;
    }

	
}
