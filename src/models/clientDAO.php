<?php
namespace ModelPro\Models;

use ModelPro\Models\Client;
use ModelPro\Exceptions\NotFoundException;
use ModelPro\Exceptions\DbException;
use PDO;

/**
 * Data Access Object para a entidade do cliente.
 */
class ClientDAO extends AbstractDAO {
    public function getClassname()
    {
        return 'ModelPro\Models\Client';
    }

    public function getTableName()
    {
        return 'clients';
    }

    public function getPrimaryKey()
    {
        return 'client_id';
    }

    /** Add um cliente */
    public function insert ($client) {
        $this->database->beginTransaction();

        $query = 'INSERT INTO clients (`name`, `email`, `phone_number`) VALUES ?, ?, ?';
        $stmt = $this->database->prepare($query);
        $stmt->execute([
            $client->getName(),
            $client->getEmail(),
            $client->getPhoneNumber()
        ]);
        
        if ($this->database->commit() == false) {
            $this->database->rollBack();
        }
    }

    /** Update um cliente de id x */
    public function update ($id, $client) {
        $this->database->beginTransaction();
        
        $query = 'UPDATE clients SET `name`=:p1, `email`=:p2, `phone_number`=:p3 WHERE client_id = :id';
        $stmt = $this->database->prepare($query);
        $stmt->execute([
            'id' => $id,
            'p1' => $client->getName(),
            'p2' => $client->getEmail(),
            'p3' => $client->getPhoneNumber()
        ]);

        if ($this->database->commit() == false) {
            $this->database->rollBack();
        }
    }
}