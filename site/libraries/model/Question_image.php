<?php

import('model.BaseModel');

class Question_image extends BaseModel
{
    public static function add($date = [])
    {
        $base = new BaseModel();
        return $base->insert('wenti_image', $date);
    }

    public static function update($date, $where)
    {
        $base = new BaseModel();
        return $base->updates('wenti_image', $date, $where);
    }

    public static function find($field, $where, $order = [])
    {
        $base = new BaseModel();
        return $base->select('wenti_image', $field, $where, $order);
    }

    public static function delete($where)
    {
        $base = new BaseModel();
        return $base->deletes('wenti_image', $where);
    }
}