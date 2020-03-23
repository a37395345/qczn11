<?php

import('model.BaseModel');
import('model.Emp');
import('publicFunction.CommonFunction');

class Zemp_zhiwei extends BaseModel
{

    const DBNAME = 'zemp_zhiwei';

    const HEAD_MANAGER = 58;
    /**
     * 根据pid查归属职位id
     * @param $pid
     * @return array|null
     */
    public static function getIdByPid($pid)
    {
        $result = self::find('id', [['and', 'pid', $pid]]);
        if($result != false && $result != []){
            return CommonFunction::array_column($result, 'id');
        }else{
            return null;
        }
    }


    /**
     * 根据职位id获取上级职位id
     * @param $id
     * @return int
     */
    public static function getPid($id)
    {
        $result = self::find('pid', [['and', 'id', $id]]);
        if($result != false){
            return intval($result[0]['pid']);
        }else{
            echo '查无此职';die;
        }
    }


    /**
     * 根据职位id获取部门id
     * @param $id
     * @return int
     */
    public static function getDepartment($id)
    {
        $result = self::find('department_id', [['and', 'id', $id]]);
        if($result != [] && $result != false){
            return intval($result[0]['department_id']);
        }else{
            echo '职位不存在';die;
        }
    }

    public static function checkBaoxiaoMoney($zhiwei, $money){
        $info = self::find('baoxiao_limit', [['and', 'id', $zhiwei]]);
        if($info != false && $info != []){
            $limit = $info[0]['baoxiao_limit'];
            if($money <= $limit){
                return true;
            }
            return false;
        }else{
            return false;
        }
    }


    public static function getIdByDengji($dengji, $department){
        $info = self::find('id', [
            ['and', 'dengji', $dengji],
            ['and', 'department_id', $department]
        ]);

        return $info[0]['id'];
    }










    public static function find($field = '*', $where = [], $order = [], $limit = 0, $offset = 0)
    {
        $base = new BaseModel();
        return $base->select(self::DBNAME, $field, $where, $order, $limit, $offset);
    }
}