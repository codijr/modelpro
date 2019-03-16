<?php
namespace ModelPro\Models;

use PDO;

abstract class AbstractDAO {
    protected $database;

    public function __construct (PDO $database) {
        $this->database = $database;
    }
}