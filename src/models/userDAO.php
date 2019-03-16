<?php
namespace ModelPro\Models;

use ModelPro\Models\User;
use ModelPro\Exceptions\NotFoundException;

/**
 * Data Access Object para a entidade de usuário.
 */
class UserDAO extends AbstractDAO {
    
    public function get ($id) {
        $query = 'SELECT * FROM user WHERE user_id = :id';
        $sth = $this->database->prepare($query);
        $sth->execute(['id' => $id]);

        $row = $sth->fetch();

        if (empty($row)) {
            throw new NotFoundException;
        }

        return new User($row['user_id'], $row['name']);
    }
}