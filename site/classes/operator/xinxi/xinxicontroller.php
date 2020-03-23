<?php
import('imag.utilities.pagestyle_a');
import('imag.utilities.pagination');
import('operator.navi.admincontroller');
import('publicFunction.CommonFunction');

class xinxiController extends AdminController
{
	function __construct($config = array())
	{

		parent::__construct($config);
		$this->registerTask( 'getxinxi','getxinxi');
		$this->registerTask( 'lists','lists');
		$this->registerTask( 'info','info');
		
	}
	function display(){

		echo "display";
	}


	function getxinxi(){
		echo json_encode(['num' => Xinxi::getMessageNum()]);
	}

	function lists()
    {
        $object = new Object();

        $p = Request::getVar('p','get');
        if(empty($p)){
            $p = 1;
        }
        $per_page = 10;
        $base_url = 'index.php?task=lists';

        $type = Request::getVar('type');
        $stats = Request::getVar('stats');


        if ($type != null) {
            $base_url .= "&type=$type";
        }
        if ($stats != 0){
            $base_url .= "&stats=$stats ";
        }

        $list = Xinxi::getMessageList($type, $stats, $p, $per_page);
        if ($list === false){
            echo 'system error';die;
        }
        $total_item = Xinxi::getTotalMessageNum($type, $stats);

//        $result = CommonFunction::dealPagination($list, $p, $per_page);

        $options = array(
            "baseurl"	 => $base_url,
            "totalitems" => $total_item,
            "perpage"	 => $per_page,
            "page"	     => $p,
            "maxpage"	 => 10,
            "pagestyle"  => new PageStyle_a(),
            "showtotal"  => false
        );
        $pagination = new Pagination($options);
        $p = $pagination->getPage();

        $object->p=$p;
        $object->total = $total_item;
        $object->PAGINATION = $pagination->fetch();
        $object->list = $list;
        $view = $this->createView("operator/xinxi/list.html");
        $view->assign($object);
        $view->display();
    }

	function info(){
		$id = Request::getVar('id','get');
		$message = Xinxi::find('*', [['and', 'id', $id]]);
		var_dump($message);die;
	}
}