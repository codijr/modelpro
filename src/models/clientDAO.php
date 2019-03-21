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
        $query = 'INSERT INTO clients (name, email, phone_number) VALUES (:1, :2, :3)';
        
        $stmt = $this->database->prepare($query);
        $stmt->execute([
            '1' => $client->getName(),
            '2' => $client->getEmail(),
            '3' => $client->getPhoneNumber()
        ]);
        
        if ($this->database->commit() == false) {
            $this->database->rollBack();
        }
    }

    /** Update um cliente de id x */
    public function update ($id, $client) {
        $this->database->beginTransaction();
        
        $query = 'UPDATE clients SET (name=:1, email=:2, phone_number=:3) WHERE client_id = :id';
        $stmt = $this->database->prepare($query);
        $stmt->execute([
            'id' => $id,
            '1' => $client->getName(),
            '2' => $client->getEmail(),
            '3' => $client->getPhoneNumber()
        ]);

        if ($this->database->commit() == false) {
            $this->database->rollBack();
        }
    }
}