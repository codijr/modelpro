<?php
namespace ModelPro\Models;

/**
 * Modelo de projeto.
 */
class Project {
    private $project_id;
    private $codename;
    private $code;
    private $start_date;
    private $end_date;
    private $status;

    private $client_id;

    private $description;
    private $scope;
    private $links;
    private $tags;

    public function __construct ($id=NULL, $codename, $code) {
        $this->id = $id;
        $this->codename = $codename;
        $this->code = $code;
    }

    /**
     * Get o valor de project_id
     */ 
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Set o valor de project_id
     *
     * @return  self
     */ 
    public function setProjectId($project_id)
    {
        $this->project_id = $project_id;

        return $this;
    }

    /**
     * Get o valor de codename
     */ 
    public function getCodename()
    {
        return $this->codename;
    }

    /**
     * Set o valor de codename
     *
     * @return  self
     */ 
    public function setCodename($codename)
    {
        $this->codename = $codename;

        return $this;
    }

    /**
     * Get o valor de code
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set o valor de code
     *
     * @return  self
     */ 
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get o valor de start_date
     */ 
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Set o valor de start_date
     *
     * @return  self
     */ 
    public function setStartDate($start_date)
    {
        $this->start_date = $start_date;

        return $this;
    }

    /**
     * Get o valor de end_date
     */ 
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * Set o valor de end_date
     *
     * @return  self
     */ 
    public function setEndDate($end_date)
    {
        $this->end_date = $end_date;

        return $this;
    }

    /**
     * Get o valor de status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set o valor de status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
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
     * Get o valor de description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set o valor de description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get o valor de scope
     */ 
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Set o valor de scope
     *
     * @return  self
     */ 
    public function setScope($scope)
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * Get o valor de links
     */ 
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Set o valor de links
     *
     * @return  self
     */ 
    public function setLinks($links)
    {
        $this->links = $links;

        return $this;
    }

    /**
     * Get o valor de tags
     */ 
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set o valor de tags
     *
     * @return  self
     */ 
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }
}