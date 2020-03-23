<?php

import('model.BaseModel');
import('model.Emp');
import('publicFunction.CommonFunction');

class Questions extends BaseModel
{
    const WAITING_CHECK = 1;        // 待审核
    const WAITING_DEAL = 2;         // 待处理
    const DEALED = 3;               // 待确认
    const WAITING_CHANGE = 4;       // 待修改
    const CANNOT_DEAL = 5;          // 无法解决
    const CHECK_DEAL = 6;           // 已确认
    const RECHECK = 7;              // 复审
    const REBACK = 8;               // 撤回问题

    const BUG = 1;                  // 系统bug
    const MISTAKE = 2;              // 操作失误
    const ADVISE = 3;               // 操作建议


    /**
     * 获取系统问题列表
     * @param $where
     * @return array|false|PDOStatement
     */
    public static function getQuestionsList($where)
    {
        if($_SESSION['user_id'] == 1 || $_SESSION['user_id'] == Emp::MANAGER_ID || $_SESSION['department_id'] == Department::IT){
            return self::find('*', $where, ['id' => 'desc']);
        }

        $list = [];

        $selfSql = array_merge($where, [['and', 'promoter', $_SESSION['user_id']]]);
        $self_list = self::find('*', $selfSql);
        if($self_list != [] && $self_list != false){
            $list = array_merge($list, $self_list);
        }

        $user_list = Emp::getUserListByZhiwei(Emp::getEmp($_SESSION['user_id']));

        foreach ($user_list as $value){
            $userSql = array_merge($where, [['and', 'promoter', $value]]);
            $result = self::find('*', $userSql);
            if($result != [] && $result != false){
                $list = array_merge($list, $result);
            }
        }

        $ids = CommonFunction::array_column($list, 'id');
        array_multisort($ids, SORT_DESC, SORT_NUMERIC, $list);


        return $list;
    }

    /**
     * 获取发起人id
     * @param $question_id
     * @return bool
     */
    public static function getPromoterId($question_id)
    {
        $result = self::find('promoter',[['and', 'id', $question_id]]);
        if($result){
            return $result[0]['promoter'];
        }
        return false;
    }

    /**
     * 获取处理人id
     * @param $question_id
     * @return bool
     */
    public static function getDealId($question_id)
    {
        $result = self::find('dealer',[['and', 'id', $question_id]]);
        if($result){
            return $result[0]['dealer'];
        }
        return false;
    }

    public static function getStatsText($stats)
    {
        switch ($stats){
            case self::WAITING_CHECK:
                $text = '待审核';
                break;
            case self::WAITING_DEAL:
                $text = '待解决';
                break;
            case self::DEALED:
                $text = '待确定';
                break;
            case self::WAITING_CHANGE:
                $text = '待修改';
                break;
            case self::CANNOT_DEAL:
                $text = '不能解决';
                break;
            default:
                $text = '异常状态';
        }
        return $text;
    }

    /**
     * 获取主键的下个值
     * @return int
     */
    public static function getNextId()
    {
        $sql = "select AUTO_INCREMENT from INFORMATION_SCHEMA.TABLES where TABLE_NAME='questions'";
        $base = new BaseModel();
        $result = $base->pdo->query($sql);
        $result = $result->fetchAll(PDO::FETCH_ASSOC);
        return intval($result[0]['AUTO_INCREMENT']);
    }


    /**
     * 获取最后插入id
     * @return int
     */
    public static function getLastQuestionsId()
    {
        $result = self::find('id',[],['id' => 'desc'], 1);
        return $result[0]['id'];
    }












    public static function findAll($field = '*')
    {
        $base = new BaseModel();
        return $base->selectAll('questions', $field);
    }

    /**
     * @param string $field
     * @param array $where
     * @param array $order
     * @param int $limit
     * @return array|false|PDOStatement
     */
    public static function find($field = '*', $where = [], $order = [], $limit = 0, $offset = 0)
    {
        $base = new BaseModel();
        return $base->select('questions', $field, $where, $order, $limit, $offset);
    }

    public static function add($date = [])
    {
        $base = new BaseModel();
        return $base->insert('questions', $date);
    }

    public static function update($date, $where)
    {
        $base = new BaseModel();
        return $base->updates('questions', $date, $where);
    }
}