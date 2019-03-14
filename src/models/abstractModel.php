<?php
namespace ModelPro\Models;

use PDO;

abstract class AbstractModel {
    protected $database;

    public function __construct (PDO $database) {
        $this->database = $database;
    }
}