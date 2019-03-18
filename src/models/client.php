<?php
namespace ModelPro\Models;

/**
 * Classe modelo para o cliente
 */
class Client {
    private $client_id;
    private $name;
    private $email;
    private $phone_number;

    public function __construct ($id, $name, $email, $phone_number) {
        $this->client_id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->phone_number = $phone_number;
    }

    public function getId ()
    {
        return $this->client_id;
    }

    public function setId ($new_value)
    {
        $this->client_id = $new_value;
    }

    public function getName ()
    {
        return $this->name;
    }

    public function setName ($new_value)
    {
        $this->name = $new_value;
    }

    public function getEmail ()
    {
        return $this->email;
    }

    public function setEmail ($new_value)
    {
        $this->email = $new_value;
    }

    public function getPhoneNumber ()
    {
        return $this->phone_number;
    }

    public function setPhoneNumber ($new_value)
    {
        $this->phone_number = $new_value;
    }
}