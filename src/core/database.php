<?php
namespace ModelPro\Core;

use ModelPro\Core\Config;
use PDO;

/**
 * Singleton de acesso ao banco de dados, usado pelos DAOs.
 * Ao pegar a instância ela retorna o objeto PDO referênte a conexão.
 */
class Database {
    private static function connect () {
        $dbConfig = Config::instance()->get('database');
        return new PDO(
            'mysql:host='.$dbConfig['hostname'].
            ';dbname='. $dbConfig['dbname'],
            $dbConfig['username'],
            $dbConfig['password'], 
            null
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