<?php
namespace ModelPro\Models;

use PDO;

/**
 * Modelo abstrato para as classes DAO. Possui somente a referência para o BD.
 */
abstract class AbstractDAO {
    protected $database;

    public function __construct (PDO $database) {
        $this->database = $database;
    }
}