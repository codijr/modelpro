<?php
namespace ModelPro\Models;

use ModelPro\Exceptions\DbException;


class clientDAO extends AbstractDAO {
    const CLASSNAME = '\ModelPro\Models\Project';

    /** Get um cliente de id x */
    public function get ($id) {
        $query = 'SELECT * FROM clients WHERE client_id = :id';
        $stmt = $this->database->prepare($query);
        $stmt->execute(['id' => $id]);

        $stmt->setFetchMode(PDO::FETCH_CLASS, CLASSNAME);
        $result = $stmt->fetch();

        if (empty($result)) {
            throw new NotFoundException;
        }

        return $result;
    }

    /** Get todos os clientes */
    public function getAll () {
        $query = 'SELECT * FROM clients';
        $stmt = $this->database->prepare($query);
        $stmt->execute();
        $results = $stmt->fetchAll();

        if (empty($results)) {
            throw new NotFoundException;
        }

        return $results;
    }

    /** Add um cliente */
    public function add (Client $client) {
        $query = 'INSERT INTO clients VALUES (:1, :2, :3, :4)';
        try {
            $stmt = $this->database->prepare($query);
            $stmt->execute([
                '1' => $client->client_id,
                '2' => $client->name,
                '3' => $client->email,
                '4' => $client->phone_number
            ]);
        } catch (\Exception $e) {
            throw new DbException;
        }
    }

    /** Update um cliente de id x */
    public function update ($id, $client) {
        $this->database->beginTransaction();
        $query = 'UPDATE clients SET (name=:1, email=:2, phone_number=:3) WHERE client_id = :id';
        try {
            $stmt = $this->database->prepare($query);
            $stmt->execute([
                'id' => $id,
                '1' => $client->name,
                '2' => $client->email,
                '3' => $client->phone_number
            ]);
            $this->database->commit();
        } catch (\Exception $e) {
            $this->database->rollBack();
            throw new DbException;
        }
    }

    /** Delete um cliente de id x */
    public function del ($id) {
        $this->database->beginTransaction();
        $query = 'DELETE FROM clients VALUES client_id = :id';
        try {
            $stmt = $this->database->prepare($query);
            $stmt->execute(['id' => $id]);
            $this->database->commit();
        } catch (\Exception $e) {
            $this->database->rollBack();
            throw new DbException;
        }
    }
}