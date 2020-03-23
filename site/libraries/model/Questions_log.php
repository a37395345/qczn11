<?php

import('model.BaseModel');

class Questions_log extends BaseModel
{
    const DBNAME = 'questions_log';

    const INSERT_QUESTION = 1;      // 添加问题
    const IGNORE_QUESTION = 2;      // 驳回申请
    const RECHECK_QUESTION = 3;     // 复审问题
    const CHECK_QUESTION = 4;       // 审核问题
    const CANNOT_DEAL_QUESTION = 5;     // 不能解决问题
    const FINISH_QUESTION = 6;      // 解决问题
    const CHECK_FINISH_QUESTION = 7;    // 确认解决问题
    const REDEAL_QUESTION = 8;      // 未解决问题
    const CHANGE_IGNORE_QUESTION = 9;   // 重新发起被驳回已修改问题
    const REBACK_QUESTION = 10;     // 撤回问题

    public static function getActionByType($type)
    {
        $action = '';
        switch ($type){
            case self::INSERT_QUESTION:
                $action = '添加问题';
                break;
            case self::IGNORE_QUESTION:
                $action = '发回修改';
                break;
            case self::RECHECK_QUESTION:
                $action = '发起复审';
                break;
            case self::CHECK_QUESTION:
                $action = '通过审核';
                break;
            case self::CANNOT_DEAL_QUESTION:
                $action = '无法解决';
                break;
            case self::FINISH_QUESTION:
                $action = '解决问题';
                break;
            case self::CHECK_FINISH_QUESTION:
                $action = '确认解决问题';
                break;
            case self::REDEAL_QUESTION:
                $action = '确认未解决问题';
                break;
            case self::CHANGE_IGNORE_QUESTION:
                $action = '修改问题';
                break;
            case self::REBACK_QUESTION:
                $action = '撤回问题';
                break;
        }
        return $action;
    }

    public static function saveLog($id, $type, $text = '')
    {
        $question_log = [
            'questions_id' => $id,
            'emp_id' => $_SESSION['user_id'],
            'type' => $type,
            'dateline' => time(),
            'text' => $text,
        ];

        $result = self::add($question_log);
        if($result != false){
            return true;
        }
        return false;
    }







    public static function add($date = [])
    {
        $base = new BaseModel();
        return $base->insert(self::DBNAME, $date);
    }

    public static function find($field = '*', $where = [], $order = [], $limit = 0, $offset = 0)
    {
        $base = new BaseModel();
        return $base->select(self::DBNAME, $field, $where, $order, $limit, $offset);
    }
}