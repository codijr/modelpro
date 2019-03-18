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

    public function __construct ($id=NULL, $name, $email, $phone_number) {
        $this->client_id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->phone_number = $phone_number;
    }

    /**
     * Get o valor de client_id
     */ 
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * Set o valor de client_id
     *
     * @return  self
     */ 
    public function setClientId($client_id)
    {
        $this->client_id = $client_id;

        return $this;
    }

    /**
     * Get o valor de name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set o valor de name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get o valor de email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set o valor de email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get o valor de phone_number
     */ 
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * Set o valor de phone_number
     *
     * @return  self
     */ 
    public function setPhoneNumber($phone_number)
    {
        $this->phone_number = $phone_number;

        return $this;
    }
}