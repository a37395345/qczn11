<?php
import('model.BaseModel');
import('model.Emp');

class Xinxi extends BaseModel
{
    // type:
    const TONGZHI = 1;          // 通知
    const TASK = 2;             // 代办事项

    // readed:
    const NO_READ = 0;          // 未读
    const READED = 1;           // 已读

    // stats：
    const NO_DEAL = 0;          // 待处理
    const DEALED = 1;           // 已处理

    // rel_type:
    const QUESTIONS = 1;        // 系统问题


    /**
     * 获取消息列表
     * @return array|false|PDOStatement|null
     */
    public static function getMessageList($type, $stats, $p, $per_page)
    {
        $p -= 1;
        // 未读消息变已读
        self::update(['readed' => 1], [['and', 'jieshou_id', $_SESSION['user_id']]]);


        $where = [
            ['and', 'jieshou_id', $_SESSION['user_id']]
        ];

        if($type != null){
            $where[] = ['and', 'type', $type];
        }
        if($stats != null){
            $where[] = ['and', 'stats', $stats];
        }

        $list = self::find('*', $where, ['id' => 'desc'], $per_page, $p * $per_page);
        foreach ($list as $key => $value){
            $list[$key]['fasong_emp'] = Emp::getNameById($value['fasong_id']);
            $list[$key]['addtime'] = date('Y-m-d H:i', $value['addtime']);
        }
        return $list;
    }

    /**
     * 获取总信息数
     * @param $type
     * @param $stats
     * @return int
     */
    public static function getTotalMessageNum($type, $stats){
        $where = [
            ['and', 'jieshou_id', $_SESSION['user_id']]
        ];

        if($type != null){
            $where[] = ['and', 'type', $type];
        }
        if($stats != null){
            $where[] = ['and', 'stats', $stats];
        }

        $list = self::find('id', $where);
        return count($list);
    }


    /**
     * 仅发送通知
     * @param $user_list
     * @param $text
     * @return bool
     */
    public static function sendMessage($user_list, $text)
    {
        if(!is_array($user_list)){
            $user_list = [$user_list];
        }

        foreach ($user_list as $value){
            $date = [
                'fasong_id' => $_SESSION['user_id'],
                'jieshou_id' => $value,
                'addtime' => time(),
                'text' => $text,
                'type' => self::TONGZHI,
            ];
            $result = self::add($date);
            if($result == false){
                return false;
            }
        }
    }

    /**
     * 发送代办事项
     * @param $user_list
     * @param $text
     * @return bool
     */
    public static function sendTask($user_list, $text)
    {
        if(!is_array($user_list)){
            $user_list = [$user_list];
        }

        foreach ($user_list as $value){
            $date = [
                'fasong_id' => $_SESSION['user_id'],
                'jieshou_id' => $value,
                'addtime' => time(),
                'text' => $text,
                'type' => self::TASK,
            ];
            $result = self::add($date);
            if($result == false){
                return false;
            }
        }
    }


    /**
     * 获取未读信息及代办事项数
     * @return int
     */
    public static function getMessageNum()
    {
        // 代办事项
        $list = self::find('id', [
            ['and', 'type', self::TASK],
            ['and', 'stats', 0],
            ['and', 'jieshou_id', $_SESSION['user_id']]
        ]);
        $list = $list !== false ? count($list) : 0;

        $message = self::find('id',[
            ['and', 'type', self::TONGZHI],
            ['and', 'readed', 0],
            ['and', 'jieshou_id', $_SESSION['user_id']]
        ]);
        $message = $message !== false ? count($message) : 0;

        return ($list + $message);
    }

    /**
     * 修改待办事项状态
     * @param $rel_id
     * @param $rel_type
     */
    public static function dealTask($rel_id, $rel_type)
    {
        self::update(['stats' => 1], [
            ['and', 'jieshou_id', $_SESSION['user_id']],
            ['and', 'rel_id', $rel_id],
            ['and', 'rel_type', $rel_type]
        ]);
    }

    /**
     * 问题处理会发多个待办事项 一个处理需修改多个待办事项的状态
     * @param $rel_id
     * @param $rel_type
     */
    public static function dealTaskIT($rel_id, $rel_type){
        $get_message_id = Emp::messageGroup('site/operator/wenti/chuli');
        foreach ($get_message_id as $value){
            self::update(['stats' => 1], [
                ['and', 'jieshou_id', $value],
                ['and', 'rel_id', $rel_id],
                ['and', 'rel_type', $rel_type]
            ]);
        }
    }

    /**
     * 问题撤回需修改该问题待处理的待办事项状态
     * @param $rel_id
     * @param $rel_type
     */
    public static function dealBackQuestion($rel_id, $rel_type)
    {
        $list = self::find('id', [
            ['and', 'rel_id', $rel_id],
            ['and', 'rel_type', $rel_type],
            ['and', 'type', self::TASK],
            ['and', 'stats', self::NO_DEAL],
        ]);

        if($list != false && $list != []){
            foreach ($list as $value){
                self::update(['stats' => self::DEALED], [
                    ['and', 'id', $value['id']],
                ]);
            }
        }
    }












    public static function find($field = '*', $where = [], $order = [], $limit = 0, $offset = 0)
    {
        $base = new BaseModel();
        return $base->select('xinxi', $field, $where, $order, $limit, $offset);
    }

    public static function add($date = [])
    {
        $base = new BaseModel();
        return $base->insert('xinxi', $date);
    }

    public static function update($date, $where)
    {
        $base = new BaseModel();
        return $base->updates('xinxi', $date, $where);
    }
}