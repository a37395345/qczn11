<?php

import('model.BaseModel');

class Admin_rule extends BaseModel
{
    public static function find($field, $where)
    {
        $base = new BaseModel();
        return $base->select('admin_rule', $field, $where);
    }
}