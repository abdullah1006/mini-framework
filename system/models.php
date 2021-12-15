<?php
namespace system;

use Opis\Database\Database;
use Opis\Database\Connection;

class models {

    public static function db()
    {
        $connection = new Connection(
            'mysql:host='. DB_HOST .';dbname=' . DB_NAME,
            DB_USERNAME,
            DB_PASSWORD
        );
        
        return new Database($connection);
    }
}