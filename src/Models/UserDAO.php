<?php
namespace ModelPro\Models;

use ModelPro\Models\User;
use ModelPro\Exceptions\NotFoundException;

/**
 * Data Access Object para a entidade de usuário.
 */
class UserDAO extends AbstractDAO {
    public function getClassname()
    {
        return 'ModelPro\Models\User';
    }

    public function getTableName()
    {
        return 'users';
    }

    public function getPrimaryKey()
    {
        return 'user_id';
    }

    public function insert ($user) {

    }

    public function update ($id, $user) {

    }
}