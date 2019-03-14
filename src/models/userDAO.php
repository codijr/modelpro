<?php
namespace ModelPro\Models;

use ModelPro\Models\User;
use ModelPro\Exceptions\NotFoundException;

class UserDAO extends AbstractModel {
    
    public function get ($userId) {
        $query = 'SELECT * FROM user WHERE user_id = :id';
        $sth = $this->database->prepare($query);
        $sth->execute(['id' => $userId]);

        $row = $sth->fetch();

        if (empty($row)) {
            throw new NotFoundException;
        }

        return new User($row['user_id'], $row['name']);
    }
}