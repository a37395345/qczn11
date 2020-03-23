<?php

import('model.BaseModel');

class Shop extends BaseModel
{
    const DBNAME = 'shop';

    public static function getAllShops()
    {
        $result = self::find('*', [['and', 'stutas', 0]]);
        foreach ($result as $key => $value){
            if(strstr($value['shop_name'], '店') == false){
                unset($result[$key]);
            }
        }

        return $result;
    }













    public static function find($field, $where)
    {
        $base = new BaseModel();
        return $base->select(self::DBNAME, $field, $where);
    }
}