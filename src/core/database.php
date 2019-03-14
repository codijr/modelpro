<?php
namespace ModelPro\Core;

use ModelPro\Utils\Config;
use PDO;

class Database {

    private static function connect () {
        $dbConfig = Config::instance()->get('database');
        return new PDO(
            'mysql:host='.$dbConfig['hostname'].
            ';dbname='. $dbConfig['dbname'],
            $dbConfig['username'],
            $dbConfig['password']
        );
    }

    public static function instance () {
        static $instance = false;
        if ($instance === false) {
            $instance = new static();
        }
        return $instance->connect();
    }
}