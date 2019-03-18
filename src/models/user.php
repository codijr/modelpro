<?php
namespace ModelPro\Models;

/**
 * Modelo do usuário.
 */
class User {
    private $user_id;
    private $username;
    private $password;
    private $admin_level;

    private $name;
    private $email;
    private $phone_number;
    private $job_title;
    private $entrance_semester;

    public function __construct ($id=NULL, $name) {
        $this->$id = $id;
        $this->$name = $name;
    }

    /**
     * Get o valor de user_id
     */ 
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set o valor de user_id
     *
     * @return  self
     */ 
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Get o valor de username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set o valor de username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get o valor de password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set o valor de password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get o valor de admin_level
     */ 
    public function getAdminLevel()
    {
        return $this->admin_level;
    }

    /**
     * Set o valor de admin_level
     *
     * @return  self
     */ 
    public function setAdminLevel($admin_level)
    {
        $this->admin_level = $admin_level;

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

    /**
     * Get o valor de job_title
     */ 
    public function getJobTitle()
    {
        return $this->job_title;
    }

    /**
     * Set o valor de job_title
     *
     * @return  self
     */ 
    public function setJobTitle($job_title)
    {
        $this->job_title = $job_title;

        return $this;
    }

    /**
     * Get o valor de entrance_semester
     */ 
    public function getEntranceSemester()
    {
        return $this->entrance_semester;
    }

    /**
     * Set o valor de entrance_semester
     *
     * @return  self
     */ 
    public function setEntranceSemester($entrance_semester)
    {
        $this->entrance_semester = $entrance_semester;

        return $this;
    }
}