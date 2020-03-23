<?php
import('imag.utilities.pagination');
import('imag.utilities.pagestyle');
import('imag.utilities.pagestyle_a');
import('operator.navi.admincontroller');
import('operator.navi.privilegehelper');
import('imag.fusecookie');
import('imag.filesystem.fusefile');
import('imag.filesystem.filesystem');
import('imag.image.uploader');
import('imag.utilities.tool');
import('imag.utilities.tool');
import('model.Questions');
import('model.Emp');
import('model.Zemp_zhiwei');
import('model.Question_image');
import('model.Questions_log');
import('publicFunction.CommonFunction');

//系统问题  操作失误
class WentiController extends AdminController
{
    /**
     * Constructor
     *
     * @params    array    Controller configuration array
     */
    var $guanliyuan_id = 1;
    var $jianyan_id = 160;
    var $privilegeList;
    var $package = 'site/operator/wenti';
    function __construct($config = array())
    {
        parent::__construct($config);
        $this->registerTask('add', 'add');
        $this->registerTask('list', 'list_a');
        $this->registerTask('insert', 'new_insert');
        $this->registerTask('xiangxi', 'info');
        $this->registerTask('shenhe', 'shenhe');
        $this->registerTask('shenhe_a', 'check');
        $this->registerTask('chuli', 'chuli');
        $this->registerTask('quereng', 'check_deal');
        $this->registerTask('quereng_a', 'quereng_a');
        $this->registerTask('xiugai', 'change');
        $this->registerTask('xiugai_a', 'update');
        $this->registerTask('tongji', 'tongji');
        $this->registerTask('delete', 'delete');
        $this->registerTask('chuli_a', 'deal_question');
        $this->registerTask('check_add', 'check_add');
        $this->registerTask('back_question', 'back_question');
    }

    function display()
    {
        echo "display";
    }

    //删除
    function delete()
    {
        $id = Request::getVar('id', 'get');
        $forward = Request::getVar("forward");
        if (empty($forward)) {
            $forward = "list.php";
        }
        $model = $this->createModel("wenti", dirname(__FILE__));
        if ($model->delete_a($id)) {
            $this->redirect($forward, "操作成功！");
        } else {
            $this->redirect($forward, "操作失败");
        }
    }

    //展示

    function list_a()
    {

        $rule = $this->package . "/list";
        $CommonFunction = new CommonFunction();
        $CommonFunction->getQuanxian($rule);
        $p = Request::getVar('p','get');
        if(empty($p)){
            $p = 1;
        }
        $per_page = 10;

        $base_url = 'list.php?';
        $group_id = $this->getMenu($_SESSION['a_uid']);
        $add=$CommonFunction->panduan_rule($this->package."/add");
        $show_info=$CommonFunction->panduan_rule($this->package."/xiangxi");
        $show_deal=$CommonFunction->panduan_rule($this->package."/chuli");
        $show_change=$CommonFunction->panduan_rule($this->package."/xiugai");

        $stats = Request::getVar('stats');
        $type = Request::getVar('type');
        $id = Request::getVar('id');
        $where = [];
        if($id != null){
            $where[] = ['and', 'id', $id];
        }else{
            if ($stats != 0) {
                $base_url .= "stats=$stats";
                $where[] = ['and', 'stats', $stats];
            }
            if ($type != 0){
                if($base_url != 'list.php?')
                    $base_url .= '&';
                $base_url .= "type=$type";
                $where[] = ['and', 'type', $type];
            }
        }
        //如果有权限则显示全部
//        if ($show_all!=1) {
//            $where[] = ['and', 'promoter', $_SESSION['user_id']];
//        }

//        $data = Questions::find('*', $where, ['id' => 'desc'], $per_page, $start);
        $questions = Questions::getQuestionsList($where);
        $total_item = count($questions);

        $data = [];
        $start = ($p-1) * $per_page;
        for($i = 0; $i < $per_page; $i ++){
            $offset = $start + $i;
            if(isset($questions[$offset])){
                $checkers = explode(',', $questions[$offset]['checker']);
                $checker_leader = explode(',', $questions[$offset]['checker_leader']);
                if((in_array($_SESSION['user_id'], $checkers) && $questions[$offset]['stats'] == Questions::WAITING_CHECK) || (in_array($_SESSION['user_id'], $checker_leader) && $questions[$offset]['stats'] == Questions::RECHECK)){
                    // 待审核
                    $questions[$offset]['show_check'] = true;
                }else{
                    $questions[$offset]['show_check'] = false;
                }
                $data[] =  $questions[$offset];
            }else{
                break;
            }
        }

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


        $object = new Object();

        foreach ($data as $key => $value){
            $data[$key]['promoter_name'] = Emp::getNameById($value['promoter']);
            $data[$key]['checker_name'] = Emp::getNameById($value['checker']);
            $data[$key]['deal_name'] = Emp::getNameById($value['dealer']);
        }
        $object->a_uid = $_SESSION['a_uid'];
        $object->user_id = $_SESSION['user_id'];
        $object->questions = $data;
        $object->p=$p;
        $object->total = $total_item;
        $object->PAGINATION = $pagination->fetch();
         $object->add = $add;

        $object->group_id = $group_id;
        $object->show_info = $show_info;
        $object->show_change = $show_change;
        $object->show_deal = $show_deal;

        $view = $this->createView("operator/questions/list.html");
        $view->assign($object);
        //print_r($object->wenti);exit;
        $view->display();
    }

    function check_add()
    {
        $result = Questions::find('id', [['and', 'promoter', $_SESSION['user_id']],['and', 'stats', Questions::DEALED]]);
        if(count($result) > 0){
            // 有待确认工单
            echo 0;
            die;
        }
        echo 1;
    }

    //添加问题页面
    function add()
    {
        //webuploader-pick-hover
        $CommonFunction = new CommonFunction();
        $CommonFunction->getQuanxian($this->package . "/add");

        $object = new stdClass();
        $object->tmpid = CommonFunction::getMicrotime();
        $object->bug = Questions::BUG;
        $object->mistake = Questions::MISTAKE;
        $object->advise = Questions::ADVISE;
        $view = $this->createView("operator/wenti/new_add.html");
        $view->assign($object);
        $view->display();
    }

    function new_insert()
    {
        if($_SESSION['user_id'] == Emp::MANAGER_ID){
            $date = [
                'stats' => Questions::WAITING_DEAL,
                'title' => Request::getVar('title'),
                'description' => Request::getVar('desc'),
                'type' => Request::getVar('type'),
                'promoter' => $_SESSION['user_id'],
                'start_time' => date('Y-m-d H:i:s'),
            ];
        }else{
            $leader = Emp::getLeaders($_SESSION['user_id']);

            $checkers = implode(',', $leader);
            $date = [
                'title' => Request::getVar('title'),
                'description' => Request::getVar('desc'),
                'type' => Request::getVar('type'),
                'promoter' => $_SESSION['user_id'],
                'checker' => $checkers,
                'start_time' => date('Y-m-d H:i:s'),
            ];
        }

        $result = Questions::add($date);

        $question_id = Questions::getLastQuestionsId();
        if($result){
            $question_log = [
                'questions_id' => $question_id,
                'emp_id' => $_SESSION['user_id'],
                'type' => Questions_log::INSERT_QUESTION,
                'dateline' => time(),
                'text' => '',
            ];

            Questions_log::add($question_log);

            $tmpid = Request::getVar('tmpid');
            $date = [
                'wenti_id' => $question_id
            ];
            $where = [
                ['and', 'wenti_id', $tmpid]
            ];
            Question_image::update($date, $where);
        }else{
            echo '添加失败';die;
        }

        $username = Emp::getNameById($_SESSION['user_id']);
        if($_SESSION['user_id'] == Emp::MANAGER_ID) {
            $message = CommonFunction::sendMessage(Emp::messageGroup($this->package.'/chuli'), "用户 $username 有系统问题，请及时处理！", Xinxi::QUESTIONS, $question_id);
        }else{
            $message = CommonFunction::sendMessage($leader, "用户 $username 有系统问题，需要您审核！", Xinxi::QUESTIONS, $question_id);
        }

        $object = new StdClass();
        $object->result = $result && isset($message) && $message ? "添加成功！":"添加失败";
        $view  = $this->createView("operator/emp/result.html");
        $view->assign($object);
        $view->display();
    }

    //详细
    function xiangxi()
    {
        $object = new stdClass();
        $id = Request::getVar('id', 'get');
        $model = $this->createModel("wenti", dirname(__FILE__));
        $data = $model->getListBySql('select * from wenti where id=' . $id);
        $data = $data[0];
        $data['username1'] = $this->getUsername($data['wenti_empid1']);
        $data['username2'] = $this->getUsername($data['wenti_empid2']);
        $data['username3'] = $this->getUsername($data['wenti_empid3']);
        $data['wenti_type'] = $this->getZhuangtai($data['wenti_zhuangtai']);
        //获取图片
        $images = $this->getImages($data['id'] + 1000000);
        $object->list = $data;
        $object->images = $images;
        $view = $this->createView("operator/wenti/xiangxi.html");
        //print_r($images);exit;
        $view->assign($object);
        $view->display();
    }

    // 撤回问题
    function back_question()
    {
        $id = Request::getVar('id');

        $info = Questions::find('stats', [['and', 'id', $id]]);
        if($info != false && $info != []){
            $stats = $info[0]['stats'];
        }else{
            header('未找到该问题', false, 400);
        }

        if(isset($stats) && ($stats == Questions::WAITING_CHECK || $stats == Questions::WAITING_CHANGE || $stats == Questions::RECHECK)){
            $date = [
                'start_time' => date('Y-m-d H:i:s'),
                'stats' => Questions::REBACK,
            ];
            Questions::update($date, [['and', 'id', $id]]);

            $username = Emp::getNameById($_SESSION['user_id']);
            $text = "用户 $username 撤回了问题。";

            $get_message_id = Questions_log::find('emp_id', [['and', 'questions_id', $id]]);
            $get_message_id = CommonFunction::array_column($get_message_id, 'emp_id');
            $get_message_id = array_unique($get_message_id);
            foreach($get_message_id as $value){
                if($value != $_SESSION['user_id']){
                    $ids[] = $value;
                }
            }

            // 撤回给所有处理人发通知

            $message = CommonFunction::sendTongZhi($ids, $text, Xinxi::QUESTIONS, $id);
            if(!$message){
                header('消息发送失败', false, 400);
            }
            $question_log = [
                'questions_id' => $id,
                'emp_id' => $_SESSION['user_id'],
                'type' => Questions_log::REBACK_QUESTION,
                'dateline' => time(),
            ];
            Questions_log::add($question_log);

            Xinxi::rebackDeal($id, Xinxi::QUESTIONS);
        }else{
            header('当前状态无法撤回', false, 400);
        }
    }

    function info()
    {
        $CommonFunction = new CommonFunction();
        $CommonFunction->getQuanxian($this->package . "/xiangxi");

        $object = new stdClass();
        $id = Request::getVar('id');

        $date = Questions::find('*', [['and', 'id', $id]]);
        $date[0]['promoter_name'] = Emp::getNameById($date[0]['promoter']);
        $logs = Questions_log::find('*', [['and', 'questions_id', $id]]);
        foreach ($logs as $k => $v){
            $logs[$k]['dateline'] = date('Y-m-d H:i:s', $v['dateline']);
            $logs[$k]['emp'] = Emp::getNameById($v['emp_id']);
            $logs[$k]['type'] = Questions_log::getActionByType($v['type']);
        }
        $object->list = $date[0];
        $logs = array_reverse($logs);
        $object->logs = $logs;
        $object->images = Question_image::find('images', [['and', 'wenti_id', $id]]);

        $view = $this->createView("operator/wenti/xiangxi.html");
        //print_r($images);exit;
        $view->assign($object);
        $view->display();
    }

    //审核页面
    function shenhe()
    {

        $object = new stdClass();
        $id = Request::getVar('id');
        $object->id = $id;
        $object->waiting_deal = Questions::WAITING_DEAL;
        $object->waiting_change = Questions::WAITING_CHANGE;
        $object->recheck = Questions::RECHECK;
        $object->is_manager = $_SESSION['user_id'] == Emp::MANAGER_ID ? 1 : 0;
        $view = $this->createView("operator/wenti/new_shenhe.html");
        $view->assign($object);
        $view->display();
    }

    function check()
    {
        // 审核处理
        $stats = Request::getVar('stats');
        $id = Request::getVar('id');
        $reason = Request::getVar('reason');
        $info = Questions::find('stats', [['and', 'id', $id]]);
        if($info == false || (isset($info[0]['stats']) && ($info[0]['stats'] != Questions::WAITING_CHECK && $info[0]['stats'] != Questions::RECHECK))){
            echo '该问题已被审核！';
            die;
        }

        if($stats == Questions::WAITING_DEAL){
            // 审核通过
            $question_info = Questions::find('checker', [['and', 'id', $id]]);
            if($question_info != false && $question_info != []){
                $checker = explode(',', $question_info[0]['checker']);
                if(count($checker) == 1){
                    $date = [
                        'stats' => $stats,
                        'check_time' => date('Y-m-d H:i:s'),
                        'reason' => $reason,
                    ];

                    $text = '有一个系统问题已审核完毕，请及时处理！';
                    $get_message_id = Emp::messageGroup($this->package. '/chuli');

                }else{
                    // 未所有审核人通过审核 不改变状态
                    $new_check = [];
                    foreach ($checker as $value){
                        if($_SESSION['user_id'] != $value){
                            $new_check[] = $value;
                        }
                    }

                    $date = [
                        'check_time' => date('Y-m-d H:i:s'),
                        'reason' => $reason,
                        'checker' => implode(',', $new_check),
                    ];
                }

                $log_date = [
                    'questions_id' => $id,
                    'emp_id' => $_SESSION['user_id'],
                    'type' => Questions_log::CHECK_QUESTION,
                    'dateline' => time(),
                    'text' => $reason,
                ];
            }
        }elseif($stats == Questions::RECHECK){
            // 发起复审
            $leaders = Emp::getLeaders($_SESSION['user_id']);
            if($leaders != []){
                $checkers = implode(',', $leaders);
                $date = [
                    'stats' => $stats,
                    'check_time' => date('Y-m-d H:i:s'),
                    'reason' => $reason,
                    'checker_leader' => $checkers,
                ];

                $log_date = [
                    'questions_id' => $id,
                    'emp_id' => $_SESSION['user_id'],
                    'type' => Questions_log::RECHECK_QUESTION,
                    'dateline' => time(),
                    'text' => $reason,
                ];

                $username = Emp::getNameById(Questions::getPromoterId($id));
                $text = "用户 $username 有系统问题，需要您审核！";
                $get_message_id = $leaders;

            }else{
                echo '未找到上级';die;
            }
        }else{
            // 驳回
            $date = [
                'stats' => $stats,
                'check_time' => date('Y-m-d H:i:s'),
                'reason' => $reason,
            ];

            $log_date = [
                'questions_id' => $id,
                'emp_id' => $_SESSION['user_id'],
                'type' => Questions_log::IGNORE_QUESTION,
                'dateline' => time(),
                'text' => $reason,
            ];

            $text = '您提交的系统问题，审核没有通过，请及时修改！';
            $get_message_id = Questions::getPromoterId($id);
        }


        $result = Questions::update($date, [['and', 'id', $id]]);
        if ($result) {
            Questions_log::add($log_date);

            Xinxi::dealTask($id, Xinxi::QUESTIONS);
            if (!empty($get_message_id)) {
                $message = CommonFunction::sendMessage($get_message_id, $text, Xinxi::QUESTIONS, $id);
            }
        }

        $object = new stdClass();
        $object->result = $result && isset($message) && $message ? "审核成功！":"审核失败";
        $view  = $this->createView("operator/emp/result.html");
        $view->assign($object);
        $view->display();
    }

    function chuli()
    {
        $CommonFunction = new CommonFunction();
        $CommonFunction->getQuanxian($this->package . "/chuli");

        $object = new stdClass();
        $id = Request::getVar('id');

        $object->id = $id;
        $info = Questions::find('promoter,checker,checker_leader', [['and', 'id', $id]]);
        $info = $info[0];
        if($info['promoter'] == Emp::MANAGER_ID || $info['checker'] == Emp::MANAGER_ID
            || $info['checker_leader'] == Emp::MANAGER_ID){
            $object->show_recheck = 0;
        }else{
            $object->show_recheck = 1;
        }

        $object->dealed = Questions::DEALED;
        $object->cannot_deal = Questions::CANNOT_DEAL;
        $object->waiting_change = Questions::WAITING_CHANGE;
        $view = $this->createView("operator/wenti/new_chuli.html");
        $view->assign($object);
        $view->display();
    }

    function deal_question()
    {
        // 处理方法
        $id = Request::getVar('id');
        $info = Questions::find('stats,checker,checker_leader,promoter', [['and', 'id', $id]]);
        $deal_reason = Request::getVar('deal_reason');
        if($info == false || (isset($info[0]['stats']) && $info[0]['stats'] != Questions::WAITING_DEAL)){
            echo '该问题已被处理！';
            die;
        }

        $stats = Request::getVar('stats');

        if($stats == Questions::RECHECK){
            // 发回复审
            if(empty($info[0]['checker_leader'])){
                $emp_id = $info[0]['checker'];
            }else{
                $emp_id = $info[0]['checker_leader'];
            }

            $leader_id = Emp::getLeaders($emp_id);
            $leader_ids = implode(',', $leader_id);

            $date = [
                'stats' => $stats,
                'dealer' => $_SESSION['user_id'],
                'deal_time' => date('Y-m-d H:i:s'),
                'deal_reason' => $deal_reason,
                'checker_leader' => $leader_ids,
            ];

            $result = Questions::update($date, [['and', 'id', $id]]);

            if($result){
                $log_date = [
                    'questions_id' => $id,
                    'emp_id' => $_SESSION['user_id'],
                    'type' => Questions_log::RECHECK_QUESTION,
                    'dateline' => time(),
                    'text' => $deal_reason,
                ];
                Questions_log::add($log_date);

                $username = Emp::getNameById($info[0]['promoter']);
                $text = "用户 $username 有系统问题，需要您审核！";
                $message = CommonFunction::sendMessage($leader_id, $text, Xinxi::QUESTIONS, $id);

                Xinxi::dealTaskIT($id, Xinxi::QUESTIONS);
            }else{
                echo '保存失败';die;
            }
        }else{
            $date = [
                'stats' => $stats,
                'dealer' => $_SESSION['user_id'],
                'deal_time' => date('Y-m-d H:i:s'),
                'deal_reason' => $deal_reason,
            ];
            $result = Questions::update($date, [['and', 'id', $id]]);
            if ($result) {
                switch ($stats) {
                    case Questions::DEALED:
                        $type = Questions_log::FINISH_QUESTION;
                        $text = '您提交的系统问题已处理完毕，请仔细检查确认是否已解决！';
                        break;
                    case Questions::CANNOT_DEAL:
                        $type = Questions_log::CANNOT_DEAL_QUESTION;
                        $text = '您提交的系统问题暂时不能解决！';
                        break;
                    case Questions::WAITING_CHANGE:
                        $type = Questions_log::IGNORE_QUESTION;
                        $text = '您提交的问题被IT部驳回，请及时修改！';
                        break;
                    default:
                        $text = '状态错误';
                }
                if($stats == Questions::CANNOT_DEAL){
                    $message = CommonFunction::sendTongZhi(Questions::getPromoterId($id), $text, Xinxi::QUESTIONS, $id);
                }else{
                    $message = CommonFunction::sendMessage(Questions::getPromoterId($id), $text, Xinxi::QUESTIONS, $id);
                }


                $log_date = [
                    'questions_id' => $id,
                    'emp_id' => $_SESSION['user_id'],
                    'type' => $type,
                    'dateline' => time(),
                    'text' => $deal_reason,
                ];
                Questions_log::add($log_date);

                Xinxi::dealTaskIT($id, Xinxi::QUESTIONS);
            }
        }

        $object = new stdClass();
        $object->result = $result && isset($message) && $message ? "处理成功！":"处理失败";
        $view  = $this->createView("operator/emp/result.html");
        $view->assign($object);
        $view->display();
    }


    //处理
    function chuli_a()
    {
        $forward = Request::getVar("forward");
        if (empty($forward)) {
            $forward = "list.php";
        }
        $model = $this->createModel("wenti", dirname(__FILE__));
        $id = Request::getVar('id', 'post');
        $shenhe_type = Request::getVar('shenhe_type', 'post');
        $wenti_liyou = Request::getVar('wenti_liyou', 'post');

        if ($shenhe_type == 1) {
            $wenti_zhuangtai = 4;
            $text = "您提交的系统问题已处理完毕，请仔细检查确认是否已解决！";
        } else {
            $wenti_zhuangtai = 6;
            $text = "您提交的系统问题暂时不能解决！";
        }
        $object1 = new stdClass();
        $object1->wenti_zhuangtai = $wenti_zhuangtai;
        $object1->wenti_empid3 = $_SESSION['a_uid'];
        $object1->wenti_chilitime = date("Y-m-d H:i:s");
        $object1->wenti_liyou = $wenti_liyou;
        $object1->id = $id;

        if ($model->update($object1, 'id', 'wenti')) {
            $userid = $this->getEmpid($id);
            $CommonFunction = new CommonFunction();
            $uid_list[] = $userid;
            $CommonFunction->fasong_xinxi($uid_list, $text);


            $this->redirect($forward, "处理成功");
        } else {
            $this->redirect($forward, "处理失败");
        }
    }

    function check_deal()
    {
        $id = Request::getVar('id');
        $stats = Request::getVar('stats');

        $date = [
            'stats' => $stats,
            'start_time' => date('Y-m-d H:i:s'),
        ];
        $result = Questions::update($date, [['and', 'id', $id]]);
        if ($result) {
            $promoter_name = Emp::getNameById(Questions::getPromoterId($id));

            if($stats == Questions::CHECK_DEAL){
                $text = "用户 $promoter_name 的问题已确定已解决！";
                $get_message_id = Questions::getDealId($id);
                $rel_action = Questions_log::CHECK_FINISH_QUESTION;
                CommonFunction::sendTongZhi($get_message_id, $text, Xinxi::QUESTIONS, $id);
            }else{
                $text = "用户 $promoter_name 的问题未解决,请重新处理！";
                $get_message_id = Emp::messageGroup($this->package . '/chuli');
                $rel_action = Questions_log::REDEAL_QUESTION;
                CommonFunction::sendMessage($get_message_id, $text, Xinxi::QUESTIONS, $id);
            }

            $log_date = [
                'questions_id' => $id,
                'emp_id' => $_SESSION['user_id'],
                'type' => $rel_action,
                'dateline' => time(),
            ];
            Questions_log::add($log_date);
            Xinxi::dealTask($id, Xinxi::QUESTIONS);
        }
    }

    //确认界面
    function quereng()
    {
        $object = new stdClass();
        $id = Request::getVar('id');
        $object->id = $id;
        $view = $this->createView("operator/wenti/quereng.html");
        $view->assign($object);
        $view->display();
    }

    function quereng_a()
    {

        $forward = Request::getVar("forward");
        if (empty($forward)) {
            $forward = "list.php";
        }
        $model = $this->createModel("wenti", dirname(__FILE__));

        $id = Request::getVar('id', 'post');
        $quereng_type = Request::getVar('quereng_type', 'post');
        $data['id'] = $id;
        $wenti_zhuangtai = 3;

        $uderid = $this->getEmpid($id);//获取提交人ID

        $username = $this->getUsername($uderid);

        $text = "用户：" . $username . "提交的问题未解决,请重新处理！";
        if ($quereng_type == 1) {
            $wenti_zhuangtai = 5;
            $text = "用户：" . $username . "提交的问题，用户已确定已解决！";
        }

        $object1 = new stdClass();
        $object1->wenti_zhuangtai = $wenti_zhuangtai;
        $object1->wenti_shenchatime = date("Y-m-d H:i:s");
        $object1->id = $id;
        if ($model->update($object1, 'id', 'wenti')) {

            $userid = $this->guanliyuan_id;
            $CommonFunction = new CommonFunction();
            $uid_list[] = $userid;
            $CommonFunction->fasong_xinxi($uid_list, $text);

            $this->redirect($forward, "操作成功！");
        } else {
            $this->redirect($forward, "审核失败");
        }

    }

    function change()
    {
        $CommonFunction = new CommonFunction();
        $CommonFunction->getQuanxian($this->package . "/xiugai");

        $id = Request::getVar('id');
        $object = new stdClass();

        $info = Questions::find('title,description,type', [['and', 'id', $id]]);
        $object->data = $info[0];
        $object->id = $id;
        $object->bug = Questions::BUG;
        $object->mistake = Questions::MISTAKE;
        $object->advise = Questions::ADVISE;

        $images = Question_image::find('id,images', [['and', 'wenti_id', $id]]);
        $object->images = $images;

        $view = $this->createView("operator/wenti/new_xiugai.html");
        $view->assign($object);
        $view->display();
    }

    //修改
    function xiugai()
    {
        $model = $this->createModel("wenti", dirname(__FILE__));
        $id = Request::getVar('id');
        $object = new stdClass();
        $object->tmpid = rand(790000, 799999);
        $data = $model->getListBySql('select * from wenti where id=' . $id);
        $object->data = $data[0];



        $view = $this->createView("operator/wenti/new_xiugai.html");
        $view->assign($object);
        $view->display();
    }

    function update()
    {
        // 修改处理
        $id = Request::getVar('id');
        $type = Request::getVar('type');
        $description = Request::getVar('description');
        $title = Request::getVar('title');

        $info = Questions::find('stats', [['and', 'id', $id]]);
        if($info == false || (isset($info[0]['stats']) && ($info[0]['stats'] != Questions::WAITING_CHANGE) && $info[0]['stats'] != Questions::WAITING_CHECK)){
            echo '该问题已无法修改！';
            die;
        }

        $delimgs = Request::getVar('delimg');
        if(!empty($delimgs)){
            foreach ($delimgs as $value) {
                Question_image::delete([['and', 'id', $value]]);
            }
        }

        if($_SESSION['user_id'] == Emp::MANAGER_ID){
            $date = [
                'type' => $type,
                'title' => $title,
                'description' => $description,
                'stats' => Questions::WAITING_DEAL,
                'start_time' => date('Y-m-d H:i:s'),
            ];

            $result = Questions::update($date, [['and', 'id', $id]]);
            if($result){
                Questions_log::saveLog($id, Questions_log::CHANGE_IGNORE_QUESTION, $description);

                Xinxi::dealTask($id, Xinxi::QUESTIONS);
                $text = '有一个系统问题已审核完毕，请及时处理！';
                $get_message_id = Emp::messageGroup($this->package. '/chuli');
                $message = CommonFunction::sendMessage($get_message_id, $text, Xinxi::QUESTIONS, $id);
            }
        }else{
            $leaders = Emp::getLeaders($_SESSION['user_id']);
            $date = [
                'title' => $title,
                'description' => $description,
                'start_time' => date('Y-m-d H:i:s'),
                'stats' => Questions::WAITING_CHECK,
                'type' => $type,
                'checker' => implode(',', $leaders),
            ];

            $result = Questions::update($date, [['and', 'id', $id]]);
            $promoter_name = Emp::getNameById(Questions::getPromoterId($id));
            if ($result) {
                $question_log = [
                    'questions_id' => $id,
                    'emp_id' => $_SESSION['user_id'],
                    'type' => Questions_log::CHANGE_IGNORE_QUESTION,
                    'dateline' => time(),
                ];
                Questions_log::add($question_log);

                Xinxi::dealTask($id, Xinxi::QUESTIONS);

                $text = "用户 $promoter_name 提交的问题已修改,请重新审核！";
                $message = CommonFunction::sendMessage($leaders, $text, Xinxi::QUESTIONS, $id);
            }
        }


        $object = new StdClass();
        $object->result = $result && isset($message) && $message ? "操作成功！":"操作失败";
        $view  = $this->createView("operator/emp/result.html");
        $view->assign($object);
        $view->display();
    }


    function xiugai_a()
    {
        $forward = Request::getVar("forward");
        if (empty($forward)) {
            $forward = "list.php";
        }
        $model = $this->createModel("wenti", dirname(__FILE__));
        $id = Request::getVar('id', 'post');
        $uid = Request::getVar('uid', 'post');
        $wenti_name = Request::getVar('wenti_name', 'post');
        $wenti_shuoming = Request::getVar('wenti_shuoming', 'post');
        $object = new stdClass();

        $object->wenti_name = $wenti_name;
        $object->wenti_shuoming = $wenti_shuoming;
        $object->wenti_zhuangtai = 1;
        $object->id = $id;
        $wenti_id = $id + 1000000;

        if ($model->update($object, 'id', 'wenti')) {
            $model->delete($wenti_id);
            $sql = "Update wenti_image set wenti_id={$wenti_id} Where images_type='other' and wenti_id={$uid}";
            $model->update("", "", "", $sql);
            //邮件提醒修改完毕
            $uderid = $this->getEmpid($id);//获取提交人ID
            $username = $this->getUsername($uderid);
            $text = "用户：" . $username . "提交的问题已修改,请重新审核！";
            $userid = $this->jianyan_id;
            $CommonFunction = new CommonFunction();
            $uid_list[] = $userid;
            $CommonFunction->fasong_xinxi($uid_list, $text);


            $this->redirect($forward, "操作成功！");
        } else {
            $this->redirect($forward, "操作失败");
        }


        $wenti_id = $recid + 1000000;


    }


    //根据姓名ID获取姓名
    function getUsername($admin_user_id)
    {
        if ($admin_user_id != "") {
            $model = $this->createModel("wenti", dirname(__FILE__));
            $data = $model->getListBySql('select username from admin_users where admin_user_id=' . $admin_user_id);
            $data = $data[0]['username'];
            return $data;
        } else {
            return "";
        }

    }

    //根据姓名ID获取邮箱
    function getEmil($admin_user_id)
    {
        if ($admin_user_id != "") {
            $model = $this->createModel("wenti", dirname(__FILE__));
            $data = $model->getListBySql('select mail from admin_users where admin_user_id=' . $admin_user_id);
            $data = $data[0]['mail'];
            return $data;
        } else {
            return "";
        }

    }

    //根据ID获取状态
    function getZhuangtai($wenti_zhuangtai)
    {
        if ($wenti_zhuangtai != "") {
            $model = $this->createModel("wenti", dirname(__FILE__));
            $data = $model->getListBySql('select type from wenti_type where id=' . $wenti_zhuangtai);
            $data = $data[0]['type'];
            return $data;
        } else {
            return "";
        }

    }

    //根据ID获取empid1添加人ID
    function getEmpid($id)
    {
        if ($id != "") {
            $model = $this->createModel("wenti", dirname(__FILE__));
            $data = $model->getListBySql('select wenti_empid1 from wenti where id=' . $id);
            $data = $data[0]['wenti_empid1'];
            return $data;
        } else {
            return "状态异常";
        }

    }

    function getImages($wenti_id)
    {
        $model = $this->createModel("wenti", dirname(__FILE__));
        $images = $model->getListBySql('select images from wenti_image where wenti_id=' . $wenti_id);
        return $images;
    }

    //根据用户ID，获取邮箱号
    function getMenu($admin_user_id)
    {
        $model = $this->createModel("wenti", dirname(__FILE__));
        $admin_group_id = $model->getListBySql('select admin_group_id from admin_users where admin_user_id=' . $admin_user_id);
        $admin_group_id = $admin_group_id[0]['admin_group_id'];
        return $admin_group_id;
    }
    //统计
    function tongji()
    {
        $bugs = [];
        $mistakes = [];
        $advices = [];

        $questions = Questions::find('promoter,type', [], []);
        foreach ($questions as $value){
            if($value['type'] == Questions::BUG){
                if(isset($bugs[$value['promoter']])){
                    $bugs[$value['promoter']]['counts'] += 1;
                }else{
                    if(Emp::checkEmpActive($value['promoter'])){
                        $bugs[$value['promoter']] = [
                            'name' => Emp::getNameById($value['promoter']),
                            'counts' => 1,
                        ];
                    }
                }
            }elseif($value['type'] == Questions::MISTAKE){
                if(isset($mistakes[$value['promoter']])){
                    $mistakes[$value['promoter']]['counts'] += 1;
                }else{
                    if(Emp::checkEmpActive($value['promoter'])){
                        $mistakes[$value['promoter']] = [
                            'name' => Emp::getNameById($value['promoter']),
                            'counts' => 1,
                        ];
                    }
                }
            }elseif($value['type'] == Questions::ADVISE){
                if(isset($advices[$value['promoter']])){
                    $advices[$value['promoter']]['counts'] += 1;
                }else{
                    if(Emp::checkEmpActive($value['promoter'])){
                        $advices[$value['promoter']] = [
                            'name' => Emp::getNameById($value['promoter']),
                            'counts' => 1,
                        ];
                    }
                }
            }
        }

        if($bugs != []){
            $bugs_count=[];
            foreach ($bugs as $value){
                $bugs_count[] = $value['counts'];
            }
            array_multisort($bugs_count, SORT_DESC, SORT_NUMERIC, $bugs);
        }

        if($mistakes != []){
            $mistakes_count=[];
            foreach ($mistakes as $value){
                $mistakes_count[] = $value['counts'];
            }
            array_multisort($mistakes_count, SORT_DESC, SORT_NUMERIC, $mistakes);
        }

        if($advices != []){
            $advices_count=[];
            foreach ($advices as $value){
                $advices_count[] = $value['counts'];
            }
            array_multisort($advices_count, SORT_DESC, SORT_NUMERIC, $advices);
        }

        $object = new stdClass();
        $object->bugs = $bugs;
        $object->mistakes = $mistakes;
        $object->advices = $advices;

        $view = $this->createView("operator/questions/order.html");
        $view->assign($object);
        $view->display();

    }


    //发送邮件
    function fasongyoujian($userid, $text)
    {
        $zhanghao = $this->getEmil($userid);
        require_once("phpmailer/class.phpmailer.php");
        require_once("phpmailer/class.smtp.php");
        //print_r($zhanghao);exit;
        // 实例化PHPMailer核心类
        $mail = new PHPMailer();
        // 是否启用smtp的debug进行调试 开发环境建议开启 生产环境注释掉即可 默认关闭debug调试模式
        $mail->SMTPDebug = 1;
        // 使用smtp鉴权方式发送邮件
        $mail->isSMTP();
        // smtp需要鉴权 这个必须是true
        $mail->SMTPAuth = true;
        // 链接qq域名邮箱的服务器地址
        $mail->Host = 'smtp.qq.com';
        // 设置使用ssl加密方式登录鉴权
        $mail->SMTPSecure = 'ssl';
        // 设置ssl连接smtp服务器的远程服务器端口号
        $mail->Port = 465;
        // 设置发送的邮件的编码
        $mail->CharSet = 'UTF-8';
        // 设置发件人昵称 显示在收件人邮件的发件人邮箱地址前的发件人姓名
        $mail->FromName = '运河租车';
        // smtp登录的账号 QQ邮箱即可
        $mail->Username = '1345647176@qq.com';
        // smtp登录的密码 使用生成的授权码
        $mail->Password = 'fypnqtcuhmbifhej';
        // 设置发件人邮箱地址 同登录账号
        $mail->From = '1345647176@qq.com';
        // 邮件正文是否为html编码 注意此处是一个方法
        $mail->isHTML(true);
        // 设置收件人邮箱地址
        $mail->addAddress($zhanghao . '@qq.com');
        // 添加多个收件人 则多次调用方法即可

        // 添加该邮件的主题
        $mail->Subject = '邮件主题';
        // 添加邮件正文
        $mail->Body = $text;

        // 发送邮件 返回状态
        $status = $mail->send();

    }


}

