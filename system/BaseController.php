<?php
namespace system;
use system\models;

class BaseController {

    public $db;

    public function __construct()
    {
        $this->db = self::init_database();
    }

    private static function init_database()
    {
        return models::db();
    }

}