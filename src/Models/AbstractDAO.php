<?php
namespace ModelPro\Models;

use ModelPro\Exceptions\NotFoundException;
use PDO;

/**
 * Modelo abstrato para as classes DAO. Possui métodos genéricos e a referência para o BD.
 */
abstract class AbstractDAO {
    protected $database;

    public function __construct (PDO $database) {
        $this->database = $database;
    }

    abstract public function getClassname();
    abstract public function getTableName();
    abstract public function getPrimaryKey();

    /**
     * Função genérica get. Recebe o id do objeto como parâmetro.
     */
    public function get ($id) {
        $query = 'SELECT * FROM '. $this->getTableName() .' WHERE '. $this->getPrimaryKey() .' = '. $id;
        $stmt = $this->database->prepare($query);
        $stmt->execute();

        $result = $stmt->fetchObject($this->getClassName());

        if (empty($result)) {
            return null;
        }

        return $result;
    }

    /**
     * Função genérica getAll.
     */
    public function getAll () {
        $query = 'SELECT * FROM '. $this->getTableName();
        $stmt = $this->database->prepare($query);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, $this->getClassName());

        if (empty($results)) {
            return null;
        }

        return $results;
    }

    /**
     * Função genérica delete.
     */
    public function delete ($id) {
        $this->database->beginTransaction();

        $query = 'DELETE FROM '. $this->getTableName() .' WHERE '. $this->getPrimaryKey() .' = '. $this->$id;
        $stmt = $this->database->prepare($query);
        $stmt->execute();

        if ($this->database->commit() == false) {
            $this->database->rollBack();
            return false;
        }

        return true;
    }

    /**
     * insert deve possuir uma implementação específica, devida as divergências entre cada modelo.
     */
    abstract public function insert ($object);

    /**
     * update deve possuir uma implementação específica, devida as divergências entre cada modelo.
     */
    abstract public function update ($id, $object);

}