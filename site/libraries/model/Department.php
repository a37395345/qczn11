<?php

import('model.BaseModel');

class Department extends BaseModel
{
    
    const DBNAME = 'department';

    const MANAGER = 10;     // 管理部
    const IT = 7;
    const MONEY = 17;       // 财务部

    /**
     * 根据id获取部门名称
     * @param $id
     * @return string
     * @throws Exception
     */
    public static function getDepartmentName($id)
    {
        $result = self::find('name', [['and', 'id', $id]]);
        if($result != [] && $result != false){
            return strval($result[0]['name']);
        }
        echo '部门不存在';die;
    }

    /**
     * 获取父部门id
     * @param $id
     * @return int
     */
    public static function getDepartmentPid($id)
    {
        $result = self::find('pid', [['and', 'id', $id]]);
        if($result != [] && $result != false){
            return intval($result[0]['pid']);
        }
        echo '部门不存在';die;
    }

    /**
     * 根据部门名获取id
     * @param $name
     * @return int
     */
    public static function getDepartmentId($name)
    {
        $result = self::find('id',[['and', 'name', $name]]);
        if($result != false && $result != []){
            return intval($result[0]['id']);
        }else{
            echo '部门不存在';die;
        }
    }










    public static function find($field = '*', $where = [], $order = [], $limit = 0, $offset = 0)
    {
        $base = new BaseModel();
        return $base->select(self::DBNAME, $field, $where, $order, $limit, $offset);
    }
}