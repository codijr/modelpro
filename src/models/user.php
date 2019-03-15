<?php
namespace ModelPro\Models;

/**
 * Modelo do usuário.
 */
class User {
    public $user_id;
    public $username;
    public $password;
    public $admin_level;

    public $name;
    public $email;
    public $phone;

    public $join_date;

    public function __construct ($id, $name) {
        $this->$id = $id;
        $this->$name = $name;
    }
}