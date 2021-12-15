<?php
namespace application\models;

use system\models;

class user extends models {

    public function getFirstUser()
    {
        $result = self::db()->from('users')
             ->select()
             ->first();
             return $result;
    }
}